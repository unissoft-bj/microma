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
class navigation_controller extends common
{
	function index_action(){
 		if($_GET["news_search"]){
			if ($_GET['type']!=""){
				$where.="`nid`='".$_GET['type']."'";
				$urlarr["type"]=$_GET["type"];
			}else{
				$where.=1;
			}
			if ($_GET['s_news_id']){
				$where.=" and `name` like '%".$_GET["s_news_id"]."%'";
				$urlarr["s_news_id"]=$_GET["s_news_id"];
			}
			$urlarr["news_search"]=$_GET["news_search"];
		}else{
			$where=1;
		}

		$where.=" order by sort asc";
		$urlarr["page"]="{{page}}";
		$pageurl=$this->url("index","".$_GET["m"]."",$urlarr);
		$nav=$this->get_page("navigation",$where,$pageurl,$this->config["sy_listnum"]);

		if(is_array($nav)){
			foreach($nav as $v){
				$navclassid[]=$v["nid"];
			}
		}
		$nav_type=$this->obj->DB_select_all("navigation_type","id in (".@implode(",",$navclassid).")");
		if(is_array($nav)){
			foreach($nav_type as $key=>$value){
				foreach($nav as $k=>$v){
					if($value["id"]==$v["nid"]){
						$nav[$k]["typename"]=$value["typename"];
					}
				}
			}
		}
		$navinfo=$this->obj->DB_select_all("navigation_type");
		$this->yunset("navinfo",$navinfo);
		$this->yunset("get_type", $_GET);
		$this->yunset("nav",$nav);
		$this->yuntpl(array('admin/admin_navigation_list'));
	}

 	function add_action(){
 		$type=$this->obj->DB_select_all("navigation_type");
	    $this->yunset("type",$type);
 		if($_GET["id"]){
			$group = $this->obj->DB_select_alls("navigation_type","navigation", " b.`id`='".$_GET["id"]."'");
			$this->yunset("types",$group[0]);
			$this->yunset("lasturl",$_SERVER['HTTP_REFERER']);
		}
       $this->yuntpl(array('admin/admin_navigation_add'));
	}

 	function save_action(){
 		if($_POST["update"]){
			$value.="`nid`='".$_POST['nid']."',";
			$value.="`eject`='".$_POST['eject']."',";
			$value.="`display`='".$_POST['display']."',";
			$value.="`name`='".$_POST['name']."',";
			$url = str_replace("amp;","",$_POST['url']);
			$value.="`url`='".$url."',";
			$value.="`furl`='".$_POST['furl']."',";
			$value.="`sort`='".$_POST['sort']."',";
			$value.="`color`='".$_POST['color']."',";
			$value.="`model`='".$_POST['model']."',";
			$value.="`bold`='".$_POST['bold']."',";
			$value.="`type`='".$_POST['type']."'";

			$nbid=$this->obj->DB_update_all("navigation",$value,"`id`='".$_POST["id"]."'");
			$this->cache_action();
			$lasturl=str_replace("&amp;","&",$_POST["lasturl"]);
			isset($nbid)?$this->obj->ACT_layer_msg( "��վ����(ID:".$_POST["id"].")���³ɹ���",9,$_SERVER['HTTP_REFERER'],2,1):$this->obj->ACT_layer_msg( "����ʧ�ܣ�",8,$_SERVER['HTTP_REFERER']);
		}
 	    if($_POST["add"]){
	    	if(!is_array($this->obj->DB_select_once("navigation","name='".$_POST["name"]."' and `nid`='".$_POST["nid"]."'"))){
				$value.="`nid`='".$_POST['nid']."',";
				$value.="`eject`='".$_POST['eject']."',";
				$value.="`display`='".$_POST['display']."',";
				$value.="`name`='".$_POST['name']."',";
				$url = str_replace("amp;","",$_POST['url']);
				$value.="`url`='".$url."',";
				$value.="`furl`='".$_POST['furl']."',";
				$value.="`sort`='".$_POST['sort']."',";
				$value.="`color`='".$_POST['color']."',";
				$value.="`model`='".$_POST['model']."',";
				$value.="`bold`='".$_POST['bold']."',";
				$value.="`type`='".$_POST['type']."'";

				$nbid=$this->obj->DB_insert_once("navigation",$value);
				$this->cache_action();
				isset($nbid)?$this->obj->ACT_layer_msg( "��վ����(ID:".$nbid.")��ӳɹ���",9,"index.php?m=navigation",2,1):$this->obj->ACT_layer_msg( "���ʧ�ܣ�",8,"index.php?m=navigation");
	    	}else{
				$this->obj->ACT_layer_msg( "�Ѿ����ڴ˵�����",8,$_SERVER['HTTP_REFERER']);
	    	}
		}
	}

 	function group_action(){
		$type = $this->obj->DB_select_all("navigation_type","1 order by `id` desc");
		$this->yunset("type",$type);
 		$this->yuntpl(array('admin/admin_navigation_type'));
	}
 	function addtype_action(){
         if($_POST["sub"]){
			if($_POST["typename"]!=""){
				if(!is_array($this->obj->DB_select_once("navigation_type","typename='".$_POST['typename']."'"))){
			       $va="`typename`='".$_POST["typename"]."'";
			       $nbid=$this->obj->DB_insert_once("navigation_type",$va);
			       $this->cache_action();
			       isset($nbid)?$this->obj->ACT_layer_msg( "�������(ID:".$nbid.")��ӳɹ���",9,$_SERVER['HTTP_REFERER'],2,1):$this->obj->ACT_layer_msg( "���ʧ�ܣ�",9,$_SERVER['HTTP_REFERER']);
			     }else{
				   $this->obj->ACT_layer_msg( "�Ѿ����ڴ����",8,$_SERVER['HTTP_REFERER']);
			    }
			}else{
				$this->obj->ACT_layer_msg( "����ȷ��д������",8,$_SERVER['HTTP_REFERER']);
		     }
        }
  	    if($_POST["update"]){
		    $update=$this->obj->DB_update_all("navigation_type","`typename`='".$_POST['typename']."'","`id`='".$_POST['id']."'");
		    $this->cache_action();
		    isset($update)?$this->obj->ACT_layer_msg( "�������(ID:".$_POST["id"].")���³ɹ���",9,$_SERVER['HTTP_REFERER'],2,1):$this->obj->ACT_layer_msg( "����ʧ�ܣ�",8,$_SERVER['HTTP_REFERER']);
	    }
	}

 	function del_action(){
		$this->check_token();
 	    if($_GET["del"]){
	    	$del=$_GET["del"];
	    	if(is_array($del)){  
				$this->obj->DB_delete_all("navigation","`id` in (".@implode(",",$del).")","");
				$this->cache_action(); 
				$this->layer_msg( "����(ID:".@implode(',',$_GET["del"]).")ɾ���ɹ���",9,1,$_SERVER['HTTP_REFERER']);
	    	}else{
				$this->layer_msg( "��ѡ����Ҫɾ������Ϣ��",8,1,$_SERVER['HTTP_REFERER']);
	    	}
	    }
 	    if(isset($_GET["id"])){
			$where="`id`='".$_GET["id"]."'";
			$result=$this->obj->DB_delete_all("navigation", $where);
			$this->cache_action();
			isset($result)?$this->layer_msg('����(ID:'.$_GET["id"].')ɾ���ɹ���',9,0,$_SERVER['HTTP_REFERER']):$this->layer_msg('ɾ��ʧ�ܣ�',8,0,$_SERVER['HTTP_REFERER']);
		}else{ 
			$this->obj->ACT_layer_msg("�Ƿ�������",8,$_SERVER['HTTP_REFERER']);
		}
	}

 	function deltype_action(){
		$this->check_token();
	   if(isset($_GET["id"])){
			$result=$this->obj->DB_delete_all("navigation_type","`id`='".$_GET["id"]."'"); 
			$this->obj->DB_delete_all("navigation","`nid`='".$_GET["id"]."'","");  
			$this->cache_action();
			isset($result)?$this->layer_msg('�������(ID:'.$_GET["id"].')ɾ���ɹ���',9,0,$_SERVER['HTTP_REFERER']):$this->layer_msg('ɾ��ʧ�ܣ�',8,0,$_SERVER['HTTP_REFERER']);
		}else{
			$this->obj->ACT_layer_msg("�Ƿ�������",8,$_SERVER['HTTP_REFERER']);
		}
	}
	function cache_action(){
		include(LIB_PATH."cache.class.php");
		$cacheclass= new cache("../plus/",$this->obj);
		$makecache=$cacheclass->menu_cache("menu.cache.php");
	}
}


?>