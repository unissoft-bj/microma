<?php /* Smarty version 2.6.26, created on 2014-10-03 12:56:59
         compiled from wap/index.htm */ ?>
<?php require_once(SMARTY_CORE_DIR . 'core.load_plugins.php');
smarty_core_load_plugins(array('plugins' => array(array('function', 'wapurl', 'wap/index.htm', 21, false),array('modifier', 'mb_substr', 'wap/index.htm', 22, false),)), $this); ?>
<?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => ($this->_tpl_vars['wapstyle'])."/header.htm", 'smarty_include_vars' => array()));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?> 
<section class="index_post_hot">
<header  class="index_post_hot_h1"><a href="javascript:;">热门职位</a></header>
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
<section class="index_post_hot">
<header  class="index_post_hot_h1"><a href="?m=com">最新职位</a></header>
<div class="index_post_list">
<?php $_from = $this->_tpl_vars['job']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['job']):
?>
<a href="<?php echo smarty_function_wapurl(array('m' => 'com','url' => "c:view,id:".($this->_tpl_vars['job']['id'])), $this);?>
" class="index_post_list_b">
<h3><?php echo ((is_array($_tmp=$this->_tpl_vars['job']['name'])) ? $this->_run_mod_handler('mb_substr', true, $_tmp, 0, 12, 'gbk') : mb_substr($_tmp, 0, 12, 'gbk')); ?>
</h3>
<aside><?php echo $this->_tpl_vars['job']['com_name']; ?>
</aside>
<i><?php echo $this->_tpl_vars['job']['job_city_one']; ?>
-<?php echo $this->_tpl_vars['job']['job_city_two']; ?>
</i>
<em><?php echo $this->_tpl_vars['job']['lastupdate']; ?>
</em>
</a>


<?php endforeach; endif; unset($_from); ?>

</div>
</section>
<section class="index_post_hot">
<header  class="index_post_hot_h1"><a href="<?php echo smarty_function_wapurl(array('url' => "m:news"), $this);?>
">最新资讯</a></header>
<div class="index_post_list">
 <?php $_from = $this->_tpl_vars['news']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['news']):
?>
<a href="<?php echo smarty_function_wapurl(array('url' => "m:news,c:show,id:".($this->_tpl_vars['news']['id'])), $this);?>
"  class="index_post_list_b">
<div class="news_list"><?php echo $this->_tpl_vars['news']['title']; ?>
</div>
</a>
<?php endforeach; endif; unset($_from); ?>

</div>
</section>

<?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => ($this->_tpl_vars['wapstyle'])."/footer.htm", 'smarty_include_vars' => array()));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?> 