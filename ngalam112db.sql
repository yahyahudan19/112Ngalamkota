-- phpMyAdmin SQL Dump
-- version 4.8.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Feb 03, 2021 at 02:27 PM
-- Server version: 10.1.37-MariaDB
-- PHP Version: 7.3.1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `ngalam112db`
--

-- --------------------------------------------------------

--
-- Table structure for table `detail_report`
--

CREATE TABLE `detail_report` (
  `id` int(11) NOT NULL,
  `report_id` int(11) NOT NULL,
  `gambar` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT CURRENT_TIMESTAMP,
  `updated_at` timestamp NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `detail_report`
--

INSERT INTO `detail_report` (`id`, `report_id`, `gambar`, `created_at`, `updated_at`) VALUES
(4, 50, '1610268234_bcc8c3c1dcfb21a2b5f2.jpg', NULL, NULL),
(5, 50, '1610268234_a3e1aad2eccc6ed9f455.png', NULL, NULL),
(12, 53, '1610601594_91277657aa444b719435.png', NULL, NULL),
(13, 53, '1610601594_d9dc1120f99b6db32a16.png', NULL, NULL),
(14, 53, '1610601594_ecf22ae61d036b01bc69.png', NULL, NULL),
(15, 54, '1610676219_d45e07761ad2465a6558.png', NULL, NULL),
(16, 54, '1610676219_8a6e9b3b765fe81b97c2.png', NULL, NULL),
(17, 54, '1610676219_773266b54c75fcebe48c.png', NULL, NULL),
(18, 55, '1610866380_51656a2170ae3bdab367.jpg', NULL, NULL),
(31, 52, '1611386877_b2c99e79bebc549d8940', NULL, NULL),
(33, 59, '1611387086_d26bce91a7b25c3bac9b', NULL, NULL),
(34, 60, '1611387134_5e967e05504afd127242', NULL, NULL),
(40, 62, '1611723060_f6328018f4cc9f85e551.png', NULL, NULL),
(44, 63, '1611805613_56d78143818abb9634ed.png', NULL, NULL),
(45, 64, '1611890079_ba008d0bfa2a2ad0be62.jpg', NULL, NULL),
(46, 64, '1611890079_781971dc1d396b3920b9.jpeg', NULL, NULL),
(47, 64, '1611890079_20b4d4c11d892692de96.jpg', NULL, NULL),
(52, 65, '1611900479_c6e18b0c9c570cdcff36.jpg', NULL, NULL),
(53, 66, '1612231791_4a04bd5cacd7125570eb.png', NULL, NULL),
(54, 66, '1612231791_00ef7e3ebd37baec5736.jpg', NULL, NULL),
(55, 67, '1612232895_4149e7d8aa2cd40e24e7.png', NULL, NULL),
(56, 67, '1612232895_98dad38cc02ea44c0217.jpg', NULL, NULL),
(57, 68, '1612238429_f7f062dcecac0b9e3e48.png', '2021-02-02 04:00:29', '2021-02-02 04:00:29'),
(58, 69, '1612238535_0370566e25e8ec7893ea.png', '2021-02-02 04:02:15', '2021-02-02 04:02:15'),
(59, 70, '1612239265_3af8e81f883147359dbe.png', '2021-02-02 04:14:25', '2021-02-02 04:14:25'),
(67, 72, '1612255305_e246009578ebbcc6563d.jpg', '2021-02-02 08:41:45', '2021-02-02 08:41:45'),
(68, 73, '1612258771_53fe1f41c11d92a7520b.jpg', '2021-02-02 09:39:31', '2021-02-02 09:39:31'),
(69, 74, '1612258818_abea990dd8e78ab1dd3e.jpg', '2021-02-02 09:40:18', '2021-02-02 09:40:18'),
(70, 75, '1612259058_e61601ea2d87291c48a8.jpg', '2021-02-02 09:44:18', '2021-02-02 09:44:18'),
(74, 76, '1612319679_dec85da4dfc67185f16c.jpg', '2021-02-03 02:34:39', '2021-02-03 02:34:39'),
(75, 76, '1612319679_a6e695b52face7b36d64.jpg', '2021-02-03 02:34:39', '2021-02-03 02:34:39'),
(76, 76, '1612319679_e7a9401ef8f94c8c35e3.jpeg', '2021-02-03 02:34:39', '2021-02-03 02:34:39');

-- --------------------------------------------------------

--
-- Table structure for table `feedback`
--

CREATE TABLE `feedback` (
  `id_feedback` int(11) NOT NULL,
  `nama_feedback` varchar(125) NOT NULL,
  `alamat_feedback` varchar(125) NOT NULL,
  `noHp_feedback` varchar(125) NOT NULL,
  `penyebab_feedback` varchar(125) NOT NULL,
  `q1_feedback` varchar(125) NOT NULL,
  `q2_feedback` varchar(125) NOT NULL,
  `q3_feedback` varchar(125) NOT NULL,
  `q4_feedback` varchar(125) NOT NULL,
  `q5_feedback` text NOT NULL,
  `created_at` timestamp NULL DEFAULT CURRENT_TIMESTAMP,
  `updated_at` timestamp NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `feedback`
--

INSERT INTO `feedback` (`id_feedback`, `nama_feedback`, `alamat_feedback`, `noHp_feedback`, `penyebab_feedback`, `q1_feedback`, `q2_feedback`, `q3_feedback`, `q4_feedback`, `q5_feedback`, `created_at`, `updated_at`) VALUES
(6, 'irfaakk', 'lawang', '081936933474', 'Pohon Tumbang', 'iya', 'iya', 'iya', 'Sangat Bagus', 'a', '2021-02-01 15:03:26', '2021-02-01 15:03:26'),
(7, 'n', 'n', 'y', 'Kebakaran', 'iya', 'iya', 'tidak', 'Bagus', 'y', '2021-02-01 19:08:44', '2021-02-01 19:08:44');

-- --------------------------------------------------------

--
-- Table structure for table `news`
--

CREATE TABLE `news` (
  `id_news` int(125) NOT NULL,
  `tagline_news` varchar(125) NOT NULL,
  `judul_news` varchar(255) NOT NULL,
  `isi_news` text NOT NULL,
  `isi2_news` text NOT NULL,
  `isi3_news` text NOT NULL,
  `isi4_news` text NOT NULL,
  `date_news` varchar(125) NOT NULL,
  `dokumentasi_news` varchar(125) NOT NULL,
  `visible_news` tinyint(1) NOT NULL DEFAULT '1',
  `created_at` timestamp NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `updated_at` timestamp NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `news`
--

INSERT INTO `news` (`id_news`, `tagline_news`, `judul_news`, `isi_news`, `isi2_news`, `isi3_news`, `isi4_news`, `date_news`, `dokumentasi_news`, `visible_news`, `created_at`, `updated_at`) VALUES
(42, 'Kebakaran', 'Toko Bangunan di Ciledug Tangerang Kebakaran, Tak Ada Korban Jiwa', 'Jakarta - Sebuah toko bangunan berlokasi di Jalan Tanah Seratus, Sudimara Jaya, Ciledug, Kota Tangerang, mengalami kebakaran. Api membakar habis material yang ada di toko bangunan tersebut.\r\n\r\n\"Iya benar, sekarang prosesnya dalam pendinginan. Kita upayakan jangan sampai keluar api lagi,\" kata Darmawan, Kabid Kedaruratan dan Logistik BPBD Kota Tangerang, saat dihubungi, Rabu (3/2/2021).', 'Kebakaran itu terjadi pada pukul 13.00 WIB. Darmawan menyebut api hanya membakar satu bangunan di lokasi.\r\n\r\nSelain itu, Darmawan menyebut pihaknya masih mengumpulkan keterangan saksi untuk memperkirakan kerugian materi dari kebakaran tersebut.', 'Sementara itu, Kapolsek Ciledug Kompol Wisnu Wardhana menambahkan pihaknya memastikan tidak ada korban jiwa dari kebakaran tersebut. Penyebab kebakaran pun masih dalam penyelidikan.\r\n\r\n', '\"Api sudah padam, tidak ada korban jiwa. Kerugian materi belum bisa diperkirakan. (Penyebab) masih lidik (penyelidikan),\" pungkasnya.', '2021-02-03', '1612356426_af98f6f0167252865afc.jpeg', 1, '2021-02-03 12:47:06', '2021-02-03 12:47:06');

-- --------------------------------------------------------

--
-- Table structure for table `report`
--

CREATE TABLE `report` (
  `id_pelapor` int(3) NOT NULL,
  `id_admin` int(11) NOT NULL,
  `no_tiket` varchar(25) NOT NULL,
  `nama_petugas` varchar(125) NOT NULL,
  `kejadian` text NOT NULL,
  `lokasi_kejadian` varchar(100) NOT NULL,
  `tanggal` date NOT NULL,
  `nama_pelapor` varchar(30) NOT NULL,
  `tindak_lanjut` varchar(225) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `updated_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `report`
--

INSERT INTO `report` (`id_pelapor`, `id_admin`, `no_tiket`, `nama_petugas`, `kejadian`, `lokasi_kejadian`, `tanggal`, `nama_pelapor`, `tindak_lanjut`, `created_at`, `updated_at`) VALUES
(67, 0, '190', 'Ahmad Adam', 'Pohon Tumbang', 'Jakarta', '2021-02-02', 'Wahyu', 'Sudah ditangani Pemadammmmmmmmmmmmmmmmmmmo', '2021-02-02 02:53:18', '2021-02-02 02:53:43'),
(68, 0, 'g', 'Ahmad Adam', 'Banjir', 'Malang', '2021-02-10', 'Irfak', 'Sudah ditangani Pemadam', '2021-02-02 04:00:29', '2021-02-02 04:00:29'),
(69, 0, 'a', 'Wahyuning', 'Banjir', 'asdxzc', '2021-02-16', 'a', 'Sudah ditangani Pemadammmmmmmmmmmmmmmmmmm', '2021-02-02 04:02:15', '2021-02-02 04:02:15'),
(70, 7, '190', 'Irfak Wahyudi', 'Pohon Tumbang', 'Malang', '2021-02-17', 'Wahyu', 'Sudah ditangani Pemadammmmmmmmmmmmmmmmmmm', '2021-02-02 04:14:25', '2021-02-02 04:14:25'),
(71, 6, '190', 'YOI', 'Kebakaran', 'Malang', '2021-02-02', 'Irfak', 'Sudah ditangani Pemadammm', '2021-02-02 04:21:43', '2021-02-02 07:35:50'),
(72, 6, '213', 'Wahyuning', 'Angin Topan', 'Malang', '2021-02-09', 'Irfak', 'Sudah ditangani Pemadammm', '2021-02-02 08:41:03', '2021-02-02 08:41:45'),
(73, 0, '213', 'Intan Pariwara', 'Pohon Tumbang', 'Malang', '2021-02-09', 'Wahyu', 'Sudah ditangani Pemadammmmmmmmmmmmmmmmmmm', '2021-02-02 09:39:31', '2021-02-02 09:39:31'),
(74, 0, '190', 'Intan Pariwara', 'Banjir', 'Malang', '2021-02-10', 'Wahyu', 'Sudah ditangani Pemadammmmmmmmmmmmmmmmmmmo', '2021-02-02 09:40:18', '2021-02-02 09:40:18'),
(75, 12, '190', 'Intan Pariwara', 'Pohon Tumbang', 'Malang', '2021-02-02', 'Wahyu', 'Sudah ditangani PLN', '2021-02-02 09:44:18', '2021-02-02 09:44:18'),
(76, 6, '190', 'Wahyuning', 'Pohon Tumbang', 'asdzxc', '2021-02-02', 'Irfak', 'Sudah ditangani PLN', '2021-02-02 09:44:49', '2021-02-03 02:34:39');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `id_user` int(3) NOT NULL,
  `nama_petugas` varchar(125) NOT NULL,
  `username` varchar(30) NOT NULL,
  `password` varchar(50) NOT NULL,
  `level` varchar(20) NOT NULL,
  `created_at` timestamp NULL DEFAULT CURRENT_TIMESTAMP,
  `updated_at` timestamp NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`id_user`, `nama_petugas`, `username`, `password`, `level`, `created_at`, `updated_at`) VALUES
(6, 'Wahyuning', 'Irfak Wahyudi', 'master', 'Super Admin', NULL, NULL),
(8, 'Intan Pariwara', 'irfak', '123', 'Admin', NULL, NULL),
(9, 'Wahyuning', '1831710077', '1', 'Admin', '2021-02-02 03:59:29', '2021-02-02 03:59:29'),
(10, 'YOI', '1', '1', 'Super Admin', '2021-02-02 04:18:22', '2021-02-02 08:51:14'),
(11, 'HANA', 'hai', 'hai', 'Admin', '2021-02-02 08:55:52', '2021-02-02 08:55:52'),
(12, 'Intan Pariwara', '123', '123', 'Admin', '2021-02-02 09:35:53', '2021-02-02 09:38:05');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `detail_report`
--
ALTER TABLE `detail_report`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `feedback`
--
ALTER TABLE `feedback`
  ADD PRIMARY KEY (`id_feedback`);

--
-- Indexes for table `news`
--
ALTER TABLE `news`
  ADD PRIMARY KEY (`id_news`);

--
-- Indexes for table `report`
--
ALTER TABLE `report`
  ADD PRIMARY KEY (`id_pelapor`),
  ADD KEY `id_petugas` (`id_admin`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id_user`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `detail_report`
--
ALTER TABLE `detail_report`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=77;

--
-- AUTO_INCREMENT for table `feedback`
--
ALTER TABLE `feedback`
  MODIFY `id_feedback` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `news`
--
ALTER TABLE `news`
  MODIFY `id_news` int(125) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=43;

--
-- AUTO_INCREMENT for table `report`
--
ALTER TABLE `report`
  MODIFY `id_pelapor` int(3) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=77;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `id_user` int(3) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
