<?php /* Smarty version 2.6.26, created on 2014-09-11 02:16:28
         compiled from wap/news.htm */ ?>
<?php require_once(SMARTY_CORE_DIR . 'core.load_plugins.php');
smarty_core_load_plugins(array('plugins' => array(array('function', 'wapurl', 'wap/news.htm', 6, false),)), $this); ?>
<?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => ($this->_tpl_vars['wapstyle'])."/header_cont.htm", 'smarty_include_vars' => array()));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>
<section>
<div class="main">
<?php $_from = $this->_tpl_vars['news']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['news']):
?> 
   
<a href="<?php echo smarty_function_wapurl(array('m' => 'news','url' => "c:show,id:".($this->_tpl_vars['news']['id'])), $this);?>
"  class="index_post_list_b">
<h3><?php echo $this->_tpl_vars['news']['title']; ?>
</h3>
<i><?php echo $this->_tpl_vars['news']['time']; ?>
</i>
</a> 
<?php endforeach; endif; unset($_from); ?>
</div>
</section>
<div class="pages"> <?php echo $this->_tpl_vars['pagenav']; ?>
</div>


<div>
<?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => ($this->_tpl_vars['wapstyle'])."/footer.htm", 'smarty_include_vars' => array()));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?> 