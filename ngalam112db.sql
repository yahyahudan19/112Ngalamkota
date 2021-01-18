-- phpMyAdmin SQL Dump
-- version 4.8.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jan 18, 2021 at 08:15 AM
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
  `gambar` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `detail_report`
--

INSERT INTO `detail_report` (`id`, `report_id`, `gambar`) VALUES
(4, 50, '1610268234_bcc8c3c1dcfb21a2b5f2.jpg'),
(5, 50, '1610268234_a3e1aad2eccc6ed9f455.png'),
(6, 51, '1610270898_75ff4c0078a830f76987.png'),
(7, 51, '1610270898_360a5de91cc3ff0f30b0.png'),
(8, 52, '1610271979_8640cd92fe3bf807843e.jpg'),
(9, 52, '1610271979_84b82b7a3b1d61949d57.png'),
(10, 52, '1610271979_1e8d3b82c3baf8017a6b.jpeg'),
(11, 52, '1610271979_0f29f82651e0dc632b62.png'),
(12, 53, '1610601594_91277657aa444b719435.png'),
(13, 53, '1610601594_d9dc1120f99b6db32a16.png'),
(14, 53, '1610601594_ecf22ae61d036b01bc69.png'),
(15, 54, '1610676219_d45e07761ad2465a6558.png'),
(16, 54, '1610676219_8a6e9b3b765fe81b97c2.png'),
(17, 54, '1610676219_773266b54c75fcebe48c.png'),
(18, 55, '1610866380_51656a2170ae3bdab367.jpg');

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
  `q5_feedback` varchar(125) NOT NULL,
  `created_at` date DEFAULT NULL,
  `updated_at` date DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `feedback`
--

INSERT INTO `feedback` (`id_feedback`, `nama_feedback`, `alamat_feedback`, `noHp_feedback`, `penyebab_feedback`, `q1_feedback`, `q2_feedback`, `q3_feedback`, `q4_feedback`, `q5_feedback`, `created_at`, `updated_at`) VALUES
(2, 'yahya hudan', 'malang', '081259224380', 'Males', 'benar', 'benar', 'benar', 'benar', 'mantap', '2021-01-07', '2021-01-07');

-- --------------------------------------------------------

--
-- Table structure for table `news`
--

CREATE TABLE `news` (
  `id_news` int(125) NOT NULL,
  `tagline_news` varchar(125) NOT NULL,
  `judul_news` varchar(255) NOT NULL,
  `isi_news` varchar(125) NOT NULL,
  `link_news` varchar(125) NOT NULL,
  `date_news` varchar(125) NOT NULL,
  `dokumentasi_news` varchar(125) NOT NULL,
  `created_at` date DEFAULT NULL,
  `updated_at` date DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `news`
--

INSERT INTO `news` (`id_news`, `tagline_news`, `judul_news`, `isi_news`, `link_news`, `date_news`, `dokumentasi_news`, `created_at`, `updated_at`) VALUES
(14, 'ini tagline', 'ini judulnya yaa', ' s cdsb cjkjkdc dv dv', 'https://github.com/yahyahudan19/112Ngalamkota', '2021-01-14', '1610952806_d7fbc0f8b0758843db6e.jpeg', '2021-01-18', '2021-01-18');

-- --------------------------------------------------------

--
-- Table structure for table `pengumuman`
--

CREATE TABLE `pengumuman` (
  `id_pengumuman` int(125) NOT NULL,
  `tagline_pengumuman` varchar(125) NOT NULL,
  `judul_pengumuman` varchar(125) NOT NULL,
  `isi_pengumuman` varchar(125) NOT NULL,
  `date_pengumuman` varchar(125) NOT NULL,
  `created_at` date DEFAULT NULL,
  `updated_at` date DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `pengumuman`
--

INSERT INTO `pengumuman` (`id_pengumuman`, `tagline_pengumuman`, `judul_pengumuman`, `isi_pengumuman`, `date_pengumuman`, `created_at`, `updated_at`) VALUES
(2, 'kebakaran', 'irfak pandai', 'Dugaan sementara api berasal dari arus pendek yang menyebabkan percikan api, dan merambat ke material yang mudah terbakar, se', '2021-01-10', '2021-01-16', '2021-01-16'),
(4, 'dwdw', 'Jam Kerja Layanan 112', 'wdefm               ', '2021-01-06', '2021-01-17', '2021-01-17'),
(5, 'Jam Kerja', 'Layanana akan bekerja pada jam kerja', 'SIAP SEDIA', '2021-01-18', '2021-01-17', '2021-01-17'),
(6, 'wddwdw', 'Jam Kerja Layanan 112', 'ntab', '2021-01-18', '2021-01-17', '2021-01-17');

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
(51, 'Pohon Tumbang', 'Jakarta', '2021-01-12', 'Irfak', 'Sudah ditangani Pemadam'),
(52, 'Kebakaran', 'Jakarta', '2021-01-19', 'Irfak Wahyudi', 'SUDAH'),
(53, 'Kebakaran', 'Malang', '2021-01-15', 'Irfak', 'Sudah ditangani Pemadam'),
(54, 'Pohon Tumbang', 'Malang', '2021-01-15', 'Irfak Wahyudi', 'Sudah ditangani Pemadam'),
(55, 'Kebakaran', 'Jakarta', '2021-01-11', 'Irfak Wahyudi', 'Sudah ditangani Pemadam');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `id_user` int(3) NOT NULL,
  `email` varchar(50) NOT NULL,
  `username` varchar(30) NOT NULL,
  `password` varchar(50) NOT NULL,
  `image` text NOT NULL,
  `role_id` int(1) NOT NULL,
  `is_active` int(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`id_user`, `email`, `username`, `password`, `image`, `role_id`, `is_active`) VALUES
(1, 'diskominfo_ngalamkota@gmail.go.id', 'superadmin', '123456', 'default.jpg', 1, 1),
(3, 'ngalam112@malangkota.go.id', 'admin', '123456', '', 2, 1);

-- --------------------------------------------------------

--
-- Table structure for table `user_role`
--

CREATE TABLE `user_role` (
  `id` int(3) NOT NULL,
  `role` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `user_role`
--

INSERT INTO `user_role` (`id`, `role`) VALUES
(1, 'SuperAdmin'),
(2, 'Admin');

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
-- Indexes for table `user_role`
--
ALTER TABLE `user_role`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `detail_report`
--
ALTER TABLE `detail_report`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;

--
-- AUTO_INCREMENT for table `feedback`
--
ALTER TABLE `feedback`
  MODIFY `id_feedback` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `news`
--
ALTER TABLE `news`
  MODIFY `id_news` int(125) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT for table `pengumuman`
--
ALTER TABLE `pengumuman`
  MODIFY `id_pengumuman` int(125) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `report`
--
ALTER TABLE `report`
  MODIFY `id_pelapor` int(3) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=56;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `id_user` int(3) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `user_role`
--
ALTER TABLE `user_role`
  MODIFY `id` int(3) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
