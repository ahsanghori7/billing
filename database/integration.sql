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

 Date: 03/04/2023 11:14:53
*/

SET NAMES utf8mb4;
SET FOREIGN_KEY_CHECKS = 0;

-- ----------------------------
-- Table structure for integration
-- ----------------------------
DROP TABLE IF EXISTS `integration`;
CREATE TABLE `integration`  (
  `ID` int(11) NOT NULL AUTO_INCREMENT,
  `ProviderID` int(18) NOT NULL,
  `integration_file` varchar(88) CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL,
  `SubscribeURL` varchar(124) CHARACTER SET utf8 COLLATE utf8_general_ci NULL DEFAULT NULL,
  `SendPinURL` varchar(124) CHARACTER SET utf8 COLLATE utf8_general_ci NULL DEFAULT NULL,
  `ResendPinURL` varchar(124) CHARACTER SET utf8 COLLATE utf8_general_ci NULL DEFAULT NULL,
  `VerifyPinURL` varchar(124) CHARACTER SET utf8 COLLATE utf8_general_ci NULL DEFAULT NULL,
  `UnsubscribeURL` varchar(124) CHARACTER SET utf8 COLLATE utf8_general_ci NULL DEFAULT NULL,
  `SendFreeMTURL` varchar(124) CHARACTER SET utf8 COLLATE utf8_general_ci NULL DEFAULT NULL,
  `SendMTURL` varchar(124) CHARACTER SET utf8 COLLATE utf8_general_ci NULL DEFAULT NULL,
  `BillingURL` varchar(255) CHARACTER SET utf8 COLLATE utf8_general_ci NULL DEFAULT NULL,
  `wrong_mo_url` varchar(124) CHARACTER SET utf8 COLLATE utf8_general_ci NULL DEFAULT NULL,
  `EnableSubscription` tinyint(1) NOT NULL DEFAULT 1,
  `EnableFreeContent` tinyint(1) NOT NULL DEFAULT 1,
  `EnableContent` tinyint(1) NOT NULL DEFAULT 1,
  `MessageEncoded` int(11) NOT NULL,
  `Verification` tinyint(4) NULL DEFAULT 0,
  `system_log` varchar(88) CHARACTER SET utf8 COLLATE utf8_general_ci NULL DEFAULT NULL,
  `unique_by_sc` tinyint(1) NOT NULL DEFAULT 0,
  `status` tinyint(1) NOT NULL DEFAULT 1,
  `BillingEnabled` tinyint(1) NULL DEFAULT 0,
  PRIMARY KEY (`ID`) USING BTREE,
  INDEX `SendMTURL`(`SendMTURL`) USING BTREE,
  INDEX `SendFreeMTURL`(`SendFreeMTURL`) USING BTREE,
  INDEX `SendPinURL`(`SendPinURL`) USING BTREE,
  INDEX `system_log`(`system_log`) USING BTREE
) ENGINE = InnoDB AUTO_INCREMENT = 32 CHARACTER SET = utf8 COLLATE = utf8_general_ci ROW_FORMAT = Dynamic;

-- ----------------------------
-- Records of integration
-- ----------------------------
INSERT INTO `integration` VALUES (1, 1, 'Veoo', 'http://api.atlas-me.com/veoo/DirectSubscription.php', 'http://api.atlas-me.com/veoo/UserPinNetwork.php', NULL, 'http://api.atlas-me.com/veoo/UserPinVerification.php', '', 'http://api.atlas-me.com/veoo/SendMessage.php', 'http://api.atlas-me.com/veoo/SendPremiumMessage.php', NULL, 'http://api.atlas-me.com/veoo/SendMessage.php', 0, 1, 1, 1, 0, 'veoo_system_log', 0, 1, 0);
INSERT INTO `integration` VALUES (2, 2, 'Palestine - DCB', NULL, 'http://api.atlas-me.com/Palestine/PinRequest.php', NULL, 'http://api.atlas-me.com/Palestine/PinVerification.php', NULL, NULL, 'http://api.atlas-me.com/Palestine/SendSMS.php', NULL, '', 0, 0, 0, 1, 0, 'palestine_system_log', 0, 1, 0);
INSERT INTO `integration` VALUES (4, 1, 'Blink', '', NULL, NULL, NULL, 'http://api.atlas-me.com/Blink/Unsubscribe.php', 'http://api.atlas-me.com/Blink/SendMessages.php\r\n', 'http://api.atlas-me.com/Blink/SendMessages.php', NULL, 'http://api.atlas-me.com/Blink/SendMessages.php', 0, 1, 1, 0, 0, '', 0, 1, 0);
INSERT INTO `integration` VALUES (5, 3, 'DV', NULL, 'http://api.atlas-me.com/DVDCB/SendPin.php', NULL, 'http://billing.atlas-me.com/webapi/PinVerification.php', NULL, 'http://api.atlas-me.com/DVDCB/mt.php', 'http://api.atlas-me.com/DVDCB/mt.php', NULL, 'http://api.atlas-me.com/DVDCB/mt.php', 0, 1, 1, 0, 0, 'dvm_system_log', 0, 1, 0);
INSERT INTO `integration` VALUES (6, 8, 'Etisalat', NULL, 'http://api.atlas-me.com/Etisalat/PinPush.php', NULL, 'http://api.atlas-me.com/Etisalat/Activation.php', 'http://api.atlas-me.com/Etisalat/Unsubscribe.php', 'http://api.atlas-me.com/Etisalat/MT.php', 'http://api.atlas-me.com/Etisalat/MT.php', NULL, 'http://api.atlas-me.com/Etisalat/MT.php', 0, 0, 0, 0, 0, 'etisalat_system_log', 0, 1, 0);
INSERT INTO `integration` VALUES (7, 7, 'Egypt', NULL, 'http://api.atlas-me.com/VictoryLink/RequestPin.php', 'http://api.atlas-me.com/VictoryLink/RequestPin.php', 'http://api.atlas-me.com/VictoryLink/ConfirmPIN.php', 'http://api.atlas-me.com/VictoryLink/Unsubscribe.php', 'http://api.atlas-me.com/VictoryLink/SendSMS.php', 'http://api.atlas-me.com/VictoryLink/SendSMS.php', NULL, 'http://api.atlas-me.com/VictoryLink/SendSMS.php', 0, 1, 1, 0, 0, 'vl_system_log', 0, 1, 0);
INSERT INTO `integration` VALUES (8, 6, 'Mobily', NULL, 'http://api.atlas-me.com/Mobily/SendPin.php', 'http://api.atlas-me.com/Mobily/SendPin.php', 'http://api.atlas-me.com/Mobily/PinVerification.php', NULL, NULL, NULL, NULL, '', 0, 1, 1, 0, 0, 'mobily_system_log', 0, 1, 0);
INSERT INTO `integration` VALUES (9, 5, 'Asiacell', NULL, 'http://api.atlas-me.com/Asiacell/SendPin.php', 'http://api.atlas-me.com/Asiacell/SendPin.php', 'http://billing.atlas-me.com/verify.php', NULL, 'http://api.atlas-me.com/Asiacell/sendmt.php', 'http://api.atlas-me.com/Asiacell/sendmt.php', NULL, 'http://api.atlas-me.com/Asiacell/sendmt.php', 0, 1, 1, 1, 1, NULL, 0, 1, 1);
INSERT INTO `integration` VALUES (10, 5, 'korek', 'http://api.atlas-me.com/korek/directsub.php', 'http://api.atlas-me.com/korek/SendMessage.php?Pin=Pin', 'http://api.atlas-me.com/korek/SendMessage.php?Pin=Pin', 'http://billing.atlas-me.com/verify.php', 'http://api.atlas-me.com/korek/unsubscribe.php', 'http://api.atlas-me.com/korek/SendMessage.php?Free=Free', 'http://api.atlas-me.com/korek/SendMessage.php?Free=Free', NULL, 'http://api.atlas-me.com/korek/SendMessage.php?Free=Free', 1, 1, 1, 1, 1, 'korek_system_log', 1, 1, 0);
INSERT INTO `integration` VALUES (11, 9, 'Ooredoo', 'http://api.atlas-me.com/ooredoo/subscribe.php', 'http://api.atlas-me.com/ooredoo/SendPin.php', NULL, 'http://billing.atlas-me.com/verify.php', 'http://api.atlas-me.com/ooredoo/unsubscribe.php', 'http://api.atlas-me.com/ooredoo/SendMT.php', 'http://api.atlas-me.com/ooredoo/SendMT.php', NULL, 'http://api.atlas-me.com/ooredoo/SendMT.php', 1, 1, 0, 0, 1, 'ooredoo_system_log', 0, 1, 0);
INSERT INTO `integration` VALUES (12, 1, 'Jordan', 'http://api.atlas-me.com/jordan/sub.php', 'http://api.atlas-me.com/jordan/SendPin.php', 'http://api.atlas-me.com/jordan/SendPin.php', 'http://api.atlas-me.com/jordan/PinVerify.php', NULL, 'http://api.atlas-me.com/jordan/SendFree.php', 'http://api.atlas-me.com/jordan/SendMessage.php', NULL, 'http://api.atlas-me.com/jordan/SendFree.php', 0, 1, 1, 1, 0, 'jordan_system_log', 0, 1, 0);
INSERT INTO `integration` VALUES (13, 10, 'kuwait', NULL, 'http://api.atlas-me.com/Kuwait/SendPin.php', 'http://api.atlas-me.com/Kuwait/SendPin.php', 'http://billing.atlas-me.com/verify.php', NULL, 'http://api.atlas-me.com/Kuwait/SendPin.php', 'http://api.atlas-me.com/Kuwait/SendPin.php', NULL, 'http://api.atlas-me.com/Kuwait/SendPin.php', 0, 1, 1, 8, 0, 'kuwait_system_log', 0, 1, 0);
INSERT INTO `integration` VALUES (14, 11, 'Idex', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '', 0, 1, 1, 1, 0, 'idex_system_log', 0, 1, 0);
INSERT INTO `integration` VALUES (15, 2, 'Palestine - MT', NULL, 'http://api.atlas-me.com/Palestine/MT/PinRequest.php', NULL, 'http://api.atlas-me.com/Palestine/MT/PinVerification.php', NULL, NULL, 'http://api.atlas-me.com/Palestine/SendSMS.php', NULL, '', 0, 1, 1, 1, 0, 'palestine_system_log', 0, 1, 0);
INSERT INTO `integration` VALUES (16, 2, 'du', NULL, 'http://api.atlas-me.com/du/sendOTP.php', NULL, 'http://api.atlas-me.com/du/ValidateOTP.php', NULL, 'http://api.atlas-me.com/du/SendMessage.php', 'http://api.atlas-me.com/du/SendMessage.php', 'http://api.atlas-me.com/du/DirectBilling.php', 'http://api.atlas-me.com/du/SendMessage.php', 0, 1, 1, 0, 0, 'du_system_log', 0, 1, 1);
INSERT INTO `integration` VALUES (17, 2, 'telenor', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0, 0, 0, 0, 0, 'telenor_system_log', 0, 1, 0);
INSERT INTO `integration` VALUES (18, 11, 'Idex ksa', NULL, 'http://dev.adbilling.me/integrations/mobimind/SendPin.php', NULL, 'http://dev.adbilling.me/integrations/mobimind/PinVerification.php', NULL, NULL, NULL, NULL, '', 0, 1, 1, 1, 0, 'idex_ksa_system_log', 0, 1, 0);
INSERT INTO `integration` VALUES (19, 1, 'IMImobile', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0, 1, 1, 0, 0, 'imi_system_log', 0, 1, 0);
INSERT INTO `integration` VALUES (20, 1, 'Batelco', NULL, 'http://api.atlas-me.com/batelco/SendPin.php', 'http://api.atlas-me.com/batelco/SendPin.php', 'http://api.atlas-me.com/batelco/ValidatePin.php', 'http://api.atlas-me.com/batelco/Unsubscribe.php', 'http://api.atlas-me.com/batelco/MT.php', 'http://api.atlas-me.com/batelco/MT.php', NULL, NULL, 0, 0, 0, 0, 0, 'batelco_system_log', 0, 1, 0);
INSERT INTO `integration` VALUES (21, 1, 'Viva Bahrain', NULL, 'http://dev.adbilling.me/integrations/viva_bahrain/SendPin.php', 'http://api.atlas-me.com/viva_bahrain/SendPin.php', 'http://api.atlas-me.com/viva_bahrain/ValidatePin.php', 'http://api.atlas-me.com/viva_bahrain/Unsubscribe.php', 'http://api.atlas-me.com/viva_bahrain/MT.php', 'http://api.atlas-me.com/viva_bahrain/MT.php', NULL, NULL, 0, 0, 0, 0, 0, 'viva_bahrain_system_log', 0, 1, 0);
INSERT INTO `integration` VALUES (22, 1, 'Allterco', NULL, '', '', '', '', '', '', NULL, NULL, 0, 0, 0, 0, 0, 'allterco_system_log', 0, 1, 0);
INSERT INTO `integration` VALUES (23, 1, 'Dubai', NULL, NULL, NULL, NULL, 'http://api.atlas-me.com/dubai/Unsubscribe.php', 'http://api.atlas-me.com/dubai/MT.php', 'http://api.atlas-me.com/dubai/MT.php', NULL, NULL, 0, 0, 0, 0, 0, 'dubai_system_log', 0, 1, 0);
INSERT INTO `integration` VALUES (24, 1, 'zain kuwait', NULL, 'http://api.atlas-me.com/SLA/pin.php', 'http://api.atlas-me.com/SLA/pin.php', 'http://api.atlas-me.com/SLA/ValidatePin.php', 'http://api.atlas-me.com/SLA/Unsubscribe.php', 'http://api.atlas-me.com/SLA/sendSMS.php', 'http://api.atlas-me.com/SLA/sendSMS.php', NULL, NULL, 0, 0, 0, 0, 0, 'sla_main_log', 0, 1, 0);
INSERT INTO `integration` VALUES (25, 1, 'asiacell dcb', NULL, 'http://api.atlas-me.com/asiacellDCB/SendPin.php', 'http://api.atlas-me.com/asiacellDCB/SendPin.php', 'http://api.atlas-me.com/asiacellDCB/ValidatePin.php', NULL, NULL, NULL, NULL, NULL, 0, 0, 0, 0, 0, 'asiacell_dcb_main_log', 0, 1, 0);
INSERT INTO `integration` VALUES (26, 1, 'Mobily KSA', NULL, 'http://dev.adbilling.me/integrations/MobilyKSA/SendPin.php', 'http://api.atlas-me.com/MobilyKSA/SendPin.php', 'http://dev.adbilling.me/integrations/MobilyKSA/VerifyPin.php', 'http://api.atlas-me.com/MobilyKSA/Unsubscribe.php', 'http://dev.adbilling.me/integrations/MobilyKSA/SendMT.php', 'http://dev.adbilling.me/integrations/MobilyKSA/SendMT.php', NULL, NULL, 0, 0, 0, 0, 0, 'mobily_system_log', 0, 1, 0);
INSERT INTO `integration` VALUES (27, 5, 'Mediaworld Iraq Zain', NULL, 'http://api.atlas-me.com/MediaworldZainIraq/SendPin.php', 'http://api.atlas-me.com/MediaworldZainIraq/SendPin.php', 'http://api.atlas-me.com/MediaworldZainIraq/VerifyPin.php', 'http://api.atlas-me.com/MediaworldZainIraq/Unsubscribe.php', '', '', NULL, '', 0, 0, 0, 1, 0, 'mediaworld_zain_iraq_system_log', 0, 1, 0);
INSERT INTO `integration` VALUES (28, 1, 'relario', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0, 0, 0, 0, 0, 'relario_system_log', 0, 1, 0);
INSERT INTO `integration` VALUES (29, 5, 'ximpay', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 1, 1, 1, 0, 0, NULL, 0, 1, 0);
INSERT INTO `integration` VALUES (30, 13, 'Actel', NULL, 'http://dev.adbilling.me/integrations/actel/sendotp.php', NULL, 'http://dev.adbilling.me/integrations/actel/confirmotp.php', NULL, 'http://dev.adbilling.me/integrations/actel/sendmt.php', 'http://dev.adbilling.me/integrations/actel/sendmt.php', NULL, NULL, 1, 1, 1, 0, 0, NULL, 0, 1, 0);
INSERT INTO `integration` VALUES (31, 1, 'mondiapay', NULL, 'http://dev.adbilling.me/integrations/mondiapay/sendPin.php', 'http://dev.adbilling.me/integrations/mondiapay/sendPin.php', 'http://adbilling.me/integrations/mondiapay/confirmPin.php', NULL, NULL, NULL, NULL, NULL, 1, 1, 1, 0, 0, NULL, 0, 1, 0);

SET FOREIGN_KEY_CHECKS = 1;
