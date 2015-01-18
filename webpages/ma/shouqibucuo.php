<?php 
require 'global.php';
require 'inc/mysql.Class.php';
require 'inc/function.inc.php';

if($_POST){
	
	$invite_code = $_POST['invite_code'];
	
	$sql="select * from shouqibucuo where invite_code='".$invite_code."' and TO_DAYS(rectime) = TO_DAYS(NOW())";
	
	$rs=$db->r($sql);
	
	//echo dump($rs['id']);die();
	if($rs){
		mysql_query("BEGIN");
		$id=$rs['id'];
		$sql1="update shouqibucuo set client_mac='".$_COOKIE['mymac']."' ,client_userid='".$_COOKIE['userid']."',is_success=1 where id=".$id;
		$rs1=$db->q($sql1);
		
		//将积分写入userlog
		if($_COOKIE['userid']!="" && $_COOKIE['userid']!=null){		
			$sql2="update useraccounts set integral=integral+200  where userid='".$_COOKIE['userid']."'";
			$rs2=$db->q($sql2);
		}elseif($_COOKIE['mac']!="" && $_COOKIE['mac']!=null){
			//将积分写入userpoints
			$sql_points="select * from userpoints where mac='".$_COOKIE['mymac']."'";
			$rs_points = $db->r($sql_points);
			if ($rs_points) {
				//update
				$sql3="update userpoints set points=points+200  where mac='".$_COOKIE['mymac']."'";
				$rs3=$db->q($sql3);
			}else{
				//insert
				$sql3="INSERT INTO userpoints (mac,points,action,rectime)
			VALUES ('".$_COOKIE['mymac']."',200,'shouqibucuo',now())";
				
				$rs3=$db->q($sql3);
// 				echo $sql3;
// 				echo $rs3;exit();
			}
			
			
		}else{
			header("location: shouqibucuo.php?point=没有得到您的mac地址，请联系销售员进行操作");
		}
		
		if($rs2||$rs3){
			mysql_query("COMMIT");
			header("location: shouqibucuo_ok.php?point=恭喜您获得200积分");
			die("ok");
		}else{
			mysql_query("ROLLBACK");
			header("location: shouqibucuo.php?point=数据异常");
			die("ok");
		}
		
		
	}else{
		header("location: shouqibucuo.php?point=邀请码错误，请重新输入");
		die("ok");
	}
	
	
	
	
}


?>
<!DOCTYPE HTML>
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
<meta name="viewport" content="width=device-width,height=device-height,inital-scale=1.0,maximum-scale=1.0,user-scalable=no;">
<title>手气不错</title>
<link rel="stylesheet" type="text/css" href="css/css.css">
<?php 
$_GET['title']="手气不错";

?>
</head>

<body>
	<?php include 'top_no_login.php';?>
       <nav class="footer_nav">

<a href="javascript:window.scrollTo(0,0);">TOP</a><a href="/wap">首页</a> &nbsp;-
<?php if (isset($_COOKIE['uid'])) {
	;
?>
&nbsp;


欢迎,<strong><?php echo iconv('GB2312', 'UTF-8', $_COOKIE['username']);?></strong> 
<a href="meeting_list.php?title=资料下载"><font color="#ff7600"></font></a>
<?php }?>
</nav>
   
<section class="wap_login" id='mainbody' >

  <form action="" method="post" >
    <input name="mac"  type="hidden" value="<?php echo $_COOKIE['mac'];?>"/>     
    
    
    <br><br><br>
    <p style="font-size: 20px;">今天共有20张彩票派发<br>请输入销售员提供的邀请码<br>验证通过后您将得到200个积分用于兑换奖品    </p>
    <p>    
      <input  name="invite_code" id="invite_code" type="text" class="input-common placeholder" placeholder="请输入邀请码" />
    </p>
    
    
    <input type="submit" name="submit" value="提交" class="btn-large" onclick="return check();"/>
  </form>
</section>
 
 <?php include 'foot.php';?>
 
</body>
</html>
