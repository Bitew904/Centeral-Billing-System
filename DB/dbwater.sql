-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Jun 09, 2017 at 01:17 PM
-- Server version: 10.1.19-MariaDB
-- PHP Version: 5.5.38

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `dbwater`
--

-- --------------------------------------------------------

--
-- Table structure for table `customer`
--

CREATE TABLE `customer` (
  `CID` int(11) NOT NULL,
  `fname` varchar(50) DEFAULT NULL,
  `lname` varchar(50) NOT NULL,
  `address` varchar(50) NOT NULL,
  `phone` int(10) DEFAULT NULL,
  `houseno` int(6) DEFAULT NULL,
  `amountofbill` int(50) NOT NULL,
  `date` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `customer`
--

INSERT INTO `customer` (`CID`, `fname`, `lname`, `address`, `phone`, `houseno`, `amountofbill`, `date`) VALUES
(10, 'cheru', 'dejene', 'send', 922520849, 9234, 220, '2017-06-08'),
(11, 'bitew', 'abdu', 'amu', 922520849, 12345, 200, '2017-06-08'),
(20, 'bitew', 'abebe', 'amu', 922520849, 23456, 1000, '2017-06-08'),
(30, 'salim', 'abdulkadir', 'amu', 1001100110, 1232, 200, '2017-06-08'),
(70, 'ali', 'ahmed', 'aa', 1111111111, 1324, 40, '2017-06-08');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `customer`
--
ALTER TABLE `customer`
  ADD PRIMARY KEY (`CID`);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
