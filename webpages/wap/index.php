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




include(dirname(dirname(__FILE__))."/global.php");
//当前类
$model = $_GET['m'];
//当前行为，即类的方法
$action = $_GET['c'];
//user类型 求职者或招聘者
$usertype=$_COOKIE["usertype"];

// //接受到的mac地址
// $mymac = $_GET['mac'];
// //将mac写入cookie
// if($mymac==""){
// }else{
// 	setcookie("mymac", $mymac, time()+360000);
// }




if($_GET['m'] && !ereg("^[0-9a-zA-Z\_]*$",$_GET['m'])){
	
	$_GET['m'] = 'index';
}
if($model=="")	$model="index";
if($action=="")	$action = "index";

//如果类文件不存在 则调用index类的index方法
if(!is_file(MODEL_PATH.$model.'.class.php'))
{
	$controller='index';
	$action='index';
}

//包含并运行类目录下的class/common.php文件
require(MODEL_PATH.'class/common.php');

//包含并运行当前的类
require("model/".$model.'.class.php');
//当前类的类型 此框架固定写法
$conclass=$model.'_controller';
//当前类下指定的动作
$actfunc=$action.'_action';
//通过构造方法生成一个views,该构造方法继承common类
$views=new $conclass($phpyun,$db,$db_config[def],"index");

//如果当前类中不存在该方法,则抛出异常
if(!method_exists($views,$actfunc)){
	$views->DoException();
}

//否则 执行该方法
$views->$actfunc();
?>