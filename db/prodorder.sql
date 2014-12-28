## ----------------------------
## Table structure for prodorder
## ----------------------------
DROP TABLE IF EXISTS `prodorder`;	#	products to be deliveried to user
CREATE TABLE `prodorder` (	#	
  `id` int NOT NULL AUTO_INCREMENT,	#	
  `userid` varchar(36) DEFAULT NULL,	#
  `username` varchar(36) DEFAULT NULL,	#	username	
  `srcid` int DEFAULT NULL,	#	iserver field
  `prodcode` varchar(10) DEFAULT NULL,	#	product code
  `prodname` varchar(36) DEFAULT NULL,	#	product name
  `prodtype` varchar(36) DEFAULT NULL,	#	product type 
  `prodspec` varchar(36) DEFAULT NULL,	#	product specification
  `proddesp` varchar(36) DEFAULT NULL,	#	product description
  `recipaddr` varchar(128) DEFAULT NULL,	#	recipient address
  `recipname` varchar(36) DEFAULT NULL,	#	recipient name
  `recipphone1` varchar(30) DEFAULT NULL,	#	recipient phone number #1
  `recipphone2` varchar(30) DEFAULT NULL,	#	recipient phone number #2
  `recipemail` varchar(64) DEFAULT NULL,	#	recipient phone email
  `assignto` varchar(64) DEFAULT NULL,	#	processor of the order: iserver/local
  `delicode` varchar(36) DEFAULT NULL,	#	delivery code (link to delivery table)
  `delidesp` varchar(128) DEFAULT NULL,	#	delivery description
  `delimemo` varchar(128) DEFAULT NULL,	#	delivery memo
  `srcip` varchar(64) DEFAULT NULL,	#	iserver field
  `sender` varchar(36) DEFAULT NULL, 	#	iserver field
  `netid` varchar(36) DEFAULT NULL, 	#	iserver field
  `progid` varchar(36) DEFAULT NULL, 	#	iserver field
  `updtime` datetime DEFAULT NULL,	#	record updated time
  `rectime` datetime DEFAULT NULL,	#	record created time
  `pushflag` smallint DEFAULT '1',
  PRIMARY KEY (`id`),	#	
  KEY `userid` (`userid`),	#	
  KEY `prodcode` (`prodcode`),	#	
  KEY `delicode` (`delicode`)
) ENGINE=MyISAM AUTO_INCREMENT=1 DEFAULT CHARSET=utf8;	