-- phpMyAdmin SQL Dump
-- version 2.11.6
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Dec 14, 2013 at 11:22 AM
-- Server version: 5.0.51
-- PHP Version: 5.2.6

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `elibrary`
--

-- --------------------------------------------------------

--
-- Table structure for table `categories`
--

CREATE TABLE `categories` (
  `id` int(11) NOT NULL auto_increment,
  `category_name` varchar(110) NOT NULL,
  `visibility` int(2) NOT NULL,
  PRIMARY KEY  (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=7 ;

--
-- Dumping data for table `categories`
--

INSERT INTO `categories` (`id`, `category_name`, `visibility`) VALUES
(1, 'kiddies', 1),
(2, 'primary', 1),
(3, 'junior secondary school', 1),
(4, 'senior secondary school', 1),
(5, 'tertiary', 1),
(6, 'general', 1);

-- --------------------------------------------------------

--
-- Table structure for table `featured_this_week`
--

CREATE TABLE `featured_this_week` (
  `id` int(11) NOT NULL auto_increment,
  `description` varchar(200) NOT NULL,
  `subject` varchar(100) NOT NULL,
  `content` text NOT NULL,
  `visibility` int(11) NOT NULL,
  PRIMARY KEY  (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

--
-- Dumping data for table `featured_this_week`
--


-- --------------------------------------------------------

--
-- Table structure for table `signup`
--

CREATE TABLE `signup` (
  `id` int(11) NOT NULL auto_increment,
  `name` varchar(200) NOT NULL,
  `username` varchar(100) NOT NULL,
  `password` varchar(100) NOT NULL,
  `residential_state` varchar(200) NOT NULL,
  `dob` varchar(200) NOT NULL,
  `email` varchar(200) NOT NULL,
  `phone_number` varchar(50) NOT NULL,
  `sex` varchar(20) NOT NULL,
  PRIMARY KEY  (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=2 ;

--
-- Dumping data for table `signup`
--

INSERT INTO `signup` (`id`, `name`, `username`, `password`, `residential_state`, `dob`, `email`, `phone_number`, `sex`) VALUES
(1, 'mustapha', 'm', '1', 'niger ', '2013-12-01', 'musty4real2@gmail.com', '0809989898', 'male');

-- --------------------------------------------------------

--
-- Table structure for table `subjects`
--

CREATE TABLE `subjects` (
  `id` int(11) NOT NULL auto_increment,
  `subject_name` varchar(100) NOT NULL,
  `subject_category_id` int(100) NOT NULL,
  `visibility` int(11) NOT NULL,
  PRIMARY KEY  (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=3 ;

--
-- Dumping data for table `subjects`
--

INSERT INTO `subjects` (`id`, `subject_name`, `subject_category_id`, `visibility`) VALUES
(1, 'physics', 4, 1),
(2, 'biology', 4, 1);

-- --------------------------------------------------------

--
-- Table structure for table `topics`
--

CREATE TABLE `topics` (
  `id` int(11) NOT NULL auto_increment,
  `subject_id` int(11) NOT NULL,
  `content` text NOT NULL,
  `visibility` int(11) NOT NULL,
  PRIMARY KEY  (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=3 ;

--
-- Dumping data for table `topics`
--

INSERT INTO `topics` (`id`, `subject_id`, `content`, `visibility`) VALUES
(1, 1, 'hello', 1),
(2, 1, 'why do we fall in love', 1);

-- --------------------------------------------------------

--
-- Table structure for table `tutorials`
--

CREATE TABLE `tutorials` (
  `id` int(11) NOT NULL auto_increment,
  `name` varchar(255) NOT NULL,
  `phone_number` varchar(20) NOT NULL,
  `country` varchar(50) NOT NULL,
  `category` varchar(50) NOT NULL,
  `topic` varchar(200) NOT NULL,
  `image` varchar(200) NOT NULL,
  `audio` varchar(200) NOT NULL,
  `note` text NOT NULL,
  `level` varchar(100) NOT NULL,
  `objectives` varchar(255) NOT NULL,
  `visibility` varchar(11) NOT NULL,
  PRIMARY KEY  (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

--
-- Dumping data for table `tutorials`
--

