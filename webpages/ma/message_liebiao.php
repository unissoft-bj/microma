<?php 
require 'global.php';
require 'inc/mysql.Class.php';
require 'inc/function.inc.php';
$uid=$_COOKIE["uid"];
?>
<!DOCTYPE HTML>
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
<meta name="viewport" content="width=device-width,height=device-height,inital-scale=1.0,maximum-scale=1.0,user-scalable=no;">
<title>便笺列表</title>
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
    <div class="send_note">
    	<a href="message_linkman.php">发便笺</a>
    </div>
    <div class="note_content">
    	<ul id="note_menu">
        	<li class="left">已收到</li>
            <li class="right">已发出</li>
        </ul>
        
        <div id="note_info">
        	<div>
        	<?php $sql="select id,fromuserid,seedtime from ma_message where touserid=$uid order by seedtime desc";
        	      $sqlc="select count(id) as c from ma_message where touserid=$uid";
                  $counts_r = $db->r($sqlc);
                  $counts = $counts_r[c];
                  $page= isset($_GET['page'])?$_GET['page']:1;
                  $getpageinfo = page($page,$counts,"",20,5);
                  $sql.=$getpageinfo['sqllimit'];
        	      $query=mysql_query($sql);
        	      $num=mysql_num_rows($query);
        	      
        	      if(empty($num)){
                     echo "您还没有收到过便签";
                  }else{
        	          while($rs=mysql_fetch_array($query)){?>
                <a href="message_show.php?id=<?php echo $rs[id]?>" title="">
                    <div class="clearfix">
                        <ul class="note_liebiao">
                        <?php $sqlo="select fname,lname,phone,title from useraccounts where intid=$rs[fromuserid]";
                              $queryo=mysql_query($sqlo);
                              $row=mysql_fetch_array($queryo);?>
                            <li class="clearfix name">收件人：<span><?php echo $row["lname"];echo $row["fname"];?></span></li>
                            <li>电话：<span><?php echo $row["phone"];?></span></li>
                            <li>职位：<b><?php echo $row["title"];?></b></span></li>
                        </ul>
                        <div class="jt2"><?php echo $rs["seedtime"];?></div>
                    </div>
                    
                </a>
                <?php }
                }?>
                    <div class="clearfix page">
       <?php echo $getpageinfo['pagecode'];?>
    </div>
            </div>
            
            <div>
        	<?php $sql="select id,touserid,seedtime from ma_message where fromuserid=$uid order by seedtime desc";
        	      $sqlc="select count(id) as c from ma_message where fromuserid=$uid";
        	      $counts_r = $db->r($sqlc);
        	      $counts = $counts_r[c];
        	      $page= isset($_GET['page'])?$_GET['page']:1;
        	      $getpageinfo = page($page,$counts,"",20,5);
        	      $sql.=$getpageinfo['sqllimit'];
        	      $query=mysql_query($sql);
        	      $num=mysql_num_rows($query);
        	      if(empty($num)){
                     echo "您还没有发出过便签";
                  }else{
        	          while($rs=mysql_fetch_array($query)){?>
                <a href="message_show.php?id=<?php echo $rs[id]?>" title="">
                    <div class="clearfix">
                        <ul class="note_liebiao">
                        <?php $sqlo="select fname,lname,phone,title from useraccounts where intid=$rs[touserid]";
                              $queryo=mysql_query($sqlo);
                              $row=mysql_fetch_array($queryo);?>
                            <li class="clearfix name">收件人：<span><?php echo $row["lname"];echo $row["fname"];?></span></li>
                            <li>电话：<span><?php echo $row["phone"];?></span></li>
                            <li>职位：<b><?php echo $row["title"];?></b></span></li>
                        </ul>
                        <div class="jt2"><?php echo $rs["seedtime"];?></div>
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
    
    <?php include 'foot.php';?>
</body>
</html>
