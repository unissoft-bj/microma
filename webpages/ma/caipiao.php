<?php if (empty($_COOKIE['uid'])) {
	echo "<script>location.href='/wap/index.php?m=register';</script>";
}?>
<?php
if (isset($_GET['ssq_str'])) {
require 'global.php';
require 'inc/mysql.Class.php';
require 'inc/function.inc.php';
session_start();
//��·url
$lailu =  $_SERVER['HTTP_REFERER'];

//echo $product_jifen;

$sql="select integral from useraccounts where userid='".$_COOKIE['userid']."'";
$rs=$db->r($sql);
$integral_old =  $rs['integral'];
$integral_new = $integral_old-1000;
//echo $integral_new;
//������㹻��һ�������һ�ʧ��
if ($integral_new>=0) {
	/*�һ�
	
	1.����useraccounts �Ļ��
	2.��Ӷһ���¼��userlog��
	3.��ת����Ʒ����ҳ
	*/
	//echo "ok";
	
	$sql1="update useraccounts set integral=".$integral_new ." where userid='".$_COOKIE['userid']."'";
	$rs=$db->q($sql1);
	$sql2="INSERT INTO userlog (userid,integral,dintegral,action,rectime) 
			VALUES ('".$_COOKIE['userid']."',".
					$integral_old.",-1000,'兑换彩票：".$_GET['ssq_str']."','".dtime()."')";
	
	$rs=$db->q($sql2);
	$_SESSION['jifen']=$integral_new;
	header("location: caipiao.php?point=兑换成功，消耗积分1000");
	
}else {
	//��ת����Ʒ����ҳ
	header("location: caipiao.php?point=积分不足，兑换失败");
	//msg("兑积分不足 兑换失败",$lailu."?&point=积分不足 兑换失败",1);
}
	//
	die();	
 }
?>
<!DOCTYPE html>
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">

<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
<meta name="viewport" content="width=device-width, target-densitydpi=high-dpi, initial-scale=1.0, maximum-scale=1.0, user-scalable=no,minimal-ui">
<meta name="apple-mobile-web-app-capable" content="yes">
<meta name="apple-mobile-web-app-status-bar-style" content="black">
<meta content="telephone=no" name="format-detection">

<title>中国福利彩票-双色球</title>
<script type="text/javascript"> window.__loadindStartTime = new Date();</script>

<link rel="stylesheet" href="./caipiaocss/base.css?260203">
<link rel="stylesheet" href="./caipiaocss/com.css?260203">
<script src="./caipiaocss/zepto.js"></script>
<script src="./caipiaocss/mobileCore.js"></script>
<style>
.gmu-media-detect{-webkit-transition: width 0.001ms; width: 0; position: relative; bottom: -999999px;}
@media screen and (width: 1277px) { #gmu-media-detect0 { width: 100px; } }
</style>
<script src="./caipiaocss/game.js"></script>
<script src="./caipiaocss/betArea.js"></script>
<script src="./caipiaocss/core.js"></script>
<script src="./caipiaocss/index.js"></script>
<link rel="stylesheet" type="text/css" href="/template/wap/css/wap.css"/>
</head>
<body class="" id="notInWebView" style="">

<noscript>
&lt;div id="noScript"&gt;请开启浏览器的Javascript功能，或使用支持javascript的浏览器访问&lt;/div&gt;
</noscript>
<article class="docBody clearfix newBetPage">
  <header id="header">
    <h1>双色球</h1>
    <a href="javascript:;" cpurl="/wap/member/" class="rightBox" rel="nofollow">个人中心</a> <a class="goBack "  href="/wap/member/" target="_self" rel="nofollow">返回</a> </header>
  <section id="wraper" style="height: 381px;">
    <div>
	
	  <?php
if (isset($_GET['point'])) {
	
 ?>
<div class="msg-err" style="opacity: 1;-webkit-animation:shake 0.5s linear 0s;"><?php echo $_GET['point']?></div>
<?php }?>
	  </div>
	  
      <div class="gameTip clearfix"> <span class="l_box rockTip" style="">点击或摇一摇选号</span> <span class="r_box">至少选择6个红球，1个蓝球</span> </div>
      <div > 
	  
      <div class="betBox" style="padding-bottom: 2.83rem;">
        <div class="ballCon redBalls">
          <ul class="clearfix">
            <li> <span class="js-ball" data-value="1">01</span> </li>
            <li> <span class="js-ball" data-value="2">02</span> </li>
            <li> <span class="js-ball" data-value="3">03</span> </li>
            <li> <span class="js-ball" data-value="4">04</span> </li>
            <li> <span class="js-ball" data-value="5">05</span> </li>
            <li> <span class="js-ball" data-value="6">06</span> </li>
            <li> <span class="js-ball" data-value="7">07</span> </li>
            <li> <span class="js-ball" data-value="8">08</span> </li>
            <li> <span class="js-ball" data-value="9">09</span> </li>
            <li> <span class="js-ball" data-value="10">10</span> </li>
            <li> <span class="js-ball" data-value="11">11</span> </li>
            <li> <span class="js-ball" data-value="12">12</span> </li>
            <li> <span class="js-ball" data-value="13">13</span> </li>
            <li> <span class="js-ball" data-value="14">14</span> </li>
            <li> <span class="js-ball" data-value="15">15</span> </li>
            <li> <span class="js-ball" data-value="16">16</span> </li>
            <li> <span class="js-ball" data-value="17">17</span> </li>
            <li> <span class="js-ball" data-value="18">18</span> </li>
            <li> <span class="js-ball" data-value="19">19</span> </li>
            <li> <span class="js-ball" data-value="20">20</span> </li>
            <li> <span class="js-ball" data-value="21">21</span> </li>
            <li> <span class="js-ball" data-value="22">22</span> </li>
            <li> <span class="js-ball" data-value="23">23</span> </li>
            <li> <span class="js-ball" data-value="24">24</span> </li>
            <li> <span class="js-ball" data-value="25">25</span> </li>
            <li> <span class="js-ball" data-value="26">26</span> </li>
            <li> <span class="js-ball" data-value="27">27</span> </li>
            <li> <span class="js-ball" data-value="28">28</span> </li>
            <li> <span class="js-ball" data-value="29">29</span> </li>
            <li> <span class="js-ball" data-value="30">30</span> </li>
            <li> <span class="js-ball" data-value="31">31</span> </li>
            <li> <span class="js-ball" data-value="32">32</span> </li>
            <li> <span class="js-ball" data-value="33">33</span> </li>
          </ul>
        </div>
        <div class="ballCon blueBalls">
          <ul class="clearfix" id="caipiao">
            <li> <span class="js-ball" data-value="1">01</span> </li>
            <li> <span class="js-ball" data-value="2">02</span> </li>
            <li> <span class="js-ball" data-value="3">03</span> </li>
            <li> <span class="js-ball" data-value="4">04</span> </li>
            <li> <span class="js-ball" data-value="5">05</span> </li>
            <li> <span class="js-ball" data-value="6">06</span> </li>
            <li> <span class="js-ball" data-value="7">07</span> </li>
            <li> <span class="js-ball" data-value="8">08</span> </li>
            <li> <span class="js-ball" data-value="9">09</span> </li>
            <li> <span class="js-ball" data-value="10">10</span> </li>
            <li> <span class="js-ball" data-value="11">11</span> </li>
            <li> <span class="js-ball" data-value="12">12</span> </li>
            <li> <span class="js-ball" data-value="13">13</span> </li>
            <li> <span class="js-ball" data-value="14">14</span> </li>
            <li> <span class="js-ball" data-value="15">15</span> </li>
            <li> <span class="js-ball" data-value="16">16</span> </li>
          </ul>
        </div>
      </div>
    </div>
  </section>
  <section class="betResult hasNums">
    
     <em class="bottomBtn confirm" id="" onClick="getInfo()">立即投注 消耗100积分</em> 
    <div id="randomTip" class="randomNumTip hide"> <i><i></i></i> <a href="javascript:;" data-count="1"><em class="tips">1</em>1注</a> <a href="javascript:;" data-count="5"><em class="tips">5</em>5注</a> <a href="javascript:;" data-count="10"><em class="tips">10</em>10注</a> </div>
  </section>
</article>
<script type="text/javascript"> 
function getInfo(){
 	var str = document.getElementsByClassName("js-ball got active");
	if(str.length!=7){
		alert("选择错误，请重新选择");
	}else{
		//alert(str.length);
		//alert(str[0].innerHTML);
		var ssq_str = "";
		for(i=0;i<str.length;i++){
			ssq_str = ssq_str+str[i].innerHTML;
		}
		var url = "caipiao_submit.php?ssq_str="+ssq_str;
		//alert(url);
		window.location.replace(url);
		//alert(ssq_str);
	}
	
}
</script>
<script>window.setTimeout(function(){var l=document.getElementById("touchStrikeLayout");l&&l.parentNode.removeChild(l)},500);</script>
<script>window.Core && Core.fastInit && Core.fastInit();</script>
<script src="./caipiaocss/ntes.js"></script>
<script>_ntes_nacc=window.top===window.self?"caipiao":"cpiframe";neteaseTracker();</script>
<div id="forTap" style="color: White;opacity:0;border-radius: 60px; position: absolute; z-index: 99999; width: 60px; height: 60px;left:-999px;top:-999px;"></div>
<div class="gmu-media-detect" id="gmu-media-detect0"></div>
</body>
</html>
