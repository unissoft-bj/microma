<?php 
require_once('../../global.php');
require_once('inc/mysql.Class.php');
require_once('inc/function.inc.php');
$show1="短信";
$show2="新建短信";
 
if($_POST){
	
	$rectime=dtime();
	
	 
	 
	$sql="insert into smspool (msgid,prefix,sms,postfix,stat,cndfromtime,cndtotime,rectime) 
	values ('$msgid','$prefix','$sms','$postfix','$stat','$cndfromtime','$cndtotime','$rectime')";
	//echo $sql;
	if($db->q($sql))
	{
		msg("添加短信成功","index.php",1);
	}
	
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
        	
        	

    		var i = document.getElementById("prefix").value.length;
    		if(i == 0)//内容不为空
    		{
    			alert("短信前缀不能为空");
    			return false;
    		}
    		
    		var i = document.getElementById("sms").value.length;
    		if(i == 0)//内容不为空
    		{
    			alert("短信内容不能为空");
    			return false;
    		}

    		var i = document.getElementById("postfix").value.length;
    		if(i == 0)//内容不为空
    		{
    			alert("短信后缀不能为空");
    			return false;
    		}

    		var i = document.getElementById("cndfromtime").value.length;
    		if(i == 0)//内容不为空
    		{
    			alert("短信生效开始时间不能为空");
    			return false;
    		}

    		var i = document.getElementById("cndtotime").value.length;
    		if(i == 0)//内容不为空
    		{
    			alert("生效结束时间不能为空");
    			return false;
    		}

    		
    		/*
    		var index=document.getElementById("partner_select").selectedIndex; //序号，取当前选中选项的序号
    		if(index == 0)
    		{
    			alert("请选择文章分类");
    			return false;
    		}
    		
    		i = document.getElementById("pro_summary").value;
    		alert(i);
    		if(i == 0)
    		{
    			alert("文章内容不能为空");
    			return false;
    		}
    		*/
    		var str = "";
    		var arrays = new Array();              //创建一个数组对象
            var items = document.getElementsByName("keyword");  //获取name为check的一组元素(checkbox)
            for(i=0; i < items.length; i++)
			{  //循环这组数据
                if(items[i].checked)
				{//判断是否选中
                    str += items[i].value +"@";  //把符合条件的 添加到字符串中.
                }
            }
            if(str != "")
            {
                str = str.substr(0,str.length - 1);
            }
            //alert(str); str就是获取的字符串$sql="select keyword from news where id = $id";
            document.getElementById("strkey").value = str; 
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
                    <h2>新建短信</h2>
                    <ul class="filter">
                    	<li>

                    	</li>
                    </ul>
			  </div>
                <div class="sect">
					 <form id="Login-user-form" method="post" action=""   class="validator">
					<input type="hidden" name="id" value="0" />
					<input type="hidden" name="strkey" id="strkey" value="" />
					<!-- <div class="wholetip clear"><h3>1、基本信息</h3></div> -->
					<div class="field">
						<label>短信id</label>
						<input type="text" id="title" size="30" name="msgid" id="team-create-news" class="f-input" value="" datatype="require" require="true" />
					</div>
					<div class="field">
						<label>短信前缀</label>
						<input type="text" id="title" size="30" name="prefix" id="team-create-news" class="f-input" value="" datatype="require" require="true" />
					</div>
					<div class="field">
						<label>短信内容</label>
						<input type="text" id="title" size="30" name="sms" id="team-create-news" class="f-input" value="" datatype="require" require="true" />
					</div>
					<div class="field">
						<label>短信后缀</label>
						<input type="text" id="title" size="30" name="postfix" id="team-create-news" class="f-input" value="" datatype="require" require="true" />
					</div>
					<div class="field">
						<label>是否生效</label>
						<select name="stat"  id="partner_select" datatype="require" require="true" class="f-input" style="width:200px;">
						<option  value=0 selected>------ 请选择是否生效------</option>					
						<option value=100 >生效</option>		
						<option value=-100 >不生效</option>				 
						</select> 
						
					</div>
					<div class="field">
						<label>生效开始时间</label>
						<input type="text" id="title" size="30" name="cndfromtime" id="team-create-news" class="f-input" value="" datatype="require" require="true" onClick="WdatePicker()"/>
					</div>
					<div class="field">
						<label>生效结束时间</label>
						<input onClick="WdatePicker()" type="text" id="title" size="30" name="cndtotime" id="team-create-news" class="f-input" value="" datatype="require" require="true" />
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