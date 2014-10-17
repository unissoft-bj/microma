<?php /* Smarty version 2.6.26, created on 2014-09-11 01:51:24
         compiled from wap/member/user/sq.htm */ ?>
<?php require_once(SMARTY_CORE_DIR . 'core.load_plugins.php');
smarty_core_load_plugins(array('plugins' => array(array('function', 'wapurl', 'wap/member/user/sq.htm', 8, false),array('modifier', 'date_format', 'wap/member/user/sq.htm', 10, false),)), $this); ?>
<?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => ($this->_tpl_vars['wap_style'])."/member/header.htm", 'smarty_include_vars' => array()));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?> 
<div class="wap_member_comp_h1 mt10"><span>申请的职位</span></div>

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
<em class="user_size"><?php echo $this->_tpl_vars['v']['city']; ?>
</em>
<div class="user_Browse"><?php if ($this->_tpl_vars['v']['is_browse'] == 2): ?><span class="Already_Browse">对方已浏览简历</span>
<?php else: ?><span class="Already_Browse_no">对方未浏览简历<span><?php endif; ?>
<a href="index.php?c=sq&del=<?php echo $this->_tpl_vars['v']['id']; ?>
" class="user_Browse_Delete">删除</a></div>
</div>
<?php endforeach; else: ?>
暂无申请记录
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