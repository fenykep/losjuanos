-- phpMyAdmin SQL Dump
-- version 4.8.5
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: Mar 12, 2019 at 12:52 AM
-- Server version: 10.1.38-MariaDB
-- PHP Version: 7.3.2

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `abel`
CREATE DATABASE abel;
--

-- --------------------------------------------------------

--
-- Table structure for table `termekek`
--

CREATE TABLE `termekek` (
  `id` int(11) NOT NULL,
  `termeknev` varchar(50) COLLATE utf8_hungarian_ci NOT NULL,
  `tag` varchar(40) COLLATE utf8_hungarian_ci DEFAULT '"egyéb"',
  `ar` int(11) NOT NULL DEFAULT '0',
  `szin` varchar(16) COLLATE utf8_hungarian_ci DEFAULT NULL,
  `meret` varchar(4) COLLATE utf8_hungarian_ci DEFAULT NULL,
  `kep` varchar(60) COLLATE utf8_hungarian_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_hungarian_ci;

--
-- Dumping data for table `termekek`
--

INSERT INTO `termekek` (`id`, `termeknev`, `tag`, `ar`, `szin`, `meret`) VALUES
(19, 'Los Juanos - Giri', 'PÃ³lÃ³', 3000, 'Fekete', 'S', 'cheese_white.jpg')
--
-- Indexes for dumped tables
--

--
-- Indexes for table `termekek`
--
ALTER TABLE `termekek`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `termekek`
--
ALTER TABLE `termekek`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=24;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
