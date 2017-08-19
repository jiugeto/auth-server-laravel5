/*
Navicat MySQL Data Transfer

Source Server         : 本地CentOS7
Source Server Version : 50718
Source Host           : 192.168.199.217:3306
Source Database       : packagesTest

Target Server Type    : MYSQL
Target Server Version : 50718
File Encoding         : 65001

Date: 2017-08-19 09:52:06
*/

SET FOREIGN_KEY_CHECKS=0;

-- ----------------------------
-- Table structure for `access_user`
-- ----------------------------
DROP TABLE IF EXISTS `access_user`;
CREATE TABLE `access_user` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `uid` int(10) unsigned NOT NULL DEFAULT '0' COMMENT '用户ID',
  `token` varchar(100) COLLATE utf8_unicode_ci NOT NULL COMMENT 'token 随机值',
  `expire` int(10) unsigned NOT NULL DEFAULT '0' COMMENT '到期时间',
  `created_at` int(10) unsigned NOT NULL DEFAULT '0' COMMENT '创建时间',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci COMMENT='分类表 cate';