-- phpMyAdmin SQL Dump
-- version 4.8.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Mar 20, 2020 at 06:23 AM
-- Server version: 10.1.37-MariaDB
-- PHP Version: 7.3.1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `pesantren_darul_ilmi`
--

-- --------------------------------------------------------

--
-- Table structure for table `tb_akun_admin`
--

CREATE TABLE `tb_akun_admin` (
  `nip_staff_admin` varchar(10) NOT NULL,
  `nama_akun` varchar(25) NOT NULL,
  `kata_sandi` varchar(32) NOT NULL,
  `kode_role_admin` varchar(8) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tb_akun_admin`
--

INSERT INTO `tb_akun_admin` (`nip_staff_admin`, `nama_akun`, `kata_sandi`, `kode_role_admin`) VALUES
('1', 'madan', '202cb962ac59075b964b07152d234b70', 'adm_dms'),
('2', 'madanakd', '0257acd5bb44b1bda717c403f016faab', 'akd'),
('2', 'madanprz', '0257acd5bb44b1bda717c403f016faab', 'przputra'),
('2', 'madanprzstw', '0257acd5bb44b1bda717c403f016faab', 'przputri'),
('1', 'madansan', '0257acd5bb44b1bda717c403f016faab', 'akdputra'),
('2', 'madanstw', '0257acd5bb44b1bda717c403f016faab', 'akdputri');

-- --------------------------------------------------------

--
-- Table structure for table `tb_akun_ortu`
--

CREATE TABLE `tb_akun_ortu` (
  `no_akun` int(11) NOT NULL,
  `id_ortu` varchar(20) NOT NULL,
  `kata_sandi` text NOT NULL,
  `email_ortu` varchar(40) NOT NULL,
  `status_akun` varchar(20) NOT NULL,
  `nama_ortu` varchar(100) NOT NULL,
  `jenis_akun` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tb_akun_ortu`
--

INSERT INTO `tb_akun_ortu` (`no_akun`, `id_ortu`, `kata_sandi`, `email_ortu`, `status_akun`, `nama_ortu`, `jenis_akun`) VALUES
(7, '1', '202cb962ac59075b964b07152d234b70', 'maulanamm@gmail.com', 'aktif', '', 'santri'),
(10, '13', 'c51ce410c124a10e0db5e4b97fc2af39', 'maulanammm@gmail.com', 'aktif', '', 'santri');

-- --------------------------------------------------------

--
-- Table structure for table `tb_akun_pendaftar`
--

CREATE TABLE `tb_akun_pendaftar` (
  `email_pendaftar` varchar(40) NOT NULL,
  `kata_sandi` text NOT NULL,
  `status_pendaftaran` varchar(20) NOT NULL,
  `status_biodata` varchar(20) NOT NULL,
  `status_berkas` varchar(20) NOT NULL,
  `status_pembayaran` varchar(20) NOT NULL,
  `jenis_pendaftaran` varchar(20) NOT NULL,
  `tanggal_daftar` date NOT NULL,
  `status_akun` varchar(20) NOT NULL,
  `asrama_pendaftar` varchar(7) NOT NULL,
  `tahun_ajaran` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tb_akun_pendaftar`
--

INSERT INTO `tb_akun_pendaftar` (`email_pendaftar`, `kata_sandi`, `status_pendaftaran`, `status_biodata`, `status_berkas`, `status_pembayaran`, `jenis_pendaftaran`, `tanggal_daftar`, `status_akun`, `asrama_pendaftar`, `tahun_ajaran`) VALUES
('a@asd.ada', '123\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0', 'tidak lengkap', 'tidak lengkap', 'tidak lengkap', 'tidak lengkap', 'a', '2018-02-11', 'tidak aktif', 'putri', '4'),
('aaaa@a.a', '202cb962ac59075b964b07152d234b70', 'tidak lengkap', 'tidak lengkap', 'tidak lengkap', 'tidak lengkap', 'MI', '2018-02-23', 'tidak aktif', 'putra', '4'),
('asdada@ada', '0257acd5bb44b1bda717c403f016faab', 'menunggu verifikasi', 'menunggu verifikasi', 'diverifikasi', 'diverifikasi', 'sma', '2018-02-11', 'aktif', 'putri', '4'),
('jj@gg.coo', 'x8jbyXDblB+uzVpL1kvw21YBG+vsva2sfg8CtfwDbka6tWt7LBWh8deRcw1fAlKX', 'tidak lengkap', 'tidak lengkap', 'tidak lengkap', 'tidak lengkap', 'a', '2018-02-15', 'tidak aktif', 'putra', '4'),
('madan@mm.cc', 'srHkA9I4Ueyc5Ko93weAHuZjT1bEQnBvcCWFzrA3zqwgaJTIc2KlcnAItqYNarH2', 'tidak lengkap', 'tidak lengkap', 'tidak lengkap', 'tidak lengkap', 'a', '2018-02-14', 'tidak aktif', 'putri', '4'),
('madd@gmail.c', '5KL1oJckgUkvFDCv9n0BcRXh1eDXkBGhQtLsR+MBkC0bYXig/kuf1qsIHVwg8cUa', 'tidak lengkap', 'tidak lengkap', 'tidak lengkap', 'tidak lengkap', 'a', '2018-02-15', 'tidak aktif', 'putra', '4'),
('madon@gmail.com', 'kkkkk\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0', 'tidak lengkap', 'diverifikasi', 'diverifikasi', 'tidak lengkap', 'sma', '2018-02-09', 'aktif', 'putri', '4'),
('madun@darul.co', 'YLO50n62aYSeeQ1/XIWPJxxPMdmgtG0TDAbLY/uL8g8bACeUHso3j/OYjNL9G82l', 'tidak lengkap', 'tidak lengkap', 'tidak lengkap', 'tidak lengkap', 'sma', '2018-02-08', 'aktif', 'putri', '4'),
('madun@gmail.com', 'aaaa\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0', 'tidak lengkap', 'menunggu verifikasi', 'menunggu verifikasi', 'tidak lengkap', 'sma', '2018-02-08', 'aktif', 'putri', '4'),
('maduncan@h.o', '81dc9bdb52d04dc20036dbd8313ed055\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0', 'tidak lengkap', 'tidak lengkap', 'tidak lengkap', 'tidak lengkap', 'a', '2018-02-17', 'tidak aktif', 'putra', '4'),
('madunstar@q.q', '0257acd5bb44b1bda717c403f016faab\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0', 'tidak lengkap', 'tidak lengkap', 'tidak lengkap', 'tidak lengkap', 'a', '2018-02-15', 'tidak aktif', 'putri', '4'),
('mdan@ff.co', '202cb962ac59075b964b07152d234b70', 'tidak lengkap', 'diverifikasi', 'diverifikasi', 'diverifikasi', 'a', '2018-02-15', 'aktif', 'putra', '4'),
('mddd@da.cc', '123\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0', 'tidak lengkap', 'tidak lengkap', 'tidak lengkap', 'tidak lengkap', 'a', '2018-02-11', 'tidak aktif', 'putri', '4'),
('mh@uu.co', '123\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0', 'tidak lengkap', 'tidak lengkap', 'tidak lengkap', 'tidak lengkap', 'a', '2018-02-11', 'tidak aktif', 'putri', '4'),
('mmm@m.com', '202cb962ac59075b964b07152d234b70', 'tidak lengkap', 'tidak lengkap', 'tidak lengkap', 'tidak lengkap', 'a', '2018-02-15', 'aktif', 'putra', '4'),
('mmn@hh.cc', '0257acd5bb44b1bda717c403f016faab\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0', 'tidak lengkap', 'tidak lengkap', 'tidak lengkap', 'tidak lengkap', 'a', '2018-02-15', 'aktif', 'putra', '4'),
('on@qw.mo', 'zLU9aVkVWiWp7R0qV130Z5UTLNEyq9RuMn3d7neDxve+6yKtujGoZQhn0rPWCBRd', 'tidak lengkap', 'tidak lengkap', 'tidak lengkap', 'tidak lengkap', 'a', '2018-02-11', 'tidak aktif', 'putri', '4'),
('oooo@gg.co', 'RDvUkFpIR7bna/D0daxfucNLtmg2XOj+yF9RcWMkxZDs1KhSEIEHRslwC20gUkL0', 'tidak lengkap', 'tidak lengkap', 'tidak lengkap', 'tidak lengkap', 'a', '2018-02-13', 'tidak aktif', 'putri', '4');

-- --------------------------------------------------------

--
-- Table structure for table `tb_alat_transportasi`
--

CREATE TABLE `tb_alat_transportasi` (
  `id_alat_transportasi` int(11) NOT NULL,
  `nama_alat_transportasi` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tb_alat_transportasi`
--

INSERT INTO `tb_alat_transportasi` (`id_alat_transportasi`, `nama_alat_transportasi`) VALUES
(1, 'motor');

-- --------------------------------------------------------

--
-- Table structure for table `tb_bayar_pendaftar`
--

CREATE TABLE `tb_bayar_pendaftar` (
  `id_pembayaran` varchar(20) NOT NULL,
  `email_pendaftar` varchar(40) NOT NULL,
  `bukti_pembayaran` text NOT NULL,
  `besar_pembayaran` int(11) NOT NULL,
  `keterangan` varchar(50) NOT NULL,
  `tanggal_pembayaran` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tb_bayar_pendaftar`
--

INSERT INTO `tb_bayar_pendaftar` (`id_pembayaran`, `email_pendaftar`, `bukti_pembayaran`, `besar_pembayaran`, `keterangan`, `tanggal_pembayaran`) VALUES
('1', 'asdada@ada', 'okde', 300000, 'okde', '2018-02-01'),
('201802150005', 'mmm@m.com', 'ros7.png', 200000, '0000', '2018-02-20'),
('201802150006', 'jj@gg.coo', '', 100000, '', '0000-00-00'),
('201802150007', 'mmn@hh.cc', '', 0, '', '0000-00-00'),
('201802150008', 'madunstar@q.q', '', 0, '', '0000-00-00'),
('201802170009', 'maduncan@h.o', '', 0, '', '0000-00-00'),
('201802230010', 'ad@gmail.com', '', 0, '', '0000-00-00'),
('201802230011', 'afsdf@ff.m', '', 0, '', '0000-00-00'),
('201802230012', 'aaaa@a.a', '', 0, '', '0000-00-00');

-- --------------------------------------------------------

--
-- Table structure for table `tb_berkas_guru`
--

CREATE TABLE `tb_berkas_guru` (
  `id_berkas` int(11) NOT NULL,
  `nip_guru` varchar(20) NOT NULL,
  `nama_berkas` varchar(30) NOT NULL,
  `file_berkas` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tb_berkas_guru`
--

INSERT INTO `tb_berkas_guru` (`id_berkas`, `nip_guru`, `nama_berkas`, `file_berkas`) VALUES
(2, '12', '12345', '2921_kuota_CPNS_2018_kementrian_dan_daerah1.pdf'),
(3, '12', '123123', '2921_kuota_CPNS_2018_kementrian_dan_daerah.pdf');

-- --------------------------------------------------------

--
-- Table structure for table `tb_berkas_pendaftar`
--

CREATE TABLE `tb_berkas_pendaftar` (
  `id_berkas` int(11) NOT NULL,
  `email_pendaftar` varchar(50) NOT NULL,
  `nama_berkas` varchar(30) NOT NULL,
  `file_berkas` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tb_berkas_pendaftar`
--

INSERT INTO `tb_berkas_pendaftar` (`id_berkas`, `email_pendaftar`, `nama_berkas`, `file_berkas`) VALUES
(7, '1@edd.com', 'kartu keluarga', '4-up_on_2012-06-02_at_10jshav1.jpg'),
(9, 'mmm@m.com', 'kartu keluarga', '_MG_71441.JPG'),
(10, 'mmm@m.com', 'paspoto', '12.png'),
(12, 'mdan@ff.co', 'kartu keluarga', 'IMG00920-20120513-0706.jpg'),
(13, 'mdan@ff.co', 'paspoto', '23247411.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `tb_berkas_santri`
--

CREATE TABLE `tb_berkas_santri` (
  `id_berkas` int(11) NOT NULL,
  `nis_lokal` varchar(20) NOT NULL,
  `nama_berkas` varchar(30) NOT NULL,
  `file_berkas` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tb_berkas_santri`
--

INSERT INTO `tb_berkas_santri` (`id_berkas`, `nis_lokal`, `nama_berkas`, `file_berkas`) VALUES
(6, '1', '12311', 'Image_(6).jpg'),
(12, '1', '1233', '2921_kuota_CPNS_2018_kementrian_dan_daerah.pdf'),
(13, '1', 'nnn', 'tracker.txt');

-- --------------------------------------------------------

--
-- Table structure for table `tb_berkas_santriwati`
--

CREATE TABLE `tb_berkas_santriwati` (
  `id_berkas` int(11) NOT NULL,
  `nis_lokal` varchar(20) NOT NULL,
  `nama_berkas` varchar(30) NOT NULL,
  `file_berkas` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tb_berkas_santriwati`
--

INSERT INTO `tb_berkas_santriwati` (`id_berkas`, `nis_lokal`, `nama_berkas`, `file_berkas`) VALUES
(2, '1', 'bbb', '20180524102745.jpg'),
(10, '1', 'baru', '120180524102628.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `tb_berkas_staff`
--

CREATE TABLE `tb_berkas_staff` (
  `id_berkas` int(11) NOT NULL,
  `nip_staff` varchar(20) NOT NULL,
  `nama_berkas` varchar(30) NOT NULL,
  `file_berkas` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tb_berkas_staff`
--

INSERT INTO `tb_berkas_staff` (`id_berkas`, `nip_staff`, `nama_berkas`, `file_berkas`) VALUES
(3, '2', '21323', ''),
(4, '2', '1212', 'Barcode-EAN13-Bulgaria.jpg'),
(5, '2', '11', 'document.pdf');

-- --------------------------------------------------------

--
-- Table structure for table `tb_biodata_pendaftar`
--

CREATE TABLE `tb_biodata_pendaftar` (
  `id_biodata` varchar(20) NOT NULL,
  `email_pendaftar` varchar(40) NOT NULL,
  `nis_lokal` varchar(10) NOT NULL,
  `nisn` varchar(10) NOT NULL,
  `nik` varchar(20) NOT NULL,
  `nama_lengkap` varchar(50) NOT NULL,
  `tempat_lahir` varchar(40) NOT NULL,
  `tgl_lahir` date NOT NULL,
  `jenis_kelamin` varchar(2) NOT NULL,
  `alamat_lengkap` varchar(100) NOT NULL,
  `provinsi` varchar(10) NOT NULL,
  `kabupaten_kota` varchar(10) NOT NULL,
  `kecamatan` varchar(10) NOT NULL,
  `desa_kelurahan` varchar(10) NOT NULL,
  `kode_pos` varchar(10) NOT NULL,
  `hobi` text NOT NULL,
  `cita_cita` varchar(20) NOT NULL,
  `jenis_sekolah_asal` varchar(10) NOT NULL,
  `status_sekolah_asal` varchar(10) NOT NULL,
  `nomor_peserta_ujian` varchar(10) NOT NULL,
  `jarak_ke_sekolah` int(20) NOT NULL,
  `alat_transportasi` varchar(20) NOT NULL,
  `status_tempat_tinggal` varchar(20) NOT NULL,
  `no_kk` varchar(20) NOT NULL,
  `nik_ayah` varchar(20) NOT NULL,
  `nama_lengkap_ayah` varchar(50) NOT NULL,
  `pendidikan_terakhir_ayah` varchar(20) NOT NULL,
  `pekerjaan_ayah` varchar(20) NOT NULL,
  `nik_ibu` varchar(20) NOT NULL,
  `nama_lengkap_ibu` varchar(50) NOT NULL,
  `pendidikan_terakhir_ibu` varchar(20) NOT NULL,
  `pekerjaan_ibu` varchar(20) NOT NULL,
  `penghasilan_orang_tua` int(11) NOT NULL,
  `nik_wali` varchar(20) NOT NULL,
  `nama_lengkap_wali` varchar(50) NOT NULL,
  `pendidikan_terakhir_wali` varchar(20) NOT NULL,
  `pekerjaan_wali` varchar(20) NOT NULL,
  `penghasilan_wali` int(11) NOT NULL,
  `jumlah_saudara_kandung` varchar(3) NOT NULL,
  `hp` varchar(20) NOT NULL,
  `hpayah` varchar(20) NOT NULL,
  `hpibu` varchar(20) NOT NULL,
  `hpwali` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tb_biodata_pendaftar`
--

INSERT INTO `tb_biodata_pendaftar` (`id_biodata`, `email_pendaftar`, `nis_lokal`, `nisn`, `nik`, `nama_lengkap`, `tempat_lahir`, `tgl_lahir`, `jenis_kelamin`, `alamat_lengkap`, `provinsi`, `kabupaten_kota`, `kecamatan`, `desa_kelurahan`, `kode_pos`, `hobi`, `cita_cita`, `jenis_sekolah_asal`, `status_sekolah_asal`, `nomor_peserta_ujian`, `jarak_ke_sekolah`, `alat_transportasi`, `status_tempat_tinggal`, `no_kk`, `nik_ayah`, `nama_lengkap_ayah`, `pendidikan_terakhir_ayah`, `pekerjaan_ayah`, `nik_ibu`, `nama_lengkap_ibu`, `pendidikan_terakhir_ibu`, `pekerjaan_ibu`, `penghasilan_orang_tua`, `nik_wali`, `nama_lengkap_wali`, `pendidikan_terakhir_wali`, `pekerjaan_wali`, `penghasilan_wali`, `jumlah_saudara_kandung`, `hp`, `hpayah`, `hpibu`, `hpwali`) VALUES
('11', 'asdada@ada', '', '', '', 'olalala', '', '0000-00-00', 'P', '', '', '', '', '', '', '', '', '', '', '', 0, '', '', '', '', '', '', '', '', '', '', '', 0, '', '', '', '', 0, '', '', '', '', ''),
('201802130001', '1@edd.com', '123', '123', '', 'HALOO', 'banjarmasin', '1970-01-01', 'L', '', 'anis', 'bann', 'ass', 'asasd', '', '', '', '', '', '', 0, '', '', '', '', '', '', '', '', '', '', '', 0, '', '', '', '', 0, '', '081312706052', '', '', ''),
('201802140002', '1@e.con', '', '', '', '', '', '0000-00-00', '', '', '', '', '', '', '', '', '', '', '', '', 0, '', '', '', '', '', '', '', '', '', '', '', 0, '', '', '', '', 0, '', '', '', '', ''),
('201802150003', 'mdan@ff.co', '12', '12', '12', 'aa', 'asas', '1970-01-01', 'L', '', 'KALIMANTAN', 'KAB. BANJA', 'Sungai Pin', 'Sumber Har', '', '', '', '', '', '', 0, '', '', '', '', '', '', '', '', '', '', '', 0, '', '', '', '', 0, '', '', '', '', ''),
('201802150004', 'madd@gmail.c', '', '', '', '', '', '0000-00-00', '', '', '', '', '', '', '', '', '', '', '', '', 0, '', '', '', '', '', '', '', '', '', '', '', 0, '', '', '', '', 0, '', '', '', '', ''),
('201802150005', 'mmm@m.com', '123', '123', '', 'HALOO', 'banjarmasin', '1970-01-01', 'L', '', 'anis', 'bann', 'ass', 'asasd', '', '', '', '', '', '', 0, '', '', '', '', '', '', '', '', '', '', '', 0, '', '', '', '', 0, '', '081312706052', '', '', ''),
('201802150006', 'jj@gg.coo', '', '', '', '', '', '0000-00-00', '', '', '', '', '', '', '', '', '', '', '', '', 0, '', '', '', '', '', '', '', '', '', '', '', 0, '', '', '', '', 0, '', '', '', '', ''),
('201802150007', 'mmn@hh.cc', '', '', '', '', '', '0000-00-00', '', '', '', '', '', '', '', '', '', '', '', '', 0, '', '', '', '', '', '', '', '', '', '', '', 0, '', '', '', '', 0, '', '', '', '', ''),
('201802150008', 'madunstar@q.q', '', '', '', '', '', '0000-00-00', '', '', '', '', '', '', '', '', '', '', '', '', 0, '', '', '', '', '', '', '', '', '', '', '', 0, '', '', '', '', 0, '', '', '', '', ''),
('201802170009', 'maduncan@h.o', '', '', '', '', '', '0000-00-00', '', '', '', '', '', '', '', '', '', '', '', '', 0, '', '', '', '', '', '', '', '', '', '', '', 0, '', '', '', '', 0, '', '', '', '', ''),
('201802230010', 'ad@gmail.com', '', '', '', '', '', '0000-00-00', '', '', '', '', '', '', '', '', '', '', '', '', 0, '', '', '', '', '', '', '', '', '', '', '', 0, '', '', '', '', 0, '', '', '', '', ''),
('201802230011', 'afsdf@ff.m', '', '', '', '', '', '0000-00-00', '', '', '', '', '', '', '', '', '', '', '', '', 0, '', '', '', '', '', '', '', '', '', '', '', 0, '', '', '', '', 0, '', '', '', '', ''),
('201802230012', 'aaaa@a.a', '', '', '', '', '', '0000-00-00', '', '', '', '', '', '', '', '', '', '', '', '', 0, '', '', '', '', '', '', '', '', '', '', '', 0, '', '', '', '', 0, '', '', '', '', '');

-- --------------------------------------------------------

--
-- Table structure for table `tb_guru`
--

CREATE TABLE `tb_guru` (
  `nip_guru` varchar(20) NOT NULL,
  `nik` varchar(20) NOT NULL,
  `email_guru` varchar(40) NOT NULL,
  `hp_guru` varchar(20) NOT NULL,
  `nama_lengkap` varchar(50) NOT NULL,
  `tempat_lahir` varchar(40) NOT NULL,
  `tgl_lahir` date NOT NULL,
  `jenis_kelamin` varchar(2) NOT NULL,
  `alamat_lengkap` varchar(100) NOT NULL,
  `provinsi` varchar(255) NOT NULL,
  `kabupaten_kota` varchar(255) NOT NULL,
  `kecamatan` varchar(255) NOT NULL,
  `desa_kelurahan` varchar(255) NOT NULL,
  `kode_pos` varchar(255) NOT NULL,
  `pendidikan_terakhir` varchar(255) NOT NULL,
  `perguruan_tinggi` varchar(255) NOT NULL,
  `bidang_ilmu` varchar(255) NOT NULL,
  `tahun_masuk` varchar(255) NOT NULL,
  `tahun_lulus` varchar(255) NOT NULL,
  `foto` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tb_guru`
--

INSERT INTO `tb_guru` (`nip_guru`, `nik`, `email_guru`, `hp_guru`, `nama_lengkap`, `tempat_lahir`, `tgl_lahir`, `jenis_kelamin`, `alamat_lengkap`, `provinsi`, `kabupaten_kota`, `kecamatan`, `desa_kelurahan`, `kode_pos`, `pendidikan_terakhir`, `perguruan_tinggi`, `bidang_ilmu`, `tahun_masuk`, `tahun_lulus`, `foto`) VALUES
('12', '', '1@edd.com', '1', 'guru1', '1', '2018-02-09', 'L', '           1                               ', 'KALIMANTAN', 'KAB. HULU ', 'Amuntai Se', 'Kembang Ku', '1', '', '', '', '', '', ''),
('123', '', '', '', 'guru 2', 'BANJARMASIN', '2018-04-03', 'L', '', 'KALIMANTAN', 'KAB. BALAN', 'Awayan', 'Pulantan', '', '1', '', '', '', '', ''),
('1231', '', '', '', 'guru 4', 'BANJARMASIN', '2018-05-23', 'L', '', 'KALIMANTAN SELATAN', 'KAB. BANJAR', 'Tatah Makmur', 'Tatah Bangkal', '', 'kuliah', '', '', '', '', '');

-- --------------------------------------------------------

--
-- Table structure for table `tb_jenjang`
--

CREATE TABLE `tb_jenjang` (
  `jenjang` varchar(20) NOT NULL,
  `namajenjang` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tb_jenjang`
--

INSERT INTO `tb_jenjang` (`jenjang`, `namajenjang`) VALUES
('sd', 'sd');

-- --------------------------------------------------------

--
-- Table structure for table `tb_kecamatan`
--

CREATE TABLE `tb_kecamatan` (
  `id_kecamatan` int(11) NOT NULL,
  `nama_kecamatan` varchar(50) NOT NULL,
  `id_kota_kab` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tb_kecamatan`
--

INSERT INTO `tb_kecamatan` (`id_kecamatan`, `nama_kecamatan`, `id_kota_kab`) VALUES
(1, 'Takisung', 362),
(2, 'Jorong', 362),
(3, 'Pelaihari', 362),
(4, 'Kurau', 362),
(5, 'Bati Bati', 362),
(6, 'Panyipatan', 362),
(7, 'Kintap', 362),
(8, 'Tambang Ulang', 362),
(9, 'Batu Ampar', 362),
(10, 'Bajuin', 362),
(11, 'Bumi Makmur', 362),
(12, 'Pulausembilan', 363),
(13, 'Pulaulaut Barat', 363),
(14, 'Pulaulaut Selatan', 363),
(15, 'Pulaulaut Timur', 363),
(16, 'Pulausebuku', 363),
(17, 'Pulaulaut Utara', 363),
(18, 'Kelumpang Selatan', 363),
(19, 'Kelumpang Hulu', 363),
(20, 'Kelumpang Tengah', 363),
(21, 'Kelumpang Utara', 363),
(22, 'Pamukan Selatan', 363),
(23, 'Sampanahan', 363),
(24, 'Pamukan Utara', 363),
(25, 'Hampang', 363),
(26, 'Sungaidurian', 363),
(27, 'Pulaulaut Tengah', 363),
(28, 'Kelumpang Hilir', 363),
(29, 'Kelumpang Barat', 363),
(30, 'Pamukan Barat', 363),
(31, 'Pulaulaut Kepulauan', 363),
(32, 'Pulaulaut Tanjung Selayar', 363),
(33, 'Aluh Aluh', 364),
(34, 'Kertak Hanyar', 364),
(35, 'Gambut', 364),
(36, 'Sungai Tabuk', 364),
(37, 'Martapura', 364),
(38, 'Karang Intan', 364),
(39, 'Astambul', 364),
(40, 'Simpang Empat', 364),
(41, 'Pengarom', 364),
(42, 'Sungai Pinang', 364),
(43, 'Aranio', 364),
(44, 'Mataraman', 364),
(45, 'Beruntung Baru', 364),
(46, 'Martapura Barat', 364),
(47, 'Martapura Timur', 364),
(48, 'Sambung Makmur', 364),
(49, 'Paramasan', 364),
(50, 'Telaga Bauntung', 364),
(51, 'Tatah Makmur', 364),
(52, 'Tabunganen', 365),
(53, 'Tamban', 365),
(54, 'Anjir Pasar', 365),
(55, 'Anjir Muara', 365),
(56, 'Alalak', 365),
(57, 'Mandastana', 365),
(58, 'Rantau Badauh', 365),
(59, 'Belawang', 365),
(60, 'Cerbon', 365),
(61, 'Bakumpai', 365),
(62, 'Kuripan', 365),
(63, 'Tabukan', 365),
(64, 'Mekarsari', 365),
(65, 'Barambai', 365),
(66, 'Marabahan', 365),
(67, 'Wanaraya', 365),
(68, 'Jejangkit', 365),
(69, 'Binuang', 366),
(70, 'Tapin Selatan', 366),
(71, 'Tapin Tengah', 366),
(72, 'Tapin Utara', 366),
(73, 'Candi Laras Selatan', 366),
(74, 'Candi Laras Utara', 366),
(75, 'Bakarangan', 366),
(76, 'Piani', 366),
(77, 'Bungur', 366),
(78, 'Lokpaikat', 366),
(79, 'Salam Babaris', 366),
(80, 'Hatungun', 366),
(81, 'Sungai Raya', 367),
(82, 'Padang Batung', 367),
(83, 'Telaga Langsat', 367),
(84, 'Angkinang', 367),
(85, 'Kandangan', 367),
(86, 'Simpur', 367),
(87, 'Daha Selatan', 367),
(88, 'Daha Utara', 367),
(89, 'Kalumpang', 367),
(90, 'Loksado', 367),
(91, 'Daha Barat', 367),
(92, 'Haruyan', 368),
(93, 'Batu Benawa', 368),
(94, 'Labuan Amas Selatan', 368),
(95, 'Labuan Amas Utara', 368),
(96, 'Pandawan', 368),
(97, 'Barabai', 368),
(98, 'Batang Alai Selatan', 368),
(99, 'Batang Alai Utara', 368),
(100, 'Hantakan', 368),
(101, 'Batang Alai Timur', 368),
(102, 'Limpasu', 368),
(103, 'Danau Panggang', 369),
(104, 'Babirik', 369),
(105, 'Sungai Pandan', 369),
(106, 'Amuntai Selatan', 369),
(107, 'Amuntai Tengah', 369),
(108, 'Amuntai Utara', 369),
(109, 'Banjang', 369),
(110, 'Haur Gading', 369),
(111, 'Paminggir', 369),
(112, 'Sungai Tabukan', 369),
(113, 'Banua Lawas', 370),
(114, 'Kelua', 370),
(115, 'Tanta', 370),
(116, 'Tanjung', 370),
(117, 'Haruai', 370),
(118, 'Murung Pudak', 370),
(119, 'Muara Uya', 370),
(120, 'Muara Harus', 370),
(121, 'Pugaan', 370),
(122, 'Upau', 370),
(123, 'Jaro', 370),
(124, 'Bintang Ara', 370),
(125, 'Batu Licin', 371),
(126, 'Kusan Hilir', 371),
(127, 'Sungai Loban', 371),
(128, 'Satui', 371),
(129, 'Kusan Hulu', 371),
(130, 'Simpang Empat', 371),
(131, 'Karang Bintang', 371),
(132, 'Mantewe', 371),
(133, 'Angsana', 371),
(134, 'Kuranji', 371),
(135, 'Juai', 372),
(136, 'Halong', 372),
(137, 'Awayan', 372),
(138, 'Batu Mandi', 372),
(139, 'Lampihong', 372),
(140, 'Paringin', 372),
(141, 'Paringin Selatan', 372),
(142, 'Tebing Tinggi', 372),
(143, 'Banjarmasin Selatan', 373),
(144, 'Banjarmasin Timur', 373),
(145, 'Banjarmasin Barat', 373),
(146, 'Banjarmasin Utara', 373),
(147, 'Banjarmasin Tengah', 373),
(148, 'Landasan Ulin', 374),
(149, 'Cempaka', 374),
(150, 'Banjarbaru Utara', 374),
(151, 'Banjarbaru Selatan', 374),
(152, 'Liang Anggang', 374);

-- --------------------------------------------------------

--
-- Table structure for table `tb_kelas`
--

CREATE TABLE `tb_kelas` (
  `kd_kelas` int(11) NOT NULL,
  `nama_kelas` varchar(50) NOT NULL,
  `tingkat_kelas` varchar(5) NOT NULL,
  `kapasitas` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tb_kelas`
--

INSERT INTO `tb_kelas` (`kd_kelas`, `nama_kelas`, `tingkat_kelas`, `kapasitas`) VALUES
(1, 'SD', '2', 40),
(2, 'SMP', '2', 50);

-- --------------------------------------------------------

--
-- Table structure for table `tb_kelas_santri`
--

CREATE TABLE `tb_kelas_santri` (
  `id_kelas_santri` int(11) NOT NULL,
  `id_kelas_belajar` int(11) NOT NULL,
  `nis_lokal` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tb_kelas_santri`
--

INSERT INTO `tb_kelas_santri` (`id_kelas_santri`, `id_kelas_belajar`, `nis_lokal`) VALUES
(18, 5, '1'),
(19, 5, '12');

-- --------------------------------------------------------

--
-- Table structure for table `tb_kelas_santri_p`
--

CREATE TABLE `tb_kelas_santri_p` (
  `id_kelas_santri` int(11) NOT NULL,
  `id_kelas_belajar` int(11) NOT NULL,
  `nis_lokal` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tb_kelas_santri_p`
--

INSERT INTO `tb_kelas_santri_p` (`id_kelas_santri`, `id_kelas_belajar`, `nis_lokal`) VALUES
(1, 1, '1');

-- --------------------------------------------------------

--
-- Table structure for table `tb_kel_desa`
--

CREATE TABLE `tb_kel_desa` (
  `id_kel_desa` int(11) NOT NULL,
  `nama_kel_desa` varchar(50) NOT NULL,
  `id_kecamatan` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tb_kel_desa`
--

INSERT INTO `tb_kel_desa` (`id_kel_desa`, `nama_kel_desa`, `id_kecamatan`) VALUES
(1, 'Banua lawas', 1),
(2, 'Tabanio', 1),
(3, 'Kuala Tambangan', 1),
(4, 'Takisung', 1),
(5, 'Gunung Makmur', 1),
(6, 'Banua Tengah', 1),
(7, 'Ranggang', 1),
(8, 'Pagatan Besar', 1),
(9, 'Batilai', 1),
(10, 'Ranggang Dalam', 1),
(11, 'Telaga langsat', 1),
(12, 'Sumber Makmur', 1),
(13, 'Sabubur', 2),
(14, 'Jorong', 2),
(15, 'Asam-Asam', 2),
(16, 'Batalang', 2),
(17, 'Swarangan', 2),
(18, 'Muara Asam-Asam', 2),
(19, 'Alur', 2),
(20, 'Asri Mulya', 2),
(21, 'Karang Rejo', 2),
(22, 'Asam Jaya', 2),
(23, 'Simpang Empat Sungaibaru', 2),
(24, 'Sarang Halang', 3),
(25, 'Karang Taruna', 3),
(26, 'Pelaihari', 3),
(27, 'Angsau', 3),
(28, 'Pabahanan', 3),
(29, 'Bumi Jaya', 3),
(30, 'Sungai Riam', 3),
(31, 'Tampang', 3),
(32, 'Telaga', 3),
(33, 'Panjaratan', 3),
(34, 'Atu-atu', 3),
(35, 'Panggung', 3),
(36, 'Tungkaran', 3),
(37, 'Ujung Batu', 3),
(38, 'Panggung Baru', 3),
(39, 'Ambungan', 3),
(40, 'Guntung Besar', 3),
(41, 'Kampung Baru', 3),
(42, 'Sumber Mulia', 3),
(43, 'Pemuda', 3),
(44, 'Sungai Bakau', 4),
(45, 'Maluka Baulin', 4),
(46, 'Bawah Layung', 4),
(47, 'Tambak Sarinah', 4),
(48, 'Kali Besar', 4),
(49, 'Handil Negara', 4),
(50, 'Padang Luas', 4),
(51, 'Kurau Bawah', 4),
(52, 'Tambak Karya', 4),
(53, 'Raden', 4),
(54, 'Sarikandi', 4),
(55, 'Benua Raya', 5),
(56, 'Bati-Bati', 5),
(57, 'Ujung', 5),
(58, 'Liang Anggang', 5),
(59, 'Bentok Kampung', 5),
(60, 'Bentok Darat', 5),
(61, 'Banyu Irang', 5),
(62, 'Nusa Indah', 5),
(63, 'Pandahan', 5),
(64, 'Padang', 5),
(65, 'Ujung Baru', 5),
(66, 'Sambangan', 5),
(67, 'Kait-kait', 5),
(68, 'Kait-kait Baru', 5),
(69, 'Batu Tungku', 6),
(70, 'Panyipatan', 6),
(71, 'Kandangan Baru', 6),
(72, 'Kandangan Lama', 6),
(73, 'Batakan', 6),
(74, 'Kuringkit', 6),
(75, 'Tanjung Dewa', 6),
(76, 'Suka Ramah', 6),
(77, 'Batu Mulya', 6),
(78, 'Bumi Asih', 6),
(79, 'Pandan Sari', 7),
(80, 'Kintap', 7),
(81, 'Kintapura', 7),
(82, 'Sungai Cuka', 7),
(83, 'Riam Adungan', 7),
(84, 'Muara Kintap', 7),
(85, 'Salaman', 7),
(86, 'Kintap Kecil', 7),
(87, 'Pasir Putih', 7),
(88, 'Sumber Jaya', 7),
(89, 'Bukit Mulia', 7),
(90, 'Kebun Raya', 7),
(91, 'Mekar Raya', 7),
(92, 'Sebamban Baru', 7),
(93, 'Tambang Ulang', 8),
(94, 'Sungai Pinang', 8),
(95, 'Martadah', 8),
(96, 'Sungai Jelai', 8),
(97, 'Bingkulu', 8),
(98, 'Gunung Raja', 8),
(99, 'Pulau Sari', 8),
(100, 'Kayu Habang', 8),
(101, 'Martadah Baru', 8),
(102, 'Batu Ampar', 9),
(103, 'Gunung Mas', 9),
(104, 'Tajau Mulya', 9),
(105, 'Jilatan', 9),
(106, 'Durian Bungkuk', 9),
(107, 'Ambawang', 9),
(108, 'Damit', 9),
(109, 'Gunung Melati', 9),
(110, 'Bluru', 9),
(111, 'Pantai Linuh', 9),
(112, 'Damit Hulu', 9),
(113, 'Jilatan Alur', 9),
(114, 'Damar Lima', 9),
(115, 'Tajau Pecah', 9),
(116, 'Bajuin', 10),
(117, 'Sungai Bakar', 10),
(118, 'Ketapang', 10),
(119, 'Tirta Jaya', 10),
(120, 'Galam', 10),
(121, 'Pemalongan', 10),
(122, 'Kunyit', 10),
(123, 'Tebing Siring', 10),
(124, 'Tanjung', 10),
(125, 'Handil Babirik', 11),
(126, 'Kurau Utara', 11),
(127, 'Bumi Harapan', 11),
(128, 'Sungai Rasau', 11),
(129, 'Pantai Harapan', 11),
(130, 'Handil Suruk', 11),
(131, 'Handil Gayam', 11),
(132, 'Handil Birayang Atas', 11),
(133, 'Handil Birayang Bawah', 11),
(134, 'Handil Maluka', 11),
(135, 'Handil Labuan Amas', 11),
(136, 'Labuan Barat', 12),
(137, 'Teluksungai', 12),
(138, 'Maradapan', 12),
(139, 'Tengah', 12),
(140, 'Tanjungnyiur', 12),
(141, 'Lontar Selatan', 13),
(142, 'Lontar Timur', 13),
(143, 'Sebanti', 13),
(144, 'Sepagar', 13),
(145, 'Semaras', 13),
(146, 'Terangkeh', 13),
(147, 'Gemuruh', 13),
(148, 'Tapian Balai', 13),
(149, 'Lontar Utara', 13),
(150, 'Sumber Sari', 13),
(151, 'Subur Makmur', 13),
(152, 'Teluksirih', 14),
(153, 'Sungaibahim', 14),
(154, 'Tanjungseloka', 14),
(155, 'Tanjungserudung', 14),
(156, 'Alle-Alle', 14),
(157, 'Sungaibulan', 14),
(158, 'Labuan Mas', 14),
(159, 'Tanjungseloka Utara', 14),
(160, 'Batu Tunau', 15),
(161, 'Sejakah', 15),
(162, 'Bekambit', 15),
(163, 'Langkang Baru', 15),
(164, 'Langkang Lama', 15),
(165, 'Sungailimau', 15),
(166, 'Berangas', 15),
(167, 'Tanjungpengharapan', 15),
(168, 'Betung', 15),
(169, 'Telukmesjid', 15),
(170, 'Telukgosong', 15),
(171, 'Kulipak', 15),
(172, 'Karangsari Indah', 15),
(173, 'Bekambit Asri', 15),
(174, 'Sekapung', 16),
(175, 'Kanibungan', 16),
(176, 'Mandin', 16),
(177, 'Serakaman', 16),
(178, 'Sungaibali', 16),
(179, 'Balambus', 16),
(180, 'Rampa', 16),
(181, 'Ujung', 16),
(182, 'Kotabaru Hulu', 17),
(183, 'Baharu Selatan', 17),
(184, 'Kotabaru Tengah', 17),
(185, 'Kotabaru Hilir', 17),
(186, 'Megasari', 17),
(187, 'Sebelimbingan', 17),
(188, 'Stagen', 17),
(189, 'Rampa', 17),
(190, 'Sungaitaib', 17),
(191, 'Semayap', 17),
(192, 'Dirgahayu', 17),
(193, 'Sebatung', 17),
(194, 'Baharu Utara', 17),
(195, 'Tirawan', 17),
(196, 'Hilir Muara', 17),
(197, 'Sigam', 17),
(198, 'Sarang Tiung', 17),
(199, 'Gunungiulin', 17),
(200, 'Gedambaan', 17),
(201, 'Gunungsari', 17),
(202, 'Batuah', 17),
(203, 'Tanjungpangga', 18),
(204, 'Pembalacanan', 18),
(205, 'Sungainipah', 18),
(206, 'Pantai', 18),
(207, 'Sangking Baru', 18),
(208, 'Suka Maju', 18),
(209, 'Sungaikupang Jaya', 18),
(210, 'Pantai Baru', 18),
(211, 'Bumi Asih', 18),
(212, 'Cantung Kiri Hilir', 19),
(213, 'Karang Payau', 19),
(214, 'Banua Lawas', 19),
(215, 'Sungaikupang', 19),
(216, 'Bangkalan Melayu', 19),
(217, 'Bangkalan Dayak', 19),
(218, 'Laburan', 19),
(219, 'Karang Liwar', 19),
(220, 'Mangkirana', 19),
(221, 'Sidomulyo', 19),
(222, 'Tanjungbatu', 20),
(223, 'Sungaipunggawa', 20),
(224, 'Tanah Rata', 20),
(225, 'Sebuli', 20),
(226, 'Sembilang', 20),
(227, 'Tamiang Bakung', 20),
(228, 'Sang-Sang', 20),
(229, 'Sungaipinang', 20),
(230, 'Tanjungselayar', 20),
(231, 'Senakin Seberang', 20),
(232, 'Senakin', 20),
(233, 'Tebing Tinggi', 20),
(234, 'Geronggang', 20),
(235, 'Sungaihanyar', 21),
(236, 'Sungaiseluang', 21),
(237, 'Pudi', 21),
(238, 'Mangga', 21),
(239, 'Wilas', 21),
(240, 'Pudi Seberang', 21),
(241, 'Sulangkit', 21),
(242, 'Sekandis', 22),
(243, 'Gununcalang', 22),
(244, 'Talusi', 22),
(245, 'Sakalimau', 22),
(246, 'Tanjungsamalantakan', 22),
(247, 'Sakadoyan', 22),
(248, 'Rampa Cengal', 22),
(249, 'Sesulung', 22),
(250, 'Pondok Labu', 22),
(251, 'Mulyodadi', 22),
(252, 'Sukadana', 22),
(253, 'Sepapah', 23),
(254, 'Sungaibetung', 23),
(255, 'Basuang', 23),
(256, 'Gunungbatu Besar', 23),
(257, 'Sampanahan Hulu', 23),
(258, 'Rampa Manunggul', 23),
(259, 'Papaan', 23),
(260, 'Sampanahan Hilir', 23),
(261, 'Banjar Sari', 23),
(262, 'Suka Maju', 23),
(263, 'Bepara', 24),
(264, 'Betung', 24),
(265, 'Sekayu Baru', 24),
(266, 'Bakau', 24),
(267, 'Binturung', 24),
(268, 'Harapan Baru', 24),
(269, 'Balaimea', 24),
(270, 'Tamiang', 24),
(271, 'Kalian', 24),
(272, 'Mulyoharjo', 24),
(273, 'Pamukan Indah', 24),
(274, 'Wonorejo', 24),
(275, 'Lintang Jaya', 24),
(276, 'Hampang', 25),
(277, 'Cantung Kiri Hulu', 25),
(278, 'Cantung Kanan', 25),
(279, 'Muara Orie', 25),
(280, 'Lalapin', 25),
(281, 'Peramasan 2 x 9', 25),
(282, 'Limbur', 25),
(283, 'Hulu Sampanahan', 25),
(284, 'Limbungan', 25),
(285, 'Buluh Kuning', 26),
(286, 'Gendang Timburu', 26),
(287, 'Manunggal Lama', 26),
(288, 'Rantau Budha', 26),
(289, 'Manunggal Baru', 26),
(290, 'Terobong Sari', 26),
(291, 'Rantau Jaya', 26),
(292, 'Semisir', 27),
(293, 'Sungaipasir', 27),
(294, 'Mekarpura', 27),
(295, 'Selaru', 27),
(296, 'Sungup Kanan', 27),
(297, 'Pantaibaru', 27),
(298, 'Salino', 27),
(299, 'Serongga', 28),
(300, 'Tarjun', 28),
(301, 'Langadai', 28),
(302, 'Pulaupanci', 28),
(303, 'Pelajau Baru', 28),
(304, 'Tegal Rejo', 28),
(305, 'Mandala', 28),
(306, 'Telagasari', 28),
(307, 'Sahapi', 28),
(308, 'Siayuh', 29),
(309, 'Bungkukan', 29),
(310, 'Batang Kulur', 29),
(311, 'Tanjung Sari', 29),
(312, 'Magalau Hilir', 29),
(313, 'Magalau Hulu', 29),
(314, 'Sengayam', 30),
(315, 'Mayang Sari', 30),
(316, 'Marga Jaya', 30),
(317, 'Mangka', 30),
(318, 'Batuah', 30),
(319, 'Tanjunglalak Utara', 31),
(320, 'Tanjunglalak Selatan', 31),
(321, 'Pulaukerayaan', 31),
(322, 'Kerayaan Utara', 31),
(323, 'Pulaukerasian', 31),
(324, 'Pulaukerumputan', 31),
(325, 'Telukaru', 31),
(326, 'Telukkemuning', 31),
(327, 'Oka-Oka', 31),
(328, 'Tanjungpelayar', 32),
(329, 'Tanjungsungkai', 32),
(330, 'Tanjungtengah', 32),
(331, 'Tanjungkunyit', 32),
(332, 'Teluktamiyang', 32),
(333, 'Gosongpanjang', 32),
(334, 'Kampung Baru', 32),
(335, 'Tata Mekar', 32),
(336, 'Bandar Raya', 32),
(337, 'Bangun Rejo', 32),
(338, 'Bakambat', 33),
(339, 'Tanipah', 33),
(340, 'Pemurus', 33),
(341, 'Simpang Warga', 33),
(342, 'Bunipah', 33),
(343, 'Aluh Aluh Besar', 33),
(344, 'Aluh Aluh Kecil', 33),
(345, 'Podok', 33),
(346, 'Handil Bujur', 33),
(347, 'Kuin Besar', 33),
(348, 'Terapu', 33),
(349, 'Labat Muara', 33),
(350, 'Pulantan', 33),
(351, 'Aluh Aluh Kecil Muara', 33),
(352, 'Simpang Warga Dalam', 33),
(353, 'Kuin Kecil', 33),
(354, 'Handil Baru', 33),
(355, 'Balimau', 33),
(356, 'Sungai Musang', 33),
(357, 'Kertak Hanyar I Tengah', 34),
(358, 'Manarap Lama', 34),
(359, 'Mandarsari', 34),
(360, 'Pemangkih Laut', 34),
(361, 'Simpang Empat', 34),
(362, 'Sungai Lakum', 34),
(363, 'Manarap Baru', 34),
(364, 'Kertak Hanyar II Darat', 34),
(365, 'Pasar Kamis', 34),
(366, 'Manarap Tengah', 34),
(367, 'Belayung Baru', 34),
(368, 'Benua Hanyar', 34),
(369, 'Mekar Raya Baru', 34),
(370, 'Gambut', 35),
(371, 'Gambut Barat', 35),
(372, 'Sungai Kupang', 35),
(373, 'Guntung Papuyu', 35),
(374, 'Makmur', 35),
(375, 'Tambak Sirang  Darat', 35),
(376, 'Tambak Sirang Laut', 35),
(377, 'Malintang', 35),
(378, 'Kayu Bawang', 35),
(379, 'Banyu Hirang', 35),
(380, 'Guntung Ujung', 35),
(381, 'Tambak Sirang Baru', 35),
(382, 'Malintang Baru', 35),
(383, 'Keladan Baru', 35),
(384, 'Sungai Lulut', 36),
(385, 'Sungai Bakung', 36),
(386, 'Sungai Tandipah', 36),
(387, 'Lok Baintan', 36),
(388, 'Gudang Hirang', 36),
(389, 'Sungai Pinang', 36),
(390, 'Pembantanan', 36),
(391, 'Pemakuan', 36),
(392, 'Sungai Tabuk Kota', 36),
(393, 'Sungai Tabuk Keramat', 36),
(394, 'Lok Buntar', 36),
(395, 'Gudang Tengah', 36),
(396, 'Pejambuan', 36),
(397, 'Keliling Benteng Ilir', 36),
(398, 'Sungai Pinang Baru', 36),
(399, 'Paku Alam', 36),
(400, 'Liok Baintan Dalam', 36),
(401, 'Pematang Panjang', 36),
(402, 'Sungai Bangkal', 36),
(403, 'Tajau Landung', 36),
(404, 'Abumbun Jaya', 36),
(405, 'Keraton', 37),
(406, 'Jawa', 37),
(407, 'Pasayangan', 37),
(408, 'Murung Keraton', 37),
(409, 'Sungai Paring', 37),
(410, 'Tanjung Rema Darat', 37),
(411, 'Sekumpul', 37),
(412, 'Sungai Sipai', 37),
(413, 'Pasayangan Selatan', 37),
(414, 'Tanjung Rema', 37),
(415, 'Bincau', 37),
(416, 'Murung Kenanga', 37),
(417, 'Tunggul Irang', 37),
(418, 'Tambak Baru', 37),
(419, 'Cindai Alus', 37),
(420, 'Tungkaran', 37),
(421, 'Tambak Baru Ulu', 37),
(422, 'Bincau Muara', 37),
(423, 'Tunggul Irang Ilir', 37),
(424, 'Tunggul Irang Ulu', 37),
(425, 'Labuan Tabu', 37),
(426, 'Indra Sari', 37),
(427, 'Jawa Laut', 37),
(428, 'Pasayangan Utara', 37),
(429, 'Pasayangan Barat', 37),
(430, 'Tambak Baru Ilir', 37),
(431, 'Kiram', 38),
(432, 'Mandiangin Barat', 38),
(433, 'Karang Intan', 38),
(434, 'Pandak Daun', 38),
(435, 'Jingah Habang Hulu', 38),
(436, 'Mali-Mali', 38),
(437, 'Lok Tangga', 38),
(438, 'Lihung', 38),
(439, 'Biih', 38),
(440, 'Panyambaran', 38),
(441, 'Sungai  Alang', 38),
(442, 'Sungai  Asam', 38),
(443, 'Mandikapau Timur', 38),
(444, 'Awang Bangkal Barat', 38),
(445, 'Awang Bangkal Timur', 38),
(446, 'Sungai Besar', 38),
(447, 'Mandiangin Timur', 38),
(448, 'Pasar Lama', 38),
(449, 'Jingah Habang Hilir', 38),
(450, 'Sungai  Arfat', 38),
(451, 'Padang Panjang', 38),
(452, 'Sungai  Landas', 38),
(453, 'Abirau', 38),
(454, 'Pulau Nyiur', 38),
(455, 'Mandi Kapau Barat', 38),
(456, 'Balau', 38),
(457, 'Pingaran', 39),
(458, 'Jati Baru', 39),
(459, 'Pasar Jati', 39),
(460, 'Danau Salak', 39),
(461, 'Tambak Danau', 39),
(462, 'Kaliukan', 39),
(463, 'Sungai  Alat', 39),
(464, 'Pingaran Ulu', 39),
(465, 'Astambul Kota', 39),
(466, 'Astambul Seberang', 39),
(467, 'Sungai Tuan Ulu', 39),
(468, 'Benua Anyar ST', 39),
(469, 'Kelampaian Ilir', 39),
(470, 'Kelampaian Ulu', 39),
(471, 'Limamar', 39),
(472, 'Lok Gabang', 39),
(473, 'Pematang Hambawang', 39),
(474, 'Kelampaian', 39),
(475, 'Tambangan', 39),
(476, 'Benua Anyar DS', 39),
(477, 'Sungai Tuan Ilir', 39),
(478, 'Minggu Raya', 39),
(479, 'Makmur Karya', 40),
(480, 'Alalak Padang', 40),
(481, 'Benua Anyar', 40),
(482, 'Cintapuri', 40),
(483, 'Paku', 40),
(484, 'Simpang Empat', 40),
(485, 'Lok Cantung', 40),
(486, 'Tanah Intan', 40),
(487, 'Sungai Raya', 40),
(488, 'Sungkai', 40),
(489, 'Sungai Langsat', 40),
(490, 'Lawiran', 40),
(491, 'Surian Hanyar', 40),
(492, 'Keramat Mina', 40),
(493, 'Batu Balian', 40),
(494, 'Cabi', 40),
(495, 'Berkat Mulia', 40),
(496, 'Sungai Baru', 40),
(497, 'Paring Tali', 40),
(498, 'Garis Hanyar', 40),
(499, 'Pasar Lama', 40),
(500, 'Sungai Tabuk', 40),
(501, 'Simpang Lima', 40),
(502, 'Karya Makmur II', 40),
(503, 'Sindang Jaya', 40),
(504, 'Sumber Sari', 40),
(505, 'Maniapun', 41),
(506, 'Lok Tunggul', 41),
(507, 'Lobang Baru', 41),
(508, 'Pengaron', 41),
(509, 'Benteng', 41),
(510, 'Ati\'im', 41),
(511, 'Alimukim', 41),
(512, 'Penyiuran', 41),
(513, 'Antaraku', 41),
(514, 'Mangkauk', 41),
(515, 'Kertak Empat', 41),
(516, 'Lumpangi', 41),
(517, 'Kupang Rejo', 42),
(518, 'Sungai Pinang', 42),
(519, 'Kahelaan', 42),
(520, 'Rantau Nangka', 42),
(521, 'Rantau Bakula', 42),
(522, 'Belimbing Lama', 42),
(523, 'Sumber Baru', 42),
(524, 'Belimbing Baru', 42),
(525, 'Pakutik', 42),
(526, 'Sumber Harapan', 42),
(527, 'Hakim Makmur', 42),
(528, 'Tiwingan', 43),
(529, 'Kala\'an', 43),
(530, 'Benua Riam', 43),
(531, 'Bunglai', 43),
(532, 'Apuai', 43),
(533, 'Rantau Bujur', 43),
(534, 'Artain', 43),
(535, 'Rantau Balai', 43),
(536, 'Tiwingan Baru', 43),
(537, 'Belangian', 43),
(538, 'Aranio', 43),
(539, 'Pa\'au', 43),
(540, 'Baru', 44),
(541, 'Bawahan Pasar', 44),
(542, 'Bawahan Seberang', 44),
(543, 'Pematang Danau', 44),
(544, 'Surian', 44),
(545, 'Mataraman', 44),
(546, 'Simpang Tiga', 44),
(547, 'Bawahan Selan', 44),
(548, 'Takuti', 44),
(549, 'Pasiraman', 44),
(550, 'Lok Tamu', 44),
(551, 'Sungai Jati', 44),
(552, 'Mangkalawat', 44),
(553, 'Gunung Ulin', 44),
(554, 'Tanah Abang', 44),
(555, 'Pindahan Baru', 45),
(556, 'Handil Purai', 45),
(557, 'Kampung Baru', 45),
(558, 'Lawahan', 45),
(559, 'Babirik', 45),
(560, 'Jambu Burung', 45),
(561, 'Tambak Padi', 45),
(562, 'Haur Kuning', 45),
(563, 'Jambu Raya', 45),
(564, 'Rumpiang', 45),
(565, 'Salat Makmur', 45),
(566, 'Muara Halayung', 45),
(567, 'Telok Selong', 46),
(568, 'Sei Batang', 46),
(569, 'Sei Batang Ilir', 46),
(570, 'Sei Ranggas', 46),
(571, 'Panggalaman', 46),
(572, 'Keliling Benteng Ulu', 46),
(573, 'Antasan Sutun', 46),
(574, 'Sei Ranggas Ulu', 46),
(575, 'Sei Ranggas Hambuku', 46),
(576, 'Kel. Benteng Tengah', 46),
(577, 'Teluk Selong Ulu', 46),
(578, 'Tangkas', 46),
(579, 'Sei Ranggas Tengah', 46),
(580, 'Pekauman', 47),
(581, 'Keramat', 47),
(582, 'Antasan Senor', 47),
(583, 'Tambak Anyar', 47),
(584, 'Melayu', 47),
(585, 'Melayu Ilir', 47),
(586, 'Akar Begantung Ulu', 47),
(587, 'Dalam Pagar', 47),
(588, 'Tambak Anyar Ulu', 47),
(589, 'Pematang Baru', 47),
(590, 'Melayu Tengah', 47),
(591, 'Akar Baru', 47),
(592, 'Dalam Pagar Ulu', 47),
(593, 'Pekauman Ulu', 47),
(594, 'Mekar', 47),
(595, 'Tambak Anyar Ilir', 47),
(596, 'Sei Kitano', 47),
(597, 'Keramat Baru', 47),
(598, 'Pekauman Dalam', 47),
(599, 'Antasan Senor Ilir', 47),
(600, 'Madurejo', 48),
(601, 'Baliangin', 48),
(602, 'Gunung Batu', 48),
(603, 'Batang Banyu', 48),
(604, 'Sungai Lurus', 48),
(605, 'Batu Tanam', 48),
(606, 'Pasar Baru', 48),
(607, 'Paramasan Atas', 49),
(608, 'Paramasan Bawah', 49),
(609, 'Remo', 49),
(610, 'Angkipih', 49),
(611, 'Rantau Bujur', 50),
(612, 'Lok Tanah', 50),
(613, 'Telaga Baru', 50),
(614, 'Rampah', 50),
(615, 'Tatah Bangkal', 51),
(616, 'Bangkal Tengah', 51),
(617, 'Layap Baru', 51),
(618, 'Tatah Layap', 51),
(619, 'Mekar Sari', 51),
(620, 'Pandan Sari', 51),
(621, 'Tampang Awang', 51),
(622, 'Pemangkih Darat', 51),
(623, 'Pemangkih Baru', 51),
(624, 'Pemangkih Tengah', 51),
(625, 'Jaruju', 51),
(626, 'Jaruju Laut', 51),
(627, 'Taibah Raya', 51),
(628, 'Kuala Lupak', 52),
(629, 'Sungai Telan Besar', 52),
(630, 'Sungai Telan Kecil', 52),
(631, 'Tabunganen Muara', 52),
(632, 'Tabunganen Tengah', 52),
(633, 'Karya Baru', 52),
(634, 'Tabunganen Perumus', 52),
(635, 'Sungai Teras Dalam', 52),
(636, 'Sungai Jingah Besar', 52),
(637, 'Tabunganen Kecil', 52),
(638, 'Sei Teras Luar', 52),
(639, 'Sei Telan Muara', 52),
(640, 'Beringin Kencana', 52),
(641, 'Tanggul Rejo', 52),
(642, 'Purwosari II', 53),
(643, 'Purwosari I', 53),
(644, 'Tamban Bangun', 53),
(645, 'Tamban Muara', 53),
(646, 'Tamban Kecil', 53),
(647, 'Tinggiran II Luar', 53),
(648, 'Jelapat I', 53),
(649, 'Tamban Muara Baru', 53),
(650, 'Purwosari Baru', 53),
(651, 'Sekata Baru', 53),
(652, 'Koanda', 53),
(653, 'Damsari', 53),
(654, 'Sidorejo', 53),
(655, 'Jelapat Baru', 53),
(656, 'Tamban Bangun Baru', 53),
(657, 'Tamban Sari Baru', 53),
(658, 'Andaman', 54),
(659, 'Hilir Mesjid', 54),
(660, 'Anjir Pasar Kota', 54),
(661, 'Banyiur', 54),
(662, 'Gandaraya', 54),
(663, 'Gandaria', 54),
(664, 'Anjir Pasar Kota II', 54),
(665, 'Andaman II', 54),
(666, 'Anjir Seberang Pasar II', 54),
(667, 'Anjir Seberang Pasar I', 54),
(668, 'Anjir Pasar Lama', 54),
(669, 'Pandan Sari', 54),
(670, 'Mentaren', 54),
(671, 'Barunai Baru', 54),
(672, 'Danau Karya', 54),
(673, 'Anjir Serapat Muara', 55),
(674, 'Anjir Muara Kota', 55),
(675, 'Patih Muhur', 55),
(676, 'Anjir Muara Kota Tengah', 55),
(677, 'Anjir Serapat Lama', 55),
(678, 'Anjir Serapat Baru', 55),
(679, 'Anjir Muara Lama', 55),
(680, 'Sungai Punggu', 55),
(681, 'Anjir Serapat Baru I', 55),
(682, 'Patih Muhur Baru', 55),
(683, 'Sei Punggu Baru', 55),
(684, 'Anjir Serapat Muara I', 55),
(685, 'Sepakat Barsama', 55),
(686, 'Marabahan Baru', 55),
(687, 'Beringin Jaya', 55),
(688, 'Berangas Barat', 56),
(689, 'Berangas', 56),
(690, 'Handil Bakti', 56),
(691, 'Pulau Alalak', 56),
(692, 'Pulau Sewangi', 56),
(693, 'Pulau Sugara', 56),
(694, 'Sungai Lumbah', 56),
(695, 'Berangas Timur', 56),
(696, 'Sei Semangat Bhakti', 56),
(697, 'Sungai Pitung', 56),
(698, 'Belandean Muara', 56),
(699, 'Belandean', 56),
(700, 'Tanjung Harapan', 56),
(701, 'Semangat Dalam', 56),
(702, 'Beringin', 56),
(703, 'Semangat Karya', 56),
(704, 'Panca Karya', 56),
(705, 'Tatah Mesjid', 56),
(706, 'Terantang', 57),
(707, 'Tanipah', 57),
(708, 'Puntik Luar', 57),
(709, 'Puntik Dalam', 57),
(710, 'Tabing Rimbah', 57),
(711, 'Pantai Hambawang', 57),
(712, 'Tatah Alayung', 57),
(713, 'Puntik Tengah', 57),
(714, 'Lokrawa', 57),
(715, 'Sei Ramania', 57),
(716, 'Bangkit Baru', 57),
(717, 'Antasan Segera', 57),
(718, 'Karang Bunga', 57),
(719, 'Karang Indah', 57),
(720, 'Sungai Pantai', 58),
(721, 'Pindahan Baru', 58),
(722, 'Sungai Gampa Asahi', 58),
(723, 'Sungai Gampa', 58),
(724, 'Sungai Sahurai', 58),
(725, 'Simpang Arya', 58),
(726, 'Sinar Baru', 58),
(727, 'Sungai Bamban', 58),
(728, 'Danda Jaya', 58),
(729, 'Murung Keramat', 59),
(730, 'Sungai Seluang', 59),
(731, 'Belawang', 59),
(732, 'Bambangin', 59),
(733, 'Sukaramai', 59),
(734, 'Sungai Seluang Pasar', 59),
(735, 'Samuda', 59),
(736, 'Parimata', 59),
(737, 'Karang Dukuh', 59),
(738, 'Patih Selera', 59),
(739, 'Karang Buah', 59),
(740, 'Binaan Baru', 59),
(741, 'Rangga Surya', 59),
(742, 'Sungai Kambat', 60),
(743, 'Sungai Rasau', 60),
(744, 'Simpang Nungki', 60),
(745, 'Sawahan', 60),
(746, 'Bantuil', 60),
(747, 'Badandan', 60),
(748, 'Sei Tunjang', 60),
(749, 'Sei Raya', 60),
(750, 'Lepasan', 61),
(751, 'Banua Anyar', 61),
(752, 'Murung Raya', 61),
(753, 'Palingkau', 61),
(754, 'Balukung', 61),
(755, 'Banitan', 61),
(756, 'Batik', 61),
(757, 'Bahalayung', 61),
(758, 'Sungai Selirik', 61),
(759, 'Jambu Baru', 62),
(760, 'Jambu', 62),
(761, 'Kabuau', 62),
(762, 'Jarenang', 62),
(763, 'Tabatan', 62),
(764, 'Kuripan', 62),
(765, 'Tabatan Baru', 62),
(766, 'Asia Baru', 62),
(767, 'Rimbun Tulang', 62),
(768, 'Pantang Raya', 63),
(769, 'Tabukan Raya', 63),
(770, 'Teluk Tamba', 63),
(771, 'Rantau Bamban', 63),
(772, 'Tamba Jaya', 63),
(773, 'Muara Pulau', 63),
(774, 'Karya Indah', 63),
(775, 'Bandar Karya', 63),
(776, 'Karya Makmur', 63),
(777, 'Karya Jadi', 63),
(778, 'Pantang Baru', 63),
(779, 'Mekarsari', 64),
(780, 'Tamban Raya', 64),
(781, 'Tinggiran Tengah', 64),
(782, 'Tinggiran Darat', 64),
(783, 'Jelapat II', 64),
(784, 'Tamban Raya Baru', 64),
(785, 'Tinggiran Baru', 64),
(786, 'Karang Mekar', 64),
(787, 'Indah Sari', 64),
(788, 'Barambai', 65),
(789, 'Sungai Kali', 65),
(790, 'Pendalaman', 65),
(791, 'Handil Barabai', 65),
(792, 'Bagagap', 65),
(793, 'Barambai Karya Tani', 65),
(794, 'Pendalaman Baru', 65),
(795, 'Karya Baru', 65),
(796, 'Barambai Kolam Kiri', 65),
(797, 'Barambai Kolam Kanan', 65),
(798, 'Barambai Kolam Kiri Dalam', 65),
(799, 'Marabahan Kota', 66),
(800, 'Ulu Benteng', 66),
(801, 'Penghulu', 66),
(802, 'Bagus', 66),
(803, 'Baliuk', 66),
(804, 'Antar Baru', 66),
(805, 'Antar Jaya', 66),
(806, 'Antar Raya', 66),
(807, 'Sido Makmur', 66),
(808, 'Karya Maju', 66),
(809, 'Kolam Kiri', 67),
(810, 'Roham Raya', 67),
(811, 'Simpang Jaya', 67),
(812, 'Tumih', 67),
(813, 'Pinang Habang', 67),
(814, 'Waringin Kencana', 67),
(815, 'Babat Raya', 67),
(816, 'Kolam Kanan', 67),
(817, 'Sidomulyo', 67),
(818, 'Kolam Makmur', 67),
(819, 'Surya Kanta', 67),
(820, 'Sumber Rahayu', 67),
(821, 'Dwipasari', 67),
(822, 'Sampurna', 68),
(823, 'Jejangkit Barat', 68),
(824, 'Bahandang', 68),
(825, 'Jejangkit Timur', 68),
(826, 'Cahaya Baru', 68),
(827, 'Jejangkit Pasar', 68),
(828, 'Jejangkit Muara', 68),
(829, 'Binuang', 69),
(830, 'Karang Putih', 69),
(831, 'Raya Belanti', 69),
(832, 'Tungkap', 69),
(833, 'A. Yani Pura', 69),
(834, 'Pulaupinang', 69),
(835, 'Pualam Sari', 69),
(836, 'Gunungbatu', 69),
(837, 'Pulaupinang Utara', 69),
(838, 'Padang Sari', 69),
(839, 'Mekarsari', 69),
(840, 'Tambarangan', 70),
(841, 'Tatakan', 70),
(842, 'Suato Tatakan', 70),
(843, 'Sawang', 70),
(844, 'Lawahan', 70),
(845, 'Timbaan', 70),
(846, 'Rumintin Lama', 70),
(847, 'Cempaka', 70),
(848, 'Harapan Masa Baru', 70),
(849, 'Tandui', 70),
(850, 'Hatiwin', 70),
(851, 'Pandulangan', 71),
(852, 'Labung', 71),
(853, 'Mandurian', 71),
(854, 'Serawi', 71),
(855, 'Pematang Karangan Hulu', 71),
(856, 'Pematang Karangan', 71),
(857, 'Pandahan', 71),
(858, 'Pematang Karangan Hilir', 71),
(859, 'Hiyung', 71),
(860, 'Andhika', 71),
(861, 'Sukaramai', 71),
(862, 'Tirik', 71),
(863, 'Kepayang', 71),
(864, 'Batang Lantik', 71),
(865, 'Mandurian Hilir', 71),
(866, 'Sungai Bahalang', 71),
(867, 'Papagan Makmur', 71),
(868, 'Rangda Malingkung', 72),
(869, 'Kupang', 72),
(870, 'Rantau Kanan', 72),
(871, 'Rantau Kiwa', 72),
(872, 'Keramat', 72),
(873, 'Antasari', 72),
(874, 'Jingah Babaris', 72),
(875, 'Banua Hanyar', 72),
(876, 'Banua Halat Kiri', 72),
(877, 'Banua Halat Kanan', 72),
(878, 'Perintis Raya', 72),
(879, 'Kakaran', 72),
(880, 'Antasan Hilir', 72),
(881, 'Lumbu Raya', 72),
(882, 'Banua Halar Hulu', 72),
(883, 'Badaun', 72),
(884, 'Margasari Hulu', 73),
(885, 'Candi Laras', 73),
(886, 'Baringin A.', 73),
(887, 'Marampiau', 73),
(888, 'Pabaungan Hilir', 73),
(889, 'Pabaungan Hulu', 73),
(890, 'Sungai Rutas', 73),
(891, 'Baringin B', 73),
(892, 'Marampiau Hilir', 73),
(893, 'Sungai Rutas Hulu', 73),
(894, 'Baulin', 73),
(895, 'Pabaungan Pantai', 73),
(896, 'Keladan', 74),
(897, 'Sungai Selai', 74),
(898, 'Pariok', 74),
(899, 'Margasari Hilir', 74),
(900, 'Batalas', 74),
(901, 'Rawana', 74),
(902, 'Buas-buas', 74),
(903, 'Teluk Haur', 74),
(904, 'Sungai Puting', 74),
(905, 'Sawaja', 74),
(906, 'Sungai Selai Hilir', 74),
(907, 'Buas-buas Hilir', 74),
(908, 'Rawana Hulu', 74),
(909, 'Parigi Kecil', 75),
(910, 'Bakarangan', 75),
(911, 'Parigi', 75),
(912, 'Paul', 75),
(913, 'Gadung', 75),
(914, 'Bundung', 75),
(915, 'Tangkawang', 75),
(916, 'Waringin', 75),
(917, 'Gadung Keramat', 75),
(918, 'Masta', 75),
(919, 'Ketapang', 75),
(920, 'Tangkawang Baru', 75),
(921, 'Pipitak Jaya', 76),
(922, 'Miawa', 76),
(923, 'Batu Ampar', 76),
(924, 'Harakit', 76),
(925, 'Batung', 76),
(926, 'Balawaian', 76),
(927, 'Baramban', 76),
(928, 'Buniin Jaya', 76),
(929, 'Kalumpang', 77),
(930, 'Banua Padang', 77),
(931, 'Bungur', 77),
(932, 'Banua Padang Hilir', 77),
(933, 'Shabah', 77),
(934, 'Hangui', 77),
(935, 'Rantau Bujur', 77),
(936, 'Purut', 77),
(937, 'Bungur Baru', 77),
(938, 'Timbung', 77),
(939, 'Paring Guling', 77),
(940, 'Linuh', 77),
(941, 'Bitahan', 78),
(942, 'Binderang', 78),
(943, 'Parandakan', 78),
(944, 'Lokpaikat', 78),
(945, 'Bataratat', 78),
(946, 'Bitahan Baru', 78),
(947, 'Puncak Harapan', 78),
(948, 'Budi Mulya', 78),
(949, 'Ayunan Papan', 78),
(950, 'Salam Babaris', 79),
(951, 'Suato Lama', 79),
(952, 'Kambang Habang Lama', 79),
(953, 'Pantai Cabe', 79),
(954, 'Suato Baru', 79),
(955, 'Kambang Habang Baru', 79),
(956, 'Tarungin', 80),
(957, 'Matang Batas', 80),
(958, 'Hatungun', 80),
(959, 'Burakai', 80),
(960, 'Batu Hapu', 80),
(961, 'Kambang Kuning', 80),
(962, 'Asam Randah', 80),
(963, 'Bagak', 80),
(964, 'Hamalau', 81),
(965, 'Telaga Bidadari', 81),
(966, 'Karasikan', 81),
(967, 'Sungai Raya Utara', 81),
(968, 'Sungai Raya Selatan', 81),
(969, 'Hariti', 81),
(970, 'Ida Manggala', 81),
(971, 'Bumi Berkat', 81),
(972, 'Batang Kulur Kiri', 81),
(973, 'Batang Kulur Tengah', 81),
(974, 'Batang Kulur Kanan', 81),
(975, 'Baru', 81),
(976, 'Tamiyang', 81),
(977, 'Asam', 81),
(978, 'Sungai Kali', 81),
(979, 'Sarang Halang', 81),
(980, 'Paring Agung', 81),
(981, 'Tanah Bangkang', 81),
(982, 'Karang Jawa Muka', 82),
(983, 'Karang Jawa', 82),
(984, 'Tabihi', 82),
(985, 'Pandulangan', 82),
(986, 'Kaliring', 82),
(987, 'Jambu Hulu', 82),
(988, 'Pahampangan', 82),
(989, 'Padang Batung', 82),
(990, 'Jembatan Merah', 82),
(991, 'Batu Bini', 82),
(992, 'Mawangi', 82),
(993, 'Madang', 82),
(994, 'Durian Rabung', 82),
(995, 'Jelatang', 82),
(996, 'Batu Laki', 82),
(997, 'Malutu', 82),
(998, 'Malilingin', 82),
(999, 'Lok Binuang', 83),
(1000, 'Telaga Langsat', 83),
(1001, 'Mandala', 83),
(1002, 'Ambutun', 83),
(1003, 'Hamak', 83),
(1004, 'Hamak Timur', 83),
(1005, 'Hamak Utara', 83),
(1006, 'Pakuan Timur', 83),
(1007, 'Gumbil', 83),
(1008, 'Longawang', 83),
(1009, 'Pandulangan', 83),
(1010, 'Bamban Utara', 84),
(1011, 'Bamban', 84),
(1012, 'Bamban Selatan', 84),
(1013, 'Kayu Abang', 84),
(1014, 'Angkinang', 84),
(1015, 'Telaga Sili-Sili', 84),
(1016, 'Angkinang Selatan', 84),
(1017, 'Tawia', 84),
(1018, 'Taniran Kubah', 84),
(1019, 'Taniran Selatan', 84),
(1020, 'Bakarung', 84),
(1021, 'Kandangan Kota', 85),
(1022, 'Kandangan Utara', 85),
(1023, 'Kandangan Barat', 85),
(1024, 'Jambu Hilir', 85),
(1025, 'Gambah Luar', 85),
(1026, 'Gambah Luar Muka', 85),
(1027, 'Gambah Dalam', 85),
(1028, 'Gambah Dalam Barat', 85),
(1029, 'Sungai Kupang', 85),
(1030, 'Bangkau', 85),
(1031, 'Lungau', 85),
(1032, 'Sungai Paring', 85),
(1033, 'Bariang', 85),
(1034, 'Amawang Kiri', 85),
(1035, 'Amawang Kiri Muka', 85),
(1036, 'Amawang Kanan', 85),
(1037, 'Tibung Raya', 85),
(1038, 'Baluti', 85),
(1039, 'Tebing Tinggi', 86),
(1040, 'Simpur', 86),
(1041, 'Garunggang', 86),
(1042, 'Amparaya', 86),
(1043, 'Panjampang Bahagia', 86),
(1044, 'Ulin', 86),
(1045, 'Pantai Ulin', 86),
(1046, 'Wasah Hulu', 86),
(1047, 'Wasah Tengah', 86),
(1048, 'Wasah Hilir', 86),
(1049, 'Kapuh', 86),
(1050, 'Muning Baru', 87),
(1051, 'Muning Dalam', 87),
(1052, 'Muning Tengah', 87),
(1053, 'Banjarbaru', 87),
(1054, 'Bayanan', 87),
(1055, 'Pandan Sari', 87),
(1056, 'Pihanin Raya', 87),
(1057, 'Tumbukan Banyu', 87),
(1058, 'Sungai Pinang', 87),
(1059, 'Habirau', 87),
(1060, 'Habirau Tengah', 87),
(1061, 'Parigi', 87),
(1062, 'Banua Hanyar', 87),
(1063, 'Tambangan', 87),
(1064, 'Baruh Jaya', 87),
(1065, 'Samuda', 87),
(1066, 'Pakapuran Kecil', 88),
(1067, 'Panggandingan', 88),
(1068, 'Tambak Bitin', 88),
(1069, 'Pakan Dalam', 88),
(1070, 'Paramaian', 88),
(1071, 'Pandak Daun', 88),
(1072, 'Murung Raya', 88),
(1073, 'Balah Paikat', 88),
(1074, 'Sungai Garuda', 88),
(1075, 'Sungai Mandala', 88),
(1076, 'Mdl. Murung Mesjid', 88),
(1077, 'Baruh Kembang', 88),
(1078, 'Teluk Haur', 88),
(1079, 'Pasungkan', 88),
(1080, 'Teluk Kabak', 88),
(1081, 'Hamayung', 88),
(1082, 'Hamayung Utara', 88),
(1083, 'Paharangan', 88),
(1084, 'Hakurung', 88),
(1085, 'Balimau', 89),
(1086, 'Karang Paci', 89),
(1087, 'Bago Tanggul', 89),
(1088, 'Karang Bulan', 89),
(1089, 'Balanti', 89),
(1090, 'Kalumpang', 89),
(1091, 'Tambingkar', 89),
(1092, 'Sirih', 89),
(1093, 'Sirih Hulu', 89),
(1094, 'Halunuk', 90),
(1095, 'Panggungan', 90),
(1096, 'Lumpangi', 90),
(1097, 'Malinau', 90),
(1098, 'Hulu Banyu', 90),
(1099, 'Tumingki', 90),
(1100, 'Kamawakan', 90),
(1101, 'Lok Lahung', 90),
(1102, 'Loksado', 90),
(1103, 'Haratai', 90),
(1104, 'Ulang', 90),
(1105, 'Siang Gantung', 91),
(1106, 'Baru', 91),
(1107, 'Tanjung Selor', 91),
(1108, 'Badaun', 91),
(1109, 'Bajayau', 91),
(1110, 'Bajayau Tengah', 91),
(1111, 'Bajayau Lama', 91),
(1112, 'Pengambau Hilir Luar', 92),
(1113, 'Panggung', 92),
(1114, 'Barikin', 92),
(1115, 'Andang', 92),
(1116, 'Pengambau Hilir Dalam', 92),
(1117, 'Haruyan', 92),
(1118, 'Haruyan Seberang', 92),
(1119, 'Pengambau Hulu', 92),
(1120, 'Sungai Harang', 92),
(1121, 'Batu Panggung', 92),
(1122, 'Mangunang', 92),
(1123, 'Hapulang', 92),
(1124, 'Lok Buntar', 92),
(1125, 'Tabat Padang', 92),
(1126, 'Mangunang Seberang', 92),
(1127, 'Pandanu', 92),
(1128, 'Teluk Mesjid', 92),
(1129, 'Murung A.', 93),
(1130, 'Pagat', 93),
(1131, 'Kalibaru', 93),
(1132, 'Kahakan', 93),
(1133, 'Aluan Sumur', 93),
(1134, 'Aluan Besar', 93),
(1135, 'Paya Besar', 93),
(1136, 'Bakti', 93),
(1137, 'Aluan', 93),
(1138, 'Aluan Mati', 93),
(1139, 'Baru', 93),
(1140, 'Pantai Batung', 93),
(1141, 'Layuh', 93),
(1142, 'Haliau', 93),
(1143, 'Pantai Hambawang Barat', 94),
(1144, 'Mahang Baru', 94),
(1145, 'Mundar', 94),
(1146, 'Tabudarat Hilir', 94),
(1147, 'Tabudarat Hulu', 94),
(1148, 'Pantai Hambawang Timur', 94),
(1149, 'Banua Kepayang', 94),
(1150, 'Ta\'al', 94),
(1151, 'Durian Gantang', 94),
(1152, 'Guha', 94),
(1153, 'Bangkal', 94),
(1154, 'Panggang Marak', 94),
(1155, 'Jamil', 94),
(1156, 'Taras Padang', 94),
(1157, 'Murung Ta\'al', 94),
(1158, 'Sungai Rangas', 94),
(1159, 'Batang Bahalang', 94),
(1160, 'Sungai Jaranih', 94),
(1161, 'Perumahan', 95),
(1162, 'Kasarangan', 95),
(1163, 'Banua Kupang', 95),
(1164, 'Rantau Keminting', 95),
(1165, 'Pemangkih', 95),
(1166, 'Pemangkih Seberang', 95),
(1167, 'Binjai Pemangkih', 95),
(1168, 'Samhurang', 95),
(1169, 'Pahalatan', 95),
(1170, 'Mantaas', 95),
(1171, 'Sungai Buluh', 95),
(1172, 'Kadundung', 95),
(1173, 'Tungkup', 95),
(1174, 'Tabat', 95),
(1175, 'Rantau Bujur', 95),
(1176, 'Binjai Pirua', 95),
(1177, 'Jaranih', 96),
(1178, 'Banua Hanyar', 96),
(1179, 'Palajau', 96),
(1180, 'Banua Batung', 96),
(1181, 'Jatuh', 96),
(1182, 'Pandawan', 96),
(1183, 'Mahang Matang Landung', 96),
(1184, 'Kambat Selatan', 96),
(1185, 'Kayu Rabah', 96),
(1186, 'Setiap', 96),
(1187, 'Kambat Utara', 96),
(1188, 'Banua Supanggal', 96),
(1189, 'Hulu Rasau', 96),
(1190, 'Banua Asam', 96),
(1191, 'Masiraan', 96),
(1192, 'Mahang Putat', 96),
(1193, 'Mahang Sungai Hanyar', 96),
(1194, 'Hilir Banua', 96),
(1195, 'Buluan', 96),
(1196, 'Matang Ginalun', 96),
(1197, 'Walatung', 96),
(1198, 'Barabai Darat', 97),
(1199, 'Barabai Timur', 97),
(1200, 'Barabai Selatan', 97),
(1201, 'Barabai Utara', 97),
(1202, 'Barabai Barat', 97),
(1203, 'Bukat', 97),
(1204, 'Gambah', 97),
(1205, 'Kayu Bawang', 97),
(1206, 'Benawa Tengah', 97),
(1207, 'Mandingin', 97),
(1208, 'Pajukungan', 97),
(1209, 'Banua Budi', 97),
(1210, 'Banua Binjai', 97),
(1211, 'Banua Jingah', 97),
(1212, 'Ayuang', 97),
(1213, 'Babai', 97),
(1214, 'Awang Besar', 97),
(1215, 'Bakapas', 97),
(1216, 'Birayang', 98),
(1217, 'Kias', 98),
(1218, 'Kapar', 98),
(1219, 'Tembuk Bahalang', 98),
(1220, 'Limbar', 98),
(1221, 'Lok Basar', 98),
(1222, 'Paya', 98),
(1223, 'Cukan Lipai', 98),
(1224, 'Birayang Surapati', 98),
(1225, 'Mahela', 98),
(1226, 'Rangas', 98),
(1227, 'Wawai Gardu', 98),
(1228, 'Labuhan', 98),
(1229, 'Birayang Timur', 98),
(1230, 'Tanah Habang', 98),
(1231, 'Banua Rantau', 98),
(1232, 'Anduhum', 98),
(1233, 'Wawai', 98),
(1234, 'Lunjuk', 98),
(1235, 'Sumanggi Semerang', 99),
(1236, 'Sumanggi', 99),
(1237, 'Ilung', 99),
(1238, 'Maringgit', 99),
(1239, 'Telang', 99),
(1240, 'Labunganak', 99),
(1241, 'Hapingin', 99),
(1242, 'Dangu', 99),
(1243, 'Ilung Tengah', 99),
(1244, 'Haur Gading', 99),
(1245, 'Awang', 99),
(1246, 'Awang Baru', 99),
(1247, 'Muara Rintis', 99),
(1248, 'Ilung Pasar Lama', 99),
(1249, 'Hantakan', 100),
(1250, 'Alat', 100),
(1251, 'Murung B.', 100),
(1252, 'Bulayak', 100),
(1253, 'Batu Tunggal', 100),
(1254, 'Pasting', 100),
(1255, 'Tilahan', 100),
(1256, 'Haruyan Dayak', 100),
(1257, 'Kindingan', 100),
(1258, 'Datar Ajab', 100),
(1259, 'Hinas Kanan', 100),
(1260, 'Patikalain', 100),
(1261, 'Batu Tangga', 101),
(1262, 'Hinas Kiri', 101),
(1263, 'Pembakulan', 101),
(1264, 'Nateh', 101),
(1265, 'Tandilang', 101),
(1266, 'Muara Hungi', 101),
(1267, 'Atiran', 101),
(1268, 'Batu Perahu', 101),
(1269, 'Aing Bantai', 101),
(1270, 'Juhu', 101),
(1271, 'Datar Batung', 101),
(1272, 'Tapuk', 102),
(1273, 'Karau', 102),
(1274, 'Limpasu', 102),
(1275, 'Kabang', 102),
(1276, 'Abung Surapati', 102),
(1277, 'Karatungan', 102),
(1278, 'Pauh', 102),
(1279, 'Abung', 102),
(1280, 'Hawang', 102),
(1281, 'Sungai Namang', 103),
(1282, 'Danau Panggang', 103),
(1283, 'Pandamaan', 103),
(1284, 'Baru', 103),
(1285, 'Bitin', 103),
(1286, 'Manarap', 103),
(1287, 'Pararain', 103),
(1288, 'Telaga Mas', 103),
(1289, 'Darussalam', 103),
(1290, 'Sarang Burung', 103),
(1291, 'Longkong', 103),
(1292, 'Rintisan', 103),
(1293, 'Palukahan', 103),
(1294, 'Teluk Mesjid', 103),
(1295, 'Sungai Panangah', 103),
(1296, 'Manarap Hulu', 103),
(1297, 'Babirik Hilir', 103),
(1298, 'Babirik Hulu', 104),
(1299, 'S. Durait Hilir', 104),
(1300, 'Hambuku Hilir', 104),
(1301, 'Murung Panti Hulu', 104),
(1302, 'Murung Panti Hilir', 104),
(1303, 'Murung Kupang', 104),
(1304, 'Sungai Luang Hilir', 104),
(1305, 'Pajukungan Hilir', 104),
(1306, 'Kalumpang Dalam', 104),
(1307, 'Parupukan', 104),
(1308, 'Sungai Luang Hulu', 104),
(1309, 'Sungai Durait Hulu', 104),
(1310, 'Sungai Dalam', 104),
(1311, 'Hambuku Baru', 104),
(1312, 'Hambuku Lima', 104),
(1313, 'Sungai  Janjam', 104),
(1314, 'Kalumpang Luar', 104),
(1315, 'Teluk Limbung', 104),
(1316, 'Sungai Durait Tengah', 104),
(1317, 'Pajukungan Hulu', 104),
(1318, 'Sungai Papuyu', 104),
(1319, 'Sungai Nyiur', 104),
(1320, 'Rantau Karau Hilir', 105),
(1321, 'Rantau Karau Hulu', 105),
(1322, 'Banyu Tajun Hilir', 105),
(1323, 'Banyu Tajun Hulu', 105),
(1324, 'Banyu Tajun Pangkalan', 105),
(1325, 'Sungai Sandung', 105),
(1326, 'Sungai Pandan Hilir', 105),
(1327, 'Teluk Betung', 105),
(1328, 'Tambalang', 105),
(1329, 'Hambuku Hulu', 105),
(1330, 'Hambuku Tengah', 105),
(1331, 'Pandulangan', 105),
(1332, 'Sungai Pandan Hulu', 105),
(1333, 'Pondok Babaris', 105),
(1334, 'Sungai Pinang', 105),
(1335, 'Tambalangan Kecil', 105),
(1336, 'Putat Atas', 105),
(1337, 'Banyu Tajun Dalam', 105),
(1338, 'Sungai Pandan Tengah', 105),
(1339, 'Hanbuku Raya', 105),
(1340, 'Sungai Kuini', 105),
(1341, 'Tapus Dalam', 105),
(1342, 'Rantau KarauTengah', 105),
(1343, 'Tambalongan Tengah', 105),
(1344, 'Teluk Mesjid', 105),
(1345, 'Murung Asam', 105),
(1346, 'Tatah Laban', 105),
(1347, 'Jalan Lurus', 105),
(1348, 'Teluk Sinar', 105),
(1349, 'Padang Bangkal', 105),
(1350, 'Hambuku Pasar', 105),
(1351, 'Pangkalan Sari', 105),
(1352, 'Rantau Karau Raya', 105),
(1353, 'Panyiuran', 106),
(1354, 'Simpang Empat', 106),
(1355, 'Padang Darat', 106),
(1356, 'Teluk Baru', 106),
(1357, 'Ilir Mesjid', 106),
(1358, 'Jarang Kuantan', 106),
(1359, 'Jumba', 106),
(1360, 'Telaga Sari', 106),
(1361, 'Telaga Silaba', 106),
(1362, 'Banyu Hirang', 106),
(1363, 'Kayakah', 106),
(1364, 'Bajawit', 106),
(1365, 'Padang Tanggul', 106),
(1366, 'Teluk Paring', 106),
(1367, 'Rukam Hilir', 106),
(1368, 'Mamar', 106),
(1369, 'Cempaka', 106),
(1370, 'Keramat', 106),
(1371, 'Ujung Murung', 106),
(1372, 'Kota Raja', 106),
(1373, 'Pulau Tambak', 106),
(1374, 'Harusan Telaga', 106),
(1375, 'Simpang Tiga', 106),
(1376, 'Cangkering', 106),
(1377, 'Kutai Kecil', 106),
(1378, 'Teluk Sari', 106),
(1379, 'Murung Panggang', 106),
(1380, 'Telaga Hanyar', 106),
(1381, 'Rukam', 106),
(1382, 'Murung Sari', 106),
(1383, 'Antasari', 106),
(1384, 'Murung Sari', 106),
(1385, 'Kebun Sari', 106),
(1386, 'Paliwara', 106),
(1387, 'Sungai Malang', 106),
(1388, 'Tapus', 106),
(1389, 'Kandang Halang', 106),
(1390, 'Pasar Senin', 106),
(1391, 'Kota Raden Hulu', 106),
(1392, 'Tangga Ulin Hilir', 106),
(1393, 'Tambalangan', 106),
(1394, 'Palampitan Hulu', 106),
(1395, 'Harus', 106),
(1396, 'Pinangkara', 106),
(1397, 'Sungai Karias', 106),
(1398, 'Tigarun', 106),
(1399, 'Pinang Habang', 106),
(1400, 'Hulu Pasar', 106),
(1401, 'Kota Raden Hilir', 106),
(1402, 'Rantawan', 106),
(1403, 'Muara Tapus', 106),
(1404, 'Palampitan Hilir', 106),
(1405, 'Harusan', 106),
(1406, 'Sungai Baring', 106),
(1407, 'Kembang Kuning', 106),
(1408, 'Datu Kuning', 106),
(1409, 'Tangga Ulin Hulu', 106),
(1410, 'Mawar Sari', 106),
(1411, 'Danau Cermin', 106),
(1412, 'Pakapuran', 108),
(1413, 'Pakacangan', 108),
(1414, 'Panangkalaan', 108),
(1415, 'Padang Basar', 108),
(1416, 'Murung Karangan', 108),
(1417, 'Kamayahan', 108),
(1418, 'Guntung', 108),
(1419, 'Muara Baruh', 108),
(1420, 'Teluk Daun', 108),
(1421, 'Sungai Turak', 108),
(1422, 'Tabalong Mati', 108),
(1423, 'Pimping', 108),
(1424, 'Padang Luar', 108),
(1425, 'Tayur', 108),
(1426, 'Panangkalaan Hulu', 108),
(1427, 'Cakeru', 108),
(1428, 'Sungai Turak Dalam', 108),
(1429, 'Penyauangan', 108),
(1430, 'Kuangan', 108),
(1431, 'Tabing Liring', 108),
(1432, 'Padang Basar Hilir', 108),
(1433, 'Telaga Bamban', 108),
(1434, 'Air Tawar', 108),
(1435, 'Panangian', 108),
(1436, 'Pamintangan', 108),
(1437, 'Pandawanan', 108),
(1438, 'Banjang', 109),
(1439, 'Patarikan', 109),
(1440, 'Teluk Buluh', 109),
(1441, 'Pandulangan', 109),
(1442, 'Danau Terati', 109),
(1443, 'Garunggang', 109),
(1444, 'Baruh Tabing', 109),
(1445, 'Murung Padang', 109),
(1446, 'Teluk Sarikat', 109),
(1447, 'Baringin', 109),
(1448, 'Kalintamui', 109),
(1449, 'Palanjungan Sari', 109),
(1450, 'Lokbangkai', 109),
(1451, 'Sungai Bahadangan', 109),
(1452, 'Karias Dalam', 109),
(1453, 'Rantau Bujur', 109),
(1454, 'Kaludan Kecil', 109),
(1455, 'Kaludan Besar', 109),
(1456, 'Pawalutan', 109),
(1457, 'Pulau Damar', 109),
(1458, 'Palimbangan', 110),
(1459, 'Palimbangan Gusti', 110),
(1460, 'Palimbangan Sari', 110),
(1461, 'Bayur', 110),
(1462, 'Lok Suga', 110),
(1463, 'Sungai Limas', 110),
(1464, 'Pihaung', 110),
(1465, 'Sungai Binuang', 110),
(1466, 'Jingah Bujur', 110),
(1467, 'Haur Gading', 110),
(1468, 'Keramat', 110),
(1469, 'Tambak Sari panji', 110),
(1470, 'Pulantani', 110),
(1471, 'Waringin', 110),
(1472, 'Tangkawang', 110),
(1473, 'Tuhuran', 110),
(1474, 'Taluk Haur', 110),
(1475, 'Panawakan', 110),
(1476, 'Paminggir', 111),
(1477, 'Paminggir Seberang', 111),
(1478, 'Ambahai', 111),
(1479, 'Sapala', 111),
(1480, 'Bararawa', 111),
(1481, 'Pal Batu', 111),
(1482, 'Tampakang', 111),
(1483, 'Sungai Tabukan', 112),
(1484, 'Nelayan', 112),
(1485, 'Gelagah  Hulu', 112),
(1486, 'Gelagah', 112),
(1487, 'Teluk Cati', 112),
(1488, 'Pematang Benteng', 112),
(1489, 'Pematang Benteng Hilir', 112),
(1490, 'Pasar Sabtu', 112),
(1491, 'Sungai Haji', 112),
(1492, 'Hilir Mesjid', 112),
(1493, 'Gampa Raya', 112),
(1494, 'Benua Hanyar', 112),
(1495, 'Rantau Bujur Hulu', 112),
(1496, 'Rantau Bujur Tengah', 112),
(1497, 'Rantau Bujur Hilir', 112),
(1498, 'Rantau Bujur Darat', 112),
(1499, 'Tembalang Raya', 112),
(1500, 'Hapalah', 113),
(1501, 'Bangkiling', 113),
(1502, 'Sungai Durian', 113),
(1503, 'Pematang', 113),
(1504, 'Hariang', 113),
(1505, 'Banua Lawas', 113),
(1506, 'Habau', 113),
(1507, 'Banua Rantau', 113),
(1508, 'Purai', 113),
(1509, 'Batang Banyu', 113),
(1510, 'Habau Hilir', 113),
(1511, 'Bungin', 113),
(1512, 'Bangkiling Raya', 113),
(1513, 'Talan', 113),
(1514, 'Sungai Anyar', 113),
(1515, 'Pulau', 114),
(1516, 'Ampukung', 114),
(1517, 'Telaga Itar', 114),
(1518, 'Sungai Buluh', 114),
(1519, 'Binturu', 114),
(1520, 'Pudak Setegal', 114),
(1521, 'Pasar Panas', 114),
(1522, 'Masintan', 114),
(1523, 'Takulat', 114),
(1524, 'Paliat', 114),
(1525, 'Karangan Putih', 114),
(1526, 'Bahungin', 114),
(1527, 'Murung Baru', 115),
(1528, 'Luk Bayur', 115),
(1529, 'Walangkir', 115),
(1530, 'Warukin', 115),
(1531, 'Barimbun', 115),
(1532, 'Mangkusip', 115),
(1533, 'Pamarangan Kanan', 115),
(1534, 'Pulau Kuu', 115),
(1535, 'Tanta', 115),
(1536, 'Padang Panjang', 115),
(1537, 'Puain Kanan', 115),
(1538, 'Padangin', 115),
(1539, 'Tamiyang', 115),
(1540, 'Tanta Hulu', 115),
(1541, 'Jangkung', 116),
(1542, 'Tanjung', 116),
(1543, 'Agung', 116),
(1544, 'Hikun', 116),
(1545, 'Banyu Tajun', 116),
(1546, 'Pamarangan Kiwa', 116),
(1547, 'Puain Kiwa', 116),
(1548, 'Juai', 116),
(1549, 'Mahe Seberang', 116),
(1550, 'Kambitin', 116),
(1551, 'Wayau', 116),
(1552, 'Garunggung', 116),
(1553, 'Kitang', 116),
(1554, 'Sungai Pimping', 116),
(1555, 'Kambitin Raya', 116),
(1556, 'Marindi', 117),
(1557, 'Wirang', 117),
(1558, 'Bongkang', 117),
(1559, 'Nawin', 117),
(1560, 'Halong', 117),
(1561, 'Hayup', 117),
(1562, 'Kembang Kuning', 117),
(1563, 'Saradang', 117),
(1564, 'Mahe Pasar', 117),
(1565, 'Lok Batu', 117),
(1566, 'Suput', 117),
(1567, 'Suryan', 117),
(1568, 'Catur Karya', 117),
(1569, 'Belimbing Raya', 118),
(1570, 'Belimbing', 118),
(1571, 'Mabu\'un', 118),
(1572, 'Pembataan', 118),
(1573, 'Sulingan', 118),
(1574, 'Maburai', 118),
(1575, 'Kasiau', 118),
(1576, 'Kapar', 118),
(1577, 'Masukau', 118),
(1578, 'Kasiau Raya', 118),
(1579, 'Kupang Nunding', 119),
(1580, 'Mangkupum', 119),
(1581, 'Pasar Batu', 119),
(1582, 'Uwie', 119),
(1583, 'Muara Uya', 119),
(1584, 'Lumbang', 119),
(1585, 'Santuun', 119),
(1586, 'Simpung Layung', 119),
(1587, 'Binjai', 119),
(1588, 'Pelapi', 119),
(1589, 'Kampung Baru', 119),
(1590, 'Salikung', 119),
(1591, 'Ribang', 119),
(1592, 'Sungai Kumap', 119),
(1593, 'Madang', 120),
(1594, 'Tantaringin', 120),
(1595, 'Murung Karangan', 120),
(1596, 'Pandangin', 120),
(1597, 'Manduin', 120),
(1598, 'Mantuil', 120),
(1599, 'Harus', 120),
(1600, 'Pugaan', 121),
(1601, 'Pampanan', 121),
(1602, 'Sei Rukam II', 121),
(1603, 'Sei Rukam I', 121),
(1604, 'Jirak', 121),
(1605, 'Halangan', 121),
(1606, 'Tamunti', 121),
(1607, 'Bilas', 122),
(1608, 'Kaong', 122),
(1609, 'Pangelak', 122),
(1610, 'Kinarum', 122),
(1611, 'Masingai II', 122),
(1612, 'Masingai I', 122),
(1613, 'Teratau', 123),
(1614, 'Namun', 123),
(1615, 'Jaro', 123),
(1616, 'Solan', 123),
(1617, 'Muang', 123),
(1618, 'Lano', 123),
(1619, 'Purui', 123),
(1620, 'Garagata', 123),
(1621, 'Nalui', 123),
(1622, 'Waling', 124),
(1623, 'Usih', 124),
(1624, 'Bintang Ara', 124),
(1625, 'Burum', 124),
(1626, 'Panaan', 124),
(1627, 'Dambung', 124),
(1628, 'Argo Mulyo', 124),
(1629, 'Bumi Makmur', 124),
(1630, 'Hegar Manah', 124),
(1631, 'Batulicin', 125),
(1632, 'Gunungtinggi', 125),
(1633, 'Segumbang', 125),
(1634, 'Kersik Putih', 125),
(1635, 'Maju Makmur', 125),
(1636, 'Maju Bersama', 125),
(1637, 'Sukamaju', 125),
(1638, 'Polewali Marajae', 125),
(1639, 'Danauindah', 125),
(1640, 'Kota Pagatan', 126),
(1641, 'Betung', 126),
(1642, 'Sungai Lembu', 126),
(1643, 'Wiritasi', 126),
(1644, 'Pejala', 126),
(1645, 'Pagaruyung', 126),
(1646, 'Muara Pagatan Tengah', 126),
(1647, 'Kampung Baru', 126),
(1648, 'Pasar Baru', 126),
(1649, 'Batuah', 126),
(1650, 'Baru Gelang', 126),
(1651, 'Pulau Salak', 126),
(1652, 'Salimuran', 126),
(1653, 'Satiung', 126),
(1654, 'Saring Sungai Binjai', 126),
(1655, 'Pulau Tanjung', 126),
(1656, 'Batarang', 126),
(1657, 'Manurung', 126),
(1658, 'Mudalang', 126),
(1659, 'Tanette', 126),
(1660, 'Muara Pagatan', 126),
(1661, 'Pulau Satu', 126),
(1662, 'Sepunggur', 126),
(1663, 'Pakatellu', 126),
(1664, 'Saring S. Bubu', 126),
(1665, 'Serdangan', 126),
(1666, 'Juku Eja', 126),
(1667, 'Api-Api', 126),
(1668, 'Gusunge', 126),
(1669, 'Rantau Panjang Hulu', 126),
(1670, 'Penyolongan', 126),
(1671, 'Beringin', 126),
(1672, 'Mekar Jaya', 126),
(1673, 'Rantau Panjang Hilir', 126),
(1674, 'Upt. Karya Bakti', 126),
(1675, 'Sari Mulya', 126),
(1676, 'Sungailoban', 127),
(1677, 'Sebamban Lama', 127),
(1678, 'Sebamban Baru', 127),
(1679, 'Sungaidua Laut', 127),
(1680, 'Marga Mulya', 127),
(1681, 'Sari Utama', 127),
(1682, 'Tri Mulya', 127),
(1683, 'Dwi Marga Utama', 127),
(1684, 'Kerta Buana', 127),
(1685, 'Batu Meranti', 127),
(1686, 'Tri Martani', 127),
(1687, 'Sumber makmur', 127),
(1688, 'Biduri Bersujud', 127),
(1689, 'Sumber Sari', 127),
(1690, 'Wanasari', 127),
(1691, 'Damar Indah', 127),
(1692, 'Setarap', 128),
(1693, 'Satui Timur', 128),
(1694, 'Sungaicuka', 128),
(1695, 'Jombang', 128),
(1696, 'Satui Barat', 128),
(1697, 'Sekapuk', 128),
(1698, 'Sungaidanau', 128),
(1699, 'Wonorejo', 128),
(1700, 'Sumber Makmur', 128),
(1701, 'Tegal Sari', 128),
(1702, 'Sumber Arum', 128),
(1703, 'Sejahtera Mulia', 128),
(1704, 'Al Kautsar', 128),
(1705, 'Makmur Mulia', 128),
(1706, 'Sinar Bulan', 128),
(1707, 'Pandamaran Jaya', 128),
(1708, 'Lasung', 129),
(1709, 'Manuntung', 129),
(1710, 'Anjir Baru', 129),
(1711, 'Binawara', 129),
(1712, 'Pacakan', 129),
(1713, 'Guntung', 129),
(1714, 'Teluk Kepayang', 129),
(1715, 'Tapus', 129),
(1716, 'Mangkalapi', 129),
(1717, 'Hatiif', 129),
(1718, 'Timbarau Panjang', 129),
(1719, 'Sungai Rukam', 129),
(1720, 'Darasan Binjai', 129),
(1721, 'Bakarangan', 129),
(1722, 'Karang Mulya', 129),
(1723, 'Harapan Jaya', 129),
(1724, 'Wonorejo', 129),
(1725, 'Karang Sari', 129),
(1726, 'Tamunih', 129),
(1727, 'Dadap Kusan Raya', 129),
(1728, 'Batu Bulan', 129),
(1729, 'Kampung Baru', 130),
(1730, 'Tungkaran Pangeran', 130),
(1731, 'Sari Gadung', 130),
(1732, 'Mekar Sari', 130),
(1733, 'Sungaidua', 130),
(1734, 'Batu Ampar', 130),
(1735, 'Gunungbesar', 130),
(1736, 'Pulaupanjang', 130),
(1737, 'Baroqah', 130),
(1738, 'Bersujud', 130),
(1739, 'Sejahtera', 130),
(1740, 'Gunungantasari', 130),
(1741, 'Karang Bintang', 131),
(1742, 'Pandan Sari', 131),
(1743, 'Rejo Winangun', 131),
(1744, 'Selaselilau', 131),
(1745, 'Pematang Ulin', 131),
(1746, 'Batu Licin Irigasi', 131),
(1747, 'Manunggal', 131),
(1748, 'Sumber Wangi', 131),
(1749, 'Madu Retno', 131),
(1750, 'Maju Sejahtera', 131),
(1751, 'Karang Rejo', 131),
(1752, 'Mantewe', 132),
(1753, 'Dukuh Rejo', 132),
(1754, 'Rejosari', 132),
(1755, 'Suka Damai', 132),
(1756, 'Bulu Rejo', 132),
(1757, 'Sido Mulyo', 132),
(1758, 'Sepakat', 132),
(1759, 'Sari Mulya', 132),
(1760, 'Emil Baru', 132),
(1761, 'Mentawakan Mulia', 132),
(1762, 'Maju Mulyo', 132),
(1763, 'Gununghatalau Meratus Ray', 132),
(1764, 'Gunungraya', 132),
(1765, 'Bunati', 133),
(1766, 'Purwodadi', 133),
(1767, 'Sumber Baru', 133),
(1768, 'Karang Indah', 133),
(1769, 'Angsana', 133),
(1770, 'Banjar Sari', 133),
(1771, 'Bayan Sari', 133),
(1772, 'Makmur', 133),
(1773, 'Mekar Jaya', 133),
(1774, 'Giri Mulya', 134),
(1775, 'Kuranji', 134),
(1776, 'Waringin Tunggal', 134),
(1777, 'Mustika', 134),
(1778, 'Indra Lokajaya', 134),
(1779, 'Karang Intan', 134),
(1780, 'Ringkit', 134),
(1781, 'Muara Ninian', 135),
(1782, 'Hamarung', 135),
(1783, 'Juai', 135),
(1784, 'Buntu Karau', 135),
(1785, 'Bata', 135),
(1786, 'Galumbang', 135),
(1787, 'Sungai Batung', 135),
(1788, 'Sirap', 135),
(1789, 'Tigarun', 135),
(1790, 'Teluk Bayur', 135),
(1791, 'Pamurus', 135),
(1792, 'Marias', 135),
(1793, 'Lalayau', 135),
(1794, 'Mihu', 135),
(1795, 'Hukai', 135),
(1796, 'Tawahan', 135),
(1797, 'Gulinggang', 135),
(1798, 'Mungkur Uyam', 135),
(1799, 'Panimbaan', 135),
(1800, 'Wonorejo', 135),
(1801, 'Sumber Rejeki', 135),
(1802, 'Hauwai', 136),
(1803, 'Bangkal', 136),
(1804, 'Mantuyan', 136),
(1805, 'Tabuan', 136),
(1806, 'Halong', 136),
(1807, 'Puyun', 136),
(1808, 'Buntu Pilanduk', 136),
(1809, 'Gunung Riut', 136),
(1810, 'Kapul', 136),
(1811, 'Mamantang', 136),
(1812, 'Binjai Punggal', 136),
(1813, 'Liyu', 136),
(1814, 'Binuang Santang', 136),
(1815, 'Aniungan', 136),
(1816, 'Binju', 136),
(1817, 'Karya', 136),
(1818, 'Uren', 136),
(1819, 'Marajai', 136),
(1820, 'Suryatama', 136),
(1821, 'Baruh Panyambaran', 136),
(1822, 'Mauya', 136),
(1823, 'Padang Raya', 136),
(1824, 'Sumber Agung', 136),
(1825, 'Mamigang', 136),
(1826, 'Bihara', 137),
(1827, 'Pematang', 137),
(1828, 'Merah', 137),
(1829, 'Awayan', 137),
(1830, 'Pudak', 137),
(1831, 'Badalungga', 137),
(1832, 'Tundakan', 137),
(1833, 'Sikontan', 137),
(1834, 'Pulantan', 137),
(1835, 'Tundi', 137),
(1836, 'Muara Jaya', 137),
(1837, 'Bihara Hilir', 137),
(1838, 'Baru', 137),
(1839, 'Awayan Hilir', 137),
(1840, 'Putat Basiun', 137),
(1841, 'Sei Pumpung', 137),
(1842, 'Badalungga Hilir', 137),
(1843, 'Nungka', 137),
(1844, 'Tangalin', 137),
(1845, 'Kedondong', 137),
(1846, 'Baramban', 137),
(1847, 'Ambakiang', 137),
(1848, 'Piyait', 137),
(1849, 'Tariwin', 138),
(1850, 'Lok Batu', 138),
(1851, 'Munjung', 138),
(1852, 'Pelajau', 138),
(1853, 'Batumandi', 138),
(1854, 'Riwa', 138),
(1855, 'Mantimin', 138),
(1856, 'Mampari', 138),
(1857, 'Bungur', 138),
(1858, 'Teluk Mesjid', 138),
(1859, 'Timbun Tulang', 138),
(1860, 'Banua Hanyar', 138),
(1861, 'Bakung', 138),
(1862, 'Karuh', 138),
(1863, 'Guha', 138),
(1864, 'Gunung Manau', 138),
(1865, 'Hampa Raya', 138),
(1866, 'Kasai', 138),
(1867, 'Tanah Habang Kiri', 139),
(1868, 'Panaitan', 139),
(1869, 'Tanah Habang Kanan', 139),
(1870, 'Batu Merah', 139),
(1871, 'Lampihong Kanan', 139),
(1872, 'Lampihong Selatan', 139),
(1873, 'Lampihong Kiri', 139),
(1874, 'Lajar', 139),
(1875, 'Kusambi Hulu', 139),
(1876, 'Kusambi Hilir', 139),
(1877, 'Simpang Tiga', 139),
(1878, 'Matang Lurus', 139),
(1879, 'Lok Hamawang', 139),
(1880, 'Kupang', 139),
(1881, 'Tampang', 139),
(1882, 'Matang Hanau', 139),
(1883, 'Lok Panginangan', 139),
(1884, 'Jungkal', 139),
(1885, 'Sungai Tabuk', 139),
(1886, 'Jimamun', 139),
(1887, 'Pimping', 139),
(1888, 'Hilir Pasar', 139),
(1889, 'Teluk Karya', 139),
(1890, 'Pupuyuan', 139),
(1891, 'Sungai Awang', 139),
(1892, 'Kandang Jaya', 139),
(1893, 'Mundar', 139),
(1894, 'Paringin Timur', 140),
(1895, 'Paringin Kota', 140),
(1896, 'Balang', 140),
(1897, 'Kalahiang', 140),
(1898, 'Lasung Batu', 140),
(1899, 'Paran', 140),
(1900, 'Layap', 140),
(1901, 'Murung Ilung', 140),
(1902, 'Mangkayahu', 140),
(1903, 'Lok Batung', 140),
(1904, 'Lamida Bawah', 140),
(1905, 'Dahai', 140),
(1906, 'Hujan Mas', 140),
(1907, 'Babayau', 140),
(1908, 'Balida', 140),
(1909, 'Sungai Ketapi', 140),
(1910, 'Batu Piring', 141),
(1911, 'Baruh Bahinu Luar', 141),
(1912, 'Inan', 141),
(1913, 'Baruh Bahinu Dalam', 141),
(1914, 'Panggung', 141),
(1915, 'Galumbang', 141),
(1916, 'Halubau', 141),
(1917, 'Binjai', 141),
(1918, 'Murung Abuin', 141),
(1919, 'Bungin', 141),
(1920, 'Maradap', 141),
(1921, 'Halubau Utara', 141),
(1922, 'Murung Jambu', 141),
(1923, 'Telaga Purun', 141),
(1924, 'Lingsir', 141),
(1925, 'Tarangan', 141),
(1926, 'Dayak Pitap', 142),
(1927, 'Tebing Tinggi', 142),
(1928, 'Sungsum', 142),
(1929, 'Ju\'uh', 142),
(1930, 'Mayanau', 142),
(1931, 'Simpang Bumbuan', 142),
(1932, 'Auh', 142),
(1933, 'Gunung Batu', 142),
(1934, 'Langkap', 142),
(1935, 'Simpang Nadong', 142),
(1936, 'Ajung', 142),
(1937, 'Kambiyain', 142),
(1938, 'Mantuil', 143),
(1939, 'Kelayan Selatan', 143),
(1940, 'Pekauman', 143),
(1941, 'Kelayan Barat', 143),
(1942, 'Kelayan Tengah', 143),
(1943, 'Kelayan Dalam', 143),
(1944, 'Murung Raya', 143),
(1945, 'Kelayan Timur', 143),
(1946, 'Tanjung Pagar', 143),
(1947, 'Pemurus Dalam', 143),
(1948, 'Pemurus Baru', 143),
(1949, 'Basirih Selatan', 143),
(1950, 'Kuripan', 144),
(1951, 'Kebun Bunga', 144),
(1952, 'Karang Mekar', 144),
(1953, 'Sungai Bilu', 144),
(1954, 'Sungai Lulut', 144),
(1955, 'Banua Anyar', 144),
(1956, 'Pengambangan', 144),
(1957, 'Pekapuran Raya', 144),
(1958, 'Pemurus Luar', 144),
(1959, 'Belitung Utara', 145),
(1960, 'Belitung Selatan', 145),
(1961, 'Pelambuan', 145),
(1962, 'Telaga Biru', 145),
(1963, 'Telawang', 145),
(1964, 'Teluk Tiram', 145),
(1965, 'Kuin Selatan', 145),
(1966, 'Kuin Cerucuk', 145),
(1967, 'Basirih', 145),
(1968, 'Alalak Tengah', 146),
(1969, 'Alalak Utara', 146),
(1970, 'Alalak Selatan', 146),
(1971, 'Sungai Jingah', 146),
(1972, 'Sungai Miai', 146),
(1973, 'Surgi Mufti', 146),
(1974, 'Pangeran', 146),
(1975, 'Antasan Kecil Timur', 146),
(1976, 'Kuin Utara', 146),
(1977, 'Sungai Andai', 146),
(1978, 'Kertak Baru Ilir', 147),
(1979, 'Kertak Baru Ulu', 147),
(1980, 'Mawar', 147),
(1981, 'Teluk Dalam', 147),
(1982, 'Antasan Besar', 147),
(1983, 'Pasar Lama', 147),
(1984, 'Seberang Mesjid', 147),
(1985, 'Gadang', 147),
(1986, 'Melayu', 147),
(1987, 'Sungai Baru', 147),
(1988, 'Pekapuran Laut', 147),
(1989, 'Kelayan Luar', 147),
(1990, 'Landasan Ulin Timur', 148),
(1991, 'Guntung Payung', 148),
(1992, 'Guntung Manggis', 148),
(1993, 'Syamsudin Noor', 148),
(1994, 'Palam', 149),
(1995, 'Bangkal', 149),
(1996, 'Sungai Tiung', 149),
(1997, 'Cempaka', 149),
(1998, 'Loktabat Utara', 150),
(1999, 'Mentaos', 150),
(2000, 'Komet', 150),
(2001, 'Sungai Ulin', 150),
(2002, 'Sungai  Besar', 151),
(2003, 'Laktabat Selatan', 151),
(2004, 'Kemuning', 151),
(2005, 'Guntung Paikat', 151),
(2006, 'Landasan Ulin Barat', 152),
(2007, 'Landasan Ulin Tengah', 152),
(2008, 'Landasan Ulin Utara', 152),
(2009, 'Landasan Ulin Selatan', 152);

-- --------------------------------------------------------

--
-- Table structure for table `tb_kota_kab`
--

CREATE TABLE `tb_kota_kab` (
  `id_kota_kab` int(11) NOT NULL,
  `nama_kota_kab` varchar(50) NOT NULL,
  `id_provinsi` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tb_kota_kab`
--

INSERT INTO `tb_kota_kab` (`id_kota_kab`, `nama_kota_kab`, `id_provinsi`) VALUES
(1, 'KAB. ACEH SELATAN', 1),
(2, 'KAB. ACEH TENGGARA', 1),
(3, 'KAB. ACEH TIMUR', 1),
(4, 'KAB. ACEH TENGAH', 1),
(5, 'KAB. ACEH BARAT', 1),
(6, 'KAB. ACEH BESAR', 1),
(7, 'KAB. PIDIE', 1),
(8, 'KAB. ACEH UTARA', 1),
(9, 'KAB. SIMEULUE', 1),
(10, 'KAB. ACEH SINGKIL', 1),
(11, 'KAB. BIREUEN', 1),
(12, 'KAB. ACEH BARAT DAYA', 1),
(13, 'KAB. GAYO LUES', 1),
(14, 'KAB. ACEH JAYA', 1),
(15, 'KAB. NAGAN RAYA', 1),
(16, 'KAB. ACEH TAMIANG', 1),
(17, 'KAB. BENER MERIAH', 1),
(18, 'KAB. PIDIE JAYA', 1),
(19, 'KOTA BANDA ACEH', 1),
(20, 'KOTA SABANG', 1),
(21, 'KOTA LHOKSEUMAWE', 1),
(22, 'KOTA LANGSA', 1),
(23, 'KOTA SUBULUSSALAM', 1),
(24, 'KAB. TAPANULI TENGAH', 2),
(25, 'KAB. TAPANULI UTARA', 2),
(26, 'KAB. TAPANULI SELATAN', 2),
(27, 'KAB. NIAS', 2),
(28, 'KAB. LANGKAT', 2),
(29, 'KAB. KARO', 2),
(30, 'KAB. DELI SERDANG', 2),
(31, 'KAB. SIMALUNGUN', 2),
(32, 'KAB. ASAHAN', 2),
(33, 'KAB. LABUHANBATU', 2),
(34, 'KAB. DAIRI', 2),
(35, 'KAB. TOBA SAMOSIR', 2),
(36, 'KAB. MANDAILING NATAL', 2),
(37, 'KAB. NIAS SELATAN', 2),
(38, 'KAB. PAKPAK BHARAT', 2),
(39, 'KAB. HUMBANG HASUNDUTAN', 2),
(40, 'KAB. SAMOSIR', 2),
(41, 'KAB. SERDANG BEDAGAI', 2),
(42, 'KAB. BATU BARA', 2),
(43, 'KAB. PADANG LAWAS UTARA', 2),
(44, 'KAB. PADANG LAWAS', 2),
(45, 'KAB. LABUHANBATU SELATAN', 2),
(46, 'KAB. LABUHANBATU UTARA', 2),
(47, 'KAB. NIAS UTARA', 2),
(48, 'KAB. NIAS BARAT', 2),
(49, 'KOTA MEDAN', 2),
(50, 'KOTA PEMATANG SIANTAR', 2),
(51, 'KOTA SIBOLGA', 2),
(52, 'KOTA TANJUNG BALAI', 2),
(53, 'KOTA BINJAI', 2),
(54, 'KOTA TEBING TINGGI', 2),
(55, 'KOTA PADANGSIDIMPUAN', 2),
(56, 'KOTA GUNUNGSITOLI', 2),
(57, 'KAB. PESISIR SELATAN', 3),
(58, 'KAB. PESISIR SELATAN', 3),
(59, 'KAB. SOLOK', 3),
(60, 'KAB. SOLOK', 3),
(61, 'KAB. SIJUNJUNG', 3),
(62, 'KAB. SIJUNJUNG', 3),
(63, 'KAB. TANAH DATAR', 3),
(64, 'KAB. TANAH DATAR', 3),
(65, 'KAB. PADANG PARIAMAN', 3),
(66, 'KAB. PADANG PARIAMAN', 3),
(67, 'KAB. AGAM', 3),
(68, 'KAB. AGAM', 3),
(69, 'KAB. LIMA PULUH KOTA', 3),
(70, 'KAB. LIMA PULUH KOTA', 3),
(71, 'KAB. PASAMAN', 3),
(72, 'KAB. PASAMAN', 3),
(73, 'KAB. KEPULAUAN MENTAWAI', 3),
(74, 'KAB. KEPULAUAN MENTAWAI', 3),
(75, 'KAB. DHARMASRAYA', 3),
(76, 'KAB. DHARMASRAYA', 3),
(77, 'KAB. SOLOK SELATAN', 3),
(78, 'KAB. SOLOK SELATAN', 3),
(79, 'KAB. PASAMAN BARAT', 3),
(80, 'KAB. PASAMAN BARAT', 3),
(81, 'KOTA PADANG', 3),
(82, 'KOTA PADANG', 3),
(83, 'KOTA SOLOK', 3),
(84, 'KOTA SOLOK', 3),
(85, 'KOTA SAWAHLUNTO', 3),
(86, 'KOTA SAWAHLUNTO', 3),
(87, 'KOTA PADANG PANJANG', 3),
(88, 'KOTA PADANG PANJANG', 3),
(89, 'KOTA BUKITTINGGI', 3),
(90, 'KOTA BUKITTINGGI', 3),
(91, 'KOTA PAYAKUMBUH', 3),
(92, 'KOTA PAYAKUMBUH', 3),
(93, 'KOTA PARIAMAN', 3),
(94, 'KOTA PARIAMAN', 3),
(95, 'KAB. KAMPAR', 4),
(96, 'KAB. INDRAGIRI HULU', 4),
(97, 'KAB. BENGKALIS', 4),
(98, 'KAB. INDRAGIRI HILIR', 4),
(99, 'KAB.  PELALAWAN', 4),
(100, 'KAB.  ROKAN HULU', 4),
(101, 'KAB.  ROKAN HILIR', 4),
(102, 'KAB.  SIAK', 4),
(103, 'KAB. KUANTAN SINGINGI', 4),
(104, 'KAB. KEPULAUAN MERANTI', 4),
(105, 'KOTA PEKANBARU', 4),
(106, 'KOTA DUMAI', 4),
(107, 'KAB.  KERINCI', 5),
(108, 'KAB.  MERANGIN', 5),
(109, 'KAB. SAROLANGUN', 5),
(110, 'KAB. BATANGHARI', 5),
(111, 'KAB.  MUARO JAMBI', 5),
(112, 'KAB. TANJUNG JABUNG BARAT', 5),
(113, 'KAB. TANJUNG JABUNG TIMUR', 5),
(114, 'KAB. BUNGO', 5),
(115, 'KAB. TEBO', 5),
(116, 'KOTA JAMBI', 5),
(117, 'KOTA SUNGAI PENUH', 5),
(118, 'KAB. OGAN KOMERING ULU', 6),
(119, 'KAB. OGAN KOMERING ILIR', 6),
(120, 'KAB. MUARA ENIM', 6),
(121, 'KAB. LAHAT', 6),
(122, 'KAB. MUSI RAWAS', 6),
(123, 'KAB. MUSI BANYUASIN', 6),
(124, 'KAB. BANYUASIN', 6),
(125, 'KAB. OGAN KOMERING ULU TI', 6),
(126, 'KAB. OGAN KOMERING ULU SE', 6),
(127, 'KAB. OGAN ILIR', 6),
(128, 'KAB. EMPAT LAWANG', 6),
(129, 'KAB. PENUKAL ABAB LEMATAN', 6),
(130, 'KAB. MUSI RAWAS UTARA', 6),
(131, 'KOTA PALEMBANG', 6),
(132, 'KOTA PAGAR ALAM', 6),
(133, 'KOTA LUBUK LINGGAU', 6),
(134, 'KOTA PRABUMULIH', 6),
(135, 'KAB. BENGKULU SELATAN', 7),
(136, 'KAB. REJANG LEBONG', 7),
(137, 'KAB. BENGKULU UTARA', 7),
(138, 'KAB. KAUR', 7),
(139, 'KAB. SELUMA', 7),
(140, 'KAB. MUKO MUKO', 7),
(141, 'KAB. LEBONG', 7),
(142, 'KAB. KEPAHIANG', 7),
(143, 'KAB. BENGKULU TENGAH', 7),
(144, 'KOTA BENGKULU', 7),
(145, 'KAB. LAMPUNG SELATAN', 8),
(146, 'KAB. LAMPUNG TENGAH', 8),
(147, 'KAB. LAMPUNG UTARA', 8),
(148, 'KAB. LAMPUNG BARAT', 8),
(149, 'KAB. TULANG BAWANG', 8),
(150, 'KAB. TANGGAMUS', 8),
(151, 'KAB. LAMPUNG TIMUR', 8),
(152, 'KAB. WAY KANAN', 8),
(153, 'KAB. PESAWARAN', 8),
(154, 'KAB. PRINGSEWU', 8),
(155, 'KAB. MESUJI', 8),
(156, 'KAB. TULANG BAWANG BARAT', 8),
(157, 'KAB. PESISIR BARAT', 8),
(158, 'KOTA BANDAR LAMPUNG', 8),
(159, 'KOTA METRO', 8),
(160, 'KAB. BANGKA', 9),
(161, 'KAB. BELITUNG', 9),
(162, 'KAB. BANGKA SELATAN', 9),
(163, 'KAB. BANGKA TENGAH', 9),
(164, 'KAB. BANGKA BARAT', 9),
(165, 'KAB. BELITUNG TIMUR', 9),
(166, 'KOTA PANGKAL PINANG', 9),
(167, 'KAB. BINTAN', 10),
(168, 'KAB. KARIMUN', 10),
(169, 'KAB. NATUNA', 10),
(170, 'KAB. LINGGA', 10),
(171, 'KAB. KEPULAUAN ANAMBAS', 10),
(172, 'KOTA BATAM', 10),
(173, 'KOTA TANJUNG PINANG', 10),
(174, 'KAB. ADM. KEP. SERIBU', 11),
(175, 'KOTA ADM. JAKARTA PUSAT', 11),
(176, 'KOTA ADM. JAKARTA UTARA', 11),
(177, 'KOTA ADM. JAKARTA BARAT', 11),
(178, 'KOTA ADM. JAKARTA SELATAN', 11),
(179, 'KOTA ADM. JAKARTA TIMUR', 11),
(180, 'KAB. BOGOR', 12),
(181, 'KAB. SUKABUMI', 12),
(182, 'KAB. CIANJUR', 12),
(183, 'KAB. BANDUNG', 12),
(184, 'KAB. GARUT', 12),
(185, 'KAB. TASIKMALAYA', 12),
(186, 'KAB. CIAMIS', 12),
(187, 'KAB. KUNINGAN', 12),
(188, 'KAB. CIREBON', 12),
(189, 'KAB. MAJALENGKA', 12),
(190, 'KAB. SUMEDANG', 12),
(191, 'KAB. INDRAMAYU', 12),
(192, 'KAB. SUBANG', 12),
(193, 'KAB. PURWAKARTA', 12),
(194, 'KAB. KARAWANG', 12),
(195, 'KAB. BEKASI', 12),
(196, 'KAB. BANDUNG BARAT', 12),
(197, 'KAB. PANGANDARAN', 12),
(198, 'KOTA BOGOR', 12),
(199, 'KOTA SUKABUMI', 12),
(200, 'KOTA BANDUNG', 12),
(201, 'KOTA CIREBON', 12),
(202, 'KOTA BEKASI', 12),
(203, 'KOTA DEPOK', 12),
(204, 'KOTA CIMAHI', 12),
(205, 'KOTA TASIKMALAYA', 12),
(206, 'KOTA BANJAR', 12),
(207, 'KAB. CILACAP', 13),
(208, 'KAB. BANYUMAS', 13),
(209, 'KAB. PURBALINGGA', 13),
(210, 'KAB. BANJARNEGARA', 13),
(211, 'KAB. KEBUMEN', 13),
(212, 'KAB. PURWOREJO', 13),
(213, 'KAB. WONOSOBO', 13),
(214, 'KAB. MAGELANG', 13),
(215, 'KAB. BOYOLALI', 13),
(216, 'KAB. KLATEN', 13),
(217, 'KAB. SUKOHARJO', 13),
(218, 'KAB. WONOGIRI', 13),
(219, 'KAB. KARANGANYAR', 13),
(220, 'KAB. SRAGEN', 13),
(221, 'KAB. GROBOGAN', 13),
(222, 'KAB. BLORA', 13),
(223, 'KAB. REMBANG', 13),
(224, 'KAB. PATI', 13),
(225, 'KAB. KUDUS', 13),
(226, 'KAB. JEPARA', 13),
(227, 'KAB. DEMAK', 13),
(228, 'KAB. SEMARANG', 13),
(229, 'KAB. TEMANGGUNG', 13),
(230, 'KAB. KENDAL', 13),
(231, 'KAB. BATANG', 13),
(232, 'KAB. PEKALONGAN', 13),
(233, 'KAB. PEMALANG', 13),
(234, 'KAB. TEGAL', 13),
(235, 'KAB. BREBES', 13),
(236, 'KOTA MAGELANG', 13),
(237, 'KOTA SURAKARTA', 13),
(238, 'KOTA SALATIGA', 13),
(239, 'KOTA SEMARANG', 13),
(240, 'KOTA PEKALONGAN', 13),
(241, 'KOTA TEGAL', 13),
(242, 'KAB. KULON PROGO', 14),
(243, 'KAB. BANTUL', 14),
(244, 'KAB. GUNUNGKIDUL', 14),
(245, 'KAB. SLEMAN', 14),
(246, 'KOTA YOGYAKARTA', 14),
(247, 'KAB. PACITAN', 15),
(248, 'KAB. PONOROGO', 15),
(249, 'KAB. TRENGGALEK', 15),
(250, 'KAB. TULUNGAGUNG', 15),
(251, 'KAB. BLITAR', 15),
(252, 'KAB. KEDIRI', 15),
(253, 'KAB. MALANG', 15),
(254, 'KAB. LUMAJANG', 15),
(255, 'KAB. JEMBER', 15),
(256, 'KAB. BANYUWANGI', 15),
(257, 'KAB. BONDOWOSO', 15),
(258, 'KAB. SITUBONDO', 15),
(259, 'KAB. PROBOLINGGO', 15),
(260, 'KAB. PASURUAN', 15),
(261, 'KAB. SIDOARJO', 15),
(262, 'KAB. MOJOKERTO', 15),
(263, 'KAB. JOMBANG', 15),
(264, 'KAB. NGANJUK', 15),
(265, 'KAB. MADIUN', 15),
(266, 'KAB. MAGETAN', 15),
(267, 'KAB. NGAWI', 15),
(268, 'KAB. BOJONEGORO', 15),
(269, 'KAB. TUBAN', 15),
(270, 'KAB. LAMONGAN', 15),
(271, 'KAB. GRESIK', 15),
(272, 'KAB. BANGKALAN', 15),
(273, 'KAB. SAMPANG', 15),
(274, 'KAB. PAMEKASAN', 15),
(275, 'KAB. SUMENEP', 15),
(276, 'KOTA KEDIRI', 15),
(277, 'KOTA BLITAR', 15),
(278, 'KOTA MALANG', 15),
(279, 'KOTA PROBOLINGGO', 15),
(280, 'KOTA PASURUAN', 15),
(281, 'KOTA MOJOKERTO', 15),
(282, 'KOTA MADIUN', 15),
(283, 'KOTA SURABAYA', 15),
(284, 'KOTA BATU', 15),
(285, 'KAB. PANDEGLANG', 16),
(286, 'KAB. LEBAK', 16),
(287, 'KAB. TANGERANG', 16),
(288, 'KAB. SERANG', 16),
(289, 'KOTA TANGERANG', 16),
(290, 'KOTA CILEGON', 16),
(291, 'KOTA SERANG', 16),
(292, 'KOTA TANGERANG SELATAN', 16),
(293, 'KAB. JEMBRANA', 17),
(294, 'KAB. TABANAN', 17),
(295, 'KAB. BADUNG', 17),
(296, 'KAB. GIANYAR', 17),
(297, 'KAB. KLUNGKUNG', 17),
(298, 'KAB. BANGLI', 17),
(299, 'KAB. KARANGASEM', 17),
(300, 'KAB. BULELENG', 17),
(301, 'KOTA DENPASAR', 17),
(302, 'KAB. LOMBOK BARAT', 18),
(303, 'KAB. LOMBOK TENGAH', 18),
(304, 'KAB. LOMBOK TIMUR', 18),
(305, 'KAB. SUMBAWA', 18),
(306, 'KAB. DOMPU', 18),
(307, 'KAB. BIMA', 18),
(308, 'KAB. SUMBAWA BARAT', 18),
(309, 'KAB. LOMBOK UTARA', 18),
(310, 'KOTA MATARAM', 18),
(311, 'KOTA BIMA', 18),
(312, 'KAB. KUPANG', 19),
(313, 'KAB TIMOR TENGAH SELATAN', 19),
(314, 'KAB. TIMOR TENGAH UTARA', 19),
(315, 'KAB. BELU', 19),
(316, 'KAB. ALOR', 19),
(317, 'KAB. FLORES TIMUR', 19),
(318, 'KAB. SIKKA', 19),
(319, 'KAB. ENDE', 19),
(320, 'KAB. NGADA', 19),
(321, 'KAB. MANGGARAI', 19),
(322, 'KAB. SUMBA TIMUR', 19),
(323, 'KAB. SUMBA BARAT', 19),
(324, 'KAB. LEMBATA', 19),
(325, 'KAB. ROTE NDAO', 19),
(326, 'KAB. MANGGARAI BARAT', 19),
(327, 'KAB. NAGEKEO', 19),
(328, 'KAB. SUMBA TENGAH', 19),
(329, 'KAB. SUMBA BARAT DAYA', 19),
(330, 'KAB. MANGGARAI TIMUR', 19),
(331, 'KAB. SABU RAIJUA', 19),
(332, 'KAB. MALAKA', 19),
(333, 'KOTA KUPANG', 19),
(334, 'KAB. SAMBAS', 20),
(335, 'KAB. MEMPAWAH', 20),
(336, 'KAB. SANGGAU', 20),
(337, 'KAB. KETAPANG', 20),
(338, 'KAB. SINTANG', 20),
(339, 'KAB. KAPUAS HULU', 20),
(340, 'KAB. BENGKAYANG', 20),
(341, 'KAB. LANDAK', 20),
(342, 'KAB. SEKADAU', 20),
(343, 'KAB. MELAWI', 20),
(344, 'KAB. KAYONG UTARA', 20),
(345, 'KAB. KUBU RAYA', 20),
(346, 'KOTA PONTIANAK', 20),
(347, 'KOTA SINGKAWANG', 20),
(348, 'KAB. KOTAWARINGIN BARAT', 21),
(349, 'KAB. KOTAWARINGIN TIMUR', 21),
(350, 'KAB. KAPUAS', 21),
(351, 'KAB. BARITO SELATAN', 21),
(352, 'KAB. BARITO UTARA', 21),
(353, 'KAB. KATINGAN', 21),
(354, 'KAB. SERUYAN', 21),
(355, 'KAB. SUKAMARA', 21),
(356, 'KAB. LAMANDAU', 21),
(357, 'KAB. GUNUNG MAS', 21),
(358, 'KAB. PULANG PISAU', 21),
(359, 'KAB. MURUNG RAYA', 21),
(360, 'KAB. BARITO TIMUR', 21),
(361, 'KOTA PALANGKARAYA', 21),
(362, 'KAB. TANAH LAUT', 22),
(363, 'KAB. KOTABARU', 22),
(364, 'KAB. BANJAR', 22),
(365, 'KAB. BARITO KUALA', 22),
(366, 'KAB. TAPIN', 22),
(367, 'KAB. HULU SUNGAI SELATAN', 22),
(368, 'KAB. HULU SUNGAI TENGAH', 22),
(369, 'KAB. HULU SUNGAI UTARA', 22),
(370, 'KAB. TABALONG', 22),
(371, 'KAB. TANAH BUMBU', 22),
(372, 'KAB. BALANGAN', 22),
(373, 'KOTA BANJARMASIN', 22),
(374, 'KOTA BANJARBARU', 22),
(375, 'KAB. PASER', 23),
(376, 'KAB. KUTAI KARTANEGARA', 23),
(377, 'KAB. BERAU', 23),
(378, 'KAB. KUTAI BARAT', 23),
(379, 'KAB. KUTAI TIMUR', 23),
(380, 'KAB. PENAJAM PASER UTARA', 23),
(381, 'KAB. MAHAKAM ULU', 23),
(382, 'KOTA BALIKPAPAN', 23),
(383, 'KOTA SAMARINDA', 23),
(384, 'KOTA BONTANG', 23),
(385, 'KAB. BULUNGAN', 24),
(386, 'KAB. MALINAU', 24),
(387, 'KAB. NUNUKAN', 24),
(388, 'KAB. TANA TIDUNG', 24),
(389, 'KOTA TARAKAN', 24),
(390, 'KAB. BOLAANG MONGONDOW', 25),
(391, 'KAB. MINAHASA', 25),
(392, 'KAB. KEPULAUAN SANGIHE', 25),
(393, 'KAB. KEPULAUAN TALAUD', 25),
(394, 'KAB. MINAHASA SELATAN', 25),
(395, 'KAB. MINAHASA UTARA', 25),
(396, 'KAB. MINAHASA TENGGARA', 25),
(397, 'KAB. BOLAANG MONGONDOW UT', 25),
(398, 'KAB. KEP. SIAU TAGULANDAN', 25),
(399, 'KAB. BOLAANG MONGONDOW TI', 25),
(400, 'KAB. BOLAANG MONGONDOW SE', 25),
(401, 'KOTA MANADO', 25),
(402, 'KOTA BITUNG', 25),
(403, 'KOTA TOMOHON', 25),
(404, 'KOTA KOTAMOBAGU', 25),
(405, 'KAB. BANGGAI', 26),
(406, 'KAB. POSO', 26),
(407, 'KAB. DONGGALA', 26),
(408, 'KAB. TOLI TOLI', 26),
(409, 'KAB. BUOL', 26),
(410, 'KAB. MOROWALI', 26),
(411, 'KAB. BANGGAI KEPULAUAN', 26),
(412, 'KAB. PARIGI MOUTONG', 26),
(413, 'KAB. TOJO UNA UNA', 26),
(414, 'KAB. SIGI', 26),
(415, 'KAB. BANGGAI LAUT', 26),
(416, 'KAB. MOROWALI UTARA', 26),
(417, 'KOTA PALU', 26),
(418, 'KAB. KEPULAUAN SELAYAR', 27),
(419, 'KAB. BULUKUMBA', 27),
(420, 'KAB. BANTAENG', 27),
(421, 'KAB. JENEPONTO', 27),
(422, 'KAB. TAKALAR', 27),
(423, 'KAB. GOWA', 27),
(424, 'KAB. SINJAI', 27),
(425, 'KAB. BONE', 27),
(426, 'KAB. MAROS', 27),
(427, 'KAB. PANGKAJENE KEPULAUAN', 27),
(428, 'KAB. BARRU', 27),
(429, 'KAB. SOPPENG', 27),
(430, 'KAB. WAJO', 27),
(431, 'KAB. SIDENRENG RAPPANG', 27),
(432, 'KAB. PINRANG', 27),
(433, 'KAB. ENREKANG', 27),
(434, 'KAB. LUWU', 27),
(435, 'KAB. TANA TORAJA', 27),
(436, 'KAB. LUWU UTARA', 27),
(437, 'KAB. LUWU TIMUR', 27),
(438, 'KAB. TORAJA UTARA', 27),
(439, 'KOTA MAKASSAR', 27),
(440, 'KOTA PARE PARE', 27),
(441, 'KOTA PALOPO', 27),
(442, 'KAB. KOLAKA', 28),
(443, 'KAB. KONAWE', 28),
(444, 'KAB. MUNA', 28),
(445, 'KAB. BUTON', 28),
(446, 'KAB. KONAWE SELATAN', 28),
(447, 'KAB. BOMBANA', 28),
(448, 'KAB. WAKATOBI', 28),
(449, 'KAB. KOLAKA UTARA', 28),
(450, 'KAB. KONAWE UTARA', 28),
(451, 'KAB. BUTON UTARA', 28),
(452, 'KAB. KOLAKA TIMUR', 28),
(453, 'KAB. KONAWE KEPULAUAN', 28),
(454, 'KAB. MUNA BARAT', 28),
(455, 'KAB. BUTON TENGAH', 28),
(456, 'KAB. BUTON SELATAN', 28),
(457, 'KOTA KENDARI', 28),
(458, 'KOTA BAU BAU', 28),
(459, 'KAB. GORONTALO', 29),
(460, 'KAB. BOALEMO', 29),
(461, 'KAB. BONE BOLANGO', 29),
(462, 'KAB. PAHUWATO', 29),
(463, 'KAB. GORONTALO UTARA', 29),
(464, 'KOTA GORONTALO', 29),
(465, 'KAB. MAMUJU UTARA', 30),
(466, 'KAB. MAMUJU', 30),
(467, 'KAB. MAMASA', 30),
(468, 'KAB. POLEWALI MANDAR', 30),
(469, 'KAB. MAJENE', 30),
(470, 'KAB. MAMUJU TENGAH', 30),
(471, 'KAB. MALUKU TENGAH', 31),
(472, 'KAB. MALUKU TENGGARA', 31),
(473, 'KAB MALUKU TENGGARA BARAT', 31),
(474, 'KAB. BURU', 31),
(475, 'KAB. SERAM BAGIAN TIMUR', 31),
(476, 'KAB. SERAM BAGIAN BARAT', 31),
(477, 'KAB. KEPULAUAN ARU', 31),
(478, 'KAB. MALUKU BARAT DAYA', 31),
(479, 'KAB. BURU SELATAN', 31),
(480, 'KOTA AMBON', 31),
(481, 'KOTA TUAL', 31),
(482, 'KAB. HALMAHERA BARAT', 32),
(483, 'KAB. HALMAHERA TENGAH', 32),
(484, 'KAB. HALMAHERA UTARA', 32),
(485, 'KAB. HALMAHERA SELATAN', 32),
(486, 'KAB. KEPULAUAN SULA', 32),
(487, 'KAB. HALMAHERA TIMUR', 32),
(488, 'KAB. PULAU MOROTAI', 32),
(489, 'KAB. PULAU TALIABU', 32),
(490, 'KOTA TERNATE', 32),
(491, 'KOTA TIDORE KEPULAUAN', 32),
(492, 'KAB. MERAUKE', 33),
(493, 'KAB. JAYAWIJAYA', 33),
(494, 'KAB. JAYAPURA', 33),
(495, 'KAB. NABIRE', 33),
(496, 'KAB. KEPULAUAN YAPEN', 33),
(497, 'KAB. BIAK NUMFOR', 33),
(498, 'KAB. PUNCAK JAYA', 33),
(499, 'KAB. PANIAI', 33),
(500, 'KAB. MIMIKA', 33),
(501, 'KAB. SARMI', 33),
(502, 'KAB. KEEROM', 33),
(503, 'KAB PEGUNUNGAN BINTANG', 33),
(504, 'KAB. YAHUKIMO', 33),
(505, 'KAB. TOLIKARA', 33),
(506, 'KAB. WAROPEN', 33),
(507, 'KAB. BOVEN DIGOEL', 33),
(508, 'KAB. MAPPI', 33),
(509, 'KAB. ASMAT', 33),
(510, 'KAB. SUPIORI', 33),
(511, 'KAB. MAMBERAMO RAYA', 33),
(512, 'KAB. MAMBERAMO TENGAH', 33),
(513, 'KAB. YALIMO', 33),
(514, 'KAB. LANNY JAYA', 33),
(515, 'KAB. NDUGA', 33),
(516, 'KAB. PUNCAK', 33),
(517, 'KAB. DOGIYAI', 33),
(518, 'KAB. INTAN JAYA', 33),
(519, 'KAB. DEIYAI', 33),
(520, 'KOTA JAYAPURA', 33),
(521, 'KAB. SORONG', 34),
(522, 'KAB. MANOKWARI', 34),
(523, 'KAB. FAK FAK', 34),
(524, 'KAB. SORONG SELATAN', 34),
(525, 'KAB. RAJA AMPAT', 34),
(526, 'KAB. TELUK BINTUNI', 34),
(527, 'KAB. TELUK WONDAMA', 34),
(528, 'KAB. KAIMANA', 34),
(529, 'KAB. TAMBRAUW', 34),
(530, 'KAB. MAYBRAT', 34),
(531, 'KAB. MANOKWARI SELATAN', 34),
(532, 'KAB. PEGUNUNGAN ARFAK', 34),
(533, 'KOTA SORONG', 34);

-- --------------------------------------------------------

--
-- Table structure for table `tb_mata_pelajaran`
--

CREATE TABLE `tb_mata_pelajaran` (
  `id_mata_pelajaran` int(11) NOT NULL,
  `nama_mata_pelajaran` varchar(50) NOT NULL,
  `tingkat_mata_pelajaran` varchar(20) NOT NULL,
  `semester_mata_pelajaran` varchar(20) NOT NULL,
  `kelas_mata_pelajaran` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tb_mata_pelajaran`
--

INSERT INTO `tb_mata_pelajaran` (`id_mata_pelajaran`, `nama_mata_pelajaran`, `tingkat_mata_pelajaran`, `semester_mata_pelajaran`, `kelas_mata_pelajaran`) VALUES
(2, 'mengaji', '1', 'ganjil', '2'),
(3, 'ipa', '2', 'ganjil', 'smp'),
(4, 'fiqih', 'mualimin', 'ganjil', '2'),
(5, 'matematika', '23', 'ganjil', 'smp');

-- --------------------------------------------------------

--
-- Table structure for table `tb_materi_tes`
--

CREATE TABLE `tb_materi_tes` (
  `id_materi_tes` varchar(20) NOT NULL,
  `materi_tes` varchar(40) NOT NULL,
  `tanggal_tes` date NOT NULL,
  `tahun_ajaran` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `tb_pak_afilasi`
--

CREATE TABLE `tb_pak_afilasi` (
  `id` int(11) NOT NULL,
  `pak` varchar(255) NOT NULL,
  `jam` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tb_pak_afilasi`
--

INSERT INTO `tb_pak_afilasi` (`id`, `pak`, `jam`) VALUES
(3, '1', '14.00'),
(4, '2', '15.00'),
(6, '12', '02:01');

-- --------------------------------------------------------

--
-- Table structure for table `tb_pak_pondokan`
--

CREATE TABLE `tb_pak_pondokan` (
  `id` int(11) NOT NULL,
  `pak` varchar(255) NOT NULL,
  `jam` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tb_pak_pondokan`
--

INSERT INTO `tb_pak_pondokan` (`id`, `pak`, `jam`) VALUES
(1, '1', '08:00'),
(2, '2', '09:00'),
(3, '3', '10:00'),
(4, '4', '11:00'),
(5, '5', '12:00');

-- --------------------------------------------------------

--
-- Table structure for table `tb_pekerjaan`
--

CREATE TABLE `tb_pekerjaan` (
  `id_pekerjaan` int(11) NOT NULL,
  `nama_pekerjaan` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tb_pekerjaan`
--

INSERT INTO `tb_pekerjaan` (`id_pekerjaan`, `nama_pekerjaan`) VALUES
(1, 'wirausaha');

-- --------------------------------------------------------

--
-- Table structure for table `tb_pelajaran`
--

CREATE TABLE `tb_pelajaran` (
  `id_pelajaran` int(11) NOT NULL,
  `nip_guru` varchar(20) NOT NULL,
  `id_mata_pelajaran` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tb_pelajaran`
--

INSERT INTO `tb_pelajaran` (`id_pelajaran`, `nip_guru`, `id_mata_pelajaran`) VALUES
(3, '123', 1),
(4, '123', 2),
(5, '12', 3);

-- --------------------------------------------------------

--
-- Table structure for table `tb_pelanggaran`
--

CREATE TABLE `tb_pelanggaran` (
  `id_pelanggaran` int(11) NOT NULL,
  `pelanggaran` varchar(50) NOT NULL,
  `nis_santri` varchar(10) NOT NULL,
  `tanggal_pelanggaran` date NOT NULL,
  `jenis_pelanggaran` varchar(50) NOT NULL,
  `keterangan` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tb_pelanggaran`
--

INSERT INTO `tb_pelanggaran` (`id_pelanggaran`, `pelanggaran`, `nis_santri`, `tanggal_pelanggaran`, `jenis_pelanggaran`, `keterangan`) VALUES
(1, 'copo', '1', '2018-03-27', 'keren', 'ez');

-- --------------------------------------------------------

--
-- Table structure for table `tb_pelanggaran_p`
--

CREATE TABLE `tb_pelanggaran_p` (
  `id_pelanggaran` int(11) NOT NULL,
  `pelanggaran` varchar(50) NOT NULL,
  `nis_santri` varchar(10) NOT NULL,
  `tanggal_pelanggaran` date NOT NULL,
  `jenis_pelanggaran` varchar(50) NOT NULL,
  `keterangan` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tb_pelanggaran_p`
--

INSERT INTO `tb_pelanggaran_p` (`id_pelanggaran`, `pelanggaran`, `nis_santri`, `tanggal_pelanggaran`, `jenis_pelanggaran`, `keterangan`) VALUES
(1, 'telat', '1', '2018-05-18', 'ringan', 'y');

-- --------------------------------------------------------

--
-- Table structure for table `tb_pembayaran_spp`
--

CREATE TABLE `tb_pembayaran_spp` (
  `id_pembayaran` int(11) NOT NULL,
  `nis_santri` varchar(10) NOT NULL,
  `tanggal_bayar` date NOT NULL,
  `spp_bulan` varchar(25) NOT NULL,
  `spp_tahun` varchar(10) NOT NULL,
  `status_bayar` varchar(20) NOT NULL,
  `petugas` varchar(20) NOT NULL,
  `besar_bayar` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tb_pembayaran_spp`
--

INSERT INTO `tb_pembayaran_spp` (`id_pembayaran`, `nis_santri`, `tanggal_bayar`, `spp_bulan`, `spp_tahun`, `status_bayar`, `petugas`, `besar_bayar`) VALUES
(3, '1', '2018-03-20', '03', '2017', 'lunas', 'madanakd', 0),
(5, '12', '2018-03-21', '04', '2018', 'lunas', 'madanakd', 0),
(6, '1', '2018-03-21', '06', '2018', 'lunas', 'madanakd', 0),
(7, '1', '2018-05-14', '05', '2018', 'lunas', 'madanakd', 0),
(8, '1', '2018-07-11', '07', '2018', 'lunas', 'madan', 300000),
(9, '1', '2018-07-17', '07', '2018', 'lunas', 'madan', 200000);

-- --------------------------------------------------------

--
-- Table structure for table `tb_pembayaran_spp_p`
--

CREATE TABLE `tb_pembayaran_spp_p` (
  `id_pembayaran` int(11) NOT NULL,
  `nis_santri` varchar(10) NOT NULL,
  `tanggal_bayar` date NOT NULL,
  `spp_bulan` varchar(25) NOT NULL,
  `spp_tahun` varchar(10) NOT NULL,
  `status_bayar` varchar(20) NOT NULL,
  `petugas` varchar(20) NOT NULL,
  `besar_bayar` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tb_pembayaran_spp_p`
--

INSERT INTO `tb_pembayaran_spp_p` (`id_pembayaran`, `nis_santri`, `tanggal_bayar`, `spp_bulan`, `spp_tahun`, `status_bayar`, `petugas`, `besar_bayar`) VALUES
(2, '999', '2018-05-19', '06', '2018', 'lunas', 'madanakd', 600000),
(3, '8900', '2018-06-19', '06', '2018', 'lunas', 'madan', 500000);

-- --------------------------------------------------------

--
-- Table structure for table `tb_pendidikan`
--

CREATE TABLE `tb_pendidikan` (
  `id_pendidikan` int(11) NOT NULL,
  `nama_pendidikan` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tb_pendidikan`
--

INSERT INTO `tb_pendidikan` (`id_pendidikan`, `nama_pendidikan`) VALUES
(1, 'sarjana'),
(2, 'sma'),
(3, 'smp'),
(4, 'magister');

-- --------------------------------------------------------

--
-- Table structure for table `tb_pengaturan_pendaftaran`
--

CREATE TABLE `tb_pengaturan_pendaftaran` (
  `id_pengaturan` int(11) NOT NULL,
  `tahun_ajaran` varchar(20) NOT NULL,
  `pendaftaran_aktif` varchar(5) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tb_pengaturan_pendaftaran`
--

INSERT INTO `tb_pengaturan_pendaftaran` (`id_pengaturan`, `tahun_ajaran`, `pendaftaran_aktif`) VALUES
(1, '4', '1');

-- --------------------------------------------------------

--
-- Table structure for table `tb_pengaturan_portal`
--

CREATE TABLE `tb_pengaturan_portal` (
  `id_pengaturan` int(11) NOT NULL,
  `tahun_ajaran` varchar(20) NOT NULL,
  `kepsekmualimin` varchar(255) NOT NULL,
  `nipkepsekmualimin` varchar(255) NOT NULL,
  `kepsekmualimat` varchar(255) NOT NULL,
  `nipkepsekmualimat` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tb_pengaturan_portal`
--

INSERT INTO `tb_pengaturan_portal` (`id_pengaturan`, `tahun_ajaran`, `kepsekmualimin`, `nipkepsekmualimin`, `kepsekmualimat`, `nipkepsekmualimat`) VALUES
(1, '1', 'asd', '123', 'dsa', '321');

-- --------------------------------------------------------

--
-- Table structure for table `tb_pengumuman`
--

CREATE TABLE `tb_pengumuman` (
  `id_pengumuman` int(11) NOT NULL,
  `judul_pengumuman` varchar(100) NOT NULL,
  `isi_pengumuman` text,
  `link_pengumuman` varchar(100) DEFAULT NULL,
  `tanggal_pengumuman` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tb_pengumuman`
--

INSERT INTO `tb_pengumuman` (`id_pengumuman`, `judul_pengumuman`, `isi_pengumuman`, `link_pengumuman`, `tanggal_pengumuman`) VALUES
(1, 'pertama', 'ini adalah pengumuman pertama yag dibuat untuk ditampilkan pada halaman pengumuman. ', 'http://facebook.com', '2018-02-13'),
(2, 'pengumuman kedua', 'melakukan testing tampilan pengumuman', 'localhost/portal_terpadu_pesantren/santri/pendaftaran/', '2018-02-13'),
(8, 'asd', '', 'dasdads', '2018-02-25'),
(9, 'asdad', '<p>sikaat</p>', 'asda', '2018-01-30'),
(10, '1', '<h1><span style=\"background-color: rgb(255, 255, 0);\">11</span></h1>', '11', '2018-02-25'),
(11, 'tes', '<p>das</p>', 'asda', '2018-06-06');

-- --------------------------------------------------------

--
-- Table structure for table `tb_pengumuman_ortu`
--

CREATE TABLE `tb_pengumuman_ortu` (
  `id_pengumuman` int(11) NOT NULL,
  `judul_pengumuman` varchar(100) NOT NULL,
  `isi_pengumuman` text,
  `link_pengumuman` varchar(100) DEFAULT NULL,
  `tanggal_pengumuman` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tb_pengumuman_ortu`
--

INSERT INTO `tb_pengumuman_ortu` (`id_pengumuman`, `judul_pengumuman`, `isi_pengumuman`, `link_pengumuman`, `tanggal_pengumuman`) VALUES
(1, 'pertama', 'ini adalah pengumuman pertama yag dibuat untuk ditampilkan pada halaman pengumuman. ', 'http://facebook.com', '2018-02-13'),
(2, 'pengumuman kedua', 'melakukan testing tampilan pengumuman', 'localhost/portal_terpadu_pesantren/santri/pendaftaran/', '2018-02-13'),
(10, '1', '<h1><span style=\"background-color: rgb(255, 255, 0);\">11</span></h1>', '11', '2018-02-25'),
(121, 'ke empat', 'ini yang ke empat', 'oke', '2018-05-07'),
(122, 'tes', '<p>pengumuman</p>', '', '2018-07-17');

-- --------------------------------------------------------

--
-- Table structure for table `tb_perizinan_atur_denda`
--

CREATE TABLE `tb_perizinan_atur_denda` (
  `id_aturan` int(11) NOT NULL,
  `denda_perjam` int(11) NOT NULL,
  `denda_maks` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tb_perizinan_atur_denda`
--

INSERT INTO `tb_perizinan_atur_denda` (`id_aturan`, `denda_perjam`, `denda_maks`) VALUES
(1, 5000, 50000);

-- --------------------------------------------------------

--
-- Table structure for table `tb_perizinan_bayar`
--

CREATE TABLE `tb_perizinan_bayar` (
  `id_bayar` int(11) NOT NULL,
  `id_denda` int(11) NOT NULL,
  `besar_bayar` int(11) NOT NULL,
  `tanggal_bayar` date NOT NULL,
  `petugas` varchar(25) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tb_perizinan_bayar`
--

INSERT INTO `tb_perizinan_bayar` (`id_bayar`, `id_denda`, `besar_bayar`, `tanggal_bayar`, `petugas`) VALUES
(2, 1, 50000, '2018-07-17', 'madan');

-- --------------------------------------------------------

--
-- Table structure for table `tb_perizinan_bayar_p`
--

CREATE TABLE `tb_perizinan_bayar_p` (
  `id_bayar` int(11) NOT NULL,
  `id_denda` int(11) NOT NULL,
  `besar_bayar` int(11) NOT NULL,
  `tanggal_bayar` date NOT NULL,
  `petugas` varchar(25) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tb_perizinan_bayar_p`
--

INSERT INTO `tb_perizinan_bayar_p` (`id_bayar`, `id_denda`, `besar_bayar`, `tanggal_bayar`, `petugas`) VALUES
(1, 1, 100000, '2018-05-30', 'madanprzstw'),
(2, 1, 50000, '2018-05-30', 'madanprzstw'),
(3, 1, 50000, '2018-06-19', 'madanprzstw'),
(4, 2, 100000, '2018-07-04', 'madan');

-- --------------------------------------------------------

--
-- Table structure for table `tb_perizinan_denda`
--

CREATE TABLE `tb_perizinan_denda` (
  `id_denda` int(11) NOT NULL,
  `id_kembali` int(11) NOT NULL,
  `besar_denda` int(11) NOT NULL,
  `status_pembayaran` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tb_perizinan_denda`
--

INSERT INTO `tb_perizinan_denda` (`id_denda`, `id_kembali`, `besar_denda`, `status_pembayaran`) VALUES
(1, 9, 50000, 'lunas');

-- --------------------------------------------------------

--
-- Table structure for table `tb_perizinan_denda_p`
--

CREATE TABLE `tb_perizinan_denda_p` (
  `id_denda` int(11) NOT NULL,
  `id_kembali` int(11) NOT NULL,
  `besar_denda` int(11) NOT NULL,
  `status_pembayaran` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tb_perizinan_denda_p`
--

INSERT INTO `tb_perizinan_denda_p` (`id_denda`, `id_kembali`, `besar_denda`, `status_pembayaran`) VALUES
(1, 9, 200000, 'lunas'),
(2, 10, 50000, 'lunas');

-- --------------------------------------------------------

--
-- Table structure for table `tb_perizinan_keluar`
--

CREATE TABLE `tb_perizinan_keluar` (
  `id_keluar` int(11) NOT NULL,
  `nis_santri` varchar(10) NOT NULL,
  `tanggal_keluar` datetime NOT NULL,
  `harus_kembali` datetime NOT NULL,
  `keperluan` text NOT NULL,
  `id_penjemput` int(11) NOT NULL,
  `petugas` varchar(25) NOT NULL,
  `status_keluar` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tb_perizinan_keluar`
--

INSERT INTO `tb_perizinan_keluar` (`id_keluar`, `nis_santri`, `tanggal_keluar`, `harus_kembali`, `keperluan`, `id_penjemput`, `petugas`, `status_keluar`) VALUES
(4, '2', '2018-05-09 09:08:20', '0000-00-00 00:00:00', 'oke', 0, '2', 'kembali'),
(6, '1', '2018-05-29 11:43:30', '0000-00-00 00:00:00', 'pergi', 1, '2', 'kembali'),
(9, '12', '2018-06-13 10:13:11', '2018-07-04 07:00:00', 'pergi', 1, '2', 'keluar'),
(10, '1', '2018-07-17 17:27:18', '2018-07-19 07:00:00', 'pergi', 1, '1', 'kembali');

-- --------------------------------------------------------

--
-- Table structure for table `tb_perizinan_keluar_p`
--

CREATE TABLE `tb_perizinan_keluar_p` (
  `id_keluar` int(11) NOT NULL,
  `nis_santri` varchar(10) NOT NULL,
  `tanggal_keluar` datetime NOT NULL,
  `harus_kembali` datetime NOT NULL,
  `keperluan` text NOT NULL,
  `id_penjemput` int(11) NOT NULL,
  `petugas` varchar(25) NOT NULL,
  `status_keluar` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tb_perizinan_keluar_p`
--

INSERT INTO `tb_perizinan_keluar_p` (`id_keluar`, `nis_santri`, `tanggal_keluar`, `harus_kembali`, `keperluan`, `id_penjemput`, `petugas`, `status_keluar`) VALUES
(3, '1', '2018-05-09 09:01:51', '2018-05-31 14:44:35', 'gone', 0, '2', 'kembali'),
(4, '2', '2018-05-09 09:08:20', '0000-00-00 00:00:00', 'oke', 0, '2', 'kembali'),
(7, '8900', '2018-06-13 10:17:28', '2018-06-06 07:00:00', 'pergi', 1, '2', 'kembali');

-- --------------------------------------------------------

--
-- Table structure for table `tb_perizinan_kembali`
--

CREATE TABLE `tb_perizinan_kembali` (
  `id_kembali` int(11) NOT NULL,
  `id_keluar` int(11) NOT NULL,
  `tanggal_kembali` datetime NOT NULL,
  `status_denda` varchar(2) NOT NULL,
  `petugas` varchar(25) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tb_perizinan_kembali`
--

INSERT INTO `tb_perizinan_kembali` (`id_kembali`, `id_keluar`, `tanggal_kembali`, `status_denda`, `petugas`) VALUES
(1, 1, '2018-03-13 00:00:00', '1', '1'),
(2, 2, '2018-03-14 00:00:00', '1', 'madanprz'),
(3, 2, '2018-03-18 15:25:34', '1', 'madanprz'),
(4, 1, '2018-04-04 08:41:52', '1', 'madanprz'),
(5, 1, '2018-05-09 09:11:16', '0', 'madanprz'),
(6, 1, '2018-05-09 09:11:24', '0', 'madanprz'),
(7, 3, '2018-05-09 09:13:21', '0', 'madanprz'),
(8, 4, '2018-05-09 09:13:29', '0', 'madanprz'),
(9, 6, '2018-07-09 08:56:34', '1', 'madan'),
(10, 10, '2018-07-17 17:30:38', '0', 'madan');

-- --------------------------------------------------------

--
-- Table structure for table `tb_perizinan_kembali_p`
--

CREATE TABLE `tb_perizinan_kembali_p` (
  `id_kembali` int(11) NOT NULL,
  `id_keluar` int(11) NOT NULL,
  `tanggal_kembali` datetime NOT NULL,
  `status_denda` varchar(2) NOT NULL,
  `petugas` varchar(25) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tb_perizinan_kembali_p`
--

INSERT INTO `tb_perizinan_kembali_p` (`id_kembali`, `id_keluar`, `tanggal_kembali`, `status_denda`, `petugas`) VALUES
(9, 3, '2018-05-31 14:44:35', '1', 'madanprz'),
(10, 7, '2018-07-01 14:48:18', '1', 'madan');

-- --------------------------------------------------------

--
-- Table structure for table `tb_perizinan_penjemput`
--

CREATE TABLE `tb_perizinan_penjemput` (
  `id_penjemput` int(11) NOT NULL,
  `no_identitas` varchar(40) NOT NULL,
  `nama_penjemput` varchar(50) NOT NULL,
  `no_telp` varchar(20) NOT NULL,
  `alamat_penjemput` text NOT NULL,
  `hubungan_penjemput` varchar(40) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tb_perizinan_penjemput`
--

INSERT INTO `tb_perizinan_penjemput` (`id_penjemput`, `no_identitas`, `nama_penjemput`, `no_telp`, `alamat_penjemput`, `hubungan_penjemput`) VALUES
(0, '0', 'tidak ada', '0', '0', '0'),
(1, '123', 'madan', '082197620556', 'jalan banjar', 'paman');

-- --------------------------------------------------------

--
-- Table structure for table `tb_peserta_tes`
--

CREATE TABLE `tb_peserta_tes` (
  `id_peserta_tes` varchar(20) NOT NULL,
  `email_peserta_tes` varchar(40) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `tb_pondokan`
--

CREATE TABLE `tb_pondokan` (
  `pondokan` varchar(20) NOT NULL,
  `namapondokan` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tb_pondokan`
--

INSERT INTO `tb_pondokan` (`pondokan`, `namapondokan`) VALUES
('Mualimat', 'Mualimat'),
('Mualimin', 'Mualimin');

-- --------------------------------------------------------

--
-- Table structure for table `tb_pondokan_santri`
--

CREATE TABLE `tb_pondokan_santri` (
  `id_kelas_santri` int(11) NOT NULL,
  `id_kelas_belajar` int(11) NOT NULL,
  `nis_lokal` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tb_pondokan_santri`
--

INSERT INTO `tb_pondokan_santri` (`id_kelas_santri`, `id_kelas_belajar`, `nis_lokal`) VALUES
(5, 6, '13'),
(7, 6, '1'),
(8, 6, '12'),
(9, 7, '1'),
(10, 7, '12');

-- --------------------------------------------------------

--
-- Table structure for table `tb_pondokan_santri_p`
--

CREATE TABLE `tb_pondokan_santri_p` (
  `id_kelas_santri` int(11) NOT NULL,
  `id_kelas_belajar` int(11) NOT NULL,
  `nis_lokal` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tb_pondokan_santri_p`
--

INSERT INTO `tb_pondokan_santri_p` (`id_kelas_santri`, `id_kelas_belajar`, `nis_lokal`) VALUES
(2, 6, '8900');

-- --------------------------------------------------------

--
-- Table structure for table `tb_presensi_jadwal`
--

CREATE TABLE `tb_presensi_jadwal` (
  `id_jadwal` int(11) NOT NULL,
  `id_kelas_belajar` int(11) NOT NULL,
  `id_mata_pelajaran` varchar(64) NOT NULL,
  `mata_pelajaran` int(255) NOT NULL,
  `hari` varchar(255) NOT NULL,
  `jam` varchar(255) NOT NULL,
  `nip` varchar(255) NOT NULL,
  `guru` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tb_presensi_jadwal`
--

INSERT INTO `tb_presensi_jadwal` (`id_jadwal`, `id_kelas_belajar`, `id_mata_pelajaran`, `mata_pelajaran`, `hari`, `jam`, `nip`, `guru`) VALUES
(5, 6, '6', 0, 'Senin', '08:00', '123', 'guru 2'),
(6, 6, '4', 0, 'Selasa', '08:00', '12', 'guru1'),
(7, 6, '6', 0, 'Senin', '11:00', '123', 'guru 2'),
(10, 7, '4', 0, 'Senin', '08:00', '123', 'guru 2'),
(11, 7, '4', 0, 'Selasa', '09:00', '123', 'guru 2'),
(12, 7, 'Istirahat', 0, 'Senin', '09:00', 'Istirahat', 'Istirahat');

-- --------------------------------------------------------

--
-- Table structure for table `tb_presensi_jadwal_afilasi`
--

CREATE TABLE `tb_presensi_jadwal_afilasi` (
  `id_jadwal` int(11) NOT NULL,
  `id_kelas_belajar` int(11) NOT NULL,
  `id_mata_pelajaran` varchar(64) NOT NULL,
  `mata_pelajaran` varchar(255) NOT NULL,
  `hari` varchar(255) NOT NULL,
  `jam` varchar(255) NOT NULL,
  `nip` varchar(255) NOT NULL,
  `guru` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tb_presensi_jadwal_afilasi`
--

INSERT INTO `tb_presensi_jadwal_afilasi` (`id_jadwal`, `id_kelas_belajar`, `id_mata_pelajaran`, `mata_pelajaran`, `hari`, `jam`, `nip`, `guru`) VALUES
(15, 5, '5', 'ipa', 'Senin', '14.00', '12', 'guru1'),
(17, 6, '3', 'matematika', 'Senin', '14.00', '123', 'guru 2'),
(18, 5, 'Istirahat', 'Istirahat', 'Senin', '14.00', 'Istirahat', 'Istirahat'),
(19, 1, 'Istirahat', 'Istirahat', 'Senin', '14.00', 'Istirahat', 'Istirahat'),
(20, 5, 'Istirahat', 'Istirahat', 'Senin', '14.00', 'Istirahat', 'Istirahat');

-- --------------------------------------------------------

--
-- Table structure for table `tb_presensi_jadwal_afilasi_p`
--

CREATE TABLE `tb_presensi_jadwal_afilasi_p` (
  `id_jadwal` int(11) NOT NULL,
  `id_kelas_belajar` int(11) NOT NULL,
  `id_mata_pelajaran` varchar(64) NOT NULL,
  `mata_pelajaran` varchar(255) NOT NULL,
  `hari` varchar(255) NOT NULL,
  `jam` varchar(255) NOT NULL,
  `nip` varchar(255) NOT NULL,
  `guru` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tb_presensi_jadwal_afilasi_p`
--

INSERT INTO `tb_presensi_jadwal_afilasi_p` (`id_jadwal`, `id_kelas_belajar`, `id_mata_pelajaran`, `mata_pelajaran`, `hari`, `jam`, `nip`, `guru`) VALUES
(1, 1, '5', 'ipa', 'Senin', '14.00', '12', 'guru1');

-- --------------------------------------------------------

--
-- Table structure for table `tb_presensi_jadwal_p`
--

CREATE TABLE `tb_presensi_jadwal_p` (
  `id_jadwal` int(11) NOT NULL,
  `id_kelas_belajar` int(11) NOT NULL,
  `id_mata_pelajaran` varchar(64) NOT NULL,
  `mata_pelajaran` int(255) NOT NULL,
  `hari` varchar(255) NOT NULL,
  `jam` varchar(255) NOT NULL,
  `nip` varchar(255) NOT NULL,
  `guru` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tb_presensi_jadwal_p`
--

INSERT INTO `tb_presensi_jadwal_p` (`id_jadwal`, `id_kelas_belajar`, `id_mata_pelajaran`, `mata_pelajaran`, `hari`, `jam`, `nip`, `guru`) VALUES
(5, 6, 'Istirahat', 0, 'Senin', '08:00', 'Istirahat', 'Istirahat');

-- --------------------------------------------------------

--
-- Table structure for table `tb_presensi_kelas`
--

CREATE TABLE `tb_presensi_kelas` (
  `id_kelas_belajar` int(11) NOT NULL,
  `kd_kelas` int(11) NOT NULL,
  `nama_kelas_belajar` varchar(20) NOT NULL,
  `id_tahun` varchar(2) NOT NULL,
  `status_kelas` varchar(20) NOT NULL,
  `nip_guru` varchar(20) NOT NULL,
  `jenjang` varchar(50) NOT NULL,
  `tingkat` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tb_presensi_kelas`
--

INSERT INTO `tb_presensi_kelas` (`id_kelas_belajar`, `kd_kelas`, `nama_kelas_belajar`, `id_tahun`, `status_kelas`, `nip_guru`, `jenjang`, `tingkat`) VALUES
(5, 1, 'kelas smp 1', '1', 'Aktif', '12', 'sd', '1'),
(6, 1, 'kelas sd2', '1', 'Aktif', '123', 'sd', '1');

-- --------------------------------------------------------

--
-- Table structure for table `tb_presensi_kelas_p`
--

CREATE TABLE `tb_presensi_kelas_p` (
  `id_kelas_belajar` int(11) NOT NULL,
  `kd_kelas` int(11) NOT NULL,
  `nama_kelas_belajar` varchar(20) NOT NULL,
  `id_tahun` varchar(2) NOT NULL,
  `status_kelas` varchar(20) NOT NULL,
  `nip_guru` varchar(20) NOT NULL,
  `jenjang` varchar(50) NOT NULL,
  `tingkat` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tb_presensi_kelas_p`
--

INSERT INTO `tb_presensi_kelas_p` (`id_kelas_belajar`, `kd_kelas`, `nama_kelas_belajar`, `id_tahun`, `status_kelas`, `nip_guru`, `jenjang`, `tingkat`) VALUES
(1, 1, 'kelas sda 1', '4', 'Aktif', '12', 'sd', '1');

-- --------------------------------------------------------

--
-- Table structure for table `tb_presensi_pondokan`
--

CREATE TABLE `tb_presensi_pondokan` (
  `id_kelas_belajar` int(11) NOT NULL,
  `kd_kelas` int(11) NOT NULL,
  `nama_kelas_belajar` varchar(20) NOT NULL,
  `id_tahun` varchar(2) NOT NULL,
  `status_kelas` varchar(20) NOT NULL,
  `nip_guru` varchar(20) NOT NULL,
  `pondokan` varchar(50) NOT NULL,
  `tingkat` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tb_presensi_pondokan`
--

INSERT INTO `tb_presensi_pondokan` (`id_kelas_belajar`, `kd_kelas`, `nama_kelas_belajar`, `id_tahun`, `status_kelas`, `nip_guru`, `pondokan`, `tingkat`) VALUES
(6, 1, 'pondokan 2', '1', 'Tidak Aktif', '12', 'Mualimin', '1'),
(7, 2, 'pondokan 1', '4', 'Aktif', '123', 'Mualimin', '2');

-- --------------------------------------------------------

--
-- Table structure for table `tb_presensi_pondokan_p`
--

CREATE TABLE `tb_presensi_pondokan_p` (
  `id_kelas_belajar` int(11) NOT NULL,
  `kd_kelas` int(11) NOT NULL,
  `nama_kelas_belajar` varchar(20) NOT NULL,
  `id_tahun` varchar(2) NOT NULL,
  `status_kelas` varchar(20) NOT NULL,
  `nip_guru` varchar(20) NOT NULL,
  `pondokan` varchar(50) NOT NULL,
  `tingkat` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tb_presensi_pondokan_p`
--

INSERT INTO `tb_presensi_pondokan_p` (`id_kelas_belajar`, `kd_kelas`, `nama_kelas_belajar`, `id_tahun`, `status_kelas`, `nip_guru`, `pondokan`, `tingkat`) VALUES
(6, 1, 'pondokan 1', '1', 'Aktif', '12', 'Mualimat', '1');

-- --------------------------------------------------------

--
-- Table structure for table `tb_presensi_rekap_guru`
--

CREATE TABLE `tb_presensi_rekap_guru` (
  `id_rekap` int(11) NOT NULL,
  `tanggal_rekap` date NOT NULL,
  `status_presensi` varchar(20) NOT NULL,
  `id_pelajaran` int(11) NOT NULL,
  `id_kelas` int(11) NOT NULL,
  `nip_guru` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tb_presensi_rekap_guru`
--

INSERT INTO `tb_presensi_rekap_guru` (`id_rekap`, `tanggal_rekap`, `status_presensi`, `id_pelajaran`, `id_kelas`, `nip_guru`) VALUES
(2, '2018-05-15', 'hadir', 3, 5, '123'),
(3, '2018-05-15', 'hadir', 5, 5, '12'),
(4, '2018-05-17', 'hadir', 3, 5, '123'),
(5, '2018-05-17', 'hadir', 6, 6, '123');

-- --------------------------------------------------------

--
-- Table structure for table `tb_presensi_rekap_guru_afilasi`
--

CREATE TABLE `tb_presensi_rekap_guru_afilasi` (
  `id_rekap` int(11) NOT NULL,
  `tanggal_rekap` date NOT NULL,
  `status_presensi` varchar(20) NOT NULL,
  `id_pelajaran` int(11) NOT NULL,
  `id_kelas` int(11) NOT NULL,
  `nip_guru` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tb_presensi_rekap_guru_afilasi`
--

INSERT INTO `tb_presensi_rekap_guru_afilasi` (`id_rekap`, `tanggal_rekap`, `status_presensi`, `id_pelajaran`, `id_kelas`, `nip_guru`) VALUES
(2, '2018-05-15', 'hadir', 3, 5, '123'),
(3, '2018-05-15', 'hadir', 5, 5, '12'),
(4, '2018-05-17', 'hadir', 3, 5, '123'),
(5, '2018-06-03', 'hadir', 5, 1, '12');

-- --------------------------------------------------------

--
-- Table structure for table `tb_presensi_rekap_santri`
--

CREATE TABLE `tb_presensi_rekap_santri` (
  `id_rekap` int(11) NOT NULL,
  `id_santri` varchar(20) NOT NULL,
  `id_pelajaran` int(11) NOT NULL,
  `id_kelas` int(11) NOT NULL,
  `tanggal_rekap` date NOT NULL,
  `status_presensi` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tb_presensi_rekap_santri`
--

INSERT INTO `tb_presensi_rekap_santri` (`id_rekap`, `id_santri`, `id_pelajaran`, `id_kelas`, `tanggal_rekap`, `status_presensi`) VALUES
(1, '12', 4, 6, '2018-05-16', 'hadir'),
(2, '13', 6, 6, '2018-05-16', 'hadir'),
(3, '12', 6, 6, '2018-05-16', 'hadir'),
(4, '12', 4, 6, '2018-05-17', 'hadir'),
(5, '1', 4, 6, '2018-07-11', 'hadir'),
(6, '1', 4, 6, '2018-07-10', 'hadir'),
(7, '1', 4, 7, '2018-07-17', 'hadir'),
(8, '12', 4, 7, '2018-07-17', 'izin'),
(10, '1', 4, 7, '2018-06-20', 'alfa');

-- --------------------------------------------------------

--
-- Table structure for table `tb_presensi_rekap_santriwati`
--

CREATE TABLE `tb_presensi_rekap_santriwati` (
  `id_rekap` int(11) NOT NULL,
  `id_santri` varchar(20) NOT NULL,
  `id_pelajaran` int(11) NOT NULL,
  `id_kelas` int(11) NOT NULL,
  `tanggal_rekap` date NOT NULL,
  `status_presensi` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `tb_presensi_rekap_santriwati_afilasi`
--

CREATE TABLE `tb_presensi_rekap_santriwati_afilasi` (
  `id_rekap` int(11) NOT NULL,
  `id_santri` varchar(20) NOT NULL,
  `id_pelajaran` int(11) NOT NULL,
  `id_kelas` int(11) NOT NULL,
  `tanggal_rekap` date NOT NULL,
  `status_presensi` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tb_presensi_rekap_santriwati_afilasi`
--

INSERT INTO `tb_presensi_rekap_santriwati_afilasi` (`id_rekap`, `id_santri`, `id_pelajaran`, `id_kelas`, `tanggal_rekap`, `status_presensi`) VALUES
(1, '1', 5, 1, '2018-06-01', 'hadir'),
(2, '1', 5, 1, '2018-06-03', 'hadir');

-- --------------------------------------------------------

--
-- Table structure for table `tb_presensi_rekap_santri_afilasi`
--

CREATE TABLE `tb_presensi_rekap_santri_afilasi` (
  `id_rekap` int(11) NOT NULL,
  `id_santri` varchar(20) NOT NULL,
  `id_pelajaran` int(11) NOT NULL,
  `id_kelas` int(11) NOT NULL,
  `tanggal_rekap` date NOT NULL,
  `status_presensi` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tb_presensi_rekap_santri_afilasi`
--

INSERT INTO `tb_presensi_rekap_santri_afilasi` (`id_rekap`, `id_santri`, `id_pelajaran`, `id_kelas`, `tanggal_rekap`, `status_presensi`) VALUES
(2, '1', 3, 5, '2018-05-15', 'hadir');

-- --------------------------------------------------------

--
-- Table structure for table `tb_prestasi`
--

CREATE TABLE `tb_prestasi` (
  `id_prestasi` int(11) NOT NULL,
  `nis_santri` varchar(10) NOT NULL,
  `prestasi` varchar(50) NOT NULL,
  `jenis_prestasi` varchar(50) NOT NULL,
  `tanggal_prestasi` date NOT NULL,
  `keterangan` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tb_prestasi`
--

INSERT INTO `tb_prestasi` (`id_prestasi`, `nis_santri`, `prestasi`, `jenis_prestasi`, `tanggal_prestasi`, `keterangan`) VALUES
(2, '1', 'reading', 'akademik', '2018-03-26', 'oke'),
(4, '1', 'juara pubg', 'game', '2018-03-27', 'mantap'),
(6, '1', 'tulis', 'akademik', '2018-04-01', 'mantap'),
(8, '1', 'bahasa inggtis', 'akademik', '2018-05-23', 'aaa');

-- --------------------------------------------------------

--
-- Table structure for table `tb_prestasi_p`
--

CREATE TABLE `tb_prestasi_p` (
  `id_prestasi` int(11) NOT NULL,
  `nis_santri` varchar(10) NOT NULL,
  `prestasi` varchar(50) NOT NULL,
  `jenis_prestasi` varchar(50) NOT NULL,
  `tanggal_prestasi` date NOT NULL,
  `keterangan` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tb_prestasi_p`
--

INSERT INTO `tb_prestasi_p` (`id_prestasi`, `nis_santri`, `prestasi`, `jenis_prestasi`, `tanggal_prestasi`, `keterangan`) VALUES
(2, '1', 'mengaji', 'akademik', '2018-05-18', 'oke'),
(3, '999', 'memanah', 'olahraga', '2018-05-18', 'mantap');

-- --------------------------------------------------------

--
-- Table structure for table `tb_provinsi`
--

CREATE TABLE `tb_provinsi` (
  `id_provinsi` int(11) NOT NULL,
  `nama_provinsi` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tb_provinsi`
--

INSERT INTO `tb_provinsi` (`id_provinsi`, `nama_provinsi`) VALUES
(1, 'ACEH'),
(2, 'SUMATERA UTARA'),
(3, 'SUMATERA BARAT'),
(4, 'RIAU'),
(5, 'JAMBI'),
(6, 'SUMATERA SELATAN'),
(7, 'BENGKULU'),
(8, 'LAMPUNG'),
(9, 'KEPULAUAN BANGKA BELITUNG'),
(10, 'KEPULAUAN RIAU'),
(11, 'DKI JAKARTA'),
(12, 'JAWA BARAT'),
(13, 'JAWA TENGAH'),
(14, 'DAERAH ISTIMEWA'),
(15, 'JAWA TIMUR'),
(16, 'BANTEN'),
(17, 'BALI'),
(18, 'NUSA TENGGARA BARAT'),
(19, 'NUSA TENGGARA TIMUR'),
(20, 'KALIMANTAN BARAT'),
(21, 'KALIMANTAN TENGAH'),
(22, 'KALIMANTAN SELATAN'),
(23, 'KALIMANTAN TIMUR'),
(24, 'KALIMANTAN UTARA'),
(25, 'SULAWESI UTARA'),
(26, 'SULAWESI TENGAH'),
(27, 'SULAWESI SELATAN'),
(28, 'SULAWESI TENGGARA'),
(29, 'GORONTALO'),
(30, 'SULAWESI BARAT'),
(31, 'MALUKU'),
(32, 'MALUKU UTARA'),
(33, 'P A P U A'),
(34, 'PAPUA BARAT');

-- --------------------------------------------------------

--
-- Table structure for table `tb_role_admin`
--

CREATE TABLE `tb_role_admin` (
  `kode_role` varchar(8) NOT NULL,
  `nama_role` varchar(25) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tb_role_admin`
--

INSERT INTO `tb_role_admin` (`kode_role`, `nama_role`) VALUES
('adm_dms', 'admin datamaster'),
('adm_pd', 'admin_pendaftaran'),
('adm_prz', 'perizinan'),
('akd', 'akademik'),
('akdputra', 'admin akademik putra'),
('akdputri', 'admin akademik putri'),
('przputra', 'admin perizinan putra'),
('przputri', 'admin perizinan putri');

-- --------------------------------------------------------

--
-- Table structure for table `tb_ruang_tes`
--

CREATE TABLE `tb_ruang_tes` (
  `id_ruang_tes` varchar(20) NOT NULL,
  `ruang_tes` varchar(20) NOT NULL,
  `pengawas` varchar(10) NOT NULL,
  `kapasitas_ruang` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `tb_santri`
--

CREATE TABLE `tb_santri` (
  `nis_lokal` varchar(10) NOT NULL,
  `email_santri` varchar(40) NOT NULL,
  `nisn` varchar(10) NOT NULL,
  `nik` varchar(20) NOT NULL,
  `nama_lengkap` varchar(50) NOT NULL,
  `tempat_lahir` varchar(40) NOT NULL,
  `tgl_lahir` date NOT NULL,
  `jenis_kelamin` varchar(2) NOT NULL,
  `alamat_lengkap` varchar(100) NOT NULL,
  `provinsi` varchar(100) NOT NULL,
  `kabupaten_kota` varchar(100) NOT NULL,
  `kecamatan` varchar(100) NOT NULL,
  `desa_kelurahan` varchar(100) NOT NULL,
  `kode_pos` varchar(10) NOT NULL,
  `hobi` mediumtext NOT NULL,
  `cita_cita` varchar(20) NOT NULL,
  `jenis_sekolah_asal` varchar(30) NOT NULL,
  `status_sekolah_asal` varchar(20) NOT NULL,
  `nomor_peserta_ujian` varchar(10) NOT NULL,
  `jarak_ke_sekolah` varchar(30) NOT NULL,
  `alat_transportasi` varchar(20) NOT NULL,
  `status_tempat_tinggal` varchar(20) NOT NULL,
  `no_kk` varchar(20) NOT NULL,
  `nik_ayah` varchar(20) NOT NULL,
  `nama_lengkap_ayah` varchar(50) NOT NULL,
  `pendidikan_terakhir_ayah` varchar(20) NOT NULL,
  `pekerjaan_ayah` varchar(20) NOT NULL,
  `nik_ibu` varchar(20) NOT NULL,
  `nama_lengkap_ibu` varchar(50) NOT NULL,
  `pendidikan_terakhir_ibu` varchar(20) NOT NULL,
  `pekerjaan_ibu` varchar(20) NOT NULL,
  `penghasilan_orang_tua` varchar(30) NOT NULL,
  `nik_wali` varchar(20) NOT NULL,
  `nama_lengkap_wali` varchar(50) NOT NULL,
  `pendidikan_terakhir_wali` varchar(20) NOT NULL,
  `pekerjaan_wali` varchar(20) NOT NULL,
  `penghasilan_wali` varchar(30) NOT NULL,
  `jumlah_saudara_kandung` varchar(3) NOT NULL,
  `hp` varchar(20) NOT NULL,
  `hpayah` varchar(20) NOT NULL,
  `hpibu` varchar(20) NOT NULL,
  `hpwali` varchar(20) NOT NULL,
  `kelas` varchar(255) NOT NULL,
  `pondokan` varchar(20) NOT NULL,
  `foto` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `tb_santri`
--

INSERT INTO `tb_santri` (`nis_lokal`, `email_santri`, `nisn`, `nik`, `nama_lengkap`, `tempat_lahir`, `tgl_lahir`, `jenis_kelamin`, `alamat_lengkap`, `provinsi`, `kabupaten_kota`, `kecamatan`, `desa_kelurahan`, `kode_pos`, `hobi`, `cita_cita`, `jenis_sekolah_asal`, `status_sekolah_asal`, `nomor_peserta_ujian`, `jarak_ke_sekolah`, `alat_transportasi`, `status_tempat_tinggal`, `no_kk`, `nik_ayah`, `nama_lengkap_ayah`, `pendidikan_terakhir_ayah`, `pekerjaan_ayah`, `nik_ibu`, `nama_lengkap_ibu`, `pendidikan_terakhir_ibu`, `pekerjaan_ibu`, `penghasilan_orang_tua`, `nik_wali`, `nama_lengkap_wali`, `pendidikan_terakhir_wali`, `pekerjaan_wali`, `penghasilan_wali`, `jumlah_saudara_kandung`, `hp`, `hpayah`, `hpibu`, `hpwali`, `kelas`, `pondokan`, `foto`) VALUES
('1', '11@sdds.com', '1', '1', 'santri 3', '11', '2018-02-08', 'L', '11', 'KALIMANTAN SELATAN', 'KAB. HULU SUNGAI SELATAN', 'Kandangan', 'Kandangan Kota', '1', '1', '1', '1', '1', '1', 'Lebih dari 10 Km', '', '1', '2', '1', '1', 'kuliah', 'wirausaha', '1', '1', '', 'wirausaha', '5 - 10 juta', '1', '1', '', 'wirausaha', '1', '1', '1234', '43', '2345', '234', 'sd', 'Mualimin', 'gambar.png'),
('12', '1@dd.com', '1', '1', 'santri 2', '1', '2018-02-07', 'L', '1', 'KALIMANTAN SELATAN', 'KAB. BALANGAN', 'Awayan', 'Ambakiang', '1', '1', '1', '1', '1', '1', '1', '', '1', '1', '1', '1', 'kuliah', 'wirausaha', '1', '1', 'kuliah', 'wirausaha', '1', '1', '1', 'kuliah', 'wirausaha', '11', '1', '1', '1', '1', '1', 'sd', 'Mualimin', ''),
('13', '1@dd.com', '1', '1', 'santri 1', '1', '2018-02-07', 'L', '1', 'KALIMANTAN SELATAN', 'KAB. BALANGAN', 'Awayan', 'Ambakiang', '1', '1', '1', '1', '1', '1', '1', '', '1', '1', '1', '1', 'kuliah', 'wirausaha', '1', '1', 'kuliah', 'wirausaha', '1', '1', '1', 'kuliah', 'wirausaha', '11', '1', '1', '1', '1', '1', 'sd', 'Mualimin', ''),
('Aa', 'a@mmmm.mm', 'dd', 'a', 'a', 'a', '1970-01-01', 'L', 'a', 'KALIMANTAN SELATAN', 'KAB. TAPIN', 'Tapin Tengah', 'Sungai Bahalang', 'a', 'a', 'a', 'a', 'a', 'a', 'Kurang dari 1 Km', 'motor', 'a', 'a', 'a', 'a', 'sarjana', 'wirausaha', 'a', 'a', 'sarjana', 'wirausaha', 'Kurang dari 1juta', 'a', 'a', 'sarjana', 'wirausaha', 'a', 'a', 'a', 'a', 'a', 'a', 'sd', 'Mualimin', 'gambar.png'),
('b', 'b', 'b', 'b', 'b', 'b', '0000-00-00', 'b', 'b', 'b', 'b', 'b', 'b', 'b', 'b', 'b', 'b', 'b', 'b', 'b', 'b', 'b', 'b', 'b', 'b', 'b', 'b', 'b', 'b', 'b', 'b', 'b', 'b', 'b', 'b', 'b', 'b', 'b', 'b', 'b', 'b', 'b', 'b', 'b', ''),
('c', 'c', 'c', 'c', 'c', 'c', '0000-00-00', 'c', 'c', 'c', 'c', 'c', 'c', 'c', 'c', 'c', 'c', 'c', 'c', 'c', 'c', 'c', 'c', 'c', 'c', 'c', 'c', 'c', 'c', 'c', 'c', 'c', 'c', 'c', 'c', 'c', 'c', 'c', 'c', 'c', 'c', 'c', 'c', 'c', '');

-- --------------------------------------------------------

--
-- Table structure for table `tb_santriwati`
--

CREATE TABLE `tb_santriwati` (
  `nis_lokal` varchar(10) NOT NULL,
  `email_santri` varchar(40) NOT NULL,
  `nisn` varchar(10) NOT NULL,
  `nik` varchar(20) NOT NULL,
  `nama_lengkap` varchar(50) NOT NULL,
  `tempat_lahir` varchar(40) NOT NULL,
  `tgl_lahir` date NOT NULL,
  `jenis_kelamin` varchar(2) NOT NULL,
  `alamat_lengkap` varchar(100) NOT NULL,
  `provinsi` varchar(100) NOT NULL,
  `kabupaten_kota` varchar(100) NOT NULL,
  `kecamatan` varchar(100) NOT NULL,
  `desa_kelurahan` varchar(100) NOT NULL,
  `kode_pos` varchar(10) NOT NULL,
  `hobi` mediumtext NOT NULL,
  `cita_cita` varchar(20) NOT NULL,
  `jenis_sekolah_asal` varchar(20) NOT NULL,
  `status_sekolah_asal` varchar(20) NOT NULL,
  `nomor_peserta_ujian` varchar(10) NOT NULL,
  `jarak_ke_sekolah` varchar(20) NOT NULL,
  `alat_transportasi` varchar(20) NOT NULL,
  `status_tempat_tinggal` varchar(20) NOT NULL,
  `no_kk` varchar(20) NOT NULL,
  `nik_ayah` varchar(20) NOT NULL,
  `nama_lengkap_ayah` varchar(50) NOT NULL,
  `pendidikan_terakhir_ayah` varchar(20) NOT NULL,
  `pekerjaan_ayah` varchar(20) NOT NULL,
  `nik_ibu` varchar(20) NOT NULL,
  `nama_lengkap_ibu` varchar(50) NOT NULL,
  `pendidikan_terakhir_ibu` varchar(20) NOT NULL,
  `pekerjaan_ibu` varchar(20) NOT NULL,
  `penghasilan_orang_tua` varchar(30) NOT NULL,
  `nik_wali` varchar(20) NOT NULL,
  `nama_lengkap_wali` varchar(50) NOT NULL,
  `pendidikan_terakhir_wali` varchar(20) NOT NULL,
  `pekerjaan_wali` varchar(20) NOT NULL,
  `penghasilan_wali` varchar(30) NOT NULL,
  `jumlah_saudara_kandung` varchar(3) NOT NULL,
  `hp` varchar(20) NOT NULL,
  `hpayah` varchar(20) NOT NULL,
  `hpibu` varchar(20) NOT NULL,
  `hpwali` varchar(20) NOT NULL,
  `kelas` varchar(255) NOT NULL,
  `pondokan` varchar(20) NOT NULL,
  `foto` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `tb_santriwati`
--

INSERT INTO `tb_santriwati` (`nis_lokal`, `email_santri`, `nisn`, `nik`, `nama_lengkap`, `tempat_lahir`, `tgl_lahir`, `jenis_kelamin`, `alamat_lengkap`, `provinsi`, `kabupaten_kota`, `kecamatan`, `desa_kelurahan`, `kode_pos`, `hobi`, `cita_cita`, `jenis_sekolah_asal`, `status_sekolah_asal`, `nomor_peserta_ujian`, `jarak_ke_sekolah`, `alat_transportasi`, `status_tempat_tinggal`, `no_kk`, `nik_ayah`, `nama_lengkap_ayah`, `pendidikan_terakhir_ayah`, `pekerjaan_ayah`, `nik_ibu`, `nama_lengkap_ibu`, `pendidikan_terakhir_ibu`, `pekerjaan_ibu`, `penghasilan_orang_tua`, `nik_wali`, `nama_lengkap_wali`, `pendidikan_terakhir_wali`, `pekerjaan_wali`, `penghasilan_wali`, `jumlah_saudara_kandung`, `hp`, `hpayah`, `hpibu`, `hpwali`, `kelas`, `pondokan`, `foto`) VALUES
('1', '11@sdds.com', '1', '1', 'santriwati 4', '11', '2018-02-08', 'P', '11', 'KALIMANTAN SELATAN', 'KAB. HULU SUNGAI SELATAN', 'Kandangan', 'Kandangan Kota', '1', '1', '1', '1', '1', '1', '1', '', '1', '2', '1', '1', 'kuliah', 'wirausaha', '1', '1', 'kuliah', 'wirausaha', '1', '1', '1', '', 'wirausaha', '1', '1', '1234', '43', '2345', '234', 'sd', 'Mualimat', ''),
('8900', '', '9008', '', 'santriwati 3', 'BANJARMASIN', '2018-05-01', 'P', '', 'KALIMANTAN SELATAN', 'KOTA BANJARBARU', 'Banjarbaru Selatan', 'Guntung Paikat', '', '', '', '', '', '', '0', 'motor', '', '123', '123', '123', 'kuliah', 'wirausaha', '123', 'asa', 'kuliah', 'wirausaha', '120000', '', '', '', '', '0', '', '', '', '', '', 'sd', 'Mualimat', '');

-- --------------------------------------------------------

--
-- Table structure for table `tb_staff`
--

CREATE TABLE `tb_staff` (
  `nip_staff` varchar(10) NOT NULL,
  `nik` varchar(20) NOT NULL,
  `email_staff` varchar(40) NOT NULL,
  `hp_staff` varchar(20) NOT NULL,
  `nama_lengkap` varchar(50) NOT NULL,
  `tempat_lahir` varchar(40) NOT NULL,
  `tgl_lahir` date NOT NULL,
  `jenis_kelamin` varchar(2) NOT NULL,
  `alamat_lengkap` varchar(100) NOT NULL,
  `provinsi` varchar(100) NOT NULL,
  `kabupaten_kota` varchar(100) NOT NULL,
  `kecamatan` varchar(100) NOT NULL,
  `desa_kelurahan` varchar(100) NOT NULL,
  `kode_pos` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tb_staff`
--

INSERT INTO `tb_staff` (`nip_staff`, `nik`, `email_staff`, `hp_staff`, `nama_lengkap`, `tempat_lahir`, `tgl_lahir`, `jenis_kelamin`, `alamat_lengkap`, `provinsi`, `kabupaten_kota`, `kecamatan`, `desa_kelurahan`, `kode_pos`) VALUES
('1', '', '1@e.con', '1', '1', '1', '2018-02-14', 'L', '1', '1', '1', '1', '1', '1'),
('2', '', '2@dd.cpm', '2', '2', '2', '2018-02-02', 'P', '21', '2', '2', '2', '2', '2');

-- --------------------------------------------------------

--
-- Table structure for table `tb_tahun_ajaran`
--

CREATE TABLE `tb_tahun_ajaran` (
  `id_tahun` int(11) NOT NULL,
  `tahun_ajaran` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tb_tahun_ajaran`
--

INSERT INTO `tb_tahun_ajaran` (`id_tahun`, `tahun_ajaran`) VALUES
(1, '2019/2020'),
(4, '2018/2019');

-- --------------------------------------------------------

--
-- Table structure for table `tb_tingkatjenjang`
--

CREATE TABLE `tb_tingkatjenjang` (
  `idtingkatjenjang` int(11) NOT NULL,
  `jenjang` varchar(20) NOT NULL,
  `tingkat` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tb_tingkatjenjang`
--

INSERT INTO `tb_tingkatjenjang` (`idtingkatjenjang`, `jenjang`, `tingkat`) VALUES
(5, '122', 1),
(6, '122', 2),
(7, 'Mualimin', 3),
(8, 'Mualimin', 4),
(9, 'sd', 1),
(10, 'sd', 2);

-- --------------------------------------------------------

--
-- Table structure for table `tb_tingkatpondokan`
--

CREATE TABLE `tb_tingkatpondokan` (
  `idtingkatpondokan` int(11) NOT NULL,
  `pondokan` varchar(20) NOT NULL,
  `tingkat` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tb_tingkatpondokan`
--

INSERT INTO `tb_tingkatpondokan` (`idtingkatpondokan`, `pondokan`, `tingkat`) VALUES
(3, 'Muhaimin', 1),
(4, 'Muhaimin', 2),
(5, 'Muhaimin', 3),
(6, 'Muhaimin', 4),
(7, 'Muhaimin', 5),
(8, 'Muhaimin', 6),
(9, 'Muhaiminah', 1),
(10, 'Muhaiminah', 2),
(11, 'Muhaiminah', 3),
(12, 'Muhaiminah', 4),
(13, 'Muhaiminah', 5),
(14, 'Muhaiminah', 6),
(15, 'Mualimin', 1),
(16, 'Mualimin', 2),
(17, 'Mualimat', 1);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `tb_akun_admin`
--
ALTER TABLE `tb_akun_admin`
  ADD PRIMARY KEY (`nama_akun`),
  ADD KEY `nip_staff` (`nip_staff_admin`),
  ADD KEY `kode_role_admin` (`kode_role_admin`);

--
-- Indexes for table `tb_akun_ortu`
--
ALTER TABLE `tb_akun_ortu`
  ADD PRIMARY KEY (`no_akun`);

--
-- Indexes for table `tb_akun_pendaftar`
--
ALTER TABLE `tb_akun_pendaftar`
  ADD PRIMARY KEY (`email_pendaftar`);

--
-- Indexes for table `tb_alat_transportasi`
--
ALTER TABLE `tb_alat_transportasi`
  ADD PRIMARY KEY (`id_alat_transportasi`);

--
-- Indexes for table `tb_bayar_pendaftar`
--
ALTER TABLE `tb_bayar_pendaftar`
  ADD PRIMARY KEY (`id_pembayaran`);

--
-- Indexes for table `tb_berkas_guru`
--
ALTER TABLE `tb_berkas_guru`
  ADD PRIMARY KEY (`id_berkas`);

--
-- Indexes for table `tb_berkas_pendaftar`
--
ALTER TABLE `tb_berkas_pendaftar`
  ADD PRIMARY KEY (`id_berkas`);

--
-- Indexes for table `tb_berkas_santri`
--
ALTER TABLE `tb_berkas_santri`
  ADD PRIMARY KEY (`id_berkas`);

--
-- Indexes for table `tb_berkas_santriwati`
--
ALTER TABLE `tb_berkas_santriwati`
  ADD PRIMARY KEY (`id_berkas`);

--
-- Indexes for table `tb_berkas_staff`
--
ALTER TABLE `tb_berkas_staff`
  ADD PRIMARY KEY (`id_berkas`);

--
-- Indexes for table `tb_biodata_pendaftar`
--
ALTER TABLE `tb_biodata_pendaftar`
  ADD PRIMARY KEY (`id_biodata`);

--
-- Indexes for table `tb_guru`
--
ALTER TABLE `tb_guru`
  ADD PRIMARY KEY (`nip_guru`);

--
-- Indexes for table `tb_jenjang`
--
ALTER TABLE `tb_jenjang`
  ADD PRIMARY KEY (`jenjang`);

--
-- Indexes for table `tb_kecamatan`
--
ALTER TABLE `tb_kecamatan`
  ADD PRIMARY KEY (`id_kecamatan`),
  ADD KEY `id_kota_kab` (`id_kota_kab`);

--
-- Indexes for table `tb_kelas`
--
ALTER TABLE `tb_kelas`
  ADD PRIMARY KEY (`kd_kelas`);

--
-- Indexes for table `tb_kelas_santri`
--
ALTER TABLE `tb_kelas_santri`
  ADD PRIMARY KEY (`id_kelas_santri`);

--
-- Indexes for table `tb_kelas_santri_p`
--
ALTER TABLE `tb_kelas_santri_p`
  ADD PRIMARY KEY (`id_kelas_santri`);

--
-- Indexes for table `tb_kel_desa`
--
ALTER TABLE `tb_kel_desa`
  ADD PRIMARY KEY (`id_kel_desa`),
  ADD KEY `id_kecamatan` (`id_kecamatan`);

--
-- Indexes for table `tb_kota_kab`
--
ALTER TABLE `tb_kota_kab`
  ADD PRIMARY KEY (`id_kota_kab`),
  ADD KEY `id_provinsi` (`id_provinsi`);

--
-- Indexes for table `tb_mata_pelajaran`
--
ALTER TABLE `tb_mata_pelajaran`
  ADD PRIMARY KEY (`id_mata_pelajaran`);

--
-- Indexes for table `tb_materi_tes`
--
ALTER TABLE `tb_materi_tes`
  ADD PRIMARY KEY (`id_materi_tes`);

--
-- Indexes for table `tb_pak_afilasi`
--
ALTER TABLE `tb_pak_afilasi`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tb_pak_pondokan`
--
ALTER TABLE `tb_pak_pondokan`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tb_pekerjaan`
--
ALTER TABLE `tb_pekerjaan`
  ADD PRIMARY KEY (`id_pekerjaan`);

--
-- Indexes for table `tb_pelajaran`
--
ALTER TABLE `tb_pelajaran`
  ADD PRIMARY KEY (`id_pelajaran`);

--
-- Indexes for table `tb_pelanggaran`
--
ALTER TABLE `tb_pelanggaran`
  ADD PRIMARY KEY (`id_pelanggaran`);

--
-- Indexes for table `tb_pelanggaran_p`
--
ALTER TABLE `tb_pelanggaran_p`
  ADD PRIMARY KEY (`id_pelanggaran`);

--
-- Indexes for table `tb_pembayaran_spp`
--
ALTER TABLE `tb_pembayaran_spp`
  ADD PRIMARY KEY (`id_pembayaran`);

--
-- Indexes for table `tb_pembayaran_spp_p`
--
ALTER TABLE `tb_pembayaran_spp_p`
  ADD PRIMARY KEY (`id_pembayaran`);

--
-- Indexes for table `tb_pendidikan`
--
ALTER TABLE `tb_pendidikan`
  ADD PRIMARY KEY (`id_pendidikan`);

--
-- Indexes for table `tb_pengaturan_pendaftaran`
--
ALTER TABLE `tb_pengaturan_pendaftaran`
  ADD PRIMARY KEY (`id_pengaturan`);

--
-- Indexes for table `tb_pengaturan_portal`
--
ALTER TABLE `tb_pengaturan_portal`
  ADD PRIMARY KEY (`id_pengaturan`);

--
-- Indexes for table `tb_pengumuman`
--
ALTER TABLE `tb_pengumuman`
  ADD PRIMARY KEY (`id_pengumuman`);

--
-- Indexes for table `tb_pengumuman_ortu`
--
ALTER TABLE `tb_pengumuman_ortu`
  ADD PRIMARY KEY (`id_pengumuman`);

--
-- Indexes for table `tb_perizinan_atur_denda`
--
ALTER TABLE `tb_perizinan_atur_denda`
  ADD PRIMARY KEY (`id_aturan`);

--
-- Indexes for table `tb_perizinan_bayar`
--
ALTER TABLE `tb_perizinan_bayar`
  ADD PRIMARY KEY (`id_bayar`);

--
-- Indexes for table `tb_perizinan_bayar_p`
--
ALTER TABLE `tb_perizinan_bayar_p`
  ADD PRIMARY KEY (`id_bayar`);

--
-- Indexes for table `tb_perizinan_denda`
--
ALTER TABLE `tb_perizinan_denda`
  ADD PRIMARY KEY (`id_denda`);

--
-- Indexes for table `tb_perizinan_denda_p`
--
ALTER TABLE `tb_perizinan_denda_p`
  ADD PRIMARY KEY (`id_denda`);

--
-- Indexes for table `tb_perizinan_keluar`
--
ALTER TABLE `tb_perizinan_keluar`
  ADD PRIMARY KEY (`id_keluar`);

--
-- Indexes for table `tb_perizinan_keluar_p`
--
ALTER TABLE `tb_perizinan_keluar_p`
  ADD PRIMARY KEY (`id_keluar`);

--
-- Indexes for table `tb_perizinan_kembali`
--
ALTER TABLE `tb_perizinan_kembali`
  ADD PRIMARY KEY (`id_kembali`);

--
-- Indexes for table `tb_perizinan_kembali_p`
--
ALTER TABLE `tb_perizinan_kembali_p`
  ADD PRIMARY KEY (`id_kembali`);

--
-- Indexes for table `tb_perizinan_penjemput`
--
ALTER TABLE `tb_perizinan_penjemput`
  ADD PRIMARY KEY (`id_penjemput`);

--
-- Indexes for table `tb_peserta_tes`
--
ALTER TABLE `tb_peserta_tes`
  ADD PRIMARY KEY (`id_peserta_tes`);

--
-- Indexes for table `tb_pondokan`
--
ALTER TABLE `tb_pondokan`
  ADD PRIMARY KEY (`pondokan`);

--
-- Indexes for table `tb_pondokan_santri`
--
ALTER TABLE `tb_pondokan_santri`
  ADD PRIMARY KEY (`id_kelas_santri`);

--
-- Indexes for table `tb_pondokan_santri_p`
--
ALTER TABLE `tb_pondokan_santri_p`
  ADD PRIMARY KEY (`id_kelas_santri`);

--
-- Indexes for table `tb_presensi_jadwal`
--
ALTER TABLE `tb_presensi_jadwal`
  ADD PRIMARY KEY (`id_jadwal`);

--
-- Indexes for table `tb_presensi_jadwal_afilasi`
--
ALTER TABLE `tb_presensi_jadwal_afilasi`
  ADD PRIMARY KEY (`id_jadwal`);

--
-- Indexes for table `tb_presensi_jadwal_afilasi_p`
--
ALTER TABLE `tb_presensi_jadwal_afilasi_p`
  ADD PRIMARY KEY (`id_jadwal`);

--
-- Indexes for table `tb_presensi_jadwal_p`
--
ALTER TABLE `tb_presensi_jadwal_p`
  ADD PRIMARY KEY (`id_jadwal`);

--
-- Indexes for table `tb_presensi_kelas`
--
ALTER TABLE `tb_presensi_kelas`
  ADD PRIMARY KEY (`id_kelas_belajar`);

--
-- Indexes for table `tb_presensi_kelas_p`
--
ALTER TABLE `tb_presensi_kelas_p`
  ADD PRIMARY KEY (`id_kelas_belajar`);

--
-- Indexes for table `tb_presensi_pondokan`
--
ALTER TABLE `tb_presensi_pondokan`
  ADD PRIMARY KEY (`id_kelas_belajar`);

--
-- Indexes for table `tb_presensi_pondokan_p`
--
ALTER TABLE `tb_presensi_pondokan_p`
  ADD PRIMARY KEY (`id_kelas_belajar`);

--
-- Indexes for table `tb_presensi_rekap_guru`
--
ALTER TABLE `tb_presensi_rekap_guru`
  ADD PRIMARY KEY (`id_rekap`);

--
-- Indexes for table `tb_presensi_rekap_guru_afilasi`
--
ALTER TABLE `tb_presensi_rekap_guru_afilasi`
  ADD PRIMARY KEY (`id_rekap`);

--
-- Indexes for table `tb_presensi_rekap_santri`
--
ALTER TABLE `tb_presensi_rekap_santri`
  ADD PRIMARY KEY (`id_rekap`);

--
-- Indexes for table `tb_presensi_rekap_santriwati`
--
ALTER TABLE `tb_presensi_rekap_santriwati`
  ADD PRIMARY KEY (`id_rekap`);

--
-- Indexes for table `tb_presensi_rekap_santriwati_afilasi`
--
ALTER TABLE `tb_presensi_rekap_santriwati_afilasi`
  ADD PRIMARY KEY (`id_rekap`);

--
-- Indexes for table `tb_presensi_rekap_santri_afilasi`
--
ALTER TABLE `tb_presensi_rekap_santri_afilasi`
  ADD PRIMARY KEY (`id_rekap`);

--
-- Indexes for table `tb_prestasi`
--
ALTER TABLE `tb_prestasi`
  ADD PRIMARY KEY (`id_prestasi`);

--
-- Indexes for table `tb_prestasi_p`
--
ALTER TABLE `tb_prestasi_p`
  ADD PRIMARY KEY (`id_prestasi`);

--
-- Indexes for table `tb_provinsi`
--
ALTER TABLE `tb_provinsi`
  ADD PRIMARY KEY (`id_provinsi`);

--
-- Indexes for table `tb_role_admin`
--
ALTER TABLE `tb_role_admin`
  ADD PRIMARY KEY (`kode_role`);

--
-- Indexes for table `tb_ruang_tes`
--
ALTER TABLE `tb_ruang_tes`
  ADD PRIMARY KEY (`id_ruang_tes`);

--
-- Indexes for table `tb_santri`
--
ALTER TABLE `tb_santri`
  ADD PRIMARY KEY (`nis_lokal`);

--
-- Indexes for table `tb_santriwati`
--
ALTER TABLE `tb_santriwati`
  ADD PRIMARY KEY (`nis_lokal`);

--
-- Indexes for table `tb_staff`
--
ALTER TABLE `tb_staff`
  ADD PRIMARY KEY (`nip_staff`);

--
-- Indexes for table `tb_tahun_ajaran`
--
ALTER TABLE `tb_tahun_ajaran`
  ADD PRIMARY KEY (`id_tahun`);

--
-- Indexes for table `tb_tingkatjenjang`
--
ALTER TABLE `tb_tingkatjenjang`
  ADD PRIMARY KEY (`idtingkatjenjang`);

--
-- Indexes for table `tb_tingkatpondokan`
--
ALTER TABLE `tb_tingkatpondokan`
  ADD PRIMARY KEY (`idtingkatpondokan`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `tb_akun_ortu`
--
ALTER TABLE `tb_akun_ortu`
  MODIFY `no_akun` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `tb_alat_transportasi`
--
ALTER TABLE `tb_alat_transportasi`
  MODIFY `id_alat_transportasi` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `tb_berkas_guru`
--
ALTER TABLE `tb_berkas_guru`
  MODIFY `id_berkas` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `tb_berkas_pendaftar`
--
ALTER TABLE `tb_berkas_pendaftar`
  MODIFY `id_berkas` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT for table `tb_berkas_santri`
--
ALTER TABLE `tb_berkas_santri`
  MODIFY `id_berkas` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT for table `tb_berkas_santriwati`
--
ALTER TABLE `tb_berkas_santriwati`
  MODIFY `id_berkas` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `tb_berkas_staff`
--
ALTER TABLE `tb_berkas_staff`
  MODIFY `id_berkas` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `tb_kecamatan`
--
ALTER TABLE `tb_kecamatan`
  MODIFY `id_kecamatan` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=153;

--
-- AUTO_INCREMENT for table `tb_kelas`
--
ALTER TABLE `tb_kelas`
  MODIFY `kd_kelas` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `tb_kelas_santri`
--
ALTER TABLE `tb_kelas_santri`
  MODIFY `id_kelas_santri` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=20;

--
-- AUTO_INCREMENT for table `tb_kelas_santri_p`
--
ALTER TABLE `tb_kelas_santri_p`
  MODIFY `id_kelas_santri` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `tb_kel_desa`
--
ALTER TABLE `tb_kel_desa`
  MODIFY `id_kel_desa` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2010;

--
-- AUTO_INCREMENT for table `tb_kota_kab`
--
ALTER TABLE `tb_kota_kab`
  MODIFY `id_kota_kab` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=534;

--
-- AUTO_INCREMENT for table `tb_mata_pelajaran`
--
ALTER TABLE `tb_mata_pelajaran`
  MODIFY `id_mata_pelajaran` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `tb_pak_afilasi`
--
ALTER TABLE `tb_pak_afilasi`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `tb_pak_pondokan`
--
ALTER TABLE `tb_pak_pondokan`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `tb_pekerjaan`
--
ALTER TABLE `tb_pekerjaan`
  MODIFY `id_pekerjaan` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `tb_pelajaran`
--
ALTER TABLE `tb_pelajaran`
  MODIFY `id_pelajaran` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `tb_pelanggaran`
--
ALTER TABLE `tb_pelanggaran`
  MODIFY `id_pelanggaran` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `tb_pelanggaran_p`
--
ALTER TABLE `tb_pelanggaran_p`
  MODIFY `id_pelanggaran` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `tb_pembayaran_spp`
--
ALTER TABLE `tb_pembayaran_spp`
  MODIFY `id_pembayaran` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `tb_pembayaran_spp_p`
--
ALTER TABLE `tb_pembayaran_spp_p`
  MODIFY `id_pembayaran` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `tb_pendidikan`
--
ALTER TABLE `tb_pendidikan`
  MODIFY `id_pendidikan` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `tb_pengaturan_pendaftaran`
--
ALTER TABLE `tb_pengaturan_pendaftaran`
  MODIFY `id_pengaturan` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `tb_pengaturan_portal`
--
ALTER TABLE `tb_pengaturan_portal`
  MODIFY `id_pengaturan` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `tb_pengumuman`
--
ALTER TABLE `tb_pengumuman`
  MODIFY `id_pengumuman` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT for table `tb_pengumuman_ortu`
--
ALTER TABLE `tb_pengumuman_ortu`
  MODIFY `id_pengumuman` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=123;

--
-- AUTO_INCREMENT for table `tb_perizinan_atur_denda`
--
ALTER TABLE `tb_perizinan_atur_denda`
  MODIFY `id_aturan` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `tb_perizinan_bayar`
--
ALTER TABLE `tb_perizinan_bayar`
  MODIFY `id_bayar` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `tb_perizinan_bayar_p`
--
ALTER TABLE `tb_perizinan_bayar_p`
  MODIFY `id_bayar` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `tb_perizinan_denda`
--
ALTER TABLE `tb_perizinan_denda`
  MODIFY `id_denda` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `tb_perizinan_denda_p`
--
ALTER TABLE `tb_perizinan_denda_p`
  MODIFY `id_denda` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `tb_perizinan_keluar`
--
ALTER TABLE `tb_perizinan_keluar`
  MODIFY `id_keluar` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `tb_perizinan_keluar_p`
--
ALTER TABLE `tb_perizinan_keluar_p`
  MODIFY `id_keluar` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `tb_perizinan_kembali`
--
ALTER TABLE `tb_perizinan_kembali`
  MODIFY `id_kembali` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `tb_perizinan_kembali_p`
--
ALTER TABLE `tb_perizinan_kembali_p`
  MODIFY `id_kembali` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `tb_perizinan_penjemput`
--
ALTER TABLE `tb_perizinan_penjemput`
  MODIFY `id_penjemput` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `tb_pondokan_santri`
--
ALTER TABLE `tb_pondokan_santri`
  MODIFY `id_kelas_santri` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `tb_pondokan_santri_p`
--
ALTER TABLE `tb_pondokan_santri_p`
  MODIFY `id_kelas_santri` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `tb_presensi_jadwal`
--
ALTER TABLE `tb_presensi_jadwal`
  MODIFY `id_jadwal` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT for table `tb_presensi_jadwal_afilasi`
--
ALTER TABLE `tb_presensi_jadwal_afilasi`
  MODIFY `id_jadwal` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;

--
-- AUTO_INCREMENT for table `tb_presensi_jadwal_afilasi_p`
--
ALTER TABLE `tb_presensi_jadwal_afilasi_p`
  MODIFY `id_jadwal` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `tb_presensi_jadwal_p`
--
ALTER TABLE `tb_presensi_jadwal_p`
  MODIFY `id_jadwal` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
