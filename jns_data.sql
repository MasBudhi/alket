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
-- Table structure for table `jns_data`
--

CREATE TABLE IF NOT EXISTS `jns_data` (
  `kode_data` varchar(5) NOT NULL,
  `nama_data` varchar(30) default NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `jns_data`
--

INSERT INTO `jns_data` (`kode_data`, `nama_data`) VALUES
('01', 'Penjualan'),
('02', 'Pembelian'),
('03', 'Penghasilan'),
('04', 'Biaya'),
('05', 'Produksi'),
('06', 'Kredit'),
('07', 'Properti'),
('08', 'PBB'),
('09', 'Total Nilai Data');
