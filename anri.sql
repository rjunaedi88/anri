-- phpMyAdmin SQL Dump
-- version 4.6.5.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Aug 09, 2021 at 06:21 AM
-- Server version: 10.1.21-MariaDB
-- PHP Version: 7.1.1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `anri`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `id_admin` int(11) NOT NULL,
  `nama` varchar(225) NOT NULL,
  `username` varchar(50) NOT NULL,
  `password` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`id_admin`, `nama`, `username`, `password`) VALUES
(1, 'admin', 'admin', 'admin');

-- --------------------------------------------------------

--
-- Table structure for table `arsip_keluar`
--

CREATE TABLE `arsip_keluar` (
  `id_keluar` int(11) NOT NULL,
  `no_arsip_keluar` varchar(50) NOT NULL,
  `jenis_arsip_keluar` varchar(225) NOT NULL,
  `jml_hlm_keluar` varchar(225) NOT NULL,
  `dikerjakan_oleh` varchar(225) NOT NULL,
  `tgl_penyerahan` date NOT NULL,
  `keterangan_keluar` varchar(225) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `arsip_masuk`
--

CREATE TABLE `arsip_masuk` (
  `id` int(11) NOT NULL,
  `tanggal_penerimaan` date NOT NULL,
  `provenance` varchar(225) NOT NULL,
  `no_arsip` varchar(225) NOT NULL,
  `jenis_arsip` varchar(225) NOT NULL,
  `jumlah_halaman` varchar(225) NOT NULL,
  `informasi_arsip` varchar(225) NOT NULL,
  `disimpan` varchar(225) NOT NULL,
  `dikerjakan` varchar(55) NOT NULL,
  `penerima` varchar(225) NOT NULL,
  `keterangan` varchar(500) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`id_admin`);

--
-- Indexes for table `arsip_keluar`
--
ALTER TABLE `arsip_keluar`
  ADD PRIMARY KEY (`id_keluar`);

--
-- Indexes for table `arsip_masuk`
--
ALTER TABLE `arsip_masuk`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
  MODIFY `id_admin` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT for table `arsip_keluar`
--
ALTER TABLE `arsip_keluar`
  MODIFY `id_keluar` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `arsip_masuk`
--
ALTER TABLE `arsip_masuk`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
