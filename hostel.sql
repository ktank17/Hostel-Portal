-- phpMyAdmin SQL Dump
-- version 4.7.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Mar 09, 2018 at 02:29 PM
-- Server version: 10.1.26-MariaDB
-- PHP Version: 7.1.9

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `hostel`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `Sr_no` float NOT NULL,
  `Email` varchar(20) DEFAULT NULL,
  `Password` varchar(20) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`Sr_no`, `Email`, `Password`) VALUES
(1, 'admin', 'admin12345');

-- --------------------------------------------------------

--
-- Table structure for table `configuration`
--

CREATE TABLE `configuration` (
  `Sr_no` float NOT NULL,
  `Seats` float DEFAULT NULL,
  `Location` varchar(35) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `configuration`
--

INSERT INTO `configuration` (`Sr_no`, `Seats`, `Location`) VALUES
(1, 65, 'kllo');

-- --------------------------------------------------------

--
-- Table structure for table `finalist`
--

CREATE TABLE `finalist` (
  `Merit_Rank` float NOT NULL,
  `User_ID` float DEFAULT NULL,
  `Name` varchar(35) DEFAULT NULL,
  `Email` varchar(35) DEFAULT NULL,
  `City` varchar(20) DEFAULT NULL,
  `Distance` float DEFAULT NULL,
  `Contact` varchar(20) DEFAULT NULL,
  `Gender` varchar(20) DEFAULT NULL,
  `Percentage` float DEFAULT NULL,
  `Quota` varchar(20) DEFAULT NULL,
  `Score` float DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `finalist`
--

INSERT INTO `finalist` (`Merit_Rank`, `User_ID`, `Name`, `Email`, `City`, `Distance`, `Contact`, `Gender`, `Percentage`, `Quota`, `Score`) VALUES
(1, 2, 'yash ayhsash ays', 'yash', 'ahmedabad', 85, '15168485', 'male', 88, 'gen', 86.2),
(2, 3, 'yash ayhsash ays', 'yashkl', 'ahmedabad', 85, '1516848552', 'male', 88, 'gen', 86.2),
(3, 4, 'ra hsb r', 'ssss', 'ahmedabad', 85, '56846', 'male', 88, 'gen', 86.2),
(4, 5, 'ra hsb r', 'sssskl', 'ahmedabad', 85, '568502', 'male', 88, 'gen', 86.2);

-- --------------------------------------------------------

--
-- Table structure for table `info`
--

CREATE TABLE `info` (
  `User_ID` float NOT NULL,
  `Name` varchar(35) DEFAULT NULL,
  `Email` varchar(35) DEFAULT NULL,
  `Password` varchar(20) DEFAULT NULL,
  `City` varchar(20) DEFAULT NULL,
  `Distance` float DEFAULT NULL,
  `Contact` varchar(20) DEFAULT NULL,
  `Gender` varchar(20) DEFAULT NULL,
  `Percentage` float DEFAULT NULL,
  `Quota` varchar(20) DEFAULT NULL,
  `Score` float DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `info`
--

INSERT INTO `info` (`User_ID`, `Name`, `Email`, `Password`, `City`, `Distance`, `Contact`, `Gender`, `Percentage`, `Quota`, `Score`) VALUES
(3, 'yash ayhsash ays', 'yashkl', 'kl', 'ahmedabad', 85, '1516848552', 'male', 88, 'gen', 86.2),
(4, 'ra hsb r', 'ssss', '12', 'ahmedabad', 85, '56846', 'male', 88, 'gen', 86.2),
(5, 'ra hsb r', 'sssskl', '45', 'ahmedabad', 85, '568502', 'male', 88, 'gen', 86.2);

-- --------------------------------------------------------

--
-- Table structure for table `merit`
--

CREATE TABLE `merit` (
  `Merit_Rank` float NOT NULL,
  `User_ID` float DEFAULT NULL,
  `Name` varchar(35) DEFAULT NULL,
  `Email` varchar(35) DEFAULT NULL,
  `City` varchar(20) DEFAULT NULL,
  `Distance` float DEFAULT NULL,
  `Contact` varchar(20) DEFAULT NULL,
  `Gender` varchar(20) DEFAULT NULL,
  `Percentage` float DEFAULT NULL,
  `Quota` varchar(20) DEFAULT NULL,
  `Score` float DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `merit`
--

INSERT INTO `merit` (`Merit_Rank`, `User_ID`, `Name`, `Email`, `City`, `Distance`, `Contact`, `Gender`, `Percentage`, `Quota`, `Score`) VALUES
(1, 2, 'yash ayhsash ays', 'yash', 'ahmedabad', 85, '15168485', 'male', 88, 'gen', 86.2),
(2, 3, 'yash ayhsash ays', 'yashkl', 'ahmedabad', 85, '1516848552', 'male', 88, 'gen', 86.2),
(3, 4, 'ra hsb r', 'ssss', 'ahmedabad', 85, '56846', 'male', 88, 'gen', 86.2),
(4, 5, 'ra hsb r', 'sssskl', 'ahmedabad', 85, '568502', 'male', 88, 'gen', 86.2);

-- --------------------------------------------------------

--
-- Table structure for table `waiting`
--

CREATE TABLE `waiting` (
  `Merit_Rank` float NOT NULL,
  `User_ID` float DEFAULT NULL,
  `Name` varchar(35) DEFAULT NULL,
  `Email` varchar(35) DEFAULT NULL,
  `City` varchar(20) DEFAULT NULL,
  `Distance` float DEFAULT NULL,
  `Contact` varchar(20) DEFAULT NULL,
  `Gender` varchar(20) DEFAULT NULL,
  `Percentage` float DEFAULT NULL,
  `Quota` varchar(20) DEFAULT NULL,
  `Score` float DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`Sr_no`);

--
-- Indexes for table `finalist`
--
ALTER TABLE `finalist`
  ADD PRIMARY KEY (`Merit_Rank`);

--
-- Indexes for table `info`
--
ALTER TABLE `info`
  ADD PRIMARY KEY (`User_ID`);

--
-- Indexes for table `merit`
--
ALTER TABLE `merit`
  ADD PRIMARY KEY (`Merit_Rank`);

--
-- Indexes for table `waiting`
--
ALTER TABLE `waiting`
  ADD PRIMARY KEY (`Merit_Rank`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
  MODIFY `Sr_no` float NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `info`
--
ALTER TABLE `info`
  MODIFY `User_ID` float NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `merit`
--
ALTER TABLE `merit`
  MODIFY `Merit_Rank` float NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
