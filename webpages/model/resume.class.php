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
class resume_controller extends common
{
    function index_action()
    {
		if($_GET['uid'])
		{
			$def_job=$this->obj->DB_select_once("resume","`r_status`!='2' and `uid`='".(int)$_GET['uid']."'","def_job");
			if(!is_array($def_job))
			{
				$this->obj->ACT_msg($_SERVER['HTTP_REFERER'],"û���ҵ����˲ţ�");
			}else{
				if($def_job['def_job']=="0")
				{
					$this->obj->ACT_msg($_SERVER['HTTP_REFERER'],"��û�д���������");
				}else{
					$_GET['id']=$def_job['def_job'];
				}
			}
			$this->resume_select($def_job['def_job']);

		}

		if($_GET['id'])
		{
			$this->obj->DB_update_all("resume_expect","`hits`=`hits`+1","`id`='".(int)$_GET['id']."'");
		}
		if($_COOKIE['usertype']=="2")
		{
			$this->yunset("uid",$_COOKIE['uid']);
			$this->obj->DB_update_all("userid_job","`is_browse`=2","`com_id`='".$this->uid."' and `eid`='".(int)$_GET['id']."'");
			$this->unset_remind("userid_job",'2');
		}

		if($_GET['type']=="word")
		{
			$resume=$this->obj->DB_select_once("down_resume","`eid`='".(int)$_GET['id']."' and `downtime`='".$_GET['downtime']."'");
			if(is_array($resume) && !empty($resume))
			{
				$this->yun_tpl(array('wordresume'));
				die;
			}
		}
		$this->seo("resume");

		$this->yun_tpl(array('index'));


    }
    function sendresume_action(){
		$this->yunset("type",$_GET['type']);
		$this->yunset("job_link",$_GET['job_link']);
		$this->yun_tpl(array('sendresume'));
    }
    function resume_share_action()
    {
		if($_POST)
		{
			if($_POST['femail']=="" || $_POST['myemail']=="" || $_POST['authcode']=="")
			{
				echo "��������д��Ϣ��";die;
			}
			if(md5($_POST['authcode'])!=$_SESSION['authcode'])
			{
				echo "��֤�벻��ȷ��";die;
			}
			if($_COOKIE["sendresume"]==$_POST['id'])
			{
				echo "�벻ҪƵ�������ʼ���ͬһ�������ͼ��Ϊ�����ӣ�";die;
			}
			$contents=file_get_contents($this->config[sy_weburl]."/index.php?m=resume&c=sendresume&id=".$_POST['id']);
			$smtp = $this->email_set();
			$smtpusermail =$this->config['sy_smtpemail'];
			$myemail = iconv("UTF-8","GB2312//IGNORE",$_POST['myemail']);

			$sendid = $smtp->sendmail($_POST['femail'],$smtpusermail,"���ĺ���".$myemail."�����Ƽ��˼�����",$contents,"HTML","","","",$myemail);
			if($sendid)
			{
				echo 1;
			}else{
				echo "�ʼ����ʹ��� ԭ��1���䲻���� 2��վ�ر��ʼ�����";die;
			}
			SetCookie("sendresume",$_POST['id'],time() + 120, "/");
			die;
		}
		$this->seo("resume_share");
		$this->yunset("id",$_GET['id']);
		$this->yun_tpl(array('resume_share'));
    }
    function user_resume($uid="",$eid="")
    {
    	$status=0;
		if($this->uid==$uid && $this->username && $_COOKIE['usertype']==1)
		{
			$status=1;
			$this->yunset("user_status",$status);
		}
		if($this->uid && $this->username && $_COOKIE['usertype']==2){
			$row=$this->obj->DB_select_once("down_resume","`eid`='".$eid."' and comid='".$this->uid."'");
			if(is_array($row))
			{
				$status=1;
				$this->yunset("com_status",$status);
			}
		}
    }
    function send_email_resume_action()
    {
    	$this->yun_tpl(array('send_email_resume'));
    }
}
?>