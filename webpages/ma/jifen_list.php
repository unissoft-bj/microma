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
<title>积分记录</title>
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
<a href="meeting_list.php?title=资料下载"><font color="#ff7600"></font></a>
<?php }?>
</nav>
    <div class="meeting">
 	
    <div id="meeting_list">
    
    	<ul id="info2">
    	<?php $sql="select * from userlog where userid=".$_COOKIE['uid']." order by rectime desc ";
    	     $sqlc="select count(id) as c from userlog where userid=".$_COOKIE['uid'];
    	     //echo $sql;
    	     //die();
    	     $counts_r = $db->r($sqlc);
    	      $counts = $counts_r[c];
    	     $page= isset($_GET['page'])?$_GET['page']:1;
    	     $getpageinfo = page($page,$counts,"",20,5);
    	    $sql.=$getpageinfo['sqllimit'];
          $query=mysql_query($sql);
          $num=mysql_num_rows($query);
          if(empty($num)){
               echo "暂时还没有相关信息";
           }else{
               while($rs=mysql_fetch_array($query)){
          ?>
        
    	<li>
        	<ul>
            	<li class="clearfix"><span class="left"><?php echo $rs["action"]?></span><span class="right"><?php echo $rs["rectime"]?></span></li>
                <li>原积分：<font color="#ff7600"><?php echo $rs["integral"]?></font> &nbsp;积分变化：<font color="#ff7600"><?php echo $rs["dintegral"]?></font></li>
            </ul>
        </li>
        
        <?php }
        }?>
    </ul>
     <div class="clearfix page">
       <?php echo $getpageinfo['pagecode'];?>
    </div>
            </div>
    </div>
 </div>
 
 <?php include 'foot.php';?>
 
</body>
</html>
