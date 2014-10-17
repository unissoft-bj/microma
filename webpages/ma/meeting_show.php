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
   <?php $sql="select * from ma_news where id=$id";
         $rs=$db->r($sql);?>
    <div id="discuss_list">
    	<ul id="discuss_info2">
        	<li>
            	<ul>
                	<li class="clearfix"><span class="left2"><?php echo $rs["title"];?></span></li>
                    <li class="jianjie"><?php echo $rs["des"]?></li>
                    <li><?php echo $rs["content"];?></li>
                </ul>
            </li>
        </ul>
        
    </div>
    
  <?php include 'foot.php';?>
</body>
</html>
