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
class sinaconnect_controller extends common
{
	function index_action()
	{
		if($_COOKIE["uid"]!=""&&$_COOKIE["username"]!="")
		{
			$this->obj->ACT_msg("index.php","���Ѿ���¼�ˣ�");
		}
		if($this->config["sy_sinalogin"]!="1")
		{
			$this->obj->ACT_msg("index.php","�Բ������˵�¼�ѹرգ�");
		}
		  include_once( APP_PATH.'api/weibo/saetv2.ex.class.php' );
		 define( "WB_AKEY" ,$this->config['sy_sinaappid']);
		 define( "WB_SKEY" , $this->config['sy_sinaappkey']);
		 define( "WB_CALLBACK_URL" , $this->config['sy_weburl'].'/index.php?m=sinaconnect' );
		 $o = new SaeTOAuthV2( WB_AKEY , WB_SKEY );
		if (isset($_GET['code'])) {
			$keys = array();
			$keys['code'] = $_GET['code'];
			$keys['redirect_uri'] = WB_CALLBACK_URL;
			$token = $o->getAccessToken( 'code', $keys ) ;
			if($token['access_token'])
			{
				$tokens = 	$token['access_token'];
				$tokenuid =  $token['uid'];
				 if($tokenuid>0)
			     {
					$userinfo = $this->obj->DB_select_once("member","`sinaid`='$tokenuid'");
					if(is_array($userinfo))
					{
						if($this->config[sy_uc_type]=="uc_center")
						{
							$this->obj->uc_open();
							$user = uc_get_user($userinfo[username]);
							$ucsynlogin=uc_user_synlogin($user[0]);
  							
							$this->obj->ACT_msg("index.php","��¼�ɹ���",9);

						}else{
							$this->unset_cookie();
							$this->add_cookie($userinfo[uid],$userinfo[username],$userinfo[salt],$userinfo[email],$userinfo[password],$userinfo[usertype]); 
							$this->obj->ACT_msg("index.php","��¼�ɹ���",9);
						}
					}else{
						$_SESSION['sinaid'] = $tokenuid;
						$_SESSION['sinainfo'] = "���ѳɹ���¼����΢�������Ȱ������˻���";
						$this->obj->ACT_msg($this->url("index","login",array("usertype"=>"2")),"���ѳɹ���¼����΢�������Ȱ������˻���",9);

					}
			     }else{  
				 	$this->obj->ACT_msg($this->config['sy_weburl'],"����΢����Ȩʧ�ܣ���������Ȩ��");

				}
			}
		}else{
			$code_url = $o->getAuthorizeURL( WB_CALLBACK_URL );
			echo "<script>window.location.href='".$code_url."';</script>";
		}
	  }
}

