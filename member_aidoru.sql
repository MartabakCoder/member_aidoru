-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: localhost:8889
-- Generation Time: Mar 31, 2022 at 09:49 AM
-- Server version: 5.7.34
-- PHP Version: 7.4.21

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `aidoru`
--

-- --------------------------------------------------------

--
-- Table structure for table `member_aidoru`
--

CREATE TABLE `member_aidoru` (
  `id_member` int(12) NOT NULL,
  `nama_member` varchar(255) NOT NULL,
  `tanggal_lahir` date NOT NULL,
  `tempat_lahir` varchar(255) NOT NULL,
  `generasi` varchar(255) NOT NULL,
  `grup_idol` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `member_aidoru`
--

INSERT INTO `member_aidoru` (`id_member`, `nama_member`, `tanggal_lahir`, `tempat_lahir`, `generasi`, `grup_idol`) VALUES
(2, 'coba2', '2022-03-17', 'KOTA SEMARANG', '2', 'Coba3');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `member_aidoru`
--
ALTER TABLE `member_aidoru`
  ADD PRIMARY KEY (`id_member`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `member_aidoru`
--
ALTER TABLE `member_aidoru`
  MODIFY `id_member` int(12) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
