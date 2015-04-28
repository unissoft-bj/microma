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
) ENGINE=MyISAM AUTO_INCREMENT=96 DEFAULT CHARSET=utf8;

/*Data for the table `ap_column_preferences` */

LOCK TABLES `ap_column_preferences` WRITE;

insert  into `ap_column_preferences`(`acp_id`,`form_id`,`user_id`,`element_name`,`position`) values (95,10392,2,'payment_amount',12),(94,10392,2,'element_23',11),(93,10392,2,'element_22',10),(92,10392,2,'element_21',9),(91,10392,2,'element_20',8),(90,10392,2,'element_15',7),(89,10392,2,'element_19',6),(88,10392,2,'element_18',5),(87,10392,2,'element_16',4),(86,10392,2,'element_14',3),(85,10392,2,'element_1',2),(39,11892,2,'date_created',1),(40,11892,2,'date_updated',2),(41,11892,2,'ip_address',3),(42,11892,2,'element_1',4),(43,11892,2,'element_2',5),(44,11892,2,'payment_amount',6),(45,11892,2,'payment_status',7),(46,11892,2,'payment_id',8),(84,10392,2,'username',1);

UNLOCK TABLES;

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
) ENGINE=MyISAM AUTO_INCREMENT=322 DEFAULT CHARSET=utf8;

/*Data for the table `ap_element_options` */

LOCK TABLES `ap_element_options` WRITE;

insert  into `ap_element_options`(`aeo_id`,`form_id`,`element_id`,`option_id`,`position`,`option`,`option_is_default`,`live`) values (9,10392,1,3,3,'太监',0,0),(8,10392,1,2,2,'否',0,1),(7,10392,1,1,1,'是',0,1),(12,10392,2,3,3,'乒乓球',0,0),(11,10392,2,2,2,'篮球',0,0),(10,10392,2,1,1,'足球',0,0),(13,10825,1,3,3,'太监',0,1),(14,10825,1,2,2,'女',0,1),(15,10825,1,1,1,'男',0,1),(16,10825,2,3,3,'乒乓球',0,1),(17,10825,2,2,2,'篮球',0,1),(18,10825,2,1,1,'足球',0,1),(19,10392,6,1,1,'First option',0,0),(20,10392,6,2,2,'Second option',0,0),(21,10392,6,3,3,'Third option',0,0),(27,10392,7,3,3,'Third option',0,0),(26,10392,7,2,2,'Second option',0,0),(25,10392,7,1,1,'First option',0,0),(137,10392,14,4,4,'纯电动汽车',0,1),(136,10392,14,3,3,'插电式混合动力汽车',0,1),(134,10392,14,1,1,'传统型内燃机汽车',0,1),(135,10392,14,2,2,'混合动力汽车',0,1),(116,10392,15,3,3,'租赁',0,1),(115,10392,15,2,2,'分期付款',0,1),(141,10392,16,4,4,'纯电动汽车',0,1),(41,10392,17,1,1,'First option',0,1),(42,10392,17,2,2,'Second option',0,1),(43,10392,17,3,3,'Third option',0,1),(109,10392,18,9,9,'不确定',0,1),(108,10392,18,8,8,'2020以后',0,1),(107,10392,18,7,7,'2020',0,1),(111,10392,19,2,2,'混合动力汽车',0,1),(119,10392,20,3,3,'租赁',0,1),(118,10392,20,2,2,'分期付款',0,1),(126,10392,21,7,7,'五年',0,1),(125,10392,21,6,6,'三年',0,1),(124,10392,21,5,5,'两年',0,1),(142,11022,1,3,3,'太监',0,0),(139,10392,16,2,2,'混合动力汽车',0,1),(106,10392,18,6,6,'2019',0,1),(105,10392,18,5,5,'2018',0,1),(104,10392,18,4,4,'2017',0,1),(103,10392,18,3,3,'2016',0,1),(102,10392,18,2,2,'2015',0,1),(101,10392,18,1,1,'2014',0,1),(112,10392,19,3,3,'插电式混合动力汽车',0,1),(110,10392,19,1,1,'传统型内燃机汽车',0,1),(114,10392,15,1,1,'一次性付全款',0,1),(117,10392,20,1,1,'一次性付全款',0,1),(123,10392,21,4,4,'一年',0,1),(122,10392,21,3,3,'六个月',0,1),(121,10392,21,2,2,'三个月',0,1),(120,10392,21,1,1,'一个月',0,1),(128,10392,23,2,2,'10元人民币',0,1),(127,10392,23,1,1,'8元人民币',0,1),(140,10392,16,3,3,'插电式混合动力汽车',0,1),(138,10392,16,1,1,'传统型内燃机汽车',0,1),(113,10392,19,4,4,'纯电动汽车',0,1),(129,10392,23,3,3,'15元人民币',0,1),(130,10392,23,4,4,'20元人民币',0,1),(131,10392,23,5,5,'30元人民币',0,1),(132,10392,23,6,6,'高于30元人民币',0,1),(133,10392,23,7,7,'不确定',0,1),(143,11022,1,2,2,'否',0,1),(144,11022,1,1,1,'是',0,1),(145,11022,2,3,3,'乒乓球',0,0),(146,11022,2,2,2,'篮球',0,0),(147,11022,2,1,1,'足球',0,0),(148,11022,6,1,1,'First option',0,0),(149,11022,6,2,2,'Second option',0,0),(150,11022,6,3,3,'Third option',0,0),(151,11022,7,3,3,'Third option',0,0),(152,11022,7,2,2,'Second option',0,0),(153,11022,7,1,1,'First option',0,0),(154,11022,14,4,4,'纯电动汽车',0,1),(155,11022,14,3,3,'插电式混合动力汽车',0,1),(156,11022,14,1,1,'传统型内燃机汽车',0,1),(157,11022,14,2,2,'混合动力汽车',0,1),(158,11022,15,3,3,'租赁',0,1),(159,11022,15,2,2,'分期付款',0,1),(160,11022,16,4,4,'纯电动汽车',0,1),(161,11022,17,1,1,'First option',0,1),(162,11022,17,2,2,'Second option',0,1),(163,11022,17,3,3,'Third option',0,1),(164,11022,18,9,9,'不确定',0,1),(165,11022,18,8,8,'2020以后',0,1),(166,11022,18,7,7,'2020',0,1),(167,11022,19,2,2,'混合动力汽车',0,1),(168,11022,20,3,3,'租赁',0,1),(169,11022,20,2,2,'分期付款',0,1),(170,11022,21,7,7,'五年',0,1),(171,11022,21,6,6,'三年',0,1),(172,11022,21,5,5,'两年',0,1),(173,11022,16,2,2,'混合动力汽车',0,1),(174,11022,18,6,6,'2019',0,1),(175,11022,18,5,5,'2018',0,1),(176,11022,18,4,4,'2017',0,1),(177,11022,18,3,3,'2016',0,1),(178,11022,18,2,2,'2015',0,1),(179,11022,18,1,1,'2014',0,1),(180,11022,19,3,3,'插电式混合动力汽车',0,1),(181,11022,19,1,1,'传统型内燃机汽车',0,1),(182,11022,15,1,1,'一次性付全款',0,1),(183,11022,20,1,1,'一次性付全款',0,1),(184,11022,21,4,4,'一年',0,1),(185,11022,21,3,3,'六个月',0,1),(186,11022,21,2,2,'三个月',0,1),(187,11022,21,1,1,'一个月',0,1),(188,11022,23,2,2,'10元人民币',0,1),(189,11022,23,1,1,'8元人民币',0,1),(190,11022,16,3,3,'插电式混合动力汽车',0,1),(191,11022,16,1,1,'传统型内燃机汽车',0,1),(192,11022,19,4,4,'纯电动汽车',0,1),(193,11022,23,3,3,'15元人民币',0,1),(194,11022,23,4,4,'20元人民币',0,1),(195,11022,23,5,5,'30元人民币',0,1),(196,11022,23,6,6,'高于30元人民币',0,1),(197,11022,23,7,7,'不确定',0,1),(198,11892,1,1,1,'First option',0,1),(199,11892,1,2,2,'Second option',0,1),(200,11892,1,3,3,'Third option',0,1),(206,11892,2,3,3,'抢劫',0,1),(205,11892,2,2,2,'防火',0,1),(204,11892,2,1,1,'杀人',0,1),(211,12465,1,2,2,'电视广告',0,0),(282,12465,3,8,5,'经销商展厅',0,1),(210,12465,1,1,1,'互联网广告 ',0,0),(212,12465,1,3,3,'报刊杂志',0,0),(213,12465,1,4,4,'户外广告',0,0),(214,12465,1,5,5,'经销商展厅',0,0),(215,12465,1,6,6,'朋友告知',0,0),(216,12465,1,7,7,'短  信',0,0),(217,12465,1,8,8,'微信朋友圈',0,0),(218,12465,1,9,9,'广    播',0,0),(219,12465,1,10,10,'其他',0,0),(265,12465,5,3,3,'Third option',0,1),(264,12465,5,2,2,'Second option',0,1),(263,12465,5,1,1,'First option',0,1),(281,12465,3,7,4,'户外广告',0,1),(280,12465,3,6,3,'报刊杂志',0,1),(279,12465,3,5,2,'电视广告',0,1),(278,12465,3,4,1,'互联网广告',0,1),(247,12465,2,9,6,'两年内无购车计划',0,1),(246,12465,2,8,5,'12个月以后',0,1),(245,12465,2,7,4,'9~12个月',0,1),(244,12465,2,6,3,'6~9个月',0,1),(243,12465,2,5,2,'3~6个月',0,1),(242,12465,2,4,1,'0~3个月',0,1),(289,12465,7,5,2,'享受驾驶乐趣',0,1),(288,12465,7,4,1,'交通需要',0,1),(298,12465,8,6,3,'20~30km',0,1),(297,12465,8,5,2,'10~20km',0,1),(296,12465,8,4,1,'0~10km',0,1),(272,12465,11,1,1,'First option',0,1),(273,12465,11,2,2,'Second option',0,1),(274,12465,11,3,3,'Third option',0,1),(307,12465,13,6,3,'汽车品牌',0,1),(306,12465,13,5,2,'车辆配置',0,1),(305,12465,13,4,1,'购买价格',0,1),(283,12465,3,9,6,'朋友告知',0,1),(284,12465,3,10,7,'短  信',0,1),(285,12465,3,11,8,'微信朋友圈',0,1),(286,12465,3,12,9,'广    播',0,1),(287,12465,3,13,10,'其他  ',0,1),(290,12465,7,6,3,'投资',0,1),(291,12465,7,7,4,'体现身份地位',0,1),(292,12465,7,8,5,'汽车爱好者    ',0,1),(293,12465,7,9,6,'工作职位需要',0,1),(294,12465,7,10,7,'家庭需要',0,1),(295,12465,7,11,8,'享受生活方式的需要',0,1),(299,12465,8,7,4,'30~40km',0,1),(300,12465,8,8,5,'40~50km',0,1),(301,12465,8,9,6,'50~60km',0,1),(302,12465,8,10,7,'60~80km',0,1),(303,12465,8,11,8,'80~100km',0,1),(304,12465,8,12,9,'100km以上',0,1),(308,12465,13,7,4,'外型',0,1),(309,12465,13,8,5,'车辆性能（耗油、动力、舒适等）',0,1),(310,12465,13,9,6,'乘坐空间',0,1),(311,12465,13,10,7,'售后服务及保养成本',0,1),(319,12465,22,2,2,'女',0,1),(318,12465,22,1,1,'男',0,1),(321,12465,26,2,2,'没有',0,1),(320,12465,26,1,1,'有',0,1);

UNLOCK TABLES;

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
) ENGINE=MyISAM AUTO_INCREMENT=93 DEFAULT CHARSET=utf8;

/*Data for the table `ap_element_prices` */

LOCK TABLES `ap_element_prices` WRITE;

insert  into `ap_element_prices`(`aep_id`,`form_id`,`element_id`,`option_id`,`price`) values (1,11892,2,1,'1.00'),(2,11892,2,2,'1.00'),(3,11892,2,3,'1.00'),(4,11892,1,1,'1.00'),(5,11892,1,2,'1.00'),(6,11892,1,3,'1.00'),(92,10392,23,7,'10.00'),(91,10392,23,6,'10.00'),(90,10392,23,5,'10.00'),(89,10392,23,4,'10.00'),(88,10392,23,3,'10.00'),(87,10392,23,2,'10.00'),(86,10392,23,1,'10.00'),(85,10392,21,7,'10.00'),(84,10392,21,6,'10.00'),(83,10392,21,5,'10.00'),(82,10392,21,4,'10.00'),(81,10392,21,3,'10.00'),(80,10392,21,2,'10.00'),(79,10392,21,1,'10.00'),(78,10392,20,3,'10.00'),(77,10392,20,2,'10.00'),(76,10392,20,1,'10.00'),(75,10392,19,4,'10.00'),(74,10392,19,3,'10.00'),(73,10392,19,2,'10.00'),(72,10392,19,1,'10.00'),(71,10392,18,9,'10.00'),(70,10392,18,8,'10.00'),(69,10392,18,7,'10.00'),(68,10392,18,6,'10.00'),(67,10392,18,5,'10.00'),(66,10392,18,4,'10.00'),(65,10392,18,3,'10.00'),(64,10392,18,2,'10.00'),(63,10392,18,1,'10.00'),(62,10392,16,4,'10.00'),(61,10392,16,3,'10.00'),(60,10392,16,2,'10.00'),(59,10392,16,1,'10.00'),(58,10392,15,3,'10.00'),(57,10392,15,2,'10.00'),(56,10392,15,1,'10.00'),(55,10392,14,4,'10.00'),(54,10392,14,3,'10.00'),(53,10392,14,2,'10.00'),(52,10392,14,1,'10.00'),(51,10392,1,2,'10.00'),(50,10392,1,1,'10.00');

UNLOCK TABLES;

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

LOCK TABLES `ap_email_logic` WRITE;

insert  into `ap_email_logic`(`form_id`,`rule_id`,`rule_all_any`,`target_email`,`template_name`,`custom_from_name`,`custom_from_email`,`custom_subject`,`custom_content`,`custom_plain_text`) values (10392,1,'all','','custom','MachForm','no-reply@diaocha.yc','{form_name} [#{entry_no}]','{entry_data}',0);

UNLOCK TABLES;

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

LOCK TABLES `ap_email_logic_conditions` WRITE;

insert  into `ap_email_logic_conditions`(`aec_id`,`form_id`,`target_rule_id`,`element_name`,`rule_condition`,`rule_keyword`) values (1,10392,1,'element_1','is','');

UNLOCK TABLES;

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

LOCK TABLES `ap_entries_preferences` WRITE;

UNLOCK TABLES;

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

LOCK TABLES `ap_field_logic_conditions` WRITE;

UNLOCK TABLES;

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

LOCK TABLES `ap_field_logic_elements` WRITE;

UNLOCK TABLES;

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

LOCK TABLES `ap_fonts` WRITE;

insert  into `ap_fonts`(`font_id`,`font_origin`,`font_family`,`font_variants`,`font_variants_numeric`) values (1,'google','Open Sans','300,300italic,regular,italic,600,600italic,700,700italic,800,800italic','300,300-italic,400,400-italic,600,600-italic,700,700-italic,800,800-italic'),(2,'google','Oswald','300,regular,700','300,400,700'),(3,'google','Droid Sans','regular,700','400,700'),(4,'google','Open Sans Condensed','300,300italic,700','300,300-italic,700'),(5,'google','Droid Serif','regular,italic,700,700italic','400,400-italic,700,700-italic'),(6,'google','Lato','100,100italic,300,300italic,regular,italic,700,700italic,900,900italic','100,100-italic,300,300-italic,400,400-italic,700,700-italic,900,900italic'),(7,'google','PT Sans','regular,italic,700,700italic','400,400-italic,700,700-italic'),(8,'google','Yanone Kaffeesatz','200,300,regular,700','200,300,400,700'),(9,'google','PT Sans Narrow','regular,700','400,700'),(10,'google','Ubuntu','300,300italic,regular,italic,500,500italic,700,700italic','300,300-italic,400,400-italic,500,500-italic,700,700-italic'),(11,'google','Nunito','300,regular,700','300,400,700'),(12,'google','Arvo','regular,italic,700,700italic','400,400-italic,700,700-italic'),(13,'google','Lora','regular,italic,700,700italic','400,400-italic,700,700-italic'),(14,'google','Lobster','regular','400'),(15,'google','Source Sans Pro','200,200italic,300,300italic,regular,italic,600,600italic,700,700italic,900,900italic','200,200-italic,300,300-italic,400,400-italic,600,600-italic,700,700-italic,900,900italic'),(16,'google','Rokkitt','regular,700','400,700'),(17,'google','Crafty Girls','regular','400'),(18,'google','Francois One','regular','400'),(19,'google','Exo','100,100italic,200,200italic,300,300italic,regular,italic,500,500italic,600,600italic,700,700italic,800,800italic,900,900italic','100,100-italic,200,200-italic,300,300-italic,400,400-italic,500,500-italic,600,600-italic,700,700-italic,800,800-italic,900,900italic'),(20,'google','Changa One','regular,italic','400,400-italic'),(21,'google','Shadows Into Light','regular','400'),(22,'google','Merriweather','300,regular,700,900','300,400,700,900'),(23,'google','Arimo','regular,italic,700,700italic','400,400-italic,700,700-italic'),(24,'google','Unkempt','regular,700','400,700'),(25,'google','Dosis','200,300,regular,500,600,700,800','200,300,400,500,600,700,800'),(26,'google','Cabin','regular,italic,500,500italic,600,600italic,700,700italic','400,400-italic,500,500-italic,600,600-italic,700,700-italic'),(27,'google','PT Serif','regular,italic,700,700italic','400,400-italic,700,700-italic'),(28,'google','Cuprum','regular,italic,700,700italic','400,400-italic,700,700-italic'),(29,'google','Raleway','100,200,300,regular,500,600,700,800,900','100,200,300,400,500,600,700,800,900'),(30,'google','Play','regular,700','400,700'),(31,'google','Montserrat','regular,700','400,700'),(32,'google','Ubuntu Condensed','regular','400'),(33,'google','Vollkorn','regular,italic,700,700italic','400,400-italic,700,700-italic'),(34,'google','The Girl Next Door','regular','400'),(35,'google','Questrial','regular','400'),(36,'google','Josefin Sans','100,100italic,300,300italic,regular,italic,600,600italic,700,700italic','100,100-italic,300,300-italic,400,400-italic,600,600-italic,700,700-italic'),(37,'google','Anton','regular','400'),(38,'google','Coming Soon','regular','400'),(39,'google','Bitter','regular,italic,700','400,400-italic,700'),(40,'google','Abel','regular','400'),(41,'google','Cantarell','regular,italic,700,700italic','400,400-italic,700,700-italic'),(42,'google','Signika','300,regular,600,700','300,400,600,700'),(43,'google','Dancing Script','regular,700','400,700'),(44,'google','Nobile','regular,italic,700,700italic','400,400-italic,700,700-italic'),(45,'google','Fredoka One','regular','400'),(46,'google','Asap','regular,italic,700,700italic','400,400-italic,700,700-italic'),(47,'google','Pacifico','regular','400'),(48,'google','Philosopher','regular,italic,700,700italic','400,400-italic,700,700-italic'),(49,'google','Kreon','300,regular,700','300,400,700'),(50,'google','Maven Pro','regular,500,700,900','400,500,700,900'),(51,'google','Calligraffitti','regular','400'),(52,'google','Righteous','regular','400'),(53,'google','Comfortaa','300,regular,700','300,400,700'),(54,'google','Black Ops One','regular','400'),(55,'google','Muli','300,300italic,regular,italic','300,300-italic,400,400-italic'),(56,'google','Squada One','regular','400'),(57,'google','Chewy','regular','400'),(58,'google','Luckiest Guy','regular','400'),(59,'google','Metamorphous','regular','400'),(60,'google','Cherry Cream Soda','regular','400'),(61,'google','Molengo','regular','400'),(62,'google','Rock Salt','regular','400'),(63,'google','Quicksand','300,regular,700','300,400,700'),(64,'google','Orienta','regular','400'),(65,'google','Tangerine','regular,700','400,700'),(66,'google','Droid Sans Mono','regular','400'),(67,'google','Crimson Text','regular,italic,600,600italic,700,700italic','400,400-italic,600,600-italic,700,700-italic'),(68,'google','Pontano Sans','regular','400'),(69,'google','PT Sans Caption','regular,700','400,700'),(70,'google','Reenie Beanie','regular','400'),(71,'google','Cabin Condensed','regular,500,600,700','400,500,600,700'),(72,'google','News Cycle','regular,700','400,700'),(73,'google','Josefin Slab','100,100italic,300,300italic,regular,italic,600,600italic,700,700italic','100,100-italic,300,300-italic,400,400-italic,600,600-italic,700,700-italic'),(74,'google','Cantata One','regular','400'),(75,'google','Marvel','regular,italic,700,700italic','400,400-italic,700,700-italic'),(76,'google','Istok Web','regular,italic,700,700italic','400,400-italic,700,700-italic'),(77,'google','Amaranth','regular,italic,700,700italic','400,400-italic,700,700-italic'),(78,'google','Chivo','regular,italic,900,900italic','400,400-italic,900,900italic'),(79,'google','Covered By Your Grace','regular','400'),(80,'google','Permanent Marker','regular','400'),(81,'google','Paytone One','regular','400'),(82,'google','Lobster Two','regular,italic,700,700italic','400,400-italic,700,700-italic'),(83,'google','Crete Round','regular,italic','400,400-italic'),(84,'google','Bree Serif','regular','400'),(85,'google','Syncopate','regular,700','400,700'),(86,'google','Oxygen','300,regular,700','300,400,700'),(87,'google','Limelight','regular','400'),(88,'google','Gloria Hallelujah','regular','400'),(89,'google','Voltaire','regular','400'),(90,'google','Playfair Display','regular,italic,700,700italic,900,900italic','400,400-italic,700,700-italic,900,900italic'),(91,'google','Marck Script','regular','400'),(92,'google','Walter Turncoat','regular','400'),(93,'google','Judson','regular,italic,700','400,400-italic,700'),(94,'google','Anonymous Pro','regular,italic,700,700italic','400,400-italic,700,700-italic'),(95,'google','Old Standard TT','regular,italic,700','400,400-italic,700'),(96,'google','Goudy Bookletter 1911','regular','400'),(97,'google','Maiden Orange','regular','400'),(98,'google','Amatic SC','regular,700','400,700'),(99,'google','Cardo','regular,italic,700','400,400-italic,700'),(100,'google','Homemade Apple','regular','400'),(101,'google','Waiting for the Sunrise','regular','400'),(102,'google','Jockey One','regular','400'),(103,'google','Orbitron','regular,500,700,900','400,500,700,900'),(104,'google','Inconsolata','regular,700','400,700'),(105,'google','Gentium Book Basic','regular,italic,700,700italic','400,400-italic,700,700-italic'),(106,'google','Indie Flower','regular','400'),(107,'google','Gudea','regular,italic,700','400,400-italic,700'),(108,'google','Copse','regular','400'),(109,'google','Schoolbell','regular','400'),(110,'google','Electrolize','regular','400'),(111,'google','Bevan','regular','400'),(112,'google','Ropa Sans','regular,italic','400,400-italic'),(113,'google','Quattrocento Sans','regular,italic,700,700italic','400,400-italic,700,700-italic'),(114,'google','Patua One','regular','400'),(115,'google','Leckerli One','regular','400'),(116,'google','Bangers','regular','400'),(117,'google','Didact Gothic','regular','400'),(118,'google','Vidaloka','regular','400'),(119,'google','Neucha','regular','400'),(120,'google','Share','regular,italic,700,700italic','400,400-italic,700,700-italic'),(121,'google','Karla','regular,italic,700,700italic','400,400-italic,700,700-italic'),(122,'google','Architects Daughter','regular','400'),(123,'google','Just Another Hand','regular','400'),(124,'google','Fontdiner Swanky','regular','400'),(125,'google','Happy Monkey','regular','400'),(126,'google','Varela Round','regular','400'),(127,'google','PT Serif Caption','regular,italic','400,400-italic'),(128,'google','Allerta Stencil','regular','400'),(129,'google','Patrick Hand','regular','400'),(130,'google','Kristi','regular','400'),(131,'google','Boogaloo','regular','400'),(132,'google','Allerta','regular','400'),(133,'google','EB Garamond','regular','400'),(134,'google','Varela','regular','400'),(135,'google','Crushed','regular','400'),(136,'google','Spirax','regular','400'),(137,'google','Puritan','regular,italic,700,700italic','400,400-italic,700,700-italic'),(138,'google','Special Elite','regular','400'),(139,'google','Tinos','regular,italic,700,700italic','400,400-italic,700,700-italic'),(140,'google','Rochester','regular','400'),(141,'google','Pinyon Script','regular','400'),(142,'google','Carme','regular','400'),(143,'google','Coda','regular,800','400,800'),(144,'google','Archivo Narrow','regular,italic,700,700italic','400,400-italic,700,700-italic'),(145,'google','Poiret One','regular','400'),(146,'google','Noticia Text','regular,italic,700,700italic','400,400-italic,700,700-italic'),(147,'google','Nothing You Could Do','regular','400'),(148,'google','Kameron','regular,700','400,700'),(149,'google','Metrophobic','regular','400'),(150,'google','Hammersmith One','regular','400'),(151,'google','Doppio One','regular','400'),(152,'google','Shadows Into Light Two','regular','400'),(153,'google','Jura','300,regular,500,600','300,400,500,600'),(154,'google','Handlee','regular','400'),(155,'google','Economica','regular,italic,700,700italic','400,400-italic,700,700-italic'),(156,'google','Neuton','200,300,regular,italic,700,800','200,300,400,400-italic,700,800'),(157,'google','BenchNine','300,regular,700','300,400,700'),(158,'google','Telex','regular','400'),(159,'google','Passion One','regular,700,900','400,700,900'),(160,'google','Actor','regular','400'),(161,'google','Merienda One','regular','400'),(162,'google','Alfa Slab One','regular','400'),(163,'google','Quattrocento','regular,700','400,700'),(164,'google','Slackey','regular','400'),(165,'google','Oleo Script','regular,700','400,700'),(166,'google','Ubuntu Mono','regular,italic,700,700italic','400,400-italic,700,700-italic'),(167,'google','Michroma','regular','400'),(168,'google','Sorts Mill Goudy','regular,italic','400,400-italic'),(169,'google','Carter One','regular','400'),(170,'google','Overlock','regular,italic,700,700italic,900,900italic','400,400-italic,700,700-italic,900,900italic'),(171,'google','Brawler','regular','400'),(172,'google','Mako','regular','400'),(173,'google','Annie Use Your Telescope','regular','400'),(174,'google','Cabin Sketch','regular,700','400,700'),(175,'google','Shanti','regular','400'),(176,'google','Sunshiney','regular','400'),(177,'google','Six Caps','regular','400'),(178,'google','Gentium Basic','regular,italic,700,700italic','400,400-italic,700,700-italic'),(179,'google','Rosario','regular,italic,700,700italic','400,400-italic,700,700-italic'),(180,'google','Yellowtail','regular','400'),(181,'google','Convergence','regular','400'),(182,'google','Love Ya Like A Sister','regular','400'),(183,'google','Lekton','regular,italic,700','400,400-italic,700'),(184,'google','Satisfy','regular','400'),(185,'google','Glegoo','regular','400'),(186,'google','Viga','regular','400'),(187,'google','Sansita One','regular','400'),(188,'google','IM Fell English','regular,italic','400,400-italic'),(189,'google','Just Me Again Down Here','regular','400'),(190,'google','Coustard','regular,900','400,900'),(191,'google','Prata','regular','400'),(192,'google','Kranky','regular','400'),(193,'google','Loved by the King','regular','400'),(194,'google','Gruppo','regular','400'),(195,'google','Fanwood Text','regular,italic','400,400-italic'),(196,'google','Numans','regular','400'),(197,'google','Pompiere','regular','400'),(198,'google','Bentham','regular','400'),(199,'google','Mountains of Christmas','regular,700','400,700'),(200,'google','Fredericka the Great','regular','400'),(201,'google','Montserrat Alternates','regular,700','400,700'),(202,'google','Homenaje','regular','400'),(203,'google','Cousine','regular,italic,700,700italic','400,400-italic,700,700-italic'),(204,'google','Kaushan Script','regular','400'),(205,'google','Contrail One','regular','400'),(206,'google','Short Stack','regular','400'),(207,'google','Cedarville Cursive','regular','400'),(208,'google','Tienne','regular,700,900','400,700,900'),(209,'google','Russo One','regular','400'),(210,'google','Magra','regular,700','400,700'),(211,'google','Enriqueta','regular,700','400,700'),(212,'google','Chau Philomene One','regular,italic','400,400-italic'),(213,'google','Alice','regular','400'),(214,'google','Delius','regular','400'),(215,'google','Stardos Stencil','regular,700','400,700'),(216,'google','Ultra','regular','400'),(217,'google','Sue Ellen Francisco','regular','400'),(218,'google','MedievalSharp','regular','400'),(219,'google','Gochi Hand','regular','400'),(220,'google','Rancho','regular','400'),(221,'google','Aldrich','regular','400'),(222,'google','Bowlby One SC','regular','400'),(223,'google','Give You Glory','regular','400'),(224,'google','Damion','regular','400'),(225,'google','Norican','regular','400'),(226,'google','Podkova','regular,700','400,700'),(227,'google','Berkshire Swash','regular','400'),(228,'google','IM Fell DW Pica','regular,italic','400,400-italic'),(229,'google','Andika','regular','400'),(230,'google','Titillium Web','200,200italic,300,300italic,regular,italic,600,600italic,700,700italic,900','200,200-italic,300,300-italic,400,400-italic,600,600-italic,700,700-italic,900'),(231,'google','Antic','regular','400'),(232,'google','Cookie','regular','400'),(233,'google','Poly','regular,italic','400,400-italic'),(234,'google','Days One','regular','400'),(235,'google','Trocchi','regular','400'),(236,'google','Delius Unicase','regular,700','400,700'),(237,'google','Spinnaker','regular','400'),(238,'google','Corben','regular,700','400,700'),(239,'google','Italianno','regular','400'),(240,'google','Volkhov','regular,italic,700,700italic','400,400-italic,700,700-italic'),(241,'google','Coda Caption','800','800'),(242,'google','Signika Negative','300,regular,600,700','300,400,600,700'),(243,'google','Great Vibes','regular','400'),(244,'google','Megrim','regular','400'),(245,'google','Arapey','regular,italic','400,400-italic'),(246,'google','Wire One','regular','400'),(247,'google','Alike','regular','400'),(248,'google','Adamina','regular','400'),(249,'google','Nixie One','regular','400'),(250,'google','Salsa','regular','400'),(251,'google','Sanchez','regular,italic','400,400-italic'),(252,'google','Cutive','regular','400'),(253,'google','Tulpen One','regular','400'),(254,'google','Lusitana','regular,700','400,700'),(255,'google','Radley','regular,italic','400,400-italic'),(256,'google','Bilbo','regular','400'),(257,'google','Courgette','regular','400'),(258,'google','Dawning of a New Day','regular','400'),(259,'google','Playball','regular','400'),(260,'google','Lustria','regular','400'),(261,'google','Redressed','regular','400'),(262,'google','Aclonica','regular','400'),(263,'google','IM Fell DW Pica SC','regular','400'),(264,'google','Allura','regular','400'),(265,'google','Allan','regular,700','400,700'),(266,'google','Baumans','regular','400'),(267,'google','Sancreek','regular','400'),(268,'google','IM Fell English SC','regular','400'),(269,'google','Kotta One','regular','400'),(270,'google','Codystar','300,regular','300,400'),(271,'google','Abril Fatface','regular','400'),(272,'google','Geo','regular,italic','400,400-italic'),(273,'google','Forum','regular','400'),(274,'google','La Belle Aurore','regular','400'),(275,'google','UnifrakturMaguntia','regular','400'),(276,'google','Armata','regular','400'),(277,'google','Jolly Lodger','regular','400'),(278,'google','Snippet','regular','400'),(279,'google','Lovers Quarrel','regular','400'),(280,'google','Miltonian Tattoo','regular','400'),(281,'google','Lemon','regular','400'),(282,'google','Rammetto One','regular','400'),(283,'google','Caudex','regular,italic,700,700italic','400,400-italic,700,700-italic'),(284,'google','Alegreya','regular,italic,700,700italic,900,900italic','400,400-italic,700,700-italic,900,900italic'),(285,'google','Swanky and Moo Moo','regular','400'),(286,'google','Inder','regular','400'),(287,'google','Federo','regular','400'),(288,'google','Delius Swash Caps','regular','400'),(289,'google','Italiana','regular','400'),(290,'google','Scada','regular,italic,700,700italic','400,400-italic,700,700-italic'),(291,'google','Press Start 2P','regular','400'),(292,'google','Candal','regular','400'),(293,'google','Expletus Sans','regular,italic,500,500italic,600,600italic,700,700italic','400,400-italic,500,500-italic,600,600-italic,700,700-italic'),(294,'google','Cantora One','regular','400'),(295,'google','Krona One','regular','400'),(296,'google','Andada','regular','400'),(297,'google','Archivo Black','regular','400'),(298,'google','Advent Pro','100,200,300,regular,500,600,700','100,200,300,400,500,600,700'),(299,'google','Fjalla One','regular','400'),(300,'google','Bad Script','regular','400'),(301,'google','Source Code Pro','200,300,regular,600,700,900','200,300,400,600,700,900'),(302,'google','Tenor Sans','regular','400'),(303,'google','Carrois Gothic','regular','400'),(304,'google','Montez','regular','400'),(305,'google','Ovo','regular','400'),(306,'google','Monda','regular,700','400,700'),(307,'google','Mate SC','regular','400'),(308,'google','League Script','regular','400'),(309,'google','Parisienne','regular','400'),(310,'google','Rationale','regular','400'),(311,'google','Nova Round','regular','400'),(312,'google','Unna','regular','400'),(313,'google','Vibur','regular','400'),(314,'google','Ruda','regular,700,900','400,700,900'),(315,'google','Meddon','regular','400'),(316,'google','IM Fell Great Primer SC','regular','400'),(317,'google','Rambla','regular,italic,700,700italic','400,400-italic,700,700-italic'),(318,'google','Holtwood One SC','regular','400'),(319,'google','Strait','regular','400'),(320,'google','Buda','300','300'),(321,'google','Average','regular','400'),(322,'google','Dorsa','regular','400'),(323,'google','Kelly Slab','regular','400'),(324,'google','Artifika','regular','400'),(325,'google','IM Fell French Canon SC','regular','400'),(326,'google','ABeeZee','regular,italic','400,400-italic'),(327,'google','Anaheim','regular','400'),(328,'google','Mate','regular,italic','400,400-italic'),(329,'google','Bowlby One','regular','400'),(330,'google','Over the Rainbow','regular','400'),(331,'google','Nova Script','regular','400'),(332,'google','VT323','regular','400'),(333,'google','Niconne','regular','400'),(334,'google','Acme','regular','400'),(335,'google','Fugaz One','regular','400'),(336,'google','Arbutus Slab','regular','400'),(337,'google','Yeseva One','regular','400'),(338,'google','Petit Formal Script','regular','400'),(339,'google','Nova Mono','regular','400'),(340,'google','UnifrakturCook','700','700'),(341,'google','Zeyada','regular','400'),(342,'google','Julee','regular','400'),(343,'google','Mr Dafoe','regular','400'),(344,'google','Fjord One','regular','400'),(345,'google','Gravitas One','regular','400'),(346,'google','Buenard','regular,700','400,700'),(347,'google','Hanuman','regular,700','400,700'),(348,'google','Nova Slim','regular','400'),(349,'google','IM Fell Great Primer','regular,italic','400,400-italic'),(350,'google','Astloch','regular,700','400,700'),(351,'google','Ruslan Display','regular','400'),(352,'google','Modern Antiqua','regular','400'),(353,'google','Alex Brush','regular','400'),(354,'google','Alegreya SC','regular,italic,700,700italic,900,900italic','400,400-italic,700,700-italic,900,900italic'),(355,'google','Vast Shadow','regular','400'),(356,'google','IM Fell French Canon','regular,italic','400,400-italic'),(357,'google','Capriola','regular','400'),(358,'google','IM Fell Double Pica SC','regular','400'),(359,'google','Nova Square','regular','400'),(360,'google','Prociono','regular','400'),(361,'google','Marmelad','regular','400'),(362,'google','Kenia','regular','400'),(363,'google','Nova Oval','regular','400'),(364,'google','Petrona','regular','400'),(365,'google','Dynalight','regular','400'),(366,'google','IM Fell Double Pica','regular,italic','400,400-italic'),(367,'google','Kite One','regular','400'),(368,'google','Asset','regular','400'),(369,'google','Oxygen Mono','regular','400'),(370,'google','Quantico','regular,italic,700,700italic','400,400-italic,700,700-italic'),(371,'google','Duru Sans','regular','400'),(372,'google','Geostar','regular','400'),(373,'google','Linden Hill','regular,italic','400,400-italic'),(374,'google','Condiment','regular','400'),(375,'google','Audiowide','regular','400'),(376,'google','Smythe','regular','400'),(377,'google','Sniglet','800','800'),(378,'google','Nova Flat','regular','400'),(379,'google','Irish Grover','regular','400'),(380,'google','Voces','regular','400'),(381,'google','Wallpoet','regular','400'),(382,'google','Sofia','regular','400'),(383,'google','Monofett','regular','400'),(384,'google','Knewave','regular','400'),(385,'google','Monoton','regular','400'),(386,'google','Port Lligat Sans','regular','400'),(387,'google','Bigshot One','regular','400'),(388,'google','Oranienbaum','regular','400'),(389,'google','Antic Slab','regular','400'),(390,'google','Lilita One','regular','400'),(391,'google','Gorditas','regular,700','400,700'),(392,'google','Galdeano','regular','400'),(393,'google','Imprima','regular','400'),(394,'google','Headland One','regular','400'),(395,'google','Miltonian','regular','400'),(396,'google','Lancelot','regular','400'),(397,'google','Sigmar One','regular','400'),(398,'google','Poller One','regular','400'),(399,'google','Piedra','regular','400'),(400,'google','GFS Neohellenic','regular,italic,700,700italic','400,400-italic,700,700-italic'),(401,'google','Marcellus SC','regular','400'),(402,'google','GFS Didot','regular','400'),(403,'google','Qwigley','regular','400'),(404,'google','Alike Angular','regular','400'),(405,'google','Belgrano','regular','400'),(406,'google','Geostar Fill','regular','400'),(407,'google','Average Sans','regular','400'),(408,'google','Ruluko','regular','400'),(409,'google','Goblin One','regular','400'),(410,'google','Chelsea Market','regular','400'),(411,'google','Nova Cut','regular','400'),(412,'google','Share Tech','regular','400'),(413,'google','Stoke','300,regular','300,400'),(414,'google','Cinzel','regular,700,900','400,700,900'),(415,'google','Federant','regular','400'),(416,'google','Supermercado One','regular','400'),(417,'google','Eater','regular','400'),(418,'google','Graduate','regular','400'),(419,'google','Smokum','regular','400'),(420,'google','Passero One','regular','400'),(421,'google','Atomic Age','regular','400'),(422,'google','Miniver','regular','400'),(423,'google','Euphoria Script','regular','400'),(424,'google','Londrina Solid','regular','400'),(425,'google','Aubrey','regular','400'),(426,'google','Aladin','regular','400'),(427,'google','Julius Sans One','regular','400'),(428,'google','PT Mono','regular','400'),(429,'google','Cambo','regular','400'),(430,'google','Amethysta','regular','400'),(431,'google','Finger Paint','regular','400'),(432,'google','Yesteryear','regular','400'),(433,'google','Ruthie','regular','400'),(434,'google','Oldenburg','regular','400'),(435,'google','Quando','regular','400'),(436,'google','Esteban','regular','400'),(437,'google','Arizonia','regular','400'),(438,'google','Grand Hotel','regular','400'),(439,'google','Cagliostro','regular','400'),(440,'google','Shojumaru','regular','400'),(441,'google','Basic','regular','400'),(442,'google','Averia Sans Libre','300,300italic,regular,italic,700,700italic','300,300-italic,400,400-italic,700,700-italic'),(443,'google','Rouge Script','regular','400'),(444,'google','Rosarivo','regular,italic','400,400-italic'),(445,'google','Marcellus','regular','400'),(446,'google','Mouse Memoirs','regular','400'),(447,'google','Rye','regular','400'),(448,'google','Sevillana','regular','400'),(449,'google','Iceland','regular','400'),(450,'google','Trochut','regular,italic,700','400,400-italic,700'),(451,'google','Mr De Haviland','regular','400'),(452,'google','Junge','regular','400'),(453,'google','Port Lligat Slab','regular','400'),(454,'google','Sail','regular','400'),(455,'google','Stint Ultra Condensed','regular','400'),(456,'google','Ranchers','regular','400'),(457,'google','Concert One','regular','400'),(458,'google','Seaweed Script','regular','400'),(459,'google','Libre Baskerville','regular,italic,700','400,400-italic,700'),(460,'google','Margarine','regular','400'),(461,'google','Unica One','regular','400'),(462,'google','Medula One','regular','400'),(463,'google','Cinzel Decorative','regular,700,900','400,700,900'),(464,'google','Creepster','regular','400'),(465,'google','Englebert','regular','400'),(466,'google','Flamenco','300,regular','300,400'),(467,'google','Averia Serif Libre','300,300italic,regular,italic,700,700italic','300,300-italic,400,400-italic,700,700-italic'),(468,'google','Henny Penny','regular','400'),(469,'google','Suwannaphum','regular','400'),(470,'google','Merienda','regular,700','400,700'),(471,'google','Engagement','regular','400'),(472,'google','Khmer','regular','400'),(473,'google','Playfair Display SC','regular,italic,700,700italic,900,900italic','400,400-italic,700,700-italic,900,900italic'),(474,'google','Carrois Gothic SC','regular','400'),(475,'google','Paprika','regular','400'),(476,'google','Gafata','regular','400'),(477,'google','Oregano','regular,italic','400,400-italic'),(478,'google','Donegal One','regular','400'),(479,'google','Overlock SC','regular','400'),(480,'google','Mystery Quest','regular','400'),(481,'google','Aguafina Script','regular','400'),(482,'google','Averia Libre','300,300italic,regular,italic,700,700italic','300,300-italic,400,400-italic,700,700-italic'),(483,'google','Londrina Sketch','regular','400'),(484,'google','Simonetta','regular,italic,900,900italic','400,400-italic,900,900italic'),(485,'google','Titan One','regular','400'),(486,'google','Cutive Mono','regular','400'),(487,'google','Bubblegum Sans','regular','400'),(488,'google','Bilbo Swash Caps','regular','400'),(489,'google','Erica One','regular','400'),(490,'google','Trade Winds','regular','400'),(491,'google','Fenix','regular','400'),(492,'google','Fresca','regular','400'),(493,'google','Sacramento','regular','400'),(494,'google','Domine','regular,700','400,700'),(495,'google','Montaga','regular','400'),(496,'google','Belleza','regular','400'),(497,'google','McLaren','regular','400'),(498,'google','Princess Sofia','regular','400'),(499,'google','Mrs Saint Delafield','regular','400'),(500,'google','Iceberg','regular','400'),(501,'google','Ledger','regular','400'),(502,'google','Racing Sans One','regular','400'),(503,'google','Raleway Dots','regular','400'),(504,'google','Londrina Outline','regular','400'),(505,'google','Butterfly Kids','regular','400'),(506,'google','Wellfleet','regular','400'),(507,'google','Glass Antiqua','regular','400'),(508,'google','Emilys Candy','regular','400'),(509,'google','Emblema One','regular','400'),(510,'google','Amarante','regular','400'),(511,'google','Odor Mean Chey','regular','400'),(512,'google','Koulen','regular','400'),(513,'google','Uncial Antiqua','regular','400'),(514,'google','Felipa','regular','400'),(515,'google','Almendra','regular,italic,700,700italic','400,400-italic,700,700-italic'),(516,'google','Clicker Script','regular','400'),(517,'google','Prosto One','regular','400'),(518,'google','Antic Didone','regular','400'),(519,'google','Milonga','regular','400'),(520,'google','Croissant One','regular','400'),(521,'google','Life Savers','regular,700','400,700'),(522,'google','Ruge Boogie','regular','400'),(523,'google','Balthazar','regular','400'),(524,'google','Mrs Sheppards','regular','400'),(525,'google','Revalia','regular','400'),(526,'google','Peralta','regular','400'),(527,'google','Inika','regular,700','400,700'),(528,'google','Moul','regular','400'),(529,'google','Offside','regular','400'),(530,'google','Asul','regular,700','400,700'),(531,'google','Sirin Stencil','regular','400'),(532,'google','Spicy Rice','regular','400'),(533,'google','Battambang','regular,700','400,700'),(534,'google','Text Me One','regular','400'),(535,'google','Eagle Lake','regular','400'),(536,'google','Della Respira','regular','400'),(537,'google','Chicle','regular','400'),(538,'google','Original Surfer','regular','400'),(539,'google','Fondamento','regular,italic','400,400-italic'),(540,'google','Monsieur La Doulaise','regular','400'),(541,'google','Skranji','regular,700','400,700'),(542,'google','Oleo Script Swash Caps','regular,700','400,700'),(543,'google','Denk One','regular','400'),(544,'google','Trykker','regular','400'),(545,'google','Sonsie One','regular','400'),(546,'google','Chela One','regular','400'),(547,'google','Seymour One','regular','400'),(548,'google','Habibi','regular','400'),(549,'google','Rufina','regular,700','400,700'),(550,'google','Stint Ultra Expanded','regular','400'),(551,'google','Frijole','regular','400'),(552,'google','Molle','italic','400-italic'),(553,'google','Chango','regular','400'),(554,'google','Jacques Francois','regular','400'),(555,'google','Griffy','regular','400'),(556,'google','Almendra SC','regular','400'),(557,'google','Stalemate','regular','400'),(558,'google','Devonshire','regular','400'),(559,'google','Dr Sugiyama','regular','400'),(560,'google','Ribeye Marrow','regular','400'),(561,'google','Wendy One','regular','400'),(562,'google','Nosifer','regular','400'),(563,'google','Averia Gruesa Libre','regular','400'),(564,'google','Macondo Swash Caps','regular','400'),(565,'google','Gilda Display','regular','400'),(566,'google','Marko One','regular','400'),(567,'google','Nokora','regular,700','400,700'),(568,'google','Rum Raisin','regular','400'),(569,'google','Flavors','regular','400'),(570,'google','Ribeye','regular','400'),(571,'google','Caesar Dressing','regular','400'),(572,'google','Londrina Shadow','regular','400'),(573,'google','Germania One','regular','400'),(574,'google','Cherry Swash','regular,700','400,700'),(575,'google','Underdog','regular','400'),(576,'google','Sarina','regular','400'),(577,'google','Freehand','regular','400'),(578,'google','Jim Nightshade','regular','400'),(579,'google','Autour One','regular','400'),(580,'google','Fascinate','regular','400'),(581,'google','Keania One','regular','400'),(582,'google','Metal Mania','regular','400'),(583,'google','Vampiro One','regular','400'),(584,'google','Risque','regular','400'),(585,'google','Sofadi One','regular','400'),(586,'google','Montserrat Subrayada','regular,700','400,700'),(587,'google','Macondo','regular','400'),(588,'google','Ewert','regular','400'),(589,'google','Galindo','regular','400'),(590,'google','Joti One','regular','400'),(591,'google','Unlock','regular','400'),(592,'google','Mr Bedfort','regular','400'),(593,'google','Quintessential','regular','400'),(594,'google','Angkor','regular','400'),(595,'google','Pirata One','regular','400'),(596,'google','Ceviche One','regular','400'),(597,'google','Akronim','regular','400'),(598,'google','New Rocker','regular','400'),(599,'google','Romanesco','regular','400'),(600,'google','Combo','regular','400'),(601,'google','Content','regular,700','400,700'),(602,'google','Elsie Swash Caps','regular,900','400,900'),(603,'google','Bubbler One','regular','400'),(604,'google','Plaster','regular','400'),(605,'google','Share Tech Mono','regular','400'),(606,'google','Bonbon','regular','400'),(607,'google','Miss Fajardose','regular','400'),(608,'google','Meie Script','regular','400'),(609,'google','Elsie','regular,900','400,900'),(610,'google','Freckle Face','regular','400'),(611,'google','Diplomata','regular','400'),(612,'google','Bayon','regular','400'),(613,'google','Dangrek','regular','400'),(614,'google','Preahvihear','regular','400'),(615,'google','Butcherman','regular','400'),(616,'google','Taprom','regular','400'),(617,'google','Herr Von Muellerhoff','regular','400'),(618,'google','Fascinate Inline','regular','400'),(619,'google','Jacques Francois Shadow','regular','400'),(620,'google','Faster One','regular','400'),(621,'google','Diplomata SC','regular','400'),(622,'google','Stalinist One','regular','400'),(623,'google','Snowburst One','regular','400'),(624,'google','Arbutus','regular','400'),(625,'google','Bokor','regular','400'),(626,'google','Metal','regular','400'),(627,'google','Bigelow Rules','regular','400'),(628,'google','Purple Purse','regular','400'),(629,'google','Warnes','regular','400'),(630,'google','Hanalei Fill','regular','400'),(631,'google','Siemreap','regular','400'),(632,'google','Chenla','regular','400'),(633,'google','Almendra Display','regular','400'),(634,'google','Moulpali','regular','400'),(635,'google','Fasthand','regular','400'),(636,'google','Hanalei','regular','400');

UNLOCK TABLES;

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
) ENGINE=MyISAM AUTO_INCREMENT=13 DEFAULT CHARSET=utf8;

/*Data for the table `ap_form_10392` */

LOCK TABLES `ap_form_10392` WRITE;

insert  into `ap_form_10392`(`id`,`date_created`,`date_updated`,`ip_address`,`userid`,`username`,`status`,`resume_key`,`element_1`,`element_1_other`,`element_2_1`,`element_2_2`,`element_2_3`,`element_2_other`,`element_7_1`,`element_7_2`,`element_7_3`,`element_6`,`element_14`,`element_14_other`,`element_16`,`element_16_other`,`element_18`,`element_19`,`element_19_other`,`element_15`,`element_15_other`,`element_20`,`element_20_other`,`element_21`,`element_21_other`,`element_22`,`element_23`,`element_23_other`) values (1,'2014-11-15 21:42:38',NULL,'127.0.0.1',NULL,NULL,1,NULL,0,'人妖',1,1,1,'台球',0,0,0,0,0,NULL,0,NULL,0,0,NULL,0,NULL,0,NULL,0,NULL,NULL,0,NULL),(2,'2014-11-15 22:09:55',NULL,'127.0.0.1',NULL,NULL,1,NULL,1,NULL,0,0,1,'',0,1,0,2,0,NULL,0,NULL,0,0,NULL,0,NULL,0,NULL,0,NULL,NULL,0,NULL),(3,'2014-11-17 12:20:05',NULL,'127.0.0.1',NULL,NULL,1,NULL,1,NULL,0,0,0,NULL,0,0,0,0,0,'第二题',0,'第三题',8,0,'第五题',0,'6',0,'7',0,'8','10',0,'11'),(4,'2014-11-17 16:28:12',NULL,'127.0.0.1',NULL,NULL,1,NULL,2,NULL,0,0,0,NULL,0,0,0,0,3,NULL,0,'qwe ',3,0,'阿萨德',2,NULL,3,NULL,7,NULL,'10',6,NULL),(5,'2014-11-17 16:37:33',NULL,'127.0.0.1',NULL,NULL,1,NULL,1,NULL,0,0,0,NULL,0,0,0,0,1,NULL,1,NULL,9,2,NULL,1,NULL,2,NULL,4,NULL,'10',7,NULL),(6,'2014-11-18 14:53:14',NULL,'80','80','zhang',1,NULL,1,NULL,0,0,0,NULL,0,0,0,0,3,NULL,3,NULL,9,3,NULL,3,NULL,3,NULL,6,NULL,'10',7,NULL),(7,'2014-11-18 16:57:36',NULL,NULL,NULL,NULL,1,NULL,1,NULL,0,0,0,NULL,0,0,0,0,2,NULL,2,NULL,9,2,NULL,1,NULL,2,NULL,4,NULL,'10',0,'12'),(8,'2014-11-18 17:51:27',NULL,'80','80','zhang',1,NULL,1,NULL,0,0,0,NULL,0,0,0,0,2,NULL,2,NULL,2,2,NULL,1,NULL,2,NULL,4,NULL,'10',4,NULL),(9,'2014-11-18 18:21:49',NULL,'80','80','zhang',1,NULL,2,NULL,0,0,0,NULL,0,0,0,0,3,NULL,2,NULL,1,3,NULL,3,NULL,3,NULL,4,NULL,'10',3,NULL),(10,'2014-11-19 15:25:44',NULL,'80','80','zhang',1,NULL,2,NULL,0,0,0,NULL,0,0,0,0,3,NULL,2,NULL,3,1,NULL,2,NULL,2,NULL,5,NULL,'10',5,NULL),(11,'2014-12-18 00:12:52',NULL,'143','143','',1,NULL,1,NULL,0,0,0,NULL,0,0,0,0,2,NULL,4,NULL,3,3,NULL,2,NULL,3,NULL,7,NULL,'12',5,NULL),(12,'2015-01-23 10:52:51',NULL,'92','92','13653361299',1,NULL,1,NULL,0,0,0,NULL,0,0,0,0,1,NULL,2,NULL,4,1,NULL,2,NULL,2,NULL,4,NULL,'2000',4,NULL);

UNLOCK TABLES;

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
) ENGINE=MyISAM AUTO_INCREMENT=10 DEFAULT CHARSET=utf8;

/*Data for the table `ap_form_10392_review` */

LOCK TABLES `ap_form_10392_review` WRITE;

insert  into `ap_form_10392_review`(`id`,`date_created`,`date_updated`,`ip_address`,`userid`,`username`,`status`,`resume_key`,`element_1`,`element_1_other`,`element_2_1`,`element_2_2`,`element_2_3`,`element_2_other`,`element_7_1`,`element_7_2`,`element_7_3`,`element_6`,`element_14`,`element_14_other`,`element_16`,`element_16_other`,`element_18`,`element_19`,`element_19_other`,`element_15`,`element_15_other`,`element_20`,`element_20_other`,`element_21`,`element_21_other`,`element_22`,`element_23`,`element_23_other`,`session_id`) values (1,'2014-11-19 15:57:20',NULL,'80','80','zhang',1,NULL,1,NULL,0,0,0,NULL,0,0,0,0,0,NULL,0,NULL,0,0,NULL,0,NULL,0,NULL,0,NULL,NULL,0,NULL,'6tm4ta28lpkukhpr6s6h1jjhl2'),(2,'2014-12-11 17:52:46',NULL,'129','129','18630343043',1,NULL,2,NULL,0,0,0,NULL,0,0,0,0,0,'李莉',0,NULL,0,0,NULL,0,NULL,0,NULL,0,NULL,NULL,0,NULL,'9s6sfateui0ettipcrce7f0bb3'),(5,'2015-01-19 12:07:36',NULL,'92','92','13653361299',1,NULL,1,NULL,0,0,0,NULL,0,0,0,0,2,NULL,4,NULL,1,4,NULL,2,NULL,3,NULL,3,NULL,NULL,0,NULL,'1sl0g3pat2r079tusdpqu3ks71'),(4,'2014-12-18 01:17:28',NULL,'143','143','',1,NULL,1,NULL,0,0,0,NULL,0,0,0,0,2,NULL,2,NULL,1,2,NULL,3,NULL,2,NULL,3,NULL,NULL,0,NULL,'81b9f1mbrbql9nic0653mq58l6'),(8,'2015-01-24 15:01:08',NULL,'92','92','13653361299',1,NULL,1,NULL,0,0,0,NULL,0,0,0,0,3,NULL,0,NULL,0,0,NULL,0,NULL,0,NULL,0,NULL,NULL,0,NULL,'njk3btgft67970jhm6j5527sg4'),(7,'2015-01-24 14:32:21',NULL,'92','92','13653361299',1,NULL,1,NULL,0,0,0,NULL,0,0,0,0,3,NULL,3,NULL,2,0,NULL,0,NULL,0,NULL,0,NULL,NULL,0,NULL,'j5379t8rmlif219b9es4a34u95'),(9,'2015-04-25 18:20:09',NULL,NULL,NULL,NULL,1,NULL,1,NULL,0,0,0,NULL,0,0,0,0,3,NULL,4,NULL,0,0,NULL,0,NULL,0,NULL,0,NULL,NULL,0,NULL,'hce9eeunk3hdq2o729em9k7ol1');

UNLOCK TABLES;

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

LOCK TABLES `ap_form_10825` WRITE;

UNLOCK TABLES;

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

LOCK TABLES `ap_form_11022` WRITE;

UNLOCK TABLES;

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

LOCK TABLES `ap_form_11022_review` WRITE;

UNLOCK TABLES;

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

LOCK TABLES `ap_form_11892` WRITE;

insert  into `ap_form_11892`(`id`,`date_created`,`date_updated`,`ip_address`,`userid`,`status`,`resume_key`,`element_1`,`element_2`) values (1,'2014-11-18 11:20:39',NULL,'127.0.0.1',NULL,1,NULL,1,0),(2,'2014-11-18 11:27:53',NULL,'127.0.0.1',NULL,1,NULL,2,0),(3,'2014-11-18 11:31:11',NULL,'127.0.0.1',NULL,1,NULL,3,2),(4,'2014-11-18 11:34:53',NULL,'127.0.0.1',NULL,1,NULL,2,2),(5,'2014-11-18 12:13:01',NULL,'127.0.0.1',NULL,1,NULL,2,2),(6,'2014-11-18 13:38:33',NULL,'127.0.0.1',NULL,1,NULL,2,2);

UNLOCK TABLES;

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

LOCK TABLES `ap_form_11892_review` WRITE;

UNLOCK TABLES;

/*Table structure for table `ap_form_12465` */

DROP TABLE IF EXISTS `ap_form_12465`;

CREATE TABLE `ap_form_12465` (
  `id` int(11) NOT NULL auto_increment,
  `date_created` datetime NOT NULL default '0000-00-00 00:00:00',
  `date_updated` datetime default NULL,
  `ip_address` varchar(15) default NULL,
  `userid` varchar(15) default NULL,
  `username` varchar(15) default NULL,
  `status` int(4) unsigned NOT NULL default '1',
  `resume_key` varchar(10) default NULL,
  `element_1` int(4) unsigned NOT NULL default '0' COMMENT 'Multiple Choice',
  `element_2` int(4) unsigned NOT NULL default '0' COMMENT 'Multiple Choice',
  `element_3_4` int(4) unsigned NOT NULL default '0' COMMENT 'Checkbox - 4',
  `element_3_5` int(4) unsigned NOT NULL default '0' COMMENT 'Checkbox - 5',
  `element_3_6` int(4) unsigned NOT NULL default '0' COMMENT 'Checkbox - 6',
  `element_3_7` int(4) unsigned NOT NULL default '0' COMMENT 'Checkbox - 7',
  `element_3_8` int(4) unsigned NOT NULL default '0' COMMENT 'Checkbox - 8',
  `element_3_9` int(4) unsigned NOT NULL default '0' COMMENT 'Checkbox - 9',
  `element_3_10` int(4) unsigned NOT NULL default '0' COMMENT 'Checkbox - 10',
  `element_3_11` int(4) unsigned NOT NULL default '0' COMMENT 'Checkbox - 11',
  `element_3_12` int(4) unsigned NOT NULL default '0' COMMENT 'Checkbox - 12',
  `element_3_13` int(4) unsigned NOT NULL default '0' COMMENT 'Checkbox - 13',
  `element_7_4` int(4) unsigned NOT NULL default '0' COMMENT 'Checkbox - 4',
  `element_7_5` int(4) unsigned NOT NULL default '0' COMMENT 'Checkbox - 5',
  `element_7_6` int(4) unsigned NOT NULL default '0' COMMENT 'Checkbox - 6',
  `element_7_7` int(4) unsigned NOT NULL default '0' COMMENT 'Checkbox - 7',
  `element_7_8` int(4) unsigned NOT NULL default '0' COMMENT 'Checkbox - 8',
  `element_7_9` int(4) unsigned NOT NULL default '0' COMMENT 'Checkbox - 9',
  `element_7_10` int(4) unsigned NOT NULL default '0' COMMENT 'Checkbox - 10',
  `element_7_11` int(4) unsigned NOT NULL default '0' COMMENT 'Checkbox - 11',
  `element_7_other` text COMMENT 'Choice - Other',
  `element_8` int(4) unsigned NOT NULL default '0' COMMENT 'Multiple Choice',
  `element_10` double default NULL COMMENT 'Number',
  `element_13_4` int(4) unsigned NOT NULL default '0' COMMENT 'Checkbox - 4',
  `element_13_5` int(4) unsigned NOT NULL default '0' COMMENT 'Checkbox - 5',
  `element_13_6` int(4) unsigned NOT NULL default '0' COMMENT 'Checkbox - 6',
  `element_13_7` int(4) unsigned NOT NULL default '0' COMMENT 'Checkbox - 7',
  `element_13_8` int(4) unsigned NOT NULL default '0' COMMENT 'Checkbox - 8',
  `element_13_9` int(4) unsigned NOT NULL default '0' COMMENT 'Checkbox - 9',
  `element_13_10` int(4) unsigned NOT NULL default '0' COMMENT 'Checkbox - 10',
  `element_20` text COMMENT 'Single Line Text',
  `element_21` double default NULL COMMENT 'Number',
  `element_22` int(4) unsigned NOT NULL default '0' COMMENT 'Multiple Choice',
  `element_23` text COMMENT 'Single Line Text',
  `element_24` double default NULL COMMENT 'Number',
  `element_25` text COMMENT 'Single Line Text',
  `element_26` int(4) unsigned NOT NULL default '0' COMMENT 'Multiple Choice',
  PRIMARY KEY  (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=4 DEFAULT CHARSET=utf8;

/*Data for the table `ap_form_12465` */

LOCK TABLES `ap_form_12465` WRITE;

insert  into `ap_form_12465`(`id`,`date_created`,`date_updated`,`ip_address`,`userid`,`username`,`status`,`resume_key`,`element_1`,`element_2`,`element_3_4`,`element_3_5`,`element_3_6`,`element_3_7`,`element_3_8`,`element_3_9`,`element_3_10`,`element_3_11`,`element_3_12`,`element_3_13`,`element_7_4`,`element_7_5`,`element_7_6`,`element_7_7`,`element_7_8`,`element_7_9`,`element_7_10`,`element_7_11`,`element_7_other`,`element_8`,`element_10`,`element_13_4`,`element_13_5`,`element_13_6`,`element_13_7`,`element_13_8`,`element_13_9`,`element_13_10`,`element_20`,`element_21`,`element_22`,`element_23`,`element_24`,`element_25`,`element_26`) values (1,'2015-04-25 22:34:19',NULL,NULL,NULL,NULL,1,NULL,0,9,0,1,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,1,'',8,12,0,0,0,0,0,1,0,'杨超',66,1,'秦皇岛',13333333333,'543335',1),(2,'2015-04-25 22:34:19',NULL,NULL,NULL,NULL,1,NULL,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,NULL,0,NULL,0,0,0,0,0,0,0,NULL,NULL,0,NULL,13653361207,NULL,0),(3,'2015-04-28 10:27:43',NULL,NULL,NULL,NULL,1,NULL,0,5,1,0,0,0,0,0,0,0,1,0,0,0,0,0,0,1,0,0,'',9,12,0,0,0,0,0,0,1,'张三',67,1,'秦皇岛',13512121212,'12121212',1);

UNLOCK TABLES;

/*Table structure for table `ap_form_12465_review` */

DROP TABLE IF EXISTS `ap_form_12465_review`;

CREATE TABLE `ap_form_12465_review` (
  `id` int(11) NOT NULL auto_increment,
  `date_created` datetime NOT NULL default '0000-00-00 00:00:00',
  `date_updated` datetime default NULL,
  `ip_address` varchar(15) default NULL,
  `userid` varchar(15) default NULL,
  `username` varchar(15) default NULL,
  `status` int(4) unsigned NOT NULL default '1',
  `resume_key` varchar(10) default NULL,
  `element_1` int(4) unsigned NOT NULL default '0' COMMENT 'Multiple Choice',
  `element_2` int(4) unsigned NOT NULL default '0' COMMENT 'Multiple Choice',
  `element_3_4` int(4) unsigned NOT NULL default '0' COMMENT 'Checkbox - 4',
  `element_3_5` int(4) unsigned NOT NULL default '0' COMMENT 'Checkbox - 5',
  `element_3_6` int(4) unsigned NOT NULL default '0' COMMENT 'Checkbox - 6',
  `element_3_7` int(4) unsigned NOT NULL default '0' COMMENT 'Checkbox - 7',
  `element_3_8` int(4) unsigned NOT NULL default '0' COMMENT 'Checkbox - 8',
  `element_3_9` int(4) unsigned NOT NULL default '0' COMMENT 'Checkbox - 9',
  `element_3_10` int(4) unsigned NOT NULL default '0' COMMENT 'Checkbox - 10',
  `element_3_11` int(4) unsigned NOT NULL default '0' COMMENT 'Checkbox - 11',
  `element_3_12` int(4) unsigned NOT NULL default '0' COMMENT 'Checkbox - 12',
  `element_3_13` int(4) unsigned NOT NULL default '0' COMMENT 'Checkbox - 13',
  `element_7_4` int(4) unsigned NOT NULL default '0' COMMENT 'Checkbox - 4',
  `element_7_5` int(4) unsigned NOT NULL default '0' COMMENT 'Checkbox - 5',
  `element_7_6` int(4) unsigned NOT NULL default '0' COMMENT 'Checkbox - 6',
  `element_7_7` int(4) unsigned NOT NULL default '0' COMMENT 'Checkbox - 7',
  `element_7_8` int(4) unsigned NOT NULL default '0' COMMENT 'Checkbox - 8',
  `element_7_9` int(4) unsigned NOT NULL default '0' COMMENT 'Checkbox - 9',
  `element_7_10` int(4) unsigned NOT NULL default '0' COMMENT 'Checkbox - 10',
  `element_7_11` int(4) unsigned NOT NULL default '0' COMMENT 'Checkbox - 11',
  `element_7_other` text COMMENT 'Choice - Other',
  `element_8` int(4) unsigned NOT NULL default '0' COMMENT 'Multiple Choice',
  `element_10` double default NULL COMMENT 'Number',
  `element_13_4` int(4) unsigned NOT NULL default '0' COMMENT 'Checkbox - 4',
  `element_13_5` int(4) unsigned NOT NULL default '0' COMMENT 'Checkbox - 5',
  `element_13_6` int(4) unsigned NOT NULL default '0' COMMENT 'Checkbox - 6',
  `element_13_7` int(4) unsigned NOT NULL default '0' COMMENT 'Checkbox - 7',
  `element_13_8` int(4) unsigned NOT NULL default '0' COMMENT 'Checkbox - 8',
  `element_13_9` int(4) unsigned NOT NULL default '0' COMMENT 'Checkbox - 9',
  `element_13_10` int(4) unsigned NOT NULL default '0' COMMENT 'Checkbox - 10',
  `element_20` text COMMENT 'Single Line Text',
  `element_21` double default NULL COMMENT 'Number',
  `element_22` int(4) unsigned NOT NULL default '0' COMMENT 'Multiple Choice',
  `element_23` text COMMENT 'Single Line Text',
  `element_24` double default NULL COMMENT 'Number',
  `element_25` text COMMENT 'Single Line Text',
  `element_26` int(4) unsigned NOT NULL default '0' COMMENT 'Multiple Choice',
  `session_id` varchar(100) default NULL,
  PRIMARY KEY  (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=5 DEFAULT CHARSET=utf8;

/*Data for the table `ap_form_12465_review` */

LOCK TABLES `ap_form_12465_review` WRITE;

insert  into `ap_form_12465_review`(`id`,`date_created`,`date_updated`,`ip_address`,`userid`,`username`,`status`,`resume_key`,`element_1`,`element_2`,`element_3_4`,`element_3_5`,`element_3_6`,`element_3_7`,`element_3_8`,`element_3_9`,`element_3_10`,`element_3_11`,`element_3_12`,`element_3_13`,`element_7_4`,`element_7_5`,`element_7_6`,`element_7_7`,`element_7_8`,`element_7_9`,`element_7_10`,`element_7_11`,`element_7_other`,`element_8`,`element_10`,`element_13_4`,`element_13_5`,`element_13_6`,`element_13_7`,`element_13_8`,`element_13_9`,`element_13_10`,`element_20`,`element_21`,`element_22`,`element_23`,`element_24`,`element_25`,`element_26`,`session_id`) values (2,'2015-04-27 16:51:22',NULL,'101','101','13653361207',1,NULL,0,9,0,0,0,0,0,0,0,0,0,1,0,0,0,0,0,1,0,0,'',7,1,0,0,0,0,0,0,0,'',NULL,0,'',NULL,'',0,'jloe0rda8a8a4e9v9ita5lle25'),(4,'2015-04-28 11:02:04',NULL,NULL,NULL,NULL,1,NULL,0,0,0,0,0,0,1,0,0,0,0,0,0,0,0,0,0,0,0,0,NULL,0,NULL,0,0,0,0,0,0,0,NULL,NULL,0,NULL,NULL,NULL,0,'22jevtfa62ko2ahb7n0o9qd7b3');

UNLOCK TABLES;

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

LOCK TABLES `ap_form_2` WRITE;

UNLOCK TABLES;

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

LOCK TABLES `ap_form_elements` WRITE;

insert  into `ap_form_elements`(`form_id`,`element_id`,`element_title`,`element_guidelines`,`element_size`,`element_is_required`,`element_is_unique`,`element_is_private`,`element_type`,`element_position`,`element_default_value`,`element_constraint`,`element_total_child`,`element_css_class`,`element_range_min`,`element_range_max`,`element_range_limit_by`,`element_status`,`element_choice_columns`,`element_choice_has_other`,`element_choice_other_label`,`element_time_showsecond`,`element_time_24hour`,`element_address_hideline2`,`element_address_us_only`,`element_date_enable_range`,`element_date_range_min`,`element_date_range_max`,`element_date_enable_selection_limit`,`element_date_selection_max`,`element_date_past_future`,`element_date_disable_past_future`,`element_date_disable_weekend`,`element_date_disable_specific`,`element_date_disabled_list`,`element_file_enable_type_limit`,`element_file_block_or_allow`,`element_file_type_list`,`element_file_as_attachment`,`element_file_enable_advance`,`element_file_auto_upload`,`element_file_enable_multi_upload`,`element_file_max_selection`,`element_file_enable_size_limit`,`element_file_size_max`,`element_matrix_allow_multiselect`,`element_matrix_parent_id`,`element_number_enable_quantity`,`element_number_quantity_link`,`element_section_display_in_email`,`element_section_enable_scroll`,`element_submit_use_image`,`element_submit_primary_text`,`element_submit_secondary_text`,`element_submit_primary_img`,`element_submit_secondary_img`,`element_page_title`,`element_page_number`) values (10392,1,'您是否曾关注过电动车或混合动力车的价格或性能 ？','','medium',1,0,0,'radio',0,'','',0,'',0,0,'c',1,1,0,'其他',0,0,0,0,0,'0000-00-00','0000-00-00',0,1,'p',0,0,0,'',1,'b','php,php3,php4,php5,phtml,exe,pl,cgi,html,htm,js',0,1,1,1,5,0,2,0,0,0,NULL,0,0,0,'Continue','Previous',NULL,NULL,NULL,1),(10392,2,'你的爱好是什么','','medium',0,0,0,'checkbox',2,'','',0,'',0,0,'c',0,1,1,'其他',0,0,0,0,0,'0000-00-00','0000-00-00',0,1,'p',0,0,0,'',1,'b','php,php3,php4,php5,phtml,exe,pl,cgi,html,htm,js',0,1,1,1,5,0,2,0,0,0,NULL,0,0,0,'Continue','Previous',NULL,NULL,NULL,2),(10825,1,'性别','','medium',0,0,0,'radio',0,'','',0,'',0,0,'c',1,1,1,'其他',0,0,0,0,0,'0000-00-00','0000-00-00',0,1,'p',0,0,0,'',1,'b','php,php3,php4,php5,phtml,exe,pl,cgi,html,htm,js',0,1,1,1,5,0,2,0,0,0,NULL,0,0,0,'Continue','Previous',NULL,NULL,NULL,1),(10825,2,'你的爱好是什么','','medium',0,0,0,'checkbox',1,'','',0,'',0,0,'c',1,1,1,'其他',0,0,0,0,0,'0000-00-00','0000-00-00',0,1,'p',0,0,0,'',1,'b','php,php3,php4,php5,phtml,exe,pl,cgi,html,htm,js',0,1,1,1,5,0,2,0,0,0,NULL,0,0,0,'Continue','Previous',NULL,NULL,NULL,1),(10392,3,'Page Break','','medium',0,0,0,'page_break',1,'','',0,'',0,0,'c',1,1,0,NULL,0,0,0,0,0,'0000-00-00','0000-00-00',0,1,'p',0,0,0,'',1,'b','php,php3,php4,php5,phtml,exe,pl,cgi,html,htm,js',0,1,1,1,5,0,2,0,0,0,NULL,0,0,0,'下一题','Previous',NULL,NULL,'',1),(10392,4,'Page Break','','medium',0,0,0,'page_break',15,'','',0,'',0,0,'c',1,1,0,NULL,0,0,0,0,0,'0000-00-00','0000-00-00',0,1,'p',0,0,0,'',1,'b','php,php3,php4,php5,phtml,exe,pl,cgi,html,htm,js',0,1,1,1,5,0,2,0,0,0,NULL,0,0,0,'继续','上一题',NULL,NULL,'',8),(10392,5,'Page Break','','medium',0,0,0,'page_break',17,'','',0,'',0,0,'c',1,1,0,NULL,0,0,0,0,0,'0000-00-00','0000-00-00',0,1,'p',0,0,0,'',1,'b','php,php3,php4,php5,phtml,exe,pl,cgi,html,htm,js',0,1,1,1,5,0,2,0,0,0,NULL,0,0,0,'继续','上一题',NULL,NULL,'',9),(10392,6,'Multiple Choice','','medium',0,0,0,'radio',6,'','',0,'',0,0,'c',0,1,0,'Other',0,0,0,0,0,'0000-00-00','0000-00-00',0,1,'p',0,0,0,'',1,'b','php,php3,php4,php5,phtml,exe,pl,cgi,html,htm,js',0,1,1,1,5,0,2,0,0,0,NULL,0,0,0,'Continue','Previous',NULL,NULL,NULL,4),(10392,7,'Checkboxes','','medium',0,0,0,'checkbox',4,'','',0,'',0,0,'c',0,1,0,'Other',0,0,0,0,0,'0000-00-00','0000-00-00',0,1,'p',0,0,0,'',1,'b','php,php3,php4,php5,phtml,exe,pl,cgi,html,htm,js',0,1,1,1,5,0,2,0,0,0,NULL,0,0,0,'Continue','Previous',NULL,NULL,NULL,3),(10392,8,'Page Break','','medium',0,0,0,'page_break',3,'','',0,'',0,0,'c',1,1,0,NULL,0,0,0,0,0,'0000-00-00','0000-00-00',0,1,'p',0,0,0,'',1,'b','php,php3,php4,php5,phtml,exe,pl,cgi,html,htm,js',0,1,1,1,5,0,2,0,0,0,NULL,0,0,0,'继续','上一题',NULL,NULL,'',2),(10392,9,'Page Break','','medium',0,0,0,'page_break',11,'','',0,'',0,0,'c',1,1,0,NULL,0,0,0,0,0,'0000-00-00','0000-00-00',0,1,'p',0,0,0,'',1,'b','php,php3,php4,php5,phtml,exe,pl,cgi,html,htm,js',0,1,1,1,5,0,2,0,0,0,NULL,0,0,0,'继续','上一题',NULL,NULL,'',6),(10392,10,'Page Break','','medium',0,0,0,'page_break',13,'','',0,'',0,0,'c',1,1,0,NULL,0,0,0,0,0,'0000-00-00','0000-00-00',0,1,'p',0,0,0,'',1,'b','php,php3,php4,php5,phtml,exe,pl,cgi,html,htm,js',0,1,1,1,5,0,2,0,0,0,NULL,0,0,0,'继续','上一题',NULL,NULL,'',7),(10392,11,'Page Break','','medium',0,0,0,'page_break',9,'','',0,'',0,0,'c',1,1,0,NULL,0,0,0,0,0,'0000-00-00','0000-00-00',0,1,'p',0,0,0,'',1,'b','php,php3,php4,php5,phtml,exe,pl,cgi,html,htm,js',0,1,1,1,5,0,2,0,0,0,NULL,0,0,0,'继续','上一题',NULL,NULL,'',5),(10392,12,'Page Break','','medium',0,0,0,'page_break',7,'','',0,'',0,0,'c',1,1,0,NULL,0,0,0,0,0,'0000-00-00','0000-00-00',0,1,'p',0,0,0,'',1,'b','php,php3,php4,php5,phtml,exe,pl,cgi,html,htm,js',0,1,1,1,5,0,2,0,0,0,NULL,0,0,0,'继续','上一题',NULL,NULL,'',4),(10392,13,'Page Break','','medium',0,0,0,'page_break',5,'','',0,'',0,0,'c',1,1,0,NULL,0,0,0,0,0,'0000-00-00','0000-00-00',0,1,'p',0,0,0,'',1,'b','php,php3,php4,php5,phtml,exe,pl,cgi,html,htm,js',0,1,1,1,5,0,2,0,0,0,NULL,0,0,0,'继续','上一题',NULL,NULL,'',3),(10392,14,'当您计划购买下一辆车时, 您愿意考虑哪种类型的车?\n定义：传统型内燃机车是一种只由内燃机驱动的汽车，燃料主要包括汽油，柴油，液化石油气，压缩天然气等； 混合动力汽车是一种结合使用传统内燃机和电动机作为动力源的汽车； 插电式混合动力汽车是一种可由外部电源充电的混合动力车； 纯电动汽车是一种只由可充电电池组提供动力的电动汽车。','','medium',1,0,0,'radio',2,'','',0,'',0,0,'c',1,1,1,'其它 ',0,0,0,0,0,'0000-00-00','0000-00-00',0,1,'p',0,0,0,'',1,'b','php,php3,php4,php5,phtml,exe,pl,cgi,html,htm,js',0,1,1,1,5,0,2,0,0,0,NULL,0,0,0,'Continue','Previous',NULL,NULL,NULL,2),(10392,15,'当您购买一辆传统型内燃机汽车时，你更喜欢采用哪种消费方式？*\n租赁汽车：购置税, 车船使用税，交通事故强制保险, 常规保险（包括四项常规保险：车损险、第三者责任险、全车盗抢险和不计免赔特约险）均由租赁公司承担；维修保养费包含在租赁费中，在租赁期间，如不出交通事故，用户除租金外只需支付油费。租赁费用较高，但对用户来说比较方便。在欧洲每年约20%的新车为租赁使用，用户主要为公司。','','medium',1,0,0,'radio',10,'','',0,'',0,0,'c',1,1,1,'其他',0,0,0,0,0,'0000-00-00','0000-00-00',0,1,'p',0,0,0,'',1,'b','php,php3,php4,php5,phtml,exe,pl,cgi,html,htm,js',0,1,1,1,5,0,2,0,0,0,NULL,0,0,0,'Continue','Previous',NULL,NULL,NULL,6),(10392,16,'您更可能购买哪种类型的汽车作为您的下一辆车（包括第一辆车）？\n定义：传统型内燃机车是一种只由内燃机驱动的汽车，燃料主要包括汽油，柴油，液化石油气，压缩天然气等； 混合动力汽车是一种结合使用传统内燃机和电动机作为动力源的汽车； 插电式混合动力汽车是一种可由外部电源充电的混合动力车； 纯电动汽车是一种只由可充电电池组提供动力的电动汽车。','','medium',1,0,0,'radio',4,'','',0,'',0,0,'c',1,1,1,'其他',0,0,0,0,0,'0000-00-00','0000-00-00',0,1,'p',0,0,0,'',1,'b','php,php3,php4,php5,phtml,exe,pl,cgi,html,htm,js',0,1,1,1,5,0,2,0,0,0,NULL,0,0,0,'Continue','Previous',NULL,NULL,NULL,3),(10392,23,'当油价涨到何等价位时，您可能会考虑购买电动汽车？','','medium',1,0,0,'radio',18,'','',0,'',0,0,'c',1,1,1,'其他',0,0,0,0,0,'0000-00-00','0000-00-00',0,1,'p',0,0,0,'',1,'b','php,php3,php4,php5,phtml,exe,pl,cgi,html,htm,js',0,1,1,1,5,0,2,0,0,0,NULL,0,0,0,'Continue','Previous',NULL,NULL,NULL,10),(10392,18,'您计划将何时购买您的下一辆车？','','medium',1,0,0,'select',6,'','',0,'',0,0,'c',1,1,0,NULL,0,0,0,0,0,'0000-00-00','0000-00-00',0,1,'p',0,0,0,'',1,'b','php,php3,php4,php5,phtml,exe,pl,cgi,html,htm,js',0,1,1,1,5,0,2,0,0,0,NULL,0,0,0,'Continue','Previous',NULL,NULL,NULL,4),(10392,19,'如果您已经拥有了一辆传统型内燃机汽车，设想您计划购买第二辆车,您将更愿意选择哪种类型的汽车？','','medium',1,0,0,'radio',8,'','',0,'',0,0,'c',1,1,1,'其他',0,0,0,0,0,'0000-00-00','0000-00-00',0,1,'p',0,0,0,'',1,'b','php,php3,php4,php5,phtml,exe,pl,cgi,html,htm,js',0,1,1,1,5,0,2,0,0,0,NULL,0,0,0,'Continue','Previous',NULL,NULL,NULL,5),(10392,20,'当您购买一辆电动车或混合型电动车时，你更喜欢采用哪种消费方式？*\n租赁汽车：购置税, 车船使用税，交通事故强制保险, 常规保险（包括四项常规保险：车损险、第三者责任险、全车盗抢险和不计免赔特约险）均由租赁公司承担；维修保养费包含在租赁费中，用户除租金外只需支付电费和油费。 由于电动汽车技术尚未成熟，潜在用户对其了解不多，加之价格很高，对电动车感兴趣的用户来说，也许电动汽车租赁是在电动汽车市场初始阶段的不错选择。','','medium',1,0,0,'radio',12,'','',0,'',0,0,'c',1,1,1,'其他',0,0,0,0,0,'0000-00-00','0000-00-00',0,1,'p',0,0,0,'',1,'b','php,php3,php4,php5,phtml,exe,pl,cgi,html,htm,js',0,1,1,1,5,0,2,0,0,0,NULL,0,0,0,'Continue','Previous',NULL,NULL,NULL,7),(10392,21,'假设你选择租赁使用一辆纯电动汽车，您希望租赁期限为多久？','','medium',1,0,0,'radio',14,'','',0,'',0,0,'c',1,1,1,'其他',0,0,0,0,0,'0000-00-00','0000-00-00',0,1,'p',0,0,0,'',1,'b','php,php3,php4,php5,phtml,exe,pl,cgi,html,htm,js',0,1,1,1,5,0,2,0,0,0,NULL,0,0,0,'Continue','Previous',NULL,NULL,NULL,8),(10392,22,'假设您选择租赁使用一辆日产聆风电动汽车（在中国尚未销售），您愿意每月支付多少租金？请输入人民币:\n一辆与日产聆风尺寸相近的日产骐达传统燃油汽车，以综合路况下的平均油耗为7.3L/100km，每月行驶1500公里，93号汽油价格7.92元计算，平均每月用车成本开支（包括燃油费+车险+车船税+保养费）约需人民币1400元。如果您平时驾车，可与您的座驾的使用成本进行比较','','small',1,0,0,'text',16,'','yen',0,'',0,0,'c',1,1,0,NULL,0,0,0,0,0,'0000-00-00','0000-00-00',0,1,'p',0,0,0,'',1,'b','php,php3,php4,php5,phtml,exe,pl,cgi,html,htm,js',0,1,1,1,5,0,2,0,0,0,NULL,0,0,0,'Continue','Previous',NULL,NULL,NULL,9),(11022,1,'您是否曾关注过电动车或混合动力车的价格或性能 ？','','medium',1,0,0,'radio',0,'','',0,'',0,0,'c',1,1,0,'其他',0,0,0,0,0,'0000-00-00','0000-00-00',0,1,'p',0,0,0,'',1,'b','php,php3,php4,php5,phtml,exe,pl,cgi,html,htm,js',0,1,1,1,5,0,2,0,0,0,NULL,0,0,0,'Continue','Previous',NULL,NULL,NULL,1),(11022,2,'你的爱好是什么','','medium',0,0,0,'checkbox',2,'','',0,'',0,0,'c',0,1,1,'其他',0,0,0,0,0,'0000-00-00','0000-00-00',0,1,'p',0,0,0,'',1,'b','php,php3,php4,php5,phtml,exe,pl,cgi,html,htm,js',0,1,1,1,5,0,2,0,0,0,NULL,0,0,0,'Continue','Previous',NULL,NULL,NULL,2),(11022,3,'Page Break','','medium',0,0,0,'page_break',1,'','',0,'',0,0,'c',1,1,0,NULL,0,0,0,0,0,'0000-00-00','0000-00-00',0,1,'p',0,0,0,'',1,'b','php,php3,php4,php5,phtml,exe,pl,cgi,html,htm,js',0,1,1,1,5,0,2,0,0,0,NULL,0,0,0,'下一题','Previous',NULL,NULL,'',1),(11022,4,'Page Break','','medium',0,0,0,'page_break',15,'','',0,'',0,0,'c',1,1,0,NULL,0,0,0,0,0,'0000-00-00','0000-00-00',0,1,'p',0,0,0,'',1,'b','php,php3,php4,php5,phtml,exe,pl,cgi,html,htm,js',0,1,1,1,5,0,2,0,0,0,NULL,0,0,0,'Continue','Previous',NULL,NULL,'',8),(11022,5,'Page Break','','medium',0,0,0,'page_break',17,'','',0,'',0,0,'c',1,1,0,NULL,0,0,0,0,0,'0000-00-00','0000-00-00',0,1,'p',0,0,0,'',1,'b','php,php3,php4,php5,phtml,exe,pl,cgi,html,htm,js',0,1,1,1,5,0,2,0,0,0,NULL,0,0,0,'Continue','Previous',NULL,NULL,'',9),(11022,6,'Multiple Choice','','medium',0,0,0,'radio',6,'','',0,'',0,0,'c',0,1,0,'Other',0,0,0,0,0,'0000-00-00','0000-00-00',0,1,'p',0,0,0,'',1,'b','php,php3,php4,php5,phtml,exe,pl,cgi,html,htm,js',0,1,1,1,5,0,2,0,0,0,NULL,0,0,0,'Continue','Previous',NULL,NULL,NULL,4),(11022,7,'Checkboxes','','medium',0,0,0,'checkbox',4,'','',0,'',0,0,'c',0,1,0,'Other',0,0,0,0,0,'0000-00-00','0000-00-00',0,1,'p',0,0,0,'',1,'b','php,php3,php4,php5,phtml,exe,pl,cgi,html,htm,js',0,1,1,1,5,0,2,0,0,0,NULL,0,0,0,'Continue','Previous',NULL,NULL,NULL,3),(11022,8,'Page Break','','medium',0,0,0,'page_break',3,'','',0,'',0,0,'c',1,1,0,NULL,0,0,0,0,0,'0000-00-00','0000-00-00',0,1,'p',0,0,0,'',1,'b','php,php3,php4,php5,phtml,exe,pl,cgi,html,htm,js',0,1,1,1,5,0,2,0,0,0,NULL,0,0,0,'继续','上一题',NULL,NULL,'Untitled Page',2),(11022,9,'Page Break','','medium',0,0,0,'page_break',11,'','',0,'',0,0,'c',1,1,0,NULL,0,0,0,0,0,'0000-00-00','0000-00-00',0,1,'p',0,0,0,'',1,'b','php,php3,php4,php5,phtml,exe,pl,cgi,html,htm,js',0,1,1,1,5,0,2,0,0,0,NULL,0,0,0,'Continue','Previous',NULL,NULL,'Untitled Page',6),(11022,10,'Page Break','','medium',0,0,0,'page_break',13,'','',0,'',0,0,'c',1,1,0,NULL,0,0,0,0,0,'0000-00-00','0000-00-00',0,1,'p',0,0,0,'',1,'b','php,php3,php4,php5,phtml,exe,pl,cgi,html,htm,js',0,1,1,1,5,0,2,0,0,0,NULL,0,0,0,'Continue','Previous',NULL,NULL,'Untitled Page',7),(11022,11,'Page Break','','medium',0,0,0,'page_break',9,'','',0,'',0,0,'c',1,1,0,NULL,0,0,0,0,0,'0000-00-00','0000-00-00',0,1,'p',0,0,0,'',1,'b','php,php3,php4,php5,phtml,exe,pl,cgi,html,htm,js',0,1,1,1,5,0,2,0,0,0,NULL,0,0,0,'Continue','Previous',NULL,NULL,'Untitled Page',5),(11022,12,'Page Break','','medium',0,0,0,'page_break',7,'','',0,'',0,0,'c',1,1,0,NULL,0,0,0,0,0,'0000-00-00','0000-00-00',0,1,'p',0,0,0,'',1,'b','php,php3,php4,php5,phtml,exe,pl,cgi,html,htm,js',0,1,1,1,5,0,2,0,0,0,NULL,0,0,0,'Continue','Previous',NULL,NULL,'Untitled Page',4),(11022,13,'Page Break','','medium',0,0,0,'page_break',5,'','',0,'',0,0,'c',1,1,0,NULL,0,0,0,0,0,'0000-00-00','0000-00-00',0,1,'p',0,0,0,'',1,'b','php,php3,php4,php5,phtml,exe,pl,cgi,html,htm,js',0,1,1,1,5,0,2,0,0,0,NULL,0,0,0,'Continue','Previous',NULL,NULL,'Untitled Page',3),(11022,14,'当您计划购买下一辆车时, 您愿意考虑哪种类型的车?\n定义：传统型内燃机车是一种只由内燃机驱动的汽车，燃料主要包括汽油，柴油，液化石油气，压缩天然气等； 混合动力汽车是一种结合使用传统内燃机和电动机作为动力源的汽车； 插电式混合动力汽车是一种可由外部电源充电的混合动力车； 纯电动汽车是一种只由可充电电池组提供动力的电动汽车。','','medium',1,0,0,'radio',2,'','',0,'',0,0,'c',1,1,1,'其它 ',0,0,0,0,0,'0000-00-00','0000-00-00',0,1,'p',0,0,0,'',1,'b','php,php3,php4,php5,phtml,exe,pl,cgi,html,htm,js',0,1,1,1,5,0,2,0,0,0,NULL,0,0,0,'Continue','Previous',NULL,NULL,NULL,2),(11022,15,'当您购买一辆传统型内燃机汽车时，你更喜欢采用哪种消费方式？*\n租赁汽车：购置税, 车船使用税，交通事故强制保险, 常规保险（包括四项常规保险：车损险、第三者责任险、全车盗抢险和不计免赔特约险）均由租赁公司承担；维修保养费包含在租赁费中，在租赁期间，如不出交通事故，用户除租金外只需支付油费。租赁费用较高，但对用户来说比较方便。在欧洲每年约20%的新车为租赁使用，用户主要为公司。','','medium',1,0,0,'radio',10,'','',0,'',0,0,'c',1,1,1,'其他',0,0,0,0,0,'0000-00-00','0000-00-00',0,1,'p',0,0,0,'',1,'b','php,php3,php4,php5,phtml,exe,pl,cgi,html,htm,js',0,1,1,1,5,0,2,0,0,0,NULL,0,0,0,'Continue','Previous',NULL,NULL,NULL,6),(11022,16,'您更可能购买哪种类型的汽车作为您的下一辆车（包括第一辆车）？\n定义：传统型内燃机车是一种只由内燃机驱动的汽车，燃料主要包括汽油，柴油，液化石油气，压缩天然气等； 混合动力汽车是一种结合使用传统内燃机和电动机作为动力源的汽车； 插电式混合动力汽车是一种可由外部电源充电的混合动力车； 纯电动汽车是一种只由可充电电池组提供动力的电动汽车。','','medium',1,0,0,'radio',4,'','',0,'',0,0,'c',1,1,1,'其他',0,0,0,0,0,'0000-00-00','0000-00-00',0,1,'p',0,0,0,'',1,'b','php,php3,php4,php5,phtml,exe,pl,cgi,html,htm,js',0,1,1,1,5,0,2,0,0,0,NULL,0,0,0,'Continue','Previous',NULL,NULL,NULL,3),(11022,18,'您计划将何时购买您的下一辆车？','','medium',1,0,0,'select',6,'','',0,'',0,0,'c',1,1,0,NULL,0,0,0,0,0,'0000-00-00','0000-00-00',0,1,'p',0,0,0,'',1,'b','php,php3,php4,php5,phtml,exe,pl,cgi,html,htm,js',0,1,1,1,5,0,2,0,0,0,NULL,0,0,0,'Continue','Previous',NULL,NULL,NULL,4),(11022,19,'如果您已经拥有了一辆传统型内燃机汽车，设想您计划购买第二辆车,您将更愿意选择哪种类型的汽车？','','medium',1,0,0,'radio',8,'','',0,'',0,0,'c',1,1,1,'其他',0,0,0,0,0,'0000-00-00','0000-00-00',0,1,'p',0,0,0,'',1,'b','php,php3,php4,php5,phtml,exe,pl,cgi,html,htm,js',0,1,1,1,5,0,2,0,0,0,NULL,0,0,0,'Continue','Previous',NULL,NULL,NULL,5),(11022,20,'当您购买一辆电动车或混合型电动车时，你更喜欢采用哪种消费方式？*\n租赁汽车：购置税, 车船使用税，交通事故强制保险, 常规保险（包括四项常规保险：车损险、第三者责任险、全车盗抢险和不计免赔特约险）均由租赁公司承担；维修保养费包含在租赁费中，用户除租金外只需支付电费和油费。 由于电动汽车技术尚未成熟，潜在用户对其了解不多，加之价格很高，对电动车感兴趣的用户来说，也许电动汽车租赁是在电动汽车市场初始阶段的不错选择。','','medium',1,0,0,'radio',12,'','',0,'',0,0,'c',1,1,1,'其他',0,0,0,0,0,'0000-00-00','0000-00-00',0,1,'p',0,0,0,'',1,'b','php,php3,php4,php5,phtml,exe,pl,cgi,html,htm,js',0,1,1,1,5,0,2,0,0,0,NULL,0,0,0,'Continue','Previous',NULL,NULL,NULL,7),(11022,21,'假设你选择租赁使用一辆纯电动汽车，您希望租赁期限为多久？','','medium',1,0,0,'radio',14,'','',0,'',0,0,'c',1,1,1,'其他',0,0,0,0,0,'0000-00-00','0000-00-00',0,1,'p',0,0,0,'',1,'b','php,php3,php4,php5,phtml,exe,pl,cgi,html,htm,js',0,1,1,1,5,0,2,0,0,0,NULL,0,0,0,'Continue','Previous',NULL,NULL,NULL,8),(11022,22,'假设您选择租赁使用一辆日产聆风电动汽车（在中国尚未销售），您愿意每月支付多少租金？请输入人民币:\n一辆与日产聆风尺寸相近的日产骐达传统燃油汽车，以综合路况下的平均油耗为7.3L/100km，每月行驶1500公里，93号汽油价格7.92元计算，平均每月用车成本开支（包括燃油费+车险+车船税+保养费）约需人民币1400元。如果您平时驾车，可与您的座驾的使用成本进行比较','','small',1,0,0,'text',16,'','yen',0,'',0,0,'c',1,1,0,NULL,0,0,0,0,0,'0000-00-00','0000-00-00',0,1,'p',0,0,0,'',1,'b','php,php3,php4,php5,phtml,exe,pl,cgi,html,htm,js',0,1,1,1,5,0,2,0,0,0,NULL,0,0,0,'Continue','Previous',NULL,NULL,NULL,9),(11022,23,'当油价涨到何等价位时，您可能会考虑购买电动汽车？','','medium',1,0,0,'radio',18,'','',0,'',0,0,'c',1,1,1,'其他',0,0,0,0,0,'0000-00-00','0000-00-00',0,1,'p',0,0,0,'',1,'b','php,php3,php4,php5,phtml,exe,pl,cgi,html,htm,js',0,1,1,1,5,0,2,0,0,0,NULL,0,0,0,'Continue','Previous',NULL,NULL,NULL,10),(11892,1,'Multiple Choice','','medium',0,0,0,'radio',0,'','',0,'',0,0,'c',1,1,0,'Other',0,0,0,0,0,'0000-00-00','0000-00-00',0,1,'p',0,0,0,'',1,'b','php,php3,php4,php5,phtml,exe,pl,cgi,html,htm,js',0,1,1,1,5,0,2,0,0,0,NULL,0,0,0,'Continue','Previous',NULL,NULL,NULL,1),(11892,2,'你的爱好','','medium',0,0,0,'radio',2,'','',0,'',0,0,'c',1,1,0,'Other',0,0,0,0,0,'0000-00-00','0000-00-00',0,1,'p',0,0,0,'',1,'b','php,php3,php4,php5,phtml,exe,pl,cgi,html,htm,js',0,1,1,1,5,0,2,0,0,0,NULL,0,0,0,'Continue','Previous',NULL,NULL,NULL,2),(11892,3,'Page Break','','medium',0,0,0,'page_break',1,'','',0,'',0,0,'c',1,1,0,NULL,0,0,0,0,0,'0000-00-00','0000-00-00',0,1,'p',0,0,0,'',1,'b','php,php3,php4,php5,phtml,exe,pl,cgi,html,htm,js',0,1,1,1,5,0,2,0,0,0,NULL,0,0,0,'Continue','Previous',NULL,NULL,'Untitled Page',1),(12465,1,'您是如何得知本次汽车安全巡展信息的？（可多选）','','medium',0,0,0,'radio',0,'','',0,'',0,0,'c',0,1,0,'Other',0,0,0,0,0,'0000-00-00','0000-00-00',0,1,'p',0,0,0,'',1,'b','php,php3,php4,php5,phtml,exe,pl,cgi,html,htm,js',0,1,1,1,5,0,2,0,0,0,NULL,0,0,0,'Continue','Previous',NULL,NULL,NULL,1),(12465,4,'Page Break','','medium',0,0,0,'page_break',1,'','',0,'',0,0,'c',1,1,0,NULL,0,0,0,0,0,'0000-00-00','0000-00-00',0,1,'p',0,0,0,'',1,'b','php,php3,php4,php5,phtml,exe,pl,cgi,html,htm,js',0,1,1,1,5,0,2,0,0,0,NULL,0,0,0,'Continue','Previous',NULL,NULL,'Untitled Page',1),(12465,7,'您购买汽车的用途是？（可多选）','','medium',0,0,0,'checkbox',4,'','',0,'',0,0,'c',1,1,1,'其他',0,0,0,0,0,'0000-00-00','0000-00-00',0,1,'p',0,0,0,'',1,'b','php,php3,php4,php5,phtml,exe,pl,cgi,html,htm,js',0,1,1,1,5,0,2,0,0,0,NULL,0,0,0,'Continue','Previous',NULL,NULL,NULL,3),(12465,6,'Page Break','','medium',0,0,0,'page_break',3,'','',0,'',0,0,'c',1,1,0,NULL,0,0,0,0,0,'0000-00-00','0000-00-00',0,1,'p',0,0,0,'',1,'b','php,php3,php4,php5,phtml,exe,pl,cgi,html,htm,js',0,1,1,1,5,0,2,0,0,0,NULL,0,0,0,'Continue','Previous',NULL,NULL,'Untitled Page',2),(12465,2,'您计划在未来多长时间内购车？','','medium',0,0,0,'radio',2,'','',0,'',0,0,'c',1,1,0,'Other',0,0,0,0,0,'0000-00-00','0000-00-00',0,1,'p',0,0,0,'',1,'b','php,php3,php4,php5,phtml,exe,pl,cgi,html,htm,js',0,1,1,1,5,0,2,0,0,0,NULL,0,0,0,'Continue','Previous',NULL,NULL,NULL,2),(12465,3,'您是如何得知本次汽车安全巡展信息的？（可多选）','','medium',0,0,0,'checkbox',0,'','',0,'',0,0,'c',1,1,0,'Other',0,0,0,0,0,'0000-00-00','0000-00-00',0,1,'p',0,0,0,'',1,'b','php,php3,php4,php5,phtml,exe,pl,cgi,html,htm,js',0,1,1,1,5,0,2,0,0,0,NULL,0,0,0,'Continue','Previous',NULL,NULL,NULL,1),(12465,8,'您如果购买了汽车，平时上下班每天需要行驶多少里程（来回）？预计多长时间？','','medium',0,0,0,'radio',6,'','',0,'',0,0,'c',1,1,0,'Other',0,0,0,0,0,'0000-00-00','0000-00-00',0,1,'p',0,0,0,'',1,'b','php,php3,php4,php5,phtml,exe,pl,cgi,html,htm,js',0,1,1,1,5,0,2,0,0,0,NULL,0,0,0,'Continue','Previous',NULL,NULL,NULL,4),(12465,9,'Page Break','','medium',0,0,0,'page_break',5,'','',0,'',0,0,'c',1,1,0,NULL,0,0,0,0,0,'0000-00-00','0000-00-00',0,1,'p',0,0,0,'',1,'b','php,php3,php4,php5,phtml,exe,pl,cgi,html,htm,js',0,1,1,1,5,0,2,0,0,0,NULL,0,0,0,'Continue','Previous',NULL,NULL,'Untitled Page',3),(12465,10,'根据目前本市的交通情况，预计平时单程上下班的时间为__________分钟','','small',1,0,0,'number',7,'请输入分钟数','',0,'',0,0,'c',1,1,0,NULL,0,0,0,0,0,'0000-00-00','0000-00-00',0,1,'p',0,0,0,'',1,'b','php,php3,php4,php5,phtml,exe,pl,cgi,html,htm,js',0,1,1,1,5,0,2,0,0,0,NULL,0,0,0,'Continue','Previous',NULL,NULL,NULL,4),(12465,13,'您购车时最看重车辆的哪些因素？（可多选，最多不超过3项）','','medium',0,0,0,'checkbox',9,'','',0,'',0,0,'c',1,1,0,'Other',0,0,0,0,0,'0000-00-00','0000-00-00',0,1,'p',0,0,0,'',1,'b','php,php3,php4,php5,phtml,exe,pl,cgi,html,htm,js',0,1,1,1,5,0,2,0,0,0,NULL,0,0,0,'Continue','Previous',NULL,NULL,NULL,5),(12465,12,'Page Break','','medium',0,0,0,'page_break',8,'','',0,'',0,0,'c',1,1,0,NULL,0,0,0,0,0,'0000-00-00','0000-00-00',0,1,'p',0,0,0,'',1,'b','php,php3,php4,php5,phtml,exe,pl,cgi,html,htm,js',0,1,1,1,5,0,2,0,0,0,NULL,0,0,0,'下一题','上一题',NULL,NULL,'Untitled Page',4),(12465,22,'性别','','medium',1,0,0,'radio',14,'','',0,'',0,0,'c',1,9,0,'Other',0,0,0,0,0,'0000-00-00','0000-00-00',0,1,'p',0,0,0,'',1,'b','php,php3,php4,php5,phtml,exe,pl,cgi,html,htm,js',0,1,1,1,5,0,2,0,0,0,NULL,0,0,0,'Continue','Previous',NULL,NULL,NULL,6),(12465,15,'Page Break','','medium',0,0,0,'page_break',10,'','',0,'',0,0,'c',1,1,0,NULL,0,0,0,0,0,'0000-00-00','0000-00-00',0,1,'p',0,0,0,'',1,'b','php,php3,php4,php5,phtml,exe,pl,cgi,html,htm,js',0,1,1,1,5,0,2,0,0,0,NULL,0,0,0,'Continue','Previous',NULL,NULL,'Untitled Page',5),(12465,20,'姓名','','small',1,0,0,'text',12,'','',0,'',0,0,'c',1,1,0,NULL,0,0,0,0,0,'0000-00-00','0000-00-00',0,1,'p',0,0,0,'',1,'b','php,php3,php4,php5,phtml,exe,pl,cgi,html,htm,js',0,1,1,1,5,0,2,0,0,0,NULL,0,0,0,'Continue','Previous',NULL,NULL,NULL,6),(12465,23,'所在城市','','medium',1,0,0,'text',15,'','',0,'',0,0,'c',1,1,0,NULL,0,0,0,0,0,'0000-00-00','0000-00-00',0,1,'p',0,0,0,'',1,'b','php,php3,php4,php5,phtml,exe,pl,cgi,html,htm,js',0,1,1,1,5,0,2,0,0,0,NULL,0,0,0,'Continue','Previous',NULL,NULL,NULL,6),(12465,21,'年龄','','small',1,0,0,'number',13,'','',0,'',0,0,'d',1,1,0,NULL,0,0,0,0,0,'0000-00-00','0000-00-00',0,1,'p',0,0,0,'',1,'b','php,php3,php4,php5,phtml,exe,pl,cgi,html,htm,js',0,1,1,1,5,0,2,0,0,0,NULL,0,0,0,'Continue','Previous',NULL,NULL,NULL,6),(12465,19,'请输入您的个人信息','您的手机号将是您领取奖品的唯一有效凭证，请仔细填写','medium',0,0,0,'section',11,'','',0,'',0,0,'c',1,1,0,NULL,0,0,0,0,0,'0000-00-00','0000-00-00',0,1,'p',0,0,0,'',1,'b','php,php3,php4,php5,phtml,exe,pl,cgi,html,htm,js',0,1,1,1,5,0,2,0,0,0,NULL,0,0,0,'Continue','Previous',NULL,NULL,NULL,6),(12465,24,'手机','','medium',1,0,0,'number',16,'','',0,'',0,0,'c',1,1,0,NULL,0,0,0,0,0,'0000-00-00','0000-00-00',0,1,'p',0,0,0,'',1,'b','php,php3,php4,php5,phtml,exe,pl,cgi,html,htm,js',0,1,1,1,5,0,2,0,0,0,NULL,0,0,0,'Continue','Previous',NULL,NULL,NULL,6),(12465,25,'QQ','','medium',0,0,0,'text',17,'','',0,'',0,0,'c',1,1,0,NULL,0,0,0,0,0,'0000-00-00','0000-00-00',0,1,'p',0,0,0,'',1,'b','php,php3,php4,php5,phtml,exe,pl,cgi,html,htm,js',0,1,1,1,5,0,2,0,0,0,NULL,0,0,0,'Continue','Previous',NULL,NULL,NULL,6),(12465,26,'是否有私家车','','medium',1,0,0,'radio',18,'','',0,'',0,0,'c',1,9,0,'Other',0,0,0,0,0,'0000-00-00','0000-00-00',0,1,'p',0,0,0,'',1,'b','php,php3,php4,php5,phtml,exe,pl,cgi,html,htm,js',0,1,1,1,5,0,2,0,0,0,NULL,0,0,0,'Continue','Previous',NULL,NULL,NULL,6);

UNLOCK TABLES;

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

LOCK TABLES `ap_form_filters` WRITE;

UNLOCK TABLES;

/*Table structure for table `ap_form_locks` */

DROP TABLE IF EXISTS `ap_form_locks`;

CREATE TABLE `ap_form_locks` (
  `form_id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `lock_date` datetime NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

/*Data for the table `ap_form_locks` */

LOCK TABLES `ap_form_locks` WRITE;

insert  into `ap_form_locks`(`form_id`,`user_id`,`lock_date`) values (10392,2,'2015-04-25 22:04:34'),(12465,2,'2015-04-28 10:42:36');

UNLOCK TABLES;

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
) ENGINE=MyISAM AUTO_INCREMENT=2 DEFAULT CHARSET=utf8;

/*Data for the table `ap_form_payments` */

LOCK TABLES `ap_form_payments` WRITE;

UNLOCK TABLES;

/*Table structure for table `ap_form_sorts` */

DROP TABLE IF EXISTS `ap_form_sorts`;

CREATE TABLE `ap_form_sorts` (
  `user_id` int(11) NOT NULL,
  `sort_by` varchar(25) default '',
  PRIMARY KEY  (`user_id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

/*Data for the table `ap_form_sorts` */

LOCK TABLES `ap_form_sorts` WRITE;

UNLOCK TABLES;

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

LOCK TABLES `ap_form_themes` WRITE;

insert  into `ap_form_themes`(`theme_id`,`user_id`,`status`,`theme_has_css`,`theme_name`,`theme_built_in`,`theme_is_private`,`logo_type`,`logo_custom_image`,`logo_custom_height`,`logo_default_image`,`logo_default_repeat`,`wallpaper_bg_type`,`wallpaper_bg_color`,`wallpaper_bg_pattern`,`wallpaper_bg_custom`,`header_bg_type`,`header_bg_color`,`header_bg_pattern`,`header_bg_custom`,`form_bg_type`,`form_bg_color`,`form_bg_pattern`,`form_bg_custom`,`highlight_bg_type`,`highlight_bg_color`,`highlight_bg_pattern`,`highlight_bg_custom`,`guidelines_bg_type`,`guidelines_bg_color`,`guidelines_bg_pattern`,`guidelines_bg_custom`,`field_bg_type`,`field_bg_color`,`field_bg_pattern`,`field_bg_custom`,`form_title_font_type`,`form_title_font_weight`,`form_title_font_style`,`form_title_font_size`,`form_title_font_color`,`form_desc_font_type`,`form_desc_font_weight`,`form_desc_font_style`,`form_desc_font_size`,`form_desc_font_color`,`field_title_font_type`,`field_title_font_weight`,`field_title_font_style`,`field_title_font_size`,`field_title_font_color`,`guidelines_font_type`,`guidelines_font_weight`,`guidelines_font_style`,`guidelines_font_size`,`guidelines_font_color`,`section_title_font_type`,`section_title_font_weight`,`section_title_font_style`,`section_title_font_size`,`section_title_font_color`,`section_desc_font_type`,`section_desc_font_weight`,`section_desc_font_style`,`section_desc_font_size`,`section_desc_font_color`,`field_text_font_type`,`field_text_font_weight`,`field_text_font_style`,`field_text_font_size`,`field_text_font_color`,`border_form_width`,`border_form_style`,`border_form_color`,`border_guidelines_width`,`border_guidelines_style`,`border_guidelines_color`,`border_section_width`,`border_section_style`,`border_section_color`,`form_shadow_style`,`form_shadow_size`,`form_shadow_brightness`,`form_button_type`,`form_button_text`,`form_button_image`,`advanced_css`) values (1,1,1,0,'Green Senegal',1,1,'default','http://',40,'machform.png',0,'color','#cfdfc5','','','color','#bad4a9','','','color','#ffffff','','','color','#ecf1ea','','','color','#ecf1ea','','','color','#cfdfc5','','','Philosopher',700,'normal','','#80af1b','Philosopher',400,'normal','100%','#80af1b','Philosopher',700,'normal','110%','#80af1b','Ubuntu',400,'normal','','#666666','Philosopher',700,'normal','110%','#80af1b','Philosopher',400,'normal','95%','#80af1b','Ubuntu',400,'normal','','#666666',1,'solid','#bad4a9',1,'dashed','#bad4a9',1,'dotted','#CCCCCC','WarpShadow','large','normal','text','Submit','http://',''),(2,1,1,0,'Blue Bigbird',1,1,'default','http://',40,'machform.png',0,'color','#336699','','','color','#6699cc','','','color','#ffffff','','','color','#ccdced','','','color','#6699cc','','','color','#ffffff','','','Open Sans',600,'normal','','','Open Sans',400,'normal','','','Open Sans',700,'normal','100%','','Ubuntu',400,'normal','80%','#ffffff','Open Sans',600,'normal','','','Open Sans',400,'normal','95%','','Open Sans',400,'normal','','',1,'solid','#336699',1,'dotted','#6699cc',1,'dotted','#CCCCCC','WarpShadow','large','normal','text','Submit','http://',''),(3,1,1,0,'Blue Pionus',1,1,'default','http://',40,'machform.png',0,'color','#556270','','','color','#6b7b8c','','','color','#ffffff','','','color','#99aec4','','','color','#6b7b8c','','','color','#ffffff','','','Istok Web',400,'normal','170%','','Maven Pro',400,'normal','100%','','Istok Web',700,'normal','100%','','Maven Pro',400,'normal','95%','#ffffff','Istok Web',400,'normal','110%','','Maven Pro',400,'normal','95%','','Maven Pro',400,'normal','','',1,'solid','#556270',1,'solid','#6b7b8c',1,'dotted','#CCCCCC','WarpShadow','large','normal','text','Submit','http://',''),(4,1,1,0,'Brown Conure',1,1,'default','http://',40,'machform.png',0,'pattern','#948c75','pattern_036.gif','','color','#b3a783','','','color','#ffffff','','','color','#e0d0a2','','','color','#948c75','','','color','#f0f0d8','pattern_036.gif','','Molengo',400,'normal','170%','','Molengo',400,'normal','110%','','Molengo',400,'normal','110%','','Nobile',400,'normal','','#ececec','Molengo',400,'normal','130%','','Molengo',400,'normal','100%','','Molengo',400,'normal','110%','',1,'solid','#948c75',1,'solid','#948c75',1,'dotted','#CCCCCC','WarpShadow','large','normal','text','Submit','http://',''),(5,1,1,0,'Yellow Lovebird',1,1,'default','http://',40,'machform.png',0,'color','#f0d878','','','color','#edb817','','','color','#ffffff','','','color','#f5d678','','','color','#f7c52e','','','color','#ffffff','','','Amaranth',700,'normal','170%','','Amaranth',400,'normal','100%','','Amaranth',700,'normal','100%','','Amaranth',400,'normal','','#444444','Amaranth',400,'normal','110%','','Amaranth',400,'normal','95%','','Amaranth',400,'normal','100%','',1,'solid','#f0d878',1,'solid','#f7c52e',1,'dotted','#CCCCCC','WarpShadow','large','normal','text','Submit','http://',''),(6,1,1,0,'Pink Starling',1,1,'default','http://',40,'machform.png',0,'color','#ff6699','','','color','#d93280','','','color','#ffffff','','','color','#ffd0d4','','','color','#f9fad2','','','color','#ffffff','','','Josefin Sans',600,'normal','160%','','Josefin Sans',400,'normal','110%','','Josefin Sans',700,'normal','110%','','Josefin Sans',600,'normal','100%','','Josefin Sans',700,'normal','','','Josefin Sans',400,'normal','110%','','Josefin Sans',400,'normal','130%','',1,'solid','#ff6699',1,'dashed','#f56990',1,'dotted','#CCCCCC','WarpShadow','large','normal','text','Submit','http://',''),(8,1,1,0,'Red Rabbit',1,1,'default','http://',40,'machform.png',0,'color','#a40802','','','color','#800e0e','','','color','#ffffff','','','color','#ffa4a0','','','color','#800e0e','','','color','#ffffff','','','Lobster',400,'normal','','#000000','Ubuntu',400,'normal','100%','#000000','Lobster',400,'normal','110%','#222222','Ubuntu',400,'normal','85%','#ffffff','Lobster',400,'normal','130%','#000000','Ubuntu',400,'normal','95%','#000000','Ubuntu',400,'normal','','#333333',1,'solid','#a40702',1,'solid','#800e0e',1,'dotted','#CCCCCC','WarpShadow','large','normal','text','Submit','http://',''),(9,1,1,0,'Orange Robin',1,1,'default','http://',40,'machform.png',0,'color','#f38430','','','color','#fa6800','','','color','#ffffff','','','color','#a7dbd8','','','color','#e0e4cc','','','color','#ffffff','','','Lucida Grande',400,'normal','','#000000','Nobile',400,'normal','','#000000','Nobile',700,'normal','','#000000','Lucida Grande',400,'normal','','#444444','Nobile',700,'normal','100%','#000000','Nobile',400,'normal','','#000000','Nobile',400,'normal','95%','#333333',1,'solid','#f38430',1,'solid','#e0e4cc',1,'dotted','#CCCCCC','WarpShadow','large','normal','text','Submit','http://',''),(10,1,1,0,'Orange Sunbird',1,1,'default','http://',40,'machform.png',0,'color','#d95c43','','','color','#c02942','','','color','#ffffff','','','color','#d95c43','','','color','#53777a','','','color','#ffffff','','','Lucida Grande',400,'normal','','#000000','Lucida Grande',400,'normal','','#000000','Lucida Grande',700,'normal','','#222222','Lucida Grande',400,'normal','','#ffffff','Lucida Grande',400,'normal','','#000000','Lucida Grande',400,'normal','','#000000','Lucida Grande',400,'normal','','#333333',1,'solid','#d95c43',1,'solid','#53777a',1,'dotted','#CCCCCC','WarpShadow','large','normal','text','Submit','http://',''),(11,1,1,0,'Green Ringneck',1,1,'default','http://',40,'machform.png',0,'color','#0b486b','','','color','#3b8686','','','color','#ffffff','','','color','#cff09e','','','color','#79bd9a','','','color','#a8dba8','','','Delius Swash Caps',400,'normal','','#000000','Delius Swash Caps',400,'normal','100%','#000000','Delius Swash Caps',400,'normal','100%','#222222','Delius',400,'normal','85%','#ffffff','Delius Swash Caps',400,'normal','','#000000','Delius Swash Caps',400,'normal','95%','#000000','Delius',400,'normal','','#515151',1,'solid','#0b486b',1,'solid','#79bd9a',1,'dotted','#CCCCCC','WarpShadow','large','normal','text','Submit','http://',''),(12,1,1,0,'Brown Finch',1,1,'default','http://',40,'machform.png',0,'color','#774f38','','','color','#e08e79','','','color','#ffffff','','','color','#ece5ce','','','color','#c5e0dc','','','color','#f9fad2','','','Arvo',700,'normal','','#000000','Arvo',400,'normal','','#000000','Arvo',700,'normal','','#222222','Arvo',400,'normal','','#444444','Arvo',400,'normal','','#000000','Arvo',400,'normal','85%','#000000','Arvo',400,'normal','','#333333',1,'solid','#774f38',1,'dashed','#e08e79',1,'dotted','#CCCCCC','WarpShadow','large','normal','text','Submit','http://',''),(14,1,1,0,'Brown Macaw',1,1,'default','http://',40,'machform.png',0,'color','#413e4a','','','color','#73626e','','','pattern','#ffffff','pattern_022.gif','','color','#f0b49e','','','color','#b38184','','','color','#ffffff','','','Cabin',500,'normal','160%','#000000','Cabin',400,'normal','100%','#000000','Cabin',700,'normal','110%','#222222','Lucida Grande',400,'normal','','#ececec','Cabin',600,'normal','','#000000','Cabin',600,'normal','95%','#000000','Cabin',400,'normal','110%','#333333',1,'solid','#413e4a',1,'dotted','#ff9900',1,'dotted','#CCCCCC','WarpShadow','large','normal','text','Submit','http://',''),(15,1,1,0,'Pink Thrush',1,1,'default','http://',40,'machform.png',0,'color','#ff9f9d','','','color','#ff3d7e','','','color','#ffffff','','','color','#7fc7af','','','color','#3fb8b0','','','color','#ffffff','','','Crafty Girls',400,'normal','','#000000','Crafty Girls',400,'normal','100%','#000000','Crafty Girls',400,'normal','100%','#222222','Nobile',400,'normal','80%','#ffffff','Crafty Girls',400,'normal','','#000000','Crafty Girls',400,'normal','95%','#000000','Molengo',400,'normal','110%','#333333',1,'solid','#ff9f9d',1,'solid','#3fb8b0',1,'dotted','#CCCCCC','WarpShadow','large','normal','text','Submit','http://',''),(16,1,1,0,'Yellow Bulbul',1,1,'default','http://',40,'machform.png',0,'color','#f8f4d7','','','color','#f4b26c','','','color','#f4dec2','','','color','#f2b4a7','','','color','#e98976','','','color','#ffffff','','','Special Elite',400,'normal','','#000000','Special Elite',400,'normal','','#000000','Special Elite',400,'normal','95%','#222222','Cousine',400,'normal','80%','#ececec','Special Elite',400,'normal','','#000000','Special Elite',400,'normal','','#000000','Cousine',400,'normal','','#333333',1,'solid','#f8f4d7',1,'solid','#f4b26c',1,'dotted','#CCCCCC','WarpShadow','large','normal','text','Submit','http://',''),(17,1,1,0,'Blue Canary',1,1,'default','http://',40,'machform.png',0,'color','#81a8b8','','','color','#a4bcc2','','','color','#ffffff','','','color','#e8f3f8','','','color','#dbe6ec','','','color','#ffffff','','','PT Sans',400,'normal','','#000000','PT Sans',400,'normal','100%','#000000','PT Sans',700,'normal','100%','#222222','PT Sans',400,'normal','','#666666','PT Sans',700,'normal','','#000000','PT Sans',400,'normal','100%','#000000','PT Sans',400,'normal','110%','#333333',1,'solid','#81a8b8',1,'dashed','#a4bcc2',1,'dotted','#CCCCCC','WarpShadow','large','normal','text','Submit','http://',''),(18,1,1,0,'Red Mockingbird',1,1,'default','http://',40,'machform.png',0,'color','#6b0103','','','color','#a30005','','','color','#c21b01','','','color','#f03d02','','','color','#1c0113','','','color','#ffffff','','','Oswald',400,'normal','','#ffffff','Open Sans',400,'normal','','#ffffff','Oswald',400,'normal','95%','#ffffff','Open Sans',400,'normal','','#ececec','Oswald',400,'normal','','#ececec','Lucida Grande',400,'normal','','#ffffff','Open Sans',400,'normal','','#333333',1,'solid','#6b0103',1,'solid','#1c0113',1,'dotted','#CCCCCC','WarpShadow','large','normal','text','Submit','http://',''),(13,1,1,0,'Green Sparrow',1,1,'default','http://',40,'machform.png',0,'color','#d1f2a5','','','color','#f56990','','','color','#ffffff','','','color','#ffc48c','','','color','#ffa080','','','color','#ffffff','','','Open Sans',400,'normal','','#000000','Open Sans',400,'normal','','#000000','Open Sans',700,'normal','','#222222','Ubuntu',400,'normal','85%','#f4fce8','Open Sans',600,'normal','','#000000','Open Sans',400,'normal','95%','#000000','Open Sans',400,'normal','','#333333',10,'solid','#f0fab4',1,'solid','#ffa080',1,'dotted','#CCCCCC','WarpShadow','large','normal','text','Submit','http://',''),(21,1,1,0,'Purple Vanga',1,1,'default','http://',40,'machform.png',0,'color','#7b85e2','','','color','#7aa6d6','','','color','#d1e7f9','','','color','#7aa6d6','','','color','#fbfcd0','','','color','#ffffff','','','Droid Sans',400,'normal','160%','#444444','Droid Sans',400,'normal','95%','#444444','Open Sans',700,'normal','95%','#444444','Droid Sans',400,'normal','85%','#444444','Droid Sans',400,'normal','110%','#444444','Droid Sans',400,'normal','95%','#000000','Droid Sans',400,'normal','100%','#333333',0,'solid','#CCCCCC',1,'solid','#fbfcd0',1,'dotted','#CCCCCC','WarpShadow','large','normal','text','Submit','http://',''),(22,1,1,0,'Purple Dove',1,1,'default','http://',40,'machform.png',0,'color','#c0addb','','','color','#a662de','','','pattern','#ffffff','pattern_044.gif','','color','#a662de','','','color','#a662de','','','color','#c0addb','','','Pacifico',400,'normal','180%','#000000','Open Sans',400,'normal','95%','#000000','Pacifico',400,'normal','95%','#222222','Open Sans',400,'normal','80%','#ececec','Pacifico',400,'normal','110%','#000000','Open Sans',400,'normal','95%','#000000','Open Sans',400,'normal','100%','#333333',0,'solid','#a662de',1,'dashed','#CCCCCC',1,'dashed','#a662de','StandShadow','large','dark','text','Submit','http://',''),(20,1,1,0,'Pink Flamingo',1,1,'default','http://',40,'machform.png',0,'color','#f87d7b','','','color','#5ea0a3','','','color','#ffffff','','','color','#fab97f','','','color','#dcd1b4','','','color','#ffffff','','','Lucida Grande',400,'normal','160%','#b05573','Lucida Grande',400,'normal','95%','#b05573','Lucida Grande',700,'normal','95%','#b05573','Lucida Grande',400,'normal','80%','#444444','Lucida Grande',400,'normal','110%','#b05573','Lucida Grande',400,'normal','85%','#b05573','Lucida Grande',400,'normal','100%','#333333',0,'solid','#f87d7b',1,'dotted','#fab97f',1,'dotted','#CCCCCC','WarpShadow','large','normal','text','Submit','http://',''),(19,1,1,0,'Yellow Kiwi',1,1,'default','http://',40,'machform.png',0,'color','#ffe281','','','color','#ffbb7f','','','color','#eee9e5','','','color','#fad4b2','','','color','#ff9c97','','','color','#ffffff','','','Lucida Grande',400,'normal','160%','#000000','Lucida Grande',400,'normal','95%','#000000','Lucida Grande',700,'normal','95%','#222222','Lucida Grande',400,'normal','80%','#ffffff','Lucida Grande',400,'normal','110%','#000000','Lucida Grande',400,'normal','85%','#000000','Lucida Grande',400,'normal','100%','#333333',1,'solid','#ffe281',1,'solid','#CCCCCC',1,'dotted','#cdcdcd','WarpShadow','large','normal','text','Submit','http://',''),(23,2,1,1,'会晤',0,1,'default','http://',36,'machform.png',0,'color','#ffffff','','','color','#ffffff','','','color','#ffffff','','','color','#ccdced','','','color','#6699cc','','','color','#ffffff','','','Open Sans',600,'normal','','','Open Sans',400,'normal','','','Open Sans',700,'normal','100%','','Ubuntu',400,'normal','80%','#ffffff','Open Sans',600,'normal','','','Open Sans',400,'normal','95%','','Open Sans',400,'normal','','',1,'solid','#336699',1,'dotted','#6699cc',1,'dotted','#CCCCCC','WarpShadow','large','normal','text','提交','http://','');

UNLOCK TABLES;

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
) ENGINE=MyISAM AUTO_INCREMENT=12466 DEFAULT CHARSET=utf8;

/*Data for the table `ap_forms` */

LOCK TABLES `ap_forms` WRITE;

insert  into `ap_forms`(`form_id`,`form_name`,`form_description`,`form_tags`,`form_email`,`form_redirect`,`form_redirect_enable`,`form_success_message`,`form_disabled_message`,`form_password`,`form_unique_ip`,`form_frame_height`,`form_has_css`,`form_captcha`,`form_captcha_type`,`form_active`,`form_theme_id`,`form_review`,`form_resume_enable`,`form_limit_enable`,`form_limit`,`form_label_alignment`,`form_language`,`form_page_total`,`form_lastpage_title`,`form_submit_primary_text`,`form_submit_secondary_text`,`form_submit_primary_img`,`form_submit_secondary_img`,`form_submit_use_image`,`form_review_primary_text`,`form_review_secondary_text`,`form_review_primary_img`,`form_review_secondary_img`,`form_review_use_image`,`form_review_title`,`form_review_description`,`form_pagination_type`,`form_schedule_enable`,`form_schedule_start_date`,`form_schedule_end_date`,`form_schedule_start_hour`,`form_schedule_end_hour`,`esl_enable`,`esl_from_name`,`esl_from_email_address`,`esl_subject`,`esl_content`,`esl_plain_text`,`esr_enable`,`esr_email_address`,`esr_from_name`,`esr_from_email_address`,`esr_subject`,`esr_content`,`esr_plain_text`,`payment_enable_merchant`,`payment_merchant_type`,`payment_paypal_email`,`payment_paypal_language`,`payment_currency`,`payment_show_total`,`payment_total_location`,`payment_enable_recurring`,`payment_recurring_cycle`,`payment_recurring_unit`,`payment_enable_trial`,`payment_trial_period`,`payment_trial_unit`,`payment_trial_amount`,`payment_price_type`,`payment_price_amount`,`payment_price_name`,`payment_stripe_live_secret_key`,`payment_stripe_live_public_key`,`payment_stripe_test_secret_key`,`payment_stripe_test_public_key`,`payment_stripe_enable_test_mode`,`payment_paypal_enable_test_mode`,`payment_enable_invoice`,`payment_invoice_email`,`payment_delay_notifications`,`payment_ask_billing`,`payment_ask_shipping`,`payment_enable_tax`,`payment_tax_rate`,`logic_field_enable`,`logic_page_enable`,`logic_email_enable`) values (10392,'慈善拇指','动动手指 参与慈善事业',NULL,NULL,'',0,'试题全部答完了！<br>点击此处<a href=\'/wap\'>回到首页！</a>',NULL,'',0,3207,1,0,'r',1,23,0,0,0,0,'top_label','chinese',10,'','提交','上一题',NULL,NULL,0,'Submit','Previous','','',0,'Review Your Entry','Please review your entry below. Click Submit button to finish.','percentage',0,'0000-00-00','0000-00-00','00:00:00','00:00:00',0,NULL,NULL,NULL,NULL,0,0,NULL,NULL,NULL,NULL,NULL,0,1,'check','','CN','JPY',1,'top',0,1,'month',0,1,'month','0.00','variable','100.00','慈善拇指 Fee','','','','',0,0,0,NULL,1,0,0,0,'0.00',0,0,0),(10825,'慈善拇指 Copy','动动手指 参与慈善事业',NULL,NULL,'',0,'Success! Your submission has been saved!',NULL,'',0,465,1,0,'r',9,2,0,0,0,0,'top_label','english',1,'Untitled Page','Submit','Previous','','',0,'Submit','Previous','','',0,'Review Your Entry','Please review your entry below. Click Submit button to finish.','steps',0,'0000-00-00','0000-00-00','00:00:00','00:00:00',0,NULL,NULL,NULL,NULL,0,0,NULL,NULL,NULL,NULL,NULL,0,-1,'paypal_standard',NULL,'US','USD',0,'top',0,1,'month',0,1,'month','0.00','fixed','0.00',NULL,NULL,NULL,NULL,NULL,0,0,0,NULL,1,0,0,0,'0.00',0,0,0),(11022,'慈善拇指 Copy','动动手指 参与慈善事业',NULL,NULL,'',0,'Success! Your submission has been saved!',NULL,'',0,3207,1,0,'r',9,23,0,0,0,0,'top_label','english',10,'','Submit','Previous',NULL,NULL,0,'Submit','Previous','','',0,'Review Your Entry','Please review your entry below. Click Submit button to finish.','percentage',0,'0000-00-00','0000-00-00','00:00:00','00:00:00',0,NULL,NULL,NULL,NULL,0,0,NULL,NULL,NULL,NULL,NULL,0,0,'paypal_standard','','CN','USD',0,'top',0,1,'month',0,1,'month','0.00','fixed','0.00','慈善拇指 Fee','','','','',0,0,0,NULL,1,0,0,0,'0.00',0,0,0),(11892,'Form use userid','This is your form description. Click here to edit.',NULL,NULL,'',0,'Success! Your submission has been saved!',NULL,'',0,597,1,0,'r',1,0,1,0,0,0,'top_label','chinese',2,'Untitled Page','Continue','Previous',NULL,NULL,0,'提交','前一题','','',0,'Review Your Entry','Please review your entry below. Click Submit button to finish.','steps',0,'0000-00-00','0000-00-00','00:00:00','00:00:00',0,NULL,NULL,NULL,NULL,0,0,NULL,NULL,NULL,NULL,NULL,0,1,'check','','CN','JPY',1,'bottom',0,1,'month',0,1,'month','0.00','variable','10.00','Form use userid Fee','','','','',0,0,0,NULL,1,0,0,0,'0.00',0,0,0),(12465,'答问卷，拿大奖','2015年（第八届）中国汽车安全主题巡展调查问卷',NULL,NULL,'submit.php',1,'谢谢您的参与，您的号码xxxx将参加hh:mm的抽奖',NULL,'',0,2580,1,0,'r',1,0,0,0,0,0,'top_label','chinese',6,'Untitled Page','Submit','Previous',NULL,NULL,0,'Submit','Previous','','',0,'Review Your Entry','Please review your entry below. Click Submit button to finish.','percentage',0,'0000-00-00','0000-00-00','00:00:00','00:00:00',0,NULL,NULL,NULL,NULL,0,0,NULL,NULL,NULL,NULL,NULL,0,0,'paypal_standard',NULL,'US','USD',0,'top',0,1,'month',0,1,'month','0.00','fixed','0.00',NULL,NULL,NULL,NULL,NULL,0,0,0,NULL,1,0,0,0,'0.00',0,0,0);

UNLOCK TABLES;

/*Table structure for table `ap_page_logic` */

DROP TABLE IF EXISTS `ap_page_logic`;

CREATE TABLE `ap_page_logic` (
  `form_id` int(11) NOT NULL,
  `page_id` varchar(15) NOT NULL default '',
  `rule_all_any` varchar(3) NOT NULL default 'all',
  PRIMARY KEY  (`form_id`,`page_id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

/*Data for the table `ap_page_logic` */

LOCK TABLES `ap_page_logic` WRITE;

UNLOCK TABLES;

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

LOCK TABLES `ap_page_logic_conditions` WRITE;

UNLOCK TABLES;

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

LOCK TABLES `ap_permissions` WRITE;

insert  into `ap_permissions`(`form_id`,`user_id`,`edit_form`,`edit_entries`,`view_entries`) values (10392,1,1,1,1),(12465,2,1,1,1),(11892,2,1,1,1);

UNLOCK TABLES;

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

LOCK TABLES `ap_settings` WRITE;

insert  into `ap_settings`(`id`,`smtp_enable`,`smtp_host`,`smtp_port`,`smtp_auth`,`smtp_username`,`smtp_password`,`smtp_secure`,`upload_dir`,`data_dir`,`default_from_name`,`default_from_email`,`base_url`,`form_manager_max_rows`,`admin_image_url`,`disable_machform_link`,`machform_version`,`admin_theme`) values (1,0,'localhost',25,0,'','',0,'./data','./data','MachForm111','no-reply@diaocha.yc','./',1,'',1,'3.5','blue');

UNLOCK TABLES;

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

LOCK TABLES `ap_users` WRITE;

insert  into `ap_users`(`user_id`,`user_email`,`user_password`,`user_fullname`,`priv_administer`,`priv_new_forms`,`priv_new_themes`,`last_login_date`,`last_ip_address`,`cookie_hash`,`status`) values (1,'ycyn521@qq.com','$2a$08$XztiKMA8iEr1Pb2jPHh.q.ZRZlQTTpKGfOtY1HsgiX71QQFWHR0Bi','Administrator',1,1,1,'2014-11-15 22:18:16','127.0.0.1','',1),(2,'admin@qq.com','$2a$08$5NNwksCfUchdw9cxxpFc4.bIt2j35CMp9aM.7L3VYO2MAn9Y5b7ki','admin',1,1,1,'2015-04-28 10:22:15','127.0.0.1','',1);

UNLOCK TABLES;

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;
