<?php /* Smarty version 2.6.26, created on 2014-11-13 21:11:01
         compiled from wap/member/com/com.htm */ ?>
<?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => ($this->_tpl_vars['wap_style'])."/member/cheader.htm", 'smarty_include_vars' => array()));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?> 
<section class="wap_member">
<div class="wap_member_comp_h1"><span>账户管理</span></div>
<div class="wap_member_Receive">
<div class="wap_member_pay">账户余额：<em><?php echo $this->_tpl_vars['statis']['pay']; ?>
</em> 元</div>
<div class="wap_member_pay_c">会员级别：<?php echo $this->_tpl_vars['statis']['rating_name']; ?>
</div> 
<div class="wap_member_pay_c">您的<?php echo $this->_tpl_vars['config']['integral_pricename']; ?>
：<?php echo $this->_tpl_vars['statis']['integral']; ?>
<?php echo $this->_tpl_vars['config']['integral_priceunit']; ?>
</div>
</div>

</section>

<?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => ($this->_tpl_vars['wapstyle'])."/footer.htm", 'smarty_include_vars' => array()));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?> 