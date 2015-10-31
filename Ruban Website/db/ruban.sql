-- phpMyAdmin SQL Dump
-- version 4.4.14
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Oct 31, 2015 at 06:13 PM
-- Server version: 5.6.26
-- PHP Version: 5.6.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `ruban`
--

-- --------------------------------------------------------

--
-- Table structure for table `contact`
--

CREATE TABLE IF NOT EXISTS `contact` (
  `first_name` varchar(20) DEFAULT NULL,
  `last_name` varchar(20) DEFAULT NULL,
  `email` varchar(50) DEFAULT NULL,
  `comment` text
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `contact`
--

INSERT INTO `contact` (`first_name`, `last_name`, `email`, `comment`) VALUES
('John', 'Smith', 'john.smith@gmail.com', 'Hii there!'),
('vineet', 'sethia', 'vineet@gmail.com', 'testing'),
('Anil', 'Kumar', 'anil@gmail.com', 'forgot password');

-- --------------------------------------------------------

--
-- Table structure for table `product_details`
--

CREATE TABLE IF NOT EXISTS `product_details` (
  `product_id` int(10) NOT NULL,
  `user_id` int(20) NOT NULL,
  `product_title` varchar(20) NOT NULL,
  `product_desc` text NOT NULL,
  `product_category` varchar(20) NOT NULL,
  `price` int(11) NOT NULL,
  `creation_date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `product_image` text NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=13 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `product_details`
--

INSERT INTO `product_details` (`product_id`, `user_id`, `product_title`, `product_desc`, `product_category`, `price`, `creation_date`, `product_image`) VALUES
(8, 2, 'hjgjfghdf', 'vhfvbvbb', 'ghdfhdh', 0, '2015-08-30 12:28:43', ''),
(9, 2, 'hxgbxgf', 'dhgdhdythdyfdty', 'fsgfs', 0, '2015-08-30 12:31:40', ''),
(10, 2, 'gdhgdhgdgd', 'khlkigkufhd', 'gbdxgdgd', 0, '2015-08-30 12:32:24', ''),
(11, 2, 'Hello', 'Welcome To Indigo!!!', 'Introduction', 0, '2015-08-30 20:24:44', ''),
(12, 1, 'Admin Post', 'Welcome to the world of blogging', 'Welcome', 0, '2015-09-05 00:06:55', '');

-- --------------------------------------------------------

--
-- Table structure for table `purchase`
--

CREATE TABLE IF NOT EXISTS `purchase` (
  `order_id` int(11) NOT NULL,
  `amount` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `product_id` int(11) NOT NULL,
  `quantity` int(11) NOT NULL,
  `address` text NOT NULL,
  `order_date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `delivery_date` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `user_info`
--

CREATE TABLE IF NOT EXISTS `user_info` (
  `user_id` int(10) NOT NULL,
  `email` varchar(200) NOT NULL,
  `username` text NOT NULL,
  `password` text NOT NULL,
  `profile_pic` varchar(300) NOT NULL DEFAULT '../img/profile.jpg',
  `about` text NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=8 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `user_info`
--

INSERT INTO `user_info` (`user_id`, `email`, `username`, `password`, `profile_pic`, `about`) VALUES
(1, 'vineetsethia3@gmail.com', 'admin', 'admin', '', ''),
(2, 'noyet@gmail.com', 'noyet', 'noyet', '', ''),
(3, 'het@gmail.com', 'hey', 'het', '', ''),
(5, 'hi@gmail.com', 'hi', 'abcd', '', ''),
(7, 'anil@gmail.com', 'anil', 'anil', '', '');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `product_details`
--
ALTER TABLE `product_details`
  ADD PRIMARY KEY (`product_id`),
  ADD UNIQUE KEY `blog_id` (`product_id`),
  ADD KEY `blogger_id` (`user_id`),
  ADD KEY `blog_id_2` (`product_id`);

--
-- Indexes for table `purchase`
--
ALTER TABLE `purchase`
  ADD PRIMARY KEY (`order_id`);

--
-- Indexes for table `user_info`
--
ALTER TABLE `user_info`
  ADD PRIMARY KEY (`user_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `product_details`
--
ALTER TABLE `product_details`
  MODIFY `product_id` int(10) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=13;
--
-- AUTO_INCREMENT for table `purchase`
--
ALTER TABLE `purchase`
  MODIFY `order_id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `user_info`
--
ALTER TABLE `user_info`
  MODIFY `user_id` int(10) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=8;
--
-- Constraints for dumped tables
--

--
-- Constraints for table `product_details`
--
ALTER TABLE `product_details`
  ADD CONSTRAINT `product_details_ibfk_1` FOREIGN KEY (`user_id`) REFERENCES `user_info` (`user_id`);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
