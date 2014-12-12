<div class="dashboard" id="dashboard">
		<ul> 
			<li<?php if ($show2=="短信池") echo " class=\"current\""; ?>><a href="<?php echo $cfg['siteurl'];?>admin/sms/index.php">短信池</a><span></span></li>
			<?php if ($show2=="新建短信"){?>
 			<li class="current"><a href="#">新建短信</a><span></span></li><?php }?>
 			<?php if ($show2=="编辑短信"){?>
 			<li class="current"><a href="#">编辑短信</a><span></span></li><?php }?>
 			
 			<li<?php if ($show2=="活动用户") echo " class=\"current\""; ?>><a href="<?php echo $cfg['siteurl'];?>admin/sms/useractive_list.php">活动用户</a><span></span></li>
			<?php if ($show2=="发送短信"){?>
 			<li class="current"><a href="#">发送短信</a><span></span></li><?php }?>
 			<?php if ($show2=="编辑分类"){?>
 			<li class="current"><a href="#">编辑分类</a><span></span></li><?php }?>
 			
 			<li<?php if ($show2=="短信通道") echo " class=\"current\""; ?>><a href="<?php echo $cfg['siteurl'];?>admin/sms/authsms_list.php">短信通道</a><span></span></li>
			<?php if ($show2=="新建分类"){?>
 			<li class="current"><a href="#">新建分类</a><span></span></li><?php }?>
 			<?php if ($show2=="编辑分类"){?>
 			<li class="current"><a href="#">编辑分类</a><span></span></li><?php }?>
 			
 			<li<?php if ($show2=="收到的短信") echo " class=\"current\""; ?>><a href="<?php echo $cfg['siteurl'];?>admin/sms/smsrcv_list.php">收到的短信</a><span></span></li>
			<?php if ($show2=="新建分类"){?>
 			<li class="current"><a href="#">新建分类</a><span></span></li><?php }?>
 			<?php if ($show2=="编辑分类"){?>
 			<li class="current"><a href="#">编辑分类</a><span></span></li><?php }?>
 		</ul>
	</div>