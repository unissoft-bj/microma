<div class="dashboard" id="dashboard">
		<ul> 
			<li<?php if ($show2=="抽奖池") echo " class=\"current\""; ?>><a href="<?php echo $cfg['siteurl'];?>admin/choujiang/index.php">抽奖池</a><span></span></li>
			<?php if ($show2=="新建短信"){?>
 			<li class="current"><a href="#">新建短信</a><span></span></li><?php }?>
 			<?php if ($show2=="编辑短信"){?>
 			<li class="current"><a href="#">编辑短信</a><span></span></li><?php }?>
 			
 			<li<?php if ($show2=="抽奖设置") echo " class=\"current\""; ?>><a href="<?php echo $cfg['siteurl'];?>admin/choujiang/config.php">抽奖设置</a><span></span></li>
			<?php if ($show2=="发送短信"){?>
 			<li class="current"><a href="#">发送短信</a><span></span></li><?php }?>
 			<?php if ($show2=="编辑分类"){?>
 			<li class="current"><a href="#">编辑分类</a><span></span></li><?php }?>
 			
 			<li<?php if ($show2=="短信通道") echo " class=\"current\""; ?>><a href="<?php echo $cfg['siteurl'];?>admin/choujiang/authsms_list.php">中奖纪录</a><span></span></li>
			<?php if ($show2=="新建分类"){?>
 			<li class="current"><a href="#">新建分类</a><span></span></li><?php }?>
 			<?php if ($show2=="编辑分类"){?>
 			<li class="current"><a href="#">编辑分类</a><span></span></li><?php }?>
 			
 			
 		</ul>
	</div>