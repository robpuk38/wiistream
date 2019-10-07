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

 Date: 04/10/2019 00:40:24
*/

SET NAMES utf8mb4;
SET FOREIGN_KEY_CHECKS = 0;

-- ----------------------------
-- Table structure for random_music_comments
-- ----------------------------
DROP TABLE IF EXISTS `random_music_comments`;
CREATE TABLE `random_music_comments`  (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `comments` text CHARACTER SET latin1 COLLATE latin1_swedish_ci NULL,
  PRIMARY KEY (`id`) USING BTREE
) ENGINE = InnoDB AUTO_INCREMENT = 5 CHARACTER SET = latin1 COLLATE = latin1_swedish_ci ROW_FORMAT = Compact;

-- ----------------------------
-- Records of random_music_comments
-- ----------------------------
INSERT INTO `random_music_comments` VALUES (1, 'How About Listen To Some Music');
INSERT INTO `random_music_comments` VALUES (2, 'Soul Searching Music Meditation');
INSERT INTO `random_music_comments` VALUES (3, 'I Find Music Soothing');
INSERT INTO `random_music_comments` VALUES (4, 'You Listen Ill Play');

SET FOREIGN_KEY_CHECKS = 1;
