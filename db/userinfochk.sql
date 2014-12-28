## ----------------------------
## Table structure for userinfochk
## ----------------------------
DROP TABLE IF EXISTS `userinfochk`;
CREATE TABLE `userinfochk` (
  `id` INT NOT NULL AUTO_INCREMENT, 
  `obj` VARCHAR(64) DEFAULT NULL,  # 规则所针对的对象，如userid,或者mac
  `useraction` VARCHAR(64) DEFAULT NULL, #  规则所针对的情景: 如积分兑换彩票时 integral2lottery
  `pagename` VARCHAR(64) DEFAULT NULL, #  针对哪个页面有效(reserved)
  `cnd` VARCHAR(64) DEFAULT NULL, # 规则生效的其他条件 (reserved)
  `info` VARCHAR(32) DEFAULT NULL, # 所针对的信息内容，如cid代表身份证号+姓名
  `op` VARCHAR(16) DEFAULT NULL, # 操作符，如: 100-forced强制, 200-recommended建议
  `action` VARCHAR(16) DEFAULT NULL, # , 规则所要求的操作，如: 100-fill填充, 200-update更新
  `stat` VARCHAR(3) DEFAULT '100',	#	status 100-valid
  `rectime` DATETIME DEFAULT NULL, 
  PRIMARY KEY (`id`),
  KEY `obj` (`obj`)
) ENGINE=MYISAM AUTO_INCREMENT=1 DEFAULT CHARSET=utf8;
