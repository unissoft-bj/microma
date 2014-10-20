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
	<div class="top">
    	<ul>
        	<li><img src="images/logo.png" alt=""/></li>
            <!--<li>欢迎您，xx</li>-->
            <li class="num"><a href="message_liebiao.php">便笺：<span id='messnum'>
              0
             </span></a></li>
            <li class="num"><a href="message_linkman.php">关注：<span id="online">0</span></a></li>
            <li class="wifi">
            <?php if ($_GET[auth]) {?>
            	 <a href='<?php echo $_GET[userurl];?>' target="_blank"><?php ?> <img src="images/wifi1.png" alt=""/></a>
          <?php   }else{?>
          
          <a href='/wap/index.php?m=register'   target="_blank"><?php ?> <img src="images/wifi1.png" alt=""/></a>
            <?php   }?>
          
            
            </li>
        </ul>
    </div>