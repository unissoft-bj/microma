
<!DOCTYPE HTML>
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
<meta name="viewport" content="width=device-width,height=device-height,inital-scale=1.0,maximum-scale=1.0,user-scalable=no;">
<title>中国福利彩票双色球</title>
<link rel="stylesheet" type="text/css" href="css/css.css">
<?php 
$_GET['title']="中国福利彩票双色球";

?>
</head>

<body>
	<?php include 'top.php';?>
       <nav class="footer_nav">

<a href="javascript:window.scrollTo(0,0);">TOP</a><a href="/wap">首页</a> &nbsp;-
<?php if ($_COOKIE['uid']) {
	;
?>
&nbsp;


欢迎,<strong><?php echo iconv('GB2312', 'UTF-8', $_COOKIE['username']);?></strong> 
<a href="meeting_list.php?title=资料下载"><font color="#ff7600"></font></a>
<?php }?>
</nav>
   
<section class="wap_login" id='mainbody' >
<br><br><br><br><br>
<div style="font-size:20px;">	
 &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;已收到您的订单。下单后系统将发送彩票号码和彩票标志码短信到<?php echo $_GET['phone'];?>，请注意查收，如果您在6分钟之内没收到短信，请联系客服<a href="tel:13701272752">13701272752</a>

<br><br>
<p align=center><a href="/wap/member/">回到“个人中心”页面</a></p>
  
</div>  
<br><br><br><br><br><br><br><br><br>
</section>
 
 <?php include 'foot.php';?>
 
</body>
</html>
