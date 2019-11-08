/*
 Navicat Premium Data Transfer

 Source Server         : AWS Becode
 Source Server Type    : MariaDB
 Source Server Version : 100221
 Source Host           : dbecode.clokakyc5e3r.eu-west-1.rds.amazonaws.com:3306
 Source Schema         : cogip

 Target Server Type    : MariaDB
 Target Server Version : 100221
 File Encoding         : 65001

 Date: 08/11/2019 09:05:28
*/

SET NAMES utf8mb4;
SET FOREIGN_KEY_CHECKS = 0;

-- ----------------------------
-- Table structure for companies
-- ----------------------------
DROP TABLE IF EXISTS `companies`;
CREATE TABLE `companies` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `country` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `vat` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `role` int(11) NOT NULL,
  `createdAt` timestamp NOT NULL DEFAULT current_timestamp(),
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=117 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- ----------------------------
-- Records of companies
-- ----------------------------
BEGIN;
INSERT INTO `companies` VALUES (2, 'McDonalds', 'United States', '83728', 0, '2019-10-29 14:47:42');
INSERT INTO `companies` VALUES (3, 'Base', 'Belgium', '232398', 0, '2019-10-29 14:47:55');
INSERT INTO `companies` VALUES (4, 'Proximus', 'Belgium', '337939379', 1, '2019-10-31 15:12:30');
INSERT INTO `companies` VALUES (5, 'Uber', 'Cocos (Keeling) Islands', '3793793793793', 1, '2019-10-31 15:12:46');
INSERT INTO `companies` VALUES (6, 'Canal+', 'France', '6836833933', 0, '2019-10-31 15:13:29');
INSERT INTO `companies` VALUES (7, 'Placerat Eget Corporation', 'Grenada', '67209239599', 1, '2019-10-01 00:00:00');
INSERT INTO `companies` VALUES (8, 'Nunc Sed Libero Ltd', 'Saudi Arabia', '87584325299', 1, '2019-03-27 00:00:00');
INSERT INTO `companies` VALUES (9, 'Malesuada Vel Consulting', 'Guyana', '26790017399', 1, '2019-01-12 00:00:00');
INSERT INTO `companies` VALUES (10, 'Praesent Eu Nulla Industries', 'Yemen', '5907724599', 0, '2020-07-19 00:00:00');
INSERT INTO `companies` VALUES (11, 'Dapibus Limited', 'Qatar', '31681129299', 0, '2020-10-26 00:00:00');
INSERT INTO `companies` VALUES (12, 'Elementum Associates', 'Kenya', '60950538599', 0, '2019-01-27 00:00:00');
INSERT INTO `companies` VALUES (13, 'Sed Pharetra Corp.', 'Ecuador', '20883784699', 1, '2019-10-10 00:00:00');
INSERT INTO `companies` VALUES (14, 'Nostra Foundation', 'Panama', '73505129499', 1, '2019-05-12 00:00:00');
INSERT INTO `companies` VALUES (15, 'Dolor Industries', 'Guyana', '99998497299', 0, '2018-11-09 00:00:00');
INSERT INTO `companies` VALUES (16, 'Nulla Associates', 'Bahamas', '63426662399', 1, '2019-09-05 00:00:00');
INSERT INTO `companies` VALUES (17, 'Vulputate Nisi PC', 'Sierra Leone', '99274006999', 0, '2020-04-18 00:00:00');
INSERT INTO `companies` VALUES (18, 'Imperdiet Nec LLP', 'Angola', '51827297099', 0, '2020-08-19 00:00:00');
INSERT INTO `companies` VALUES (19, 'Risus Nulla Corporation', 'Monaco', '40959157799', 1, '2020-09-23 00:00:00');
INSERT INTO `companies` VALUES (20, 'Lacus Nulla Institute', 'Italy', '67418670999', 1, '2018-11-13 00:00:00');
INSERT INTO `companies` VALUES (21, 'Placerat Velit Ltd', 'Bhutan', '95447400499', 1, '2019-04-20 00:00:00');
INSERT INTO `companies` VALUES (22, 'Luctus Ut Pellentesque Company', 'Luxembourg', '74660537199', 0, '2018-11-18 00:00:00');
INSERT INTO `companies` VALUES (23, 'Libero Inc.', 'Ireland', '23629697399', 1, '2020-07-12 00:00:00');
INSERT INTO `companies` VALUES (24, 'Vel Company', 'Trinidad and Tobago', '73484966099', 1, '2020-10-20 00:00:00');
INSERT INTO `companies` VALUES (25, 'Ultrices PC', 'Zimbabwe', '16918144799', 1, '2018-12-04 00:00:00');
INSERT INTO `companies` VALUES (26, 'Est Nunc Institute', 'Saint Helena, Ascension and Tristan da Cunha', '83363204899', 0, '2019-03-02 00:00:00');
INSERT INTO `companies` VALUES (27, 'Sagittis Augue Inc.', 'Paraguay', '50302066899', 0, '2020-06-18 00:00:00');
INSERT INTO `companies` VALUES (28, 'Vestibulum Associates', 'United Arab Emirates', '24625227599', 0, '2020-04-18 00:00:00');
INSERT INTO `companies` VALUES (29, 'Ac Libero Consulting', 'Jordan', '69397751299', 0, '2020-08-26 00:00:00');
INSERT INTO `companies` VALUES (30, 'Nec LLP', 'Belize', '67854910099', 0, '2020-10-03 00:00:00');
INSERT INTO `companies` VALUES (31, 'Sollicitudin Consulting', 'Honduras', '70540539099', 0, '2020-01-31 00:00:00');
INSERT INTO `companies` VALUES (32, 'Eu Inc.', 'Egypt', '35991149499', 0, '2019-02-10 00:00:00');
INSERT INTO `companies` VALUES (33, 'Id Company', 'Latvia', '20742228799', 1, '2020-09-30 00:00:00');
INSERT INTO `companies` VALUES (34, 'Lobortis PC', 'Georgia', '31336624599', 0, '2020-04-07 00:00:00');
INSERT INTO `companies` VALUES (35, 'Et Ultrices LLP', 'Malawi', '53252311899', 1, '2019-01-11 00:00:00');
INSERT INTO `companies` VALUES (36, 'Convallis Corp.', 'Greenland', '62641379299', 0, '2020-09-22 00:00:00');
INSERT INTO `companies` VALUES (37, 'Donec Tempor Est LLP', 'Sint Maarten', '91647893999', 0, '2019-07-26 00:00:00');
INSERT INTO `companies` VALUES (38, 'Eget Associates', 'Israel', '70241513699', 1, '2019-07-22 00:00:00');
INSERT INTO `companies` VALUES (39, 'Mauris Suspendisse Aliquet Corp.', 'Norfolk Island', '71836164899', 1, '2020-08-10 00:00:00');
INSERT INTO `companies` VALUES (40, 'Orci In Corporation', 'French Guiana', '24413317699', 1, '2020-10-30 00:00:00');
INSERT INTO `companies` VALUES (41, 'Massa Rutrum Foundation', 'Puerto Rico', '57666559499', 0, '2019-04-07 00:00:00');
INSERT INTO `companies` VALUES (42, 'Lobortis Augue Limited', 'Afghanistan', '23907335099', 1, '2020-09-20 00:00:00');
INSERT INTO `companies` VALUES (43, 'Accumsan Convallis Ltd', 'French Polynesia', '49640906099', 0, '2019-01-09 00:00:00');
INSERT INTO `companies` VALUES (44, 'Mauris PC', 'Senegal', '22702605399', 1, '2018-11-24 00:00:00');
INSERT INTO `companies` VALUES (45, 'Tincidunt LLP', 'Aruba', '65872152499', 0, '2019-03-24 00:00:00');
INSERT INTO `companies` VALUES (46, 'Tortor Integer Aliquam Foundation', 'Central African Republic', '25323260699', 1, '2019-05-23 00:00:00');
INSERT INTO `companies` VALUES (47, 'Libero Proin Mi Corp.', 'Senegal', '13423406899', 0, '2020-03-20 00:00:00');
INSERT INTO `companies` VALUES (48, 'Leo Associates', 'Northern Mariana Islands', '34652951799', 0, '2019-08-16 00:00:00');
INSERT INTO `companies` VALUES (49, 'Dolor Tempus Non Company', 'Viet Nam', '463712299', 1, '2019-08-11 00:00:00');
INSERT INTO `companies` VALUES (50, 'Primis Inc.', 'Bolivia', '50967054199', 1, '2020-01-22 00:00:00');
INSERT INTO `companies` VALUES (51, 'Luctus Ipsum Leo Institute', 'Montserrat', '23601014199', 1, '2020-07-19 00:00:00');
INSERT INTO `companies` VALUES (52, 'Tristique Aliquet Corp.', 'Macedonia', '41815378999', 0, '2020-03-12 00:00:00');
INSERT INTO `companies` VALUES (53, 'Dolor PC', 'Comoros', '15706376899', 0, '2019-01-17 00:00:00');
INSERT INTO `companies` VALUES (54, 'Sem Magna LLC', 'Burundi', '56335963099', 0, '2019-09-13 00:00:00');
INSERT INTO `companies` VALUES (55, 'Enim Limited', 'Sao Tome and Principe', '91302747299', 1, '2018-12-13 00:00:00');
INSERT INTO `companies` VALUES (56, 'Cras Incorporated', 'Gambia', '32357597399', 1, '2019-07-10 00:00:00');
INSERT INTO `companies` VALUES (57, 'Et Foundation', 'Nepal', '60220345299', 0, '2020-02-14 00:00:00');
INSERT INTO `companies` VALUES (58, 'Velit Pellentesque Company', 'Paraguay', '68964596499', 1, '2019-02-09 00:00:00');
INSERT INTO `companies` VALUES (59, 'Gravida Corporation', 'Honduras', '27590929399', 0, '2019-11-02 00:00:00');
INSERT INTO `companies` VALUES (60, 'Mus Incorporated', 'Ukraine', '24331006399', 1, '2019-10-06 00:00:00');
INSERT INTO `companies` VALUES (61, 'Sed Inc.', 'Guadeloupe', '7332689899', 0, '2020-06-29 00:00:00');
INSERT INTO `companies` VALUES (62, 'Scelerisque Neque Sed Inc.', 'Kuwait', '81960130499', 0, '2020-10-23 00:00:00');
INSERT INTO `companies` VALUES (63, 'Sed Consulting', 'Brazil', '18432341999', 0, '2020-05-31 00:00:00');
INSERT INTO `companies` VALUES (64, 'Nulla Dignissim Foundation', 'France', '34427981499', 1, '2020-08-16 00:00:00');
INSERT INTO `companies` VALUES (65, 'Et Rutrum Institute', 'Saint Lucia', '67960468699', 0, '2019-10-14 00:00:00');
INSERT INTO `companies` VALUES (66, 'Magna Tellus Industries', 'Svalbard and Jan Mayen Islands', '29937369499', 1, '2020-08-17 00:00:00');
INSERT INTO `companies` VALUES (67, 'In Lobortis Tellus Ltd', 'Egypt', '87246658299', 0, '2020-06-19 00:00:00');
INSERT INTO `companies` VALUES (68, 'Sit Amet Lorem Limited', 'Cape Verde', '29822712499', 1, '2020-02-26 00:00:00');
INSERT INTO `companies` VALUES (69, 'Orci Associates', 'Lithuania', '19760708899', 1, '2020-10-01 00:00:00');
INSERT INTO `companies` VALUES (70, 'Risus Inc.', 'Congo (Brazzaville)', '39365896199', 1, '2019-01-29 00:00:00');
INSERT INTO `companies` VALUES (71, 'Penatibus Et Magnis Company', 'Guadeloupe', '63415443999', 0, '2019-04-20 00:00:00');
INSERT INTO `companies` VALUES (72, 'Amet Consectetuer Institute', 'Iceland', '40966970199', 0, '2019-05-26 00:00:00');
INSERT INTO `companies` VALUES (73, 'Eget Tincidunt Dui Limited', 'Central African Republic', '20287303899', 1, '2019-04-14 00:00:00');
INSERT INTO `companies` VALUES (74, 'Donec Foundation', 'Faroe Islands', '53473134399', 0, '2019-07-01 00:00:00');
INSERT INTO `companies` VALUES (75, 'Quam Curabitur Company', 'Barbados', '27533058999', 0, '2020-06-07 00:00:00');
INSERT INTO `companies` VALUES (76, 'Augue Incorporated', 'Saint Vincent and The Grenadines', '97757604099', 1, '2020-04-13 00:00:00');
INSERT INTO `companies` VALUES (77, 'A PC', 'Kenya', '782647683', 0, '2018-12-12 00:00:00');
INSERT INTO `companies` VALUES (78, 'Odio LLP', 'Samoa', '7760837299', 1, '2020-06-06 00:00:00');
INSERT INTO `companies` VALUES (79, 'Nam Associates', 'Guyana', '54651995999', 0, '2020-05-08 00:00:00');
INSERT INTO `companies` VALUES (80, 'Ipsum Non LLC', 'Martinique', '59399888499', 1, '2019-05-31 00:00:00');
INSERT INTO `companies` VALUES (81, 'Convallis Ligula Foundation', 'Saint Barthélemy', '57696306099', 1, '2019-08-31 00:00:00');
INSERT INTO `companies` VALUES (82, 'Elementum LLC', 'Ghana', '61843838499', 0, '2019-01-28 00:00:00');
INSERT INTO `companies` VALUES (83, 'Gravida Sit Amet Foundation', 'Saint Lucia', '77697301099', 0, '2018-11-19 00:00:00');
INSERT INTO `companies` VALUES (84, 'Vitae Aliquam Eros Industries', 'Antarctica', '43909612699', 0, '2020-08-23 00:00:00');
INSERT INTO `companies` VALUES (85, 'Risus Nulla Industries', 'Indonesia', '74686619799', 0, '2019-08-10 00:00:00');
INSERT INTO `companies` VALUES (86, 'Sit Amet Orci LLC', 'Argentina', '33206653799', 0, '2019-06-09 00:00:00');
INSERT INTO `companies` VALUES (87, 'Erat Consulting', 'Dominica', '67925955799', 0, '2020-06-07 00:00:00');
INSERT INTO `companies` VALUES (88, 'Magna Lorem Ipsum Company', 'Virgin Islands, British', '37482993899', 1, '2019-10-30 00:00:00');
INSERT INTO `companies` VALUES (89, 'Morbi Tristique Industries', 'Norfolk Island', '58658115899', 1, '2019-06-17 00:00:00');
INSERT INTO `companies` VALUES (90, 'Curabitur Ut Foundation', 'Gabon', '79796896599', 1, '2019-01-18 00:00:00');
INSERT INTO `companies` VALUES (91, 'Molestie Corp.', 'Saint Pierre and Miquelon', '60430246399', 0, '2020-07-09 00:00:00');
INSERT INTO `companies` VALUES (92, 'Molestie Dapibus Ligula Limited', 'Qatar', '47707926199', 0, '2019-06-09 00:00:00');
INSERT INTO `companies` VALUES (93, 'Vel Lectus PC', 'Afghanistan', '56772730699', 1, '2020-08-22 00:00:00');
INSERT INTO `companies` VALUES (94, 'Lobortis Inc.', 'Aruba', '42668591199', 1, '2020-03-07 00:00:00');
INSERT INTO `companies` VALUES (95, 'Enim Nisl Elementum LLP', 'Samoa', '99851244799', 1, '2018-11-26 00:00:00');
INSERT INTO `companies` VALUES (96, 'Sociosqu Industries', 'Antigua and Barbuda', '9206153899', 0, '2019-12-25 00:00:00');
INSERT INTO `companies` VALUES (97, 'Interdum Incorporated', 'South Georgia and The South Sandwich Islands', '25202198199', 0, '2020-08-18 00:00:00');
INSERT INTO `companies` VALUES (98, 'Eget Metus Industries', 'Latvia', '66869739699', 0, '2020-02-24 00:00:00');
INSERT INTO `companies` VALUES (99, 'In Lorem Donec Company', 'Belarus', '92367158199', 0, '2019-04-29 00:00:00');
INSERT INTO `companies` VALUES (100, 'Sit Amet Corp.', 'Saint Pierre and Miquelon', '33608558199', 1, '2019-10-02 00:00:00');
INSERT INTO `companies` VALUES (101, 'Porttitor Vulputate Posuere Incorporated', 'Marshall Islands', '5344328399', 1, '2019-10-10 00:00:00');
INSERT INTO `companies` VALUES (102, 'Blandit Limited', 'Guernsey', '66720111799', 0, '2019-07-26 00:00:00');
INSERT INTO `companies` VALUES (103, 'Pellentesque Consulting', 'Saint Kitts and Nevis', '44474801299', 0, '2019-08-08 00:00:00');
INSERT INTO `companies` VALUES (104, 'Mauris LLC', 'Papua New Guinea', '37889163699', 0, '2019-06-18 00:00:00');
INSERT INTO `companies` VALUES (105, 'Duis Limited', 'New Caledonia', '91344086799', 0, '2019-09-19 00:00:00');
INSERT INTO `companies` VALUES (106, 'Scelerisque Dui Institute', 'Colombia', '52205822999', 0, '2020-01-21 00:00:00');
INSERT INTO `companies` VALUES (107, 'baba', 'AL', '12344744', 1, '2019-11-04 15:34:43');
INSERT INTO `companies` VALUES (108, 'jjjj', 'DZ', '777777777', 1, '2019-11-04 15:36:01');
INSERT INTO `companies` VALUES (109, 'jjjj', 'DZ', '777777777', 1, '2019-11-04 15:36:52');
INSERT INTO `companies` VALUES (110, 'babababababab', 'AU', '999999999999999', 1, '2019-11-04 15:37:08');
INSERT INTO `companies` VALUES (111, 'cuisine ltd', 'CD', '111111111111111111111111', 1, '2019-11-04 15:45:51');
INSERT INTO `companies` VALUES (112, 'yongchiin', 'China', '666666677777676', 1, '2019-11-07 14:05:16');
INSERT INTO `companies` VALUES (113, 'jaquesetfils', 'United Kingdom', '667696', 1, '2019-11-07 14:05:37');
INSERT INTO `companies` VALUES (114, 'popopo', 'Afghanistan', '79797793793', 1, '2019-11-07 15:21:02');
INSERT INTO `companies` VALUES (115, 'hhhhhhh', 'United Kingdom', '37373738383', 1, '2019-11-07 15:21:18');
INSERT INTO `companies` VALUES (116, 'aaaaaa', 'Yemen', '333', 1, '2019-11-07 15:36:03');
COMMIT;

-- ----------------------------
-- Table structure for contacts
-- ----------------------------
DROP TABLE IF EXISTS `contacts`;
CREATE TABLE `contacts` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `firstname` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `lastname` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `telephone` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `workingAt` int(11) DEFAULT NULL,
  `createdAt` timestamp NOT NULL DEFAULT current_timestamp(),
  PRIMARY KEY (`id`),
  KEY `contacts_ibfk_1` (`workingAt`),
  CONSTRAINT `contacts_ibfk_1` FOREIGN KEY (`workingAt`) REFERENCES `companies` (`id`) ON DELETE SET NULL ON UPDATE NO ACTION
) ENGINE=InnoDB AUTO_INCREMENT=140 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- ----------------------------
-- Records of contacts
-- ----------------------------
BEGIN;
INSERT INTO `contacts` VALUES (1, 'Guillaume', 'Dery', 'monemail@test.be', '+9938392', 15, '2019-10-29 09:09:33');
INSERT INTO `contacts` VALUES (2, 'Pierre', 'Kimbazi', 'aa', '+8478382882', 2, '2019-10-29 09:43:09');
INSERT INTO `contacts` VALUES (4, 'Manu', 'Trepant', 'manu@y.com', '+82773829', NULL, '2019-10-29 09:43:35');
INSERT INTO `contacts` VALUES (5, 'Marvin', 'Louis', 'marvin@becode.org', '+3244473849', NULL, '2019-10-31 14:49:22');
INSERT INTO `contacts` VALUES (6, 'Phil', 'Gilles', 'phil@me.com', '+324747382737', 3, '2019-10-31 14:50:01');
INSERT INTO `contacts` VALUES (7, 'Marcel', 'Dupont', 'mail@yahoo.fr', '+3200000000 ', NULL, '2019-10-31 14:54:29');
INSERT INTO `contacts` VALUES (9, 'Gerard', 'Dupont', 'julienmorizet@outlook.fr', '+848372', 2, '2019-10-31 15:15:31');
INSERT INTO `contacts` VALUES (12, 'Melinda', 'Benson', 'netus@Namac.co.uk', '(858) 553-4986', 40, '2020-01-06 00:00:00');
INSERT INTO `contacts` VALUES (13, 'Tashya', 'Duncan', 'dui@nequetellus.org', '(755) 761-3887', 57, '2020-03-27 00:00:00');
INSERT INTO `contacts` VALUES (14, 'Sean', 'Herring', 'mauris.sapien.cursus@orcilobortisaugue.ca', '(570) 776-6370', 55, '2020-09-10 00:00:00');
INSERT INTO `contacts` VALUES (15, 'Stella', 'Gibson', 'et.eros@dolorsitamet.com', '(609) 408-2146', 15, '2020-03-15 00:00:00');
INSERT INTO `contacts` VALUES (16, 'Lani', 'Solis', 'in@velvenenatis.net', '(985) 808-0179', 87, '2019-04-18 00:00:00');
INSERT INTO `contacts` VALUES (17, 'Urielle', 'Herring', 'libero.at@odio.co.uk', '(771) 616-7580', 44, '2020-08-31 00:00:00');
INSERT INTO `contacts` VALUES (19, 'Stuart', 'Wall', 'nulla.Cras@lacus.ca', '(739) 739-5697', 17, '2020-05-20 00:00:00');
INSERT INTO `contacts` VALUES (20, 'Olympia', 'Allen', 'tellus.lorem.eu@acfacilisis.org', '(486) 360-1806', 68, '2019-05-11 00:00:00');
INSERT INTO `contacts` VALUES (21, 'Ivan', 'Buck', 'Nunc.ut@ante.co.uk', '(955) 370-4189', 57, '2019-04-23 00:00:00');
INSERT INTO `contacts` VALUES (22, 'Byron', 'Cole', 'mattis@eueleifend.ca', '(220) 173-4284', 43, '2019-02-09 00:00:00');
INSERT INTO `contacts` VALUES (23, 'Kane', 'Shields', 'velit@disparturient.net', '(208) 113-7753', 29, '2019-11-14 00:00:00');
INSERT INTO `contacts` VALUES (24, 'Thaddeus', 'Melton', 'non.bibendum.sed@dignissimlacus.org', '(323) 629-7276', 32, '2020-06-26 00:00:00');
INSERT INTO `contacts` VALUES (25, 'Basia', 'Morton', 'urna.suscipit@eteuismod.net', '(537) 987-7266', 93, '2019-11-06 00:00:00');
INSERT INTO `contacts` VALUES (26, 'Yoshio', 'Browning', 'ultrices.sit.amet@Fusce.edu', '(169) 149-0334', 39, '2019-12-14 00:00:00');
INSERT INTO `contacts` VALUES (27, 'Xyla', 'Randall', 'amet@adipiscing.ca', '(424) 843-9719', 87, '2019-10-05 00:00:00');
INSERT INTO `contacts` VALUES (28, 'Britanney', 'Mcguire', 'Phasellus@Crassedleo.com', '(372) 498-8476', 98, '2020-08-25 00:00:00');
INSERT INTO `contacts` VALUES (29, 'Kimberley', 'Chavez', 'lorem.ipsum2@bibendum.edu', '(907) 764-6550', NULL, '2018-11-12 00:00:00');
INSERT INTO `contacts` VALUES (30, 'Reagan', 'Burke', 'gravida@ipsumleoelementum.org', '(785) 788-6685', 90, '2019-03-27 00:00:00');
INSERT INTO `contacts` VALUES (31, 'Maya', 'Poole', 'mauris.blandit.mattis@Nulla.edu', '(684) 921-3027', 25, '2019-04-07 00:00:00');
INSERT INTO `contacts` VALUES (32, 'Kiona', 'Merrill', 'elit.pellentesque.a@imperdietornare.ca', '(368) 594-9318', 90, '2020-06-06 00:00:00');
INSERT INTO `contacts` VALUES (33, 'Lani', 'Johns', 'elementum.dui.quis@malesuadafamesac.com', '(538) 793-8730', 63, '2020-01-25 00:00:00');
INSERT INTO `contacts` VALUES (34, 'Ã©Ã©Ã©Ã©Ã©', 'Lynch', 'magna.a@varius.org', '(627) 588-8397', NULL, '2020-01-21 00:00:00');
INSERT INTO `contacts` VALUES (35, 'Guinevere', 'Burris', 'ipsum@tempus.org', '(306) 276-1918', 56, '2020-04-13 00:00:00');
INSERT INTO `contacts` VALUES (36, 'Jin', 'Cleveland', 'eu.nibh.vulputate@lacusCrasinterdum.ca', '(569) 160-0796', 31, '2020-01-03 00:00:00');
INSERT INTO `contacts` VALUES (37, 'Lesley', 'Best', 'elementum.purus.accumsan@pedemalesuada.com', '(897) 432-2653', 75, '2020-06-17 00:00:00');
INSERT INTO `contacts` VALUES (38, 'Jane', 'Dixon', 'ac@ornarefacilisiseget.org', '(340) 866-9629', 89, '2019-08-01 00:00:00');
INSERT INTO `contacts` VALUES (39, 'Ina', 'Wright', 'conubia.nostra@iaculisneceleifend.org', '(374) 103-5773', 54, '2020-03-14 00:00:00');
INSERT INTO `contacts` VALUES (40, 'Rogan', 'Curry', 'felis.purus.ac@enimdiamvel.ca', '(302) 961-3541', 14, '2019-06-12 00:00:00');
INSERT INTO `contacts` VALUES (41, 'Taylor', 'Burton', 'erat@nec.org', '(852) 706-0832', 31, '2020-02-29 00:00:00');
INSERT INTO `contacts` VALUES (42, 'Chelsea', 'Huffman', 'tincidunt.orci@mitempor.com', '(175) 730-8715', 32, '2019-04-08 00:00:00');
INSERT INTO `contacts` VALUES (43, 'Carson', 'Pratt', 'tempor.bibendum.Donec@aliquet.org', '(358) 222-4547', 35, '2018-11-04 00:00:00');
INSERT INTO `contacts` VALUES (44, 'Ira', 'Livingston', 'interdum.Curabitur.dictum@Donecnon.ca', '(972) 376-3778', 81, '2019-12-14 00:00:00');
INSERT INTO `contacts` VALUES (45, 'Carol', 'Parks', 'ipsum.dolor@non.edu', '(558) 152-5592', 94, '2019-03-24 00:00:00');
INSERT INTO `contacts` VALUES (46, 'Lucian', 'Barnett', 'sem.vitae@tristiquesenectuset.org', '(243) 899-6373', 57, '2020-04-26 00:00:00');
INSERT INTO `contacts` VALUES (47, 'Gillian', 'Spencer', 'ut@sitametconsectetuer.co.uk', '(808) 700-5597', 49, '2020-04-21 00:00:00');
INSERT INTO `contacts` VALUES (48, 'Finn', 'Dodson', 'lacus.Mauris.non@nonegestasa.net', '(420) 424-9214', 91, '2020-10-24 00:00:00');
INSERT INTO `contacts` VALUES (49, 'Clark', 'Deleon', 'fringilla@Sed.co.uk', '(984) 411-5925', 58, '2020-01-04 00:00:00');
INSERT INTO `contacts` VALUES (50, 'Octavia', 'Houston', 'Integer@sedleo.co.uk', '(616) 794-4620', 96, '2020-05-17 00:00:00');
INSERT INTO `contacts` VALUES (51, 'Bianca', 'Robbins', 'Etiam.bibendum.fermentum@ultricessitamet.co.uk', '(626) 917-7038', 48, '2020-03-13 00:00:00');
INSERT INTO `contacts` VALUES (52, 'Yardley', 'Clark', 'quam.a@dictumsapienAenean.edu', '(611) 209-1243', 10, '2019-01-29 00:00:00');
INSERT INTO `contacts` VALUES (53, 'Delilah', 'Pena', 'est.Nunc@Suspendisse.org', '(872) 519-2117', 7, '2020-04-09 00:00:00');
INSERT INTO `contacts` VALUES (54, 'Graham', 'Collins', 'convallis.erat@Integereu.com', '(950) 397-8517', 49, '2020-04-10 00:00:00');
INSERT INTO `contacts` VALUES (55, 'Mona Lisa', 'William', 'eros@Vivamussit.net', '(536) 865-9871', 54, '2019-04-05 00:00:00');
INSERT INTO `contacts` VALUES (56, 'Demetria', 'Burch', 'dolor.nonummy.ac@nibhvulputate.net', '(720) 486-1833', 14, '2019-12-17 00:00:00');
INSERT INTO `contacts` VALUES (57, 'Dolan', 'Navarro', 'arcu.vel@eget.co.uk', '(995) 467-9619', 47, '2020-08-31 00:00:00');
INSERT INTO `contacts` VALUES (58, 'MacKenzie', 'Spencer', 'imperdiet@Fuscealiquamenim.org', '(450) 382-1267', 106, '2019-03-26 00:00:00');
INSERT INTO `contacts` VALUES (59, 'Tate', 'Aguilar', 'ultrices@cursusvestibulum.net', '(381) 502-4851', 26, '2020-05-24 00:00:00');
INSERT INTO `contacts` VALUES (60, 'Lane', 'Burch', 'molestie.in@idrisusquis.org', '(322) 569-0924', 45, '2020-07-23 00:00:00');
INSERT INTO `contacts` VALUES (61, 'Tatyana', 'Rutledge', 'aliquet.vel.vulputate@In.edu', '(207) 863-5563', 55, '2020-08-27 00:00:00');
INSERT INTO `contacts` VALUES (62, 'Magee', 'Cotton', 'lacus.Mauris.non@Nulla.edu', '(468) 669-3787', 61, '2020-06-27 00:00:00');
INSERT INTO `contacts` VALUES (63, 'Leonard', 'Cotton', 'nisi@felispurusac.com', '(354) 214-2889', 28, '2019-01-22 00:00:00');
INSERT INTO `contacts` VALUES (64, 'Giselle', 'Drake', 'vestibulum.lorem@mi.com', '(423) 591-2637', 95, '2019-03-03 00:00:00');
INSERT INTO `contacts` VALUES (65, 'Whitney', 'Warner', 'diam.nunc@Nullamlobortisquam.net', '(689) 989-9937', 103, '2020-04-29 00:00:00');
INSERT INTO `contacts` VALUES (66, 'Gillian', 'Mcdaniel', 'pretium.aliquet@tinciduntnuncac.ca', '(750) 330-4469', 6, '2019-12-19 00:00:00');
INSERT INTO `contacts` VALUES (67, 'Stacey', 'Morgan', 'sit@ultrices.co.uk', '(417) 576-7970', 47, '2020-07-18 00:00:00');
INSERT INTO `contacts` VALUES (68, 'Minerva', 'Walters', 'orci.adipiscing@Vivamuseuismod.com', '(508) 480-1159', 59, '2020-09-07 00:00:00');
INSERT INTO `contacts` VALUES (70, 'Sawyer', 'Nunez', 'adipiscing.Mauris.molestie@ipsum.co.uk', '(204) 226-2723', 8, '2020-08-02 00:00:00');
INSERT INTO `contacts` VALUES (71, 'Noelani', 'Rocha', 'mi.enim@blanditmattisCras.ca', '(112) 308-6287', 33, '2019-04-29 00:00:00');
INSERT INTO `contacts` VALUES (72, 'Robert', 'Fernandez', 'mauris.sapien.cursus@sit.co.uk', '(960) 814-4288', 86, '2019-08-06 00:00:00');
INSERT INTO `contacts` VALUES (73, 'Kelsie', 'Gibbs', 'molestie.tellus@dictumeueleifend.co.uk', '(347) 119-8627', 81, '2019-10-11 00:00:00');
INSERT INTO `contacts` VALUES (74, 'Macaulay', 'Herman', 'libero@atlibero.co.uk', '(501) 350-5814', 88, '2020-01-06 00:00:00');
INSERT INTO `contacts` VALUES (75, 'Dara', 'Vaughan', 'sodales.Mauris.blandit@vitae.net', '(557) 635-3671', 57, '2019-07-24 00:00:00');
INSERT INTO `contacts` VALUES (76, 'Ria', 'Foreman', 'auctor@Donec.net', '(174) 729-6819', 105, '2020-03-08 00:00:00');
INSERT INTO `contacts` VALUES (77, 'Mariko', 'Bernard', 'ante@consequat.net', '(930) 334-9028', 66, '2019-11-10 00:00:00');
INSERT INTO `contacts` VALUES (78, 'Maryam', 'Solomon', 'quis.massa.Mauris@ligula.com', '(594) 191-6280', 103, '2020-05-04 00:00:00');
INSERT INTO `contacts` VALUES (79, 'Michael', 'Medina', 'cursus@nasceturridiculusmus.edu', '(937) 386-7206', 17, '2019-10-27 00:00:00');
INSERT INTO `contacts` VALUES (80, 'Imani', 'Rosario', 'aliquet.odio.Etiam@nec.net', '(715) 872-5294', 33, '2019-04-03 00:00:00');
INSERT INTO `contacts` VALUES (81, 'Jessica', 'Burgess', 'Pellentesque@afelisullamcorper.edu', '(953) 783-9858', 9, '2020-10-08 00:00:00');
INSERT INTO `contacts` VALUES (82, 'Colt', 'Watts', 'felis.orci@utquamvel.org', '(293) 528-1113', 51, '2020-04-21 00:00:00');
INSERT INTO `contacts` VALUES (84, 'Clayton', 'May', 'elit@erat.com', '(739) 105-5870', 23, '2020-02-26 00:00:00');
INSERT INTO `contacts` VALUES (85, 'Ferdinand', 'Benton', 'fames@amet.edu', '(640) 531-3761', 14, '2019-10-10 00:00:00');
INSERT INTO `contacts` VALUES (86, 'Kane', 'Fuentes', 'pede@nullaDonec.co.uk', '(263) 456-8804', 32, '2020-06-03 00:00:00');
INSERT INTO `contacts` VALUES (87, 'Meredith', 'Mccarty', 'est.mollis@Sedeu.com', '(992) 433-0302', 93, '2020-10-16 00:00:00');
INSERT INTO `contacts` VALUES (88, 'Myles', 'James', 'orci.Donec@egestas.ca', '(187) 967-1393', 8, '2020-03-03 00:00:00');
INSERT INTO `contacts` VALUES (89, 'Erin', 'Sharp', 'convallis.dolor.Quisque@velit.com', '(925) 238-9763', 95, '2020-07-29 00:00:00');
INSERT INTO `contacts` VALUES (90, 'Kenyon', 'Stanton', 'mollis.Phasellus.libero@musProinvel.edu', '(402) 549-1791', 69, '2019-03-20 00:00:00');
INSERT INTO `contacts` VALUES (91, 'Michelle', 'Gilliam', 'in.faucibus@justoProinnon.com', '(838) 600-6384', 17, '2018-12-08 00:00:00');
INSERT INTO `contacts` VALUES (92, 'Candice', 'Walls', 'mus@erat.co.uk', '(114) 364-1010', 8, '2020-02-13 00:00:00');
INSERT INTO `contacts` VALUES (93, 'Chancellor', 'Beard', 'lectus@magnisdis.org', '(875) 709-3926', 26, '2020-09-07 00:00:00');
INSERT INTO `contacts` VALUES (94, 'Herrod', 'Briggs', 'dictum@ategestas.com', '(111) 420-5084', 37, '2020-04-09 00:00:00');
INSERT INTO `contacts` VALUES (95, 'Branden', 'Conley', 'consequat.purus@Nuncsed.org', '(801) 802-1568', 72, '2018-11-13 00:00:00');
INSERT INTO `contacts` VALUES (96, 'Wyoming', 'Massey', 'ante@dolortempusnon.ca', '(151) 707-5812', 78, '2020-10-26 00:00:00');
INSERT INTO `contacts` VALUES (97, 'Kristen', 'Rivers', 'litora.torquent.per@Donecnibh.com', '(214) 335-4681', 18, '2020-10-04 00:00:00');
INSERT INTO `contacts` VALUES (98, 'Micah', 'Mendoza', 'Quisque.ac.libero@blandit.ca', '(175) 450-7227', 54, '2019-05-19 00:00:00');
INSERT INTO `contacts` VALUES (99, 'Rogan', 'Salinas', 'est.tempor@velitAliquam.com', '(966) 797-3003', 16, '2019-05-21 00:00:00');
INSERT INTO `contacts` VALUES (100, 'Damian Beebee', 'Willis', 'bibendum@euturpis.org', '(299) 828-4816', 23, '2018-11-09 00:00:00');
INSERT INTO `contacts` VALUES (101, 'Imani', 'Franklin', 'Nullam.lobortis.quam@dolorQuisque.ca', '(179) 889-5431', 88, '2019-11-11 00:00:00');
INSERT INTO `contacts` VALUES (103, 'Fletcher', 'Mcdaniel', 'nunc@auctorvelitAliquam.net', '(225) 449-8027', 7, '2019-02-05 00:00:00');
INSERT INTO `contacts` VALUES (104, 'Shannon', 'Hodge', 'faucibus.Morbi@sociisnatoquepenatibus.com', '(280) 696-8084', 30, '2020-10-21 00:00:00');
INSERT INTO `contacts` VALUES (105, 'Dominic', 'Harmon', 'dictum.Proin@CuraeDonectincidunt.ca', '(185) 506-5263', 56, '2019-01-18 00:00:00');
INSERT INTO `contacts` VALUES (106, 'Deborah', 'Gibson', 'nisi.sem.semper@magnaNam.co.uk', '(897) 102-1402', 53, '2020-02-14 00:00:00');
INSERT INTO `contacts` VALUES (107, 'Carter', 'Christensen', 'Mauris.non.dui@loremluctusut.ca', '(866) 983-0278', 29, '2019-07-24 00:00:00');
INSERT INTO `contacts` VALUES (108, 'Imelda', 'Preston', 'a@egetvolutpatornare.org', '(903) 242-4303', 39, '2020-06-22 00:00:00');
INSERT INTO `contacts` VALUES (109, 'Macy', 'Carroll', 'ultricies@utdolor.ca', '(364) 850-0568', 12, '2020-04-17 00:00:00');
INSERT INTO `contacts` VALUES (110, 'Lara', 'Wiley', 'ut.cursus@dolorsitamet.org', '(357) 499-9387', 48, '2019-10-26 00:00:00');
INSERT INTO `contacts` VALUES (111, 'Fleur', 'Valenzuela', 'est.Nunc.ullamcorper@elitsed.net', '(831) 666-0113', 99, '2019-03-04 00:00:00');
INSERT INTO `contacts` VALUES (123, 'maby', 'maby', 'julienmorizet@outlook.fr', '84448', 16, '2019-11-04 21:33:34');
INSERT INTO `contacts` VALUES (124, 'z', 'z', 'julienmorizet@outlook.fr', '+32-0-000-00-00', 16, '2019-11-05 09:37:42');
INSERT INTO `contacts` VALUES (131, 'Mona Lisa', 'William', 'eros@Vivamussit.net', '(536) 865-9871', 18, '2019-11-05 12:13:30');
INSERT INTO `contacts` VALUES (135, 'dfsfsef', 'sefsefefs', 'julienmorizet@outlook.fr', '485485458586', 13, '2019-11-05 15:32:38');
INSERT INTO `contacts` VALUES (138, 'PIerre ', 'qwetch', 'lejamboncelicieux@gmail.com', '489325128', 2, '2019-11-07 14:22:26');
COMMIT;

-- ----------------------------
-- Table structure for invoices
-- ----------------------------
DROP TABLE IF EXISTS `invoices`;
CREATE TABLE `invoices` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `invoiceNumber` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `companyId` int(11) DEFAULT NULL,
  `contactId` int(11) DEFAULT NULL,
  `clientType` int(11) NOT NULL COMMENT '0 = company / 1 = contact',
  `description` text COLLATE utf8_unicode_ci NOT NULL,
  `amount` float NOT NULL,
  `type` tinyint(1) NOT NULL COMMENT '0 = in / 1 = out',
  `createdAt` timestamp NOT NULL DEFAULT current_timestamp(),
  PRIMARY KEY (`id`),
  KEY `clientType` (`clientType`),
  KEY `invoices_ibfk_2` (`companyId`),
  CONSTRAINT `invoices_ibfk_1` FOREIGN KEY (`companyId`) REFERENCES `companies` (`id`),
  CONSTRAINT `invoices_ibfk_2` FOREIGN KEY (`companyId`) REFERENCES `contacts` (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=141 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- ----------------------------
-- Records of invoices
-- ----------------------------
BEGIN;
INSERT INTO `invoices` VALUES (8, 'COG2019-0100', 19, NULL, 0, 'mollis. Integer tincidunt aliquam arcu. Aliquam ultrices iaculis odio. Nam interdum enim non nisi. Aenean eget metus. In nec orci. Donec nibh. Quisque nonummy ipsum non arcu. Vivamus sit', 2285, 0, '2019-09-19 00:00:00');
INSERT INTO `invoices` VALUES (9, 'COG2019-0102', 92, NULL, 0, 'amet, risus. Donec nibh enim, gravida sit amet, dapibus id, blandit at, nisi. Cum sociis natoque penatibus et magnis dis', 2352, 0, '2019-06-08 00:00:00');
INSERT INTO `invoices` VALUES (10, 'COG2019-0106', 35, NULL, 0, 'in felis. Nulla tempor augue ac ipsum. Phasellus vitae mauris sit', 5317, 0, '2019-05-24 00:00:00');
INSERT INTO `invoices` VALUES (11, 'COG2019-0110', 76, NULL, 0, 'id risus quis diam luctus lobortis. Class aptent taciti sociosqu ad', 6047, 0, '2019-10-27 00:00:00');
INSERT INTO `invoices` VALUES (12, 'COG2019-0112', 73, NULL, 0, 'Nullam suscipit, est ac facilisis facilisis, magna tellus faucibus leo, in lobortis tellus justo sit amet nulla. Donec non justo. Proin non massa non', 8008, 0, '2019-10-11 00:00:00');
INSERT INTO `invoices` VALUES (13, 'COG2019-0113', 63, NULL, 0, 'arcu vel quam dignissim pharetra. Nam ac nulla. In tincidunt congue turpis. In condimentum. Donec at arcu. Vestibulum ante ipsum primis in faucibus orci luctus et ultrices posuere cubilia', 1400, 0, '2019-10-22 00:00:00');
INSERT INTO `invoices` VALUES (14, 'COG2019-0114', 48, NULL, 0, 'molestie orci tincidunt adipiscing. Mauris molestie pharetra nibh. Aliquam ornare,', 1522, 0, '2019-02-17 00:00:00');
INSERT INTO `invoices` VALUES (15, 'COG2019-0115', 98, NULL, 0, 'amet, dapibus id, blandit at, nisi. Cum sociis natoque penatibus et', 7601, 0, '2019-05-16 00:00:00');
INSERT INTO `invoices` VALUES (16, 'COG2019-0117', 68, NULL, 0, 'dictum eleifend, nunc risus varius orci, in consequat enim diam vel arcu. Curabitur ut odio vel est tempor bibendum. Donec felis orci, adipiscing', 3335, 0, '2019-06-30 00:00:00');
INSERT INTO `invoices` VALUES (17, 'COG2019-0121', 48, NULL, 0, 'eu dolor egestas rhoncus. Proin nisl sem, consequat nec, mollis vitae, posuere at, velit. Cras lorem lorem, luctus ut, pellentesque eget, dictum placerat, augue. Sed molestie. Sed id risus quis', 3740, 0, '2019-01-25 00:00:00');
INSERT INTO `invoices` VALUES (18, 'COG2019-0123', 35, NULL, 0, 'Quisque fringilla euismod enim. Etiam gravida molestie arcu. Sed eu nibh vulputate mauris', 8800, 0, '2019-01-06 00:00:00');
INSERT INTO `invoices` VALUES (19, 'COG2019-0124', 7, NULL, 0, 'magnis dis parturient montes, nascetur ridiculus mus. Aenean eget magna. Suspendisse tristique neque venenatis lacus. Etiam bibendum fermentum metus.', 8856, 0, '2019-09-16 00:00:00');
INSERT INTO `invoices` VALUES (20, 'COG2019-0125', 66, NULL, 0, 'nisl arcu iaculis enim, sit amet ornare lectus justo eu arcu. Morbi', 8376, 0, '2019-09-29 00:00:00');
INSERT INTO `invoices` VALUES (21, 'COG2019-0126', 93, NULL, 0, 'ornare, facilisis eget, ipsum. Donec sollicitudin adipiscing ligula. Aenean gravida nunc sed pede. Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus', 5278, 0, '2019-05-10 00:00:00');
INSERT INTO `invoices` VALUES (22, 'COG2019-0127', 12, NULL, 0, 'Nunc quis arcu vel quam dignissim pharetra. Nam ac nulla. In tincidunt congue turpis. In condimentum. Donec at arcu. Vestibulum', 6405, 0, '2019-04-07 00:00:00');
INSERT INTO `invoices` VALUES (23, 'COG2019-0128', 53, NULL, 0, 'nibh. Quisque nonummy ipsum non arcu. Vivamus sit amet risus.', 6993, 0, '2019-09-22 00:00:00');
INSERT INTO `invoices` VALUES (24, 'COG2019-0129', 26, NULL, 0, 'ipsum sodales purus, in molestie tortor nibh sit amet orci. Ut sagittis lobortis mauris. Suspendisse aliquet molestie tellus. Aenean egestas hendrerit neque. In ornare sagittis felis. Donec', 902, 0, '2019-08-01 00:00:00');
INSERT INTO `invoices` VALUES (25, 'COG2019-0131', 7, NULL, 0, 'Integer in magna. Phasellus dolor elit, pellentesque a, facilisis non, bibendum sed, est. Nunc laoreet lectus quis massa. Mauris vestibulum, neque sed dictum eleifend, nunc risus varius', 9430, 0, '2019-06-06 00:00:00');
INSERT INTO `invoices` VALUES (26, 'COG2019-0133', 49, NULL, 0, 'felis eget varius ultrices, mauris ipsum porta elit, a feugiat tellus lorem eu metus. In lorem. Donec elementum, lorem ut aliquam iaculis, lacus pede sagittis augue, eu tempor', 2763, 0, '2019-05-20 00:00:00');
INSERT INTO `invoices` VALUES (27, 'COG2019-0134', 67, NULL, 0, 'faucibus orci luctus et ultrices posuere cubilia Curae; Phasellus ornare. Fusce mollis. Duis sit amet', 4947, 0, '2019-06-13 00:00:00');
INSERT INTO `invoices` VALUES (28, 'COG2019-0135', 23, NULL, 0, 'parturient montes, nascetur ridiculus mus. Proin vel arcu eu odio tristique pharetra. Quisque ac libero nec ligula consectetuer rhoncus. Nullam velit dui,', 3325, 0, '2019-07-05 00:00:00');
INSERT INTO `invoices` VALUES (29, 'COG2019-0136', 44, NULL, 0, 'a, aliquet vel, vulputate eu, odio. Phasellus at augue id ante dictum cursus. Nunc mauris elit, dictum eu, eleifend nec, malesuada ut, sem. Nulla interdum. Curabitur dictum.', 1109, 0, '2019-10-21 00:00:00');
INSERT INTO `invoices` VALUES (30, 'COG2019-0137', 87, NULL, 0, 'nibh. Aliquam ornare, libero at auctor ullamcorper, nisl arcu iaculis enim, sit amet ornare lectus justo eu arcu. Morbi sit amet massa. Quisque porttitor eros nec tellus.', 7865, 1, '2019-10-03 00:00:00');
INSERT INTO `invoices` VALUES (31, 'COG2019-0139', 23, NULL, 0, 'magna. Duis dignissim tempor arcu. Vestibulum ut eros non enim commodo hendrerit. Donec porttitor tellus non magna. Nam ligula elit, pretium et, rutrum non, hendrerit id, ante.', 6858, 0, '2019-05-13 00:00:00');
INSERT INTO `invoices` VALUES (32, 'COG2019-0145', 29, NULL, 0, 'Praesent luctus. Curabitur egestas nunc sed libero. Proin sed turpis nec mauris blandit mattis. Cras eget nisi dictum augue malesuada malesuada. Integer id', 3027, 0, '2019-06-02 00:00:00');
INSERT INTO `invoices` VALUES (33, 'COG2019-0146', 72, NULL, 0, 'Integer sem elit, pharetra ut, pharetra sed, hendrerit a, arcu. Sed et libero. Proin mi. Aliquam gravida mauris ut mi. Duis risus odio, auctor', 7156, 0, '2019-10-13 00:00:00');
INSERT INTO `invoices` VALUES (34, 'COG2019-0147', 20, NULL, 0, 'vitae, orci. Phasellus dapibus quam quis diam. Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas. Fusce aliquet magna a neque. Nullam ut nisi a odio', 9588, 1, '2019-06-27 00:00:00');
INSERT INTO `invoices` VALUES (35, 'COG2019-0149', 4, NULL, 0, 'ornare placerat, orci lacus vestibulum lorem, sit amet ultricies sem magna nec quam. Curabitur vel lectus. Cum sociis natoque penatibus et magnis dis parturient', 3033, 1, '2019-03-29 00:00:00');
INSERT INTO `invoices` VALUES (36, 'COG2019-0151', 93, NULL, 0, 'amet nulla. Donec non justo. Proin non massa non ante bibendum ullamcorper. Duis cursus, diam at pretium aliquet, metus urna convallis erat, eget tincidunt dui augue eu', 2703, 1, '2019-09-16 00:00:00');
INSERT INTO `invoices` VALUES (37, 'COG2019-0152', 32, NULL, 0, 'vel est tempor bibendum. Donec felis orci, adipiscing non, luctus sit amet, faucibus ut,', 2619, 0, '2019-04-16 00:00:00');
INSERT INTO `invoices` VALUES (38, 'COG2019-0153', 33, NULL, 0, 'gravida. Praesent eu nulla at sem molestie sodales. Mauris blandit enim consequat purus. Maecenas libero est, congue', 4103, 0, '2019-08-14 00:00:00');
INSERT INTO `invoices` VALUES (39, 'COG2019-0155', 98, NULL, 0, 'orci lacus vestibulum lorem, sit amet ultricies sem magna nec quam. Curabitur', 1141, 0, '2019-08-22 00:00:00');
INSERT INTO `invoices` VALUES (40, 'COG2019-0156', 24, NULL, 0, 'ac, eleifend vitae, erat. Vivamus nisi. Mauris nulla. Integer urna. Vivamus', 9649, 0, '2019-08-12 00:00:00');
INSERT INTO `invoices` VALUES (42, 'COG2019-0160', 95, NULL, 0, 'Donec est mauris, rhoncus id, mollis nec, cursus a, enim. Suspendisse', 7180, 1, '2019-07-12 00:00:00');
INSERT INTO `invoices` VALUES (43, 'COG2019-0162', 61, NULL, 0, 'arcu iaculis enim, sit amet ornare lectus justo eu arcu. Morbi sit', 895, 1, '2019-01-08 00:00:00');
INSERT INTO `invoices` VALUES (44, 'COG2019-0164', 58, NULL, 0, 'Suspendisse commodo tincidunt nibh. Phasellus nulla. Integer vulputate, risus a ultricies adipiscing, enim mi tempor lorem, eget mollis lectus pede et risus. Quisque libero lacus, varius', 724, 1, '2019-10-07 00:00:00');
INSERT INTO `invoices` VALUES (45, 'COG2019-0165', 68, NULL, 0, 'ut erat. Sed nunc est, mollis non, cursus non, egestas a, dui. Cras pellentesque. Sed dictum. Proin eget odio. Aliquam vulputate ullamcorper magna. Sed', 3517, 0, '2019-04-09 00:00:00');
INSERT INTO `invoices` VALUES (46, 'COG2019-0168', 82, NULL, 0, 'sed dui. Fusce aliquam, enim nec tempus scelerisque, lorem ipsum sodales purus, in molestie tortor nibh sit amet orci. Ut sagittis lobortis mauris. Suspendisse aliquet molestie tellus. Aenean', 9275, 1, '2019-07-07 00:00:00');
INSERT INTO `invoices` VALUES (47, 'COG2019-0169', 31, NULL, 0, 'elit, pretium et, rutrum non, hendrerit id, ante. Nunc mauris sapien, cursus in, hendrerit consectetuer, cursus et, magna. Praesent interdum ligula eu enim. Etiam imperdiet', 7672, 0, '2019-06-22 00:00:00');
INSERT INTO `invoices` VALUES (48, 'COG2019-0172', 96, NULL, 0, 'a, enim. Suspendisse aliquet, sem ut cursus luctus, ipsum leo elementum sem, vitae aliquam eros turpis non', 755, 0, '2019-03-09 00:00:00');
INSERT INTO `invoices` VALUES (49, 'COG2019-0173', 60, NULL, 0, 'vel nisl. Quisque fringilla euismod enim. Etiam gravida molestie arcu. Sed eu nibh', 5321, 1, '2019-10-21 00:00:00');
INSERT INTO `invoices` VALUES (50, 'COG2019-0175', 67, NULL, 0, 'turpis. In condimentum. Donec at arcu. Vestibulum ante ipsum primis in', 3903, 1, '2019-01-16 00:00:00');
INSERT INTO `invoices` VALUES (51, 'COG2019-0177', 62, NULL, 0, 'lectus justo eu arcu. Morbi sit amet massa. Quisque porttitor eros nec tellus. Nunc lectus pede, ultrices a, auctor non, feugiat nec, diam. Duis mi enim, condimentum', 1897, 1, '2019-03-28 00:00:00');
INSERT INTO `invoices` VALUES (52, 'COG2019-0178', 86, NULL, 0, 'eget metus. In nec orci. Donec nibh. Quisque nonummy ipsum non arcu. Vivamus sit amet risus. Donec egestas. Aliquam nec enim. Nunc ut', 9078, 0, '2019-03-31 00:00:00');
INSERT INTO `invoices` VALUES (53, 'COG2019-0179', 37, NULL, 0, 'Nulla aliquet. Proin velit. Sed malesuada augue ut lacus. Nulla tincidunt, neque vitae semper egestas, urna justo faucibus lectus, a sollicitudin orci sem eget massa. Suspendisse eleifend. Cras', 653, 0, '2019-06-06 00:00:00');
INSERT INTO `invoices` VALUES (54, 'COG2019-0181', 77, NULL, 0, 'vehicula. Pellentesque tincidunt tempus risus. Donec egestas. Duis ac arcu. Nunc mauris.', 343, 0, '2019-09-20 00:00:00');
INSERT INTO `invoices` VALUES (55, 'COG2019-0182', 6, NULL, 0, 'eu dui. Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Aenean eget magna. Suspendisse tristique neque venenatis lacus. Etiam bibendum fermentum metus. Aenean sed pede', 2077, 0, '2019-04-05 00:00:00');
INSERT INTO `invoices` VALUES (56, 'COG2019-0184', 7, NULL, 0, 'Nullam enim. Sed nulla ante, iaculis nec, eleifend non, dapibus rutrum, justo. Praesent luctus. Curabitur egestas', 1876, 0, '2019-09-28 00:00:00');
INSERT INTO `invoices` VALUES (57, 'COG2019-0186', 97, NULL, 0, 'placerat eget, venenatis a, magna. Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Etiam laoreet, libero et tristique', 1890, 0, '2019-09-02 00:00:00');
INSERT INTO `invoices` VALUES (58, 'COG2019-0187', 15, NULL, 0, 'justo. Proin non massa non ante bibendum ullamcorper. Duis cursus, diam at pretium aliquet,', 928, 0, '2019-01-15 00:00:00');
INSERT INTO `invoices` VALUES (59, 'COG2019-0189', 49, NULL, 0, 'nisl. Quisque fringilla euismod enim. Etiam gravida molestie arcu. Sed eu nibh vulputate mauris sagittis placerat. Cras dictum ultricies ligula. Nullam enim.', 8388, 0, '2019-05-09 00:00:00');
INSERT INTO `invoices` VALUES (60, 'COG2019-0192', 44, NULL, 0, 'Aliquam vulputate ullamcorper magna. Sed eu eros. Nam consequat dolor vitae dolor. Donec fringilla. Donec feugiat metus sit', 931, 0, '2019-07-20 00:00:00');
INSERT INTO `invoices` VALUES (61, 'COG2019-0194', 84, NULL, 0, 'dolor quam, elementum at, egestas a, scelerisque sed, sapien. Nunc pulvinar arcu et pede. Nunc sed orci lobortis augue', 6541, 0, '2019-05-18 00:00:00');
INSERT INTO `invoices` VALUES (62, 'COG2019-0195', 55, NULL, 0, 'sit amet luctus vulputate, nisi sem semper erat, in consectetuer ipsum nunc id enim. Curabitur massa. Vestibulum accumsan neque et', 6383, 0, '2019-04-26 00:00:00');
INSERT INTO `invoices` VALUES (63, 'COG2019-0196', 27, NULL, 0, 'ornare placerat, orci lacus vestibulum lorem, sit amet ultricies sem magna nec quam. Curabitur vel lectus. Cum sociis', 401, 0, '2019-10-18 00:00:00');
INSERT INTO `invoices` VALUES (64, 'COG2019-0198', 25, NULL, 0, 'Quisque ac libero nec ligula consectetuer rhoncus. Nullam velit dui, semper et, lacinia vitae, sodales at, velit. Pellentesque ultricies dignissim lacus. Aliquam rutrum lorem', 8358, 0, '2019-08-02 00:00:00');
INSERT INTO `invoices` VALUES (65, 'COG2019-0199', 79, NULL, 0, 'Integer sem elit, pharetra ut, pharetra sed, hendrerit a, arcu. Sed et libero. Proin mi. Aliquam gravida mauris ut mi. Duis risus odio, auctor vitae, aliquet nec,', 2860, 0, '2019-03-16 00:00:00');
INSERT INTO `invoices` VALUES (66, 'COG2019-0101', 91, NULL, 0, 'Integer sem elit, pharetra ut, pharetra sed, hendrerit a, arcu. Sed et libero. Proin mi. Aliquam gravida mauris ut mi.', 2204, 0, '2019-07-22 00:00:00');
INSERT INTO `invoices` VALUES (67, 'COG2019-0103', 6, NULL, 0, 'Suspendisse aliquet, sem ut cursus luctus, ipsum leo elementum sem, vitae aliquam', 1763, 0, '2019-08-03 00:00:00');
INSERT INTO `invoices` VALUES (68, 'COG2019-0104', 95, NULL, 0, 'quam dignissim pharetra. Nam ac nulla. In tincidunt congue turpis. In condimentum. Donec at', 2331, 0, '2019-01-23 00:00:00');
INSERT INTO `invoices` VALUES (69, 'COG2019-0105', 49, NULL, 0, 'eget metus eu erat semper rutrum. Fusce dolor quam, elementum at, egestas a, scelerisque sed, sapien. Nunc pulvinar arcu et pede. Nunc sed orci lobortis augue scelerisque', 8351, 0, '2019-04-19 00:00:00');
INSERT INTO `invoices` VALUES (70, 'COG2019-0107', 84, NULL, 0, 'Nullam enim. Sed nulla ante, iaculis nec, eleifend non, dapibus rutrum, justo. Praesent luctus. Curabitur egestas nunc sed libero. Proin sed turpis', 8422, 0, '2019-04-18 00:00:00');
INSERT INTO `invoices` VALUES (71, 'COG2019-0108', 35, NULL, 0, 'risus. Nunc ac sem ut dolor dapibus gravida. Aliquam tincidunt, nunc ac mattis ornare, lectus ante dictum mi, ac mattis velit justo nec ante. Maecenas mi felis, adipiscing', 3454, 0, '2019-07-18 00:00:00');
INSERT INTO `invoices` VALUES (72, 'COG2019-0109', 56, NULL, 0, 'arcu. Morbi sit amet massa. Quisque porttitor eros nec tellus. Nunc lectus pede, ultrices a, auctor non, feugiat nec, diam. Duis mi enim,', 8382, 0, '2019-10-11 00:00:00');
INSERT INTO `invoices` VALUES (73, 'COG2019-0111', 46, NULL, 0, 'orci, adipiscing non, luctus sit amet, faucibus ut, nulla. Cras eu tellus eu augue porttitor interdum. Sed', 9636, 0, '2019-03-28 00:00:00');
INSERT INTO `invoices` VALUES (74, 'COG2019-0116', 86, NULL, 0, 'nibh dolor, nonummy ac, feugiat non, lobortis quis, pede. Suspendisse dui. Fusce diam nunc, ullamcorper eu, euismod ac, fermentum vel, mauris. Integer sem elit, pharetra ut, pharetra sed,', 7882, 0, '2019-03-18 00:00:00');
INSERT INTO `invoices` VALUES (75, 'COG2019-0118', 19, NULL, 0, 'venenatis a, magna. Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Etiam laoreet, libero', 648, 0, '2019-03-29 00:00:00');
INSERT INTO `invoices` VALUES (76, 'COG2019-0119', 68, NULL, 0, 'mollis. Integer tincidunt aliquam arcu. Aliquam ultrices iaculis odio. Nam interdum enim non nisi. Aenean eget metus.', 1230, 0, '2019-10-17 00:00:00');
INSERT INTO `invoices` VALUES (77, 'COG2019-0120', 2, NULL, 0, 'Cras interdum. Nunc sollicitudin commodo ipsum. Suspendisse non leo. Vivamus nibh dolor, nonummy ac, feugiat non, lobortis quis, pede. Suspendisse dui. Fusce diam nunc, ullamcorper', 8054, 0, '2019-07-11 00:00:00');
INSERT INTO `invoices` VALUES (78, 'COG2019-0122', 41, NULL, 0, 'Cras eu tellus eu augue porttitor interdum. Sed auctor odio a purus. Duis elementum, dui quis accumsan convallis,', 6941, 0, '2019-09-10 00:00:00');
INSERT INTO `invoices` VALUES (79, 'COG2019-0130', 13, NULL, 0, 'est tempor bibendum. Donec felis orci, adipiscing non, luctus sit amet, faucibus ut, nulla.', 3758, 0, '2019-09-19 00:00:00');
INSERT INTO `invoices` VALUES (80, 'COG2019-0132', 68, NULL, 0, 'velit. Quisque varius. Nam porttitor scelerisque neque. Nullam nisl. Maecenas malesuada fringilla est. Mauris eu turpis.', 3511, 0, '2019-02-24 00:00:00');
INSERT INTO `invoices` VALUES (81, 'COG2019-0138', 71, NULL, 0, 'Mauris molestie pharetra nibh. Aliquam ornare, libero at auctor ullamcorper, nisl', 5341, 1, '2019-10-05 00:00:00');
INSERT INTO `invoices` VALUES (82, 'COG2019-0140', 22, NULL, 0, 'nisi dictum augue malesuada malesuada. Integer id magna et ipsum cursus vestibulum. Mauris magna. Duis dignissim tempor arcu. Vestibulum ut eros non enim commodo', 6325, 1, '2019-04-29 00:00:00');
INSERT INTO `invoices` VALUES (83, 'COG2019-0141', 41, NULL, 0, 'porttitor vulputate, posuere vulputate, lacus. Cras interdum. Nunc sollicitudin commodo', 6497, 1, '2019-05-15 00:00:00');
INSERT INTO `invoices` VALUES (84, 'COG2019-0142', 59, NULL, 0, 'enim. Sed nulla ante, iaculis nec, eleifend non, dapibus rutrum, justo. Praesent luctus. Curabitur egestas nunc sed libero. Proin sed turpis nec mauris', 2768, 1, '2019-10-10 00:00:00');
INSERT INTO `invoices` VALUES (85, 'COG2019-0143', NULL, 6, 1, 'tristique aliquet. Phasellus fermentum convallis ligula. Donec luctus aliquet odio. Etiam ligula tortor, dictum eu, placerat eget, venenatis a, magna. Lorem ipsum dolor', 7864, 1, '2019-03-28 00:00:00');
INSERT INTO `invoices` VALUES (86, 'COG2019-0144', NULL, 41, 1, 'tellus non magna. Nam ligula elit, pretium et, rutrum non, hendrerit id, ante. Nunc', 2248, 1, '2019-06-21 00:00:00');
INSERT INTO `invoices` VALUES (87, 'COG2019-0148', NULL, 74, 1, 'accumsan laoreet ipsum. Curabitur consequat, lectus sit amet luctus vulputate, nisi', 2661, 1, '2019-07-01 00:00:00');
INSERT INTO `invoices` VALUES (88, 'COG2019-0150', NULL, 15, 1, 'egestas lacinia. Sed congue, elit sed consequat auctor, nunc nulla vulputate dui, nec tempus mauris erat eget ipsum. Suspendisse sagittis. Nullam vitae diam.', 3806, 1, '2019-05-07 00:00:00');
INSERT INTO `invoices` VALUES (89, 'COG2019-0154', NULL, 48, 1, 'nisi. Aenean eget metus. In nec orci. Donec nibh. Quisque nonummy ipsum non arcu.', 5632, 1, '2019-06-25 00:00:00');
INSERT INTO `invoices` VALUES (90, 'COG2019-0157', NULL, 60, 1, 'at arcu. Vestibulum ante ipsum primis in faucibus orci luctus et ultrices posuere cubilia Curae; Donec tincidunt. Donec vitae erat vel pede blandit congue. In scelerisque scelerisque', 7110, 1, '2019-04-10 00:00:00');
INSERT INTO `invoices` VALUES (91, 'COG2019-0158', NULL, 2, 1, 'aliquam iaculis, lacus pede sagittis augue, eu tempor erat neque non', 997, 1, '2019-01-17 00:00:00');
INSERT INTO `invoices` VALUES (92, 'COG2019-0161', NULL, 60, 1, 'blandit congue. In scelerisque scelerisque dui. Suspendisse ac metus vitae velit egestas lacinia. Sed congue, elit sed consequat auctor, nunc', 914, 1, '2019-05-27 00:00:00');
INSERT INTO `invoices` VALUES (93, 'COG2019-0163', NULL, 93, 1, 'posuere cubilia Curae; Donec tincidunt. Donec vitae erat vel pede blandit congue. In scelerisque scelerisque dui. Suspendisse ac metus vitae velit egestas lacinia. Sed congue, elit sed consequat auctor,', 8661, 1, '2019-06-01 00:00:00');
INSERT INTO `invoices` VALUES (94, 'COG2019-0166', NULL, 52, 1, 'dignissim lacus. Aliquam rutrum lorem ac risus. Morbi metus. Vivamus euismod urna. Nullam lobortis quam a felis ullamcorper viverra. Maecenas iaculis aliquet diam. Sed', 660, 0, '2019-05-14 00:00:00');
INSERT INTO `invoices` VALUES (95, 'COG2019-0167', NULL, 58, 1, 'sed dictum eleifend, nunc risus varius orci, in consequat enim diam vel arcu. Curabitur ut odio vel est tempor bibendum. Donec felis orci, adipiscing non,', 6316, 0, '2019-07-24 00:00:00');
INSERT INTO `invoices` VALUES (96, 'COG2019-0170', NULL, 43, 1, 'a nunc. In at pede. Cras vulputate velit eu sem. Pellentesque ut ipsum ac mi eleifend egestas.', 3923, 0, '2019-04-10 00:00:00');
INSERT INTO `invoices` VALUES (97, 'COG2019-0171', NULL, 65, 1, 'penatibus et magnis dis parturient montes, nascetur ridiculus mus. Donec dignissim magna a tortor. Nunc commodo auctor velit.', 7312, 0, '2019-06-25 00:00:00');
INSERT INTO `invoices` VALUES (98, 'COG2019-0174', NULL, 93, 1, 'id, erat. Etiam vestibulum massa rutrum magna. Cras convallis convallis dolor. Quisque tincidunt pede ac urna. Ut tincidunt vehicula risus. Nulla eget metus eu erat semper rutrum. Fusce dolor', 2902, 0, '2019-02-02 00:00:00');
INSERT INTO `invoices` VALUES (99, 'COG2019-0176', NULL, 54, 1, 'eu turpis. Nulla aliquet. Proin velit. Sed malesuada augue ut lacus. Nulla tincidunt, neque vitae', 2872, 0, '2019-10-04 00:00:00');
INSERT INTO `invoices` VALUES (100, 'COG2019-0180', NULL, 10, 1, 'Curabitur dictum. Phasellus in felis. Nulla tempor augue ac ipsum.', 1813, 0, '2019-05-05 00:00:00');
INSERT INTO `invoices` VALUES (101, 'COG2019-0183', NULL, 48, 1, 'erat volutpat. Nulla dignissim. Maecenas ornare egestas ligula. Nullam feugiat placerat velit. Quisque varius. Nam porttitor scelerisque neque.', 1513, 0, '2019-04-20 00:00:00');
INSERT INTO `invoices` VALUES (102, 'COG2019-0185', NULL, 92, 1, 'ac turpis egestas. Aliquam fringilla cursus purus. Nullam scelerisque neque sed sem egestas blandit. Nam nulla magna,', 1012, 0, '2019-04-22 00:00:00');
INSERT INTO `invoices` VALUES (103, 'COG2019-0188', NULL, 66, 1, 'auctor. Mauris vel turpis. Aliquam adipiscing lobortis risus. In mi pede, nonummy', 483, 0, '2019-04-22 00:00:00');
INSERT INTO `invoices` VALUES (104, 'COG2019-0190', NULL, 17, 1, 'gravida mauris ut mi. Duis risus odio, auctor vitae, aliquet nec, imperdiet nec, leo. Morbi neque tellus, imperdiet non, vestibulum nec, euismod in, dolor. Fusce feugiat. Lorem', 378, 0, '2019-08-10 00:00:00');
INSERT INTO `invoices` VALUES (105, 'COG2019-0191', NULL, 7, 1, 'Proin sed turpis nec mauris blandit mattis. Cras eget nisi dictum augue malesuada malesuada. Integer id magna et ipsum cursus vestibulum.', 7671, 0, '2019-09-04 00:00:00');
INSERT INTO `invoices` VALUES (137, 'COG2019-137', NULL, 1, 1, 'test', 53, 0, '2019-11-07 14:24:29');
INSERT INTO `invoices` VALUES (139, 'COG2019-223', NULL, 59, 1, 'qesdcd', 3, 0, '2019-11-07 15:09:54');
INSERT INTO `invoices` VALUES (140, 'COG2019-121', 77, NULL, 0, 'gfbv', 52, 0, '2019-11-07 15:10:42');
COMMIT;

-- ----------------------------
-- Table structure for users
-- ----------------------------
DROP TABLE IF EXISTS `users`;
CREATE TABLE `users` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `username` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `password` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `firstname` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `lastname` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `email` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `jobTitle` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `userLevel` int(2) DEFAULT NULL,
  `createdAt` timestamp NOT NULL DEFAULT current_timestamp(),
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=23 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- ----------------------------
-- Records of users
-- ----------------------------
BEGIN;
INSERT INTO `users` VALUES (6, 'Mumu', '$2y$10$jiaGsfA1xbr7oBHtn3MVkeblmPo5iHAJYd1LbyRS.S3WZbOrFtYpG', 'Murielle', 'Perrache', 'M.Perrache@cogip.fr', 'Secretary', 2, '2019-10-28 20:47:05');
INSERT INTO `users` VALUES (21, 'JC', '$2y$10$LLfQoZXzkBW9geycxjft4OpePtJz73JDcBowJHylEk3vAy1vr.XOO', 'Jean Christophe', 'Ranu', 'jc.ranu@cogip.fr', 'Head Accountant', 3, '2019-11-05 09:59:46');
INSERT INTO `users` VALUES (22, 'philgdep', '$2y$10$.NHwAg3UR746Py7Er8Hg9u7lXNla6sDwZxA/Z4gEipazUMl6K2jO6', 'Philippe', 'Gilles', 'philgdep@gmail.com', 'Developer', 3, '2019-11-07 13:21:24');
COMMIT;

SET FOREIGN_KEY_CHECKS = 1;
