-- phpMyAdmin SQL Dump
-- version 4.7.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: May 18, 2018 at 05:20 AM
-- Server version: 10.1.16-MariaDB
-- PHP Version: 5.6.24

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
CREATE DATABASE IF NOT EXISTS `sispakjantung` DEFAULT CHARACTER SET latin1 COLLATE latin1_swedish_ci;
USE `sispakjantung`;

-- --------------------------------------------------------

--
-- Table structure for table `tb_administrator`
--

CREATE TABLE `tb_administrator` (
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

CREATE TABLE `tb_diagnosa` (
  `id_diagnosa` int(11) NOT NULL,
  `nama_diagnosa` varchar(100) NOT NULL,
  `inisial` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `tb_diagnosa_kunjungan`
--

CREATE TABLE `tb_diagnosa_kunjungan` (
  `id_diagnosa_kunjungan` int(11) NOT NULL,
  `id_kunjungan` int(5) NOT NULL,
  `id_diagnosa` int(5) NOT NULL,
  `densitas` double NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `tb_faktor_resiko_gejala`
--

CREATE TABLE `tb_faktor_resiko_gejala` (
  `id_faktor_resiko_gejala` int(11) NOT NULL,
  `id_jns_faktor_gejala` int(11) NOT NULL,
  `nama_faktor_resiko_gejala` varchar(100) NOT NULL,
  `densitas` double NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `tb_help_sistem`
--

CREATE TABLE `tb_help_sistem` (
  `id_help_sistem` int(11) NOT NULL,
  `nama_help_sistem` varchar(100) NOT NULL,
  `deskripsi` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `tb_item_diagnosa_kunjungan`
--

CREATE TABLE `tb_item_diagnosa_kunjungan` (
  `id_item_diagnosa_kunjungan` int(11) NOT NULL,
  `id_diagnosa_kunjungan` int(5) NOT NULL,
  `id_faktor_resiko_gejala` int(5) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `tb_jns_faktor_gejala`
--

CREATE TABLE `tb_jns_faktor_gejala` (
  `id_jns_faktor_gejala` int(11) NOT NULL,
  `nama_jns_faktor_gejala` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `tb_keputusan`
--

CREATE TABLE `tb_keputusan` (
  `id_keputusan` int(11) NOT NULL,
  `id_faktor_resiko_gejala` int(10) NOT NULL,
  `id_diagnosa` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `tb_kunjungan`
--

CREATE TABLE `tb_kunjungan` (
  `id_kunjungan` int(11) NOT NULL,
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
  `kolesterol` int(5) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `tb_paramedis`
--

CREATE TABLE `tb_paramedis` (
  `id_paramedis` int(11) NOT NULL,
  `nama_paramedis` varchar(45) NOT NULL,
  `tgl_lahir` date NOT NULL,
  `alamat` varchar(50) NOT NULL,
  `telp` varchar(12) NOT NULL,
  `username` varchar(15) NOT NULL,
  `password` varchar(15) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `tb_pasien`
--

CREATE TABLE `tb_pasien` (
  `id_pasien` int(11) NOT NULL,
  `nama_pasien` varchar(45) NOT NULL,
  `tgl_lahir_pasien` date NOT NULL,
  `alamat_pasien` varchar(50) NOT NULL,
  `telp_pasien` varchar(12) NOT NULL,
  `jk_pasien` enum('Pria','Wanita') NOT NULL,
  `status` enum('Belum Menikah','Menikah') NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `tb_prognosis`
--

CREATE TABLE `tb_prognosis` (
  `id_prognosis` int(11) NOT NULL,
  `nama_prognosis` varchar(100) NOT NULL,
  `saran` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `tb_prognosis_faktor_gejala`
--

CREATE TABLE `tb_prognosis_faktor_gejala` (
  `id_prognosis_fresiko_gejala` int(11) NOT NULL,
  `id_prognosis` int(5) NOT NULL,
  `id_faktor_gejala_resiko` int(5) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `tb_prognosis_kunjungan`
--

CREATE TABLE `tb_prognosis_kunjungan` (
  `id_prognosis_kunjungan` int(11) NOT NULL,
  `id_prognosis` int(5) NOT NULL,
  `id_kunjungan` int(5) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `tb_tindakan`
--

CREATE TABLE `tb_tindakan` (
  `id_tindakan` int(11) NOT NULL,
  `nama_tindakan` varchar(100) NOT NULL,
  `detail` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `tb_tindakan_diagnosa`
--

CREATE TABLE `tb_tindakan_diagnosa` (
  `id_diagnosa_tindakan` int(11) NOT NULL,
  `id_diagnosa` int(10) NOT NULL,
  `id_tindakan` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `tb_diagnosa`
--
ALTER TABLE `tb_diagnosa`
  ADD PRIMARY KEY (`id_diagnosa`);

--
-- Indexes for table `tb_diagnosa_kunjungan`
--
ALTER TABLE `tb_diagnosa_kunjungan`
  ADD PRIMARY KEY (`id_diagnosa_kunjungan`),
  ADD KEY `id_kunjungan` (`id_kunjungan`),
  ADD KEY `id_diagnosa` (`id_diagnosa`);

--
-- Indexes for table `tb_faktor_resiko_gejala`
--
ALTER TABLE `tb_faktor_resiko_gejala`
  ADD PRIMARY KEY (`id_faktor_resiko_gejala`),
  ADD KEY `id_jns_faktor_gejala` (`id_jns_faktor_gejala`);

--
-- Indexes for table `tb_help_sistem`
--
ALTER TABLE `tb_help_sistem`
  ADD PRIMARY KEY (`id_help_sistem`);

--
-- Indexes for table `tb_item_diagnosa_kunjungan`
--
ALTER TABLE `tb_item_diagnosa_kunjungan`
  ADD PRIMARY KEY (`id_item_diagnosa_kunjungan`),
  ADD KEY `id_diagnosa_kunjungan` (`id_diagnosa_kunjungan`),
  ADD KEY `id_faktor_resiko_gejala` (`id_faktor_resiko_gejala`);

--
-- Indexes for table `tb_jns_faktor_gejala`
--
ALTER TABLE `tb_jns_faktor_gejala`
  ADD PRIMARY KEY (`id_jns_faktor_gejala`);

--
-- Indexes for table `tb_keputusan`
--
ALTER TABLE `tb_keputusan`
  ADD PRIMARY KEY (`id_keputusan`),
  ADD KEY `id_faktor_resiko_gejala` (`id_faktor_resiko_gejala`),
  ADD KEY `id_diagnosa` (`id_diagnosa`);

--
-- Indexes for table `tb_kunjungan`
--
ALTER TABLE `tb_kunjungan`
  ADD PRIMARY KEY (`id_kunjungan`),
  ADD KEY `id_pasien_2` (`id_pasien`),
  ADD KEY `id_paramedis_2` (`id_paramedis`);

--
-- Indexes for table `tb_paramedis`
--
ALTER TABLE `tb_paramedis`
  ADD PRIMARY KEY (`id_paramedis`);

--
-- Indexes for table `tb_pasien`
--
ALTER TABLE `tb_pasien`
  ADD PRIMARY KEY (`id_pasien`);

--
-- Indexes for table `tb_prognosis`
--
ALTER TABLE `tb_prognosis`
  ADD PRIMARY KEY (`id_prognosis`);

--
-- Indexes for table `tb_prognosis_faktor_gejala`
--
ALTER TABLE `tb_prognosis_faktor_gejala`
  ADD PRIMARY KEY (`id_prognosis_fresiko_gejala`),
  ADD KEY `id_prognosis` (`id_prognosis`),
  ADD KEY `id_faktor_gejala_resiko` (`id_faktor_gejala_resiko`);

--
-- Indexes for table `tb_prognosis_kunjungan`
--
ALTER TABLE `tb_prognosis_kunjungan`
  ADD PRIMARY KEY (`id_prognosis_kunjungan`),
  ADD KEY `id_prognosis` (`id_prognosis`),
  ADD KEY `id_kunjungan` (`id_kunjungan`);

--
-- Indexes for table `tb_tindakan`
--
ALTER TABLE `tb_tindakan`
  ADD PRIMARY KEY (`id_tindakan`);

--
-- Indexes for table `tb_tindakan_diagnosa`
--
ALTER TABLE `tb_tindakan_diagnosa`
  ADD PRIMARY KEY (`id_diagnosa_tindakan`),
  ADD KEY `id_diagnosa` (`id_diagnosa`),
  ADD KEY `id_tindakan` (`id_tindakan`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `tb_diagnosa`
--
ALTER TABLE `tb_diagnosa`
  MODIFY `id_diagnosa` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `tb_diagnosa_kunjungan`
--
ALTER TABLE `tb_diagnosa_kunjungan`
  MODIFY `id_diagnosa_kunjungan` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `tb_faktor_resiko_gejala`
--
ALTER TABLE `tb_faktor_resiko_gejala`
  MODIFY `id_faktor_resiko_gejala` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `tb_help_sistem`
--
ALTER TABLE `tb_help_sistem`
  MODIFY `id_help_sistem` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `tb_item_diagnosa_kunjungan`
--
ALTER TABLE `tb_item_diagnosa_kunjungan`
  MODIFY `id_item_diagnosa_kunjungan` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `tb_jns_faktor_gejala`
--
ALTER TABLE `tb_jns_faktor_gejala`
  MODIFY `id_jns_faktor_gejala` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `tb_keputusan`
--
ALTER TABLE `tb_keputusan`
  MODIFY `id_keputusan` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `tb_kunjungan`
--
ALTER TABLE `tb_kunjungan`
  MODIFY `id_kunjungan` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `tb_paramedis`
--
ALTER TABLE `tb_paramedis`
  MODIFY `id_paramedis` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `tb_pasien`
--
ALTER TABLE `tb_pasien`
  MODIFY `id_pasien` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `tb_prognosis`
--
ALTER TABLE `tb_prognosis`
  MODIFY `id_prognosis` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `tb_prognosis_faktor_gejala`
--
ALTER TABLE `tb_prognosis_faktor_gejala`
  MODIFY `id_prognosis_fresiko_gejala` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `tb_prognosis_kunjungan`
--
ALTER TABLE `tb_prognosis_kunjungan`
  MODIFY `id_prognosis_kunjungan` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `tb_tindakan`
--
ALTER TABLE `tb_tindakan`
  MODIFY `id_tindakan` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `tb_tindakan_diagnosa`
--
ALTER TABLE `tb_tindakan_diagnosa`
  MODIFY `id_diagnosa_tindakan` int(11) NOT NULL AUTO_INCREMENT;
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
