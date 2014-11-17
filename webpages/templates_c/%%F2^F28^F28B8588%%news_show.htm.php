<?php /* Smarty version 2.6.26, created on 2014-11-14 19:29:36
         compiled from wap/news_show.htm */ ?>
<?php require_once(SMARTY_CORE_DIR . 'core.load_plugins.php');
smarty_core_load_plugins(array('plugins' => array(array('modifier', 'date_format', 'wap/news_show.htm', 5, false),)), $this); ?>
<?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => ($this->_tpl_vars['wapstyle'])."/header_cont.htm", 'smarty_include_vars' => array()));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>
<div class="wap_tit">
  <h1><?php echo $this->_tpl_vars['row']['title']; ?>
</h1>
</div>
<div class="news_cont_ms"><?php echo ((is_array($_tmp=$this->_tpl_vars['row']['datetime'])) ? $this->_run_mod_handler('date_format', true, $_tmp, "%Y-%m-%d") : smarty_modifier_date_format($_tmp, "%Y-%m-%d")); ?>
 来源：<?php echo $this->_tpl_vars['row']['source']; ?>
 点击：<span id="click"><script language="javascript" src="<?php echo $this->_tpl_vars['config']['sy_weburl']; ?>
/index.php?m=index&c=GetHits&id=<?php echo $this->_tpl_vars['row']['id']; ?>
"><?php echo $this->_tpl_vars['row']['hits']; ?>
</script></span> 次 </div>
<div class="wap_news_cont">
  <div class="wap_txt link_lan"> <?php echo $this->_tpl_vars['row']['content']; ?>
 </div>
</div>
<?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => ($this->_tpl_vars['wapstyle'])."/footer.htm", 'smarty_include_vars' => array()));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>