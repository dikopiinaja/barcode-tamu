-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Generation Time: Aug 12, 2021 at 06:26 AM
-- Server version: 5.7.31
-- PHP Version: 7.3.21

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `pendataan_tamu`
--

-- --------------------------------------------------------

--
-- Table structure for table `bagian`
--

DROP TABLE IF EXISTS `bagian`;
CREATE TABLE IF NOT EXISTS `bagian` (
  `id_bagian` int(11) NOT NULL AUTO_INCREMENT,
  `nama_bagian` varchar(100) NOT NULL,
  `departemen` varchar(100) NOT NULL,
  PRIMARY KEY (`id_bagian`)
) ENGINE=MyISAM AUTO_INCREMENT=4 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `bagian`
--

INSERT INTO `bagian` (`id_bagian`, `nama_bagian`, `departemen`) VALUES
(1, 'A12 Control', 'Production Control'),
(3, 'A10', 'Injection Production');

-- --------------------------------------------------------

--
-- Table structure for table `karyawan`
--

DROP TABLE IF EXISTS `karyawan`;
CREATE TABLE IF NOT EXISTS `karyawan` (
  `id_karyawan` int(11) NOT NULL,
  `nama_karyawan` varchar(200) NOT NULL,
  `bagian` int(11) NOT NULL,
  `kontrak` varchar(10) NOT NULL,
  `jk` int(11) NOT NULL,
  `ttl` varchar(50) NOT NULL,
  `no_hp` varchar(13) NOT NULL,
  PRIMARY KEY (`id_karyawan`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `karyawan`
--

INSERT INTO `karyawan` (`id_karyawan`, `nama_karyawan`, `bagian`, `kontrak`, `jk`, `ttl`, `no_hp`) VALUES
(1122331, 'Gembel', 1, '1thn', 2, 'Jakarta, 3 Juni 2000', '0123456'),
(12092019, 'Nita Faradila S', 1, '2 thn', 2, 'Bandung, 20 Mei 2001', '0812121212');

-- --------------------------------------------------------

--
-- Table structure for table `laporan`
--

DROP TABLE IF EXISTS `laporan`;
CREATE TABLE IF NOT EXISTS `laporan` (
  `id` int(10) NOT NULL AUTO_INCREMENT,
  `laporan_pdf` varchar(50) DEFAULT NULL,
  `description` varchar(50) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=4 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `laporan`
--

INSERT INTO `laporan` (`id`, `laporan_pdf`, `description`) VALUES
(3, '2e5f9836522abc160d0fdb81f2ab9d93.pdf', 'tgl 12');

-- --------------------------------------------------------

--
-- Table structure for table `petugas`
--

DROP TABLE IF EXISTS `petugas`;
CREATE TABLE IF NOT EXISTS `petugas` (
  `id_petugas` int(11) NOT NULL AUTO_INCREMENT,
  `nama_petugas` varchar(50) DEFAULT NULL,
  `jk` int(11) DEFAULT NULL,
  `no_hp` varchar(50) DEFAULT NULL,
  `alamat` text,
  `status` enum('0','1','2') NOT NULL,
  PRIMARY KEY (`id_petugas`)
) ENGINE=MyISAM AUTO_INCREMENT=10 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `petugas`
--

INSERT INTO `petugas` (`id_petugas`, `nama_petugas`, `jk`, `no_hp`, `alamat`, `status`) VALUES
(1, 'Joko Susanto', 2, '081211981268', 'Cikarang Selatan, Sukaresmi', '0'),
(2, 'Surya Miso', 0, '08211198321', 'Cikarang Timur\n', '0');

-- --------------------------------------------------------

--
-- Table structure for table `tamu`
--

DROP TABLE IF EXISTS `tamu`;
CREATE TABLE IF NOT EXISTS `tamu` (
  `id_tamu` int(10) NOT NULL AUTO_INCREMENT,
  `nama_tamu` varchar(50) DEFAULT NULL,
  `nik` varchar(20) DEFAULT NULL,
  `alamat` varchar(50) DEFAULT NULL,
  `no_hp_tamu` varchar(50) DEFAULT NULL,
  `id_karyawan` int(10) DEFAULT NULL,
  `tgl_berkunjung` date DEFAULT NULL,
  `keperluan` varchar(50) DEFAULT NULL,
  PRIMARY KEY (`id_tamu`)
) ENGINE=MyISAM AUTO_INCREMENT=5 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tamu`
--

INSERT INTO `tamu` (`id_tamu`, `nama_tamu`, `nik`, `alamat`, `no_hp_tamu`, `id_karyawan`, `tgl_berkunjung`, `keperluan`) VALUES
(1, 'Kampang', '12345', 'Kene aaa', '012345', 12092019, '2021-08-11', 'ngapel'),
(2, 'ceklek', '567899765', 'fghjkklh', '567897654', 12092019, '2021-08-11', 'Ngapel'),
(3, 'cel', '1212121', 'lkjhdksahkj', '2341434', 1122331, '2021-08-11', 'wiwkwiwkiwk'),
(4, 'Igun', '123123', 'Cikarang aaaa', '081818181', 1122331, '2021-08-12', 'Menjenguk');

-- --------------------------------------------------------

--
-- Table structure for table `tamu_detail`
--

DROP TABLE IF EXISTS `tamu_detail`;
CREATE TABLE IF NOT EXISTS `tamu_detail` (
  `id_tamu_detail` int(11) NOT NULL AUTO_INCREMENT,
  `nik` int(11) DEFAULT NULL,
  `tgl_kunjungan` date DEFAULT NULL,
  `jam_masuk` time DEFAULT NULL,
  `jam_keluar` time DEFAULT NULL,
  PRIMARY KEY (`id_tamu_detail`),
  KEY `nik` (`nik`)
) ENGINE=MyISAM AUTO_INCREMENT=5 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tamu_detail`
--

INSERT INTO `tamu_detail` (`id_tamu_detail`, `nik`, `tgl_kunjungan`, `jam_masuk`, `jam_keluar`) VALUES
(1, 12345, '2021-08-11', '02:16:12', '02:16:14'),
(2, 567899765, '2021-08-11', '02:24:47', '02:24:50'),
(3, 1212121, '2021-08-11', '02:34:40', '02:34:42'),
(4, 123123, '2021-08-12', '10:59:29', '11:00:16');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

DROP TABLE IF EXISTS `users`;
CREATE TABLE IF NOT EXISTS `users` (
  `id_user` int(10) NOT NULL AUTO_INCREMENT,
  `username` varchar(50) DEFAULT NULL,
  `email` varchar(50) DEFAULT NULL,
  `password` varchar(50) DEFAULT NULL,
  `level` int(10) DEFAULT NULL,
  `id_petugas` int(11) NOT NULL,
  `status` int(11) DEFAULT NULL,
  PRIMARY KEY (`id_user`),
  KEY `id_petugas` (`id_petugas`) USING BTREE
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id_user`, `username`, `email`, `password`, `level`, `id_petugas`, `status`) VALUES
(1, 'Administrator', 'admin@gmail.com', '0192023a7bbd73250516f069df18b500', 1, 0, 1),
(2, 'Petugas 1', 'petugas1@gmail.com', '570c396b3fc856eceb8aa7357f32af1a', 2, 1, 0),
(3, 'Petugas 2', 'petugas2@gmail.com', '570c396b3fc856eceb8aa7357f32af1a', 2, 2, 0);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
