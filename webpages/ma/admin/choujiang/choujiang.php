<?php 
require_once('../../global.php');
require_once('inc/mysql.Class.php');
require_once('inc/function.inc.php');
	session_start();
	$sql="select DISTINCT(element_24) from ap_form_12465 where 1=1 and ".$_SESSION['choujiangtiaojian']." order by id desc";
	$sqlc="select count(DISTINCT(element_24)) as c from ap_form_12465 where 1=1 and ".$_SESSION['choujiangtiaojian'] ;
	$counts_r = $db->r($sqlc);
	$counts = $counts_r[c];

	$target =  rand(0,$counts-1);
	
	$rsdb=$db->a($sql);
	
	
	$i=0;
	foreach($rsdb as $key=>$rs){		
		$phone = $rs['element_24'];		
		if($i==$target){
			break;
		}
		$i++;
	}
	echo $phone; 
?>


