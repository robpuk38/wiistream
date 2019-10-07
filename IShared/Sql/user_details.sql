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

 Date: 04/10/2019 00:40:55
*/

SET NAMES utf8mb4;
SET FOREIGN_KEY_CHECKS = 0;

-- ----------------------------
-- Table structure for user_details
-- ----------------------------
DROP TABLE IF EXISTS `user_details`;
CREATE TABLE `user_details`  (
  `who` int(255) NOT NULL AUTO_INCREMENT,
  `uid` varchar(255) CHARACTER SET utf32 COLLATE utf32_general_ci NOT NULL DEFAULT 'uid',
  `f_name` varchar(255) CHARACTER SET utf32 COLLATE utf32_general_ci NOT NULL DEFAULT 'f_name',
  `l_name` varchar(255) CHARACTER SET utf32 COLLATE utf32_general_ci NOT NULL DEFAULT 'l_name',
  `m_name` varchar(255) CHARACTER SET utf32 COLLATE utf32_general_ci NOT NULL DEFAULT 'm_name',
  `prfix_name` varchar(255) CHARACTER SET utf32 COLLATE utf32_general_ci NOT NULL DEFAULT 'prfix_name',
  `c_address` varchar(255) CHARACTER SET utf32 COLLATE utf32_bin NOT NULL DEFAULT 'c_address',
  `p_address` varchar(255) CHARACTER SET utf32 COLLATE utf32_general_ci NOT NULL DEFAULT 'p_address',
  `birthdate` varchar(255) CHARACTER SET utf32 COLLATE utf32_general_ci NOT NULL DEFAULT 'birthdate',
  `ssi_id` varchar(255) CHARACTER SET utf32 COLLATE utf32_general_ci NOT NULL DEFAULT 'ssi_id',
  `bmv_id` varchar(255) CHARACTER SET utf32 COLLATE utf32_general_ci NOT NULL DEFAULT 'bmv_id',
  `is_allegeable` varchar(255) CHARACTER SET utf32 COLLATE utf32_general_ci NOT NULL DEFAULT 'is_allegeable',
  `rendering_services` varchar(255) CHARACTER SET utf32 COLLATE utf32_general_ci NOT NULL DEFAULT 'rendering_services',
  `gov_phone` varchar(255) CHARACTER SET utf32 COLLATE utf32_general_ci NOT NULL DEFAULT 'gov_phone',
  `personal_phone` varchar(255) CHARACTER SET utf32 COLLATE utf32_general_ci NOT NULL DEFAULT 'personal_phone',
  `email` varchar(255) CHARACTER SET utf32 COLLATE utf32_general_ci NOT NULL DEFAULT 'email',
  `personal_notes` varchar(255) CHARACTER SET utf32 COLLATE utf32_general_ci NOT NULL DEFAULT 'personal_notes',
  `static_device` varchar(255) CHARACTER SET utf32 COLLATE utf32_bin NOT NULL DEFAULT 'static_device',
  PRIMARY KEY (`who`) USING BTREE
) ENGINE = MyISAM AUTO_INCREMENT = 3 CHARACTER SET = latin1 COLLATE = latin1_swedish_ci ROW_FORMAT = Dynamic;

SET FOREIGN_KEY_CHECKS = 1;
