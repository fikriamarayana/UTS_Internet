-- phpMyAdmin SQL Dump
-- version 3.5.2.2
-- http://www.phpmyadmin.net
--
-- Inang: 127.0.0.1
-- Waktu pembuatan: 26 Nov 2022 pada 05.44
-- Versi Server: 5.5.27
-- Versi PHP: 5.4.7

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Basis data: `sekolah`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `tabel_sekolah`
--

CREATE TABLE IF NOT EXISTS `tabel_sekolah` (
  `npsn` varchar(8) NOT NULL,
  `status` enum('negeri','swasta') NOT NULL,
  `bentuk_pendidikan` enum('tk','sd','smp','sma','smk') NOT NULL,
  `nama_sekolah` varchar(50) NOT NULL,
  `sk_pendirian` varchar(20) NOT NULL,
  `tgl_pendirian` date NOT NULL,
  `sk_izin_operasional` varchar(20) NOT NULL,
  `tgl_izin_operasional` date NOT NULL,
  `alamat` varchar(100) NOT NULL,
  `rt` varchar(3) NOT NULL,
  `rw` varchar(3) NOT NULL,
  `dusun` varchar(50) NOT NULL,
  `desa` varchar(50) NOT NULL,
  `kecamatan` varchar(50) NOT NULL,
  `kabupaten` varchar(50) NOT NULL,
  `provinsi` varchar(50) NOT NULL,
  `kode_pos` varchar(8) NOT NULL,
  PRIMARY KEY (`npsn`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `tabel_sekolah`
--

INSERT INTO `tabel_sekolah` (`npsn`, `status`, `bentuk_pendidikan`, `nama_sekolah`, `sk_pendirian`, `tgl_pendirian`, `sk_izin_operasional`, `tgl_izin_operasional`, `alamat`, `rt`, `rw`, `dusun`, `desa`, `kecamatan`, `kabupaten`, `provinsi`, `kode_pos`) VALUES
('20224583', 'negeri', 'smp', 'SMP Negeri 4 Tasikmalaya', 'PPK RI.16-02-1961', '1961-02-16', '109/A/SK/B.3', '1961-02-16', 'JL.RAA.Wiratanuningrat No.10', '3', '2', 'Tawangsari', 'Kahuripan', 'Tawang', 'Tasikmalaya', 'Jawa Barat', '46113');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
