<?php

class register_controller extends common
{
	function index_action()
	{
		
 		$this->get_moblie();
// 		if($this->uid || $this->username)
// 		{
// 			echo "<script>location.href='member/index.php';</script>";
// 		}
		if($_POST['submit'])
		{
			include '../data/db.config.php';				
			$con = mysql_connect($db_config['dbhost'],$db_config['dbuser'],$db_config['dbpass']);
			mysql_query("SET NAMES 'GBK'");
			if (!$con)
			{
				die('Could not connect: ' . mysql_error());
			}			
			mysql_select_db($db_config['dbname'], $con);
			
			
			$usertype=$_POST['usertype']?$_POST['usertype']:1;

			
			//$member=$this->obj->DB_select_once("member","`username`='".$_POST['username']."' OR `email`='".$_POST['email']."'");
			
			if($this->config['sy_uc_type']=="uc_center")
			{
				$this->obj->uc_open();
				$uid=uc_user_register($_POST['username'],$_POST['password'],$_POST['email']);
				if($uid<=0)
				{
					$this->wapheader('index.php?m=register&usertype='.$usertype.'&','�������Ѵ��ڣ�');
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
			
			$regmsg = $_POST['regmsg'];
			$idata['regphone'] = $_POST['regphone'];
			$idata['phone'] = $_POST['regphone'];
			$idata['password'] = $pass;
			$idata['usertype'] = $usertype;
			$idata['salt']     = $salt;
			$idata['reg_date'] = time();
			$idata['mac'] = $_COOKIE["mymac"];
			
			
			
			
			//�����Ԥע���û�,�鿴member��usermacs���Ƿ��и��û�id
			if ($usertype==2) {
				$member=$this->obj->DB_select_once("useraccounts","`regphone`='".$_POST['regphone']."'");
				//�ж���֤���Ƿ���ȷ
				$regmsg = $_POST['regmsg'];
				
					if($member['captcha']!=$regmsg){
						$this->wapheader('index.php?m=register&','Ԥע��У�������');
						die();
					}
				
				if(is_array($member)){
					$idata['username'] = $member['lname'];
					$idata['password'] = $pass;
					$idata['salt']     = $salt;
					//���regphone��ȷ���жϸü�¼���Ƿ���intid
					if ($member['intid']=="" or $member['intid']==null) {
						//���û��intid������뵽member�У����õ�member�е�uid
						
						$userid=$this->obj->insert_into('member',$idata);
						//����useraccounts��
						$this->obj->update_once('useraccounts',array('userid'=>$member['id'],'mac'=>$_COOKIE["mymac"],'usertype'=>$idata['usertype'],'phone'=>$idata['regphone'],'intid'=>$userid,'updtime'=> date("Y-m-d H:i:s",time())),array('id'=>$member['id']));
						//����usermacs��
						$idata['userid']=$member['id'];
						$idata['rectime'] =  date("Y-m-d H:i:s",time());
						$this->obj->insert_into('usermacs',$idata);
						
						setcookie("uid",$member['intid'],time() + 86400, "/");
						setcookie("username",$idata['username'],time() + 86400, "/");
						setcookie("usertype",$usertype,time() + 86400, "/");
						setcookie("salt",$salt,time() + 86400, "/");
						setcookie("shell",md5($idata['username'].$idata['password'].$idata['salt']), time() + 86400,"/");
						
						setcookie("userid",$member['userid'],time() + 86400, "/");
						setcookie("phone",$member['phone'],time() + 86400, "/");
						setcookie("userrole",$member['userrole'],time() + 86400, "/");
					}
					
					if ($member['mac']!=$_COOKIE['mymac']) {
						
						//����usermacs��
						$idata['userid']=$member['id'];
						$idata['rectime'] =  date("Y-m-d H:i:s",time());
						$this->obj->insert_into('usermacs',$idata);
						
						setcookie("uid",$member['intid'],time() + 86400, "/");
						setcookie("username",$idata['username'],time() + 86400, "/");
						setcookie("usertype",$usertype,time() + 86400, "/");
						setcookie("salt",$salt,time() + 86400, "/");
						setcookie("shell",md5($idata['username'].$idata['password'].$idata['salt']), time() + 86400,"/");
						
						setcookie("userid",$member['userid'],time() + 86400, "/");
						setcookie("phone",$member['phone'],time() + 86400, "/");
						setcookie("userrole",$member['userrole'],time() + 86400, "/");
					}
				}else{
					$this->wapheader('index.php?m=register&','Ԥע���ֻ��Ŵ���');
				}
				
				
					
				$this->wapheader('index.php?internet=ok&','Ԥע���û���֤�ɹ�');
				
			}
			
			//������ֳ�ע���û�,�Ȳ鿴�Ƿ����û����û������ֻ���ȷ��Ψһ��ݣ�
			if ($usertype==1){
				$regmsg = $_POST['regmsg'];
				if($usertype==1&&$_GET['step']!=2){
					session_start();
					if($regmsg!=$_SESSION['msg']){
						$this->wapheader('index.php?m=register&','����У�������');
						die();
					}
				}
				$member=$this->obj->DB_select_once("useraccounts","`phone`='".$_POST['regphone']."'");
				//���member���м�¼˵�������û�
				if(is_array($member)){
					//���û�������useraccent��member���˳���username��phone֮��������ֶΣ���Ӽ�¼��usermacs��
					//���� useraccent��
					//$this->obj->update_once('useraccounts',array('mac'=>$_COOKIE["mymac"],'orgn'=>$idata['orgn'],'title'=>$idata['title'],'updtime'=> date("Y-m-d H:i:s",time())),array('id'=>$member['id']));
					
					//���� usermacs��
					$idata['userid']=$member['id'];
					
					$this->obj->insert_into('usermacs',$idata);
					
					setcookie("uid",$member['intid'],time() + 86400, "/");
					setcookie("username",$member['lname'],time() + 86400, "/");
					setcookie("usertype",$usertype,time() + 86400, "/");
					setcookie("salt",$salt,time() + 86400, "/");
					setcookie("shell",md5($idata['username'].$idata['password'].$idata['salt']), time() + 86400,"/");
					
					setcookie("userid",$member['userid'],time() + 86400, "/");
					setcookie("phone",$member['phone'],time() + 86400, "/");
					setcookie("userrole",$member['userrole'],time() + 86400, "/");
				}else{
					//���û���д��member��useraccent��usermacs������
															
					$idata['rectime'] =  date("Y-m-d H:i:s",time());	
					$idata['username'] =  $_POST['regphone'];
					$idata['lname'] =  $_POST['regphone'];
					//$intid=$this->obj->insert_into('member',$idata);
					$sql = "INSERT INTO member (username, password,usertype,salt) VALUES 
							('".$idata['username']."', 
							 '".$idata['password']."', 
							 '".$idata['usertype']."',
							 '".$idata['salt']."')";
					mysql_query($sql,$con);
					$intid =mysql_insert_id();
					echo $intid;
					//die();
					//����useraccent��
					$idata['intid'] = $intid;
					
					$userid=$this->obj->insert_into('useraccounts',$idata);
					print_r($idata)  ;
					//die("���û�");
					$this->obj->update_once('useraccounts',array('userid'=>$userid),array('id'=>$userid));
					//����usermacs��
					
					$idata['userid'] = $userid;
					
					$this->obj->insert_into('usermacs',$idata);
					
					
					
					setcookie("uid",$intid,time() + 86400, "/");
					setcookie("username",$idata['username'],time() + 86400, "/");
					setcookie("usertype",$usertype,time() + 86400, "/");
					setcookie("salt",$salt,time() + 86400, "/");
					setcookie("shell",md5($idata['username'].$idata['password'].$idata['salt']), time() + 86400,"/");
					
					setcookie("userid",$userid,time() + 86400, "/");
					setcookie("phone",$_POST['regphone'],time() + 86400, "/");
					setcookie("userrole","",time() + 86400, "/");
				}
				
				$this->wapheader('index.php?internet=ok&','�ֳ��û���֤�ɹ�');
			}
			
			
			
			
			
		}
		if($_GET['usertype']=="2")
		{
			$this->yunset("title","�û�ǩ��");
		}else{
			$this->yunset("title","�û�ǩ��");
		}
		$this->yuntpl(array('wap/register'));
	}
	function rating_info($data=array())
	{
		$id =$this->config['com_rating'];
		$row = $this->obj->DB_select_once("company_rating","`id`='".$id."'");

		$data['rating']=$id;
		$data['integral']=$this->config['integral_reg'];
		$data['rating_name']=$row['name'];
		if($row['type']==1)
		{
			$data['job_num']=$row['job_num'];
			$data['down_resume']=$row['resume'];
			$data['interview']=$row['interview'];
			$data['editjob_num']=$row['editjob_num'];
			$data['breakjob_num']=$row['breakjob_num'];
		}else{
			$time=time()+86400*$row['service_time'];
			$data['vip_etime']=$time;
		}
		return $data;
	}
}
?>