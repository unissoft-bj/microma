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
class mobliemsg_controller extends common
{
	function index_action(){
 		$where="1";
		if($_GET["state"]=="1"){
			$where.=" and `state`='1'";
			$urlarr["state"]='1';
		}elseif($_GET["state"]=="2"){
			$where.=" and `state`='0'";
			$urlarr["state"]='2';
		}
		if($_GET["s_news_id"]){
			if ($_GET['type']=='2'){
				$where.=" and `content` like '%".$_GET["s_news_id"]."%'";
			}else{
			    $where.=" and `moblie` like '%".$_GET["s_news_id"]."%'";
			}
			$urlarr["type"]="".$_GET["type"]."";
			$urlarr["s_news_id"]="".$_GET["s_news_id"]."";
		}
		if($_GET["order"]){
			if($_GET["order"]=="desc"){
				$order=" order by `".$_GET["t"]."` desc";
			}else{
				$order=" order by `".$_GET["t"]."` asc";
			}
			
		}else{
			$order=" order by `id` desc";
		}
		if($_GET["order"]=="asc"){
			$this->yunset("order","desc");
		}else{
			$this->yunset("order","asc");
		}
		$urlarr["page"]="{{page}}";
		$pageurl=$this->url("index",$_GET["m"],$urlarr);
		$rows=$this->get_page("moblie_msg",$where.$order,$pageurl,$this->config["sy_listnum"]);
		$this->yunset("get_type", $_GET);
		$this->yuntpl(array('admin/admin_mobliemsg'));
	}
	function del_action(){

		if(is_array($_POST['del'])){
			$delid=@implode(',',$_POST['del']);
			$layer_type=1;
		}else{
			$this->check_token();
			$delid=(int)$_GET['id'];
			$layer_type=0;
		}
		if(!$delid){ 
			$this->layer_msg('��ѡ��Ҫɾ�������ݣ�',8,$layer_type,$_SERVER['HTTP_REFERER']);
		}
		$del=$this->obj->DB_delete_all("moblie_msg","`id` in ($delid)"," ");
		$del?$this->layer_msg('���ż�¼(ID:'.$delid.')ɾ���ɹ���',9,$layer_type,$_SERVER['HTTP_REFERER']):$this->layer_msg('ɾ��ʧ�ܣ�',8,$layer_type,$_SERVER['HTTP_REFERER']); 
	}
}

?>