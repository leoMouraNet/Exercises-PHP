-- phpMyAdmin SQL Dump
-- version 4.5.2
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Jun 14, 2016 at 10:49 PM
-- Server version: 5.7.9
-- PHP Version: 5.6.16

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `word_game`
--

-- --------------------------------------------------------

--
-- Table structure for table `words`
--

DROP TABLE IF EXISTS `words`;
CREATE TABLE IF NOT EXISTS `words` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `word` varchar(255) CHARACTER SET utf8 NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=51 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `words`
--

INSERT INTO `words` (`id`, `word`) VALUES
(1, 'Oil'),
(2, 'God'),
(3, 'Bad'),
(4, 'Sun'),
(5, 'Tea'),
(6, 'Arm'),
(7, 'Yes'),
(8, 'Tim'),
(9, 'Nil'),
(10, 'Air'),
(11, 'Bale'),
(12, 'Bely'),
(13, 'Gump'),
(14, 'Case'),
(15, 'Poor'),
(16, 'Fact'),
(17, 'Food'),
(18, 'Flip'),
(19, 'Tiny'),
(20, 'Lock'),
(21, 'Enter'),
(22, 'Facts'),
(23, 'While'),
(24, 'Bloor'),
(25, 'Shift'),
(26, 'Hello'),
(27, 'White'),
(28, 'Black'),
(29, 'Super'),
(30, 'Bones'),
(31, 'Addict'),
(32, 'Admits'),
(33, 'Adults'),
(34, 'Behind'),
(35, 'Cloves'),
(36, 'Cloudy'),
(37, 'Driven'),
(38, 'Female'),
(39, 'Ghosts'),
(40, 'Helper'),
(41, 'Aborted'),
(42, 'Anymore'),
(43, 'Cracked'),
(44, 'Episode'),
(45, 'Guarded'),
(46, 'Guarani'),
(47, 'Lockout'),
(48, 'Nascent'),
(49, 'Naughty'),
(50, 'Playoff');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
