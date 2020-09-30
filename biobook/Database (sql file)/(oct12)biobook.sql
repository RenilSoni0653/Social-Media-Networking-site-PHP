-- phpMyAdmin SQL Dump
-- version 4.8.5
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Generation Time: Oct 12, 2019 at 08:44 PM
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
CREATE DATABASE IF NOT EXISTS `biobook` DEFAULT CHARACTER SET latin1 COLLATE latin1_swedish_ci;
USE `biobook`;

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
  `status` int(11) NOT NULL,
  PRIMARY KEY (`user_id`)
) ENGINE=MyISAM AUTO_INCREMENT=7 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `a_user`
--

INSERT INTO `a_user` (`user_id`, `firstname`, `lastname`, `username`, `username2`, `birthday`, `gender`, `num`, `email`, `email2`, `pwd`, `password2`, `profile_picture`, `cover_picture`, `status`) VALUES
(4, 'viraj', 'shah', 'hackman35', 'hackman35', '1999-05-16', 'Male', '7990233961', 'viru.harry@gmail.com', 'viru.harry@gmail.com', 'viraj', 'viraj', 'upload/batman-arkham-origins-joker-hd-wallpaper.jpg', 'upload/battlefield4 game.jpg', 0),
(5, 'renil', 'soni', 'hackman', 'hackman', '1999-07-15', 'Male', '7990232805', 'rsoni@gmail.com', 'rsoni@gmail.com', 'rsoni', 'rsoni', 'upload/FB_IMG_1470810392464.jpg', 'upload/30901512-max-186683.jpg', 0),
(6, 'vishal', 'parmar', 'vvn', 'vvn', '8/May/1913', 'male', '5646749866', 'vvnparmar@gmail.com', 'vvnparmar@gmail.com', 'vishal', 'vishal', 'upload/314274214.jpg', 'upload/COVER.jpg', 0);

-- --------------------------------------------------------

--
-- Table structure for table `chat`
--

DROP TABLE IF EXISTS `chat`;
CREATE TABLE IF NOT EXISTS `chat` (
  `chat_id` int(11) NOT NULL AUTO_INCREMENT,
  `myid` int(11) NOT NULL,
  `f_id` int(11) NOT NULL,
  `msg` varchar(100) NOT NULL,
  PRIMARY KEY (`chat_id`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

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
) ENGINE=MyISAM AUTO_INCREMENT=41 DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `feedback`
--

DROP TABLE IF EXISTS `feedback`;
CREATE TABLE IF NOT EXISTS `feedback` (
  `feed_id` int(100) NOT NULL AUTO_INCREMENT,
  `users_id` varchar(100) NOT NULL,
  `content` varchar(100) NOT NULL,
  `created` varchar(100) NOT NULL,
  `rating` int(100) NOT NULL,
  `status` int(100) NOT NULL,
  PRIMARY KEY (`feed_id`)
) ENGINE=MyISAM AUTO_INCREMENT=9 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `feedback`
--

INSERT INTO `feedback` (`feed_id`, `users_id`, `content`, `created`, `rating`, `status`) VALUES
(2, '4', 'hello', '1570635492', 5, 1),
(5, '4', 'werwr', '1570905778', 1, 0);

-- --------------------------------------------------------

--
-- Table structure for table `friendship`
--

DROP TABLE IF EXISTS `friendship`;
CREATE TABLE IF NOT EXISTS `friendship` (
  `user1_id` int(11) NOT NULL,
  `user2_id` int(11) NOT NULL,
  `friendship_status` int(11) NOT NULL,
  UNIQUE KEY `user1_id` (`user1_id`),
  UNIQUE KEY `user2_id` (`user2_id`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `friendship`
--

INSERT INTO `friendship` (`user1_id`, `user2_id`, `friendship_status`) VALUES
(5, 4, 1),
(4, 6, 1);

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
  `content` varchar(100) NOT NULL,
  `created` varchar(100) NOT NULL,
  PRIMARY KEY (`post_id`)
) ENGINE=MyISAM AUTO_INCREMENT=29 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `post`
--

INSERT INTO `post` (`post_id`, `user_id`, `post_image`, `content`, `created`) VALUES
(28, '4', 'upload/Avengers Infinity War.jpg', 'hello', '1570902682');

-- --------------------------------------------------------

--
-- Table structure for table `report`
--

DROP TABLE IF EXISTS `report`;
CREATE TABLE IF NOT EXISTS `report` (
  `user1_id` int(100) NOT NULL AUTO_INCREMENT,
  `user2_id` int(100) NOT NULL,
  `report_text` varchar(100) NOT NULL,
  `status` int(11) NOT NULL,
  PRIMARY KEY (`user1_id`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;
--
-- Database: `dbmovie`
--
CREATE DATABASE IF NOT EXISTS `dbmovie` DEFAULT CHARACTER SET latin1 COLLATE latin1_swedish_ci;
USE `dbmovie`;

-- --------------------------------------------------------

--
-- Table structure for table `movie`
--

DROP TABLE IF EXISTS `movie`;
CREATE TABLE IF NOT EXISTS `movie` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `m_name` varchar(50) NOT NULL,
  `type` varchar(50) NOT NULL,
  `rating` varchar(50) NOT NULL,
  `fav` varchar(50) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=6 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `movie`
--

INSERT INTO `movie` (`id`, `m_name`, `type`, `rating`, `fav`) VALUES
(1, 'avengers', 'action', '10', '1'),
(2, 'endgame', 'action', '10', '1'),
(3, 'MIB', 'action', '3', '1'),
(5, 'terminator', 'sci-fi', '9', '');
--
-- Database: `examdb`
--
CREATE DATABASE IF NOT EXISTS `examdb` DEFAULT CHARACTER SET latin1 COLLATE latin1_swedish_ci;
USE `examdb`;

-- --------------------------------------------------------

--
-- Table structure for table `examtable`
--

DROP TABLE IF EXISTS `examtable`;
CREATE TABLE IF NOT EXISTS `examtable` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `email` varchar(50) NOT NULL,
  `age` varchar(50) NOT NULL,
  `mobile` varchar(50) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=7 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `examtable`
--

INSERT INTO `examtable` (`id`, `email`, `age`, `mobile`) VALUES
(5, 'viru.harry@gmail.com', '20', '7990232805'),
(6, 'rsoni@gmail.com', '15', '1234567890');
--
-- Database: `login`
--
CREATE DATABASE IF NOT EXISTS `login` DEFAULT CHARACTER SET latin1 COLLATE latin1_swedish_ci;
USE `login`;

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

DROP TABLE IF EXISTS `users`;
CREATE TABLE IF NOT EXISTS `users` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `username` varchar(50) NOT NULL,
  `email` varchar(50) NOT NULL,
  `password` varchar(50) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=11 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `username`, `email`, `password`) VALUES
(1, 'hackman', 'viru.harry@gmail.com', 'vvv'),
(2, 'hackman', 'viraj@gmail.com', 'virurocks99'),
(10, 'viraj', 'viru.harry@gmail.com', 'viraj'),
(9, 'root', 'viru.harry@gmail.com', 'root'),
(8, 'rsoni', 'viru.harry@gmail.com', 'rrr');
--
-- Database: `party`
--
CREATE DATABASE IF NOT EXISTS `party` DEFAULT CHARACTER SET latin1 COLLATE latin1_swedish_ci;
USE `party`;

-- --------------------------------------------------------

--
-- Table structure for table `booking`
--

DROP TABLE IF EXISTS `booking`;
CREATE TABLE IF NOT EXISTS `booking` (
  `bookid` int(11) NOT NULL AUTO_INCREMENT,
  `eventno` int(11) NOT NULL,
  `username` varchar(100) NOT NULL,
  `mobile` varchar(25) NOT NULL,
  `age` varchar(100) NOT NULL,
  PRIMARY KEY (`bookid`)
) ENGINE=MyISAM AUTO_INCREMENT=9 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `booking`
--

INSERT INTO `booking` (`bookid`, `eventno`, `username`, `mobile`, `age`) VALUES
(1, 1, 'viraj', '1234567890', '20'),
(2, 2, 'renil', '9876543210', '21'),
(3, 1, 'vishal', '6549872310', '19'),
(4, 1, 'khushi', '3219876540', '20'),
(5, 1, 'khushi', '3219876540', '20'),
(6, 1, 'deep', '3219876540', '20'),
(7, 2, 'viraj', '1234567890', '20');

-- --------------------------------------------------------

--
-- Table structure for table `party_info`
--

DROP TABLE IF EXISTS `party_info`;
CREATE TABLE IF NOT EXISTS `party_info` (
  `eventno` int(11) NOT NULL,
  `name` varchar(100) NOT NULL,
  `venue` varchar(100) NOT NULL,
  `start_time` varchar(100) NOT NULL,
  `dress_code` varchar(100) NOT NULL,
  `date` varchar(100) NOT NULL,
  `party_info` varchar(100) NOT NULL,
  PRIMARY KEY (`eventno`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `party_info`
--

INSERT INTO `party_info` (`eventno`, `name`, `venue`, `start_time`, `dress_code`, `date`, `party_info`) VALUES
(1, 'chill', 'rajpath', '17:30', 'freestyle', '2019-09-13', 'Come and chill out...no worry no care'),
(2, 'music is everything', 'YMCA', '18:00', 'freestyle', '2019-09-13', 'music and dance what more do you need...');
--
-- Database: `socialnetwork`
--
CREATE DATABASE IF NOT EXISTS `socialnetwork` DEFAULT CHARACTER SET latin1 COLLATE latin1_swedish_ci;
USE `socialnetwork`;

-- --------------------------------------------------------

--
-- Table structure for table `friendship`
--

DROP TABLE IF EXISTS `friendship`;
CREATE TABLE IF NOT EXISTS `friendship` (
  `user1_id` int(11) NOT NULL,
  `user2_id` int(11) NOT NULL,
  `friendship_status` int(11) NOT NULL,
  KEY `user1_id` (`user1_id`),
  KEY `user2_id` (`user2_id`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `friendship`
--

INSERT INTO `friendship` (`user1_id`, `user2_id`, `friendship_status`) VALUES
(2, 1, 1),
(2, 3, 1),
(2, 4, 1),
(1, 5, 1),
(3, 5, 1),
(4, 5, 1),
(6, 3, 0),
(7, 8, 1),
(4, 9, 1),
(4, 10, 0);

-- --------------------------------------------------------

--
-- Table structure for table `posts`
--

DROP TABLE IF EXISTS `posts`;
CREATE TABLE IF NOT EXISTS `posts` (
  `post_id` int(11) NOT NULL AUTO_INCREMENT,
  `post_caption` text NOT NULL,
  `post_time` timestamp NOT NULL,
  `post_public` char(1) NOT NULL,
  `post_by` int(11) NOT NULL,
  PRIMARY KEY (`post_id`),
  KEY `post_by` (`post_by`)
) ENGINE=MyISAM AUTO_INCREMENT=9 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `posts`
--

INSERT INTO `posts` (`post_id`, `post_caption`, `post_time`, `post_public`, `post_by`) VALUES
(1, 'Hello there!', '2017-12-22 19:20:06', 'Y', 1),
(2, 'Paul James has changed his profile picture.', '2017-12-22 19:20:06', 'N', 2),
(3, 'A new artwork from the upcoming content.', '2017-12-22 19:20:06', 'Y', 3),
(4, 'New Year Eve Fireworks', '2017-12-22 19:20:06', 'Y', 4),
(5, 'Visit our profile to check out the upcoming transfers and rumors for January 2018', '2017-12-22 19:20:06', 'N', 5),
(6, 'Happy new year!', '2017-12-22 19:20:06', 'N', 5),
(7, 'hi', '2019-08-11 09:28:18', 'N', 6),
(8, 'hello', '2019-09-26 10:22:02', 'N', 9);

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

DROP TABLE IF EXISTS `users`;
CREATE TABLE IF NOT EXISTS `users` (
  `user_id` int(11) NOT NULL AUTO_INCREMENT,
  `user_firstname` varchar(20) NOT NULL,
  `user_lastname` varchar(20) NOT NULL,
  `user_nickname` varchar(20) DEFAULT NULL,
  `user_password` varchar(255) NOT NULL,
  `user_email` varchar(255) NOT NULL,
  `user_gender` char(1) NOT NULL,
  `user_birthdate` date NOT NULL,
  `user_status` char(1) DEFAULT NULL,
  `user_about` text,
  `user_hometown` varchar(255) DEFAULT NULL,
  PRIMARY KEY (`user_id`)
) ENGINE=MyISAM AUTO_INCREMENT=11 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`user_id`, `user_firstname`, `user_lastname`, `user_nickname`, `user_password`, `user_email`, `user_gender`, `user_birthdate`, `user_status`, `user_about`, `user_hometown`) VALUES
(1, 'Armin', 'Virgil', NULL, 'Arms', 'armin@gmail.com', 'M', '2001-02-05', NULL, NULL, NULL),
(2, 'Paul', 'James', 'Pynch', 'PJP', 'paul@gmail.com', 'M', '1998-12-19', 'S', NULL, NULL),
(3, 'Chris', 'Wilson', NULL, 'Chw', 'chris@gmail.com', 'M', '1996-01-18', NULL, NULL, NULL),
(4, 'Rory', 'Blue', NULL, 'Roy', 'rory@gmail.com', 'F', '1994-04-18', 'M', NULL, NULL),
(5, 'Andrea', 'Surman', NULL, 'And', 'andrea@gmail.com', 'M', '1994-06-06', NULL, NULL, NULL),
(10, 'renil', 'soni', 'renil', '4c5b8b378577b850b68b97a9ae96a634', 'rsoni@gmail.com', 'M', '1996-01-01', 'S', '', 'ahmedabad'),
(9, 'viraj', 'shah', 'viru', '70dfbca685f7424fa7ff90845d0fa564', 'viru.harry@gmail.com', 'M', '1999-05-18', 'S', '', 'ahmedabad');

-- --------------------------------------------------------

--
-- Table structure for table `user_phone`
--

DROP TABLE IF EXISTS `user_phone`;
CREATE TABLE IF NOT EXISTS `user_phone` (
  `user_id` int(11) DEFAULT NULL,
  `user_phone` int(11) DEFAULT NULL,
  KEY `user_id` (`user_id`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `user_phone`
--

INSERT INTO `user_phone` (`user_id`, `user_phone`) VALUES
(4, 7990232);
--
-- Database: `tbl_movie`
--
CREATE DATABASE IF NOT EXISTS `tbl_movie` DEFAULT CHARACTER SET latin1 COLLATE latin1_swedish_ci;
USE `tbl_movie`;

-- --------------------------------------------------------

--
-- Table structure for table `testtbl`
--

DROP TABLE IF EXISTS `testtbl`;
CREATE TABLE IF NOT EXISTS `testtbl` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(50) NOT NULL,
  `type` varchar(50) NOT NULL,
  `rating` varchar(50) NOT NULL,
  `fav` varchar(50) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=2 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `testtbl`
--

INSERT INTO `testtbl` (`id`, `name`, `type`, `rating`, `fav`) VALUES
(1, 'avengers', 'action', '10', '1');
--
-- Database: `tbl_railway`
--
CREATE DATABASE IF NOT EXISTS `tbl_railway` DEFAULT CHARACTER SET latin1 COLLATE latin1_swedish_ci;
USE `tbl_railway`;

-- --------------------------------------------------------

--
-- Table structure for table `testtbl`
--

DROP TABLE IF EXISTS `testtbl`;
CREATE TABLE IF NOT EXISTS `testtbl` (
  `no` varchar(50) NOT NULL,
  `code` varchar(50) NOT NULL,
  `name` varchar(50) NOT NULL,
  `type` varchar(50) NOT NULL,
  `s_city` varchar(50) NOT NULL,
  `d_city` varchar(50) NOT NULL,
  `flag` varchar(50) NOT NULL,
  PRIMARY KEY (`no`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `testtbl`
--

INSERT INTO `testtbl` (`no`, `code`, `name`, `type`, `s_city`, `d_city`, `flag`) VALUES
('1', '070658', 'rajdhani', 'fast', 'ahmedabad', 'baroda', 'D');
--
-- Database: `tbl_shopping`
--
CREATE DATABASE IF NOT EXISTS `tbl_shopping` DEFAULT CHARACTER SET latin1 COLLATE latin1_swedish_ci;
USE `tbl_shopping`;

-- --------------------------------------------------------

--
-- Table structure for table `testtbl`
--

DROP TABLE IF EXISTS `testtbl`;
CREATE TABLE IF NOT EXISTS `testtbl` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `no` varchar(50) NOT NULL,
  `name` varchar(50) NOT NULL,
  `price` varchar(50) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=2 DEFAULT CHARSET=latin1;
--
-- Database: `test`
--
CREATE DATABASE IF NOT EXISTS `test` DEFAULT CHARACTER SET latin1 COLLATE latin1_swedish_ci;
USE `test`;

-- --------------------------------------------------------

--
-- Table structure for table `testtbl`
--

DROP TABLE IF EXISTS `testtbl`;
CREATE TABLE IF NOT EXISTS `testtbl` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(50) NOT NULL,
  `roll` varchar(50) NOT NULL,
  `email` varchar(50) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=2 DEFAULT CHARSET=latin1;
--
-- Database: `testdb`
--
CREATE DATABASE IF NOT EXISTS `testdb` DEFAULT CHARACTER SET latin1 COLLATE latin1_swedish_ci;
USE `testdb`;

-- --------------------------------------------------------

--
-- Table structure for table `testtable`
--

DROP TABLE IF EXISTS `testtable`;
CREATE TABLE IF NOT EXISTS `testtable` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `testdata` varchar(50) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=8 DEFAULT CHARSET=latin1;
--
-- Database: `testdb1`
--
CREATE DATABASE IF NOT EXISTS `testdb1` DEFAULT CHARACTER SET latin1 COLLATE latin1_swedish_ci;
USE `testdb1`;

-- --------------------------------------------------------

--
-- Table structure for table `testtable`
--

DROP TABLE IF EXISTS `testtable`;
CREATE TABLE IF NOT EXISTS `testtable` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `TestField` varchar(50) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=3 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `testtable`
--

INSERT INTO `testtable` (`id`, `TestField`) VALUES
(2, 'viraj');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
