-- phpMyAdmin SQL Dump
-- version 3.2.5
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Apr 20, 2012 at 11:13 AM
-- Server version: 5.1.43
-- PHP Version: 5.3.2

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `reg8log`
--

-- --------------------------------------------------------

--
-- Table structure for table `incorrect_logins`
--

CREATE TABLE IF NOT EXISTS `incorrect_logins` (
  `ip` varbinary(16) NOT NULL,
  `timestamp` int(10) unsigned NOT NULL,
  KEY `ip` (`ip`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;
