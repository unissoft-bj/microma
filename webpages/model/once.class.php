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
class once_controller extends common
{
	function index_action()
	{
		if($_POST['submit'])
		{
			$authcode=md5($_POST['authcode']);
			$password=md5($_POST['password']);
			$id=(int)$_POST['id'];
			$submit=$_POST['submit'];
			unset($_POST['authcode']);
			unset($_POST['password']);
			unset($_POST['submit']);
			unset($_POST['id']);
			$_POST['status']=$this->config['com_fast_status'];
			$_POST['ctime']=time();
			$_POST['edate']=strtotime("+".(int)$_POST['edate']." days");
			if($id!=""){
				$arr=$this->obj->DB_select_once("once_job","`id`='".$id."' and `password`='".$password."'");
				if(empty($arr)){
					$this->obj->ACT_layer_msg("密码不正确",8,"index.php?m=tiny");
				}
				$this->obj->update_once("once_job",$_POST,array("id"=>$id));
				if($this->config['com_fast_status']=="0"){$msg="修改成功，等待审核！";}else{$msg="修改成功!";}
			}else{
				if(strstr($this->config['code_web'],'一句话招聘'))
				{
					if($authcode!=$_SESSION['authcode'])
					{
						$this->obj->ACT_layer_msg("验证码错误！",8);
					}
				}
				$_POST['password']=$password;
				$this->obj->insert_into("once_job",$_POST);
				if($this->config['com_fast_status']=="0"){$msg="发布成功，等待审核！";}else{$msg="发布成功!";}
			}
			$this->obj->ACT_layer_msg($msg,9,"index.php?m=once");
		}
		$this->seo("once");
		$this->yun_tpl(array('index'));
	}
	function ajax_action()
	{
		if(md5($_POST['code'])!=$_SESSION['authcode'])
		{
			echo 1;die;
		}
		$row=$this->obj->DB_select_once("once_job","`id`='".(int)$_POST['tid']."' and `password`='".md5($_POST['pw'])."'");
		if(!is_array($row) || empty($row))
		{
			echo 2;die;
		}
		if($_POST['type']==1)
		{
			$this->obj->DB_update_all("once_job","`ctime`='".time()."'","`id`='".(int)$_POST['tid']."'");
			echo 3;die;
		}elseif($_POST['type']==3){
			$this->obj->DB_delete_all("once_job","`id`='".(int)$_POST['tid']."'");
			echo 4;die;
		}else{
			$jobinfo=$this->obj->DB_select_once("once_job","`id`='".(int)$_POST['tid']."'");
			if($jobinfo['edate']>mktime()){
				$jobinfo['edate']=ceil(($jobinfo['edate']-mktime())/86400);
			}else{
				$jobinfo['edate']=iconv("gbk","utf-8","已过期");
			}
			$jobinfo["title"]=iconv("gbk","utf-8",$jobinfo["title"]);
			$jobinfo["companyname"]=iconv("gbk","utf-8",$jobinfo["companyname"]);
			$jobinfo["linkman"]=iconv("gbk","utf-8",$jobinfo["linkman"]);
			$jobinfo["address"]=iconv("gbk","utf-8",$jobinfo["address"]);
			$jobinfo["require"]=iconv("gbk","utf-8",$jobinfo["require"]);
			echo json_encode($jobinfo);die;
		}
	}
}
?>