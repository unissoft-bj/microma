<?php 
require_once('../global.php');
require_once('inc/mysql.class.php');
require_once('inc/function.inc.php');
$title="用户登录" ;
if ($_POST['b']=="登录")
{
	$m_tel=trim($p_login);
	$p_pwd=md5(trim($p_pwd));
	if($m_tel=="admin"){
		$pass=md5("zeal123");
		if($p_pwd==$pass){
			_setcookie("cookia_a_id",$rs['a_id'],3600*24);
			_setcookie("cookia_a_user",$rs['a_user'],3600*24);
			_setcookie("cookia_a_flag",1,3600*24);
			msg("恭喜您登录成功！","index.php","2");
		}else{
			msg("登录失败！","","2");
		}
	}else{
		msg("该用户不存在","","2");
	}
	/*$sql="select * from admin where a_user='".$p_login."'";
	$rs=$db->r($sql);
 	if ($db->rc()==0) {
 		msg("该用户不存在","","2");
 	}
	//echo $p_pwd;
	if ($rs['a_pass']==$p_pwd){
		//$sql="update partner set p_loginnum=p_loginnum+1,p_logindate=now() where p_id=".$rs['p_id'];
		//$db->q($sql);
		_setcookie("cookia_a_id",$rs['a_id'],3600*24);	
		_setcookie("cookia_a_user",$rs['a_user'],3600*24);
		_setcookie("cookia_a_flag",1,3600*24);
		msg("恭喜您登录成功！",$cfg['siteurl']."admin/index.php","2");
		//确保重定向后，后续代码不会被执行
	}else {
		msg("登录失败！","","2");
	}*/
}
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
	<meta http-equiv="content-type" content="text/html; charset=UTF-8">
	<title><?php echo $cfg_webname;?> - 管理后台</title>
	<meta http-equiv="X-UA-Compatible" content="IE=EmulateIE7">
	<link rel="shortcut icon" href="http://localhost/tuan/static/icon/favicon.ico">
	<link rel="stylesheet" href="../css/index.css" type="text/css" media="screen" charset="utf-8">
	</head>
<body class="newbie">
<div id="pagemasker"></div><div id="dialog"></div>
<!--一级导航--> 
 <?php require_once('admin/heard1.php');?>
<!--一级导航结束--> 

<div id="bdw" class="bdw">
<div id="bd" class="cf">
<div id="login">
    <div id="content" class="login-box">
        <div class="box">
            <div class="box-top"></div>
            <div class="box-content">
                <div class="head"><h2>管理员登录</h2></div>
                <div class="sect">
                    <form id="login-user-form" method="post" action="login.php" class="validator">
                        <div class="field email">
                            <label for="login-email-address">用户名：</label>
                            <input type="text" size="30" name="p_login" id="login-email-address" class="f-input" value="" require="true" datatype="require|limit" min="2" />
                        </div>
                        <div class="field password">
                            <label for="login-password">密码</label>
                            <input type="password" size="30" name="p_pwd" id="login-password" class="f-input" require="true" datatype="require" />
                            <span class="lostpassword"></span> 
                        </div>
                        <div class="act">
                            <input type="submit" value="登录" name="b" id="login-submit" class="formbutton"/>
                        </div>
                    </form>
                       <div class="alifast">
                                              					                                                 </div>
                </div>
            </div>
            <div class="box-bottom"></div>
        </div>
    </div>
    </div> <!-- bd end -->
</div> <!-- bdw end -->
<div id="ftw">
	<?php require_once('admin/foot.php');?>
</div>
</div>
 </body></html>