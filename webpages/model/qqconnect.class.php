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
class qqconnect_controller extends common
{
	function qqlogin_check_action()
	{
		if($_POST['username']!="" && $_POST['password']!="")
		{
			$user = $this->obj->DB_select_once("member","`username`='$username'");
			if(is_array($user))
			{
				$pass = md5(md5($_POST['password']).$user['salt']);
				if($pass==$user['password'])
				{
					echo "�ɹ�";
				}
			}else{
				echo "<font color='red'>���û�������</font>";
			}
		}else{
			echo "<font color='red'>�û��������벻��Ϊ�գ�</font>";
		}
	}
	function qqlogin_action()
	{
		if($_COOKIE['uid']!=""&&$_COOKIE['username']!="")
		{
			$this->obj->ACT_msg($this->config['sy_weburl'], $msg = "���Ѿ���¼�ˣ�");
		}
		if($this->config['sy_qqlogin']!="1")
		{
			$this->obj->ACT_msg($this->config['sy_weburl'], $msg = "�Բ���QQ��¼�ѹرգ�");
		}
		$this->seo('qqlogin');
	  $app_id = $this->config['sy_qqappid'];
	  $app_secret = $this->config['sy_qqappkey'];
	  $my_url = $this->config['sy_weburl']."/index.php?m=qqconnect&c=qqlogin";
	  $code = $_GET['code'];
	  if(empty($code))
	  {
	     $_SESSION['state'] = md5(uniqid(rand(), TRUE));
	     $dialog_url = "https://graph.qq.com/oauth2.0/authorize?response_type=code&client_id="
	        . $app_id . "&redirect_uri=" . urlencode($my_url) . "&state="
	        . $_SESSION['state'];
	     echo("<script> top.location.href='" . $dialog_url . "'</script>");
	  }
	  if($_GET['state'] == $_SESSION['state'])
	  {
	     $token_url = "https://graph.qq.com/oauth2.0/token?grant_type=authorization_code&"
	     . "client_id=" . $app_id . "&redirect_uri=" . urlencode($my_url)
	     . "&client_secret=" . $app_secret . "&code=" . $code;
		if(!function_exists('curl_init')) {

			echo "�뿪��CURL�����������޷�������һ��������";
			die;
		}
		$ch = curl_init();
		curl_setopt($ch, CURLOPT_URL,$token_url);
		curl_setopt($ch, CURLOPT_SSL_VERIFYHOST,  2);
		curl_setopt($ch, CURLOPT_RETURNTRANSFER,1);
		curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, FALSE);
		$response=curl_exec ($ch);
		curl_close ($ch);
	     if (strpos($response, "callback") !== false)
	     {
	        $lpos = strpos($response, "(");
	        $rpos = strrpos($response, ")");
	        $response  = substr($response, $lpos + 1, $rpos - $lpos -1);
	        $msg = json_decode($response);
	        if (isset($msg->error))
	        {
	           echo "<h3>error:</h3>" . $msg->error;
	           echo "<h3>msg  :</h3>" . $msg->error_description;
	           exit;
	        }
	     }
	     $params = array();
	     parse_str($response, $params);
	     $graph_url = "https://graph.qq.com/oauth2.0/me?access_token=".$params['access_token'];
		$ch = curl_init();
		curl_setopt($ch, CURLOPT_URL,$graph_url);
		curl_setopt($ch, CURLOPT_SSL_VERIFYHOST,  2);
		curl_setopt($ch, CURLOPT_RETURNTRANSFER,1);
		curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, FALSE);
		$str=curl_exec ($ch);
		curl_close ($ch);
	     if (strpos($str, "callback") !== false)
	     {
	        $lpos = strpos($str, "(");
	        $rpos = strrpos($str, ")");
	        $str  = substr($str, $lpos + 1, $rpos - $lpos -1);
	     }
	     $user = json_decode($str);
	     if (isset($user->error))
	     {
	        echo "<h3>error:</h3>" . $user->error;
	        echo "<h3>msg  :</h3>" . $user->error_description;
	        exit;
	     }

	     if($user->openid!="")
	     {
			$userinfo = $this->obj->DB_select_once("member","`qqid`='$user->openid'");
			if(is_array($userinfo))
			{
				if($this->config['sy_uc_type']=="uc_center")
				{
					$this->obj->uc_open();
					$user = uc_get_user($userinfo['username']);
					$ucsynlogin=uc_user_synlogin($user[0]);
					$msg =  '��¼�ɹ���'; 
					$this->obj->ACT_msg($this->config['sy_weburl'],"��¼�ɹ���",9);
				}else{
					$this->unset_cookie();
					$this->add_cookie($userinfo['uid'],$userinfo['username'],$userinfo['salt'],$userinfo['email'],$userinfo['password'],$userinfo['usertype']);
					$this->obj->ACT_msg($this->config['sy_weburl'],"��¼�ɹ���",9);
				}
			}else{

				$_SESSION['qq']["openid"] = $user->openid;
				$_SESSION['qq']["tooken"] = $params['access_token'];
				$_SESSION['qq']["logininfo"] = "���ѵ�½QQ����������ʻ���";

				$GetUrl = "https://graph.qq.com/user/get_user_info?oauth_consumer_key=".$this->config['sy_qqappid']."&access_token=".$_SESSION['qq']['tooken']."&openid=".$_SESSION['qq']['openid']."&format=json";
				$ch = curl_init();
				curl_setopt($ch, CURLOPT_URL,$GetUrl);
				curl_setopt($ch, CURLOPT_SSL_VERIFYHOST,  2);
				curl_setopt($ch, CURLOPT_RETURNTRANSFER,1);
				curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, FALSE);
				$str=curl_exec ($ch);
				curl_close ($ch);
				$user = json_decode($str);
				$user = $this->JsonArray($user);
				$user = $this->array_iconv("utf-8","GBK",$user);
				if($user['nickname']){
					$_SESSION['qq']['nickname'] = $user['nickname'];
					$_SESSION['qq']['pic'] = $user['figureurl_qq_2'];
				}else{ 
					$this->obj->ACT_msg($this->config['sy_weburl'],"�û���Ϣ��ȡʧ�ܣ������µ�½QQ��",8);
				}
				echo "<script>window.location.href='".$this->config['sy_weburl']."/index.php?m=qqconnect&c=qqbind';</script>";
			}
	     }
	  }else{
		  echo("The state does not match. You may be a victim of CSRF.");
	  }
	}
	function qqbind_action()
	{

		if(($_GET['usertype']=='1' || $_GET['usertype']=='2') && $_SESSION['qq']['openid'])
		{
				$usertype = $_GET['usertype'];
				$ip = $this->obj->fun_ip_get();
				$time = time();
				$salt = substr(uniqid(rand()), -6);
				$pass = md5(md5($salt).$salt);
  				$username = $this->checkuser($_SESSION['qq']['nickname'],$_SESSION['qq']['nickname']);

					$userid=$this->obj->DB_insert_once("member","`username`='$username',`password`='$pass',`usertype`='$usertype',`status`='1',`salt`='$salt',`reg_date`='$time',`reg_ip`='$ip',`qqid`='".$_SESSION['qq']['openid']."'");
 				if(!$userid)
				{
					$user = $this->obj->DB_select_once("member","`username`='".$username."'","`uid`");
					$userid = $user['uid'];
					$email = $user['email'];
				}
				$this->unset_cookie();
				if($usertype=="1")
				{
					$table = "member_statis";
					$table2 = "resume";
					$value="`uid`='$userid'";
					$value2 = "`uid`='$userid',`name`='$username'";

				}elseif($usertype=="2"){

					$table = "company_statis";
					$table2 = "company";
					$value="`uid`='$userid',".$this->rating_info();
					$value2 = "`uid`='$userid',`linktel`='$moblie'";
				}
				$this->obj->DB_insert_once($table,$value);
				$this->obj->DB_insert_once($table2,$value2);
				$this->obj->DB_insert_once("friend_info","`uid`='".$userid."',`nickname`='$username',`usertype`='$usertype'");
				$this->add_cookie($userid,$username,$salt,$email,$pass,$usertype);
 				unset($_SESSION['qq']);
				$this->obj->ACT_msg($_SERVER['HTTP_REFERER'],"��¼�ɹ���",9);
		}
		$this->seo("qqlogin");
		$this->yun_tpl(array('index'));
	}
    function cert_action()
    {
    	$id=$_GET['id'];
		$arr=@explode("|",base64_decode($id));
		$arr[0] = intval($arr[0]);
		$arr[1] = intval($arr[1]);
		if($id && is_array($arr) && $arr[0] && $arr[2]==$this->config['coding'])
		{
			$row=$this->obj->DB_select_once("company_cert","`uid`='".$arr[0]."' and `check2`='".$arr[1]."'");
			if(is_array($row))
			{
				if($row['status']!=1)
				{
					$value.="`cert`=concat(`cert`,',1'),";
				}
				$id=$this->obj->DB_update_all("company_cert","`status`='1'","`uid`='".$arr[0]."' and `check2`='".$arr[1]."'");
 				$this->obj->DB_update_all("member","`email`='".$row['check']."'","`uid`='".$arr[0]."'");
				if($_GET['type']=="3")
				{
					$value.="`email`='".$row['check']."'";
					$id?$this->obj->DB_update_all("lt_info",$value,"`uid`='".$arr[0]."' "):"";
				}else{
					$value.="`linkmail`='".$row['check']."'";
					$id?$this->obj->DB_update_all("company",$value,"`uid`='".$arr[0]."' "):"";
				}
				$id?$this->obj->ACT_msg($this->config['sy_weburl']."/member","��֤�ɹ���",9):$this->obj->ACT_msg($this->config['sy_weburl'],"��֤ʧ�ܣ���ϵ����Ա��֤��",8);
			}else{
				$this->obj->ACT_msg($_SERVER['HTTP_REFERER'],"��֤ʧ�ܣ�������·��",8);
			}
		}else{
			$this->obj->ACT_msg($_SERVER['HTTP_REFERER'],"�Ƿ�������",8);
		}
    }
	function mcert_action(){
    	$id=$_GET['id'];
		$arr=@explode("|",base64_decode($id));
		
		$arr[0] = intval($arr[0]);
	
		if($id && is_array($arr) && $arr[0] && $arr[2]==$this->config['coding']){
			$nid=$this->obj->DB_update_all("member","`email_status`='1'","`uid`='".$arr[0]."'");
			$nid?$this->obj->ACT_msg($this->config['sy_weburl']."/index.php?m=login&usertype=1","����ɹ������¼��",9):$this->obj->ACT_msg($this->config['sy_weburl'],"����ʧ�ܣ���ϵ����Ա��֤��",8);
		}else{ 
			$this->obj->ACT_msg($_SERVER['HTTP_REFERER'],"�Ƿ�������",8);
		}
    }
	function JsonArray($array)
	{
		if(is_object($array))
		{
		   $array = (array)$array;
		}
	     if(is_array($array))
	     {
           foreach($array as $key=>$value)
           {
           	 $array[$key] = $this->JsonArray($value);
           }
	     }
     return $array;
}
	function array_iconv($in_charset,$out_charset,$arr){
	        return eval('return '.iconv($in_charset,$out_charset,var_export($arr,true).';'));
	 }

	function checkuser($username,$name)
	{

		$user = $this->obj->DB_select_once("member","`username`='".$username."'","`uid`");
		if($user['uid'])
		{
			$name.="_".rand(1000,9999);
			return $this->checkuser($name,$username);
		}else{

			return $username;
		}

	}
	function rating_info()
	{
		$id =$this->config['com_rating'];
		$row = $this->obj->DB_select_once("company_rating","`id`='$id'");
		$value="`rating`='$id',";
		$value.="`integral`='".$this->config[integral_reg]."',";
		$value.="`rating_name`='".$row["name"]."',";
		if($row[type]==1){
			$value.="`job_num`='".$row["job_num"]."',";
			$value.="`down_resume`='".$row["resume"]."',";
			$value.="`invite_resume`='".$row["interview"]."',";
			$value.="`editjob_num`='".$row["editjob_num"]."',";
			$value.="`breakjob_num`='".$row["breakjob_num"]."'";
		}else{
			$time=time()+86400*$row[service_time];
			$value.="`vip_etime`='$time'";
		}
		return $value;
	}

}

