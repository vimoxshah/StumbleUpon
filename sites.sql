-- phpMyAdmin SQL Dump
-- version 4.2.11
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Apr 08, 2015 at 11:27 AM
-- Server version: 5.6.21
-- PHP Version: 5.6.3

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `lr`
--

-- --------------------------------------------------------

--
-- Table structure for table `sites`
--

CREATE TABLE IF NOT EXISTS `sites` (
`id` int(11) NOT NULL,
  `name` varchar(45) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=31 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `sites`
--

INSERT INTO `sites` (`id`, `name`) VALUES
(1, 'wolframalpha.com'),
(2, 'codecdemy.com'),
(3, 'chesscademy.com'),
(4, 'udacity.com'),
(5, 'duolingo.com'),
(6, 'myfonts.com'),
(7, 'pcpartpicker.com'),
(8, 'programthis.net'),
(9, 'textfiles.com'),
(10, 'reddit.com/r/dataisbeautiful'),
(11, 'internet-map.net'),
(12, 'musictheory.net'),
(13, 'coeehs.com'),
(14, 'teamtreehouse.com'),
(15, 'codingbat.com'),
(16, 'smashthestack.org'),
(17, 'stackoverflow.com'),
(18, 'reddit.com/r/learnprogramming/faq'),
(19, 'isup.me'),
(20, 'scp-wiki.net'),
(21, 'noteflight.com'),
(22, 'reddit.com/r/battlestations'),
(23, 'reddit.com/r/linuxmasterrace'),
(24, 'skillcrush.com'),
(25, 'powershell.com'),
(26, 'codility.com'),
(27, 'en.docsity.com'),
(28, 'noexcuselist.com'),
(29, 'hackerrank.com'),
(30, 'codechef.com');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `sites`
--
ALTER TABLE `sites`
 ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `sites`
--
ALTER TABLE `sites`
MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=31;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
