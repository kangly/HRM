DROP TABLE IF EXISTS `user`;
CREATE TABLE `user` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT COMMENT '员工表ID',
  `username` varchar(50) NOT NULL DEFAULT '' COMMENT '登录邮箱',
  `password` char(32) NOT NULL DEFAULT '' COMMENT '登录密码',
  `english_name` varchar(50) NOT NULL DEFAULT '' COMMENT '英文名',
  `chinese_name` varchar(50) NOT NULL DEFAULT '' COMMENT '中文名',
  `mobile` varchar(11) NOT NULL DEFAULT '' COMMENT '手机号',
  `open_id` varchar(64) NOT NULL DEFAULT '' COMMENT '微信open_id',
  `user_id` varchar(60) NOT NULL DEFAULT '' COMMENT '钉钉user_id',
  `sex` tinyint(1) unsigned NOT NULL DEFAULT '0' COMMENT '性别，默认0男、1女',
  `birthday` date DEFAULT NULL COMMENT '出生日期',
  `card_no` varchar(18) NOT NULL DEFAULT '' COMMENT '身份证',
  `contact_address` varchar(100) NOT NULL DEFAULT '' COMMENT '员工联系地址',
  `domicile_place` varchar(100) NOT NULL DEFAULT '' COMMENT '户口',
  `native_place` varchar(100) NOT NULL DEFAULT '' COMMENT '籍贯',
  `birth_place` varchar(100) NOT NULL DEFAULT '' COMMENT '出生地',
  `family_info` varchar(1000) NOT NULL DEFAULT '' COMMENT '家庭情况',
  `emergency_contact_name` varchar(20) NOT NULL DEFAULT '' COMMENT '紧急联系人姓名',
  `emergency_contact_phone` varchar(20) NOT NULL DEFAULT '' COMMENT '紧急联系人电话',
  `is_disable` tinyint(1) unsigned NOT NULL DEFAULT '0' COMMENT '是否删除',
  `is_dimission` tinyint(1) unsigned NOT NULL DEFAULT '0' COMMENT '是否离职',
  `is_formal` tinyint(1) unsigned NOT NULL DEFAULT '0' COMMENT '是否转正',
  `entry_time` datetime DEFAULT NULL COMMENT '入职时间',
  `leave_time` datetime DEFAULT NULL COMMENT '离职时间',
  `formal_date` date DEFAULT NULL COMMENT '转正时间',
  PRIMARY KEY (`id`),
  KEY `idx_username` (`username`),
  KEY `idx_mobile` (`mobile`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8;

INSERT INTO `user` VALUES (1,'kangly@hrm.com','e19d5cd5af0378da05f63f891c7467af','kangly','小康','15227166666','','',0,NULL,'','','','','','','','',0,0,0,'2020-02-02 10:20:19',NULL,'2020-05-02');
