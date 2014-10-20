<?php 
require_once('../../global.php');
require_once('inc/mysql.class.php');
require_once('inc/function.inc.php');
$show1="投票";
$show2="投票列表";
 
$title=trim($_GET['title']);
 
 
if (!empty($_GET['botton']))
{
	 empty($title)?"":$sqladd=$sqladd." and question like '%".$title."%'";
 
}

if ($_GET['action']=='delete')
{
	if (!isset($id)) msg("系统错误！");
	//$sql="select pro_id from product where id=".$id;
	//if ($db->rc($sql)>0) {
	//	msg("此商户有商品存在不能删除，请先删除商品再进行删除操作");
		
	//}
 	$sqldelete="delete from ma_question where qid=".$id;
 	//echo $sqldelete;
	if($db->q($sqldelete)){
		msg("删除投票成功","index.php");
	}
}

 //$sql="select * from member where 1=1 $sqladd order by m_id";
//echo $sql;
?>

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" id=""><head>
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
                    <h2>选项列表</h2>
                    <ul class="filter">
                    	<li>
	                    	<form action="" method="get">
	                    	
	                    	    <a href="<?php echo $cfg['siteurl'];?>admin/vote/add.php">添加投票</a>                    	
		                    	投票选项：<input type="text" name="title" class="h-input" style="width:90px" value="<?php echo $title?>" >
		                    	 
		                    	&nbsp;&nbsp;<input type="submit" name="botton" value="筛选" class="formbutton"  style="padding:1px 6px;"/>
	                    	</form>	                    	
	                    </li>
                    </ul>
			  </div>
                <div class="sect">
					<table id="orders-list" cellspacing="0" cellpadding="0" border="0" class="coupons-table">
					<tr><th width="30">ID</th>
					<th width="350">选项</th>
					<th width="100" nowrap>问题</th>
					<th width="150">投票数</th>
					<th width="130">操作</th></tr>
					
					<?php 
					$sql="select * from ma_question where 1=1 $sqladd order by qid ";
					$sqlc="select count(tid) as c from ma_question where 1=1 $sqladd ";
					  //echo $sql;
					$counts_r = $db->r($sqlc);
					$counts = $counts_r[c];
					$page= isset($_GET['page'])?$_GET['page']:1;//默认页码
					
					$getpageinfo = page($page,$counts,"?title=$title&botton=筛选",20,5);
					$sql.=$getpageinfo['sqllimit'];
					// echo $sql;
					$rsdb=$db->a($sql);
				 	$i=2;
					foreach($rsdb as $key=>$rs){
					 $i=$i+1;
					?>
					
					<tr <?php if ($i % 2 ==1 ) echo "class=\"alt\" ";?> id="team-list-id-<?php echo $rs["id"];?>">
						<td><?php echo $rs["qid"];?></td>
						<td><?php echo $rs["question"];?>  </td>
						<td><?php 
						$query = "select ttitle from ma_title where tid=".$rs["tid"]; 
                        $result = mysql_query($query);   
                        while($row = mysql_fetch_object
                         ($result)) {  
                         $name = $row->ttitle;   
                         echo $name;  
                         }
						?></td>
						 
						 
						<td><?php echo  $rs["count"];?></td>
						<td class="op"> 
						<?php 
						if ($rs["cid"]==60){?>
                        <a href="<?php echo $cfg['siteurl'];?>admin/vote/voteedit.php?id=<?php echo $rs['qid'];?>">编辑</a>
                        <?php }else{ ?>              
						<a href="<?php echo $cfg['siteurl'];?>admin/vote/edit.php?id=<?php echo  $rs["qid"];?>">编辑</a><?php }?>｜ 
						<a href="<?php echo $cfg['siteurl'];?>admin/vote/index.php?action=delete&id=<?php echo  $rs["qid"];?>" class="ajaxlink" ask="确定删除该用户吗？">删除</a> </td>
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