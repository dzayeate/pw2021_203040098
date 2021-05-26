-- phpMyAdmin SQL Dump
-- version 5.0.3
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: May 26, 2021 at 09:05 PM
-- Server version: 10.4.14-MariaDB
-- PHP Version: 7.4.11

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `tubes_203040098`
--

-- --------------------------------------------------------

--
-- Table structure for table `item_dota_2`
--

CREATE TABLE `item_dota_2` (
  `id` int(11) NOT NULL,
  `gambar` varchar(100) NOT NULL,
  `nama_item` varchar(100) NOT NULL,
  `rarity` varchar(100) NOT NULL,
  `jenis` varchar(100) NOT NULL,
  `tahun_rilis` varchar(100) NOT NULL,
  `harga` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `item_dota_2`
--

INSERT INTO `item_dota_2` (`id`, `gambar`, `nama_item`, `rarity`, `jenis`, `tahun_rilis`, `harga`) VALUES
(1, 'arcana_teach.jpg', 'Swine of the Sunken Galley', 'Arcana', 'Kosmetik', '2014', 'Rp 230.000'),
(2, 'arcana_lina.png', 'Fiery Soul of the Slayer', 'Arcana', 'Kosmetik', '2013', 'Rp 267.000'),
(3, 'arcana_teror.png', 'Fractal Horns of Inner Abysm', 'Arcana', 'Kosmetik', '2014', 'Rp 270.000'),
(4, 'arcana_wind.png', 'Compass of the Rising Gale', 'Arcana', 'Kosmetik', '04 Sep 2020', 'Rp.4,288,158'),
(5, 'arcana_qop.png', 'The Eminence of Ristul', 'Arcana', 'Kosmetik', ' 11 Jun 2020', 'Rp.2,680,098'),
(6, 'arcana_wk.png', 'The One True King', 'Arcana', 'Kosmetik', ' 25 May 2020', 'Rp.2,680,098'),
(7, 'arcana_ogre.png', 'Flockhearts Gamble', 'Arcana', 'Kosmetik', '18 Dec 2019', 'Rp 296.000'),
(8, 'arcana_es.png', 'Planetfall', 'Arcana', 'Kosmetik', ' 23 May 2019', 'Rp.2,608,629'),
(9, 'arcana_rubick.png', 'The Magus Cypher', 'Arcana', 'Kosmetik', '19 Dec 2018', 'Rp.420.000'),
(21, 'arcana_cm.png', 'Frost Avalanche', 'Kosmetik', 'Arcana', '12 Feb 2015', 'Rp 286.000');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `id` int(255) NOT NULL,
  `username` varchar(64) COLLATE utf8_swedish_ci NOT NULL,
  `password` varchar(64) COLLATE utf8_swedish_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_swedish_ci;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`id`, `username`, `password`) VALUES
(1, 'admin', '$2y$10$uXYLiAu.LevZ1jlyVGZcz.uiGxaByRb2M/ChvBmuV/fShg5nBSYI2'),
(2, 'agum123', '$2y$10$tDMUrCnKy/j2W5tG.T2A8uDnENPBDPjErzI/aCD4Hw9l3ryvOhQ8S'),
(3, 'cek123', '$2y$10$ugn9uANSIWRTmZTC5I7Pr.LYjM7YUyVDdL9w/l7kmzlhoGUHHPXY.');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `item_dota_2`
--
ALTER TABLE `item_dota_2`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `item_dota_2`
--
ALTER TABLE `item_dota_2`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=22;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
