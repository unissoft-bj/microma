/*
SQLyog 企业版 - MySQL GUI v8.14 
MySQL - 5.0.90-community-nt : Database - ihost-ma
*********************************************************************
*/

/*!40101 SET NAMES utf8 */;

/*!40101 SET SQL_MODE=''*/;

/*!40014 SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;
/*Table structure for table `actvrf` */

DROP TABLE IF EXISTS `actvrf`;

CREATE TABLE `actvrf` (
  `id` int(11) NOT NULL auto_increment,
  `srcid` int(11) default NULL,
  `level` varchar(16) default NULL,
  `dname` varchar(36) default NULL,
  `mlen` int(11) default NULL,
  `ltime` int(11) default NULL,
  `active` tinyint(4) default '1',
  `rectime` datetime default NULL,
  `type` tinyint(4) default '1',
  PRIMARY KEY  (`id`),
  KEY `level` (`level`),
  KEY `dname` (`dname`)
) ENGINE=MyISAM AUTO_INCREMENT=12 DEFAULT CHARSET=utf8;

/*Data for the table `actvrf` */

insert  into `actvrf`(`id`,`srcid`,`level`,`dname`,`mlen`,`ltime`,`active`,`rectime`,`type`) values (1,NULL,'0001.0000.0000','www.baidu.com',0,0,1,'2013-03-13 14:05:43',20),(2,NULL,'0002.0000.0000','www.google.com',0,0,1,'2013-03-13 14:13:33',20),(3,NULL,'0001.0001.0000','im.baidu.com',30,45,1,'2013-03-13 14:17:49',20),(4,NULL,'3000.0001.0000','360.cn',30,1200,1,'2013-03-13 14:18:19',20),(5,NULL,'9999.9999.9999','default',20,120,1,'2013-03-13 14:19:00',20),(6,NULL,'3000.0002.0000','sogou.com',20,600,1,'2013-03-13 14:29:41',20),(7,NULL,'9999.8001.0000','.jpg',4,300,1,'2013-03-13 15:29:11',10),(8,NULL,'9999.8002.0000','.png',4,300,1,'2013-03-13 15:29:11',10),(9,NULL,'9999.8003.0000','.gif',4,300,1,'2013-03-13 15:29:11',10),(10,NULL,'9999.8004.0000','.js',4,300,1,'2013-03-13 15:29:11',10),(11,NULL,'9999.8005.0000','.swf',4,300,1,'2013-03-14 09:27:18',10);

/*Table structure for table `actvst` */

DROP TABLE IF EXISTS `actvst`;

CREATE TABLE `actvst` (
  `id` int(11) NOT NULL auto_increment,
  `srcid` int(11) default NULL,
  `pkttime` datetime default NULL,
  `timefrac` float default NULL,
  `srcmac` varchar(64) default NULL,
  `srcip` varchar(64) default NULL,
  `destip` varchar(64) default NULL,
  `url` varchar(1024) default NULL,
  `rectime` datetime default NULL,
  `sender` varchar(36) default NULL,
  `netid` varchar(36) default NULL,
  `progid` varchar(36) default NULL,
  `optime` datetime default NULL,
  PRIMARY KEY  (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

/*Data for the table `actvst` */

/*Table structure for table `ad` */

DROP TABLE IF EXISTS `ad`;

CREATE TABLE `ad` (
  `id` int(20) NOT NULL auto_increment,
  `ad_name` varchar(100) NOT NULL,
  `did` int(11) NOT NULL default '0',
  `time_start` varchar(100) NOT NULL,
  `time_end` varchar(100) NOT NULL,
  `ad_type` varchar(10) NOT NULL,
  `word_info` text NOT NULL,
  `word_url` varchar(100) NOT NULL,
  `pic_url` varchar(100) NOT NULL,
  `pic_src` varchar(100) NOT NULL,
  `pic_width` varchar(100) NOT NULL,
  `pic_height` varchar(100) NOT NULL,
  `flash_url` varchar(100) default NULL,
  `flash_src` varchar(100) default NULL,
  `flash_width` varchar(100) default NULL,
  `flash_height` varchar(100) default NULL,
  `class_id` int(20) default NULL,
  `is_check` int(2) default '0',
  `target` int(2) default NULL,
  `is_open` int(2) default '1',
  PRIMARY KEY  (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=59 DEFAULT CHARSET=gbk;

/*Data for the table `ad` */

insert  into `ad`(`id`,`ad_name`,`did`,`time_start`,`time_end`,`ad_type`,`word_info`,`word_url`,`pic_url`,`pic_src`,`pic_width`,`pic_height`,`flash_url`,`flash_src`,`flash_width`,`flash_height`,`class_id`,`is_check`,`target`,`is_open`) values (3,'首页幻灯一',0,'2014-05-26','2015-06-30','pic','','','../upload/adpic/20140526/14024123357.JPG','http://www.phpyun.com','','',NULL,NULL,NULL,NULL,3,1,2,1),(2,'首页幻灯二',0,'2014-05-26','2015-05-28','pic','','','../upload/adpic/20140526/14034450721.GIF','http://www.phpyun.com','','',NULL,NULL,NULL,NULL,3,1,2,1),(1,'首页幻灯三',0,'2014-05-26','2015-05-29','pic','','','../upload/adpic/20140526/14066114537.GIF','http://www.phpyun.com','','',NULL,NULL,NULL,NULL,3,1,2,1),(4,'对联左侧',0,'2014-05-26','2015-05-21','pic','','','../upload/adpic/20140526/14039785055.JPG','http://www.phpyun.com','','',NULL,NULL,NULL,NULL,11,1,2,1),(5,'对联右侧',0,'2014-05-26','2015-05-21','pic','','','../upload/adpic/20140526/14019806657.GIF','http://www.phpyun.com','','',NULL,NULL,NULL,NULL,11,1,2,1),(6,'底部浮动',0,'2014-05-26','2015-05-30','pic','','','../upload/adpic/20140526/14089173228.PNG','http://www.phpyun.com','','',NULL,NULL,NULL,NULL,10,1,2,1);

/*Table structure for table `ad_class` */

DROP TABLE IF EXISTS `ad_class`;

CREATE TABLE `ad_class` (
  `id` int(20) NOT NULL auto_increment,
  `class_name` varchar(100) NOT NULL,
  `orders` int(20) NOT NULL,
  `href` varchar(100) NOT NULL,
  PRIMARY KEY  (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=28 DEFAULT CHARSET=gbk;

/*Data for the table `ad_class` */

insert  into `ad_class`(`id`,`class_name`,`orders`,`href`) values (1,'首页中部图片广告 规格：宽154 高50',1,''),(3,'首页幻灯广告规格：宽974高299',2,'http://www.hr135.com'),(4,'新闻页幻灯广告规格：宽240高220',3,'http://www.hr135.com'),(5,'首页收缩广告',5,'http://www.hr135.com'),(6,'首页横幅广告960X80',4,'http://www.hr135.com'),(7,'职位列表页广告',6,'http://www.hr135.com'),(8,'首页热门职位右侧广告285*51',1,'http://www.hr135.com'),(9,'猎头幻灯',8,'http://www.hr135.com'),(10,'网站底部浮动广告980*60',1,'http://www.hr135.com'),(11,'对联广告',1,'http://www.hr135.com'),(12,'首页最新人才右侧广告269*50',2,'http://www.hr135.com'),(13,'首页紧急招聘下横幅广告980*60',2,'http://www.hr135.com'),(14,'首页紧急招聘下双联横幅广告488*60',11,'http://www.hr135.com'),(15,'首页紧急招聘下三联联横幅广告325*60',1,'http://www.hr135.com'),(16,'职场资讯284*210',0,'http://www.hr135.com'),(27,'简历详情页右侧',1,'');

/*Table structure for table `admin_announcement` */

DROP TABLE IF EXISTS `admin_announcement`;

CREATE TABLE `admin_announcement` (
  `id` int(11) NOT NULL auto_increment,
  `title` varchar(255) NOT NULL,
  `keyword` varchar(255) NOT NULL,
  `description` varchar(255) NOT NULL,
  `content` text NOT NULL,
  `datetime` int(11) NOT NULL,
  `did` int(11) default '0',
  PRIMARY KEY  (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=20 DEFAULT CHARSET=gbk;

/*Data for the table `admin_announcement` */

insert  into `admin_announcement`(`id`,`title`,`keyword`,`description`,`content`,`datetime`,`did`) values (19,'php云详情咨询4008805523','php云,phpyun人才系统,人才CMS','php云详情咨询4008805523','<p>\r\n	phpyun人才系统授权咨询<br />\r\n咨询电话：4008805523<br />\r\n咨询电话：3367562\r\n</p>',1401106430,0);

/*Table structure for table `admin_config` */

DROP TABLE IF EXISTS `admin_config`;

CREATE TABLE `admin_config` (
  `name` varchar(255) NOT NULL,
  `config` text NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=gbk;

/*Data for the table `admin_config` */

insert  into `admin_config`(`name`,`config`) values ('sy_smtpemail',''),('sy_smtpuser',''),('sy_smtppass',''),('sy_smtpserverport',''),('sy_msguser',''),('sy_msgpw',''),('sy_msgapi',''),('sy_hotkeyword','php,php求职'),('sy_fkeyword','台湾,台独'),('sy_linksq','0'),('user_enforce_identitycert','0'),('com_enforce_emailcert','0'),('com_enforce_mobilecert','0'),('com_enforce_licensecert','0'),('com_enforce_setposition','0'),('lt_enforce_emailcert','1'),('lt_enforce_mobilecert','1'),('lt_enforce_licensecert','1'),('sy_webname','php云人才系统'),('sy_weburl',''),('sy_mrcity',''),('sy_webkeyword','Meta 关键词'),('map_rating','15'),('sy_webmeta','Meta 描述'),('map_x','116.403713'),('map_y','39.915202'),('sy_webcopyright','Copyright (C) 2009-2014 All Rights Reserved 版权所有 鑫潮(人力资源服务)'),('sy_webemail','admin@admin.com'),('sy_webrecord',''),('sy_webtel','400-880-5523'),('sy_freewebtel','400-880-5523'),('sy_webadd',''),('sy_mapkey','{config[sy_mapkey]}'),('sy_imgsite',''),('sy_smtpserver','smtp.qq.com'),('code_width','50'),('code_height','23'),('code_strlength','4'),('code_filetype','jpg'),('code_type','3'),('code_web','注册会员,前台登陆,一句话招聘,后台登陆'),('watermark_text','phpyun'),('watermark_size','20'),('watermark_color','#FF0000'),('watermark_transmission','50'),('watermark_site','9'),('watermark_online','0'),('paytype','1'),('alipay','0'),('tenpay','0'),('bank','0'),('style','default'),('sy_city_online',''),('sy_webclose','网站升级中！'),('sy_web_online','1'),('sy_istemplate','0'),('sy_uc_type',''),('user_number','6'),('user_sq_number','100'),('user_fav_number','100'),('user_pickb','2048'),('user_jobstatus','1'),('user_status','0'),('user_email','0'),('user_moblie','0'),('user_job','0'),('com_pickb','1024'),('com_jobstatus','0'),('com_email','0'),('com_moblie','0'),('integral_pricename','积分'),('integral_priceunit','个'),('com_integral_online','1'),('integral_resume','20'),('integral_job','10'),('integral_jobefresh','100'),('integral_jobedit','11'),('integral_interview','12'),('integral_reg','100'),('integral_proportion','20'),('integral_down_resume','30'),('sy_bannedip',''),('sy_fkeyword_all','***'),('sy_bannedip_alert','您的当前IP，该站已经禁止访问，请联系管理员处理。'),('sy_qqappid',''),('sy_qqappkey',''),('sy_qqlogin','0'),('sy_email_online','1'),('sy_email_yqms','2'),('sy_email_reg','2'),('sy_email_fkcg','2'),('sy_email_zzshtg','2'),('sy_email_sqzw','2'),('sy_msg_yqms','2'),('sy_msg_reg','2'),('sy_msg_fkcg','2'),('sy_msg_zzshtg','2'),('sy_msg_sqzw','2'),('sy_seo_rewrite','0'),('sy_msg_online','0'),('sy_email_getpass','2'),('sy_msg_getpass','2'),('com_rating','3'),('sy_logo','data/logo/20130925/13858881604.PNG'),('sy_member_logo','data/logo/20140306/13970739013.PNG'),('sy_unit_logo','data/logo/20140318/13965292184.PNG'),('map_control','1'),('map_control_type','4'),('map_control_xb','1'),('map_control_scale','1'),('sy_rz_logo','data/logo/20120723/13500058397.GIF'),('sy_email_cert','2'),('sy_msg_cert','2'),('sy_msgkey',''),('map_control_anchor','4'),('com_login_link','0'),('com_resume_link','0'),('com_fast_status','1'),('com_job_status','1'),('sy_web_site','0'),('sy_rand',''),('sy_email_zzshwtg','2'),('qqappkey','100643130'),('qqappsecret','2c97a8b26e99375af06fc3a4758f9539'),('qqopenid','248BDA7463EC00698A852B7DA3E146AB'),('qqopenkey','B322A47B8A601327107AD25887391614'),('qqaccess_token','4f20493cc4d4f431e64765744b65df57'),('sinaappkey','2688007312'),('sinaappsecret','d8339d8c6a4205d223ddfed1b4f8fd27'),('sinaopenid',''),('sinaopenkey',''),('sinaaccess_token','2.00ItDxiCeUbuvCc9435bf07a0G5CXR'),('sy_pw_type',''),('sy_qq',''),('sy_indexcity','全国'),('sy_indexdomain',''),('sy_qqkey',''),('sy_sinakey',''),('alipaytype','1'),('user_idcard','0'),('com_status','1'),('user_imgwidth','90'),('user_imgheight','140'),('ismemcache','2'),('com_uppic','1024'),('issmartycache','2'),('memcachehost','127.0.0.1 '),('memcacheport','11211'),('memcachetime','3600'),('smartycachetime','3600'),('com_urgent','20'),('com_message','1'),('user_report','1'),('com_report','1'),('sy_email_lock','2'),('user_idcard_status','0'),('com_cert_status','0'),('sy_email_comcert','2'),('sy_unit_icon','data/logo/20140420/14002532782.JPG'),('sy_email_usercert','2'),('sy_onedomain',''),('sy_msg_zzshwtg','2'),('sy_email_usercertq','1'),('sy_email_jobed','2'),('user_wjl','1'),('com_recjob','10'),('sy_regname','admin,zhongguo'),('com_vip_type','0'),('sy_member_icon','data/logo/20140420/14001922682.GIF'),('sy_default_userclass','1'),('sy_friend_logo','data/logo/20130721/13756154999.PNG'),('integral_com_comments','1000'),('fast_status','0'),('sy_listnum','13'),('sy_email_userstatus','2'),('sy_default_comclass','1'),('sy_sinalogin','0'),('sy_sinaappkey',''),('sy_sinaappid',''),('user_name','1'),('sy_usertype_1','0'),('lt_rebates_name','元'),('user_wjl_link','0'),('map_tocity','2'),('map_key','F9bfbeb26054d97898571a1df965d8af'),('sy_email_remind','2'),('sy_msg_remind','2'),('sy_msg_type','1'),('integral_msg_proportion','10'),('user_email_tx','1'),('user_msg_tx','1'),('com_email_dy','1'),('com_msg_dy','1'),('user_email_dy','1'),('user_msg_dy','0'),('sy_msg_comdy','2'),('sy_msg_userdy','1'),('sy_email_userdy','1'),('sy_email_comdy','1'),('webcachetime','2'),('webcache','2'),('user_enforce_mobilecert','0'),('sy_friend_icon','data/logo/20140420/14003570782.JPG'),('sy_wzp_icon','data/logo/20140422/14046373798.JPG'),('wx_token',''),('wx_appid',''),('wx_appsecret',''),('user_trust_number','1'),('pay_trust_resume','10'),('user_trust_status','1'),('sy_safekey','HHZbWplNxPX'),('pytoken','72a1c4c7fd59'),('job_auto','5'),('sy_wx_logo','data/logo/20140527/14102668417.PNG');

/*Table structure for table `admin_link` */

DROP TABLE IF EXISTS `admin_link`;

CREATE TABLE `admin_link` (
  `id` int(8) NOT NULL auto_increment,
  `link_name` varchar(50) NOT NULL,
  `link_url` varchar(50) NOT NULL,
  `img_type` int(30) NOT NULL,
  `pic` varchar(50) NOT NULL,
  `link_type` varchar(1) NOT NULL,
  `link_state` int(1) NOT NULL default '0',
  `link_sorting` int(8) NOT NULL default '0',
  `link_time` varchar(20) NOT NULL,
  `domain` int(11) NOT NULL,
  `tem_type` int(11) NOT NULL default '1',
  PRIMARY KEY  (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=116 DEFAULT CHARSET=gbk;

/*Data for the table `admin_link` */

insert  into `admin_link`(`id`,`link_name`,`link_url`,`img_type`,`pic`,`link_type`,`link_state`,`link_sorting`,`link_time`,`domain`,`tem_type`) values (1,'人才网','http://www.phpyun.com ',0,'','1',1,0,'1356609401',8,3),(2,'cms人才系统','http://www.phpyun.com',1,'upload/link/20140526/14108767543.PNG','2',1,0,'1375927195',0,1),(3,'hr135人才网','http://www.hr135.com',0,'','1',1,0,'1375927889',0,1),(4,'PHPYUN论坛','http://www.phyun.com/bbs',0,'','1',1,0,'1375927908',0,1),(5,'沭阳人才网','http://www.shyjob.net',0,'','1',1,0,'1375927908',0,1),(6,'phpyun人才系统','http://www.phpyun.com',0,'','1',1,0,'1375927922',0,1);

/*Table structure for table `admin_log` */

DROP TABLE IF EXISTS `admin_log`;

CREATE TABLE `admin_log` (
  `id` int(11) NOT NULL auto_increment,
  `uid` int(11) default NULL,
  `username` varchar(200) default NULL,
  `content` text NOT NULL,
  `ctime` int(11) default NULL,
  PRIMARY KEY  (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=18 DEFAULT CHARSET=gbk;

/*Data for the table `admin_log` */

insert  into `admin_log`(`id`,`uid`,`username`,`content`,`ctime`) values (16,2,'admin','网站配置设置成功！',1412475263),(17,2,'admin','新闻(ID:1)添加成功！',1415964561);

/*Table structure for table `admin_navigation` */

DROP TABLE IF EXISTS `admin_navigation`;

CREATE TABLE `admin_navigation` (
  `id` int(11) NOT NULL auto_increment,
  `name` varchar(60) NOT NULL,
  `keyid` int(11) default '0',
  `url` varchar(50) character set gb2312 collate gb2312_bin default NULL,
  `menu` int(1) default NULL,
  `classname` varchar(100) default '0',
  `sort` int(5) default '0',
  `display` int(1) default NULL,
  PRIMARY KEY  (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=1247 DEFAULT CHARSET=gbk;

/*Data for the table `admin_navigation` */

insert  into `admin_navigation`(`id`,`name`,`keyid`,`url`,`menu`,`classname`,`sort`,`display`) values (1,'系统管理',0,'',0,'system',11,0),(3,'用户管理',0,'',0,'user',9,0),(4,'资讯管理',0,'',0,NULL,8,1),(5,'页面生成',0,'',0,'generate',7,0),(6,'运营管理',0,'',0,'operations',6,0),(127,'网站工具',0,'',0,'tool',1,0),(8,'基础配置',1,'',0,NULL,4,0),(134,'公告管理',124,'index.php?m=admin_announcement',0,NULL,1,0),(11,'网站配置',8,'index.php?m=config',2,NULL,10,0),(141,'发送邮件',137,'index.php?m=email',0,NULL,0,0),(85,'企业会员分类',80,'index.php?m=comclass',1,NULL,2,0),(142,'新闻首页',49,'index.php?m=cache&c=news',1,NULL,7,0),(1244,'一键更新',49,'index.php?m=cache&c=all',2,'',0,0),(10,'企业管理',0,'',0,'com',10,0),(1240,'企业管理',10,NULL,NULL,'0',0,0),(35,'用户管理',3,'',0,NULL,0,0),(78,'栏目管理',0,'',0,'column',8,0),(38,'个人用户列表',35,'index.php?m=user_member',1,NULL,0,0),(133,'新闻管理',124,'index.php?m=admin_news',2,NULL,1,0),(143,'风格管理',128,'index.php?m=admin_style',1,NULL,0,0),(80,'类别管理',78,'',0,NULL,0,0),(135,'独立页面管理',124,'index.php?m=description',1,NULL,1,0),(136,'企业用户列表',1240,'index.php?m=com_member',0,NULL,0,0),(138,'广告管理',137,'index.php?m=advertise',1,NULL,1,0),(49,'页面生成',5,'',0,'',0,0),(50,'生成缓存',49,'index.php?m=cache&c=cache',1,NULL,4,0),(128,'网站工具',127,'',0,'',0,0),(144,'职位类别管理',80,'index.php?m=admin_job',1,NULL,3,0),(86,'区域管理',80,'index.php?m=admin_city',1,NULL,5,0),(122,'支付配置',8,'index.php?m=payconfig',1,NULL,3,0),(137,'运营管理',6,'',0,NULL,0,0),(124,'资讯管理',9,'',0,NULL,0,0),(126,'用户配置',8,'index.php?m=userconfig',2,NULL,0,0),(103,'图片上传',89,'admin_uploadpic.php',1,NULL,7,1),(104,'个人会员分类',80,'index.php?m=userclass',1,NULL,9,0),(129,'模板管理',128,'index.php?m=admin_template',1,NULL,0,0),(132,'管理员配置',8,'index.php?m=admin_user',2,NULL,3,0),(139,'友情链接',137,'index.php?m=link',0,NULL,0,0),(145,'行业管理',80,'index.php?m=industry',1,NULL,4,1),(146,'导航配置',8,'index.php?m=navigation',2,NULL,0,0),(147,'数据库',128,'index.php?m=database',0,NULL,0,0),(148,'整合论坛',128,'index.php?m=admin_uc',1,'',4,0),(149,'微招聘',35,'index.php?m=admin_once',1,NULL,1,0),(150,'简历管理',35,'index.php?m=admin_resume',2,NULL,5,0),(151,'公司管理',1240,'index.php?m=admin_company',0,NULL,2,0),(152,'职位管理',1240,'index.php?m=admin_company_job',1,NULL,2,0),(155,'充值记录',137,'index.php?m=company_order',1,NULL,0,0),(156,'消费记录',137,'index.php?m=company_pay',0,NULL,0,0),(157,'邮件配置',8,'index.php?m=emailconfig',2,NULL,6,0),(158,'短信配置',8,'index.php?m=msgconfig',2,NULL,6,0),(159,'快捷登录',128,'index.php?m=qqconfig',1,'',3,0),(162,'后台充值',137,'index.php?m=recharge',0,NULL,0,0),(163,'短信群发',137,'index.php?m=information',0,NULL,0,0),(164,'首页生成',49,'index.php?m=cache&c=index',2,NULL,1,0),(168,'新闻类别',49,'index.php?m=cache&c=newsclass',1,NULL,0,0),(167,'新闻详细页',49,'index.php?m=cache&c=archive',1,NULL,0,0),(169,'关键字管理',137,'index.php?m=admin_keyword',1,NULL,6,0),(171,'留言管理',35,'index.php?m=admin_message',2,'',1,0),(172,'短信记录',137,'index.php?m=mobliemsg',0,NULL,3,0),(173,'名企招聘',137,'index.php?m=hotjob',1,NULL,0,0),(174,'企业认证审核',1240,'index.php?m=comcert',1,NULL,1,0),(176,'SEO设置',8,'index.php?m=seo',1,NULL,3,0),(177,'数据采集',128,'index.php?m=collection',0,NULL,0,0),(178,'分站管理',128,'index.php?m=admin_domain',1,NULL,0,0),(179,'企业模板',128,'index.php?m=comtpl',NULL,NULL,5,0),(1239,'微信客户端',128,'index.php?m=wx',NULL,'',0,0),(1238,'后台管理日志',128,'index.php?m=admin_log',NULL,'',0,0),(188,'企业新闻管理',1240,'index.php?m=comnews',NULL,NULL,1,0),(189,'企业产品管理',1240,'index.php?m=comproduct',NULL,NULL,2,0),(191,'招聘会',137,'index.php?m=zhaopinhui',1,NULL,5,0),(170,'行业类别管理',80,'index.php?m=admin_industry',2,NULL,4,0),(195,'个人认证审核',35,'index.php?m=usercert',0,NULL,6,0),(1197,'求职咨询',35,'index.php?m=admin_msg',0,NULL,2,0),(1203,'微简历',35,'index.php?m=admin_tiny',0,NULL,4,0),(1207,'高级人才管理',1200,'index.php?m=height_user',0,NULL,0,0),(1210,'朋友圈',0,'',0,'social',2,0),(9,'新闻资讯',0,'',NULL,'news',5,0),(1212,'问答管理',1216,'index.php?m=admin_question',1,'',0,0),(1213,'问答类别',80,'index.php?m=question_class',NULL,NULL,0,0),(1216,'朋友圈',1210,'',0,'',0,0),(1217,'朋友圈留言',1216,'index.php?m=friend_message',NULL,'',0,0),(1218,'动态管理',1216,'index.php?m=friend_state',NULL,'',0,0),(1219,'举报原因管理',80,'index.php?m=admin_reason',1,'',0,0),(1220,'数据调用',137,'index.php?m=datacall',1,'',0,0),(1223,'举报管理',137,'index.php?m=report',1,'',0,0),(1224,'高级搜索',128,'index.php?m=admin_searchest',1,'',0,0),(1234,'企业评论',1240,'index.php?m=com_pl',0,'0',1,0),(1243,'计划任务',128,'index.php?m=cron',NULL,'',5,0);

/*Table structure for table `admin_template` */

DROP TABLE IF EXISTS `admin_template`;

CREATE TABLE `admin_template` (
  `id` int(20) NOT NULL auto_increment,
  `name` varchar(50) NOT NULL,
  `tp_name` varchar(50) NOT NULL,
  `update_time` int(32) NOT NULL,
  `dir` varchar(50) default NULL,
  PRIMARY KEY  (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=71 DEFAULT CHARSET=gbk;

/*Data for the table `admin_template` */

/*Table structure for table `admin_user` */

DROP TABLE IF EXISTS `admin_user`;

CREATE TABLE `admin_user` (
  `uid` int(3) NOT NULL auto_increment,
  `m_id` int(2) NOT NULL,
  `username` varchar(25) NOT NULL,
  `password` varchar(50) NOT NULL,
  `name` varchar(50) NOT NULL,
  `lasttime` int(11) default NULL,
  PRIMARY KEY  (`uid`)
) ENGINE=MyISAM AUTO_INCREMENT=3 DEFAULT CHARSET=gbk;

/*Data for the table `admin_user` */

insert  into `admin_user`(`uid`,`m_id`,`username`,`password`,`name`,`lasttime`) values (2,1,'admin','21232f297a57a5a743894a0e4a801fc3','超级管理员',1415964497);

/*Table structure for table `admin_user_group` */

DROP TABLE IF EXISTS `admin_user_group`;

CREATE TABLE `admin_user_group` (
  `id` int(3) NOT NULL auto_increment,
  `group_name` varchar(100) NOT NULL,
  `group_power` text NOT NULL,
  PRIMARY KEY  (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=2 DEFAULT CHARSET=gbk;

/*Data for the table `admin_user_group` */

insert  into `admin_user_group`(`id`,`group_name`,`group_power`) values (1,'超级管理员','a:84:{i:0;s:1:\"1\";i:1;s:1:\"8\";i:2;s:2:\"11\";i:3;s:3:\"158\";i:4;s:3:\"157\";i:5;s:3:\"132\";i:6;s:3:\"122\";i:7;s:3:\"176\";i:8;s:3:\"126\";i:9;s:3:\"146\";i:10;s:2:\"10\";i:11;s:4:\"1240\";i:12;s:3:\"152\";i:13;s:3:\"151\";i:14;s:3:\"189\";i:15;s:3:\"174\";i:16;s:3:\"188\";i:17;s:4:\"1234\";i:18;s:3:\"136\";i:19;s:1:\"3\";i:20;s:2:\"35\";i:21;s:3:\"195\";i:22;s:3:\"150\";i:23;s:4:\"1203\";i:24;s:4:\"1197\";i:25;s:3:\"171\";i:26;s:3:\"149\";i:27;s:2:\"38\";i:28;s:2:\"78\";i:29;s:2:\"80\";i:30;s:3:\"104\";i:31;s:2:\"86\";i:32;s:3:\"170\";i:33;s:3:\"144\";i:34;s:2:\"85\";i:35;s:4:\"1219\";i:36;s:4:\"1213\";i:37;s:1:\"5\";i:38;s:2:\"49\";i:39;s:3:\"142\";i:40;s:2:\"50\";i:41;s:3:\"164\";i:42;s:4:\"1244\";i:43;s:3:\"167\";i:44;s:3:\"168\";i:45;s:1:\"6\";i:46;s:3:\"137\";i:47;s:3:\"169\";i:48;s:3:\"191\";i:49;s:3:\"172\";i:50;s:3:\"138\";i:51;s:4:\"1223\";i:52;s:3:\"141\";i:53;s:4:\"1220\";i:54;s:3:\"156\";i:55;s:3:\"155\";i:56;s:3:\"139\";i:57;s:3:\"162\";i:58;s:3:\"173\";i:59;s:3:\"163\";i:60;s:1:\"9\";i:61;s:3:\"124\";i:62;s:3:\"134\";i:63;s:3:\"135\";i:64;s:3:\"133\";i:65;s:4:\"1210\";i:66;s:4:\"1216\";i:67;s:4:\"1212\";i:68;s:4:\"1218\";i:69;s:4:\"1217\";i:70;s:3:\"127\";i:71;s:3:\"128\";i:72;s:3:\"179\";i:73;s:4:\"1243\";i:74;s:3:\"148\";i:75;s:3:\"159\";i:76;s:4:\"1224\";i:77;s:4:\"1238\";i:78;s:4:\"1239\";i:79;s:3:\"129\";i:80;s:3:\"147\";i:81;s:3:\"143\";i:82;s:3:\"178\";i:83;s:3:\"177\";}');

/*Table structure for table `answer` */

DROP TABLE IF EXISTS `answer`;

CREATE TABLE `answer` (
  `id` int(11) NOT NULL auto_increment,
  `qid` int(11) NOT NULL,
  `uid` int(11) NOT NULL,
  `comment` int(11) NOT NULL default '0',
  `support` int(11) NOT NULL default '0',
  `oppose` int(11) NOT NULL default '0',
  `content` text NOT NULL,
  `add_time` int(11) NOT NULL,
  PRIMARY KEY  (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=gbk;

/*Data for the table `answer` */

/*Table structure for table `answer_review` */

DROP TABLE IF EXISTS `answer_review`;

CREATE TABLE `answer_review` (
  `id` int(11) NOT NULL auto_increment,
  `aid` int(11) NOT NULL,
  `qid` int(11) default NULL,
  `uid` int(11) NOT NULL,
  `content` text NOT NULL,
  `add_time` int(11) NOT NULL,
  PRIMARY KEY  (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=gbk;

/*Data for the table `answer_review` */

/*Table structure for table `ap_column_preferences` */

DROP TABLE IF EXISTS `ap_column_preferences`;

CREATE TABLE `ap_column_preferences` (
  `acp_id` int(11) NOT NULL auto_increment,
  `form_id` int(11) default NULL,
  `user_id` int(11) NOT NULL default '1',
  `element_name` varchar(255) NOT NULL default '',
  `position` int(11) NOT NULL default '0',
  PRIMARY KEY  (`acp_id`),
  KEY `acp_position` (`form_id`,`position`)
) ENGINE=MyISAM AUTO_INCREMENT=84 DEFAULT CHARSET=utf8;

/*Data for the table `ap_column_preferences` */

insert  into `ap_column_preferences`(`acp_id`,`form_id`,`user_id`,`element_name`,`position`) values (83,10392,2,'element_23',11),(82,10392,2,'element_22',10),(81,10392,2,'element_21',9),(80,10392,2,'element_20',8),(79,10392,2,'element_15',7),(78,10392,2,'element_19',6),(77,10392,2,'element_18',5),(76,10392,2,'element_16',4),(75,10392,2,'element_14',3),(74,10392,2,'element_1',2),(39,11892,2,'date_created',1),(40,11892,2,'date_updated',2),(41,11892,2,'ip_address',3),(42,11892,2,'element_1',4),(43,11892,2,'element_2',5),(44,11892,2,'payment_amount',6),(45,11892,2,'payment_status',7),(46,11892,2,'payment_id',8),(73,10392,2,'username',1);

/*Table structure for table `ap_element_options` */

DROP TABLE IF EXISTS `ap_element_options`;

CREATE TABLE `ap_element_options` (
  `aeo_id` int(11) NOT NULL auto_increment,
  `form_id` int(11) NOT NULL default '0',
  `element_id` int(11) NOT NULL default '0',
  `option_id` int(11) NOT NULL default '0',
  `position` int(11) NOT NULL default '0',
  `option` text,
  `option_is_default` int(11) NOT NULL default '0',
  `live` int(11) NOT NULL default '1',
  PRIMARY KEY  (`aeo_id`),
  KEY `form_id` (`form_id`),
  KEY `element_id` (`element_id`)
) ENGINE=MyISAM AUTO_INCREMENT=207 DEFAULT CHARSET=utf8;

/*Data for the table `ap_element_options` */

insert  into `ap_element_options`(`aeo_id`,`form_id`,`element_id`,`option_id`,`position`,`option`,`option_is_default`,`live`) values (9,10392,1,3,3,'太监',0,0),(8,10392,1,2,2,'否',0,1),(7,10392,1,1,1,'是',0,1),(12,10392,2,3,3,'乒乓球',0,0),(11,10392,2,2,2,'篮球',0,0),(10,10392,2,1,1,'足球',0,0),(13,10825,1,3,3,'太监',0,1),(14,10825,1,2,2,'女',0,1),(15,10825,1,1,1,'男',0,1),(16,10825,2,3,3,'乒乓球',0,1),(17,10825,2,2,2,'篮球',0,1),(18,10825,2,1,1,'足球',0,1),(19,10392,6,1,1,'First option',0,0),(20,10392,6,2,2,'Second option',0,0),(21,10392,6,3,3,'Third option',0,0),(27,10392,7,3,3,'Third option',0,0),(26,10392,7,2,2,'Second option',0,0),(25,10392,7,1,1,'First option',0,0),(137,10392,14,4,4,'纯电动汽车',0,1),(136,10392,14,3,3,'插电式混合动力汽车',0,1),(134,10392,14,1,1,'传统型内燃机汽车',0,1),(135,10392,14,2,2,'混合动力汽车',0,1),(116,10392,15,3,3,'租赁',0,1),(115,10392,15,2,2,'分期付款',0,1),(141,10392,16,4,4,'纯电动汽车',0,1),(41,10392,17,1,1,'First option',0,1),(42,10392,17,2,2,'Second option',0,1),(43,10392,17,3,3,'Third option',0,1),(109,10392,18,9,9,'不确定',0,1),(108,10392,18,8,8,'2020以后',0,1),(107,10392,18,7,7,'2020',0,1),(111,10392,19,2,2,'混合动力汽车',0,1),(119,10392,20,3,3,'租赁',0,1),(118,10392,20,2,2,'分期付款',0,1),(126,10392,21,7,7,'五年',0,1),(125,10392,21,6,6,'三年',0,1),(124,10392,21,5,5,'两年',0,1),(142,11022,1,3,3,'太监',0,0),(139,10392,16,2,2,'混合动力汽车',0,1),(106,10392,18,6,6,'2019',0,1),(105,10392,18,5,5,'2018',0,1),(104,10392,18,4,4,'2017',0,1),(103,10392,18,3,3,'2016',0,1),(102,10392,18,2,2,'2015',0,1),(101,10392,18,1,1,'2014',0,1),(112,10392,19,3,3,'插电式混合动力汽车',0,1),(110,10392,19,1,1,'传统型内燃机汽车',0,1),(114,10392,15,1,1,'一次性付全款',0,1),(117,10392,20,1,1,'一次性付全款',0,1),(123,10392,21,4,4,'一年',0,1),(122,10392,21,3,3,'六个月',0,1),(121,10392,21,2,2,'三个月',0,1),(120,10392,21,1,1,'一个月',0,1),(128,10392,23,2,2,'10元人民币',0,1),(127,10392,23,1,1,'8元人民币',0,1),(140,10392,16,3,3,'插电式混合动力汽车',0,1),(138,10392,16,1,1,'传统型内燃机汽车',0,1),(113,10392,19,4,4,'纯电动汽车',0,1),(129,10392,23,3,3,'15元人民币',0,1),(130,10392,23,4,4,'20元人民币',0,1),(131,10392,23,5,5,'30元人民币',0,1),(132,10392,23,6,6,'高于30元人民币',0,1),(133,10392,23,7,7,'不确定',0,1),(143,11022,1,2,2,'否',0,1),(144,11022,1,1,1,'是',0,1),(145,11022,2,3,3,'乒乓球',0,0),(146,11022,2,2,2,'篮球',0,0),(147,11022,2,1,1,'足球',0,0),(148,11022,6,1,1,'First option',0,0),(149,11022,6,2,2,'Second option',0,0),(150,11022,6,3,3,'Third option',0,0),(151,11022,7,3,3,'Third option',0,0),(152,11022,7,2,2,'Second option',0,0),(153,11022,7,1,1,'First option',0,0),(154,11022,14,4,4,'纯电动汽车',0,1),(155,11022,14,3,3,'插电式混合动力汽车',0,1),(156,11022,14,1,1,'传统型内燃机汽车',0,1),(157,11022,14,2,2,'混合动力汽车',0,1),(158,11022,15,3,3,'租赁',0,1),(159,11022,15,2,2,'分期付款',0,1),(160,11022,16,4,4,'纯电动汽车',0,1),(161,11022,17,1,1,'First option',0,1),(162,11022,17,2,2,'Second option',0,1),(163,11022,17,3,3,'Third option',0,1),(164,11022,18,9,9,'不确定',0,1),(165,11022,18,8,8,'2020以后',0,1),(166,11022,18,7,7,'2020',0,1),(167,11022,19,2,2,'混合动力汽车',0,1),(168,11022,20,3,3,'租赁',0,1),(169,11022,20,2,2,'分期付款',0,1),(170,11022,21,7,7,'五年',0,1),(171,11022,21,6,6,'三年',0,1),(172,11022,21,5,5,'两年',0,1),(173,11022,16,2,2,'混合动力汽车',0,1),(174,11022,18,6,6,'2019',0,1),(175,11022,18,5,5,'2018',0,1),(176,11022,18,4,4,'2017',0,1),(177,11022,18,3,3,'2016',0,1),(178,11022,18,2,2,'2015',0,1),(179,11022,18,1,1,'2014',0,1),(180,11022,19,3,3,'插电式混合动力汽车',0,1),(181,11022,19,1,1,'传统型内燃机汽车',0,1),(182,11022,15,1,1,'一次性付全款',0,1),(183,11022,20,1,1,'一次性付全款',0,1),(184,11022,21,4,4,'一年',0,1),(185,11022,21,3,3,'六个月',0,1),(186,11022,21,2,2,'三个月',0,1),(187,11022,21,1,1,'一个月',0,1),(188,11022,23,2,2,'10元人民币',0,1),(189,11022,23,1,1,'8元人民币',0,1),(190,11022,16,3,3,'插电式混合动力汽车',0,1),(191,11022,16,1,1,'传统型内燃机汽车',0,1),(192,11022,19,4,4,'纯电动汽车',0,1),(193,11022,23,3,3,'15元人民币',0,1),(194,11022,23,4,4,'20元人民币',0,1),(195,11022,23,5,5,'30元人民币',0,1),(196,11022,23,6,6,'高于30元人民币',0,1),(197,11022,23,7,7,'不确定',0,1),(198,11892,1,1,1,'First option',0,1),(199,11892,1,2,2,'Second option',0,1),(200,11892,1,3,3,'Third option',0,1),(206,11892,2,3,3,'抢劫',0,1),(205,11892,2,2,2,'防火',0,1),(204,11892,2,1,1,'杀人',0,1);

/*Table structure for table `ap_element_prices` */

DROP TABLE IF EXISTS `ap_element_prices`;

CREATE TABLE `ap_element_prices` (
  `aep_id` int(11) unsigned NOT NULL auto_increment,
  `form_id` int(11) NOT NULL,
  `element_id` int(11) NOT NULL,
  `option_id` int(11) NOT NULL default '0',
  `price` decimal(62,2) NOT NULL default '0.00',
  PRIMARY KEY  (`aep_id`),
  KEY `form_id` (`form_id`),
  KEY `element_id` (`element_id`)
) ENGINE=MyISAM AUTO_INCREMENT=50 DEFAULT CHARSET=utf8;

/*Data for the table `ap_element_prices` */

insert  into `ap_element_prices`(`aep_id`,`form_id`,`element_id`,`option_id`,`price`) values (1,11892,2,1,'1.00'),(2,11892,2,2,'1.00'),(3,11892,2,3,'1.00'),(4,11892,1,1,'1.00'),(5,11892,1,2,'1.00'),(6,11892,1,3,'1.00'),(7,10392,18,1,'10.00'),(8,10392,18,2,'10.00'),(9,10392,18,3,'10.00'),(10,10392,18,4,'10.00'),(11,10392,18,5,'10.00'),(12,10392,18,6,'10.00'),(13,10392,18,7,'10.00'),(14,10392,18,8,'10.00'),(15,10392,18,9,'10.00'),(16,10392,16,1,'10.00'),(17,10392,16,2,'10.00'),(18,10392,16,3,'10.00'),(19,10392,16,4,'10.00'),(20,10392,1,1,'10.00'),(21,10392,1,2,'10.00'),(22,10392,20,1,'10.00'),(23,10392,20,2,'10.00'),(24,10392,20,3,'10.00'),(25,10392,23,1,'10.00'),(26,10392,23,2,'10.00'),(27,10392,23,3,'10.00'),(28,10392,23,4,'10.00'),(29,10392,23,5,'10.00'),(30,10392,23,6,'10.00'),(31,10392,23,7,'10.00'),(32,10392,15,1,'10.00'),(33,10392,15,2,'10.00'),(34,10392,15,3,'10.00'),(35,10392,19,1,'10.00'),(36,10392,19,2,'10.00'),(37,10392,19,3,'10.00'),(38,10392,19,4,'10.00'),(39,10392,14,1,'10.00'),(40,10392,14,2,'10.00'),(41,10392,14,3,'10.00'),(42,10392,14,4,'10.00'),(43,10392,21,1,'10.00'),(44,10392,21,2,'10.00'),(45,10392,21,3,'10.00'),(46,10392,21,4,'10.00'),(47,10392,21,5,'10.00'),(48,10392,21,6,'10.00'),(49,10392,21,7,'10.00');

/*Table structure for table `ap_email_logic` */

DROP TABLE IF EXISTS `ap_email_logic`;

CREATE TABLE `ap_email_logic` (
  `form_id` int(11) NOT NULL,
  `rule_id` int(11) NOT NULL,
  `rule_all_any` varchar(3) NOT NULL default 'all',
  `target_email` text NOT NULL,
  `template_name` varchar(15) NOT NULL default 'notification' COMMENT 'notification - confirmation - custom',
  `custom_from_name` text,
  `custom_from_email` varchar(255) NOT NULL default '',
  `custom_subject` text,
  `custom_content` text,
  `custom_plain_text` int(1) NOT NULL default '0',
  PRIMARY KEY  (`form_id`,`rule_id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

/*Data for the table `ap_email_logic` */

insert  into `ap_email_logic`(`form_id`,`rule_id`,`rule_all_any`,`target_email`,`template_name`,`custom_from_name`,`custom_from_email`,`custom_subject`,`custom_content`,`custom_plain_text`) values (10392,1,'all','','custom','MachForm','no-reply@diaocha.yc','{form_name} [#{entry_no}]','{entry_data}',0);

/*Table structure for table `ap_email_logic_conditions` */

DROP TABLE IF EXISTS `ap_email_logic_conditions`;

CREATE TABLE `ap_email_logic_conditions` (
  `aec_id` int(11) unsigned NOT NULL auto_increment,
  `form_id` int(11) NOT NULL,
  `target_rule_id` int(11) NOT NULL,
  `element_name` varchar(50) NOT NULL default '',
  `rule_condition` varchar(15) NOT NULL default 'is',
  `rule_keyword` varchar(255) default NULL,
  PRIMARY KEY  (`aec_id`)
) ENGINE=MyISAM AUTO_INCREMENT=2 DEFAULT CHARSET=utf8;

/*Data for the table `ap_email_logic_conditions` */

insert  into `ap_email_logic_conditions`(`aec_id`,`form_id`,`target_rule_id`,`element_name`,`rule_condition`,`rule_keyword`) values (1,10392,1,'element_1','is','');

/*Table structure for table `ap_entries_preferences` */

DROP TABLE IF EXISTS `ap_entries_preferences`;

CREATE TABLE `ap_entries_preferences` (
  `form_id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `entries_sort_by` varchar(100) NOT NULL default 'id-desc',
  `entries_enable_filter` int(1) NOT NULL default '0',
  `entries_filter_type` varchar(5) NOT NULL default 'all' COMMENT 'all or any'
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

/*Data for the table `ap_entries_preferences` */

/*Table structure for table `ap_field_logic_conditions` */

DROP TABLE IF EXISTS `ap_field_logic_conditions`;

CREATE TABLE `ap_field_logic_conditions` (
  `alc_id` int(11) unsigned NOT NULL auto_increment,
  `form_id` int(11) NOT NULL,
  `target_element_id` int(11) NOT NULL,
  `element_name` varchar(50) NOT NULL default '',
  `rule_condition` varchar(15) NOT NULL default 'is',
  `rule_keyword` varchar(255) default NULL,
  PRIMARY KEY  (`alc_id`)
) ENGINE=MyISAM AUTO_INCREMENT=2 DEFAULT CHARSET=utf8;

/*Data for the table `ap_field_logic_conditions` */

/*Table structure for table `ap_field_logic_elements` */

DROP TABLE IF EXISTS `ap_field_logic_elements`;

CREATE TABLE `ap_field_logic_elements` (
  `form_id` int(11) NOT NULL,
  `element_id` int(11) NOT NULL,
  `rule_show_hide` varchar(4) NOT NULL default 'show',
  `rule_all_any` varchar(3) NOT NULL default 'all',
  PRIMARY KEY  (`form_id`,`element_id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

/*Data for the table `ap_field_logic_elements` */

/*Table structure for table `ap_fonts` */

DROP TABLE IF EXISTS `ap_fonts`;

CREATE TABLE `ap_fonts` (
  `font_id` int(11) unsigned NOT NULL auto_increment,
  `font_origin` varchar(11) NOT NULL default 'google',
  `font_family` varchar(100) default NULL,
  `font_variants` text,
  `font_variants_numeric` text,
  PRIMARY KEY  (`font_id`),
  KEY `font_family` (`font_family`)
) ENGINE=MyISAM AUTO_INCREMENT=637 DEFAULT CHARSET=utf8;

/*Data for the table `ap_fonts` */

insert  into `ap_fonts`(`font_id`,`font_origin`,`font_family`,`font_variants`,`font_variants_numeric`) values (1,'google','Open Sans','300,300italic,regular,italic,600,600italic,700,700italic,800,800italic','300,300-italic,400,400-italic,600,600-italic,700,700-italic,800,800-italic'),(2,'google','Oswald','300,regular,700','300,400,700'),(3,'google','Droid Sans','regular,700','400,700'),(4,'google','Open Sans Condensed','300,300italic,700','300,300-italic,700'),(5,'google','Droid Serif','regular,italic,700,700italic','400,400-italic,700,700-italic'),(6,'google','Lato','100,100italic,300,300italic,regular,italic,700,700italic,900,900italic','100,100-italic,300,300-italic,400,400-italic,700,700-italic,900,900italic'),(7,'google','PT Sans','regular,italic,700,700italic','400,400-italic,700,700-italic'),(8,'google','Yanone Kaffeesatz','200,300,regular,700','200,300,400,700'),(9,'google','PT Sans Narrow','regular,700','400,700'),(10,'google','Ubuntu','300,300italic,regular,italic,500,500italic,700,700italic','300,300-italic,400,400-italic,500,500-italic,700,700-italic'),(11,'google','Nunito','300,regular,700','300,400,700'),(12,'google','Arvo','regular,italic,700,700italic','400,400-italic,700,700-italic'),(13,'google','Lora','regular,italic,700,700italic','400,400-italic,700,700-italic'),(14,'google','Lobster','regular','400'),(15,'google','Source Sans Pro','200,200italic,300,300italic,regular,italic,600,600italic,700,700italic,900,900italic','200,200-italic,300,300-italic,400,400-italic,600,600-italic,700,700-italic,900,900italic'),(16,'google','Rokkitt','regular,700','400,700'),(17,'google','Crafty Girls','regular','400'),(18,'google','Francois One','regular','400'),(19,'google','Exo','100,100italic,200,200italic,300,300italic,regular,italic,500,500italic,600,600italic,700,700italic,800,800italic,900,900italic','100,100-italic,200,200-italic,300,300-italic,400,400-italic,500,500-italic,600,600-italic,700,700-italic,800,800-italic,900,900italic'),(20,'google','Changa One','regular,italic','400,400-italic'),(21,'google','Shadows Into Light','regular','400'),(22,'google','Merriweather','300,regular,700,900','300,400,700,900'),(23,'google','Arimo','regular,italic,700,700italic','400,400-italic,700,700-italic'),(24,'google','Unkempt','regular,700','400,700'),(25,'google','Dosis','200,300,regular,500,600,700,800','200,300,400,500,600,700,800'),(26,'google','Cabin','regular,italic,500,500italic,600,600italic,700,700italic','400,400-italic,500,500-italic,600,600-italic,700,700-italic'),(27,'google','PT Serif','regular,italic,700,700italic','400,400-italic,700,700-italic'),(28,'google','Cuprum','regular,italic,700,700italic','400,400-italic,700,700-italic'),(29,'google','Raleway','100,200,300,regular,500,600,700,800,900','100,200,300,400,500,600,700,800,900'),(30,'google','Play','regular,700','400,700'),(31,'google','Montserrat','regular,700','400,700'),(32,'google','Ubuntu Condensed','regular','400'),(33,'google','Vollkorn','regular,italic,700,700italic','400,400-italic,700,700-italic'),(34,'google','The Girl Next Door','regular','400'),(35,'google','Questrial','regular','400'),(36,'google','Josefin Sans','100,100italic,300,300italic,regular,italic,600,600italic,700,700italic','100,100-italic,300,300-italic,400,400-italic,600,600-italic,700,700-italic'),(37,'google','Anton','regular','400'),(38,'google','Coming Soon','regular','400'),(39,'google','Bitter','regular,italic,700','400,400-italic,700'),(40,'google','Abel','regular','400'),(41,'google','Cantarell','regular,italic,700,700italic','400,400-italic,700,700-italic'),(42,'google','Signika','300,regular,600,700','300,400,600,700'),(43,'google','Dancing Script','regular,700','400,700'),(44,'google','Nobile','regular,italic,700,700italic','400,400-italic,700,700-italic'),(45,'google','Fredoka One','regular','400'),(46,'google','Asap','regular,italic,700,700italic','400,400-italic,700,700-italic'),(47,'google','Pacifico','regular','400'),(48,'google','Philosopher','regular,italic,700,700italic','400,400-italic,700,700-italic'),(49,'google','Kreon','300,regular,700','300,400,700'),(50,'google','Maven Pro','regular,500,700,900','400,500,700,900'),(51,'google','Calligraffitti','regular','400'),(52,'google','Righteous','regular','400'),(53,'google','Comfortaa','300,regular,700','300,400,700'),(54,'google','Black Ops One','regular','400'),(55,'google','Muli','300,300italic,regular,italic','300,300-italic,400,400-italic'),(56,'google','Squada One','regular','400'),(57,'google','Chewy','regular','400'),(58,'google','Luckiest Guy','regular','400'),(59,'google','Metamorphous','regular','400'),(60,'google','Cherry Cream Soda','regular','400'),(61,'google','Molengo','regular','400'),(62,'google','Rock Salt','regular','400'),(63,'google','Quicksand','300,regular,700','300,400,700'),(64,'google','Orienta','regular','400'),(65,'google','Tangerine','regular,700','400,700'),(66,'google','Droid Sans Mono','regular','400'),(67,'google','Crimson Text','regular,italic,600,600italic,700,700italic','400,400-italic,600,600-italic,700,700-italic'),(68,'google','Pontano Sans','regular','400'),(69,'google','PT Sans Caption','regular,700','400,700'),(70,'google','Reenie Beanie','regular','400'),(71,'google','Cabin Condensed','regular,500,600,700','400,500,600,700'),(72,'google','News Cycle','regular,700','400,700'),(73,'google','Josefin Slab','100,100italic,300,300italic,regular,italic,600,600italic,700,700italic','100,100-italic,300,300-italic,400,400-italic,600,600-italic,700,700-italic'),(74,'google','Cantata One','regular','400'),(75,'google','Marvel','regular,italic,700,700italic','400,400-italic,700,700-italic'),(76,'google','Istok Web','regular,italic,700,700italic','400,400-italic,700,700-italic'),(77,'google','Amaranth','regular,italic,700,700italic','400,400-italic,700,700-italic'),(78,'google','Chivo','regular,italic,900,900italic','400,400-italic,900,900italic'),(79,'google','Covered By Your Grace','regular','400'),(80,'google','Permanent Marker','regular','400'),(81,'google','Paytone One','regular','400'),(82,'google','Lobster Two','regular,italic,700,700italic','400,400-italic,700,700-italic'),(83,'google','Crete Round','regular,italic','400,400-italic'),(84,'google','Bree Serif','regular','400'),(85,'google','Syncopate','regular,700','400,700'),(86,'google','Oxygen','300,regular,700','300,400,700'),(87,'google','Limelight','regular','400'),(88,'google','Gloria Hallelujah','regular','400'),(89,'google','Voltaire','regular','400'),(90,'google','Playfair Display','regular,italic,700,700italic,900,900italic','400,400-italic,700,700-italic,900,900italic'),(91,'google','Marck Script','regular','400'),(92,'google','Walter Turncoat','regular','400'),(93,'google','Judson','regular,italic,700','400,400-italic,700'),(94,'google','Anonymous Pro','regular,italic,700,700italic','400,400-italic,700,700-italic'),(95,'google','Old Standard TT','regular,italic,700','400,400-italic,700'),(96,'google','Goudy Bookletter 1911','regular','400'),(97,'google','Maiden Orange','regular','400'),(98,'google','Amatic SC','regular,700','400,700'),(99,'google','Cardo','regular,italic,700','400,400-italic,700'),(100,'google','Homemade Apple','regular','400'),(101,'google','Waiting for the Sunrise','regular','400'),(102,'google','Jockey One','regular','400'),(103,'google','Orbitron','regular,500,700,900','400,500,700,900'),(104,'google','Inconsolata','regular,700','400,700'),(105,'google','Gentium Book Basic','regular,italic,700,700italic','400,400-italic,700,700-italic'),(106,'google','Indie Flower','regular','400'),(107,'google','Gudea','regular,italic,700','400,400-italic,700'),(108,'google','Copse','regular','400'),(109,'google','Schoolbell','regular','400'),(110,'google','Electrolize','regular','400'),(111,'google','Bevan','regular','400'),(112,'google','Ropa Sans','regular,italic','400,400-italic'),(113,'google','Quattrocento Sans','regular,italic,700,700italic','400,400-italic,700,700-italic'),(114,'google','Patua One','regular','400'),(115,'google','Leckerli One','regular','400'),(116,'google','Bangers','regular','400'),(117,'google','Didact Gothic','regular','400'),(118,'google','Vidaloka','regular','400'),(119,'google','Neucha','regular','400'),(120,'google','Share','regular,italic,700,700italic','400,400-italic,700,700-italic'),(121,'google','Karla','regular,italic,700,700italic','400,400-italic,700,700-italic'),(122,'google','Architects Daughter','regular','400'),(123,'google','Just Another Hand','regular','400'),(124,'google','Fontdiner Swanky','regular','400'),(125,'google','Happy Monkey','regular','400'),(126,'google','Varela Round','regular','400'),(127,'google','PT Serif Caption','regular,italic','400,400-italic'),(128,'google','Allerta Stencil','regular','400'),(129,'google','Patrick Hand','regular','400'),(130,'google','Kristi','regular','400'),(131,'google','Boogaloo','regular','400'),(132,'google','Allerta','regular','400'),(133,'google','EB Garamond','regular','400'),(134,'google','Varela','regular','400'),(135,'google','Crushed','regular','400'),(136,'google','Spirax','regular','400'),(137,'google','Puritan','regular,italic,700,700italic','400,400-italic,700,700-italic'),(138,'google','Special Elite','regular','400'),(139,'google','Tinos','regular,italic,700,700italic','400,400-italic,700,700-italic'),(140,'google','Rochester','regular','400'),(141,'google','Pinyon Script','regular','400'),(142,'google','Carme','regular','400'),(143,'google','Coda','regular,800','400,800'),(144,'google','Archivo Narrow','regular,italic,700,700italic','400,400-italic,700,700-italic'),(145,'google','Poiret One','regular','400'),(146,'google','Noticia Text','regular,italic,700,700italic','400,400-italic,700,700-italic'),(147,'google','Nothing You Could Do','regular','400'),(148,'google','Kameron','regular,700','400,700'),(149,'google','Metrophobic','regular','400'),(150,'google','Hammersmith One','regular','400'),(151,'google','Doppio One','regular','400'),(152,'google','Shadows Into Light Two','regular','400'),(153,'google','Jura','300,regular,500,600','300,400,500,600'),(154,'google','Handlee','regular','400'),(155,'google','Economica','regular,italic,700,700italic','400,400-italic,700,700-italic'),(156,'google','Neuton','200,300,regular,italic,700,800','200,300,400,400-italic,700,800'),(157,'google','BenchNine','300,regular,700','300,400,700'),(158,'google','Telex','regular','400'),(159,'google','Passion One','regular,700,900','400,700,900'),(160,'google','Actor','regular','400'),(161,'google','Merienda One','regular','400'),(162,'google','Alfa Slab One','regular','400'),(163,'google','Quattrocento','regular,700','400,700'),(164,'google','Slackey','regular','400'),(165,'google','Oleo Script','regular,700','400,700'),(166,'google','Ubuntu Mono','regular,italic,700,700italic','400,400-italic,700,700-italic'),(167,'google','Michroma','regular','400'),(168,'google','Sorts Mill Goudy','regular,italic','400,400-italic'),(169,'google','Carter One','regular','400'),(170,'google','Overlock','regular,italic,700,700italic,900,900italic','400,400-italic,700,700-italic,900,900italic'),(171,'google','Brawler','regular','400'),(172,'google','Mako','regular','400'),(173,'google','Annie Use Your Telescope','regular','400'),(174,'google','Cabin Sketch','regular,700','400,700'),(175,'google','Shanti','regular','400'),(176,'google','Sunshiney','regular','400'),(177,'google','Six Caps','regular','400'),(178,'google','Gentium Basic','regular,italic,700,700italic','400,400-italic,700,700-italic'),(179,'google','Rosario','regular,italic,700,700italic','400,400-italic,700,700-italic'),(180,'google','Yellowtail','regular','400'),(181,'google','Convergence','regular','400'),(182,'google','Love Ya Like A Sister','regular','400'),(183,'google','Lekton','regular,italic,700','400,400-italic,700'),(184,'google','Satisfy','regular','400'),(185,'google','Glegoo','regular','400'),(186,'google','Viga','regular','400'),(187,'google','Sansita One','regular','400'),(188,'google','IM Fell English','regular,italic','400,400-italic'),(189,'google','Just Me Again Down Here','regular','400'),(190,'google','Coustard','regular,900','400,900'),(191,'google','Prata','regular','400'),(192,'google','Kranky','regular','400'),(193,'google','Loved by the King','regular','400'),(194,'google','Gruppo','regular','400'),(195,'google','Fanwood Text','regular,italic','400,400-italic'),(196,'google','Numans','regular','400'),(197,'google','Pompiere','regular','400'),(198,'google','Bentham','regular','400'),(199,'google','Mountains of Christmas','regular,700','400,700'),(200,'google','Fredericka the Great','regular','400'),(201,'google','Montserrat Alternates','regular,700','400,700'),(202,'google','Homenaje','regular','400'),(203,'google','Cousine','regular,italic,700,700italic','400,400-italic,700,700-italic'),(204,'google','Kaushan Script','regular','400'),(205,'google','Contrail One','regular','400'),(206,'google','Short Stack','regular','400'),(207,'google','Cedarville Cursive','regular','400'),(208,'google','Tienne','regular,700,900','400,700,900'),(209,'google','Russo One','regular','400'),(210,'google','Magra','regular,700','400,700'),(211,'google','Enriqueta','regular,700','400,700'),(212,'google','Chau Philomene One','regular,italic','400,400-italic'),(213,'google','Alice','regular','400'),(214,'google','Delius','regular','400'),(215,'google','Stardos Stencil','regular,700','400,700'),(216,'google','Ultra','regular','400'),(217,'google','Sue Ellen Francisco','regular','400'),(218,'google','MedievalSharp','regular','400'),(219,'google','Gochi Hand','regular','400'),(220,'google','Rancho','regular','400'),(221,'google','Aldrich','regular','400'),(222,'google','Bowlby One SC','regular','400'),(223,'google','Give You Glory','regular','400'),(224,'google','Damion','regular','400'),(225,'google','Norican','regular','400'),(226,'google','Podkova','regular,700','400,700'),(227,'google','Berkshire Swash','regular','400'),(228,'google','IM Fell DW Pica','regular,italic','400,400-italic'),(229,'google','Andika','regular','400'),(230,'google','Titillium Web','200,200italic,300,300italic,regular,italic,600,600italic,700,700italic,900','200,200-italic,300,300-italic,400,400-italic,600,600-italic,700,700-italic,900'),(231,'google','Antic','regular','400'),(232,'google','Cookie','regular','400'),(233,'google','Poly','regular,italic','400,400-italic'),(234,'google','Days One','regular','400'),(235,'google','Trocchi','regular','400'),(236,'google','Delius Unicase','regular,700','400,700'),(237,'google','Spinnaker','regular','400'),(238,'google','Corben','regular,700','400,700'),(239,'google','Italianno','regular','400'),(240,'google','Volkhov','regular,italic,700,700italic','400,400-italic,700,700-italic'),(241,'google','Coda Caption','800','800'),(242,'google','Signika Negative','300,regular,600,700','300,400,600,700'),(243,'google','Great Vibes','regular','400'),(244,'google','Megrim','regular','400'),(245,'google','Arapey','regular,italic','400,400-italic'),(246,'google','Wire One','regular','400'),(247,'google','Alike','regular','400'),(248,'google','Adamina','regular','400'),(249,'google','Nixie One','regular','400'),(250,'google','Salsa','regular','400'),(251,'google','Sanchez','regular,italic','400,400-italic'),(252,'google','Cutive','regular','400'),(253,'google','Tulpen One','regular','400'),(254,'google','Lusitana','regular,700','400,700'),(255,'google','Radley','regular,italic','400,400-italic'),(256,'google','Bilbo','regular','400'),(257,'google','Courgette','regular','400'),(258,'google','Dawning of a New Day','regular','400'),(259,'google','Playball','regular','400'),(260,'google','Lustria','regular','400'),(261,'google','Redressed','regular','400'),(262,'google','Aclonica','regular','400'),(263,'google','IM Fell DW Pica SC','regular','400'),(264,'google','Allura','regular','400'),(265,'google','Allan','regular,700','400,700'),(266,'google','Baumans','regular','400'),(267,'google','Sancreek','regular','400'),(268,'google','IM Fell English SC','regular','400'),(269,'google','Kotta One','regular','400'),(270,'google','Codystar','300,regular','300,400'),(271,'google','Abril Fatface','regular','400'),(272,'google','Geo','regular,italic','400,400-italic'),(273,'google','Forum','regular','400'),(274,'google','La Belle Aurore','regular','400'),(275,'google','UnifrakturMaguntia','regular','400'),(276,'google','Armata','regular','400'),(277,'google','Jolly Lodger','regular','400'),(278,'google','Snippet','regular','400'),(279,'google','Lovers Quarrel','regular','400'),(280,'google','Miltonian Tattoo','regular','400'),(281,'google','Lemon','regular','400'),(282,'google','Rammetto One','regular','400'),(283,'google','Caudex','regular,italic,700,700italic','400,400-italic,700,700-italic'),(284,'google','Alegreya','regular,italic,700,700italic,900,900italic','400,400-italic,700,700-italic,900,900italic'),(285,'google','Swanky and Moo Moo','regular','400'),(286,'google','Inder','regular','400'),(287,'google','Federo','regular','400'),(288,'google','Delius Swash Caps','regular','400'),(289,'google','Italiana','regular','400'),(290,'google','Scada','regular,italic,700,700italic','400,400-italic,700,700-italic'),(291,'google','Press Start 2P','regular','400'),(292,'google','Candal','regular','400'),(293,'google','Expletus Sans','regular,italic,500,500italic,600,600italic,700,700italic','400,400-italic,500,500-italic,600,600-italic,700,700-italic'),(294,'google','Cantora One','regular','400'),(295,'google','Krona One','regular','400'),(296,'google','Andada','regular','400'),(297,'google','Archivo Black','regular','400'),(298,'google','Advent Pro','100,200,300,regular,500,600,700','100,200,300,400,500,600,700'),(299,'google','Fjalla One','regular','400'),(300,'google','Bad Script','regular','400'),(301,'google','Source Code Pro','200,300,regular,600,700,900','200,300,400,600,700,900'),(302,'google','Tenor Sans','regular','400'),(303,'google','Carrois Gothic','regular','400'),(304,'google','Montez','regular','400'),(305,'google','Ovo','regular','400'),(306,'google','Monda','regular,700','400,700'),(307,'google','Mate SC','regular','400'),(308,'google','League Script','regular','400'),(309,'google','Parisienne','regular','400'),(310,'google','Rationale','regular','400'),(311,'google','Nova Round','regular','400'),(312,'google','Unna','regular','400'),(313,'google','Vibur','regular','400'),(314,'google','Ruda','regular,700,900','400,700,900'),(315,'google','Meddon','regular','400'),(316,'google','IM Fell Great Primer SC','regular','400'),(317,'google','Rambla','regular,italic,700,700italic','400,400-italic,700,700-italic'),(318,'google','Holtwood One SC','regular','400'),(319,'google','Strait','regular','400'),(320,'google','Buda','300','300'),(321,'google','Average','regular','400'),(322,'google','Dorsa','regular','400'),(323,'google','Kelly Slab','regular','400'),(324,'google','Artifika','regular','400'),(325,'google','IM Fell French Canon SC','regular','400'),(326,'google','ABeeZee','regular,italic','400,400-italic'),(327,'google','Anaheim','regular','400'),(328,'google','Mate','regular,italic','400,400-italic'),(329,'google','Bowlby One','regular','400'),(330,'google','Over the Rainbow','regular','400'),(331,'google','Nova Script','regular','400'),(332,'google','VT323','regular','400'),(333,'google','Niconne','regular','400'),(334,'google','Acme','regular','400'),(335,'google','Fugaz One','regular','400'),(336,'google','Arbutus Slab','regular','400'),(337,'google','Yeseva One','regular','400'),(338,'google','Petit Formal Script','regular','400'),(339,'google','Nova Mono','regular','400'),(340,'google','UnifrakturCook','700','700'),(341,'google','Zeyada','regular','400'),(342,'google','Julee','regular','400'),(343,'google','Mr Dafoe','regular','400'),(344,'google','Fjord One','regular','400'),(345,'google','Gravitas One','regular','400'),(346,'google','Buenard','regular,700','400,700'),(347,'google','Hanuman','regular,700','400,700'),(348,'google','Nova Slim','regular','400'),(349,'google','IM Fell Great Primer','regular,italic','400,400-italic'),(350,'google','Astloch','regular,700','400,700'),(351,'google','Ruslan Display','regular','400'),(352,'google','Modern Antiqua','regular','400'),(353,'google','Alex Brush','regular','400'),(354,'google','Alegreya SC','regular,italic,700,700italic,900,900italic','400,400-italic,700,700-italic,900,900italic'),(355,'google','Vast Shadow','regular','400'),(356,'google','IM Fell French Canon','regular,italic','400,400-italic'),(357,'google','Capriola','regular','400'),(358,'google','IM Fell Double Pica SC','regular','400'),(359,'google','Nova Square','regular','400'),(360,'google','Prociono','regular','400'),(361,'google','Marmelad','regular','400'),(362,'google','Kenia','regular','400'),(363,'google','Nova Oval','regular','400'),(364,'google','Petrona','regular','400'),(365,'google','Dynalight','regular','400'),(366,'google','IM Fell Double Pica','regular,italic','400,400-italic'),(367,'google','Kite One','regular','400'),(368,'google','Asset','regular','400'),(369,'google','Oxygen Mono','regular','400'),(370,'google','Quantico','regular,italic,700,700italic','400,400-italic,700,700-italic'),(371,'google','Duru Sans','regular','400'),(372,'google','Geostar','regular','400'),(373,'google','Linden Hill','regular,italic','400,400-italic'),(374,'google','Condiment','regular','400'),(375,'google','Audiowide','regular','400'),(376,'google','Smythe','regular','400'),(377,'google','Sniglet','800','800'),(378,'google','Nova Flat','regular','400'),(379,'google','Irish Grover','regular','400'),(380,'google','Voces','regular','400'),(381,'google','Wallpoet','regular','400'),(382,'google','Sofia','regular','400'),(383,'google','Monofett','regular','400'),(384,'google','Knewave','regular','400'),(385,'google','Monoton','regular','400'),(386,'google','Port Lligat Sans','regular','400'),(387,'google','Bigshot One','regular','400'),(388,'google','Oranienbaum','regular','400'),(389,'google','Antic Slab','regular','400'),(390,'google','Lilita One','regular','400'),(391,'google','Gorditas','regular,700','400,700'),(392,'google','Galdeano','regular','400'),(393,'google','Imprima','regular','400'),(394,'google','Headland One','regular','400'),(395,'google','Miltonian','regular','400'),(396,'google','Lancelot','regular','400'),(397,'google','Sigmar One','regular','400'),(398,'google','Poller One','regular','400'),(399,'google','Piedra','regular','400'),(400,'google','GFS Neohellenic','regular,italic,700,700italic','400,400-italic,700,700-italic'),(401,'google','Marcellus SC','regular','400'),(402,'google','GFS Didot','regular','400'),(403,'google','Qwigley','regular','400'),(404,'google','Alike Angular','regular','400'),(405,'google','Belgrano','regular','400'),(406,'google','Geostar Fill','regular','400'),(407,'google','Average Sans','regular','400'),(408,'google','Ruluko','regular','400'),(409,'google','Goblin One','regular','400'),(410,'google','Chelsea Market','regular','400'),(411,'google','Nova Cut','regular','400'),(412,'google','Share Tech','regular','400'),(413,'google','Stoke','300,regular','300,400'),(414,'google','Cinzel','regular,700,900','400,700,900'),(415,'google','Federant','regular','400'),(416,'google','Supermercado One','regular','400'),(417,'google','Eater','regular','400'),(418,'google','Graduate','regular','400'),(419,'google','Smokum','regular','400'),(420,'google','Passero One','regular','400'),(421,'google','Atomic Age','regular','400'),(422,'google','Miniver','regular','400'),(423,'google','Euphoria Script','regular','400'),(424,'google','Londrina Solid','regular','400'),(425,'google','Aubrey','regular','400'),(426,'google','Aladin','regular','400'),(427,'google','Julius Sans One','regular','400'),(428,'google','PT Mono','regular','400'),(429,'google','Cambo','regular','400'),(430,'google','Amethysta','regular','400'),(431,'google','Finger Paint','regular','400'),(432,'google','Yesteryear','regular','400'),(433,'google','Ruthie','regular','400'),(434,'google','Oldenburg','regular','400'),(435,'google','Quando','regular','400'),(436,'google','Esteban','regular','400'),(437,'google','Arizonia','regular','400'),(438,'google','Grand Hotel','regular','400'),(439,'google','Cagliostro','regular','400'),(440,'google','Shojumaru','regular','400'),(441,'google','Basic','regular','400'),(442,'google','Averia Sans Libre','300,300italic,regular,italic,700,700italic','300,300-italic,400,400-italic,700,700-italic'),(443,'google','Rouge Script','regular','400'),(444,'google','Rosarivo','regular,italic','400,400-italic'),(445,'google','Marcellus','regular','400'),(446,'google','Mouse Memoirs','regular','400'),(447,'google','Rye','regular','400'),(448,'google','Sevillana','regular','400'),(449,'google','Iceland','regular','400'),(450,'google','Trochut','regular,italic,700','400,400-italic,700'),(451,'google','Mr De Haviland','regular','400'),(452,'google','Junge','regular','400'),(453,'google','Port Lligat Slab','regular','400'),(454,'google','Sail','regular','400'),(455,'google','Stint Ultra Condensed','regular','400'),(456,'google','Ranchers','regular','400'),(457,'google','Concert One','regular','400'),(458,'google','Seaweed Script','regular','400'),(459,'google','Libre Baskerville','regular,italic,700','400,400-italic,700'),(460,'google','Margarine','regular','400'),(461,'google','Unica One','regular','400'),(462,'google','Medula One','regular','400'),(463,'google','Cinzel Decorative','regular,700,900','400,700,900'),(464,'google','Creepster','regular','400'),(465,'google','Englebert','regular','400'),(466,'google','Flamenco','300,regular','300,400'),(467,'google','Averia Serif Libre','300,300italic,regular,italic,700,700italic','300,300-italic,400,400-italic,700,700-italic'),(468,'google','Henny Penny','regular','400'),(469,'google','Suwannaphum','regular','400'),(470,'google','Merienda','regular,700','400,700'),(471,'google','Engagement','regular','400'),(472,'google','Khmer','regular','400'),(473,'google','Playfair Display SC','regular,italic,700,700italic,900,900italic','400,400-italic,700,700-italic,900,900italic'),(474,'google','Carrois Gothic SC','regular','400'),(475,'google','Paprika','regular','400'),(476,'google','Gafata','regular','400'),(477,'google','Oregano','regular,italic','400,400-italic'),(478,'google','Donegal One','regular','400'),(479,'google','Overlock SC','regular','400'),(480,'google','Mystery Quest','regular','400'),(481,'google','Aguafina Script','regular','400'),(482,'google','Averia Libre','300,300italic,regular,italic,700,700italic','300,300-italic,400,400-italic,700,700-italic'),(483,'google','Londrina Sketch','regular','400'),(484,'google','Simonetta','regular,italic,900,900italic','400,400-italic,900,900italic'),(485,'google','Titan One','regular','400'),(486,'google','Cutive Mono','regular','400'),(487,'google','Bubblegum Sans','regular','400'),(488,'google','Bilbo Swash Caps','regular','400'),(489,'google','Erica One','regular','400'),(490,'google','Trade Winds','regular','400'),(491,'google','Fenix','regular','400'),(492,'google','Fresca','regular','400'),(493,'google','Sacramento','regular','400'),(494,'google','Domine','regular,700','400,700'),(495,'google','Montaga','regular','400'),(496,'google','Belleza','regular','400'),(497,'google','McLaren','regular','400'),(498,'google','Princess Sofia','regular','400'),(499,'google','Mrs Saint Delafield','regular','400'),(500,'google','Iceberg','regular','400'),(501,'google','Ledger','regular','400'),(502,'google','Racing Sans One','regular','400'),(503,'google','Raleway Dots','regular','400'),(504,'google','Londrina Outline','regular','400'),(505,'google','Butterfly Kids','regular','400'),(506,'google','Wellfleet','regular','400'),(507,'google','Glass Antiqua','regular','400'),(508,'google','Emilys Candy','regular','400'),(509,'google','Emblema One','regular','400'),(510,'google','Amarante','regular','400'),(511,'google','Odor Mean Chey','regular','400'),(512,'google','Koulen','regular','400'),(513,'google','Uncial Antiqua','regular','400'),(514,'google','Felipa','regular','400'),(515,'google','Almendra','regular,italic,700,700italic','400,400-italic,700,700-italic'),(516,'google','Clicker Script','regular','400'),(517,'google','Prosto One','regular','400'),(518,'google','Antic Didone','regular','400'),(519,'google','Milonga','regular','400'),(520,'google','Croissant One','regular','400'),(521,'google','Life Savers','regular,700','400,700'),(522,'google','Ruge Boogie','regular','400'),(523,'google','Balthazar','regular','400'),(524,'google','Mrs Sheppards','regular','400'),(525,'google','Revalia','regular','400'),(526,'google','Peralta','regular','400'),(527,'google','Inika','regular,700','400,700'),(528,'google','Moul','regular','400'),(529,'google','Offside','regular','400'),(530,'google','Asul','regular,700','400,700'),(531,'google','Sirin Stencil','regular','400'),(532,'google','Spicy Rice','regular','400'),(533,'google','Battambang','regular,700','400,700'),(534,'google','Text Me One','regular','400'),(535,'google','Eagle Lake','regular','400'),(536,'google','Della Respira','regular','400'),(537,'google','Chicle','regular','400'),(538,'google','Original Surfer','regular','400'),(539,'google','Fondamento','regular,italic','400,400-italic'),(540,'google','Monsieur La Doulaise','regular','400'),(541,'google','Skranji','regular,700','400,700'),(542,'google','Oleo Script Swash Caps','regular,700','400,700'),(543,'google','Denk One','regular','400'),(544,'google','Trykker','regular','400'),(545,'google','Sonsie One','regular','400'),(546,'google','Chela One','regular','400'),(547,'google','Seymour One','regular','400'),(548,'google','Habibi','regular','400'),(549,'google','Rufina','regular,700','400,700'),(550,'google','Stint Ultra Expanded','regular','400'),(551,'google','Frijole','regular','400'),(552,'google','Molle','italic','400-italic'),(553,'google','Chango','regular','400'),(554,'google','Jacques Francois','regular','400'),(555,'google','Griffy','regular','400'),(556,'google','Almendra SC','regular','400'),(557,'google','Stalemate','regular','400'),(558,'google','Devonshire','regular','400'),(559,'google','Dr Sugiyama','regular','400'),(560,'google','Ribeye Marrow','regular','400'),(561,'google','Wendy One','regular','400'),(562,'google','Nosifer','regular','400'),(563,'google','Averia Gruesa Libre','regular','400'),(564,'google','Macondo Swash Caps','regular','400'),(565,'google','Gilda Display','regular','400'),(566,'google','Marko One','regular','400'),(567,'google','Nokora','regular,700','400,700'),(568,'google','Rum Raisin','regular','400'),(569,'google','Flavors','regular','400'),(570,'google','Ribeye','regular','400'),(571,'google','Caesar Dressing','regular','400'),(572,'google','Londrina Shadow','regular','400'),(573,'google','Germania One','regular','400'),(574,'google','Cherry Swash','regular,700','400,700'),(575,'google','Underdog','regular','400'),(576,'google','Sarina','regular','400'),(577,'google','Freehand','regular','400'),(578,'google','Jim Nightshade','regular','400'),(579,'google','Autour One','regular','400'),(580,'google','Fascinate','regular','400'),(581,'google','Keania One','regular','400'),(582,'google','Metal Mania','regular','400'),(583,'google','Vampiro One','regular','400'),(584,'google','Risque','regular','400'),(585,'google','Sofadi One','regular','400'),(586,'google','Montserrat Subrayada','regular,700','400,700'),(587,'google','Macondo','regular','400'),(588,'google','Ewert','regular','400'),(589,'google','Galindo','regular','400'),(590,'google','Joti One','regular','400'),(591,'google','Unlock','regular','400'),(592,'google','Mr Bedfort','regular','400'),(593,'google','Quintessential','regular','400'),(594,'google','Angkor','regular','400'),(595,'google','Pirata One','regular','400'),(596,'google','Ceviche One','regular','400'),(597,'google','Akronim','regular','400'),(598,'google','New Rocker','regular','400'),(599,'google','Romanesco','regular','400'),(600,'google','Combo','regular','400'),(601,'google','Content','regular,700','400,700'),(602,'google','Elsie Swash Caps','regular,900','400,900'),(603,'google','Bubbler One','regular','400'),(604,'google','Plaster','regular','400'),(605,'google','Share Tech Mono','regular','400'),(606,'google','Bonbon','regular','400'),(607,'google','Miss Fajardose','regular','400'),(608,'google','Meie Script','regular','400'),(609,'google','Elsie','regular,900','400,900'),(610,'google','Freckle Face','regular','400'),(611,'google','Diplomata','regular','400'),(612,'google','Bayon','regular','400'),(613,'google','Dangrek','regular','400'),(614,'google','Preahvihear','regular','400'),(615,'google','Butcherman','regular','400'),(616,'google','Taprom','regular','400'),(617,'google','Herr Von Muellerhoff','regular','400'),(618,'google','Fascinate Inline','regular','400'),(619,'google','Jacques Francois Shadow','regular','400'),(620,'google','Faster One','regular','400'),(621,'google','Diplomata SC','regular','400'),(622,'google','Stalinist One','regular','400'),(623,'google','Snowburst One','regular','400'),(624,'google','Arbutus','regular','400'),(625,'google','Bokor','regular','400'),(626,'google','Metal','regular','400'),(627,'google','Bigelow Rules','regular','400'),(628,'google','Purple Purse','regular','400'),(629,'google','Warnes','regular','400'),(630,'google','Hanalei Fill','regular','400'),(631,'google','Siemreap','regular','400'),(632,'google','Chenla','regular','400'),(633,'google','Almendra Display','regular','400'),(634,'google','Moulpali','regular','400'),(635,'google','Fasthand','regular','400'),(636,'google','Hanalei','regular','400');

/*Table structure for table `ap_form_10392` */

DROP TABLE IF EXISTS `ap_form_10392`;

CREATE TABLE `ap_form_10392` (
  `id` int(11) NOT NULL auto_increment,
  `date_created` datetime NOT NULL default '0000-00-00 00:00:00',
  `date_updated` datetime default NULL,
  `ip_address` varchar(15) default NULL,
  `userid` varchar(15) default NULL,
  `username` varchar(80) default NULL,
  `status` int(4) unsigned NOT NULL default '1',
  `resume_key` varchar(10) default NULL,
  `element_1` int(4) unsigned NOT NULL default '0' COMMENT 'Multiple Choice',
  `element_1_other` text COMMENT 'Choice - Other',
  `element_2_1` int(4) unsigned NOT NULL default '0' COMMENT 'Checkbox - 1',
  `element_2_2` int(4) unsigned NOT NULL default '0' COMMENT 'Checkbox - 2',
  `element_2_3` int(4) unsigned NOT NULL default '0' COMMENT 'Checkbox - 3',
  `element_2_other` text COMMENT 'Choice - Other',
  `element_7_1` int(4) unsigned NOT NULL default '0' COMMENT 'Checkbox - 1',
  `element_7_2` int(4) unsigned NOT NULL default '0' COMMENT 'Checkbox - 2',
  `element_7_3` int(4) unsigned NOT NULL default '0' COMMENT 'Checkbox - 3',
  `element_6` int(4) unsigned NOT NULL default '0' COMMENT 'Multiple Choice',
  `element_14` int(4) unsigned NOT NULL default '0' COMMENT 'Multiple Choice',
  `element_14_other` text COMMENT 'Choice - Other',
  `element_16` int(4) unsigned NOT NULL default '0' COMMENT 'Multiple Choice',
  `element_16_other` text COMMENT 'Choice - Other',
  `element_18` int(4) unsigned NOT NULL default '0' COMMENT 'Drop Down',
  `element_19` int(4) unsigned NOT NULL default '0' COMMENT 'Multiple Choice',
  `element_19_other` text COMMENT 'Choice - Other',
  `element_15` int(4) unsigned NOT NULL default '0' COMMENT 'Multiple Choice',
  `element_15_other` text COMMENT 'Choice - Other',
  `element_20` int(4) unsigned NOT NULL default '0' COMMENT 'Multiple Choice',
  `element_20_other` text COMMENT 'Choice - Other',
  `element_21` int(4) unsigned NOT NULL default '0' COMMENT 'Multiple Choice',
  `element_21_other` text COMMENT 'Choice - Other',
  `element_22` text COMMENT 'Single Line Text',
  `element_23` int(4) unsigned NOT NULL default '0' COMMENT 'Multiple Choice',
  `element_23_other` text COMMENT 'Choice - Other',
  PRIMARY KEY  (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=10 DEFAULT CHARSET=utf8;

/*Data for the table `ap_form_10392` */

insert  into `ap_form_10392`(`id`,`date_created`,`date_updated`,`ip_address`,`userid`,`username`,`status`,`resume_key`,`element_1`,`element_1_other`,`element_2_1`,`element_2_2`,`element_2_3`,`element_2_other`,`element_7_1`,`element_7_2`,`element_7_3`,`element_6`,`element_14`,`element_14_other`,`element_16`,`element_16_other`,`element_18`,`element_19`,`element_19_other`,`element_15`,`element_15_other`,`element_20`,`element_20_other`,`element_21`,`element_21_other`,`element_22`,`element_23`,`element_23_other`) values (1,'2014-11-15 21:42:38',NULL,'127.0.0.1',NULL,NULL,1,NULL,0,'人妖',1,1,1,'台球',0,0,0,0,0,NULL,0,NULL,0,0,NULL,0,NULL,0,NULL,0,NULL,NULL,0,NULL),(2,'2014-11-15 22:09:55',NULL,'127.0.0.1',NULL,NULL,1,NULL,1,NULL,0,0,1,'',0,1,0,2,0,NULL,0,NULL,0,0,NULL,0,NULL,0,NULL,0,NULL,NULL,0,NULL),(3,'2014-11-17 12:20:05',NULL,'127.0.0.1',NULL,NULL,1,NULL,1,NULL,0,0,0,NULL,0,0,0,0,0,'第二题',0,'第三题',8,0,'第五题',0,'6',0,'7',0,'8','10',0,'11'),(4,'2014-11-17 16:28:12',NULL,'127.0.0.1',NULL,NULL,1,NULL,2,NULL,0,0,0,NULL,0,0,0,0,3,NULL,0,'qwe ',3,0,'阿萨德',2,NULL,3,NULL,7,NULL,'10',6,NULL),(5,'2014-11-17 16:37:33',NULL,'127.0.0.1',NULL,NULL,1,NULL,1,NULL,0,0,0,NULL,0,0,0,0,1,NULL,1,NULL,9,2,NULL,1,NULL,2,NULL,4,NULL,'10',7,NULL),(6,'2014-11-18 14:53:14',NULL,'80','80','zhang',1,NULL,1,NULL,0,0,0,NULL,0,0,0,0,3,NULL,3,NULL,9,3,NULL,3,NULL,3,NULL,6,NULL,'10',7,NULL),(7,'2014-11-18 16:57:36',NULL,NULL,NULL,NULL,1,NULL,1,NULL,0,0,0,NULL,0,0,0,0,2,NULL,2,NULL,9,2,NULL,1,NULL,2,NULL,4,NULL,'10',0,'12'),(8,'2014-11-18 17:51:27',NULL,'80','80','zhang',1,NULL,1,NULL,0,0,0,NULL,0,0,0,0,2,NULL,2,NULL,2,2,NULL,1,NULL,2,NULL,4,NULL,'10',4,NULL),(9,'2014-11-18 18:21:49',NULL,'80','80','zhang',1,NULL,2,NULL,0,0,0,NULL,0,0,0,0,3,NULL,2,NULL,1,3,NULL,3,NULL,3,NULL,4,NULL,'10',3,NULL);

/*Table structure for table `ap_form_10392_review` */

DROP TABLE IF EXISTS `ap_form_10392_review`;

CREATE TABLE `ap_form_10392_review` (
  `id` int(11) NOT NULL auto_increment,
  `date_created` datetime NOT NULL default '0000-00-00 00:00:00',
  `date_updated` datetime default NULL,
  `ip_address` varchar(15) default NULL,
  `userid` varchar(15) default NULL,
  `username` varchar(80) default NULL,
  `status` int(4) unsigned NOT NULL default '1',
  `resume_key` varchar(10) default NULL,
  `element_1` int(4) unsigned NOT NULL default '0' COMMENT 'Multiple Choice',
  `element_1_other` text COMMENT 'Choice - Other',
  `element_2_1` int(4) unsigned NOT NULL default '0' COMMENT 'Checkbox - 1',
  `element_2_2` int(4) unsigned NOT NULL default '0' COMMENT 'Checkbox - 2',
  `element_2_3` int(4) unsigned NOT NULL default '0' COMMENT 'Checkbox - 3',
  `element_2_other` text COMMENT 'Choice - Other',
  `element_7_1` int(4) unsigned NOT NULL default '0' COMMENT 'Checkbox - 1',
  `element_7_2` int(4) unsigned NOT NULL default '0' COMMENT 'Checkbox - 2',
  `element_7_3` int(4) unsigned NOT NULL default '0' COMMENT 'Checkbox - 3',
  `element_6` int(4) unsigned NOT NULL default '0' COMMENT 'Multiple Choice',
  `element_14` int(4) unsigned NOT NULL default '0' COMMENT 'Multiple Choice',
  `element_14_other` text COMMENT 'Choice - Other',
  `element_16` int(4) unsigned NOT NULL default '0' COMMENT 'Multiple Choice',
  `element_16_other` text COMMENT 'Choice - Other',
  `element_18` int(4) unsigned NOT NULL default '0' COMMENT 'Drop Down',
  `element_19` int(4) unsigned NOT NULL default '0' COMMENT 'Multiple Choice',
  `element_19_other` text COMMENT 'Choice - Other',
  `element_15` int(4) unsigned NOT NULL default '0' COMMENT 'Multiple Choice',
  `element_15_other` text COMMENT 'Choice - Other',
  `element_20` int(4) unsigned NOT NULL default '0' COMMENT 'Multiple Choice',
  `element_20_other` text COMMENT 'Choice - Other',
  `element_21` int(4) unsigned NOT NULL default '0' COMMENT 'Multiple Choice',
  `element_21_other` text COMMENT 'Choice - Other',
  `element_22` text COMMENT 'Single Line Text',
  `element_23` int(4) unsigned NOT NULL default '0' COMMENT 'Multiple Choice',
  `element_23_other` text COMMENT 'Choice - Other',
  `session_id` varchar(100) default NULL,
  PRIMARY KEY  (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=4 DEFAULT CHARSET=utf8;

/*Data for the table `ap_form_10392_review` */

insert  into `ap_form_10392_review`(`id`,`date_created`,`date_updated`,`ip_address`,`userid`,`username`,`status`,`resume_key`,`element_1`,`element_1_other`,`element_2_1`,`element_2_2`,`element_2_3`,`element_2_other`,`element_7_1`,`element_7_2`,`element_7_3`,`element_6`,`element_14`,`element_14_other`,`element_16`,`element_16_other`,`element_18`,`element_19`,`element_19_other`,`element_15`,`element_15_other`,`element_20`,`element_20_other`,`element_21`,`element_21_other`,`element_22`,`element_23`,`element_23_other`,`session_id`) values (3,'2014-11-18 18:36:12',NULL,'80','80','zhang',1,NULL,1,NULL,0,0,0,NULL,0,0,0,0,3,NULL,3,NULL,0,0,NULL,0,NULL,0,NULL,0,NULL,NULL,0,NULL,'o7o9lh72772pdvcq83kpmalj52');

/*Table structure for table `ap_form_10825` */

DROP TABLE IF EXISTS `ap_form_10825`;

CREATE TABLE `ap_form_10825` (
  `id` int(11) NOT NULL auto_increment,
  `date_created` datetime NOT NULL default '0000-00-00 00:00:00',
  `date_updated` datetime default NULL,
  `ip_address` varchar(15) default NULL,
  `status` int(4) unsigned NOT NULL default '1',
  `resume_key` varchar(10) default NULL,
  `element_1` int(4) unsigned NOT NULL default '0' COMMENT 'Multiple Choice',
  `element_1_other` text COMMENT 'Choice - Other',
  `element_2_1` int(4) unsigned NOT NULL default '0' COMMENT 'Checkbox - 1',
  `element_2_2` int(4) unsigned NOT NULL default '0' COMMENT 'Checkbox - 2',
  `element_2_3` int(4) unsigned NOT NULL default '0' COMMENT 'Checkbox - 3',
  `element_2_other` text COMMENT 'Choice - Other',
  PRIMARY KEY  (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

/*Data for the table `ap_form_10825` */

/*Table structure for table `ap_form_11022` */

DROP TABLE IF EXISTS `ap_form_11022`;

CREATE TABLE `ap_form_11022` (
  `id` int(11) NOT NULL auto_increment,
  `date_created` datetime NOT NULL default '0000-00-00 00:00:00',
  `date_updated` datetime default NULL,
  `ip_address` varchar(15) default NULL,
  `status` int(4) unsigned NOT NULL default '1',
  `resume_key` varchar(10) default NULL,
  `element_1` int(4) unsigned NOT NULL default '0' COMMENT 'Multiple Choice',
  `element_1_other` text COMMENT 'Choice - Other',
  `element_2_1` int(4) unsigned NOT NULL default '0' COMMENT 'Checkbox - 1',
  `element_2_2` int(4) unsigned NOT NULL default '0' COMMENT 'Checkbox - 2',
  `element_2_3` int(4) unsigned NOT NULL default '0' COMMENT 'Checkbox - 3',
  `element_2_other` text COMMENT 'Choice - Other',
  `element_7_1` int(4) unsigned NOT NULL default '0' COMMENT 'Checkbox - 1',
  `element_7_2` int(4) unsigned NOT NULL default '0' COMMENT 'Checkbox - 2',
  `element_7_3` int(4) unsigned NOT NULL default '0' COMMENT 'Checkbox - 3',
  `element_6` int(4) unsigned NOT NULL default '0' COMMENT 'Multiple Choice',
  `element_14` int(4) unsigned NOT NULL default '0' COMMENT 'Multiple Choice',
  `element_14_other` text COMMENT 'Choice - Other',
  `element_16` int(4) unsigned NOT NULL default '0' COMMENT 'Multiple Choice',
  `element_16_other` text COMMENT 'Choice - Other',
  `element_18` int(4) unsigned NOT NULL default '0' COMMENT 'Drop Down',
  `element_19` int(4) unsigned NOT NULL default '0' COMMENT 'Multiple Choice',
  `element_19_other` text COMMENT 'Choice - Other',
  `element_15` int(4) unsigned NOT NULL default '0' COMMENT 'Multiple Choice',
  `element_15_other` text COMMENT 'Choice - Other',
  `element_20` int(4) unsigned NOT NULL default '0' COMMENT 'Multiple Choice',
  `element_20_other` text COMMENT 'Choice - Other',
  `element_21` int(4) unsigned NOT NULL default '0' COMMENT 'Multiple Choice',
  `element_21_other` text COMMENT 'Choice - Other',
  `element_22` text COMMENT 'Single Line Text',
  `element_23` int(4) unsigned NOT NULL default '0' COMMENT 'Multiple Choice',
  `element_23_other` text COMMENT 'Choice - Other',
  PRIMARY KEY  (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

/*Data for the table `ap_form_11022` */

/*Table structure for table `ap_form_11022_review` */

DROP TABLE IF EXISTS `ap_form_11022_review`;

CREATE TABLE `ap_form_11022_review` (
  `id` int(11) NOT NULL auto_increment,
  `date_created` datetime NOT NULL default '0000-00-00 00:00:00',
  `date_updated` datetime default NULL,
  `ip_address` varchar(15) default NULL,
  `status` int(4) unsigned NOT NULL default '1',
  `resume_key` varchar(10) default NULL,
  `element_1` int(4) unsigned NOT NULL default '0' COMMENT 'Multiple Choice',
  `element_1_other` text COMMENT 'Choice - Other',
  `element_2_1` int(4) unsigned NOT NULL default '0' COMMENT 'Checkbox - 1',
  `element_2_2` int(4) unsigned NOT NULL default '0' COMMENT 'Checkbox - 2',
  `element_2_3` int(4) unsigned NOT NULL default '0' COMMENT 'Checkbox - 3',
  `element_2_other` text COMMENT 'Choice - Other',
  `element_7_1` int(4) unsigned NOT NULL default '0' COMMENT 'Checkbox - 1',
  `element_7_2` int(4) unsigned NOT NULL default '0' COMMENT 'Checkbox - 2',
  `element_7_3` int(4) unsigned NOT NULL default '0' COMMENT 'Checkbox - 3',
  `element_6` int(4) unsigned NOT NULL default '0' COMMENT 'Multiple Choice',
  `element_14` int(4) unsigned NOT NULL default '0' COMMENT 'Multiple Choice',
  `element_14_other` text COMMENT 'Choice - Other',
  `element_16` int(4) unsigned NOT NULL default '0' COMMENT 'Multiple Choice',
  `element_16_other` text COMMENT 'Choice - Other',
  `element_18` int(4) unsigned NOT NULL default '0' COMMENT 'Drop Down',
  `element_19` int(4) unsigned NOT NULL default '0' COMMENT 'Multiple Choice',
  `element_19_other` text COMMENT 'Choice - Other',
  `element_15` int(4) unsigned NOT NULL default '0' COMMENT 'Multiple Choice',
  `element_15_other` text COMMENT 'Choice - Other',
  `element_20` int(4) unsigned NOT NULL default '0' COMMENT 'Multiple Choice',
  `element_20_other` text COMMENT 'Choice - Other',
  `element_21` int(4) unsigned NOT NULL default '0' COMMENT 'Multiple Choice',
  `element_21_other` text COMMENT 'Choice - Other',
  `element_22` text COMMENT 'Single Line Text',
  `element_23` int(4) unsigned NOT NULL default '0' COMMENT 'Multiple Choice',
  `element_23_other` text COMMENT 'Choice - Other',
  `session_id` varchar(100) default NULL,
  PRIMARY KEY  (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

/*Data for the table `ap_form_11022_review` */

/*Table structure for table `ap_form_11892` */

DROP TABLE IF EXISTS `ap_form_11892`;

CREATE TABLE `ap_form_11892` (
  `id` int(11) NOT NULL auto_increment,
  `date_created` datetime NOT NULL default '0000-00-00 00:00:00',
  `date_updated` datetime default NULL,
  `ip_address` varchar(15) default NULL,
  `userid` varchar(15) default NULL,
  `status` int(4) unsigned NOT NULL default '1',
  `resume_key` varchar(10) default NULL,
  `element_1` int(4) unsigned NOT NULL default '0' COMMENT 'Multiple Choice',
  `element_2` int(4) unsigned NOT NULL default '0' COMMENT 'Multiple Choice',
  PRIMARY KEY  (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=7 DEFAULT CHARSET=utf8;

/*Data for the table `ap_form_11892` */

insert  into `ap_form_11892`(`id`,`date_created`,`date_updated`,`ip_address`,`userid`,`status`,`resume_key`,`element_1`,`element_2`) values (1,'2014-11-18 11:20:39',NULL,'127.0.0.1',NULL,1,NULL,1,0),(2,'2014-11-18 11:27:53',NULL,'127.0.0.1',NULL,1,NULL,2,0),(3,'2014-11-18 11:31:11',NULL,'127.0.0.1',NULL,1,NULL,3,2),(4,'2014-11-18 11:34:53',NULL,'127.0.0.1',NULL,1,NULL,2,2),(5,'2014-11-18 12:13:01',NULL,'127.0.0.1',NULL,1,NULL,2,2),(6,'2014-11-18 13:38:33',NULL,'127.0.0.1',NULL,1,NULL,2,2);

/*Table structure for table `ap_form_11892_review` */

DROP TABLE IF EXISTS `ap_form_11892_review`;

CREATE TABLE `ap_form_11892_review` (
  `id` int(11) NOT NULL auto_increment,
  `date_created` datetime NOT NULL default '0000-00-00 00:00:00',
  `date_updated` datetime default NULL,
  `ip_address` varchar(15) default NULL,
  `userid` varchar(15) default NULL,
  `status` int(4) unsigned NOT NULL default '1',
  `resume_key` varchar(10) default NULL,
  `element_1` int(4) unsigned NOT NULL default '0' COMMENT 'Multiple Choice',
  `element_2` int(4) unsigned NOT NULL default '0' COMMENT 'Multiple Choice',
  `session_id` varchar(100) default NULL,
  PRIMARY KEY  (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

/*Data for the table `ap_form_11892_review` */

/*Table structure for table `ap_form_2` */

DROP TABLE IF EXISTS `ap_form_2`;

CREATE TABLE `ap_form_2` (
  `id` int(11) NOT NULL auto_increment,
  `date_created` datetime NOT NULL default '0000-00-00 00:00:00',
  `date_updated` datetime default NULL,
  `ip_address` varchar(15) default NULL,
  `element_1` int(6) unsigned NOT NULL default '0' COMMENT 'Multiple Choice',
  `element_2` int(6) unsigned NOT NULL default '0' COMMENT 'Multiple Choice',
  PRIMARY KEY  (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

/*Data for the table `ap_form_2` */

/*Table structure for table `ap_form_elements` */

DROP TABLE IF EXISTS `ap_form_elements`;

CREATE TABLE `ap_form_elements` (
  `form_id` int(11) NOT NULL default '0',
  `element_id` int(11) NOT NULL default '0',
  `element_title` text,
  `element_guidelines` text,
  `element_size` varchar(6) NOT NULL default 'medium',
  `element_is_required` int(11) NOT NULL default '0',
  `element_is_unique` int(11) NOT NULL default '0',
  `element_is_private` int(11) NOT NULL default '0',
  `element_type` varchar(50) default NULL,
  `element_position` int(11) NOT NULL default '0',
  `element_default_value` text,
  `element_constraint` varchar(255) default NULL,
  `element_total_child` int(11) NOT NULL default '0',
  `element_css_class` varchar(255) NOT NULL default '',
  `element_range_min` bigint(11) unsigned NOT NULL default '0',
  `element_range_max` bigint(11) unsigned NOT NULL default '0',
  `element_range_limit_by` char(1) NOT NULL,
  `element_status` int(1) NOT NULL default '2',
  `element_choice_columns` int(1) NOT NULL default '1',
  `element_choice_has_other` int(1) NOT NULL default '0',
  `element_choice_other_label` text,
  `element_time_showsecond` int(11) NOT NULL default '0',
  `element_time_24hour` int(11) NOT NULL default '0',
  `element_address_hideline2` int(11) NOT NULL default '0',
  `element_address_us_only` int(11) NOT NULL default '0',
  `element_date_enable_range` int(1) NOT NULL default '0',
  `element_date_range_min` date default NULL,
  `element_date_range_max` date default NULL,
  `element_date_enable_selection_limit` int(1) NOT NULL default '0',
  `element_date_selection_max` int(11) NOT NULL default '1',
  `element_date_past_future` char(1) NOT NULL default 'p',
  `element_date_disable_past_future` int(1) NOT NULL default '0',
  `element_date_disable_weekend` int(1) NOT NULL default '0',
  `element_date_disable_specific` int(1) NOT NULL default '0',
  `element_date_disabled_list` text character set utf8 collate utf8_bin,
  `element_file_enable_type_limit` int(1) NOT NULL default '1',
  `element_file_block_or_allow` char(1) NOT NULL default 'b',
  `element_file_type_list` varchar(255) default NULL,
  `element_file_as_attachment` int(1) NOT NULL default '0',
  `element_file_enable_advance` int(1) NOT NULL default '0',
  `element_file_auto_upload` int(1) NOT NULL default '0',
  `element_file_enable_multi_upload` int(1) NOT NULL default '0',
  `element_file_max_selection` int(11) NOT NULL default '5',
  `element_file_enable_size_limit` int(1) NOT NULL default '0',
  `element_file_size_max` int(11) default NULL,
  `element_matrix_allow_multiselect` int(1) NOT NULL default '0',
  `element_matrix_parent_id` int(11) NOT NULL default '0',
  `element_number_enable_quantity` int(1) NOT NULL default '0',
  `element_number_quantity_link` varchar(15) default NULL,
  `element_section_display_in_email` int(1) NOT NULL default '0',
  `element_section_enable_scroll` int(1) NOT NULL default '0',
  `element_submit_use_image` int(1) NOT NULL default '0',
  `element_submit_primary_text` varchar(255) NOT NULL default 'Continue',
  `element_submit_secondary_text` varchar(255) NOT NULL default 'Previous',
  `element_submit_primary_img` varchar(255) default NULL,
  `element_submit_secondary_img` varchar(255) default NULL,
  `element_page_title` varchar(255) default NULL,
  `element_page_number` int(11) NOT NULL default '1',
  PRIMARY KEY  (`form_id`,`element_id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

/*Data for the table `ap_form_elements` */

insert  into `ap_form_elements`(`form_id`,`element_id`,`element_title`,`element_guidelines`,`element_size`,`element_is_required`,`element_is_unique`,`element_is_private`,`element_type`,`element_position`,`element_default_value`,`element_constraint`,`element_total_child`,`element_css_class`,`element_range_min`,`element_range_max`,`element_range_limit_by`,`element_status`,`element_choice_columns`,`element_choice_has_other`,`element_choice_other_label`,`element_time_showsecond`,`element_time_24hour`,`element_address_hideline2`,`element_address_us_only`,`element_date_enable_range`,`element_date_range_min`,`element_date_range_max`,`element_date_enable_selection_limit`,`element_date_selection_max`,`element_date_past_future`,`element_date_disable_past_future`,`element_date_disable_weekend`,`element_date_disable_specific`,`element_date_disabled_list`,`element_file_enable_type_limit`,`element_file_block_or_allow`,`element_file_type_list`,`element_file_as_attachment`,`element_file_enable_advance`,`element_file_auto_upload`,`element_file_enable_multi_upload`,`element_file_max_selection`,`element_file_enable_size_limit`,`element_file_size_max`,`element_matrix_allow_multiselect`,`element_matrix_parent_id`,`element_number_enable_quantity`,`element_number_quantity_link`,`element_section_display_in_email`,`element_section_enable_scroll`,`element_submit_use_image`,`element_submit_primary_text`,`element_submit_secondary_text`,`element_submit_primary_img`,`element_submit_secondary_img`,`element_page_title`,`element_page_number`) values (10392,1,'您是否曾关注过电动车或混合动力车的价格或性能 ？','','medium',1,0,0,'radio',0,'','',0,'',0,0,'c',1,1,0,'其他',0,0,0,0,0,'0000-00-00','0000-00-00',0,1,'p',0,0,0,'',1,'b','php,php3,php4,php5,phtml,exe,pl,cgi,html,htm,js',0,1,1,1,5,0,2,0,0,0,NULL,0,0,0,'Continue','Previous',NULL,NULL,NULL,1),(10392,2,'你的爱好是什么','','medium',0,0,0,'checkbox',2,'','',0,'',0,0,'c',0,1,1,'其他',0,0,0,0,0,'0000-00-00','0000-00-00',0,1,'p',0,0,0,'',1,'b','php,php3,php4,php5,phtml,exe,pl,cgi,html,htm,js',0,1,1,1,5,0,2,0,0,0,NULL,0,0,0,'Continue','Previous',NULL,NULL,NULL,2),(10825,1,'性别','','medium',0,0,0,'radio',0,'','',0,'',0,0,'c',1,1,1,'其他',0,0,0,0,0,'0000-00-00','0000-00-00',0,1,'p',0,0,0,'',1,'b','php,php3,php4,php5,phtml,exe,pl,cgi,html,htm,js',0,1,1,1,5,0,2,0,0,0,NULL,0,0,0,'Continue','Previous',NULL,NULL,NULL,1),(10825,2,'你的爱好是什么','','medium',0,0,0,'checkbox',1,'','',0,'',0,0,'c',1,1,1,'其他',0,0,0,0,0,'0000-00-00','0000-00-00',0,1,'p',0,0,0,'',1,'b','php,php3,php4,php5,phtml,exe,pl,cgi,html,htm,js',0,1,1,1,5,0,2,0,0,0,NULL,0,0,0,'Continue','Previous',NULL,NULL,NULL,1),(10392,3,'Page Break','','medium',0,0,0,'page_break',1,'','',0,'',0,0,'c',1,1,0,NULL,0,0,0,0,0,'0000-00-00','0000-00-00',0,1,'p',0,0,0,'',1,'b','php,php3,php4,php5,phtml,exe,pl,cgi,html,htm,js',0,1,1,1,5,0,2,0,0,0,NULL,0,0,0,'下一题','Previous',NULL,NULL,'',1),(10392,4,'Page Break','','medium',0,0,0,'page_break',15,'','',0,'',0,0,'c',1,1,0,NULL,0,0,0,0,0,'0000-00-00','0000-00-00',0,1,'p',0,0,0,'',1,'b','php,php3,php4,php5,phtml,exe,pl,cgi,html,htm,js',0,1,1,1,5,0,2,0,0,0,NULL,0,0,0,'Continue','Previous',NULL,NULL,'',8),(10392,5,'Page Break','','medium',0,0,0,'page_break',17,'','',0,'',0,0,'c',1,1,0,NULL,0,0,0,0,0,'0000-00-00','0000-00-00',0,1,'p',0,0,0,'',1,'b','php,php3,php4,php5,phtml,exe,pl,cgi,html,htm,js',0,1,1,1,5,0,2,0,0,0,NULL,0,0,0,'Continue','Previous',NULL,NULL,'',9),(10392,6,'Multiple Choice','','medium',0,0,0,'radio',6,'','',0,'',0,0,'c',0,1,0,'Other',0,0,0,0,0,'0000-00-00','0000-00-00',0,1,'p',0,0,0,'',1,'b','php,php3,php4,php5,phtml,exe,pl,cgi,html,htm,js',0,1,1,1,5,0,2,0,0,0,NULL,0,0,0,'Continue','Previous',NULL,NULL,NULL,4),(10392,7,'Checkboxes','','medium',0,0,0,'checkbox',4,'','',0,'',0,0,'c',0,1,0,'Other',0,0,0,0,0,'0000-00-00','0000-00-00',0,1,'p',0,0,0,'',1,'b','php,php3,php4,php5,phtml,exe,pl,cgi,html,htm,js',0,1,1,1,5,0,2,0,0,0,NULL,0,0,0,'Continue','Previous',NULL,NULL,NULL,3),(10392,8,'Page Break','','medium',0,0,0,'page_break',3,'','',0,'',0,0,'c',1,1,0,NULL,0,0,0,0,0,'0000-00-00','0000-00-00',0,1,'p',0,0,0,'',1,'b','php,php3,php4,php5,phtml,exe,pl,cgi,html,htm,js',0,1,1,1,5,0,2,0,0,0,NULL,0,0,0,'继续','上一题',NULL,NULL,'Untitled Page',2),(10392,9,'Page Break','','medium',0,0,0,'page_break',11,'','',0,'',0,0,'c',1,1,0,NULL,0,0,0,0,0,'0000-00-00','0000-00-00',0,1,'p',0,0,0,'',1,'b','php,php3,php4,php5,phtml,exe,pl,cgi,html,htm,js',0,1,1,1,5,0,2,0,0,0,NULL,0,0,0,'Continue','Previous',NULL,NULL,'Untitled Page',6),(10392,10,'Page Break','','medium',0,0,0,'page_break',13,'','',0,'',0,0,'c',1,1,0,NULL,0,0,0,0,0,'0000-00-00','0000-00-00',0,1,'p',0,0,0,'',1,'b','php,php3,php4,php5,phtml,exe,pl,cgi,html,htm,js',0,1,1,1,5,0,2,0,0,0,NULL,0,0,0,'Continue','Previous',NULL,NULL,'Untitled Page',7),(10392,11,'Page Break','','medium',0,0,0,'page_break',9,'','',0,'',0,0,'c',1,1,0,NULL,0,0,0,0,0,'0000-00-00','0000-00-00',0,1,'p',0,0,0,'',1,'b','php,php3,php4,php5,phtml,exe,pl,cgi,html,htm,js',0,1,1,1,5,0,2,0,0,0,NULL,0,0,0,'Continue','Previous',NULL,NULL,'Untitled Page',5),(10392,12,'Page Break','','medium',0,0,0,'page_break',7,'','',0,'',0,0,'c',1,1,0,NULL,0,0,0,0,0,'0000-00-00','0000-00-00',0,1,'p',0,0,0,'',1,'b','php,php3,php4,php5,phtml,exe,pl,cgi,html,htm,js',0,1,1,1,5,0,2,0,0,0,NULL,0,0,0,'Continue','Previous',NULL,NULL,'Untitled Page',4),(10392,13,'Page Break','','medium',0,0,0,'page_break',5,'','',0,'',0,0,'c',1,1,0,NULL,0,0,0,0,0,'0000-00-00','0000-00-00',0,1,'p',0,0,0,'',1,'b','php,php3,php4,php5,phtml,exe,pl,cgi,html,htm,js',0,1,1,1,5,0,2,0,0,0,NULL,0,0,0,'继续','Previous',NULL,NULL,'Untitled Page',3),(10392,14,'当您计划购买下一辆车时, 您愿意考虑哪种类型的车?\n定义：传统型内燃机车是一种只由内燃机驱动的汽车，燃料主要包括汽油，柴油，液化石油气，压缩天然气等； 混合动力汽车是一种结合使用传统内燃机和电动机作为动力源的汽车； 插电式混合动力汽车是一种可由外部电源充电的混合动力车； 纯电动汽车是一种只由可充电电池组提供动力的电动汽车。','','medium',1,0,0,'radio',2,'','',0,'',0,0,'c',1,1,1,'其它 ',0,0,0,0,0,'0000-00-00','0000-00-00',0,1,'p',0,0,0,'',1,'b','php,php3,php4,php5,phtml,exe,pl,cgi,html,htm,js',0,1,1,1,5,0,2,0,0,0,NULL,0,0,0,'Continue','Previous',NULL,NULL,NULL,2),(10392,15,'当您购买一辆传统型内燃机汽车时，你更喜欢采用哪种消费方式？*\n租赁汽车：购置税, 车船使用税，交通事故强制保险, 常规保险（包括四项常规保险：车损险、第三者责任险、全车盗抢险和不计免赔特约险）均由租赁公司承担；维修保养费包含在租赁费中，在租赁期间，如不出交通事故，用户除租金外只需支付油费。租赁费用较高，但对用户来说比较方便。在欧洲每年约20%的新车为租赁使用，用户主要为公司。','','medium',1,0,0,'radio',10,'','',0,'',0,0,'c',1,1,1,'其他',0,0,0,0,0,'0000-00-00','0000-00-00',0,1,'p',0,0,0,'',1,'b','php,php3,php4,php5,phtml,exe,pl,cgi,html,htm,js',0,1,1,1,5,0,2,0,0,0,NULL,0,0,0,'Continue','Previous',NULL,NULL,NULL,6),(10392,16,'您更可能购买哪种类型的汽车作为您的下一辆车（包括第一辆车）？\n定义：传统型内燃机车是一种只由内燃机驱动的汽车，燃料主要包括汽油，柴油，液化石油气，压缩天然气等； 混合动力汽车是一种结合使用传统内燃机和电动机作为动力源的汽车； 插电式混合动力汽车是一种可由外部电源充电的混合动力车； 纯电动汽车是一种只由可充电电池组提供动力的电动汽车。','','medium',1,0,0,'radio',4,'','',0,'',0,0,'c',1,1,1,'其他',0,0,0,0,0,'0000-00-00','0000-00-00',0,1,'p',0,0,0,'',1,'b','php,php3,php4,php5,phtml,exe,pl,cgi,html,htm,js',0,1,1,1,5,0,2,0,0,0,NULL,0,0,0,'Continue','Previous',NULL,NULL,NULL,3),(10392,23,'当油价涨到何等价位时，您可能会考虑购买电动汽车？','','medium',1,0,0,'radio',18,'','',0,'',0,0,'c',1,1,1,'其他',0,0,0,0,0,'0000-00-00','0000-00-00',0,1,'p',0,0,0,'',1,'b','php,php3,php4,php5,phtml,exe,pl,cgi,html,htm,js',0,1,1,1,5,0,2,0,0,0,NULL,0,0,0,'Continue','Previous',NULL,NULL,NULL,10),(10392,18,'您计划将何时购买您的下一辆车？','','medium',1,0,0,'select',6,'','',0,'',0,0,'c',1,1,0,NULL,0,0,0,0,0,'0000-00-00','0000-00-00',0,1,'p',0,0,0,'',1,'b','php,php3,php4,php5,phtml,exe,pl,cgi,html,htm,js',0,1,1,1,5,0,2,0,0,0,NULL,0,0,0,'Continue','Previous',NULL,NULL,NULL,4),(10392,19,'如果您已经拥有了一辆传统型内燃机汽车，设想您计划购买第二辆车,您将更愿意选择哪种类型的汽车？','','medium',1,0,0,'radio',8,'','',0,'',0,0,'c',1,1,1,'其他',0,0,0,0,0,'0000-00-00','0000-00-00',0,1,'p',0,0,0,'',1,'b','php,php3,php4,php5,phtml,exe,pl,cgi,html,htm,js',0,1,1,1,5,0,2,0,0,0,NULL,0,0,0,'Continue','Previous',NULL,NULL,NULL,5),(10392,20,'当您购买一辆电动车或混合型电动车时，你更喜欢采用哪种消费方式？*\n租赁汽车：购置税, 车船使用税，交通事故强制保险, 常规保险（包括四项常规保险：车损险、第三者责任险、全车盗抢险和不计免赔特约险）均由租赁公司承担；维修保养费包含在租赁费中，用户除租金外只需支付电费和油费。 由于电动汽车技术尚未成熟，潜在用户对其了解不多，加之价格很高，对电动车感兴趣的用户来说，也许电动汽车租赁是在电动汽车市场初始阶段的不错选择。','','medium',1,0,0,'radio',12,'','',0,'',0,0,'c',1,1,1,'其他',0,0,0,0,0,'0000-00-00','0000-00-00',0,1,'p',0,0,0,'',1,'b','php,php3,php4,php5,phtml,exe,pl,cgi,html,htm,js',0,1,1,1,5,0,2,0,0,0,NULL,0,0,0,'Continue','Previous',NULL,NULL,NULL,7),(10392,21,'假设你选择租赁使用一辆纯电动汽车，您希望租赁期限为多久？','','medium',1,0,0,'radio',14,'','',0,'',0,0,'c',1,1,1,'其他',0,0,0,0,0,'0000-00-00','0000-00-00',0,1,'p',0,0,0,'',1,'b','php,php3,php4,php5,phtml,exe,pl,cgi,html,htm,js',0,1,1,1,5,0,2,0,0,0,NULL,0,0,0,'Continue','Previous',NULL,NULL,NULL,8),(10392,22,'假设您选择租赁使用一辆日产聆风电动汽车（在中国尚未销售），您愿意每月支付多少租金？请输入人民币:\n一辆与日产聆风尺寸相近的日产骐达传统燃油汽车，以综合路况下的平均油耗为7.3L/100km，每月行驶1500公里，93号汽油价格7.92元计算，平均每月用车成本开支（包括燃油费+车险+车船税+保养费）约需人民币1400元。如果您平时驾车，可与您的座驾的使用成本进行比较','','small',1,0,0,'text',16,'','yen',0,'',0,0,'c',1,1,0,NULL,0,0,0,0,0,'0000-00-00','0000-00-00',0,1,'p',0,0,0,'',1,'b','php,php3,php4,php5,phtml,exe,pl,cgi,html,htm,js',0,1,1,1,5,0,2,0,0,0,NULL,0,0,0,'Continue','Previous',NULL,NULL,NULL,9),(11022,1,'您是否曾关注过电动车或混合动力车的价格或性能 ？','','medium',1,0,0,'radio',0,'','',0,'',0,0,'c',1,1,0,'其他',0,0,0,0,0,'0000-00-00','0000-00-00',0,1,'p',0,0,0,'',1,'b','php,php3,php4,php5,phtml,exe,pl,cgi,html,htm,js',0,1,1,1,5,0,2,0,0,0,NULL,0,0,0,'Continue','Previous',NULL,NULL,NULL,1),(11022,2,'你的爱好是什么','','medium',0,0,0,'checkbox',2,'','',0,'',0,0,'c',0,1,1,'其他',0,0,0,0,0,'0000-00-00','0000-00-00',0,1,'p',0,0,0,'',1,'b','php,php3,php4,php5,phtml,exe,pl,cgi,html,htm,js',0,1,1,1,5,0,2,0,0,0,NULL,0,0,0,'Continue','Previous',NULL,NULL,NULL,2),(11022,3,'Page Break','','medium',0,0,0,'page_break',1,'','',0,'',0,0,'c',1,1,0,NULL,0,0,0,0,0,'0000-00-00','0000-00-00',0,1,'p',0,0,0,'',1,'b','php,php3,php4,php5,phtml,exe,pl,cgi,html,htm,js',0,1,1,1,5,0,2,0,0,0,NULL,0,0,0,'下一题','Previous',NULL,NULL,'',1),(11022,4,'Page Break','','medium',0,0,0,'page_break',15,'','',0,'',0,0,'c',1,1,0,NULL,0,0,0,0,0,'0000-00-00','0000-00-00',0,1,'p',0,0,0,'',1,'b','php,php3,php4,php5,phtml,exe,pl,cgi,html,htm,js',0,1,1,1,5,0,2,0,0,0,NULL,0,0,0,'Continue','Previous',NULL,NULL,'',8),(11022,5,'Page Break','','medium',0,0,0,'page_break',17,'','',0,'',0,0,'c',1,1,0,NULL,0,0,0,0,0,'0000-00-00','0000-00-00',0,1,'p',0,0,0,'',1,'b','php,php3,php4,php5,phtml,exe,pl,cgi,html,htm,js',0,1,1,1,5,0,2,0,0,0,NULL,0,0,0,'Continue','Previous',NULL,NULL,'',9),(11022,6,'Multiple Choice','','medium',0,0,0,'radio',6,'','',0,'',0,0,'c',0,1,0,'Other',0,0,0,0,0,'0000-00-00','0000-00-00',0,1,'p',0,0,0,'',1,'b','php,php3,php4,php5,phtml,exe,pl,cgi,html,htm,js',0,1,1,1,5,0,2,0,0,0,NULL,0,0,0,'Continue','Previous',NULL,NULL,NULL,4),(11022,7,'Checkboxes','','medium',0,0,0,'checkbox',4,'','',0,'',0,0,'c',0,1,0,'Other',0,0,0,0,0,'0000-00-00','0000-00-00',0,1,'p',0,0,0,'',1,'b','php,php3,php4,php5,phtml,exe,pl,cgi,html,htm,js',0,1,1,1,5,0,2,0,0,0,NULL,0,0,0,'Continue','Previous',NULL,NULL,NULL,3),(11022,8,'Page Break','','medium',0,0,0,'page_break',3,'','',0,'',0,0,'c',1,1,0,NULL,0,0,0,0,0,'0000-00-00','0000-00-00',0,1,'p',0,0,0,'',1,'b','php,php3,php4,php5,phtml,exe,pl,cgi,html,htm,js',0,1,1,1,5,0,2,0,0,0,NULL,0,0,0,'继续','上一题',NULL,NULL,'Untitled Page',2),(11022,9,'Page Break','','medium',0,0,0,'page_break',11,'','',0,'',0,0,'c',1,1,0,NULL,0,0,0,0,0,'0000-00-00','0000-00-00',0,1,'p',0,0,0,'',1,'b','php,php3,php4,php5,phtml,exe,pl,cgi,html,htm,js',0,1,1,1,5,0,2,0,0,0,NULL,0,0,0,'Continue','Previous',NULL,NULL,'Untitled Page',6),(11022,10,'Page Break','','medium',0,0,0,'page_break',13,'','',0,'',0,0,'c',1,1,0,NULL,0,0,0,0,0,'0000-00-00','0000-00-00',0,1,'p',0,0,0,'',1,'b','php,php3,php4,php5,phtml,exe,pl,cgi,html,htm,js',0,1,1,1,5,0,2,0,0,0,NULL,0,0,0,'Continue','Previous',NULL,NULL,'Untitled Page',7),(11022,11,'Page Break','','medium',0,0,0,'page_break',9,'','',0,'',0,0,'c',1,1,0,NULL,0,0,0,0,0,'0000-00-00','0000-00-00',0,1,'p',0,0,0,'',1,'b','php,php3,php4,php5,phtml,exe,pl,cgi,html,htm,js',0,1,1,1,5,0,2,0,0,0,NULL,0,0,0,'Continue','Previous',NULL,NULL,'Untitled Page',5),(11022,12,'Page Break','','medium',0,0,0,'page_break',7,'','',0,'',0,0,'c',1,1,0,NULL,0,0,0,0,0,'0000-00-00','0000-00-00',0,1,'p',0,0,0,'',1,'b','php,php3,php4,php5,phtml,exe,pl,cgi,html,htm,js',0,1,1,1,5,0,2,0,0,0,NULL,0,0,0,'Continue','Previous',NULL,NULL,'Untitled Page',4),(11022,13,'Page Break','','medium',0,0,0,'page_break',5,'','',0,'',0,0,'c',1,1,0,NULL,0,0,0,0,0,'0000-00-00','0000-00-00',0,1,'p',0,0,0,'',1,'b','php,php3,php4,php5,phtml,exe,pl,cgi,html,htm,js',0,1,1,1,5,0,2,0,0,0,NULL,0,0,0,'Continue','Previous',NULL,NULL,'Untitled Page',3),(11022,14,'当您计划购买下一辆车时, 您愿意考虑哪种类型的车?\n定义：传统型内燃机车是一种只由内燃机驱动的汽车，燃料主要包括汽油，柴油，液化石油气，压缩天然气等； 混合动力汽车是一种结合使用传统内燃机和电动机作为动力源的汽车； 插电式混合动力汽车是一种可由外部电源充电的混合动力车； 纯电动汽车是一种只由可充电电池组提供动力的电动汽车。','','medium',1,0,0,'radio',2,'','',0,'',0,0,'c',1,1,1,'其它 ',0,0,0,0,0,'0000-00-00','0000-00-00',0,1,'p',0,0,0,'',1,'b','php,php3,php4,php5,phtml,exe,pl,cgi,html,htm,js',0,1,1,1,5,0,2,0,0,0,NULL,0,0,0,'Continue','Previous',NULL,NULL,NULL,2),(11022,15,'当您购买一辆传统型内燃机汽车时，你更喜欢采用哪种消费方式？*\n租赁汽车：购置税, 车船使用税，交通事故强制保险, 常规保险（包括四项常规保险：车损险、第三者责任险、全车盗抢险和不计免赔特约险）均由租赁公司承担；维修保养费包含在租赁费中，在租赁期间，如不出交通事故，用户除租金外只需支付油费。租赁费用较高，但对用户来说比较方便。在欧洲每年约20%的新车为租赁使用，用户主要为公司。','','medium',1,0,0,'radio',10,'','',0,'',0,0,'c',1,1,1,'其他',0,0,0,0,0,'0000-00-00','0000-00-00',0,1,'p',0,0,0,'',1,'b','php,php3,php4,php5,phtml,exe,pl,cgi,html,htm,js',0,1,1,1,5,0,2,0,0,0,NULL,0,0,0,'Continue','Previous',NULL,NULL,NULL,6),(11022,16,'您更可能购买哪种类型的汽车作为您的下一辆车（包括第一辆车）？\n定义：传统型内燃机车是一种只由内燃机驱动的汽车，燃料主要包括汽油，柴油，液化石油气，压缩天然气等； 混合动力汽车是一种结合使用传统内燃机和电动机作为动力源的汽车； 插电式混合动力汽车是一种可由外部电源充电的混合动力车； 纯电动汽车是一种只由可充电电池组提供动力的电动汽车。','','medium',1,0,0,'radio',4,'','',0,'',0,0,'c',1,1,1,'其他',0,0,0,0,0,'0000-00-00','0000-00-00',0,1,'p',0,0,0,'',1,'b','php,php3,php4,php5,phtml,exe,pl,cgi,html,htm,js',0,1,1,1,5,0,2,0,0,0,NULL,0,0,0,'Continue','Previous',NULL,NULL,NULL,3),(11022,18,'您计划将何时购买您的下一辆车？','','medium',1,0,0,'select',6,'','',0,'',0,0,'c',1,1,0,NULL,0,0,0,0,0,'0000-00-00','0000-00-00',0,1,'p',0,0,0,'',1,'b','php,php3,php4,php5,phtml,exe,pl,cgi,html,htm,js',0,1,1,1,5,0,2,0,0,0,NULL,0,0,0,'Continue','Previous',NULL,NULL,NULL,4),(11022,19,'如果您已经拥有了一辆传统型内燃机汽车，设想您计划购买第二辆车,您将更愿意选择哪种类型的汽车？','','medium',1,0,0,'radio',8,'','',0,'',0,0,'c',1,1,1,'其他',0,0,0,0,0,'0000-00-00','0000-00-00',0,1,'p',0,0,0,'',1,'b','php,php3,php4,php5,phtml,exe,pl,cgi,html,htm,js',0,1,1,1,5,0,2,0,0,0,NULL,0,0,0,'Continue','Previous',NULL,NULL,NULL,5),(11022,20,'当您购买一辆电动车或混合型电动车时，你更喜欢采用哪种消费方式？*\n租赁汽车：购置税, 车船使用税，交通事故强制保险, 常规保险（包括四项常规保险：车损险、第三者责任险、全车盗抢险和不计免赔特约险）均由租赁公司承担；维修保养费包含在租赁费中，用户除租金外只需支付电费和油费。 由于电动汽车技术尚未成熟，潜在用户对其了解不多，加之价格很高，对电动车感兴趣的用户来说，也许电动汽车租赁是在电动汽车市场初始阶段的不错选择。','','medium',1,0,0,'radio',12,'','',0,'',0,0,'c',1,1,1,'其他',0,0,0,0,0,'0000-00-00','0000-00-00',0,1,'p',0,0,0,'',1,'b','php,php3,php4,php5,phtml,exe,pl,cgi,html,htm,js',0,1,1,1,5,0,2,0,0,0,NULL,0,0,0,'Continue','Previous',NULL,NULL,NULL,7),(11022,21,'假设你选择租赁使用一辆纯电动汽车，您希望租赁期限为多久？','','medium',1,0,0,'radio',14,'','',0,'',0,0,'c',1,1,1,'其他',0,0,0,0,0,'0000-00-00','0000-00-00',0,1,'p',0,0,0,'',1,'b','php,php3,php4,php5,phtml,exe,pl,cgi,html,htm,js',0,1,1,1,5,0,2,0,0,0,NULL,0,0,0,'Continue','Previous',NULL,NULL,NULL,8),(11022,22,'假设您选择租赁使用一辆日产聆风电动汽车（在中国尚未销售），您愿意每月支付多少租金？请输入人民币:\n一辆与日产聆风尺寸相近的日产骐达传统燃油汽车，以综合路况下的平均油耗为7.3L/100km，每月行驶1500公里，93号汽油价格7.92元计算，平均每月用车成本开支（包括燃油费+车险+车船税+保养费）约需人民币1400元。如果您平时驾车，可与您的座驾的使用成本进行比较','','small',1,0,0,'text',16,'','yen',0,'',0,0,'c',1,1,0,NULL,0,0,0,0,0,'0000-00-00','0000-00-00',0,1,'p',0,0,0,'',1,'b','php,php3,php4,php5,phtml,exe,pl,cgi,html,htm,js',0,1,1,1,5,0,2,0,0,0,NULL,0,0,0,'Continue','Previous',NULL,NULL,NULL,9),(11022,23,'当油价涨到何等价位时，您可能会考虑购买电动汽车？','','medium',1,0,0,'radio',18,'','',0,'',0,0,'c',1,1,1,'其他',0,0,0,0,0,'0000-00-00','0000-00-00',0,1,'p',0,0,0,'',1,'b','php,php3,php4,php5,phtml,exe,pl,cgi,html,htm,js',0,1,1,1,5,0,2,0,0,0,NULL,0,0,0,'Continue','Previous',NULL,NULL,NULL,10),(11892,1,'Multiple Choice','','medium',0,0,0,'radio',0,'','',0,'',0,0,'c',1,1,0,'Other',0,0,0,0,0,'0000-00-00','0000-00-00',0,1,'p',0,0,0,'',1,'b','php,php3,php4,php5,phtml,exe,pl,cgi,html,htm,js',0,1,1,1,5,0,2,0,0,0,NULL,0,0,0,'Continue','Previous',NULL,NULL,NULL,1),(11892,2,'你的爱好','','medium',0,0,0,'radio',2,'','',0,'',0,0,'c',1,1,0,'Other',0,0,0,0,0,'0000-00-00','0000-00-00',0,1,'p',0,0,0,'',1,'b','php,php3,php4,php5,phtml,exe,pl,cgi,html,htm,js',0,1,1,1,5,0,2,0,0,0,NULL,0,0,0,'Continue','Previous',NULL,NULL,NULL,2),(11892,3,'Page Break','','medium',0,0,0,'page_break',1,'','',0,'',0,0,'c',1,1,0,NULL,0,0,0,0,0,'0000-00-00','0000-00-00',0,1,'p',0,0,0,'',1,'b','php,php3,php4,php5,phtml,exe,pl,cgi,html,htm,js',0,1,1,1,5,0,2,0,0,0,NULL,0,0,0,'Continue','Previous',NULL,NULL,'Untitled Page',1);

/*Table structure for table `ap_form_filters` */

DROP TABLE IF EXISTS `ap_form_filters`;

CREATE TABLE `ap_form_filters` (
  `aff_id` int(11) unsigned NOT NULL auto_increment,
  `form_id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL default '1',
  `element_name` varchar(50) NOT NULL default '',
  `filter_condition` varchar(15) NOT NULL default 'is',
  `filter_keyword` varchar(255) NOT NULL default '',
  PRIMARY KEY  (`aff_id`),
  KEY `form_id` (`form_id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

/*Data for the table `ap_form_filters` */

/*Table structure for table `ap_form_locks` */

DROP TABLE IF EXISTS `ap_form_locks`;

CREATE TABLE `ap_form_locks` (
  `form_id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `lock_date` datetime NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

/*Data for the table `ap_form_locks` */

/*Table structure for table `ap_form_payments` */

DROP TABLE IF EXISTS `ap_form_payments`;

CREATE TABLE `ap_form_payments` (
  `afp_id` int(11) unsigned NOT NULL auto_increment,
  `form_id` int(11) unsigned NOT NULL,
  `record_id` int(11) unsigned NOT NULL,
  `payment_id` varchar(255) default NULL,
  `date_created` datetime default NULL,
  `payment_date` datetime default NULL,
  `payment_status` varchar(255) default NULL,
  `payment_fullname` varchar(255) default NULL,
  `payment_amount` decimal(62,2) NOT NULL default '0.00',
  `payment_currency` varchar(3) NOT NULL default 'usd',
  `payment_test_mode` int(1) NOT NULL default '0',
  `payment_merchant_type` varchar(25) default NULL,
  `status` int(1) NOT NULL default '1',
  `billing_street` varchar(255) default NULL,
  `billing_city` varchar(255) default NULL,
  `billing_state` varchar(255) default NULL,
  `billing_zipcode` varchar(255) default NULL,
  `billing_country` varchar(255) default NULL,
  `same_shipping_address` int(1) NOT NULL default '1',
  `shipping_street` varchar(255) default NULL,
  `shipping_city` varchar(255) default NULL,
  `shipping_state` varchar(255) default NULL,
  `shipping_zipcode` varchar(255) default NULL,
  `shipping_country` varchar(255) default NULL,
  PRIMARY KEY  (`afp_id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

/*Data for the table `ap_form_payments` */

/*Table structure for table `ap_form_sorts` */

DROP TABLE IF EXISTS `ap_form_sorts`;

CREATE TABLE `ap_form_sorts` (
  `user_id` int(11) NOT NULL,
  `sort_by` varchar(25) default '',
  PRIMARY KEY  (`user_id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

/*Data for the table `ap_form_sorts` */

/*Table structure for table `ap_form_themes` */

DROP TABLE IF EXISTS `ap_form_themes`;

CREATE TABLE `ap_form_themes` (
  `theme_id` int(11) unsigned NOT NULL auto_increment,
  `user_id` int(11) NOT NULL default '1',
  `status` int(1) default '1',
  `theme_has_css` int(1) NOT NULL default '0',
  `theme_name` varchar(255) default '',
  `theme_built_in` int(1) NOT NULL default '0',
  `theme_is_private` int(11) NOT NULL default '1',
  `logo_type` varchar(11) NOT NULL default 'default' COMMENT 'default,custom,disabled',
  `logo_custom_image` text,
  `logo_custom_height` int(11) NOT NULL default '40',
  `logo_default_image` varchar(50) default '',
  `logo_default_repeat` int(1) NOT NULL default '0',
  `wallpaper_bg_type` varchar(11) NOT NULL default 'color' COMMENT 'color,pattern,custom',
  `wallpaper_bg_color` varchar(11) default '',
  `wallpaper_bg_pattern` varchar(50) default '',
  `wallpaper_bg_custom` text,
  `header_bg_type` varchar(11) NOT NULL default 'color' COMMENT 'color,pattern,custom',
  `header_bg_color` varchar(11) default '',
  `header_bg_pattern` varchar(50) default '',
  `header_bg_custom` text,
  `form_bg_type` varchar(11) NOT NULL default 'color' COMMENT 'color,pattern,custom',
  `form_bg_color` varchar(11) default '',
  `form_bg_pattern` varchar(50) default '',
  `form_bg_custom` text,
  `highlight_bg_type` varchar(11) NOT NULL default 'color' COMMENT 'color,pattern,custom',
  `highlight_bg_color` varchar(11) default '',
  `highlight_bg_pattern` varchar(50) default '',
  `highlight_bg_custom` text,
  `guidelines_bg_type` varchar(11) NOT NULL default 'color' COMMENT 'color,pattern,custom',
  `guidelines_bg_color` varchar(11) default '',
  `guidelines_bg_pattern` varchar(50) default '',
  `guidelines_bg_custom` text,
  `field_bg_type` varchar(11) NOT NULL default 'color' COMMENT 'color,pattern,custom',
  `field_bg_color` varchar(11) default '',
  `field_bg_pattern` varchar(50) default '',
  `field_bg_custom` text,
  `form_title_font_type` varchar(50) NOT NULL default 'Lucida Grande',
  `form_title_font_weight` int(11) NOT NULL default '400',
  `form_title_font_style` varchar(25) NOT NULL default 'normal',
  `form_title_font_size` varchar(11) default '',
  `form_title_font_color` varchar(11) default '',
  `form_desc_font_type` varchar(50) NOT NULL default 'Lucida Grande',
  `form_desc_font_weight` int(11) NOT NULL default '400',
  `form_desc_font_style` varchar(25) NOT NULL default 'normal',
  `form_desc_font_size` varchar(11) default '',
  `form_desc_font_color` varchar(11) default '',
  `field_title_font_type` varchar(50) NOT NULL default 'Lucida Grande',
  `field_title_font_weight` int(11) NOT NULL default '400',
  `field_title_font_style` varchar(25) NOT NULL default 'normal',
  `field_title_font_size` varchar(11) default '',
  `field_title_font_color` varchar(11) default '',
  `guidelines_font_type` varchar(50) NOT NULL default 'Lucida Grande',
  `guidelines_font_weight` int(11) NOT NULL default '400',
  `guidelines_font_style` varchar(25) NOT NULL default 'normal',
  `guidelines_font_size` varchar(11) default '',
  `guidelines_font_color` varchar(11) default '',
  `section_title_font_type` varchar(50) NOT NULL default 'Lucida Grande',
  `section_title_font_weight` int(11) NOT NULL default '400',
  `section_title_font_style` varchar(25) NOT NULL default 'normal',
  `section_title_font_size` varchar(11) default '',
  `section_title_font_color` varchar(11) default '',
  `section_desc_font_type` varchar(50) NOT NULL default 'Lucida Grande',
  `section_desc_font_weight` int(11) NOT NULL default '400',
  `section_desc_font_style` varchar(25) NOT NULL default 'normal',
  `section_desc_font_size` varchar(11) default '',
  `section_desc_font_color` varchar(11) default '',
  `field_text_font_type` varchar(50) NOT NULL default 'Lucida Grande',
  `field_text_font_weight` int(11) NOT NULL default '400',
  `field_text_font_style` varchar(25) NOT NULL default 'normal',
  `field_text_font_size` varchar(11) default '',
  `field_text_font_color` varchar(11) default '',
  `border_form_width` int(11) NOT NULL default '1',
  `border_form_style` varchar(11) NOT NULL default 'solid',
  `border_form_color` varchar(11) default '',
  `border_guidelines_width` int(11) NOT NULL default '1',
  `border_guidelines_style` varchar(11) NOT NULL default 'solid',
  `border_guidelines_color` varchar(11) default '',
  `border_section_width` int(11) NOT NULL default '1',
  `border_section_style` varchar(11) NOT NULL default 'solid',
  `border_section_color` varchar(11) default '',
  `form_shadow_style` varchar(25) NOT NULL default 'WarpShadow',
  `form_shadow_size` varchar(11) NOT NULL default 'large',
  `form_shadow_brightness` varchar(11) NOT NULL default 'normal',
  `form_button_type` varchar(11) NOT NULL default 'text',
  `form_button_text` varchar(100) NOT NULL default 'Submit',
  `form_button_image` text,
  `advanced_css` text,
  PRIMARY KEY  (`theme_id`),
  KEY `theme_name` (`theme_name`)
) ENGINE=MyISAM AUTO_INCREMENT=24 DEFAULT CHARSET=utf8;

/*Data for the table `ap_form_themes` */

insert  into `ap_form_themes`(`theme_id`,`user_id`,`status`,`theme_has_css`,`theme_name`,`theme_built_in`,`theme_is_private`,`logo_type`,`logo_custom_image`,`logo_custom_height`,`logo_default_image`,`logo_default_repeat`,`wallpaper_bg_type`,`wallpaper_bg_color`,`wallpaper_bg_pattern`,`wallpaper_bg_custom`,`header_bg_type`,`header_bg_color`,`header_bg_pattern`,`header_bg_custom`,`form_bg_type`,`form_bg_color`,`form_bg_pattern`,`form_bg_custom`,`highlight_bg_type`,`highlight_bg_color`,`highlight_bg_pattern`,`highlight_bg_custom`,`guidelines_bg_type`,`guidelines_bg_color`,`guidelines_bg_pattern`,`guidelines_bg_custom`,`field_bg_type`,`field_bg_color`,`field_bg_pattern`,`field_bg_custom`,`form_title_font_type`,`form_title_font_weight`,`form_title_font_style`,`form_title_font_size`,`form_title_font_color`,`form_desc_font_type`,`form_desc_font_weight`,`form_desc_font_style`,`form_desc_font_size`,`form_desc_font_color`,`field_title_font_type`,`field_title_font_weight`,`field_title_font_style`,`field_title_font_size`,`field_title_font_color`,`guidelines_font_type`,`guidelines_font_weight`,`guidelines_font_style`,`guidelines_font_size`,`guidelines_font_color`,`section_title_font_type`,`section_title_font_weight`,`section_title_font_style`,`section_title_font_size`,`section_title_font_color`,`section_desc_font_type`,`section_desc_font_weight`,`section_desc_font_style`,`section_desc_font_size`,`section_desc_font_color`,`field_text_font_type`,`field_text_font_weight`,`field_text_font_style`,`field_text_font_size`,`field_text_font_color`,`border_form_width`,`border_form_style`,`border_form_color`,`border_guidelines_width`,`border_guidelines_style`,`border_guidelines_color`,`border_section_width`,`border_section_style`,`border_section_color`,`form_shadow_style`,`form_shadow_size`,`form_shadow_brightness`,`form_button_type`,`form_button_text`,`form_button_image`,`advanced_css`) values (1,1,1,0,'Green Senegal',1,1,'default','http://',40,'machform.png',0,'color','#cfdfc5','','','color','#bad4a9','','','color','#ffffff','','','color','#ecf1ea','','','color','#ecf1ea','','','color','#cfdfc5','','','Philosopher',700,'normal','','#80af1b','Philosopher',400,'normal','100%','#80af1b','Philosopher',700,'normal','110%','#80af1b','Ubuntu',400,'normal','','#666666','Philosopher',700,'normal','110%','#80af1b','Philosopher',400,'normal','95%','#80af1b','Ubuntu',400,'normal','','#666666',1,'solid','#bad4a9',1,'dashed','#bad4a9',1,'dotted','#CCCCCC','WarpShadow','large','normal','text','Submit','http://',''),(2,1,1,0,'Blue Bigbird',1,1,'default','http://',40,'machform.png',0,'color','#336699','','','color','#6699cc','','','color','#ffffff','','','color','#ccdced','','','color','#6699cc','','','color','#ffffff','','','Open Sans',600,'normal','','','Open Sans',400,'normal','','','Open Sans',700,'normal','100%','','Ubuntu',400,'normal','80%','#ffffff','Open Sans',600,'normal','','','Open Sans',400,'normal','95%','','Open Sans',400,'normal','','',1,'solid','#336699',1,'dotted','#6699cc',1,'dotted','#CCCCCC','WarpShadow','large','normal','text','Submit','http://',''),(3,1,1,0,'Blue Pionus',1,1,'default','http://',40,'machform.png',0,'color','#556270','','','color','#6b7b8c','','','color','#ffffff','','','color','#99aec4','','','color','#6b7b8c','','','color','#ffffff','','','Istok Web',400,'normal','170%','','Maven Pro',400,'normal','100%','','Istok Web',700,'normal','100%','','Maven Pro',400,'normal','95%','#ffffff','Istok Web',400,'normal','110%','','Maven Pro',400,'normal','95%','','Maven Pro',400,'normal','','',1,'solid','#556270',1,'solid','#6b7b8c',1,'dotted','#CCCCCC','WarpShadow','large','normal','text','Submit','http://',''),(4,1,1,0,'Brown Conure',1,1,'default','http://',40,'machform.png',0,'pattern','#948c75','pattern_036.gif','','color','#b3a783','','','color','#ffffff','','','color','#e0d0a2','','','color','#948c75','','','color','#f0f0d8','pattern_036.gif','','Molengo',400,'normal','170%','','Molengo',400,'normal','110%','','Molengo',400,'normal','110%','','Nobile',400,'normal','','#ececec','Molengo',400,'normal','130%','','Molengo',400,'normal','100%','','Molengo',400,'normal','110%','',1,'solid','#948c75',1,'solid','#948c75',1,'dotted','#CCCCCC','WarpShadow','large','normal','text','Submit','http://',''),(5,1,1,0,'Yellow Lovebird',1,1,'default','http://',40,'machform.png',0,'color','#f0d878','','','color','#edb817','','','color','#ffffff','','','color','#f5d678','','','color','#f7c52e','','','color','#ffffff','','','Amaranth',700,'normal','170%','','Amaranth',400,'normal','100%','','Amaranth',700,'normal','100%','','Amaranth',400,'normal','','#444444','Amaranth',400,'normal','110%','','Amaranth',400,'normal','95%','','Amaranth',400,'normal','100%','',1,'solid','#f0d878',1,'solid','#f7c52e',1,'dotted','#CCCCCC','WarpShadow','large','normal','text','Submit','http://',''),(6,1,1,0,'Pink Starling',1,1,'default','http://',40,'machform.png',0,'color','#ff6699','','','color','#d93280','','','color','#ffffff','','','color','#ffd0d4','','','color','#f9fad2','','','color','#ffffff','','','Josefin Sans',600,'normal','160%','','Josefin Sans',400,'normal','110%','','Josefin Sans',700,'normal','110%','','Josefin Sans',600,'normal','100%','','Josefin Sans',700,'normal','','','Josefin Sans',400,'normal','110%','','Josefin Sans',400,'normal','130%','',1,'solid','#ff6699',1,'dashed','#f56990',1,'dotted','#CCCCCC','WarpShadow','large','normal','text','Submit','http://',''),(8,1,1,0,'Red Rabbit',1,1,'default','http://',40,'machform.png',0,'color','#a40802','','','color','#800e0e','','','color','#ffffff','','','color','#ffa4a0','','','color','#800e0e','','','color','#ffffff','','','Lobster',400,'normal','','#000000','Ubuntu',400,'normal','100%','#000000','Lobster',400,'normal','110%','#222222','Ubuntu',400,'normal','85%','#ffffff','Lobster',400,'normal','130%','#000000','Ubuntu',400,'normal','95%','#000000','Ubuntu',400,'normal','','#333333',1,'solid','#a40702',1,'solid','#800e0e',1,'dotted','#CCCCCC','WarpShadow','large','normal','text','Submit','http://',''),(9,1,1,0,'Orange Robin',1,1,'default','http://',40,'machform.png',0,'color','#f38430','','','color','#fa6800','','','color','#ffffff','','','color','#a7dbd8','','','color','#e0e4cc','','','color','#ffffff','','','Lucida Grande',400,'normal','','#000000','Nobile',400,'normal','','#000000','Nobile',700,'normal','','#000000','Lucida Grande',400,'normal','','#444444','Nobile',700,'normal','100%','#000000','Nobile',400,'normal','','#000000','Nobile',400,'normal','95%','#333333',1,'solid','#f38430',1,'solid','#e0e4cc',1,'dotted','#CCCCCC','WarpShadow','large','normal','text','Submit','http://',''),(10,1,1,0,'Orange Sunbird',1,1,'default','http://',40,'machform.png',0,'color','#d95c43','','','color','#c02942','','','color','#ffffff','','','color','#d95c43','','','color','#53777a','','','color','#ffffff','','','Lucida Grande',400,'normal','','#000000','Lucida Grande',400,'normal','','#000000','Lucida Grande',700,'normal','','#222222','Lucida Grande',400,'normal','','#ffffff','Lucida Grande',400,'normal','','#000000','Lucida Grande',400,'normal','','#000000','Lucida Grande',400,'normal','','#333333',1,'solid','#d95c43',1,'solid','#53777a',1,'dotted','#CCCCCC','WarpShadow','large','normal','text','Submit','http://',''),(11,1,1,0,'Green Ringneck',1,1,'default','http://',40,'machform.png',0,'color','#0b486b','','','color','#3b8686','','','color','#ffffff','','','color','#cff09e','','','color','#79bd9a','','','color','#a8dba8','','','Delius Swash Caps',400,'normal','','#000000','Delius Swash Caps',400,'normal','100%','#000000','Delius Swash Caps',400,'normal','100%','#222222','Delius',400,'normal','85%','#ffffff','Delius Swash Caps',400,'normal','','#000000','Delius Swash Caps',400,'normal','95%','#000000','Delius',400,'normal','','#515151',1,'solid','#0b486b',1,'solid','#79bd9a',1,'dotted','#CCCCCC','WarpShadow','large','normal','text','Submit','http://',''),(12,1,1,0,'Brown Finch',1,1,'default','http://',40,'machform.png',0,'color','#774f38','','','color','#e08e79','','','color','#ffffff','','','color','#ece5ce','','','color','#c5e0dc','','','color','#f9fad2','','','Arvo',700,'normal','','#000000','Arvo',400,'normal','','#000000','Arvo',700,'normal','','#222222','Arvo',400,'normal','','#444444','Arvo',400,'normal','','#000000','Arvo',400,'normal','85%','#000000','Arvo',400,'normal','','#333333',1,'solid','#774f38',1,'dashed','#e08e79',1,'dotted','#CCCCCC','WarpShadow','large','normal','text','Submit','http://',''),(14,1,1,0,'Brown Macaw',1,1,'default','http://',40,'machform.png',0,'color','#413e4a','','','color','#73626e','','','pattern','#ffffff','pattern_022.gif','','color','#f0b49e','','','color','#b38184','','','color','#ffffff','','','Cabin',500,'normal','160%','#000000','Cabin',400,'normal','100%','#000000','Cabin',700,'normal','110%','#222222','Lucida Grande',400,'normal','','#ececec','Cabin',600,'normal','','#000000','Cabin',600,'normal','95%','#000000','Cabin',400,'normal','110%','#333333',1,'solid','#413e4a',1,'dotted','#ff9900',1,'dotted','#CCCCCC','WarpShadow','large','normal','text','Submit','http://',''),(15,1,1,0,'Pink Thrush',1,1,'default','http://',40,'machform.png',0,'color','#ff9f9d','','','color','#ff3d7e','','','color','#ffffff','','','color','#7fc7af','','','color','#3fb8b0','','','color','#ffffff','','','Crafty Girls',400,'normal','','#000000','Crafty Girls',400,'normal','100%','#000000','Crafty Girls',400,'normal','100%','#222222','Nobile',400,'normal','80%','#ffffff','Crafty Girls',400,'normal','','#000000','Crafty Girls',400,'normal','95%','#000000','Molengo',400,'normal','110%','#333333',1,'solid','#ff9f9d',1,'solid','#3fb8b0',1,'dotted','#CCCCCC','WarpShadow','large','normal','text','Submit','http://',''),(16,1,1,0,'Yellow Bulbul',1,1,'default','http://',40,'machform.png',0,'color','#f8f4d7','','','color','#f4b26c','','','color','#f4dec2','','','color','#f2b4a7','','','color','#e98976','','','color','#ffffff','','','Special Elite',400,'normal','','#000000','Special Elite',400,'normal','','#000000','Special Elite',400,'normal','95%','#222222','Cousine',400,'normal','80%','#ececec','Special Elite',400,'normal','','#000000','Special Elite',400,'normal','','#000000','Cousine',400,'normal','','#333333',1,'solid','#f8f4d7',1,'solid','#f4b26c',1,'dotted','#CCCCCC','WarpShadow','large','normal','text','Submit','http://',''),(17,1,1,0,'Blue Canary',1,1,'default','http://',40,'machform.png',0,'color','#81a8b8','','','color','#a4bcc2','','','color','#ffffff','','','color','#e8f3f8','','','color','#dbe6ec','','','color','#ffffff','','','PT Sans',400,'normal','','#000000','PT Sans',400,'normal','100%','#000000','PT Sans',700,'normal','100%','#222222','PT Sans',400,'normal','','#666666','PT Sans',700,'normal','','#000000','PT Sans',400,'normal','100%','#000000','PT Sans',400,'normal','110%','#333333',1,'solid','#81a8b8',1,'dashed','#a4bcc2',1,'dotted','#CCCCCC','WarpShadow','large','normal','text','Submit','http://',''),(18,1,1,0,'Red Mockingbird',1,1,'default','http://',40,'machform.png',0,'color','#6b0103','','','color','#a30005','','','color','#c21b01','','','color','#f03d02','','','color','#1c0113','','','color','#ffffff','','','Oswald',400,'normal','','#ffffff','Open Sans',400,'normal','','#ffffff','Oswald',400,'normal','95%','#ffffff','Open Sans',400,'normal','','#ececec','Oswald',400,'normal','','#ececec','Lucida Grande',400,'normal','','#ffffff','Open Sans',400,'normal','','#333333',1,'solid','#6b0103',1,'solid','#1c0113',1,'dotted','#CCCCCC','WarpShadow','large','normal','text','Submit','http://',''),(13,1,1,0,'Green Sparrow',1,1,'default','http://',40,'machform.png',0,'color','#d1f2a5','','','color','#f56990','','','color','#ffffff','','','color','#ffc48c','','','color','#ffa080','','','color','#ffffff','','','Open Sans',400,'normal','','#000000','Open Sans',400,'normal','','#000000','Open Sans',700,'normal','','#222222','Ubuntu',400,'normal','85%','#f4fce8','Open Sans',600,'normal','','#000000','Open Sans',400,'normal','95%','#000000','Open Sans',400,'normal','','#333333',10,'solid','#f0fab4',1,'solid','#ffa080',1,'dotted','#CCCCCC','WarpShadow','large','normal','text','Submit','http://',''),(21,1,1,0,'Purple Vanga',1,1,'default','http://',40,'machform.png',0,'color','#7b85e2','','','color','#7aa6d6','','','color','#d1e7f9','','','color','#7aa6d6','','','color','#fbfcd0','','','color','#ffffff','','','Droid Sans',400,'normal','160%','#444444','Droid Sans',400,'normal','95%','#444444','Open Sans',700,'normal','95%','#444444','Droid Sans',400,'normal','85%','#444444','Droid Sans',400,'normal','110%','#444444','Droid Sans',400,'normal','95%','#000000','Droid Sans',400,'normal','100%','#333333',0,'solid','#CCCCCC',1,'solid','#fbfcd0',1,'dotted','#CCCCCC','WarpShadow','large','normal','text','Submit','http://',''),(22,1,1,0,'Purple Dove',1,1,'default','http://',40,'machform.png',0,'color','#c0addb','','','color','#a662de','','','pattern','#ffffff','pattern_044.gif','','color','#a662de','','','color','#a662de','','','color','#c0addb','','','Pacifico',400,'normal','180%','#000000','Open Sans',400,'normal','95%','#000000','Pacifico',400,'normal','95%','#222222','Open Sans',400,'normal','80%','#ececec','Pacifico',400,'normal','110%','#000000','Open Sans',400,'normal','95%','#000000','Open Sans',400,'normal','100%','#333333',0,'solid','#a662de',1,'dashed','#CCCCCC',1,'dashed','#a662de','StandShadow','large','dark','text','Submit','http://',''),(20,1,1,0,'Pink Flamingo',1,1,'default','http://',40,'machform.png',0,'color','#f87d7b','','','color','#5ea0a3','','','color','#ffffff','','','color','#fab97f','','','color','#dcd1b4','','','color','#ffffff','','','Lucida Grande',400,'normal','160%','#b05573','Lucida Grande',400,'normal','95%','#b05573','Lucida Grande',700,'normal','95%','#b05573','Lucida Grande',400,'normal','80%','#444444','Lucida Grande',400,'normal','110%','#b05573','Lucida Grande',400,'normal','85%','#b05573','Lucida Grande',400,'normal','100%','#333333',0,'solid','#f87d7b',1,'dotted','#fab97f',1,'dotted','#CCCCCC','WarpShadow','large','normal','text','Submit','http://',''),(19,1,1,0,'Yellow Kiwi',1,1,'default','http://',40,'machform.png',0,'color','#ffe281','','','color','#ffbb7f','','','color','#eee9e5','','','color','#fad4b2','','','color','#ff9c97','','','color','#ffffff','','','Lucida Grande',400,'normal','160%','#000000','Lucida Grande',400,'normal','95%','#000000','Lucida Grande',700,'normal','95%','#222222','Lucida Grande',400,'normal','80%','#ffffff','Lucida Grande',400,'normal','110%','#000000','Lucida Grande',400,'normal','85%','#000000','Lucida Grande',400,'normal','100%','#333333',1,'solid','#ffe281',1,'solid','#CCCCCC',1,'dotted','#cdcdcd','WarpShadow','large','normal','text','Submit','http://',''),(23,2,1,1,'会晤',0,1,'default','http://',36,'machform.png',0,'color','#336699','','','color','#0372d3','','','color','#ffffff','','','color','#ccdced','','','color','#6699cc','','','color','#ffffff','','','Open Sans',600,'normal','','','Open Sans',400,'normal','','','Open Sans',700,'normal','100%','','Ubuntu',400,'normal','80%','#ffffff','Open Sans',600,'normal','','','Open Sans',400,'normal','95%','','Open Sans',400,'normal','','',1,'solid','#336699',1,'dotted','#6699cc',1,'dotted','#CCCCCC','WarpShadow','large','normal','text','提交','http://','');

/*Table structure for table `ap_forms` */

DROP TABLE IF EXISTS `ap_forms`;

CREATE TABLE `ap_forms` (
  `form_id` int(11) NOT NULL auto_increment,
  `form_name` text,
  `form_description` text,
  `form_tags` varchar(255) default NULL,
  `form_email` text,
  `form_redirect` text,
  `form_redirect_enable` int(1) NOT NULL default '0',
  `form_success_message` text,
  `form_disabled_message` text,
  `form_password` varchar(100) default NULL,
  `form_unique_ip` int(1) NOT NULL default '0',
  `form_frame_height` int(11) default NULL,
  `form_has_css` int(11) NOT NULL default '0',
  `form_captcha` int(11) NOT NULL default '0',
  `form_captcha_type` char(1) NOT NULL default 'r',
  `form_active` int(11) NOT NULL default '1',
  `form_theme_id` int(11) NOT NULL default '0',
  `form_review` int(11) NOT NULL default '0',
  `form_resume_enable` int(1) NOT NULL default '0',
  `form_limit_enable` int(1) NOT NULL default '0',
  `form_limit` int(11) NOT NULL default '0',
  `form_label_alignment` varchar(11) NOT NULL default 'top_label',
  `form_language` varchar(50) default NULL,
  `form_page_total` int(11) NOT NULL default '1',
  `form_lastpage_title` varchar(255) default NULL,
  `form_submit_primary_text` varchar(255) NOT NULL default 'Submit',
  `form_submit_secondary_text` varchar(255) NOT NULL default 'Previous',
  `form_submit_primary_img` varchar(255) default NULL,
  `form_submit_secondary_img` varchar(255) default NULL,
  `form_submit_use_image` int(1) NOT NULL default '0',
  `form_review_primary_text` varchar(255) NOT NULL default 'Submit',
  `form_review_secondary_text` varchar(255) NOT NULL default 'Previous',
  `form_review_primary_img` varchar(255) default NULL,
  `form_review_secondary_img` varchar(255) default NULL,
  `form_review_use_image` int(11) NOT NULL default '0',
  `form_review_title` text,
  `form_review_description` text,
  `form_pagination_type` varchar(11) NOT NULL default 'steps',
  `form_schedule_enable` int(1) NOT NULL default '0',
  `form_schedule_start_date` date default NULL,
  `form_schedule_end_date` date default NULL,
  `form_schedule_start_hour` time default NULL,
  `form_schedule_end_hour` time default NULL,
  `esl_enable` tinyint(1) NOT NULL default '0',
  `esl_from_name` text,
  `esl_from_email_address` varchar(255) default NULL,
  `esl_subject` text,
  `esl_content` mediumtext,
  `esl_plain_text` int(11) NOT NULL default '0',
  `esr_enable` tinyint(1) NOT NULL default '0',
  `esr_email_address` text,
  `esr_from_name` text,
  `esr_from_email_address` varchar(255) default NULL,
  `esr_subject` text,
  `esr_content` mediumtext,
  `esr_plain_text` int(11) NOT NULL default '0',
  `payment_enable_merchant` int(1) NOT NULL default '-1',
  `payment_merchant_type` varchar(25) NOT NULL default 'paypal_standard',
  `payment_paypal_email` varchar(255) default NULL,
  `payment_paypal_language` varchar(5) NOT NULL default 'US',
  `payment_currency` varchar(5) NOT NULL default 'USD',
  `payment_show_total` int(1) NOT NULL default '0',
  `payment_total_location` varchar(11) NOT NULL default 'top',
  `payment_enable_recurring` int(1) NOT NULL default '0',
  `payment_recurring_cycle` int(11) NOT NULL default '1',
  `payment_recurring_unit` varchar(5) NOT NULL default 'month',
  `payment_enable_trial` int(1) NOT NULL default '0',
  `payment_trial_period` int(11) NOT NULL default '1',
  `payment_trial_unit` varchar(5) NOT NULL default 'month',
  `payment_trial_amount` decimal(62,2) NOT NULL default '0.00',
  `payment_price_type` varchar(11) NOT NULL default 'fixed',
  `payment_price_amount` decimal(62,2) NOT NULL default '0.00',
  `payment_price_name` varchar(255) default NULL,
  `payment_stripe_live_secret_key` varchar(50) default NULL,
  `payment_stripe_live_public_key` varchar(50) default NULL,
  `payment_stripe_test_secret_key` varchar(50) default NULL,
  `payment_stripe_test_public_key` varchar(50) default NULL,
  `payment_stripe_enable_test_mode` int(1) NOT NULL default '0',
  `payment_paypal_enable_test_mode` int(1) NOT NULL default '0',
  `payment_enable_invoice` int(1) NOT NULL default '0',
  `payment_invoice_email` varchar(255) default NULL,
  `payment_delay_notifications` int(1) NOT NULL default '1',
  `payment_ask_billing` int(1) NOT NULL default '0',
  `payment_ask_shipping` int(1) NOT NULL default '0',
  `payment_enable_tax` int(1) NOT NULL default '0',
  `payment_tax_rate` decimal(62,2) NOT NULL default '0.00',
  `logic_field_enable` tinyint(1) NOT NULL default '0',
  `logic_page_enable` tinyint(1) NOT NULL default '0',
  `logic_email_enable` tinyint(1) NOT NULL default '0',
  PRIMARY KEY  (`form_id`),
  KEY `form_tags` (`form_tags`)
) ENGINE=MyISAM AUTO_INCREMENT=11893 DEFAULT CHARSET=utf8;

/*Data for the table `ap_forms` */

insert  into `ap_forms`(`form_id`,`form_name`,`form_description`,`form_tags`,`form_email`,`form_redirect`,`form_redirect_enable`,`form_success_message`,`form_disabled_message`,`form_password`,`form_unique_ip`,`form_frame_height`,`form_has_css`,`form_captcha`,`form_captcha_type`,`form_active`,`form_theme_id`,`form_review`,`form_resume_enable`,`form_limit_enable`,`form_limit`,`form_label_alignment`,`form_language`,`form_page_total`,`form_lastpage_title`,`form_submit_primary_text`,`form_submit_secondary_text`,`form_submit_primary_img`,`form_submit_secondary_img`,`form_submit_use_image`,`form_review_primary_text`,`form_review_secondary_text`,`form_review_primary_img`,`form_review_secondary_img`,`form_review_use_image`,`form_review_title`,`form_review_description`,`form_pagination_type`,`form_schedule_enable`,`form_schedule_start_date`,`form_schedule_end_date`,`form_schedule_start_hour`,`form_schedule_end_hour`,`esl_enable`,`esl_from_name`,`esl_from_email_address`,`esl_subject`,`esl_content`,`esl_plain_text`,`esr_enable`,`esr_email_address`,`esr_from_name`,`esr_from_email_address`,`esr_subject`,`esr_content`,`esr_plain_text`,`payment_enable_merchant`,`payment_merchant_type`,`payment_paypal_email`,`payment_paypal_language`,`payment_currency`,`payment_show_total`,`payment_total_location`,`payment_enable_recurring`,`payment_recurring_cycle`,`payment_recurring_unit`,`payment_enable_trial`,`payment_trial_period`,`payment_trial_unit`,`payment_trial_amount`,`payment_price_type`,`payment_price_amount`,`payment_price_name`,`payment_stripe_live_secret_key`,`payment_stripe_live_public_key`,`payment_stripe_test_secret_key`,`payment_stripe_test_public_key`,`payment_stripe_enable_test_mode`,`payment_paypal_enable_test_mode`,`payment_enable_invoice`,`payment_invoice_email`,`payment_delay_notifications`,`payment_ask_billing`,`payment_ask_shipping`,`payment_enable_tax`,`payment_tax_rate`,`logic_field_enable`,`logic_page_enable`,`logic_email_enable`) values (10392,'慈善拇指','动动手指 参与慈善事业',NULL,NULL,'',0,'试题全部答完了！<br>点击此处<a href=\'/wap\'>回到首页！</a>',NULL,'',0,3207,1,0,'r',1,23,0,0,0,0,'top_label','chinese',10,'','Submit','Previous',NULL,NULL,0,'Submit','Previous','','',0,'Review Your Entry','Please review your entry below. Click Submit button to finish.','percentage',0,'0000-00-00','0000-00-00','00:00:00','00:00:00',0,NULL,NULL,NULL,NULL,0,0,NULL,NULL,NULL,NULL,NULL,0,1,'check','','CN','JPY',1,'top',0,1,'month',0,1,'month','0.00','variable','100.00','慈善拇指 Fee','','','','',0,0,0,NULL,1,0,0,0,'0.00',0,0,0),(10825,'慈善拇指 Copy','动动手指 参与慈善事业',NULL,NULL,'',0,'Success! Your submission has been saved!',NULL,'',0,465,1,0,'r',9,2,0,0,0,0,'top_label','english',1,'Untitled Page','Submit','Previous','','',0,'Submit','Previous','','',0,'Review Your Entry','Please review your entry below. Click Submit button to finish.','steps',0,'0000-00-00','0000-00-00','00:00:00','00:00:00',0,NULL,NULL,NULL,NULL,0,0,NULL,NULL,NULL,NULL,NULL,0,-1,'paypal_standard',NULL,'US','USD',0,'top',0,1,'month',0,1,'month','0.00','fixed','0.00',NULL,NULL,NULL,NULL,NULL,0,0,0,NULL,1,0,0,0,'0.00',0,0,0),(11022,'慈善拇指 Copy','动动手指 参与慈善事业',NULL,NULL,'',0,'Success! Your submission has been saved!',NULL,'',0,3207,1,0,'r',9,23,0,0,0,0,'top_label','english',10,'','Submit','Previous',NULL,NULL,0,'Submit','Previous','','',0,'Review Your Entry','Please review your entry below. Click Submit button to finish.','percentage',0,'0000-00-00','0000-00-00','00:00:00','00:00:00',0,NULL,NULL,NULL,NULL,0,0,NULL,NULL,NULL,NULL,NULL,0,0,'paypal_standard','','CN','USD',0,'top',0,1,'month',0,1,'month','0.00','fixed','0.00','慈善拇指 Fee','','','','',0,0,0,NULL,1,0,0,0,'0.00',0,0,0),(11892,'Form use userid','This is your form description. Click here to edit.',NULL,NULL,'',0,'Success! Your submission has been saved!',NULL,'',0,597,1,0,'r',1,0,1,0,0,0,'top_label','chinese',2,'Untitled Page','Continue','Previous',NULL,NULL,0,'提交','前一题','','',0,'Review Your Entry','Please review your entry below. Click Submit button to finish.','steps',0,'0000-00-00','0000-00-00','00:00:00','00:00:00',0,NULL,NULL,NULL,NULL,0,0,NULL,NULL,NULL,NULL,NULL,0,1,'check','','CN','JPY',1,'bottom',0,1,'month',0,1,'month','0.00','variable','10.00','Form use userid Fee','','','','',0,0,0,NULL,1,0,0,0,'0.00',0,0,0);

/*Table structure for table `ap_page_logic` */

DROP TABLE IF EXISTS `ap_page_logic`;

CREATE TABLE `ap_page_logic` (
  `form_id` int(11) NOT NULL,
  `page_id` varchar(15) NOT NULL default '',
  `rule_all_any` varchar(3) NOT NULL default 'all',
  PRIMARY KEY  (`form_id`,`page_id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

/*Data for the table `ap_page_logic` */

/*Table structure for table `ap_page_logic_conditions` */

DROP TABLE IF EXISTS `ap_page_logic_conditions`;

CREATE TABLE `ap_page_logic_conditions` (
  `apc_id` int(11) unsigned NOT NULL auto_increment,
  `form_id` int(11) NOT NULL,
  `target_page_id` varchar(15) NOT NULL default '',
  `element_name` varchar(50) NOT NULL default '',
  `rule_condition` varchar(15) NOT NULL default 'is',
  `rule_keyword` varchar(255) default NULL,
  PRIMARY KEY  (`apc_id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

/*Data for the table `ap_page_logic_conditions` */

/*Table structure for table `ap_permissions` */

DROP TABLE IF EXISTS `ap_permissions`;

CREATE TABLE `ap_permissions` (
  `form_id` bigint(11) unsigned NOT NULL,
  `user_id` int(11) unsigned NOT NULL,
  `edit_form` tinyint(1) NOT NULL default '0',
  `edit_entries` tinyint(1) NOT NULL default '0',
  `view_entries` tinyint(1) NOT NULL default '0',
  PRIMARY KEY  (`form_id`,`user_id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

/*Data for the table `ap_permissions` */

insert  into `ap_permissions`(`form_id`,`user_id`,`edit_form`,`edit_entries`,`view_entries`) values (10392,1,1,1,1),(11892,2,1,1,1);

/*Table structure for table `ap_settings` */

DROP TABLE IF EXISTS `ap_settings`;

CREATE TABLE `ap_settings` (
  `id` int(11) unsigned NOT NULL auto_increment,
  `smtp_enable` tinyint(1) NOT NULL default '0',
  `smtp_host` varchar(255) NOT NULL default 'localhost',
  `smtp_port` int(11) NOT NULL default '25',
  `smtp_auth` tinyint(1) NOT NULL default '0',
  `smtp_username` varchar(255) default NULL,
  `smtp_password` varchar(255) default NULL,
  `smtp_secure` tinyint(1) NOT NULL default '0',
  `upload_dir` varchar(255) NOT NULL default './data',
  `data_dir` varchar(255) NOT NULL default './data',
  `default_from_name` varchar(255) NOT NULL default 'MachForm',
  `default_from_email` varchar(255) default NULL,
  `base_url` varchar(255) default NULL,
  `form_manager_max_rows` int(11) default '10',
  `admin_image_url` varchar(255) default NULL,
  `disable_machform_link` int(1) default '0',
  `machform_version` varchar(10) NOT NULL default '3.3',
  `admin_theme` varchar(11) default NULL,
  PRIMARY KEY  (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=2 DEFAULT CHARSET=utf8;

/*Data for the table `ap_settings` */

insert  into `ap_settings`(`id`,`smtp_enable`,`smtp_host`,`smtp_port`,`smtp_auth`,`smtp_username`,`smtp_password`,`smtp_secure`,`upload_dir`,`data_dir`,`default_from_name`,`default_from_email`,`base_url`,`form_manager_max_rows`,`admin_image_url`,`disable_machform_link`,`machform_version`,`admin_theme`) values (1,0,'localhost',25,0,'','',0,'./data','./data','MachForm111','no-reply@diaocha.yc','./',1,'',1,'3.5','blue');

/*Table structure for table `ap_users` */

DROP TABLE IF EXISTS `ap_users`;

CREATE TABLE `ap_users` (
  `user_id` int(11) unsigned NOT NULL auto_increment,
  `user_email` varchar(255) NOT NULL default '',
  `user_password` varchar(255) NOT NULL default '',
  `user_fullname` varchar(255) NOT NULL default '',
  `priv_administer` tinyint(1) NOT NULL default '0',
  `priv_new_forms` tinyint(1) NOT NULL default '0',
  `priv_new_themes` tinyint(1) NOT NULL default '0',
  `last_login_date` datetime default NULL,
  `last_ip_address` varchar(15) default '',
  `cookie_hash` varchar(255) default '',
  `status` tinyint(1) NOT NULL default '1' COMMENT '0 - deleted; 1 - active; 2 - suspended',
  PRIMARY KEY  (`user_id`)
) ENGINE=MyISAM AUTO_INCREMENT=3 DEFAULT CHARSET=utf8;

/*Data for the table `ap_users` */

insert  into `ap_users`(`user_id`,`user_email`,`user_password`,`user_fullname`,`priv_administer`,`priv_new_forms`,`priv_new_themes`,`last_login_date`,`last_ip_address`,`cookie_hash`,`status`) values (1,'ycyn521@qq.com','$2a$08$XztiKMA8iEr1Pb2jPHh.q.ZRZlQTTpKGfOtY1HsgiX71QQFWHR0Bi','Administrator',1,1,1,'2014-11-15 22:18:16','127.0.0.1','',1),(2,'admin@qq.com','$2a$08$5NNwksCfUchdw9cxxpFc4.bIt2j35CMp9aM.7L3VYO2MAn9Y5b7ki','admin',1,1,1,'2014-11-18 17:13:01','127.0.0.1','$2a$08$i/bx07m0cZgPDwqhVOH88.NaJ2GpGNbyVYgcRrE4es6desCE06UVK',1);

/*Table structure for table `atn` */

DROP TABLE IF EXISTS `atn`;

CREATE TABLE `atn` (
  `id` int(11) NOT NULL auto_increment,
  `uid` int(11) NOT NULL,
  `sc_uid` int(11) NOT NULL,
  `time` int(11) NOT NULL,
  `usertype` int(11) default NULL,
  `sc_usertype` int(11) default NULL,
  PRIMARY KEY  (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=gbk;

/*Data for the table `atn` */

/*Table structure for table `attention` */

DROP TABLE IF EXISTS `attention`;

CREATE TABLE `attention` (
  `id` int(11) NOT NULL auto_increment,
  `ids` text NOT NULL,
  `type` int(11) NOT NULL,
  `uid` int(11) NOT NULL,
  PRIMARY KEY  (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=gbk;

/*Data for the table `attention` */

/*Table structure for table `authblkmac` */

DROP TABLE IF EXISTS `authblkmac`;

CREATE TABLE `authblkmac` (
  `id` int(11) NOT NULL auto_increment,
  `srcid` int(11) default NULL,
  `mac` varchar(20) default NULL,
  `blktime` varchar(6) default NULL,
  `rectime` datetime default NULL,
  PRIMARY KEY  (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

/*Data for the table `authblkmac` */

/*Table structure for table `authclient` */

DROP TABLE IF EXISTS `authclient`;

CREATE TABLE `authclient` (
  `id` int(11) NOT NULL auto_increment,
  `srcid` int(11) default NULL,
  `cid` varchar(30) default NULL,
  `ctype` varchar(10) default NULL,
  `stat` varchar(3) default '0',
  `phone` varchar(30) default NULL,
  `sphone` varchar(30) default NULL,
  `msg` varchar(8) default NULL,
  `plan` varchar(20) default NULL,
  `question` varchar(30) default NULL,
  `answer` varchar(30) default NULL,
  `token` int(11) default NULL,
  `mac` varchar(18) default NULL,
  `img` varchar(128) default '',
  `imgchk1` smallint(6) default '0',
  `imgchk2` smallint(6) default '0',
  `imgchk3` smallint(6) default '0',
  `manstat` smallint(6) default '0',
  `manchker` varchar(16) default NULL,
  `manid` varchar(30) default NULL,
  `mantype` varchar(10) default NULL,
  `mantime` datetime default NULL,
  `optflag` tinyint(4) default NULL,
  `srcip` varchar(64) default NULL,
  `srcname` varchar(64) default NULL,
  `rectime` datetime default NULL,
  `sender` varchar(36) default NULL,
  `netid` varchar(36) default NULL,
  `progid` varchar(36) default NULL,
  `optime` datetime default NULL,
  PRIMARY KEY  (`id`),
  KEY `cid` (`cid`),
  KEY `phone` (`phone`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

/*Data for the table `authclient` */

/*Table structure for table `authmac` */

DROP TABLE IF EXISTS `authmac`;

CREATE TABLE `authmac` (
  `id` int(11) NOT NULL auto_increment,
  `srcid` int(11) default NULL,
  `mac` varchar(36) default NULL,
  `ip` varchar(64) default NULL,
  `stat` smallint(6) default NULL,
  `fromtime` datetime default NULL,
  `lasting` int(11) default NULL,
  `pushflag` smallint(6) default NULL,
  `pushurl` varchar(127) default NULL,
  `pushtime` int(11) default NULL,
  `cid` varchar(30) default NULL,
  `phone` varchar(30) default NULL,
  `token` int(11) default NULL,
  `base` varchar(10) default NULL,
  `srcip` varchar(64) default NULL,
  `srcname` varchar(64) default NULL,
  `rectime` datetime default NULL,
  `sender` varchar(36) default NULL,
  `netid` varchar(36) default NULL,
  `progid` varchar(36) default NULL,
  `optime` datetime default NULL,
  PRIMARY KEY  (`id`),
  KEY `mac` (`mac`)
) ENGINE=MyISAM AUTO_INCREMENT=4 DEFAULT CHARSET=utf8;

/*Data for the table `authmac` */

insert  into `authmac`(`id`,`srcid`,`mac`,`ip`,`stat`,`fromtime`,`lasting`,`pushflag`,`pushurl`,`pushtime`,`cid`,`phone`,`token`,`base`,`srcip`,`srcname`,`rectime`,`sender`,`netid`,`progid`,`optime`) values (1,NULL,'qqq',NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL),(2,NULL,'qqq',NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL),(3,NULL,'qqq',NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL);

/*Table structure for table `authmacip` */

DROP TABLE IF EXISTS `authmacip`;

CREATE TABLE `authmacip` (
  `id` int(11) NOT NULL auto_increment,
  `srcid` int(11) default NULL,
  `mac` varchar(36) default NULL,
  `ip` varchar(64) default NULL,
  `called` varchar(36) default NULL,
  `srcip` varchar(64) default NULL,
  `procid` varchar(36) default NULL,
  `userurl` varchar(1024) default NULL,
  `orgurl` varchar(1024) default NULL,
  `token` int(11) default NULL,
  `rectime` datetime default NULL,
  `sender` varchar(36) default NULL,
  `netid` varchar(36) default NULL,
  `progid` varchar(36) default NULL,
  `optime` datetime default NULL,
  PRIMARY KEY  (`id`),
  KEY `mac` (`mac`),
  KEY `ip` (`ip`)
) ENGINE=MyISAM AUTO_INCREMENT=11 DEFAULT CHARSET=utf8;

/*Data for the table `authmacip` */

insert  into `authmacip`(`id`,`srcid`,`mac`,`ip`,`called`,`srcip`,`procid`,`userurl`,`orgurl`,`token`,`rectime`,`sender`,`netid`,`progid`,`optime`) values (1,NULL,'qqq','','','ihost-ma.yc','portal','','http://ihost-ma.yc/wap/index.php?mac=qqq',3000,'2014-11-15 09:59:40',NULL,NULL,NULL,NULL),(2,NULL,'qqq','','','ihost-ma.yc','portal','','http://ihost-ma.yc/wap/index.php?mac=qqq',10253,'2014-11-15 10:10:28',NULL,NULL,NULL,NULL),(3,NULL,'www','','','ihost-ma.yc','portal','','http://ihost-ma.yc/wap/index.php?mac=www',6194,'2014-11-15 10:10:40',NULL,NULL,NULL,NULL),(4,NULL,'qqq','','','ihost-ma.yc','portal','','http://ihost-ma.yc/wap/index.php?mac=qqq',29243,'2014-11-15 10:14:11',NULL,NULL,NULL,NULL),(5,NULL,'qqq','','','ihost-ma.yc','portal','','http://ihost-ma.yc/wap/index.php?mac=qqq',31710,'2014-11-17 16:35:21',NULL,NULL,NULL,NULL),(6,NULL,'qqq','','','ihost-ma.yc','portal','','http://ihost-ma.yc/wap/index.php?mac=qqq',5251,'2014-11-18 17:11:54',NULL,NULL,NULL,NULL),(7,NULL,'qqq','','','ihost-ma.yc','portal','','http://ihost-ma.yc/wap/index.php?mac=qqq',18513,'2014-11-18 18:04:19',NULL,NULL,NULL,NULL),(8,NULL,'qqq','','','ihost-ma.yc','portal','','http://ihost-ma.yc/wap/index.php?mac=qqq',1855,'2014-11-18 18:08:01',NULL,NULL,NULL,NULL),(9,NULL,'qqq','','','ihost-ma.yc','portal','','http://ihost-ma.yc/wap/index.php?mac=qqq',22619,'2014-11-18 18:12:51',NULL,NULL,NULL,NULL),(10,NULL,'qqq','','','ihost-ma.yc','portal','','http://ihost-ma.yc/wap/index.php?mac=qqq',23450,'2014-11-18 18:36:28',NULL,NULL,NULL,NULL);

/*Table structure for table `authnlist` */

DROP TABLE IF EXISTS `authnlist`;

CREATE TABLE `authnlist` (
  `id` int(11) NOT NULL auto_increment,
  `srcid` int(11) default NULL,
  `mac` varchar(17) default NULL,
  `ip` varchar(64) default NULL,
  `name` varchar(64) default NULL,
  `passwd` varchar(64) default NULL,
  `secret` varchar(64) default NULL,
  `rectime` datetime default NULL,
  PRIMARY KEY  (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=2 DEFAULT CHARSET=utf8;

/*Data for the table `authnlist` */

insert  into `authnlist`(`id`,`srcid`,`mac`,`ip`,`name`,`passwd`,`secret`,`rectime`) values (1,NULL,NULL,'192.168.1.252','zgbdh001','1234567890','ab','2013-05-12 10:23:25');

/*Table structure for table `authsms` */

DROP TABLE IF EXISTS `authsms`;

CREATE TABLE `authsms` (
  `id` int(11) NOT NULL auto_increment,
  `srcid` int(11) default NULL,
  `msgid` int(11) default NULL,
  `prefix` varchar(64) default '',
  `sms` varchar(128) default NULL,
  `postfix` varchar(64) default '',
  `mac` varchar(36) default NULL,
  `ip` varchar(64) default NULL,
  `phone` varchar(30) default '',
  `stat` smallint(6) default '0',
  `optflag` smallint(6) default '0',
  `token` int(11) default NULL,
  `rectime` datetime default NULL,
  `sender` varchar(36) default NULL,
  `netid` varchar(36) default NULL,
  `progid` varchar(36) default NULL,
  `optime` datetime default NULL,
  `sendtime` datetime default NULL,
  PRIMARY KEY  (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

/*Data for the table `authsms` */

/*Table structure for table `bank` */

DROP TABLE IF EXISTS `bank`;

CREATE TABLE `bank` (
  `id` int(11) NOT NULL auto_increment,
  `name` varchar(200) default NULL,
  `bank_name` varchar(200) default NULL,
  `bank_number` varchar(200) default NULL,
  `bank_address` varchar(200) default NULL,
  PRIMARY KEY  (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=gbk;

/*Data for the table `bank` */

/*Table structure for table `banner` */

DROP TABLE IF EXISTS `banner`;

CREATE TABLE `banner` (
  `id` int(11) NOT NULL auto_increment,
  `uid` int(11) default NULL,
  `pic` varchar(100) default NULL,
  PRIMARY KEY  (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=gbk;

/*Data for the table `banner` */

/*Table structure for table `blacklist` */

DROP TABLE IF EXISTS `blacklist`;

CREATE TABLE `blacklist` (
  `id` int(11) NOT NULL auto_increment,
  `p_uid` int(11) default NULL,
  `c_uid` int(11) default NULL,
  `inputtime` int(11) default NULL,
  `usertype` int(1) default NULL,
  `com_name` varchar(100) character set gb2312 default NULL,
  PRIMARY KEY  (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=gbk;

/*Data for the table `blacklist` */

/*Table structure for table `city_class` */

DROP TABLE IF EXISTS `city_class`;

CREATE TABLE `city_class` (
  `id` int(11) NOT NULL auto_increment,
  `keyid` int(11) NOT NULL,
  `name` varchar(100) NOT NULL,
  `letter` varchar(1) NOT NULL,
  `display` int(1) NOT NULL,
  `sitetype` int(2) NOT NULL,
  `sort` int(11) NOT NULL default '0',
  PRIMARY KEY  (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=4729 DEFAULT CHARSET=gbk;

/*Data for the table `city_class` */

insert  into `city_class`(`id`,`keyid`,`name`,`letter`,`display`,`sitetype`,`sort`) values (1,0,'北京','B',1,0,1),(2,0,'上海','S',1,0,2),(3,0,'天津','T',1,0,3),(4,0,'重庆','C',1,0,4),(1796,1421,'台湾','T',1,0,0),(1795,1421,'澳门','A',1,0,0),(1794,1421,'香港','X',1,0,0),(1793,1420,'海南','H',1,0,0),(1792,1420,'玉树','Y',1,0,0),(1791,1420,'黄南','H',1,0,0),(1790,1420,'海东','H',1,0,0),(1789,1420,'果洛','G',1,0,0),(1788,1420,'海北','H',1,0,0),(1787,1420,'海西','H',1,0,0),(1786,1420,'西宁','X',1,0,0),(1785,1419,'固原','G',1,0,0),(1784,1419,'中卫','Z',1,0,0),(1783,1419,'石嘴山','S',1,0,0),(1782,1419,'吴忠','W',1,0,0),(1781,1419,'银川','Y',1,0,0),(1780,1418,'甘南','G',1,0,0),(1779,1418,'嘉峪关','J',1,0,0),(1778,1418,'临夏','L',1,0,0),(1777,1418,'陇南','L',1,0,0),(1776,1418,'金昌','J',1,0,0),(1775,1418,'定西','D',1,0,0),(1774,1418,'武威','W',1,0,0),(1773,1418,'张掖','Z',1,0,0),(1772,1418,'酒泉','J',1,0,0),(1771,1418,'平凉','P',1,0,0),(1770,1418,'庆阳','Q',1,0,0),(1769,1418,'白银','B',1,0,0),(37,2,'上海','S',1,1,0),(38,3,'天津','T',1,1,0),(39,4,'重庆','C',1,1,0),(1768,1418,'天水','T',1,0,0),(1767,1418,'兰州','L',1,0,0),(1766,1417,'图木舒克','T',1,0,0),(1765,1417,'五家渠','W',1,0,0),(1764,1417,'阿拉尔','A',1,0,0),(1763,1417,'克孜勒苏','K',1,0,0),(1762,1417,'石河子','S',1,0,0),(1761,1417,'和田','H',1,0,0),(1760,1417,'吐鲁番','T',1,0,0),(1759,1417,'博尔塔拉','B',1,0,0),(1758,1417,'克拉玛依','K',1,0,0),(1757,1417,'哈密','H',1,0,0),(1756,1417,'喀什','K',1,0,0),(1755,1417,'阿克苏','A',1,0,0),(1754,1417,'伊犁','Y',1,0,0),(1753,1417,'巴音郭楞','B',1,0,0),(1752,1417,'昌吉','C',1,0,0),(1751,1417,'乌鲁木齐','W',1,0,0),(1750,1416,'铜川','Y',1,0,0),(1749,1416,'商洛','S',1,0,0),(1748,1416,'安康','A',1,0,0),(1747,1416,'延安','Y',1,0,0),(1746,1416,'榆林','Y',1,0,0),(1745,1416,'汉中','H',1,0,0),(1744,1416,'渭南','W',1,0,0),(1743,1416,'宝鸡','B',1,0,0),(1742,1416,'咸阳','X',1,0,0),(1741,1416,'西安','X',1,0,0),(2750,1417,'阿勒泰','A',1,0,0),(1739,1415,'阿拉善盟','A',1,0,0),(1738,1415,'乌海','W',1,0,0),(1737,1415,'兴安盟','X',1,0,0),(1736,1415,'锡林郭勒盟','X',1,0,0),(1735,1415,'乌兰察布','W',1,0,0),(1734,1415,'巴彦淖尔市','B',1,0,0),(1733,1415,'呼伦贝尔','H',1,0,0),(1732,1415,'通辽','T',1,0,0),(1731,1415,'鄂尔多斯','E',1,0,0),(1730,1415,'赤峰','C',1,0,0),(1729,1415,'包头','B',1,0,0),(1728,1415,'呼和浩特','H',1,0,0),(1727,1414,'清徐','Q',1,0,0),(1726,1414,'临猗','L',1,0,0),(1725,1414,'朔州','S',1,0,0),(1724,1414,'忻州','X',1,0,0),(1723,1414,'吕梁','L',1,0,0),(1722,1414,'阳泉','Y',1,0,0),(1721,1414,'晋城','J',1,0,0),(1720,1414,'长治','C',1,0,0),(1719,1414,'晋中','J',1,0,0),(1718,1414,'运城','Y',1,0,0),(1717,1414,'大同','D',1,0,0),(1716,1414,'临汾','L',1,0,0),(1715,1414,'太原','T',1,0,0),(3511,1709,'鹰手营子矿区','A',1,0,0),(3510,1709,'双滦区','A',1,0,0),(3509,1709,'双桥区','A',1,0,0),(1709,1413,'承德','C',1,0,0),(1708,1413,'张家口','Z',1,0,0),(1707,1413,'衡水','H',1,0,0),(1706,1413,'邢台','X',1,0,0),(1705,1413,'沧州','C',1,0,0),(1704,1413,'秦皇岛','Q',1,0,0),(1703,1413,'邯郸','H',1,0,0),(1702,1413,'廊坊','L',1,0,0),(1701,1413,'唐山','T',1,0,0),(1700,1413,'保定','B',1,0,0),(1699,1413,'石家庄','S',1,0,0),(1698,1412,'阿里','A',1,0,0),(1697,1412,'那曲','N',1,0,0),(1696,1412,'昌都','C',1,0,0),(1695,1412,'林芝','L',1,0,0),(1694,1412,'山南','S',1,0,0),(1693,1412,'日喀则','R',1,0,0),(1692,1412,'拉萨','L',1,0,0),(1691,1411,'黔西南','Q',1,0,0),(1690,1411,'安顺','A',1,0,0),(1689,1411,'铜仁','T',1,0,0),(1688,1411,'毕节','B',1,0,0),(1687,1411,'六盘水','L',1,0,0),(1686,1411,'黔南','Q',1,0,0),(1685,1411,'黔东南','Q',1,0,0),(1684,1411,'遵义','Z',1,0,0),(1683,1411,'贵阳','G',1,0,0),(1682,1410,'怒江','N',1,0,0),(1681,1410,'迪庆','D',1,0,0),(1680,1410,'临沧','L',1,0,0),(1679,1410,'保山','B',1,0,0),(1678,1410,'普洱','P',1,0,0),(1677,1410,'德宏','D',1,0,0),(1676,1410,'昭通','Z',1,0,0),(1675,1410,'西双版纳','X',1,0,0),(1674,1410,'楚雄','C',1,0,0),(1673,1410,'文山','W',1,0,0),(1672,1410,'丽江','L',1,0,0),(1671,1410,'玉溪','Y',1,0,0),(1670,1410,'红河','H',1,0,0),(1669,1410,'大理','D',1,0,0),(1668,1410,'曲靖','Q',1,0,0),(1667,1410,'昆明','K',1,0,0),(1666,1409,'甘孜','G',1,0,0),(1665,1409,'阿坝','A',1,0,0),(1664,1409,'巴中','B',1,0,0),(1663,1409,'雅安','Y',1,0,0),(1662,1409,'广元','G',1,0,0),(1661,1409,'凉山','L',1,0,0),(1660,1409,'资阳','Z',1,0,0),(1659,1409,'广安','G',1,0,0),(1658,1409,'眉山','M',1,0,0),(1657,1409,'攀枝花','P',1,0,0),(1656,1409,'遂宁','S',1,0,0),(1655,1409,'内江','N',1,0,0),(1654,1409,'达州','D',1,0,0),(1653,1409,'泸州','L',1,0,0),(1652,1409,'乐山','L',1,0,0),(1651,1409,'自贡','Z',1,0,0),(1650,1409,'宜宾','Y',1,0,0),(1649,1409,'南充','N',1,0,0),(1648,1409,'德阳','D',1,0,0),(1647,1409,'绵阳','M',1,0,0),(1646,1409,'成都','C',1,0,0),(1645,1408,'辽源','L',1,0,0),(1644,1408,'白山','B',1,0,0),(1643,1408,'通化','T',1,0,0),(1642,1408,'白城','B',1,0,0),(1641,1408,'松原','S',1,0,0),(1640,1408,'延边','Y',1,0,0),(1639,1408,'四平','S',1,0,0),(1638,1408,'吉林','J',1,0,0),(1637,1408,'长春','C',1,0,0),(1636,1407,'大兴安岭','D',1,0,0),(1635,1407,'七台河','Q',1,0,0),(1634,1407,'伊春','Y',1,0,0),(1633,1407,'黑河','H',1,0,0),(1632,1407,'鹤岗','H',1,0,0),(1631,1407,'双鸭山','S',1,0,0),(1630,1407,'鸡西','J',1,0,0),(1629,1407,'佳木斯','J',1,0,0),(1628,1407,'绥化','S',1,0,0),(1627,1407,'牡丹江','M',1,0,0),(1626,1407,'齐齐哈尔','Q',1,0,0),(1625,1407,'大庆','D',1,0,0),(1624,1407,'哈尔滨','H',1,0,0),(4074,1595,'永定区','A',1,0,0),(4196,1621,'海州区','A',1,0,0),(1621,1406,'阜新','F',1,0,0),(1620,1406,'铁岭','T',1,0,0),(1619,1406,'葫芦岛','H',1,0,0),(1618,1406,'本溪','B',1,0,0),(1617,1406,'辽阳','L',1,0,0),(1616,1406,'丹东','D',1,0,0),(1615,1406,'朝阳','C',1,0,0),(1614,1406,'盘锦','P',1,0,0),(1613,1406,'营口','Y',1,0,0),(1612,1406,'抚顺','F',1,0,0),(1611,1406,'锦州','J',1,0,0),(1610,1406,'鞍山','A',1,0,0),(1609,1406,'大连','D',1,0,0),(1608,1406,'沈阳','S',1,0,0),(4402,1606,'月湖区','A',1,0,0),(1606,1405,'鹰潭','Y',1,0,0),(1605,1405,'新余','X',1,0,0),(1604,1405,'景德镇','J',1,0,0),(1603,1405,'抚州','F',1,0,0),(1602,1405,'萍乡','P',1,0,0),(1601,1405,'上饶','S',1,0,0),(1600,1405,'吉安','J',1,0,0),(1599,1405,'宜春','Y',1,0,0),(1598,1405,'九江','J',1,0,0),(1597,1405,'赣州','G',1,0,0),(1596,1405,'南昌','N',1,0,0),(1595,1404,'张家界','Z',1,0,0),(1594,1404,'湘西','X',1,0,0),(1593,1404,'娄底','L',1,0,0),(1592,1404,'永州','Y',1,0,0),(1591,1404,'怀化','H',1,0,0),(1590,1404,'邵阳','S',1,0,0),(1589,1404,'郴州','B',1,0,0),(1588,1404,'岳阳','Y',1,0,0),(1587,1404,'湘潭','X',1,0,0),(1586,1404,'衡阳','H',1,0,0),(1585,1404,'常德','C',1,0,0),(1584,1404,'益阳','Y',1,0,0),(1583,1404,'株洲','Z',1,0,0),(1582,1404,'长沙','C',1,0,0),(1581,1403,'神农架','S',1,0,0),(1580,1403,'仙桃','X',1,0,0),(1579,1403,'天门','T',1,0,0),(1578,1403,'潜江','Q',1,0,0),(1577,1403,'随州','S',1,0,0),(1576,1403,'鄂州','E',1,0,0),(1575,1403,'咸宁','X',1,0,0),(1574,1403,'荆门','J',1,0,0),(1573,1403,'恩施','S',1,0,0),(1572,1403,'黄冈','H',1,0,0),(1571,1403,'孝感','X',1,0,0),(1570,1403,'黄石','H',1,0,0),(1569,1403,'十堰','S',1,0,0),(1568,1403,'荆州','J',1,0,0),(1567,1403,'襄阳','X',1,0,0),(1566,1403,'宜昌','Y',1,0,0),(1565,1403,'武汉','W',1,0,0),(1564,1402,'长葛','C',1,0,0),(1563,1402,'禹州','Y',1,0,0),(1562,1402,'鄢陵','Y',1,0,0),(1561,1402,'明港','M',1,0,0),(1560,1402,'济源','J',1,0,0),(1559,1402,'鹤壁','H',1,0,0),(1558,1402,'三门峡','S',1,0,0),(1557,1402,'漯河','L',1,0,0),(1556,1402,'驻马店','Z',1,0,0),(1555,1402,'信阳','X',1,0,0),(1554,1402,'周口','Z',1,0,0),(1553,1402,'濮阳','P',1,0,0),(1552,1402,'开封','K',1,0,0),(1551,1402,'商丘','S',1,0,0),(1550,1402,'焦作','J',1,0,0),(1549,1402,'安阳','A',1,0,0),(1548,1402,'平顶山','P',1,0,0),(1547,1402,'许昌','X',1,0,0),(1546,1402,'南阳','N',1,0,0),(1545,1402,'新乡','X',1,0,0),(1544,1402,'洛阳','L',1,0,0),(1543,1402,'郑州','Z',1,0,0),(1542,1401,'三沙','S',1,0,0),(3294,3285,'临高县','A',1,0,0),(1540,1401,'三亚','S',1,0,0),(1539,1401,'海口','H',1,0,0),(1538,1400,'崇左','C',1,0,0),(1537,1400,'防城港','F',1,0,0),(1536,1400,'贺州','H',1,0,0),(1535,1400,'来宾','L',1,0,0),(1534,1400,'河池','H',1,0,0),(1533,1400,'百色','B',1,0,0),(1532,1400,'钦州','Q',1,0,0),(1531,1400,'贵港','G',1,0,0),(1530,1400,'北海','B',1,0,0),(1529,1400,'梧州','W',1,0,0),(1528,1400,'玉林','Y',1,0,0),(1527,1400,'桂林','G',1,0,0),(1526,1400,'柳州','L',1,0,0),(1525,1400,'南宁','N',1,0,0),(4501,1523,'新罗区','X',1,0,0),(1523,1399,'龙岩','L',1,0,0),(1522,1399,'南平','N',1,0,0),(1521,1399,'三明','S',1,0,0),(1520,1399,'宁德','N',1,0,0),(1519,1399,'漳州','Z',1,0,0),(1518,1399,'莆田','P',1,0,0),(1517,1399,'泉州','Q',1,0,0),(1516,1399,'厦门','X',1,0,0),(1515,1399,'福州','F',1,0,0),(4587,1509,'云城区','Y',1,0,0),(4586,1509,'云浮市','Y',1,0,0),(1511,1398,'潮州','C',1,0,0),(1510,1398,'汕尾','S',1,0,0),(1509,1398,'云浮','Y',1,0,0),(1508,1398,'河源','H',1,0,0),(1507,1398,'韶关','S',1,0,0),(1506,1398,'阳江','Y',1,0,0),(1505,1398,'清远','Q',1,0,0),(1504,1398,'梅州','M',1,0,0),(1503,1398,'揭阳','J',1,0,0),(1502,1398,'茂名','M',1,0,0),(1501,1398,'肇庆','Z',1,0,0),(1500,1398,'湛江','Z',1,0,0),(1499,1398,'汕头','S',1,0,0),(1498,1398,'江门','J',1,0,0),(1497,1398,'惠州','H',1,0,0),(1496,1398,'珠海','Z',1,0,0),(1495,1398,'中山','Z',1,0,0),(1494,1398,'佛山','F',1,0,0),(1493,1398,'东莞','D',1,0,0),(1492,1398,'广州','G',1,0,0),(1491,1398,'深圳','S',1,0,0),(2851,1472,'镜湖区','J',1,0,0),(2886,1487,'居巢区','J',1,0,0),(1487,1397,'巢湖','C',1,0,0),(1486,1397,'池州','C',1,0,0),(1485,1397,'黄山','H',1,0,0),(1484,1397,'亳州','B',1,0,0),(1483,1397,'宣城','X',1,0,0),(1482,1397,'铜陵','T',1,0,0),(1481,1397,'马鞍山','M',1,0,0),(1480,1397,'滁州','C',1,0,0),(1479,1397,'淮北','H',1,0,0),(1478,1397,'六安','L',1,0,0),(1477,1397,'宿州','S',1,0,0),(1476,1397,'安庆','A',1,0,0),(1475,1397,'淮南','H',1,0,0),(1474,1397,'阜阳','F',1,0,0),(1472,1397,'芜湖','W',1,0,0),(1471,1397,'合肥','H',1,0,0),(3311,1467,'普陀区','P',1,0,0),(3310,1467,'定海区','D',1,0,0),(370,33,'澳门','A',1,0,0),(1467,1396,'舟山','Z',1,0,0),(1466,1396,'衢州','Q',1,0,0),(1465,1396,'丽水','L',1,0,0),(1464,1396,'湖州','H',1,0,0),(1463,1396,'绍兴','S',1,0,0),(1462,1396,'台州','T',1,0,0),(1461,1396,'嘉兴','J',1,0,0),(1460,1396,'金华','J',1,0,0),(1459,1396,'温州','W',1,0,0),(1458,1396,'宁波','N',1,0,0),(1457,1396,'杭州','H',1,0,0),(4296,1454,'京口区','J',1,0,0),(1454,1395,'镇江','Z',1,0,0),(1453,1395,'宿迁','S',1,0,0),(1452,1395,'泰州','T',1,0,0),(1451,1395,'连云港','L',1,0,0),(1450,1395,'淮安','H',1,0,0),(1449,1395,'盐城','Y',1,0,0),(1448,1395,'扬州','Y',1,0,0),(1447,1395,'南通','N',1,0,0),(1446,1395,'徐州','X',1,0,0),(1445,1395,'常州','C',1,0,0),(1797,1421,'钓鱼岛','D',1,0,0),(1818,37,'徐汇区','X',1,0,0),(399,38,'静海县','J',1,0,0),(400,38,'宁河县','N',1,0,0),(401,38,'蓟县','J',1,0,0),(1853,39,'涪陵区','F',1,0,0),(1852,39,'万州区','W',1,0,0),(404,40,'平山县','P',1,0,0),(405,40,'灵寿县','L',1,0,0),(406,41,'临漳县','L',1,0,0),(407,41,'成安县','C',1,0,0),(408,42,'内丘县','N',1,0,0),(409,42,'临城县','L',1,0,0),(410,43,'满城县','M',1,0,0),(411,43,'清苑县','Q',1,0,0),(412,44,'宣化县','X',1,0,0),(413,44,'张北县','Z',1,0,0),(414,45,'兴隆县','X',1,0,0),(415,45,'平泉县','P',1,0,0),(416,46,'永清县','Y',1,0,0),(417,46,'香河县','X',1,0,0),(418,47,'乐亭县','L',1,0,0),(419,47,'迁西县','Q',1,0,0),(420,48,'青龙县','Q',1,0,0),(421,48,'昌黎县','C',1,0,0),(422,49,'东光县','D',1,0,0),(423,49,'海兴县','H',1,0,0),(424,50,'武强县','W',1,0,0),(425,50,'故城县 ','G',1,0,0),(426,51,'清徐县','Q',1,0,0),(427,51,'娄烦县','L',1,0,0),(428,52,'天镇县','T',1,0,0),(429,52,'阳高县','Y',1,0,0),(430,53,'平定县','P',1,0,0),(431,53,'盂县','Y',1,0,0),(432,54,'平顺县','P',1,0,0),(433,54,'黎城县','L',1,0,0),(434,55,'沁水县','Q',1,0,0),(435,55,'阳城','Y',1,0,0),(436,56,'山阴县','S',1,0,0),(437,56,'应县','Y',1,0,0),(438,57,'方山县','F',1,0,0),(439,57,'中阳县','Z',1,0,0),(440,58,'定襄县','D',1,0,0),(441,58,'五台县','W',1,0,0),(442,59,'左权县','Z',1,0,0),(443,59,'和顺县','H',1,0,0),(444,60,'曲沃县','Q',1,0,0),(445,60,'翼城县','Y',1,0,0),(446,61,'临猗县','L',1,0,0),(447,61,'万荣县','W',1,0,0),(448,62,'和林县','H',1,0,0),(449,62,'武川县','W',1,0,0),(450,63,'固阳县','G',1,0,0),(451,64,'海拉尔区','H',1,0,0),(452,64,'阿荣旗','A',1,0,0),(453,65,'林西县','L',1,0,0),(454,66,'化德县','H',1,0,0),(455,66,'兴和县','X',1,0,0),(456,68,'额济纳旗','E',1,0,0),(457,68,'哲里木盟','Z',1,0,0),(458,69,'兴安盟盟','X',1,0,0),(459,70,'乌兰察盟','W',1,0,0),(460,71,'锡林郭盟','Y',1,0,0),(461,72,'巴彦淖盟','B',1,0,0),(462,73,'伊克昭盟','Y',1,0,0),(463,74,'康平县','K',1,0,0),(464,74,'法库县','F',1,0,0),(465,75,'长海县','C',1,0,0),(466,76,'台安县','T',1,0,0),(467,78,'振兴区','Z',1,0,0),(468,79,'丹东县','D',1,0,0),(469,80,'黑山县','H',1,0,0),(470,81,'西市区','X',1,0,0),(471,81,'鲅鱼圈区 ','B',1,0,0),(472,82,'彰武县','Z',1,0,0),(473,82,'太平区','T',1,0,0),(474,83,'辽阳县','L',1,0,0),(475,83,'文圣区','W',1,0,0),(476,84,'大洼县','D',1,0,0),(477,84,'盘山县 ','P',1,0,0),(478,85,'铁岭县','T',1,0,0),(479,85,'西丰县','X',1,0,0),(480,86,'建平县','J',1,0,0),(481,86,'朝阳县','Z',1,0,0),(482,87,'建昌县','J',1,0,0),(483,87,'龙港区','L',1,0,0),(484,88,'农安县','N',1,0,0),(485,88,'宽城区 ','K',1,0,0),(486,89,'船营区','C',1,0,0),(487,89,'昌邑区','C',1,0,0),(488,90,'梨树县','L',1,0,0),(489,90,'铁西区','T',1,0,0),(490,91,'东丰县','D',1,0,0),(491,91,'东辽县','D',1,0,0),(492,92,'柳河县','L',1,0,0),(493,92,'辉南县','H',1,0,0),(494,93,'靖宇县','J',1,0,0),(495,93,'抚松县','F',1,0,0),(496,94,'乾安县','Q',1,0,0),(497,94,'扶余县','F',1,0,0),(498,95,'通榆县','T',1,0,0),(499,95,'镇赉县','Z',1,0,0),(500,96,'汪清县','W',1,0,0),(501,96,'安图县','A',1,0,0),(502,97,'方正县','F',1,0,0),(503,97,'宾县','B',1,0,0),(504,98,'龙江县','L',1,0,0),(505,98,'依安县','Y',1,0,0),(506,99,'林口县','L',1,0,0),(507,99,'东宁县','D',1,0,0),(508,100,'桦南县','H',1,0,0),(509,100,'桦川县','H',1,0,0),(510,101,'林甸县','L',1,0,0),(511,101,'肇州县','J',1,0,0),(512,102,'望奎县','W',1,0,0),(513,102,'兰西县','L',1,0,0),(514,103,'兴安区','X',1,0,0),(515,103,'向阳区','X',1,0,0),(516,104,'鸡东县','J',1,0,0),(517,104,'麻山区','M',1,0,0),(518,105,'逊克县','X',1,0,0),(519,105,'孙吴县','S',1,0,0),(520,106,'友谊县','Y',1,0,0),(521,106,'集贤县','J',1,0,0),(522,107,'嘉荫县','J',1,0,0),(523,107,'伊春区','Y',1,0,0),(524,108,'新兴区','X',1,0,0),(525,108,'勃利县 ','B',1,0,0),(526,109,'呼玛县','H',1,0,0),(527,109,'漠河县','M',1,0,0),(528,110,'鼓楼区','G',1,0,0),(529,110,'建邺区','J',1,0,0),(530,110,'浦口区','P',1,0,0),(531,111,'润州区 ','R',1,0,0),(532,111,'京口区','J',1,0,0),(533,112,'昆山市','K',1,0,0),(534,112,'吴中区','W',1,0,0),(535,113,'海安县','H',1,0,0),(536,113,'港闸区','G',1,0,0),(537,114,'邗江区','H',1,0,0),(538,114,'广陵区','G',1,0,0),(539,115,'大丰市','D',1,0,0),(540,115,'滨海市','B',1,0,0),(541,116,'铜山县','T',1,0,0),(542,116,'沛县','P',1,0,0),(543,117,'东海县','D',1,0,0),(544,117,'赣榆县','G',1,0,0),(545,118,'钟楼区','Z',1,0,0),(546,118,'天宁区','T',1,0,0),(547,119,'北塘区','B',1,0,0),(548,119,' 宜兴市','Y',1,0,0),(549,120,'沭阳县','S',1,0,1),(550,120,'泗阳县','S',1,0,2),(551,121,'高港区','G',1,0,0),(552,121,'海陵区','H',1,0,0),(553,122,'涟水县','L',1,0,0),(554,122,'盱眙县','X',1,0,0),(555,123,'桐庐县','T',1,0,0),(556,123,'淳安县','C',1,0,0),(557,124,'宁海县','N',1,0,0),(558,124,'象山县','X',1,0,0),(559,125,'洞头县','D',1,0,0),(560,125,'永嘉县','Y',1,0,0),(561,126,'嘉善县','J',1,0,0),(562,126,'海盐县','H',1,0,0),(563,127,'德清县','D',1,0,0),(564,127,'长兴县','C',1,0,0),(565,128,'新昌县','X',1,0,0),(566,128,'绍兴县','S',1,0,0),(567,129,'磐安县','P',1,0,0),(568,129,'武义县','W',1,0,0),(569,130,'常山县','C',1,0,0),(570,130,'开化县','K',1,0,0),(571,131,'普陀区','P',1,0,0),(572,131,'岱山县','D',1,0,0),(573,132,'玉环县','Y',1,0,0),(574,132,'三门县','S',1,0,0),(575,133,'青田县','Q',1,0,0),(576,133,'莲都区','L',1,0,0),(577,134,'长丰县','C',1,0,0),(578,134,'肥东县','F',1,0,0),(579,135,'芜湖县','W',1,0,0),(580,135,'南陵县','N',1,0,0),(581,137,'当涂县','D',1,0,0),(582,137,'花山区','H',1,0,0),(583,138,'烈山区','L',1,0,0),(584,138,'相山区','X',1,0,0),(585,139,'铜陵县','T',1,0,0),(586,139,'狮子山区','S',1,0,0),(587,140,'怀宁县','H',1,0,0),(588,140,'潜山县','Q',1,0,0),(589,141,'休宁县','X',1,0,0),(590,141,'黄山区','H',1,0,0),(591,142,'定远县','D',1,0,0),(592,142,'凤阳县','F',1,0,0),(593,143,'萧县','X',1,0,0),(594,143,'灵璧县','L',1,0,0),(595,144,'东至县','D',1,0,0),(596,144,'石台县','S',1,0,0),(597,145,'凤台县','F',1,0,0),(598,145,'大通区','D',1,0,0),(599,146,'无为县','W',1,0,0),(600,146,'含山县','H',1,0,0),(601,147,'埠阳县','B',1,0,0),(602,148,'寿县','S',1,0,0),(603,148,'舒城县','S',1,0,0),(604,149,'郎溪县','L',1,0,0),(605,149,'广德县','G',1,0,0),(606,150,'利辛县','L',1,0,0),(607,150,'蒙城县','M',1,0,0),(608,151,'连江县','L',1,0,0),(609,151,'罗源县','L',1,0,0),(610,152,'思明区','S',1,0,0),(611,152,'海沧区','H',1,0,0),(612,153,'仙游县','X',1,0,0),(613,153,'涵江区','H',1,0,0),(614,154,'大田县','D',1,0,0),(615,154,'尤溪县','Y',1,0,0),(616,155,'金门县','J',1,0,0),(617,155,'德化县','D',1,0,0),(618,156,'漳浦县','Z',1,0,0),(619,156,'华安县','H',1,0,0),(620,157,'浦城县','P',1,0,0),(621,157,'顺昌县','S',1,0,0),(622,158,'上杭县','S',1,0,0),(623,158,'武平县','W',1,0,0),(624,159,'霞浦县','X',1,0,0),(625,159,'古田县','G',1,0,0),(626,160,'安义县','A',1,0,0),(627,160,'新建县','X',1,0,0),(628,161,'浮梁县','H',1,0,0),(629,161,'珠山区','Z',1,0,0),(630,162,'武宁县','W',1,0,0),(631,162,'修水县','X',1,0,0),(632,163,'余江县','Y',1,0,0),(633,163,'月湖区','Y',1,0,0),(634,164,'莲花县','L',1,0,0),(635,164,'上栗县','S',1,0,0),(636,165,'分宜县','F',1,0,0),(637,165,'渝水区','Y',1,0,0),(638,166,'信丰县 ','X',1,0,0),(639,166,'大余县','D',1,0,0),(640,167,'吉水县','J',1,0,0),(641,167,'峡江县','X',1,0,0),(642,168,'奉新县','F',1,0,0),(643,168,'万载县','W',1,0,0),(644,169,'南丰县 ','N',1,0,0),(645,169,'崇仁县','C',1,0,0),(646,170,'玉山县','Y',1,0,0),(647,170,'广丰县','G',1,0,0),(1444,1395,'无锡','W',1,0,0),(1443,1395,'南京','N',1,0,0),(1442,1395,'苏州','S',1,0,0),(3146,1423,'历下区','L',1,0,0),(3145,1438,'钢城区','G',1,0,0),(3144,1438,'莱城区','L',1,0,0),(1438,1394,'莱芜','L',1,0,0),(1437,1394,'滨州','B',1,0,0),(1436,1394,'菏泽','H',1,0,0),(1435,1394,'东营','D',1,0,0),(1434,1394,'日照','R',1,0,0),(1433,1394,'德州','D',1,0,0),(1432,1394,'枣庄','Z',1,0,0),(1431,1394,'威海','W',1,0,0),(1430,1394,'聊城','L',1,0,0),(1429,1394,'泰安','T',1,0,0),(1428,1394,'济宁','J',1,0,0),(1427,1394,'淄博','Z',1,0,0),(1426,1394,'临沂','L',1,0,0),(1425,1394,'潍坊','W',1,0,0),(1424,1394,'烟台','Y',1,0,0),(1423,1394,'济南','J',1,0,0),(1422,1394,'青岛','Q',1,0,0),(1421,0,'其它','Q',1,0,32),(1420,0,'青海','Q',1,0,31),(1419,0,'宁夏','N',1,0,30),(1418,0,'甘肃','G',1,0,29),(1417,0,'新疆','X',1,0,28),(1416,0,'陕西','S',1,0,27),(1415,0,'内蒙古','N',1,0,26),(1414,0,'山西','S',1,0,25),(1413,0,'河北','H',1,0,24),(1412,0,'西藏','X',1,0,23),(682,188,'通许县','T',1,0,0),(683,188,'尉氏县','W',1,0,0),(684,189,'新安县','X',1,0,0),(685,189,'孟津县','M',1,0,0),(686,190,'鲁山县','L',1,0,0),(687,190,'宝丰县','B',1,0,0),(688,191,'内黄县','N',1,0,0),(689,191,'汤阴县','T',1,0,0),(690,192,'浚县','J',1,0,0),(691,192,'淇县','Q',1,0,0),(692,193,'新乡县','X',1,0,0),(693,193,'原阳县','Y',1,0,0),(694,194,'博爱县','P',1,0,0),(695,194,'武陟县','W',1,0,0),(696,195,'台前县','T',1,0,0),(697,195,'范县','F',1,0,0),(698,196,'襄城县','X',1,0,0),(699,196,'许昌县','X',1,0,0),(700,197,'舞阳县','W',1,0,0),(701,197,'临颍县','L',1,0,0),(702,198,'渑池县','S',1,0,0),(703,198,'卢氏县','L',1,0,0),(704,199,'南召县','N',1,0,0),(705,199,'方城县','F',1,0,0),(706,200,'民权县','M',1,0,0),(707,200,'宁陵县','N',1,0,0),(708,201,'光山县','G',1,0,0),(709,201,'新县','X',1,0,0),(710,202,'商水县','S',1,0,0),(711,202,'西华县','X',1,0,0),(712,203,'西平县','X',1,0,0),(713,203,'平舆县','P',1,0,0),(714,204,'天坛街道','T',1,0,0),(1411,0,'贵州','G',1,0,22),(716,715,'中原区','Z',1,0,0),(717,715,'二七区','E',1,0,0),(718,205,'武昌区','W',1,0,0),(719,205,'江汉区','J',1,0,0),(720,206,'兴山县','X',1,0,0),(721,206,'远安县','Y',1,0,0),(722,207,'江陵县','J',1,0,0),(723,207,'监利县','J',1,0,0),(724,208,'保康县','B',1,0,0),(725,208,'南漳县','N',1,0,0),(726,209,'阳新县','Y',1,0,0),(727,209,'铁山区','T',1,0,0),(728,210,'沙洋县','S',1,0,0),(729,210,'京山县','J',1,0,0),(730,211,'团风县','T',1,0,0),(731,211,'红安县','H',1,0,0),(732,212,'竹溪县','Z',1,0,0),(733,212,'竹山县','Z',1,0,0),(734,213,'建始县','J',1,0,0),(735,213,'巴东县','B',1,0,0),(736,214,'龙湾镇','L',1,0,0),(737,214,'老新镇','L',1,0,0),(738,215,'拖市镇','T',1,0,0),(739,215,'张港镇','Z',1,0,0),(740,216,'陈场镇','C',1,0,0),(741,216,'通海口镇','T',1,0,0),(742,217,'广水市 ','S',1,0,0),(743,218,'通城县','T',1,0,0),(744,218,'崇阳县','C',1,0,0),(745,219,'孝昌县','X',1,0,0),(746,219,'大悟县','D',1,0,0),(747,220,'华容区','H',1,0,0),(748,220,'鄂城区','E',1,0,0),(749,221,'长沙县','C',1,0,0),(750,221,'望城县','W',1,0,0),(751,222,'安乡县','A',1,0,0),(752,222,'汉寿县','H',1,0,0),(753,223,'荷塘区','H',1,0,0),(754,223,'石峰区','S',1,0,0),(755,224,'湘潭县','X',1,0,0),(756,224,'岳塘区','Y',1,0,0),(757,225,'衡山县','H',1,0,0),(758,225,'祁东县','Q',1,0,0),(759,226,'华容县','H',1,0,0),(760,226,'湘阴县','X',1,0,0),(761,227,'邵东县','S',1,0,0),(762,227,'隆回县','L',1,0,0),(763,228,'南县','N',1,0,0),(764,228,'桃江县','T',1,0,0),(765,229,'新化县','X',1,0,0),(766,229,'双峰县','S',1,0,0),(767,230,'中方县','Z',1,0,0),(768,230,'会同县','H',1,0,0),(769,231,'桂阳县','G',1,0,0),(770,231,'宜章县','Y',1,0,0),(771,232,'祁阳县','Q',1,0,0),(772,232,'东安县','D',1,0,0),(773,233,'凤凰县','F',1,0,0),(774,233,'花垣县','H',1,0,0),(775,234,'慈利县','C',1,0,0),(776,234,'桑植县','S',1,0,0),(777,235,'越秀区','Y',1,0,0),(778,235,'海珠区','H',1,0,0),(779,236,'南山区','N',1,0,0),(780,236,'宝安区','B',1,0,0),(781,237,'斗门区','D',1,0,0),(782,237,'金湾区','J',1,0,0),(783,238,'潮阳区','C',1,0,0),(784,238,'南澳县','N',1,0,0),(785,239,'万江区','W',1,0,0),(786,239,'南城区','N',1,0,0),(787,240,'黄圃镇','H',1,0,0),(788,240,'石岐区','S',1,0,0),(789,241,'南海区','N',1,0,0),(790,241,'顺德区','S',1,0,0),(791,242,'始兴县','S',1,0,0),(792,242,'仁化县','R',1,0,0),(793,243,'新会区','X',1,0,0),(794,243,'江海区','J',1,0,0),(795,244,'徐闻县','X',1,0,0),(796,244,'麻章区','M',1,0,0),(797,245,'封开县','F',1,0,0),(798,245,'怀集县','H',1,0,0),(799,246,'惠东县','H',1,0,0),(800,246,'博罗县','B',1,0,0),(801,247,'大埔县','D',1,0,0),(802,247,'丰顺县','F',1,0,0),(803,248,'海丰县','H',1,0,0),(804,248,'陆河县','L',1,0,0),(805,249,'龙川县','L',1,0,0),(806,249,'连平县','L',1,0,0),(807,250,'阳西县','Y',1,0,0),(808,250,'阳东县','Y',1,0,0),(809,251,'阳山县','Y',1,0,0),(810,251,'连山县','L',1,0,0),(811,252,'潮安县','C',1,0,0),(812,252,'饶平县','R',1,0,0),(813,253,'揭西县','J',1,0,0),(814,253,'惠来县','H',1,0,0),(815,254,'云安县','Y',1,0,0),(816,254,'郁南县','Y',1,0,0),(817,269,'秀英区','X',1,0,0),(818,269,'龙华区','L',1,0,0),(819,270,'天涯镇','T',1,0,0),(820,270,'崖城镇','Y',1,0,0),(1410,0,'云南','Y',1,0,21),(822,821,'番阳镇','P',1,0,0),(823,821,'毛阳镇','M',1,0,0),(1409,0,'四川','S',1,0,20),(825,824,'会山镇','H',1,0,0),(826,824,'大路镇','D',1,0,0),(1408,0,'吉林','J',1,0,19),(828,827,'海头镇','H',1,0,0),(829,827,'和庆镇','H',1,0,0),(1407,0,'黑龙江','H',1,0,18),(831,830,'翁田镇','W',1,0,0),(832,830,'冯坡镇','F',1,0,0),(1406,0,'辽宁','L',1,0,17),(834,833,'南桥镇','N',1,0,0),(835,833,'北大镇','B',1,0,0),(1405,0,'江西','J',1,0,16),(837,836,'天安乡','T',1,0,0),(838,836,'新龙镇','X',1,0,0),(1404,0,'湖南','H',1,0,15),(840,839,'富文镇','F',1,0,0),(841,839,'翰林镇','H',1,0,0),(1403,0,'湖北','H',1,0,14),(843,842,'西昌镇','X',1,0,0),(844,842,'坡心镇','P',1,0,0),(1402,0,'河南','H',1,0,13),(846,845,'桥头镇','Q',1,0,0),(847,845,'福山镇','F',1,0,0),(1401,0,'海南','H',1,0,12),(849,848,'调楼镇','D',1,0,0),(850,848,'新盈镇','X',1,0,0),(1400,0,'广西','G',1,0,11),(852,851,'金波乡','J',1,0,0),(853,851,'青松乡','Q',1,0,0),(1399,0,'福建','F',1,0,10),(855,854,'七叉镇','Q',1,0,0),(856,854,'海尾镇','H',1,0,0),(1398,0,'广东','G',1,0,9),(858,857,'莺歌海镇','Y',1,0,0),(859,857,'尖峰镇','J',1,0,0),(1397,0,'安徽','A',1,0,8),(861,860,'群英乡','Q',1,0,0),(862,860,'提蒙乡','T',1,0,0),(1396,0,'浙江','Z',1,0,7),(864,863,'毛感乡','M',1,0,0),(865,863,'南林乡','N',1,0,0),(1395,0,'江苏','J',1,0,6),(867,866,'什运乡','S',1,0,0),(868,866,'红毛镇','H',1,0,0),(869,255,'宾阳县','B',1,0,0),(870,255,'上林县','S',1,0,0),(871,256,'柳江县','L',1,0,0),(872,256,'柳城县','L',1,0,0),(873,257,'临桂县','L',1,0,0),(874,257,'灵川县','L',1,0,0),(875,258,'苍梧县','C',1,0,0),(876,258,'藤县','T',1,0,0),(877,259,'铁山港','T',1,0,0),(878,259,'合浦县','H',1,0,0),(879,260,'上思县','S',1,0,0),(880,260,'防城区','F',1,0,0),(881,261,'灵山县','L',1,0,0),(882,261,'浦北县','P',1,0,0),(883,262,'平南县','P',1,0,0),(884,262,'港南区','G',1,0,0),(885,263,'陆川县','L',1,0,0),(886,263,'博白县','B',1,0,0),(887,267,'田阳县','T',1,0,0),(888,267,'田东县','T',1,0,0),(889,266,'昭平县','Z',1,0,0),(890,266,'钟山县','Z',1,0,0),(891,268,'东兰县','D',1,0,0),(892,268,'凤山县','F',1,0,0),(893,264,'象州县','X',1,0,0),(894,264,'武宣县','W',1,0,0),(895,265,'龙州县','L',1,0,0),(896,265,'大新县','D',1,0,0),(898,271,'金堂县','J',1,0,0),(899,271,'大邑县','D',1,0,0),(900,272,'三台县','S',1,0,0),(901,273,'中江县','Z',1,0,0),(902,274,'富顺县','F',1,0,0),(903,275,'盐边县','Y',1,0,0),(904,275,'米易县','M',1,0,0),(905,276,'旺苍县','W',1,0,0),(906,276,'青川县','Q',1,0,0),(907,277,'威远县','W',1,0,0),(908,277,'资中县','Z',1,0,0),(909,278,'井研县','J',1,0,0),(910,278,'夹江县','J',1,0,0),(911,279,'营山县','Y',1,0,0),(912,279,'蓬安县','P',1,0,0),(913,280,'南溪县','N',1,0,0),(914,280,'长宁县','C',1,0,0),(915,281,'岳池县','Y',1,0,0),(916,281,'武胜县','W',1,0,0),(917,282,'开江县','K',1,0,0),(918,283,'名山县','M',1,0,0),(919,283,'汉源县','H',1,0,0),(920,284,'彭山县','P',1,0,0),(921,284,'洪雅县','H',1,0,0),(922,285,'甘孜县','G',1,0,0),(923,286,'盐源县','Y',1,0,0),(924,287,'古蔺县','G',1,0,0),(925,288,'修文县','X',1,0,0),(926,288,'息烽县','X',1,0,0),(927,289,'水城县','S',1,0,0),(928,289,'盘　县','P',1,0,0),(929,290,'凤冈县','F',1,0,0),(930,290,'正安县','Z',1,0,0),(931,291,'普定县','P',1,0,0),(932,291,'平坝县','P',1,0,0),(933,292,'德江县','D',1,0,0),(934,292,'江口县','J',1,0,0),(935,293,'望谟县','W',1,0,0),(936,293,'晴隆县','Q',1,0,0),(937,295,'施秉县','S',1,0,0),(938,295,'麻江县','M',1,0,0),(939,296,'贵定县','G',1,0,0),(940,296,'惠水县','H',1,0,0),(941,294,'金沙县','J',1,0,0),(942,294,'织金县','Z',1,0,0),(943,297,'富民县','F',1,0,0),(944,297,'宜良县','Y',1,0,0),(945,298,'祥云县','X',1,0,0),(946,298,'宾川县','B',1,0,0),(947,299,'马龙县','M',1,0,0),(948,299,'陆良县','L',1,0,0),(949,300,'江川县','J',1,0,0),(950,300,'通海县','T',1,0,0),(951,301,'巧家县','Q',1,0,0),(952,301,'盐津县','Y',1,0,0),(953,302,'南华县','N',1,0,0),(954,302,'姚安县','Y',1,0,0),(955,303,'绿春县','L',1,0,0),(956,303,'建水县','J',1,0,0),(957,304,'马关县','M',1,0,0),(958,304,'丘北县','Q',1,0,0),(959,305,'墨江县','M',1,0,0),(960,305,'景东县','J',1,0,0),(961,306,'勐海县','M',1,0,0),(962,306,'勐腊县','M',1,0,0),(963,307,'施甸县','S',1,0,0),(964,307,'腾冲县','T',1,0,0),(965,308,'梁河县','L',1,0,0),(966,308,'盈江县','Y',1,0,0),(967,308,'陇川县','L',1,0,0),(968,309,'永胜县 ','Y',1,0,0),(969,309,'华坪县','H',1,0,0),(970,309,'玉龙县 ','Y',1,0,0),(971,309,'宁蒗县','N',1,0,0),(972,310,'泸水县','L',1,0,0),(973,310,'福贡县','F',1,0,0),(974,310,'贡山县 ','G',1,0,0),(975,310,'兰坪县','L',1,0,0),(976,311,'香格里拉县 ','X',1,0,0),(977,311,'德钦县','D',1,0,0),(978,311,'维西县','W',1,0,0),(979,312,'临翔区','L',1,0,0),(980,312,'凤庆县','F',1,0,0),(981,312,'云 县','Y',1,0,0),(982,312,'永德县','Y',1,0,0),(983,312,'镇康县','Z',1,0,0),(984,312,'双江县 ','S',1,0,0),(985,312,'耿马县','G',1,0,0),(986,312,'沧源县','C',1,0,0),(987,313,'林周县','L',1,0,0),(988,313,'达孜县','D',1,0,0),(989,313,'尼木县','N',1,0,0),(990,313,'当雄县','D',1,0,0),(991,313,'曲水县','Q',1,0,0),(992,313,'墨竹工卡县','M',1,0,0),(993,313,'堆龙德庆县','D',1,0,0),(994,314,'定结县','D',1,0,0),(995,314,'萨迦县','S',1,0,0),(996,314,'江孜县','J',1,0,0),(997,314,'拉孜县','L',1,0,0),(998,314,'定日县','D',1,0,0),(999,314,'康马县','K',1,0,0),(1000,314,'聂拉木县','N',1,0,0),(1001,314,'吉隆县','A',1,0,0),(1002,314,'亚东县','Y',1,0,0),(1003,314,'谢通门县','X',1,0,0),(1004,315,'乃东县','N',1,0,0),(1005,315,'琼结县','Q',1,0,0),(1006,315,'措美县','C',1,0,0),(1007,315,'加查县','J',1,0,0),(1008,315,'贡嘎县','G',1,0,0),(1009,315,'洛扎县','L',1,0,0),(1010,315,'曲松县','Q',1,0,0),(1011,315,'桑日县','S',1,0,0),(1012,315,'扎囊县','Z',1,0,0),(1013,315,'错那县','C',1,0,0),(1014,315,'隆子县','L',1,0,0),(1015,315,'浪卡子县','L',1,0,0),(1016,316,'林芝县','L',1,0,0),(1017,316,'墨脱县','M',1,0,0),(1018,316,'朗 县','L',1,0,0),(1019,316,'米林县','M',1,0,0),(1020,316,'察隅县','C',1,0,0),(1021,316,'波密县','B',1,0,0),(1022,316,'工布江达县','G',1,0,0),(1023,317,'昌都县','C',1,0,0),(1024,317,'芒康县','M',1,0,0),(1025,317,'贡觉县','G',1,0,0),(1026,317,'八宿县','B',1,0,0),(1027,317,'左贡县','Z',1,0,0),(1028,317,'边坝县','B',1,0,0),(1029,317,'洛隆县','L',1,0,0),(1030,317,'江达县','J',1,0,0),(1031,317,'类乌齐县','L',1,0,0),(1032,317,'丁青县','D',1,0,0),(1033,317,'察雅县','C',1,0,0),(1034,318,'噶尔县','G',1,0,0),(1035,318,'措勤县','C',1,0,0),(1036,318,'普兰县','P',1,0,0),(1037,318,'革吉县','G',1,0,0),(1038,318,'日土县','R',1,0,0),(1040,318,'札达县','Z',1,0,0),(1041,318,'改则县','G',1,0,0),(1042,319,'那曲县','N',1,0,0),(1043,319,'嘉黎县','J',1,0,0),(1044,319,'申扎县','S',1,0,0),(1045,319,'巴青县','B',1,0,0),(1046,319,'聂荣县','N',1,0,0),(1047,319,'尼玛县','N',1,0,0),(1048,319,'比如县','B',1,0,0),(1049,319,'索 县','S',1,0,0),(1050,319,'班戈县','B',1,0,0),(1051,319,'安多县','A',1,0,0),(1052,320,'未央区','W',1,0,0),(1053,320,'莲湖区','L',1,0,0),(1054,320,'新城区','X',1,0,0),(1055,320,'雁塔区','Y',1,0,0),(1056,320,'灞桥区','B',1,0,0),(1057,320,'阎良区','Y',1,0,0),(1058,320,'临潼区','L',1,0,0),(1059,320,'长安区','C',1,0,0),(1060,320,'高陵县','G',1,0,0),(1061,320,'蓝田县','L',1,0,0),(1062,320,'户 县','H',1,0,0),(1063,320,'周至县','Z',1,0,0),(1064,321,'金台区','J',1,0,0),(1065,321,'渭滨区','W',1,0,0),(1066,321,'陈仓区','C',1,0,0),(1067,321,'岐山县','J',1,0,0),(1068,321,'凤翔县','F',1,0,0),(1069,321,'陇 县','L',1,0,0),(1070,321,'太白县','T',1,0,0),(1071,321,'麟游县','L',1,0,0),(1072,321,'扶风县','F',1,0,0),(1073,321,'千阳县','Q',1,0,0),(1074,321,'眉 县','M',1,0,0),(1075,321,'凤 县','F',1,0,0),(1076,322,'秦都区','Q',1,0,0),(1077,322,'渭城区','W',1,0,0),(1078,322,'杨陵区','Y',1,0,0),(1079,322,'兴平市','X',1,0,0),(1080,322,'礼泉县','L',1,0,0),(1081,322,'泾阳县','J',1,0,0),(1082,322,'永寿县','Y',1,0,0),(1083,322,'三原县','S',1,0,0),(1084,322,'彬 县','B',1,0,0),(1085,322,'旬邑县','X',1,0,0),(1086,322,'长武县','C',1,0,0),(1087,322,'乾 县','Q',1,0,0),(1088,322,'武功县','W',1,0,0),(1089,322,'淳化县','C',1,0,0),(1090,323,'耀州区','Y',1,0,0),(1091,323,'王益区','W',1,0,0),(1092,323,'印台区','Y',1,0,0),(1093,323,'宜君县','Y',1,0,0),(1095,324,'临渭区','L',1,0,0),(1096,324,'韩城市','H',1,0,0),(1097,324,'华阴市','H',1,0,0),(1098,324,'蒲城县','P',1,0,0),(1099,324,'潼关县','T',1,0,0),(1100,324,'白水县','B',1,0,0),(1101,324,'澄城县','D',1,0,0),(1102,324,'华 县','H',1,0,0),(1103,324,'合阳县','H',1,0,0),(1104,324,'富平县','F',1,0,0),(1105,324,'大荔县','D',1,0,0),(1106,325,'宝塔区','B',1,0,0),(1107,325,'安塞县','A',1,0,0),(1108,325,'洛川县','L',1,0,0),(1109,325,'子长县','Z',1,0,0),(1110,325,'黄陵县','H',1,0,0),(1111,325,'延川县','Y',1,0,0),(1112,325,'富 县','F',1,0,0),(1113,325,'延长县','Y',1,0,0),(1114,325,'甘泉县','G',1,0,0),(1115,325,'宜川县','Y',1,0,0),(1116,325,'志丹县','Z',1,0,0),(1117,325,'黄龙县','H',1,0,0),(1118,325,'吴起县','W',1,0,0),(1119,326,'榆阳区','Y',1,0,0),(1120,326,'清涧县','Q',1,0,0),(1121,326,'绥德县','S',1,0,0),(1122,326,'神木县','S',1,0,0),(1123,326,'佳 县','J',1,0,0),(1124,326,'府谷县','F',1,0,0),(1125,326,'子洲县','Z',1,0,0),(1126,326,'靖边县','J',1,0,0),(1127,326,'横山县','H',1,0,0),(1128,326,'米脂县','M',1,0,0),(1129,326,'吴堡县','W',1,0,0),(1130,326,'定边县','D',1,0,0),(1131,327,'汉台区','H',1,0,0),(1132,327,'留坝县','L',1,0,0),(1133,327,'镇巴县','Z',1,0,0),(1134,327,'城固县','C',1,0,0),(1135,327,'南郑县','N',1,0,0),(1136,327,'洋 县','Y',1,0,0),(1137,327,'宁强县','N',1,0,0),(1138,327,'佛坪县','F',1,0,0),(1139,327,'勉 县','M',1,0,0),(1140,327,'西乡县','X',1,0,0),(1141,327,'略阳县','L',1,0,0),(1142,328,'汉滨区','H',1,0,0),(1143,328,'紫阳县','Z',1,0,0),(1144,328,'岚皋县','L',1,0,0),(1145,328,'旬阳县','X',1,0,0),(1146,328,'镇坪县','Z',1,0,0),(1147,328,'平利县','P',1,0,0),(1148,328,'石泉县','S',1,0,0),(1149,328,'宁陕县','N',1,0,0),(1150,328,'白河县','B',1,0,0),(1151,328,'汉阴县','H',1,0,0),(1152,329,'商州区','S',1,0,0),(1153,329,'镇安县','Z',1,0,0),(1154,329,'山阳县','S',1,0,0),(1155,329,'洛南县','L',1,0,0),(1156,329,'商南县','S',1,0,0),(1157,329,'丹凤县','D',1,0,0),(1158,329,'柞水县','Z',1,0,0),(1159,330,'城关区','C',1,0,0),(1160,330,'七里河区','Q',1,0,0),(1161,330,'西固区','X',1,0,0),(1162,330,'安宁区','A',1,0,0),(1163,330,'红古区','H',1,0,0),(1164,330,'永登县','Y',1,0,0),(1165,330,'皋兰县','G',1,0,0),(1166,330,'榆中县','Y',1,0,0),(1167,332,'金川区','J',1,0,0),(1168,332,'永昌县','Y',1,0,0),(1169,333,'白银区','B',1,0,0),(1170,333,'平川区','P',1,0,0),(1171,333,'靖远县','J',1,0,0),(1172,333,'会宁县','H',1,0,0),(1173,333,'景泰县','J',1,0,0),(1174,334,'秦州区','Q',1,0,0),(1175,334,'麦积区','M',1,0,0),(1176,334,'清水县','Q',1,0,0),(1177,334,'秦安县','Q',1,0,0),(1178,334,'甘谷县','G',1,0,0),(1179,334,'武山县','W',1,0,0),(1180,335,'肃州区','S',1,0,0),(1181,335,'玉门市','Y',1,0,0),(1182,335,'敦煌市','Z',1,0,0),(1183,335,'金塔县','J',1,0,0),(1184,335,'瓜州县','G',1,0,0),(1185,335,'肃北蒙古族自治县','S',1,0,0),(1186,335,'阿克塞哈萨克族自治县','A',1,0,0),(1187,336,'甘州区','G',1,0,0),(1188,336,'肃南裕固族自治县','S',1,0,0),(1189,336,'民乐县','M',1,0,0),(1190,336,'临泽县','L',1,0,0),(1191,336,'高台县','G',1,0,0),(1192,336,'山丹县','S',1,0,0),(1193,337,'凉州区','L',1,0,0),(1194,337,'民勤县','M',1,0,0),(1195,337,'古浪县','G',1,0,0),(1196,337,'天祝藏族自治县','A',1,0,0),(1197,338,'安定区','A',1,0,0),(1198,338,'通渭县','T',1,0,0),(1199,338,'陇西县','L',1,0,0),(1200,338,'渭源县','W',1,0,0),(1201,338,'临洮县','L',1,0,0),(1202,338,'漳 县','Z',1,0,0),(1203,338,'岷 县','M',1,0,0),(1204,339,'武都区','W',1,0,0),(1205,339,'成 县','C',1,0,0),(1206,339,'文 县','W',1,0,0),(1207,339,'宕昌县','Y',1,0,0),(1208,339,'康 县','K',1,0,0),(1209,339,'西和县','X',1,0,0),(1210,339,'礼 县','L',1,0,0),(1211,339,'徽 县','W',1,0,0),(1212,339,'两当县','L',1,0,0),(1213,340,'崆峒区','K',1,0,0),(1214,340,'泾川县','J',1,0,0),(1215,340,'灵台县','L',1,0,0),(1216,340,'崇信县','C',1,0,0),(1217,340,'华亭县','H',1,0,0),(1218,340,'庄浪县','Z',1,0,0),(1219,340,'静宁县','J',1,0,0),(1220,341,'西峰区','X',1,0,0),(1221,341,'庆城县','Q',1,0,0),(1222,341,'环 县','H',1,0,0),(1223,341,'华池县','H',1,0,0),(1224,341,'合水县','H',1,0,0),(1225,341,'正宁县','Z',1,0,0),(1226,341,'宁 县','N',1,0,0),(1227,341,'镇原县','Z',1,0,0),(1228,342,'临夏县','L',1,0,0),(1229,342,'康乐县','G',1,0,0),(1230,342,'永靖县','Y',1,0,0),(1231,342,'广河县','G',1,0,0),(1232,342,'和政县','H',1,0,0),(1233,342,'东乡族自治县','D',1,0,0),(1234,342,'积石山保安族东乡族撒拉族自治县','J',1,0,0),(1235,343,'合作市','H',1,0,0),(1236,343,'临潭县','L',1,0,0),(1237,343,'卓尼县','Z',1,0,0),(1238,343,'舟曲县','Z',1,0,0),(1239,343,'迭部县','D',1,0,0),(1240,343,'玛曲县','M',1,0,0),(1241,343,'碌曲县','L',1,0,0),(1242,343,'夏河县','X',1,0,0),(1243,344,'兴庆区','X',1,0,0),(1244,344,'金凤区','J',1,0,0),(1245,344,'西夏区','X',1,0,0),(1246,344,'灵武市','L',1,0,0),(1247,344,'永宁县','Y',1,0,0),(1248,344,'贺兰县','H',1,0,0),(1249,345,'大武口区','D',1,0,0),(1250,345,'惠农区','H',1,0,0),(1251,345,'平罗县','P',1,0,0),(1252,346,'利通区','L',1,0,0),(1253,346,'红寺堡区','H',1,0,0),(1254,346,'青铜峡市','Q',1,0,0),(1255,346,'同心县','T',1,0,0),(1256,346,'盐池县','Y',1,0,0),(1257,347,'原州区','Y',1,0,0),(1258,347,'西吉县','X',1,0,0),(1259,347,'隆德县','L',1,0,0),(1260,347,'泾源县','J',1,0,0),(1261,347,'彭阳县','P',1,0,0),(1394,0,'山东','S',1,0,5),(1263,1262,'沙坡头区','S',1,0,0),(1264,1262,'中宁县','Z',1,0,0),(1265,1262,'海原县','H',1,0,0),(1266,348,'城东区','C',1,0,0),(1267,348,'城中区','C',1,0,0),(1268,348,'城西区','C',1,0,0),(1269,348,'城北区','C',1,0,0),(1270,348,'湟中县','H',1,0,0),(1271,348,'湟源县','H',1,0,0),(1272,348,'大通回族土族自治县','D',1,0,0),(1273,349,'平安县','P',1,0,0),(1274,349,'乐都县','L',1,0,0),(1275,349,'民和回族土族自治县','M',1,0,0),(1276,349,'互助土族自治县','H',1,0,0),(1277,349,'化隆回族自治县','H',1,0,0),(1278,349,'循化撒拉族自治县','X',1,0,0),(1279,352,'同仁县','T',1,0,0),(1280,352,'尖扎县','J',1,0,0),(1281,352,'泽库县','Z',1,0,0),(1282,352,'河南蒙古族自治县','H',1,0,0),(1283,351,'海晏县','H',1,0,0),(1284,351,'祁连县','Q',1,0,0),(1285,351,'刚察县','G',1,0,0),(1286,351,'门源回族自治县','M',1,0,0),(1287,350,'共和县','G',1,0,0),(1288,350,'同德县','T',1,0,0),(1289,350,'贵德县','G',1,0,0),(1290,350,'兴海县','X',1,0,0),(1291,350,'贵南县','G',1,0,0),(1292,353,'玉树县','Y',1,0,0),(1293,353,'杂多县','Z',1,0,0),(1294,353,'称多县','C',1,0,0),(1295,353,'治多县','Z',1,0,0),(1296,353,'囊谦县','N',1,0,0),(1297,353,'曲麻莱县','Q',1,0,0),(1298,354,'玛沁县','M',1,0,0),(1299,354,'班玛县','B',1,0,0),(1300,354,'甘德县','G',1,0,0),(1301,354,'达日县','D',1,0,0),(1302,354,'久治县','J',1,0,0),(1303,354,'玛多县','M',1,0,0),(1304,355,'德令哈市','D',1,0,0),(1305,355,'格尔木市','G',1,0,0),(1306,355,'乌兰县','W',1,0,0),(1307,355,'都兰县','D',1,0,0),(1308,355,'天峻县','T',1,0,0),(1309,355,'冷湖行委','L',1,0,0),(1310,355,'大柴旦行委','D',1,0,0),(1311,355,'茫崖行委','M',1,0,0),(1312,356,'乌鲁木齐县','W',1,0,0),(1313,357,'沙湾县','S',1,0,0),(1314,358,'和田县','H',1,0,0),(1315,359,'伊宁县','Y',1,0,0),(1316,359,'霍城县','H',1,0,0),(1317,359,'巩留县','G',1,0,0),(1318,359,'新源县','X',1,0,0),(1319,359,'昭苏县','Z',1,0,0),(1320,359,'特克斯县','T',1,0,0),(1321,359,'尼勒克县','N',1,0,0),(1322,360,'轮台县','L',1,0,0),(1323,360,'尉犁县','W',1,0,0),(1324,360,'若羌县','R',1,0,0),(1325,360,'焉耆县','Y',1,0,0),(1326,360,'和静县','H',1,0,0),(1327,360,'和硕县','H',1,0,0),(1328,360,'博湖县','B',1,0,0),(1329,360,'且末县','Q',1,0,0),(1330,361,'玛纳斯县','M',1,0,0),(1331,361,'呼图壁县','H',1,0,0),(1332,361,'昌吉市','C',1,0,0),(1333,361,'阜康市','Z',1,0,0),(1334,361,'吉木萨尔县','J',1,0,0),(1335,361,'奇台县','Q',1,0,0),(1336,361,'木垒县','M',1,0,0),(1337,362,'阿克陶县','A',1,0,0),(1338,362,'阿合奇县','A',1,0,0),(1339,362,'乌恰县','W',1,0,0),(1340,363,'精河县','J',1,0,0),(1341,363,'温泉县','W',1,0,0),(1342,364,'鄯善县','S',1,0,0),(1343,364,'托克逊县','T',1,0,0),(1344,365,'伊吾县','Y',1,0,0),(1345,365,'巴里坤哈萨克自治县','B',1,0,0),(1346,366,'疏附县','S',1,0,0),(1347,366,'疏勒县','S',1,0,0),(1348,366,'英吉沙县','Y',1,0,0),(1349,366,'泽普县','Z',1,0,0),(1350,366,'莎车县','S',1,0,0),(1351,366,'叶城县','Y',1,0,0),(1352,366,'麦盖提县','M',1,0,0),(1353,366,'岳普湖县','Y',1,0,0),(1354,366,'伽师县','J',1,0,0),(1355,366,'巴楚县','B',1,0,0),(1356,366,'塔什库尔干塔吉克自治县','T',1,0,0),(1357,367,'和田县','H',1,0,0),(1358,367,'墨玉县','M',1,0,0),(1359,367,'皮山县','P',1,0,0),(1360,367,'洛浦县','L',1,0,0),(1361,367,'策勒县','C',1,0,0),(1362,367,'于田县','Y',1,0,0),(1363,367,'民丰县','M',1,0,0),(1364,368,'库车县','K',1,0,0),(1365,368,'沙雅县','S',1,0,0),(1366,368,'新和县','X',1,0,0),(1367,368,'拜城县','B',1,0,0),(1368,368,'乌什县','W',1,0,0),(1369,368,'阿瓦提县','A',1,0,0),(1370,368,'柯坪县','K',1,0,0),(1371,369,'中西区','Z',1,0,0),(1372,369,'东区','D',1,0,0),(1373,369,'南区','N',1,0,0),(1374,369,'湾仔区','W',1,0,0),(1375,369,'九龙区','J',1,0,0),(1376,369,'观塘区','G',1,0,0),(1377,369,'深水埗区','S',1,0,0),(1378,369,'黄大仙区','H',1,0,0),(1379,369,'油尖旺区 离岛区','Y',1,0,0),(1380,369,'葵青区','K',1,0,0),(1381,369,'北区','B',1,0,0),(1382,369,'西贡区','X',1,0,0),(1383,369,'沙田区','S',1,0,0),(1384,369,'大埔区','D',1,0,0),(1385,369,'荃湾区','Q',1,0,0),(1386,369,'屯门区','T',1,0,0),(1387,369,'元朗区','Y',1,0,0),(1388,370,'澳门半岛','A',1,0,0),(1389,370,'路环岛','L',1,0,0),(1390,370,'路氹城','L',1,0,0),(1798,1421,'其他','Q',1,0,0),(1799,1,'北京','B',1,0,0),(1800,1799,'东城区','D',1,0,0),(1801,1799,'西城区','X',1,0,0),(1802,1799,'崇文区','C',1,0,0),(1803,1799,'宣武区','X',1,0,0),(1804,1799,'朝阳区','C',1,0,0),(1805,1799,'海淀区','H',1,0,0),(1806,1799,'丰台区','F',1,0,0),(1807,1799,'石景山区','S',1,0,0),(1808,1799,'门头沟区','M',1,0,0),(1809,1799,'房山区','F',1,0,0),(1810,1799,'通州区','T',1,0,0),(1811,1799,'顺义区','S',1,0,0),(1812,1799,'昌平区','C',1,0,0),(1813,1799,'大兴区','D',1,0,0),(1814,1799,'怀柔区','H',1,0,0),(1815,1799,'平谷区','P',1,0,0),(1816,1799,'延庆县','Y',1,0,0),(1817,1799,'密云县','M',1,0,0),(1819,37,'长宁区','C',1,0,0),(1820,37,'普陀区','P',1,0,0),(1821,37,'闸北区','Z',1,0,0),(1822,37,'虹口区','H',1,0,0),(1823,37,'杨浦区','Y',1,0,0),(1824,37,'黄浦区','H',1,0,0),(1825,37,'卢湾区','L',1,0,0),(1826,37,'静安区','J',1,0,0),(1827,37,'宝山区','B',1,0,0),(1828,37,'闵行区','M',1,0,0),(1829,37,'嘉定区','J',1,0,0),(1830,37,'金山区','J',1,0,0),(1831,37,'松江区','S',1,0,0),(1832,37,'青浦区','Q',1,0,0),(1833,37,'奉贤区','F',1,0,0),(1834,37,'南汇区','N',1,0,0),(1835,37,'浦东新区','P',1,0,0),(1836,37,'崇明县','C',1,0,0),(1837,38,'和平区','H',1,0,0),(1838,38,'河北区','H',1,0,0),(1839,38,'河西区','H',1,0,0),(1840,38,'河东区','H',1,0,0),(1841,38,'红桥区','H',1,0,0),(1842,38,'南开区','N',1,0,0),(1843,38,'津南区','J',1,0,0),(1844,38,'西青区','X',1,0,0),(1845,38,'北辰区','B',1,0,0),(1846,38,'东丽区','D',1,0,0),(1847,38,'武清区','W',1,0,0),(1848,38,'宝坻区','B',1,0,0),(1849,38,'大港区','D',1,0,0),(1850,38,'塘沽区','T',1,0,0),(1851,38,'汉沽区','H',1,0,0),(1854,39,'渝中区','Y',1,0,0),(1855,39,'江北区','J',1,0,0),(1856,39,'南岸区','N',1,0,0),(1857,39,'北碚区','B',1,0,0),(1858,39,'万盛区','W',1,0,0),(1859,39,'双桥区','S',1,0,0),(1860,39,'渝北区','Y',1,0,0),(1861,39,'巴南区','B',1,0,0),(1862,39,'黔江区','Q',1,0,0),(1863,39,'长寿区','C',1,0,0),(1864,39,'江津区','J',1,0,0),(1865,39,'合川区','H',1,0,0),(1866,39,'永川区','Y',1,0,0),(1867,39,'南川区','N',1,0,0),(1868,39,'綦江县','Q',1,0,0),(1869,39,'潼南县','T',1,0,0),(1870,39,'铜梁县','T',1,0,0),(1871,39,'大足县','D',1,0,0),(1872,39,'荣昌县','R',1,0,0),(1873,39,'璧山县','B',1,0,0),(1874,39,'梁平县','L',1,0,0),(1875,39,'城口县','C',1,0,0),(1876,39,'丰都县','F',1,0,0),(1877,39,'忠县','Z',1,0,0),(1878,39,'开县','K',1,0,0),(1879,39,'云阳县','Y',1,0,0),(1880,39,'奉节县','F',1,0,0),(1881,39,'巫山县','W',1,0,0),(1882,39,'巫溪县','W',1,0,0),(1883,39,'武隆县','W',1,0,0),(1884,39,'垫江县','D',1,0,0),(1885,39,'沙坪坝区','S',1,0,0),(1886,39,'九龙坡区','J',1,0,0),(1887,39,'大渡口区','D',1,0,0),(1888,39,'石柱土家族自治县','S',1,0,0),(1889,39,'秀山土家族苗族自治县','X',1,0,0),(1890,39,'酉阳土家族苗族自治县','Y',1,0,0),(1891,39,'彭水苗族土家族自治县','P',1,0,0),(1892,1741,'高陵县','A',1,0,0),(1893,1741,'户县','A',1,0,0),(1894,1741,'周至县','A',1,0,0),(1895,1741,'蓝田县','A',1,0,0),(1896,1741,'临潼区','A',1,0,0),(1897,1741,'阎良区','A',1,0,0),(1898,1741,'雁塔区','A',1,0,0),(1899,1741,'灞桥区','A',1,0,0),(1900,1741,'莲湖区','A',1,0,0),(1901,1741,'碑林区','A',1,0,0),(1902,1741,'新城区','A',1,0,0),(1903,1741,'未央区','A',1,0,0),(1904,1741,'长安区','A',1,0,0),(1905,1741,'高新区','A',1,0,0),(1906,1742,'武功县','A',1,0,0),(1907,1742,'淳化县','A',1,0,0),(1908,1742,'旬邑县','A',1,0,0),(1909,1742,'长武县','A',1,0,0),(1910,1742,'彬县','A',1,0,0),(1911,1742,'永寿县','A',1,0,0),(1912,1742,'礼泉县','A',1,0,0),(1913,1742,'乾县','A',1,0,0),(1914,1742,'泾阳县','A',1,0,0),(1915,1742,'三原县','A',1,0,0),(1916,1742,'兴平市','A',1,0,0),(1917,1742,'渭城区','A',1,0,0),(1918,1742,'秦都区','A',1,0,0),(1919,1743,'太白县','A',1,0,0),(1920,1743,'凤县','A',1,0,0),(1921,1743,'麟游县','A',1,0,0),(1922,1743,'千阳县','A',1,0,0),(1923,1743,'陇县','A',1,0,0),(1924,1743,'眉县','A',1,0,0),(1925,1743,'扶风县','A',1,0,0),(1926,1743,'岐山县','A',1,0,0),(1927,1743,'凤翔县','A',1,0,0),(1928,1743,'陈仓区','A',1,0,0),(1929,1743,'金台区','A',1,0,0),(1930,1743,'渭滨区','A',1,0,0),(1931,1744,'富平县','A',1,0,0),(1932,1744,'白水县','A',1,0,0),(1933,1744,'蒲城县','A',1,0,0),(1934,1744,'澄城县','A',1,0,0),(1935,1744,'合阳县','A',1,0,0),(1936,1744,'大荔县','A',1,0,0),(1937,1744,'潼关县','A',1,0,0),(1938,1744,'韩城市','A',1,0,0),(1939,1744,'临渭区','A',1,0,0),(1940,1744,'华阴市','A',1,0,0),(1941,1744,'华县','A',1,0,0),(1942,1747,'黄陵县','A',1,0,0),(1943,1747,'黄龙县','A',1,0,0),(1944,1747,'宜川县','A',1,0,0),(1945,1747,'洛川县','A',1,0,0),(1946,1747,'富县','A',1,0,0),(1947,1747,'甘泉县','A',1,0,0),(1948,1747,'吴起县','A',1,0,0),(1949,1747,'志丹县','A',1,0,0),(1950,1747,'安塞县','A',1,0,0),(1951,1747,'子长县','A',1,0,0),(1952,1747,'延川县','A',1,0,0),(1953,1747,'延长县','A',1,0,0),(1954,1747,'宝塔区','A',1,0,0),(1955,1750,'宜君县','A',1,0,0),(1956,1750,'印台区','A',1,0,0),(1957,1750,'王益区','A',1,0,0),(1958,1750,'耀州区','A',1,0,0),(1959,1745,'佛坪县','A',1,0,0),(1960,1745,'留坝县','A',1,0,0),(1961,1745,'镇巴县','A',1,0,0),(1962,1745,'略阳县','A',1,0,0),(1963,1745,'宁强县','A',1,0,0),(1964,1745,'勉县','A',1,0,0),(1965,1745,'西乡县','A',1,0,0),(1966,1745,'洋县','A',1,0,0),(1967,1745,'城固县','A',1,0,0),(1968,1745,'南郑县','A',1,0,0),(1969,1745,'汉台区','A',1,0,0),(1970,1746,'子洲县','A',1,0,0),(1971,1746,'清涧县','A',1,0,0),(1972,1746,'吴堡县','A',1,0,0),(1973,1746,'佳县','A',1,0,0),(1974,1746,'米脂县','A',1,0,0),(1975,1746,'绥德县','A',1,0,0),(1976,1746,'定边县','A',1,0,0),(1977,1746,'靖边县','A',1,0,0),(1978,1746,'横山县','A',1,0,0),(1979,1746,'府谷县','A',1,0,0),(1980,1746,'神木县','A',1,0,0),(1981,1746,'榆阳区','A',1,0,0),(1982,1748,'白河县','A',1,0,0),(1983,1748,'旬阳县','A',1,0,0),(1984,1748,'镇坪县','A',1,0,0),(1985,1748,'平利县','A',1,0,0),(1986,1748,'岚皋县','A',1,0,0),(1987,1748,'紫阳县','A',1,0,0),(1988,1748,'宁陕县','A',1,0,0),(1989,1748,'石泉县','A',1,0,0),(1990,1748,'汉阴县','A',1,0,0),(1991,1748,'汉滨区','A',1,0,0),(1992,1749,'柞水县','A',1,0,0),(1993,1749,'镇安县','A',1,0,0),(1994,1749,'山阳县','A',1,0,0),(1995,1749,'商南县','A',1,0,0),(1996,1749,'丹凤县','A',1,0,0),(1997,1749,'洛南县','A',1,0,0),(1998,1749,'商州区','A',1,0,0),(1999,1416,'杨凌示范区','Y',1,0,0),(2000,1999,'杨凌示范区','A',1,0,0),(2001,1767,'城关区','A',1,0,0),(2002,1767,'七里河区','A',1,0,0),(2003,1767,'西固区','A',1,0,0),(2004,1767,'安宁区','A',1,0,0),(2005,1767,'红古区','A',1,0,0),(2006,1767,'永登县','A',1,0,0),(2007,1767,'皋兰县','A',1,0,0),(2008,1767,'榆中县','A',1,0,0),(2009,1779,'嘉峪关市','A',1,0,0),(2010,1776,'金川区','A',1,0,0),(2011,1776,'永昌县','A',1,0,0),(2012,1769,'白银区','A',1,0,0),(2013,1769,'平川区','A',1,0,0),(2014,1769,'靖远县','A',1,0,0),(2015,1769,'会宁县','A',1,0,0),(2016,1769,'景泰县','A',1,0,0),(2017,1768,'秦州区','A',1,0,0),(2018,1768,'麦积区','A',1,0,0),(2019,1768,'清水县','A',1,0,0),(2020,1768,'秦安县','A',1,0,0),(2021,1768,'甘谷县','A',1,0,0),(2022,1768,'武山县','A',1,0,0),(2023,1768,'张家川回族自治县','A',1,0,0),(2024,1774,'凉州区','A',1,0,0),(2025,1774,'民勤县','A',1,0,0),(2026,1774,'古浪县','A',1,0,0),(2027,1774,'天祝藏族自治县','A',1,0,0),(2028,1773,'甘州区','A',1,0,0),(2029,1773,'民乐县','A',1,0,0),(2030,1773,'临泽县','A',1,0,0),(2031,1773,'高台县','A',1,0,0),(2032,1773,'山丹县','A',1,0,0),(2033,1773,'肃南裕固族自治县','A',1,0,0),(2034,1771,'崆峒区','A',1,0,0),(2035,1771,'泾川县','A',1,0,0),(2036,1771,'灵台县','A',1,0,0),(2037,1771,'崇信县','A',1,0,0),(2038,1771,'华亭县','A',1,0,0),(2039,1771,'庄浪县','A',1,0,0),(2040,1771,'静宁县','A',1,0,0),(2041,1772,'肃州区','A',1,0,0),(2042,1772,'玉门市','A',1,0,0),(2043,1772,'敦煌市','A',1,0,0),(2044,1772,'金塔县','A',1,0,0),(2045,1772,'瓜州县','A',1,0,0),(2046,1772,'肃北蒙古族自治县','A',1,0,0),(2047,1772,'阿克塞哈萨克族自治县','A',1,0,0),(2048,1770,'西峰区','A',1,0,0),(2049,1770,'庆城县','A',1,0,0),(2050,1770,'环县','A',1,0,0),(2051,1770,'华池县','A',1,0,0),(2052,1770,'合水县','A',1,0,0),(2053,1770,'正宁县','A',1,0,0),(2054,1770,'宁县','A',1,0,0),(2055,1770,'镇原县','A',1,0,0),(2056,1775,'安定区','A',1,0,0),(2057,1775,'通渭县','A',1,0,0),(2058,1775,'陇西县','A',1,0,0),(2059,1775,'渭源县','A',1,0,0),(2060,1775,'临洮县','A',1,0,0),(2061,1775,'漳县','A',1,0,0),(2062,1775,'岷县','A',1,0,0),(2063,1777,'武都区','A',1,0,0),(2064,1777,'成县','A',1,0,0),(2065,1777,'文县','A',1,0,0),(2066,1777,'宕昌县','A',1,0,0),(2067,1777,'康县','A',1,0,0),(2068,1777,'西和县','A',1,0,0),(2069,1777,'礼县','A',1,0,0),(2070,1777,'徽县','A',1,0,0),(2071,1777,'两当县','A',1,0,0),(2072,1780,'合作市','A',1,0,0),(2073,1780,'临潭县','A',1,0,0),(2074,1780,'卓尼县','A',1,0,0),(2075,1780,'舟曲县','A',1,0,0),(2076,1780,'迭部县','A',1,0,0),(2077,1780,'玛曲县','A',1,0,0),(2078,1780,'碌曲县','A',1,0,0),(2079,1780,'夏河县','A',1,0,0),(2080,1778,'临夏市','A',1,0,0),(2081,1778,'临夏县','A',1,0,0),(2082,1778,'康乐县','A',1,0,0),(2083,1778,'永靖县','A',1,0,0),(2084,1778,'广河县','A',1,0,0),(2085,1778,'和政县','A',1,0,0),(2086,1778,'东乡族自治县','A',1,0,0),(2087,1778,'积石山保安族东乡族撒拉族自治县','A',1,0,0),(2088,1646,'锦江区','A',1,0,0),(2089,1646,'青羊区','A',1,0,0),(2090,1646,'金牛区','A',1,0,0),(2091,1646,'武侯区','A',1,0,0),(2092,1646,'成华区','A',1,0,0),(2093,1646,'龙泉驿区','A',1,0,0),(2094,1646,'青白江区','A',1,0,0),(2095,1646,'新都区','A',1,0,0),(2096,1646,'温江区','A',1,0,0),(2097,1646,'都江堰市','A',1,0,0),(2098,1646,'彭州市','A',1,0,0),(2099,1646,'崇州市','A',1,0,0),(2100,1646,'邛崃市','A',1,0,0),(2101,1646,'金堂县','A',1,0,0),(2102,1646,'双流县','A',1,0,0),(2103,1646,'郫县','A',1,0,0),(2104,1646,'大邑县','A',1,0,0),(2105,1646,'蒲江县','A',1,0,0),(2106,1646,'新津县','A',1,0,0),(2107,1651,'自流井区','A',1,0,0),(2108,1651,'贡井区','A',1,0,0),(2109,1651,'大安区','A',1,0,0),(2110,1651,'沿滩区','A',1,0,0),(2111,1651,'荣县','A',1,0,0),(2112,1651,'富顺县','A',1,0,0),(2113,1657,'东区','A',1,0,0),(2114,1657,'西区','A',1,0,0),(2115,1657,'仁和区','A',1,0,0),(2116,1657,'米易县','A',1,0,0),(2117,1657,'盐边县','A',1,0,0),(2118,1653,'江阳区','A',1,0,0),(2119,1653,'纳溪区','A',1,0,0),(2120,1653,'龙马潭区','A',1,0,0),(2121,1653,'泸县','A',1,0,0),(2122,1653,'合江县','A',1,0,0),(2123,1653,'叙永县','A',1,0,0),(2124,1653,'古蔺县','A',1,0,0),(2125,1648,'旌阳区','A',1,0,0),(2126,1648,'广汉市','A',1,0,0),(2127,1648,'什邡市','A',1,0,0),(2128,1648,'绵竹市','A',1,0,0),(2129,1648,'罗江县','A',1,0,0),(2130,1648,'中江县','A',1,0,0),(2131,1647,'涪城区','A',1,0,0),(2132,1647,'游仙区','A',1,0,0),(2133,1647,'江油市','A',1,0,0),(2134,1647,'三台县','A',1,0,0),(2135,1647,'盐亭县','A',1,0,0),(2136,1647,'安县','A',1,0,0),(2137,1647,'梓潼县','A',1,0,0),(2138,1647,'平武县','A',1,0,0),(2139,1647,'北川羌族自治县','A',1,0,0),(2140,1662,'利州区','A',1,0,0),(2141,1662,'元坝区','A',1,0,0),(2142,1662,'朝天区','A',1,0,0),(2143,1662,'旺苍县','A',1,0,0),(2144,1662,'青川县','A',1,0,0),(2145,1662,'剑阁县','A',1,0,0),(2146,1662,'苍溪县','A',1,0,0),(2147,1656,'船山区','A',1,0,0),(2148,1656,'安居区','A',1,0,0),(2149,1656,'蓬溪县','A',1,0,0),(2150,1656,'射洪县','A',1,0,0),(2151,1656,'大英县','A',1,0,0),(2152,1655,'市中区','A',1,0,0),(2153,1655,'东兴区','A',1,0,0),(2154,1655,'威远县','A',1,0,0),(2155,1655,'资中县','A',1,0,0),(2156,1655,'隆昌县','A',1,0,0),(2157,1652,'市中区','A',1,0,0),(2158,1652,'沙湾区','A',1,0,0),(2159,1652,'五通桥区','A',1,0,0),(2160,1652,'金口河区','A',1,0,0),(2161,1652,'峨眉山市','A',1,0,0),(2162,1652,'犍为县','A',1,0,0),(2163,1652,'井研县','A',1,0,0),(2164,1652,'夹江县','A',1,0,0),(2165,1652,'沐川县','A',1,0,0),(2166,1652,'峨边彝族自治县','A',1,0,0),(2167,1652,'马边彝族自治县','A',1,0,0),(2168,1649,'顺庆区','A',1,0,0),(2169,1649,'高坪区','A',1,0,0),(2170,1649,'嘉陵区','A',1,0,0),(2171,1649,'阆中市','A',1,0,0),(2172,1649,'南部县','A',1,0,0),(2173,1649,'营山县','A',1,0,0),(2174,1649,'蓬安县','A',1,0,0),(2175,1649,'仪陇县','A',1,0,0),(2176,1649,'西充县','A',1,0,0),(2177,1650,'翠屏区','A',1,0,0),(2178,1650,'宜宾县','A',1,0,0),(2179,1650,'南溪县','A',1,0,0),(2180,1650,'江安县','A',1,0,0),(2181,1650,'长宁县','A',1,0,0),(2182,1650,'高县','A',1,0,0),(2183,1650,'珙县','A',1,0,0),(2184,1650,'筠连县','A',1,0,0),(2185,1650,'兴文县','A',1,0,0),(2186,1650,'屏山县','A',1,0,0),(2187,1659,'广安区','A',1,0,0),(2188,1659,'华蓥市','A',1,0,0),(2189,1659,'岳池县','A',1,0,0),(2190,1659,'武胜县','A',1,0,0),(2191,1659,'邻水县','A',1,0,0),(2192,1654,'通川区','A',1,0,0),(2193,1654,'万源市','A',1,0,0),(2194,1654,'达县','A',1,0,0),(2195,1654,'宣汉县','A',1,0,0),(2196,1654,'开江县','A',1,0,0),(2197,1654,'大竹县','A',1,0,0),(2198,1654,'渠县','A',1,0,0),(2199,1658,'东坡区','A',1,0,0),(2200,1658,'仁寿县','A',1,0,0),(2201,1658,'彭山县','A',1,0,0),(2202,1658,'洪雅县','A',1,0,0),(2203,1658,'丹棱县','A',1,0,0),(2204,1658,'青神县','A',1,0,0),(2205,1663,'雨城区','A',1,0,0),(2206,1663,'名山县','A',1,0,0),(2207,1663,'荥经县','A',1,0,0),(2208,1663,'汉源县','A',1,0,0),(2209,1663,'石棉县','A',1,0,0),(2210,1663,'天全县','A',1,0,0),(2211,1663,'芦山县','A',1,0,0),(2212,1663,'宝兴县','A',1,0,0),(2213,1664,'巴州区','A',1,0,0),(2214,1664,'通江县','A',1,0,0),(2215,1664,'南江县','A',1,0,0),(2216,1664,'平昌县','A',1,0,0),(2217,1660,'雁江区','A',1,0,0),(2218,1660,'简阳市','A',1,0,0),(2219,1660,'安岳县','A',1,0,0),(2220,1660,'乐至县','A',1,0,0),(2221,1665,'马尔康县','A',1,0,0),(2222,1665,'汶川县','A',1,0,0),(2223,1665,'理县','A',1,0,0),(2224,1665,'茂县','A',1,0,0),(2225,1665,'松潘县','A',1,0,0),(2226,1665,'九寨沟县','A',1,0,0),(2227,1665,'金川县','A',1,0,0),(2228,1665,'小金县','A',1,0,0),(2229,1665,'黑水县','A',1,0,0),(2230,1665,'壤塘县','A',1,0,0),(2231,1665,'阿坝县','A',1,0,0),(2232,1665,'若尔盖县','A',1,0,0),(2233,1665,'红原县','A',1,0,0),(2234,1666,'康定县','A',1,0,0),(2235,1666,'泸定县','A',1,0,0),(2236,1666,'丹巴县','A',1,0,0),(2237,1666,'九龙县','A',1,0,0),(2238,1666,'雅江县','A',1,0,0),(2239,1666,'道孚县','A',1,0,0),(2240,1666,'炉霍县','A',1,0,0),(2241,1666,'甘孜县','A',1,0,0),(2242,1666,'新龙县','A',1,0,0),(2243,1666,'德格县','A',1,0,0),(2244,1666,'白玉县','A',1,0,0),(2245,1666,'石渠县','A',1,0,0),(2246,1666,'色达县','A',1,0,0),(2247,1666,'理塘县','A',1,0,0),(2248,1666,'巴塘县','A',1,0,0),(2249,1666,'乡城县','A',1,0,0),(2250,1666,'稻城县','A',1,0,0),(2251,1666,'得荣县','A',1,0,0),(2252,1661,'西昌市','A',1,0,0),(2253,1661,'盐源县','A',1,0,0),(2254,1661,'德昌县','A',1,0,0),(2255,1661,'会理县','A',1,0,0),(2256,1661,'会东县','A',1,0,0),(2257,1661,'宁南县','A',1,0,0),(2258,1661,'普格县','A',1,0,0),(2259,1661,'布拖县','A',1,0,0),(2260,1661,'金阳县','A',1,0,0),(2261,1661,'昭觉县','A',1,0,0),(2262,1661,'喜德县','A',1,0,0),(2263,1661,'冕宁县','A',1,0,0),(2264,1661,'越西县','A',1,0,0),(2265,1661,'甘洛县','A',1,0,0),(2266,1661,'美姑县','A',1,0,0),(2267,1661,'雷波县','A',1,0,0),(2268,1661,'木里自治县','A',1,0,0),(2269,1715,'杏花岭区','A',1,0,0),(2270,1715,'小店区','A',1,0,0),(2271,1715,'迎泽区','A',1,0,0),(2272,1715,'尖草坪区','A',1,0,0),(2273,1715,'万柏林区','A',1,0,0),(2274,1715,'晋源区','A',1,0,0),(2275,1715,'古交市','A',1,0,0),(2276,1715,'阳曲县','A',1,0,0),(2277,1715,'清徐县','A',1,0,0),(2278,1715,'娄烦县','A',1,0,0),(2279,1717,'城区','A',1,0,0),(2280,1717,'矿区','A',1,0,0),(2281,1717,'南郊区','A',1,0,0),(2282,1717,'新荣区','A',1,0,0),(2283,1717,'大同县','A',1,0,0),(2284,1717,'天镇县','A',1,0,0),(2285,1717,'灵丘县','A',1,0,0),(2286,1717,'阳高县','A',1,0,0),(2287,1717,'左云县','A',1,0,0),(2288,1717,'广灵县','A',1,0,0),(2289,1717,'浑源县','A',1,0,0),(2290,1722,'城区','A',1,0,0),(2291,1722,'矿区','A',1,0,0),(2292,1722,'郊区','A',1,0,0),(2293,1722,'平定县','A',1,0,0),(2294,1722,'盂县','A',1,0,0),(2295,1720,'城区','A',1,0,0),(2296,1720,'郊区','A',1,0,0),(2297,1720,'潞城市','A',1,0,0),(2298,1720,'长治县','A',1,0,0),(2299,1720,'长子县','A',1,0,0),(2300,1720,'平顺县','A',1,0,0),(2301,1720,'襄垣县','A',1,0,0),(2302,1720,'沁源县','A',1,0,0),(2303,1720,'屯留县','A',1,0,0),(2304,1720,'黎城县','A',1,0,0),(2305,1720,'武乡县','A',1,0,0),(2306,1720,'沁县','A',1,0,0),(2307,1720,'壶关县','A',1,0,0),(2308,1721,'城区','A',1,0,0),(2309,1721,'高平市','A',1,0,0),(2310,1721,'泽州县','A',1,0,0),(2311,1721,'陵川县','A',1,0,0),(2312,1721,'阳城县','A',1,0,0),(2313,1721,'沁水县','A',1,0,0),(2314,1725,'朔城区','A',1,0,0),(2315,1725,'平鲁区','A',1,0,0),(2316,1725,'山阴县','A',1,0,0),(2317,1725,'右玉县','A',1,0,0),(2318,1725,'应县','A',1,0,0),(2319,1725,'怀仁县','A',1,0,0),(2320,1719,'榆次区','A',1,0,0),(2321,1719,'介休市','A',1,0,0),(2322,1719,'昔阳县','A',1,0,0),(2323,1719,'灵石县','A',1,0,0),(2324,1719,'祁县','A',1,0,0),(2325,1719,'左权县','A',1,0,0),(2326,1719,'寿阳县','A',1,0,0),(2327,1719,'太谷县','A',1,0,0),(2328,1719,'和顺县','A',1,0,0),(2329,1719,'平遥县','A',1,0,0),(2330,1719,'榆社县','A',1,0,0),(2331,1718,'盐湖区','A',1,0,0),(2332,1718,'河津市','A',1,0,0),(2333,1718,'永济市','A',1,0,0),(2334,1718,'闻喜县','A',1,0,0),(2335,1718,'新绛县','A',1,0,0),(2336,1718,'平陆县','A',1,0,0),(2337,1718,'垣曲县','A',1,0,0),(2338,1718,'绛县','A',1,0,0),(2339,1718,'稷山县','A',1,0,0),(2340,1718,'芮城县','A',1,0,0),(2341,1718,'夏县','A',1,0,0),(2342,1718,'万荣县','A',1,0,0),(2343,1718,'临猗县','A',1,0,0),(2344,1724,'忻府区','A',1,0,0),(2345,1724,'原平市','A',1,0,0),(2346,1724,'代县','A',1,0,0),(2347,1724,'神池县','A',1,0,0),(2348,1724,'五寨县','A',1,0,0),(2349,1724,'五台县','A',1,0,0),(2350,1724,'偏关县','A',1,0,0),(2351,1724,'宁武县','A',1,0,0),(2352,1724,'静乐县','A',1,0,0),(2353,1724,'繁峙县','A',1,0,0),(2354,1724,'河曲县','A',1,0,0),(2355,1724,'保德县','A',1,0,0),(2356,1724,'定襄县','A',1,0,0),(2357,1724,'岢岚县','A',1,0,0),(2358,1716,'尧都区','A',1,0,0),(2359,1716,'侯马市','A',1,0,0),(2360,1716,'霍州市','A',1,0,0),(2361,1716,'汾西县','A',1,0,0),(2362,1716,'吉县','A',1,0,0),(2363,1716,'安泽县','A',1,0,0),(2364,1716,'大宁县','A',1,0,0),(2365,1716,'浮山县','A',1,0,0),(2366,1716,'古县','A',1,0,0),(2367,1716,'隰县','A',1,0,0),(2368,1716,'襄汾县','A',1,0,0),(2369,1716,'翼城县','A',1,0,0),(2370,1716,'永和县','A',1,0,0),(2371,1716,'乡宁县','A',1,0,0),(2372,1716,'曲沃县','A',1,0,0),(2373,1716,'洪洞县','A',1,0,0),(2374,1716,'蒲县','A',1,0,0),(2375,1723,'离石区','A',1,0,0),(2376,1723,'孝义市','A',1,0,0),(2377,1723,'汾阳市','A',1,0,0),(2378,1723,'文水县','A',1,0,0),(2379,1723,'中阳县','A',1,0,0),(2380,1723,'兴县','A',1,0,0),(2381,1723,'临县','A',1,0,0),(2382,1723,'方山县','A',1,0,0),(2383,1723,'柳林县','A',1,0,0),(2384,1723,'岚县','A',1,0,0),(2385,1723,'交口县','A',1,0,0),(2386,1723,'交城县','A',1,0,0),(2387,1723,'石楼县','A',1,0,0),(2388,1543,'中原区','A',1,0,0),(2389,1543,'二七区','A',1,0,0),(2390,1543,'管城区','A',1,0,0),(2391,1543,'金水区','A',1,0,0),(2392,1543,'上街区','A',1,0,0),(2393,1543,'惠济区','A',1,0,0),(2394,1543,'巩义市','A',1,0,0),(2395,1543,'荥阳市','A',1,0,0),(2396,1543,'新密市','A',1,0,0),(2397,1543,'新郑市','A',1,0,0),(2398,1543,'登封市','A',1,0,0),(2399,1543,'中牟县','A',1,0,0),(2400,1552,'鼓楼区','A',1,0,0),(2401,1552,'龙亭区','A',1,0,0),(2402,1552,'顺河区','A',1,0,0),(2403,1552,'禹王台区','A',1,0,0),(2404,1552,'金明区','A',1,0,0),(2405,1552,'杞县','A',1,0,0),(2406,1552,'通许县','A',1,0,0),(2407,1552,'尉氏县','A',1,0,0),(2408,1552,'开封县','A',1,0,0),(2409,1552,'兰考县','A',1,0,0),(2410,1544,'西工区','A',1,0,0),(2411,1544,'老城区','A',1,0,0),(2412,1544,'瀍河区','A',1,0,0),(2413,1544,'涧西区','A',1,0,0),(2414,1544,'吉利区','A',1,0,0),(2415,1544,'洛龙区','A',1,0,0),(2416,1544,'偃师市','A',1,0,0),(2417,1544,'孟津县','A',1,0,0),(2418,1544,'新安县','A',1,0,0),(2419,1544,'栾川县','A',1,0,0),(2420,1544,'嵩县','A',1,0,0),(2421,1544,'汝阳县','A',1,0,0),(2422,1544,'宜阳县','A',1,0,0),(2423,1544,'洛宁县','A',1,0,0),(2424,1544,'伊川县','A',1,0,0),(2425,1548,'新华区','A',1,0,0),(2426,1548,'卫东区','A',1,0,0),(2427,1548,'湛河区','A',1,0,0),(2428,1548,'石龙区','A',1,0,0),(2429,1548,'舞钢市','A',1,0,0),(2430,1548,'汝州市','A',1,0,0),(2431,1548,'宝丰县','A',1,0,0),(2432,1548,'叶县','A',1,0,0),(2433,1548,'鲁山县','A',1,0,0),(2434,1548,'郏县','A',1,0,0),(2435,1550,'山阳区','A',1,0,0),(2436,1550,'解放区','A',1,0,0),(2437,1550,'中站区','A',1,0,0),(2438,1550,'马村区','A',1,0,0),(2439,1550,'沁阳市','A',1,0,0),(2440,1550,'孟州市','A',1,0,0),(2441,1550,'修武县','A',1,0,0),(2442,1550,'博爱县','A',1,0,0),(2443,1550,'武陟县','A',1,0,0),(2444,1550,'温县','A',1,0,0),(2445,1559,'淇滨区','A',1,0,0),(2446,1559,'山城区','A',1,0,0),(2447,1559,'鹤山区','A',1,0,0),(2448,1559,'浚县','A',1,0,0),(2449,1559,'淇县','A',1,0,0),(2450,1545,'卫滨区','A',1,0,0),(2451,1545,'红旗区','A',1,0,0),(2452,1545,'凤泉区','A',1,0,0),(2453,1545,'牧野区','A',1,0,0),(2454,1545,'卫辉市','A',1,0,0),(2455,1545,'辉县市','A',1,0,0),(2456,1545,'新乡县','A',1,0,0),(2457,1545,'获嘉县','A',1,0,0),(2458,1545,'原阳县','A',1,0,0),(2459,1545,'延津县','A',1,0,0),(2460,1545,'封丘县','A',1,0,0),(2461,1545,'长垣县','A',1,0,0),(2462,1549,'北关区','A',1,0,0),(2463,1549,'文峰区','A',1,0,0),(2464,1549,'殷都区','A',1,0,0),(2465,1549,'龙安区','A',1,0,0),(2466,1549,'林州市','A',1,0,0),(2467,1549,'安阳县','A',1,0,0),(2468,1549,'汤阴县','A',1,0,0),(2469,1549,'滑县','A',1,0,0),(2470,1549,'内黄县','A',1,0,0),(2471,1553,'华龙区','A',1,0,0),(2472,1553,'清丰县','A',1,0,0),(2473,1553,'南乐县','A',1,0,0),(2474,1553,'范县','A',1,0,0),(2475,1553,'台前县','A',1,0,0),(2476,1553,'濮阳县','A',1,0,0),(2477,1547,'魏都区','A',1,0,0),(2478,1547,'禹州市','A',1,0,0),(2479,1547,'长葛市','A',1,0,0),(2480,1547,'许昌县','A',1,0,0),(2481,1547,'鄢陵县','A',1,0,0),(2482,1547,'襄城县','A',1,0,0),(2483,1557,'源汇区','A',1,0,0),(2484,1557,'郾城区','A',1,0,0),(2485,1557,'召陵区','A',1,0,0),(2486,1557,'舞阳县','A',1,0,0),(2487,1557,'临颍县','A',1,0,0),(2488,1558,'湖滨区','A',1,0,0),(2489,1558,'义马市','A',1,0,0),(2490,1558,'灵宝市','A',1,0,0),(2491,1558,'渑池县','A',1,0,0),(2492,1558,'陕县','A',1,0,0),(2493,1558,'卢氏县','A',1,0,0),(2494,1546,'卧龙区','A',1,0,0),(2495,1546,'宛城区','A',1,0,0),(2496,1546,'邓州市','A',1,0,0),(2497,1546,'南召县','A',1,0,0),(2498,1546,'方城县','A',1,0,0),(2499,1546,'西峡县','A',1,0,0),(2500,1546,'镇平县','A',1,0,0),(2501,1546,'内乡县','A',1,0,0),(2502,1546,'淅川县','A',1,0,0),(2503,1546,'社旗县','A',1,0,0),(2504,1546,'唐河县','A',1,0,0),(2505,1546,'新野县','A',1,0,0),(2506,1546,'桐柏县','A',1,0,0),(2507,1551,'梁园区','A',1,0,0),(2508,1551,'睢阳区','A',1,0,0),(2509,1551,'永城市','A',1,0,0),(2510,1551,'民权县','A',1,0,0),(2511,1551,'睢县','A',1,0,0),(2512,1551,'宁陵县','A',1,0,0),(2513,1551,'柘城县','A',1,0,0),(2514,1551,'虞城县','A',1,0,0),(2515,1551,'夏邑县','A',1,0,0),(2516,1555,'浉河区','A',1,0,0),(2517,1555,'平桥区','A',1,0,0),(2518,1555,'罗山县','A',1,0,0),(2519,1555,'光山县','A',1,0,0),(2520,1555,'新县','A',1,0,0),(2521,1555,'商城县','A',1,0,0),(2522,1555,'固始县','A',1,0,0),(2523,1555,'潢川县','A',1,0,0),(2524,1555,'淮滨县','A',1,0,0),(2525,1555,'息县','A',1,0,0),(2526,1554,'川汇区','A',1,0,0),(2527,1554,'项城市','A',1,0,0),(2528,1554,'扶沟县','A',1,0,0),(2529,1554,'西华县','A',1,0,0),(2530,1554,'商水县','A',1,0,0),(2531,1554,'沈丘县','A',1,0,0),(2532,1554,'郸城县','A',1,0,0),(2533,1554,'淮阳县','A',1,0,0),(2534,1554,'太康县','A',1,0,0),(2535,1554,'鹿邑县','A',1,0,0),(2536,1556,'驿城区','A',1,0,0),(2537,1556,'西平县','A',1,0,0),(2538,1556,'上蔡县','A',1,0,0),(2539,1556,'平舆县','A',1,0,0),(2540,1556,'正阳县','A',1,0,0),(2541,1556,'确山县','A',1,0,0),(2542,1556,'泌阳县','A',1,0,0),(2543,1556,'汝南县','A',1,0,0),(2544,1556,'遂平县','A',1,0,0),(2545,1556,'新蔡县','A',1,0,0),(2546,1560,'济源','A',1,0,0),(2547,1565,'江岸区','A',1,0,0),(2548,1565,'江汉区','A',1,0,0),(2549,1565,'硚口区','A',1,0,0),(2550,1565,'汉阳区','A',1,0,0),(2551,1565,'武昌区','A',1,0,0),(2552,1565,'青山区','A',1,0,0),(2553,1565,'洪山区','A',1,0,0),(2554,1565,'东西湖区','A',1,0,0),(2555,1565,'汉南区','A',1,0,0),(2556,1565,'蔡甸区','A',1,0,0),(2557,1565,'江夏区','A',1,0,0),(2558,1565,'黄陂区','A',1,0,0),(2559,1565,'新洲区','A',1,0,0),(2560,1570,'黄石港区','A',1,0,0),(2561,1570,'西塞山区','A',1,0,0),(2562,1570,'下陆区','A',1,0,0),(2563,1570,'铁山区','A',1,0,0),(2564,1570,'大冶市','A',1,0,0),(2565,1570,'阳新县','A',1,0,0),(2566,1567,'襄城区','A',1,0,0),(2567,1567,'樊城区','A',1,0,0),(2568,1567,'襄阳区','A',1,0,0),(2569,1567,'老河口市','A',1,0,0),(2570,1567,'枣阳市','A',1,0,0),(2571,1567,'宜城市','A',1,0,0),(2572,1567,'南漳县','A',1,0,0),(2573,1567,'谷城县','A',1,0,0),(2574,1567,'保康县','A',1,0,0),(2575,1569,'茅箭区','A',1,0,0),(2576,1569,'张湾区','A',1,0,0),(2577,1569,'丹江口市','A',1,0,0),(2578,1569,'郧县','A',1,0,0),(2579,1569,'郧西县','A',1,0,0),(2580,1569,'竹山县','A',1,0,0),(2581,1569,'竹溪县','A',1,0,0),(2582,1569,'房县','A',1,0,0),(2583,1568,'沙市区','A',1,0,0),(2584,1568,'荆州区','A',1,0,0),(2585,1568,'石首市','A',1,0,0),(2586,1568,'洪湖市','A',1,0,0),(2587,1568,'松滋市','A',1,0,0),(2588,1568,'公安县','A',1,0,0),(2589,1568,'监利县','A',1,0,0),(2590,1568,'江陵县','A',1,0,0),(2591,1566,'西陵区','A',1,0,0),(2592,1566,'伍家岗区','A',1,0,0),(2593,1566,'点军区','A',1,0,0),(2594,1566,'猇亭区','A',1,0,0),(2595,1566,'夷陵区','A',1,0,0),(2596,1566,'宜都市','A',1,0,0),(2597,1566,'当阳市','A',1,0,0),(2598,1566,'枝江市','A',1,0,0),(2599,1566,'远安县','A',1,0,0),(2600,1566,'兴山县','A',1,0,0),(2601,1566,'秭归县','A',1,0,0),(2602,1566,'长阳土家族自治县','A',1,0,0),(2603,1566,'五峰土家族自治县','A',1,0,0),(2604,1574,'东宝区','A',1,0,0),(2605,1574,'掇刀区','A',1,0,0),(2606,1574,'钟祥市','A',1,0,0),(2607,1574,'京山县','A',1,0,0),(2608,1574,'沙洋县','A',1,0,0),(2609,1576,'鄂城区','A',1,0,0),(2610,1576,'梁子湖区','A',1,0,0),(2611,1576,'华容区','A',1,0,0),(2612,1571,'孝南区','A',1,0,0),(2613,1571,'应城市','A',1,0,0),(2614,1571,'安陆市','A',1,0,0),(2615,1571,'汉川市','A',1,0,0),(2616,1571,'孝昌县','A',1,0,0),(2617,1571,'大悟县','A',1,0,0),(2618,1571,'云梦县','A',1,0,0),(2619,1572,'黄州区','A',1,0,0),(2620,1572,'麻城市','A',1,0,0),(2621,1572,'武穴市','A',1,0,0),(2622,1572,'团风县','A',1,0,0),(2623,1572,'红安县','A',1,0,0),(2624,1572,'罗田县','A',1,0,0),(2625,1572,'英山县','A',1,0,0),(2626,1572,'浠水县','A',1,0,0),(2627,1572,'蕲春县','A',1,0,0),(2628,1572,'黄梅县','A',1,0,0),(2629,1575,'咸安区','A',1,0,0),(2630,1575,'赤壁市','A',1,0,0),(2631,1575,'嘉鱼县','A',1,0,0),(2632,1575,'通城县','A',1,0,0),(2633,1575,'崇阳县','A',1,0,0),(2634,1575,'通山县','A',1,0,0),(2635,1581,'神农架','A',1,0,0),(2636,1573,'恩施市','A',1,0,0),(2637,1573,'利川市','A',1,0,0),(2638,1573,'建始县','A',1,0,0),(2639,1573,'巴东县','A',1,0,0),(2640,1573,'宣恩县','A',1,0,0),(2641,1573,'咸丰县','A',1,0,0),(2642,1573,'来凤县','A',1,0,0),(2643,1573,'鹤峰县','A',1,0,0),(2644,1577,'曾都区','A',1,0,0),(2645,1577,'广水市','A',1,0,0),(2646,1578,'潜江','A',1,0,0),(2647,1579,'天门','A',1,0,0),(2648,1580,'仙桃','A',1,0,0),(2649,1729,'昆都仑区','A',1,0,0),(2650,1729,'东河区','A',1,0,0),(2651,1729,'青山区','A',1,0,0),(2652,1729,'石拐区','A',1,0,0),(2653,1729,'白云矿区','A',1,0,0),(2654,1729,'九原区','A',1,0,0),(2655,1729,'固阳县','A',1,0,0),(2656,1729,'达尔罕茂明安联合旗','A',1,0,0),(2657,1729,'土默特右旗','A',1,0,0),(2658,1730,'红山区','A',1,0,0),(2659,1730,'元宝山区','A',1,0,0),(2660,1730,'松山区','A',1,0,0),(2661,1730,'林西县','A',1,0,0),(2662,1730,'宁城县','A',1,0,0),(2663,1730,'巴林左旗','A',1,0,0),(2664,1730,'巴林右旗','A',1,0,0),(2665,1730,'克什克腾旗','A',1,0,0),(2666,1730,'翁牛特旗','A',1,0,0),(2667,1730,'喀喇沁旗','A',1,0,0),(2668,1730,'敖汉旗','A',1,0,0),(2669,1730,'阿鲁科尔沁旗','A',1,0,0),(2670,1731,'东胜区','A',1,0,0),(2671,1731,'达拉特旗','A',1,0,0),(2672,1731,'准格尔旗','A',1,0,0),(2673,1731,'鄂托克旗','A',1,0,0),(2674,1731,'杭锦旗','A',1,0,0),(2675,1731,'乌审旗','A',1,0,0),(2676,1731,'伊金霍洛旗','A',1,0,0),(2677,1731,'鄂托克前旗','A',1,0,0),(2678,1732,'科尔沁区','A',1,0,0),(2679,1732,'霍林郭勒市','A',1,0,0),(2680,1732,'开鲁县','A',1,0,0),(2681,1732,'库伦旗','A',1,0,0),(2682,1732,'奈曼旗','A',1,0,0),(2683,1732,'扎鲁特旗','A',1,0,0),(2684,1732,'科尔沁左翼中旗','A',1,0,0),(2685,1732,'科尔沁左翼后旗','A',1,0,0),(2686,1733,'海拉尔区','A',1,0,0),(2687,1733,'满洲里市','A',1,0,0),(2688,1733,'牙克石市','A',1,0,0),(2689,1733,'扎兰屯市','A',1,0,0),(2690,1733,'额尔古纳市','A',1,0,0),(2691,1733,'根河市','A',1,0,0),(2692,1733,'阿荣旗','A',1,0,0),(2693,1733,'陈巴尔虎旗','A',1,0,0),(2694,1733,'新巴尔虎左旗','A',1,0,0),(2695,1733,'新巴尔虎右旗','A',1,0,0),(2696,1733,'莫力达瓦达斡尔族自治旗','A',1,0,0),(2697,1733,'鄂伦春自治旗','A',1,0,0),(2698,1733,'鄂温克族自治旗','A',1,0,0),(2699,1734,'临河区','A',1,0,0),(2700,1734,'五原县','A',1,0,0),(2701,1734,'磴口县','A',1,0,0),(2702,1734,'乌拉特前旗','A',1,0,0),(2703,1734,'乌拉特中旗','A',1,0,0),(2704,1734,'乌拉特后旗','A',1,0,0),(2705,1734,'杭锦后旗','A',1,0,0),(2706,1735,'集宁区','A',1,0,0),(2707,1735,'丰镇市','A',1,0,0),(2708,1735,'卓资县','A',1,0,0),(2709,1735,'化德县','A',1,0,0),(2710,1735,'商都县','A',1,0,0),(2711,1735,'兴和县','A',1,0,0),(2712,1735,'凉城县','A',1,0,0),(2713,1735,'察哈尔右翼前旗','A',1,0,0),(2714,1735,'察哈尔右翼中旗','A',1,0,0),(2715,1735,'察哈尔右翼后旗','A',1,0,0),(2716,1735,'四子王旗','A',1,0,0),(2717,1736,'二连浩特市','A',1,0,0),(2718,1736,'锡林浩特市','A',1,0,0),(2719,1736,'多伦县','A',1,0,0),(2720,1736,'阿巴嘎旗','A',1,0,0),(2721,1736,'苏尼特左旗','A',1,0,0),(2722,1736,'苏尼特右旗','A',1,0,0),(2723,1736,'东乌珠穆沁旗','A',1,0,0),(2724,1736,'西乌珠穆沁旗','A',1,0,0),(2725,1736,'太仆寺旗','A',1,0,0),(2726,1736,'镶黄旗','A',1,0,0),(2727,1736,'正镶白旗','A',1,0,0),(2728,1736,'正蓝旗','A',1,0,0),(2729,1737,'乌兰浩特市','A',1,0,0),(2730,1737,'阿尔山市','A',1,0,0),(2731,1737,'突泉县','A',1,0,0),(2732,1737,'科尔沁右翼前旗','A',1,0,0),(2733,1737,'科尔沁右翼中旗','A',1,0,0),(2734,1737,'扎赉特旗','A',1,0,0),(2735,1738,'海勃湾区','A',1,0,0),(2736,1738,'海南区','A',1,0,0),(2737,1738,'乌达区','A',1,0,0),(2738,1739,'阿拉善左旗','A',1,0,0),(2739,1739,'阿拉善右旗','A',1,0,0),(2740,1739,'额济纳旗','A',1,0,0),(2741,1728,'回民区','A',1,0,0),(2742,1728,'新城区','A',1,0,0),(2743,1728,'玉泉区','A',1,0,0),(2744,1728,'赛罕区','A',1,0,0),(2745,1728,'托克托县','A',1,0,0),(2746,1728,'武川县','A',1,0,0),(2747,1728,'清水河县','A',1,0,0),(2748,1728,'土默特左旗','A',1,0,0),(2749,1728,'和林格尔县','A',1,0,0),(2751,1417,'塔城','A',1,0,0),(2752,1766,'图木舒克','A',1,0,0),(2753,1752,'昌吉市','A',1,0,0),(2754,1752,'阜康市','A',1,0,0),(2755,1752,'呼图壁县','A',1,0,0),(2756,1752,'玛纳斯县','A',1,0,0),(2757,1752,'奇台县','A',1,0,0),(2758,1752,'吉木萨尔县','A',1,0,0),(2759,1752,'木垒哈萨克自治县','A',1,0,0),(2760,1753,'库尔勒市','A',1,0,0),(2761,1753,'轮台县','A',1,0,0),(2762,1753,'尉犁县','A',1,0,0),(2763,1753,'若羌县','A',1,0,0),(2764,1753,'且末县','A',1,0,0),(2765,1753,'和静县','A',1,0,0),(2766,1753,'和硕县','A',1,0,0),(2767,1753,'博湖县','A',1,0,0),(2768,1753,'焉耆回族自治县','A',1,0,0),(2769,1754,'伊宁市','A',1,0,0),(2770,1754,'奎屯市','A',1,0,0),(2771,1754,'伊宁县','A',1,0,0),(2772,1754,'霍城县','A',1,0,0),(2773,1754,'巩留县','A',1,0,0),(2774,1754,'新源县','A',1,0,0),(2775,1754,'昭苏县','A',1,0,0),(2776,1754,'特克斯县','A',1,0,0),(2777,1754,'尼勒克县','A',1,0,0),(2778,1754,'察布查尔锡伯自治县','A',1,0,0),(2779,1755,'阿克苏市','A',1,0,0),(2780,1755,'阿拉尔市','A',1,0,0),(2781,1755,'温宿县','A',1,0,0),(2782,1755,'库车县','A',1,0,0),(2783,1755,'沙雅县','A',1,0,0),(2784,1755,'新和县','A',1,0,0),(2785,1755,'拜城县','A',1,0,0),(2786,1755,'乌什县','A',1,0,0),(2787,1755,'阿瓦提县','A',1,0,0),(2788,1755,'柯坪县','A',1,0,0),(2789,1756,'喀什市','A',1,0,0),(2790,1756,'疏附县','A',1,0,0),(2791,1756,'疏勒县','A',1,0,0),(2792,1756,'英吉沙县','A',1,0,0),(2793,1756,'泽普县','A',1,0,0),(2794,1756,'莎车县','A',1,0,0),(2795,1756,'叶城县','A',1,0,0),(2796,1756,'麦盖提县','A',1,0,0),(2797,1756,'岳普湖县','A',1,0,0),(2798,1756,'伽师县','A',1,0,0),(2799,1756,'巴楚县','A',1,0,0),(2800,1756,'塔什库尔干塔吉克自治县','A',1,0,0),(2801,1757,'哈密市','A',1,0,0),(2802,1757,'伊吾县','A',1,0,0),(2803,1757,'巴里坤哈萨克自治县','A',1,0,0),(2804,1758,'克拉玛依区','A',1,0,0),(2805,1758,'独山子区','A',1,0,0),(2806,1758,'白碱滩区','A',1,0,0),(2807,1758,'乌尔禾区','A',1,0,0),(2808,1759,'博乐市','A',1,0,0),(2809,1759,'精河县','A',1,0,0),(2810,1759,'温泉县','A',1,0,0),(2811,1760,'吐鲁番市','A',1,0,0),(2812,1760,'托克逊县','A',1,0,0),(2813,1760,'鄯善县','A',1,0,0),(2814,1761,'和田市','A',1,0,0),(2815,1761,'和田县','A',1,0,0),(2816,1761,'洛浦县','A',1,0,0),(2817,1761,'民丰县','A',1,0,0),(2818,1761,'皮山县','A',1,0,0),(2819,1761,'策勒县','A',1,0,0),(2820,1761,'于田县','A',1,0,0),(2821,1761,'墨玉县','A',1,0,0),(2822,1762,'石河子','A',1,0,0),(2823,1763,'阿图什市','A',1,0,0),(2824,1763,'阿克陶县','A',1,0,0),(2825,1763,'阿合奇县','A',1,0,0),(2826,1763,'乌恰县','A',1,0,0),(2827,1764,'阿拉尔','A',1,0,0),(2828,1765,'五家渠','A',1,0,0),(2829,1751,'天山区','A',1,0,0),(2830,1751,'沙依巴克区','A',1,0,0),(2831,1751,'新市区','A',1,0,0),(2832,1751,'水磨沟区','A',1,0,0),(2833,1751,'头屯河区','A',1,0,0),(2834,1751,'达坂城区','A',1,0,0),(2835,1751,'米东区','A',1,0,0),(2836,1751,'乌鲁木齐县','A',1,0,0),(2837,2750,'阿勒泰市','A',1,0,0),(2838,2750,'布尔津县','A',1,0,0),(2839,2750,'富蕴县','A',1,0,0),(2840,2750,'福海县','A',1,0,0),(2841,2750,'哈巴河县','A',1,0,0),(2842,2750,'青河县','A',1,0,0),(2843,2750,'吉木乃县','A',1,0,0),(2844,2751,'塔城市','A',1,0,0),(2845,2751,'乌苏市','A',1,0,0),(2846,2751,'额敏县','A',1,0,0),(2847,2751,'沙湾县','A',1,0,0),(2848,2751,'托里县','A',1,0,0),(2849,2751,'裕民县','A',1,0,0),(2850,2751,'和布克赛尔蒙古自治县','A',1,0,0),(2852,1472,'弋江区','G',1,0,0),(2853,1472,'鸠江区','J',1,0,0),(2854,1472,'三山区','S',1,0,0),(2855,1472,'芜湖县','W',1,0,0),(2856,1472,'繁昌县','F',1,0,0),(2857,1472,'南陵县','N',1,0,0),(2865,1474,'颍州区','Y',1,0,0),(2866,1474,'颍东区','Y',1,0,0),(2867,1474,'颍泉区','Y',1,0,0),(2868,1474,'界首市','J',1,0,0),(2869,1474,'临泉县','L',1,0,0),(2870,1474,'太和县','T',1,0,0),(2871,1474,'阜南县','F',1,0,0),(2872,1474,'颍上县','Y',1,0,0),(2873,1475,'田家庵区','T',1,0,0),(2874,1475,'大通区','D',1,0,0),(2875,1475,'谢家集区','X',1,0,0),(2876,1475,'八公山区','B',1,0,0),(2877,1475,'潘集区','P',1,0,0),(2878,1475,'凤台县','F',1,0,0),(2879,1471,'庐阳区','L',1,0,0),(2880,1471,'瑶海区','Y',1,0,0),(2881,1471,'蜀山区','S',1,0,0),(2882,1471,'包河区','B',1,0,0),(2883,1471,'长丰县','C',1,0,0),(2884,1471,'肥东县','F',1,0,0),(2885,1471,'肥西县','F',1,0,0),(2887,1487,'庐江县','L',1,0,0),(2888,1487,'无为县','W',1,0,0),(2889,1487,'含山县','H',1,0,0),(2890,1487,'和县','H',1,0,0),(2891,1476,'迎江区','Y',1,0,0),(2892,1476,'大观区','D',1,0,0),(2893,1476,'宜秀区','X',1,0,0),(2894,1476,'桐城市','T',1,0,0),(2895,1476,'怀宁县','H',1,0,0),(2896,1476,'枞阳县','Z',1,0,0),(2897,1476,'潜山县','Q',1,0,0),(2898,1476,'太湖县','T',1,0,0),(2899,1476,'宿松县','S',1,0,0),(2900,1476,'望江县','W',1,0,0),(2901,1476,'岳西县','Y',1,0,0),(2902,1477,'埇桥区','Y',1,0,0),(2903,1477,'砀山县','D',1,0,0),(2904,1477,'萧县','X',1,0,0),(2905,1477,'灵璧县','L',1,0,0),(2906,1477,'泗县','S',1,0,0),(2907,1478,'金安区','J',1,0,0),(2908,1478,'裕安区','Y',1,0,0),(2909,1478,'寿县','S',1,0,0),(2910,1478,'霍邱县','H',1,0,0),(2911,1478,'舒城县','S',1,0,0),(2912,1478,'金寨县','J',1,0,0),(2913,1478,'霍山县','H',1,0,0),(2914,1479,'相山区','X',1,0,0),(2915,1479,'杜集区','D',1,0,0),(2916,1479,'烈山区','L',1,0,0),(2917,1479,'濉溪县','S',1,0,0),(2918,1480,'琅琊区','L',1,0,0),(2919,1480,'南谯区','N',1,0,0),(2920,1480,'天长市','T',1,0,0),(2921,1480,'明光市','M',1,0,0),(2922,1480,'来安县','L',1,0,0),(2923,1480,'全椒县','Q',1,0,0),(2924,1480,'定远县','D',1,0,0),(2925,1480,'凤阳县','F',1,0,0),(2926,1481,'雨山区','Y',1,0,0),(2927,1481,'金家庄花山区','J',1,0,0),(2928,1481,'当涂县','D',1,0,0),(2929,1482,'铜官山区','T',1,0,0),(2930,1482,'狮子山区','S',1,0,0),(2931,1482,'郊区','J',1,0,0),(2932,1482,'铜陵县','T',1,0,0),(2933,1483,'宣州区','X',1,0,0),(2934,1483,'宁国市','N',1,0,0),(2935,1483,'郎溪县','L',1,0,0),(2936,1483,'广德县','G',1,0,0),(2937,1483,'泾县','J',1,0,0),(2938,1483,'绩溪县','J',1,0,0),(2939,1483,'旌德县','S',1,0,0),(2940,1484,'谯城区','Q',1,0,0),(2941,1484,'涡阳县','W',1,0,0),(2942,1484,'蒙城县','M',1,0,0),(2943,1484,'利辛县','L',1,0,0),(2944,1485,'黄山区','H',1,0,0),(2945,1485,'屯溪区','T',1,0,0),(2946,1485,'徽州区','H',1,0,0),(2947,1485,'歙县','S',1,0,0),(2948,1485,'休宁县','X',1,0,0),(2949,1485,'黟县','Y',1,0,0),(2950,1485,'祁门县','Q',1,0,0),(2951,1486,'贵池区','G',1,0,0),(2952,1486,'东至县','D',1,0,0),(2953,1486,'石台县','S',1,0,0),(2954,1486,'青阳县','Q',1,0,0),(2955,1785,'原州区','A',1,0,0),(2956,1785,'西吉县','A',1,0,0),(2957,1785,'隆德县','A',1,0,0),(2958,1785,'泾源县','A',1,0,0),(2959,1785,'彭阳县','A',1,0,0),(2960,1784,'沙坡头区','A',1,0,0),(2961,1784,'中宁县','A',1,0,0),(2962,1784,'海原县','A',1,0,0),(2963,1783,'大武口区','A',1,0,0),(2964,1783,'惠农区','A',1,0,0),(2965,1783,'平罗县','A',1,0,0),(2966,1782,'利通区','A',1,0,0),(2967,1782,'盐池县','A',1,0,0),(2968,1782,'同心县','A',1,0,0),(2969,1782,'青铜峡市','A',1,0,0),(2970,1781,'兴庆区','A',1,0,0),(2971,1781,'金凤区','A',1,0,0),(2972,1781,'西夏区','A',1,0,0),(2973,1781,'永宁县','A',1,0,0),(2974,1781,'贺兰县','A',1,0,0),(2975,1781,'灵武市','A',1,0,0),(2976,1795,'花地玛堂区','H',1,0,0),(2977,1795,'花王堂区','H',1,0,0),(2978,1795,'望德堂区','W',1,0,0),(2979,1795,'大堂区','D',1,0,0),(2980,1795,'风顺堂区','F',1,0,0),(2981,1795,'嘉模堂区','J',1,0,0),(2982,1795,'路氹填海区','L',1,0,0),(2983,1795,'圣方济各堂区','S',1,0,0),(2984,1794,'港岛','G',1,0,0),(2985,1794,'九龙','J',1,0,0),(2986,1794,'新界','X',1,0,0),(2987,1796,'台北市','T',1,0,0),(2988,1796,'高雄市','G',1,0,0),(2989,1796,'基隆市','J',1,0,0),(2990,1796,'台中市','T',1,0,0),(2991,1796,'新竹市','X',1,0,0),(2992,1796,'台南市','T',1,0,0),(2993,1796,'嘉义市','J',1,0,0),(2994,1796,'台北县','T',1,0,0),(2995,1796,'台东县','T',1,0,0),(2996,1796,'澎湖县','P',1,0,0),(2997,1796,'花莲县','H',1,0,0),(2998,1796,'屏东县','P',1,0,0),(2999,1796,'高雄县','G',1,0,0),(3000,1796,'台南县','T',1,0,0),(3001,1796,'嘉义县','J',1,0,0),(3002,1796,'云林县','Y',1,0,0),(3003,1796,'南投县','N',1,0,0),(3004,1796,'彰化县','Z',1,0,0),(3005,1796,'台中县','T',1,0,0),(3006,1796,'苗栗县','M',1,0,0),(3007,1796,'桃园县','T',1,0,0),(3008,1796,'宜兰县','Y',1,0,0),(3009,1796,'新竹县','X',1,0,0),(3010,1691,'兴义市','A',1,0,0),(3011,1691,'兴仁县','A',1,0,0),(3012,1691,'普安县','A',1,0,0),(3013,1691,'晴隆县','A',1,0,0),(3014,1691,'贞丰县','A',1,0,0),(3015,1691,'望谟县','A',1,0,0),(3016,1691,'册亨县','A',1,0,0),(3017,1691,'安龙县','A',1,0,0),(3018,1690,'西秀区','A',1,0,0),(3019,1690,'平坝县','A',1,0,0),(3020,1690,'普定县','A',1,0,0),(3021,1690,'镇宁布依族苗族自治县','A',1,0,0),(3022,1690,'关岭布依族苗族自治县','A',1,0,0),(3023,1690,'紫云苗族布依族自治县','A',1,0,0),(3024,1689,'万山特区','A',1,0,0),(3025,1689,'铜仁市','A',1,0,0),(3026,1689,'江口县','A',1,0,0),(3027,1689,'石阡县','A',1,0,0),(3028,1689,'思南县','A',1,0,0),(3029,1689,'德江县','A',1,0,0),(3030,1689,'玉屏侗族自治县','A',1,0,0),(3031,1689,'印江土家族苗族自治县','A',1,0,0),(3032,1689,'沿河土家族自治县','A',1,0,0),(3033,1689,'松桃苗族自治县','A',1,0,0),(3034,1688,'毕节市','A',1,0,0),(3035,1688,'大方县','A',1,0,0),(3036,1688,'黔西县','A',1,0,0),(3037,1688,'金沙县','A',1,0,0),(3038,1688,'织金县','A',1,0,0),(3039,1688,'纳雍县','A',1,0,0),(3040,1688,'赫章县','A',1,0,0),(3041,1688,'威宁彝族回族苗族自治县','A',1,0,0),(3042,1687,'钟山区','A',1,0,0),(3043,1687,'六枝特区','A',1,0,0),(3044,1687,'水城县','A',1,0,0),(3045,1687,'盘县','A',1,0,0),(3046,1686,'都匀市','A',1,0,0),(3047,1686,'福泉市','A',1,0,0),(3048,1686,'荔波县','A',1,0,0),(3049,1686,'贵定县','A',1,0,0),(3050,1686,'瓮安县','A',1,0,0),(3051,1686,'独山县','A',1,0,0),(3052,1686,'平塘县','A',1,0,0),(3053,1686,'罗甸县','A',1,0,0),(3054,1686,'长顺县','A',1,0,0),(3055,1686,'龙里县','A',1,0,0),(3056,1686,'惠水县','A',1,0,0),(3057,1686,'三都水族自治县','A',1,0,0),(3058,1685,'凯里市','A',1,0,0),(3059,1685,'黄平县','A',1,0,0),(3060,1685,'施秉县','A',1,0,0),(3061,1685,'三穗县','A',1,0,0),(3062,1685,'镇远县','A',1,0,0),(3063,1685,'岑巩县','A',1,0,0),(3064,1685,'天柱县','A',1,0,0),(3065,1685,'锦屏县','A',1,0,0),(3066,1685,'剑河县','A',1,0,0),(3067,1685,'台江县','A',1,0,0),(3068,1685,'黎平县','A',1,0,0),(3069,1685,'榕江县','A',1,0,0),(3070,1685,'从江县','A',1,0,0),(3071,1685,'雷山县','A',1,0,0),(3072,1685,'麻江县','A',1,0,0),(3073,1685,'丹寨县','A',1,0,0),(3074,1684,'红花岗区','A',1,0,0),(3075,1684,'汇川区','A',1,0,0),(3076,1684,'赤水市','A',1,0,0),(3077,1684,'仁怀市','A',1,0,0),(3078,1684,'遵义县','A',1,0,0),(3079,1684,'桐梓县','A',1,0,0),(3080,1684,'绥阳县','A',1,0,0),(3081,1684,'正安县','A',1,0,0),(3082,1684,'凤冈县','A',1,0,0),(3083,1684,'湄潭县','A',1,0,0),(3084,1684,'余庆县','A',1,0,0),(3085,1684,'习水县','A',1,0,0),(3086,1684,'道真仡佬族苗族自治县','A',1,0,0),(3087,1684,'务川仡佬族苗族自治县','A',1,0,0),(3088,1683,'乌当区','A',1,0,0),(3089,1683,'南明区','A',1,0,0),(3090,1683,'云岩区','A',1,0,0),(3091,1683,'花溪区','A',1,0,0),(3092,1683,'白云区','A',1,0,0),(3093,1683,'小河区','A',1,0,0),(3094,1683,'清镇市','A',1,0,0),(3095,1683,'开阳县','A',1,0,0),(3096,1683,'息烽县','A',1,0,0),(3097,1683,'修文县','A',1,0,0),(3098,1793,'共和县','G',1,0,0),(3099,1793,'同德县','T',1,0,0),(3100,1793,'贵德县','G',1,0,0),(3101,1793,'兴海县','X',1,0,0),(3102,1793,'贵南县','G',1,0,0),(3103,1792,'玉树县','A',1,0,0),(3104,1792,'杂多县','A',1,0,0),(3105,1792,'称多县','A',1,0,0),(3106,1792,'治多县','A',1,0,0),(3107,1792,'囊谦县','A',1,0,0),(3108,1792,'曲麻莱县','A',1,0,0),(3109,1791,'同仁县','A',1,0,0),(3110,1791,'尖扎县','A',1,0,0),(3111,1791,'泽库县','A',1,0,0),(3112,1791,'河南蒙古族自治县','A',1,0,0),(3113,1790,'平安县','A',1,0,0),(3114,1790,'乐都县','A',1,0,0),(3115,1790,'民和回族土族自治县','A',1,0,0),(3116,1790,'互助土族自治县','A',1,0,0),(3117,1790,'化隆回族自治县','A',1,0,0),(3118,1790,'循化撒拉族自治县','A',1,0,0),(3119,1789,'玛沁县','A',1,0,0),(3120,1789,'班玛县','A',1,0,0),(3121,1789,'甘德县','A',1,0,0),(3122,1789,'达日县','A',1,0,0),(3123,1789,'久治县','A',1,0,0),(3124,1789,'玛多县','A',1,0,0),(3125,1788,'海晏县','A',1,0,0),(3126,1788,'祁连县','A',1,0,0),(3127,1788,'刚察县','A',1,0,0),(3128,1788,'门源回族自治县','A',1,0,0),(3129,1787,'德令哈市','A',1,0,0),(3130,1787,'格尔木市','A',1,0,0),(3131,1787,'乌兰县','A',1,0,0),(3132,1787,'都兰县','A',1,0,0),(3133,1787,'天峻县','A',1,0,0),(3134,1787,'冷湖行委','A',1,0,0),(3135,1787,'大柴旦行委','A',1,0,0),(3136,1787,'茫崖行委','A',1,0,0),(3137,1786,'城东区','A',1,0,0),(3138,1786,'城中区','A',1,0,0),(3139,1786,'城西区','A',1,0,0),(3140,1786,'城北区','A',1,0,0),(3141,1786,'湟中县','A',1,0,0),(3142,1786,'湟源县','A',1,0,0),(3143,1786,'大通回族土族自治县','A',1,0,0),(3147,1423,'市中区','S',1,0,0),(3148,1423,'槐荫区','H',1,0,0),(3149,1423,'天桥区','T',1,0,0),(3150,1423,'历城区','L',1,0,0),(3151,1423,'长清区','C',1,0,0),(3152,1423,'章丘市','Z',1,0,0),(3153,1423,'平阴县','P',1,0,0),(3154,1423,'济阳县','J',1,0,0),(3155,1423,'商河县','S',1,0,0),(3156,1423,'高新区','G',1,0,0),(3157,1424,'芝罘区','Z',1,0,0),(3158,1424,'福山区','F',1,0,0),(3159,1424,'牟平区','M',1,0,0),(3160,1424,'莱山区','L',1,0,0),(3161,1424,'龙口市','L',1,0,0),(3162,1424,'莱阳市','L',1,0,0),(3163,1424,'莱州市','L',1,0,0),(3164,1424,'蓬莱市','P',1,0,0),(3165,1424,'招远市','Z',1,0,0),(3166,1424,'栖霞市','Q',1,0,0),(3167,1424,'海阳市','H',1,0,0),(3168,1424,'长岛县','C',1,0,0),(3169,1425,'潍城区','W',1,0,0),(3170,1425,'寒亭区','H',1,0,0),(3171,1425,'坊子区','F',1,0,0),(3172,1425,'奎文区','K',1,0,0),(3173,1425,'青州市','Q',1,0,0),(3174,1425,'诸城市','Z',1,0,0),(3175,1425,'寿光市','S',1,0,0),(3176,1425,'安丘市','A',1,0,0),(3177,1425,'高密市','G',1,0,0),(3178,1425,'昌邑市','C',1,0,0),(3179,1425,'临朐县','L',1,0,0),(3180,1425,'昌乐县','C',1,0,0),(3181,1426,'兰山区','L',1,0,0),(3182,1426,'罗庄区','L',1,0,0),(3183,1426,'河东区','H',1,0,0),(3184,1426,'沂南县','Y',1,0,0),(3185,1426,'郯城县','T',1,0,0),(3186,1426,'沂水县','Y',1,0,0),(3187,1426,'苍山县','C',1,0,0),(3188,1426,'费县','F',1,0,0),(3189,1426,'平邑县','P',1,0,0),(3190,1426,'莒南县','J',1,0,0),(3191,1426,'蒙阴县','M',1,0,0),(3192,1426,'临沭县','L',1,0,0),(3193,1427,'张店区','Z',1,0,0),(3194,1427,'淄川区','Z',1,0,0),(3195,1427,'博山区','B',1,0,0),(3196,1427,'临淄区','L',1,0,0),(3197,1427,'周村区','Z',1,0,0),(3198,1427,'桓台县','H',1,0,0),(3199,1427,'高青县','G',1,0,0),(3200,1427,'沂源县','Y',1,0,0),(3201,1428,'市中区','S',1,0,0),(3202,1428,'任城区','R',1,0,0),(3203,1428,'曲阜市','Q',1,0,0),(3204,1428,'兖州市','Y',1,0,0),(3205,1428,'邹城市','Z',1,0,0),(3206,1428,'微山县','W',1,0,0),(3207,1428,'鱼台县','Y',1,0,0),(3208,1428,'金乡县','J',1,0,0),(3209,1428,'嘉祥县','J',1,0,0),(3210,1428,'汶上县','W',1,0,0),(3211,1428,'泗水县','S',1,0,0),(3212,1428,'梁山县','L',1,0,0),(3213,1429,'泰山区','T',1,0,0),(3214,1429,'岱岳区','D',1,0,0),(3215,1429,'新泰市','X',1,0,0),(3216,1429,'肥城市','F',1,0,0),(3217,1429,'宁阳县','N',1,0,0),(3218,1429,'东平县','D',1,0,0),(3219,1430,'东昌府区','D',1,0,0),(3220,1430,'临清市','L',1,0,0),(3221,1430,'阳谷县','Y',1,0,0),(3222,1430,'莘县','S',1,0,0),(3223,1430,'茌平县','C',1,0,0),(3224,1430,'东阿县','D',1,0,0),(3225,1430,'冠县','G',1,0,0),(3226,1430,'高唐县','G',1,0,0),(3227,1431,'环翠区','H',1,0,0),(3228,1431,'文登市','W',1,0,0),(3229,1431,'荣成市','R',1,0,0),(3230,1431,'乳山市','R',1,0,0),(3231,1432,'市中区','S',1,0,0),(3232,1432,'薛城区','X',1,0,0),(3233,1432,'峄城区','Y',1,0,0),(3234,1432,'台儿庄区','T',1,0,0),(3235,1432,'山亭区','S',1,0,0),(3236,1432,'滕州市','T',1,0,0),(3237,1433,'德城区','D',1,0,0),(3238,1433,'乐陵市','L',1,0,0),(3239,1433,'禹城市','Y',1,0,0),(3240,1433,'陵县','L',1,0,0),(3241,1433,'宁津县','N',1,0,0),(3242,1433,'庆云县','Q',1,0,0),(3243,1433,'临邑县','L',1,0,0),(3244,1433,'齐河县','Q',1,0,0),(3245,1433,'平原县','P',1,0,0),(3246,1433,'夏津县','X',1,0,0),(3247,1433,'武城县','W',1,0,0),(3248,1434,'东港区','D',1,0,0),(3249,1434,'岚山区','L',1,0,0),(3250,1434,'五莲县','W',1,0,0),(3251,1434,'莒县','J',1,0,0),(3252,1435,'东营区','D',1,0,0),(3253,1435,'河口区','H',1,0,0),(3254,1435,'垦利县','K',1,0,0),(3255,1435,'利津县','L',1,0,0),(3256,1435,'广饶县','G',1,0,0),(3257,1436,'牡丹区','M',1,0,0),(3258,1436,'曹县','C',1,0,0),(3259,1436,'单县','S',1,0,0),(3260,1436,'成武县','C',1,0,0),(3261,1436,'巨野县','J',1,0,0),(3262,1436,'郓城县','Y',1,0,0),(3263,1436,'鄄城县','J',1,0,0),(3264,1436,'定陶县','D',1,0,0),(3265,1436,'东明县','D',1,0,0),(3266,1437,'滨城区','B',1,0,0),(3267,1437,'惠民县','H',1,0,0),(3268,1437,'阳信县','Y',1,0,0),(3269,1437,'无棣县','W',1,0,0),(3270,1437,'沾化县','Z',1,0,0),(3271,1437,'博兴县','B',1,0,0),(3272,1437,'邹平县','Z',1,0,0),(3273,1422,'市南区','S',1,0,0),(3274,1422,'市北区','S',1,0,0),(3275,1422,'四方区','S',1,0,0),(3276,1422,'黄岛区','H',1,0,0),(3277,1422,'崂山区','A',1,0,0),(3278,1422,'李沧区','L',1,0,0),(3279,1422,'城阳区','C',1,0,0),(3280,1422,'胶州市','J',1,0,0),(3281,1422,'即墨市','J',1,0,0),(3282,1422,'平度市','P',1,0,0),(3283,1422,'胶南市','J',1,0,0),(3284,1422,'莱西市','L',1,0,0),(3285,1401,'省辖县','S',1,0,0),(3286,1401,'省直辖的县级市','A',1,0,0),(3287,1542,'三沙市','A',1,0,0),(3288,1540,'河东区','A',1,0,0),(3289,1540,'河西区','A',1,0,0),(3290,1539,'龙华区','A',1,0,0),(3291,1539,'秀英区','A',1,0,0),(3292,1539,'琼山区','A',1,0,0),(3293,1539,'美兰区','A',1,0,0),(3295,3285,'澄迈县','A',1,0,0),(3296,3285,'定安县','A',1,0,0),(3297,3285,'屯昌县','A',1,0,0),(3298,3285,'昌江黎族自治县','A',1,0,0),(3299,3285,'白沙黎族自治县','A',1,0,0),(3300,3285,'琼中黎族苗族自治县','A',1,0,0),(3301,3285,'陵水黎族自治县','A',1,0,0),(3302,3285,'保亭黎族苗族自治县','A',1,0,0),(3303,3285,'乐东黎族自治县','A',1,0,0),(3304,3286,'文昌市','A',1,0,0),(3305,3286,'琼海市','A',1,0,0),(3306,3286,'万宁市','A',1,0,0),(3307,3286,'五指山市','A',1,0,0),(3308,3286,'东方市','A',1,0,0),(3309,3286,'儋州市','A',1,0,0),(3312,1467,'岱山县','D',1,0,0),(3313,1467,'嵊泗县','S',1,0,0),(3314,1458,'海曙区','H',1,0,0),(3315,1458,'江东区','J',1,0,0),(3316,1458,'江北区','J',1,0,0),(3317,1458,'北仑区','B',1,0,0),(3318,1458,'镇海区','Z',1,0,0),(3319,1458,'鄞州区','Y',1,0,0),(3320,1458,'余姚市','Y',1,0,0),(3321,1458,'慈溪市','C',1,0,0),(3322,1458,'奉化市','F',1,0,0),(3323,1458,'象山县','X',1,0,0),(3324,1458,'宁海县','N',1,0,0),(3325,1459,'鹿城区','L',1,0,0),(3326,1459,'龙湾区','L',1,0,0),(3327,1459,'瓯海区','O',1,0,0),(3328,1459,'瑞安市','R',1,0,0),(3329,1459,'乐清市','L',1,0,0),(3330,1459,'洞头县','T',1,0,0),(3331,1459,'永嘉县','Y',1,0,0),(3332,1459,'平阳县','P',1,0,0),(3333,1459,'苍南县','C',1,0,0),(3334,1459,'文成县','W',1,0,0),(3335,1459,'泰顺县','T',1,0,0),(3336,1460,'婺城区','W',1,0,0),(3337,1460,'金东区','J',1,0,0),(3338,1460,'兰溪市','L',1,0,0),(3339,1460,'义乌市','Y',1,0,0),(3340,1460,'东阳市','D',1,0,0),(3341,1460,'永康市','Y',1,0,0),(3342,1460,'武义县','W',1,0,0),(3343,1460,'浦江县','P',1,0,0),(3344,1460,'磐安县','P',1,0,0),(3345,1461,'南湖区','N',1,0,0),(3346,1461,'秀洲区','X',1,0,0),(3347,1461,'海宁市','H',1,0,0),(3348,1461,'平湖市','P',1,0,0),(3349,1461,'桐乡市','T',1,0,0),(3350,1461,'嘉善县','J',1,0,0),(3351,1461,'海盐县','H',1,0,0),(3352,1462,'椒江区','J',1,0,0),(3353,1462,'黄岩区','H',1,0,0),(3354,1462,'路桥区','L',1,0,0),(3355,1462,'温岭市','W',1,0,0),(3356,1462,'临海市','L',1,0,0),(3357,1462,'玉环县','Y',1,0,0),(3358,1462,'三门县','S',1,0,0),(3359,1462,'天台县','T',1,0,0),(3360,1462,'仙居县','X',1,0,0),(3361,1463,'越城区','Y',1,0,0),(3362,1463,'诸暨市','Z',1,0,0),(3363,1463,'上虞市','S',1,0,0),(3364,1463,'嵊州市','S',1,0,0),(3365,1463,'绍兴县','S',1,0,0),(3366,1463,'新昌县','X',1,0,0),(3367,1464,'吴兴区','W',1,0,0),(3368,1464,'南浔区','N',1,0,0),(3369,1464,'德清县','D',1,0,0),(3370,1464,'长兴县','C',1,0,0),(3371,1464,'安吉县','A',1,0,0),(3372,1465,'莲都区','L',1,0,0),(3373,1465,'龙泉市','L',1,0,0),(3374,1465,'青田县','Q',1,0,0),(3375,1465,'缙云县','J',1,0,0),(3376,1465,'遂昌县','S',1,0,0),(3377,1465,'松阳县','S',1,0,0),(3378,1465,'云和县','Y',1,0,0),(3379,1465,'庆元县','Q',1,0,0),(3380,1465,'景宁畲族自治县','J',1,0,0),(3381,1466,'柯城区','K',1,0,0),(3382,1466,'衢江区','Q',1,0,0),(3383,1466,'江山市','J',1,0,0),(3384,1466,'常山县','C',1,0,0),(3385,1466,'开化县','K',1,0,0),(3386,1466,'龙游县','L',1,0,0),(3387,1457,'拱墅区','G',1,0,0),(3388,1457,'上城区','S',1,0,0),(3389,1457,'下城区','X',1,0,0),(3390,1457,'江干区','J',1,0,0),(3391,1457,'西湖区','X',1,0,0),(3392,1457,'滨江区','B',1,0,0),(3393,1457,'萧山区','X',1,0,0),(3394,1457,'余杭区','Y',1,0,0),(3395,1457,'建德市','J',1,0,0),(3396,1457,'富阳市','F',1,0,0),(3397,1457,'临安市','L',1,0,0),(3398,1457,'桐庐县','T',1,0,0),(3399,1457,'淳安县','C',1,0,0),(3400,1538,'江州区','J',1,0,0),(3401,1538,'扶绥县','F',1,0,0),(3402,1538,'宁明县','N',1,0,0),(3403,1538,'龙州县','L',1,0,0),(3404,1538,'大新县','D',1,0,0),(3405,1538,'天等县','T',1,0,0),(3406,1538,'凭祥市','P',1,0,0),(3407,1526,'城中区','C',1,0,0),(3408,1526,'鱼峰区','Y',1,0,0),(3409,1526,'柳南区','L',1,0,0),(3410,1526,'柳北区','L',1,0,0),(3411,1526,'柳江县','L',1,0,0),(3412,1526,'柳城县','L',1,0,0),(3413,1526,'鹿寨县','L',1,0,0),(3414,1526,'融安县','R',1,0,0),(3415,1526,'融水苗族自治县','R',1,0,0),(3416,1526,'三江侗族自治县','S',1,0,0),(3417,1527,'秀峰区','X',1,0,0),(3418,1527,'叠彩区','D',1,0,0),(3419,1527,'象山区','X',1,0,0),(3420,1527,'七星区','Q',1,0,0),(3421,1527,'雁山区','Y',1,0,0),(3422,1527,'阳朔县','Y',1,0,0),(3423,1527,'临桂县','L',1,0,0),(3424,1527,'灵川县','L',1,0,0),(3425,1527,'全州县','Q',1,0,0),(3426,1527,'兴安县','X',1,0,0),(3427,1527,'永福县','Y',1,0,0),(3428,1527,'灌阳县','G',1,0,0),(3429,1527,'资源县','Z',1,0,0),(3430,1527,'平乐县','P',1,0,0),(3431,1527,'荔浦县','L',1,0,0),(3432,1527,'龙胜各族自治县','L',1,0,0),(3433,1527,'恭城瑶族自治县','G',1,0,0),(3434,1528,'玉州区','Y',1,0,0),(3435,1528,'容县','R',1,0,0),(3436,1528,'陆川县','L',1,0,0),(3437,1528,'博白县','B',1,0,0),(3438,1528,'兴业县','X',1,0,0),(3439,1528,'北流市','B',1,0,0),(3440,1529,'万秀区','W',1,0,0),(3441,1529,'蝶山区','D',1,0,0),(3442,1529,'长洲区','C',1,0,0),(3443,1529,'苍梧县','C',1,0,0),(3444,1529,'藤县','T',1,0,0),(3445,1529,'蒙山县','M',1,0,0),(3446,1529,'岑溪市','C',1,0,0),(3447,1530,'海城区','H',1,0,0),(3448,1530,'银海区','Y',1,0,0),(3449,1530,'铁山港区','T',1,0,0),(3450,1530,'合浦县','H',1,0,0),(4728,1531,'港北区','G',1,0,0),(3452,1531,'港南区','G',1,0,0),(3453,1531,'覃塘区','T',1,0,0),(3454,1531,'平南县','P',1,0,0),(3455,1531,'桂平市','G',1,0,0),(3456,1532,'钦南区','Q',1,0,0),(3457,1532,'钦北区','Q',1,0,0),(3458,1532,'灵山县','L',1,0,0),(3459,1532,'浦北县','P',1,0,0),(3460,1533,'右江区','Y',1,0,0),(3461,1533,'田阳县','T',1,0,0),(3462,1533,'田东县','T',1,0,0),(3463,1533,'平果县','P',1,0,0),(3464,1533,'德保县','D',1,0,0),(3465,1533,'靖西县','J',1,0,0),(3466,1533,'那坡县','N',1,0,0),(3467,1533,'凌云县','L',1,0,0),(3468,1533,'乐业县','L',1,0,0),(3469,1533,'田林县','T',1,0,0),(3470,1533,'西林县','X',1,0,0),(3471,1533,'隆林各族自治县','L',1,0,0),(3472,1534,'金城江区','J',1,0,0),(3473,1534,'宜州市','Y',1,0,0),(3474,1534,'南丹县','N',1,0,0),(3475,1534,'天峨县','T',1,0,0),(3476,1534,'凤山县','F',1,0,0),(3477,1534,'东兰县','D',1,0,0),(3478,1534,'罗城仫佬族自治县','L',1,0,0),(3479,1534,'环江毛南族自治县','H',1,0,0),(3480,1534,'巴马瑶族自治县','B',1,0,0),(3481,1534,'都安瑶族自治县','D',1,0,0),(3482,1534,'大化瑶族自治县','D',1,0,0),(3483,1535,'兴宾区','X',1,0,0),(3484,1535,'合山市','H',1,0,0),(3485,1535,'忻城县','X',1,0,0),(3486,1535,'象州县','X',1,0,0),(3487,1535,'武宣县','W',1,0,0),(3488,1535,'金秀瑶族自治县','J',1,0,0),(3489,1536,'八步区','B',1,0,0),(3490,1536,'昭平县','Z',1,0,0),(3491,1536,'钟山县','Z',1,0,0),(3492,1536,'富川瑶族自治县','F',1,0,0),(3493,1537,'港口区','G',1,0,0),(3494,1537,'防城区','F',1,0,0),(3495,1537,'上思县','S',1,0,0),(3496,1537,'东兴市','D',1,0,0),(3497,1525,'兴宁区','X',1,0,0),(3498,1525,'青秀区','Q',1,0,0),(3499,1525,'江南区','J',1,0,0),(3500,1525,'西乡塘区','X',1,0,0),(3501,1525,'良庆区','L',1,0,0),(3502,1525,'邕宁区','Y',1,0,0),(3503,1525,'武鸣县','W',1,0,0),(3504,1525,'隆安县','L',1,0,0),(3505,1525,'马山县','M',1,0,0),(3506,1525,'上林县','S',1,0,0),(3507,1525,'宾阳县','B',1,0,0),(3508,1525,'横县','H',1,0,0),(3512,1709,'承德县','A',1,0,0),(3513,1709,'兴隆县','A',1,0,0),(3514,1709,'平泉县','A',1,0,0),(3515,1709,'滦平县','A',1,0,0),(3516,1709,'隆化县','A',1,0,0),(3517,1709,'丰宁满族自治县','A',1,0,0),(3518,1709,'宽城满族自治县','A',1,0,0),(3519,1709,'围场满族蒙古族自治县','A',1,0,0),(3520,1700,'新市区','A',1,0,0),(3521,1700,'北市区','A',1,0,0),(3522,1700,'南市区','A',1,0,0),(3523,1700,'涿州市','A',1,0,0),(3524,1700,'定州市','A',1,0,0),(3525,1700,'安国市','A',1,0,0),(3526,1700,'高碑店市','A',1,0,0),(3527,1700,'满城县','A',1,0,0),(3528,1700,'清苑县','A',1,0,0),(3529,1700,'涞水县','A',1,0,0),(3530,1700,'阜平县','A',1,0,0),(3531,1700,'徐水县','A',1,0,0),(3532,1700,'定兴县','A',1,0,0),(3533,1700,'唐县','A',1,0,0),(3534,1700,'高阳县','A',1,0,0),(3535,1700,'容城县','A',1,0,0),(3536,1700,'涞源县','A',1,0,0),(3537,1700,'望都县','A',1,0,0),(3538,1700,'安新县','A',1,0,0),(3539,1700,'易县','A',1,0,0),(3540,1700,'曲阳县','A',1,0,0),(3541,1700,'蠡县','A',1,0,0),(3542,1700,'顺平县','A',1,0,0),(3543,1700,'博野县','A',1,0,0),(3544,1700,'雄县','A',1,0,0),(3545,1701,'路北区','A',1,0,0),(3546,1701,'路南区','A',1,0,0),(3547,1701,'古冶区','A',1,0,0),(3548,1701,'开平区','A',1,0,0),(3549,1701,'丰南区','A',1,0,0),(3550,1701,'丰润区','A',1,0,0),(3551,1701,'遵化市','A',1,0,0),(3552,1701,'迁安市','A',1,0,0),(3553,1701,'滦县','A',1,0,0),(3554,1701,'滦南县','A',1,0,0),(3555,1701,'乐亭县','A',1,0,0),(3556,1701,'迁西县','A',1,0,0),(3557,1701,'玉田县','A',1,0,0),(3558,1701,'唐海县','A',1,0,0),(3559,1702,'安次区','A',1,0,0),(3560,1702,'广阳区','A',1,0,0),(3561,1702,'霸州市','A',1,0,0),(3562,1702,'三河市','A',1,0,0),(3563,1702,'固安县','A',1,0,0),(3564,1702,'永清县','A',1,0,0),(3565,1702,'香河县','A',1,0,0),(3566,1702,'大城县','A',1,0,0),(3567,1702,'文安县','A',1,0,0),(3568,1702,'大厂回族自治县','A',1,0,0),(3569,1703,'丛台区','A',1,0,0),(3570,1703,'邯山区','A',1,0,0),(3571,1703,'复兴区','A',1,0,0),(3572,1703,'峰峰矿区','A',1,0,0),(3573,1703,'武安市','A',1,0,0),(3574,1703,'邯郸县','A',1,0,0),(3575,1703,'临漳县','A',1,0,0),(3576,1703,'成安县','A',1,0,0),(3577,1703,'大名县','A',1,0,0),(3578,1703,'涉县','A',1,0,0),(3579,1703,'磁县','A',1,0,0),(3580,1703,'肥乡县','A',1,0,0),(3581,1703,'永年县','A',1,0,0),(3582,1703,'邱县','A',1,0,0),(3583,1703,'鸡泽县','A',1,0,0),(3584,1703,'广平县','A',1,0,0),(3585,1703,'馆陶县','A',1,0,0),(3586,1703,'魏县','A',1,0,0),(3587,1703,'曲周县','A',1,0,0),(3588,1704,'海港区','A',1,0,0),(3589,1704,'山海关区','A',1,0,0),(3590,1704,'北戴河区','A',1,0,0),(3591,1704,'昌黎县','A',1,0,0),(3592,1704,'抚宁县','A',1,0,0),(3593,1704,'卢龙县','A',1,0,0),(3594,1704,'青龙满族自治县','A',1,0,0),(3595,1705,'运河区','A',1,0,0),(3596,1705,'新华区','A',1,0,0),(3597,1705,'泊头市','A',1,0,0),(3598,1705,'任丘市','A',1,0,0),(3599,1705,'黄骅市','A',1,0,0),(3600,1705,'河间市','A',1,0,0),(3601,1705,'沧县','A',1,0,0),(3602,1705,'青县','A',1,0,0),(3603,1705,'东光县','A',1,0,0),(3604,1705,'海兴县','A',1,0,0),(3605,1705,'盐山县','A',1,0,0),(3606,1705,'肃宁县','A',1,0,0),(3607,1705,'南皮县','A',1,0,0),(3608,1705,'吴桥县','A',1,0,0),(3609,1705,'献县','A',1,0,0),(3610,1705,'孟村回族自治县','A',1,0,0),(3611,1706,'桥东区','A',1,0,0),(3612,1706,'桥西区','A',1,0,0),(3613,1706,'南宫市','A',1,0,0),(3614,1706,'沙河市','A',1,0,0),(3615,1706,'邢台县','A',1,0,0),(3616,1706,'临城县','A',1,0,0),(3617,1706,'内丘县','A',1,0,0),(3618,1706,'柏乡县','A',1,0,0),(3619,1706,'隆尧县','A',1,0,0),(3620,1706,'任县','A',1,0,0),(3621,1706,'南和县','A',1,0,0),(3622,1706,'宁晋县','A',1,0,0),(3623,1706,'巨鹿县','A',1,0,0),(3624,1706,'新河县','A',1,0,0),(3625,1706,'广宗县','A',1,0,0),(3626,1706,'平乡县','A',1,0,0),(3627,1706,'威县','A',1,0,0),(3628,1706,'清河县','A',1,0,0),(3629,1706,'临西县','A',1,0,0),(3630,1707,'桃城区','A',1,0,0),(3631,1707,'冀州市','A',1,0,0),(3632,1707,'深州市','A',1,0,0),(3633,1707,'枣强县','A',1,0,0),(3634,1707,'武邑县','A',1,0,0),(3635,1707,'武强县','A',1,0,0),(3636,1707,'饶阳县','A',1,0,0),(3637,1707,'安平县','A',1,0,0),(3638,1707,'故城县','A',1,0,0),(3639,1707,'景县','A',1,0,0),(3640,1707,'阜城县','A',1,0,0),(3641,1708,'桥西区','A',1,0,0),(3642,1708,'桥东区','A',1,0,0),(3643,1708,'宣化区','A',1,0,0),(3644,1708,'下花园区','A',1,0,0),(3645,1708,'宣化县','A',1,0,0),(3646,1708,'张北县','A',1,0,0),(3647,1708,'康保县','A',1,0,0),(3648,1708,'沽源县','A',1,0,0),(3649,1708,'尚义县','A',1,0,0),(3650,1708,'蔚县','A',1,0,0),(3651,1708,'阳原县','A',1,0,0),(3652,1708,'怀安县','A',1,0,0),(3653,1708,'万全县','A',1,0,0),(3654,1708,'怀来县','A',1,0,0),(3655,1708,'涿鹿县','A',1,0,0),(3656,1708,'赤城县','A',1,0,0),(3657,1708,'崇礼县','A',1,0,0),(3658,1699,'长安区','A',1,0,0),(3659,1699,'桥东区','A',1,0,0),(3660,1699,'桥西区','A',1,0,0),(3661,1699,'新华区','A',1,0,0),(3662,1699,'井陉矿区','A',1,0,0),(3663,1699,'裕华区','A',1,0,0),(3664,1699,'辛集市','A',1,0,0),(3665,1699,'藁城市','A',1,0,0),(3666,1699,'晋州市','A',1,0,0),(3667,1699,'新乐市','A',1,0,0),(3668,1699,'鹿泉市','A',1,0,0),(3669,1699,'井陉县','A',1,0,0),(3670,1699,'正定县','A',1,0,0),(3671,1699,'栾城县','A',1,0,0),(3672,1699,'行唐县','A',1,0,0),(3673,1699,'灵寿县','A',1,0,0),(3674,1699,'高邑县','A',1,0,0),(3675,1699,'深泽县','A',1,0,0),(3676,1699,'赞皇县','A',1,0,0),(3677,1699,'无极县','A',1,0,0),(3678,1699,'平山县','A',1,0,0),(3679,1699,'元氏县','A',1,0,0),(3680,1699,'赵县','A',1,0,0),(3681,1698,'噶尔县','A',1,0,0),(3682,1698,'普兰县','A',1,0,0),(3683,1698,'札达县','A',1,0,0),(3684,1698,'日土县','A',1,0,0),(3685,1698,'革吉县','A',1,0,0),(3686,1698,'改则县','A',1,0,0),(3687,1698,'措勤县','A',1,0,0),(3688,1697,'那曲县','A',1,0,0),(3689,1697,'嘉黎县','A',1,0,0),(3690,1697,'比如县','A',1,0,0),(3691,1697,'聂荣县','A',1,0,0),(3692,1697,'安多县','A',1,0,0),(3693,1697,'巴青县','A',1,0,0),(3694,1697,'尼玛县','A',1,0,0),(3695,1697,'索县','A',1,0,0),(3696,1697,'班戈县','A',1,0,0),(3697,1697,'申扎县','A',1,0,0),(3698,1696,'昌都县','A',1,0,0),(3699,1696,'江达县','A',1,0,0),(3700,1696,'贡觉县','A',1,0,0),(3701,1696,'类乌齐县','A',1,0,0),(3702,1696,'丁青县','A',1,0,0),(3703,1696,'察雅县','A',1,0,0),(3704,1696,'八宿县','A',1,0,0),(3705,1696,'左贡县','A',1,0,0),(3706,1696,'芒康县','A',1,0,0),(3707,1696,'洛隆县','A',1,0,0),(3708,1696,'边坝县','A',1,0,0),(3709,1695,'林芝县','A',1,0,0),(3710,1695,'工布江达县','A',1,0,0),(3711,1695,'米林县','A',1,0,0),(3712,1695,'墨脱县','A',1,0,0),(3713,1695,'波密县','A',1,0,0),(3714,1695,'察隅县','A',1,0,0),(3715,1695,'朗县','A',1,0,0),(3716,1694,'乃东县','A',1,0,0),(3717,1694,'扎囊县','A',1,0,0),(3718,1694,'贡嘎县','A',1,0,0),(3719,1694,'桑日县','A',1,0,0),(3720,1694,'琼结县','A',1,0,0),(3721,1694,'曲松县','A',1,0,0),(3722,1694,'洛扎县','A',1,0,0),(3723,1694,'加查县','A',1,0,0),(3724,1694,'隆子县','A',1,0,0),(3725,1694,'错那县','A',1,0,0),(3726,1694,'浪卡子县','A',1,0,0),(3727,1694,'措美县','A',1,0,0),(3728,1693,'日喀则市','A',1,0,0),(3729,1693,'南木林县','A',1,0,0),(3730,1693,'江孜县','A',1,0,0),(3731,1693,'定日县','A',1,0,0),(3732,1693,'萨迦县','A',1,0,0),(3733,1693,'拉孜县','A',1,0,0),(3734,1693,'昂仁县','A',1,0,0),(3735,1693,'谢通门县','A',1,0,0),(3736,1693,'白朗县','A',1,0,0),(3737,1693,'仁布县','A',1,0,0),(3738,1693,'康马县','A',1,0,0),(3739,1693,'定结县','A',1,0,0),(3740,1693,'仲巴县','A',1,0,0),(3741,1693,'亚东县','A',1,0,0),(3742,1693,'吉隆县','A',1,0,0),(3743,1693,'聂拉木县','A',1,0,0),(3744,1693,'萨嘎县','A',1,0,0),(3745,1693,'岗巴县','A',1,0,0),(3746,1692,'城关区','A',1,0,0),(3747,1692,'林周县','A',1,0,0),(3748,1692,'当雄县','A',1,0,0),(3749,1692,'尼木县','A',1,0,0),(3750,1692,'曲水县','A',1,0,0),(3751,1692,'堆龙德庆县','A',1,0,0),(3752,1692,'达孜县','A',1,0,0),(3753,1692,'墨竹工卡县','A',1,0,0),(3754,1682,'泸水县','A',1,0,0),(3755,1682,'福贡县','A',1,0,0),(3756,1682,'贡山独龙族怒族自治县','A',1,0,0),(3757,1682,'兰坪白族普米族自治县','A',1,0,0),(3758,1668,'麒麟区','A',1,0,0),(3759,1668,'宣威市','A',1,0,0),(3760,1668,'马龙县','A',1,0,0),(3761,1668,'陆良县','A',1,0,0),(3762,1668,'师宗县','A',1,0,0),(3763,1668,'罗平县','A',1,0,0),(3764,1668,'富源县','A',1,0,0),(3765,1668,'会泽县','A',1,0,0),(3766,1668,'沾益县','A',1,0,0),(3767,1669,'大理市','A',1,0,0),(3768,1669,'祥云县','A',1,0,0),(3769,1669,'宾川县','A',1,0,0),(3770,1669,'弥渡县','A',1,0,0),(3771,1669,'永平县','A',1,0,0),(3772,1669,'云龙县','A',1,0,0),(3773,1669,'洱源县','A',1,0,0),(3774,1669,'剑川县','A',1,0,0),(3775,1669,'鹤庆县','A',1,0,0),(3776,1669,'漾濞彝族自治县','A',1,0,0),(3777,1669,'南涧彝族自治县','A',1,0,0),(3778,1669,'巍山彝族回族自治县','A',1,0,0),(3779,1670,'蒙自县','A',1,0,0),(3780,1670,'开远市','A',1,0,0),(3781,1670,'个旧市','A',1,0,0),(3782,1670,'绿春县','A',1,0,0),(3783,1670,'建水县','A',1,0,0),(3784,1670,'石屏县','A',1,0,0),(3785,1670,'弥勒县','A',1,0,0),(3786,1670,'红河县','A',1,0,0),(3787,1670,'泸西县','A',1,0,0),(3788,1670,'元阳县','A',1,0,0),(3789,1670,'金平苗族瑶族傣族自治县','A',1,0,0),(3790,1670,'河口瑶族自治县','A',1,0,0),(3791,1670,'屏边苗族自治县','A',1,0,0),(3792,1671,'红塔区','A',1,0,0),(3793,1671,'江川县','A',1,0,0),(3794,1671,'澄江县','A',1,0,0),(3795,1671,'通海县','A',1,0,0),(3796,1671,'华宁县','A',1,0,0),(3797,1671,'易门县','A',1,0,0),(3798,1671,'峨山彝族自治县','A',1,0,0),(3799,1671,'新平彝族傣族自治县','A',1,0,0),(3800,1671,'元江哈尼族彝族傣族自治县','A',1,0,0),(3801,1672,'古城区','A',1,0,0),(3802,1672,'永胜县','A',1,0,0),(3803,1672,'华坪县','A',1,0,0),(3804,1672,'玉龙纳西族自治县','A',1,0,0),(3805,1672,'宁蒗彝族自治县','A',1,0,0),(3806,1673,'文山县','A',1,0,0),(3807,1673,'砚山县','A',1,0,0),(3808,1673,'西畴县','A',1,0,0),(3809,1673,'麻栗坡县','A',1,0,0),(3810,1673,'马关县','A',1,0,0),(3811,1673,'丘北县','A',1,0,0),(3812,1673,'广南县','A',1,0,0),(3813,1673,'富宁县','A',1,0,0),(3814,1674,'楚雄市','A',1,0,0),(3815,1674,'双柏县','A',1,0,0),(3816,1674,'牟定县','A',1,0,0),(3817,1674,'南华县','A',1,0,0),(3818,1674,'姚安县','A',1,0,0),(3819,1674,'大姚县','A',1,0,0),(3820,1674,'永仁县','A',1,0,0),(3821,1674,'元谋县','A',1,0,0),(3822,1674,'武定县','A',1,0,0),(3823,1674,'禄丰县','A',1,0,0),(3824,1675,'景洪市','A',1,0,0),(3825,1675,'勐海县','A',1,0,0),(3826,1675,'勐腊县','A',1,0,0),(3827,1676,'昭阳区','A',1,0,0),(3828,1676,'鲁甸县','A',1,0,0),(3829,1676,'巧家县','A',1,0,0),(3830,1676,'盐津县','A',1,0,0),(3831,1676,'大关县','A',1,0,0),(3832,1676,'永善县','A',1,0,0),(3833,1676,'绥江县','A',1,0,0),(3834,1676,'镇雄县','A',1,0,0),(3835,1676,'彝良县','A',1,0,0),(3836,1676,'威信县','A',1,0,0),(3837,1676,'水富县','A',1,0,0),(3838,1677,'潞西市','A',1,0,0),(3839,1677,'瑞丽市','A',1,0,0),(3840,1677,'梁河县','A',1,0,0),(3841,1677,'盈江县','A',1,0,0),(3842,1677,'陇川县','A',1,0,0),(3843,1678,'思茅区','A',1,0,0),(3844,1678,'宁洱哈尼族彝族自治县','A',1,0,0),(3845,1678,'墨江哈尼族自治县','A',1,0,0),(3846,1678,'景东彝族自治县','A',1,0,0),(3847,1678,'景谷彝族傣族自治县','A',1,0,0),(3848,1678,'镇沅彝族哈尼族拉祜族自治县','A',1,0,0),(3849,1678,'西盟佤族自治县','A',1,0,0),(3850,1678,'江城哈尼族彝族自治县','A',1,0,0),(3851,1678,'孟连傣族拉祜族佤族自治县','A',1,0,0),(3852,1678,'澜沧拉祜族自治县','A',1,0,0),(3853,1679,'隆阳区','A',1,0,0),(3854,1679,'施甸县','A',1,0,0),(3855,1679,'腾冲县','A',1,0,0),(3856,1679,'龙陵县','A',1,0,0),(3857,1679,'昌宁县','A',1,0,0),(3858,1680,'临翔区','A',1,0,0),(3859,1680,'凤庆县','A',1,0,0),(3860,1680,'云县','A',1,0,0),(3861,1680,'永德县','A',1,0,0),(3862,1680,'镇康县','A',1,0,0),(3863,1680,'双江县','A',1,0,0),(3864,1680,'耿马县','A',1,0,0),(3865,1680,'沧源县','A',1,0,0),(3866,1681,'香格里拉县','A',1,0,0),(3867,1681,'德钦县','A',1,0,0),(3868,1681,'维西傈僳族自治县','A',1,0,0),(3869,1667,'五华区','A',1,0,0),(3870,1667,'盘龙区','A',1,0,0),(3871,1667,'官渡区','A',1,0,0),(3872,1667,'西山区','A',1,0,0),(3873,1667,'东川区','A',1,0,0),(3874,1667,'安宁市','A',1,0,0),(3875,1667,'呈贡县','A',1,0,0),(3876,1667,'晋宁县','A',1,0,0),(3877,1667,'富民县','A',1,0,0),(3878,1667,'宜良县','A',1,0,0),(3879,1667,'嵩明县','A',1,0,0),(3880,1667,'石林彝族自治县','A',1,0,0),(3881,1667,'禄劝彝族苗族自治县','A',1,0,0),(3882,1667,'寻甸回族自治县','A',1,0,0),(3883,1636,'加格达奇区','A',1,0,0),(3884,1636,'松岭区','A',1,0,0),(3885,1636,'新林区','A',1,0,0),(3886,1636,'呼中区','A',1,0,0),(3887,1636,'呼玛县','A',1,0,0),(3888,1636,'塔河县','A',1,0,0),(3889,1636,'漠河县','A',1,0,0),(3890,1625,'萨尔图区','A',1,0,0),(3891,1625,'龙凤区','A',1,0,0),(3892,1625,'让胡路区','A',1,0,0),(3893,1625,'红岗区','A',1,0,0),(3894,1625,'大同区','A',1,0,0),(3895,1625,'肇州县','A',1,0,0),(3896,1625,'肇源县','A',1,0,0),(3897,1625,'林甸县','A',1,0,0),(3898,1625,'杜尔伯特蒙古族自治县','A',1,0,0),(3899,1626,'龙沙区','A',1,0,0),(3900,1626,'建华区','A',1,0,0),(3901,1626,'铁锋区','A',1,0,0),(3902,1626,'昂昂溪区','A',1,0,0),(3903,1626,'富拉尔基区','A',1,0,0),(3904,1626,'碾子山区','A',1,0,0),(3905,1626,'梅里斯区','A',1,0,0),(3906,1626,'讷河市','A',1,0,0),(3907,1626,'龙江县','A',1,0,0),(3908,1626,'依安县','A',1,0,0),(3909,1626,'泰来县','A',1,0,0),(3910,1626,'甘南县','A',1,0,0),(3911,1626,'富裕县','A',1,0,0),(3912,1626,'克山县','A',1,0,0),(3913,1626,'克东县','A',1,0,0),(3914,1626,'拜泉县','A',1,0,0),(3915,1627,'爱民区','A',1,0,0),(3916,1627,'东安区','A',1,0,0),(3917,1627,'阳明区','A',1,0,0),(3918,1627,'西安区','A',1,0,0),(3919,1627,'绥芬河市','A',1,0,0),(3920,1627,'海林市','A',1,0,0),(3921,1627,'宁安市','A',1,0,0),(3922,1627,'穆棱市','A',1,0,0),(3923,1627,'东宁县','A',1,0,0),(3924,1627,'林口县','A',1,0,0),(3925,1628,'北林区','A',1,0,0),(3926,1628,'安达市','A',1,0,0),(3927,1628,'肇东市','A',1,0,0),(3928,1628,'海伦市','A',1,0,0),(3929,1628,'望奎县','A',1,0,0),(3930,1628,'兰西县','A',1,0,0),(3931,1628,'青冈县','A',1,0,0),(3932,1628,'庆安县','A',1,0,0),(3933,1628,'明水县','A',1,0,0),(3934,1628,'绥棱县','A',1,0,0),(3935,1629,'前进区','A',1,0,0),(3936,1629,'向阳区','A',1,0,0),(3937,1629,'东风区','A',1,0,0),(3938,1629,'郊区永红同江市','A',1,0,0),(3939,1629,'富锦市','A',1,0,0),(3940,1629,'桦南县','A',1,0,0),(3941,1629,'桦川县','A',1,0,0),(3942,1629,'汤原县','A',1,0,0),(3943,1629,'抚远县','A',1,0,0),(3944,1630,'鸡冠区','A',1,0,0),(3945,1630,'恒山区','A',1,0,0),(3946,1630,'滴道区','A',1,0,0),(3947,1630,'梨树区','A',1,0,0),(3948,1630,'城子河区','A',1,0,0),(3949,1630,'麻山区','A',1,0,0),(3950,1630,'虎林市','A',1,0,0),(3951,1630,'密山市','A',1,0,0),(3952,1630,'鸡东县','A',1,0,0),(3953,1631,'尖山区','A',1,0,0),(3954,1631,'岭东区','A',1,0,0),(3955,1631,'四方台区','A',1,0,0),(3956,1631,'宝山区','A',1,0,0),(3957,1631,'集贤县','A',1,0,0),(3958,1631,'友谊县','A',1,0,0),(3959,1631,'宝清县','A',1,0,0),(3960,1631,'饶河县','A',1,0,0),(3961,1632,'兴山区','A',1,0,0),(3962,1632,'向阳区','A',1,0,0),(3963,1632,'工农区','A',1,0,0),(3964,1632,'南山区','A',1,0,0),(3965,1632,'兴安区','A',1,0,0),(3966,1632,'东山区','A',1,0,0),(3967,1632,'萝北县','A',1,0,0),(3968,1632,'绥滨县','A',1,0,0),(3969,1633,'爱辉区','A',1,0,0),(3970,1633,'北安市','A',1,0,0),(3971,1633,'五大连池市','A',1,0,0),(3972,1633,'嫩江县','A',1,0,0),(3973,1633,'逊克县','A',1,0,0),(3974,1633,'孙吴县','A',1,0,0),(3975,1634,'伊春区','A',1,0,0),(3976,1634,'南岔区','A',1,0,0),(3977,1634,'友好区','A',1,0,0),(3978,1634,'西林区','A',1,0,0),(3979,1634,'翠峦区','A',1,0,0),(3980,1634,'新青区','A',1,0,0),(3981,1634,'美溪区','A',1,0,0),(3982,1634,'金山屯区','A',1,0,0),(3983,1634,'五营区','A',1,0,0),(3984,1634,'乌马河区','A',1,0,0),(3985,1634,'汤旺河区','A',1,0,0),(3986,1634,'带岭区','A',1,0,0),(3987,1634,'乌伊岭区','A',1,0,0),(3988,1634,'红星区','A',1,0,0),(3989,1634,'上甘岭区','A',1,0,0),(3990,1634,'铁力市','A',1,0,0),(3991,1634,'嘉荫县','A',1,0,0),(3992,1635,'桃山区','A',1,0,0),(3993,1635,'新兴区','A',1,0,0),(3994,1635,'茄子河区','A',1,0,0),(3995,1635,'勃利县','A',1,0,0),(3996,1624,'松北区','A',1,0,0),(3997,1624,'道里区','A',1,0,0),(3998,1624,'南岗区','A',1,0,0),(3999,1624,'道外区','A',1,0,0),(4000,1624,'平房区','A',1,0,0),(4001,1624,'香坊区','A',1,0,0),(4002,1624,'呼兰区','A',1,0,0),(4003,1624,'阿城区','A',1,0,0),(4004,1624,'双城市','A',1,0,0),(4005,1624,'尚志市','A',1,0,0),(4006,1624,'五常市','A',1,0,0),(4007,1624,'依兰县','A',1,0,0),(4008,1624,'方正县','A',1,0,0),(4009,1624,'宾县','A',1,0,0),(4010,1624,'巴彦县','A',1,0,0),(4011,1624,'木兰县','A',1,0,0),(4012,1624,'通河县','A',1,0,0),(4013,1624,'延寿县','A',1,0,0),(4014,1645,'龙山区','A',1,0,0),(4015,1645,'西安区','A',1,0,0),(4016,1645,'东丰县','A',1,0,0),(4017,1645,'东辽县','A',1,0,0),(4018,1644,'八道江区','A',1,0,0),(4019,1644,'江源区','A',1,0,0),(4020,1644,'临江市','A',1,0,0),(4021,1644,'抚松县','A',1,0,0),(4022,1644,'靖宇县','A',1,0,0),(4023,1644,'长白朝鲜族自治县','A',1,0,0),(4024,1643,'东昌区','A',1,0,0),(4025,1643,'二道江区','A',1,0,0),(4026,1643,'梅河口市','A',1,0,0),(4027,1643,'集安市','A',1,0,0),(4028,1643,'通化县','A',1,0,0),(4029,1643,'辉南县','A',1,0,0),(4030,1643,'柳河县','A',1,0,0),(4031,1642,'洮北区','A',1,0,0),(4032,1642,'洮南市','A',1,0,0),(4033,1642,'大安市','A',1,0,0),(4034,1642,'镇赉县','A',1,0,0),(4035,1642,'通榆县','A',1,0,0),(4036,1641,'宁江区','A',1,0,0),(4037,1641,'长岭县','A',1,0,0),(4038,1641,'乾安县','A',1,0,0),(4039,1641,'扶余县','A',1,0,0),(4040,1641,'前郭尔罗斯蒙古族自治县','A',1,0,0),(4041,1640,'延吉市','A',1,0,0),(4042,1640,'图们市','A',1,0,0),(4043,1640,'敦化市','A',1,0,0),(4044,1640,'珲春市','A',1,0,0),(4045,1640,'龙井市','A',1,0,0),(4046,1640,'和龙市','A',1,0,0),(4047,1640,'汪清县','A',1,0,0),(4048,1640,'安图县','A',1,0,0),(4049,1639,'铁西区','A',1,0,0),(4050,1639,'铁东区','A',1,0,0),(4051,1639,'公主岭市','A',1,0,0),(4052,1639,'双辽市','A',1,0,0),(4053,1639,'梨树县','A',1,0,0),(4054,1639,'伊通满族自治县','A',1,0,0),(4055,1638,'船营区','A',1,0,0),(4056,1638,'昌邑区','A',1,0,0),(4057,1638,'龙潭区','A',1,0,0),(4058,1638,'丰满区','A',1,0,0),(4059,1638,'蛟河市','A',1,0,0),(4060,1638,'桦甸市','A',1,0,0),(4061,1638,'舒兰市','A',1,0,0),(4062,1638,'磐石市','A',1,0,0),(4063,1638,'永吉县','A',1,0,0),(4064,1637,'朝阳区','A',1,0,0),(4065,1637,'南关区','A',1,0,0),(4066,1637,'宽城区','A',1,0,0),(4067,1637,'二道区','A',1,0,0),(4068,1637,'绿园区','A',1,0,0),(4069,1637,'双阳区','A',1,0,0),(4070,1637,'德惠市','A',1,0,0),(4071,1637,'九台市','A',1,0,0),(4072,1637,'榆树市','A',1,0,0),(4073,1637,'农安县','A',1,0,0),(4075,1595,'武陵源区','A',1,0,0),(4076,1595,'慈利县','A',1,0,0),(4077,1595,'桑植县','A',1,0,0),(4078,1583,'荷塘区','A',1,0,0),(4079,1583,'芦淞区','A',1,0,0),(4080,1583,'石峰区','A',1,0,0),(4081,1583,'天元区','A',1,0,0),(4082,1583,'醴陵市','A',1,0,0),(4083,1583,'株洲县','A',1,0,0),(4084,1583,'攸县','A',1,0,0),(4085,1583,'茶陵县','A',1,0,0),(4086,1583,'炎陵县','A',1,0,0),(4087,1584,'资阳区','A',1,0,0),(4088,1584,'赫山区','A',1,0,0),(4089,1584,'沅江市','A',1,0,0),(4090,1584,'南县','A',1,0,0),(4091,1584,'桃江县','A',1,0,0),(4092,1584,'安化县','A',1,0,0),(4093,1585,'武陵区','A',1,0,0),(4094,1585,'鼎城区','A',1,0,0),(4095,1585,'津市市','A',1,0,0),(4096,1585,'安乡县','A',1,0,0),(4097,1585,'汉寿县','A',1,0,0),(4098,1585,'澧县','A',1,0,0),(4099,1585,'临澧县','A',1,0,0),(4100,1585,'桃源县','A',1,0,0),(4101,1585,'石门县','A',1,0,0),(4102,1586,'珠晖区','A',1,0,0),(4103,1586,'雁峰区','A',1,0,0),(4104,1586,'石鼓区','A',1,0,0),(4105,1586,'蒸湘区','A',1,0,0),(4106,1586,'南岳区','A',1,0,0),(4107,1586,'耒阳市','A',1,0,0),(4108,1586,'常宁市','A',1,0,0),(4109,1586,'衡阳县','A',1,0,0),(4110,1586,'衡南县','A',1,0,0),(4111,1586,'衡山县','A',1,0,0),(4112,1586,'衡东县','A',1,0,0),(4113,1586,'祁东县','A',1,0,0),(4114,1587,'雨湖区','A',1,0,0),(4115,1587,'岳塘区','A',1,0,0),(4116,1587,'湘乡市','A',1,0,0),(4117,1587,'韶山市','A',1,0,0),(4118,1587,'湘潭县','A',1,0,0),(4119,1588,'岳阳楼区','A',1,0,0),(4120,1588,'云溪区','A',1,0,0),(4121,1588,'君山区','A',1,0,0),(4122,1588,'汨罗市','A',1,0,0),(4123,1588,'临湘市','A',1,0,0),(4124,1588,'岳阳县','A',1,0,0),(4125,1588,'华容县','A',1,0,0),(4126,1588,'湘阴县','A',1,0,0),(4127,1588,'平江县','A',1,0,0),(4128,1589,'北湖区','A',1,0,0),(4129,1589,'苏仙区','A',1,0,0),(4130,1589,'资兴市','A',1,0,0),(4131,1589,'桂阳县','A',1,0,0),(4132,1589,'宜章县','A',1,0,0),(4133,1589,'永兴县','A',1,0,0),(4134,1589,'嘉禾县','A',1,0,0),(4135,1589,'临武县','A',1,0,0),(4136,1589,'汝城县','A',1,0,0),(4137,1589,'桂东县','A',1,0,0),(4138,1589,'安仁县','A',1,0,0),(4139,1590,'双清区','A',1,0,0),(4140,1590,'大祥区','A',1,0,0),(4141,1590,'北塔区','A',1,0,0),(4142,1590,'武冈市','A',1,0,0),(4143,1590,'邵东县','A',1,0,0),(4144,1590,'新邵县','A',1,0,0),(4145,1590,'邵阳县','A',1,0,0),(4146,1590,'隆回县','A',1,0,0),(4147,1590,'洞口县','A',1,0,0),(4148,1590,'绥宁县','A',1,0,0),(4149,1590,'新宁县','A',1,0,0),(4150,1590,'城步自治县','A',1,0,0),(4151,1591,'鹤城区','A',1,0,0),(4152,1591,'洪江市','A',1,0,0),(4153,1591,'沅陵县','A',1,0,0),(4154,1591,'辰溪县','A',1,0,0),(4155,1591,'溆浦县','A',1,0,0),(4156,1591,'中方县','A',1,0,0),(4157,1591,'会同县','A',1,0,0),(4158,1591,'麻阳苗族自治县','A',1,0,0),(4159,1591,'新晃侗族自治县','A',1,0,0),(4160,1591,'芷江侗族自治县','A',1,0,0),(4161,1591,'靖州苗族侗族自治县','A',1,0,0),(4162,1591,'通道侗族自治县','A',1,0,0),(4163,1592,'零陵区','A',1,0,0),(4164,1592,'冷水滩区','A',1,0,0),(4165,1592,'祁阳县','A',1,0,0),(4166,1592,'东安县','A',1,0,0),(4167,1592,'双牌县','A',1,0,0),(4168,1592,'道县','A',1,0,0),(4169,1592,'江永县','A',1,0,0),(4170,1592,'宁远县','A',1,0,0),(4171,1592,'蓝山县','A',1,0,0),(4172,1592,'新田县','A',1,0,0),(4173,1592,'江华瑶族自治县','A',1,0,0),(4174,1593,'娄星区','A',1,0,0),(4175,1593,'冷水江市','A',1,0,0),(4176,1593,'涟源市','A',1,0,0),(4177,1593,'双峰县','A',1,0,0),(4178,1593,'新化县','A',1,0,0),(4179,1594,'吉首市','A',1,0,0),(4180,1594,'泸溪县','A',1,0,0),(4181,1594,'凤凰县','A',1,0,0),(4182,1594,'花垣县','A',1,0,0),(4183,1594,'保靖县','A',1,0,0),(4184,1594,'古丈县','A',1,0,0),(4185,1594,'永顺县','A',1,0,0),(4186,1594,'龙山县','A',1,0,0),(4187,1582,'芙蓉区','A',1,0,0),(4188,1582,'天心区','A',1,0,0),(4189,1582,'岳麓区','A',1,0,0),(4190,1582,'开福区','A',1,0,0),(4191,1582,'雨花区','A',1,0,0),(4192,1582,'浏阳市','A',1,0,0),(4193,1582,'长沙县','A',1,0,0),(4194,1582,'望城县','A',1,0,0),(4195,1582,'宁乡县','A',1,0,0),(4197,1621,'新邱区','A',1,0,0),(4198,1621,'太平区','A',1,0,0),(4199,1621,'清河门区','A',1,0,0),(4200,1621,'细河区','A',1,0,0),(4201,1621,'阜新蒙古族自治县','A',1,0,0),(4202,1621,'彰武县','A',1,0,0),(4203,1609,'西岗区','A',1,0,0),(4204,1609,'中山区','A',1,0,0),(4205,1609,'沙河口区','A',1,0,0),(4206,1609,'甘井子区','A',1,0,0),(4207,1609,'旅顺口区','A',1,0,0),(4208,1609,'金州区','A',1,0,0),(4209,1609,'瓦房店市','A',1,0,0),(4210,1609,'普兰店市','A',1,0,0),(4211,1609,'庄河市','A',1,0,0),(4212,1609,'长海县','A',1,0,0),(4213,1610,'铁东区','A',1,0,0),(4214,1610,'铁西区','A',1,0,0),(4215,1610,'立山区','A',1,0,0),(4216,1610,'千山区','A',1,0,0),(4217,1610,'海城市','A',1,0,0),(4218,1610,'台安县','A',1,0,0),(4219,1610,'岫岩满族自治县','A',1,0,0),(4220,1611,'太和区','A',1,0,0),(4221,1611,'古塔区','A',1,0,0),(4222,1611,'凌河区','A',1,0,0),(4223,1611,'凌海市','A',1,0,0),(4224,1611,'北镇市','A',1,0,0),(4225,1611,'黑山县','A',1,0,0),(4226,1611,'义县','A',1,0,0),(4227,1612,'顺城区','A',1,0,0),(4228,1612,'新抚区','A',1,0,0),(4229,1612,'东洲区','A',1,0,0),(4230,1612,'望花区','A',1,0,0),(4231,1612,'抚顺县','A',1,0,0),(4232,1612,'新宾满族自治县','A',1,0,0),(4233,1612,'清原满族自治县','A',1,0,0),(4234,1613,'站前区','A',1,0,0),(4235,1613,'西市区','A',1,0,0),(4236,1613,'鲅鱼圈区','A',1,0,0),(4237,1613,'老边区','A',1,0,0),(4238,1613,'盖州市','A',1,0,0),(4239,1613,'大石桥市','A',1,0,0),(4240,1614,'兴隆台区','A',1,0,0),(4241,1614,'双台子区','A',1,0,0),(4242,1614,'大洼县','A',1,0,0),(4243,1614,'盘山县','A',1,0,0),(4244,1615,'双塔区','A',1,0,0),(4245,1615,'龙城区','A',1,0,0),(4246,1615,'北票市','A',1,0,0),(4247,1615,'凌源市','A',1,0,0),(4248,1615,'朝阳县','A',1,0,0),(4249,1615,'建平县','A',1,0,0),(4250,1615,'喀喇沁左翼蒙古族自治县','A',1,0,0),(4251,1616,'振兴区','A',1,0,0),(4252,1616,'元宝区','A',1,0,0),(4253,1616,'振安区','A',1,0,0),(4254,1616,'东港市','A',1,0,0),(4255,1616,'凤城市','A',1,0,0),(4256,1616,'宽甸满族自治县','A',1,0,0),(4257,1617,'白塔区','A',1,0,0),(4258,1617,'文圣区','A',1,0,0),(4259,1617,'宏伟区','A',1,0,0),(4260,1617,'弓长岭区','A',1,0,0),(4261,1617,'太子河区','A',1,0,0),(4262,1617,'灯塔市','A',1,0,0),(4263,1617,'辽阳县','A',1,0,0),(4264,1618,'平山区','A',1,0,0),(4265,1618,'溪湖区','A',1,0,0),(4266,1618,'明山区','A',1,0,0),(4267,1618,'南芬区','A',1,0,0),(4268,1618,'本溪满族自治县','A',1,0,0),(4269,1618,'桓仁满族自治县','A',1,0,0),(4270,1619,'龙港区','A',1,0,0),(4271,1619,'连山区','A',1,0,0),(4272,1619,'南票区','A',1,0,0),(4273,1619,'兴城市','A',1,0,0),(4274,1619,'绥中县','A',1,0,0),(4275,1619,'建昌县','A',1,0,0),(4276,1620,'银州区','A',1,0,0),(4277,1620,'清河区','A',1,0,0),(4278,1620,'调兵山市','A',1,0,0),(4279,1620,'开原市','A',1,0,0),(4280,1620,'铁岭县','A',1,0,0),(4281,1620,'西丰县','A',1,0,0),(4282,1620,'昌图县','A',1,0,0),(4283,1608,'沈河区','A',1,0,0),(4284,1608,'和平区','A',1,0,0),(4285,1608,'大东区','A',1,0,0),(4286,1608,'皇姑区','A',1,0,0),(4287,1608,'铁西区','A',1,0,0),(4288,1608,'苏家屯区','A',1,0,0),(4289,1608,'东陵区','A',1,0,0),(4290,1608,'沈北新区','A',1,0,0),(4291,1608,'于洪区','A',1,0,0),(4292,1608,'新民市','A',1,0,0),(4293,1608,'辽中县','A',1,0,0),(4294,1608,'康平县','A',1,0,0),(4295,1608,'法库县','A',1,0,0),(4297,1454,'润州区','R',1,0,0),(4298,1454,'丹徒区','D',1,0,0),(4299,1454,'丹阳市','D',1,0,0),(4300,1454,'扬中市','Y',1,0,0),(4301,1454,'句容市','J',1,0,0),(4302,1443,'玄武区','X',1,0,0),(4303,1443,'白下区','B',1,0,0),(4304,1443,'秦淮区','Q',1,0,0),(4305,1443,'建邺区','J',1,0,0),(4306,1443,'鼓楼区','G',1,0,0),(4307,1443,'下关区','X',1,0,0),(4308,1443,'浦口区','P',1,0,0),(4309,1443,'栖霞区','Q',1,0,0),(4310,1443,'雨花台区','Y',1,0,0),(4311,1443,'江宁区','J',1,0,0),(4312,1443,'六合区','L',1,0,0),(4313,1443,'溧水县','L',1,0,0),(4314,1443,'高淳县','G',1,0,0),(4315,1444,'崇安区','C',1,0,0),(4316,1444,'南长区','N',1,0,0),(4317,1444,'北塘区','B',1,0,0),(4318,1444,'滨湖区','B',1,0,0),(4319,1444,'锡山区','X',1,0,0),(4320,1444,'惠山区','H',1,0,0),(4321,1444,'江阴市','J',1,0,0),(4322,1444,'宜兴市','Y',1,0,0),(4323,1445,'钟楼区','Z',1,0,0),(4324,1445,'天宁区','T',1,0,0),(4325,1445,'戚墅堰区','Q',1,0,0),(4326,1445,'新北区','X',1,0,0),(4327,1445,'武进区','W',1,0,0),(4328,1445,'溧阳市','L',1,0,0),(4329,1445,'金坛市','J',1,0,0),(4330,1446,'云龙区','Y',1,0,0),(4331,1446,'鼓楼区','G',1,0,0),(4332,1446,'九里区','J',1,0,0),(4333,1446,'贾汪区','J',1,0,0),(4334,1446,'泉山区','Q',1,0,0),(4335,1446,'新沂市','X',1,0,0),(4336,1446,'邳州市','P',1,0,0),(4337,1446,'丰县','F',1,0,0),(4338,1446,'沛县','P',1,0,0),(4339,1446,'铜山县','T',1,0,0),(4340,1446,'睢宁县','S',1,0,0),(4341,1447,'崇川区','C',1,0,0),(4342,1447,'港闸区','G',1,0,0),(4343,1447,'启东市','Q',1,0,0),(4344,1447,'如皋市','R',1,0,0),(4345,1447,'通州市','T',1,0,0),(4346,1447,'海门市','H',1,0,0),(4347,1447,'海安县','H',1,0,0),(4348,1447,'如东县','R',1,0,0),(4349,1448,'广陵区','G',1,0,0),(4350,1448,'邗江区','H',1,0,0),(4351,1448,'维扬区','W',1,0,0),(4352,1448,'仪征市','Y',1,0,0),(4353,1448,'高邮市','G',1,0,0),(4354,1448,'江都市','J',1,0,0),(4355,1448,'宝应县','B',1,0,0),(4356,1449,'亭湖区','T',1,0,0),(4357,1449,'盐都区','Y',1,0,0),(4358,1449,'东台市','D',1,0,0),(4359,1449,'大丰市','D',1,0,0),(4360,1449,'响水县','X',1,0,0),(4361,1449,'滨海县','B',1,0,0),(4362,1449,'阜宁县','F',1,0,0),(4363,1449,'射阳县','S',1,0,0),(4364,1449,'建湖县','J',1,0,0),(4365,1450,'清河区','Q',1,0,0),(4366,1450,'清浦区','Q',1,0,0),(4367,1450,'楚州区','C',1,0,0),(4368,1450,'淮阴区','H',1,0,0),(4369,1450,'涟水县','L',1,0,0),(4370,1450,'洪泽县','H',1,0,0),(4371,1450,'盱眙县','X',1,0,0),(4372,1450,'金湖县','J',1,0,0),(4373,1451,'新浦区','X',1,0,0),(4374,1451,'连云区','L',1,0,0),(4375,1451,'海州区','H',1,0,0),(4376,1451,'赣榆县','G',1,0,0),(4377,1451,'东海县','D',1,0,0),(4378,1451,'灌云县','G',1,0,0),(4379,1451,'灌南县','G',1,0,0),(4380,1452,'海陵区','H',1,0,0),(4381,1452,'高港区','G',1,0,0),(4382,1452,'兴化市','X',1,0,0),(4383,1452,'靖江市','J',1,0,0),(4384,1452,'泰兴市','T',1,0,0),(4385,1452,'姜堰市','J',1,0,0),(4386,1453,'宿城区','S',1,0,0),(4387,1453,'宿豫区','S',1,0,0),(4388,1453,'沭阳县','S',1,0,0),(4389,1453,'泗阳县','S',1,0,0),(4390,1453,'泗洪县','S',1,0,0),(4391,1442,'金阊区','J',1,0,0),(4392,1442,'沧浪区','C',1,0,0),(4393,1442,'平江区','P',1,0,0),(4394,1442,'虎丘区','H',1,0,0),(4395,1442,'吴中区','W',1,0,0),(4396,1442,'相城区','X',1,0,0),(4397,1442,'常熟市','C',1,0,0),(4398,1442,'张家港市','Z',1,0,0),(4399,1442,'昆山市','K',1,0,0),(4400,1442,'吴江市','W',1,0,0),(4401,1442,'太仓市','T',1,0,0),(4403,1606,'贵溪市','A',1,0,0),(4404,1606,'余江县','A',1,0,0),(4405,1597,'章贡区','A',1,0,0),(4406,1597,'瑞金市','A',1,0,0),(4407,1597,'南康市','A',1,0,0),(4408,1597,'赣县','A',1,0,0),(4409,1597,'信丰县','A',1,0,0),(4410,1597,'大余县','A',1,0,0),(4411,1597,'上犹县','A',1,0,0),(4412,1597,'崇义县','A',1,0,0),(4413,1597,'安远县','A',1,0,0),(4414,1597,'龙南县','A',1,0,0),(4415,1597,'定南县','A',1,0,0),(4416,1597,'全南县','A',1,0,0),(4417,1597,'宁都县','A',1,0,0),(4418,1597,'于都县','A',1,0,0),(4419,1597,'兴国县','A',1,0,0),(4420,1597,'会昌县','A',1,0,0),(4421,1597,'寻乌县','A',1,0,0),(4422,1597,'石城县','A',1,0,0),(4423,1598,'浔阳区','A',1,0,0),(4424,1598,'庐山区','A',1,0,0),(4425,1598,'瑞昌市','A',1,0,0),(4426,1598,'九江县','A',1,0,0),(4427,1598,'武宁县','A',1,0,0),(4428,1598,'修水县','A',1,0,0),(4429,1598,'永修县','A',1,0,0),(4430,1598,'德安县','A',1,0,0),(4431,1598,'星子县','A',1,0,0),(4432,1598,'都昌县','A',1,0,0),(4433,1598,'湖口县','A',1,0,0),(4434,1598,'彭泽县','A',1,0,0),(4435,1599,'袁州区','A',1,0,0),(4436,1599,'丰城市','A',1,0,0),(4437,1599,'樟树市','A',1,0,0),(4438,1599,'高安市','A',1,0,0),(4439,1599,'奉新县','A',1,0,0),(4440,1599,'万载县','A',1,0,0),(4441,1599,'上高县','A',1,0,0),(4442,1599,'宜丰县','A',1,0,0),(4443,1599,'靖安县','A',1,0,0),(4444,1599,'铜鼓县','A',1,0,0),(4445,1600,'吉州区','A',1,0,0),(4446,1600,'青原区','A',1,0,0),(4447,1600,'井冈山市','A',1,0,0),(4448,1600,'吉安县','A',1,0,0),(4449,1600,'吉水县','A',1,0,0),(4450,1600,'峡江县','A',1,0,0),(4451,1600,'新干县','A',1,0,0),(4452,1600,'永丰县','A',1,0,0),(4453,1600,'泰和县','A',1,0,0),(4454,1600,'遂川县','A',1,0,0),(4455,1600,'万安县','A',1,0,0),(4456,1600,'安福县','A',1,0,0),(4457,1600,'永新县','A',1,0,0),(4458,1601,'信州区','A',1,0,0),(4459,1601,'德兴市','A',1,0,0),(4460,1601,'上饶县','A',1,0,0),(4461,1601,'广丰县','A',1,0,0),(4462,1601,'玉山县','A',1,0,0),(4463,1601,'铅山县','A',1,0,0),(4464,1601,'横峰县','A',1,0,0),(4465,1601,'弋阳县','A',1,0,0),(4466,1601,'余干县','A',1,0,0),(4467,1601,'鄱阳县','A',1,0,0),(4468,1601,'万年县','A',1,0,0),(4469,1601,'婺源县','A',1,0,0),(4470,1602,'安源区','A',1,0,0),(4471,1602,'湘东区','A',1,0,0),(4472,1602,'莲花县','A',1,0,0),(4473,1602,'芦溪县','A',1,0,0),(4474,1602,'上栗县','A',1,0,0),(4475,1603,'临川区','A',1,0,0),(4476,1603,'南城县','A',1,0,0),(4477,1603,'黎川县','A',1,0,0),(4478,1603,'南丰县','A',1,0,0),(4479,1603,'崇仁县','A',1,0,0),(4480,1603,'乐安县','A',1,0,0),(4481,1603,'宜黄县','A',1,0,0),(4482,1603,'金溪县','A',1,0,0),(4483,1603,'资溪县','A',1,0,0),(4484,1603,'东乡县','A',1,0,0),(4485,1603,'广昌县','A',1,0,0),(4486,1604,'珠山区','A',1,0,0),(4487,1604,'昌江区','A',1,0,0),(4488,1604,'乐平市','A',1,0,0),(4489,1604,'浮梁县','A',1,0,0),(4490,1605,'渝水区','A',1,0,0),(4491,1605,'分宜县','A',1,0,0),(4492,1596,'东湖区','A',1,0,0),(4493,1596,'西湖区','A',1,0,0),(4494,1596,'青云谱区','A',1,0,0),(4495,1596,'湾里区','A',1,0,0),(4496,1596,'青山湖区','A',1,0,0),(4497,1596,'南昌县','A',1,0,0),(4498,1596,'新建县','A',1,0,0),(4499,1596,'安义县','A',1,0,0),(4500,1596,'进贤县','A',1,0,0),(4502,1523,'漳平市','Z',1,0,0),(4503,1523,'长汀县','C',1,0,0),(4504,1523,'永定县','Y',1,0,0),(4505,1523,'上杭县','S',1,0,0),(4506,1523,'武平县','W',1,0,0),(4507,1523,'连城县','L',1,0,0),(4508,1522,'延平区','Y',1,0,0),(4509,1522,'邵武市','S',1,0,0),(4510,1522,'武夷山市','W',1,0,0),(4511,1522,'建瓯市','J',1,0,0),(4512,1522,'建阳市','J',1,0,0),(4513,1522,'顺昌县','S',1,0,0),(4514,1522,'浦城县','P',1,0,0),(4515,1522,'光泽县','G',1,0,0),(4516,1522,'松溪县','S',1,0,0),(4517,1522,'政和县','Z',1,0,0),(4518,1521,'梅列区','M',1,0,0),(4519,1521,'三元区','S',1,0,0),(4520,1521,'永安市','Y',1,0,0),(4521,1521,'明溪县','M',1,0,0),(4522,1521,'清流县','Q',1,0,0),(4523,1521,'宁化县','N',1,0,0),(4524,1521,'大田县','D',1,0,0),(4525,1521,'尤溪县','L',1,0,0),(4526,1521,'沙县','S',1,0,0),(4527,1521,'将乐县','J',1,0,0),(4528,1521,'泰宁县','T',1,0,0),(4529,1521,'建宁县','J',1,0,0),(4530,1520,'蕉城区','J',1,0,0),(4531,1520,'福安市','F',1,0,0),(4532,1520,'福鼎市','F',1,0,0),(4533,1520,'霞浦县','X',1,0,0),(4534,1520,'古田县','G',1,0,0),(4535,1520,'屏南县','P',1,0,0),(4536,1520,'寿宁县','S',1,0,0),(4537,1520,'周宁县','Z',1,0,0),(4538,1520,'柘荣县','Z',1,0,0),(4539,1519,'芗城区','X',1,0,0),(4540,1519,'龙文区','L',1,0,0),(4541,1519,'龙海市','L',1,0,0),(4542,1519,'云霄县','Y',1,0,0),(4543,1519,'漳浦县','Z',1,0,0),(4544,1519,'诏安县','Z',1,0,0),(4545,1519,'长泰县','C',1,0,0),(4546,1519,'东山县','D',1,0,0),(4547,1519,'南靖县','N',1,0,0),(4548,1519,'平和县','P',1,0,0),(4549,1519,'华安县','H',1,0,0),(4550,1518,'城厢区','C',1,0,0),(4551,1518,'涵江区','H',1,0,0),(4552,1518,'荔城区','L',1,0,0),(4553,1518,'秀屿区','X',1,0,0),(4554,1518,'仙游县','X',1,0,0),(4555,1517,'鲤城区','L',1,0,0),(4556,1517,'丰泽区','F',1,0,0),(4557,1517,'洛江区','L',1,0,0),(4558,1517,'泉港区','Q',1,0,0),(4559,1517,'石狮市','S',1,0,0),(4560,1517,'晋江市','J',1,0,0),(4561,1517,'南安市','N',1,0,0),(4562,1517,'惠安县','H',1,0,0),(4563,1517,'安溪县','A',1,0,0),(4564,1517,'永春县','Y',1,0,0),(4565,1517,'德化县','D',1,0,0),(4566,1517,'金门县','J',1,0,0),(4567,1516,'思明区','S',1,0,0),(4568,1516,'海沧区','H',1,0,0),(4569,1516,'湖里区','H',1,0,0),(4570,1516,'集美区','J',1,0,0),(4571,1516,'同安区','T',1,0,0),(4572,1516,'翔安区','X',1,0,0),(4573,1515,'鼓楼区','G',1,0,0),(4574,1515,'台江区','T',1,0,0),(4575,1515,'仓山区','C',1,0,0),(4576,1515,'马尾区','M',1,0,0),(4577,1515,'晋安区','J',1,0,0),(4578,1515,'福清市','F',1,0,0),(4579,1515,'长乐市','C',1,0,0),(4580,1515,'闽侯县','A',1,0,0),(4581,1515,'连江县','L',1,0,0),(4582,1515,'罗源县','L',1,0,0),(4583,1515,'闽清县','M',1,0,0),(4584,1515,'永泰县','Y',1,0,0),(4585,1515,'平潭县','P',1,0,0),(4588,1509,'郁南县','Y',1,0,0),(4589,1509,'罗定市','L',1,0,0),(4590,1509,'新兴县','X',1,0,0),(4591,1509,'云安县','Y',1,0,0),(4592,1503,'揭阳市','J',1,0,0),(4593,1503,'榕城区','R',1,0,0),(4594,1503,'揭西县','J',1,0,0),(4595,1503,'普宁市','P',1,0,0),(4596,1503,'揭东县','J',1,0,0),(4597,1503,'惠来县','H',1,0,0),(4598,1511,'潮州市','C',1,0,0),(4599,1511,'湘桥区','X',1,0,0),(4600,1511,'饶平县','R',1,0,0),(4601,1511,'潮安县','C',1,0,0),(4602,1495,'中山','Z',1,0,0),(4603,1493,'东莞','D',1,0,0),(4604,1505,'清远市','Q',1,0,0),(4605,1505,'清城区','Q',1,0,0),(4606,1505,'阳山县','Y',1,0,0),(4607,1505,'连南瑶族自治县','L',1,0,0),(4608,1505,'英德市','Y',1,0,0),(4609,1505,'连州市','L',1,0,0),(4610,1505,'佛冈县','F',1,0,0),(4611,1505,'连山壮族瑶族自治县','L',1,0,0),(4612,1505,'清新县','Q',1,0,0),(4613,1506,'阳江市','Y',1,0,0),(4614,1506,'江城区','J',1,0,0),(4615,1506,'阳东县','Y',1,0,0),(4616,1506,'阳春市','Y',1,0,0),(4617,1506,'阳西县','Y',1,0,0),(4618,1510,'汕尾市','S',1,0,0),(4619,1510,'城区','C',1,0,0),(4620,1510,'陆河县','L',1,0,0),(4621,1510,'陆丰市','L',1,0,0),(4622,1510,'海丰县','H',1,0,0),(4623,1508,'河源市','H',1,0,0),(4624,1508,'源城区','Y',1,0,0),(4625,1508,'龙川县','L',1,0,0),(4626,1508,'和平县','H',1,0,0),(4627,1508,'东源县','A',1,0,0),(4628,1508,'紫金县','Z',1,0,0),(4629,1508,'连平县','L',1,0,0),(4630,1504,'梅州市','A',1,0,0),(4631,1504,'梅江区','A',1,0,0),(4632,1504,'大埔县','A',1,0,0),(4633,1504,'五华县','A',1,0,0),(4634,1504,'蕉岭县','A',1,0,0),(4635,1504,'兴宁市','A',1,0,0),(4636,1504,'梅县','A',1,0,0),(4637,1504,'丰顺县','A',1,0,0),(4638,1504,'平远县','A',1,0,0),(4639,1497,'惠州市','H',1,0,0),(4640,1497,'惠城区','H',1,0,0),(4641,1497,'博罗县','B',1,0,0),(4642,1497,'龙门县','L',1,0,0),(4643,1497,'惠阳区','H',1,0,0),(4644,1497,'惠东县','H',1,0,0),(4645,1500,'湛江市','Z',1,0,0),(4646,1500,'赤坎区','C',1,0,0),(4647,1500,'坡头区','P',1,0,0),(4648,1500,'遂溪县','S',1,0,0),(4649,1500,'廉江市','L',1,0,0),(4650,1500,'吴川市','W',1,0,0),(4651,1500,'霞山区','X',1,0,0),(4652,1500,'麻章区','M',1,0,0),(4653,1500,'徐闻县','X',1,0,0),(4654,1500,'雷州市','L',1,0,0),(4655,1501,'肇庆市','Z',1,0,0),(4656,1501,'端州区','D',1,0,0),(4657,1501,'广宁县','G',1,0,0),(4658,1501,'封开县','F',1,0,0),(4659,1501,'高要市','G',1,0,0),(4660,1501,'四会市','S',1,0,0),(4661,1501,'鼎湖区','D',1,0,0),(4662,1501,'怀集县','H',1,0,0),(4663,1501,'德庆县','D',1,0,0),(4664,1502,'茂名市','M',1,0,0),(4665,1502,'茂南区','M',1,0,0),(4666,1502,'电白县','D',1,0,0),(4667,1502,'化州市','H',1,0,0),(4668,1502,'信宜市','X',1,0,0),(4669,1502,'茂港区','M',1,0,0),(4670,1502,'高州市','G',1,0,0),(4671,1499,'汕头市','S',1,0,0),(4672,1499,'龙湖区','L',1,0,0),(4673,1499,'濠江区','H',1,0,0),(4674,1499,'潮南区','C',1,0,0),(4675,1499,'澄海区','C',1,0,0),(4676,1499,'金平区','J',1,0,0),(4677,1499,'潮阳区','C',1,0,0),(4678,1499,'南澳县','N',1,0,0),(4679,1498,'江门市','J',1,0,0),(4680,1498,'蓬江区','P',1,0,0),(4681,1498,'新会区','X',1,0,0),(4682,1498,'开平市','K',1,0,0),(4683,1498,'恩平市','E',1,0,0),(4684,1498,'江海区','J',1,0,0),(4685,1498,'台山市','T',1,0,0),(4686,1498,'鹤山市','H',1,0,0),(4687,1494,'佛山市','F',1,0,0),(4688,1494,'禅城区','C',1,0,0),(4689,1494,'顺德区','S',1,0,0),(4690,1494,'高明区','G',1,0,0),(4691,1494,'南海区','N',1,0,0),(4692,1494,'三水区','S',1,0,0),(4693,1496,'珠海市','Z',1,0,0),(4694,1496,'香洲区','X',1,0,0),(4695,1496,'金湾区','J',1,0,0),(4696,1496,'斗门区','D',1,0,0),(4697,1492,'广州市','G',1,0,0),(4698,1492,'东山区','D',1,0,0),(4699,1492,'越秀区','Y',1,0,0),(4700,1492,'天河区','T',1,0,0),(4701,1492,'白云区','B',1,0,0),(4702,1492,'番禺区','F',1,0,0),(4703,1492,'增城市','Z',1,0,0),(4704,1492,'从化市','C',1,0,0),(4705,1492,'荔湾区','L',1,0,0),(4706,1492,'海珠区','H',1,0,0),(4707,1492,'芳村区','F',1,0,0),(4708,1492,'黄埔区','H',1,0,0),(4709,1492,'花都区','H',1,0,0),(4710,1507,'韶关市','S',1,0,0),(4711,1507,'武江区','W',1,0,0),(4712,1507,'曲江区','Q',1,0,0),(4713,1507,'仁化县','R',1,0,0),(4714,1507,'乳源瑶族自治县','R',1,0,0),(4715,1507,'乐昌市','L',1,0,0),(4716,1507,'南雄市','N',1,0,0),(4717,1507,'浈江区','Z',1,0,0),(4718,1507,'始兴县','S',1,0,0),(4719,1507,'翁源县','W',1,0,0),(4720,1507,'新丰县','X',1,0,0),(4721,1491,'深圳市','S',1,0,0),(4722,1491,'罗湖区','L',1,0,0),(4723,1491,'南山区','N',1,0,0),(4724,1491,'龙岗区','L',1,0,0),(4725,1491,'盐田区','Y',1,0,0),(4726,1491,'福田区','F',1,0,0),(4727,1491,'宝安区','B',1,0,0);

/*Table structure for table `comclass` */

DROP TABLE IF EXISTS `comclass`;

CREATE TABLE `comclass` (
  `id` int(11) NOT NULL auto_increment,
  `keyid` int(11) NOT NULL,
  `name` varchar(50) NOT NULL,
  `variable` varchar(50) default NULL,
  `sort` int(11) default NULL,
  PRIMARY KEY  (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=113 DEFAULT CHARSET=gbk;

/*Data for the table `comclass` */

insert  into `comclass`(`id`,`keyid`,`name`,`variable`,`sort`) values (112,39,'未婚',NULL,2),(75,0,'企业反馈类型','job_message',0),(10,0,'工作经验','job_exp',0),(12,10,'应届毕业生','',2),(13,10,'1年以上','',3),(14,10,'2年以上','',4),(15,10,'3年以上','',5),(16,10,'5年以上','',6),(17,10,'8年以上','',7),(18,10,'10年以上','',8),(19,0,'企业性质','job_pr',0),(20,19,'外资企业','',0),(21,19,'合资企业','',1),(22,19,'私营企业','',2),(23,19,'民营企业','',3),(24,19,'股份制企业','',4),(25,19,'集体企业','',4),(26,0,'企业规模','job_mun',0),(27,26,'10人以下','',0),(28,26,'10-50人','',1),(29,26,'50-200人','',2),(30,26,'200-500人','',3),(31,26,'500-1000人','',4),(32,26,'1000人以上','',5),(33,0,'招聘人数','job_number',0),(34,0,'薪水待遇','job_salary',0),(35,0,'工作性质','job_type',0),(36,0,'到岗时间','job_report',0),(37,0,'性别','job_sex',0),(38,0,'教育程度','job_edu',0),(39,0,'婚姻状况','job_marriage',0),(40,33,'若干','',0),(41,33,'1-2人','',1),(42,33,'3-4人','',2),(43,33,'5-6人','',3),(44,33,'7-8人','',4),(45,33,'9-10人','',5),(46,34,'面议','',0),(47,34,'1000以下','',1),(48,34,'1000 - 1999','',2),(49,34,'3000 - 4499','',4),(50,34,'4500 - 5999','',5),(51,34,'6000 - 7999','',6),(52,34,'8000 - 9999','',7),(53,34,'10000及以上','',9),(54,35,'不限','',0),(55,35,'全职','',1),(56,35,'兼职','',2),(57,36,'不限','',0),(58,36,'1周以内','',1),(59,36,'2周以内','',2),(60,36,'3周以内','',3),(61,36,'1个月之内','',4),(62,37,'不限','',0),(63,37,'男','',1),(64,37,'女','',2),(65,38,'不限','',0),(66,38,'高中','',1),(67,38,'中专','',2),(68,38,'大专','',3),(69,38,'本科','',4),(70,38,'硕士','',5),(71,38,'博士','',6),(72,39,'不限','',0),(73,39,'已婚','',1),(76,75,'建议','',1),(77,75,'咨询4','',1),(78,75,'购买','',2),(79,19,'上市公司','',0),(80,19,'国家机关','',0),(81,19,'事业单位','',0),(82,19,'其他','',0),(83,34,'2000 - 2999','',3),(84,0,'年龄要求','job_age',NULL),(85,84,'18-25岁',NULL,2),(86,84,'35岁以下',NULL,3),(87,84,'35岁以上',NULL,4),(88,84,'不限','',1),(89,0,'福利待遇','job_welfare',NULL),(90,89,'三险一金',NULL,0),(91,89,'五险一金',NULL,0),(92,89,'包吃住',NULL,0),(93,89,'综合补贴',NULL,0),(94,89,'年终奖金',NULL,0),(95,89,'奖励计划',NULL,0),(96,89,'销售奖金',NULL,0),(97,89,'休假制度',NULL,0),(98,89,'法定节假日',NULL,0),(99,0,'语言要求','job_lang',NULL),(100,99,'普通话一级',NULL,0),(101,99,'普通话二级',NULL,0),(102,99,'普通话三级',NULL,0),(103,99,'英语',NULL,0),(104,99,'韩语',NULL,0),(105,99,'德语',NULL,0),(106,99,'法语',NULL,0),(107,99,'西班牙语',NULL,0),(108,99,'粤语',NULL,0),(109,99,'闽南语',NULL,0),(110,99,'上海话',NULL,0);

/*Table structure for table `company` */

DROP TABLE IF EXISTS `company`;

CREATE TABLE `company` (
  `uid` int(11) NOT NULL,
  `name` varchar(25) default NULL,
  `cert` varchar(100) default '0',
  `hy` int(5) default NULL,
  `pr` int(5) default NULL,
  `provinceid` int(5) default NULL,
  `cityid` int(5) default NULL,
  `mun` int(3) default NULL,
  `sdate` varchar(20) default NULL,
  `money` int(11) default NULL,
  `content` text,
  `address` varchar(100) default NULL,
  `zip` varchar(10) default NULL,
  `linkman` varchar(50) default NULL,
  `linkjob` varchar(50) default NULL,
  `linkqq` varchar(20) default NULL,
  `linkphone` varchar(20) default NULL,
  `linktel` varchar(50) default NULL,
  `linkmail` varchar(150) default NULL,
  `website` varchar(100) default NULL,
  `x` varchar(100) default NULL,
  `y` varchar(100) default NULL,
  `logo` varchar(100) default NULL,
  `payd` int(8) default '0',
  `integral` int(10) default '0',
  `lastupdate` varchar(10) default NULL,
  `cloudtype` int(2) default NULL,
  `jobtime` int(11) default NULL,
  `r_status` int(2) default '0',
  `firmpic` varchar(100) default NULL,
  `rec` int(11) default '0',
  `hits` int(11) default '0',
  `ant_num` int(11) default '0',
  `pl_time` int(11) default NULL,
  `pl_status` int(11) default '1',
  `order` int(11) unsigned default '0',
  `admin_remark` varchar(255) default NULL
) ENGINE=MyISAM DEFAULT CHARSET=gbk;

/*Data for the table `company` */

insert  into `company`(`uid`,`name`,`cert`,`hy`,`pr`,`provinceid`,`cityid`,`mun`,`sdate`,`money`,`content`,`address`,`zip`,`linkman`,`linkjob`,`linkqq`,`linkphone`,`linktel`,`linkmail`,`website`,`x`,`y`,`logo`,`payd`,`integral`,`lastupdate`,`cloudtype`,`jobtime`,`r_status`,`firmpic`,`rec`,`hits`,`ant_num`,`pl_time`,`pl_status`,`order`,`admin_remark`) values (27,NULL,'0',NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,'第三方的方式',NULL,NULL,'13653361207',NULL,'',NULL,NULL,NULL,NULL,0,0,NULL,NULL,NULL,0,NULL,0,0,0,NULL,1,0,NULL),(28,NULL,'0',NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,'企业啦啦',NULL,NULL,'13653361207',NULL,'',NULL,NULL,NULL,NULL,0,0,NULL,NULL,NULL,0,NULL,0,0,0,NULL,1,0,NULL),(29,NULL,'0',NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,'企业啦啦爱上对方',NULL,NULL,'13653361207',NULL,'',NULL,NULL,NULL,NULL,0,0,NULL,NULL,NULL,0,NULL,0,0,0,NULL,1,0,NULL),(30,NULL,'0',NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,'企业',NULL,NULL,'13653361207',NULL,'',NULL,NULL,NULL,NULL,0,0,NULL,NULL,NULL,0,NULL,0,0,0,NULL,1,0,NULL),(31,NULL,'0',NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,'企业123',NULL,NULL,'13653361207',NULL,'',NULL,NULL,NULL,NULL,0,0,NULL,NULL,NULL,0,NULL,0,0,0,NULL,1,0,NULL),(77,NULL,'0',NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,'',NULL,NULL,NULL,NULL,0,0,NULL,NULL,NULL,0,NULL,0,0,0,NULL,1,0,NULL),(81,NULL,'0',NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,'',NULL,NULL,NULL,NULL,0,0,NULL,NULL,NULL,0,NULL,0,0,0,NULL,1,0,NULL),(82,NULL,'0',NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,'',NULL,NULL,NULL,NULL,0,0,NULL,NULL,NULL,0,NULL,0,0,0,NULL,1,0,NULL);

/*Table structure for table `company_cert` */

DROP TABLE IF EXISTS `company_cert`;

CREATE TABLE `company_cert` (
  `id` int(11) NOT NULL auto_increment,
  `uid` int(11) default NULL,
  `type` varchar(200) default NULL,
  `status` int(11) default '0',
  `step` int(11) default NULL,
  `check` varchar(200) default NULL,
  `check2` varchar(200) default NULL,
  `ctime` int(11) default NULL,
  `statusbody` varchar(100) default NULL,
  PRIMARY KEY  (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=gbk;

/*Data for the table `company_cert` */

/*Table structure for table `company_job` */

DROP TABLE IF EXISTS `company_job`;

CREATE TABLE `company_job` (
  `id` int(11) NOT NULL auto_increment,
  `uid` int(11) NOT NULL,
  `name` varchar(50) NOT NULL,
  `hy` int(5) default NULL,
  `job1` int(5) default NULL,
  `job1_son` int(5) default NULL,
  `job_post` int(5) default NULL,
  `provinceid` int(5) default NULL,
  `cityid` int(5) default NULL,
  `three_cityid` int(5) default NULL,
  `salary` int(5) default NULL,
  `type` int(5) NOT NULL,
  `number` int(2) NOT NULL,
  `exp` int(5) NOT NULL,
  `report` int(5) NOT NULL,
  `sex` int(5) NOT NULL,
  `edu` int(5) NOT NULL,
  `marriage` int(5) NOT NULL,
  `description` text NOT NULL,
  `sdate` int(11) NOT NULL,
  `edate` int(11) NOT NULL,
  `jobhits` int(10) NOT NULL default '0',
  `lastupdate` varchar(10) NOT NULL,
  `rec` int(2) default '0',
  `state` int(2) default '0',
  `statusbody` varchar(200) default '0',
  `age` int(11) default NULL,
  `lang` text,
  `welfare` text,
  `com_name` varchar(50) NOT NULL default '',
  `pr` int(5) default NULL,
  `mun` int(5) default NULL,
  `com_provinceid` int(5) default NULL,
  `rating` int(5) default NULL,
  `status` int(1) default '0',
  `urgent` int(1) default NULL,
  `r_status` int(1) default '0',
  `end_email` int(1) default '0',
  `rec_time` int(11) default NULL,
  `urgent_time` int(11) default NULL,
  `com_logo` varchar(100) default NULL,
  `autotype` int(11) default '0',
  `autotime` int(11) default '0',
  `is_link` int(11) default '1',
  `link_type` int(11) default '1',
  PRIMARY KEY  (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=gbk;

/*Data for the table `company_job` */

/*Table structure for table `company_job_link` */

DROP TABLE IF EXISTS `company_job_link`;

CREATE TABLE `company_job_link` (
  `id` int(11) NOT NULL auto_increment,
  `uid` int(11) default NULL,
  `jobid` int(11) default NULL,
  `link_man` varchar(100) default NULL,
  `link_moblie` varchar(20) default NULL,
  `email_type` int(5) default NULL,
  `is_email` int(2) default '0',
  `email` varchar(100) default NULL,
  PRIMARY KEY  (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=gbk;

/*Data for the table `company_job_link` */

/*Table structure for table `company_msg` */

DROP TABLE IF EXISTS `company_msg`;

CREATE TABLE `company_msg` (
  `id` int(11) NOT NULL auto_increment,
  `uid` int(11) default NULL,
  `cuid` int(11) default NULL,
  `content` text,
  `ctime` varchar(100) default NULL,
  `status` int(2) default NULL,
  `reply` text,
  `reply_time` int(11) default NULL,
  PRIMARY KEY  (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=gbk;

/*Data for the table `company_msg` */

/*Table structure for table `company_news` */

DROP TABLE IF EXISTS `company_news`;

CREATE TABLE `company_news` (
  `id` int(11) NOT NULL auto_increment,
  `uid` int(11) default '0',
  `title` varchar(200) default '0',
  `ctime` int(11) default '0',
  `body` text,
  `status` int(2) default '0',
  `statusbody` text,
  PRIMARY KEY  (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=gbk;

/*Data for the table `company_news` */

/*Table structure for table `company_order` */

DROP TABLE IF EXISTS `company_order`;

CREATE TABLE `company_order` (
  `id` int(11) NOT NULL auto_increment,
  `uid` int(11) NOT NULL,
  `order_id` varchar(18) default NULL,
  `order_type` varchar(25) default NULL,
  `order_price` double(18,2) NOT NULL,
  `order_time` int(10) NOT NULL,
  `order_state` int(2) NOT NULL,
  `order_remark` text,
  `order_bank` varchar(150) NOT NULL default '0',
  `type` int(1) default NULL,
  `rating` int(10) default NULL,
  `integral` int(11) default NULL,
  PRIMARY KEY  (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=gbk;

/*Data for the table `company_order` */

/*Table structure for table `company_pay` */

DROP TABLE IF EXISTS `company_pay`;

CREATE TABLE `company_pay` (
  `id` int(11) NOT NULL auto_increment,
  `order_id` varchar(18) default NULL,
  `order_price` decimal(10,2) default NULL,
  `pay_time` int(11) default NULL,
  `pay_state` int(2) default NULL,
  `com_id` int(10) default NULL,
  `pay_remark` varchar(255) default NULL,
  `type` int(1) default NULL,
  `pay_type` int(1) default NULL,
  PRIMARY KEY  (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=gbk;

/*Data for the table `company_pay` */

/*Table structure for table `company_product` */

DROP TABLE IF EXISTS `company_product`;

CREATE TABLE `company_product` (
  `id` int(11) NOT NULL auto_increment,
  `uid` int(11) default '0',
  `title` varchar(200) default '0',
  `pic` varchar(200) default '0',
  `body` text,
  `ctime` int(11) default '0',
  `status` int(2) default '0',
  `statusbody` text,
  PRIMARY KEY  (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=gbk;

/*Data for the table `company_product` */

/*Table structure for table `company_rating` */

DROP TABLE IF EXISTS `company_rating`;

CREATE TABLE `company_rating` (
  `id` int(6) NOT NULL auto_increment,
  `name` varchar(200) default NULL,
  `service_price` varchar(100) default NULL,
  `integral_buy` varchar(100) default NULL,
  `resume` int(5) default NULL,
  `job_num` int(11) default NULL,
  `interview` int(11) default NULL,
  `editjob_num` int(11) default NULL,
  `breakjob_num` int(11) default NULL,
  `talent_num` int(10) default NULL,
  `sort` int(10) default NULL,
  `display` int(1) default NULL,
  `explains` varchar(255) default NULL,
  `com_pic` varchar(100) default NULL,
  `com_color` varchar(100) default NULL,
  `type` int(2) default NULL,
  `category` int(2) default NULL,
  `service_time` int(11) default NULL,
  PRIMARY KEY  (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=16 DEFAULT CHARSET=gbk;

/*Data for the table `company_rating` */

insert  into `company_rating`(`id`,`name`,`service_price`,`integral_buy`,`resume`,`job_num`,`interview`,`editjob_num`,`breakjob_num`,`talent_num`,`sort`,`display`,`explains`,`com_pic`,`com_color`,`type`,`category`,`service_time`) values (3,'免费会员','0','0',5,3,10,1,2,5,0,1,'终生免费会员','upload/compic/20121226/13601426595.JPG','000000',1,1,NULL),(4,'铜牌会员','100','95',50,50,50,10,10,30,1,1,'铜牌会员','upload/compic/20121226/13611599075.JPG','FF2B1C',1,1,NULL),(5,'银牌会员','280','250',180,600,80,6,10,80,2,1,'银牌会员','upload/compic/20121226/13662730644.JPG','FFBC21',1,1,NULL),(6,'金牌会员','1000','900',800,888,800,100,100,800,3,1,'金牌会员','','FF1C14',1,1,NULL),(8,'月会员','300','270',0,0,0,0,0,NULL,7,1,'','upload/compic/20121226/13611599075.JPG','000000',2,1,NULL),(9,'半年会员','600','560',0,0,0,0,0,NULL,8,1,'半年会员','','FFFFFF',2,1,180),(10,'年会员','500','1000',0,0,0,0,0,NULL,9,1,'年会员','','FFABEB',2,1,360);

/*Table structure for table `company_show` */

DROP TABLE IF EXISTS `company_show`;

CREATE TABLE `company_show` (
  `id` int(11) NOT NULL auto_increment,
  `title` varchar(200) default NULL,
  `picurl` varchar(200) default NULL,
  `body` varchar(200) default NULL,
  `ctime` varchar(200) default NULL,
  `uid` varchar(200) default NULL,
  PRIMARY KEY  (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=gbk;

/*Data for the table `company_show` */

/*Table structure for table `company_statis` */

DROP TABLE IF EXISTS `company_statis`;

CREATE TABLE `company_statis` (
  `uid` int(11) NOT NULL,
  `pay` double(10,2) NOT NULL default '0.00',
  `integral` varchar(10) NOT NULL default '0',
  `job` int(10) unsigned default '0',
  `status0` int(5) unsigned NOT NULL default '0',
  `status1` int(5) unsigned NOT NULL default '0',
  `status2` int(5) unsigned NOT NULL default '0',
  `status3` int(5) NOT NULL default '0',
  `sq_job` int(6) unsigned NOT NULL,
  `fav_job` int(6) unsigned NOT NULL,
  `rating` int(5) unsigned default NULL,
  `rating_name` varchar(100) default NULL,
  `vip_etime` varchar(100) default '0',
  `all_pay` double(10,2) NOT NULL,
  `consum_pay` double(10,2) NOT NULL,
  `talent_num` int(11) default NULL,
  `invite_resume` int(10) default NULL,
  `comtpl` varchar(100) default '0',
  `comtpl_all` varchar(100) default NULL,
  `job_num` int(11) default '0',
  `editjob_num` int(11) default '0',
  `breakjob_num` int(11) default '0',
  `down_resume` int(10) default '0',
  `autotime` int(11) default '0'
) ENGINE=MyISAM DEFAULT CHARSET=gbk;

/*Data for the table `company_statis` */

insert  into `company_statis`(`uid`,`pay`,`integral`,`job`,`status0`,`status1`,`status2`,`status3`,`sq_job`,`fav_job`,`rating`,`rating_name`,`vip_etime`,`all_pay`,`consum_pay`,`talent_num`,`invite_resume`,`comtpl`,`comtpl_all`,`job_num`,`editjob_num`,`breakjob_num`,`down_resume`,`autotime`) values (27,0.00,'100',0,0,0,0,0,0,0,3,'免费会员','0',0.00,0.00,NULL,NULL,'0',NULL,3,1,2,5,0),(28,0.00,'100',0,0,0,0,0,0,0,3,'免费会员','0',0.00,0.00,NULL,NULL,'0',NULL,3,1,2,5,0),(29,0.00,'100',0,0,0,0,0,0,0,3,'免费会员','0',0.00,0.00,NULL,NULL,'0',NULL,3,1,2,5,0),(30,0.00,'100',0,0,0,0,0,0,0,3,'免费会员','0',0.00,0.00,NULL,NULL,'0',NULL,3,1,2,5,0),(31,0.00,'100',0,0,0,0,0,0,0,3,'免费会员','0',0.00,0.00,NULL,NULL,'0',NULL,3,1,2,5,0),(77,0.00,'100',0,0,0,0,0,0,0,3,'免费会员','0',0.00,0.00,NULL,NULL,'0',NULL,3,1,2,5,0),(81,0.00,'100',0,0,0,0,0,0,0,3,'免费会员','0',0.00,0.00,NULL,NULL,'0',NULL,3,1,2,5,0),(82,0.00,'100',0,0,0,0,0,0,0,3,'免费会员','0',0.00,0.00,NULL,NULL,'0',NULL,3,1,2,5,0);

/*Table structure for table `company_tpl` */

DROP TABLE IF EXISTS `company_tpl`;

CREATE TABLE `company_tpl` (
  `id` int(11) NOT NULL auto_increment,
  `name` varchar(100) default '0',
  `url` varchar(100) default '0',
  `pic` varchar(200) default '0',
  `type` int(10) default '0',
  `price` varchar(100) default '0',
  `status` int(10) default NULL,
  PRIMARY KEY  (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=8 DEFAULT CHARSET=gbk;

/*Data for the table `company_tpl` */

insert  into `company_tpl`(`id`,`name`,`url`,`pic`,`type`,`price`,`status`) values (4,'模认模板','default','upload/company/20131114/make_S_13616410212.PNG',0,'0',1),(5,'黑色模板','black','upload/company/20131114/make_S_13903802303.PNG',1,'100',1),(6,'蓝色模版','blue','upload/company/20131114/make_S_13868045228.PNG',1,'5',1),(7,'绿色模板','green','upload/company/20131114/make_S_13874121836.PNG',1,'20',1);

/*Table structure for table `cron` */

DROP TABLE IF EXISTS `cron`;

CREATE TABLE `cron` (
  `id` int(10) NOT NULL auto_increment,
  `name` varchar(200) default NULL,
  `dir` varchar(200) default NULL,
  `type` int(11) default NULL,
  `week` int(11) default NULL,
  `month` int(10) default NULL,
  `hour` int(10) default NULL,
  `minute` int(10) default NULL,
  `display` int(1) default NULL,
  `ctime` int(11) default NULL,
  `nowtime` int(11) default '0',
  `nexttime` int(11) default '0',
  PRIMARY KEY  (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=3 DEFAULT CHARSET=gbk;

/*Data for the table `cron` */

/*Table structure for table `description` */

DROP TABLE IF EXISTS `description`;

CREATE TABLE `description` (
  `id` int(11) NOT NULL auto_increment,
  `name` varchar(255) default NULL,
  `url` varchar(255) default NULL,
  `title` varchar(255) default NULL,
  `keyword` varchar(255) default NULL,
  `descs` text,
  `top_tpl` int(2) default NULL,
  `top_tpl_dir` varchar(255) default NULL,
  `footer_tpl` int(2) default NULL,
  `footer_tpl_dir` varchar(255) default NULL,
  `content` text,
  `sort` int(11) default NULL,
  `is_nav` int(1) default NULL,
  `ctime` int(11) default NULL,
  PRIMARY KEY  (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=10 DEFAULT CHARSET=gbk;

/*Data for the table `description` */

insert  into `description`(`id`,`name`,`url`,`title`,`keyword`,`descs`,`top_tpl`,`top_tpl_dir`,`footer_tpl`,`footer_tpl_dir`,`content`,`sort`,`is_nav`,`ctime`) values (5,'注册协议','about/service.html','注册协议','phpyun人才系统,hr135,招聘,求职,猎头,注册协议','注册协议',1,'',1,'','<p align=\"left\">\r\n	PHPYUN人才招聘系统（phpyun.com）用户协议<br />\r\n<br />\r\n一、版权：<br />\r\n<br />\r\n此网址的内容和图表受到中国版权法及国际条约的保护。phpyun.com 拥有一切权利，未经其同意，不允许复制。以任何目的重新使用&nbsp;phpyun.com 网上的内容和图表也受到严格的禁止。在内容和图表不作任何修改，在保留内容未做修改，以及得到 phprencai.com 的许可的情况下，phpyun.com 的网上材料可作为网外信息方面和非商业方面的用途。申请使用 phprencai.com 内容的许可是按逐个批准的原则进行的。phpyun.com 欢迎提出申请。请把请求直接提交给400-087--6680。不要复制或采用 phprencai.com 所创造的用以制成网页的HTML。HTML也属于 phpyun.com的版权。phpyun.com 网址上的“观看”和“感觉”也属于 phpyun.com 的商标，其中包括颜 色的组合、按钮的形状、设计和所有其他的图表。\r\n</p>\r\n<p align=\"left\">\r\n	<br />\r\n</p>\r\n<p align=\"left\">\r\n	<br />\r\n</p>\r\n<p align=\"left\">\r\n	<br />\r\n</p>\r\n<p align=\"left\">\r\n	<br />\r\n</p>',2,1,1399281414),(8,'猎头优势','about/headhunter.html','猎头优势','猎头优势','猎头优势',1,'',1,'','<h4 style=\"font-size:14px;\">\r\n	&#9830; 为求职者提供服务：\r\n</h4>\r\n<p>\r\n	1．高薪职位：每周提供超过10000个高端猎头职位机会；\r\n</p>\r\n<p>\r\n	2．猎头服务：与数万名专业的猎头顾问直接联系，获得高薪职位推荐，获得职业规划建议；\r\n</p>\r\n<p>\r\n	3．隐私保护：创新实名认证系统，保护职业经理人的隐私信息，建立职业经理人与猎头顾问沟通的诚信平台；\r\n</p>\r\n<p>\r\n	4．精准推荐：创新的职位与人才的匹配系统，将职位要求与高端人士的职业期望紧密结合，精准匹配，为招聘方和职业经理人进行最佳的匹配推荐，省时高效；\r\n</p>\r\n<p>\r\n	5．会员尊享：金卡会员享受，猎头第一时间发现，简历搜索排名靠前，转接服务保护隐私，漏接电话短信提醒，与猎头联系不受限，批量发送自荐消息。\r\n</p>\r\n<h4 style=\"font-size:14px;padding-top:20px;\">\r\n	&#9830; 为企业提供招聘服务：\r\n</h4>\r\n<p>\r\n	1．职位发布：通过精准职位发布、搜索帮助企业找到准确、适合的目标候选人，利用专业的“猎聘通”管理工具，提升招聘组织管理和候选人筛选效率 ；\r\n</p>\r\n<p>\r\n	2．品牌曝光：通过网站广告和媒体网络覆盖更多优质的候选人，面向各企业、机构的管理决策层及行业内资深专业人员的品牌覆盖 ；\r\n</p>\r\n<p>\r\n	3．猎头沟通：通过长期的猎头服务经验积累，创立独特的人才精准匹配体系，个性化的候选人意向确认服务，帮助企业拉近与候选人的距离；\r\n</p>\r\n<p>\r\n	4．专业服务：针对个性化的高端人才招聘需求，通过提供综合的招聘流程服务达到招聘目标，降低您的招聘事务成本。\r\n</p>',3,1,1399281378),(9,'法律声明','about/phpyun.html','phpyun系统法律声明','人才招聘，PHPYUN，人才系统','PHP云人才系统是一款开源的php+mysql人才网站管理系统，集成在线支付，求职、招聘等云端管理功能于一体',1,'',1,'','本授权协议适用且仅适用于PHPYUN.3.0 版本，鑫潮信息技术有限公司拥有对本授权协议的最终解释权。\r\n<p>\r\n	<br />\r\n</p>\r\n<p>\r\n	I. 协议许可的权利\r\n</p>\r\n<p>\r\n	1. 您可以在完全遵守本最终用户授权协议的基础上，将本软件应用于非商业用途(包括个人用户：不具备法人资格的自然人，以个人名义从事网络威客交易；非盈利性用途：从事非盈利活动的商业机构及非盈利性组织，将PHPYUN 人才系统仅用于产品演示、展示及发布，而并不是用来买卖及盈利的运营活动的)\r\n</p>\r\n<p>\r\n	2. 您可以在协议规定的约束和限制范围内修改 PHPYUN人才网系统 源代码(如果被提供的话)或界面风格以适应您的网站要求。\r\n</p>\r\n<p>\r\n	3. 您拥有使用本软件构建的人才系统中全部招聘信息，求职，用户信息及相关信息的所有权，并独立承担与其内容的相关法律义务。\r\n</p>\r\n<p>\r\n	4. 获得商业授权之后，您可以将本软件应用于商业用途，同时依据所购买的授权类型中确定的技术支持期限、技术支持方式和技术支持内容，自授权时刻起，在技术支持期限内拥有通过指定的方式获得指定范围内的技术支持服务。商业授权用户享有反映和提出意见的权力，相关意见将被作为首要考虑，但没有一定被采纳的承诺或保证。\r\n</p>\r\n<p>\r\n	<br />\r\n</p>\r\n<p>\r\n	II. 协议规定的约束和限制\r\n</p>\r\n<p>\r\n	1. 未获商业授权之前，不得将本软件用于商业用途(包括但不限于企业法人经营的企业网站、经营性网站、以盈利为目或实现盈利的网站)。\r\n</p>\r\n<p>\r\n	2. 不得对本软件或与之关联的商业授权进行出租、出售、抵押或发放子许可证。\r\n</p>\r\n<p>\r\n	3. 无论如何，即无论用途如何、是否经过修改或美化、修改程度如何，只要使用PHPYUN 人才系统 的整体或任何部分，未经书面许可，网站标题的Powered by PHPYun.都必须保留，而不能清除或修改。\r\n</p>\r\n<p>\r\n	4. 如果您未能遵守本协议的条款，您的授权将被终止，所被许可的权利将被收回，并承担相应法律责任。\r\n</p>\r\n<p>\r\n	<br />\r\n</p>\r\n<p>\r\n	III. 有限担保和免责声明\r\n</p>\r\n<p>\r\n	1. 本软件及所附带的文件是作为不提供任何明确的或隐含的赔偿或担保的形式提供的。\r\n</p>\r\n<p>\r\n	2. 用户出于自愿而使用本软件，您必须了解使用本软件的风险，在尚未购买产品技术服务之前，我们不承诺提供任何形式的技术支持、使用担保，也不承担任何因使用本软件而产生问题的相关责任。\r\n</p>\r\n<p>\r\n	3. 宿迁鑫潮信息技术有限公司不对使用本软件构建的人才系统中的文章或任务信息承担责任，但在不侵犯用户隐私信息的前提下，保留以任何方式获取用户及商品信息的权利。\r\n</p>\r\n<p>\r\n	有关 phpyun人才网系统! 最终用户授权协议、商业授权与技术服务的详细内容，均由PHPYUN 官方网站独家提供。 宿迁鑫潮信息技术有限公司拥有在不事先通知的情况下，修改授权协议和服务价目表的权力，修改后的协议或价目表对自改变之日起的新授权用户生效。电子文本形式的授权协议如同双方书面签署的协议一样，具有完全的和等同的法律效力。您一旦开始安装 PHPYUN2.5，即被视为完全理解并接受本协议的各项条款，在享有上述条款授予的权力的同时，受到相关的约束和限制。协议许可范围以外的行为，将直接违反本授权协议并构成侵权，我们有权随时终止授权，责令停止损害，并保留追究相关责任的权力。\r\n</p>',4,1,1400587596);

/*Table structure for table `domain` */

DROP TABLE IF EXISTS `domain`;

CREATE TABLE `domain` (
  `id` int(11) NOT NULL auto_increment,
  `title` varchar(200) NOT NULL,
  `domain` varchar(200) NOT NULL,
  `province` int(11) default NULL,
  `cityid` int(11) default NULL,
  `three_cityid` int(11) default NULL,
  `type` int(2) NOT NULL,
  `style` varchar(100) NOT NULL,
  `hy` int(11) default NULL,
  `fz_type` int(11) NOT NULL,
  `webtitle` text,
  `webkeyword` text,
  `webmeta` text,
  `weblogo` varchar(255) default NULL,
  PRIMARY KEY  (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=gbk;

/*Data for the table `domain` */

/*Table structure for table `down_resume` */

DROP TABLE IF EXISTS `down_resume`;

CREATE TABLE `down_resume` (
  `id` int(11) NOT NULL auto_increment,
  `uid` int(11) default NULL,
  `eid` int(11) default NULL,
  `comid` int(11) default NULL,
  `downtime` int(11) default NULL,
  PRIMARY KEY  (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=gbk;

/*Data for the table `down_resume` */

/*Table structure for table `fav_job` */

DROP TABLE IF EXISTS `fav_job`;

CREATE TABLE `fav_job` (
  `id` int(11) NOT NULL auto_increment,
  `uid` int(11) NOT NULL,
  `com_id` int(11) NOT NULL,
  `com_name` varchar(150) NOT NULL,
  `datetime` int(10) NOT NULL,
  `type` int(11) NOT NULL default '1',
  `job_name` varchar(150) default NULL,
  `job_id` int(11) default NULL,
  PRIMARY KEY  (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=gbk;

/*Data for the table `fav_job` */

/*Table structure for table `friend` */

DROP TABLE IF EXISTS `friend`;

CREATE TABLE `friend` (
  `id` int(11) NOT NULL auto_increment,
  `uid` int(11) default NULL,
  `nid` int(11) default NULL,
  `status` int(11) default NULL,
  `uidtype` int(2) default NULL,
  `nidtype` int(2) default NULL,
  PRIMARY KEY  (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=gbk;

/*Data for the table `friend` */

/*Table structure for table `friend_foot` */

DROP TABLE IF EXISTS `friend_foot`;

CREATE TABLE `friend_foot` (
  `id` int(11) NOT NULL auto_increment,
  `uid` int(11) default NULL,
  `fid` int(11) default NULL,
  `num` int(11) default NULL,
  `ctime` int(11) default NULL,
  PRIMARY KEY  (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=gbk;

/*Data for the table `friend_foot` */

/*Table structure for table `friend_info` */

DROP TABLE IF EXISTS `friend_info`;

CREATE TABLE `friend_info` (
  `uid` int(11) default NULL,
  `nickname` varchar(100) default NULL,
  `sex` int(1) default '3',
  `pic` varchar(100) default NULL,
  `pic_big` varchar(100) default NULL,
  `description` varchar(100) default NULL,
  `birthday` varchar(100) default NULL,
  `usertype` int(2) default NULL,
  `iscert` int(2) default '0'
) ENGINE=MyISAM DEFAULT CHARSET=gbk;

/*Data for the table `friend_info` */

insert  into `friend_info`(`uid`,`nickname`,`sex`,`pic`,`pic_big`,`description`,`birthday`,`usertype`,`iscert`) values (1,'ggggg',3,NULL,NULL,NULL,NULL,1,0),(2,'yangchao',3,NULL,NULL,NULL,NULL,1,0),(3,'yc',3,NULL,NULL,NULL,NULL,1,0),(4,'erer',3,NULL,NULL,NULL,NULL,1,0),(5,'wewewewe',3,NULL,NULL,NULL,NULL,1,0),(6,'wewewewewewew',3,NULL,NULL,NULL,NULL,1,0),(7,'zhangsan',3,NULL,NULL,NULL,NULL,1,0),(8,'yyyy',3,NULL,NULL,NULL,NULL,1,0),(9,'张三',3,NULL,NULL,NULL,NULL,1,0),(10,'李四',3,NULL,NULL,NULL,NULL,1,0),(11,'王五',3,NULL,NULL,NULL,NULL,1,0),(12,'马六',3,NULL,NULL,NULL,NULL,1,0),(13,'马六去',3,NULL,NULL,NULL,NULL,1,0),(14,'张三丰',3,NULL,NULL,NULL,NULL,1,0),(15,'张无忌',3,NULL,NULL,NULL,NULL,1,0),(16,'武则天',3,NULL,NULL,NULL,NULL,1,0),(17,'孙悟空',3,NULL,NULL,NULL,NULL,1,0),(18,'猪八戒',3,NULL,NULL,NULL,NULL,1,0),(19,'牛魔王',3,NULL,NULL,NULL,NULL,1,0),(20,'红孩儿',3,NULL,NULL,NULL,NULL,1,0),(21,'如来佛',3,NULL,NULL,NULL,NULL,1,0),(22,'关羽',3,NULL,NULL,NULL,NULL,1,0),(23,'乔布斯',3,NULL,NULL,NULL,NULL,1,0),(24,'太扯淡了',3,NULL,NULL,NULL,NULL,1,0),(25,'让我过了吧',3,NULL,NULL,NULL,NULL,1,0),(26,'再不过马上奔溃',3,NULL,NULL,NULL,NULL,1,0),(27,'第三方的方式',3,NULL,NULL,NULL,NULL,2,0),(28,'企业啦啦',3,NULL,NULL,NULL,NULL,2,0),(29,'企业啦啦爱上对方',3,NULL,NULL,NULL,NULL,2,0),(30,'企业',3,NULL,NULL,NULL,NULL,2,0),(31,'企业123',3,NULL,NULL,NULL,NULL,2,0),(32,'noname',3,NULL,NULL,NULL,NULL,1,0),(33,'那谁谁',3,NULL,NULL,NULL,NULL,1,0),(34,'helloworld',3,NULL,NULL,NULL,NULL,1,0),(35,'noname',3,NULL,NULL,NULL,NULL,1,0),(77,'zhang',3,NULL,NULL,NULL,NULL,2,0),(81,'zhang',3,NULL,NULL,NULL,NULL,2,0),(82,'zhang',3,NULL,NULL,NULL,NULL,2,0);

/*Table structure for table `friend_message` */

DROP TABLE IF EXISTS `friend_message`;

CREATE TABLE `friend_message` (
  `id` int(11) NOT NULL auto_increment,
  `pid` int(11) NOT NULL,
  `uid` int(11) default NULL,
  `u_name` varchar(100) default NULL,
  `fid` int(11) default NULL,
  `f_name` varchar(100) default NULL,
  `nid` int(11) default '0',
  `content` varchar(225) default NULL,
  `ctime` int(11) default NULL,
  `status` int(11) default '0',
  `remind_status` int(11) default '0',
  PRIMARY KEY  (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=gbk;

/*Data for the table `friend_message` */

/*Table structure for table `friend_reply` */

DROP TABLE IF EXISTS `friend_reply`;

CREATE TABLE `friend_reply` (
  `id` int(11) NOT NULL auto_increment,
  `nid` int(11) default NULL,
  `fid` int(11) default NULL,
  `uid` int(11) default NULL,
  `reply` varchar(225) default NULL,
  `ctime` int(11) default NULL,
  PRIMARY KEY  (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=gbk;

/*Data for the table `friend_reply` */

/*Table structure for table `friend_state` */

DROP TABLE IF EXISTS `friend_state`;

CREATE TABLE `friend_state` (
  `id` int(11) NOT NULL auto_increment,
  `uid` int(11) default NULL,
  `content` varchar(225) default NULL,
  `ctime` int(11) default NULL,
  `type` int(11) default '1',
  `msg_pic` varchar(100) default NULL,
  PRIMARY KEY  (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=gbk;

/*Data for the table `friend_state` */

/*Table structure for table `hot_key` */

DROP TABLE IF EXISTS `hot_key`;

CREATE TABLE `hot_key` (
  `id` int(20) NOT NULL auto_increment,
  `key_name` varchar(100) NOT NULL,
  `num` int(20) NOT NULL default '0',
  `type` int(2) NOT NULL,
  `size` varchar(10) default NULL,
  `check` int(1) default '0',
  `color` varchar(10) default NULL,
  `bold` int(11) default NULL,
  `tuijian` int(11) default NULL,
  `wxtime` int(11) default '0',
  `wxuser` varchar(100) default NULL,
  `wxid` varchar(100) default '0',
  PRIMARY KEY  (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=24 DEFAULT CHARSET=gbk;

/*Data for the table `hot_key` */

insert  into `hot_key`(`id`,`key_name`,`num`,`type`,`size`,`check`,`color`,`bold`,`tuijian`,`wxtime`,`wxuser`,`wxid`) values (1,'土木工程',1,3,'22px',1,'0099ff',1,1,NULL,NULL,NULL),(2,'设计部经理',1,3,'12px',1,'',0,1,NULL,NULL,NULL),(3,'网页设计',55,3,'23px',1,'cc9900',0,1,NULL,NULL,NULL),(4,'大员',1,3,NULL,1,NULL,NULL,1,NULL,NULL,NULL),(5,'客服',11,3,'30',1,'f4b51b',1,1,NULL,NULL,NULL),(6,'北京',75,5,'22',1,'f4b51b',1,1,NULL,NULL,NULL),(7,'计算机',19,5,'16px',1,'999',0,1,NULL,NULL,NULL),(8,'上海',9,1,'30',1,'cc9900',1,1,NULL,NULL,NULL),(9,'江苏',2,5,NULL,1,NULL,NULL,1,NULL,NULL,NULL),(10,'网络',22,3,'22',1,'0099ff',1,1,NULL,NULL,NULL),(11,'天津',40,3,'30',1,'f4b51b',1,1,NULL,NULL,NULL),(12,'互联网',2,3,'23',1,'f4b51b',1,1,NULL,NULL,NULL),(13,'PHP程序员',1,3,'14px',1,'f4b51b',1,1,NULL,NULL,NULL),(14,'娱乐或餐饮',3,1,'16px',1,'f00',1,1,NULL,NULL,NULL),(15,'经理',11,3,'30',1,'f4b51b',1,1,NULL,NULL,NULL),(16,'美化师',10,1,'23',1,'f1009a',1,1,NULL,NULL,NULL),(17,'财务',5,5,'22',1,'f1009a',1,1,NULL,NULL,NULL),(18,'PHP高级程序员',0,3,'16',1,'f60',1,1,NULL,NULL,NULL),(19,'设计师',6,3,'25px',1,'f4b51b',1,1,NULL,NULL,NULL),(20,'设计',31,1,'13px',1,'f4b51b',1,1,NULL,NULL,NULL),(21,'房地产',0,1,'22px',1,'f1009a',1,1,NULL,NULL,NULL),(22,'教育',0,1,'30px',1,'f4b51b',1,1,NULL,NULL,NULL),(23,'消费品',0,1,'22',1,'f60',1,1,NULL,NULL,NULL);

/*Table structure for table `hotjob` */

DROP TABLE IF EXISTS `hotjob`;

CREATE TABLE `hotjob` (
  `id` int(11) NOT NULL auto_increment,
  `uid` int(11) default NULL,
  `username` varchar(200) default NULL,
  `rating` varchar(20) default NULL,
  `hot_pic` varchar(100) default NULL,
  `service_price` int(11) default NULL,
  `time_start` int(11) default NULL,
  `time_end` int(11) default NULL,
  `sort` int(11) default '0',
  `beizhu` varchar(200) default NULL,
  PRIMARY KEY  (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=gbk;

/*Data for the table `hotjob` */

/*Table structure for table `industry` */

DROP TABLE IF EXISTS `industry`;

CREATE TABLE `industry` (
  `id` int(11) NOT NULL auto_increment,
  `name` varchar(50) NOT NULL,
  `sort` int(11) default '0',
  PRIMARY KEY  (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=840 DEFAULT CHARSET=gbk;

/*Data for the table `industry` */

insert  into `industry`(`id`,`name`,`sort`) values (35,'计算机/互联网',6),(36,'销售/客服/技术支持',0),(37,'会计/金融/银行/保险',0),(38,'生产/营运/采购/物流',0),(39,'生物/制药/医疗/护理',0),(40,'广告/市场/媒体/艺术',0),(41,'建筑/房地产',0),(42,'人事/行政/高级管理',0),(43,'咨询/法律/教育/科研',0),(44,'服务业',0),(45,'公务员/翻译/其他',1),(836,'化工/能源',1),(835,'贸易/百货',2),(837,'机械/设备/技工',2),(839,'通信/电子',0);

/*Table structure for table `job_class` */

DROP TABLE IF EXISTS `job_class`;

CREATE TABLE `job_class` (
  `id` int(11) NOT NULL auto_increment,
  `keyid` int(11) NOT NULL,
  `name` varchar(50) NOT NULL,
  `sort` int(11) NOT NULL,
  PRIMARY KEY  (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=953 DEFAULT CHARSET=gbk;

/*Data for the table `job_class` */

insert  into `job_class`(`id`,`keyid`,`name`,`sort`) values (35,0,'计算机/互联网',16),(36,0,'销售/客服/技术支持',4),(37,0,'会计/金融/银行/保险',14),(38,0,'生产/营运/采购/物流',4),(39,0,'生物/制药/医疗/护理',5),(40,0,'广告/市场/媒体/艺术',6),(41,0,'建筑/房地产',7),(42,0,'人事/行政/高级管理',8),(43,0,'咨询/法律/教育/科研',14),(44,0,'服务业',15),(45,0,'公务员/翻译/其他',1),(46,35,'计算机硬件',1),(47,35,'计算机软件',2),(48,35,'互联网/网游',3),(49,35,'IT-管理',4),(50,35,'IT-品管、技术支持及其它',5),(51,839,'通信技术开发及应用',6),(52,839,'电子/电器/半导体/仪器仪表',7),(53,36,'销售管理',4),(54,36,'销售人员',3),(55,36,'销售行政及商务',2),(56,44,'客服及技术支持 ',7),(57,37,'财务/审计/税务',1),(58,37,'金融/证券/期货/投资',2),(59,37,'银行',3),(60,37,'保险 ',4),(61,38,'生产/营运',9),(62,38,'质量/安全管理',8),(63,38,'工程/机械/能源',7),(64,38,'汽车',6),(65,38,'技工',5),(66,38,'服装/纺织/皮革',4),(67,38,'采购',3),(68,38,'贸易',2),(69,38,'物流/仓储 ',1),(70,39,'生物/制药/医疗器械',3),(71,836,'化工/环保',2),(72,39,'医院/医疗/护理 ',1),(73,40,'广告',6),(74,40,'公关/媒介',5),(75,40,'市场/营销',4),(76,40,'影视/媒体',3),(77,40,'写作/出版/印刷',2),(78,40,'艺术/设计',1),(79,41,'建筑装潢/市政建设',1),(80,41,'房地产',2),(81,41,'物业管理 ',3),(82,42,'人力资源',3),(83,42,'高级管理',2),(84,42,'行政/后勤',1),(85,43,'咨询/顾问',1),(86,43,'律师/法务/合规',2),(87,43,'教师',3),(88,43,'培训',4),(89,43,'科研人员',5),(90,44,'餐饮/娱乐',6),(91,44,'酒店/旅游',5),(92,44,'美容/健身/体育',4),(93,44,'百货/连锁/零售服务',3),(94,44,'交通运输服务',2),(95,44,'保安/家政/其他服务',1),(96,45,'公务员',8),(97,45,'翻译',7),(98,45,'在校学生',6),(99,45,'储备干部/培训生/实习生',5),(100,45,'兼职',4),(101,45,'其他',3),(102,45,'环保',2),(103,45,'农/林/牧/渔 ',1),(104,46,'高级硬件工程师',3),(105,46,'硬件工程师',2),(106,46,'其他',1),(121,48,'互联网软件开发工程师',14),(122,48,'语音/视频开发工程师',15),(108,47,'高级软件工程师',12),(109,47,'软件工程师',11),(14,47,'软件UI设计师/工程师',10),(111,47,'仿真应用工程师',9),(112,47,'ERP实施顾问',8),(113,47,'ERP技术开发',7),(114,47,'需求工程师',1),(115,47,'系统集成工程师',2),(116,47,'系统分析员',3),(117,47,'系统工程师',4),(118,47,'系统架构设计师',13),(119,47,'数据库工程师/管理员',5),(120,47,'计算机辅',6),(123,48,'多媒体/游戏开发工程师',16),(124,48,'网站营运经理/主管',17),(125,48,'网站营运专员',18),(126,48,'网络工程师',19),(127,48,'UI设计师/顾问',20),(128,48,'网站架构设计师',21),(129,48,'网站维护工程师',22),(130,48,'系统管理员/网络管理员',23),(131,48,'网站策划',24),(132,48,'网站编辑',13),(133,48,'网页设计/制作/美工',12),(134,48,'脚本开发工程师',4),(135,48,'游戏策划师',3),(136,48,'游戏界面设计师',2),(137,48,'Flash设计/开发',1),(138,48,'特效设计师',5),(139,48,'视觉设计师',6),(140,48,'音效设计师',7),(141,48,'SEO搜索引擎优化',8),(142,48,'网络信息安全工程师',9),(143,48,'智能大厦/综合布线',10),(144,48,'其他',11),(145,49,'首席技术执行官CTO/首席信息官CIO',1),(146,49,'技术总监/经理',2),(147,49,'信息技术经理/主管',3),(148,49,'信息技术专员',4),(149,49,'项目总监',5),(150,49,'项目经理',6),(151,49,'项目主管',7),(152,49,'项目执行/协调人员',8),(153,49,'其他',9),(154,50,'技术支持/维护经理',10),(155,50,'技术支持/维护工程师',11),(156,50,'Helpdesk 技术支持',12),(157,50,'计量工程师',13),(158,50,'标准化工程师',14),(159,50,'品质经理',15),(160,50,'系统测试',16),(161,50,'软件测试',17),(162,50,'硬件测试',18),(163,50,'测试员',19),(164,50,'文档工程师',20),(165,50,'技术文员/助理',21),(166,50,'其他',22),(167,51,'通信技术工程师',1),(168,51,'有线传输工程师',2),(169,51,'无线通信工程师',3),(170,51,'电信交换工程师',4),(171,51,'数据通信工程师',5),(172,51,'移动通信工程师',6),(173,51,'电信网络工程师',7),(174,51,'通信电源工程师',8),(175,51,'增值产品开发工程师',9),(176,51,'手机软件开发工程师',10),(177,51,'手机应用开发工程师',11),(178,51,'其他',12),(179,52,'IC验证工程师',1),(180,52,'电气工程师/技术员',2),(181,52,'电路工程师/技术员(模拟/数字)',3),(182,52,'电声/音响工程师/技术员',4),(183,52,'激光/光电子技术',5),(184,52,'半导体技术',6),(185,52,'自动控制工程师/技术员',7),(186,52,'电子软件开发(ARM/MCU...)',8),(187,52,'嵌入式软件开发(Linux/单片机/DLC/DSP…)',9),(188,52,'嵌入式硬件开发(主板机…)',10),(189,52,'电池/电源开发',11),(190,52,'FAE 现场应用工程师',12),(191,52,'工艺工程师',13),(192,52,'家用电器/数码产品研发',14),(193,52,'仪器/仪表/计量分析师',15),(194,52,'测试工程师',16),(195,52,'版图设计工程师',17),(196,53,'集成电路IC设计/应用工程师',1),(197,53,'IC验证工程师',2),(198,53,'电子工程师/技术员',3),(199,53,'电子技术研发工程师',4),(200,53,'射频工程师',5),(201,53,'电子/电器维修工程师/技师',6),(202,53,'变压器与磁电工程师',7),(203,53,'版图设计工销售总监',8),(204,53,'销售经理',9),(205,53,'销售主管',10),(206,53,'业务拓展主管/经理',11),(207,53,'渠道/分销总监',12),(208,53,'渠道/分销经理',13),(209,53,'渠道/分销主管',14),(210,53,'大客户经理',15),(211,53,'客户经理/主管',16),(212,53,'区域销售总监',17),(213,53,'区域销售经理',18),(214,53,'团购经理/主管',19),(215,53,'其他',20),(216,54,'销售代表',1),(217,54,'渠道/分销专员',2),(218,54,'客户代表',3),(219,54,'销售工程师',4),(220,54,'电话销售',5),(221,54,'团购业务员',6),(222,54,'经销商',7),(223,54,'其他',8),(224,55,'销售行政经理/主管',1),(225,55,'销售行政专员/助理',2),(226,55,'业务分析经理/主管',3),(227,55,'业务分析专员/助理',4),(228,55,'商务经理',5),(229,55,'商务主管/专员',6),(230,55,'商务助理',7),(232,55,'其他',0),(233,56,'客服总监(非技术)',0),(234,56,'客服经理(非技术)',0),(235,56,'客服主管(非技术)',0),(236,56,'客服专员/助理(非技术)',0),(237,56,'客户关系经理/主管',0),(238,56,'投诉专员',0),(239,56,'售前/售后技术支持经理',6),(240,56,'售前/售后技术支持主管',5),(241,56,'售前/售后技术支持工程师',4),(242,56,'咨询热线/呼叫中心服务人员',3),(243,56,'VIP专员',2),(244,56,'其他',1),(245,57,'首席财务官 CFO',0),(246,57,'财务总监',0),(247,57,'财务经理',0),(248,57,'财务顾问',0),(249,57,'财务主管/总帐主管',0),(250,57,'会计经理/会计主管',0),(251,57,'会计',0),(252,57,'出纳员',0),(253,57,'财务/会计助理',0),(254,57,'会计文员',0),(255,57,'固定资产会计',0),(256,57,'财务分析经理/主管',0),(257,57,'财务分析员',0),(258,57,'成本经理/成本主管',0),(259,57,'成本管理员',0),(260,57,'资金经理/主管',0),(261,57,'资金专员',0),(262,57,'审计经理/主管',0),(263,57,'审计专员/助理',0),(264,57,'税务经理/税务主管',0),(265,57,'税务专员/助理',0),(266,57,'统计员',0),(267,57,'其他',0),(268,58,'证券/期货/外汇经纪人',0),(269,58,'证券分析师',0),(270,58,'股票/期货操盘手',0),(271,58,'金融/经济研究员',0),(272,58,'投资/基金项目经理',0),(273,58,'投资/理财顾问',0),(274,58,'投资银行业务',0),(275,58,'融资经理/融资主管',0),(276,58,'融资专员',0),(277,58,'拍卖师',0),(278,58,'其他',0),(279,59,'行长/副行长',0),(280,59,'个人业务部门经理/主管',0),(281,59,'个人业务客户经理',0),(282,59,'公司业务部门经理/主管',0),(283,59,'公司业务客户经理',0),(284,59,'综合业务经理/主管',0),(285,59,'综合业务专员',0),(286,59,'资产评估/分析',0),(287,59,'风险控制',0),(288,59,'信贷管理',0),(289,59,'信审核查',0),(290,59,'进出口/信用证结算',0),(291,59,'外汇交易',0),(292,59,'清算人员',0),(293,59,'高级客户经理/客户经理',0),(294,59,'客户主管/专员',0),(295,59,'营业部大堂经理',0),(296,59,'银行柜员',0),(297,59,'银行卡、电子银行业务推广',0),(298,59,'其他',0),(299,60,'保险精算师',0),(300,60,'保险产品开发/项目策划',0),(301,60,'保险业务经理/主管',0),(302,60,'保险代理/经纪人/客户经理',0),(303,60,'理财顾问/财务规划师',0),(304,60,'储备经理人',0),(305,60,'保险核保',0),(306,60,'保险理赔',0),(307,60,'保险客户服务/续期管理',0),(308,60,'保险培训师',0),(309,60,'保险内勤',0),(310,60,'契约管理',0),(311,60,'其他',0),(312,61,'工厂经理/厂长',0),(313,61,'总工程师/副总工程师',0),(314,61,'项目总监',0),(315,61,'项目经理/主管项目工程师',0),(316,61,'营运经理',0),(317,61,'营运主管',0),(318,61,'生产总监',0),(319,61,'生产经理/车间主任',0),(320,61,'生产计划/物料管理(PMC)',0),(321,61,'生产主管/督导/领班/组长',0),(322,61,'生产文员',0),(323,61,'化验员',0),(324,61,'其他',0),(325,62,'质量管理/测试经理(QA/QC经理)',0),(326,62,'质量管理/测试主管(QA/QC主管)',0),(327,62,'质量管理/测试工程师(QA/QC工程师)',0),(328,62,'质量检验员/测试员',0),(329,62,'可靠度工程师',0),(330,62,'故障分析工程师',0),(331,62,'认证工程师/审核员',0),(332,62,'体系工程师/审核员',0),(333,62,'环境/健康/安全经理/主管（EHS）',0),(334,62,'环境/健康/安全工程师（EHS）',0),(335,62,'供应商管理',0),(336,62,'采购材料、设备质量管理',0),(337,62,'其他',0),(338,63,'电工程师',0),(339,63,'维修经理/主管',0),(340,63,'维修工程师',0),(341,63,'装配工程师/技师',0),(342,63,'铸造/锻造工程师/技师',0),(343,63,'注塑工程师/技师',0),(344,63,'焊接工程师/技师',0),(345,63,'夹具工程师/技师',0),(346,63,'CNC工程师',0),(347,63,'冲压工程师/技师',0),(348,63,'锅炉工程师/技师',0),(349,63,'电力工程师/技术员',0),(350,63,'光源与照明工程',0),(351,63,'汽车/摩托车工程师',0),(352,63,'船舶工程师',0),(353,63,'轨道交通工程师/技术员',0),(354,63,'飞机维修机械师',0),(355,63,'飞行器设计与制造',0),(356,63,'水利/水电工程师',0),(357,63,'石油天然气技术人员',0),(358,63,'矿产勘探/地质勘测工程师',0),(359,63,'其他',0),(360,64,'技术研发经理/主管',0),(361,64,'技术研发工程师',0),(362,64,'产品工艺/制程工程师',0),(363,64,'产品规划工程师',0),(364,64,'实验室负责人/工程师',0),(365,64,'工程/设备经理',0),(366,64,'工程/设备主管',0),(367,64,'工程/设备工程师',0),(368,64,'工程/机械绘图员',0),(369,64,'工业工程师',0),(370,64,'材料工程师',0),(371,64,'机械工程师',0),(372,64,'结构工程师',0),(373,64,'模具工程师',0),(374,64,'机汽车机构工程师',0),(375,64,'汽车设计工程师',0),(376,64,'汽车电子工程师',0),(377,64,'汽车质量管理',0),(378,64,'汽车安全性能工程师',0),(379,64,'汽车装配工艺工程师',0),(380,64,'汽车修理人员',0),(381,64,'4S店经理/维修站经理',0),(382,64,'汽车销售/经纪人',0),(383,64,'二手车评估师',0),(384,64,'其他',0),(385,65,'技工',0),(386,65,'钳工/机修工/钣金工',0),(387,65,'电焊工/铆焊工',0),(388,65,'车工/磨工/铣工/冲压工/锣工',0),(389,65,'切割技工',0),(390,65,'模具工',0),(391,65,'电工',0),(392,65,'叉车工',0),(393,65,'空调工/电梯工/锅炉工',0),(394,65,'水工/木工/漆工',0),(395,65,'普工/操作工',0),(396,65,'裁缝印纺熨烫',0),(397,65,'汽车修理工',0),(398,65,'其他',0),(399,66,'服装/纺织设计总监',0),(400,66,'服装/纺织设计',0),(401,66,'面料辅料开发',0),(402,66,'面料辅料采购',0),(403,66,'服装/纺织/皮革跟单',0),(404,66,'质量管理/验货员(QA/QC)',0),(405,66,'板房/楦头/底格出格师',0),(406,66,'打样/制版',0),(407,66,'电脑放码员',0),(408,66,'纸样师/车板工',0),(409,66,'裁床',0),(410,66,'其他',0),(411,67,'采购总监',0),(412,67,'采购经理',0),(413,67,'采购主管',0),(414,67,'采购员',0),(415,67,'采购助理',0),(416,67,'买手',0),(417,67,'供应商开发',0),(418,67,'其他',0),(419,68,'贸易/进出口经理/主管',0),(420,68,'贸易/进出口专员/助理',0),(421,68,'国内贸易人员',0),(422,68,'业务跟单经理',0),(423,68,'高级业务跟单',0),(424,68,'业务跟单',0),(425,68,'助理业务跟单',0),(426,68,'其他',0),(427,69,'物流总监',0),(428,69,'物流经理',0),(429,69,'物流主管',0),(430,69,'物流专员/助理',0),(431,69,'供应链总监',0),(432,69,'供应链经理',0),(433,69,'供应链主管/专员',0),(434,69,'物料经理',0),(435,69,'物料主管/专员',0),(436,69,'仓库经理/主管',0),(437,69,'仓库管理员',0),(438,69,'运输经理/主管',0),(439,69,'项目经理/主管',0),(440,69,'货运代理',0),(441,69,'集装箱业务',0),(442,69,'海关事务管理',0),(443,69,'报关员',0),(444,69,'单证员',0),(445,69,'船务/空运陆运操作',0),(446,69,'快递员',0),(447,69,'调度员',0),(448,69,'理货员',0),(449,69,'其他',0),(450,70,'生物工程/生物制药',0),(451,70,'化学分析测试员',0),(452,70,'医药技术研发管理人员',0),(453,70,'医药技术研发人员',0),(454,70,'临床研究员',0),(455,70,'临床协调员',0),(456,70,'临床数据分析员',0),(457,70,'药品注册',0),(458,70,'药品生产/质量管理',0),(459,70,'药品市场推广经理',0),(460,70,'药品市场推广主管/专员',0),(461,70,'医药招商',0),(462,70,'政府事务管理',0),(463,70,'招投标管理',0),(464,70,'医药销售经理/主管',0),(465,70,'医药销售代表',0),(466,70,'医疗设备注册',0),(467,70,'医疗设备生产/质量管理',0),(468,70,'医疗器械市场推广',0),(469,70,'医疗器械销售',0),(470,70,'医疗器械维修人员',0),(471,70,'其他',0),(472,71,'化工技术应用/化工工程师',0),(473,71,'化工实验室研究员/技术员',0),(474,71,'涂料研发工程师',0),(475,71,'配色技术员',0),(476,71,'塑料工程师',0),(477,71,'化妆品研发',0),(478,71,'食品/饮料研发',0),(479,71,'造纸研发',0),(480,71,'其他',0),(481,72,'医院管理人员',0),(482,72,'内科医生',0),(483,72,'外科医生',0),(484,72,'专科医生',0),(485,72,'牙科医生',0),(486,72,'麻醉医生',0),(487,72,'美容整形师',0),(488,72,'理疗师',0),(489,72,'中医科医生',0),(490,72,'针灸、推拿',0),(491,72,'儿科医生',0),(492,72,'心理医生',0),(493,72,'营养师',0),(494,72,'药库主任/药剂师',0),(495,72,'医药学检验',0),(496,72,'公共卫生/疾病控制',0),(497,72,'护理主任/护士长',0),(498,72,'护士/护理人员',0),(499,72,'兽医',0),(500,72,'验光师',0),(501,72,'其他',0),(502,73,'广告客户总监/副总监',0),(503,73,'广告客户经理',0),(504,73,'广告客户主管/专员',0),(505,73,'广告创意/设计经理',0),(506,73,'广告创意总监',0),(507,73,'广告创意/设计主管/专员',0),(508,73,'美术指导',0),(509,73,'文案/策划',0),(510,73,'企业/业务发展经理',0),(511,73,'企业策划人员',0),(512,73,'其他',0),(513,74,'公关经理',0),(514,74,'公关主管',0),(515,74,'公关专员',0),(516,74,'会务/会展经理',0),(517,74,'会务/会展主管',0),(518,74,'会务/会展专员',0),(519,74,'媒介经理',0),(520,74,'媒介主管',0),(521,74,'媒介专员',0),(522,74,'公关/媒介助理',0),(523,74,'媒介销售',0),(524,74,'活动策划',0),(525,74,'其他',0),(526,75,'市场/营销/拓展总监',0),(527,75,'市场/营销/拓展经理',0),(528,75,'市场/营销/拓展主管',0),(529,75,'市场/营销/拓展专员',0),(530,75,'市场助理',0),(531,75,'市场分析/调研人员',0),(532,75,'产品/品牌经理',0),(533,75,'产品/品牌主管',0),(534,75,'产品/品牌专员',0),(535,75,'市场通路经理/主管',0),(536,75,'市场通路专员',0),(537,75,'市场企划经理/主管',0),(538,75,'市场企划专员',0),(539,75,'促销经理',0),(540,75,'促销主管/督导',0),(541,75,'促销员/导购',0),(542,75,'选址拓展/新店开发',0),(543,75,'其他',0),(544,76,'影视策划/制作人员',0),(545,76,'导演/编导',0),(546,76,'艺术/设计总监',0),(547,76,'经纪人/星探',0),(548,76,'演员/模特/主持人',0),(549,76,'摄影师/摄像师',0),(550,76,'后期制作',0),(551,76,'音效师',0),(552,76,'配音员',0),(553,76,'放映经理/主管',0),(554,76,'放映员',0),(555,76,'化妆师/造型师',0),(556,76,'其他',0),(557,77,'总编/副总编',0),(558,77,'编辑',0),(559,77,'作家/撰稿人',0),(560,77,'记者',0),(561,77,'电话采编',0),(562,77,'美术编辑',0),(563,77,'排版设计',0),(564,77,'校对/录入',0),(565,77,'出版/发行',0),(566,77,'电分操作员',0),(567,77,'印刷排版/制版',0),(568,77,'数码直印/菲林输出',0),(569,77,'打稿机操作员',0),(570,77,'调墨技师',0),(571,77,'印刷机械机长',0),(572,77,'晒版/拼版/装订/烫金技工',0),(573,77,'其他',0),(574,78,'平面设计总监',0),(575,78,'平面设计经理/主管',0),(576,78,'平面设计师',0),(577,78,'绘画',0),(578,78,'动画/3D设计',0),(579,78,'原画师',0),(580,78,'展览/展示/店面设计',0),(581,78,'多媒体设计',0),(582,78,'包装设计',0),(583,78,'工业/产品设计',0),(584,78,'工艺品/珠宝设计鉴定',0),(585,78,'家具/家居用品设计',0),(586,78,'玩具设计',0),(587,78,'其他',0),(588,79,'高级建筑工程师/总工',0),(589,79,'建筑工程师',0),(590,79,'建筑设计师',0),(591,79,'市政工程师',0),(592,79,'结构/土木/土建工程师',0),(593,79,'公路/桥梁/港口/隧道工程',0),(594,79,'岩土工程',0),(595,79,'楼宇自动化',0),(596,79,'建筑机电工程师',0),(597,79,'安防工程师',0),(598,79,'给排水/暖通工程',0),(599,79,'幕墙工程师',0),(600,79,'规划与设计',0),(601,79,'室内外装潢设计',0),(602,79,'园艺/园林/景观设计',0),(603,79,'测绘/测量',0),(604,79,'建筑制图',0),(605,79,'开发报建',0),(606,79,'工程造价师/预结算经理',0),(607,79,'预结算员',0),(608,79,'建筑工程管理/项目经理',0),(609,79,'建筑工程验收',0),(610,79,'工程监理',0),(611,79,'合同管理',0),(612,79,'安全员',0),(613,79,'资料员',0),(614,79,'施工员',0),(615,79,'其他',0),(616,80,'房地产项目/开发/策划经理',0),(617,80,'房地产项目/开发/策划主管/专员',0),(618,80,'房产项目配套工程师',0),(619,80,'房地产项目招投标',0),(620,80,'房地产评估',0),(621,80,'房地产中介/交易',0),(622,80,'房地产销售经理/主管',0),(623,80,'房地产销售人员',0),(624,80,'其他',0),(625,81,'高级物业顾问/物业顾问',0),(626,81,'物业管理经理/主管',0),(627,81,'物业管理专员/助理',0),(628,81,'物业招商/租赁/租售',0),(629,81,'物业设施管理人员',0),(630,81,'物业机电工程师',0),(631,81,'物业维修人员',0),(632,81,'其他',0),(633,82,'人事总监',0),(634,82,'人事经理',0),(635,82,'人事主管',0),(636,82,'人事专员',0),(637,82,'人事助理',0),(638,82,'招聘经理/主管',0),(639,82,'招聘专员/助理',0),(640,82,'薪资福利经理/主管',0),(641,82,'薪资福利专员/助理',0),(642,82,'绩效考核经理/主管',0),(643,82,'绩效考核专员/助理',0),(644,82,'培训经理/主管',0),(645,82,'培训专员/助理/培训师',0),(646,82,'企业文化/员工关系/工会管理',0),(647,82,'人力资源信息系统专员',0),(648,82,'其他',0),(649,83,'首席执行官CEO/总裁/总经理',0),(650,83,'首席运营官COO',0),(651,83,'副总经理/副总裁',0),(652,83,'合伙人',0),(653,83,'总监/部门经理',0),(654,83,'策略发展总监',0),(655,83,'办事处首席代表',0),(656,83,'办事处/分公司/分支机构经理',0),(657,83,'总裁助理/总经理助理',0),(658,83,'其他',0),(659,84,'行政总监',0),(660,84,'行政经理/主管/办公室主任',0),(661,84,'行政专员/助理',0),(662,84,'经理助理/秘书',0),(663,84,'前台接待/总机/接待生',0),(664,84,'后勤',0),(665,84,'图书管理员/资料管理员',0),(666,84,'电脑操作员/打字员',0),(667,84,'其他',0),(668,85,'专业顾问',0),(669,85,'咨询总监',0),(670,85,'咨询经理',0),(671,85,'专业培训师',0),(672,85,'咨询员',0),(673,85,'调研员',0),(674,85,'猎头/人才中介',0),(675,85,'情报信息分析人员',0),(676,85,'其他',0),(677,86,'律师/法律顾问',0),(678,86,'律师助理',0),(679,86,'法务经理',0),(680,86,'法务主管/专员',0),(681,86,'法务助理',0),(682,86,'合规经理',0),(683,86,'合规主管/专员',0),(684,86,'知识产权/专利顾问/专员',0),(685,86,'其他',0),(686,87,'校长',0),(687,87,'大学教授',0),(688,87,'讲师/助教',0),(689,87,'中学教师',0),(690,87,'小学教师',0),(691,87,'幼教',0),(692,87,'院校教务管理人员',0),(693,87,'兼职教师',0),(694,87,'家教',0),(695,87,'职业技术教师',0),(696,87,'其他',0),(697,88,'培训督导',0),(698,88,'培训讲师',0),(699,88,'培训策划',0),(700,88,'培训产品开发',0),(701,88,'培训/课程顾问',0),(702,88,'培训助理',0),(703,88,'其他',0),(704,89,'科研管理人员',0),(705,89,'科研人员',0),(707,90,'餐饮/娱乐管理',0),(708,90,'餐饮/娱乐领班/部长',0),(709,90,'餐饮/娱乐服务员',0),(710,90,'传菜主管/传菜员',0),(711,90,'礼仪/迎宾',0),(712,90,'司仪',0),(713,90,'行政主厨/厨师长',0),(714,90,'厨师/面点师',0),(715,90,'调酒师/吧台员',0),(716,90,'茶艺师',0),(717,90,'其他',0),(718,91,'酒店/宾馆经理',0),(719,91,'酒店/宾馆营销',0),(720,91,'宴会管理',0),(721,91,'大堂经理',0),(722,91,'宾客服务经理',0),(723,91,'楼面经理',0),(724,91,'前厅接待',0),(725,91,'预定部主管',0),(726,91,'预定员',0),(727,91,'客房服务员/楼面服务员',0),(728,91,'机场代表',0),(729,91,'行李员',0),(730,91,'管家部经理/主管',0),(731,91,'清洁服务人员',0),(732,91,'健身房服务',0),(733,91,'旅游产品销售',0),(734,91,'导游/旅行顾问',0),(735,91,'行程管理/操作',0),(736,91,'票务/订房服务',0),(737,91,'签证专员',0),(738,91,'其他',0),(739,92,'美容顾问/化妆',0),(740,92,'彩妆培训师',0),(741,92,'专柜彩妆顾问(BA)',0),(742,92,'美容助理/见席美容师',0),(743,92,'瘦身顾问',0),(744,92,'发型师',0),(745,92,'发型助理/学徒',0),(746,92,'美甲师',0),(747,92,'按摩/足疗',0),(748,92,'健身顾问/教练',0),(749,92,'体育运动教练',0),(750,92,'救生员',0),(751,92,'瑜伽/舞蹈老师',0),(752,92,'宠物护理/美容',0),(753,92,'其他',0),(754,93,'店长/卖场经理/楼面管理',0),(755,93,'品类经理',0),(756,93,'店员/营业员',0),(757,93,'安防主管',0),(758,93,'防损员/内保',0),(759,93,'收银主管/收银员',0),(760,93,'理货员/陈列员/收货员',0),(761,93,'导购员',0),(762,93,'西点师/面包糕点加工',0),(763,93,'生鲜食品加工/处理',0),(764,93,'熟食加工',0),(765,93,'兼职店员',0),(766,93,'其他',0),(767,94,'飞机机长/副机长',0),(768,94,'空乘人员',0),(769,94,'地勤人员',0),(770,94,'列车/地铁车长',0),(771,94,'列车/地铁司机',0),(772,94,'船长/副船长',0),(773,94,'船员',0),(774,94,'乘务员',0),(775,94,'司机',0),(776,94,'其他',0),(777,95,'保安经理',0),(778,95,'保安人员',0),(779,95,'保镖',0),(780,95,'寻呼员/话务员',0),(781,95,'搬运工',0),(782,95,'清洁工',0),(783,95,'家政服务/保姆',0),(784,95,'其他',0),(785,96,'公务员',0),(786,97,'英语翻译',0),(787,97,'日语翻译',0),(788,97,'德语翻译',0),(789,97,'法语翻译',0),(790,97,'俄语翻译',0),(791,97,'意大利语翻译',0),(792,97,'西班牙语翻译',0),(793,97,'葡萄牙语翻译',0),(794,97,'阿拉伯语翻译',0),(795,97,'韩语/朝鲜语翻译',0),(796,97,'泰语翻译',0),(797,97,'中国方言翻译',0),(798,97,'其他语种翻译',0),(821,98,'研究生',0),(800,99,'储备干部',0),(801,99,'培训生',0),(802,99,'实习生',0),(803,100,'兼职',0),(804,101,'驯兽师/助理驯兽师',0),(805,101,'志愿者',0),(806,101,'其他 ',0),(807,102,'环保工程师',0),(808,102,'环境影响评价工程师',0),(809,102,'环保检测',0),(810,102,'水质检测员',0),(811,102,'污水处理工程师',0),(812,102,'固废工程师',0),(813,102,'其它',0),(814,103,'养殖部主管',0),(815,103,'场长(农/林/牧/渔业)',0),(816,103,'农艺师',0),(817,103,'畜牧师',0),(818,103,'饲养员',0),(819,103,'动物营养/饲料研发',0),(820,103,'其他',0),(822,98,'大学/大专应届毕业生',0),(823,98,'中专/职校生',0),(824,98,'其他',0),(826,52,'集成电路IC设计/应用工程师',0),(827,52,'电子技术研发工程师',0),(828,52,'射频工程师',0),(829,52,'电子/电器维修工程师/技师',0),(830,52,'变压器与磁电工程师',0),(831,52,'其他',0),(836,0,'化工/能源',3),(835,0,'贸易/百货',1),(850,847,'电路工程师',0),(837,0,'机械/设备/技工',2),(839,0,'通信/电子',2),(847,836,'电气/能源/动力/矿产',0),(848,847,'核力/火力工程师',0),(849,847,'空调/热能工程师',0),(844,835,'服装/纺织/皮革',0),(845,835,'百货/连锁/零售',0),(851,847,'电力工程师',0),(852,847,'电气维修技术员',0),(853,847,'制冷/暖通工程师',0),(854,847,'强电维修技工',0),(856,847,'变压/变频/磁电',0),(857,847,'矿产勘探/地质勘测工程师',0),(858,847,'煤矿/煤炭/煤化',0),(859,847,'电气工程师',0),(860,847,'光源与照明工程',0),(861,847,'水利/水电工程师',0),(862,847,'风电工程师',0),(863,847,'光伏系统工程师',0),(864,847,'燃气轮机工程师',0),(865,71,'环保工程师',0),(866,71,'污水处理工程师',0),(867,71,'环境影响评价工程师',0),(868,71,'环保检测',0),(869,71,'水质检测员',0),(870,71,'固废工程师',0),(871,835,'贸易',0),(872,871,'外贸/进出口经理/主管',0),(873,871,'外贸/进出口专员/助理',0),(874,871,'外贸/进出口专员/助理',0),(875,871,'国内贸易经理/主管',0),(876,871,'国内贸易专员/助理',0),(877,871,'业务跟单经理/主管',0),(878,871,'业务跟单专员/助理',0),(879,871,'单证员',0),(880,871,'报关/报检员',0),(881,844,'服装/纺织设计总监',0),(882,844,'服装/纺织设计',0),(883,844,'服装/纺织/皮革工艺师',0),(884,844,'面料辅料开发/采购',0),(885,844,'服装/纺织/皮革跟单',0),(886,844,'质量管理/验货员(QA/QC)',0),(887,844,'板房/楦头/底格出格师',0),(888,844,'打样/制版',0),(889,844,'电脑放码员',4),(890,844,'纸样师/车板工4',4),(891,844,'裁床',0),(892,845,'店长/卖场经理/楼面管理',0),(893,845,'品类经理',0),(894,845,'店员/营业员',0),(895,845,'防损员/内保',0),(896,845,'收银主管/收银员',0),(897,845,'理货员/陈列员/收货员',0),(898,845,'导购员',0),(899,845,'西点师/面包糕点加工',0),(900,845,'生鲜食品加工/处理',0),(901,845,'熟食加工',0),(902,845,'兼职店员',0),(903,845,'店长助理',0),(904,845,'防损经理/主管',0),(905,845,'安防主管',0),(906,837,'机械/设备',0),(907,837,'技工',0),(908,906,'模具工程师',0),(909,906,'机械工程师',0),(910,906,'机电工程师',0),(911,906,'铸造/锻造',0),(912,906,'冲压工程师/技师',0),(913,906,'注塑工程师/技师',0),(914,906,'CNC工程师',0),(915,906,'轨道交通工程师/技术员',0),(916,906,'锅炉工程师/技师',0),(917,906,'船舶工程师',0),(918,906,'飞行器设计与制造',0),(919,906,'夹具',0),(920,906,'工程/机械绘图员',0),(921,906,'结构工程师',0),(922,906,'设备工程师',0),(923,906,'焊接',0),(924,906,'机械/设备维修',0),(925,906,'机床/车床',0),(926,906,'技术研发经理/主管 ',0),(927,906,'技术研发工程师',0),(928,906,'产品工艺/制程工程师',0),(929,906,'产品规划工程师 ',0),(930,906,'实验室负责人/工程师',0),(931,906,'工程/设备经理/主管',0),(932,906,'工业工程师',0),(933,906,'材料工程师',0),(934,906,'维修经理/主管',0),(935,906,'维修工程师',0),(936,906,'装配工程师/技师',0),(937,907,'普工',0),(938,907,'钣金工/机修工/冲压工',0),(939,907,'电焊工/铆焊工/钳工',0),(940,907,'车工/磨工/铣工锣工',0),(941,907,'切割技工',0),(942,907,'模具工',0),(943,907,'铲车/叉车工',0),(944,907,'空调工/电梯工/锅炉工',0),(945,907,'电工/水工/木工/油漆工',0),(946,907,'片皮工/铲皮工',0),(947,907,'裁缝印纺熨烫',0),(948,907,'万能工',0),(949,907,'油边工/台面工',0),(950,907,'技工',0),(951,907,'汽车修理工',0),(952,907,'操作工',3);

/*Table structure for table `look_resume` */

DROP TABLE IF EXISTS `look_resume`;

CREATE TABLE `look_resume` (
  `id` int(11) NOT NULL auto_increment,
  `uid` int(11) default NULL,
  `com_id` int(11) default NULL,
  `resume_id` int(11) default NULL,
  `datetime` int(11) default NULL,
  PRIMARY KEY  (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=gbk;

/*Data for the table `look_resume` */

/*Table structure for table `ma_guestbook` */

DROP TABLE IF EXISTS `ma_guestbook`;

CREATE TABLE `ma_guestbook` (
  `id` int(10) NOT NULL auto_increment,
  `content` varchar(1000) NOT NULL,
  `flag` int(2) NOT NULL default '1',
  `creattime` time NOT NULL,
  `uid` int(10) NOT NULL,
  PRIMARY KEY  (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=62 DEFAULT CHARSET=utf8;

/*Data for the table `ma_guestbook` */

insert  into `ma_guestbook`(`id`,`content`,`flag`,`creattime`,`uid`) values (46,'sadf',1,'13:28:41',7),(47,'afa',1,'19:56:12',89),(48,'safasf',1,'19:56:33',89),(49,'asfdasdf',1,'19:56:37',89),(50,'asfasdf',1,'19:56:39',89),(51,'asdfasd',1,'19:56:42',89),(52,'asdfas',1,'19:56:47',89),(53,'asdfasf',1,'19:56:51',89),(54,'asfdasdf',1,'19:56:56',89),(55,'asdfas',1,'19:56:59',89),(56,'asdfas',1,'19:57:03',89),(57,'asfas',1,'19:57:07',89),(58,'2222',1,'19:57:19',89),(59,'sdaf',1,'19:59:32',90),(60,'sd',1,'20:03:02',90),(61,'啊啊啊',1,'20:05:55',80);

/*Table structure for table `ma_message` */

DROP TABLE IF EXISTS `ma_message`;

CREATE TABLE `ma_message` (
  `id` int(11) NOT NULL auto_increment,
  `content` text,
  `fromuserid` int(11) default NULL,
  `touserid` int(11) default NULL,
  `seedtime` datetime default NULL,
  `flag` int(2) default '0',
  PRIMARY KEY  (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=14 DEFAULT CHARSET=utf8;

/*Data for the table `ma_message` */

insert  into `ma_message`(`id`,`content`,`fromuserid`,`touserid`,`seedtime`,`flag`) values (7,'asdf ',7,20,'2014-10-23 13:28:11',0),(8,'aaaa',90,83,'2014-11-14 20:49:21',0),(9,'aaaaa',90,89,'2014-11-14 20:49:50',0),(10,'as ',80,83,'2014-11-15 11:11:40',0),(11,'asdfa ',80,83,'2014-11-15 11:24:36',0),(12,'你好',80,87,'2014-11-15 11:41:14',0),(13,'asd ',80,89,'2014-11-15 11:55:49',0);

/*Table structure for table `ma_news` */

DROP TABLE IF EXISTS `ma_news`;

CREATE TABLE `ma_news` (
  `id` int(11) NOT NULL auto_increment,
  `cid` int(11) default '0',
  `tid` int(11) default '0',
  `title` varchar(100) default NULL,
  `des` varchar(680) default NULL,
  `keyword` varchar(100) default NULL,
  `from` varchar(100) default NULL,
  `author` varchar(50) default NULL,
  `editor` varchar(50) default NULL,
  `content` text,
  `mapurl` varchar(300) default NULL,
  `telephone` varchar(13) default NULL,
  `hj` text,
  `tc` text,
  `yj` text,
  `fw` text,
  `zk` text,
  `ts` text,
  `ispic` int(11) default '0',
  `picurl` varchar(255) default NULL,
  `hits` int(11) default '0',
  `htop` int(11) default '0',
  `ctop` int(11) default '0',
  `hhdp` int(11) default '0',
  `isok` int(11) default '1',
  `mtime` datetime default '0000-00-00 00:00:00',
  `creattime` datetime default NULL,
  PRIMARY KEY  (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=172 DEFAULT CHARSET=utf8;

/*Data for the table `ma_news` */

insert  into `ma_news`(`id`,`cid`,`tid`,`title`,`des`,`keyword`,`from`,`author`,`editor`,`content`,`mapurl`,`telephone`,`hj`,`tc`,`yj`,`fw`,`zk`,`ts`,`ispic`,`picurl`,`hits`,`htop`,`ctop`,`hhdp`,`isok`,`mtime`,`creattime`) values (171,63,0,'阿斯蒂芬','撒',NULL,NULL,NULL,NULL,'<a class=\"ke-insertfile\" href=\"/ma/attached/file/20141115/20141115125439_55906.txt\" target=\"_blank\">下载</a>',NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,0,'',0,0,0,0,1,'0000-00-00 00:00:00','2014-11-15 12:55:12');

/*Table structure for table `ma_newssort` */

DROP TABLE IF EXISTS `ma_newssort`;

CREATE TABLE `ma_newssort` (
  `id` int(10) unsigned NOT NULL auto_increment,
  `name` varchar(50) default NULL,
  `path` varchar(255) default '0',
  `addtime` datetime default '0000-00-00 00:00:00',
  `order` int(10) default '0',
  `fid` int(10) default '0',
  `islist` int(11) default '0',
  `content` text,
  PRIMARY KEY  (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=64 DEFAULT CHARSET=utf8;

/*Data for the table `ma_newssort` */

insert  into `ma_newssort`(`id`,`name`,`path`,`addtime`,`order`,`fid`,`islist`,`content`) values (63,'1','0','0000-00-00 00:00:00',0,0,0,NULL);

/*Table structure for table `ma_question` */

DROP TABLE IF EXISTS `ma_question`;

CREATE TABLE `ma_question` (
  `qid` int(11) NOT NULL auto_increment,
  `question` varchar(255) default NULL,
  `tid` int(11) default NULL,
  `count` int(11) default '0',
  PRIMARY KEY  (`qid`)
) ENGINE=MyISAM AUTO_INCREMENT=583 DEFAULT CHARSET=utf8;

/*Data for the table `ma_question` */

insert  into `ma_question`(`qid`,`question`,`tid`,`count`) values (233,'其他<input type=\"text\" />',30,2),(234,'乡科级干部',30,116),(235,'党代表',30,16),(236,'人大代表',30,12),(237,'政协委员',30,19),(238,'村党组织书记',30,14),(239,'企业负责人',30,4),(240,'离退休老干部',30,6),(241,'基层群众',30,36),(242,'党外人士',30,8),(243,'其他',30,43),(244,'县级机关',31,15),(245,'县直单位',31,164),(246,'乡镇',31,51),(247,'村、社区',31,25),(248,'非公有制经济组织和社会组织',31,4),(249,'其他',31,15),(250,'好',32,234),(251,'较好',32,31),(252,'一般',32,7),(253,'较差',32,1),(254,'认识不够，思想上“不以为然”',33,4),(255,'落实不力，执行不到位',33,17),(256,'查处不严，查而不处，处不问责',33,9),(257,'制度不全，预防、查处、问责等配套机制不够',33,12),(258,'以上都不存在',33,240),(259,'形式主义',34,137),(260,'官僚主义',34,17),(261,'享乐主义',34,7),(262,'奢靡之风',34,4),(263,'政绩观不正确，发展观有偏差',35,13),(264,'工作漂浮，措施不硬',35,8),(265,'学风不浓，以干代学，不注重学用结合',35,15),(266,'急功近利，不从实际出发，做表面文章',35,25),(267,'调研蜻蜓点水、走马观花',35,17),(268,'以上都不存在',35,210),(269,'高高在上，主观片面，脱离群众',36,14),(270,'敷衍塞责、不负责任，不敢担当',36,12),(271,'抓不住问题的关键，不解剖麻雀，贪大求全',36,8),(272,'讲排场，摆阔气，迎来送往，前呼后拥',36,11),(273,'递条子、打招呼、说情风',36,15),(274,'以上都不存在',36,229),(275,'贪图安逸、不思进取',37,7),(276,'因循守旧、创新意识不强',37,15),(277,'自由散漫、纪律松懈、玩风盛行',37,6),(278,'超标准占房、配车、接待',37,17),(279,'以上都不存在',37,228),(280,'公款吃喝、铺张浪费',38,17),(281,'巧立名目，挥霍公款',38,8),(282,'大操大办、借机敛财',38,16),(283,'日益骄横、腐化堕落',38,5),(284,'以上都不存在',38,235),(285,'党性原则淡化、理想信念缺失',39,20),(286,'宗旨意识淡薄、联系群众不够',39,40),(287,'放松自我要求、行为随波逐流',39,20),(288,'纪律意识不强、执行党纪不严',39,17),(289,'其他方面',39,122),(290,'集中教育与日常工作“两张皮”',40,50),(291,'搞形式主义、走过场',40,105),(292,'不能解决党员群众关注的突出问题',40,59),(293,'学习教育流于形式',40,62),(294,'批评和自我批评流于形式',40,30),(295,'整改落实流于形式',40,37),(296,'活动出现偏差，影响团结稳定',40,34),(297,'群众参与不够',40,106),(298,'非常满意',41,153),(299,'满意',41,78),(300,'基本满意',41,37),(301,'不满意',41,4),(302,'走马观花，喜好不喜坏，不能了解真实情况',42,21),(303,'搞形式主义，增加基层负担',42,14),(304,'只听汇报，不接触群众',42,36),(305,'指导工作不得要领，不负责任地乱表态',42,1),(306,'其他方面',42,112),(307,'请提出意见',43,0),(308,'认识不够，思想上“不以为然”',55,16),(309,'落实不力，执行不到位',55,15),(310,'查处不严，查而不处，处不问责',55,9),(311,'制度不全，预防、查处、问责等配套机制不够',55,12),(312,'以上都不存在',55,53),(336,'查处不严，查而不处，处不问责',48,0),(335,'落实不力，执行不到位',48,8),(334,'认识不够，思想上“不以为然”',48,3),(333,'较差',47,0),(332,'一般',47,4),(331,'较好',47,15),(330,'好',47,147),(329,'其他',46,12),(328,'非公有制经济组织和社会组织',46,1),(327,'村、社区',46,16),(326,'乡镇',46,37),(325,'县直单位',46,94),(324,'县级机关',46,8),(323,'其他',45,26),(322,'党外人士',45,3),(321,'基层群众',45,18),(320,'离退休老干部',45,6),(319,'企业负责人',45,1),(318,'村党组织书记',45,7),(317,'政协委员',45,10),(316,'人大代表',45,10),(315,'党代表',45,12),(314,'乡科级干部',45,72),(313,'县级干部',45,2),(337,'制度不全，预防、查处、问责等配套机制不够',48,6),(338,'以上都不存在',48,152),(339,'形式主义',49,70),(340,'官僚主义',49,7),(341,'享乐主义',49,1),(342,'奢靡之风',49,1),(343,'政绩观不正确，发展观有偏差',50,4),(344,'工作漂浮，措施不硬',50,4),(345,'学风不浓，以干代学，不注重学用结合',50,3),(346,'急功近利，不从实际出发，做表面文章',50,10),(347,'调研蜻蜓点水、走马观花',50,8),(348,'以上都不存在',50,140),(349,'高高在上，主观片面，脱离群众',51,5),(350,'敷衍塞责、不负责任，不敢担当',51,3),(351,'抓不住问题的关键，不解剖麻雀，贪大求全',51,4),(352,'讲排场，摆阔气，迎来送往，前呼后拥',51,8),(353,'递条子、打招呼、说情风',51,2),(354,'以上都不存在',51,149),(355,'贪图安逸、不思进取',52,4),(356,'因循守旧、创新意识不强',52,9),(357,'自由散漫、纪律松懈、玩风盛行',52,3),(358,'超标准占房、配车、接待',52,7),(359,'以上都不存在',52,145),(360,'公款吃喝、铺张浪费',53,4),(361,'巧立名目，挥霍公款',53,1),(362,'大操大办、借机敛财',53,8),(363,'日益骄横、腐化堕落',53,1),(364,'以上都不存在',53,156),(365,'党性原则淡化、理想信念缺失',54,8),(366,'宗旨意识淡薄、联系群众不够',54,18),(367,'放松自我要求、行为随波逐流',54,5),(368,'纪律意识不强、执行党纪不严',54,7),(369,'其他方面',54,72),(370,'集中教育与日常工作“两张皮”',55,26),(371,'搞形式主义、走过场',55,57),(372,'不能解决党员群众关注的突出问题',55,27),(373,'学习教育流于形式',55,26),(374,'批评和自我批评流于形式',55,16),(375,'整改落实流于形式',55,18),(376,'活动出现偏差，影响团结稳定',55,14),(377,'群众参与不够',55,40),(378,'非常满意',56,104),(379,'满意',56,45),(380,'基本满意',56,15),(381,'不满意',56,3),(382,'走马观花，喜好不喜坏，不能了解真实情况',57,9),(383,'搞形式主义，增加基层负担',57,2),(384,'只听汇报，不接触群众',57,13),(385,'指导工作不得要领，不负责任地乱表态',57,0),(386,'其他方面',57,70),(387,'请提出意见',58,0),(388,'县级干部',59,1),(389,'乡科级干部',59,70),(390,'党代表',59,10),(391,'人大代表',59,10),(392,'政协委员',59,12),(393,'村党组织书记',59,7),(394,'企业负责人',59,1),(395,'离退休老干部',59,4),(396,'基层群众',59,21),(397,'党外人士',59,7),(398,'其他',59,27),(399,'县级机关',60,8),(400,'县直单位',60,97),(401,'乡镇',60,38),(402,'村、社区',60,14),(403,'非公有制经济组织和社会组织',60,1),(404,'其他',60,11),(405,'好',61,139),(406,'较好',61,28),(407,'一般',61,2),(408,'较差',61,1),(409,'认识不够，思想上“不以为然”',62,2),(410,'落实不力，执行不到位',62,12),(411,'查处不严，查而不处，处不问责',62,6),(412,'制度不全，预防、查处、问责等配套机制不够',62,6),(413,'以上都不存在',62,150),(414,'形式主义',63,70),(415,'官僚主义',63,14),(416,'享乐主义',63,4),(417,'奢靡之风',63,2),(418,'政绩观不正确，发展观有偏差',64,6),(419,'工作漂浮，措施不硬',64,10),(420,'学风不浓，以干代学，不注重学用结合',64,5),(421,'急功近利，不从实际出发，做表面文章',64,16),(422,'调研蜻蜓点水、走马观花',64,7),(423,'以上都不存在',64,138),(424,'高高在上，主观片面，脱离群众',65,9),(425,'敷衍塞责、不负责任，不敢担当',65,5),(426,'抓不住问题的关键，不解剖麻雀，贪大求全',65,5),(427,'讲排场，摆阔气，迎来送往，前呼后拥',65,9),(428,'递条子、打招呼、说情风',65,4),(429,'以上都不存在',65,145),(430,'贪图安逸、不思进取',66,8),(431,'因循守旧、创新意识不强',66,9),(432,'自由散漫、纪律松懈、玩风盛行',66,3),(433,'超标准占房、配车、接待',66,14),(434,'以上都不存在',66,142),(435,'公款吃喝、铺张浪费',67,9),(436,'巧立名目，挥霍公款',67,2),(437,'大操大办、借机敛财',67,11),(438,'日益骄横、腐化堕落',67,1),(439,'以上都不存在',67,151),(440,'党性原则淡化、理想信念缺失',68,11),(441,'宗旨意识淡薄、联系群众不够',68,17),(442,'放松自我要求、行为随波逐流',68,9),(443,'纪律意识不强、执行党纪不严',68,7),(444,'其他方面',68,70),(445,'集中教育与日常工作“两张皮”',69,24),(446,'搞形式主义、走过场',69,61),(447,'不能解决党员群众关注的突出问题',69,33),(448,'学习教育流于形式',69,40),(449,'批评和自我批评流于形式',69,18),(450,'整改落实流于形式',69,23),(451,'活动出现偏差，影响团结稳定',69,21),(452,'群众参与不够',69,54),(453,'非常满意',70,105),(454,'满意',70,44),(455,'基本满意',70,19),(456,'不满意',70,1),(457,'走马观花，喜好不喜坏，不能了解真实情况',71,11),(458,'搞形式主义，增加基层负担',71,6),(459,'只听汇报，不接触群众',71,13),(460,'指导工作不得要领，不负责任地乱表态',71,1),(461,'其他方面',71,69),(462,'请提出意见',72,0),(463,'县级干部',73,1),(464,'乡科级干部',73,70),(465,'党代表',73,9),(466,'人大代表',73,9),(467,'政协委员',73,14),(468,'村党组织书记',73,7),(469,'企业负责人',73,2),(470,'离退休老干部',73,5),(471,'基层群众',73,17),(472,'党外人士',73,5),(473,'其他',73,24),(474,'县级机关',74,7),(475,'县直单位',74,90),(476,'乡镇',74,33),(477,'村、社区',74,16),(478,'非公有制经济组织和社会组织',74,3),(479,'其他',74,14),(480,'好',75,141),(481,'较好',75,21),(482,'一般',75,1),(483,'较差',75,0),(484,'认识不够，思想上“不以为然”',76,5),(485,'落实不力，执行不到位',76,9),(486,'查处不严，查而不处，处不问责',76,1),(487,'制度不全，预防、查处、问责等配套机制不够',76,2),(488,'以上都不存在',76,147),(489,'形式主义',77,67),(490,'官僚主义',77,5),(491,'享乐主义',77,1),(492,'奢靡之风',77,0),(493,'政绩观不正确，发展观有偏差',78,5),(494,'工作漂浮，措施不硬',78,7),(495,'学风不浓，以干代学，不注重学用结合',78,6),(496,'急功近利，不从实际出发，做表面文章',78,6),(497,'调研蜻蜓点水、走马观花',78,5),(498,'以上都不存在',78,137),(499,'高高在上，主观片面，脱离群众',79,7),(500,'敷衍塞责、不负责任，不敢担当',79,5),(501,'抓不住问题的关键，不解剖麻雀，贪大求全',79,4),(502,'讲排场，摆阔气，迎来送往，前呼后拥',79,6),(503,'递条子、打招呼、说情风',79,2),(504,'以上都不存在',79,140),(505,'贪图安逸、不思进取',80,6),(506,'因循守旧、创新意识不强',80,8),(507,'自由散漫、纪律松懈、玩风盛行',80,0),(508,'超标准占房、配车、接待',80,9),(509,'以上都不存在',80,141),(510,'公款吃喝、铺张浪费',81,4),(511,'巧立名目，挥霍公款',81,3),(512,'大操大办、借机敛财',81,4),(513,'日益骄横、腐化堕落',81,1),(514,'以上都不存在',81,149),(515,'党性原则淡化、理想信念缺失',82,5),(516,'宗旨意识淡薄、联系群众不够',82,15),(517,'放松自我要求、行为随波逐流',82,5),(518,'纪律意识不强、执行党纪不严',82,7),(519,'其他方面',82,72),(520,'集中教育与日常工作“两张皮”',83,22),(521,'搞形式主义、走过场',83,55),(522,'不能解决党员群众关注的突出问题',83,26),(523,'学习教育流于形式',83,27),(524,'批评和自我批评流于形式',83,20),(525,'整改落实流于形式',83,26),(526,'活动出现偏差，影响团结稳定',83,19),(527,'群众参与不够',83,59),(528,'非常满意',84,103),(529,'满意',84,42),(530,'基本满意',84,17),(531,'不满意',84,0),(532,'走马观花，喜好不喜坏，不能了解真实情况',85,9),(533,'搞形式主义，增加基层负担',85,6),(534,'只听汇报，不接触群众',85,10),(535,'指导工作不得要领，不负责任地乱表态',85,0),(536,'其他方面',85,68),(537,'请提出意见',85,0),(538,'邸柏各庄村党支部',87,60372),(539,'王深港村党支部',87,60474),(540,'孙田各庄村党支部',87,60570),(541,'一分村党支部',87,59924),(542,'毕家窝铺村党支部',87,58958),(543,'西蔡庄村党支部',87,61493),(544,'重峪口村党支部',87,60263),(545,'峰山村党支部',87,59208),(546,'文化馆党支部',87,59776),(547,'政务服务中心党总支',87,59969),(548,'林业局党支部',87,59808),(549,'县职教中心党总支',87,60143),(550,'城乡建设规划管理处党支部',87,59355),(551,'引青灌区管理处党支部',87,61376),(552,'地方道路管理站党支部',87,59586),(553,'白丽娜【县第三实验小学校长】',88,58893),(554,'赵&nbsp;&nbsp;&nbsp;&nbsp;凯【县城乡工程建设监理有限公司经理】',88,64188),(555,'高凤茹【县政务服务中心工商局窗口首席代表】',88,63396),(556,'田秀兰【县政务服务中心国税局窗口首席代表】',88,63777),(557,'黄志利【河北武山水泥有限公司二线生产厂党支部书记、厂长】',88,63313),(558,'金会存【回族，卢龙镇司法所所长、卢龙镇人民调解委员会主任】',88,63421),(559,'孟素艳【县农牧局土肥站（环保站）站长】',88,63850),(560,'赵文芳【印庄乡白各庄村两委委员、计生专干】',88,63819),(561,'徐光磊【县水务局副局长】',88,68321),(562,'赵学锋【县交通运输局党委委员，运输管理站站长】',88,59961),(563,'闫绍兴【县中医院院长】',88,65267),(564,'杨立波【石门镇东阚各庄村党支部书记、村委会主任】',88,64053),(565,'张宝有【县文广新局主任科员】',88,63843),(566,'田树生【县直老干部第三支部书记】',88,63668),(567,'丁亚平【县刑警大队副大队长兼缉毒中队中队长】',88,63752),(568,'常国军【卢龙镇常家沟村党支部书记】',89,57506),(569,'张富平【下寨乡丁家沟村党支部书记】',89,55070),(570,'佟德文【刘家营乡三里店村党支部书记】',89,56649),(571,'王&nbsp;&nbsp;&nbsp;&nbsp;民【潘庄镇秀各庄村党支部书记】',89,57477),(572,'张秀丰【燕河营镇上兴隆庄村党支部书记】',89,49912),(573,'张爱林【陈官屯乡张家沟村党支部书记】',89,65208),(574,'岳学民【印庄乡岳各庄村党支部书记】',89,56962),(575,'闫继业【双望镇四新庄村党支部书记兼村主任】',89,81228),(576,'魏利民【刘田各庄镇赵官庄村党支部书记】',89,57871),(577,'闫立武【蛤泊乡闫深港村党支部书记】',89,66061),(578,'王一舟【蛤泊乡王家山村党支部书记】',89,57260),(579,'郭平山【蛤泊乡青龙河村党支部书记】',89,56945),(580,'姬文占【木井镇牛柏各庄村党支部书记、村主任】',89,64927),(581,'张凤珍【石门镇杨黄岭村党支部书记、村委会主任】',89,64597),(582,'李志均【县经济开发区郑庄村党支部书记】',89,57264);

/*Table structure for table `ma_subject` */

DROP TABLE IF EXISTS `ma_subject`;

CREATE TABLE `ma_subject` (
  `sid` int(11) NOT NULL auto_increment,
  `stitle` varchar(255) NOT NULL,
  `scontent` text,
  PRIMARY KEY  (`sid`)
) ENGINE=MyISAM AUTO_INCREMENT=38 DEFAULT CHARSET=utf8;

/*Data for the table `ma_subject` */

insert  into `ma_subject`(`sid`,`stitle`,`scontent`) values (33,'卢龙县党的群众路线教育实践活动<font color=red>县委</font>征求意见问卷','您好！感谢您参与我们的问卷调查工作。本调查问卷采取无记名方式，欢迎您对县委开展党的群众路线教育实践活动提出宝贵意见和建议。'),(34,'卢龙县党的群众路线教育实践活动<font color=red>人大</font>征求意见问卷','您好！感谢您参与我们的问卷调查工作。本调查问卷采取无记名方式，欢迎您对人大开展党的群众路线教育实践活动提出宝贵意见和建议。'),(35,'卢龙县党的群众路线教育实践活动<font color=red>政府</font>征求意见问卷','您好！感谢您参与我们的问卷调查工作。本调查问卷采取无记名方式，欢迎您对政府开展党的群众路线教育实践活动提出宝贵意见和建议。'),(36,'','您好！感谢您参与我们的问卷调查工参与我们的问卷调查工作。本调查问卷采取无记名方式,每人限制投票一次，每个选项最多选择10个。'),(37,'卢龙时代先锋网上投票','&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;为进一步推动第二批党的群众路线教育实践活动深入开展，激励全县基层党组织和广大党员干部学先进、争先锋、当标兵，树立服务发展、服务群众的先进旗帜，县委组织部在全县范围内组织开展此次“卢龙时代先锋”(十佳服务型党组织、十佳为民村党组织书记、十佳优秀共产党员)评选活动。为体现活动的公开、公平、公正，县委组织部在《卢龙党建网》设立专版，对“卢龙时代先锋”候选对象(十佳服务型党组织、十佳为民村党组织书记、十佳优秀共产党员每类各15个)的典型事迹进行了集中宣传报道，目前该活动已经进入网上投票环节，欢迎全县广大党员、干部、群众积极进行网上投票，在全县营造“积极向上、比学赶超”的浓厚氛围。（投票时间从7月14日起至7月25日止）\r\n<br><a href=\'http://www.lldjw.com/Show_Type.asp?typeid=53\' target=\'_blank\'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;了解候选对象详细情况请点击链接>>http://www.lldjw.com/Show_Type.asp?typeid=53</a>');

/*Table structure for table `ma_title` */

DROP TABLE IF EXISTS `ma_title`;

CREATE TABLE `ma_title` (
  `tid` int(11) NOT NULL auto_increment,
  `ttitle` varchar(255) default NULL,
  `sid` int(11) default NULL,
  `vcount` int(11) default '0',
  `listtype` int(11) default NULL,
  PRIMARY KEY  (`tid`)
) ENGINE=MyISAM AUTO_INCREMENT=90 DEFAULT CHARSET=utf8;

/*Data for the table `ma_title` */

insert  into `ma_title`(`tid`,`ttitle`,`sid`,`vcount`,`listtype`) values (30,'您的职务情况是',33,0,1),(31,'您所在的单位是',33,0,1),(32,'请您对县委领导班子和党员领导干部作风方面情况进行总结评价',33,0,1),(33,'您认为县委领导班子和党员领导干部在贯彻落实中央“八项规定”和有关规定方面存在哪些突出问题',33,0,2),(34,'您认为县委领导班子和党员领导干部在哪一类四风问题最为严重',33,0,2),(35,'您认为县委领导班子和党员领导干部在形式主义方面应主要解决',33,0,2),(36,'您认为县委领导班子和党员领导干部在官僚主义方面应主要解决',33,0,2),(37,'您认为县委领导班子和党员领导干部在享乐主义方面应主要解决',33,0,2),(38,'您认为县委领导班子和党员领导干部在奢靡之风方面应主要解决',33,0,2),(39,'您认为县委领导班子和党员领导干部存在“四风”问题的根源',33,0,2),(40,'您认为县委领导班子和党员领导干部党的群众路线教育实践活动应防止',33,0,2),(41,'您对县委领导干部深入基层一线解决实际问题是否满意',33,0,1),(42,'您认为县委领导干部下基层存在的突出问题是',33,0,1),(43,'您对县委领导班子和党员领导干部开展这次群众路线教育实践活动，还有哪些意见和建议？',33,0,3),(59,'您的职务情况是',35,0,1),(60,'您所在的单位是',35,0,1),(45,'您的职务情况是',34,0,1),(46,'您所在的单位是',34,0,1),(47,'请您对人大领导班子和党员领导干部作风方面情况进行总结评价',34,0,1),(48,'您认为人大领导班子和党员领导干部在贯彻落实中央“八项规定”和有关规定方面存在哪些突出问题',34,0,2),(49,'您认为人大领导班子和党员领导干部在哪一类四风问题最为严重',34,0,2),(50,'您认为人大领导班子和党员领导干部在形式主义方面应主要解决',34,0,2),(51,'您认为人大领导班子和党员领导干部在官僚主义方面应主要解决',34,0,2),(52,'您认为人大领导班子和党员领导干部在享乐主义方面应主要解决',34,0,2),(53,'您认为人大领导班子和党员领导干部在奢靡之风方面应主要解决',34,0,2),(54,'您认为人大领导班子和党员领导干部存在“四风”问题的根源',34,0,2),(55,'您认为人大领导班子和党员领导干部党的群众路线教育实践活动应防止',34,0,2),(56,'您对人大领导干部深入基层一线解决实际问题是否满意',34,0,1),(57,'您认为人大领导干部下基层存在的突出问题是',34,0,1),(58,'您对人大领导班子和党员领导干部开展这次群众路线教育实践活动，还有哪些意见和建议？',34,0,3),(61,'请您对政府领导班子和党员领导干部作风方面情况进行总结评价',35,0,1),(62,'您认为政府领导班子和党员领导干部在贯彻落实中央“八项规定”和有关规定方面存在哪些突出问题',35,0,2),(63,'您认为政府领导班子和党员领导干部在哪一类四风问题最为严重',35,0,2),(64,'您认为政府领导班子和党员领导干部在形式主义方面应主要解决',35,0,2),(65,'您认为政府领导班子和党员领导干部在官僚主义方面应主要解决',35,0,2),(66,'您认为政府领导班子和党员领导干部在享乐主义方面应主要解决',35,0,2),(67,'您认为政府领导班子和党员领导干部在奢靡之风方面应主要解决',35,0,2),(68,'您认为政府领导班子和党员领导干部存在“四风”问题的根源',35,0,2),(69,'您认为政府领导班子和党员领导干部党的群众路线教育实践活动应防止',35,0,2),(70,'您对政府领导干部深入基层一线解决实际问题是否满意',35,0,1),(71,'.您认为政府领导干部下基层存在的突出问题是',35,0,1),(72,'您对政府领导班子和党员领导干部开展这次群众路线教育实践活动，还有哪些意见和建议？',35,0,3),(73,'您的职务情况是',36,0,1),(75,'请您对政协领导班子和党员领导干部作风方面情况进行总结评价',36,0,1),(76,'您认为政协领导班子和党员领导干部在贯彻落实中央“八项规定”和有关规定方面存在哪些突出问题',36,0,2),(81,'您认为政协领导班子和党员领导干部在奢靡之风方面应主要解决',36,0,2),(82,'您认为政协领导班子和党员领导干部存在“四风”问题的根源',36,0,2),(83,'您认为政协领导班子和党员领导干部党的群众路线教育实践活动应防止',36,0,2),(84,'您对政协领导干部深入基层一线解决实际问题是否满意',36,0,1),(86,'您对政协领导班子和党员领导干部开展这次群众路线教育实践活动，还有哪些意见和建议？',36,0,3),(87,'十佳服务型党组织候选对象',37,0,2),(88,'十佳优秀共产党员候选人',37,0,2),(89,'十佳为民村党组织书记候选人',37,0,2);

/*Table structure for table `ma_user` */

DROP TABLE IF EXISTS `ma_user`;

CREATE TABLE `ma_user` (
  `id` int(11) NOT NULL auto_increment,
  `content` text,
  `mac` varchar(50) default NULL,
  `answer` varchar(120) default NULL,
  `uptime` datetime default NULL,
  `sid` int(11) default NULL,
  `uid` int(11) default '0',
  PRIMARY KEY  (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=101389 DEFAULT CHARSET=utf8;

/*Data for the table `ma_user` */

insert  into `ma_user`(`id`,`content`,`mac`,`answer`,`uptime`,`sid`,`uid`) values (101388,'您对政协领导班子和党员领导干部开展这次群众路线教育实践活动，还有哪些意见和建议？','','1,238,247,250','2014-11-15 14:35:59',0,80);

/*Table structure for table `member` */

DROP TABLE IF EXISTS `member`;

CREATE TABLE `member` (
  `uid` int(11) NOT NULL auto_increment,
  `username` varchar(100) default NULL,
  `password` varchar(32) default NULL,
  `email` varchar(200) default NULL,
  `moblie` varchar(15) default NULL,
  `reg_ip` varchar(20) default NULL,
  `reg_date` int(11) default NULL,
  `login_ip` varchar(20) default NULL,
  `login_date` int(11) default NULL,
  `usertype` int(1) NOT NULL default '1',
  `login_hits` int(11) default '0',
  `salt` varchar(6) default NULL,
  `address` varchar(100) default NULL,
  `name_repeat` int(2) default '0',
  `qqid` varchar(200) default NULL,
  `status` int(4) default NULL,
  `pwuid` int(11) default '0',
  `pw_repeat` int(1) default '0',
  `lock_info` varchar(200) character set gb2312 default NULL,
  `email_status` int(1) default NULL,
  `signature` varchar(100) default NULL,
  `sinaid` varchar(100) default NULL,
  `wxid` varchar(100) default '0',
  `wxname` varchar(100) default NULL,
  `wxbindtime` int(11) default '0',
  `passtext` varchar(100) default NULL,
  PRIMARY KEY  (`uid`)
) ENGINE=MyISAM AUTO_INCREMENT=91 DEFAULT CHARSET=gbk;

/*Data for the table `member` */

insert  into `member`(`uid`,`username`,`password`,`email`,`moblie`,`reg_ip`,`reg_date`,`login_ip`,`login_date`,`usertype`,`login_hits`,`salt`,`address`,`name_repeat`,`qqid`,`status`,`pwuid`,`pw_repeat`,`lock_info`,`email_status`,`signature`,`sinaid`,`wxid`,`wxname`,`wxbindtime`,`passtext`) values (79,'zhang','e2cc6e38b3936b94f9733e57acbc4b8c',NULL,NULL,NULL,1415865484,NULL,NULL,2,0,'ce4b74',NULL,0,NULL,0,0,0,NULL,NULL,NULL,NULL,'0',NULL,0,NULL),(78,'zhang','e8c970fe542879ea878823c38734f855',NULL,NULL,NULL,1415865189,NULL,NULL,2,0,'5a6067',NULL,0,NULL,0,0,0,NULL,NULL,NULL,NULL,'0',NULL,0,NULL),(77,'zhang','58f428f2bbd408b90deb952c0e9cc804',NULL,NULL,NULL,1415865164,NULL,NULL,2,0,'cf2d59',NULL,0,NULL,0,0,0,NULL,NULL,NULL,NULL,'0',NULL,0,NULL),(76,'zhang','bb6e8bf1fe69428b60cda472e5baf924',NULL,NULL,NULL,1415864889,NULL,NULL,2,0,'9824b6',NULL,0,NULL,0,0,0,NULL,NULL,NULL,NULL,'0',NULL,0,NULL),(75,'zhang','68fcdae0a297185e1646dc7fd77677c4',NULL,NULL,NULL,1415863818,NULL,NULL,2,0,'ad8ee5',NULL,0,NULL,0,0,0,NULL,NULL,NULL,NULL,'0',NULL,0,NULL),(74,'zhang','4ac6ffc025fe088a9213b2cb3ffbb5be',NULL,NULL,NULL,1415863751,NULL,NULL,2,0,'70f49a',NULL,0,NULL,0,0,0,NULL,NULL,NULL,NULL,'0',NULL,0,NULL),(73,'zhang','b634937399aa71f898af366a91ca0bac',NULL,NULL,NULL,1415863727,NULL,NULL,2,0,'f8bcef',NULL,0,NULL,0,0,0,NULL,NULL,NULL,NULL,'0',NULL,0,NULL),(72,'zhang','7e30798b713a3f8ec106642ac5ec02f3',NULL,NULL,NULL,1415863718,NULL,NULL,2,0,'6dad84',NULL,0,NULL,0,0,0,NULL,NULL,NULL,NULL,'0',NULL,0,NULL),(71,'zhang','76621fb043c3e455c981f85c9eca411a',NULL,NULL,NULL,1415863697,NULL,NULL,2,0,'139203',NULL,0,NULL,0,0,0,NULL,NULL,NULL,NULL,'0',NULL,0,NULL),(70,'zhang','d478d169aeb847893a1c85056f869503',NULL,NULL,NULL,1415863665,NULL,NULL,2,0,'14a176',NULL,0,NULL,0,0,0,NULL,NULL,NULL,NULL,'0',NULL,0,NULL),(69,'zhang','0e356bf90415520b218f57401eed6fa1',NULL,NULL,NULL,1415863474,NULL,NULL,2,0,'26ba22',NULL,0,NULL,0,0,0,NULL,NULL,NULL,NULL,'0',NULL,0,NULL),(68,'zhang','8ec6a973ef9c2eb8bf5fdefed7a56f3f',NULL,NULL,NULL,1415863426,NULL,NULL,2,0,'2b6f07',NULL,0,NULL,0,0,0,NULL,NULL,NULL,NULL,'0',NULL,0,NULL),(67,'zhang','c2c7a6919270b33609142ea059e2cc2c',NULL,NULL,NULL,1415863383,NULL,NULL,2,0,'7c597d',NULL,0,NULL,0,0,0,NULL,NULL,NULL,NULL,'0',NULL,0,NULL),(66,'zhang','5935fe155c9322ac9cd24306634d431c',NULL,NULL,NULL,1415863360,NULL,NULL,2,0,'0b436d',NULL,0,NULL,0,0,0,NULL,NULL,NULL,NULL,'0',NULL,0,NULL),(65,'zhang','87a4c80f1a46d555618924bf3ba2888f',NULL,NULL,NULL,1415863212,NULL,NULL,2,0,'cb7bd7',NULL,0,NULL,0,0,0,NULL,NULL,NULL,NULL,'0',NULL,0,NULL),(64,'zhang','c771848aeba8b9cd29e32b9d8ff237c6',NULL,NULL,NULL,1415863183,NULL,NULL,2,0,'f42416',NULL,0,NULL,0,0,0,NULL,NULL,NULL,NULL,'0',NULL,0,NULL),(63,'zhang','32343fa7feea9e17aee54a2d69eaee84',NULL,NULL,NULL,1415863155,NULL,NULL,2,0,'37dcb7',NULL,0,NULL,0,0,0,NULL,NULL,NULL,NULL,'0',NULL,0,NULL),(62,'zhang','1003b2bee14c5dc672ded4e94f638b3d',NULL,NULL,NULL,1415863065,NULL,NULL,2,0,'97f27e',NULL,0,NULL,0,0,0,NULL,NULL,NULL,NULL,'0',NULL,0,NULL),(61,'zhang','564c444b781682faf2b334d38da0bfe4',NULL,NULL,NULL,1415862985,NULL,NULL,2,0,'94d4b7',NULL,0,NULL,0,0,0,NULL,NULL,NULL,NULL,'0',NULL,0,NULL),(60,'zhang','3e8b56052f8a837dd9b6e539c51b349b',NULL,NULL,NULL,1415862899,NULL,NULL,2,0,'36f0e3',NULL,0,NULL,0,0,0,NULL,NULL,NULL,NULL,'0',NULL,0,NULL),(59,'zhang','0fd04f49746699c8454355b6c6f2e262',NULL,NULL,NULL,1415862867,NULL,NULL,2,0,'3df182',NULL,0,NULL,0,0,0,NULL,NULL,NULL,NULL,'0',NULL,0,NULL),(58,'zhang','e293453ebb70031cfe8c6fca2ff3b068',NULL,NULL,NULL,1415862775,NULL,NULL,2,0,'754b0f',NULL,0,NULL,0,0,0,NULL,NULL,NULL,NULL,'0',NULL,0,NULL),(57,'zhang','6d29501fbe427ac9d6183f66b6ecf161',NULL,NULL,NULL,1415848563,NULL,NULL,2,0,'363645',NULL,0,NULL,0,0,0,NULL,NULL,NULL,NULL,'0',NULL,0,NULL),(56,'zhang','3779f1f2ee317ba9730ee5879e59db94',NULL,NULL,NULL,1415848544,NULL,NULL,2,0,'0cda78',NULL,0,NULL,0,0,0,NULL,NULL,NULL,NULL,'0',NULL,0,NULL),(55,'zhang','7a0e4bca0b1f3aad1d5d417e45450d3e',NULL,NULL,NULL,1415848467,NULL,NULL,2,0,'3b1d3c',NULL,0,NULL,0,0,0,NULL,NULL,NULL,NULL,'0',NULL,0,NULL),(54,'zhang','1602b3092a37e967d73c16815a71259b',NULL,NULL,NULL,1415848407,NULL,NULL,2,0,'792716',NULL,0,NULL,0,0,0,NULL,NULL,NULL,NULL,'0',NULL,0,NULL),(53,'zhang','24a31d0fa29af969276f49710e74834d',NULL,NULL,NULL,1415848394,NULL,NULL,2,0,'a437c4',NULL,0,NULL,0,0,0,NULL,NULL,NULL,NULL,'0',NULL,0,NULL),(52,'zhang','24a31d0fa29af969276f49710e74834d',NULL,NULL,NULL,1415848394,NULL,NULL,2,0,'a437c4',NULL,0,NULL,0,0,0,NULL,NULL,NULL,NULL,'0',NULL,0,NULL),(51,'zhang','1c2e0317667b1aebae5fbfbe50f01655',NULL,NULL,NULL,1415848251,NULL,NULL,2,0,'bcef25',NULL,0,NULL,0,0,0,NULL,NULL,NULL,NULL,'0',NULL,0,NULL),(50,'zhang','8abfce3bc9d43c8defc56e2515041f48',NULL,NULL,NULL,1415848207,NULL,NULL,2,0,'fbf262',NULL,0,NULL,0,0,0,NULL,NULL,NULL,NULL,'0',NULL,0,NULL),(48,'zhang',NULL,NULL,NULL,NULL,NULL,NULL,NULL,1,0,NULL,NULL,0,NULL,NULL,0,0,NULL,NULL,NULL,NULL,'0',NULL,0,NULL),(49,'zhang','fb796305141a4972b28f541e939faea5',NULL,NULL,NULL,1415847829,NULL,NULL,2,0,'51ef54',NULL,0,NULL,0,0,0,NULL,NULL,NULL,NULL,'0',NULL,0,NULL),(46,'','',NULL,NULL,NULL,0,NULL,NULL,0,0,'',NULL,0,NULL,0,0,0,NULL,NULL,NULL,NULL,'0',NULL,0,NULL),(47,'','',NULL,NULL,NULL,0,NULL,NULL,0,0,'',NULL,0,NULL,0,0,0,NULL,NULL,NULL,NULL,'0',NULL,0,NULL),(44,'','',NULL,NULL,NULL,0,NULL,NULL,0,0,'',NULL,0,NULL,0,0,0,NULL,NULL,NULL,NULL,'0',NULL,0,NULL),(45,'','',NULL,NULL,NULL,0,NULL,NULL,0,0,'',NULL,0,NULL,0,0,0,NULL,NULL,NULL,NULL,'0',NULL,0,NULL),(42,'','',NULL,NULL,NULL,0,NULL,NULL,0,0,'',NULL,0,NULL,0,0,0,NULL,NULL,NULL,NULL,'0',NULL,0,NULL),(43,'','',NULL,NULL,NULL,0,NULL,NULL,0,0,'',NULL,0,NULL,0,0,0,NULL,NULL,NULL,NULL,'0',NULL,0,NULL),(41,'','',NULL,NULL,NULL,0,NULL,NULL,0,0,'',NULL,0,NULL,0,0,0,NULL,NULL,NULL,NULL,'0',NULL,0,NULL),(40,'','',NULL,NULL,NULL,0,NULL,NULL,0,0,'',NULL,0,NULL,0,0,0,NULL,NULL,NULL,NULL,'0',NULL,0,NULL),(39,'','',NULL,NULL,NULL,0,NULL,NULL,0,0,'',NULL,0,NULL,0,0,0,NULL,NULL,NULL,NULL,'0',NULL,0,NULL),(80,'zhang','f3f1530f5098d680b5be5f481249bd86',NULL,NULL,NULL,1415866110,NULL,NULL,2,0,'eefcb1',NULL,0,NULL,0,0,0,NULL,NULL,NULL,NULL,'0',NULL,0,NULL),(81,'zhang','f3f1530f5098d680b5be5f481249bd86',NULL,NULL,NULL,1415866110,NULL,NULL,2,0,'eefcb1',NULL,0,NULL,0,0,0,NULL,NULL,NULL,NULL,'0',NULL,0,NULL),(82,'zhang','22cbe40bce811a5801035fecd0d719f1',NULL,NULL,NULL,1415866448,NULL,NULL,2,0,'08592b',NULL,0,NULL,0,0,0,NULL,NULL,NULL,NULL,'0',NULL,0,NULL),(83,'杨超','64c02546012eaba96bbd2107afa5b109',NULL,NULL,NULL,1415882335,NULL,NULL,1,0,'f4faa6',NULL,0,NULL,0,0,0,NULL,NULL,NULL,NULL,'0',NULL,0,NULL),(84,'杨超','64c02546012eaba96bbd2107afa5b109',NULL,NULL,NULL,1415882335,NULL,NULL,1,0,'f4faa6',NULL,0,NULL,0,0,0,NULL,NULL,NULL,NULL,'0',NULL,0,NULL),(85,'李四','9751c8701ae9eb7f5b592371bae91cdf',NULL,NULL,NULL,1415882769,NULL,NULL,1,0,'11bf07',NULL,0,NULL,0,0,0,NULL,NULL,NULL,NULL,'0',NULL,0,NULL),(86,'李四','9751c8701ae9eb7f5b592371bae91cdf',NULL,NULL,NULL,1415882769,NULL,NULL,1,0,'11bf07',NULL,0,NULL,0,0,0,NULL,NULL,NULL,NULL,'0',NULL,0,NULL),(87,'王五','224c3d29e97d37ddb669754747bc749b',NULL,NULL,NULL,1415883027,NULL,NULL,1,0,'3ce2f3',NULL,0,NULL,0,0,0,NULL,NULL,NULL,NULL,'0',NULL,0,NULL),(88,'王五','224c3d29e97d37ddb669754747bc749b',NULL,NULL,NULL,1415883027,NULL,NULL,1,0,'3ce2f3',NULL,0,NULL,0,0,0,NULL,NULL,NULL,NULL,'0',NULL,0,NULL),(89,'阿道夫','7e5a032373c1da6064b04d9ca2722d4d',NULL,NULL,NULL,1415883098,NULL,NULL,1,0,'ae4783',NULL,0,NULL,0,0,0,NULL,NULL,NULL,NULL,'0',NULL,0,NULL),(90,'阿斯蒂芬','a96d6df13cdd843787f31d33c54c6208',NULL,NULL,NULL,1415883704,NULL,NULL,1,0,'8b3d02',NULL,0,NULL,0,0,0,NULL,NULL,NULL,NULL,'0',NULL,0,NULL);

/*Table structure for table `member_statis` */

DROP TABLE IF EXISTS `member_statis`;

CREATE TABLE `member_statis` (
  `uid` int(11) NOT NULL,
  `integral` varchar(10) NOT NULL default '0',
  `pay` double(10,2) NOT NULL default '0.00',
  `resume_num` int(10) NOT NULL,
  `fav_jobnum` int(10) NOT NULL,
  `sq_jobnum` int(10) NOT NULL,
  `message_num` int(10) NOT NULL,
  `down_num` int(10) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=gbk;

/*Data for the table `member_statis` */

insert  into `member_statis`(`uid`,`integral`,`pay`,`resume_num`,`fav_jobnum`,`sq_jobnum`,`message_num`,`down_num`) values (1,'0',0.00,0,0,0,0,0),(2,'0',0.00,0,0,0,0,0),(3,'0',0.00,0,0,0,0,0),(4,'0',0.00,0,0,0,0,0),(5,'0',0.00,0,0,0,0,0),(6,'0',0.00,0,0,0,0,0),(7,'0',0.00,0,0,0,0,0),(8,'0',0.00,0,0,0,0,0),(9,'0',0.00,0,0,0,0,0),(10,'0',0.00,0,0,0,0,0),(11,'0',0.00,0,0,0,0,0),(12,'0',0.00,0,0,0,0,0),(13,'0',0.00,0,0,0,0,0),(14,'0',0.00,0,0,0,0,0),(15,'0',0.00,0,0,0,0,0),(16,'0',0.00,0,0,0,0,0),(17,'0',0.00,0,0,0,0,0),(18,'0',0.00,0,0,0,0,0),(19,'0',0.00,0,0,0,0,0),(20,'0',0.00,0,0,0,0,0),(21,'0',0.00,0,0,0,0,0),(22,'0',0.00,0,0,0,0,0),(23,'0',0.00,0,0,0,0,0),(24,'0',0.00,0,0,0,0,0),(25,'0',0.00,0,0,0,0,0),(26,'0',0.00,0,0,0,0,0),(32,'0',0.00,0,0,0,0,0),(33,'0',0.00,0,0,0,0,0),(34,'0',0.00,0,0,0,0,0),(35,'0',0.00,0,0,0,0,0);

/*Table structure for table `message` */

DROP TABLE IF EXISTS `message`;

CREATE TABLE `message` (
  `id` int(11) NOT NULL auto_increment,
  `content` varchar(255) NOT NULL,
  `username` varchar(20) default NULL,
  `uid` int(11) default NULL,
  `status` int(1) default '0',
  `ctime` int(11) default NULL,
  `keyid` int(11) default '0',
  `fa_uid` int(11) default '0',
  `remind_status` int(11) default '1',
  PRIMARY KEY  (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=gbk;

/*Data for the table `message` */

/*Table structure for table `moblie_msg` */

DROP TABLE IF EXISTS `moblie_msg`;

CREATE TABLE `moblie_msg` (
  `id` int(11) NOT NULL auto_increment,
  `moblie` varchar(200) default NULL,
  `content` varchar(200) default NULL,
  `ctime` int(11) default NULL,
  `state` int(11) default NULL,
  PRIMARY KEY  (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=gbk;

/*Data for the table `moblie_msg` */

/*Table structure for table `msg` */

DROP TABLE IF EXISTS `msg`;

CREATE TABLE `msg` (
  `id` int(11) NOT NULL auto_increment,
  `uid` int(11) default NULL,
  `username` varchar(100) default NULL,
  `jobid` int(11) default NULL,
  `job_uid` int(11) default NULL,
  `datetime` int(11) default NULL,
  `reply` text,
  `content` text,
  `reply_time` int(11) default NULL,
  `com_name` varchar(100) default NULL,
  `job_name` varchar(100) default NULL,
  `del_status` int(11) default '0',
  `type` int(11) default '1',
  `user_remind_status` int(11) default '1',
  `com_remind_status` int(11) default '0',
  PRIMARY KEY  (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=gbk;

/*Data for the table `msg` */

/*Table structure for table `navigation` */

DROP TABLE IF EXISTS `navigation`;

CREATE TABLE `navigation` (
  `id` int(11) NOT NULL auto_increment,
  `nid` int(11) NOT NULL,
  `name` varchar(100) NOT NULL,
  `url` varchar(100) default NULL,
  `sort` int(11) default NULL,
  `display` int(1) NOT NULL,
  `eject` int(1) NOT NULL,
  `type` int(1) default '1',
  `furl` varchar(100) default NULL,
  `color` varchar(20) default NULL,
  `model` varchar(20) default NULL,
  `bold` int(11) default '0',
  PRIMARY KEY  (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=44 DEFAULT CHARSET=gbk;

/*Data for the table `navigation` */

insert  into `navigation`(`id`,`nid`,`name`,`url`,`sort`,`display`,`eject`,`type`,`furl`,`color`,`model`,`bold`) values (1,1,'首页','index.php',1,1,0,1,'index.html',NULL,NULL,0),(2,1,'找工作','index.php?m=com',2,1,0,1,'m_com.html',NULL,NULL,0),(3,1,'招人才','index.php?m=user',3,1,0,1,'m_user.html',NULL,NULL,0),(4,1,'职场资讯','news.html',7,1,0,1,'news.html',NULL,NULL,0),(5,1,'微招聘','index.php?m=once',6,1,0,1,'m_once.html',NULL,NULL,0),(6,2,'注册协议','/about/service.html',98,1,1,1,'/about/service.html',NULL,NULL,0),(7,2,'法律声明','/about/about.html',54,1,1,1,'/about/about.html',NULL,NULL,0),(8,3,'法律声明','/about/about.html',99,1,0,1,'/about/about.html',NULL,NULL,0),(9,3,'首页','index.html',55,1,0,1,'index.html',NULL,NULL,0),(17,1,'地图','index.php?m=map',10,1,1,1,'m_map.html',NULL,NULL,0),(11,1,'企业黄页','index.php?m=firm',4,1,0,1,'m_firm.html',NULL,NULL,0),(15,1,'招聘会','index.php?m=zph',9,1,0,1,'m_zph.html',NULL,NULL,0),(33,5,'排行榜','index.php?c=top',1,1,1,1,'m_top.html',NULL,NULL,0),(32,5,'问答','ask/index.php',0,1,1,1,'ask-index.html',NULL,NULL,0),(26,1,'微简历','index.php?m=tiny',6,1,0,1,'m_tiny.html',NULL,NULL,0),(31,5,'朋友圈','friend',0,1,0,1,'friend-index.html',NULL,NULL,0),(34,2,'法律声明','/about/phpyun.html',3,1,0,1,'/about/phpyun.html',NULL,NULL,0);

/*Table structure for table `navigation_type` */

DROP TABLE IF EXISTS `navigation_type`;

CREATE TABLE `navigation_type` (
  `id` int(11) NOT NULL auto_increment,
  `typename` varchar(100) NOT NULL,
  PRIMARY KEY  (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=6 DEFAULT CHARSET=gbk;

/*Data for the table `navigation_type` */

insert  into `navigation_type`(`id`,`typename`) values (1,'头部导航'),(2,'底部导航'),(3,'企业底部导航'),(5,'头部导航（橙色）');

/*Table structure for table `news_base` */

DROP TABLE IF EXISTS `news_base`;

CREATE TABLE `news_base` (
  `id` int(11) NOT NULL auto_increment,
  `nid` int(11) NOT NULL,
  `did` int(11) NOT NULL,
  `title` varchar(200) NOT NULL,
  `color` varchar(255) default NULL,
  `keyword` varchar(200) NOT NULL,
  `author` varchar(200) NOT NULL,
  `datetime` int(11) NOT NULL,
  `hits` int(11) NOT NULL,
  `describe` varchar(11) NOT NULL,
  `description` varchar(255) default NULL,
  `newsphoto` varchar(100) default NULL,
  `s_thumb` varchar(100) default NULL,
  `source` varchar(255) default NULL,
  `sort` int(11) default NULL,
  `lastupdate` int(11) default '0',
  PRIMARY KEY  (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=2 DEFAULT CHARSET=gbk;

/*Data for the table `news_base` */

insert  into `news_base`(`id`,`nid`,`did`,`title`,`color`,`keyword`,`author`,`datetime`,`hits`,`describe`,`description`,`newsphoto`,`s_thumb`,`source`,`sort`,`lastupdate`) values (1,3,0,'资料下载','','资料下载','',1415964560,4,'','资料下载',NULL,NULL,'',0,1415964560);

/*Table structure for table `news_content` */

DROP TABLE IF EXISTS `news_content`;

CREATE TABLE `news_content` (
  `nbid` int(11) NOT NULL,
  `content` text NOT NULL,
  PRIMARY KEY  (`nbid`)
) ENGINE=MyISAM DEFAULT CHARSET=gbk;

/*Data for the table `news_content` */

insert  into `news_content`(`nbid`,`content`) values (1,'资料下载');

/*Table structure for table `news_group` */

DROP TABLE IF EXISTS `news_group`;

CREATE TABLE `news_group` (
  `id` int(11) NOT NULL auto_increment,
  `keyid` int(11) NOT NULL,
  `name` varchar(100) NOT NULL,
  `sort` int(11) default '0',
  `rec` int(11) default '0',
  PRIMARY KEY  (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=18 DEFAULT CHARSET=gbk;

/*Data for the table `news_group` */

insert  into `news_group`(`id`,`keyid`,`name`,`sort`,`rec`) values (1,0,'职业指导',20,0),(2,0,'案例解析',0,0),(3,0,'管理百科',10,0),(4,0,'高端访谈',0,0),(5,0,'劳动法规',0,0),(6,0,'简历指导',0,0),(7,0,'现场招聘会',1,0),(8,0,'求职新闻',3,0),(9,0,'面试秘籍',3,0),(10,0,'薪酬行情',2,0),(17,0,'娱乐节目',0,0);

/*Table structure for table `once_job` */

DROP TABLE IF EXISTS `once_job`;

CREATE TABLE `once_job` (
  `id` int(11) NOT NULL auto_increment,
  `title` varchar(200) NOT NULL,
  `mans` varchar(100) NOT NULL,
  `require` varchar(255) NOT NULL,
  `companyname` varchar(255) NOT NULL,
  `phone` varchar(100) NOT NULL,
  `linkman` varchar(50) NOT NULL,
  `address` varchar(200) NOT NULL,
  `ctime` int(11) NOT NULL,
  `status` int(2) NOT NULL,
  `password` varchar(100) NOT NULL,
  `qq` varchar(20) default NULL,
  `email` varchar(150) default NULL,
  `edate` int(11) default NULL,
  PRIMARY KEY  (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=gbk;

/*Data for the table `once_job` */

/*Table structure for table `outside` */

DROP TABLE IF EXISTS `outside`;

CREATE TABLE `outside` (
  `id` int(11) NOT NULL auto_increment,
  `name` varchar(100) default NULL,
  `type` varchar(100) default NULL,
  `titlelen` int(10) default NULL,
  `infolen` int(10) default NULL,
  `byorder` varchar(200) default NULL,
  `num` int(11) default NULL,
  `code` text,
  `edittime` int(10) default NULL,
  `lasttime` int(11) default NULL,
  `urltype` varchar(200) default NULL,
  `timetype` varchar(200) default NULL,
  `where` varchar(200) default NULL,
  PRIMARY KEY  (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=19 DEFAULT CHARSET=gbk;

/*Data for the table `outside` */

insert  into `outside`(`id`,`name`,`type`,`titlelen`,`infolen`,`byorder`,`num`,`code`,`edittime`,`lasttime`,`urltype`,`timetype`,`where`) values (5,'最新企业','company',10,10,'uid desc',5,'&lt;ul&gt;\r\n    &lt;!--循环开始--&gt;\r\n    &lt;loop&gt;\r\n        &lt;li&gt;\r\n公司名称 代码：{companyname} &lt;br/&gt; \r\n链接 代码：{url} \r\n&lt;br/&gt;行业 代码：{hy} \r\n&lt;br/&gt;行业链接 代码：{hy_url} \r\n&lt;br/&gt;公司性质 代码：{pr}&lt;br/&gt;\r\n 企业地址 代码：{city} \r\n&lt;br/&gt;企业规模 代码：{mun} \r\n&lt;br/&gt;企业地址 代码：{address} \r\n&lt;br/&gt;固定电话 代码：{linkphone}&lt;br/&gt;\r\n 联系邮箱 代码：{linkmail} \r\n&lt;br/&gt;创办时间 代码：{sdate} \r\n&lt;br/&gt;注册资金 代码：{money}&lt;br/&gt;\r\n 邮政编码 代码：{zip} \r\n&lt;br/&gt;联系人 代码：{linkman} \r\n&lt;br/&gt;职位数 代码：{job_num} \r\n&lt;br/&gt;联系QQ 代码：{linkqq} \r\n&lt;br/&gt;联系电话 代码：{linktel}&lt;br/&gt;\r\n 企业网址 代码：{website} &lt;br/&gt;\r\n企业LOGO 代码：{logo}&lt;br/&gt;\r\n&lt;/li&gt;\r\n    &lt;/loop&gt;\r\n    &lt;!--循环结束--&gt;\r\n&lt;/ul&gt;',0,1398735558,'2','Y-m-d',NULL),(4,'最新简历','resume',20,4,'hits desc',5,'&lt;ul&gt;\r\n    &lt;!--循环开始--&gt;\r\n    &lt;loop&gt;\r\n        &lt;li&gt;\r\n\r\n简历名称 代码：{resumename} &lt;br/&gt;\r\n姓名 代码：{name} \r\n&lt;br/&gt;链接 代码：{url} \r\n&lt;br/&gt;年龄 代码：{birthday}\r\n&lt;br/&gt; 学历 代码：{edu}\r\n&lt;br/&gt; 更新时间 代码：{lastedit} \r\n&lt;br/&gt;浏览次数 代码：{hits} \r\n&lt;br/&gt;大头像 代码：{big_pic} \r\n&lt;br/&gt;小头像 代码：{small_pic} \r\n&lt;br/&gt;EMAIL 代码：{email} \r\n&lt;br/&gt;电话 代码：{tel} \r\n&lt;br/&gt;手机 代码：{moblie}\r\n&lt;br/&gt; 期望从事行业 代码：{hy} \r\n&lt;br/&gt;期望从事行业链接 代码：{hyurl} \r\n&lt;br/&gt;期望从事职位 代码：{job_classid} \r\n&lt;br/&gt;到岗时间 代码：{report} \r\n&lt;br/&gt;期望薪水 代码：{salary} \r\n&lt;br/&gt;期望工作性质 代码：{type} \r\n&lt;br/&gt;期望工作地点(江苏-南京) 代码：{gz_city} \r\n&lt;br/&gt;户籍所在地(江苏-南京) 代码：{hj_city} \r\n&lt;br/&gt;现居住地(江苏-南京) 代码：{jzd_city} \r\n&lt;br/&gt;工作经验 代码：{exp} \r\n&lt;br/&gt;详细地址 代码：{address} \r\n&lt;br/&gt;个人简介 代码：{description} \r\n&lt;br/&gt;身份证号码 代码：{idcard} \r\n&lt;br/&gt;个人主页/博客 代码：{homepage}\r\n&lt;/li&gt;\r\n    &lt;/loop&gt;\r\n    &lt;!--循环结束--&gt;\r\n&lt;/ul&gt;',0,1398735558,'1','Y-m-d',NULL),(6,'职位调用','job',10,10,'id desc',5,'&lt;ul&gt;\r\n    &lt;!--循环开始--&gt;\r\n    &lt;loop&gt;\r\n        &lt;li&gt;\r\n职位名称 代码：{jobname} &lt;br/&gt;\r\n公司名称 代码：{companyname}  &lt;br/&gt;\r\n职位链接 代码：{url}  &lt;br/&gt;\r\n公司链接 代码：{com_url}  &lt;br/&gt;\r\n从事行业 代码：{hy}  &lt;br/&gt;\r\n行业链接 代码：{hy_url}  &lt;br/&gt;\r\n招聘人数 代码：{num}  &lt;br/&gt;\r\n职位类型 代码：{jobtype}  &lt;br/&gt;\r\n学历要求 代码：{edu}  &lt;br/&gt;\r\n年龄要求 代码：{age}  &lt;br/&gt;\r\n到岗时间 代码：{report}  &lt;br/&gt;\r\n工作经验 代码：{exp}  &lt;br/&gt;\r\n语言要求 代码：{lang}  &lt;br/&gt;\r\n提供月薪 代码：{salary}  &lt;br/&gt;\r\n福利待遇 代码：{welfare}  &lt;br/&gt;\r\n有效日期 代码：{time}  &lt;br/&gt;\r\n工作地点 代码：{city} &lt;br/&gt;\r\n&lt;/li&gt;\r\n    &lt;/loop&gt;\r\n    &lt;!--循环结束--&gt;\r\n&lt;/ul&gt;',0,1398735558,'1','Y-m-d H:i',NULL),(7,'招聘会测试','zph',10,10,'id desc',5,'&lt;ul&gt;\r\n    &lt;!--循环开始--&gt;\r\n    &lt;loop&gt;\r\n        &lt;li&gt;\r\n&lt;a href=&quot;{url}&quot; {target}&gt;招聘会标题&lt;/a&gt; 代码：{title} &lt;br/&gt;\r\n链接 代码：{url} &lt;br/&gt;\r\n主办方 代码：{organizers} &lt;br/&gt;\r\n举办时间 代码：{time} &lt;br/&gt;\r\n举办会场 代码：{address} &lt;br/&gt;\r\n咨询电话 代码：{phone} &lt;br/&gt;\r\n联系人 代码：{linkman} &lt;br/&gt;\r\n网址 代码：{website} &lt;br/&gt;\r\n招聘会LOGO 代码：{logo} &lt;br/&gt;\r\n参与企业数 代码：{com_num}\r\n&lt;/li&gt;\r\n    &lt;/loop&gt;\r\n    &lt;!--循环结束--&gt;\r\n&lt;/ul&gt;',0,1398735559,'1','Y-m-d',NULL),(8,'新闻测试','news',10,10,'a.hits desc',5,'&lt;ul&gt;\r\n    &lt;!--循环开始--&gt;\r\n    &lt;loop&gt;\r\n        &lt;li&gt;\r\n新闻标题 代码：{title} &lt;br/&gt;\r\n链接 代码：{url} &lt;br/&gt;\r\n关键字 代码：{keyword} &lt;br/&gt;\r\n作者 代码：{author} &lt;br/&gt;\r\n发布时间 代码：{time} &lt;br/&gt;\r\n点击率 代码：{hits} &lt;br/&gt;\r\n描述 代码：{description} &lt;br/&gt;\r\n缩略图 代码：{thumb} &lt;br/&gt;\r\n来源 代码：{source}&lt;br/&gt;&lt;/li&gt;\r\n    &lt;/loop&gt;\r\n    &lt;!--循环结束--&gt;\r\n&lt;/ul&gt;',0,1398735559,'1','Y-m-d H:i',NULL),(9,'问答测试','ask',10,10,'answer_num desc',5,'&lt;ul&gt;\r\n    &lt;!--循环开始--&gt;\r\n    &lt;loop&gt;\r\n        &lt;li&gt;问答标题 代码：{title} &lt;br/&gt;\r\n问答链接 代码：{url} \r\n&lt;br/&gt;\r\n问答内容 代码：{content} \r\n&lt;br/&gt;\r\n发布人 代码：{name} \r\n&lt;br/&gt;\r\n发布时间 代码：{time} \r\n&lt;br/&gt;\r\n回答人数 代码：{answer_num} \r\n&lt;br/&gt;\r\n发布人头像 代码：{img} \r\n&lt;br/&gt;\r\n发布人链接 代码：{user_url}&lt;/li&gt;\r\n    &lt;/loop&gt;\r\n    &lt;!--循环结束--&gt;\r\n&lt;/ul&gt;',0,1398735559,'1','Y-m-d H:i',NULL),(11,'友情链接测试','link',10,10,'link_sorting asc',5,'&lt;ul&gt;\r\n    &lt;!--循环开始--&gt;\r\n    &lt;loop&gt;\r\n        &lt;li&gt;\r\n名称 代码：{link_name}&lt;br/&gt;\r\n链接 代码：{link_url} &lt;br/&gt;\r\n图片地址(图片链接使用) 代码：{link_src}&lt;br/&gt;\r\n&lt;/li&gt;\r\n    &lt;/loop&gt;\r\n    &lt;!--循环结束--&gt;\r\n&lt;/ul&gt;',0,1398735559,'1','Y-m-d','img_type_1'),(12,'一句话招聘测试','once',10,10,'id desc',5,'&lt;ul&gt;\r\n    &lt;!--循环开始--&gt;\r\n    &lt;loop&gt;\r\n        &lt;li&gt;职位名称 代码：{jobname} &lt;br/&gt;\r\n公司名称 代码：{companyname} &lt;br/&gt;\r\n链接 代码：{url} &lt;br/&gt;\r\n招聘人数 代码：{mans} &lt;br/&gt;\r\n招聘要求 代码：{require} &lt;br/&gt;\r\n联系电话 代码：{phone} &lt;br/&gt;\r\n联系人 代码：{linkman} &lt;br/&gt;\r\n联系地址 代码：{address} &lt;br/&gt;\r\n更新时间 代码：{time}&lt;br/&gt;&lt;/li&gt;\r\n    &lt;/loop&gt;\r\n    &lt;!--循环结束--&gt;\r\n&lt;/ul&gt;',0,1398735559,'1','Y-m-d',NULL),(13,'微简历测试','tiny',10,10,'id desc',5,'&lt;ul&gt;\r\n    &lt;!--循环开始--&gt;\r\n    &lt;loop&gt;\r\n        &lt;li&gt;姓名 代码：{name} &lt;br/&gt;\r\n链接 代码：{url}&lt;br/&gt;\r\n性别 代码：{sex} &lt;br/&gt;\r\n工作经验 代码：{exp} &lt;br/&gt;\r\n应聘职位 代码：{job} &lt;br/&gt;\r\n联系电话 代码：{mobile} &lt;br/&gt;\r\n个人说明 代码：{describe} &lt;br/&gt;\r\n更新时间 代码：{time}&lt;br/&gt;&lt;/li&gt;\r\n    &lt;/loop&gt;\r\n    &lt;!--循环结束--&gt;\r\n&lt;/ul&gt;',0,1398735559,'1','Y-m-d',NULL),(17,'关链字测试','keyword',10,10,'num desc',5,'&lt;ul&gt;\r\n    &lt;!--循环开始--&gt;\r\n    &lt;loop&gt;\r\n        &lt;li&gt;关键字名称 代码：{name} 链接 代码：{url} 搜索次数 代码：{num}&lt;/li&gt;\r\n    &lt;/loop&gt;\r\n    &lt;!--循环结束--&gt;\r\n&lt;/ul&gt;',0,1398735559,'1','Y-m-d','keytype_3'),(18,'用户测试','member',10,10,'login_hits desc',5,'<ul>\r\n    <!--循环开始-->\r\n    <loop>\r\n        <li>\r\n用户名 代码：{name} <br>\r\n链接 代码：{url}<br>\r\n EMAIL 代码：{email} <br>\r\n 手机 代码：{moblie} <br>\r\n 用户类型 代码：{usertype} <br>\r\n 登录次数 代码：{hits} <br>\r\n 注册时间 代码：{reg_date} <br>\r\n 登录时间 代码：{login_date}<br>\r\n</li>\r\n    </loop>\r\n    <!--循环结束-->\r\n</ul>',0,1401170637,'1','Y-m-d','usertype_1');

/*Table structure for table `property` */

DROP TABLE IF EXISTS `property`;

CREATE TABLE `property` (
  `id` int(11) NOT NULL auto_increment,
  `name` varchar(20) default NULL,
  `value` varchar(20) default NULL,
  PRIMARY KEY  (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=17 DEFAULT CHARSET=gbk;

/*Data for the table `property` */

insert  into `property`(`id`,`name`,`value`) values (15,'推荐','tj'),(16,'头条','t');

/*Table structure for table `pushrurl` */

DROP TABLE IF EXISTS `pushrurl`;

CREATE TABLE `pushrurl` (
  `id` int(11) NOT NULL auto_increment,
  `srcid` int(11) default NULL,
  `prio` int(11) default '0',
  `srcip` varchar(64) default NULL,
  `type` int(11) default '1',
  `cnd` varchar(16) default NULL,
  `ftime` datetime default NULL,
  `dura` int(11) default '3',
  `rurl` varchar(128) default NULL,
  `rurltoken` varchar(32) default '',
  `active` tinyint(4) default '1',
  `rectime` datetime default NULL,
  `sender` varchar(36) default NULL,
  `netid` varchar(36) default NULL,
  `progid` varchar(36) default NULL,
  `optime` datetime default NULL,
  PRIMARY KEY  (`id`),
  KEY `level` (`cnd`),
  KEY `dname` (`srcip`)
) ENGINE=MyISAM AUTO_INCREMENT=3 DEFAULT CHARSET=utf8;

/*Data for the table `pushrurl` */

insert  into `pushrurl`(`id`,`srcid`,`prio`,`srcip`,`type`,`cnd`,`ftime`,`dura`,`rurl`,`rurltoken`,`active`,`rectime`,`sender`,`netid`,`progid`,`optime`) values (1,NULL,1,'default',10,'','2013-08-26 15:00:00',20,'http://172.16.0.1/push/push1.html','172.16.0.1',1,'2013-08-26 15:00:00',NULL,NULL,NULL,NULL),(2,NULL,0,'172.16.0.100',10,NULL,'2013-08-26 15:00:00',40,'http://172.16.0.1/push/push2.html','172.16.0.1',1,'2013-08-26 15:00:00',NULL,NULL,NULL,NULL);

/*Table structure for table `q_class` */

DROP TABLE IF EXISTS `q_class`;

CREATE TABLE `q_class` (
  `id` int(11) NOT NULL auto_increment,
  `name` varchar(100) NOT NULL,
  `pid` int(11) NOT NULL,
  `pic` varchar(100) default NULL,
  `sort` int(11) NOT NULL,
  `intro` text,
  `add_time` int(11) NOT NULL,
  PRIMARY KEY  (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=3 DEFAULT CHARSET=gbk;

/*Data for the table `q_class` */

insert  into `q_class`(`id`,`name`,`pid`,`pic`,`sort`,`intro`,`add_time`) values (1,'互联网',0,NULL,1,'1',1406636447),(2,'人才招聘',1,NULL,0,'人才招聘简介！',1406639501);

/*Table structure for table `question` */

DROP TABLE IF EXISTS `question`;

CREATE TABLE `question` (
  `id` int(11) NOT NULL auto_increment,
  `title` text NOT NULL,
  `content` text NOT NULL,
  `cid` int(11) NOT NULL,
  `uid` int(11) NOT NULL,
  `answer_num` int(11) NOT NULL default '0',
  `visit` int(11) NOT NULL default '0',
  `is_recom` int(1) NOT NULL default '0',
  `last_time` int(11) default NULL,
  `add_time` int(11) NOT NULL,
  PRIMARY KEY  (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=gbk;

/*Data for the table `question` */

/*Table structure for table `reason` */

DROP TABLE IF EXISTS `reason`;

CREATE TABLE `reason` (
  `id` int(11) NOT NULL auto_increment,
  `name` varchar(100) NOT NULL,
  PRIMARY KEY  (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=8 DEFAULT CHARSET=gbk;

/*Data for the table `reason` */

insert  into `reason`(`id`,`name`) values (1,'非建设性提问'),(2,'不友善言论、垃圾内容与不适宜讨论的内容'),(3,'不构成提问或问题表意不明确'),(4,'问题已失效或过期'),(5,'广告等垃圾信息'),(6,'违法违规内容'),(7,'不宜公开讨论的政治内容');

/*Table structure for table `report` */

DROP TABLE IF EXISTS `report`;

CREATE TABLE `report` (
  `id` int(11) NOT NULL auto_increment,
  `p_uid` int(11) default NULL,
  `c_uid` int(11) default NULL,
  `eid` int(11) default NULL,
  `usertype` int(1) default NULL,
  `inputtime` int(11) default NULL,
  `username` varchar(100) character set gb2312 default NULL,
  `r_name` varchar(100) character set gb2312 default NULL,
  `status` int(1) default '0',
  `r_reason` varchar(200) character set gb2312 default NULL,
  `type` int(11) default '0',
  `r_type` int(11) default NULL,
  PRIMARY KEY  (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=gbk;

/*Data for the table `report` */

/*Table structure for table `resume` */

DROP TABLE IF EXISTS `resume`;

CREATE TABLE `resume` (
  `uid` int(11) NOT NULL,
  `name` varchar(25) default NULL,
  `sex` int(2) default NULL,
  `birthday` varchar(10) default NULL,
  `marriage` varchar(2) default NULL,
  `height` varchar(4) default NULL,
  `nationality` varchar(20) default NULL,
  `weight` varchar(4) default NULL,
  `idcard` varchar(20) default NULL,
  `telphone` varchar(20) default NULL,
  `telhome` varchar(20) default NULL,
  `email` varchar(50) default NULL,
  `edu` int(2) default NULL,
  `homepage` varchar(50) default NULL,
  `address` varchar(80) default NULL,
  `description` varchar(150) default NULL,
  `resume_photo` varchar(100) default NULL,
  `photo` varchar(100) default NULL,
  `expect` int(2) default '0',
  `def_job` int(11) default '0',
  `exp` int(11) default NULL,
  `status` int(2) default '1',
  `idcard_pic` varchar(100) default NULL,
  `idcard_status` int(1) default NULL,
  `statusbody` varchar(200) default NULL,
  `cert_time` int(11) default NULL,
  `r_status` int(1) default '0',
  `ant_num` int(11) default '0',
  `living` varchar(100) default NULL,
  `domicile` varchar(100) default NULL,
  `basic_info` int(11) default '1',
  KEY `def_job` (`def_job`)
) ENGINE=MyISAM DEFAULT CHARSET=gbk;

/*Data for the table `resume` */

/*Table structure for table `resume_cert` */

DROP TABLE IF EXISTS `resume_cert`;

CREATE TABLE `resume_cert` (
  `id` int(11) NOT NULL auto_increment,
  `uid` int(11) NOT NULL,
  `eid` int(11) NOT NULL,
  `name` varchar(25) NOT NULL,
  `sdate` int(10) default NULL,
  `edate` int(10) default NULL,
  `title` varchar(50) default NULL,
  `content` text,
  PRIMARY KEY  (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=gbk;

/*Data for the table `resume_cert` */

/*Table structure for table `resume_doc` */

DROP TABLE IF EXISTS `resume_doc`;

CREATE TABLE `resume_doc` (
  `id` int(11) NOT NULL auto_increment,
  `uid` int(11) NOT NULL,
  `eid` int(11) NOT NULL,
  `doc` text,
  PRIMARY KEY  (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=gbk;

/*Data for the table `resume_doc` */

/*Table structure for table `resume_edu` */

DROP TABLE IF EXISTS `resume_edu`;

CREATE TABLE `resume_edu` (
  `id` int(11) NOT NULL auto_increment,
  `uid` int(11) NOT NULL,
  `eid` int(11) NOT NULL,
  `name` varchar(25) NOT NULL,
  `sdate` int(10) default NULL,
  `edate` int(10) default NULL,
  `specialty` varchar(50) default NULL,
  `title` varchar(50) default NULL,
  `content` text,
  PRIMARY KEY  (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=gbk;

/*Data for the table `resume_edu` */

/*Table structure for table `resume_expect` */

DROP TABLE IF EXISTS `resume_expect`;

CREATE TABLE `resume_expect` (
  `id` int(11) NOT NULL auto_increment,
  `uid` int(11) NOT NULL,
  `name` varchar(25) default NULL,
  `hy` int(5) default NULL,
  `job_classid` varchar(100) default NULL,
  `provinceid` int(5) default '0',
  `cityid` int(5) default '0',
  `three_cityid` int(5) default '0',
  `salary` int(3) default '0',
  `type` int(3) default '0',
  `report` int(3) default '0',
  `defaults` int(1) NOT NULL default '0',
  `open` int(1) default '1',
  `full` int(3) default '0',
  `doc` int(1) default '0',
  `hits` int(6) default '0',
  `lastupdate` int(10) NOT NULL default '0',
  `def_job` int(11) default '0',
  `olduid` int(11) default '0',
  `integrity` int(11) default NULL,
  PRIMARY KEY  (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=gbk;

/*Data for the table `resume_expect` */

/*Table structure for table `resume_other` */

DROP TABLE IF EXISTS `resume_other`;

CREATE TABLE `resume_other` (
  `id` int(11) NOT NULL auto_increment,
  `uid` int(11) NOT NULL,
  `eid` int(11) NOT NULL,
  `title` varchar(50) default NULL,
  `content` text,
  PRIMARY KEY  (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=gbk;

/*Data for the table `resume_other` */

/*Table structure for table `resume_project` */

DROP TABLE IF EXISTS `resume_project`;

CREATE TABLE `resume_project` (
  `id` int(11) NOT NULL auto_increment,
  `uid` int(11) NOT NULL,
  `eid` int(11) NOT NULL,
  `name` varchar(25) NOT NULL,
  `sdate` int(10) default NULL,
  `edate` int(10) default NULL,
  `sys` varchar(50) default NULL,
  `title` varchar(50) default NULL,
  `content` text,
  PRIMARY KEY  (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=gbk;

/*Data for the table `resume_project` */

/*Table structure for table `resume_skill` */

DROP TABLE IF EXISTS `resume_skill`;

CREATE TABLE `resume_skill` (
  `id` int(11) NOT NULL auto_increment,
  `uid` int(11) NOT NULL,
  `eid` int(11) NOT NULL,
  `name` varchar(25) NOT NULL,
  `skill` int(5) NOT NULL,
  `ing` int(5) NOT NULL,
  `longtime` int(5) NOT NULL,
  PRIMARY KEY  (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=gbk;

/*Data for the table `resume_skill` */

/*Table structure for table `resume_tiny` */

DROP TABLE IF EXISTS `resume_tiny`;

CREATE TABLE `resume_tiny` (
  `id` int(25) NOT NULL auto_increment,
  `username` varchar(25) NOT NULL,
  `password` varchar(50) NOT NULL,
  `sex` int(11) NOT NULL,
  `exp` int(11) NOT NULL,
  `job` varchar(25) NOT NULL,
  `mobile` varchar(25) NOT NULL,
  `qq` varchar(25) NOT NULL,
  `production` text NOT NULL,
  `time` int(11) NOT NULL,
  `status` int(2) NOT NULL,
  PRIMARY KEY  (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=gbk;

/*Data for the table `resume_tiny` */

/*Table structure for table `resume_training` */

DROP TABLE IF EXISTS `resume_training`;

CREATE TABLE `resume_training` (
  `id` int(11) NOT NULL auto_increment,
  `uid` int(11) NOT NULL,
  `eid` int(11) NOT NULL,
  `name` varchar(25) NOT NULL,
  `sdate` int(10) default NULL,
  `edate` int(10) default NULL,
  `title` varchar(50) default NULL,
  `content` text,
  PRIMARY KEY  (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=gbk;

/*Data for the table `resume_training` */

/*Table structure for table `resume_work` */

DROP TABLE IF EXISTS `resume_work`;

CREATE TABLE `resume_work` (
  `id` int(11) NOT NULL auto_increment,
  `uid` int(11) NOT NULL,
  `eid` int(11) NOT NULL,
  `name` varchar(25) NOT NULL,
  `sdate` int(10) default NULL,
  `edate` int(10) default NULL,
  `department` varchar(50) default NULL,
  `title` varchar(50) default NULL,
  `content` text,
  PRIMARY KEY  (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=gbk;

/*Data for the table `resume_work` */

/*Table structure for table `seo` */

DROP TABLE IF EXISTS `seo`;

CREATE TABLE `seo` (
  `id` int(11) NOT NULL auto_increment,
  `seoname` varchar(100) default NULL,
  `ident` varchar(100) default NULL,
  `title` varchar(100) default NULL,
  `keywords` varchar(255) default NULL,
  `description` text,
  `time` int(11) default NULL,
  `affiliation` varchar(100) default NULL,
  PRIMARY KEY  (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=77 DEFAULT CHARSET=gbk;

/*Data for the table `seo` */

insert  into `seo`(`id`,`seoname`,`ident`,`title`,`keywords`,`description`,`time`,`affiliation`) values (1,'首页','index','首页- {webname}','找工作,人才,工作,求职,招聘,简历,跳槽,高薪,面试,应聘,兼职','hr135人才网为个人提供最全最新最准确的企业职位招聘信息，为企业提供全方位的人力资源服务，帮助个人求职者快速的找到工作。',1357630306,'0,4,13'),(2,'企业招聘','com','企业招聘 - {seacrh_class}','企业招聘,最新职位,找工作,面试{seacrh_class}','hr135人才网为个人提供最全最新最准确的企业职位招聘信息，为企业提供全方位的人力资源服务，帮助个人求职者快速的找到工作。',1356421576,''),(5,'人才展示','user','人才展示{webname}','找工作,人才,工作,求职,招聘,简历,跳槽,高薪,面试,应聘,兼职','hr135人才网为个人提供最全最新最准确的企业职位招聘信息，为企业提供全方位的人力资源服务，帮助个人求职者快速的找到工作。',1356515133,''),(6,'新闻首页','news','新闻首页','2','22222',1332839310,NULL),(7,'新闻列表','newslist','{news_class} - 新闻列表','找工作,人才,工作,求职,招聘,简历,跳槽,高薪,面试,应聘,兼职','hr135人才网为个人提供最全最新最准确的企业职位招聘信息，为企业提供全方位的人力资源服务，帮助个人求职者快速的找到工作。',1356511243,''),(8,'一句话招聘','once','一句话招聘','找工作,人才,工作,求职,招聘,简历,跳槽,高薪,面试,应聘,兼职','hr135人才网为个人提供最全最新最准确的企业职位招聘信息，为企业提供全方位的人力资源服务，帮助个人求职者快速的找到工作。',1332841137,NULL),(9,'高级搜索','search','高级搜索','找工作,人才,工作,求职,招聘,简历,跳槽,高薪,面试,应聘,兼职','hr135人才网为个人提供最全最新最准确的企业职位招聘信息，为企业提供全方位的人力资源服务，帮助个人求职者快速的找到工作。',1332841128,NULL),(10,'兼职招聘','part','兼职招聘','jnjkn','hr135人才网为个人提供最全最新最准确的企业职位招聘信息，为企业提供全方位的人力资源服务，帮助个人求职者快速的找到工作。',1332840504,NULL),(11,'忘记密码','forgetpw','忘记密码','找工作,人才,工作,求职,招聘,简历,跳槽,高薪,面试,应聘,兼职','hr135人才网为个人提供最全最新最准确的企业职位招聘信息，为企业提供全方位的人力资源服务，帮助个人求职者快速的找到工作。',1332841117,NULL),(12,'友情链接','friend','友情链接','找工作,人才,工作,求职,招聘,简历,跳槽,高薪,面试,应聘,兼职','hr135人才网为个人提供最全最新最准确的企业职位招聘信息，为企业提供全方位的人力资源服务，帮助个人求职者快速的找到工作。',1332841174,NULL),(13,'登录','login','登录','找工作,人才,工作,求职,招聘,简历,跳槽,高薪,面试,应聘,兼职','hr135人才网为个人提供最全最新最准确的企业职位招聘信息，为企业提供全方位的人力资源服务，帮助个人求职者快速的找到工作。',1332841092,NULL),(14,'QQ登录','qqlogin','QQ登录','找工作,人才,工作,求职,招聘,简历,跳槽,高薪,面试,应聘,兼职','不好不坏',1332841075,NULL),(15,'注册','register','注册','找工作,人才,工作,求职,招聘,简历,跳槽,高薪,面试,应聘,兼职','hr135人才网为个人提供最全最新最准确的企业职位招聘信息，为企业提供全方位的人力资源服务，帮助个人求职者快速的找到工作。',1332841068,NULL),(16,'简历','resume','简历{resume_username}','找工作,人才,工作,求职,招聘,简历,跳槽,高薪,面试,应聘,兼职','hr135人才网为个人提供最全最新最准确的企业职位招聘信息，为企业提供全方位的人力资源服务，帮助个人求职者快速的找到工作。',1356445612,''),(17,'招聘会','zph','招聘会-{webname}','招聘会,大型招聘会,','招聘会,大型招聘会,招聘会,大型招聘会,招聘会,大型招聘会,',1343480886,NULL),(18,'微招聘','wzp','微博招聘,微招聘,快速招聘','微博招聘,微招聘,快速招聘，海量微博资源','微博招聘,微招聘,快速招聘，海量微博资源微博招聘,微招聘,快速招聘，海量微博资源微博招聘,微招聘,快速招聘，海量微博资源微博招聘,微招聘,快速招聘，海量微博资源',1343117651,NULL),(19,'企业黄页','firm','企业黄页-{city}{webname}','企业名录，名企招聘，企业关注','企业黄页',1343220995,NULL),(20,'职位页面','comapply','{company_name}-{job_name}','{company_name}-{webkeyword}','{job_desc}',1400312664,''),(22,'新闻内容页','news_article','{news_class} - {news_title} - {news_source} - {news_author} ','{news_keyword}','{news_desc}',1400116956,''),(23,'公告页','announcement','{news_title}','{webname} - {webkeyword}','{webname} - {webdesc}',1356618100,''),(24,'分享简历','resume_share','分享简历--{resume_username}','分享简历','分享简历',1358582606,'0'),(25,'地图招聘','map','地图招聘 - {webname}','地图招聘','地图招聘',1372909820,''),(32,'微简历','tiny','微简历-{webname}','{webkeyword}','{webdesc}',1374717247,''),(33,'问答首页','ask_index','问答首页-{webname}','{webkeyword}','{webdesc}',1374717488,''),(34,'问答搜索页','ask_search','问答搜索页-{webname}','{webkeyword}','{webdesc}',1374717569,''),(35,'问答话题页','ask_topic','问答话题页-{webname}','{webkeyword}','{webdesc}',1374717643,''),(36,'问答一周热点','ask_hot_week','一周热点-{webname}','{webkeyword}','{webdesc}',1374717730,''),(37,'我的问答','ask_my_question','我的问答-{webname}','{webkeyword}','{webdesc}',1374717808,''),(38,'问答动态','seo_dynamic','动态-问答-{webname}','{webkeyword}','{webdesc}',1374717951,''),(39,'我的回答','ask_my_answer','我的回答-{webname}','{webkeyword}','{webdesc}',1374718013,''),(40,'我要提问','ask_add_question','我要提问-{webname}','{webkeyword}','{webdesc}',1374718098,''),(42,'添加微简历','tinyadd','发布微简历-{webname}','{webkeyword}','{webdesc}',1374746423,''),(43,'朋友网首页','fri_index','朋友圈首页','朋友圈首页','朋友圈首页',1374809259,'0'),(44,'朋友圈个人主页','fri_profile','朋友圈个人主页','朋友圈个人主页','朋友圈个人主页',1374809657,'0'),(45,'我的好友','fri_myfriend','我的好友','我的好友','我的好友',1374809718,'0'),(46,'添加好友','fri_addfriend','添加好友','添加好友','添加好友',1374809806,''),(47,'好友申请','fri_applyfriend','好友申请','好友申请','好友申请',1374809857,'0'),(48,'我的留言板','fri_messagelist','我的留言板','我的留言板','我的留言板',1374809901,''),(49,'修改资料','fri_info','修改资料','修改资料','修改资料',1374809969,'0'),(50,'修改头像','fri_photo','修改头像','修改头像','修改头像',1375185390,'0'),(51,'我关注的问题','atten_question','我关注的问题-{webname}','{webkeyword}','{webdesc}',1375839339,'0'),(53,'职位推荐','recommend','{webname}职位推荐','{webname}职位推荐','{webname}职位推荐',1376310278,'0'),(54,'排行榜','top','排行榜 - {webname}','{webkeyword}','{webdesc}',1377312541,''),(55,'电脑访问wap','moblie','wap - {webname}','{webkeyword}','{webdesc}',1377312613,''),(56,'微简历-内容页','tiny_cont','{tiny_username} -内容页','{tiny_job}','{tiny_desc}',1383816000,''),(61,'公司首页','company_index','{company_name}-公司首页-{webname}','{company_name}-公司首页-{webname}','为个人提供最全最新最准确的企业职位招聘信息，为企业提供全方位的人力资源服务，帮助个人求职者快速的找到工作{company_name_desc}',1400117095,'0'),(62,'公司招聘职位','company_post','{company_name}-招聘职位-{webname}','{company_name}-招聘职位-{webname}','为个人提供最全最新最准确的企业职位招聘信息，为企业提供全方位的人力资源服务，帮助个人求职者快速的找到工作',1383274106,''),(63,'企业形象','company_show','{company_name}-企业形象-{webname}','{company_name}-企业形象-{webname}','为个人提供最全最新最准确的企业职位招聘信息，为企业提供全方位的人力资源服务，帮助个人求职者快速的找到工作',1383274202,''),(64,'企业产品展示','company_product','{company_name}-产品展示-{webname}','{company_name}-产品展示-{webname}','为个人提供最全最新最准确的企业职位招聘信息，为企业提供全方位的人力资源服务，帮助个人求职者快速的找到工作',1383275001,''),(65,'公司简介','company_intro','{company_name}-公司简介-{webname}','{company_name}-公司简介-{webname}','为个人提供最全最新最准确的企业职位招聘信息，为企业提供全方位的人力资源服务，帮助个人求职者快速的找到工作',1383275058,''),(66,'公司新闻','company_news','{company_name}-公司新闻-{webname}','{company_name}-公司新闻-{webname}','为个人提供最全最新最准确的企业职位招聘信息，为企业提供全方位的人力资源服务，帮助个人求职者快速的找到工作',1400118386,''),(67,'地理位置','company_position','{company_name}-地理位置-{webname}','{company_name}-地理位置-{webname}','为个人提供最全最新最准确的企业职位招聘信息，为企业提供全方位的人力资源服务，帮助个人求职者快速的找到工作',1383275139,''),(68,'联系我们','company_connection','{company_name}-联系我们-{webname}','{company_name}-联系我们-{webname}','为个人提供最全最新最准确的企业职位招聘信息，为企业提供全方位的人力资源服务，帮助个人求职者快速的找到工作',1383275186,''),(69,'企业产品内容页','company_productshow','{company_name}-{company_product}-{webname}','{company_name}-{company_product}-{webname}','为个人提供最全最新最准确的企业职位招聘信息，为企业提供全方位的人力资源服务，帮助个人求职者快速的找到工作',1383276043,''),(70,'企业新闻内容页','company_newsshow','{company_name}-{company_news}-{webname}','{company_name}-{company_news}-{webname}','为个人提供最全最新最准确的企业职位招聘信息，为企业提供全方位的人力资源服务，帮助个人求职者快速的找到工作',1399293165,''),(72,'找工作列表页','com_search','职位列表 {seacrh_class}','{webkeyword}','{webdesc}',1400055579,''),(73,'找人才列表页','user_search','人才列表 {seacrh_class}','{webkeyword}','{webdesc}',1400055563,''),(75,'个人身份证认证','verifica','个人身份证认证-{webname}','{webkeyword}','{webdesc}',1400586102,''),(76,'招聘会详情页','zph_show','{zph_title}-招聘会-{webname}','{zph_title}','{zph_desc}',1406639760,'');

/*Table structure for table `smspool` */

DROP TABLE IF EXISTS `smspool`;

CREATE TABLE `smspool` (
  `id` int(11) NOT NULL auto_increment,
  `msgid` int(11) default NULL,
  `prefix` varchar(64) default '',
  `sms` varchar(128) default NULL,
  `postfix` varchar(64) default '',
  `stat` smallint(6) default '100',
  `cndmacfirst` int(11) default '0',
  `cndmacstay` int(11) default '0',
  `cndpagefirst` int(11) default '0',
  `cndpagestay` int(11) default '0',
  `cndonsite` tinyint(4) default '0',
  `cndonline` tinyint(4) default '0',
  `cndfromtime` datetime default '1970-01-01 00:00:00',
  `cndtotime` datetime default '9999-01-01 00:00:00',
  `updtime` datetime default NULL,
  `rectime` datetime default NULL,
  PRIMARY KEY  (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

/*Data for the table `smspool` */

/*Table structure for table `sysmsg` */

DROP TABLE IF EXISTS `sysmsg`;

CREATE TABLE `sysmsg` (
  `id` int(11) NOT NULL auto_increment,
  `content` varchar(255) NOT NULL,
  `fa_uid` int(11) NOT NULL,
  `username` varchar(20) NOT NULL,
  `ctime` int(11) NOT NULL,
  PRIMARY KEY  (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=gbk;

/*Data for the table `sysmsg` */

/*Table structure for table `templates` */

DROP TABLE IF EXISTS `templates`;

CREATE TABLE `templates` (
  `id` int(10) NOT NULL auto_increment,
  `name` varchar(200) default NULL,
  `title` varchar(255) default NULL,
  `content` text,
  PRIMARY KEY  (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=28 DEFAULT CHARSET=gbk;

/*Data for the table `templates` */

insert  into `templates`(`id`,`name`,`title`,`content`) values (1,'emailreg','{webname}注册会员!','{webname}{weburl}'),(2,'emailfkcg','{webname}{weburl}{username}','ddddddddddddd'),(3,'emailyqms','{webname}-邀请面试','{webname}-{company} 邀请你您面试！详情请登录{weburl}&lt;br /&gt;'),(4,'msgyqms','','你好！{webname}{company}邀请您面试！'),(5,'emailzzshtg','{webname}{weburl}','&lt;p&gt;\r\n	欢迎您使用{webname}\r\n&lt;/p&gt;\r\n&lt;p&gt;\r\n	网址：{weburl}\r\n&lt;/p&gt;\r\n&lt;p&gt;\r\n	电话：{webtel}\r\n&lt;/p&gt;\r\n&lt;p&gt;\r\n	您发布的职位 {jobname} 通过了审核。\r\n&lt;/p&gt;\r\n&lt;p&gt;\r\n	时间：{date}\r\n&lt;/p&gt;\r\n&lt;p&gt;\r\n	&lt;br /&gt;\r\n&lt;/p&gt;'),(6,'msgreg','','{webname}注册通知：{weburl}用户名：{username}密码：{password}'),(7,'msgzzshtg','','{webname}{webtel}{date}'),(8,'emailgetpass','{webname}找回密码!','&lt;p&gt;\r\n	您的帐号{username}&amp;amp;nbsp; 新密码：{password}\r\n&lt;/p&gt;'),(9,'msggetpass','','{webname}{weburl}{webtel}{password}'),(10,'emailsqzw','{webname}职位申请：{jobname}','&lt;p&gt;\r\n	您好，您发布的职位：{jobname} 有人投递了简历，请尽快登录 {weburl} 查看 ！这是来自{webname} 的职位申请通知！\r\n&lt;/p&gt;\r\n&lt;p&gt;\r\n	时间：{date}\r\n&lt;/p&gt;'),(11,'msgsqzw','','您好，有用户在{webname}上成功申请了您发布的职位：{jobname}，详细请登录：{weburl}'),(19,'email_userstatus','{webname}-会员审核','&lt;p&gt;\r\n	{webname}-{status_info}\r\n&lt;/p&gt;\r\n&lt;p&gt;\r\n	{date}\r\n&lt;/p&gt;'),(12,'msgfkcg','','{webname}{weburl}{webtel}'),(13,'emailcert','{webname}邮箱认证','&lt;p&gt;\r\n	{webname}{weburl}\r\n&lt;/p&gt;\r\n&lt;p&gt;\r\n	联系我们：{webtel}\r\n&lt;/p&gt;\r\n&lt;p&gt;\r\n	激活地址：{url}\r\n&lt;/p&gt;\r\n&lt;p&gt;\r\n	时间：{date}\r\n&lt;/p&gt;'),(14,'msgcert','','{webname}{code}'),(15,'emaillock','会员账号锁定说明','{lock_info}'),(16,'emailcomcert','企业营业执照审核邮件回复--{webname}','&lt;p&gt;\r\n	{comname}：\r\n&lt;/p&gt;\r\n&lt;p&gt;\r\n	&amp;nbsp;&amp;nbsp;&amp;nbsp;&amp;nbsp;&amp;nbsp;&amp;nbsp;&amp;nbsp;&amp;nbsp;{certinfo}\r\n&lt;/p&gt;\r\n&lt;p&gt;\r\n	&lt;br /&gt;\r\n&lt;/p&gt;\r\n&lt;p&gt;\r\n	{webname} {weburl} {webtel}\r\n&lt;/p&gt;'),(17,'emailusercert','个人身份认证审核邮件回复--{webname}','&lt;p&gt;\r\n	{username} ：\r\n&lt;/p&gt;\r\n&lt;p&gt;\r\n	&amp;nbsp;&amp;nbsp;&amp;nbsp;&amp;nbsp;&amp;nbsp;&amp;nbsp;&amp;nbsp;&amp;nbsp;{certinfo}\r\n&lt;/p&gt;\r\n&lt;p&gt;\r\n	&lt;br /&gt;\r\n&lt;/p&gt;\r\n&lt;p&gt;\r\n	{webname} {weburl} {webtel}\r\n&lt;/p&gt;'),(18,'emailjobed','{com_name}','&lt;p&gt;\r\n	您好，贵公司【{com_name}】发布的职位【{job_name}】已过期。\r\n&lt;/p&gt;\r\n&lt;p&gt;\r\n	&lt;br /&gt;\r\n&lt;/p&gt;\r\n&lt;p&gt;\r\n	&lt;br /&gt;\r\n&lt;/p&gt;\r\n&lt;p&gt;\r\n	---{webname}{weburl}{webtel}\r\n&lt;/p&gt;'),(20,'emailuserstatus','{webname}-会员审核','&lt;p&gt;\r\n	{webname}\r\n&lt;/p&gt;\r\n&lt;p&gt;\r\n	{status_info}\r\n&lt;/p&gt;\r\n&lt;p&gt;\r\n	{date}\r\n&lt;/p&gt;'),(21,'emailzzshwtg','{webname}--职位审核未通过','&lt;p&gt;\r\n	您在{webname}上发布了 {jobname} 没有通过审核，有什么问题，您可以通过{webtel}联系我们。\r\n&lt;/p&gt;\r\n&lt;p&gt;\r\n	审核原因：{status_info}\r\n&lt;/p&gt;\r\n&lt;p&gt;\r\n	时间：{date}\r\n&lt;/p&gt;'),(22,'emailremind','邮件提醒-{webname}','您已经很长时间没有来 {webname} 。&lt;br /&gt;'),(23,'msgremind','','您好，你已经很长时间没有来{webname}'),(24,'msgcomdy','','{webname} 发布了新的人才 {resumename}，网址：{weburl}，网站电话：{webtel}'),(25,'msguserdy','','{webname} 发布了新的职位 {jobname}，网址：{weburl}，网站电话：{webtel}'),(26,'emailuserdy','{webname}-邮件订阅','{webname},有人发布了{jobname}，详情请登录{weburl} 。网站电话：{webtel}<br />'),(27,'emailcomdy','{webname}-邮件订阅','{webname},有人发布了{resumename}，详情请登录{weburl} 。网站电话：{webtel}');

/*Table structure for table `user_resume` */

DROP TABLE IF EXISTS `user_resume`;

CREATE TABLE `user_resume` (
  `id` int(10) NOT NULL auto_increment,
  `uid` int(10) NOT NULL,
  `eid` int(10) NOT NULL,
  `expect` int(1) default '0',
  `skill` int(1) default '0',
  `work` int(1) default '0',
  `project` int(1) default '0',
  `edu` int(1) default '0',
  `training` int(1) default '0',
  `cert` int(1) default '0',
  `other` int(1) default '0',
  PRIMARY KEY  (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=gbk;

/*Data for the table `user_resume` */

/*Table structure for table `useraccounts` */

DROP TABLE IF EXISTS `useraccounts`;

CREATE TABLE `useraccounts` (
  `id` int(11) NOT NULL auto_increment,
  `userid` varchar(30) default NULL,
  `srcid` int(11) default NULL,
  `token` int(11) default NULL,
  `srcnode` varchar(10) default NULL,
  `usercode` varchar(30) default NULL,
  `mac` varchar(36) default NULL,
  `userpass` varchar(30) default NULL,
  `useremail1` varchar(64) default NULL,
  `useremail2` varchar(64) default NULL,
  `question` varchar(30) default NULL,
  `answer` varchar(30) default NULL,
  `fname` varchar(20) default NULL,
  `lname` varchar(20) default NULL,
  `userrole` varchar(20) default NULL,
  `usertype` varchar(10) default NULL,
  `integral` int(11) default NULL,
  `byear` smallint(6) default NULL,
  `bmonth` smallint(6) default NULL,
  `bday` smallint(6) default NULL,
  `gender` varchar(8) default NULL,
  `occup` varchar(30) default NULL,
  `orgn` varchar(64) default NULL,
  `title` varchar(32) default NULL,
  `cid` varchar(30) default NULL,
  `ctype` varchar(10) default NULL,
  `regphone` varchar(30) default NULL,
  `phone` varchar(30) default NULL,
  `address` varchar(128) default NULL,
  `location` varchar(32) default NULL,
  `action` varchar(128) default NULL,
  `stat` varchar(3) default '100',
  `open1` varchar(3) default '100',
  `open2` varchar(3) default '100',
  `check` varchar(3) default '100',
  `memo` varchar(128) default NULL,
  `srcip` varchar(64) default NULL,
  `sender` varchar(36) default NULL,
  `netid` varchar(36) default NULL,
  `progid` varchar(36) default NULL,
  `intid` varchar(30) default NULL,
  `updtime` datetime default NULL,
  `rectime` datetime default NULL,
  PRIMARY KEY  (`id`),
  KEY `userid` (`userid`),
  KEY `phone` (`phone`)
) ENGINE=MyISAM AUTO_INCREMENT=10 DEFAULT CHARSET=utf8;

/*Data for the table `useraccounts` */

insert  into `useraccounts`(`id`,`userid`,`srcid`,`token`,`srcnode`,`usercode`,`mac`,`userpass`,`useremail1`,`useremail2`,`question`,`answer`,`fname`,`lname`,`userrole`,`usertype`,`integral`,`byear`,`bmonth`,`bday`,`gender`,`occup`,`orgn`,`title`,`cid`,`ctype`,`regphone`,`phone`,`address`,`location`,`action`,`stat`,`open1`,`open2`,`check`,`memo`,`srcip`,`sender`,`netid`,`progid`,`intid`,`updtime`,`rectime`) values (1,'1',NULL,111,NULL,NULL,'qqq',NULL,NULL,NULL,NULL,NULL,NULL,'zhang','200','2',NULL,NULL,NULL,NULL,NULL,NULL,'qq','qq',NULL,NULL,'13653361207','13653361207',NULL,NULL,NULL,'100','100','100','100',NULL,NULL,NULL,NULL,NULL,'80','2014-11-13 16:08:31',NULL),(2,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,'100',NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,'100','100','100','100',NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL),(8,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,'100',NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,'100','100','100','100',NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL),(3,NULL,NULL,NULL,NULL,NULL,'qqq',NULL,NULL,NULL,NULL,NULL,NULL,NULL,'100','1',NULL,NULL,NULL,NULL,NULL,NULL,'海洋学院','教师',NULL,NULL,'','13333333333',NULL,NULL,NULL,'100','100','100','100',NULL,NULL,NULL,NULL,NULL,'83',NULL,'2014-11-13 20:38:55'),(4,'4',NULL,NULL,NULL,NULL,'qqq',NULL,NULL,NULL,NULL,NULL,NULL,'李四','100','1',NULL,NULL,NULL,NULL,NULL,NULL,'哪里','植物',NULL,NULL,'','18888888888',NULL,NULL,NULL,'100','100','100','100',NULL,NULL,NULL,NULL,NULL,'85',NULL,'2014-11-13 20:46:09'),(5,'5',NULL,NULL,NULL,NULL,'qqq',NULL,NULL,NULL,NULL,NULL,NULL,'王五','100','1',NULL,NULL,NULL,NULL,NULL,NULL,'阿斯蒂芬','阿斯蒂芬',NULL,NULL,'','13653361206',NULL,NULL,NULL,'100','100','100','100',NULL,NULL,NULL,NULL,NULL,'87',NULL,'2014-11-13 20:50:27'),(6,'6',NULL,NULL,NULL,NULL,'qqq',NULL,NULL,NULL,NULL,NULL,NULL,'阿道夫','100','1',NULL,NULL,NULL,NULL,NULL,NULL,'ADS','撒的',NULL,NULL,'','13653361209',NULL,NULL,NULL,'100','100','100','100',NULL,NULL,NULL,NULL,NULL,'89',NULL,'2014-11-13 20:51:38'),(7,'7',NULL,NULL,NULL,NULL,'qqq',NULL,NULL,NULL,NULL,NULL,NULL,'阿斯蒂芬','100','1',NULL,NULL,NULL,NULL,NULL,NULL,'阿萨德','阿萨德',NULL,NULL,'','13653361211',NULL,NULL,NULL,'100','100','100','100',NULL,NULL,NULL,NULL,NULL,'90',NULL,'2014-11-13 21:01:44');

/*Table structure for table `useractive` */

DROP TABLE IF EXISTS `useractive`;

CREATE TABLE `useractive` (
  `id` int(11) NOT NULL auto_increment,
  `mac` varchar(36) default NULL,
  `phone` varchar(30) default NULL,
  `userrole` varchar(30) default NULL,
  `userid` varchar(30) default NULL,
  `onsite` tinyint(4) default '0',
  `online` tinyint(4) default '0',
  `macfirst` datetime default '1970-01-01 00:00:00',
  `macmark` datetime default NULL,
  `maclast` datetime default '1970-01-01 00:00:00',
  `pagefirst` datetime default '1970-01-01 00:00:00',
  `pagemark` datetime default NULL,
  `pagelast` datetime default '1970-01-01 00:00:00',
  `updby` varchar(30) default NULL,
  `insby` varchar(30) default NULL,
  `rectime` datetime default NULL,
  PRIMARY KEY  (`id`),
  KEY `userid` (`mac`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

/*Data for the table `useractive` */

/*Table structure for table `userclass` */

DROP TABLE IF EXISTS `userclass`;

CREATE TABLE `userclass` (
  `id` int(11) NOT NULL auto_increment,
  `keyid` int(11) NOT NULL,
  `name` varchar(100) NOT NULL,
  `variable` varchar(100) default NULL,
  `sort` int(11) default NULL,
  PRIMARY KEY  (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=60 DEFAULT CHARSET=gbk;

/*Data for the table `userclass` */

insert  into `userclass`(`id`,`keyid`,`name`,`variable`,`sort`) values (1,0,'性别','user_sex',0),(2,0,'婚姻状况','user_marriage',0),(3,0,'教育程度','user_edu',0),(4,0,'工作经验','user_word',0),(6,1,'男','',1),(7,1,'女','',3),(8,2,'已婚','',0),(9,3,'不限','',0),(25,0,'技能','user_skill',0),(11,2,'未婚','',2),(12,3,'高中','',1),(13,3,'中专','',3),(14,3,'大专','',4),(15,3,'本科','',5),(16,3,'硕士','',6),(17,3,'博士','',7),(18,4,'应届毕业生','',1),(19,4,'1年以上','',2),(20,4,'2年以上','',3),(21,4,'3年以上','',4),(22,4,'5年以上','',5),(23,4,'8年以上','',6),(24,4,'10年以上','',7),(26,25,'外语','',1),(27,25,'计算机','',2),(28,25,'其他','',3),(29,0,'期待薪资','user_salary',0),(30,29,'面议','',1),(31,29,'1000以下','',2),(32,29,'1000 - 1999','',3),(33,29,'2000 - 2999','',4),(34,29,'3000 - 4499','',5),(35,29,'4500 - 5999','',6),(36,29,'6000 - 7999','',7),(37,29,'8000 - 9999','',8),(38,29,'10000及以上','',9),(39,0,'技能程度','user_ing',0),(40,39,'一般','',1),(41,39,'良好','',2),(42,39,'熟练','',3),(43,39,'精通','',4),(44,0,'到岗时间','user_report',0),(45,44,'随时到岗','',1),(46,44,'1周以内','',2),(47,44,'3周以内','',3),(48,44,'1个月之内','',4),(50,44,'3个月之内','',5),(51,44,'不确定','',5),(52,0,'个人反馈类型','user_message',0),(53,52,'咨询','',1),(54,52,'建议','',2),(55,52,'意见','',3),(56,0,'工作性质','user_type',0),(57,56,'不限','',0),(58,56,'全职','',1),(59,56,'兼职','',2);

/*Table structure for table `userid_job` */

DROP TABLE IF EXISTS `userid_job`;

CREATE TABLE `userid_job` (
  `id` int(11) NOT NULL auto_increment,
  `uid` int(11) NOT NULL,
  `job_id` int(11) NOT NULL,
  `job_name` varchar(150) NOT NULL,
  `com_id` int(11) NOT NULL,
  `com_name` varchar(150) NOT NULL,
  `eid` int(10) NOT NULL,
  `datetime` int(10) NOT NULL,
  `type` int(1) NOT NULL default '1',
  `is_browse` int(1) NOT NULL default '1',
  PRIMARY KEY  (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=gbk;

/*Data for the table `userid_job` */

/*Table structure for table `userid_msg` */

DROP TABLE IF EXISTS `userid_msg`;

CREATE TABLE `userid_msg` (
  `id` int(11) NOT NULL auto_increment,
  `uid` int(11) NOT NULL,
  `title` varchar(150) NOT NULL,
  `content` text NOT NULL,
  `fid` int(11) NOT NULL,
  `fname` varchar(150) NOT NULL,
  `type` int(11) NOT NULL default '0',
  `datetime` int(10) NOT NULL,
  `default` int(1) default '0',
  `is_browse` int(1) default '1',
  PRIMARY KEY  (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=gbk;

/*Data for the table `userid_msg` */

/*Table structure for table `userlog` */

DROP TABLE IF EXISTS `userlog`;

CREATE TABLE `userlog` (
  `id` int(30) NOT NULL auto_increment,
  `userid` varchar(30) default NULL,
  `token` int(10) default NULL,
  `srcnode` varchar(10) default NULL,
  `usercode` varchar(30) default NULL,
  `mac` varchar(36) default NULL,
  `integral` int(10) default NULL,
  `nintegral` int(10) default NULL,
  `action` varchar(128) default NULL,
  `srcip` varchar(64) default NULL,
  `srcname` varchar(64) default NULL,
  `rectime` datetime default NULL,
  PRIMARY KEY  (`id`),
  KEY `usercode` (`usercode`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

/*Data for the table `userlog` */

/*Table structure for table `usermacs` */

DROP TABLE IF EXISTS `usermacs`;

CREATE TABLE `usermacs` (
  `id` int(11) NOT NULL auto_increment,
  `userid` varchar(30) default NULL,
  `srcid` int(11) default NULL,
  `token` int(11) default NULL,
  `srcnode` varchar(10) default NULL,
  `usercode` varchar(30) default NULL,
  `mac` varchar(36) default NULL,
  `phone` varchar(30) default NULL,
  `stat` varchar(3) default '100',
  `dft` varchar(3) default '100',
  `prio` varchar(3) default '0',
  `userrole` varchar(30) default NULL,
  `pntmaster` varchar(3) default NULL,
  `memo` varchar(128) default NULL,
  `srcip` varchar(64) default NULL,
  `sender` varchar(36) default NULL,
  `netid` varchar(36) default NULL,
  `progid` varchar(36) default NULL,
  `updtime` datetime default NULL,
  `rectime` datetime default NULL,
  PRIMARY KEY  (`id`),
  KEY `userid` (`userid`),
  KEY `usercode` (`usercode`)
) ENGINE=MyISAM AUTO_INCREMENT=7 DEFAULT CHARSET=utf8;

/*Data for the table `usermacs` */

insert  into `usermacs`(`id`,`userid`,`srcid`,`token`,`srcnode`,`usercode`,`mac`,`phone`,`stat`,`dft`,`prio`,`userrole`,`pntmaster`,`memo`,`srcip`,`sender`,`netid`,`progid`,`updtime`,`rectime`) values (1,'77',NULL,NULL,NULL,NULL,'qqq',NULL,'100','100','0',NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL),(2,'1',NULL,NULL,NULL,NULL,'qqq','13653361207','100','100','0','专家',NULL,NULL,NULL,NULL,NULL,NULL,NULL,'2014-11-13 16:08:30'),(3,'81',NULL,NULL,NULL,NULL,'qqq',NULL,'100','100','0',NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL),(4,'82',NULL,NULL,NULL,NULL,'qqq',NULL,'100','100','0',NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL),(5,'6',NULL,NULL,NULL,NULL,'qqq','13653361209','100','100','0','代表',NULL,NULL,NULL,NULL,NULL,NULL,NULL,'2014-11-13 20:51:38'),(6,'7',NULL,NULL,NULL,NULL,'qqq','13653361211','100','100','0','代表',NULL,NULL,NULL,NULL,NULL,NULL,NULL,'2014-11-13 21:01:44');

/*Table structure for table `userpoints` */

DROP TABLE IF EXISTS `userpoints`;

CREATE TABLE `userpoints` (
  `id` int(30) NOT NULL auto_increment,
  `userid` varchar(30) default NULL,
  `token` int(10) default NULL,
  `srcnode` varchar(10) default NULL,
  `usercode` varchar(30) default NULL,
  `mac` varchar(36) default NULL,
  `integral` int(10) default NULL,
  `action` varchar(128) default NULL,
  `srcip` varchar(64) default NULL,
  `srcname` varchar(64) default NULL,
  `rectime` datetime default NULL,
  PRIMARY KEY  (`id`),
  KEY `mac` (`mac`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

/*Data for the table `userpoints` */

/*Table structure for table `webscan360` */

DROP TABLE IF EXISTS `webscan360`;

CREATE TABLE `webscan360` (
  `id` int(10) unsigned NOT NULL auto_increment,
  `var` varchar(100) NOT NULL,
  `value` varchar(100) NOT NULL,
  `ext1` varchar(100) default NULL,
  `ext2` varchar(100) default NULL,
  `state` tinyint(3) unsigned NOT NULL default '0',
  PRIMARY KEY  (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

/*Data for the table `webscan360` */

/*Table structure for table `wlact` */

DROP TABLE IF EXISTS `wlact`;

CREATE TABLE `wlact` (
  `id` int(11) NOT NULL auto_increment,
  `srcid` int(11) default NULL,
  `event` varchar(64) default NULL,
  `mac` varchar(36) default NULL,
  `subevent` varchar(64) default NULL,
  `oldvalue` varchar(64) default NULL,
  `newvalue` varchar(64) default NULL,
  `firstseen` datetime default NULL,
  `lastseen` datetime default NULL,
  `stat` smallint(6) default NULL,
  `ssid` varchar(36) default NULL,
  `action` smallint(6) default NULL,
  `tcount` int(11) default NULL,
  `rectime` datetime default NULL,
  `srcip` varchar(64) default NULL,
  `sender` varchar(36) default NULL,
  `netid` varchar(36) default NULL,
  `progid` varchar(36) default NULL,
  `optime` datetime default NULL,
  PRIMARY KEY  (`id`),
  KEY `mac` (`mac`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

/*Data for the table `wlact` */

/*Table structure for table `wlpkt` */

DROP TABLE IF EXISTS `wlpkt`;

CREATE TABLE `wlpkt` (
  `id` int(11) NOT NULL auto_increment,
  `srcid` int(11) default NULL,
  `mac` varchar(36) default NULL,
  `ssid` varchar(36) default NULL,
  `rssi` smallint(6) default NULL,
  `stat` tinyint(4) default NULL,
  `type` varchar(36) default NULL,
  `subtype` varchar(36) default NULL,
  `pmac` varchar(36) default NULL,
  `bssid` varchar(36) default NULL,
  `pkttime` datetime default NULL,
  `timefrac` float default NULL,
  `timebyminute` datetime default NULL,
  `timesecond` tinyint(4) default NULL,
  `timebyhour` datetime default NULL,
  `timeminute` tinyint(4) default NULL,
  `frameproto` varchar(36) default NULL,
  `chan` varchar(36) default NULL,
  `rectime` datetime default NULL,
  `srcip` varchar(64) default NULL,
  PRIMARY KEY  (`id`),
  KEY `packettime` (`pkttime`),
  KEY `mac` (`mac`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

/*Data for the table `wlpkt` */

/*Table structure for table `wlsta` */

DROP TABLE IF EXISTS `wlsta`;

CREATE TABLE `wlsta` (
  `id` int(11) NOT NULL auto_increment,
  `srcid` int(11) default NULL,
  `tcount` int(11) default NULL,
  `mac` varchar(36) default NULL,
  `ssid` varchar(36) default NULL,
  `rssi` float default NULL,
  `stat` smallint(6) default NULL,
  `setby` varchar(20) default NULL,
  `keepalive` tinyint(4) default NULL,
  `firstseen` datetime default NULL,
  `lastseen` datetime default NULL,
  `rtrend` smallint(6) default NULL,
  `npacket` int(11) default NULL,
  `ptrend` smallint(6) default NULL,
  `action` smallint(6) default NULL,
  `ostype` varchar(36) default NULL,
  `alivetime` int(11) default NULL,
  `rectime` datetime default NULL,
  `srcip` varchar(64) default NULL,
  `sender` varchar(36) default NULL,
  `netid` varchar(36) default NULL,
  `progid` varchar(36) default NULL,
  `optime` datetime default NULL,
  PRIMARY KEY  (`id`),
  KEY `mac` (`mac`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

/*Data for the table `wlsta` */

/*Table structure for table `wxlog` */

DROP TABLE IF EXISTS `wxlog`;

CREATE TABLE `wxlog` (
  `id` int(11) NOT NULL auto_increment,
  `wxid` varchar(100) NOT NULL default '0',
  `wxname` varchar(100) default NULL,
  `wxuid` int(11) default '0',
  `wxuser` varchar(100) default NULL,
  `content` text,
  `reply` text,
  `nav` varchar(100) default NULL,
  `type` varchar(100) default NULL,
  `time` int(11) default '0',
  PRIMARY KEY  (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=gbk;

/*Data for the table `wxlog` */

/*Table structure for table `wxnav` */

DROP TABLE IF EXISTS `wxnav`;

CREATE TABLE `wxnav` (
  `id` int(11) NOT NULL auto_increment,
  `name` varchar(100) NOT NULL,
  `keyid` int(11) default NULL,
  `key` varchar(100) default NULL,
  `url` varchar(100) default NULL,
  `type` varchar(50) NOT NULL,
  `sort` int(11) default NULL,
  PRIMARY KEY  (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=15 DEFAULT CHARSET=gbk;

/*Data for the table `wxnav` */

insert  into `wxnav`(`id`,`name`,`keyid`,`key`,`url`,`type`,`sort`) values (1,'我的菜单',0,NULL,NULL,'click',1),(2,'找工作',0,NULL,NULL,'click',2),(3,'更多功能',0,NULL,NULL,'click',3),(4,'我的帐号',1,'我的帐号','','click',4),(5,'我的消息',1,'我的消息','','click',5),(6,'面试邀请',1,'面试邀请','','click',6),(7,'简历查看',1,'简历查看','','click',7),(8,'刷新简历',1,'刷新简历','','click',8),(9,'职位搜索',2,'职位搜索',NULL,'click',9),(10,'推荐职位',2,'推荐职位',NULL,'click',10),(11,'周边职位',2,'周边职位',NULL,'click',11),(12,'微招聘',3,'','http://www.hr135.com/index.php?m=once','view',12),(13,'微简历',3,'','	http://www.hr135.com/index.php?m=tiny','view',13),(14,'职场资讯',3,'','	http://www.hr135.com/index.php?m=news','view',14);

/*Table structure for table `zhaopinhui` */

DROP TABLE IF EXISTS `zhaopinhui`;

CREATE TABLE `zhaopinhui` (
  `id` int(11) NOT NULL auto_increment,
  `title` varchar(200) default '0',
  `pic` varchar(200) default '0',
  `starttime` varchar(100) default '0',
  `endtime` varchar(100) default '0',
  `provinceid` int(11) default '0',
  `cityid` int(11) default '0',
  `address` varchar(200) default NULL,
  `traffic` text,
  `phone` varchar(100) default '0',
  `organizers` varchar(200) default '0',
  `user` varchar(200) default NULL,
  `weburl` varchar(100) default '0',
  `body` text,
  `media` text,
  `packages` text,
  `booth` text,
  `participate` text,
  `status` int(11) default '0',
  `ctime` int(11) default '0',
  PRIMARY KEY  (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=gbk;

/*Data for the table `zhaopinhui` */

/*Table structure for table `zhaopinhui_com` */

DROP TABLE IF EXISTS `zhaopinhui_com`;

CREATE TABLE `zhaopinhui_com` (
  `id` int(11) NOT NULL auto_increment,
  `uid` int(11) default '0',
  `zid` int(11) default '0',
  `jobid` varchar(255) default '0',
  `ctime` int(11) default '0',
  `status` int(11) default '0',
  `statusbody` varchar(100) default NULL,
  `inadd` varchar(100) default NULL,
  PRIMARY KEY  (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=gbk;

/*Data for the table `zhaopinhui_com` */

/*Table structure for table `zhaopinhui_pic` */

DROP TABLE IF EXISTS `zhaopinhui_pic`;

CREATE TABLE `zhaopinhui_pic` (
  `id` int(11) NOT NULL auto_increment,
  `title` varchar(200) default '0',
  `pic` varchar(200) default '0',
  `sort` int(11) default '0',
  `zid` int(11) default '0',
  `is_themb` int(5) default '0',
  PRIMARY KEY  (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=gbk;

/*Data for the table `zhaopinhui_pic` */

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;
