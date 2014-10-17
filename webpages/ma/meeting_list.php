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
<title>会议</title>
<link rel="stylesheet" type="text/css" href="css/css.css">
</head>

<body>
	<?php include 'top.php';?>
    
    <div class="meeting">
 	<div class="tit2">会议</div>
    <div id="meeting_list">
    
    	<ul id="info2">
    	<?php $sql="select * from news order by creattime desc";
    	     $sqlc="select count(id) as c from news";
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
        <a href="meeting_show.php?id=<?php echo $rs[id]?>">
    	<li>
        	<ul>
            	<li class="clearfix"><span class="left"><?php echo $rs["title"]?></span><span class="right"><?php echo $rs["creattime"]?></span></li>
                <li><?php echo $rs["des"];?></li>
            </ul>
        </li>
        </a>
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
