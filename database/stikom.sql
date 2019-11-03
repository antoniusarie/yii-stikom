/*

 Source Server         : VM
 Source Server Type    : MySQL
 Source Server Version : 50727
 Source Host           : 10.10.10.100:3306
 Source Schema         : stikom

 Target Server Type    : MySQL
 Target Server Version : 50727
 File Encoding         : 65001

 Date: 03/11/2019 07:33:41
*/

SET NAMES utf8mb4;
SET FOREIGN_KEY_CHECKS = 0;

-- ----------------------------
-- Table structure for gender
-- ----------------------------
DROP TABLE IF EXISTS `gender`;
CREATE TABLE `gender`  (
  `kode_gender` varchar(2) CHARACTER SET latin1 COLLATE latin1_swedish_ci NOT NULL,
  `gender` varchar(50) CHARACTER SET latin1 COLLATE latin1_swedish_ci NULL DEFAULT NULL,
  PRIMARY KEY (`kode_gender`) USING BTREE
) ENGINE = InnoDB CHARACTER SET = latin1 COLLATE = latin1_swedish_ci ROW_FORMAT = Dynamic;

-- ----------------------------
-- Records of gender
-- ----------------------------
INSERT INTO `gender` VALUES ('1', 'Pria');
INSERT INTO `gender` VALUES ('2', 'Wanita');
INSERT INTO `gender` VALUES ('3', 'Waria');

-- ----------------------------
-- Table structure for jurusan
-- ----------------------------
DROP TABLE IF EXISTS `jurusan`;
CREATE TABLE `jurusan`  (
  `kode_jurusan` varchar(5) CHARACTER SET latin1 COLLATE latin1_swedish_ci NOT NULL,
  `nama_jurusan` varchar(50) CHARACTER SET latin1 COLLATE latin1_swedish_ci NULL DEFAULT NULL,
  `kode_prodi` varchar(2) CHARACTER SET latin1 COLLATE latin1_swedish_ci NULL DEFAULT NULL,
  PRIMARY KEY (`kode_jurusan`) USING BTREE
) ENGINE = InnoDB CHARACTER SET = latin1 COLLATE = latin1_swedish_ci ROW_FORMAT = Dynamic;

-- ----------------------------
-- Records of jurusan
-- ----------------------------
INSERT INTO `jurusan` VALUES ('TK01', 'Informatika', NULL);

-- ----------------------------
-- Table structure for kelas
-- ----------------------------
DROP TABLE IF EXISTS `kelas`;
CREATE TABLE `kelas`  (
  `kode` varchar(2) CHARACTER SET latin1 COLLATE latin1_swedish_ci NOT NULL,
  `keterangan` varchar(50) CHARACTER SET latin1 COLLATE latin1_swedish_ci NULL DEFAULT NULL,
  PRIMARY KEY (`kode`) USING BTREE
) ENGINE = InnoDB CHARACTER SET = latin1 COLLATE = latin1_swedish_ci ROW_FORMAT = Dynamic;

-- ----------------------------
-- Records of kelas
-- ----------------------------
INSERT INTO `kelas` VALUES ('L1', 'Lantai 1, Ruang A');

-- ----------------------------
-- Table structure for menu
-- ----------------------------
DROP TABLE IF EXISTS `menu`;
CREATE TABLE `menu`  (
  `menu_id` int(11) NOT NULL AUTO_INCREMENT,
  `label` varchar(255) CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL,
  `status` int(11) NULL DEFAULT NULL,
  `position` int(11) NULL DEFAULT NULL,
  `url` varchar(128) CHARACTER SET utf8 COLLATE utf8_general_ci NULL DEFAULT NULL,
  `description` varchar(255) CHARACTER SET utf8 COLLATE utf8_general_ci NULL DEFAULT NULL,
  `created_date` datetime(0) NULL DEFAULT NULL,
  `updated_date` datetime(0) NULL DEFAULT NULL,
  PRIMARY KEY (`menu_id`) USING BTREE,
  UNIQUE INDEX `name_UNIQUE`(`label`) USING BTREE
) ENGINE = InnoDB AUTO_INCREMENT = 7 CHARACTER SET = utf8 COLLATE = utf8_general_ci ROW_FORMAT = Dynamic;

-- ----------------------------
-- Records of menu
-- ----------------------------
INSERT INTO `menu` VALUES (1, 'Siswa', 1, 1, 'siswa/admin', 'Siswa', '2019-11-03 04:01:01', NULL);
INSERT INTO `menu` VALUES (2, 'Gender', 0, 2, 'gender/admin', 'Gender', '2019-11-03 04:01:28', '2019-11-03 04:12:56');
INSERT INTO `menu` VALUES (3, 'Lokasi Kelas', 1, 3, 'kelas/admin', 'Kelas', '2019-11-03 04:11:55', NULL);
INSERT INTO `menu` VALUES (4, 'Jurusan', 1, 4, 'jurusan/admin', 'Jurusan', '2019-11-03 04:12:17', NULL);
INSERT INTO `menu` VALUES (5, 'Program Studi', 1, 5, 'prodi/admin', 'Prodi', '2019-11-03 04:12:44', NULL);

-- ----------------------------
-- Table structure for prodi
-- ----------------------------
DROP TABLE IF EXISTS `prodi`;
CREATE TABLE `prodi`  (
  `kode_prodi` varchar(2) CHARACTER SET latin1 COLLATE latin1_swedish_ci NOT NULL,
  `prodi` varchar(50) CHARACTER SET latin1 COLLATE latin1_swedish_ci NULL DEFAULT NULL,
  PRIMARY KEY (`kode_prodi`) USING BTREE
) ENGINE = InnoDB CHARACTER SET = latin1 COLLATE = latin1_swedish_ci ROW_FORMAT = Dynamic;

-- ----------------------------
-- Records of prodi
-- ----------------------------
INSERT INTO `prodi` VALUES ('SI', 'Sistem Informasi');

-- ----------------------------
-- Table structure for siswa
-- ----------------------------
DROP TABLE IF EXISTS `siswa`;
CREATE TABLE `siswa`  (
  `no_siswa` varchar(10) CHARACTER SET latin1 COLLATE latin1_swedish_ci NOT NULL,
  `nama_siswa` varchar(50) CHARACTER SET latin1 COLLATE latin1_swedish_ci NULL DEFAULT NULL,
  `images` varchar(100) CHARACTER SET latin1 COLLATE latin1_swedish_ci NULL DEFAULT NULL,
  `kode_gender` varchar(2) CHARACTER SET latin1 COLLATE latin1_swedish_ci NULL DEFAULT NULL,
  `kode_kelas` varchar(2) CHARACTER SET latin1 COLLATE latin1_swedish_ci NULL DEFAULT NULL,
  `jurusan` varchar(5) CHARACTER SET latin1 COLLATE latin1_swedish_ci NULL DEFAULT NULL,
  `kode_prodi` varchar(2) CHARACTER SET latin1 COLLATE latin1_swedish_ci NULL DEFAULT NULL,
  PRIMARY KEY (`no_siswa`) USING BTREE
) ENGINE = InnoDB CHARACTER SET = latin1 COLLATE = latin1_swedish_ci ROW_FORMAT = Dynamic;

-- ----------------------------
-- Records of siswa
-- ----------------------------
INSERT INTO `siswa` VALUES ('7003', 'Antonius Arie', '3446-1572735270.png', '1', 'L1', 'TK01', 'SI');

-- ----------------------------
-- Table structure for user
-- ----------------------------
DROP TABLE IF EXISTS `user`;
CREATE TABLE `user`  (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `username` varchar(100) CHARACTER SET latin1 COLLATE latin1_swedish_ci NULL DEFAULT NULL,
  `password` varchar(200) CHARACTER SET latin1 COLLATE latin1_swedish_ci NULL DEFAULT NULL,
  `nama` varchar(100) CHARACTER SET latin1 COLLATE latin1_swedish_ci NULL DEFAULT NULL,
  `email` varchar(200) CHARACTER SET latin1 COLLATE latin1_swedish_ci NULL DEFAULT NULL,
  `role` varchar(20) CHARACTER SET latin1 COLLATE latin1_swedish_ci NOT NULL,
  `created_by` varchar(50) CHARACTER SET latin1 COLLATE latin1_swedish_ci NULL DEFAULT NULL,
  `updated_by` varchar(50) CHARACTER SET latin1 COLLATE latin1_swedish_ci NULL DEFAULT NULL,
  `created_date` datetime(0) NULL DEFAULT NULL,
  `updated_date` datetime(0) NULL DEFAULT NULL,
  PRIMARY KEY (`id`) USING BTREE
) ENGINE = InnoDB AUTO_INCREMENT = 15 CHARACTER SET = latin1 COLLATE = latin1_swedish_ci ROW_FORMAT = Dynamic;

-- ----------------------------
-- Records of user
-- ----------------------------
INSERT INTO `user` VALUES (1, 'stikom', '2f1cb0aeaa933707511af95607f23819043a912e', 'Administrator', 'stikom@stikombinaniaga.ac.id', 'admin', 'admin', 'stikom', '2019-10-27 14:42:41', '2019-11-03 03:59:32');

SET FOREIGN_KEY_CHECKS = 1;
