<?php /* Smarty version 2.6.26, created on 2015-04-25 21:16:22
         compiled from ../template/wap/header.htm */ ?>
<!DOCTYPE html PUBLIC "-//WAPFORUM//DTD XHTML Mobile 1.0//EN" "http://www.wapforum.org/DTD/xhtml-mobile10.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=gb2312"/>
<meta http-equiv="Cache-Control" content="no-cache"/>
<title>中国汽车安全主题巡展</title>
<meta http-equiv="keywords" content="" />
<meta http-equiv="description" content="" />
<link rel="stylesheet" type="text/css" href="<?php echo $this->_tpl_vars['wapstyle']; ?>
/css/wap.css"/>
</head>
<body>
<div class="main_body">
<header class="header">
<div class="header_cont">


<div class="header_name">中国汽车安全主题巡展</div>

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

<td width="30%"> <a href="javascript:0"><p class="mune_b"><i></i><em>神秘优惠1</em></p></a></td>



<?php if (! $this->_tpl_vars['cookie']['diaocha_url']): ?>
<td width="30%" rowspan="2"><a href="<?php echo $this->_tpl_vars['config']['sy_weburl']; ?>
/diaocha/view.php?id=10392"><p class="mune_c"><i></i><em>大问题<br>抽大奖</em></p></a></td>
<?php else: ?>
<td width="30%" rowspan="2"><a href="../diaocha/<?php echo $this->_tpl_vars['cookie']['diaocha_url']; ?>
"><p class="mune_c"><i></i><em>大问题<br>抽大奖</em></p></a></td>
<?php endif; ?>

<td width="30%"><a href="javascript:0"><p class="mune_d"><i></i><em>神秘优惠2</em></p></a></td>
</tr>
<tr>

<td width="30%"><a href="javascript:0"><p class="mune_a"><br><em>神秘优惠3</em></p></a></td>


<td width="30%"> <a href="javascript:0"><p class="mune_e"><i></i><em>神秘优惠4</em></p></a></td>
</tr>
<tr>
<td colspan="3"> <a  href="javascript:"><p class="mune_f">巡展介绍</p></a></td>
</tr>
</table>

