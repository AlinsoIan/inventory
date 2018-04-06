-- phpMyAdmin SQL Dump
-- version 4.7.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Generation Time: Apr 06, 2018 at 04:46 PM
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
(65, 76, NULL, 600, 62, 12),
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
(117, 129, NULL, 300, 2, 0),
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
(147, 159, NULL, 600, 15, 3),
(148, 160, NULL, 49, 50, 10),
(149, 161, NULL, 200, 20, 4),
(150, 162, NULL, 102, 102, 20),
(151, 163, NULL, 99, 49, 9),
(152, 164, NULL, 98, 102, 20);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
