<?php /* Smarty version 2.6.26, created on 2014-11-13 21:23:41
         compiled from wap/register.htm */ ?>
<?php require_once(SMARTY_CORE_DIR . 'core.load_plugins.php');
smarty_core_load_plugins(array('plugins' => array(array('function', 'wapurl', 'wap/register.htm', 18, false),)), $this); ?>
<?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => ($this->_tpl_vars['wapstyle'])."/header_cont.htm", 'smarty_include_vars' => array()));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>


<link rel="stylesheet" type="text/css" href="../ma/css/css.css">
<script type="text/javascript" src="../ma/js/jquery-1.7.1.min.js"></script>
	
    <!-- 
    <ul id="note_menu">
        <li class="left"><a href="/wap/index.php?m=register&usertype=2">预注册代表</a></li>
        <li class="right"><a href="/wap/index.php?m=register&usertype=1">现场注册代表</a></li>
    </ul>
	 -->
<nav class="footer_nav">
<a href="javascript:window.scrollTo(0,0);">TOP</a>
<a href="/wap">首页</a> &nbsp;-<?php if (! $this->_tpl_vars['cookie']['uid']): ?>
&nbsp;
<!--
<a href="<?php echo smarty_function_wapurl(array('m' => 'login'), $this);?>
">个人登录</a>&nbsp;&nbsp;-
<a href="<?php echo smarty_function_wapurl(array('m' => 'login','url' => "usertype:2"), $this);?>
">企业登录</a>&nbsp;&nbsp;<br/>
  -->
<?php else: ?>
欢迎,<a href="member"><strong><?php echo $this->_tpl_vars['cookie']['username']; ?>
</strong> </a>
<?php endif; ?>
</nav>
<br>
<h1> &nbsp;快速通道：</h1>
<hr>
<iframe  width="100%" frameborder="0" src="/wap/user.php"  height=60/></iframe>
	
<script src="<?php echo $this->_tpl_vars['config']['sy_weburl']; ?>
/js/jquery-1.8.0.min.js"></script>
<script>
//getInfoByRegPhone
//根据预注册手机 判断是否已注册用户
function getInfoByRegPhone(str)
{
var xmlhttp;
if (str=="")
  {
  //document.getElementById("txtHint").innerHTML="";
  return;
  }
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
	//得到返回的多个username ，以|进行分割
    var names=xmlhttp.responseText;
	//如果得到字符串为0 则代表号错误
	
	if(names==0){
		//alert("===");
		document.getElementById("regInfo").innerHTML="代表号错误，<br>预注册用户重新输入预注册手机号，<br>否则请在下方输入手机号";
		document.getElementById("yuzhuce1").style.display="none";
		document.getElementById("usertype").value=1;
	}else{
		
		document.getElementById("usertype").value=2;
		document.getElementById("yuzhuce2").style.display="none";
		var array = names.split("|");
	   
	    document.getElementById("username").value=array[0];
	    document.getElementById("phone").value=array[1];
	    document.getElementById("danwei").value=array[2];
	    document.getElementById("zhiwu").value=array[3];
	    if(array[4]=="代表"){
	    	document.getElementById("shenfen").innerHTML="<input type=radio name=shenfen value=代表  checked=checked>代表<input type=radio name=shenfen value=专家 >专家<input type=radio name=shenfen value=会务 >会务<input type=radio name=shenfen value=媒体 >媒体";
	    }
	    if(array[4]=="专家"){
	    	document.getElementById("shenfen").innerHTML="<input type=radio name=shenfen value=代表 >代表<input type=radio name=shenfen value=专家  checked=checked>专家<input type=radio name=shenfen value=会务 >会务<input type=radio name=shenfen value=媒体 >媒体";
	    }
	    if(array[4]=="会务"){
	    	document.getElementById("shenfen").innerHTML="<input type=radio name=shenfen value=代表 >代表<input type=radio name=shenfen value=专家 >专家<input type=radio name=shenfen value=会务  checked=checked>会务<input type=radio name=shenfen value=媒体 >媒体";
	    }
	    if(array[4]=="媒体"){
	    	document.getElementById("shenfen").innerHTML="<input type=radio name=shenfen value=代表 >代表<input type=radio name=shenfen value=专家 >专家<input type=radio name=shenfen value=会务  >会务<input type=radio name=shenfen value=媒体  checked=checked>媒体";
	    }
	    
	}
    
    }
  }

var usertype= document.getElementById("usertype").value;
xmlhttp.open("GET","ajax.php?regPhone="+str+"&usertype="+usertype,true);
xmlhttp.send();
}



//根据注册手机 判断是否已注册用户
function getInfoByPhone(str)
{
var xmlhttp;
if (str=="")
  {
  //document.getElementById("txtHint").innerHTML="";
  return;
  }
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
	//得到返回的多个username ，以|进行分割
    var names=xmlhttp.responseText;
    var array = names.split("|");
    var inner ="";
    for (var i=0 ; i< array.length-1 ; i++){
    	 inner = inner+"<input type=radio name=username2 value="+array[i]+" onclick=setName(this.value)>"+array[i]+"</input>";
    }
    document.getElementById("username2").innerHTML=inner;
    }
  }

var usertype= document.getElementById("usertype").value;

xmlhttp.open("GET","ajax.php?phone="+str+"&usertype="+usertype,true);
xmlhttp.send();
}

//发送验证码 校验手机号号
function sendMsg()
{
var xmlhttp;
var usertype= document.getElementById("usertype").value;
//var phone= document.getElementById("phone").value;
var phone=$("#phone").val();
phone = isjsMobile(phone);	
if(phone==false){alert('请正确填写手机号码！');return false;}
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
	document.getElementById("sendmsg").value="验证码发送成功";
    document.getElementById("msgInfo").innerHTML=xmlhttp.responseText;
    document.getElementById("regmsg").value=xmlhttp.responseText;
    
    }
  }


xmlhttp.open("GET","ajax.php?sendmsg="+phone+"&usertype="+usertype,true);
xmlhttp.send();
}

//校验表单信息……
function checkfrom(){
	
	//校验用户名
	var username=$("#username").val();
	if(username==""){
		alert("用户名不能为空！");
		return false;
	}else if(username.length<2||username.length>16){
		alert("用户名长度应在2-16位！");
		return false;
	}
	
	//校验手机号
	var phone=$("#phone").val();
	phone = isjsMobile(phone);	
	if(phone==false){alert('请正确填写手机号码！');return false;}
	
	//校验短信验证码
	/*
	var regmsg=$("#regmsg").val();
	if(regmsg==""){
		alert("校验码不能为空！");
		return false;
	}else if(regmsg.length!=6){
		alert("校验码长度应是6位！");
		return false;
	}
	*/
	
}

function isjsMobile(obj){
	if(obj.length!=11) return false;
	else if(obj.substring(0,2)!="13" && obj.substring(0,2)!="15" && obj.substring(0,2)!="18") return false;
	else if(isNaN(obj)) return false;
	else  return true;
}

/**
 * 根据单选按钮填充username
 */
function setName(str){
	
	document.getElementById("username").value=str;
}

</script>
<section class="wap_login">
	
	
	<hr>
	
  <form action="" method="post" onSubmit="return checkfrom();">
    <input name="usertype" id ="usertype" type="hidden" value="1"/>
    
     
    <p>
    
      <input name="regphone" id="regphone" type="text" class="input-common placeholder" placeholder="请输入预注册手机号" onblur="return getInfoByRegPhone(this.value);"/>
      <div id="regInfo"></div>
    
    <div id="yuzhuce1" style="display: block;">
    或
    </div>
    <p>
      <input name="phone" id="phone" type="text" class="input-common placeholder" placeholder="请输入手机号" onblur="return getInfoByPhone(this.value);"/>
    </p>
    <div id="yuzhuce2" style="display: block;">
    <p>
      <input name="sendmsg" id="sendmsg" type="button"  value="发送验证码" size="30" onclick="return sendMsg(this.value);"/> 
      <font id="msgInfo"></font>
    </p>
    <p>
      <input name="regmsg" id="regmsg" type="text" class="input-common placeholder" placeholder="短信验证码" />
      <font id="checkMsg"></font>
    </p>
    </div>
    <p>
      <div id="username2"></div>
      <input name="username" id="username" type="text" class="input-common placeholder" placeholder="姓名" />
      
    </p>
    
    <p>
      
      <input name="danwei" id="danwei" type="text" class="input-common placeholder" placeholder="工作单位" />
      
    </p>
    <p>
      	
      <input name="zhiwu" id="zhiwu" type="text" class="input-common placeholder" placeholder="职务" />
      
    </p>
    <p class="input-common placeholder" id="shenfen">
      <input type="radio" name="shenfen" value="代表" checked=checked>代表	
      <input type="radio" name="shenfen" value="专家" >专家
      <input type="radio" name="shenfen" value="会务" >会务
      <input type="radio" name="shenfen" value="媒体" >媒体
      
      
    </p>
    
    <!-- p class="input-common placeholder">
      <input name="baomi0" id="baomi0" type="checkbox" checked/>为他人签到
    </p>
    <p class="input-common placeholder">
      <input name="baomi1" id="baomi1" type="checkbox"  checked/>对现场招聘者公开我的信息
    </p>
     <p class="input-common placeholder">
      <input name="baomi2" id="baomi2" type="checkbox" class="selecter placeholder" />对现场其他求职者保密
    </p>
     <p class="input-common placeholder">
      <input name="baomi3" id="baomi3" type="checkbox" class=""  checked/>用短信增强安全性
    </p-->
    <p>
      <input name="email" id="email" type="hidden"class="input-common placeholder" placeholder="邮箱"/>
    </p>
    <p>
      <input name="password" id="password" type="hidden"class="input-common placeholder" placeholder="密码"  value="111111"/>
    </p>
    <p>
      <input name="password2" id="password2" type="hidden"class="input-common placeholder" placeholder="重复密码" value="111111"/>
    </p>
    <input type="submit" name="submit" value="签到" class="btn-large" />
  </form>
  
  
  
  <!-- section class="wap_login_no">已有账号？
  <?php if ($_GET['usertype'] == 2): ?>
<a href="<?php echo smarty_function_wapurl(array('m' => 'login','url' => "usertype:2"), $this);?>
">立即登录</a>
<?php else: ?>
<a href="<?php echo smarty_function_wapurl(array('m' => 'login'), $this);?>
">立即登录</a>
<?php endif; ?>
  </section-->
</section>
<?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => ($this->_tpl_vars['wapstyle'])."/footer.htm", 'smarty_include_vars' => array()));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?> 