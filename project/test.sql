-- phpMyAdmin SQL Dump
-- version 3.2.0.1
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Nov 20, 2011 at 09:41 PM
-- Server version: 5.1.36
-- PHP Version: 5.3.0

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `test`
--

-- --------------------------------------------------------

--
-- Table structure for table `ques`
--

CREATE TABLE IF NOT EXISTS `ques` (
  `QNo` int(2) NOT NULL AUTO_INCREMENT,
  `que` varchar(100) NOT NULL,
  `a` varchar(100) NOT NULL,
  `b` varchar(100) NOT NULL,
  `c` varchar(100) NOT NULL,
  `d` varchar(100) NOT NULL,
  `ans` varchar(2) NOT NULL,
  PRIMARY KEY (`QNo`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=21 ;

--
-- Dumping data for table `ques`
--

INSERT INTO `ques` (`QNo`, `que`, `a`, `b`, `c`, `d`, `ans`) VALUES
(1, 'Question no. 1 ?', 'ans', 'b', 'c', 'd', 'a'),
(2, 'Question no. 2 ?', 'ans', 'b', 'c', 'd', 'a'),
(3, 'Question no. 3 ?', 'a', 'ans', 'c', 'd', 'b'),
(4, 'Question no. 4 ?', 'a', 'b', 'ans', 'd', 'c'),
(5, 'Question no. 5 ?', 'a', 'b', 'c', 'ans', 'd'),
(6, 'Question no. 6 ?', 'a', 'b', 'c', 'ans', 'd'),
(7, 'Question no. 7 ?', 'ans', 'b', 'c', 'd', 'a'),
(8, 'Question no. 8 ?', 'a', 'ans', 'c', 'd', 'b'),
(9, 'Question no. 9 ?', 'a', 'b', 'ans', 'd', 'c'),
(10, 'Question no. 10 ?', 'ans', 'b', 'c', 'd', 'a'),
(11, 'Question no. 11 ?', 'a', 'ans', 'c', 'd', 'b'),
(12, 'Question no. 12 ?', 'a', 'b', 'ans', 'd', 'c'),
(13, 'Question no. 13 ?', 'a', 'b', 'c', 'ans', 'd'),
(14, 'Question no. 14 ?', 'a', 'b', 'ans', 'd', 'c'),
(15, 'Question no. 15 ?', 'a', 'ans', 'c', 'd', 'b'),
(16, 'Question no. 16 ?', 'a', 'b', 'c', 'ans', 'd'),
(17, 'Question no. 17 ?', 'a', 'ans', 'c', 'd', 'b'),
(18, 'Question no. 18 ?', 'ans', 'b', 'c', 'd', 'a'),
(19, 'Question no. 19 ?', 'a', 'ans', 'c', 'd', 'b'),
(20, 'Question no. 20 ?', 'a', 'ans', 'c', 'd', 'b');

-- --------------------------------------------------------

--
-- Table structure for table `result`
--

CREATE TABLE IF NOT EXISTS `result` (
  `uname` int(10) NOT NULL AUTO_INCREMENT,
  `pass` varchar(20) NOT NULL,
  `a1` varchar(2) DEFAULT NULL,
  `a2` varchar(2) DEFAULT NULL,
  `a3` varchar(2) DEFAULT NULL,
  `a4` varchar(2) DEFAULT NULL,
  `a5` varchar(2) DEFAULT NULL,
  `a6` varchar(2) DEFAULT NULL,
  `a7` varchar(2) DEFAULT NULL,
  `a8` varchar(2) DEFAULT NULL,
  `a9` varchar(2) DEFAULT NULL,
  `a10` varchar(2) DEFAULT NULL,
  `result` int(4) NOT NULL,
  `q1` int(2) NOT NULL,
  `q2` int(2) NOT NULL,
  `q3` int(2) NOT NULL,
  `q4` int(2) NOT NULL,
  `q5` int(2) NOT NULL,
  `q6` int(2) NOT NULL,
  `q7` int(2) NOT NULL,
  `q8` int(2) NOT NULL,
  `q9` int(2) NOT NULL,
  `q10` int(2) NOT NULL,
  `a0` varchar(3) DEFAULT NULL,
  `q0` varchar(3) DEFAULT NULL,
  PRIMARY KEY (`uname`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

--
-- Dumping data for table `result`
--


-- --------------------------------------------------------

--
-- Table structure for table `videos`
--

CREATE TABLE IF NOT EXISTS `videos` (
  `pgno` int(3) NOT NULL,
  `link1` varchar(200) NOT NULL,
  `link2` varchar(200) NOT NULL,
  PRIMARY KEY (`pgno`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `videos`
--

INSERT INTO `videos` (`pgno`, `link1`, `link2`) VALUES
(1, '<iframe width="293" height="239" src="http://www.youtube.com/embed/ijC2-JHz6Z4" frameborder="0" allowfullscreen></iframe>', '<iframe width="293" height="239" src="http://www.youtube.com/embed/c5rHvmJwFOM" frameborder="0" allowfullscreen></iframe>'),
(2, '<iframe width="293" height="239" src="http://www.youtube.com/embed/5VatV1O7-SA" frameborder="0" allowfullscreen></iframe>', '<iframe width="293" height="239" src="http://www.youtube.com/embed/jpAfuY7JugA" frameborder="0" allowfullscreen></iframe>'),
(3, '<iframe width="293" height="239" src="http://www.youtube.com/embed/FmsG4raUdaU" frameborder="0" allowfullscreen></iframe>', '<iframe width="293" height="239" src="http://www.youtube.com/embed/2I5YgSA1PZo" frameborder="0" allowfullscreen></iframe>'),
(4, '<iframe width="293" height="239" src="http://www.youtube.com/embed/Lc_LZQK8W8s" frameborder="0" allowfullscreen></iframe>', '<iframe width="293" height="239" src="http://www.youtube.com/embed/iOpiBwUG5xQ" frameborder="0" allowfullscreen></iframe>');
