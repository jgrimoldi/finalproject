-- phpMyAdmin SQL Dump
-- version 4.9.5
-- https://www.phpmyadmin.net/
--
-- Servidor: localhost:3306
-- Tiempo de generación: 29-12-2021 a las 03:53:37
-- Versión del servidor: 10.5.12-MariaDB
-- Versión de PHP: 7.3.32

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `id18184099_decathlon_db`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `country`
--

CREATE TABLE `country` (
  `id_country` int(11) NOT NULL,
  `countrycode` char(3) NOT NULL,
  `countryname` varchar(200) NOT NULL,
  `code` char(2) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `country`
--

INSERT INTO `country` (`id_country`, `countrycode`, `countryname`, `code`) VALUES
(1, 'AFG', 'Afghanistan', 'af'),
(2, 'ALA', 'Åland', 'ax'),
(3, 'ALB', 'Albania', 'al'),
(4, 'DZA', 'Algeria', 'dz'),
(5, 'ASM', 'American Samoa', 'as'),
(6, 'AND', 'Andorra', 'ad'),
(7, 'AGO', 'Angola', 'ao'),
(8, 'AIA', 'Anguilla', 'ai'),
(9, 'ATA', 'Antarctica', 'aq'),
(10, 'ATG', 'Antigua and Barbuda', 'ag'),
(11, 'ARG', 'Argentina', 'ar'),
(12, 'ARM', 'Armenia', 'am'),
(13, 'ABW', 'Aruba', 'aw'),
(14, 'AUS', 'Australia', 'au'),
(15, 'AUT', 'Austria', 'at'),
(16, 'AZE', 'Azerbaijan', 'az'),
(17, 'BHS', 'Bahamas', 'bs'),
(18, 'BHR', 'Bahrain', 'bh'),
(19, 'BGD', 'Bangladesh', 'bd'),
(20, 'BRB', 'Barbados', 'bb'),
(21, 'BLR', 'Belarus', 'by'),
(22, 'BEL', 'Belgium', 'be'),
(23, 'BLZ', 'Belize', 'bz'),
(24, 'BEN', 'Benin', 'bj'),
(25, 'BMU', 'Bermuda', 'bm'),
(26, 'BTN', 'Bhutan', 'bt'),
(27, 'BOL', 'Bolivia', 'bo'),
(28, 'BES', 'Bonaire', 'bq'),
(29, 'BIH', 'Bosnia and Herzegovina', 'ba'),
(30, 'BWA', 'Botswana', 'bw'),
(31, 'BVT', 'Bouvet Island', 'bv'),
(32, 'BRA', 'Brazil', 'br'),
(33, 'IOT', 'British Indian Ocean Territory', 'io'),
(34, 'VGB', 'British Virgin Islands', 'vg'),
(35, 'BRN', 'Brunei', 'bn'),
(36, 'BGR', 'Bulgaria', 'bg'),
(37, 'BFA', 'Burkina Faso', 'bf'),
(38, 'BDI', 'Burundi', 'bi'),
(39, 'KHM', 'Cambodia', 'kh'),
(40, 'CMR', 'Cameroon', 'cm'),
(41, 'CAN', 'Canada', 'ca'),
(42, 'CPV', 'Cape Verde', 'cv'),
(43, 'CYM', 'Cayman Islands', 'ky'),
(44, 'CAF', 'Central African Republic', 'cf'),
(45, 'TCD', 'Chad', 'td'),
(46, 'CHL', 'Chile', 'cl'),
(47, 'CHN', 'China', 'cn'),
(48, 'CXR', 'Christmas Island', 'cx'),
(49, 'CCK', 'Cocos [Keeling] Islands', 'cc'),
(50, 'COL', 'Colombia', 'co'),
(51, 'COM', 'Comoros', 'km'),
(52, 'COK', 'Cook Islands', 'ck'),
(53, 'CRI', 'Costa Rica', 'cr'),
(54, 'HRV', 'Croatia', 'hr'),
(55, 'CUB', 'Cuba', 'cu'),
(56, 'CUW', 'Curacao', 'cw'),
(57, 'CYP', 'Cyprus', 'cy'),
(58, 'CZE', 'Czech Republic', 'cz'),
(59, 'COD', 'Democratic Republic of the Congo', 'cd'),
(60, 'DNK', 'Denmark', 'dk'),
(61, 'DJI', 'Djibouti', 'dj'),
(62, 'DMA', 'Dominica', 'dm'),
(63, 'DOM', 'Dominican Republic', 'do'),
(64, 'TLS', 'East Timor', 'tl'),
(65, 'ECU', 'Ecuador', 'ec'),
(66, 'EGY', 'Egypt', 'eg'),
(67, 'SLV', 'El Salvador', 'sv'),
(68, 'GNQ', 'Equatorial Guinea', 'gq'),
(69, 'ERI', 'Eritrea', 'er'),
(70, 'EST', 'Estonia', 'ee'),
(71, 'ETH', 'Ethiopia', 'et'),
(72, 'FLK', 'Falkland Islands', 'fk'),
(73, 'FRO', 'Faroe Islands', 'fo'),
(74, 'FJI', 'Fiji', 'fj'),
(75, 'FIN', 'Finland', 'fi'),
(76, 'FRA', 'France', 'fr'),
(77, 'GUF', 'French Guiana', 'gf'),
(78, 'PYF', 'French Polynesia', 'pf'),
(79, 'ATF', 'French Southern Territories', 'tf'),
(80, 'GAB', 'Gabon', 'ga'),
(81, 'GMB', 'Gambia', 'gm'),
(82, 'GEO', 'Georgia', 'ge'),
(83, 'DEU', 'Germany', 'de'),
(84, 'GHA', 'Ghana', 'gh'),
(85, 'GIB', 'Gibraltar', 'gi'),
(86, 'GRC', 'Greece', 'gr'),
(87, 'GRL', 'Greenland', 'gl'),
(88, 'GRD', 'Grenada', 'gd'),
(89, 'GLP', 'Guadeloupe', 'gp'),
(90, 'GUM', 'Guam', 'gu'),
(91, 'GTM', 'Guatemala', 'gt'),
(92, 'GGY', 'Guernsey', 'gg'),
(93, 'GIN', 'Guinea', 'gn'),
(94, 'GNB', 'Guinea-Bissau', 'gw'),
(95, 'GUY', 'Guyana', 'gy'),
(96, 'HTI', 'Haiti', 'ht'),
(97, 'HMD', 'Heard Island and McDonald Islands', 'hm'),
(98, 'HND', 'Honduras', 'hn'),
(99, 'HKG', 'Hong Kong', 'hk'),
(100, 'HUN', 'Hungary', 'hu'),
(101, 'ISL', 'Iceland', 'is'),
(102, 'IND', 'India', 'in'),
(103, 'IDN', 'Indonesia', 'id'),
(104, 'IRN', 'Iran', 'ir'),
(105, 'IRQ', 'Iraq', 'iq'),
(106, 'IRL', 'Ireland', 'ie'),
(107, 'IMN', 'Isle of Man', 'im'),
(108, 'ISR', 'Israel', 'il'),
(109, 'ITA', 'Italy', 'it'),
(110, 'CIV', 'Ivory Coast', 'ci'),
(111, 'JAM', 'Jamaica', 'jm'),
(112, 'JPN', 'Japan', 'jp'),
(113, 'JEY', 'Jersey', 'je'),
(114, 'JOR', 'Jordan', 'jo'),
(115, 'KAZ', 'Kazakhstan', 'kz'),
(116, 'KEN', 'Kenya', 'ke'),
(117, 'KIR', 'Kiribati', 'ki'),
(118, 'XKX', 'Kosovo', 'xk'),
(119, 'KWT', 'Kuwait', 'kw'),
(120, 'KGZ', 'Kyrgyzstan', 'kg'),
(121, 'LAO', 'Laos', 'la'),
(122, 'LVA', 'Latvia', 'lv'),
(123, 'LBN', 'Lebanon', 'lb'),
(124, 'LSO', 'Lesotho', 'ls'),
(125, 'LBR', 'Liberia', 'lr'),
(126, 'LBY', 'Libya', 'ly'),
(127, 'LIE', 'Liechtenstein', 'li'),
(128, 'LTU', 'Lithuania', 'lt'),
(129, 'LUX', 'Luxembourg', 'lu'),
(130, 'MAC', 'Macao', 'mo'),
(131, 'MKD', 'Macedonia', 'mk'),
(132, 'MDG', 'Madagascar', 'mg'),
(133, 'MWI', 'Malawi', 'mw'),
(134, 'MYS', 'Malaysia', 'my'),
(135, 'MDV', 'Maldives', 'mv'),
(136, 'MLI', 'Mali', 'ml'),
(137, 'MLT', 'Malta', 'mt'),
(138, 'MHL', 'Marshall Islands', 'mh'),
(139, 'MTQ', 'Martinique', 'mq'),
(140, 'MRT', 'Mauritania', 'mr'),
(141, 'MUS', 'Mauritius', 'mu'),
(142, 'MYT', 'Mayotte', 'yt'),
(143, 'MEX', 'Mexico', 'mx'),
(144, 'FSM', 'Micronesia', 'fm'),
(145, 'MDA', 'Moldova', 'md'),
(146, 'MCO', 'Monaco', 'mc'),
(147, 'MNG', 'Mongolia', 'mn'),
(148, 'MNE', 'Montenegro', 'me'),
(149, 'MSR', 'Montserrat', 'ms'),
(150, 'MAR', 'Morocco', 'ma'),
(151, 'MOZ', 'Mozambique', 'mz'),
(152, 'MMR', 'Myanmar [Burma]', 'mm'),
(153, 'NAM', 'Namibia', 'na'),
(154, 'NRU', 'Nauru', 'nr'),
(155, 'NPL', 'Nepal', 'np'),
(156, 'NLD', 'Netherlands', 'nl'),
(157, 'NCL', 'New Caledonia', 'nc'),
(158, 'NZL', 'New Zealand', 'nz'),
(159, 'NIC', 'Nicaragua', 'ni'),
(160, 'NER', 'Niger', 'ne'),
(161, 'NGA', 'Nigeria', 'ng'),
(162, 'NIU', 'Niue', 'nu'),
(163, 'NFK', 'Norfolk Island', 'nf'),
(164, 'PRK', 'North Korea', 'kp'),
(165, 'MNP', 'Northern Mariana Islands', 'mp'),
(166, 'NOR', 'Norway', 'no'),
(167, 'OMN', 'Oman', 'om'),
(168, 'PAK', 'Pakistan', 'pk'),
(169, 'PLW', 'Palau', 'pw'),
(170, 'PSE', 'Palestine', 'ps'),
(171, 'PAN', 'Panama', 'pa'),
(172, 'PNG', 'Papua New Guinea', 'pg'),
(173, 'PRY', 'Paraguay', 'py'),
(174, 'PER', 'Peru', 'pe'),
(175, 'PHL', 'Philippines', 'ph'),
(176, 'PCN', 'Pitcairn Islands', 'pn'),
(177, 'POL', 'Poland', 'pl'),
(178, 'PRT', 'Portugal', 'pt'),
(179, 'PRI', 'Puerto Rico', 'pr'),
(180, 'QAT', 'Qatar', 'qa'),
(181, 'COG', 'Republic of the Congo', 'cg'),
(182, 'REU', 'Réunion', 're'),
(183, 'ROU', 'Romania', 'ro'),
(184, 'RUS', 'Russia', 'ru'),
(185, 'RWA', 'Rwanda', 'rw'),
(186, 'BLM', 'Saint Barthélemy', 'bl'),
(187, 'SHN', 'Saint Helena', 'sh'),
(188, 'KNA', 'Saint Kitts and Nevis', 'kn'),
(189, 'LCA', 'Saint Lucia', 'lc'),
(190, 'MAF', 'Saint Martin', 'mf'),
(191, 'SPM', 'Saint Pierre and Miquelon', 'pm'),
(192, 'VCT', 'Saint Vincent and the Grenadines', 'vc'),
(193, 'WSM', 'Samoa', 'ws'),
(194, 'SMR', 'San Marino', 'sm'),
(195, 'STP', 'São Tomé and Príncipe', 'st'),
(196, 'SAU', 'Saudi Arabia', 'sa'),
(197, 'SEN', 'Senegal', 'sn'),
(198, 'SRB', 'Serbia', 'rs'),
(199, 'SYC', 'Seychelles', 'sc'),
(200, 'SLE', 'Sierra Leone', 'sl'),
(201, 'SGP', 'Singapore', 'sg'),
(202, 'SXM', 'Sint Maarten', 'sx'),
(203, 'SVK', 'Slovakia', 'sk'),
(204, 'SVN', 'Slovenia', 'si'),
(205, 'SLB', 'Solomon Islands', 'sb'),
(206, 'SOM', 'Somalia', 'so'),
(207, 'ZAF', 'South Africa', 'za'),
(208, 'SGS', 'South Georgia and the South Sandwich Islands', 'gs'),
(209, 'KOR', 'South Korea', 'kr'),
(210, 'SSD', 'South Sudan', 'ss'),
(211, 'ESP', 'Spain', 'es'),
(212, 'LKA', 'Sri Lanka', 'lk'),
(213, 'SDN', 'Sudan', 'sd'),
(214, 'SUR', 'Suriname', 'sr'),
(215, 'SJM', 'Svalbard and Jan Mayen', 'sj'),
(216, 'SWZ', 'Swaziland', 'sz'),
(217, 'SWE', 'Sweden', 'se'),
(218, 'CHE', 'Switzerland', 'ch'),
(219, 'SYR', 'Syria', 'sy'),
(220, 'TWN', 'Taiwan', 'tw'),
(221, 'TJK', 'Tajikistan', 'tj'),
(222, 'TZA', 'Tanzania', 'tz'),
(223, 'THA', 'Thailand', 'th'),
(224, 'TGO', 'Togo', 'tg'),
(225, 'TKL', 'Tokelau', 'tk'),
(226, 'TON', 'Tonga', 'to'),
(227, 'TTO', 'Trinidad and Tobago', 'tt'),
(228, 'TUN', 'Tunisia', 'tn'),
(229, 'TUR', 'Turkey', 'tr'),
(230, 'TKM', 'Turkmenistan', 'tm'),
(231, 'TCA', 'Turks and Caicos Islands', 'tc'),
(232, 'TUV', 'Tuvalu', 'tv'),
(233, 'UMI', 'U.S. Minor Outlying Islands', 'um'),
(234, 'VIR', 'U.S. Virgin Islands', 'vi'),
(235, 'UGA', 'Uganda', 'ug'),
(236, 'UKR', 'Ukraine', 'ua'),
(237, 'ARE', 'United Arab Emirates', 'ae'),
(238, 'GBR', 'United Kingdom', 'gb'),
(239, 'USA', 'United States', 'us'),
(240, 'URY', 'Uruguay', 'uy'),
(241, 'UZB', 'Uzbekistan', 'uz'),
(242, 'VUT', 'Vanuatu', 'vu'),
(243, 'VAT', 'Vatican City', 'va'),
(244, 'VEN', 'Venezuela', 've'),
(245, 'VNM', 'Vietnam', 'vn'),
(246, 'WLF', 'Wallis and Futuna', 'wf'),
(247, 'ESH', 'Western Sahara', 'eh'),
(248, 'YEM', 'Yemen', 'ye'),
(249, 'ZMB', 'Zambia', 'zm'),
(250, 'ZWE', 'Zimbabwe', 'zw');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `users`
--

CREATE TABLE `users` (
  `id_user` int(11) NOT NULL,
  `name` varchar(50) NOT NULL,
  `birth` date NOT NULL,
  `citizenship` int(11) NOT NULL,
  `discipline` varchar(50) NOT NULL,
  `discipline_type` varchar(50) NOT NULL,
  `email` varchar(50) NOT NULL,
  `password` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `users`
--

INSERT INTO `users` (`id_user`, `name`, `birth`, `citizenship`, `discipline`, `discipline_type`, `email`, `password`) VALUES
(1, 'Domainer', '1993-12-03', 15, 'Account Executive', 'Cleaning Validation', 'klawrie0@reverbnation.com', 'dR6aVe'),
(2, 'Zontrax', '2001-12-16', 132, 'Nuclear Power Engineer', 'Coastal Zone Management', 'lshurlock1@is.gd', '8fs4cyfOguz6'),
(3, 'Konklux', '2000-03-05', 226, 'Teacher', 'Jazz', 'prye2@deviantart.com', 'IbfjJykVTkq'),
(4, 'Overhold', '1996-04-26', 4, 'Senior Financial Analyst', 'Biodiversity', 'bewen3@ow.ly', 'k5zdoddDI7V'),
(5, 'Zamit', '2001-11-05', 230, 'Analyst Programmer', 'Abstracting', 'syallop4@boston.com', '4ZZlzNpU'),
(6, 'Temp', '2001-10-03', 71, 'Technical Writer', 'Crisis Intervention', 'gfoxworthy5@ocn.ne.jp', 'cFTlGAXAt'),
(7, 'Ventosanzap', '2000-05-25', 165, 'Compensation Analyst', 'ODI', 'pdilrew6@amazonaws.com', '0hvLbu'),
(8, 'Otcom', '1994-01-12', 244, 'Help Desk Technician', 'Yoga', 'bwhittek7@earthlink.net', 'qvzPT2Pyy'),
(9, 'Toughjoyfax', '1995-07-14', 90, 'Environmental Tech', 'Drainage', 'nesome8@un.org', 'LBWEg4Of7LXy'),
(10, 'Lotstring', '1998-03-02', 94, 'Operator', 'WLI', 'asnozzwell9@ed.gov', 'HOxzpZYoyB4'),
(11, 'Konklab', '1999-08-24', 71, 'Teacher', 'Omnibus', 'claurenceaua@myspace.com', 'TMGhgRsY0I'),
(13, 'Biodex', '2001-10-05', 205, 'Sales Representative', 'Kinetic Typography', 'jnelthroppc@dedecms.com', 'Ejz4kD2Of'),
(14, 'Lotstring', '1996-03-05', 141, 'Financial Analyst', 'Offset Printing', 'amcilraithd@tumblr.com', 'gxkjXrf'),
(15, 'Viva', '1993-05-25', 1, 'Assistant Manager', 'Financial Accounting', 'growlstonee@dailymail.co.uk', 'fmnjMIyWCQF'),
(16, 'Tin', '1995-03-29', 192, 'Assistant Manager', 'NFS', 'zmckellochf@aboutads.info', '2aXFzYNRSu4'),
(17, 'Sonsing', '1999-11-25', 72, 'VP Product Management', 'DDE', 'vvanderweedenburgg@apache.org', 'rYOlU3'),
(18, 'Tempsoft', '1997-02-06', 67, 'Financial Advisor', 'BDD', 'rmacdearmonth@ibm.com', 'VVbNzl'),
(19, 'Temp', '1997-03-07', 125, 'Geologist III', 'PQRI', 'jrobici@usda.gov', 'UhsVRXcDD'),
(20, 'Voyatouch', '1999-09-05', 109, 'Web Designer II', 'UMA', 'bderoosj@deliciousdays.com', 'UoOLZ75fMu'),
(21, 'Keylex', '1996-09-23', 167, 'Food Chemist', 'NCIE', 'cmendezk@chron.com', 'uLIusb'),
(22, 'Tres-Zap', '1992-12-28', 54, 'Product Engineer', 'Small Business Online Marketing', 'anelesl@yolasite.com', '1CsWOYxwqUO'),
(23, 'Job', '1995-01-01', 172, 'Account Representative II', 'Pinterest', 'sgofforthm@tinyurl.com', 'G4bR71Duioq'),
(24, 'Alpha', '2000-04-02', 176, 'Payment Adjustment Coordinator', 'nMarket', 'tellesworthen@accuweather.com', 'AHQ5CxCdCHEn'),
(25, 'Zamit', '1996-03-02', 204, 'Data Coordiator', 'Two-phase Flow', 'ikitchersideo@answers.com', 'oMfaKQpWpk'),
(26, 'Opela', '1999-02-24', 106, 'Biostatistician III', 'NICE Call Recording', 'rshirerp@deviantart.com', 'dDIUUgRe5A'),
(27, 'Gembucket', '2001-10-10', 232, 'Assistant Manager', 'Genomics', 'lvayroq@oracle.com', 'CDmU7Lg'),
(28, 'Quo Lux', '2001-02-14', 51, 'Web Designer III', 'WLI', 'meddisforthr@kickstarter.com', 'gr0aM2UHQ'),
(29, 'Sonsing', '1996-12-26', 239, 'Nuclear Power Engineer', 'Firewalls', 'gskirrows@house.gov', 'GnbZvkDal'),
(30, 'Holdlamis', '1996-03-24', 136, 'Dental Hygienist', 'VO', 'cdennertt@jiathis.com', 'vqwmsgjB8'),
(31, 'Cardify', '1992-12-14', 69, 'Professor', 'MCSD', 'kcarrellu@webeden.co.uk', 'jrFKsD'),
(32, 'Sonair', '1999-12-05', 6, 'Occupational Therapist', 'User Experience Design', 'agrixv@woothemes.com', 'vs1GEx07J'),
(33, 'Ronstring', '2001-05-14', 64, 'Human Resources Assistant II', 'Titration', 'cborgbartolow@gmpg.org', 'KEL4ZXiF'),
(34, 'It', '1997-11-06', 211, 'Geologist IV', 'Mixed Signal', 'kluxfordx@boston.com', '5gdKxYCIPWg'),
(35, 'Quo Lux', '1995-04-20', 65, 'Health Coach II', 'German', 'mtapselly@theguardian.com', '0TPhxh'),
(36, 'Wrapsafe', '1995-03-13', 207, 'Programmer IV', 'RRP', 'jlapsleyz@dailymail.co.uk', 'clla0QFLr'),
(37, 'Zathin', '1998-05-29', 225, 'Librarian', 'Aviation Security', 'fwilliams10@cam.ac.uk', 'iFkJawYOB'),
(38, 'Matsoft', '2000-08-02', 221, 'Administrative Assistant I', 'First Aid', 'pdigges11@delicious.com', 'Nn2q0PwuI'),
(39, 'Sub-Ex', '1994-07-06', 58, 'Web Designer III', 'CPA', 'schalke12@microsoft.com', '02T5kw6YZf'),
(40, 'Bamity', '1993-03-17', 14, 'Food Chemist', 'Microsoft Dynamics', 'mlasslett13@nyu.edu', 'rim9zC8GpnSu'),
(41, 'Holdlamis', '2000-08-04', 153, 'Human Resources Manager', 'Family Law', 'gmatussevich14@state.tx.us', 'ahj0RD'),
(42, 'Y-find', '1992-12-23', 137, 'Nurse Practicioner', 'GNU tools', 'nolivie15@craigslist.org', 'zQxhEUKFm9GQ'),
(43, 'Veribet', '1997-08-20', 240, 'Dental Hygienist', 'Posters', 'siredell16@geocities.com', 'rSbni4M00ktF'),
(44, 'Fintone', '2000-03-07', 244, 'Director of Sales', 'qPCR', 'atyler17@tinypic.com', 'z8YEzPHs'),
(45, 'Pannier', '1994-12-15', 27, 'Accounting Assistant I', 'Web Content', 'wdimitriou18@aol.com', 'YHqIlp'),
(46, 'Zontrax', '2000-03-22', 148, 'Environmental Tech', 'Microsoft MVP', 'ssantus19@home.pl', 'ms4arcFtWjAY'),
(47, 'Lotlux', '2000-01-31', 75, 'Speech Pathologist', 'MicroStation', 'bbevar1a@cyberchimps.com', 'PfnxzKE4'),
(48, 'Otcom', '2001-11-22', 91, 'Product Engineer', 'Veneers', 'ksterling1b@eepurl.com', 'W2AX7q00n'),
(49, 'Veribet', '1995-01-18', 46, 'Automation Specialist I', 'Apache ZooKeeper', 'kfumagall1c@home.pl', 'XsehsB'),
(54, 'J G', '1999-01-02', 10, 'Salto', 'Con pértiga', 'joa@mail.com', '$2y$10$JxxfimXZN/NvR2zKA61zcejfTHavfvWSU6l9/HKcXBJWuts6q.jrO'),
(55, 'Mari L', '1962-07-12', 1, 'Carrera', '110m vallas', 'k@lo.com', '$2y$10$kd.k93QfzVdOBOhrMNNyFulJs.7qMYbyZMOq.llE2.cRfGqckgtMW');

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `country`
--
ALTER TABLE `country`
  ADD PRIMARY KEY (`id_country`);

--
-- Indices de la tabla `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id_user`),
  ADD KEY `citizenship` (`citizenship`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `country`
--
ALTER TABLE `country`
  MODIFY `id_country` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=251;

--
-- AUTO_INCREMENT de la tabla `users`
--
ALTER TABLE `users`
  MODIFY `id_user` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=56;

--
-- Restricciones para tablas volcadas
--

--
-- Filtros para la tabla `users`
--
ALTER TABLE `users`
  ADD CONSTRAINT `users_ibfk_1` FOREIGN KEY (`citizenship`) REFERENCES `country` (`id_country`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
