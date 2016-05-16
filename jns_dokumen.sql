-- phpMyAdmin SQL Dump
-- version 2.11.7
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Jan 05, 2016 at 09:13 AM
-- Server version: 5.0.51
-- PHP Version: 5.2.6

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `databaseku`
--

-- --------------------------------------------------------

--
-- Table structure for table `jns_dokumen`
--

CREATE TABLE IF NOT EXISTS `jns_dokumen` (
  `kode_dokumen` varchar(2) NOT NULL,
  `nama_dokumen` varchar(30) default NULL,
  PRIMARY KEY  (`kode_dokumen`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1;

--
-- Dumping data for table `jns_dokumen`
--

INSERT INTO `jns_dokumen` (`kode_dokumen`, `nama_dokumen`) VALUES
('01', 'SITU'),
('02', 'Kontrak'),
('03', 'Kontraktor'),
('04', 'Surat Jalan'),
('05', 'IKKA'),
('06', 'PPLN'),
('07', 'Visa/Paspor'),
('08', 'Eksportir'),
('09', 'Pengakuan Sebagai IP'),
('10', 'Perubahan Lampiran IP'),
('11', 'APIT'),
('12', 'Perubahan APIT'),
('13', 'Notaris'),
('14', 'PBB'),
('15', 'IMB'),
('16', 'Sertifikat Tanah'),
('17', 'Warisan'),
('18', 'PBMAI'),
('19', 'SK BKPM Tenaga Kerja'),
('20', 'PTKI'),
('21', 'SPKT'),
('22', 'PMDN'),
('23', 'PMA'),
('24', 'BADORA'),
('25', 'Telepon'),
('26', 'Listrik'),
('27', 'STNK Bermotor'),
('28', 'Bea Balik Nama'),
('29', 'SPBU'),
('30', 'Bukti Pemotongan Pasal 15'),
('31', 'SKFA / Antar Pulau'),
('32', 'Gudang'),
('33', 'Penyedian Bahan Pokok'),
('34', 'Master List'),
('35', 'Barang Modal yang Diimpor'),
('36', 'Pinjaman LN (PKLN)'),
('37', 'Badan Hukum'),
('38', 'Kehakiman'),
('39', 'Perindustrian'),
('40', 'SPI Dep. Perindustrian'),
('41', 'Perikanan'),
('42', 'Kehutanan'),
('43', 'Perkebunan'),
('44', 'Pertambangan'),
('45', 'Surat Pengaduan'),
('46', 'Bukti Pemotongan PPh Bunga Dep'),
('47', 'Bukti Pemungutan PPh Pasal 22 '),
('48', 'Pemberitahuan Impor Barang (PI'),
('49', 'INVOICE'),
('50', 'KP.PDIP.3.1'),
('51', 'Bukti Pemotongan PPh Atas Pers'),
('52', 'Data Penjualan');
