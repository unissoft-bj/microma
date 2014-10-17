<div class="dashboard" id="dashboard">
		<ul> 
			<li<?php if ($show2=="文章列表") echo " class=\"current\""; ?>><a href="<?php echo $cfg['siteurl'];?>admin/news/index.php">文章列表</a><span></span></li>
			<?php if ($show2=="新建文章"){?>
 			<li class="current"><a href="#">新建文章</a><span></span></li><?php }?>
 			<?php if ($show2=="编辑文章"){?>
 			<li class="current"><a href="#">编辑文章</a><span></span></li><?php }?>
 		</ul>
	</div>