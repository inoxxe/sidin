-- phpMyAdmin SQL Dump
-- version 4.7.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Sep 30, 2018 at 01:28 PM
-- Server version: 10.1.28-MariaDB
-- PHP Version: 7.1.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `sidin`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `id` int(11) NOT NULL,
  `user` varchar(255) NOT NULL,
  `nama` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`id`, `user`, `nama`, `password`) VALUES
(1, 'admin', 'Rufi Tampan', 'admin');

-- --------------------------------------------------------

--
-- Table structure for table `register`
--

CREATE TABLE `register` (
  `id` int(5) NOT NULL,
  `nim` varchar(255) NOT NULL,
  `nama` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `jns_klmn` varchar(50) NOT NULL,
  `lahir` varchar(50) NOT NULL,
  `alamat` varchar(50) NOT NULL,
  `jurusan` varchar(50) NOT NULL,
  `orangtua` varchar(50) NOT NULL,
  `hari` varchar(10) NOT NULL,
  `jam` varchar(50) NOT NULL,
  `kelas` varchar(10) NOT NULL,
  `keperluan` varchar(255) NOT NULL,
  `status` varchar(10) NOT NULL,
  `level` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `register`
--

INSERT INTO `register` (`id`, `nim`, `nama`, `password`, `jns_klmn`, `lahir`, `alamat`, `jurusan`, `orangtua`, `hari`, `jam`, `kelas`, `keperluan`, `status`, `level`) VALUES
(4, 'debby telo', 'ino', '900150983cd24fb0d6963f7d28e17f72', 'Laki-Laki', '21-01-1998', 'sk', 'Teknik Informatika S1', 'abdiel', '', '', '', '', '', 'Mahasiswa'),
(5, 'a11.2016.09362  ', 'Januario Tris', '827ccb0eea8a706c4c34a16891f84e7b', 'Laki-Laki', '21-01-1998', 'puri anjasmoro', 'Teknik Informatika S1', 'ehe', '', '', '', '', 'tidak', 'Mahasiswa'),
(7, 'a11.2016.09354', 'bagas ehe', 'ee776a18253721efe8a62e4abd29dc47', 'Laki-Laki', '21-01-1998', 'jauh', 'Teknik Informatika S1', 'ayah bagas', '', '', '', '', '', 'Mahasiswa'),
(8, 'admin', 'rufi', '21232f297a57a5a743894a0e4a801fc3', 'Laki-Laki', '21-01-1998', 'Jl.purianjasmoro L2/24', 'Teknik Informatika S1', 'ehe', '', '', '', '', '', 'Admin');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `register`
--
ALTER TABLE `register`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `register`
--
ALTER TABLE `register`
  MODIFY `id` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

DELIMITER $$
--
-- Events
--
CREATE DEFINER=`root`@`localhost` EVENT `e_weekly` ON SCHEDULE EVERY 1 WEEK STARTS '2018-06-03 00:00:00' ON COMPLETION NOT PRESERVE ENABLE COMMENT 'Penghabusan table pinjaman' DO TRUNCATE kelas$$

DELIMITER ;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
