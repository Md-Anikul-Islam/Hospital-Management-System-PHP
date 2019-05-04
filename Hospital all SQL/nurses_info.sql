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
-- Table structure for table `nurses_info`
--

CREATE TABLE `nurses_info` (
  `ID` int(11) NOT NULL,
  `FIRST_NAME` varchar(50) NOT NULL,
  `MIDDLE_NAME` varchar(50) NOT NULL,
  `LAST_NAME` varchar(50) NOT NULL,
  `DATE_OF_APPOINTMENT` date NOT NULL,
  `DATE_OF_BIRTH` date NOT NULL,
  `PHONE_NUMBER` int(20) NOT NULL,
  `CHOICE_CABIN_OR_WARD_NO` int(20) NOT NULL,
  `NURSES_ID` int(20) NOT NULL,
  `SSC` varchar(100) NOT NULL,
  `HSC` varchar(100) NOT NULL,
  `BSC` varchar(100) NOT NULL,
  `OTHER` varchar(100) NOT NULL,
  `ORGANIZATION` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `nurses_info`
--

INSERT INTO `nurses_info` (`ID`, `FIRST_NAME`, `MIDDLE_NAME`, `LAST_NAME`, `DATE_OF_APPOINTMENT`, `DATE_OF_BIRTH`, `PHONE_NUMBER`, `CHOICE_CABIN_OR_WARD_NO`, `NURSES_ID`, `SSC`, `HSC`, `BSC`, `OTHER`, `ORGANIZATION`) VALUES
(3, 'MITU', 'RANI', 'DAS', '2014-08-01', '1995-08-01', 1588452447, 405, 123, 'DHAKA-2010-3.00', 'DHAKA-2013-3.47', 'NTC-2018-4.00', 'NO INFO', 'NO INFO'),
(4, 'SUCHONA', 'RANI', 'SHAHA', '2017-08-01', '1992-08-01', 147885258, 905, 456, 'DHAKA-2010-4.14', 'DHAKA-2013-3.47', 'NTC-2018-4.00', 'DMC', 'NO INFO');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `nurses_info`
--
ALTER TABLE `nurses_info`
  ADD PRIMARY KEY (`ID`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `nurses_info`
--
ALTER TABLE `nurses_info`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
