<?php /* Smarty version 2.6.26, created on 2014-09-10 10:30:43
         compiled from wap/member/com/index.htm */ ?>
<?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => ($this->_tpl_vars['wap_style'])."/member/cheader.htm", 'smarty_include_vars' => array()));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?> 
<section class="wap_member">
<div class="wap_member_comp">
<span>��ã�<em><?php echo $this->_tpl_vars['username']; ?>
</em></span>
<aside><?php echo $this->_tpl_vars['company']['name']; ?>
</aside>
<i><a href="index.php?c=logout">�˳���¼</a></i>
</div>
<div class="wap_member_mrecord">
<a href="index.php?c=hr" class="wap_member_mrecord_list">����ְλ���˲ţ�<em><?php echo $this->_tpl_vars['sqnum']; ?>
</em>����</a>
<a href="index.php?c=info" class="wap_member_mrecord_list">���ƻ�������</a>
<a href="index.php?c=job" class="wap_member_mrecord_list">ְλ����<em><?php echo $this->_tpl_vars['statis']['job']; ?>
</em>����</a>
<a href="index.php?c=com" class="wap_member_mrecord_list">�˻�����</a>
<a href="index.php?c=password" class="wap_member_mrecord_list wap_member_mrecord_list_no">��������</a>
</div>

</section>

<?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => ($this->_tpl_vars['wap_style'])."/footer.htm", 'smarty_include_vars' => array()));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?> 