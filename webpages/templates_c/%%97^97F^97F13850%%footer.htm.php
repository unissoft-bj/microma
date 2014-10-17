<?php /* Smarty version 2.6.26, created on 2014-10-03 12:56:49
         compiled from C:%5CUsers%5Cycyn521%5Cgit%5Cmicrohr%5Cwebpages//template/default/footer.htm */ ?>
<script>var weburl = '<?php echo $this->_tpl_vars['config']['sy_weburl']; ?>
'</script>
<div class="clear"></div>
<div class="footer">
<div class="foot">
	<div class="foot_conent">
	<?php $_from = $this->_tpl_vars['navlist']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['key'] => $this->_tpl_vars['navlist']):
?>
	 <?php if ($this->_tpl_vars['key'] != '0'): ?>|<?php endif; ?> <a href="<?php echo $this->_tpl_vars['navlist']['url']; ?>
" <?php if ($this->_tpl_vars['navlist']['eject']): ?> target="_blank"<?php endif; ?> style="<?php if ($this->_tpl_vars['navlist']['color']): ?>color:<?php echo $this->_tpl_vars['navlist']['color']; ?>
;<?php endif; ?><?php if ($this->_tpl_vars['navlist']['bold'] == 1): ?>font-weight:bolder;<?php endif; ?>"><?php echo $this->_tpl_vars['navlist']['name']; ?>
</a>
	<?php endforeach; endif; unset($_from); ?>
	<br>
	<?php echo $this->_tpl_vars['config']['sy_webcopyright']; ?>
<?php echo $this->_tpl_vars['config']['sy_webrecord']; ?>

	<br>
	µÿ÷∑:<?php echo $this->_tpl_vars['config']['sy_webadd']; ?>
  µÁª∞(Tel):<?php echo $this->_tpl_vars['config']['sy_webtel']; ?>
  EMAIL:<?php echo $this->_tpl_vars['config']['sy_webemail']; ?>

	<br>
	Powered by <a target="_blank" href="http://www.phpyun.com">PHPYun.</a> v3.1 Business Edition. Certificate Code 2009-2014<a target="_blank" href="http://www.phpyun.com">PHPYUN</a>Corporation
    </div>
	<div class="clear"></div>

</div>
</div>
<div id="uclogin" style="display:none"></div>
<div id="bg" style=""></div>
</body>
</html>