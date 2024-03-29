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
<title>后台管理</title>
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
<div class="infoboxp_top"><h6>用户配置</h6></div>
<div class="main_tag">
<ul style="margin-left:0px;">
	<li class="on">个人配置</li>

	<li>企业配置</li>
    <li>积分设置</li>
	<li>会员头像</li>
    <li>会员等级</li>

</ul>
<div class="clear"></div>
<div class="tag_box">
<div>
<table width="100%" class="table_form">
 <tr class="admin_table_trbg">
            <th width="220">参数说明：</th>
            <td>参数值</td>
            <td width="160">变量</td>
        </tr>
       <tr>
		<th width="220">个人会员邮件激活：</th>
		<td>
		    <input type="radio" name="user_status" value="1" id="user_status_0" <?php if ($this->_tpl_vars['config']['user_status'] == 1): ?>checked<?php endif; ?>>
		    <label for="user_status_0">开启</label>
		    <input type="radio" name="user_status" value="0" id="user_status_1" <?php if ($this->_tpl_vars['config']['user_status'] != 1): ?>checked<?php endif; ?>>
		    <label for="user_status_1">关闭</label>&nbsp;&nbsp;<a href="javascript:jihuo();" class="admin_submit_jh">以前用户全部激活</a></td>
            <td width="160">user_status</td>
	</tr>
    <tr>
		<th width="220">强制身份认证：</th>
		<td>
		    <input type="radio" name="user_enforce_identitycert" value="1" id="RadioGroup1_0" <?php if ($this->_tpl_vars['config']['user_enforce_identitycert'] == 1): ?>checked<?php endif; ?>>
		    <label>开启</label>
		    <input type="radio" name="user_enforce_identitycert" value="0" id="RadioGroup1_1" <?php if ($this->_tpl_vars['config']['user_enforce_identitycert'] != 1): ?>checked<?php endif; ?>>
		    <label>关闭</label></td>
            <td width="160">user_enforce_identitycert</td>

    <tr class="admin_table_trbg">
		<th width="220">前台人名显示：</th>
		<td>
		    <input type="radio" name="user_name" value="1" id="Radiouser_name_1" <?php if ($this->_tpl_vars['config']['user_name'] == '1' || $this->_tpl_vars['config']['user_name'] == ''): ?>checked<?php endif; ?>>
		    <label for="Radiouser_name_1">全名</label>
		    <input type="radio" name="user_name" value="2" id="Radiouser_name_2" <?php if ($this->_tpl_vars['config']['user_name'] == '2'): ?>checked<?php endif; ?>>
		    <label for="Radiouser_name_2">姓氏</label>
            <input type="radio" name="user_name" value="3" id="Radiouser_name_3" <?php if ($this->_tpl_vars['config']['user_name'] == '3'): ?>checked<?php endif; ?>>
		    <label for="Radiouser_name_3">简历编号</label>
            <font color="gray">例：某人姓名为张三，选择全名前台直接显示张三，姓氏则显示张先生(女士)，简历编号则是直接用其代替姓名显示。</font>
            </td>
            <td width="160">user_name</td>
	</tr>
    <tr>
		<th width="220">开启微简历审核：</th>
		<td>
		    <input type="radio" name="user_wjl" value="0" id="user_wjl_0" <?php if ($this->_tpl_vars['config']['user_wjl'] == 0): ?>checked<?php endif; ?>>
		    <label for="user_wjl_0">开启</label>
		    <input type="radio" name="user_wjl" value="1" id="user_wjl_1" <?php if ($this->_tpl_vars['config']['user_wjl'] != 0): ?>checked<?php endif; ?>>
		    <label for="user_wjl_1">关闭</label></td>
            <td width="160">user_wjl</td>
	</tr>
    <tr class="admin_table_trbg">
		<th width="220">开启微简历联系方式查看：</th>
		<td>
		    <input type="radio" name="user_wjl_link" value="1" id="user_wjl_link_0" <?php if ($this->_tpl_vars['config']['user_wjl_link'] == 1): ?>checked<?php endif; ?>>
		    <label for="user_wjl_link_0">登录查看</label>
		    <input type="radio" name="user_wjl_link" value="0" id="user_wjl_link_1" <?php if ($this->_tpl_vars['config']['user_wjl_link'] != 1): ?>checked<?php endif; ?>>
		    <label for="user_wjl_link_1">公开</label></td>
            <td width="160">user_wjl_link</td>
	</tr>
    <tr>
		<th width="220">举报虚假企业：</th>
		<td>
		    <input type="radio" name="user_report" value="1" id="user_report_0" <?php if ($this->_tpl_vars['config']['user_report'] == 1): ?>checked<?php endif; ?>>
		    <label for="user_report_0">开启</label>
		    <input type="radio" name="user_report" value="0" id="user_report_1" <?php if ($this->_tpl_vars['config']['user_report'] != 1): ?>checked<?php endif; ?>>
		    <label for="user_report_1">关闭</label></td>
            <td width="160">user_report</td>
	</tr>
     <tr class="admin_table_trbg">
		<th width="220">开启个人信息身份证验证：</th>
		<td>
		    <input type="radio" name="user_idcard" value="1" id="user_idcard_0" <?php if ($this->_tpl_vars['config']['user_idcard'] == 1): ?>checked<?php endif; ?>>
		    <label for="user_idcard_0">开启</label>
		    <input type="radio" name="user_idcard" value="0" id="user_idcard_1" <?php if ($this->_tpl_vars['config']['user_idcard'] != 1): ?>checked<?php endif; ?>>
		    <label for="user_idcard_1">关闭</label> <font color="gray">验证开启则必须正确填写身份证，关闭则在不为空时判断，不填写则不判断</font></td>
            <td width="160">user_idcard</td>
	</tr>

     <tr>
		<th width="220">个人身份证审核：</th>
		<td>
		    <input type="radio" name="user_idcard_status" value="1" id="user_idcard_status_0" <?php if ($this->_tpl_vars['config']['user_idcard_status'] == 1): ?>checked<?php endif; ?>>
		    <label for="user_idcard_status_0">开启</label>
		    <input type="radio" name="user_idcard_status" value="0" id="user_idcard_status_1" <?php if ($this->_tpl_vars['config']['user_idcard_status'] != 1): ?>checked<?php endif; ?>>
		    <label for="user_idcard_status_1">关闭</label></td>
             <td width="160">user_idcard_status</td>
	</tr>

	<tr class="admin_table_trbg">
		<th width="220">会员登录后才可查看企业联系信息：</th>
		<td>
			<input type="radio" name="com_login_link" value="1" id="RadioGroup1_0" <?php if ($this->_tpl_vars['config']['com_login_link'] == 1): ?>checked<?php endif; ?>>
			<label>开启</label>
			<input type="radio" name="com_login_link" value="0" id="RadioGroup1_1" <?php if ($this->_tpl_vars['config']['com_login_link'] != 1): ?>checked<?php endif; ?>>
			<label>关闭</label>
		</td>
		<td width="160">com_login_link</td>
	</tr>
	   <tr >
		<th width="220">拥有简历才可查看企业联系信息：</th>
		<td>
			<input type="radio" name="com_resume_link" value="1" id="RadioGroup1_0" <?php if ($this->_tpl_vars['config']['com_resume_link'] == 1): ?>checked<?php endif; ?>>
			<label>开启</label>
			<input type="radio" name="com_resume_link" value="0" id="RadioGroup1_1" <?php if ($this->_tpl_vars['config']['com_resume_link'] != 1): ?>checked<?php endif; ?>>
			<label>关闭</label>
		</td>
		<td width="160">com_resume_link</td>
	</tr>
	<tr class="admin_table_trbg">
    	<th width="220">求职者头像设置：</th>
		<td>
          <input type="radio" name="sy_usertype_1" value="0" id="RadioGroup10_12" <?php if ($this->_tpl_vars['config']['sy_usertype_1'] == '0'): ?>checked<?php endif; ?>>
          <label for="RadioGroup10_12">默认显示</label>&nbsp;
          <input type="radio" name="sy_usertype_1" value="1" id="RadioGroup10_13" <?php if ($this->_tpl_vars['config']['sy_usertype_1'] == '1'): ?>checked<?php endif; ?>>
          <label for="RadioGroup10_13">下载后显示</label><br>
          <font color="gray" style="display:none">下载后显示：只有下载简历后的公司才可以看个人简历头像</font>
        </td>
        <td width="160">sy_usertype_1</td>
    </tr>

	<tr >
    	<th width="220"><font color="red">找人才页面默认显示类别</font>：</th>
		<td>
          <input type="radio" name="sy_default_userclass" value="1" id="RadioGroup10_16" <?php if ($this->_tpl_vars['config']['sy_default_userclass'] == '1'): ?>checked<?php endif; ?>>
          <label for="RadioGroup10_16">是</label>&nbsp;
          <input type="radio" name="sy_default_userclass" value="2" id="RadioGroup10_17" <?php if ($this->_tpl_vars['config']['sy_default_userclass'] == '2'): ?>checked<?php endif; ?>>
          <label for="RadioGroup10_17">否</label>
          <font color="gray"  >若选择“否”，则直接显示简历列表</font>
        </td>
        <td width="160">sy_default_userclass</td>
    </tr>
	<tr  class="admin_table_trbg">
		<th width="220">个人会员发布简历数：</th>
		<td>
            <input class="input-text tips_class" type="text" name="user_number" id="user_number" value="<?php echo $this->_tpl_vars['config']['user_number']; ?>
" size="20" maxlength="255" onKeyUp="this.value=this.value.replace(/[^0-9.]/g,'')"/>
            份 <font color="gray" style="display:none"> 为空则不限</font>
        </td>
        <td width="160">user_number</td>
	</tr>

	<tr  >
		<th width="220">上传简历照片大小：</th>
		<td><input class="input-text tips_class" type="text" name="user_pickb" id="user_pickb" value="<?php echo $this->_tpl_vars['config']['user_pickb']; ?>
" size="20" maxlength="255" onKeyUp="this.value=this.value.replace(/[^0-9.]/g,'')"/>KB <font color="gray" style="display:none">说明：1024KB=1M</font></td>
        <td width="160">user_pickb</td>
	</tr>
	<tr  class="admin_table_trbg">
		<th width="220">个人头像裁剪宽度设置：</th>
		<td><input class="input-text tips_class" type="text" name="user_imgwidth" id="user_imgwidth" value="<?php echo $this->_tpl_vars['config']['user_imgwidth']; ?>
" size="20" maxlength="255" onKeyUp="this.value=this.value.replace(/[^0-9.]/g,'')"/>PX <font color="gray" style="display:none">比例请按照您网站显示头像规格设定</font></td>
        <td width="160">user_imgwidth</td>
	</tr>
    <tr   >
		<th width="220">个人头像裁剪高度设置：</th>
		<td><input class="input-text tips_class" type="text" name="user_imgheight" id="user_imgheight" value="<?php echo $this->_tpl_vars['config']['user_imgheight']; ?>
" size="20" maxlength="255" onKeyUp="this.value=this.value.replace(/[^0-9.]/g,'')"/>PX <font color="gray" style="display:none">比例请按照您网站显示头像规格设定</font></td>
        <td width="160">user_imgheight</td>
	</tr>
	<tr class="admin_table_trbg">
		<td colspan="3" align="center"><input class="admin_submit4" id="config" type="button" name="config" value="提交">&nbsp;&nbsp;<input class="admin_submit4" type="reset" value="重置"/></td>
	</tr>
</table>
</div>

<div class="hiddendiv">
<table width="100%" class="table_form">
  <tr class="admin_table_trbg">
          <th width="220">参数说明：</th>
          <td>参数值</td>
          <td width="160">变量</td>
    </tr>
 <tr>
		<th width="220">开启企业会员审核：</th>
		<td>
		    <input type="radio" name="com_status" value="1" id="com_status_0" <?php if ($this->_tpl_vars['config']['com_status'] == 1): ?>checked<?php endif; ?>>
		    <label for="com_status_0">不审核</label>
		    <input type="radio" name="com_status" value="0" id="com_status_1" <?php if ($this->_tpl_vars['config']['com_status'] != 1): ?>checked<?php endif; ?>>
		    <label for="com_status_1">审核</label></td>
            <td width="160">com_status</td>
	</tr>
 	   <tr class="admin_table_trbg">
		<th width="220">企业会员模式：</th>
		<td>
		    <input type="radio" name="com_vip_type" value="1" id="com_vip_type1_0" <?php if ($this->_tpl_vars['config']['com_vip_type'] == 1): ?>checked<?php endif; ?>>
		    <label for="com_vip_type1_0">时间模式</label>
		    <input type="radio" name="com_vip_type" value="2" id="com_vip_type1_1" <?php if ($this->_tpl_vars['config']['com_vip_type'] == 2): ?>checked<?php endif; ?>>
		    <label for="com_vip_type1_1">套餐模式</label>
            <input type="radio" name="com_vip_type" value="0" id="com_vip_type1_2" <?php if ($this->_tpl_vars['config']['com_vip_type'] == 0): ?>checked<?php endif; ?>>
		    <label for="com_vip_type1_2">同时开启</label></td>
            <td width="160">com_vip_type</td>
	</tr>
    <tr>
		<th width="220">强制邮箱认证：</th>
		<td>
		    <input type="radio" name="com_enforce_emailcert" value="1" id="RadioGroup1_0" <?php if ($this->_tpl_vars['config']['com_enforce_emailcert'] == 1): ?>checked<?php endif; ?>>
		    <label>开启</label>
		    <input type="radio" name="com_enforce_emailcert" value="0" id="RadioGroup1_1" <?php if ($this->_tpl_vars['config']['com_enforce_emailcert'] != 1): ?>checked<?php endif; ?>>
		    <label>关闭</label></td>
            <td width="160">com_enforce_emailcert</td>
	</tr>
    <tr  class="admin_table_trbg">
		<th width="220">强制手机认证：</th>
		<td>
		    <input type="radio" name="com_enforce_mobilecert" value="1" id="RadioGroup1_0" <?php if ($this->_tpl_vars['config']['com_enforce_mobilecert'] == 1): ?>checked<?php endif; ?>>
		    <label>开启</label>
		    <input type="radio" name="com_enforce_mobilecert" value="0" id="RadioGroup1_1" <?php if ($this->_tpl_vars['config']['com_enforce_mobilecert'] != 1): ?>checked<?php endif; ?>>
		    <label>关闭</label></td>
            <td width="160">com_enforce_mobilecert</td>
	</tr>
    <tr>
		<th width="220">强制营业执照认证：</th>
		<td>
		    <input type="radio" name="com_enforce_licensecert" value="1" id="RadioGroup1_0" <?php if ($this->_tpl_vars['config']['com_enforce_licensecert'] == 1): ?>checked<?php endif; ?>>
		    <label>开启</label>
		    <input type="radio" name="com_enforce_licensecert" value="0" id="RadioGroup1_1" <?php if ($this->_tpl_vars['config']['com_enforce_licensecert'] != 1): ?>checked<?php endif; ?>>
		    <label>关闭</label></td>
            <td width="160">com_enforce_licensecert</td>
	</tr>
    <tr class="admin_table_trbg">
		<th width="220">强制设置地理位置：</th>
		<td>
		    <input type="radio" name="com_enforce_setposition" value="1" id="RadioGroup1_0" <?php if ($this->_tpl_vars['config']['com_enforce_setposition'] == 1): ?>checked<?php endif; ?>>
		    <label>开启</label>
		    <input type="radio" name="com_enforce_setposition" value="0" id="RadioGroup1_1" <?php if ($this->_tpl_vars['config']['com_enforce_setposition'] != 1): ?>checked<?php endif; ?>>
		    <label>关闭</label></td>
            <td width="160">com_enforce_setposition</td>
	</tr>
 	<tr>
		<th width="220">开启求职咨询：</th>
		<td>
		    <input type="radio" name="com_message" value="1" id="com_message_0" <?php if ($this->_tpl_vars['config']['com_message'] == 1): ?>checked<?php endif; ?>>
		    <label for="com_message_0">开启</label>
		    <input type="radio" name="com_message" value="0" id="com_message_1" <?php if ($this->_tpl_vars['config']['com_message'] != 1): ?>checked<?php endif; ?>>
		    <label for="com_message_1">关闭</label></td>
            <td width="160">com_message</td>
	</tr>
   <tr class="admin_table_trbg">
		<th width="220">举报虚假人才：</th>
		<td>
		    <input type="radio" name="com_report" value="1" id="com_report_0" <?php if ($this->_tpl_vars['config']['com_report'] == 1): ?>checked<?php endif; ?>>
		    <label for="com_report_0">开启</label>
		    <input type="radio" name="com_report" value="0" id="com_report_1" <?php if ($this->_tpl_vars['config']['com_report'] != 1): ?>checked<?php endif; ?>>
		    <label for="com_report_1">关闭</label></td>
            <td width="160">com_report</td>
	</tr>

    <tr>
		<th width="220">上传公司LOGO大小：</th>
		<td><input class="input-text tips_class" type="text" name="com_pickb" id="com_pickb" value="<?php echo $this->_tpl_vars['config']['com_pickb']; ?>
" size="20" maxlength="255" onKeyUp="this.value=this.value.replace(/[^0-9.]/g,'')"/>KB <font color="gray" style="display:none">说明：1024KB=1M</font></td>
        <td width="160">com_pickb</td>
	</tr>

	   <tr class="admin_table_trbg">
		<th width="220">企业上传图片大小：</th>
		<td><input class="input-text tips_class" type="text" name="com_uppic" id="com_uppic" value="<?php echo $this->_tpl_vars['config']['com_uppic']; ?>
" size="20" maxlength="255" onKeyUp="this.value=this.value.replace(/[^0-9.]/g,'')"/> <font color="gray" style="display:none">KB</font></td>
        <td width="160">com_uppic</td>
	</tr>
    <tr>
		<th width="220">一句话招聘审核：</th>
		<td>
		    <input type="radio" name="com_fast_status" value="0" id="RadioGroup1_0" <?php if ($this->_tpl_vars['config']['com_fast_status'] == 0): ?>checked<?php endif; ?>>
		    <label>开启</label>
		    <input type="radio" name="com_fast_status" value="1" id="RadioGroup1_1" <?php if ($this->_tpl_vars['config']['com_fast_status'] != 0): ?>checked<?php endif; ?>>
		    <label>关闭</label></td>
            <td width="160">com_fast_status</td>
	</tr>
        <tr class="admin_table_trbg">
		<th width="220">企业职位发布审核：</th>
		<td>
		    <input type="radio" name="com_job_status" value="0" id="RadioGroup1_0" <?php if ($this->_tpl_vars['config']['com_job_status'] == 0): ?>checked<?php endif; ?>>
		    <label>开启</label>
		    <input type="radio" name="com_job_status" value="1" id="RadioGroup1_1" <?php if ($this->_tpl_vars['config']['com_job_status'] != 0): ?>checked<?php endif; ?>>
		    <label>关闭</label></td>
            <td width="160">com_job_status</td>
	</tr>
      <tr>
		<th width="220">企业认证审核：</th>
		<td>
		    <input type="radio" name="com_cert_status" value="1" id="RadioGroup1_0" <?php if ($this->_tpl_vars['config']['com_cert_status'] == 1): ?>checked<?php endif; ?>>
		    <label>开启</label>
		    <input type="radio" name="com_cert_status" value="0" id="RadioGroup1_1" <?php if ($this->_tpl_vars['config']['com_cert_status'] != 1): ?>checked<?php endif; ?>>
		    <label>关闭</label></td>
            <td width="160">com_cert_status</td>
	</tr>
        <tr class="admin_table_trbg">
		<th width="220">会员到期后或超出范围启用<?php echo $this->_tpl_vars['config']['integral_pricename']; ?>
模式：</th>
		<td>
		    <input type="radio" name="com_integral_online" value="1" id="RadioGroup1_0" <?php if ($this->_tpl_vars['config']['com_integral_online'] == 1): ?>checked<?php endif; ?>>
		    <label>开启</label>
		    <input type="radio" name="com_integral_online" value="0" id="RadioGroup1_1" <?php if ($this->_tpl_vars['config']['com_integral_online'] != 1): ?>checked<?php endif; ?>>
		    <label>关闭</label>
            <font color="gray">注:关闭的情况，会员到期后，则功能不能用</font>
       	</td>
        <td width="160">com_integral_online</td>
	</tr>

    <tr>
		<th width="220">企业注册默认等级：</th>
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
        	暂无等级，<a href="index.php?m=userconfig&c=comclass" style="color:red;">添加会员等级</a>
            <input type="hidden" name="com_rating" value="0">
        	</td>
        <?php endif; ?>
	</tr>
	<tr class="admin_table_trbg">
    	<th width="220"><font color="red">找工作页面默认显示类别</font>：</th>
		<td>
          <input type="radio" name="sy_default_comclass" value="1" id="RadioGroup10_14" <?php if ($this->_tpl_vars['config']['sy_default_comclass'] == '1'): ?>checked<?php endif; ?>>
          <label for="RadioGroup10_14">是</label>&nbsp;
          <input type="radio" name="sy_default_comclass" value="2" id="RadioGroup10_15" <?php if ($this->_tpl_vars['config']['sy_default_comclass'] == '2'): ?>checked<?php endif; ?>>
          <label for="RadioGroup10_15">否</label>
          <font color="gray"  >若选择“否”，则直接显示职位列表</font>
        </td>
        <td width="160">sy_default_comclass</td>
    </tr> 
	<tr >
		<td colspan="3" align="center">
        <input class="admin_submit4" id="mconfig" type="button" name="config" value="提交" />&nbsp;&nbsp;
        <input class="admin_submit4" type="reset" value="重置" /></td>
	</tr>
</table>
</div>
<div class="hiddendiv">
<table width="100%" class="table_form">
  <tr class="admin_table_trbg">
          <th width="220">参数说明：</th>
          <td>参数值</td>
          <td width="160">变量</td>
    </tr>
        <tr>
		<th width="220"><?php echo $this->_tpl_vars['config']['integral_pricename']; ?>
代替词：</th>
		<td><input class="input-text tips_class" type="text" name="integral_pricename" id="integral_pricename" value="<?php echo $this->_tpl_vars['config']['integral_pricename']; ?>
" size="20" maxlength="255"/> <font color="gray" style="display:none">默认为积分，例：金币</font></td>
         <td width="160">integral_pricename</td>
	</tr>
    <tr class="admin_table_trbg">
		<th width="220">积分单位：</th>
		<td><input class="input-text tips_class" type="text" name="integral_priceunit" id="integral_priceunit" value="<?php echo $this->_tpl_vars['config']['integral_priceunit']; ?>
" size="20" maxlength="255"/> <font color="gray" style="display:none">默认为点，例：个，位</font></td>
        <td width="160">integral_priceunit</td>
	</tr>
    <tr>
		<th width="220"><?php echo $this->_tpl_vars['config']['integral_pricename']; ?>
兑换比例：</th>
		<td><input class="input-text tips_class" type="text" name="integral_proportion" id="integral_proportion" value="<?php echo $this->_tpl_vars['config']['integral_proportion']; ?>
" size="20" maxlength="255"/>点 <font color="gray" style="display:none">例：1元=30点积分</font></td>
        <td width="160">integral_proportion</td>
	</tr>
    <tr class="admin_table_trbg">
		<th width="220">短信兑换比例：</th>
		<td><input class="input-text tips_class" type="text" name="integral_msg_proportion" id="integral_msg_proportion" value="<?php echo $this->_tpl_vars['config']['integral_msg_proportion']; ?>
" size="20" maxlength="255"/>条 <font color="gray" style="display:none">例：1元=10条</font></td>
        <td width="160">integral_msg_proportion</td>
	</tr>
    <tr>
	<th width="220">发布职位：</th>
		<td>- <input class="input-text" type="text" name="integral_job" id="integral_job" value="<?php echo $this->_tpl_vars['config']['integral_job']; ?>
" size="20" maxlength="255" onKeyUp="this.value=this.value.replace(/[^0-9.]/g,'')"/><?php echo $this->_tpl_vars['config']['integral_pricename']; ?>
 </td>
        <td width="160">integral_job</td>
	</tr>
    <tr class="admin_table_trbg">
	<th width="220">刷新职位：</th>
		<td>- <input class="input-text" type="text" name="integral_jobefresh" id="integral_jobefresh" value="<?php echo $this->_tpl_vars['config']['integral_jobefresh']; ?>
" size="20" maxlength="255" onKeyUp="this.value=this.value.replace(/[^0-9.]/g,'')"/><?php echo $this->_tpl_vars['config']['integral_pricename']; ?>
 </td>
        <td width="160">integral_jobefresh</td>
	</tr>
    <tr>
	<th width="220">修改职位：</th>
		<td>- <input class="input-text" type="text" name="integral_jobedit" id="integral_jobedit" value="<?php echo $this->_tpl_vars['config']['integral_jobedit']; ?>
" size="20" maxlength="255" onKeyUp="this.value=this.value.replace(/[^0-9.]/g,'')"/><?php echo $this->_tpl_vars['config']['integral_pricename']; ?>
 </td>
         <td width="160">integral_jobedit</td>
	</tr>
    <tr class="admin_table_trbg">
	<th width="220">下载人才简历：</th>
		<td>- <input class="input-text" type="text" name="integral_down_resume" id="integral_down_resume" value="<?php echo $this->_tpl_vars['config']['integral_down_resume']; ?>
" size="20" maxlength="255" onKeyUp="this.value=this.value.replace(/[^0-9.]/g,'')"/><?php echo $this->_tpl_vars['config']['integral_pricename']; ?>
 </td>
        <td width="160">integral_down_resume</td>
	</tr>
	<tr>
	<th width="220">发送面试人才：</th>
		<td>- <input class="input-text" type="text" name="integral_interview" id="integral_interview" value="<?php echo $this->_tpl_vars['config']['integral_interview']; ?>
" size="20" maxlength="255" onKeyUp="this.value=this.value.replace(/[^0-9.]/g,'')"/><?php echo $this->_tpl_vars['config']['integral_pricename']; ?>
 </td>
        <td width="160">integral_interview</td>
	</tr>
	<tr class="admin_table_trbg">
		<th width="220">企业紧急招聘每天需要<?php echo $this->_tpl_vars['config']['integral_pricename']; ?>
：</th>
		<td><input class="input-text tips_class" type="text" name="com_urgent" id="com_urgent" value="<?php echo $this->_tpl_vars['config']['com_urgent']; ?>
" size="" maxlength="255" onKeyUp="this.value=this.value.replace(/[^0-9.]/g,'')"/> <font color="gray" style="display:none"><?php echo $this->_tpl_vars['config']['integral_pricename']; ?>
</font></td>
		<td width="160">com_urgent</td>
	</tr>
	<tr>
		<th width="220">企业推荐招聘每天需要<?php echo $this->_tpl_vars['config']['integral_pricename']; ?>
：</th>
		<td><input class="input-text tips_class" type="text" name="com_recjob" id="com_recjob" value="<?php echo $this->_tpl_vars['config']['com_recjob']; ?>
" size="" maxlength="255" onKeyUp="this.value=this.value.replace(/[^0-9.]/g,'')"/> <font color="gray" style="display:none"><?php echo $this->_tpl_vars['config']['integral_pricename']; ?>
</font></td>
		<td width="160">com_recjob</td>
	</tr>

    <tr>
	<th width="220">会员注册赠送<?php echo $this->_tpl_vars['config']['integral_pricename']; ?>
：</th>
		<td>+ <input class="input-text tips_class" type="text" name="integral_reg" id="integral_reg" value="<?php echo $this->_tpl_vars['config']['integral_reg']; ?>
" size="20" maxlength="255" onKeyUp="this.value=this.value.replace(/[^0-9.]/g,'')"/><?php echo $this->_tpl_vars['config']['integral_pricename']; ?>
 <font color="gray" style="display:none">说明：对应的增加数</font></td>
        <td width="160">integral_reg</td>
	</tr>
	<tr>
	<th width="220">职位自动刷新（按天）：</th>
		<td>- <input class="input-text tips_class" type="text" name="job_auto" id="job_auto" value="<?php echo $this->_tpl_vars['config']['job_auto']; ?>
" size="20" maxlength="255" onKeyUp="this.value=this.value.replace(/[^0-9.]/g,'')"/><?php echo $this->_tpl_vars['config']['integral_pricename']; ?>
 <font color="gray" style="display:none">说明：购买职位自动刷新功能一天需花费的<?php echo $this->_tpl_vars['config']['integral_pricename']; ?>
</font></td>
        <td width="160">job_auto</td>
	</tr>

    <tr class="admin_table_trbg">
		<td colspan="3" align="center">
        <input class="admin_submit4" id="integral" type="button" name="config" value="提交" />&nbsp;&nbsp;
        <input class="admin_submit4" type="reset" value="重置" /></td>
	</tr>
</table>
</div>
<div class="hiddendiv">
	<iframe id="supportiframe"  name="supportiframe" onload="returnmessage('supportiframe');" style="display:none"></iframe>
    <form action="index.php?m=userconfig&c=save_logo" method="post" enctype= "multipart/form-data" target="supportiframe">
    <table width="100%" class="table_form">
     <tr class="admin_table_trbg">
          <th width="160">参数说明： </th>
          <td>参数值</td>
          <td width="160">变量</td>
    </tr>
    <tr>
		<th width="150">默认个人头像：</th>
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
		<th width="150">默认企业头像：</th>
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
		<th width="150">默认朋友圈/问答头像：</th>
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
		<input class="admin_submit4"  type="submit" name="waterconfig" value="提交" />&nbsp;&nbsp;
		<input class="admin_submit4" type="reset" value="重置" /></td>
	</tr>
    </table>
	<input type="hidden" name="pytoken" id='pytoken' value="<?php echo $this->_tpl_vars['pytoken']; ?>
">
    </form>
</div>
<div class="hiddendiv table-list">
<div class="table-list">
<div class="admin_hy_tj">
<span class="company_job_a"><a href="index.php?m=userconfig&c=comclass"class="company_job_tj" ><em>添加企业会员等级</em></a></span>


    </div>
<table width="100%">
	<thead>
		<tr class="admin_table_top">
			<th>编号</th>
			<th>会员名称</th>
            <th>会员模式</th>
            <th>服务对象</th>
			<th>费用</th>
            <th>购买<?php echo $this->_tpl_vars['config']['integral_pricename']; ?>
</th>
			<th>服务时间</th>
			<th>状态</th>
			<th class="admin_table_th_bg">操作</th>
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
            <td class="ud"><?php if ($this->_tpl_vars['v']['type'] == 1): ?>套餐模式<?php else: ?>时间模式<?php endif; ?></td>
            <td class="ud">企业会员</td>
			<td class="od"><?php if ($this->_tpl_vars['v']['service_price'] != ""): ?><?php echo $this->_tpl_vars['v']['service_price']; ?>
<?php else: ?>不限<?php endif; ?></td>
            <td class="od"><?php echo $this->_tpl_vars['v']['integral_buy']; ?>
</td>
			<td><?php if ($this->_tpl_vars['v']['service_time'] != ""): ?><?php echo $this->_tpl_vars['v']['service_time']; ?>
天<?php else: ?>不限<?php endif; ?></td>
			<td>
                <?php if ($this->_tpl_vars['v']['display'] == 1): ?><font color="red">可见</font><?php else: ?><font color="blue">隐藏</font><?php endif; ?>
                </td>
			<td>
			<a href="index.php?m=userconfig&c=comclass&id=<?php echo $this->_tpl_vars['v']['id']; ?>
"class="admin_cz_bj">编辑</a> |
            <a href="javascript:void(0)" onClick="layer_del('确定要删除？', 'index.php?m=userconfig&c=del&id=<?php echo $this->_tpl_vars['v']['id']; ?>
');"class="admin_cz_sc"> 删除</a></td>
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
			parent.layer.msg('激活成功！', 2, 9);
		}else{
			parent.layer.msg('激活失败！', 2, 8);
		}
	})
}
</script></div>
</body>
</html>