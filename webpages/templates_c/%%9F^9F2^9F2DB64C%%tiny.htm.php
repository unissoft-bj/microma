<?php /* Smarty version 2.6.26, created on 2014-09-11 09:21:02
         compiled from wap/tiny.htm */ ?>
<?php require_once(SMARTY_CORE_DIR . 'core.load_plugins.php');
smarty_core_load_plugins(array('plugins' => array(array('function', 'wapurl', 'wap/tiny.htm', 14, false),)), $this); ?>
<?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => ($this->_tpl_vars['wapstyle'])."/header_cont.htm", 'smarty_include_vars' => array()));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>
<div class="fm">
  <form action="index.php" method="get">
  <input type="hidden" name="m" value="tiny" />
    <div class="seach_post">
    	<input type="hidden"  value="tiny" name="m"/>
      <input type="text" name="keyword" value="<?php echo $_GET['keyword']; ?>
" class="seach_post_text placeholder" placeholder="ÇëÊäÈë¹Ø¼ü×Ö" />
      <input type="submit" value="" class="seach_post_sbm"/>
    </div>
  </form>
</div>
<section>
  <div class="main"> 
  <?php $_from = $this->_tpl_vars['wres']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['wres']):
?> <a href="<?php echo smarty_function_wapurl(array('url' => "m:tiny,c:show,id:".($this->_tpl_vars['wres']['id'])), $this);?>
" class="tiny_list">
    <h3><?php echo $this->_tpl_vars['wres']['username']; ?>
 / <?php echo $this->_tpl_vars['wres']['sex_name']; ?>
</h3>
    <aside> <?php echo $this->_tpl_vars['wres']['job']; ?>
</aside>
    <i><?php echo $this->_tpl_vars['wres']['exp_name']; ?>
</i> <?php endforeach; endif; unset($_from); ?> </a> </div>
</section>
<div class="pages"> <?php echo $this->_tpl_vars['pagenav']; ?>
</div>
<div>
<?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => ($this->_tpl_vars['wapstyle'])."/footer.htm", 'smarty_include_vars' => array()));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?> 