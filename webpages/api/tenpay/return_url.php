<?php
/*
 * Created on 2012
 * Link for shyflc@qq.com
 * This PHPYun.Rencai System Powered by PHPYun.com
 */
//---------------------------------------------------------
//�Ƹ�ͨ��ʱ����֧��Ӧ�𣨴���ص���ʾ�����̻����մ��ĵ����п�������
//---------------------------------------------------------

require_once ("./classes/PayResponseHandler.class.php");
require_once ("tenpay_data.php");

//���뱾վ����
require_once(dirname(dirname(dirname(__FILE__)))."/data/db.config.php");
require_once(dirname(dirname(dirname(__FILE__)))."/include/mysql.class.php");
$db = new mysql($db_config['dbhost'], $db_config['dbuser'], $db_config['dbpass'], $db_config['dbname'], ALL_PS, $db_config['charset']);

/* ��Կ */
$key =$tenpay[sy_tenpaycode];

/* ����֧��Ӧ����� */
$resHandler = new PayResponseHandler();
$resHandler->setKey($key);

//�ж�ǩ��
if($resHandler->isTenpaySign()) {

	//���׵���
	$transaction_id = $resHandler->getParameter("transaction_id");

	//��վ����
	$sp_billno = $resHandler->getParameter("sp_billno");

	//���,�Է�Ϊ��λ
	$total_fee = $resHandler->getParameter("total_fee");

	//֧�����
	$pay_result = $resHandler->getParameter("pay_result");
	//����
	$attach = $resHandler->getParameter("attach");

	if( "0" == $pay_result ) {

		//------------------------------
		//����ҵ��ʼ
		//------------------------------

		//ע�⽻�׵���Ҫ�ظ�����
		//ע���жϷ��ؽ��
//����վ��Ϣ��ʼ
	if(!is_numeric($sp_billno))
	{
		die;
	}
	$select=$db->query("select  * from `".$db_config[def]."company_order` where `order_id`='$dingdan'");
	$order=mysql_fetch_array($select);
	if($order['order_state']!='2'){
		if($order['type']=='1'&&$order['rating']){
			$select_rating=$db->query("select `* from `".$db_config[def]."company_rating` where `id`='".$order['rating']."'");
			$row=mysql_fetch_array($select_rating);
			$value="`rating`='".$row['id']."',";
			$value.="`rating_name`='".$row['name']."',";
			if($row['type']=="2"){
				if($statis['vip_etime']==0){
					$viptime=mktime()+$row['service_time']*86400;
				}else{
					$viptime=$row['service_time']*86400;
				}
				$value.="`vip_etime`=`vip_etime`+'".$viptime."'";
			}else{
				$value.="`job_num`=`job_num`+".$row['job_num'].",";
				$value.="`down_resume`=`down_resume`+".$row['resume'].",";
				$value.="`invite_resume`=`invite_resume`+".$row['interview'].",";
				$value.="`editjob_num`=`editjob_num`+".$row['editjob_num'].",";
				$value.="`breakjob_num`=`breakjob_num`+".$row['breakjob_num']."";
			}
			mysql_query("update `".$db_config[def]."company_statis` set ".$value." where `uid`='".$order["uid"]."'");
		}else if($order['type']=='2'){//��ֵ����
			$num=ceil($order['order_price']*$db_config['integral_proportion']);
			mysql_query("update `".$db_config[def]."company_statis` set `integral`=`integral`+'".$num."' where `uid`='".$order["uid"]."'");
		}else if($order['type']=='3'){//����ת��
			mysql_query("update `".$db_config[def]."company_statis` set `pay`=`pay`+".$order["order_price"].",`all_pay`=`all_pay`+".$order["order_price"]."' where `uid`='".$order["uid"]."'");
		}
		mysql_query("update `".$db_config[def]."company_order` set `order_state`='2' where `id`='".$order['id']."'");
	}
	@file_get_contents($tenpaydata["sy_weburl"]."/index.php?m=ajax&c=paypost&dingdan=".$sp_billno);
	mysql_query("update `".$db_config["def"]."company_order` set order_state='2' where `order_id`='$sp_billno'");
//����վ��Ϣ����




		//------------------------------
		//����ҵ�����
		//------------------------------

		//����doShow, ��ӡmetaֵ��js����,���߲Ƹ�ͨ����ɹ�,�����û��������ʾ$showҳ��.
		$show = $tenpay[sy_weburl]."/app/tenpay/show.php";
		$resHandler->doShow($show);

	} else {
		//�������ɹ�����
		echo "<br/>" . "֧��ʧ��" . "<br/>";
	}

} else {
	echo "<br/>" . "��֤ǩ��ʧ��" . "<br/>";
}

//echo $resHandler->getDebugInfo();

?>