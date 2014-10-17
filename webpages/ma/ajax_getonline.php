<?php 
require 'global.php';
require 'inc/mysql.Class.php';
require 'inc/function.inc.php';
 $sql="select count(*) as a from useraccounts";
$r=$db->r($sql);
if ($r) {
	echo $r["a"];
}else{
	echo "0";
}