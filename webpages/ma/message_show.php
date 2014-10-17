<?php 
require 'global.php';
require 'inc/mysql.Class.php';
require 'inc/function.inc.php';
if(empty($_GET["id"])){
	echo "非法进入";
	exit;
}
$uid=$_COOKIE["uid"];
$id=$_GET["id"];
$text=mysql_query("select touserid,flag from ma_message where id=$id");
$row=mysql_fetch_array($text);
if($row["touserid"]==$uid&&$row["flag"]==0){//收件
         $updata="update ma_message set flag=1 where id=$id";
         mysql_query($updata);
}?>
<!DOCTYPE HTML>
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
<meta name="viewport" content="width=device-width,height=device-height,inital-scale=1.0,maximum-scale=1.0,user-scalable=no;">
<title>便笺列表内容</title>
<link rel="stylesheet" type="text/css" href="css/css.css">
</head>

<body>
	<?php include 'top.php';?>
    <?php $sql="select content from ma_message where id=$id";
          $query=mysql_query($sql);
          $rs=mysql_fetch_array($query);?> 
    <div class="note_content">
        <div id="note_info">
        	<div>
                    <div class="clearfix">
                        <ul class="note_liebiao2">
                            <li class="con"><span><?php echo $rs["content"];?></span></li>
                        </ul>
                    </div>
                    
            </div>
            
            
        </div>
    </div>
    
    <?php include 'foot.php';?>
</body>
</html>
