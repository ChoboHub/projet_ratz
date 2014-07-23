-- phpMyAdmin SQL Dump
-- version 4.1.14
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Jul 24, 2014 at 12:17 AM
-- Server version: 5.6.17
-- PHP Version: 5.5.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `test`
--

-- --------------------------------------------------------

--
-- Table structure for table `ratzblog`
--

CREATE TABLE IF NOT EXISTS `ratzblog` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `pseudo` varchar(20) NOT NULL,
  `message` varchar(40) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=20 ;

--
-- Dumping data for table `ratzblog`
--

INSERT INTO `ratzblog` (`id`, `pseudo`, `message`) VALUES
(1, 'Yvon', 'Bon beat lgros'),
(2, 'GInette', 'GJGJGJGJ'),
(3, 'Watapito', 'wattititti'),
(4, '4', ''),
(5, '4', ''),
(6, '5', ''),
(7, '6', ''),
(8, '7', ''),
(9, '7', ''),
(10, '8', ''),
(11, '99', ''),
(12, '4', ''),
(13, '111', ''),
(14, 'test', ''),
(15, 'test', ''),
(16, 'test', ''),
(17, '22', ''),
(18, 'ee', 'ee13'),
(19, 'teste', 'yaaa');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
