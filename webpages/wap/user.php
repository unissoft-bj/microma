<!DOCTYPE html PUBLIC "-//WAPFORUM//DTD XHTML Mobile 1.0//EN" "http://www.wapforum.org/DTD/xhtml-mobile10.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=gb2312"/>
<meta http-equiv="Cache-Control" content="no-cache"/>
<title>{yun:}$config.sy_webname{/yun} -  �ֻ��˲���</title>
<meta http-equiv="keywords" content="�˲���Ƹ,������Ƹ,wap" />
<meta http-equiv="description" content="�˲���Ƹ��wap��վ" />
<link rel="stylesheet" type="text/css" href="{yun:}$wapstyle{/yun}/css/wap.css"/>
</head>
<body>
<?php include '../data/db.config.php';?>
<?php

$mymac =  $_COOKIE["mymac"];

$con = mysql_connect($db_config['dbhost'],$db_config['dbuser'],$db_config['dbpass']);
mysql_query("SET NAMES 'GBK'"); 
if (!$con)
  {
  die('Could not connect: ' . mysql_error());
  }

mysql_select_db($db_config['dbname'], $con);

$result = mysql_query("SELECT useraccounts.intid,useraccounts.lname,useraccounts.usertype,useraccounts.shenfen FROM usermacs,useraccounts where usermacs.userid=useraccounts.userid and usermacs.mac='".$mymac."'");
if(mysql_num_rows($result)==0){
	echo "���������ţ�";
}
while($row = mysql_fetch_array($result))
  {
  	
  if($row['usertype']==1){
  	
	$usertype="��ְ��";
  }else{
  	$usertype = "��Ƹ��";
  }
  echo "<a href=userlogin.php?userid=".$row['intid'].">".$row['lname']."[".$row['shenfen']."]</a>";
  echo "&nbsp;\t";

  }

mysql_close($con);
?>
</body>
</html>