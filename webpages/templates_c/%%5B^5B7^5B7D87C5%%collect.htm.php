<?php /* Smarty version 2.6.26, created on 2014-09-11 01:51:27
         compiled from wap/member/user/collect.htm */ ?>
<?php require_once(SMARTY_CORE_DIR . 'core.load_plugins.php');
smarty_core_load_plugins(array('plugins' => array(array('function', 'wapurl', 'wap/member/user/collect.htm', 8, false),array('modifier', 'date_format', 'wap/member/user/collect.htm', 10, false),)), $this); ?>
<?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => ($this->_tpl_vars['wap_style'])."/member/header.htm", 'smarty_include_vars' => array()));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?> 
<div class="wap_member_comp_h1 mt10"><span>收藏的职位</span></div>

<div class="wap_member_post_list">

<?php $_from = $this->_tpl_vars['rows']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['v']):
?>
<div class="wap_member_post_list_b">
<h3><a href="<?php echo $this->_tpl_vars['config']['sy_weburl']; ?>
/wap/<?php echo smarty_function_wapurl(array('m' => 'com','url' => "c:view,id:".($this->_tpl_vars['v']['job_id'])), $this);?>
" class="wap_m_post_user"><?php echo $this->_tpl_vars['v']['job_name']; ?>
</a></h3>
<aside><?php echo $this->_tpl_vars['v']['com_name']; ?>
</aside>
<i ><?php echo ((is_array($_tmp=$this->_tpl_vars['v']['datetime'])) ? $this->_run_mod_handler('date_format', true, $_tmp, "%Y-%m-%d") : smarty_modifier_date_format($_tmp, "%Y-%m-%d")); ?>
</i>
<em class="user_size"><a href="index.php?c=collect&del=<?php echo $this->_tpl_vars['v']['id']; ?>
">删除</a></em>
</div>
<?php endforeach; else: ?>
暂无收藏职位
<?php endif; unset($_from); ?>
</div>
</section>
<div class="pages"> <?php echo $this->_tpl_vars['pagenav']; ?>
</div>
<?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => ($this->_tpl_vars['wap_style'])."/footer.htm", 'smarty_include_vars' => array()));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?> 