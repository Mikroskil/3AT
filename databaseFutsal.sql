-- phpMyAdmin SQL Dump
-- version 3.5.2.2
-- http://www.phpmyadmin.net
--
-- Inang: 127.0.0.1
-- Waktu pembuatan: 22 Des 2013 pada 17.45
-- Versi Server: 5.5.27
-- Versi PHP: 5.4.7

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";

--
-- Basis data: `efutsal`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `jadwal`
--

CREATE TABLE IF NOT EXISTS `jadwal` (
  `No` varchar(5) NOT NULL,
  `Tgl_Pelatihan` date NOT NULL,
  `Tgl_Kompetisi` date NOT NULL,
  `Jam` time NOT NULL,
  PRIMARY KEY (`No`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `jadwal`
--

INSERT INTO `jadwal` (`No`, `Tgl_Pelatihan`, `Tgl_Kompetisi`, `Jam`) VALUES
('1', '2013-12-02', '2013-12-03', '15:00:00'),
('2', '2013-12-04', '2013-12-05', '10:00:00'),
('3', '2013-12-06', '2013-12-07', '17:00:00');

-- --------------------------------------------------------

--
-- Struktur dari tabel `lapangan`
--

CREATE TABLE IF NOT EXISTS `lapangan` (
  `No` varchar(5) NOT NULL,
  `Keterangan` varchar(200) NOT NULL,
  `Harga` varchar(100) NOT NULL,
  `Gambar` varchar(15) NOT NULL,
  PRIMARY KEY (`No`),
  UNIQUE KEY `No` (`No`),
  UNIQUE KEY `No_2` (`No`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `lapangan`
--

INSERT INTO `lapangan` (`No`, `Keterangan`, `Harga`, `Gambar`) VALUES
('1', 'Lapangan futsal yang dipenuhi dengan rumput-rumput agar lebih menantang para pemain', 'Rp. 120.000', 'lapFutsal1.jpg'),
('2', 'Permukaan tergolong yang paling kasat. Sehingga tidak licin saat berlari di atasnya. Memiliki tingkat kerataan yang baik dan memungkinkan laju bola mengalir lancer.', 'Rp. 200.000', 'lapFutsal2.jpg'),
('3', 'Lapangan jenis vinyl sering juga disebut rubber, memiliki bahan dasar yang menyerupai karet. Alhasil, diantara material lapangan futsal, jenis ini yang paling lembut.', 'Rp. 220.000', 'lapFutsal3.jpg'),
('4', 'Lapangan yang terbuat dari bahan polypropylene atau PP secara kasat mata terlihat berbeda dengan teraflex, meski sama-sama berbahan dasar plastic. Jenis ini terdiri dari ratusan lembaran plastic yang ', 'Rp. 200.000', 'lapFutsal4.jpg');

-- --------------------------------------------------------

--
-- Struktur dari tabel `pemesanan`
--

CREATE TABLE IF NOT EXISTS `pemesanan` (
  `Nopesanan` varchar(15) NOT NULL,
  `Nama` varchar(100) NOT NULL,
  `Nolap` varchar(3) NOT NULL,
  `Email` varchar(30) NOT NULL,
  `Tanggal` date NOT NULL,
  `JamMulai` time NOT NULL,
  `Pesan` varchar(200) NOT NULL,
  `JamAkhir` time NOT NULL,
  `Anggota` varchar(20) NOT NULL,
  `Transaksi` varchar(15) NOT NULL,
  PRIMARY KEY (`Nopesanan`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `pemesanan`
--

INSERT INTO `pemesanan` (`Nopesanan`, `Nama`, `Nolap`, `Email`, `Tanggal`, `JamMulai`, `Pesan`, `JamAkhir`, `Anggota`, `Transaksi`) VALUES
('P001', 'hendro', '3', 'lunar_dr1ve@yahoo.com', '2013-12-16', '10:00:00', '', '12:00:00', 'anggota', ''),
('P002', 'Andri', '1', 'lunar_dr1ve@yahoo.com', '2013-12-16', '07:00:00', '', '09:00:00', 'anggota', ''),
('P003', 'Andri', '1', 'lunar_dr1ve@yahoo.com', '2013-12-16', '05:00:00', 'tes', '06:00:00', 'bukanAnggota', ''),
('P004', 'alex', '3', 'lunar_dr1ve@yahoo.com', '2013-12-18', '17:00:00', 'sikdjsd', '18:00:00', 'anggota', '');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tbl_hubungi`
--

CREATE TABLE IF NOT EXISTS `tbl_hubungi` (
  `id_hubungi` int(5) NOT NULL AUTO_INCREMENT,
  `nama` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `alamat` varchar(100) NOT NULL,
  `pesan` text NOT NULL,
  PRIMARY KEY (`id_hubungi`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=10 ;

-- --------------------------------------------------------

--
-- Struktur dari tabel `tbl_member`
--

CREATE TABLE IF NOT EXISTS `tbl_member` (
  `id_member` int(3) NOT NULL AUTO_INCREMENT,
  `user` varchar(20) NOT NULL,
  `pass` char(40) NOT NULL,
  `nama` varchar(50) NOT NULL,
  PRIMARY KEY (`id_member`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=23 ;

--
-- Dumping data untuk tabel `tbl_member`
--

INSERT INTO `tbl_member` (`id_member`, `user`, `pass`, `nama`) VALUES
(20, 'andri', '6bd3108684ccc9dfd40b126877f850b0', 'andri'),
(22, 'alex', '534b44a19bf18d20b71ecc4eb77c572f', 'alex');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tbl_transaksi`
--

CREATE TABLE IF NOT EXISTS `tbl_transaksi` (
  `Nopesanan` varchar(15) NOT NULL,
  `Nolap` varchar(2) NOT NULL,
  `Nama` varchar(50) NOT NULL,
  `Harga` int(11) NOT NULL,
  `Diskon` int(11) NOT NULL,
  `Total` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `tbl_transaksi`
--

INSERT INTO `tbl_transaksi` (`Nopesanan`, `Nolap`, `Nama`, `Harga`, `Diskon`, `Total`) VALUES
('P001', '1', 'Andri', 120000, 20000, 100000),
('P004', '3', 'alex', 220000, 20000, 200000);

-- --------------------------------------------------------

--
-- Struktur dari tabel `tbl_user`
--

CREATE TABLE IF NOT EXISTS `tbl_user` (
  `id_user` int(3) NOT NULL AUTO_INCREMENT,
  `user` varchar(20) NOT NULL,
  `pass` char(40) NOT NULL,
  PRIMARY KEY (`id_user`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=3 ;

--
-- Dumping data untuk tabel `tbl_user`
--

INSERT INTO `tbl_user` (`id_user`, `user`, `pass`) VALUES
(1, 'Admin', 'admin');
