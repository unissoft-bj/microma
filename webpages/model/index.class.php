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
class index_controller extends common
{
	function index_action(){
		$CacheArr['job'] =array('job_index','job_type','job_name');
		$CacheArr['user'] =array('userdata','userclass_name');
		$CacheArr['com'] =array('comdata','comclass_name');
		$CacheArr['industry'] =array('industry_index','industry_name');

		$this->CacheInclude($CacheArr);

		
		$jobnum=$this->obj->DB_select_num("company_job","`sdate`<'".time()."' and `edate`>'".time()."' and `state`='1' and `r_status`!=2 and `status`!=1");
		$this->yunset("jobnum",$jobnum);
		if($_SESSION["cityid"]){
			$this->seo("index",$_SESSION['webtitle'],$_SESSION['webkeyword'],$_SESSION['webmeta']);
			include(PLUS_PATH."domain_cache.php");
			if(is_array($site_domain)){
				foreach($site_domain as $d){
					if($d['cityid']==$_SESSION["cityid"]){
						$domain['tpl']=$d['tpl'];
					}
				}
			}
			if($domain['tpl']!=""){
				$tpl=@explode(".",$domain['tpl']);
				$this->yun_tpl(array($tpl[0]));
			}else{
				$this->yun_tpl(array('index'));
			}
		}else{
			$this->seo("index");
			$this->yun_tpl(array('index'));
		}
	}

	function top_action(){
		$this->seo("top");
		$this->yun_tpl(array('top'));
	}
	function moblie_action(){
		$this->seo("moblie");
		
		$this->yun_tpl(array('moblie'));
		
	}
	function site_action()
	{
		if($this->config["sy_web_site"]!="1")
		{
			$this->obj->ACT_msg($_SERVER['HTTP_REFERER'], $msg = "��δ������վ��ģʽ��");
		}
		$this->seo("index");
		$this->yun_tpl(array('site'));
	}
	function logout_action()
	{
		$this->logout();
	}
	function GetHits_action()
    {
    	if($_GET['id']){
    		$this->obj->DB_update_all("news_base","`hits`=`hits`+1","`id`='".(int)$_GET['id']."'");
    		$news_info = $this->obj->DB_select_once("news_base","`id`='".(int)$_GET['id']."'");
    		echo "document.write('".$news_info["hits"]."')";
    	}
    }
	function get_action(){
		$row=$this->obj->DB_select_once("description","`id`='".(int)$_GET['id']."'");
		$top="";$footer="";
		if($row["top_tpl"]==1){
			 $top="../template/".$this->config['style']."/header";
		}else if($row["top_tpl"]==3){
			 $top=$row["top_tpl_dir"];
		}
		if($row["footer_tpl"]==1){
			 $footer="../template/".$this->config['style']."/footer";
		}else if($row["footer_tpl"]==3){
			 $footer=$row["footer_tpl_dir"];
		}
		$seo["title"]=$row["title"];
		$seo["keywords"]=$row["keyword"];
		$seo["description"]=$row["descs"];
		$row=$this->obj->DB_select_once("description","`id`='".$_GET['id']."'");
		$this->yunset("seo",$seo);
		$this->yunset("content",$row["content"]);
		$this->header_desc($row["title"],$row["keyword"],$row["desc"]);
		$make="../template/".$this->config['style']."/make";
		$make_top="../template/".$this->config['style']."/make_top";
		$this->yuntpl(array($make_top,$top,$make,$footer));
	}
}
?>