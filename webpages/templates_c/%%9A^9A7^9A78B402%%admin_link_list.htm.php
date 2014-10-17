<?php /* Smarty version 2.6.26, created on 2014-09-11 09:15:51
         compiled from admin/admin_link_list.htm */ ?>
<?php require_once(SMARTY_CORE_DIR . 'core.load_plugins.php');
smarty_core_load_plugins(array('plugins' => array(array('function', 'seacrh_url', 'admin/admin_link_list.htm', 54, false),array('modifier', 'date_format', 'admin/admin_link_list.htm', 92, false),)), $this); ?>
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
  <h6>友情链接列表</h6>
  <div class="infoboxp_right"> 
    <a href="index.php?m=link&c=add" class="infoboxp_tj">添加链接</a>
</div>
</div>

<div class="company_job">
  <div class="company_job_list_h1">
    <form action="index.php" name="myform" method="get">
      <span class="company_m6" style="float:left; margin-left:10px;">
      <input name="m" value="link" type="hidden"/>
	   <span class="company_s_l"> 检索类型：</span> <span class="company_fl">
        <select name="type">
		  <option value="">&nbsp;不&nbsp;&nbsp;限</option>
          <option value="1" <?php if ($this->_tpl_vars['get_type']['type'] == '1'): ?> selected="selected" <?php endif; ?>>文字链接</option>
          <option value="2" <?php if ($this->_tpl_vars['get_type']['type'] == '2'): ?> selected="selected" <?php endif; ?>>图片链接</option>
        </select>
        </span>
      <input class="company_job_text"  type="text" name="s_news_id"  size="25"/ style="float:left">
      <input class="company_job_new_sub"  type="submit" name="news_search" value="检索链接"/>
      &nbsp; </span><span class="company_job_a"><a href="index.php?m=link&state=2"  class="company_job_bg2"><em>未审核链接</em></a></span> <span class="company_job_a"><a href="index.php?m=link&state=1"  class="company_job_bg1"><em>已审核链接</em></a></span> <span class="company_job_a"><a href="index.php?m=link"  class="company_job_all"><em>全部链接</em></a></span>
    </form>
  </div>
</div>
<div class="table-list">
  <div class="admin_table_border">
    <iframe id="supportiframe"  name="supportiframe" onload="returnmessage('supportiframe');" style="display:none"></iframe>
    <form action="index.php?m=link&c=del" name="myform" method="post" id='myform' target="supportiframe">
    <input type="hidden" name="pytoken" id='pytoken' value="<?php echo $this->_tpl_vars['pytoken']; ?>
">
      <table width="100%">
        <thead>
          <tr class="admin_table_top">
            <th><label for="chkall">
                <input type="checkbox" id='chkAll' onclick='CheckAll(this.form)' />
              </label></th>
            
            <th>
			<?php if ($_GET['t'] == 'id' && $_GET['order'] == 'asc'): ?>
			<a href="<?php echo seacrh_url(array('order' => 'desc','t' => 'id','m' => 'link','untype' => "order,t"), $this);?>
">编号<img src="images/sanj.jpg"/></a>
            <?php else: ?>
            <a href="<?php echo seacrh_url(array('order' => 'asc','t' => 'id','m' => 'link','untype' => "order,t"), $this);?>
">编号<img src="images/sanj2.jpg"/></a>
            <?php endif; ?>
			</th>
            <th align="left">链接标题</th>
            <th align="left">链接地址</th>
            <th align="left">跨域名使用范围</th>
            
            <th>
			<?php if ($_GET['t'] == 'link_time' && $_GET['order'] == 'asc'): ?>
			<a href="<?php echo seacrh_url(array('order' => 'desc','t' => 'link_time','m' => 'link','untype' => "order,t"), $this);?>
">发布时间<img src="images/sanj.jpg"/></a>
            <?php else: ?>
            <a href="<?php echo seacrh_url(array('order' => 'asc','t' => 'link_time','m' => 'link','untype' => "order,t"), $this);?>
">发布时间<img src="images/sanj2.jpg"/></a>
            <?php endif; ?>
			</th>
            <th>类型</th>
            
            <th>
			<?php if ($_GET['t'] == 'link_sorting' && $_GET['order'] == 'asc'): ?>
			<a href="<?php echo seacrh_url(array('order' => 'desc','t' => 'link_sorting','m' => 'link','untype' => "order,t"), $this);?>
">排序<img src="images/sanj.jpg"/></a>
            <?php else: ?>
            <a href="<?php echo seacrh_url(array('order' => 'asc','t' => 'link_sorting','m' => 'link','untype' => "order,t"), $this);?>
">排序<img src="images/sanj2.jpg"/></a>
            <?php endif; ?>
			</th>
            <th>状态</th>
            <th class="admin_table_th_bg">操作</th>
          </tr>
        </thead>
        <tbody>
        
        <?php $_from = $this->_tpl_vars['linkrows']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['key'] => $this->_tpl_vars['v']):
?>
        <tr align="center">
          <td><input type="checkbox" value="<?php echo $this->_tpl_vars['v']['id']; ?>
" name='del[]' onclick='unselectall()' rel="del_chk" /></td>
          <td><span><?php echo $this->_tpl_vars['v']['id']; ?>
</span></td>
          <td class="ud" align="left"><?php echo $this->_tpl_vars['v']['link_name']; ?>
</td>
          <td class="od" align="left"><a href="<?php echo $this->_tpl_vars['v']['link_url']; ?>
" target="_blank"><?php echo $this->_tpl_vars['v']['link_url']; ?>
</a></td>
          <td class="ud" align="left"><?php echo $this->_tpl_vars['v']['host']; ?>
</td>
          <td><?php echo ((is_array($_tmp=$this->_tpl_vars['v']['link_time'])) ? $this->_run_mod_handler('date_format', true, $_tmp, "%Y-%m-%d") : smarty_modifier_date_format($_tmp, "%Y-%m-%d")); ?>
</td>
          <td> <?php if ($this->_tpl_vars['v']['link_type'] == 1): ?>文字链接<?php else: ?>图片链接<?php endif; ?> </td>
          <td><?php echo $this->_tpl_vars['v']['link_sorting']; ?>
</td>
          <td> <?php if ($this->_tpl_vars['v']['link_state'] != 1): ?><font color="red">未审核</font><?php else: ?><font color="blue">已审核</font><?php endif; ?> </td>
          <td><div class="admin_Operating_c" id="list_<?php echo $this->_tpl_vars['v']['id']; ?>
" aid="<?php echo $this->_tpl_vars['v']['id']; ?>
">
              <div class="admin_Operating">操作</div>
              <div class="admin_Operating_list admin_Operating_down" id="list<?php echo $this->_tpl_vars['v']['id']; ?>
" style="display:none;"> <?php if ($this->_tpl_vars['v']['link_state'] != 1): ?> <a href="javascript:void(0)" onClick="layer_del('', 'index.php?m=link&c=status&yesid=<?php echo $this->_tpl_vars['v']['id']; ?>
');" class="status admin_cz_sh">审核</a> <?php else: ?> <a href="javascript:void(0)" onClick="layer_del('', 'index.php?m=link&c=status&noid=<?php echo $this->_tpl_vars['v']['id']; ?>
');" class="status admin_cz_sh">取消</a> <?php endif; ?> <a href="index.php?m=link&c=add&id=<?php echo $this->_tpl_vars['v']['id']; ?>
"class="admin_cz_bj">编辑</a> <a href="javascript:void(0)" onClick="layer_del('确定要删除？', 'index.php?m=link&c=del&id=<?php echo $this->_tpl_vars['v']['id']; ?>
');" class="admin_cz_sc">删除</a> </div>
            </div></td>
        </tr>
        <?php endforeach; endif; unset($_from); ?>
        <tr style="background: #f1f1f1;">
          <td colspan="2"><input class="admin_submit4"  type="button" name="delsub" value="删除所选"  onclick="return really('del[]')"/></td>
          <td colspan="8" class="digg"><?php echo $this->_tpl_vars['pagenav']; ?>
</td>
        </tr>
          </tbody>
        
      </table>
    </form>
  </div>
</div>
</body>
</html>