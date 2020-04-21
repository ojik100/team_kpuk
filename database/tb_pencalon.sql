-- phpMyAdmin SQL Dump
-- version 4.9.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 10 Nov 2019 pada 12.52
-- Versi server: 10.4.8-MariaDB
-- Versi PHP: 7.3.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `kampus_db`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `tb_pencalon`
--

CREATE TABLE `tb_pencalon` (
  `id_pencalon` int(11) NOT NULL,
  `kode_pencalon` varchar(16) NOT NULL,
  `nama_pencalon` varchar(64) NOT NULL,
  `gambar` varchar(255) NOT NULL,
  `visi` text NOT NULL,
  `misi` text NOT NULL,
  `prodi` varchar(30) NOT NULL,
  `semester` varchar(20) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `tb_pencalon`
--

INSERT INTO `tb_pencalon` (`id_pencalon`, `kode_pencalon`, `nama_pencalon`, `gambar`, `visi`, `misi`, `prodi`, `semester`) VALUES
(21, '01', 'RISWANDA AL-WATHONI & SOPIAN HARIADI', '50921.jpeg', 'Membangun Fakultas Teknik Yang Berlandskan Kultur Budaya Fakultas Teknik Universitas Hamzanwadi \"Teknik Satu Bersaudara\" Demi Tercapainya Mahasiswa Fakultas Teknik Yang  (Aspiratif, Kreatif, Tanggung Jawab, Integritas, Fathanah\"\r\n\r\n', '1.	Menjalin Hubungan Kekeluargaan Dengan Mahasiswa, Civitas Akademik, Lembaga Intra Dan Organisasi Lain Di Kampus Maupun Luar Kampus\r\n2.	Mewujudkan Akademisi Mahasiswa Fakultas Teknik Yang Memiliki Kekuatan Dalam Intelektual, Kepribadian , Spiritual Dan Softskill\r\n3.	Mewadahi, Memfasilitasi Dan Mengembangkan Potensi Minat Dan Bakat Mahasiswa Fakutas Teknik Dalam Nidang Akademik Maupun Non Akademik\r\n4.	Membangun Mahasiswa Fakultas Teknik Yang Sadar Akan Kondisi Sosial Masyarakat Di Kampus Maupun Luar Kampus\r\n', '', ''),
(22, '02', 'FEBRIAN HIDAYAT & HIZBUL IZZI', '65121.jpeg', 'Bekerja Denga HATI (Harmonis,Aktif, Transparansi Dan Inspiratif) Menjadikan Bem Ftek Yang Tanggap Dan Interaktif Melalui Aksi Nyata Dengan Dasar Religius Dalam Mewujudkan Inovasi Dan Prestasi', '1.	Menciptakan Lingkungan Kerja Bem Ftek Mengutamakan Solidaritas Dan Kekeluargaan\r\n2.	Mewujudkan Sinergritas Bersama Civitas Akademika Dan Menjalankan Roda Organisasi (HMPS, Ukm Dan Korti)\r\n3.	Menjadikan Bem Ftek Sebagai Mitra Pengembangan Talenta Mahasiswa Fakultas Teknik\r\n4.	Mewujudkan Pengkaderan BEM FTEK Yang Progresif\r\n5.	Melaksanakan Program Yang Mampu Menambah Dan Meningkatkan Kemampuan Daya Pikir Mahasiswa\r\n6.	Menjadikan BEM FTEK Sebagai Sarana Mewujudkan Tridharma Perguruan Tinggi\r\n7.	Bekerja Dengan Mengutamakan 3S (Salam, Senyum Sapa)\r\n8.	Berdo’a Ikhtiar, Bekerja Keras, Ikhlas Dan Cerdas Tanpa Batas\r\n', '', '');

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `tb_pencalon`
--
ALTER TABLE `tb_pencalon`
  ADD PRIMARY KEY (`id_pencalon`,`kode_pencalon`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `tb_pencalon`
--
ALTER TABLE `tb_pencalon`
  MODIFY `id_pencalon` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=23;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
