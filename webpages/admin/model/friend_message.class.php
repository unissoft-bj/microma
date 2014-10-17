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
class friend_message_controller extends common
{
	function index_action()
	{
		include(PLUS_PATH."user.cache.php");
		include(PLUS_PATH."com.cache.php");
		$where = "1";

		if($_GET["usertype"]){
			$where.=" AND `usertype`='".$_GET["usertype"]."'";
			$urlarr["usertype"]=$_GET["usertype"];
		}
		if($_GET["status"]=="1"){
			$where.=" AND `status`='".$_GET["status"]."'";
			$urlarr["status"]=$_GET["status"];
		}elseif($_GET["status"]=="2"){
			$where.=" AND `status`='0'";
			$urlarr["status"]=$_GET["status"];
		}
		if($_GET["keyword"]){
			if($_GET["type"]==1){
				$infouid = $this->obj->DB_select_all("member","`username` like '%".$_GET["keyword"]."%'","`uid`");
				if(is_array($infouid)){
					foreach($infouid as $k=>$v){
						$info_uids[] = $v["uid"];
					}
					$uids = @implode(",",$info_uids);
				}
				$where.=" and `uid` in ($uids)";
			}else{
				$where.=" and `content` like '%".$_GET["keyword"]."%'";
			}
			$urlarr["type"]=$_GET["type"];
			$urlarr["keyword"]=$_GET["keyword"];
		}
		$wheres=1;
		if($_SESSION['admin_city']){
			$wheres.=" and `cityid`='".$_SESSION['admin_city']."'";
		}
		if($_SESSION['admin_hy']){
			$wheres.=" and `hy`='".$_SESSION['admin_hy']."'";
		}
		if($_SESSION['def_city'] || $_SESSION['def_hy'])
		{
			if($_SESSION['def_city']){
				$session[]="`cityid` in (".$_SESSION['def_city'].")";
			}
			if($_SESSION['def_hy']){
				$session[]="`hy` in (".$_SESSION['def_hy'].")";
			}
			$wheres.=" and (".@implode(" or ",$session).")";
		}
		$user=$this->obj->DB_select_all("member","`usertype`='1'","uid");
		$com=$this->obj->DB_select_all("company",$wheres,"`uid`");
		if(is_array($user))
		{
			foreach($user as $v)
			{
				$uid[]=$v['uid'];
			}
		}
		if(is_array($com))
		{
			foreach($com as $v)
			{
				$uid[]=$v['uid'];
			}
		}
		$where.=" AND (`uid` in (".@implode(",",$uid).") and `fid` in (".@implode(",",$uid)."))";
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
		$mes_list=$this->get_page("friend_message",$where,$pageurl,$this->config["sy_listnum"]);

		if(is_array($mes_list)){
			$statis =$this->obj->DB_select_all("member");
			foreach($mes_list as $key=>$value)
			{
				foreach($statis as $k=>$v)
				{
					if($value["uid"]==$v["uid"])
					{
						 $mes_list["$key"]["username"] = $v["username"];
					}

				}
			}
		}
        $this->yunset("get_type", $_GET);
		$this->yunset("mes_list",$mes_list);
		$this->yuntpl(array('admin/friend_message'));
	}

	function del_action(){
		$this->check_token();
	    if($_GET["del"]){
	    	if($_GET["del"]){
	    		if(is_array($_GET["del"])){
					$this->obj->DB_delete_all("friend_message","`id` in(".@implode(',',$_GET["del"]).")","");
					$del=@implode(',',$_GET["del"]);
					$layer_type='1';
		    	}else{
		    		$this->obj->DB_delete_all("friend_message","`id`='$del'");
					$layer_type='0';
		    	}
	    		$this->layer_msg( "����(ID:".$del.")ɾ���ɹ���",9,$layer_type,$_SERVER['HTTP_REFERER']);
	    	}else{
				$this->layer_msg( "��ѡ����Ҫɾ������Ϣ��",8,1,$_SERVER['HTTP_REFERER']);
	    	}
	    }
	    if(isset($_GET["id"])){
			$result=$this->obj->DB_delete_all("friend_message","`id`='".$_GET["id"]."'" );
			isset($result)?$this->layer_msg('����(ID:'.$_GET["id"].')ɾ���ɹ���',9,0,$_SERVER['HTTP_REFERER']):$this->layer_msg('ɾ��ʧ�ܣ�',8,0,$_SERVER['HTTP_REFERER']);
		}else{
			$this->layer_msg('�Ƿ�������',3,0,$_SERVER['HTTP_REFERER']);
		}
	}
}