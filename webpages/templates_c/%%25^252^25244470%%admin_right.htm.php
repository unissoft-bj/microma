<?php /* Smarty version 2.6.26, created on 2014-09-10 10:21:16
         compiled from admin/admin_right.htm */ ?>
<?php require_once(SMARTY_CORE_DIR . 'core.load_plugins.php');
smarty_core_load_plugins(array('plugins' => array(array('modifier', 'date_format', 'admin/admin_right.htm', 59, false),)), $this); ?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=GBK" />
<link href="images/reset.css" rel="stylesheet" type="text/css" /> 
<script src="<?php echo $this->_tpl_vars['config']['sy_weburl']; ?>
/js/jquery-1.8.0.min.js"></script>
<title>��̨����</title>
<style>
<!--
.mainright a,.maincontent a:visited{color:#F00; text-decoration:none;}
.mainright a:hover{color:#900; text-decoration:underline;}
.mainleft a,.mainleft a:visited{color:#06C; text-decoration:none;}
.mainleft a:hover{color:#00F; text-decoration:underline;}
-->
</style>

<script> 
/*�������е�js����*/
function killerrors() {return true;}
window.onerror = killerrors;
function logout(){
	if (confirm("��ȷ��Ҫ�˳����������"))
	top.location = 'index.php?c=logout';
	return false;
}
</script>
<script>
var integral_pricename='<?php echo $this->_tpl_vars['config']['integral_pricename']; ?>
';  
</script>
</head>
<body style="font-size:12px; padding-bottom:0;" onLoad="version_msg();">
<div id="sysinfobox" class="sysinfobox" style="display:none;">
	<script>
    	setTimeout("document.getElementById('sysinfobox').style.display='none'",10000);
    </script>
	<div class="sysinfoboxtop" id="sysinfoboxtop"><strong style="float:left;margin-left:10px;">��������</strong><span style="float:left;">(10����Զ��˳�)</span><span style="float:right;margin-right:10px;"><a href="#" onclick="javascript:document.getElementById('sysinfobox').style.display='none';">[�ر�]</a></span></div> 
</div>
<div style="height:455px; ">
<div class="mainleft">
	<?php if ($this->_tpl_vars['dirname'] || $this->_tpl_vars['mruser'] == 1): ?>
	<div class="maininfo" style="height:90px">
    	<div class="mainboxtop"><h6>��ȫ����</h6></div>
        <div class="maincontent" style="color:red;">
        <?php if ($this->_tpl_vars['dirname']): ?>
        <p>ǿ�ҽ��齫 <?php echo $this->_tpl_vars['dirname']; ?>
 �ļ�������Ϊ�������ƣ�</p>
        <?php endif; ?>
        <?php if ($this->_tpl_vars['mruser'] == 1): ?>
        <p>û�и���Ĭ�ϵĹ���Ա���ƺ����룬ǿ�ҽ��������и��ģ�<a href="index.php?m=admin_user&c=add&uid=<?php echo $_SESSION['auid']; ?>
">�����޸�</a></p><?php endif; ?>
        </div>
    </div>
	<?php endif; ?>
    
	<div class="maininfo" style="height:120px">
    	<div class="mainboxtop"><h6>�ҵ���Ϣ</h6></div>
        <div class="maincontent">
        <p>���ã�<strong><?php echo $this->_tpl_vars['nav_user']['name']; ?>
</strong>��[<a href="#" onClick="logout();">�����ʻ�</a>]</p>
        <p>���ĵ�½�ʻ���<strong><?php echo $this->_tpl_vars['nav_user']['username']; ?>
</strong></p>
		<p>������ɫ��<strong><?php echo $this->_tpl_vars['nav_user']['group_name']; ?>
</strong>  
        �ϴε�¼ʱ�䣺<?php echo ((is_array($_tmp=$this->_tpl_vars['nav_user']['lasttime'])) ? $this->_run_mod_handler('date_format', true, $_tmp, '%Y-%m-%d %H:%M:%S') : smarty_modifier_date_format($_tmp, '%Y-%m-%d %H:%M:%S')); ?>
</p>
        </div>
    </div>
    <div class="maininfo" style="height:160px">
    	<div class="mainboxtop"><h6>��ݷ�ʽ</h6></div>
        <div class="maincontent">
        <table width="100%">
        	<tr>
            	<td align="center" width="33%">
                	<a href="index.php?m=admin_resume"><img  class="png" width="40" height="35" src="images/applications.png" /></a>
                </td>
                <td align="center" width="33%">
                	<a href="index.php?m=admin_news&c=group"><img class="png" width="40" height="35" src="images/folder_process.png" /></a>
                </td>
                <td align="center" width="33%">
                	<a href="index.php?m=admin_news&c=news"><img class="png" width="40" height="35" src="images/mail_edit.png" /></a>
                </td>
            </tr>
            <tr>
            	<td align="center" height="20" width="33%"><a href="index.php?m=admin_resume">��������</a></td>
                <td align="center" height="20" width="33%"><a href="index.php?m=admin_news&c=group">�������</a></td>
                <td align="center" height="20" width="33%"><a href="index.php?m=admin_news&c=news">��������</a></td>
            </tr>
            <tr>
            	<td align="center" width="33%">
                <a href="index.php?m=admin_once"><img class="png" width="40" height="35" src="images/page_accept.png" /></a>
                </td>
                <td align="center" width="33%">
                <a href="index.php?m=index&c=index_cache"><img class="png" width="40" height="35" src="images/page_edit.png" /></a>
                </td>
                <td align="center" width="33%">
                <a href="index.php?m=config"><img class="png" width="40" height="35" src="images/process.png" /></a>
                </td>
            </tr>
            <tr>
            	<td align="center" height="20" width="33%"><a href="index.php?m=admin_once">��Ƹ����</a></td>
                <td align="center" height="20" width="33%"><a href="index.php?m=index&c=index_cache">������ҳ��̬</a></td>
                <td align="center" height="20" width="33%"><a href="index.php?m=config">ϵͳ����</a></td>
            </tr>
        </table>
        </div>
    </div>
    <div class="maininfo" style="height:150px">
    	<div class="mainboxtop"><h6>�����Ŷ�</h6></div>
        <div class="maincontent">
        <p>�����Ŷӣ�haowubai , ���� , Kstar , Marine , Mylgl , Neo , Debug , ��ǰ ��</p>
        <p>�ر��л������ , ������ , õ������ , Фǿ</p>
        <p>��ϵ�绰��400-880-5523</p>
		<p>�ٷ���վ��<a href="http://www.phpyun.com/" target="_blank">http://www.phpyun.com/</a> �ٷ���̳��<a href="http://bbs.phpyun.com/" target="_blank">http://bbs.phpyun.com/</a></p>
		<p></p>
        </div>
    </div>
</div>
<div class="mainright">
	<div id="threeid"></div>
    <div class="maininfo" style="height:170px">
    	<div class="mainboxtop"><h6>ϵͳ��Ϣ</h6></div>
        <div class="maincontent">
        <p style="float:left;">PHPYun����汾�� <?php echo $this->_tpl_vars['db_config']['version']; ?>
 [ <div id="version_msg" style="float:left;">�������!</div>]</p>
		<p style="clear:both;">�����������<?php echo $this->_tpl_vars['soft']; ?>
</p>
        <p>���ÿռ�(������)��<?php echo $this->_tpl_vars['kongjian']; ?>
&nbsp;M</p>
		<p>MySQL �汾��<?php echo $this->_tpl_vars['banben']; ?>
</p>
		<p>�û� - ��������<?php echo $this->_tpl_vars['yonghu']; ?>
 - <?php echo $this->_tpl_vars['server']; ?>
</p>
        </div>
    </div>
    <div class="maininfo" style="height:105px;">
    	<div class="mainboxtop"><h6>��Ȩ��Ϣ</h6></div>
        <div class="maincontent">
        <p>PHPYun����汾�� <?php echo $this->_tpl_vars['db_config']['version']; ?>
 [<a href="http://www.phpyun.com">����֧�������</a>]</p>
        <p>��ѯQQ�� 3367562</p>
        <div style="display:none;">
		<p>��Ȩ���ͣ�δ��Ȩ��<a href="http://www.phpyun.com">�������</a>��</p>
		<p>���кţ�δ���<a href="http://www.phpyun.com">�������</a>��</p>
        </div></div>
    </div>
</div>
</div>
<input type="hidden" name="pytoken" id="pytoken" value="<?php echo $this->_tpl_vars['pytoken']; ?>
">
<script>
$(document).ready(function(e) {
	var pytoken=$("#pytoken").val();
    $.post("index.php?m=admin_right&c=getweb",{pytoken:pytoken},function(data){	
		$("#threeid").html(data);
	});	
});
</script>
<script src="http://init.phpyun.com/site.php?site=<?php echo $this->_tpl_vars['base']; ?>
"></script>
</body>
</html>