<?php /* Smarty version 2.6.26, created on 2015-02-04 21:20:33
         compiled from ../template/wap/header.htm */ ?>
<!DOCTYPE html PUBLIC "-//WAPFORUM//DTD XHTML Mobile 1.0//EN" "http://www.wapforum.org/DTD/xhtml-mobile10.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=gb2312"/>
<meta http-equiv="Cache-Control" content="no-cache"/>
<title>Matrix Wifi</title>
<meta http-equiv="keywords" content="�˲���Ƹ,������Ƹ,wap" />
<meta http-equiv="description" content="�˲���Ƹ��wap��վ" />
<link rel="stylesheet" type="text/css" href="<?php echo $this->_tpl_vars['wapstyle']; ?>
/css/wap.css"/>
</head>
<body>
<div class="main_body">
<header class="header">
<div class="header_cont">
<?php if (! $this->_tpl_vars['cookie']['uid']): ?>
<div class="left-box"> <a class="hd-lbtn" href="/wap/index.php?m=register"><span>����Internet</span></a></div>
<?php endif; ?>
<?php if ($this->_tpl_vars['cookie']['uid']): ?>
<div class="left-box"> <a class="hd-lbtn" href="<?php echo $this->_tpl_vars['cookie']['userurl']; ?>
"><span>�������ʣ�<?php echo $this->_tpl_vars['cookie']['usertitle']; ?>
</span></a></div>
<?php endif; ?>

<div class="logo" align=right></div>
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
<?php if (! $this->_tpl_vars['cookie']['diaocha_url']): ?>
<td width="30%"> <a href="<?php echo $this->_tpl_vars['config']['sy_weburl']; ?>
/diaocha/view.php?id=10392"><p class="mune_b"><i></i><em>����Ĵָ</em></p></a></td>
<?php else: ?>
<td width="30%"> <a href="../diaocha/<?php echo $this->_tpl_vars['cookie']['diaocha_url']; ?>
"><p class="mune_b"><i></i><em>����Ĵָ</em></p></a></td>
<?php endif; ?>
<?php if (! $this->_tpl_vars['cookie']['uid']): ?>


<td width="30%" rowspan="2"><a href="<?php echo $this->_tpl_vars['config']['sy_weburl']; ?>
/wap/index.php?m=register&usertype=2"><p class="mune_c"><i></i><em>ǩ������<br><small>>> ��ͨInternet</small><br><small>>> �������ϻ</small></em></p></a></td>
<?php else: ?>
<td width="30%" rowspan="2"><a href="<?php echo $this->_tpl_vars['config']['sy_weburl']; ?>
/wap/index.php?m=register&usertype=2"><p class="mune_c"><i></i><em>��ӭ��<br><small><?php echo $this->_tpl_vars['cookie']['username']; ?>
</small></em></p></a></td>

<?php endif; ?>
<td width="30%"><a href="<?php echo $this->_tpl_vars['config']['sy_weburl']; ?>
/ma/shouqibucuo.php"><p class="mune_d"><i></i><em>��������</em></p></a></td>
</tr>
<tr>
<!-- <td width="30%"> <a href="<?php echo $this->_tpl_vars['config']['sy_weburl']; ?>
/ma/vote.php?title=%e6%85%88%e5%96%84%e6%8b%87%e6%8c%87"><p class="mune_b"><i></i><em>����Ĵָ</em></p></a></td> -->
<!-- //yc �жϵ���Ľ����Ƿ����cookie�� �����������ת��cookie�еĽ����� ����򿪵���ҳ�� -->
<?php if ($this->_tpl_vars['cookie']['uid']): ?>
<td width="30%"><a href="<?php echo $this->_tpl_vars['config']['sy_weburl']; ?>
/wap/member/"><p class="mune_a"><br><font color=red>[<?php echo $_SESSION['jifen']; ?>
]</font><em>�������</em></p></a></td>
<?php endif; ?>
<?php if (! $this->_tpl_vars['cookie']['uid']): ?>
<td width="30%"><a href="<?php echo $this->_tpl_vars['config']['sy_weburl']; ?>
/wap/member/"><p class="mune_a"><br><font color=red>[<?php echo $_SESSION['jifen']; ?>
]</font><em>����ȯ</em></p></a></td>
<?php endif; ?>
<td width="30%"> <a href="<?php echo $this->_tpl_vars['config']['sy_weburl']; ?>
/ma/shipin.php"><p class="mune_e"><i></i><em>������Ƶ</em></p></a></td>
</tr>
<tr>
<td colspan="3"> <a  href="javascript:"><p class="mune_f">Matrix Wifi����</p></a></td>
</tr>
</table>

