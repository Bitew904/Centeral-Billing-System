-- phpMyAdmin SQL Dump
-- version 3.5.2.2
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Jun 10, 2015 at 01:02 PM
-- Server version: 5.5.27
-- PHP Version: 5.4.7

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `clearancesystem`
--

-- --------------------------------------------------------

--
-- Table structure for table `clerancesignedstudent`
--

CREATE TABLE IF NOT EXISTS `clerancesignedstudent` (
  `ClearanceNo` int(20) NOT NULL AUTO_INCREMENT,
  `SIDNO` varchar(20) NOT NULL,
  `Status` char(10) NOT NULL,
  `Semister` varchar(20) NOT NULL,
  `Reason` char(20) NOT NULL,
  `Date` date NOT NULL,
  `EIDNO` varchar(20) NOT NULL,
  PRIMARY KEY (`ClearanceNo`),
  KEY `SIDNO` (`SIDNO`),
  KEY `EIDNO` (`EIDNO`),
  KEY `EIDNO_2` (`EIDNO`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=15 ;

--
-- Dumping data for table `clerancesignedstudent`
--

INSERT INTO `clerancesignedstudent` (`ClearanceNo`, `SIDNO`, `Status`, `Semister`, `Reason`, `Date`, `EIDNO`) VALUES
(6, 'aps/060/02', 'Approved', '2nd', 'endofyear', '2015-10-15', 'emplo/001/07'),
(7, 'engr/040/04', 'Approved', '2nd', 'endofyear', '2015-10-26', 'emplo/001/07'),
(9, 'engr/040/04', 'Approved', '2nd', 'End of year', '2015-05-24', 'emplo/001/07'),
(13, 'chnr/015/04', 'Approved', '1rst', 'end of year', '2015-10-22', 'emplo/001/07'),
(14, 'chnr/015/04', 'Approved', '2nd', '', '2015-10-22', 'emplo/001/07');

-- --------------------------------------------------------

--
-- Table structure for table `employee`
--

CREATE TABLE IF NOT EXISTS `employee` (
  `FName` char(20) NOT NULL,
  `MName` char(20) NOT NULL,
  `LName` char(20) NOT NULL,
  `Gender` char(20) NOT NULL,
  `EIDNO` varchar(20) NOT NULL,
  `JobClass` char(50) NOT NULL,
  `Education` char(20) NOT NULL,
  `DepartmentName` char(50) NOT NULL,
  PRIMARY KEY (`EIDNO`)
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
-- Table structure for table `materiallendstudent`
--

CREATE TABLE IF NOT EXISTS `materiallendstudent` (
  `lendno` int(10) NOT NULL AUTO_INCREMENT,
  `SIDNO` varchar(20) NOT NULL,
  `MaterialName` char(50) NOT NULL,
  `MaterialID` varchar(20) NOT NULL,
  `BorrowedDate` date NOT NULL,
  `ProcurmentOffice` varchar(50) NOT NULL,
  `EIDNO` varchar(20) NOT NULL,
  PRIMARY KEY (`lendno`),
  KEY `SIDNO` (`SIDNO`),
  KEY `EIDNO` (`EIDNO`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=6 ;

--
-- Dumping data for table `materiallendstudent`
--

INSERT INTO `materiallendstudent` (`lendno`, `SIDNO`, `MaterialName`, `MaterialID`, `BorrowedDate`, `ProcurmentOffice`, `EIDNO`) VALUES
(2, 'compr/119/04', 'Millcard', '12012', '2015-06-30', 'DininigOfficer', 'emplo/100/01'),
(4, 'compr/119/04', 'fasdfgdfgdf', '3222', '2015-10-26', 'Cumpussecurityofficer', 'emplo/102/01'),
(5, 'chnr/015/04', 'asdfasdfsdagf', 'f32431234', '2015-10-17', 'Cumpussecurityofficer', 'emplo/102/01');

-- --------------------------------------------------------

--
-- Table structure for table `student`
--

CREATE TABLE IF NOT EXISTS `student` (
  `FName` char(20) NOT NULL,
  `MName` char(20) NOT NULL,
  `LName` char(20) NOT NULL,
  `SIDNO` varchar(20) NOT NULL,
  `Gender` char(10) NOT NULL,
  `School` char(20) NOT NULL,
  `Department` char(20) NOT NULL,
  `ClassYear` char(20) NOT NULL,
  `Program` char(20) NOT NULL,
  PRIMARY KEY (`SIDNO`)
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

CREATE TABLE IF NOT EXISTS `useraccount` (
  `UserName` varchar(20) NOT NULL,
  `Password` varchar(20) NOT NULL,
  `Role` char(20) NOT NULL,
  `SIDNO` varchar(20) DEFAULT NULL,
  `EIDNO` varchar(20) DEFAULT NULL,
  `Status` int(20) NOT NULL,
  PRIMARY KEY (`UserName`),
  KEY `SIDNO` (`SIDNO`),
  KEY `EIDNO` (`EIDNO`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `useraccount`
--

INSERT INTO `useraccount` (`UserName`, `Password`, `Role`, `SIDNO`, `EIDNO`, `Status`) VALUES
('aps/060/02', 'MDYw', 'student', 'APS/060/02', NULL, 1),
('chnr/015/04', 'MDE1', 'student', 'chnr/015/04', NULL, 1),
('compr/045/04', 'MDQ1', 'student', 'compr/045/04', NULL, 1),
('compr/110/04', 'MTEw', 'student', 'compr/110/04', NULL, 1),
('compr/111/04', 'MTFhcw==', 'student', 'compr/111/04', NULL, 1),
('compr/119/04', 'MTE5ZGVq', 'student', 'compr/119/04', NULL, 1),
('compr/136/04', 'MTM2', 'student', 'compr/136/04', NULL, 1),
('compr/143/04', 'MTQz', 'student', 'compr/143/04', NULL, 1),
('emplo/001/07', 'MDAxcmVn', 'RegistrarOfficer', NULL, 'emplo/001/07', 1),
('emplo/100/01', 'MTAw', 'officer', NULL, 'emplo/100/01', 1),
('emplo/101/01', 'MTAx', 'officer', NULL, 'emplo/101/01', 1),
('emplo/102/01', 'MTAy', 'officer', NULL, 'emplo/102/01', 1),
('emplo/103/01', 'MTAz', 'officer', NULL, 'emplo/103/01', 1),
('emplo/104/01', 'MTA0', 'officer', NULL, 'emplo/104/01', 1),
('emplo/113/04', 'MTEz', 'officer', NULL, 'emplo/113/04', 1),
('emplo/114/04', 'MTE0', 'officer', NULL, 'emplo/114/04', 1),
('emplo/121/04', 'MTIx', 'officer', NULL, 'emplo/121/04', 1),
('emplo/122/01', 'MTIy', 'officer', NULL, 'emplo/122/01', 1),
('emplo/123/05', 'MTIz', 'officer', NULL, 'emplo/123/05', 1),
('emplo/123/06', 'MTIz', 'officer', NULL, 'emplo/123/06', 1),
('emplo/124/02', 'MTI0', 'officer', NULL, 'emplo/124/02', 1),
('emplo/124/03', 'MTI0', 'officer', NULL, 'emplo/124/03', 1),
('emplo/125/02', 'MTI1', 'officer', NULL, 'emplo/125/02', 1),
('emplo/126/03', 'MTI2', 'officer', NULL, 'emplo/126/03', 1),
('emplo/127/02', 'MTI3', 'officer', NULL, 'emplo/127/02', 1),
('emplo/127/03', 'MTI3', 'officer', NULL, 'emplo/127/03', 1),
('emplo/128/03', 'MTI4', 'officer', NULL, 'emplo/128/03', 1),
('emplo/129/02', 'MTI5', 'officer', NULL, 'emplo/129/02', 1),
('emplo/129/04', 'MTI5', 'officer', NULL, 'emplo/129/04', 1),
('emplo/129/05', 'MTI5', 'officer', NULL, 'emplo/129/05', 1),
('emplo/130/03', 'MTMw', 'officer', NULL, 'emplo/130/03', 1),
('emplo/131/02', 'MTMx', 'officer', NULL, 'emplo/131/02', 1),
('emplo/133/02', 'MTMz', 'officer', NULL, 'emplo/133/02', 1),
('emplo/136/05', 'MTM2', 'officer', NULL, 'emplo/136/05', 1),
('emplo/202/04', 'MjAy', 'officer', NULL, 'emplo/202/04', 1),
('emplo/203/04', 'MjAz', 'officer', NULL, 'emplo/203/04', 1),
('emplo/204/04', 'MjA0', 'officer', NULL, 'emplo/204/04', 1),
('emplo/205/04', 'MjA1', 'officer', NULL, 'emplo/205/04', 1),
('emplo/206/04', 'MjA2', 'officer', NULL, 'emplo/206/04', 1),
('emplo/207/04', 'MjA3', 'officer', NULL, 'emplo/207/04', 1),
('emplo/208/04', 'MjA4', 'officer', NULL, 'emplo/208/04', 1),
('emplo/210/04', 'MjEw', 'officer', NULL, 'emplo/210/04', 1),
('emplo/211/04', 'MjEx', 'officer', NULL, 'emplo/211/04', 1),
('emplo/212/04', 'MjEy', 'officer', NULL, 'emplo/212/04', 1),
('emplo/213/03', 'MjEz', 'officer', NULL, 'emplo/213/03', 1),
('engr/040/04', 'MDQw', 'student', 'engr/040/04', NULL, 1),
('ncsr/012/05', 'MDEy', 'student', 'ncsr/012/05', NULL, 1);

--
-- Constraints for dumped tables
--

--
-- Constraints for table `clerancesignedstudent`
--
ALTER TABLE `clerancesignedstudent`
  ADD CONSTRAINT `clerancesignedstudent_ibfk_1` FOREIGN KEY (`SIDNO`) REFERENCES `student` (`SIDNO`),
  ADD CONSTRAINT `clerancesignedstudent_ibfk_2` FOREIGN KEY (`EIDNO`) REFERENCES `employee` (`EIDNO`);

--
-- Constraints for table `materiallendstudent`
--
ALTER TABLE `materiallendstudent`
  ADD CONSTRAINT `materiallendstudent_ibfk_1` FOREIGN KEY (`SIDNO`) REFERENCES `student` (`SIDNO`),
  ADD CONSTRAINT `materiallendstudent_ibfk_2` FOREIGN KEY (`EIDNO`) REFERENCES `employee` (`EIDNO`);

--
-- Constraints for table `useraccount`
--
ALTER TABLE `useraccount`
  ADD CONSTRAINT `useraccount_ibfk_1` FOREIGN KEY (`SIDNO`) REFERENCES `student` (`SIDNO`),
  ADD CONSTRAINT `useraccount_ibfk_2` FOREIGN KEY (`EIDNO`) REFERENCES `employee` (`EIDNO`);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
