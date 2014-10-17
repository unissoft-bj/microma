<?php /* Smarty version 2.6.26, created on 2014-09-11 09:14:36
         compiled from admin/admin_q_class_list.htm */ ?>
<?php require_once(SMARTY_CORE_DIR . 'core.load_plugins.php');
smarty_core_load_plugins(array('plugins' => array(array('modifier', 'date_format', 'admin/admin_q_class_list.htm', 55, false),)), $this); ?>
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
<h6>问答类别列表</h6>
<div class="infoboxp_right"> 
<a href="index.php?m=question_class&c=add&pid=<?php echo $this->_tpl_vars['pid']; ?>
" class="infoboxp_tj">添加类别</a></div>
</div>


<div class="company_job">
  <div class="company_job_list_h1">
	
		<form action="index.php" name="myform" method="get">  <span class="company_m6" style="float:left; margin-left:10px;">
		<input name="m" value="question_class" type="hidden"/>
		<input name="pid" value="<?php echo $this->_tpl_vars['pid']; ?>
" type="hidden"/>
    	<input class="input-text" type="text" name="name"  size="25"/> <input class="admin_submit4" type="submit" name="news_search" value="检索类别"/>&nbsp;
         </span>
        </form>
	</div>
</div>
<div class="table-list admin_table_border">
<iframe id="supportiframe"  name="supportiframe" onload="returnmessage('supportiframe');" style="display:none"></iframe>

<form action="index.php" name="myform" method="get" target="supportiframe" id='myform'>
<input name="m" value="question_class" type="hidden"/>
<input name="c" value="del" type="hidden"/>
<table width="100%">
	<thead>
		<tr>
		     <th style="width:20px;"><label for="chkall"><input type="checkbox" id='chkAll'  onclick='CheckAll(this.form)'/></label></th>
			<th><a href="index.php?m=question_class&order=<?php echo $this->_tpl_vars['order']; ?>
&t=id">ID<?php if ($this->_tpl_vars['order'] == 'desc'): ?><img src="images/sanj.jpg"/><?php else: ?><img src="images/sanj2.jpg"/><?php endif; ?></a></th>
			<th align="left" style="width:650px;">标题</th>
			<th>发布时间</th>
			<th>操作</th>
		</tr>
	</thead>
	<tbody>
    <?php $_from = $this->_tpl_vars['q_class']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['v']):
?>
    <tr align="center">
	    <td><input type="checkbox" value="<?php echo $this->_tpl_vars['v']['id']; ?>
"  name='del[]' onclick='unselectall()' rel="del_chk" /></td>
    	<td align="left" class="td1" style="text-align:center;"><span><?php echo $this->_tpl_vars['v']['id']; ?>
</span></td>
   	 	<td class="od" align="left"><?php echo $this->_tpl_vars['v']['name']; ?>
</td>
		<td class="td"><?php echo ((is_array($_tmp=$this->_tpl_vars['v']['add_time'])) ? $this->_run_mod_handler('date_format', true, $_tmp, "%Y-%m-%d") : smarty_modifier_date_format($_tmp, "%Y-%m-%d")); ?>
</td>
    	<td> <div class="admin_Operating_c" id="list_<?php echo $this->_tpl_vars['v']['id']; ?>
" aid="<?php echo $this->_tpl_vars['v']['id']; ?>
">
				<div class="admin_Operating">操作</div>
				<div class="admin_Operating_list admin_Operating_down" id="list<?php echo $this->_tpl_vars['v']['id']; ?>
" style="display:none;"><?php if ($this->_tpl_vars['v']['pid'] == '0'): ?><a href="index.php?m=question_class&pid=<?php echo $this->_tpl_vars['v']['id']; ?>
">管理子类</a> <?php endif; ?>
        <a href="index.php?m=question_class&c=add&id=<?php echo $this->_tpl_vars['v']['id']; ?>
" class="status admin_cz_sh" >编辑</a>  
		<a href="javascript:void(0)" onClick="layer_del('确定要删除？', 'index.php?m=question_class&c=del&id=<?php echo $this->_tpl_vars['v']['id']; ?>
');" class="admin_cz_sc">删除</a></div></div></td>
  </tr>
  <?php endforeach; endif; unset($_from); ?>
  <tr style="background:#f1f1f1;">
    <td colspan="3" ><input class="admin_submit4" type="button" name="delsub" value="删除所选" onClick="return really('del[]')" /></td>
    <td colspan="2" class="digg"><?php echo $this->_tpl_vars['pagenav']; ?>
</td>
  </tr>
  </tbody>
  </table>
  <input type="hidden" name="pytoken"  id='pytoken' value="<?php echo $this->_tpl_vars['pytoken']; ?>
">
</form>
</div>
</div>
</body>
</html>