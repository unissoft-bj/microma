<?php 
require 'global.php';
require 'inc/mysql.Class.php';
require 'inc/function.inc.php';

if($_POST){
	
	$invite_code = str_replace("\\n","",$_POST['invite_code']);
	$invite_code = str_replace("%20","",$invite_code);
	$invite_code = str_replace(" ","",$invite_code);
	
	$sql="update shouqibucuo set client_code=".$_POST['client_code'] .",invite_code=''  where invite_code='".$invite_code."' and salesperson_userid='".$_COOKIE['userid']."'";
	//echo $sql;die();
	$rs=$db->q($sql);
	//echo($rs);
	if($rs==1){
		header("location: invite.php?point=提交成功");
		die("ok");
	}
}


?>
<!DOCTYPE HTML>
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
<meta name="viewport" content="width=device-width,height=device-height,inital-scale=1.0,maximum-scale=1.0,user-scalable=no;">
<title>客户邀请</title>
<link rel="stylesheet" type="text/css" href="css/css.css">
<?php 
$_GET['title']="客户邀请";

?>

<script>
/**
 * 获取邀请码
 */
function getInviteCode()
{
//alert("===");
var xmlhttp;

if (window.XMLHttpRequest)
  {// code for IE7+, Firefox, Chrome, Opera, Safari
  xmlhttp=new XMLHttpRequest();
  }
else
  {// code for IE6, IE5
  xmlhttp=new ActiveXObject("Microsoft.XMLHTTP");
  }
	xmlhttp.onreadystatechange=function()
  {
  if (xmlhttp.readyState==4 && xmlhttp.status==200)
    {
	var testStr = xmlhttp.responseText;
	  resultStr=testStr.replace(/\s/g,'');//去掉空格
	  resultStr=testStr.replace(/\ +/g,"");//去掉空格
	  resultStr=testStr.replace(/[ ]/g,"");    //去掉空格
	  resultStr=testStr.replace(/\r\n]/g,"");//去掉回车换行
    document.getElementById("invite_area").innerHTML=resultStr;
    document.getElementById("invite_code").value = resultStr;
    //document.getElementById("regmsg").value=xmlhttp.responseText;
    
    }
  }

xmlhttp.open("GET","/wap/ajax.php?getInviteCode=1&type="+<?php echo $_GET['type']?>,true);
xmlhttp.send();
}

 
 /**
  * 刷新邀请状态
  */
 function getInviteState()
 {
 //alert("===");
 var xmlhttp;
 var invite_code = document.getElementById("invite_code").value;
 if (window.XMLHttpRequest)
   {// code for IE7+, Firefox, Chrome, Opera, Safari
   xmlhttp=new XMLHttpRequest();
   }
 else
   {// code for IE6, IE5
   xmlhttp=new ActiveXObject("Microsoft.XMLHTTP");
   }
 	xmlhttp.onreadystatechange=function()
   {
   if (xmlhttp.readyState==4 && xmlhttp.status==200)
     {
	  // document.getElementById("invite_state").innerHTML=xmlhttp.responseText;
	  
		var Cts = xmlhttp.responseText;
		 
		if(Cts.indexOf("ok") > 0 )
		{
			document.getElementById("invite_state").innerHTML="邀请成功";
		     document.getElementById("invite_state").color="green";
		     document.getElementById("client_info").style.display="block";
		}
	 
     }
   }

 xmlhttp.open("GET","/wap/ajax.php?getInviteState=1&invite_code="+invite_code,true);
 xmlhttp.send();
 }

 function ignoreSpaces(string) {
	 var temp = "";
	 string = '' + string;
	 splitstring = string.split(" ");
	 for(i = 0; i < splitstring.length; i++)
	 temp += splitstring[i];
	 return temp;
	 }
</script>
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
    <p style="font-size: 20px;">请点击下面按钮生成邀请码 </p>
    <p>    
      <input value="生成邀请码" name="create_code" id="create_code" type="button" class="btn-large" onclick="getInviteCode();"/>
    </p>
    
     <p style="font-size: 20px;" >邀请码：<font color="red" id="invite_area"></font>
       	<input name="invite_code" id="invite_code" type="text" class="input-common placeholder" placeholder="验证码" />
    </p>
    <p style="font-size: 20px;" >   
       	邀请状态：<font color="red" id="invite_state">等待中……</font>
    </p>
    <br>
    <p>    
      <input value="刷新邀请状态" name="shuaxin" id="shuaxin" type="button" class="btn-large" onclick="getInviteState();"/>
    </p>
    <div id="client_info" style="display: none;font-size: 20px;" align=center>
    <p style="font-size: 20px;">选择客户类型： </p>
    	<input type="radio" name="client_code" value=100 checked>普通
    	<input type="radio" name="client_code" value=200>意向
    	<input type="radio" name="client_code" value=300>成交
    
    <input type="submit" name="submit" value="提交" class="btn-large" onclick="return check();"/>
    </div>
    
  </form>
</section>
 
 <?php include 'foot.php';?>
 
</body>
</html>
