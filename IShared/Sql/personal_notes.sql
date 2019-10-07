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

 Date: 04/10/2019 00:40:12
*/

SET NAMES utf8mb4;
SET FOREIGN_KEY_CHECKS = 0;

-- ----------------------------
-- Table structure for personal_notes
-- ----------------------------
DROP TABLE IF EXISTS `personal_notes`;
CREATE TABLE `personal_notes`  (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `uid` varchar(9) CHARACTER SET latin1 COLLATE latin1_swedish_ci NOT NULL,
  `notes` text CHARACTER SET latin1 COLLATE latin1_swedish_ci NOT NULL,
  PRIMARY KEY (`id`) USING BTREE
) ENGINE = MyISAM AUTO_INCREMENT = 3 CHARACTER SET = latin1 COLLATE = latin1_swedish_ci ROW_FORMAT = Dynamic;

-- ----------------------------
-- Records of personal_notes
-- ----------------------------
INSERT INTO `personal_notes` VALUES (1, '4', 'this is a note one');
INSERT INTO `personal_notes` VALUES (2, '4', 'this is a note two');

SET FOREIGN_KEY_CHECKS = 1;
