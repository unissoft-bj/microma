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
class admin_domain_controller extends common
{
	function index_action(){
		$this->city_cache();
		$this->industry_cache();
		$admin_domain=$this->obj->DB_select_all("domain","1 order by `id` asc");
		$this->yunset("domain",$admin_domain);
		$this->yuntpl(array('admin/admin_domain'));
	}
	function AddDomain_action(){
		extract($_POST);
		$this->industry_cache();
		$this->city_cache();
		include_once("model/model/style_class.php");
		$style = new style($this->obj);
		$list = $style->model_list_action();
		$this->yunset("list",$list);
		$this->yuntpl(array('admin/admin_adddomain'));
	}
	function save_action(){
		extract($_POST);
		if($domain){$domain = @str_replace("http://","",$domain);}
		if($fz_type=='1'){
			$hy="";
		}else{
			$cityid="";
		}

		if($_POST['add']){
			if($domain!="" && $title!="" ){
				$domain_list = $this->obj->DB_select_once("domain","`domain`='$domain'");
				if(is_array($domain_list)){
					$this->obj->ACT_layer_msg("�������Ѿ����󶨣�",8,$_SERVER['HTTP_REFERER']);
				}else{
					$value="`title`='$title',";
					$value.="`domain`='$domain',";
					$value.="`province`='$province',";
					$value.="`cityid`='$cityid',";
					$value.="`three_cityid`='$three_cityid',";
					$value.="`type`='$type',";
					$value.="`hy`='$hy',";
					$value.="`fz_type`='$fz_type',";
					$value.="`style`='$style',";
					if(is_uploaded_file($_FILES['weblogo']['tmp_name'])) {
						$upload=$this->upload_pic("../data/logo/");
						$logo_path = $this->logo_upload($_FILES['weblogo'],$upload);
						$value.="`weblogo`='$logo_path',";
					}
					$value.="`webtitle`='$webtitle',";
					$value.="`webkeyword`='$webkeyword',";
					$value.="`webmeta`='$webmeta'";
					$this->obj->DB_insert_once("domain",$value);
					$this->DomainArr_action();
					$this->obj->ACT_layer_msg("�����󶨳ɹ���",9,"index.php?m=admin_domain",2,1);
				}
			}else{
				$this->obj->ACT_layer_msg("��Ϣ��д��������",8,$_SERVER['HTTP_REFERER']);
			}
		}
		if($_POST['update']){
			if($domain!="" && $title!="" ){
				$domain_list = $this->obj->DB_select_once("domain","`domain`='$domain' AND `id`!='$id'");
				if(is_array($domain_list)){
					$this->obj->ACT_layer_msg("�������Ѿ����󶨣�",8,$_SERVER['HTTP_REFERER']);
				}else{
					$value="`title`='$title',";
					$value.="`domain`='$domain',";
					$value.="`province`='$province',";
					$value.="`cityid`='$cityid',";
					$value.="`three_cityid`='$three_cityid',";
					$value.="`type`='$type',";
					$value.="`hy`='$hy',";
					$value.="`fz_type`='$fz_type',";
					$value.="`style`='$style',";
					if (is_uploaded_file($_FILES['weblogo']['tmp_name'])) {
						$upload=$this->upload_pic("../data/logo/");
						$logo_path = $this->logo_upload($_FILES['weblogo'],$upload);
						$value.="`weblogo`='$logo_path',";
					}
					$value.="`webtitle`='$webtitle',";
					$value.="`webkeyword`='$webkeyword',";
					$value.="`webmeta`='$webmeta'";

					$this->obj->DB_update_all("domain",$value,"`id`='$id'");
					$this->DomainArr_action();
					$this->obj->ACT_layer_msg("�������޸ĳɹ���",9,"index.php?m=admin_domain",2,1);
				}
			}else{
				$this->obj->ACT_layer_msg("��Ϣ��д��������",8,$_SERVER['HTTP_REFERER']);
			}
		}
	}
	function logo_upload($picurl,$upload){
		$pictures=$upload->picture($picurl,false);
		$pic = str_replace("../data/logo","data/logo",$pictures);
		return $pic;
	}
	function Modify_action(){
		if($_GET['siteid']){
			$this->industry_cache();
			$this->city_cache();
			include_once("model/model/style_class.php");
			$style = new style($this->obj);
			$list = $style->model_list_action();
			$this->yunset("list",$list);
			$site = $this->obj->DB_select_once("domain","`id`='".$_GET['siteid']."'");
			$this->yunset("site",$site);
		}
		$this->yuntpl(array('admin/admin_adddomain'));
	}
	function AjaxCity_action()
	{
		if($_GET['keyid'])
		{
			$city=$this->obj->DB_select_all("city_class","`keyid`='".$_GET['keyid']."'");
			if(is_array($city))
			{
				foreach($city as $key=>$value)
				{
					$html.="<option value='".$value['id']."'>".$value['name']."</option>";
				}
			}
			echo $html;
			$html="";die;
		}
	}
	function DelDomain_action()
	{
		$this->check_token();
		if($_GET['delid'])
		{
			$this->obj->DB_delete_all("domain","`id`='".$_GET['delid']."'");
			$this->DomainArr_action();
			$this->layer_msg('����ɾ���ɹ���',9,0,"index.php?m=admin_domain");
		}
	}
	function DomainArr_action()
	{
		include(LIB_PATH."cache.class.php");
		$cacheclass= new cache("../plus/",$this->obj);
		$makecache=$cacheclass->domain_cache("domain_cache.php");
	}
}
?>