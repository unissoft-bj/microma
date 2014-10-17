<?php
/* *
* $Author ��PHPYUN�����Ŷ�
*
* ����: http://www.phpyun.com
*
* ��Ȩ���� 2009-2014 ��Ǩ�γ���Ϣ�������޹�˾������������Ȩ����
*
* ���������δ����Ȩǰ���£�����������ҵ��Ӫ�����ο����Լ��κ���ʽ���ٴη�����
*/
class news_controller extends common
{
	function index_action(){
		$this->seo("news");
		$this->yun_tpl(array('index'));
	}

	function list_action()
	{
		$this->seo("newslist");
		$this->yun_tpl(array('list'));
	}

	function show_action(){
		$id=(int)$_GET['id'];
		$news=$this->obj->DB_select_once("news_base","`id`='".$id."'");
		$row=$this->obj->DB_select_once("news_content","`nbid`='".$id."'");
		$news['content']=$row['content'];
		$news_last=$this->obj->DB_select_once("news_base","`id`<'".$id."' order by `id` desc");
		if(!empty($news_last)){
			$news_last["url"]=$this->config['sy_weburl']."/news/".date("Ymd",$news_last["datetime"])."/".$news_last['id'].".html";
		}
		$news_next=$this->obj->DB_select_once("news_base","`id`>'".$id."' order by `id` asc");
		if(!empty($news_next)){
			$news_next["url"]=$this->config['sy_weburl']."/news/".date("Ymd",$news_next["datetime"])."/".$news_next['id'].".html";
		}
		$class=$this->obj->DB_select_once("news_group","`id`='".$news['nid']."'");
 		if($news[0]["keyword"]!="")
		{
 			$keyarr = @explode(",",$news["keyword"]);
			if(is_array($keyarr) && !empty($keyarr))
			{
				foreach($keyarr as $key=>$value)
				{
					$sqlkeyword[]= " `keyword` LIKE '%$value%'";
				}
				$sqlkw = @implode("OR",$sqlkeyword);
				$about=$this->obj->DB_select_all("news_base"," 1 AND  ($sqlkw) AND `id`<>'".$id."' order by `id` desc limit 6");
				if(is_array($about)){
					foreach($about as $k=>$v){
						$about[$k]["url"]=$this->config['sy_weburl']."/news/".date("Ymd",$v["datetime"])."/".$v['id'].".html";
					}
				}
			}
		}
		$info=$news;
		$data['news_title']=$news['title'];
		$data['news_keyword']=$news['keyword'];
		$data['news_author']=$news['author'];
		$data['news_source']=$news['source'];
		$data['news_class']=$class['name'];
		$data['news_desc']=$this->obj->GET_content_desc($news['description']);
		$this->data=$data;
		$info["news_class"]=$class['name'];
		$info["last"]=$news_last;
		$info["next"]=$news_next;
		$info["like"]=$about;
		$this->yunset("Info",$info);
		$this->seo("news_article");
		$this->yun_tpl(array('show'));
	}
}
?>