-- phpMyAdmin SQL Dump
-- version 5.0.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 13 Apr 2022 pada 15.04
-- Versi server: 10.4.17-MariaDB
-- Versi PHP: 8.0.2

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `rumahsakit`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `rumahsakit`
--

CREATE TABLE `rumahsakit` (
  `kd` int(10) NOT NULL,
  `nama` varchar(255) NOT NULL,
  `tgl` varchar(255) NOT NULL,
  `tl` varchar(300) NOT NULL,
  `kelamin` varchar(255) NOT NULL,
  `alamat` varchar(255) NOT NULL,
  `usia` int(2) NOT NULL,
  `penyakit` varchar(255) NOT NULL,
  `rincian` varchar(300) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `rumahsakit`
--

INSERT INTO `rumahsakit` (`kd`, `nama`, `tgl`, `tl`, `kelamin`, `alamat`, `usia`, `penyakit`, `rincian`) VALUES
(0, '', '', '', '', '', 0, '', '');

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `rumahsakit`
--
ALTER TABLE `rumahsakit`
  ADD PRIMARY KEY (`kd`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
