-- phpMyAdmin SQL Dump
-- version 4.8.0.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Apr 29, 2019 at 05:20 AM
-- Server version: 5.5.39
-- PHP Version: 7.2.5

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `pariudaan`
--

-- --------------------------------------------------------

--
-- Table structure for table `applicants`
--

CREATE TABLE `applicants` (
  `ID` int(11) NOT NULL,
  `name` varchar(256) NOT NULL,
  `email` varchar(256) NOT NULL,
  `pwd` varchar(256) NOT NULL,
  `progress` int(11) NOT NULL DEFAULT '0',
  `contact` bigint(12) NOT NULL,
  `dob` varchar(10) NOT NULL,
  `mother` varchar(256) NOT NULL,
  `address` varchar(256) NOT NULL,
  `class` int(11) DEFAULT NULL,
  `board` varchar(25) DEFAULT NULL,
  `marks` int(11) DEFAULT NULL,
  `tmarks` int(11) DEFAULT NULL,
  `per` decimal(5,2) DEFAULT NULL,
  `school` varchar(256) DEFAULT NULL,
  `schooladd` varchar(256) DEFAULT NULL,
  `photo` varchar(1024) DEFAULT NULL,
  `marksheet` varchar(1024) DEFAULT NULL,
  `aadhar` varchar(1024) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `applicants`
--

INSERT INTO `applicants` (`ID`, `name`, `email`, `pwd`, `progress`, `contact`, `dob`, `mother`, `address`, `class`, `board`, `marks`, `tmarks`, `per`, `school`, `schooladd`, `photo`, `marksheet`, `aadhar`) VALUES
(1, 'Example M S', 'pnshiralkar@gmail.com', '123', 3, 9075577238, '1999-12-04', 'Mother', 'Pune', 10, 'CBSE', 500, 600, '91.00', 'school name', '                    school in pune', 'documents/pnshiralkar@gmail.com/photo.jpg', 'documents/pnshiralkar@gmail.com/marksheet.jpg', 'documents/pnshiralkar@gmail.com/aadhar.jpg');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `applicants`
--
ALTER TABLE `applicants`
  ADD PRIMARY KEY (`ID`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `applicants`
--
ALTER TABLE `applicants`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
