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
class user_controller extends common
{
	function usersearch()
	{
		if($_SESSION['cityid'])
		{
			$_GET['cityid'] = $_SESSION['cityid'];
		}
		$CacheArr['job'] =array('job_index','job_type','job_name');
		$CacheArr['city'] =array('city_index','city_type','city_name');
		$CacheArr['user'] =array('userdata','userclass_name');
		$CacheArr['industry'] =array('industry_index','industry_name');
		$Array = $this->CacheInclude($CacheArr);
		if($_GET['uptime']=="1"){
			$uptimename="����";
		}elseif($_GET['uptime']=="3"){
			$uptimename="���3��";
		}elseif($_GET['uptime']=="7"){
			$uptimename="���7��";
		}elseif($_GET['uptime']=="30"){
			$uptimename="���һ����";
		}elseif($_GET['uptime']=="90"){
			$uptimename="���������";
		}
		$this->yunset("uptimename",$uptimename);
		$list=array();
		if($_GET["job1_son"]){
			$list[]=$_GET["job1_son"];
		}
		if($_GET["job_post"]){
			$list[]=$_GET["job_post"];
		}
		if($_GET["jobids"]){
			$list[]=$_GET["jobids"];
		}
		$_GET["jobids"]=implode(",",$list);
 		include APP_PATH."/plus/job.cache.php";
		include APP_PATH."/plus/user.cache.php";
		include APP_PATH."/plus/city.cache.php";
		include APP_PATH."/plus/industry.cache.php";
		$jobids=explode(",",$_GET['jobids']);
		foreach($jobids as $key=>$val){
			if($job_name[$val]){
				$jobnames.="��".$job_name[$val];
			}
		}
		$this->yunset("jobnames",substr($jobnames,2));
 		if($_GET['typeids'])
		{
			if(!is_array($_GET['typeids']))
			{
				$_GET['type']=@explode(",",$_GET['typeids']);
			}
			foreach($_GET['type'] as $k=>$v)
			{
				$type=array();
				foreach($_GET['type'] as $key=>$val)
				{
					if($v!=$val)
					{
						$type[]=$val;
					}
				}
				$Typelist[$k]['type']=@implode(",",$type);
				$Typelist[$k]['id']=$v;
			}
			$this->yunset("Typelist",$Typelist);
		}
 		$seatchcontition=array();
		if($_GET['keyword']){
			$searchcondition[]=$_GET['keyword'];
		}
		if($_GET['hy']){
			$searchcondition[]=$industry_name[$_GET['hy']];
		}
		if(!empty($jobnames)){
			$searchcondition[]=substr($jobnames,2);
		}
		if($_GET['cityid']){
			$searchcondition[]=$city_name[$_GET['cityid']];
		}
		if($_GET['exp']){
			$searchcondition[]=$userclass_name[$_GET['exp']];
		}
		if($_GET['edu']){
			$searchcondition[]=$userclass_name[$_GET['edu']];
		}
		if($_GET['report']){
			$searchcondition[]=$userclass_name[$_GET['report']];
		}
		if($_GET['sex']){
			$searchcondition[]=$userclass_name[$_GET['sex']];
		}
		if($_GET['salary']){
			$searchcondition[]=$userclass_name[$_GET['salary']];
		}
		if($uptimename){
			$searchcondition[]=$uptimename;
		}
		if(count($Typelist)>0){
			$typenames=array();
			foreach($Typelist as $v){
				$typenames[]=$userclass_name[$v['id']];
			}
			$searchcondition[]=implode("��",$typenames);
		}
		$this->yunset("searchcondition",implode(" + ",$searchcondition));

		$this->yunset("gettype",$_SERVER["QUERY_STRING"]);
		$this->yunset("getinfo",$_GET);
		$this->seo("user_search");
		$this->yun_tpl(array('search'));
	}
	function search_action(){
		$this->usersearch();
	}
	function index_action(){
		if($this->config['sy_default_userclass']=='1'){
			$CacheArr['job'] =array('job_index','job_type','job_name');
			$CacheArr['city'] =array('city_index','city_type','city_name');
			$CacheArr['industry'] =array('industry_index','industry_name');
			$Array = $this->CacheInclude($CacheArr);
			$this->yunset("gettype",$_SERVER["QUERY_STRING"]);
			$this->yunset("getinfo",$_GET);
			$this->seo("user");
			$this->yun_tpl(array('index'));
		}else{
			$this->usersearch();
		}
		
	}
}

?>