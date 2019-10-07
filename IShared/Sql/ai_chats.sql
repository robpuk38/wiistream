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

 Date: 04/10/2019 00:38:59
*/

SET NAMES utf8mb4;
SET FOREIGN_KEY_CHECKS = 0;

-- ----------------------------
-- Table structure for ai_chats
-- ----------------------------
DROP TABLE IF EXISTS `ai_chats`;
CREATE TABLE `ai_chats`  (
  `aid` int(255) NOT NULL AUTO_INCREMENT,
  `gender` int(1) NOT NULL,
  `says` varchar(255) CHARACTER SET utf32 COLLATE utf32_general_ci NOT NULL DEFAULT 'what',
  PRIMARY KEY (`aid`) USING BTREE
) ENGINE = MyISAM AUTO_INCREMENT = 3 CHARACTER SET = latin1 COLLATE = latin1_swedish_ci ROW_FORMAT = Dynamic;

SET FOREIGN_KEY_CHECKS = 1;
