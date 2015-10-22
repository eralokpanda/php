-- phpMyAdmin SQL Dump
-- version 4.1.12
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Apr 20, 2015 at 07:05 PM
-- Server version: 5.5.36
-- PHP Version: 5.4.27

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `proj`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE IF NOT EXISTS `admin` (
  `sl_no` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(20) NOT NULL,
  `user` varchar(50) NOT NULL,
  `email` varchar(50) NOT NULL,
  `pass` varchar(50) NOT NULL,
  `mobile` varchar(15) NOT NULL,
  `lname` varchar(20) NOT NULL,
  PRIMARY KEY (`sl_no`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=3 ;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`sl_no`, `name`, `user`, `email`, `pass`, `mobile`, `lname`) VALUES
(1, 'alok', 'alok', 'aa', '11', '55', 'panda'),
(2, 'a', 'a@b', 'a@b', 'a', '55', 'fgf');

-- --------------------------------------------------------

--
-- Table structure for table `kids-audio`
--

CREATE TABLE IF NOT EXISTS `kids-audio` (
  `sl_no` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(150) NOT NULL,
  `group_no` int(11) NOT NULL,
  `code` varchar(15) DEFAULT NULL,
  `unlike` int(11) DEFAULT '0',
  `description` text,
  `add_date` timestamp NULL DEFAULT CURRENT_TIMESTAMP,
  `view_time` datetime NOT NULL,
  PRIMARY KEY (`sl_no`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=10 ;

--
-- Dumping data for table `kids-audio`
--

INSERT INTO `kids-audio` (`sl_no`, `name`, `group_no`, `code`, `unlike`, `description`, `add_date`, `view_time`) VALUES
(9, 'ff', 9, '0', 0, 'ffff', '2015-04-06 01:26:58', '0000-00-00 00:00:00');

-- --------------------------------------------------------

--
-- Table structure for table `kids-book`
--

CREATE TABLE IF NOT EXISTS `kids-book` (
  `sl_no` int(11) NOT NULL AUTO_INCREMENT,
  `name` text NOT NULL,
  `description` text NOT NULL,
  `code` text NOT NULL,
  `time` date NOT NULL,
  PRIMARY KEY (`sl_no`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=3 ;

--
-- Dumping data for table `kids-book`
--

INSERT INTO `kids-book` (`sl_no`, `name`, `description`, `code`, `time`) VALUES
(2, 'giaugfuiew', 'jehfiuueirf', 'd', '0000-00-00');

-- --------------------------------------------------------

--
-- Table structure for table `kids-game`
--

CREATE TABLE IF NOT EXISTS `kids-game` (
  `sl_no` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(150) NOT NULL,
  `link` varchar(50) NOT NULL,
  `like` int(11) DEFAULT NULL,
  `unlike` int(11) DEFAULT NULL,
  `views` int(11) DEFAULT '0',
  `description` text,
  `add_date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `view_time` datetime NOT NULL,
  PRIMARY KEY (`sl_no`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=3 ;

--
-- Dumping data for table `kids-game`
--

INSERT INTO `kids-game` (`sl_no`, `name`, `link`, `like`, `unlike`, `views`, `description`, `add_date`, `view_time`) VALUES
(1, 'Sportbike Champion', 'sportbike-champion', NULL, NULL, NULL, 'Take your motorbike racing skills international as you take on the world best racers fighting to be crowned the Sportbike Champion. Upgrade your engine to compete in over 10 challenging tracks against the world’s best 11 racers.', '2015-04-15 17:33:04', '0000-00-00 00:00:00'),
(2, 'supercar showdown', 'supercar-showdown', NULL, NULL, 3, 'Rev your engines and get ready to show off your supercars! This top-down racing game is packed full of fast cars, a variety of tracks, plenty of upgrades and loads of opportunities to prove you rule the race. The tracks become increasingly more challenging with danger walls, wrecking balls, laser targets and more! It''s not enough to be the fastest racer - you''ll also have to use your wits and skill to avoid crashing and ending in a ball of flame. Unlock the next track by finishing in the top 3 in the race. Earn bonus cash for being first through the checkpoints during a race and claim a special prize for finishing first.', '2015-04-15 07:40:25', '2015-04-15 09:40:25');

-- --------------------------------------------------------

--
-- Table structure for table `kids-game-comment`
--

CREATE TABLE IF NOT EXISTS `kids-game-comment` (
  `sl_no` int(11) NOT NULL AUTO_INCREMENT,
  `fname` varchar(50) NOT NULL,
  `lname` varchar(50) NOT NULL,
  `user` varchar(50) NOT NULL,
  `comment` text NOT NULL,
  `game_code` varchar(50) NOT NULL,
  `time` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00' ON UPDATE CURRENT_TIMESTAMP,
  PRIMARY KEY (`sl_no`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `kids-latest`
--

CREATE TABLE IF NOT EXISTS `kids-latest` (
  `sl_no` int(11) NOT NULL AUTO_INCREMENT,
  `link` text NOT NULL,
  `img_name` varchar(20) NOT NULL,
  `time` timestamp NULL DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`sl_no`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `kids-video`
--

CREATE TABLE IF NOT EXISTS `kids-video` (
  `sl_no` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(150) NOT NULL,
  `link` varchar(50) NOT NULL,
  `like` int(11) DEFAULT NULL,
  `unlike` int(11) DEFAULT NULL,
  `views` int(11) DEFAULT NULL,
  `description` text,
  `add_date` timestamp NULL DEFAULT NULL ON UPDATE CURRENT_TIMESTAMP,
  `user` varchar(50) NOT NULL,
  PRIMARY KEY (`sl_no`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=2 ;

--
-- Dumping data for table `kids-video`
--

INSERT INTO `kids-video` (`sl_no`, `name`, `link`, `like`, `unlike`, `views`, `description`, `add_date`, `user`) VALUES
(1, 'ssss', '7famtV88oEs', NULL, NULL, NULL, 'aadada', NULL, '');

-- --------------------------------------------------------

--
-- Table structure for table `kids-video-comment`
--

CREATE TABLE IF NOT EXISTS `kids-video-comment` (
  `sl_no` int(11) NOT NULL AUTO_INCREMENT,
  `fname` varchar(50) NOT NULL,
  `lname` varchar(50) NOT NULL,
  `user` varchar(50) NOT NULL,
  `comment` text NOT NULL,
  `video_code` varchar(50) NOT NULL,
  `time` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00' ON UPDATE CURRENT_TIMESTAMP,
  PRIMARY KEY (`sl_no`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `like_unlike`
--

CREATE TABLE IF NOT EXISTS `like_unlike` (
  `sl_no` int(11) NOT NULL AUTO_INCREMENT,
  `like` tinyint(1) NOT NULL,
  `unlike` tinyint(1) NOT NULL,
  `page` varchar(50) NOT NULL,
  `user` varchar(50) NOT NULL,
  PRIMARY KEY (`sl_no`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `member`
--

CREATE TABLE IF NOT EXISTS `member` (
  `sl_no` int(11) NOT NULL AUTO_INCREMENT,
  `fname` varchar(20) NOT NULL,
  `lname` varchar(20) NOT NULL,
  `gender` varchar(7) NOT NULL,
  `birthday` date DEFAULT NULL,
  `mobile` varchar(13) DEFAULT NULL,
  `email` varchar(40) NOT NULL,
  `user` varchar(50) NOT NULL,
  `pass` varchar(32) NOT NULL,
  `acc_create` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `zone` varchar(7) DEFAULT NULL,
  `change_pass_code` varchar(50) NOT NULL,
  `activation` varchar(50) NOT NULL,
  `permission` varchar(7) NOT NULL,
  `last_time_login` datetime NOT NULL,
  PRIMARY KEY (`sl_no`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=10 ;

--
-- Dumping data for table `member`
--

INSERT INTO `member` (`sl_no`, `fname`, `lname`, `gender`, `birthday`, `mobile`, `email`, `user`, `pass`, `acc_create`, `zone`, `change_pass_code`, `activation`, `permission`, `last_time_login`) VALUES
(3, 's', 's', 's', NULL, NULL, 'a@v', 'a', 'a', '2015-03-24 20:11:22', NULL, '', '', '', '0000-00-00 00:00:00'),
(5, 'a', 's', '', NULL, NULL, 'a@b', 'aa', 'a', '2015-03-24 20:12:29', 'young', '111', 'activated', 'active', '2015-03-09 00:00:00'),
(7, 'a', 's', '', NULL, NULL, 'a@b', 'aa', 'a', '2015-03-24 20:12:58', 'young', '111', 'activated', 'active', '2015-03-09 00:00:00'),
(9, 'a', 's', '', NULL, NULL, 'a@bb', 'aa', 'a', '2015-03-24 20:13:13', 'young', '111', 'activated', 'active', '2015-03-09 00:00:00');

-- --------------------------------------------------------

--
-- Table structure for table `page_data`
--

CREATE TABLE IF NOT EXISTS `page_data` (
  `sl_no` int(11) NOT NULL AUTO_INCREMENT,
  `title` varchar(50) NOT NULL,
  `page_name` varchar(200) NOT NULL,
  `css` varchar(200) NOT NULL,
  `js` varchar(200) NOT NULL,
  `button_name` varchar(20) NOT NULL,
  `button_url` varchar(100) NOT NULL,
  PRIMARY KEY (`sl_no`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=40 ;

--
-- Dumping data for table `page_data`
--

INSERT INTO `page_data` (`sl_no`, `title`, `page_name`, `css`, `js`, `button_name`, `button_url`) VALUES
(0, '<title>Game</title>', 'young-game', '<link href="./young/game/game.css" rel="stylesheet" />', '', 'YOUNG', 'index.php?page=young'),
(1, '<title>Home</title>', 'home', '<link href="./index/css/home-bdy.css" rel="stylesheet" />', '<script src="./index/slider/js-image-slider.js"></script>', '', ''),
(2, '', 'home', '<link rel="stylesheet" href="./index/css/jquery.capty.css"/>', '<script src="./index/js/jquery.capty.min.js"></script>', '', ''),
(3, '', 'home', '<link href="./index/slider/js-image-slider.css" rel="stylesheet" />', '<script src="./index/js/jquery.capty.js"></script>', '', ''),
(5, '<title>Young zone</title>', 'young', '<link href="./young/css/young.css" rel="stylesheet" />', '<script src="./common/js/jquery.js"></script>', '', ''),
(6, '<title>Book</title>', 'young-book', '<link href="./young/book/book.css" rel="stylesheet" />', '', 'YOUNG', 'index.php?page=young'),
(8, '<title>Playing</title>', 'young-video-play', '<link href="./young/video/video-play.css" rel="stylesheet" />', '', 'YOUNG', 'index.php?page=young'),
(9, '<title>Account Create</title>', 'newaccount', '<link href="./newAccount/css/form-body.css" rel="stylesheet" />', '', '', ''),
(10, '<title>Login</title>', 'login', '<link href="login/css/login.css" rel="stylesheet" />', '', '', ''),
(11, '', 'young-video-play', '', '', 'VIDEO', 'index.php?page=young-video'),
(12, '<title>Forgot Password</title>', 'forgot', '<link href="./forgot/css/forgot.css" rel="stylesheet" />', '', '', ''),
(13, '<title>Video</title>', 'young-video', '<link href="./young/video/video.css" rel="stylesheet" />', '', 'YOUNG', 'index.php?page=young'),
(16, '<title>Playing</title>', 'young-game-play', '<link href="./young/game/game-play.css" rel="stylesheet" />', '<!-- Insert this code before your </body> tag -->\r\n<script src="//static.miniclipcdn.com/js/game-embed.js"></script>', 'YOUNG', 'index.php?page=young'),
(17, '', 'young-game-play', '', '', 'GAME', 'index.php?page=young-game'),
(18, '<title>Audio</title>', 'young-audio', '<link href="./young/audio/audio.css" rel="stylesheet" />', '', 'YOUNG', 'index.php?page=young'),
(19, '<title>Music</title>', 'young-audio-play', '', '', 'YOUNG', 'index.php?page=young'),
(20, '<title>Music</title>', 'young-audio-play', '', '', 'AUDIO', 'index.php?page=young-audio'),
(21, '<title>Kids zone</title>', 'kids', '<link href="./kids/css/kids.css" rel="stylesheet" />', '<script src="./common/js/jquery.js"></script>', '', ''),
(22, '<title>Video</title>', 'kids-video', '<link href="./kids/video/video.css" rel="stylesheet" />', '', 'KIDS', 'index.php?page=kids'),
(23, '<title>Playing</title>', 'kids-video-play', '<link href="./kids/video/video-play.css" rel="stylesheet" />', '', 'KIDS', 'index.php?page=kids'),
(24, '', 'kids-video-play', '', '', 'VIDEO', 'index.php?page=kids-video'),
(25, '<title>Audio</title>', 'kids-audio', '<link href="./kids/audio/audio.css" rel="stylesheet" />', '', 'KIDS', 'index.php?page=kids'),
(26, '<title>Music</title>', 'kids-audio-play', '', '', 'KIDS', 'index.php?page=kids'),
(27, '<title>Music</title>', 'kids-audio-play', '', '', 'AUDIO', 'index.php?page=kids-audio'),
(28, '<title>Senior zone</title>', 'senior', '<link href="./senior/css/senior.css" rel="stylesheet" />', '<script src="./common/js/jquery.js"></script>', '', ''),
(29, '<title>Video</title>', 'senior-video', '<link href="./senior/video/video.css" rel="stylesheet" />', '', 'SENIOR', 'index.php?page=senior'),
(30, '<title>Music</title>', 'senior-audio-play', '', '', 'SENIOR', 'index.php?page=senior'),
(31, '<title>Music</title>', 'senior-audio-play', '', '', 'AUDIO', 'index.php?page=senior-audio'),
(32, '<title>Playing</title>', 'senior-video-play', '<link href="./senior/video/video-play.css" rel="stylesheet" />', '', 'SENIOR', 'index.php?page=senior'),
(33, '', 'senior-video-play', '', '', 'VIDEO', 'index.php?page=senior-video'),
(34, '<title>Book</title>', 'senior-book', '<link href="./senior/book/book.css" rel="stylesheet" />', '', 'SENIOR', 'index.php?page=senior'),
(35, '<title>Audio</title>', 'senior-audio', '<link href="./senior/audio/audio.css" rel="stylesheet" />', '', 'SENIOR', 'index.php?page=senior'),
(36, '<title>Book</title>', 'kids-book', '<link href="./kids/book/book.css" rel="stylesheet" />', '', 'KIDS', 'index.php?page=kids'),
(37, '<title>Game</title>', 'kids-game', '<link href="./kids/game/game.css" rel="stylesheet" />', '', 'KIDS', 'index.php?page=kids'),
(38, '<title>Playing</title>', 'kids-game-play', '<link href="./kids/game/game-play.css" rel="stylesheet" />', '<!-- Insert this code before your </body> tag -->\r\n<script src="//static.miniclipcdn.com/js/game-embed.js"></script>', 'KIDS', 'index.php?page=kids'),
(39, '', 'kids-game-play', '', '', 'GAME', 'index.php?page=kids-game');

-- --------------------------------------------------------

--
-- Table structure for table `senior-book`
--

CREATE TABLE IF NOT EXISTS `senior-book` (
  `sl_no` int(11) NOT NULL AUTO_INCREMENT,
  `name` text NOT NULL,
  `description` text NOT NULL,
  `code` text NOT NULL,
  `time` date NOT NULL,
  PRIMARY KEY (`sl_no`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=2 ;

--
-- Dumping data for table `senior-book`
--

INSERT INTO `senior-book` (`sl_no`, `name`, `description`, `code`, `time`) VALUES
(1, 'hweiuhwi', 'wthhwth hthwt3', 'tt', '0000-00-00');

-- --------------------------------------------------------

--
-- Table structure for table `senior-latest`
--

CREATE TABLE IF NOT EXISTS `senior-latest` (
  `sl_no` int(11) NOT NULL AUTO_INCREMENT,
  `link` text NOT NULL,
  `img_name` varchar(20) NOT NULL,
  `time` timestamp NULL DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`sl_no`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `senior-video`
--

CREATE TABLE IF NOT EXISTS `senior-video` (
  `sl_no` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(150) NOT NULL,
  `link` varchar(50) NOT NULL,
  `like` int(11) DEFAULT NULL,
  `unlike` int(11) DEFAULT NULL,
  `views` int(11) DEFAULT NULL,
  `description` text,
  `add_date` timestamp NULL DEFAULT NULL ON UPDATE CURRENT_TIMESTAMP,
  `user` varchar(50) NOT NULL,
  PRIMARY KEY (`sl_no`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=2 ;

--
-- Dumping data for table `senior-video`
--

INSERT INTO `senior-video` (`sl_no`, `name`, `link`, `like`, `unlike`, `views`, `description`, `add_date`, `user`) VALUES
(1, 'wegiufgi wg', 'fu', NULL, NULL, NULL, 'jfhrj3ht3', NULL, '');

-- --------------------------------------------------------

--
-- Table structure for table `senior-video-comment`
--

CREATE TABLE IF NOT EXISTS `senior-video-comment` (
  `sl_no` int(11) NOT NULL AUTO_INCREMENT,
  `fname` varchar(50) NOT NULL,
  `lname` varchar(50) NOT NULL,
  `user` varchar(50) NOT NULL,
  `comment` text NOT NULL,
  `video_code` varchar(50) NOT NULL,
  `time` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00' ON UPDATE CURRENT_TIMESTAMP,
  PRIMARY KEY (`sl_no`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `young-audio`
--

CREATE TABLE IF NOT EXISTS `young-audio` (
  `sl_no` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(150) NOT NULL,
  `group_no` int(11) NOT NULL,
  `code` varchar(15) DEFAULT NULL,
  `unlike` int(11) DEFAULT '0',
  `description` text,
  `add_date` timestamp NULL DEFAULT CURRENT_TIMESTAMP,
  `view_time` datetime NOT NULL,
  PRIMARY KEY (`sl_no`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=10 ;

--
-- Dumping data for table `young-audio`
--

INSERT INTO `young-audio` (`sl_no`, `name`, `group_no`, `code`, `unlike`, `description`, `add_date`, `view_time`) VALUES
(9, 'ff', 9, '0', 0, 'ffff', '2015-04-06 06:56:58', '0000-00-00 00:00:00');

-- --------------------------------------------------------

--
-- Table structure for table `young-book`
--

CREATE TABLE IF NOT EXISTS `young-book` (
  `sl_no` int(11) NOT NULL AUTO_INCREMENT,
  `name` text NOT NULL,
  `description` text NOT NULL,
  `code` text NOT NULL,
  `time` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`sl_no`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=32 ;

--
-- Dumping data for table `young-book`
--

INSERT INTO `young-book` (`sl_no`, `name`, `description`, `code`, `time`) VALUES
(22, 'asdf', '', 'a (20)', '2015-03-14 18:30:00'),
(24, 'asdf', '', 'a (22)', '2015-03-14 18:30:00'),
(25, 'asdf', '', 'a (23)', '2015-03-14 18:30:00'),
(27, 'etwrtw', '', 'a (25)', '2015-03-14 18:30:00'),
(29, 'ss', 'xx', '3691397058', '0000-00-00 00:00:00'),
(31, 'a', 'kkh', '0cc1714489', '2015-03-31 19:28:32');

-- --------------------------------------------------------

--
-- Table structure for table `young-game`
--

CREATE TABLE IF NOT EXISTS `young-game` (
  `sl_no` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(150) NOT NULL,
  `link` varchar(50) NOT NULL,
  `like` int(11) DEFAULT NULL,
  `unlike` int(11) DEFAULT NULL,
  `views` int(11) DEFAULT NULL,
  `description` text,
  `add_date` timestamp NULL DEFAULT CURRENT_TIMESTAMP,
  `view_time` datetime NOT NULL,
  PRIMARY KEY (`sl_no`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=4 ;

--
-- Dumping data for table `young-game`
--

INSERT INTO `young-game` (`sl_no`, `name`, `link`, `like`, `unlike`, `views`, `description`, `add_date`, `view_time`) VALUES
(1, 'Supercar Showdown', 'supercar-showdown', NULL, NULL, 2, 'Rev your engines and get ready to show off your supercars! This top-down racing game is packed full of fast cars, a variety of tracks, plenty of upgrades and loads of opportunities to prove you rule the race. The tracks become increasingly more challenging with danger walls, wrecking balls, laser targets and more! It''s not enough to be the fastest racer - you''ll also have to use your wits and skill to avoid crashing and ending in a ball of flame. Unlock the next track by finishing in the top 3 in the race. Earn bonus cash for being first through the checkpoints during a race and claim a special prize for finishing first. ', '2015-04-15 06:08:32', '2015-04-15 09:09:09'),
(2, 'Motocross Nitro', 'motocross-nitro', NULL, NULL, 6, 'Be warned. Motocross Nitro will bring out your inner speed demon as you race your motorbike over a variety of terrains and tracks, pulling daring stunts and leaving the competition in the dust. \r\n\r\nCustomize your bike to best suit each terrain and then challenge your opponents to sprints, races and freestyle competitions as you show off your best tricks and cross the finishing line ahead of the pack. Unlock new levels, tricks and upgrades as you win each race and max out improvements to your bike and rider so you can rock the competition. This is the complete Motocross experience. ', '2015-04-15 06:19:27', '2015-04-15 21:52:49'),
(3, 'Bike Rivals', 'bike-rivals', NULL, NULL, 2, 'Rev your engines! Prepare to race through a series of challenging levels, where you have to be clever with physics to make it through in the fastest time possible. Do front and back flips in mid-air to charge your boost bar - you''ll need it to get past some long gaps! Be careful not to bump your head on low-hanging rocks and look out for exploding platforms. There are a lot of obstacles to the fastest finish, but with skill and daring you can conquer them all. Play now! ', '2015-04-15 06:23:49', '2015-04-15 09:08:03');

-- --------------------------------------------------------

--
-- Table structure for table `young-game-comment`
--

CREATE TABLE IF NOT EXISTS `young-game-comment` (
  `sl_no` int(11) NOT NULL AUTO_INCREMENT,
  `fname` varchar(50) NOT NULL,
  `lname` varchar(50) NOT NULL,
  `user` varchar(50) NOT NULL,
  `comment` text NOT NULL,
  `game_code` varchar(50) NOT NULL,
  `time` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00' ON UPDATE CURRENT_TIMESTAMP,
  PRIMARY KEY (`sl_no`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `young-latest`
--

CREATE TABLE IF NOT EXISTS `young-latest` (
  `sl_no` int(11) NOT NULL AUTO_INCREMENT,
  `link` text NOT NULL,
  `img_name` varchar(150) NOT NULL,
  `time` timestamp NULL DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`sl_no`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=4 ;

--
-- Dumping data for table `young-latest`
--

INSERT INTO `young-latest` (`sl_no`, `link`, `img_name`, `time`) VALUES
(1, 'http://localhost/proj/index.php?page=young-game-play&play=3', 'bike-rivals', '0000-00-00 00:00:00'),
(2, 'http://localhost/proj/index.php?page=young-game-play&play=2', 'motocross-nitro', NULL),
(3, 'http://localhost/proj/index.php?page=young-game-play&play=1', 'supercar-showdown', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `young-video`
--

CREATE TABLE IF NOT EXISTS `young-video` (
  `sl_no` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(150) NOT NULL,
  `link` varchar(50) NOT NULL,
  `like` int(11) DEFAULT '0',
  `unlike` int(11) DEFAULT '0',
  `views` int(11) DEFAULT '0',
  `description` text,
  `add_date` timestamp NULL DEFAULT CURRENT_TIMESTAMP,
  `view_time` datetime NOT NULL,
  PRIMARY KEY (`sl_no`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=9 ;

--
-- Dumping data for table `young-video`
--

INSERT INTO `young-video` (`sl_no`, `name`, `link`, `like`, `unlike`, `views`, `description`, `add_date`, `view_time`) VALUES
(1, 'a', 'g', NULL, NULL, 10, 'bjbjb', NULL, '2015-04-08 09:12:14'),
(2, 'a', 'a', NULL, NULL, 2, 'f', NULL, '2015-04-03 17:36:42'),
(3, 'a', 's', NULL, NULL, 2, 'dd', '2015-03-31 17:38:45', '2015-04-03 14:06:48'),
(5, 'aa', 'l_0KtxzKZMw', 0, 0, 0, 'kwejfjerge', '2015-04-02 07:42:07', '0000-00-00 00:00:00'),
(6, 'ggffg', '5v6I6ZMbi5c', 0, 0, 0, 'hfkjehrgke', '2015-04-02 07:42:31', '0000-00-00 00:00:00'),
(7, 'hfgkje', 'AZ_Vlp8v9UE', 0, 0, 9, 'it0i4506i40', '2015-04-02 07:43:25', '2015-04-07 07:36:31'),
(8, 'lrterptp', '7famtV88oEs', 0, 0, 8, 'hfhwti htwthhtih ty3y 3y53 86y836y84y 6845y 684y8 6', '2015-04-02 07:43:49', '2015-04-03 14:06:59');

-- --------------------------------------------------------

--
-- Table structure for table `young-video-comment`
--

CREATE TABLE IF NOT EXISTS `young-video-comment` (
  `sl_no` int(11) NOT NULL AUTO_INCREMENT,
  `fname` varchar(50) NOT NULL,
  `lname` varchar(50) NOT NULL,
  `user` varchar(50) NOT NULL,
  `comment` text NOT NULL,
  `video_code` varchar(50) NOT NULL,
  `time` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00' ON UPDATE CURRENT_TIMESTAMP,
  PRIMARY KEY (`sl_no`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
