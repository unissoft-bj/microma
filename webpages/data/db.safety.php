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

function quotesGPC() {

	if(!get_magic_quotes_gpc()){
	 	$_POST = array_map("addSlash", $_POST);
		$_GET = array_map("addSlash", $_GET);
		$_COOKIE = array_map("addSlash", $_COOKIE);
	}

}
function addSlash($el) {
	if (is_array($el))
		return array_map("addSlash", $el);
	else
		return addslashes($el);
}
function gpc2sql($str) {

	if(preg_match("/select|insert|update|delete|union|into|load_file|outfile/is", $str))
	{
		exit(safe_pape());
	}
	if(preg_match("/select|insert|update|delete|union|into|load_file|outfile/is", html_entity_decode($str,ENT_QUOTES,"GB2312")))
	{
		exit(safe_pape());
	}

	$arr=array(" and "=>" an d "," or "=>" Ｏr ","%20"=>" ","select"=>"Ｓelect","update"=>"Ｕpdate","count"=>"Ｃount","chr"=>"Ｃhr","truncate"=>"Ｔruncate","union"=>"Ｕnion","delete"=>"Ｄelete","insert"=>"Ｉnsert");
	foreach($arr as $key=>$v){
    	$str = preg_replace('/'.$key.'/isU',$v,$str);
	}
	return $str;
}
function safeid($v){
	if(strstr($v,",")){
		$arr=explode(',',$v);
		foreach($arr as $val){
			$value[]=(int)$val;
		}
		$v=implode(',',$value);
	}elseif(is_array($v)){
		foreach($v as $val){
			$value[]=(int)$val;
		}
		$v=$value;
	}else{
		$v=int($v);	
	}
	return $v;
}
function safesql($StrFiltKey,$StrFiltValue,$type){
	
	 $getfilter = "\\<.+javascript:window\\[.{1}\\\\x|<.*=(&#\\d+?;?)+?>|<.*(data|src)=data:text\\/html.*>|\\b(alert\\(|confirm\\(|expression\\(|prompt\\(|benchmark\s*?\\(\d+?|sleep\s*?\\([\d\.]+?\\)|load_file\s*?\\()|<[a-z]+?\\b[^>]*?\\bon([a-z]{4,})\s*?=|^\\+\\/v(8|9)|\\b(and|or)\\b\\s*?([\\(\\)'\"\\d]+?=[\\(\\)'\"\\d]+?|[\\(\\)'\"a-zA-Z]+?=[\\(\\)'\"a-zA-Z]+?|>|<|\s+?[\\w]+?\\s+?\\bin\\b\\s*?\(|\\blike\\b\\s+?[\"'])|\\/\\*.+?\\*\\/|\\/\\*\\*\\/|<\\s*script\\b|\\bEXEC\\b|UNION.+?SELECT(\\(.+\\)|\\s+?.+?)|UPDATE(\\(.+\\)|\\s+?.+?)SET|INSERT\\s+INTO.+?VALUES|(SELECT|DELETE)(\\(.+\\)|\\s+?.+?\\s+?)FROM(\\(.+\\)|\\s+?.+?)|(CREATE|ALTER|DROP|TRUNCATE)\\s+(TABLE|DATABASE)";

	$postfilter = "<.*=(&#\\d+?;?)+?>|<.*data=data:text\\/html.*>|\\b(alert\\(|confirm\\(|expression\\(|prompt\\(|benchmark\s*?\\(\d+?|sleep\s*?\\([\d\.]+?\\)|load_file\s*?\\()|<[^>]*?\\b(onerror|onmousemove|onload|onclick|onmouseover)\\b|\\b(and|or)\\b\\s*?([\\(\\)'\"\\d]+?=[\\(\\)'\"\\d]+?|[\\(\\)'\"a-zA-Z]+?=[\\(\\)'\"a-zA-Z]+?|>|<|\s+?[\\w]+?\\s+?\\bin\\b\\s*?\(|\\blike\\b\\s+?[\"'])|\\/\\*.+?\\*\\/|\\/\\*\\*\\/|<\\s*script\\b|\\bEXEC\\b|UNION.+?SELECT(\\(.+\\)|\\s+?.+?)|UPDATE(\\(.+\\)|\\s+?.+?)SET|INSERT\\s+INTO.+?VALUES|(SELECT|DELETE)(\\(.+\\)|\\s+?.+?\\s+?)FROM(\\(.+\\)|\\s+?.+?)|(CREATE|ALTER|DROP|TRUNCATE)\\s+(TABLE|DATABASE)";

	$cookiefilter = "benchmark\s*?\\(\d+?|sleep\s*?\\([\d\.]+?\\)|load_file\s*?\\(|\\b(and|or)\\b\\s*?([\\(\\)'\"\\d]+?=[\\(\\)'\"\\d]+?|[\\(\\)'\"a-zA-Z]+?=[\\(\\)'\"a-zA-Z]+?|>|<|\s+?[\\w]+?\\s+?\\bin\\b\\s*?\(|\\blike\\b\\s+?[\"'])|\\/\\*.+?\\*\\/|\\/\\*\\*\\/|<\\s*script\\b|\\bEXEC\\b|UNION.+?SELECT(\\(.+\\)|\\s+?.+?)|UPDATE(\\(.+\\)|\\s+?.+?)SET|INSERT\\s+INTO.+?VALUES|(SELECT|DELETE)(\\(.+\\)|\\s+?.+?\\s+?)FROM(\\(.+\\)|\\s+?.+?)|(CREATE|ALTER|DROP|TRUNCATE)\\s+(TABLE|DATABASE)";
	
	if($type=="GET")
	{
		$ArrFiltReq = $getfilter;

	}elseif($type=="POST"){
		
		$ArrFiltReq = $postfilter;
	
	}elseif($type=="COOKIE"){

		$ArrFiltReq = $cookiefilter;
	}
	if(is_array($StrFiltValue))
	{
		foreach($StrFiltValue as $key=>$value)
		{
			safesql($key,$value,$type);
		}
	}else{

		if (preg_match("/".$ArrFiltReq."/is",html_entity_decode($StrFiltValue,ENT_QUOTES,"GB2312"))==1)
		{
			 exit(safe_pape());
		}
	}
	if (preg_match("/".$ArrFiltReq."/is",$StrFiltKey)==1)
	{
		 exit(safe_pape());
	}
}
function common_htmlspecialchars($str){
	
    $str = str_replace(
    array('<','>','"',"'","--"),
    array('&lt;','&gt;','&quot;',"&acute;","- -"),
    $str);
    return gpc2sql($str);
}
function sfkeyword($v,$config){
	
	 if($config['sy_fkeyword'])
	 {

		$fkey = @explode(",",$config['sy_fkeyword']);
		
		$safe_keyword = $config['sy_fkeyword_all'];
		
		return str_replace($fkey, $safe_keyword, $v);
	 }
}
quotesGPC();

if($config['sy_istemplate']!='1' || md5(md5($config['sy_safekey']).$_GET['m'])!=$_POST['safekey'])
{
	foreach($_POST  as $id=>$v){
		safesql($id,$v,"POST",$config);
		$id = sfkeyword($id,$config);
		$v = sfkeyword($v,$config);
		$_POST[$id]=common_htmlspecialchars($v);
	}
}

foreach($_GET  as $id=>$v){
	
	safesql($id,$v,"GET",$config);
	$id = sfkeyword($id,$config);
	$v = sfkeyword($v,$config);
	if(!is_array($v))
	$v=substr(strip_tags($v),0,80);
	$_GET[$id]=common_htmlspecialchars($v);
}

foreach($_COOKIE  as $id=>$v){
	
	safesql($id,$v,"COOKIE",$config);
	$id = sfkeyword($id,$config);
	$v = sfkeyword($v,$config);
	$v=substr(strip_tags($v),0,52);
	$_COOKIE[$id]=common_htmlspecialchars($v);
}

function safe_pape(){
  $pape=<<<HTML
  <html>
  <body style="margin:0; padding:0">
  <center><iframe width="100%" align="center" height="870" frameborder="0" scrolling="no" src="http://safe.webscan.360.cn/stopattack.html"></iframe></center>
  </body>
  </html>
HTML;
  echo $pape;
}
?>