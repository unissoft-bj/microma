<?php /* Smarty version 2.6.26, created on 2014-09-11 09:14:22
         compiled from admin/admin_user_config.htm */ ?>
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
<script>
<?php if ($_GET['category'] == '1' || $_GET['category'] == '2'): ?>
$(document).ready(function(){
	$("div.tag_box > div").hide();
	$("div.tag_box > div").eq(5).show();

	$("div.main_tag > ul").find("li").removeClass("on");
	$("div.main_tag > ul").find("li").eq(5).addClass("on");
});
<?php endif; ?>
</script>
</head>
<body class="body_ifm">
<div class="infoboxp">
<div id="subboxdiv" style="width:100%;height:100%;display:none;position:absolute;"></div>
<div class="infoboxp_top"><h6>�û�����</h6></div>
<div class="main_tag">
<ul style="margin-left:0px;">
	<li class="on">��������</li>

	<li>��ҵ����</li>
    <li>��������</li>
	<li>��Աͷ��</li>
    <li>��Ա�ȼ�</li>

</ul>
<div class="clear"></div>
<div class="tag_box">
<div>
<table width="100%" class="table_form">
 <tr class="admin_table_trbg">
            <th width="220">����˵����</th>
            <td>����ֵ</td>
            <td width="160">����</td>
        </tr>
       <tr>
		<th width="220">���˻�Ա�ʼ����</th>
		<td>
		    <input type="radio" name="user_status" value="1" id="user_status_0" <?php if ($this->_tpl_vars['config']['user_status'] == 1): ?>checked<?php endif; ?>>
		    <label for="user_status_0">����</label>
		    <input type="radio" name="user_status" value="0" id="user_status_1" <?php if ($this->_tpl_vars['config']['user_status'] != 1): ?>checked<?php endif; ?>>
		    <label for="user_status_1">�ر�</label>&nbsp;&nbsp;<a href="javascript:jihuo();" class="admin_submit_jh">��ǰ�û�ȫ������</a></td>
            <td width="160">user_status</td>
	</tr>
    <tr>
		<th width="220">ǿ��������֤��</th>
		<td>
		    <input type="radio" name="user_enforce_identitycert" value="1" id="RadioGroup1_0" <?php if ($this->_tpl_vars['config']['user_enforce_identitycert'] == 1): ?>checked<?php endif; ?>>
		    <label>����</label>
		    <input type="radio" name="user_enforce_identitycert" value="0" id="RadioGroup1_1" <?php if ($this->_tpl_vars['config']['user_enforce_identitycert'] != 1): ?>checked<?php endif; ?>>
		    <label>�ر�</label></td>
            <td width="160">user_enforce_identitycert</td>

    <tr class="admin_table_trbg">
		<th width="220">ǰ̨������ʾ��</th>
		<td>
		    <input type="radio" name="user_name" value="1" id="Radiouser_name_1" <?php if ($this->_tpl_vars['config']['user_name'] == '1' || $this->_tpl_vars['config']['user_name'] == ''): ?>checked<?php endif; ?>>
		    <label for="Radiouser_name_1">ȫ��</label>
		    <input type="radio" name="user_name" value="2" id="Radiouser_name_2" <?php if ($this->_tpl_vars['config']['user_name'] == '2'): ?>checked<?php endif; ?>>
		    <label for="Radiouser_name_2">����</label>
            <input type="radio" name="user_name" value="3" id="Radiouser_name_3" <?php if ($this->_tpl_vars['config']['user_name'] == '3'): ?>checked<?php endif; ?>>
		    <label for="Radiouser_name_3">�������</label>
            <font color="gray">����ĳ������Ϊ������ѡ��ȫ��ǰֱ̨����ʾ��������������ʾ������(Ůʿ)�������������ֱ���������������ʾ��</font>
            </td>
            <td width="160">user_name</td>
	</tr>
    <tr>
		<th width="220">����΢������ˣ�</th>
		<td>
		    <input type="radio" name="user_wjl" value="0" id="user_wjl_0" <?php if ($this->_tpl_vars['config']['user_wjl'] == 0): ?>checked<?php endif; ?>>
		    <label for="user_wjl_0">����</label>
		    <input type="radio" name="user_wjl" value="1" id="user_wjl_1" <?php if ($this->_tpl_vars['config']['user_wjl'] != 0): ?>checked<?php endif; ?>>
		    <label for="user_wjl_1">�ر�</label></td>
            <td width="160">user_wjl</td>
	</tr>
    <tr class="admin_table_trbg">
		<th width="220">����΢������ϵ��ʽ�鿴��</th>
		<td>
		    <input type="radio" name="user_wjl_link" value="1" id="user_wjl_link_0" <?php if ($this->_tpl_vars['config']['user_wjl_link'] == 1): ?>checked<?php endif; ?>>
		    <label for="user_wjl_link_0">��¼�鿴</label>
		    <input type="radio" name="user_wjl_link" value="0" id="user_wjl_link_1" <?php if ($this->_tpl_vars['config']['user_wjl_link'] != 1): ?>checked<?php endif; ?>>
		    <label for="user_wjl_link_1">����</label></td>
            <td width="160">user_wjl_link</td>
	</tr>
    <tr>
		<th width="220">�ٱ������ҵ��</th>
		<td>
		    <input type="radio" name="user_report" value="1" id="user_report_0" <?php if ($this->_tpl_vars['config']['user_report'] == 1): ?>checked<?php endif; ?>>
		    <label for="user_report_0">����</label>
		    <input type="radio" name="user_report" value="0" id="user_report_1" <?php if ($this->_tpl_vars['config']['user_report'] != 1): ?>checked<?php endif; ?>>
		    <label for="user_report_1">�ر�</label></td>
            <td width="160">user_report</td>
	</tr>
     <tr class="admin_table_trbg">
		<th width="220">����������Ϣ����֤��֤��</th>
		<td>
		    <input type="radio" name="user_idcard" value="1" id="user_idcard_0" <?php if ($this->_tpl_vars['config']['user_idcard'] == 1): ?>checked<?php endif; ?>>
		    <label for="user_idcard_0">����</label>
		    <input type="radio" name="user_idcard" value="0" id="user_idcard_1" <?php if ($this->_tpl_vars['config']['user_idcard'] != 1): ?>checked<?php endif; ?>>
		    <label for="user_idcard_1">�ر�</label> <font color="gray">��֤�����������ȷ��д����֤���ر����ڲ�Ϊ��ʱ�жϣ�����д���ж�</font></td>
            <td width="160">user_idcard</td>
	</tr>

     <tr>
		<th width="220">��������֤��ˣ�</th>
		<td>
		    <input type="radio" name="user_idcard_status" value="1" id="user_idcard_status_0" <?php if ($this->_tpl_vars['config']['user_idcard_status'] == 1): ?>checked<?php endif; ?>>
		    <label for="user_idcard_status_0">����</label>
		    <input type="radio" name="user_idcard_status" value="0" id="user_idcard_status_1" <?php if ($this->_tpl_vars['config']['user_idcard_status'] != 1): ?>checked<?php endif; ?>>
		    <label for="user_idcard_status_1">�ر�</label></td>
             <td width="160">user_idcard_status</td>
	</tr>

	<tr class="admin_table_trbg">
		<th width="220">��Ա��¼��ſɲ鿴��ҵ��ϵ��Ϣ��</th>
		<td>
			<input type="radio" name="com_login_link" value="1" id="RadioGroup1_0" <?php if ($this->_tpl_vars['config']['com_login_link'] == 1): ?>checked<?php endif; ?>>
			<label>����</label>
			<input type="radio" name="com_login_link" value="0" id="RadioGroup1_1" <?php if ($this->_tpl_vars['config']['com_login_link'] != 1): ?>checked<?php endif; ?>>
			<label>�ر�</label>
		</td>
		<td width="160">com_login_link</td>
	</tr>
	   <tr >
		<th width="220">ӵ�м����ſɲ鿴��ҵ��ϵ��Ϣ��</th>
		<td>
			<input type="radio" name="com_resume_link" value="1" id="RadioGroup1_0" <?php if ($this->_tpl_vars['config']['com_resume_link'] == 1): ?>checked<?php endif; ?>>
			<label>����</label>
			<input type="radio" name="com_resume_link" value="0" id="RadioGroup1_1" <?php if ($this->_tpl_vars['config']['com_resume_link'] != 1): ?>checked<?php endif; ?>>
			<label>�ر�</label>
		</td>
		<td width="160">com_resume_link</td>
	</tr>
	<tr class="admin_table_trbg">
    	<th width="220">��ְ��ͷ�����ã�</th>
		<td>
          <input type="radio" name="sy_usertype_1" value="0" id="RadioGroup10_12" <?php if ($this->_tpl_vars['config']['sy_usertype_1'] == '0'): ?>checked<?php endif; ?>>
          <label for="RadioGroup10_12">Ĭ����ʾ</label>&nbsp;
          <input type="radio" name="sy_usertype_1" value="1" id="RadioGroup10_13" <?php if ($this->_tpl_vars['config']['sy_usertype_1'] == '1'): ?>checked<?php endif; ?>>
          <label for="RadioGroup10_13">���غ���ʾ</label><br>
          <font color="gray" style="display:none">���غ���ʾ��ֻ�����ؼ�����Ĺ�˾�ſ��Կ����˼���ͷ��</font>
        </td>
        <td width="160">sy_usertype_1</td>
    </tr>

	<tr >
    	<th width="220"><font color="red">���˲�ҳ��Ĭ����ʾ���</font>��</th>
		<td>
          <input type="radio" name="sy_default_userclass" value="1" id="RadioGroup10_16" <?php if ($this->_tpl_vars['config']['sy_default_userclass'] == '1'): ?>checked<?php endif; ?>>
          <label for="RadioGroup10_16">��</label>&nbsp;
          <input type="radio" name="sy_default_userclass" value="2" id="RadioGroup10_17" <?php if ($this->_tpl_vars['config']['sy_default_userclass'] == '2'): ?>checked<?php endif; ?>>
          <label for="RadioGroup10_17">��</label>
          <font color="gray"  >��ѡ�񡰷񡱣���ֱ����ʾ�����б�</font>
        </td>
        <td width="160">sy_default_userclass</td>
    </tr>
	<tr  class="admin_table_trbg">
		<th width="220">���˻�Ա������������</th>
		<td>
            <input class="input-text tips_class" type="text" name="user_number" id="user_number" value="<?php echo $this->_tpl_vars['config']['user_number']; ?>
" size="20" maxlength="255" onKeyUp="this.value=this.value.replace(/[^0-9.]/g,'')"/>
            �� <font color="gray" style="display:none"> Ϊ������</font>
        </td>
        <td width="160">user_number</td>
	</tr>

	<tr  >
		<th width="220">�ϴ�������Ƭ��С��</th>
		<td><input class="input-text tips_class" type="text" name="user_pickb" id="user_pickb" value="<?php echo $this->_tpl_vars['config']['user_pickb']; ?>
" size="20" maxlength="255" onKeyUp="this.value=this.value.replace(/[^0-9.]/g,'')"/>KB <font color="gray" style="display:none">˵����1024KB=1M</font></td>
        <td width="160">user_pickb</td>
	</tr>
	<tr  class="admin_table_trbg">
		<th width="220">����ͷ��ü��������ã�</th>
		<td><input class="input-text tips_class" type="text" name="user_imgwidth" id="user_imgwidth" value="<?php echo $this->_tpl_vars['config']['user_imgwidth']; ?>
" size="20" maxlength="255" onKeyUp="this.value=this.value.replace(/[^0-9.]/g,'')"/>PX <font color="gray" style="display:none">�����밴������վ��ʾͷ�����趨</font></td>
        <td width="160">user_imgwidth</td>
	</tr>
    <tr   >
		<th width="220">����ͷ��ü��߶����ã�</th>
		<td><input class="input-text tips_class" type="text" name="user_imgheight" id="user_imgheight" value="<?php echo $this->_tpl_vars['config']['user_imgheight']; ?>
" size="20" maxlength="255" onKeyUp="this.value=this.value.replace(/[^0-9.]/g,'')"/>PX <font color="gray" style="display:none">�����밴������վ��ʾͷ�����趨</font></td>
        <td width="160">user_imgheight</td>
	</tr>
	<tr class="admin_table_trbg">
		<td colspan="3" align="center"><input class="admin_submit4" id="config" type="button" name="config" value="�ύ">&nbsp;&nbsp;<input class="admin_submit4" type="reset" value="����"/></td>
	</tr>
</table>
</div>

<div class="hiddendiv">
<table width="100%" class="table_form">
  <tr class="admin_table_trbg">
          <th width="220">����˵����</th>
          <td>����ֵ</td>
          <td width="160">����</td>
    </tr>
 <tr>
		<th width="220">������ҵ��Ա��ˣ�</th>
		<td>
		    <input type="radio" name="com_status" value="1" id="com_status_0" <?php if ($this->_tpl_vars['config']['com_status'] == 1): ?>checked<?php endif; ?>>
		    <label for="com_status_0">�����</label>
		    <input type="radio" name="com_status" value="0" id="com_status_1" <?php if ($this->_tpl_vars['config']['com_status'] != 1): ?>checked<?php endif; ?>>
		    <label for="com_status_1">���</label></td>
            <td width="160">com_status</td>
	</tr>
 	   <tr class="admin_table_trbg">
		<th width="220">��ҵ��Աģʽ��</th>
		<td>
		    <input type="radio" name="com_vip_type" value="1" id="com_vip_type1_0" <?php if ($this->_tpl_vars['config']['com_vip_type'] == 1): ?>checked<?php endif; ?>>
		    <label for="com_vip_type1_0">ʱ��ģʽ</label>
		    <input type="radio" name="com_vip_type" value="2" id="com_vip_type1_1" <?php if ($this->_tpl_vars['config']['com_vip_type'] == 2): ?>checked<?php endif; ?>>
		    <label for="com_vip_type1_1">�ײ�ģʽ</label>
            <input type="radio" name="com_vip_type" value="0" id="com_vip_type1_2" <?php if ($this->_tpl_vars['config']['com_vip_type'] == 0): ?>checked<?php endif; ?>>
		    <label for="com_vip_type1_2">ͬʱ����</label></td>
            <td width="160">com_vip_type</td>
	</tr>
    <tr>
		<th width="220">ǿ��������֤��</th>
		<td>
		    <input type="radio" name="com_enforce_emailcert" value="1" id="RadioGroup1_0" <?php if ($this->_tpl_vars['config']['com_enforce_emailcert'] == 1): ?>checked<?php endif; ?>>
		    <label>����</label>
		    <input type="radio" name="com_enforce_emailcert" value="0" id="RadioGroup1_1" <?php if ($this->_tpl_vars['config']['com_enforce_emailcert'] != 1): ?>checked<?php endif; ?>>
		    <label>�ر�</label></td>
            <td width="160">com_enforce_emailcert</td>
	</tr>
    <tr  class="admin_table_trbg">
		<th width="220">ǿ���ֻ���֤��</th>
		<td>
		    <input type="radio" name="com_enforce_mobilecert" value="1" id="RadioGroup1_0" <?php if ($this->_tpl_vars['config']['com_enforce_mobilecert'] == 1): ?>checked<?php endif; ?>>
		    <label>����</label>
		    <input type="radio" name="com_enforce_mobilecert" value="0" id="RadioGroup1_1" <?php if ($this->_tpl_vars['config']['com_enforce_mobilecert'] != 1): ?>checked<?php endif; ?>>
		    <label>�ر�</label></td>
            <td width="160">com_enforce_mobilecert</td>
	</tr>
    <tr>
		<th width="220">ǿ��Ӫҵִ����֤��</th>
		<td>
		    <input type="radio" name="com_enforce_licensecert" value="1" id="RadioGroup1_0" <?php if ($this->_tpl_vars['config']['com_enforce_licensecert'] == 1): ?>checked<?php endif; ?>>
		    <label>����</label>
		    <input type="radio" name="com_enforce_licensecert" value="0" id="RadioGroup1_1" <?php if ($this->_tpl_vars['config']['com_enforce_licensecert'] != 1): ?>checked<?php endif; ?>>
		    <label>�ر�</label></td>
            <td width="160">com_enforce_licensecert</td>
	</tr>
    <tr class="admin_table_trbg">
		<th width="220">ǿ�����õ���λ�ã�</th>
		<td>
		    <input type="radio" name="com_enforce_setposition" value="1" id="RadioGroup1_0" <?php if ($this->_tpl_vars['config']['com_enforce_setposition'] == 1): ?>checked<?php endif; ?>>
		    <label>����</label>
		    <input type="radio" name="com_enforce_setposition" value="0" id="RadioGroup1_1" <?php if ($this->_tpl_vars['config']['com_enforce_setposition'] != 1): ?>checked<?php endif; ?>>
		    <label>�ر�</label></td>
            <td width="160">com_enforce_setposition</td>
	</tr>
 	<tr>
		<th width="220">������ְ��ѯ��</th>
		<td>
		    <input type="radio" name="com_message" value="1" id="com_message_0" <?php if ($this->_tpl_vars['config']['com_message'] == 1): ?>checked<?php endif; ?>>
		    <label for="com_message_0">����</label>
		    <input type="radio" name="com_message" value="0" id="com_message_1" <?php if ($this->_tpl_vars['config']['com_message'] != 1): ?>checked<?php endif; ?>>
		    <label for="com_message_1">�ر�</label></td>
            <td width="160">com_message</td>
	</tr>
   <tr class="admin_table_trbg">
		<th width="220">�ٱ�����˲ţ�</th>
		<td>
		    <input type="radio" name="com_report" value="1" id="com_report_0" <?php if ($this->_tpl_vars['config']['com_report'] == 1): ?>checked<?php endif; ?>>
		    <label for="com_report_0">����</label>
		    <input type="radio" name="com_report" value="0" id="com_report_1" <?php if ($this->_tpl_vars['config']['com_report'] != 1): ?>checked<?php endif; ?>>
		    <label for="com_report_1">�ر�</label></td>
            <td width="160">com_report</td>
	</tr>

    <tr>
		<th width="220">�ϴ���˾LOGO��С��</th>
		<td><input class="input-text tips_class" type="text" name="com_pickb" id="com_pickb" value="<?php echo $this->_tpl_vars['config']['com_pickb']; ?>
" size="20" maxlength="255" onKeyUp="this.value=this.value.replace(/[^0-9.]/g,'')"/>KB <font color="gray" style="display:none">˵����1024KB=1M</font></td>
        <td width="160">com_pickb</td>
	</tr>

	   <tr class="admin_table_trbg">
		<th width="220">��ҵ�ϴ�ͼƬ��С��</th>
		<td><input class="input-text tips_class" type="text" name="com_uppic" id="com_uppic" value="<?php echo $this->_tpl_vars['config']['com_uppic']; ?>
" size="20" maxlength="255" onKeyUp="this.value=this.value.replace(/[^0-9.]/g,'')"/> <font color="gray" style="display:none">KB</font></td>
        <td width="160">com_uppic</td>
	</tr>
    <tr>
		<th width="220">һ�仰��Ƹ��ˣ�</th>
		<td>
		    <input type="radio" name="com_fast_status" value="0" id="RadioGroup1_0" <?php if ($this->_tpl_vars['config']['com_fast_status'] == 0): ?>checked<?php endif; ?>>
		    <label>����</label>
		    <input type="radio" name="com_fast_status" value="1" id="RadioGroup1_1" <?php if ($this->_tpl_vars['config']['com_fast_status'] != 0): ?>checked<?php endif; ?>>
		    <label>�ر�</label></td>
            <td width="160">com_fast_status</td>
	</tr>
        <tr class="admin_table_trbg">
		<th width="220">��ҵְλ������ˣ�</th>
		<td>
		    <input type="radio" name="com_job_status" value="0" id="RadioGroup1_0" <?php if ($this->_tpl_vars['config']['com_job_status'] == 0): ?>checked<?php endif; ?>>
		    <label>����</label>
		    <input type="radio" name="com_job_status" value="1" id="RadioGroup1_1" <?php if ($this->_tpl_vars['config']['com_job_status'] != 0): ?>checked<?php endif; ?>>
		    <label>�ر�</label></td>
            <td width="160">com_job_status</td>
	</tr>
      <tr>
		<th width="220">��ҵ��֤��ˣ�</th>
		<td>
		    <input type="radio" name="com_cert_status" value="1" id="RadioGroup1_0" <?php if ($this->_tpl_vars['config']['com_cert_status'] == 1): ?>checked<?php endif; ?>>
		    <label>����</label>
		    <input type="radio" name="com_cert_status" value="0" id="RadioGroup1_1" <?php if ($this->_tpl_vars['config']['com_cert_status'] != 1): ?>checked<?php endif; ?>>
		    <label>�ر�</label></td>
            <td width="160">com_cert_status</td>
	</tr>
        <tr class="admin_table_trbg">
		<th width="220">��Ա���ں�򳬳���Χ����<?php echo $this->_tpl_vars['config']['integral_pricename']; ?>
ģʽ��</th>
		<td>
		    <input type="radio" name="com_integral_online" value="1" id="RadioGroup1_0" <?php if ($this->_tpl_vars['config']['com_integral_online'] == 1): ?>checked<?php endif; ?>>
		    <label>����</label>
		    <input type="radio" name="com_integral_online" value="0" id="RadioGroup1_1" <?php if ($this->_tpl_vars['config']['com_integral_online'] != 1): ?>checked<?php endif; ?>>
		    <label>�ر�</label>
            <font color="gray">ע:�رյ��������Ա���ں����ܲ�����</font>
       	</td>
        <td width="160">com_integral_online</td>
	</tr>

    <tr>
		<th width="220">��ҵע��Ĭ�ϵȼ���</th>
        <?php if (is_array ( $this->_tpl_vars['rows'] )): ?>
		<td>
        	<?php $_from = $this->_tpl_vars['qy_rows']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['v']):
?>
		    <input type="radio" name="com_rating" value="<?php echo $this->_tpl_vars['v']['id']; ?>
" id="rating_<?php echo $this->_tpl_vars['v']['id']; ?>
" <?php if ($this->_tpl_vars['config']['com_rating'] == $this->_tpl_vars['v']['id']): ?>checked<?php endif; ?>>
		    <label for="rating_<?php echo $this->_tpl_vars['v']['id']; ?>
"><?php echo $this->_tpl_vars['v']['name']; ?>
</label>&nbsp;&nbsp;
		    <?php endforeach; endif; unset($_from); ?>
        </td>
        <td width="160">com_rating</td>
        <?php else: ?>
          <td>
        	���޵ȼ���<a href="index.php?m=userconfig&c=comclass" style="color:red;">���ӻ�Ա�ȼ�</a>
            <input type="hidden" name="com_rating" value="0">
        	</td>
        <?php endif; ?>
	</tr>
	<tr class="admin_table_trbg">
    	<th width="220"><font color="red">�ҹ���ҳ��Ĭ����ʾ���</font>��</th>
		<td>
          <input type="radio" name="sy_default_comclass" value="1" id="RadioGroup10_14" <?php if ($this->_tpl_vars['config']['sy_default_comclass'] == '1'): ?>checked<?php endif; ?>>
          <label for="RadioGroup10_14">��</label>&nbsp;
          <input type="radio" name="sy_default_comclass" value="2" id="RadioGroup10_15" <?php if ($this->_tpl_vars['config']['sy_default_comclass'] == '2'): ?>checked<?php endif; ?>>
          <label for="RadioGroup10_15">��</label>
          <font color="gray"  >��ѡ�񡰷񡱣���ֱ����ʾְλ�б�</font>
        </td>
        <td width="160">sy_default_comclass</td>
    </tr> 
	<tr >
		<td colspan="3" align="center">
        <input class="admin_submit4" id="mconfig" type="button" name="config" value="�ύ" />&nbsp;&nbsp;
        <input class="admin_submit4" type="reset" value="����" /></td>
	</tr>
</table>
</div>
<div class="hiddendiv">
<table width="100%" class="table_form">
  <tr class="admin_table_trbg">
          <th width="220">����˵����</th>
          <td>����ֵ</td>
          <td width="160">����</td>
    </tr>
        <tr>
		<th width="220"><?php echo $this->_tpl_vars['config']['integral_pricename']; ?>
����ʣ�</th>
		<td><input class="input-text tips_class" type="text" name="integral_pricename" id="integral_pricename" value="<?php echo $this->_tpl_vars['config']['integral_pricename']; ?>
" size="20" maxlength="255"/> <font color="gray" style="display:none">Ĭ��Ϊ���֣��������</font></td>
         <td width="160">integral_pricename</td>
	</tr>
    <tr class="admin_table_trbg">
		<th width="220">���ֵ�λ��</th>
		<td><input class="input-text tips_class" type="text" name="integral_priceunit" id="integral_priceunit" value="<?php echo $this->_tpl_vars['config']['integral_priceunit']; ?>
" size="20" maxlength="255"/> <font color="gray" style="display:none">Ĭ��Ϊ�㣬��������λ</font></td>
        <td width="160">integral_priceunit</td>
	</tr>
    <tr>
		<th width="220"><?php echo $this->_tpl_vars['config']['integral_pricename']; ?>
�һ�������</th>
		<td><input class="input-text tips_class" type="text" name="integral_proportion" id="integral_proportion" value="<?php echo $this->_tpl_vars['config']['integral_proportion']; ?>
" size="20" maxlength="255"/>�� <font color="gray" style="display:none">����1Ԫ=30�����</font></td>
        <td width="160">integral_proportion</td>
	</tr>
    <tr class="admin_table_trbg">
		<th width="220">���Ŷһ�������</th>
		<td><input class="input-text tips_class" type="text" name="integral_msg_proportion" id="integral_msg_proportion" value="<?php echo $this->_tpl_vars['config']['integral_msg_proportion']; ?>
" size="20" maxlength="255"/>�� <font color="gray" style="display:none">����1Ԫ=10��</font></td>
        <td width="160">integral_msg_proportion</td>
	</tr>
    <tr>
	<th width="220">����ְλ��</th>
		<td>- <input class="input-text" type="text" name="integral_job" id="integral_job" value="<?php echo $this->_tpl_vars['config']['integral_job']; ?>
" size="20" maxlength="255" onKeyUp="this.value=this.value.replace(/[^0-9.]/g,'')"/><?php echo $this->_tpl_vars['config']['integral_pricename']; ?>
 </td>
        <td width="160">integral_job</td>
	</tr>
    <tr class="admin_table_trbg">
	<th width="220">ˢ��ְλ��</th>
		<td>- <input class="input-text" type="text" name="integral_jobefresh" id="integral_jobefresh" value="<?php echo $this->_tpl_vars['config']['integral_jobefresh']; ?>
" size="20" maxlength="255" onKeyUp="this.value=this.value.replace(/[^0-9.]/g,'')"/><?php echo $this->_tpl_vars['config']['integral_pricename']; ?>
 </td>
        <td width="160">integral_jobefresh</td>
	</tr>
    <tr>
	<th width="220">�޸�ְλ��</th>
		<td>- <input class="input-text" type="text" name="integral_jobedit" id="integral_jobedit" value="<?php echo $this->_tpl_vars['config']['integral_jobedit']; ?>
" size="20" maxlength="255" onKeyUp="this.value=this.value.replace(/[^0-9.]/g,'')"/><?php echo $this->_tpl_vars['config']['integral_pricename']; ?>
 </td>
         <td width="160">integral_jobedit</td>
	</tr>
    <tr class="admin_table_trbg">
	<th width="220">�����˲ż�����</th>
		<td>- <input class="input-text" type="text" name="integral_down_resume" id="integral_down_resume" value="<?php echo $this->_tpl_vars['config']['integral_down_resume']; ?>
" size="20" maxlength="255" onKeyUp="this.value=this.value.replace(/[^0-9.]/g,'')"/><?php echo $this->_tpl_vars['config']['integral_pricename']; ?>
 </td>
        <td width="160">integral_down_resume</td>
	</tr>
	<tr>
	<th width="220">���������˲ţ�</th>
		<td>- <input class="input-text" type="text" name="integral_interview" id="integral_interview" value="<?php echo $this->_tpl_vars['config']['integral_interview']; ?>
" size="20" maxlength="255" onKeyUp="this.value=this.value.replace(/[^0-9.]/g,'')"/><?php echo $this->_tpl_vars['config']['integral_pricename']; ?>
 </td>
        <td width="160">integral_interview</td>
	</tr>
	<tr class="admin_table_trbg">
		<th width="220">��ҵ������Ƹÿ����Ҫ<?php echo $this->_tpl_vars['config']['integral_pricename']; ?>
��</th>
		<td><input class="input-text tips_class" type="text" name="com_urgent" id="com_urgent" value="<?php echo $this->_tpl_vars['config']['com_urgent']; ?>
" size="" maxlength="255" onKeyUp="this.value=this.value.replace(/[^0-9.]/g,'')"/> <font color="gray" style="display:none"><?php echo $this->_tpl_vars['config']['integral_pricename']; ?>
</font></td>
		<td width="160">com_urgent</td>
	</tr>
	<tr>
		<th width="220">��ҵ�Ƽ���Ƹÿ����Ҫ<?php echo $this->_tpl_vars['config']['integral_pricename']; ?>
��</th>
		<td><input class="input-text tips_class" type="text" name="com_recjob" id="com_recjob" value="<?php echo $this->_tpl_vars['config']['com_recjob']; ?>
" size="" maxlength="255" onKeyUp="this.value=this.value.replace(/[^0-9.]/g,'')"/> <font color="gray" style="display:none"><?php echo $this->_tpl_vars['config']['integral_pricename']; ?>
</font></td>
		<td width="160">com_recjob</td>
	</tr>

    <tr>
	<th width="220">��Աע������<?php echo $this->_tpl_vars['config']['integral_pricename']; ?>
��</th>
		<td>+ <input class="input-text tips_class" type="text" name="integral_reg" id="integral_reg" value="<?php echo $this->_tpl_vars['config']['integral_reg']; ?>
" size="20" maxlength="255" onKeyUp="this.value=this.value.replace(/[^0-9.]/g,'')"/><?php echo $this->_tpl_vars['config']['integral_pricename']; ?>
 <font color="gray" style="display:none">˵������Ӧ��������</font></td>
        <td width="160">integral_reg</td>
	</tr>
	<tr>
	<th width="220">ְλ�Զ�ˢ�£����죩��</th>
		<td>- <input class="input-text tips_class" type="text" name="job_auto" id="job_auto" value="<?php echo $this->_tpl_vars['config']['job_auto']; ?>
" size="20" maxlength="255" onKeyUp="this.value=this.value.replace(/[^0-9.]/g,'')"/><?php echo $this->_tpl_vars['config']['integral_pricename']; ?>
 <font color="gray" style="display:none">˵��������ְλ�Զ�ˢ�¹���һ���軨�ѵ�<?php echo $this->_tpl_vars['config']['integral_pricename']; ?>
</font></td>
        <td width="160">job_auto</td>
	</tr>

    <tr class="admin_table_trbg">
		<td colspan="3" align="center">
        <input class="admin_submit4" id="integral" type="button" name="config" value="�ύ" />&nbsp;&nbsp;
        <input class="admin_submit4" type="reset" value="����" /></td>
	</tr>
</table>
</div>
<div class="hiddendiv">
	<iframe id="supportiframe"  name="supportiframe" onload="returnmessage('supportiframe');" style="display:none"></iframe>
    <form action="index.php?m=userconfig&c=save_logo" method="post" enctype= "multipart/form-data" target="supportiframe">
    <table width="100%" class="table_form">
     <tr class="admin_table_trbg">
          <th width="160">����˵���� </th>
          <td>����ֵ</td>
          <td width="160">����</td>
    </tr>
    <tr>
		<th width="150">Ĭ�ϸ���ͷ��</th>
		<td><input  type="file"  name="sy_member_icon" class="input-text">
        <?php if ($this->_tpl_vars['config']['sy_member_icon'] != ""): ?>
        <img src="<?php echo $this->_tpl_vars['config']['sy_weburl']; ?>
/<?php echo $this->_tpl_vars['config']['sy_member_icon']; ?>
" width="90" height="120">
        <?php endif; ?>
            </td>
             <td width="160">sy_member_icon</td>
	</tr>
	 <tr class="admin_table_trbg">
		<th width="150">Ĭ����ҵͷ��</th>
		<td><input  type="file"   name="sy_unit_icon" class="input-text">
        <?php if ($this->_tpl_vars['config']['sy_unit_icon'] != ""): ?>
        <img src="<?php echo $this->_tpl_vars['config']['sy_weburl']; ?>
/<?php echo $this->_tpl_vars['config']['sy_unit_icon']; ?>
" width="250" height="90">
        <?php endif; ?>
          </td>
          <td width="160">sy_unit_icon</td>
	</tr>

	 <tr>
		<th width="150">Ĭ������Ȧ/�ʴ�ͷ��</th>
		<td><input  type="file"   name="sy_friend_icon" class="input-text">
        <?php if ($this->_tpl_vars['config']['sy_friend_icon'] != ""): ?>
        <img src="<?php echo $this->_tpl_vars['config']['sy_weburl']; ?>
/<?php echo $this->_tpl_vars['config']['sy_friend_icon']; ?>
" width="90" height="120">
        <?php endif; ?>
          </td>
           <td width="160">sy_friend_icon</td>
	</tr>
	<tr  >
		<td colspan="3" align="center">
		<input class="admin_submit4"  type="submit" name="waterconfig" value="�ύ" />&nbsp;&nbsp;
		<input class="admin_submit4" type="reset" value="����" /></td>
	</tr>
    </table>
	<input type="hidden" name="pytoken" id='pytoken' value="<?php echo $this->_tpl_vars['pytoken']; ?>
">
    </form>
</div>
<div class="hiddendiv table-list">
<div class="table-list">
<div class="admin_hy_tj">
<span class="company_job_a"><a href="index.php?m=userconfig&c=comclass"class="company_job_tj" ><em>������ҵ��Ա�ȼ�</em></a></span>


    </div>
<table width="100%">
	<thead>
		<tr class="admin_table_top">
			<th>���</th>
			<th>��Ա����</th>
            <th>��Աģʽ</th>
            <th>�������</th>
			<th>����</th>
            <th>����<?php echo $this->_tpl_vars['config']['integral_pricename']; ?>
</th>
			<th>����ʱ��</th>
			<th>״̬</th>
			<th class="admin_table_th_bg">����</th>
		</tr>
	</thead>
	<tbody>
        <?php $_from = $this->_tpl_vars['rows']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['v']):
?>
		<tr align="center">
			<td><span><?php echo $this->_tpl_vars['v']['id']; ?>
</span></td>
			<td class="ud"><?php echo $this->_tpl_vars['v']['name']; ?>
</td>
            <td class="ud"><?php if ($this->_tpl_vars['v']['type'] == 1): ?>�ײ�ģʽ<?php else: ?>ʱ��ģʽ<?php endif; ?></td>
            <td class="ud">��ҵ��Ա</td>
			<td class="od"><?php if ($this->_tpl_vars['v']['service_price'] != ""): ?><?php echo $this->_tpl_vars['v']['service_price']; ?>
<?php else: ?>����<?php endif; ?></td>
            <td class="od"><?php echo $this->_tpl_vars['v']['integral_buy']; ?>
</td>
			<td><?php if ($this->_tpl_vars['v']['service_time'] != ""): ?><?php echo $this->_tpl_vars['v']['service_time']; ?>
��<?php else: ?>����<?php endif; ?></td>
			<td>
                <?php if ($this->_tpl_vars['v']['display'] == 1): ?><font color="red">�ɼ�</font><?php else: ?><font color="blue">����</font><?php endif; ?>
                </td>
			<td>
			<a href="index.php?m=userconfig&c=comclass&id=<?php echo $this->_tpl_vars['v']['id']; ?>
"class="admin_cz_bj">�༭</a> |
            <a href="javascript:void(0)" onClick="layer_del('ȷ��Ҫɾ����', 'index.php?m=userconfig&c=del&id=<?php echo $this->_tpl_vars['v']['id']; ?>
');"class="admin_cz_sc"> ɾ��</a></td>
		</tr>
		<?php endforeach; endif; unset($_from); ?>
	</tbody>
</table>
</div>

</div>
</div>
</div>
<script>
var $switchtag = $("div.main_tag ul li");
$switchtag.click(function(){
	$(this).addClass("on").siblings().removeClass("on");
	var index = $switchtag.index(this);
	$("div.tag_box > div")
		.eq(index).show()
		.siblings().hide();
});

$(".tips_class").hover(function(){
	var msg_id=$(this).attr('id');
	var msg=$('#'+msg_id+' + font').html();
	if($.trim(msg)!=''){
		layer.tips(msg, this, {guide: 1,style: ['background-color:#F26C4F; color:#fff;top:-7px', '#F26C4F']});
	}
},function(){
	var msg_id=$(this).attr('id');
	var msg=$('#'+msg_id+' + font').html();
	if($.trim(msg)!=''){
		layer.closeTips();
	}
});
$(function(){
	$("#integral").click(function(){
		$.post("index.php?m=userconfig&c=save",{
			config : $("#integral").val(),
			integral_job : $("#integral_job").val(),
			integral_pricename : $("#integral_pricename").val(),
			integral_priceunit : $("#integral_priceunit").val(),
			integral_proportion : $("#integral_proportion").val(),
			integral_msg_proportion : $("#integral_msg_proportion").val(),
			integral_jobefresh : $("#integral_jobefresh").val(),
			integral_jobedit : $("#integral_jobedit").val(),
			integral_down_resume : $("#integral_down_resume").val(),
			com_urgent : $("#com_urgent").val(),
			com_recjob : $("#com_recjob").val(),
			integral_interview : $("#integral_interview").val(),
			integral_reg : $("#integral_reg").val(),
			job_auto : $("#job_auto").val(),
			integral_com_comments : $("#integral_com_comments").val(),
			pytoken : $("#pytoken").val()
		},function(data,textStatus){
			config_msg(data);
		});
	});


	$("#mconfig").click(function(){
		$.post("index.php?m=userconfig&c=save",{
			config : $("#mconfig").val(),
			com_pickb : $("#com_pickb").val(),
			com_enforce_emailcert : $("input[name=com_enforce_emailcert]:checked").val(),
			com_enforce_mobilecert : $("input[name=com_enforce_mobilecert]:checked").val(),
			com_enforce_licensecert : $("input[name=com_enforce_licensecert]:checked").val(),
			com_enforce_setposition : $("input[name=com_enforce_setposition]:checked").val(),
			com_uppic : $("#com_uppic").val(),
			com_rating : $("input[name=com_rating]:checked").val(),
			com_integral_online : $("input[name=com_integral_online]:checked").val(),
			com_fast_status : $("input[name=com_fast_status]:checked").val(),
			com_job_status : $("input[name=com_job_status]:checked").val(),
			com_cert_status : $("input[name=com_cert_status]:checked").val(),
			com_vip_type : $("input[name=com_vip_type]:checked").val(),
			com_message : $("input[name=com_message]:checked").val(),
			com_report : $("input[name=com_report]:checked").val(),
			sy_default_comclass : $("input[name=sy_default_comclass]:checked").val(),
			com_status : $("input[name=com_status]:checked").val(), 
			pytoken:$("#pytoken").val()
		},function(data,textStatus){
			config_msg(data);
		});
	});
	$("input[name='lt_rec_rebates']").click(function(){
		$("#rebates_name").toggle();
	});
})

$(function(){
	$("#config").click(function(){
		$.post("index.php?m=userconfig&c=save",{
			config : $("#config").val(),
			user_number : $("#user_number").val(),
			user_pickb : $("#user_pickb").val(),
			user_imgwidth : $("#user_imgwidth").val(),
			user_imgheight : $("#user_imgheight").val(),
			user_status : $("input[name=user_status]:checked").val(),
			sy_default_userclass : $("input[name=sy_default_userclass]:checked").val(),
			user_enforce_identitycert : $("input[name=user_enforce_identitycert]:checked").val(),
			user_wjl : $("input[name=user_wjl]:checked").val(),
			user_wjl_link : $("input[name=user_wjl_link]:checked").val(),
			user_report : $("input[name=user_report]:checked").val(),
			user_name : $("input[name=user_name]:checked").val(),
			user_idcard : $("input[name=user_idcard]:checked").val(),
			user_idcard_status : $("input[name=user_idcard_status]:checked").val(),
			sy_usertype_1 : $("input[name=sy_usertype_1]:checked").val(),
			com_login_link : $("input[name=com_login_link]:checked").val(),
			com_resume_link : $("input[name=com_resume_link]:checked").val(),
			pytoken : $("#pytoken").val()
		},function(data,textStatus){
			config_msg(data);
		});
	});
})
function jihuo(){
	var pytoken=$("#pytoken").val();
	$.get('index.php?m=userconfig&c=jihuo&pytoken='+pytoken,function(data){
		if(data){
			parent.layer.msg('����ɹ���', 2, 9);
		}else{
			parent.layer.msg('����ʧ�ܣ�', 2, 8);
		}
	})
}
</script></div>
</body>
</html>