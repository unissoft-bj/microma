<?php /* Smarty version 2.6.26, created on 2014-09-11 01:18:41
         compiled from admin/admin_map.htm */ ?>
<!DOCTYPE html PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3.org/TR/html4/loose.dtd">
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=GBK">
<link href="images/reset.css" rel="stylesheet" type="text/css" />
<link href="images/system.css" rel="stylesheet" type="text/css" />
<link href="images/table_form.css" rel="stylesheet" type="text/css" />
<style type="text/css">
.ui_dialog_wrap {
	visibility:hidden
}
.ui_title_icon, .ui_content, .ui_dialog_icon, .ui_btns span {
	display:inline-block;
*zoom:1;
*display:inline
}
.ui_dialog {
	text-align:left;
	position:absolute;
	top:0;
	 background:#fff;
}
.ui_dialog table {
	border:0;
	margin:0;
	border-collapse:collapse
}
.ui_dialog td {
	padding:0
}
.ui_title_icon, .ui_dialog_icon {
	vertical-align:middle;
	_font-size:0
}
.ui_title_text {
	overflow:hidden;
	cursor:default
}
.ui_close {
	display:block;
	position:absolute;
	outline:none
}
.ui_content_wrap {
	text-align:center
}
.ui_content {
	margin:10px;
	text-align:left
}
.ui_iframe .ui_content {
	margin:0;
*padding:0;
	display:block;
	height:100%;
	position:relative
}
.ui_iframe .ui_content iframe {
	border:none;
	overflow:auto
}
.ui_content_mask {
	visibility:hidden;
	width:100%;
	height:100%;
	position:absolute;
	top:0;
	left:0;
	background:#FFF;
	filter:alpha(opacity=0);
	opacity:0
}
.ui_bottom {
	position:relative
}
.ui_resize {
	position:absolute;
	right:0;
	bottom:0;
	z-index:1;
	cursor:nw-resize;
	_font-size:0
}
.ui_btns {
	text-align:right;
	white-space:nowrap
}
.ui_btns span {
	margin:5px 10px
}
.ui_btns button {
	cursor:pointer
}
* .ui_ie6_select_mask {
	position:absolute;
	top:0;
	left:0;
	z-index:-1;
	filter:alpha(opacity=0)
}
.ui_loading .ui_content_wrap {
	position:relative;
	min-width:9em;
	min-height:3.438em
}
.ui_loading .ui_btns {
	display:none
}
.ui_loading_tip {
	visibility:hidden;
	width:5em;
	height:1.2em;
	text-align:center;
	line-height:1.2em;
	position:absolute;
	top:50%;
	left:50%;
	margin:-0.6em 0 0 -2.5em
}
.ui_loading .ui_loading_tip, .ui_loading .ui_content_mask {
	visibility:visible
}
.ui_loading .ui_content_mask {
	filter:alpha(opacity=100);
	opacity:1
}
.ui_move .ui_title_text {
	cursor:move
}
.ui_page_move .ui_content_mask {
	visibility:visible
}
.ui_move_temp {
	visibility:hidden;
	position:absolute;
	cursor:move
}
.ui_move_temp div {
	height:100%
}
html>body .ui_fixed .ui_move_temp {
	position:fixed
}
html>body .ui_fixed .ui_dialog {
	position:fixed
}
* .ui_ie6_fixed {
	background:url(*) fixed
}
* .ui_ie6_fixed body {
	height:100%
}
* html .ui_fixed {
	width:100%;
	height:100%;
	position:absolute;
left:expression(documentElement.scrollLeft+documentElement.clientWidth-this.offsetWidth);
top:expression(documentElement.scrollTop+documentElement.clientHeight-this.offsetHeight)
}
* .ui_page_lock select, * .ui_page_lock .ui_ie6_select_mask {
	visibility:hidden
}
* .ui_page_lock .ui_content select {
	visibility:visible;
}
.ui_overlay {
	visibility:hidden;
	_display:none;
	position:fixed;
	top:0;
	left:0;
	width:100%;
	height:100%;
	filter:alpha(opacity=0);
	opacity:0;
	_overflow:hidden
}
.ui_lock .ui_overlay {
	visibility:visible;
	_display:block
}
.ui_overlay div {
	height:100%
}
* html body {
	margin:0
}
.ui_title{ position:relative}
</style>
<script type="text/javascript"> 
	window.focus();
	var pc_hash = 'L8Gw2V';
			window.onload = function(){
		var html_a = document.getElementsByTagName('a');
		var num = html_a.length;
		for(var i=0;i<num;i++) {
			var href = html_a[i].href;
			if(href && href.indexOf('javascript:') == -1) {
				if(href.indexOf('?') != -1) {
					html_a[i].href = href+'&pc_hash='+pc_hash;
				} else {
					html_a[i].href = href+'?pc_hash='+pc_hash;
				}
			}
		}
		var html_form = document.forms;
		var num = html_form.length;
		for(var i=0;i<num;i++) {
			var newNode = document.createElement("input");
			newNode.name = 'pc_hash';
			newNode.type = 'hidden';
			newNode.value = pc_hash;
			html_form[i].appendChild(newNode);
		}
	}
</script>
<title></title>
</head>
<body class="body_ifm">
<div class="infoboxp">
  <div class="infoboxp_top">
    <h6>��̨��ͼ</h6>
  </div>
  <div class="common-form"> <?php $_from = $this->_tpl_vars['navigation']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['v']):
?>
    <table width="100%" bgcolor="#dfdfdf">
      <tr>
        <td height="30" style="padding-left:10px"><strong><?php echo $this->_tpl_vars['v']['name']; ?>
</strong></td>
      </tr>
      <tr>
        <td> <?php $_from = $this->_tpl_vars['one_menu'][$this->_tpl_vars['v']['id']]; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['val']):
?>
          <table width="100%" bgcolor="#f7f7f7">
            <tr>
              <td height="30" style="padding-left:40px;"><strong><?php echo $this->_tpl_vars['val']['name']; ?>
</strong></td>
            </tr>
            <tr>
              <td bgcolor="#fdfeff" height="30" style="padding-left:70px;"> <?php $_from = $this->_tpl_vars['two_menu'][$this->_tpl_vars['val']['id']]; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['value']):
?>
                <div style="float:left; width:100px; height:30px; line-height:30px; "> <a href="javascript:go('<?php echo $this->_tpl_vars['value']['url']; ?>
')"><?php echo $this->_tpl_vars['value']['name']; ?>
</a> </div>
                <?php endforeach; endif; unset($_from); ?> </td>
            </tr>
            <?php endforeach; endif; unset($_from); ?>
          </table></td>
      </tr>
    </table>
    <?php endforeach; endif; unset($_from); ?> </div>
</div>
<script>
function go(url) {
	 window.top.document.getElementById('rightMain').src=url;
	 window.top.art.dialog({id:'map'}).close();
}
</script>
</body>
</html>