<?php /* Smarty version 2.6.26, created on 2014-09-10 10:21:23
         compiled from admin/admin_resume.htm */ ?>
<?php require_once(SMARTY_CORE_DIR . 'core.load_plugins.php');
smarty_core_load_plugins(array('plugins' => array(array('function', 'url', 'admin/admin_resume.htm', 93, false),array('modifier', 'date_format', 'admin/admin_resume.htm', 99, false),)), $this); ?>
<!DOCTYPE html PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3.org/TR/html4/loose.dtd">
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=gb2312">
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
    <h6>简历列表</h6>
    <div class="infoboxp_right">
		<a href="index.php?m=admin_resume&c=addresume" class="infoboxp_tj">添加简历</a>
	</div>
  </div>
  <div class="company_job">
    <div class="company_job_list_h1"> <span class="company_m6" style="float:left; margin-left:10px;">
      <form action="index.php" name="myform" method="get">
        <input name="m" value="admin_resume" type="hidden"/>
		<span  style="margin-left:10px;">检索类型：</span>
		<select name="salary_n">
			<option value="">待遇要求</option>
			<?php $_from = $this->_tpl_vars['userdata']['user_salary']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['salary']):
?>
			<option value="<?php echo $this->_tpl_vars['salary']; ?>
" <?php if ($this->_tpl_vars['get_type']['salary_n'] == $this->_tpl_vars['salary']): ?> selected="selected" <?php endif; ?> ><?php echo $this->_tpl_vars['userclass_name'][$this->_tpl_vars['salary']]; ?>
</option>
            <?php endforeach; endif; unset($_from); ?>
		</select>
		<select name="type_n">
			<option value="">工作性质</option>
			<?php $_from = $this->_tpl_vars['userdata']['user_type']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['type']):
?>
			<option value="<?php echo $this->_tpl_vars['type']; ?>
" <?php if ($this->_tpl_vars['get_type']['type_n'] == $this->_tpl_vars['type']): ?> selected="selected" <?php endif; ?>><?php echo $this->_tpl_vars['userclass_name'][$this->_tpl_vars['type']]; ?>
</option>
            <?php endforeach; endif; unset($_from); ?>
		</select>
		<select name="report_n">
			<option value="">到岗时间</option>
			<?php $_from = $this->_tpl_vars['userdata']['user_report']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['report']):
?>
			<option value="<?php echo $this->_tpl_vars['report']; ?>
" <?php if ($this->_tpl_vars['get_type']['report_n'] == $this->_tpl_vars['report']): ?> selected="selected" <?php endif; ?> ><?php echo $this->_tpl_vars['userclass_name'][$this->_tpl_vars['report']]; ?>
</option>
            <?php endforeach; endif; unset($_from); ?>
		</select>
         <input class="company_job_text" type="text" name="s_news_id"  size="25"/>
        <input class="company_job_new_sub"   type="submit" name="news_search" value="检索简历"/>
      </form>
      </span> </div>
  </div>
  <div class="table-list">
    <div class="admin_table_border">
      <iframe id="supportiframe"  name="supportiframe" onload="returnmessage('supportiframe');" style="display:none"></iframe>
      <form action="index.php" target="supportiframe" name="myform" method="get" id='myform'>
        <input name="m" value="admin_resume" type="hidden"/>
        <input name="c" value="del" type="hidden"/>
        <table width="100%">
          <thead>
            <tr class="admin_table_top">
              <th style="width:20px;"><label for="chkall">
                  <input type="checkbox" id='chkAll'  onclick='CheckAll(this.form)'/>
                </label></th>

              <th width="60">
			  <?php if ($_GET['t'] == 'id' && $_GET['order'] == 'asc'): ?>
			  <a href="index.php?m=admin_resume&order=desc&t=id">简历ID<img src="images/sanj.jpg"/></a>
              <?php else: ?>
              <a href="index.php?m=admin_resume&order=asc&t=id">简历ID<img src="images/sanj2.jpg"/></a>
              <?php endif; ?>
			  </th>
              <th align="left" width="150">简历名称</th>
              <th align="left" width="200">意向职位</th>
              <th>工作地点</th>
              <th>待遇要求</th>
              <th>工作性质</th>
              <th>到岗时间</th>

              <th>
			  <?php if ($_GET['t'] == 'time' && $_GET['order'] == 'asc'): ?>
			  <a href="index.php?m=admin_resume&order=desc&t=time">更新时间<img src="images/sanj.jpg"/></a>
              <?php else: ?>
              <a href="index.php?m=admin_resume&order=asc&t=time">更新时间<img src="images/sanj2.jpg"/></a>
              <?php endif; ?>
			  </th>
              <th class="admin_table_th_bg">操作</th>
            </tr>
          </thead>
          <tbody>

          <?php $_from = $this->_tpl_vars['rows']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['v']):
?>
          <tr align="center">
            <td><input type="checkbox" value="<?php echo $this->_tpl_vars['v']['id']; ?>
-<?php echo $this->_tpl_vars['v']['uid']; ?>
"  name='del[]' onclick='unselectall()' rel="del_chk" /></td>
            <td align="left" class="td1" style="text-align:center;"><span><?php echo $this->_tpl_vars['v']['id']; ?>
</span></td>
            <td class="ud" align="left" ><a href="../<?php echo smarty_function_url(array('m' => 'resume','url' => "id:".($this->_tpl_vars['v']['id']).",look:admin"), $this);?>
" target="_blank"><?php echo $this->_tpl_vars['v']['name']; ?>
</a></td>
            <td class="od" align="left"><?php echo $this->_tpl_vars['v']['job_post_n']; ?>
(<a href="javascript:void(0)" class="job_name"  v="<?php echo $this->_tpl_vars['v']['job_class_name']; ?>
"><font color="red">共<?php echo $this->_tpl_vars['v']['jobnum']; ?>
个</font></a>)</td>
            <td class="gd"><?php echo $this->_tpl_vars['v']['cityid_n']; ?>
</td>
            <td class="td"><?php echo $this->_tpl_vars['v']['salary_n']; ?>
</td>
            <td><?php echo $this->_tpl_vars['v']['type_n']; ?>
</td>
            <td><?php echo $this->_tpl_vars['v']['report_n']; ?>
</td>
            <td><?php echo ((is_array($_tmp=$this->_tpl_vars['v']['lastupdate'])) ? $this->_run_mod_handler('date_format', true, $_tmp, "%Y-%m-%d") : smarty_modifier_date_format($_tmp, "%Y-%m-%d")); ?>
</td>
            <td><div class="admin_Operating_c" id="list_<?php echo $this->_tpl_vars['v']['id']; ?>
" aid="<?php echo $this->_tpl_vars['v']['id']; ?>
">
				<div class="admin_Operating">操作</div>
				<div class="admin_Operating_list admin_Operating_down" id="list<?php echo $this->_tpl_vars['v']['id']; ?>
" style="display:none;">
				<a href="../<?php echo smarty_function_url(array('m' => 'resume','url' => "id:".($this->_tpl_vars['v']['id']).",look:admin"), $this);?>
" target="_blank" class="admin_cz_yl">预览</a>
				<a href="index.php?m=admin_resume&c=saveresume&uid=<?php echo $this->_tpl_vars['v']['uid']; ?>
&e=<?php echo $this->_tpl_vars['v']['id']; ?>
" class="admin_cz_bj">编辑</a>
				 <a href="javascript:void(0)"  onclick="layer_del('确定要删除？', 'index.php?m=admin_resume&c=del&id=<?php echo $this->_tpl_vars['v']['id']; ?>
-<?php echo $this->_tpl_vars['v']['uid']; ?>
');"class="admin_cz_sc">删除</a></div></div></td>
          </tr>
          <?php endforeach; endif; unset($_from); ?>
          <tr style="background:#f1f1f1;">
            <td colspan="3" ><input class="admin_submit4" type="button" name="delsub" value="删除所选" onClick="return really('del[]')" /></td>
            <td colspan="7" class="digg"><?php echo $this->_tpl_vars['pagenav']; ?>
</td>
          </tr>
            </tbody>

        </table>
		<input type="hidden" name="pytoken"  id='pytoken' value="<?php echo $this->_tpl_vars['pytoken']; ?>
">
      </form>
    </div>
  </div>
</div>
<script>
$(".job_name").hover(function(){
	var job_name=$(this).attr('v');
	if($.trim(job_name)!=''){
		layer.tips(job_name, this, {guide: 1, style: ['background-color:#F26C4F; color:#fff;top:-7px', '#F26C4F']});
	}
},function(){
	var job_name=$(this).attr('v');
	if($.trim(job_name)!=''){
		layer.closeTips();
	}
});
</script>
</body>
</html>