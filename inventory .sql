-- phpMyAdmin SQL Dump
-- version 4.7.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Generation Time: Mar 25, 2018 at 01:42 AM
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
-- Table structure for table `accounts`
--

DROP TABLE IF EXISTS `accounts`;
CREATE TABLE IF NOT EXISTS `accounts` (
  `id` int(10) NOT NULL AUTO_INCREMENT,
  `firstName` varchar(45) NOT NULL,
  `lastName` varchar(45) NOT NULL,
  `username` varchar(45) NOT NULL,
  `password` varchar(45) NOT NULL,
  `userType` enum('admin','user') NOT NULL,
  `loginTime` varchar(45) DEFAULT NULL,
  `logoutTime` varchar(45) DEFAULT NULL,
  `loginDate` date DEFAULT NULL,
  `status` varchar(45) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=27 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `accounts`
--

INSERT INTO `accounts` (`id`, `firstName`, `lastName`, `username`, `password`, `userType`, `loginTime`, `logoutTime`, `loginDate`, `status`) VALUES
(1, 'admin', 'admin', 'admin', 'admin', 'admin', '11:23:pm', '11:23:pm', '2018-03-24', 'active'),
(24, 'Swira', 'Cogasi', 'swi', 'swii', 'user', '11:23:pm', '11:23:pm', '2018-03-24', 'active'),
(25, 'Swira', 'Cogasi', 'swi', 'swi', 'user', '11:23:pm', '11:23:pm', '2018-03-24', 'inactive'),
(26, 'Zia', 'Garcia', 'zia', 'zia', 'user', NULL, NULL, NULL, 'inactive');

-- --------------------------------------------------------

--
-- Table structure for table `accountslogs`
--

DROP TABLE IF EXISTS `accountslogs`;
CREATE TABLE IF NOT EXISTS `accountslogs` (
  `id` int(45) NOT NULL AUTO_INCREMENT,
  `logs` varchar(255) NOT NULL,
  `dateT` date NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=16 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `accountslogs`
--

INSERT INTO `accountslogs` (`id`, `logs`, `dateT`) VALUES
(10, 'Admin has added account zia', '2018-03-21'),
(11, 'Admin has deleted account zia', '2018-03-22'),
(12, 'Admin has deleted account swi', '2018-03-24'),
(13, 'Admin has deleted account swi', '2018-03-24'),
(14, 'Admin has deleted account swi', '2018-03-24'),
(15, 'Admin has deleted account swi', '2018-03-24');

-- --------------------------------------------------------

--
-- Table structure for table `delivery`
--

DROP TABLE IF EXISTS `delivery`;
CREATE TABLE IF NOT EXISTS `delivery` (
  `id` int(45) NOT NULL AUTO_INCREMENT,
  `iarno` int(45) NOT NULL,
  `itemNo` int(45) NOT NULL,
  `supplier_id` int(10) NOT NULL,
  `quantity` int(10) NOT NULL,
  `dateT` date NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=12 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `delivery`
--

INSERT INTO `delivery` (`id`, `iarno`, `itemNo`, `supplier_id`, `quantity`, `dateT`) VALUES
(4, 1, 74, 12, 12, '2018-03-08'),
(5, 2, 75, 12, 13, '2018-03-16'),
(6, 1, 74, 12, 1, '2018-03-06'),
(7, 2, 75, 12, 2, '2018-03-20');

-- --------------------------------------------------------

--
-- Table structure for table `history`
--

DROP TABLE IF EXISTS `history`;
CREATE TABLE IF NOT EXISTS `history` (
  `id` int(45) NOT NULL AUTO_INCREMENT,
  `timeT` date NOT NULL,
  `activity` varchar(100) NOT NULL,
  `dateT` date NOT NULL,
  `account_id` int(2) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `iar`
--

DROP TABLE IF EXISTS `iar`;
CREATE TABLE IF NOT EXISTS `iar` (
  `id` int(45) NOT NULL AUTO_INCREMENT,
  `supplier_id` int(45) NOT NULL,
  `iarno` int(45) NOT NULL,
  `iarDate` date NOT NULL,
  `amount` varchar(20) NOT NULL,
  `totalQuantity` int(45) NOT NULL,
  `totalItems` int(45) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `issuance`
--

DROP TABLE IF EXISTS `issuance`;
CREATE TABLE IF NOT EXISTS `issuance` (
  `id` int(45) NOT NULL AUTO_INCREMENT,
  `division` varchar(45) NOT NULL,
  `office` varchar(45) NOT NULL,
  `responsibility` varchar(11) NOT NULL,
  `fpp` varchar(11) NOT NULL,
  `ris` varchar(25) NOT NULL,
  `sai` varchar(25) NOT NULL,
  `dateT` date NOT NULL,
  `timeT` varchar(45) NOT NULL,
  `typeT` varchar(20) NOT NULL,
  `issuer` int(45) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=23 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `issuance`
--

INSERT INTO `issuance` (`id`, `division`, `office`, `responsibility`, `fpp`, `ris`, `sai`, `dateT`, `timeT`, `typeT`, `issuer`) VALUES
(21, 'asd', 'Aids to Boy Scout & Girl Scout, Red Cross', 'asd', 'asd', 'asd', 'asd', '2018-03-24', '12:23:am', 'Office Supplies', 1),
(22, 'asdasd', 'Dennis Molintas District Hospital', 'asd', 'asd', 'asd', 'asd', '2018-03-24', '12:25:am', 'Office Supplies', 1);

-- --------------------------------------------------------

--
-- Table structure for table `issuanceslogs`
--

DROP TABLE IF EXISTS `issuanceslogs`;
CREATE TABLE IF NOT EXISTS `issuanceslogs` (
  `id` int(255) NOT NULL AUTO_INCREMENT,
  `issuances` varchar(255) NOT NULL,
  `issuancesDate` date NOT NULL,
  `issue_id` int(10) NOT NULL,
  `issuer` varchar(45) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=92 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `issuanceslogs`
--

INSERT INTO `issuanceslogs` (`id`, `issuances`, `issuancesDate`, `issue_id`, `issuer`) VALUES
(89, 'Has Issued to Aids to Boy Scout & Girl Scout, Red Cross', '2018-03-21', 11, 'admin'),
(90, 'Has Issued to Assistance to Individual in Crisis Situation', '2018-03-22', 12, 'swi'),
(91, 'Has Issued to Dennis Molintas District Hospital', '2018-03-22', 14, 'admin');

-- --------------------------------------------------------

--
-- Table structure for table `itemissuance`
--

DROP TABLE IF EXISTS `itemissuance`;
CREATE TABLE IF NOT EXISTS `itemissuance` (
  `id` int(45) NOT NULL AUTO_INCREMENT,
  `itemNo` int(4) NOT NULL,
  `quantityRequested` int(5) NOT NULL,
  `quantityIssued` int(5) NOT NULL,
  `remarks` varchar(150) NOT NULL,
  `issue_id` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=111 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `itemissuance`
--

INSERT INTO `itemissuance` (`id`, `itemNo`, `quantityRequested`, `quantityIssued`, `remarks`, `issue_id`) VALUES
(108, 80, 123, 12, 'asd', 21),
(109, 79, 324, 23, 'asd', 21),
(110, 79, 900, 900, 'asdasd', 22);

-- --------------------------------------------------------

--
-- Table structure for table `items`
--

DROP TABLE IF EXISTS `items`;
CREATE TABLE IF NOT EXISTS `items` (
  `id` int(5) NOT NULL AUTO_INCREMENT,
  `category` int(4) DEFAULT NULL,
  `acctSn` varchar(20) DEFAULT NULL,
  `pgsoSn` varchar(20) DEFAULT NULL,
  `description` varchar(150) DEFAULT NULL,
  `unit` varchar(15) DEFAULT NULL,
  `startingQuantity` int(5) DEFAULT NULL,
  `unitCost` double DEFAULT NULL,
  `brand` varchar(15) DEFAULT NULL,
  `orderPoint` int(5) DEFAULT NULL,
  `expirationDate` date DEFAULT NULL,
  `supplier_id` int(11) DEFAULT NULL,
  `physicalCount` int(10) DEFAULT NULL,
  `remarks` varchar(150) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=81 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `items`
--

INSERT INTO `items` (`id`, `category`, `acctSn`, `pgsoSn`, `description`, `unit`, `startingQuantity`, `unitCost`, `brand`, `orderPoint`, `expirationDate`, `supplier_id`, `physicalCount`, `remarks`) VALUES
(80, 1, '200', '300', 'Eggs', 'ream', 68, 6, 'Y', 20, NULL, 19, NULL, NULL),
(79, 1, '100', '200', 'Milk', 'pack', 47, 20, 'X', 200, NULL, 15, NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `logs`
--

DROP TABLE IF EXISTS `logs`;
CREATE TABLE IF NOT EXISTS `logs` (
  `id` int(255) NOT NULL AUTO_INCREMENT,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `offices`
--

DROP TABLE IF EXISTS `offices`;
CREATE TABLE IF NOT EXISTS `offices` (
  `id` int(45) NOT NULL AUTO_INCREMENT,
  `office` varchar(100) NOT NULL,
  `abbr` varchar(45) NOT NULL,
  `fpp` varchar(45) NOT NULL,
  `responsibility` varchar(45) NOT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `OfficeName_UNIQUE` (`office`)
) ENGINE=MyISAM AUTO_INCREMENT=63 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `offices`
--

INSERT INTO `offices` (`id`, `office`, `abbr`, `fpp`, `responsibility`) VALUES
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
(45, 'All Office (Terminal leaves,monetization,BAC-infra,BAC-Goods,Prov\'l Emp. Med.Examination,etc.)', 'ALL-OFFICE', '1000.1.2', '04-00-14-02'),
(46, 'Non-Office', 'NON-OFFICE', '1000.1.3', '04-00-14-01'),
(47, 'Interspecial Accounting Transfer', 'NON-OFFICE', '1000.1.3', '04-00-14-01'),
(48, 'Aids to Boy Scout & Girl Scout, Red Cross', 'NON-OFFICE', '1000.1.3', '04-00-01-01'),
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
(60, 'Benguet General Hospital Economic Enterprise', 'BEGHEE', '3000-200.1', '04-00-13-00');

-- --------------------------------------------------------

--
-- Table structure for table `physical_count`
--

DROP TABLE IF EXISTS `physical_count`;
CREATE TABLE IF NOT EXISTS `physical_count` (
  `physical_id` int(10) NOT NULL AUTO_INCREMENT,
  `physical_quantity` int(10) NOT NULL,
  `remarks` varchar(150) NOT NULL,
  PRIMARY KEY (`physical_id`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `ppmp`
--

DROP TABLE IF EXISTS `ppmp`;
CREATE TABLE IF NOT EXISTS `ppmp` (
  `id` int(45) NOT NULL AUTO_INCREMENT,
  `office_id` int(10) NOT NULL,
  `itemNo` int(10) NOT NULL,
  `quantity` int(40) NOT NULL,
  `unitCost` int(45) NOT NULL,
  `amount` int(45) NOT NULL,
  `dateT` date NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=15 DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `returns`
--

DROP TABLE IF EXISTS `returns`;
CREATE TABLE IF NOT EXISTS `returns` (
  `id` int(45) NOT NULL AUTO_INCREMENT,
  `item_id` int(45) NOT NULL,
  `reason` varchar(150) NOT NULL,
  `quantity` int(45) NOT NULL,
  `status` varchar(45) NOT NULL,
  `office_id` int(45) NOT NULL,
  `unit` varchar(45) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `ris`
--

DROP TABLE IF EXISTS `ris`;
CREATE TABLE IF NOT EXISTS `ris` (
  `id` int(255) NOT NULL AUTO_INCREMENT,
  `office` varchar(150) NOT NULL,
  `responsibility` int(45) NOT NULL,
  `risNumber` int(5) NOT NULL,
  `dateT` date NOT NULL,
  `stockNumber` int(5) NOT NULL,
  `category` int(5) NOT NULL,
  `unit` varchar(20) NOT NULL,
  `item_id` int(45) NOT NULL,
  `quantityRequested` int(10) NOT NULL,
  `quantityIssued` int(10) NOT NULL,
  `remarks` varchar(255) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `suppliers`
--

DROP TABLE IF EXISTS `suppliers`;
CREATE TABLE IF NOT EXISTS `suppliers` (
  `id` int(45) NOT NULL AUTO_INCREMENT,
  `supplierName` varchar(100) NOT NULL,
  `tinNumber` varchar(45) NOT NULL,
  `number` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=20 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `suppliers`
--

INSERT INTO `suppliers` (`id`, `supplierName`, `tinNumber`, `number`) VALUES
(15, 'Tiongsan', '100', 11111),
(16, 'Pure Gold', '200', 22222),
(17, 'Save More', '3', 3333),
(18, '456', '400', 4444),
(19, 'Centermall', '500', 55555);

-- --------------------------------------------------------

--
-- Table structure for table `units`
--

DROP TABLE IF EXISTS `units`;
CREATE TABLE IF NOT EXISTS `units` (
  `id` int(255) NOT NULL AUTO_INCREMENT,
  `units` varchar(255) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=19 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `units`
--

INSERT INTO `units` (`id`, `units`) VALUES
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
