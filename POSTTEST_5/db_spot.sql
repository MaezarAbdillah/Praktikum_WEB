-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 20 Okt 2022 pada 15.51
-- Versi server: 10.4.25-MariaDB
-- Versi PHP: 8.1.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `db_spot`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `lokasi`
--

CREATE TABLE `lokasi` (
  `id` int(11) NOT NULL,
  `nama` varchar(70) NOT NULL,
  `tiket` varchar(50) NOT NULL,
  `alamat` varchar(150) NOT NULL,
  `link` varchar(150) NOT NULL,
  `deskripsi` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `lokasi`
--

INSERT INTO `lokasi` (`id`, `nama`, `tiket`, `alamat`, `link`, `deskripsi`) VALUES
(1, 'Masjid Islamic Center', 'Gratis', 'Jl. Slamet Riyadi No.Samping, Tlk. Lerong Ulu, Kec. Sungai Kunjang, Kota Samarinda, Kalimantan Timur 75243', 'https://goo.gl/maps/MaCx8SakiWK7DF7Z9', 'Masjid Islamic\r\nCenter Samarinda atau biasa disingkat MICS             adalah masjid terbesar kedua di Indonesia setelah Masjid Istiqlal,           Jakarta.'),
(5, 'Desa Budaya Pampang', 'Gratis', 'Jl. Wisata Budaya Pampang, No.32, RT.03, Kelurahan Budaya Pampang, Kec Samarinda Utara, Arah Samarinda-Bontang, 5 KM dari jalan raya, Sebelum Bandara ', 'https://goo.gl/maps/dhwWH2HKqkPpbFvd7', 'Tempat wisata budaya dayak');

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `lokasi`
--
ALTER TABLE `lokasi`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `lokasi`
--
ALTER TABLE `lokasi`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
