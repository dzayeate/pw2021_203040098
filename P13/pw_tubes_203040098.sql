-- phpMyAdmin SQL Dump
-- version 5.0.3
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: May 18, 2021 at 07:06 AM
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
-- Database: `pw_tubes_203040098`
--

-- --------------------------------------------------------

--
-- Table structure for table `mahasiswa`
--

CREATE TABLE `mahasiswa` (
  `id` int(11) NOT NULL,
  `img` varchar(100) NOT NULL,
  `nrp` varchar(10) NOT NULL,
  `nama` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `jurusan` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `mahasiswa`
--

INSERT INTO `mahasiswa` (`id`, `img`, `nrp`, `nama`, `email`, `jurusan`) VALUES
(1, 'mut.jpg', '1930900999', 'Mutiara Tsalsabila', 'Mutiara@gmail.com', 'Keperawatan'),
(2, 'cecil.jpg', '203040500', 'Nazwa Cecillia', 'nzwccll@gmail.com', 'Fakultas Kedokteran Gigi'),
(3, 'vin.jpg', '203040097', 'Hervin Fakhrul', 'hervinfakhrulm@gmail.com', 'Teknik Informatika'),
(4, 'agoy.jpg', '203040112', 'Yoga Bagja Ramadhan', 'yogaarmdhn@gmail.com', 'Teknik Informatika'),
(5, 'dera.jpg', '203040117', 'Dera Ananda', 'derrrrrra@gmail.com', 'Teknik & Manajemen Industri'),
(6, 'gam.jpg', '203040098', 'Agam Ramdhan Kamil Atmaja', 'agamramdhan@gmail.com', 'Teknik Informatika'),
(7, 'vale.jpg', '203040086', 'Abizar Valentino Fachri', 'abivale@gmail.com', 'Teknik Informatika'),
(8, 'sal.jpg', '203020195', 'Salfa Assyfa Rahmadewi', 'salaaaasyaaan@gmail.com', 'Teknik Pangan'),
(9, 'bule.jpg', '203040043', 'Muhammad Rizky', 'muhammadrizky@gmail.com', 'Teknik Informatika'),
(10, 'des.jpg', '203060075', 'Descha Lailah Qadariyah', 'dessskaaa@gmail.com', 'Perancangan Wilayah Kota');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `id` int(255) NOT NULL,
  `username` varchar(64) NOT NULL,
  `password` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`id`, `username`, `password`) VALUES
(1, 'admin', 'admin123'),
(3, 'agum', '$2y$10$DKXD8/ZvhsGgllbD0Coe2ePEKzNvKA46l4UZrqc0UPu9mW49eCTGy'),
(4, 'agum123', '$2y$10$pZzliwhITJZ4EUM0IL/j5Ot/V5jm0fnfEQ7qFVckz0gtMDwbP8F3a');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `mahasiswa`
--
ALTER TABLE `mahasiswa`
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
-- AUTO_INCREMENT for table `mahasiswa`
--
ALTER TABLE `mahasiswa`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=71;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
