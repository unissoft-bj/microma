<?php 
require 'global.php';
require 'inc/mysql.Class.php';
require 'inc/function.inc.php';
$id=$_GET["id"];
?>
<!DOCTYPE HTML>
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
<meta name="viewport" content="width=device-width,height=device-height,inital-scale=1.0,maximum-scale=1.0,user-scalable=no;">
<title>详情</title>
<link rel="stylesheet" type="text/css" href="css/css.css">
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
<a href="meeting_list.php?title=资料下载"><font color="#ff7600">返回下载列表</font></a>
<?php }?>
</nav>
   <?php $sql="select * from ma_news where id=$id";
         $rs=$db->r($sql);?>
    <div id="discuss_list">
    	<ul id="discuss_info2">
        	<li>
            	<ul>
                	<li class="clearfix"><span class="left2" ><?php echo $rs["title"];?></span></li>
                    <li class="jianjie"><?php echo $rs["des"]?></li>
                    <li><?php echo $rs["content"];?></li>
                </ul>
            </li>
        </ul>
        
    </div>
    
  <?php include 'foot.php';?>
</body>
</html>
