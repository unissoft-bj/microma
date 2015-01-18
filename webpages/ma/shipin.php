
<!DOCTYPE HTML>
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
<meta name="viewport" content="width=device-width,height=device-height,inital-scale=1.0,maximum-scale=1.0,user-scalable=no;">
<title>精彩视频</title>
<link rel="stylesheet" type="text/css" href="css/css.css">
<?php 
$_GET['title']="精彩视频";

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
<div width=100% align=center>
<video width="100%" height="" controls="controls">
  <source src="/ma/v/1.ogg" type="video/ogg">
  <source src="/ma/v/1.mp4" type="video/mp4">
Your browser does not support the video tag.
</video>
</div>
</section>
 
 <?php include 'foot.php';?>
 
</body>
</html>
