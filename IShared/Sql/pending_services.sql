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

 Date: 04/10/2019 00:40:03
*/

SET NAMES utf8mb4;
SET FOREIGN_KEY_CHECKS = 0;

-- ----------------------------
-- Table structure for pending_services
-- ----------------------------
DROP TABLE IF EXISTS `pending_services`;
CREATE TABLE `pending_services`  (
  `pendingid` int(255) NOT NULL AUTO_INCREMENT,
  `uid` varchar(255) CHARACTER SET utf32 COLLATE utf32_general_ci NOT NULL DEFAULT 'uid',
  `snap_status` varchar(255) CHARACTER SET utf32 COLLATE utf32_general_ci NOT NULL DEFAULT 'snap_status',
  `snap` varchar(255) CHARACTER SET utf32 COLLATE utf32_unicode_ci NOT NULL DEFAULT 'https://secure.in.gov/fssa/dfr/4491.htm',
  `tanf_status` varchar(255) CHARACTER SET utf32 COLLATE utf32_general_ci NOT NULL DEFAULT 'tanf_status',
  `tanf` varchar(255) CHARACTER SET utf32 COLLATE utf32_general_ci NOT NULL DEFAULT 'https://www.in.gov/fssa/dfr/4496.htm',
  `hip_status` varchar(255) CHARACTER SET utf32 COLLATE utf32_general_ci NOT NULL DEFAULT 'hip_status',
  `hip` varchar(255) CHARACTER SET utf32 COLLATE utf32_general_ci NOT NULL DEFAULT 'https://www.in.gov/fssa/hip/2458.htm',
  `gov_phone_status` varchar(255) CHARACTER SET utf32 COLLATE utf32_general_ci NOT NULL DEFAULT 'gov_phone_status',
  `gov_phone` varchar(255) CHARACTER SET utf32 COLLATE utf32_general_ci NOT NULL DEFAULT 'https://www.apply4lifeline.entouchwireless.com/hhv/main?planId=1290&planId=1290',
  `hud_status` varchar(255) CHARACTER SET utf32 COLLATE utf32_general_ci NOT NULL DEFAULT 'hud_status',
  `hud_homes` varchar(255) CHARACTER SET utf32 COLLATE utf32_general_ci NOT NULL DEFAULT 'https://apps.hud.gov/emarc/index.cfm?fuseaction=emar.registerEvent&eventId=3534&update=N',
  PRIMARY KEY (`pendingid`) USING BTREE
) ENGINE = MyISAM AUTO_INCREMENT = 3 CHARACTER SET = latin1 COLLATE = latin1_swedish_ci ROW_FORMAT = Dynamic;

-- ----------------------------
-- Records of pending_services
-- ----------------------------
INSERT INTO `pending_services` VALUES (1, '4', 'active', 'https://secure.in.gov/fssa/dfr/4491.htm', 'pending', 'https://www.in.gov/fssa/dfr/4496.htm', 'pending', 'https://fssabenefits.in.gov/#/register/userdetails', 'pending', 'https://www.apply4lifeline.entouchwireless.com/hhv/main?planId=1290&planId=1290', 'hud_status', 'https://apps.hud.gov/emarc/index.cfm?fuseaction=emar.registerEvent&eventId=3534&update=N');
INSERT INTO `pending_services` VALUES (2, '3', 'snap_status', 'https://secure.in.gov/fssa/dfr/4491.htm', 'tanf_status', 'https://www.in.gov/fssa/dfr/4496.htm', 'hip_status', 'https://fssabenefits.in.gov/#/register/userdetails', 'gov_phone_status', 'https://www.apply4lifeline.entouchwireless.com/hhv/main?planId=1290&planId=1290', 'hud_status', 'https://apps.hud.gov/emarc/index.cfm?fuseaction=emar.registerEvent&eventId=3534&update=N');

SET FOREIGN_KEY_CHECKS = 1;
