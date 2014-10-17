<?php /* Smarty version 2.6.26, created on 2014-10-05 14:04:28
         compiled from default/register/user.htm */ ?>
<?php require_once(SMARTY_CORE_DIR . 'core.load_plugins.php');
smarty_core_load_plugins(array('plugins' => array(array('function', 'url', 'default/register/user.htm', 106, false),)), $this); ?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=gb2312" />
<title><?php echo $this->_tpl_vars['title']; ?>
</title>
<META name="keywords" content="<?php echo $this->_tpl_vars['keywords']; ?>
">
<META name="description" content="<?php echo $this->_tpl_vars['description']; ?>
">
<link rel="stylesheet" href="<?php echo $this->_tpl_vars['style']; ?>
/style/css.css" type="text/css">
<link rel="stylesheet" href="<?php echo $this->_tpl_vars['style']; ?>
/style/login.css" type="text/css">
<script src="<?php echo $this->_tpl_vars['config']['sy_weburl']; ?>
/js/jquery-1.8.0.min.js" language="javascript"></script>
<script src="<?php echo $this->_tpl_vars['config']['sy_weburl']; ?>
/js/layer/layer.min.js" language="javascript"></script> 
<script src="<?php echo $this->_tpl_vars['config']['sy_weburl']; ?>
/js/public.js" language="javascript"></script>
<script src="<?php echo $this->_tpl_vars['style']; ?>
/js/reg_ajax.js" type="text/javascript"></script> 
<!--[if IE 6]>
<script src="<?php echo $this->_tpl_vars['config']['sy_weburl']; ?>
/js/png.js"></script>
<script>
DD_belatedPNG.fix('.png,.index_logoin,.index_logoin_current,.nav_list,.fairs_Status,.fairs_Status,.logoin_qybj,.logoin_grbj,.logoin_Shadow_right,.logoin_Shadow_left,.whitebg,.micro_resume_fast,.nav_list_hover a,#bg,.left_comapply_cont li,.icon2,.nav_list .nav_list_hover em,.Fast_right_icon_l,.Fast_right_icon_r,.index_logoin_after,.logoin_after em,.logoin_after_su2,.logoin_after_su1,.hbg,.pagination li a,.firm_post_list,.Auction_tit,.yun_title,.Recommended_tit,.Com_Search_Results_r ul .All_post_h1_act,.sButtonBlock a.closeButton,.Comment_list_top,.icon');
</script>
<![endif]--> 
<script>
  //DD_belatedPNG.fix('.reg_header_ban');
</script>
<script>
function movetip(obj){
	var id=$(obj).attr('id');
	var date=$(obj).attr('date');  
	var name=$(obj).attr('name');  
	var msg=$("#ajax_"+name).html();
	if(date=='0'){var color='#F26C4F';}else{var color='#56B154';}
	if($.trim(msg)!=''){
		layer.tips(msg, $("#"+id), {guide: 1,style: ['background-color:'+color+'; color:#fff;top:1px', color]}); 
	}
}
function outtip(obj){
	var date=$(obj).attr('date');
		if(date=='1'){
			layer.closeTips();
		}
}
</script>
</head>
<body>

<div class="register_top">
<div class="register_cot">
<div class="register_top_left fl">欢迎来到<?php echo $this->_tpl_vars['config']['sy_webname']; ?>
！&nbsp;| <a href="<?php echo $this->_tpl_vars['config']['sy_weburl']; ?>
/wap" class="wap_icon">手机站</a></div>
<div class="register_top_right fr"> <SCRIPT LANGUAGE='JavaScript' src='<?php echo $this->_tpl_vars['config']['sy_weburl']; ?>
/index.php?m=includejs&c=RedLoginHead'></SCRIPT>      <a onClick="setHomepage('<?php echo $this->_tpl_vars['config']['sy_weburl']; ?>
');" href="javascript:;">设为首页</a> | <a href="javascript:addwebfav('<?php echo $this->_tpl_vars['config']['sy_weburl']; ?>
','<?php echo $this->_tpl_vars['config']['sy_webname']; ?>
')" >加入收藏</a></div>
</div>
</div>
<div class="register_header">
    <div class="reg_w980">
        <div class="reg_logo"><a href="<?php echo $this->_tpl_vars['config']['sy_weburl']; ?>
"><img src="<?php echo $this->_tpl_vars['config']['sy_weburl']; ?>
/<?php echo $this->_tpl_vars['config']['sy_member_logo']; ?>
" alt="<?php echo $this->_tpl_vars['config']['sy_webname']; ?>
" class="png"></a></div>
        <div class="reg_msg">用户注册</div>
        <div class="reg_header_ban"><img src="<?php echo $this->_tpl_vars['style']; ?>
/images/reg_ban.png" class="png"></div>
    </div>
</div>

<!--content  start-->
<div class="reg_content" style="height:560px;">
  <div class="logoin_cont fl">
        <div class="register_h1"><span>求职者</span></div>
        <div class="register_left">
          <ul class="register_list">
            <li><em><font color="#FF0000">*</font> 用&nbsp;户&nbsp;名：</em>
            <input id="username" type="text" value="" onmousemove='movetip(this);' onmouseout='outtip(this);'   name="username" onBlur="reg_checkAjax('username');" maxlength="50" class="logoin_text tips_class"></li>
           <span class="registe_Judge" id="ajax_username">请输入2-16位字符.英文,数字</span>
            <li><em><font color="#FF0000">*</font> 密&nbsp;&nbsp;&nbsp;&nbsp;码：</em>
              <input id="password"  onmousemove='movetip(this);' onmouseout='outtip(this);'   type="password" name="password" onBlur="reg_checkAjax('password')" value="" class="logoin_text tips_class" onkeyup="this.value=this.value.replace(/^ +| +$/g,'')">
            </li>
           <span class="registe_Judge" id="ajax_password">请输入6到20位密码,建议英文大小写+数字</span>
            <li><em><font color="#FF0000">*</font> 确认密码：</em>
              <input id="passconfirm"  onmousemove='movetip(this);' onmouseout='outtip(this);'   type="password" value="" name="passconfirm" onBlur="reg_checkAjax('passconfirm')" class="logoin_text tips_class" onkeyup="this.value=this.value.replace(/^ +| +$/g,'')">
            </li>
			<span class="registe_Judge" id="ajax_passconfirm">请重复输入上面的密码</span>
            <li><em><font color="#FF0000">*</font> 电子邮件：</em>
              <input id="email"  onmousemove='movetip(this);' onmouseout='outtip(this);'   type="text" value="" name="email" onBlur="reg_checkAjax('email');" maxlength="50" class="logoin_text tips_class">
            </li>
			 <span class="registe_Judge" id="ajax_email">请输入您常用的邮箱地址,可通过邮箱取回密码</span>
            <li><em><font color="#FF0000">*</font> 联系手机：</em>
              <input id="moblie"  onmousemove='movetip(this);' onmouseout='outtip(this);'   type="text" value="" onBlur="reg_checkAjax('moblie');" maxlength="50" name="moblie" class="logoin_text tips_class">
            </li>
            <span class="registe_Judge" id="ajax_moblie">请输入您真实的手机号码确保账户安全</span>
            <?php if (strpos ( $this->_tpl_vars['config']['code_web'] , "注册会员" ) !== false): ?>
            <li><em><font color="#FF0000">*</font> 验&nbsp;证&nbsp;码：</em>
              <input id="txt_CheckCode" type="text"  class="logoin_text_yz"  maxlength="4" name="authcode" onBlur="reg_checkAjax('txt_CheckCode');" value="">
              <img id="vcode_imgs" src="include/authcode.inc.php"> <a href="javascript:check_codes();" class="registe_a">看不清？</a></li>
             <div class='receive_err'  id='re_txt_CheckCode'><em>&nbsp;&nbsp;</em><span class="registe_Judge" id="ajax_txt_CheckCode">请填写右侧验证码</span></div>
            <?php endif; ?>
            <li style="margin-top:5px;"><em>&nbsp;</em>
            <input type="checkbox"  id="xieyi" class="logoin_check" name="isReadagreement" value="1">
            <label for="isReadagreement">
            我已阅读<a href="<?php echo $this->_tpl_vars['config']['sy_weburl']; ?>
/about/service.html" target="_blank"> 《用户服务协议》</a> ，并自愿遵守该协议。
            </li><div class="clear"></div>
            <li><em>&nbsp;</em>
              <input type="button" class="register_submit" onclick="check_user();">
            </li><div class="clear"></div>
            <li><em>&nbsp;</em><span id="usertype"></span></li>
          </ul>
        <input id="check_username" type="hidden" value="0">
        <input id="check_password" type="hidden" value="0">
        <input id="check_passconfirm" type="hidden" value="0">
        <input id="check_email" type="hidden" value="0">
        <input id="check_moblie" type="hidden" value="0">
       </div>
    <div class="register_right">
   <div class="register_right_c"> 已有<?php echo $this->_tpl_vars['config']['sy_webname']; ?>
账号 ? <a href="<?php echo smarty_function_url(array('m' => 'login','url' => "usertype:1"), $this);?>
">登录</a></div>
      <?php if ($this->_tpl_vars['config']['sy_qqlogin'] == 1 || $this->_tpl_vars['config']['sy_sinalogin'] == 1): ?>
      <div class="register_right_c" style="margin-top:30px;">使用其他账号直接登录 </div>
      <div class="register_right_q">
      <?php if ($this->_tpl_vars['config']['sy_qqlogin'] == 1): ?>
      <a href="<?php echo smarty_function_url(array('m' => 'qqconnect','url' => "c:qqlogin"), $this);?>
"><img src="<?php echo $this->_tpl_vars['style']; ?>
/images/reg_qq.jpg"></a> 
      <?php endif; ?>
      <?php if ($this->_tpl_vars['config']['sy_sinalogin'] == 1): ?>
      <a href="<?php echo smarty_function_url(array('m' => 'sinaconnect'), $this);?>
"><img src="<?php echo $this->_tpl_vars['style']; ?>
/images/reg_sina.jpg"></a>
      <?php endif; ?>
      </div>
      <?php endif; ?>
    </div>
</div>
</div>
<style>
.icon2 {
    background-image:none;
    background-repeat: no-repeat;
}
</style>
<!--content  end--> 
<?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => ($this->_tpl_vars['tplstyle'])."/footer.htm", 'smarty_include_vars' => array()));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>