<?php
/* *
* $Author ：PHPYUN开发团队
*
* 官网: http://www.phpyun.com
*
* 版权所有 2009-2014 宿迁鑫潮信息技术有限公司，并保留所有权利。
*
* 软件声明：未经授权前提下，不得用于商业运营、二次开发以及任何形式的再次发布。
*/

//index页面控制类
class index_controller extends common
{
	//index默认方法
	function index_action()
	{
		$this->get_moblie();
		$this->yunset("title","阿萨斯");
		
		
		if ($_GET['mac']) {
			

			include "../auth/ihost.php";
			/**
			 * 如果ihost验证成功 则跳转到首页 提示继续浏览互联网
			 *      {
			 *              有权限，将左上角链接设为来路页面
			 * }
			 *
			 * 否则 跳转到首页，提示验证手机后访问互联网{
			 *              无权限，将左上角链接设为手机验证页面
			 * }
			 *
			 * 需要传递的参数：
			 * 1.来路页面
			 * 2.是否有互联网权限
			 * 3.提示point
			 */
			
			//接受到的mac地址
			$mymac = $_GET['mac'];
			//将mac写入cookie
			
			setcookie("mymac", $mymac, time()+360000,"/");
			//setcookie("mymac", $mymac, time()+3600);		
			
			include "../auth/dbconn.php";
			$url_orign = "http://$_SERVER[HTTP_HOST]$_SERVER[REQUEST_URI]";
			
			// sql injection inspection
			include "../auth/orgchkget.php";
			
			
			
			
			
			
			
			$sql = "  select token from  authmacip where mac = '" . $_GET['mac'] .
			"'  and  ip ='" . $_GET['ip'] .
			"'  and  called ='" . $_GET['called'] .
			"'  and  userurl ='" . $_GET['userurl'] .
			"'  and TIMESTAMPDIFF(SECOND, rectime, now()) < 180 " .
			"   order by rectime desc limit 1" ;
			//echo $sql;
			$result = mysql_query($sql);
			
			if (mysql_num_rows($result)==0){
				mysql_free_result($result);
				$token = rand();
				$sql = "  insert into authmacip set mac = '" . $_GET['mac'] .
				"',  ip ='" . $_GET['ip'] .
				"',  called ='" . $_GET['called'] .
				"',  srcip ='" . $_SERVER ['HTTP_HOST'] .
				"',  procid ='" . "portal" .
				"',  userurl ='" . $_GET['userurl'] .
				"',  orgurl ='" . $url_orign .
				"',  token ='" . $token .
				"', rectime = now()" ;
				//    echo $sql;
				$result = mysql_query($sql);
				//    mysql_free_result($result);
			}
			else{
				$row = mysql_fetch_object($result);
				$token = $row->token;
				mysql_free_result($result);
			}
			
			$auth = 0;
			
			//$sql = "  select id from authmac where mac = '" . $_GET['mac'] . "'";
			$sql = "  select id from usermacs where mac = '" . $_GET['mac'] . "'";
			$result = mysql_query($sql);
			if (mysql_num_rows($result)!=0){
				$auth = 1;
			}
			
			if ($auth == 0){
				//check central authlist
				include "../auth/wsmacchk.php";
			}
			//如果authmac里没有此设备mac，跳转到注册页面，注册成功后将mac写入authmac表
			if ($auth == 0){
			
				//请点击左上角登记或签到页面签到联网 %c7%eb%b5%e3%bb%f7%d7%f3%c9%cf%bd%c7%b5%c7%bc%c7%bb%f2%c7%a9%b5%bd%d2%b3%c3%e6%c7%a9%b5%bd%c1%aa%cd%f8
				$point = "%c7%eb%b5%e3%bb%f7%d7%f3%c9%cf%bd%c7%b5%c7%bc%c7%bb%f2%c7%a9%b5%bd%d2%b3%c3%e6%c7%a9%b5%bd%c1%aa%cd%f8";
				header("location: /wap/index.php?point=".$point."&auth=".$auth."&userurl=".$_GET['userurl']);
			
			}
			else{
			
				#echo "<div id=\"MyChilli\">";
				echo "<script id=\"chillijs\" src=\"../auth/ussp.js\"></script>";
				//     #echo "</div>";
				//     #echo "<br />";
				//请点击左上角按钮继续访问互联网
				//      $point="%c7%eb%b5%e3%bb%f7%d7%f3%c9%cf%bd%c7%b0%b4%c5%a5%bc%cc%d0%f8%b7%c3%ce%ca%bb%a5%c1%aa%cd%f8";
				//      $url = "/wap/index.php?point=".$point."&auth=".$auth."&userurl=".$_GET['userurl'];
				//      echo "<font size=20>已为您接通Internet<br />Connected to the Internet";
				//      echo "<li><a href=\"" . $url . "\"> 点击此处继续您的Internet之旅</a>";
			
			}
			
			
			
			mysql_free_result($result);
		}
		
		$this->yuntpl(array('wap/index'));
	}
	
	//loginout退出 删除cookie
	function loginout_action()
	{
		SetCookie("uid","",time() -286400, "/");
		SetCookie("username","",time() - 86400, "/");
		SetCookie("salt","",time() -86400, "/");
		$this->wapheader('index.php');
	}
}
?>