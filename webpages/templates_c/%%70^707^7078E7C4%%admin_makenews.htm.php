<?php /* Smarty version 2.6.26, created on 2014-09-11 09:14:19
         compiled from admin/admin_makenews.htm */ ?>
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
<title></title>
</head>
<body class="body_ifm">
<div class="infoboxp">
    <div class="infoboxp_top">
        <?php if ($this->_tpl_vars['type'] == 'index'): ?>
            <h6>������վ��ҳ</h6>
        <?php endif; ?>
        <?php if ($this->_tpl_vars['type'] == 'news'): ?>
            <h6>����������ҳ</h6>
        <?php endif; ?>
        <?php if ($this->_tpl_vars['type'] == 'newsclass'): ?>
            <h6>�����������</h6>
        <?php endif; ?>
        <?php if ($this->_tpl_vars['type'] == 'archive'): ?>
            <h6>����������ϸҳ</h6>
        <?php endif; ?>
        <?php if ($this->_tpl_vars['type'] == 'all'): ?>
            <h6>һ������</h6>
        <?php endif; ?>
    </div>
<iframe id="supportiframe" name="supportiframe" onload="returnmessage('supportiframe');" style="display:none"></iframe>
<?php if ($this->_tpl_vars['type'] == 'all'): ?>
    <table width="100%" class="table_form table_form_bg">
  <form action="" target="supportiframe" method="post">
            <tr>
                <th width="40%">��ҳ����·����</th>
                <td><input class="input-text" type="text" name="index_url" size="40" value="../index.html"/></td>
            </tr>
            <tr>
				<th width="40%">������ҳ����·����</th>
				<td><input class="input-text" type="text" name="news_url" size="40" value="../news.html"/></td>
			</tr>
        <tr class="admin_table_trbg">
            <td class="ud" align="center" colspan="2">
                <input class="admin_submit4" type="submit" id="madeall" value="һ������"/>&nbsp;&nbsp;
            </td>
          </tr>
		  <input type="hidden" name="pytoken" value="<?php echo $this->_tpl_vars['pytoken']; ?>
">
      </form>
  </table>
<?php endif; ?>

<?php if ($this->_tpl_vars['type'] == 'index'): ?>
    <table width="100%" class="table_form table_form_bg">
  <form action="" target="supportiframe" method="post">
            <tr>
                <th width="40%">��ҳ����·����</th>
                <td><input class="input-text" type="text" name="url" size="40" value="../index.html"/></td>
            </tr>
        <tr class="admin_table_trbg">
            <td class="ud" align="center" colspan="2">
                <input class="admin_submit4" type="submit" name="madeall" value="������ҳ"/>&nbsp;&nbsp;
            </td>
          </tr>
		  <input type="hidden" name="pytoken" value="<?php echo $this->_tpl_vars['pytoken']; ?>
">
      </form>
  </table>
<?php endif; ?>
<?php if ($this->_tpl_vars['type'] == 'news'): ?>
<table target="supportiframe" width="100%" class="table_form table_form_bg " action="">
    <form action="" method="post" target="supportiframe">
        <tr>
			<th width="40%">������ҳ����·����</th>
			<td><input class="input-text" type="text" name="url" size="40" value="../news.html"/></td>
		</tr>
    <tr>
    	<td class="ud" align="center" colspan="2">
			<input class="admin_submit8" type="submit" name="madeall" value="����������ҳ"/>&nbsp;&nbsp;
        </td>
      </tr>
	  <input type="hidden" name="pytoken" value="<?php echo $this->_tpl_vars['pytoken']; ?>
">
  </form>
  </table>
<?php endif; ?>
<?php if ($this->_tpl_vars['type'] == 'newsclass'): ?>
<table width="100%" class="table_form table_form_bg">
  <form target="supportiframe" action="" method="post">
    <input id="classid" type="hidden" value="<?php echo $this->_tpl_vars['classid']; ?>
">
        <tr>
			<th width="40%">ѡ����Ŀ��</th>
			<td>
            <select name="" id="group">
            	<option value="all">ȫ��</option>
                <?php $_from = $this->_tpl_vars['rows']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['v']):
?>
                <option value="<?php echo $this->_tpl_vars['v']['id']; ?>
"><?php echo $this->_tpl_vars['v']['name']; ?>
</option>
                <?php endforeach; endif; unset($_from); ?>
            </select>
            </td>
		</tr>
    	<tr>
    	<td class="ud" align="center" colspan="2">
		  <input class="admin_submit4" type="button" id="newsclass" value="��������"/>&nbsp;&nbsp;
        </td>
      </tr>
	  <input type="hidden" name="pytoken" value="<?php echo $this->_tpl_vars['pytoken']; ?>
">
  </form>
  </table>
<?php endif; ?>
<?php if ($this->_tpl_vars['type'] == 'archive'): ?>
<table width="100%" class="table_form table_form_bg">
    <form target="supportiframe" action="" method="post" >
        <tr>
			<th width="40%">ѡ����Ŀ��</th>
			<td>
            <select name="" id="group">
            <option value="0">ȫ��</option>
            <?php $_from = $this->_tpl_vars['rows']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['v']):
?>
            <option value="<?php echo $this->_tpl_vars['v']['id']; ?>
"><?php echo $this->_tpl_vars['v']['name']; ?>
</option>
            <?php endforeach; endif; unset($_from); ?>
            </select>
            </td>
		</tr>
        <tr class="admin_table_trbg">
			<th width="40%">��ʼID��</th>
			<td><input class="input-text" type="text" id="start_id" size="20" value="0"/>0��ͷ��ʼ</td>
		</tr>
        <tr>
			<th width="40%">����ID��</th>
			<td><input class="input-text" type="text" id="end_id" size="20" value="0"/>0�����һ��</td>
		</tr>
        <tr class="admin_table_trbg">
			<th width="40%">ÿҳ���ɣ�</th>
			<td><input class="input-text" type="text" id="limit" size="20" value="20"/>ע��ÿҳ��������Ҫ����̫��</td>
		</tr>
    <tr>
    	<td class="ud" align="center" colspan="2">
		  <input class="admin_submit4" type="button" id="archive" value="��������"/>&nbsp;&nbsp;
        </td>
      </tr>
	  <input type="hidden" name="pytoken" value="<?php echo $this->_tpl_vars['pytoken']; ?>
">
  </form>
  </table>
<?php endif; ?>
</div>
<input type="hidden" id="pytoken" value="<?php echo $this->_tpl_vars['pytoken']; ?>
">
  <div class="infoboxp" style="background:#F7FBFC; padding-bottom:10px;">
    <div class="">
    	<h6 style="padding:10px;">ע������</h6>
    </div>
	<ul style="line-height:20px; min-height:30px;">
        <li style="padding-left:10px;">������ȷ��Ŀ¼�п�дȨ�ޣ������޷����ɡ�</li>
        <li style="padding-left:10px;">���ӵ�����ʱ�����ӿ�����д<?php echo $this->_tpl_vars['config']['sy_weburl']; ?>
/����·��</li>
	</ul>
  </div>
<script>
$(document).ready(function(){
	$("#archive").click(function(){
		var group=$("#group").val();
		var startid=$("#start_id").val();
		var endid=$("#end_id").val();
		var limit=$("#limit").val();
		makearchive(group,startid,endid,limit,"archive",0,'���ڻ�ȡ��������');
	})
	$("#madeall").click(function(){
		var index_url=$("input[name=index_url]").val();
		var news_url=$("input[name=news_url]").val();
		make_all(index_url,news_url,"cache",0,'������������');
	})
	$("#newsclass").click(function(){
		var group=$("#group").val();
		makenewsclass(group,"class",0,'���ڻ�ȡ���������Ϣ');
	})
})
function make_all(index,news,type,value,msg){
	if(type!="ok"){
		var ii = layer.load(msg,0);
		var pytoken=$("#pytoken").val();
		$.post("index.php?m=cache&c=all",{action:"makeall",index:index,news:news,type:type,value:value,pytoken:pytoken},function(data){
			var data=eval('('+data+')');
			make_all(index,news,data.type,data.value,data.msg);
		})
	}else{
		layer.close(ii);
		layer.alert(msg,9);
	}
}
function makenewsclass(group,type,value,msg){
	if(type!="ok"){
		var ii = layer.load(msg,0);
		var pytoken=$("#pytoken").val();
		$.post("index.php?m=cache&c=newsclass",{action:"makeclass",group:group,type:type,value:value,pytoken:pytoken},function(data){
			var data=eval('('+data+')');
			makenewsclass(group,data.type,data.value,data.msg);
		})
	}else{
		layer.close(ii);
		layer.alert(msg, 9);
	}
}
function makearchive(group,startid,endid,limit,type,value,msg){
	$("#make_l").html(msg);
	if(type!="ok"){
		var ii = layer.load(msg,0);
		var pytoken=$("#pytoken").val();
		$.post("index.php?m=cache&c=archive",{action:"makearchive",group:group,startid:startid,endid:endid,limit:limit,type:type,value:value,pytoken:pytoken},function(data){
			var data=eval('('+data+')');
			makearchive(group,startid,endid,limit,data.type,data.value,data.msg);
		})
	}else{
		layer.close(ii);
		layer.alert(msg, 9);
	}
}
</script>
</body>
</html>