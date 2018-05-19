-- phpMyAdmin SQL Dump
-- version 4.7.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: May 19, 2018 at 03:57 AM
-- Server version: 10.1.28-MariaDB
-- PHP Version: 5.6.32

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `sispakjantung`
--

-- --------------------------------------------------------

--
-- Table structure for table `tb_administrator`
--

DROP TABLE IF EXISTS `tb_administrator`;
CREATE TABLE IF NOT EXISTS `tb_administrator` (
  `id_administrator` int(11) NOT NULL,
  `nama_admin` varchar(45) NOT NULL,
  `username` varchar(45) NOT NULL,
  `password` varchar(45) NOT NULL,
  `tanggal_lahir` date NOT NULL,
  `telp` varchar(12) NOT NULL,
  `alamat` text NOT NULL,
  `admin` tinyint(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `tb_diagnosa`
--

DROP TABLE IF EXISTS `tb_diagnosa`;
CREATE TABLE IF NOT EXISTS `tb_diagnosa` (
  `id_diagnosa` int(11) NOT NULL AUTO_INCREMENT,
  `nama_diagnosa` varchar(100) NOT NULL,
  `inisial` varchar(100) NOT NULL,
  PRIMARY KEY (`id_diagnosa`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tb_diagnosa`
--

INSERT INTO `tb_diagnosa` (`id_diagnosa`, `nama_diagnosa`, `inisial`) VALUES
(1, 'JK Berat', 'B'),
(2, 'JK Sedang', 'S'),
(3, 'JK Ringan', 'R');

-- --------------------------------------------------------

--
-- Table structure for table `tb_diagnosa_kunjungan`
--

DROP TABLE IF EXISTS `tb_diagnosa_kunjungan`;
CREATE TABLE IF NOT EXISTS `tb_diagnosa_kunjungan` (
  `id_diagnosa_kunjungan` int(11) NOT NULL AUTO_INCREMENT,
  `id_kunjungan` int(5) NOT NULL,
  `id_diagnosa` int(5) NOT NULL,
  `densitas` double NOT NULL,
  PRIMARY KEY (`id_diagnosa_kunjungan`),
  KEY `id_kunjungan` (`id_kunjungan`),
  KEY `id_diagnosa` (`id_diagnosa`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `tb_faktor_resiko_gejala`
--

DROP TABLE IF EXISTS `tb_faktor_resiko_gejala`;
CREATE TABLE IF NOT EXISTS `tb_faktor_resiko_gejala` (
  `id_faktor_resiko_gejala` int(11) NOT NULL AUTO_INCREMENT,
  `id_jns_faktor_gejala` int(11) NOT NULL,
  `nama_faktor_resiko_gejala` varchar(100) NOT NULL,
  `densitas` double NOT NULL,
  PRIMARY KEY (`id_faktor_resiko_gejala`),
  KEY `id_jns_faktor_gejala` (`id_jns_faktor_gejala`)
) ENGINE=InnoDB AUTO_INCREMENT=44 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tb_faktor_resiko_gejala`
--

INSERT INTO `tb_faktor_resiko_gejala` (`id_faktor_resiko_gejala`, `id_jns_faktor_gejala`, `nama_faktor_resiko_gejala`, `densitas`) VALUES
(1, 1, 'Kolesterol Normal (< 200 mg/dl)', 0.75),
(2, 1, 'Kolesterol Tinggi (> 200 mg/dl)', 0.82),
(3, 1, 'Gula Darah Normal (70 - 140) mg/dl', 0.7),
(4, 1, 'Gula Darah Rendah (<60 mg/dl)', 0.5),
(5, 1, 'Gula Darah Tinggi (> 200 mg/dl)', 0.75),
(6, 1, 'Tekanan Darah Normal (100/70-130/80 mmHg)', 0.67),
(7, 1, 'Tekanan Darah Rendah (<= 90/60 mmHg)', 0.5),
(8, 1, 'Tekanan Darah Tinggi(>= 140/90 mmHg)', 0.8),
(9, 1, 'BMI Gemuk (23 - 27.5)', 0.7),
(10, 1, 'BMI Kegemukan (27.6-40)', 0.73),
(11, 1, 'BMI Kurus (15 - 18.4)', 0.5),
(12, 1, 'BMI Normal (18.5 - 22.9)', 0.6),
(13, 1, 'BMI Sangat Gemuk (>=40)', 0.82),
(14, 1, 'BMI Sangat Kurus (<=14.9)', 0.5),
(15, 1, 'Merokok', 0.8),
(16, 1, 'Alkohol', 0.8),
(17, 1, 'Kurang olah raga/ aktivitas', 0.78),
(18, 1, 'Stres', 0.75),
(19, 1, 'Keturunan Penyakit Jantung', 0.7),
(20, 1, 'Usia (20 - 40) tahun', 0.6),
(21, 1, 'Usia > 40 tahun', 0.75),
(22, 1, 'Jenis Kelamin (pria)', 0.7),
(23, 1, 'Jenis Kelamin (wanita)', 0.5),
(24, 2, 'Batuk-batuk', 0.6),
(25, 2, 'Jantung-berdebar-debar (Jarang)', 0.65),
(26, 2, 'Jantung-berdebar-debar (Sering)', 0.7),
(27, 2, 'Keringat dingin (Jarang)', 0.6),
(28, 2, 'Keringat dingin (Sering)', 0.65),
(29, 2, 'Lemas', 0.65),
(30, 2, 'Mual (Jarang)', 0.6),
(31, 2, 'Mual (Sering)', 0.62),
(32, 2, 'Muntah (Jarang)', 0.6),
(33, 2, 'Muntah (Sering)', 0.65),
(34, 2, 'Nyeri dada (Agak Nyeri)', 0.65),
(35, 2, 'Nyeri dada (Nyeri Biasa)', 0.7),
(36, 2, 'Nyeri dada (Sangat Nyeri)', 0.75),
(37, 2, 'pingsan (Jarang)', 0.6),
(38, 2, 'pingsan (Sering)', 0.65),
(39, 2, 'pusing (Agak Pusing)', 0.6),
(40, 2, 'pusing (Pusing Biasa)', 0.62),
(41, 2, 'pusing (Sangat Pusing)', 0.65),
(42, 2, 'sesak nafas (Biasa)', 0.7),
(43, 2, 'sesak nafas (Sangat)', 0.78);

-- --------------------------------------------------------

--
-- Table structure for table `tb_help_sistem`
--

DROP TABLE IF EXISTS `tb_help_sistem`;
CREATE TABLE IF NOT EXISTS `tb_help_sistem` (
  `id_help_sistem` int(11) NOT NULL AUTO_INCREMENT,
  `nama_help_sistem` varchar(100) NOT NULL,
  `deskripsi` text NOT NULL,
  PRIMARY KEY (`id_help_sistem`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `tb_item_diagnosa_kunjungan`
--

DROP TABLE IF EXISTS `tb_item_diagnosa_kunjungan`;
CREATE TABLE IF NOT EXISTS `tb_item_diagnosa_kunjungan` (
  `id_item_diagnosa_kunjungan` int(11) NOT NULL AUTO_INCREMENT,
  `id_diagnosa_kunjungan` int(5) NOT NULL,
  `id_faktor_resiko_gejala` int(5) NOT NULL,
  PRIMARY KEY (`id_item_diagnosa_kunjungan`),
  KEY `id_diagnosa_kunjungan` (`id_diagnosa_kunjungan`),
  KEY `id_faktor_resiko_gejala` (`id_faktor_resiko_gejala`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `tb_jns_faktor_gejala`
--

DROP TABLE IF EXISTS `tb_jns_faktor_gejala`;
CREATE TABLE IF NOT EXISTS `tb_jns_faktor_gejala` (
  `id_jns_faktor_gejala` int(11) NOT NULL AUTO_INCREMENT,
  `nama_jns_faktor_gejala` varchar(100) NOT NULL,
  PRIMARY KEY (`id_jns_faktor_gejala`)
) ENGINE=InnoDB AUTO_INCREMENT=44 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tb_jns_faktor_gejala`
--

INSERT INTO `tb_jns_faktor_gejala` (`id_jns_faktor_gejala`, `nama_jns_faktor_gejala`) VALUES
(1, 'Faktro Resiko'),
(2, 'Gejala');

-- --------------------------------------------------------

--
-- Table structure for table `tb_keputusan`
--

DROP TABLE IF EXISTS `tb_keputusan`;
CREATE TABLE IF NOT EXISTS `tb_keputusan` (
  `id_keputusan` int(11) NOT NULL AUTO_INCREMENT,
  `id_faktor_resiko_gejala` int(10) NOT NULL,
  `id_diagnosa` int(10) NOT NULL,
  PRIMARY KEY (`id_keputusan`),
  KEY `id_faktor_resiko_gejala` (`id_faktor_resiko_gejala`),
  KEY `id_diagnosa` (`id_diagnosa`)
) ENGINE=InnoDB AUTO_INCREMENT=79 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tb_keputusan`
--

INSERT INTO `tb_keputusan` (`id_keputusan`, `id_faktor_resiko_gejala`, `id_diagnosa`) VALUES
(1, 1, 2),
(2, 1, 3),
(3, 2, 1),
(4, 3, 1),
(5, 3, 2),
(6, 3, 3),
(7, 4, 2),
(8, 4, 3),
(9, 5, 1),
(10, 6, 2),
(11, 6, 3),
(12, 7, 2),
(13, 7, 3),
(14, 8, 1),
(15, 8, 2),
(16, 9, 1),
(17, 9, 2),
(18, 10, 1),
(19, 10, 2),
(20, 11, 3),
(21, 12, 2),
(22, 12, 3),
(23, 13, 1),
(24, 14, 3),
(25, 15, 1),
(26, 16, 1),
(27, 17, 1),
(28, 17, 2),
(29, 17, 3),
(32, 18, 1),
(33, 19, 1),
(34, 19, 2),
(35, 20, 2),
(36, 20, 3),
(37, 21, 1),
(38, 21, 2),
(39, 21, 3),
(40, 22, 1),
(41, 22, 2),
(42, 22, 3),
(43, 23, 1),
(44, 23, 2),
(45, 23, 3),
(46, 24, 2),
(47, 24, 3),
(48, 25, 2),
(49, 25, 3),
(50, 26, 1),
(51, 26, 2),
(52, 27, 2),
(53, 27, 3),
(54, 28, 1),
(55, 29, 1),
(56, 29, 2),
(57, 29, 3),
(58, 30, 2),
(59, 30, 3),
(60, 31, 1),
(61, 32, 2),
(62, 32, 3),
(63, 33, 1),
(64, 34, 2),
(65, 34, 3),
(66, 35, 2),
(67, 35, 3),
(68, 36, 1),
(69, 37, 2),
(70, 38, 1),
(71, 39, 2),
(72, 39, 3),
(73, 40, 2),
(74, 40, 3),
(75, 41, 1),
(76, 42, 2),
(77, 42, 3),
(78, 43, 1);

-- --------------------------------------------------------

--
-- Table structure for table `tb_kunjungan`
--

DROP TABLE IF EXISTS `tb_kunjungan`;
CREATE TABLE IF NOT EXISTS `tb_kunjungan` (
  `id_kunjungan` int(11) NOT NULL AUTO_INCREMENT,
  `id_pasien` int(11) NOT NULL,
  `id_paramedis` int(11) NOT NULL,
  `tgl_kunjungan` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `tekanan_darah` varchar(20) NOT NULL,
  `gula_darah` int(5) NOT NULL,
  `tinggi_badan` int(5) NOT NULL,
  `berat_badan` int(5) NOT NULL,
  `nadi` int(5) NOT NULL,
  `usia` varchar(15) NOT NULL,
  `bmi` varchar(15) NOT NULL,
  `kolesterol` int(5) NOT NULL,
  PRIMARY KEY (`id_kunjungan`),
  KEY `id_pasien_2` (`id_pasien`),
  KEY `id_paramedis_2` (`id_paramedis`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `tb_paramedis`
--

DROP TABLE IF EXISTS `tb_paramedis`;
CREATE TABLE IF NOT EXISTS `tb_paramedis` (
  `id_paramedis` int(11) NOT NULL AUTO_INCREMENT,
  `nama_paramedis` varchar(45) NOT NULL,
  `tgl_lahir` date NOT NULL,
  `alamat` varchar(50) NOT NULL,
  `telp` varchar(12) NOT NULL,
  `username` varchar(15) NOT NULL,
  `password` varchar(15) NOT NULL,
  PRIMARY KEY (`id_paramedis`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `tb_pasien`
--

DROP TABLE IF EXISTS `tb_pasien`;
CREATE TABLE IF NOT EXISTS `tb_pasien` (
  `id_pasien` int(11) NOT NULL AUTO_INCREMENT,
  `nama_pasien` varchar(45) NOT NULL,
  `tgl_lahir_pasien` date NOT NULL,
  `alamat_pasien` varchar(50) NOT NULL,
  `telp_pasien` varchar(12) NOT NULL,
  `jk_pasien` enum('Pria','Wanita') NOT NULL,
  `status` enum('Belum Menikah','Menikah') NOT NULL,
  PRIMARY KEY (`id_pasien`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `tb_prognosis`
--

DROP TABLE IF EXISTS `tb_prognosis`;
CREATE TABLE IF NOT EXISTS `tb_prognosis` (
  `id_prognosis` int(11) NOT NULL AUTO_INCREMENT,
  `nama_prognosis` varchar(100) NOT NULL,
  `saran` text NOT NULL,
  PRIMARY KEY (`id_prognosis`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `tb_prognosis_faktor_gejala`
--

DROP TABLE IF EXISTS `tb_prognosis_faktor_gejala`;
CREATE TABLE IF NOT EXISTS `tb_prognosis_faktor_gejala` (
  `id_prognosis_fresiko_gejala` int(11) NOT NULL AUTO_INCREMENT,
  `id_prognosis` int(5) NOT NULL,
  `id_faktor_gejala_resiko` int(5) NOT NULL,
  PRIMARY KEY (`id_prognosis_fresiko_gejala`),
  KEY `id_prognosis` (`id_prognosis`),
  KEY `id_faktor_gejala_resiko` (`id_faktor_gejala_resiko`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `tb_prognosis_kunjungan`
--

DROP TABLE IF EXISTS `tb_prognosis_kunjungan`;
CREATE TABLE IF NOT EXISTS `tb_prognosis_kunjungan` (
  `id_prognosis_kunjungan` int(11) NOT NULL AUTO_INCREMENT,
  `id_prognosis` int(5) NOT NULL,
  `id_kunjungan` int(5) NOT NULL,
  PRIMARY KEY (`id_prognosis_kunjungan`),
  KEY `id_prognosis` (`id_prognosis`),
  KEY `id_kunjungan` (`id_kunjungan`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `tb_tindakan`
--

DROP TABLE IF EXISTS `tb_tindakan`;
CREATE TABLE IF NOT EXISTS `tb_tindakan` (
  `id_tindakan` int(11) NOT NULL AUTO_INCREMENT,
  `nama_tindakan` varchar(100) NOT NULL,
  `detail` text NOT NULL,
  PRIMARY KEY (`id_tindakan`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `tb_tindakan_diagnosa`
--

DROP TABLE IF EXISTS `tb_tindakan_diagnosa`;
CREATE TABLE IF NOT EXISTS `tb_tindakan_diagnosa` (
  `id_diagnosa_tindakan` int(11) NOT NULL AUTO_INCREMENT,
  `id_diagnosa` int(10) NOT NULL,
  `id_tindakan` int(10) NOT NULL,
  PRIMARY KEY (`id_diagnosa_tindakan`),
  KEY `id_diagnosa` (`id_diagnosa`),
  KEY `id_tindakan` (`id_tindakan`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `tb_diagnosa_kunjungan`
--
ALTER TABLE `tb_diagnosa_kunjungan`
  ADD CONSTRAINT `tb_diagnosa_kunjungan_ibfk_1` FOREIGN KEY (`id_diagnosa`) REFERENCES `tb_diagnosa` (`id_diagnosa`) ON UPDATE CASCADE,
  ADD CONSTRAINT `tb_diagnosa_kunjungan_ibfk_2` FOREIGN KEY (`id_kunjungan`) REFERENCES `tb_kunjungan` (`id_kunjungan`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `tb_faktor_resiko_gejala`
--
ALTER TABLE `tb_faktor_resiko_gejala`
  ADD CONSTRAINT `tb_faktor_resiko_gejala_ibfk_1` FOREIGN KEY (`id_jns_faktor_gejala`) REFERENCES `tb_jns_faktor_gejala` (`id_jns_faktor_gejala`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Constraints for table `tb_item_diagnosa_kunjungan`
--
ALTER TABLE `tb_item_diagnosa_kunjungan`
  ADD CONSTRAINT `tb_item_diagnosa_kunjungan_ibfk_1` FOREIGN KEY (`id_diagnosa_kunjungan`) REFERENCES `tb_diagnosa_kunjungan` (`id_diagnosa_kunjungan`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `tb_item_diagnosa_kunjungan_ibfk_2` FOREIGN KEY (`id_faktor_resiko_gejala`) REFERENCES `tb_faktor_resiko_gejala` (`id_faktor_resiko_gejala`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Constraints for table `tb_keputusan`
--
ALTER TABLE `tb_keputusan`
  ADD CONSTRAINT `tb_keputusan_ibfk_1` FOREIGN KEY (`id_faktor_resiko_gejala`) REFERENCES `tb_faktor_resiko_gejala` (`id_faktor_resiko_gejala`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `tb_keputusan_ibfk_2` FOREIGN KEY (`id_diagnosa`) REFERENCES `tb_diagnosa` (`id_diagnosa`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Constraints for table `tb_kunjungan`
--
ALTER TABLE `tb_kunjungan`
  ADD CONSTRAINT `tb_kunjungan_ibfk_1` FOREIGN KEY (`id_pasien`) REFERENCES `tb_pasien` (`id_pasien`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `tb_kunjungan_ibfk_2` FOREIGN KEY (`id_paramedis`) REFERENCES `tb_paramedis` (`id_paramedis`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Constraints for table `tb_prognosis`
--
ALTER TABLE `tb_prognosis`
  ADD CONSTRAINT `tb_prognosis_ibfk_1` FOREIGN KEY (`id_prognosis`) REFERENCES `tb_prognosis_faktor_gejala` (`id_prognosis`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `tb_prognosis_faktor_gejala`
--
ALTER TABLE `tb_prognosis_faktor_gejala`
  ADD CONSTRAINT `tb_prognosis_faktor_gejala_ibfk_1` FOREIGN KEY (`id_prognosis`) REFERENCES `tb_prognosis` (`id_prognosis`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `tb_prognosis_faktor_gejala_ibfk_2` FOREIGN KEY (`id_faktor_gejala_resiko`) REFERENCES `tb_faktor_resiko_gejala` (`id_faktor_resiko_gejala`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Constraints for table `tb_prognosis_kunjungan`
--
ALTER TABLE `tb_prognosis_kunjungan`
  ADD CONSTRAINT `tb_prognosis_kunjungan_ibfk_1` FOREIGN KEY (`id_prognosis`) REFERENCES `tb_prognosis` (`id_prognosis`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `tb_prognosis_kunjungan_ibfk_2` FOREIGN KEY (`id_kunjungan`) REFERENCES `tb_kunjungan` (`id_kunjungan`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Constraints for table `tb_tindakan_diagnosa`
--
ALTER TABLE `tb_tindakan_diagnosa`
  ADD CONSTRAINT `tb_tindakan_diagnosa_ibfk_1` FOREIGN KEY (`id_diagnosa`) REFERENCES `tb_diagnosa` (`id_diagnosa`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `tb_tindakan_diagnosa_ibfk_2` FOREIGN KEY (`id_tindakan`) REFERENCES `tb_tindakan` (`id_tindakan`) ON DELETE NO ACTION ON UPDATE NO ACTION;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
