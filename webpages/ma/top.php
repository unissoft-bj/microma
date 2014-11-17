<?php if (empty($_COOKIE['uid'])) {
	echo "<script>location.href='/wap/index.php?m=register';</script>";
}?>
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
<div class="header_name"><?php echo $_GET['title']?></div>
<div class="header_user"><a href="../wap/member/"></a></div>
</div>
</header>
