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

include(dirname(dirname(dirname(__FILE__)))."/global.php");

//������֣����δ��¼����ʾuserpoints�еĻ��֣�������ʾuseraccounts�еĻ���
$con = mysql_connect($db_config['dbhost'],$db_config['dbuser'],$db_config['dbpass']);
mysql_query("SET NAMES 'GBK'");
if (!$con)
{
	die('Could not connect: ' . mysql_error());
}

if($_COOKIE["username"]==""){
	//mysql_select_db($db_config['dbname'], $con);
	$sql = "select points from userpoints where mac='".$_COOKIE['mymac']."'";
	$result = mysql_query($sql);
	$row = mysql_fetch_array($result);
	$_SESSION['jifen']=$row['points'];
	mysql_close($con);
}else{
	//mysql_select_db($db_config['dbname'], $con);
	$sql = "select integral,usertype from useraccounts where userid='".$_COOKIE['userid']."';";
	$result = mysql_query($sql);
	$row = mysql_fetch_array($result);
	$_SESSION['jifen']=$row['integral'];
	$_SESSION['usertype']=$row['usertype'];
	mysql_close($con);
}
if ($_SESSION['jifen']=="" ||$_SESSION['jifen']==null) {
	$_SESSION['jifen']=0;
}


$model = $_GET['m'];
$action = $_GET['c'];
if($model=="")	$model="index";
if($action=="")	$action = "index";

$usertype=$_COOKIE["usertype"];

//��ma�еĸ������Ĳ�����index��com
$usertype=1;//��΢��Ƹϵͳ��ע����δ���
if($usertype==2){
	$model="com";//usertype =2 ��Ƹ��λ
}else{
	$model="index";//usertype=1 ��ְ��
}

require(MODEL_PATH.'class/common.php');
require("model/".$model.'.class.php');

$conclass=$model.'_controller';
$actfunc=$action.'_action';
//ע�⹹�췽�������һ������
$views=new $conclass($phpyun,$db,$db_config["def"],"wap_member");
if(!method_exists($views,$actfunc)){
	$views->DoException();
}

$views->$actfunc();
?>