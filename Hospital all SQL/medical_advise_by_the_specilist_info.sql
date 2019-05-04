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
-- Table structure for table `medical_advise_by_the_specilist_info`
--

CREATE TABLE `medical_advise_by_the_specilist_info` (
  `ID` int(11) NOT NULL,
  `DATE_OF_ADMITION` date NOT NULL,
  `PATIENT_ID` int(20) NOT NULL,
  `FIRST_NAME` varchar(10) NOT NULL,
  `MIDDLE_NAME` varchar(10) NOT NULL,
  `LAST_NAME` varchar(10) NOT NULL,
  `DATE_OF_BIRTH` date NOT NULL,
  `BED_NO` int(10) NOT NULL,
  `WORD_NO` int(10) NOT NULL,
  `DATE_OF_ADVICE` date NOT NULL,
  `TIME` time(6) NOT NULL,
  `MEDICINE01` varchar(100) NOT NULL,
  `MEDICINE02` varchar(100) NOT NULL,
  `MEDICINE03` varchar(100) NOT NULL,
  `MEDICINE_ABOVE` varchar(200) NOT NULL,
  `TEST_NAME` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `medical_advise_by_the_specilist_info`
--

INSERT INTO `medical_advise_by_the_specilist_info` (`ID`, `DATE_OF_ADMITION`, `PATIENT_ID`, `FIRST_NAME`, `MIDDLE_NAME`, `LAST_NAME`, `DATE_OF_BIRTH`, `BED_NO`, `WORD_NO`, `DATE_OF_ADVICE`, `TIME`, `MEDICINE01`, `MEDICINE02`, `MEDICINE03`, `MEDICINE_ABOVE`, `TEST_NAME`) VALUES
(1, '2018-08-01', 147852369, 'MD', 'ANIKUL', 'ISLAM', '1996-08-01', 911, 905, '2018-08-01', '13:01:00.000000', 'NAPA-01-MORNING', 'FILMET-01-NIGHT', 'VX5-01-MORNING', '.............', 'ECG-CTSCEN'),
(15, '2018-08-29', 258741369, 'MITU', 'RANI', 'DAS', '1996-08-01', 445, 405, '2018-08-29', '14:45:00.000000', 'RENOVA-02-MORNING01-NIGHT01', 'MAXPRO-03-MORNING01-AFTERNOON01-NIGHT01', '..............', '.............', '...............');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `medical_advise_by_the_specilist_info`
--
ALTER TABLE `medical_advise_by_the_specilist_info`
  ADD PRIMARY KEY (`ID`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `medical_advise_by_the_specilist_info`
--
ALTER TABLE `medical_advise_by_the_specilist_info`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
