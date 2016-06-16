-- phpMyAdmin SQL Dump
-- version 4.0.10deb1
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Jun 16, 2016 at 12:14 PM
-- Server version: 5.5.49-0ubuntu0.14.04.1
-- PHP Version: 5.5.9-1ubuntu4.17

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `doingiteasy`
--

-- --------------------------------------------------------

--
-- Table structure for table `application`
--

CREATE TABLE IF NOT EXISTS `application` (
  `app_id` int(11) NOT NULL AUTO_INCREMENT,
  `student_id` int(11) NOT NULL,
  `company_id` int(11) NOT NULL,
  `intern_id` int(11) NOT NULL,
  PRIMARY KEY (`app_id`),
  KEY `student_id` (`student_id`,`intern_id`,`company_id`),
  KEY `application_ibfk_2` (`intern_id`),
  KEY `application_ibfk_3` (`company_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `company`
--

CREATE TABLE IF NOT EXISTS `company` (
  `company_id` int(11) NOT NULL AUTO_INCREMENT,
  `company_name` varchar(100) NOT NULL,
  `company_email` varchar(100) NOT NULL,
  `company_contact` bigint(20) NOT NULL,
  `company_detail` text NOT NULL,
  PRIMARY KEY (`company_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=5 ;

--
-- Dumping data for table `company`
--

INSERT INTO `company` (`company_id`, `company_name`, `company_email`, `company_contact`, `company_detail`) VALUES
(2, 'abc', 'abc@com.pany', 2112314123, 'random company'),
(3, 'xyz', 'xyz@com.pany', 9728891984, 'random company'),
(4, 'doingiteasy', 'doing@it.easy', 92131, 'online videos');

-- --------------------------------------------------------

--
-- Table structure for table `institute`
--

CREATE TABLE IF NOT EXISTS `institute` (
  `institute` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `institute`
--

INSERT INTO `institute` (`institute`) VALUES
(''),
(''),
(''),
('NITC'),
('NITC'),
('CET'),
('CET'),
('IIT MADRAS'),
('IIT MADRAS'),
('IIT BOMBAY'),
('IIT BOMBAY'),
('IIM KOZHIKODE'),
('IIM KOZHIKODE');

-- --------------------------------------------------------

--
-- Table structure for table `mentor`
--

CREATE TABLE IF NOT EXISTS `mentor` (
  `name` varchar(100) NOT NULL,
  `email` varchar(50) NOT NULL,
  `phone` varchar(10) NOT NULL,
  `expertise` varchar(1000) NOT NULL,
  `resume` varbinary(1000) NOT NULL,
  `Verified` varchar(3) NOT NULL DEFAULT 'No',
  PRIMARY KEY (`email`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `mentor`
--

INSERT INTO `mentor` (`name`, `email`, `phone`, `expertise`, `resume`, `Verified`) VALUES
('sajmal0', 'm6@gmail.com', '8714268343', 'web development', '', 'No'),
('sajmal0', 'm6s@gmail.com', '8714268343', 'cool', '', 'No'),
('sajmal0', 'm@gmail.com', '8714268343', 'cool', '', 'No'),
('sajmal yousef', 'yousefsajmal1@gmail.com', '9895717814', 'awesome', '', 'yes');

-- --------------------------------------------------------

--
-- Table structure for table `student`
--

CREATE TABLE IF NOT EXISTS `student` (
  `student_id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `institute` varchar(100) NOT NULL,
  `phone` bigint(20) NOT NULL,
  `area_of_interest` text NOT NULL,
  `resume` varchar(200) NOT NULL,
  PRIMARY KEY (`student_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=8 ;

--
-- Dumping data for table `student`
--

INSERT INTO `student` (`student_id`, `name`, `email`, `institute`, `phone`, `area_of_interest`, `resume`) VALUES
(2, 'njan', 'poda@patti.ni', 'NITC', 9847064167, 'c\r\nc++\r\nphp\r\nhtml\r\nsql', ''),
(4, '', '', 'NITC', 9087654321, 'harry poter', ''),
(5, '', '', 'NITC', 9087654321, 'harry poter', ''),
(6, 'Akash', 'aksnkxl@dnm.as', 'NITC', 6871211111, 'sax,.c ', ''),
(7, 'sajmal', 'yousef@gmail.com', 'IIM KOZHIKODE', 8714268343, 'c++,c,web dev', '');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
