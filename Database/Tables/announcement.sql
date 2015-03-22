-- phpMyAdmin SQL Dump
-- version 4.1.14
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Sep 03, 2014 at 12:14 AM
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
-- Table structure for table `announcement`
--

CREATE TABLE IF NOT EXISTS `announcement` (
  `announcement` text NOT NULL,
  `date` date NOT NULL,
  `time` time NOT NULL,
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `subject` text NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=21 ;

--
-- Dumping data for table `announcement`
--

INSERT INTO `announcement` (`announcement`, `date`, `time`, `id`, `subject`) VALUES
('Welcome to Counselling Service.', '2014-08-31', '07:43:03', 1, ''),
('All students are requested to sign up on this portal', '2014-08-31', '10:22:15', 9, ''),
('please tell other students to join this portal.', '2014-08-31', '10:31:27', 10, ''),
('hey all', '2014-08-31', '10:32:33', 11, ''),
('plz sing ', '2014-09-01', '11:39:27', 12, ''),
('lets ______', '2014-09-01', '12:19:51', 13, ''),
('hey all', '2014-09-01', '05:15:22', 14, ''),
('Hi!', '2014-09-02', '06:38:57', 15, ''),
('www.iitk.ac.in', '2014-09-02', '06:39:09', 16, ''),
('hi phy103 AMs', '2014-09-02', '09:05:21', 17, 'phy103'),
('hi phy103 AMs', '2014-09-02', '09:06:33', 18, 'phy103'),
('hi phy103 AMs', '2014-09-02', '09:06:43', 19, 'phy103'),
('abc', '2014-09-02', '09:07:15', 20, 'phy102');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
