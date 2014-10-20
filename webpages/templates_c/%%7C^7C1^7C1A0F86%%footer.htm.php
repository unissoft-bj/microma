<?php /* Smarty version 2.6.26, created on 2014-10-20 20:14:48
         compiled from C:%5CUsers%5Cycyn521%5Cgit%5Cmicroma%5Cwebpages//template/wap/footer.htm */ ?>
<?php require_once(SMARTY_CORE_DIR . 'core.load_plugins.php');
smarty_core_load_plugins(array('plugins' => array(array('function', 'wapurl', 'C:\\Users\\ycyn521\\git\\microma\\webpages//template/wap/footer.htm', 6, false),)), $this); ?>
<nav class="footer_nav">

<a href="javascript:window.scrollTo(0,0);">TOP</a><a href="/wap">首页</a> &nbsp;-<?php if (! $this->_tpl_vars['cookie']['uid']): ?>
&nbsp;
<!--
<a href="<?php echo smarty_function_wapurl(array('m' => 'login'), $this);?>
">个人登录</a>&nbsp;&nbsp;-
<a href="<?php echo smarty_function_wapurl(array('m' => 'login','url' => "usertype:2"), $this);?>
">企业登录</a>&nbsp;&nbsp;<br/>
  -->
<?php else: ?>
欢迎,<strong><?php echo $this->_tpl_vars['cookie']['username']; ?>
</strong> <a href="<?php echo $this->_tpl_vars['config']['sy_weburl']; ?>
/wap/<?php echo smarty_function_wapurl(array('url' => "c:loginout"), $this);?>
">退出</a>
<?php endif; ?>
</nav>
<footer class="footer">
<a href="./">传统版</a>
-
<a href="index.php?action=about">关于网站</a>
-
<a href="<?php echo $this->_tpl_vars['config']['sy_weburl']; ?>
">电脑版</a>
<br>

<a href="javascript:window.location.reload();">刷新</a>
-
<a href="javascript:window.history.back();">返回</a>
-
<a href="http://www.phpyun.com/" ><small>Powered by yang</small></a>
</footer>
</div>
</body>
</html>