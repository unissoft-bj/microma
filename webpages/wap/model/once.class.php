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
class once_controller extends common
{
	function index_action()
	{
		$this->get_moblie();
		$this->yunset("title","΢��Ƹ");
		$this->yuntpl(array('wap/once'));
	}
	function show_action()
	{
		$this->get_moblie();
		$this->yunset("title","΢��Ƹ");
		$row=$this->obj->DB_select_once("once_job","`id`='".$_GET[id]."'");
		$row['ctime']=date("Y-m-d",$row[ctime]);
		$this->yunset("row",$row);
		$this->yuntpl(array('wap/once_show'));
	}
}
?>