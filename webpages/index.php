<?php

include(dirname(__FILE__)."/global.php");
if($config['webcache']=="1"){
	include_once(LIB_PATH."web.cache.php");
	$cache=new Phpyun_Cache('./cache',dirname(__FILE__)."/",$config['webcachetime']);
	$cache->read_cache();
}
$var=@explode('-',str_replace('/','-',$_GET['yunurl']));
foreach($var as $p){
	$param=@explode('_',$p);
	$_GET[$param[0]]=$param[1];
}
unset($_GET['yunurl']);
if($_GET['m'] && !ereg("^[0-9a-zA-Z\_]*$",$_GET['m'])){
	
	$_GET['m'] = 'index';
}
$model = $_GET['m'];
$action = $_GET['c'];
if($model=="")	$model="index";
if($action=="")	$action = "index";
if(!is_file(MODEL_PATH.$model.'.class.php')){
	$controller='index';
	$action='index';
}
require(MODEL_PATH.'class/common.php');
require("model/".$model.'.class.php');
$conclass=$model.'_controller';
$actfunc=$action.'_action';
$views=new $conclass($phpyun,$db,$db_config["def"],"index",$model);
if(!method_exists($views,$actfunc)){
	$views->DoException();
}
$views->$actfunc();
if($config['webcache']=="1"){
	$cache->CacheCreate();
}

?>