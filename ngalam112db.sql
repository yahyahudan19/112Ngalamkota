-- phpMyAdmin SQL Dump
-- version 4.8.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jan 31, 2021 at 02:48 AM
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
(40, 62, '1611723060_f6328018f4cc9f85e551.png', NULL, NULL),
(44, 63, '1611805613_56d78143818abb9634ed.png', NULL, NULL),
(45, 64, '1611890079_ba008d0bfa2a2ad0be62.jpg', NULL, NULL),
(46, 64, '1611890079_781971dc1d396b3920b9.jpeg', NULL, NULL),
(47, 64, '1611890079_20b4d4c11d892692de96.jpg', NULL, NULL),
(52, 65, '1611900479_c6e18b0c9c570cdcff36.jpg', NULL, NULL);

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
(5, 'irfak', 'lawang', '081936933474', 'Banjir', 'iya', 'iya', 'iya', 'Sangat Bagus', 'sipp', '2021-01-29', '2021-01-29');

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
(25, 'Banjir', 'Antisipasi Banjir, Ini Lokasi Pengungsian yang Disiapkan BPBD DKI Jakarta', 'Badan Penanggulangan Bencana Daerah (BPBD) DKI Jakarta telah menyiapkan lokasi pengungsian di sejumlah titik di wilayah Ibu Kota. Hal ini mengantisipasi potensi banjir karena hujan lebat disertai kilat dan angin kencang.\r\n<br>\r\nTitik-titik pengungsian tersebut tersebar di lima Kota administrasi. Sementara itu, Pelaksana tugas (Plt) Kepala Pelaksana BPBD DKI Jakarta, Sabdo Kurnianto mengimbau masyarakat melakukan antisipasi dan persiapan terkait peringatan dini atas potensi curah hujan dengan intensitas yang lebat dapat disertai kilat dan angin kencang.', 'https://www.liputan6.com/news/read/4469015/antisipasi-banjir-ini-lokasi-pengungsian-yang-disiapkan-bpbd-dki-jakarta', '2021-01-20', '1611820551_fb6119dc96e2eca0817a.jpg', 0, '2021-01-19', '2021-01-19'),
(26, 'Kebakaran', 'Hari ini kebakaran', 'ubdiwknldewkfjnewklfkew\r\ndjefjewufew\r\nfidewnfuewijfi', 'https://www.liputan6.com/tag/kebakaran', '2021-01-30', '1611900115_c08841bc97a2abc443d2.jpg', 1, '2021-01-29', '2021-01-29');

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
(6, 'Protokol Kesehatanaaaa', 'KPU Kota Malang Memperketat Protokol Kesehatan Untuk Mencegah Penyebaran Covid-19', 'Adanya perpanjangan Pemberlakuan Pembatasan Kegiatan Masyarakat dalam rangka pengendalian penyebaran Corona Virus Disease 2019 (COVID-19) menyebabkan beberapa daerah di Indonesia mengambil kebijakan pengaturan pemberlakuan pembatasan, termasuk memperketat penerapan protokol kesehatan.', '2021-01-28', 1, '2021-01-24', '2021-01-24'),
(7, 'Hari Nasional', 'Hari Gizi Nasional', 'Hari Gizi Nasional diperingati setiap Tanggal 25 Januari. Di Tahun 2021 ini, Peringatan Hari Gizi Nasional ke-61. Dengan memanfaatkan momentum Hari Gizi Nasional Ke-61 Tahun 2021 ini diharapkan para stakeholder termasuk masyarakat dan unsur pemerintah memiliki komitmen yang tinggi untuk ikut berperan serta bekerja sama dalam meningkatkan perbaikan gizi dan derajat kesehatan melalui tema Remaja Sehat, Bebas Anemia sebagaimana dikutip dari website https://kesmas.kemkes.go.id/.', '2021-01-29', 1, '2021-01-28', '2021-01-28'),
(8, 'Jam Kerja', 'Jam Kerja Layanan 112', 'hahaha', '2021-01-29', 1, '2021-01-29', '2021-01-29');

-- --------------------------------------------------------

--
-- Table structure for table `report`
--

CREATE TABLE `report` (
  `id_pelapor` int(3) NOT NULL,
  `no_tiket` varchar(25) NOT NULL,
  `nama_petugas` varchar(125) NOT NULL,
  `kejadian` text NOT NULL,
  `lokasi_kejadian` varchar(100) NOT NULL,
  `tanggal` date NOT NULL,
  `nama_pelapor` varchar(30) NOT NULL,
  `tindak_lanjut` varchar(225) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `report`
--

INSERT INTO `report` (`id_pelapor`, `no_tiket`, `nama_petugas`, `kejadian`, `lokasi_kejadian`, `tanggal`, `nama_pelapor`, `tindak_lanjut`) VALUES
(64, '', '', 'Pohon Tumbang', 'Malang', '2021-01-29', 'Hanna', 'Sudah ditangani Pemadam'),
(65, '', '', 'Angin Topan', 'Malang', '2021-01-29', 'Irfak', 'Sudah ditangani Pemadammm');

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
  `created_at` date DEFAULT NULL,
  `updated_at` date DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`id_user`, `nama_petugas`, `username`, `password`, `level`, `created_at`, `updated_at`) VALUES
(0, 'Irfak Wahyudi', 'superadminnnnnnaa', '123456789101q', 'Admin', NULL, NULL),
(6, 'Wahyuning', 'Irfak Wahyudi', 'master', 'Super Admin', NULL, NULL),
(7, 'Ahmad Adam', 'irfak', '1', 'Admin', NULL, NULL),
(8, 'Intan Pariwara', 'irfak', '123', 'Admin', NULL, NULL);

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
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=53;

--
-- AUTO_INCREMENT for table `feedback`
--
ALTER TABLE `feedback`
  MODIFY `id_feedback` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `news`
--
ALTER TABLE `news`
  MODIFY `id_news` int(125) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=27;

--
-- AUTO_INCREMENT for table `pengumuman`
--
ALTER TABLE `pengumuman`
  MODIFY `id_pengumuman` int(125) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `report`
--
ALTER TABLE `report`
  MODIFY `id_pelapor` int(3) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=66;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `id_user` int(3) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
