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
class forgetpw_controller extends common
{
	function index_action()
	{
		$this->seo("forgetpw");
		$this->yun_tpl(array('index'));
	}
	function sendstr_action(){
		$str=array("a","b","c","d","e","f","g","h","i","g","k","l","m","n","o","p","q","r","s","t","u","v","w","x","w","z","1","2","3","4","5","6","7","8","9","0");
		$username=iconv("utf-8","gbk",$_POST['username']);
		if(!$this->CheckRegUser($username)){
				$res['msg']=iconv("gbk","utf-8","用户名不符合规范！");
				$res['type']='8';
		
			echo json_encode($res);die;
		}
		if(!$this->CheckRegEmail($_POST['email'])){
				$res['msg']=iconv("gbk","utf-8","邮箱格式不正确！");
				$res['type']='8';
		
			echo json_encode($res);die;
		}

		$info = $this->obj->DB_select_once("member","`username`='".$username."' and `email`='".$_POST['email']."'","`uid`");
		if($info['uid']>0){
			$cert = $this->obj->DB_select_once("company_cert","`uid`='".$info['uid']."' AND `type`='5' order by id desc","`ctime`,`id`");
			if((time()-$cert['ctime'])<300){
				$res['msg']=iconv("gbk","utf-8","请不要频繁发送信息");
				$res['type']='8';
			}else{
				$user = $this->obj->DB_select_once("resume","`uid`='".$info['uid']."'","`telphone`,`email`");
				if($user['email'] || $user['telphone']){
					for($i=0;$i<6;$i++){
						$k = rand(0,36);
						$string.=$str[$k];
					}
					$this->send_msg_email(array("username"=>$_POST['username'],"password"=>$string,"email"=>$user[email],"moblie"=>$user['telphone'],"type"=>"getpass"));
					$data['check']=$string;
					$data['ctime']=time();
					if($cert['id']){
						$this->obj->update_once('company_cert',$data,"`id`='".$cert['id']."'");
					}else{
						$data['uid']=$info['uid'];
						$data['check2']=$_POST['username'];
						$data['type']=5;
						$this->obj->insert_into('company_cert',$data);
					}
					$res['msg']=iconv("gbk","utf-8","验证码已发送到您绑定的邮箱或手机！");
					$res['type']='9';
				}else{
					$res['msg']=iconv("gbk","utf-8","您未绑定邮箱或者手机，请联系管理员重置密码！");
					$res['type']='8';
				}
			}
		}else{
			$res['msg']=iconv("gbk","utf-8","用户名或邮箱错误！");
			$res['type']='8';
		}
		echo json_encode($res);die;
	}
	function editpw_action()
	{
		if($_POST['username'] && $_POST['code'] && $_POST['pass'])
		{
			$password = $_POST['pass'];
			$cert = $this->obj->DB_select_once("company_cert","`type`='5' AND `check2`='".$_POST['username']."' AND `check`='".$_POST['code']."' order by id desc","`uid`,`check2`,`ctime`");
			if(!$cert['uid'])
			{
				$this->obj->ACT_msg($this->url("index","forgetpw","1"), $msg = "验证码填写错误！", $st = 2, $tm = 3);
				exit();
			}elseif((time()-$cert['ctime'])>1200){
				$this->obj->ACT_msg($this->url("index","forgetpw","1"), $msg = "验证码已失效，请重新获取！", $st = 2, $tm = 3);
				exit();
			}
			$info = $this->obj->DB_select_once("member","`uid`='".$cert['uid']."'","`email`");
			if(is_array($info))
			{
				$info['username'] = $cert['check2'];
				if($this->config[sy_uc_type]=="uc_center" && $info['name_repeat']!="1")
				{
					$this->obj->uc_open();
					uc_user_edit($info[username], "", $password, $info['email'],"0");
				}else{
					$salt = substr(uniqid(rand()), -6);
					$pass2 = md5(md5($password).$salt);
					$value="`password`='$pass2',`salt`='$salt'";
					$this->obj->DB_update_all("member",$value,"`uid`='".$cert['uid']."'");
				}
				$this->obj->ACT_msg($this->url("index","forgetpw","1"), $msg = "密码修改成功！", $st = 1, $tm = 3);
			}else{
				$this->obj->ACT_msg($this->url("index","login","1"), $msg = "对不起！没有该用户！", $st = 2, $tm = 3);
			}
		}else{
			$this->obj->ACT_msg($this->url("index","forgetpw","1"), $msg = "请完整填写信息！", $st = 2, $tm = 3);
			exit();
		}
	}
}