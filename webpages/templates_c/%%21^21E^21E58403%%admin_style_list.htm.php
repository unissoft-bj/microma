<?php /* Smarty version 2.6.26, created on 2014-09-11 09:15:22
         compiled from admin/admin_style_list.htm */ ?>
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
<h6>ģ�����б�</h6>
<div class="infoboxp_right"> 
<a href="index.php?m=admin_template&c=tpadd" class="infoboxp_tj">���ģ��</a></div>
</div>
<div class="table-list">

<?php $_from = $this->_tpl_vars['list']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['v']):
?>
<div class="" style="float: left; width: 240px; text-align: center; padding: 15px; line-height: 180%;border:1px solid #ccc; background:#fff; margin-right:10px;">
	  <img width="225" height="136" border="1" style="border: #CCCCCC;" alt="<?php echo $this->_tpl_vars['v']['name']; ?>
" src="<?php echo $this->_tpl_vars['v']['img']; ?>
">
	  <br>
	 <strong><?php echo $this->_tpl_vars['v']['name']; ?>
</strong><?php if ($this->_tpl_vars['sy_style'] == $this->_tpl_vars['v']['dir']): ?><font color="#FF0000">����ǰʹ�÷��</font><?php endif; ?>
     <br>
     ������ߣ�<?php echo $this->_tpl_vars['v']['author']; ?>

	 <br>
	���Ŀ¼���ƣ�<?php echo $this->_tpl_vars['v']['dir']; ?>

      <br>
      <input name="" value="�����Ϣ�޸�" type="button" class="admin_submit6" onClick="location.href='index.php?m=admin_style&c=modify&dir=<?php echo $this->_tpl_vars['v']['dir']; ?>
'" >
      <?php if ($this->_tpl_vars['sy_style'] != $this->_tpl_vars['v']['dir']): ?>
        <input name="" value="ʹ�ø÷��" type="button" onClick="layer_del('ȷ������ģ��ָ��𣿸���������������ҳ�档','index.php?m=admin_style&c=check_style&dir=<?php echo $this->_tpl_vars['v']['dir']; ?>
');" class="admin_submit6"/>
       
      <?php endif; ?>
	 </div>
     <?php endforeach; endif; unset($_from); ?> 
</div>
</div>
</body>
</html>