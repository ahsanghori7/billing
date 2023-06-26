/*
 Navicat Premium Data Transfer

 Source Server         : Billing
 Source Server Type    : MySQL
 Source Server Version : 50740
 Source Host           : 35.234.146.176:3306
 Source Schema         : billing

 Target Server Type    : MySQL
 Target Server Version : 50740
 File Encoding         : 65001

 Date: 03/04/2023 14:18:49
*/

SET NAMES utf8mb4;
SET FOREIGN_KEY_CHECKS = 0;

-- ----------------------------
-- Table structure for leads
-- ----------------------------
DROP TABLE IF EXISTS `leads`;
CREATE TABLE `leads`  (
  `ID` int(11) NOT NULL AUTO_INCREMENT,
  `msisdn` varchar(88) CHARACTER SET utf8 COLLATE utf8_general_ci NULL DEFAULT NULL,
  `status` int(1) NOT NULL,
  `Subdate` datetime(0) NOT NULL,
  `Integration_ID` int(11) NULL DEFAULT NULL,
  `Country_ID` int(18) NOT NULL,
  `Operators_ID` int(18) NOT NULL,
  `Service_ID` int(18) NOT NULL,
  `subService_ID` int(18) NULL DEFAULT NULL,
  `ContentGroup` varchar(88) CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL,
  `Shortcode` varchar(10) CHARACTER SET utf8 COLLATE utf8_general_ci NULL DEFAULT NULL,
  `FreeShortcode` varchar(15) CHARACTER SET utf8 COLLATE utf8_general_ci NULL DEFAULT NULL,
  `pin` varchar(18) CHARACTER SET utf8 COLLATE utf8_general_ci NULL DEFAULT NULL,
  `source` varchar(88) CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL DEFAULT 'Atlas',
  `subsource` varchar(250) CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL DEFAULT 'Atlas',
  `minisite` varchar(124) CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL DEFAULT 'Atlas',
  `IP` varchar(88) CHARACTER SET utf8 COLLATE utf8_general_ci NULL DEFAULT NULL,
  `NextContent` varchar(88) CHARACTER SET utf8 COLLATE utf8_general_ci NULL DEFAULT NULL,
  `CSeq` int(18) NOT NULL,
  `unsubDate` datetime(0) NULL DEFAULT NULL,
  `unsubCode` int(18) NULL DEFAULT NULL,
  `BillAttempts` int(11) NULL DEFAULT 0,
  `SuccessBilling` int(11) NULL DEFAULT 0,
  `FirstBilling` varchar(88) CHARACTER SET utf8 COLLATE utf8_general_ci NULL DEFAULT NULL,
  `LastSuccBill` varchar(88) CHARACTER SET utf8 COLLATE utf8_general_ci NULL DEFAULT NULL,
  `LastDelivery` varchar(88) CHARACTER SET utf8 COLLATE utf8_general_ci NULL DEFAULT NULL,
  `deliveryState` varchar(88) CHARACTER SET utf8 COLLATE utf8_general_ci NULL DEFAULT NULL,
  `SubsLock` int(1) NULL DEFAULT 0,
  `NextRetry` varchar(88) CHARACTER SET utf8 COLLATE utf8_general_ci NULL DEFAULT NULL,
  `info` text CHARACTER SET utf8 COLLATE utf8_general_ci NULL,
  `Retries` int(18) NULL DEFAULT NULL,
  `unsubComment` text CHARACTER SET utf8 COLLATE utf8_general_ci NULL,
  `IsFree` tinyint(1) NULL DEFAULT 0,
  `FreeCounter` tinyint(4) NOT NULL,
  `CountSent` int(4) NULL DEFAULT 0,
  `locked` tinyint(1) NULL DEFAULT 0,
  `click_id` varchar(255) CHARACTER SET utf8 COLLATE utf8_general_ci NULL DEFAULT NULL,
  PRIMARY KEY (`ID`) USING BTREE,
  INDEX `Integration`(`Integration_ID`) USING BTREE,
  INDEX `pin`(`pin`) USING BTREE,
  INDEX `Operators_ID`(`Operators_ID`) USING BTREE,
  INDEX `Country_ID`(`Country_ID`) USING BTREE,
  INDEX `Service_ID`(`Service_ID`) USING BTREE,
  INDEX `subService_ID`(`subService_ID`) USING BTREE,
  INDEX `ContentGroup`(`ContentGroup`) USING BTREE,
  INDEX `source`(`source`) USING BTREE,
  INDEX `subsource`(`subsource`) USING BTREE,
  INDEX `msisdn`(`msisdn`) USING BTREE,
  CONSTRAINT `lead_integration_fk` FOREIGN KEY (`Integration_ID`) REFERENCES `integration` (`ID`) ON DELETE SET NULL ON UPDATE CASCADE
) ENGINE = InnoDB AUTO_INCREMENT = 29454120 CHARACTER SET = utf8 COLLATE = utf8_general_ci ROW_FORMAT = Dynamic;

SET FOREIGN_KEY_CHECKS = 1;
