<?php /* Smarty version 2.6.26, created on 2014-10-04 17:36:06
         compiled from wap/firm.htm */ ?>
<?php require_once(SMARTY_CORE_DIR . 'core.load_plugins.php');
smarty_core_load_plugins(array('plugins' => array(array('function', 'wapurl', 'wap/firm.htm', 26, false),array('modifier', 'mb_substr', 'wap/firm.htm', 27, false),)), $this); ?>
<?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => ($this->_tpl_vars['wapstyle'])."/header_cont.htm", 'smarty_include_vars' => array()));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>
<div class="fm">
  <form action="index.php" method="get">
    <input type="hidden" name="m" value="firm" />
    <div class="seach_post">
      <input type="text" name="keyword" value="<?php echo $_GET['keyword']; ?>
"  class="seach_post_text placeholder" placeholder="请输入关键字/职位/地点搜索" />
     
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
<input type="submit" value="搜索"class="seach_post_sub" />
</div>
  </form>
</div>
<section>
  <div class="main"> <?php $_from = $this->_tpl_vars['list']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['list']):
?> <a href="<?php echo smarty_function_wapurl(array('url' => "m:firm,c:show,id:".($this->_tpl_vars['list']['uid'])), $this);?>
"class="index_post_list_b index_post_list_b_com">
    <h3><?php echo ((is_array($_tmp=$this->_tpl_vars['list']['name'])) ? $this->_run_mod_handler('mb_substr', true, $_tmp, 0, 12, 'gbk') : mb_substr($_tmp, 0, 12, 'gbk')); ?>
 </h3>
    <i><?php echo $this->_tpl_vars['list']['job_city_one']; ?>
-<?php echo $this->_tpl_vars['list']['job_city_two']; ?>
</i> </a> <?php endforeach; endif; unset($_from); ?> </div>
</section>
<div class="pages"> <?php echo $this->_tpl_vars['pagenav']; ?>
</div>
<div>
<?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => ($this->_tpl_vars['wapstyle'])."/footer.htm", 'smarty_include_vars' => array()));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?> 