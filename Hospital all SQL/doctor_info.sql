-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Sep 15, 2018 at 05:02 AM
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
-- Table structure for table `doctor_info`
--

CREATE TABLE `doctor_info` (
  `ID` int(11) NOT NULL,
  `FIRST_NAME` varchar(50) NOT NULL,
  `MIDDLE_NAME` varchar(50) NOT NULL,
  `LAST_NAME` varchar(50) NOT NULL,
  `DATE_OF_APPOINTMENT` date NOT NULL,
  `DATE_OF_BIRTH` date NOT NULL,
  `PHONE_NUMBER` int(20) NOT NULL,
  `CHOICE_CABIN_OR_WARD_NO` int(20) NOT NULL,
  `DOCTOR_ID` int(20) NOT NULL,
  `MEMBERSHIP` varchar(20) NOT NULL,
  `SSC` varchar(20) NOT NULL,
  `HSC` varchar(20) NOT NULL,
  `BSC` varchar(20) NOT NULL,
  `OTHER` varchar(20) NOT NULL,
  `ORGANIZATION` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `doctor_info`
--

INSERT INTO `doctor_info` (`ID`, `FIRST_NAME`, `MIDDLE_NAME`, `LAST_NAME`, `DATE_OF_APPOINTMENT`, `DATE_OF_BIRTH`, `PHONE_NUMBER`, `CHOICE_CABIN_OR_WARD_NO`, `DOCTOR_ID`, `MEMBERSHIP`, `SSC`, `HSC`, `BSC`, `OTHER`, `ORGANIZATION`) VALUES
(10, 'DR.', 'SAMSUZZAMAN', 'KHAN', '2018-08-01', '1985-11-01', 1745525895, 405, 147, 'AMC', 'DHAKA-1995-5.00', 'DHAKA-1997-5.00', 'DMC-2000-4.00', 'PHD-USA-2007', 'DELTA MEDICAL COLLAGE'),
(11, 'DR.', 'SHIEAK', 'SIRAZ', '2018-08-01', '1990-08-02', 1584475258, 405, 258, 'BMA', 'DHAKA-2000-5.00', 'DHAKA-2004-5.00', 'DMC-2010-4.00', 'PHD-UK-2014', 'DHAKA MEDICAL COLLAGE'),
(12, 'DR.', 'MASUMA', 'RANI', '2017-08-23', '1991-08-01', 1477852559, 905, 369, 'AMC', 'DHAKA-2010-5.00', 'DHAKA-2013-5.00', 'DMC-2017-4.00', 'NO INFO', 'BMMS'),
(13, 'DR.', 'MISHA', 'ISLAM', '2017-08-01', '1985-08-01', 2147483647, 905, 123, 'BMS', 'DHAKA-1995-5.00', 'DHAKA-1997-5.00', 'DMC-2000-4.00', 'PHD-USA-2007', 'NO');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `doctor_info`
--
ALTER TABLE `doctor_info`
  ADD PRIMARY KEY (`ID`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `doctor_info`
--
ALTER TABLE `doctor_info`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
