<?php 
require '../ma/global.php';
require '../ma/inc/function.inc.php';
require '../ma/inc/mysql.Class.php';
?>
<html>
<title>用户认证界面</title>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
<meta name="viewport" content="width=device-width,height=device-height,inital-scale=1.0,maximum-scale=1.0,user-scalable=no;">
<body>
<div style= 'font-size: 12px;'>
<?php
$url_orign = "http://$_SERVER[HTTP_HOST]$_SERVER[REQUEST_URI]";
$sql = "  select token from  authmacip where mac = '" . $_GET['mac'] .  
       "'  and  ip ='" . $_GET['ip'] . 
       "'  and  called ='" . $_GET['called'] . 
       "'  and  userurl ='" . $_GET['userurl'] .
       "'  and TIMESTAMPDIFF(SECOND, rectime, now()) < 180 " . 
       "   order by rectime desc limit 1" ;
 
$rs=$db->r($sql);
if (empty($rs)){ 
 
    $token = rand();
    $sql = "  insert into authmacip set mac = '" . $_GET['mac'] . 
       "',  ip ='" . $_GET['ip'] . 
       "',  called ='" . $_GET['called'] . 
       "',  srcip ='" . $_SERVER ['HTTP_HOST'] .
       "',  procid ='" . "portal" . 
       "',  userurl ='" . $_GET['userurl'] .
       "',  orgurl ='" . $url_orign .
       "',  token ='" . $token .         
       "', rectime = now()" ;
    $db->q($sql);
 
    }
else{
    $row = mysql_fetch_object($result);
    $token = $rs[token];
    mysql_free_result($result);
  }
 $auth = 0;
 $sql = "  select id from authmac where mac = '" . $_GET['mac'] . "'";
$rs=$db->r($sql);
if ($rs){
    echo "<div id=\"MyChilli\">";
    echo "<script id=\"chillijs\" src=\"ussp.js\"></script>";
    echo "</div>";
    echo "<br />";    
    echo "已为您接通Internet<br />Connected to the Internet";
    echo "<br>";    
    echo "<br />";  
    echo "<a href=\"" . $_GET['userurl'] . "\"> 点击此处继续您的Internet之旅<br />Please Click to Continue<br /> your Internet surfing </a>";
 }else{
 	echo "<br />";
	echo "未接通Internet<br />NOT Connected to the Internet yet";
	echo "<form name=\"regsms\" action=\"ihostgetsms.php\" method=\"POST\" >" ;
	echo "<input type=\"hidden\" name=\"token\" value=\"" . $token . "\" />";
	echo "请输入接收短信的手机号:<br /> Please input your phone number<br /> to receive a certification code:<br />";
	echo "<input type=\"text\" size=\"30\" name=\"sphone\" value=\"\" /><br /><br />";
	//include "orggetform.php";
	echo "<input type=\"submit\" name=\"button\" value=\"获取短信认证码&#13;&#10;Get SMS Certification Code\" /></form>";
 	
 }
 
?>
</div>

</body>
</html>


