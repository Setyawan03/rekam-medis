-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Nov 20, 2022 at 07:06 AM
-- Server version: 10.4.25-MariaDB
-- PHP Version: 8.1.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `rekam_medis`
--

-- --------------------------------------------------------

--
-- Table structure for table `dokter`
--

CREATE TABLE `dokter` (
  `id` int(11) NOT NULL,
  `nama_dokter` varchar(50) DEFAULT NULL,
  `spesialis` enum('anak','umum','gigi','kandungan') DEFAULT NULL,
  `no_hp` int(12) DEFAULT NULL,
  `jadwal` varchar(50) DEFAULT NULL,
  `alamat` varchar(50) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `dokter`
--

INSERT INTO `dokter` (`id`, `nama_dokter`, `spesialis`, `no_hp`, `jadwal`, `alamat`) VALUES
(2, 'yyy', '', 2147483647, 'hih', 'jh');

-- --------------------------------------------------------

--
-- Table structure for table `pasien`
--

CREATE TABLE `pasien` (
  `id` int(11) NOT NULL,
  `nama_pasien` varchar(50) DEFAULT NULL,
  `alamat` varchar(50) DEFAULT NULL,
  `tmpt_lahir` varchar(50) DEFAULT NULL,
  `tgl_lahir` date DEFAULT NULL,
  `no_hp` int(12) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `pasien`
--

INSERT INTO `pasien` (`id`, `nama_pasien`, `alamat`, `tmpt_lahir`, `tgl_lahir`, `no_hp`) VALUES
(1, 'indra', 'mana mana saja', 'goa', '2022-11-18', 2147483647),
(2, 'indra', 'dok2', 'dok2', '2022-11-09', 2147483647),
(4, 'avif', 'polimak', 'goa', '2022-11-15', 2147483647);

-- --------------------------------------------------------

--
-- Table structure for table `petugas_medis`
--

CREATE TABLE `petugas_medis` (
  `id` int(11) NOT NULL,
  `nama` varchar(50) DEFAULT NULL,
  `alamat` varchar(50) DEFAULT NULL,
  `jenis_kelamin` enum('perempuan','laki-laki') DEFAULT NULL,
  `no_hp` int(12) DEFAULT NULL,
  `jabatan` enum('admin','dokter','perawat') DEFAULT NULL,
  `id_user` int(11) NOT NULL,
  `id_poli` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `petugas_medis`
--

INSERT INTO `petugas_medis` (`id`, `nama`, `alamat`, `jenis_kelamin`, `no_hp`, `jabatan`, `id_user`, `id_poli`) VALUES
(1, 'avif', 'polimak', 'laki-laki', 12345678, 'perawat', 1, 1);

-- --------------------------------------------------------

--
-- Table structure for table `poli`
--

CREATE TABLE `poli` (
  `id` int(11) NOT NULL,
  `nama_poli` varchar(50) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `poli`
--

INSERT INTO `poli` (`id`, `nama_poli`) VALUES
(1, 'poli umum'),
(2, 'Poli Gigi');

-- --------------------------------------------------------

--
-- Table structure for table `rekam_medis`
--

CREATE TABLE `rekam_medis` (
  `id` int(11) NOT NULL,
  `id_pasien` int(11) DEFAULT NULL,
  `id_dokter` int(11) DEFAULT NULL,
  `tgl_periksa` date DEFAULT NULL,
  `resep_obat` text DEFAULT NULL,
  `diagnosa` text DEFAULT NULL,
  `keluhan` text DEFAULT NULL,
  `id_poli` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `id` int(11) NOT NULL,
  `username` varchar(50) DEFAULT NULL,
  `password` varchar(255) DEFAULT NULL,
  `role` enum('admin','dokter','perawat') DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`id`, `username`, `password`, `role`) VALUES
(1, 'mahasiswa', 'e10adc3949ba59abbe56e057f20f883e', 'perawat');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `dokter`
--
ALTER TABLE `dokter`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `pasien`
--
ALTER TABLE `pasien`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `petugas_medis`
--
ALTER TABLE `petugas_medis`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `poli`
--
ALTER TABLE `poli`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `rekam_medis`
--
ALTER TABLE `rekam_medis`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `dokter`
--
ALTER TABLE `dokter`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `pasien`
--
ALTER TABLE `pasien`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `petugas_medis`
--
ALTER TABLE `petugas_medis`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `poli`
--
ALTER TABLE `poli`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `rekam_medis`
--
ALTER TABLE `rekam_medis`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
