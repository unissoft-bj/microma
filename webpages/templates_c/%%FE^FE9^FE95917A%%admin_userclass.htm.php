<?php /* Smarty version 2.6.26, created on 2014-09-11 09:15:05
         compiled from admin/admin_userclass.htm */ ?>
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
<script>
function checksort(id){
	$("#sort"+id).hide();
	$("#input"+id).show();
	$("#input"+id).focus();
}	
function subsort(id){
	var sort=$("#input"+id).val();
	var pytoken=$("#pytoken").val();
	$.post("index.php?m=userclass&c=ajax",{id:id,sort:sort,pytoken:pytoken},function(data){
		$("#sort"+id).html(sort);
		$("#sort"+id).show();
		$("#input"+id).hide();
		if(data!='1'){config_msg(data);}else{location.reload();}
	})
}
function checkname(id){
	$("#name"+id).hide();
	$("#inputname"+id).show();
	$("#inputname"+id).focus();
}	
function subname(id){
	var name=$("#inputname"+id).val();
	var pytoken=$("#pytoken").val();
	$.post("index.php?m=userclass&c=ajax",{id:id,name:name,pytoken:pytoken},function(data){
		$("#name"+id).html(name);
		$("#name"+id).show();
		$("#inputname"+id).hide();
		if(data!='1'){config_msg(data);}else{location.reload();}
	})
}
</script>
<title>��̨����</title>
</head>
<body class="body_ifm"> 
<?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => ($this->_tpl_vars['adminstyle'])."/add_class.htm", 'smarty_include_vars' => array()));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>
<span id="temp"></span>
<div class="infoboxp">
<div class="infoboxp_top">
<h6>���˻�Ա����</h6>
<div class="infoboxp_right"> <a  href="javascript:void(0)" onClick="add_class('���˻�Ա����','300px','200px','#wname','index.php?m=userclass&c=save')" class="infoboxp_tj">������</a></div>
</div>
<iframe id="supportiframe"  name="supportiframe" onload="returnmessage('supportiframe');" style="display:none"></iframe> 
<div class="table-list">
<div class="admin_table_border">
<form action="index.php?m=userclass&c=del" method="post" id='myform' target="supportiframe">   
<table width="100%">
	<thead>
	<tr class="admin_table_top">
        <th width="50"><label for="chkall"> <input type="checkbox" id='chkAll' onclick='CheckAll(this.form)' /></label></th>
		<th width="60">������</th>
        <th width="400">��������<span class="clickup">(����޸�)</span></th>
       
		<th>
		 <?php if (empty ( $this->_tpl_vars['id'] )): ?>
		���������
        <?php else: ?>
        ��������
        <?php endif; ?> 
		</th> 
		<th width="180" class="admin_table_th_bg">����</th>
	</tr>
	</thead>
	<tbody>	
    <?php if (empty ( $this->_tpl_vars['id'] )): ?>
	<?php $_from = $this->_tpl_vars['position']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['v']):
?>
	
	<tr align="center">
    	<td width="50"><input type="checkbox" value="<?php echo $this->_tpl_vars['v']['id']; ?>
" name='del[]' onclick='unselectall()' rel="del_chk" /></td>
		<td class="ud"><?php echo $this->_tpl_vars['v']['id']; ?>
</td>
		<td align="left">һ�����ࣺ<span onClick="checkname('<?php echo $this->_tpl_vars['v']['id']; ?>
');" id="name<?php echo $this->_tpl_vars['v']['id']; ?>
" style="cursor:pointer;"><?php echo $this->_tpl_vars['v']['name']; ?>
</span>
        <input class="input-text hidden" type="text" id="inputname<?php echo $this->_tpl_vars['v']['id']; ?>
" value="<?php echo $this->_tpl_vars['v']['name']; ?>
" onBlur="subname('<?php echo $this->_tpl_vars['v']['id']; ?>
');"></td>
        
        <td class="ud"><input type="text" name="variable" class="input-text" value="<?php echo $this->_tpl_vars['v']['variable']; ?>
" size="20" disabled/></td>    
		<td class="ud"><A href="index.php?m=userclass&c=up&id=<?php echo $this->_tpl_vars['v']['id']; ?>
">�������</A> | <A
			href="javascript:void(0)" onClick="layer_del('ȷ��Ҫɾ����', 'index.php?m=userclass&c=del&delid=<?php echo $this->_tpl_vars['v']['id']; ?>
');" class="admin_cz_sc">ɾ��</A></td>
	</tr>
    
	
<?php endforeach; endif; unset($_from); ?>
<?php endif; ?>
	<?php if ($this->_tpl_vars['id']): ?>
	<tr align="center">
    	<td width="50"><input type="checkbox" value="<?php echo $this->_tpl_vars['class1']['id']; ?>
" name='del[]' onclick='unselectall()' rel="del_chk" /></td>
		<td class="ud" width="60"><?php echo $this->_tpl_vars['class1']['id']; ?>
</td>
		<td class="ud">һ�����ࣺ<span onClick="checkname('<?php echo $this->_tpl_vars['class1']['id']; ?>
');" id="name<?php echo $this->_tpl_vars['class1']['id']; ?>
" style="cursor:pointer;"><?php echo $this->_tpl_vars['class1']['name']; ?>
</span>
        <input class="input-text hidden" type="text" id="inputname<?php echo $this->_tpl_vars['class1']['id']; ?>
" value="<?php echo $this->_tpl_vars['class1']['name']; ?>
" onBlur="subname('<?php echo $this->_tpl_vars['class1']['id']; ?>
');"></td>
        <td class="ud"></td>
		<td class="ud" width="180"><A href="javascript:void(0)" onClick="layer_del('ȷ��Ҫɾ����', 'index.php?m=userclass&c=del&delid=<?php echo $this->_tpl_vars['class1']['id']; ?>
');"class="admin_cz_sc">ɾ��</A></td>
	</tr>
	<?php $_from = $this->_tpl_vars['class2']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['v']):
?>
	<tr align="center" id="msg<?php echo $this->_tpl_vars['v']['id']; ?>
">
    	<td width="50"><input type="checkbox" value="<?php echo $this->_tpl_vars['v']['id']; ?>
" name='del[]' onclick='unselectall()' rel="del_chk" /></td>
		<td class="ud"><?php echo $this->_tpl_vars['v']['id']; ?>
</td>
		<td class="ud">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
        ��<span onClick="checkname('<?php echo $this->_tpl_vars['v']['id']; ?>
');" id="name<?php echo $this->_tpl_vars['v']['id']; ?>
" style="cursor:pointer;"><?php echo $this->_tpl_vars['v']['name']; ?>
</span>
        <input class="input-text hidden" type="text" id="inputname<?php echo $this->_tpl_vars['v']['id']; ?>
"value="<?php echo $this->_tpl_vars['v']['name']; ?>
" onBlur="subname('<?php echo $this->_tpl_vars['v']['id']; ?>
');"></td>
        <td><span onClick="checksort('<?php echo $this->_tpl_vars['v']['id']; ?>
');" id="sort<?php echo $this->_tpl_vars['v']['id']; ?>
" style="cursor:pointer;"><?php echo $this->_tpl_vars['v']['sort']; ?>
</span>
        <input class="input-text hidden" type="text" id="input<?php echo $this->_tpl_vars['v']['id']; ?>
" size="10" value="<?php echo $this->_tpl_vars['v']['sort']; ?>
" onBlur="subsort('<?php echo $this->_tpl_vars['v']['id']; ?>
');"></td>
		<td class="ud"><A href="javascript:void(0)" onClick="layer_del('ȷ��Ҫɾ����', 'index.php?m=userclass&c=del&delid=<?php echo $this->_tpl_vars['v']['id']; ?>
');"class="admin_cz_sc">ɾ��</A></td>
	</tr>
	
	<?php endforeach; endif; unset($_from); ?>
	<?php endif; ?>
    <tr style="background: #f1f1f1;">
      <td colspan="5"><input class="admin_submit4"  type="button" name="delsub" value="ɾ����ѡ"  onclick="return really('del[]')"/></td>
    </tr>
	</tbody>
</table>
<input type="hidden" name="pytoken" id='pytoken' value="<?php echo $this->_tpl_vars['pytoken']; ?>
">
</form>
</div>
</div>
</div> 
</body>
</html>