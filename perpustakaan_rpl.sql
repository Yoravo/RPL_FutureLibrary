-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jul 08, 2023 at 12:02 PM
-- Server version: 10.4.27-MariaDB
-- PHP Version: 8.0.13

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `perpustakaan_rpl`
--

-- --------------------------------------------------------

--
-- Table structure for table `data_admin`
--

CREATE TABLE `data_admin` (
  `id_admin` int(30) NOT NULL,
  `username` varchar(30) NOT NULL,
  `namaLengkap` varchar(50) NOT NULL,
  `email` varchar(60) NOT NULL,
  `jenisKelamin` enum('Pria','Wanita') NOT NULL,
  `password` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `data_user`
--

CREATE TABLE `data_user` (
  `id_user` int(30) NOT NULL,
  `username` varchar(30) NOT NULL,
  `namaLengkap` varchar(50) NOT NULL,
  `email` varchar(60) NOT NULL,
  `jenisKelamin` enum('Pria','Wanita') NOT NULL,
  `password` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `data_user`
--

INSERT INTO `data_user` (`id_user`, `username`, `namaLengkap`, `email`, `jenisKelamin`, `password`) VALUES
(3, 'xmohke', 'Radja Ravine Salfriandry', '', 'Pria', 'ravinesalf123'),
(4, 'hashed', 'radja repin', '', 'Pria', '$2y$10$lNerf4QhJnLm8MdOie9XCuYyJZ0UDHpdn/IeDokV4YWqUGi2MPT/a'),
(5, 'raihan', 'raihan fikri', 'raihan@gmail.com', 'Pria', '$2y$10$0a/NrX09plcbjLSx8qBWzuPCGH7h3V5BWMkkIG7wAY4X4/1T17Mpe'),
(6, 'username', 'nama lengkap', 'ravine@gmail.com', 'Pria', '$2y$10$CbBM2W9yro.jMClnK1US4uK26ZQg8Yix5Q7vNh59T.b.fqle8npa6'),
(7, 'gizwa11', 'gizwa budi romadon', 'gizwa@gmail.com', 'Pria', '$2y$10$zI8/CEI.eVWClBI4in1J2e912FeiJE.y4hz/foOtjNh6EENkzjZPm');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `data_admin`
--
ALTER TABLE `data_admin`
  ADD PRIMARY KEY (`id_admin`);

--
-- Indexes for table `data_user`
--
ALTER TABLE `data_user`
  ADD PRIMARY KEY (`id_user`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `data_admin`
--
ALTER TABLE `data_admin`
  MODIFY `id_admin` int(30) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `data_user`
--
ALTER TABLE `data_user`
  MODIFY `id_user` int(30) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
