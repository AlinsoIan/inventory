-- phpMyAdmin SQL Dump
-- version 4.7.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Generation Time: Apr 01, 2018 at 04:38 PM
-- Server version: 5.7.19
-- PHP Version: 7.0.23

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
) ENGINE=InnoDB AUTO_INCREMENT=51 DEFAULT CHARSET=latin1;

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
  `password` varchar(45) NOT NULL,
  `userType` enum('admin','user') NOT NULL,
  `status` varchar(45) NOT NULL,
  PRIMARY KEY (`accountID`)
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `accounts`
--

INSERT INTO `accounts` (`accountID`, `firstName`, `lastName`, `userName`, `password`, `userType`, `status`) VALUES
(1, 'Admin', 'Admin', 'admin', 'admin', 'admin', 'active');

-- --------------------------------------------------------

--
-- Table structure for table `asa`
--

DROP TABLE IF EXISTS `asa`;
CREATE TABLE IF NOT EXISTS `asa` (
  `id` int(25) NOT NULL AUTO_INCREMENT,
  `a` varchar(255) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

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
  PRIMARY KEY (`deliveryID`)
) ENGINE=InnoDB AUTO_INCREMENT=33 DEFAULT CHARSET=latin1;

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
  PRIMARY KEY (`historyID`)
) ENGINE=InnoDB AUTO_INCREMENT=77 DEFAULT CHARSET=latin1;

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
(48, 59, NULL, 2590, 800, 160),
(49, 60, NULL, 50, 50, 10),
(50, 61, NULL, 400, 400, 80),
(51, 62, NULL, 20, 20, 4),
(52, 63, NULL, 100, 100, 20),
(53, 64, NULL, 400, 400, 80),
(54, 65, NULL, 500, 500, 100),
(55, 66, NULL, 100, 100, 20),
(56, 67, NULL, 50, 50, 10),
(57, 68, NULL, 2, 2, 0),
(58, 69, NULL, 450, 450, 90),
(59, 70, NULL, 20, 20, 4),
(60, 71, NULL, 5, 5, 1),
(61, 72, NULL, 10, 10, 2),
(62, 73, NULL, 5, 5, 1),
(63, 74, NULL, 50, 50, 10),
(64, 75, NULL, 50, 50, 10),
(65, 76, NULL, 62, 62, 12),
(66, 77, NULL, 65, 65, 13),
(67, 78, NULL, 300, 300, 60),
(68, 79, NULL, 67, 67, 13),
(69, 80, NULL, 40, 40, 8),
(70, 81, NULL, 24, 24, 4),
(71, 82, NULL, 6, 6, 1),
(72, 83, NULL, 2, 2, 0),
(73, 84, NULL, 2, 2, 0),
(76, 87, NULL, 6, 6, 1),
(77, 88, NULL, 20, 20, 4),
(78, 89, NULL, 50, 50, 10),
(79, 90, NULL, 2, 2, 0),
(80, 91, NULL, 4000, 4000, 800),
(81, 92, NULL, 6, 6, 1),
(82, 93, NULL, 4, 4, 0),
(83, 94, NULL, 24, 24, 4),
(84, 95, NULL, 5, 5, 1),
(85, 96, NULL, 57, 57, 11),
(86, 97, NULL, 10, 10, 2),
(87, 98, NULL, 67, 67, 13),
(88, 99, NULL, 10, 10, 2),
(89, 100, NULL, 100, 100, 20),
(90, 101, NULL, 23, 23, 4),
(91, 102, NULL, 21, 21, 4),
(92, 104, NULL, 800, 800, 160),
(94, 106, NULL, 10, 10, 2),
(95, 107, NULL, 190, 190, 38),
(96, 108, NULL, 3, 3, 0),
(97, 109, NULL, 60, 60, 12),
(98, 110, NULL, 200, 200, 40),
(99, 111, NULL, 20, 20, 4),
(100, 112, NULL, 25, 25, 5),
(102, 114, NULL, 100, 100, 20),
(103, 115, NULL, 30, 30, 6),
(104, 116, NULL, 200, 200, 40),
(105, 117, NULL, 150, 150, 30),
(106, 118, NULL, 80, 80, 16),
(107, 119, NULL, 65, 65, 13),
(108, 120, NULL, 60, 60, 12),
(109, 121, NULL, 100, 100, 20),
(110, 122, NULL, 50, 50, 10),
(111, 123, NULL, 2, 2, 0),
(112, 124, NULL, 100, 100, 20),
(113, 125, NULL, 5, 5, 1),
(114, 126, NULL, 300, 300, 60),
(115, 127, NULL, 2, 2, 0),
(116, 128, NULL, 10, 10, 2),
(117, 129, NULL, 2, 2, 0),
(118, 130, NULL, 100, 100, 20),
(119, 131, NULL, 120, 120, 24),
(120, 132, NULL, 250, 250, 50),
(121, 133, NULL, 400, 400, 80),
(122, 134, NULL, 600, 600, 120),
(123, 135, NULL, 250, 250, 50),
(125, 137, NULL, 80, 80, 16),
(126, 138, NULL, 80, 80, 16),
(127, 139, NULL, 100, 100, 20),
(129, 141, NULL, 150, 150, 30),
(130, 142, NULL, 270, 270, 54),
(131, 143, NULL, 80, 80, 16),
(133, 145, NULL, 6, 6, 1),
(134, 146, NULL, 50, 50, 10),
(135, 147, NULL, 13, 13, 2),
(136, 148, NULL, 34, 34, 6),
(137, 149, NULL, 20, 20, 4),
(138, 150, NULL, 38, 38, 7),
(139, 151, NULL, 11, 11, 2),
(140, 152, NULL, 140, 140, 28),
(141, 153, NULL, 60, 60, 12),
(142, 154, NULL, 4, 4, 0),
(143, 155, NULL, 35, 35, 7),
(144, 156, NULL, 6, 6, 1),
(145, 157, NULL, 6, 6, 1),
(146, 158, NULL, 46, 46, 9),
(147, 159, NULL, 15, 15, 3),
(148, 160, NULL, 50, 50, 10),
(149, 161, NULL, 20, 20, 4),
(150, 162, NULL, 102, 102, 20),
(151, 163, NULL, 49, 49, 9),
(152, 164, NULL, 102, 102, 20);

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
) ENGINE=InnoDB AUTO_INCREMENT=21 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `issuance`
--

INSERT INTO `issuance` (`issuanceID`, `division`, `officeID`, `risNo`, `saiNo`, `issuanceDate`, `issuanceTime`, `type`, `accountID`) VALUES
(20, 'asdw', 61, 'asd', 'asd', '2018-04-01', '11:56:pm', 'Office Supplies', 1);

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
) ENGINE=InnoDB AUTO_INCREMENT=24 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `itemissuance`
--

INSERT INTO `itemissuance` (`itemIssuanceID`, `issuanceID`, `itemID`, `quantityRequested`, `quantityIssued`, `remarks`) VALUES
(23, 20, 59, 100, 200, 'asd');

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
) ENGINE=MyISAM AUTO_INCREMENT=126 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `itemrecords`
--

INSERT INTO `itemrecords` (`itemrecordsID`, `itemID`, `inventoryID`, `recordDate`, `risNo`, `iarNo`, `startingQuantity`, `deliveryQuantity`, `returnsQuantity`, `issuanceQuantity`, `currentQuantity`, `status`) VALUES
(120, 59, 48, '2018-04-19', NULL, 30002, 4028, 8273, NULL, NULL, 12301, 'increased'),
(121, 59, 48, '2018-04-01', NULL, NULL, 12301, 34, NULL, NULL, 12267, 'decreased'),
(122, 59, 48, '2018-04-01', NULL, NULL, 12267, 81, NULL, NULL, 12186, 'decreased'),
(123, 59, 48, '2018-04-01', NULL, NULL, 12186, 1000, NULL, NULL, 11186, 'decreased'),
(124, 59, 48, '2018-04-01', NULL, NULL, 11186, 123, NULL, NULL, 11063, 'decreased'),
(125, 59, 48, '2018-04-01', NULL, NULL, 11063, 8273, NULL, NULL, 2790, 'decreased');

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
  PRIMARY KEY (`itemID`)
) ENGINE=InnoDB AUTO_INCREMENT=165 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `items`
--

INSERT INTO `items` (`itemID`, `supplierID`, `acctSn`, `categoryNo`, `pgsoSn`, `description`, `unitID`, `unitCost`, `brand`, `expirationDate`) VALUES
(59, 4, '0003', 1, '1', 'Alcohol,denatured, 350 ml', 2, 31, 'Green Cross', NULL),
(60, 8, '0006', 1, '1003', 'Bag,paper, brown,#10, 100s pcs/pack', 1, 88, 'Glow', NULL),
(61, 4, '0013-BLACK', 1, '1004', 'Ballpen,ordinary,BLACK', 2, 7, 'Pilot', NULL),
(62, 4, '0015', 1, '1006', 'Band,rubber,big size, #18, 450 grams', 3, 228, 'Elastic', NULL),
(63, 4, '0016', 1, '1007', 'Battery,alkaline,9 volts', 2, 110, 'Pamasonic', NULL),
(64, 4, '0017', 1, '1008', 'Battery,alkaline,size AA', 2, 27, 'Panasonic', NULL),
(65, 4, '0018', 1, '1009', 'Battery,alkaline,size AAA', 2, 26, 'Sony', NULL),
(66, 4, '0019', 1, '1010', 'Battery,alkaline,size C', 1, 112, 'Every Day', NULL),
(67, 4, '0020', 1, '1011', 'Battery,size D', 2, 35, 'Every Day', NULL),
(68, 6, '0021', 1, '1012', 'Battery,CR 123A, lithium,3 volts', 2, 35, 'Every Day', NULL),
(69, 9, '0022', 1, '1013', 'Battery, CR 2025, Lithium, Flat, 3 volts', 2, 47, 'Panasonic', NULL),
(70, 6, '0024', 1, '1015', 'Card, Calling Card', 3, 350, 'Stationary', NULL),
(71, 9, '0028', 1, '1018', 'Binder,comb/Spiral, round, plastic,1.5\" x 44\"', 2, 39, 'Cattleya', NULL),
(72, 9, '0029', 1, '1019', 'Binder,plastic,spiral,black,12 mm x 1.2 m (0.5\"x44\")', 2, 9, 'Cattleya', NULL),
(73, 6, '0033', 1, '1023', 'Binder,ring,metal,19 mm', 2, 11, 'Gold', NULL),
(74, 10, '0038', 1, '1028', 'Pad,refill,for Printer 50,E/50 ', 2, 32, 'Sterling', NULL),
(75, 10, '0039', 1, '1029', 'Binder, Comb, plastic, Black, 5/16\" length 46\"', 2, 32, 'Green Apple', NULL),
(76, 10, '0055', 1, '1037', 'Book,columnar,4 columns', 6, 28, 'Vello', NULL),
(77, 10, '0056', 1, '1028', 'Book,columnar, 24 columns', 6, 45, 'Vello', NULL),
(78, 4, '0057', 1, '1039', 'Book,record,wide, official,500 leaves, White/Blue.8.5\' x 11\'', 2, 127, 'Blue Note', NULL),
(79, 5, '0145', 2, '2001', 'Ink cartridge,Canon CL-41', 2, 1282, 'Canon', '2020-04-08'),
(80, 5, '0146', 2, '2002', 'Ink cartridge,Canon CL-811', 10, 1133, 'Canon', '2019-10-09'),
(81, 5, '0147', 2, '2003', 'Ink cartridge,Canon CL-831', 10, 1175, 'Canon', '2019-05-16'),
(82, 5, '0148', 2, '2004', 'Ink cartridge,Canon CLI-36, color', 10, 1140, 'Canon', '2019-05-11'),
(83, 5, '0149', 2, '2005', 'Ink cartridge,Canon CLI-8, Cyan', 10, 914, 'Canon', '2021-11-22'),
(84, 4, '0150', 2, '2006', 'Ink cartridge,Canon CLI-8, Magenta', 10, 867, 'Canon', '2023-09-10'),
(87, 4, '0151', 2, '2007', 'Ink cartridge,Canon CLI-8, Yellow', 10, 902, 'Canon', '2022-10-28'),
(88, 6, '0152', 2, '2008', 'Ink cartridge,Canon PG- 830', 10, 979, 'Canon', '2021-10-05'),
(89, 8, '0005', 3, '3001', 'Apron, Standard Size', 2, 77, 'X', NULL),
(90, 6, '0153', 2, '2009', 'Ink cartridge,Canon PG-40', 10, 1115, 'Canon', '2022-12-31'),
(91, 6, '0005', 3, '3002', 'Bag,garbage,15 x 15 x 37, Black, Red, Green, Yellow', 2, 6, 'x', NULL),
(92, 6, '0155', 2, '2010', 'Ink cartridge,Canon PGI-35, black', 10, 747, 'Canon', '2019-11-20'),
(93, 9, '0156', 2, '2011', 'Ink cartridge,Canon PGI-5BK, Black', 10, 964, 'Canon', '2023-04-04'),
(94, 9, '0158', 2, '2012', 'Toner, DocuCentre S2011/S2320/S2520, CT202384', 4, 4264, 'DocuCentre', '2023-05-02'),
(95, 4, '0439', 5, '0001', 'Printer, P 14,999.00 and below', 2, 14999, 'HP', NULL),
(96, 9, '0159', 2, '2013', 'Ink cartridge,Epson L800, black', 10, 2415, 'Epson', '2022-12-31'),
(97, 9, '0440', 5, '0002', 'Seal Dry seal', 1, 15000, 'EPSON', NULL),
(98, 9, '0160', 2, '2014', 'Ink cartridge,Epson L800, cyan, light cyan, magenta, light magenta, yellow', 10, 3187, 'Epson', '2024-02-05'),
(99, 5, '0441', 5, '0003', 'UPS P 14,999.00 and below', 2, 15000, 'CANON', NULL),
(100, 6, '0442', 5, '0004', 'Network Printers and Storage Server, USB Type ', 2, 10000, 'HP', NULL),
(101, 6, '0161', 2, '2015', 'Ink cartridge,Epson, L210 Black', 10, 735, 'Epson', '2024-02-02'),
(102, 6, '0162', 2, '2016', 'Ink cartridge,for HP Officejet 7110, original, (4 cart/set-complete colors)', 10, 3554, 'HP', '2023-06-28'),
(103, 1, '008', 3, '3003', 'Bag,Plastic,100\'s/pack,Large', 1, 112, 'X', NULL),
(104, 4, '0117', 1, '1070', 'Fastener,screw type,2\", 100 pcs/pack', 2, 5, 'hen', NULL),
(106, 4, '0448', 5, '0006', 'Cabinet wooden', 2, 800, '', NULL),
(107, 4, '0010', 3, '3005', 'Bag,sando,medium size, 100 pcs/pack', 1, 77, 'x', NULL),
(108, 6, '0217', 2, '2174', ' Ink,Refill,HP Deckjet GT510,GT51,Cyan ', 11, 2200, 'HP', '2023-04-06'),
(109, 5, '0449', 5, '0007', 'Recorder, Digital', 1, 60, '', NULL),
(110, 4, '0011', 3, '3006', 'Bag,sando,XL, 50 pcs/pack', 1, 88, 'x', NULL),
(111, 8, '0450', 5, '0007', 'Table, wooden (Office Table) without glass pad', 2, 500, '', NULL),
(112, 4, '0012', 3, '3007', 'Bag,zip,XXL, 20pcs/pack', 1, 53, 'x', NULL),
(114, 8, '0041', 3, '3008', 'Bleaching Agent,1 gal', 14, 134, 'xy', NULL),
(115, 6, '0059', 3, '3009', 'Broom,ceiling/wall', 2, 121, 'xyz', NULL),
(116, 7, '0060', 3, '3010', 'Broom,soft, wooden handle', 2, 109, 'x', NULL),
(117, 9, '0061', 3, '3011', 'Broom,stick', 12, 29, 'xy', NULL),
(118, 7, '0062', 3, '3012', 'Brush, Tile/Toilet brush, plastic long handle', 2, 116, 'xy', NULL),
(119, 7, '0063', 3, '3013', 'Brush, Hand Brush plastic, without handle,2\" x 6\"', 2, 66, 'xy', NULL),
(120, 6, '0451', 5, '0008', 'Table (Computer Table) ', 1, 20000, '', NULL),
(121, 7, '0064', 3, '3014', 'Brush,toilet bowl,round w/ container', 2, 55, 'xy', NULL),
(122, 5, '0452', 5, '0009', 'Cabinet Steel, 4 drawers', 2, 50, '', NULL),
(123, 4, '0373', 2, '2120', 'Toner cartridge,HP Q6000A Black', 10, 9900, 'HP', '2024-07-07'),
(124, 4, '0076', 3, '3015', 'Cleaner,glass,with sprayer,500 ml', 11, 146, 'x', NULL),
(125, 4, '0460', 5, '0010', 'Cutter, Paper, Heavy Duty', 2, 50, '', NULL),
(126, 4, '077', 3, '3016', 'Cleaner,toilet bowl and urinal,1000 ml, anti-microbial system, lemon fresh, multi-purpose cleaner, kills and viruses, container with handle', 11, 169, 'x', NULL),
(127, 4, '0374', 2, '2121', 'Toner cartridge,HP Q6001A Cyan', 10, 13200, 'HP', '2023-03-05'),
(128, 4, '0078', 3, '3017', 'Cleaner,wipe out dirt , 250g', 13, 83, 'xz', NULL),
(129, 4, '0375', 2, '2122', 'Toner cartridge,HP Q6002A Yellow', 10, 13200, 'HP', '2023-10-02'),
(130, 4, '0079', 3, '3018', 'Cleanser,powder,350 grams', 11, 37, 'xy', NULL),
(131, 4, '0083', 3, '3019', 'Conditioner,fabric,1 gallon', 14, 263, 'x', NULL),
(132, 4, '0097', 3, '3020', 'Deodorant cake,toilet,refill, 50g', 2, 31, 'xy', NULL),
(133, 4, '0098', 3, '3021', 'Detergent powder,1000g with stain away formula, high foam, calamansi fresh', 1, 92, 'x', NULL),
(134, 4, '0099', 3, '3022', 'Dishwashing liquid,250 ml, anti-bacterial, powerful grease stripping, triple active power, lemon or calamansi', 11, 64, 'x', NULL),
(135, 4, '0100', 3, '3023', 'Disinfectant,1000 ml', 11, 39, 'xy', NULL),
(137, 4, '0105', 3, '3025', 'Duster, cloth', 2, 17, 'xy', NULL),
(138, 4, '0106', 3, '3026', 'Dustpan,G.I.,23\" handle', 2, 110, 'x', NULL),
(139, 4, '0122', 3, '3027', 'Fly catcher, hanging/Table', 2, 31, 'x', NULL),
(141, 4, '0129', 3, '3029', 'Freshener,air,320 ml, 5 in 1', 11, 198, 'xy', NULL),
(142, 4, '0130', 3, '3030', 'Gloves, rubber, Large, medium, small', 16, 46, 'xy', NULL),
(143, 4, '0134', 3, '3031', 'Handle,mop,steel', 2, 413, 'zz', NULL),
(145, 4, '0001', 4, '4001', 'Album,DVD/CD case,folder', 2, 1500, 'Kodak', NULL),
(146, 9, '0027', 4, '4002', 'Bin,trash with cover,foot operated,medium,round,plastic', 2, 198, 'Attach-A-Trash', NULL),
(147, 4, '0068', 4, '4008', 'Card reader,usb type', 2, 104, 'Micro SD', NULL),
(148, 4, '0069', 4, '4036', 'Card reader, internal', 5, 330, 'Micro SD', NULL),
(149, 6, '0094', 4, '4009', 'cutter,heavy duty,L500,retractable', 2, 52, 'D', NULL),
(150, 5, '0102', 4, '4011', 'Dispenser,tape,for 1\",transparent tape', 2, 82, 'F', NULL),
(151, 4, '0113', 4, '4012', 'Extension,USB', 2, 275, 'AA', NULL),
(152, 7, '0119', 4, '4029', 'Stamp,self linking,colop 40,printer 40', 1, 218, 'AD', NULL),
(153, 7, '0121', 4, '4013', 'Flash drive,USB,32 GB', 2, 643, 'AP', NULL),
(154, 5, '0132', 4, '4014', 'Glue gun,heavy duty', 2, 412, 'BB', NULL),
(155, 8, '0245', 4, '4030', 'Stamp,self linking,colop 50,printer 50', 1, 416, 'FD', NULL),
(156, 4, '0265', 4, '4018', 'Memory card, 32 gb', 2, 495, 'Sandisk', NULL),
(157, 10, '0276', 4, '4020', 'Numbering Machine,Automatic,12 digits', 2, 1200, 'DP', NULL),
(158, 7, '0320', 4, '4021', 'puncher,2 holes,70mm,no.468,Heavy Duty', 2, 143, 'AX', NULL),
(159, 8, '0325', 4, '4022', 'Self-inking receiving/release', 2, 2063, 'AW', NULL),
(160, 10, '0334', 4, '4023', 'Scissors,8\",stainless steel', 16, 52, 'Que', NULL),
(161, 10, '0339', 4, '4024', 'Sharpener,Pencil,Heavy Duty', 2, 230, 'PR', NULL),
(162, 6, '0346', 4, '4031', 'Stapler,heavy duty,with wire remover', 2, 320, 'X', NULL),
(163, 7, '0402', 4, '4033', 'Tray,File,3 layers,plastic,stainless stand,US-10431', 2, 582, 'Y', NULL),
(164, 5, '0346', 4, '4031', 'Stapler,heavy duty,without1 wire remover', 2, 320, 'YY', NULL);

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
(1, 'Provincial Governor\'s Office (main)', 'PGO', '1000.1', '04-00-01-01'),
(2, 'Prov\'l gov Office-interagency(Scholarship, SPES)', 'Interagency', '1000.1.4', '04-00-01-01'),
(3, 'Benguet Day Celebration Expenses', 'ADIVAY', '1000.1', '04-00-01-01'),
(4, 'Pro\'l Employment Services Office', 'PESO', '1000.1', '04-00-01-01'),
(5, 'Prov\'l Disaster Risk Reduction Mngmnt Office', 'PDRRMO', '3000.500.2', '04-00-01-01'),
(6, 'Benguet Cold Chain Project', 'BCCP', '8000.5', '04-00-13-04'),
(7, 'Provincial Library office', 'LIB', '1000.1.7', '04-00-01-01'),
(8, 'Provincial  Warden\'s Office', 'PWO(JAIL)', '1000.1.8', '04-00-01-01'),
(9, 'Provincial Tourism Office', 'TOURISM', '8000.4', '04-00-01-01'),
(10, 'Board of Assessment Appeals Office', 'BTAAO-RD', '1000', '04-00-01-04'),
(11, 'Prov\'l Human Resources Mngmt & Dev\'t Office', 'PHRMDO', '1000.1.6', '04-00-01-01'),
(12, 'Prov\'l Sangguniang Panlalawigan Office', 'SPO', '1000.1.15', '04-00-02-01'),
(13, 'Prov\'l Vice-Governor\'s Office', 'VICE-GOV', '1000.1.15', '04-00-02-01'),
(14, 'Prov\'l Planning and Dev\'t Office', 'PPDO', '1000.1.9', '04-00-03-01'),
(15, 'Prov\'l General services Office', 'PGSO', '1000.1.14', '04-00-04-01'),
(16, 'Prov\'l Budget Office', 'PBO', '1000.1.10', '04-00-05-01'),
(17, 'Prov\'l Accounting Office', 'PACCO', '1000.1.12', '04-00-05-02'),
(18, 'Prov\'l Treasury Office', 'PTO', '1000.1.11', '04-00-05-03'),
(19, 'Prov\'l assessor\'s Office', 'PASSO', '1000.1.13', '04-00-05-04'),
(20, 'Prov\'l Legal Office', 'PLO', '1000.1.16', '04-00-06-01'),
(21, 'Regional Trial Court', 'RTC', '1000', '04-00-06-02'),
(22, 'Prov\'l Prosecutor\'s Office', 'PPO', '1000.1.17', '04-00-07-01'),
(23, 'Prov\'l Social Welfare & Dev\'t Office(main)', 'PSWDO', '3000-500.1', '04-00-07-01'),
(24, 'Grant and Donations', 'PSWDO', '3000-500.1', '04-00-07-01'),
(25, 'Assistance to Individual in Crisis Situation', 'AICS', '3000-500.1', '04-00-07-01'),
(26, 'Emergency Shelter Assistance', 'ESA', '3000-500.1', '04-00-07-01'),
(27, 'Food Supplies Expenses (Food for Work)', 'ESA', '3000-500.1', '04-00-07-01'),
(28, 'Food Supplies Expenses (For Malnourished)', 'ESA', '3000-500.1', '04-00-07-01'),
(29, 'Family/Child&Youth/Women/Rebel Returnees', 'ESA', '3000-500.1', '04-00-07-01'),
(30, 'Rehabilitation of Youth Offenders', 'ESA', '3000-500.1', '04-00-07-01'),
(31, 'Livelihood Assistance (Bahay Pag-asa)', 'ESA', '3000-500.1', '04-00-07-01'),
(32, 'Prov\'l Agriculturist \'s Office', 'OPAG', '8000.2', '04-00-08-01'),
(33, 'Prov\'l Veterinary Office', 'PVET', '8000.3', '04-00-08-02'),
(34, 'Prov\'l Engineering Office', 'PEO', '1000.1.18', '04-00-08-03'),
(35, 'Prov\'l Benguet Environment Office', 'PBENRO', '8000.1.1', '04-00-08-04'),
(36, 'Prov\'l Health Office', 'PHO', '3000-200.1', '04-00-09-01'),
(37, 'Atok District Office', 'ADH', '3000-200.3', '04-00-09-02'),
(38, 'Dennis Molintas District Hospital', 'DMDH', '3000-200.5', '04-00-09-03'),
(39, 'Northern Benguet District Hospital', 'NBDH', '3000-200.4', '04-00-09-04'),
(40, 'Itogon District Hospital', 'IDH', '3000-200.6', '04-00-09-05'),
(41, 'kapangan District Hospital', 'KDH', '3000-200.7', '04-00-09-06'),
(42, 'Commission on Audit', 'COA', '1000.1.4.22', '04-00-10-01'),
(43, 'Calamity Fund', 'COA', '1000.1.4.22', '04-00-12-02'),
(44, 'Barangay Dev\'t Fund', 'COA', '1000.1.4.22', '04-00-14-01'),
(45, 'All Office (Terminal leaves,monetization,BAC-infra,BAC-Goods,Prov', 'ALL-OFFICE', '1000.1.2', '04-00-14-02'),
(46, 'Non-Office', 'NON-OFFICE', '1000.1.3', '04-00-14-01'),
(47, 'Interspecial Accounting Transfer', 'NON-OFFICE', '1000.1.3', '04-00-14-01'),
(49, 'Cash Incentive Awards & Sports, Honoraria', 'NON-OFFICE', '1000.1.3', '04-00-14-01'),
(50, 'Non-Gov\'t Org Rep, Academic & Tech. Skills', 'NON-OFFICE', '1000.1.3', '04-00-14-01'),
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
) ENGINE=InnoDB AUTO_INCREMENT=27 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `ppmp`
--

INSERT INTO `ppmp` (`ppmpID`, `officeID`, `ppmpDate`) VALUES
(26, 61, '2018-04-01');

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
  `totalAmount` int(45) NOT NULL,
  PRIMARY KEY (`ppmpitemsID`)
) ENGINE=MyISAM AUTO_INCREMENT=37 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `ppmpitems`
--

INSERT INTO `ppmpitems` (`ppmpitemsID`, `itemID`, `itemQuantity`, `ppmpID`, `unitCost`, `totalAmount`) VALUES
(36, 59, 100, 26, 10, 12314);

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
  PRIMARY KEY (`returnID`)
) ENGINE=InnoDB AUTO_INCREMENT=13 DEFAULT CHARSET=latin1;

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
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
