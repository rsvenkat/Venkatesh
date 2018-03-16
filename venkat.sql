-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Mar 10, 2018 at 12:44 PM
-- Server version: 10.1.13-MariaDB
-- PHP Version: 5.6.23

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `venkat`
--

DELIMITER $$
--
-- Functions
--
CREATE DEFINER=`kaligigroup`@`localhost` FUNCTION `TOTAL_WEEKDAYS` (`date1` DATE, `date2` DATE) RETURNS INT(11) RETURN ABS(DATEDIFF(date2, date1)) + 1
     - ABS(DATEDIFF(ADDDATE(date2, INTERVAL 1 - DAYOFWEEK(date2) DAY),
                    ADDDATE(date1, INTERVAL 1 - DAYOFWEEK(date1) DAY))) / 7 * 2
     - (DAYOFWEEK(IF(date1 < date2, date1, date2)) = 1)
     - (DAYOFWEEK(IF(date1 > date2, date1, date2)) = 7)$$

DELIMITER ;

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `id` int(11) NOT NULL,
  `u_name` varchar(255) DEFAULT NULL,
  `pass` varchar(255) DEFAULT NULL,
  `authority` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`id`, `u_name`, `pass`, `authority`) VALUES
(1, 'admin', 'admin', '');

-- --------------------------------------------------------

--
-- Table structure for table `employees`
--

CREATE TABLE `employees` (
  `id` int(11) NOT NULL,
  `empid` varchar(50) NOT NULL,
  `name` varchar(50) NOT NULL,
  `fname` varchar(50) NOT NULL,
  `dateofbirth` date NOT NULL,
  `mobileno` varchar(100) NOT NULL,
  `address` varchar(200) NOT NULL,
  `aadhaarno` varchar(50) NOT NULL,
  `bankname` varchar(50) NOT NULL,
  `bankaccountno` varchar(50) NOT NULL,
  `bankifsccode` varchar(20) NOT NULL,
  `ppfuanno` varchar(50) NOT NULL,
  `esicipno` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `employees`
--

INSERT INTO `employees` (`id`, `empid`, `name`, `fname`, `dateofbirth`, `mobileno`, `address`, `aadhaarno`, `bankname`, `bankaccountno`, `bankifsccode`, `ppfuanno`, `esicipno`) VALUES
(1, '1', 'NARASIMMAN', 'PETHAIAH', '1966-10-11', '9710925885', 'NO.1 Indra Nagar,ST. Thomas Mount Chennai-600016', '249189189463', 'Bank of Baroda', '24250100017633', 'BARBOGIRINA', '101142548844', '5115499247'),
(2, '1', 'KRISHNA', 'MEERAIAH', '1980-06-29', '8754465586', 'No:82,Indra Nagar,ST.ThomasMount Chennai-600016', '', 'State Bank of India', '20225512710', 'SBIN0000956', '101142548918', '5124727089'),
(3, '1', 'DHANAMAIAH', 'IRUMAIYA', '1975-05-06', '9791515279', 'No:62,Indra Nagar,ST.ThomasMount Chennai-600016', '', 'Bank of Baroda', '24250100017608', 'BARBOGIRINA', '101142548871', '5124726650'),
(4, '1', 'PRASAD', 'PENCHALAIAH', '1985-01-02', '7358007018', 'No:32,Indra Nagar,ST.ThomasMount Chennai-600016', '', 'Bank of Baroda', '24250100017626', 'BARBOGIRINA', '101142548902', '5127135509'),
(5, '1', 'CHITTIBABU', 'KAJAH', '1976-01-02', '9952946771', 'NO.8/63 LakshmiAmman Koil Street Nasarathpuram,ST. Thomas Mount Cennai-600016', '', 'Indian Overseas Bank', '158101000013254', 'IOBA0001581', '101142548892', '5127135553'),
(6, '1', 'E.VIJAYAKUMAR', 'BASKAR RAO', '1979-08-09', '9566141869', 'No:128,Indra Nagar,ST.ThomasMount Chennai-600016', '', 'State Bank of India', '31643944437', 'SBIN0000956', '101142548885', '5127135594'),
(7, '1', 'JAMES', 'CHIRSTENAN', '1993-11-21', '9840243590', 'No:175,Indra Nagar,ST.ThomasMount Chennai-600016', '', 'State Bank of India', '20206488392', 'SBIN0000956', '101142548863', '5124727123'),
(8, '1', 'PADMAIAH', 'ERAIYA', '1971-08-21', '9500181039', 'No:120A,Indra Nagar,ST.ThomasMount Chennai-600016', '', 'State Bank of India', '20180409017', 'Sbin0000956', '101142548859', '5124728520'),
(9, '1', 'T.SURESH', 'B THAMBIAH', '1974-03-06', '9962928380', '40 Ramar Kovil StreetNasarathpuram,ST .Thamss Mount Chennai-600016 ', '', 'ICICI BANK', '603801559711', 'ICIC0006038', '101142548837', '5115903719'),
(10, '1', 'SALAVA HITLER', 'SALAVA PENCHALAIAH', '1986-07-20', '9500198409', '', '', 'State Bank of India', '33105634344', 'SBIN0003238', '101142548828', '5127135378'),
(11, '1', 'S.GANESAN', 'SOMASUNDARAM', '1980-06-11', '', '', '', '', '', '', '101134839009', ''),
(12, '1', 'MANOJ', 'S.SEKAR', '1995-06-05', '', '', '', '', '', '', '100531822256', ''),
(13, '1', 'BABULA DOS', '', '0000-00-00', '', '', '', '', '', '', '', ''),
(14, '1', 'HARADHAN PARANIK', 'GOPAL PRAMANIK', '1977-01-02', '', '14/26 CENOTAPH ROAD,TEYNAMPET,Chennai', '', '', '', '', '101199119167', '5127776563'),
(15, '1', 'N.VADIVEL', 'NANJAPPAN', '1988-04-22', '', '', '', '', '', '', '101243474198', ''),
(16, '1', 'K.S.SUNDAR', 'SUDALAIMANI', '1994-08-05', '', '', '', '', '', '', '101243474200', ''),
(17, '1', 'M.NANDAKUMAR', 'MURUGESAN', '1980-04-04', '', 'NO.3/30 Periya Palayathamman Kovil StreetManapakkam Chennai-600125', '', 'Indian Bank', '6260269392', 'IDIB000M267', '101197260025', '5127764698'),
(18, '1', 'G.ABEL', '', '0000-00-00', '', 'NO.12 Indra Nagar,ST. Thomas Mount Chennai-600016', '', '', '', '', '', '5115818318'),
(19, '1', 'S.MAMUDEN', 'SEKAR', '1997-03-28', '', '2/458 A2 AMBEDKARNAGAR CHRUCH RD,MANAPAKKAM,Kanchipuram', '', '', '', '', '101197513857', '5127765085'),
(20, '1', 'KRUPARAO CH', '', '0000-00-00', '', '', '', '', '', '', '', '');

-- --------------------------------------------------------

--
-- Table structure for table `excel_heading`
--

CREATE TABLE `excel_heading` (
  `id` int(11) NOT NULL,
  `excel_id` varchar(255) NOT NULL,
  `heading` varchar(255) NOT NULL,
  `heading_no` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `excel_heading`
--

INSERT INTO `excel_heading` (`id`, `excel_id`, `heading`, `heading_no`) VALUES
(1, '3', 'Sl.no', '1'),
(2, '3', 'Name', '2'),
(3, '3', 'Designation', '3'),
(4, '3', 'UAN NO', '4'),
(5, '3', 'DOB', '5'),
(6, '3', 'Father Name', '6'),
(7, '3', 'Mobile.No', '7'),
(8, '3', 'ESIC IP NO', '8'),
(9, '3', 'Address', '9'),
(10, '3', 'Aadhaar No', '10'),
(11, '3', 'Bank Name', '11'),
(12, '3', 'Bank A/C No.', '12'),
(13, '3', 'Bank IFSC CODE', '13'),
(14, '4', 'Sl.no', '1'),
(15, '4', 'Name', '2'),
(16, '4', 'Designation', '3'),
(17, '4', 'UAN NO', '4'),
(18, '4', 'DOB', '5'),
(19, '4', 'Father Name', '6'),
(20, '4', 'Mobile.No', '7'),
(21, '4', 'ESIC IP NO', '8'),
(22, '4', 'Address', '9'),
(23, '4', 'Aadhaar No', '10'),
(24, '4', 'Bank Name', '11'),
(25, '4', 'Bank A/C No.', '12'),
(26, '4', 'Bank IFSC CODE', '13'),
(27, '5', 'Sl.no', '1'),
(28, '5', 'Name', '2'),
(29, '5', 'Designation', '3'),
(30, '5', 'UAN NO', '4'),
(31, '5', 'DOB', '5'),
(32, '5', 'Father Name', '6'),
(33, '5', 'Mobile.No', '7'),
(34, '5', 'ESIC IP NO', '8'),
(35, '5', 'Address', '9'),
(36, '5', 'Aadhaar No', '10'),
(37, '5', 'Bank Name', '11'),
(38, '5', 'Bank A/C No.', '12'),
(39, '5', 'Bank IFSC CODE', '13'),
(40, '6', 'Sl.no', '1'),
(41, '6', 'Name', '2'),
(42, '6', 'Designation', '3'),
(43, '6', 'UAN NO', '4'),
(44, '6', 'DOB', '5'),
(45, '6', 'Father Name', '6'),
(46, '6', 'Mobile.No', '7'),
(47, '6', 'ESIC IP NO', '8'),
(48, '6', 'Address', '9'),
(49, '6', 'Aadhaar No', '10'),
(50, '6', 'Bank Name', '11'),
(51, '6', 'Bank A/C No.', '12'),
(52, '6', 'Bank IFSC CODE', '13');

-- --------------------------------------------------------

--
-- Table structure for table `excel_record`
--

CREATE TABLE `excel_record` (
  `id` int(11) NOT NULL,
  `sheet_name` varchar(255) NOT NULL,
  `excel_type` varchar(255) NOT NULL,
  `file_size` varchar(255) NOT NULL,
  `head_no` varchar(255) NOT NULL,
  `c_date` varchar(255) NOT NULL,
  `c_time` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `excel_record`
--

INSERT INTO `excel_record` (`id`, `sheet_name`, `excel_type`, `file_size`, `head_no`, `c_date`, `c_time`) VALUES
(1, '18118896_ATTN.xls', 'xls', '0.04MB', '1', '2018-03-10', '14:42:49 PM'),
(2, '56991271_venkat.xls', 'xls', '0.03MB', '1', '2018-03-10', '14:52:54 PM'),
(3, '17673950_venkat.xls', 'xls', '0.03MB', '1', '2018-03-10', '14:53:28 PM'),
(4, '44683837_venkat.xls', 'xls', '0.03MB', '1', '2018-03-10', '16:07:17 PM'),
(5, '60331115_venkat.xls', 'xls', '0.03MB', '1', '2018-03-10', '16:34:04 PM'),
(6, '26798095_venkat.xls', 'xls', '0.03MB', '1', '2018-03-10', '16:41:50 PM');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `employees`
--
ALTER TABLE `employees`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `excel_heading`
--
ALTER TABLE `excel_heading`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `excel_record`
--
ALTER TABLE `excel_record`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `employees`
--
ALTER TABLE `employees`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;
--
-- AUTO_INCREMENT for table `excel_heading`
--
ALTER TABLE `excel_heading`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=53;
--
-- AUTO_INCREMENT for table `excel_record`
--
ALTER TABLE `excel_record`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
