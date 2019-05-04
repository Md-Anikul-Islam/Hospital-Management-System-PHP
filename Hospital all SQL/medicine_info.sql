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
-- Table structure for table `medicine_info`
--

CREATE TABLE `medicine_info` (
  `ID` int(11) NOT NULL,
  `SUPPLIER_NID` int(100) NOT NULL,
  `SUPPLIER_NAME` varchar(50) NOT NULL,
  `DATE_OF_SUPPLY` date NOT NULL,
  `MEDICINE_ID` int(50) NOT NULL,
  `NAME` varchar(50) NOT NULL,
  `TYPE` varchar(100) NOT NULL,
  `UNIT_PRICE` varchar(100) NOT NULL,
  `EXPIRY_DATE` date NOT NULL,
  `QUANTITY` varchar(100) NOT NULL,
  `DATE_OF_MANUFACTURE` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `medicine_info`
--

INSERT INTO `medicine_info` (`ID`, `SUPPLIER_NID`, `SUPPLIER_NAME`, `DATE_OF_SUPPLY`, `MEDICINE_ID`, `NAME`, `TYPE`, `UNIT_PRICE`, `EXPIRY_DATE`, `QUANTITY`, `DATE_OF_MANUFACTURE`) VALUES
(2, 852369741, 'MANNA', '2016-08-01', 7852, 'FILMET', 'PERASITAMOL', '20', '2019-08-02', '300', '2015-08-01'),
(3, 789632541, 'ANIK', '2018-08-31', 5621, 'BX999', 'BXINE', '2500', '2021-08-31', '10', '2018-02-21'),
(8, 852147963, 'ROBIN', '2017-08-01', 2222, 'REBOX10', 'PAINKILLER', '30', '2018-08-01', '100', '2016-08-01');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `medicine_info`
--
ALTER TABLE `medicine_info`
  ADD PRIMARY KEY (`ID`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `medicine_info`
--
ALTER TABLE `medicine_info`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
