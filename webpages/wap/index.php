<?php


include(dirname(dirname(__FILE__))."/global.php");

session_start();




if ($_GET['mac'] ) {
	
	//接受到的mac地址
	$mymac = $_GET['mac'];
	//将mac写入cookie
		
	setcookie("mymac", $mymac, time()+3600*24*30,"/");
}
//echo 'qqqq';die();



//当前类
$model = $_GET['m'];
//当前行为，即类的方法
$action = $_GET['c'];





if($_GET['m'] && !ereg("^[0-9a-zA-Z\_]*$",$_GET['m'])){
	
	$_GET['m'] = 'index';
}
if($model=="")	$model="index";
if($action=="")	$action = "index";
//隐藏登录页面，当调用登录功能时，跳转到“认证页”
if($model=="login")	$model="register";
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