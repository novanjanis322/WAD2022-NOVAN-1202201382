-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Nov 22, 2022 at 01:16 PM
-- Server version: 10.4.24-MariaDB
-- PHP Version: 8.1.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `db_wad_modul3`
--

-- --------------------------------------------------------

--
-- Table structure for table `datamobil`
--

CREATE TABLE `datamobil` (
  `id_mobil` int(255) NOT NULL,
  `nama_mobil` varchar(255) NOT NULL,
  `pemilik_mobil` varchar(255) NOT NULL,
  `merk_mobil` varchar(255) NOT NULL,
  `tanggal_beli` date NOT NULL,
  `deskripsi` text NOT NULL,
  `foto_mobil` varchar(255) NOT NULL,
  `status_pembayaran` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `datamobil`
--

INSERT INTO `datamobil` (`id_mobil`, `nama_mobil`, `pemilik_mobil`, `merk_mobil`, `tanggal_beli`, `deskripsi`, `foto_mobil`, `status_pembayaran`) VALUES
(14, 'super-gt', 'Novan - 1202201382', 'Super Car', '2022-11-21', 'kasd3123123kappa2131sad23123kappa213123123', 'images_gta-san-andreas_vehicles_super-gt.webp', 'Lunas'),
(15, 'policecar', 'Novan - 1202201382', 'Popo', '2022-11-21', 'daseeeeeeeeeeeqwsw', 'images_gta-san-andreas_vehicles_police.webp', 'Lunas'),
(17, 'buffalo', 'Novan - 1202201382', 'race', '2022-11-21', 'wdqdwqdqw', 'images_gta-san-andreas_vehicles_buffalo.webp', 'Lunas'),
(18, 'Limo', 'Novan - 1202201382', 'Fancy Car', '2022-11-21', 'KEKW KEKW KEKW KEKW KEKW KEKW KEKW KEKW KEKW KEKW KEKW KEKW KEKW KEKW KEKW KEKW KEKW KEKW KEKW KEKW KEKW KEKW KEKW KEKW KEKW KEKW KEKW KEKW KEKW KEKW KEKW KEKW KEKW KEKW KEKW KEKW KEKW KEKW KEKW KEKW KEKW KEKW KEKW KEKW KEKW KEKW KEKW KEKW KEKW KEKW KEKW KEKW KEKW KEKW KEKW KEKW KEKW KEKW KEKW KEKW KEKW KEKW KEKW KEKW KEKW KEKW KEKW KEKW KEKW KEKW KEKW KEKW KEKW KEKW KEKW KEKW KEKW KEKW KEKW KEKW KEKW KEKW KEKW KEKW KEKW KEKW KEKW KEKW KEKW KEKW KEKW KEKW KEKW KEKW KEKW KEKW KEKW KEKW KEKW KEKW KEKW KEKW KEKW KEKW KEKW KEKW KEKW KEKW KEKW KEKW KEKW KEKW KEKW KEKW KEKW KEKW KEKW KEKW KEKW KEKW KEKW KEKW KEKW KEKW KEKW KEKW KEKW KEKW KEKW KEKW KEKW KEKW KEKW KEKW KEKW KEKW KEKW KEKW KEKW KEKW KEKW KEKW KEKW KEKW KEKW KEKW KEKW KEKW KEKW KEKW KEKW KEKW KEKW KEKW KEKW KEKW KEKW KEKW KEKW KEKW KEKW KEKW KEKW KEKW KEKW KEKW KEKW KEKW KEKW KEKW KEKW KEKW KEKW KEKW KEKW KEKW KEKW KEKW KEKW KEKW KEKW KEKW KEKW KEKW KEKW KEKW KEKW KEKW KEKW KEKW KEKW KEKW KEKW KEKW KEKW KEKW KEKW KEKW KEKW KEKW KEKW KEKW KEKW KEKW KEKW KEKW KEKW KEKW KEKW KEKW KEKW KEKW KEKW KEKW KEKW KEKW KEKW KEKW KEKW KEKW KEKW KEKW KEKW KEKW KEKW KEKW KEKW KEKW KEKW KEKW KEKW KEKW KEKW KEKW KEKW KEKW KEKW KEKW KEKW KEKW KEKW KEKW KEKW KEKW KEKW KEKW KEKW KEKW KEKW KEKW KEKW KEKW KEKW KEKW KEKW KEKW KEKW KEKW KEKW KEKW KEKW KEKW KEKW KEKW KEKW KEKW KEKW KEKW KEKW KEKW KEKW KEKW KEKW KEKW KEKW KEKW KEKW KEKW KEKW KEKW KEKW KEKW KEKW KEKW KEKW KEKW KEKW KEKW KEKW KEKW KEKW KEKW KEKW KEKW KEKW KEKW KEKW KEKW KEKW KEKW KEKW KEKW KEKW KEKW KEKW KEKW KEKW KEKW KEKW KEKW KEKW KEKW KEKW KEKW KEKW KEKW KEKW KEKW KEKW KEKW KEKW KEKW KEKW KEKW KEKW KEKW KEKW KEKW KEKW KEKW KEKW KEKW KEKW KEKW KEKW KEKW KEKW KEKW KEKW KEKW KEKW KEKW KEKW KEKW KEKW KEKW KEKW KEKW KEKW KEKW KEKW KEKW KEKW KEKW KEKW KEKW KEKW KEKW KEKW KEKW ', 'images_gta-san-andreas_vehicles_stretch.webp', 'Lunas'),
(20, 'McQueen', 'class', 'Piston Racer', '2022-11-21', 'Draggeegegerwrwerq21e21e,l1dqw;sksodwqdkawqmdq', 'CotR_McQueen.webp', 'Lunas'),
(21, 'Camper', 'Novan - 1202201382', 'Camping', '2022-11-11', 'Oldwerlqw,elqwdOldwerlqw,elqwdOldwerlqw,elqwdOldwerlqw,elqwdOldwerlqw,elqwdOldwerlqw,elqwdOldwerlqw,elqwdOldwerlqw,elqwdOldwerlqw,elqwd', 'images_gta-san-andreas_vehicles_camper.webp', 'Lunas');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `datamobil`
--
ALTER TABLE `datamobil`
  ADD PRIMARY KEY (`id_mobil`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `datamobil`
--
ALTER TABLE `datamobil`
  MODIFY `id_mobil` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=22;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;