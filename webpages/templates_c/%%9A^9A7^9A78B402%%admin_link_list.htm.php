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
<title>��̨����</title>
</head>
<body class="body_ifm">
<div class="infoboxp">
<div class="infoboxp_top">
  <h6>���������б�</h6>
  <div class="infoboxp_right"> 
    <a href="index.php?m=link&c=add" class="infoboxp_tj">�������</a>
</div>
</div>

<div class="company_job">
  <div class="company_job_list_h1">
    <form action="index.php" name="myform" method="get">
      <span class="company_m6" style="float:left; margin-left:10px;">
      <input name="m" value="link" type="hidden"/>
	   <span class="company_s_l"> �������ͣ�</span> <span class="company_fl">
        <select name="type">
		  <option value="">&nbsp;��&nbsp;&nbsp;��</option>
          <option value="1" <?php if ($this->_tpl_vars['get_type']['type'] == '1'): ?> selected="selected" <?php endif; ?>>��������</option>
          <option value="2" <?php if ($this->_tpl_vars['get_type']['type'] == '2'): ?> selected="selected" <?php endif; ?>>ͼƬ����</option>
        </select>
        </span>
      <input class="company_job_text"  type="text" name="s_news_id"  size="25"/ style="float:left">
      <input class="company_job_new_sub"  type="submit" name="news_search" value="��������"/>
      &nbsp; </span><span class="company_job_a"><a href="index.php?m=link&state=2"  class="company_job_bg2"><em>δ�������</em></a></span> <span class="company_job_a"><a href="index.php?m=link&state=1"  class="company_job_bg1"><em>���������</em></a></span> <span class="company_job_a"><a href="index.php?m=link"  class="company_job_all"><em>ȫ������</em></a></span>
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
">���<img src="images/sanj.jpg"/></a>
            <?php else: ?>
            <a href="<?php echo seacrh_url(array('order' => 'asc','t' => 'id','m' => 'link','untype' => "order,t"), $this);?>
">���<img src="images/sanj2.jpg"/></a>
            <?php endif; ?>
			</th>
            <th align="left">���ӱ���</th>
            <th align="left">���ӵ�ַ</th>
            <th align="left">������ʹ�÷�Χ</th>
            
            <th>
			<?php if ($_GET['t'] == 'link_time' && $_GET['order'] == 'asc'): ?>
			<a href="<?php echo seacrh_url(array('order' => 'desc','t' => 'link_time','m' => 'link','untype' => "order,t"), $this);?>
">����ʱ��<img src="images/sanj.jpg"/></a>
            <?php else: ?>
            <a href="<?php echo seacrh_url(array('order' => 'asc','t' => 'link_time','m' => 'link','untype' => "order,t"), $this);?>
">����ʱ��<img src="images/sanj2.jpg"/></a>
            <?php endif; ?>
			</th>
            <th>����</th>
            
            <th>
			<?php if ($_GET['t'] == 'link_sorting' && $_GET['order'] == 'asc'): ?>
			<a href="<?php echo seacrh_url(array('order' => 'desc','t' => 'link_sorting','m' => 'link','untype' => "order,t"), $this);?>
">����<img src="images/sanj.jpg"/></a>
            <?php else: ?>
            <a href="<?php echo seacrh_url(array('order' => 'asc','t' => 'link_sorting','m' => 'link','untype' => "order,t"), $this);?>
">����<img src="images/sanj2.jpg"/></a>
            <?php endif; ?>
			</th>
            <th>״̬</th>
            <th class="admin_table_th_bg">����</th>
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
          <td> <?php if ($this->_tpl_vars['v']['link_type'] == 1): ?>��������<?php else: ?>ͼƬ����<?php endif; ?> </td>
          <td><?php echo $this->_tpl_vars['v']['link_sorting']; ?>
</td>
          <td> <?php if ($this->_tpl_vars['v']['link_state'] != 1): ?><font color="red">δ���</font><?php else: ?><font color="blue">�����</font><?php endif; ?> </td>
          <td><div class="admin_Operating_c" id="list_<?php echo $this->_tpl_vars['v']['id']; ?>
" aid="<?php echo $this->_tpl_vars['v']['id']; ?>
">
              <div class="admin_Operating">����</div>
              <div class="admin_Operating_list admin_Operating_down" id="list<?php echo $this->_tpl_vars['v']['id']; ?>
" style="display:none;"> <?php if ($this->_tpl_vars['v']['link_state'] != 1): ?> <a href="javascript:void(0)" onClick="layer_del('', 'index.php?m=link&c=status&yesid=<?php echo $this->_tpl_vars['v']['id']; ?>
');" class="status admin_cz_sh">���</a> <?php else: ?> <a href="javascript:void(0)" onClick="layer_del('', 'index.php?m=link&c=status&noid=<?php echo $this->_tpl_vars['v']['id']; ?>
');" class="status admin_cz_sh">ȡ��</a> <?php endif; ?> <a href="index.php?m=link&c=add&id=<?php echo $this->_tpl_vars['v']['id']; ?>
"class="admin_cz_bj">�༭</a> <a href="javascript:void(0)" onClick="layer_del('ȷ��Ҫɾ����', 'index.php?m=link&c=del&id=<?php echo $this->_tpl_vars['v']['id']; ?>
');" class="admin_cz_sc">ɾ��</a> </div>
            </div></td>
        </tr>
        <?php endforeach; endif; unset($_from); ?>
        <tr style="background: #f1f1f1;">
          <td colspan="2"><input class="admin_submit4"  type="button" name="delsub" value="ɾ����ѡ"  onclick="return really('del[]')"/></td>
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