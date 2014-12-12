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
					$this->wapheader('index.php?m=register&usertype='.$usertype.'&','该邮箱已存在！');
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
			
			
			
			
			//如果是预注册用户,查看member和usermacs中是否有该用户id
			if ($usertype==2) {
				
				$sql = "select * from useraccounts where
							 regphone='".$_POST['regphone']."'";
				$result = mysql_query($sql,$con);
				$member =  mysql_fetch_array($result);
				//$member=$this->obj->DB_select_once("useraccounts","`regphone`='".$_POST['regphone']."'");
				//pr
				//判断验证码是否正确
// 				print_r($member)  ;
// 				die();
				$regmsg = $_POST['regmsg'];
				
					if($member['captcha']!=$regmsg){
						$this->wapheader('index.php?m=register&','预注册校验码错误！');
						die();
					}
				
				if(is_array($member)){
					$idata['username'] = $member['lname'];
					$idata['password'] = $pass;
					$idata['salt']     = $salt;
					//如果regphone正确，判断该记录里是否有intid
					if ($member['intid']=="" or $member['intid']==null) {
						
						
						//如果没有intid，则插入到member中，并得到member中的uid
						$sql = "INSERT INTO member (username, password,usertype,salt) VALUES
							('".$idata['username']."',
							 '".$idata['password']."',
							 '".$idata['usertype']."',
							 '".$idata['salt']."')";
						mysql_query($sql,$con);
						$intid =mysql_insert_id();
						echo $intid;
						
						//$userid=$this->obj->insert_into('member',$idata);
						//更新useraccounts表
						
						$sql ="UPDATE useraccounts SET intid = '".$intid."', 
								mac='".$idata['mac']."',
								updtime='".date("Y-m-d H:i:s",time())."' 
								WHERE id = ".$member['id'];
						mysql_query($sql,$con);
						echo $sql;
						//die("mark");
						//$this->obj->update_once('useraccounts',array('userid'=>$member['id'],'mac'=>$_COOKIE["mymac"],'usertype'=>$idata['usertype'],'phone'=>$idata['regphone'],'intid'=>$userid,'updtime'=> date("Y-m-d H:i:s",time())),array('id'=>$member['id']));
						//插入usermacs表
						$idata['userid']=$member['userid'];
						$idata['rectime'] =  date("Y-m-d H:i:s",time());
						$sql = "select * from usermacs where
							 mac='".$idata['mac']."' and
							 userid='".$idata['userid']."' and
							 phone='".$idata['phone']."'";
						$result = mysql_query($sql,$con);
						if(mysql_num_rows($result)==0){
							$sql = "INSERT INTO usermacs (mac, userid,phone,rectime) VALUES
								('".$idata['mac']."',
								 '".$idata['userid']."',
								 '".$idata['phone']."',
								 '".$idata['rectime']."')";
							mysql_query($sql,$con);
							//$this->obj->insert_into('usermacs',$idata);
						}
						//$this->obj->insert_into('usermacs',$idata);
						
						setcookie("uid",$member['intid'],time() + 86400, "/");
						setcookie("username",$idata['username'],time() + 86400, "/");
						setcookie("usertype",$usertype,time() + 86400, "/");
						setcookie("salt",$salt,time() + 86400, "/");
						setcookie("shell",md5($idata['username'].$idata['password'].$idata['salt']), time() + 86400,"/");
						
						setcookie("userid",$member['userid'],time() + 86400, "/");
						setcookie("phone",$member['phone'],time() + 86400, "/");
						setcookie("userrole",$member['userrole'],time() + 86400, "/");
					}
					
// 					if ($member['mac']!=$_COOKIE['mymac']) {
						
// 						//插入usermacs表
// 						$idata['userid']=$member['id'];
// 						$idata['rectime'] =  date("Y-m-d H:i:s",time());
						
// 						//$this->obj->insert_into('usermacs',$idata);
						
// 						setcookie("uid",$member['intid'],time() + 86400, "/");
// 						setcookie("username",$idata['username'],time() + 86400, "/");
// 						setcookie("usertype",$usertype,time() + 86400, "/");
// 						setcookie("salt",$salt,time() + 86400, "/");
// 						setcookie("shell",md5($idata['username'].$idata['password'].$idata['salt']), time() + 86400,"/");
						
// 						setcookie("userid",$member['userid'],time() + 86400, "/");
// 						setcookie("phone",$member['phone'],time() + 86400, "/");
// 						setcookie("userrole",$member['userrole'],time() + 86400, "/");
// 					}
				}else{
					$this->wapheader('index.php?m=register&','预注册手机号错误！');
				}
				
				
					
				$this->wapheader('index.php?internet=ok&','预注册用户签到成功');
				
			}
			
			//如果是现场注册用户,先查看是否新用户（用户名和手机号确定唯一身份）
			if ($usertype==1){
				$regmsg = $_POST['regmsg'];
				
					session_start();
					if($regmsg!=$_SESSION['msg']){
						$this->wapheader('index.php?m=register&','短信校验码错误！');
						die();
					}
				
				
				
				//判断useraccents中是否有该用户信息
				$sql = "select * from useraccounts where							
							 phone='".$idata['phone']."'";
				$result = mysql_query($sql,$con);
				$member =  mysql_fetch_array($result);
				//$member=$this->obj->DB_select_once("useraccounts","`phone`='".$_POST['regphone']."'");
				//如果member中有记录说明是老用户
				if(is_array($member)){
					//老用户：更新useraccent、member除了除了username和phone之外的其他字段，添加记录到usermacs表
					//更新 useraccent表
					//$this->obj->update_once('useraccounts',array('mac'=>$_COOKIE["mymac"],'orgn'=>$idata['orgn'],'title'=>$idata['title'],'updtime'=> date("Y-m-d H:i:s",time())),array('id'=>$member['id']));
					
					//插入 usermacs表
					//die("old");
					$idata['userid']=$member['id'];
					
					$sql = "select * from usermacs where
							 mac='".$idata['mac']."' and 
							 userid='".$idata['userid']."' and 
							 phone='".$idata['phone']."'";
					$result = mysql_query($sql,$con);
					if(mysql_num_rows($result)==0){
						$sql = "INSERT INTO usermacs (mac, userid,phone,rectime) VALUES
								('".$idata['mac']."',
								 '".$idata['userid']."',
								 '".$idata['phone']."',
								 '".$idata['rectime']."')";
						mysql_query($sql,$con);
						//$this->obj->insert_into('usermacs',$idata);
					}
					setcookie("uid",$member['intid'],time() + 86400, "/");
					setcookie("username",$member['lname'],time() + 86400, "/");
					setcookie("usertype",$usertype,time() + 86400, "/");
					setcookie("salt",$salt,time() + 86400, "/");
					setcookie("shell",md5($idata['username'].$idata['password'].$idata['salt']), time() + 86400,"/");
					
					setcookie("userid",$member['userid'],time() + 86400, "/");
					setcookie("phone",$member['phone'],time() + 86400, "/");
					setcookie("userrole",$member['userrole'],time() + 86400, "/");
				}else{
					//新用户：写入member、useraccent、usermacs三个表
															
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
					//插入useraccent表
					$idata['intid'] = $intid;
					
					//$userid=$this->obj->insert_into('useraccounts',$idata);
					$sql = "INSERT INTO useraccounts (mac, lname,intid,rectime,phone) VALUES
							('".$idata['mac']."',
							 '".$idata['username']."',
							 '".$idata['intid']."',	
							 '".$idata['rectime']."',							 
							 '".$idata['phone']."')";
					mysql_query($sql,$con);
					$userid =mysql_insert_id();
					print_r($idata)  ;
					//更新useraccents的userid
					//$this->obj->update_once('useraccounts',array('userid'=>$userid),array('id'=>$userid));
					$sql = "UPDATE useraccounts SET userid = '".$userid."' WHERE id = ".$userid;
					mysql_query($sql,$con);
					//插入usermacs表
					
					$idata['userid'] = $userid;
					
					//$this->obj->insert_into('usermacs',$idata);
					$sql = "INSERT INTO usermacs (mac, userid,phone,rectime) VALUES
							('".$idata['mac']."',
							 '".$idata['userid']."',
							 '".$idata['phone']."',							 
							 '".$idata['rectime']."')";
					mysql_query($sql,$con);
					
					
					
					setcookie("uid",$intid,time() + 86400, "/");
					setcookie("username",$idata['username'],time() + 86400, "/");
					setcookie("usertype",$usertype,time() + 86400, "/");
					setcookie("salt",$salt,time() + 86400, "/");
					setcookie("shell",md5($idata['username'].$idata['password'].$idata['salt']), time() + 86400,"/");
					
					setcookie("userid",$userid,time() + 86400, "/");
					setcookie("phone",$_POST['regphone'],time() + 86400, "/");
					setcookie("userrole","",time() + 86400, "/");
				}
				
				$this->wapheader('index.php?internet=ok&','现场用户签到成功');
			}
			
			
			
			
			
		}
		if($_GET['usertype']=="2")
		{
			$this->yunset("title","用户签到");
		}else{
			$this->yunset("title","用户签到");
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