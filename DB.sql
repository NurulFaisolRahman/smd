-- phpMyAdmin SQL Dump
-- version 4.9.0.1
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: Aug 26, 2020 at 04:42 PM
-- Server version: 10.3.16-MariaDB
-- PHP Version: 7.2.20

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `smd`
--

-- --------------------------------------------------------

--
-- Table structure for table `Admin`
--

CREATE TABLE `Admin` (
  `No` int(11) NOT NULL,
  `Username` varchar(15) NOT NULL,
  `Password` varchar(60) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `Admin`
--

INSERT INTO `Admin` (`No`, `Username`, `Password`) VALUES
(1, 'admin', '$2y$10$kOiSPvXxelOMUO2OQDGB8O4HlR4AcWQ3oXRfzc2h4qiiecjrohrCi');

-- --------------------------------------------------------

--
-- Table structure for table `Akun`
--

CREATE TABLE `Akun` (
  `NIP` varchar(18) NOT NULL,
  `Password` varchar(60) NOT NULL,
  `JenisAkun` char(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `Akun`
--

INSERT INTO `Akun` (`NIP`, `Password`, `JenisAkun`) VALUES
('197508092008121003', '$2y$10$TQbQATyoZ91YQPjddOU2XuCLB0mwtSCG.rfDyoN4mvDitGun9pdxK', '2');

-- --------------------------------------------------------

--
-- Table structure for table `Dosen`
--

CREATE TABLE `Dosen` (
  `NIP` varchar(18) NOT NULL,
  `NIDN` varchar(10) NOT NULL,
  `Nama` varchar(100) NOT NULL,
  `Jabatan` varchar(25) NOT NULL,
  `Pangkat` varchar(25) NOT NULL,
  `Golongan` varchar(5) NOT NULL,
  `KreditLama` varchar(15) NOT NULL,
  `Tahun` varchar(4) NOT NULL,
  `Foto` varchar(15) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `Dosen`
--

INSERT INTO `Dosen` (`NIP`, `NIDN`, `Nama`, `Jabatan`, `Pangkat`, `Golongan`, `KreditLama`, `Tahun`, `Foto`) VALUES
('197508092008121003', '1234554321', 'Dr. Sutikno, SE., ME.', 'Lektor', 'Penata', 'IIIc', '150', '2014', '20200725NE3.png');

-- --------------------------------------------------------

--
-- Table structure for table `RealisasiPendidikan`
--

CREATE TABLE `RealisasiPendidikan` (
  `No` int(11) NOT NULL,
  `NIP` varchar(18) NOT NULL,
  `Jabatan` varchar(15) NOT NULL,
  `Jenjang` varchar(2) DEFAULT NULL,
  `Semester` varchar(7) DEFAULT NULL,
  `Tahun` varchar(4) DEFAULT NULL,
  `IdKegiatan` varchar(5) NOT NULL,
  `Kode` varchar(3) NOT NULL,
  `SK` varchar(200) NOT NULL,
  `Kegiatan` text DEFAULT NULL,
  `TanggalKegiatan` varchar(100) DEFAULT NULL,
  `Satuan` varchar(50) DEFAULT NULL,
  `Volume` varchar(15) DEFAULT NULL,
  `Kredit` varchar(15) DEFAULT NULL,
  `KreditBkd` varchar(15) NOT NULL,
  `JumlahKredit` varchar(15) DEFAULT NULL,
  `Bukti` varchar(20) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `RealisasiPendidikan`
--

INSERT INTO `RealisasiPendidikan` (`No`, `NIP`, `Jabatan`, `Jenjang`, `Semester`, `Tahun`, `IdKegiatan`, `Kode`, `SK`, `Kegiatan`, `TanggalKegiatan`, `Satuan`, `Volume`, `Kredit`, `KreditBkd`, `JumlahKredit`, `Bukti`) VALUES
(72, '197508092008121003', 'Lektor', 'S1', 'Ganjil', '2015', 'PND2', '0', 'SK', 'Diklat', '2015', '', '1', '3', '', '3', '20200821zq6NfFF.pdf'),
(76, '197508092008121003', 'Lektor', 'S1', 'Ganjil', '2015', 'PND1', '1', 'SK 1', 'S2', '2015', '1/periode penilaian', '1', '150', '', '150', '20200821u4rGdPb.pdf'),
(77, '197508092008121003', 'Lektor', 'S1', 'Ganjil', '2015', 'PND3', '0', 'Surat Tugas Nomor 3640/UN.1.12/DK/2015', 'Mengajar Matakuliah Ekonomi Regional S1 Sebanyak 3 Kelas 2 Dosen', '2015', '10 sks Pertama', '4.5', '1', '2.25', '4.5', '20200821EFFL3UU.pdf'),
(79, '197508092008121003', 'Lektor', 'S1', 'Ganjil', '2015', 'PND4', '0', 'SK ', 'keg', '2015', '', '1', '1', '1', '1', '20200821O1et5mk.pdf'),
(82, '197508092008121003', 'Lektor', 'S1', 'Ganjil', '2015', 'PND5', '0', 'SK KKN 1', 'KKN 1', '2015', '', '1', '1', '0.75', '1', '20200824j2yJwGF.pdf'),
(83, '197508092008121003', 'Lektor', 'S1', 'Ganjil', '2015', 'PND6', '1/2', 'SK Tesis 1', 'Tesis 1', '2015', '6 lulusan / semester', '6', '3', '2', '3', '20200824lcVUMRr.pdf'),
(85, '197508092008121003', 'Lektor', 'S1', 'Ganjil', '2015', 'PND7', '1', 'SK Penguji', 'Menguji', '2015', '4 lulusan / semester', '4', '1', '1.33', '1', '20200824sIs81bx.pdf'),
(86, '197508092008121003', 'Lektor', 'S1', 'Ganjil', '2015', 'PND8', '0', 'SK Membina', 'Membina MHS', '2015', '2 kegiatan / semester', '2', '2', '', '2', '20200824vIvffV2.pdf'),
(87, '197508092008121003', 'Lektor', 'S1', 'Ganjil', '2015', 'PND9', '0', 'SK Mengembangkan', 'Mengembangkan', '2015', '1 mata kuliah / semester', '1', '2', '2', '2', '20200824Sw8Qey6.pdf'),
(88, '197508092008121003', 'Lektor', 'S1', 'Ganjil', '2015', 'PND10', '1', 'SK Mengembangkan Bahan', 'Buku', '2015', '1 buku/tahun', '1', '20', '2', '20', '202008240GkXTOL.pdf'),
(89, '197508092008121003', 'Lektor', 'S1', 'Ganjil', '2015', 'PND11', '0', 'SK Orasi', 'Orasi', '2015', '2 orasi / semester', '1', '5', '1', '2.5', '20200824BHOfYHD.pdf'),
(90, '197508092008121003', 'Lektor', 'S1', 'Ganjil', '2015', 'PND12', '6', 'SK Kajur', 'Kajur', '2015', '1 jabatan / semester', '1', '3', '', '3', '20200824ZAypFq8.pdf'),
(91, '197508092008121003', 'Lektor', 'S1', 'Ganjil', '2015', 'PND13', '1', 'SK Bimbing Dosen', 'Bimbing', '2015', '1 Orang', '3', '2', '0.75', '6', '202008244q6qSMa.pdf'),
(92, '197508092008121003', 'Lektor', 'S1', 'Ganjil', '2015', 'PND14', '1', 'SK Detasering', 'Detasering', '2015', '1 Orang', '1', '5', '', '5', '20200824ASlp7A4.pdf'),
(93, '197508092008121003', 'Lektor', 'S1', 'Ganjil', '2015', 'PND15', '3', 'SK Pengembangan Diri', 'Pengembangan', '2015', '', '1', '6', '1', '6', '20200824y1EeFV4.pdf'),
(94, '197508092008121003', 'Lektor', 'S1', 'Ganjil', '2015', 'PND16', '0', 'SK Praktikum', 'Ekonomi', '2015', '', '1', '', '0.75', '', '20200824GYAKeEE.pdf'),
(95, '197508092008121003', 'Lektor', 'S1', 'Ganjil', '2015', 'PND3', '0', 'Surat Tugas Nomor 3640/UN.1.12/DK/2015', 'Mengajar Ekonomi Kelembagaan Sebanyak 5 Kelas 2 Dosen Mengajar Ekonomi Kelembagaan Sebanyak 5 Kelas 2 Dosen', '2015', '10 sks Pertama', '7.5', '1', '3.75', '7.5', '20200824bfEfwu6.pdf'),
(96, '197508092008121003', 'Lektor', 'S1', 'Genap', '2015', 'PND3', '0', 'Surat Tugas Nomor 3640/UN.1.12/DK/2015', 'Mengajar Matakuliah Ekonomi Regional S1 Sebanyak 3 Kelas 2 Dosen', '2015', '10 sks Pertama', '7.5', '1', '3.75', '7.5', '20200824mRL7LR9.pdf');

-- --------------------------------------------------------

--
-- Table structure for table `RealisasiPenelitian`
--

CREATE TABLE `RealisasiPenelitian` (
  `No` int(11) NOT NULL,
  `NIP` varchar(18) NOT NULL,
  `Jabatan` varchar(15) NOT NULL,
  `Jenjang` varchar(2) DEFAULT NULL,
  `Semester` varchar(7) DEFAULT NULL,
  `Tahun` varchar(4) DEFAULT NULL,
  `IdKegiatan` varchar(5) NOT NULL,
  `Kode` varchar(3) NOT NULL,
  `SK` varchar(200) NOT NULL,
  `Kegiatan` text DEFAULT NULL,
  `TanggalKegiatan` varchar(100) DEFAULT NULL,
  `Satuan` varchar(50) DEFAULT NULL,
  `Volume` varchar(15) DEFAULT NULL,
  `Kredit` varchar(15) DEFAULT NULL,
  `KreditBkd` varchar(15) NOT NULL,
  `JumlahKredit` varchar(15) DEFAULT NULL,
  `Bukti` varchar(20) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `RealisasiPenelitian`
--

INSERT INTO `RealisasiPenelitian` (`No`, `NIP`, `Jabatan`, `Jenjang`, `Semester`, `Tahun`, `IdKegiatan`, `Kode`, `SK`, `Kegiatan`, `TanggalKegiatan`, `Satuan`, `Volume`, `Kredit`, `KreditBkd`, `JumlahKredit`, `Bukti`) VALUES
(1, '197508092008121003', 'Lektor', 'S1', 'Ganjil', '2015', 'PNL1', '3', 'SK Karya', 'Ilmiah', '2015', NULL, '1', '15', '', '15', '20200825HyPDO0t.pdf'),
(2, '197508092008121003', 'Lektor', 'S1', 'Ganjil', '2015', 'PNL2', '3', 'SK Penelitian', 'Desiminasi', '2015', NULL, '1', '15', '', '15', '202008253fDiMh1.pdf'),
(3, '197508092008121003', 'Lektor', 'S1', 'Ganjil', '2015', 'PNL3', '0', 'SK Kerjasama', 'Industri', '2015', NULL, '1', '2', '', '2', '20200825oqeWYIK.pdf'),
(4, '197508092008121003', 'Lektor', 'S1', 'Ganjil', '2015', 'PNL4', '0', 'SK Menerjemah', 'Buku', '2015', NULL, '1', '15', '1.2', '9', '20200825boheqIr.pdf'),
(5, '197508092008121003', 'Lektor', 'S1', 'Ganjil', '2015', 'PNL5', '0', 'SK Menyunting', 'Karya Ilmiah', '2015', NULL, '1', '10', '2', '10', '202008257lVxanR.pdf'),
(6, '197508092008121003', 'Lektor', 'S1', 'Ganjil', '2015', 'PNL6', '6', 'SK Karya', 'Teknologi', '2015', NULL, '1', '15', '', '15', '20200825CZ3F1Ac.pdf'),
(7, '197508092008121003', 'Lektor', 'S1', 'Ganjil', '2015', 'PNL7', '2', 'SK Karya', 'Teknologi', '2015', NULL, '1', '15', '', '15', '20200825lFnqBc5.pdf'),
(8, '197508092008121003', 'Lektor', 'S1', 'Ganjil', '2015', 'PNL8', '3', 'SK Karya', 'Seni', '2015', NULL, '1', '10', '', '10', '2020082521JSoFA.pdf'),
(9, '197508092008121003', 'Lektor', 'S1', 'Ganjil', '2015', 'PNL9', '0', 'SK Penelitian', 'Teknologi', '2015', NULL, '1', '', '2', '', '20200825bVZTzYN.pdf'),
(10, '197508092008121003', 'Lektor', 'S1', 'Ganjil', '2015', 'PNL10', '0', 'SK Ketua', 'Penelitian', '2015', NULL, '1', '', '2', '', '20200825uItNMVF.pdf');

-- --------------------------------------------------------

--
-- Table structure for table `RealisasiPengabdian`
--

CREATE TABLE `RealisasiPengabdian` (
  `No` int(11) NOT NULL,
  `NIP` varchar(18) NOT NULL,
  `Jabatan` varchar(15) NOT NULL,
  `Jenjang` varchar(2) DEFAULT NULL,
  `Semester` varchar(7) DEFAULT NULL,
  `Tahun` varchar(4) DEFAULT NULL,
  `IdKegiatan` varchar(5) NOT NULL,
  `Kode` varchar(3) NOT NULL,
  `SK` varchar(200) NOT NULL,
  `Kegiatan` text DEFAULT NULL,
  `TanggalKegiatan` varchar(100) DEFAULT NULL,
  `Satuan` varchar(50) DEFAULT NULL,
  `Volume` varchar(15) DEFAULT NULL,
  `Kredit` varchar(15) DEFAULT NULL,
  `KreditBkd` varchar(15) NOT NULL,
  `JumlahKredit` varchar(15) DEFAULT NULL,
  `Bukti` varchar(20) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `RealisasiPengabdian`
--

INSERT INTO `RealisasiPengabdian` (`No`, `NIP`, `Jabatan`, `Jenjang`, `Semester`, `Tahun`, `IdKegiatan`, `Kode`, `SK`, `Kegiatan`, `TanggalKegiatan`, `Satuan`, `Volume`, `Kredit`, `KreditBkd`, `JumlahKredit`, `Bukti`) VALUES
(2, '197508092008121003', 'Lektor', 'S1', 'Ganjil', '2015', 'PNB1', '0', 'SK Pimpinan', 'Lembaga', '2015', NULL, '1', '5.5', '', '5.5', '20200825ufpvXaF.pdf'),
(3, '197508092008121003', 'Lektor', 'S1', 'Ganjil', '2015', 'PNB2', '0', 'SK Pengembangan', 'Hasil Pendidikan', '2015', NULL, '1', '3', '', '3', '20200825SPmH9Yt.pdf'),
(4, '197508092008121003', 'Lektor', 'S1', 'Ganjil', '2015', 'PNB3', '4', 'SK Penyuluhan', 'Ekonomi', '2015', NULL, '1', '3', '0.2', '3', '20200825Wwp6ie0.pdf'),
(5, '197508092008121003', 'Lektor', 'S1', 'Ganjil', '2015', 'PNB4', '2', 'SK Pelayanan', 'Narasumber', '2015', NULL, '1', '1', '0.2', '1', '20200825JFnGEsd.pdf'),
(6, '197508092008121003', 'Lektor', 'S1', 'Ganjil', '2015', 'PNB5', '0', 'SK Menulis', 'Karya', '2015', NULL, '1', '3', '0.2', '3', '20200825deCfeSb.pdf'),
(7, '197508092008121003', 'Lektor', 'S1', 'Ganjil', '2015', 'PNB6', '0', 'SK Hasil Kegiatan', 'Pengabdian', '2015', NULL, '1', '5', '', '5', '20200825JvymAOb.pdf'),
(8, '197508092008121003', 'Lektor', 'S1', 'Ganjil', '2015', 'PNB7', '2', 'SK Pengelolaan', 'Jurnal', '2015', NULL, '1', '0.5', '', '0.5', '20200825EFCHRw0.pdf'),
(9, '197508092008121003', 'Lektor', 'S1', 'Ganjil', '2015', 'PNB9', '0', 'SK Reviewer', 'Bedah Buku', '2015', NULL, '1', '', '0.2', '', '20200825IrjilGe.pdf'),
(12, '197508092008121003', 'Lektor', 'S1', 'Ganjil', '2015', 'PNB8', '0', 'SK Kegiatan ', 'Proposal Pengabdian', '2015', NULL, '1', '', '0.7', '', '20200825MC9tFZM.pdf');

-- --------------------------------------------------------

--
-- Table structure for table `RealisasiPenunjang`
--

CREATE TABLE `RealisasiPenunjang` (
  `No` int(11) NOT NULL,
  `NIP` varchar(18) NOT NULL,
  `Jabatan` varchar(15) NOT NULL,
  `Jenjang` varchar(2) DEFAULT NULL,
  `Semester` varchar(7) DEFAULT NULL,
  `Tahun` varchar(4) DEFAULT NULL,
  `IdKegiatan` varchar(5) NOT NULL,
  `Kode` varchar(3) NOT NULL,
  `SK` varchar(200) NOT NULL,
  `Kegiatan` text DEFAULT NULL,
  `TanggalKegiatan` varchar(100) DEFAULT NULL,
  `Satuan` varchar(50) DEFAULT NULL,
  `Volume` varchar(15) DEFAULT NULL,
  `Kredit` varchar(15) DEFAULT NULL,
  `KreditBkd` varchar(15) NOT NULL,
  `JumlahKredit` varchar(15) DEFAULT NULL,
  `Bukti` varchar(20) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `RealisasiPenunjang`
--

INSERT INTO `RealisasiPenunjang` (`No`, `NIP`, `Jabatan`, `Jenjang`, `Semester`, `Tahun`, `IdKegiatan`, `Kode`, `SK`, `Kegiatan`, `TanggalKegiatan`, `Satuan`, `Volume`, `Kredit`, `KreditBkd`, `JumlahKredit`, `Bukti`) VALUES
(1, '197508092008121003', 'Lektor', 'S1', 'Ganjil', '2015', 'PNJ1', '2', 'SK Anggota', 'Panitia', '2015', NULL, '1', '2', '', '2', '20200825qtB4aZz.pdf'),
(2, '197508092008121003', 'Lektor', 'S1', 'Ganjil', '2015', 'PNJ2', '3', 'SK Panitia', 'Lembaga', '2015', NULL, '1', '2', '', '2', '20200825sTaQ7FT.pdf'),
(3, '197508092008121003', 'Lektor', 'S1', 'Ganjil', '2015', 'PNJ3', '4', 'SK Anggota', 'Profesi', '2015', NULL, '1', '1.5', '', '1.5', '20200825pal8CZw.pdf'),
(4, '197508092008121003', 'Lektor', 'S1', 'Ganjil', '2015', 'PNJ4', '0', 'SK Mewakili', 'Universitas', '2015', NULL, '1', '1', '', '1', '202008255FF5Gb3.pdf'),
(5, '197508092008121003', 'Lektor', 'S1', 'Ganjil', '2015', 'PNJ5', '2', 'SK Anggota', 'Delegasi', '2015', NULL, '1', '2', '', '2', '20200825icdSzGA.pdf'),
(6, '197508092008121003', 'Lektor', 'S1', 'Ganjil', '2015', 'PNJ6', '4', 'SK Pertemuan', 'Ilmiah', '2015', NULL, '1', '1', '', '1', '202008254CgXohQ.pdf'),
(7, '197508092008121003', 'Lektor', 'S1', 'Ganjil', '2015', 'PNJ7', '6', 'SK Mendapat', 'Penghargaan', '2015', NULL, '1', '1', '', '1', '20200825hRfGOvQ.pdf'),
(8, '197508092008121003', 'Lektor', 'S1', 'Ganjil', '2015', 'PNJ8', '3', 'SK Menulis', 'Buku', '2015', NULL, '1', '5', '', '5', '20200825DCTIbv7.pdf'),
(9, '197508092008121003', 'Lektor', 'S1', 'Ganjil', '2015', 'PNJ9', '3', 'SK Prestasi', 'Olahraga', '2015', NULL, '1', '1', '', '1', '20200825EQCfuDw.pdf'),
(10, '197508092008121003', 'Lektor', 'S1', 'Ganjil', '2015', 'PNJ10', '0', 'SK Tim', 'Penilai', '2015', NULL, '1', '0.5', '', '0.5', '20200825jFw9S7n.pdf'),
(11, '197508092008121003', 'Lektor', 'S1', 'Ganjil', '2015', 'PNJ11', '0', 'SK Bimbingan', 'Perwalian', '2015', NULL, '87', '', '7.25', '', '20200825kwQS4Qf.pdf'),
(12, '197508092008121003', 'Lektor', 'S1', 'Ganjil', '2015', 'PNJ12', '0', 'SK Ketua Program', 'Studi Ekonomi', '2015', NULL, '1', '', '4', '', '20200825fpIFexo.pdf');

-- --------------------------------------------------------

--
-- Table structure for table `RencanaPendidikan`
--

CREATE TABLE `RencanaPendidikan` (
  `No` int(11) NOT NULL,
  `NIP` varchar(18) NOT NULL,
  `Jabatan` varchar(25) NOT NULL,
  `Jenjang` varchar(8) NOT NULL,
  `Semester` varchar(7) NOT NULL,
  `Tahun` varchar(4) NOT NULL,
  `KodeRencana` varchar(120) NOT NULL,
  `TotalKredit` varchar(7) NOT NULL,
  `TargetKajur` varchar(10) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `RencanaPendidikan`
--

INSERT INTO `RencanaPendidikan` (`No`, `NIP`, `Jabatan`, `Jenjang`, `Semester`, `Tahun`, `KodeRencana`, `TotalKredit`, `TargetKajur`) VALUES
(9, '197508092008121003', 'Lektor', 'S1', 'Ganjil', '2015', '0|0|0|0|0|0|0|0|0|0|0|0|0|0|0|0|0|0|0|0|0|0|0|1|0|0|0|0|0|0|0|0|0|0|0|0|0', '5', '150');

-- --------------------------------------------------------

--
-- Table structure for table `RencanaPenelitian`
--

CREATE TABLE `RencanaPenelitian` (
  `No` int(11) NOT NULL,
  `NIP` varchar(18) NOT NULL,
  `Jabatan` varchar(25) NOT NULL,
  `Jenjang` varchar(8) NOT NULL,
  `Semester` varchar(7) NOT NULL,
  `Tahun` varchar(4) NOT NULL,
  `KodeRencana` varchar(120) NOT NULL,
  `TotalKredit` varchar(7) NOT NULL,
  `TargetKajur` varchar(10) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `RencanaPenelitian`
--

INSERT INTO `RencanaPenelitian` (`No`, `NIP`, `Jabatan`, `Jenjang`, `Semester`, `Tahun`, `KodeRencana`, `TotalKredit`, `TargetKajur`) VALUES
(5, '197508092008121003', 'Lektor', 'S1', 'Ganjil', '2015', '0|0|0|0|0|0|0|0|0|0|0|0|0|0|0|0|0|0|0|0|0|0|0|0|0|0|0|0|0|0|0|0|0|0|0|0|0', '0', '70');

-- --------------------------------------------------------

--
-- Table structure for table `RencanaPengabdian`
--

CREATE TABLE `RencanaPengabdian` (
  `No` int(11) NOT NULL,
  `NIP` varchar(18) NOT NULL,
  `Jabatan` varchar(25) NOT NULL,
  `Jenjang` varchar(8) NOT NULL,
  `Semester` varchar(7) NOT NULL,
  `Tahun` varchar(4) NOT NULL,
  `KodeRencana` varchar(120) NOT NULL,
  `TotalKredit` varchar(7) NOT NULL,
  `TargetKajur` varchar(10) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `RencanaPengabdian`
--

INSERT INTO `RencanaPengabdian` (`No`, `NIP`, `Jabatan`, `Jenjang`, `Semester`, `Tahun`, `KodeRencana`, `TotalKredit`, `TargetKajur`) VALUES
(4, '197508092008121003', 'Lektor', 'S1', 'Ganjil', '2015', '0|0|0|0|0|0|0|0|0|0|0|0|0|0|0|0', '0', '95');

-- --------------------------------------------------------

--
-- Table structure for table `RencanaPenunjang`
--

CREATE TABLE `RencanaPenunjang` (
  `No` int(11) NOT NULL,
  `NIP` varchar(18) NOT NULL,
  `Jabatan` varchar(25) NOT NULL,
  `Jenjang` varchar(8) NOT NULL,
  `Semester` varchar(7) NOT NULL,
  `Tahun` varchar(4) NOT NULL,
  `KodeRencana` varchar(120) NOT NULL,
  `TotalKredit` varchar(7) NOT NULL,
  `TargetKajur` varchar(10) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `RencanaPenunjang`
--

INSERT INTO `RencanaPenunjang` (`No`, `NIP`, `Jabatan`, `Jenjang`, `Semester`, `Tahun`, `KodeRencana`, `TotalKredit`, `TargetKajur`) VALUES
(4, '197508092008121003', 'Lektor', 'S1', 'Ganjil', '2015', '0|0|0|0|0|0|0|0|0|0|0|0|0|0|0|0|0|0|0|0|0|0|0|0|0|0|0|0|0|0|0|0', '0', '96');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `Admin`
--
ALTER TABLE `Admin`
  ADD PRIMARY KEY (`No`);

--
-- Indexes for table `Akun`
--
ALTER TABLE `Akun`
  ADD KEY `NIP` (`NIP`);

--
-- Indexes for table `Dosen`
--
ALTER TABLE `Dosen`
  ADD PRIMARY KEY (`NIP`);

--
-- Indexes for table `RealisasiPendidikan`
--
ALTER TABLE `RealisasiPendidikan`
  ADD PRIMARY KEY (`No`),
  ADD KEY `NIP` (`NIP`);

--
-- Indexes for table `RealisasiPenelitian`
--
ALTER TABLE `RealisasiPenelitian`
  ADD PRIMARY KEY (`No`),
  ADD KEY `NIP` (`NIP`);

--
-- Indexes for table `RealisasiPengabdian`
--
ALTER TABLE `RealisasiPengabdian`
  ADD PRIMARY KEY (`No`),
  ADD KEY `NIP` (`NIP`);

--
-- Indexes for table `RealisasiPenunjang`
--
ALTER TABLE `RealisasiPenunjang`
  ADD PRIMARY KEY (`No`),
  ADD KEY `NIP` (`NIP`);

--
-- Indexes for table `RencanaPendidikan`
--
ALTER TABLE `RencanaPendidikan`
  ADD PRIMARY KEY (`No`),
  ADD KEY `NIP` (`NIP`);

--
-- Indexes for table `RencanaPenelitian`
--
ALTER TABLE `RencanaPenelitian`
  ADD PRIMARY KEY (`No`),
  ADD KEY `NIP` (`NIP`);

--
-- Indexes for table `RencanaPengabdian`
--
ALTER TABLE `RencanaPengabdian`
  ADD PRIMARY KEY (`No`),
  ADD KEY `NIP` (`NIP`);

--
-- Indexes for table `RencanaPenunjang`
--
ALTER TABLE `RencanaPenunjang`
  ADD PRIMARY KEY (`No`),
  ADD KEY `NIP` (`NIP`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `Admin`
--
ALTER TABLE `Admin`
  MODIFY `No` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `RealisasiPendidikan`
--
ALTER TABLE `RealisasiPendidikan`
  MODIFY `No` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=97;

--
-- AUTO_INCREMENT for table `RealisasiPenelitian`
--
ALTER TABLE `RealisasiPenelitian`
  MODIFY `No` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `RealisasiPengabdian`
--
ALTER TABLE `RealisasiPengabdian`
  MODIFY `No` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT for table `RealisasiPenunjang`
--
ALTER TABLE `RealisasiPenunjang`
  MODIFY `No` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT for table `RencanaPendidikan`
--
ALTER TABLE `RencanaPendidikan`
  MODIFY `No` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `RencanaPenelitian`
--
ALTER TABLE `RencanaPenelitian`
  MODIFY `No` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `RencanaPengabdian`
--
ALTER TABLE `RencanaPengabdian`
  MODIFY `No` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `RencanaPenunjang`
--
ALTER TABLE `RencanaPenunjang`
  MODIFY `No` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `Akun`
--
ALTER TABLE `Akun`
  ADD CONSTRAINT `Akun_ibfk_1` FOREIGN KEY (`NIP`) REFERENCES `Dosen` (`NIP`) ON UPDATE CASCADE;

--
-- Constraints for table `RealisasiPendidikan`
--
ALTER TABLE `RealisasiPendidikan`
  ADD CONSTRAINT `RealisasiPendidikan_ibfk_1` FOREIGN KEY (`NIP`) REFERENCES `Dosen` (`NIP`) ON UPDATE CASCADE;

--
-- Constraints for table `RealisasiPenelitian`
--
ALTER TABLE `RealisasiPenelitian`
  ADD CONSTRAINT `RealisasiPenelitian_ibfk_1` FOREIGN KEY (`NIP`) REFERENCES `Dosen` (`NIP`) ON UPDATE CASCADE;

--
-- Constraints for table `RealisasiPengabdian`
--
ALTER TABLE `RealisasiPengabdian`
  ADD CONSTRAINT `RealisasiPengabdian_ibfk_1` FOREIGN KEY (`NIP`) REFERENCES `Dosen` (`NIP`) ON UPDATE CASCADE;

--
-- Constraints for table `RealisasiPenunjang`
--
ALTER TABLE `RealisasiPenunjang`
  ADD CONSTRAINT `RealisasiPenunjang_ibfk_1` FOREIGN KEY (`NIP`) REFERENCES `Dosen` (`NIP`) ON UPDATE CASCADE;

--
-- Constraints for table `RencanaPendidikan`
--
ALTER TABLE `RencanaPendidikan`
  ADD CONSTRAINT `RencanaPendidikan_ibfk_1` FOREIGN KEY (`NIP`) REFERENCES `Dosen` (`NIP`) ON UPDATE CASCADE;

--
-- Constraints for table `RencanaPenelitian`
--
ALTER TABLE `RencanaPenelitian`
  ADD CONSTRAINT `RencanaPenelitian_ibfk_1` FOREIGN KEY (`NIP`) REFERENCES `Dosen` (`NIP`) ON UPDATE CASCADE;

--
-- Constraints for table `RencanaPengabdian`
--
ALTER TABLE `RencanaPengabdian`
  ADD CONSTRAINT `RencanaPengabdian_ibfk_1` FOREIGN KEY (`NIP`) REFERENCES `Dosen` (`NIP`) ON UPDATE CASCADE;

--
-- Constraints for table `RencanaPenunjang`
--
ALTER TABLE `RencanaPenunjang`
  ADD CONSTRAINT `RencanaPenunjang_ibfk_1` FOREIGN KEY (`NIP`) REFERENCES `Dosen` (`NIP`) ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
