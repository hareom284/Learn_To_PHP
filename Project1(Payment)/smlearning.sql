-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: Jul 12, 2020 at 09:23 AM
-- Server version: 10.4.13-MariaDB
-- PHP Version: 7.4.7

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `smlearning`
--

-- --------------------------------------------------------

--
-- Table structure for table `table_1`
--

CREATE TABLE `table_1` (
  `id` int(11) NOT NULL,
  `roll` varchar(100) NOT NULL,
  `name` varchar(100) NOT NULL,
  `dop` varchar(50) NOT NULL,
  `fees` varchar(100) NOT NULL,
  `nmonth` varchar(100) NOT NULL,
  `tamount` varchar(100) NOT NULL,
  `month` varchar(100) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `table_1`
--

INSERT INTO `table_1` (`id`, `roll`, `name`, `dop`, `fees`, `nmonth`, `tamount`, `month`) VALUES
(1, '01', 'Priti Sinhi', '2018-07-10', '500', '2', '1000', 'may, june'),
(2, '02', 'RISHAV DAV KAR', '2018-07-10', '500', '2', '1000', 'june, july'),
(3, '5', 'Madan Gopal Karmakar', '2018-07-11', '300', '2', '600', 'may, june'),
(4, '9', 'Zaw Zaw Win', '2020-07-06', '12000', '12', '144000', '12');

-- --------------------------------------------------------

--
-- Table structure for table `table_2`
--

CREATE TABLE `table_2` (
  `id` int(11) NOT NULL,
  `roll` varchar(100) NOT NULL,
  `name` varchar(100) NOT NULL,
  `nmonth` varchar(100) NOT NULL,
  `tamount` varchar(100) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `table_2`
--

INSERT INTO `table_2` (`id`, `roll`, `name`, `nmonth`, `tamount`) VALUES
(1, '01', 'Priti Sinhi', '2', '1000'),
(2, '02', 'RISHAV DAV KAR', '2', '1000'),
(3, '5', 'Madan Gopal Karmakar', '2', '600'),
(4, '9', 'Zaw Zaw Win', '12', '144000');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `table_1`
--
ALTER TABLE `table_1`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `table_2`
--
ALTER TABLE `table_2`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `table_1`
--
ALTER TABLE `table_1`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `table_2`
--
ALTER TABLE `table_2`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
