-- phpMyAdmin SQL Dump
-- version 4.9.7
-- https://www.phpmyadmin.net/
--
-- Host: localhost:8889
-- Waktu pembuatan: 27 Sep 2021 pada 16.28
-- Versi server: 5.7.32
-- Versi PHP: 8.0.0

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";

--
-- Database: `tugas14`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `tb_course`
--

CREATE TABLE `tb_course` (
  `id` int(11) NOT NULL,
  `name_course` varchar(50) NOT NULL,
  `chapter` varchar(100) NOT NULL,
  `instructor` varchar(50) NOT NULL,
  `media` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data untuk tabel `tb_course`
--

INSERT INTO `tb_course` (`id`, `name_course`, `chapter`, `instructor`, `media`) VALUES
(1, 'Mathematics', 'Chapter 10 : Tenses', 'Andi', 'Classroom'),
(2, 'Geography', 'Chapter 1 : Introduction', 'Teguh', 'Google Meet'),
(3, 'Chemistry', 'Chapter 10 : Road To Malang', 'Teguh', 'Google Meet'),
(4, 'tata', 'tata', 'tata', 'tata');

-- --------------------------------------------------------

--
-- Struktur dari tabel `user`
--

CREATE TABLE `user` (
  `id` int(11) NOT NULL,
  `nama` varchar(50) NOT NULL,
  `email` varchar(50) NOT NULL,
  `username` varchar(50) NOT NULL,
  `password` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data untuk tabel `user`
--

INSERT INTO `user` (`id`, `nama`, `email`, `username`, `password`) VALUES
(5, 'Teguh Prasetyo', 'teguhprasetyo261211@gmail.com', 'teguh261211', '261211'),
(8, 'Istiqomah', 'istiqomah@gmail.com', 'isti', '123'),
(9, '', '', '', '');

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `tb_course`
--
ALTER TABLE `tb_course`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `tb_course`
--
ALTER TABLE `tb_course`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT untuk tabel `user`
--
ALTER TABLE `user`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;
