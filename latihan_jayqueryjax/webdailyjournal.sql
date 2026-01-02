-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Dec 17, 2025 at 07:01 AM
-- Server version: 10.4.32-MariaDB
-- PHP Version: 8.2.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `webdailyjournal`
--

-- --------------------------------------------------------

--
-- Table structure for table `article`
--

CREATE TABLE `article` (
  `id` int(11) NOT NULL,
  `judul` text CHARACTER SET latin1 COLLATE latin1_swedish_ci DEFAULT NULL,
  `isi` text CHARACTER SET latin1 COLLATE latin1_swedish_ci DEFAULT NULL,
  `gambar` text CHARACTER SET latin1 COLLATE latin1_swedish_ci DEFAULT NULL,
  `tanggal` datetime DEFAULT NULL,
  `username` varchar(50) CHARACTER SET latin1 COLLATE latin1_swedish_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `article`
--

INSERT INTO `article` (`id`, `judul`, `isi`, `gambar`, `tanggal`, `username`) VALUES
(10, 'Bromo', 'Gunung Bromo di Jawa Timur terkenal dengan panorama matahari terbitnya yang memukau serta lautan pasir luas. Kawasan ini juga menjadi bagian dari Taman Nasional Bromo Tengger Semeru.', 'img3.jpg', '2025-12-10 21:36:32', 'admin'),
(20, 'Sarangan', 'Telaga Sarangan di Magetan, Jawa Timur, adalah danau alami di lereng Gunung Lawu yang menawarkan udara sejuk, pemandangan pegunungan, serta wahana perahu dan kuliner khas.', 'img4.jpg', '2025-12-10 21:44:51', 'admin'),
(30, 'Bali', 'Pulau Bali dikenal sebagai destinasi wisata dunia dengan pantai indah, budaya Hindu yang unik, kesenian tradisional, dan kehidupan malam yang ramai.', 'img5.jpg', '2025-12-10 21:47:21', 'admin'),
(31, 'Rinjani', 'Gunung Rinjani di Lombok, Nusa Tenggara Barat, merupakan gunung berapi tertinggi kedua di Indonesia, terkenal dengan pemandangan indah Danau Segara Anak di puncaknya.', 'img6.jpg', '2025-12-10 21:50:07', 'admin'),
(50, 'Raja Ampat', 'Terletak di Papua Barat, Raja Ampat terkenal dengan keindahan bawah lautnya yang menakjubkan, memiliki keanekaragaman biota laut tertinggi di dunia dan pemandangan pulau-pulau karst yang eksotis.', 'img7.jpg', '2025-12-10 21:53:10', 'admin');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `id` int(11) NOT NULL,
  `username` varchar(50) NOT NULL,
  `password` text NOT NULL,
  `foto` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`id`, `username`, `password`, `foto`) VALUES
(1, 'admin', 'e10adc3949ba59abbe56e057f20f883e', '');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `article`
--
ALTER TABLE `article`
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
-- AUTO_INCREMENT for table `article`
--
ALTER TABLE `article`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=51;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
