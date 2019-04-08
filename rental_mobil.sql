/*
Navicat MySQL Data Transfer

Source Server         : latihan1
Source Server Version : 50527
Source Host           : 127.0.0.1:3306
Source Database       : rental_mobil

Target Server Type    : MYSQL
Target Server Version : 50527
File Encoding         : 65001

Date: 2015-11-03 21:41:14
*/

SET FOREIGN_KEY_CHECKS=0;

-- ----------------------------
-- Table structure for admin
-- ----------------------------
DROP TABLE IF EXISTS `admin`;
CREATE TABLE `admin` (
`id_admin`  varchar(255) CHARACTER SET latin1 COLLATE latin1_swedish_ci NOT NULL ,
`name`  varchar(255) CHARACTER SET latin1 COLLATE latin1_swedish_ci NOT NULL ,
`username`  varchar(255) CHARACTER SET latin1 COLLATE latin1_swedish_ci NOT NULL ,
`password`  varchar(255) CHARACTER SET latin1 COLLATE latin1_swedish_ci NOT NULL ,
PRIMARY KEY (`id_admin`)
)
ENGINE=InnoDB
DEFAULT CHARACTER SET=latin1 COLLATE=latin1_swedish_ci

;

-- ----------------------------
-- Records of admin
-- ----------------------------
BEGIN;
INSERT INTO `admin` VALUES ('irf123', 'Irfan Rona', 'irfan', '12345678'), ('ronqwe', 'Rona Regen', 'rona', 'qwerty');
COMMIT;

-- ----------------------------
-- Table structure for harga
-- ----------------------------
DROP TABLE IF EXISTS `harga`;
CREATE TABLE `harga` (
`id_harga`  int(11) NOT NULL ,
`harga`  varchar(255) CHARACTER SET latin1 COLLATE latin1_swedish_ci NULL DEFAULT NULL ,
PRIMARY KEY (`id_harga`)
)
ENGINE=InnoDB
DEFAULT CHARACTER SET=latin1 COLLATE=latin1_swedish_ci

;

-- ----------------------------
-- Records of harga
-- ----------------------------
BEGIN;
INSERT INTO `harga` VALUES ('11', '350000'), ('12', '450000'), ('13', '550000'), ('14', '750000'), ('21', '950000'), ('22', '1100000'), ('23', '400000'), ('24', '500000'), ('31', '600000'), ('32', '350000'), ('33', '450000'), ('34', '550000');
COMMIT;

-- ----------------------------
-- Table structure for mobil
-- ----------------------------
DROP TABLE IF EXISTS `mobil`;
CREATE TABLE `mobil` (
`id_mobil`  int(11) NOT NULL AUTO_INCREMENT ,
`type`  varchar(255) CHARACTER SET latin1 COLLATE latin1_swedish_ci NOT NULL ,
PRIMARY KEY (`id_mobil`),
INDEX `type` (`type`) USING BTREE 
)
ENGINE=InnoDB
DEFAULT CHARACTER SET=latin1 COLLATE=latin1_swedish_ci
AUTO_INCREMENT=5

;

-- ----------------------------
-- Records of mobil
-- ----------------------------
BEGIN;
INSERT INTO `mobil` VALUES ('1', 'Avanza'), ('2', 'Elf'), ('3', 'Grand'), ('4', 'Luxio');
COMMIT;

-- ----------------------------
-- Table structure for paket
-- ----------------------------
DROP TABLE IF EXISTS `paket`;
CREATE TABLE `paket` (
`id_paket`  int(11) NOT NULL ,
`paket`  varchar(255) CHARACTER SET latin1 COLLATE latin1_swedish_ci NOT NULL ,
PRIMARY KEY (`id_paket`)
)
ENGINE=InnoDB
DEFAULT CHARACTER SET=latin1 COLLATE=latin1_swedish_ci

;

-- ----------------------------
-- Records of paket
-- ----------------------------
BEGIN;
INSERT INTO `paket` VALUES ('10', '6 jam'), ('20', '12 jam'), ('30', '24 jam');
COMMIT;

-- ----------------------------
-- Table structure for sewa
-- ----------------------------
DROP TABLE IF EXISTS `sewa`;
CREATE TABLE `sewa` (
`id_sewa`  int(11) NOT NULL AUTO_INCREMENT ,
`id_mobil`  int(11) NOT NULL ,
`id_paket`  int(11) NOT NULL ,
`id_harga`  int(11) NOT NULL ,
`tgl`  date NOT NULL ,
`jam`  time NOT NULL ,
`nama`  varchar(255) CHARACTER SET latin1 COLLATE latin1_swedish_ci NOT NULL ,
`alamat`  varchar(255) CHARACTER SET latin1 COLLATE latin1_swedish_ci NOT NULL ,
`ktp`  varchar(65) CHARACTER SET latin1 COLLATE latin1_swedish_ci NOT NULL ,
`hp`  varchar(65) CHARACTER SET latin1 COLLATE latin1_swedish_ci NOT NULL ,
`lokasi`  varchar(255) CHARACTER SET latin1 COLLATE latin1_swedish_ci NOT NULL ,
`konfirmasi`  int(11) NOT NULL DEFAULT 0 ,
`status_bayar`  int(11) NOT NULL DEFAULT 0 ,
PRIMARY KEY (`id_sewa`),
FOREIGN KEY (`id_harga`) REFERENCES `harga` (`id_harga`) ON DELETE RESTRICT ON UPDATE RESTRICT,
FOREIGN KEY (`id_mobil`) REFERENCES `mobil` (`id_mobil`) ON DELETE RESTRICT ON UPDATE RESTRICT,
FOREIGN KEY (`id_paket`) REFERENCES `paket` (`id_paket`) ON DELETE RESTRICT ON UPDATE RESTRICT,
INDEX `id_paket` (`id_paket`) USING BTREE ,
INDEX `id_mobil` (`id_mobil`) USING BTREE ,
INDEX `id_harga` (`id_harga`) USING BTREE 
)
ENGINE=InnoDB
DEFAULT CHARACTER SET=latin1 COLLATE=latin1_swedish_ci
AUTO_INCREMENT=61

;

-- ----------------------------
-- Records of sewa
-- ----------------------------
BEGIN;
INSERT INTO `sewa` VALUES ('56', '1', '10', '11', '2015-10-22', '12:59:00', 'gyjgyj', 'kjhkhkjh', '8786', '87687', 'hfkjehj', '0', '0'), ('57', '1', '10', '11', '2015-10-25', '12:59:00', '546456', '6456456', '6456546', '45654645', 'thft', '0', '0'), ('58', '3', '30', '33', '2015-10-25', '12:55:00', 'Irfan Ronaldo', 'rgdrg', '48576456', '08977016123456', 'where', '0', '0'), ('60', '2', '20', '22', '2015-11-03', '12:59:00', 'gykk', 'kkkhfkjehfjh', '678678678', '654676578', 'fjefef', '1', '0');
COMMIT;

-- ----------------------------
-- Auto increment value for mobil
-- ----------------------------
ALTER TABLE `mobil` AUTO_INCREMENT=5;

-- ----------------------------
-- Auto increment value for sewa
-- ----------------------------
ALTER TABLE `sewa` AUTO_INCREMENT=61;
