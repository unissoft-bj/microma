
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
	if (strlen($regPhone)!=4) {
		echo "0";
		die();
	}
	
	//	echo $phone.$usertype;
	
	$result = mysql_query("SELECT * FROM useraccounts where regphone='".$regPhone."'");
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
		$row['danwei'] = iconv('gbk', 'utf-8', $row['danwei']);
		$row['zhiwu'] = iconv('gbk', 'utf-8', $row['zhiwu']);
		$row['shenfen'] = iconv('gbk', 'utf-8', $row['shenfen']);
			
		
		echo $row['lname']."|".$row['phone']."|" . $row['danwei']."|" . $row['zhiwu']."|" . $row['shenfen'];
	
	}
}


/**
 * //发送短信校验码
 */
if(isset($_GET['sendmsg'])){
	$phone = $_GET['sendmsg'];
	$msg=rand(100000,999999);
	
	//将msg发送到指定手机号
	
	
	//将msg写入session……
	session_start();
	
	// store session data
	
	$_SESSION['msg']=$msg;
	echo $_SESSION['msg'];
}

/**
 * //短信校验码
 */
if(isset($_GET['checkmsg'])){
	echo "sendmsg";
}

// $result = mysql_query("SELECT useraccounts.intid,useraccounts.lname,useraccounts.usertype FROM usermacs,useraccounts where usermacs.userid=useraccounts.userid and usermacs.mac='".$mymac."'");
// if(mysql_num_rows($result)==0){
// 	echo "���豸��û�а��κ��˺�";
// }
// while($row = mysql_fetch_array($result))
//   {
  	
//   if($row['usertype']==1){
  	
// 	$usertype="��ְ��";
//   }else{
//   	$usertype = "��Ƹ��";
//   }
//   echo "<a href=userlogin.php?userid=".$row['intid'].">[". $usertype."]".$row['lname']."</a>";
//   echo "<br />";

//   }

mysql_close($con);
?>