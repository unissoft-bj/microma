<?php /* Smarty version 2.6.26, created on 2014-10-04 02:15:37
         compiled from member/msg.htm */ ?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=gb2312" />
<title>提示信息 - <?php echo $this->_tpl_vars['config']['sy_webname']; ?>
 - Powered by PHPYun.</title>
<META content="<?php echo $this->_tpl_vars['job_arr_msg']; ?>
" name=Keywords>
<META content="<?php echo $this->_tpl_vars['job_arr_msg']; ?>
" name=Description>
<link href="<?php echo $this->_tpl_vars['config']['sy_weburl']; ?>
/template/member/style/msg.css" rel="stylesheet" type="text/css"/>
<script src="<?php echo $this->_tpl_vars['config']['sy_weburl']; ?>
/js/jquery-1.8.0.min.js" language="javascript"></script>
<script src="<?php echo $this->_tpl_vars['config']['sy_weburl']; ?>
/js/layer/layer.min.js" language="javascript"></script>
 <SCRIPT>
function TimeOut(){
	<?php if ($this->_tpl_vars['job_arr_url'] == '1'): ?> 
		parent.layer.msg('<?php echo $this->_tpl_vars['job_arr_msg']; ?>
', <?php echo $this->_tpl_vars['job_arr_tm']; ?>
,<?php echo $this->_tpl_vars['job_arr_st']; ?>
,function(){location.href = '<?php echo $this->_tpl_vars['config']['sy_weburl']; ?>
'});
	<?php else: ?>
		parent.layer.msg('<?php echo $this->_tpl_vars['job_arr_msg']; ?>
', <?php echo $this->_tpl_vars['job_arr_tm']; ?>
,<?php echo $this->_tpl_vars['job_arr_st']; ?>
,function(){location.href = '<?php echo $this->_tpl_vars['job_arr_url']; ?>
';});
	<?php endif; ?> 
} 
</SCRIPT>
</head>
<body onLoad="TimeOut()"> 
</body>
</html>