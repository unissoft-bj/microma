<?php
/* *
* $Author ��PHPYUN�����Ŷ�
*
* ����: http://www.phpyun.com
*
* ��Ȩ���� 2009-2014 ��Ǩ�γ���Ϣ�������޹�˾������������Ȩ����
*
* ���������δ����Ȩǰ���£�����������ҵ��Ӫ�����ο����Լ��κ���ʽ���ٴη�����
*/

function getComJob($params){
	global $views;
	global $phpyun,$config;
	$limit=(int)$params['limit'];
	$limit=$limit?$limit:10;
	$order=$order?$order:"id desc";
	$where=$where?$where:1;
	if($params['status']==""){
		$where.=" and `state`='1'";
	}else{
		$where.=" and `state`='".$params['status']."'";
	}
	$where.=" and `uid`='".$_GET['id']."'";
	$rows=$views->obj->DB_select_all("company_job",$where." and `r_status`<>'2' and `status`<>'2' order by $order limit $limit");
	$phpyun->_tpl_vars["job"]=$rows;

	return;
}


function getComJobPage($params){
	global $views;
	global $phpyun,$config;

	$limit=(int)$limit;
	$limit=$limit?$limit:10;
	$order=$order?$order:"id desc";
	$where=$where?$where:1;
	$where.=" and `r_status`<>'2' and `status`<>'1'";
	$time=time();
	$where.=" and `sdate`<'$time' and `edate`>'$time'";
	if($params['status']==""){
		$where.=" and `state`='1'";
	}else{
		$where.=" and `state`='".$params['status']."'";
	}
	$where.=" and `uid`='".$_GET['id']."'";
	if($_GET['m']==""){
		$_GET['m']='index';
	}

	$pageurl=$views->curl(array("url"=>"id:".$_GET['id'].",tp:".$_GET['tp'].",page:{{page}}"));
	$rows = $views->get_page("company_job",$where." order by ".$order,$pageurl,$params['limit']);
	include(PLUS_PATH."city.cache.php");
	include(PLUS_PATH."com.cache.php");
	if(is_array($rows)){
		foreach($rows as $k=>$v){
			$rows[$k]['province']=$city_name[$v['provinceid']];
			$rows[$k]['city']=$city_name[$v['cityid']];
			$rows[$k]['nums']=$comclass_name[$v['number']];
		}
	}
	$phpyun->_tpl_vars["jobpage"]=$rows;
	return;
}

function getComShow($params){
	global $views;
	global $phpyun;
	$limit=(int)$params['limit'];
	$limit=$limit?$limit:10;
	$order=$order?$order:"id desc";
	$where=$where?$where:1;
	$where.=" and `uid`='".$_GET['id']."'";
	$rows=$views->obj->DB_select_all("company_show",$where." order by $order limit $limit");
	$phpyun->_tpl_vars["show"]=$rows;
	return;
}

function getComShowPage($params){
	global $views;
	global $phpyun,$config;
	$limit=(int)$limit;
	$limit=$limit?$limit:10;
	$order=$order?$order:"id desc";
	$where=$where?$where:1;
	$where.=" and `uid`='".$_GET['id']."'";
	$pageurl=$views->curl(array("url"=>"id:".$_GET['id'].",tp:".$_GET['tp'].",page:{{page}}"));
	$rows = $views->get_page("company_show",$where." order by ".$order,$pageurl,$limit);
	$phpyun->_tpl_vars["showpage"]=$rows;
	$phpyun->_tpl_vars["jobpage"]=$rows;
	return;
}

function getComNewsPage($params){
	global $views;
	global $phpyun,$config;
	$limit=(int)$limit;
	$limit=$limit?$limit:10;
	$order=$order?$order:"id desc";
	$where=$where?$where:1;
	$status=$params['status'];
	if($status!=2){
		$where.=!empty($status)?" and `status`='".$status."'":" and `status`='1'";
	}
	$where.=" and `uid`='".$_GET['id']."'";
	$pageurl=$views->curl(array("url"=>"id:".$_GET['id'].",tp:".$_GET['tp'].",page:{{page}}"));
	$rows = $views->get_page("company_news",$where." order by ".$order,$pageurl,$limit);
	$phpyun->_tpl_vars["newspage"]=$rows;
	return;
}

function getComProductPage($params){
	global $views;
	global $phpyun,$config;
	$limit=(int)$limit;
	$limit=$limit?$limit:10;
	$order=$order?$order:"id desc";
	$where=$where?$where:1;
	$status=$params['status'];
	if($status!=2){
		$where.=!empty($status)?" and `status`='".$status."'":" and `status`='1'";
	}
	$where.=" and `uid`='".$_GET['id']."'";
	$pageurl=$views->curl(array("url"=>"id:".$_GET['id'].",tp:".$_GET['tp'].",page:{{page}}"));
	$rows = $views->get_page("company_product",$where." order by ".$order,$pageurl,$limit);
	$phpyun->_tpl_vars["productpage"]=$rows;
	return;
}

function getComNews($params){
	global $views;
	global $phpyun;
	$limit=(int)$params['limit'];
	$limit=$limit?$limit:10;
	$order=$order?$order:"id desc";
	$where=$where?$where:1;
	$status=$params['status'];
	if($status!=2){
		$where.=!empty($status)?" and `status`='".$status."'":" and `status`='1'";
	}
	$where.=" and `uid`='".$_GET['id']."'";
	$rows=$views->obj->DB_select_all("company_job",$where." and `r_status`<>'2' order by $order limit $limit");
	$phpyun->_tpl_vars["news"]=$rows;
	return;
}

function getComProduct($params){
	global $views,$phpyun,$config;
	$limit=(int)$params['limit'];
	$limit=$limit?$limit:10;
	$order=$order?$order:"id desc";
	$where=$where?$where:1;
	$status=$params['status'];
	if($status!=2){
		$where.=!empty($status)?" and `status`='".$status."'":" and `status`='1'";
	}
	$where.=" and `uid`='".$_GET['id']."'";
	$rows=$views->obj->DB_select_all("company_job",$where." and `r_status`<>'2' order by $order limit $limit");
	$phpyun->_tpl_vars["product"]=$rows;
	return;
}

function getComApi($params){
	global $views,$phpyun,$config;
	$type=$params['type'];
	if($_GET['id'])
	{
		$time = time();
		if($type=="show")
		{
			$field = "qqshow";$field2 = "sinashow";$stype = "2";$stype2 = "5";
		}elseif($type=="comment")
		{
			$field = "qqcomment";$field2 = "sinacomment";$stype = "3";$stype2 = "6";
		}
		$shareinfo = $views->obj->DB_select_once("company_statis","`uid`='$id'","$field,$field2");
		if($shareinfo[$field]>$time)
		{
			$qqshowapi = $views->obj->DB_select_once("iweb_api","`uid`='$id' AND `type`='$stype' AND `status`='1'");
			$qqapi =str_replace(array("&amp;",'&lt;','&gt;','&quot;','&acute;'),array('&','<','>','"','\''),$qqshowapi['api']);
		}
		if($shareinfo[$field2]>$time)
		{
			$sinashowapi = $views->obj->DB_select_once("iweb_api","`uid`='$id' AND `type`='$stype2' AND `status`='1'");
			$sinaapi =str_replace(array("&amp;",'&lt;','&gt;','&quot;','&acute;'),array('&','<','>','"','\''),$sinashowapi['api']);
		}
		$qqapi = $qqapi?$qqapi:"���ź�������ҵ��δ��ͨ��Ѷ΢�����ܣ�";
		$sinaapi = $sinaapi?$sinaapi:"���ź�������ҵ��δ��ͨ����΢�����ܣ�";
		$phpyun->_tpl_vars["qqapi"]=$qqapi;
		$phpyun->_tpl_vars["sinaapi"]=$sinaapi;
	}
	return;
}
?>