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
class register_controller extends common{
	function index_action(){
		if($_COOKIE['uid']!=""&&$_COOKIE['username']!=""){
			$this->obj->ACT_msg($this->config['sy_weburl'], "���Ѿ���¼�ˣ�");
		}
		$this->seo("register");
		if($_GET['usertype']=="2"){
			$this->yun_tpl(array('company'));
		}else{
			$this->yun_tpl(array('user'));
		}
	}
	function ajax_reg_action(){
		$post = array_keys($_POST);
		$key_name = $post[0];
		if($key_name=='username'){
			$username=@iconv("utf-8","gbk",$_POST['username']);
			if(!$this->CheckRegUser($username)){
				echo 2;die;
			}
			if($this->config['sy_uc_type']=="uc_center"){
				$this->obj->uc_open();
				$user = uc_get_user($username);
				if(is_array($user))
				{
					$usernum=1;
				}else{
					$usernum = $this->obj->DB_select_num("member","`username`='".$username."'");
				}
			}else{
				$usernum = $this->obj->DB_select_num("member","`username`='".$username."'");
			}
			if($this->config['sy_regname']!=""){
				$regname=@explode(",",$this->config['sy_regname']);
				if(in_array($username,$regname)){
					echo 2;die;
				}
			}
		}elseif($key_name=='email'){
			if(!$this->CheckRegEmail($_POST[$key_name])){
				echo 2;die;
			}
			$usernum = $this->obj->DB_select_num("member","`".$key_name."`='".$_POST[$key_name]."'");
		}
		if($usernum>0){echo 1;}else{echo 0;}
	}
	function regmoblie_action(){
		if($_POST['moblie']){
			$num=$this->obj->DB_select_num("member","`moblie`='".$_POST['moblie']."'","uid");
			echo $num;die;
		}
	}
	function regsave_action(){
		$_POST=$this->post_trim($_POST);
		$_POST['username']=iconv("utf-8","gbk",$_POST['username']);
		$_POST['unit_name']=iconv("utf-8","gbk",$_POST['unit_name']);
		$_POST['address']=iconv("utf-8","gbk",$_POST['address']);
		if(trim($_POST['password'])&&trim($_POST['password'])!=trim($_POST['passconfirm'])){
			echo "8##�����������벻һ�£�";die;
		}
		if(!$this->CheckRegUser($_POST['username'])){
			echo "8##�û������������ַ���";die;
		}
		if(!$this->CheckRegEmail($_POST['email'])){
			echo "8##Email��ʽ���淶��";die;
		}
		if($_COOKIE['uid']!=""&&$_COOKIE['username']!=""){
			echo "8##���Ѿ���¼�ˣ�";die;
		}
		$usertype=$_POST['usertype'];
		if(strstr($this->config['code_web'],'ע���Ա')){
			if(md5($_POST['authcode'])!=$_SESSION['authcode']){
				echo "8##��֤�����";die;
			}
		}
		if($_POST['username']!=""){
			$nid = $this->obj->DB_select_once("member","`username`='".$_POST['username']."' or `email`='".$_POST['email']."'");
			if(is_array($nid)){
				echo "8##�˻����������Ѵ��ڣ�";die;
			}
			if($_POST['usertype']=='2'){
				if($this->config['com_enforce_mobilecert']!='1'){
					unset($_POST['moblie']);
				}

				$satus = $this->config['com_status'];
			}
			if($this->config['sy_uc_type']=="uc_center"){
				$this->obj->uc_open();
				$uid=uc_user_register($_POST['username'],$_POST['password'],$_POST['email']);
				if($uid<=0){
					echo "8##�������Ѵ��ڣ�";die;
				}else{
					list($uid,$username,$password,$email,$salt)=uc_user_login($_POST['username'],$_POST['password']);
					$pass = md5(md5($_POST['password']).$salt);
					$ucsynlogin=uc_user_synlogin($uid);
				}
			}elseif($this->config['sy_pw_type']=="pw_center"){
				include(APP_PATH."/api/pw_api/pw_client_class_phpapp.php");
				$username=$username;
				$password=$_POST['password'];
				$email=$_POST['email'];
				$pw=new PwClientAPI($username,$password,$email);
				$pwuid=$pw->register();
				$salt = substr(uniqid(rand()), -6);
				$pass = md5(md5($password).$salt);
			}else{
				$salt = substr(uniqid(rand()), -6);
				$pass = md5(md5($_POST['password']).$salt);
			}
			$ip = $this->obj->fun_ip_get();
			$data['username']=$_POST['username'];
			$data['password']=$pass;
			$data['moblie']=$_POST['moblie'];
			$data['email']=$_POST['email'];
			$data['usertype']=$_POST['usertype'];
			$data['status']=$satus;
			$data['salt']=$salt;
			$data['reg_date']=time();
			$data['reg_ip']=$ip;
			$data['qqid']=$_SESSION['qq']['openid'];
			$data['sinaid']=$_SESSION['sinaid'];
			$userid=$this->obj->insert_into("member",$data);
			if(!$userid){
				$user_id = $this->obj->DB_select_once("member","`username`='".$_POST['username']."'","`uid`");
				$userid = $user_id['uid'];
			}
			if($userid){
				$this->unset_cookie();
				if($this->config[sy_pw_type]=="pw_center"){
					$this->obj->DB_update_all("member","`pwuid`='".$pwuid."'","`uid`='".$userid."'");
				}
				if($_POST['usertype']=="1"){
					$table = "member_statis";
					$table2 = "resume";
					$value="`uid`='".$userid."'";
					$value2 = "`uid`='".$userid."',`email`='".$_POST['email']."',`telphone`='".$_POST['moblie']."'";
				}elseif($_POST['usertype']=="2"){
					$table = "company_statis";
					$table2 = "company";
					$value="`uid`='".$userid."',".$this->rating_info();
					$value2 = "`uid`='".$userid."',`linkmail`='".$_POST['email']."',`name`='".$_POST['unit_name']."',`linktel`='".$_POST['moblie']."',`address`='".$_POST['address']."'";
				}
				$this->obj->DB_insert_once($table,$value);
				$this->obj->DB_insert_once($table2,$value2);
				$this->obj->DB_insert_once("friend_info","`uid`='".$userid."',`nickname`='".$_POST['username']."',`usertype`='".$_POST['usertype']."'");
				if($_POST['usertype']=="1"){
					if($this->config['user_status']=="1"){
						$randstr=rand(10000000,99999999);
						$base=base64_encode($userid."|".$randstr."|".$this->config['coding']);
						$data['type']="cert";
						$data['email']=$_POST['email'];
						$data['url']="<a href='".$this->config['sy_weburl']."/index.php?m=qqconnect&c=mcert&id=".$base."'>�����֤</a>";
						$data['date']=date("Y-m-d");
						$this->regemail($data);
						$msg = "7##�ʺż����ʼ��ѷ��͵������䣬���ȼ��";
					}else{
						$this->add_cookie($userid,$_POST['username'],$salt,$_POST['email'],$pass,$usertype);
						$this->regemail($_POST);
						$msg = 1;
					}
				}elseif($usertype=="2"){
					$this->regemail($_POST);
					if($this->config['com_status']!="1"){
						$msg = "7##ע��ɹ�,��ȴ�����Ա���";
					}else{
						$msg = 1;
						$this->add_cookie($userid,$_POST['username'],$salt,$_POST['email'],$pass,$usertype);
					}
				}
				echo $msg;die;
			}else{
				echo "8##ע��ʧ�ܣ�";die;
			}
		}else{
			echo "8##�û�������Ϊ�գ�";die;
		}
	}
	function regemail($post){
		if($this->config['sy_smtpserver']!="" && $this->config['sy_smtpemail']!="" && $this->config['sy_smtpuser']!=""){
			$this->send_msg_email(array("username"=>$post['username'],"password"=>$post['password'],"email"=>$post['email'],"type"=>"reg"));
		}
		if($this->config["sy_msguser"]!="" && $this->config["sy_msgpw"]!="" && !$this->config["sy_msgkey"]){
			$this->send_msg_email(array("username"=>$post['username'],"password"=>$post['password'],"moblie"=>$post['moblie'],"type"=>"reg"));
		}
	}
	function rating_info()
	{
		$id =$this->config['com_rating'];
		$row = $this->obj->DB_select_once("company_rating","`id`='".$id."'");
		$value="`rating`='".$id."',";
		$value.="`integral`='".$this->config['integral_reg']."',";
		$value.="`rating_name`='".$row['name']."',";
		if($row['type']==1)
		{
			$value.="`job_num`='".$row['job_num']."',";
			$value.="`down_resume`='".$row['resume']."',";
			$value.="`invite_resume`='".$row['interview']."',";
			$value.="`editjob_num`='".$row['editjob_num']."',";
			$value.="`breakjob_num`='".$row['breakjob_num']."'";
		}else{
			$time=time()+86400*$row['service_time'];
			$value.="`vip_etime`='".$time."'";
		}
		return $value;
	}
}
?>