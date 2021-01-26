-- phpMyAdmin SQL Dump
-- version 4.8.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jan 26, 2021 at 03:11 AM
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
  `created_at` date DEFAULT NULL,
  `updated_at` date DEFAULT NULL
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
(35, 62, '1611557884_9744aad587e8454e99ee.jpeg', NULL, NULL),
(36, 62, '1611557884_2047312b875b9ea23cab.jpg', NULL, NULL),
(37, 62, '1611557884_d1213d55a160dfb80181.jpg', NULL, NULL),
(38, 62, '1611557884_cd65494f4c124cd7f126.jpeg', NULL, NULL),
(39, 62, '1611557884_e077297e1204b49d82f8.jpg', NULL, NULL);

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
  `created_at` date DEFAULT NULL,
  `updated_at` date DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `feedback`
--

INSERT INTO `feedback` (`id_feedback`, `nama_feedback`, `alamat_feedback`, `noHp_feedback`, `penyebab_feedback`, `q1_feedback`, `q2_feedback`, `q3_feedback`, `q4_feedback`, `q5_feedback`, `created_at`, `updated_at`) VALUES
(2, 'yahya hudan', 'malang', '081259224380', 'Males', 'benar', 'benar', 'benar', 'benar', 'mantap', '2021-01-07', '2021-01-07'),
(3, 'iwendu', 'kdmdm', 'kdwk', 'kdmiwdmi', 'iya', 'iya', 'iya', 'Sangat Bagus', 'ue2ne3ujej3', '2021-01-22', '2021-01-22');

-- --------------------------------------------------------

--
-- Table structure for table `news`
--

CREATE TABLE `news` (
  `id_news` int(125) NOT NULL,
  `tagline_news` varchar(125) NOT NULL,
  `judul_news` varchar(255) NOT NULL,
  `isi_news` text NOT NULL,
  `link_news` varchar(125) NOT NULL,
  `date_news` varchar(125) NOT NULL,
  `dokumentasi_news` varchar(125) NOT NULL,
  `visible_news` tinyint(1) NOT NULL DEFAULT '1',
  `created_at` date DEFAULT NULL,
  `updated_at` date DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `news`
--

INSERT INTO `news` (`id_news`, `tagline_news`, `judul_news`, `isi_news`, `link_news`, `date_news`, `dokumentasi_news`, `visible_news`, `created_at`, `updated_at`) VALUES
(23, 'halo', 'ini judulnya yaa', 'jbhvh', 'https://www.liputan6.com/tag/kebakaran', '2021-01-14', '1611033228_e76c00647bb7807635a8.jpg', 0, '2021-01-18', '2021-01-18'),
(24, 'ini tagline', 'hahahakdnkdnw', 'mdkfmk', 'https://www.liputan6.com/tag/kebakaran', '2021-01-06', '1611033800_f971aef1599eb0f926eb.jpeg', 0, '2021-01-18', '2021-01-18'),
(25, 'Kebakaran', 'KMLSKAMKLASD', 'Pengenalan: Bagian ini akan memberikan penjelasan yang singkat mengenai peristiwa sejarah yang akan diceritakan.\r\nUrutan Keja', 'A;LSDM;LMDLADM', '2021-01-20', '1611379421_77bc207bd2a7a9936a1b.jpg', 1, '2021-01-19', '2021-01-19'),
(26, 'Banjirrrrr', 'kebakaran hutan', 'VYWWWWWWWWWWWWWWWWWWWWWWBJWBJDWBKJE', 'https://github.com/yahyahudan19/112Ngalamkota', '2021-01-26', '1611552144_ab0f2b9178a76c7e5da9.jpg', 1, '2021-01-24', '2021-01-24');

-- --------------------------------------------------------

--
-- Table structure for table `pengumuman`
--

CREATE TABLE `pengumuman` (
  `id_pengumuman` int(125) NOT NULL,
  `tagline_pengumuman` varchar(125) NOT NULL,
  `judul_pengumuman` varchar(125) NOT NULL,
  `isi_pengumuman` text NOT NULL,
  `date_pengumuman` varchar(125) NOT NULL,
  `visible_pengumuman` tinyint(1) NOT NULL DEFAULT '1',
  `created_at` date DEFAULT NULL,
  `updated_at` date DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `pengumuman`
--

INSERT INTO `pengumuman` (`id_pengumuman`, `tagline_pengumuman`, `judul_pengumuman`, `isi_pengumuman`, `date_pengumuman`, `visible_pengumuman`, `created_at`, `updated_at`) VALUES
(4, 'dwdw', 'Jam Kerja Layanan 112 aahahah', 'wdefm   hahaha            ', '2021-01-06', 0, '2021-01-17', '2021-01-17'),
(5, 'Jam Kerja', 'Layanana akan bekerja pada jam kerja', 'SIAP SEDIA', '2021-01-18', 1, '2021-01-17', '2021-01-17'),
(6, 'wak wau', 'JOS', 'AOWKWKWKKW', '2021-01-14', 1, '2021-01-24', '2021-01-24');

-- --------------------------------------------------------

--
-- Table structure for table `report`
--

CREATE TABLE `report` (
  `id_pelapor` int(3) NOT NULL,
  `kejadian` text NOT NULL,
  `lokasi_kejadian` varchar(100) NOT NULL,
  `tanggal` date NOT NULL,
  `nama_pelapor` varchar(30) NOT NULL,
  `tindak_lanjut` varchar(225) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `report`
--

INSERT INTO `report` (`id_pelapor`, `kejadian`, `lokasi_kejadian`, `tanggal`, `nama_pelapor`, `tindak_lanjut`) VALUES
(62, 'Pohon Tumbang', 'Jakarta', '2021-01-19', 'Irfak', 'SUDAH');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `id_user` int(3) NOT NULL,
  `email` varchar(50) NOT NULL,
  `username` varchar(30) NOT NULL,
  `password` varchar(50) NOT NULL,
  `level` varchar(20) NOT NULL,
  `created_at` date DEFAULT NULL,
  `updated_at` date DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`id_user`, `email`, `username`, `password`, `level`, `created_at`, `updated_at`) VALUES
(0, 'diskominfo_ngalamkota@gmail.go.id', 'superadminnnnnn', '123456789101', 'Super Admin', NULL, NULL),
(3, 'ngalam112@malangkota.go.id', 'admin', '123456', 'Admin', NULL, NULL),
(6, 'haha@gmail.com', 'Irfak Wahyudi', 'master', 'Super Admin', NULL, NULL);

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
-- Indexes for table `pengumuman`
--
ALTER TABLE `pengumuman`
  ADD PRIMARY KEY (`id_pengumuman`);

--
-- Indexes for table `report`
--
ALTER TABLE `report`
  ADD PRIMARY KEY (`id_pelapor`);

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
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=40;

--
-- AUTO_INCREMENT for table `feedback`
--
ALTER TABLE `feedback`
  MODIFY `id_feedback` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `news`
--
ALTER TABLE `news`
  MODIFY `id_news` int(125) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=27;

--
-- AUTO_INCREMENT for table `pengumuman`
--
ALTER TABLE `pengumuman`
  MODIFY `id_pengumuman` int(125) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `report`
--
ALTER TABLE `report`
  MODIFY `id_pelapor` int(3) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=63;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `id_user` int(3) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
