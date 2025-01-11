-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 11 Jan 2025 pada 17.13
-- Versi server: 10.4.32-MariaDB
-- Versi PHP: 8.2.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `db_kuliner`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `tbl_makanan`
--

CREATE TABLE `tbl_makanan` (
  `id_makanan` int(11) NOT NULL,
  `nama_makanan` varchar(100) NOT NULL,
  `daerah_makanan` varchar(100) NOT NULL,
  `foto_makanan` blob DEFAULT NULL,
  `Keterangan` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data untuk tabel `tbl_makanan`
--

INSERT INTO `tbl_makanan` (`id_makanan`, `nama_makanan`, `daerah_makanan`, `foto_makanan`, `Keterangan`) VALUES
(1, 'Gudeg', 'Yogyakarta', NULL, NULL),
(2, 'Sate Maranggi', 'Purwakarta', NULL, NULL),
(3, 'Ayam Taliwang', 'Nusa Tenggara Barat', NULL, NULL),
(4, 'Rendang', 'Sumatera Barat', NULL, NULL),
(5, 'Gudeg', 'Yogyakarta', NULL, NULL),
(6, 'Pempek', 'Palembang, Sumatera Selatan', NULL, NULL),
(7, 'Sate Ayam', 'Madura, Jawa Timur', NULL, NULL),
(8, 'Nasi Liwet', 'Solo, Jawa Tengah', NULL, NULL),
(9, 'Ayam Betutu', 'Bali', NULL, NULL),
(10, 'Gulai Ikan Patin', 'Riau', NULL, NULL),
(11, 'Soto Betawi', 'Jakarta', NULL, NULL),
(12, 'Tahu Gejrot', 'Cirebon, Jawa Barat', NULL, NULL),
(13, 'Kerak Telor', 'Jakarta', NULL, NULL),
(14, 'Papeda', 'Papua', NULL, NULL),
(15, 'Bika Ambon', 'Medan, Sumatera Utara', NULL, NULL),
(16, 'Ikan Asar', 'Maluku', NULL, NULL),
(17, 'Sop Konro', 'Makassar, Sulawesi Selatan', NULL, NULL),
(18, 'Tinutuan (Bubur Manado)', 'Manado, Sulawesi Utara', NULL, NULL),
(19, 'Nasi Kuning', 'Banjarmasin, Kalimantan Selatan', NULL, NULL),
(20, 'Lumpia', 'Semarang, Jawa Tengah', NULL, NULL),
(21, 'Soto Lamongan', 'Lamongan, Jawa Timur', NULL, NULL),
(22, 'Rawon', 'Surabaya, Jawa Timur', NULL, NULL),
(23, 'Ayam Penyet', 'Surabaya, Jawa Timur', NULL, NULL),
(24, 'Seruit', 'Lampung', NULL, NULL),
(25, 'Sate Lilit', 'Bali', NULL, NULL),
(26, 'Gohu Ikan', 'Ternate, Maluku Utara', NULL, NULL),
(27, 'Binte Biluhuta (Sup Jagung)', 'Gorontalo', NULL, NULL),
(28, 'Sate Maranggi', 'Purwakarta, Jawa Barat', NULL, NULL),
(29, 'Nasi Jinggo', 'Bali', NULL, NULL),
(30, 'Mie Aceh', 'Aceh', NULL, NULL),
(31, 'Sate Padang', 'Sumatera Barat', NULL, NULL),
(32, 'Mie Kocok Bandung', 'Bandung, Jawa Barat', NULL, NULL),
(33, 'Gado-Gado', 'Jakarta', NULL, NULL),
(34, 'Es Pallu Butung', 'Makassar, Sulawesi Selatan', NULL, NULL),
(35, 'Siomay Bandung', 'Bandung, Jawa Barat', NULL, NULL),
(36, 'Coto Makassar', 'Makassar, Sulawesi Selatan', NULL, NULL),
(37, 'Soto Kudus', 'Kudus, Jawa Tengah', NULL, NULL),
(38, 'Opor Ayam', 'Yogyakarta', NULL, NULL),
(39, 'Sate Buntel', 'Solo, Jawa Tengah', NULL, NULL),
(40, 'Plecing Kangkung', 'Lombok, Nusa Tenggara Barat', NULL, NULL),
(41, 'Nasi Uduk', 'Jakarta', NULL, NULL),
(42, 'Sate Klatak', 'Yogyakarta', NULL, NULL),
(43, 'Gurame Bakar', 'Jawa Barat', NULL, NULL),
(44, 'Sop Buntut', 'Jakarta', NULL, NULL),
(45, 'Ayam Goreng Kalasan', 'Yogyakarta', NULL, NULL),
(46, 'Kue Cubit', 'Jakarta', NULL, NULL),
(47, 'Serabi', 'Bandung, Jawa Barat', NULL, NULL),
(48, 'Kue Pancong', 'Jakarta', NULL, NULL),
(49, 'Bakpia Pathok', 'Yogyakarta', NULL, NULL),
(50, 'Kue Lapis Legit', 'Jakarta', NULL, NULL);

-- --------------------------------------------------------

--
-- Struktur dari tabel `tbl_minuman`
--

CREATE TABLE `tbl_minuman` (
  `id_minuman` int(11) NOT NULL,
  `nama_minuman` varchar(100) NOT NULL,
  `daerah_minuman` varchar(100) NOT NULL,
  `foto_minuman` blob DEFAULT NULL,
  `Keterangan` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data untuk tabel `tbl_minuman`
--

INSERT INTO `tbl_minuman` (`id_minuman`, `nama_minuman`, `daerah_minuman`, `foto_minuman`, `Keterangan`) VALUES
(2, 'Arak', 'Bali', '', ''),
(3, 'Es Cendol', 'Bandung, Jawa Barat', NULL, NULL),
(4, 'Wedang Ronde', 'Yogyakarta', NULL, NULL),
(5, 'Bajigur', 'Jawa Barat', NULL, NULL),
(6, 'Sekoteng', 'Jawa Tengah', NULL, NULL),
(7, 'Es Dawet Ayu', 'Banjarnegara, Jawa Tengah', NULL, NULL),
(8, 'Wedang Uwuh', 'Yogyakarta', NULL, NULL),
(9, 'Bandrek', 'Jawa Barat', NULL, NULL),
(10, 'Es Doger', 'Jawa Barat', NULL, NULL),
(11, 'Es Teler', 'Jakarta', NULL, NULL),
(12, 'Es Goyobod', 'Jawa Barat', NULL, NULL),
(13, 'Es Oyen', 'Bandung, Jawa Barat', NULL, NULL),
(14, 'Es Selendang Mayang', 'Betawi, Jakarta', NULL, NULL),
(15, 'Kopi Joss', 'Yogyakarta', NULL, NULL),
(16, 'Kopi Tubruk', 'Jawa', NULL, NULL),
(17, 'Teh Talua', 'Sumatera Barat', NULL, NULL),
(18, 'Es Timun Suri', 'Betawi, Jakarta', NULL, NULL),
(19, 'Es Sarang Burung', 'Sumatera Utara', NULL, NULL),
(20, 'Es Pisang Ijo', 'Makassar, Sulawesi Selatan', NULL, NULL),
(21, 'Es Pallu Butung', 'Makassar, Sulawesi Selatan', NULL, NULL),
(22, 'Sarabba', 'Makassar, Sulawesi Selatan', NULL, NULL),
(23, 'Air Mata Pengantin', 'Riau', NULL, NULL),
(24, 'Es Tape', 'Sunda, Jawa Barat', NULL, NULL),
(25, 'Es Kacang Merah', 'Palembang, Sumatera Selatan', NULL, NULL),
(26, 'Es Lilin', 'Jawa Barat', NULL, NULL),
(27, 'Bir Pletok', 'Betawi, Jakarta', NULL, NULL),
(28, 'Kopi Luwak', 'Sumatera', NULL, NULL),
(29, 'Jamu Beras Kencur', 'Jawa', NULL, NULL),
(30, 'Jamu Kunyit Asam', 'Jawa', NULL, NULL),
(31, 'Es Teh Manis', 'Indonesia', NULL, NULL),
(32, 'Es Campur', 'Indonesia', NULL, NULL),
(33, 'Es Degan', 'Indonesia', NULL, NULL),
(34, 'Es Alpukat', 'Indonesia', NULL, NULL),
(35, 'Lahang', 'Jawa Barat', NULL, NULL),
(36, 'Teh Poci', 'Tegal, Jawa Tengah', NULL, NULL),
(37, 'Es Kuwut', 'Bali', NULL, NULL),
(38, 'Tuak Manis', 'Sumatera Utara', NULL, NULL),
(39, 'Jus Markisa', 'Sumatera Utara', NULL, NULL),
(40, 'Brem', 'Bali', NULL, NULL),
(41, 'Arak Bali', 'Bali', NULL, NULL),
(42, 'Sopi', 'NTT', NULL, NULL),
(43, 'Moke', 'NTT', NULL, NULL),
(44, 'Es Gempol Pleret', 'Jawa Tengah', NULL, NULL),
(45, 'Es Selasih', 'Bali', NULL, NULL),
(46, 'Es Kolang Kaling', 'Indonesia', NULL, NULL),
(47, 'Kopi Toraja', 'Sulawesi Selatan', NULL, NULL),
(48, 'Wedang Jahe', 'Jawa Tengah', NULL, NULL),
(49, 'Es Lidah Buaya', 'Kalimantan Barat', NULL, NULL),
(50, 'Sari Kacang Hijau', 'Indonesia', NULL, NULL),
(51, 'Jus Jambu', 'Indonesia', NULL, NULL),
(52, 'Jus Mangga', 'Indonesia', NULL, NULL);

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `tbl_makanan`
--
ALTER TABLE `tbl_makanan`
  ADD PRIMARY KEY (`id_makanan`);

--
-- Indeks untuk tabel `tbl_minuman`
--
ALTER TABLE `tbl_minuman`
  ADD PRIMARY KEY (`id_minuman`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `tbl_makanan`
--
ALTER TABLE `tbl_makanan`
  MODIFY `id_makanan` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=51;

--
-- AUTO_INCREMENT untuk tabel `tbl_minuman`
--
ALTER TABLE `tbl_minuman`
  MODIFY `id_minuman` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=53;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
