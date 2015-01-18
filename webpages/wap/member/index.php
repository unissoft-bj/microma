<?php
/* *
* $Author ：PHPYUN开发团队
*
* 官网: http://www.phpyun.com
*
* 版权所有 2009-2014 宿迁鑫潮信息技术有限公司，并保留所有权利。
*
* 软件声明：未经授权前提下，不得用于商业运营、二次开发以及任何形式的再次发布。
*/

include(dirname(dirname(dirname(__FILE__)))."/global.php");

//处理积分，如果未登录，显示userpoints中的积分，否则显示useraccounts中的积分
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

//在ma中的个人中心不区分index和com
$usertype=1;//在微招聘系统，注释这段代码
if($usertype==2){
	$model="com";//usertype =2 招聘单位
}else{
	$model="index";//usertype=1 求职者
}

require(MODEL_PATH.'class/common.php');
require("model/".$model.'.class.php');

$conclass=$model.'_controller';
$actfunc=$action.'_action';
//注意构造方法的最后一个参数
$views=new $conclass($phpyun,$db,$db_config["def"],"wap_member");
if(!method_exists($views,$actfunc)){
	$views->DoException();
}

$views->$actfunc();
?>