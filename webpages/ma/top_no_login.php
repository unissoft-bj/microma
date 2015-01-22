
<script type="text/javascript" src="js/jquery-1.7.1.min.js"></script>
<script type="text/javascript">

</script>
<link rel="stylesheet" type="text/css" href="/template/wap/css/wap.css"/>
<header class="header">
<div class="header_cont">
 <div class="left-box"> <a class="hd-lbtn" href="javascript:history.back()"><span>返回</span></a></div>
<div class="header_name"><?php echo $_GET['title']?></div>
<div class="header_user"><a href="../wap/member/"></a></div>
</div>
</header>
<?php
if (isset($_GET['point'])) {
	
 ?>
<div class="msg-err" style="opacity: 1;-webkit-animation:shake 0.5s linear 0s;"><?php echo $_GET['point']?></div>
<?php }?>