-- phpMyAdmin SQL Dump
-- version 5.3.0-dev+20221125.2e001c186a
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jan 25, 2023 at 05:15 AM
-- Server version: 10.4.24-MariaDB
-- PHP Version: 8.1.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `user`
--

-- --------------------------------------------------------

--
-- Table structure for table `contact`
--

CREATE TABLE `contact` (
  `id` int(11) NOT NULL,
  `nama` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `comment` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `contact`
--

INSERT INTO `contact` (`id`, `nama`, `email`, `comment`) VALUES
(1, 'admin', 'admin@admin.com', 'd'),
(2, 'admin2', 'difidodifido@yahoo.com', 'sada'),
(3, 'admin', 'difidodifido@yahoo.com', 'da'),
(4, 'Supomos', 'difidoblackwight@gmail.com', 'da'),
(5, 'Supomos', 'difidoblackwight@gmail.com', 'da'),
(7, 'Supomos', 'difidoblackwight@gmail.com', 'da'),
(8, 'Supomos', 'difidoblackwight@gmail.com', 'da'),
(9, 'Supomos', 'difidoblackwight@gmail.com', 'da'),
(10, 'Supomos', 'difidoblackwight@gmail.com', 'da'),
(11, 'Supomos', 'difidoblackwight@gmail.com', 'da'),
(12, 'Supomos', 'difidoblackwight@gmail.com', 'da'),
(13, 'Supomos', 'difidoblackwight@gmail.com', 'da'),
(14, 'Supomos', 'difidoblackwight@gmail.com', 'da'),
(15, 'Supomos', 'difidoblackwight@gmail.com', 'da'),
(16, 'Supomos', 'difidoblackwight@gmail.com', 'da'),
(17, 'Supomos', 'difidoblackwight@gmail.com', 'da');

-- --------------------------------------------------------

--
-- Table structure for table `game`
--

CREATE TABLE `game` (
  `id_game` int(11) NOT NULL,
  `nama_game` varchar(255) NOT NULL,
  `desc_game` text NOT NULL,
  `gambar` varchar(255) NOT NULL,
  `jml_point` int(11) NOT NULL,
  `jenis_point` varchar(255) NOT NULL,
  `rl_nama` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `game`
--

INSERT INTO `game` (`id_game`, `nama_game`, `desc_game`, `gambar`, `jml_point`, `jenis_point`, `rl_nama`) VALUES
(3, 'Mobile Legends', 'Mobile Legends adalah permainan MOBA yang dirancang untuk ponsel. Kedua tim masing-masing berisi lima orang berjuang untuk mencapai dan menghancurkan markas musuh sambil mempertahankan markas mereka sendiri untuk mengendalikan tiga jalur, yang dikenal sebagai jalur \"atas\", \"tengah\" dan \"bawah\", yang menghubung ke setiap markas', 'mlbb', 423, 'Diamond', 'mobilelegend'),
(4, 'Lost Saga', 'dwadwa', 'lost_saga', 5432432, 'Coin', 'lostsaga');

-- --------------------------------------------------------

--
-- Table structure for table `pembayaran`
--

CREATE TABLE `pembayaran` (
  `id_pb` int(11) NOT NULL,
  `email_pb` varchar(255) NOT NULL,
  `gameid_pb` int(11) NOT NULL,
  `phone_pb` int(11) NOT NULL,
  `jumlah` int(11) NOT NULL,
  `pembayaran` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `pembayaran`
--

INSERT INTO `pembayaran` (`id_pb`, `email_pb`, `gameid_pb`, `phone_pb`, `jumlah`, `pembayaran`) VALUES
(6, 'difidodifido@yahoo.com', 290382, 812345667, 50000, 'Gopay'),
(7, 'difidoblackwight@gmail.com', 290382, 812345667, 1000, 'Rex Coin');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `username` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `is_admin` int(2) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `username`, `email`, `password`, `is_admin`) VALUES
(1, 'Admin', 'admin@admin.com', '21232f297a57a5a743894a0e4a801fc3', 1),
(2, 'User', 'user123@gmail.com', 'ee11cbb19052e40b07aac0ca060c23ee', 0);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `contact`
--
ALTER TABLE `contact`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `game`
--
ALTER TABLE `game`
  ADD PRIMARY KEY (`id_game`);

--
-- Indexes for table `pembayaran`
--
ALTER TABLE `pembayaran`
  ADD PRIMARY KEY (`id_pb`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `contact`
--
ALTER TABLE `contact`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;

--
-- AUTO_INCREMENT for table `game`
--
ALTER TABLE `game`
  MODIFY `id_game` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `pembayaran`
--
ALTER TABLE `pembayaran`
  MODIFY `id_pb` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
