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
class admin_message_controller extends common
{
	function index_action()
	{
		$where = "keyid='0'";
		if($_GET['status']=="1"){
			$where.=" AND `status`='".$_GET['status']."'";
			$urlarr['status']=$_GET['status'];
		}elseif($_GET['status']=="2"){
			$where.=" AND `status`='0'";
			$urlarr['status']=$_GET['status'];
		}
		if($_GET['keyword']){
			if($_GET["type"]==1){
				$where.=" and `username` like '%".$_GET['keyword']."%'";
			}else{
				$where.=" and `content` like '%".$_GET['keyword']."%'";
			}
			$urlarr['type']=$_GET['type'];
			$urlarr['keyword']=$_GET['keyword'];
		}
		if($_GET['order'])
		{
			$where.=" order by ".$_GET['t']." ".$_GET['order'];
			$urlarr['order']=$_GET['order'];
			$urlarr['t']=$_GET['t'];
		}else{
			$where.=" order by id desc";
		}
		$urlarr['page']="{{page}}";
		$pageurl=$this->url("index",$_GET['m'],$urlarr);
		$this->get_page("message",$where,$pageurl,$this->config['sy_listnum']);
		$this->yunset("get_type", $_GET);
		$this->yuntpl(array('admin/admin_message'));
	}
   function show_action(){
		if($_GET['id']){
			$urlarr=array("c"=>"show","id"=>$_GET['id'],"page"=>"{{page}}");
			$pageurl=$this->url("index",$_GET['m'],$urlarr);
			$this->get_page("message","`keyid`='".$_GET['id']."' or `id`='".$_GET['id']."' order by `id` desc",$pageurl,"10");
			$this->yunset("id",$_GET['id']);
		}

		if($_POST['submit']){
			if($_POST['content']==""){
				$this->obj->ACT_layer_msg("����д���ݣ�",2,"index.php?m=admin_message");
			}
			$data['remind_status']="0";
			$data['keyid']=$_POST['keyid'];
			$data['content']=$_POST['content'];
			$data['username']='����Ա';
			$data['ctime']=mktime();
			$nid=$this->obj->insert_into("message",$data);
		    $this->obj->DB_update_all("message","`status`='1'","`id`='".$_POST['keyid']."'");
 		    $nid?$this->obj->ACT_layer_msg("�ظ�(ID:$nid)�ɹ���",9,$_SERVER['HTTP_REFERER'],2,1):$this->obj->ACT_layer_msg("���(ID:$nid)ʧ�ܣ�",8,$_SERVER['HTTP_REFERER']);
		}

		if($_POST['submits'])
		{
		 	if($_POST['uid']){
				$uids=$_POST['uid'];
		 	}
			if($_POST['name']){
				$name=@explode(",",$_POST['name']);
				foreach($name as $v){
					$user=array();
					$user=$this->obj->DB_select_once("member","`username`='".$_POST['name']."'","uid");
					if($user['uid']!=""){
						$uids[]=$user['uid'];
					}
				}
			}
		    if(empty($uids)){
				$this->obj->ACT_layer_msg("�û��������ڣ�",8,"index.php?m=admin_message&c=show");
			}
			foreach($uids as $v){
				$data=array();
				$data['remind_status']="0";
				$data['keyid']=$_POST['keyid'];
				$data['content']=$_POST['content'];
				$data['fa_uid']=$v;
				$data['username']='����Ա';
				$data['ctime']=mktime();
				$nid=$this->obj->insert_into("message",$data);
			}
			$nid?$this->obj->ACT_layer_msg("��ӳɹ���",9,"index.php?m=admin_message",2,1):$this->obj->ACT_layer_msg("���ʧ�ܣ�",8,"index.php?m=admin_message");
		}
		if($_POST['userid'])
		{
			$member=$this->obj->DB_select_all("member","`uid` in (".$_POST['userid'].")","`uid`,`username`");
			$this->yunset("member",$member);
		}
		$this->yuntpl(array('admin/admin_message_show'));
	}


	function del_action(){
	    if($_GET['del']){
			$this->check_token();
	    	$del=$_GET['del'];
	    	if($del){
	    		if(is_array($del)){
					$this->obj->DB_delete_all("message","`id` in(".@implode(',',$del).") OR `keyid` in(".@implode(',',$del).")","");
					$layer_msg=1;
		    	}else{
		    		$this->obj->DB_delete_all("message","`id`='$del' OR `keyid`='".$del."'","");
					$layer_msg=0;
		    	}
				$this->layer_msg('ɾ���ɹ���',9,$layer_msg,$_SERVER['HTTP_REFERER']);
			}else{
				$this->layer_msg('�Ƿ�������',3);
			}
	    }
	}
}