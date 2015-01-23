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
  `is_success` int(1) default '0' COMMENT '是否邀请成功',
  `type` int(1) default NULL COMMENT '1：低权重 2：高权重',
  PRIMARY KEY  (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=104 DEFAULT CHARSET=latin1;

/*Data for the table `shouqibucuo` */

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;
