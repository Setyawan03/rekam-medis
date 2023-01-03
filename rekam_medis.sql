-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jan 03, 2023 at 04:18 PM
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
-- Table structure for table `pasien`
--

CREATE TABLE `pasien` (
  `id` int(11) NOT NULL,
  `no_pasien` varchar(45) DEFAULT NULL,
  `nama_pasien` varchar(45) DEFAULT NULL,
  `jenis_kelamin` enum('perempuan','laki-laki') DEFAULT NULL,
  `alamat` text DEFAULT NULL,
  `tmpt_lahir` varchar(45) DEFAULT NULL,
  `tgl_lahir` date DEFAULT NULL,
  `no_hp` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `pasien`
--

INSERT INTO `pasien` (`id`, `no_pasien`, `nama_pasien`, `jenis_kelamin`, `alamat`, `tmpt_lahir`, `tgl_lahir`, `no_hp`) VALUES
(6, NULL, 'febrian', 'laki-laki', 'aceh', 'agsag', '2022-12-10', 9876532),
(7, NULL, 'fadil', 'laki-laki', 'yyyyyy', 'nuyuk', '2022-12-24', 987653),
(8, NULL, 'indra', 'laki-laki', 'dok', 'dok2', '2022-12-07', 2147483647),
(11, '802', 'bertus', 'laki-laki', 'mana-mana aja', 'dok2', '2022-12-17', 2147483647),
(12, '3333', 'avif', 'laki-laki', 'polimak', 'polimak', '2022-12-08', 987653),
(14, '11111', 'sasa', 'perempuan', 'jl.pasir 2', 'ambon', '2023-01-01', 2147483647),
(15, '11111', 'aco', 'laki-laki', 'zsdgdfg', 'jzuh', '2023-01-18', 2147483647);

-- --------------------------------------------------------

--
-- Table structure for table `petugas_medis`
--

CREATE TABLE `petugas_medis` (
  `id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `poli_id` int(11) NOT NULL,
  `jabatan` enum('Admin','Perawat','Dokter') DEFAULT NULL,
  `nama` varchar(45) DEFAULT NULL,
  `jenis_kelamin` enum('Perempuan','Laki-Laki') DEFAULT NULL,
  `alamat` varchar(45) DEFAULT NULL,
  `no_hp` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `petugas_medis`
--

INSERT INTO `petugas_medis` (`id`, `user_id`, `poli_id`, `jabatan`, `nama`, `jenis_kelamin`, `alamat`, `no_hp`) VALUES
(4, 7, 2, 'Admin', 'edi', 'Laki-Laki', 'gggg', 2147483647),
(5, 8, 1, 'Dokter', 'Meylisa', 'Perempuan', '-', 2147483647),
(6, 9, 1, 'Admin', 'avif', 'Laki-Laki', '-', 2147483647);

-- --------------------------------------------------------

--
-- Table structure for table `poli`
--

CREATE TABLE `poli` (
  `id` int(11) NOT NULL,
  `nama_poli` varchar(45) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `poli`
--

INSERT INTO `poli` (`id`, `nama_poli`) VALUES
(1, 'Poli umum'),
(2, 'Poli gigi'),
(5, 'Poli Anak'),
(6, 'Poli Jantung');

-- --------------------------------------------------------

--
-- Table structure for table `rekam_medis`
--

CREATE TABLE `rekam_medis` (
  `id` int(11) NOT NULL,
  `poli_id` int(11) NOT NULL,
  `tanggal` date DEFAULT NULL,
  `keluhan` text DEFAULT NULL,
  `nama_dokter` varchar(100) NOT NULL,
  `diagnosa` text DEFAULT NULL,
  `resep` text DEFAULT NULL,
  `alamat` text NOT NULL,
  `pasien_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `rekam_medis`
--

INSERT INTO `rekam_medis` (`id`, `poli_id`, `tanggal`, `keluhan`, `nama_dokter`, `diagnosa`, `resep`, `alamat`, `pasien_id`) VALUES
(12, 2, '2022-12-13', 'drdryr', 'a', 'ggdgsh', 's', 'aceh', 6),
(14, 1, '2023-02-11', 'a', 'a', 'a', 'a', 'dok', 8),
(15, 5, '2023-01-03', 'sakt jiwa', '0', '', '', 'mana-mana aja', 11),
(16, 5, NULL, 'hhhhhh', '0', '', '', '', 12);

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `id` int(11) NOT NULL,
  `username` varchar(45) DEFAULT NULL,
  `password` varchar(45) DEFAULT NULL,
  `role` enum('Admin','Perawat','Dokter') DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`id`, `username`, `password`, `role`) VALUES
(7, 'edi', '202cb962ac59075b964b07152d234b70', 'Perawat'),
(8, 'meylisa', '250cf8b51c773f3f8dc8b4be867a9a02', 'Dokter'),
(9, 'avif', '698d51a19d8a121ce581499d7b701668', 'Admin');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `pasien`
--
ALTER TABLE `pasien`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `petugas_medis`
--
ALTER TABLE `petugas_medis`
  ADD PRIMARY KEY (`id`),
  ADD KEY `fk_petugas_medis_user1_idx` (`user_id`),
  ADD KEY `fk_petugas_medis_poli1_idx` (`poli_id`);

--
-- Indexes for table `poli`
--
ALTER TABLE `poli`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `rekam_medis`
--
ALTER TABLE `rekam_medis`
  ADD PRIMARY KEY (`id`),
  ADD KEY `fk_rekam_medis_poli1_idx` (`poli_id`),
  ADD KEY `fk_rekam_medis_pasien1_idx` (`pasien_id`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `pasien`
--
ALTER TABLE `pasien`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- AUTO_INCREMENT for table `petugas_medis`
--
ALTER TABLE `petugas_medis`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `poli`
--
ALTER TABLE `poli`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `rekam_medis`
--
ALTER TABLE `rekam_medis`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=20;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `petugas_medis`
--
ALTER TABLE `petugas_medis`
  ADD CONSTRAINT `fk_petugas_medis_poli1` FOREIGN KEY (`poli_id`) REFERENCES `poli` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `fk_petugas_medis_user1` FOREIGN KEY (`user_id`) REFERENCES `user` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Constraints for table `rekam_medis`
--
ALTER TABLE `rekam_medis`
  ADD CONSTRAINT `fk_rekam_medis_pasien1` FOREIGN KEY (`pasien_id`) REFERENCES `pasien` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `fk_rekam_medis_poli1` FOREIGN KEY (`poli_id`) REFERENCES `poli` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
