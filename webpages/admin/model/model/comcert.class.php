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
class comcert_controller extends common
{
	function index_action(){
		if($_GET["status"]==1){
			$where=" and a.`status`='1'";
			$page_url["status"]='1';
		}else if($_GET["status"]==2){
			$where=" and a.`status`='0'";
			$page_url["status"]='2';
		}
		if($_GET["keyword"]){
			$where.=" and b.`name` like '%".$_GET["keyword"]."%'";
			$page_url["keyword"]=$_GET["keyword"];
		}
		if($_GET["order"]){
			if($_GET["order"]=="desc"){
				$order="order by a.`".$_GET["t"]."` desc";
			}else{
				$order="order by a.`".$_GET["t"]."` asc";
			}
			$page_url['order']=$_GET['order'];
			$page_url['t']=$_GET['t'];
		}else{
			$order="order by a.`id` desc";
		}
		include(LIB_PATH."page3.class.php");
		$limit=13;
		$page=$_GET["page"]<1?1:$_GET["page"];
		$ststrsql=($page-1)*$limit;
		$page_url["page"]="{{page}}";
		$pageurl=$this->url("index",$_GET["m"],$page_url);
		$count=$this->obj->DB_select_alls("company_cert","company","a.`uid`=b.`uid` and a.`type`='3' $where","a.uid");
 		$num = count($count);
 		$page = new page($page,$limit,$num,$pageurl);
		$pagenav=$page->numPage();
		$rows=$this->obj->DB_select_alls("company_cert","company","a.`uid`=b.`uid` and a.`type`='3' $where $order limit $ststrsql,$limit","b.name,a.*");
		$this->yunset("pagenav",$pagenav);

		$this->yunset("rows",$rows);
		$this->yuntpl(array('admin/admin_com_cert'));
	}
	function status_action(){
		extract($_GET);
		$company=$this->obj->DB_select_once("company","`uid`='$uid'");
		if($status!="1"){
			$cert=@explode(",",$company["cert"]);
			foreach($cert as $v){
				if($v!="3"){
					$certid[]=$v;
				}
			}
			$cert=@implode(",",$certid);
		}else{
			$cert=$company["cert"].",3";
		}
		$this->obj->DB_update_all("company","`cert`='$cert'","`uid`='$uid'");

		$id = @explode(",",$pid);
		if(is_array($id)){
			foreach($id as $value){
				$idlist[] = $value;
			}
			$aid = @implode(",",$idlist);
			$id=$this->obj->DB_update_all("company_cert","`status`='$status',`statusbody`='".$statusbody."'","`id` IN ($aid)");
			$this->send_msg_email(array("email"=>$company["linkmail"],"certinfo"=>$statusbody,"comname"=>$company["name"],"type"=>"comcert"));
			$id?$this->obj->get_admin_msg($_SERVER['HTTP_REFERER'],"���óɹ���"):$this->obj->get_admin_msg($_SERVER['HTTP_REFERER'],"����ʧ�ܣ�");
		}else{
			$this->obj->get_admin_msg($_SERVER['HTTP_REFERER'],"�Ƿ�������");
		}
	}

	function del_action(){
	
		if(is_array($_POST['del'])){
			$linkid=@implode(',',$del);
		}else{
			$this->check_token();
			$linkid=$_GET["id"];
		}
		if($linkid==""){
			$this->obj->get_admin_msg($_SERVER['HTTP_REFERER'],"��û��ѡ��");
		}
	    $cert=$this->obj->DB_select_all("company_cert","`id` in ($linkid) and `type`='3'");
	     if(is_array($cert)){
	     	foreach($cert as $v){
	     		@unlink("../".$v["check"]);
	     	}
	     }
		$delid=$this->obj->DB_delete_all("company_cert","`id` in ($linkid)","");
		$delid?$this->obj->get_admin_msg($_SERVER['HTTP_REFERER'],"ɾ���ɹ���"):$this->obj->get_admin_msg($_SERVER['HTTP_REFERER'],"ɾ��ʧ�ܣ�");
	}

}

?>