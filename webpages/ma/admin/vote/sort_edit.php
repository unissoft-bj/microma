<?php 
require_once('../../global.php');
require_once('inc/mysql.Class.php');
require_once('inc/function.inc.php');
$show1="投票";
$show2="编辑分类";


if($_POST){
	$p_regdate=dtime();
	//echo $p_regdate;
	$type=empty($type)?1:$type;

	//$sql="insert into vote (p_login,p_pwd,p_name,p_regdate,p_contact,p_tel) values ('$p_login','$p_pwd','$p_name','$p_regdate','$p_contact','$p_tel')";
	$sql="update ma_title set ";
	$sql.="ttitle='".$title."',";
	$sql.="listtype='".$type."' ";
	$sql.="where tid=".$id;
	//echo $sql;
	//exit;
	if($db->q($sql)){

		msg("修改分类成功","sort_list.php");
	}

}

if (!isset($id)) msg("系统错误！");
$sql="select * from ma_title where tid=".$id;
//echo $sql;
$rs=$db->r($sql);
//dump($rs);
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
     function check()
    	{
    		var i = document.getElementById("team-create-vote").value.length;
    		if(i == 0)//内容不为空
    		{
    			alert("分类名称不能为空");
    			return false;
    		}
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
                    <h2>编辑分类</h2>
                    <ul class="filter">
                    	<li>

                    	</li>
                    </ul>
			  </div>
                <div class="sect">
					 <form id="Login-user-form" method="post" action=""   class="validator">
					<input type="hidden" name="id" value="<?php echo $id?>" />
					<!-- <div class="wholetip clear"><h3>1、基本信息</h3></div> -->
					
					<div class="field">
						<label>分类名称</label>
						<input type="text" size="30" name="title" id="team-create-vote" class="f-input" value="<?php echo $rs[name]?>" datatype="require" require="true" />
					</div>
					 <div class="field">
					 	<label>问题类型</label>
						<select name="type"  id="partner_select" datatype="require" require="true" class="f-input" style="width:200px;">
						<option  value=0 selected>------ 请选择问题类型------</option>					
						<option value=1 >单选</option>
						<option value=2 >多选</option>
						<option value=3 >填空</option>
						</select>
					</div>
					<input type="submit" onclick="return check();" value="好了，提交" name="commit" id="leader-submit" class="formbutton" style="margin:10px 0 0 120px;"/>
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