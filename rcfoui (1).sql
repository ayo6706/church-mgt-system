-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Mar 27, 2018 at 07:52 AM
-- Server version: 10.1.19-MariaDB
-- PHP Version: 5.6.28

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `rcfoui`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `username` varchar(100) NOT NULL,
  `password` int(11) NOT NULL,
  `id` int(11) NOT NULL,
  `position` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`username`, `password`, `id`, `position`) VALUES
('ayomide onib', 81, 1, 'admin');

-- --------------------------------------------------------

--
-- Table structure for table `blog`
--

CREATE TABLE `blog` (
  `id` int(11) NOT NULL,
  `title` text NOT NULL,
  `img` text NOT NULL,
  `link` text NOT NULL,
  `cat` varchar(1000) NOT NULL,
  `note` text NOT NULL,
  `date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `author` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `blog`
--

INSERT INTO `blog` (`id`, `title`, `img`, `link`, `cat`, `note`, `date`, `author`) VALUES
(1, 'Early voting data in 3 key states show spike.', 'sticky-notes.jpg', '#', '', 'We''ve been enjoying the summer season for more than a few weeks already, but it''s right now -- when July melts its way into August -- that the summer harvest is at its peak. Summer squash are plentiful, bouquets of basil are everywhere, and tomatoes are starting to ripen. It''s at this moment that you should be running to the kitchen to take advantage of the most bountiful time of year .\r\n\r\nWe''ve been enjoying the summer season for more than a few weeks already, but it''s right now -- when July melts its way into August -- that the summer harvest is at its peak. Summer squash are plentiful, bouquets of basil are everywhere, and tomatoes are starting to ripen. It''s at this moment that you should be running to the kitchen to take advantage of the most bountiful time of year. We''ve been enjoying the summer season for more than a few weeks already, but it''s right now -- when July melts its way into August -- that the summer harvest is at its peak. Summer squash are plentiful, bouquets of basil are everywhere, an We''ve been enjoying the summer season for more than a few w.\r\nWe''ve been enjoying the summer season for more than a few weeks already, but it''s right now -- when July melts its way into August -- that the summer harvest is at its peak. Summer squash are plentiful, bouquets of basil are everywhere, and tomatoes are starting to ripen. It''s at this moment that you should be running to the kitchen to take advantage of the most bountiful time of year .\r\n\r\nWe''ve been enjoying the summer season for more than a few weeks already, but it''s right now -- when July melts its way into August -- that the summer harvest is at its peak. Summer squash are plentiful, bouquets of basil are everywhere, and tomatoes are starting to ripen. It''s at this moment that you should be running to the kitchen to take advantage of the most bountiful time of year. We''ve been enjoying the summer season for more than a few weeks already, but it''s right now -- when July melts its way into August -- that the summer harvest is at its peak. Summer squash are plentiful, bouquets of basil are everywhere, an We''ve been enjoying the summer season for more than a few w.\r\nWe''ve been enjoying the summer season for more than a few weeks already, but it''s right now -- when July melts its way into August -- that the summer harvest is at its peak. Summer squash are plentiful, bouquets of basil are everywhere, and tomatoes are starting to ripen. It''s at this moment that you should be running to the kitchen to take advantage of the most bountiful time of year .\r\n\r\nWe''ve been enjoying the summer season for more than a few weeks already, but it''s right now -- when July melts its way into August -- that the summer harvest is at its peak. Summer squash are plentiful, bouquets of basil are everywhere, and tomatoes are starting to ripen. It''s at this moment that you should be running to the kitchen to take advantage of the most bountiful time of year. We''ve been enjoying the summer season for more than a few weeks already, but it''s right now -- when July melts its way into August -- that the summer harvest is at its peak. Summer squash are plentiful, bouquets of basil are everywhere, an We''ve been enjoying the summer season for more than a few w.', '2018-03-17 09:33:00', 'publicity'),
(3, 'Early voting data in 3 key states show spike', '', 'blog-post.php', '', 'We''ve been enjoying the summer season for more than a few weeks already, but it''s right now -- when July melts its way into August -- that the summer harvest is at its peak. Summer squash are plentiful, bouquets of basil are everywhere, and tomatoes are starting to ripen. It''s at this moment that you should be running to the kitchen to take advantage of the most bountiful time of year We''ve been enjoying the summer season for more than a few weeks already, but it''s right now -- when July melts its way into August -- that the summer harvest is at its peak. Summer squash are plentiful, bouquets of basil are everywhere, and tomatoes are starting to ripen. It''s at this moment that you should be running to the kitchen to take advantage of the most bountiful time of year. We''ve been enjoying the summer season for more than a few weeks already, but it''s right now -- when July melts its way into August -- that the summer harvest is at its peak. Summer squash are plentiful, bouquets of basil are everywhere, an We''ve been enjoying the summer season for more than a few weeks already, but it''s right now -- when July melts its way into August -- that the summer harvest is at its peak. Summer squash are plentiful, bouquets of basil are everywhere, and tomatoes are starting to ripen. It''s at this moment that you should be running to the kitchen to take advantage of the most bountiful time of year We''ve been enjoying the summer season for more than a few weeks already, but it''s right now -- when July melts its way into August -- that the summer harvest is at its peak. Summer squash are plentiful, bouquets of basil are everywhere, and tomatoes are starting to ripen. It''s at this moment that you should be running to the kitchen to take advantage of the most bountiful time of year. We''ve been enjoying the summer season for more than a few weeks already, but it''s right now -- when July melts its way into August -- that the summer harvest is at its peak. Summer squash are plentiful, bouquets of basil are everywhere, an We''ve been enjoying the summer season for more than a few weeks already, but it''s right now -- when July melts its way into August -- that the summer harvest is at its peak. Summer squash are plentiful, bouquets of basil are everywhere, and tomatoes are starting to ripen. It''s at this moment that you should be running to the kitchen to take advantage of the most bountiful time of year We''ve been enjoying the summer season for more than a few weeks already, but it''s right now -- when July melts its way into August -- that the summer harvest is at its peak. Summer squash are plentiful, bouquets of basil are everywhere, and tomatoes are starting to ripen. It''s at this moment that you should be running to the kitchen to take advantage of the most bountiful time of year. We''ve been enjoying the summer season for more than a few weeks already, but it''s right now -- when July melts its way into August -- that the summer harvest is at its peak. Summer squash are plentiful, bouquets of basil are everywhere, an', '2018-03-01 09:27:29', 'ayomide onibokun'),
(4, 'Early voting data in 3 key states show spike', '', 'blog-post.php', '', 'We''ve been enjoying the summer season for more than a few weeks already, but it''s right now -- when July melts its way into August -- that the summer harvest is at its peak. Summer squash are plentiful, bouquets of basil are everywhere, and tomatoes are starting to ripen. It''s at this moment that you should be running to the kitchen to take advantage of the most bountiful time of year We''ve been enjoying the summer season for more than a few weeks already, but it''s right now -- when July melts its way into August -- that the summer harvest is at its peak. Summer squash are plentiful, bouquets of basil are everywhere, and tomatoes are starting to ripen. It''s at this moment that you should be running to the kitchen to take advantage of the most bountiful time of year. We''ve been enjoying the summer season for more than a few weeks already, but it''s right now -- when July melts its way into August -- that the summer harvest is at its peak. Summer squash are plentiful, bouquets of basil are everywhere, an We''ve been enjoying the summer season for more than a few weeks already, but it''s right now -- when July melts its way into August -- that the summer harvest is at its peak. Summer squash are plentiful, bouquets of basil are everywhere, and tomatoes are starting to ripen. It''s at this moment that you should be running to the kitchen to take advantage of the most bountiful time of year We''ve been enjoying the summer season for more than a few weeks already, but it''s right now -- when July melts its way into August -- that the summer harvest is at its peak. Summer squash are plentiful, bouquets of basil are everywhere, and tomatoes are starting to ripen. It''s at this moment that you should be running to the kitchen to take advantage of the most bountiful time of year. We''ve been enjoying the summer season for more than a few weeks already, but it''s right now -- when July melts its way into August -- that the summer harvest is at its peak. Summer squash are plentiful, bouquets of basil are everywhere, an We''ve been enjoying the summer season for more than a few weeks already, but it''s right now -- when July melts its way into August -- that the summer harvest is at its peak. Summer squash are plentiful, bouquets of basil are everywhere, and tomatoes are starting to ripen. It''s at this moment that you should be running to the kitchen to take advantage of the most bountiful time of year We''ve been enjoying the summer season for more than a few weeks already, but it''s right now -- when July melts its way into August -- that the summer harvest is at its peak. Summer squash are plentiful, bouquets of basil are everywhere, and tomatoes are starting to ripen. It''s at this moment that you should be running to the kitchen to take advantage of the most bountiful time of year. We''ve been enjoying the summer season for more than a few weeks already, but it''s right now -- when July melts its way into August -- that the summer harvest is at its peak. Summer squash are plentiful, bouquets of basil are everywhere, an', '2018-03-01 09:25:21', 'ayomide onibokun'),
(5, 'Early voting data in 3 key states show spike', '', 'blog-post.php', '', 'We''ve been enjoying the summer season for more than a few weeks already, but it''s right now -- when July melts its way into August -- that the summer harvest is at its peak. Summer squash are plentiful, bouquets of basil are everywhere, and tomatoes are starting to ripen. It''s at this moment that you should be running to the kitchen to take advantage of the most bountiful time of year We''ve been enjoying the summer season for more than a few weeks already, but it''s right now -- when July melts its way into August -- that the summer harvest is at its peak. Summer squash are plentiful, bouquets of basil are everywhere, and tomatoes are starting to ripen. It''s at this moment that you should be running to the kitchen to take advantage of the most bountiful time of year. We''ve been enjoying the summer season for more than a few weeks already, but it''s right now -- when July melts its way into August -- that the summer harvest is at its peak. Summer squash are plentiful, bouquets of basil are everywhere, an We''ve been enjoying the summer season for more than a few weeks already, but it''s right now -- when July melts its way into August -- that the summer harvest is at its peak. Summer squash are plentiful, bouquets of basil are everywhere, and tomatoes are starting to ripen. It''s at this moment that you should be running to the kitchen to take advantage of the most bountiful time of year We''ve been enjoying the summer season for more than a few weeks already, but it''s right now -- when July melts its way into August -- that the summer harvest is at its peak. Summer squash are plentiful, bouquets of basil are everywhere, and tomatoes are starting to ripen. It''s at this moment that you should be running to the kitchen to take advantage of the most bountiful time of year. We''ve been enjoying the summer season for more than a few weeks already, but it''s right now -- when July melts its way into August -- that the summer harvest is at its peak. Summer squash are plentiful, bouquets of basil are everywhere, an We''ve been enjoying the summer season for more than a few weeks already, but it''s right now -- when July melts its way into August -- that the summer harvest is at its peak. Summer squash are plentiful, bouquets of basil are everywhere, and tomatoes are starting to ripen. It''s at this moment that you should be running to the kitchen to take advantage of the most bountiful time of year We''ve been enjoying the summer season for more than a few weeks already, but it''s right now -- when July melts its way into August -- that the summer harvest is at its peak. Summer squash are plentiful, bouquets of basil are everywhere, and tomatoes are starting to ripen. It''s at this moment that you should be running to the kitchen to take advantage of the most bountiful time of year. We''ve been enjoying the summer season for more than a few weeks already, but it''s right now -- when July melts its way into August -- that the summer harvest is at its peak. Summer squash are plentiful, bouquets of basil are everywhere, an', '2018-03-01 09:25:43', 'ayomide onibokun'),
(6, 'Early voting data in 3 key states show spike', '', 'blog-post.php', '', 'We''ve been enjoying the summer season for more than a few weeks already, but it''s right now -- when July melts its way into August -- that the summer harvest is at its peak. Summer squash are plentiful, bouquets of basil are everywhere, and tomatoes are starting to ripen. It''s at this moment that you should be running to the kitchen to take advantage of the most bountiful time of year We''ve been enjoying the summer season for more than a few weeks already, but it''s right now -- when July melts its way into August -- that the summer harvest is at its peak. Summer squash are plentiful, bouquets of basil are everywhere, and tomatoes are starting to ripen. It''s at this moment that you should be running to the kitchen to take advantage of the most bountiful time of year. We''ve been enjoying the summer season for more than a few weeks already, but it''s right now -- when July melts its way into August -- that the summer harvest is at its peak. Summer squash are plentiful, bouquets of basil are everywhere, an We''ve been enjoying the summer season for more than a few weeks already, but it''s right now -- when July melts its way into August -- that the summer harvest is at its peak. Summer squash are plentiful, bouquets of basil are everywhere, and tomatoes are starting to ripen. It''s at this moment that you should be running to the kitchen to take advantage of the most bountiful time of year We''ve been enjoying the summer season for more than a few weeks already, but it''s right now -- when July melts its way into August -- that the summer harvest is at its peak. Summer squash are plentiful, bouquets of basil are everywhere, and tomatoes are starting to ripen. It''s at this moment that you should be running to the kitchen to take advantage of the most bountiful time of year. We''ve been enjoying the summer season for more than a few weeks already, but it''s right now -- when July melts its way into August -- that the summer harvest is at its peak. Summer squash are plentiful, bouquets of basil are everywhere, an We''ve been enjoying the summer season for more than a few weeks already, but it''s right now -- when July melts its way into August -- that the summer harvest is at its peak. Summer squash are plentiful, bouquets of basil are everywhere, and tomatoes are starting to ripen. It''s at this moment that you should be running to the kitchen to take advantage of the most bountiful time of year We''ve been enjoying the summer season for more than a few weeks already, but it''s right now -- when July melts its way into August -- that the summer harvest is at its peak. Summer squash are plentiful, bouquets of basil are everywhere, and tomatoes are starting to ripen. It''s at this moment that you should be running to the kitchen to take advantage of the most bountiful time of year. We''ve been enjoying the summer season for more than a few weeks already, but it''s right now -- when July melts its way into August -- that the summer harvest is at its peak. Summer squash are plentiful, bouquets of basil are everywhere, an', '2018-03-01 09:26:03', 'ayomide onibokun'),
(7, 'Early voting data in 3 key states show spike', '', 'blog-post.php', '', 'We''ve been enjoying the summer season for more than a few weeks already, but it''s right now -- when July melts its way into August -- that the summer harvest is at its peak. Summer squash are plentiful, bouquets of basil are everywhere, and tomatoes are starting to ripen. It''s at this moment that you should be running to the kitchen to take advantage of the most bountiful time of year We''ve been enjoying the summer season for more than a few weeks already, but it''s right now -- when July melts its way into August -- that the summer harvest is at its peak. Summer squash are plentiful, bouquets of basil are everywhere, and tomatoes are starting to ripen. It''s at this moment that you should be running to the kitchen to take advantage of the most bountiful time of year. We''ve been enjoying the summer season for more than a few weeks already, but it''s right now -- when July melts its way into August -- that the summer harvest is at its peak. Summer squash are plentiful, bouquets of basil are everywhere, an We''ve been enjoying the summer season for more than a few weeks already, but it''s right now -- when July melts its way into August -- that the summer harvest is at its peak. Summer squash are plentiful, bouquets of basil are everywhere, and tomatoes are starting to ripen. It''s at this moment that you should be running to the kitchen to take advantage of the most bountiful time of year We''ve been enjoying the summer season for more than a few weeks already, but it''s right now -- when July melts its way into August -- that the summer harvest is at its peak. Summer squash are plentiful, bouquets of basil are everywhere, and tomatoes are starting to ripen. It''s at this moment that you should be running to the kitchen to take advantage of the most bountiful time of year. We''ve been enjoying the summer season for more than a few weeks already, but it''s right now -- when July melts its way into August -- that the summer harvest is at its peak. Summer squash are plentiful, bouquets of basil are everywhere, an We''ve been enjoying the summer season for more than a few weeks already, but it''s right now -- when July melts its way into August -- that the summer harvest is at its peak. Summer squash are plentiful, bouquets of basil are everywhere, and tomatoes are starting to ripen. It''s at this moment that you should be running to the kitchen to take advantage of the most bountiful time of year We''ve been enjoying the summer season for more than a few weeks already, but it''s right now -- when July melts its way into August -- that the summer harvest is at its peak. Summer squash are plentiful, bouquets of basil are everywhere, and tomatoes are starting to ripen. It''s at this moment that you should be running to the kitchen to take advantage of the most bountiful time of year. We''ve been enjoying the summer season for more than a few weeks already, but it''s right now -- when July melts its way into August -- that the summer harvest is at its peak. Summer squash are plentiful, bouquets of basil are everywhere, an', '2018-03-01 09:26:19', 'ayomide onibokun'),
(8, 'Early voting data in 3 key states show spike', '', 'blog-post.php', '', 'We''ve been enjoying the summer season for more than a few weeks already, but it''s right now -- when July melts its way into August -- that the summer harvest is at its peak. Summer squash are plentiful, bouquets of basil are everywhere, and tomatoes are starting to ripen. It''s at this moment that you should be running to the kitchen to take advantage of the most bountiful time of year We''ve been enjoying the summer season for more than a few weeks already, but it''s right now -- when July melts its way into August -- that the summer harvest is at its peak. Summer squash are plentiful, bouquets of basil are everywhere, and tomatoes are starting to ripen. It''s at this moment that you should be running to the kitchen to take advantage of the most bountiful time of year. We''ve been enjoying the summer season for more than a few weeks already, but it''s right now -- when July melts its way into August -- that the summer harvest is at its peak. Summer squash are plentiful, bouquets of basil are everywhere, an We''ve been enjoying the summer season for more than a few weeks already, but it''s right now -- when July melts its way into August -- that the summer harvest is at its peak. Summer squash are plentiful, bouquets of basil are everywhere, and tomatoes are starting to ripen. It''s at this moment that you should be running to the kitchen to take advantage of the most bountiful time of year We''ve been enjoying the summer season for more than a few weeks already, but it''s right now -- when July melts its way into August -- that the summer harvest is at its peak. Summer squash are plentiful, bouquets of basil are everywhere, and tomatoes are starting to ripen. It''s at this moment that you should be running to the kitchen to take advantage of the most bountiful time of year. We''ve been enjoying the summer season for more than a few weeks already, but it''s right now -- when July melts its way into August -- that the summer harvest is at its peak. Summer squash are plentiful, bouquets of basil are everywhere, an We''ve been enjoying the summer season for more than a few weeks already, but it''s right now -- when July melts its way into August -- that the summer harvest is at its peak. Summer squash are plentiful, bouquets of basil are everywhere, and tomatoes are starting to ripen. It''s at this moment that you should be running to the kitchen to take advantage of the most bountiful time of year We''ve been enjoying the summer season for more than a few weeks already, but it''s right now -- when July melts its way into August -- that the summer harvest is at its peak. Summer squash are plentiful, bouquets of basil are everywhere, and tomatoes are starting to ripen. It''s at this moment that you should be running to the kitchen to take advantage of the most bountiful time of year. We''ve been enjoying the summer season for more than a few weeks already, but it''s right now -- when July melts its way into August -- that the summer harvest is at its peak. Summer squash are plentiful, bouquets of basil are everywhere, an', '2018-03-01 09:26:52', 'ayomide onibokun'),
(9, 'Early voting data in 3 key states show spike', '', 'blog-post.php', '', 'We''ve been enjoying the summer season for more than a few weeks already, but it''s right now -- when July melts its way into August -- that the summer harvest is at its peak. Summer squash are plentiful, bouquets of basil are everywhere, and tomatoes are starting to ripen. It''s at this moment that you should be running to the kitchen to take advantage of the most bountiful time of year We''ve been enjoying the summer season for more than a few weeks already, but it''s right now -- when July melts its way into August -- that the summer harvest is at its peak. Summer squash are plentiful, bouquets of basil are everywhere, and tomatoes are starting to ripen. It''s at this moment that you should be running to the kitchen to take advantage of the most bountiful time of year. We''ve been enjoying the summer season for more than a few weeks already, but it''s right now -- when July melts its way into August -- that the summer harvest is at its peak. Summer squash are plentiful, bouquets of basil are everywhere, an We''ve been enjoying the summer season for more than a few weeks already, but it''s right now -- when July melts its way into August -- that the summer harvest is at its peak. Summer squash are plentiful, bouquets of basil are everywhere, and tomatoes are starting to ripen. It''s at this moment that you should be running to the kitchen to take advantage of the most bountiful time of year We''ve been enjoying the summer season for more than a few weeks already, but it''s right now -- when July melts its way into August -- that the summer harvest is at its peak. Summer squash are plentiful, bouquets of basil are everywhere, and tomatoes are starting to ripen. It''s at this moment that you should be running to the kitchen to take advantage of the most bountiful time of year. We''ve been enjoying the summer season for more than a few weeks already, but it''s right now -- when July melts its way into August -- that the summer harvest is at its peak. Summer squash are plentiful, bouquets of basil are everywhere, an We''ve been enjoying the summer season for more than a few weeks already, but it''s right now -- when July melts its way into August -- that the summer harvest is at its peak. Summer squash are plentiful, bouquets of basil are everywhere, and tomatoes are starting to ripen. It''s at this moment that you should be running to the kitchen to take advantage of the most bountiful time of year We''ve been enjoying the summer season for more than a few weeks already, but it''s right now -- when July melts its way into August -- that the summer harvest is at its peak. Summer squash are plentiful, bouquets of basil are everywhere, and tomatoes are starting to ripen. It''s at this moment that you should be running to the kitchen to take advantage of the most bountiful time of year. We''ve been enjoying the summer season for more than a few weeks already, but it''s right now -- when July melts its way into August -- that the summer harvest is at its peak. Summer squash are plentiful, bouquets of basil are everywhere, an', '2018-03-01 09:27:09', 'ayomide onibokun'),
(10, 'Early voting data in 3 key states show spike.', 'sticky-notes.jpg', '#', '', 'We''ve been enjoying the summer season for more than a few weeks already, but it''s right now -- when July melts its way into August -- that the summer harvest is at its peak. Summer squash are plentiful, bouquets of basil are everywhere, and tomatoes are starting to ripen. It''s at this moment that you should be running to the kitchen to take advantage of the most bountiful time of year .\r\n\r\nWe''ve been enjoying the summer season for more than a few weeks already, but it''s right now -- when July melts its way into August -- that the summer harvest is at its peak. Summer squash are plentiful, bouquets of basil are everywhere, and tomatoes are starting to ripen. It''s at this moment that you should be running to the kitchen to take advantage of the most bountiful time of year. We''ve been enjoying the summer season for more than a few weeks already, but it''s right now -- when July melts its way into August -- that the summer harvest is at its peak. Summer squash are plentiful, bouquets of basil are everywhere, an We''ve been enjoying the summer season for more than a few w.\r\nWe''ve been enjoying the summer season for more than a few weeks already, but it''s right now -- when July melts its way into August -- that the summer harvest is at its peak. Summer squash are plentiful, bouquets of basil are everywhere, and tomatoes are starting to ripen. It''s at this moment that you should be running to the kitchen to take advantage of the most bountiful time of year .\r\n\r\nWe''ve been enjoying the summer season for more than a few weeks already, but it''s right now -- when July melts its way into August -- that the summer harvest is at its peak. Summer squash are plentiful, bouquets of basil are everywhere, and tomatoes are starting to ripen. It''s at this moment that you should be running to the kitchen to take advantage of the most bountiful time of year. We''ve been enjoying the summer season for more than a few weeks already, but it''s right now -- when July melts its way into August -- that the summer harvest is at its peak. Summer squash are plentiful, bouquets of basil are everywhere, an We''ve been enjoying the summer season for more than a few w.\r\nWe''ve been enjoying the summer season for more than a few weeks already, but it''s right now -- when July melts its way into August -- that the summer harvest is at its peak. Summer squash are plentiful, bouquets of basil are everywhere, and tomatoes are starting to ripen. It''s at this moment that you should be running to the kitchen to take advantage of the most bountiful time of year .\r\n\r\nWe''ve been enjoying the summer season for more than a few weeks already, but it''s right now -- when July melts its way into August -- that the summer harvest is at its peak. Summer squash are plentiful, bouquets of basil are everywhere, and tomatoes are starting to ripen. It''s at this moment that you should be running to the kitchen to take advantage of the most bountiful time of year. We''ve been enjoying the summer season for more than a few weeks already, but it''s right now -- when July melts its way into August -- that the summer harvest is at its peak. Summer squash are plentiful, bouquets of basil are everywhere, an We''ve been enjoying the summer season for more than a few w.\r\nWe''ve been enjoying the summer season for more than a few weeks already, but it''s right now -- when July melts its way into August -- that the summer harvest is at its peak. Summer squash are plentiful, bouquets of basil are everywhere, and tomatoes are starting to ripen. It''s at this moment that you should be running to the kitchen to take advantage of the most bountiful time of year .\r\n\r\nWe''ve been enjoying the summer season for more than a few weeks already, but it''s right now -- when July melts its way into August -- that the summer harvest is at its peak. Summer squash are plentiful, bouquets of basil are everywhere, and tomatoes are starting to ripen. It''s at this moment that you should be running to the kitchen to take advantage of the most bountiful time of year. We''ve been enjoying the summer season for more than a few weeks already, but it''s right now -- when July melts its way into August -- that the summer harvest is at its peak. Summer squash are plentiful, bouquets of basil are everywhere, an We''ve been enjoying the summer season for more than a few w.', '2018-03-17 09:35:15', 'publicity');

-- --------------------------------------------------------

--
-- Table structure for table `event`
--

CREATE TABLE `event` (
  `id` int(11) NOT NULL,
  `title` text NOT NULL,
  `link` text NOT NULL,
  `img` text NOT NULL,
  `location` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `event`
--

INSERT INTO `event` (`id`, `title`, `link`, `img`, `location`) VALUES
(1, 'THE BLOOD OF THE MARTYRS', '#', 'sticky-notes.jpg', '45 Plastira Avenue , in Athens'),
(2, 'THE BLOOD OF THE MARTYRS', '#', 'tablet.jpg', '45 Plastira Avenue , in Athens'),
(3, 'THE BLOOD OF THE MARTYRS', '#', 'tablet.jpg', '45 Plastira Avenue , in Athens'),
(4, 'THE BLOOD OF THE MARTYRS', '#', 'sticky-notes.jpg', '45 Plastira Avenue , in Athens'),
(5, 'THE BLOOD OF THE MARTYRS', '#', 'sticky-notes.jpg', '45 Plastira Avenue , in Athens'),
(6, 'THE BLOOD OF THE MARTYRS', '#', 'tablet.jpg', '45 Plastira Avenue , in Athens');

-- --------------------------------------------------------

--
-- Table structure for table `guestusers`
--

CREATE TABLE `guestusers` (
  `id` int(11) NOT NULL,
  `first_name` text NOT NULL,
  `last_name` text NOT NULL,
  `username` varchar(11) NOT NULL,
  `email` text NOT NULL,
  `password` varchar(100) NOT NULL,
  `ip` varchar(100) NOT NULL,
  `dept` text NOT NULL,
  `sex` varchar(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `guestusers`
--

INSERT INTO `guestusers` (`id`, `first_name`, `last_name`, `username`, `email`, `password`, `ip`, `dept`, `sex`) VALUES
(1, 'onibokun', 'ayomide', 'ayo', 'ayo6706@gmail.com', '81dc9bdb52d04dc20036dbd8313ed055', '', 'comp engr', 'male'),
(2, 'firstname', 'lastname', 'username', 'example@emil.com', '1a1dc91c907325c69271ddf0c944bc72', '', 'dept', 'male');

-- --------------------------------------------------------

--
-- Table structure for table `hod`
--

CREATE TABLE `hod` (
  `id` int(11) NOT NULL,
  `username` varchar(11) NOT NULL,
  `password` varchar(40) NOT NULL,
  `position` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `hod`
--

INSERT INTO `hod` (`id`, `username`, `password`, `position`) VALUES
(1, 'joshman', '81dc9bdb52d04dc20036dbd8313ed055', 'hod');

-- --------------------------------------------------------

--
-- Table structure for table `leaders`
--

CREATE TABLE `leaders` (
  `id` int(11) NOT NULL,
  `username` text NOT NULL,
  `password` varchar(40) NOT NULL,
  `position` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `leaders`
--

INSERT INTO `leaders` (`id`, `username`, `password`, `position`) VALUES
(1, 'president', '81dc9bdb52d04dc20036dbd8313ed055', 'leaders');

-- --------------------------------------------------------

--
-- Table structure for table `publicity`
--

CREATE TABLE `publicity` (
  `id` int(11) NOT NULL,
  `username` varchar(100) NOT NULL,
  `password` varchar(40) NOT NULL,
  `position` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `publicity`
--

INSERT INTO `publicity` (`id`, `username`, `password`, `position`) VALUES
(1, 'david', '81dc9bdb52d04dc20036dbd8313ed055', 'publicity');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `blog`
--
ALTER TABLE `blog`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `event`
--
ALTER TABLE `event`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `guestusers`
--
ALTER TABLE `guestusers`
  ADD PRIMARY KEY (`id`),
  ADD KEY `username` (`username`);

--
-- Indexes for table `hod`
--
ALTER TABLE `hod`
  ADD PRIMARY KEY (`id`),
  ADD KEY `position` (`position`);

--
-- Indexes for table `leaders`
--
ALTER TABLE `leaders`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `publicity`
--
ALTER TABLE `publicity`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `blog`
--
ALTER TABLE `blog`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;
--
-- AUTO_INCREMENT for table `event`
--
ALTER TABLE `event`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
--
-- AUTO_INCREMENT for table `guestusers`
--
ALTER TABLE `guestusers`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT for table `hod`
--
ALTER TABLE `hod`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `leaders`
--
ALTER TABLE `leaders`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `publicity`
--
ALTER TABLE `publicity`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
