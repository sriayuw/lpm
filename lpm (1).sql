-- phpMyAdmin SQL Dump
-- version 4.9.0.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 04 Apr 2021 pada 23.16
-- Versi server: 10.3.16-MariaDB
-- Versi PHP: 7.1.30

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `lpm`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `laporan_pengaduan`
--

CREATE TABLE `laporan_pengaduan` (
  `id` int(20) NOT NULL,
  `tanggal_pengaduan` date NOT NULL,
  `nik` int(16) NOT NULL,
  `judul_laporan` varchar(100) NOT NULL,
  `isi_laporan` text NOT NULL,
  `foto` varchar(30) NOT NULL,
  `status` enum('Diterima','Diproses','Selesai','') NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Struktur dari tabel `masyarakat`
--

CREATE TABLE `masyarakat` (
  `nik` int(16) NOT NULL,
  `nama` varchar(35) NOT NULL,
  `username` varchar(25) NOT NULL,
  `password` varchar(100) NOT NULL,
  `telp` varchar(13) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Struktur dari tabel `petugas`
--

CREATE TABLE `petugas` (
  `id` int(20) NOT NULL,
  `nama_petugas` varchar(50) NOT NULL,
  `username` varchar(50) NOT NULL,
  `password` varchar(100) NOT NULL,
  `telp` varchar(20) NOT NULL,
  `level` enum('admin','petugas') NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `petugas`
--

INSERT INTO `petugas` (`id`, `nama_petugas`, `username`, `password`, `telp`, `level`) VALUES
(1, 'yayat', 'yayat', '$2y$10$N7B.o9PhwHm5Fg0eZCbg0eshG.pvsmPm/vx0Jk2.9jikWGOPrJRRy', '083173071815', 'petugas'),
(2, 'syakeel', 'syakel', '$2y$10$E40FNBl8Qm7zGZeEInPFWOcY7vPGGF9ePAKrpyAe1ayX9aKm8Ssgm', '089691633797', 'admin'),
(3, 'ajang', 'ajang', '$2y$10$0lKyy.4I8GGlaXLAsToR0.bk25IQWzmKwONT6oQHv4qoeI6HuO.Jm', '082127015766', 'petugas'),
(4, 'jajang subarda', 'subarda', '$2y$10$O0ODI22KkpAOyD8AL9OjyeKp8Pi.jKJCrlMO4f/4GKRVztm0imbbq', '083173071815', 'petugas'),
(5, 'dolore est veniam ', 'sena', '$2y$10$FFfzQs1ri6flJXQ8SygqCeI1DJAGafpdG9vq.3YZJafmn5gLDfnr6', '082127015766', 'admin');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tanggapan`
--

CREATE TABLE `tanggapan` (
  `id` int(100) NOT NULL,
  `pengaduan_id` int(100) NOT NULL,
  `tanggal_tanggapan` date NOT NULL,
  `tanggapan` varchar(200) NOT NULL,
  `petugas_id` int(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `tanggapan`
--

INSERT INTO `tanggapan` (`id`, `pengaduan_id`, `tanggal_tanggapan`, `tanggapan`, `petugas_id`) VALUES
(1, 4, '2021-03-03', '<p>terimakasih atas laporan nya</p>\r\n\r\n<p>&nbsp;</p>\r\n', 4),
(2, 4, '2021-03-03', '<p>Tim kami sudah menyelesaikan laporan tersebut terimakasih</p>\r\n', 4);

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `laporan_pengaduan`
--
ALTER TABLE `laporan_pengaduan`
  ADD PRIMARY KEY (`id`),
  ADD KEY `nik` (`nik`);

--
-- Indeks untuk tabel `masyarakat`
--
ALTER TABLE `masyarakat`
  ADD PRIMARY KEY (`nik`),
  ADD KEY `nik` (`nik`);

--
-- Indeks untuk tabel `petugas`
--
ALTER TABLE `petugas`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `tanggapan`
--
ALTER TABLE `tanggapan`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `laporan_pengaduan`
--
ALTER TABLE `laporan_pengaduan`
  MODIFY `id` int(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT untuk tabel `petugas`
--
ALTER TABLE `petugas`
  MODIFY `id` int(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT untuk tabel `tanggapan`
--
ALTER TABLE `tanggapan`
  MODIFY `id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- Ketidakleluasaan untuk tabel pelimpahan (Dumped Tables)
--

--
-- Ketidakleluasaan untuk tabel `laporan_pengaduan`
--
ALTER TABLE `laporan_pengaduan`
  ADD CONSTRAINT `laporan_pengaduan_ibfk_1` FOREIGN KEY (`nik`) REFERENCES `masyarakat` (`nik`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Ketidakleluasaan untuk tabel `masyarakat`
--
ALTER TABLE `masyarakat`
  ADD CONSTRAINT `masyarakat_ibfk_1` FOREIGN KEY (`nik`) REFERENCES `laporan_pengaduan` (`nik`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
