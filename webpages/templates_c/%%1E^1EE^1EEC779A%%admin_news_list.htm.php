<?php /* Smarty version 2.6.26, created on 2014-11-14 19:28:43
         compiled from admin/admin_news_list.htm */ ?>
<?php require_once(SMARTY_CORE_DIR . 'core.load_plugins.php');
smarty_core_load_plugins(array('plugins' => array(array('function', 'seacrh_url', 'admin/admin_news_list.htm', 82, false),array('modifier', 'date_format', 'admin/admin_news_list.htm', 122, false),)), $this); ?>
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
<script src="js/show_pub.js"></script>
<title>��̨����</title>
</head>
<body class="body_ifm">
<div id="property" style="display:none;">
	<form action="index.php?m=admin_news&c=savepro" method="post" target="supportiframe">
		<table class="table_form "> 
		  <tr>
			<td style="width:500px; " class="ui_content_wrap">���ԣ�</td>                                   
			 <td> <?php $_from = $this->_tpl_vars['property']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['property']):
?>
			  <input type="checkbox" name="describe[]" value="<?php echo $this->_tpl_vars['property']['value']; ?>
"/><?php echo $this->_tpl_vars['property']['name']; ?>

			  <?php endforeach; endif; unset($_from); ?></td>
		  </tr>
		  <tr>
			<td style="width:500px; " class="ui_content_wrap">����ID��</td>
			 <td> <input size="40" type="text" id="proid" name="proid" value="" class="input-text"></td>
		  </tr>
		  <input type="hidden" id="protype" name="type" value="">
		  <tr>
			<td colspan='2' style="text-align:center"><input type="submit" value="ȷ ��" name="submit" class="admin_submit4 "></td>
		  </tr>
		</table>
		<input type="hidden" name="pytoken" value="<?php echo $this->_tpl_vars['pytoken']; ?>
">
	</form>
</div>
<div class="infoboxp">
  <div class="infoboxp_top">
    <h6>�����б�</h6>
    <div class="infoboxp_right">
    	<a href="index.php?m=admin_news&c=news" class="infoboxp_tj">�������</a>
        <a href="index.php?m=admin_news&c=group" class="infoboxp_tj">������</a>
        <a href="javascript:;" onClick="showdiv('houtai_div')" class="infoboxp_tj">�������</a>
    </div>
  </div>
  <div class="company_job">
    <div class="company_job_list_h1"> <span class="company_m6" style="float:left; margin-left:10px;">
      <form action="index.php" name="myform" method="get" >
        <input name="m" value="admin_news" type="hidden"/>
		<span class="company_s_l"> <font color="#666;">�������ͣ�</font></span> 
		<span class="company_fl">
        <select name="cate">
		<option value="">�������</option>
		<?php $_from = $this->_tpl_vars['cate']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['v']):
?>
          <option value="<?php echo $this->_tpl_vars['v']['id']; ?>
" <?php if ($this->_tpl_vars['get_type']['cate'] == $this->_tpl_vars['v']['id']): ?> selected="selected" <?php endif; ?>><?php echo $this->_tpl_vars['v']['name']; ?>
</option>
		  <?php endforeach; endif; unset($_from); ?>
        </select>
        </span>
		<span class="company_fl">
        <select name="type">
          <option value="1" <?php if ($this->_tpl_vars['get_type']['type'] == '1'): ?> selected="selected" <?php endif; ?>>����</option>
          <option value="2" <?php if ($this->_tpl_vars['get_type']['type'] == '2'): ?> selected="selected" <?php endif; ?>>����</option>
        </select>
        </span>
        <input class="company_job_text"  type="text" name="keyword"  size="25" style=" float:left">
        <input class="company_job_new_sub"  type="submit" name="news_search" value="��������"/>
        &nbsp;
      </form>
      </span>  </div>
  </div>
  <div class="table-list">
    <div class="admin_table_border">
      <iframe id="supportiframe"  name="supportiframe" onload="returnmessage('supportiframe');" style="display:none"></iframe>
      <form action="index.php" target="supportiframe" name="myform" method="get" id='myform'>
        <input name="m" value="admin_news" type="hidden"/>
        <input name="c" value="delnews" type="hidden"/>
        <table width="100%">
          <thead>
            <tr class="admin_table_top">
               <th style="width:20px;"><label for="chkall"><input type="checkbox" id='chkAll'  onclick='CheckAll(this.form)'/></label></th>
              <th width="60">
			  <?php if ($_GET['t'] == 'id' && $_GET['order'] == 'asc'): ?>
			  <a href="<?php echo seacrh_url(array('order' => 'desc','t' => 'id','m' => 'admin_news','untype' => "order,t"), $this);?>
">����ID<img src="images/sanj.jpg"/></a>
              <?php else: ?>
              <a href="<?php echo seacrh_url(array('order' => 'asc','t' => 'id','m' => 'admin_news','untype' => "order,t"), $this);?>
">����ID<img src="images/sanj2.jpg"/></a>
              <?php endif; ?>
			  </th>
              <th width="120" align="left">�������</th>
              <th width="350" align="left">����</th>
              <th align="left">����</th>
              <th>
			  <?php if ($_GET['t'] == 'datetime' && $_GET['order'] == 'asc'): ?>
			  <a href="<?php echo seacrh_url(array('order' => 'desc','t' => 'datetime','m' => 'admin_news','untype' => "order,t"), $this);?>
">����ʱ��<img src="images/sanj.jpg"/></a>
              <?php else: ?>
              <a href="<?php echo seacrh_url(array('order' => 'asc','t' => 'datetime','m' => 'admin_news','untype' => "order,t"), $this);?>
">����ʱ��<img src="images/sanj2.jpg"/></a>
              <?php endif; ?>
			  </th>
              <th width="60">
			  <?php if ($_GET['t'] == 'hits' && $_GET['order'] == 'asc'): ?>
			  <a href="<?php echo seacrh_url(array('order' => 'desc','t' => 'hits','m' => 'admin_news','untype' => "order,t"), $this);?>
">�����<img src="images/sanj.jpg"/></a>
              <?php else: ?>
              <a href="<?php echo seacrh_url(array('order' => 'asc','t' => 'hits','m' => 'admin_news','untype' => "order,t"), $this);?>
">�����<img src="images/sanj2.jpg"/></a>
              <?php endif; ?>
			  </th>
              <th width="60">
			   <?php if ($_GET['t'] == 'sort' && $_GET['order'] == 'asc'): ?>
			  <a href="<?php echo seacrh_url(array('order' => 'desc','t' => 'sort','m' => 'admin_news','untype' => "order,t"), $this);?>
">����<img src="images/sanj.jpg"/></a>
              <?php else: ?>
              <a href="<?php echo seacrh_url(array('order' => 'asc','t' => 'sort','m' => 'admin_news','untype' => "order,t"), $this);?>
">����<img src="images/sanj2.jpg"/></a>
              <?php endif; ?>
			  </th>
              <th  class="admin_table_th_bg">����</th>
            </tr>
          </thead>
          <tbody>
          <?php $_from = $this->_tpl_vars['adminnews']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['v']):
?>
          <tr align="center">
            <td><input type="checkbox" value="<?php echo $this->_tpl_vars['v']['id']; ?>
"  name='del[]' onclick='unselectall()' rel="del_chk" /></td>
            <td align="left" class="td1" style="text-align:center;"><span><?php echo $this->_tpl_vars['v']['id']; ?>
</span></td>
            <td class="ud" align="left"><?php echo $this->_tpl_vars['v']['name']; ?>
</td>
            <td class="od" align="left"><a href="<?php echo $this->_tpl_vars['v']['url']; ?>
" target="_blank"><?php echo $this->_tpl_vars['v']['title']; ?>
</a> <?php echo $this->_tpl_vars['v']['titype']; ?>
</td>
            <td class="gd" align="left"><?php echo $this->_tpl_vars['v']['author']; ?>
</td>
            <td class="td"><?php echo ((is_array($_tmp=$this->_tpl_vars['v']['datetime'])) ? $this->_run_mod_handler('date_format', true, $_tmp, "%Y-%m-%d") : smarty_modifier_date_format($_tmp, "%Y-%m-%d")); ?>
 </td>
            <td><?php echo $this->_tpl_vars['v']['hits']; ?>
</td>
            <td><?php echo $this->_tpl_vars['v']['sort']; ?>
</td>
            <td><div class="admin_Operating_c" id="list_<?php echo $this->_tpl_vars['v']['id']; ?>
" aid="<?php echo $this->_tpl_vars['v']['id']; ?>
">
				<div class="admin_Operating">����</div>
				<div class="admin_Operating_list admin_Operating_down" id="list<?php echo $this->_tpl_vars['v']['id']; ?>
" style="display:none;">
                <a href="?m=admin_news&c=news&id=<?php echo $this->_tpl_vars['v']['id']; ?>
" class="admin_cz_bj">�༭</a>
                <a href="javascript:void(0)" onClick="layer_del('ȷ��Ҫɾ����','index.php?m=admin_news&c=delnews&id=<?php echo $this->_tpl_vars['v']['id']; ?>
');"class="admin_cz_sc">ɾ��</a></div></div></td>
          </tr>
          <?php endforeach; endif; unset($_from); ?>
          <tr style="background:#f1f1f1;">
            <td colspan="3" >
            	<input class="admin_submit4"  type="button" name="delsub" value="ɾ����ѡ" onClick="return really('del[]')" />
              <input class="admin_submit4"  type="button" value="��������" onClick="add_pro()" />
              <input class="admin_submit4"  type="button"  value="ȡ������" onClick="del_pro()" /></td>
            <td colspan="6" class="digg"><?php echo $this->_tpl_vars['pagenav']; ?>
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
<div id="houtai_div" style=" width:470px; display:none;">
	<div class="subnav">
	  <div class="content-menu ib-a blue line-x">
		<form name="myform" action="index.php?m=admin_news&c=property" target="supportiframe" method="post" onSubmit="return check_form(this);">
		  ���ƣ�
		  <input type="text" id="nameid" name="name" class="input-text">
		  ��ʶ����
		  <input type="text" id="valueid" name="value" class="input-text" size="15">
		  <input type="hidden" id="upid" name="id" value="">
		  <input type="hidden" name="pytoken" value="<?php echo $this->_tpl_vars['pytoken']; ?>
">
		  <input class="admin_submit4" name="submit" id="submit" type="submit" value="���">
		</form>
		<table width="100%" class="table_form" style="text-align:center">
		  <tr>
			<th style="text-align:center;" width="10%">ID</th>
			<th style="text-align:center;" width="30%">����</th>
			<th style="text-align:center;" width="35%">��ʶ��</th>
			<th style="text-align:center;" width="20%">����</th>
		  </tr>
		  <?php $_from = $this->_tpl_vars['propertys']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['pv']):
?>
		  <tr id="pro<?php echo $this->_tpl_vars['pv']['id']; ?>
">
			<td class="od"><?php echo $this->_tpl_vars['pv']['id']; ?>
</td>
			<td class="od"><?php echo $this->_tpl_vars['pv']['name']; ?>
</td>
			<td class="od"><?php echo $this->_tpl_vars['pv']['value']; ?>
</td>
			<td class="od">
				<a href="javascript:;" onClick="update('<?php echo $this->_tpl_vars['pv']['id']; ?>
','<?php echo $this->_tpl_vars['pv']['name']; ?>
','<?php echo $this->_tpl_vars['pv']['value']; ?>
');">�޸�</a> | <a href="javascript:layer_del('ȷ��Ҫɾ����','index.php?m=admin_news&c=delpro&id=<?php echo $this->_tpl_vars['pv']['id']; ?>
');">ɾ��</a></td>
		  </tr>
		  <?php endforeach; endif; unset($_from); ?>
		</table>
	  </div>
	</div>
  </div>  
<script> 
function showdiv(div){
	$("#upid").val("");
	$("#nameid").val("");
	$("#valueid").val("");
	$.layer({
		type : 1,
		title :'���Թ���', 
		offset: [($(window).height() - 210)/2 + 'px', ''],
		closeBtn : [0 , true], 
		area : ['470px','auto'],
		page : {dom :"#"+div}
	}); 
} 
function update(id,name,value){
	$("#upid").val(id);
	$("#nameid").val(name);
	$("#valueid").val(value);
	$("#submit").val('�޸�');
}
function check_form(myform){
	if (myform.name.value==""){ 
		parent.layer.msg('����д���ƣ�', 2, 8); 
		myform.name.focus();
		return (false);
	}	
	if (myform.value.value==""){
		parent.layer.msg('����д��ʶ����', 2, 8); 
		myform.name.focus();
		return (false);
	}	
}
function add_pro(){
	var codewebarr="";
	$("input[type='checkbox']:checked").each(function(){ //���ڸ�ѡ��һ��ѡ�е��Ƕ��,���Կ���ѭ����� 
		if(codewebarr==""){codewebarr=$(this).val();}else{codewebarr=codewebarr+","+$(this).val();}
	}); 
	if(codewebarr==""){ 
		parent.layer.msg('������ѡ��һ��������', 2, 8);
	}else{
		$("#protype").val('add');$("#proid").val(codewebarr); 
		$.layer({
			type : 1,
			title : '������������',
			closeBtn : [0 , true], 
			offset : ['20%' , '30%'],
			border : [10 , 0.3 , '#000', true],
			area : ['350px','auto'],
			page : {dom : '#property'}
		});  
	}
}
function del_pro(){
	var codewebarr="";
	$("input[type='checkbox']:checked").each(function(){ //���ڸ�ѡ��һ��ѡ�е��Ƕ��,���Կ���ѭ����� 
		if(codewebarr==""){codewebarr=$(this).val();}else{codewebarr=codewebarr+","+$(this).val();}
	}); 
	if(codewebarr==""){
		parent.layer.msg('������ѡ��һ��������', 2, 8);
	}else{
		$("#protype").val('del'); 
		$("#proid").val(codewebarr); 
		$.layer({
			type : 1,
			title : '����ȡ������',
			closeBtn : [0 , true], 
			offset : ['20%' , '30%'],
			border : [10 , 0.3 , '#000', true],
			area : ['350px','auto'],
			page : {dom : '#property'}
		});  
	}
}
</script>
</body>
</html>