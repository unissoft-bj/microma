<div class="dashboard" id="dashboard">
		<ul> 
			<li<?php if ($show2=="投票列表") echo " class=\"current\""; ?>><a href="<?php echo $cfg['siteurl'];?>admin/vote/index.php">投票列表</a><span></span></li>
			<?php if ($show2=="新建投票"){?>
 			<li class="current"><a href="#">新建文章</a><span></span></li><?php }?>
 			<?php if ($show2=="编辑投票"){?>
 			<li class="current"><a href="#">编辑文章</a><span></span></li><?php }?>
 			<li<?php if ($show2=="问题列表") echo " class=\"current\""; ?>><a href="<?php echo $cfg['siteurl'];?>admin/vote/sort_list.php">问题列表</a><span></span></li>
			<?php if ($show2=="新建分类"){?>
 			<li class="current"><a href="#">新建分类</a><span></span></li><?php }?>
 			<?php if ($show2=="编辑分类"){?>
 			<li class="current"><a href="#">编辑分类</a><span></span></li><?php }?>
 		</ul>
	</div>