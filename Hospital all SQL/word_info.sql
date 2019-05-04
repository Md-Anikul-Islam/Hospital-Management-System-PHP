-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Sep 15, 2018 at 05:03 AM
-- Server version: 10.1.13-MariaDB
-- PHP Version: 5.6.23

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `hospital`
--

-- --------------------------------------------------------

--
-- Table structure for table `word_info`
--

CREATE TABLE `word_info` (
  `ID` int(11) NOT NULL,
  `WARD_ID` int(50) NOT NULL,
  `REGISTRAR_ID` int(50) NOT NULL,
  `NURSE_SUPERVISOR_ID` int(50) NOT NULL,
  `WARD_NAME` varchar(100) NOT NULL,
  `REGISTRAR_NAME` varchar(100) NOT NULL,
  `NURSE_SUPERVISOR_NAME` varchar(100) NOT NULL,
  `SERIAL_NO` int(10) NOT NULL,
  `BED_NO` int(20) NOT NULL,
  `BED_TYPE` varchar(100) NOT NULL,
  `RENT` int(200) NOT NULL,
  `EMPTY_OR_NOT_EMPTY` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `word_info`
--

INSERT INTO `word_info` (`ID`, `WARD_ID`, `REGISTRAR_ID`, `NURSE_SUPERVISOR_ID`, `WARD_NAME`, `REGISTRAR_NAME`, `NURSE_SUPERVISOR_NAME`, `SERIAL_NO`, `BED_NO`, `BED_TYPE`, `RENT`, `EMPTY_OR_NOT_EMPTY`) VALUES
(6, 405, 1235, 4567, 'GENERAL', 'ANIKUL', 'MITU', 101, 411, 'SINGLE', 1500, 'EMPTY'),
(7, 405, 1488, 8523, 'GENERAL', 'ANIKA', 'SUCHONA', 102, 415, 'SINGLE', 1500, 'EMPTY'),
(8, 405, 9632, 8526, 'GENERAL', 'ANABIL', 'RANI', 103, 417, 'SINGLE', 1400, 'EMPTY'),
(9, 905, 3698, 8522, 'ICU', 'RISHA', 'MITU', 201, 911, 'SINGLE', 5000, 'EMPTY'),
(10, 905, 2587, 4521, 'ICU', 'RATRI', 'NISI', 202, 922, 'SINGLE', 6000, 'EMPTY');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `word_info`
--
ALTER TABLE `word_info`
  ADD PRIMARY KEY (`ID`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `word_info`
--
ALTER TABLE `word_info`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
