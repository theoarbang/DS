-- phpMyAdmin SQL Dump
-- version 4.7.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: May 17, 2018 at 09:25 AM
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
-- Table structure for table `administrator`
--

CREATE TABLE `administrator` (
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
-- Table structure for table `diagnosa_kunjungan`
--

CREATE TABLE `diagnosa_kunjungan` (
  `id_diagnosa_kunjungan` int(11) NOT NULL,
  `id_kunjungan` int(5) NOT NULL,
  `id_diagnosa` int(5) NOT NULL,
  `densitas` double NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `help_sistem`
--

CREATE TABLE `help_sistem` (
  `id_help_sistem` int(11) NOT NULL,
  `nama_help_sistem` varchar(100) NOT NULL,
  `deskripsi` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `item_diagnosa_kunjungan`
--

CREATE TABLE `item_diagnosa_kunjungan` (
  `id_item_diagnosa_kunjungan` int(11) NOT NULL,
  `id_diagnosa_kunjungan` int(5) NOT NULL,
  `id_faktor_resiko_gejala` int(5) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `keputusan`
--

CREATE TABLE `keputusan` (
  `id_keputusan` int(11) NOT NULL,
  `id_faktor_resiko_gejala` int(10) NOT NULL,
  `id_diagnosa` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `prognosis_faktor_gejala`
--

CREATE TABLE `prognosis_faktor_gejala` (
  `id_prognosis_fresiko_gejala` int(11) NOT NULL,
  `id_prognosis` int(5) NOT NULL,
  `id_faktor_gejala_resiko` int(5) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `prognosis_kunjungan`
--

CREATE TABLE `prognosis_kunjungan` (
  `id_prognosis_kunjungan` int(11) NOT NULL,
  `id_prognosis` int(5) NOT NULL,
  `id_kunjungan` int(5) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `tindakan_diagnosa`
--

CREATE TABLE `tindakan_diagnosa` (
  `id_diagnosa_tindakan` int(11) NOT NULL,
  `id_diagnosa` int(10) NOT NULL,
  `id_tindakan` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `diagnosa_kunjungan`
--
ALTER TABLE `diagnosa_kunjungan`
  ADD PRIMARY KEY (`id_diagnosa_kunjungan`);

--
-- Indexes for table `help_sistem`
--
ALTER TABLE `help_sistem`
  ADD PRIMARY KEY (`id_help_sistem`);

--
-- Indexes for table `item_diagnosa_kunjungan`
--
ALTER TABLE `item_diagnosa_kunjungan`
  ADD PRIMARY KEY (`id_item_diagnosa_kunjungan`);

--
-- Indexes for table `keputusan`
--
ALTER TABLE `keputusan`
  ADD PRIMARY KEY (`id_keputusan`);

--
-- Indexes for table `prognosis_faktor_gejala`
--
ALTER TABLE `prognosis_faktor_gejala`
  ADD PRIMARY KEY (`id_prognosis_fresiko_gejala`);

--
-- Indexes for table `prognosis_kunjungan`
--
ALTER TABLE `prognosis_kunjungan`
  ADD PRIMARY KEY (`id_prognosis_kunjungan`);

--
-- Indexes for table `tindakan_diagnosa`
--
ALTER TABLE `tindakan_diagnosa`
  ADD PRIMARY KEY (`id_diagnosa_tindakan`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `diagnosa_kunjungan`
--
ALTER TABLE `diagnosa_kunjungan`
  MODIFY `id_diagnosa_kunjungan` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `help_sistem`
--
ALTER TABLE `help_sistem`
  MODIFY `id_help_sistem` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `item_diagnosa_kunjungan`
--
ALTER TABLE `item_diagnosa_kunjungan`
  MODIFY `id_item_diagnosa_kunjungan` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `keputusan`
--
ALTER TABLE `keputusan`
  MODIFY `id_keputusan` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `prognosis_faktor_gejala`
--
ALTER TABLE `prognosis_faktor_gejala`
  MODIFY `id_prognosis_fresiko_gejala` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `prognosis_kunjungan`
--
ALTER TABLE `prognosis_kunjungan`
  MODIFY `id_prognosis_kunjungan` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `tindakan_diagnosa`
--
ALTER TABLE `tindakan_diagnosa`
  MODIFY `id_diagnosa_tindakan` int(11) NOT NULL AUTO_INCREMENT;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
