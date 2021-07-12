-- phpMyAdmin SQL Dump
-- version 5.1.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: May 07, 2021 at 07:20 AM
-- Server version: 10.4.18-MariaDB
-- PHP Version: 7.4.16

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
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
-- Table structure for table `adminregister`
--

CREATE TABLE `adminregister` (
  `id` int(5) NOT NULL,
  `fname` varchar(50) CHARACTER SET utf16 COLLATE utf16_croatian_mysql561_ci NOT NULL,
  `lname` varchar(50) CHARACTER SET utf16 COLLATE utf16_croatian_mysql561_ci NOT NULL,
  `mobile` varchar(10) CHARACTER SET utf16 COLLATE utf16_croatian_mysql561_ci NOT NULL,
  `address` varchar(50) CHARACTER SET utf16 COLLATE utf16_croatian_mysql561_ci NOT NULL,
  `password` varchar(10) CHARACTER SET utf16 COLLATE utf16_croatian_mysql561_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `adminregister`
--

INSERT INTO `adminregister` (`id`, `fname`, `lname`, `mobile`, `address`, `password`) VALUES
(1, 'Nidhu', 'Unadkat', '9408834430', 'Rajkot, Gujarat', 'nidhi1995'),
(2, 'Amee', 'Unadkat', '9484565006', 'Rajkot', 'amee2000'),
(3, 'Darshan ', 'Unadkat', '9265311299', 'Rajkot, Gujarat', 'darshan123');

-- --------------------------------------------------------

--
-- Table structure for table `birth`
--

CREATE TABLE `birth` (
  `reg_id` int(11) NOT NULL,
  `bdate` date NOT NULL,
  `gender` varchar(10) NOT NULL,
  `fullname` varchar(30) NOT NULL,
  `fname` varchar(30) NOT NULL,
  `mname` varchar(30) NOT NULL,
  `bplace` varchar(30) NOT NULL,
  `btime` varchar(30) NOT NULL,
  `bhospital` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `birth`
--

INSERT INTO `birth` (`reg_id`, `bdate`, `gender`, `fullname`, `fname`, `mname`, `bplace`, `btime`, `bhospital`) VALUES
(1, '2000-11-11', 'Female', 'Amee Unadkat', 'Atul Unadkat', 'Meeta Unadkat', 'Rajkot', '02:30 AM', 'Agman'),
(2, '1995-10-26', 'Female', 'Nidhi Unadkat', 'Atul Unadkat', 'Meeta Unadkat', 'Rajkot', '07:00 AM', 'Agman'),
(3, '2000-07-06', 'Female', 'Mansee Patel', 'Mr. Patel', 'Mrs. Patel', 'Morbi', '02:00 AM', 'abc'),
(4, '2021-04-29', 'Female', 'a', 'a', 'a', 'a', 'a', 'a'),
(5, '2021-05-13', 'Female', 'A', 'A', 'A', 'A', 'A', 'A'),
(6, '2021-04-28', 'Male', 'Darshan ', 'D', 'D', 'D', 'D', 'D'),
(7, '2021-05-07', 'Male', 'Darshan Unadkat', 'Bhasker', 'Nisha', 'Rajkot', '7:30 pm', 'Agman'),
(8, '1973-07-05', 'Female', 'Meeta Unadkat', 'Lalit Chandarana', 'Damiyanti Chandarana', 'Lalpur', '11:30 PM', 'Agman'),
(9, '2021-05-26', 'Male', 'Darshan U', 'Bhasker', 'Nisha', 'Rajkot', '07:00 AM', 'ABC');

-- --------------------------------------------------------

--
-- Table structure for table `death`
--

CREATE TABLE `death` (
  `reg_id` int(11) NOT NULL,
  `ddate` date NOT NULL,
  `dgn` varchar(10) NOT NULL,
  `dfullname` varchar(30) NOT NULL,
  `dfather` varchar(30) NOT NULL,
  `dmother` varchar(30) NOT NULL,
  `dplace` varchar(30) NOT NULL,
  `dtime` varchar(30) NOT NULL,
  `dhospital` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `death`
--

INSERT INTO `death` (`reg_id`, `ddate`, `dgn`, `dfullname`, `dfather`, `dmother`, `dplace`, `dtime`, `dhospital`) VALUES
(1, '2050-11-11', 'Female', 'Amee Unadkat', 'Atul Unadkat', 'Meeta Unadkat', 'Rajkot', '02:30 AM', 'Agman'),
(2, '2123-12-27', 'Male', 'X', 'X', 'X', 'X', 'X', 'X'),
(20, '2021-04-29', 'Male', 'Atul Unadkat', 'V', 'M', 'X', 'X', 'X'),
(21, '2021-05-05', 'Male', 'M', 'a', 'a', 'a', 'a', 'a');

-- --------------------------------------------------------

--
-- Table structure for table `register`
--

CREATE TABLE `register` (
  `id` int(5) NOT NULL,
  `fname` varchar(50) DEFAULT NULL,
  `lname` varchar(50) DEFAULT NULL,
  `mobile` varchar(10) DEFAULT NULL,
  `address` varchar(50) DEFAULT NULL,
  `password` varchar(10) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `register`
--

INSERT INTO `register` (`id`, `fname`, `lname`, `mobile`, `address`, `password`) VALUES
(2, 'Amee', 'Unadkat', '9265311299', 'Rajkot', 'amee1111'),
(8, 'Nidhii', 'Unadkat', '7016932342', 'Rajkot', 'nidhi111');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `adminregister`
--
ALTER TABLE `adminregister`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `birth`
--
ALTER TABLE `birth`
  ADD PRIMARY KEY (`reg_id`);

--
-- Indexes for table `death`
--
ALTER TABLE `death`
  ADD PRIMARY KEY (`reg_id`);

--
-- Indexes for table `register`
--
ALTER TABLE `register`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `adminregister`
--
ALTER TABLE `adminregister`
  MODIFY `id` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `birth`
--
ALTER TABLE `birth`
  MODIFY `reg_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `death`
--
ALTER TABLE `death`
  MODIFY `reg_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=22;

--
-- AUTO_INCREMENT for table `register`
--
ALTER TABLE `register`
  MODIFY `id` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
