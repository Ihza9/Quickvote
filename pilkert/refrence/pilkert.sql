-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Generation Time: Aug 20, 2023 at 02:30 PM
-- Server version: 5.7.36
-- PHP Version: 7.4.26

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `pilkert`
--

-- --------------------------------------------------------

--
-- Table structure for table `datapemilihan`
--

DROP TABLE IF EXISTS `datapemilihan`;
CREATE TABLE IF NOT EXISTS `datapemilihan` (
  `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT,
  `nik` varchar(16) NOT NULL,
  `nopemilih` varchar(20) DEFAULT NULL,
  `id_kandidat` int(11) DEFAULT NULL,
  `waktu` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`),
  UNIQUE KEY `nik` (`nik`)
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `datapemilihan`
--

INSERT INTO `datapemilihan` (`id`, `nik`, `nopemilih`, `id_kandidat`, `waktu`) VALUES
(4, '1234', '', 7, '2023-08-20 07:29:15');

-- --------------------------------------------------------

--
-- Table structure for table `kandidat`
--

DROP TABLE IF EXISTS `kandidat`;
CREATE TABLE IF NOT EXISTS `kandidat` (
  `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT,
  `visi` varchar(100) DEFAULT NULL,
  `misi` varchar(255) DEFAULT NULL,
  `foto` varchar(50) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=8 DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `kandidat`
--

INSERT INTO `kandidat` (`id`, `visi`, `misi`, `foto`) VALUES
(7, 'Visi Pindank Mentah', 'Misi Pindank Mentah', 'sehatno_green.jpeg');

-- --------------------------------------------------------

--
-- Table structure for table `warga`
--

DROP TABLE IF EXISTS `warga`;
CREATE TABLE IF NOT EXISTS `warga` (
  `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT,
  `nik` bigint(16) NOT NULL,
  `password` varchar(32) NOT NULL,
  `nama` varchar(50) NOT NULL,
  `jk` enum('L','P') NOT NULL,
  `tgl_lahir` date DEFAULT NULL,
  `alamat` text,
  `hp` varchar(15) NOT NULL,
  `level` int(1) NOT NULL,
  `aktif` enum('Y','T') NOT NULL DEFAULT 'T',
  PRIMARY KEY (`id`),
  UNIQUE KEY `nik` (`nik`)
) ENGINE=InnoDB AUTO_INCREMENT=9 DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `warga`
--

INSERT INTO `warga` (`id`, `nik`, `password`, `nama`, `jk`, `tgl_lahir`, `alamat`, `hp`, `level`, `aktif`) VALUES
(1, 1234567890, 'sehatnodev', 'Sehatno Software Development', 'L', NULL, 'Perum Puskopad, Jl. Garuda No.3 Puri Kab. Mojokerto', '08813581349', 1, 'Y'),
(7, 987654321, 'pindankmentah', 'Pindank Mentah', 'L', '2023-08-01', 'Mojokerto', '08813581249', 3, 'Y'),
(8, 1234, 'warga', 'warga', 'L', '2023-08-02', 'Mojokerto', '85675', 2, 'Y');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
