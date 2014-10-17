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
class description_controller extends common{
	function index_action()
	{
		if($_GET['order'])
		{
			if($_GET['order']=="desc")
			{
				$order=" order by `".$_GET['t']."` desc";
			}else{
				$order=" order by `".$_GET['t']."` asc";
			}
		}else{
			$order=" order by `id` desc";
		}
		$descrows=$this->obj->DB_select_all("description","1 $order");
		$this->yunset("descrows",$descrows);
		$this->yuntpl(array('admin/admin_description'));
	}
	function add_action(){
		$descrow=$this->obj->DB_select_once("description","`id`='".$_GET["id"]."'");
		$this->yunset("descrow",$descrow);
		$this->yuntpl(array('admin/admin_description_add'));
	}
	function save_action(){
		extract($_POST);
		$value="`name`='$name',";
		if($url){
			$urlarr=explode(".",$url);
			$arrnum=count($urlarr);
			if($urlarr[$arrnum-1]!="html"){
				$this->obj->ACT_layer_msg("����ȷ��д��̬��ҳ���ƣ�",8,$_SERVER['HTTP_REFERER']);
			}
			if(substr($url,0,1)=="/"){
				$url=substr($url,1);
			}
		}
		$value.="`url`='$url',";
		$value.="`title`='$title',";
		$value.="`keyword`='$keyword',";
		$value.="`descs`='$description',";
		$value.="`top_tpl`='$top_tpl',";
		$value.="`top_tpl_dir`='$top_tpl_dir',";
		$value.="`footer_tpl`='$footer_tpl',";
		$value.="`footer_tpl_dir`='$footer_tpl_dir',";
		$value.="`ctime`='".mktime()."',";
		$value.="`sort`='$sort',";
		$value.="`is_nav`='$is_nav',";
		$content = str_replace("&amp;","&",html_entity_decode($content,ENT_QUOTES,"GB2312"));
		$value.="`content`='".$content."'";
		if(!$id){
			$descid=$this->obj->DB_insert_once("description",$value);
			$ids=$descid;
			$alert="���";
		}else{
			$descid=$this->obj->DB_update_all("description",$value,"`id`='$id'");
			$ids=$id;
			$alert="����";
		}
		$descid?$this->obj->ACT_layer_msg("����ҳ��(ID:".$ids.")".$alert."�ɹ���",9,"index.php?m=description",2,1):$this->obj->ACT_layer_msg($alert."ʧ�ܣ�",8,$_SERVER['HTTP_REFERER']);
	}
	function del_action(){
		if(is_array($_POST['del'])){
			$linkid=@implode(',',$_POST['del']);
			foreach($del as $key=>$value){
				$info = $this->obj->DB_select_once("description","`id`='$value'");
				$filename = $info["url"];
				if(file_exists($filename)){
					@unlink($filename);
				}
				$info = "";
			}
			$layer_type='1';
		}else{
			$this->check_token();
			$linkid=$_GET["id"];
			$info = $this->obj->DB_select_once("description","`id`='$linkid'");
			$filename = APP_PATH."/".$info["url"];
			if(file_exists($filename)){
				@unlink($filename);
			}
			$layer_type='0';
		}
		$delid=$this->obj->DB_delete_all("description","`id` in ($linkid)","");
		$delid?$this->layer_msg('����ҳ��(ID:'.$linkid.')ɾ���ɹ���',9,$layer_type,$_SERVER['HTTP_REFERER']):$this->layer_msg('ɾ��ʧ�ܣ�',8,$layer_type,$_SERVER['HTTP_REFERER']);
	}
	function make_action(){
		extract($_GET);
		if($id){
			$where="`id`='$id'";
		}else{
			$where="1";
		}
		$rows=$this->obj->DB_select_all("description",$where);
		if(@is_array($rows)){
			foreach($rows as $row){
				$url=$this->config["sy_weburl"]."/index.php?m=index&c=get&id=".$row[id];
				$fw=$this->obj->html("../".$row["url"],$url);
			}
		}
 		$fw?$this->layer_msg("���ɳɹ���",9,0,$_SERVER['HTTP_REFERER']):$this->obj->layer_msg("����ʧ�ܣ�",8,0,$_SERVER['HTTP_REFERER']);
	}
}
?>