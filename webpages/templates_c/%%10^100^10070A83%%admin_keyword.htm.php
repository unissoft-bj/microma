<?php /* Smarty version 2.6.26, created on 2014-09-11 09:15:55
         compiled from admin/admin_keyword.htm */ ?>
<?php require_once(SMARTY_CORE_DIR . 'core.load_plugins.php');
smarty_core_load_plugins(array('plugins' => array(array('function', 'seacrh_url', 'admin/admin_keyword.htm', 110, false),)), $this); ?>
<!DOCTYPE html PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3.org/TR/html4/loose.dtd">
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=gb2312">
<link href="images/reset.css" rel="stylesheet" type="text/css" />
<link href="images/system.css" rel="stylesheet" type="text/css" />
<link href="images/table_form.css" rel="stylesheet" type="text/css" />
<script type="text/javascript" src="<?php echo $this->_tpl_vars['config']['sy_weburl']; ?>
/js/jscolor/jscolor.js"></script>
<script src="<?php echo $this->_tpl_vars['config']['sy_weburl']; ?>
/js/jquery-1.8.0.min.js"></script>
<script src="<?php echo $this->_tpl_vars['config']['sy_weburl']; ?>
/js/layer/layer.min.js" language="javascript"></script>
<script src="js/admin_public.js" language="javascript"></script>
<script src="js/show_pub.js"></script>
<script>
function keywords(key_name,type,color,size,bold,tuijian,num,id){
	$("#id").val(id);
	$("#key_name").val(key_name);
	$("#size").val(size);
	$("#type").val(type);
	if(color!=""){
		$("#color").val(color);
		$("#color").attr("style","background-color:#"+color);
	}else{
		$("#color").attr("style","");
	}
	$("#num").val(num);
	$("#bold_"+bold).attr("checked",true);
	$("#tuijian_"+tuijian).attr("checked",true);
	$.layer({
		type : 1,
		title :'�ؼ��ֹ���',
		zIndex :999,
		offset: [($(window).height() - 300)/2 + 'px', ''],
		closeBtn : [0 , true],
		border : [10 , 0.3 , '#000', true],
		area : ['355px','300px'],
		page : {dom :"#status_div"}
	});
}

</script>
<title>��̨����</title>
<!--[if IE 6]>
<script src="./js/png.js"></script>
<script>
  DD_belatedPNG.fix('.png,.header_bg,.header .logo, .left_menu h3 span,.shortcut_menu,.header .nav li a,.header .nav li,.admin_cz_bj,.admin_bg');
</script>
<![endif]-->
</head>
<body class="body_ifm">
<div id="status_div"  style="display:none;">
    <div id="infobox" style=" width:355px" >
      <form action="index.php?m=admin_keyword&c=save" target="supportiframe" method="post" id="formstatus">
      <input type="hidden" name="pytoken" value="<?php echo $this->_tpl_vars['pytoken']; ?>
">
		<table cellspacing='2' cellpadding='3'>
			<tr><td style="width:90px">�ؼ������ƣ�</td><td><input id="key_name" class="input-text" type="text" value=""   name="key_name"><font color="gray">����phpyun</font></td></tr>
			<tr><td>�ؼ������ͣ�</td><td><select id="type" name="type">
				<?php $_from = $this->_tpl_vars['keywordarr']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['k'] => $this->_tpl_vars['v']):
?>
				<option value="<?php echo $this->_tpl_vars['k']; ?>
"><?php echo $this->_tpl_vars['v']; ?>
</option>
				<?php endforeach; endif; unset($_from); ?>
			  </select></td></tr>
			<tr><td>�����С��</td><td><input class="input-text" type="text" id="size" name="size" size="20" value="" /><font color="gray">����12px</font></td></tr>
			<tr><td>������ɫ��</td><td>
            <input class="input-text color" readonly type="text" id="color" name="color" size="20" value="" /></td></tr>
			<tr><td>�Ƿ�Ӵ֣�</td><td><input type="radio" name="bold" value="0" id="bold_0">&nbsp;��<input  id="bold_1" type="radio" name="bold" value="1">&nbsp;�� </td></tr>
			<tr><td>�Ƿ��Ƽ���</td><td><input type="radio" name="tuijian" value="0"  id="tuijian_0">&nbsp;��<input type="radio" id="tuijian_1" name="tuijian" value="1" >&nbsp;�� </td></tr>
			<tr><td>����������</td><td><input class="input-text" type="text" id="num" name="num" size="10" value="" /><font color="gray">������ǰС��</font></td></tr>
			<tr style="text-align:center;margin-top:10px"><td colspan='2' > <input type="submit"  value='ȷ��' class="submit_btn">
          &nbsp;&nbsp;<input type="button" id="zxxCancelBtn" onClick="layer.closeAll();" class="cancel_btn" value='ȡ��'></td></tr>
		</table>
        <input type="hidden" name="id" id="id" value="" />
      </form>
    </div>
</div>
<div class="infoboxp">
<div class="infoboxp_top">
  <h6>���Źؼ��ֹ���</h6>
  <div class="infoboxp_right"> <a href="javascript:void(0)" onClick="keywords('','','','','','','','')" class="infoboxp_tj">��ӹؼ���</a></div>
</div>
<div class="company_job">
  <div class="company_job_list_h1"> <span class="company_m6" style="float:left;">
    <form action="index.php" name="myform" method="get">
      <input name="m" value="admin_keyword" type="hidden"/>
      <span class="company_s_l"> �������ͣ�</span> <span class="company_fl">
      <select name="cate">
        <option value="">����</option>
        <option value="1" <?php if ($this->_tpl_vars['get_type']['cate'] == '1'): ?> selected="selected" <?php endif; ?>>΢��Ƹ</option>
        <option value="3" <?php if ($this->_tpl_vars['get_type']['cate'] == '3'): ?> selected="selected" <?php endif; ?>>ְλ</option>
        <option value="4" <?php if ($this->_tpl_vars['get_type']['cate'] == '4'): ?> selected="selected" <?php endif; ?>>��˾</option>
        <option value="5" <?php if ($this->_tpl_vars['get_type']['cate'] == '5'): ?> selected="selected" <?php endif; ?>>����</option>
        <option value="8" <?php if ($this->_tpl_vars['get_type']['cate'] == '8'): ?> selected="selected" <?php endif; ?>>΢������</option>
      </select>
      </span>
      <input class="company_job_text"  type="text" name="s_news_id"  size="25"/ style="float:left">
      <input class="company_job_new_sub" type="submit" name="news_search" style="cursor:pointer;" value="�����ؼ���"/>
      &nbsp;
    </form>
    </span> <?php $_from = $this->_tpl_vars['keywordarr']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['k'] => $this->_tpl_vars['v']):
?> <span class="company_job_a"><a href="index.php?m=<?php echo $_GET['m']; ?>
&type=<?php echo $this->_tpl_vars['k']; ?>
" class="company_job_gg"><?php echo $this->_tpl_vars['v']; ?>
</a></span> <?php endforeach; endif; unset($_from); ?> <span class="company_job_a"><a href="index.php?m=<?php echo $_GET['m']; ?>
&check=1" class="company_job_bg1">�����</a></span> <span class="company_job_a"><a href="index.php?m=<?php echo $_GET['m']; ?>
&check=2" class="company_job_bg2">δ���</a></span> <span class="company_job_a"> <a href="index.php?m=admin_keyword" class="company_job_all"><em>ȫ��</em></a></span></div>
</div>
<div class="table-list">
  <div class="admin_table_border">
    <iframe id="supportiframe"  name="supportiframe" onload="returnmessage('supportiframe');" style="display:none"></iframe>
    <form action="index.php?m=admin_keyword&c=del" name="myform" method="post"  target="supportiframe" id='myform'>
    <input type="hidden" name="pytoken" id='pytoken' value="<?php echo $this->_tpl_vars['pytoken']; ?>
">
      <table width="100%">
        <thead>
          <tr class="admin_table_top">
            <th align="left" width="5%"><label for="chkall"><input type="checkbox" id='chkAll'  onclick='CheckAll(this.form)'/></label></th>
            <th align="left">
			<?php if ($_GET['t'] == 'id' && $_GET['order'] == 'asc'): ?>
			<a href="<?php echo seacrh_url(array('order' => 'desc','t' => 'id','m' => 'admin_keyword','untype' => "order,t"), $this);?>
">ID<img src="images/sanj.jpg"/></a>
            <?php else: ?>
            <a href="<?php echo seacrh_url(array('order' => 'asc','t' => 'id','m' => 'admin_keyword','untype' => "order,t"), $this);?>
">ID<img src="images/sanj2.jpg"/></a>
            <?php endif; ?>
			</th>
            <th align="left" width="30%">���Źؼ���</th>
            <th align="left">�ؼ�������</th>
            <th align="left">
			<?php if ($_GET['t'] == 'num' && $_GET['order'] == 'asc'): ?>
			<a href="<?php echo seacrh_url(array('order' => 'desc','t' => 'num','m' => 'admin_keyword','untype' => "order,t"), $this);?>
">��������<img src="images/sanj.jpg"/></a>
            <?php else: ?>
            <a href="<?php echo seacrh_url(array('order' => 'asc','t' => 'num','m' => 'admin_keyword','untype' => "order,t"), $this);?>
">��������<img src="images/sanj2.jpg"/></a>
            <?php endif; ?>
			</th>
            <th align="left">���</th>
            <th align="left" class="admin_table_th_bg">����</th>
          </tr>
        </thead>
        <tbody>
        <?php $_from = $this->_tpl_vars['rows']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['v']):
?>
        <?php $this->assign('type', $this->_tpl_vars['v']['type']); ?>
        <tr align="left">
          <td><input type="checkbox" value="<?php echo $this->_tpl_vars['v']['id']; ?>
"  name='del[]' onclick='unselectall()' rel="del_chk" /></td>
          <td><span><?php echo $this->_tpl_vars['v']['id']; ?>
</span></td>
          <td align="left" class="td1"><font color="#<?php echo $this->_tpl_vars['v']['color']; ?>
"><?php echo $this->_tpl_vars['v']['key_name']; ?>
</font></td>
          <td  align="left"><?php echo $this->_tpl_vars['keywordarr'][$this->_tpl_vars['v']['type']]; ?>
</td>
          <td  align="left"><?php echo $this->_tpl_vars['v']['num']; ?>
</td>
          <td id="rec<?php echo $this->_tpl_vars['v']['id']; ?>
"><?php if ($this->_tpl_vars['v']['check'] == '1'): ?><a href="javascript:void(0);" onClick="rec_up('index.php?m=admin_keyword&c=recup','<?php echo $this->_tpl_vars['v']['id']; ?>
','0','rec');"><img src="../data/ajax_img/doneico.gif"></a><?php else: ?><a href="javascript:void(0);" onClick="rec_up('index.php?m=admin_keyword&c=recup','<?php echo $this->_tpl_vars['v']['id']; ?>
','1','rec');"><img src="../data/ajax_img/errorico.gif"></a><?php endif; ?></td>
          <td><div class="admin_Operating_c" id="list_<?php echo $this->_tpl_vars['v']['id']; ?>
" aid="<?php echo $this->_tpl_vars['v']['id']; ?>
">
				<div class="admin_Operating">����</div>
				<div class="admin_Operating_list admin_Operating_down" id="list<?php echo $this->_tpl_vars['v']['id']; ?>
" style="display:none;">
				<span style="cursor:pointer;" onClick="keywords('<?php echo $this->_tpl_vars['v']['key_name']; ?>
','<?php echo $this->_tpl_vars['v']['type']; ?>
','<?php echo $this->_tpl_vars['v']['color']; ?>
','<?php echo $this->_tpl_vars['v']['size']; ?>
','<?php echo $this->_tpl_vars['v']['bold']; ?>
','<?php echo $this->_tpl_vars['v']['tuijian']; ?>
','<?php echo $this->_tpl_vars['v']['num']; ?>
','<?php echo $this->_tpl_vars['v']['id']; ?>
')" class="admin_cz_bj">�༭</span>

				&nbsp;<a href="javascript:void(0)"  class="admin_cz_sc" onClick="layer_del('ȷ��Ҫɾ����', 'index.php?m=admin_keyword&c=del&id=<?php echo $this->_tpl_vars['v']['id']; ?>
');">ɾ��</a></div></div></td>
        </tr>
        <?php endforeach; endif; unset($_from); ?>
        <tr style="background:#f1f1f1;">
          <td colspan="1" ><input class="admin_submit4"  type="button" name="delsub" value="ɾ����ѡ"  onclick="return really('del[]')"/></td>
          <td colspan="6" class="digg"><?php echo $this->_tpl_vars['pagenav']; ?>
</td>
        </tr>
        </tbody>
      </table>
    </form>
  </div>
</div>
<div id="bg" class="admin_bg"></div>
</body>
</html>