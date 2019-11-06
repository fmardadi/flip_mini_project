-- phpMyAdmin SQL Dump
-- version 4.7.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Nov 05, 2019 at 17:20 PM
-- Server version: 10.1.29-MariaDB
-- PHP Version: 7.2.0

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `flip`
--
CREATE DATABASE IF NOT EXISTS `flip` DEFAULT CHARACTER SET latin1 COLLATE latin1_swedish_ci;
USE `flip`;

-- --------------------------------------------------------

--
-- Table structure for table `disbursement`
--

CREATE TABLE `disbursement` (
  `id` int(100) NOT NULL,
  `amount` int(100) DEFAULT NULL,
  `status` varchar(100) DEFAULT NULL,
  `timestamp` timestamp NULL DEFAULT NULL,
  `bank_code` varchar(50) DEFAULT NULL,
  `account_number` varchar(100) DEFAULT NULL,
  `beneficiary_name` varchar(100) DEFAULT NULL,
  `remark` varchar(100) DEFAULT NULL,
  `receipt` varchar(250) DEFAULT NULL,
  `time_served` timestamp NULL DEFAULT NULL,
  `fee` int(100) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `disbursement`
--

INSERT INTO `disbursement` (`id`, `amount`, `status`, `timestamp`, `bank_code`, `account_number`, `beneficiary_name`, `remark`, `receipt`, `time_served`, `fee`) VALUES
(2147483647, 10000, 'PENDING', '2019-11-05 04:15:43', 'Tes', '12345', 'PT FLIP', 'Tes Disbursement', '', '0000-00-00 00:00:00', 4000);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `disbursement`
--
ALTER TABLE `disbursement`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `disbursement`
--
ALTER TABLE `disbursement`
  MODIFY `id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2147483647;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
