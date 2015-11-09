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
-- Table structure for table `contact`
--

CREATE TABLE IF NOT EXISTS `contact` (
`user_id` int(11) NOT NULL,
  `name` varchar(20) NOT NULL,
  `email` varchar(1024) NOT NULL,
  `problem` varchar(25) NOT NULL,
  `message` varchar(1024) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=14 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `contact`
--

INSERT INTO `contact` (`user_id`, `name`, `email`, `problem`, `message`) VALUES
(2, 'asd', 'asd@aads.com', '', ''),
(3, 'asd', 'ads@a.com', '', 'asdfd			'),
(4, 'afa', 'ads@ad.com', 'reportabuse', 'aadf			'),
(5, 'dfs', 'sdf@f.com', '', '			'),
(6, 'dfs', 'v@das.con', 'reporbug', '			'),
(7, 'sd', 'dfs@a.com', 'reporbug', '			'),
(8, 'wrwe`', 'sdf@ads.com', 'reportabuse', '		'),
(9, 'dsf', 'sdf@ad.com', 'reportabuse', '			'),
(10, 'nnm', 'cb@da.com', 'reportabuse', ''),
(11, 'avinash', 'a@a.com', 'feedback', ''),
(12, 'dsaa', 'adasd@asdas.com', 'reportabuse', ''),
(13, 'ada', 'qeqw@asd.com', 'reportabuse', 'asdads		');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `contact`
--
ALTER TABLE `contact`
 ADD PRIMARY KEY (`user_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `contact`
--
ALTER TABLE `contact`
MODIFY `user_id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=14;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
