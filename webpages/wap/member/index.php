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