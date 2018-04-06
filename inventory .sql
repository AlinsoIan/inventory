-- phpMyAdmin SQL Dump
-- version 4.7.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Generation Time: Apr 06, 2018 at 03:48 PM
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
) ENGINE=InnoDB AUTO_INCREMENT=207 DEFAULT CHARSET=latin1;

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
(192, 4, '01:54:pm', NULL, '2018-04-06'),
(193, 5, '02:03:pm', '02:05:pm', '2018-04-06'),
(194, 8, '02:03:pm', '02:05:pm', '2018-04-06'),
(195, 7, '02:05:pm', '02:05:pm', '2018-04-06'),
(196, 6, '02:06:pm', '02:09:pm', '2018-04-06'),
(197, 9, '02:06:pm', '02:09:pm', '2018-04-06'),
(198, 4, '02:09:pm', '02:18:pm', '2018-04-06'),
(199, 4, '02:09:pm', '02:16:pm', '2018-04-06'),
(200, 3, '02:17:pm', NULL, '2018-04-06'),
(201, 7, '02:18:pm', NULL, '2018-04-06'),
(202, 4, '03:52:pm', '03:58:pm', '2018-04-06'),
(203, 7, '03:52:pm', '03:57:pm', '2018-04-06'),
(204, 3, '03:52:pm', '03:57:pm', '2018-04-06'),
(205, 6, '03:55:pm', NULL, '2018-04-06'),
(206, 4, '10:31:pm', NULL, '2018-04-06');

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
) ENGINE=InnoDB AUTO_INCREMENT=70 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `delivery`
--

INSERT INTO `delivery` (`deliveryID`, `supplierID`, `itemID`, `iarNo`, `totalQuantity`, `deliveryDate`, `accountID`) VALUES
(43, 6, 110, 34, 4, '2018-04-26', 7),
(44, 4, 62, 345, 5, '2018-04-06', 3),
(45, 6, 98, 345, 5, '2018-04-06', 3),
(46, 8, 126, 345, 4, '2018-04-06', 3),
(47, 8, 95, 22, 4, '2018-04-28', 7),
(48, 4, 79, 22, 8, '2018-04-28', 7),
(49, 7, 117, 6, 4, '2018-04-27', 8),
(50, 9, 92, 6, 2, '2018-04-27', 8),
(51, 4, 62, 23, 7, '2018-04-06', 5),
(52, 9, 79, 23, 2, '2018-04-06', 5),
(53, 9, 84, 23, 2, '2018-04-06', 5),
(54, 5, 132, 6, 7, '2018-04-27', 9),
(55, 4, 61, 346, 5, '2018-04-06', 6),
(56, 6, 66, 346, 4, '2018-04-06', 6),
(57, 6, 78, 346, 3, '2018-04-06', 6),
(58, 5, 77, 346, 2, '2018-04-06', 6),
(59, 10, 78, 346, 1, '2018-04-06', 6),
(60, 4, 79, 346, 4, '2018-04-06', 6),
(61, 8, 108, 346, 4, '2018-04-06', 6),
(62, 8, 95, 346, 4, '2018-04-06', 6),
(63, 7, 89, 346, 4, '2018-04-06', 6),
(64, 8, 145, 346, 4, '2018-04-06', 6),
(65, 4, 66, 8765, 40, '2018-05-03', 4),
(66, 8, 130, 8765, 30, '2018-05-03', 4),
(67, 9, 163, 8765, 50, '2018-05-03', 4),
(69, 4, 61, 56, 1, '2018-04-06', 6);

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
) ENGINE=InnoDB AUTO_INCREMENT=93 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `history`
--

INSERT INTO `history` (`historyID`, `accountID`, `issuanceID`, `deliveryID`, `returnID`, `activity`, `actDate`, `type`) VALUES
(42, 7, NULL, 43, NULL, 'delivered', '2018-04-26', 'Delivery'),
(43, 3, NULL, 44, NULL, 'delivered', '2018-04-06', 'Delivery'),
(44, 3, NULL, 45, NULL, 'delivered', '2018-04-06', 'Delivery'),
(45, 3, NULL, 46, NULL, 'delivered', '2018-04-06', 'Delivery'),
(46, 7, NULL, 47, NULL, 'delivered', '2018-04-28', 'Delivery'),
(47, 7, NULL, 48, NULL, 'delivered', '2018-04-28', 'Delivery'),
(48, 7, 41, NULL, NULL, 'issued', '2018-04-06', 'issuance'),
(49, 3, 42, NULL, NULL, 'issued', '2018-04-06', 'issuance'),
(50, 8, NULL, 49, NULL, 'delivered', '2018-04-27', 'Delivery'),
(51, 8, NULL, 50, NULL, 'delivered', '2018-04-27', 'Delivery'),
(52, 5, NULL, 51, NULL, 'delivered', '2018-04-06', 'Delivery'),
(53, 5, NULL, 52, NULL, 'delivered', '2018-04-06', 'Delivery'),
(54, 5, NULL, 53, NULL, 'delivered', '2018-04-06', 'Delivery'),
(55, 8, 43, NULL, NULL, 'issued', '2018-04-06', 'issuance'),
(56, 5, 44, NULL, NULL, 'issued', '2018-04-06', 'issuance'),
(57, 8, 45, NULL, NULL, 'issued', '2018-04-06', 'issuance'),
(58, 9, NULL, 54, NULL, 'delivered', '2018-04-27', 'Delivery'),
(59, 9, 46, NULL, NULL, 'issued', '2018-04-06', 'issuance'),
(60, 6, NULL, 55, NULL, 'delivered', '2018-04-06', 'Delivery'),
(61, 6, NULL, 56, NULL, 'delivered', '2018-04-06', 'Delivery'),
(62, 6, NULL, 57, NULL, 'delivered', '2018-04-06', 'Delivery'),
(63, 6, NULL, 58, NULL, 'delivered', '2018-04-06', 'Delivery'),
(64, 6, NULL, 59, NULL, 'delivered', '2018-04-06', 'Delivery'),
(65, 6, NULL, 60, NULL, 'delivered', '2018-04-06', 'Delivery'),
(66, 6, NULL, 61, NULL, 'delivered', '2018-04-06', 'Delivery'),
(67, 6, NULL, 62, NULL, 'delivered', '2018-04-06', 'Delivery'),
(68, 6, NULL, 63, NULL, 'delivered', '2018-04-06', 'Delivery'),
(69, 6, NULL, 64, NULL, 'delivered', '2018-04-06', 'Delivery'),
(70, 6, 47, NULL, NULL, 'issued', '2018-04-06', 'issuance'),
(71, 3, 48, NULL, NULL, 'issued', '2018-04-06', 'issuance'),
(72, 3, 49, NULL, NULL, 'issued', '2018-04-06', 'issuance'),
(73, 7, 50, NULL, NULL, 'issued', '2018-04-06', 'issuance'),
(74, 3, 51, NULL, NULL, 'issued', '2018-04-06', 'issuance'),
(75, 3, 52, NULL, NULL, 'issued', '2018-04-06', 'issuance'),
(76, 4, NULL, 65, NULL, 'delivered', '2018-05-03', 'Delivery'),
(77, 4, NULL, 66, NULL, 'delivered', '2018-05-03', 'Delivery'),
(78, 4, NULL, 67, NULL, 'delivered', '2018-05-03', 'Delivery'),
(81, 3, NULL, NULL, 49, 'accepted return', '2018-04-06', 'returns'),
(82, 3, NULL, NULL, 50, 'accepted return', '2018-04-06', 'returns'),
(83, 7, NULL, NULL, 51, 'accepted return', '2018-04-06', 'returns'),
(84, 3, NULL, NULL, 52, 'accepted return', '2018-04-06', 'returns'),
(85, 3, NULL, NULL, 53, 'accepted return', '2018-04-06', 'returns'),
(86, 7, NULL, 68, NULL, 'delivered', '2018-05-02', 'Delivery'),
(87, 7, 53, NULL, NULL, 'issued', '2018-04-06', 'issuance'),
(88, 7, NULL, NULL, 54, 'accepted return', '2018-04-06', 'returns'),
(89, 7, NULL, 68, NULL, 'Delivery Deleted', '2018-04-06', 'Delivery'),
(90, 7, 53, NULL, NULL, 'Issuance Deleted', '2018-04-06', 'Issuance'),
(91, 6, NULL, 69, NULL, 'delivered', '2018-04-06', 'Delivery'),
(92, 7, NULL, NULL, 51, 'Returns Deleted', '2018-04-06', 'Returns');

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
(50, 61, NULL, 578, 400, 80),
(51, 62, NULL, 30, 20, 4),
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
(96, 108, NULL, 207, 3, 0),
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
(136, 148, NULL, 34, 34, 6),
(137, 149, NULL, 20, 20, 4),
(138, 150, NULL, 40, 38, 7),
(139, 151, NULL, 241, 11, 2),
(140, 152, NULL, 140, 140, 28),
(141, 153, NULL, 138, 60, 12),
(142, 154, NULL, 44, 4, 0),
(143, 155, NULL, 35, 35, 7),
(144, 156, NULL, 31, 6, 1),
(145, 157, NULL, 6, 6, 1),
(146, 158, NULL, 46, 46, 9),
(147, 159, NULL, -6, 15, 3),
(148, 160, NULL, 49, 50, 10),
(149, 161, NULL, -16, 20, 4),
(150, 162, NULL, 102, 102, 20),
(151, 163, NULL, 99, 49, 9),
(152, 164, NULL, 98, 102, 20);

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
) ENGINE=InnoDB AUTO_INCREMENT=54 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `issuance`
--

INSERT INTO `issuance` (`issuanceID`, `division`, `officeID`, `risNo`, `saiNo`, `issuanceDate`, `issuanceTime`, `type`, `accountID`) VALUES
(41, 'userzzzz', 61, '72367', '82643', '2018-04-06', '01:46:pm', 'Disposal', 7),
(42, 'tgg', 61, '5667', '3453', '2018-04-06', '01:47:pm', 'Office Supplies', 3),
(43, 'usern', 61, '987', '86', '2018-04-06', '02:04:pm', 'Office Supplies', 8),
(44, '4tre', 61, '3465', '5456', '2018-04-06', '02:04:pm', 'Office Supplies', 5),
(45, 'usernnn', 61, '87', '8787', '2018-04-06', '02:04:pm', 'Office Supplies', 8),
(46, 'usrf', 61, '45', '32', '2018-04-06', '02:07:pm', 'Office Supplies', 9),
(47, 'ewre', 61, '1244', '667', '2018-04-06', '02:08:pm', 'Office Supplies', 6),
(48, 'afdsdf', 55, '33454', '5677', '2018-04-06', '02:18:pm', 'Office Supplies', 3),
(49, 'dsfd', 25, '3442', '1230', '2018-04-06', '02:19:pm', 'Office Supplies', 3),
(50, 'userzzzzzz', 55, '34', '97', '2018-04-06', '02:19:pm', 'Office Supplies', 7),
(51, 'sdfg', 25, '9877', '6767', '2018-04-06', '02:20:pm', 'Office Supplies', 3),
(52, 'wefdsd', 28, '5464', '6760', '2018-04-06', '02:22:pm', 'Office Supplies', 3);

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
) ENGINE=InnoDB AUTO_INCREMENT=112 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `itemissuance`
--

INSERT INTO `itemissuance` (`itemIssuanceID`, `issuanceID`, `itemID`, `quantityRequested`, `quantityIssued`, `remarks`) VALUES
(58, 41, 75, 3, 3, 'good'),
(59, 42, 64, 2, 2, 'df'),
(60, 42, 79, 3, 2, 'done'),
(61, 42, 119, 5, 3, 'done'),
(62, 42, 160, 2, 1, 'done'),
(63, 42, 111, 1, 1, 'done'),
(64, 42, 61, 7, 7, 'done'),
(65, 43, 77, 2, 2, 'good'),
(66, 43, 133, 2, 8, 'good'),
(67, 44, 61, 5, 4, 'done'),
(68, 44, 69, 4, 3, 'done'),
(69, 44, 79, 5, 4, 'done'),
(70, 44, 123, 4, 3, 'done'),
(71, 44, 104, 1, 1, 'done'),
(72, 45, 89, 4, 4, 'good'),
(73, 45, 61, 3, 2, 'good'),
(74, 46, 123, 3, 3, 'good'),
(75, 47, 61, 4, 3, 'done'),
(76, 47, 79, 4, 4, 'done'),
(77, 47, 77, 3, 3, 'done'),
(78, 47, 89, 3, 3, 'done'),
(79, 47, 145, 2, 1, 'sdd'),
(80, 47, 95, 2, 2, 'fdg'),
(81, 48, 61, 4, 4, 'done'),
(82, 48, 129, 4, 2, 'done'),
(83, 48, 89, 4, 2, 'done'),
(84, 48, 145, 4, 1, 'done'),
(85, 48, 95, 6, 5, 'done'),
(86, 48, 76, 5, 5, 'done'),
(87, 49, 62, 7, 7, 'done'),
(88, 49, 66, 8, 4, 'done'),
(89, 49, 79, 6, 3, 'done'),
(90, 49, 88, 6, 4, 'done'),
(91, 49, 89, 8, 5, 'done'),
(92, 49, 131, 3, 1, 'done'),
(93, 49, 145, 9, 7, 'done'),
(94, 49, 164, 6, 4, 'done'),
(95, 49, 95, 5, 5, 'done'),
(96, 49, 106, 1, 1, 'done'),
(97, 50, 131, 4, 2, 'good'),
(98, 50, 129, 2, 3, 'good'),
(99, 50, 61, 1, 2, 'good'),
(100, 51, 61, 79, 77, 'done'),
(101, 51, 118, 7, 7, 'done'),
(102, 51, 89, 5, 5, 'done'),
(103, 51, 76, 54, 53, 'done'),
(104, 51, 161, 33, 31, 'done'),
(105, 51, 99, 2, 1, 'done'),
(106, 52, 67, 43, 41, 'done'),
(107, 52, 84, 3, 2, 'done'),
(108, 52, 133, 22, 21, 'done'),
(109, 52, 159, 23, 21, 'done'),
(110, 52, 120, 4, 2, 'done');

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
) ENGINE=MyISAM AUTO_INCREMENT=345 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `itemrecords`
--

INSERT INTO `itemrecords` (`itemrecordsID`, `itemID`, `inventoryID`, `recordDate`, `risNo`, `iarNo`, `startingQuantity`, `deliveryQuantity`, `returnsQuantity`, `issuanceQuantity`, `currentQuantity`, `status`) VALUES
(246, 110, 98, '2018-04-26', NULL, 34, 200, 4, NULL, NULL, 204, 'increased'),
(247, 62, 51, '2018-04-06', NULL, 345, 20, 5, NULL, NULL, 25, 'increased'),
(248, 98, 87, '2018-04-06', NULL, 345, 67, 5, NULL, NULL, 72, 'increased'),
(249, 126, 114, '2018-04-06', NULL, 345, 300, 4, NULL, NULL, 304, 'increased'),
(250, 95, 84, '2018-04-28', NULL, 22, 102, 4, NULL, NULL, 106, 'increased'),
(251, 79, 68, '2018-04-28', NULL, 22, 20, 8, NULL, NULL, 28, 'increased'),
(252, 75, 64, '2018-04-06', 72367, NULL, 50, NULL, NULL, 3, 47, 'decreased'),
(253, 64, 53, '2018-04-06', 5667, NULL, 400, NULL, NULL, 2, 398, 'decreased'),
(254, 79, 68, '2018-04-06', 5667, NULL, 28, NULL, NULL, 2, 26, 'decreased'),
(255, 119, 107, '2018-04-06', 5667, NULL, 65, NULL, NULL, 3, 62, 'decreased'),
(256, 160, 148, '2018-04-06', 5667, NULL, 50, NULL, NULL, 1, 49, 'decreased'),
(257, 111, 99, '2018-04-06', 5667, NULL, 20, NULL, NULL, 1, 19, 'decreased'),
(258, 61, 50, '2018-04-06', 5667, NULL, 667, NULL, NULL, 7, 660, 'decreased'),
(259, 89, 78, '2018-04-06', NULL, NULL, 38, NULL, 4, NULL, 42, 'increased'),
(260, 145, 133, '2018-04-06', NULL, NULL, 30, NULL, 4, NULL, 34, 'increased'),
(261, 79, 68, '2018-04-06', NULL, NULL, 26, NULL, 4, NULL, 22, 'decreased'),
(262, 145, 133, '2018-04-06', NULL, NULL, 34, NULL, 4, NULL, 30, 'decreased'),
(263, 119, 107, '2018-04-06', NULL, NULL, 62, NULL, 5, NULL, 67, 'increased'),
(264, 117, 105, '2018-04-27', NULL, 6, 150, 4, NULL, NULL, 154, 'increased'),
(265, 92, 81, '2018-04-27', NULL, 6, 6, 2, NULL, NULL, 8, 'increased'),
(266, 62, 51, '2018-04-06', NULL, 23, 25, 7, NULL, NULL, 32, 'increased'),
(267, 79, 68, '2018-04-06', NULL, 23, 22, 2, NULL, NULL, 24, 'increased'),
(268, 84, 73, '2018-04-06', NULL, 23, 2, 2, NULL, NULL, 4, 'increased'),
(269, 77, 66, '2018-04-06', 987, NULL, 65, NULL, NULL, 2, 63, 'decreased'),
(270, 133, 121, '2018-04-06', 987, NULL, 400, NULL, NULL, 8, 392, 'decreased'),
(271, 61, 50, '2018-04-06', 3465, NULL, 660, NULL, NULL, 4, 656, 'decreased'),
(272, 69, 58, '2018-04-06', 3465, NULL, 440, NULL, NULL, 3, 437, 'decreased'),
(273, 79, 68, '2018-04-06', 3465, NULL, 24, NULL, NULL, 4, 20, 'decreased'),
(274, 123, 111, '2018-04-06', 3465, NULL, 30, NULL, NULL, 3, 27, 'decreased'),
(275, 104, 92, '2018-04-06', 3465, NULL, 798, NULL, NULL, 1, 797, 'decreased'),
(276, 89, 78, '2018-04-06', 87, NULL, 42, NULL, NULL, 4, 38, 'decreased'),
(277, 61, 50, '2018-04-06', 87, NULL, 656, NULL, NULL, 2, 654, 'decreased'),
(278, 70, 59, '2018-04-06', NULL, NULL, 75, NULL, 3, NULL, 78, 'increased'),
(279, 89, 78, '2018-04-06', NULL, NULL, 38, NULL, 4, NULL, 42, 'increased'),
(280, 132, 120, '2018-04-27', NULL, 6, 250, 7, NULL, NULL, 257, 'increased'),
(281, 123, 111, '2018-04-06', 45, NULL, 27, NULL, NULL, 3, 24, 'decreased'),
(282, 61, 50, '2018-04-06', NULL, 346, 654, 5, NULL, NULL, 659, 'increased'),
(283, 66, 55, '2018-04-06', NULL, 346, 600, 4, NULL, NULL, 604, 'increased'),
(284, 78, 67, '2018-04-06', NULL, 346, 300, 3, NULL, NULL, 303, 'increased'),
(285, 77, 66, '2018-04-06', NULL, 346, 63, 2, NULL, NULL, 65, 'increased'),
(286, 78, 67, '2018-04-06', NULL, 346, 303, 1, NULL, NULL, 304, 'increased'),
(287, 79, 68, '2018-04-06', NULL, 346, 20, 4, NULL, NULL, 24, 'increased'),
(288, 108, 96, '2018-04-06', NULL, 346, 203, 4, NULL, NULL, 207, 'increased'),
(289, 95, 84, '2018-04-06', NULL, 346, 106, 4, NULL, NULL, 110, 'increased'),
(290, 89, 78, '2018-04-06', NULL, 346, 42, 4, NULL, NULL, 46, 'increased'),
(291, 145, 133, '2018-04-06', NULL, 346, 30, 4, NULL, NULL, 34, 'increased'),
(292, 61, 50, '2018-04-06', 1244, NULL, 659, NULL, NULL, 3, 656, 'decreased'),
(293, 79, 68, '2018-04-06', 1244, NULL, 24, NULL, NULL, 4, 20, 'decreased'),
(294, 77, 66, '2018-04-06', 1244, NULL, 65, NULL, NULL, 3, 62, 'decreased'),
(295, 89, 78, '2018-04-06', 1244, NULL, 46, NULL, NULL, 3, 43, 'decreased'),
(296, 145, 133, '2018-04-06', 1244, NULL, 34, NULL, NULL, 1, 33, 'decreased'),
(297, 95, 84, '2018-04-06', 1244, NULL, 110, NULL, NULL, 2, 108, 'decreased'),
(298, 61, 50, '2018-04-06', NULL, NULL, 656, NULL, 4, NULL, 660, 'increased'),
(299, 61, 50, '2018-04-06', 33454, NULL, 660, NULL, NULL, 4, 656, 'decreased'),
(300, 129, 117, '2018-04-06', 33454, NULL, 2, NULL, NULL, 2, 0, 'decreased'),
(301, 89, 78, '2018-04-06', 33454, NULL, 43, NULL, NULL, 2, 41, 'decreased'),
(302, 145, 133, '2018-04-06', 33454, NULL, 33, NULL, NULL, 1, 32, 'decreased'),
(303, 95, 84, '2018-04-06', 33454, NULL, 108, NULL, NULL, 5, 103, 'decreased'),
(304, 76, 65, '2018-04-06', 33454, NULL, 52, NULL, NULL, 5, 47, 'decreased'),
(305, 62, 51, '2018-04-06', 3442, NULL, 32, NULL, NULL, 7, 25, 'decreased'),
(306, 66, 55, '2018-04-06', 3442, NULL, 604, NULL, NULL, 4, 600, 'decreased'),
(307, 79, 68, '2018-04-06', 3442, NULL, 20, NULL, NULL, 3, 17, 'decreased'),
(308, 88, 77, '2018-04-06', 3442, NULL, 20, NULL, NULL, 4, 16, 'decreased'),
(309, 89, 78, '2018-04-06', 3442, NULL, 41, NULL, NULL, 5, 36, 'decreased'),
(310, 131, 119, '2018-04-06', 3442, NULL, 120, NULL, NULL, 1, 119, 'decreased'),
(311, 145, 133, '2018-04-06', 3442, NULL, 32, NULL, NULL, 7, 25, 'decreased'),
(312, 164, 152, '2018-04-06', 3442, NULL, 102, NULL, NULL, 4, 98, 'decreased'),
(313, 95, 84, '2018-04-06', 3442, NULL, 103, NULL, NULL, 5, 98, 'decreased'),
(314, 106, 94, '2018-04-06', 3442, NULL, 21, NULL, NULL, 1, 20, 'decreased'),
(315, 131, 119, '2018-04-06', 34, NULL, 119, NULL, NULL, 2, 117, 'decreased'),
(316, 129, 117, '2018-04-06', 34, NULL, 0, NULL, NULL, 3, -3, 'decreased'),
(317, 61, 50, '2018-04-06', 34, NULL, 656, NULL, NULL, 2, 654, 'decreased'),
(318, 61, 50, '2018-04-06', 9877, NULL, 654, NULL, NULL, 77, 577, 'decreased'),
(319, 118, 106, '2018-04-06', 9877, NULL, 95, NULL, NULL, 7, 88, 'decreased'),
(320, 89, 78, '2018-04-06', 9877, NULL, 36, NULL, NULL, 5, 31, 'decreased'),
(321, 76, 65, '2018-04-06', 9877, NULL, 47, NULL, NULL, 53, -6, 'decreased'),
(322, 161, 149, '2018-04-06', 9877, NULL, 15, NULL, NULL, 31, -16, 'decreased'),
(323, 99, 88, '2018-04-06', 9877, NULL, 10, NULL, NULL, 1, 9, 'decreased'),
(324, 67, 56, '2018-04-06', 5464, NULL, 50, NULL, NULL, 41, 9, 'decreased'),
(325, 84, 73, '2018-04-06', 5464, NULL, 4, NULL, NULL, 2, 2, 'decreased'),
(326, 133, 121, '2018-04-06', 5464, NULL, 392, NULL, NULL, 21, 371, 'decreased'),
(327, 159, 147, '2018-04-06', 5464, NULL, 15, NULL, NULL, 21, -6, 'decreased'),
(328, 120, 108, '2018-04-06', 5464, NULL, 70, NULL, NULL, 2, 68, 'decreased'),
(329, 66, 55, '2018-05-03', NULL, 8765, 600, 40, NULL, NULL, 640, 'increased'),
(330, 130, 118, '2018-05-03', NULL, 8765, 100, 30, NULL, NULL, 130, 'increased'),
(331, 163, 151, '2018-05-03', NULL, 8765, 49, 50, NULL, NULL, 99, 'increased'),
(332, 62, 51, '2018-04-06', NULL, NULL, 25, NULL, 5, NULL, 30, 'increased'),
(333, 71, 60, '2018-04-06', NULL, NULL, 5, NULL, 40, NULL, 45, 'increased'),
(334, 104, 92, '2018-04-06', NULL, NULL, 797, NULL, 20, NULL, 817, 'increased'),
(335, 119, 107, '2018-04-06', NULL, NULL, 67, NULL, 1, NULL, 68, 'increased'),
(336, 67, 56, '2018-04-06', NULL, NULL, 9, NULL, 3, NULL, 12, 'increased'),
(337, 150, 138, '2018-04-06', NULL, NULL, 38, NULL, 2, NULL, 40, 'increased'),
(338, 141, 129, '2018-05-02', NULL, 8, 150, 7, NULL, NULL, 157, 'increased'),
(339, 143, 131, '2018-04-06', 34, NULL, 80, NULL, NULL, 6, 74, 'decreased'),
(340, 133, 121, '2018-04-06', NULL, NULL, 371, NULL, 6, NULL, 377, 'increased'),
(341, 141, 129, '2018-04-06', NULL, NULL, 157, 7, NULL, NULL, 150, 'decreased'),
(342, 143, 131, '2018-04-06', NULL, NULL, 74, NULL, NULL, 6, 80, 'increased'),
(343, 61, 50, '2018-04-06', NULL, 56, 577, 1, NULL, NULL, 578, 'increased'),
(344, 67, 56, '2018-04-06', NULL, NULL, 12, NULL, 3, NULL, 9, 'decreased');

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
(61, 4, '0013-BLACK', 1, '1004', 'Ballpen,ordinary,BLACK', 2, 90, 'Pilot', NULL, NULL),
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
(79, 5, '0145', 2, '2001', 'Ink cartridge,Canon CL-41', 2, 1282, 'Canon', '2018-04-08', NULL),
(80, 5, '0146', 2, '2002', 'Ink cartridge,Canon CL-811', 10, 1133, 'Canon', '2019-10-09', NULL),
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
(145, 4, '0001', 4, '4001', 'Album,DVD/CD case,folder', 2, 1500, 'Kodak', NULL, NULL),
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
) ENGINE=InnoDB AUTO_INCREMENT=46 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `ppmp`
--

INSERT INTO `ppmp` (`ppmpID`, `officeID`, `ppmpDate`) VALUES
(40, 61, '2018-04-06'),
(41, 55, '2018-04-06'),
(42, 25, '2018-04-06'),
(43, 28, '2018-04-06'),
(44, 3, '2018-04-06'),
(45, 43, '2018-04-06');

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
) ENGINE=MyISAM AUTO_INCREMENT=87 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `ppmpitems`
--

INSERT INTO `ppmpitems` (`ppmpitemsID`, `itemID`, `itemQuantity`, `ppmpID`, `unitCost`) VALUES
(60, 61, 90, 40, 100),
(61, 119, 7, 41, 200),
(62, 161, 9, 41, 350),
(63, 68, 3, 41, 150),
(64, 61, 54, 42, 5),
(65, 79, 4, 42, 121),
(66, 89, 65, 42, 51),
(67, 145, 79, 42, 12),
(68, 95, 5, 42, 1234),
(69, 104, 43, 42, 2),
(70, 129, 7, 42, 132),
(71, 89, 54, 42, 49),
(72, 91, 21, 43, 100),
(73, 95, 5, 43, 1000),
(74, 61, 34, 44, 5),
(75, 78, 31, 44, 21),
(76, 75, 56, 44, 23),
(77, 69, 31, 44, 43),
(78, 129, 80, 44, 100),
(79, 123, 57, 44, 108),
(80, 130, 34, 44, 45),
(81, 164, 56, 44, 12),
(82, 84, 2, 45, 133),
(83, 70, 4, 45, 14),
(84, 116, 23, 45, 122),
(85, 163, 45, 45, 434),
(86, 125, 345, 45, 30);

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
) ENGINE=InnoDB AUTO_INCREMENT=55 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `returns`
--

INSERT INTO `returns` (`returnID`, `itemID`, `officeID`, `itemQuantity`, `reason`, `status`, `accountID`, `returnDate`) VALUES
(49, 119, 58, 1, 'damaged', 'usable', 3, '2018-04-06'),
(50, 102, 61, 2, 'expired', 'disposable', 3, '2018-04-06'),
(52, 150, 61, 2, 'damaged', 'usable', 3, '2018-04-06'),
(53, 120, 61, 1, 'damaged', 'disposable', 3, '2018-04-06'),
(54, 133, 49, 6, 'excess item', 'usable', 7, '2018-04-06');

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
