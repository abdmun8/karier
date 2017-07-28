-- phpMyAdmin SQL Dump
-- version 3.2.4
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Waktu pembuatan: 20. April 2010 jam 22:34
-- Versi Server: 5.1.41
-- Versi PHP: 5.3.1

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `karier`
--
CREATE DATABASE `karier` DEFAULT CHARACTER SET latin1 COLLATE latin1_swedish_ci;
USE `karier`;

-- --------------------------------------------------------

--
-- Struktur dari tabel `admin`
--

CREATE TABLE IF NOT EXISTS `admin` (
  `id` int(3) NOT NULL AUTO_INCREMENT,
  `nama_admin` varchar(30) NOT NULL,
  `id_user` char(10) NOT NULL,
  PRIMARY KEY (`id`),
  KEY `id_user` (`id_user`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=3 ;

--
-- Dumping data untuk tabel `admin`
--

INSERT INTO `admin` (`id`, `nama_admin`, `id_user`) VALUES
(1, 'Windi Wulandari', 'admin'),
(2, 'admin', 'admin');

-- --------------------------------------------------------

--
-- Struktur dari tabel `analisa_hasil`
--

CREATE TABLE IF NOT EXISTS `analisa_hasil` (
  `id` int(5) NOT NULL AUTO_INCREMENT,
  `tgl_konsul` date NOT NULL,
  `riwayat_karier` varchar(50) NOT NULL,
  `nis` char(8) NOT NULL,
  PRIMARY KEY (`id`),
  KEY `nis` (`nis`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=4 ;

--
-- Dumping data untuk tabel `analisa_hasil`
--


-- --------------------------------------------------------

--
-- Struktur dari tabel `karier`
--

CREATE TABLE IF NOT EXISTS `karier` (
  `id_karier` char(5) NOT NULL,
  `nama_karier` int(30) NOT NULL,
  `deskripsi` text NOT NULL,
  PRIMARY KEY (`id_karier`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `karier`
--


-- --------------------------------------------------------

--
-- Struktur dari tabel `pakar`
--

CREATE TABLE IF NOT EXISTS `pakar` (
  `id_p` int(3) NOT NULL AUTO_INCREMENT,
  `nama_pakar` varchar(30) NOT NULL,
  `id_user` char(10) NOT NULL,
  PRIMARY KEY (`id_p`),
  KEY `id_user` (`id_user`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=6 ;

--
-- Dumping data untuk tabel `pakar`
--

INSERT INTO `pakar` (`id_p`, `nama_pakar`, `id_user`) VALUES
(1, 'Windi Wulandari', 'pakar'),
(4, 'Wendi Rosandi', 'wrosandi');

-- --------------------------------------------------------

--
-- Struktur dari tabel `pertanyaan`
--

CREATE TABLE IF NOT EXISTS `pertanyaan` (
  `ID` int(2) NOT NULL,
  `pertanyaan` text NOT NULL,
  `ifyes` int(2) NOT NULL,
  `ifno` int(11) NOT NULL,
  `ket` text NOT NULL,
  PRIMARY KEY (`ID`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `pertanyaan`
--

INSERT INTO `pertanyaan` (`ID`, `pertanyaan`, `ifyes`, `ifno`, `ket`) VALUES
(1, 'Apakah  Rata-rata Nilai anda Lebih dari 75 ?', 2, 3, 'Mementukan Kecerdasan'),
(2, 'Apakah anda ada orang yang disiplin?', 5, 10, 'Disiplin'),
(3, 'Apakah ekonomi keluarga kamu menengah keatas?', 2, 7, 'Ekonomi Menengah'),
(4, 'Apakah Anda Hobi Membaca?', 6, 7, 'Membaca'),
(5, 'Apakah kamu Orang yang Agresif?', 4, 6, 'Sifat/Temperamen'),
(6, 'Apakah anda termotivasi dalam mengembangkan karier?', 9, 10, 'Motivasi'),
(7, 'Apakah keseharian anda berpenampilan rapi?', 8, 10, 'Penampilan'),
(8, 'Sebaiknya kamu menjadi Karyawan.', 0, 0, 'Karyawan'),
(9, 'Sebaiknya ada melanjutkan pendidikan ke tingkat yang tinggi.', 0, 0, 'Mahasiswa'),
(10, 'Anda berbakat untuk menjadi Wiraswastawan.', 0, 0, 'Wiaswasta'),
(11, 'Apakah   ', 6, 7, 'Pertanyaan');

-- --------------------------------------------------------

--
-- Struktur dari tabel `siswa`
--

CREATE TABLE IF NOT EXISTS `siswa` (
  `nis` char(8) NOT NULL,
  `nama_lengkap` varchar(30) NOT NULL,
  `jen_kel` enum('L','P') NOT NULL,
  `tempat_lahir` varchar(20) NOT NULL,
  `tanggal_lahir` date NOT NULL,
  `Kelas` int(2) NOT NULL,
  `Jurusan` varchar(10) NOT NULL,
  `nama_ortu` varchar(30) NOT NULL,
  `id_user` char(10) DEFAULT NULL,
  PRIMARY KEY (`nis`),
  UNIQUE KEY `id_user` (`id_user`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `siswa`
--

INSERT INTO `siswa` (`nis`, `nama_lengkap`, `jen_kel`, `tempat_lahir`, `tanggal_lahir`, `Kelas`, `Jurusan`, `nama_ortu`, `id_user`) VALUES
('07001', 'ahmad', 'L', 'Karawang', '2010-01-04', 12, 'tgb', 'Windi', 'ahmad');

-- --------------------------------------------------------

--
-- Struktur dari tabel `userpass`
--

CREATE TABLE IF NOT EXISTS `userpass` (
  `id` int(5) NOT NULL AUTO_INCREMENT,
  `id_user` char(10) NOT NULL,
  `sandi` varchar(50) NOT NULL,
  `hak` enum('Admin','Pakar','User') NOT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `id_user` (`id_user`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=114 ;

--
-- Dumping data untuk tabel `userpass`
--

INSERT INTO `userpass` (`id`, `id_user`, `sandi`, `hak`) VALUES
(100, 'admin', '21232f297a57a5a743894a0e4a801fc3', 'Admin'),
(101, 'windi', '4e3ccde7dc705b1abcce17019905279b', 'Pakar'),
(102, 'pakar', '6a0d8f756dfa9c1cd69fed28423ec8ca', 'Pakar'),
(109, 'wrosandi', '57a3a0c5796dd85a32fd9476b6f3362a', 'Pakar'),
(113, 'ahmad', '76eb649c047cbecad7c36e71374bc9a5', 'User');

--
-- Ketidakleluasaan untuk tabel pelimpahan (Dumped Tables)
--

--
-- Ketidakleluasaan untuk tabel `analisa_hasil`
--
ALTER TABLE `analisa_hasil`
  ADD CONSTRAINT `analisa_hasil_ibfk_1` FOREIGN KEY (`nis`) REFERENCES `siswa` (`nis`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Ketidakleluasaan untuk tabel `pakar`
--
ALTER TABLE `pakar`
  ADD CONSTRAINT `pakar_ibfk_1` FOREIGN KEY (`id_user`) REFERENCES `userpass` (`id_user`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Ketidakleluasaan untuk tabel `siswa`
--
ALTER TABLE `siswa`
  ADD CONSTRAINT `siswa_ibfk_1` FOREIGN KEY (`id_user`) REFERENCES `userpass` (`id_user`) ON DELETE CASCADE ON UPDATE CASCADE;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
