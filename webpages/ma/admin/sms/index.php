<?php 
require_once('../../global.php');
require_once('inc/mysql.Class.php');
require_once('inc/function.inc.php');
$show1="短信";
$show2="短信池";
 
$title=trim($_GET['title']);
 
 
if (!empty($_GET['botton']))
{
	 empty($title)?"":$sqladd=$sqladd." and title like '%".$title."%'";
 
}

if ($_GET['action']=='delete')
{
	if (!isset($id)) msg("系统错误！");
	//$sql="select pro_id from product where id=".$id;
	//if ($db->rc($sql)>0) {
	//	msg("此商户有商品存在不能删除，请先删除商品再进行删除操作");
		
	//}
 	$sqldelete="delete from smspool where id=".$id;
 	//echo $sqldelete;
	if($db->q($sqldelete)){
		msg("删除成功","index.php");
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
                    <h2>短信列表</h2>
                    <ul class="filter">
                    	<li>
	                    	<form action="" method="get">
	                    	
	                    	    <a href="<?php echo $cfg['siteurl'];?>admin/sms/add.php">添加短信</a>                    	
		                    	&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
	                    	</form>	                    	
	                    </li>
                    </ul>
			  </div>
                <div class="sect">
					<table id="orders-list" cellspacing="0" cellpadding="0" border="0" class="coupons-table">
					<tr><th width="">ID</th>
					<th width="">短信id</th>
					<th width="">前缀</th>
					<th width="" nowrap>内容</th>
					<th width="">后缀</th>
					<th width="">是否生效</th>
					<th width="">生效开始时间</th>
					<th width="">生效结束时间</th>
					<th width="">写入时间</th>
					<th width="">更新时间</th>
					<th width="">操作</th></tr>
					
					<?php 
					$sql="select * from smspool where 1=1 $sqladd order by id desc";
					$sqlc="select count(id) as c from smspool where 1=1 $sqladd ";
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
						<td><?php echo $rs["id"];?></td>
						<td><?php echo $rs["msgid"];?></td>
						<td><?php echo $rs["prefix"];?>  </td>
						<td><?php echo $rs["sms"];?>  </td>
						<td><?php echo $rs["postfix"];?>  </td>
						<td><?php if ($rs["stat"]==100)
						{
							echo "是";
						}else{
							echo "否";
						}
							
							;?>  </td>
						<td><?php echo $rs["cndfromtime"];?>  </td>
						<td><?php echo $rs["cndtotime"];?>  </td>
						<td><?php echo $rs["rectime"];?>  </td>
						<td><?php echo $rs["updtime"];?>  </td>
						
						<td class="op"> 
						<?php 
						if ($rs["cid"]==60){?>
                        <a href="<?php echo $cfg['siteurl'];?>admin/sms/newsedit.php?id=<?php echo $rs['id'];?>">编辑</a>
                        <?php }else{ ?>              
						<a href="<?php echo $cfg['siteurl'];?>admin/sms/edit.php?id=<?php echo  $rs["id"];?>">编辑</a><?php }?>｜ 
						<a href="<?php echo $cfg['siteurl'];?>admin/sms/index.php?action=delete&id=<?php echo  $rs["id"];?>" class="ajaxlink" ask="确定删除该用户吗？">删除</a> </td>
					</tr>
					<?php }?>
					 
										<tr><td colspan="11"><ul class="paginator"><?php echo $getpageinfo['pagecode'];?></ul></tr>
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