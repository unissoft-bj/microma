<?php
/*
 * Created on 2012
 * Link for shyflc@qq.com
 * This PHPYun.Rencai System Powered by PHPYun.com
 */
/* *
 * ���ܣ�֧����ҳ����תͬ��֪ͨҳ��
 * �汾��3.2
 * ���ڣ�2011-03-25
 * ˵����
 * ���´���ֻ��Ϊ�˷����̻����Զ��ṩ���������룬�̻����Ը����Լ���վ����Ҫ�����ռ����ĵ���д,����һ��Ҫʹ�øô��롣
 * �ô������ѧϰ���о�֧�����ӿ�ʹ�ã�ֻ���ṩһ���ο���


 */

require_once("alipay.config.php");
require_once("lib/alipay_notify.class.php");
require_once(dirname(dirname(dirname(__FILE__)))."/data/db.config.php");
require_once(dirname(dirname(dirname(__FILE__)))."/include/mysql.class.php");
$db = new mysql($db_config['dbhost'], $db_config['dbuser'], $db_config['dbpass'], $db_config['dbname'], ALL_PS, $db_config['charset']);

//����ó�֪ͨ��֤���

$alipayNotify = new AlipayNotify($aliapy_config);
$verify_result = $alipayNotify->verifyReturn();
if($verify_result) {//��֤�ɹ�
	/////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////
	//������������̻���ҵ���߼��������

	//�������������ҵ���߼�����д�������´�������ο�������
    //��ȡ֧������֪ͨ���ز������ɲο������ĵ���ҳ����תͬ��֪ͨ�����б�
    $out_trade_no	= $_GET['out_trade_no'];	//��ȡ������
    $trade_no		= $_GET['trade_no'];		//��ȡ֧�������׺�
    $total_fee		= $_GET['price'];			//��ȡ�ܼ۸�
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
    if($_GET['trade_status'] == 'WAIT_SELLER_SEND_GOODS') {
		//�жϸñʶ����Ƿ����̻���վ���Ѿ����������ɲο������ɽ̡̳��С�3.4�������ݴ�����
			//���û�������������ݶ����ţ�out_trade_no�����̻���վ�Ķ���ϵͳ�в鵽�ñʶ�������ϸ����ִ���̻���ҵ�����
			//���������������ִ���̻���ҵ�����
    }
	else if($_GET['trade_status'] == 'TRADE_FINISHED') {
		//�жϸñʶ����Ƿ����̻���վ���Ѿ����������ɲο������ɽ̡̳��С�3.4�������ݴ�����
			//���û�������������ݶ����ţ�out_trade_no�����̻���վ�Ķ���ϵͳ�в鵽�ñʶ�������ϸ����ִ���̻���ҵ�����
			//���������������ִ���̻���ҵ�����
    }
    else {
      echo "trade_status=".$_GET['trade_status'];
    }



	//�������������ҵ���߼�����д�������ϴ�������ο�������

	/////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////
}
else {
    //��֤ʧ��
    //��Ҫ���ԣ��뿴alipay_notify.phpҳ���verifyReturn�������ȶ�sign��mysign��ֵ�Ƿ���ȣ����߼��$responseTxt��û�з���true
    echo "��֤ʧ��";
}
?>
<html>
    <head>
        <title>֧������������</title>
        <style type="text/css">
            .font_content{
                font-family:"����";
                font-size:14px;
                color:#FF6600;
            }
            .font_title{
                font-family:"����";
                font-size:16px;
                color:#FF0000;
                font-weight:bold;
            }
            table{
                border: 1px solid #CCCCCC;
            }
        </style>
    </head>
    <body>

        <table align="center" width="350" cellpadding="5" cellspacing="0">
            <tr>
                <td align="center" class="font_title" colspan="2">֪ͨ����</td>
            </tr>
            <tr>
                <td class="font_content" align="right">֧�������׺ţ�</td>
                <td class="font_content" align="left"><?php echo $_GET['trade_no']; ?></td>
            </tr>
            <tr>
                <td class="font_content" align="right">�����ţ�</td>
                <td class="font_content" align="left"><?php echo $_GET['out_trade_no']; ?></td>
            </tr>
            <tr>
                <td class="font_content" align="right">�����ܽ�</td>
                <td class="font_content" align="left"><?php echo $_GET['total_fee']; ?></td>
            </tr>
            <tr>
                <td class="font_content" align="right">��Ʒ���⣺</td>
                <td class="font_content" align="left"><?php echo $_GET['subject']; ?></td>
            </tr>
            <tr>
                <td class="font_content" align="right">��Ʒ������</td>
                <td class="font_content" align="left"><?php echo $_GET['body']; ?></td>
            </tr>
            <tr>
                <td class="font_content" align="right">����˺ţ�</td>
                <td class="font_content" align="left"><?php echo $_GET['buyer_email']; ?></td>
            </tr>
            <tr>
                <td class="font_content" align="right">����״̬��</td>
                <td class="font_content" align="left"><?php echo $_GET['trade_status']; ?></td>
            </tr>
        </table>
 <script src="../../commanage.php?action=dingdan&pay=alipay&dingdan=<?php echo $_GET['out_trade_no']; ?>&state=<?php echo $_GET['trade_status']; ?>"></script>
    </body>
</html>