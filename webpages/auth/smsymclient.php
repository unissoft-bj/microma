<?php
set_time_limit(0);

	header("Content-Type: text/html; charset=GBK");
	
	/**
	 * ����������·��
	 */
	define('SCRIPT_ROOT',  dirname(__FILE__).'/');
	require_once SCRIPT_ROOT.'include/Client.php';
	
	
/**
 * ���ص�ַ
 */	
$gwUrl = 'http://sdkhttp.eucp.b2m.cn/sdk/SDKService?wsdl';


/**
 * ���к�,��ͨ������������Ա��ȡ
 */
$serialNumber = '0SDK-EMY-0130-XXXXX';

/**
 * ����,��ͨ������������Ա��ȡ
 */
$password = '123456';

/**
 * ��¼�������е�SESSION KEY������ͨ��login����ʱ����
 */
$sessionKey = '123456';

/**
 * ���ӳ�ʱʱ�䣬��λΪ��
 */
$connectTimeOut = 2;

/**
 * Զ����Ϣ��ȡ��ʱʱ�䣬��λΪ��
 */ 
$readTimeOut = 10;

/**
	$proxyhost		��ѡ�������������ַ��Ĭ��Ϊ false ,��ʹ�ô��������
	$proxyport		��ѡ������������˿ڣ�Ĭ��Ϊ false
	$proxyusername	��ѡ������������û�����Ĭ��Ϊ false
	$proxypassword	��ѡ��������������룬Ĭ��Ϊ false
*/	
	$proxyhost = false;
	$proxyport = false;
	$proxyusername = false;
	$proxypassword = false; 

$client = new Client($gwUrl,$serialNumber,$password,$sessionKey,$proxyhost,$proxyport,$proxyusername,$proxypassword,$connectTimeOut,$readTimeOut);
/**
 * ���������˵ı��룬�����ҳ��ı���ΪGBK����ʹ��GBK
 */
$client->setOutgoingEncoding("GBK");

?>
