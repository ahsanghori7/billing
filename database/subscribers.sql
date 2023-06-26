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

 Date: 12/04/2023 14:13:42
*/

SET NAMES utf8mb4;
SET FOREIGN_KEY_CHECKS = 0;

-- ----------------------------
-- Table structure for subscribers
-- ----------------------------
DROP TABLE IF EXISTS `subscribers`;
CREATE TABLE `subscribers`  (
  `ID` int(11) NOT NULL AUTO_INCREMENT,
  `status` int(1) NOT NULL,
  `msisdn` varchar(88) CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL,
  `Country_ID` int(18) NOT NULL,
  `Operators_ID` int(11) NULL DEFAULT NULL,
  `Shortcode` int(18) NULL DEFAULT NULL,
  `FreeShortcode` varchar(15) CHARACTER SET utf8 COLLATE utf8_general_ci NULL DEFAULT NULL,
  `Service_ID` int(18) NOT NULL,
  `subService_ID` int(18) NOT NULL,
  `ContentGroup` int(11) NOT NULL,
  `pin` varchar(18) CHARACTER SET utf8 COLLATE utf8_general_ci NULL DEFAULT NULL,
  `Cseq` int(18) NOT NULL,
  `Subdate` datetime(0) NOT NULL DEFAULT CURRENT_TIMESTAMP(0),
  `deliveryState` varchar(88) CHARACTER SET utf8 COLLATE utf8_general_ci NULL DEFAULT NULL,
  `content_folders_ID` int(18) NULL DEFAULT NULL,
  `source` varchar(88) CHARACTER SET utf8 COLLATE utf8_general_ci NULL DEFAULT 'Atlas',
  `subsource` varchar(88) CHARACTER SET utf8 COLLATE utf8_general_ci NULL DEFAULT 'Atlas',
  `NextContent` varchar(88) CHARACTER SET utf8 COLLATE utf8_general_ci NULL DEFAULT NULL,
  `SuccessBilling` int(11) NULL DEFAULT 0,
  `BillAttempts` int(88) NULL DEFAULT 0,
  `IP` varchar(88) CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL,
  `minisite` varchar(124) CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL,
  `LastSuccBill` varchar(88) CHARACTER SET utf8 COLLATE utf8_general_ci NULL DEFAULT NULL,
  `Integration_ID` int(11) NULL DEFAULT NULL,
  `FirstBilling` varchar(88) CHARACTER SET utf8 COLLATE utf8_general_ci NULL DEFAULT NULL,
  `LastDelivery` varchar(88) CHARACTER SET utf8 COLLATE utf8_general_ci NULL DEFAULT NULL,
  `NextBilling` timestamp(0) NULL DEFAULT NULL,
  `NextRetry` varchar(88) CHARACTER SET utf8 COLLATE utf8_general_ci NULL DEFAULT NULL,
  `Leads_ID` int(18) NOT NULL,
  `info` text CHARACTER SET utf8 COLLATE utf8_general_ci NULL,
  `Retries` int(18) NULL DEFAULT NULL,
  `Used` tinyint(4) NULL DEFAULT 0,
  `ProcessingMessage` tinyint(1) NOT NULL DEFAULT 0,
  `SubsLock` tinyint(1) NOT NULL DEFAULT 0,
  `IsFree` tinyint(1) NOT NULL DEFAULT 0,
  `FreeCounter` tinyint(4) NOT NULL,
  `CountSent` int(4) NOT NULL DEFAULT 0,
  `Validity` tinyint(1) UNSIGNED NOT NULL DEFAULT 0,
  `is_billed` tinyint(1) NOT NULL DEFAULT 0,
  `billing_level` int(11) NULL DEFAULT 1,
  `is_trial` tinyint(1) NULL DEFAULT NULL,
  `click_id` varchar(255) CHARACTER SET utf8 COLLATE utf8_general_ci NULL DEFAULT NULL,
  PRIMARY KEY (`ID`) USING BTREE,
  UNIQUE INDEX `msisdn_2`(`msisdn`, `Service_ID`, `subService_ID`, `Shortcode`) USING BTREE,
  INDEX `Integration`(`Integration_ID`) USING BTREE,
  INDEX `msisdn`(`msisdn`) USING BTREE,
  INDEX `pin`(`pin`) USING BTREE,
  INDEX `Leads_ID`(`Leads_ID`) USING BTREE,
  INDEX `CSeq`(`Cseq`) USING BTREE,
  INDEX `subService_ID`(`subService_ID`) USING BTREE,
  INDEX `Integration_ID`(`Integration_ID`) USING BTREE,
  INDEX `source`(`source`) USING BTREE,
  INDEX `subsource`(`subsource`) USING BTREE,
  INDEX `Operators_ID`(`Operators_ID`) USING BTREE,
  INDEX `source_2`(`source`) USING BTREE,
  INDEX `subsource_2`(`subsource`) USING BTREE,
  CONSTRAINT `integration_fk` FOREIGN KEY (`Integration_ID`) REFERENCES `integration` (`ID`) ON DELETE SET NULL ON UPDATE CASCADE,
  CONSTRAINT `operator_id` FOREIGN KEY (`Operators_ID`) REFERENCES `operators_v2` (`id`) ON DELETE SET NULL ON UPDATE CASCADE
) ENGINE = InnoDB AUTO_INCREMENT = 3145021 CHARACTER SET = utf8 COLLATE = utf8_general_ci ROW_FORMAT = Dynamic;

SET FOREIGN_KEY_CHECKS = 1;
