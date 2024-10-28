-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 27 Okt 2024 pada 07.16
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
-- Database: `utspemweb`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `aboutme`
--

CREATE TABLE `aboutme` (
  `judul` text NOT NULL,
  `header` text NOT NULL,
  `isi` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data untuk tabel `aboutme`
--

INSERT INTO `aboutme` (`judul`, `header`, `isi`) VALUES
('Tentang Saya\r\n', 'Berkomitmen Tinggi dan Handal.', 'Halo, Saya seorang profesional dengan keahlian di bidang Jaringan, Desain UI dan Pengembangan Web serta didukung oleh latar belakang Informatika. Dalam setiap proyek, saya berusaha mencapai hasil maksimal, seperti mengoptimalkan jaringan untuk performa tinggi, merancang antarmuka yang intuitif, dan mengembangkan web sesuai standar terbaik.');

-- --------------------------------------------------------

--
-- Struktur dari tabel `contactperson`
--

CREATE TABLE `contactperson` (
  `nama` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `nohp` smallint(14) NOT NULL,
  `pesan` varchar(500) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data untuk tabel `contactperson`
--

INSERT INTO `contactperson` (`nama`, `email`, `nohp`, `pesan`) VALUES
('dapa', 'dapa@gmail.com', 123, 'keren'),
('dapa', 'dapa@gmail.com', 123, 'keren'),
('dapa', 'dapa@gmail.com', 123, 'keren'),
('dapa', 'dapa@gmail.com', 123, 'keren'),
('dapa', 'dapa@gmail.com', 123, 'keren'),
('dapa2', 'dapa2@gmail.com', 32767, 'keren'),
('dapa1', 'dapa2@gmail.com', 32767, 'lu orang kelas'),
('dapa1', 'dapa2@gmail.com', 32767, 'lu orang kelas'),
('dapapap', 'dapapap@gmail.com', 32767, 'pesanpesan keren'),
('dapapap', 'dapapap@gmail.com', 32767, 'pesanpesan keren'),
('dap', 'as@gmail.com', 32767, 'keren lu bgggg'),
('asd', 'daaa@gmail', 32767, 'tetxt');

-- --------------------------------------------------------

--
-- Struktur dari tabel `education`
--

CREATE TABLE `education` (
  `vocational` text NOT NULL,
  `university` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data untuk tabel `education`
--

INSERT INTO `education` (`vocational`, `university`) VALUES
('Saya memiliki pengalaman bersekolah di jurusan Teknik Komputer dan Jaringan, di mana saya mempelajari pengelolaan, konfigurasi, dan pemeliharaan jaringan komputer serta perangkat keras, yang membekali saya dengan keahlian teknis dalam mengelola infrastruktur IT.', 'Saya memiliki pengalaman berkuliah di jurusan Informatika, dimana saya mempelajari pemrograman, pengembangan perangkat lunak, algoritma, dan sistem informasi, yang memperkuat pemahaman saya dalam mengembangkan solusi teknologi berbasis data dan komputasi.');

-- --------------------------------------------------------

--
-- Struktur dari tabel `kontakdapa`
--

CREATE TABLE `kontakdapa` (
  `email` text NOT NULL,
  `nohp` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data untuk tabel `kontakdapa`
--

INSERT INTO `kontakdapa` (`email`, `nohp`) VALUES
('workwithdapa@gmail.com', '0813154275801');

-- --------------------------------------------------------

--
-- Struktur dari tabel `projects`
--

CREATE TABLE `projects` (
  `judul` text NOT NULL,
  `isi` text NOT NULL,
  `judul2` text NOT NULL,
  `isi2` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data untuk tabel `projects`
--

INSERT INTO `projects` (`judul`, `isi`, `judul2`, `isi2`) VALUES
('Surya Input Barang', 'Aplikasi ini dapat menginput barang lalu akan membuat file excel dan tabel excel, dengan nama file berdasarkan tanggal penginputan secara otomatis jika user sudah menginput form barang tersebut user dapat melihat grafik total barang', 'Kasir Toko Buku DNA', 'Aplikasi ini mengelola data buku yang  bisa melakukan penambahan data buku baru, pengeditan data buku yang sudah ada, dan penghapusan data buku. Selain itu, aplikasi ini juga dilengkapi dengan fitur pencarian buku berdasarkan ID buku, judul buku, pengarang, genre, tanggal terbit, dan harga.  Aplikasi ini juga memiliki fitur dashboard yang berfungsi sebagai halaman utama untuk melihat grafik data penjualan.');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
