-- phpMyAdmin SQL Dump
-- version 4.7.9
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Generation Time: May 20, 2018 at 02:19 AM
-- Server version: 5.7.21
-- PHP Version: 5.6.35

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `inventory`
--
CREATE DATABASE IF NOT EXISTS `inventory` DEFAULT CHARACTER SET latin1 COLLATE latin1_swedish_ci;
USE `inventory`;

-- --------------------------------------------------------

--
-- Table structure for table `accountlogs`
--

DROP TABLE IF EXISTS `accountlogs`;
CREATE TABLE IF NOT EXISTS `accountlogs` (
  `logID` int(10) NOT NULL AUTO_INCREMENT,
  `accountID` int(10) NOT NULL,
  `loginTime` varchar(10) NOT NULL,
  `logoutTime` varchar(10) DEFAULT NULL,
  `loginDate` date NOT NULL,
  PRIMARY KEY (`logID`)
) ENGINE=InnoDB AUTO_INCREMENT=217 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `accountlogs`
--

INSERT INTO `accountlogs` (`logID`, `accountID`, `loginTime`, `logoutTime`, `loginDate`) VALUES
(184, 7, '01:43:pm', '01:53:pm', '2018-04-06'),
(185, 3, '01:43:pm', '01:50:pm', '2018-04-06'),
(186, 4, '01:43:pm', '01:54:pm', '2018-04-06'),
(187, 3, '01:50:pm', '01:53:pm', '2018-04-06'),
(188, 3, '01:53:pm', '01:53:pm', '2018-04-06'),
(189, 7, '01:53:pm', '02:02:pm', '2018-04-06'),
(190, 3, '01:53:pm', '02:02:pm', '2018-04-06'),
(191, 3, '01:54:pm', '01:54:pm', '2018-04-06'),
(193, 5, '02:03:pm', '02:05:pm', '2018-04-06'),
(194, 8, '02:03:pm', '02:05:pm', '2018-04-06'),
(195, 7, '02:05:pm', '02:05:pm', '2018-04-06'),
(196, 6, '02:06:pm', '02:09:pm', '2018-04-06'),
(197, 9, '02:06:pm', '02:09:pm', '2018-04-06'),
(198, 4, '02:09:pm', '02:18:pm', '2018-04-06'),
(199, 4, '02:09:pm', '02:16:pm', '2018-04-06'),
(202, 4, '03:52:pm', '03:58:pm', '2018-04-06'),
(203, 7, '03:52:pm', '03:57:pm', '2018-04-06'),
(204, 3, '03:52:pm', '03:57:pm', '2018-04-06'),
(206, 4, '10:31:pm', '12:24:am', '2018-04-06'),
(207, 4, '12:26:am', NULL, '2018-04-07'),
(208, 3, '04:56:am', '04:57:am', '2018-04-07'),
(209, 4, '04:58:am', NULL, '2018-04-07'),
(210, 3, '05:19:am', NULL, '2018-04-07'),
(211, 3, '06:31:am', NULL, '2018-05-19'),
(212, 4, '06:56:am', '06:57:am', '2018-05-19'),
(213, 4, '07:05:am', NULL, '2018-05-19'),
(214, 4, '06:09:am', NULL, '2018-05-20'),
(215, 3, '07:54:am', NULL, '2018-05-20'),
(216, 3, '07:57:am', NULL, '2018-05-20');

-- --------------------------------------------------------

--
-- Table structure for table `accounts`
--

DROP TABLE IF EXISTS `accounts`;
CREATE TABLE IF NOT EXISTS `accounts` (
  `accountID` int(10) NOT NULL AUTO_INCREMENT,
  `firstName` varchar(45) NOT NULL,
  `lastName` varchar(45) NOT NULL,
  `userName` varchar(45) NOT NULL,
  `password` varchar(72) NOT NULL,
  `userType` enum('admin','user') NOT NULL,
  `status` varchar(45) NOT NULL,
  PRIMARY KEY (`accountID`)
) ENGINE=InnoDB AUTO_INCREMENT=10 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `accounts`
--

INSERT INTO `accounts` (`accountID`, `firstName`, `lastName`, `userName`, `password`, `userType`, `status`) VALUES
(3, 'Swira', 'Cogasi', 'swi', 'swi', 'user', 'active'),
(4, 'Elizabeth', 'Tininggal', 'beth', 'gsobeth', 'admin', 'active'),
(5, 'Lemuel', 'Estacio', 'lemuel', 'lemuel', 'user', 'active'),
(6, 'Christian ', 'Beltran', 'beltran', 'beltran', 'user', 'active'),
(7, 'Zia', 'Garcia', 'zia', 'zia', 'user', 'active'),
(8, 'Nichole', 'Gueco', 'nics', 'nics', 'user', 'active'),
(9, 'Fatima', 'Pascua', 'famae', 'famae', 'user', 'active');

-- --------------------------------------------------------

--
-- Table structure for table `appointment`
--

DROP TABLE IF EXISTS `appointment`;
CREATE TABLE IF NOT EXISTS `appointment` (
  `appt_id` int(45) NOT NULL AUTO_INCREMENT,
  `user_id` int(11) NOT NULL,
  `sched_id` int(11) NOT NULL,
  `appointment_date` date NOT NULL,
  `status` varchar(45) NOT NULL DEFAULT 'ongoing',
  PRIMARY KEY (`appt_id`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `appointment`
--

INSERT INTO `appointment` (`appt_id`, `user_id`, `sched_id`, `appointment_date`, `status`) VALUES
(1, 1, 1, '2018-05-16', 'ongoing');

-- --------------------------------------------------------

--
-- Table structure for table `company`
--

DROP TABLE IF EXISTS `company`;
CREATE TABLE IF NOT EXISTS `company` (
  `company_id` int(45) NOT NULL AUTO_INCREMENT,
  `contact_person` varchar(45) NOT NULL,
  `address` varchar(80) NOT NULL,
  `company_name` varchar(250) NOT NULL,
  `suffix` varchar(10) NOT NULL,
  `email` varchar(45) NOT NULL,
  `tel_num` varchar(45) NOT NULL,
  `mobile_num` varchar(45) NOT NULL,
  `alt_number` varchar(250) NOT NULL,
  `about` text,
  `status` varchar(250) NOT NULL DEFAULT 'registered',
  `image_url` varchar(250) NOT NULL,
  PRIMARY KEY (`company_id`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `company`
--

INSERT INTO `company` (`company_id`, `contact_person`, `address`, `company_name`, `suffix`, `email`, `tel_num`, `mobile_num`, `alt_number`, `about`, `status`, `image_url`) VALUES
(1, 'test test test', '#1,ortigas  Manila,Pasig City', 'Trend Micro', 'Mr', 'test@gmail.com', '06545646846', '06453468', '09847689', 'Trend Micro Inc. is a Japanese multinational cyber security & defense company founded in Los Angeles, California with global headquarters in Tokyo, Japan, a R&D center in Taipei, Taiwan, and regional headquarters in Asia, Europe and the Americas.', 'registered', 'Trend-Micro-Logo.png'),
(2, '  ', '#1200,MSE Building, Ayala Ave. Metro Manila,Makati', 'Accenture', 'Mr', '', '(02) 841 0111', '', '', 'Accenture solves our clients\' toughest challenges by providing unmatched services in strategy, consulting, digital, technology and operations. We partner with more than three-quarters of the Fortune Global 500, driving innovation to improve the way the world works and lives.', 'registered', 'accenture.png'),
(3, '  ', '#,Nokia-Manila Technology Center? Building I UP Ayala Land Technohub? Commonweal', 'Nokia', 'Mr', 'nokia@gmail.com', '', '+63 28-577-000?', '', 'Nokia is a global leader in innovations such as mobile networks, digital health and phones. See how we create technology to connect.', 'registered', 'nokia.png');

-- --------------------------------------------------------

--
-- Table structure for table `delivery`
--

DROP TABLE IF EXISTS `delivery`;
CREATE TABLE IF NOT EXISTS `delivery` (
  `deliveryID` int(10) NOT NULL AUTO_INCREMENT,
  `supplierID` int(10) NOT NULL,
  `itemID` int(10) NOT NULL,
  `iarNo` int(10) NOT NULL,
  `totalQuantity` int(45) NOT NULL,
  `deliveryDate` date NOT NULL,
  `accountID` int(45) NOT NULL,
  PRIMARY KEY (`deliveryID`)
) ENGINE=InnoDB AUTO_INCREMENT=74 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `delivery`
--

INSERT INTO `delivery` (`deliveryID`, `supplierID`, `itemID`, `iarNo`, `totalQuantity`, `deliveryDate`, `accountID`) VALUES
(72, 4, 61, 123, 15, '2018-05-25', 4),
(73, 8, 62, 123, 15, '2018-05-25', 4);

-- --------------------------------------------------------

--
-- Table structure for table `history`
--

DROP TABLE IF EXISTS `history`;
CREATE TABLE IF NOT EXISTS `history` (
  `historyID` int(10) NOT NULL AUTO_INCREMENT,
  `accountID` int(10) NOT NULL,
  `issuanceID` int(10) DEFAULT NULL,
  `deliveryID` int(10) DEFAULT NULL,
  `returnID` int(10) DEFAULT NULL,
  `activity` varchar(50) NOT NULL,
  `actDate` date NOT NULL,
  `type` varchar(45) NOT NULL,
  `itemID` int(45) DEFAULT NULL,
  PRIMARY KEY (`historyID`)
) ENGINE=InnoDB AUTO_INCREMENT=128 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `history`
--

INSERT INTO `history` (`historyID`, `accountID`, `issuanceID`, `deliveryID`, `returnID`, `activity`, `actDate`, `type`, `itemID`) VALUES
(120, 4, NULL, NULL, 56, 'Returns Deleted', '2018-05-19', 'Returns', NULL),
(121, 4, NULL, NULL, 57, 'accepted return', '2018-05-19', 'returns', 61),
(122, 4, 67, NULL, NULL, 'Issuance Deleted', '2018-05-20', 'Issuance', NULL),
(123, 4, 68, NULL, NULL, 'issued', '2018-05-19', 'issuance', 164),
(124, 4, 68, NULL, NULL, 'issued', '2018-05-19', 'issuance', 62),
(125, 3, 69, NULL, NULL, 'issued', '2018-05-19', 'issuance', 164),
(126, 3, 69, NULL, NULL, 'issued', '2018-05-19', 'issuance', 162),
(127, 3, 69, NULL, NULL, 'issued', '2018-05-19', 'issuance', 148);

-- --------------------------------------------------------

--
-- Table structure for table `inventory`
--

DROP TABLE IF EXISTS `inventory`;
CREATE TABLE IF NOT EXISTS `inventory` (
  `inventoryID` int(10) NOT NULL AUTO_INCREMENT,
  `itemID` int(10) NOT NULL,
  `physicalCount` int(45) DEFAULT NULL,
  `currentQuantity` int(45) NOT NULL,
  `startingQuantity` int(10) NOT NULL,
  `reorderPoint` int(11) NOT NULL,
  PRIMARY KEY (`inventoryID`)
) ENGINE=InnoDB AUTO_INCREMENT=153 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `inventory`
--

INSERT INTO `inventory` (`inventoryID`, `itemID`, `physicalCount`, `currentQuantity`, `startingQuantity`, `reorderPoint`) VALUES
(45, 56, NULL, 1070, 1000, 200),
(46, 57, NULL, 1000, 1000, 200),
(47, 58, NULL, 1000, 1000, 200),
(50, 61, NULL, 447, 400, 80),
(51, 62, NULL, 33, 20, 4),
(52, 63, NULL, 100, 100, 20),
(53, 64, NULL, 398, 400, 80),
(54, 65, NULL, 500, 500, 100),
(55, 66, NULL, 640, 100, 20),
(56, 67, NULL, 9, 50, 10),
(57, 68, NULL, 2, 2, 0),
(58, 69, NULL, 437, 450, 90),
(59, 70, NULL, 78, 20, 4),
(60, 71, NULL, 45, 5, 1),
(61, 72, NULL, 10, 10, 2),
(62, 73, NULL, 5, 5, 1),
(63, 74, NULL, 55, 50, 10),
(64, 75, NULL, 47, 50, 10),
(65, 76, NULL, -6, 62, 12),
(66, 77, NULL, 62, 65, 13),
(67, 78, NULL, 304, 300, 60),
(68, 79, NULL, 17, 67, 13),
(69, 80, NULL, 40, 40, 8),
(70, 81, NULL, 24, 24, 4),
(71, 82, NULL, 803, 6, 1),
(72, 83, NULL, 12, 2, 0),
(73, 84, NULL, 2, 2, 0),
(76, 87, NULL, 6, 6, 1),
(77, 88, NULL, 16, 20, 4),
(78, 89, NULL, 31, 50, 10),
(79, 90, NULL, 2, 2, 0),
(80, 91, NULL, 4000, 4000, 800),
(81, 92, NULL, 8, 6, 1),
(82, 93, NULL, 4, 4, 0),
(83, 94, NULL, 24, 24, 4),
(84, 95, NULL, 98, 5, 1),
(85, 96, NULL, 57, 57, 11),
(86, 97, NULL, 10, 10, 2),
(87, 98, NULL, 72, 67, 13),
(88, 99, NULL, 9, 10, 2),
(89, 100, NULL, 100, 100, 20),
(90, 101, NULL, 23, 23, 4),
(91, 102, NULL, 46, 21, 4),
(92, 104, NULL, 817, 800, 160),
(94, 106, NULL, 20, 10, 2),
(95, 107, NULL, 190, 190, 38),
(96, 108, NULL, 177, 3, 0),
(97, 109, NULL, 60, 60, 12),
(98, 110, NULL, 204, 200, 40),
(99, 111, NULL, 19, 20, 4),
(100, 112, NULL, 25, 25, 5),
(102, 114, NULL, 100, 100, 20),
(103, 115, NULL, 45, 30, 6),
(104, 116, NULL, 200, 200, 40),
(105, 117, NULL, 154, 150, 30),
(106, 118, NULL, 88, 80, 16),
(107, 119, NULL, 68, 65, 13),
(108, 120, NULL, 68, 60, 12),
(109, 121, NULL, 150, 100, 20),
(110, 122, NULL, 45, 50, 10),
(111, 123, NULL, 24, 2, 0),
(112, 124, NULL, 10, 100, 20),
(113, 125, NULL, 5, 5, 1),
(114, 126, NULL, 304, 300, 60),
(115, 127, NULL, 2, 2, 0),
(116, 128, NULL, 10, 10, 2),
(117, 129, NULL, -3, 2, 0),
(118, 130, NULL, 130, 100, 20),
(119, 131, NULL, 117, 120, 24),
(120, 132, NULL, 257, 250, 50),
(121, 133, NULL, 377, 400, 80),
(122, 134, NULL, 600, 600, 120),
(123, 135, NULL, 250, 250, 50),
(125, 137, NULL, 80, 80, 16),
(126, 138, NULL, 80, 80, 16),
(127, 139, NULL, 100, 100, 20),
(129, 141, NULL, 150, 150, 30),
(130, 142, NULL, 270, 270, 54),
(131, 143, NULL, 80, 80, 16),
(133, 145, NULL, 25, 6, 1),
(134, 146, NULL, 50, 50, 10),
(135, 147, NULL, 13, 13, 2),
(136, 148, NULL, 33, 34, 6),
(137, 149, NULL, 20, 20, 4),
(138, 150, NULL, 40, 38, 7),
(139, 151, NULL, 241, 11, 2),
(140, 152, NULL, 140, 140, 28),
(141, 153, NULL, 138, 60, 12),
(142, 154, NULL, 44, 4, 0),
(143, 155, NULL, -37, 35, 7),
(144, 156, NULL, 31, 6, 1),
(145, 157, NULL, 6, 6, 1),
(146, 158, NULL, 46, 46, 9),
(147, 159, NULL, -26, 15, 3),
(148, 160, NULL, 49, 50, 10),
(149, 161, NULL, -16, 20, 4),
(150, 162, NULL, 24, 102, 20),
(151, 163, NULL, 99, 49, 9),
(152, 164, NULL, 85, 102, 20);

-- --------------------------------------------------------

--
-- Table structure for table `issuance`
--

DROP TABLE IF EXISTS `issuance`;
CREATE TABLE IF NOT EXISTS `issuance` (
  `issuanceID` int(10) NOT NULL AUTO_INCREMENT,
  `division` varchar(150) NOT NULL,
  `officeID` int(10) NOT NULL,
  `risNo` varchar(45) DEFAULT NULL,
  `saiNo` varchar(45) NOT NULL,
  `issuanceDate` date NOT NULL,
  `issuanceTime` varchar(45) NOT NULL,
  `type` varchar(45) NOT NULL,
  `accountID` int(10) NOT NULL,
  PRIMARY KEY (`issuanceID`)
) ENGINE=InnoDB AUTO_INCREMENT=70 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `issuance`
--

INSERT INTO `issuance` (`issuanceID`, `division`, `officeID`, `risNo`, `saiNo`, `issuanceDate`, `issuanceTime`, `type`, `accountID`) VALUES
(68, 'admin', 61, '123', '123', '2018-05-19', '07:51:am', 'Office Supplies', 4),
(69, 'sdf', 61, '123', '324', '2018-05-19', '07:57:am', 'Office Supplies', 3);

-- --------------------------------------------------------

--
-- Table structure for table `itemissuance`
--

DROP TABLE IF EXISTS `itemissuance`;
CREATE TABLE IF NOT EXISTS `itemissuance` (
  `itemIssuanceID` int(10) NOT NULL AUTO_INCREMENT,
  `issuanceID` int(10) NOT NULL,
  `itemID` int(10) NOT NULL,
  `quantityRequested` int(5) NOT NULL,
  `quantityIssued` int(5) NOT NULL,
  `remarks` varchar(150) NOT NULL,
  PRIMARY KEY (`itemIssuanceID`)
) ENGINE=InnoDB AUTO_INCREMENT=144 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `itemissuance`
--

INSERT INTO `itemissuance` (`itemIssuanceID`, `issuanceID`, `itemID`, `quantityRequested`, `quantityIssued`, `remarks`) VALUES
(136, 68, 143, 1, 12, 'asd'),
(137, 68, 160, 2, 12, 'asd'),
(141, 69, 164, 2, 2, 'asd'),
(142, 69, 162, 2, 2, 'asd'),
(143, 69, 148, 2, 2, 'asd');

-- --------------------------------------------------------

--
-- Table structure for table `itemrecords`
--

DROP TABLE IF EXISTS `itemrecords`;
CREATE TABLE IF NOT EXISTS `itemrecords` (
  `itemrecordsID` int(45) NOT NULL AUTO_INCREMENT,
  `itemID` int(45) NOT NULL,
  `inventoryID` int(10) NOT NULL,
  `recordDate` date NOT NULL,
  `risNo` int(45) DEFAULT NULL,
  `iarNo` int(45) DEFAULT NULL,
  `startingQuantity` int(45) NOT NULL,
  `deliveryQuantity` int(15) DEFAULT NULL,
  `returnsQuantity` int(15) DEFAULT NULL,
  `issuanceQuantity` int(15) DEFAULT NULL,
  `currentQuantity` int(15) NOT NULL,
  `status` varchar(45) NOT NULL,
  PRIMARY KEY (`itemrecordsID`)
) ENGINE=MyISAM AUTO_INCREMENT=375 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `itemrecords`
--

INSERT INTO `itemrecords` (`itemrecordsID`, `itemID`, `inventoryID`, `recordDate`, `risNo`, `iarNo`, `startingQuantity`, `deliveryQuantity`, `returnsQuantity`, `issuanceQuantity`, `currentQuantity`, `status`) VALUES
(374, 148, 136, '2018-05-19', 123, NULL, 34, NULL, NULL, 1, 33, 'decreased'),
(373, 162, 150, '2018-05-19', 123, NULL, 25, NULL, NULL, 1, 24, 'decreased'),
(372, 164, 152, '2018-05-19', 123, NULL, 86, NULL, NULL, 1, 85, 'decreased'),
(371, 62, 51, '2018-05-19', 123, NULL, 45, NULL, NULL, 12, 33, 'decreased'),
(370, 164, 152, '2018-05-19', 123, NULL, 98, NULL, NULL, 12, 86, 'decreased'),
(369, 61, 50, '2018-05-19', NULL, NULL, 447, NULL, 12, NULL, 435, 'decreased'),
(368, 155, 143, '2018-05-18', 123, NULL, 35, NULL, NULL, 12, 23, 'decreased'),
(367, 162, 150, '2018-05-18', 123, NULL, 102, NULL, NULL, 12, 90, 'decreased'),
(366, 156, 144, '2018-05-19', NULL, NULL, 19, NULL, NULL, 12, 31, 'increased'),
(365, 164, 152, '2018-05-19', NULL, NULL, 86, NULL, NULL, 12, 98, 'increased'),
(364, 156, 144, '2018-05-18', 123, NULL, 31, NULL, NULL, 12, 19, 'decreased'),
(363, 164, 152, '2018-05-18', 123, NULL, 98, NULL, NULL, 12, 86, 'decreased'),
(362, 162, 150, '2018-05-19', NULL, NULL, 87, NULL, NULL, 15, 102, 'increased'),
(361, 163, 151, '2018-05-19', NULL, NULL, 87, NULL, NULL, 12, 99, 'increased'),
(360, 62, 51, '2018-05-25', NULL, 123, 30, 15, NULL, NULL, 45, 'increased'),
(359, 61, 50, '2018-05-25', NULL, 123, 432, 15, NULL, NULL, 447, 'increased'),
(358, 61, 50, '2018-05-19', NULL, NULL, 447, 15, NULL, NULL, 432, 'decreased'),
(357, 61, 50, '2018-05-19', NULL, NULL, 447, NULL, 12, NULL, 435, 'decreased'),
(356, 162, 150, '2018-05-18', 123, NULL, 102, NULL, NULL, 15, 87, 'decreased'),
(355, 163, 151, '2018-05-18', 123, NULL, 99, NULL, NULL, 12, 87, 'decreased'),
(354, 61, 50, '2018-05-29', NULL, 123, 420, 15, NULL, NULL, 435, 'increased'),
(353, 65, 54, '2018-05-19', NULL, NULL, 512, 12, NULL, NULL, 500, 'decreased');

-- --------------------------------------------------------

--
-- Table structure for table `items`
--

DROP TABLE IF EXISTS `items`;
CREATE TABLE IF NOT EXISTS `items` (
  `itemID` int(10) NOT NULL AUTO_INCREMENT,
  `supplierID` int(10) NOT NULL,
  `acctSn` varchar(45) NOT NULL,
  `categoryNo` int(10) NOT NULL,
  `pgsoSn` varchar(45) NOT NULL,
  `description` varchar(255) NOT NULL,
  `unitID` int(10) NOT NULL,
  `unitCost` int(11) NOT NULL,
  `brand` varchar(20) DEFAULT NULL,
  `expirationDate` date DEFAULT NULL,
  `icsNo` varchar(45) DEFAULT NULL,
  PRIMARY KEY (`itemID`)
) ENGINE=InnoDB AUTO_INCREMENT=165 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `items`
--

INSERT INTO `items` (`itemID`, `supplierID`, `acctSn`, `categoryNo`, `pgsoSn`, `description`, `unitID`, `unitCost`, `brand`, `expirationDate`, `icsNo`) VALUES
(61, 4, '0013-BLACK', 1, '1004', 'Ballpen,ordinary,BLACK', 2, 90, '3', NULL, NULL),
(62, 4, '0015', 1, '1006', 'Band,rubber,big size, #18, 450 grams', 3, 228, 'Elastic', NULL, NULL),
(63, 4, '0016', 1, '1007', 'Battery,alkaline,9 volts', 2, 110, 'Pamasonic', NULL, NULL),
(64, 4, '0017', 1, '1008', 'Battery,alkaline,size AA', 2, 27, 'Panasonic', NULL, NULL),
(65, 4, '0018', 1, '1009', 'Battery,alkaline,size AAA', 2, 26, 'Sony', NULL, NULL),
(66, 4, '0019', 1, '1010', 'Battery,alkaline,size C', 1, 112, 'Every Day', NULL, NULL),
(67, 4, '0020', 1, '1011', 'Battery,size D', 2, 35, 'Every Day', NULL, NULL),
(68, 6, '0021', 1, '1012', 'Battery,CR 123A, lithium,3 volts', 2, 35, 'Every Day', NULL, NULL),
(69, 9, '0022', 1, '1013', 'Battery, CR 2025, Lithium, Flat, 3 volts', 2, 47, 'Panasonic', NULL, NULL),
(70, 6, '0024', 1, '1015', 'Card, Calling Card', 3, 350, 'Stationary', NULL, NULL),
(71, 9, '0028', 1, '1018', 'Binder,comb/Spiral, round, plastic,1.5 x 44', 2, 39, 'Cattleya', NULL, NULL),
(72, 9, '0029', 1, '1019', 'Binder,plastic,spiral,black,12 mm x 1.2 m (0.5x44)', 2, 9, 'Cattleya', NULL, NULL),
(73, 6, '0033', 1, '1023', 'Binder,ring,metal,19 mm', 2, 11, 'Gold', NULL, NULL),
(74, 10, '0038', 1, '1028', 'Pad,refill,for Printer 50,E/50 ', 2, 32, 'Sterling', NULL, NULL),
(75, 10, '0039', 1, '1029', 'Binder, Comb, plastic, Black, 5/16 length 46', 2, 32, 'Green Apple', NULL, NULL),
(76, 10, '0055', 1, '1037', 'Book,columnar,4 columns', 6, 28, 'Vello', NULL, NULL),
(77, 10, '0056', 1, '1028', 'Book,columnar, 24 columns', 6, 45, 'Vello', NULL, NULL),
(78, 4, '0057', 1, '1039', 'Book,record,wide, official,500 leaves, White/Blue.8.5', 2, 127, 'Blue Note', NULL, NULL),
(79, 5, '0145', 1, '2001', 'Ink cartridge,Canon CL-41', 2, 1282, 'Canon', '2018-04-08', NULL),
(80, 5, '0146', 2, '2002', 'Ink cartridge,Canon CL-811', 10, 1133, 'Canon', '2019-10-10', NULL),
(81, 5, '0147', 2, '2003', 'Ink cartridge,Canon CL-831', 10, 1175, 'Canon', '2019-05-16', NULL),
(82, 5, '0148', 2, '2004', 'Ink cartridge,Canon CLI-36, color', 10, 1140, 'Canon', '2019-05-11', NULL),
(83, 5, '0149', 2, '2005', 'Ink cartridge,Canon CLI-8, Cyan', 10, 914, 'Canon', '2021-11-22', NULL),
(84, 4, '0150', 2, '2006', 'Ink cartridge,Canon CLI-8, Magenta', 10, 867, 'Canon', '2023-09-10', NULL),
(87, 4, '0151', 2, '2007', 'Ink cartridge,Canon CLI-8, Yellow', 10, 902, 'Canon', '2022-10-28', NULL),
(88, 6, '0152', 2, '2008', 'Ink cartridge,Canon PG- 830', 10, 979, 'Canon', '2021-10-05', NULL),
(89, 8, '0005', 3, '3001', 'Apron, Standard Size', 2, 77, 'X', NULL, NULL),
(90, 6, '0153', 2, '2009', 'Ink cartridge,Canon PG-40', 10, 1115, 'Canon', '2022-12-31', NULL),
(91, 6, '0005', 3, '3002', 'Bag,garbage,15 x 15 x 37, Black, Red, Green, Yellow', 2, 6, 'x', NULL, NULL),
(92, 6, '0155', 2, '2010', 'Ink cartridge,Canon PGI-35, black', 10, 747, 'Canon', '2019-11-20', NULL),
(93, 9, '0156', 2, '2011', 'Ink cartridge,Canon PGI-5BK, Black', 10, 964, 'Canon', '2023-04-04', NULL),
(94, 9, '0158', 2, '2012', 'Toner, DocuCentre S2011/S2320/S2520, CT202384', 4, 4264, 'DocuCentre', '2023-05-02', NULL),
(95, 4, '0439', 5, '0001', 'Printer, P 14,999.00 and below', 2, 14999, 'HP', NULL, ''),
(96, 9, '0159', 2, '2013', 'Ink cartridge,Epson L800, black', 10, 2415, 'Epson', '2022-12-31', NULL),
(97, 9, '0440', 5, '0002', 'Seal Dry seal', 1, 15000, 'EPSON', NULL, NULL),
(98, 9, '0160', 2, '2014', 'Ink cartridge,Epson L800, cyan, light cyan, magenta, light magenta, yellow', 10, 3187, 'Epson', '2024-02-05', NULL),
(99, 5, '0441', 5, '0003', 'UPS P 14,999.00 and below', 2, 15000, 'CANON', NULL, NULL),
(100, 6, '0442', 5, '0004', 'Network Printers and Storage Server, USB Type ', 2, 10000, 'HP', NULL, NULL),
(101, 6, '0161', 2, '2015', 'Ink cartridge,Epson, L210 Black', 10, 735, 'Epson', '2024-02-02', NULL),
(102, 6, '0162', 2, '2016', 'Ink cartridge,for HP Officejet 7110, original, (4 cart/set-complete colors)', 10, 3554, 'HP', '2023-06-28', NULL),
(103, 1, '008', 3, '3003', 'Bag,Plastic,100\'s/pack,Large', 1, 112, 'X', NULL, NULL),
(104, 4, '0117', 1, '1070', 'Fastener,screw type,2, 100 pcs/pack', 2, 5, 'hen', NULL, NULL),
(106, 4, '0448', 5, '0006', 'Cabinet wooden', 2, 800, '', NULL, NULL),
(107, 4, '0010', 3, '3005', 'Bag,sando,medium size, 100 pcs/pack', 1, 77, 'x', NULL, NULL),
(108, 6, '0217', 2, '2174', ' Ink,Refill,HP Deckjet GT510,GT51,Cyan ', 11, 2200, 'HP', '2023-04-06', NULL),
(109, 5, '0449', 5, '0007', 'Recorder, Digital', 1, 60, '', NULL, NULL),
(110, 4, '0011', 3, '3006', 'Bag,sando,XL, 50 pcs/pack', 1, 88, 'x', NULL, NULL),
(111, 8, '0450', 5, '0007', 'Table, wooden (Office Table) without glass pad', 2, 500, '', NULL, NULL),
(112, 4, '0012', 3, '3007', 'Bag,zip,XXL, 20pcs/pack', 1, 53, 'x', NULL, NULL),
(114, 8, '0041', 3, '3008', 'Bleaching Agent,1 gal', 14, 134, 'xy', NULL, NULL),
(115, 6, '0059', 3, '3009', 'Broom,ceiling/wall', 2, 121, 'xyz', NULL, NULL),
(116, 7, '0060', 3, '3010', 'Broom,soft, wooden handle', 2, 109, 'x', NULL, NULL),
(117, 9, '0061', 3, '3011', 'Broom,stick', 12, 29, 'xy', NULL, NULL),
(118, 7, '0062', 3, '3012', 'Brush, Tile/Toilet brush, plastic long handle', 2, 116, 'xy', NULL, NULL),
(119, 7, '0063', 3, '3013', 'Brush, Hand Brush plastic, without handle,2\" x 6\"', 2, 66, 'xy', NULL, NULL),
(120, 6, '0451', 5, '0008', 'Table (Computer Table) ', 1, 20000, '', NULL, NULL),
(121, 7, '0064', 3, '3014', 'Brush,toilet bowl,round w/ container', 2, 55, 'xy', NULL, NULL),
(122, 5, '0452', 5, '0009', 'Cabinet Steel, 4 drawers', 2, 50, '', NULL, NULL),
(123, 4, '0373', 2, '2120', 'Toner cartridge,HP Q6000A Black', 10, 9900, 'HP', '2024-07-07', NULL),
(124, 4, '0076', 3, '3015', 'Cleaner,glass,with sprayer,500 ml', 11, 146, 'x', NULL, NULL),
(125, 4, '0460', 5, '0010', 'Cutter, Paper, Heavy Duty', 2, 50, '', NULL, NULL),
(126, 4, '077', 3, '3016', 'Cleaner,toilet bowl and urinal,1000 ml, anti-microbial system, lemon fresh, multi-purpose cleaner, kills and viruses, container with handle', 11, 169, 'x', NULL, NULL),
(127, 4, '0374', 2, '2121', 'Toner cartridge,HP Q6001A Cyan', 10, 13200, 'HP', '2023-03-05', NULL),
(128, 4, '0078', 3, '3017', 'Cleaner,wipe out dirt , 250g', 13, 83, 'xz', NULL, NULL),
(129, 4, '0375', 2, '2122', 'Toner cartridge,HP Q6002A Yellow', 10, 13200, 'HP', '2023-10-02', NULL),
(130, 4, '0079', 3, '3018', 'Cleanser,powder,350 grams', 11, 37, 'xy', NULL, NULL),
(131, 4, '0083', 3, '3019', 'Conditioner,fabric,1 gallon', 14, 263, 'x', NULL, NULL),
(132, 4, '0097', 3, '3020', 'Deodorant cake,toilet,refill, 50g', 2, 31, 'xy', NULL, NULL),
(133, 4, '0098', 3, '3021', 'Detergent powder,1000g with stain away formula, high foam, calamansi fresh', 1, 92, 'x', NULL, NULL),
(134, 4, '0099', 3, '3022', 'Dishwashing liquid,250 ml, anti-bacterial, powerful grease stripping, triple active power, lemon or calamansi', 11, 64, 'x', NULL, NULL),
(135, 4, '0100', 3, '3023', 'Disinfectant,1000 ml', 11, 39, 'xy', NULL, NULL),
(137, 4, '0105', 3, '3025', 'Duster, cloth', 2, 17, 'xy', NULL, NULL),
(138, 4, '0106', 3, '3026', 'Dustpan,G.I.,23\" handle', 2, 110, 'x', NULL, NULL),
(139, 4, '0122', 3, '3027', 'Fly catcher, hanging/Table', 2, 31, 'x', NULL, NULL),
(141, 4, '0129', 3, '3029', 'Freshener,air,320 ml, 5 in 1', 11, 198, 'xy', NULL, NULL),
(142, 4, '0130', 3, '3030', 'Gloves, rubber, Large, medium, small', 16, 46, 'xy', NULL, NULL),
(143, 4, '0134', 3, '3031', 'Handle,mop,steel', 2, 413, 'zz', NULL, NULL),
(145, 4, '0001', 4, '4001', 'Album,DVD/CD case,folder', 2, 1500, 'Kodak', NULL, '12345'),
(146, 9, '0027', 4, '4002', 'Bin,trash with cover,foot operated,medium,round,plastic', 2, 198, 'Attach-A-Trash', NULL, NULL),
(147, 4, '0068', 4, '4008', 'Card reader,usb type', 2, 104, 'Micro SD', NULL, NULL),
(148, 4, '0069', 4, '4036', 'Card reader, internal', 5, 330, 'Micro SD', NULL, NULL),
(149, 6, '0094', 4, '4009', 'cutter,heavy duty,L500,retractable', 2, 52, 'D', NULL, NULL),
(150, 5, '0102', 4, '4011', 'Dispenser,tape,for 1\",transparent tape', 2, 82, 'F', NULL, NULL),
(151, 4, '0113', 4, '4012', 'Extension,USB', 2, 275, 'AA', NULL, NULL),
(152, 7, '0119', 4, '4029', 'Stamp,self linking,colop 40,printer 40', 1, 218, 'AD', NULL, NULL),
(153, 7, '0121', 4, '4013', 'Flash drive,USB,32 GB', 2, 643, 'AP', NULL, NULL),
(154, 5, '0132', 4, '4014', 'Glue gun,heavy duty', 2, 412, 'BB', NULL, NULL),
(155, 8, '0245', 4, '4030', 'Stamp,self linking,colop 50,printer 50', 1, 416, 'FD', NULL, NULL),
(156, 4, '0265', 4, '4018', 'Memory card, 32 gb', 2, 495, 'Sandisk', NULL, NULL),
(157, 10, '0276', 4, '4020', 'Numbering Machine,Automatic,12 digits', 2, 1200, 'DP', NULL, NULL),
(158, 7, '0320', 4, '4021', 'puncher,2 holes,70mm,no.468,Heavy Duty', 2, 143, 'AX', NULL, NULL),
(159, 8, '0325', 4, '4022', 'Self-inking receiving/release', 2, 2063, 'AW', NULL, NULL),
(160, 10, '0334', 4, '4023', 'Scissors,8\",stainless steel', 16, 52, 'Que', NULL, NULL),
(161, 10, '0339', 4, '4024', 'Sharpener,Pencil,Heavy Duty', 2, 230, 'PR', NULL, NULL),
(162, 6, '0346', 4, '4031', 'Stapler,heavy duty,with wire remover', 2, 320, 'X', NULL, NULL),
(163, 7, '0402', 4, '4033', 'Tray,File,3 layers,plastic,stainless stand,US-10431', 2, 582, 'Y', NULL, NULL),
(164, 5, '0346', 4, '4031', 'Stapler,heavy duty,without1 wire remover', 2, 320, 'YY', NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `offices`
--

DROP TABLE IF EXISTS `offices`;
CREATE TABLE IF NOT EXISTS `offices` (
  `officeID` int(10) NOT NULL AUTO_INCREMENT,
  `officeName` varchar(100) NOT NULL,
  `abbrv` varchar(45) NOT NULL,
  `fppCode` varchar(45) NOT NULL,
  `rcCode` varchar(45) NOT NULL,
  PRIMARY KEY (`officeID`),
  UNIQUE KEY `officeName` (`officeName`)
) ENGINE=InnoDB AUTO_INCREMENT=62 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `offices`
--

INSERT INTO `offices` (`officeID`, `officeName`, `abbrv`, `fppCode`, `rcCode`) VALUES
(1, 'Provincial Governors Office (main)', 'PGO', '1000.1', '04-00-01-01'),
(2, 'Provincial gov Office-interagency(Scholarship, SPES)', 'Interagency', '1000.1.4', '04-00-01-01'),
(3, 'Benguet Day Celebration Expenses', 'ADIVAY', '1000.1', '04-00-01-01'),
(4, 'Provincial Employment Services Office', 'PESO', '1000.1', '04-00-01-01'),
(5, 'Provincial Disaster Risk Reduction Mngmnt Office', 'PDRRMO', '3000.500.2', '04-00-01-01'),
(6, 'Benguet Cold Chain Project', 'BCCP', '8000.5', '04-00-13-04'),
(7, 'Provincial Library office', 'LIB', '1000.1.7', '04-00-01-01'),
(8, 'Provincial  Wardens Office', 'PWO(JAIL)', '1000.1.8', '04-00-01-01'),
(9, 'Provincial Tourism Office', 'TOURISM', '8000.4', '04-00-01-01'),
(10, 'Board of Assessment Appeals Office', 'BTAAO-RD', '1000', '04-00-01-04'),
(11, 'Provincial Human Resources Mngmt & Dev\'t Office', 'PHRMDO', '1000.1.6', '04-00-01-01'),
(12, 'Provincial Sangguniang Panlalawigan Office', 'SPO', '1000.1.15', '04-00-02-01'),
(13, 'Provincial Vice-Governor\'s Office', 'VICE-GOV', '1000.1.15', '04-00-02-01'),
(14, 'Provincial Planning and Dev\'t Office', 'PPDO', '1000.1.9', '04-00-03-01'),
(15, 'Provincial General services Office', 'PGSO', '1000.1.14', '04-00-04-01'),
(16, 'Provincial Budget Office', 'PBO', '1000.1.10', '04-00-05-01'),
(17, 'Provincial Accounting Office', 'PACCO', '1000.1.12', '04-00-05-02'),
(18, 'Provincial Treasury Office', 'PTO', '1000.1.11', '04-00-05-03'),
(19, 'Provincial assessor\'s Office', 'PASSO', '1000.1.13', '04-00-05-04'),
(20, 'Provincial Legal Office', 'PLO', '1000.1.16', '04-00-06-01'),
(21, 'Regional Trial Court', 'RTC', '1000', '04-00-06-02'),
(22, 'Provincial Prosecutor\'s Office', 'PPO', '1000.1.17', '04-00-07-01'),
(23, 'Provincial Social Welfare & Development Office(main)', 'PSWDO', '3000-500.1', '04-00-07-01'),
(24, 'Grant and Donations', 'PSWDO', '3000-500.1', '04-00-07-01'),
(25, 'Assistance to Individual in Crisis Situation', 'AICS', '3000-500.1', '04-00-07-01'),
(26, 'Emergency Shelter Assistance', 'ESA', '3000-500.1', '04-00-07-01'),
(27, 'Food Supplies Expenses (Food for Work)', 'ESA', '3000-500.1', '04-00-07-01'),
(28, 'Food Supplies Expenses (For Malnourished)', 'ESA', '3000-500.1', '04-00-07-01'),
(29, 'Family/Child&Youth/Women/Rebel Returnees', 'ESA', '3000-500.1', '04-00-07-01'),
(30, 'Rehabilitation of Youth Offenders', 'ESA', '3000-500.1', '04-00-07-01'),
(31, 'Livelihood Assistance (Bahay Pag-asa)', 'ESA', '3000-500.1', '04-00-07-01'),
(32, 'Provincial Agriculturists Office', 'OPAG', '8000.2', '04-00-08-01'),
(33, 'Provincial Veterinary Office', 'PVET', '8000.3', '04-00-08-02'),
(34, 'Provincial Engineering Office', 'PEO', '1000.1.18', '04-00-08-03'),
(35, 'Provincial Benguet Environment Office', 'PBENRO', '8000.1.1', '04-00-08-04'),
(36, 'Provincial Health Office', 'PHO', '3000-200.1', '04-00-09-01'),
(37, 'Atok District Office', 'ADH', '3000-200.3', '04-00-09-02'),
(38, 'Dennis Molintas District Hospital', 'DMDH', '3000-200.5', '04-00-09-03'),
(39, 'Northern Benguet District Hospital', 'NBDH', '3000-200.4', '04-00-09-04'),
(40, 'Itogon District Hospital', 'IDH', '3000-200.6', '04-00-09-05'),
(41, 'kapangan District Hospital', 'KDH', '3000-200.7', '04-00-09-06'),
(42, 'Commission on Audit', 'COA', '1000.1.4.22', '04-00-10-01'),
(43, 'Calamity Fund', 'COA', '1000.1.4.22', '04-00-12-02'),
(44, 'Barangay Development Fund', 'COA', '1000.1.4.22', '04-00-14-01'),
(45, 'All Office (Terminal leaves,monetization,BAC-infra,BAC-Goods,Prov', 'ALL-OFFICE', '1000.1.2', '04-00-14-02'),
(46, 'Non-Office', 'NON-OFFICE', '1000.1.3', '04-00-14-01'),
(47, 'Interspecial Accounting Transfer', 'NON-OFFICE', '1000.1.3', '04-00-14-01'),
(49, 'Cash Incentive Awards & Sports, Honoraria', 'NON-OFFICE', '1000.1.3', '04-00-14-01'),
(50, 'Non-Govnmentt Org Rep, Academic & Tech. Skills', 'NON-OFFICE', '1000.1.3', '04-00-14-01'),
(51, 'Comelec Expense', 'NON-OFFICE', '1000.1.3', '04-00-14-01'),
(52, 'Burial Assistance to Veterans', 'NON-OFFICE', '1000.1.3', '04-00-14-01'),
(53, 'Scout Official for a Day', 'NON-OFFICE', '1000.1.3', '04-00-14-01'),
(54, 'Prov\'l Mining Regulatory Board', 'NON-OFFICE', '1000.1.3', '04-00-14-01'),
(55, 'Financial Assistance to Court Litigation', 'NON-OFFICE', '1000.1.3', '04-00-14-01'),
(56, 'Prov\'l Sports Dev\'t Program (non-employees)', 'NON-OFFICE', '1000.1.3', '04-00-14-01'),
(57, 'Prov\'l Health Board', 'NON-OFFICE', '1000.1.3', '04-00-14-01'),
(58, 'Benguet Technical School', 'BTS', '3000-100.1', '04-00-13-03'),
(59, 'Benguet Equipment Services Enterprise', 'BESE', '8000', '04-00-13-02'),
(60, 'Benguet General Hospital Economic Enterprise', 'BEGHEE', '3000-200.1', '04-00-13-00'),
(61, 'Aid to Boy Scout & Girl Scout, Red Cross', 'NON-OFFICE', '1000.1.3', '04-00-14-01');

-- --------------------------------------------------------

--
-- Table structure for table `ppmp`
--

DROP TABLE IF EXISTS `ppmp`;
CREATE TABLE IF NOT EXISTS `ppmp` (
  `ppmpID` int(10) NOT NULL AUTO_INCREMENT,
  `officeID` int(10) NOT NULL,
  `ppmpDate` date NOT NULL,
  PRIMARY KEY (`ppmpID`)
) ENGINE=InnoDB AUTO_INCREMENT=49 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `ppmp`
--

INSERT INTO `ppmp` (`ppmpID`, `officeID`, `ppmpDate`) VALUES
(48, 61, '2018-05-29');

-- --------------------------------------------------------

--
-- Table structure for table `ppmpitems`
--

DROP TABLE IF EXISTS `ppmpitems`;
CREATE TABLE IF NOT EXISTS `ppmpitems` (
  `ppmpitemsID` int(45) NOT NULL AUTO_INCREMENT,
  `itemID` int(45) NOT NULL,
  `itemQuantity` int(45) NOT NULL,
  `ppmpID` int(45) NOT NULL,
  `unitCost` int(45) NOT NULL,
  PRIMARY KEY (`ppmpitemsID`)
) ENGINE=MyISAM AUTO_INCREMENT=88 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `ppmpitems`
--

INSERT INTO `ppmpitems` (`ppmpitemsID`, `itemID`, `itemQuantity`, `ppmpID`, `unitCost`) VALUES
(87, 61, 12, 48, 12);

-- --------------------------------------------------------

--
-- Table structure for table `returns`
--

DROP TABLE IF EXISTS `returns`;
CREATE TABLE IF NOT EXISTS `returns` (
  `returnID` int(10) NOT NULL AUTO_INCREMENT,
  `itemID` int(10) NOT NULL,
  `officeID` int(10) NOT NULL,
  `itemQuantity` int(45) NOT NULL,
  `reason` varchar(100) NOT NULL,
  `status` varchar(45) NOT NULL,
  `accountID` int(45) NOT NULL,
  `returnDate` date DEFAULT NULL,
  PRIMARY KEY (`returnID`)
) ENGINE=InnoDB AUTO_INCREMENT=58 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `returns`
--

INSERT INTO `returns` (`returnID`, `itemID`, `officeID`, `itemQuantity`, `reason`, `status`, `accountID`, `returnDate`) VALUES
(57, 61, 61, 12, '123asd', 'usable', 4, '2018-05-19');

-- --------------------------------------------------------

--
-- Table structure for table `schedule`
--

DROP TABLE IF EXISTS `schedule`;
CREATE TABLE IF NOT EXISTS `schedule` (
  `sched_id` int(45) NOT NULL AUTO_INCREMENT,
  `company_id` int(11) NOT NULL,
  `sched_type` varchar(45) NOT NULL,
  `event_type` varchar(45) NOT NULL,
  `sched_date` varchar(45) NOT NULL,
  `start_time` varchar(45) NOT NULL,
  `end_time` varchar(45) NOT NULL,
  `location` varchar(45) NOT NULL,
  `room` varchar(45) NOT NULL,
  `slots` int(6) NOT NULL,
  `defaultSlot` int(15) NOT NULL,
  PRIMARY KEY (`sched_id`)
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `schedule`
--

INSERT INTO `schedule` (`sched_id`, `company_id`, `sched_type`, `event_type`, `sched_date`, `start_time`, `end_time`, `location`, `room`, `slots`, `defaultSlot`) VALUES
(1, 2, 'Exam', 'Internship', '2018-06-02', '09:00', '11:00', 'Saint Louis University Maryheights Campus', 'D524', 49, 50),
(2, 1, 'Exam', 'Employment', '2018-06-04', '08:00', '09:30', 'Saint Louis University Maryheaights Campus', 'D424', 45, 45),
(3, 3, 'Exam', 'Seminar', '2018-06-08', '13:00', '16:00', 'Prince Bernhard Gym, Saint Louis University', '', 300, 300),
(4, 1, 'Exam', 'Seminar', '2018-06-28', '08:00', '13:00', 'SLU Maryheights', 'AVR', 200, 200);

-- --------------------------------------------------------

--
-- Table structure for table `suppliers`
--

DROP TABLE IF EXISTS `suppliers`;
CREATE TABLE IF NOT EXISTS `suppliers` (
  `supplierID` int(10) NOT NULL AUTO_INCREMENT,
  `tinNo` int(10) NOT NULL,
  `supplierName` varchar(45) NOT NULL,
  `address` varchar(45) DEFAULT NULL,
  `contactNo` varchar(15) DEFAULT NULL,
  PRIMARY KEY (`supplierID`),
  UNIQUE KEY `tinNo` (`tinNo`)
) ENGINE=InnoDB AUTO_INCREMENT=11 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `suppliers`
--

INSERT INTO `suppliers` (`supplierID`, `tinNo`, `supplierName`, `address`, `contactNo`) VALUES
(4, 12345, 'TSB BAZAAR', '#431 UNZAD VILLASIS, PANGASINAN', '09128374958'),
(5, 54321, 'COPYLANDIA', 'Baguio City', '09094562819'),
(6, 99812, 'CID', 'Baguio City', '09098080681'),
(7, 76582, '456 COMMERCIAL CENTER', 'Km6 La Trinidad', '09092657483'),
(8, 83751, 'KENWAYNE', 'Km5, La Trinidad', '09082756291'),
(9, 78373, 'NEW CITY', 'Bonifacio St', '090723647281'),
(10, 82651, 'JET BOOK STORE', 'SESSION ROAD', '09072657481');

-- --------------------------------------------------------

--
-- Table structure for table `units`
--

DROP TABLE IF EXISTS `units`;
CREATE TABLE IF NOT EXISTS `units` (
  `unitID` int(10) NOT NULL AUTO_INCREMENT,
  `unitName` varchar(45) NOT NULL,
  PRIMARY KEY (`unitID`)
) ENGINE=InnoDB AUTO_INCREMENT=19 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `units`
--

INSERT INTO `units` (`unitID`, `unitName`) VALUES
(1, 'pack'),
(2, 'pc'),
(3, 'box'),
(4, 'tube'),
(5, 'set'),
(6, 'book'),
(7, 'ream'),
(8, 'pad'),
(9, 'roll'),
(10, 'cart'),
(11, 'bot'),
(12, 'bundle'),
(13, 'can'),
(14, 'gal'),
(15, 'pouch'),
(16, 'pair'),
(17, 'kilo'),
(18, 'unit');

-- --------------------------------------------------------

--
-- Table structure for table `updatehistory`
--

DROP TABLE IF EXISTS `updatehistory`;
CREATE TABLE IF NOT EXISTS `updatehistory` (
  `updatehistoryID` int(255) NOT NULL AUTO_INCREMENT,
  `accountID` int(45) NOT NULL,
  `activity` varchar(255) NOT NULL,
  `time` varchar(45) NOT NULL,
  `date` date NOT NULL,
  `type` varchar(45) NOT NULL,
  `itemID` int(45) NOT NULL,
  PRIMARY KEY (`updatehistoryID`)
) ENGINE=MyISAM AUTO_INCREMENT=18 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `updatehistory`
--

INSERT INTO `updatehistory` (`updatehistoryID`, `accountID`, `activity`, `time`, `date`, `type`, `itemID`) VALUES
(11, 4, 'Updated Expiration date from 2019-10-09 to 2019-10-10', '08:08:pm', '2018-05-17', 'Item Update', 80),
(10, 4, 'Updated Category from 2 to 1', '08:04:pm', '2018-05-17', 'Item Update', 61),
(9, 4, 'Updated Category from 1 to 2', '08:04:pm', '2018-05-17', 'Item Update', 61),
(8, 4, 'Updated Category from  to 1', '08:02:pm', '2018-05-17', 'Item Update', 79),
(12, 4, 'Updated ICS from  to 100', '08:15:pm', '2018-05-17', 'Item Update', 145),
(13, 4, 'Updated ICS from  to 12', '08:16:pm', '2018-05-17', 'Item Update', 145),
(14, 4, 'Updated ICS from  to 123', '08:16:pm', '2018-05-17', 'Item Update', 145),
(15, 4, 'Updated ICS from  to ', '08:16:pm', '2018-05-17', 'Item Update', 145),
(16, 4, 'Updated ICS from 123 to ', '08:16:pm', '2018-05-17', 'Item Update', 145),
(17, 4, 'Updated ICS from 1234 to 12345', '08:17:pm', '2018-05-17', 'Item Update', 145);

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

DROP TABLE IF EXISTS `user`;
CREATE TABLE IF NOT EXISTS `user` (
  `user_id` int(45) NOT NULL AUTO_INCREMENT,
  `password` varchar(45) NOT NULL,
  `first_name` varchar(45) NOT NULL,
  `last_name` varchar(45) NOT NULL,
  `email` varchar(45) NOT NULL,
  `id_num` int(45) NOT NULL,
  `contact_num` varchar(45) NOT NULL,
  `course` varchar(45) DEFAULT NULL,
  `year` int(11) DEFAULT NULL,
  `user_type` varchar(45) NOT NULL,
  `status` varchar(250) NOT NULL DEFAULT 'registered',
  PRIMARY KEY (`user_id`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`user_id`, `password`, `first_name`, `last_name`, `email`, `id_num`, `contact_num`, `course`, `year`, `user_type`, `status`) VALUES
(1, '1234', 'Famae', 'Pascua', 'famaepascua@gmail.com', 2143735, '09099299181', 'BSIT', 4, 'student', 'registered'),
(2, '1234', 'Admin', 'Admin', 'admin@gmail.com', 123456, '05845488', '', 0, 'admin', 'registered'),
(3, '1234', 'Denyse', 'Cayadi', 'denyse@gmail.com', 2146790, '', 'BSIT', 4, 'student', 'registered');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
