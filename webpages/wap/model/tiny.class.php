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
class tiny_controller extends common
{
	function index_action()
	{
		$this->get_moblie();
		$this->yunset("title","΢����");
		$this->yuntpl(array('wap/tiny'));
	}
	function show_action()
	{
		$this->get_moblie();
		$this->yunset("title","΢����");
		$this->user_cache();
		$row=$this->obj->DB_select_once("resume_tiny","`id`='".$_GET[id]."'");
		$this->yunset("row",$row);
		$this->yuntpl(array('wap/tiny_show'));
	}
}
?>