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
-- Database: `bank`
--

-- --------------------------------------------------------

--
-- Table structure for table `bank`
--

CREATE TABLE `bank` (
  `id` int(12) NOT NULL,
  `first_name` varchar(20) NOT NULL,
  `last_name` varchar(20) NOT NULL,
  `branch` varchar(20) NOT NULL,
  `accno` int(23) NOT NULL,
  `amountofbirr` int(20) NOT NULL,
  `date` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `bank`
--

INSERT INTO `bank` (`id`, `first_name`, `last_name`, `branch`, `accno`, `amountofbirr`, `date`) VALUES
(9, 'abebe', 'kebde', 'dashen', 1111, 28462, '2017-05-05'),
(10, 'alem', 'alem', 'dashen', 2222, 25975, '2017-05-05'),
(25, 'aaa', 'bbb', 'EBC', 1234, 8010, '2017-05-23'),
(26, 'watservice', 'wateserice', 'dashen', 1001, 9080, '2017-05-27'),
(27, 'elecservic', 'elcservice', 'dashen', 1002, 5857, '2017-05-27'),
(28, 'telsercice', 'telesevice', 'dashen', 1003, 32982, '2017-05-27'),
(29, 'abebe', 'alem', 'dashen', 1626, 1000000, '2017-06-03'),
(30, 'bura', 'bbb', 'dashen', 1626, 100000, '2017-06-03'),
(31, 'bura', 'bbb', 'dashen', 1626, 100000, '2017-06-03'),
(32, 'abe', 'kebe', 'dashen', 6666, 1000000, '2017-06-03'),
(33, 'al', 'ab', 'dashen', 55555, 1000, '2017-06-03'),
(34, 'nnn', 'mmm', 'dashen', 1221, 999800, '2017-06-03'),
(35, 'aaa', 'aaaa', 'dashen', 22212, 2147483647, '2017-06-03'),
(36, 'mm', 'mmm', 'nn', 455454, 12313132, '2017-06-03'),
(37, 'cheru', 'baba', 'cbe', 0, 200, '2017-06-07'),
(38, 'cheru', 'baba', 'dashen', 1234, 30000, '2017-06-07'),
(39, 'bitew', 'abebe', 'dashen', 123456, 115415, '2017-06-07'),
(40, 'bitew', 'nn', 'dashen', 32, 40, '2017-06-07'),
(41, 'salim', 'abdulkadir', 'dashen', 3333, 3934, '2017-06-08');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `bank`
--
ALTER TABLE `bank`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `bank`
--
ALTER TABLE `bank`
  MODIFY `id` int(12) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=42;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
