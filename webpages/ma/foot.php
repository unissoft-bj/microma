<nav class="footer_nav">

<a href="javascript:window.scrollTo(0,0);">TOP</a><a href="/wap">首页</a> &nbsp;-
<?php if ($_COOKIE['uid']) {
	;
?>
&nbsp;


欢迎,<strong><?php echo iconv('GB2312', 'UTF-8', $_COOKIE['username']);?></strong> <a href="{yun:}$config.sy_weburl{/yun}/wap/{yun:}wapurl url=c:loginout{/yun}">退出</a>
<?php }?>
</nav>
<footer class="footer">


<a href="javascript:window.location.reload();">刷新</a>
-
<a href="javascript:window.history.back();">返回</a>
-
<a href="http://www.unissoft.com/" ><small>Powered by unissoft</small></a>
</footer>