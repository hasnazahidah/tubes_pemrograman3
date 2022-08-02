-- phpMyAdmin SQL Dump
-- version 5.0.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 25 Jul 2022 pada 15.08
-- Versi server: 10.4.17-MariaDB
-- Versi PHP: 7.4.15

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
-- Struktur dari tabel `buku`
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
-- Dumping data untuk tabel `buku`
--

INSERT INTO `buku` (`id_buku`, `judul`, `pengarang`, `penerbit`, `tahun_terbit`, `stok`, `harga`) VALUES
(101, 'Bumi', 'Tere Liye', 'Gramedia', '2014', 10, 100000),
(102, 'Bulan', 'Tere liye', 'Gramedia', '2015', 10, 100000),
(103, 'Matahari', 'Tere liye', 'Gramedia', '2016', 10, 100000),
(104, 'Bintang', 'Tere liye', 'Gramedia', '2017', 10, 100000),
(105, 'Komet', 'Tere liye', 'Gramedia', '2018', 10, 100000),
(106, 'Si putih', 'Tere liye', 'Gramedia', '2019', 10, 100000),
(107, 'Hujan', 'Tere liye', 'Gramedia', '2020', 10, 100000);

-- --------------------------------------------------------

--
-- Struktur dari tabel `kasir`
--

CREATE TABLE `kasir` (
  `id_kasir` int(11) NOT NULL,
  `id_users` int(11) NOT NULL,
  `nama_kasir` varchar(50) DEFAULT NULL,
  `no_telpon` int(15) DEFAULT NULL,
  `alamat` varchar(50) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `kasir`
--

INSERT INTO `kasir` (`id_kasir`, `id_users`, `nama_kasir`, `no_telpon`, `alamat`) VALUES
(401, 301, 'Calvin Antares', 2147483647, 'Surabaya'),
(402, 302, 'Mahesa Angkasa', 2147483647, 'Jakarta'),
(403, 303, 'Bayu Aji', 2147483647, 'Bandung'),
(404, 304, 'Jinendra', 2147483647, 'Bandung'),
(405, 305, 'Ayu Cantika', 2147483647, 'Surabaya');

-- --------------------------------------------------------

--
-- Struktur dari tabel `kategori`
--

CREATE TABLE `kategori` (
  `id_kategori` int(11) NOT NULL,
  `id_buku` int(11) NOT NULL,
  `jenis_kategori` varchar(50) DEFAULT NULL,
  `deskripsi` varchar(50) DEFAULT NULL,
  `tanggal` date DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `kategori`
--

INSERT INTO `kategori` (`id_kategori`, `id_buku`, `jenis_kategori`, `deskripsi`, `tanggal`) VALUES
(201, 101, 'Novel', 'Best Selling', '2022-07-05'),
(202, 102, 'Novel', 'Best Selling', '2022-07-05'),
(203, 103, 'Novel', 'Best Selling', '2022-07-05'),
(204, 104, 'Novel', 'Best Selling', '2022-07-05'),
(205, 105, 'Novel', 'Best Selling', '2022-07-05');

-- --------------------------------------------------------

--
-- Struktur dari tabel `keys`
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
-- Dumping data untuk tabel `keys`
--

INSERT INTO `keys` (`id`, `user_id`, `key`, `level`, `ignore_limits`, `is_private_key`, `ip_addresses`, `date_created`) VALUES
(1, 0, 'hasna', 1, 0, 0, NULL, 1),
(2, 0, 'dhanti', 1, 0, 0, NULL, 1);

-- --------------------------------------------------------

--
-- Struktur dari tabel `limits`
--

CREATE TABLE `limits` (
  `id` int(11) NOT NULL,
  `uri` varchar(255) NOT NULL,
  `count` int(10) NOT NULL,
  `hour_started` int(11) NOT NULL,
  `api_key` varchar(40) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Struktur dari tabel `pembeli`
--

CREATE TABLE `pembeli` (
  `id_pembeli` int(11) NOT NULL,
  `nama_pembeli` varchar(50) DEFAULT NULL,
  `no_telpon` int(15) DEFAULT NULL,
  `alamat` varchar(50) DEFAULT NULL,
  `email` varchar(50) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `pembeli`
--

INSERT INTO `pembeli` (`id_pembeli`, `nama_pembeli`, `no_telpon`, `alamat`, `email`) VALUES
(501, 'Davin', 821000899, 'Bandung', 'davin@gmmail.com'),
(502, 'Clara', 821000823, 'Bandung', 'clara@gmmail.com'),
(503, 'Dara', 821000814, 'Bandung', 'dara@gmmail.com'),
(504, 'Renata', 821000867, 'Bandung', 'renata@gmmail.com'),
(505, 'Asep', 821000835, 'Bandung', 'asep@gmmail.com');

-- --------------------------------------------------------

--
-- Struktur dari tabel `penjualan`
--

CREATE TABLE `penjualan` (
  `id_penjualan` int(11) NOT NULL,
  `id_transaksi` int(11) NOT NULL,
  `jumlah_terjual` int(50) DEFAULT NULL,
  `pemasukan` int(50) DEFAULT NULL,
  `tanggal` date DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `penjualan`
--

INSERT INTO `penjualan` (`id_penjualan`, `id_transaksi`, `jumlah_terjual`, `pemasukan`, `tanggal`) VALUES
(701, 601, 5, 500000, '2022-09-07'),
(702, 602, 5, 500000, '2022-10-07'),
(703, 603, 5, 500000, '2022-11-07'),
(704, 604, 5, 500000, '2022-12-07'),
(705, 605, 5, 500000, '2023-01-07');

-- --------------------------------------------------------

--
-- Struktur dari tabel `transaksi`
--

CREATE TABLE `transaksi` (
  `id_transaksi` int(11) NOT NULL,
  `id_buku` int(11) NOT NULL,
  `id_kasir` int(11) NOT NULL,
  `id_pembeli` int(11) NOT NULL,
  `jumlah_buku` int(15) DEFAULT NULL,
  `total` int(15) DEFAULT NULL,
  `tanggal` date DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `transaksi`
--

INSERT INTO `transaksi` (`id_transaksi`, `id_buku`, `id_kasir`, `id_pembeli`, `jumlah_buku`, `total`, `tanggal`) VALUES
(601, 101, 401, 501, 1, 100000, '2022-09-01'),
(602, 102, 402, 502, 1, 100000, '2022-09-01'),
(603, 103, 403, 503, 1, 100000, '2022-09-01'),
(604, 104, 404, 504, 1, 100000, '2022-09-01'),
(605, 105, 405, 505, 1, 100000, '2022-09-01');

-- --------------------------------------------------------

--
-- Struktur dari tabel `users`
--

CREATE TABLE `users` (
  `id_users` int(11) NOT NULL,
  `username` varchar(50) DEFAULT NULL,
  `password` varchar(15) DEFAULT NULL,
  `status` varchar(50) DEFAULT NULL,
  `level` int(3) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `users`
--

INSERT INTO `users` (`id_users`, `username`, `password`, `status`, `level`) VALUES
(301, 'nurtrira', '123', 'aktif', 1),
(302, 'dani', '123', 'aktif', 2),
(303, 'hasna', '123', 'aktif', 2),
(304, 'angel', '123', 'aktif', 2),
(305, 'ical', '123', 'aktif', 2);

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `buku`
--
ALTER TABLE `buku`
  ADD PRIMARY KEY (`id_buku`);

--
-- Indeks untuk tabel `kasir`
--
ALTER TABLE `kasir`
  ADD PRIMARY KEY (`id_kasir`),
  ADD KEY `id_users` (`id_users`);

--
-- Indeks untuk tabel `kategori`
--
ALTER TABLE `kategori`
  ADD PRIMARY KEY (`id_kategori`),
  ADD KEY `id_buku` (`id_buku`);

--
-- Indeks untuk tabel `keys`
--
ALTER TABLE `keys`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `limits`
--
ALTER TABLE `limits`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `pembeli`
--
ALTER TABLE `pembeli`
  ADD PRIMARY KEY (`id_pembeli`);

--
-- Indeks untuk tabel `penjualan`
--
ALTER TABLE `penjualan`
  ADD PRIMARY KEY (`id_penjualan`),
  ADD UNIQUE KEY `id_transaksi` (`id_transaksi`);

--
-- Indeks untuk tabel `transaksi`
--
ALTER TABLE `transaksi`
  ADD PRIMARY KEY (`id_transaksi`),
  ADD KEY `id_buku` (`id_buku`),
  ADD KEY `id_kasir` (`id_kasir`),
  ADD KEY `id_pembeli` (`id_pembeli`);

--
-- Indeks untuk tabel `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id_users`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `keys`
--
ALTER TABLE `keys`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT untuk tabel `limits`
--
ALTER TABLE `limits`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- Ketidakleluasaan untuk tabel pelimpahan (Dumped Tables)
--

--
-- Ketidakleluasaan untuk tabel `kasir`
--
ALTER TABLE `kasir`
  ADD CONSTRAINT `kasir_ibfk_1` FOREIGN KEY (`id_users`) REFERENCES `users` (`id_users`);

--
-- Ketidakleluasaan untuk tabel `kategori`
--
ALTER TABLE `kategori`
  ADD CONSTRAINT `kategori_ibfk_1` FOREIGN KEY (`id_buku`) REFERENCES `buku` (`id_buku`);

--
-- Ketidakleluasaan untuk tabel `penjualan`
--
ALTER TABLE `penjualan`
  ADD CONSTRAINT `penjualan_ibfk_1` FOREIGN KEY (`id_transaksi`) REFERENCES `transaksi` (`id_transaksi`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Ketidakleluasaan untuk tabel `transaksi`
--
ALTER TABLE `transaksi`
  ADD CONSTRAINT `transaksi_ibfk_1` FOREIGN KEY (`id_buku`) REFERENCES `buku` (`id_buku`),
  ADD CONSTRAINT `transaksi_ibfk_2` FOREIGN KEY (`id_kasir`) REFERENCES `kasir` (`id_kasir`),
  ADD CONSTRAINT `transaksi_ibfk_3` FOREIGN KEY (`id_pembeli`) REFERENCES `pembeli` (`id_pembeli`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
