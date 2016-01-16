-- phpMyAdmin SQL Dump
-- version 4.2.11
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Jan 10, 2016 at 07:35 PM
-- Server version: 5.6.21
-- PHP Version: 5.6.3

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `baraja_ci`
--

-- --------------------------------------------------------

--
-- Table structure for table `kategori`
--

CREATE TABLE IF NOT EXISTS `kategori` (
`kode_kategori` int(11) NOT NULL,
  `judul_kategori` varchar(30) DEFAULT NULL
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `kategori`
--

INSERT INTO `kategori` (`kode_kategori`, `judul_kategori`) VALUES
(1, 'Pemrograman PHP'),
(2, 'Pemrograman Python'),
(3, 'Pemrograman Java');

-- --------------------------------------------------------

--
-- Table structure for table `konten`
--

CREATE TABLE IF NOT EXISTS `konten` (
`kode_konten` int(11) NOT NULL,
  `judul_konten` varchar(100) DEFAULT NULL,
  `penulis` varchar(50) DEFAULT NULL,
  `tanggal` datetime DEFAULT NULL,
  `isi` text,
  `kode_kategori` int(11) DEFAULT NULL
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `konten`
--

INSERT INTO `konten` (`kode_konten`, `judul_konten`, `penulis`, `tanggal`, `isi`, `kode_kategori`) VALUES
(1, 'Program PHP dengan dukungan html,css, dan javascript', 'Argiansyah Putra', '2016-01-07 17:48:00', 'ini isi konten pemrograman PHP', 1),
(2, 'pemrograman python untuk desktop dan web dengan framework djanggo', 'Argiansyah Putra', '2016-01-07 17:50:00', 'ini isi konten pemrograman python', 2),
(3, 'pemrograman python khusus desktop + contoh project', 'Argiansyah Putra', '2016-01-07 17:51:00', 'ini isi konten pemrograman python', 2),
(4, 'pemrograman java mobile untuk android', 'Argiansyah Putra', '2016-01-07 17:52:00', 'ini isi konten pemrograman java', 3);

-- --------------------------------------------------------

--
-- Table structure for table `mahasiswa`
--

CREATE TABLE IF NOT EXISTS `mahasiswa` (
  `nim` varchar(10) NOT NULL,
  `nama` varchar(100) DEFAULT NULL,
  `alamat` text
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `mahasiswa`
--

INSERT INTO `mahasiswa` (`nim`, `nama`, `alamat`) VALUES
('10101113', 'Claudia', 'Rio de Janiero, Brazil'),
('102356', 'Agik Syah', 'Sawahlunto, Sumatra Barat'),
('102357', 'Tove Styrke', 'swedia');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `kategori`
--
ALTER TABLE `kategori`
 ADD PRIMARY KEY (`kode_kategori`);

--
-- Indexes for table `konten`
--
ALTER TABLE `konten`
 ADD PRIMARY KEY (`kode_konten`);

--
-- Indexes for table `mahasiswa`
--
ALTER TABLE `mahasiswa`
 ADD PRIMARY KEY (`nim`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `kategori`
--
ALTER TABLE `kategori`
MODIFY `kode_kategori` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT for table `konten`
--
ALTER TABLE `konten`
MODIFY `kode_konten` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=5;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
