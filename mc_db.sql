-- phpMyAdmin SQL Dump
-- version 3.3.9
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Jul 14, 2021 at 03:23 PM
-- Server version: 5.5.8
-- PHP Version: 5.3.5

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `mc_db`
--

-- --------------------------------------------------------

--
-- Table structure for table `mc_table`
--

CREATE TABLE IF NOT EXISTS `mc_table` (
  `id` int(120) NOT NULL AUTO_INCREMENT,
  `name` varchar(120) NOT NULL,
  `date_of_birth` varchar(120) NOT NULL,
  `contact_details` varchar(120) NOT NULL,
  `address` varchar(120) NOT NULL,
  `username` varchar(120) NOT NULL,
  `password` varchar(120) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=8 ;

--
-- Dumping data for table `mc_table`
--

INSERT INTO `mc_table` (`id`, `name`, `date_of_birth`, `contact_details`, `address`, `username`, `password`) VALUES
(1, 'guen', '1999-08-26', '2147483647', 'wawa', 'guwen', '123'),
(2, 'guen', '1999-08-26', '09165579374', 'del rem', 'gcl', '123'),
(3, 'guen', '1999-08-26', '09123456789', 'wawa', 'mems', '123'),
(4, 'jacklyn gomez', '1999-04-11', '09213465356726', 'jaojoco', 'jaky', 'jak'),
(5, 'guen', '1999-08-26', '12345678901', 'wawa', 'userg', '123'),
(6, 'guen', '1999-08-26', '09165579374', 'wawa', 'guwenn', '123'),
(7, 'guen', '1999-08-26', '12345678901', 'wawa', 'user', '123');
