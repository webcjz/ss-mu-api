/*
Navicat MySQL Data Transfer

Source Server         : localhost
Source Server Version : 50626
Source Host           : 127.0.0.1:3306
Source Database       : ss-mu

Target Server Type    : MYSQL
Target Server Version : 50626
File Encoding         : 65001

Date: 2017-02-17 18:39:12
*/

SET FOREIGN_KEY_CHECKS=0;

-- ----------------------------
-- Table structure for auth
-- ----------------------------
DROP TABLE IF EXISTS `auth`;
CREATE TABLE `auth` (
  `token` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- ----------------------------
-- Records of auth
-- ----------------------------
INSERT INTO `auth` VALUES ('LASNADLKJEQOPEBKQJEH8912873124KJAHKLJGEpnfsaasd23JUAYh');

-- ----------------------------
-- Table structure for user
-- ----------------------------
DROP TABLE IF EXISTS `user`;
CREATE TABLE `user` (
  `id` int(8) NOT NULL AUTO_INCREMENT,
  `passwd` varchar(24) NOT NULL,
  `t` float(255,0) NOT NULL,
  `u` float(255,0) NOT NULL,
  `d` float(255,0) NOT NULL,
  `transfer_enable` float(255,0) NOT NULL,
  `port` int(6) NOT NULL,
  `switch` bit(1) NOT NULL,
  `enable` bit(1) NOT NULL,
  `method` varchar(16) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8mb4;

-- ----------------------------
-- Records of user
-- ----------------------------
INSERT INTO `user` VALUES ('1', '12', '123', '123', '123', '123', '1231', '', '', 'rc4-md5');
INSERT INTO `user` VALUES ('2', '2123', '13123', '3', '23', '231', '341', '', '', 'aes-256-ad');
