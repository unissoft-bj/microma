<?php /* Smarty version 2.6.26, created on 2014-09-11 09:14:29
         compiled from admin/admin_member_comlist.htm */ ?>
<?php require_once(SMARTY_CORE_DIR . 'core.load_plugins.php');
smarty_core_load_plugins(array('plugins' => array(array('function', 'seacrh_url', 'admin/admin_member_comlist.htm', 153, false),array('modifier', 'date_format', 'admin/admin_member_comlist.htm', 195, false),)), $this); ?>
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
function audall(status){
	var codewebarr="";
	$(".check_all:checked").each(function(){
		if(codewebarr==""){codewebarr=$(this).val();}else{codewebarr=codewebarr+","+$(this).val();}
	});
	if(codewebarr==""){
		parent.layer.msg('您还未选择任何信息！', 2, 8);	return false;
	}else{
		$("input[name=uid]").val(codewebarr);
 		$("#statusbody").val('');
		$("input[name='status']").attr('checked',false);
		$.layer({
			type : 1,
			title :'企业用户审核',
			offset: [($(window).height() - 220)/2 + 'px', ''],
			closeBtn : [0 , true],
			border : [10 , 0.3 , '#000', true],
			area : ['350px','220px'],
			page : {dom :"#infobox2"}
		});
	}
}
$(function(){
	$(".status").click(function(){
  		var uid=$(this).attr("pid");
		var pytoken=$("#pytoken").val();
		var status=$(this).attr("status");
		$("#status_"+status).attr("checked",true);
		$("input[name=uid]").val(uid);
		$.post("index.php?m=com_member&c=lockinfo",{uid:uid,pytoken:pytoken},function(msg){
			$("#lock_info").val(msg);
			status_div('锁定用户','350px','220px');
		});
	});
	$(".user_status").click(function(){
		var uid=$(this).attr("pid");
		var status=$(this).attr("status");
		$("#status"+status).attr("checked",true);
		var pytoken=$("#pytoken").val();
		$("input[name=uid]").val(uid);
 		$.post("index.php?m=com_member&c=lockinfo",{uid:uid,pytoken:pytoken},function(msg){
			$("#statusbody").val(msg);
			$.layer({
				type : 1,
				title :'企业用户审核',
				offset: [($(window).height() - 220)/2 + 'px', ''],
				closeBtn : [0 , true],
				border : [10 , 0.3 , '#000', true],
				area : ['350px','220px'],
				page : {dom :"#infobox2"}
			});
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
      <form action="index.php?m=com_member&c=status" target="supportiframe" method="post" id="formstatus">
        <table cellspacing='2' cellpadding='3'>
          <tr>
            <td><span style="font-weight:bold;">锁定操作：</span></td>
            <td><label for="status_1">
              <input type="radio" name="status" value="1" id="status_1" >
              正常</label>
              <label for="status_2">
              <input type="radio" name="status" value="2" id="status_2">
              锁定</label></td>
          </tr>
          <tr>
            <td><span style="font-weight:bold;">锁定说明：</span></td>
            <td><textarea id="lock_info"  name="lock_info" cols="30" rows="5"></textarea></td>
          </tr>
          <tr style="text-align:center;margin-top:10px">
            <td colspan='2' ><input type="submit"  value='确认' class="submit_btn">
              &nbsp;&nbsp;
              <input type="button"  onClick="layer.closeAll();" class="cancel_btn" value='取消'></td>
          </tr>
        </table>
		<input type="hidden" name="pytoken" value="<?php echo $this->_tpl_vars['pytoken']; ?>
">
        <input name="uid" value="0" type="hidden">
      </form>
    </div>
  </div>
</div>
<div id="infobox2"  style="display:none; width: 350px; ">
  <div class="">
    <div id="infobox">
      <form action="index.php?m=com_member&c=status" target="supportiframe" method="post" id="formstatus">
      <div class="admin_Operating_sh">
		<div class="admin_Operating_sh_h1" style="padding:5px;">审核操作：
        <label for="status0"><input type="radio" name="status" value="0" id="status0" >未审核</label>
        <label for="status1"><input type="radio" name="status" value="1" id="status1" >正常</label>
        <label for="status2"><input type="radio" name="status" value="3" id="status2">未通过</label></div>
		<div class="admin_Operating_sh_sm">审核说明：</div>
        <div><textarea id="statusbody" name="statusbody" class="admin_Operating_text"></textarea></div>
		<div class="admin_Operating_sub"> <input type="submit"  value='确认' class="submit_btn">
          &nbsp;&nbsp;<input type="button"  onClick="layer.closeAll();" class="cancel_btn" value='取消'></div>
		</div>
		<input type="hidden" name="pytoken" value="<?php echo $this->_tpl_vars['pytoken']; ?>
">
        <input name="uid" value="0" type="hidden">
      </form>
    </div>
  </div>
</div>
<div class="infoboxp">
  <div class="infoboxp_top">
    <h6>企业会员列表</h6>
    <div class="infoboxp_right"> <a href="index.php?m=com_member&c=add" class="infoboxp_tj">添加会员</a> <a href="javascript:vold(0);" class="infoboxp_tj" onClick="SendMsg();">发送</a> </div>
  </div>
  <div class="company_job">
    <div class="company_job_list_h1"> <span class="company_m6" style="float:left">
      <form action="index.php" name="myform" method="get">
        <input name="m" value="com_member" type="hidden"/>
        <span class="company_s_l"> 检索类型：</span> <span class="company_fl">
        <select name="type">
          <option value="1" <?php if ($this->_tpl_vars['get_type']['type'] == '1'): ?> selected="selected" <?php endif; ?>>用户名</option>
          <option value="2" <?php if ($this->_tpl_vars['get_type']['type'] == '2'): ?> selected="selected" <?php endif; ?>>EMAIL</option>
          <option value="3" <?php if ($this->_tpl_vars['get_type']['type'] == '3'): ?> selected="selected" <?php endif; ?>>手机号</option>
        </select>
        </span>
        <input class="company_job_text"  type="text" name="keyword"  size="25"/>
        <input class="company_job_new_sub"  type="submit" name="comsearch" value="检索会员"/>
        &nbsp;
      </form>
      </span> <span class="company_job_a"> <a href="<?php echo seacrh_url(array('status' => 1,'m' => 'com_member','untype' => 'status'), $this);?>
" class="company_job_bg1">已审核</a></span> <span class="company_job_a"> <a href="<?php echo seacrh_url(array('status' => 4,'m' => 'com_member','untype' => 'status'), $this);?>
" class="company_job_bg2">未审核</a></span> <span class="company_job_a"> <a href="<?php echo seacrh_url(array('status' => 3,'m' => 'com_member','untype' => 'status'), $this);?>
" class="company_job_bg3">未通过</a></span> <span class="company_job_a"> <a href="<?php echo seacrh_url(array('status' => 2,'m' => 'com_member','untype' => 'status'), $this);?>
" class="company_job_sb">锁定</a></span> <span class="company_job_a"> <a href="index.php?m=com_member" class="company_job_all"><em>全部</em></a></span> </div>
  </div>
  <div class="table-list">
    <div class="admin_table_border">
      <iframe id="supportiframe"  name="supportiframe" onload="returnmessage('supportiframe');" style="display:none"></iframe>
      <form action="index.php" name="myform" method="get" id='myform' target="supportiframe">
        <input name="m" value="com_member" type="hidden"/>
        <input name="c" value="del" type="hidden"/>
        <table width="100%">
          <thead>
            <tr class="admin_table_top">
              <th><label for="chkall">
                <input type="checkbox" id='chkAll'  onclick='CheckAll(this.form)'/>
                </label></th>
              <th> <?php if ($_GET['t'] == 'uid' && $_GET['order'] == 'asc'): ?> <a href="<?php echo seacrh_url(array('order' => 'desc','t' => 'uid','m' => 'com_member','untype' => "order,t"), $this);?>
">用户ID<img src="images/sanj.jpg"/></a> <?php else: ?> <a href="<?php echo seacrh_url(array('order' => 'asc','t' => 'uid','m' => 'com_member','untype' => "order,t"), $this);?>
">用户ID<img src="images/sanj2.jpg"/></a> <?php endif; ?></th>
              <th>用户名</th>
              <th>用户等级</th>
              <th>企业认证</th>
              <th>EMAIL</th>
              <th>手机号</th>
              <th> <?php if ($_GET['t'] == 'reg_date' && $_GET['order'] == 'asc'): ?> <a href="<?php echo seacrh_url(array('order' => 'desc','t' => 'reg_date','m' => 'com_member','untype' => "order,t"), $this);?>
">注册时间<img src="images/sanj.jpg"/></a> <?php else: ?> <a href="<?php echo seacrh_url(array('order' => 'asc','t' => 'reg_date','m' => 'com_member','untype' => "order,t"), $this);?>
">注册时间<img src="images/sanj2.jpg"/></a> <?php endif; ?></th>
              <th> <?php if ($_GET['t'] == 'login_date' && $_GET['order'] == 'asc'): ?> <a href="<?php echo seacrh_url(array('order' => 'desc','t' => 'login_date','m' => 'com_member','untype' => "order,t"), $this);?>
">最近登录时间<img src="images/sanj.jpg"/></a> <?php else: ?> <a href="<?php echo seacrh_url(array('order' => 'asc','t' => 'login_date','m' => 'com_member','untype' => "order,t"), $this);?>
">最近登录时间<img src="images/sanj2.jpg"/></a> <?php endif; ?></th>
              <th>重置密码</th>
              <th>状态</th>
                <th>添加职位</th>
              <th class="admin_table_th_bg">操作</th>
            </tr>
          </thead>
          <tbody>

          <?php $_from = $this->_tpl_vars['userrows']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['key'] => $this->_tpl_vars['v']):
?>
          <tr align="center">
            <td><input type="checkbox" value="<?php echo $this->_tpl_vars['v']['uid']; ?>
" class="check_all" name='del[]' onclick='unselectall()' rel="del_chk"  email="<?php echo $this->_tpl_vars['v']['email']; ?>
" moblie="<?php echo $this->_tpl_vars['v']['moblie']; ?>
"/></td>
            <td class="ud" style="text-align:center;"><?php echo $this->_tpl_vars['v']['uid']; ?>
</td>
            <td class="ud" align="left"><a href="index.php?m=user_member&c=Imitate&uid=<?php echo $this->_tpl_vars['v']['uid']; ?>
" target="_blank"><?php echo $this->_tpl_vars['v']['username']; ?>
</a> <?php if ($this->_tpl_vars['v']['status'] == 2): ?><img src="../data/ajax_img/suo.png" alt="已锁定"><?php endif; ?> </td>
            <td class="ud"><?php echo $this->_tpl_vars['v']['rat_name']; ?>
</td>
            <td> <?php if (stripos ( $this->_tpl_vars['v']['cert'] , '1' )): ?> <img src="../data/ajax_img/1-1.png" alt="邮箱已认证"> <?php else: ?> <img src="../data/ajax_img/1-2.png" alt="邮箱未认证"> <?php endif; ?>
              <?php if (stripos ( $this->_tpl_vars['v']['cert'] , '2' )): ?> <img src="../data/ajax_img/2-1.png" alt="手机已认证"> <?php else: ?> <img src="../data/ajax_img/2-2.png" title="手机未认证"> <?php endif; ?>
              <?php if (stripos ( $this->_tpl_vars['v']['cert'] , '3' )): ?> <img src="../data/ajax_img/3-1.png" alt="营业执照已认证"> <?php else: ?> <img src="../data/ajax_img/3-2.png" alt="营业执照未认证"> <?php endif; ?> </td>
            <td class="ud">
              <div  style="width:155px;"> <?php echo $this->_tpl_vars['v']['email']; ?>
</div> </td>
            <td class="gd"> <?php echo $this->_tpl_vars['v']['moblie']; ?>
 </td>
            <td class="td"><?php echo ((is_array($_tmp=$this->_tpl_vars['v']['reg_date'])) ? $this->_run_mod_handler('date_format', true, $_tmp, "%Y-%m-%d") : smarty_modifier_date_format($_tmp, "%Y-%m-%d")); ?>
</td>
            <td><?php if ($this->_tpl_vars['v']['login_date'] != ""): ?><?php echo ((is_array($_tmp=$this->_tpl_vars['v']['login_date'])) ? $this->_run_mod_handler('date_format', true, $_tmp, "%Y-%m-%d") : smarty_modifier_date_format($_tmp, "%Y-%m-%d")); ?>

              <?php else: ?><font color="#FF0000">从未登录</font><?php endif; ?></td>
            <td><a href="javascript:;" onClick="resetpw('<?php echo $this->_tpl_vars['v']['username']; ?>
','<?php echo $this->_tpl_vars['v']['uid']; ?>
');"><font color="#FF0000">点我重置</font></a></td>
            <td><?php if ($this->_tpl_vars['v']['status'] == 1): ?><font color="green">已审核</font><?php elseif ($this->_tpl_vars['v']['status'] == 0): ?><font color="red">未审核</font><?php elseif ($this->_tpl_vars['v']['status'] == 3): ?><font color="#FFCC33">未通过</font><?php else: ?>锁定<?php endif; ?></td>
            <td><a href="index.php?m=admin_company_job&c=show&uid=<?php echo $this->_tpl_vars['v']['uid']; ?>
" >添加职位</a></td>
            <td><div class="admin_Operating_c" id="list_<?php echo $this->_tpl_vars['v']['uid']; ?>
" aid="<?php echo $this->_tpl_vars['v']['uid']; ?>
">
                <div class="admin_Operating">操作</div>
                <div class="admin_Operating_list admin_Operating_down" id="list<?php echo $this->_tpl_vars['v']['uid']; ?>
" style="display:none;">

                <a href="javascript:void(0);" class="user_status admin_cz_sh" pid="<?php echo $this->_tpl_vars['v']['uid']; ?>
" status="<?php echo $this->_tpl_vars['v']['status']; ?>
">审核</a>
                <a href="javascript:void(0);" class="status admin_cz_sh" pid="<?php echo $this->_tpl_vars['v']['uid']; ?>
" status="<?php echo $this->_tpl_vars['v']['status']; ?>
"><font color="#CC6666">锁定</font></a><br>
                  <a href="index.php?m=com_member&c=edit&id=<?php echo $this->_tpl_vars['v']['uid']; ?>
&rating=<?php echo $this->_tpl_vars['v']['rating']; ?>
" class="admin_cz_bj">编辑</a> <a href="javascript:;" onClick="layer_del('确定要删除？','index.php?m=com_member&c=del&del=<?php echo $this->_tpl_vars['v']['uid']; ?>
');"class="admin_cz_sc">删除</a> </div>
              </div></td>
          </tr>
          <?php endforeach; endif; unset($_from); ?>
          <tr style="background:#f1f1f1;">
            <td colspan="3" ><input class="admin_submit4" type="button" name="delsub" value="删除所选"  onclick="return really('del[]')"/>
              <input class="admin_submit4" type="button" name="delsub" value="批量审核" onClick="audall('1');" />
            </td>
            <td colspan="10" class="digg"><?php echo $this->_tpl_vars['pagenav']; ?>
</td>
          </tr>
          </tbody>

        </table>
		<input type="hidden" name="pytoken" id='pytoken'  value="<?php echo $this->_tpl_vars['pytoken']; ?>
">
      </form>
    </div>
  </div>
</div>
</body>
</html>