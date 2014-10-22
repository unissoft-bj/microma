<?php 
require 'global.php';
require 'inc/mysql.Class.php';
require 'inc/function.inc.php';
 
?><!DOCTYPE HTML>
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
<meta name="viewport" content="width=device-width,height=device-height,inital-scale=1.0,maximum-scale=1.0,user-scalable=no;">
<title>首页</title>
<link rel="stylesheet" type="text/css" href="css/css.css">
<script type="text/javascript" src="js/jquery-1.7.1.min.js"></script>
<script type="text/javascript" src="js/iscroll.js"></script>
<script type="text/javascript">
var myScroll;

function loaded() {
myScroll = new iScroll('wrapper', {
snap: true,
momentum: false,
hScrollbar: false,
onScrollEnd: function () {
document.querySelector('#indicator > li.active').className = '';
document.querySelector('#indicator > li:nth-child(' + (this.currPageX+1) + ')').className = 'active';
}
 });
 
 
}

document.addEventListener('DOMContentLoaded', loaded, false);



</script>

  
</head>

<body>
<?php include 'top.php';?>
    
    <div class="banner">
        <div id="wrapper">
            <div id="scroller">
                <ul id="thelist">
                               
                   <li><p>会议1</p><a href="#" > <img  src="images/banner2.jpg"></a></li>
                     
                    <li><p>会议2</p><a href="#" > <img src="images/banner2.jpg"></a></li>
                     
                    <li><p>会议3</p><a href="#" > <img src="images/banner2.jpg"></a></li>
                 
                
                </ul>
            </div>
        </div>
        <div id="nav">
        <div id="prev" onclick="myScroll.scrollToPage('prev', 0,400,3);return false">&larr; prev</div>
        <ul id="indicator">
                    
        <li   class="active"  >1</li>
         
        <li   >2</li>
         
        <li   >3</li>
         
        </ul>
        <div id="next" onclick="myScroll.scrollToPage('next', 0,400,3);return false">next &rarr;</div>
        </div>
<div class="clear"></div>
</div>

	<!--<div class="nav_menu">
    	<ul class="clearfix">
            <li>
                <a class="bianjian" href="#2">便笺</a>
                <a class="taolun" href="#2">讨论</a>	
            </li>
            <li class="qd">
                <a class="qiandao" href="#2">签到</a>
            </li>
            
            <li>
                <a class="huiwu" href="#2">会务</a>
                <a class="liuyan" href="#2">留言</a>
            </li>
        
        </ul>
       
    </div>-->
 
<table class="mune_list">
    <tbody><tr>
    <td width="30%"><a href="message_liebiao.php"><p class="mune_a"><i><img src="images/bianjian.png" alt=""/></i><em>便笺</em></p></a></td>
    <td width="30%" rowspan="2"><a href="/wap/index.php?m=register"><p class="mune_c"><i></i><em>签到</em></p></a></td>
    <td width="30%"><a href="meeting_list.php"><p class="mune_d"><i><img src="images/huiwu.png" alt=""/></i><em>会务</em></p></a></td>
    </tr>
    <tr>
    <td width="30%"> <a href="vote.php"><p class="mune_b"><i><img src="images/taolun.png" alt=""/></i><em>讨论</em></p></a></td>
    <td width="30%"> <a href="discuss.php"><p class="mune_e"><i><img src="images/liuyan.png" alt=""/></i><em>留言</em></p></a></td>
    </tr>
</tbody></table>
<script>
var count = document.getElementById("thelist").getElementsByTagName("img").length;	

var count2 = document.getElementsByClassName("menuimg").length;
for(i=0;i<count;i++){
 document.getElementById("thelist").getElementsByTagName("img").item(i).style.cssText = " width:"+document.body.clientWidth+"px";

}
document.getElementById("scroller").style.cssText = " width:"+document.body.clientWidth*count+"px";

 setInterval(function(){
myScroll.scrollToPage('next', 0,400,count);
},3500 );
window.onresize = function(){ 
for(i=0;i<count;i++){
document.getElementById("thelist").getElementsByTagName("img").item(i).style.cssText = " width:"+document.body.clientWidth+"px";

}
 document.getElementById("scroller").style.cssText = " width:"+document.body.clientWidth*count+"px";
} 

$(function(){
$('.mainmenu').masonry({
  itemSelector: '.box',
  columnWidth: 276,
  gutterWidth: 40
});
})
</script>
<script type="text/javascript" src="js/jquery.masonry.min.js"></script>
<script  src="js/jquery-1.7.1.min.js" type="text/javascript"></script>
<?php include 'foot.php';?>
</body>
</html>
