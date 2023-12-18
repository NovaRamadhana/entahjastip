-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3308
-- Generation Time: Dec 18, 2023 at 07:46 AM
-- Server version: 10.4.28-MariaDB
-- PHP Version: 8.2.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `uas_framework`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

DROP TABLE IF EXISTS `admin`;
CREATE TABLE `admin` (
  `username_admin` varchar(20) NOT NULL,
  `nama` varchar(50) DEFAULT NULL,
  `password` varchar(50) DEFAULT NULL,
  `email` varchar(255) DEFAULT NULL,
  `created_date` datetime DEFAULT NULL,
  `last_login` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`username_admin`, `nama`, `password`, `email`, `created_date`, `last_login`) VALUES
('admin', 'Admin Tamvan', 'admin', 'entahjastip@gmail.com', '2023-12-03 00:00:00', '2023-12-17 13:51:36');

-- --------------------------------------------------------

--
-- Table structure for table `contact_msg`
--

DROP TABLE IF EXISTS `contact_msg`;
CREATE TABLE `contact_msg` (
  `id_cmsg` varchar(20) NOT NULL,
  `id_user` varchar(20) CHARACTER SET utf8 COLLATE utf8_unicode_ci DEFAULT NULL,
  `full_name` varchar(255) DEFAULT NULL,
  `email` varchar(255) DEFAULT NULL,
  `no_hp` varchar(20) DEFAULT NULL,
  `message` varchar(255) DEFAULT NULL,
  `tanggal_input` timestamp NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `contact_msg`
--

INSERT INTO `contact_msg` (`id_cmsg`, `id_user`, `full_name`, `email`, `no_hp`, `message`, `tanggal_input`) VALUES
('CM1', 'U1', 'Brodit Aprendhath', 'bro@gmail.com', '012345678910', 'Seriously?!', '2023-12-05 00:45:05'),
('CM2', NULL, NULL, NULL, NULL, NULL, '2023-12-05 01:35:33'),
('CM3', NULL, 'wgag', 'raihanrafi96@gmail.com', '15166616', 'wagsgaw', '2023-12-05 01:37:21'),
('CM4', NULL, 'BroGotWild', 'BGW@fun.co', '151616', 'You asked?', '2023-12-05 01:39:02');

-- --------------------------------------------------------

--
-- Table structure for table `detail_pesanan`
--

DROP TABLE IF EXISTS `detail_pesanan`;
CREATE TABLE `detail_pesanan` (
  `id_detailpesanan` varchar(20) NOT NULL,
  `id_pesanan` varchar(20) DEFAULT NULL,
  `id_produk` varchar(20) DEFAULT NULL,
  `jumlah` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `detail_pesanan`
--

INSERT INTO `detail_pesanan` (`id_detailpesanan`, `id_pesanan`, `id_produk`, `jumlah`) VALUES
('DP1', 'PS1', 'P1', 100),
('DP2', 'PS1', 'P2', 2),
('DP3', 'PS3', 'P2', 12),
('DP4', 'PS2', 'P5', 15);

-- --------------------------------------------------------

--
-- Table structure for table `kategori_produk`
--

DROP TABLE IF EXISTS `kategori_produk`;
CREATE TABLE `kategori_produk` (
  `id_kategori` varchar(20) NOT NULL,
  `nama_kategori` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `kategori_produk`
--

INSERT INTO `kategori_produk` (`id_kategori`, `nama_kategori`) VALUES
('K1', 'Makanan Ringan'),
('K2', 'Mie');

-- --------------------------------------------------------

--
-- Table structure for table `keranjang`
--

DROP TABLE IF EXISTS `keranjang`;
CREATE TABLE `keranjang` (
  `id_keranjang` varchar(20) NOT NULL,
  `id_produk` varchar(20) DEFAULT NULL,
  `id_user` varchar(20) DEFAULT NULL,
  `jumlah_barang` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `keranjang`
--

INSERT INTO `keranjang` (`id_keranjang`, `id_produk`, `id_user`, `jumlah_barang`) VALUES
('K1', 'P1', 'U1', 10);

-- --------------------------------------------------------

--
-- Table structure for table `menu`
--

DROP TABLE IF EXISTS `menu`;
CREATE TABLE `menu` (
  `id_menu` varchar(20) DEFAULT NULL,
  `id_penjual` varchar(20) DEFAULT NULL,
  `id_produk` varchar(20) DEFAULT NULL,
  `id_kategori` varchar(20) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `menu`
--

INSERT INTO `menu` (`id_menu`, `id_penjual`, `id_produk`, `id_kategori`) VALUES
('MN1', 'M1', 'P1', 'K1'),
('MN2', 'M1', 'P1', 'K2');

-- --------------------------------------------------------

--
-- Table structure for table `metode_pembayaran`
--

DROP TABLE IF EXISTS `metode_pembayaran`;
CREATE TABLE `metode_pembayaran` (
  `id_metodebayar` varchar(20) NOT NULL,
  `nama_metodebayar` varchar(50) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `metode_pembayaran`
--

INSERT INTO `metode_pembayaran` (`id_metodebayar`, `nama_metodebayar`) VALUES
('MB1', 'Cash / Tunai');

-- --------------------------------------------------------

--
-- Table structure for table `pembayaran`
--

DROP TABLE IF EXISTS `pembayaran`;
CREATE TABLE `pembayaran` (
  `id_pembayaran` varchar(20) NOT NULL,
  `id_pesanan` varchar(20) DEFAULT NULL,
  `id_metodebayar` varchar(20) DEFAULT NULL,
  `jumlah_bayar` int(11) DEFAULT NULL,
  `tanggal_pembayaran` datetime DEFAULT current_timestamp(),
  `status_bayar` char(1) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `pembayaran`
--

INSERT INTO `pembayaran` (`id_pembayaran`, `id_pesanan`, `id_metodebayar`, `jumlah_bayar`, `tanggal_pembayaran`, `status_bayar`) VALUES
('B1', 'PS1', 'MB1', 350000, '2023-12-03 14:10:01', 'n');

-- --------------------------------------------------------

--
-- Table structure for table `pengguna`
--

DROP TABLE IF EXISTS `pengguna`;
CREATE TABLE `pengguna` (
  `id_user` varchar(20) NOT NULL,
  `username` varchar(50) DEFAULT NULL,
  `password` varchar(50) DEFAULT NULL,
  `email` varchar(255) DEFAULT NULL,
  `created_date` datetime DEFAULT current_timestamp(),
  `last_login` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `pengguna`
--

INSERT INTO `pengguna` (`id_user`, `username`, `password`, `email`, `created_date`, `last_login`) VALUES
('Minah', 'minahsihi', 'minah123', 'min@nah.com', '2023-12-17 17:04:12', '2023-12-17 10:04:12'),
('U1', 'users', 'users', 'user@bro.com', '2023-12-03 13:55:46', '2023-12-03 13:55:58'),
('U2', 'bro', 'bro', 'bro@bro.com', '2023-12-17 17:03:00', '2023-12-17 10:03:00');

-- --------------------------------------------------------

--
-- Table structure for table `penjual`
--

DROP TABLE IF EXISTS `penjual`;
CREATE TABLE `penjual` (
  `id_penjual` varchar(20) NOT NULL,
  `id_user` varchar(20) DEFAULT NULL,
  `nama_pemilik` varchar(100) DEFAULT NULL,
  `nama_toko` varchar(100) DEFAULT NULL,
  `status_ajuan` enum('Proses','Diterima','Ditolak','') NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `penjual`
--

INSERT INTO `penjual` (`id_penjual`, `id_user`, `nama_pemilik`, `nama_toko`, `status_ajuan`) VALUES
('M1', 'U1', 'Eleonore Patricia Puspitaningsih', 'ElPus', 'Diterima'),
('M2', 'U2', 'Brob', 'Broko', 'Proses'),
('M3', 'Minah', 'Minahsika', 'MinahStore', 'Ditolak');

-- --------------------------------------------------------

--
-- Table structure for table `pesanan`
--

DROP TABLE IF EXISTS `pesanan`;
CREATE TABLE `pesanan` (
  `id_pesanan` varchar(20) NOT NULL,
  `id_user` varchar(20) DEFAULT NULL,
  `alamat_antar` varchar(255) DEFAULT NULL,
  `tanggal_pemesanan` datetime DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `pesanan`
--

INSERT INTO `pesanan` (`id_pesanan`, `id_user`, `alamat_antar`, `tanggal_pemesanan`) VALUES
('PS1', 'U1', 'SBY Darjo Aloha', '2023-12-03 00:00:00'),
('PS2', 'U2', 'DarjoPride', '2023-12-17 17:09:29'),
('PS3', 'Minah', 'Kamu nanya?', '2023-12-17 17:09:29');

-- --------------------------------------------------------

--
-- Table structure for table `produk`
--

DROP TABLE IF EXISTS `produk`;
CREATE TABLE `produk` (
  `id_produk` varchar(20) NOT NULL,
  `id_stok` varchar(20) DEFAULT NULL,
  `id_penjual` varchar(20) DEFAULT NULL,
  `nama_produk` varchar(255) DEFAULT NULL,
  `harga` int(11) DEFAULT NULL,
  `deskripsi` varchar(255) DEFAULT NULL,
  `img` text NOT NULL,
  `tanggal_ditambahkan` timestamp NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `produk`
--

INSERT INTO `produk` (`id_produk`, `id_stok`, `id_penjual`, `nama_produk`, `harga`, `deskripsi`, `img`, `tanggal_ditambahkan`) VALUES
('P1', 'S2', NULL, 'Sedaap Rasa Goreng', 3500, 'Mie instan merk sedaap enak dimakan nyam nyam nyam', '', '2023-12-17 00:08:55'),
('P10', 'S2', NULL, 'Semanggi SUrabya', 10000, 'Semanggi Surabaya dengan saus kacang yang gurih dan manis', 'semanggi.jpg', '2023-12-18 06:35:01'),
('P11', 'S2', NULL, 'Salad Buah', 20000, 'Salad buah yogurt segar 500 ml ', 'salad-buah.jpg', '2023-12-18 06:35:01'),
('P2', 'S2', 'M1', 'PotaChips', 6000, 'Keripik Kentang Gurih Kres Kres', '', '2023-12-17 00:08:55'),
('P3', 'S3', NULL, 'Kue Bolu Mak Limah Bia...', 20000, 'Bolu Kukus dengan Rasa Coklat yang Nendang~', '', '2023-12-17 10:10:36'),
('P4', 'S2', 'M1', 'Entahlah Boy boy...', 7000, 'YNTKTS', '', '2023-12-18 04:30:13'),
('P5', 'S3', 'M1', 'Nyoba njir', 10000, 'Hanya coba coba sahaja', '', '2023-12-18 04:32:19'),
('P6', 'S2', NULL, 'Sedaap Rasa Goreng', 3500, 'Mie instan merk sedaap enak dimakan nyam nyam nyam', '', '2023-12-18 06:35:01'),
('P7', 'S2', NULL, 'PotaChips', 6000, 'Keripik Kentang Gurih Kres Kres', '', '2023-12-18 06:35:01'),
('P8', 'S2', NULL, 'Gado-Gado', 12000, 'Gado-gado Bu Rudi bests seller di Surabaya', 'gado-gado.jpg', '2023-12-18 06:35:01'),
('P9', 'S2', NULL, 'Pentol Bakar', 20000, 'Pentol Bakra khas kalimantan', 'pentol-bakar.jpg', '2023-12-18 06:35:01');

-- --------------------------------------------------------

--
-- Table structure for table `request_produk`
--

DROP TABLE IF EXISTS `request_produk`;
CREATE TABLE `request_produk` (
  `id_request` varchar(20) NOT NULL,
  `id_user` varchar(20) DEFAULT NULL,
  `nama_produk` varchar(255) DEFAULT NULL,
  `alamat_produk` varchar(255) DEFAULT NULL,
  `deskripsi_produk` varchar(255) DEFAULT NULL,
  `link_produk` varchar(255) DEFAULT NULL,
  `status_request` enum('Proses','Diterima','Ditolak','') NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `request_produk`
--

INSERT INTO `request_produk` (`id_request`, `id_user`, `nama_produk`, `alamat_produk`, `deskripsi_produk`, `link_produk`, `status_request`) VALUES
('RQ1', 'U1', 'Sirup Marjan Melon', NULL, 'Sirup Merk Marjan Rasa Melon Manis', NULL, 'Proses'),
('RQ2', 'U1', 'Coba', 'Jalan Kuburan', 'wagwaga', 'entahlah...', 'Proses'),
('RQ3', NULL, 'Bro kah', 'gahaw', 'Just Chill', 'Wokwokwo', 'Proses');

-- --------------------------------------------------------

--
-- Table structure for table `status_stok`
--

DROP TABLE IF EXISTS `status_stok`;
CREATE TABLE `status_stok` (
  `id_stok` varchar(20) NOT NULL,
  `nama_status` varchar(10) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `status_stok`
--

INSERT INTO `status_stok` (`id_stok`, `nama_status`) VALUES
('S1', 'Pre-Order'),
('S2', 'Ready'),
('S3', 'Sold Out');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`username_admin`);

--
-- Indexes for table `contact_msg`
--
ALTER TABLE `contact_msg`
  ADD PRIMARY KEY (`id_cmsg`),
  ADD KEY `ditulis` (`id_user`);

--
-- Indexes for table `detail_pesanan`
--
ALTER TABLE `detail_pesanan`
  ADD PRIMARY KEY (`id_detailpesanan`),
  ADD KEY `memiliki` (`id_pesanan`),
  ADD KEY `terdapat` (`id_produk`);

--
-- Indexes for table `kategori_produk`
--
ALTER TABLE `kategori_produk`
  ADD PRIMARY KEY (`id_kategori`);

--
-- Indexes for table `keranjang`
--
ALTER TABLE `keranjang`
  ADD PRIMARY KEY (`id_keranjang`),
  ADD KEY `masuk` (`id_produk`),
  ADD KEY `dibuat` (`id_user`);

--
-- Indexes for table `menu`
--
ALTER TABLE `menu`
  ADD KEY `fk_dijual` (`id_penjual`),
  ADD KEY `fk_berasal` (`id_produk`),
  ADD KEY `fk_dikategorikan` (`id_kategori`);

--
-- Indexes for table `metode_pembayaran`
--
ALTER TABLE `metode_pembayaran`
  ADD PRIMARY KEY (`id_metodebayar`);

--
-- Indexes for table `pembayaran`
--
ALTER TABLE `pembayaran`
  ADD PRIMARY KEY (`id_pembayaran`),
  ADD KEY `dari` (`id_pesanan`),
  ADD KEY `menggunakan` (`id_metodebayar`);

--
-- Indexes for table `pengguna`
--
ALTER TABLE `pengguna`
  ADD PRIMARY KEY (`id_user`);

--
-- Indexes for table `penjual`
--
ALTER TABLE `penjual`
  ADD PRIMARY KEY (`id_penjual`),
  ADD KEY `menjadi` (`id_user`);

--
-- Indexes for table `pesanan`
--
ALTER TABLE `pesanan`
  ADD PRIMARY KEY (`id_pesanan`),
  ADD KEY `dipesan` (`id_user`);

--
-- Indexes for table `produk`
--
ALTER TABLE `produk`
  ADD PRIMARY KEY (`id_produk`),
  ADD KEY `fk_dengan` (`id_stok`),
  ADD KEY `fk_diposting` (`id_penjual`);

--
-- Indexes for table `request_produk`
--
ALTER TABLE `request_produk`
  ADD PRIMARY KEY (`id_request`),
  ADD KEY `oleh` (`id_user`);

--
-- Indexes for table `status_stok`
--
ALTER TABLE `status_stok`
  ADD PRIMARY KEY (`id_stok`);

--
-- Constraints for dumped tables
--

--
-- Constraints for table `contact_msg`
--
ALTER TABLE `contact_msg`
  ADD CONSTRAINT `ditulis` FOREIGN KEY (`id_user`) REFERENCES `pengguna` (`id_user`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `detail_pesanan`
--
ALTER TABLE `detail_pesanan`
  ADD CONSTRAINT `memiliki` FOREIGN KEY (`id_pesanan`) REFERENCES `pesanan` (`id_pesanan`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `terdapat` FOREIGN KEY (`id_produk`) REFERENCES `produk` (`id_produk`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `keranjang`
--
ALTER TABLE `keranjang`
  ADD CONSTRAINT `dibuat` FOREIGN KEY (`id_user`) REFERENCES `pengguna` (`id_user`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `masuk` FOREIGN KEY (`id_produk`) REFERENCES `produk` (`id_produk`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `menu`
--
ALTER TABLE `menu`
  ADD CONSTRAINT `fk_berasal` FOREIGN KEY (`id_produk`) REFERENCES `produk` (`id_produk`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `fk_dijual` FOREIGN KEY (`id_penjual`) REFERENCES `penjual` (`id_penjual`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `fk_dikategorikan` FOREIGN KEY (`id_kategori`) REFERENCES `kategori_produk` (`id_kategori`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `pembayaran`
--
ALTER TABLE `pembayaran`
  ADD CONSTRAINT `dari` FOREIGN KEY (`id_pesanan`) REFERENCES `pesanan` (`id_pesanan`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `menggunakan` FOREIGN KEY (`id_metodebayar`) REFERENCES `metode_pembayaran` (`id_metodebayar`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `penjual`
--
ALTER TABLE `penjual`
  ADD CONSTRAINT `menjadi` FOREIGN KEY (`id_user`) REFERENCES `pengguna` (`id_user`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `pesanan`
--
ALTER TABLE `pesanan`
  ADD CONSTRAINT `dipesan` FOREIGN KEY (`id_user`) REFERENCES `pengguna` (`id_user`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `produk`
--
ALTER TABLE `produk`
  ADD CONSTRAINT `fk_dengan` FOREIGN KEY (`id_stok`) REFERENCES `status_stok` (`id_stok`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `fk_diposting` FOREIGN KEY (`id_penjual`) REFERENCES `penjual` (`id_penjual`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `request_produk`
--
ALTER TABLE `request_produk`
  ADD CONSTRAINT `oleh` FOREIGN KEY (`id_user`) REFERENCES `pengguna` (`id_user`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
