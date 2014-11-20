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