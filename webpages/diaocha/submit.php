
<!DOCTYPE HTML>
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
<meta name="viewport" content="width=device-width,height=device-height,inital-scale=1.0,maximum-scale=1.0,user-scalable=no;">
<title>问卷调查</title>
<link rel="stylesheet" type="text/css" href="css/css.css">
<?php 
$_GET['title']="问卷调查";

?>
</head>

<body>
	<?php include 'top_no_login.php';?>
       <nav class="footer_nav">

<a href="javascript:window.scrollTo(0,0);">TOP</a><a href="/wap">首页</a> &nbsp;-
<?php if (isset($_COOKIE['uid'])) {
	;
?>
&nbsp;


欢迎,<strong><?php echo iconv('GB2312', 'UTF-8', $_COOKIE['username']);?></strong> 
<a href="meeting_list.php?title=资料下载"><font color="#ff7600"></font></a>
<?php }?>
</nav>
   
<section class="wap_login" id='mainbody' >
<br><br><br><br>
<div align=center>谢谢您的参与，敬请关注稍后的抽奖活动！</div>
<br><br><br><br>
</section>
 
 <?php include 'foot.php';?>
 
</body>
</html>
