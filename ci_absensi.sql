-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 26 Agu 2023 pada 11.54
-- Versi server: 10.4.27-MariaDB
-- Versi PHP: 7.4.33

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `ci_absensi`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `absen`
--

CREATE TABLE `absen` (
  `id_absen` int(11) NOT NULL,
  `nisn` char(100) NOT NULL,
  `tanggal` varchar(100) NOT NULL,
  `bulan` varchar(100) NOT NULL,
  `tahun` varchar(100) NOT NULL,
  `status` int(1) NOT NULL,
  `keterangan` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data untuk tabel `absen`
--

INSERT INTO `absen` (`id_absen`, `nisn`, `tanggal`, `bulan`, `tahun`, `status`, `keterangan`) VALUES
(1, '1234565432', '01', '07', '2023', 2, '-'),
(58, '1241241241123', '01', '07', '2023', 2, 'Pulang Ke ROHUL');

-- --------------------------------------------------------

--
-- Struktur dari tabel `guru`
--

CREATE TABLE `guru` (
  `nktam` varchar(111) NOT NULL,
  `nip` varchar(111) NOT NULL,
  `nama` varchar(111) NOT NULL,
  `id_kelas` varchar(1) NOT NULL,
  `date_created` time(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data untuk tabel `guru`
--

INSERT INTO `guru` (`nktam`, `nip`, `nama`, `id_kelas`, `date_created`) VALUES
('1122334455', '12345678', 'Muhammad Restu Prayudha', '3', '02:15:08.0');

-- --------------------------------------------------------

--
-- Struktur dari tabel `history`
--

CREATE TABLE `history` (
  `id_history` int(11) NOT NULL,
  `id_user` int(11) NOT NULL,
  `time_update` varchar(50) NOT NULL,
  `status` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Struktur dari tabel `kelas`
--

CREATE TABLE `kelas` (
  `id_kelas` int(11) NOT NULL,
  `kelas` int(11) NOT NULL,
  `nama_jurusan` varchar(100) NOT NULL,
  `singkatan_jurusan` varchar(100) NOT NULL,
  `nama_kelas` varchar(150) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data untuk tabel `kelas`
--

INSERT INTO `kelas` (`id_kelas`, `kelas`, `nama_jurusan`, `singkatan_jurusan`, `nama_kelas`) VALUES
(1, 11, 'Rekayasa Perangkat Lunak', 'RPL', '11 RPL'),
(3, 12, 'Bisnis Daring & Pemasaran', 'BDP', '12 BDP 1');

-- --------------------------------------------------------

--
-- Struktur dari tabel `log_aktifitas`
--

CREATE TABLE `log_aktifitas` (
  `log_user` int(11) NOT NULL,
  `log_ip` varchar(20) NOT NULL,
  `log_time` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data untuk tabel `log_aktifitas`
--

INSERT INTO `log_aktifitas` (`log_user`, `log_ip`, `log_time`) VALUES
(1, '::1', 1685644345),
(1, '::1', 1685687586),
(1, '::1', 1685728618),
(1, '::1', 1686537906),
(1, '::1', 1686621726),
(1, '::1', 1686687059),
(1, '::1', 1686783429),
(1, '::1', 1686783650),
(1, '::1', 1686881477),
(1, '::1', 1687541760),
(1, '::1', 1687575993),
(1, '::1', 1687629077),
(1, '::1', 1687758821),
(1, '::1', 1687807962),
(1, '::1', 1687889074),
(1, '::1', 1687893849),
(1, '::1', 1688208252),
(1, '::1', 1691394647),
(1, '::1', 1691774078),
(1, '::1', 1692085771),
(1, '::1', 1692464246);

-- --------------------------------------------------------

--
-- Struktur dari tabel `siswa`
--

CREATE TABLE `siswa` (
  `id` varchar(20) NOT NULL,
  `id_kelas` int(11) NOT NULL,
  `nisn` char(13) NOT NULL,
  `nis` char(8) NOT NULL,
  `nama` varchar(200) NOT NULL,
  `tetala` text NOT NULL,
  `jenis_kelamin` int(11) NOT NULL,
  `alamat` text NOT NULL,
  `agama` varchar(50) NOT NULL,
  `golongan_darah` varchar(10) NOT NULL,
  `no_telp_wali_murid` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data untuk tabel `siswa`
--

INSERT INTO `siswa` (`id`, `id_kelas`, `nisn`, `nis`, `nama`, `tetala`, `jenis_kelamin`, `alamat`, `agama`, `golongan_darah`, `no_telp_wali_murid`) VALUES
('81768c48', 1, '1234565432', '98564678', 'Zidan Rafif Pratama', 'Lumajang 17-april-2005', 2, 'Pekanbaru , Riau', 'kristen', 'A', '085355595593'),
('57A3C02E', 3, '1241241241123', '41231253', 'Muhammad Restu Prayudha', 'Bangkinang 29-11-2004', 1, 'Jl.Harapan Raya, Pekanbaru', 'islam', 'O', '085355595595');

-- --------------------------------------------------------

--
-- Struktur dari tabel `users`
--

CREATE TABLE `users` (
  `id_user` int(11) NOT NULL,
  `nktam` varchar(111) NOT NULL,
  `username` varchar(100) NOT NULL,
  `password` varchar(250) NOT NULL,
  `date_created` datetime NOT NULL,
  `role_id` int(1) NOT NULL,
  `is_active` int(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data untuk tabel `users`
--

INSERT INTO `users` (`id_user`, `nktam`, `username`, `password`, `date_created`, `role_id`, `is_active`) VALUES
(1, '1122334455', 'admin', '$2y$10$gxIUugh1yDpcGuNhkA9iq.slmxj1oedcuPnyRZAJLJSANnTktsIfK', '2023-06-01 19:58:44', 1, 1);

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `absen`
--
ALTER TABLE `absen`
  ADD PRIMARY KEY (`id_absen`);

--
-- Indeks untuk tabel `guru`
--
ALTER TABLE `guru`
  ADD PRIMARY KEY (`nktam`);

--
-- Indeks untuk tabel `history`
--
ALTER TABLE `history`
  ADD PRIMARY KEY (`id_history`);

--
-- Indeks untuk tabel `kelas`
--
ALTER TABLE `kelas`
  ADD PRIMARY KEY (`id_kelas`);

--
-- Indeks untuk tabel `siswa`
--
ALTER TABLE `siswa`
  ADD PRIMARY KEY (`nisn`),
  ADD UNIQUE KEY `id_2` (`id`),
  ADD KEY `id` (`id`),
  ADD KEY `id_3` (`id`),
  ADD KEY `nis` (`nis`);

--
-- Indeks untuk tabel `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id_user`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `absen`
--
ALTER TABLE `absen`
  MODIFY `id_absen` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=59;

--
-- AUTO_INCREMENT untuk tabel `history`
--
ALTER TABLE `history`
  MODIFY `id_history` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT untuk tabel `kelas`
--
ALTER TABLE `kelas`
  MODIFY `id_kelas` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT untuk tabel `users`
--
ALTER TABLE `users`
  MODIFY `id_user` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
