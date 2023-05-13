-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Generation Time: May 13, 2023 at 12:05 PM
-- Server version: 8.0.31
-- PHP Version: 8.0.26

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `arash`
--
CREATE DATABASE IF NOT EXISTS `arash` DEFAULT CHARACTER SET utf16 COLLATE utf16_persian_ci;
USE `arash`;

-- --------------------------------------------------------

--
-- Table structure for table `forosh`
--

DROP TABLE IF EXISTS `forosh`;
CREATE TABLE IF NOT EXISTS `forosh` (
  `name` varchar(100) COLLATE utf16_persian_ci NOT NULL,
  `address` varchar(1000) COLLATE utf16_persian_ci NOT NULL,
  `number` varchar(20) CHARACTER SET utf16 COLLATE utf16_persian_ci NOT NULL,
  `phone` varchar(15) COLLATE utf16_persian_ci NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf16 COLLATE=utf16_persian_ci;

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

DROP TABLE IF EXISTS `users`;
CREATE TABLE IF NOT EXISTS `users` (
  `realname` varchar(80) COLLATE utf16_persian_ci NOT NULL,
  `password` varchar(60) COLLATE utf16_persian_ci NOT NULL,
  `number` varchar(14) COLLATE utf16_persian_ci NOT NULL,
  `type` tinyint NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf16 COLLATE=utf16_persian_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`realname`, `password`, `number`, `type`) VALUES
('آرش موسوی', '123', '09134567889', 0);
--
-- Database: `difal`
--
CREATE DATABASE IF NOT EXISTS `difal` DEFAULT CHARACTER SET utf16 COLLATE utf16_persian_ci;
USE `difal`;

-- --------------------------------------------------------

--
-- Table structure for table `prod`
--

DROP TABLE IF EXISTS `prod`;
CREATE TABLE IF NOT EXISTS `prod` (
  `id` int NOT NULL AUTO_INCREMENT,
  `name` varchar(255) COLLATE utf16_persian_ci NOT NULL,
  `description` varchar(3000) COLLATE utf16_persian_ci DEFAULT NULL,
  `price` varchar(30) COLLATE utf16_persian_ci DEFAULT NULL,
  `username` varchar(140) CHARACTER SET utf16 COLLATE utf16_persian_ci NOT NULL,
  `new` varchar(20) CHARACTER SET utf16 COLLATE utf16_persian_ci DEFAULT NULL,
  `location` varchar(1000) CHARACTER SET utf16 COLLATE utf16_persian_ci DEFAULT NULL,
  `image` varchar(1000) CHARACTER SET utf16 COLLATE utf16_persian_ci DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=18 DEFAULT CHARSET=utf16 COLLATE=utf16_persian_ci;

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

DROP TABLE IF EXISTS `users`;
CREATE TABLE IF NOT EXISTS `users` (
  `fullname` varchar(140) COLLATE utf16_persian_ci NOT NULL,
  `username` varchar(60) COLLATE utf16_persian_ci NOT NULL,
  `password` varchar(30) CHARACTER SET utf16 COLLATE utf16_persian_ci NOT NULL,
  `number` varchar(200) CHARACTER SET utf16 COLLATE utf16_persian_ci NOT NULL,
  `type` tinyint NOT NULL,
  PRIMARY KEY (`username`)
) ENGINE=MyISAM DEFAULT CHARSET=utf16 COLLATE=utf16_persian_ci;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
