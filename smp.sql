-- phpMyAdmin SQL Dump
-- version 4.0.10deb1
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Aug 13, 2016 at 01:27 AM
-- Server version: 5.5.50-0ubuntu0.14.04.1
-- PHP Version: 5.5.9-1ubuntu4.19

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `smp`
--

-- --------------------------------------------------------

--
-- Table structure for table `faq`
--

CREATE TABLE IF NOT EXISTS `faq` (
  `Id` int(6) NOT NULL AUTO_INCREMENT,
  `question` mediumtext NOT NULL,
  `answer` mediumtext,
  `name` varchar(1000) NOT NULL,
  `username` varchar(1000) NOT NULL,
  `answered` int(11) NOT NULL DEFAULT '0',
  `timeStamp` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`Id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=3 ;

--
-- Dumping data for table `faq`
--

INSERT INTO `faq` (`Id`, `question`, `answer`, `name`, `username`, `answered`, `timeStamp`) VALUES
(1, 'What is the procedure to get a branch change in BIT Mesra ?', 'After the results of the second semester are published, a form is put up by the semester office inviting students for branch change. The students are required to fill the form along with their choice and submit it with the mark sheets of both semesters attached. Branch change takes place on the cumulative CGPA and the choice. Typically, a CGPA in the range of 8.5 - 9 results in getting a branch a choice. The figure goes higher for branched like CSE and Mechanical. ', '', 'yuvraj', 1, '2016-08-09 18:30:00');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE IF NOT EXISTS `users` (
  `userId` int(6) NOT NULL,
  `username` varchar(100) NOT NULL,
  `password` varchar(100) NOT NULL,
  PRIMARY KEY (`userId`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`userId`, `username`, `password`) VALUES
(1, 'yuvraj', 'yj171295');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
