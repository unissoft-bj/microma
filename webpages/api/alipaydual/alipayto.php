<?php
/*
 * Created on 2012
 * Link for shyflc@qq.com
 * This PHPYun.Rencai System Powered by PHPYun.com
 */
/* *
 * ���ܣ���׼˫�ӿڽ���ҳ
 * �汾��3.2
 * �޸����ڣ�2011-03-25
 * ˵����
 * ���´���ֻ��Ϊ�˷����̻����Զ��ṩ���������룬�̻����Ը����Լ���վ����Ҫ�����ռ����ĵ���д,����һ��Ҫʹ�øô��롣
 * �ô������ѧϰ���о�֧�����ӿ�ʹ�ã�ֻ���ṩһ���ο���

 *************************ע��*************************
 * ������ڽӿڼ��ɹ������������⣬���԰��������;�������
 * 1���̻��������ģ�https://b.alipay.com/support/helperApply.htm?action=consultationApply�����ύ���뼯��Э�������ǻ���רҵ�ļ�������ʦ������ϵ��Э�����
 * 2���̻��������ģ�http://help.alipay.com/support/232511-16307/0-16307.htm?sh=Y&info_type=9��
 * 3��֧������̳��http://club.alipay.com/read-htm-tid-8681712.html��
 * �������ʹ����չ���������չ���ܲ�������ֵ��

 * �ܽ����㷽ʽ�ǣ��ܽ��=price*quantity+logistics_fee+discount��
 * �����price����Ϊ�ܽ��������˷ѡ��ۿۡ����ﳵ�й�����Ʒ�ܶ�ȼ��������ն�����Ӧ���ܶ
 * ������������ֻʹ��һ�飬����������̻���վ���µ�ʱѡ����������ͣ���ݡ�ƽ�ʡ�EMS���������Զ�ʶ��logistics_type�����������е�һ��ֵ
 * ���ҿ�ݹ�˾������EXPRESS����ݣ��ķ���
 */

require_once("alipay.config.php");
require_once("lib/alipay_service.class.php");
require_once(dirname(dirname(dirname(__FILE__)))."/data/db.config.php");
require_once(dirname(dirname(dirname(__FILE__)))."/include/mysql.class.php");
$db = new mysql($db_config['dbhost'], $db_config['dbuser'], $db_config['dbpass'], $db_config['dbname'], ALL_PS, $db_config['charset']);
if(!is_numeric($_POST['dingdan']))
{
	die;
}
$userid=(int)$_COOKIE['uid'];

$sql=$db->query("select * from `".$db_config["def"]."company_order` where `order_id`='$_POST[dingdan]'");
$row=mysql_fetch_array($sql);
if($_POST['balance']&&$userid){//���ʹ������
	$c_sql=$db->query("select `pay` from `".$db_config["def"]."company_statis` where `uid`='".$userid."'");//��ѯ���
	$company_statis=mysql_fetch_array($c_sql);
	if($company_statis['pay']>=$row['order_price']){//��������ڶ������
		$up_sql=$db->query("update `".$db_config["def"]."company_statis` set `pay`=`pay`-'".$row['order_price']."' where `uid`='".$userid."'");
		mysql_fetch_array($up_sql);//�����˻����

		$up_order=$db->query("update `".$db_config["def"]."company_order` set `order_price`='0'".$invoice_title." where `order_id`='".$row['order_id']."'");
		mysql_fetch_array($up_order);//���Ķ���δ�����
		$price=$row['order_price'];
	}else{
		$price=$company_statis['pay'];
		$up_sql=$db->query("update `".$db_config["def"]."company_statis` set `pay`='0' where `uid`='".$userid."'");
		$up_sql_status=mysql_fetch_array($up_sql);//�����˻����

		$up_order=$db->query("update `".$db_config["def"]."company_order` set `order_price`=`order_price`-'".$price."'".$invoice_title." where `order_id`='".$row['order_id']."'");
		mysql_fetch_array($up_order); //���Ķ���δ����� 
	}
	$insert_company_pay=$db->query("insert into `".$db_config["def"]."company_pay`(order_id,order_price,pay_time,pay_state,com_id,pay_remark,type) values('".$row['order_id']."','-".$price."','".time()."','2','".$userid."','".$row['order_remark']."','2')");
	mysql_fetch_array($insert_company_pay);
	$new_sql=$db->query("select * from `".$db_config["def"]."company_order` where `order_id`='".$row['order_id']."'");//�ٴβ�ѯ���
	$row=mysql_fetch_array($new_sql);
}
/**************************�������**************************/

//�������//

$out_trade_no		= $_POST['dingdan'];		//�������վ����ϵͳ�е�Ψһ������ƥ��
$subject			= $_POST['dingdan'];	//�������ƣ���ʾ��֧��������̨��ġ���Ʒ���ơ����ʾ��֧�����Ľ��׹���ġ���Ʒ���ơ����б��
$body				= $row['order_remark'];	//����������������ϸ��������ע����ʾ��֧��������̨��ġ���Ʒ��������
$price				= $row['order_price'];	//�����ܽ���ʾ��֧��������̨��ġ�Ӧ���ܶ��

$logistics_fee		= "0.00";				//�������ã����˷ѡ�
$logistics_type		= "EXPRESS";			//�������ͣ�����ֵ��ѡ��EXPRESS����ݣ���POST��ƽ�ʣ���EMS��EMS��
$logistics_payment	= "SELLER_PAY";			//����֧����ʽ������ֵ��ѡ��SELLER_PAY�����ҳе��˷ѣ���BUYER_PAY����ҳе��˷ѣ�

$quantity			= "1";					//��Ʒ����������Ĭ��Ϊ1�����ı�ֵ����һ�ν��׿�����һ���¶������ǹ���һ����Ʒ��

//ѡ�����//

//����ջ���Ϣ���Ƽ���Ϊ���
//�ù���������������Ѿ����̻���վ���µ����������һ���ջ���Ϣ��������Ҫ�����֧�����ĸ����������ٴ���д�ջ���Ϣ��
//��Ҫʹ�øù��ܣ������ٱ�֤receive_name��receive_address��ֵ
//�ջ���Ϣ��ʽ���ϸ�����������ַ���ʱࡢ�绰���ֻ��ĸ�ʽ��д
$receive_name		= trim($aliapy_config['receive_name']);			//�ջ����������磺����
$receive_address	= trim($aliapy_config['receive_address']);			//�ջ��˵�ַ���磺XXʡXXX��XXX��XXX·XXXС��XXX��XXX��ԪXXX��
$receive_zip		= "123456";				//�ջ����ʱ࣬�磺123456
$receive_phone		= trim($aliapy_config['receive_phone']);		//�ջ��˵绰���룬�磺0571-81234567
$receive_mobile		= trim($aliapy_config['receive_phone']);		//�ջ����ֻ����룬�磺13312341234

//��վ��Ʒ��չʾ��ַ���������?id=123�����Զ������
$show_url			= trim($aliapy_config['showurl']);

/************************************************************/

//����Ҫ����Ĳ�������
$parameter = array(
		"service"		=> "trade_create_by_buyer",
		"payment_type"	=> "1",

		"partner"		=> trim($aliapy_config['partner']),
		"_input_charset"=> trim(strtolower($aliapy_config['input_charset'])),
		"seller_email"	=> trim($aliapy_config['seller_email']),
		"return_url"	=> trim($aliapy_config['return_url']),
		"notify_url"	=> trim($aliapy_config['notify_url']),

		"out_trade_no"	=> $out_trade_no,
		"subject"		=> $subject,
		"body"			=> $body,
		"price"			=> $price,
		"quantity"		=> $quantity,

		"logistics_fee"		=> $logistics_fee,
		"logistics_type"	=> $logistics_type,
		"logistics_payment"	=> $logistics_payment,

		"receive_name"		=> $receive_name,
		"receive_address"	=> $receive_address,
		"receive_zip"		=> $receive_zip,
		"receive_phone"		=> $receive_phone,
		"receive_mobile"	=> $receive_mobile,

		"show_url"		=> $show_url
);

//�����׼˫�ӿ�
$alipayService = new AlipayService($aliapy_config);
$html_text = $alipayService->trade_create_by_buyer($parameter);
echo $html_text;

?>
