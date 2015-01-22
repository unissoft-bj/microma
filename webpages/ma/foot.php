<nav class="footer_nav">

<a href="javascript:window.scrollTo(0,0);">TOP</a><a href="/wap">首页</a> &nbsp;-
<?php if (isset($_COOKIE['uid'])) {
	;
?>
&nbsp;


欢迎,<strong><?php echo iconv('GB2312', 'UTF-8', $_COOKIE['username']);?></strong> <!-- <a href="/wap/index.php?c=loginout">退出</a> -->
<?php }?>
</nav>
<footer class="footer">


<a href="javascript:window.location.reload();">刷新</a>
-
<a href="javascript:window.history.back();">返回</a>
-
<a href="javascript:" ><small>Powered by Matrix Wifi</small></a>
<br>
由Matrix Wifi提供解决方案 联系电话<a href="tel:13701272752">13701272752</a>
</footer>