-- phpMyAdmin SQL Dump
-- version 3.5.1
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Nov 30, 2013 at 11:39 AM
-- Server version: 5.5.24-log
-- PHP Version: 5.3.13

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `realestate`
--

-- --------------------------------------------------------

--
-- Table structure for table `apartments`
--

CREATE TABLE IF NOT EXISTS `apartments` (
  `aptCode` varchar(50) NOT NULL,
  `aptBuildingCode` varchar(50) NOT NULL DEFAULT '0',
  `tenantCode` varchar(50) NOT NULL DEFAULT '0',
  `aptNumber` varchar(50) NOT NULL,
  `rentAmount` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `aptbuilding`
--

CREATE TABLE IF NOT EXISTS `aptbuilding` (
  `aptBuildingCode` varchar(50) NOT NULL,
  `numberOfRooms` int(50) NOT NULL,
  `buildingName` varchar(50) NOT NULL,
  `location` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `houses`
--

CREATE TABLE IF NOT EXISTS `houses` (
  `houseCode` varchar(50) NOT NULL,
  `tenantCode` varchar(50) NOT NULL DEFAULT '0',
  `houseNumber` varchar(30) NOT NULL,
  `estateName` varchar(30) NOT NULL,
  `location` varchar(20) NOT NULL,
  `houseType` varchar(30) NOT NULL,
  `rentAmount` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `landlords`
--

CREATE TABLE IF NOT EXISTS `landlords` (
  `userCode` varchar(50) NOT NULL,
  `firstName` text NOT NULL,
  `secondName` text NOT NULL,
  `idNumber` int(10) NOT NULL,
  `phoneNumber` varchar(20) NOT NULL,
  `location` varchar(50) NOT NULL,
  `email` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `tenants`
--

CREATE TABLE IF NOT EXISTS `tenants` (
  `userCode` varchar(50) NOT NULL,
  `firstName` text NOT NULL,
  `secondName` text NOT NULL,
  `idNumber` int(10) NOT NULL,
  `dob` varchar(100) NOT NULL,
  `occupation` varchar(100) NOT NULL,
  `company` varchar(100) NOT NULL,
  `phoneNumber` varchar(20) NOT NULL,
  `email` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tenants`
--

INSERT INTO `tenants` (`userCode`, `firstName`, `secondName`, `idNumber`, `dob`, `occupation`, `company`, `phoneNumber`, `email`) VALUES
('VNPVQU3NJP', 'furstname', 'second', 134567, '1/1/1', 'occ', 'com', '12345', 'ianmukunya@yahoo.com'),
('0VL6NSMNO2', 'furstname', 'other', 0, '23456', 'sdfghnjm,', 'sdfghjkl', '9765432', 'ianmukunya@yahoo.com');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE IF NOT EXISTS `users` (
  `userCode` varchar(50) NOT NULL,
  `username` varchar(20) NOT NULL,
  `password` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`userCode`, `username`, `password`) VALUES
('VNPVQU3NJP', 'username', '1a1dc91c907325c69271ddf0c944bc'),
('0VL6NSMNO2', 'username', '83878c91171338902e0fe0fb97a8c4');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
