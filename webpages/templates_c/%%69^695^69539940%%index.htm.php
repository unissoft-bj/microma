<?php /* Smarty version 2.6.26, created on 2014-10-04 00:38:15
         compiled from wap/member/user/index.htm */ ?>
<?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => ($this->_tpl_vars['wap_style'])."/member/header.htm", 'smarty_include_vars' => array()));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?> 
<div class="wap_member_Searcher">
<a href="index.php?c=sq" class="wap_member_Searcher_sq wap_member_Searcher_sq_line"><span>职位申请记录<i><?php echo $this->_tpl_vars['statis']['sq_jobnum']; ?>
</i></span></a>
<a href="index.php?c=collect"class="wap_member_Searcher_sq"><span>职位收藏夹<i class="wap_member_Searcher_sc"><?php echo $this->_tpl_vars['statis']['fav_jobnum']; ?>
</i></span></a>
</div>
<div class="wap_member_mrecord">
<a href="index.php?c=addresume" class="wap_member_mrecord_list">创建简历</a>
<a href="index.php?c=resume" class="wap_member_mrecord_list">简历管理（<em><?php echo $this->_tpl_vars['statis']['resume_num']; ?>
</em>份）</a>
<a href="index.php?c=invite" class="wap_member_mrecord_list">面试邀请（<em><?php echo $this->_tpl_vars['yqnum']; ?>
</em>条）</a>
<a href="index.php?c=look" class="wap_member_mrecord_list">谁看过我的简历（<em><?php echo $this->_tpl_vars['looknum']; ?>
</em>条）</a>
<a href="index.php?c=password" class="wap_member_mrecord_list wap_member_mrecord_list_no">更改密码</a>
</div>

</section>

<?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => ($this->_tpl_vars['wap_style'])."/footer.htm", 'smarty_include_vars' => array()));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?> 