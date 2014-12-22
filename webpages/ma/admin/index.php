<?php 
require_once('../global.php');
require_once('inc/mysql.Class.php');
require_once('inc/function.inc.php');
$show1="首页";
$show2="首页";
$starttime=trim($_GET['starttime']);
$endtime=trim($_GET['endtime']);
if (empty($starttime)) {
	$starttime='2013-01-01 00:00:00';
}
if (empty($endtime)) {
	$endtime=dtime();
}
?>

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" id=""><head>
<meta http-equiv="content-type" content="text/html; charset=UTF-8">
<title><?php echo $cfg_webname;?> - 管理后台</title>
<meta http-equiv="X-UA-Compatible" content="IE=EmulateIE7">
<link rel="shortcut icon" href="http://localhost/tuan/static/icon/favicon.ico">
<link rel="stylesheet" href="../css/index.css" type="text/css" media="screen" charset="utf-8">
 <link rel="stylesheet" href="../css/lhgcalendar/lhgcalendar.css" type="text/css" media="screen" charset="utf-8">
<script type="text/javascript" src="../js/lhgcore.lhgcalendar.min.js"></script>
	<script type="text/javascript">
  	(function(config){
  	    config['format'] = "yyyy-MM-dd HH:mm:ss"; // 注意，此配置参数只能在这里使用全局配置，在调用窗口的传参数使用无效
  	})($.calendar.setting);
  	
	$(function(){
	    $('.datetime_input').calendar();
	    $('#youxiaoqi').calendar({ format:'yyyy-MM-dd' });
	});
	</script>   
	</head>
<body class="newbie">
<div id="pagemasker"></div><div id="dialog"></div>
<div id="doc">
 
<!--一级导航--> 
 <?php require_once('admin/heard.php');?>
<!--一级导航结束--> 

<div id="bdw" class="bdw">
<div id="bd" class="cf">
<div id="coupons">
<!--二级导航-->
 <?php require_once('daohang.php');?>
<!--二级导航结束-->
    <div id="content" class="coupons-box clear mainwide">
		<div class="box clear">
            <div class="box-top"></div>
            <div class="box-content">
<div class="head">
                    <h2></h2>
                     
			  </div>
			  <div class="sect">
			    
                    	  
			  </div>
                <div class="sect">
					 
				</div>
            </div>
            <div class="box-bottom"></div>
        </div>
    </div>
</div>
</div> <!-- bd end -->
</div> <!-- bdw end -->
<div id="ftw">
	
	
	<?php require_once('admin/foot.php');?>
	
</div>
</div>


 </body></html>