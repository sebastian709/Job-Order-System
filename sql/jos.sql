-- phpMyAdmin SQL Dump
-- version 4.9.0.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Sep 05, 2019 at 11:52 AM
-- Server version: 10.3.16-MariaDB
-- PHP Version: 7.1.30

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `jos`
--

-- --------------------------------------------------------

--
-- Table structure for table `account`
--

CREATE TABLE `account` (
  `ID` int(255) NOT NULL,
  `firstname` char(255) NOT NULL,
  `lastname` char(255) NOT NULL,
  `department` char(255) NOT NULL,
  `access_level` char(255) NOT NULL,
  `username` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `account`
--

INSERT INTO `account` (`ID`, `firstname`, `lastname`, `department`, `access_level`, `username`, `password`) VALUES
(2, 'Alejandro', 'admin', 'admin', 'admin', 'admin123', 'admin123'),
(3, 'engr', 'engr', 'engr', 'engineer', 'engr123', 'engr123'),
(4, 'head', 'head', 'CCS', 'head', 'head123', 'head123'),
(56, 'temporary', 'temporary', 'temporary', 'head', '17-1', ''),
(57, 'Jerome123', 'Jerome123', 'CCS', 'Head', 'Jerome123', 'Jerome123'),
(59, 'Jabson', 'Del pilar', 'hrm', 'head', 'bermudo24A', 'Qwerty24');

-- --------------------------------------------------------

--
-- Table structure for table `jos_description`
--

CREATE TABLE `jos_description` (
  `id` mediumint(255) NOT NULL,
  `need_one` char(255) NOT NULL,
  `o1` char(255) NOT NULL,
  `q1` varchar(255) NOT NULL,
  `n2` char(255) NOT NULL,
  `o2` char(255) NOT NULL,
  `q2` varchar(255) NOT NULL,
  `n3` char(255) NOT NULL,
  `o3` char(255) NOT NULL,
  `q3` varchar(255) NOT NULL,
  `n4` char(255) NOT NULL,
  `o4` char(255) NOT NULL,
  `q4` varchar(255) NOT NULL,
  `n5` char(255) NOT NULL,
  `o5` char(255) NOT NULL,
  `q5` varchar(255) NOT NULL,
  `name` char(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `jos_description`
--

INSERT INTO `jos_description` (`id`, `need_one`, `o1`, `q1`, `n2`, `o2`, `q2`, `n3`, `o3`, `q3`, `n4`, `o4`, `q4`, `n5`, `o5`, `q5`, `name`) VALUES
(1, 'Repair', 'Fluorescent', '3', 'Repair', 'Ceiling Fan', '2', 'Repair', 'Aircon', '1', 'replacement', 'chair', '5', 'produce', 'desk', '1', 'Acevergel Espino'),
(2, 'repair', 'fan', '5', 'repair', 'blackboard', '1', 'produce', 'chair', '5', 'replacement', 'arm chair', '3', '', '', '', 'Jerome Juico'),
(3, 'repair', 'chair', '2', 'produce', 'desk', '2', '', '', '', '', '', '', '', '', '', 'kath bermudo'),
(4, '', 'chair', '4', '', '', '', '', '', '', '', '', '', '', '', '', 'sebastian jabson'),
(5, 'PRODUCE', 'Lockers', '3', '', '', '', '', '', '', '', '', '', '', '', '', 'Sebastian Jabson'),
(6, 'REPAIR', 'Aircon', '2', '', '', '', '', '', '', '', '', '', '', '', '', 'Sebastian'),
(7, 'REPAIR', 'Fluorescent', '3', '', '', '', '', '', '', '', '', '', '', '', '', 'Sebastian'),
(8, 'PRODUCE', 'Chair', '5', '', '', '', '', '', '', '', '', '', '', '', '', 'Jerome Juico'),
(9, 'REPLACEMENT', 'florescent', '2', '', '', '', '', '', '', '', '', '', '', '', '', 'Nisokero'),
(10, 'REPAIR', 'chair', '5', '', '', '', '', '', '', '', '', '', '', '', '', 'jheju 123');

-- --------------------------------------------------------

--
-- Table structure for table `jos_record`
--

CREATE TABLE `jos_record` (
  `id` int(255) NOT NULL,
  `name` char(255) NOT NULL,
  `department` char(255) NOT NULL,
  `location` varchar(255) NOT NULL,
  `admin` char(255) NOT NULL,
  `engineer` char(255) NOT NULL,
  `head` char(255) NOT NULL,
  `petsa` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `jos_record`
--

INSERT INTO `jos_record` (`id`, `name`, `department`, `location`, `admin`, `engineer`, `head`, `petsa`) VALUES
(1, 'Acevergel Espino', 'CCS', 'maclab-sab', 'Approve', 'Finish', 'Certified', '04/09/2019'),
(2, 'Jerome Juico', 'CHIM', 'sab-202', 'Approve', 'Finish', 'pending', 'pending'),
(3, 'kath bermudo', 'COE', 'sfb-401', 'Approve', 'pending', 'pending', 'pending'),
(4, 'sebastian jabson', 'CCS', 'sfb-401', 'Approve', 'Finish', 'Certified', '04/09/2019'),
(5, 'Sebastian Jabson', 'CCS', 'SFB-101', 'Approve', 'Finish', 'Certified', '2019-09-04'),
(6, 'Sebastian', 'CCS', 'sjp-109', 'Approve', 'pending', 'pending', 'pending'),
(7, 'Sebastian', 'CSS', 'SFB-201', 'pending', 'pending', 'pending', 'pending'),
(8, 'Jerome Juico', 'CCS', 'sfb-109', 'Approve', 'Finish', 'Certified', '2019-09-05'),
(9, 'Nisokero', 'hrm', 'Brfsdsds', 'Approve', 'Finish', 'Certified', '2019-09-05'),
(10, 'jheju 123', 'ccs', 'sjh204', 'pending', 'pending', 'pending', 'pending');

-- --------------------------------------------------------

--
-- Table structure for table `materials_description`
--

CREATE TABLE `materials_description` (
  `id` int(255) NOT NULL,
  `name` char(255) NOT NULL,
  `m1` char(255) NOT NULL,
  `q1` varchar(255) NOT NULL,
  `m2` char(255) NOT NULL,
  `q2` varchar(255) NOT NULL,
  `m3` char(255) NOT NULL,
  `q3` varchar(255) NOT NULL,
  `m4` char(255) NOT NULL,
  `q4` varchar(255) NOT NULL,
  `m5` char(255) NOT NULL,
  `q5` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `materials_description`
--

INSERT INTO `materials_description` (`id`, `name`, `m1`, `q1`, `m2`, `q2`, `m3`, `q3`, `m4`, `q4`, `m5`, `q5`) VALUES
(1, 'alejandro bermudo', 'fluorescent', '5', 'switch', '5', 'wood', '70', '', '', '', ''),
(2, 'gian concepcion', 'chair', '50', 'fan', '2', 'wall paint', '2', 'blackboard', '2', 'plyboard', '3'),
(3, 'Sebastian Jabson', '', '2', '', '', '', '', '', '', '', ''),
(4, 'Acevergel Espino', 'switch', '5', '', '', '', '', '', '', '', ''),
(5, 'Nisokero', 'bulb', '30', '', '', '', '', '', '', '', '');

-- --------------------------------------------------------

--
-- Table structure for table `materials_record`
--

CREATE TABLE `materials_record` (
  `id` int(255) NOT NULL,
  `name` char(255) NOT NULL,
  `status` char(255) NOT NULL,
  `petsa` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `materials_record`
--

INSERT INTO `materials_record` (`id`, `name`, `status`, `petsa`) VALUES
(1, 'alejandro bermudo', 'Delivered', '2019-09-04'),
(2, 'gian concepcion', 'Delivered', '2019-09-04'),
(3, 'Sebastian Jabson', 'Delivered', '2019-09-04'),
(4, 'Acevergel Espino', 'Delivered', '2019-09-04'),
(5, 'Nisokero', 'Delivered', '2019-09-05');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `account`
--
ALTER TABLE `account`
  ADD PRIMARY KEY (`ID`);

--
-- Indexes for table `jos_description`
--
ALTER TABLE `jos_description`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `jos_record`
--
ALTER TABLE `jos_record`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `materials_description`
--
ALTER TABLE `materials_description`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `materials_record`
--
ALTER TABLE `materials_record`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `account`
--
ALTER TABLE `account`
  MODIFY `ID` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=60;

--
-- AUTO_INCREMENT for table `jos_description`
--
ALTER TABLE `jos_description`
  MODIFY `id` mediumint(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `jos_record`
--
ALTER TABLE `jos_record`
  MODIFY `id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `materials_description`
--
ALTER TABLE `materials_description`
  MODIFY `id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `materials_record`
--
ALTER TABLE `materials_record`
  MODIFY `id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
