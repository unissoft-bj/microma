<?php
$GLOBALS['cfg_dbhost']="127.0.0.1";
$GLOBALS['cfg_dbuser']="root";
$GLOBALS['cfg_dbpwd']="rootatussp";
$GLOBALS['cfg_dbname']="wlsp";
$GLOBALS['cfg_dbprefix']="";
$GLOBALS['cfg_charset']="utf8";
date_default_timezone_set("Asia/Shanghai");
$GLOBALS['cfg_webname']="Micro-ma website";
$GLOBALS['cfg_web_charset']="utf-8";
$cfg['timezone'] = 'PRC';   // 默认时区 PRC或者Etc/GMT-8
$cfg['timediff'] = '0';
$dy_time = time() + $cfg['timediff'];
$cfg['site'] = 'http://172.16.0.1/';
$cfg['cookie_path'] = '/';
$cfg['cookie_domain']='';
$cfg['path'] = 'ma/';
$cfg['siteurl'] = $cfg['site'].$cfg['path']; 
$GLOBALS['cfg_siteurl']=$cfg['site'].$cfg['path'];
  
?>