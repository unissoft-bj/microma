<?php /* Smarty version 2.6.26, created on 2014-09-11 09:17:55
         compiled from admin/admin_description.htm */ ?>
<?php require_once(SMARTY_CORE_DIR . 'core.load_plugins.php');
smarty_core_load_plugins(array('plugins' => array(array('modifier', 'date_format', 'admin/admin_description.htm', 64, false),)), $this); ?>
<!DOCTYPE html PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3.org/TR/html4/loose.dtd">
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=GBK">
<link href="images/reset.css" rel="stylesheet" type="text/css" />
<link href="images/system.css" rel="stylesheet" type="text/css" />
<link href="images/table_form.css" rel="stylesheet" type="text/css" />
<script src="<?php echo $this->_tpl_vars['config']['sy_weburl']; ?>
/js/jquery-1.8.0.min.js"></script>
<script src="<?php echo $this->_tpl_vars['config']['sy_weburl']; ?>
/js/layer/layer.min.js" language="javascript"></script>
<script src="js/admin_public.js" language="javascript"></script>
<title>后台管理</title>
</head>
<body class="body_ifm">
<div class="infoboxp">
  <div class="infoboxp_top">
    <h6>独立页面管理</h6>
    <div class="infoboxp_right">
    	<a href="index.php?m=description&c=add" class="infoboxp_tj">添加独立页面</a>
    	<a href="javascript:void(0)" onclick="layer_del('', 'index.php?m=description&c=make');" class="infoboxp_tj">生成所有</a>
    </div>
  </div>
  <div class="table-list">
    <div class="admin_table_border">
      <iframe id="supportiframe"  name="supportiframe" onload="returnmessage('supportiframe');" style="display:none"></iframe>
      <form action="index.php?m=description&c=del" name="myform" method="post" target="supportiframe" id='myform'>
      <input type="hidden" name="pytoken" id='pytoken'  value="<?php echo $this->_tpl_vars['pytoken']; ?>
">
        <table width="100%">
          <thead>
            <tr class="admin_table_top">
              <th style="width:20px;"><label for="chkall">
                  <input type="checkbox" id='chkAll'  onclick='CheckAll(this.form)'/>
                </label></th>
              
              <th>
			  <?php if ($_GET['t'] == 'id' && $_GET['order'] == 'asc'): ?>
			  <a href="index.php?m=description&order=desc&t=id">序号<img src="images/sanj.jpg"/></a>
              <?php else: ?>
              <a href="index.php?m=description&order=asc&t=id">序号<img src="images/sanj2.jpg"/></a>
              <?php endif; ?>
			  </th>
              <th>独立页名称</th>
              <th>排序</th>
              <th>左则导航</th>
              
              <th>
			  <?php if ($_GET['t'] == 'ctime' && $_GET['order'] == 'asc'): ?>
			  <a href="index.php?m=description&order=desc&t=ctime">添加时间<img src="images/sanj.jpg"/></a>
              <?php else: ?>
              <a href="index.php?m=description&order=asc&t=ctime">添加时间<img src="images/sanj2.jpg"/></a>
              <?php endif; ?>
			  </th>
              <th class="admin_table_th_bg"  style="width:80px;">操作</th>
            </tr>
          </thead>
          <tbody>
          
          <?php $_from = $this->_tpl_vars['descrows']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['key'] => $this->_tpl_vars['v']):
?>
          <tr align="center">
            <td><input type="checkbox" value="<?php echo $this->_tpl_vars['v']['id']; ?>
"  name='del[]' onclick='unselectall()' rel="del_chk" /></td>
            <td align="left" class="td1" style="text-align:center;"><span><?php echo $this->_tpl_vars['v']['id']; ?>
</span></td>
            <td class="od"><?php echo $this->_tpl_vars['v']['name']; ?>
</td>
            <td class="od"><?php echo $this->_tpl_vars['v']['sort']; ?>
</td>
            <td class="od"><?php if ($this->_tpl_vars['v']['is_nav'] == 1): ?>显示<?php else: ?>不显示<?php endif; ?></td>
            <td class="td"><?php echo ((is_array($_tmp=$this->_tpl_vars['v']['ctime'])) ? $this->_run_mod_handler('date_format', true, $_tmp, "%Y-%m-%d") : smarty_modifier_date_format($_tmp, "%Y-%m-%d")); ?>
</td>
            <td><div class="admin_Operating_c" id="list_<?php echo $this->_tpl_vars['v']['id']; ?>
" aid="<?php echo $this->_tpl_vars['v']['id']; ?>
">
                <div class="admin_Operating">操作</div>
                <div class="admin_Operating_list admin_Operating_down" id="list<?php echo $this->_tpl_vars['v']['id']; ?>
" style="display:none;">
                <a href="<?php echo $this->_tpl_vars['config']['sy_weburl']; ?>
/<?php echo $this->_tpl_vars['v']['url']; ?>
" target="_blank"  class="admin_cz_yl">预览</a>
                <a href="javascript:void(0)" onClick="layer_del('', 'index.php?m=description&c=make&id=<?php echo $this->_tpl_vars['v']['id']; ?>
');"><img src="images/iconv/button_properties.png" alt="生成" title="生成"/>生成</a>
                <a href="index.php?m=description&c=add&id=<?php echo $this->_tpl_vars['v']['id']; ?>
" class="admin_cz_bj">编辑</a>
                <a href="javascript:void(0)" onClick="layer_del('确定要删除？', 'index.php?m=description&c=del&id=<?php echo $this->_tpl_vars['v']['id']; ?>
');" class="admin_cz_sc">删除</a>
                </div>
              </div></td>
          </tr>
          <?php endforeach; endif; unset($_from); ?>
          <tr style="background:#f1f1f1;">
            <td colspan="3" ><input class="admin_submit4" type="button" name="delsub" value="删除所选" onClick="return really('del[]')" /></td>
            <td colspan="4" class="digg"><?php echo $this->_tpl_vars['pagenav']; ?>
</td>
          </tr>
            </tbody>
          
        </table>
      </form>
    </div>
  </div>
</div>
</body>
</html>