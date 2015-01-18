
<!DOCTYPE HTML>
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
<meta name="viewport" content="width=device-width,height=device-height,inital-scale=1.0,maximum-scale=1.0,user-scalable=no;">
<title>手气不错</title>
<link rel="stylesheet" type="text/css" href="css/css.css">
<?php 
$_GET['title']="手气不错";

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
<br><br><br><br><br>
<div style="font-size:20px;">	
 &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;恭喜您成功获得200积分（积分券）。您可以进入个人中心查看最新积分，或者先注册用户

<br><br>
<p align=center><a href="/ma/caipiao.php">点“此处”后进入“彩票兑换”页面</a></p>
<p align=center><a href="/wap/member/">点“此处” 进入“个人中心”页面 查看最新积分</a></p>
<p align=center><a href="/wap/member/">点“此处” 进入“签到”页面进行用户注册</a></p>
  
</div>  
<br><br><br><br><br><br><br><br><br>
</section>
 
 <?php include 'foot.php';?>
 
</body>
</html>
