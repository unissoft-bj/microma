<?php
if (!isset($_GET['x'])) {
	echo "no paramter";
	exit();
}

$param = $_GET['x'];
$mac = base64_decode($param);

header("location: http://mtxwifi.net/ma/shouqibucuo.php?mac=".$mac);
?>