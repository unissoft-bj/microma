<div class="dashboard" id="dashboard">
		<ul> 
			<li<?php if ($show2=="商品列表") echo " class=\"current\""; ?>><a href="<?php echo $cfg['siteurl'];?>admin/product/index.php">商品列表</a><span></span></li>
			<?php if ($show2=="添加商品"){?>
 			<li class="current"><a href="#">添加商品</a><span></span></li><?php }?>
 			<?php if ($show2=="编辑商品"){?>
 			<li class="current"><a href="#">编辑商品</a><span></span></li><?php }?>
 			
 		</ul>
	</div>