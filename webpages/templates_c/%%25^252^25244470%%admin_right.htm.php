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
<title>后台管理</title>
<style>
<!--
.mainright a,.maincontent a:visited{color:#F00; text-decoration:none;}
.mainright a:hover{color:#900; text-decoration:underline;}
.mainleft a,.mainleft a:visited{color:#06C; text-decoration:none;}
.mainleft a:hover{color:#00F; text-decoration:underline;}
-->
</style>

<script> 
/*屏蔽所有的js错误*/
function killerrors() {return true;}
window.onerror = killerrors;
function logout(){
	if (confirm("您确定要退出控制面板吗？"))
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
	<div class="sysinfoboxtop" id="sysinfoboxtop"><strong style="float:left;margin-left:10px;">友情提醒</strong><span style="float:left;">(10秒后自动退出)</span><span style="float:right;margin-right:10px;"><a href="#" onclick="javascript:document.getElementById('sysinfobox').style.display='none';">[关闭]</a></span></div> 
</div>
<div style="height:455px; ">
<div class="mainleft">
	<?php if ($this->_tpl_vars['dirname'] || $this->_tpl_vars['mruser'] == 1): ?>
	<div class="maininfo" style="height:90px">
    	<div class="mainboxtop"><h6>安全中心</h6></div>
        <div class="maincontent" style="color:red;">
        <?php if ($this->_tpl_vars['dirname']): ?>
        <p>强烈建议将 <?php echo $this->_tpl_vars['dirname']; ?>
 文件夹名改为其它名称！</p>
        <?php endif; ?>
        <?php if ($this->_tpl_vars['mruser'] == 1): ?>
        <p>没有更改默认的管理员名称和密码，强烈建议您进行更改！<a href="index.php?m=admin_user&c=add&uid=<?php echo $_SESSION['auid']; ?>
">马上修改</a></p><?php endif; ?>
        </div>
    </div>
	<?php endif; ?>
    
	<div class="maininfo" style="height:120px">
    	<div class="mainboxtop"><h6>我的信息</h6></div>
        <div class="maincontent">
        <p>您好，<strong><?php echo $this->_tpl_vars['nav_user']['name']; ?>
</strong>　[<a href="#" onClick="logout();">更换帐户</a>]</p>
        <p>您的登陆帐户，<strong><?php echo $this->_tpl_vars['nav_user']['username']; ?>
</strong></p>
		<p>所属角色：<strong><?php echo $this->_tpl_vars['nav_user']['group_name']; ?>
</strong>  
        上次登录时间：<?php echo ((is_array($_tmp=$this->_tpl_vars['nav_user']['lasttime'])) ? $this->_run_mod_handler('date_format', true, $_tmp, '%Y-%m-%d %H:%M:%S') : smarty_modifier_date_format($_tmp, '%Y-%m-%d %H:%M:%S')); ?>
</p>
        </div>
    </div>
    <div class="maininfo" style="height:160px">
    	<div class="mainboxtop"><h6>快捷方式</h6></div>
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
            	<td align="center" height="20" width="33%"><a href="index.php?m=admin_resume">简历管理</a></td>
                <td align="center" height="20" width="33%"><a href="index.php?m=admin_news&c=group">新闻类别</a></td>
                <td align="center" height="20" width="33%"><a href="index.php?m=admin_news&c=news">发布新闻</a></td>
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
            	<td align="center" height="20" width="33%"><a href="index.php?m=admin_once">招聘管理</a></td>
                <td align="center" height="20" width="33%"><a href="index.php?m=index&c=index_cache">生成首页静态</a></td>
                <td align="center" height="20" width="33%"><a href="index.php?m=config">系统管理</a></td>
            </tr>
        </table>
        </div>
    </div>
    <div class="maininfo" style="height:150px">
    	<div class="mainboxtop"><h6>开发团队</h6></div>
        <div class="maincontent">
        <p>开发团队：haowubai , 浪浪 , Kstar , Marine , Mylgl , Neo , Debug , 阿前 等</p>
        <p>特别感谢：花菜 , 胡杨树 , 玫瑰浪子 , 肖强</p>
        <p>联系电话：400-880-5523</p>
		<p>官方网站：<a href="http://www.phpyun.com/" target="_blank">http://www.phpyun.com/</a> 官方论坛：<a href="http://bbs.phpyun.com/" target="_blank">http://bbs.phpyun.com/</a></p>
		<p></p>
        </div>
    </div>
</div>
<div class="mainright">
	<div id="threeid"></div>
    <div class="maininfo" style="height:170px">
    	<div class="mainboxtop"><h6>系统信息</h6></div>
        <div class="maincontent">
        <p style="float:left;">PHPYun程序版本： <?php echo $this->_tpl_vars['db_config']['version']; ?>
 [ <div id="version_msg" style="float:left;">无须更新!</div>]</p>
		<p style="clear:both;">服务器软件：<?php echo $this->_tpl_vars['soft']; ?>
</p>
        <p>可用空间(磁盘区)：<?php echo $this->_tpl_vars['kongjian']; ?>
&nbsp;M</p>
		<p>MySQL 版本：<?php echo $this->_tpl_vars['banben']; ?>
</p>
		<p>用户 - 服务器：<?php echo $this->_tpl_vars['yonghu']; ?>
 - <?php echo $this->_tpl_vars['server']; ?>
</p>
        </div>
    </div>
    <div class="maininfo" style="height:105px;">
    	<div class="mainboxtop"><h6>授权信息</h6></div>
        <div class="maincontent">
        <p>PHPYun程序版本： <?php echo $this->_tpl_vars['db_config']['version']; ?>
 [<a href="http://www.phpyun.com">技术支持与服务</a>]</p>
        <p>咨询QQ： 3367562</p>
        <div style="display:none;">
		<p>授权类型：未授权（<a href="http://www.phpyun.com">点击购买</a>）</p>
		<p>序列号：未激活（<a href="http://www.phpyun.com">点击激活</a>）</p>
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