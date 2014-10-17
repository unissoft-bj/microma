<?php /* Smarty version 2.6.26, created on 2014-09-11 02:16:08
         compiled from wap/user.htm */ ?>
<?php require_once(SMARTY_CORE_DIR . 'core.load_plugins.php');
smarty_core_load_plugins(array('plugins' => array(array('function', 'wapurl', 'wap/user.htm', 46, false),)), $this); ?>
<?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => ($this->_tpl_vars['wapstyle'])."/header_cont.htm", 'smarty_include_vars' => array()));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?> 
<div class="fm">
<form action="index.php" method="get">
<input type="hidden" name="m" value="user" />
<div class="seach_post">
<input type="text" name="keyword" value="<?php echo $_GET['keyword']; ?>
" class="seach_post_text placeholder"  placeholder="请输入关键字"  />
</div>
<div class="seach_post_sel">
<select name="hy" class="seach_post_select">
<option value="">选择行业</option>
<?php $_from = $this->_tpl_vars['industry_index']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['v']):
?>
<option value="<?php echo $this->_tpl_vars['v']; ?>
" <?php if ($_GET['hy'] == $this->_tpl_vars['v']): ?>selected<?php endif; ?>><?php echo $this->_tpl_vars['industry_name'][$this->_tpl_vars['v']]; ?>
</option>
<?php endforeach; endif; unset($_from); ?>
</select>
</div>
<div class="seach_post_sel">
<select name="job1" class="seach_post_select">
<option value="">选择职位类别</option>
<?php $_from = $this->_tpl_vars['job_index']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['v']):
?>
<option value="<?php echo $this->_tpl_vars['v']; ?>
"  <?php if ($_GET['job1'] == $this->_tpl_vars['v']): ?>selected<?php endif; ?>><?php echo $this->_tpl_vars['job_name'][$this->_tpl_vars['v']]; ?>
</option>

<?php endforeach; endif; unset($_from); ?>
</select>
</div>
<div class="seach_post_sel">
<input type="submit" value="搜索"class="seach_post_sub" />
</div>
</form>
</div>











<div class="main">
      <?php $_from = $this->_tpl_vars['user']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['user']):
?>
      

    
    <a href="<?php echo smarty_function_wapurl(array('url' => "m:user,c:show,id:".($this->_tpl_vars['user']['id'])), $this);?>
" class="index_post_list_b index_post_list_b_com">
<h3><?php echo $this->_tpl_vars['user']['username_n']; ?>
</h3>
<aside><?php echo $this->_tpl_vars['user']['job_post_n']; ?>
 </aside>
<i class="user_size"> <?php if ($this->_tpl_vars['user']['age'] == 0): ?>保密<?php else: ?><?php echo $this->_tpl_vars['user']['age']; ?>
岁<?php endif; ?></i>

</a>
    
    
    <?php endforeach; endif; unset($_from); ?> 
</div>



<div class="pages"> <?php echo $this->_tpl_vars['pagenav']; ?>
</div>


<div>
<?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => ($this->_tpl_vars['wapstyle'])."/footer.htm", 'smarty_include_vars' => array()));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?> 