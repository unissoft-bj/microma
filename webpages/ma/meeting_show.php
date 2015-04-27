<?php 
require 'global.php';
require 'inc/mysql.Class.php';
require 'inc/function.inc.php';
$id=$_GET["id"];
 $sql="select * from ma_news where id=$id";
         $rs=$db->r($sql);
?>
<!DOCTYPE HTML>
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
<meta name="viewport" content="width=device-width,height=device-height,inital-scale=1.0,maximum-scale=1.0,user-scalable=no;">
<title><?php echo $rs["des"]?></title>
<link rel="stylesheet" type="text/css" href="css/css.css">
</head>

<body>
  <script type="text/javascript" src="js/jquery-1.7.1.min.js"></script>
<script type="text/javascript">

</script>
<link rel="stylesheet" type="text/css" href="/template/wap/css/wap.css"/>
<header class="header">
<div class="header_cont">
 <div class="left-box"> <a class="hd-lbtn" href="javascript:history.back()"><span>返回</span></a></div>
<div class="header_name"><?php echo $rs["des"]?></div>

</div>
</header>
   <nav class="footer_nav">

<a href="javascript:window.scrollTo(0,0);">TOP</a><a href="/wap">首页</a> &nbsp;
</nav>
   
    <div id="discuss_list">
    	<ul id="discuss_info2">
        	<li>
            	<ul>
                	
                    <li><?php echo $rs["content"];?></li>
                </ul>
            </li>
        </ul>
        
    </div>
    
  <?php include 'foot.php';?>
</body>
</html>
