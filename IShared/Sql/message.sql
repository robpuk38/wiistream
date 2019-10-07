/*
 Navicat Premium Data Transfer

 Source Server         : localhost
 Source Server Type    : MySQL
 Source Server Version : 100406
 Source Host           : localhost:3306
 Source Schema         : discovery

 Target Server Type    : MySQL
 Target Server Version : 100406
 File Encoding         : 65001

 Date: 04/10/2019 00:39:29
*/

SET NAMES utf8mb4;
SET FOREIGN_KEY_CHECKS = 0;

-- ----------------------------
-- Table structure for message
-- ----------------------------
DROP TABLE IF EXISTS `message`;
CREATE TABLE `message`  (
  `mid` int(10) UNSIGNED NOT NULL AUTO_INCREMENT,
  `content` varchar(255) CHARACTER SET utf8 COLLATE utf8_general_ci NULL DEFAULT NULL,
  `uid` int(10) UNSIGNED NOT NULL,
  `time` timestamp(0) NOT NULL DEFAULT current_timestamp(0),
  PRIMARY KEY (`mid`) USING BTREE,
  INDEX `uid`(`uid`) USING BTREE,
  CONSTRAINT `message_ibfk_1` FOREIGN KEY (`uid`) REFERENCES `user` (`uid`) ON DELETE RESTRICT ON UPDATE RESTRICT
) ENGINE = InnoDB AUTO_INCREMENT = 4 CHARACTER SET = utf8 COLLATE = utf8_general_ci ROW_FORMAT = Compact;

-- ----------------------------
-- Records of message
-- ----------------------------
INSERT INTO `message` VALUES (1, 'hi', 2, '2019-06-24 19:57:01');
INSERT INTO `message` VALUES (2, 'ola', 1, '2019-06-24 19:57:07');
INSERT INTO `message` VALUES (3, 'hello', 2, '2019-06-24 19:57:54');

SET FOREIGN_KEY_CHECKS = 1;
