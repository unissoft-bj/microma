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
class company_order_controller extends common
{
	function index_action(){
		if($_GET["news_search"]){
			extract($_GET);
			if ($typezf!=""){
				$where .=" `order_type`='$typezf'";
				$urlarr["typezf"]=$typezf;
			}else{
				$where .="1";
			}
			if ($typedd!=""){
				$where .=" and `type`=$typedd";
				$urlarr["typedd"]=$typedd;
			}
			if ($keyword!=""){
				if ($typeca=='2'){
				    $where .=" and `order_remark` like '%".$keyword."%'";
			     }elseif($typeca=='1'){
				     $where .=" and `order_id` like '%".$keyword."%'";
			     }
			     $urlarr["typeca"]=$typeca;
			     $urlarr["keyword"]=$_GET["keyword"];
			}
			 $urlarr["news_search"]=$_GET["news_search"];
		}else{
			$where=1;
		}
		if($_GET["order_state"]!=""){
	           $where.=" and `order_state`='".$_GET["order_state"]."'";
				$urlarr["order_state"]=$_GET["order_state"];
		    }
		if($_GET['order'])
		{
			$where.=" order by ".$_GET['t']." ".$_GET['order'];
			$urlarr['order']=$_GET['order'];
			$urlarr['t']=$_GET['t'];
		}else{
			$where.=" order by id desc";
		}
		$urlarr["page"]="{{page}}";
		$pageurl=$this->url("index",$_GET["m"],$urlarr);
		$rows=$this->get_page("company_order",$where,$pageurl,$this->config["sy_listnum"]);
		include (APP_PATH."/data/db.data.php");
		if(is_array($rows)){
			foreach($rows as $k=>$v){
				$rows[$k]["order_state_n"]=$arr_data["paystate"][$v["order_state"]];
				$rows[$k]["order_type_n"]=$arr_data["pay"][$v["order_type"]];
 			}
		}
        $this->yunset("get_type", $_GET);
		$this->yunset("rows",$rows);
		$this->yuntpl(array('admin/admin_company_order'));
	}
	function edit_action(){
		$id=(int)$_GET["id"];
		$row=$this->obj->DB_select_alls('member',"company_order","b.`id`='".$id."' and a.`uid`=b.`uid`","a.username,b.*");
		$this->yunset("row",$row[0]);
		$this->yuntpl(array('admin/admin_company_order_edit'));
	}
	function save_action(){
		$r_id=$this->obj->DB_update_all("company_order","`order_price`='".$_POST['order_price']."',`order_remark`='".$_POST['order_remark']."'","id='".$_POST['id']."'");
		isset($r_id)?$this->obj->ACT_layer_msg("��ֵ��¼(ID:".$_POST['id'].")�޸ĳɹ���",9,"index.php?m=company_order",2,1):$this->obj->ACT_layer_msg("�޸�ʧ��,���������ԣ�",8,"index.php?m=company_order");
	}
	function setpay_action(){
		$del=(int)$_GET["id"];
		$row=$this->obj->DB_select_once("company_order","`id`='$del'");
		if($row["order_state"]==1||$row["order_state"]==3){
			$nid=$this->upuser_statis($row);
			isset($nid)?$this->layer_msg("��ֵ��¼(ID:".$del.")ȷ�ϳɹ���",9):$this->layer_msg("ȷ��ʧ��,���������ԣ�",8);
		}else{
			$this->layer_msg("������ȷ�ϣ������ظ�������",8);
		}
	}
	function del_action(){
		$this->check_token();
	    if($_GET["del"]){
	    	$del=$_GET["del"];
	    	if(is_array($del)){
				$this->obj->DB_delete_all("company_order","`id` in(".@implode(',',$del).")","");
				$this->layer_msg( "��ֵ��¼(ID:".@implode(',',$del).")ɾ���ɹ���",9,1,$_SERVER['HTTP_REFERER']);
	    	}else{
				$this->layer_msg( "��ѡ����Ҫɾ������Ϣ��",8,1,$_SERVER['HTTP_REFERER']);
	    	}
	    }
	    if(isset($_GET["id"])){
			$result=$this->obj->DB_delete_all("company_order","`id`='".$_GET["id"]."'" );
			isset($result)?$this->layer_msg('��ֵ��¼(ID:'.$_GET["id"].')ɾ���ɹ���',9,0,$_SERVER['HTTP_REFERER']):$this->layer_msg('ɾ��ʧ�ܣ�',8,0,$_SERVER['HTTP_REFERER']);
		}else{
			$this->obj->ACT_layer_msg("�Ƿ�������",8,$_SERVER['HTTP_REFERER']);
		}
	}
}
?>