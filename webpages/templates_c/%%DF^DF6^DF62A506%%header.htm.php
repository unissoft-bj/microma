<?php /* Smarty version 2.6.26, created on 2014-12-10 21:35:45
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
<?php if (! $this->_tpl_vars['cookie']['uid']): ?>
<div class="left-box"> <a class="hd-lbtn" href="/wap/index.php?m=register"><span>申请Internet</span></a></div>
<?php endif; ?>
<?php if ($this->_tpl_vars['cookie']['uid']): ?>
<div class="left-box"> <a class="hd-lbtn" href="<?php echo $this->_tpl_vars['cookie']['userurl']; ?>
"><span>访问Internet</span></a></div>
<?php endif; ?>
<div class="header_user"><a href="member/"></a></div>
<div class="logo"><img src="<?php echo $this->_tpl_vars['wapstyle']; ?>
/images/logo.png"></div>
<div class="header_user"><a href="member/"></a></div>
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
/ma/message_liebiao.php?title=%e7%ba%bf%e4%b8%8a%e6%b6%88%e6%81%af"><p class="mune_a"><i></i><em>积分商城：<font color=red><?php echo $_SESSION['jifen']; ?>
</font></em></p></a></td>
<?php if (! $this->_tpl_vars['cookie']['uid']): ?>


<td width="30%" rowspan="2"><a href="<?php echo $this->_tpl_vars['config']['sy_weburl']; ?>
/wap/index.php?m=register&usertype=2"><p class="mune_c"><i></i><em>实名认证<br><small>接通外网</small><br><small>参与线上互动活动</small></em></p></a></td>
<?php else: ?>
<td width="30%" rowspan="2"><a href="<?php echo $this->_tpl_vars['config']['sy_weburl']; ?>
/wap/index.php?m=register&usertype=2"><p class="mune_c"><i></i><em>欢迎，<?php echo $this->_tpl_vars['cookie']['username']; ?>
！<br><small>您可以访问互联网</small><br><small>或者</small><br><small>参与线上互动和活动</small></em></p></a></td>

<?php endif; ?>
<td width="30%"><a href="<?php echo $this->_tpl_vars['config']['sy_weburl']; ?>
/ma/meeting_list.php?title=%e8%b5%84%e6%96%99%e4%b8%8b%e8%bd%bd"><p class="mune_d"><i></i><em>资料下载</em></p></a></td>
</tr>
<tr>
<!-- <td width="30%"> <a href="<?php echo $this->_tpl_vars['config']['sy_weburl']; ?>
/ma/vote.php?title=%e6%85%88%e5%96%84%e6%8b%87%e6%8c%87"><p class="mune_b"><i></i><em>慈善拇指</em></p></a></td> -->
<!-- //yc 判断调查的进度是否存在cookie中 如果存在则跳转到cookie中的进度中 否则打开调查页面 -->
<?php if (! $this->_tpl_vars['cookie']['diaocha_url']): ?>
<td width="30%"> <a href="<?php echo $this->_tpl_vars['config']['sy_weburl']; ?>
/diaocha/view.php?id=10392"><p class="mune_b"><i></i><em>公益拇指</em></p></a></td>
<?php else: ?>
<td width="30%"> <a href="../diaocha/<?php echo $this->_tpl_vars['cookie']['diaocha_url']; ?>
"><p class="mune_b"><i></i><em>公益拇指</em></p></a></td>
<?php endif; ?>
<td width="30%"> <a href="<?php echo $this->_tpl_vars['config']['sy_weburl']; ?>
/ma/discuss.php?title=%e7%95%99%e8%a8%80%e5%8f%8d%e9%a6%88"><p class="mune_e"><i></i><em>留言反馈</em></p></a></td>
</tr>
<tr>
<td colspan="3"> <a  href="<?php echo $this->_tpl_vars['config']['sy_weburl']; ?>
/ma/meeting_list.php?title=%e4%bc%9a%e8%ae%ae%e6%97%a5%e7%a8%8b"><p class="mune_f">会议日程</p></a></td>
</tr>
</table>

