-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: localhost:8889
-- Generation Time: Jun 29, 2023 at 04:44 PM
-- Server version: 5.7.39
-- PHP Version: 7.4.33

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `critihome`
--

-- --------------------------------------------------------

--
-- Table structure for table `bookings`
--

CREATE TABLE `bookings` (
  `id` int(10) NOT NULL,
  `name` varchar(100) NOT NULL,
  `phone_number` bigint(15) NOT NULL,
  `email` varchar(100) DEFAULT NULL,
  `address` longtext NOT NULL,
  `service_id` int(10) DEFAULT NULL,
  `booking_date` varchar(10) NOT NULL,
  `is_completed` tinyint(1) NOT NULL DEFAULT '0',
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `kolkata_localities`
--

CREATE TABLE `kolkata_localities` (
  `id` int(11) NOT NULL,
  `name` varchar(200) NOT NULL,
  `pin` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `kolkata_localities`
--

INSERT INTO `kolkata_localities` (`id`, `name`, `pin`) VALUES
(1, 'Ahritola', 700005),
(2, 'Hatkhola', 700005),
(3, 'Ashokegarh', 700108),
(4, 'Bonhooghly', 700108),
(5, 'Beadon Street', 700006),
(6, 'ISI PO', 700108),
(7, 'Bidhan Sarani', 700006),
(8, 'Baranagar', 700036),
(9, 'Jorasanko', 700006),
(10, 'Archana', 700007),
(11, 'Manicktala', 700006),
(12, 'Bengal Immunity', 700036),
(13, 'Pathuriaghata', 700006),
(14, 'Kuthighat Road', 700036),
(15, 'Sahitya Parisad', 700006),
(16, 'Simla', 700006),
(17, 'Amrita Bazar Partika', 700003),
(18, 'Barabazar', 700007),
(19, 'Baghbazar', 700003),
(20, 'Alambazar', 700035),
(21, 'Girish Avenue', 700003),
(22, 'Deshbandhu Road', 700035),
(23, 'Belgachia', 700037),
(24, 'College Square (Kolkata)', 700007),
(25, 'Bediapara', 700077),
(26, 'Belgachia Road', 700037),
(27, 'Kalakar Street', 700007),
(28, 'Northern Avenue', 700037),
(29, 'Strand Road', 700007),
(30, 'Cossipore', 700002),
(31, 'Vaishya Sabha', 700007),
(32, 'Cossipore Gun Factory', 700002),
(33, 'Dumdum Road', 700074),
(34, 'Indian Research', 700002),
(35, 'Dumdum', 700028),
(36, 'Jawpore', 700074),
(37, 'Kolkata Armed Police', 700002),
(38, 'Motijheel', 700074),
(39, 'Jugipara Satganchi', 700028),
(40, 'Paikapara', 700002),
(41, 'Durganagar', 700065),
(42, 'Kamalapur', 700028),
(43, 'Postal Stores Depot', 700002),
(44, 'Kendriya Vihar', 700052),
(45, 'Health Institute', 700065),
(46, 'Kumarpara', 700028),
(47, 'Satchasipara', 700002),
(48, 'Rabindra Nagar', 700065),
(49, 'Kolkata Airport', 700052),
(50, 'Nagerbazar', 700028),
(51, 'Tala', 700002),
(52, 'Ordnance Factory', 700028),
(53, 'Subhas Nagar', 700065),
(54, 'Kolkata Airport Po', 700052),
(55, 'Rajabagan', 700028),
(56, 'Ghugudanga', 700030),
(57, 'R.G.Kar Medical College', 700004),
(58, 'Netaji Colony', 700090),
(59, 'Purba Sinthee', 700030),
(60, 'Lily Biscuit', 700067),
(61, 'Shyambazar Mail', 700004),
(62, 'Noapara', 700090),
(63, 'Sethbagan', 700030),
(64, 'Ultadanga Main Road', 700067),
(65, 'Ultadanga', 700004),
(66, 'Jessore Road', 700080),
(67, 'Sinthee', 700050),
(68, 'Mall Road', 700080),
(69, 'South Sinhee', 700050),
(70, 'Asylum Lane', 700014),
(71, 'Bamboovila', 700014),
(72, 'Intally', 700014),
(73, 'Linton Street', 700014),
(74, 'Sealdah', 700014),
(75, 'Taltala', 700014),
(76, 'Sales Tax Building', 700015),
(77, 'Seal Lane', 700015),
(78, 'Abinash Chaowdhury Lane', 700046),
(79, 'Parsibagan', 700009),
(80, 'Gobinda Khatick Road', 700046),
(81, 'Tangra', 700015),
(82, 'Raja Ram Mohan Sarani', 700009),
(83, 'Beleghata', 700010),
(84, 'Circus Avenue', 700017),
(85, 'Joramandir', 700010),
(86, 'Jhowtala', 700017),
(87, 'Subhash Sarabor', 700010),
(88, 'Bengal Chemical', 700054),
(89, 'Park Circus', 700017),
(90, 'Cmda Abasan', 700054),
(91, 'Kankurgachi', 700054),
(92, 'Shakespeare Sarani', 700017),
(93, 'A.J.C.Bose Road', 700020),
(94, 'Phulbagan', 700054),
(95, 'Gokhel Road', 700020),
(96, 'Ram Krishna Samadhi Road', 700054),
(97, 'Badartala', 700044),
(98, 'K.M.Hospital', 700020),
(99, 'Baghajatin', 700086),
(100, 'Alipore', 700027),
(101, 'Rajabagan Dock Yard', 700044),
(102, 'L.R.Sarani', 700020),
(103, 'Bakery Road', 700022),
(104, 'Hastings', 700022),
(105, 'Alipore Bodyguard Line', 700027),
(106, 'Alipore Civil Court', 700027),
(107, 'Alipore Dist Board', 700027),
(108, 'Chetla', 700027),
(109, 'Mominpur', 700027),
(110, 'Natioinal Library', 700027),
(111, 'Ballygunge', 700019),
(112, 'Barisha', 700008),
(113, 'Ballygunge RS', 700019),
(114, 'Ballygunge Sc College', 700019),
(115, 'Garcha Road', 700019),
(116, 'Gariahat Market', 700019),
(117, 'Bartala', 700018),
(118, 'Golpark', 700019),
(119, 'Rabindra Nagar (Kolkata)', 700018),
(120, 'Behala', 700034),
(121, 'Behala Municipal Market', 700034),
(122, 'Brahma Samaj Road', 700034),
(123, 'Bhawanipore', 700025),
(124, 'Jayshree Park', 700034),
(125, 'Bidhangarh', 700066),
(126, 'Lansdowne Market', 700025),
(127, 'Panchanantala', 700034),
(128, 'Ramkrishna Park', 700025),
(129, 'Senhati', 700034),
(130, 'Bijoygarh', 700032),
(131, 'Jadavpur University', 700032),
(132, 'Pgh Shah Road', 700032),
(133, 'Bosepukur Road', 700042),
(134, 'Kasba (Kolkata)', 700042),
(135, 'Bowbazar (Kolkata)', 700012),
(136, 'Sankaritola', 700012),
(137, 'Yogayog Bhawan', 700012),
(138, 'Brace Bridge', 700088),
(139, 'Hyde Road', 700088),
(140, 'Taratala Road', 700088),
(141, 'Telecom Factory', 700088),
(142, 'Council House Street', 700001),
(143, 'Customs House', 700001),
(144, 'Khengrapatti', 700001),
(145, 'Chittaranjan Avenue (Kolkata)', 700073),
(146, 'Dhakuria', 700031),
(147, 'Colootola', 700073),
(148, 'Dharmatala', 700013),
(149, 'K.P.Roy Lane', 700031),
(150, 'Kolkata University', 700073),
(151, 'Dover Lane', 700029),
(152, 'Tiretta Bazar', 700073),
(153, 'Kolkatta', 700001),
(154, 'Elliot Road', 700016),
(155, 'E.K.T', 700107),
(156, 'Lake Market', 700029),
(157, 'Lalbazar (Kolkata)', 700001),
(158, 'Esplanade', 700069),
(159, 'Rash Behari Avenue', 700029),
(160, 'Madrassa', 700016),
(161, 'New Secretariat Bldg.', 700001),
(162, 'Income Tax Building', 700069),
(163, 'Park Street', 700016),
(164, 'Sarat Bose Road', 700029),
(165, 'Pollock Street', 700001),
(166, 'R.N. Mukherjee Road', 700001),
(167, 'Fort William', 700021),
(168, 'Radha Bazar', 700001),
(169, 'Reserve Bank Building', 700001),
(170, 'Telephone Bhawan', 700001),
(171, 'Ganguly Bagan', 700047),
(172, 'Treasury Building', 700001),
(173, 'Garia BT', 700047),
(174, 'W.B.Assembly House', 700001),
(175, 'Garden Reach', 700024),
(176, 'Naktala', 700047),
(177, 'K.C.Mills', 700024),
(178, 'Raipur Jorabagan Road', 700047),
(179, 'P.G.Reach', 700024),
(180, 'Garfa', 700075),
(181, 'T.G.Road', 700024),
(182, 'Golf Green', 700095),
(183, 'Santoshpur', 700075),
(184, 'Haltu', 700078),
(185, 'Santoshpur Avenue', 700075),
(186, 'Jadavgarh', 700078),
(187, 'Viveknagar (Kolkata)', 700075),
(188, 'Haridevpur', 700082),
(189, 'K.P.Bazar (Kolkata)', 700082),
(190, 'Hindustan Building', 700072),
(191, 'Princep Street', 700072),
(192, 'Sooterkin Street', 700072),
(193, 'Indrani Park', 700033),
(194, 'T.C.Road', 700033),
(195, 'Tollygunge', 700033),
(196, 'Jairampur (Kolkata)', 700061),
(197, 'Kasthadanga', 700061),
(198, 'Jodhpur Park', 700068),
(199, 'Sarsoona', 700061),
(200, 'K.G Bose Sarani', 700085),
(201, 'Kalabagan', 700053),
(202, 'Kolkata Mint', 700053),
(203, 'N.R.Avenue', 700053),
(204, 'Kalagachia (Kolkata)', 700063),
(205, 'New Alipore', 700053),
(206, 'Paschim Barisha', 700063),
(207, 'Thakurpukur', 700063),
(208, 'Kalighat', 700026),
(209, 'Kalikapur', 700099),
(210, 'Kalimandir', 700026),
(211, 'Khiddirpore', 700023),
(212, 'Lake Gardens', 700045),
(213, 'Keoratala', 700026),
(214, 'Mukundapur', 700099),
(215, 'Mansatala', 700023),
(216, 'R.K.Seva Pratisthan', 700026),
(217, 'Raja J.N.Market', 700023),
(218, 'Sahanagar (Kolkata)', 700026),
(219, 'Watgunge', 700023),
(220, 'Southern Market', 700026),
(221, 'Little Russel Street', 700071),
(222, 'Middleton Row', 700071),
(223, 'Russel Street', 700071),
(224, 'Mahendra Banerjee Road', 700060),
(225, 'Parnasree Pally', 700060),
(226, 'Netaji Nagar (Kolkata)', 700040),
(227, 'Regent Park', 700040),
(228, 'New Market', 700087),
(229, 'Russa', 700040),
(230, 'Panchasayar', 700094),
(231, 'S.R.F.T.I.', 700094),
(232, 'Paschim Putiari', 700041),
(233, 'Sirity', 700041),
(234, 'Regent Estate', 700092),
(235, 'Sahapur', 700038),
(236, 'Sonai (Kolkata)', 700043),
(237, 'South Eastern Railway', 700043),
(238, 'W.B.Governors Camp.', 700062),
(239, 'Narkeldanga', 700011),
(240, 'Kalindi Housing Estate', 700089);

-- --------------------------------------------------------

--
-- Table structure for table `services`
--

CREATE TABLE `services` (
  `id` int(10) NOT NULL,
  `name` varchar(100) NOT NULL,
  `is_active` tinyint(1) NOT NULL DEFAULT '1',
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `services`
--

INSERT INTO `services` (`id`, `name`, `is_active`, `created_at`) VALUES
(1, 'Ortho Rehab', 1, '2023-06-27 17:00:30'),
(2, 'Heart Rehab', 1, '2023-06-27 17:01:57'),
(3, 'Neuro Rehab', 1, '2023-06-27 17:01:57'),
(4, 'Lung Rehab', 1, '2023-06-27 17:01:57'),
(5, 'Mother & Baby Care', 1, '2023-06-27 17:01:57'),
(6, 'Elder Care', 1, '2023-06-27 17:01:57'),
(7, 'Critical Care', 1, '2023-06-27 17:04:37'),
(8, 'Diabetes Care', 1, '2023-06-27 17:04:37'),
(9, 'Physiotherapy', 1, '2023-06-27 17:04:37'),
(10, 'Rent Medical Equipment', 1, '2023-06-27 17:04:37'),
(11, 'Lab Tests', 1, '2023-06-27 17:04:37'),
(12, 'Doctor Consultation', 1, '2023-06-27 17:04:37'),
(13, 'Counselling', 1, '2023-06-27 17:04:37'),
(14, 'Critihealth - 1 Annual', 1, '2023-06-27 17:06:28'),
(15, 'Critihealth - 2 Annual', 1, '2023-06-27 17:06:28'),
(16, 'Critihealth - 3 Annual', 1, '2023-06-27 17:06:28');

-- --------------------------------------------------------

--
-- Table structure for table `teams`
--

CREATE TABLE `teams` (
  `id` int(11) NOT NULL,
  `first_name` varchar(100) NOT NULL,
  `last_name` varchar(100) NOT NULL,
  `designation` varchar(100) NOT NULL,
  `image` varchar(250) DEFAULT NULL,
  `details` longtext NOT NULL,
  `is_active` tinyint(1) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `updated_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `username` varchar(100) NOT NULL,
  `name` varchar(100) NOT NULL,
  `password` varchar(256) NOT NULL,
  `role` enum('superadmin','admin') NOT NULL DEFAULT 'superadmin',
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `username`, `name`, `password`, `role`, `created_at`) VALUES
(1, 'admin', 'Criti Admin', 'e10adc3949ba59abbe56e057f20f883e', 'superadmin', '2023-06-09 07:06:06');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `bookings`
--
ALTER TABLE `bookings`
  ADD PRIMARY KEY (`id`),
  ADD KEY `fk_service_id` (`service_id`);

--
-- Indexes for table `kolkata_localities`
--
ALTER TABLE `kolkata_localities`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `services`
--
ALTER TABLE `services`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `name` (`name`);

--
-- Indexes for table `teams`
--
ALTER TABLE `teams`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `unique_username` (`username`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `bookings`
--
ALTER TABLE `bookings`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `kolkata_localities`
--
ALTER TABLE `kolkata_localities`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=241;

--
-- AUTO_INCREMENT for table `services`
--
ALTER TABLE `services`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;

--
-- AUTO_INCREMENT for table `teams`
--
ALTER TABLE `teams`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
