<?php
@$page = $_GET['page'];
if(!function_exists('pageft')){

function pageft($totle,$displaypg=20,$shownum=0,$showtext=0,$showselect=0,$showlvtao=7,$url=''){

global $page,$firstcount,$pagenav,$_SERVER;

$GLOBALS["displaypg"]=$displaypg;


if(!$page) $page=1;

if(!$url){ $url=$_SERVER["REQUEST_URI"];}

$parse_url=parse_url($url);
$url_query=$parse_url["query"]; 
if($url_query){
$url_query=ereg_replace("(^|&)page=$page","",$url_query);

$url=str_replace($parse_url["query"],$url_query,$url);

if($url_query) $url.="&page"; else $url.="page";
}else {
$url.="?page";
}

$lastpg=ceil($totle/$displaypg); 
$page=min($lastpg,$page);
$prepg=$page-1; 
$nextpg=($page==$lastpg ? 0 : $page+1); 
$firstcount=($page-1)*$displaypg;


if ($showtext==1){
$pagenav="<span class='disabled'>".($totle?($firstcount+1):0)."-".min($firstcount+$displaypg,$totle)."/$totle ��¼</span><span class='disabled'>$page/$lastpg ҳ</span>";
}else{
$pagenav="";
}
if($lastpg<=1) return false;

if($prepg) $pagenav.="<a href='$url=1'>��ҳ</a>"; else $pagenav.='<span class="disabled">��ҳ</span>';
if($prepg) $pagenav.="<a href='$url=$prepg'>��һҳ</a>"; else $pagenav.='<span class="disabled">��һҳ</span>';
if ($shownum==1){
	$o=$showlvtao;
	$u=ceil($o/2);
	$f=$page-$u;
	if($f<0){$f=0;}
	$n=$lastpg;
	if($n<1){$n=1;}
	if($page==1){
		$pagenav.='<span class="current">1</span>';
	}else{
		$pagenav.="<a href='$url=1'>1</a>";
	}
	for($i=1;$i<=$o;$i++){
		if($n<=1){break;}
		$c=$f+$i;
		if($i==1 && $c>2){
			$pagenav.='...';
		}
		if($c==1){continue;}
		if($c==$n){break;}
		if($c==$page){
			$pagenav.='<span class="current">'.$page.'</span>';
		}else{
			$pagenav.="<a href='$url=$c'>$c</a>";
		}
		if($i==$o && $c<$n-1){
			$pagenav.='...';
		}
		if($i>$n){break;}
	}
	if($page==$n && $n!=1){
		$pagenav.='<span class="current">'.$n.'</span>';
	}else{
		$pagenav.="<a href='$url=$n'>$n</a>";
		}
}

if($nextpg) $pagenav.="<a href='$url=$nextpg'>��һҳ</a>"; else $pagenav.='<span class="disabled">��һҳ</span>';
if($nextpg) $pagenav.="<a href='$url=$lastpg'>βҳ</a>"; else $pagenav.='<span class="disabled">βҳ</span>';
if ($showselect==1){
$pagenav.="����<select name='topage' size='1' onchange='window.location=\"$url=\"+this.value'>\n";
for($i=1;$i<=$lastpg;$i++){
if($i==$page) $pagenav.="<option value='$i' selected>$i</option>\n";
else $pagenav.="<option value='$i'>$i</option>\n";
}
$pagenav.="</select>ҳ";
}
}
}
?>