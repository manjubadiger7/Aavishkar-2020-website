-- phpMyAdmin SQL Dump
-- version 4.8.5
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Generation Time: Apr 21, 2020 at 05:45 AM
-- Server version: 5.7.26
-- PHP Version: 7.2.18

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `aavishkar2020`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

DROP TABLE IF EXISTS `admin`;
CREATE TABLE IF NOT EXISTS `admin` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(20) DEFAULT NULL,
  `phone_number` bigint(20) DEFAULT NULL,
  `sem` int(11) DEFAULT NULL,
  `branch` varchar(10) DEFAULT NULL,
  `user_name` varchar(20) DEFAULT NULL,
  `password` varchar(100) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=2 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`id`, `name`, `phone_number`, `sem`, `branch`, `user_name`, `password`) VALUES
(1, 'Manjunath', 8861542134, 8, 'cse', 'manju_badiger', '39c63ddb96a31b9610cd976b896ad4f0');

-- --------------------------------------------------------

--
-- Table structure for table `event1`
--

DROP TABLE IF EXISTS `event1`;
CREATE TABLE IF NOT EXISTS `event1` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `captain_name` varchar(20) DEFAULT NULL,
  `collage` varchar(50) DEFAULT NULL,
  `phone_number` bigint(20) DEFAULT NULL,
  `branch` varchar(20) DEFAULT NULL,
  `email` varchar(20) DEFAULT NULL,
  `part1` varchar(20) DEFAULT NULL,
  `part2` varchar(20) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=12 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `event1`
--

INSERT INTO `event1` (`id`, `captain_name`, `collage`, `phone_number`, `branch`, `email`, `part1`, `part2`) VALUES
(1, 'manjunath', 'kls vdit', 8861542134, 'cse', 'mbadiger@gmail.com', 'vinay', 'shreesha'),
(2, 'vinay', 'kls vdit', 9685695654, 'cse', 'man126@gmail.com', 'manju', 'arabaz'),
(3, 'arabaz', 'kls vdit', 9845708861, 'cse', 'mn@Gmail.com', 'kiran', 'manju'),
(5, 'arabaz', 'kls vdit', 9845708861, 'cse', 'mn@Gmail.com', 'kiran', 'manju'),
(6, 'shreesha', 'kls vdit', 5648759486, 'cse', 'ss@gmail.com', 'hrihi', 'pavan'),
(7, 'shreesha', 'kls vdit', 5648759486, 'cse', 'ss@gmail.com', 'hrihi', 'pavan'),
(8, 'shreesha', 'kls vdit', 5648759486, 'cse', 'ss@gmail.com', 'hrihi', 'pavan'),
(9, 'shreesha', 'kls vdit', 5648759486, 'cse', 'ss@gmail.com', 'hrihi', 'pavan'),
(10, 'hrishi', 'kls vdit', 8861542134, 'cse', 'hr@gmail.com', 'manju', 'arabaz'),
(11, 'Asquare', 'VDIT', 147852369, 'CS', 'abdgf@gmail.com', 'ASDFG', 'FDSAg');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
