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
	mysql_query("BEGIN");
	$sql1="update useraccounts set integral=".$integral_new ." where userid='".$_COOKIE['userid']."'";
	$rs1=$db->q($sql1);
	$sql2="INSERT INTO userlog (userid,integral,dintegral,action,rectime) 
			VALUES ('".$_COOKIE['userid']."',".
					$integral_old.",-$product_jifen,'爱心捐助-$product_name','".dtime()."')";	
	$rs2=$db->q($sql2);
	
	//将订单数据存入订单表
		$pro_creattime=dtime();
		$sql3="insert into `prodorder`
				(`userid`, `username`, `prodcode`, `prodname`, `prodtype`, `prodspec`,  `Quan`, `recipphone1`, `recipphone2`, `rectime`, `recipemail`)
		  values('".$_COOKIE['userid']."','".$_COOKIE['username']."','juanzhu','juanzhu','hope',NULL,100,'".$_COOKIE['phone']."',NULL,'".$pro_creattime."',NULL);
		";
		$rs3 = $db->q($sql3);
// 		echo $sql1."<br>";
// 		echo $sql2."<br>";
// 		echo $sql3."<br>";
// 		echo $rs1."<br>";
// 		echo $rs2."<br>";
// 		echo $rs3."<br>";exit();
	if($rs1&&$rs2&&$rs3){
		mysql_query("COMMIT");
		$_SESSION['jifen']=$integral_new;
		msg("爱心捐助成功",$lailu."?&point=爱心捐助成功，积分-".$product_jifen,1);
	}else{
		msg("爱心捐助失败",$lailu."?&point=爱心捐助失败",1);
	}
}else {
	//��ת����Ʒ����ҳ
	msg("兑积分不足 兑换失败",$lailu."?&point=积分不足 兑换失败",1);
}
?>