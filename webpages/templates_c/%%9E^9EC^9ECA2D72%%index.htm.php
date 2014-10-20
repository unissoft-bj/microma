<?php /* Smarty version 2.6.26, created on 2014-10-20 17:03:58
         compiled from wap/index.htm */ ?>
<?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => ($this->_tpl_vars['wapstyle'])."/header.htm", 'smarty_include_vars' => array()));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?> 
<section class="index_post_hot">
<header  class="index_post_hot_h1"><a href="javascript:;">»¶Ó­À´±ö</a></header>
<table class="ht">
<tbody>
<tr>
<?php $_from = $this->_tpl_vars['keylist']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['keys'] => $this->_tpl_vars['keylist']):
?>
<td><a href="<?php echo $this->_tpl_vars['keylist']['url']; ?>
" title="<?php echo $this->_tpl_vars['keylist']['key_name']; ?>
 "><?php echo $this->_tpl_vars['keylist']['key_name']; ?>
</a></td>
<?php if (( $this->_tpl_vars['keys']+1 ) % 4 == 0): ?>
</tr>
<tr>
<?php endif; ?>
<?php endforeach; endif; unset($_from); ?> 
</tbody>
</table>
</section>

<?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => ($this->_tpl_vars['wapstyle'])."/footer.htm", 'smarty_include_vars' => array()));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?> 