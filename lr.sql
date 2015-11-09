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

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE IF NOT EXISTS `users` (
`user_id` int(11) NOT NULL,
  `username` varchar(32) NOT NULL,
  `password` varchar(32) NOT NULL,
  `first_name` varchar(32) NOT NULL,
  `last_name` varchar(32) NOT NULL,
  `interest` varchar(1024) NOT NULL,
  `email` varchar(1024) NOT NULL,
  `active` int(11) NOT NULL DEFAULT '0',
  `password_recover` int(11) NOT NULL DEFAULT '0',
  `type` int(11) NOT NULL DEFAULT '0',
  `profile` varchar(55) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=38 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`user_id`, `username`, `password`, `first_name`, `last_name`, `interest`, `email`, `active`, `password_recover`, `type`, `profile`) VALUES
(33, 'vimox', '6199031a5f810c809d20cd3bb2562f0f', 'vmoksh', 'shah', 'ent,Social,Business,comics,lifestyle,sports', 'vmoksh.shah179@gmail.com', 1, 0, 0, 'images/profile/35f4861f20.jpg'),
(34, 'jay', '6199031a5f810c809d20cd3bb2562f0f', 'jai', 'shah', 'Entertainment,Lifestyle,Sports', 'jayp@gmail.com', 1, 0, 0, 'images/profile/9b887b46d1.jpg'),
(35, 'jai', '6199031a5f810c809d20cd3bb2562f0f', 'jai', 'shah', 'Entertainment,Social,Business', 'jai75@gmail.com', 1, 0, 0, ''),
(36, 'avinash', 'e10adc3949ba59abbe56e057f20f883e', 'avinash', 'nash', 'Entertainment,Comics,Sports', 'a@a.com', 1, 0, 0, 'images/profile/844398b544.jpg'),
(37, 'sumit', '4607e782c4d86fd5364d7e4508bb10d9', 'sumit', 'gupta', 'Entertainment,Social', 's@ads.com', 1, 0, 0, 'images/profile/71e80f9184.jpg');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `contact`
--
ALTER TABLE `contact`
 ADD PRIMARY KEY (`user_id`);

--
-- Indexes for table `sites`
--
ALTER TABLE `sites`
 ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
 ADD PRIMARY KEY (`user_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `contact`
--
ALTER TABLE `contact`
MODIFY `user_id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=14;
--
-- AUTO_INCREMENT for table `sites`
--
ALTER TABLE `sites`
MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=31;
--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
MODIFY `user_id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=38;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
