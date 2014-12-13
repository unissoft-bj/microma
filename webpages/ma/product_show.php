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
<title>商品详情</title>
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
<a href="product_list.php?title=积分商城"><font color="#ff7600">返回积分商城</font></a>
<?php }?>
</nav>
	<form action="product_buy.php" method="post">
   <?php $sql="select * from ma_product where id=$id";
         $rs=$db->r($sql);?>
    <div id="discuss_list">
    	<ul id="discuss_info2">
        	<li>
            	<ul>
                	<li class="clearfix"><span class="left2" ><?php echo $rs["title"];?></span></li>
                	<li>市场价：<font color="#ff7600"><?php echo $rs["price"]?></font> &nbsp;积分价：<font color="#ff7600"><?php echo $rs["jifen"]?></font></li>
                    <li class="jianjie"><?php echo $rs["des"]?></li>
                    <li><?php echo $rs["content"];?></li>
                    <br>
                    <input type="hidden" name="product_id" value="<?php echo $rs["id"];?>">
                    <input type="hidden" name="product_name" value="<?php echo $rs["title"];?>">
                    <input type="hidden" name="product_jifen" value="<?php echo $rs["jifen"];?>">
                    <input type="submit" name="submit" value="积分兑换商品" class="btn-large" />
                </ul>
            </li>
        </ul>        
    </div>
    </form>
  <?php include 'foot.php';?>
</body>
</html>
