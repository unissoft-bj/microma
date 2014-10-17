<!DOCTYPE html PUBLIC "-//WAPFORUM//DTD XHTML Mobile 1.0//EN" "http://www.wapforum.org/DTD/xhtml-mobile10.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<body>
<?php include '../data/db.config.php';?>
<?php
// Print a cookie
$userid =  $_GET["userid"];

$con = mysql_connect($db_config['dbhost'],$db_config['dbuser'],$db_config['dbpass']);
 mysql_query("SET NAMES 'GBK'"); 
if (!$con)
  {
  die('Could not connect: ' . mysql_error());
  }

mysql_select_db($db_config['dbname'], $con);

$result = mysql_query("SELECT uid,username,usertype,salt,password FROM member where uid=".$userid);

while($userinfo = mysql_fetch_array($result))
  {
  echo  $userinfo['username']."��֤�С���";
  setcookie("uid",$userinfo['uid'],time() + 86400, "/");
  setcookie("username",$userinfo['username'],time() + 86400, "/");
  setcookie("usertype",$userinfo['usertype'],time() + 86400, "/");
  setcookie("salt",$userinfo['salt'],time() + 86400, "/");
  setcookie("shell",md5($userinfo['username'].$userinfo['password'].$userinfo['salt']), time() + 86400,"/");

  }

mysql_close($con);

?>
<script language=JavaScript>
   //parent.location.reload();
   parent.location=("/ma/index.php");
</script>
</body>
</html>