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

 Date: 04/10/2019 00:39:44
*/

SET NAMES utf8mb4;
SET FOREIGN_KEY_CHECKS = 0;

-- ----------------------------
-- Table structure for build_version
-- ----------------------------
DROP TABLE IF EXISTS `build_version`;
CREATE TABLE `build_version`  (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `build_version` varchar(255) CHARACTER SET utf32 COLLATE utf32_general_ci NULL DEFAULT '0.1',
  PRIMARY KEY (`id`) USING BTREE
) ENGINE = MyISAM AUTO_INCREMENT = 6 CHARACTER SET = latin1 COLLATE = latin1_swedish_ci ROW_FORMAT = Dynamic;

-- ----------------------------
-- Records of build_version
-- ----------------------------
INSERT INTO `build_version` VALUES (1, '0.1');
INSERT INTO `build_version` VALUES (2, '0.2');
INSERT INTO `build_version` VALUES (3, '0.3');
INSERT INTO `build_version` VALUES (4, '0.4');
INSERT INTO `build_version` VALUES (5, '0.5');

SET FOREIGN_KEY_CHECKS = 1;
