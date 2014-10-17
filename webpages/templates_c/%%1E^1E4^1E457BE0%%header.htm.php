<?php /* Smarty version 2.6.26, created on 2014-09-10 23:42:11
         compiled from ../template/member/user/header.htm */ ?>
<!DOCTYPE HTML PUBliC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3c.org/TR/1999/REC-html401-19991224/loose.dtd">
<HTML xmlns="http://www.w3.org/1999/xhtml">
<HEaD>
<TITLE>个人用户管理平台 - <?php echo $this->_tpl_vars['config']['sy_webname']; ?>
 - Powered by PHPYun.</TITLE>
<METa http-equiv=Content-Type content="text/html; charset=GBK">
<SCRIPT type="text/javascript" src="<?php echo $this->_tpl_vars['config']['sy_weburl']; ?>
/js/jquery-1.8.0.min.js"></SCRIPT>
<script type="text/javascript" src="<?php echo $this->_tpl_vars['config']['sy_weburl']; ?>
/js/setday.js"></SCRIPT>
<script type="text/javascript" src="<?php echo $this->_tpl_vars['config']['sy_weburl']; ?>
/js/member_public.js"></SCRIPT>
<script type="text/javascript" src="<?php echo $this->_tpl_vars['config']['sy_weburl']; ?>
/js/public.js"></SCRIPT>
<script type="text/javascript" src="<?php echo $this->_tpl_vars['config']['sy_weburl']; ?>
/js/layer/layer.min.js"></SCRIPT>
<liNK href="<?php echo $this->_tpl_vars['userstyle']; ?>
/images/m_css.css" type="text/css" rel="stylesheet">
<liNK href="<?php echo $this->_tpl_vars['userstyle']; ?>
/images/m_header.css" type="text/css" rel="stylesheet">
<!--[if IE 6]>
<script src="<?php echo $this->_tpl_vars['config']['sy_weburl']; ?>
/js/png.js"></script>
<script>
  DD_belatedPNG.fix('.png,.#bg');
</script>
<![endif]-->
<METa content="MSHTML 6.00.6000.16939" name=GENERaTOR>

</HEaD>
<BODY>
<script>
var weburl="<?php echo $this->_tpl_vars['config']['sy_weburl']; ?>
";
function search_keyword(){
	var keyword=$("#keywords").val();
	if(keyword=="请输入关键字"){
		parent.layer.msg('请输入需要搜索的关键字', 2,8);
		return false;
	}
}
</script>
<div class="header">
   
  <div class="w950">
    <div class="logo mt10 fltL"> <a href="<?php echo $this->_tpl_vars['config']['sy_weburl']; ?>
" target="_blank" title='返回网站首页'><IMG alt="<?php echo $this->_tpl_vars['config']['sy_webname']; ?>
" src="<?php echo $this->_tpl_vars['config']['sy_weburl']; ?>
/<?php echo $this->_tpl_vars['config']['sy_member_logo']; ?>
" class="png"></a> </div>
    <div class="header_seach fltL">
      <form action="<?php echo $this->_tpl_vars['config']['sy_weburl']; ?>
/index.php" method="get" target="_blank" onSubmit="return search_keyword();">
        <input type="hidden" name="m" value="com"/>
		<input type="hidden" name="c" value="search"/>
        <input type="text" id="keywords" name="keyword" class="he_input placeholder" value="请输入关键字" onclick="if(this.value=='请输入关键字'){this.value=''}" onblur="if(this.value==''){this.value='请输入关键字'}" >
        <input type="submit" value="" class="he_submit">
      </form>
    </div>
    <div class="header_r fltR">
      <ul class="header_mune">
        <li class="header_mune_cur"><a href="index.php">我的首页</a></li>
        <li><a class="thickbox" href="index.php?c=resume" title="简历管理">我的简历</a></li>
        <li><a href="index.php?c=job" title="职位管理">求职申请</a></li>
        <li><a href="index.php?c=msg">面试邀请</a></li>
      </ul>
     </div>
  </div>
</div>