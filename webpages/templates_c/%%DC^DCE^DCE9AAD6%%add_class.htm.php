<?php /* Smarty version 2.6.26, created on 2014-09-11 09:15:00
         compiled from E:%5CPHPnow-1.5.6%5Chtdocs%5Cweihr//template/admin/add_class.htm */ ?>
<div id="wname"  style="display:none; width: 300px; ">
	<div style="height: 160px;" class="job_box_div">
	   <div class="job_box_inp">
		<table class="table_form "style="width:100%">
			<tr ><td colspan='2' class='ui_content_wrap'><input name='ctype' type='radio' value='1' checked='checked'>һ������<input name='ctype' type='radio' value='2'>��������</td></tr>
			<tr class='sclass'  style="display:none;"><td style="text-align: right;">����:</td><td><select name="nid" id='nid'>
							 <?php $_from = $this->_tpl_vars['position']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['v']):
?>
							<option value="<?php echo $this->_tpl_vars['v']['id']; ?>
"><?php echo $this->_tpl_vars['v']['name']; ?>
</option>
							<?php endforeach; endif; unset($_from); ?>
						</select> </td></tr>
			<tr><td style="text-align: right;">�������:</td><td><input type="text" name="position" id='position' class="input-text" /></td></tr>
			<tr class='variable ' ><td style="text-align: right;">���ñ�����:</td><td><input type="text" name="variable" id='variable' class="input-text" size="16"/></td></tr>
			<tr class='sclass'  style="display:none;"><td style="text-align: right;">����:</td><td><input type="text" name="sort" id='sort' value="" onkeyup="this.value=this.value.replace(/[^0-9]/g,'')" class="input-text" size="5" /></td></tr>
			<tr><td colspan='2' class='ui_content_wrap' style="border-bottom:none"><input class="admin_submit4" type="button" value="���� " onclick="save_class()"/></td></tr>
		</table>
	   </div>
	</div>
</div>


<script type="text/javascript">
$(document).ready(function(){
	$("input[name='ctype']").click(function(){
		var val=$(this).val();
		if(val=='1'){
			$(".variable").show();
			$(".sclass").hide();
		}else if(val=='2'){
			$(".variable").hide();
			$(".sclass").show();
		}
	})
})
function save_class(){
	var ctype=$('input[name="ctype"]:checked').val();
	var nid=$('#nid').val();
	var url=$('#surl').val();
	var position=$('#position').val();
	var variable=$('#variable').val();
	var sort=$('#sort').val();
	if(ctype==''||ctype==null){
		parent.layer.msg('��ѡ�����ͣ�', 2, 8);return false;
	}
	if($.trim(position)==''){
		parent.layer.msg('������Ʋ���Ϊ�գ�', 2, 8);return false;
	}
	if(ctype=='1'&&$.trim(variable)==''){
		parent.layer.msg('���ñ���������Ϊ�գ�', 2, 8);return false;
	}
	$.post(url,{ctype:ctype,nid:nid,position:position,variable:variable,sort:sort,pytoken:$('#pytoken').val()},function(msg){
		if(msg==1){
			parent.layer.msg('��������Ѵ��ڣ�', 2, 8);return false;
		}else if(msg==2){
			parent.layer.msg('���ӳɹ���', 2,9,function(){location=location ;});return false;
		}else{
			parent.layer.msg('ʧ�ܳɹ���', 2,8,function(){location=location ;});return false;
		}
	});
}
</script>