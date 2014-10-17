<?php /* Smarty version 2.6.26, created on 2014-10-05 14:04:23
         compiled from default/login/index.htm */ ?>
<?php require_once(SMARTY_CORE_DIR . 'core.load_plugins.php');
smarty_core_load_plugins(array('plugins' => array(array('function', 'url', 'default/login/index.htm', 93, false),)), $this); ?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=gb2312" />
<title><?php echo $this->_tpl_vars['title']; ?>
</title>
<META name=keywords content="<?php echo $this->_tpl_vars['keywords']; ?>
">
<META name=description content="<?php echo $this->_tpl_vars['description']; ?>
">
<link rel="stylesheet" href="<?php echo $this->_tpl_vars['style']; ?>
/style/css.css" type="text/css">
<link rel="stylesheet" href="<?php echo $this->_tpl_vars['style']; ?>
/style/login.css" type="text/css">
<!--[if IE 6]>
<script src="<?php echo $this->_tpl_vars['config']['sy_weburl']; ?>
/js/png.js"></script>
<script>
DD_belatedPNG.fix('.png');
</script>
<![endif]--> 
<script src="<?php echo $this->_tpl_vars['config']['sy_weburl']; ?>
/js/jquery-1.8.0.min.js" language="javascript"></script>
<script src="<?php echo $this->_tpl_vars['config']['sy_weburl']; ?>
/js/layer/layer.min.js" language="javascript"></script>
<script src="<?php echo $this->_tpl_vars['config']['sy_weburl']; ?>
/js/public.js" language="javascript"></script>
<script src="<?php echo $this->_tpl_vars['style']; ?>
/js/reg_ajax.js" type="text/javascript"></script>
<script>
$(document).ready(function(){
	$("#username,#txt_CheckCode").focus(function(){
		var txAreaVal = $(this).val();
		if( txAreaVal == this.defaultValue){$(this).val("");}
	}).blur(function(){
		var txAreaVal = $(this).val();
		if( txAreaVal == this.defaultValue||$(this).val()==""){$(this).val(this.defaultValue);}
	});
	$("#password2").focus(function(){
		$("#password").show();
		$("#password").focus();
		$("#password2").hide();
	})
	$("#password").blur(function(){
		if($("#password").val()==""){
			$("#password2").show();
			$("#password").hide();
		}
	})
});
</script>
<div class="register_top">
  <div class="register_cot">
    <div class="register_top_left fl">欢迎来到<?php echo $this->_tpl_vars['config']['sy_webname']; ?>
！&nbsp;| <a href="<?php echo $this->_tpl_vars['config']['sy_weburl']; ?>
/wap" class="wap_icon">手机站</a></div>
    <div class="register_top_right fr"><SCRIPT LANGUAGE='JavaScript' src='<?php echo $this->_tpl_vars['config']['sy_weburl']; ?>
/index.php?m=includejs&c=RedLoginHead'></SCRIPT> 
      <a onClick="setHomepage('<?php echo $this->_tpl_vars['config']['sy_weburl']; ?>
');" href="javascript:;">设为首页</a> | <a href="javascript:addwebfav('<?php echo $this->_tpl_vars['config']['sy_weburl']; ?>
','<?php echo $this->_tpl_vars['config']['sy_webname']; ?>
')" >加入收藏</a></div>
  </div>
</div>
<div class="login_header login_w980">
  <div class="logo fl"><a href="<?php echo $this->_tpl_vars['config']['sy_weburl']; ?>
"><img src="<?php echo $this->_tpl_vars['config']['sy_weburl']; ?>
/<?php echo $this->_tpl_vars['config']['sy_logo']; ?>
" class="png"></a></div>
</div>

<!--content  start-->
<div class="login_cont">
<div class="login_banner"><img src="<?php echo $this->_tpl_vars['style']; ?>
/images/img1.jpg" height="407"></div>
<div class="login_box ">
  <div class="login_box_cont">
    <ul class="login_box_tit">
      <li <?php if ($this->_tpl_vars['usertype'] == 1): ?>class="log_cur"<?php endif; ?> id="usertype1" onclick="checktype('1');">个人登录</li>
      <li <?php if ($this->_tpl_vars['usertype'] == 2): ?>class="log_cur"<?php endif; ?> id="usertype2" onclick="checktype('2');">企业登录</li>
    </ul>
         <div class="clear"></div>
       <div class="lgoin_box_cot">
    <input type="hidden" id="usertype" name="usertype" value="<?php echo $this->_tpl_vars['usertype']; ?>
" />
    <div class="login_box_list logoin_re">
      <input type="text" class="login_box_bth placeholder" value="<?php if ($this->_tpl_vars['loginname']): ?><?php echo $this->_tpl_vars['loginname']; ?>
<?php else: ?>用户名<?php endif; ?>" name="username" id="username">
	  
      <div class="logoin_msg" style="display:none" id="show_name">
      <div class="logoin_msg_tx" >请填写用户名</div>
      <div class="logoin_msg_icon"></div>
      </div>
      
    </div>
    <div class="login_box_list logoin_re_m">
      <input type="text" id="password2" class="login_box_bth placeholder" value="请输入您的密码">
	  <input type="password" id="password" name="password" class="login_box_bth placeholder" value="" style="display:none;">
      <div class="logoin_msg" style="display:none" id="show_pass">
      <div class="logoin_msg_tx" >请填写密码</div>
      <div class="logoin_msg_icon"></div>
      </div>
    </div>
    <?php if (strpos ( $this->_tpl_vars['config']['code_web'] , "前台登陆" ) !== false): ?>
    <div class="clear"></div>
    <div class="login_box_list_yz logoin_re_m">
    <input id="txt_CheckCode" type="text" class="login_box_bth_yz" value="请输入验证码" maxlength="4" name="authcode"  >
    </div>
    <div class="login_box_list_yzm"> <img id="vcode_imgs" src="include/authcode.inc.php" onclick="check_codes();"></div>
    <?php endif; ?>
    <div class="clear"></div>
    </div>
    <div class="login_box_cz"> <span class="login_box_cz_l">
      <input type="checkbox" name="loginname" value="1" class="index_logoin_check">
      <em>记住登录状态</em></span> <a href="<?php echo smarty_function_url(array('m' => 'forgetpw'), $this);?>
">忘记密码？</a> </div>
    <div class="clear"></div>
    <div class="login_box_cz">
      <input type="submit" value="" class="login_box_bth2" onclick="check_login();">
      <a class="login_box_bth3" href="<?php echo smarty_function_url(array('m' => 'register','url' => "usertype:".($this->_tpl_vars['usertype'])), $this);?>
" id="regurl"></a> </div>
       <?php if ($this->_tpl_vars['config']['sy_qqlogin'] == 1 || $this->_tpl_vars['config']['sy_sinalogin'] == 1): ?>
    <div class="login_other">
      <p>使用开放平台账号登录</p>
      <div class="login_qq">
      <?php if ($this->_tpl_vars['config']['sy_qqlogin'] == 1): ?>
      <a href="<?php echo smarty_function_url(array('m' => 'qqconnect','url' => "c:qqlogin"), $this);?>
">QQ账号</a> 
      <?php endif; ?>
      <?php if ($this->_tpl_vars['config']['sy_sinalogin'] == 1): ?>
      <a href="<?php echo smarty_function_url(array('m' => 'sinaconnect'), $this);?>
" class="log_sina">新浪微博</a>
      <?php endif; ?></div>
    </div>
    <?php endif; ?>
  </div>
  <div class="login_h1">我们能为您提供哪些服务?</div>
  <div class="clear"></div>
  <dl class="log_can_list">
    <dt class="fr"><img src="<?php echo $this->_tpl_vars['style']; ?>
/images/log_img1.png"></dt>
    <dd><strong>网络招聘</strong> 企业注册用户10万，有效简历逾260万份
      每日提供有效职位5万+条，浏览量100万+ </dd>
  </dl>
  <dl class="log_can_list log_can_list2">
    <dt class="fl"><img src="<?php echo $this->_tpl_vars['style']; ?>
/images/log_img2.png"></dt>
    <dd><strong>招聘会</strong> 企业注册用户10万，有效简历逾260万份
      每日提供有效职位5万+条，浏览量100万+ </dd>
  </dl>
  <dl class="log_can_list">
    <dt class="fr"><img src="<?php echo $this->_tpl_vars['style']; ?>
/images/log_img3.png"></dt>
    <dd><strong>企业黄页</strong> 企业注册用户10万，有效简历逾260万份
      每日提供有效职位5万+条，浏览量100万+ </dd>
  </dl>
  <dl class="log_can_list log_can_list2">
    <dt class="fl"><img src="<?php echo $this->_tpl_vars['style']; ?>
/images/log_img4.png"></dt>
    <dd><strong>微博招聘</strong> 企业注册用户10万，有效简历逾260万份
      每日提供有效职位5万+条，浏览量100万+ </dd>
  </dl>
</div>
<!--content  end-->
</div>

<style>
.icon2 {
    background-image:none;
    background-repeat: no-repeat;
}
</style>

<?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => ($this->_tpl_vars['tplstyle'])."/footer.htm", 'smarty_include_vars' => array()));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>