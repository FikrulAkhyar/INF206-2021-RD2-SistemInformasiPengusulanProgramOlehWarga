-- phpMyAdmin SQL Dump
-- version 5.1.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 28 Bulan Mei 2021 pada 21.52
-- Versi server: 10.4.18-MariaDB
-- Versi PHP: 7.3.27

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `rd2`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `program`
--

CREATE TABLE `program` (
  `id` int(11) NOT NULL,
  `nama` varchar(128) NOT NULL,
  `keterangan` text NOT NULL,
  `image` varchar(128) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `program`
--

INSERT INTO `program` (`id`, `nama`, `keterangan`, `image`) VALUES
(1, 'Posyandu', 'Program ini bertujuan untuk menunjang tercapainya masyarakat sehat sejahtera. Program tersebut dilaksanakan dua minggu sekali dan tanpa dipungut biaya sepeserpun.', 'posyandu.png'),
(2, 'Sport Club', 'Program ini bertujuan untuk meningkatkan minat dan bakat warga dalam berolahraga. Program tersebut dilaksanakan seminggu sekali di lapangan desa Batoh', 'sport.png'),
(3, 'Gotong Royong', 'Program ini bertujuan untuk dapat menciptakan lingkungan desa yang bersih dan nyaman. Program tersebut dilaksanakan dua minggu sekali', 'gotongroyong.png');

-- --------------------------------------------------------

--
-- Struktur dari tabel `rating_info`
--

CREATE TABLE `rating_info` (
  `user_id` int(11) NOT NULL,
  `post_id` int(11) NOT NULL,
  `rating_action` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `rating_info`
--

INSERT INTO `rating_info` (`user_id`, `post_id`, `rating_action`) VALUES
(13, 14, 'like'),
(13, 15, 'like'),
(13, 16, 'like'),
(13, 17, 'like'),
(13, 19, 'like'),
(13, 20, 'like'),
(14, 13, 'like'),
(14, 14, 'like'),
(14, 15, 'like'),
(14, 16, 'like'),
(14, 17, 'like'),
(14, 19, 'like'),
(14, 20, 'like');

-- --------------------------------------------------------

--
-- Struktur dari tabel `status`
--

CREATE TABLE `status` (
  `id` int(11) NOT NULL,
  `status` varchar(128) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `status`
--

INSERT INTO `status` (`id`, `status`) VALUES
(1, 'admin'),
(2, 'warga');

-- --------------------------------------------------------

--
-- Struktur dari tabel `user`
--

CREATE TABLE `user` (
  `id` int(11) NOT NULL,
  `nik` varchar(128) NOT NULL,
  `nama` varchar(128) NOT NULL,
  `email` varchar(128) NOT NULL,
  `image` varchar(128) NOT NULL,
  `password` varchar(128) NOT NULL,
  `no_hp` varchar(128) NOT NULL,
  `id_status` int(11) NOT NULL,
  `date_created` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `user`
--

INSERT INTO `user` (`id`, `nik`, `nama`, `email`, `image`, `password`, `no_hp`, `id_status`, `date_created`) VALUES
(13, '12345', 'Fikrul Akhyar', 'fikrul@gmail.com', 'default.jpg', '$2y$10$6LPXXWFQVgdrNcVmQLf59.oGTKUSqOJQOZKqUCMtjUe5bZ3zAe3ky', '08123456789', 1, '2021-05-19 18:35:54'),
(14, '123456', 'Unkown', 'uknown@gmail.com', 'default.jpg', '$2y$10$7Bx3yZFb8uB.RE2rXFVLGusanA8.BOYEOcuFW5mNMzSuQKZbWOPsq', '08615236512', 2, '0000-00-00 00:00:00');

-- --------------------------------------------------------

--
-- Struktur dari tabel `usulan`
--

CREATE TABLE `usulan` (
  `id` int(11) NOT NULL,
  `id_user` int(11) NOT NULL,
  `judul` varchar(128) NOT NULL,
  `deskripsi` text NOT NULL,
  `jumlah_vote` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `usulan`
--

INSERT INTO `usulan` (`id`, `id_user`, `judul`, `deskripsi`, `jumlah_vote`) VALUES
(14, 13, 'Program coba', 'Program coba adalah sebuah program mencoba coba coba dan coba hehe', 2),
(15, 14, 'Program Mandiri', 'ada ada aja', 2),
(17, 14, 'Program keberishan', 'Porgoram is a hag is jam privyet sog dam juseong', 2),
(19, 14, 'Program Hidup Sehat', 'hahahhaha', 2),
(20, 14, 'hahahahhaha', 'hahahahhaa', 2);

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `program`
--
ALTER TABLE `program`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `rating_info`
--
ALTER TABLE `rating_info`
  ADD UNIQUE KEY `UC_rating_info` (`user_id`,`post_id`);

--
-- Indeks untuk tabel `status`
--
ALTER TABLE `status`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `usulan`
--
ALTER TABLE `usulan`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `program`
--
ALTER TABLE `program`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT untuk tabel `user`
--
ALTER TABLE `user`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT untuk tabel `usulan`
--
ALTER TABLE `usulan`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
