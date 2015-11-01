-- phpMyAdmin SQL Dump
-- version 4.2.7.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Nov 01, 2015 at 12:19 PM
-- Server version: 5.6.20
-- PHP Version: 5.5.15

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

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
('Anil', 'Kumar', 'anil@gmail.com', 'forgot password'),
('lucky', 'Srivastava', 'lucky@gmail.com', 'Hey there'),
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
  `creation_date` varchar(25) NOT NULL,
  `product_image` text NOT NULL
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=19 ;

--
-- Dumping data for table `product_details`
--

INSERT INTO `product_details` (`product_id`, `user_id`, `product_title`, `product_desc`, `product_category`, `price`, `creation_date`, `product_image`) VALUES
(8, 2, 'hjgjfghdf', 'vhfvbvbb', 'ghdfhdh', 0, '2015-08-30 17:58:43', ''),
(9, 2, 'hxgbxgf', 'dhgdhdythdyfdty', 'fsgfs', 0, '2015-08-30 18:01:40', ''),
(10, 2, 'gdhgdhgdgd', 'khlkigkufhd', 'gbdxgdgd', 0, '2015-08-30 18:02:24', ''),
(11, 2, 'Hello', 'Welcome To Indigo!!!', 'Introduction', 0, '2015-08-31 01:54:44', ''),
(12, 1, 'Admin Post', 'Welcome to the world of blogging', 'Welcome', 0, '2015-09-05 05:36:55', ''),
(13, 1, 'nkjk', 'okoj', 'jnkn', 0, '0000-00-00 00:00:00', '../img/iron.jpg'),
(14, 1, 'nkjk', 'okoj', 'jnkn', 0, '0000-00-00 00:00:00', '../img/iron.jpg'),
(15, 1, 'nkjk', 'okoj', 'jnkn', 0, '0000-00-00 00:00:00', '../img/iron.jpg'),
(16, 1, 'key', 'hello', '#artcraft', 20, '0000-00-00 00:00:00', '../img/e_lamp.jpg'),
(17, 1, 'abc', 'not any', 'hack it', 23, '0000-00-00 00:00:00', '../img/e_lamp.jpg'),
(18, 1, 'abcdef', 'now', 'xyz', 45, '1/11/2015', '../img/bird.JPG');

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
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `query`
--

CREATE TABLE IF NOT EXISTS `query` (
`sms_id` int(11) NOT NULL,
  `from_no` int(11) NOT NULL,
  `to_no` int(11) NOT NULL,
  `date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `body` text NOT NULL
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=1235 ;

--
-- Dumping data for table `query`
--

INSERT INTO `query` (`sms_id`, `from_no`, `to_no`, `date`, `body`) VALUES
(1, 4567, 7890, '2015-11-01 08:00:34', 'What college should i choose for management courses after my 12th?'),
(1234, 4567, 7890, '2015-11-01 08:02:27', 'What will be the good season for kharif crops?');

-- --------------------------------------------------------

--
-- Table structure for table `suggestion`
--

CREATE TABLE IF NOT EXISTS `suggestion` (
  `sms_id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `username` varchar(300) NOT NULL,
  `suggestion` text NOT NULL,
`suggestion_id` int(11) NOT NULL
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=11 ;

--
-- Dumping data for table `suggestion`
--

INSERT INTO `suggestion` (`sms_id`, `user_id`, `username`, `suggestion`, `suggestion_id`) VALUES
(1, 8, 'lucky', 'Join DU !', 10);

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
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=9 ;

--
-- Dumping data for table `user_info`
--

INSERT INTO `user_info` (`user_id`, `email`, `username`, `password`, `profile_pic`, `about`) VALUES
(1, 'vineetsethia3@gmail.com', 'admin', 'admin', '../img/ara.jpg', 'Software Developer l Networked Learner | Runner | Fulltoo Vegetarian | Chocolate Lover | Excessive Giggler | Participant Observer'),
(2, 'manish@gmail.com', 'manish', '123', '../img/profile.jpg', 'Psychitarist'),
(3, 'heet@gmail.com', 'heet', 'heet', '../img/profile.jpg', 'Dentist'),
(7, 'anil@gmail.com', 'anil', 'anil', '../img/profile.jpg', 'Engineer'),
(8, 'lucky@gmail.com', 'lucky', 'lucky', '../img/profile.jpg', 'mastikhor');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `product_details`
--
ALTER TABLE `product_details`
 ADD PRIMARY KEY (`product_id`), ADD UNIQUE KEY `blog_id` (`product_id`), ADD KEY `blogger_id` (`user_id`), ADD KEY `blog_id_2` (`product_id`);

--
-- Indexes for table `purchase`
--
ALTER TABLE `purchase`
 ADD PRIMARY KEY (`order_id`);

--
-- Indexes for table `query`
--
ALTER TABLE `query`
 ADD PRIMARY KEY (`sms_id`);

--
-- Indexes for table `suggestion`
--
ALTER TABLE `suggestion`
 ADD PRIMARY KEY (`suggestion_id`), ADD KEY `sms_id` (`sms_id`);

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
MODIFY `product_id` int(10) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=19;
--
-- AUTO_INCREMENT for table `purchase`
--
ALTER TABLE `purchase`
MODIFY `order_id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `query`
--
ALTER TABLE `query`
MODIFY `sms_id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=1235;
--
-- AUTO_INCREMENT for table `suggestion`
--
ALTER TABLE `suggestion`
MODIFY `suggestion_id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=11;
--
-- AUTO_INCREMENT for table `user_info`
--
ALTER TABLE `user_info`
MODIFY `user_id` int(10) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=9;
--
-- Constraints for dumped tables
--

--
-- Constraints for table `product_details`
--
ALTER TABLE `product_details`
ADD CONSTRAINT `product_details_ibfk_1` FOREIGN KEY (`user_id`) REFERENCES `user_info` (`user_id`);

--
-- Constraints for table `suggestion`
--
ALTER TABLE `suggestion`
ADD CONSTRAINT `suggestion_ibfk_1` FOREIGN KEY (`sms_id`) REFERENCES `query` (`sms_id`);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
