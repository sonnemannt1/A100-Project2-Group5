-- phpMyAdmin SQL Dump
-- version 3.5.1
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: May 22, 2013 at 03:32 AM
-- Server version: 5.5.24-log
-- PHP Version: 5.3.13

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `ctnextjobs`
--

-- --------------------------------------------------------

--
-- Table structure for table `employerlogin`
--

CREATE TABLE IF NOT EXISTS `employerlogin` (
  `employerID` int(11) NOT NULL,
  `username` text NOT NULL,
  `password` text NOT NULL,
  `contactEmail` text NOT NULL,
  `companyName` text NOT NULL,
  `location` text NOT NULL,
  `basePay` double NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `employerlogin`
--

INSERT INTO `employerlogin` (`employerID`, `username`, `password`, `contactEmail`, `companyName`, `location`, `basePay`) VALUES
(1, 'tson123', 'tom', 'tson830@yahoo.com', 'Tom''s Coding Company', 'monroe', 12.15);

-- --------------------------------------------------------

--
-- Table structure for table `jobpostings`
--

CREATE TABLE IF NOT EXISTS `jobpostings` (
  `jobName` text NOT NULL,
  `companyName` text NOT NULL,
  `datePosted` date NOT NULL,
  `jobDescription` text NOT NULL,
  `skillsRequired` text NOT NULL,
  `other` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `jobseeker`
--

CREATE TABLE IF NOT EXISTS `jobseeker` (
  `firstName` text NOT NULL,
  `lastName` text NOT NULL,
  `address` text NOT NULL,
  `city` text NOT NULL,
  `state` text NOT NULL,
  `zip` text NOT NULL,
  `emailaddress` text NOT NULL,
  `telephone` text NOT NULL,
  `username` text NOT NULL,
  `password` text NOT NULL,
  `jobseekerID` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `jobseeker`
--

INSERT INTO `jobseeker` (`firstName`, `lastName`, `address`, `city`, `state`, `zip`, `emailaddress`, `telephone`, `username`, `password`, `jobseekerID`) VALUES
('tom', 'sonnemann', '31 bart road', 'monroe', 'connecticut', '06468', 'sonnemann.thomas@gmail.com', '1234567890', 'tson830', '1234', 2);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
