/*
Navicat MySQL Data Transfer

Source Server         : localhost
Source Server Version : 50719
Source Host           : localhost:3306
Source Database       : id4116543_html5_musicbox

Target Server Type    : MYSQL
Target Server Version : 50719
File Encoding         : 65001

Date: 2018-04-11 08:57:53
*/

SET FOREIGN_KEY_CHECKS=0;

-- ----------------------------
-- Table structure for music
-- ----------------------------
DROP TABLE IF EXISTS `music`;
CREATE TABLE `music` (
  `music_id` int(100) NOT NULL AUTO_INCREMENT,
  `name` char(50) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `filename` char(50) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `time` char(10) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `genre` char(50) CHARACTER SET utf8 COLLATE utf8_unicode_ci DEFAULT NULL,
  `artist` char(50) CHARACTER SET utf8 COLLATE utf8_unicode_ci DEFAULT NULL,
  `album` char(50) CHARACTER SET utf8 COLLATE utf8_unicode_ci DEFAULT NULL,
  `addtime` datetime NOT NULL,
  `updatetime` datetime NOT NULL,
  PRIMARY KEY (`music_id`),
  KEY `music_id` (`music_id`)
) ENGINE=InnoDB AUTO_INCREMENT=82 DEFAULT CHARSET=utf8;

-- ----------------------------
-- Table structure for playlist
-- ----------------------------
DROP TABLE IF EXISTS `playlist`;
CREATE TABLE `playlist` (
  `playlist_id` int(100) NOT NULL AUTO_INCREMENT,
  `name` char(50) COLLATE utf8_unicode_ci NOT NULL,
  `addtime` datetime NOT NULL,
  `updatetime` datetime NOT NULL,
  PRIMARY KEY (`playlist_id`)
) ENGINE=InnoDB AUTO_INCREMENT=22 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- ----------------------------
-- Table structure for playlist_detail
-- ----------------------------
DROP TABLE IF EXISTS `playlist_detail`;
CREATE TABLE `playlist_detail` (
  `playlist_detail_id` int(100) NOT NULL AUTO_INCREMENT,
  `music_id` int(100) NOT NULL,
  `playlist_id` int(100) NOT NULL,
  PRIMARY KEY (`playlist_detail_id`),
  UNIQUE KEY `playlist_detail_id` (`playlist_detail_id`),
  KEY `music_id` (`music_id`),
  KEY `playlist_id` (`playlist_id`),
  KEY `music_id_2` (`music_id`),
  KEY `playlist_id_2` (`playlist_id`),
  CONSTRAINT `playlist_detail_ibfk_1` FOREIGN KEY (`music_id`) REFERENCES `music` (`music_id`) ON DELETE CASCADE ON UPDATE CASCADE,
  CONSTRAINT `playlist_detail_ibfk_2` FOREIGN KEY (`playlist_id`) REFERENCES `playlist` (`playlist_id`) ON DELETE CASCADE ON UPDATE CASCADE
) ENGINE=InnoDB AUTO_INCREMENT=134 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;
