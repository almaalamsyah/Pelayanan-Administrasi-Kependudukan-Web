-- phpMyAdmin SQL Dump
-- version 4.2.11
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Feb 07, 2023 at 09:19 AM
-- Server version: 5.6.21
-- PHP Version: 5.5.19

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `administrasi_penduduk`
--

-- --------------------------------------------------------

--
-- Table structure for table `akun`
--

CREATE TABLE IF NOT EXISTS `akun` (
`id_akun` int(11) NOT NULL,
  `nama_akun` varchar(50) NOT NULL,
  `username_akun` varchar(16) NOT NULL,
  `password_akun` varchar(16) NOT NULL,
  `akses` varchar(20) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `akun`
--

INSERT INTO `akun` (`id_akun`, `nama_akun`, `username_akun`, `password_akun`, `akses`) VALUES
(1, 'Super', 'super25', 'super25', 'super'),
(2, 'admin', 'admin', 'admin', 'admin'),
(4, 'contoh', 'contoh', 'contoh', 'admin');

-- --------------------------------------------------------

--
-- Table structure for table `data_penduduk`
--

CREATE TABLE IF NOT EXISTS `data_penduduk` (
`nik` bigint(20) NOT NULL,
  `nama` varchar(50) NOT NULL,
  `agama` varchar(20) NOT NULL,
  `gender` varchar(11) NOT NULL,
  `ttl` date NOT NULL,
  `id_dusun` int(11) NOT NULL,
  `rw` int(4) DEFAULT NULL,
  `rt` int(4) DEFAULT NULL,
  `pendidikan` varchar(20) NOT NULL,
  `pekerjaan` varchar(20) NOT NULL,
  `gol_darah` varchar(2) NOT NULL,
  `status` varchar(20) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=3207204405750007 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `data_penduduk`
--

INSERT INTO `data_penduduk` (`nik`, `nama`, `agama`, `gender`, `ttl`, `id_dusun`, `rw`, `rt`, `pendidikan`, `pekerjaan`, `gol_darah`, `status`) VALUES
(3207200911910001, 'SAEPUL MANAP', 'Islam', 'L', '1991-11-09', 1, 2, 7, 'SLTA', 'petani', 'B', 'Menikah'),
(3207201709070259, 'WAGINO', 'Islam', 'L', '1980-07-20', 3, 8, 28, 'SLTP', 'petani', 'AB', 'Menikah'),
(3207202108160001, 'MOH. ASRIL', 'Islam', 'L', '1999-05-04', 2, 5, 15, 'SMA', 'Petani', 'B', 'Menikah'),
(3207202405880001, 'ABA', 'Islam', 'L', '1988-08-19', 1, 1, 1, 'SD', 'Petani', 'O', 'Menikah'),
(3207202804020002, 'ARIL', 'Islam', 'L', '1986-03-12', 3, 7, 20, 'SMA', 'PETANI', 'O', 'Menikah'),
(3207203112730002, 'ASNONG', 'Islam', 'L', '1973-12-31', 5, 14, 36, 'SMA', 'PETANI', 'A', 'Menikah'),
(3207204321354005, 'AHMAD ', 'Islam', 'L', '1999-01-19', 4, 10, 30, 'SMA', 'Nelayan', 'O', 'Menikah'),
(3207204405750006, 'KARTIEM', 'Islam', 'P', '1975-05-04', 5, 14, 38, 'SLTP', 'ibu rumah tangga', 'A', 'Menikah');

-- --------------------------------------------------------

--
-- Table structure for table `dusun`
--

CREATE TABLE IF NOT EXISTS `dusun` (
`id_dusun` int(11) NOT NULL,
  `nama_dusun` varchar(20) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `dusun`
--

INSERT INTO `dusun` (`id_dusun`, `nama_dusun`) VALUES
(1, 'Patinggen 1'),
(2, 'Patinggen 2'),
(3, 'Harjarsik'),
(4, 'Sindangratu'),
(5, 'Sindangkerta');

-- --------------------------------------------------------

--
-- Table structure for table `jenis_surat`
--

CREATE TABLE IF NOT EXISTS `jenis_surat` (
`id_jenis_surat` int(11) NOT NULL,
  `nama_jenis_surat` varchar(50) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=7 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `jenis_surat`
--

INSERT INTO `jenis_surat` (`id_jenis_surat`, `nama_jenis_surat`) VALUES
(1, 'Surat keterangan tidak mampu'),
(2, 'Surat keterangan usaha'),
(3, 'Surat permohonan KTP'),
(4, 'Surat permohonan KK'),
(5, 'Surat permohonan pindah'),
(6, 'Surat keterangan kematian');

-- --------------------------------------------------------

--
-- Table structure for table `kepala_desa`
--

CREATE TABLE IF NOT EXISTS `kepala_desa` (
`id_kepala_desa` int(11) NOT NULL,
  `nama_kepala_desa` varchar(150) NOT NULL,
  `ttd_kepala_desa` varchar(150) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `kepala_desa`
--

INSERT INTO `kepala_desa` (`id_kepala_desa`, `nama_kepala_desa`, `ttd_kepala_desa`) VALUES
(1, 'SARYONO', 'ttd.png');

-- --------------------------------------------------------

--
-- Table structure for table `pelayanan`
--

CREATE TABLE IF NOT EXISTS `pelayanan` (
`id_pelayanan` int(11) NOT NULL,
  `id_pengajuan` int(11) NOT NULL,
  `id_akun` int(11) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=19 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `pelayanan`
--

INSERT INTO `pelayanan` (`id_pelayanan`, `id_pengajuan`, `id_akun`) VALUES
(16, 18, 2),
(17, 19, 2),
(18, 24, 2);

-- --------------------------------------------------------

--
-- Table structure for table `pengajuan`
--

CREATE TABLE IF NOT EXISTS `pengajuan` (
`id_pengajuan` int(11) NOT NULL,
  `tgl_pengajuan` date DEFAULT NULL,
  `gambar_ktp` varchar(150) NOT NULL,
  `gambar_kk` varchar(150) NOT NULL,
  `gambar_akta` varchar(150) NOT NULL,
  `catatan` varchar(150) NOT NULL,
  `nik` bigint(20) NOT NULL,
  `id_jenis_surat` int(11) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=26 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `pengajuan`
--

INSERT INTO `pengajuan` (`id_pengajuan`, `tgl_pengajuan`, `gambar_ktp`, `gambar_kk`, `gambar_akta`, `catatan`, `nik`, `id_jenis_surat`) VALUES
(18, '2023-01-16', '', '545-kk-1.png', '545-akta-2.png', 'KURANG CONTOH', 3207203112730002, 3),
(19, '2023-01-16', '472-ktp-2022-09-06_11-58-54.png', '472-kk-2022-09-06_12-22-26.png', '472-akta-2022-09-06_12-23-26.png', 'kurang', 3207203112730002, 2),
(20, '2023-01-18', '756-ktp-2022-09-06_12-23-46.png', '756-kk-1.png', '756-akta-2022-09-06_12-22-45.png', '', 3207202405880001, 2),
(21, '2023-01-18', '', '922-kk-1.png', '922-akta-2.png', 'Proses Pengecekkna', 3207202405880001, 3),
(22, '2023-02-03', '', '890-kk-', '890-akta-', 'Proses Pengecekkna', 3207201709070259, 3),
(23, '2023-02-03', '844-ktp-5180411346.jpg', '844-kk-', '844-akta-WhatsApp Image 2023-01-16 at 10.12.06.jpeg', 'Proses Pengecekkna', 3207201709070259, 4),
(24, '2023-02-04', '', '738-kk-Picture1.png', '738-akta-safe.png', 'Proses Pengecekkna', 3207202804020002, 3),
(25, '2023-02-04', '378-ktp-2.jpg', '', '378-akta-complete.png', 'kurang data ktp', 3207202804020002, 4);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `akun`
--
ALTER TABLE `akun`
 ADD PRIMARY KEY (`id_akun`);

--
-- Indexes for table `data_penduduk`
--
ALTER TABLE `data_penduduk`
 ADD PRIMARY KEY (`nik`), ADD KEY `id_dusun` (`id_dusun`);

--
-- Indexes for table `dusun`
--
ALTER TABLE `dusun`
 ADD PRIMARY KEY (`id_dusun`);

--
-- Indexes for table `jenis_surat`
--
ALTER TABLE `jenis_surat`
 ADD PRIMARY KEY (`id_jenis_surat`);

--
-- Indexes for table `kepala_desa`
--
ALTER TABLE `kepala_desa`
 ADD PRIMARY KEY (`id_kepala_desa`);

--
-- Indexes for table `pelayanan`
--
ALTER TABLE `pelayanan`
 ADD PRIMARY KEY (`id_pelayanan`), ADD KEY `id_pengajuan` (`id_pengajuan`), ADD KEY `id_akun` (`id_akun`);

--
-- Indexes for table `pengajuan`
--
ALTER TABLE `pengajuan`
 ADD PRIMARY KEY (`id_pengajuan`), ADD KEY `nik` (`nik`), ADD KEY `id_jenis_surat` (`id_jenis_surat`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `akun`
--
ALTER TABLE `akun`
MODIFY `id_akun` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=5;
--
-- AUTO_INCREMENT for table `data_penduduk`
--
ALTER TABLE `data_penduduk`
MODIFY `nik` bigint(20) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=3207204405750007;
--
-- AUTO_INCREMENT for table `dusun`
--
ALTER TABLE `dusun`
MODIFY `id_dusun` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=6;
--
-- AUTO_INCREMENT for table `jenis_surat`
--
ALTER TABLE `jenis_surat`
MODIFY `id_jenis_surat` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=7;
--
-- AUTO_INCREMENT for table `kepala_desa`
--
ALTER TABLE `kepala_desa`
MODIFY `id_kepala_desa` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `pelayanan`
--
ALTER TABLE `pelayanan`
MODIFY `id_pelayanan` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=19;
--
-- AUTO_INCREMENT for table `pengajuan`
--
ALTER TABLE `pengajuan`
MODIFY `id_pengajuan` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=26;
--
-- Constraints for dumped tables
--

--
-- Constraints for table `data_penduduk`
--
ALTER TABLE `data_penduduk`
ADD CONSTRAINT `data_penduduk_ibfk_1` FOREIGN KEY (`id_dusun`) REFERENCES `dusun` (`id_dusun`);

--
-- Constraints for table `pelayanan`
--
ALTER TABLE `pelayanan`
ADD CONSTRAINT `pelayanan_ibfk_1` FOREIGN KEY (`id_pengajuan`) REFERENCES `pengajuan` (`id_pengajuan`),
ADD CONSTRAINT `pelayanan_ibfk_2` FOREIGN KEY (`id_akun`) REFERENCES `akun` (`id_akun`);

--
-- Constraints for table `pengajuan`
--
ALTER TABLE `pengajuan`
ADD CONSTRAINT `pengajuan_ibfk_1` FOREIGN KEY (`nik`) REFERENCES `data_penduduk` (`nik`),
ADD CONSTRAINT `pengajuan_ibfk_2` FOREIGN KEY (`id_jenis_surat`) REFERENCES `jenis_surat` (`id_jenis_surat`);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
