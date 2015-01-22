
<!DOCTYPE HTML>
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
<meta name="viewport" content="width=device-width,height=device-height,inital-scale=1.0,maximum-scale=1.0,user-scalable=no;">
<title>中国福利彩票双色球</title>
<link rel="stylesheet" type="text/css" href="css/css.css">
<?php 
require 'global.php';
require 'inc/mysql.Class.php';
require 'inc/function.inc.php';
$_GET['title']="中国福利彩票双色球";
$sql="select * from useraccounts where userid='".$_COOKIE['userid']."'";
$rs=$db->r($sql);
$cid_old=$rs['cid'];//useraccounts表中存储的当前用户的身份证号
$birthday_old = substr($cid_old, 6,8);
$cid_new_qian = substr($cid_old, 0,6);
$cid_new_hou = substr($cid_old, 14,4);
if($_POST){
	
	//useraccounts中的积分处理、userlog中的积分记录处理
	$sql="select integral,intid from useraccounts where userid='".$_COOKIE['userid']."'";
	$rs=$db->r($sql);
	$integral_old =  $rs['integral'];
	$intid = $rs['intid'];
	$integral_new = $integral_old-100;
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
			
			
			
		$sql1="update useraccounts set integral=".$integral_new ."  where userid='".$_COOKIE['userid']."'";
		$rs1=$db->q($sql1);
		$sql2="INSERT INTO userlog (userid,integral,dintegral,action,rectime)
			VALUES ('".$_COOKIE['userid']."',".
				$integral_old.",-100,'兑换彩票：".$_GET['ssq_str']."','".dtime()."')";
	
		$rs2=$db->q($sql2);
		
// 		//如果需要输入用户信息，则将用户信息存入订单表，如果有原来的用户信息为空，则更新useraccounts表
// 		if ($infomore==1) {
// 			//如果强制要求用户输入身份信息
// 			$sql_userinfo="update useraccounts set 
// 					lname='".$_POST['username'] ."',
					
// 					useremail1 = '".$_POST['email']."'  
// 					 where userid='".$_COOKIE['userid']."'";
// 			$db->q($sql_userinfo);
			
// 			$sql_member="update member set
// 					username='".$_POST['username'] ."' 
// 					 where uid='".$intid."'";
// 			$db->q($sql_member);
// 			//echo $rs_userinfo['intid'];
// 			//die();
			
// 		}
		
		//将订单数据存入订单表
		$pro_creattime=dtime();
		$sql3="insert into `prodorder`
				(`userid`, `username`, `prodcode`, `prodname`, `prodtype`, `prodspec`,  `Quan`, `recipphone1`, `recipphone2`, `rectime`, `recipemail`)
		  values('".$_COOKIE['userid']."','".$_COOKIE['username']."','caip','caip','shuangseqiu',NULL,1,'".$_POST['phone']."',NULL,'".$pro_creattime."',NULL);
		";
		$rs3 = $db->q($sql3);
			
		//修改手机号
		
		if ($_COOKIE['phone']!=$_POST['phone']) {
			//echo "bian";
			//如果输入手机号和useraccounts中的手机号不一样，则将新手机号或身份证号更新到backphone字段中
			
			$sql = "UPDATE useraccounts SET backphone = '".$_POST['phone']."'   WHERE userid = '".$_COOKIE['userid']."' ";
			$db->q($sql);
			
		}
		//身份证信息
// 		$sql="select * from useraccounts where userid='".$_COOKIE['userid']."'";
// 		$rs=$db->r($sql);
// 		$cid_old=$rs['cid'];//useraccounts表中存储的当前用户的身份证号
// 		$birthday_old = substr($cid_old, 6,8);
		echo $birthday_old;
		echo $_POST['cid'];
		//die();
		if($birthday_old!=$_POST['cid']){			
			echo $birthday_old;
			echo $_POST['cid'];
			
			//die();
			$cid_new = $cid_new_qian.$_POST['cid'].$cid_new_hou;
			$sql = "UPDATE useraccounts SET pushflag=pushflag+8 , cid='".$cid_new."' WHERE userid ='".$_COOKIE['userid']."' ";
			$db->q($sql);
		}
		
		
		
		if($rs1&&$rs2&&$rs3){
			mysql_query("COMMIT");
			$_SESSION['jifen']=$integral_new;
			
			header("location: caipiao_order.php?point=兑换成功，消耗积分100&phone=".$_POST['phone']);
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
<script type="text/javascript">

function check(){
	bq=document.getElementById("xieyi").checked;
	if(!bq){
		alert("您没有选择委托投注协议");
		return false;
		}

	bq=document.getElementById("juanzeng").checked;
	if(!bq){
		alert("您没有选择捐赠");
		return false;
		}
	bq=document.getElementById("phone").value;
	if(bq.length==0){
		alert("手机号不能为空！");
		return false;
	}

	bq=document.getElementById("phone").value;
	//alert(isjsMobile(bq));
	//return false;
	if(!isjsMobile(bq)){
		alert("请填写正确的手机号！");
		return false;
	}

	bq=document.getElementById("cid").value;
	if(bq.length!=8){
		alert("出生年月应该是8位！");
		return false;
	}

	year=bq.substr(0,4);
	month=bq.substr(4,2);
	day=bq.substr(6,2);
	if(!isdate(year,month,day)){
		alert("请输入合理的出生日期");
		return false;
	}

}

function isjsMobile(obj){
	if(obj.length!=11) return false;
	else if(obj.substring(0,2)!="13" && obj.substring(0,2)!="15" && obj.substring(0,2)!="18") return false;
	else if(isNaN(obj)) return false;
	else  return true;
}

function isdate(intYear,intMonth,intDay){   
	  
	  if(isNaN(intYear)||isNaN(intMonth)||isNaN(intDay)) return false;       
	  if(intYear>2014||intYear<1915) return false;
	  if(intMonth>12||intMonth<1) return false;    
	  
	  if ( intDay<1||intDay>31)return false;    
	  
	  if((intMonth==4||intMonth==6||intMonth==9||intMonth==11)&&(intDay>30)) return false;    
	  
	  if(intMonth==2){    
	  
	     if(intDay>29) return false;      
	  
	     if((((intYear%100==0)&&(intYear%400!=0))||(intYear%4!=0))&&(intDay>28))return false;    
	  
	    }  
	    
	  return true;    
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
<a href="meeting_list.php?title=资料下载"><font color="#ff7600"></font></a>
<?php }?>
</nav>
   
   <section class="wap_login" id='mainbody'>
	
	<hr>
	
  <form action="" method="post" >
    <input name="ssq_str"  type="hidden" value="<?php echo $_GET['ssq_str'];?>"/>     
    
    <p>
    
      <input name="ssq" id="ssq" type="text" value="用100积分兑换一张彩票"  disabled="disabled" class="input-common placeholder" placeholder="请输入手机号" />
      
    <p>
    
    <p><font color=red>接收彩票号码及兑奖短信的手机号：</font>    </p>
    <p>    
      <input value="<?php echo $_COOKIE['phone'];?>" name="phone" id="phone" type="text" class="input-common placeholder" placeholder="请输入手机号" />
    </p>
    
    <p><font color=red>凭以下身份证兑奖以防他人冒领：</font>    </p>
    <p><font color=red>为保护个人隐私，只需要输入身份证8位出生年月即可：</font>    </p>
    <p>    
      XXXXXX<input value="<?php echo $birthday_old;?>" name="cid" id="cid" type="text" style="width:100px;margin: 6px auto;height: 30px;font-size: 16px;border-radius: 3px;background: #fff;border:1px solid #C9C9C9;" placeholder="8位出生年月日"   maxlength="8" />XXXX
    </p>

    <p align="left" > 
       
      <input    value="1" name="juanzeng" id="xieyi" type="checkbox" style="width:20px;height:20px;" checked/><a href="/ma/caipiao_xieyi.php">我已经阅读并同意《 委托投注协议》</a>
   
    </p>
    <p align="left">    
      <input value="1" name="xieyi" id="juanzeng" type="checkbox" style="width:20px;height:20px;" checked/>如中万元以上大奖35%奖金捐赠给本公益平台
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
    <input type="submit" name="submit" value="提交" class="btn-large" onclick="return check();"/>
  </form>
  
  
 
</section>
 
 <?php include 'foot.php';?>
 
</body>
</html>
