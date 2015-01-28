<!DOCTYPE html PUBLIC "-//WAPFORUM//DTD XHTML Mobile 1.0//EN" "http://www.wapforum.org/DTD/xhtml-mobile10.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=gb2312"/>
<meta http-equiv="Cache-Control" content="no-cache"/>
<title>{yun:}$config.sy_webname{/yun} </title>
<meta http-equiv="keywords" content="人才招聘,网络招聘,wap" />
<meta http-equiv="description" content="人才招聘网wap网站" />
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

$result = mysql_query("SELECT DISTINCT useraccounts.intid,useraccounts.lname,useraccounts.usertype,useraccounts.userrole FROM usermacs,useraccounts where usermacs.userid=useraccounts.userid and usermacs.mac='".$mymac."'");

if(mysql_num_rows($result)==0){
	echo "请输入手机号：";
}

while($row = mysql_fetch_array($result))
  {
  	
  if($row['usertype']==1){
  	
	$usertype="求职者";
  }else{
  	$usertype = "招聘者";
  }
  
  $userrole='';
  if ($row['userrole']=="100") {
  	$userrole = "销售员";
  }
  if ($row['userrole']=="1000") {
  	$userrole = "店长";
  }
  if ($row['userrole']=="300") {
  	$userrole = "媒体";
  }
  if ($row['userrole']=="400") {
  	$userrole = "会务";
  }
  if($userrole==""){
  	echo "<a href=userlogin.php?userid=".$row['intid'].">".$row['lname']."</a>";
  }else{
  	echo "<a href=userlogin.php?userid=".$row['intid'].">".$row['lname']."[".$userrole."]</a>";
  }
  echo "&nbsp;\t";

  }

mysql_close($con);
?>
</body>
</html>