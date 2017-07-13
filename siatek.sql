-- phpMyAdmin SQL Dump
-- version 4.5.4.1deb2ubuntu2
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Jul 13, 2017 at 04:58 PM
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
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `id_user` char(5) NOT NULL,
  `nama` varchar(30) NOT NULL,
  `jenis_kelamin` varchar(6) NOT NULL,
  `no_telp` varchar(30) DEFAULT NULL,
  `alamat` varchar(50) DEFAULT NULL,
  `jabatan` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`id_user`, `nama`, `jenis_kelamin`, `no_telp`, `alamat`, `jabatan`) VALUES
('AD001', 'Dio Tivano', 'Pria', '(0561) 725487', 'Jl. Arteri Supadio', 'Admin');

-- --------------------------------------------------------

--
-- Table structure for table `apoteker`
--

CREATE TABLE `apoteker` (
  `id_user` varchar(5) NOT NULL,
  `nama` varchar(30) NOT NULL,
  `jenis_kelamin` varchar(6) NOT NULL,
  `no_telp` varchar(30) DEFAULT NULL,
  `alamat` varchar(50) DEFAULT NULL,
  `jabatan` varchar(30) NOT NULL,
  `no_apoteker` varchar(20) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `apoteker`
--

INSERT INTO `apoteker` (`id_user`, `nama`, `jenis_kelamin`, `no_telp`, `alamat`, `jabatan`, `no_apoteker`) VALUES
('AP001', 'Yanto', 'Pria', '081221211221', 'Jl. Sepakat 2', 'Apoteker', NULL);

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
-- Table structure for table `karyawan`
--

CREATE TABLE `karyawan` (
  `id_user` char(5) NOT NULL,
  `nama` varchar(30) NOT NULL,
  `jabatan` varchar(30) NOT NULL,
  `jenis_kelamin` varchar(6) NOT NULL,
  `no_telp` varchar(13) DEFAULT NULL,
  `alamat` varchar(50) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `kasir`
--

CREATE TABLE `kasir` (
  `id_user` char(5) NOT NULL,
  `nama` varchar(30) NOT NULL,
  `jenis_kelamin` varchar(6) NOT NULL,
  `no_telp` varchar(13) DEFAULT NULL,
  `alamat` varchar(50) DEFAULT NULL,
  `jabatan` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `kasir`
--

INSERT INTO `kasir` (`id_user`, `nama`, `jenis_kelamin`, `no_telp`, `alamat`, `jabatan`) VALUES
('KS001', 'Muammar', 'Pria', '082233445566', 'Jl. Sepakat 1', 'Kasir');

-- --------------------------------------------------------

--
-- Table structure for table `resep`
--

CREATE TABLE `resep` (
  `kode_resep` char(5) NOT NULL,
  `id_user` char(5) NOT NULL,
  `nama_dokter` varchar(30) NOT NULL,
  `nama_pelanggan` varchar(30) NOT NULL,
  `tanggal` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `resep`
--

INSERT INTO `resep` (`kode_resep`, `id_user`, `nama_dokter`, `nama_pelanggan`, `tanggal`) VALUES
('A0001', 'AP001', 'Dr. Budi', 'Adi', '2017-01-01'),
('A0002', 'AP001', 'Dr. Ahmad', 'Lala', '2017-01-01'),
('A0003', 'AP001', 'Dr. Ipin', 'Kiki', '2017-01-02');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `nama` varchar(30) NOT NULL,
  `jabatan` varchar(30) NOT NULL,
  `jenis_kelamin` varchar(6) NOT NULL,
  `id_user` char(5) NOT NULL,
  `no_telp` varchar(30) NOT NULL,
  `username` varchar(30) NOT NULL,
  `password` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`nama`, `jabatan`, `jenis_kelamin`, `id_user`, `no_telp`, `username`, `password`) VALUES
('Yanto', 'Apoteker', 'Pria', 'AP001', '081221122122', 'yanto@siatek.com', 'root'),
('Upin', 'Karyawan', 'Pria', 'KR001', '085334465612', 'upin@siatek.com', 'upin2017'),
('Muammar', 'Kasir', 'Pria', 'KS001', '082211211211', 'amar@siatek.com', 'akses');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`id_user`);

--
-- Indexes for table `apoteker`
--
ALTER TABLE `apoteker`
  ADD PRIMARY KEY (`id_user`);

--
-- Indexes for table `karyawan`
--
ALTER TABLE `karyawan`
  ADD PRIMARY KEY (`id_user`);

--
-- Indexes for table `kasir`
--
ALTER TABLE `kasir`
  ADD PRIMARY KEY (`id_user`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id_user`);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
