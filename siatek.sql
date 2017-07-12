-- phpMyAdmin SQL Dump
-- version 4.5.4.1deb2ubuntu2
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Jul 12, 2017 at 02:41 PM
-- Server version: 5.7.18-0ubuntu0.16.04.1
-- PHP Version: 7.0.19-1+deb.sury.org~xenial+2

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `siatek`
--

-- --------------------------------------------------------

--
-- Table structure for table `barang`
--

CREATE TABLE `barang` (
  `nama_barang` varchar(30) NOT NULL,
  `kode_barang` char(6) NOT NULL,
  `stok` int(11) DEFAULT NULL,
  `harga` int(11) NOT NULL,
  `jenis` char(4) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `barang`
--

INSERT INTO `barang` (`nama_barang`, `kode_barang`, `stok`, `harga`, `jenis`) VALUES
('Paracetamol', 'OB0001', 5, 2000, 'Obat'),
('Amoxicillin', 'OB0002', 300, 500, 'Obat'),
('Sarung Tangan Medis', 'AL0001', 50, 1500, 'Alat'),
('Alat Suntik Tanpa Jarum', 'AL0002', 60, 5000, 'Alat'),
('Masker', 'AL0003', 100, 1500, 'Alat');

-- --------------------------------------------------------

--
-- Table structure for table `resep`
--

CREATE TABLE `resep` (
  `kode_resep` char(5) NOT NULL,
  `id_apoteker` varchar(30) NOT NULL,
  `nama_dokter` varchar(30) NOT NULL,
  `nama_pelanggan` varchar(30) NOT NULL,
  `tanggal` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
