<?php
/* *
* $Author ：PHPYUN开发团队
*
* 官网: http://www.phpyun.com
*
* 版权所有 2009-2014 宿迁鑫潮信息技术有限公司，并保留所有权利。
*
* 软件声明：未经授权前提下，不得用于商业运营、二次开发以及任何形式的再次发布。
*/
class register_controller extends common
{
	function index_action()
	{
		$this->get_moblie();
// 		if($this->uid || $this->username)
// 		{
// 			echo "<script>location.href='index.php?m=register&usertype=2';</script>";
// 		}
		
		if($_POST['submit'])
		{
			echo "submit";
// 			if($_POST['step']==""){
// 				$_POST['step'] = 1;
// 				echo $_POST['step'];
// 				die($_POST['step']);
// 			}	
			$usertype=$_POST['usertype']?$_POST['usertype']:1;
			
			$regmsg = $_POST['regmsg'];
			if($usertype==1&&$_GET['step']!=2){
				session_start();
				if($regmsg!=$_SESSION['msg']){
					$this->wapheader('index.php?m=register&','短信校验码错误！');
				}
			}
			
			if($usertype==1&&($_GET['step']==1||$_GET['step']=="")){
				$_POST['username']="noname";
			}
			
			if(!$this->CheckRegUser($_POST['username']))
			{
				$this->wapheader('index.php?m=register&usertype=1&','无效的用户名！');
			}
			
			
			
// 			if(!$this->CheckRegEmail($_POST['email']))
// 			{
// 				$this->wapheader('index.php?m=login&','邮箱格式不正确！');
// 			}
			$member=$this->obj->DB_select_once("member","`username`='".$_POST['username']."' OR `email`='".$_POST['email']."'");
			if(is_array($member))
			{
// 				if($member['username']==$_POST['username'])
// 				{
// 					$this->wapheader('index.php?m=register&usertype='.$usertype.'&','用户名已存在，请重新输入！');
// 				}elseif($member['email']==$_POST['email']){
// 					$this->wapheader('index.php?m=register&usertype='.$usertype.'&','邮箱已存在，请重新输入！');
// 				}
			}else{
				$regname=@explode(",",$this->config['sy_regname']);
				if(in_array($_POST['username'],$regname))
				{
					$this->wapheader('index.php?m=register&usertype='.$usertype.'&','用户名已存在，请重新输入！');
				}
			}
			
			
			if($usertype=='1')
			{
				$status = 1;
			}elseif($usertype=='2'){
				$status = $this->config['com_status'];
			}
			
			echo $usertype;
			
			//ucenter绑定
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
			//获取表单数据
			$idata['username'] = $_POST['username'];
			$idata['password'] = $pass;
			//$idata['email']    = $_POST['email'];
			$idata['usertype'] = $usertype;
			$idata['status']   = $status;
			$idata['salt']     = $salt;
			$idata['reg_date'] = time();
			$phone = $_POST['phone'];
			if($_GET['step']==2){
				$phone = $_COOKIE["myphone"];
				//die($phone);
			}
			
			$baomi1 = $_POST['baomi1'];
			$baomi2 = $_POST['baomi2'];
			$baomi3 = $_POST['baomi3'];
			//当类型为招聘者时才获取regphone
			
			
			//在useraccounts中查询同时存在姓名和电话的记录，
			$member2=$this->obj->DB_select_once("useraccounts","`lname`='".$_POST['username']."' AND `phone`='".$phone."'");
			//如果存在，说明是老用户需要在usermac表中绑定mac地址
			if(is_array($member2)){
				echo "bangding";
				$userid_usermacs = $member2['userid'];
				$phone_usermacs = $member2['phone'];
				$mac_usermacs = $_COOKIE["mymac"];
				
				//登陆 得到各种用户数据 然后写入cookie
				$loginMember=$this->obj->DB_select_once("member","`uid`=".$member2['intid']);
				setcookie("uid",$loginMember['uid'],time() + 86400, "/");
				setcookie("username",$loginMember['username'],time() + 86400, "/");
				setcookie("usertype",$loginMember['usertype'],time() + 86400, "/");
				setcookie("salt",$loginMember['salt'],time() + 86400, "/");
				setcookie("shell",md5($loginMember['username'].$loginMember['password'].$loginMember['salt']), time() + 86400,"/");
				
				
				$array_usermac['userid'] = $userid_usermacs;
				$array_usermac['phone'] = $phone_usermacs;
				$array_usermac['mac'] = $mac_usermacs;
				
				//如果usermac中有这个手机号并且userid为空 则更新这条记录
				$member_usermacs = $this->obj->DB_select_once("usermacs","`userid`='' AND `phone`='".$phone."' AND `mac`='".$mac_usermacs."'");
				if(is_array($member_usermacs)){
					//die("更新usermacs");
					$array_usermac['userid'] = $userid_usermacs;
					$this->obj->update_once('usermacs',array('userid'=>$array_usermac['userid']),array('id'=>$member_usermacs['id']));
				}else{
					//否则在usermacs中插入新的记录
					$this->obj->insert_into('usermacs',$array_usermac);
				}
				
			}else{
				//如果姓名和电话不同时存在，
				//如果usertype==1 是求职者求职者
				//则更新4个表的数据，member表、useraccount、usermacs
				if($_GET['step']==2){
					//删除当前手机号，姓名为noname的记录
					$this->obj->DB_delete_all("useraccounts","`lname`='noname' and `phone`='".$_COOKIE['myphone']."'");
					
				}
				if($usertype==1){
					echo "准备写入member";
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
							$udata2['telphone'] = $phone;
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
						#begin将当期用户uid和usermac添加到数据库$myuseraccounts中#
						echo "begin将当期用户uid和usermac添加到数据库myuseraccounts中";
						$myuseraccounts['intid'] = $userid;
						$myuseraccounts['usertype'] = $usertype;
						$myuseraccounts['lname'] = $_POST['username'];
						$myuseraccounts['mac'] = $_COOKIE["mymac"];
						$myuseraccounts['phone'] = $phone;
						$myuseraccounts['danwei'] = $_POST["danwei"];
						$myuseraccounts['zhiwu'] = $_POST["zhiwu"];
						$myuseraccounts['shenfen'] = $_POST["shenfen"];
						
						$myuserid = $this->obj->insert_into('useraccounts',$myuseraccounts);
						//将userid和同步
						if($myuserid){
							$this->obj->update_once('useraccounts',array('userid'=>$myuserid),array('id'=>$myuserid));
						}
					
						// 				echo $myuserid;
						// 				die($_COOKIE["mymac"]);
						//begin将当期用户uid和usermac添加到数据库中#
						echo "插入表 usermacs";
						
						echo $myuserid;
						$goodluck['userid'] = $myuserid;
						echo $myuseraccounts['mac'];
						$goodluck['mac'] =$myuseraccounts['mac'];
						echo $_POST["phone"];						
						$goodluck['phone'] = $_POST["phone"];
						echo "over";
						$this->obj->insert_into('usermacs',$goodluck);						
						echo "插入表 usermacs结束";
					}
				}
				
				//如果usertype=2 招聘者 则验证regphone				
				if($usertype==2){
					//如果预留手机错误 则跳到签到页面
					$member_compeny = $this->obj->DB_select_once("useraccounts","`regphone`='".$_POST['regphone']."'");
					if(!is_array($member_compeny)){
						$this->wapheader('index.php?m=register&usertype=2&point=代表证号错误');
					}else{
					//如果预留手机没问题，则注册企业会员
					//企业会员采用预注册方式，即将企业手机号（识别码）写到useraccounts表中，其他信息由企业注册后自己填写
						echo "准备写入member";
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
								$udata2['telphone'] = $phone;
							}elseif($usertype=="2"){
								$table = "company_statis";
								$table2 = "company";
									
								$udata['uid'] = $userid;
								$udata2['uid'] = $userid;
								$udata2['linkmail'] = $_POST['email'];
								$udata2['linkman'] = $_POST['username'];
								$udata2['linkphone'] = $phone;
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
							#begin将当期用户uid和usermac添加到数据库$myuseraccounts中#
							echo "begin将当期用户uid和usermac添加到数据库myuseraccounts中";
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
// 							//将userid和同步
// 							if($myuserid){
// 								$this->obj->update_once('useraccounts',array('userid'=>$myuserid),array('id'=>$myuserid));
// 							}
								
							// 				echo $myuserid;
							// 				die($_COOKIE["mymac"]);
							//begin将当期用户uid和usermac添加到数据库中#
							echo "插入表 usermacs";
						
							echo $myuserid;
							$goodluck['userid'] = $myuserid;
							echo $myuseraccounts['mac'];
							$goodluck['mac'] =$myuseraccounts['mac'];
							echo $_POST["phone"];
							$goodluck['phone'] = $_POST["phone"];
							echo "over";
							$this->obj->insert_into('usermacs',$goodluck);
							echo "插入表 usermacs结束";
							
						}
					}
				}
				
			}
			
			echo "跳转前";
			
			if($_POST['usertype']==1 && ($_GET['step']==1||$_GET['step']=="")){
				$myphone = $_POST['phone'];
				//将mac写入cookie
				
					setcookie("myphone", $myphone, time()+360000);
				
				
				$this->wapheader('index.php?m=register&usertype=1&step=2');
			}
			
			
			$this->wapheader('index.php?point=签到成功 ');
			echo "跳转后";
			
		}
		if($_GET['usertype']=="2")
		{
			$this->yunset("title","预注册代表签到");
		}else{
			$this->yunset("title","现场注册代表签到");
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