/*
Navicat MySQL Data Transfer

Source Server         : 本地CentOS7
Source Server Version : 50718
Source Host           : 192.168.199.217:3306
Source Database       : packagesTest

Target Server Type    : MYSQL
Target Server Version : 50718
File Encoding         : 65001

Date: 2017-08-19 11:39:26
*/

SET FOREIGN_KEY_CHECKS=0;

-- ----------------------------
-- Table structure for `access_user`
-- ----------------------------
DROP TABLE IF EXISTS `access_user`;
CREATE TABLE `access_user` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `uid` int(10) unsigned NOT NULL DEFAULT '0' COMMENT '用户ID',
  `token` varchar(50) COLLATE utf8_unicode_ci NOT NULL COMMENT 'token 随机值',
  `expire` int(10) unsigned NOT NULL DEFAULT '0' COMMENT '到期时间',
  `created_at` int(10) unsigned NOT NULL DEFAULT '0' COMMENT '创建时间',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci COMMENT='分类表 cate';

-- ----------------------------
-- Records of access_user
-- ----------------------------
INSERT INTO `access_user` VALUES ('2', '1', 'gKNVybdn9YK3y6TV8QfK', '1503050030', '1503042830');
INSERT INTO `access_user` VALUES ('3', '1', 'mVvZRfkHn4uawAVS4xU9', '1503052761', '1503045561');
INSERT INTO `access_user` VALUES ('4', '1', '68NLeMKtC3Gyrvwyx52N', '1503053703', '1503046503');
INSERT INTO `access_user` VALUES ('5', '1', '6UEnFG87XqSd4AJgTZ3h', '1503120432', '1503113232');
