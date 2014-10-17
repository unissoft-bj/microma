
<?php
require_once 'global.php';
require_once 'inc/function.inc.php';
require_once 'inc/mysql.Class.php';
//$page=empty($page)?1:$page;
 
$sql="select a.lname,b.creattime,b.content from useraccounts a,ma_guestbook b where a.intid=b.uid $sqladd order by b.creattime desc";
$sqlc="select count(uid) as c from ma_guestbook where 1=1 $sqladd ";

?>
<!DOCTYPE HTML>
<html>
<head>
<script type="text/javascript">
function checkform(){
  //验证用户名
  if($("txa").value == ""){
    alert("内容不可以为空");
    $("txa").select();
    $("txa").focus();
    return false;
  }
 
  return true;
}

function $(id){
  return document.getElementById(id);
} 
</script>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
<meta name="viewport" content="width=device-width,height=device-height,inital-scale=1.0,maximum-scale=1.0,user-scalable=no;">
<title>热议</title>
<link rel="stylesheet" type="text/css" href="css/css.css">
</head>

<body>
 <?php 
   $counts_r = $db->r($sqlc);
					$counts = $counts_r[c];
					$page= isset($_GET['page'])?$_GET['page']:1;//默认页码
					
					$getpageinfo = page($page,$counts,"?title=$title&botton=筛选",10,5);
					$sql.=$getpageinfo['sqllimit'];					 
					$rsdb=$db->a($sql);
				 	$i=2;
					foreach($rsdb as $key=>$rs){
					 $i=$i+1;
					 }	
   ?> 
	<?php include 'top.php';?>
    
    <div class="discuss">
 	<div class="tit">在线热议话题</div>
    <div id="discuss_list">
    	<ul id="discuss_info2">
        	<?php
        	$rs=mysql_query($sql);
        	while($row=mysql_fetch_array($rs)){
				echo "<li><ul>
				<li class='clearfix'><span class='left'>$row[0]说：</span><span class='right'>$row[1]</span></li><li>$row[2]</li></ul></li>";
}				 
        	?>  
        	  	
        </ul>
        
    </div>
    <div class="clearfix page">
     
  <?php echo $getpageinfo['pagecode'];?>
    </div>
 </div>

 <div class="con3">
    <div class="table wenzi3">
     <form method="post" onsubmit="return checkform()" action="discuss1.php" >
    		<span class="tit3">请输入要发送的内容：</span>
                <div class="xy3">
                    <textarea name="txa" id="txa"></textarea>
                </div>
                <div class="btn">
                    <input class="tp"  type="submit" value="提交"/>
                </div>
              </form>  
            </div>
        </div>
  
 <?php include 'foot.php';?>
    
</body>
</html>
