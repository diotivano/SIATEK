-- Adminer 4.3.1 MySQL dump

SET NAMES utf8;
SET time_zone = '+00:00';
SET foreign_key_checks = 0;
SET sql_mode = 'NO_AUTO_VALUE_ON_ZERO';

DROP TABLE IF EXISTS `barang`;
CREATE TABLE `barang` (
  `nama_barang` varchar(30) NOT NULL,
  `kode_barang` char(6) NOT NULL,
  `stok` int(11) DEFAULT NULL,
  `harga` int(11) NOT NULL,
  `jenis` varchar(4) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

INSERT INTO `barang` (`nama_barang`, `kode_barang`, `stok`, `harga`, `jenis`) VALUES
('Paracetamol',	'OB0001',	5,	2000,	'Obat'),
('Amoxicillin',	'OB0002',	300,	500,	'Obat'),
('Sarung Tangan Medis',	'AL0001',	50,	1500,	'Alat'),
('Alat Suntik Tanpa Jarum',	'AL0002',	60,	5000,	'Alat'),
('Masker',	'AL0003',	100,	1500,	'Alat');

-- 2017-07-13 08:13:12
