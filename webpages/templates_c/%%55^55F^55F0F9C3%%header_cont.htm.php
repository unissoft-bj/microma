<?php /* Smarty version 2.6.26, created on 2014-10-08 19:18:56
         compiled from ../template/wap/header_cont.htm */ ?>
<!DOCTYPE html PUBLIC "-//WAPFORUM//DTD XHTML Mobile 1.0//EN" "http://www.wapforum.org/DTD/xhtml-mobile10.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=gb2312"/>
<meta http-equiv="Cache-Control" content="no-cache"/>
<title><?php echo $this->_tpl_vars['config']['sy_webname']; ?>
 -  手机人才网</title>
<meta http-equiv="keywords" content="人才招聘,网络招聘,wap" />
<meta http-equiv="description" content="人才招聘网wap网站" />
<link rel="stylesheet" type="text/css" href="<?php echo $this->_tpl_vars['wapstyle']; ?>
/css/wap.css"/>
</head>
<body>
<div class="main_body">
<header class="header">
<div class="header_cont">
 <div class="left-box"> <a class="hd-lbtn" href="javascript:history.back()"><span>返回</span></a></div>
<div class="header_name"><?php echo $this->_tpl_vars['title']; ?>
</div>
<div class="header_user"><a href="member/"></a></div>
</div>
</header>
<?php if ($_GET['point']): ?>
<div class="msg-err" style="opacity: 1;-webkit-animation:shake 0.5s linear 0s;"><?php echo $_GET['point']; ?>
</div>
<?php endif; ?>
 


