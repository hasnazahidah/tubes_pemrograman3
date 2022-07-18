-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jul 05, 2022 at 04:18 AM
-- Server version: 10.4.20-MariaDB
-- PHP Version: 8.0.8

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `db_rest`
--

-- --------------------------------------------------------

--
-- Table structure for table `keys`
--

CREATE TABLE `keys` (
  `id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `key` varchar(40) NOT NULL,
  `level` int(2) NOT NULL,
  `ignore_limits` tinyint(1) NOT NULL DEFAULT 0,
  `is_private_key` tinyint(1) NOT NULL DEFAULT 0,
  `ip_addresses` text DEFAULT NULL,
  `date_created` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `keys`
--

INSERT INTO `keys` (`id`, `user_id`, `key`, `level`, `ignore_limits`, `is_private_key`, `ip_addresses`, `date_created`) VALUES
(1, 1, 'poltekpos123', 1, 0, 0, NULL, 1),
(2, 2, 'test123', 2, 0, 0, NULL, 1);

-- --------------------------------------------------------

--
-- Table structure for table `limits`
--

CREATE TABLE `limits` (
  `id` int(11) NOT NULL,
  `uri` varchar(255) NOT NULL,
  `count` int(10) NOT NULL,
  `hour_started` int(11) NOT NULL,
  `api_key` varchar(40) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `limits`
--

INSERT INTO `limits` (`id`, `uri`, `count`, `hour_started`, `api_key`) VALUES
(1, 'uri:mahasiswa/mhs:get', 3, 1655519654, 'test123'),
(2, 'uri:mahasiswa/mhs:get', 1, 1655538034, 'poltekpos123'),
(3, 'uri:mahasiswa/mhs:post', 1, 1655521508, 'poltekpos123');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_mahasiswa`
--

CREATE TABLE `tbl_mahasiswa` (
  `npm` int(5) NOT NULL,
  `nama` varchar(100) NOT NULL,
  `alamat` varchar(250) NOT NULL,
  `email` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tbl_mahasiswa`
--

INSERT INTO `tbl_mahasiswa` (`npm`, `nama`, `alamat`, `email`) VALUES
(12040001, 'Cinta', 'Sarijadi', 'cinta@poltekpos.ac.id'),
(12040002, 'Rangga', 'Cibogo', 'rangga@poltekpos.ac.id'),
(12040003, 'Marsello', 'Jombang', 'charles@gmail.com'),
(12040006, 'Orang', 'Bandung', 'Orang@gmail.com');

-- --------------------------------------------------------

--
-- Table structure for table `t_mahasiswa`
--

CREATE TABLE `t_mahasiswa` (
  `npm` int(11) NOT NULL,
  `nama` varchar(150) DEFAULT NULL,
  `jenis_kelamin` varchar(20) DEFAULT NULL,
  `alamat` text DEFAULT NULL,
  `agama` varchar(30) DEFAULT NULL,
  `no_hp` varchar(15) DEFAULT NULL,
  `email` varchar(150) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 ROW_FORMAT=DYNAMIC;

--
-- Dumping data for table `t_mahasiswa`
--

INSERT INTO `t_mahasiswa` (`npm`, `nama`, `jenis_kelamin`, `alamat`, `agama`, `no_hp`, `email`) VALUES
(1204001, 'Jadon', 'Laki-laki', 'Bandung', 'Islam', '0833333333333', 'jadon@ulbi.ac.id'),
(1204002, 'Hiya', 'Perempuan', 'Huya', 'Khonghucu', '0822222222222', 'hihu@ulbi.ac.id'),
(1204003, 'Chiko', 'Laki-laki', 'Bandung', 'Protestan', '0811111111111', 'chiko@ulbi.ac.id'),
(1204004, 'Zigaz', 'Laki-laki', 'Zaga', 'Islam', '123131232', 'zigzag@ulbi.ac.id'),
(1204005, 'Joni', 'Laki-laki', 'Bandung', 'Budha', '08123123213232', 'joni11@ulbi.ac.id'),
(1204006, 'Abi', 'Laki-laki', 'Abu', 'Hindu', '08123123122', 'abi99@ulbi.ac.id'),
(1204007, 'Kiki', 'Perempuan', 'Cimahi', 'Protestan', '1111111111', 'kiki@ulbi.ac.id'),
(1204008, 'Charles Marsello', 'Laki-laki', 'Jombang', 'Islam', '082222222222', 'charles@gmail.com');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `keys`
--
ALTER TABLE `keys`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `limits`
--
ALTER TABLE `limits`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tbl_mahasiswa`
--
ALTER TABLE `tbl_mahasiswa`
  ADD PRIMARY KEY (`npm`);

--
-- Indexes for table `t_mahasiswa`
--
ALTER TABLE `t_mahasiswa`
  ADD PRIMARY KEY (`npm`) USING BTREE;

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `keys`
--
ALTER TABLE `keys`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `limits`
--
ALTER TABLE `limits`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `tbl_mahasiswa`
--
ALTER TABLE `tbl_mahasiswa`
  MODIFY `npm` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12040008;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
