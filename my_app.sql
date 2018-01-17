/*
Navicat MySQL Data Transfer

Source Server         : mysql-docker
Source Server Version : 50626
Source Host           : localhost:3306
Source Database       : my_app

Target Server Type    : MYSQL
Target Server Version : 50626
File Encoding         : 65001

Date: 2018-01-17 09:26:05
*/

SET FOREIGN_KEY_CHECKS=0;

-- ----------------------------
-- Table structure for users
-- ----------------------------
DROP TABLE IF EXISTS `users`;
CREATE TABLE `users` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(255) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=latin1;

-- ----------------------------
-- Records of users
-- ----------------------------
INSERT INTO `users` VALUES ('1', 'vcv');
INSERT INTO `users` VALUES ('2', 'cvcvc');
INSERT INTO `users` VALUES ('3', 'yhghg');
INSERT INTO `users` VALUES ('4', 'nhiha');
