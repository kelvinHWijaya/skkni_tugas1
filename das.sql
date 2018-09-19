-- phpMyAdmin SQL Dump
-- version 4.7.9
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Aug 31, 2018 at 07:09 AM
-- Server version: 10.1.31-MariaDB
-- PHP Version: 7.0.28

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `das`
--

-- --------------------------------------------------------

--
-- Table structure for table `lokasi`
--

CREATE TABLE `lokasi` (
  `id_lokasi` int(50) NOT NULL,
  `nama_lokasi` varchar(50) NOT NULL,
  `id_sungai` int(10) NOT NULL,
  `kelurahan` varchar(50) NOT NULL,
  `kecamatan` varchar(50) NOT NULL,
  `latitude` varchar(50) NOT NULL,
  `longitude` varchar(50) NOT NULL,
  `batas_normal` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `lokasi`
--

INSERT INTO `lokasi` (`id_lokasi`, `nama_lokasi`, `id_sungai`, `kelurahan`, `kecamatan`, `latitude`, `longitude`, `batas_normal`) VALUES
(1, 'Jembatan Maesa', 1, 'Paal 4', 'Tikala', '1.475063', '124.869286', '');

-- --------------------------------------------------------

--
-- Table structure for table `status`
--

CREATE TABLE `status` (
  `id_status` int(50) NOT NULL,
  `id_lokasi` int(50) NOT NULL,
  `tinggi_air` varchar(50) NOT NULL,
  `waktu` time(6) NOT NULL,
  `tanggal` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `status`
--

INSERT INTO `status` (`id_status`, `id_lokasi`, `tinggi_air`, `waktu`, `tanggal`) VALUES
(6, 1, '0.652', '21:36:00.000000', '2018-08-30'),
(7, 1, '0.654', '21:37:00.000000', '2018-08-30'),
(8, 1, '0.65', '21:38:00.000000', '2018-08-30'),
(9, 1, '0.653', '21:39:00.000000', '2018-08-30'),
(10, 1, '0.656', '21:40:00.000000', '2018-08-30'),
(11, 1, '0.602', '10:36:00.000000', '2018-08-31'),
(12, 1, '0.603', '10:37:00.000000', '2018-08-31'),
(13, 1, '0.607', '10:38:00.000000', '2018-08-31'),
(14, 1, '0.6', '10:39:00.000000', '2018-08-31'),
(15, 1, '0.611', '10:40:00.000000', '2018-08-31'),
(16, 1, '0.591', '12:58:00.000000', '2018-08-31'),
(17, 1, '0.596', '12:59:00.000000', '2018-08-31'),
(18, 1, '0.602', '13:00:00.000000', '2018-08-31');

-- --------------------------------------------------------

--
-- Table structure for table `sungai`
--

CREATE TABLE `sungai` (
  `id_sungai` int(10) NOT NULL,
  `nama_sungai` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `sungai`
--

INSERT INTO `sungai` (`id_sungai`, `nama_sungai`) VALUES
(1, 'Tikala');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `lokasi`
--
ALTER TABLE `lokasi`
  ADD PRIMARY KEY (`id_lokasi`);

--
-- Indexes for table `status`
--
ALTER TABLE `status`
  ADD PRIMARY KEY (`id_status`);

--
-- Indexes for table `sungai`
--
ALTER TABLE `sungai`
  ADD PRIMARY KEY (`id_sungai`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `lokasi`
--
ALTER TABLE `lokasi`
  MODIFY `id_lokasi` int(50) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `status`
--
ALTER TABLE `status`
  MODIFY `id_status` int(50) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;

--
-- AUTO_INCREMENT for table `sungai`
--
ALTER TABLE `sungai`
  MODIFY `id_sungai` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
