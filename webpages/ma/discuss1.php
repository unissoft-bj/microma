<?php 
require_once 'global.php';
require_once 'inc/function.inc.php';
require_once 'inc/mysql.Class.php';
?>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8">

<?php  
if($_POST){
	//$txa=$_POST["txa"]?$_POST["txa"]:"";
	$txa=trim($txa);
 	$uid=$_COOKIE["uid"]?$_COOKIE["uid"]:"";

$sql="insert into ma_guestbook(content,creattime,uid) values ('$txa',now(),$uid)";
	if(mysql_query($sql)) {
		$str = '   <script language=javascript>alert("留言成功，谢谢参与");</script>';

 
echo $str;
echo "<script>location.href='discuss.php';</script>";
	//	echo "留言成功，<html><a href='discuss.php'>返回</a></html>";
	}
}
?>