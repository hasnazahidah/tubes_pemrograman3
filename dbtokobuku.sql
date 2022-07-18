-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jul 18, 2022 at 08:24 AM
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
-- Database: `dbtokobuku`
--

-- --------------------------------------------------------

--
-- Table structure for table `buku`
--

CREATE TABLE `buku` (
  `id_buku` int(11) NOT NULL,
  `judul` varchar(255) DEFAULT NULL,
  `pengarang` varchar(255) DEFAULT NULL,
  `penerbit` varchar(255) DEFAULT NULL,
  `tahun_terbit` year(4) DEFAULT NULL,
  `stok` int(30) DEFAULT NULL,
  `harga` int(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `buku`
--

INSERT INTO `buku` (`id_buku`, `judul`, `pengarang`, `penerbit`, `tahun_terbit`, `stok`, `harga`) VALUES
(301, 'Bumi', 'Tere Liye', 'Gramedia', 2014, 10, 100000),
(302, 'Bulan', 'Tere Liye', 'Gramedia', 2015, 10, 100000),
(303, 'Matahari', 'Tere Liye', 'Gramedia', 2016, 10, 100000),
(304, 'Bintang', 'Tere Liye', 'Gramedia', 2017, 10, 100000),
(305, 'Ceros dan Batozar', 'Tere Liye', 'Gramedia', 2018, 10, 100000);

-- --------------------------------------------------------

--
-- Table structure for table `distributor`
--

CREATE TABLE `distributor` (
  `id_dist` int(11) NOT NULL,
  `nama_dist` varchar(255) DEFAULT NULL,
  `no_telpon` int(11) DEFAULT NULL,
  `alamat` varchar(255) DEFAULT NULL,
  `email` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `distributor`
--

INSERT INTO `distributor` (`id_dist`, `nama_dist`, `no_telpon`, `alamat`, `email`) VALUES
(101, 'Lala', 8765321, 'Bandung', 'lala@gmail.com'),
(102, 'Lili', 865367632, 'Ciamis', 'lili@gmail.com'),
(103, 'Lulu', 81716526, 'Bekasi', 'lulu@gmail.com'),
(104, 'Lele', 81261252, 'Durian Runtuh', 'lele@gmail.com'),
(105, 'Lolo', 815241562, 'Jakarta', 'lolo@gmail.com');

-- --------------------------------------------------------

--
-- Table structure for table `kasir`
--

CREATE TABLE `kasir` (
  `id_kasir` int(11) NOT NULL,
  `nama_kasir` varchar(50) DEFAULT NULL,
  `no_telpon` int(15) DEFAULT NULL,
  `alamat` varchar(50) DEFAULT NULL,
  `status` varchar(50) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `kasir`
--

INSERT INTO `kasir` (`id_kasir`, `nama_kasir`, `no_telpon`, `alamat`, `status`) VALUES
(701, 'Fafa', 8765321, 'Solo', 'aktif'),
(702, 'Fifi', 865367632, 'Yogya', 'aktif'),
(703, 'Fufu', 862562234, 'Palembang', 'aktif'),
(704, 'Fefe', 81625763, 'Surabaya', 'pasif'),
(705, 'Fofo', 82616523, 'Lembang', 'pasif');

-- --------------------------------------------------------

--
-- Table structure for table `kategori`
--

CREATE TABLE `kategori` (
  `id_kategori` int(11) NOT NULL,
  `id_buku` int(11) NOT NULL,
  `jenis_kategori` varchar(50) DEFAULT NULL,
  `deskripsi` varchar(255) DEFAULT NULL,
  `update_at` date DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `kategori`
--

INSERT INTO `kategori` (`id_kategori`, `id_buku`, `jenis_kategori`, `deskripsi`, `update_at`) VALUES
(401, 301, 'Novel', 'Novel Best Seller', '2022-07-18'),
(402, 302, 'Novel', 'Novel Best Seller', '2022-07-18'),
(403, 303, 'Novel', 'Novel Best Seller', '2022-07-18'),
(404, 304, 'Novel', 'Novel Best Seller', '2022-07-18'),
(405, 305, 'Novel', 'Novel Best Seller', '2022-07-18');

-- --------------------------------------------------------

--
-- Table structure for table `pasok`
--

CREATE TABLE `pasok` (
  `id_pasok` int(11) NOT NULL,
  `id_dist` int(11) NOT NULL,
  `nama_barang` varchar(255) DEFAULT NULL,
  `harga_barang` int(30) DEFAULT NULL,
  `jumlah` int(11) DEFAULT NULL,
  `tanggal` date DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `pasok`
--

INSERT INTO `pasok` (`id_pasok`, `id_dist`, `nama_barang`, `harga_barang`, `jumlah`, `tanggal`) VALUES
(201, 101, 'Bumi', 100000, 10, '2022-07-18'),
(202, 104, 'Bulan', 100000, 10, '2022-07-18'),
(203, 103, 'Matahari', 100000, 10, '2022-07-18'),
(204, 104, 'Bintang', 100000, 10, '2022-07-18'),
(205, 105, 'Ceros dan Batozar', 100000, 10, '2022-07-18');

-- --------------------------------------------------------

--
-- Table structure for table `pembeli`
--

CREATE TABLE `pembeli` (
  `id_pembeli` int(11) NOT NULL,
  `nama_pembeli` varchar(50) DEFAULT NULL,
  `no_telpon` int(15) DEFAULT NULL,
  `alamat` varchar(50) DEFAULT NULL,
  `email` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `pembeli`
--

INSERT INTO `pembeli` (`id_pembeli`, `nama_pembeli`, `no_telpon`, `alamat`, `email`) VALUES
(501, 'Yaya', 8765321, 'Bogor', 'yaya@gmail.com'),
(502, 'Yiyi', 865367632, 'Kuningan', 'yiyi@gmail.com'),
(503, 'Yuyu', 87172671, 'Tasik', 'yuyu@gmail.com'),
(504, 'Yeye', 81621625, 'Cimahi', 'yeye@gmail.com'),
(505, 'Yoyo', 815241562, 'Padang', 'yoyo@gmail.com');

-- --------------------------------------------------------

--
-- Table structure for table `penjualan`
--

CREATE TABLE `penjualan` (
  `id_penjualan` int(11) NOT NULL,
  `id_pembeli` int(11) NOT NULL,
  `id_kasir` int(11) NOT NULL,
  `id_transaksi` int(11) NOT NULL,
  `jumlah` int(11) DEFAULT NULL,
  `ppn` int(30) DEFAULT NULL,
  `total_kotor` int(30) DEFAULT NULL,
  `total_bersih` int(30) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `penjualan`
--

INSERT INTO `penjualan` (`id_penjualan`, `id_pembeli`, `id_kasir`, `id_transaksi`, `jumlah`, `ppn`, `total_kotor`, `total_bersih`) VALUES
(801, 501, 701, 601, 1, 10, 110000, 100000),
(802, 502, 702, 602, 1, 10, 110000, 10000),
(803, 503, 703, 603, 1, 10, 110000, 10000),
(804, 504, 704, 604, 1, 10, 110000, 10000),
(805, 505, 705, 605, 1, 10, 110000, 10000);

-- --------------------------------------------------------

--
-- Table structure for table `stok`
--

CREATE TABLE `stok` (
  `id_stok` int(11) NOT NULL,
  `id_penjualan` int(11) NOT NULL,
  `jumlah_terjual` int(11) DEFAULT NULL,
  `stok_awal` int(11) DEFAULT NULL,
  `stok_akhir` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `stok`
--

INSERT INTO `stok` (`id_stok`, `id_penjualan`, `jumlah_terjual`, `stok_awal`, `stok_akhir`) VALUES
(901, 801, 1, 11, 10),
(902, 802, 1, 11, 10),
(903, 803, 1, 11, 10),
(904, 804, 1, 11, 10),
(905, 805, 1, 11, 10);

-- --------------------------------------------------------

--
-- Table structure for table `transaksi`
--

CREATE TABLE `transaksi` (
  `id_transaksi` int(11) NOT NULL,
  `id_buku` int(11) NOT NULL,
  `id_pembeli` int(11) NOT NULL,
  `jumlah` int(50) DEFAULT NULL,
  `total` int(50) DEFAULT NULL,
  `tanggal` date DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `transaksi`
--

INSERT INTO `transaksi` (`id_transaksi`, `id_buku`, `id_pembeli`, `jumlah`, `total`, `tanggal`) VALUES
(601, 301, 501, 1, 100000, '2022-07-18'),
(602, 302, 503, 1, 100000, '2022-07-18'),
(603, 303, 503, 1, 100000, '2022-07-18'),
(604, 304, 504, 1, 100000, '2022-07-18'),
(605, 305, 505, 1, 100000, '2022-07-18');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `buku`
--
ALTER TABLE `buku`
  ADD PRIMARY KEY (`id_buku`);

--
-- Indexes for table `distributor`
--
ALTER TABLE `distributor`
  ADD PRIMARY KEY (`id_dist`);

--
-- Indexes for table `kasir`
--
ALTER TABLE `kasir`
  ADD PRIMARY KEY (`id_kasir`);

--
-- Indexes for table `kategori`
--
ALTER TABLE `kategori`
  ADD PRIMARY KEY (`id_kategori`),
  ADD KEY `id_buku` (`id_buku`);

--
-- Indexes for table `pasok`
--
ALTER TABLE `pasok`
  ADD PRIMARY KEY (`id_pasok`),
  ADD KEY `id_dist` (`id_dist`);

--
-- Indexes for table `pembeli`
--
ALTER TABLE `pembeli`
  ADD PRIMARY KEY (`id_pembeli`);

--
-- Indexes for table `penjualan`
--
ALTER TABLE `penjualan`
  ADD PRIMARY KEY (`id_penjualan`),
  ADD KEY `id_pembeli` (`id_pembeli`),
  ADD KEY `id_kasir` (`id_kasir`),
  ADD KEY `id_transaksi` (`id_transaksi`);

--
-- Indexes for table `stok`
--
ALTER TABLE `stok`
  ADD PRIMARY KEY (`id_stok`),
  ADD KEY `id_penjualan` (`id_penjualan`);

--
-- Indexes for table `transaksi`
--
ALTER TABLE `transaksi`
  ADD PRIMARY KEY (`id_transaksi`),
  ADD KEY `id_buku` (`id_buku`),
  ADD KEY `id_pembeli` (`id_pembeli`);

--
-- Constraints for dumped tables
--

--
-- Constraints for table `kategori`
--
ALTER TABLE `kategori`
  ADD CONSTRAINT `kategori_ibfk_1` FOREIGN KEY (`id_buku`) REFERENCES `buku` (`id_buku`);

--
-- Constraints for table `pasok`
--
ALTER TABLE `pasok`
  ADD CONSTRAINT `pasok_ibfk_1` FOREIGN KEY (`id_dist`) REFERENCES `distributor` (`id_dist`);

--
-- Constraints for table `penjualan`
--
ALTER TABLE `penjualan`
  ADD CONSTRAINT `penjualan_ibfk_1` FOREIGN KEY (`id_pembeli`) REFERENCES `pembeli` (`id_pembeli`),
  ADD CONSTRAINT `penjualan_ibfk_2` FOREIGN KEY (`id_kasir`) REFERENCES `kasir` (`id_kasir`),
  ADD CONSTRAINT `penjualan_ibfk_3` FOREIGN KEY (`id_transaksi`) REFERENCES `transaksi` (`id_transaksi`);

--
-- Constraints for table `stok`
--
ALTER TABLE `stok`
  ADD CONSTRAINT `stok_ibfk_1` FOREIGN KEY (`id_penjualan`) REFERENCES `penjualan` (`id_penjualan`);

--
-- Constraints for table `transaksi`
--
ALTER TABLE `transaksi`
  ADD CONSTRAINT `transaksi_ibfk_1` FOREIGN KEY (`id_buku`) REFERENCES `buku` (`id_buku`),
  ADD CONSTRAINT `transaksi_ibfk_2` FOREIGN KEY (`id_pembeli`) REFERENCES `pembeli` (`id_pembeli`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
