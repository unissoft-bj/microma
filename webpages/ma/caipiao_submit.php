<?php 
require 'global.php';
require 'inc/mysql.Class.php';
require 'inc/function.inc.php';

if($_POST){
	
	//useraccounts中的积分处理、userlog中的积分记录处理
	$sql="select integral,intid from useraccounts where userid='".$_COOKIE['userid']."'";
	$rs=$db->r($sql);
	$integral_old =  $rs['integral'];
	$intid = $rs['intid'];
	$integral_new = $integral_old-1000;
	//echo $integral_new;
	//������㹻��һ�������һ�ʧ��
	if ($integral_new>=0) {
		/*�һ�
				
		1.����useraccounts �Ļ��
		2.��Ӷһ���¼��userlog��
		3.��ת����Ʒ����ҳ
		*/
		//echo "ok";
		mysql_query("BEGIN"); //或者mysql_query("START TRANSACTION");
			
			
			
		$sql1="update useraccounts set integral=".$integral_new ." where userid='".$_COOKIE['userid']."'";
		$rs1=$db->q($sql1);
		$sql2="INSERT INTO userlog (userid,integral,dintegral,action,rectime)
			VALUES ('".$_COOKIE['userid']."',".
				$integral_old.",-1000,'兑换彩票：".$_GET['ssq_str']."','".dtime()."')";
	
		$rs2=$db->q($sql2);
		
		//如果需要输入用户信息，则将用户信息存入订单表，如果有原来的用户信息为空，则更新useraccounts表
		if ($infomore==1) {
			//如果强制要求用户输入身份信息
			$sql_userinfo="update useraccounts set 
					lname='".$_POST['username'] ."',
					cid = '".$_POST['cid']."',
					useremail1 = '".$_POST['email']."'  
					 where userid='".$_COOKIE['userid']."'";
			$db->q($sql_userinfo);
			
			$sql_member="update member set
					username='".$_POST['username'] ."' 
					 where uid='".$intid."'";
			$db->q($sql_member);
			//echo $rs_userinfo['intid'];
			//die();
			
		}
		
		//将订单数据存入订单表
		$pro_creattime=dtime();
		$sql3="insert into `prodorder`
				(`userid`, `username`, `prodcode`, `prodname`, `prodtype`, `prodspec`, `proddesp`, `recipaddr`, `recipname`, `recipphone1`, `recipphone2`, `rectime`, `recipemail`)
		  values('".$_COOKIE['userid']."','".$_COOKIE['username']."','caip','caip','caip','".$_POST['ssq_str']."','123132123123',NULL,NULL,NULL,NULL,'".$pro_creattime."',NULL);
		";
		$rs3 = $db->q($sql3);
			
		//修改手机号
		if ($_COOKIE['phone']==$_POST['phone']) {
			//echo "meibian";
				
		}else{
			//echo "bian";
			//如果输入手机号和useraccounts中的手机号不一样，则将新手机号更新到backphone字段中
			$sql = "UPDATE useraccounts SET backphone = '".$_POST['phone']."' WHERE userid = '".$_COOKIE['userid']."' ";
			$db->q($sql);
		}
		
		
		if($rs1&&$rs2&&$rs3){
			mysql_query("COMMIT");
			$_SESSION['jifen']=$integral_new;
			header("location: caipiao.php?point=兑换成功，消耗积分1000");
			die();
			echo '提交成功。';
		}else{
			mysql_query("ROLLBACK");
			header("location: caipiao.php?point=兑换失败，数据异常");
			die();
			echo '数据回滚。';
		}
			
	
	}else {
		//��ת����Ʒ����ҳ
		header("location: caipiao.php?point=积分不足，兑换失败");
		die();
		//msg("兑积分不足 兑换失败",$lailu."?&point=积分不足 兑换失败",1);
	}
	
	
	
	die();
	
}
?>
<!DOCTYPE HTML>
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
<meta name="viewport" content="width=device-width,height=device-height,inital-scale=1.0,maximum-scale=1.0,user-scalable=no;">
<title>彩票兑换-订单确认</title>
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
   
   <section class="wap_login">
	
	<hr>
	
  <form action="" method="post" >
    <input name="ssq_str"  type="hidden" value="<?php echo $_GET['ssq_str'];?>"/>     
    
    <p>
    
      <input name="ssq" id="ssq" type="text" value="您选的彩票号码是：<?php echo $_GET['ssq_str'];?>"  disabled="disabled" class="input-common placeholder" placeholder="请输入手机号" onblur="return getInfoByRegPhone(this.value);"/>
      
    <p>
    
    <p>发送彩票标识码短信到：    </p>
    <p>    
      <input value="<?php echo $_COOKIE['phone'];?>" name="phone" id="phone" type="text" class="input-common placeholder" placeholder="请输入手机号" onblur="return getInfoByRegPhone(this.value);"/>
    </p>
    
    <?php 
    	//检索userinfochk表，判断是否需要输入用户名等信息
   //$sql="select integral from useraccounts where userid='".$_COOKIE['userid']."'";
    $sql = "select * from userinfochk where obj='".$_COOKIE['userid']."' and useraction='integral2lottery' and stat='100'";
    
    
    $rs=$db->r($sql);
//     echo $rs['info'];
//     echo $rs['op'];
//     echo $rs['action'];
    //die();
    if ($rs['info']=="caipiao" && $rs['op']=="100" & $rs['action']==100) {
    	$sql2 = "select * from useraccounts where userid='".$_COOKIE['userid']."'";
    	//echo $sql2;
    	$rs2 = $db->r($sql2);
    	//die();
    ?>
    <p>姓名：    </p>
    <p>
      <input name="infomore" id="username" type="hidden"class="input-common placeholder" placeholder="用户名" value="1"/>
      <input name="username" id="username" type="text"class="input-common placeholder" placeholder="用户名" value="<?php echo $rs2['lname']?>" />
    </p>
    <p>邮箱：    </p>
    <p>
      <input name="email" id="email" type="text"class="input-common placeholder" placeholder="email" value="<?php echo $rs2['useremail1']?>"/>
    </p>
    <p>证件号码：    </p>
    <p>
      <input name="cid" id="cid" type="text"class="input-common placeholder" placeholder="身份证号"  value="<?php echo $rs2['cid']?>"/>
    </p>
    
    <?php 
    
    }else{
    	
    }
    ?>
    <input type="submit" name="submit" value="提交" class="btn-large" />
  </form>
  
  
 
</section>
 
 <?php include 'foot.php';?>
 
</body>
</html>
