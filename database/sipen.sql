-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: 16 Des 2016 pada 11.49
-- Versi Server: 10.1.16-MariaDB
-- PHP Version: 5.6.24

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `sipen`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `tbl_admin`
--

CREATE TABLE `tbl_admin` (
  `username` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `tbl_admin`
--

INSERT INTO `tbl_admin` (`username`, `password`) VALUES
('123', '123'),
('admin', 'adminweb');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tbl_berita`
--

CREATE TABLE `tbl_berita` (
  `id_berita` int(11) NOT NULL,
  `id_kategori` int(11) NOT NULL,
  `judul` varchar(255) NOT NULL,
  `deskripsi` text NOT NULL,
  `sumber` varchar(255) NOT NULL,
  `gambar` text NOT NULL,
  `tgl_post` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `tbl_berita`
--

INSERT INTO `tbl_berita` (`id_berita`, `id_kategori`, `judul`, `deskripsi`, `sumber`, `gambar`, `tgl_post`) VALUES
(3, 1, 'TEST', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Proin a erat eget erat imperdiet commodo. Nulla at maximus diam, et eleifend sapien. Etiam quam neque, consectetur ultrices nisi at, vestibulum mattis risus. Donec luctus venenatis elit. Donec auctor vel orci et sodales. Suspendisse potenti. Nam convallis, eros ac aliquet ultricies, orci orci convallis neque, at volutpat metus sem in tellus. Curabitur non leo consectetur, aliquam erat vel, tempor ex. In posuere sapien ac massa tincidunt, accumsan porta ipsum malesuada. Aliquam dignissim cursus dolor, ac ultricies quam viverra in. Pellentesque dapibus, quam eu finibus porta, dolor nisi aliquam tortor, nec semper nibh augue sit amet libero. Interdum et malesuada fames ac ante ipsum primis in faucibus. Praesent eu fringilla massa. Nunc quis mauris suscipit, dignissim erat a, ullamcorper neque. ', 'TEST', 'gambar_3.jpg', '2016-12-16'),
(6, 2, 'Test', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Proin a erat eget erat imperdiet commodo. Nulla at maximus diam, et eleifend sapien. Etiam quam neque, consectetur ultrices nisi at, vestibulum mattis risus. Donec luctus venenatis elit. Donec auctor vel orci et sodales. Suspendisse potenti. Nam convallis, eros ac aliquet ultricies, orci orci convallis neque, at volutpat metus sem in tellus. Curabitur non leo consectetur, aliquam erat vel, tempor ex. In posuere sapien ac massa tincidunt, accumsan porta ipsum malesuada. Aliquam dignissim cursus dolor, ac ultricies quam viverra in. Pellentesque dapibus, quam eu finibus porta, dolor nisi aliquam tortor, nec semper nibh augue sit amet libero. Interdum et malesuada fames ac ante ipsum primis in faucibus. Praesent eu fringilla massa. Nunc quis mauris suscipit, dignissim erat a, ullamcorper neque. ', '123', 'gambar_6.jpg', '2016-12-16'),
(7, 1, '123', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Proin a erat eget erat imperdiet commodo. Nulla at maximus diam, et eleifend sapien. Etiam quam neque, consectetur ultrices nisi at, vestibulum mattis risus. Donec luctus venenatis elit. Donec auctor vel orci et sodales. Suspendisse potenti. Nam convallis, eros ac aliquet ultricies, orci orci convallis neque, at volutpat metus sem in tellus. Curabitur non leo consectetur, aliquam erat vel, tempor ex. In posuere sapien ac massa tincidunt, accumsan porta ipsum malesuada. Aliquam dignissim cursus dolor, ac ultricies quam viverra in. Pellentesque dapibus, quam eu finibus porta, dolor nisi aliquam tortor, nec semper nibh augue sit amet libero. Interdum et malesuada fames ac ante ipsum primis in faucibus. Praesent eu fringilla massa. Nunc quis mauris suscipit, dignissim erat a, ullamcorper neque. ', '123', 'gambar_7.jpg', '2016-12-16'),
(8, 3, 'gempa', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Proin a erat eget erat imperdiet commodo. Nulla at maximus diam, et eleifend sapien. Etiam quam neque, consectetur ultrices nisi at, vestibulum mattis risus. Donec luctus venenatis elit. Donec auctor vel orci et sodales. Suspendisse potenti. Nam convallis, eros ac aliquet ultricies, orci orci convallis neque, at volutpat metus sem in tellus. Curabitur non leo consectetur, aliquam erat vel, tempor ex. In posuere sapien ac massa tincidunt, accumsan porta ipsum malesuada. Aliquam dignissim cursus dolor, ac ultricies quam viverra in. Pellentesque dapibus, quam eu finibus porta, dolor nisi aliquam tortor, nec semper nibh augue sit amet libero. Interdum et malesuada fames ac ante ipsum primis in faucibus. Praesent eu fringilla massa. Nunc quis mauris suscipit, dignissim erat a, ullamcorper neque. ', '123', 'gambar_8.jpg', '2016-12-16');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tbl_forum`
--

CREATE TABLE `tbl_forum` (
  `id_forum` int(11) NOT NULL,
  `id_kategori` int(11) NOT NULL,
  `judul` varchar(255) NOT NULL,
  `deskripsi` text NOT NULL,
  `tgl_post` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `tbl_forum`
--

INSERT INTO `tbl_forum` (`id_forum`, `id_kategori`, `judul`, `deskripsi`, `tgl_post`) VALUES
(1, 2, 'BARU', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Proin a erat eget erat imperdiet commodo. Nulla at maximus diam, et eleifend sapien. Etiam quam neque, consectetur ultrices nisi at, vestibulum mattis risus. Donec luctus venenatis elit. Donec auctor vel orci et sodales. Suspendisse potenti. Nam convallis, eros ac aliquet ultricies, orci orci convallis neque, at volutpat metus sem in tellus. Curabitur non leo consectetur, aliquam erat vel, tempor ex. In posuere sapien ac massa tincidunt, accumsan porta ipsum malesuada. Aliquam dignissim cursus dolor, ac ultricies quam viverra in. Pellentesque dapibus, quam eu finibus porta, dolor nisi aliquam tortor, nec semper nibh augue sit amet libero. Interdum et malesuada fames ac ante ipsum primis in faucibus. Praesent eu fringilla massa. Nunc quis mauris suscipit, dignissim erat a, ullamcorper neque. ', '2016-12-16'),
(3, 6, 'asd', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Proin a erat eget erat imperdiet commodo. Nulla at maximus diam, et eleifend sapien. Etiam quam neque, consectetur ultrices nisi at, vestibulum mattis risus. Donec luctus venenatis elit. Donec auctor vel orci et sodales. Suspendisse potenti. Nam convallis, eros ac aliquet ultricies, orci orci convallis neque, at volutpat metus sem in tellus. Curabitur non leo consectetur, aliquam erat vel, tempor ex. In posuere sapien ac massa tincidunt, accumsan porta ipsum malesuada. Aliquam dignissim cursus dolor, ac ultricies quam viverra in. Pellentesque dapibus, quam eu finibus porta, dolor nisi aliquam tortor, nec semper nibh augue sit amet libero. Interdum et malesuada fames ac ante ipsum primis in faucibus. Praesent eu fringilla massa. Nunc quis mauris suscipit, dignissim erat a, ullamcorper neque. ', '2016-12-16');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tbl_forum_komentar`
--

CREATE TABLE `tbl_forum_komentar` (
  `id_forum_komentar` int(11) NOT NULL,
  `id_forum` int(11) NOT NULL,
  `id_member` int(11) NOT NULL,
  `komentar` text NOT NULL,
  `tgl_komentar` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `tbl_forum_komentar`
--

INSERT INTO `tbl_forum_komentar` (`id_forum_komentar`, `id_forum`, `id_member`, `komentar`, `tgl_komentar`) VALUES
(1, 1, 1, 'Apaa?', '2016-12-06');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tbl_kategori`
--

CREATE TABLE `tbl_kategori` (
  `id_kategori` int(11) NOT NULL,
  `nama_kategori` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `tbl_kategori`
--

INSERT INTO `tbl_kategori` (`id_kategori`, `nama_kategori`) VALUES
(1, 'Banjir'),
(2, 'Tanah Longsor'),
(3, 'Gempa Bumi'),
(4, 'Angin Puting Beliung'),
(5, 'Kebakaran'),
(6, 'Gunung Meletus');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tbl_member`
--

CREATE TABLE `tbl_member` (
  `id_member` int(11) NOT NULL,
  `nama` varchar(255) NOT NULL,
  `alamat` text NOT NULL,
  `email` varchar(255) NOT NULL,
  `password` text NOT NULL,
  `no_telp` varchar(255) NOT NULL,
  `jenis_kelamin` enum('0','1') NOT NULL,
  `tgl_lahir` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `tbl_member`
--

INSERT INTO `tbl_member` (`id_member`, `nama`, `alamat`, `email`, `password`, `no_telp`, `jenis_kelamin`, `tgl_lahir`) VALUES
(1, 'Luki Rahayu', 'Jl. Jeruk No 11, Bogor', 'luki@mail.com', 'pengguna', '087888283821', '0', '1995-02-25'),
(5, 'Teguh', 'Jl. Mawar no 11 bogor', 'teguh@mail.com', '123', '08786625341', '1', '2012-09-25');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tbl_peta`
--

CREATE TABLE `tbl_peta` (
  `id_peta` int(11) NOT NULL,
  `id_kategori` int(11) NOT NULL,
  `judul` varchar(255) NOT NULL,
  `deskripsi` text NOT NULL,
  `sumber` varchar(255) NOT NULL,
  `gambar` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `tbl_peta`
--

INSERT INTO `tbl_peta` (`id_peta`, `id_kategori`, `judul`, `deskripsi`, `sumber`, `gambar`) VALUES
(2, 4, 'Test', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Proin a erat eget erat imperdiet commodo. Nulla at maximus diam, et eleifend sapien. Etiam quam neque, consectetur ultrices nisi at, vestibulum mattis risus. Donec luctus venenatis elit. Donec auctor vel orci et sodales. Suspendisse potenti. Nam convallis, eros ac aliquet ultricies, orci orci convallis neque, at volutpat metus sem in tellus. Curabitur non leo consectetur, aliquam erat vel, tempor ex. In posuere sapien ac massa tincidunt, accumsan porta ipsum malesuada. Aliquam dignissim cursus dolor, ac ultricies quam viverra in. Pellentesque dapibus, quam eu finibus porta, dolor nisi aliquam tortor, nec semper nibh augue sit amet libero. Interdum et malesuada fames ac ante ipsum primis in faucibus. Praesent eu fringilla massa. Nunc quis mauris suscipit, dignissim erat a, ullamcorper neque. ', 'Test', 'gambar_2.jpg');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tbl_relawan`
--

CREATE TABLE `tbl_relawan` (
  `id_relawan` int(11) NOT NULL,
  `nama` varchar(255) NOT NULL,
  `alamat` text NOT NULL,
  `email` varchar(255) NOT NULL,
  `no_telp` varchar(255) NOT NULL,
  `jenis_kelamin` enum('0','1') NOT NULL,
  `tempat_lahir` varchar(255) NOT NULL,
  `tgl_lahir` date NOT NULL,
  `kota` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `tbl_relawan`
--

INSERT INTO `tbl_relawan` (`id_relawan`, `nama`, `alamat`, `email`, `no_telp`, `jenis_kelamin`, `tempat_lahir`, `tgl_lahir`, `kota`) VALUES
(1, 'Budi Nugraha', 'Jl. Manggis No 3, Bekasi', 'budi@mail.com', '089972636212', '1', 'Bekasi', '2015-12-13', 'Jakarta');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tbl_tips`
--

CREATE TABLE `tbl_tips` (
  `id_tips` int(11) NOT NULL,
  `id_kategori` int(11) NOT NULL,
  `judul` varchar(255) NOT NULL,
  `deskripsi` text NOT NULL,
  `sumber` varchar(255) NOT NULL,
  `gambar` text NOT NULL,
  `tgl_post` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `tbl_tips`
--

INSERT INTO `tbl_tips` (`id_tips`, `id_kategori`, `judul`, `deskripsi`, `sumber`, `gambar`, `tgl_post`) VALUES
(1, 4, '123', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Proin a erat eget erat imperdiet commodo. Nulla at maximus diam, et eleifend sapien. Etiam quam neque, consectetur ultrices nisi at, vestibulum mattis risus. Donec luctus venenatis elit. Donec auctor vel orci et sodales. Suspendisse potenti. Nam convallis, eros ac aliquet ultricies, orci orci convallis neque, at volutpat metus sem in tellus. Curabitur non leo consectetur, aliquam erat vel, tempor ex. In posuere sapien ac massa tincidunt, accumsan porta ipsum malesuada. Aliquam dignissim cursus dolor, ac ultricies quam viverra in. Pellentesque dapibus, quam eu finibus porta, dolor nisi aliquam tortor, nec semper nibh augue sit amet libero. Interdum et malesuada fames ac ante ipsum primis in faucibus. Praesent eu fringilla massa. Nunc quis mauris suscipit, dignissim erat a, ullamcorper neque. ', '123', 'gambar_1.jpg', '2016-12-16');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `tbl_admin`
--
ALTER TABLE `tbl_admin`
  ADD PRIMARY KEY (`username`);

--
-- Indexes for table `tbl_berita`
--
ALTER TABLE `tbl_berita`
  ADD PRIMARY KEY (`id_berita`),
  ADD KEY `id_kategori` (`id_kategori`);

--
-- Indexes for table `tbl_forum`
--
ALTER TABLE `tbl_forum`
  ADD PRIMARY KEY (`id_forum`),
  ADD KEY `id_kategori` (`id_kategori`);

--
-- Indexes for table `tbl_forum_komentar`
--
ALTER TABLE `tbl_forum_komentar`
  ADD PRIMARY KEY (`id_forum_komentar`),
  ADD KEY `id_forum` (`id_forum`),
  ADD KEY `id_member` (`id_member`);

--
-- Indexes for table `tbl_kategori`
--
ALTER TABLE `tbl_kategori`
  ADD PRIMARY KEY (`id_kategori`);

--
-- Indexes for table `tbl_member`
--
ALTER TABLE `tbl_member`
  ADD PRIMARY KEY (`id_member`),
  ADD UNIQUE KEY `email` (`email`);

--
-- Indexes for table `tbl_peta`
--
ALTER TABLE `tbl_peta`
  ADD PRIMARY KEY (`id_peta`);

--
-- Indexes for table `tbl_relawan`
--
ALTER TABLE `tbl_relawan`
  ADD PRIMARY KEY (`id_relawan`),
  ADD UNIQUE KEY `email` (`email`);

--
-- Indexes for table `tbl_tips`
--
ALTER TABLE `tbl_tips`
  ADD PRIMARY KEY (`id_tips`),
  ADD KEY `id_kategori` (`id_kategori`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `tbl_berita`
--
ALTER TABLE `tbl_berita`
  MODIFY `id_berita` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;
--
-- AUTO_INCREMENT for table `tbl_forum`
--
ALTER TABLE `tbl_forum`
  MODIFY `id_forum` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT for table `tbl_forum_komentar`
--
ALTER TABLE `tbl_forum_komentar`
  MODIFY `id_forum_komentar` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
--
-- AUTO_INCREMENT for table `tbl_kategori`
--
ALTER TABLE `tbl_kategori`
  MODIFY `id_kategori` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;
--
-- AUTO_INCREMENT for table `tbl_member`
--
ALTER TABLE `tbl_member`
  MODIFY `id_member` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
--
-- AUTO_INCREMENT for table `tbl_peta`
--
ALTER TABLE `tbl_peta`
  MODIFY `id_peta` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT for table `tbl_relawan`
--
ALTER TABLE `tbl_relawan`
  MODIFY `id_relawan` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT for table `tbl_tips`
--
ALTER TABLE `tbl_tips`
  MODIFY `id_tips` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
