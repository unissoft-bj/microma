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
class email_controller extends common{
	function index_action(){
		$this->yuntpl(array('admin/admin_send_email'));
	}
	function send_action(){
		extract($_POST);
		if($email_title==''||$content==''){
			$this->obj->ACT_layer_msg("�ʼ����������Ϊ�գ�",8,$_SERVER['HTTP_REFERER']);
		}
		$emailarr=array();
		if(@in_array(1,$all)){
			$userrows=$this->obj->DB_select_all("member","`usertype`='1'","email");
			if(is_array($userrows)){
				foreach($userrows as $v){
					$emailarr[]=$v["email"];
				}
			}
		}
		if(@in_array(2,$all)){
			$userrows=$this->obj->DB_select_all("member","`usertype`='2'","email");
			if(is_array($userrows)){
				foreach($userrows as $v){
					$emailarr[]=$v["email"];
				}
			}
		}
		if(@in_array(4,$all)){
			$userrows=$this->obj->DB_select_all("member","`usertype`='3'","email");
			if(is_array($userrows)){
				foreach($userrows as $v){
					$emailarr[]=$v["email"];
				}
			}
		}
		if(@in_array(3,$all)){
			$useremail=@explode(',',$email_user);
			if(is_array($useremail)){
				foreach($useremail as $v){
					$emailarr[]=$v;
				}
			}
		}
		if(!count($emailarr)){
			$this->obj->ACT_layer_msg("û�з������������䣬���ȼ�飡",8,$_SERVER['HTTP_REFERER']);
		}
		set_time_limit(10000);
		$emailid=$this->send_email($emailarr,$email_title,$content,true);

	}
}

?>