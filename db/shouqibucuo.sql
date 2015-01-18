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
CREATE DATABASE /*!32312 IF NOT EXISTS*/`ihost-ma` /*!40100 DEFAULT CHARACTER SET latin1 */;

USE `ihost-ma`;

/*Table structure for table `shouqibucuo` */

DROP TABLE IF EXISTS `shouqibucuo`;

CREATE TABLE `shouqibucuo` (
  `id` int(11) NOT NULL auto_increment,
  `salesperson_userid` varchar(50) default NULL COMMENT '销售员uuid',
  `client_mac` varchar(50) default NULL COMMENT '客户mac',
  `client_userid` varchar(50) default NULL COMMENT '客户uuid',
  `invite_code` varchar(10) default NULL COMMENT '邀请码',
  `client_code` varchar(10) default NULL COMMENT '普通100、意向200，成交300',
  `client_points` int(10) default NULL COMMENT '客户积分券',
  `client_integral` int(10) default NULL COMMENT '客户积分',
  `rectime` datetime default NULL,
  `is_success` int(1) default '0',
  PRIMARY KEY  (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=83 DEFAULT CHARSET=latin1;

/*Data for the table `shouqibucuo` */

insert  into `shouqibucuo`(`id`,`salesperson_userid`,`client_mac`,`client_userid`,`invite_code`,`client_code`,`client_points`,`client_integral`,`rectime`,`is_success`) values (80,'58c2b5df-bf03-8e76-92a3-680adf1248b2','asdf',NULL,'600317','200',NULL,NULL,'2015-01-18 23:03:10',1),(81,'58c2b5df-bf03-8e76-92a3-680adf1248b2','999','58c2b5df-bf03-8e76-92a3-680adf1248b2','317089',NULL,NULL,NULL,'2015-01-18 23:11:07',1),(82,'58c2b5df-bf03-8e76-92a3-680adf1248b2','999','58c2b5df-bf03-8e76-92a3-680adf1248b2','405886','300',NULL,NULL,'2015-01-19 00:02:54',1);

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;
