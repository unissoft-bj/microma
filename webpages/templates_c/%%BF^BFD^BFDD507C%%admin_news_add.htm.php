<?php /* Smarty version 2.6.26, created on 2014-11-14 19:28:52
         compiled from admin/admin_news_add.htm */ ?>
<!DOCTYPE html PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3.org/TR/html4/loose.dtd">
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=gb2312">
<link href="images/reset.css" rel="stylesheet" type="text/css" />
<link href="images/system.css" rel="stylesheet" type="text/css" />
<link href="images/table_form.css" rel="stylesheet" type="text/css" />
<script src="<?php echo $this->_tpl_vars['config']['sy_weburl']; ?>
/js/jquery-1.8.0.min.js"></script>
<script charset="utf-8" src="../data/kindeditor/kindeditor-min.js"></script>
<script charset="utf-8" src="../data/kindeditor/lang/zh_CN.js"></script>
<link rel="stylesheet" href="../data/kindeditor/themes/default/default.css" />
<script src="<?php echo $this->_tpl_vars['config']['sy_weburl']; ?>
/js/layer/layer.min.js" language="javascript"></script>
<script src="js/admin_public.js" language="javascript"></script>

<script language="javascript">
<!--
KindEditor.ready(function(K) {
	var editor = K.editor({
		allowFileManager : true
	});
	K.create('#content', {
		themeType : 'default'
	});
	K('#insertfile').click(function() {
		editor.loadPlugin('images', function() {
			editor.plugin.imageDialog({
				imageUrl : K('#pic_url').val(),
				clickFn : function(url, title, width, height, border, align) {
					K('#pic_url').val(url);
					K('#news_pic').html(url);
					editor.hideDialog();
				}
			});
		});
	});
	var colorpicker;
	K('#colorpicker').bind('click', function(e) {
		e.stopPropagation();
		if (colorpicker) {
			colorpicker.remove();
			colorpicker = null;
			return;
		}
		var colorpickerPos = K('#colorpicker').pos();
		colorpicker = K.colorpicker({
			x : colorpickerPos.x,
			y : colorpickerPos.y + K('#colorpicker').height(),
			z : 19811214,
			selectedColor : 'default',
			noColor : '����ɫ',
			click : function(color) {
				K('#color').val(color);
				$('#color + font').css('color', color);
				colorpicker.remove();
				colorpicker = null;
			}
		});
	});
	K(document).click(function() {
		if (colorpicker) {
			colorpicker.remove();
			colorpicker = null;
		}
	});
});
//-->
function news_preview(url){
	$(".job_box_div").html("<img src='"+url+"' style='max-width:500px' />");//
 	$.layer({
		type : 1,
		title : '�鿴ͼƬ',
		closeBtn : [0 , true],
		offset : ['20%' , '30%'],
		border : [10 , 0.3 , '#000', true],
		area : ['560px','auto'],
		page : {dom : '#news_preview'}
	});
}
function checkform(myform){
  if (myform.title.value=="") {
		parent.layer.msg('����д���ű��⣡', 2,2);
		myform.title.focus();return (false);
  }
   loadlayer();
}
</script>

<title>��̨����</title>
</head>
<body class="body_ifm">
<div class="infoboxp">
  <div class="infoboxp_top">
    <h6>�������</h6>
    <div class="infoboxp_right">
    	<a href="index.php?m=admin_news" class="infoboxp_tj">�����б�</a>
        <a href="index.php?m=admin_news&c=group" class="infoboxp_tj">������</a>
    </div>
  </div>
  <div class="admin_table_border">
    <iframe id="supportiframe"  name="supportiframe" onload="returnmessage('supportiframe');" style="display:none"></iframe>
    <form name="myform" target="supportiframe" action="index.php?m=admin_news&c=addnews" method="post" encType="multipart/form-data"  onSubmit="return checkform(this);">
      <table width="100%" class="table_form"  style="background:#fff;">
        <tr >
          <th width="120">�������</th>
          <td><select name="nid">
	  <?php $_from = $this->_tpl_vars['one_class']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['v']):
?>
      <option value="<?php echo $this->_tpl_vars['v']['id']; ?>
" <?php if ($this->_tpl_vars['v']['id'] == $this->_tpl_vars['news']['nid']): ?> selected='selected'<?php endif; ?>><?php echo $this->_tpl_vars['v']['name']; ?>
</option>
      <?php $_from = $this->_tpl_vars['two_class'][$this->_tpl_vars['v']['id']]; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['val']):
?>
      <option value="<?php echo $this->_tpl_vars['val']['id']; ?>
" <?php if ($this->_tpl_vars['val']['id'] == $this->_tpl_vars['news']['nid']): ?> selected='selected'<?php endif; ?>> ����<?php echo $this->_tpl_vars['val']['name']; ?>
</option>
      <?php endforeach; endif; unset($_from); ?>
      <?php endforeach; endif; unset($_from); ?>
            </select>
            &nbsp;&nbsp;<a href="index.php?m=admin_news&c=group" class="on" style=" text-decoration:none;"><font style="background:#498CD0; color:#FFF; padding:3px 10px 3px 10px;">��ӷ���</font></a></td>
        </tr>
        <tr class="admin_table_trbg" >
          <th>���ű��⣺</th>
          <td><input class="input-text" type="text" name="title" size="40" value="<?php echo $this->_tpl_vars['news']['title']; ?>
"/><input type="hidden" name='color' id="color" value="" /><font color="<?php echo $this->_tpl_vars['news']['color']; ?>
">������ɫ</font><input type="button" id="colorpicker" value="��ȡɫ��" class="admin_submit6" style="background:#F60; margin-left:5px;"/></td>
        </tr>
        <tr >
          <th>ʹ�÷�Χ��</th>
          <td><select name="did">
				<option value='0'>ȫ����ʹ��</option>
				<?php $_from = $this->_tpl_vars['domain']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['v']):
?>
              <option value="<?php echo $this->_tpl_vars['v']['id']; ?>
" <?php if ($this->_tpl_vars['v']['id'] == $this->_tpl_vars['news']['did']): ?>selected<?php endif; ?> ><?php echo $this->_tpl_vars['v']['title']; ?>
</option>
				<?php endforeach; endif; unset($_from); ?>
            </select></td>
        </tr>
        <tr class="admin_table_trbg" >
          <th>�������ߣ�</th>
          <td><input class="input-text" type="text" name="author" size="20" value="<?php echo $this->_tpl_vars['news']['author']; ?>
"/></td>
        </tr>
        <tr >
          <th>������Դ��</th>
          <td><input class="input-text" type="text" name="source" size="50" value="<?php echo $this->_tpl_vars['news']['source']; ?>
"/></td>
        </tr>
        <tr class="admin_table_trbg" >
          <th>�� �� �ʣ�</th>
          <td><input class="input-text" type="text" name="keyword" size="50" value="<?php echo $this->_tpl_vars['news']['keyword']; ?>
"/>
            (��ؼ��֣����ã�������Ϊ�����Զ���ȡ) </td>
        </tr>
        <tr >
          <th>�衡������</th>
          <td><textarea name="description" cols="55" rows="3"><?php echo $this->_tpl_vars['news']['description']; ?>
</textarea></td>
        </tr>
        <tr class="admin_table_trbg" >
          <th>�������ݣ� </th>
          <td><textarea  id="content" name="content" cols="100" rows="8" style="width:800px;height:300px;"><?php echo $this->_tpl_vars['news']['content']; ?>
</textarea></td>
        </tr>
        <tr >
          <th>�� �� ͼ��</th>
          <td><span id='news_pic'><?php echo $this->_tpl_vars['news']['s_thumb']; ?>
</span><input type="hidden"  class="input-text" name="uplocadpic"  value="<?php echo $this->_tpl_vars['news']['s_thumb']; ?>
"   id='pic_url' /><?php if ($this->_tpl_vars['news']['s_thumb']): ?><a href="javascript:void(0)" onClick="news_preview('../<?php echo $this->_tpl_vars['news']['newsphoto']; ?>
')" style="margin:0px 10px">�鿴</a><?php endif; ?><input   type="button" id="insertfile" value="����ѡ��" /></td>
        </tr>
        <tr class="admin_table_trbg" >
          <th>�ࡡ���ͣ�</th>
          <td> <?php $_from = $this->_tpl_vars['property']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['property']):
?>
            <input type="checkbox" name="describe[]" value="<?php echo $this->_tpl_vars['property']['value']; ?>
" <?php if (@ in_array ( $this->_tpl_vars['property']['value'] , $this->_tpl_vars['describe'] )): ?>checked="checked" <?php endif; ?>/>
            &nbsp;<?php echo $this->_tpl_vars['property']['name']; ?>

            <?php endforeach; endif; unset($_from); ?> </td>
        </tr>
        <tr >
          <th>�š�����</th>
          <td><input name="sort" type="text"  size="5" class="input-text" value="<?php echo $this->_tpl_vars['news']['sort']; ?>
" /></td>
        </tr>
        <tr class="admin_table_trbg" >
          <td align="center" colspan="2"> <?php if ($this->_tpl_vars['news']['id']): ?>
            <input type="hidden" name="id" size="40" value="<?php echo $this->_tpl_vars['news']['id']; ?>
"/>
            <input type="hidden" name="lasturl" value="<?php echo $this->_tpl_vars['lasturl']; ?>
">
            <input class="admin_submit4" type="submit" name="updatenews" value="&nbsp;�� ��&nbsp;"  />
            <?php else: ?>
            <input class="admin_submit4" type="submit" name="newsadd" value="&nbsp;�� ��&nbsp;"  />
            <?php endif; ?>
            <input class="admin_submit4" type="reset" name="reset" value="&nbsp;�� �� &nbsp;" /></td>
        </tr>
      </table>
	  <input type="hidden" name="pytoken" value="<?php echo $this->_tpl_vars['pytoken']; ?>
">
    </form>
  </div>
</div>
<div id="news_preview"  style="display:none;width:560px ">
	<div style="height:300px; overflow:auto;width:560px;" >
		<div class="job_box_div" style="text-align:center;margin-top:10px;"></div>
	</div>
</div>
</body>
</html>