<?php 
require 'global.php';
require 'inc/mysql.Class.php';
require 'inc/function.inc.php';
$touserid=$_GET["uid"];
?>
<!DOCTYPE HTML>
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
<meta name="viewport" content="width=device-width,height=device-height,inital-scale=1.0,maximum-scale=1.0,user-scalable=no;">
<title>发送便笺</title>
<link rel="stylesheet" type="text/css" href="css/css.css">
<script type="text/javascript">
function check(){
	bq=document.getElementById("mess").value;
	if(bq.length==0){
		alert("标签内容不能为空！");
		return false;
	}
}
</script>
</head>

<body>
	<?php include 'top.php';?>
    <div class="con3">
    <div class="table wenzi3">
          <form method="post" action="message_fscl.php">
    		<span class="tit3">请输入要发送的内容：</span>
                <div class="xy3">
                    <textarea name="mess" id="mess"></textarea>
                </div>
                <input type="hidden" value="<?php echo $touserid?>" name="touserid"/>
                <div class="btn">
                    <input class="tp" name="" type="submit" value="发送" onclick="return check();"/>
                </div>
            </form>
            </div>
        </div>
        
        <?php include 'foot.php';?>
</body>
</html>
