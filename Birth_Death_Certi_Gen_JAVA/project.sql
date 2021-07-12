-- phpMyAdmin SQL Dump
-- version 4.9.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Generation Time: Dec 05, 2020 at 07:29 AM
-- Server version: 8.0.18
-- PHP Version: 7.3.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `project`
--

-- --------------------------------------------------------

--
-- Table structure for table `birth1`
--

DROP TABLE IF EXISTS `birth1`;
CREATE TABLE IF NOT EXISTS `birth1` (
  `reg_no` int(11) NOT NULL AUTO_INCREMENT,
  `firstname` varchar(20) NOT NULL,
  `lastname` varchar(20) NOT NULL,
  `gender` varchar(6) NOT NULL,
  `fname` varchar(20) NOT NULL,
  `mname` varchar(20) NOT NULL,
  `bdate` date NOT NULL,
  `btime` time NOT NULL,
  `place` varchar(20) NOT NULL,
  `hospital` varchar(20) NOT NULL,
  PRIMARY KEY (`reg_no`)
) ENGINE=MyISAM AUTO_INCREMENT=60 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `birth1`
--

INSERT INTO `birth1` (`reg_no`, `firstname`, `lastname`, `gender`, `fname`, `mname`, `bdate`, `btime`, `place`, `hospital`) VALUES
(28, 'Nidhi', 'Unadkat', 'F', 'Atul Unadkat', 'Meeta Unadkat', '1995-10-26', '02:30:00', 'Rajkot', 'Agman'),
(42, 'a', 'a', 'a', 'a', 'a', '2020-10-13', '02:30:00', 'a', 'abc'),
(31, 'Darshan', 'Unadkat', 'M', 'Bhaskar Unadkat', 'Nisha Unadkat', '1999-07-06', '11:11:11', 'Rajkot', 'Dimpal'),
(30, 'Jenish', 'Khagram', 'M', 'Mr. Khagram', 'Mrs. Khagram', '2000-11-11', '02:30:00', 'Rajkot', 'Agman'),
(6, 'Mansee', 'Patel', 'F', 'Kishan Patel', 'Ameeta patel', '2000-07-05', '18:30:00', 'Morbi', 'abc'),
(14, 'Atul', 'Unadkat', 'M', 'Vinodrai Unadkat', 'Manjula Unadkat', '1967-10-20', '01:00:00', 'Gondal Rajkot', 'Civil '),
(29, 'Sumit', 'Sapovadiya', 'M', 'Mr. Sapovadiya', 'Mrs. Sapovadiya', '2000-09-23', '11:11:11', 'Rajkot', 'Agman'),
(24, 'Amee', 'Unadkat', 'F', 'Atul Unadkat', 'Meeta Unadkat', '2000-11-11', '02:30:00', 'Rajkot', 'Dimpal'),
(32, 'Amee', 'Unadkat', 'F', 'Atul Unadkat', 'Meeta Unadkat', '2000-11-11', '07:30:00', 'Rajkot', 'Dimpal'),
(19, 'Amee', 'Unadkat', 'F', 'Atul Unadkat', 'Meeta Unadkat', '1995-10-26', '11:11:11', 'Rajkot', 'Dimpal'),
(26, 'Amee', 'Unadkat', 'F', 'Atul Unadkat', 'Meeta Unadkat', '2000-11-11', '07:30:00', 'Rajkot', 'Agman'),
(27, 'Nidhi', 'Unadkat', 'F', 'Atul Unadkat', 'Meeta Unadkat', '1995-10-26', '02:30:00', 'Rajkot', 'Agman'),
(33, 'Amee', 'Unadkat', 'F', 'Atul Unadkat', 'Meeta Unadkat', '2000-11-11', '07:30:00', 'Rajkot', 'Dimpal'),
(34, 'test', 'test', 'a', 'test', 'test', '1111-11-11', '11:11:11', 'test', 'test'),
(35, 'abc', 'abc', 'a', 'abc', 'abc', '1111-11-11', '11:11:11', 'abc', 'abc'),
(36, 'a', 'a', 'a', 'a', 'a', '1111-11-11', '11:11:11', 'a', 'a'),
(37, 'a', 'a', 'a', 'a', 'a', '1111-11-11', '11:11:11', 'a', 'a'),
(38, 'Amee', 'Unadkat', 'F', 'Atul Unadkat', 'Meeta Unadkat', '2000-11-11', '02:30:00', 'Rajkot', 'Agman'),
(39, 'Amee', 'Unadkat', 'F', 'Atul Unadkat', 'Meeta Unadkat', '2000-11-11', '02:30:00', 'Rajkot', 'Agman'),
(41, 'a', 'a', 'F', 'a', 'a', '2002-10-05', '11:11:11', 'a', 'a'),
(43, 'xvy', 'xvy', 'F', 'Xvy', 'xvy', '2020-10-13', '11:11:11', 'xvy', 'xvy'),
(45, 'Ami ', 'Unadkat', 'F', 'Atul bhai', 'Meeta ben', '2000-11-11', '11:11:11', 'rajkot', 'Agman'),
(46, 'Ami ', 'Unadkat', 'F', 'Atul bhai', 'Meeta ben', '2000-11-11', '11:11:11', 'rajkot', 'Agman'),
(47, 'Amee', 'U', 'F', 'Atul Kumar', 'Meeta Ben', '2000-11-11', '11:11:11', 'Rajkot', 'Agman'),
(48, 'Nidhi', 'U', 'F', 'Atul Bhai', 'Meeta Ben', '1995-10-26', '11:11:11', 'Rajkot', 'Dimpal'),
(49, 'Nidhi', 'U', 'F', 'Atul Bhai', 'Meeta Ben', '1995-10-26', '11:11:11', 'Rajkot', 'Dimpal'),
(50, 'Meeta', 'Chandaana', 'F', 'Lalit', 'Damiyanti', '1973-07-05', '11:11:11', 'Gondal', 'abc'),
(51, 'Meeta', 'Chandaana', 'F', 'Lalit', 'Damiyanti', '1973-07-05', '11:11:11', 'Gondal', 'abc'),
(52, 'c', 'c', 'c', 'c', 'c', '2020-10-06', '11:11:11', 'c', 'c'),
(53, 'x', 'x', 'x', 'x', 'x', '2020-09-30', '11:11:11', 'x', 'x'),
(54, 'x', 'x', 'x', 'x', 'x', '2020-09-30', '11:11:11', 'x', 'x'),
(59, 'aaa', 'aaa', 'a', 'aa', 'aa', '2013-02-12', '11:11:11', 'aa', 'aa');

-- --------------------------------------------------------

--
-- Table structure for table `death`
--

DROP TABLE IF EXISTS `death`;
CREATE TABLE IF NOT EXISTS `death` (
  `reg_no` int(11) NOT NULL,
  `firstname` varchar(20) DEFAULT NULL,
  `lastname` varchar(10) DEFAULT NULL,
  `gender` varchar(10) NOT NULL,
  `fname` varchar(20) DEFAULT NULL,
  `mname` varchar(20) DEFAULT NULL,
  `bdate` date DEFAULT NULL,
  `btime` time DEFAULT NULL,
  `place` varchar(15) DEFAULT NULL,
  `hospital` varchar(20) DEFAULT NULL,
  `ddate` date DEFAULT NULL,
  `dplace` varchar(10) DEFAULT NULL,
  PRIMARY KEY (`reg_no`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `death`
--

INSERT INTO `death` (`reg_no`, `firstname`, `lastname`, `gender`, `fname`, `mname`, `bdate`, `btime`, `place`, `hospital`, `ddate`, `dplace`) VALUES
(5, 'Amee', 'unadkat', 'Female', 'Atul', 'Meeta', '2000-11-11', '07:30:00', 'Rajkot', 'Agman', NULL, NULL),
(6, 'Amee', 'unadkat', 'Female', 'Atul', 'Meeta', '2000-11-11', '07:30:00', 'Rajkot', 'Agman', '2100-11-11', 'Rajkot'),
(1, 'Amee', 'Unadkat', 'F', 'Atul Unadk', 'Meeta Unad', '2000-11-11', '07:30:00', 'Rajkot', 'Dimpal', '2100-11-11', 'Rajkot'),
(3, 'Darshan', 'Unadkat', 'M', 'Bhaskar Unadkat', 'Nisha Unadkat', '1999-07-05', '07:30:00', 'Rajkot Gujarat', 'Agman', '2100-07-05', 'Rajkot'),
(11, 'Darshan', 'Unadkat', 'M', 'Bhaskar Unadkat', 'Nisha Unadkat', '1999-07-05', '07:30:00', 'Rajkot', 'Agman', '2100-11-11', 'Rajkot'),
(2, 'Amee', 'Unadkat', 'F', 'Atul Unadkat', 'Meeta Unadkat', '2000-11-11', '07:30:00', 'Rajkot Gujarat', 'Dimpal', '2100-11-11', 'Rajkot'),
(18, 'Amee', 'Unadkat', 'F', 'Atul Unadkat', 'Meeta Unadkat', '2000-11-11', '07:30:00', 'Rajkot', 'Dimpal', '2000-11-11', 'Rajkot'),
(21, 'test', 'test', 'F', 'test', 'test', '1995-10-26', '07:30:00', 'Rajkot', 'test', '1111-11-11', 'Rajkot'),
(23, 'a', 'ada', 'F', 'test', 'test', '2000-09-23', '02:30:00', 'Rajkot', 'Agman', '2100-11-11', 'Rajkot'),
(16, 'Nidhi', 'Unadkat', 'F', 'Atul Unadkat', 'Meeta Unadkat', '1995-10-26', '02:30:00', 'Rajkot', 'Dimpal', '2100-11-12', 'Rajkot'),
(17, 'Mansee', 'Patel', 'F', 'Kishan Patel', 'Ameeta patel', '1999-07-06', '07:30:00', 'Morbi', 'Dimpal', '2100-11-11', 'Rajkot'),
(7, 'Sumit', 'Sapovadiya', 'M', 'Mr. Sapovadiya', 'Mrs. Sapovadiya', '2000-09-23', '07:30:00', 'Rajkot', 'Dimpal', '2100-11-11', 'Rajkot'),
(15, 'Nidhi', 'Unadkat', 'F', 'Atul Unadkat', 'Meeta Unadkat', '1995-10-26', '02:30:00', 'Rajkot', 'Agman', '2200-11-11', 'Rajkot'),
(12, 'Darshan', 'Unadkat', 'M', 'Bhaskar Unadkat', 'Nisha Unadkat', '1999-07-05', '02:30:00', 'Rajkot', 'Agman', '2100-11-11', 'Rajkot'),
(22, 'mansee', 'Patel', 'F', 'kishan patel', 'ameeta patel', '2000-07-06', '18:30:00', 'Morbi', 'Dimpal', '2100-11-11', 'Rajkot'),
(20, 'Darshan', 'Unadkat', 'M', 'Atul Unadkat', 'Meeta Unadkat', '1999-07-05', '02:30:00', 'Rajkot', 'Dimpal', '2100-11-11', 'Rajkot'),
(25, 'abc', 'abc', 'a', 'abc', 'abc', '1111-11-11', '11:11:11', 'abc', 'abc', '2100-11-11', 'Rajkot'),
(40, 'Amee', 'Unadkat', 'F', 'Atul Unadkat', 'Meeta Unadkat', '2000-11-11', '02:30:00', 'Rajkot', 'Agman', '2100-11-11', 'Rajkot'),
(58, 'm', 'm', 'm', 'm', 'm', '2020-10-13', '11:11:11', 'm', 'm', '2020-10-20', 'm'),
(56, 'ami', 'Unadkat', 'F', 'Atul Unadkat', 'Meeta Unadkat', '2000-11-11', '07:30:00', 'Rajkot', 'Agman', '2561-01-11', 'rajkot'),
(57, 'ameee', 'Unadkat', 'F', 'Atul Unadkat', 'Meeta Unadkat', '2000-11-11', '02:00:00', 'Rajkot', 'Agman', '2116-11-11', 'aa'),
(55, 'm', 'm', 'm', 'm', 'm', '2020-10-06', '02:30:00', 'm', 'm', '2116-11-11', 'aa');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
