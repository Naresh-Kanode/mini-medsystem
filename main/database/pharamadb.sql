-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Generation Time: May 01, 2023 at 03:39 PM
-- Server version: 5.7.40
-- PHP Version: 8.0.26

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `pharamadb`
--

-- --------------------------------------------------------

--
-- Table structure for table `employee`
--

DROP TABLE IF EXISTS `employee`;
CREATE TABLE IF NOT EXISTS `employee` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `mobile` varchar(20) NOT NULL,
  `password` varchar(255) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=23 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `employee`
--

INSERT INTO `employee` (`id`, `name`, `email`, `mobile`, `password`) VALUES
(22, 'parag', 'parag@gmail.com', '8310268182', '09872'),
(15, 'Shreya', 'purishreya60@yahoo.com', '7499475653', '1234'),
(21, 'naresh_kanode', 'naresh@gmail.com', '8125026372', 'NARESH');

-- --------------------------------------------------------

--
-- Table structure for table `inventory`
--

DROP TABLE IF EXISTS `inventory`;
CREATE TABLE IF NOT EXISTS `inventory` (
  `did` int(100) NOT NULL AUTO_INCREMENT,
  `dname` varchar(100) NOT NULL,
  `qty` int(100) NOT NULL,
  `mfgdate` date NOT NULL,
  `expdate` date NOT NULL,
  `amount` int(100) NOT NULL,
  PRIMARY KEY (`did`)
) ENGINE=MyISAM AUTO_INCREMENT=10 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `inventory`
--

INSERT INTO `inventory` (`did`, `dname`, `qty`, `mfgdate`, `expdate`, `amount`) VALUES
(5, 'paracitomol', 100, '2001-10-12', '2002-10-12', 1000),
(6, 'tacloran', 50, '2005-01-30', '2006-01-30', 10),
(7, 'indoxan', 5, '2009-12-20', '2010-12-20', 4000),
(8, 'ascoriol', 10, '2010-09-29', '2011-09-29', 500),
(9, 'nimsidpee', 100, '2009-05-14', '2010-05-14', 10000);

-- --------------------------------------------------------

--
-- Table structure for table `logintb`
--

DROP TABLE IF EXISTS `logintb`;
CREATE TABLE IF NOT EXISTS `logintb` (
  `email` varchar(50) NOT NULL,
  `password` varchar(10) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `logintb`
--

INSERT INTO `logintb` (`email`, `password`) VALUES
('asif@gmail.com', '123'),
('asif@GMAIL.COM', '1234'),
('asif@GMAIL.COM', '1234'),
('asif@GMAIL.COM', '1234'),
('', ''),
('asif@GMAIL.COM', '1234'),
('asif@GMAIL.COM', '1234'),
('asif@GMAIL.COM', '1234'),
('nik@gmail.com', '098'),
('nik9860@gmail.com', '1234'),
('nik@gmail.com', '1123');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
