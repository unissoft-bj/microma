<?php /* Smarty version 2.6.26, created on 2014-09-11 09:14:55
         compiled from admin/admin_industry.htm */ ?>
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
<script src="js/show_pub.js"></script>
<title>后台管理</title>
</head>
<body class="body_ifm">
<script type="text/javascript">
function save_industry(){
	var pytoken=$("#pytoken").val();
	var add_name=$("input[name='add_name']").val();
	var add_sort=$("input[name='add_sort']").val();
	if($.trim(add_name)==''){
		parent.layer.msg('类别名称不能为空！', 2, 8);return false;
	}
	$.post("index.php?m=admin_industry&c=add",{add_name:add_name,add_sort:add_sort,pytoken:pytoken},function(msg){
		if(msg==1){
			parent.layer.msg('类别名称不能为空！', 2, 8);return false;
		}else if(msg==2){
			parent.layer.msg('已经存在此类别！', 2, 8);return false;
		}else if(msg==3){
			parent.layer.msg('添加成功！', 2,9,function(){location=location ;});return false;
		}else if(msg==4){
			parent.layer.msg('失败成功！', 2,8,function(){location=location ;});return false;
		}
	});
}
function checksort(id){
	$("#sort"+id).hide();
	$("#input"+id).show();
	$("#input"+id).focus();
}
function subsort(id){
	var sort=$("#input"+id).val();
	var pytoken=$("#pytoken").val();
	$.post("index.php?m=admin_industry&c=ajax",{id:id,sort:sort,pytoken:pytoken},function(data){
		$("#sort"+id).html(sort);
		$("#sort"+id).show();
		$("#input"+id).hide();
		if(data!=1){config_msg(data);}else{location.reload();}
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
	$.post("index.php?m=admin_industry&c=ajax",{id:id,name:name,pytoken:pytoken},function(data){
		$("#name"+id).html(name);
		$("#name"+id).show();
		$("#inputname"+id).hide();
		if(data!=1){config_msg(data);}else{location.reload();}
	})
}
</script>
<span id="temp"></span>

<div class="infoboxp">
<div class="infoboxp_top">
<h6>行业类别管理</h6>
<div class="infoboxp_right"> <a  href="javascript:void(0)" onClick="add_class('添加类别','300px','140px','#houtai_div','')" class="infoboxp_tj">添加类别</a></div>
</div>
<div class="table-list">
  <div class="admin_table_border">
  <iframe id="supportiframe"  name="supportiframe" onload="returnmessage('supportiframe');" style="display:none"></iframe>
<form action="index.php?m=admin_industry&c=del" method="post" target="supportiframe" id='myform'>
<input type="hidden" name="pytoken"  id='pytoken' value="<?php echo $this->_tpl_vars['pytoken']; ?>
">
<table width="100%" id="table_industry">
	<thead>
	<tr class="admin_table_top">
   		<th width="50"><label for="chkall"> <input type="checkbox" id='chkAll' onclick='CheckAll(this.form)' /></label></th>
		<th width="60">行业编号</th>
		<th>行业名称<span class="clickup">(点击修改)</span></th>
		<th>排序（越大越靠前）</th>
		<th width="180" class="admin_table_th_bg">操作</th>
	</tr>
	</thead>
	<tbody>
	<?php $_from = $this->_tpl_vars['list']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['v']):
?>

	<tr align="center">
  	    <td width="50"><input type="checkbox" value="<?php echo $this->_tpl_vars['v']['id']; ?>
" name='del[]' onclick='unselectall()' rel="del_chk" /></td>
		<td class="ud"><?php echo $this->_tpl_vars['v']['id']; ?>
</td>
		<td class="ud" align="left">
<span onClick="checkname('<?php echo $this->_tpl_vars['v']['id']; ?>
');" id="name<?php echo $this->_tpl_vars['v']['id']; ?>
" style="cursor:pointer;"><?php echo $this->_tpl_vars['v']['name']; ?>
</span>
        <input class="input-text hidden" type="text" id="inputname<?php echo $this->_tpl_vars['v']['id']; ?>
" value="<?php echo $this->_tpl_vars['v']['name']; ?>
" onBlur="subname('<?php echo $this->_tpl_vars['v']['id']; ?>
');" >
		</td>
		<td><span onClick="checksort('<?php echo $this->_tpl_vars['v']['id']; ?>
');" id="sort<?php echo $this->_tpl_vars['v']['id']; ?>
" style="cursor:pointer;"><?php echo $this->_tpl_vars['v']['sort']; ?>
</span>
        <input class="input-text hidden" type="text" id="input<?php echo $this->_tpl_vars['v']['id']; ?>
" size="10" value="<?php echo $this->_tpl_vars['v']['sort']; ?>
" onBlur="subsort('<?php echo $this->_tpl_vars['v']['id']; ?>
');" ></td>
		<td class="ud">

        <a href="javascript:void(0)" onClick="layer_del('确定要删除？', 'index.php?m=admin_industry&c=del&delid=<?php echo $this->_tpl_vars['v']['id']; ?>
');"class="admin_cz_sc">删除</a></td>
	</tr>

<?php endforeach; endif; unset($_from); ?>
    <tr style="background: #f1f1f1;">
      <td colspan="5"><input class="admin_submit4"  type="button" name="delsub" value="删除所选"  onclick="return really('del[]')"/></td>
    </tr>
	</tbody>
</table>
</form>
</div>
</div>

</div>
<div id="houtai_div" style=" width:298px;position:absolute; display:none;">
    <table class="table_form "style="width:100%">
		<tbody>
			<tr class="ui_td_11" >
				<td style="text-align: right;" class="ui_content_wrap">类别名称：</td><td><input type="text" name="add_name" class="input-text" /></td>
			</tr>
			<tr class="ui_td_11">
				<td style="text-align: right;" class="ui_content_wrap">
					排&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;序：</td><td><input type="text" name="add_sort" size='5' class="input-text" onKeyUp="this.value=this.value.replace(/[^0-9]/g,'')"/>
				</td>
			</tr>
			<tr class="ui_td_11">
				<td  class="ui_content_wrap" style="border-bottom:none" colspan='2'>
                <input class="admin_submit4" type="button" name="add" value=" 添加 " onClick="save_industry()" /></td>
			</tr>
		</tbody>
	</table>
</div>
  </body>
</html>