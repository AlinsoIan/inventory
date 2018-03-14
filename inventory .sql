-- phpMyAdmin SQL Dump
-- version 4.7.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Generation Time: Mar 14, 2018 at 10:46 AM
-- Server version: 5.7.19
-- PHP Version: 5.6.31

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
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=16 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `accounts`
--

INSERT INTO `accounts` (`id`, `firstName`, `lastName`, `username`, `password`, `userType`, `loginTime`, `logoutTime`, `loginDate`) VALUES
(1, 'admin', 'admin', 'admin', 'admin', 'admin', '06:41:pm', '06:41:pm', '2018-03-14'),
(9, 'Swira', 'Cogasi', 'swi', 'swi', 'user', '12:09:pm', '12:09:pm', '2018-03-14'),
(12, 'Nichole', 'Gueco', 'Nics', '12345', 'user', '11:55:am', NULL, '2018-03-14'),
(13, 'ZSARLENE', 'GARCIA', 'zia', 'ziazia', 'user', '11:51:am', NULL, '2018-03-14'),
(15, 'FATIMA MAE', 'PASCUA', 'famae', 'famae', 'user', NULL, NULL, NULL);

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
  `status` varchar(45) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `itemissuance`
--

DROP TABLE IF EXISTS `itemissuance`;
CREATE TABLE IF NOT EXISTS `itemissuance` (
  `id` int(45) NOT NULL AUTO_INCREMENT,
  `category` int(4) NOT NULL,
  `acctSN` varchar(45) DEFAULT NULL,
  `pgsoSn` varchar(45) DEFAULT NULL,
  `description` varchar(150) NOT NULL,
  `unit` varchar(20) NOT NULL,
  `quantityRequested` int(5) NOT NULL,
  `quantityIssued` int(5) NOT NULL,
  `remarks` varchar(150) NOT NULL,
  `issue_id` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `items`
--

DROP TABLE IF EXISTS `items`;
CREATE TABLE IF NOT EXISTS `items` (
  `id` int(5) NOT NULL AUTO_INCREMENT,
  `category` int(4) NOT NULL,
  `acctSn` varchar(20) NOT NULL,
  `pgsoSn` int(4) NOT NULL,
  `description` varchar(50) NOT NULL,
  `unit` varchar(15) NOT NULL,
  `startingQuantity` int(5) NOT NULL,
  `unitCost` int(5) NOT NULL,
  `brand` varchar(15) NOT NULL,
  `orderPoint` int(5) NOT NULL,
  `expirationDate` date DEFAULT NULL,
  `supplier_id` int(11) NOT NULL,
  `physicalCount` int(10) DEFAULT NULL,
  `remarks` varchar(150) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=41 DEFAULT CHARSET=latin1;

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
-- Table structure for table `suppliers`
--

DROP TABLE IF EXISTS `suppliers`;
CREATE TABLE IF NOT EXISTS `suppliers` (
  `id` int(45) NOT NULL AUTO_INCREMENT,
  `supplierName` varchar(100) NOT NULL,
  `tinNumber` varchar(45) NOT NULL,
  `poNumber` varchar(45) NOT NULL,
  `poDate` date NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=9 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `suppliers`
--

INSERT INTO `suppliers` (`id`, `supplierName`, `tinNumber`, `poNumber`, `poDate`) VALUES
(7, 'SM', '34256728', '3297482364', '2018-03-05'),
(8, 'TSB', '9876543', '987654', '2018-03-14');

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
