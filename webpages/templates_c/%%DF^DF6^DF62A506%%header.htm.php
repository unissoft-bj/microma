<?php /* Smarty version 2.6.26, created on 2014-10-20 21:48:22
         compiled from ../template/wap/header.htm */ ?>
<!DOCTYPE html PUBLIC "-//WAPFORUM//DTD XHTML Mobile 1.0//EN" "http://www.wapforum.org/DTD/xhtml-mobile10.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=gb2312"/>
<meta http-equiv="Cache-Control" content="no-cache"/>
<title><?php echo $this->_tpl_vars['config']['sy_webname']; ?>
</title>
<meta http-equiv="keywords" content="人才招聘,网络招聘,wap" />
<meta http-equiv="description" content="人才招聘网wap网站" />
<link rel="stylesheet" type="text/css" href="<?php echo $this->_tpl_vars['wapstyle']; ?>
/css/wap.css"/>
</head>
<body>
<div class="main_body">
<header class="header">
<div class="header_cont">
<?php if ($_GET['auth'] == 0): ?>
<div class="left-box"> <a class="hd-lbtn" href="/wap/index.php?m=register"><span>开启网络</span></a></div>
<?php endif; ?>
<?php if ($_GET['auth'] == 1): ?>
<div class="left-box"> <a class="hd-lbtn" href="<?php echo $_GET['userurl']; ?>
"><span>访问网络</span></a></div>
<?php endif; ?>
<div class="header_user"><a href="member/"></a></div>
<div class="logo"><img src="<?php echo $this->_tpl_vars['wapstyle']; ?>
/images/logo.png"></div>
<div class="header_user"><a href=""></a></div>
</div>
</header>
<?php if ($_GET['point']): ?>
<div class="msg-err" style="opacity: 1;-webkit-animation:shake 0.5s linear 0s;"><?php echo $_GET['point']; ?>
</div>
<?php endif; ?>
<link rel="stylesheet" type="text/css" href="/AD/css/swipe.css">
<div class="addWrap">
  <div class="swipe" id="mySwipe">
    <div class="swipe-wrap">
      <div><a href="javascript:;"><img class="img-responsive" src="/AD/images/1.jpg"/></a></div>
      <div><a href="javascript:;"><img class="img-responsive" src="/AD/images/2.jpg"/></a></div>
      <div><a href="javascript:;"><img class="img-responsive" src="/AD/images/3.jpg"/></a></div>
    </div>
  </div>
  <ul id="position">
    <li class="cur"></li>
    <li class=""></li>
    <li class=""></li>
  </ul>
</div>
<script src="/AD/js/swipe.js"></script> 
<script type="text/javascript">
var bullets = document.getElementById('position').getElementsByTagName('li');
var banner = Swipe(document.getElementById('mySwipe'), {
	auto: 2000,
	continuous: true,
	disableScroll:false,
	callback: function(pos) {
		var i = bullets.length;
		while (i--) {
		  bullets[i].className = ' ';
		}
		bullets[pos].className = 'cur';
	}
});
</script>
<table class="mune_list">
<tr>
<td width="30%"><a href="<?php echo $this->_tpl_vars['config']['sy_weburl']; ?>
/ma/message_liebiao.php"><p class="mune_a"><i></i><em>交朋识友</em></p></a></td>
<td width="30%" rowspan="2"><a href="<?php echo $this->_tpl_vars['config']['sy_weburl']; ?>
/wap/index.php?m=register&usertype=2"><p class="mune_c"><i></i><em>线上签到<br><small>(签到后开通互联网)</small></em></p></a></td>
<td width="30%"><a href="<?php echo $this->_tpl_vars['config']['sy_weburl']; ?>
/ma/meeting_list.php"><p class="mune_d"><i></i><em>会议资料</em></p></a></td>
</tr>
<tr>
<td width="30%"> <a href="<?php echo $this->_tpl_vars['config']['sy_weburl']; ?>
/ma/vote.php"><p class="mune_b"><i></i><em>参与讨论</em></p></a></td>
<td width="30%"> <a href="<?php echo $this->_tpl_vars['config']['sy_weburl']; ?>
/ma/discuss.php"><p class="mune_e"><i></i><em>会务留言</em></p></a></td>
</tr>
<tr>
<td colspan="3"> <a  href="<?php echo $this->_tpl_vars['config']['sy_weburl']; ?>
/ma/meeting_list.php"><p class="mune_f">会议日程</p></a></td>
</tr>
</table>

