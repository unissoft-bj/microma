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
class information_controller extends common
{
	function index_action(){

		$this->yuntpl(array('admin/information'));
	}
	function save_action(){
		extract($_POST);
		if(trim($content)==''){
			$this->obj->ACT_layer_msg("������������ݣ�",8,$_SERVER['HTTP_REFERER']);
		}
		$uidarr=array();
		if($all==4){
			$useremail=@explode(',',$userarr);
			if(is_array($useremail)){
				foreach($useremail as $v){
					$uidarr[]=$v;
				}
			}
		}else{
			$userrows=$this->obj->DB_select_all("member","`usertype`='".$all."'","moblie");
			if(is_array($userrows)){
				foreach($userrows as $v){
					$uidarr[]=$v["moblie"];
				}
			}
		}
		if(is_array($uidarr)){
			if($this->config["sy_msguser"]=="" || $this->config["sy_msgpw"]=="" || $this->config["sy_msgkey"]==""){
				$this->obj->ACT_layer_msg("��û�����ö��ţ�",8,$_SERVER['HTTP_REFERER']);
			}
			foreach($uidarr as $v){
				$msguser=$this->config["sy_msguser"];
				$msgpw=$this->config["sy_msgpw"];
				$msgkey=$this->config["sy_msgkey"];
				$this->obj->sendSMS($msguser,$msgpw,$msgkey,$v,$content);
			}
		}
		$this->obj->ACT_layer_msg("���ͳɹ�������û����Ͷ�Ϣ�����ӳ٣�",9,$_SERVER['HTTP_REFERER'],2,1);
	}
}
?>