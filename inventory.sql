-- phpMyAdmin SQL Dump
-- version 4.7.4
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: Mar 21, 2018 at 10:30 PM
-- Server version: 10.1.28-MariaDB
-- PHP Version: 7.1.11

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
CREATE TABLE `accounts` (
  `id` int(10) NOT NULL,
  `firstName` varchar(45) NOT NULL,
  `lastName` varchar(45) NOT NULL,
  `username` varchar(45) NOT NULL,
  `password` varchar(45) NOT NULL,
  `userType` enum('admin','user') NOT NULL,
  `loginTime` varchar(45) DEFAULT NULL,
  `logoutTime` varchar(45) DEFAULT NULL,
  `loginDate` date DEFAULT NULL,
  `status` varchar(45) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `accounts`
--

INSERT INTO `accounts` (`id`, `firstName`, `lastName`, `username`, `password`, `userType`, `loginTime`, `logoutTime`, `loginDate`, `status`) VALUES
(1, 'admin', 'admin', 'admin', 'admin', 'admin', '06:20:pm', '09:42:pm', '2018-03-21', 'active'),
(24, 'Swira', 'Cogasi', 'swi', 'swii', 'user', '09:43:pm', NULL, '2018-03-21', 'inactive'),
(25, 'Swira', 'Cogasi', 'swi', 'swi', 'user', '09:43:pm', NULL, '2018-03-21', 'active');

-- --------------------------------------------------------

--
-- Table structure for table `accountslogs`
--

DROP TABLE IF EXISTS `accountslogs`;
CREATE TABLE `accountslogs` (
  `id` int(45) NOT NULL,
  `logs` varchar(255) NOT NULL,
  `dateT` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `history`
--

DROP TABLE IF EXISTS `history`;
CREATE TABLE `history` (
  `id` int(45) NOT NULL,
  `timeT` date NOT NULL,
  `activity` varchar(100) NOT NULL,
  `dateT` date NOT NULL,
  `account_id` int(2) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `iar`
--

DROP TABLE IF EXISTS `iar`;
CREATE TABLE `iar` (
  `id` int(45) NOT NULL,
  `supplier_id` int(45) NOT NULL,
  `iarno` int(45) NOT NULL,
  `iarDate` date NOT NULL,
  `amount` varchar(20) NOT NULL,
  `totalQuantity` int(45) NOT NULL,
  `totalItems` int(45) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `issuance`
--

DROP TABLE IF EXISTS `issuance`;
CREATE TABLE `issuance` (
  `id` int(45) NOT NULL,
  `division` varchar(45) NOT NULL,
  `office` varchar(45) NOT NULL,
  `responsibility` varchar(11) NOT NULL,
  `fpp` varchar(11) NOT NULL,
  `ris` varchar(25) NOT NULL,
  `sai` varchar(25) NOT NULL,
  `dateT` date NOT NULL,
  `timeT` varchar(45) NOT NULL,
  `typeT` varchar(20) NOT NULL,
  `issuer` int(45) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `issuanceslogs`
--

DROP TABLE IF EXISTS `issuanceslogs`;
CREATE TABLE `issuanceslogs` (
  `id` int(255) NOT NULL,
  `issuances` varchar(255) NOT NULL,
  `issuancesDate` date NOT NULL,
  `issue_id` int(10) NOT NULL,
  `issuer` varchar(45) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `itemissuance`
--

DROP TABLE IF EXISTS `itemissuance`;
CREATE TABLE `itemissuance` (
  `id` int(45) NOT NULL,
  `category` int(4) NOT NULL,
  `description` varchar(150) NOT NULL,
  `unit` varchar(20) NOT NULL,
  `quantityRequested` int(5) NOT NULL,
  `quantityIssued` int(5) NOT NULL,
  `remarks` varchar(150) NOT NULL,
  `issue_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `items`
--

DROP TABLE IF EXISTS `items`;
CREATE TABLE `items` (
  `id` int(5) NOT NULL,
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
  `remarks` varchar(150) DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `offices`
--

DROP TABLE IF EXISTS `offices`;
CREATE TABLE `offices` (
  `id` int(45) NOT NULL,
  `office` varchar(100) NOT NULL,
  `abbr` varchar(45) NOT NULL,
  `fpp` varchar(45) NOT NULL,
  `responsibility` varchar(45) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

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
CREATE TABLE `physical_count` (
  `physical_id` int(10) NOT NULL,
  `physical_quantity` int(10) NOT NULL,
  `remarks` varchar(150) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `returns`
--

DROP TABLE IF EXISTS `returns`;
CREATE TABLE `returns` (
  `id` int(45) NOT NULL,
  `item_id` int(45) NOT NULL,
  `reason` varchar(150) NOT NULL,
  `quantity` int(45) NOT NULL,
  `status` varchar(45) NOT NULL,
  `office_id` int(45) NOT NULL,
  `unit` varchar(45) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `ris`
--

DROP TABLE IF EXISTS `ris`;
CREATE TABLE `ris` (
  `id` int(255) NOT NULL,
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
  `remarks` varchar(255) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `suppliers`
--

DROP TABLE IF EXISTS `suppliers`;
CREATE TABLE `suppliers` (
  `id` int(45) NOT NULL,
  `supplierName` varchar(100) NOT NULL,
  `tinNumber` varchar(45) NOT NULL,
  `poNumber` varchar(45) NOT NULL,
  `poDate` date NOT NULL,
  `item_id` int(45) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `units`
--

DROP TABLE IF EXISTS `units`;
CREATE TABLE `units` (
  `id` int(255) NOT NULL,
  `units` varchar(255) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

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

--
-- Indexes for dumped tables
--

--
-- Indexes for table `accounts`
--
ALTER TABLE `accounts`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `accountslogs`
--
ALTER TABLE `accountslogs`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `history`
--
ALTER TABLE `history`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `iar`
--
ALTER TABLE `iar`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `issuance`
--
ALTER TABLE `issuance`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `issuanceslogs`
--
ALTER TABLE `issuanceslogs`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `itemissuance`
--
ALTER TABLE `itemissuance`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `items`
--
ALTER TABLE `items`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `offices`
--
ALTER TABLE `offices`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `OfficeName_UNIQUE` (`office`);

--
-- Indexes for table `physical_count`
--
ALTER TABLE `physical_count`
  ADD PRIMARY KEY (`physical_id`);

--
-- Indexes for table `returns`
--
ALTER TABLE `returns`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `ris`
--
ALTER TABLE `ris`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `suppliers`
--
ALTER TABLE `suppliers`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `units`
--
ALTER TABLE `units`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `accounts`
--
ALTER TABLE `accounts`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=26;

--
-- AUTO_INCREMENT for table `accountslogs`
--
ALTER TABLE `accountslogs`
  MODIFY `id` int(45) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `history`
--
ALTER TABLE `history`
  MODIFY `id` int(45) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `iar`
--
ALTER TABLE `iar`
  MODIFY `id` int(45) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `issuance`
--
ALTER TABLE `issuance`
  MODIFY `id` int(45) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `issuanceslogs`
--
ALTER TABLE `issuanceslogs`
  MODIFY `id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=89;

--
-- AUTO_INCREMENT for table `itemissuance`
--
ALTER TABLE `itemissuance`
  MODIFY `id` int(45) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=96;

--
-- AUTO_INCREMENT for table `items`
--
ALTER TABLE `items`
  MODIFY `id` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=74;

--
-- AUTO_INCREMENT for table `offices`
--
ALTER TABLE `offices`
  MODIFY `id` int(45) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=63;

--
-- AUTO_INCREMENT for table `physical_count`
--
ALTER TABLE `physical_count`
  MODIFY `physical_id` int(10) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `returns`
--
ALTER TABLE `returns`
  MODIFY `id` int(45) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `ris`
--
ALTER TABLE `ris`
  MODIFY `id` int(255) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `suppliers`
--
ALTER TABLE `suppliers`
  MODIFY `id` int(45) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT for table `units`
--
ALTER TABLE `units`
  MODIFY `id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
