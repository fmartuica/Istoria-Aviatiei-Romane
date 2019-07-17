-- phpMyAdmin SQL Dump
-- version 4.7.9
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Generation Time: Jul 17, 2019 at 07:29 AM
-- Server version: 5.7.21
-- PHP Version: 5.6.35

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `registration`
--

-- --------------------------------------------------------

--
-- Table structure for table `grade`
--

DROP TABLE IF EXISTS `grade`;
CREATE TABLE IF NOT EXISTS `grade` (
  `username` varchar(255) NOT NULL,
  `grad` varchar(250) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

DROP TABLE IF EXISTS `users`;
CREATE TABLE IF NOT EXISTS `users` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `username` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=17 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `username`, `email`, `password`) VALUES
(1, 'Catalin', 'flavius@gmail.com', '81dc9bdb52d04dc20036dbd8313ed055'),
(2, 'roberto', 'robertoxdxd845@icloud.com', 'ef60c3927fb3935ff850a64069739f4c'),
(3, 'Nicoleta', 'nico@icloud.com', '81dc9bdb52d04dc20036dbd8313ed055'),
(4, 'Bob', 'bob@gmail.com', '81dc9bdb52d04dc20036dbd8313ed055'),
(5, 'Adela', 'adela@YAHOO', '81dc9bdb52d04dc20036dbd8313ed055'),
(6, 'ola', 'jputo@imierdas', '81dc9bdb52d04dc20036dbd8313ed055'),
(7, 'Anca', 'anca@a', '81dc9bdb52d04dc20036dbd8313ed055'),
(8, 'nico', 'nico@i.com', '81dc9bdb52d04dc20036dbd8313ed055'),
(9, 'Nana', 'Nana@yahoo.com', '81dc9bdb52d04dc20036dbd8313ed055'),
(10, 'Ana', 'ana@yahoo.com', '81dc9bdb52d04dc20036dbd8313ed055'),
(11, 'fmartuica', 'flavius@yahoo.ro', 'a1307a5ccfc675e5e5a9e31884231d64'),
(12, 'flavius', 'flavius@fals.com', '81dc9bdb52d04dc20036dbd8313ed055'),
(13, 'ast', 'alt@hu.com', '81dc9bdb52d04dc20036dbd8313ed055'),
(14, 'gigiduru', 'a.a@a.com', 'b43eae07dc76f9beefbcf3f9deaf5306'),
(15, 'yu', '6u6eoo@yahoo.com', 'a562cfa07c2b1213b3a5c99b756fc206'),
(16, 'flavius1234', 'b.b@b.com', '81dc9bdb52d04dc20036dbd8313ed055');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
