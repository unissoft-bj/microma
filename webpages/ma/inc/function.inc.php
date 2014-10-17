<?php
//echo $_SESSION[randcode]."第2次获得";
//dump($_REQUEST);
foreach($_REQUEST as $_k=>$_v){
	if( strlen($_k)>0 && preg_match('/^(cfg|GLOBALS)/i',$_k) ){
		exit('Request var not allow!');
	}
}
//echo $_SESSION[randcode]."第3次获得";
if ($_SESSION[randcode1] != 2 ){
foreach(Array('_GET','_POST','_COOKIE') as $_request){
	foreach($$_request as $_k => $_v) ${$_k} = _runmagicquotes($_v); //echo $_k."=".${$_k}."//";
}
}
//echo $_SESSION[randcode]."第4次获得";
function _runmagicquotes(&$svar){
	if(!get_magic_quotes_gpc()){
		if( is_array($svar) ){
			foreach($svar as $_k => $_v) $svar[$_k] = _runmagicquotes($_v);
		}else{
			//echo $svar;
			$svar = addslashes($svar);
		}
	}
	return $svar;
}
 
function msg($msg,$url="",$s=3)
{	$htmlhead  = "<html>\r\n<head>\r\n<title>提示信息_{$GLOBALS['cfg_web_charset']}</title>\r\n<meta http-equiv=\"Content-Type\" content=\"text/html; charset={$GLOBALS['cfg_web_charset']}\" />\r\n";
	$htmlhead .= "<base target='_self'/>\r\n<style>";
	$htmlhead .= "*{font-size:12px;color:#2B61BA;}\r\n";
	$htmlhead .= "body{font-family:\"微软雅黑\",\"宋体\", Verdana, Arial, Helvetica, sans-serif;background:#FFFFFF;margin:0;}\r\n";
	$htmlhead .= "a:link,a:visited,a:active {color:#ABBBD6;text-decoration:none;}\r\n";
	$htmlhead .= ".msg{width:400px;text-align:left;background:#FFFFFF url('{$GLOBALS['cfg_siteurl']}images/msgbg.gif') repeat-x;margin:auto;}\r\n";
    $htmlhead .= ".head{letter-spacing:2px;line-height:29px;height:26px;overflow:hidden;font-weight:bold;}\r\n";
    $htmlhead .= ".content{padding:10px 20px 5px 20px;line-height:200%;word-break:break-all;border:#7998B7 1px solid;border-top:none;}\r\n";
    $htmlhead .= ".ml{color:#FFFFFF;background:url('{$GLOBALS['cfg_siteurl']}images/msg.gif') no-repeat 0 0;padding-left:10px;}\r\n";
    $htmlhead .= ".mr{float:right;background:url('{$GLOBALS['cfg_siteurl']}images/msg.gif') no-repeat 0 -34px;width:4px;font-size:1px;}\r\n";
    $htmlhead .= "</style></head>\r\n<body leftmargin='0' topmargin='0'><br/><br/><br/><br/><br/><br/>".(isset($GLOBALS['ucsynlogin']) ? $GLOBALS['ucsynlogin'] : '')."\r\n<center>\r\n";
	$htmlfoot  = "</center>\r\n</body>\r\n</html>\r\n";
	
 
	
	$str .= "  <div id=\"msg\" class=\"msg\">\n";
	$str .= "<div class='head'><div class='mr'> </div><div class='ml'>提示信息！</div></div>\r\n";
	$str .= "    <div class=\"content\">$msg</div>\n";
	if($url==""){
		$str .= '    <script language=javascript>setTimeout("history.go(-1)",'.($s*1000).');</script>';
		$str .= "    <p><a href=\"javascript:history.go(-1);\">{$s}秒后自动跳转，如果您的浏览器没有自动跳转,请点击这里</a></p>\n";
	}else{
		$str .= "    <meta http-equiv=\"refresh\" content=\"$s;url=$url\">\n";
		$str .= "    <p><a href=\"$url\">{$s}秒后自动跳转，如果您的浏览器没有自动跳转,请点击这里</a></p>\n";
	}
	$str .= "  </div>\n";
	exit($htmlhead.$str.$htmlfoot );

}


/*打印友好的数组形式*/
function dump($array){
	echo "<pre>";
	print_r($array);
	echo "<pre>";
}

//中文截取
function cut_str($string, $sublen, $start = 0, $code = 'UTF-8')
{
    if($code == 'UTF-8')
    {
        $pa = "/[\x01-\x7f]|[\xc2-\xdf][\x80-\xbf]|\xe0[\xa0-\xbf][\x80-\xbf]|[\xe1-\xef][\x80-\xbf][\x80-\xbf]|\xf0[\x90-\xbf][\x80-\xbf][\x80-\xbf]|[\xf1-\xf7][\x80-\xbf][\x80-\xbf][\x80-\xbf]/";
        preg_match_all($pa, $string, $t_string);

        if(count($t_string[0]) - $start > $sublen) return join('', array_slice($t_string[0], $start, $sublen))."...";
        return join('', array_slice($t_string[0], $start, $sublen));
    }
    else
    {
        $start = $start*2;
        $sublen = $sublen*2;
        $strlen = strlen($string);
        $tmpstr = '';

        for($i=0; $i< $strlen; $i++)
        {
            if($i>=$start && $i< ($start+$sublen))
            {
                if(ord(substr($string, $i, 1))>129)
                {
                    $tmpstr.= substr($string, $i, 2);
                }
                else
                {
                    $tmpstr.= substr($string, $i, 1);
                }
            }
            if(ord(substr($string, $i, 1))>129) $i++;
        }
        if(strlen($tmpstr)< $strlen ) $tmpstr.= "...";
        return $tmpstr;
    }
}


function isdate($str,$format="Y-m-d"){

    $unixTime  = strtotime($str);
	
    $checkDate = date($format,$unixTime);
	
    if($checkDate==$str){
	
        return true;
		
    }else{
	
        return false;
		
	}
}

 
function page($page,$total,$phpfile,$pagesize=3,$pagelen=3,$ishtml=0){
    $pagecode = '';
    $page = intval($page);
    $total = intval($total);
    if(!$total) return array();
    $pages = ceil($total/$pagesize);
    if($page<1) $page = 1;
    if($page>$pages) $page = $pages;
    $offset = $pagesize*($page-1);
    $init = 1;
    $max = $pages;
    $pagelen = ($pagelen%2)?$pagelen:$pagelen+1;
    $pageoffset = ($pagelen-1)/2;
    $pagecode='<div class="page">';
    $pagecode.="<span>显示{$total}条</span>";
    if($page!=1){
        if($ishtml==0){
            $pagecode.="<a href=\"".joinchar($phpfile)."page=1\">首页</a>";
            $pagecode.="<a href=\"".joinchar($phpfile)."page=".($page-1)."\">上一页</a>";
        }else{
            $pagecode.="<a href=\"".str_replace("Pnum",1,$phpfile)."\">首页</a>";
            $pagecode.="<a href=\"".str_replace("Pnum",$page-1,$phpfile)."\">上一页</a>";
        }
    }
    if($pages>$pagelen){
        if($page<=$pageoffset){
            $init=1;
            $max = $pagelen;
        }else{
            if($page+$pageoffset>=$pages+1){
                $init = $pages-$pagelen+1;
            }else{
                $init = $page-$pageoffset;
                $max = $page+$pageoffset;
            }
        }
    }
    for($i=$init;$i<=$max;$i++){
        if($i==$page){
            $pagecode.='<span>'.$i.'</span>';
        }else{
            if($ishtml==0){
                $pagecode.="<a href=\"".joinchar($phpfile)."page={$i}\">$i</a>";
            }else{
                $pagecode.="<a href=\"".str_replace("Pnum",$i,$phpfile)."\">$i</a>";
            }
        }
    }
    if($page!=$pages){
        if($ishtml==0){
            $pagecode.="<a href=\"".joinchar($phpfile)."page=".($page+1)."\">下一页</a>";
            $pagecode.="<a href=\"".joinchar($phpfile)."page={$pages}\">尾页</a>";
        }else{
            $pagecode.="<a href=\"".str_replace("Pnum",$page+1,$phpfile)."\">下一页</a>";
            $pagecode.="<a href=\"".str_replace("Pnum",$pages,$phpfile)."\">尾页</a>";
        }
    }
    $pagecode.="<span>页次：$page/{$pages}</span>";
    $pagecode.='</div>';
    return array('pagecode'=>$pagecode,'sqllimit'=>' limit '.$offset.','.$pagesize);
}

 
//获得当前的脚本网址
function GetCurUrl()
{
	if(!empty($_SERVER["REQUEST_URI"]))
	{
		$scriptName = $_SERVER["REQUEST_URI"];
		$nowurl = $scriptName;
	}
	else
	{
		$scriptName = $_SERVER["PHP_SELF"];
		if(empty($_SERVER["QUERY_STRING"])) {
			$nowurl = $scriptName;
		}
		else {
			$nowurl = $scriptName."?".$_SERVER["QUERY_STRING"];
		}
	}
	return $nowurl;
}
//获取真实客户端IP地址
function GetIP()
{
	if (isset($_SERVER)) {
		if (isset($_SERVER['HTTP_X_FORWARDED_FOR'])) {
			$realip = $_SERVER['HTTP_X_FORWARDED_FOR'];
		} elseif (isset($_SERVER['HTTP_CLIENT_IP'])) {
			$realip = $_SERVER['HTTP_CLIENT_IP'];
		} else {
			$realip = $_SERVER['REMOTE_ADDR'];
		}
	} else {
		if (getenv("HTTP_X_FORWARDED_FOR")) {
			$realip = getenv( "HTTP_X_FORWARDED_FOR");
		} elseif (getenv("HTTP_CLIENT_IP")) {
			$realip = getenv("HTTP_CLIENT_IP");
		} else {
			$realip = getenv("REMOTE_ADDR");
		}
	}
	return $realip;
}

//格式化页面地址
function joinchar($strUrl){
    if(!$strUrl) return '';
    if(stripos($strUrl,'?')<strlen($strUrl)){
        if(stripos($strUrl,'?')>0||substr($strUrl,0,1)=='?'){
            if(stripos($strUrl,'&')<strlen($strUrl)){
                return $strUrl."&";
            }else{
                return $strUrl;
            }
        }else{
            return $strUrl."?";
        }
    }else{
        return $strUrl;
    }
} 

//获取当前登陆用户IP
function get_ip(){
	if ($_SERVER['REMOTE_ADDR']){
		$ip = $_SERVER['REMOTE_ADDR'];
	}elseif (getenv("REMOTE_ADDR")){
		$ip = getenv("REMOTE_ADDR");
	} elseif (getenv("HTTP_CLIENT_IP")){
		$ip = getenv("HTTP_CLIENT_IP");
	} else {
		$ip = "未知";
	}
return $ip;
}
 
 function dtime($time = 0, $type = 6) {
	if(!$time) {global $dy_time; $time = $dy_time;}
	$types = array('Y-m-d', 'Y', 'm-d', 'Y-m-d', 'm-d H:i', 'Y-m-d H:i', 'Y-m-d H:i:s', 'md', 'YmdHis');
	if(isset($types[$type])) $type = $types[$type];
	return date($type, $time);
}

function _setcookie($var, $value = '', $time = 0) {
    global $cfg, $dy_time;
	$time = $time > 0 ? $dy_time+$time : (empty($value) ? $dy_time - 3600 : 0);
	$port = $_SERVER['SERVER_PORT'] == 443 ? 1 : 0;
	$var = $cfg['cookie_pre'].$var;
	return setcookie($var, $value, $time, $cfg['cookie_path'], $cfg['cookie_domain'], $port);
}
function _getcookie($var) {
	global $cfg;
	$var = $cfg['cookie_pre'].$var;
	return isset($_COOKIE[$var]) ? $_COOKIE[$var] : '';
}
function _overcookie($ckey){
	setcookie($ckey,"",time()-1);
}

function dycheck($n){
	//echo $n;
	if(!aLevel($n)){
		showmsg("对不起，你没有权限执行此操作！<br/><br/><a href='javascript:history.go(-1);'>点击此返回上一页&gt;&gt;</a>",'javascript:;');
		exit();
	}else
	{
		return ture;
	 }
}


function aLevel($sValue=''){
	//echo _getcookie('admin_flag');
    if($sValue!=''){
    	
        $pos = stripos(","._getcookie('admin_flag').",", ",$sValue,");
       
        if($pos !== false && $pos == 0){
            return true;
        }elseif($pos>0 || _getcookie('admin_type')=="manage"){
        	 //echo $pos."xx";
        //exit;
            return true;
        }else{
            return false;
        }
    }else{
       return false; 
    }
}


//时间比较函数，返回两个日期相差几秒、几分钟、几小时或几天 
function datediff($date1,$date2,$unit="") {
    switch($unit){
        case 's':$dividend = 1;break;
        case 'i':$dividend = 60;break;
        case 'h':$dividend = 3600;break;
        case 'd':$dividend = 86400;break; 
        default:$dividend = 86400;
    } 
    $time1 = strtotime($date1); 
    $time2 = strtotime($date2); 
    if ($time1 && $time2) 
    return (float)($time1 - $time2) / $dividend; 
    return false;
}
function replace_strbox($str){
    if($str=="") return '';
    $str=stripslashes($str);
    $str = strip_tags($str);
    $str = str_replace("\r\n","<br>",$str);
    $str = str_replace("\r","<br>",$str);
    $str = str_replace("\n","<br>",$str);
    $str = str_replace(" ","&nbsp;",$str);
    $str = str_replace("'","’",$str);
    $str = addslashes($str);
    return $str;
}
function change_strbox($str){
    if($str=="") $str="&nbsp;";
    $str = str_replace("<br>","\r\n",$str);
    return $str;
}
//(去HTML代码)
function cleartags($msg){
    if(!$msg) return '';
    $msg=stripslashes($msg);
    $msg=strip_tags($msg);
    return trim(addslashes($msg));
}
//清除HTML代码、空格、回车换行符
function deletehtml($str){
    $str = trim($str); 
    $str = strip_tags($str,""); 
    $str = ereg_replace("\t","",$str); 
    $str = ereg_replace("\r\n","",$str); 
    $str = ereg_replace("\r","",$str); 
    $str = ereg_replace("\n","",$str); 
    $str = ereg_replace(" "," ",$str); 
    return trim($str); 
}
//标题颜色处理(加色截取长度)
function appendcolor($msg,$num=20){
    if(!$msg) return '';
    if(!is_numeric($num)) $num=20;
    $msgstr=strip_tags($msg,"");
    $msgstrt=substr($msgstr,0,$num);
    $msg=str_replace($msgstr,$msgstrt,$msg);
    return $msg;
}
//邮箱格式检查
function checkemail($email){
	return eregi("^[0-9a-z][a-z0-9\._-]{1,}@[a-z0-9-]{1,}[a-z0-9]\.[a-z\.]{1,}[a-z]$", $email);
}
function checkgbk($string) {
	return preg_match("/^([\s\S]*?)([\x81-\xfe][\x40-\xfe])([\s\S]*?)/", $string);
}
//检查是否外部提交数据
function chkpost(){
    $Server_v1=strtolower($_SERVER["HTTP_REFERER"]);
    $Server_v2=strtolower($_SERVER["SERVER_NAME"]);
    if(substr($Server_v1,7,strlen($Server_v2))!=$Server_v2){
        return false;
    }else{
        return true;
    }
}

function chang_utf8($content)
{
	//  将一些字符转化成utf8格式
	$encoding = mb_detect_encoding($content, array('ASCII','UTF-8','GB2312','GBK','BIG5'));
	return  mb_convert_encoding($content, 'utf-8', $encoding);
}


function chang_gb2312($content)
{
	//  将一些字符转化成gb2312格式
	$encoding = mb_detect_encoding($content, array('ASCII','UTF-8','GB2312','GBK','BIG5'));
	return  mb_convert_encoding($content, 'utf-8', $encoding);
}
 
function _error($content="",$title="",$arr="",$arr1="-10")
{
	$htmlhead  = "<html>\r\n<head>\r\n";
 	$htmlhead .= "<title>提示信息_{$GLOBALS['cfg_webname']}</title>\r\n";
	$htmlhead .= "<meta http-equiv=\"Content-Type\" content=\"text/html; charset={$GLOBALS['cfg_web_charset']}\" />\r\n";
    $htmlhead .= " <meta name=\"viewport\" content=\"width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0\">\r\n";
	$htmlhead .= "<link href=\"{$GLOBALS['cfg_siteurl']}portal/css/css1.css\" type=\"text/css\" rel=\"stylesheet\">\r\n";
	$htmlhead .= "</head>\r\n<body>\r\n";
  	 $htmlfoot ="<div class=\"back\"> \r\n";
	//$htmlfoot .=" <div class=\"ftop\"><a href=\"#top\">回到顶部</a> | <a  href=\"login.php\">登录</a> | <a href=\"reg.php\">注册</a> | <a href=\"prolist.php\">返回首页</a></div>\r\n";
	  $htmlfoot .="  <a href=\"#top\"> </a>  \r\n";
 	 $htmlfoot .="   Copyright©2014</div>\r\n";
  	 $htmlfoot .="</body></html>\r\n";
 	 $t1="<div class=\"clearfix header_tishi\">\r\n<h2>";
	
	 $t1.=empty($title)?"提示信息!":$title;
	 $t1.=" </h2> </div>\r\n";
 	 $t1.="<div class=\"tishi\">\r\n<p>";
	 $t1.=empty($content)?"操作失败，请重试!":$content;
	 $t1.="</p>\r\n</div>\r\n";
	 
	 $t1.="<div class=\"tishi\">\r\n<b>您可以用进行以下操作：</b>\r\n<ul>\r\n";
  	
	if (empty($arr)) {
		 
	}else{
		$str = explode("||",$arr);
		// dump($str);
		foreach ($str as $k=>$v)
		{
			$m = explode('=>',$v);
			$t1.="<li><a href='";
			if (! strstr($m[1], "http")) {
				$t1.=$GLOBALS['cfg_siteurl'];
			}
		
			$t1.=$m[1];
			$t1.="'>";
			$t1.=$m[0];
			$t1.="</a></li>\r\n";
		}
	}
	if (strstr($arr1, "-1")) {
		$t1.="<li><a href=\"javascript:history.go(-1);\">返回上一页</a>";
	}
	if (strstr($arr1, "0")) {
		$t1.="<li><a href=\"{$GLOBALS['cfg_siteurl']}portal/product_list.php\">返回首页</a>";
	}
	
	
  	
	$t1.="</ul></div>";
	echo $htmlhead;
	echo $t1;
	//require_once 'foot.php';
	echo $htmlfoot;
	exit;
	//exit($htmlhead.$t1;);
}
 

function _myposturl($posturl="",$poststr="")
{
	$ch = curl_init();
	curl_setopt($ch, CURLOPT_URL, $posturl);//设置链接
	curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);//设置是否返回信息
	//curl_setopt($ch, CURLOPT_HTTPHEADER, $header);//设置HTTP头
	curl_setopt($ch, CURLOPT_POST, 1);//设置为POST方式
	curl_setopt($ch, CURLOPT_POSTFIELDS, $poststr);//POST数据
	$res = curl_exec($ch);
	//echo $posturl;
	curl_close($ch);
	return $res;
}
function _mygeturl($posturl="")
{
	$ch = curl_init();
	curl_setopt($ch, CURLOPT_URL, $posturl);//设置链接
	curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);//设置是否返回信息
	//curl_setopt($ch, CURLOPT_HTTPHEADER, $header);//设置HTTP头
	//curl_setopt($ch, CURLOPT_POST, 1);//设置为POST方式
	//curl_setopt($ch, CURLOPT_POSTFIELDS, $poststr);//POST数据
	$res = curl_exec($ch);
	curl_close($ch);
	return $res;
}

function _mygeturlhttps($getturl="")
{
	$ch = curl_init();
	curl_setopt($ch, CURLOPT_URL, $getturl);//设置链接
	curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);//设置是否返回信息
	//curl_setopt($ch, CURLOPT_HTTPHEADER, $header);//设置HTTP头
	curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, FALSE);	// https请求 不验证证书和hosts
	curl_setopt($ch, CURLOPT_SSL_VERIFYHOST, FALSE);
	curl_setopt($ch, CURLOPT_TIMEOUT, 15);
	$res = curl_exec($ch);
	//echo $posturl;
	//echo $res;
	curl_close($ch);
	return $res;
}
function _myposturlhttps($posturl="",$poststr="")
{
	$ch = curl_init();
	curl_setopt($ch, CURLOPT_URL, $posturl);//设置链接
	curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);//设置是否返回信息
	//curl_setopt($ch, CURLOPT_HTTPHEADER, $header);//设置HTTP头
	curl_setopt($ch, CURLOPT_POST, 1);//设置为POST方式
	curl_setopt($ch, CURLOPT_POSTFIELDS, $poststr);//POST数据
	curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, FALSE);	// https请求 不验证证书和hosts
	curl_setopt($ch, CURLOPT_SSL_VERIFYHOST, FALSE);
	curl_setopt($ch, CURLOPT_TIMEOUT, 15);
	$res = curl_exec($ch);
	//echo $posturl;
	curl_close($ch);
	return $res;
}
 
/**************************************************************
 *
*  使用特定function对数组中所有元素做处理
*  @param  string  &$array     要处理的字符串
*  @param  string  $function   要执行的函数
*  @return boolean $apply_to_keys_also     是否也应用到key上
*  @access public
*
*************************************************************/
function arrayRecursive(&$array, $function, $apply_to_keys_also = false)
{
	static $recursive_counter = 0;
	if (++$recursive_counter > 1000) {
		die('possible deep recursion attack');
	}
	foreach ($array as $key => $value) {
		if (is_array($value)) {
			arrayRecursive($array[$key], $function, $apply_to_keys_also);
		} else {
			$array[$key] = $function($value);
		}
			
		if ($apply_to_keys_also && is_string($key)) {
			$new_key = $function($key);
			if ($new_key != $key) {
				$array[$new_key] = $array[$key];
				unset($array[$key]);
			}
		}
	}
	$recursive_counter--;
}

/**************************************************************
 *
*  将数组转换为JSON字符串（兼容中文）
*  @param  array   $array      要转换的数组
*  @return string      转换得到的json字符串
*  @access public
*
*************************************************************/
function _json($array) {
	arrayRecursive($array, 'urlencode', true);
	$json = json_encode($array);
	return urldecode($json);
}
 
 
?>