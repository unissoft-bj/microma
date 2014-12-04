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
  `captcha` varchar(10) default NULL,
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
) ENGINE=MyISAM AUTO_INCREMENT=42 DEFAULT CHARSET=utf8;

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;
