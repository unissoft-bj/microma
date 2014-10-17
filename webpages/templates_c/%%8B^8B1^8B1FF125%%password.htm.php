<?php /* Smarty version 2.6.26, created on 2014-09-11 02:17:10
         compiled from wap/member/user/password.htm */ ?>
<?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => ($this->_tpl_vars['wap_style'])."/member/header.htm", 'smarty_include_vars' => array()));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?> 
<div class="wap_member_comp_h1 mt10"><span>更改密码</span></div>
<form action="index.php?c=password" method="post">
<input name="oldpassword" type="password" class="input-common placeholder" placeholder="旧密码" />
<input name="password1" type="password" class="input-common placeholder" placeholder="新密码" />
<input name="password2" type="password" class="input-common placeholder" placeholder="确认密码" />
<input type="submit" name="submit" value="提交" class="btn-large" />
</form>

</section>

<?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => ($this->_tpl_vars['wap_style'])."/footer.htm", 'smarty_include_vars' => array()));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?> 