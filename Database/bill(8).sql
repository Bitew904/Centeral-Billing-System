-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: May 29, 2016 at 08:57 AM
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
-- Table structure for table `bank`
--

CREATE TABLE `bank` (
  `first_name` varchar(20) NOT NULL,
  `last_name` varchar(20) NOT NULL,
  `branch` varchar(20) NOT NULL,
  `secretcode` int(25) NOT NULL,
  `amountofbirr` int(20) NOT NULL,
  `date` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `bank`
--

INSERT INTO `bank` (`first_name`, `last_name`, `branch`, `secretcode`, `amountofbirr`, `date`) VALUES
('', '', '', 0, 0, ''),
('temu', 'tom', 'cbe', 1234, 100, '<br /><b>Notice</b>:'),
('kas', 'alemayehu', 'dashin', 1571, 780, '<br /><b>Notice</b>:');

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
('lab/111/02', 'bad', 'customer'),
('ramit/157/01', '1234', 'customer'),
('tem/222/00', 'love', 'customer'),
('tem/222/01', 'mmm', 'employee'),
('tmm/345/07', 'we', 'customer'),
('tmn/234/06', 'dG9t', 'customer'),
('tom/123/02', 'bbb', 'employee');

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
-- Table structure for table `payment`
--

CREATE TABLE `payment` (
  `date` varchar(20) NOT NULL,
  `secretcode` int(20) NOT NULL,
  `amountofbirr` int(20) NOT NULL,
  `service_type` varchar(25) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `payment`
--

INSERT INTO `payment` (`date`, `secretcode`, `amountofbirr`, `service_type`) VALUES
('0', 111, 50, 'water bill'),
('<br /><b>Notice</b>:', 111, 20, 'electric bill'),
('<br /><b>Notice</b>:', 3456, 200, 'electric bill'),
('<br /><b>Notice</b>:', 3456, 89, 'telephone bill'),
('<br /><b>Notice</b>:', 3456, 11, 'water bill'),
('<br /><b>Notice</b>:', 3456, 20, 'water bill'),
('<br /><b>Notice</b>:', 1570, 20, 'electric bill'),
('<br /><b>Notice</b>:', 1570, 20, 'electric bill'),
('<br /><b>Notice</b>:', 3456, 20, 'electric bill'),
('<br /><b>Notice</b>:', 1234, 200, 'water bill'),
('<br /><b>Notice</b>:', 1234, 200, 'water bill'),
('<br /><b>Notice</b>:', 1234, 200, 'water bill'),
('<br /><b>Notice</b>:', 1234, 100, 'electric bill'),
('<br /><b>Notice</b>:', 1234, 45, 'electric bill'),
('<br /><b>Notice</b>:', 1234, 55, 'telephone bill'),
('<br /><b>Notice</b>:', 1571, 100, 'water bill'),
('<br /><b>Notice</b>:', 1234, 100, 'electric bill'),
('<br /><b>Notice</b>:', 1571, 100, 'electric bill'),
('<br /><b>Notice</b>:', 1571, 20, 'telephone bill');

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
('<br /><b>Notice</b>:  Undefined var', 'kass', 'teree', 'arbaminch', 32, 45, 50, 'telephone bill'),
('<br /><b>Notice</b>:  Undefined var', 'temesgen', 'tameire', 'arbaminch', 78, 788, 890, 'electric bill'),
('<br /><b>Notice</b>:  Undefined var', 'try', 'nn', 'mm', 89, 45, 89, 'telephone bill'),
('<br /><b>Notice</b>:  Undefined var', 'hhh', 'gghg', 'ddd', 90, 78, 23, 'electric bill'),
('2016-03-27', 'temesgen', 'tameire', 'arbaminch', 233, 4555, 5677, 'telephone bill'),
('<br /><b>Notice</b>:  Undefined var', 'ggh', 'gghg', 'ghgh', 456, 45, 34, 'water bill'),
('<br /><b>Notice</b>:  Undefined var', 'vhg', 'ghhg', 'ghghg', 666, 677, 77, 'water bill'),
('2016-03-22', 'kas', 'alem', 'arbaminch', 777, 890, 1234, 'electric bill'),
('', '', '', '', 778, 0, 0, ''),
('', '', '', '', 779, 0, 0, '');

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
  `phone_no` varchar(34) NOT NULL,
  `servicetype` varchar(34) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `register`
--

INSERT INTO `register` (`date`, `user_id`, `fname`, `lname`, `address`, `house_no`, `phone_no`, `servicetype`) VALUES
('2016-03-07', 1, 'temu', 'tameire', 'arbaminch', 23, '934568', 'water billing'),
('2016-03-07', 2, 'temu', 'tameire', 'arbaminch', 23, '934568', 'water billing'),
('<br /><b>Notice</b>:  Undefined var', 14, 'tg', 'abre', 'mu', 456, '7889090', 'water billing'),
('<br /><b>Notice</b>:  Undefined var', 15, 'temu', 'tom', '', 0, '0', 'water billing'),
('<br /><b>Notice</b>:  Undefined var', 16, 'temu', 'tom', '', 0, '0', 'water billing'),
('', 17, '', '', '', 0, '', ''),
('', 18, '', '', '', 0, '', '');

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
('<br /><b>Notice</b>:  Und', 'ggh/456/78', 'vvb', 'ggg', 'fgg', 566, '566', 'tele billing', 'ghtg'),
('2005/03/05', 'ram/987/06', 'temesgen', 'tameire', 'arbaminch', 234, '0919670409', 'electric billing', ''),
('<br /><b>Notice</b>:  Und', 'ram/987/08', 'ff', 'fgf', 'ffff', 56, '567777', 'electric billing', 'ghjjhgjgfg'),
('2016-03-15', 'ramit/123/07', 'tigst', 'abere', 'arbaminch', 12300, '7777', 'tele billing', ''),
('<br /><b>Notice</b>:  Und', 'rtee/980/87', 'ff', 'ffffd', 'dfd', 344, '4666', 'water billing', 'gghhhg'),
('<br /><b>Notice</b>:  Und', 'rtr/098/09', 'ffg', 'gfgh', 'vgfgh', 345, '67687', 'water billing', 'vhtgyuuy'),
('<br /><b>Notice</b>:  Und', 'rtty/908/09', 'gfg', 'ggg', 'ghghg', 89, '67888', 'water billing', 'bnhjjhgjnbn'),
('<br /><b>Notice</b>:  Und', 'tem/111/34', 'abebe', 'alemu', 'limat', 120, '0912768543', 'electric billing', 'this is for water billing report'),
('2016-03-22', 'ten/234/04', 'temu', 'tam', 'arbaminch', 123, '3455', 'water billing', ''),
('<br /><b>Notice</b>:  Und', 'trm/345/01', 'temu', 'we', 'rr', 23, '34', 'electric billing', 'gghghhnjh'),
('<br /><b>Notice</b>:  Und', 'tyo/980/09', 'rty', 'hh', 'nn', 890, '90000', 'electric billing', 'hhhjkiooiopoioi');

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
('admin/123/00', 'MTIzNA==', 'Administrator', NULL, NULL, 0),
('bank/111/08', 'tom', 'bank', NULL, NULL, 1),
('comp/123/11', 'MTIzNA==', 'employee', NULL, NULL, 0),
('comp/123/12', 'MTIzNA==', 'customer', NULL, NULL, 0),
('csit/333/33', 'MTIzNA==', 'customer', NULL, NULL, 0),
('emplo/222/22', 'MTIzNA==', 'employee', NULL, NULL, 0),
('lab/000/00', 'MTIzNA==', 'customer', NULL, NULL, 0),
('lab/000/01', 'MTIzNA==', 'employee', NULL, NULL, 0),
('lab/000/02', 'MTIzNA==', 'Administrator', NULL, NULL, 0),
('tom/110/00', 'bGFi', 'customer', NULL, NULL, 0),
('tom/111/09', 'dGVtdQ==', 'customer', NULL, NULL, 0);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `bank`
--
ALTER TABLE `bank`
  ADD PRIMARY KEY (`secretcode`);

--
-- Indexes for table `customer`
--
ALTER TABLE `customer`
  ADD PRIMARY KEY (`UserName`);

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
-- AUTO_INCREMENT for table `preparebill`
--
ALTER TABLE `preparebill`
  MODIFY `billNO` int(34) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=780;
--
-- AUTO_INCREMENT for table `register`
--
ALTER TABLE `register`
  MODIFY `user_id` int(30) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;
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
