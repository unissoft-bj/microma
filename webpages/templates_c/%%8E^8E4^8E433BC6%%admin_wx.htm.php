<?php /* Smarty version 2.6.26, created on 2014-10-01 21:12:26
         compiled from admin/admin_wx.htm */ ?>
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
<div id="subboxdiv" style="width:100%;height:100%;display:none;position:absolute;"></div>
<div class="infoboxp_top">
	<h6>΢�ſͻ�������</h6>
    <div class="infoboxp_right">
        <a href="index.php?m=wx&c=wxnav" class="infoboxp_tj">�˵�����</a>
        <a href="index.php?m=wx&c=binduser" class="infoboxp_tj">�û����б�</a>
        <a href="index.php?m=wx&c=keyword" class="infoboxp_tj">�����ؼ���</a>
        <a href="index.php?m=wx&c=wxlog" class="infoboxp_tj">�û�������־</a>
    </div>
</div>
<div class="main_tag">
<div class="tag_box">
    <div>
         <table width="100%" class="table_form">
            <tr class="admin_table_trbg">
                <th width="140">΢�ŷ��������ã�</th>
                <td></td>
            </tr>
             <tr>
                <th width="140">URL��</th>
                <td><?php echo $this->_tpl_vars['config']['sy_weburl']; ?>
/weixin/index.php<font color="gray" style="display:none"></font></td>
            </tr>
            <tr  class="admin_table_trbg">
                <th width="140">Token��</th>
                <td><input class="input-text" type="text" name="wx_token" id="wx_token" size="30" value="<?php echo $this->_tpl_vars['config']['wx_token']; ?>
" maxlength="255" ><font color="gray" style="display:none"></font></td>
            </tr>
             <tr >
                <th width="140">������ƾ�ݣ�</th>
                <td></td>
            </tr>
            <tr  class="admin_table_trbg">
                <th width="140">AppId��</th>
                <td><input class="input-text" type="text" name="wx_appid" id="wx_appid" value="<?php echo $this->_tpl_vars['config']['wx_appid']; ?>
" size="30" maxlength="255"/><font color="gray" style="display:none">�磺1002478xx</font></td>
            </tr>
            <tr>
                <th width="140">AppSecret��</th>
                <td><input class="input-text" type="text" name="wx_appsecret" id="wx_appsecret" value="<?php echo $this->_tpl_vars['config']['wx_appsecret']; ?>
" size="40" maxlength="255"/><font color="gray" style="display:none">�磺4dd1c30d472676914f2fbfbnjt33</font></td>
            </tr>
            <tr class="admin_table_trbg">
                <td colspan="2" align="center"><input class="admin_submit4" id="wxconfig" type="button" name="msgconfig" value="�ύ" />&nbsp;&nbsp;<input class="admin_submit4" type="reset" value="����" /></td>
            </tr>
        </table>
		<input type="hidden" name="pytoken" id='pytoken' value="<?php echo $this->_tpl_vars['pytoken']; ?>
">
    </div>
</div>
</div>
</div>
<script>
$(function(){
	$("#wxconfig").click(function(){
		$.post("index.php?m=wx&c=save",{
			config : $("#wxconfig").val(),
			wx_token : $("#wx_token").val(),
			wx_appid : $("#wx_appid").val(),
			pytoken:$("#pytoken").val(),
			wx_appsecret : $("#wx_appsecret").val()
		},function(data,textStatus){
			config_msg(data);
		});
	});
})
</script>
</div>
</body>
</html>