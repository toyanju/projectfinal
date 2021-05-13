-- phpMyAdmin SQL Dump
-- version 5.0.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: May 13, 2021 at 03:56 PM
-- Server version: 10.4.11-MariaDB
-- PHP Version: 7.3.15

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `ligabd`
--

-- --------------------------------------------------------

--
-- Table structure for table `customer`
--

CREATE TABLE `customer` (
  `id` int(100) NOT NULL,
  `nome` text COLLATE utf8_bin NOT NULL,
  `user` varchar(30) COLLATE utf8_bin NOT NULL,
  `email` varchar(30) COLLATE utf8_bin NOT NULL,
  `pass1` varchar(20) COLLATE utf8_bin NOT NULL,
  `pass2` varchar(20) COLLATE utf8_bin NOT NULL,
  `idade` int(11) DEFAULT NULL,
  `numero` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

--
-- Dumping data for table `customer`
--

INSERT INTO `customer` (`id`, `nome`, `user`, `email`, `pass1`, `pass2`, `idade`, `numero`) VALUES
(1, 'Shehnaaz Gill', 'Sana', 'shehnaazgill12@gmail.com', 'Greenapple12', 'Greenapple12', 27, 920267986),
(2, 'Sidharth Shukla', 'Sid', 'sidharthshukla34@gmail.com', 'Raspberry34', 'Raspberry34', 40, 912378096),
(3, 'Sidhearts Shehnaazians', 'Sidnaaz', 'sidnaaz56@gmail.com', 'Black_greenGrape56', 'Black_greenGrape56', 35, 912960243),
(6, 'toyanju gurung', 'toyanju', 'toyanjugurung2001@gmail.com', 'Sab12', 'Sab12', 19, 2147483647),
(10, '', 'Sana', '', '', '', 0, 0);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `customer`
--
ALTER TABLE `customer`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `customer`
--
ALTER TABLE `customer`
  MODIFY `id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
