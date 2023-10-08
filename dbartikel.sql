-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 08 Okt 2023 pada 19.15
-- Versi server: 10.4.28-MariaDB
-- Versi PHP: 8.0.28

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `dbartikel`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `data_admin`
--

CREATE TABLE `data_admin` (
  `username` varchar(100) NOT NULL,
  `password` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data untuk tabel `data_admin`
--

INSERT INTO `data_admin` (`username`, `password`) VALUES
('madi', 'Killerbee21'),
('unggar', '278f5d3942f66dd2aefbd2273a798712');

-- --------------------------------------------------------

--
-- Struktur dari tabel `data_artikel`
--

CREATE TABLE `data_artikel` (
  `judul_artikel` varchar(100) NOT NULL,
  `isi_artikel` varchar(100) NOT NULL,
  `thumbnail_artikel` varchar(100) NOT NULL,
  `tag_artikel` varchar(100) NOT NULL,
  `kategori_artikel` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data untuk tabel `data_artikel`
--

INSERT INTO `data_artikel` (`judul_artikel`, `isi_artikel`, `thumbnail_artikel`, `tag_artikel`, `kategori_artikel`) VALUES
('Sistem Keamanan Sepeda Motor Menggunakan Microcontroller Esp 32', 'Tujuan pembuatan alat ini adalah untuk menghasilkan perangkat keras (hardware) dan perangkat lunak (', '', '#Sistemkeamanan', 'IOT'),
('Sistem Keamanan Sepeda Motor Dengan Microcontroller Esp 32', 'Tujuan pembuatan alat ini adalah untuk menghasilkan perangkat keras (hardware) dan perangkat lunak (', '', '#Sistemkeamanan', 'IOT'),
('Sistem Keamanan Berbasis OIT', 'sistem keamanan sepeda motor ', '', '#Sistemkeamanan', 'IOT');

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `data_admin`
--
ALTER TABLE `data_admin`
  ADD PRIMARY KEY (`username`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
