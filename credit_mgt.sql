-- phpMyAdmin SQL Dump
-- version 3.2.0.1
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Dec 31, 2008 at 08:00 PM
-- Server version: 5.1.36
-- PHP Version: 5.3.0

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `credit_mgt`
--

-- --------------------------------------------------------

--
-- Table structure for table `user_record`
--

CREATE TABLE IF NOT EXISTS `user_record` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(150) NOT NULL,
  `email` varchar(50) NOT NULL,
  `score` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=17 ;

--
-- Dumping data for table `user_record`
--

INSERT INTO `user_record` (`id`, `name`, `email`, `score`) VALUES
(1, 'Aman', 'aman12oc1998@gmail.com', 320),
(2, 'Stephen', 'stephen@gmail.com', 200),
(3, 'Arun pathak', 'pathak@gmail.com', 650),
(4, 'Thomas', 'thomas@gmail.com', 765),
(7, 'Alok kumar', 'alok@gmail.com', 423),
(8, 'Akshay kumar Shukla', 'akshay@gmail.com', 390),
(9, 'Neno Jay', 'jay@gmail.com', 880),
(10, 'Donald Trump', 'donald@gmail.com', 945),
(11, 'Virat Kohli', 'kohli@gmail.com', 977),
(12, 'Yuvraj Singh', 'yuvraj@gmail.com', 893),
(13, 'Renuka kumar', 'renuka@gmail.com', 60);
