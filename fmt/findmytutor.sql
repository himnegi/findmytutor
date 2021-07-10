-- phpMyAdmin SQL Dump
-- version 5.1.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jun 19, 2021 at 07:32 AM
-- Server version: 10.4.19-MariaDB
-- PHP Version: 7.3.28

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `findmytutor`
--

-- --------------------------------------------------------

--
-- Table structure for table `studentlogin`
--

CREATE TABLE `studentlogin` (
  `userid` varchar(30) NOT NULL,
  `email` varchar(30) NOT NULL,
  `pasword` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `studentlogin`
--

INSERT INTO `studentlogin` (`userid`, `email`, `pasword`) VALUES
('1', 'himanshunegi635@gmail.com', '123'),
('2', '2@gmail.com', '2'),
('3', '3@gmail.com', '3'),
('4', '42@gmail.com', '4'),
('7', '7@gmail.com', '7'),
('9', '9@gmail.com', '123'),
('abc', 'abc@gmail.com', '123'),
('abc1', 'abc1@gmail.com', '123'),
('jk', 'jk@gmail.com', '123'),
('yogi', 'yogi@gmail.com', '123');

-- --------------------------------------------------------

--
-- Table structure for table `studentotherinfo`
--

CREATE TABLE `studentotherinfo` (
  `username` varchar(30) NOT NULL,
  `standard` varchar(30) NOT NULL,
  `state` varchar(30) NOT NULL,
  `city` varchar(30) NOT NULL,
  `pincode` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `studentotherinfo`
--

INSERT INTO `studentotherinfo` (`username`, `standard`, `state`, `city`, `pincode`) VALUES
('abc1', 'four', 'Assam', 'JAHANGIR PURI', 110033),
('2', 'three', 'Delhi', 'JAHANGIR PURI', 110033),
('2', 'three', 'Andaman and Nicobar Islands', 'JAHANGIR PURI', 110033),
('yogi1', 'one', 'Andhra Pradesh', '', 0),
('yogi', 'one', 'Andhra Pradesh', '', 0),
('yogi', 'four', 'Delhi', 'JAHANGIR PURI', 110033),
('2', 'one', 'Delhi', 'JAHANGIR PURI', 110033),
('yogi', 'ten', 'Delhi', 'JAHANGIR PURI', 110033),
('9', 'one', 'Assam', '9ii', 9);

-- --------------------------------------------------------

--
-- Table structure for table `studentpersonalinfo`
--

CREATE TABLE `studentpersonalinfo` (
  `username` varchar(30) NOT NULL,
  `name` varchar(30) NOT NULL,
  `institution` varchar(30) NOT NULL,
  `contact` bigint(10) NOT NULL,
  `age` int(3) NOT NULL,
  `gender` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `studentpersonalinfo`
--

INSERT INTO `studentpersonalinfo` (`username`, `name`, `institution`, `contact`, `age`, `gender`) VALUES
('2', 'contact ', ' asd', 9868251364, 3, 'female'),
('9', 'HIMANSHU NEGI ', ' ;lkjhgty', 0, 3, 'female'),
('abc', 'himanshu negi ', ' asd', 2147483647, 24, 'male'),
('abc1', 'shivam negi ', ' bvicam', 3, 3, 'male'),
('yogi', 'yogender ', ' university', 112233456, 45, 'female');

-- --------------------------------------------------------

--
-- Table structure for table `tutorlogin`
--

CREATE TABLE `tutorlogin` (
  `userid` varchar(30) NOT NULL,
  `email` varchar(50) NOT NULL,
  `pasword` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tutorlogin`
--

INSERT INTO `tutorlogin` (`userid`, `email`, `pasword`) VALUES
('2', '2@gmail.com', '2'),
('3', '3@gmail.com', '3'),
('4', '4@gmail.com', '4'),
('7', '7@gmail.com', '7'),
('yogi1', 'yogi1@gmail.com', '123');

-- --------------------------------------------------------

--
-- Table structure for table `tutorotherinfo`
--

CREATE TABLE `tutorotherinfo` (
  `username` varchar(30) NOT NULL,
  `qualification` varchar(30) NOT NULL,
  `course` varchar(30) NOT NULL,
  `experience` varchar(30) NOT NULL,
  `state` varchar(20) NOT NULL,
  `city` varchar(30) NOT NULL,
  `pincode` int(8) NOT NULL,
  `otherinfo` varchar(500) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tutorotherinfo`
--

INSERT INTO `tutorotherinfo` (`username`, `qualification`, `course`, `experience`, `state`, `city`, `pincode`, `otherinfo`) VALUES
('4', 'masters', 'mca', 'two', 'Assam', 'JAHANGIR PURI', 110033, 'nhnhhhhhhhhhhhhh'),
('7', 'masters', 'mca', 'four', 'Assam', 'JAHANGIR PURI', 110033, 'kjhgfdfghjkl;');

-- --------------------------------------------------------

--
-- Table structure for table `tutorpersonalinfo`
--

CREATE TABLE `tutorpersonalinfo` (
  `username` varchar(30) NOT NULL,
  `name` varchar(30) NOT NULL,
  `contact` bigint(10) NOT NULL,
  `age` int(3) NOT NULL,
  `gender` varchar(8) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tutorpersonalinfo`
--

INSERT INTO `tutorpersonalinfo` (`username`, `name`, `contact`, `age`, `gender`) VALUES
('2', 'mnb', 9868251364, 24, 'female'),
('3', 'himanshi negi', 9868251364, 24, 'female'),
('4', 'himanshu ', 9868251364, 4, 'female'),
('7', 'himanshu negi', 9868251364, 24, 'male');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `studentlogin`
--
ALTER TABLE `studentlogin`
  ADD PRIMARY KEY (`userid`);

--
-- Indexes for table `studentpersonalinfo`
--
ALTER TABLE `studentpersonalinfo`
  ADD PRIMARY KEY (`username`);

--
-- Indexes for table `tutorlogin`
--
ALTER TABLE `tutorlogin`
  ADD PRIMARY KEY (`userid`);

--
-- Indexes for table `tutorotherinfo`
--
ALTER TABLE `tutorotherinfo`
  ADD PRIMARY KEY (`username`);

--
-- Indexes for table `tutorpersonalinfo`
--
ALTER TABLE `tutorpersonalinfo`
  ADD PRIMARY KEY (`username`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
