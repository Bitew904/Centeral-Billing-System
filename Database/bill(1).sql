-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Apr 12, 2016 at 12:32 AM
-- Server version: 10.1.9-MariaDB
-- PHP Version: 5.6.15

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
-- Table structure for table `customer`
--

CREATE TABLE `customer` (
  `UserName` varchar(20) NOT NULL,
  `Password` varchar(20) NOT NULL,
  `Role` char(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `customer`
--

INSERT INTO `customer` (`UserName`, `Password`, `Role`) VALUES
('cus/123/05', 'tom', 'customer'),
('tem/222/00', 'love', 'customer'),
('tem/222/01', 'mmm', 'employee'),
('tom/123/02', 'bbb', 'employee'),
('lab/111/02', 'bad', 'customer'),
('tmn/234/06', '123', 'customer');

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

--
-- Dumping data for table `employee`
--

INSERT INTO `employee` (`FName`, `MName`, `LName`, `Gender`, `EIDNO`, `JobClass`, `Education`, `DepartmentName`) VALUES
('Meselu', 'Truneh', 'Enyew', 'M', 'emplo/001/07', 'RegesirarOfficer', 'MSDegree', 'FainancalMGT'),
('Yisimaw', 'Gizachew', 'Reda', 'M', 'emplo/100/01', 'DininigOfficer', 'Digree', 'FoodManagement'),
('Adiss', 'Gizachew', 'Reda', 'M', 'emplo/101/01', 'Studentserviceoffice', 'Digree', 'FainancialManagement'),
('Alebel', 'Yasabneh', 'Melaku', 'M', 'emplo/102/01', 'Cumpussecurityofficer', 'MSDegree', 'ResourceManagiment'),
('Alebache', 'Mersie', 'Taye', 'M', 'emplo/103/01', 'StudentCouncil', 'MSDegree', 'psychology'),
('Mulu', 'Beza', 'Wondim', 'F', 'emplo/104/01', 'studnetserviceofficer', 'Digree', 'IndustrialChemistry'),
('Bantalem', 'Anley', 'Awoke', 'M', 'emplo/113/04', 'CourseCordinator', 'MSDegree', 'electrical'),
('Alehegn', 'Agegnew', 'Alamineh', 'M', 'emplo/114/04', 'CourseCordinator', 'Digree', 'mechanical'),
('Animaw', 'Wibishet', 'Tegegne', 'M', 'emplo/121/04', 'CollegeDean', 'MSDegree', 'COTOM'),
('Yirgaem', 'Teklay', 'Enyew', 'M', 'emplo/122/01', 'CourseCordinator', 'MSDegree', 'chemical'),
('Yesigat', 'Desalew', 'Zeleke', 'M', 'emplo/123/05', 'CourseCordinator', 'Degree', 'Computitional'),
('Yimegn', 'Wale', 'Tilehun', 'F', 'emplo/123/06', 'BookStoreOfficer', 'Degree', 'ResourceManagiment'),
('Matebie', 'Belay', 'Reda', 'M', 'emplo/124/02', 'MainLibraryOfficer', 'Degree', 'LibraryManagement'),
('Asichale', 'Tilahun', 'Simegn', 'M', 'emplo/124/03', 'CourseCordinator', 'Degree', 'Economics'),
('Dires', 'Kindie', 'Kebede', 'M', 'emplo/125/02', 'SportMasterOfficer', 'Degree', 'Accountingandfainance'),
('Yilkal', 'Bayley', 'Chekol', 'M', 'emplo/126/03', 'CollegeDean', 'MSDegree', 'computing'),
('Adane', 'Kindie', 'Kebede', 'M', 'emplo/127/02', 'CourseCordinator', 'MSDegree', 'IT'),
('Abebaw', 'Tilahune', 'Simegn', 'M', 'emplo/127/03', 'CourseCordinator', 'Degree', 'Management'),
('Melaku', 'Zegeye', 'Emirie', 'M', 'emplo/128/03', 'CourseCordinator', 'Degree', 'CS'),
('Simie', 'Workie', 'Mengistu', 'M', 'emplo/129/02', 'CourseCordinator', 'Degree', 'IS'),
('Yibelital', 'Teketay', 'Jemeberie', 'M', 'emplo/129/04', 'CollegeDean', 'MSDegree', 'FBE'),
('Yihun', 'Beley', 'Zegeye', 'M', 'emplo/129/05', 'CollegeDean', 'Degree', 'othersocial'),
('Awoke', 'Tilahun', 'Simegn', 'M', 'emplo/130/03', 'CourseCordinator', 'Degree', 'Accounting'),
('Enyew', 'Mekonen', 'Chekol', 'M', 'emplo/131/02', 'CollegeDean', 'MSDegree', 'Engineering'),
('Alehegn', 'Ragaw', 'Temesigun', 'M', 'emplo/132/02', 'CollegeDean', 'MsDegree', 'Agriculture'),
('Diress', 'Kassa', 'Aragaw', 'M', 'emplo/133/02', 'CollegeDean', 'MSDegree', 'Health'),
('Walie', 'Tilahun', 'Simegn', 'M', 'emplo/136/05', 'DormatoryOfficer', 'Degree', 'ResourceManagement'),
('Dejen', 'Andualem', 'Mengistu', 'M', 'emplo/202/04', 'CourseCordinator', 'MSDegree', 'Maths'),
('Limenih', 'Gashaw', 'Aniteneh', 'M', 'emplo/203/04', 'CourseCordinator', 'MSDegree', 'physics'),
('Yemata', 'Tilahun', 'Lakachew', 'M', 'emplo/204/04', 'CourseCordinator', 'MSDegree', 'biology'),
('Afework', 'Adimasie', 'Asefa', 'M', 'emplo/205/04', 'CourseCordinator', 'Degree', 'Chemistry'),
('Denekew', 'Bawoke', 'Teshale', 'M', 'emplo/206/04', 'CollegeDean', 'MSDegree', 'Mathimatics'),
('Yihunie', 'Kassa', 'Mekonen', 'M', 'emplo/207/04', 'CourseCordinator', 'Degree', 'Nursing'),
('Minbale', 'Tereche', 'Tamiru', 'M', 'emplo/208/04', 'CourseCordinator', 'Degree', 'Mudwifre'),
('Teshome', 'Amare', 'Melisew', 'M', 'emplo/210/04', 'CourseCordinator', 'Degree', 'HO'),
('Belayneh', 'Awoke', 'Yimer', 'M', 'emplo/211/04', 'CourseCordinator', 'MSDegree', 'COTM'),
('Tesfaye', 'Anteneh', 'Nigatu', 'M', 'emplo/212/04', 'CourseCordinator', 'MSDegree', 'Civil'),
('Ayehu', 'Bayley', 'Chekol', 'F', 'emplo/213/03', 'CollegeDean', 'MSDegree', 'agriculture');

-- --------------------------------------------------------

--
-- Table structure for table `preparebill`
--

CREATE TABLE `preparebill` (
  `date` varchar(35) NOT NULL,
  `fname` varchar(30) NOT NULL,
  `lname` varchar(32) NOT NULL,
  `address` varchar(35) NOT NULL,
  `billNO` int(34) NOT NULL,
  `currentreading` int(34) NOT NULL,
  `amountofbirr` int(34) NOT NULL,
  `servicetype` varchar(355) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `preparebill`
--

INSERT INTO `preparebill` (`date`, `fname`, `lname`, `address`, `billNO`, `currentreading`, `amountofbirr`, `servicetype`) VALUES
('<br /><b>Notice</b>:  Undefined var', 'gg', 'ff', 'vv', 56, 0, 0, 'water bill'),
('2016-03-27', 'temesgen', 'tameire', 'arbaminch', 233, 4555, 5677, 'telephone bill'),
('2016-03-22', 'kas', 'alem', 'arbaminch', 777, 890, 1234, 'electric bill'),
('', '', '', '', 778, 0, 0, ''),
('<br /><b>Notice</b>:  Undefined var', 'tt', 'hh', 'gg', 779, 0, 0, 'electric bill');

-- --------------------------------------------------------

--
-- Table structure for table `register`
--

CREATE TABLE `register` (
  `date` varchar(35) NOT NULL,
  `user_id` int(30) NOT NULL,
  `fname` varchar(32) NOT NULL,
  `lname` varchar(35) NOT NULL,
  `address` varchar(34) NOT NULL,
  `house_no` int(34) NOT NULL,
  `phone_no` int(34) NOT NULL,
  `servicetype` varchar(34) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `register`
--

INSERT INTO `register` (`date`, `user_id`, `fname`, `lname`, `address`, `house_no`, `phone_no`, `servicetype`) VALUES
('2016-03-07', 1, 'temu', 'tameire', 'arbaminch', 23, 934568, 'water billing'),
('2016-03-07', 2, 'temu', 'tameire', 'arbaminch', 23, 934568, 'water billing'),
('<br /><b>Notice</b>:  Undefined var', 3, 'ff', 'gg', 'ee', 45, 678, 'water billing'),
('<br /><b>Notice</b>:  Undefined var', 4, 'gyy', 'mm', 'bb', 67, 78, 'electric billing'),
('<br /><b>Notice</b>:  Undefined var', 5, 'gyy', 'mm', 'bb', 67, 78, 'electric billing'),
('<br /><b>Notice</b>:  Undefined var', 6, 'hh', 'nn', 'mm', 0, 0, 'water billing'),
('<br /><b>Notice</b>:  Undefined var', 7, 'ff', 'vv', 'cc', 0, 0, 'water billing'),
('<br /><b>Notice</b>:  Undefined var', 8, 'gg', 'vv', 'cc', 0, 0, 'electric billing'),
('', 9, '', '', '', 0, 0, ''),
('', 10, '', '', '', 0, 0, ''),
('', 11, '', '', '', 0, 0, ''),
('', 12, '', '', '', 0, 0, '');

-- --------------------------------------------------------

--
-- Table structure for table `report`
--

CREATE TABLE `report` (
  `date` varchar(25) NOT NULL,
  `user_id` varchar(35) NOT NULL,
  `fname` varchar(35) NOT NULL,
  `lname` varchar(30) NOT NULL,
  `address` varchar(32) NOT NULL,
  `amountofbirr` int(35) NOT NULL,
  `phone_No` varchar(34) NOT NULL,
  `servicetype` varchar(34) NOT NULL,
  `report` varchar(355) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `report`
--

INSERT INTO `report` (`date`, `user_id`, `fname`, `lname`, `address`, `amountofbirr`, `phone_No`, `servicetype`, `report`) VALUES
('2016-03-23', 'ccm/123/05', 'kk', 'gg', 'bb', 5666, '77', 'electric billing', ''),
('2005/03/05', 'ram/987/06', 'temesgen', 'tameire', 'arbaminch', 234, '0919670409', 'electric billing', ''),
('2016-03-15', 'ramit/123/07', 'tigst', 'abere', 'arbaminch', 12300, '7777', 'tele billing', ''),
('<br /><b>Notice</b>:  Und', 'tem/234/09', 'ff', 'dd', 'ss', 0, '345re', 'water billing', 'bnn'),
('2016-03-22', 'ten/234/04', 'temu', 'tam', 'arbaminch', 123, '3455', 'water billing', ''),
('<br /><b>Notice</b>:  Und', 'trm/345/08', 'rr', 'ff', 'vvv', 345, '789', 'water billing', ''),
('<br /><b>Notice</b>:  Und', 'trm/345/09', 'tt', 'bb', 'ee', 34, '78', 'water billing', '');

-- --------------------------------------------------------

--
-- Table structure for table `student`
--

CREATE TABLE `student` (
  `FName` char(20) NOT NULL,
  `MName` char(20) NOT NULL,
  `LName` char(20) NOT NULL,
  `SIDNO` varchar(20) NOT NULL,
  `Gender` char(10) NOT NULL,
  `School` char(20) NOT NULL,
  `Department` char(20) NOT NULL,
  `ClassYear` char(20) NOT NULL,
  `Program` char(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `student`
--

INSERT INTO `student` (`FName`, `MName`, `LName`, `SIDNO`, `Gender`, `School`, `Department`, `ClassYear`, `Program`) VALUES
('Ayehu', 'Limenih', 'Gashaw', 'APS/060/02', 'F', 'Agriculture', 'PlantScince', '2nd', 'Regular'),
('Dires', 'Kassa', 'Aragaw', 'chnr/015/04', 'M', 'Health Science', 'Nursing', '1st', 'Regular'),
('Kasahun', 'Amare', 'Burie', 'compr/045/04', 'M', 'Computing', 'IT', '4th', 'Regular'),
('Ashenafi', 'Kirub', 'melese', 'compr/110/04', 'M', 'Computing', 'IT', '4th', 'Regular'),
('Asinake', 'Mulu', 'Melew', 'compr/111/04', 'M', 'Computing', 'IT', '4th', 'Regular'),
('Dejen', 'Anley', 'Truneh', 'compr/119/04', 'M', 'Computing', 'IT', '4th', 'Regular'),
('Mohumed', 'Ali', 'Ahmed', 'compr/136/04', 'M', 'Computing', 'IT', '4th', 'Regular'),
('Tegegn', 'Ababay', 'Abebe', 'compr/143/04', 'M', 'Computing', 'IT', '4th', 'Regular'),
('Banitalem', 'Anley', 'Mekonnen', 'engr/040/04', 'M', 'Engineering', 'Electrical', '4th', 'Regular'),
('Belaynesh', 'Kindie', 'Awoke', 'ncsr/012/05', 'F', 'Natural and Computat', 'biology', '3rd', 'Regular');

-- --------------------------------------------------------

--
-- Table structure for table `transfer`
--

CREATE TABLE `transfer` (
  `first_name` varchar(35) NOT NULL,
  `last_name` varchar(30) NOT NULL,
  `branch` varchar(32) NOT NULL,
  `secretcode` int(35) NOT NULL,
  `amountofbirr` int(34) NOT NULL,
  `date` varchar(34) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `transfer`
--

INSERT INTO `transfer` (`first_name`, `last_name`, `branch`, `secretcode`, `amountofbirr`, `date`) VALUES
('', '', '', 1, 50, ''),
('', '', '', 12, 1000, ''),
('kas', 'alem', 'arrr', 33, 55, '2016-03-29'),
('temesgen', 'tameire', 'cbe', 44, 32, '2016-03-29'),
('kasish', 'alem', 'cbe', 1440, 700, '<br /><b>Notice</b>:  Undefined va'),
('temesgen', 'tameire', 'cbe', 1571, 375, '<br /><b>Notice</b>:  Undefined va');

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
('', '', '', NULL, NULL, 0),
('bank/111/08', 'tom', 'bank', NULL, NULL, 1),
('cus/123/01', 'cus', 'customer', NULL, NULL, 1),
('cus/123/05', 'temu', 'customer', NULL, NULL, 1),
('emp/111/05', 'employee', 'employee', NULL, NULL, 1),
('emp/112/10', 'ff', 'employee', NULL, NULL, 1),
('emp/112/11', '112', '', NULL, NULL, 0),
('emp/112/12', 'emp', 'employee', NULL, NULL, 1),
('emp/112/13', 'emp', 'employee', NULL, NULL, 1),
('ramit/157/00', 'god', 'customer', NULL, NULL, 0),
('ramit/157/05', 'tem', 'customer', NULL, NULL, 1),
('rrr/123/04', 'temu', 'customer', NULL, NULL, 1),
('tem/122/08', '77+977+9', 'employee', NULL, NULL, 1),
('tem/123/08', 'tem12', 'Administrator', NULL, NULL, 1),
('tem/222/07', 'dG9t', 'employee', NULL, NULL, 1),
('tom/123/09', 'tom', 'customer', NULL, NULL, 1),
('ttt/123/09', 'tom', 'customer', NULL, NULL, 1);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `employee`
--
ALTER TABLE `employee`
  ADD PRIMARY KEY (`EIDNO`);

--
-- Indexes for table `preparebill`
--
ALTER TABLE `preparebill`
  ADD PRIMARY KEY (`billNO`);

--
-- Indexes for table `register`
--
ALTER TABLE `register`
  ADD PRIMARY KEY (`user_id`,`house_no`);

--
-- Indexes for table `report`
--
ALTER TABLE `report`
  ADD PRIMARY KEY (`user_id`);

--
-- Indexes for table `student`
--
ALTER TABLE `student`
  ADD PRIMARY KEY (`SIDNO`);

--
-- Indexes for table `transfer`
--
ALTER TABLE `transfer`
  ADD PRIMARY KEY (`secretcode`);

--
-- Indexes for table `useraccount`
--
ALTER TABLE `useraccount`
  ADD PRIMARY KEY (`UserName`),
  ADD KEY `SIDNO` (`SIDNO`),
  ADD KEY `EIDNO` (`EIDNO`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `preparebill`
--
ALTER TABLE `preparebill`
  MODIFY `billNO` int(34) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=780;
--
-- AUTO_INCREMENT for table `register`
--
ALTER TABLE `register`
  MODIFY `user_id` int(30) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;
--
-- AUTO_INCREMENT for table `transfer`
--
ALTER TABLE `transfer`
  MODIFY `secretcode` int(35) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=1572;
--
-- Constraints for dumped tables
--

--
-- Constraints for table `useraccount`
--
ALTER TABLE `useraccount`
  ADD CONSTRAINT `useraccount_ibfk_1` FOREIGN KEY (`SIDNO`) REFERENCES `student` (`SIDNO`),
  ADD CONSTRAINT `useraccount_ibfk_2` FOREIGN KEY (`EIDNO`) REFERENCES `employee` (`EIDNO`);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
