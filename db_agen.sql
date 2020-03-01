-- phpMyAdmin SQL Dump
-- version 4.8.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 29 Feb 2020 pada 18.52
-- Versi server: 10.1.37-MariaDB
-- Versi PHP: 7.3.1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `db_agen`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `tbl_agen`
--

CREATE TABLE `tbl_agen` (
  `kode` int(11) NOT NULL,
  `nama` varchar(128) NOT NULL,
  `level` varchar(128) NOT NULL,
  `alamat` varchar(128) NOT NULL,
  `email` varchar(128) NOT NULL,
  `jumlah_p` int(11) NOT NULL,
  `komisi` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `tbl_agen`
--

INSERT INTO `tbl_agen` (`kode`, `nama`, `level`, `alamat`, `email`, `jumlah_p`, `komisi`) VALUES
(4, 'amri', 'I', 'dwd', 'amri@gmail.com', 12, 2000000),
(7, 'Naufal', 'IV', 'Bkt', 'mir@gmail.com', 0, 0),
(2516154, 'Naufal Arife', 'IV', 'Pasaman Barat', 'naufal@gmail.com', 25, 4000000),
(2516161, 'Naufal', 'III', 'Jl. Tan Malaka', 'admin@admin.com', 2, 1800000),
(2516162, 'Heru Firdan Algovari', 'II', 'Bukittinggi', 'heru@gmail.com', 60, 3500000),
(2516163, 'Yassirli Amri', 'III', 'Payakumbuh', 'amri@gmail.com', 25, 3800000),
(2516164, 'Prabowo', 'I', 'BANDA ACEH', 'jok@gmail.com', 70, 3000000),
(2516165, 'Arif Kurniawan', 'II', 'Bawan', 'arif@gmail.com', 10, 2500000);

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `tbl_agen`
--
ALTER TABLE `tbl_agen`
  ADD PRIMARY KEY (`kode`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
