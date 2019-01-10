
-- phpMyAdmin SQL Dump
-- version 3.5.2.2
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Mar 31, 2017 at 04:08 PM
-- Server version: 10.1.22-MariaDB
-- PHP Version: 5.2.17

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `u933211951_test`
--

-- --------------------------------------------------------

--
-- Table structure for table `info`
--

CREATE TABLE IF NOT EXISTS `info` (
  `fname` varchar(50) NOT NULL,
  `mname` varchar(50) DEFAULT NULL,
  `lname` varchar(50) DEFAULT NULL,
  `father` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `mobile` varchar(50) NOT NULL,
  `12` varchar(100) DEFAULT NULL,
  `percentage` bigint(20) NOT NULL,
  `rank` bigint(20) DEFAULT NULL,
  `gender` varchar(50) NOT NULL,
  `stream1` varchar(100) DEFAULT NULL,
  `stream2` varchar(100) DEFAULT NULL,
  `stream3` varchar(100) DEFAULT NULL,
  `address` text NOT NULL,
  `remarks` text,
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `counsellor` varchar(100) DEFAULT NULL,
  `reception` varchar(100) NOT NULL,
  `token` varchar(100) DEFAULT NULL,
  `red_date` date DEFAULT NULL,
  `cs_date` date DEFAULT NULL,
  `r_remarks` text NOT NULL,
  `status` varchar(20) DEFAULT NULL,
  `admin` text,
  `date` varchar(200) DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `mobile` (`mobile`),
  UNIQUE KEY `lname` (`lname`),
  UNIQUE KEY `token` (`token`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=19 ;

-- --------------------------------------------------------

--
-- Table structure for table `logins`
--

CREATE TABLE IF NOT EXISTS `logins` (
  `username` varchar(50) NOT NULL DEFAULT '',
  `password` varchar(50) DEFAULT NULL,
  `name` varchar(100) NOT NULL,
  `desg` varchar(50) DEFAULT NULL,
  `phone` bigint(20) NOT NULL,
  `email` varchar(100) NOT NULL,
  `cno` int(11) DEFAULT '0',
  PRIMARY KEY (`username`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `logins`
--

INSERT INTO `logins` (`username`, `password`, `name`, `desg`, `phone`, `email`, `cno`) VALUES
('reception1', 'Anurag@123', 'Sam', 'level1', 9000311170, 'sameerpvs@gmail.com', 0),
('reception2', 'Anurag@123', 'Valiah', 'level1', 8328363142, 'sameerpvs@gmail.com', 0),
('counsellor', 'agi@cvsr123', 'Pusunuru', 'level2', 9000311170, 'sameerpvs@gmail.com', 3),
('counsellor1', 'agi@cvsr123', 'varma', 'level2', 9000311170, 'sameerpvs@gmail.com', 2),
('counsellor2', 'agi@cvsr123', 'rudra', 'level2', 9000311170, 'sameerpvs@gmail.com', 0),
('admin', 'admin@cvsr123', 'Admin', 'level3', 9000311170, 'sameerpvs@gmail.com', 1);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
