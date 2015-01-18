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


/**
 * 生成并输入邀请码
 */
if(isset($_GET['getInviteCode'])){
	$invite_code =rand(100000,999999);
	$sql="INSERT INTO shouqibucuo (salesperson_userid,invite_code,rectime)
			VALUES ('".$_COOKIE['userid']."','".
				$invite_code."',now())";
	mysql_query($sql,$con);	
	echo $invite_code;
}
mysql_close($con);
?>


