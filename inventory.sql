-- phpMyAdmin SQL Dump
-- version 4.7.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Generation Time: Apr 01, 2018 at 09:15 AM
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
) ENGINE=InnoDB AUTO_INCREMENT=38 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `accountlogs`
--

INSERT INTO `accountlogs` (`logID`, `accountID`, `loginTime`, `logoutTime`, `loginDate`) VALUES
(37, 1, '01:01:pm', NULL, '2018-04-01');

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
(1, 'Admin', 'Admin', 'admin', 'admin', 'admin', 'active'),
(2, 'Sakura', 'Uchiha', 'sakura', 'sakura', 'user', 'inactive'),
(3, 'Sasuke', 'Uchiha', 'sasuke', 'sasuke', 'user', 'inactive'),
(4, 'swi', 'swi', 'swi', 'swi', 'user', 'active');

-- --------------------------------------------------------

--
-- Table structure for table `asa`
--

DROP TABLE IF EXISTS `asa`;
CREATE TABLE IF NOT EXISTS `asa` (
  `id` int(45) NOT NULL AUTO_INCREMENT,
  `a` varchar(150) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=24 DEFAULT CHARSET=latin1;

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
) ENGINE=InnoDB AUTO_INCREMENT=23 DEFAULT CHARSET=latin1;

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
) ENGINE=InnoDB AUTO_INCREMENT=65 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `history`
--

INSERT INTO `history` (`historyID`, `accountID`, `issuanceID`, `deliveryID`, `returnID`, `activity`, `actDate`, `type`) VALUES
(64, 1, NULL, NULL, NULL, 'issued', '2018-04-01', 'issuance');

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
) ENGINE=InnoDB AUTO_INCREMENT=46 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `inventory`
--

INSERT INTO `inventory` (`inventoryID`, `itemID`, `physicalCount`, `currentQuantity`, `startingQuantity`, `reorderPoint`) VALUES
(45, 56, NULL, 990, 1000, 200);

-- --------------------------------------------------------

--
-- Table structure for table `issuance`
--

DROP TABLE IF EXISTS `issuance`;
CREATE TABLE IF NOT EXISTS `issuance` (
  `issuanceID` int(10) NOT NULL AUTO_INCREMENT,
  `division` varchar(150) NOT NULL,
  `officeID` int(10) NOT NULL,
  `risNo` varchar(45) NOT NULL,
  `saiNo` varchar(45) NOT NULL,
  `issuanceDate` date NOT NULL,
  `issuanceTime` varchar(45) NOT NULL,
  `type` varchar(45) NOT NULL,
  `accountID` int(10) NOT NULL,
  PRIMARY KEY (`issuanceID`)
) ENGINE=InnoDB AUTO_INCREMENT=19 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `issuance`
--

INSERT INTO `issuance` (`issuanceID`, `division`, `officeID`, `risNo`, `saiNo`, `issuanceDate`, `issuanceTime`, `type`, `accountID`) VALUES
(18, 'Admin', 37, '11', '22', '2018-04-01', '12:59:pm', 'Office Supplies', 1);

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
) ENGINE=InnoDB AUTO_INCREMENT=22 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `itemissuance`
--

INSERT INTO `itemissuance` (`itemIssuanceID`, `issuanceID`, `itemID`, `quantityRequested`, `quantityIssued`, `remarks`) VALUES
(21, 18, 56, 12, 10, '2 more');

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
  `ris` varchar(45) DEFAULT NULL,
  `startingQuantity` int(45) NOT NULL,
  `deliveryQuantity` int(15) DEFAULT NULL,
  `returnsQuantity` int(15) DEFAULT NULL,
  `issuanceQuantity` int(15) DEFAULT NULL,
  `currentQuantity` int(15) NOT NULL,
  `status` varchar(45) NOT NULL,
  PRIMARY KEY (`itemrecordsID`)
) ENGINE=MyISAM AUTO_INCREMENT=114 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `itemrecords`
--

INSERT INTO `itemrecords` (`itemrecordsID`, `itemID`, `inventoryID`, `recordDate`, `ris`, `startingQuantity`, `deliveryQuantity`, `returnsQuantity`, `issuanceQuantity`, `currentQuantity`, `status`) VALUES
(113, 56, 45, '2018-04-01', '11', 1000, NULL, NULL, 10, 990, 'decreased');

-- --------------------------------------------------------

--
-- Table structure for table `items`
--

DROP TABLE IF EXISTS `items`;
CREATE TABLE IF NOT EXISTS `items` (
  `itemID` int(10) NOT NULL AUTO_INCREMENT,
  `supplierID` int(10) NOT NULL,
  `acctSn` int(10) NOT NULL,
  `categoryNo` int(10) NOT NULL,
  `pgsoSn` int(10) NOT NULL,
  `description` varchar(150) NOT NULL,
  `unitID` int(10) NOT NULL,
  `unitCost` int(11) NOT NULL,
  `brand` varchar(20) NOT NULL,
  `expirationDate` date DEFAULT NULL,
  PRIMARY KEY (`itemID`)
) ENGINE=InnoDB AUTO_INCREMENT=57 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `items`
--

INSERT INTO `items` (`itemID`, `supplierID`, `acctSn`, `categoryNo`, `pgsoSn`, `description`, `unitID`, `unitCost`, `brand`, `expirationDate`) VALUES
(56, 1, 100, 1, 200, 'Alcohol', 1, 20, 'X', NULL);

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
) ENGINE=InnoDB AUTO_INCREMENT=26 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `ppmp`
--

INSERT INTO `ppmp` (`ppmpID`, `officeID`, `ppmpDate`) VALUES
(24, 37, '2018-03-31'),
(25, 43, '2018-03-31');

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
) ENGINE=MyISAM AUTO_INCREMENT=36 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `ppmpitems`
--

INSERT INTO `ppmpitems` (`ppmpitemsID`, `itemID`, `itemQuantity`, `ppmpID`, `unitCost`, `totalAmount`) VALUES
(35, 52, 200, 25, 100, 20),
(34, 52, 100, 24, 200, 100);

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
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `suppliers`
--

INSERT INTO `suppliers` (`supplierID`, `tinNo`, `supplierName`, `address`, `contactNo`) VALUES
(1, 1000, 'Tiongsan', '', '09090'),
(2, 4, '456', '4', '91823'),
(3, 76543, 'hi', '75trasgf', '9876');

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
