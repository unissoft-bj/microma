<?php /* Smarty version 2.6.26, created on 2014-10-20 20:14:48
         compiled from C:%5CUsers%5Cycyn521%5Cgit%5Cmicroma%5Cwebpages//template/wap/footer.htm */ ?>
<?php require_once(SMARTY_CORE_DIR . 'core.load_plugins.php');
smarty_core_load_plugins(array('plugins' => array(array('function', 'wapurl', 'C:\\Users\\ycyn521\\git\\microma\\webpages//template/wap/footer.htm', 6, false),)), $this); ?>
<nav class="footer_nav">

<a href="javascript:window.scrollTo(0,0);">TOP</a><a href="/wap">��ҳ</a> &nbsp;-<?php if (! $this->_tpl_vars['cookie']['uid']): ?>
&nbsp;
<!--
<a href="<?php echo smarty_function_wapurl(array('m' => 'login'), $this);?>
">���˵�¼</a>&nbsp;&nbsp;-
<a href="<?php echo smarty_function_wapurl(array('m' => 'login','url' => "usertype:2"), $this);?>
">��ҵ��¼</a>&nbsp;&nbsp;<br/>
  -->
<?php else: ?>
��ӭ,<strong><?php echo $this->_tpl_vars['cookie']['username']; ?>
</strong> <a href="<?php echo $this->_tpl_vars['config']['sy_weburl']; ?>
/wap/<?php echo smarty_function_wapurl(array('url' => "c:loginout"), $this);?>
">�˳�</a>
<?php endif; ?>
</nav>
<footer class="footer">
<a href="./">��ͳ��</a>
-
<a href="index.php?action=about">������վ</a>
-
<a href="<?php echo $this->_tpl_vars['config']['sy_weburl']; ?>
">���԰�</a>
<br>

<a href="javascript:window.location.reload();">ˢ��</a>
-
<a href="javascript:window.history.back();">����</a>
-
<a href="http://www.phpyun.com/" ><small>Powered by yang</small></a>
</footer>
</div>
</body>
</html>