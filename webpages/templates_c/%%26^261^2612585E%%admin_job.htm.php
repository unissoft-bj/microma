<?php /* Smarty version 2.6.26, created on 2014-09-11 09:14:58
         compiled from admin/admin_job.htm */ ?>
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
function replace_job(id){
	var pid=$("input[name='pid']").val();
	var pytoken=$("#pytoken").val();
	if(id!="0"&&pid=='2'){//
		$.get("index.php?m=admin_job&c=ajaxjob&ajax=1&id="+id,function(data){
			$("#tow_class").html(data);
			$("#tow_class").parents().show();
		});
	}
}
function showdiv8(type,pid){
	$(".pid").val(pid);
	$.layer({
		type : 1,
		title : '�ƶ����',
		offset: [($(window).height() - 150)/2 + 'px', ''],
		closeBtn : [0 , true],
		border : [10 , 0.3 , '#000', true],
		area : ['350px','150px'],
		page : {dom :"#job_div"}
	});
}

$(document).ready(function(){
	$("input[name='ctype']").click(function(){
		var val=$(this).val();
		$(".sclass").hide();
		$(".sclass_"+val).show();
	});
	$("#nid").change(function(){
		var val=$(this).val();
		if($('input[name="ctype"]:checked').val()=='3'){
			$.get("index.php?m=admin_job&c=sclass&pid="+val,function(msg){
				$("#keyid").html(msg);return false;
			});
		}
	});
})
function save_jobclass(){
	var ctype=$('input[name="ctype"]:checked').val();
	var keyid=$("#keyid").val();
	var nid=$("#nid").val();
	var position=$("#position").val();
	var pytoken=$("#pytoken").val();
	var sort=$("#sort").val();
	if($.trim(position)==''){
		parent.layer.msg('������Ʋ���Ϊ�գ�', 2, 8);return false;
	}
	if(ctype=='3'&&keyid==null){
		parent.layer.msg('��ѡ�񸸼����࣡', 2, 8);return false;
	}
	$.post("index.php?m=admin_job&c=save",{ctype:ctype,keyid:keyid,nid:nid,position:position,sort:sort,pytoken:pytoken},function(msg){
		if(msg==1){
			parent.layer.msg('������Ʋ���Ϊ�գ�', 2, 8);return false;
		}else if(msg==2){
			parent.layer.msg('�Ѿ����ڴ����', 2, 8);return false;
		}else if(msg==3){
			parent.layer.msg('��ӳɹ���', 2,9,function(){location=location ;});return false;
		}else if(msg==4){
			parent.layer.msg('ʧ�ܳɹ���', 2,8,function(){location=location ;});return false;
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
	$.post("index.php?m=admin_job&c=ajax",{id:id,sort:sort,pytoken:pytoken},function(data){
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
	$.post("index.php?m=admin_job&c=ajax",{id:id,name:name,pytoken:pytoken},function(data){
		$("#name"+id).html(name);
		$("#name"+id).show();
		$("#inputname"+id).hide();
		if(data!='1'){config_msg(data);}else{location.reload();}
	})
}
function clickname(id){
	if(document.getElementById('msg'+id).style.display=='none'){
		document.getElementById('msg'+id).style.display='block';
		$("#msg"+id).attr("class","open");
		}else{
		document.getElementById('msg'+id).style.display='none';
		$("#msg"+id).attr("msg","close");
	}
}
function is_move(){
	layer.closeAll();
	parent.layer.confirm('ȷ���ƶ���',function(){
		setTimeout(function(){$('#moveform').submit()},0);
	});
}
</script>
<title>��̨����</title>
</head>
<body class="body_ifm">
<div id="wname"  style="display:none; width: 300px; ">
	<div style="height: 160px;" class="job_box_div">
	   <div class="job_box_inp">
		<table class="table_form "style="width:100%">
			<tr ><td colspan='2' class='ui_content_wrap'><input name='ctype' type='radio' value='1' checked='checked'>һ�����<input name='ctype' type='radio' value='2'>�������<input name='ctype' type='radio' value='3'>�������</td></tr>
		<tr class='sclass_2 sclass_3  sclass'  style="display:none;"><td style="text-align: right;">һ������:</td><td><select name="nid" id='nid'>
				<?php $_from = $this->_tpl_vars['position']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['one']):
?>
				<option value="<?php echo $this->_tpl_vars['one']['id']; ?>
"><?php echo $this->_tpl_vars['one']['name']; ?>
</option>
				<?php endforeach; endif; unset($_from); ?>
			</select> </td></tr>
			<tr class='sclass_3 sclass'  style="display:none;"><td style="text-align: right;">��������:</td><td><select name="keyid" id='keyid'><option value="">--��ѡ��--</option></select> </td></tr>
			<tr><td style="text-align: right;">�������:</td><td><input type="text" name="position" id='position' class="input-text" /></td></tr>
			<tr><td style="text-align: right;">����:</td><td><input type="text" name="sort" id='sort' class="input-text" size='5'/></td></tr>
 			<tr><td colspan='2' class='ui_content_wrap' style="border-bottom:none"><input class="admin_submit4" type="button" value="��� " onClick="save_jobclass()"/></td></tr>
		</table>
	   </div>
	</div>
</div>
<span id="temp"></span>
<div class="infoboxp">
<div class="infoboxp_top">
<h6>ְλ������</h6>
<div class="infoboxp_right"> <a href="javascript:void(0)" onClick="add_class('���ְλ���','300px','240px','#wname','')"class="infoboxp_tj">������</a></div>
</div>

<div class="table-list">
  <div class="admin_table_border">
  <iframe id="supportiframe"  name="supportiframe" onload="returnmessage('supportiframe');" style="display:none"></iframe>
  <form action="index.php?m=admin_job&c=del" method="post" id='myform' target="supportiframe">
  <input type="hidden" name="pytoken" id='pytoken' value="<?php echo $this->_tpl_vars['pytoken']; ?>
">
<table width="100%">
	<thead>
	<tr class="admin_table_top">
		<th width="50"><label for="chkall"> <input type="checkbox" id='chkAll' onclick='CheckAll(this.form)' /></label></th>
		<th>ID</th>
		<th>ְλ����<span class="clickup">(����޸�)</span></th>
        <th width="100">ְλ����</th>
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
		<td  align="left">һ�����ࣺ
        <span onClick="checkname('<?php echo $this->_tpl_vars['v']['id']; ?>
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
		<td class="ud">
            <A href="index.php?m=admin_job&c=up&id=<?php echo $this->_tpl_vars['v']['id']; ?>
">�������</A> |
            <A href="javascript:void(0)" onClick="layer_del('ȷ��Ҫɾ����', 'index.php?m=admin_job&c=del&delid=<?php echo $this->_tpl_vars['v']['id']; ?>
');" class="admin_cz_sc">ɾ��</a>
        </td>
	</tr>

    <?php endforeach; endif; unset($_from); ?>
    <?php endif; ?>
	<?php if ($this->_tpl_vars['id']): ?>
	<tr align="center">
   		<td width="50"><input type="checkbox" value="<?php echo $this->_tpl_vars['onejob']['id']; ?>
" name='del[]' onclick='unselectall()' rel="del_chk" /></td>
		<td class="ud" width="60"><?php echo $this->_tpl_vars['onejob']['id']; ?>
</td>
		<td class="ud"  align="left">һ�����ࣺ<span onClick="checkname('<?php echo $this->_tpl_vars['onejob']['id']; ?>
');" id="name<?php echo $this->_tpl_vars['onejob']['id']; ?>
" style="cursor:pointer;"><?php echo $this->_tpl_vars['onejob']['name']; ?>
</span><input class="input-text hidden" type="text" id="inputname<?php echo $this->_tpl_vars['onejob']['id']; ?>
"value="<?php echo $this->_tpl_vars['onejob']['name']; ?>
" onBlur="subname('<?php echo $this->_tpl_vars['onejob']['id']; ?>
');">
        </td>
        <td><span onClick="checksort('<?php echo $this->_tpl_vars['onejob']['id']; ?>
');" id="sort<?php echo $this->_tpl_vars['onejob']['id']; ?>
" style="cursor:pointer;"><?php echo $this->_tpl_vars['onejob']['sort']; ?>
</span><input class="input-text hidden" type="text" id="input<?php echo $this->_tpl_vars['onejob']['id']; ?>
" size="10" value="<?php echo $this->_tpl_vars['onejob']['sort']; ?>
" onBlur="subsort('<?php echo $this->_tpl_vars['onejob']['id']; ?>
');"></td>
		<td class="ud" width="180"><A href="javascript:void(0)" onClick="layer_del('ȷ��Ҫɾ����', 'index.php?m=admin_job&c=del&delid=<?php echo $this->_tpl_vars['onejob']['id']; ?>
');" class="admin_cz_sc">ɾ��</a></td>
	</tr>
	<?php $_from = $this->_tpl_vars['twojob']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['two']):
?>
    <?php $this->assign('two_class_id', $this->_tpl_vars['two']['id']); ?>
	<tr align="center" id="msg<?php echo $this->_tpl_vars['one']['id']; ?>
">
    	<td width="50"><input type="checkbox" value="<?php echo $this->_tpl_vars['two']['id']; ?>
" name='del[]' onclick='unselectall()' rel="del_chk" /></td>
		<td class="ud" ><?php echo $this->_tpl_vars['two']['id']; ?>
</td>
		<td   align="left">&nbsp;&nbsp;&nbsp;&nbsp;
        �������ࣺ��<span onClick="checkname('<?php echo $this->_tpl_vars['two']['id']; ?>
');" id="name<?php echo $this->_tpl_vars['two']['id']; ?>
" style="cursor:pointer;"><?php echo $this->_tpl_vars['two']['name']; ?>
</span>
        <input class="input-text hidden" type="text" id="inputname<?php echo $this->_tpl_vars['two']['id']; ?>
"value="<?php echo $this->_tpl_vars['two']['name']; ?>
" onBlur="subname('<?php echo $this->_tpl_vars['two']['id']; ?>
');"></td>
        <td><span onClick="checksort('<?php echo $this->_tpl_vars['two']['id']; ?>
');" id="sort<?php echo $this->_tpl_vars['two']['id']; ?>
" style="cursor:pointer;"><?php echo $this->_tpl_vars['two']['sort']; ?>
</span>
        <input class="input-text hidden" type="text" id="input<?php echo $this->_tpl_vars['two']['id']; ?>
" size="10" value="<?php echo $this->_tpl_vars['two']['sort']; ?>
" onBlur="subsort('<?php echo $this->_tpl_vars['two']['id']; ?>
');"></td>
		<td class="ud"><A href="javascript:void(0)" onClick="layer_del('ȷ��Ҫɾ����', 'index.php?m=admin_job&c=del&delid=<?php echo $this->_tpl_vars['two']['id']; ?>
');"class="admin_cz_sc">ɾ��</a> | <a href="javascript:;" onClick="showdiv8('1','<?php echo $this->_tpl_vars['two']['id']; ?>
');">�ƶ�</a> </td>
	</tr>
    <?php $_from = $this->_tpl_vars['threejob'][$this->_tpl_vars['two_class_id']]; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['three']):
?>
    <?php $this->assign('three_class_arr', $this->_tpl_vars['threejob'][$this->_tpl_vars['two_class_id']]); ?>
	<tr align="center" id="msg<?php echo $this->_tpl_vars['position'][$this->_sections['one']['index']]['id']; ?>
">
    	<td width="50"><input type="checkbox" value="<?php echo $this->_tpl_vars['three']['id']; ?>
" name='del[]' onclick='unselectall()' rel="del_chk" /></td>
		<td class="ud"><?php echo $this->_tpl_vars['three']['id']; ?>
</td>
		<td class="ud"  align="left">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
         ��<span onClick="checkname('<?php echo $this->_tpl_vars['three']['id']; ?>
');" id="name<?php echo $this->_tpl_vars['three']['id']; ?>
" style="cursor:pointer;"><?php echo $this->_tpl_vars['three']['name']; ?>
</span>
        <input class="input-text hidden" type="text" id="inputname<?php echo $this->_tpl_vars['three']['id']; ?>
"value="<?php echo $this->_tpl_vars['three']['name']; ?>
" onBlur="subname('<?php echo $this->_tpl_vars['three']['id']; ?>
');"></td>
        <td><span onClick="checksort('<?php echo $this->_tpl_vars['three']['id']; ?>
');" id="sort<?php echo $this->_tpl_vars['three']['id']; ?>
" style="cursor:pointer;"><?php echo $this->_tpl_vars['three']['sort']; ?>
</span>
        <input class="input-text hidden" type="text" id="input<?php echo $this->_tpl_vars['three']['id']; ?>
" size="10" value="<?php echo $this->_tpl_vars['three']['sort']; ?>
" onBlur="subsort('<?php echo $this->_tpl_vars['three']['id']; ?>
');"></td>
		<td class="ud"><A href="javascript:void(0)" onClick="layer_del('ȷ��Ҫɾ����', 'index.php?m=admin_job&c=del&delid=<?php echo $this->_tpl_vars['three']['id']; ?>
');"class="admin_cz_sc">ɾ��</a>| <a href="javascript:;" onClick="showdiv8('2','<?php echo $this->_tpl_vars['three']['id']; ?>
');">�ƶ�</a></td>
	</tr>

    <?php endforeach; endif; unset($_from); ?>
	<?php endforeach; endif; unset($_from); ?>
	<?php endif; ?>
    <tr style="background: #f1f1f1;">
      <td colspan="5"><input class="admin_submit4"  type="button" name="delsub" value="ɾ����ѡ"  onclick="return really('del[]')"/></td>
    </tr>
	</tbody>
</table>
</form>
</div>
</div>
</div>
<div id="job_div" style="display:none;" class="job_box_div">
  <form action="index.php" method="get" id="moveform" target="supportiframe">
	<input name="m" value="admin_job" type="hidden">
	<input name="c" value="move" type="hidden">
	<input type="hidden" class="pid" name="pid" value="0">
    <table class="table_form " style="width:100%">
    <tbody>
        <tr>
            <td class="ui_content_wrap" style=" margin:0px;">һ�����  </td>
			<td><select name="nid" onChange="replace_job(this.value);">
				<option value="0">==��ѡ��==</option>
					<?php $_from = $this->_tpl_vars['position']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['one']):
?>
					<option value="<?php echo $this->_tpl_vars['one']['id']; ?>
"><?php echo $this->_tpl_vars['one']['name']; ?>
</option>
					<?php endforeach; endif; unset($_from); ?>
				</select></td>
        </tr>
		<tr style="display:none"><td  class="ui_content_wrap" style=" margin:0px;">�������ࣺ</td><td id="tow_class"></td></tr>
		<tr><td colspan='2' style="text-align:center"> <input class="admin_submit4" type="button" name="add" onClick="is_move()" value=" ȷ�� " /></td></tr>
    </tbody>
	</table>
	</form>
</div>
</body>
</html>