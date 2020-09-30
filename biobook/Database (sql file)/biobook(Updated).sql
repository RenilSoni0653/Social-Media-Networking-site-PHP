-- phpMyAdmin SQL Dump
-- version 4.8.5
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Generation Time: Oct 09, 2019 at 07:20 AM
-- Server version: 5.7.26
-- PHP Version: 5.6.40

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `biobook`
--

-- --------------------------------------------------------

--
-- Table structure for table `a_user`
--

DROP TABLE IF EXISTS `a_user`;
CREATE TABLE IF NOT EXISTS `a_user` (
  `user_id` int(100) NOT NULL AUTO_INCREMENT,
  `firstname` varchar(100) NOT NULL,
  `lastname` varchar(100) NOT NULL,
  `username` varchar(100) NOT NULL,
  `username2` varchar(100) NOT NULL,
  `birthday` varchar(100) NOT NULL,
  `gender` varchar(100) NOT NULL,
  `num` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `email2` varchar(100) NOT NULL,
  `pwd` varchar(100) NOT NULL,
  `password2` varchar(100) NOT NULL,
  `profile_picture` varchar(100) NOT NULL,
  `cover_picture` varchar(100) NOT NULL,
  `status` int(10) NOT NULL,
  PRIMARY KEY (`user_id`)
) ENGINE=MyISAM AUTO_INCREMENT=10 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `a_user`
--

INSERT INTO `a_user` (`user_id`, `firstname`, `lastname`, `username`, `username2`, `birthday`, `gender`, `num`, `email`, `email2`, `pwd`, `password2`, `profile_picture`, `cover_picture`, `status`) VALUES
(3, 'Renil', 'Soni', 'Renil_Soni', 'Renil_Soni', '2019-09-18', 'Male', '7405608447', 'renil@gmail.com', 'renil@gmail.com', 'renil', 'renil', 'upload/Penguins.jpg', 'upload/Lighthouse.jpg', 0),
(4, 'Viraj', 'Shah', 'Viraj_Shah', 'Viraj_Shah', '2019-10-07', 'Male', '1234567098', 'viru@gmail.com', 'viru@gmail.com', 'viru', 'viru', 'upload/ultra-hd-car-wallpapers.jpg', 'upload/ultra-hd-car-wallpapers.jpg', 0),
(5, 'parth', 'Shah', 'Parth_Shah', 'Parth_shah', '1/January/2000', 'Male', '1234567809', 'parth@gmail.com', 'parth@gmail.com', 'parth', 'parth', 'upload/Jellyfish.jpg', 'upload/Hydrangeas.jpg', 0),
(9, 'Dishang', 'Patadia', 'Dishang_Patadia', 'Dishang_Patadia', '10/March/1999', 'male', '321546789', 'dishang@gmail.com', 'dishang@gmail.com', 'dishang', 'dishang', 'upload/Lighthouse.jpg', '', 0),
(8, 'manav', 'ranpura', 'mr', 'mr', '1/January/1901', 'male', '1234567890', 'manav@gmail.com', 'manav@gmail.com', 'manav', 'manav', 'upload/Koala.jpg', 'upload/Lighthouse.jpg', 0);

-- --------------------------------------------------------

--
-- Table structure for table `comments`
--

DROP TABLE IF EXISTS `comments`;
CREATE TABLE IF NOT EXISTS `comments` (
  `comment_id` int(100) NOT NULL AUTO_INCREMENT,
  `post_id` varchar(100) NOT NULL,
  `user_id` varchar(100) NOT NULL,
  `name` varchar(100) NOT NULL,
  `content_comment` varchar(100) NOT NULL,
  `image` varchar(100) NOT NULL,
  `created` varchar(100) NOT NULL,
  PRIMARY KEY (`comment_id`)
) ENGINE=MyISAM AUTO_INCREMENT=11 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `comments`
--

INSERT INTO `comments` (`comment_id`, `post_id`, `user_id`, `name`, `content_comment`, `image`, `created`) VALUES
(1, '32', '17', 'vivan parmar', 'My Name is Vivan', 'upload/Lighthouse.jpg', '1566221152'),
(2, '33', '24', 'manav ranpura', 'Nice', 'upload/Lighthouse.jpg', '1566222289'),
(3, '33', '17', 'vivan parmar', 'thanks', 'upload/Lighthouse.jpg', '1566222335'),
(9, '54', '4', 'Viraj Shah', 'Hello,Renil', 'upload/ultra-hd-car-wallpapers.jpg', '1570282705'),
(5, '36', '1', 'Renil Soni', 'Thank You', 'upload/Desert.jpg', '1567171554'),
(10, '53', '4', 'Viraj Shah', 'Hello,Manav', 'upload/ultra-hd-car-wallpapers.jpg', '1570282714');

-- --------------------------------------------------------

--
-- Table structure for table `feedback`
--

DROP TABLE IF EXISTS `feedback`;
CREATE TABLE IF NOT EXISTS `feedback` (
  `feed_id` int(100) NOT NULL AUTO_INCREMENT,
  `user_id` varchar(100) NOT NULL,
  `feed_image` varchar(100) NOT NULL,
  `content` varchar(100) NOT NULL,
  `created` varchar(100) NOT NULL,
  `rating` int(100) NOT NULL,
  `status` int(100) NOT NULL,
  PRIMARY KEY (`feed_id`)
) ENGINE=MyISAM AUTO_INCREMENT=2 DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `friendship`
--

DROP TABLE IF EXISTS `friendship`;
CREATE TABLE IF NOT EXISTS `friendship` (
  `user1_id` varchar(50) NOT NULL,
  `user2_id` varchar(50) NOT NULL,
  `friendship_status` varchar(50) NOT NULL,
  PRIMARY KEY (`user1_id`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `friendship`
--

INSERT INTO `friendship` (`user1_id`, `user2_id`, `friendship_status`) VALUES
('5', '3', '1'),
('3', '8', '1'),
('9', '8', '1');

-- --------------------------------------------------------

--
-- Table structure for table `photos`
--

DROP TABLE IF EXISTS `photos`;
CREATE TABLE IF NOT EXISTS `photos` (
  `photo_id` int(100) NOT NULL AUTO_INCREMENT,
  `location` varchar(100) NOT NULL,
  `user_id` varchar(100) NOT NULL,
  `date_added` varchar(100) NOT NULL,
  PRIMARY KEY (`photo_id`)
) ENGINE=MyISAM AUTO_INCREMENT=5 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `photos`
--

INSERT INTO `photos` (`photo_id`, `location`, `user_id`, `date_added`) VALUES
(1, 'upload/Desert.jpg', '1', '2019-08-30 18:51:40');

-- --------------------------------------------------------

--
-- Table structure for table `post`
--

DROP TABLE IF EXISTS `post`;
CREATE TABLE IF NOT EXISTS `post` (
  `post_id` int(100) NOT NULL AUTO_INCREMENT,
  `user_id` varchar(100) NOT NULL,
  `post_image` varchar(100) NOT NULL,
  `content` varchar(100) NOT NULL,
  `created` varchar(100) NOT NULL,
  PRIMARY KEY (`post_id`)
) ENGINE=MyISAM AUTO_INCREMENT=60 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `post`
--

INSERT INTO `post` (`post_id`, `user_id`, `post_image`, `content`, `created`) VALUES
(53, '8', 'upload/', 'Hi,My name is Manav', '1570282611'),
(54, '3', 'upload/', 'Hi,My Name is Renil\r\n', '1570282634'),
(55, '4', 'upload/', 'My Name is Viraj', '1570282671'),
(57, '3', 'upload/', 'hi\r\n', '1570346028'),
(58, '4', 'upload/', 'hi my name is viraj', '1570346282'),
(59, '3', 'upload/', 'hello', '1570600980');

-- --------------------------------------------------------

--
-- Table structure for table `report`
--

DROP TABLE IF EXISTS `report`;
CREATE TABLE IF NOT EXISTS `report` (
  `user1_id` int(100) NOT NULL AUTO_INCREMENT,
  `user2_id` int(100) NOT NULL,
  `report_text` varchar(100) NOT NULL,
  PRIMARY KEY (`user1_id`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
