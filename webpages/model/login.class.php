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
class login_controller extends common
{
	function index_action()
	{
		if($_COOKIE["uid"]!=""&&$_COOKIE["username"]!="")
		{
			if($_GET["type"]=="out")
			{
				if($this->config["sy_uc_type"]=="uc_center")
				{
					$this->obj->uc_open();
					$logout = uc_user_synlogout();
				}elseif($this->config["sy_pw_type"]){
					include(APP_PATH."/api/pw_api/pw_client_class_phpapp.php");
					$username=$_SESSION["username"];
					$pw=new PwClientAPI($username,"","");
					$logout=$pw->logout();
					$this->unset_cookie();
				}else{
					$this->unset_cookie();
				}
			}else{
				$this->obj->ACT_msg("index.php", $msg = "���Ѿ���¼�ˣ�");
			}
		}

		if($_GET['backurl']=='1')
		{
			setCookie("backurl",$_SERVER['HTTP_REFERER'],time()+60);
		}
		if(!$_GET['usertype'])
		{
			$_GET['usertype']=1;
		}
		$this->yunset("usertype",$_GET['usertype']);
		$this->yunset("loginname",$_COOKIE['loginname']);
		$this->seo("login");
		$this->yun_tpl(array('index'));
	}

	function loginsave_action()
	{
		$username=iconv("utf-8","gbk",$_POST['username']);

		if($_COOKIE['uid']!=""&&$_COOKIE['username']!="")
		{
			$this->ajaxlogin($_POST['comid'],"���Ѿ���½�ˣ������Ǹ����û���");
			echo "���Ѿ���¼�ˣ�";die;
		}
		
		if($_POST['path']!="index")
		{
			if(strstr($this->config["code_web"],'ǰ̨��½'))
			{
				if(md5($_POST["authcode"])!=$_SESSION["authcode"])
				{
					$this->ajaxlogin($_POST['comid'],"��֤�����!");
					echo "��֤�����!";die;
				}
			}
		}
		if(!$this->CheckRegUser($username))
		{
			echo "��Ч���û���!";die;
		}
		if($username!="")
		{
			if($this->config['sy_uc_type']=="uc_center")
			{
				$this->obj->uc_open();
				list($uid, $username, $password, $email) = uc_user_login($username, $_POST['password']);
				
				if($uid<1)
				{
					$user = $this->obj->DB_select_once("member","`username`='".$uname."'","username,email,uid,password,salt");
					$pass = md5(md5($_POST['password']).$user['salt']);
					if($pass==$user['password'])
					{
						$uid = $user['uid'];
						uc_user_register($user['username'],$_POST['password'],$user['email']);
						list($uid, $username, $password, $email) = uc_user_login($uname, $_POST['password']);
					}
				}
				
				if($uid > 0) {
					$ucsynlogin=uc_user_synlogin($uid);
					$msg =  '��¼�ɹ���';
					$user = $this->obj->DB_select_once("member","`username`='".$username."' and `usertype`='2'","uid");
					if($_SESSION['qq']['openid'])
					{
						$this->obj->DB_update_all("member","`qqid`='".$_SESSION['qq']['openid']."'","`username`='".$username."'");
						unset($_SESSION['qq']);
					}

					if($_SESSION['sinaid'])
					{
						$this->obj->DB_update_all("member","`sinaid`='".$_SESSION['sinaid']."'","`username`='".$username."'");
						unset($_SESSION['sinaid']);unset($_SESSION['sinainfo']);
					}
					if($_POST['usertype']=="2")
					{
						if(!is_array($user))
						{
							echo "��ҵû�и��û���";die;
						}

					}
					if($this->config['user_status']=="1" && $_POST['usertype']=="1")
					{
						if($_POST['usertype']=="1")
						{
							if(is_array($user))
							{
								$this->unset_cookie();
								echo "���˲����ڸ��û���";die;
							}else{
								
								$userin=$this->obj->DB_select_once("member","`username`='".$username."'","`email_status`");
								if($userin['email_status']!="1")
								{
									echo "�����˻���δ������ȼ��";die;
								}
							}
						}
					}
					if($_POST['loginname']){
						setcookie("loginname",$username,time()+8640000);
					}
					$this->autoupjob($user['uid'],$_POST['usertype']);
					echo $ucsynlogin;
					echo 1;die;
				} elseif($uid == -1) {
					$msg =  '�û�������,���߱�ɾ��';
				} elseif($uid == -2) {
					$msg =  '�������';
				} else {
					$msg = '���û�δ����!';
				}
				$this->ajaxlogin($_POST['comid'],$msg);
				echo $msg;die;
			}else{
				$user = $this->obj->DB_select_once("member","`username`='".$username."'","`pw_repeat`,`pwuid`,`uid`,`username`,`salt`,`email`,`password`,`usertype`,`status`,`email_status`");
				if($this->config['sy_pw_type']=="pw_center")
				{
					if($user['pw_repeat']!="1")
					{
						include(APP_PATH."/api/pw_api/pw_client_class_phpapp.php");
						$pw=new PwClientAPI($username,$_POST['password'],"");
						$pwuser =$pw->user_login();
						if($pwuser['uid']>0)
						{
							if(empty($user))
							{
								$user = $this->newuser($pwuser['username'],$pwuser['password'],$pwuser['email'],$_POST['usertype'],$pwuser['uid'],$qqid);
							}
							if($pwuser['uid']==$user['pwuid'])
							{
								$pwrows=$pw->login($pwuser['uid']);
								$this->add_cookie($user['uid'],$user['username'],$user['salt'],$user['email'],$user['password'],$_POST['usertype']);
								if($_POST['loginname'])
								{
									setcookie("loginname",$username,time()+8640000);
								}
								$this->ajaxlogin($_POST['comid'],"1");
								echo 1;die;
							}else{
								$this->obj->DB_update_all("member","`pw_repeat`='1'","`uid`='".$user['uid']."'");
							}
						}
					}
				}
				if(is_array($user))
				{
					if($user['usertype']==$_POST['usertype'])
					{
						$pass = md5(md5($_POST['password']).$user['salt']);
						if($user['password']==$pass)
						{
							if($user['status']=="2")
							{
								$this->ajaxlogin($_POST['comid'],"�����˺��ѱ�����!");
								echo "�����˺��ѱ�����!";die;
							}
							if($_POST['usertype']=="2" && $this->config['com_status']!="1" )
							{
								if($user['status']!="1")
								{
									$this->ajaxlogin($_POST['comid'],"����û��ͨ�����!");
									echo "����û��ͨ�����!";die;
								}
							}

							if($this->config['user_status']=="1" && $_POST['usertype']=="1")
							{
								if($user['email_status']!="1")
								{
									$this->ajaxlogin($_POST['comid'],"�����˻���δ������ȼ��");
									echo "�����˻���δ������ȼ���!";die;
								}
							}
							if($_SESSION['qq']['openid'])
							{
								$this->obj->DB_update_all("member","`qqid`='".$_SESSION['qq']['openid']."'","`username`='".$user['username']."'");
								unset($_SESSION['qq']);
							}
							if($_SESSION['sinaid'])
							{
								$this->obj->DB_update_all("member","`sinaid`='".$_SESSION['sinaid']."'","`username`='".$username."'");
								unset($_SESSION['sinaid']);unset($_SESSION['sinainfo']);
							}
							$time = time();
							$ip = $this->obj->fun_ip_get();
							$this->obj->DB_update_all("member","`login_ip`='$ip',`login_date`='$time',`login_hits`=`login_hits`+1","`uid`='".$user['uid']."'");
							$this->unset_cookie();
							$this->add_cookie($user['uid'],$user['username'],$user['salt'],$user['email'],$user['password'],$_POST['usertype']);
							if($qqid)
							{
								$this->obj->DB_update_all("member","`qqid`='$qqid'","`username`='$username'");
							}
							if($_POST['loginname']){
								setcookie("loginname",$username,time()+8640000);
							}
							$this->ajaxlogin($_POST['comid'],"1");
							if($_POST['usertype']=='1'){
								$resume=$this->obj->DB_select_once("resume","`uid`='".$user['uid']."'","`name`,`birthday`");
								if($resume['name']&&$resume['birthday']){
									echo 1;die;
								}else{echo 2;die;}
							}else{$this->autoupjob($user['uid'],$_POST['usertype']);echo 1;die;}
							
							
						}else{
							$this->ajaxlogin($_POST['comid'],"���벻��ȷ��");
							echo "���벻��ȷ��";die;
						}
					}else{
						if($_POST['usertype']=="1")
						{
							$msg = "�Բ���û�иø����û���";
							$this->ajaxlogin($_POST['comid'],$msg);
						}else{
							$msg = "�Բ���û�и���ҵ�û���";
						}
						echo $msg;die;
					}
				}else{
					$this->ajaxlogin($_POST['comid'],"���û������ڣ�");
					echo "���û������ڣ�";die;
				}
			}
		}else{
			echo "�û�������Ϊ�գ�";die;
		}
	}
	function newuser($username,$password,$email,$usertype,$winduid,$qqid='')
	{
		$salt = substr(uniqid(rand()), -6);
		$pass = md5($password.$salt);
		$ip = $this->obj->fun_ip_get();
		$time = time();
		$satus = $this->config["user_status"];
		$this->obj->DB_insert_once("member","`username`='$username',`password`='$pass',`email`='$email',`usertype`='$usertype',`status`='$satus',`salt`='$salt',`reg_date`='$time',`reg_ip`='$ip',`pwuid`='$winduid'");
		$this->unset_cookie();
		$new_info = $this->obj->DB_select_once("member","`username`='$username'");
		$userid = $new_info[uid];
		if($this->config["sy_pw_type"]=="pw_center")
		{
			$this->obj->DB_update_all("member","`pwuid`='$pwuid'","`uid`='$userid'");
		}
		$this->add_cookie($userid,$username,$salt,$email,$pass,$usertype);
		if($usertype=="1")
		{
			$table = "member_statis";
			$table2 = "resume";
			$value="`uid`='$userid'";
			$value2 = "`uid`='$userid',`email`='$email',`telphone`='$moblie'";
		}elseif($usertype=="2"){
			$table = "company_statis";
			$table2 = "company";
			$value="`uid`='$userid',".$this->rating_info();
			$value2 = "`uid`='$userid',`linkmail`='$email',`name`='$unit_name',`address`='$address'";
		}
		if($qqid)
		{
			$this->obj->DB_update_all("member","`qqid`='$qqid'","`uid`='$userid'");
		}
		$this->obj->DB_insert_once($table,$value);
		$this->obj->DB_insert_once($table2,$value2);
		return $new_info;
	}
	function ajaxlogin($comid,$msg)
	{
		if((int)$comid>0)
		{
			echo $msg;die;
		}
	}
	function rest_action()
	{
		$this->unset_cookie();
		$url = $this->url("index","login",array("usertype"=>"1"),"1");
		header("Location: ".$url);
	}

	function autoupjob($uid,$usertype){
		
		if($usertype=='2')
		{
			$this->obj->DB_update_all('company_job',"`lastupdate`='".time()."'","`uid`='".$uid."' AND `autotype`='2' AND `autotime`>'".time()."'");
		}

	}
}
