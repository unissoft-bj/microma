<?php 
require 'global.php';
require 'inc/mysql.Class.php';
require 'inc/function.inc.php';
 $sql="select count(*) as a from ma_message where touserid='$uid' and flag=0";
$r=$db->r($sql);
if ($r) {
	echo $r["a"];
}else{
	echo "0";
}