SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";
--
-- Database: `muslimand_db`
--
-- --------------------------------------------------------
CREATE TABLE IF NOT EXISTS `groups` (
  `id` mediumint(8) unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(20) NOT NULL,
  `description` varchar(100) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=1;
INSERT INTO `groups` (`id`, `name`, `description`) VALUES
(1, 'admin', 'Administrator'),
(2, 'member', 'General User');
-- --------------------------------------------------------
CREATE TABLE IF NOT EXISTS `login_attempts` (
  `id` int(11) unsigned NOT NULL AUTO_INCREMENT,
  `ip_address` varbinary(16) NOT NULL,
  `login` varchar(100) NOT NULL,
  `time` int(11) unsigned DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 AUTO_INCREMENT=1 ;
-- --------------------------------------------------------
CREATE TABLE IF NOT EXISTS `account_status` (
  `id` int(11) unsigned NOT NULL AUTO_INCREMENT,
  `description` varchar(200) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=6;   
INSERT INTO `account_status` (`id`, `description`) VALUES
(1, 'Active'),
(2, 'Inactive'),
(3, 'Suspended'),
(4, 'Deactivated'),
(5, 'Blocked');
-- --------------------------------------------------------
CREATE TABLE IF NOT EXISTS `users` (
  `id` int(11) unsigned NOT NULL AUTO_INCREMENT,
  `ip_address` varbinary(16) NOT NULL,
  `username` varchar(100) NOT NULL,
  `password` varchar(80) NOT NULL,
  `salt` varchar(40) DEFAULT NULL,
  `email` varchar(100) NOT NULL,
  `activation_code` varchar(40) DEFAULT NULL,
  `forgotten_password_code` varchar(40) DEFAULT NULL,
  `forgotten_password_time` int(11) unsigned DEFAULT NULL,
  `remember_code` varchar(40) DEFAULT NULL,
  `created_on` int(11) unsigned NOT NULL,
  `last_login` int(11) unsigned DEFAULT NULL,
  `active` tinyint(1) unsigned DEFAULT NULL,
  `first_name` varchar(50) DEFAULT NULL,
  `last_name` varchar(50) DEFAULT NULL,
  `company` varchar(100) DEFAULT NULL,
  `phone` varchar(20) DEFAULT NULL,
  `account_status_id` int(11) unsigned NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=1 ;
ALTER TABLE `users`
  ADD CONSTRAINT `fk_users_laccount_status1` FOREIGN KEY (`account_status_id`) REFERENCES `account_status` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;
INSERT INTO `users` (`id`, `ip_address`, `username`, `password`, `salt`, `email`, `activation_code`, `forgotten_password_code`, `forgotten_password_time`, `remember_code`, `created_on`, `last_login`, `account_status_id`, `first_name`, `last_name`, `company`, `phone`) VALUES
(1, '\0\0', 'administrator', '59beecdf7fc966e2f17fd8f65a4a9aeb09d4a3d4', '9462e8eee0', 'admin@admin.com', '', NULL, NULL, NULL, 1268889823, 1373438882, 1, 'Admin', 'istrator', 'ADMIN', '0');
-- --------------------------------------------------------
CREATE TABLE IF NOT EXISTS `users_groups` (
  `id` int(11) unsigned NOT NULL AUTO_INCREMENT,
  `user_id` int(11) unsigned NOT NULL,
  `group_id` mediumint(8) unsigned NOT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `uc_users_groups` (`user_id`,`group_id`),
  KEY `fk_users_groups_users1_idx` (`user_id`),
  KEY `fk_users_groups_groups1_idx` (`group_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=1;
ALTER TABLE `users_groups`
  ADD CONSTRAINT `fk_users_groups_users1` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`) ON DELETE CASCADE ON UPDATE NO ACTION,
  ADD CONSTRAINT `fk_users_groups_groups1` FOREIGN KEY (`group_id`) REFERENCES `groups` (`id`) ON DELETE CASCADE ON UPDATE NO ACTION;
INSERT INTO `users_groups` (`id`, `user_id`, `group_id`) VALUES
(1, 1, 1),
(2, 1, 2);
-- --------------------------------------------------------
CREATE TABLE IF NOT EXISTS `gender` (
  `id` int(11) unsigned NOT NULL AUTO_INCREMENT,
  `gender_code` char NOT NULL,
  `gender_name` varchar(8) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=1;
INSERT INTO `gender` (`id`, `gender_code`, `gender_name`) VALUES
(1, 'M', "Male"),
(2, 'F', "Female");
-- -------------------------------------------------------- 
CREATE TABLE `countries` (
`id` int(11) unsigned NOT NULL AUTO_INCREMENT,
`country_code` varchar(2) NOT NULL default '',
`country_name` varchar(100) NOT NULL default '',
PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=1;
INSERT INTO `countries` VALUES (1, 'US', 'United States');
INSERT INTO `countries` VALUES (2, 'CA', 'Canada');
INSERT INTO `countries` VALUES (3, 'AF', 'Afghanistan');
INSERT INTO `countries` VALUES (4, 'AL', 'Albania');
INSERT INTO `countries` VALUES (5, 'DZ', 'Algeria');
INSERT INTO `countries` VALUES (6, 'DS', 'American Samoa');
INSERT INTO `countries` VALUES (7, 'AD', 'Andorra');
INSERT INTO `countries` VALUES (8, 'AO', 'Angola');
INSERT INTO `countries` VALUES (9, 'AI', 'Anguilla');
INSERT INTO `countries` VALUES (10, 'AQ', 'Antarctica');
INSERT INTO `countries` VALUES (11, 'AG', 'Antigua and/or Barbuda');
INSERT INTO `countries` VALUES (12, 'AR', 'Argentina');
INSERT INTO `countries` VALUES (13, 'AM', 'Armenia');
INSERT INTO `countries` VALUES (14, 'AW', 'Aruba');
INSERT INTO `countries` VALUES (15, 'AU', 'Australia');
INSERT INTO `countries` VALUES (16, 'AT', 'Austria');
INSERT INTO `countries` VALUES (17, 'AZ', 'Azerbaijan');
INSERT INTO `countries` VALUES (18, 'BS', 'Bahamas');
INSERT INTO `countries` VALUES (19, 'BH', 'Bahrain');
INSERT INTO `countries` VALUES (20, 'BD', 'Bangladesh');
INSERT INTO `countries` VALUES (21, 'BB', 'Barbados');
INSERT INTO `countries` VALUES (22, 'BY', 'Belarus');
INSERT INTO `countries` VALUES (23, 'BE', 'Belgium');
INSERT INTO `countries` VALUES (24, 'BZ', 'Belize');
INSERT INTO `countries` VALUES (25, 'BJ', 'Benin');
INSERT INTO `countries` VALUES (26, 'BM', 'Bermuda');
INSERT INTO `countries` VALUES (27, 'BT', 'Bhutan');
INSERT INTO `countries` VALUES (28, 'BO', 'Bolivia');
INSERT INTO `countries` VALUES (29, 'BA', 'Bosnia and Herzegovina');
INSERT INTO `countries` VALUES (30, 'BW', 'Botswana');
INSERT INTO `countries` VALUES (31, 'BV', 'Bouvet Island');
INSERT INTO `countries` VALUES (32, 'BR', 'Brazil');
INSERT INTO `countries` VALUES (33, 'IO', 'British lndian Ocean Territory');
INSERT INTO `countries` VALUES (34, 'BN', 'Brunei Darussalam');
INSERT INTO `countries` VALUES (35, 'BG', 'Bulgaria');
INSERT INTO `countries` VALUES (36, 'BF', 'Burkina Faso');
INSERT INTO `countries` VALUES (37, 'BI', 'Burundi');
INSERT INTO `countries` VALUES (38, 'KH', 'Cambodia');
INSERT INTO `countries` VALUES (39, 'CM', 'Cameroon');
INSERT INTO `countries` VALUES (40, 'CV', 'Cape Verde');
INSERT INTO `countries` VALUES (41, 'KY', 'Cayman Islands');
INSERT INTO `countries` VALUES (42, 'CF', 'Central African Republic');
INSERT INTO `countries` VALUES (43, 'TD', 'Chad');
INSERT INTO `countries` VALUES (44, 'CL', 'Chile');
INSERT INTO `countries` VALUES (45, 'CN', 'China');
INSERT INTO `countries` VALUES (46, 'CX', 'Christmas Island');
INSERT INTO `countries` VALUES (47, 'CC', 'Cocos (Keeling) Islands');
INSERT INTO `countries` VALUES (48, 'CO', 'Colombia');
INSERT INTO `countries` VALUES (49, 'KM', 'Comoros');
INSERT INTO `countries` VALUES (50, 'CG', 'Congo');
INSERT INTO `countries` VALUES (51, 'CK', 'Cook Islands');
INSERT INTO `countries` VALUES (52, 'CR', 'Costa Rica');
INSERT INTO `countries` VALUES (53, 'HR', 'Croatia (Hrvatska)');
INSERT INTO `countries` VALUES (54, 'CU', 'Cuba');
INSERT INTO `countries` VALUES (55, 'CY', 'Cyprus');
INSERT INTO `countries` VALUES (56, 'CZ', 'Czech Republic');
INSERT INTO `countries` VALUES (57, 'DK', 'Denmark');
INSERT INTO `countries` VALUES (58, 'DJ', 'Djibouti');
INSERT INTO `countries` VALUES (59, 'DM', 'Dominica');
INSERT INTO `countries` VALUES (60, 'DO', 'Dominican Republic');
INSERT INTO `countries` VALUES (61, 'TP', 'East Timor');
INSERT INTO `countries` VALUES (62, 'EC', 'Ecudaor');
INSERT INTO `countries` VALUES (63, 'EG', 'Egypt');
INSERT INTO `countries` VALUES (64, 'SV', 'El Salvador');
INSERT INTO `countries` VALUES (65, 'GQ', 'Equatorial Guinea');
INSERT INTO `countries` VALUES (66, 'ER', 'Eritrea');
INSERT INTO `countries` VALUES (67, 'EE', 'Estonia');
INSERT INTO `countries` VALUES (68, 'ET', 'Ethiopia');
INSERT INTO `countries` VALUES (69, 'FK', 'Falkland Islands (Malvinas)');
INSERT INTO `countries` VALUES (70, 'FO', 'Faroe Islands');
INSERT INTO `countries` VALUES (71, 'FJ', 'Fiji');
INSERT INTO `countries` VALUES (72, 'FI', 'Finland');
INSERT INTO `countries` VALUES (73, 'FR', 'France');
INSERT INTO `countries` VALUES (74, 'FX', 'France, Metropolitan');
INSERT INTO `countries` VALUES (75, 'GF', 'French Guiana');
INSERT INTO `countries` VALUES (76, 'PF', 'French Polynesia');
INSERT INTO `countries` VALUES (77, 'TF', 'French Southern Territories');
INSERT INTO `countries` VALUES (78, 'GA', 'Gabon');
INSERT INTO `countries` VALUES (79, 'GM', 'Gambia');
INSERT INTO `countries` VALUES (80, 'GE', 'Georgia');
INSERT INTO `countries` VALUES (81, 'DE', 'Germany');
INSERT INTO `countries` VALUES (82, 'GH', 'Ghana');
INSERT INTO `countries` VALUES (83, 'GI', 'Gibraltar');
INSERT INTO `countries` VALUES (84, 'GR', 'Greece');
INSERT INTO `countries` VALUES (85, 'GL', 'Greenland');
INSERT INTO `countries` VALUES (86, 'GD', 'Grenada');
INSERT INTO `countries` VALUES (87, 'GP', 'Guadeloupe');
INSERT INTO `countries` VALUES (88, 'GU', 'Guam');
INSERT INTO `countries` VALUES (89, 'GT', 'Guatemala');
INSERT INTO `countries` VALUES (90, 'GN', 'Guinea');
INSERT INTO `countries` VALUES (91, 'GW', 'Guinea-Bissau');
INSERT INTO `countries` VALUES (92, 'GY', 'Guyana');
INSERT INTO `countries` VALUES (93, 'HT', 'Haiti');
INSERT INTO `countries` VALUES (94, 'HM', 'Heard and Mc Donald Islands');
INSERT INTO `countries` VALUES (95, 'HN', 'Honduras');
INSERT INTO `countries` VALUES (96, 'HK', 'Hong Kong');
INSERT INTO `countries` VALUES (97, 'HU', 'Hungary');
INSERT INTO `countries` VALUES (98, 'IS', 'Iceland');
INSERT INTO `countries` VALUES (99, 'IN', 'India');
INSERT INTO `countries` VALUES (100, 'ID', 'Indonesia');
INSERT INTO `countries` VALUES (101, 'IR', 'Iran (Islamic Republic of)');
INSERT INTO `countries` VALUES (102, 'IQ', 'Iraq');
INSERT INTO `countries` VALUES (103, 'IE', 'Ireland');
INSERT INTO `countries` VALUES (104, 'IL', 'Israel');
INSERT INTO `countries` VALUES (105, 'IT', 'Italy');
INSERT INTO `countries` VALUES (106, 'CI', 'Ivory Coast');
INSERT INTO `countries` VALUES (107, 'JM', 'Jamaica');
INSERT INTO `countries` VALUES (108, 'JP', 'Japan');
INSERT INTO `countries` VALUES (109, 'JO', 'Jordan');
INSERT INTO `countries` VALUES (110, 'KZ', 'Kazakhstan');
INSERT INTO `countries` VALUES (111, 'KE', 'Kenya');
INSERT INTO `countries` VALUES (112, 'KI', 'Kiribati');
INSERT INTO `countries` VALUES (113, 'KP', 'Korea, Democratic People''s Republic of');
INSERT INTO `countries` VALUES (114, 'KR', 'Korea, Republic of');
INSERT INTO `countries` VALUES (115, 'KW', 'Kuwait');
INSERT INTO `countries` VALUES (116, 'KG', 'Kyrgyzstan');
INSERT INTO `countries` VALUES (117, 'LA', 'Lao People''s Democratic Republic');
INSERT INTO `countries` VALUES (118, 'LV', 'Latvia');
INSERT INTO `countries` VALUES (119, 'LB', 'Lebanon');
INSERT INTO `countries` VALUES (120, 'LS', 'Lesotho');
INSERT INTO `countries` VALUES (121, 'LR', 'Liberia');
INSERT INTO `countries` VALUES (122, 'LY', 'Libyan Arab Jamahiriya');
INSERT INTO `countries` VALUES (123, 'LI', 'Liechtenstein');
INSERT INTO `countries` VALUES (124, 'LT', 'Lithuania');
INSERT INTO `countries` VALUES (125, 'LU', 'Luxembourg');
INSERT INTO `countries` VALUES (126, 'MO', 'Macau');
INSERT INTO `countries` VALUES (127, 'MK', 'Macedonia');
INSERT INTO `countries` VALUES (128, 'MG', 'Madagascar');
INSERT INTO `countries` VALUES (129, 'MW', 'Malawi');
INSERT INTO `countries` VALUES (130, 'MY', 'Malaysia');
INSERT INTO `countries` VALUES (131, 'MV', 'Maldives');
INSERT INTO `countries` VALUES (132, 'ML', 'Mali');
INSERT INTO `countries` VALUES (133, 'MT', 'Malta');
INSERT INTO `countries` VALUES (134, 'MH', 'Marshall Islands');
INSERT INTO `countries` VALUES (135, 'MQ', 'Martinique');
INSERT INTO `countries` VALUES (136, 'MR', 'Mauritania');
INSERT INTO `countries` VALUES (137, 'MU', 'Mauritius');
INSERT INTO `countries` VALUES (138, 'TY', 'Mayotte');
INSERT INTO `countries` VALUES (139, 'MX', 'Mexico');
INSERT INTO `countries` VALUES (140, 'FM', 'Micronesia, Federated States of');
INSERT INTO `countries` VALUES (141, 'MD', 'Moldova, Republic of');
INSERT INTO `countries` VALUES (142, 'MC', 'Monaco');
INSERT INTO `countries` VALUES (143, 'MN', 'Mongolia');
INSERT INTO `countries` VALUES (144, 'MS', 'Montserrat');
INSERT INTO `countries` VALUES (145, 'MA', 'Morocco');
INSERT INTO `countries` VALUES (146, 'MZ', 'Mozambique');
INSERT INTO `countries` VALUES (147, 'MM', 'Myanmar');
INSERT INTO `countries` VALUES (148, 'NA', 'Namibia');
INSERT INTO `countries` VALUES (149, 'NR', 'Nauru');
INSERT INTO `countries` VALUES (150, 'NP', 'Nepal');
INSERT INTO `countries` VALUES (151, 'NL', 'Netherlands');
INSERT INTO `countries` VALUES (152, 'AN', 'Netherlands Antilles');
INSERT INTO `countries` VALUES (153, 'NC', 'New Caledonia');
INSERT INTO `countries` VALUES (154, 'NZ', 'New Zealand');
INSERT INTO `countries` VALUES (155, 'NI', 'Nicaragua');
INSERT INTO `countries` VALUES (156, 'NE', 'Niger');
INSERT INTO `countries` VALUES (157, 'NG', 'Nigeria');
INSERT INTO `countries` VALUES (158, 'NU', 'Niue');
INSERT INTO `countries` VALUES (159, 'NF', 'Norfork Island');
INSERT INTO `countries` VALUES (160, 'MP', 'Northern Mariana Islands');
INSERT INTO `countries` VALUES (161, 'NO', 'Norway');
INSERT INTO `countries` VALUES (162, 'OM', 'Oman');
INSERT INTO `countries` VALUES (163, 'PK', 'Pakistan');
INSERT INTO `countries` VALUES (164, 'PW', 'Palau');
INSERT INTO `countries` VALUES (165, 'PA', 'Panama');
INSERT INTO `countries` VALUES (166, 'PG', 'Papua New Guinea');
INSERT INTO `countries` VALUES (167, 'PY', 'Paraguay');
INSERT INTO `countries` VALUES (168, 'PE', 'Peru');
INSERT INTO `countries` VALUES (169, 'PH', 'Philippines');
INSERT INTO `countries` VALUES (170, 'PN', 'Pitcairn');
INSERT INTO `countries` VALUES (171, 'PL', 'Poland');
INSERT INTO `countries` VALUES (172, 'PT', 'Portugal');
INSERT INTO `countries` VALUES (173, 'PR', 'Puerto Rico');
INSERT INTO `countries` VALUES (174, 'QA', 'Qatar');
INSERT INTO `countries` VALUES (175, 'RE', 'Reunion');
INSERT INTO `countries` VALUES (176, 'RO', 'Romania');
INSERT INTO `countries` VALUES (177, 'RU', 'Russian Federation');
INSERT INTO `countries` VALUES (178, 'RW', 'Rwanda');
INSERT INTO `countries` VALUES (179, 'KN', 'Saint Kitts and Nevis');
INSERT INTO `countries` VALUES (180, 'LC', 'Saint Lucia');
INSERT INTO `countries` VALUES (181, 'VC', 'Saint Vincent and the Grenadines');
INSERT INTO `countries` VALUES (182, 'WS', 'Samoa');
INSERT INTO `countries` VALUES (183, 'SM', 'San Marino');
INSERT INTO `countries` VALUES (184, 'ST', 'Sao Tome and Principe');
INSERT INTO `countries` VALUES (185, 'SA', 'Saudi Arabia');
INSERT INTO `countries` VALUES (186, 'SN', 'Senegal');
INSERT INTO `countries` VALUES (187, 'SC', 'Seychelles');
INSERT INTO `countries` VALUES (188, 'SL', 'Sierra Leone');
INSERT INTO `countries` VALUES (189, 'SG', 'Singapore');
INSERT INTO `countries` VALUES (190, 'SK', 'Slovakia');
INSERT INTO `countries` VALUES (191, 'SI', 'Slovenia');
INSERT INTO `countries` VALUES (192, 'SB', 'Solomon Islands');
INSERT INTO `countries` VALUES (193, 'SO', 'Somalia');
INSERT INTO `countries` VALUES (194, 'ZA', 'South Africa');
INSERT INTO `countries` VALUES (195, 'GS', 'South Georgia South Sandwich Islands');
INSERT INTO `countries` VALUES (196, 'ES', 'Spain');
INSERT INTO `countries` VALUES (197, 'LK', 'Sri Lanka');
INSERT INTO `countries` VALUES (198, 'SH', 'St. Helena');
INSERT INTO `countries` VALUES (199, 'PM', 'St. Pierre and Miquelon');
INSERT INTO `countries` VALUES (200, 'SD', 'Sudan');
INSERT INTO `countries` VALUES (201, 'SR', 'Suriname');
INSERT INTO `countries` VALUES (202, 'SJ', 'Svalbarn and Jan Mayen Islands');
INSERT INTO `countries` VALUES (203, 'SZ', 'Swaziland');
INSERT INTO `countries` VALUES (204, 'SE', 'Sweden');
INSERT INTO `countries` VALUES (205, 'CH', 'Switzerland');
INSERT INTO `countries` VALUES (206, 'SY', 'Syrian Arab Republic');
INSERT INTO `countries` VALUES (207, 'TW', 'Taiwan');
INSERT INTO `countries` VALUES (208, 'TJ', 'Tajikistan');
INSERT INTO `countries` VALUES (209, 'TZ', 'Tanzania, United Republic of');
INSERT INTO `countries` VALUES (210, 'TH', 'Thailand');
INSERT INTO `countries` VALUES (211, 'TG', 'Togo');
INSERT INTO `countries` VALUES (212, 'TK', 'Tokelau');
INSERT INTO `countries` VALUES (213, 'TO', 'Tonga');
INSERT INTO `countries` VALUES (214, 'TT', 'Trinidad and Tobago');
INSERT INTO `countries` VALUES (215, 'TN', 'Tunisia');
INSERT INTO `countries` VALUES (216, 'TR', 'Turkey');
INSERT INTO `countries` VALUES (217, 'TM', 'Turkmenistan');
INSERT INTO `countries` VALUES (218, 'TC', 'Turks and Caicos Islands');
INSERT INTO `countries` VALUES (219, 'TV', 'Tuvalu');
INSERT INTO `countries` VALUES (220, 'UG', 'Uganda');
INSERT INTO `countries` VALUES (221, 'UA', 'Ukraine');
INSERT INTO `countries` VALUES (222, 'AE', 'United Arab Emirates');
INSERT INTO `countries` VALUES (223, 'GB', 'United Kingdom');
INSERT INTO `countries` VALUES (224, 'UM', 'United States minor outlying islands');
INSERT INTO `countries` VALUES (225, 'UY', 'Uruguay');
INSERT INTO `countries` VALUES (226, 'UZ', 'Uzbekistan');
INSERT INTO `countries` VALUES (227, 'VU', 'Vanuatu');
INSERT INTO `countries` VALUES (228, 'VA', 'Vatican City State');
INSERT INTO `countries` VALUES (229, 'VE', 'Venezuela');
INSERT INTO `countries` VALUES (230, 'VN', 'Vietnam');
INSERT INTO `countries` VALUES (231, 'VG', 'Virigan Islands (British)');
INSERT INTO `countries` VALUES (232, 'VI', 'Virgin Islands (U.S.)');
INSERT INTO `countries` VALUES (233, 'WF', 'Wallis and Futuna Islands');
INSERT INTO `countries` VALUES (234, 'EH', 'Western Sahara');
INSERT INTO `countries` VALUES (235, 'YE', 'Yemen');
INSERT INTO `countries` VALUES (236, 'YU', 'Yugoslavia');
INSERT INTO `countries` VALUES (237, 'ZR', 'Zaire');
INSERT INTO `countries` VALUES (238, 'ZM', 'Zambia');
INSERT INTO `countries` VALUES (239, 'ZW', 'Zimbabwe');
-- -------------------------------------------------------- 
CREATE TABLE IF NOT EXISTS `basic_profile` (
  `id` int(11) unsigned NOT NULL AUTO_INCREMENT,
  `user_id` int(11) unsigned NOT NULL,
  `gender_id` int(11) unsigned,
  `dob` int(11) DEFAULT 0,
  `country_id` int(11) unsigned,
  `created_on` int(11) DEFAULT 0,
  `modified_on` int(11) DEFAULT 0,
  PRIMARY KEY (`id`),
  UNIQUE KEY(`user_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=1;
ALTER TABLE `basic_profile`
  ADD CONSTRAINT `fk_basic_profile_user` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `fk_basic_profile_country` FOREIGN KEY (`country_id`) REFERENCES `countries` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `fk_basic_profile_gender` FOREIGN KEY (`gender_id`) REFERENCES `gender` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;