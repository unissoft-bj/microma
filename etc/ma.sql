 

SET FOREIGN_KEY_CHECKS=0;

-- ----------------------------
-- Table structure for `ma_question`
-- ----------------------------
DROP TABLE IF EXISTS `ma_question`;
CREATE TABLE `ma_question` (
  `qid` int(11) NOT NULL AUTO_INCREMENT,
  `question` varchar(255) DEFAULT NULL,
  `tid` int(11) DEFAULT NULL,
  `count` int(11) DEFAULT '0',
  PRIMARY KEY (`qid`)
) ENGINE=MyISAM AUTO_INCREMENT=583 DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of ma_question
-- ----------------------------
INSERT INTO `ma_question` VALUES ('233', '县级干部', '30', '1');
INSERT INTO `ma_question` VALUES ('234', '乡科级干部', '30', '116');
INSERT INTO `ma_question` VALUES ('235', '党代表', '30', '16');
INSERT INTO `ma_question` VALUES ('236', '人大代表', '30', '12');
INSERT INTO `ma_question` VALUES ('237', '政协委员', '30', '19');
INSERT INTO `ma_question` VALUES ('238', '村党组织书记', '30', '11');
INSERT INTO `ma_question` VALUES ('239', '企业负责人', '30', '4');
INSERT INTO `ma_question` VALUES ('240', '离退休老干部', '30', '6');
INSERT INTO `ma_question` VALUES ('241', '基层群众', '30', '36');
INSERT INTO `ma_question` VALUES ('242', '党外人士', '30', '8');
INSERT INTO `ma_question` VALUES ('243', '其他', '30', '43');
INSERT INTO `ma_question` VALUES ('244', '县级机关', '31', '15');
INSERT INTO `ma_question` VALUES ('245', '县直单位', '31', '164');
INSERT INTO `ma_question` VALUES ('246', '乡镇', '31', '51');
INSERT INTO `ma_question` VALUES ('247', '村、社区', '31', '22');
INSERT INTO `ma_question` VALUES ('248', '非公有制经济组织和社会组织', '31', '4');
INSERT INTO `ma_question` VALUES ('249', '其他', '31', '15');
INSERT INTO `ma_question` VALUES ('250', '好', '32', '231');
INSERT INTO `ma_question` VALUES ('251', '较好', '32', '31');
INSERT INTO `ma_question` VALUES ('252', '一般', '32', '7');
INSERT INTO `ma_question` VALUES ('253', '较差', '32', '1');
INSERT INTO `ma_question` VALUES ('254', '认识不够，思想上“不以为然”', '33', '4');
INSERT INTO `ma_question` VALUES ('255', '落实不力，执行不到位', '33', '17');
INSERT INTO `ma_question` VALUES ('256', '查处不严，查而不处，处不问责', '33', '9');
INSERT INTO `ma_question` VALUES ('257', '制度不全，预防、查处、问责等配套机制不够', '33', '12');
INSERT INTO `ma_question` VALUES ('258', '以上都不存在', '33', '240');
INSERT INTO `ma_question` VALUES ('259', '形式主义', '34', '137');
INSERT INTO `ma_question` VALUES ('260', '官僚主义', '34', '17');
INSERT INTO `ma_question` VALUES ('261', '享乐主义', '34', '7');
INSERT INTO `ma_question` VALUES ('262', '奢靡之风', '34', '4');
INSERT INTO `ma_question` VALUES ('263', '政绩观不正确，发展观有偏差', '35', '13');
INSERT INTO `ma_question` VALUES ('264', '工作漂浮，措施不硬', '35', '8');
INSERT INTO `ma_question` VALUES ('265', '学风不浓，以干代学，不注重学用结合', '35', '15');
INSERT INTO `ma_question` VALUES ('266', '急功近利，不从实际出发，做表面文章', '35', '25');
INSERT INTO `ma_question` VALUES ('267', '调研蜻蜓点水、走马观花', '35', '17');
INSERT INTO `ma_question` VALUES ('268', '以上都不存在', '35', '210');
INSERT INTO `ma_question` VALUES ('269', '高高在上，主观片面，脱离群众', '36', '14');
INSERT INTO `ma_question` VALUES ('270', '敷衍塞责、不负责任，不敢担当', '36', '12');
INSERT INTO `ma_question` VALUES ('271', '抓不住问题的关键，不解剖麻雀，贪大求全', '36', '8');
INSERT INTO `ma_question` VALUES ('272', '讲排场，摆阔气，迎来送往，前呼后拥', '36', '11');
INSERT INTO `ma_question` VALUES ('273', '递条子、打招呼、说情风', '36', '15');
INSERT INTO `ma_question` VALUES ('274', '以上都不存在', '36', '229');
INSERT INTO `ma_question` VALUES ('275', '贪图安逸、不思进取', '37', '7');
INSERT INTO `ma_question` VALUES ('276', '因循守旧、创新意识不强', '37', '15');
INSERT INTO `ma_question` VALUES ('277', '自由散漫、纪律松懈、玩风盛行', '37', '6');
INSERT INTO `ma_question` VALUES ('278', '超标准占房、配车、接待', '37', '17');
INSERT INTO `ma_question` VALUES ('279', '以上都不存在', '37', '228');
INSERT INTO `ma_question` VALUES ('280', '公款吃喝、铺张浪费', '38', '17');
INSERT INTO `ma_question` VALUES ('281', '巧立名目，挥霍公款', '38', '8');
INSERT INTO `ma_question` VALUES ('282', '大操大办、借机敛财', '38', '16');
INSERT INTO `ma_question` VALUES ('283', '日益骄横、腐化堕落', '38', '5');
INSERT INTO `ma_question` VALUES ('284', '以上都不存在', '38', '235');
INSERT INTO `ma_question` VALUES ('285', '党性原则淡化、理想信念缺失', '39', '20');
INSERT INTO `ma_question` VALUES ('286', '宗旨意识淡薄、联系群众不够', '39', '40');
INSERT INTO `ma_question` VALUES ('287', '放松自我要求、行为随波逐流', '39', '20');
INSERT INTO `ma_question` VALUES ('288', '纪律意识不强、执行党纪不严', '39', '17');
INSERT INTO `ma_question` VALUES ('289', '其他方面', '39', '122');
INSERT INTO `ma_question` VALUES ('290', '集中教育与日常工作“两张皮”', '40', '50');
INSERT INTO `ma_question` VALUES ('291', '搞形式主义、走过场', '40', '105');
INSERT INTO `ma_question` VALUES ('292', '不能解决党员群众关注的突出问题', '40', '59');
INSERT INTO `ma_question` VALUES ('293', '学习教育流于形式', '40', '62');
INSERT INTO `ma_question` VALUES ('294', '批评和自我批评流于形式', '40', '30');
INSERT INTO `ma_question` VALUES ('295', '整改落实流于形式', '40', '37');
INSERT INTO `ma_question` VALUES ('296', '活动出现偏差，影响团结稳定', '40', '34');
INSERT INTO `ma_question` VALUES ('297', '群众参与不够', '40', '106');
INSERT INTO `ma_question` VALUES ('298', '非常满意', '41', '153');
INSERT INTO `ma_question` VALUES ('299', '满意', '41', '78');
INSERT INTO `ma_question` VALUES ('300', '基本满意', '41', '37');
INSERT INTO `ma_question` VALUES ('301', '不满意', '41', '4');
INSERT INTO `ma_question` VALUES ('302', '走马观花，喜好不喜坏，不能了解真实情况', '42', '21');
INSERT INTO `ma_question` VALUES ('303', '搞形式主义，增加基层负担', '42', '14');
INSERT INTO `ma_question` VALUES ('304', '只听汇报，不接触群众', '42', '36');
INSERT INTO `ma_question` VALUES ('305', '指导工作不得要领，不负责任地乱表态', '42', '1');
INSERT INTO `ma_question` VALUES ('306', '其他方面', '42', '112');
INSERT INTO `ma_question` VALUES ('307', '请提出意见', '43', '0');
INSERT INTO `ma_question` VALUES ('308', '认识不够，思想上“不以为然”', '55', '16');
INSERT INTO `ma_question` VALUES ('309', '落实不力，执行不到位', '55', '15');
INSERT INTO `ma_question` VALUES ('310', '查处不严，查而不处，处不问责', '55', '9');
INSERT INTO `ma_question` VALUES ('311', '制度不全，预防、查处、问责等配套机制不够', '55', '12');
INSERT INTO `ma_question` VALUES ('312', '以上都不存在', '55', '53');
INSERT INTO `ma_question` VALUES ('336', '查处不严，查而不处，处不问责', '48', '0');
INSERT INTO `ma_question` VALUES ('335', '落实不力，执行不到位', '48', '8');
INSERT INTO `ma_question` VALUES ('334', '认识不够，思想上“不以为然”', '48', '3');
INSERT INTO `ma_question` VALUES ('333', '较差', '47', '0');
INSERT INTO `ma_question` VALUES ('332', '一般', '47', '4');
INSERT INTO `ma_question` VALUES ('331', '较好', '47', '15');
INSERT INTO `ma_question` VALUES ('330', '好', '47', '147');
INSERT INTO `ma_question` VALUES ('329', '其他', '46', '12');
INSERT INTO `ma_question` VALUES ('328', '非公有制经济组织和社会组织', '46', '1');
INSERT INTO `ma_question` VALUES ('327', '村、社区', '46', '16');
INSERT INTO `ma_question` VALUES ('326', '乡镇', '46', '37');
INSERT INTO `ma_question` VALUES ('325', '县直单位', '46', '94');
INSERT INTO `ma_question` VALUES ('324', '县级机关', '46', '8');
INSERT INTO `ma_question` VALUES ('323', '其他', '45', '26');
INSERT INTO `ma_question` VALUES ('322', '党外人士', '45', '3');
INSERT INTO `ma_question` VALUES ('321', '基层群众', '45', '18');
INSERT INTO `ma_question` VALUES ('320', '离退休老干部', '45', '6');
INSERT INTO `ma_question` VALUES ('319', '企业负责人', '45', '1');
INSERT INTO `ma_question` VALUES ('318', '村党组织书记', '45', '7');
INSERT INTO `ma_question` VALUES ('317', '政协委员', '45', '10');
INSERT INTO `ma_question` VALUES ('316', '人大代表', '45', '10');
INSERT INTO `ma_question` VALUES ('315', '党代表', '45', '12');
INSERT INTO `ma_question` VALUES ('314', '乡科级干部', '45', '72');
INSERT INTO `ma_question` VALUES ('313', '县级干部', '45', '2');
INSERT INTO `ma_question` VALUES ('337', '制度不全，预防、查处、问责等配套机制不够', '48', '6');
INSERT INTO `ma_question` VALUES ('338', '以上都不存在', '48', '152');
INSERT INTO `ma_question` VALUES ('339', '形式主义', '49', '70');
INSERT INTO `ma_question` VALUES ('340', '官僚主义', '49', '7');
INSERT INTO `ma_question` VALUES ('341', '享乐主义', '49', '1');
INSERT INTO `ma_question` VALUES ('342', '奢靡之风', '49', '1');
INSERT INTO `ma_question` VALUES ('343', '政绩观不正确，发展观有偏差', '50', '4');
INSERT INTO `ma_question` VALUES ('344', '工作漂浮，措施不硬', '50', '4');
INSERT INTO `ma_question` VALUES ('345', '学风不浓，以干代学，不注重学用结合', '50', '3');
INSERT INTO `ma_question` VALUES ('346', '急功近利，不从实际出发，做表面文章', '50', '10');
INSERT INTO `ma_question` VALUES ('347', '调研蜻蜓点水、走马观花', '50', '8');
INSERT INTO `ma_question` VALUES ('348', '以上都不存在', '50', '140');
INSERT INTO `ma_question` VALUES ('349', '高高在上，主观片面，脱离群众', '51', '5');
INSERT INTO `ma_question` VALUES ('350', '敷衍塞责、不负责任，不敢担当', '51', '3');
INSERT INTO `ma_question` VALUES ('351', '抓不住问题的关键，不解剖麻雀，贪大求全', '51', '4');
INSERT INTO `ma_question` VALUES ('352', '讲排场，摆阔气，迎来送往，前呼后拥', '51', '8');
INSERT INTO `ma_question` VALUES ('353', '递条子、打招呼、说情风', '51', '2');
INSERT INTO `ma_question` VALUES ('354', '以上都不存在', '51', '149');
INSERT INTO `ma_question` VALUES ('355', '贪图安逸、不思进取', '52', '4');
INSERT INTO `ma_question` VALUES ('356', '因循守旧、创新意识不强', '52', '9');
INSERT INTO `ma_question` VALUES ('357', '自由散漫、纪律松懈、玩风盛行', '52', '3');
INSERT INTO `ma_question` VALUES ('358', '超标准占房、配车、接待', '52', '7');
INSERT INTO `ma_question` VALUES ('359', '以上都不存在', '52', '145');
INSERT INTO `ma_question` VALUES ('360', '公款吃喝、铺张浪费', '53', '4');
INSERT INTO `ma_question` VALUES ('361', '巧立名目，挥霍公款', '53', '1');
INSERT INTO `ma_question` VALUES ('362', '大操大办、借机敛财', '53', '8');
INSERT INTO `ma_question` VALUES ('363', '日益骄横、腐化堕落', '53', '1');
INSERT INTO `ma_question` VALUES ('364', '以上都不存在', '53', '156');
INSERT INTO `ma_question` VALUES ('365', '党性原则淡化、理想信念缺失', '54', '8');
INSERT INTO `ma_question` VALUES ('366', '宗旨意识淡薄、联系群众不够', '54', '18');
INSERT INTO `ma_question` VALUES ('367', '放松自我要求、行为随波逐流', '54', '5');
INSERT INTO `ma_question` VALUES ('368', '纪律意识不强、执行党纪不严', '54', '7');
INSERT INTO `ma_question` VALUES ('369', '其他方面', '54', '72');
INSERT INTO `ma_question` VALUES ('370', '集中教育与日常工作“两张皮”', '55', '26');
INSERT INTO `ma_question` VALUES ('371', '搞形式主义、走过场', '55', '57');
INSERT INTO `ma_question` VALUES ('372', '不能解决党员群众关注的突出问题', '55', '27');
INSERT INTO `ma_question` VALUES ('373', '学习教育流于形式', '55', '26');
INSERT INTO `ma_question` VALUES ('374', '批评和自我批评流于形式', '55', '16');
INSERT INTO `ma_question` VALUES ('375', '整改落实流于形式', '55', '18');
INSERT INTO `ma_question` VALUES ('376', '活动出现偏差，影响团结稳定', '55', '14');
INSERT INTO `ma_question` VALUES ('377', '群众参与不够', '55', '40');
INSERT INTO `ma_question` VALUES ('378', '非常满意', '56', '104');
INSERT INTO `ma_question` VALUES ('379', '满意', '56', '45');
INSERT INTO `ma_question` VALUES ('380', '基本满意', '56', '15');
INSERT INTO `ma_question` VALUES ('381', '不满意', '56', '3');
INSERT INTO `ma_question` VALUES ('382', '走马观花，喜好不喜坏，不能了解真实情况', '57', '9');
INSERT INTO `ma_question` VALUES ('383', '搞形式主义，增加基层负担', '57', '2');
INSERT INTO `ma_question` VALUES ('384', '只听汇报，不接触群众', '57', '13');
INSERT INTO `ma_question` VALUES ('385', '指导工作不得要领，不负责任地乱表态', '57', '0');
INSERT INTO `ma_question` VALUES ('386', '其他方面', '57', '70');
INSERT INTO `ma_question` VALUES ('387', '请提出意见', '58', '0');
INSERT INTO `ma_question` VALUES ('388', '县级干部', '59', '1');
INSERT INTO `ma_question` VALUES ('389', '乡科级干部', '59', '70');
INSERT INTO `ma_question` VALUES ('390', '党代表', '59', '10');
INSERT INTO `ma_question` VALUES ('391', '人大代表', '59', '10');
INSERT INTO `ma_question` VALUES ('392', '政协委员', '59', '12');
INSERT INTO `ma_question` VALUES ('393', '村党组织书记', '59', '7');
INSERT INTO `ma_question` VALUES ('394', '企业负责人', '59', '1');
INSERT INTO `ma_question` VALUES ('395', '离退休老干部', '59', '4');
INSERT INTO `ma_question` VALUES ('396', '基层群众', '59', '21');
INSERT INTO `ma_question` VALUES ('397', '党外人士', '59', '7');
INSERT INTO `ma_question` VALUES ('398', '其他', '59', '27');
INSERT INTO `ma_question` VALUES ('399', '县级机关', '60', '8');
INSERT INTO `ma_question` VALUES ('400', '县直单位', '60', '97');
INSERT INTO `ma_question` VALUES ('401', '乡镇', '60', '38');
INSERT INTO `ma_question` VALUES ('402', '村、社区', '60', '14');
INSERT INTO `ma_question` VALUES ('403', '非公有制经济组织和社会组织', '60', '1');
INSERT INTO `ma_question` VALUES ('404', '其他', '60', '11');
INSERT INTO `ma_question` VALUES ('405', '好', '61', '139');
INSERT INTO `ma_question` VALUES ('406', '较好', '61', '28');
INSERT INTO `ma_question` VALUES ('407', '一般', '61', '2');
INSERT INTO `ma_question` VALUES ('408', '较差', '61', '1');
INSERT INTO `ma_question` VALUES ('409', '认识不够，思想上“不以为然”', '62', '2');
INSERT INTO `ma_question` VALUES ('410', '落实不力，执行不到位', '62', '12');
INSERT INTO `ma_question` VALUES ('411', '查处不严，查而不处，处不问责', '62', '6');
INSERT INTO `ma_question` VALUES ('412', '制度不全，预防、查处、问责等配套机制不够', '62', '6');
INSERT INTO `ma_question` VALUES ('413', '以上都不存在', '62', '150');
INSERT INTO `ma_question` VALUES ('414', '形式主义', '63', '70');
INSERT INTO `ma_question` VALUES ('415', '官僚主义', '63', '14');
INSERT INTO `ma_question` VALUES ('416', '享乐主义', '63', '4');
INSERT INTO `ma_question` VALUES ('417', '奢靡之风', '63', '2');
INSERT INTO `ma_question` VALUES ('418', '政绩观不正确，发展观有偏差', '64', '6');
INSERT INTO `ma_question` VALUES ('419', '工作漂浮，措施不硬', '64', '10');
INSERT INTO `ma_question` VALUES ('420', '学风不浓，以干代学，不注重学用结合', '64', '5');
INSERT INTO `ma_question` VALUES ('421', '急功近利，不从实际出发，做表面文章', '64', '16');
INSERT INTO `ma_question` VALUES ('422', '调研蜻蜓点水、走马观花', '64', '7');
INSERT INTO `ma_question` VALUES ('423', '以上都不存在', '64', '138');
INSERT INTO `ma_question` VALUES ('424', '高高在上，主观片面，脱离群众', '65', '9');
INSERT INTO `ma_question` VALUES ('425', '敷衍塞责、不负责任，不敢担当', '65', '5');
INSERT INTO `ma_question` VALUES ('426', '抓不住问题的关键，不解剖麻雀，贪大求全', '65', '5');
INSERT INTO `ma_question` VALUES ('427', '讲排场，摆阔气，迎来送往，前呼后拥', '65', '9');
INSERT INTO `ma_question` VALUES ('428', '递条子、打招呼、说情风', '65', '4');
INSERT INTO `ma_question` VALUES ('429', '以上都不存在', '65', '145');
INSERT INTO `ma_question` VALUES ('430', '贪图安逸、不思进取', '66', '8');
INSERT INTO `ma_question` VALUES ('431', '因循守旧、创新意识不强', '66', '9');
INSERT INTO `ma_question` VALUES ('432', '自由散漫、纪律松懈、玩风盛行', '66', '3');
INSERT INTO `ma_question` VALUES ('433', '超标准占房、配车、接待', '66', '14');
INSERT INTO `ma_question` VALUES ('434', '以上都不存在', '66', '142');
INSERT INTO `ma_question` VALUES ('435', '公款吃喝、铺张浪费', '67', '9');
INSERT INTO `ma_question` VALUES ('436', '巧立名目，挥霍公款', '67', '2');
INSERT INTO `ma_question` VALUES ('437', '大操大办、借机敛财', '67', '11');
INSERT INTO `ma_question` VALUES ('438', '日益骄横、腐化堕落', '67', '1');
INSERT INTO `ma_question` VALUES ('439', '以上都不存在', '67', '151');
INSERT INTO `ma_question` VALUES ('440', '党性原则淡化、理想信念缺失', '68', '11');
INSERT INTO `ma_question` VALUES ('441', '宗旨意识淡薄、联系群众不够', '68', '17');
INSERT INTO `ma_question` VALUES ('442', '放松自我要求、行为随波逐流', '68', '9');
INSERT INTO `ma_question` VALUES ('443', '纪律意识不强、执行党纪不严', '68', '7');
INSERT INTO `ma_question` VALUES ('444', '其他方面', '68', '70');
INSERT INTO `ma_question` VALUES ('445', '集中教育与日常工作“两张皮”', '69', '24');
INSERT INTO `ma_question` VALUES ('446', '搞形式主义、走过场', '69', '61');
INSERT INTO `ma_question` VALUES ('447', '不能解决党员群众关注的突出问题', '69', '33');
INSERT INTO `ma_question` VALUES ('448', '学习教育流于形式', '69', '40');
INSERT INTO `ma_question` VALUES ('449', '批评和自我批评流于形式', '69', '18');
INSERT INTO `ma_question` VALUES ('450', '整改落实流于形式', '69', '23');
INSERT INTO `ma_question` VALUES ('451', '活动出现偏差，影响团结稳定', '69', '21');
INSERT INTO `ma_question` VALUES ('452', '群众参与不够', '69', '54');
INSERT INTO `ma_question` VALUES ('453', '非常满意', '70', '105');
INSERT INTO `ma_question` VALUES ('454', '满意', '70', '44');
INSERT INTO `ma_question` VALUES ('455', '基本满意', '70', '19');
INSERT INTO `ma_question` VALUES ('456', '不满意', '70', '1');
INSERT INTO `ma_question` VALUES ('457', '走马观花，喜好不喜坏，不能了解真实情况', '71', '11');
INSERT INTO `ma_question` VALUES ('458', '搞形式主义，增加基层负担', '71', '6');
INSERT INTO `ma_question` VALUES ('459', '只听汇报，不接触群众', '71', '13');
INSERT INTO `ma_question` VALUES ('460', '指导工作不得要领，不负责任地乱表态', '71', '1');
INSERT INTO `ma_question` VALUES ('461', '其他方面', '71', '69');
INSERT INTO `ma_question` VALUES ('462', '请提出意见', '72', '0');
INSERT INTO `ma_question` VALUES ('463', '县级干部', '73', '1');
INSERT INTO `ma_question` VALUES ('464', '乡科级干部', '73', '70');
INSERT INTO `ma_question` VALUES ('465', '党代表', '73', '9');
INSERT INTO `ma_question` VALUES ('466', '人大代表', '73', '9');
INSERT INTO `ma_question` VALUES ('467', '政协委员', '73', '14');
INSERT INTO `ma_question` VALUES ('468', '村党组织书记', '73', '7');
INSERT INTO `ma_question` VALUES ('469', '企业负责人', '73', '2');
INSERT INTO `ma_question` VALUES ('470', '离退休老干部', '73', '5');
INSERT INTO `ma_question` VALUES ('471', '基层群众', '73', '17');
INSERT INTO `ma_question` VALUES ('472', '党外人士', '73', '5');
INSERT INTO `ma_question` VALUES ('473', '其他', '73', '24');
INSERT INTO `ma_question` VALUES ('474', '县级机关', '74', '7');
INSERT INTO `ma_question` VALUES ('475', '县直单位', '74', '90');
INSERT INTO `ma_question` VALUES ('476', '乡镇', '74', '33');
INSERT INTO `ma_question` VALUES ('477', '村、社区', '74', '16');
INSERT INTO `ma_question` VALUES ('478', '非公有制经济组织和社会组织', '74', '3');
INSERT INTO `ma_question` VALUES ('479', '其他', '74', '14');
INSERT INTO `ma_question` VALUES ('480', '好', '75', '141');
INSERT INTO `ma_question` VALUES ('481', '较好', '75', '21');
INSERT INTO `ma_question` VALUES ('482', '一般', '75', '1');
INSERT INTO `ma_question` VALUES ('483', '较差', '75', '0');
INSERT INTO `ma_question` VALUES ('484', '认识不够，思想上“不以为然”', '76', '5');
INSERT INTO `ma_question` VALUES ('485', '落实不力，执行不到位', '76', '9');
INSERT INTO `ma_question` VALUES ('486', '查处不严，查而不处，处不问责', '76', '1');
INSERT INTO `ma_question` VALUES ('487', '制度不全，预防、查处、问责等配套机制不够', '76', '2');
INSERT INTO `ma_question` VALUES ('488', '以上都不存在', '76', '147');
INSERT INTO `ma_question` VALUES ('489', '形式主义', '77', '67');
INSERT INTO `ma_question` VALUES ('490', '官僚主义', '77', '5');
INSERT INTO `ma_question` VALUES ('491', '享乐主义', '77', '1');
INSERT INTO `ma_question` VALUES ('492', '奢靡之风', '77', '0');
INSERT INTO `ma_question` VALUES ('493', '政绩观不正确，发展观有偏差', '78', '5');
INSERT INTO `ma_question` VALUES ('494', '工作漂浮，措施不硬', '78', '7');
INSERT INTO `ma_question` VALUES ('495', '学风不浓，以干代学，不注重学用结合', '78', '6');
INSERT INTO `ma_question` VALUES ('496', '急功近利，不从实际出发，做表面文章', '78', '6');
INSERT INTO `ma_question` VALUES ('497', '调研蜻蜓点水、走马观花', '78', '5');
INSERT INTO `ma_question` VALUES ('498', '以上都不存在', '78', '137');
INSERT INTO `ma_question` VALUES ('499', '高高在上，主观片面，脱离群众', '79', '7');
INSERT INTO `ma_question` VALUES ('500', '敷衍塞责、不负责任，不敢担当', '79', '5');
INSERT INTO `ma_question` VALUES ('501', '抓不住问题的关键，不解剖麻雀，贪大求全', '79', '4');
INSERT INTO `ma_question` VALUES ('502', '讲排场，摆阔气，迎来送往，前呼后拥', '79', '6');
INSERT INTO `ma_question` VALUES ('503', '递条子、打招呼、说情风', '79', '2');
INSERT INTO `ma_question` VALUES ('504', '以上都不存在', '79', '140');
INSERT INTO `ma_question` VALUES ('505', '贪图安逸、不思进取', '80', '6');
INSERT INTO `ma_question` VALUES ('506', '因循守旧、创新意识不强', '80', '8');
INSERT INTO `ma_question` VALUES ('507', '自由散漫、纪律松懈、玩风盛行', '80', '0');
INSERT INTO `ma_question` VALUES ('508', '超标准占房、配车、接待', '80', '9');
INSERT INTO `ma_question` VALUES ('509', '以上都不存在', '80', '141');
INSERT INTO `ma_question` VALUES ('510', '公款吃喝、铺张浪费', '81', '4');
INSERT INTO `ma_question` VALUES ('511', '巧立名目，挥霍公款', '81', '3');
INSERT INTO `ma_question` VALUES ('512', '大操大办、借机敛财', '81', '4');
INSERT INTO `ma_question` VALUES ('513', '日益骄横、腐化堕落', '81', '1');
INSERT INTO `ma_question` VALUES ('514', '以上都不存在', '81', '149');
INSERT INTO `ma_question` VALUES ('515', '党性原则淡化、理想信念缺失', '82', '5');
INSERT INTO `ma_question` VALUES ('516', '宗旨意识淡薄、联系群众不够', '82', '15');
INSERT INTO `ma_question` VALUES ('517', '放松自我要求、行为随波逐流', '82', '5');
INSERT INTO `ma_question` VALUES ('518', '纪律意识不强、执行党纪不严', '82', '7');
INSERT INTO `ma_question` VALUES ('519', '其他方面', '82', '72');
INSERT INTO `ma_question` VALUES ('520', '集中教育与日常工作“两张皮”', '83', '22');
INSERT INTO `ma_question` VALUES ('521', '搞形式主义、走过场', '83', '55');
INSERT INTO `ma_question` VALUES ('522', '不能解决党员群众关注的突出问题', '83', '26');
INSERT INTO `ma_question` VALUES ('523', '学习教育流于形式', '83', '27');
INSERT INTO `ma_question` VALUES ('524', '批评和自我批评流于形式', '83', '20');
INSERT INTO `ma_question` VALUES ('525', '整改落实流于形式', '83', '26');
INSERT INTO `ma_question` VALUES ('526', '活动出现偏差，影响团结稳定', '83', '19');
INSERT INTO `ma_question` VALUES ('527', '群众参与不够', '83', '59');
INSERT INTO `ma_question` VALUES ('528', '非常满意', '84', '103');
INSERT INTO `ma_question` VALUES ('529', '满意', '84', '42');
INSERT INTO `ma_question` VALUES ('530', '基本满意', '84', '17');
INSERT INTO `ma_question` VALUES ('531', '不满意', '84', '0');
INSERT INTO `ma_question` VALUES ('532', '走马观花，喜好不喜坏，不能了解真实情况', '85', '9');
INSERT INTO `ma_question` VALUES ('533', '搞形式主义，增加基层负担', '85', '6');
INSERT INTO `ma_question` VALUES ('534', '只听汇报，不接触群众', '85', '10');
INSERT INTO `ma_question` VALUES ('535', '指导工作不得要领，不负责任地乱表态', '85', '0');
INSERT INTO `ma_question` VALUES ('536', '其他方面', '85', '68');
INSERT INTO `ma_question` VALUES ('537', '请提出意见', '85', '0');
INSERT INTO `ma_question` VALUES ('538', '邸柏各庄村党支部', '87', '60372');
INSERT INTO `ma_question` VALUES ('539', '王深港村党支部', '87', '60474');
INSERT INTO `ma_question` VALUES ('540', '孙田各庄村党支部', '87', '60570');
INSERT INTO `ma_question` VALUES ('541', '一分村党支部', '87', '59924');
INSERT INTO `ma_question` VALUES ('542', '毕家窝铺村党支部', '87', '58958');
INSERT INTO `ma_question` VALUES ('543', '西蔡庄村党支部', '87', '61493');
INSERT INTO `ma_question` VALUES ('544', '重峪口村党支部', '87', '60263');
INSERT INTO `ma_question` VALUES ('545', '峰山村党支部', '87', '59208');
INSERT INTO `ma_question` VALUES ('546', '文化馆党支部', '87', '59776');
INSERT INTO `ma_question` VALUES ('547', '政务服务中心党总支', '87', '59969');
INSERT INTO `ma_question` VALUES ('548', '林业局党支部', '87', '59808');
INSERT INTO `ma_question` VALUES ('549', '县职教中心党总支', '87', '60143');
INSERT INTO `ma_question` VALUES ('550', '城乡建设规划管理处党支部', '87', '59355');
INSERT INTO `ma_question` VALUES ('551', '引青灌区管理处党支部', '87', '61376');
INSERT INTO `ma_question` VALUES ('552', '地方道路管理站党支部', '87', '59586');
INSERT INTO `ma_question` VALUES ('553', '白丽娜【县第三实验小学校长】', '88', '58893');
INSERT INTO `ma_question` VALUES ('554', '赵&nbsp;&nbsp;&nbsp;&nbsp;凯【县城乡工程建设监理有限公司经理】', '88', '64188');
INSERT INTO `ma_question` VALUES ('555', '高凤茹【县政务服务中心工商局窗口首席代表】', '88', '63396');
INSERT INTO `ma_question` VALUES ('556', '田秀兰【县政务服务中心国税局窗口首席代表】', '88', '63777');
INSERT INTO `ma_question` VALUES ('557', '黄志利【河北武山水泥有限公司二线生产厂党支部书记、厂长】', '88', '63313');
INSERT INTO `ma_question` VALUES ('558', '金会存【回族，卢龙镇司法所所长、卢龙镇人民调解委员会主任】', '88', '63421');
INSERT INTO `ma_question` VALUES ('559', '孟素艳【县农牧局土肥站（环保站）站长】', '88', '63850');
INSERT INTO `ma_question` VALUES ('560', '赵文芳【印庄乡白各庄村两委委员、计生专干】', '88', '63819');
INSERT INTO `ma_question` VALUES ('561', '徐光磊【县水务局副局长】', '88', '68321');
INSERT INTO `ma_question` VALUES ('562', '赵学锋【县交通运输局党委委员，运输管理站站长】', '88', '59961');
INSERT INTO `ma_question` VALUES ('563', '闫绍兴【县中医院院长】', '88', '65267');
INSERT INTO `ma_question` VALUES ('564', '杨立波【石门镇东阚各庄村党支部书记、村委会主任】', '88', '64053');
INSERT INTO `ma_question` VALUES ('565', '张宝有【县文广新局主任科员】', '88', '63843');
INSERT INTO `ma_question` VALUES ('566', '田树生【县直老干部第三支部书记】', '88', '63668');
INSERT INTO `ma_question` VALUES ('567', '丁亚平【县刑警大队副大队长兼缉毒中队中队长】', '88', '63752');
INSERT INTO `ma_question` VALUES ('568', '常国军【卢龙镇常家沟村党支部书记】', '89', '57506');
INSERT INTO `ma_question` VALUES ('569', '张富平【下寨乡丁家沟村党支部书记】', '89', '55070');
INSERT INTO `ma_question` VALUES ('570', '佟德文【刘家营乡三里店村党支部书记】', '89', '56649');
INSERT INTO `ma_question` VALUES ('571', '王&nbsp;&nbsp;&nbsp;&nbsp;民【潘庄镇秀各庄村党支部书记】', '89', '57477');
INSERT INTO `ma_question` VALUES ('572', '张秀丰【燕河营镇上兴隆庄村党支部书记】', '89', '49912');
INSERT INTO `ma_question` VALUES ('573', '张爱林【陈官屯乡张家沟村党支部书记】', '89', '65208');
INSERT INTO `ma_question` VALUES ('574', '岳学民【印庄乡岳各庄村党支部书记】', '89', '56962');
INSERT INTO `ma_question` VALUES ('575', '闫继业【双望镇四新庄村党支部书记兼村主任】', '89', '81228');
INSERT INTO `ma_question` VALUES ('576', '魏利民【刘田各庄镇赵官庄村党支部书记】', '89', '57871');
INSERT INTO `ma_question` VALUES ('577', '闫立武【蛤泊乡闫深港村党支部书记】', '89', '66061');
INSERT INTO `ma_question` VALUES ('578', '王一舟【蛤泊乡王家山村党支部书记】', '89', '57260');
INSERT INTO `ma_question` VALUES ('579', '郭平山【蛤泊乡青龙河村党支部书记】', '89', '56945');
INSERT INTO `ma_question` VALUES ('580', '姬文占【木井镇牛柏各庄村党支部书记、村主任】', '89', '64927');
INSERT INTO `ma_question` VALUES ('581', '张凤珍【石门镇杨黄岭村党支部书记、村委会主任】', '89', '64597');
INSERT INTO `ma_question` VALUES ('582', '李志均【县经济开发区郑庄村党支部书记】', '89', '57264');

-- ----------------------------
-- Table structure for `ma_subject`
-- ----------------------------
DROP TABLE IF EXISTS `ma_subject`;
CREATE TABLE `ma_subject` (
  `sid` int(11) NOT NULL AUTO_INCREMENT,
  `stitle` varchar(255) NOT NULL,
  `scontent` text,
  PRIMARY KEY (`sid`)
) ENGINE=MyISAM AUTO_INCREMENT=38 DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of ma_subject
-- ----------------------------
INSERT INTO `ma_subject` VALUES ('33', '卢龙县党的群众路线教育实践活动<font color=red>县委</font>征求意见问卷', '您好！感谢您参与我们的问卷调查工作。本调查问卷采取无记名方式，欢迎您对县委开展党的群众路线教育实践活动提出宝贵意见和建议。');
INSERT INTO `ma_subject` VALUES ('34', '卢龙县党的群众路线教育实践活动<font color=red>人大</font>征求意见问卷', '您好！感谢您参与我们的问卷调查工作。本调查问卷采取无记名方式，欢迎您对人大开展党的群众路线教育实践活动提出宝贵意见和建议。');
INSERT INTO `ma_subject` VALUES ('35', '卢龙县党的群众路线教育实践活动<font color=red>政府</font>征求意见问卷', '您好！感谢您参与我们的问卷调查工作。本调查问卷采取无记名方式，欢迎您对政府开展党的群众路线教育实践活动提出宝贵意见和建议。');
INSERT INTO `ma_subject` VALUES ('36', '', '您好！感谢您参与我们的问卷调查工参与我们的问卷调查工作。本调查问卷采取无记名方式,每人限制投票一次，每个选项最多选择10个。');
INSERT INTO `ma_subject` VALUES ('37', '卢龙时代先锋网上投票', '&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;为进一步推动第二批党的群众路线教育实践活动深入开展，激励全县基层党组织和广大党员干部学先进、争先锋、当标兵，树立服务发展、服务群众的先进旗帜，县委组织部在全县范围内组织开展此次“卢龙时代先锋”(十佳服务型党组织、十佳为民村党组织书记、十佳优秀共产党员)评选活动。为体现活动的公开、公平、公正，县委组织部在《卢龙党建网》设立专版，对“卢龙时代先锋”候选对象(十佳服务型党组织、十佳为民村党组织书记、十佳优秀共产党员每类各15个)的典型事迹进行了集中宣传报道，目前该活动已经进入网上投票环节，欢迎全县广大党员、干部、群众积极进行网上投票，在全县营造“积极向上、比学赶超”的浓厚氛围。（投票时间从7月14日起至7月25日止）\r\n<br><a href=\'http://www.lldjw.com/Show_Type.asp?typeid=53\' target=\'_blank\'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;了解候选对象详细情况请点击链接>>http://www.lldjw.com/Show_Type.asp?typeid=53</a>');

-- ----------------------------
-- Table structure for `ma_title`
-- ----------------------------
DROP TABLE IF EXISTS `ma_title`;
CREATE TABLE `ma_title` (
  `tid` int(11) NOT NULL AUTO_INCREMENT,
  `ttitle` varchar(255) DEFAULT NULL,
  `sid` int(11) DEFAULT NULL,
  `vcount` int(11) DEFAULT '0',
  `listtype` int(11) DEFAULT NULL,
  PRIMARY KEY (`tid`)
) ENGINE=MyISAM AUTO_INCREMENT=90 DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of ma_title
-- ----------------------------
INSERT INTO `ma_title` VALUES ('30', '您的职务情况是', '33', '0', '1');
INSERT INTO `ma_title` VALUES ('31', '您所在的单位是', '33', '0', '1');
INSERT INTO `ma_title` VALUES ('32', '请您对县委领导班子和党员领导干部作风方面情况进行总结评价', '33', '0', '1');
INSERT INTO `ma_title` VALUES ('33', '您认为县委领导班子和党员领导干部在贯彻落实中央“八项规定”和有关规定方面存在哪些突出问题', '33', '0', '2');
INSERT INTO `ma_title` VALUES ('34', '您认为县委领导班子和党员领导干部在哪一类四风问题最为严重', '33', '0', '2');
INSERT INTO `ma_title` VALUES ('35', '您认为县委领导班子和党员领导干部在形式主义方面应主要解决', '33', '0', '2');
INSERT INTO `ma_title` VALUES ('36', '您认为县委领导班子和党员领导干部在官僚主义方面应主要解决', '33', '0', '2');
INSERT INTO `ma_title` VALUES ('37', '您认为县委领导班子和党员领导干部在享乐主义方面应主要解决', '33', '0', '2');
INSERT INTO `ma_title` VALUES ('38', '您认为县委领导班子和党员领导干部在奢靡之风方面应主要解决', '33', '0', '2');
INSERT INTO `ma_title` VALUES ('39', '您认为县委领导班子和党员领导干部存在“四风”问题的根源', '33', '0', '2');
INSERT INTO `ma_title` VALUES ('40', '您认为县委领导班子和党员领导干部党的群众路线教育实践活动应防止', '33', '0', '2');
INSERT INTO `ma_title` VALUES ('41', '您对县委领导干部深入基层一线解决实际问题是否满意', '33', '0', '1');
INSERT INTO `ma_title` VALUES ('42', '您认为县委领导干部下基层存在的突出问题是', '33', '0', '1');
INSERT INTO `ma_title` VALUES ('43', '您对县委领导班子和党员领导干部开展这次群众路线教育实践活动，还有哪些意见和建议？', '33', '0', '3');
INSERT INTO `ma_title` VALUES ('59', '您的职务情况是', '35', '0', '1');
INSERT INTO `ma_title` VALUES ('60', '您所在的单位是', '35', '0', '1');
INSERT INTO `ma_title` VALUES ('45', '您的职务情况是', '34', '0', '1');
INSERT INTO `ma_title` VALUES ('46', '您所在的单位是', '34', '0', '1');
INSERT INTO `ma_title` VALUES ('47', '请您对人大领导班子和党员领导干部作风方面情况进行总结评价', '34', '0', '1');
INSERT INTO `ma_title` VALUES ('48', '您认为人大领导班子和党员领导干部在贯彻落实中央“八项规定”和有关规定方面存在哪些突出问题', '34', '0', '2');
INSERT INTO `ma_title` VALUES ('49', '您认为人大领导班子和党员领导干部在哪一类四风问题最为严重', '34', '0', '2');
INSERT INTO `ma_title` VALUES ('50', '您认为人大领导班子和党员领导干部在形式主义方面应主要解决', '34', '0', '2');
INSERT INTO `ma_title` VALUES ('51', '您认为人大领导班子和党员领导干部在官僚主义方面应主要解决', '34', '0', '2');
INSERT INTO `ma_title` VALUES ('52', '您认为人大领导班子和党员领导干部在享乐主义方面应主要解决', '34', '0', '2');
INSERT INTO `ma_title` VALUES ('53', '您认为人大领导班子和党员领导干部在奢靡之风方面应主要解决', '34', '0', '2');
INSERT INTO `ma_title` VALUES ('54', '您认为人大领导班子和党员领导干部存在“四风”问题的根源', '34', '0', '2');
INSERT INTO `ma_title` VALUES ('55', '您认为人大领导班子和党员领导干部党的群众路线教育实践活动应防止', '34', '0', '2');
INSERT INTO `ma_title` VALUES ('56', '您对人大领导干部深入基层一线解决实际问题是否满意', '34', '0', '1');
INSERT INTO `ma_title` VALUES ('57', '您认为人大领导干部下基层存在的突出问题是', '34', '0', '1');
INSERT INTO `ma_title` VALUES ('58', '您对人大领导班子和党员领导干部开展这次群众路线教育实践活动，还有哪些意见和建议？', '34', '0', '3');
INSERT INTO `ma_title` VALUES ('61', '请您对政府领导班子和党员领导干部作风方面情况进行总结评价', '35', '0', '1');
INSERT INTO `ma_title` VALUES ('62', '您认为政府领导班子和党员领导干部在贯彻落实中央“八项规定”和有关规定方面存在哪些突出问题', '35', '0', '2');
INSERT INTO `ma_title` VALUES ('63', '您认为政府领导班子和党员领导干部在哪一类四风问题最为严重', '35', '0', '2');
INSERT INTO `ma_title` VALUES ('64', '您认为政府领导班子和党员领导干部在形式主义方面应主要解决', '35', '0', '2');
INSERT INTO `ma_title` VALUES ('65', '您认为政府领导班子和党员领导干部在官僚主义方面应主要解决', '35', '0', '2');
INSERT INTO `ma_title` VALUES ('66', '您认为政府领导班子和党员领导干部在享乐主义方面应主要解决', '35', '0', '2');
INSERT INTO `ma_title` VALUES ('67', '您认为政府领导班子和党员领导干部在奢靡之风方面应主要解决', '35', '0', '2');
INSERT INTO `ma_title` VALUES ('68', '您认为政府领导班子和党员领导干部存在“四风”问题的根源', '35', '0', '2');
INSERT INTO `ma_title` VALUES ('69', '您认为政府领导班子和党员领导干部党的群众路线教育实践活动应防止', '35', '0', '2');
INSERT INTO `ma_title` VALUES ('70', '您对政府领导干部深入基层一线解决实际问题是否满意', '35', '0', '1');
INSERT INTO `ma_title` VALUES ('71', '.您认为政府领导干部下基层存在的突出问题是', '35', '0', '1');
INSERT INTO `ma_title` VALUES ('72', '您对政府领导班子和党员领导干部开展这次群众路线教育实践活动，还有哪些意见和建议？', '35', '0', '3');
INSERT INTO `ma_title` VALUES ('73', '您的职务情况是', '36', '0', '1');
INSERT INTO `ma_title` VALUES ('75', '请您对政协领导班子和党员领导干部作风方面情况进行总结评价', '36', '0', '1');
INSERT INTO `ma_title` VALUES ('76', '您认为政协领导班子和党员领导干部在贯彻落实中央“八项规定”和有关规定方面存在哪些突出问题', '36', '0', '2');
INSERT INTO `ma_title` VALUES ('81', '您认为政协领导班子和党员领导干部在奢靡之风方面应主要解决', '36', '0', '2');
INSERT INTO `ma_title` VALUES ('82', '您认为政协领导班子和党员领导干部存在“四风”问题的根源', '36', '0', '2');
INSERT INTO `ma_title` VALUES ('83', '您认为政协领导班子和党员领导干部党的群众路线教育实践活动应防止', '36', '0', '2');
INSERT INTO `ma_title` VALUES ('84', '您对政协领导干部深入基层一线解决实际问题是否满意', '36', '0', '1');
INSERT INTO `ma_title` VALUES ('86', '您对政协领导班子和党员领导干部开展这次群众路线教育实践活动，还有哪些意见和建议？', '36', '0', '3');
INSERT INTO `ma_title` VALUES ('87', '十佳服务型党组织候选对象', '37', '0', '2');
INSERT INTO `ma_title` VALUES ('88', '十佳优秀共产党员候选人', '37', '0', '2');
INSERT INTO `ma_title` VALUES ('89', '十佳为民村党组织书记候选人', '37', '0', '2');

-- ----------------------------
-- Table structure for `ma_user`
-- ----------------------------
DROP TABLE IF EXISTS `ma_user`;
CREATE TABLE `ma_user` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `content` text,
  `mac` varchar(50) DEFAULT NULL,
  `answer` varchar(120) DEFAULT NULL,
  `uptime` datetime DEFAULT NULL,
  `sid` int(11) DEFAULT NULL,
  `uid` int(11) DEFAULT '0',
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=101385 DEFAULT CHARSET=utf8;


DROP TABLE IF EXISTS `ma_message`;
CREATE TABLE `ma_message` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `content` text CHARACTER SET utf8,
  `fromuserid` int(11) DEFAULT NULL,
  `touserid` int(11) DEFAULT NULL,
  `seedtime` datetime DEFAULT NULL,
  `flag` int(2) DEFAULT '0',
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=7 DEFAULT CHARSET=utf8;

DROP TABLE IF EXISTS `ma_guestbook`;
CREATE TABLE `ma_guestbook` (
  `id` int(10) NOT NULL AUTO_INCREMENT,
  `content` varchar(1000) NOT NULL,
  `flag` int(2) NOT NULL DEFAULT '1',
  `creattime` time NOT NULL,
  `uid` int(10) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=46 DEFAULT CHARSET=utf8;

CREATE TABLE `ma_news` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `cid` int(11) DEFAULT '0',
  `tid` int(11) DEFAULT '0' ,
  `title` varchar(100) DEFAULT NULL,
  `des` varchar(680) DEFAULT NULL,
  `keyword` varchar(100) DEFAULT NULL,
  `from` varchar(100) DEFAULT NULL,
  `author` varchar(50) DEFAULT NULL,
  `editor` varchar(50) DEFAULT NULL,
  `content` text,
  `mapurl` varchar(300) DEFAULT NULL,
  `telephone` varchar(13) DEFAULT NULL,
  `hj` text,
  `tc` text,
  `yj` text,
  `fw` text,
  `zk` text,
  `ts` text,
  `ispic` int(11) DEFAULT '0',
  `picurl` varchar(255) DEFAULT NULL,
  `hits` int(11) DEFAULT '0',
  `htop` int(11) DEFAULT '0',
  `ctop` int(11) DEFAULT '0',
  `hhdp` int(11) DEFAULT '0',
  `isok` int(11) DEFAULT '1',
  `mtime` datetime DEFAULT '0000-00-00 00:00:00',
  `creattime` datetime DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=171 DEFAULT CHARSET=utf8;


DROP TABLE IF EXISTS `ma_newssort`;
CREATE TABLE `ma_newssort` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(50) DEFAULT NULL,
  `path` varchar(255) DEFAULT '0',
  `addtime` datetime DEFAULT '0000-00-00 00:00:00',
  `order` int(10) DEFAULT '0',
  `fid` int(10) DEFAULT '0',
  `islist` int(11) DEFAULT '0',
  `content` text,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=64 DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of newssort
-- ----------------------------
INSERT INTO `ma_newssort` VALUES ('63', '1', '0', '0000-00-00 00:00:00', '0', '0', '0', null);