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

 Date: 04/10/2019 00:40:44
*/

SET NAMES utf8mb4;
SET FOREIGN_KEY_CHECKS = 0;

-- ----------------------------
-- Table structure for user
-- ----------------------------
DROP TABLE IF EXISTS `user`;
CREATE TABLE `user`  (
  `iam` int(255) NOT NULL AUTO_INCREMENT,
  `uid` varchar(255) CHARACTER SET utf32 COLLATE utf32_general_ci NOT NULL DEFAULT 'uid',
  `uname` varchar(255) CHARACTER SET utf32 COLLATE utf32_general_ci NOT NULL DEFAULT 'uname',
  `passwd` varchar(255) CHARACTER SET utf32 COLLATE utf32_general_ci NOT NULL DEFAULT 'passwd',
  `security_level` varchar(255) CHARACTER SET utf32 COLLATE utf32_general_ci NOT NULL DEFAULT 'security_level',
  `deviceid` varchar(255) CHARACTER SET utf32 COLLATE utf32_general_ci NOT NULL DEFAULT 'deviceid',
  `pinpal` varchar(255) CHARACTER SET utf32 COLLATE utf32_general_ci NOT NULL DEFAULT 'pinpal',
  `static_device` varchar(255) CHARACTER SET utf32 COLLATE utf32_general_ci NOT NULL DEFAULT 'static_device',
  `step_in` varchar(255) CHARACTER SET utf32 COLLATE utf32_general_ci NOT NULL DEFAULT 'step_in',
  `is_login` varchar(255) CHARACTER SET utf32 COLLATE utf32_general_ci NOT NULL DEFAULT 'is_login',
  `final` varchar(255) CHARACTER SET utf32 COLLATE utf32_general_ci NOT NULL DEFAULT 'final',
  `reminder` varchar(255) CHARACTER SET utf32 COLLATE utf32_general_ci NOT NULL DEFAULT 'reminder',
  PRIMARY KEY (`iam`) USING BTREE
) ENGINE = MyISAM AUTO_INCREMENT = 2 CHARACTER SET = utf32 COLLATE = utf32_general_ci ROW_FORMAT = Dynamic;

SET FOREIGN_KEY_CHECKS = 1;
