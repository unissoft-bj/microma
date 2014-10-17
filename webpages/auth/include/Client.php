<?php

require_once(SCRIPT_ROOT.'nusoaplib/nusoap.php');

/**
 * ��֤���̸�Ҫ:
 * 
 * ��һ��ʹ��ʱ����ʹ��[���к�]��[����]����login(��¼����),���ڵ�¼ͬʱ����һ��session key
 * 
 * ��¼�ɹ��󣬳�Ϊ[�ѵ�¼״̬],��Ҫ����˲�����session key,�����Ժ����ز���(�緢�Ͷ��ŵȲ���)
 * 
 * logout(ע������)��, session key��ʧЧ�����Ҳ����ٷ�������, �����ٽ���login(��¼����)
 *
 * 
 * 
 * 
 * 
 */
class Client{
	
	/**
	 * ���ص�ַ
	 */
	var $url;
	
	/**
	 * ���к�,��ͨ������������Ա��ȡ
	 */
	var $serialNumber;
	
	/**
	 * ����,��ͨ������������Ա��ȡ
	 */
	var $password;
	
	/**
	 * ��¼�������е�SESSION KEY������ͨ��login����ʱ����
	 */
	var $sessionKey;
	
	/**
	 * webservice�ͻ���
	 */
	var $soap;
	
	/**
	 * Ĭ�������ռ�
	 */
	var $namespace = 'http://sdkhttp.eucp.b2m.cn/';
	
	/**
	 * ���ⷢ�͵����ݵı���,Ĭ��Ϊ GBK
	 */
	var $outgoingEncoding = "GBK";
	
	/**
	 * ���ⷢ�͵����ݵı���,Ĭ��Ϊ GBK
	 */
	var $incomingEncoding = '';
	
	
	
	
	/**
	 * @param string $url 			���ص�ַ
	 * @param string $serialNumber 	���к�,��ͨ������������Ա��ȡ
	 * @param string $password		����,��ͨ������������Ա��ȡ
	 * @param string $sessionKey	��¼�������е�SESSION KEY������ͨ��login����ʱ����
	 * 
	 * @param string $proxyhost		��ѡ�������������ַ��Ĭ��Ϊ false ,��ʹ�ô��������
	 * @param string $proxyport		��ѡ������������˿ڣ�Ĭ��Ϊ false
	 * @param string $proxyusername	��ѡ������������û�����Ĭ��Ϊ false
	 * @param string $proxypassword	��ѡ��������������룬Ĭ��Ϊ false
	 * @param string $timeout		���ӳ�ʱʱ�䣬Ĭ��0��Ϊ����ʱ
	 * @param string $response_timeout		��Ϣ���س�ʱʱ�䣬Ĭ��30
	 * 
	 * 
	 */
	function Client($url,$serialNumber,$password,$sessionKey='',$proxyhost = false,$proxyport = false,$proxyusername = false, $proxypassword = false, $timeout = 0, $response_timeout = 30)
	{
		$this->url = $url;
		$this->serialNumber = $serialNumber;
		$this->password = $password;
		if ($sessionKey!='')
			$this->sessionKey = $sessionKey;
			
			
			
		/**
		 * ��ʼ�� webservice �ͻ���
		 */	
		$this->soap = new nusoap_client($url,false,$proxyhost,$proxyport,$proxyusername,$proxypassword,$timeout,$response_timeout); 
		$this->soap->soap_defencoding = $this->outgoingEncoding;
		$this->soap->decode_utf8 = false;	
		
					
	}
	
	/**
	 * ���÷������� ���ַ�����
	 * @param string $outgoingEncoding ���������ַ�������
	 */
	function setOutgoingEncoding($outgoingEncoding)
	{
		$this->outgoingEncoding =  $outgoingEncoding;
		$this->soap->soap_defencoding = $this->outgoingEncoding;
		
	}
	

	/**
	 * ���ý������� ���ַ�����
	 * @param string $incomingEncoding ���������ַ�������
	 */
	function setIncomingEncoding($incomingEncoding)
	{
		$this->incomingEncoding =  $incomingEncoding;
		$this->soap->xml_encoding = $this->incomingEncoding;
	}	
	
	
	
	function setNameSpace($ns)
	{
		$this->namespace = $ns;
	}
	
	function getSessionKey()
	{
		return $this->sessionKey;
	}
	
	function getError()
	{		
		return $this->soap->getError();
	}
	
	
	/**
	 * 
	 * ָ��һ�� session key �� ���е�¼����
	 * 
	 * @param string $sessionKey ָ��һ��session key 
	 * @return int �������״̬��
	 * 
	 * ������:
	 * 
	 * $sessionKey = $client->generateKey(); //�������6λ�� session key
	 * 
	 * if ($client->login($sessionKey)==0)
	 * {
	 * 	 //��¼�ɹ������������� $sessionKey �Ĳ����������Ժ���ز�����ʹ��
	 * }else{
	 * 	 //��¼ʧ�ܴ���
	 * }
	 * 
	 * 
	 */
	function login($sessionKey='')
	{
		if ($sessionKey!='')
		{
			$this->sessionKey = $sessionKey;
		}
		
		$params = array('arg0'=>$this->serialNumber,'arg1'=>$this->sessionKey, 'arg2'=>$this->password);
		
		$result = $this->soap->call("registEx",$params,	$this->namespace);

		
		return $result;
	}
	
	
	/**
	 * ע������  (ע:�˷�������Ϊ�ѵ�¼״̬�·��ɲ���)
	 * 
	 * @return int �������״̬��
	 * 
	 * ֮ǰ�����sessionKey��������
	 * ����Ҫ��������login
	 */
	function logout()
	{
		$params = array('arg0'=>$this->serialNumber,'arg1'=>$this->sessionKey);
		print_r($params); 
		$result = $this->soap->call("logout", $params ,
			$this->namespace
		);

		return $result;
	}
	
	/**
	 * ��ȡ�汾��Ϣ
	 * @return string �汾��Ϣ
	 */
	function getVersion()
	{
		$result = $this->soap->call("getVersion",
			array(),
			$this->namespace
		);
		return $result;
	}
	

	
	/**
	 * ���ŷ���  (ע:�˷�������Ϊ�ѵ�¼״̬�·��ɲ���)
	 * 
	 * @param array $mobiles		�ֻ���, �� array('159xxxxxxxx'),�����Ҫ����ֻ���Ⱥ��,�� array('159xxxxxxxx','159xxxxxxx2') 
	 * @param string $content		��������
	 * @param string $sendTime		��ʱ����ʱ�䣬��ʽΪ yyyymmddHHiiss, ��Ϊ ����������������ʱʱ�ַ�����,����:20090504111010 ����2009��5��4�� 11ʱ10��10��
	 * 								�������Ҫ��ʱ���ͣ���Ϊ'' (Ĭ��)
	 *  
	 * @param string $addSerial 	��չ��, Ĭ��Ϊ ''
	 * @param string $charset 		�����ַ���, Ĭ��GBK
	 * @param int $priority 		���ȼ�, Ĭ��5
	 * @return int �������״̬��
	 */
	function sendSMS($mobiles=array(),$content,$sendTime='',$addSerial='',$charset='GBK',$priority=5)
	{
		
		$params = array('arg0'=>$this->serialNumber,'arg1'=>$this->sessionKey,'arg2'=>$sendTime,
			'arg4'=>$content,'arg5'=>$addSerial, 'arg6'=>$charset,'arg7'=>$priority
			);
			
		/**
		 * ������뷢�͵�xml���ݸ�ʽ�� 
		 * <arg3>159xxxxxxxx</arg3>
		 * <arg3>159xxxxxxx2</arg3>
		 * ....
		 * ������Ҫ����ĵ�������
		 * 
		 */
		foreach($mobiles as $mobile)
		{
			array_push($params,new soapval("arg3",false,$mobile));	
		}
		$result = $this->soap->call("sendSMS",$params,$this->namespace);
		return $result;
		
	}
	
	
	/**
	 * ����ѯ  (ע:�˷�������Ϊ�ѵ�¼״̬�·��ɲ���)
	 * @return double ���
	 */
	function getBalance()
	{
		$params = array('arg0'=>$this->serialNumber,'arg1'=>$this->sessionKey);
		$result = $this->soap->call("getBalance",$params,$this->namespace);
		return $result;
		
	}
	
	/**
	 * ȡ������ת��  (ע:�˷�������Ϊ�ѵ�¼״̬�·��ɲ���)
	 * @return int �������״̬��
	 */
	function cancelMOForward()
	{
		$params = array('arg0'=>$this->serialNumber,'arg1'=>$this->sessionKey);
		$result = $this->soap->call("cancelMOForward",$params,$this->namespace);
		return $result;
	}
	
	/**
	 * ���ų�ֵ  (ע:�˷�������Ϊ�ѵ�¼״̬�·��ɲ���)
	 * @param string $cardId [��ֵ������]
	 * @param string $cardPass [����]
	 * @return int �������״̬��
	 * 
	 * ��ͨ������������Ա��ȡ [��ֵ������]����Ϊ20�� [����]����Ϊ6
	 */
	function chargeUp($cardId, $cardPass)
	{
		$params = array('arg0'=>$this->serialNumber,'arg1'=>$this->sessionKey,'arg2'=>$cardId,'arg3'=>$cardPass);
		$result = $this->soap->call("chargeUp",$params,$this->namespace);
		return $result;
	}
	
	
	/**
	 * ��ѯ��������  (ע:�˷�������Ϊ�ѵ�¼״̬�·��ɲ���)
	 * @return double ��������
	 */
	function getEachFee()
	{
		$params = array('arg0'=>$this->serialNumber,'arg1'=>$this->sessionKey);
		$result = $this->soap->call("getEachFee",$params,$this->namespace);
		return $result;
	}
	

	/**
	 * �õ����ж���  (ע:�˷�������Ϊ�ѵ�¼״̬�·��ɲ���)
	 * 
	 * @return array ���ж����б�, ÿ��Ԫ����Mo����, Mo�������ݲο�������
	 * 
	 * 
	 * ��:
	 * 
	 * $moResult = $client->getMO();
	 * echo "��������:".count($moResult);
	 * foreach($moResult as $mo)
	 * {
	 * 	  //$mo ��λ�� Client.php ��� Mo ����
	 * 	  echo "�����߸�����:".$mo->getAddSerial();
	 *	  echo "�����߸�����:".$mo->getAddSerialRev();
	 *	  echo "ͨ����:".$mo->getChannelnumber();
	 *	  echo "�ֻ���:".$mo->getMobileNumber();
	 * 	  echo "����ʱ��:".$mo->getSentTime();
	 *	  echo "��������:".$mo->getSmsContent();
	 * }
	 * 
	 * 
	 */
	function getMO()
	{
		$ret = array();
		$params = array('arg0'=>$this->serialNumber,'arg1'=>$this->sessionKey);
		$result = $this->soap->call("getMO",$params,$this->namespace);
		//print_r($this->soap->response);
		//print_r($result);
		if (is_array($result) && count($result)>0)
		{
			if (is_array($result[0]))
			{
				foreach($result as $moArray)
					$ret[] = new Mo($moArray);	
			}else{
				$ret[] = new Mo($result);
			}
				
		}
		return $ret;
	}
	
	/**
	 * �õ�״̬����  (ע:�˷�������Ϊ�ѵ�¼״̬�·��ɲ���)
	 * @return array ״̬�����б�, һ�����ȡ5��
	 */
	function getReport()
	{
		$params = array('arg0'=>$this->serialNumber,'arg1'=>$this->sessionKey);
		$result = $this->soap->call("getReport",$params,$this->namespace);
		return $result;
	}
	
	


	/**
	 * ��ҵע��  [��������]����Ϊ6 ������������Ϊ20����
	 * 
	 * @param string $eName 	��ҵ����
	 * @param string $linkMan 	��ϵ������
	 * @param string $phoneNum 	��ϵ�绰
	 * @param string $mobile 	��ϵ�ֻ�����
	 * @param string $email 	��ϵ�����ʼ�
	 * @param string $fax 		�������
	 * @param string $address 	��ϵ��ַ
	 * @param string $postcode  ��������
	 * 
	 * @return int �������״̬��
	 * 
	 */
	function registDetailInfo($eName,$linkMan,$phoneNum,$mobile,$email,$fax,$address,$postcode)
	{
		
		$params = array('arg0'=>$this->serialNumber,'arg1'=>$this->sessionKey,
			'arg2'=>$eName,'arg3'=>$linkMan,'arg4'=>$phoneNum,
			'arg5'=>$mobile,'arg6'=>$email,'arg7'=>$fax,'arg8'=>$address,'arg9'=>$postcode		
		);
		
		$result = $this->soap->call("registDetailInfo",$params,$this->namespace);
		return $result;
		
	}

   
  
   	/**
   	 * �޸�����  (ע:�˷�������Ϊ�ѵ�¼״̬�·��ɲ���)
   	 * @param string $newPassword ������
   	 * @return int �������״̬��
   	 */
   	function updatePassword($newPassword) 
   	{
   		
   		$params = array('arg0'=>$this->serialNumber,'arg1'=>$this->sessionKey,
			'arg2'=>$this->password,'arg3'=>$newPassword		
		);
		
		$result = $this->soap->call("serialPwdUpd",$params,$this->namespace);
		return $result;
		
   	}       
   	
   	/**
   	 * 
   	 * ����ת��
   	 * @param string $forwardMobile ת�����ֻ�����
   	 * @return int �������״̬��
   	 * 
   	 */
   	function setMOForward($forwardMobile)
   	{
   		
   		$params = array('arg0'=>$this->serialNumber,'arg1'=>$this->sessionKey,
			'arg2'=>$forwardMobile	
		);
		
		$result = $this->soap->call("setMOForward",$params,$this->namespace);
		return $result;
   	}
   	
   	/**
   	 * ����ת����չ
   	 * @param array $forwardMobiles ת�����ֻ������б�, �� array('159xxxxxxxx','159xxxxxxxx');
   	 * @return int �������״̬��
   	 */
   	function setMOForwardEx($forwardMobiles=array())
   	{
   		
		$params = array('arg0'=>$this->serialNumber,'arg1'=>$this->sessionKey);
			
		/**
		 * ������뷢�͵�xml���ݸ�ʽ�� 
		 * <arg2>159xxxxxxxx</arg2>
		 * <arg2>159xxxxxxx2</arg2>
		 * ....
		 * ������Ҫ����ĵ�������
		 * 
		 */
		foreach($forwardMobiles as $mobile)
		{
			array_push($params,new soapval("arg2",false,$mobile));	
		}
		
		$result = $this->soap->call("setMOForwardEx",$params,$this->namespace);
		return $result;   		
   		
   		
   	}
   
	
	/**
	 * ����6λ�����
	 */
	function generateKey()
	{
		return rand(100000,999999);
	}
	
	
}

class Mo{
	
	/**
	 * �����߸�����
	 */
	var $addSerial;
	
	/**
	 * �����߸�����
	 */
	var $addSerialRev;
	
	/**
	 * ͨ����
	 */
	var $channelnumber;
	
	/**
	 * �ֻ���
	 */
	var $mobileNumber;
	
	/**
	 * ����ʱ��
	 */
	var $sentTime;
	
	/**
	 * ��������
	 */
	var $smsContent;
	
	function Mo(&$ret=array())
	{
		$this->addSerial = $ret[addSerial];
		$this->addSerialRev = $ret[addSerialRev];
		$this->channelnumber = $ret[channelnumber];
		$this->mobileNumber = $ret[mobileNumber];
		$this->sentTime = $ret[sentTime];
		$this->smsContent = $ret[smsContent];
		
	}
	
	function getAddSerial()
	{
		return $this->addSerial;
	}
	function getAddSerialRev()
	{
		return $this->addSerialRev;
	}
	function getChannelnumber()
	{
		return $this->channelnumber;
	}
	function getMobileNumber()
	{
		return $this->mobileNumber;
	}
	function getSentTime()
	{
		return $this->sentTime;
	}
	function getSmsContent()
	{
		return $this->smsContent;
	}
	
	
	
	
}

?>

