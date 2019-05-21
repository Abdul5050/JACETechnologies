-- phpMyAdmin SQL Dump
-- version 3.5.8.2
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Apr 22, 2016 at 11:28 AM
-- Server version: 5.5.42-37.1-log
-- PHP Version: 5.4.31

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `thechil9_jacedb`
--

-- --------------------------------------------------------

--
-- Table structure for table `jaceusers`
--

DROP TABLE IF EXISTS `jaceusers`;
CREATE TABLE IF NOT EXISTS `jaceusers` (
  `jaceid` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(255) NOT NULL,
  `phonenumber` varchar(255) NOT NULL,
  `emailaddress` varchar(255) NOT NULL,
  `username` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  PRIMARY KEY (`jaceid`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=9 ;

--
-- Dumping data for table `jaceusers`
--

INSERT INTO `jaceusers` (`jaceid`, `name`, `phonenumber`, `emailaddress`, `username`, `password`) VALUES
(1, 'Bill Gate Senior d best', '08055555558', 'jace@gmail.com', 'tactics5050', '6b866f238d35cedb1ccff33027fcdef7e4dc8685'),
(8, 'Abdul Qudus', '08063000902', 'tacticshustle@gmail.com', 'tactola', '827ccb0eea8a706c4c34a16891f84e7b');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
