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
class register_controller extends common
{
	function index_action()
	{
		$this->get_moblie();
		if($this->uid || $this->username)
		{
			echo "<script>location.href='member/index.php';</script>";
		}
		
		if($_POST['submit'])
		{
			echo "submit";
			
			$usertype=$_POST['usertype']?$_POST['usertype']:1;
			
			$regmsg = $_POST['regmsg'];
			session_start();
			if($regmsg!=$_SESSION['msg']){
				$this->wapheader('index.php?m=register&','����У�������');
			}
			
			if(!$this->CheckRegUser($_POST['username']))
			{
				$this->wapheader('index.php?m=register&','��Ч���û�����');
			}
			
			
			
// 			if(!$this->CheckRegEmail($_POST['email']))
// 			{
// 				$this->wapheader('index.php?m=login&','�����ʽ����ȷ��');
// 			}
			$member=$this->obj->DB_select_once("member","`username`='".$_POST['username']."' OR `email`='".$_POST['email']."'");
			if(is_array($member))
			{
// 				if($member['username']==$_POST['username'])
// 				{
// 					$this->wapheader('index.php?m=register&usertype='.$usertype.'&','�û����Ѵ��ڣ����������룡');
// 				}elseif($member['email']==$_POST['email']){
// 					$this->wapheader('index.php?m=register&usertype='.$usertype.'&','�����Ѵ��ڣ����������룡');
// 				}
			}else{
				$regname=@explode(",",$this->config['sy_regname']);
				if(in_array($_POST['username'],$regname))
				{
					$this->wapheader('index.php?m=register&usertype='.$usertype.'&','�û����Ѵ��ڣ����������룡');
				}
			}
			
			
			if($usertype=='1')
			{
				$status = 1;
			}elseif($usertype=='2'){
				$status = $this->config['com_status'];
			}
			
			echo $usertype;
			
			//ucenter��
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
			//��ȡ������
			$idata['username'] = $_POST['username'];
			$idata['password'] = $pass;
			//$idata['email']    = $_POST['email'];
			$idata['usertype'] = $usertype;
			$idata['status']   = $status;
			$idata['salt']     = $salt;
			$idata['reg_date'] = time();
			
			$phone = $_POST['phone'];
			$baomi1 = $_POST['baomi1'];
			$baomi2 = $_POST['baomi2'];
			$baomi3 = $_POST['baomi3'];
			//������Ϊ��Ƹ��ʱ�Ż�ȡregphone
			
			
			//��useraccounts�в�ѯͬʱ���������͵绰�ļ�¼��
			$member2=$this->obj->DB_select_once("useraccounts","`lname`='".$_POST['username']."' AND `phone`='".$_POST['phone']."'");
			//������ڣ�˵�������û���Ҫ��usermac���а�mac��ַ
			if(is_array($member2)){
				echo "bangding";
				$userid_usermacs = $member2['userid'];
				$phone_usermacs = $member2['phone'];
				$mac_usermacs = $_COOKIE["mymac"];
				
				$array_usermac['userid'] = $userid_usermacs;
				$array_usermac['phone'] = $phone_usermacs;
				$array_usermac['mac'] = $mac_usermacs;
				
				//���usermac��������ֻ��Ų���useridΪ�� �����������¼
				$member_usermacs = $this->obj->DB_select_once("usermacs","`userid`='' AND `phone`='".$_POST['phone']."' AND `mac`='".$mac_usermacs."'");
				if(is_array($member_usermacs)){
					//die("����usermacs");
					$array_usermac['userid'] = $userid_usermacs;
					$this->obj->update_once('usermacs',array('userid'=>$array_usermac['userid']),array('id'=>$member_usermacs['id']));
				}else{
					//������usermacs�в����µļ�¼
					$this->obj->insert_into('usermacs',$array_usermac);
				}
				
			}else{
				//��������͵绰��ͬʱ���ڣ�
				//���usertype==1 ����ְ����ְ��
				//�����4��������ݣ�member��useraccount��usermacs
				if($usertype==1){
					echo "׼��д��member";
					$userid=$this->obj->insert_into('member',$idata);
					if($userid)
					{
						
						if($usertype=="1")
						{
							$table = "member_statis";
							$table2 = "resume";
							$value="`uid`='".$userid."'";
							$udata['uid'] = $userid;
							$udata2['uid'] = $userid;
							$udata2['name'] = $_POST['username'];
							$udata2['telphone'] = $_POST['phone'];
						}elseif($usertype=="2"){
							$table = "company_statis";
							$table2 = "company";
					
							$udata['uid'] = $userid;
							$udata2['uid'] = $userid;
							$udata2['linkmail'] = $_POST['email'];
					
							$udata=$this->rating_info($udata);
						}
						$this->obj->insert_into($table,$udata);
						$this->obj->insert_into($table2,$udata2);
						$this->obj->insert_into('friend_info',array('uid'=>$userid,'nickname'=>$_POST['username'],'usertype'=>$usertype));
					
						setcookie("uid",$userid,time() + 86400, "/");
						setcookie("username",$_POST['username'],time() + 86400, "/");
						setcookie("usertype",$usertype,time() + 86400, "/");
						setcookie("salt",$salt,time() + 86400, "/");
						setcookie("shell",md5($idata['username'].$idata['password'].$idata['salt']), time() + 86400,"/");
						#begin�������û�uid��usermac��ӵ����ݿ�$myuseraccounts��#
						echo "begin�������û�uid��usermac��ӵ����ݿ�myuseraccounts��";
						$myuseraccounts['intid'] = $userid;
						$myuseraccounts['usertype'] = $usertype;
						$myuseraccounts['lname'] = $_POST['username'];
						$myuseraccounts['mac'] = $_COOKIE["mymac"];
						$myuseraccounts['phone'] = $_POST["phone"];
						$myuseraccounts['danwei'] = $_POST["danwei"];
						$myuseraccounts['zhiwu'] = $_POST["zhiwu"];
						$myuseraccounts['shenfen'] = $_POST["shenfen"];
						
						$myuserid = $this->obj->insert_into('useraccounts',$myuseraccounts);
						//��userid��ͬ��
						if($myuserid){
							$this->obj->update_once('useraccounts',array('userid'=>$myuserid),array('id'=>$myuserid));
						}
					
						// 				echo $myuserid;
						// 				die($_COOKIE["mymac"]);
						//begin�������û�uid��usermac��ӵ����ݿ���#
						echo "����� usermacs";
						
						echo $myuserid;
						$goodluck['userid'] = $myuserid;
						echo $myuseraccounts['mac'];
						$goodluck['mac'] =$myuseraccounts['mac'];
						echo $_POST["phone"];						
						$goodluck['phone'] = $_POST["phone"];
						echo "over";
						$this->obj->insert_into('usermacs',$goodluck);						
						echo "����� usermacs����";
					}
				}
				
				//���usertype=2 ��Ƹ�� ����֤regphone				
				if($usertype==2){
					//���Ԥ���ֻ����� ������ǩ��ҳ��
					$member_compeny = $this->obj->DB_select_once("useraccounts","`regphone`='".$_POST['regphone']."'");
					if(!is_array($member_compeny)){
						$this->wapheader('index.php?m=register&usertype=2&point=����֤�Ŵ���');
					}else{
					//���Ԥ���ֻ�û���⣬��ע����ҵ��Ա
					//��ҵ��Ա����Ԥע�᷽ʽ��������ҵ�ֻ��ţ�ʶ���룩д��useraccounts���У�������Ϣ����ҵע����Լ���д
						echo "׼��д��member";
						$userid=$this->obj->insert_into('member',$idata);
						if($userid)
						{
						
							if($usertype=="1")
							{
								$table = "member_statis";
								$table2 = "resume";
								$value="`uid`='".$userid."'";
								$udata['uid'] = $userid;
								$udata2['uid'] = $userid;
								$udata2['telphone'] = $_POST['phone'];
							}elseif($usertype=="2"){
								$table = "company_statis";
								$table2 = "company";
									
								$udata['uid'] = $userid;
								$udata2['uid'] = $userid;
								$udata2['linkmail'] = $_POST['email'];
								$udata2['linkman'] = $_POST['username'];
								$udata2['linkphone'] = $_POST['phone'];
								$udata=$this->rating_info($udata);
							}
							$this->obj->insert_into($table,$udata);
							$this->obj->insert_into($table2,$udata2);
							$this->obj->insert_into('friend_info',array('uid'=>$userid,'nickname'=>$_POST['username'],'usertype'=>$usertype));
								
							setcookie("uid",$userid,time() + 86400, "/");
							setcookie("username",$_POST['username'],time() + 86400, "/");
							setcookie("usertype",$usertype,time() + 86400, "/");
							setcookie("salt",$salt,time() + 86400, "/");
							setcookie("shell",md5($idata['username'].$idata['password'].$idata['salt']), time() + 86400,"/");
							#begin�������û�uid��usermac��ӵ����ݿ�$myuseraccounts��#
							echo "begin�������û�uid��usermac��ӵ����ݿ�myuseraccounts��";
							$myuseraccounts['intid'] = $userid;
							$myuseraccounts['usertype'] = $usertype;
							$myuseraccounts['lname'] = $_POST['username'];
							$myuseraccounts['mac'] = $_COOKIE["mymac"];
							$myuseraccounts['phone'] = $_POST["phone"];
							$myuseraccounts['userid'] = $member_compeny['id'];
							$myuseraccounts['danwei'] = $_POST["danwei"];
							$myuseraccounts['zhiwu'] = $_POST["zhiwu"];
							$myuseraccounts['shenfen'] = $_POST["shenfen"];
							$this->obj->update_once('useraccounts',$myuseraccounts,array('id'=>$member_compeny['id']));
							
// 							$myuserid = $this->obj->insert_into('useraccounts',$myuseraccounts);
// 							//��userid��ͬ��
// 							if($myuserid){
// 								$this->obj->update_once('useraccounts',array('userid'=>$myuserid),array('id'=>$myuserid));
// 							}
								
							// 				echo $myuserid;
							// 				die($_COOKIE["mymac"]);
							//begin�������û�uid��usermac��ӵ����ݿ���#
							echo "����� usermacs";
						
							echo $myuserid;
							$goodluck['userid'] = $myuserid;
							echo $myuseraccounts['mac'];
							$goodluck['mac'] =$myuseraccounts['mac'];
							echo $_POST["phone"];
							$goodluck['phone'] = $_POST["phone"];
							echo "over";
							$this->obj->insert_into('usermacs',$goodluck);
							echo "����� usermacs����";
							
						}
					}
				}
				
			}
			
			echo "��תǰ";
			$this->wapheader('index.php?point=ǩ���ɹ� ');
			echo "��ת��";
			
		}
		if($_GET['usertype']=="2")
		{
			$this->yunset("title","Ԥע�����ǩ��");
		}else{
			$this->yunset("title","�ֳ�ע�����ǩ��");
		}
		$this->yuntpl(array('wap/register'));
	}
	//????
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