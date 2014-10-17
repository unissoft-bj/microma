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
class admin_right_controller extends common
{
	function index_action(){
		global $db_config;
		$this->yunset("db_config",$db_config);
		$base=base64_encode($db_config["coding"]."|phpyun|".$this->config["sy_webname"]."|phpyun|".$this->config["sy_weburl"]."|phpyun|".$this->config["sy_webemail"]."|phpyun|".$db_config["version"]);
		$this->yunset("base",$base);
		$nav_user=$this->obj->DB_select_alls("admin_user","admin_user_group","a.`m_id`=b.`id` and a.`uid`='".$_SESSION['auid']."'");

		$soft=$_SERVER['SERVER_SOFTWARE'];
		$kongjian=round(@disk_free_space(".")/(1024*1024),2);
		$banben=@mysql_get_server_info();
		$yonghu=@get_current_user();
		$server=$_SERVER['SERVER_NAME'];
		if($this->config["sy_email_jobed"]==1){
			$tx=@fopen(APP_PATH."data/tx.txt","r");
			$fcontent=@fgets($tx);
			@fclose();
			$ctime=date('Ymd');
			if($fcontent=="" || $fcontent!=$ctime){
				$tx=@fopen(APP_PATH."data/tx.txt","w+");
				$fcontent=@fwrite($tx,$ctime);
				@fclose();
				$time = time();
				$jobed = $this->obj->DB_select_alls("company_job","company","a.`uid`=b.`uid` and a.`edate`<'$time' and a.`end_email`!=1","a.*,b.linkmail");
				if(@is_array($jobed)){
					foreach($jobed as $k=>$v){
						$this->obj->DB_update_all("company_job","`end_email`=1","`uid`='".$v['uid']."'");
						$this->send_msg_email(array("email"=>$v["linkmail"],"com_name"=>$v["com_name"],"job_name"=>$v["name"],"type"=>"jobed"));
					}
				}
			}
		}
		if(is_dir("../admin"))$dirname[]="admin";
		if(is_dir("../install"))$dirname[]="install";
		$this->yunset("dirname",@implode(',',$dirname));
		$mruser=$nav_user[0]['username']=="admin" && $nav_user[0]['password']==md5('admin')?1:0;
		$this->yunset("mruser",$mruser);


		$this->yunset("com_order_3",$com_order_3);
		$this->yunset("com_job_4",$com_job_4);
		$this->yunset("com_cert_2",$com_cert_2);
		$this->yunset("soft",$soft);
		$this->yunset("kongjian",$kongjian);
		$this->yunset("banben",$banben);
		$this->yunset("yonghu",$yonghu);
		$this->yunset("server",$server);
		$this->yunset("nav_user",$nav_user[0]);
		$this->yuntpl(array('admin/admin_right'));
	}
	function get_all_num($rows,$field){
		$time=strtotime(date("Y-m-d"));
		$num=0;
		if(@is_array($rows)){
			foreach($rows as $value){
				if($value[$field]>=$time){
					$num++;
				}
			}
		}
		return $num;
	}
	function getweb_action(){
				global $db_config;
		$this->yunset("db_config",$db_config);
		$base=base64_encode($db_config["coding"]."|phpyun|".$this->config["sy_webname"]."|phpyun|".$this->config["sy_weburl"]."|phpyun|".$this->config["sy_webemail"]."|phpyun|".$db_config["version"]);
		$this->yunset("base",$base);
		$nav_user=$this->obj->DB_select_alls("admin_user","admin_user_group","a.`m_id`=b.`id` and a.`uid`='".$_SESSION['auid']."'");
		$time=strtotime(date("Y-m-d"));
		$user_rows=$this->obj->DB_select_all("member","`usertype`='1'",'usertype,reg_date');
		$usernum_all=count($user_rows);
		$user_num=$this->get_all_num($user_rows,"reg_date");
		$resume_rows=$this->obj->DB_select_all("resume_expect","1",'lastupdate');
		$resume_all=count($resume_rows);
		$resume=$this->get_all_num($resume_rows,"lastupdate");

		$member_rows=$this->obj->DB_select_all("member","`usertype`='2'",'usertype,reg_date');
		$comnum_all=count($member_rows);
		$com_nums=$this->get_all_num($member_rows,"reg_date");

		$news_rows=$this->obj->DB_select_all("news_base","1",'datetime');
		$news_all=count($news_rows);
		$news=$this->get_all_num($news_rows,"datetime");
		$job_rows=$this->obj->DB_select_all("company_job","1",'lastupdate');
		$job_all=count($job_rows);
		$job=$this->get_all_num($job_rows,"lastupdate");

		$ad_rows=$this->obj->DB_select_all("ad","1",'id');
		$ad_all=count($ad_rows);


		$link=$this->obj->DB_select_num("admin_link","`link_state`!='1'");
		$once=$this->obj->DB_select_num("once_job","`status`!='1'");
		$com_job_4=$this->obj->DB_select_num("company_job","`state`='0'");
		if($this->config['com_cert_status']=='1'){
			$com_cert_2=$this->obj->DB_select_num("company_cert","`status`='0'  and type='3'");
		}else{
			$com_cert_2='0';
		}
		$com_order_3=$this->obj->DB_select_num("company_order","`order_state`='3'");

		$this->yunset("com_order_3",$com_order_3);
		$this->yunset("com_job_4",$com_job_4);
		$this->yunset("com_cert_2",$com_cert_2);
		$this->yunset("user_num",$user_num);
		$this->yunset("usernum_all",$usernum_all);
		$this->yunset("resume",$resume);
		$this->yunset("resume_all",$resume_all);
		$this->yunset("com_nums",$com_nums);
		$this->yunset("comnum_all",$comnum_all);
		$this->yunset("news",$news);
		$this->yunset("news_all",$news_all);
		$this->yunset("job",$job);
		$this->yunset("job_all",$job_all);
		$this->yunset("ad",$ad);
		$this->yunset("ad_all",$ad_all);
		$this->yunset("link",$link);
		$this->yunset("once",$once);
		$this->yuntpl(array('admin/admin_right_web'));
	}
}

?>