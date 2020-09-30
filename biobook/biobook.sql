-- phpMyAdmin SQL Dump
-- version 4.8.5
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Generation Time: Sep 27, 2019 at 08:27 PM
-- Server version: 5.7.26
-- PHP Version: 7.2.18

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
  PRIMARY KEY (`user_id`)
) ENGINE=MyISAM AUTO_INCREMENT=8 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `a_user`
--

INSERT INTO `a_user` (`user_id`, `firstname`, `lastname`, `username`, `username2`, `birthday`, `gender`, `num`, `email`, `email2`, `pwd`, `password2`, `profile_picture`, `cover_picture`) VALUES
(4, 'viraj', 'shah', 'hackman35', 'hackman35', '1999-05-16', 'Male', '7990233961', 'viru.harry@gmail.com', 'viru.harry@gmail.com', 'viraj', 'viraj', 'upload/batman-arkham-origins-joker-hd-wallpaper.jpg', 'upload/battlefield_4_game_explosion_ea_digital_illusions_ce_92996_2560x1080.jpg'),
(5, 'renil', 'soni', 'hackman', 'hackman', '1999-07-15', 'Male', '7990232805', 'rsoni@gmail.com', 'rsoni@gmail.com', 'rsoni', 'rsoni', 'upload/FB_IMG_1470810392464.jpg', 'upload/30901512-max-186683.jpg'),
(7, 'vishal', 'parmar', 'vvnparmar', 'vvnparmar', '1/March/1915', 'male', '32165498740', 'vvnparmar@gmail.com', 'vvnparmar@gmail.com', 'vvnparmar', 'vvnparmar', 'upload/314274214.jpg', '');

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
) ENGINE=MyISAM AUTO_INCREMENT=43 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `comments`
--

INSERT INTO `comments` (`comment_id`, `post_id`, `user_id`, `name`, `content_comment`, `image`, `created`) VALUES
(41, '45', '4', 'viraj shah', 'hello', 'upload/batman-arkham-origins-joker-hd-wallpaper.jpg', '1569502468'),
(42, '46', '4', 'viraj shah', 'hey', 'upload/batman-arkham-origins-joker-hd-wallpaper.jpg', '1569504562');

-- --------------------------------------------------------

--
-- Table structure for table `friendship`
--

DROP TABLE IF EXISTS `friendship`;
CREATE TABLE IF NOT EXISTS `friendship` (
  `user1_id` int(11) NOT NULL,
  `user2_id` int(11) NOT NULL,
  `friendship_status` int(11) NOT NULL,
  PRIMARY KEY (`user1_id`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `friendship`
--

INSERT INTO `friendship` (`user1_id`, `user2_id`, `friendship_status`) VALUES
(5, 4, 1);

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
) ENGINE=MyISAM AUTO_INCREMENT=27 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `photos`
--

INSERT INTO `photos` (`photo_id`, `location`, `user_id`, `date_added`) VALUES
(22, 'upload/f24f321a76cd1f0e055f1f6e35f1ddf7.jpg', '5', '2019-08-17 21:19:18'),
(24, 'upload/Flash-Season-2-Multiverse-Time-Travel.jpg', '5', '2019-08-17 21:19:43'),
(26, 'upload/aventador.jpg', '4', '2019-08-17 21:20:12');

-- --------------------------------------------------------

--
-- Table structure for table `post`
--

DROP TABLE IF EXISTS `post`;
CREATE TABLE IF NOT EXISTS `post` (
  `post_id` int(100) NOT NULL AUTO_INCREMENT,
  `user_id` varchar(100) NOT NULL,
  `post_image` varchar(100) NOT NULL,
  `content` varchar(1000) NOT NULL,
  `created` varchar(100) NOT NULL,
  PRIMARY KEY (`post_id`)
) ENGINE=MyISAM AUTO_INCREMENT=49 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `post`
--

INSERT INTO `post` (`post_id`, `user_id`, `post_image`, `content`, `created`) VALUES
(47, '5', 'upload/181772.jpg', 'wassup', '1569509121'),
(45, '4', 'upload/10 windows 7 hd wallpapers html windows 7 hd wallpapers 1920x1080 3 .jpg', 'he', '1569500757'),
(46, '4', 'upload/battlefield-5-3840x1787-official-battlefield-v-hd-13936.jpg', 'Hello', '1569504548');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
