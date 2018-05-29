-- phpMyAdmin SQL Dump
-- version 4.7.9
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Generation Time: May 29, 2018 at 12:58 PM
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
) ENGINE=InnoDB AUTO_INCREMENT=235 DEFAULT CHARSET=latin1;

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
(9, 'Fatima', 'Pascua', 'famae', 'famae', 'user', 'inactive');

-- --------------------------------------------------------

--
-- Table structure for table `delivery`
--

DROP TABLE IF EXISTS `delivery`;
CREATE TABLE IF NOT EXISTS `delivery` (
  `deliveryID` int(10) NOT NULL AUTO_INCREMENT,
  `iarNo` int(10) NOT NULL,
  `deliveryDate` date NOT NULL,
  `accountID` int(45) NOT NULL,
  `poDate` date DEFAULT NULL,
  `poNumber` int(45) DEFAULT NULL,
  `rcptNo` varchar(255) DEFAULT NULL,
  PRIMARY KEY (`deliveryID`)
) ENGINE=InnoDB AUTO_INCREMENT=106 DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `deliveryitems`
--

DROP TABLE IF EXISTS `deliveryitems`;
CREATE TABLE IF NOT EXISTS `deliveryitems` (
  `deliveryItemsID` int(255) NOT NULL AUTO_INCREMENT,
  `itemID` int(45) NOT NULL,
  `totalQuantity` int(45) NOT NULL,
  `unitCost` int(45) NOT NULL,
  `remarks` varchar(100) NOT NULL,
  `supplierID` int(45) NOT NULL,
  `deliveryID` int(45) NOT NULL,
  `totalCost` double DEFAULT NULL,
  `unitID` int(45) DEFAULT NULL,
  `brand` varchar(100) DEFAULT NULL,
  PRIMARY KEY (`deliveryItemsID`)
) ENGINE=InnoDB AUTO_INCREMENT=26 DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `disposal`
--

DROP TABLE IF EXISTS `disposal`;
CREATE TABLE IF NOT EXISTS `disposal` (
  `disposalID` int(255) NOT NULL AUTO_INCREMENT,
  `itemID` int(255) NOT NULL,
  `date` date NOT NULL,
  `quantity` int(255) NOT NULL,
  `remarks` varchar(255) NOT NULL,
  `status` varchar(45) DEFAULT NULL,
  `accountID` int(45) NOT NULL,
  PRIMARY KEY (`disposalID`)
) ENGINE=MyISAM AUTO_INCREMENT=11 DEFAULT CHARSET=latin1;

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
) ENGINE=InnoDB AUTO_INCREMENT=216 DEFAULT CHARSET=latin1;

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
) ENGINE=InnoDB AUTO_INCREMENT=171 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `inventory`
--

INSERT INTO `inventory` (`inventoryID`, `itemID`, `physicalCount`, `currentQuantity`, `startingQuantity`, `reorderPoint`) VALUES
(45, 56, NULL, 1070, 1000, 200),
(46, 57, NULL, 1000, 1000, 200),
(47, 58, NULL, 1000, 1000, 200),
(50, 61, NULL, 332, 400, 80),
(51, 62, NULL, 20, 20, 4),
(52, 63, NULL, 115, 100, 20),
(53, 64, NULL, 398, 400, 80),
(54, 65, NULL, 500, 500, 100),
(55, 66, NULL, 663, 100, 20),
(56, 67, NULL, 15, 50, 10),
(57, 68, NULL, 26, 2, 0),
(58, 69, NULL, 437, 450, 90),
(59, 70, NULL, 79, 20, 4),
(60, 71, NULL, 57, 5, 1),
(61, 72, NULL, 10, 10, 2),
(62, 73, NULL, 5, 5, 1),
(63, 74, NULL, 55, 50, 10),
(64, 75, NULL, 47, 50, 10),
(65, 76, NULL, 155, 62, 12),
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
(117, 129, NULL, 122, 2, 0),
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
(131, 143, NULL, 92, 80, 16),
(133, 145, NULL, 25, 6, 1),
(134, 146, NULL, 50, 50, 10),
(135, 147, NULL, 13, 13, 2),
(136, 148, NULL, 35, 34, 6),
(137, 149, NULL, 20, 20, 4),
(138, 150, NULL, 40, 38, 7),
(139, 151, NULL, 217, 11, 2),
(140, 152, NULL, 140, 140, 28),
(141, 153, NULL, 138, 60, 12),
(142, 154, NULL, 44, 4, 0),
(143, 155, NULL, -37, 35, 7),
(144, 156, NULL, 31, 6, 1),
(145, 157, NULL, 6, 6, 1),
(146, 158, NULL, 34, 46, 9),
(147, 159, NULL, 267, 15, 3),
(148, 160, NULL, 166, 50, 10),
(149, 161, NULL, 123, 20, 4),
(150, 162, NULL, 155, 102, 20),
(151, 163, NULL, 111, 49, 9),
(152, 164, NULL, 87, 102, 20);

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
  `status` varchar(45) NOT NULL,
  `accountID` int(10) NOT NULL,
  `type` varchar(45) DEFAULT NULL,
  PRIMARY KEY (`issuanceID`)
) ENGINE=InnoDB AUTO_INCREMENT=79 DEFAULT CHARSET=latin1;

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
) ENGINE=InnoDB AUTO_INCREMENT=153 DEFAULT CHARSET=latin1;

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
  `officeID` int(255) DEFAULT '255',
  `supplierID` int(255) DEFAULT '1',
  PRIMARY KEY (`itemrecordsID`)
) ENGINE=MyISAM AUTO_INCREMENT=465 DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `items`
--

DROP TABLE IF EXISTS `items`;
CREATE TABLE IF NOT EXISTS `items` (
  `itemID` int(10) NOT NULL AUTO_INCREMENT,
  `acctSn` varchar(45) NOT NULL,
  `categoryNo` int(10) NOT NULL,
  `pgsoSn` varchar(45) NOT NULL,
  `description` varchar(255) NOT NULL,
  `unitID` int(10) NOT NULL,
  `unitCost` int(11) NOT NULL,
  `expirationDate` date DEFAULT NULL,
  `icsNo` varchar(45) DEFAULT NULL,
  PRIMARY KEY (`itemID`)
) ENGINE=InnoDB AUTO_INCREMENT=175 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `items`
--

INSERT INTO `items` (`itemID`, `acctSn`, `categoryNo`, `pgsoSn`, `description`, `unitID`, `unitCost`, `expirationDate`, `icsNo`) VALUES
(61, '0013-BLACK', 1, '1004', 'Ballpen,ordinary,BLACK', 2, 90, NULL, NULL),
(62, '0015', 1, '1006', 'Band,rubber,big size, #18, 450 grams', 3, 228, NULL, NULL),
(63, '0016', 1, '1007', 'Battery,alkaline,9 volts', 2, 110, NULL, NULL),
(64, '0017', 1, '1008', 'Battery,alkaline,size AA', 2, 27, NULL, NULL),
(65, '0018', 1, '1009', 'Battery,alkaline,size AAA', 2, 26, NULL, NULL),
(66, '0019', 1, '1010', 'Battery,alkaline,size C', 1, 112, NULL, NULL),
(67, '0020', 1, '1011', 'Battery,size D', 2, 35, NULL, NULL),
(68, '0021', 1, '1012', 'Battery,CR 123A, lithium,3 volts', 2, 35, NULL, NULL),
(69, '0022', 1, '1013', 'Battery, CR 2025, Lithium, Flat, 3 volts', 2, 47, NULL, NULL),
(70, '0024', 1, '1015', 'Card, Calling Card', 3, 350, NULL, NULL),
(71, '0028', 1, '1018', 'Binder,comb/Spiral, round, plastic,1.5 x 44', 2, 39, NULL, NULL),
(72, '0029', 1, '1019', 'Binder,plastic,spiral,black,12 mm x 1.2 m (0.5x44)', 2, 9, NULL, NULL),
(73, '0033', 1, '1023', 'Binder,ring,metal,19 mm', 2, 11, NULL, NULL),
(74, '0038', 1, '1028', 'Pad,refill,for Printer 50,E/50 ', 2, 32, NULL, NULL),
(75, '0039', 1, '1029', 'Binder, Comb, plastic, Black, 5/16 length 46', 2, 32, NULL, NULL),
(76, '0055', 1, '1037', 'Book,columnar,4 columns', 6, 28, NULL, NULL),
(77, '0056', 1, '1028', 'Book,columnar, 24 columns', 6, 45, NULL, NULL),
(78, '0057', 1, '1039', 'Book,record,wide, official,500 leaves, White/Blue.8.5', 2, 127, NULL, NULL),
(79, '0145', 1, '2001', 'Ink cartridge,Canon CL-41', 2, 1282, '2018-04-08', NULL),
(80, '0146', 2, '2002', 'Ink cartridge,Canon CL-811', 10, 1133, '2019-10-10', NULL),
(81, '0147', 2, '2003', 'Ink cartridge,Canon CL-831', 10, 1175, '2019-05-16', NULL),
(82, '0148', 2, '2004', 'Ink cartridge,Canon CLI-36, color', 10, 1140, '2019-05-11', NULL),
(83, '0149', 2, '2005', 'Ink cartridge,Canon CLI-8, Cyan', 10, 914, '2021-11-22', NULL),
(84, '0150', 2, '2006', 'Ink cartridge,Canon CLI-8, Magenta', 10, 867, '2023-09-10', NULL),
(87, '0151', 2, '2007', 'Ink cartridge,Canon CLI-8, Yellow', 10, 902, '2022-10-28', NULL),
(88, '0152', 2, '2008', 'Ink cartridge,Canon PG- 830', 10, 979, '2021-10-05', NULL),
(89, '0005', 3, '3001', 'Apron, Standard Size', 2, 77, NULL, NULL),
(90, '0153', 2, '2009', 'Ink cartridge,Canon PG-40', 10, 1115, '2022-12-31', NULL),
(91, '0005', 3, '3002', 'Bag,garbage,15 x 15 x 37, Black, Red, Green, Yellow', 2, 6, NULL, NULL),
(92, '0155', 2, '2010', 'Ink cartridge,Canon PGI-35, black', 10, 747, '2019-11-20', NULL),
(93, '0156', 2, '2011', 'Ink cartridge,Canon PGI-5BK, Black', 10, 964, '2023-04-04', NULL),
(94, '0158', 2, '2012', 'Toner, DocuCentre S2011/S2320/S2520, CT202384', 4, 4264, '2023-05-02', NULL),
(95, '0439', 5, '0001', 'Printer, P 14,999.00 and below', 2, 14999, NULL, ''),
(96, '0159', 2, '2013', 'Ink cartridge,Epson L800, black', 10, 2415, '2022-12-31', NULL),
(97, '0440', 5, '0002', 'Seal Dry seal', 1, 15000, NULL, NULL),
(98, '0160', 2, '2014', 'Ink cartridge,Epson L800, cyan, light cyan, magenta, light magenta, yellow', 10, 3187, '2024-02-05', NULL),
(99, '0441', 5, '0003', 'UPS P 14,999.00 and below', 2, 15000, NULL, NULL),
(100, '0442', 5, '0004', 'Network Printers and Storage Server, USB Type ', 2, 10000, NULL, NULL),
(101, '0161', 2, '2015', 'Ink cartridge,Epson, L210 Black', 10, 735, '2024-02-02', NULL),
(102, '0162', 2, '2016', 'Ink cartridge,for HP Officejet 7110, original, (4 cart/set-complete colors)', 10, 3554, '2023-06-28', NULL),
(103, '008', 3, '3003', 'Bag,Plastic,100\'s/pack,Large', 1, 112, NULL, NULL),
(104, '0117', 1, '1070', 'Fastener,screw type,2, 100 pcs/pack', 2, 5, NULL, NULL),
(106, '0448', 5, '0006', 'Cabinet wooden', 2, 800, NULL, NULL),
(107, '0010', 3, '3005', 'Bag,sando,medium size, 100 pcs/pack', 1, 77, NULL, NULL),
(108, '0217', 2, '2174', ' Ink,Refill,HP Deckjet GT510,GT51,Cyan ', 11, 2200, '2023-04-06', NULL),
(109, '0449', 5, '0007', 'Recorder, Digital', 1, 60, NULL, NULL),
(110, '0011', 3, '3006', 'Bag,sando,XL, 50 pcs/pack', 1, 88, NULL, NULL),
(111, '0450', 5, '0007', 'Table, wooden (Office Table) without glass pad', 2, 500, NULL, NULL),
(112, '0012', 3, '3007', 'Bag,zip,XXL, 20pcs/pack', 1, 53, NULL, NULL),
(114, '0041', 3, '3008', 'Bleaching Agent,1 gal', 14, 134, NULL, NULL),
(115, '0059', 3, '3009', 'Broom,ceiling/wall', 2, 121, NULL, NULL),
(116, '0060', 3, '3010', 'Broom,soft, wooden handle', 2, 109, NULL, NULL),
(117, '0061', 3, '3011', 'Broom,stick', 12, 29, NULL, NULL),
(118, '0062', 3, '3012', 'Brush, Tile/Toilet brush, plastic long handle', 2, 116, NULL, NULL),
(119, '0063', 3, '3013', 'Brush, Hand Brush plastic, without handle,2\" x 6\"', 2, 66, NULL, NULL),
(120, '0451', 5, '0008', 'Table (Computer Table) ', 1, 20000, NULL, NULL),
(121, '0064', 3, '3014', 'Brush,toilet bowl,round w/ container', 2, 55, NULL, NULL),
(122, '0452', 5, '0009', 'Cabinet Steel, 4 drawers', 2, 50, NULL, NULL),
(123, '0373', 2, '2120', 'Toner cartridge,HP Q6000A Black', 10, 9900, '2024-07-07', NULL),
(124, '0076', 3, '3015', 'Cleaner,glass,with sprayer,500 ml', 11, 146, NULL, NULL),
(125, '0460', 5, '0010', 'Cutter, Paper, Heavy Duty', 2, 50, NULL, NULL),
(126, '077', 3, '3016', 'Cleaner,toilet bowl and urinal,1000 ml, anti-microbial system, lemon fresh, multi-purpose cleaner, kills and viruses, container with handle', 11, 169, NULL, NULL),
(127, '0374', 2, '2121', 'Toner cartridge,HP Q6001A Cyan', 10, 13200, '2023-03-05', NULL),
(128, '0078', 3, '3017', 'Cleaner,wipe out dirt , 250g', 13, 83, NULL, NULL),
(129, '0375', 2, '2122', 'Toner cartridge,HP Q6002A Yellow', 10, 13200, '2023-10-02', NULL),
(130, '0079', 3, '3018', 'Cleanser,powder,350 grams', 11, 37, NULL, NULL),
(131, '0083', 3, '3019', 'Conditioner,fabric,1 gallon', 14, 263, NULL, NULL),
(132, '0097', 3, '3020', 'Deodorant cake,toilet,refill, 50g', 2, 31, NULL, NULL),
(133, '0098', 3, '3021', 'Detergent powder,1000g with stain away formula, high foam, calamansi fresh', 1, 92, NULL, NULL),
(134, '0099', 3, '3022', 'Dishwashing liquid,250 ml, anti-bacterial, powerful grease stripping, triple active power, lemon or calamansi', 11, 64, NULL, NULL),
(135, '0100', 3, '3023', 'Disinfectant,1000 ml', 11, 39, NULL, NULL),
(137, '0105', 3, '3025', 'Duster, cloth', 2, 17, NULL, NULL),
(138, '0106', 3, '3026', 'Dustpan,G.I.,23\" handle', 2, 110, NULL, NULL),
(139, '0122', 3, '3027', 'Fly catcher, hanging/Table', 2, 31, NULL, NULL),
(141, '0129', 3, '3029', 'Freshener,air,320 ml, 5 in 1', 11, 198, NULL, NULL),
(142, '0130', 3, '3030', 'Gloves, rubber, Large, medium, small', 16, 46, NULL, NULL),
(143, '0134', 3, '3031', 'Handle,mop,steel', 2, 413, NULL, NULL),
(145, '0001', 4, '4001', 'Album,DVD/CD case,folder', 2, 1500, NULL, ''),
(146, '0027', 4, '4002', 'Bin,trash with cover,foot operated,medium,round,plastic', 2, 198, NULL, NULL),
(147, '0068', 4, '4008', 'Card reader,usb type', 2, 104, NULL, NULL),
(148, '0069', 4, '4036', 'Card reader, internal', 5, 330, NULL, NULL),
(149, '0094', 4, '4009', 'cutter,heavy duty,L500,retractable', 2, 52, NULL, NULL),
(150, '0102', 4, '4011', 'Dispenser,tape,for 1\",transparent tape', 2, 82, NULL, NULL),
(151, '0113', 4, '4012', 'Extension,USB', 2, 275, NULL, NULL),
(152, '0119', 4, '4029', 'Stamp,self linking,colop 40,printer 40', 1, 218, NULL, NULL),
(153, '0121', 4, '4013', 'Flash drive,USB,32 GB', 2, 643, NULL, NULL),
(154, '0132', 4, '4014', 'Glue gun,heavy duty', 2, 412, NULL, NULL),
(155, '0245', 4, '4030', 'Stamp,self linking,colop 50,printer 50', 1, 416, NULL, NULL),
(156, '0265', 4, '4018', 'Memory card, 32 gb', 2, 495, NULL, NULL),
(157, '0276', 4, '4020', 'Numbering Machine,Automatic,12 digits', 2, 1200, NULL, NULL),
(158, '0320', 4, '4021', 'puncher,2 holes,70mm,no.468,Heavy Duty', 2, 143, NULL, NULL),
(159, '0325', 4, '4022', 'Self-inking receiving/release', 2, 2063, NULL, NULL),
(160, '0334', 4, '4023', 'Scissors,8\",stainless steel', 16, 52, NULL, NULL),
(161, '0339', 4, '4024', 'Sharpener,Pencil,Heavy Duty', 2, 230, NULL, NULL),
(162, '0346', 4, '4031', 'Stapler,heavy duty,with wire remover', 2, 320, NULL, NULL),
(163, '0402', 4, '4033', 'Tray,File,3 layers,plastic,stainless stand,US-10431', 2, 582, NULL, NULL),
(164, '0346', 4, '4031', 'Stapler,heavy duty,without1 wire remover', 2, 320, NULL, NULL);

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
) ENGINE=InnoDB AUTO_INCREMENT=256 DEFAULT CHARSET=latin1;

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
(61, 'Aid to Boy Scout & Girl Scout, Red Cross', 'NON-OFFICE', '1000.1.3', '04-00-14-01'),
(255, 'None', 'N', '00000', '00000');

-- --------------------------------------------------------

--
-- Table structure for table `ppmp`
--

DROP TABLE IF EXISTS `ppmp`;
CREATE TABLE IF NOT EXISTS `ppmp` (
  `ppmpID` int(10) NOT NULL AUTO_INCREMENT,
  `officeID` int(10) NOT NULL,
  `ppmpDate` date NOT NULL,
  `type` varchar(40) NOT NULL,
  PRIMARY KEY (`ppmpID`)
) ENGINE=InnoDB AUTO_INCREMENT=50 DEFAULT CHARSET=latin1;

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
) ENGINE=MyISAM AUTO_INCREMENT=89 DEFAULT CHARSET=latin1;

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
) ENGINE=InnoDB AUTO_INCREMENT=65 DEFAULT CHARSET=latin1;

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
  `status` varchar(100) NOT NULL,
  PRIMARY KEY (`supplierID`),
  UNIQUE KEY `tinNo` (`tinNo`)
) ENGINE=InnoDB AUTO_INCREMENT=11 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `suppliers`
--

INSERT INTO `suppliers` (`supplierID`, `tinNo`, `supplierName`, `address`, `contactNo`, `status`) VALUES
(1, 0, 'None', NULL, NULL, ''),
(4, 12345, 'TSB BAZAAR', '#431 UNZAD VILLASIS, PANGASINAN', '09128374958', 'active'),
(5, 54321, 'COPYLANDIA', 'Baguio City', '09094562819', ''),
(6, 99812, 'CID', 'Baguio City', '09098080681', ''),
(7, 76582, '456 COMMERCIAL CENTER', 'Km6 La Trinidad', '09092657483', ''),
(8, 83751, 'KENWAYNE', 'Km5, La Trinidad', '09082756291', ''),
(9, 78373, 'NEW CITY', 'Bonifacio St', '090723647281', ''),
(10, 82651, 'JET BOOK STORE', 'SESSION ROAD', '09072657481', '');

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
) ENGINE=MyISAM AUTO_INCREMENT=23 DEFAULT CHARSET=latin1;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
