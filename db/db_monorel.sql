-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Apr 15, 2020 at 02:45 PM
-- Server version: 10.1.19-MariaDB
-- PHP Version: 5.6.28

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `db_monorel`
--

-- --------------------------------------------------------

--
-- Table structure for table `tb_admin`
--

CREATE TABLE `tb_admin` (
  `admin_id` int(10) NOT NULL,
  `username` varchar(50) NOT NULL,
  `password` varchar(60) NOT NULL,
  `level` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tb_admin`
--

INSERT INTO `tb_admin` (`admin_id`, `username`, `password`, `level`) VALUES
(1, 'Kec-Gedebage', '827ccb0eea8a706c4c34a16891f84e7b', '1'),
(2, 'Kel-Cimincrang', '827ccb0eea8a706c4c34a16891f84e7b', '2'),
(3, 'Kel-Rancabolang', '827ccb0eea8a706c4c34a16891f84e7b', '2'),
(4, 'Kel-Rancanumpang', '827ccb0eea8a706c4c34a16891f84e7b', '2'),
(5, 'Kel-Ciskid', '827ccb0eea8a706c4c34a16891f84e7b', '2');

-- --------------------------------------------------------

--
-- Table structure for table `tb_kategori`
--

CREATE TABLE `tb_kategori` (
  `kategori_id` int(11) NOT NULL,
  `nama_kategori` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tb_kategori`
--

INSERT INTO `tb_kategori` (`kategori_id`, `nama_kategori`) VALUES
(1, 'Infrastruktur'),
(2, 'Sosial Budaya'),
(3, 'Ekonomi'),
(5, 'Lingkungan Hidup'),
(6, 'Kelembagaan');

-- --------------------------------------------------------

--
-- Table structure for table `tb_lkk`
--

CREATE TABLE `tb_lkk` (
  `lkk_id` int(10) NOT NULL,
  `name` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tb_lkk`
--

INSERT INTO `tb_lkk` (`lkk_id`, `name`) VALUES
(1, 'Karang Taruna'),
(2, 'LPM'),
(3, 'PKK'),
(4, 'RW');

-- --------------------------------------------------------

--
-- Table structure for table `tb_pagu`
--

CREATE TABLE `tb_pagu` (
  `pagu_id` int(10) NOT NULL,
  `admin_id` int(11) NOT NULL,
  `lkk_id` int(10) NOT NULL,
  `tahun` year(4) NOT NULL,
  `pagu` bigint(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `tb_realisasi`
--

CREATE TABLE `tb_realisasi` (
  `realisasi_id` int(11) NOT NULL,
  `admin_id` int(10) NOT NULL,
  `pagu_id` int(10) NOT NULL,
  `kategori_id` int(10) NOT NULL,
  `satuan_id` int(10) NOT NULL,
  `tanggal` date NOT NULL,
  `volume` bigint(20) NOT NULL,
  `anggaran` bigint(20) NOT NULL,
  `keterangan` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `tb_satuan`
--

CREATE TABLE `tb_satuan` (
  `satuan_id` int(11) NOT NULL,
  `nama_satuan` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tb_satuan`
--

INSERT INTO `tb_satuan` (`satuan_id`, `nama_satuan`) VALUES
(1, 'M2'),
(2, 'M3'),
(4, 'Dokumen'),
(5, 'Kegiatan'),
(6, 'Unit'),
(7, 'Buah'),
(8, 'Pcs'),
(9, 'Paket');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `tb_admin`
--
ALTER TABLE `tb_admin`
  ADD PRIMARY KEY (`admin_id`);

--
-- Indexes for table `tb_kategori`
--
ALTER TABLE `tb_kategori`
  ADD PRIMARY KEY (`kategori_id`);

--
-- Indexes for table `tb_lkk`
--
ALTER TABLE `tb_lkk`
  ADD PRIMARY KEY (`lkk_id`);

--
-- Indexes for table `tb_pagu`
--
ALTER TABLE `tb_pagu`
  ADD PRIMARY KEY (`pagu_id`);

--
-- Indexes for table `tb_realisasi`
--
ALTER TABLE `tb_realisasi`
  ADD PRIMARY KEY (`realisasi_id`);

--
-- Indexes for table `tb_satuan`
--
ALTER TABLE `tb_satuan`
  ADD PRIMARY KEY (`satuan_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `tb_admin`
--
ALTER TABLE `tb_admin`
  MODIFY `admin_id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
--
-- AUTO_INCREMENT for table `tb_kategori`
--
ALTER TABLE `tb_kategori`
  MODIFY `kategori_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
--
-- AUTO_INCREMENT for table `tb_lkk`
--
ALTER TABLE `tb_lkk`
  MODIFY `lkk_id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
--
-- AUTO_INCREMENT for table `tb_pagu`
--
ALTER TABLE `tb_pagu`
  MODIFY `pagu_id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;
--
-- AUTO_INCREMENT for table `tb_realisasi`
--
ALTER TABLE `tb_realisasi`
  MODIFY `realisasi_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
--
-- AUTO_INCREMENT for table `tb_satuan`
--
ALTER TABLE `tb_satuan`
  MODIFY `satuan_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
