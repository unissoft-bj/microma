<?php
/*
* 数据库类
 * 说明:系统底层数据库核心类
 *      调用这个类前,请先设定这些外部变量
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
	var $host     = "localhost";			//mysql主机名
	var $user     = "root";			//mysql用户名
	var $pwd      = "232";			//mysql密码
	var $dbName   = "";			//mysql数据库名称
	var $dbPrefix = "";			//mysql数据库表前缀
	var $dbcharset= "";			//mysql数据库字符集
	var $linkID   = 0;			//用来保存连接ID
	var $queryID  = 0;			//用来保存查询ID
	var $fetchMode= MYSQL_ASSOC;//取记录时的模式
	var $queryTimes= 0;		//保存查询的次数
	var $errno    = 0;			//mysql出错代号
	var $error    = "";			//mysql出错信息
	var $pconnect =0;
	var $safeCheck =0;
	var $sqlecho="";
	//var $record   = array();	//一条记录数组

	//======================================
	// 函数: __construct()
	// 功能: 构造函数
	// 参数: 参数类的变量定义
	// 说明: 构造函数将自动连接数据库
	//      如果想手动连接去掉连接函数
	//======================================
	function __construct()
	{	//if(empty($host) || empty($user) || empty($dbName))
			//$this->halt("数据库主机地址,用户名或数据库名称不完全,请检查!");
		//$this->linkID = 0;
    $this->host   =  $GLOBALS['cfg_dbhost'];
        $this->user   =  $GLOBALS['cfg_dbuser'];
        $this->pwd    =   $GLOBALS['cfg_dbpwd'];
        $this->dbName   =  $GLOBALS['cfg_dbname'];
        $this->dbPrefix =  $GLOBALS['cfg_dbprefix'];
        $this->dbcharset =  $GLOBALS['cfg_charset']; 
    $this->Init;
     //echo $this->pwd;
		$this->connect($this->host,$this->user,$this->pwd,$this->dbName);//设置为自动连接
	}
	
	//初始化变量
	//function Init()
    //{
        
        //$this->queryString = '';
        //$this->parameters = Array();
        
        //$this->result["me"] = 0;
       // $this->Open($pconnect);
   // }
	
	//======================================
	// 函数: connect($host,$user,$pwd,$dbName)
	// 功能: 连接数据库
	// 参数: $host 主机名, $user 用户名
	// 参数: $pwd 密码, $dbName 数据库名称
	// 返回: 0:失败
	// 说明: 默认使用类中变量的初始值
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
		//开始连接mysql的库
		 
		if (!mysql_select_db($this->dbName, $this->linkID))
		{
			$this->halt();
			return 0;
		}
		
		return $this->link;			
	}
	//======================================
	// 函数: query($sql)
	// 功能: 数据查询
	// 参数: $sql 要查询的SQL语句
	// 返回: 0:失败
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
			$this->halt("sql语句有问题");
			return 0;
		}
		return $this->queryID;
	}
	function q($sql="")
	{
		return $this->query($sql);
	}
	//======================================
	// 函数: setFetchMode($mode)
	// 功能: 设置取得记录的模式
	// 参数: $mode 模式 MYSQL_ASSOC, MYSQL_NUM, MYSQL_BOTH
	// 返回: 0:失败
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
			$this->halt("错误的模式.");
			return 0;
		}
		
	}
	//======================================
	// 函数: fetchRow()
	// 功能: 从记录集中取出一条记录
	// 返回: 0: 出错 record: 一条记录
	//======================================
	function fetchRow($sql="")
	{
		if (!empty($sql)){$this->query($sql);}
		$this->record = mysql_fetch_array($this->queryID,$this->fetchMode);
		return $this->record;
	}
	//别名
	function r($sql="")
	{
		return $this->fetchRow($sql);
	}
	//======================================
	// 函数: fetchAll()
	// 功能: 从记录集中取出所有记录
	// 返回: 记录集数组
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
	//别名
	function a($sql="")
	{
		 
		return $this->fetchAll($sql);
	}
	//======================================
	// 函数: getValue()
	// 功能: 返回记录中指定字段的数据
	// 参数: $field 字段名或字段索引
	// 返回: 指定字段的值
	//======================================
	function getValue($field)
	{
		return $this->record[$field];
	}
	//======================================
	// 函数: affectedRows()
	// 功能: 返回影响的记录数
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
	// 函数: recordCount()
	// 功能: 返回查询记录的总数
	// 参数: 无
	// 返回: 记录总数
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
	// 函数: getQueryTimes()
	// 功能: 返回查询的次数
	// 参数: 无
	// 返回: 查询的次数
	//======================================
	function getQueryTimes()
	{
		return $this->queryTimes;
	}
	//======================================
	// 函数:  Version()
	// 功能: 返回mysql的版本
	// 参数: 无
	//======================================
	function version() 
	{
		 
		return mysql_get_server_info($this->linkID);
 
	}
	//======================================
	// 函数: getDBSize($dbName, $tblPrefix=null)
	// 功能: 返回数据库占用空间大小
	// 参数: $dbName 数据库名
	// 参数: $tblPrefix 表的前缀,可选
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
	 * 插入数据
	 *
	 * @param string $table			表名<br />
	 * @param array $field_values	数据数组<br />
	 * @return id					最后插入ID
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
	 * 更新数据
	 *
	 * @param string $table			要更新的表<br />
	 * @param array $field_values	要更新的数据，使用而为数据例:array('列表1'=>'数值1','列表2'=>'数值2')
	 * @param string $where 		更新条件
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
	 * 删除数据
	 *
	 * @param string $table	要删除的表<br />
	 * @param string $where	删除条件，默认删除整个表
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
	 * 获取列 
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
	// 函数: insertID()
	// 功能: 返回最后一次插入的自增ID
	// 参数: 无
	//======================================
	function insertID() {
		return mysql_insert_id();
	}
	//====================================== 
	// 函数: error()
	// 功能: 返回mysql的错误信息
	// 参数: 无
	//=====================================
	function error() {
		return (($this->link) ? mysql_error($this->link) : mysql_error());
	}
	//====================================== 
	// 函数: errno()
	// 功能: 返回mysql的错误号
	// 参数: 无
	//=====================================
	function errno() {
		return intval(($this->link) ? mysql_errno($this->link) : mysql_errno());
	}	
	
	//====================================== 
	// 函数: halt($err_msg)
	// 功能: 处理所有出错信息
	// 参数: $err_msg 自定义的出错信息
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
	// 函数: CheckSql($db_string,$querytype='select')
	// 功能: sql语句安全性检测
	// 参数: $db_string sql语句
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

        //如果是普通查询语句，直接过滤一些特殊语法
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

        //完整的SQL检查
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

        //老版本的Mysql并不支持union，常用的程序里也不使用union，但是一些黑客使用它，所以检查它
        if (strpos($clean, 'union') !== FALSE && preg_match('~(^|[^a-z])union($|[^[a-z])~s', $clean) != 0)
        {
            $fail = TRUE;
            $error="union detect";
        }

        //发布版本的程序可能比较少包括--,#这样的注释，但是黑客经常使用它们
        elseif (strpos($clean, '/*') > 2 || strpos($clean, '--') !== FALSE || strpos($clean, '#') !== FALSE)
        {
            $fail = TRUE;
            $error="comment detect";
        }

        //这些函数不会被使用，但是黑客会用它来操作文件，down掉数据库
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

        //老版本的MYSQL不支持子查询，我们的程序里可能也用得少，但是黑客可以使用它来查询数据库敏感信息
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