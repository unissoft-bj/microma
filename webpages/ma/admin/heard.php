<?php 
//echo _getcookie(cookia_l_user);
if (! $cookia_a_flag) {
	msg("您还未登录请重新登录！",$cfg['siteurl']."admin/login.php","3");
}?> 
<!--一级导航--> 
<div id="hdw">
	<div id="hd">
		<div id="logo"><a href="<?php echo $cfg['siteurl'];?>index.php" class="link" target="_blank"><font size=15px  color=white>移动互联网辅助运营系统</font></a></div>
		<div class="guides">
			<!-- <div class="city">
				<h2>  </h2>
			</div> -->
			<div id="guides-city-change" class="change"></div>
		</div>
		<ul class="nav cf">
							<li<?php if ($show1=="首页") echo " class=\"current\""; ?>><a href="<?php echo $cfg['siteurl'];?>admin/index.php">首页</a></li>
		
							<li<?php if ($show1=="文章") echo " class=\"current\""; ?>><a href="<?php echo $cfg['siteurl'];?>admin/news/index.php">文章</a></li>
							
							<li<?php if ($show1=="留言") echo " class=\"current\""; ?>><a href="<?php echo $cfg['siteurl'];?>admin/discuss/index.php">留言</a></li>
							
 							<li<?php if ($show1=="投票") echo " class=\"current\""; ?>><a href="<?php echo $cfg['siteurl'];?>admin/vote/index.php">投票</a></li>
		</ul> 
		<div class="vcoupon">»&nbsp;<a href="<?php echo $cfg['siteurl'];?>admin/logout.php">管理员退出</a></div>	</div>
</div>
<!--一级导航结束--> 

 