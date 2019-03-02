-- phpMyAdmin SQL Dump
-- version 4.8.3
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Mar 02, 2019 at 04:14 AM
-- Server version: 10.1.36-MariaDB
-- PHP Version: 7.0.32

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `sih`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `sr.no.` int(255) NOT NULL,
  `fname` varchar(255) NOT NULL,
  `mname` varchar(255) NOT NULL,
  `lname` varchar(255) NOT NULL,
  `FatherName` varchar(255) NOT NULL,
  `MotherName` varchar(255) NOT NULL,
  `mobNo` bigint(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `currAddress` varchar(255) NOT NULL,
  `perAddress` varchar(255) NOT NULL,
  `adhaar` int(255) NOT NULL,
  `qualifications` varchar(255) NOT NULL,
  `profession` varchar(255) NOT NULL,
  `experience` int(255) NOT NULL,
  `studied` varchar(255) NOT NULL,
  `username` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`sr.no.`, `fname`, `mname`, `lname`, `FatherName`, `MotherName`, `mobNo`, `email`, `currAddress`, `perAddress`, `adhaar`, `qualifications`, `profession`, `experience`, `studied`, `username`, `password`) VALUES
(1, 'Naman', 'Andrew', 'Lazarus', 'Andrew Peter Lazarus', 'Vinita Lazarus', 9082938328, 'namanlazarus02@gmail.com', 'Bandra', 'hbsdfhwud', 98989, 'dfvdf', 'sfdvsf', 2, 'fsvds', 'Naman', 'papAq5PwY/QQM');

-- --------------------------------------------------------

--
-- Table structure for table `help`
--

CREATE TABLE `help` (
  `sr.no` int(255) NOT NULL,
  `location` varchar(255) NOT NULL,
  `type` varchar(255) NOT NULL,
  `disc` varchar(255) NOT NULL,
  `date` varchar(255) NOT NULL,
  `applied` int(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `help`
--

INSERT INTO `help` (`sr.no`, `location`, `type`, `disc`, `date`, `applied`) VALUES
(1, 'Mulund', '2', 'Doctor needed', '25/02/19 - 28/02/19', 4),
(2, 'Thane', '1', 'Medicines needed', '1/03/19 - 15/03/19', 8),
(3, 'Andheri', '3', 'nurses needed', '3/03/19 - 10/03/19', 5),
(18, 'Bandra', '3', '', '26/02/19', 0),
(19, 'Bandra', '3', '', '26/02/19', 0);

-- --------------------------------------------------------

--
-- Table structure for table `medicine`
--

CREATE TABLE `medicine` (
  `sr.no` int(255) NOT NULL,
  `name` varchar(255) NOT NULL,
  `reqQuantity` int(255) NOT NULL,
  `avaQuantity` int(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `medicine`
--

INSERT INTO `medicine` (`sr.no`, `name`, `reqQuantity`, `avaQuantity`) VALUES
(1, 'Avobenzone', 200, 100),
(3, 'Homosalate', 0, 100),
(4, 'Octisalate', 0, 100),
(5, 'Octocrylene', 0, 100);

-- --------------------------------------------------------

--
-- Table structure for table `patient`
--

CREATE TABLE `patient` (
  `sr.no` int(255) NOT NULL,
  `months` int(255) NOT NULL,
  `admit` int(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `patient`
--

INSERT INTO `patient` (`sr.no`, `months`, `admit`) VALUES
(1, 2, 0);

-- --------------------------------------------------------

--
-- Table structure for table `provided`
--

CREATE TABLE `provided` (
  `sr.no` int(255) NOT NULL,
  `fname` varchar(255) NOT NULL,
  `lname` varchar(255) NOT NULL,
  `phone` int(255) NOT NULL,
  `date` varchar(255) NOT NULL,
  `disc` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `provided`
--

INSERT INTO `provided` (`sr.no`, `fname`, `lname`, `phone`, `date`, `disc`) VALUES
(1, 'Naman', 'Lazarus', 90829, '26/02/19', ''),
(2, 'Naman', 'Lazarus', 90829, '26/02/19', 'Array'),
(3, 'Naman', 'Lazarus', 90829, '26/02/19', 'Medicines needed');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `sr.no` int(255) NOT NULL,
  `fname` varchar(255) NOT NULL,
  `lname` varchar(255) NOT NULL,
  `phone` int(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `username` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`sr.no`, `fname`, `lname`, `phone`, `email`, `username`, `password`) VALUES
(1, 'Naman', 'Lazarus', 90829, 'namanlazarus02@gmail.com', 'Naman', 'papAq5PwY/QQM');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`sr.no.`);

--
-- Indexes for table `help`
--
ALTER TABLE `help`
  ADD PRIMARY KEY (`sr.no`);

--
-- Indexes for table `medicine`
--
ALTER TABLE `medicine`
  ADD PRIMARY KEY (`sr.no`);

--
-- Indexes for table `patient`
--
ALTER TABLE `patient`
  ADD PRIMARY KEY (`sr.no`);

--
-- Indexes for table `provided`
--
ALTER TABLE `provided`
  ADD PRIMARY KEY (`sr.no`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`sr.no`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
  MODIFY `sr.no.` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `help`
--
ALTER TABLE `help`
  MODIFY `sr.no` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=20;

--
-- AUTO_INCREMENT for table `medicine`
--
ALTER TABLE `medicine`
  MODIFY `sr.no` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `patient`
--
ALTER TABLE `patient`
  MODIFY `sr.no` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `provided`
--
ALTER TABLE `provided`
  MODIFY `sr.no` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `sr.no` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
