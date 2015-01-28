
<!DOCTYPE HTML>
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
<meta name="viewport" content="width=device-width,height=device-height,inital-scale=1.0,maximum-scale=1.0,user-scalable=no;">
<title>添加员工</title>
<link rel="stylesheet" type="text/css" href="css/css.css">
<?php 
require 'global.php';
require 'inc/mysql.Class.php';
require 'inc/function.inc.php';
$_GET['title']="添加员工";


if($_POST){
	
	//useraccounts中的积分处理、userlog中的积分记录处理
	$phone = $_POST['phone'];
	$captcha = $_POST['captcha'];
	$sql="select * from useraccounts where phone='".$phone."'";
	$rs=$db->r($sql);
	if ($rs) {
		$sql = "update useraccounts set userrole='100' where phone='".$phone."'";
		$rs=$db->q($sql);
	}else{
		$chars = md5(uniqid(mt_rand(), true));
		$uuid  = substr($chars,0,8) . '-';
		$uuid .= substr($chars,8,4) . '-';
		$uuid .= substr($chars,12,4) . '-';
		$uuid .= substr($chars,16,4) . '-';
		$uuid .= substr($chars,20,12);
		
		$sql="insert into `useraccounts`
				(`userid`, `lname`, `regphone`, `phone`, `userrole`, `captcha`, `rectime`)
		  values('".$uuid."','".$phone."','$phone','$phone','100','".$captcha."',now());
		";
		$rs=$db->q($sql);
		
	}
	
	$point = urlencode('添加员工信息成功，请让该员工激活  邀请码为');
	header("location: addUser.php?point=".$point.$captcha);
	die();
	
	
}
?>
<script type="text/javascript">

function check(){

	bq=document.getElementById("captcha").value;
	if(bq.length!=6){
		alert("邀请码位数不对！");
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

	

}

function isjsMobile(obj){
	if(obj.length!=11) return false;
	else if(obj.substring(0,2)!="13" && obj.substring(0,2)!="15" && obj.substring(0,2)!="18") return false;
	else if(isNaN(obj)) return false;
	else  return true;
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
         
    <br><br>
    <p>请添加内部员工，该员工有权限发放“手气不错”的邀请码，请谨慎操作</p>
    <br>
    <p>输入员工手机号：</p>
    <p>    
      <input name="phone" id="phone" type="text" class="input-common placeholder" placeholder="输入员工手机号" />
    </p>
    
    <p>输入6位邀请码：</p>
    <p>    
      <input name="captcha" id="captcha" type="text" class="input-common placeholder" placeholder="输入输入6位邀请码" />
    </p>
    
    
    
    
    <input type="submit" name="submit" value="提交" class="btn-large" onclick="return check();"/>
  </form>
  
  
 
</section>
 
 <?php include 'foot.php';?>
 
</body>
</html>
