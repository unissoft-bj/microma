<?php


include(dirname(dirname(__FILE__))."/global.php");

session_start();

// store session data




$con = mysql_connect($db_config['dbhost'],$db_config['dbuser'],$db_config['dbpass']);
mysql_query("SET NAMES 'GBK'");
if (!$con)
{
	die('Could not connect: ' . mysql_error());
}



mysql_select_db($db_config['dbname'], $con);
//如果cookie为空，则自动创建cookie
if($_COOKIE["username"]==""){
	//根据mac地址得到最后登录的id
	$sql = "SELECT intid,phone,userid,userrole FROM `useraccounts` WHERE mac='".$_COOKIE["mymac"]."' and stat>=100 order by stat desc limit 1;";
	//echo $sql;
	$result = mysql_query($sql);
	$userinfoId = mysql_fetch_array($result);
	$userid =  $userinfoId['intid'];
	//echo "SELECT uid,username,usertype,salt,password FROM member where uid=".$userid;
	$result2 = mysql_query("SELECT uid,username,usertype,salt,password FROM member where uid=".$userid);

	while($userinfo = mysql_fetch_array($result2))
	{
		//echo  $userinfo['username']."验证中……";
		setcookie("uid",$userinfo['uid'],time() + 86400, "/");
		setcookie("username",$userinfo['username'],time() + 86400, "/");
		setcookie("usertype",$userinfo['usertype'],time() + 86400, "/");
		setcookie("salt",$userinfo['salt'],time() + 86400, "/");
		setcookie("shell",md5($userinfo['username'].$userinfo['password'].$userinfo['salt']), time() + 86400,"/");
		//echo $userinfo['uid'];
		setcookie("userid",$userinfoId['userid'],time() + 86400, "/");
		setcookie("phone",$userinfoId['phone'],time() + 86400, "/");
		setcookie("userrole",$userinfoId['userrole'],time() + 86400, "/");
	}

	mysql_close($con);
	//sleep(3);
	//header("location: /wap/index.php");
	//die();
}


	//维护online状态
	//1.判断当前用户是否登录，如果是登录用户则
if($_COOKIE["username"]!=""){
	$con = mysql_connect($db_config['dbhost'],$db_config['dbuser'],$db_config['dbpass']);
	mysql_query("SET NAMES 'GBK'");
	if (!$con)
	{
		die('Could not connect: ' . mysql_error());
	}
	mysql_select_db($db_config['dbname'], $con);
	
	$sql = "select id from useractive where mac='".$_COOKIE['mymac']."' order by id desc limit 1";
	//echo $sql;
	$result = mysql_query($sql);
	if(mysql_num_rows($result)==0){
		//插入数据
		$sql_insert ="insert into useractive set 
						mac ='".$_COOKIE['mymac']."' ,
						userid = '".$_COOKIE['userid']."',
						userrole = '".$_COOKIE['userrole']."',
						phone = '".$_COOKIE['phone']."',
						onsite='1',
						online='1',
						pagefirst=now(),
						pagelast=now(),
						insby='".$_SERVER['PHP_SELF'].$_SERVER["QUERY_STRING"]."',
						rectime = now(), 
						pushflag = '1'"; 
		//echo $sql_insert;
		mysql_query($sql_insert);
		//die();
	}else{
		//更新数据
		$row = mysql_fetch_array($result);
		$sql_update="update useractive set 
				pushflag=if(online='1',pushflag,'8'), 
				userid='".$_COOKIE['userid']."',
				onsite='1', 
				online='1',
				pagefirst=if(pagefirst='1970-01-01 00:00:00',now(),pagefirst),
				pagelast=now(),
				updby='".$_SERVER['PHP_SELF'].$_SERVER["QUERY_STRING"]."',
				updtime=now() where id=".$row['id'];
// 		echo $sql_update;
// 		die();
		mysql_query($sql_update);
	}
	
	
	
	
	mysql_close($con);
}
$con = mysql_connect($db_config['dbhost'],$db_config['dbuser'],$db_config['dbpass']);
mysql_query("SET NAMES 'GBK'");
if (!$con)
{
	die('Could not connect: ' . mysql_error());
}
//处理积分，如果未登录，显示userpoints中的积分，否则显示useraccounts中的积分
if($_COOKIE["username"]==""){
	//mysql_select_db($db_config['dbname'], $con);
	$sql = "select points from userpoints where mac='".$_COOKIE['mymac']."'";
	$result = mysql_query($sql);
	$row = mysql_fetch_array($result);
	$_SESSION['jifen']=$row['points'];
	mysql_close($con);	
}else{
	//mysql_select_db($db_config['dbname'], $con);
	$sql = "select integral from useraccounts where intid=".$_COOKIE['uid'].";";
	$result = mysql_query($sql);
	$row = mysql_fetch_array($result);
	$_SESSION['jifen']=$row['integral'];
	mysql_close($con);	
}
if ($_SESSION['jifen']=="" ||$_SESSION['jifen']==null) {
	$_SESSION['jifen']=0;
}
//当前类
$model = $_GET['m'];
//当前行为，即类的方法
$action = $_GET['c'];
//user类型 求职者或招聘者
$usertype=$_COOKIE["usertype"];

//接受到的mac地址
$mymac = $_GET['mac'];
//将mac写入cookie
if($mymac==""){
}else{
	setcookie("mymac", $mymac, time()+360000,"/");
}




if($_GET['m'] && !ereg("^[0-9a-zA-Z\_]*$",$_GET['m'])){
	
	$_GET['m'] = 'index';
}
if($model=="")	$model="index";
if($action=="")	$action = "index";
//隐藏登录页面，当调用登录功能时，跳转到“认证页”
if($model=="login")	$model="register";
//如果类文件不存在 则调用index类的index方法
if(!is_file(MODEL_PATH.$model.'.class.php'))
{
	$controller='index';
	$action='index';
}

//包含并运行类目录下的class/common.php文件
require(MODEL_PATH.'class/common.php');

//包含并运行当前的类
require("model/".$model.'.class.php');
//当前类的类型 此框架固定写法
$conclass=$model.'_controller';
//当前类下指定的动作
$actfunc=$action.'_action';
//通过构造方法生成一个views,该构造方法继承common类
$views=new $conclass($phpyun,$db,$db_config[def],"index");

//如果当前类中不存在该方法,则抛出异常
if(!method_exists($views,$actfunc)){
	$views->DoException();
}

//否则 执行该方法
$views->$actfunc();
?>