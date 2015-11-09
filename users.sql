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
-- Indexes for table `users`
--
ALTER TABLE `users`
 ADD PRIMARY KEY (`user_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
MODIFY `user_id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=38;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
