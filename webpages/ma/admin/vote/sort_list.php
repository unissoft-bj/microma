<?php 
require_once('../../global.php');
require_once('inc/mysql.class.php');
require_once('inc/function.inc.php');
$show1="投票";
$show2="问题列表";
 
$name=trim($_GET['name']);
 
 
if (!empty($_GET['botton']))
{
	 empty($name)?"":$sqladd=$sqladd." and ttitle like '%".$name."%'";
 
}

if ($_GET['action']=='delete')
{
	if (!isset($id)) msg("系统错误！");
	$sql="select qid from ma_question where tid=".$id;
	if ($db->rc($sql)>0) {
		msg("有选项属于该问题，请先删除问题下的选项再进行删除操作");
		
	}
 	$sqldelete="delete from ma_title where tid=".$id;
 	//echo $sqldelete;
	if($db->q($sqldelete)){
		msg("删除问题成功","sort_list.php");
	}
}

 //$sql="select * from member where 1=1 $sqladd order by m_id";
//echo $sql;
?>

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" id="">
<head>
	<meta http-equiv="content-type" content="text/html; charset=UTF-8">
	<title><?php echo $cfg_webname;?> - 管理后台</title>
	<meta http-equiv="X-UA-Compatible" content="IE=EmulateIE7">
	<link rel="shortcut icon" href="http://localhost/tuan/static/icon/favicon.ico">
	<link rel="stylesheet" href="../../css/index.css" type="text/css" media="screen" charset="utf-8">
  
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
                    <h2>问题列表</h2>
                    <ul class="filter">
                    	<li>
	                    	<form action="" method="get">	
	                    	    <a href="<?php echo $cfg['siteurl'];?>admin/vote/sort_add.php">添加问题</a>                    	
		                    	问题名称：<input type="text" name="name" class="h-input" style="width:90px" value="<?php echo $name?>" >
		                    	 
		                    	&nbsp;&nbsp;<input type="submit" name="botton" value="筛选" class="formbutton"  style="padding:1px 6px;"/>
	                    	</form>	                    	
	                    </li>
                    </ul>
			  </div>
                <div class="sect">
					<table id="orders-list" cellspacing="0" cellpadding="0" border="0" class="coupons-table">
					<tr><th width="30">ID</th>
					<th width="350">问题</th>
					<th width="50" nowrap></th>
					 
					<th width="130">操作</th></tr>
					
					<?php 
					$sql="select * from ma_title where 1=1 $sqladd order by `tid` ";
					$sqlc="select count(tid) as c from ma_title where 1=1 $sqladd ";
					  //echo $sql;
					$counts_r = $db->r($sqlc);
					$counts = $counts_r[c];
					$page= isset($_GET['page'])?$_GET['page']:1;//默认页码
					
					$getpageinfo = page($page,$counts,"?name=$name&botton=筛选",20,5);
					$sql.=$getpageinfo['sqllimit'];
					// echo $sql;
					$rsdb=$db->a($sql);
				 	$i=2;
					foreach($rsdb as $key=>$rs){
					 $i=$i+1;
					?>
					
					<tr <?php if ($i % 2 ==1 ) echo "class=\"alt\" ";?> id="team-list-id-<?php echo $rs["id"];?>">
						<td><?php echo $rs["tid"];?></td>
						<td><?php echo $rs["ttitle"];?>  </td>
						<td><?php //echo $rs["order"];?></td>
						 
						<td class="op"> <a href="<?php echo $cfg['siteurl'];?>admin/vote/sort_edit.php?id=<?php echo  $rs["tid"];?>">编辑</a>｜ 
						<a href="<?php echo $cfg['siteurl'];?>admin/vote/sort_list.php?action=delete&id=<?php echo  $rs["tid"];?>" class="ajaxlink" ask="确定删除该用户吗？">删除</a>  </td>
					</tr>
					<?php }?>
					 
										<tr><td colspan="7"><ul class="paginator"><?php echo $getpageinfo['pagecode'];?></ul></tr>
                    </table>
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