<?php 
require 'global.php';
require 'inc/mysql.Class.php';
require 'inc/function.inc.php';

if(isset($_GET['mac'])){
	setcookie("mymac",$_GET['mac'],time() + 3600, "/");
}
if($_POST){
	
	$invite_code = $_POST['invite_code'];
	$jifen_tmp = $_POST['jifen'];
	
	//如果今天已经参与过该活动，则提示退出
	$sql ="SELECT * FROM shouqibucuo WHERE client_mac='".$_COOKIE['mymac']."' AND is_success=1 AND TO_DAYS(rectime) = TO_DAYS(NOW())";
	$rs=$db->r($sql);
	if ($rs) {
		$point = urlencode('您今天已经参与过该活动 别太贪心哦');
		header("location: shouqibucuo.php?point=$point");
		die("ok");
	}

	
	$sql="select * from shouqibucuo where invite_code='".$invite_code."' and TO_DAYS(rectime) = TO_DAYS(NOW()) and client_mac IS NULL";	
	$rs=$db->r($sql);
	
	//echo dump($rs['id']);die();
	if($rs){
		
		if($rs['type']==1){
			$jifen = (int)($jifen_tmp*0.15);
		}elseif ($rs['type']==2){
			$jifen = (int)($jifen_tmp*2);
		}else{
			$jifen =0;
		}
		mysql_query("BEGIN");
		$id=$rs['id'];
		$sql1="update shouqibucuo set client_integral=$jifen, client_mac='".$_COOKIE['mymac']."' ,client_userid='".$_COOKIE['userid']."',is_success=1 where id=".$id;
		$rs1=$db->q($sql1);
		
		//将积分写入userlog
		if($_COOKIE['userid']!="" && $_COOKIE['userid']!=null){		
			$sql2="update useraccounts set integral=integral+".$jifen."  where userid='".$_COOKIE['userid']."'";
			$rs2=$db->q($sql2);
		}elseif($_COOKIE['mymac']!="" && $_COOKIE['mymac']!=null){
			//将积分写入userpoints
			$sql_points="select * from userpoints where mac='".$_COOKIE['mymac']."'";
			$rs_points = $db->r($sql_points);
			if ($rs_points) {
				//update
				$sql3="update userpoints set points=points+".$jifen."  where mac='".$_COOKIE['mymac']."'";
				$rs3=$db->q($sql3);
			}else{
				//insert
				$sql3="INSERT INTO userpoints (mac,points,action,rectime)
			VALUES ('".$_COOKIE['mymac']."',".$jifen.",'shouqibucuo',now())";
				
				$rs3=$db->q($sql3);
// 				echo $sql3;
// 				echo $rs3;exit();
			}
			
			
		}else{
			$point = urlencode('没有得到您的mac地址，请联系销售员进行操作');
			header("location: shouqibucuo.php?point=$point");
			die();
		}
		
		if($rs2||$rs3){
			mysql_query("COMMIT");
			if($_COOKIE['userid']){
				$point = urlencode('恭喜您获得'.$jifen.'积分');
				header("location: shouqibucuo_ok.php?point=$point");
				die();
			}
			else{
				$point = urlencode('恭喜您获得'.$jifen.'积分券');
				header("location: shouqibucuo_ok.php?point=$point");
				die("ok");
			}
		}else{
			mysql_query("ROLLBACK");
			$point = urlencode('数据异常');
			header("location: shouqibucuo.php?point=$point");
			die("ok");
		}
		
		
	}else{
		$point = urlencode('邀请码错误，请重新输入');
		header("location: shouqibucuo.php?point=$point");
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
    

<script type="text/javascript" src="/ma/zhuan/js/jquery-1.8.0.min.js"></script>
<script type="text/javascript" src="/ma/zhuan/js/jQueryRotate.2.2.js"></script>
<script type="text/javascript" src="/ma/zhuan/js/script.js"></script>

<style type="text/css">
body{background:url(/ma/zhuan/images/bg.png) 0 0 repeat;}

.rotate-con-pan{background:url(/ma/zhuan/images/disk.jpg) no-repeat 0 0;background-size:100% 100%;position:relative;width:320px;height:320px;box-sizing:border-box;-moz-box-sizing:border-box;-webkit-box-sizing:border-box;margin:0 auto}
.rotate-con-zhen{width:75px;height:150px;background:url(/ma/zhuan/images/start.png) no-repeat 0 0;background-size:100% 100%;cursor:pointer;position:absolute;left:120px;top:90px;}
</style>

</head>

<body>


	<div class="rotate-con-pan">
		<div class="rotate-con-zhen"></div>
	</div>


<script type="text/javascript">
$(function(){
	$(".rotate-con-zhen").rotate({
		bind:{
			click:function(){
				var a = runzp();
				 $(this).rotate({
					 	duration:3000,               //转动时间
					 	angle: 0,                    //起始角度
            			animateTo:1440+a.angle,      //结束的角度
						easing: $.easing.easeOutSine,//动画效果，需加载jquery.easing.min.js
						callback: function(){
							alert(a.prize+a.message);//简单的弹出获奖信息
						}
				 });
			}
		}
	});
});
</script>

    
    
    
    <p>
      <input  name="jifen" id="jifen" type="hidden"   />    
      <input  name="invite_code" id="invite_code" type="text" class="input-common placeholder" placeholder="请向销售人员索取邀请码" />
    </p>
    
    
    <input type="submit" name="submit" value="提交" class="btn-large" onClick="return check();"/>
  </form>
</section>
 
 <?php include 'foot.php';?>
 
</body>
</html>
