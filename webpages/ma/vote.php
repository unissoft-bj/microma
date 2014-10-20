<?php 
require 'global.php';
require 'inc/mysql.Class.php';
require 'inc/function.inc.php';
       
?><!DOCTYPE HTML>
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
<meta name="viewport" content="width=device-width,height=device-height,inital-scale=1.0,maximum-scale=1.0,user-scalable=no;">
<title>投票</title>
<link rel="stylesheet" type="text/css" href="css/css.css">
</head>
<?php 
if ($_POST) {
	$upid="1";
	$uid=empty($uid)?1:$uid;
	foreach ($_POST as $k=>$v){
		if ($k=="jy" || $k=="a") {
			;
		}else{
				
			if (is_array($v)) {
				$i=0;
				foreach ($v as $m=>$n){
					$upid.=",".$n;
					$i++;
					/*if ($i>=11) {
						$str = '   <script language=javascript>alert("投票失败！每人每个最多只能选择10个!");</script>';
						$str .= '    <script language=javascript>setTimeout("history.go(-1)",'.(3*1000).');</script>';
						$str .= "    <p><a href=\"javascript:history.go(-1);\">投票失败，3秒后自动跳转，如果您的浏览器没有自动跳转,请点击这里</a></p>\n";
						echo $str;
						exit;;
					}*/

				}
				 if ($i<=1) {
					$str = '   <script language=javascript>alert("投票失败！！");</script>';
					$str .= '    <script language=javascript>setTimeout("history.go(-1)",'.(1*1000).');</script>';
					$str .= "    <p><a href=\"javascript:history.go(-1);\">投票失败，1秒后自动跳转，如果您的浏览器没有自动跳转,请点击这里</a></p>\n";
					echo $str;
					exit;;
				} 

			}else {
				$upid.=",".$v;
			}
		}

	}
	/*
	if ($upid=="1") {
		$str = '   <script language=javascript>alert("投票失败！");</script>';
		$str .= '    <script language=javascript>setTimeout("history.go(-1)",'.(3*1000).');</script>';
		$str .= "    <p><a href=\"javascript:history.go(-1);\">投票失败，3秒后自动跳转，如果您的浏览器没有自动跳转,请点击这里</a></p>\n";
		
		echo $str;
		echo "<script>history.go(-1);</script>";
		
		exit;;
	}
	*/
	$cok="isvote".$sid;
	//echo $cok;
	//echo $$cok;
	/*if ($$cok) {
		$str = '   <script language=javascript>alert("投票失败！您已经投过票了，请不要重复投票");</script>';
		$str .= '    <script language=javascript>setTimeout("history.go(-1)",'.(3*1000).');</script>';
		$str .= "    <p><a href=\"javascript:history.go(-1);\">投票失败，3秒后自动跳转，如果您的浏览器没有自动跳转,请点击这里</a></p>\n";
		echo $str;
		exit;;
	}
	*/
	
	$sql="select * from ma_user where uid='$uid' limit 1";
	//echo $sql;
	$r=$db->r($sql);
	if ($r) {
		$str = '   <script language=javascript>alert("投票失败！您已经投过票了，请不要重复投票");</script>';
		$str .= '    <script language=javascript>setTimeout("history.go(-1)",'.(3*1000).');</script>';
		$str .= "    <p><a href=\"javascript:history.go(-1);\">投票失败，3秒后自动跳转，如果您的浏览器没有自动跳转,请点击这里</a></p>\n";
		echo $str;
		echo "<script>history.go(-1);</script>";
		
		exit;;
	}
	
	$sql="update ma_question set count=count+1 where qid in ({$upid})";

	if ($db->q($sql)) {
		$ip=get_ip();
		$sql="insert into ma_user (content,mac,answer,sid,uptime,uid) values ('{$jy}','{$mymac}','{$upid}','{$sid}',now(),'{$uid}')";
		$db->q($sql);
		//_setcookie("isvote".$sid,1,3600*24*30);
		$str = '   <script language=javascript>alert("投票成功,感谢您提出的宝贵意见和建议！");</script>';
		
		//$str .= '    <script language=javascript>setTimeout("history.go(-1)",'.(3*1000).');</script>';
		$str .= '    <script language=javascript>setTimeout("window.location.href="votea.php",'.(3*1000).');</script>';
		$str .= "    <p><a href=\"votea.php\">投票成功，3秒后自动跳转，如果您的浏览器没有自动跳转,请点击这里</a></p>\n";
		
		echo $str;
		echo "<script>location.href='votea.php';</script>";
		exit;

	}

}

?>
<body>
	<?php include 'top.php';?>
      <form id="form1" name="form1" method="post" action="">
    <div class="vote">
       <div>
       
       <?php 
        
     //  $sql="select lname from useraccounts where intid=31";
      // $rrr=$db->r($sql);
       //echo $rrr[lname];
       //$sql= "INSERT INTO `ma_question` VALUES ('463', '县级干部', '73', '1'),('464', '乡科级干部', '73', '70'),('465', '党代表', '73', '9'),('466', '人大代表', '73', '9'),('467', '政协委员', '73', '14'),('468', '村党组织书记', '73', '7'),('469', '企业负责人', '73', '2'),('470', '离退休老干部', '73', '5'),('471', '基层群众', '73', '17'),('472', '党外人士', '73', '5'),('473', '其他', '73', '24'),('474', '县级机关', '74', '7'),('475', '县直单位', '74', '90'),('476', '乡镇', '74', '33'),('477', '村、社区', '74', '16'),('478', '非公有制经济组织和社会组织', '74', '3'),('479', '其他', '74', '14'),('480', '好', '75', '141'),('481', '较好', '75', '21'),('482', '一般', '75', '1'),('483', '较差', '75', '0'),('484', '认识不够，思想上“不以为然”', '76', '5'),('485', '落实不力，执行不到位', '76', '9'),('486', '查处不严，查而不处，处不问责', '76', '1'),('487', '制度不全，预防、查处、问责等配套机制不够', '76', '2'),('488', '以上都不存在', '76', '147'),('489', '形式主义', '77', '67'),('490', '官僚主义', '77', '5'),('491', '享乐主义', '77', '1'),('492', '奢靡之风', '77', '0'),('493', '政绩观不正确，发展观有偏差', '78', '5'),('494', '工作漂浮，措施不硬', '78', '7'),('495', '学风不浓，以干代学，不注重学用结合', '78', '6'),('496', '急功近利，不从实际出发，做表面文章', '78', '6'),('497', '调研蜻蜓点水、走马观花', '78', '5'),('498', '以上都不存在', '78', '137'),('499', '高高在上，主观片面，脱离群众', '79', '7'),('500', '敷衍塞责、不负责任，不敢担当', '79', '5'),('501', '抓不住问题的关键，不解剖麻雀，贪大求全', '79', '4'),('502', '讲排场，摆阔气，迎来送往，前呼后拥', '79', '6'),('503', '递条子、打招呼、说情风', '79', '2'),('504', '以上都不存在', '79', '140'),('505', '贪图安逸、不思进取', '80', '6'),('506', '因循守旧、创新意识不强', '80', '8'),('507', '自由散漫、纪律松懈、玩风盛行', '80', '0'),('508', '超标准占房、配车、接待', '80', '9'),('509', '以上都不存在', '80', '141'),('510', '公款吃喝、铺张浪费', '81', '4'),('511', '巧立名目，挥霍公款', '81', '3'),('512', '大操大办、借机敛财', '81', '4'),('513', '日益骄横、腐化堕落', '81', '1'),('514', '以上都不存在', '81', '149'),('515', '党性原则淡化、理想信念缺失', '82', '5'),('516', '宗旨意识淡薄、联系群众不够', '82', '15'),('517', '放松自我要求、行为随波逐流', '82', '5'),('518', '纪律意识不强、执行党纪不严', '82', '7'),('519', '其他方面', '82', '72'),('520', '集中教育与日常工作“两张皮”', '83', '22'),('521', '搞形式主义、走过场', '83', '55'),('522', '不能解决党员群众关注的突出问题', '83', '26'),('523', '学习教育流于形式', '83', '27'),('524', '批评和自我批评流于形式', '83', '20'),('525', '整改落实流于形式', '83', '26'),('526', '活动出现偏差，影响团结稳定', '83', '19'),('527', '群众参与不够', '83', '59'),('528', '非常满意', '84', '103'),('529', '满意', '84', '42'),('530', '基本满意', '84', '17'),('531', '不满意', '84', '0'),('532', '走马观花，喜好不喜坏，不能了解真实情况', '85', '9'),('533', '搞形式主义，增加基层负担', '85', '6'),('534', '只听汇报，不接触群众', '85', '10'),('535', '指导工作不得要领，不负责任地乱表态', '85', '0'),('536', '其他方面', '85', '68'),('537', '请提出意见', '85', '0')";
      // $db->q($sql);
       if (! empty($v_sid)) {
     		 // 	echo "1111111";
       }else {
	        
	       	$sql="select * from  ma_title   order by tid ";
	       	// echo $sql;
	       	$rst=$db->a($sql);
	       	$i=1;
	       	foreach ($rst as $k=>$rs){
			       	 echo "<div class=\"clearfix\">\r\n<p class=\"vote_tit\"><span>".$i.".</span>".$rs[ttitle]."</p>\r\n"	;
			       	 //echo "====你好".$rs[listtype]."====";
			       	 
			       	 $sql="select * from  ma_question where tid='$rs[tid]'  ORDER BY CONVERT(question USING gbk)";
			       	 
			       	 if ($rs[listtype]==1) {
			       	 //echo $sql;
					       	 $rsq=$db->a($sql);
					       	 foreach ($rsq as $k=>$rs1){
		 			       	 	
					       	 		echo " <p><input type=\"radio\" class=\"left time\"  name=\"{$rs1[tid]}\" value=\"$rs1[qid]\" />\r\n";
					       	 		echo $rs1[question]."</p>";
					       	 }
			       	 
  			       	 	}elseif($rs[listtype]==2) {
 								$rsq=$db->a($sql);
								foreach ($rsq as $k=>$rs1){
								
										echo " <p><input type=\"checkbox\" class=\"left time\" name=\"{$rs1[tid]}[]\" value=\"$rs1[qid]\" />\r\n";
										echo $rs1[question]."</p>";
								}
 			       
			       	 	}else{
 			       	 		echo " <div class=\"xy3\"><textarea name=\"jy\"></textarea> </div> \r\n ";
			       	 	}
  			        
	       	 $i++;
	       	 echo "</div>\r\n";
	       	}
	       
   	}
       
       
       ?>
       
             
           <div class="clearfix">
                 <div class="btn">
                    <input class="tp" name="" type="submit" value="发送"/>
                </div>
           </div>            
        </div>
        
    </div>
         </form>       
   	<?php include 'foot.php';?>
</body>
</html>
