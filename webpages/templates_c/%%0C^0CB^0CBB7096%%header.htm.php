<?php /* Smarty version 2.6.26, created on 2015-01-13 16:20:35
         compiled from C:%5CUsers%5Cycyn521%5Cgit%5Cmicroma%5Cwebpages//template/wap/member/header.htm */ ?>
<!DOCTYPE html PUBLIC "-//WAPFORUM//DTD XHTML Mobile 1.0//EN" "http://www.wapforum.org/DTD/xhtml-mobile10.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=gb2312"/>
<meta http-equiv="Cache-Control" content="no-cache"/>
<title><?php echo $this->_tpl_vars['config']['sy_webname']; ?>
</title>
<meta http-equiv="keywords" content="�˲���Ƹ,������Ƹ,wap" />
<meta http-equiv="description" content="�˲���Ƹ��wap��վ" />
<link rel="stylesheet" type="text/css" href="<?php echo $this->_tpl_vars['wapstyle']; ?>
/css/wap.css"/>
</head>
<body>
<div class="main_body">
<header class="header">
<div class="header_cont">
 <div class="left-box"> <a class="hd-lbtn" href="javascript:history.back()"><span>����</span></a></div>
<div class="header_name">��������</div>
</div>
</header>
<?php if ($_GET['point']): ?>
<div class="msg-err" style="opacity: 1;-webkit-animation:shake 0.5s linear 0s;"><?php echo $_GET['point']; ?>
</div>
<?php endif; ?>

<section class="wap_member">
<div class="wap_member_top">
<span>��ã�<em><?php echo $this->_tpl_vars['username']; ?>
</em></span>
<i><a href="index.php?c=loginout">�л��û�</a></i>
</div>