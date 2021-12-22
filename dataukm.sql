-- phpMyAdmin SQL Dump
-- version 5.0.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 25 Nov 2021 pada 08.45
-- Versi server: 10.4.17-MariaDB
-- Versi PHP: 8.0.0

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `dataukm`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `mahasiswaukm`
--

CREATE TABLE `mahasiswaukm` (
  `id` int(3) NOT NULL,
  `nama` varchar(30) NOT NULL,
  `email` varchar(35) NOT NULL,
  `prodi` varchar(30) NOT NULL,
  `jeniskelamin` varchar(15) NOT NULL,
  `provinsi` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `mahasiswaukm`
--

INSERT INTO `mahasiswaukm` (`id`, `nama`, `email`, `prodi`, `jeniskelamin`, `provinsi`) VALUES
(0, 'Habib Iroqi', 'khabib@sport.com', 'Kelautan', 'Laki-laki', 'Jawa Tengah');

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `mahasiswaukm`
--
ALTER TABLE `mahasiswaukm`
  ADD PRIMARY KEY (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
