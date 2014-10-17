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
class admin_company_controller extends common{
	function index_action()
	{
        $wheres = "a.`uid`=b.`uid` and b.usertype='2' ";
		if($_GET['hy']){
			$wheres .= " AND `hy` = '".$_GET['hy']."' ";
			$urlarr['hy']=$_GET['hy'];
		}
		if($_GET['provinceid']){
			$wheres .= " AND `provinceid` = '".$_GET['provinceid']."' ";
			$urlarr['provinceid']=$_GET['provinceid'];
		}
		if($_GET['cityid']){
			$wheres .= " AND `cityid` = '".$_GET['cityid']."' ";
			$urlarr['cityid']=$_GET['cityid'];
		}
		if($_GET['three_cityid']){
			$wheres .= " AND `three_cityid` = '".$_GET['three_cityid']."' ";
			$urlarr['three_cityid']=$_GET['three_cityid'];
		}
		if($_GET['pr']){
			$wheres .= " AND `pr` = '".$_GET['pr']."' ";
			$urlarr['pr']=$_GET['pr'];
		}
		if($_GET['mun']){
			$wheres .= " AND `mun` = '".$_GET['mun']."' ";
			$urlarr['mun']=$_GET['mun'];
		}
        if($_GET['keywords']){
			echo $wheres .= " AND a.`name` like '%".$_GET['keywords']."%' ";
			$urlarr['keywords']=$_GET['keywords'];
		}
		$where="a.`uid`=b.`uid` and b.usertype='2'";
		if($_GET['news_search'])
		{
			if($_GET['type']=='2')
			{
				$where.=" and a.`name` like '%".$_GET['keyword']."%'";
			}elseif ($_GET['type']=='3'){
				$where.=" and a.`linktel` like '%".$_GET['keyword']."%'";
			}elseif($_GET['type']=='1'){
				$where.=" and b.`username` LIKE '%".$_GET['keyword']."%'";
			}else{
				$where.=" and a.`linkman` LIKE '%".$_GET['keyword']."%'";
			}
			$urlarr['news_search']=$_GET['news_search'];
			$urlarr['keyword']=$_GET['keyword'];
			$urlarr['type']=$_GET['type'];
		}
		if ($_GET['status']=='1'){
			$where.=" and a.`rec` ='1'";
			$urlarr['status']=$_GET['status'];
		}
		if($_GET['order'])
		{
			if($_GET['t']=="time")
			{
				$where.=" order by `lastupdate` ".$_GET['order'];
			}else{
				$where.=" order by ".$_GET['t']." ".$_GET['order'];
			}
			$urlarr['order']=$_GET['order'];
			$urlarr['t']=$_GET['t'];
		}else{
			$where.=" order by `uid` desc";
		}
	   if($_GET['advanced']){
			$where = $wheres;
			$urlarr['advanced']=$_GET['advanced'];
		}
		include(LIB_PATH."page3.class.php");
		$limit=$this->config["sy_listnum"];
		$page=$_GET['page']<1?1:$_GET['page'];
		$ststrsql=($page-1)*$limit;
		$urlarr["page"]="{{page}}";
		$pageurl=$this->url("index","admin_company",$urlarr);
		$count=$this->obj->DB_select_alls("company","member",$where,"a.uid");
 		$num = count($count);
 		$page = new page($page,$limit,$num,$pageurl);
		$pagenav=$page->numPage();
		$rows=$this->obj->DB_select_alls("company","member",$where." limit $ststrsql,$limit","a.*,b.username");
		$this->yunset("pagenav",$pagenav);
		if(is_array($rows))
		{
			foreach($rows as $v)
			{
				$uid[]=$v['uid'];
			}
			$list=$this->obj->DB_select_all("company_statis","`uid` in (".@implode(",",$uid).")","`uid`,`pay`");
			foreach($rows as $k=>$v){
				foreach($list as $val){
					if($v['uid']==$val['uid']){
						$rows[$k]['pay']=$val['pay'];
					}
				}
			}
			$username=$this->obj->DB_select_all("member","`uid` in (".@implode(",",$uid).")","`username`,`uid`");
			foreach ($rows as $k=>$v){
				foreach($username as $val){
					if($v['uid']==$val['uid']){
						$rows[$k]['username']=$val['username'];
					}
				}
			}
		}
		$this->yunset("get_type", $_GET);
		$this->yunset("rows",$rows);
		$this->yuntpl(array('admin/admin_company'));
	}
	function recommend_action(){
		$nid=$this->obj->DB_update_all("company","`".$_GET['type']."`='".$_GET['rec']."'","`uid`='".$_GET['id']."'");
		echo $nid?1:0;die;
	}
	function del_action(){
		$this->check_token();
	    if($_GET['del']){
	    	$del=$_GET['del'];
	    	if($del){
	    		if(is_array($del)){
	    			$layer_type=1;
	    			$uids = @implode(",",$del);
	    			foreach($del as $k=>$v){
	    				$this->obj->delfiledir("../upload/tel/".intval($v));
	    			}
				    $company=$this->obj->DB_select_all("company","`uid` in (".$uids.") and `logo`!=''");
				    if(is_array($company)){
				    	foreach($company as $v){
				    		$this->obj->unlink_pic(".".$v['logo']);
				    		$this->obj->unlink_pic(".".$v['firmpic']);
				    	}
				    }
		    	    $cert=$this->obj->DB_select_all("company_cert","`uid` in (".$uids.") and `type`='3'");
		    	    if(is_array($cert)){
				    	foreach($cert as $v){
				    		$this->obj->unlink_pic("../".$v['check']);
				    	}
				    }
		    	    $product=$this->obj->DB_select_all("company_product","`uid` in (".$uids.")");
		    	    if(is_array($product)){
		    	    	foreach($product as $val){
		    	    		$this->obj->unlink_pic("../".$val['pic']);
		    	    	}
		    	    }
		    	    $show=$this->obj->DB_select_all("company_show","`uid` in (".$uids.")");
		    	    if(is_array($show)){
		    	    	foreach($show as $val){
		    	    		$this->obj->unlink_pic("../".$val['picurl']);
		    	    	}
		    	    }
		    	    $uhotjob=$this->obj->DB_select_all("hotjob","`uid` in (".$uids.")");
		    	    if(is_array($uhotjob)){
		    	    	foreach($uhotjob as $val){
		    	    		$this->obj->unlink_pic("../".$val['picurl']);
		    	    	}
		    	    }
		    	  	$banner=$this->obj->DB_select_all("banner","`uid` in (".$uids.")");
		    	    if(is_array($banner)){
		    	    	foreach($banner as $val)
		    	    	{
		    	    		$this->obj->unlink_pic($val['pic']);
		    	    	}
		    	    }
		    	    $friend_pic = $this->obj->DB_select_all("friend_info","`uid` in (".$uids.") and `pic`!=''");
		    		if(is_array($friend_pic))
		    		{
		    	    	foreach($friend_pic as $val)
		    	    	{
		    	    		$this->obj->unlink_pic($val['pic']);
		    	    		$this->obj->unlink_pic($val['pic_big']);
		    	    	}
		    		}
					$del_array=array("member","company","company_job","company_cert","company_news","company_order","company_product","company_show","banner","company_statis","friend_info","friend_state","question","attention","lt_job","hotjob");
					foreach($del_array as $value)
					{
						$this->obj->DB_delete_all($value,"`uid` in (".$uids.")","");
					}
		    	    $this->obj->DB_delete_all("company_pay","`com_id` in (".$uids.")"," ");
					$this->obj->DB_delete_all("atn","`uid` in (".$uids.") or `scid` in (".$uids.")","");
					$this->obj->DB_delete_all("look_resume","`com_id` in (".$uids.")","");
					$this->obj->DB_delete_all("fav_job","`com_id` in (".$uids.")","");
					$this->obj->DB_delete_all("userid_msg","`fid` in (".$uids.")","");
					$this->obj->DB_delete_all("userid_job","`com_id` in (".$uids.")","");
					$this->obj->DB_delete_all("message","`fa_uid` in (".$uids.")","");
		    	    $this->obj->DB_delete_all("friend_reply","`fid` in (".$uids.")","");
		    	    $this->obj->DB_delete_all("friend","`uid` in (".$uids.") or `nid` in (".$uids.")","");
		    	    $this->obj->DB_delete_all("friend_foot","`uid` in (".$uids.") or `fid` in (".$uids.")","");
		    	    $this->obj->DB_delete_all("friend_message","`uid`='".$del."' or `fid`='".$del."'","");
		    	    $this->obj->DB_delete_all("msg","`job_uid` in (".$uids.")","");
		    	    $this->obj->DB_delete_all("blacklist","`c_uid` in (".$uids.")","");
		    	    $this->obj->DB_delete_all("rebates","`job_uid` in (".$uids.") or `uid` in (".$uids.")"," ");
		    	    $this->obj->DB_delete_all("lt_job","`uid` in (".$uids.")"," ");
		    	    $this->obj->DB_delete_all("report","`p_uid` in ($uids) or `c_uid` in ($uids)","");
		    	}else{
		    		$layer_type=0;
					$uids=$del = intval($del);
					$uids=$del;
		    		$friend_pic = $this->obj->DB_select_once("friend_info","`uid`='".$del."' and `pic`!=''");
		    		if(is_array($friend_pic))
		    		{
		    			$this->obj->unlink_pic($friend_pic['pic']);
		    			$this->obj->unlink_pic($friend_pic['pic_big']);
		    		}
		    		$this->obj->delfiledir("../upload/tel/".$del);
				    $company=$this->obj->DB_select_once("company","`uid`='".$del."' and `logo`!=''");
				    $this->obj->unlink_pic(".".$company['logo']);
				    $this->obj->unlink_pic(".".$company['firmpic']);
		    	    $cert=$this->obj->DB_select_once("company_cert","`uid`='".$del."' and `type`='3'");
		    	    $this->obj->unlink_pic("../".$cert['check']);
		    	    $product=$this->obj->DB_select_all("company_product","`uid`='".$del."'");
		    	    if(is_array($product))
		    	    {
		    	    	foreach($product as $v)
		    	    	{
		    	    		$this->obj->unlink_pic("../".$v['pic']);
		    	    	}
		    	    }
		    	    $show=$this->obj->DB_select_all("company_show","`uid`='".$del."'");
		    	    if(is_array($show))
		    	    {
		    	    	foreach($show as $v)
		    	    	{
		    	    		$this->obj->unlink_pic("../".$v['picurl']);
		    	    	}
		    	    }
			    	$uhotjob=$this->obj->DB_select_all("hotjob","`uid`='".$del."'");
		    	    if(is_array($uhotjob))
		    	    {
		    	    	foreach($uhotjob as $val)
		    	    	{
		    	    		$this->obj->unlink_pic("../".$val['picurl']);
		    	    	}
		    	    }
		    	    $banner=$this->obj->DB_select_once("banner","`uid`='".$del."'");
					$this->obj->unlink_pic($banner['pic']);
					$del_array=array("member","company","company_job","company_cert","company_news","company_order","company_product","company_show","banner","company_statis","friend_state","question","attention","lt_job","hotjob");
					foreach($del_array as $value)
					{
						$this->obj->DB_delete_all($value,"`uid`='".$del."'","");
					}
					$this->obj->DB_delete_all("company_pay","`com_id`='".$del."'"," ");
		    	    $this->obj->DB_delete_all("atn","`uid`='".$del."' or `scid`='".$del."'","");
		    	    $this->obj->DB_delete_all("look_resume","`com_id`='".$del."'","");
		    	    $this->obj->DB_delete_all("fav_job","`com_id`='".$del."'","");
		    	    $this->obj->DB_delete_all("userid_msg","`fid`='".$del."'","");
		    	    $this->obj->DB_delete_all("userid_job","`com_id`='".$del."'","");
		    	    $this->obj->DB_delete_all("message","`fa_uid`='".$del."'","");
		    	    $this->obj->DB_delete_all("friend","`uid`='".$del."' or `nid`='".$del."'","");
		    	    $this->obj->DB_delete_all("friend_foot","`uid`='".$del."' or `fid`='".$del."'","");
		    	    $this->obj->DB_delete_all("friend_message","`uid`='".$del."' or `fid`='".$del."'","");
		    	    $this->obj->DB_delete_all("friend_reply","`fid`='".$del."'","");
		    	    $this->obj->DB_delete_all("msg","`job_uid`='".$del."'","");
		    	    $this->obj->DB_delete_all("blacklist","`c_uid`='".$del."'","");
		    	    $this->obj->DB_delete_all("rebates","`job_uid`='".$del."' or `uid` ='".$del."'"," ");
		    	    $this->obj->DB_delete_all("lt_job","`uid`='".$del."'"," ");
		    	    $this->obj->DB_delete_all("report","`p_uid`='".$del."' or `c_uid`='".$del."'");
		    	}
	    		$this->layer_msg( "��˾(ID:".$uids.")ɾ���ɹ���",9,$layer_type,$_SERVER['HTTP_REFERER']);
	    	}else{
				$this->layer_msg( "��ѡ����Ҫɾ���Ĺ�˾��",8,1);
	    	}
	    }
	}
	function changeorder_action(){
		if($_POST['uid']){
			if(!$_POST['order']){
				$_POST['order']='0';
			}
			$this->obj->DB_update_all("company","`order`='".$_POST['order']."'","`uid`='".$_POST['uid']."'");
		}
		die;
	}
}
?>