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
		
		if ($_GET['internet']) {
			//echo "<script id=\"chillijs\" src=\"../auth/ussp.js\"></script>";
			$this->yuntpl(array('wap/index'));
			echo "<script id=\"chillicontroller\" src=\"http://172.16.0.1:3990/www/chillijs.chi\"></script>";
			//echo "hel";			
			die("");
		}
		
		if ($_GET['mac'] ) {
			//include "../auth/ihost.php";
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
			if ($auth == 0){
			
				$point = "%c7%a9%b5%bd%b3%c9%b9%a6";
				header("location: /wap/index.php?internet=ok");
			
			}
			else{
				$point = "%c7%a9%b5%bd%b3%c9%b9%a6";
				header("location: /wap/index.php?internet=ok");
// 				
				die();
				
			
			}
			
			
			
			
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
	

	/******************************************************************
	 * 程序一：PHP截取中文字符串方法
	* 截取中文字符串时出现乱码
	****************************************************************/
	function msubstr($str, $start, $len) {
		$tmpstr = "";
		$strlen = $start + $len;
		for($i = 0; $i < $strlen; $i++) {
			if(ord(substr($str, $i, 1)) > 0xa0) {
				$tmpstr .= substr($str, $i, 2);
				$i++;
			} else
				$tmpstr .= substr($str, $i, 1);
		}
		return $tmpstr;
	}
	
	function is_ip($gonten){
		$ip = explode('.',$gonten);
		for($i=0;$i<count($ip);$i++)
		{
		if($ip[$i]>255){
		return (0);
		}
		}
		return ereg('^[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}$',$gonten);
	}
}
?>