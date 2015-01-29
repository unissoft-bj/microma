<?php
if (!isset($_GET['x'])) {
	echo "no paramter";
	exit();
}

$param = $_GET['x'];
$mac = base64_decode($param);
setcookie("mymac",$mac,time() + 3600, "/");
header("location: http://mtxwifi.net/ma/shouqibucuo.php?mac=".$mac);
?>