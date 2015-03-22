-- phpMyAdmin SQL Dump
-- version 4.1.14
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Aug 17, 2014 at 01:56 PM
-- Server version: 5.6.17
-- PHP Version: 5.5.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `cs_portal`
--

-- --------------------------------------------------------

--
-- Table structure for table `user_data`
--

CREATE TABLE IF NOT EXISTS `user_data` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `username` varchar(30) NOT NULL,
  `rollno` int(11) NOT NULL,
  `name` varchar(60) NOT NULL,
  `dept` varchar(60) NOT NULL,
  `address` varchar(60) NOT NULL,
  `mobileno` varchar(15) NOT NULL,
  `fmobileno` varchar(15) NOT NULL,
  `status` char(1) NOT NULL DEFAULT 's',
  PRIMARY KEY (`id`),
  UNIQUE KEY `rollno` (`rollno`),
  UNIQUE KEY `username` (`username`),
  KEY `id` (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=3 ;

--
-- Dumping data for table `user_data`
--

INSERT INTO `user_data` (`id`, `username`, `rollno`, `name`, `dept`, `address`, `mobileno`, `fmobileno`, `status`) VALUES
(1, 'himnshu', 12298, 'Himanshu Choudhary', 'PHYSICS', 'F-363/2', '8953454946', '9876543210', ''),
(2, 'ayushaga', 13180, 'Ayush Agarwal', 'COMPUTER SCI. AND ENGG.', 'B-416/10', '9876543210', '0123456789', 's');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
