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
class com_controller extends common
{
	function index_action()
	{
		$this->get_moblie();
		$this->industry_cache();
		$this->job_cache();
		$this->yunset("title","ְλ����");
		$this->yuntpl(array('wap/com'));
	}
	function search_action()
	{
		$this->get_moblie();
		$this->industry_cache();
		$this->job_cache();
		$this->yunset("title","ְλ����");
		$this->yuntpl(array('wap/com'));
	}
	function view_action()
	{
		$this->get_moblie();
		$this->industry_cache();
		$this->com_cache();
		$this->job_cache();
		$this->city_cache();
		$job=$this->obj->DB_select_once("company_job","`id`='".$_GET['id']."'");
		$company=$this->obj->DB_select_once("company","`uid`='".$job['uid']."'");
		$this->yunset("job",$job);
		$this->yunset("company",$company);
		$this->yunset("title","ְλ����");
		$this->yuntpl(array('wap/com_show'));
	}
	function sq_action()
	{
		if(!$this->uid || !$this->username || $_COOKIE['usertype']!=1){

			$this->wapheader('index.php?m=com&c=view&id='.$_GET[id].'&','����û�е�¼�����ȵ�¼��');
		}

		$resume=$this->obj->DB_select_once("resume","`uid`='".$this->uid."'");
		if(empty($resume))
		{
			$this->wapheader('index.php?m=com&c=view&id='.$_GET[id].'&','����û�м�����������Ӽ�����');
		}
		$row=$this->obj->DB_select_once("userid_job","`uid`='".$this->uid."' and `job_id`='".$_GET['id']."'");
		if(!empty($row))
		{
			$this->wapheader('index.php?m=com&c=view&id='.$_GET[id].'&','���Ѿ��������ְλ���벻Ҫ�ظ����룡');
		}
		$info=$this->obj->DB_select_once("company_job","`id`='".$_GET['id']."'");
		$value['job_id']=$_GET['id'];
		$value['com_name']=$info['com_name'];
		$value['job_name']=$info['name'];
		$value['com_id']=$info['uid'];
		$value['uid']=$this->uid;
		$value['eid']=$resume['def_job'];
		$value['datetime']=mktime();
		$nid=$this->obj->insert_into("userid_job",$value);
		if($nid){
			$this->obj->DB_update_all('company_statis',"`sq_job`=`sq_job`+1","`uid`='".$value['com_id']."'");
			$this->obj->DB_update_all('member_statis',"`sq_jobnum`=`sq_jobnum`+1","`uid`='".$value['uid']."'");
			$this->wapheader('index.php?m=com&c=view&id='.$_GET[id].'&','����ɹ���');
		}else{
			$this->wapheader('index.php?m=com&c=view&id='.$_GET[id].'&','����ʧ�ܣ�');
		}
	}
	function fav_action()
	{
		if(!$this->uid || !$this->username || $_COOKIE['usertype']!=1)
		{
			$this->wapheader('index.php?m=com&c=view&id='.$_GET[id].'&','����û�е�¼�����ȵ�¼��');
		}else{
			$rows=$this->obj->DB_select_all("fav_job","`uid`='".$this->uid."' and `job_id`='".$_GET['id']."'");
			if(is_array($rows)&&!empty($rows))
			{
				$this->wapheader('index.php?m=com&c=view&id='.$_GET[id].'&','���Ѿ��ղع���ְλ���벻Ҫ�ظ��ղأ�');
			}
			$job=$this->obj->DB_select_once("company_job","`id`='".$_GET['id']."'");
			$data['job_id'] = $job['id'];
			$data['com_name'] = $job['com_name'];
			$data['job_name'] = $job['name'];
			$data['com_id'] = $job['uid'];
			$data['uid'] = $this->uid;
			$data['datetime'] = time();
			$nid=$this->obj->insert_into('fav_job',$data);

			if($nid){
				$this->obj->DB_update_all('member_statis',"`fav_jobnum`=`fav_jobnum`+1","`uid`='".$this->uid."'");
				$this->wapheader('index.php?m=com&c=view&id='.$_GET[id].'&','�ղسɹ���');
			}else{
				$this->wapheader('index.php?m=com&c=view&id='.$_GET[id].'&','�ղ�ʧ�ܣ�');
			}
		}
	}
}
?>