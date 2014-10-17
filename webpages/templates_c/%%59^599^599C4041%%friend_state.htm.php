<?php /* Smarty version 2.6.26, created on 2014-09-11 09:18:02
         compiled from admin/friend_state.htm */ ?>
<?php require_once(SMARTY_CORE_DIR . 'core.load_plugins.php');
smarty_core_load_plugins(array('plugins' => array(array('function', 'seacrh_url', 'admin/friend_state.htm', 90, false),array('modifier', 'date_format', 'admin/friend_state.htm', 116, false),)), $this); ?>
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
<script src="js/show_pub.js"></script>
<script> 
function delall(){
	var time=$("#ad_start").val();
	if(time==""){ 
		parent.layer.msg('请选择时间！', 2, 8);
		return false;
	}
	layer_del("确定删除"+time+" 23:59:59以前的动态吗？","index.php?m=friend_state&c=del&time="+time);  
}	
</script>
<title>后台管理</title>
</head>
<body class="body_ifm">
<style> 

* {margin: 0 ;padding: 0;}
body,div{ margin: 0 ;padding: 0;}
.admin_f_state img{
	height: expression(this.width > 100 ? this.height = this.height * 100 / this.width : "auto");
	width: expression(this.width > 120 ? "120px" : "auto");
	max-width:100px;
	max-height:120px;
	border:1px solid #dddddd;
	padding:1px;
}
</style>
<div class="infoboxp">
  <div class="infoboxp_top">
    <h6>动态列表</h6>
  </div>
  <div class="company_job">
    <div class="company_job_list_h1"> <span class="company_m6" style="float:left;">
      <form action="index.php" name="myform" method="get">
        <input name="m" value="friend_state" type="hidden"/>
        <span class="company_s_l"> <font color="#666;">检索类型：</font></span> 
		<span class="company_fl">
        <select name="type">
          <option value="1" <?php if ($this->_tpl_vars['get_type']['type'] == '1'): ?> selected="selected" <?php endif; ?>>用户名</option>
          <option value="2" <?php if ($this->_tpl_vars['get_type']['type'] == '2'): ?> selected="selected" <?php endif; ?>>动态内容</option>
        </select>
        </span>
        <input class="company_job_text" type="text" name="keyword"  size="25"/>
        <input  class="company_job_new_sub" type="submit" name="search" value="检索动态"/>
        &nbsp;
      </form>
      </span>
      <link href="<?php echo $this->_tpl_vars['config']['sy_weburl']; ?>
/js/time/jscal2.css" type="text/css" rel="stylesheet">
      <script src="<?php echo $this->_tpl_vars['config']['sy_weburl']; ?>
/js/time/calendar.js" type="text/javascript"></script> 
      <script src="<?php echo $this->_tpl_vars['config']['sy_weburl']; ?>
/js/time/en.js" type="text/javascript"></script> 
      <span class="company_fl" style="line-height:34px;"> 删除日期：</span>
      <input id="ad_start" class="input-text" type="text" readonly size="20" name="time_start" style="float:left; margin-top:6px;">
      <script type="text/javascript">
        Calendar.setup({
        weekNumbers: true,
        inputField : "ad_start",
        trigger : "ad_start",
        dateFormat: "%Y-%m-%d",
        showTime: false,
        onSelect : function() {this.hide();}
        });
        </script> 
      <span class="company_job_a"><a href="javascript:void(0);" onClick="return delall();">删除</a>&nbsp;&nbsp;</span> </div>
  </div>
  <div class="table-list">
    <div class="admin_table_border">
      <iframe id="supportiframe"  name="supportiframe" onload="returnmessage('supportiframe');" style="display:none"></iframe>
      <form action="index.php" name="myform" method="get" target="supportiframe" id='myform'>
        <input name="m" value="friend_state" type="hidden"/>
        <input name="c" value="del" type="hidden"/>
        <table width="100%">
          <thead>
            <tr class="admin_table_top">
              <th style="width:20px;"><label for="chkall">
                  <input type="checkbox" id='chkAll'  onclick='CheckAll(this.form)'/>
                </label></th>
             
              <th>
			   <?php if ($_GET['t'] == 'id' && $_GET['order'] == 'asc'): ?>
			  <a href="<?php echo seacrh_url(array('order' => 'desc','t' => 'id','m' => 'friend_state','untype' => "order,t"), $this);?>
">ID<img src="images/sanj.jpg"/></a>
              <?php else: ?>
              <a href="<?php echo seacrh_url(array('order' => 'asc','t' => 'id','m' => 'friend_state','untype' => "order,t"), $this);?>
">ID<img src="images/sanj2.jpg"/></a>
              <?php endif; ?>
			  </th>
              <th align="left">用户名</th>
              <th align="left">动态内容</th>
              
              <th>
			  <?php if ($_GET['t'] == 'ctime' && $_GET['order'] == 'asc'): ?>
			  <a href="<?php echo seacrh_url(array('order' => 'desc','t' => 'ctime','m' => 'friend_state','untype' => "order,t"), $this);?>
">发布时间<img src="images/sanj.jpg"/></a>
              <?php else: ?>
              <a href="<?php echo seacrh_url(array('order' => 'asc','t' => 'ctime','m' => 'friend_state','untype' => "order,t"), $this);?>
">发布时间<img src="images/sanj2.jpg"/></a>
              <?php endif; ?>
			  </th>
              <th>操作</th>
            </tr>
          </thead>
          <tbody>
          
          <?php $_from = $this->_tpl_vars['mes_list']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['v']):
?>
          <tr align="center">
            <td><input type="checkbox" value="<?php echo $this->_tpl_vars['v']['id']; ?>
"  name='del[]' onclick='unselectall()' rel="del_chk" /></td>
            <td align="left" class="td1" style="text-align:center;"><span><?php echo $this->_tpl_vars['v']['id']; ?>
</span></td>
            <td class="ud" align="left"><?php echo $this->_tpl_vars['v']['username']; ?>
</td>
            <td class="td admin_f_state" style="width:750px"align="left"><?php echo $this->_tpl_vars['v']['content']; ?>
</td>
            <td class="td"><?php echo ((is_array($_tmp=$this->_tpl_vars['v']['ctime'])) ? $this->_run_mod_handler('date_format', true, $_tmp, "%Y-%m-%d") : smarty_modifier_date_format($_tmp, "%Y-%m-%d")); ?>
</td>
            <td><a href="javascript:void(0)" onClick="layer_del('确定要删除？', 'index.php?m=friend_state&c=del&del=<?php echo $this->_tpl_vars['v']['id']; ?>
');" class="admin_cz_sc">删除</a></td>
          </tr>
          <?php endforeach; endif; unset($_from); ?>
          <tr style="background:#f1f1f1;">
            <td colspan="2" ><input class="admin_submit4" type="button" name="delsub" value="删除所选" onClick="return really('del[]')" /></td>
            <td colspan="4" class="digg"><?php echo $this->_tpl_vars['pagenav']; ?>
</td>
          </tr>
            </tbody>
          
        </table>
		<input type="hidden" name="pytoken" id="pytoken" value="<?php echo $this->_tpl_vars['pytoken']; ?>
">
      </form>
    </div>
  </div>
</div>
</body>
</html>