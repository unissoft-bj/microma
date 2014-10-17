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
class com_controller extends common{
	function comsearch()
	{
		if($_SESSION['cityid'])
		{
			$_GET['cityid'] = $_SESSION['cityid'];
		}
		$CacheArr['city'] =array('city_index','city_type','city_name');
		$CacheArr['com'] =array('comdata','comclass_name');
		$CacheArr['industry'] =array('industry_index','industry_name');
		$CacheArr['job'] =array('job_index','job_type','job_name');
		$this->CacheInclude($CacheArr);
		if(is_array($_SESSION["history"]))
		{
			$this->yunset("history",$_SESSION["history"]);
		}
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
		$list=array();
		if($_GET['job1_son']){
			$list[]=$_GET['job1_son'];
		}
		if($_GET['job_post']){
			$list[]=$_GET['job_post'];
		}
		if($_GET['jobids']){
			$list[]=$_GET['jobids'];
		}
		$_GET['jobids']=@implode(",",$list);
		$this->yunset("uptimename",$uptimename);
		$this->yunset("gettype",$_SERVER["QUERY_STRING"]);
		$this->yunset("getinfo",$_GET);
 		include APP_PATH."/plus/job.cache.php";
		include APP_PATH."/plus/com.cache.php";
		include APP_PATH."/plus/city.cache.php";
		include APP_PATH."/plus/industry.cache.php";
		$jobids=explode(",",$_GET['jobids']);
		foreach($jobids as $key=>$val){
			if($job_name[$val]){
				$jobnames.="��".$job_name[$val];
			}
		}
		$this->yunset("jobnames",substr($jobnames,2));
		if($_GET['type'])
		{
			if(!is_array($_GET['type'])){
				$typeids=@explode(",",$_GET['type']);
			}
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
		if($_GET['pr']){
			$searchcondition[]=$comclass_name[$_GET['pr']];
		}
		if($_GET['mun']){
			$searchcondition[]=$comclass_name[$_GET['mun']];
		}
		if($_GET['exp']){
			$searchcondition[]=$comclass_name[$_GET['exp']];
		}
		if($_GET['salary']){
			$searchcondition[]=$comclass_name[$_GET['salary']];
		}
		if($_GET['edu']){
			$searchcondition[]=$comclass_name[$_GET['edu']];
		}
		if($uptimename){
			$searchcondition[]=$uptimename;
		}
		if(count($typeids)>0){
			$typenames=array();
			foreach($typeids as $v){
				$typenames[]=$comclass_name[$v];
			}
			$searchcondition[]=implode("��",$typenames);
		}
		$this->yunset("searchcondition",@implode(" + ",$searchcondition));
		if($_GET['order']=="")
		{
			$this->yunset("orderby",'urgent desc,rec desc');
		}
		if($_GET['orderby']=="lastdate")
		{
			$this->yunset("orderby",'lastupdate desc');
		}
       if($_GET['orderby']=="rec")
		{
			$this->yunset("orderby",'rec desc');
		}
		if($_GET['orderby']=="urgent")
		{
			$this->yunset("orderby",'urgent desc');
		}
		$this->seo("com_search");
		$this->yun_tpl(array('search'));
	}
	function search_action()
	{
		$this->comsearch();
	}
	function index_action()
	{
		if($this->config['sy_default_comclass']=='1')
		{
			$CacheArr['job'] =array('job_index','job_type','job_name');
			$CacheArr['industry'] =array('industry_index','industry_name');
			$CacheArr['city'] =array('city_index','city_type','city_name');
			$this->CacheInclude($CacheArr);
			$this->seo("com");
			$this->yun_tpl(array('index'));
		}else{
			$this->comsearch();
		}
	}
	function comapply_action()
	{
		include APP_PATH."/plus/city.cache.php";
		include APP_PATH."/plus/com.cache.php";
		if($_POST['submit'])
		{
			$black=$this->obj->DB_select_once("blacklist","`p_uid`='".$this->uid."' and `c_uid`='".(int)$_POST['job_uid']."'");
			if(!empty($black))
			{
				$this->obj->ACT_layer_msg("���ѱ�����ҵ������������������۸���ҵ��",8,$_SERVER['HTTP_REFERER']);
			}
			if(trim($_POST["content"])=="")
			{
				$this->obj->ACT_layer_msg( "�������ݲ���Ϊ�գ�",2,$_SERVER['HTTP_REFERER']);
			}
			$data['uid']=$this->uid;
			$data['username']=$this->username;
			$data['jobid']=(int)$_POST['jobid'];
			$data['job_uid']=(int)$_POST['job_uid'];
			$data['content']=trim($_POST['content']);
			$data['com_name']=trim($_POST['com_name']);
			$data['job_name']=trim($_POST['job_name']);
			$data['type']='1';
			$data['datetime']=mktime();
			$id=$this->obj->insert_into("msg",$data);
			isset($id)?$this->obj->ACT_layer_msg( "���Գɹ�����ȴ��ظ���",9,$_SERVER['HTTP_REFERER']):$this->obj->ACT_layer_msg("����ʧ�ܣ�",8,$_SERVER['HTTP_REFERER']);
		}
		$comuid = $this->obj->DB_select_once("company_job","`id`='".(int)$_GET['id']."'","uid");
		$this->obj->DB_update_all("company_job","`jobhits`=`jobhits`+1","`id`='".(int)$_GET['id']."'");
		if($this->uid!=$comuid['uid'])
		{
			if($this->config['com_login_link']=="1")
			{
				if($this->uid=="" && $this->username=="")
				{
					$look_msg1="����û�е�¼����¼���������ְλ��";
					$look_msg="����û�е�¼����¼��ſ��Բ鿴��ϵ��ʽ��";
				}else{
					if($_COOKIE['usertype']!="1")
					{
						$look_msg="�����Ǹ����û������ܲ鿴��ϵ��ʽ��";
						$look_msg1="�����Ǹ����û�����������ְλ��";
						$looktype="2";
					}

				}
			}else if($_COOKIE['usertype']!="1"){
				$look_msg1="�����Ǹ����û�����������ְλ��";
			}
			if($this->config['com_resume_link']=="1"&&$_COOKIE['usertype']=='1')
			{
				$row=$this->obj->DB_select_all("resume_expect","`uid`='".$this->uid."'");
				if(!is_array($row)||empty($row))
				{
					$url=$this->config['sy_weburl']."/member/index.php?c=expect&add=".$this->uid;
					$look_msg="���ã�".$this->username."������û�д������������ܲ鿴��ϵ��ʽ������<a href='".$url."'>����</a>����Ҫ������ᣡ";
					$useruid=$this->uid;
					$looktype="1";
					$this->yunset("useruid",$useruid);
				}
			}
			if($_COOKIE["usertype"]=='1')
			{
				$userid_job=$this->obj->DB_select_once("userid_job","`uid`='".$this->uid."' and `job_id`='".(int)$_GET['id']."'","id");
				$this->yunset("userid_job",$userid_job['id']);
				$this->yunset("usertype",'1');
			}
		 }
		$is_atn = $this->obj->DB_select_once("atn","`sc_uid`='".$comuid['uid']."' and `uid`='".$this->uid."'","id");
		$this->yunset("is_atn",$is_atn);
		$this->yunset("looktype",$looktype);
		$this->yunset("look_msg",$look_msg);
		$this->yunset("look_msg1",$look_msg1);

		$this->seo("comapply");
		$this->yun_tpl(array('comapply'));
	}
	function report_action()
	{
		if($this->config['user_report']!='1'){echo 5;die;}
		if(md5($_POST['authcode'])!=$_SESSION['authcode']){echo 1;die;}
		$row=$this->obj->DB_select_once("report","`p_uid`='".$this->uid."' and `c_uid`='".(int)$_POST['r_uid']."' and `usertype`='".$_COOKIE['usertype']."'");
		if(is_array($row)){echo 2;die;}
		$data['c_uid']=(int)$_POST['r_uid'];
		$data['inputtime']=mktime();
		$data['p_uid']=$this->uid;
		$data['usertype']=$_COOKIE['usertype'];
		$data['eid']=(int)$_POST['id'];
		$data['r_name']=iconv("utf-8","gbk",$_POST['r_name']);
		$data['username']=$this->username;
		$data['r_reason']=iconv("utf-8","gbk",$_POST['r_reason']);
		$nid=$this->obj->insert_into("report",$data);
		if($nid){
			echo 3;die;
		}else{
			echo 4;die;
		}
	}

	function recommend_action()
	{
		if($_POST)
		{
			if($_POST['femail']=="" || $_POST['myemail']=="" || $_POST['authcode']=="")
			{
				echo "��������д��Ϣ��";die;
			}
			if(md5($_POST['authcode'])!=$_SESSION[authcode])
			{
				echo "��֤�벻��ȷ��";die;
			}
			if($_COOKIE['sendjob']==$_POST['id'])
			{
				echo "�벻ҪƵ�������ʼ���ͬһְλ���ͼ��Ϊ�����ӣ�";die;
			}
			$filename = APP_PATH."/template/".$this->config['style']."/".$this->m."/sendjob.htm";
		    $handle = fopen($filename, "r");
		    $contents = fread($handle, filesize ($filename));
		    fclose($handle);
		    $contents = $this->assignhtm($contents,(int)$_POST['id']);
			$smtp = $this->email_set();
			$smtpusermail =$this->config["sy_smtpemail"];
			$myemail = iconv("UTF-8","GB2312//IGNORE",$myemail);

			$sendid = $smtp->sendmail($_POST['femail'],$smtpusermail,"���ĺ���".$myemail."�����Ƽ���ְλ��",$contents,"HTML","","","",$myemail);
			if($sendid)
			{
				echo 1;
			}else{
				echo "�ʼ����ʹ��� ԭ��1���䲻���� 2��վ�ر��ʼ�����";die;
			}
			SetCookie("sendjob",$_POST['id'],time() + 120, "/");
			die;
		}

		$this->seo("recommend");
		$this->yun_tpl(array('recommend'));
	}
	function send_email_job_action()
	{
		$this->yun_tpl(array('send_email_job'));
	}
	function saveshow_action()
	{
		if (!empty($_FILES))
		{
			$pic=$name='';
			$data=array();
			$tempFile = $_FILES['Filedata'];
			$upload=$this->upload_pic("./upload/show/");
			$pic=$upload->picture($tempFile);
			$name=@explode('.',$_FILES['Filedata']['name']);
			$picurl=str_replace("../upload/show","./upload/show",$pic);
			$data["picurl"]= $picurl;
			$data['title']=iconv('utf-8','gbk',$name[0]);
			$data["ctime"]=time();
			$data['uid']=(int)$_POST['uid'];
			$id=$this->obj->insert_into("company_show",$data);
			if($id){
 				echo $name[0]."||".$picurl."||".$id;die;
			}else{
				echo "2";die;
			}
		}
	}
}
?>