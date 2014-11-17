<?php 
require 'global.php';
require 'inc/mysql.Class.php';
require 'inc/function.inc.php';
?>
<!DOCTYPE HTML>
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
<meta name="viewport" content="width=device-width,height=device-height,inital-scale=1.0,maximum-scale=1.0,user-scalable=no;">
<title>便笺</title>
<link rel="stylesheet" type="text/css" href="css/css.css">
<script type="text/javascript" src="js/jquery-1.7.1.min.js"></script>
<script type="text/javascript">
$(function(){
	$("#note_menu>li:first").addClass("se");
	$("#note_info>div:not(:first)").hide();
	$("#note_menu>li").click(function(){
		$("#note_info").children(":eq("+$(this).index()+")").show().siblings().hide();
		$(this).addClass().addClass("se").siblings().removeClass("se")
	});
})
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
<a href="message_liebiao.php?title=线上消息"><font color="#ff7600">返回消息列表</font></a>
<?php }?>
</nav>
<div class="note_content">
<ul id="note_menu">
<li class="left">代表</li>
<li class="right">嘉宾</li>
</ul>

<div id="note_info">
<div>
<?php $sql="select fname,lname,phone,title,intid from useraccounts where usertype=1";
$sqlc="select count(intid) as c from useraccounts where usertype=1";
$counts_r = $db->r($sqlc);
$counts = $counts_r[c];
$page= isset($_GET['page'])?$_GET['page']:1;
$getpageinfo = page($page,$counts,"",20,5);
$sql.=$getpageinfo['sqllimit'];
$query=mysql_query($sql);
$num=mysql_num_rows($query);
if(empty($num)){
	echo "暂无此类用户在线";
}else{
	while($rs=mysql_fetch_array($query)){
		?>
                <a href="message_fasong.php?uid=<?php echo $rs[intid];?>&title=To:<?php echo $rs['lname'];?>" title="">
                    <div class="clearfix">
                        <ul class="note_liebiao">
                            <li class="clearfix name"><span class="left">姓名</span><?php echo $rs["lname"];echo $rs["fname"];?></li>
                            <li>电话：<span><?php echo $rs["phone"];?></span></li>
                            <li>职位：<b><?php echo $rs["title"];?></b></span></li>
                        </ul>
                        <div class="jt">发送便签</div>
                    </div>
                    
                </a>
                <?php }
                }?>
                <div class="clearfix page">
       <?php echo $getpageinfo['pagecode'];?>
    </div>
            </div>
            
            <div>
<?php $sql="select fname,lname,phone,title,intid from useraccounts where usertype<>1";
$sqlc="select count(intid) as c from useraccounts where usertype<>1";
$counts_r = $db->r($sqlc);
$counts = $counts_r[c];
$page= isset($_GET['page'])?$_GET['page']:1;
$getpageinfo = page($page,$counts,"",20,5);
$sql.=$getpageinfo['sqllimit'];
$query=mysql_query($sql);
$num=mysql_num_rows($query);
if(empty($num)){
	echo "暂无此类用户在线";
}else{
	while($rs=mysql_fetch_array($query)){
		?>
                <a href="message_fasong.php?uid=<?php echo $rs[intid];?>" title="">
                    <div class="clearfix">
                        <ul class="note_liebiao">
                            <li class="clearfix name"><span class="left">姓名</span><?php echo $rs["lname"];echo $rs["fname"];?></li>
                            <li>电话：<span><?php echo $rs["phone"];?></span></li>
                            <li>职位：<b><?php echo $rs["title"];?></b></span></li>
                        </ul>
                        <div class="jt">发送</div>
                    </div>
                    
                </a>
                <?php }
                }?>
            <div class="clearfix page">
       <?php echo $getpageinfo['pagecode'];?>
    </div>
            </div>
            
        </div>
    </div>
    
    <!-- <div class="clearfix page">
       <?php // echo $getpageinfo['pagecode'];?>
    </div> -->
    <?php include 'foot.php';?>
</body>
</html>
