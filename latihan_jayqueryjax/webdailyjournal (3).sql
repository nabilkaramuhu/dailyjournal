-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jan 12, 2026 at 04:30 PM
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
-- Table structure for table `gallery`
--

CREATE TABLE `gallery` (
  `id` int(11) NOT NULL,
  `judul` text CHARACTER SET latin1 COLLATE latin1_swedish_ci DEFAULT NULL,
  `isi` text CHARACTER SET latin1 COLLATE latin1_swedish_ci DEFAULT NULL,
  `gambar` text CHARACTER SET latin1 COLLATE latin1_swedish_ci DEFAULT NULL,
  `tanggal` datetime DEFAULT NULL,
  `username` varchar(50) CHARACTER SET latin1 COLLATE latin1_swedish_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `gallery`
--

INSERT INTO `gallery` (`id`, `judul`, `isi`, `gambar`, `tanggal`, `username`) VALUES
(101, 'rumah gadang', 'Rumah adat tradisional dari suku Minangkabau di Sumatera Barat, Indonesia, yang memiliki arsitektur khas dengan atap melengkung runcing menyerupai tanduk kerbau.', 'g1.jpg', '2026-01-08 00:43:20', 'admin'),
(102, 'pemakaman adat toraja', 'Pemakaman adat Toraja, yang dikenal sebagai Rambu Solo\', merupakan salah satu tradisi kematian paling kompleks dan mahal di dunia. Upacara ini bertujuan untuk menyempurnakan kematian dan mengantarkan arwah (maramba) menuju Puya (alam baka).', 'g2.jpg', '2026-01-08 00:50:13', 'admin'),
(103, 'rumah radakng', 'Rumah Radakng adalah sebutan untuk rumah panjang khas suku Dayak Kanayatn di Kalimantan Barat. Berfungsi sebagai hunian kolektif bagi puluhan kepala keluarga, pusat kegiatan adat, musyawarah, dan kehidupan sosial. ', 'g3.jpg', '2026-01-08 00:54:31', 'admin'),
(104, 'rumah joglo', 'Rumah Joglo adalah rumah tradisional khas Jawa Tengah yang terkenal dan menjadi simbol bangunan Jawa. Bangunan ini umumnya terbuat dari kayu jati dan pada awalnya hanya dimiliki oleh kalangan bangsawan atau priyayi, yang melambangkan status sosial tinggi. ', 'g4.jpg', '2026-01-08 00:57:19', 'admin'),
(105, 'rumah khas bali', 'Rumah khas Bali tidak merujuk pada satu bangunan tunggal, melainkan sebuah kompleks perumahan yang terdiri dari beberapa bangunan terpisah di dalam satu area berpagar, yang dibangun berdasarkan filosofi Tri Hita Karana. ', 'g5.jpg', '2026-01-08 00:59:38', 'admin'),
(106, 'Desa Wae Rebo', 'Wae Rebo adalah desa adat terpencil yang terletak di Kabupaten Manggarai, Nusa Tenggara Timur (NTT). Desa ini berada di ketinggian sekitar 1.200 meter di atas permukaan laut dan sering dijuluki sebagai \"Kampung di Atas Awan\" karena sering diselimuti kabut. ', 'g6.jpg', '2026-01-08 01:02:07', 'admin'),
(107, 'rumah honai', 'Rumah Honai adalah rumah adat tradisional khas suku Dani di Lembah Baliem, Kabupaten Jayawijaya, Papua Pegunungan. Rumah ini unik karena bentuknya yang bundar dengan atap kerucut dari jerami atau ilalang, dirancang khusus untuk menghadapi iklim dingin di dataran tinggi Papua.', 'g7.jpg', '2026-01-08 01:04:12', 'admin');

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
(1, 'admin', 'e10adc3949ba59abbe56e057f20f883e', ''),
(4, 'danny', '21232f297a57a5a743894a0e4a801fc3', ''),
(5, 'nabil', '827ccb0eea8a706c4c34a16891f84e7b', '');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `article`
--
ALTER TABLE `article`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `gallery`
--
ALTER TABLE `gallery`
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
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=53;

--
-- AUTO_INCREMENT for table `gallery`
--
ALTER TABLE `gallery`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=110;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
