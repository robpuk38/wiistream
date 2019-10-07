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

 Date: 04/10/2019 00:43:48
*/

SET NAMES utf8mb4;
SET FOREIGN_KEY_CHECKS = 0;

-- ----------------------------
-- Table structure for valid_www
-- ----------------------------
DROP TABLE IF EXISTS `valid_www`;
CREATE TABLE `valid_www`  (
  `id` int(9) NOT NULL AUTO_INCREMENT,
  `validated_sites` varchar(255) CHARACTER SET utf32 COLLATE utf32_general_ci NOT NULL DEFAULT 'validated_sites',
  `app_status` varchar(255) CHARACTER SET utf32 COLLATE utf32_german2_ci NOT NULL DEFAULT 'app_status',
  `list` int(1) NOT NULL DEFAULT 0,
  PRIMARY KEY (`id`) USING BTREE
) ENGINE = MyISAM AUTO_INCREMENT = 34 CHARACTER SET = latin1 COLLATE = latin1_swedish_ci ROW_FORMAT = Dynamic;

-- ----------------------------
-- Records of valid_www
-- ----------------------------
INSERT INTO `valid_www` VALUES (1, 'wiistream/meta.php', 'active', 0);
INSERT INTO `valid_www` VALUES (2, 'post/register.php', 'active', 0);
INSERT INTO `valid_www` VALUES (3, 'post/login.php', 'active', 0);
INSERT INTO `valid_www` VALUES (4, 'post/logout.php', 'active', 0);
INSERT INTO `valid_www` VALUES (5, 'post/admin.php', 'active', 0);
INSERT INTO `valid_www` VALUES (6, 'discovery/index.php', 'active', 0);
INSERT INTO `valid_www` VALUES (7, 'http://pluto.tv/', 'active', 0);
INSERT INTO `valid_www` VALUES (8, 'http://wiistream.net/sameas.php?url=https://www.putlocker-hd.is/movies/', 'active', 0);
INSERT INTO `valid_www` VALUES (9, 'https://www.putlocker-hd.is/', 'active', 0);
INSERT INTO `valid_www` VALUES (10, 'localhost:8080', 'active', 0);
INSERT INTO `valid_www` VALUES (14, '127.0.0.1:8080', 'active', 0);
INSERT INTO `valid_www` VALUES (12, 'https://gostream.site/123movies/', 'active', 0);
INSERT INTO `valid_www` VALUES (13, 'http://127.0.0.1/validate.php?domain=post/logout.php', 'active', 0);
INSERT INTO `valid_www` VALUES (15, 'https://www.popcornflix.com/pages/discover/d/movies/', 'active', 0);
INSERT INTO `valid_www` VALUES (16, 'https://www.sonycrackle.com/movies/', 'active', 0);
INSERT INTO `valid_www` VALUES (20, 'http://localhost:8080', 'active', 0);
INSERT INTO `valid_www` VALUES (17, 'https://m.facebook.com/', 'active', 0);
INSERT INTO `valid_www` VALUES (18, 'https://www.vudu.com/content/movies/movieslist?AVAILABLE_FOR_FREE=Yes', 'active', 0);
INSERT INTO `valid_www` VALUES (19, 'http://wiistream.net:8080', 'active', 0);
INSERT INTO `valid_www` VALUES (21, 'http://127.0.0.1:8080', 'active', 0);
INSERT INTO `valid_www` VALUES (22, 'https://www.putlocker-hd.is/movies/', 'active', 0);
INSERT INTO `valid_www` VALUES (23, 'https://www6.putlockertv.to/movies/', 'active', 0);
INSERT INTO `valid_www` VALUES (24, 'https://putlockers.as/movies/', 'active', 0);
INSERT INTO `valid_www` VALUES (25, 'http://www9.putlockers.plus/', 'active', 0);
INSERT INTO `valid_www` VALUES (26, 'https://www.putlockers.me/', 'active', 0);
INSERT INTO `valid_www` VALUES (27, 'https://putlocker9.to/', 'active', 0);
INSERT INTO `valid_www` VALUES (28, 'https://www.putlockers.name/movies/', 'active', 0);
INSERT INTO `valid_www` VALUES (29, 'https://putlocker.style/all-movies', 'active', 0);
INSERT INTO `valid_www` VALUES (30, 'http://www2.putlockers.tf/', 'active', 0);
INSERT INTO `valid_www` VALUES (31, 'http://wiistream.net/tlc/index.php', 'active', 1);
INSERT INTO `valid_www` VALUES (32, 'http://wiistream.net/discovery/index.php', 'active', 1);
INSERT INTO `valid_www` VALUES (33, 'https://www.netflix.com/', 'active', 1);

SET FOREIGN_KEY_CHECKS = 1;
