<?php 
require_once('../../global.php');
require_once('inc/mysql.Class.php');
require_once('inc/function.inc.php');
$show1="问卷抽奖设置";
$show2="抽奖设置";
session_start();
if($_POST){
	
	
	session_start();
	//echo $sql;
	
	$choujiang_time_from = $_POST['day_from']. " " .$_POST['hour_from'] . ":" . $_POST['minit_from'] . ":00";
	$choujiang_time_end = $_POST['day_end']." " .$_POST['hour_end'] . ":" . $_POST['minit_end'] . ":00";
	
	$sql = "SELECT * FROM ap_form_12465 WHERE date_created>'".$choujiang_time_from."' AND date_created <'".$choujiang_time_end."'";
	
	$_SESSION['day_from'] = $_POST['day_from'];
	$_SESSION['hour_from'] = $_POST['hour_from'];
	$_SESSION['minit_from'] = $_POST['minit_from'];
	
	$_SESSION['day_end'] = $_POST['day_end'];
	$_SESSION['hour_end'] = $_POST['hour_end'];
	$_SESSION['minit_end'] = $_POST['minit_end'];
	
	$_SESSION['choujiangtiaojian'] ="date_created>'".$choujiang_time_from."' AND date_created <'".$choujiang_time_end."'";
// 	echo $sql;
// 	die();
	msg("抽奖时段设置成功","index.php",1);
	
	
} 
 
?>

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" id=""><head>
	<meta http-equiv="content-type" content="text/html; charset=UTF-8">
	<title><?php echo $cfg_webname;?> - 管理后台</title>
	<meta http-equiv="X-UA-Compatible" content="IE=EmulateIE7">
	<link rel="shortcut icon" href="http://localhost/tuan/static/icon/favicon.ico">
	<link rel="stylesheet" href="../../css/index.css" type="text/css" media="screen" charset="utf-8">
	<link rel="stylesheet" href="../../css/lhgcalendar/lhgcalendar.css" type="text/css" media="screen" charset="utf-8">
	<script src="../../js/index.js"></script>
	<script charset="utf-8" src="../../Classes/kindeditor/kindeditor.js"></script>
	 <script charset="utf-8" src="../../Classes/kindeditor/lang/zh_CN.js"></script>
	 <script type="text/javascript" src="../../js/lhgcore.lhgcalendar.min.js"></script>
  <script>
        KindEditor.ready(function(K) {
        	K('#image1').click(function() {
				editor.loadPlugin('image', function() {
					editor.plugin.imageDialog({
						imageUrl : K('#pro_image').val(),
						clickFn : function(url, title, width, height, border, align) {
							K('#pro_image').val(url);
							editor.hideDialog();
						}
					});
				});
			});

			
           window.editor = K.create('#pro_summary');
        });

        function check()
    	{


        	
    		var i = document.getElementById("day_from").value.length;
    		
    		if(i == 0)//内容不为空
    		{
    			alert("开始时间日期不能为空");
    			return false;
    		}

    		var i = document.getElementById("hour_from").value.length;
    		if(i != 2)//内容不为空
    		{
    			alert("开始时间小时数必须为2位数，如08");
    			return false;
    		}
    		

    		var i = document.getElementById("minit_from").value.length;
    		if(i != 2)//内容不为空
    		{
    			alert("开始时间分钟数必须为2位数，如08");
    			return false;
    		}

    		var i = document.getElementById("day_end").value.length;
    		if(i == 0)//内容不为空
    		{
    			alert("结束时间日期不能为空");
    			return false;
    		}

    		var i = document.getElementById("hour_end").value.length;
    		if(i != 2)//内容不为空
    		{
    			alert("结束时间小时数必须为2位数，如08");
    			return false;
    		}
    		

    		var i = document.getElementById("minit_end").value.length;
    		if(i != 2)//内容不为空
    		{
    			alert("结束时间分钟数必须为2位数，如08");
    			return false;
    		}   		
    		
            return true;
    	}
        
</script>
<script language="javascript" type="text/javascript" src="/My97DatePicker/WdatePicker.js"></script>
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
                    <h2>抽奖设置</h2>
                    <ul class="filter">
                    	<li>

                    	</li>
                    </ul>
			  </div>
                <div class="sect">
					 <form id="Login-user-form" method="post" action=""   class="validator">
					
					
					<div class="field">
						<label>开始时间</label>
						日期：<input type="text"  size="10" id="day_from" name="day_from"   onClick="WdatePicker()" value="<?php echo $_SESSION['day_from']?>" />
						时：<input type="text"  size="10" id="hour_from" name="hour_from"  value="<?php echo $_SESSION['hour_from']?>"/>
						分：<input type="text"  size="10" id="minit_from" name="minit_from"   value="<?php echo $_SESSION['minit_from']?>"/>
					</div>
					<div class="field">
						<label>结束时间</label>
						日期：<input onClick="WdatePicker()" type="text"  size="10"  id="day_end" name="day_end"   value="<?php echo $_SESSION['day_end']?>"/>
						时：<input type="text"  size="10" id="hour_end" name="hour_end"  value="<?php echo $_SESSION['hour_end']?>"/>
						分：<input type="text"  size="10" id="minit_end" name="minit_end"  value="<?php echo $_SESSION['minit_end']?>"/>
					</div>

					
 		 
					
					 
					</div>
					<input type="submit"  onclick="return check();" value="好了，提交" name="commit" id="leader-submit" class="formbutton" style="margin:10px 0 0 120px;"/>
				</form>
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