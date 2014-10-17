<?php /* Smarty version 2.6.26, created on 2014-10-13 09:27:38
         compiled from wap/register.htm */ ?>
<?php require_once(SMARTY_CORE_DIR . 'core.load_plugins.php');
smarty_core_load_plugins(array('plugins' => array(array('function', 'wapurl', 'wap/register.htm', 181, false),)), $this); ?>
<?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => ($this->_tpl_vars['wapstyle'])."/header_cont.htm", 'smarty_include_vars' => array()));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>
<br>
<p>
      <div align="center">选择签到身份： <a href="/wap/index.php?m=register&usertype=1">求职者</a>    <a href="/wap/index.php?m=register&usertype=2">招聘者</a></div>
    </p>
<br>
<h1> &nbsp;老用户快速通道：</h1>
<hr>
<iframe  width="100%" frameborder="0" src="/wap/user.php"  height="15%"/></iframe>
<script src="<?php echo $this->_tpl_vars['config']['sy_weburl']; ?>
/js/jquery-1.8.0.min.js"></script>
<script>


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
	var regmsg=$("#regmsg").val();
	if(regmsg==""){
		alert("校验码不能为空！");
		return false;
	}else if(regmsg.length!=6){
		alert("校验码长度应是6位！");
		return false;
	}
	
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
	
	以新身份登记：
	<hr>
  <form action="" method="post" onSubmit="return checkfrom();">
    <input name="usertype" id ="usertype" type="hidden" value="<?php echo $_GET['usertype']; ?>
"/>
    
     <?php if ($_GET['usertype'] == 2): ?>
    <p>
      <input name="regphone" id="regphone" type="text" class="input-common placeholder" placeholder="企业识别码" />
    </p>
    <?php endif; ?>
    <p>
      <input name="phone" id="phone" type="text" class="input-common placeholder" placeholder="签到手机" onblur="return getInfoByPhone(this.value);"/>
    </p>
    <p>
      <input name="sendmsg" id="sendmsg" type="button"  value="发送验证码" size="30" onclick="return sendMsg(this.value);"/> 
      <font id="msgInfo"></font>
    </p>
    <p>
      <input name="regmsg" id="regmsg" type="text" class="input-common placeholder" placeholder="短信验证码" />
      <font id="checkMsg"></font>
    </p>
    <p>
      <input name="username" id="username" type="text" class="input-common placeholder" placeholder="姓名" />
      <div id="username2"></div>
    </p>
    
    <p class="input-common placeholder">
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
    </p>
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