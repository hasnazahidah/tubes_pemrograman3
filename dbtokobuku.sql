-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Aug 02, 2022 at 03:26 AM
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
  `judul` varchar(50) DEFAULT NULL,
  `pengarang` varchar(50) DEFAULT NULL,
  `penerbit` varchar(50) DEFAULT NULL,
  `tahun_terbit` varchar(50) DEFAULT NULL,
  `stok` int(30) DEFAULT NULL,
  `harga` int(50) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `buku`
--

INSERT INTO `buku` (`id_buku`, `judul`, `pengarang`, `penerbit`, `tahun_terbit`, `stok`, `harga`) VALUES
(101, 'Bumi', 'Tere Liye', 'Gramedia', '2014', 10, 100000),
(102, 'Bulan', 'Tere liye', 'Gramedia', '2015', 10, 100000),
(103, 'Matahari', 'Tere liye', 'Gramedia', '2016', 10, 100000),
(104, 'Bintang', 'Tere Liye', 'Gramedia', '2017', 10, 100000),
(105, 'Komet', 'Tere liye', 'Gramedia', '2018', 10, 100000),
(106, 'Si Putih', 'Tere liye', 'Gramedia', '2019', 10, 100000),
(107, 'Hujan', 'Tere liye', 'Gramedia', '2020', 10, 100000),
(108, 'Ceros dan Batozar', 'Tere Liye', 'Gramedia', '2018', 10, 100000),
(109, 'Ceros', 'Tere Liye', 'Gramedia', '2020', 10, 100000),
(110, 'dft', 'vfbgh', 'vfgb', '2020', 10, 1000);

-- --------------------------------------------------------

--
-- Table structure for table `kategori`
--

CREATE TABLE `kategori` (
  `id_kategori` int(11) NOT NULL,
  `id_buku2` int(11) NOT NULL,
  `jenis_kategori` varchar(50) DEFAULT NULL,
  `deskripsi` varchar(50) DEFAULT NULL,
  `tanggal` date DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `kategori`
--

INSERT INTO `kategori` (`id_kategori`, `id_buku2`, `jenis_kategori`, `deskripsi`, `tanggal`) VALUES
(201, 101, 'Novel', 'Best Selling', '2022-07-05'),
(202, 102, 'Novel', 'Best Selling', '2022-07-05'),
(203, 103, 'Novel', 'Best Selling', '2022-07-05'),
(204, 104, 'Novel', 'Best Selling', '2022-07-04'),
(205, 105, 'Novel', 'Best Selling', '2022-07-05'),
(206, 106, 'novel', 'best selling', '2020-08-08'),
(207, 107, 'Novel', 'best selling', '2022-07-30'),
(208, 106, 'Novel', 'Best Selling Novel', '2022-07-29');

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
(1, 0, 'hasna', 1, 0, 0, NULL, 1),
(2, 0, 'dhanti', 1, 0, 0, NULL, 1),
(3, 0, 'key1234', 0, 0, 0, '', 1),
(4, 0, 'key4321', 0, 0, 0, NULL, 0),
(5, 0, 'KEY297', 0, 0, 0, NULL, 0);

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
(1, 'uri:API/buku/bk:get', 3, 1659146872, 'dhanti'),
(2, 'uri:API/buku/bk:post', 3, 1659149531, 'dhanti'),
(3, 'uri:API/kategori/kat:get', 3, 1659155162, 'dhanti'),
(4, 'uri:API/users/users:get', 9, 1659156701, 'dhanti'),
(5, 'uri:API/users/users:post', 1, 1659159364, 'dhanti'),
(6, 'uri:API/pegawai/pgw:get', 5, 1659160287, 'dhanti'),
(7, 'uri:API/pegawai/pgw:post', 1, 1659176504, 'dhanti'),
(8, 'uri:API/Buku/bk:get', 5, 1659402483, 'hasna'),
(9, 'uri:API/Penjualan/jual:get', 17, 1659237194, 'hasna'),
(10, 'uri:API/kasir/ksr:get', 1, 1659147145, 'hasna'),
(11, 'uri:API/Transaksi/trans:get', 1, 1659250467, 'hasna'),
(12, 'uri:API/Pembeli/pbl:get', 47, 1659239789, 'hasna'),
(13, 'uri:API/Pembeli/pbl:post', 1, 1659181064, 'hasna'),
(14, 'uri:API/Kategori/kat:get', 1, 1659339694, 'hasna'),
(15, 'uri:API/Kategori/kat:post', 1, 1659173021, 'dhanti'),
(16, 'uri:API/users/users:get', 13, 1659238979, 'hasna'),
(17, 'uri:API/users/users:post', 1, 1659174264, 'hasna'),
(18, 'uri:API/pegawai/pgw:get', 75, 1659239594, 'hasna'),
(19, 'uri:API/Pembeli/pbl:post', 1, 1659166229, 'dhanti'),
(20, 'uri:API/transaksi/trans:get', 6, 1659166327, 'dhanti'),
(21, 'uri:API/Transaksi/trans:post', 2, 1659181241, 'hasna'),
(22, 'uri:API/transaksi/trans:post', 2, 1659169815, 'dhanti'),
(23, 'uri:API/Penjualan/jual:post', 1, 1659235337, 'hasna'),
(24, 'uri:API/penjualan/jual:get', 7, 1659234748, 'dhanti'),
(25, 'uri:API/key/key:post', 8, 1659248154, 'dhanti'),
(26, 'uri:API/key/key:post', 2, 1659250133, 'hasna'),
(27, 'uri:API/buku/bk:get', 7, 1659338889, 'KEY297'),
(28, 'uri:API/pegawai/pgw:get', 3, 1659338986, 'KEY297');

-- --------------------------------------------------------

--
-- Table structure for table `pegawai`
--

CREATE TABLE `pegawai` (
  `id_pegawai` int(11) NOT NULL,
  `id_users2` int(11) NOT NULL,
  `nama` varchar(50) DEFAULT NULL,
  `no_telpon` int(15) NOT NULL,
  `pekerjaan` varchar(50) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `pegawai`
--

INSERT INTO `pegawai` (`id_pegawai`, `id_users2`, `nama`, `no_telpon`, `pekerjaan`) VALUES
(401, 301, 'Calvin Antares', 2147483647, 'admin'),
(402, 302, 'Mahesa Angkasa', 2147483647, 'kasir'),
(403, 303, 'Bayu Aji', 81237137, 'kasir'),
(404, 304, 'Jinendra Asoka', 81237137, 'kasir'),
(405, 305, 'Ayu Cantika L', 81237137, 'kasir'),
(406, 306, 'Cici Lilac', 81211628, 'kasir'),
(407, 307, 'Nana Nina', 81276123, 'kasir'),
(408, 303, 'Bayu Edi', 8126199, 'kasir');

-- --------------------------------------------------------

--
-- Table structure for table `pembeli`
--

CREATE TABLE `pembeli` (
  `id_pembeli` int(11) NOT NULL,
  `nama_pembeli` varchar(50) DEFAULT NULL,
  `no_telpon` int(15) DEFAULT NULL,
  `alamat` varchar(50) DEFAULT NULL,
  `email` varchar(50) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `pembeli`
--

INSERT INTO `pembeli` (`id_pembeli`, `nama_pembeli`, `no_telpon`, `alamat`, `email`) VALUES
(501, 'Davin', 821000898, 'Bandung', 'davin@gmmail.com'),
(502, 'Clara', 821000823, 'Bandung', 'clara@gmmail.com'),
(503, 'Dara', 821000814, 'Bandung', 'dara@gmmail.com'),
(504, 'Renata', 821000867, 'Bandung', 'renata@gmmail.com'),
(505, 'Asep', 821000835, 'Jakarta', 'asep@gmmail.com'),
(506, 'Tika', 8126166, 'Bogor', 'tika@gmail.com');

-- --------------------------------------------------------

--
-- Table structure for table `penjualan`
--

CREATE TABLE `penjualan` (
  `id_penjualan` int(11) NOT NULL,
  `id_transaksi` int(11) NOT NULL,
  `jumlah_terjual` int(50) DEFAULT NULL,
  `pemasukan` int(50) DEFAULT NULL,
  `tanggal` date DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `penjualan`
--

INSERT INTO `penjualan` (`id_penjualan`, `id_transaksi`, `jumlah_terjual`, `pemasukan`, `tanggal`) VALUES
(701, 601, 5, 500000, '2022-09-01'),
(702, 602, 5, 500000, '2022-10-07'),
(703, 603, 5, 500000, '2022-11-07'),
(704, 604, 5, 500000, '2022-12-07'),
(705, 605, 5, 500000, '2020-08-08');

-- --------------------------------------------------------

--
-- Table structure for table `transaksi`
--

CREATE TABLE `transaksi` (
  `id_transaksi` int(11) NOT NULL,
  `id_buku` int(11) NOT NULL,
  `id_pegawai` int(11) NOT NULL,
  `id_pembeli` int(11) NOT NULL,
  `jumlah_buku` int(15) DEFAULT NULL,
  `total` int(15) DEFAULT NULL,
  `tanggal` date DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `transaksi`
--

INSERT INTO `transaksi` (`id_transaksi`, `id_buku`, `id_pegawai`, `id_pembeli`, `jumlah_buku`, `total`, `tanggal`) VALUES
(601, 102, 406, 503, 1, 100000, '2022-09-02'),
(602, 102, 402, 502, 1, 100000, '2022-09-01'),
(603, 103, 403, 503, 1, 100000, '2022-09-01'),
(604, 104, 404, 504, 1, 100000, '2022-09-01'),
(605, 105, 405, 505, 1, 100000, '2022-09-01');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id_users` int(11) NOT NULL,
  `username` varchar(50) DEFAULT NULL,
  `password` varchar(15) DEFAULT NULL,
  `status` varchar(50) DEFAULT NULL,
  `level` int(3) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id_users`, `username`, `password`, `status`, `level`) VALUES
(301, 'calvin', '1234', 'aktif', 1),
(302, 'mahesa', '1234', 'aktif', 2),
(303, 'bayu', '1234', 'aktif', 2),
(304, 'jinendra', '1234', 'pasif', 2),
(305, 'ayu', '1234', 'aktif', 2),
(306, 'cici', '1234', 'aktif', 2),
(307, 'nana', '1234', 'aktif', 2),
(308, 'Kiti', '1234', 'aktif', 1);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `buku`
--
ALTER TABLE `buku`
  ADD PRIMARY KEY (`id_buku`);

--
-- Indexes for table `kategori`
--
ALTER TABLE `kategori`
  ADD PRIMARY KEY (`id_kategori`),
  ADD KEY `id_buku` (`id_buku2`);

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
-- Indexes for table `pegawai`
--
ALTER TABLE `pegawai`
  ADD PRIMARY KEY (`id_pegawai`),
  ADD KEY `id_users` (`id_users2`);

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
  ADD UNIQUE KEY `id_transaksi` (`id_transaksi`);

--
-- Indexes for table `transaksi`
--
ALTER TABLE `transaksi`
  ADD PRIMARY KEY (`id_transaksi`),
  ADD UNIQUE KEY `id_pegawai` (`id_pegawai`),
  ADD KEY `id_buku` (`id_buku`),
  ADD KEY `id_kasir` (`id_pegawai`),
  ADD KEY `id_pembeli` (`id_pembeli`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id_users`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `keys`
--
ALTER TABLE `keys`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `limits`
--
ALTER TABLE `limits`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=29;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `kategori`
--
ALTER TABLE `kategori`
  ADD CONSTRAINT `kategori_ibfk_1` FOREIGN KEY (`id_buku2`) REFERENCES `buku` (`id_buku`);

--
-- Constraints for table `pegawai`
--
ALTER TABLE `pegawai`
  ADD CONSTRAINT `pegawai_ibfk_1` FOREIGN KEY (`id_users2`) REFERENCES `users` (`id_users`);

--
-- Constraints for table `penjualan`
--
ALTER TABLE `penjualan`
  ADD CONSTRAINT `penjualan_ibfk_1` FOREIGN KEY (`id_transaksi`) REFERENCES `transaksi` (`id_transaksi`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `transaksi`
--
ALTER TABLE `transaksi`
  ADD CONSTRAINT `transaksi_ibfk_1` FOREIGN KEY (`id_buku`) REFERENCES `buku` (`id_buku`),
  ADD CONSTRAINT `transaksi_ibfk_2` FOREIGN KEY (`id_pegawai`) REFERENCES `pegawai` (`id_pegawai`),
  ADD CONSTRAINT `transaksi_ibfk_3` FOREIGN KEY (`id_pembeli`) REFERENCES `pembeli` (`id_pembeli`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
