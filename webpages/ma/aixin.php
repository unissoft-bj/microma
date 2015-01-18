<?php 
require 'global.php';
require 'inc/mysql.Class.php';
require 'inc/function.inc.php';
$_GET['title']="爱心捐助";
?>
<!DOCTYPE HTML>
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
<meta name="viewport" content="width=device-width,height=device-height,inital-scale=1.0,maximum-scale=1.0,user-scalable=no;">
<title>爱心捐助</title>
<link rel="stylesheet" type="text/css" href="css/css.css">

<script type="text/javascript">
function addNum(){
	jifen=document.getElementById("jifen").value;
	document.getElementById("jifen").value = parseInt(jifen)+100;
	document.getElementById("jifen2").value = document.getElementById("jifen").value;
	
}
function deNum(){
	jifen=document.getElementById("jifen").value;
	
	document.getElementById("jifen").value =parseInt(jifen)-100;

	if(parseInt(document.getElementById("jifen").value)<=0){
		document.getElementById("jifen").value=100;
		}
	document.getElementById("jifen2").value = document.getElementById("jifen").value;
}
</script>
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
<a href="#"><font color="#ff7600"> </font></a>
<?php }?>
</nav>
	<form action="aixin_buy.php" method="post">
   
    <div id="discuss_list">
    	<ul id="discuss_info2">
        	<li>
            	<ul>
                	<li class="clearfix"><span class="left2" >爱心捐助</span></li>
                	
                    <li><p>
<span style="font-family:Verdana, Arial, Helvetica, sans-serif;line-height:20.15999984741211px;background-color:#FDFDFD;">
	<style type="text/css">
	img {
display: inline;
}
	</style>
	<img class="pimg" src="/ma/images/aixin1.png" width="60%" height="" alt="">
	<img class="pimg" src="/ma/images/aixin2.jpg" width="35%" height="" alt="">
	<br>
</span> 
</p>
<p>
	<span style="font-family:Verdana, Arial, Helvetica, sans-serif;line-height:20.15999984741211px;background-color:#FDFDFD;">
&nbsp;&nbsp;&nbsp;&nbsp;中国汽车技术研究中心
提供本期捐助的资金支持
<br>
&nbsp;&nbsp;&nbsp;&nbsp;每收到您捐助的100积分，
中汽中心将代表您向希望工程捐款￥2元
<br>
&nbsp;&nbsp;&nbsp;&nbsp;捐款结果将发送至您的注册手机号：<?php echo $_COOKIE['phone']?>
	</span> 
</p></li>
                    <br>
                    
                    <input type="hidden" name="product_name" value="爱心捐助">
                    <input type="text" id="jifen" class="input-common placeholder" name="jifen" value="100" disabled="disabled">
                    <input type="hidden" id="jifen2" class="input-common placeholder" name="product_jifen" value="100" >
                    <div align='center'>
                    <input type="button" name="addbutton" id="add" value="+" class="btn-middle" onclick="addNum()"/>
                    <input type="button" name="debutton" id="de" value="-" class="btn-middle" onclick="deNum()"/>
                    </div>
                    <input type="submit" name="submit" value="送出爱心" class="btn-large" />
                </ul>
            </li>
        </ul>        
    </div>
    </form>
  <?php include 'foot.php';?>
</body>
</html>
