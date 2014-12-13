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
/*Table structure for table `ma_product` */

DROP TABLE IF EXISTS `ma_product`;

CREATE TABLE `ma_product` (
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
  `price` int(11) default '0',
  `jifen` int(11) default '0',
  `isok` int(11) default '1',
  `mtime` datetime default '0000-00-00 00:00:00',
  `creattime` datetime default NULL,
  PRIMARY KEY  (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=175 DEFAULT CHARSET=utf8;

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;
