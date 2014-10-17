<?php
require 'global.php';
require 'inc/mysql.Class.php';
require 'inc/function.inc.php';

$fromuserid=$_COOKIE["uid"];
$touserid=$_POST["touserid"];
$content=$_POST["mess"];
$sqlinsert="insert into ma_message (fromuserid,touserid,content,seedtime) values ('$fromuserid','$touserid','$content',now())";
if(mysql_query($sqlinsert)){
	?>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
<script type="text/javascript">
	alert("发送成功");
	window.location.href="message_linkman.php";
</script>
<?php 
}else{?>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
<script type="text/javascript">
	alert("发送失败");
	window.location.href="message_linkman.php";
</script>
<?php }?>