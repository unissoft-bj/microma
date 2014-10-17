<?php /* Smarty version 2.6.26, created on 2014-09-11 01:18:05
         compiled from admin/login.htm */ ?>
<!DOCTYPE html PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3.org/TR/html4/loose.dtd">
<html>
<head>
<link href="images/admin.css" rel="stylesheet" type="text/css" />
<meta http-equiv="Content-Type" content="text/html; charset=GBK">
<title>PHPYun后台管理系统</title>
</head>
<body>
<div class="admin_logo_bg">
<div class="logoin_top"></div>
<div class="logoin_cont">
<div class="login_box">
<div class="logoin_c">
<div class="logoin_logo"><img src="images/logoin_logo.png"></div>
<div class="logoin_title"><div class=""><img src="images/logo_t.png"></div></div>
	<div class="login_iptbox">
	 
	<form action="" method="post">
    <ul class="logoin_list">
		<li><span><label for="username">用户名：</label></span><input type="text" class="ipt" size="10" name="username" value="" /></li>
		<li><span><label for="password">密&nbsp; 码：</label></span><input type="password" class="ipt" name="password" value="" /></li>
       <li> 
       <?php if (stripos ( $this->_tpl_vars['config']['code_web'] , "后台登陆" )): ?>
		<span><label for="code">验证码：</label></span><input type="text" id="ipt_code" class="ipt_code" name="authcode" value="" />
        <img src="../include/authcode.inc.php" align="absmiddle" >
        <?php endif; ?>
        </li>
		<li><span>&nbsp;</span><input type="submit" class="ipt_btn" name="login_sub" value="" /></li>
      </ul>
	  <input type="hidden" name="pytoken" value="<?php echo $this->_tpl_vars['pytoken']; ?>
">
	</form>
	</div>
</div>
</div>
</div>
</div>
</body>
</html>