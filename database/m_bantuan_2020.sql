-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Mar 31, 2021 at 04:55 PM
-- Server version: 10.4.11-MariaDB
-- PHP Version: 7.4.5

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `m_bantuan_2020`
--

-- --------------------------------------------------------

--
-- Table structure for table `tb_kriteria`
--

CREATE TABLE `tb_kriteria` (
  `id_kriteria` int(11) NOT NULL,
  `kd_kriteria` varchar(10) NOT NULL,
  `nama_kriteria` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tb_kriteria`
--

INSERT INTO `tb_kriteria` (`id_kriteria`, `kd_kriteria`, `nama_kriteria`) VALUES
(1, 'C1', 'Jumlah Tanggungan'),
(2, 'C2', 'Umur'),
(3, 'C3', 'Kondisi Rumah'),
(4, 'C4', 'Kepemilikan Rumah'),
(5, 'C5', 'Jaringan Listrik'),
(6, 'C6', 'Sumber Air'),
(7, 'C7', 'Jenis Pekerjaan'),
(8, 'C8', 'Jumlah Penghasilan'),
(9, 'C9', 'Pendidikan');

-- --------------------------------------------------------

--
-- Table structure for table `tb_nilai_kriteria`
--

CREATE TABLE `tb_nilai_kriteria` (
  `id_nilai_kriteria` int(11) NOT NULL,
  `id_kriteria` int(11) NOT NULL,
  `pilihan` varchar(50) NOT NULL,
  `nilai` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tb_nilai_kriteria`
--

INSERT INTO `tb_nilai_kriteria` (`id_nilai_kriteria`, `id_kriteria`, `pilihan`, `nilai`) VALUES
(1, 7, 'PNS', 1),
(2, 7, 'Wiraswasta', 2),
(3, 7, 'Buruh', 3),
(4, 7, 'Pengangguran', 4),
(7, 1, '1 atau tidak punya anak', 1),
(8, 1, '2 anak', 2),
(9, 1, '3 anak', 3),
(10, 1, '4 anak atau lebih', 4),
(11, 2, '> 50', 4),
(12, 2, '>=40 s/d <=50', 3),
(13, 2, '>= 35 s/d < 40', 2),
(14, 2, '< 35', 1),
(15, 3, 'Permanen', 1),
(16, 3, 'Semi Permanen', 2),
(17, 3, 'Panggung', 3),
(18, 3, 'Anyaman Bambu', 4),
(19, 4, 'Milik Sendiri', 2),
(20, 4, 'Kontrak', 3),
(21, 4, 'Numpang', 4),
(22, 5, 'Milik Sendiri', 2),
(23, 5, 'Numpang', 3),
(24, 5, 'Tidak Ada', 4),
(25, 6, 'PDAM', 2),
(26, 6, 'Air Sumur', 3),
(27, 6, 'Air Sungai', 4),
(28, 8, '> 1.000.000', 1),
(29, 8, '>=500.000 s/d <= 1.0', 2),
(30, 8, '>=200.000 s/d <=500.', 3),
(31, 8, '<= 200.000', 4),
(32, 9, 'Tidak Sekolah', 4),
(33, 9, 'SD dan SMP', 3),
(34, 9, 'SMA', 2),
(35, 9, 'Kuliah', 1);

-- --------------------------------------------------------

--
-- Table structure for table `tb_penduduk`
--

CREATE TABLE `tb_penduduk` (
  `id_penduduk` int(11) NOT NULL,
  `nik` varchar(20) NOT NULL,
  `nama` varchar(50) NOT NULL,
  `jk` int(11) NOT NULL,
  `alamat` text NOT NULL,
  `notelp` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tb_penduduk`
--

INSERT INTO `tb_penduduk` (`id_penduduk`, `nik`, `nama`, `jk`, `alamat`, `notelp`) VALUES
(1, '12345', 'Fadli', 1, 'alamat', '082259500319'),
(18, '129090129923', 'Jefry', 1, 'alamat', '082259500319'),
(19, '123213', 'Syamsul', 1, 'alamat', '082259500319'),
(22, '12345678910111214', 'Pahlawan', 1, 'Alamat Penduduk', '082259500319');

-- --------------------------------------------------------

--
-- Table structure for table `tb_penduduk_nilai`
--

CREATE TABLE `tb_penduduk_nilai` (
  `id_penduduk_nilai` int(11) NOT NULL,
  `id_penduduk` varchar(50) NOT NULL,
  `C1` int(11) NOT NULL,
  `C2` int(11) NOT NULL,
  `C3` int(11) NOT NULL,
  `C4` int(11) NOT NULL,
  `C5` int(11) NOT NULL,
  `C6` int(11) NOT NULL,
  `C7` int(11) NOT NULL,
  `C8` int(11) NOT NULL,
  `C9` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tb_penduduk_nilai`
--

INSERT INTO `tb_penduduk_nilai` (`id_penduduk_nilai`, `id_penduduk`, `C1`, `C2`, `C3`, `C4`, `C5`, `C6`, `C7`, `C8`, `C9`) VALUES
(15, '1', 10, 14, 17, 20, 22, 27, 3, 28, 32),
(21, '18', 8, 11, 18, 19, 23, 26, 1, 31, 35),
(22, '19', 9, 13, 15, 21, 24, 25, 4, 29, 33),
(24, '22', 9, 12, 18, 21, 24, 27, 4, 31, 32);

-- --------------------------------------------------------

--
-- Table structure for table `tb_user`
--

CREATE TABLE `tb_user` (
  `id` int(11) NOT NULL,
  `username` varchar(100) NOT NULL,
  `password` varchar(100) NOT NULL,
  `nama` varchar(100) NOT NULL,
  `status` int(11) NOT NULL,
  `level` int(11) NOT NULL COMMENT '1=admin,2=lurah,3=penduduk'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tb_user`
--

INSERT INTO `tb_user` (`id`, `username`, `password`, `nama`, `status`, `level`) VALUES
(1, 'admin', 'admin', 'Azizah', 1, 1),
(7, '12345', '12345', 'Fadli', 1, 3),
(17, '129090129923', '129090129923', 'Jefry', 1, 3),
(18, '123213', '123213', 'addwd', 1, 3),
(21, '12345678910111214', '12345678910111214', 'Pahlawan', 1, 3);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `tb_kriteria`
--
ALTER TABLE `tb_kriteria`
  ADD PRIMARY KEY (`id_kriteria`);

--
-- Indexes for table `tb_nilai_kriteria`
--
ALTER TABLE `tb_nilai_kriteria`
  ADD PRIMARY KEY (`id_nilai_kriteria`);

--
-- Indexes for table `tb_penduduk`
--
ALTER TABLE `tb_penduduk`
  ADD PRIMARY KEY (`id_penduduk`);

--
-- Indexes for table `tb_penduduk_nilai`
--
ALTER TABLE `tb_penduduk_nilai`
  ADD PRIMARY KEY (`id_penduduk_nilai`);

--
-- Indexes for table `tb_user`
--
ALTER TABLE `tb_user`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `tb_kriteria`
--
ALTER TABLE `tb_kriteria`
  MODIFY `id_kriteria` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `tb_nilai_kriteria`
--
ALTER TABLE `tb_nilai_kriteria`
  MODIFY `id_nilai_kriteria` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=36;

--
-- AUTO_INCREMENT for table `tb_penduduk`
--
ALTER TABLE `tb_penduduk`
  MODIFY `id_penduduk` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=23;

--
-- AUTO_INCREMENT for table `tb_penduduk_nilai`
--
ALTER TABLE `tb_penduduk_nilai`
  MODIFY `id_penduduk_nilai` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=25;

--
-- AUTO_INCREMENT for table `tb_user`
--
ALTER TABLE `tb_user`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=22;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
