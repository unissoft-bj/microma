
<?php include '../data/db.config.php';?>
<?php
header("content-type:text/html; charset=utf-8");
$mymac =  $_COOKIE["mymac"];

$con = mysql_connect($db_config['dbhost'],$db_config['dbuser'],$db_config['dbpass']);
mysql_query("SET NAMES 'GBK'"); 
if (!$con)
  {
  die('Could not connect: ' . mysql_error());
  }

mysql_select_db($db_config['dbname'], $con);

//根据手机判断当前手机是否注册过用户
if(isset($_GET['phone'])){
	$phone =  $_GET['phone'];	
	if($_GET['usertype']==""){
		$usertype = 1;
	}else{
		$usertype = $_GET['usertype'];
	}	
//	echo $phone.$usertype;

	$result = mysql_query("SELECT lname FROM useraccounts where phone='".$phone."' and usertype='".$usertype."'");
	//echo "SELECT lname FROM useraccounts where phone='".$phone."' and usertype='".$usertype."'";
	if(mysql_num_rows($result)==0){
		echo "";
	}
	while($row = mysql_fetch_array($result))
	{
		
// 		echo "<a href=userlogin.php?userid=".$row['intid'].">[". $usertype."]".$row['lname']."</a>";
// 		echo "<br />";
		
		$row['lname'] = iconv('gbk', 'utf-8', $row['lname']);
		echo $row['lname']."|";
	
	}

}

/**
 * 招聘单位预留手机号
 */
if(isset($_GET['regPhone'])){
	//echo "regPhone";
	$regPhone =  $_GET['regPhone'];
// 	if (strlen($regPhone)!=4) {
// 		echo "0";
// 		die();
// 	}
	
	//	echo $phone.$usertype;
	
	$result = mysql_query("SELECT * FROM useraccounts where regphone='".$regPhone."'");
	//die("SELECT * FROM useraccounts where regphone='".$regPhone."'");
	if(mysql_num_rows($result)==0){
		echo "0";
		die();
	}
	while($row = mysql_fetch_array($result))
	{
	
		// 		echo "<a href=userlogin.php?userid=".$row['intid'].">[". $usertype."]".$row['lname']."</a>";
		// 		echo "<br />";
	
		$row['lname'] = iconv('gbk', 'utf-8', $row['lname']);
		$row['phone'] = iconv('gbk', 'utf-8', $row['phone']);
		
		$row['orgn'] = iconv('gbk', 'utf-8', $row['orgn']);
		$row['title'] = iconv('gbk', 'utf-8', $row['title']);
		$row['userrole'] = iconv('gbk', 'utf-8', $row['userrole']);
			
		
		echo $row['lname']."|".$row['phone']."|" . $row['orgn']."|" . $row['title']."|" . $row['userrole'];
	
	}
}


/**
 * //发送短信校验码
 */
if(isset($_GET['sendmsg'])){
	$phone = $_GET['sendmsg'];
	$msg=rand(100000,999999);
	
	$prefix="欢迎使用Matrix Wifi，您的短信验证码为：";
	$prefix=iconv('utf-8', 'gbk', $prefix);
	$postfix="， WIFI网络服务电话 13701272752！";
	$postfix=iconv('utf-8', 'gbk', $postfix);
	$optime = date("Y-m-d H:i:s",time());
	//将msg发送到指定手机号，写入数据库 $mymac
	
	$sql = "INSERT INTO authsms (prefix, sms,postfix,mac,phone,rectime) VALUES
							('".$prefix."',
							 '".$msg."',
							 '".$postfix."',
							 '".$mymac."',
							 '".$phone."',
							 '".$optime."')";
	mysql_query($sql,$con);
	//将msg写入session……
	session_start();
	
	// store session data
	
	$_SESSION['msg']=$msg;
	echo $_SESSION['msg'];
	//echo $_GET['sendmsg'];
}

/**
 * //短信校验码
 */
if(isset($_GET['checkmsg'])){
	echo "sendmsg";
}

/**
 * 生成并输入邀请码
 */
if(isset($_GET['getInviteCode'])){
	$invite_code1 =rand(0,9);
	$invite_code2 =rand(10000,99999);
	$invite_code = $invite_code1.$invite_code2;
	$sql="INSERT INTO shouqibucuo (salesperson_userid,invite_code,rectime,type)
			VALUES ('".$_COOKIE['userid']."','".
				$invite_code."',now(),'".$_GET['type']."')";
	mysql_query($sql,$con);	
	echo $invite_code;
}

/**
 * 刷新邀请状态
 */
if(isset($_GET['getInviteState'])){
	$invite_code = str_replace("%20%20","",$_GET['invite_code']);
	$invite_code = str_replace(" ","",$invite_code);
	$invite_code = str_replace(" ","",$invite_code);
	$invite_code = str_replace(" ","",$invite_code);
	$sql="select * from shouqibucuo where invite_code = '".$invite_code."' and is_success=1 and TO_DAYS(rectime) = TO_DAYS(NOW())";
	//echo $sql;
	$result = mysql_query($sql);
	//echo  mysql_num_rows($result);
	if(mysql_num_rows($result)>0){
		echo "ok";
	}
	
}

mysql_close($con);
?>
