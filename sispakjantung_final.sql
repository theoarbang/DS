-- phpMyAdmin SQL Dump
-- version 4.7.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: May 24, 2018 at 04:07 AM
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

--
-- Dumping data for table `tb_administrator`
--

INSERT INTO `tb_administrator` (`id_administrator`, `nama_admin`, `username`, `password`, `tanggal_lahir`, `telp`, `alamat`, `admin`) VALUES
(1, 'Admin', 'admin', '123', '1992-08-05', '353133', 'Jl. Gayam Sari', 1),
(2, 'Pakar', 'pakar1', '123', '1889-08-07', '353133', 'Jl Kaliurang', 2);

-- --------------------------------------------------------

--
-- Table structure for table `tb_diagnosa`
--

CREATE TABLE `tb_diagnosa` (
  `id_diagnosa` int(11) NOT NULL,
  `nama_diagnosa` varchar(100) NOT NULL,
  `inisial` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

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

CREATE TABLE `tb_diagnosa_kunjungan` (
  `id_diagnosa_kunjungan` int(11) NOT NULL,
  `id_pasien` int(11) NOT NULL,
  `id_diagnosa` int(5) NOT NULL,
  `densitas` double NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tb_diagnosa_kunjungan`
--

INSERT INTO `tb_diagnosa_kunjungan` (`id_diagnosa_kunjungan`, `id_pasien`, `id_diagnosa`, `densitas`) VALUES
(1, 1, 1, 0.61548320943348),
(2, 1, 1, 0.81115879828326);

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

--
-- Dumping data for table `tb_item_diagnosa_kunjungan`
--

INSERT INTO `tb_item_diagnosa_kunjungan` (`id_item_diagnosa_kunjungan`, `id_diagnosa_kunjungan`, `id_faktor_resiko_gejala`) VALUES
(19, 1, 2),
(20, 1, 3),
(21, 1, 6),
(22, 1, 11),
(23, 1, 21),
(24, 1, 24),
(25, 1, 43),
(26, 2, 1),
(27, 2, 3),
(28, 2, 8),
(29, 2, 9),
(30, 2, 21),
(31, 2, 23),
(32, 2, 36),
(33, 2, 43);

-- --------------------------------------------------------

--
-- Table structure for table `tb_jns_faktor_gejala`
--

CREATE TABLE `tb_jns_faktor_gejala` (
  `id_jns_faktor_gejala` int(11) NOT NULL,
  `nama_jns_faktor_gejala` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tb_jns_faktor_gejala`
--

INSERT INTO `tb_jns_faktor_gejala` (`id_jns_faktor_gejala`, `nama_jns_faktor_gejala`) VALUES
(1, 'Faktor Resiko'),
(2, 'Gejala');

-- --------------------------------------------------------

--
-- Table structure for table `tb_keputusan`
--

CREATE TABLE `tb_keputusan` (
  `id_keputusan` int(11) NOT NULL,
  `id_faktor_resiko_gejala` int(10) NOT NULL,
  `id_diagnosa` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

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

--
-- Dumping data for table `tb_paramedis`
--

INSERT INTO `tb_paramedis` (`id_paramedis`, `nama_paramedis`, `tgl_lahir`, `alamat`, `telp`, `username`, `password`) VALUES
(4, 'Paramedis', '1998-05-17', 'kayen 4', '0892', 'paramedis1', '123');

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

--
-- Dumping data for table `tb_pasien`
--

INSERT INTO `tb_pasien` (`id_pasien`, `nama_pasien`, `tgl_lahir_pasien`, `alamat_pasien`, `telp_pasien`, `jk_pasien`, `status`) VALUES
(1, 'Ahmad', '1960-05-09', 'Jl Kaliurang', '0852654321', 'Pria', 'Menikah');

-- --------------------------------------------------------

--
-- Table structure for table `tb_tindakan`
--

CREATE TABLE `tb_tindakan` (
  `id_tindakan` int(11) NOT NULL,
  `nama_tindakan` varchar(100) NOT NULL,
  `detail` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tb_tindakan`
--

INSERT INTO `tb_tindakan` (`id_tindakan`, `nama_tindakan`, `detail`) VALUES
(1, 'Terapi Gaya hidup', '<ol type=\"a\">\r\n<li>Diet <br />- Makan cukup buah dan sayuran, sehingga akan mencukupi kebutuhan serat, vitamin dan mineral. Serat sangat bermanfaat untuk menurunkan kadar kolesterol. <br />- Makan rendah lemak. <br />- Kurangi asupan garam. Hindari makanan yang diawetkan. <br />- Hindari makan camilan-selain buah-buahan (sebagai sisipan antara makan pagi dan siang, dan sisipan antara makan siang dan malam). <br />- Tidak menambah gual sebagai pemanis dan hindari makanan padat kalori, seperti kue-kue dan makanan gorengan atau berlemak.</li>\r\n<li>Aktifitas fisik dan olah raga <br />Fungsi olahraga antara lain membuang kelebihan kalori yang dibutuhkan oleh tubuh, menghancurkan kandungan lemak dan memperbaiki metabolisme. Aktifitas fisik adalah segala gerakan tubuh yang melibatkan gerakan otot, sehingga terjadi penggunaan energi oleh otot dan otot jantung berkontraksi untuk memenuhi suplai oksigen ke berbagai jaringan (termasuk jaringan otot jantung). Aktifitas fisik dapat berupa: aktifitas kerja, aktifitas rumah, olah raga jadi, olah raga dengan aktifitas fisik yang lainnya adalah: olah raga dilakukan secara 3 tahap, yaitu tahap pemanasan sekitar 10 menit, tahap latihan sekitar 20-60 menit, dan tahap pendinginan sekitar 10 menit.</li>\r\n<li>Aktifitas fisik dan olah raga <br />Fungsi olahraga antara lain membuang kelebihan kalori yang dibutuhkan oleh tubuh, menghancurkan kandungan lemak dan memperbaiki metabolisme. Aktifitas fisik adalah segala gerakan tubuh yang melibatkan gerakan otot, sehingga terjadi penggunaan energi oleh otot dan otot jantung berkontraksi untuk memenuhi suplai oksigen ke berbagai jaringan (termasuk jaringan otot jantung). Aktifitas fisik dapat berupa: aktifitas kerja, aktifitas rumah, olah raga jadi, olah raga dengan aktifitas fisik yang lainnya adalah: olah raga dilakukan secara 3 tahap, yaitu tahap pemanasan sekitar 10 menit, tahap latihan sekitar 20-60 menit, dan tahap pendinginan sekitar 10 menit.</li>\r\n<li>Berhenti merokok <br />Nikotin dalam asap rokok dapat merangsang hormon adrenalin yang bisa mengganggu metabolisme lemak. Proses ini bisa mengakibatkan darah lebih kental sehingga memudahkan timbulnya plak dan menghambat aliran darah.</li>\r\n<li>Kendalikan stres <br />Stres membutuhkan seluruh jaringan tubuh kerja ekstra, termasuk jantung. Stres juga merangsang pembentukan adrenalin yang bisa berpengaruh buruk pada pembuluh jantung.</li>\r\n</ol>'),
(2, 'Tindakan non infasif', 'yaitu obat-obatan untuk JK ringan dan sedang, hanya saja jika ada prognosis/ penakit penyerta lainnya maka obat maupun terapi bisa bertambah (muchid, 20006).\r\n<ol type=\"a\">\r\n	<li>Aspirin dan Klopidogrel.\r\nJika aspirin intoleransi dan klopidogrel tidak dapat digunakan, gunakan:</li>\r\n	<li>Ticlopidine</li>\r\n	<li>Nitrat</li>\r\n	<li>Tablet sublingual atau spray atau IV (Kontraindikasi pada pasien yang menerima sildenafil dalam 24 jam ke belakang. Gunakan dengan perhatian pada pasien dengan gagal RV).</li>\r\n	<li>?-bloker oral (jika tidak kontraindikasi)</li>\r\n	<li>Antagonis kalsium non-dihidropiridin jika sukar untuk meneruskan pengobatan yang terdahulu.</li>\r\n	<li>Senyawa penurun lipid\r\n		<ul>\r\n			<li>Inhibitor HMG-CoA reduktase dan diet LDL-c> 2.6 mmol/L (100 mg/dL) dimulai dalam 24-96 jam setelah masuk RS. Dilanjutkan pada saat keluar RS</li>\r\n			<li>Fibrat atau niasin jika HDL-c < 1 mmol/L (40 mg/dL) muncul sendiri atau dalam kombinasi dengan obnormalitas lipid lain</li>\r\n		</ul>\r\n	</li>\r\n	<li>\r\n		Heparin (tidak dilanjutkan jika diagnosa enzim kardiak sekunder normal) test stress direkomendasikan meskipun selama berada di RS atau dalam 72 jam\r\n	</li>\r\n</ol>'),
(3, 'Tindakan Infasif', 'yaitu tindakan yang memerlukan penangganan lebih lanjut dengan Dokter Spesialis Jantung (Muchid, 2006)\r\nPengobatan sakit Iskemia:\r\n<ol>\r\n	<li>\r\n		Nitrat\r\n		<ul>\r\n			<li>Tablet sublingual atau spray(max 3 dosis)</li>\r\n			<li>Jika sakit tidak berkurang, lanjutkan dengan pemakaian IV</li>\r\n			<li>Nitrogliserin IV lazimnya diganti dengan nitrat oral dalam 24 jam periode bebas sakit</li>\r\n			<li>Regimen dosis oral seharusnya memiliki interval bebas nitrat untuk mencegah berkembangnya toleransi.</li>\r\n			<li>Kontraindikasi pada pasien yang menerima sildenafil dalam 24 jam yang lalu.</li>\r\n			<li>Gunakan dengan perhatian pada pasien dengan gagal RV</li>\r\n		</ul>\r\n	</li>\r\n	<li>B-bloker\r\n		<ul>\r\n			<li>direkomendasikan jika tidak ada kontraindikasi</li>\r\n			<li>jika sakit dada berlanjut, gunakan dosis pertama IV yang diikuti dengan tablet oral</li>\r\n			<li>semua ?-bloker itu keefektifannya sama, tetapi ?-bloker tanpa aktivitas simpatomimetik</li>\r\n			<li>intrinsik lebih disukai</li>\r\n		</ul>\r\n	</li>\r\n	<li>Morfin sulfat\r\n		<ul>\r\n			<li>Direkomendasikan jika sakit tidak kurang dengan terapi anti iskemia yang cukup dan jika terdapat kongesti pulmonary atau agitasi parah</li>\r\n			<li>Dapat digunakan dengan nitrat selama tekanan darah dimonitor</li>\r\n			<li>1-5 mg IV setiap 5-30 menit jika diperlukan</li>\r\n			<li>Perlu diberikan juga obat anti muntah</li>\r\n			<li>Penggunaan disertai perhatian jika terjadi hipotensi pada penggunaan awal nitrat\r\nPilihan pengobatan lain untuk Iskemia:</li>\r\n		</ul>\r\n	</li>\r\n	<li>\r\n		Antagonis Kalsium\r\n		<ul>\r\n			<li>Dapat digunakan ketika ?-bloker kontra indikasi (verapamil dan diltiazem lebih disukai)</li>\r\n			<li>Antagonis kalsium dihidropiridin dapat digunakan pada pasien yang sulit sembuh hanya setelah gagal menggunakan nitrat dan B-bloker</li>\r\n		</ul>\r\n	</li>\r\n	<li>\r\n		Inhibitor ACE\r\n		<ul>\r\n			<li>Diindikasikan pada hipertensi yang tetap (walaupun sedang menjalani pengobatan dengan nitrat dan ?-bloker ), disfungsi sistolik LV, CHF.</li>\r\n		</ul>\r\n	</li>\r\n	<li>Terapi Antiplatelet dan Antikoagulan\r\n		<ul>\r\n			<li>Esensial untuk memodifikasi proses penyakit dan kemungkinan perkembangannya menuju kematian, MI atau MI berulang.</li>\r\n		</ul>\r\n	</li>\r\n	<li>\r\n		Aspirin dan Klopidogrel\r\n		<ul>\r\n			<li>Sebaiknya diinisiasi dengan baik.</li>\r\n		</ul>\r\n	</li>\r\n	<li>\r\n		Heparin\r\n		<ul>\r\n			<li>Heparin bobot molekul rendah (LMWH = low molecular weight heparin) secara subkutan atau heparin tidak terfraksinasi (UFH = unfractioned heparin) secara IV dapat ditambahkan sebagai terapi antiplatelet.</li>\r\n		</ul>\r\n	</li>\r\n	<li>\r\n		Antagonis GP Iib/IIIa\r\n		<ul>\r\n			<li>\r\n				Penggunaannya direkomendasikan sebagai tambahan aspirin dan UFH pada pasien dengan iskemia berlanjut atau dengan risiko tinggi lainnya dan untuk pasien yang intervensi koroner percutaneous direncanankan.\r\n			</li>\r\n		</ul>\r\n	</li>\r\n	<li>\r\n		Modifikasi risiko\r\n		<ul>\r\n			<li>Senyawa menurun lipid.</li>\r\n			<ol>\r\n				<li>Inhibitor HMG-CoA reduktase dan diet untuk LDL-c> 2,6 mmol/L (100mg/dL) dimulai dengan 24-96 jam setelah masuk RS Diteruskan saat keluar RS.</li>\r\n				<li>Fibrat atau niasin jika HDL-c < 1 mmol/L (40 mg/dL) muncul sendiri atau kombinasi dengan abnormalitas lipid lain.</li>\r\n			</ol>\r\n		</ul>\r\n	</li>\r\n</ol>');

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
-- Dumping data for table `tb_tindakan_diagnosa`
--

INSERT INTO `tb_tindakan_diagnosa` (`id_diagnosa_tindakan`, `id_diagnosa`, `id_tindakan`) VALUES
(1, 3, 1),
(2, 2, 2),
(3, 1, 3);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `tb_administrator`
--
ALTER TABLE `tb_administrator`
  ADD PRIMARY KEY (`id_administrator`);

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
-- AUTO_INCREMENT for table `tb_administrator`
--
ALTER TABLE `tb_administrator`
  MODIFY `id_administrator` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `tb_diagnosa`
--
ALTER TABLE `tb_diagnosa`
  MODIFY `id_diagnosa` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `tb_faktor_resiko_gejala`
--
ALTER TABLE `tb_faktor_resiko_gejala`
  MODIFY `id_faktor_resiko_gejala` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=44;

--
-- AUTO_INCREMENT for table `tb_help_sistem`
--
ALTER TABLE `tb_help_sistem`
  MODIFY `id_help_sistem` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `tb_item_diagnosa_kunjungan`
--
ALTER TABLE `tb_item_diagnosa_kunjungan`
  MODIFY `id_item_diagnosa_kunjungan` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=39;

--
-- AUTO_INCREMENT for table `tb_jns_faktor_gejala`
--
ALTER TABLE `tb_jns_faktor_gejala`
  MODIFY `id_jns_faktor_gejala` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `tb_keputusan`
--
ALTER TABLE `tb_keputusan`
  MODIFY `id_keputusan` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=79;

--
-- AUTO_INCREMENT for table `tb_paramedis`
--
ALTER TABLE `tb_paramedis`
  MODIFY `id_paramedis` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `tb_pasien`
--
ALTER TABLE `tb_pasien`
  MODIFY `id_pasien` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `tb_tindakan`
--
ALTER TABLE `tb_tindakan`
  MODIFY `id_tindakan` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `tb_tindakan_diagnosa`
--
ALTER TABLE `tb_tindakan_diagnosa`
  MODIFY `id_diagnosa_tindakan` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `tb_diagnosa_kunjungan`
--
ALTER TABLE `tb_diagnosa_kunjungan`
  ADD CONSTRAINT `tb_diagnosa_kunjungan_ibfk_1` FOREIGN KEY (`id_diagnosa`) REFERENCES `tb_diagnosa` (`id_diagnosa`) ON UPDATE CASCADE;

--
-- Constraints for table `tb_faktor_resiko_gejala`
--
ALTER TABLE `tb_faktor_resiko_gejala`
  ADD CONSTRAINT `tb_faktor_resiko_gejala_ibfk_1` FOREIGN KEY (`id_jns_faktor_gejala`) REFERENCES `tb_jns_faktor_gejala` (`id_jns_faktor_gejala`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Constraints for table `tb_item_diagnosa_kunjungan`
--
ALTER TABLE `tb_item_diagnosa_kunjungan`
  ADD CONSTRAINT `tb_item_diagnosa_kunjungan_ibfk_2` FOREIGN KEY (`id_faktor_resiko_gejala`) REFERENCES `tb_faktor_resiko_gejala` (`id_faktor_resiko_gejala`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `tb_item_diagnosa_kunjungan_ibfk_3` FOREIGN KEY (`id_diagnosa_kunjungan`) REFERENCES `tb_diagnosa_kunjungan` (`id_diagnosa_kunjungan`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `tb_keputusan`
--
ALTER TABLE `tb_keputusan`
  ADD CONSTRAINT `tb_keputusan_ibfk_1` FOREIGN KEY (`id_faktor_resiko_gejala`) REFERENCES `tb_faktor_resiko_gejala` (`id_faktor_resiko_gejala`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `tb_keputusan_ibfk_2` FOREIGN KEY (`id_diagnosa`) REFERENCES `tb_diagnosa` (`id_diagnosa`) ON DELETE NO ACTION ON UPDATE NO ACTION;

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
