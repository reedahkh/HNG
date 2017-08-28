-- phpMyAdmin SQL Dump
-- version 3.2.0.1
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Aug 28, 2017 at 06:32 PM
-- Server version: 5.1.36
-- PHP Version: 5.3.0

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `hng`
--

-- --------------------------------------------------------

--
-- Table structure for table `interns`
--

CREATE TABLE IF NOT EXISTS `interns` (
  `SN` int(3) NOT NULL AUTO_INCREMENT,
  `Firstname` char(30) DEFAULT NULL,
  `Middlename` char(10) DEFAULT NULL,
  `Lastname` char(30) DEFAULT NULL,
  `Gender` char(6) DEFAULT NULL,
  `DOB` date DEFAULT NULL,
  `Phone` varchar(20) DEFAULT NULL,
  `Email` varchar(30) DEFAULT NULL,
  `Home_Address` varchar(100) DEFAULT NULL,
  PRIMARY KEY (`SN`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=3 ;

--
-- Dumping data for table `interns`
--

INSERT INTO `interns` (`SN`, `Firstname`, `Middlename`, `Lastname`, `Gender`, `DOB`, `Phone`, `Email`, `Home_Address`) VALUES
(1, 'farida', 'M', 'Kabir', 'Male', '1992-07-25', '08038471835', 'fareedakabeer@gmail.com', ' Wuse 2 Abuja'),

