-- phpMyAdmin SQL Dump
-- version 3.5.1
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Feb 03, 2013 at 12:43 PM
-- Server version: 5.5.24-log
-- PHP Version: 5.3.13

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `learning`
--

-- --------------------------------------------------------

--
-- Table structure for table `new_user`
--

CREATE TABLE IF NOT EXISTS `new_user` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `user_name` varchar(50) NOT NULL,
  `user_password` varchar(128) NOT NULL,
  `user_email` varchar(250) NOT NULL,
  `question` varchar(250) NOT NULL,
  `answer` varchar(250) NOT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `id` (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=8 ;

--
-- Dumping data for table `new_user`
--

INSERT INTO `new_user` (`id`, `user_name`, `user_password`, `user_email`, `question`, `answer`) VALUES
(1, 'mile', 'kitic', 'milekitic@mile.kitic', '', ''),
(2, 'nikola.vojvodic', 'test', 'nikoladzonivojvodic@gmail.com', '', ''),
(3, 'Marko Randjelovic', 'pasvord', 'marko@marko.marko', '', ''),
(4, 'asdf', 'asdf', 'asdf@adsf.asdf', '', ''),
(5, 'test', 'test', 'test@test.com', '', ''),
(6, 'novi', 'user', 'noviuser@novi.com', 'koliko imam godina', '17'),
(7, 'ana', 'mama', 'mama@ana.com', 'kako mi se zove dete?', 'nikola');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
