-- phpMyAdmin SQL Dump
-- version 4.8.5
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jul 21, 2019 at 08:21 AM
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
-- Database: `pertamina`
--

-- --------------------------------------------------------

--
-- Table structure for table `administrasi`
--

CREATE TABLE `administrasi` (
  `nama_agen` varchar(50) NOT NULL COMMENT 'Nama Agen',
  `apbu` varchar(10) NOT NULL COMMENT 'Akta Pendirian Badan Usaha',
  `pengesahan` varchar(10) NOT NULL COMMENT 'Pengesahan dari Depkum&HAM',
  `izin_keagenan` varchar(10) NOT NULL COMMENT 'Ijin Definitif  Keagenan LPG 3 Kg',
  `ktp` varchar(10) NOT NULL COMMENT 'KTP Direktur /Komisaris',
  `bank` varchar(10) NOT NULL COMMENT 'Surat Referensi Bank',
  `npwp` varchar(10) NOT NULL,
  `siup` varchar(10) NOT NULL COMMENT 'Surat Izin Usaha Perdagangan',
  `tdp` varchar(10) NOT NULL COMMENT 'Tanda Daftar Perusahaan',
  `ho` varchar(10) NOT NULL COMMENT 'Izin Gangguan',
  `situ` varchar(10) NOT NULL COMMENT 'Surat Izin Tempat Usaha',
  `skdp` varchar(10) NOT NULL COMMENT 'Surat Keterangan Domisili Perusahaan',
  `imb` varchar(10) NOT NULL COMMENT 'Izin Mendirikan Bangunan',
  `sertifikat` varchar(10) NOT NULL COMMENT 'Sertifikat Tanah',
  `skck` varchar(10) NOT NULL COMMENT 'Surat Keterangan Catatan Kepolisian',
  `PKP` varchar(10) NOT NULL COMMENT 'Surat Keterangan PKP/Non PKP',
  `pangkalan` varchar(10) NOT NULL COMMENT 'Daftar Pangkalan dan Volume Pangkalan',
  `kontrak` varchar(10) NOT NULL COMMENT 'Kontrak dengan Outlet/Pangkalan',
  `pernyataan` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `administrasi`
--

INSERT INTO `administrasi` (`nama_agen`, `apbu`, `pengesahan`, `izin_keagenan`, `ktp`, `bank`, `npwp`, `siup`, `tdp`, `ho`, `situ`, `skdp`, `imb`, `sertifikat`, `skck`, `PKP`, `pangkalan`, `kontrak`, `pernyataan`) VALUES
('PT. PLN', 'Ada', 'Ada', '', 'Ada', 'Tidak Ada', 'Ada', 'Ada', 'Ada', 'Ada', 'Ada', 'Ada', 'Ada', 'Ada', 'Ada', 'Ada', 'Tidak Ada', 'Tidak Ada', 'Tidak Ada'),
('PT. SEGAR SARI', 'Ada', 'Ada', '', 'Ada', 'Tidak Ada', 'Ada', 'Ada', 'Ada', 'Ada', 'Ada', 'Ada', 'Ada', 'Ada', 'Ada', 'Ada', 'Ada', 'Ada', 'Tidak Ada'),
('SAKO', 'Tidak Ada', 'Ada', 'Tidak Ada', 'Ada', 'Tidak Ada', 'Ada', 'Tidak Ada', 'Tidak Ada', 'Tidak Ada', 'Tidak Ada', 'Ada', 'Ada', 'Tidak Ada', 'Tidak Ada', 'Tidak Ada', 'Tidak Ada', 'Tidak Ada', 'Tidak Ada');

-- --------------------------------------------------------

--
-- Table structure for table `helpdesk`
--

CREATE TABLE `helpdesk` (
  `id_hp` int(10) NOT NULL,
  `tanggal` date NOT NULL,
  `kategori` varchar(50) NOT NULL,
  `judul` varchar(100) NOT NULL,
  `isi` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `helpdesk`
--

INSERT INTO `helpdesk` (`id_hp`, `tanggal`, `kategori`, `judul`, `isi`) VALUES
(1, '2018-11-09', 'jaringan', 'Komputer Tidak Dapat Koneksi Internet', '<p>1. Status jaringan &ldquo;Connected&rdquo; namun tidak bisa terhubung ke internet?</p>\r\n\r\n<p><img alt=\"\" src=\"/kominfo/dist/ckeditor/kcfinder/upload/images/connected-namun-tidak-dapat-akses-internet.jpg\" style=\"height:300px; width:248px\" /></p>\r\n\r\n<p>Status tersebut sebenarnya sudah menunjukkan kepada kita bahwa kita telah terhubung dengan jaringan. Namun komputer belum bisa untuk mengakses internet. Langkah yang harus diambil adalah:</p>\r\n\r\n<p>a)&nbsp;Buka Web Browser kita, dan coba untuk mengakses beberapa website seperti&nbsp;<a href=\"http://www.google.com/\">www.google.com</a>. Jika dapat membuka salah satu situs web namun tidak bisa membuka yang lainnya, hal tersebut menandakan bahwa sebenarnya komputer kita sudah terhubung ke jaringan dan baik-baik saja. Permasalahannya hanya terletak pada ISP.</p>\r\n\r\n<p>b)&nbsp;Jika sama sekali tidak terhubung pada semua website, coba langkah kedua yaitu dengan melepaskan sambungan modem ke line telepon, kemudian tunggu beberapa saat lalu kemudian pasangkan kembali. Cobalah kembali untuk mengakses website!</p>\r\n\r\n<p>c)&nbsp;Jika kita terhubung dengan media wireless, cobalah untuk melepas kabel WAN pada Acces Point, dan pasangkan kembali setelah beberapa saat. Kemudian coba kembali untuk membuka website.</p>\r\n\r\n<p>d)&nbsp;Cobalah untuk merestart komputer kita.</p>\r\n\r\n<p>e)&nbsp;Jika tetap belum terhubung juga, cobalah untuk menghubungi pihak ISP untuk meminta bantuan.</p>\r\n\r\n<p>2.&nbsp;Apakah Status NIC atau Wireless &ldquo;Disabled&rdquo;?</p>\r\n\r\n<p><img alt=\"\" src=\"/kominfo/dist/ckeditor/kcfinder/upload/images/nic-atau-wireless-terdisabled.jpg\" style=\"height:299px; width:300px\" /></p>\r\n\r\n<p>Jika memang benar, maka segera&nbsp;<em>Enable-</em>kan dengan mengklik kanan terlebih dahulu!</p>\r\n\r\n<p>Masalah yang lebih serius adalah LAN card kita belum terinstall dengan benar. Jika hanya terdisable kita hanya perlu me-<em>enable-</em>kannya<em>&nbsp;</em>seperti contoh di atas, namun jika belum terinstall dengan benar, kita membutuhkan CD driver LAN card untuk bisa mengaktifkannya. Untuk mengecek apakah ada yang belum terinstall dengan benar, masuk ke&nbsp;<em>Device Manager&nbsp;</em>dan lihat apakah ada masalah di Network Adapters.</p>\r\n\r\n<p><img alt=\"\" src=\"/kominfo/dist/ckeditor/kcfinder/upload/images/3.jpg\" style=\"height:219px; width:300px\" /></p>\r\n\r\n<p>Contoh di atas adalah masalah karena salah satu Network Adapters belum ter-<em>enable</em>.</p>\r\n\r\n<p>3.&nbsp;Apakah terjadi IP Conflict?</p>\r\n\r\n<p>IP Conflict adalah sebuah troubleshooting sederhana yang terjadi akibat adanya IP komputer yang sama dalam sebuah jaringan. Walaupun sederhana, namun sangat menjengkelkan bagi pengguna yang belum mengerti tentang bagaimana cara merubah IP komputer kita.<img alt=\"\" src=\"/kominfo/dist/ckeditor/kcfinder/upload/images/4.jpg\" style=\"height:223px; width:531px\" /></p>\r\n\r\n<p>Untuk mengatasi masalah tersebut, kita lihat apakah benar ada IP yang sama dengan milih PC kita atau tidak. Pertama, masuk ke&nbsp;<em>cmd&nbsp;</em>dan tuliskan &ldquo;ipconfig /all&rdquo; dan tekan&nbsp;<em>Enter</em>.</p>\r\n\r\n<p><img alt=\"\" src=\"/kominfo/dist/ckeditor/kcfinder/upload/images/5.jpg\" style=\"height:298px; width:300px\" /></p>\r\n\r\n<p>Jika memang benar ada IP conflict, segera ganti IP komputer kita dengan yang lain. Cara gampangnya adalah sebagai berikut.</p>\r\n\r\n<p>a)&nbsp;Masuk ke Windows Explorer dan klik kanan pada&nbsp;<em>Network</em>.</p>\r\n\r\n<p><img alt=\"\" src=\"/kominfo/dist/ckeditor/kcfinder/upload/images/6.jpg\" style=\"height:169px; width:300px\" /></p>\r\n\r\n<p>Kemudian pilih&nbsp;<em>Properties&nbsp;</em>dan akan muncul jendela baru. Pilih&nbsp;<em>Change Adapter Settings</em>.</p>\r\n\r\n<p><img alt=\"\" src=\"/kominfo/dist/ckeditor/kcfinder/upload/images/7.jpg\" style=\"height:300px; width:300px\" /></p>\r\n\r\n<p>Akan masuk ke LAN setting, kemudian pilih jaringan yang kita gunakan. Klik kanan pada jaringan tersebut dan pilih&nbsp;<em>Properties</em>.</p>\r\n\r\n<p><img alt=\"\" src=\"/kominfo/dist/ckeditor/kcfinder/upload/images/8.jpg\" style=\"height:300px; width:300px\" /></p>\r\n\r\n<p>Kemudian akan muncul jendela seperti berikut. Dan pilih&nbsp;<em>Internet Protocol Version 4 (TCP/Ipv4)</em>&nbsp;kemudian pilih&nbsp;<em>Properties</em>.</p>\r\n\r\n<p><img alt=\"\" src=\"/kominfo/dist/ckeditor/kcfinder/upload/images/9.jpg\" style=\"height:299px; width:238px\" /></p>\r\n\r\n<p>Akan muncul tampilan berikut.</p>\r\n\r\n<p><img alt=\"\" src=\"/kominfo/dist/ckeditor/kcfinder/upload/images/10.jpg\" style=\"height:300px; width:269px\" /></p>\r\n\r\n<p>Nah, untuk mendapatkan IP baru kita tinggal mengganti IP kita agar tidak terjadi IP tersamakan lagi. Namun untuk lebih mudahnya kita langsung meminta ke server saja dengan memilih&nbsp;<em>Obtain an IP address automatically</em>.</p>\r\n\r\n<p><img alt=\"\" src=\"/kominfo/dist/ckeditor/kcfinder/upload/images/11.jpg\" style=\"height:299px; width:270px\" /></p>\r\n\r\n<p>4.&nbsp;Network Cable Unplugged?</p>\r\n\r\n<p><img alt=\"\" src=\"/kominfo/dist/ckeditor/kcfinder/upload/images/12.jpg\" style=\"height:86px; width:197px\" /></p>\r\n\r\n<p>Kondisi di atas menunjukkan bahwa koneksi kabel terlepas, tidak ada koneksi ke router/modem.</p>\r\n\r\n<p>Langkah perbaikan:</p>\r\n\r\n<p>a)&nbsp;Coba periksa apakah kabel jaringan kita telah terpasang pada port NIC atau belum. Jika belum segera pasangkan kembali.</p>\r\n\r\n<p>b)&nbsp;Jika kabel jaringan sudah terpasang namun tetap belum bisa mengakses internet, cobalah untuk mengganti port lain pada switch.</p>\r\n\r\n<p>c)&nbsp;Jika masih belum bisa mengakses internet, cobalah mengganti kabel jaringan. Ada kemungkinan kabel tersebut sudah rusak.</p>\r\n\r\n<p>d)&nbsp;Jika tetap belum bisa, ada kemungkinan kerusakan terjadi pada Network Adapter. Gantilah dengan Network Adapter lain.</p>\r\n\r\n<p>5.&nbsp;Wireless Adapter tidak dapat terhubung pada Wireless Network?</p>\r\n\r\n<p><img alt=\"\" src=\"/kominfo/dist/ckeditor/kcfinder/upload/images/13.jpg\" style=\"height:299px; width:209px\" /></p>\r\n\r\n<p>Tidak ada koneksi ke wireless network?</p>\r\n\r\n<p>Status ini menunjukkan koneksi wireless adapter kita terputus dengan jaringan wireless. Ada dua kemungkinan, adapter wireless kita tidak bisa terhubung ke wireless network kita, atau koneksi wireless intermittend. Untuk penyelesaian:</p>\r\n\r\n<p>a)&nbsp;Periksalah status perangkat wireless kita pada Windows, pastikan dalam keadaan aktif.</p>\r\n\r\n<p>b)&nbsp;Cobalah untuk melakukan pencarian sinyal pada hotspot area.</p>\r\n\r\n<p>Demikian penjelasan bagaimana menangani troubleshooting pada jaringan yang tidak terhubung dengan internet. Jika ada salah, saya mohon maaf. Mari saling mengingatkan dan belajar bersama!</p>\r\n\r\n<p><span style=\"color:#c0392b\"><strong>JIKA PERMASALAHAN MASI BELUM BISA TERSELESAIKAN SILAKAN LAKUKAN PELAPORAN DI FORM LAPOR !!</strong></span></p>\r\n\r\n<p><span style=\"color:#3498db\"><strong>ADMIN</strong></span></p>\r\n'),
(2, '2018-12-05', 'software', 'Aplikasi SPSS tidak dapat dibuka', '<p>jika pada saat buka software pertama kali (klik ikon shortcut) SPSS nya ga jalan, agan jangan was was, langsung pergi ke folder program SPSS nya, trus ada folder VC8 nah dalem folder tersebut ada file dengan nama &quot;Vcredist_x86.exe&quot; silahkan akan jalankan (double klik) pada program tersebut.</p>\r\n\r\n<p><img alt=\"\" src=\"/kominfo/dist/ckeditor/kcfinder/upload/images/Untitled.png\" style=\"height:225px; width:400px\" /></p>\r\n\r\n<p>maka akan muncul seperti proses instalasi, biarkan saja sampai selesai.<br />\r\ndan&nbsp;sekarang SPSS bisa&nbsp;untuk dibuka</p>\r\n\r\n<p><span style=\"color:#c0392b\"><strong>JIKA PERMASALAHAN MASI BELUM BISA TERSELESAIKAN SILAKAN LAKUKAN PELAPORAN DI FORM LAPOR !!</strong></span></p>\r\n\r\n<p><span style=\"color:#3498db\"><strong>ADMIN</strong></span></p>\r\n');

-- --------------------------------------------------------

--
-- Table structure for table `pengaduan`
--

CREATE TABLE `pengaduan` (
  `id_laporan` int(11) NOT NULL,
  `tanggal` date NOT NULL,
  `fullname` varchar(100) NOT NULL,
  `no_tiket` varchar(20) NOT NULL,
  `email` varchar(50) NOT NULL,
  `departemen` varchar(35) NOT NULL,
  `problem` text NOT NULL,
  `status` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `pengaduan`
--

INSERT INTO `pengaduan` (`id_laporan`, `tanggal`, `fullname`, `no_tiket`, `email`, `departemen`, `problem`, `status`) VALUES
(1, '2018-11-08', 'Veronika Hartati, SE', 'NTK0001', 'veronika@gmail.com', 'Sekretaris', 'Internet mati', 'Pending'),
(2, '2018-12-05', 'Drs. H. Iskandar Mirza, M.Si.', 'NTK0002', 'iskandarm@gmail.com', 'Statistik', 'Aplikasi SPSS tidak dapat dijalankan', 'Selesai');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_keagenan`
--

CREATE TABLE `tbl_keagenan` (
  `id` int(10) NOT NULL,
  `nama_perusahaan` varchar(100) NOT NULL,
  `nama_pemilik` varchar(50) NOT NULL,
  `no_ktp` varchar(24) NOT NULL,
  `status` varchar(25) DEFAULT NULL,
  `alamat` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_keagenan`
--

INSERT INTO `tbl_keagenan` (`id`, `nama_perusahaan`, `nama_pemilik`, `no_ktp`, `status`, `alamat`) VALUES
(33, 'PT. MITA', 'PETRUS ANAMBELLA', '161723112312241', 'Tidak Layak Diperpanjang', 'BANDUNG'),
(34, 'PT. Badriah', 'PETRUS S. SEMBIRING, ST.', '327306072590001', 'Tidak Layak Diperpanjang', 'BANDUNG');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_kriteria`
--

CREATE TABLE `tbl_kriteria` (
  `id` int(11) NOT NULL,
  `nama_kriteria` varchar(255) NOT NULL,
  `tipe` enum('BENEFIT','COST','','') DEFAULT NULL,
  `bobot` double DEFAULT NULL,
  `sub_kriteria` text
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_kriteria`
--

INSERT INTO `tbl_kriteria` (`id`, `nama_kriteria`, `tipe`, `bobot`, `sub_kriteria`) VALUES
(2, 'Kelengkapan Dokumen Administrasi', 'BENEFIT', 0.25, '{\"30\":\"Tidak Lengkap\",\"60\":\"Cukup\",\"100\":\"Lengkap\"}'),
(3, 'Armada Kelengkapan Keagenan', 'BENEFIT', 0.25, '{\"30\":\"1 - 3 Kendaraan\",\"50\":\"4 - 9 Kendaraan\",\"100\":\">= 10 Kendaraan\"}'),
(4, 'Fasilitas Keagenan', 'BENEFIT', 0.2, '{\"20\":\"Sangat Kurang\",\"30\":\"Kurang\",\"40\":\"Cukup\",\"80\":\"Baik\",\"100\":\"Sangat Baik\"}'),
(5, 'Penjualan Elpiji', 'BENEFIT', 0.3, '{\"30\":\"<=300 Tabung\",\"50\":\"300-500 Tabung\",\"70\":\"500-700 Tabung\",\"100\":\">=700 Tabung\"}');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_penilaian`
--

CREATE TABLE `tbl_penilaian` (
  `id` int(11) NOT NULL,
  `id_keagenan` int(11) NOT NULL,
  `nilai` text
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_penilaian`
--

INSERT INTO `tbl_penilaian` (`id`, `id_keagenan`, `nilai`) VALUES
(1, 3, '{\"2\":\"60\",\"3\":\"50\",\"4\":\"80\",\"5\":\"70\"}'),
(2, 4, '{\"2\":\"100\",\"3\":\"100\",\"4\":\"30\",\"5\":\"30\"}'),
(3, 7, '{\"2\":\"60\",\"3\":\"100\",\"4\":\"40\",\"5\":\"50\"}'),
(4, 5, '{\"2\":\"100\",\"3\":\"30\",\"4\":\"30\",\"5\":\"30\"}'),
(5, 9, '{\"2\":\"100\",\"3\":\"50\",\"4\":\"40\",\"5\":\"50\"}'),
(6, 10, '{\"2\":\"100\",\"3\":\"30\",\"4\":\"40\",\"5\":\"50\"}'),
(7, 33, '{\"2\":\"60\",\"3\":\"50\",\"4\":\"80\",\"5\":\"70\"}'),
(8, 34, '{\"2\":\"30\",\"3\":\"50\",\"4\":\"20\",\"5\":\"50\"}');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `username` varchar(30) NOT NULL,
  `email` varchar(50) NOT NULL,
  `fullname` varchar(100) NOT NULL,
  `user_type` varchar(20) NOT NULL,
  `password` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `username`, `email`, `fullname`, `user_type`, `password`) VALUES
(1, 'pertamina', 'pertamina@mor3bandung.com', 'Pertamina', 'admin', 'mor3bandung'),
(9, 'pertamina', 'pertamina@mor3bandung.com', 'Pertamina', 'manajer', 'pertaminamor3');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `administrasi`
--
ALTER TABLE `administrasi`
  ADD PRIMARY KEY (`nama_agen`);

--
-- Indexes for table `helpdesk`
--
ALTER TABLE `helpdesk`
  ADD PRIMARY KEY (`id_hp`);

--
-- Indexes for table `pengaduan`
--
ALTER TABLE `pengaduan`
  ADD PRIMARY KEY (`id_laporan`);

--
-- Indexes for table `tbl_keagenan`
--
ALTER TABLE `tbl_keagenan`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tbl_kriteria`
--
ALTER TABLE `tbl_kriteria`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tbl_penilaian`
--
ALTER TABLE `tbl_penilaian`
  ADD PRIMARY KEY (`id`),
  ADD KEY `id_keagenan` (`id_keagenan`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `helpdesk`
--
ALTER TABLE `helpdesk`
  MODIFY `id_hp` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `pengaduan`
--
ALTER TABLE `pengaduan`
  MODIFY `id_laporan` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `tbl_keagenan`
--
ALTER TABLE `tbl_keagenan`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=37;

--
-- AUTO_INCREMENT for table `tbl_kriteria`
--
ALTER TABLE `tbl_kriteria`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `tbl_penilaian`
--
ALTER TABLE `tbl_penilaian`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
