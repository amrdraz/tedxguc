-- phpMyAdmin SQL Dump
-- version 4.0.6
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Apr 21, 2014 at 04:52 PM
-- Server version: 5.5.33
-- PHP Version: 5.5.3

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";

--
-- Database: `tedxguc`
--

-- --------------------------------------------------------

--
-- Table structure for table `member`
--

CREATE TABLE `member` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(30) NOT NULL,
  `role` varchar(20) NOT NULL,
  `major` varchar(20) NOT NULL,
  `skills` text NOT NULL,
  `talents` text NOT NULL,
  `achievments` text NOT NULL,
  `why` text NOT NULL,
  `past_experience` text NOT NULL,
  `facebook` varchar(120) NOT NULL,
  `website` varchar(120) NOT NULL,
  `points` int(11) NOT NULL,
  `img` varchar(120) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8mb4 AUTO_INCREMENT=2 ;

--
-- Dumping data for table `member`
--

INSERT INTO `member` (`id`, `name`, `role`, `major`, `skills`, `talents`, `achievments`, `why`, `past_experience`, `facebook`, `website`, `points`, `img`) VALUES
(1, 'Amr Draz', 'Secret', 'CS', 'many', 'many', 'many', 'keda', 'awesome', 'fb.com', 'amrdraz.com', 0, 'Amr Draz_.jpg');
