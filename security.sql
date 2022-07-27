-- phpMyAdmin SQL Dump
-- version 3.4.5
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: May 22, 2013 at 02:54 PM
-- Server version: 5.5.16
-- PHP Version: 5.3.8

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `security`
--

-- --------------------------------------------------------

--
-- Table structure for table `browser_injection`
--

CREATE TABLE IF NOT EXISTS `browser_injection` (
  `id` int(10) NOT NULL AUTO_INCREMENT,
  `company` varchar(100) NOT NULL,
  `name` varchar(100) NOT NULL,
  `image` varchar(100) NOT NULL,
  `stock` int(10) NOT NULL,
  `placeorder` int(10) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=5 ;

--
-- Dumping data for table `browser_injection`
--

INSERT INTO `browser_injection` (`id`, `company`, `name`, `image`, `stock`, `placeorder`) VALUES
(1, 'Apple', 'Iphone', 'iphone5.jpeg', 10, 0),
(2, 'Nokia', 'Nokia Lumia 920', 'nokialumia.jpg', 5, 0),
(3, 'Samsung', 'Samsung Galaxy 4', 'samsungg4.jpg', 0, 0),
(4, 'BlackBerry', 'Blackberry z10', 'blackberry10.jpg', 2, 0);

-- --------------------------------------------------------

--
-- Table structure for table `digest`
--

CREATE TABLE IF NOT EXISTS `digest` (
  `id` int(100) NOT NULL AUTO_INCREMENT,
  `file` varchar(1000) NOT NULL,
  `hash` varchar(2000) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=9 ;

--
-- Dumping data for table `digest`
--

INSERT INTO `digest` (`id`, `file`, `hash`) VALUES
(6, 'Hello every one', '778cf33996a3187f1f8a5e319d19b98d'),
(7, 'This will be alered', 'b28c41e401d4715429ef09e46315e146'),
(8, 'This will not be altered', '74b88bdc2fe36b68d795cef826bf4a01');

-- --------------------------------------------------------

--
-- Table structure for table `digest1`
--

CREATE TABLE IF NOT EXISTS `digest1` (
  `id` int(100) NOT NULL AUTO_INCREMENT,
  `filename` varchar(100) NOT NULL,
  `hash` varchar(100) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=2 ;

-- --------------------------------------------------------

--
-- Table structure for table `sql_injection`
--

CREATE TABLE IF NOT EXISTS `sql_injection` (
  `id` int(10) NOT NULL AUTO_INCREMENT,
  `name` varchar(50) NOT NULL,
  `gender` varchar(50) NOT NULL,
  `email` varchar(50) NOT NULL,
  `password` varchar(50) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=5 ;

--
-- Dumping data for table `sql_injection`
--

INSERT INTO `sql_injection` (`id`, `name`, `gender`, `email`, `password`) VALUES
(1, 'Neeraj Bhandari', 'Male', 'neeraj@gmail.com', 'neeraj'),
(2, 'Rocky Jagtiani', 'Male', 'rocky@suven.com', 'rocky'),
(3, 'Rama', 'Female', 'rama@gmail.com', 'rama'),
(4, 'Sneha', 'Female', 'sneha@gmail.com', 'sneha');

-- --------------------------------------------------------

--
-- Table structure for table `xss`
--

CREATE TABLE IF NOT EXISTS `xss` (
  `id` int(100) NOT NULL AUTO_INCREMENT,
  `chat` varchar(1000) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
