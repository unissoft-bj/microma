<?php
/*
* ��ݿ���
 * ˵��:ϵͳ�ײ���ݿ������
 *      ���������ǰ,�����趨��Щ�ⲿ����
 *      $GLOBALS['cfg_dbhost'];
 *      $GLOBALS['cfg_dbuser'];
 *      $GLOBALS['cfg_dbpwd'];
 *      $GLOBALS['cfg_dbname'];
 *      $GLOBALS['cfg_dbprefix'];
 * $GLOBALS['cfg_charset']
 *  make sure all sytax error are reported.
 *  $db = new mysql(); 
*/
require_once("config.inc.php");
$db = new mysql();
 
class mysql
{
	var $host     = "localhost";			//mysql������
	var $user     = "root";			//mysql�û���
	var $pwd      = "232";			//mysql����
	var $dbName   = "";			//mysql��ݿ����
	var $dbPrefix = "";			//mysql��ݿ��ǰ׺
	var $dbcharset= "";			//mysql��ݿ��ַ�
	var $linkID   = 0;			//������������ID
	var $queryID  = 0;			//���������ѯID
	var $fetchMode= MYSQL_ASSOC;//ȡ��¼ʱ��ģʽ
	var $queryTimes= 0;		//�����ѯ�Ĵ���
	var $errno    = 0;			//mysql������
	var $error    = "";			//mysql������Ϣ
	var $pconnect =0;
	var $safeCheck =0;
	var $sqlecho="";
	//var $record   = array();	//һ����¼����
	//======================================
	// ����: __construct()
	// ����: ���캯��
	// ����: ������ı�������
	// ˵��: ���캯���Զ�������ݿ�
	//      ������ֶ�����ȥ�����Ӻ���
	//======================================
	function __construct()
	{	//if(empty($host) || empty($user) || empty($dbName))
			//$this->halt("��ݿ������ַ,�û������ݿ���Ʋ���ȫ,����!");
		//$this->linkID = 0;
    $this->host   =  $GLOBALS['cfg_dbhost'];
        $this->user   =  $GLOBALS['cfg_dbuser'];
        $this->pwd    =   $GLOBALS['cfg_dbpwd'];
        $this->dbName   =  $GLOBALS['cfg_dbname'];
        $this->dbPrefix =  $GLOBALS['cfg_dbprefix'];
        $this->dbcharset =  $GLOBALS['cfg_charset']; 
    $this->Init;
     //echo $this->pwd;
		$this->connect($this->host,$this->user,$this->pwd,$this->dbName);//����Ϊ�Զ�����
		
	}
	
	//��ʼ������
	//function Init()
    //{
        
        //$this->queryString = '';
        //$this->parameters = Array();
        
        //$this->result["me"] = 0;
       // $this->Open($pconnect);
   // }
	
	//======================================
	// ����: connect($host,$user,$pwd,$dbName)
	// ����: ������ݿ�
	// ����: $host ������, $user �û���
	// ����: $pwd ����, $dbName ��ݿ����
	// ����: 0:ʧ��
	// ˵��: Ĭ��ʹ�����б����ĳ�ʼֵ
	//======================================
	function connect($host = "", $user = "", $pwd = "", $dbName = "",$pconnect = 0)
	{
		if($pconnect) {
			if(!$this->linkID = @mysql_pconnect($host, $user, $pwd)) {
				
				$this->halt();
				return 0;
			}
		} else {
			//echo $pwd;
			if(!$this->linkID = @mysql_connect($host, $user, $pwd, 1)) {
				
				$this->halt();
				return 0;
			}
		}
		
		if($this->version() > '4.1') {
			if($this->dbcharset) {
				
				mysql_query("SET character_set_connection=$this->dbcharset, character_set_results=$this->dbcharset, character_set_client=binary", $this->linkID);
			}
			if($this->version() > '5.0.1') {
				
				mysql_query("SET sql_mode=''", $this->linkID);
			}
		}
	 //mysql_query("set names asii"); 
		//��ʼ����mysql�Ŀ�
		 
		if (!mysql_select_db($this->dbName, $this->linkID))
		{
			$this->halt();
			return 0;
		}
		
		return $this->link;			
	}
	//======================================
	// ����: query($sql)
	// ����: ��ݲ�ѯ
	// ����: $sql Ҫ��ѯ��SQL���
	// ����: 0:ʧ��
	//======================================
	function query($sql)
	{
		$this->sqlecho=$sql;
		if($this->safeCheck)
        {
            $this->CheckSql($sql);
        }
		$this->queryTimes++;
		$this->queryID = mysql_query($sql, $this->linkID);
		if (!$this->queryID)
		{	
			$this->halt("sql���������");
			return 0;
		}
		return $this->queryID;
	}
	function q($sql="")
	{
		return $this->query($sql);
	}
	//======================================
	// ����: setFetchMode($mode)
	// ����: ����ȡ�ü�¼��ģʽ
	// ����: $mode ģʽ MYSQL_ASSOC, MYSQL_NUM, MYSQL_BOTH
	// ����: 0:ʧ��
	//======================================
	function setFetchMode($mode)
	{
		if ($mode == MYSQL_ASSOC || $mode == MYSQL_NUM || $mode == MYSQL_BOTH) 
		{
			$this->fetchMode = $mode;
			return 1;
		}
		else
		{
			$this->halt("�����ģʽ.");
			return 0;
		}
		
	}
	//======================================
	// ����: fetchRow()
	// ����: �Ӽ�¼����ȡ��һ����¼
	// ����: 0: ���� record: һ����¼
	//======================================
	function fetchRow($sql="")
	{
		if (!empty($sql)){$this->query($sql);}
		$this->record = mysql_fetch_array($this->queryID,$this->fetchMode);
		return $this->record;
	}
	//����
	function r($sql="")
	{
		return $this->fetchRow($sql);
	}
	//======================================
	// ����: fetchAll()
	// ����: �Ӽ�¼����ȡ�����м�¼
	// ����: ��¼������
	//======================================
	function fetchAll($sql="")
	{
		 
		if (!empty($sql)){$this->query($sql);}
		$arr = array();
		while($this->record = mysql_fetch_array($this->queryID,$this->fetchMode))
		{
			$arr[] = $this->record;
		}
		//mysql_free_result($this->queryID);
		return $arr;
	}
	//����
	function a($sql="")
	{
		 
		return $this->fetchAll($sql);
	}
	//======================================
	// ����: getValue()
	// ����: ���ؼ�¼��ָ���ֶε����
	// ����: $field �ֶ�����ֶ�����
	// ����: ָ���ֶε�ֵ
	//======================================
	function getValue($field)
	{
		return $this->record[$field];
	}
	//======================================
	// ����: affectedRows()
	// ����: ����Ӱ��ļ�¼��
	//======================================
	function affectedRows($sql="")
	{
		if (!empty($sql)){$this->query($sql);}
		return mysql_affected_rows($this->linkID);
	}
	function ac($sql="")
	{
		return $this->affectedRows($sql);
	}
	//======================================
	// ����: recordCount()
	// ����: ���ز�ѯ��¼������
	// ����: ��
	// ����: ��¼����
	//======================================
	
	function recordCount($sql="")
	{ 
		if (!empty($sql)){$this->query($sql);}
		return mysql_num_rows($this->queryID);
	}
	function rc($sql="")
	{
 		return $this->recordCount($sql);
	}
	
	
	
	function num_fields($query) {
		return mysql_num_fields($query);
	}
	 
  
	
 function free_result($query) {
		return @mysql_free_result($query);
	}
	 
	
	//======================================
	// ����: getQueryTimes()
	// ����: ���ز�ѯ�Ĵ���
	// ����: ��
	// ����: ��ѯ�Ĵ���
	//======================================
	function getQueryTimes()
	{
		return $this->queryTimes;
	}
	//======================================
	// ����:  Version()
	// ����: ����mysql�İ汾
	// ����: ��
	//======================================
	function version() 
	{
		 
		return mysql_get_server_info($this->linkID);
 
	}
	//======================================
	// ����: getDBSize($dbName, $tblPrefix=null)
	// ����: ������ݿ�ռ�ÿռ��С
	// ����: $dbName ��ݿ���
	// ����: $tblPrefix ���ǰ׺,��ѡ
	//======================================
	function getDBSize($dbName, $tblPrefix=null) 
	{
		$sql = "SHOW TABLE STATUS FROM " . $dbName;
		if($tblPrefix != null) {
			$sql .= " LIKE '$tblPrefix%'";
		}
		$this->query($sql);
		$size = 0;
		while($this->fetchRow())
			$size += $this->getValue("Data_length") + $this->getValue("Index_length");
		return $size;
	}
	
	/**
	 * �������
	 *
	 * @param string $table			����<br />
	 * @param array $field_values	�������<br />
	 * @return id					������ID
	 */
	function save($table, $field_values) {
		$fields = array ();
		$values = array ();
		$field_names = $this->getCol('DESC '.$table);
		foreach ( $field_names as $value ) {
			if (array_key_exists ( $value, $field_values ) == true) {
				$fields [] = $value;
				$values [] = "'" . $field_values [$value] . "'";
			}
		}
		if (!empty($fields)) {
			$sql = 'INSERT INTO '.$table.' ('.implode(',',$fields).') VALUES ('.implode ( ',',$values ).')';
			if($this->query ($sql)){
				return $this->insertID();
			}
		}
		return false;
	}
	
	/**
	 * �������
	 *
	 * @param string $table			Ҫ���µı�<br />
	 * @param array $field_values	Ҫ���µ���ݣ�ʹ�ö�Ϊ�����:array('�б�1'=>'��ֵ1','�б�2'=>'��ֵ2')
	 * @param string $where 		��������
	 * @return bool	
	 */	
	function update($table, $field_values, $where = '') {
		$field_names = $this->getCol ( 'DESC ' . $table );
		$sets = array ();
		foreach ( $field_names as $value ) {
			if (array_key_exists ( $value, $field_values ) == true) {
				$sets [] = $value . " = '" . $field_values [$value] . "'";
			}
		}
		if (! empty ( $sets )) {
			$sql = 'UPDATE ' . $table . ' SET ' . implode ( ', ', $sets ) . ' WHERE ' . $where;
		}
		if ($sql) {
			return $this->query ( $sql );
		} else {
			return false;
		}
	}
	
	/**
	 * ɾ�����
	 *
	 * @param string $table	Ҫɾ��ı�<br />
	 * @param string $where	ɾ��������Ĭ��ɾ�������
	 * @return bool
	 */	
	function delete($table,$where=''){
		if(empty($where)){
			$sql = 'DELETE FROM '.$table;
		}else{
			$sql = 'DELETE FROM '.$table.' WHERE '.$where;
		}
		if($this->query ( $sql )){
			return true;
		}else{
			return false;
		}
	}
	
	/**
	 * ��ȡ�� 
	 *
	 * @param string $sql
	 * @return array
	 */
	function getCol($sql) {
		$res = $this->query( $sql );
		if ($res !== false) {
			$arr = array ();
			$row = mysql_fetch_row ($res);
			while ($row) {
				$arr [] = $row [0];
				$row = mysql_fetch_row ($res);
			}
			return $arr;
		} else {
			return false;
		}
	}
	
	//======================================
	// ����: insertID()
	// ����: �������һ�β��������ID
	// ����: ��
	//======================================
	function insertID() {
		return mysql_insert_id();
	}
	//====================================== 
	// ����: error()
	// ����: ����mysql�Ĵ�����Ϣ
	// ����: ��
	//=====================================
	function error() {
		return (($this->link) ? mysql_error($this->link) : mysql_error());
	}
	//====================================== 
	// ����: errno()
	// ����: ����mysql�Ĵ����
	// ����: ��
	//=====================================
	function errno() {
		return intval(($this->link) ? mysql_errno($this->link) : mysql_errno());
	}	
	
	//====================================== 
	// ����: halt($err_msg)
	// ����: �������г�����Ϣ
	// ����: $err_msg �Զ���ĳ�����Ϣ
	//=====================================
	function halt($err_msg="")
	{
		if ("" == $err_msg)
		{
			echo "<b>mysql error:<b><br>";
			echo $this->errno.":".$this->error."<br>";
			echo $this->sqlecho."<br>";
			exit;
		}
		else
		{
			echo "<b>mysql error:<b><br>";
			echo $err_msg."<br>";
			echo $this->sqlecho."<br>";
			exit;
		}
	}
	//====================================== 
	// ����: CheckSql($db_string,$querytype='select')
	// ����: sql��䰲ȫ�Լ��
	// ����: $db_string sql���
	//=====================================
	function CheckSql($db_string,$querytype='select')
    {
        global $cfg_cookie_encode;
        $clean = '';
        $error='';
        $old_pos = 0;
        $pos = -1;
        $log_file =   md5($cfg_cookie_encode).'_safe.txt';
        $userIP = $this->GetIP();
        $getUrl = $this->GetCurUrl();
        //�������ͨ��ѯ��䣬ֱ�ӹ���һЩ�����﷨
        if($querytype=='select')
        {
            $notallow1 = "[^0-9a-z@\._-]{1,}(union|sleep|benchmark|load_file|outfile)[^0-9a-z@\.-]{1,}";
            //$notallow2 = "--|/\*";
            if(preg_match("/".$notallow1."/i", $db_string))
            {
               // fputs(fopen($log_file,'a+'),"$userIP||$getUrl||$db_string||SelectBreak\r\n");
                file_put_contents($log_file, date('Y-m-d H:i:s',time())."||$userIP||$getUrl||$db_string||SelectBreak\r\n",FILE_APPEND);
                exit("<font size='5' color='red'>Safe Alert: Request Error step 1 !</font>");
            }
        }
        //�����SQL���
        while (TRUE)
        {
            $pos = strpos($db_string, '\'', $pos + 1);
            if ($pos === FALSE)
            {
                break;
            }
            $clean .= substr($db_string, $old_pos, $pos - $old_pos);
            while (TRUE)
            {
                $pos1 = strpos($db_string, '\'', $pos + 1);
                $pos2 = strpos($db_string, '\\', $pos + 1);
                if ($pos1 === FALSE)
                {
                    break;
                }
                elseif ($pos2 == FALSE || $pos2 > $pos1)
                {
                    $pos = $pos1;
                    break;
                }
                $pos = $pos2 + 1;
            }
            $clean .= '$s$';
            $old_pos = $pos + 1;
        }
        $clean .= substr($db_string, $old_pos);
        $clean = trim(strtolower(preg_replace(array('~\s+~s' ), array(' '), $clean)));
        //�ϰ汾��Mysql����֧��union�����õĳ�����Ҳ��ʹ��union������һЩ�ڿ�ʹ�������Լ����
        if (strpos($clean, 'union') !== FALSE && preg_match('~(^|[^a-z])union($|[^[a-z])~s', $clean) != 0)
        {
            $fail = TRUE;
            $error="union detect";
        }
        //�����汾�ĳ�����ܱȽ��ٰ���--,#�����ע�ͣ����Ǻڿ;���ʹ������
        elseif (strpos($clean, '/*') > 2 || strpos($clean, '--') !== FALSE || strpos($clean, '#') !== FALSE)
        {
            $fail = TRUE;
            $error="comment detect";
        }
        //��Щ����ᱻʹ�ã����Ǻڿͻ������������ļ���down����ݿ�
        elseif (strpos($clean, 'sleep') !== FALSE && preg_match('~(^|[^a-z])sleep($|[^[a-z])~s', $clean) != 0)
        {
            $fail = TRUE;
            $error="slown down detect";
        }
        elseif (strpos($clean, 'benchmark') !== FALSE && preg_match('~(^|[^a-z])benchmark($|[^[a-z])~s', $clean) != 0)
        {
            $fail = TRUE;
            $error="slown down detect";
        }
        elseif (strpos($clean, 'load_file') !== FALSE && preg_match('~(^|[^a-z])load_file($|[^[a-z])~s', $clean) != 0)
        {
            $fail = TRUE;
            $error="file fun detect";
        }
        elseif (strpos($clean, 'into outfile') !== FALSE && preg_match('~(^|[^a-z])into\s+outfile($|[^[a-z])~s', $clean) != 0)
        {
            $fail = TRUE;
            $error="file fun detect";
        }
        //�ϰ汾��MYSQL��֧���Ӳ�ѯ�����ǵĳ��������Ҳ�õ��٣����ǺڿͿ���ʹ��������ѯ��ݿ�������Ϣ
        elseif (preg_match('~\([^)]*?select~s', $clean) != 0)
        {
            $fail = TRUE;
            $error="sub select detect";
        }
        if (!empty($fail))
        {
            //fputs(fopen($log_file,'a+'),"$userIP||$getUrl||$db_string||$error\r\n");
            file_put_contents($log_file, date('Y-m-d H:i:s',time())."||$userIP||$getUrl||$db_string||$error\r\n");
            exit("<font size='5' color='red'>Safe Alert: Request Error step 2!</font>");
        }
        else
        {
            return $db_string;
        }
    }
  
}

