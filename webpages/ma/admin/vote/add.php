<?php 
require_once('../../global.php');
require_once('inc/mysql.Class.php');
require_once('inc/function.inc.php');
$show1="投票";
$show2="增加投票";
 
if($_POST){
	$pro_creattime=dtime();
	//echo $p_regdate;
	 
	 
	$sql="insert into ma_question(question,tid) 
	values ('$pro_title','$pro_type')";
	//echo $sql;
	if($db->q($sql))
	{
		msg("添加投票成功","index.php",3);
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
        	
        	

    		var i = document.getElementById("title").value.length;
    		if(i == 0)//内容不为空
    		{
    			alert("投票名称不能为空");
    			return false;
    		}
    		i = document.getElementById("team-create-systemreview").value.length;
    		if(i == 0)
    		{
    			alert("投票简介不能为空");
    			return false;
    		}
    		

    		var index=document.getElementById("partner_select").selectedIndex; //序号，取当前选中选项的序号
    		if(index == 0)
    		{
    			alert("请选择投票分类");
    			return false;
    		}
    		/*
    		i = document.getElementById("pro_summary").value;
    		alert(i);
    		if(i == 0)
    		{
    			alert("投票内容不能为空");
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
                    <h2>新建投票选项</h2>
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
						<label>投票名称</label>
						<input type="text" id="title" size="30" name="pro_title" id="team-create-news" class="f-input" value="" datatype="require" require="true" />
					</div>

					<div class="field">
						<label>投票分类</label>
						<select name="pro_type"  id="partner_select" datatype="require" require="true" class="f-input" style="width:200px;">
						<option  value=0 selected>------ 请选择投票类别------</option>
						<?php 
						$sql="select tid,ttitle from ma_title order by tid ";
						$p_rs=$db->a($sql);
						foreach ($p_rs as $k=>$v){?>
						
						<option value='<?php echo $v["tid"];?>' ><?php echo $v["ttitle"];?></option>
						<?php 
						
						}
						?>
						 
						</select>  
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