-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Dec 02, 2023 at 05:56 AM
-- Server version: 10.4.28-MariaDB
-- PHP Version: 8.2.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `akademik`
--

-- --------------------------------------------------------

--
-- Table structure for table `siswa`
--

CREATE TABLE `siswa` (
  `id` int(11) NOT NULL,
  `nis` varchar(12) NOT NULL,
  `nama` varchar(200) NOT NULL,
  `jenisKelamin` varchar(200) NOT NULL,
  `tanggalLahir` date NOT NULL,
  `alamat` varchar(200) NOT NULL,
  `jurusan` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `siswa`
--

INSERT INTO `siswa` (`id`, `nis`, `nama`, `jenisKelamin`, `tanggalLahir`, `alamat`, `jurusan`) VALUES
(1, '11112321', 'Krisopras Candra', 'L', '2006-12-12', 'Jl. Shibuya No 1', 'Rekayasa Perangkat Lunak'),
(2, '11112135', 'Dandin Wibui Super', 'P', '2005-10-21', 'Jl. Blimbing Selatan No 9', 'Tehnik Komputer dan Jaringan'),
(4, '11112138', 'Akbar Cavela', 'P', '2008-10-14', 'Jl. Gadang terusan ', 'Sistem Imformasi Jaringan');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `id` int(10) NOT NULL,
  `nama` varchar(200) NOT NULL,
  `username` varchar(200) NOT NULL,
  `password` varchar(200) NOT NULL,
  `role` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`id`, `nama`, `username`, `password`, `role`) VALUES
(1, 'Gojo Satoru', 'Gojoi', 'satoru321', 'admin'),
(2, 'Megumi Fushiro', 'Megumi', 'fush1r0', 'admin'),
(3, 'Kiyotaka Ayanokoji', 'Kiyota', '4yan0k0j1', 'operator'),
(4, 'Mio Akiyama', 'Mio', '4k1y4m40', 'operator'),
(5, 'Erza Scarlet', 'Erza', 'erza4321', 'operator'),
(6, 'pp', 'pp', 'd53315bea08cec50d2591fcaf3b32dc5d289cdc6c16b7e8bed8c8e3f7ceaa34e', 'operator'),
(7, 'Krisopras Candra', 'oci123', '273259472544c038bdf860d1b3aba5afb2ad0257c9a840da3822e77a80cd6fdc', 'admin'),
(8, 'aa', 'aa', '961b6dd3ede3cb8ecbaacbd68de040cd78eb2ed5889130cceb4c49268ea4d506', 'operator'),
(9, 'ss', 'ss', 'a31fe9656fc8d3a459e623dc8204e6d0268f8df56d734dac3ca3262edb5db883', 'admin'),
(10, 'ww', 'ww', 'b84ff8057ee3a7f87deac4ae29ac59292f02e6c28f987031648011018384d888', 'admin');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `siswa`
--
ALTER TABLE `siswa`
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
-- AUTO_INCREMENT for table `siswa`
--
ALTER TABLE `siswa`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
