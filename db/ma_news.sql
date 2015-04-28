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
) ENGINE=MyISAM AUTO_INCREMENT=181 DEFAULT CHARSET=utf8;

/*Data for the table `ma_news` */

LOCK TABLES `ma_news` WRITE;

insert  into `ma_news`(`id`,`cid`,`tid`,`title`,`des`,`keyword`,`from`,`author`,`editor`,`content`,`mapurl`,`telephone`,`hj`,`tc`,`yj`,`fw`,`zk`,`ts`,`ispic`,`picurl`,`hits`,`htop`,`ctop`,`hhdp`,`isok`,`mtime`,`creattime`) values (174,65,0,'幻灯一 注：图片像素为 768*276','这里写标题',NULL,NULL,NULL,NULL,'<p style=\"text-align:center;\">\r\n	标题\r\n</p>\r\n<p>\r\n	幻灯一幻灯一幻灯一幻灯一幻灯一幻灯一幻灯一幻灯一内容\r\n</p>',NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,0,'/ma/attached/image/20150427/20150427101806_15776.jpg',0,0,0,0,1,'0000-00-00 00:00:00','2015-04-27 09:43:20'),(175,65,0,'幻灯二 注：图片像素为 768*276','标题',NULL,NULL,NULL,NULL,'内容',NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,0,'/AD/images/2.jpg',0,0,0,0,1,'0000-00-00 00:00:00','2015-04-27 09:55:16'),(176,65,0,'幻灯三 注：图片像素为 768*276','标题',NULL,NULL,NULL,NULL,'内容',NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,0,'/AD/images/3.jpg',0,0,0,0,1,'0000-00-00 00:00:00','2015-04-27 09:55:45'),(177,66,0,'神秘优惠一~~~','神秘优惠一~~~',NULL,NULL,NULL,NULL,'神秘优惠一',NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,0,'',0,0,0,0,1,'0000-00-00 00:00:00','2015-04-27 09:58:01'),(178,66,0,'神秘优惠二','神秘优惠一',NULL,NULL,NULL,NULL,'神秘优惠一',NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,0,'',0,0,0,0,1,'0000-00-00 00:00:00','2015-04-27 09:58:17'),(179,66,0,'神秘优惠三','神秘优惠三',NULL,NULL,NULL,NULL,'神秘优惠三',NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,0,'',0,0,0,0,1,'0000-00-00 00:00:00','2015-04-27 09:58:42'),(180,66,0,'神秘优惠四','神秘优惠四',NULL,NULL,NULL,NULL,'神秘优惠四',NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,0,'',0,0,0,0,1,'0000-00-00 00:00:00','2015-04-27 09:59:05');

UNLOCK TABLES;

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;
