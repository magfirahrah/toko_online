-- phpMyAdmin SQL Dump
-- version 3.5.2.2
-- http://www.phpmyadmin.net
--
-- Inang: 127.0.0.1
-- Waktu pembuatan: 29 Jun 2020 pada 19.09
-- Versi Server: 5.5.27
-- Versi PHP: 5.4.7

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Basis data: `tokobuku_firah`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `tb_buku`
--

CREATE TABLE IF NOT EXISTS `tb_buku` (
  `id_buku` int(11) NOT NULL AUTO_INCREMENT,
  `judul_buku` varchar(120) NOT NULL,
  `kategori` varchar(60) NOT NULL,
  `harga` int(11) NOT NULL,
  `stok` int(4) NOT NULL,
  `gambar` text NOT NULL,
  PRIMARY KEY (`id_buku`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=24 ;

--
-- Dumping data untuk tabel `tb_buku`
--

INSERT INTO `tb_buku` (`id_buku`, `judul_buku`, `kategori`, `harga`, `stok`, `gambar`) VALUES
(1, 'Hujan Di Bulan Juni', 'Novel', 20000, 10, 'Hujan di bulan juni.jpg'),
(2, 'Laskar Pelangi', 'Novel', 100000, 5, 'laskar pelangi.jpg'),
(3, 'Cinta Dalam Diam', 'Novel', 300000, 100, 'cinta dalam diam.jpg'),
(4, 'Dilan 1991', 'Novel', 150000, 15, 'dilan 1991.jpg'),
(7, 'Aku Pasti Bisa ', 'Motivasi', 100000, 15, 'aku pasti bisa.jpg'),
(8, 'Melawan Takdir', 'Motivasi', 100000, 15, 'melawan takdir.jpg'),
(9, 'Jangan Pernah Menyerah', 'Motivasi', 150000, 20, 'jangan pernah menyerah.jpg'),
(10, 'Seni Mencintai Diri Sendiri', 'Motivasi', 150000, 10, 'seni mencintai diri sendiri.jpg'),
(11, 'Sejarah Hukum Islam', 'Sejarah', 200000, 25, 'sejarah hukum islam.jpg'),
(12, 'Sejarah Perempuan Indonesia', 'Sejarah', 250000, 20, 'sejarah perempuan indonesia.jpg'),
(13, 'Sejarah Indonesia', 'Sejarah', 200000, 5, 'sejarah indonesia.jpg'),
(14, 'Lahirnya Pancasila', 'Sejarah', 250000, 7, 'lahirnya pancasila.jpg'),
(15, 'Agama-Agama Minor', 'Agama', 200000, 15, 'agama agama minor.jpg'),
(16, 'Agama Dialogis', 'Agama', 150000, 20, 'agama dialogis.Jpg'),
(17, 'Logika Agama', 'Agama', 300000, 10, 'logika agama.Jpg'),
(18, 'Agama Dalam Ruang Publik', 'Agama', 50000, 5, 'agama dalam ruang publik.jpg');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
