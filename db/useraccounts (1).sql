-- phpMyAdmin SQL Dump
-- version 3.3.7
-- http://www.phpmyadmin.net
--
-- 主机: localhost
-- 生成日期: 2014 年 10 月 20 日 20:39
-- 服务器版本: 5.0.90
-- PHP 版本: 5.3.5

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- 数据库: `ihost-ma`
--

-- --------------------------------------------------------

--
-- 表的结构 `useraccounts`
--

DROP TABLE IF EXISTS `useraccounts`;
CREATE TABLE IF NOT EXISTS `useraccounts` (
  `id` int(30) NOT NULL auto_increment,
  `userid` varchar(30) default NULL,
  `srcid` varchar(30) default NULL,
  `token` int(10) default NULL,
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
  `usertype` varchar(10) default NULL,
  `integral` int(10) default NULL,
  `byear` smallint(3) default NULL,
  `bmonth` smallint(3) default NULL,
  `bday` smallint(3) default NULL,
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
  `danwei` varchar(60) default NULL,
  `zhiwu` varchar(36) default NULL,
  `shenfen` varchar(36) default NULL,
  PRIMARY KEY  (`id`),
  KEY `userid` (`userid`),
  KEY `phone` (`phone`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 AUTO_INCREMENT=27 ;

--
-- 转存表中的数据 `useraccounts`
--

INSERT INTO `useraccounts` (`id`, `userid`, `srcid`, `token`, `srcnode`, `usercode`, `mac`, `userpass`, `useremail1`, `useremail2`, `question`, `answer`, `fname`, `lname`, `usertype`, `integral`, `byear`, `bmonth`, `bday`, `gender`, `occup`, `orgn`, `title`, `cid`, `ctype`, `regphone`, `phone`, `address`, `location`, `action`, `stat`, `open1`, `open2`, `check`, `memo`, `srcip`, `sender`, `netid`, `progid`, `intid`, `updtime`, `rectime`, `danwei`, `zhiwu`, `shenfen`) VALUES
(1, NULL, NULL, NULL, NULL, NULL, '', NULL, NULL, NULL, NULL, NULL, NULL, 'yangchao', '1', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '100', '100', '100', '100', NULL, NULL, NULL, NULL, NULL, '2', NULL, NULL, '', '', '代表'),
(2, NULL, NULL, NULL, NULL, NULL, 'qqq', NULL, NULL, NULL, NULL, NULL, NULL, 'yc', '1', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '100', '100', '100', '100', NULL, NULL, NULL, NULL, NULL, '3', NULL, NULL, '', '', '代表'),
(3, NULL, NULL, NULL, NULL, NULL, 'qqq', NULL, NULL, NULL, NULL, NULL, NULL, 'erer', '1', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '100', '100', '100', '100', NULL, NULL, NULL, NULL, NULL, '4', NULL, NULL, '', '', '代表'),
(4, NULL, NULL, NULL, NULL, NULL, 'qqq', NULL, NULL, NULL, NULL, NULL, NULL, 'wewewewe', '1', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '100', '100', '100', '100', NULL, NULL, NULL, NULL, NULL, '5', NULL, NULL, '', '', '代表'),
(5, '5', NULL, NULL, NULL, NULL, 'qqq', NULL, NULL, NULL, NULL, NULL, NULL, '杨超', '1', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '13653361207', NULL, NULL, NULL, '100', '100', '100', '100', NULL, NULL, NULL, NULL, NULL, '6', NULL, NULL, '', '', '代表'),
(6, '6', NULL, NULL, NULL, NULL, 'qqq', NULL, NULL, NULL, NULL, NULL, NULL, 'zhangsan', '1', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '100', '100', '100', '100', NULL, NULL, NULL, NULL, NULL, '7', NULL, NULL, '', '', '代表'),
(7, '7', NULL, NULL, NULL, NULL, 'qqq', NULL, NULL, NULL, NULL, NULL, NULL, '张三', '1', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '13653361207', NULL, NULL, NULL, '100', '100', '100', '100', NULL, NULL, NULL, NULL, NULL, '8', NULL, NULL, '', '', '代表'),
(8, '8', NULL, NULL, NULL, NULL, 'aaa', NULL, NULL, NULL, NULL, NULL, NULL, '张三', '1', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '13333333333', NULL, NULL, NULL, '100', '100', '100', '100', NULL, NULL, NULL, NULL, NULL, '9', NULL, NULL, '', '', '代表'),
(9, '9', NULL, NULL, NULL, NULL, 'aaa', NULL, NULL, NULL, NULL, NULL, NULL, '第三方的方式', '2', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '13333333333', '13653361207', NULL, NULL, NULL, '100', '100', '100', '100', NULL, NULL, NULL, NULL, NULL, '27', NULL, NULL, '', '', '代表'),
(10, '10', NULL, NULL, NULL, NULL, 'aaa', NULL, NULL, NULL, NULL, NULL, NULL, '王五', '1', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '13653361207', NULL, NULL, NULL, '100', '100', '100', '100', NULL, NULL, NULL, NULL, NULL, '11', NULL, NULL, '', '', '代表'),
(11, '11', NULL, NULL, NULL, NULL, 'aaa', NULL, NULL, NULL, NULL, NULL, NULL, '马六', '1', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '18888888888', NULL, NULL, NULL, '100', '100', '100', '100', NULL, NULL, NULL, NULL, NULL, '12', NULL, NULL, '', '', '代表'),
(12, '12', NULL, NULL, NULL, NULL, 'aaa', NULL, NULL, NULL, NULL, NULL, NULL, '马六去', '1', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '18888888888', NULL, NULL, NULL, '100', '100', '100', '100', NULL, NULL, NULL, NULL, NULL, '13', NULL, NULL, '', '', '代表'),
(13, '13', NULL, NULL, NULL, NULL, 'aaa', NULL, NULL, NULL, NULL, NULL, NULL, '张三丰', '1', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '13333333333', NULL, NULL, NULL, '100', '100', '100', '100', NULL, NULL, NULL, NULL, NULL, '14', NULL, NULL, '', '', '代表'),
(14, '14', NULL, NULL, NULL, NULL, 'aaa', NULL, NULL, NULL, NULL, NULL, NULL, '张无忌', '1', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '13653361207', NULL, NULL, NULL, '100', '100', '100', '100', NULL, NULL, NULL, NULL, NULL, '15', NULL, NULL, '', '', '代表'),
(15, '15', NULL, NULL, NULL, NULL, 'aaa', NULL, NULL, NULL, NULL, NULL, NULL, '武则天', '1', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '13653361207', NULL, NULL, NULL, '100', '100', '100', '100', NULL, NULL, NULL, NULL, NULL, '16', NULL, NULL, '', '', '代表'),
(16, '16', NULL, NULL, NULL, NULL, 'aaa', NULL, NULL, NULL, NULL, NULL, NULL, '孙悟空', '1', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '13653361207', NULL, NULL, NULL, '100', '100', '100', '100', NULL, NULL, NULL, NULL, NULL, '17', NULL, NULL, '', '', '代表'),
(17, '17', NULL, NULL, NULL, NULL, 'aaa', NULL, NULL, NULL, NULL, NULL, NULL, '猪八戒', '1', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '13653361207', NULL, NULL, NULL, '100', '100', '100', '100', NULL, NULL, NULL, NULL, NULL, '18', NULL, NULL, '', '', '代表'),
(18, '18', NULL, NULL, NULL, NULL, 'aaa', NULL, NULL, NULL, NULL, NULL, NULL, '牛魔王', '1', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '13333333333', NULL, NULL, NULL, '100', '100', '100', '100', NULL, NULL, NULL, NULL, NULL, '19', NULL, NULL, '', '', '代表'),
(19, '19', NULL, NULL, NULL, NULL, 'aaa', NULL, NULL, NULL, NULL, NULL, NULL, '红孩儿', '1', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '13653361207', NULL, NULL, NULL, '100', '100', '100', '100', NULL, NULL, NULL, NULL, NULL, '20', NULL, NULL, '', '', '代表'),
(20, '20', NULL, NULL, NULL, NULL, 'aaa', NULL, NULL, NULL, NULL, NULL, NULL, '如来佛', '1', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '13653361207', NULL, NULL, NULL, '100', '100', '100', '100', NULL, NULL, NULL, NULL, NULL, '21', NULL, NULL, '', '', '代表'),
(21, '21', NULL, NULL, NULL, NULL, 'aaa', NULL, NULL, NULL, NULL, NULL, NULL, '关羽', '1', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '13653361207', NULL, NULL, NULL, '100', '100', '100', '100', NULL, NULL, NULL, NULL, NULL, '22', NULL, NULL, '', '', '代表'),
(22, '22', NULL, NULL, NULL, NULL, 'aaa', NULL, NULL, NULL, NULL, NULL, NULL, '乔布斯', '1', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '13653361207', NULL, NULL, NULL, '100', '100', '100', '100', NULL, NULL, NULL, NULL, NULL, '23', NULL, NULL, '', '', '代表'),
(23, '23', NULL, NULL, NULL, NULL, 'aaa', NULL, NULL, NULL, NULL, NULL, NULL, '太扯淡了', '1', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '13653361207', NULL, NULL, NULL, '100', '100', '100', '100', NULL, NULL, NULL, NULL, NULL, '24', NULL, NULL, '', '', '代表'),
(24, '24', NULL, NULL, NULL, NULL, 'aaa', NULL, NULL, NULL, NULL, NULL, NULL, '让我过了吧', '1', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '13653361207', NULL, NULL, NULL, '100', '100', '100', '100', NULL, NULL, NULL, NULL, NULL, '25', NULL, NULL, '', '', '代表'),
(25, '25', NULL, NULL, NULL, NULL, 'aaa', NULL, NULL, NULL, NULL, NULL, NULL, '再不过马上奔溃', '1', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '13653361207', NULL, NULL, NULL, '100', '100', '100', '100', NULL, NULL, NULL, NULL, NULL, '26', NULL, NULL, '', '', '代表'),
(26, '26', NULL, NULL, NULL, NULL, 'aaa', NULL, NULL, NULL, NULL, NULL, NULL, '企业啦啦', '2', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '1212', '13653361207', NULL, NULL, NULL, '100', '100', '100', '100', NULL, NULL, NULL, NULL, NULL, '28', NULL, NULL, 'danwei', 'zhiwu', '代表');
