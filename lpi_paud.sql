-- phpMyAdmin SQL Dump
-- version 4.8.5
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: May 30, 2020 at 02:27 AM
-- Server version: 5.7.24
-- PHP Version: 7.2.11

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `lpi_paud`
--

-- --------------------------------------------------------

--
-- Table structure for table `data_siswa`
--

CREATE TABLE `data_siswa` (
  `id` int(11) NOT NULL,
  `namaLengkap` varchar(50) NOT NULL,
  `namaPanggilan` varchar(50) NOT NULL,
  `tempatLahir` varchar(50) NOT NULL,
  `tanggalLahir` varchar(50) NOT NULL,
  `jenisKelamin` varchar(50) NOT NULL,
  `anakKe` varchar(20) NOT NULL,
  `alamatLengkap` text NOT NULL,
  `nomorTelepon` varchar(20) NOT NULL,
  `pendidikan` varchar(50) DEFAULT NULL,
  `kelasKelompok` varchar(50) DEFAULT NULL,
  `namaAyah` varchar(50) DEFAULT NULL,
  `tempatLahirAyah` varchar(50) DEFAULT NULL,
  `tanggalLahirAyah` varchar(50) DEFAULT NULL,
  `pekerjaanAyah` varchar(50) DEFAULT NULL,
  `pendidikanAyah` varchar(50) DEFAULT NULL,
  `namaIbu` varchar(50) DEFAULT NULL,
  `tempatLahirIbu` varchar(50) DEFAULT NULL,
  `tanggalLahirIbu` varchar(50) DEFAULT NULL,
  `pekerjaanIbu` varchar(50) DEFAULT NULL,
  `pendidikanIbu` varchar(50) DEFAULT NULL,
  `created_at` varchar(50) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `data_siswa`
--
ALTER TABLE `data_siswa`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `data_siswa`
--
ALTER TABLE `data_siswa`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
