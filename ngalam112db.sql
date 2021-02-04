-- phpMyAdmin SQL Dump
-- version 4.8.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Feb 04, 2021 at 04:29 PM
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
(5, 3, '1612451346_11cbd00650c0026a5b96.jpg', '2021-02-04 15:09:06', '2021-02-04 15:09:06'),
(6, 3, '1612451346_3ff44c2c66ff0f68dfb1.jpg', '2021-02-04 15:09:06', '2021-02-04 15:09:06'),
(7, 4, '1612451623_d653a2e63a7416200c86.jpg', '2021-02-04 15:13:43', '2021-02-04 15:13:43'),
(8, 4, '1612451623_5cc21a1eadcaaf2439a9.jpg', '2021-02-04 15:13:43', '2021-02-04 15:13:43'),
(9, 4, '1612451623_91b8bd5a6c0b63f176f8.jpg', '2021-02-04 15:13:43', '2021-02-04 15:13:43'),
(14, 6, '1612451950_fdeb08172b8c50a4a5c7.jpg', '2021-02-04 15:19:10', '2021-02-04 15:19:10'),
(15, 6, '1612451950_a0e88767924e4465639a.jpeg', '2021-02-04 15:19:10', '2021-02-04 15:19:10'),
(16, 6, '1612451950_822c1bf15ae07f6af7c7.jpeg', '2021-02-04 15:19:10', '2021-02-04 15:19:10'),
(17, 7, '1612452252_bf9d94f5f85b44ddda69.jpg', '2021-02-04 15:24:12', '2021-02-04 15:24:12'),
(18, 7, '1612452252_92259d0cdec9f2dd13d4.jpg', '2021-02-04 15:24:12', '2021-02-04 15:24:12'),
(19, 7, '1612452252_80d99924f06748db295e.jpg', '2021-02-04 15:24:12', '2021-02-04 15:24:12'),
(20, 7, '1612452252_950b8a3cbf1697d033e5.jpg', '2021-02-04 15:24:12', '2021-02-04 15:24:12');

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
(8, 'Muhammad Maulana Ibrahim', 'Jl. Pattimura Timur Klojen, Kota Malang', '081936933474', 'Tanah Longsor', 'iya', 'iya', 'iya', 'Sangat Bagus', 'Informasi lebih update lagi', '2021-02-03 22:30:04', '2021-02-03 22:30:04'),
(9, 'Dimas Setiawan', 'Jl. Indrokilo Selatan Lawang, Kab.Malang', '085125677454', 'Banjir', 'iya', 'iya', 'iya', 'Sangat Bagus', 'Fitur-fitur website 112 ditambah lagi', '2021-02-04 00:06:36', '2021-02-04 00:06:36'),
(10, 'Wahyu Indah Permata Sari', 'Jl. Untung Suropati Lowokwaru, Kota Malang', '081989322454', 'Kebakaran', 'iya', 'tidak', 'iya', 'Bagus', 'Desainnya diperbaiki lebih bagus', '2021-02-04 00:08:38', '2021-02-04 00:08:38'),
(11, 'Mutiara Zaskiya', 'Jl. Jendral Sudirman Ketindan, Kab. Malang', '085747455676', 'Pohon Tumbang', 'tidak', 'iya', 'tidak', 'Cukup', 'Layanan lebih responsif', '2021-02-04 00:13:15', '2021-02-04 00:13:15'),
(12, 'Adam Alan Putra', 'Jl. Sumbersari Lowokwaru, Kota Malang', '089343122121', 'Kecelakaan', 'tidak', 'tidak', 'tidak', 'Sangat Kurang', 'Media sosialnya diaktifkan lagi', '2021-02-04 00:21:22', '2021-02-04 00:21:22'),
(13, 'Luna Siska Saputri', 'Jl. Hasuddin Sanan, Kota Malang', '081232211234', 'Angin Topan', 'iya', 'tidak', 'iya', 'Kurang', 'Media sosial diperluas lagi', '2021-02-04 00:23:33', '2021-02-04 00:23:33'),
(14, 'Intan Pariwara', 'Jl. Bedali Indah Lawang, Kab. Malang', '083765766243', 'Banjir', 'iya', 'iya', 'iya', 'Sangat Kurang', 'Layanan lebih cepat dalam menangani keadaaan darurat', '2021-02-04 00:26:14', '2021-02-04 00:26:14'),
(15, 'James Bond', 'Jl. Telaga Biru Kepanjen, Kota Malang', '081936933475', 'Listrik Putus', 'iya', 'tidak', 'iya', 'Kurang', 'Media sosial diperluas lagi agar bisa dikenal masyarakat luas', '2021-02-04 00:29:41', '2021-02-04 00:29:41'),
(16, 'Yuni Wahyuningsih', 'Jl. Sejahtera Jaya Dau, Kota Malang', '089765766565', 'Gempa Bumi', 'iya', 'iya', 'tidak', 'Sangat Bagus', 'Diperbaiki tampilannya agar mudah dipahami', '2021-02-04 00:31:48', '2021-02-04 00:31:48'),
(17, 'Angger Wisnutama', 'Jl. Sultan Muria Singosari, Kab. Malang', '081936933476', 'Banjir', 'iya', 'tidak', 'tidak', 'Sangat Bagus', 'Media sosial diperbanyak agar bisa dihubungi dalam keadaan darurat', '2021-02-04 00:37:26', '2021-02-04 00:37:26'),
(18, 'Nurlaili Dewi Candra', 'Jl. Buntu Bunulrejo, Kota Malang', '085432311321', 'Gempa Bumi', 'tidak', 'iya', 'tidak', 'Kurang', 'Penanganan dipercepat dan responsif', '2021-02-04 00:42:46', '2021-02-04 00:42:46');

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
(42, 'Kebakaran', 'Toko Bangunan di Ciledug Tangerang Kebakaran, Tak Ada Korban Jiwa', 'Jakarta - Sebuah toko bangunan berlokasi di Jalan Tanah Seratus, Sudimara Jaya, Ciledug, Kota Tangerang, mengalami kebakaran. Api membakar habis material yang ada di toko bangunan tersebut.\r\n\r\n\"Iya benar, sekarang prosesnya dalam pendinginan. Kita upayakan jangan sampai keluar api lagi,\" kata Darmawan, Kabid Kedaruratan dan Logistik BPBD Kota Tangerang, saat dihubungi, Rabu (3/2/2021).', 'Kebakaran itu terjadi pada pukul 13.00 WIB. Darmawan menyebut api hanya membakar satu bangunan di lokasi.\r\n\r\nSelain itu, Darmawan menyebut pihaknya masih mengumpulkan keterangan saksi untuk memperkirakan kerugian materi dari kebakaran tersebut.', 'Sementara itu, Kapolsek Ciledug Kompol Wisnu Wardhana menambahkan pihaknya memastikan tidak ada korban jiwa dari kebakaran tersebut. Penyebab kebakaran pun masih dalam penyelidikan.\r\n\r\n', '\"Api sudah padam, tidak ada korban jiwa. Kerugian materi belum bisa diperkirakan. (Penyebab) masih lidik (penyelidikan),\" pungkasnya.', '2021-02-03', '1612356426_af98f6f0167252865afc.jpeg', 1, '2021-02-03 12:47:06', '2021-02-03 12:47:06'),
(43, 'Bencana Alam', 'Jembatan Penghubung Desa di Blitar Ambrol Diterjang Banjir', 'Blitar - Hujan deras mengguyur Blitar selama sekitar dua jam. Akibatnya, terjadi banjir bandang yang membuat sebuah jembatan ambrol.\r\n\r\nJembatan tersebut terletak di Dusun Jambangan RT 01 RW 07, yang merupakan akses penghubung antara Dusun Midodaren dengan Desa Dawuhan di Kecamatan Kademangan. Kondisi jembatan sepanjang 17 meter dengan lebar 5 meter itu putus di bagian tengah, akibat terjangan air sungai yang meluap.', '\"Petugas sedang menuju lokasi putusnya jembatan. Jembatan merupakan jalur sirip, ada lagi jalur yang lain tetapi harus memutar sekitar 7 km dengan akses yang susah,\" kata Petugas BPBD Kabupaten Blitar, Lukman saat dihubungi detikcom, Rabu (3/2/2021).\r\n\r\n', 'Informasi yang dihimpun, Dusun Midodaren dihuni sekitar 3.000 jiwa. Atau sekitar 1.500 kepala keluarga. Jembatan yang roboh menghubungkan Desa Dawuhan dengan Dusun Midodaren, Kaliandong dan Klangkapan.', 'Selain putusnya sebuah jembatan, hujan deras juga menimbulkan genangan air di ruas jalan utama Kecamatan Sutojayan. Bahkan akibat ketinggian air di atas 30 cm, warga setempat sempat menutup jalan dari simpang empat Jalan Raya Utara Lodoyo menuju selatan.\r\n\r\nKecamatan Sutojayan merupakan wilayah langganan banjir tahunan akibat meluapnya Sungai Unut. Sungai ini sedang dalam proses normalisasi. Sehingga ketika intensitas hujan mereda, genangan air di beberapa ruas jalan perlahan surut dalam hitungan jam.', '2021-02-04', '1612361586_4d1a79caa06ae4bccc49.jpeg', 1, '2021-02-03 14:20:39', '2021-02-03 14:20:39'),
(44, 'Bencana Alam', 'Banjir Sempat Tutup Akses Utama Antar Kecamatan di Tulungagung', 'Tulungagung - Sejumlah akses jalan utama di Kecamatan Campurdarat Tulungagung diterjang banjir. Dampaknya arus lalu lintas harus dialihkan melalui jalur alternatif.\r\nWakapolsek Campurdarat Iptu Anwari mengatakan beberapa ruas jalan yang sempat diterjang banjir berada di Desa Pelem, Desa Gamping, Desa Pojok serta Desq Ngentrong.', '\"Tadi air mulai meluap sekitar jam setengah tiga sore, tapi untuk sekarang sudah surut dan arus lalu lintas kembali lancar,\" kata Anwari, Rabu (3/2/2021).\r\n\r\nSaat terjadi banjir, arus lalu lintas dari Kecamatan Boyolangu menuju Campurdarat maupun Bandung terpaksa harus ditutup dan dialihkan melalui jalur alternatif. Sebab akses utama tersebut kondisinya diterjang banjir dengan arus yang cukup deras.', '\"Tadi dari perempatan Boyolangu yang menuju Bandung kami alihkan ke kanan, karena genangannya lumayan tinggi dan deras,\" ujarnya.\r\n\r\nAnwari menjelaskan banjir tersebut diakibatkan oleh kondisi curah hujan yang tinggi, sehingga sungai yang ada di kawasan Campurdarat tidak mampu menampung limpahan air dari pegunungan.', '\"Itu airnya dari gunung, orang sini bilangnya ancar. Untuk banjir ini yang terganggu adalah jalan utama, sedangkan yang masuk ke perumahan warga ya ada tapi sedikit,\" jelasnya.\r\n\r\nAnwari menambahkan saat ini kondisi banjir di jalur utama di Kecamatan Campurdarat telah surut. Akses lalu lintas dari wilayah kota menuju kawasan selatan Tulungagung kembali normal.\r\n\r\n\"Sekarang sudah berangsur-angsur normal,\" tandas Anwari.', '2021-02-05', '1612362230_f6b650afb3420d88c843.jpeg', 1, '2021-02-03 14:25:36', '2021-02-03 14:25:36'),
(45, 'Bencana Alam', 'Gerindra Jateng Bantu Korban Bencana Erupsi Merapi hingga Banjir', 'Jakarta - Erupsi Gunung Merapi dan banjir di sejumlah wilayah Jawa Tengah memberi dampak terhadap warga sekitar. Melihat hal ini, Dewan Pimpinan Daerah (DPD) Gerindra Jawa Tengah turut menyalurkan bantuannya untuk para korban.\r\n', '\"Sebelumnya, DPD mengirim relawan Satria Rescue Team Jateng yang bertugas membantu pengungsi dan memantau perkembangan erupsi Merapi di Magelang, Klaten dan Boyolali. Selanjutnya DPD memberi bantuan sembako dan kebutuhan dasar lainnya untuk korban erupsi Merapi,\" ujar Ketua Fraksi Gerindra DPRD Jateng, Rohmat Marzuki dalam keterangan tertulis, Rabu (3/2/2021).\r\n\r\nRohmat menjelaskan bersama pengurus Dewan Pimpinan Cabang (DPC) Gerindra Magelang, pihaknya telah menyalurkan bantuan untuk korban erupsi Merapi di Kecamatan Mertoyudan dan Kecamatan Dukun. Adapun bantuan tersebut merupakan sumbangan dari Fraksi Gerindra DPRD Jateng dan Anggota DPR RI, Prasetyo Hadi.', '\"Bantuan berupa sembako, susu bayi, masker dan keperluan lainnya untuk disalurkan kepada masyarakat yang terdampak erupsi Merapi melalui dua posko yaitu posko pengungsi Merapi di Desa Banyurejo, Kecamatan Mertoyudan dan posko siaga Merapi di Dusun Babadan, Desa Paten, Kecamatan Dukun,\" paparnya.\r\n', 'Selain itu, Ketua DPD Gerindra Jateng, Abdul Wachid juga memberikan bantuan untuk korban banjir di Kudus dan Jepara bersama jajaran pengurus DPC dan Fraksi Gerindra DPRD Kudus dan Jepara. Anggota DPR RI dari Dapil Jateng II ini berharap bantuan tersebut dapat meringankan beban para korban.\r\n', '2021-02-06', '1612362807_f185d9b9a0de698e2692.png', 1, '2021-02-03 14:36:52', '2021-02-03 14:36:52');

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
(3, 8, 'A112B', 'Irfak Wahyudi', 'Kebakaran', 'Jl. Sukabumi, Kota Malang', '2021-02-04', 'Wahyu Indah Sari', 'Sudah ditangani oleh pihak pemadam kebakaran', '2021-02-04 15:09:06', '2021-02-04 15:09:06'),
(4, 8, 'B112C', 'Irfak Wahyudi', 'Pohon Tumbang', 'Kedungkandang', '2021-02-05', 'Gigih Anjar', 'Sudah ditangani oleh Dinas Lingkungan Hidup', '2021-02-04 15:13:43', '2021-02-04 15:13:43'),
(6, 9, 'D112G', 'A. Yahya Hudan', 'Banjir', 'Turen', '2021-02-25', 'Bunga Citra', 'Sudah ditangani oleh Dinas Lingkungan Hidup dan Tim Sar', '2021-02-04 15:19:10', '2021-02-04 15:19:10'),
(7, 8, 'C112G', 'Irfak Wahyudi', 'Listrik Putus', 'Ketindan', '2021-02-26', 'Ardana Putra Pribadiansyah', 'Sudah ditangani oleh PLN', '2021-02-04 15:24:12', '2021-02-04 15:24:12');

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
(6, 'Kominfo Kota Malang', 'kominfo', 'ngalam112', 'Super Admin', NULL, '2021-02-03 14:01:40'),
(8, 'Irfak Wahyudi', 'irfak', 'irfak123456', 'Admin', NULL, '2021-02-03 14:01:07'),
(9, 'A. Yahya Hudan', 'hudan', 'hudan123456', 'Admin', '2021-02-02 03:59:29', '2021-02-03 14:00:55'),
(10, 'Muhammad Andy', 'andy', 'andy12345', 'Admin', '2021-02-02 04:18:22', '2021-02-03 14:00:12'),
(11, 'Abdullah Winasis', 'awin', 'awin1234', 'Admin', '2021-02-02 08:55:52', '2021-02-03 14:00:02'),
(12, 'Hendra Danang', 'hendra', 'hendra123', 'Admin', '2021-02-02 09:35:53', '2021-02-03 13:59:53');

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
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;

--
-- AUTO_INCREMENT for table `feedback`
--
ALTER TABLE `feedback`
  MODIFY `id_feedback` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;

--
-- AUTO_INCREMENT for table `news`
--
ALTER TABLE `news`
  MODIFY `id_news` int(125) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=46;

--
-- AUTO_INCREMENT for table `report`
--
ALTER TABLE `report`
  MODIFY `id_pelapor` int(3) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `id_user` int(3) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
