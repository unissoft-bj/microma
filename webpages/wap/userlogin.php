<!DOCTYPE html PUBLIC "-//WAPFORUM//DTD XHTML Mobile 1.0//EN" "http://www.wapforum.org/DTD/xhtml-mobile10.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<body>
<?php include '../data/db.config.php';?>
<?php
// Print a cookie
$intid =  $_GET["userid"];

$con = mysql_connect($db_config['dbhost'],$db_config['dbuser'],$db_config['dbpass']);
 mysql_query("SET NAMES 'GBK'"); 
if (!$con)
  {
  die('Could not connect: ' . mysql_error());
  }

mysql_select_db($db_config['dbname'], $con);

$result = mysql_query("SELECT uid,username,usertype,salt,password FROM member where uid=".$intid);

while($userinfo = mysql_fetch_array($result))
  {
  echo  $userinfo['username']."ÑéÖ¤ÖÐ¡­¡­";
  $sql_useraccounts = "select userid,phone,userrole from useraccounts where intid='".$intid."'";
  $result_useraccounts = mysql_query($sql_useraccounts);
  $info_useraccounts = mysql_fetch_array($result_useraccounts);
  
  include 'activity_login.php';
  
  setcookie("uid",$userinfo['uid'],time() + 86400, "/");
  setcookie("username",$userinfo['username'],time() + 86400, "/");
  setcookie("usertype",$userinfo['usertype'],time() + 86400, "/");
  setcookie("salt",$userinfo['salt'],time() + 86400, "/");
  setcookie("shell",md5($userinfo['username'].$userinfo['password'].$userinfo['salt']), time() + 86400,"/");

  setcookie("userid",$info_useraccounts['userid'],time() + 86400, "/");
  setcookie("phone",$info_useraccounts['phone'],time() + 86400, "/");
  setcookie("userrole",$info_useraccounts['userrole'],time() + 86400, "/");
  }

//mysql_close($con);

?>
<script language=JavaScript>
   //parent.location.reload();
   parent.location=("/wap/index.php");
</script>
</body>
</html>