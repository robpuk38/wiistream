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

 Date: 04/10/2019 00:43:37
*/

SET NAMES utf8mb4;
SET FOREIGN_KEY_CHECKS = 0;

-- ----------------------------
-- Table structure for user_images
-- ----------------------------
DROP TABLE IF EXISTS `user_images`;
CREATE TABLE `user_images`  (
  `uid` varchar(255) CHARACTER SET utf32 COLLATE utf32_bin NOT NULL DEFAULT 'uid',
  `static_device` varchar(255) CHARACTER SET utf32 COLLATE utf32_bin NOT NULL DEFAULT 'static_device',
  `bg` varchar(255) CHARACTER SET utf32 COLLATE utf32_bin NOT NULL DEFAULT '/wiistream/images/defult_bg.png',
  `profile_pic` varchar(255) CHARACTER SET utf32 COLLATE utf32_bin NOT NULL DEFAULT '/wiistream/images/default_user.png'
) ENGINE = MyISAM CHARACTER SET = utf32 COLLATE = utf32_bin ROW_FORMAT = Dynamic;

SET FOREIGN_KEY_CHECKS = 1;
