-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Jun 09, 2017 at 01:14 PM
-- Server version: 10.1.19-MariaDB
-- PHP Version: 5.5.38

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `bill`
--

-- --------------------------------------------------------

--
-- Table structure for table `contact`
--

CREATE TABLE `contact` (
  `id` int(11) NOT NULL,
  `name` varchar(30) NOT NULL,
  `email` varchar(20) NOT NULL,
  `address` varchar(40) NOT NULL,
  `comment` varchar(500) NOT NULL,
  `date` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `contact`
--

INSERT INTO `contact` (`id`, `name`, `email`, `address`, `comment`, `date`) VALUES
(3, 'aaa', 'buraman1626@gmail.co', 'amu', 'bbbbbbbbbbbbb', '2017-05-12'),
(4, 'aaa', 'buraman1626@gmail.co', 'amu', 'bbbbbbbbbbbbb', '2017-05-12'),
(5, 'aaa', 'buraman1626@gmail.co', 'amu', 'bbbbbbbbbbbbb', '2017-05-12'),
(6, 'bbb', 'buraman1626@gmail.co', 'BBBB', 'BBBBB', '2017-05-12'),
(7, 'B', 'buraman1626@gmail.co', 'BBB', 'NNNN', '2017-05-12'),
(9, 'ajax', 'buraman1626@gmail.co', 'amu', 'sssssssssssssssssssssssssssssssssssssssssssssssssss', '2017-05-12'),
(18, 'bitew', 'buraman@gmail.com', 'amu', 'abnabmbjkasbjkbdsj', '2017-06-06'),
(32, 'ghgh', 'buraman@gmail.com', 'nmnmnm', 'bnm,bnm', '2017-06-08'),
(33, '', 'buraman@gmail.com', '', '', '2017-06-08'),
(34, '', 'buraman@gmail.com', '', 'bbvcnxbnnx cvbnxmb', '2017-06-08'),
(35, '', 'buraman@gmail.com', '', 'vhzcxcn,.hcnbnzcx', '2017-06-08'),
(36, '', 'bman@gmail.com', '', '', '2017-06-08'),
(37, '', 'bman@gmail.com', '', '', '2017-06-08'),
(38, 'chff', 'buraman1626@gmail.co', 'jmmmjm', 'mmmmm', '2017-06-08');

-- --------------------------------------------------------

--
-- Table structure for table `employee`
--

CREATE TABLE `employee` (
  `FName` char(20) NOT NULL,
  `MName` char(20) NOT NULL,
  `LName` char(20) NOT NULL,
  `Gender` char(20) NOT NULL,
  `EIDNO` varchar(20) NOT NULL,
  `JobClass` char(50) NOT NULL,
  `Education` char(20) NOT NULL,
  `DepartmentName` char(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `payment`
--

CREATE TABLE `payment` (
  `billno` int(21) NOT NULL,
  `date` date NOT NULL,
  `fname` varchar(20) NOT NULL,
  `lname` varchar(20) NOT NULL,
  `address` varchar(20) NOT NULL,
  `amountofbirr` float NOT NULL,
  `phone_no` int(20) NOT NULL,
  `servicetype` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `payment`
--

INSERT INTO `payment` (`billno`, `date`, `fname`, `lname`, `address`, `amountofbirr`, `phone_no`, `servicetype`) VALUES
(4, '2017-06-08', 'abebe', 'kebde', 'amu', 100, 11111, 'electric bill'),
(5, '2017-06-08', 'bitew', 'abebe', 'amu', 100, 11111, 'telecome bill'),
(6, '2017-06-08', 'bitew', 'abebe', 'amu', 66, 1234567, 'electric bill'),
(7, '2017-06-08', 'bitew', 'abebe', 'amu', 66, 1234567, 'electric bill'),
(8, '2017-06-08', 'bitew', 'baba', 'adama', 100, 1234567, 'water bill'),
(9, '2017-06-08', 'abdur', 'abdu', 'amu', 100, 1234567, 'electric bill'),
(10, '2017-06-08', 'abdur', 'abdu', 'amu', 35, 2147483647, 'electric bill'),
(11, '2017-06-08', 'salim', 'abdu', 'amu', 100, 2147483647, 'electric bill'),
(12, '2017-06-08', 'bitew', 'abebayehu', 'arbaminch', 100, 2147483647, 'electric bill'),
(13, '2017-06-08', 'bitew', 'abebayehuu', 'amu', 100, 1001100110, 'telecome bill'),
(14, '2017-06-08', 'bitew', 'abebayehu', 'amu', 33, 1001100110, 'electric bill'),
(15, '2017-06-08', 'bitew', 'abebayehu', 'amu', 33, 1001100110, 'water bill'),
(16, '2017-06-08', 'cheru', 'dejene', 'send', 73, 922520849, 'water bill'),
(17, '2017-06-08', 'cheru', 'dejene', 'send', 73, 922520849, 'water bill'),
(18, '2017-06-08', 'baba', 'dejene', 'send', 66, 922520849, 'electric bill'),
(19, '2017-06-08', 'cheru', 'dejene', 'send', 73, 922520849, 'water bill'),
(20, '2017-06-08', 'baba', 'dejene', 'send', 66, 922520849, 'water bill'),
(21, '2017-06-08', 'baba', 'dejene', 'send', 66, 922520849, 'electric bill'),
(22, '2017-06-08', 'ali', 'ahmed', 'aa', 13.2, 1111111111, 'water bill'),
(23, '2017-06-08', 'ali', 'ahmed', 'aa', 13.2, 1111111111, 'water bill'),
(24, '2017-06-08', 'salim', 'abdulkadir', 'amu', 66, 1001100110, 'water bill'),
(25, '2017-06-08', 'salim', 'abdulkadir', 'amu', 66, 1001100110, 'telecome bill'),
(26, '2017-06-08', '', '', '', 0, 0, ''),
(27, '2017-06-08', 'bitew', 'abebe', 'amu', 330, 922520849, 'water bill'),
(28, '2017-06-08', 'salim', 'abdulkadir', 'amu', 66, 1001100110, 'water bill');

-- --------------------------------------------------------

--
-- Table structure for table `replies`
--

CREATE TABLE `replies` (
  `email` varchar(25) NOT NULL,
  `replies` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `replies`
--

INSERT INTO `replies` (`email`, `replies`) VALUES
('bman@gmail.com', 'vczxnbzvbxv'),
('buraman1626@gmail.com', 'bitew'),
('vcxzlh.b', 'zzzzzzzcbxn...................n');

-- --------------------------------------------------------

--
-- Table structure for table `report`
--

CREATE TABLE `report` (
  `no` int(11) NOT NULL,
  `date` varchar(25) NOT NULL,
  `fname` varchar(35) NOT NULL,
  `lname` varchar(30) NOT NULL,
  `address` varchar(32) NOT NULL,
  `amountofbirr` int(35) NOT NULL,
  `phone_No` varchar(34) NOT NULL,
  `servicetype` varchar(34) NOT NULL,
  `report` varchar(355) NOT NULL,
  `service_no` int(10) NOT NULL,
  `username` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `report`
--

INSERT INTO `report` (`no`, `date`, `fname`, `lname`, `address`, `amountofbirr`, `phone_No`, `servicetype`, `report`, `service_no`, `username`) VALUES
(1, '2017-05-04', 'nnn', 'bbb', 'amu', 1000, '0000', 'water billing', 'payed', 1, ''),
(2, '2016-05-29', 'ffd', 'ffd', 'fff', 66, '66', 'water billing', 'ffggggfg', 3, ''),
(3, '2016-05-29', 'ffd', 'ffd', 'fff', 66, '66', 'water billing', 'ffggggfg', 2, ''),
(4, '2017-05-14', 'nnn', 'mmm', 'nmmm', 1222, '55455', 'water billing', 'payed', 1, 'bura/000/01'),
(5, '2017-05-16', 'bbb', 'mmmm', 'amu', 1000, '9099099', 'water billing', 'payed', 1, 'lab/000/02'),
(6, '2017-05-16', 'bbb', 'mmmm', 'amu', 1000, '9099099', 'water billing', 'payed', 1, 'lab/000/02'),
(7, '2017-05-16', 'bbb', 'mmmm', 'amu', 1000, '9099099', 'water billing', 'payed', 1, 'lab/000/02'),
(8, '2017-05-16', 'bbb', 'mmmm', 'amu', 1000, '9099099', 'water billing', 'payed', 1, 'lab/000/02'),
(9, '2017-05-16', 'bbb', 'mmmm', 'amu', 1000, '9099099', 'water billing', 'payed', 1, 'lab/000/02'),
(10, '2017-05-16', 'bbb', 'addd', 'abbb', 99009, '1222', 'water billing', 'payed', 0, 'lab/000/02'),
(11, '2017-05-16', 'bbb', 'addd', 'abbb', 99009, '1222', 'water billing', 'payed', 0, 'lab/000/02'),
(12, '2017-05-16', 'bbb', 'addd', 'abbb', 99009, '1222', 'water billing', 'payed', 0, 'lab/000/02'),
(13, '2017-05-16', 'vcccc', 'ccc', 'ccc', 1000, '0000', 'water billing', 'payed', 0, 'lab/000/00'),
(14, '2017-05-16', 'vcccc', 'ccc', 'ccc', 1000, '0000', 'water billing', 'payed', 0, 'lab/000/00'),
(15, '2017-05-16', 'vcccc', 'ccc', 'ccc', 1000, '0000', 'water billing', 'payed', 0, 'lab/000/00');

-- --------------------------------------------------------

--
-- Table structure for table `useraccount`
--

CREATE TABLE `useraccount` (
  `UserName` varchar(20) NOT NULL,
  `Password` varchar(20) NOT NULL,
  `Role` char(20) NOT NULL,
  `SIDNO` varchar(20) DEFAULT NULL,
  `EIDNO` varchar(20) DEFAULT NULL,
  `Status` int(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `useraccount`
--

INSERT INTO `useraccount` (`UserName`, `Password`, `Role`, `SIDNO`, `EIDNO`, `Status`) VALUES
('asw/000/00', 'YXN3YXN3', 'Administrator', NULL, NULL, 0),
('bank/111/08', 'dG9t', 'bank', NULL, NULL, 1),
('bura/000/01', 'YnVyYQ==', 'employeee', NULL, NULL, 1),
('lab/000/00', 'ZW1w', 'employee', NULL, NULL, 1),
('lab/000/02', 'YWRtaW4=', 'Administrator', NULL, NULL, 1),
('lab/123/12', 'Y2hlcnU=', 'employee', NULL, NULL, 1),
('salm/000/02', 'c2FsaW0=', 'employeee', NULL, NULL, 1);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `contact`
--
ALTER TABLE `contact`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `employee`
--
ALTER TABLE `employee`
  ADD PRIMARY KEY (`EIDNO`);

--
-- Indexes for table `payment`
--
ALTER TABLE `payment`
  ADD PRIMARY KEY (`billno`);

--
-- Indexes for table `replies`
--
ALTER TABLE `replies`
  ADD PRIMARY KEY (`email`);

--
-- Indexes for table `report`
--
ALTER TABLE `report`
  ADD PRIMARY KEY (`no`);

--
-- Indexes for table `useraccount`
--
ALTER TABLE `useraccount`
  ADD PRIMARY KEY (`UserName`),
  ADD KEY `SIDNO` (`SIDNO`),
  ADD KEY `EIDNO` (`EIDNO`),
  ADD KEY `EIDNO_2` (`EIDNO`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `contact`
--
ALTER TABLE `contact`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=39;
--
-- AUTO_INCREMENT for table `payment`
--
ALTER TABLE `payment`
  MODIFY `billno` int(21) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=29;
--
-- AUTO_INCREMENT for table `report`
--
ALTER TABLE `report`
  MODIFY `no` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;
--
-- Constraints for dumped tables
--

--
-- Constraints for table `useraccount`
--
ALTER TABLE `useraccount`
  ADD CONSTRAINT `useraccount_ibfk_2` FOREIGN KEY (`EIDNO`) REFERENCES `employee` (`EIDNO`);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
