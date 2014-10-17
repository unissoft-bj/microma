<?php /* Smarty version 2.6.26, created on 2014-09-11 09:18:20
         compiled from admin/admin_once.htm */ ?>
<?php require_once(SMARTY_CORE_DIR . 'core.load_plugins.php');
smarty_core_load_plugins(array('plugins' => array(array('modifier', 'date_format', 'admin/admin_once.htm', 182, false),)), $this); ?>
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
	$(".check_all:checked").each(function(){ //由于复选框一般选中的是多个,所以可以循环输出 
		if(codewebarr==""){codewebarr=$(this).val();}else{codewebarr=codewebarr+","+$(this).val();}
	});
	if(codewebarr==""){
		parent.layer.msg("您还未选择任何信息！", 2, 8);	return false;			
	}else{	
		var pytoken=$("#pytoken").val();
		$.post("index.php?m=admin_once&c=status",{allid:codewebarr,status:status,pytoken:pytoken},function(data){				
			if(data=="1"){ 
				parent.layer.msg("批量审核成功！", 2, 9,function(){window.location.reload();}); 
			}else{			
				parent.layer.msg("批量取消审核成功！", 2, 9,function(){window.location.reload();}); 
			} 
		}); 
	}
} 
function audall2(){
	var codewebarr="";
	$(".check_all:checked").each(function(){ //由于复选框一般选中的是多个,所以可以循环输出 
		if(codewebarr==""){codewebarr=$(this).val();}else{codewebarr=codewebarr+","+$(this).val();}
	});
	if(codewebarr==""){
		parent.layer.msg("您还未选择任何信息！",2,2);	return false;
	}else{
		$("input[name=onceids]").val(codewebarr);
 		$.layer({
			type : 1,
			title :'批量延期',
			offset: [($(window).height() - 120)/2 + 'px', ''],
			closeBtn : [0 , true],
			border : [10 , 0.3 , '#000', true],
			area : ['210px','120px'],
			page : {dom :"#infobox2"}
		}); 		
	}
}
function show_status(id){ 
	$.get("index.php?m=admin_once&c=ajax&id="+id,function(data){
		var data=eval('('+data+')');
		$("#title").html(data.title);
		$("#mans").html(data.mans);
		$("#require").html(data.require);
		$("#companyname").html(data.companyname);
		$("#phone").html(data.phone);
		$("#linkman").html(data.linkman);
		$("#address").html(data.address);
		$("#email").html(data.email);
		$("#qq").html(data.qq);
		$("#time").html(data.time);
		$("#edate").html(data.edate);
		$("#status_"+data.status).attr("checked","checked");
		$("#statusid").val(id);
		$.layer({
			type : 1,
			title : '审核操作',
			closeBtn : [0 , true], 
			offset : ['20%' , '30%'],
			border : [10 , 0.3 , '#000', true],
			area : ['560px','auto'],
			page : {dom : '#preview'}
		}); 
	})
}  
function check_status(){
	var id=$("#statusid").val();
	var pytoken=$("#pytoken").val();
	var status=$("input[name='status']:checked").val();
	$.post("index.php?m=admin_once&c=status",{allid:id,status:status,pytoken:pytoken},function(data){
		if(data=="1"){ 
			parent.layer.msg('审核成功！', 2, 9,function(){window.location.reload();});
		}else{
			parent.layer.msg('取消审核成功！', 2, 9,function(){window.location.reload();}); 
		}
	});
}
</script>
<title>后台管理</title>
</head>
<body class="body_ifm">
<div id="infobox2" style="display:none;">
	<div class="" style=" margin-top:10px; "  >
    <div id="infobox"> 
      <form action="index.php?m=admin_once&c=ctime" target="supportiframe" method="post" id="formstatus"> 
      <input type="hidden" name="pytoken" value="<?php echo $this->_tpl_vars['pytoken']; ?>
">
		<table cellspacing='2' cellpadding='3' style="width:180px;">
			<tr><td style="float:right"><span style="font-weight:bold;">延长时间：</span></td><td><input class="input-text" value="" name="endtime" style="width:50px;" onKeyUp="this.value=this.value.replace(/[^0-9]/g,'')"> 天 </td></tr>
 			<tr style="text-align:center;margin-top:10px"><td colspan='2' > <input type="submit"  value='确认' class="submit_btn">
          &nbsp;&nbsp;<input type="button"  onClick="layer.closeAll();" class="cancel_btn" value='取消'></td></tr>
		</table>   
        <input name="onceids" value="0" type="hidden"> 
      </form>
    </div>
  </div> 
</div>
<div class="infoboxp">
  <div class="infoboxp_top">
    <h6>招聘列表</h6>
  </div>
  <div class="company_job">
    <div class="company_job_list_h1">
      <form action="index.php" name="myform" method="get">
        <span class="company_m6" style="float:left;margin-left:10px;">
        <input name="m" value="admin_once" type="hidden"/>
		<span class="company_s_l"> 检索类型：</span>
          <span class="company_fl">
         <select name="type">
        <option value="1" <?php if ($this->_tpl_vars['get_type']['type'] == '1'): ?> selected="selected" <?php endif; ?> >企业名称</option>
        <option value="2" <?php if ($this->_tpl_vars['get_type']['type'] == '2'): ?> selected="selected" <?php endif; ?> >职位名称</option>
        <option value="3" <?php if ($this->_tpl_vars['get_type']['type'] == '3'): ?> selected="selected" <?php endif; ?> >联系电话</option>
		<option value="4" <?php if ($this->_tpl_vars['get_type']['type'] == '4'): ?> selected="selected" <?php endif; ?> >联系人</option>
        </select>
        </span> 
        <input class="company_job_text" type="text" name="keyword"  size="25" style="float:left"/>
        <input class="company_job_new_sub"  type="submit" name="news_search" value="检索招聘"/>
        &nbsp;</span> <span class="company_job_a"  ><a href="index.php?m=admin_once&status=2" class="company_job_bg2"><em>未审核招聘</em></a></span> <span class="company_job_a"  ><a href="index.php?m=admin_once&status=1" class="company_job_bg1"><em>已审核招聘</em></a></span><span class="company_job_a"> <a href="index.php?m=admin_once&status=3" class="company_job_bg3">已过期招聘</a></span> <span class="company_job_a"  ><a href="index.php?m=admin_once" class="company_job_all"><em>全部招聘</em></a></span>
      </form>
    </div>
  </div>
  <div class="table-list">
    <div class="admin_table_border">
      <iframe id="supportiframe"  name="supportiframe" onload="returnmessage('supportiframe');" style="display:none"></iframe>
      <form action="index.php" target="supportiframe" name="myform" id='myform' method="get">
        <input name="m" value="admin_once" type="hidden"/>
        <input name="c" value="del" type="hidden"/>
        <table width="100%">
          <thead>
            <tr class="admin_table_top">
              <th ><label for="chkall"><input type="checkbox" id='chkAll'  onclick='CheckAll(this.form)'/></label></th>
              <th>
			   <?php if ($_GET['t'] == 'id' && $_GET['order'] == 'asc'): ?>
			  <a href="index.php?m=admin_once&order=desc&t=id">招聘ID<img src="images/sanj.jpg"/></a>
              <?php else: ?>
              <a href="index.php?m=admin_once&order=asc&t=id">招聘ID<img src="images/sanj2.jpg"/></a>
              <?php endif; ?>
			  </th>
              <th align="left">企业名称</th>
              <th align="left">职位名称</th>
              <th>招聘人数</th>
              <th>联系电话</th>
              <th>联系人</th>
              <th>
			  <?php if ($_GET['t'] == 'ctime' && $_GET['order'] == 'asc'): ?>
			  <a href="index.php?m=admin_once&order=desc&t=ctime">发布时间<img src="images/sanj.jpg"/></a>
              <?php else: ?>
              <a href="index.php?m=admin_once&order=asc&t=ctime">发布时间<img src="images/sanj2.jpg"/></a>
              <?php endif; ?>
			  </th>
			  <th>
			  <?php if ($_GET['t'] == 'edate' && $_GET['order'] == 'asc'): ?>
			  <a href="index.php?m=admin_once&order=desc&t=edate">结束时间<img src="images/sanj.jpg"/></a>
              <?php else: ?>
              <a href="index.php?m=admin_once&order=asc&t=edate">结束时间<img src="images/sanj2.jpg"/></a>
              <?php endif; ?>
			  </th>
              <th>状态</th>
              <th class="admin_table_th_bg">操作</th>
            </tr>
          </thead>
          <tbody>
          <?php $_from = $this->_tpl_vars['rows']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['key'] => $this->_tpl_vars['v']):
?>
          <tr align="center">
            <td><input type="checkbox" class="check_all" value="<?php echo $this->_tpl_vars['v']['id']; ?>
"  name='del[]' onclick='unselectall()' rel="del_chk" /></td>
            <td align="left" class="td1" style="text-align:center;"><span><?php echo $this->_tpl_vars['v']['id']; ?>
</span></td>
            <td class="ud" align="left"><a href="index.php?m=admin_once&c=show&id=<?php echo $this->_tpl_vars['v']['id']; ?>
"><?php echo $this->_tpl_vars['v']['companyname']; ?>
</a></td>
            <td class="od" align="left"><?php echo $this->_tpl_vars['v']['title']; ?>
</td>
            <td class="gd"><?php echo $this->_tpl_vars['v']['mans']; ?>
</td>
            <td><?php echo $this->_tpl_vars['v']['phone']; ?>
</td>
            <td><?php echo $this->_tpl_vars['v']['linkman']; ?>
</td>
            <td><?php echo ((is_array($_tmp=$this->_tpl_vars['v']['ctime'])) ? $this->_run_mod_handler('date_format', true, $_tmp, "%Y-%m-%d") : smarty_modifier_date_format($_tmp, "%Y-%m-%d")); ?>
</td>
            <td><?php if ($this->_tpl_vars['v']['status'] == 2): ?><font color="orange"><?php echo ((is_array($_tmp=$this->_tpl_vars['v']['edate'])) ? $this->_run_mod_handler('date_format', true, $_tmp, "%Y-%m-%d") : smarty_modifier_date_format($_tmp, "%Y-%m-%d")); ?>
</font><?php else: ?><?php echo ((is_array($_tmp=$this->_tpl_vars['v']['edate'])) ? $this->_run_mod_handler('date_format', true, $_tmp, "%Y-%m-%d") : smarty_modifier_date_format($_tmp, "%Y-%m-%d")); ?>
<?php endif; ?></td>
            <td><?php if ($this->_tpl_vars['v']['status'] == 1): ?><font color="blue">已审核</font><?php elseif ($this->_tpl_vars['v']['status'] == 0): ?><font color="red">未审核</font><?php else: ?><font color="orange">已过期</font><?php endif; ?></td>
            <td><div class="admin_Operating_c" id="list_<?php echo $this->_tpl_vars['v']['id']; ?>
" aid="<?php echo $this->_tpl_vars['v']['id']; ?>
">
                <div class="admin_Operating">操作</div>
                <div class="admin_Operating_list admin_Operating_down" id="list<?php echo $this->_tpl_vars['v']['id']; ?>
" style="display:none;">
                 <a href="javascript:void(0)" class="status admin_cz_sh" onClick="show_status('<?php echo $this->_tpl_vars['v']['id']; ?>
');">审核</a>
                 <a href="index.php?m=admin_once&c=show&id=<?php echo $this->_tpl_vars['v']['id']; ?>
" class="admin_cz_yl">预览</a> 
                 <a href="javascript:void(0)" onClick="layer_del('确定要删除？', 'index.php?m=admin_once&c=del&id=<?php echo $this->_tpl_vars['v']['id']; ?>
');"class="admin_cz_sc">删除</a> </div>
              </div></td> 
          </tr>
          <?php endforeach; endif; unset($_from); ?>
          <tr style="background:#f1f1f1;">
            <td colspan="3" ><input  class="admin_submit4" type="button" name="delsub" value="删除所选" onClick="return really('del[]')" />
              &nbsp;&nbsp;
              <input  class="admin_submit4" type="button" name="delsub" value="批量审核" onClick="audall('1');" />
              &nbsp;&nbsp;
              <input  class="admin_submit8" type="button" name="delsub" value="批量取消审核" onClick="audall('0');" />
			  &nbsp;&nbsp;
			  <input class="admin_submit4" type="button" onClick="audall2();" value="批量延期" >
			  </td>
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
<div id="preview" style="display:none;width:560px"> 
	<div style="height:300px;overflow:auto;width:560px;" > 
 		<input id="statusid" type="hidden">
        <table width="540" class="table_form" style="background:#fff;font-size:14px;">
		<tr class="admin_table_trbg"><th width="120">职位名称：</th><td id="title"></td></tr>
		<tr><th>招聘人数：</th><td id="mans"></td></tr>
		<tr class="admin_table_trbg"><th>(店面)名称：</th><td id="companyname"></td></tr>
		<tr><th>联系邮箱：</th><td id="email"></td></tr>
		<tr class="admin_table_trbg"><th>联系QQ：</th><td id="qq"></td></tr>
        <tr><th>联系电话：</th><td id="phone"></td></tr>
		<tr class="admin_table_trbg"><th>联系人：</th><td id="linkman"></td></tr>		
    	<tr><th>联系地址：</th><td id="address"></td></tr>
		<tr class="admin_table_trbg"><th>具体要求：</th><td id="require"></td></tr>
    	<tr><th>有效期：</th><td id="edate"></td></tr>
		<tr class="admin_table_trbg"><th>发布时间：</th><td id="time"></td></tr>
	</table>
		<div style="text-align:center;margin-top:10px;">状态：
            <span>
                <input name='status' type='radio' value='1' id='status_1'>已审核 &nbsp;
                <input name='status' type='radio' value='0' id='status_0'>未审核
            </span>
        </div>
		<div style="text-align:center;margin-top:10px;margin-bottom:10px;"><input class="admin_submit4" type="button" onClick="check_status();" value="提交"></div>
	</div> 
</div> 
</body>
</html>