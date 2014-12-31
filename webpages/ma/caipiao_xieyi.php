
  
<!DOCTYPE HTML>
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
<meta name="viewport" content="width=device-width,height=device-height,inital-scale=1.0,maximum-scale=1.0,user-scalable=no;">
<title>详情</title>
<link rel="stylesheet" type="text/css" href="css/css.css">
</head>

<body>
   <script type="text/javascript" src="js/jquery-1.7.1.min.js"></script>
<script type="text/javascript">
$.post("http://172.16.0.1/ma/ajax_getmessage.php",
		  {
			 lg:"2",
		    flag:"1"
		  },
		  function(data,status){
			  if(status == "success"){
					  $('#messnum').html(data);
			   			 //alert("开始成功，请等待结果");
				  
		   			 //alert("Data: " + data + "\nStatus: " + status);
			  }else{
				 	  alert("失败。。。");
				  }
		  });
$.post("http://172.16.0.1/ma/ajax_getonline.php",
		  {
			 lg:"2",
		    flag:"1"
		  },
		  function(data,status){
			  if(status == "success"){
					  $('#online').html(data);
			   			 //alert("开始成功，请等待结果");
				  
		   			 //alert("Data: " + data + "\nStatus: " + status);
			  }else{
				 	  alert("失败。。。");
				  }
		  });
var countdown = setInterval(CountDown, 3000);
function CountDown() {
    $("#button").attr("disabled", true);
    $("#button").val("" + count + "s");

    $.post("http://172.16.0.1/ma/ajax_getmessage.php",
			  {
				 lg:"2",
			    flag:"1"
			  },
			  function(data,status){
				  if(status == "success"){
  						  $('#messnum').html(data);
				   			 //alert("开始成功，请等待结果");
					  
			   			 //alert("Data: " + data + "\nStatus: " + status);
				  }else{
					 	  alert("失败。。。");
					  }
			  });
    $.post("http://172.16.0.1/ma/ajax_getonline.php",
			  {
				 lg:"2",
			    flag:"1"
			  },
			  function(data,status){
				  if(status == "success"){
						  $('#online').html(data);
				   			 //alert("开始成功，请等待结果");
					  
			   			 //alert("Data: " + data + "\nStatus: " + status);
				  }else{
					 	  alert("失败。。。");
					  }
			  });
}
</script>
<link rel="stylesheet" type="text/css" href="/template/wap/css/wap.css"/>
<header class="header">
<div class="header_cont">
 <div class="left-box"> <a class="hd-lbtn" href="javascript:history.back()"><span>返回</span></a></div>
<div class="header_name">委托投注协议</div>
<div class="header_user"><a href="../wap/member/"></a></div>
</div>
</header>
   
       <div id="discuss_list">
    	<ul id="discuss_info2">
        	<li>
            	<ul>
                	<li class="clearfix"><span class="left2" >委托投注协议</span></li>
                    <li class="jianjie">a</li>
                    <li><p style="font-family:Helvetica, Arial, SimSun;">
	<strong>1.&nbsp;本协议的订立</strong><br />
在本平台依据《返利网用户使用协议》登记注册的用户，在同意本协议以下全部条款后，方有资格享受本服务平台（以下简称“平台”）提供的有关彩票代为电话投注服务（以下简称“服务”）。用户使用本平台提供的服务即意味着同意与本平台签订本协议并同意受本协议约束，使用服务前请认真阅读本协议。
</p>
<p style="font-family:Helvetica, Arial, SimSun;">
	&nbsp;
</p>
<p style="font-family:Helvetica, Arial, SimSun;">
	<strong>2.&nbsp;服务说明</strong><br />
本平台所提供的彩票电话代为投注服务所涉及的任一彩种的游戏规则以发行机构所公布的官方规则为准。本平台所显示的日期与时间均为北京时间，委托投注时间以本平台服务系统的服务器时间为准。 本平台提供的仅仅是一种服务项目，即本网站收到用户下注方案后代用户向有关彩票发行中心进行电话投注，并非是用户在本平台上进行彩票投注。用户成功在本平台提交委托投注订单后并不代表彩票已经投注成功，系统需要根据用户所下单的投注数据向有关彩票发行中心进行电话投注，用户可在订单详情中查看委托投注状态。兑奖处理及处理周期根据不同彩票品种的操作难易性而定。
</p>
<p style="font-family:Helvetica, Arial, SimSun;">
	&nbsp;
</p>
<p style="font-family:Helvetica, Arial, SimSun;">
	<strong>3.&nbsp;用户资料及安全</strong><br />
3.1 为保障用户的合法权益，避免在中奖时因用户注册资料与真实情况不符而发生无法兑奖的情况或产生纠纷，请用户在本平台注册时务必提供真实、全面、准确的个人信息。对因用户自身原因而造成的不能兑奖等情况，本平台不承担任何责任。如果用户提供的资料包含有不正确的信息，本平台保留结束该用户使用服务资格的权利。<br />
3.2 除非依据或执行相关法律法规政策或司法机关、政府部门的规定或要求，本平台承诺对用户注册开户中的隐私信息保密，即未经用户授权或同意，不会擅自将用户信息用于处理委托投注以外的其他活动。<br />
3.3 本平台会尽力维护平台信息的安全，但法律规定的不可抗力，以及因为黑客入侵、计算机病毒侵入发作、政府管制等原因造成的平台暂时性关闭或者影响网络正常经营的情况而造成用户资料泄露、丢失、被盗用、被篡改的，本平台不承担任何责任。<br />
3.4 用户须妥善保管本人密码，并定期修改，因用户密码保护不善或与他人共享账户而造成用户资料被篡改、泄漏、丢失的，以及造成相关损失的，由用户自己承担，本平台不承担任何责任。用户如发现上述情况应立即与本平台联系。
</p>
<p style="font-family:Helvetica, Arial, SimSun;">
	&nbsp;
</p>
<p style="font-family:Helvetica, Arial, SimSun;">
	<strong>4.&nbsp;用户的权利和义务</strong><br />
4.1 用户个人资料在成功完善后不得随意修改。当用户开户资料因特殊原因发生变化必须修改时，用户需按照返利网规定流程向客服中心申请修改，客服中心在审查后考虑进行受理。为保护用户资金安全，所有开户用户姓名、身份证号不能更改。<br />
4.2 用户成功进行委托电话投注后，通过“我的彩票”功能可查看投注记录及中奖状态。<br />
4.3 用户必须在平台上显示的当期彩票最后截止投注时间之前按照平台要求的正确方式和程序提供投注方案，否则造成的相关损失由用户自行承担。
</p>
<p style="font-family:Helvetica, Arial, SimSun;">
	&nbsp;
</p>
<p style="font-family:Helvetica, Arial, SimSun;">
	<strong>5.&nbsp;本平台的权利和义务</strong>
</p>
<span style="font-family:Helvetica, Arial, SimSun;line-height:22px;background-color:#F4F4F4;">5.1 本平台根据用户提供的委托投注方案向体彩/福彩中心提交投注数据。</span><br />
<span style="font-family:Helvetica, Arial, SimSun;line-height:22px;background-color:#F4F4F4;">5.2 为保障用户合法权益，本平台有权利也有义务对有被侵犯嫌疑的用户账户实施冻结，由于本款前述行为的发生而给用户造成损失的，本平台不承担任何责任。</span><br />
<span style="font-family:Helvetica, Arial, SimSun;line-height:22px;background-color:#F4F4F4;">5.3 本平台有权在需要时对本协议进行修改。本平台在经营过程中，因国家法律、政策或本平台经营的需要，而对本协议进行修改的，本平台将在网上公布最新的服务协议内容，并且通过本平台进行公布将是对此修改的唯一通知方式。如用户不同意新的协议内容，请与本平台联系，办理相关终止服务的手续。否则，用户继续使用本平台相关服务的行为，将视为同意本条所称的修改。</span>
<p style="font-family:Helvetica, Arial, SimSun;">
	&nbsp;
</p>
<p style="font-family:Helvetica, Arial, SimSun;">
	&nbsp;
</p>
<p style="font-family:Helvetica, Arial, SimSun;">
	<strong>6.&nbsp;投注服务的成立与未成立</strong>
</p>
<span style="font-family:Helvetica, Arial, SimSun;line-height:22px;background-color:#F4F4F4;">6.1 本平台遵照国家相关彩票发行管理机构颁布的相应彩票销售条例，并以此为依据接受用户彩票委托投注服务。投注截止时间以本平台公布的时间为准。</span><br />
<span style="font-family:Helvetica, Arial, SimSun;line-height:22px;background-color:#F4F4F4;">6.2 单个投注彩票的投注状态以彩票中心接受投注主机系统最终投注状态为准，投注状态为分“等待付款”、“出票成功”、“出票失败”、“过期关闭”。</span><br />
<span style="font-family:Helvetica, Arial, SimSun;line-height:22px;background-color:#F4F4F4;">6.3 投注成功定义：单个投注用户人工或委托发起投注时，投注系统中会对用户账户进行投注金或者积分的扣除，此时账户余额减少。在投注记录查询中会显示此投注记录，同时状态为“出票成功”字样。出票成功后，用户相对应支付的投注金或者积分不予退还。</span><br />
<span style="font-family:Helvetica, Arial, SimSun;line-height:22px;background-color:#F4F4F4;">6.4 对于单个用户在预约投注时段（每个彩种当日销售截止后至次日开机销售前的时段为预约投注时段）进行的委托投注，用户应在此当期投注截止后登录【我的彩票】查看投注记录，是否有“出票成功”字样来确认委托预约投注是否成功，如仍未成功需要联系本平台客服中心查询。</span><br />
<span style="font-family:Helvetica, Arial, SimSun;line-height:22px;background-color:#F4F4F4;">6.5 因不可抗力，以及黑客入侵、计算机病毒侵入发作、政府管制、系统维护等原因造成的网络故障或者超过接受投注时间下注或者账户余额不足、彩票发行中心故障等原因造成投注失败时，视为委托投注服务未成立，由此所产生的后果和损失本网站不予承担。</span><br />
<span style="font-family:Helvetica, Arial, SimSun;line-height:22px;background-color:#F4F4F4;">6.6 当出现委托投注服务未成立时，即“出票失败”状态，本平台将退还用户已支付的费用或者积分。此时投注失败的奖票与中奖号码相符时，不能视为中奖，本平台和有关彩票发行中心无需支付用户中奖的奖金 。</span><br />
<span style="font-family:Helvetica, Arial, SimSun;line-height:22px;background-color:#F4F4F4;">6.7 本平台在接受用户委托投注时不收取服务费。</span><br />
<span style="font-family:Helvetica, Arial, SimSun;line-height:22px;background-color:#F4F4F4;">6.8 本平台不对未满18周岁的未成年人提供服务。</span><br />
<p style="font-family:Helvetica, Arial, SimSun;">
	&nbsp;
</p>
<p style="font-family:Helvetica, Arial, SimSun;">
	<strong>7.&nbsp;财务结算及通知</strong>
</p>
<span style="font-family:Helvetica, Arial, SimSun;line-height:22px;background-color:#F4F4F4;">7.1 用户可以随时进行账户余额核查，本平台向用户提供账户资金和积分对账单。</span><br />
<span style="font-family:Helvetica, Arial, SimSun;line-height:22px;background-color:#F4F4F4;">7.2 单个投注彩票的，每期彩票开奖结果公布后，本平台将公布相关开奖信息，并在3个工作日内将固定小奖奖金返至中奖用户的奖金账户中。大奖奖金用户可在规定的时间内到彩票中心指定地点凭有效身份凭证领取，过期视为弃奖。用户若想核对当期中奖金额，可直接通过福彩中心进行核对，本平台不承担为用户解释中奖金额的责任。</span><br />
<span style="font-family:Helvetica, Arial, SimSun;line-height:22px;background-color:#F4F4F4;">7.3 单个投注的用户和合买方案中得大奖奖金，需依法缴纳个人所得税，由彩票发行中心依法代扣代缴。</span><br />
<p style="font-family:Helvetica, Arial, SimSun;">
	&nbsp;
</p>
<p style="font-family:Helvetica, Arial, SimSun;">
	<strong>8.&nbsp;有关实施和争端的处理除本协议其他条款已作出的规定外，发生下列情况时本平台亦不予承担任何法律责任：</strong>
</p>
<span style="font-family:Helvetica, Arial, SimSun;line-height:22px;background-color:#F4F4F4;">8.1 由于服务平台固有的局限性，任何由于黑客攻击、计算机病毒侵入并发作、政府管制、系统维护等原因而造成的平台暂时性关闭或通讯中断、机器故障、网络繁忙、彩票发行中心故障等非平台可以控制的原因造成的投注失败或本平台未能收到信息等情况，以及由此等情况产生的纠纷。</span><br />
<span style="font-family:Helvetica, Arial, SimSun;line-height:22px;background-color:#F4F4F4;">8.2 由于与本平台链接的其它平台所造成的个人资料泄露及由此而导致的任何争议和后果。</span><br />
<span style="font-family:Helvetica, Arial, SimSun;line-height:22px;background-color:#F4F4F4;">8.3 本平台对任何因用户根据本协议使用服务而发生的直接、间接、偶然、特殊损害或损失不承担责任。</span><br />
<p style="font-family:Helvetica, Arial, SimSun;">
	&nbsp;
</p>
<p style="font-family:Helvetica, Arial, SimSun;">
	<strong>9.&nbsp;法律适用与争议解决</strong>
</p>
<span style="font-family:Helvetica, Arial, SimSun;line-height:22px;background-color:#F4F4F4;">9.1 本协议适用中华人民共和国法律。</span><br />
<span style="font-family:Helvetica, Arial, SimSun;line-height:22px;background-color:#F4F4F4;">9.2 因本协议产生的任何纠纷，由双方协商解决，协商不成的任何一方有权向上海市浦东新区人民法院提起诉讼。</span></li>
                </ul>
            </li>
        </ul>
        
    </div>
    

<footer class="footer">


<a href="javascript:window.location.reload();">刷新</a>
-
<a href="javascript:window.history.back();">返回</a>
-
<a href="http://www.unissoft.com/" ><small>Powered by unissoft</small></a>
</footer></body>
</html>
