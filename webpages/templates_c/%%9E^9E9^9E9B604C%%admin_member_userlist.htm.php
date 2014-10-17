<?php /* Smarty version 2.6.26, created on 2014-09-11 09:18:16
         compiled from admin/admin_member_userlist.htm */ ?>
<?php require_once(SMARTY_CORE_DIR . 'core.load_plugins.php');
smarty_core_load_plugins(array('plugins' => array(array('modifier', 'date_format', 'admin/admin_member_userlist.htm', 146, false),)), $this); ?>
<!DOCTYPE html PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3.org/TR/html4/loose.dtd">
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=gb2312">
<link href="images/reset.css" rel="stylesheet" type="text/css" />
<link href="images/system.css" rel="stylesheet" type="text/css" />
<link href="images/table_form.css" rel="stylesheet" type="text/css" />
<script src="<?php echo $this->_tpl_vars['config']['sy_weburl']; ?>
/js/jquery-1.8.0.min.js"></script>
<script src="<?php echo $this->_tpl_vars['config']['sy_weburl']; ?>
/js/layer/layer.min.js" language="javascript"></script>
<script src="js/admin_public.js" language="javascript"></script>
 <script>
$(function(){
	$(".status").click(function(){
		$("input[name=pid]").val($(this).attr("pid"));
		var uid=$(this).attr("pid");
		var status=$(this).attr("status");
		$("#status"+status).attr("checked",true);
		$("input[name=uid]").val(uid);
		$.get("index.php?m=user_member&c=lockinfo&uid="+uid,function(msg){
			$("#alertcontent").val(msg);
			status_div('锁定用户','350px','220px');
		});
	});
});
function SendMsg(){
	var codewebarr="";
	$(".check_all:checked").each(function(){
		if(codewebarr==""){codewebarr=$(this).val();}else{codewebarr=codewebarr+","+$(this).val();}
	});
	$("#userid").val(codewebarr);
	setTimeout(function(){$('#checkform').submit()},0);
}

</script>
<title>后台管理</title>
</head>
<body class="body_ifm">
<form action="index.php?m=admin_message&c=show" method="post" id='checkform'>
<input type="hidden" name="userid" id="userid" value="">
<input type="hidden" name="pytoken" value="<?php echo $this->_tpl_vars['pytoken']; ?>
">
</form>
<div id="status_div"  style="display:none; width: 350px; ">
	<div class="" style=" margin-top:10px; "  >
    <div id="infobox">
      <form action="index.php?m=user_member&c=status" target="supportiframe" method="post" id="formstatus">
		<table cellspacing='2' cellpadding='3'>
			<tr><td><span style="font-weight:bold;">锁定操作：</span></td> <td>
        <label for="status1"><input type="radio" name="status" value="1" id="status1" >正常</label>
        <label for="status2"><input type="radio" name="status" value="2" id="status2">锁定</label></td></tr>
			<tr><td><span style="font-weight:bold;">审核说明：</span></td><td><textarea id="alertcontent" name="lock_info" cols="30" rows="5"></textarea></td></tr>
			<tr style="text-align:center;margin-top:10px"><td colspan='2' > <input type="submit"  value='确认' class="submit_btn">
          &nbsp;&nbsp;<input type="button" id="zxxCancelBtn" onClick="layer.closeAll();" class="cancel_btn" value='取消'></td></tr>
		</table>
		<input type="hidden" name="pytoken" value="<?php echo $this->_tpl_vars['pytoken']; ?>
">
        <input name="uid" value="0" type="hidden">
      </form>
    </div>
  </div>
</div>
<div class="infoboxp">
    <div class="infoboxp_top">
        <h6>个人会员列表</h6>
        <div class="infoboxp_right">
            <a href="index.php?m=user_member&c=add" class="infoboxp_tj">添加会员</a>
            <a href="javascript:vold(0);" class="infoboxp_send" onClick="SendMsg();">发送</a>
        </div>
    </div>
<div class="company_job">
        <div class="company_job_list_h1">
           <span class="company_m6" style="float:left;">
			<form action="index.php" name="myform" method="get">
				<input name="m" value="user_member" type="hidden"/>
				 <span  style="margin-left:10px;">检索类型：</span><select name="type">
				<option value="1" <?php if ($this->_tpl_vars['get_type']['type'] == '1'): ?> selected="selected" <?php endif; ?> >用户名</option>
				<option value="2" <?php if ($this->_tpl_vars['get_type']['type'] == '2'): ?> selected="selected" <?php endif; ?> >姓名</option>
				<option value="3" <?php if ($this->_tpl_vars['get_type']['type'] == '3'): ?> selected="selected" <?php endif; ?> >EMAIL</option>
				<option value="4" <?php if ($this->_tpl_vars['get_type']['type'] == '4'): ?> selected="selected" <?php endif; ?>>手机号</option>
				</select>
				<input class="company_job_text" type="text" name="username" value="<?php echo $this->_tpl_vars['get_type']['username']; ?>
" size="25"/>
			 <input  class="company_job_new_sub"     type="submit" name="comsearch" value="检索会员"/>&nbsp;
				</form>
        </span>
	</div>
</div>
<div class="table-list">
<div class="admin_table_border">
<iframe id="supportiframe"  name="supportiframe" onload="returnmessage('supportiframe');" style="display:none"></iframe>
<form action="index.php"  target="supportiframe" name="myform" method="get" id='myform'>
<input name="m" value="user_member" type="hidden"/>
<input name="c" value="del" type="hidden"/>
<table width="100%">
	<thead>
	<tr class="admin_table_top">
		    <th style="width:20px;"><label for="chkall"><input type="checkbox" id='chkAll'  onclick='CheckAll(this.form)'/></label></th>

            <th align="left">
			<?php if ($_GET['t'] == 'uid' && $_GET['order'] == 'asc'): ?>
			<a href="index.php?m=user_member&order=desc&t=uid">用户ID<img src="images/sanj.jpg"/></a>
            <?php else: ?>
			<a href="index.php?m=user_member&order=asc&t=uid">用户ID<img src="images/sanj2.jpg"/></a>
            <?php endif; ?></th>
			<th align="left">用户名</th>
            <th align="left">姓名</th>
			<th align="left">EMAIL</th>
  			<th align="left">手机号</th>

            <th>
			 <?php if ($_GET['t'] == 'reg_date' && $_GET['order'] == 'asc'): ?>
			<a href="index.php?m=user_member&order=desc&t=reg_date">注册时间<img src="images/sanj.jpg"/></a>
            <?php else: ?>
			<a href="index.php?m=user_member&order=asc&t=reg_date">注册时间<img src="images/sanj2.jpg"/></a>
            <?php endif; ?></th>

            <th>
			 <?php if ($_GET['t'] == 'login_date' && $_GET['order'] == 'asc'): ?>
			<a href="index.php?m=user_member&order=desc&t=login_date">最近登录时间<img src="images/sanj.jpg"/></a>
            <?php else: ?>
			<a href="index.php?m=user_member&order=asc&t=login_date">最近登录时间<img src="images/sanj2.jpg"/></a>
            <?php endif; ?></th>
            <th>登录IP</th>

            <th>
			 <?php if ($_GET['t'] == 'login_hits' && $_GET['order'] == 'asc'): ?>
			<a href="index.php?m=user_member&order=desc&t=login_hits">登录数<img src="images/sanj.jpg"/></a>
            <?php else: ?>
			<a href="index.php?m=user_member&order=asc&t=login_hits">登录数<img src="images/sanj2.jpg"/></a>
            <?php endif; ?>
			</th>
            <th>重置密码</th>
              <th>添加简历</th>
			<th   class="admin_table_th_bg">操作</th>
		</tr>
	</thead>
	<tbody>
    <?php $_from = $this->_tpl_vars['userrows']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['key'] => $this->_tpl_vars['v']):
?>
    <tr align="center">
	    <td width="20"><input type="checkbox" value="<?php echo $this->_tpl_vars['v']['uid']; ?>
" class="check_all" name='del[]' onclick='unselectall()' rel="del_chk" email="<?php echo $this->_tpl_vars['v']['email']; ?>
" moblie="<?php echo $this->_tpl_vars['v']['telphone']; ?>
"/></td>
    	<td align="left" class="td1" style="text-align:center; width:60px;"><?php echo $this->_tpl_vars['v']['uid']; ?>
</td>
    	<td align="left">
        	<a href="index.php?m=user_member&c=Imitate&uid=<?php echo $this->_tpl_vars['v']['uid']; ?>
" target="_blank"><?php echo $this->_tpl_vars['v']['username']; ?>
</a>
        	<?php if ($this->_tpl_vars['v']['status'] == 2): ?><img src="../data/ajax_img/suo.png" alt="已锁定"><?php endif; ?>
        </td>
   	 	<td align="left"><?php echo $this->_tpl_vars['v']['name']; ?>
</td>
        <td class="od" align="left"><?php echo $this->_tpl_vars['v']['email']; ?>
</td>
		<td class="gd" align="left"><?php echo $this->_tpl_vars['v']['telphone']; ?>
</td>
		<td class="td" align="left"><?php echo ((is_array($_tmp=$this->_tpl_vars['v']['reg_date'])) ? $this->_run_mod_handler('date_format', true, $_tmp, "%Y-%m-%d") : smarty_modifier_date_format($_tmp, "%Y-%m-%d")); ?>
</td>
<td><?php if ($this->_tpl_vars['v']['login_date'] != ""): ?><?php echo ((is_array($_tmp=$this->_tpl_vars['v']['login_date'])) ? $this->_run_mod_handler('date_format', true, $_tmp, "%Y-%m-%d") : smarty_modifier_date_format($_tmp, "%Y-%m-%d")); ?>

        <?php else: ?><font color="#FF0000">从未登录</font><?php endif; ?></td>
   	 	<td align="left"><?php echo $this->_tpl_vars['v']['login_ip']; ?>
</td>
        <td><?php echo $this->_tpl_vars['v']['login_hits']; ?>
</td>
         <td><a href="javascript:void(0);" onClick="resetpw('<?php echo $this->_tpl_vars['v']['username']; ?>
','<?php echo $this->_tpl_vars['v']['uid']; ?>
');"><font color="#FF0000">点我重置</font></a></td>
         <td> <a href="index.php?m=admin_resume&c=addresume&uid=<?php echo $this->_tpl_vars['v']['uid']; ?>
" >添加简历</a></td>
    	<td>
        <div class="admin_Operating_c" id="list_<?php echo $this->_tpl_vars['v']['uid']; ?>
" aid="<?php echo $this->_tpl_vars['v']['uid']; ?>
">
        <div class="admin_Operating">操作</div>
       <div class="admin_Operating_list admin_Operating_down" id="list<?php echo $this->_tpl_vars['v']['uid']; ?>
" style="display:none;">

        <a href="javascript:;" class="status admin_cz_sh" pid="<?php echo $this->_tpl_vars['v']['uid']; ?>
" status="<?php echo $this->_tpl_vars['v']['status']; ?>
">锁定</a> <a href="index.php?m=user_member&c=edit&id=<?php echo $this->_tpl_vars['v']['uid']; ?>
" class="admin_cz_bj">编辑</a> <a href="javascript:void(0)" onClick="layer_del('确定要删除？', 'index.php?m=user_member&c=del&del=<?php echo $this->_tpl_vars['v']['uid']; ?>
');"class="admin_cz_sc">删除</a>
        </div></div>
        </td>
  </tr>
  <?php endforeach; endif; unset($_from); ?>
  <tr style="background:#f1f1f1;">
    <td colspan="5" ><input class="admin_submit4" type="button" name="delsub" value="删除所选"  onclick="return really('del[]')"/></td>
   <td colspan="8" class="digg"><?php echo $this->_tpl_vars['pagenav']; ?>
</td>
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