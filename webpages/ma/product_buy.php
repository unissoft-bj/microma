<?php
require 'global.php';
require 'inc/mysql.Class.php';
require 'inc/function.inc.php';
session_start();
//��·url
$lailu =  $_SERVER['HTTP_REFERER'];

//echo $product_jifen;

$sql="select integral from useraccounts where intid=".$_COOKIE['uid'];
$rs=$db->r($sql);
$integral_old =  $rs['integral'];
$integral_new = $integral_old-$product_jifen;
//echo $integral_new;
//������㹻��һ�������һ�ʧ��
if ($integral_new>=0) {
	/*�һ�
	
	1.����useraccounts �Ļ��
	2.��Ӷһ���¼��userlog��
	3.��ת����Ʒ����ҳ
	*/
	//echo "ok";
	
	$sql1="update useraccounts set integral=".$integral_new ." where intid=".$_COOKIE['uid'];
	$rs=$db->q($sql1);
	$sql2="INSERT INTO userlog (userid,integral,dintegral,action,rectime) 
			VALUES ('".$_COOKIE['userid']."',".
					$integral_old.",-$product_jifen,'兑换商品-$product_name','".dtime()."')";
	
	$rs=$db->q($sql2);
	$_SESSION['jifen']=$integral_new;
	msg("兑换商品成功",$lailu."&point=兑换商品成功，积分-".$product_jifen,1);
	
}else {
	//��ת����Ʒ����ҳ
	msg("兑积分不足 兑换失败",$lailu."?&point=积分不足 兑换失败",1);
}
?>