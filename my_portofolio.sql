-- phpMyAdmin SQL Dump
-- version 4.8.5
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Nov 02, 2022 at 04:15 PM
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
-- Database: `my_portofolio`
--

-- --------------------------------------------------------

--
-- Table structure for table `akun`
--

CREATE TABLE `akun` (
  `id` int(10) NOT NULL,
  `username` varchar(50) CHARACTER SET armscii8 NOT NULL,
  `password` varchar(100) CHARACTER SET armscii8 NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `akun`
--

INSERT INTO `akun` (`id`, `username`, `password`) VALUES
(4, 'aku', '$2y$10$YORaTc1Lxb.tYvp4/oti7e9yBcmiirMBNVZ1cIbqfQZJJ5bB242We'),
(5, 'Admin', '$2y$10$slHdZijs.sZSxvWaIyIwbeL7m5WAOPkWWf4w5oYr0yNnLv3gebrtW');

-- --------------------------------------------------------

--
-- Table structure for table `contactme`
--

CREATE TABLE `contactme` (
  `id` int(10) NOT NULL,
  `nama` varchar(30) NOT NULL,
  `email` varchar(30) NOT NULL,
  `no_hp` varchar(13) NOT NULL,
  `project` varchar(30) NOT NULL,
  `link_web` varchar(50) NOT NULL,
  `gambar` varchar(255) DEFAULT NULL,
  `waktu` datetime DEFAULT NULL,
  `pesan` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `contactme`
--

INSERT INTO `contactme` (`id`, `nama`, `email`, `no_hp`, `project`, `link_web`, `gambar`, `waktu`, `pesan`) VALUES
(8, 'Ujang', 'sarul300603@gmail.com', '0852-4815-551', 'Form', 'https://www.instagram.com', 'gggggggg.jpg', '2022-10-27 22:32:11', 'rrrrrrrrrrrrrrrr'),
(10, 'Asep', 'syamsiraja111@gmail.com', '0852-4815-551', 'Formulir Pendaftaran', 'https://www.facebook.com', 'Website1.jpg', '2022-10-27 22:25:18', 'aaaaaaaaaaaa');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `akun`
--
ALTER TABLE `akun`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `contactme`
--
ALTER TABLE `contactme`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `akun`
--
ALTER TABLE `akun`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `contactme`
--
ALTER TABLE `contactme`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
