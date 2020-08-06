-- phpMyAdmin SQL Dump
-- version 4.9.0.1
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: Aug 06, 2020 at 06:23 PM
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
('197508092008121003', '$2y$10$GTZ35nuRTRuoPZTD8zI8Kubrmv02xWvWia4h8s9iJ8TkhL24oSnem', '');

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
  `Kredit` varchar(4) DEFAULT NULL,
  `Foto` varchar(15) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `Dosen`
--

INSERT INTO `Dosen` (`NIP`, `NIDN`, `Nama`, `Jabatan`, `Pangkat`, `Golongan`, `Kredit`, `Foto`) VALUES
('197508092008121003', '1234554321', 'Dr. Sutikno, SE., ME.', 'Lektor', 'Penata', 'IIIc', '180', '20200725NE3.png');

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
  `Kegiatan` text DEFAULT NULL,
  `TanggalKegiatan` varchar(70) DEFAULT NULL,
  `Satuan` varchar(50) DEFAULT NULL,
  `Volume` varchar(5) DEFAULT NULL,
  `Kredit` varchar(50) DEFAULT NULL,
  `JumlahKredit` varchar(7) DEFAULT NULL,
  `Bukti` varchar(150) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `RealisasiPendidikan`
--

INSERT INTO `RealisasiPendidikan` (`No`, `NIP`, `Jabatan`, `Jenjang`, `Semester`, `Tahun`, `IdKegiatan`, `Kode`, `Kegiatan`, `TanggalKegiatan`, `Satuan`, `Volume`, `Kredit`, `JumlahKredit`, `Bukti`) VALUES
(8, '197508092008121003', 'Lektor', 'S1', 'Ganjil', '2012', 'PND3', '0', 'Berdasarkan Surat Tugas Mengajar Dekan FE Nomor 669/UN46.1.12/DT/2012 ; Membina/mengajar mata kuliah: Ekonomi Sumber Daya Alam dan Lingkungan (6 sks), Seminar Perencanaan Pembangunan (3 sks), Kebijakan Fiskal dan Moneter (3 sks).', 'Semester Gasal 2012 / 2013', '10 sks Pertama & 2 sks Berikutnya', '12', '1 & 0.5', '11', '20200720Cl.pdf'),
(12, '197508092008121003', 'Lektor', 'S1', 'Genap', '2013', 'PND6', '1/3', 'Berdasarkan Surat Tugas Dekan FE Nomor 289/UN46.1.12/DT/2014, sebagai Pembimbing I Skripsi a.n. (1) Kisrowiyah, (2) Rizky Anugrah Setiawan, (3) Wendhy Deo Prayoga, (4) Ferdita Ismibahari, (5) Moh. Syarif, (6) Suyitno, (7) Rusfandi.', 'Semester Genap 2013 / 2014', '8 lulusan / semester', '7', '1', '0.875', NULL),
(16, '197508092008121003', 'Lektor', 'S1', 'Ganjil', '2020', 'PND1', '0', 'S3', '2020', '', '1', 'S1', '200', NULL),
(17, '197508092008121003', 'Lektor', 'S1', 'Ganjil', '2020', 'PND2', '0', 'Diklat', '2020', '', '1', '3', '3', NULL),
(18, '197508092008121003', 'Lektor', 'S1', 'Ganjil', '2020', 'PND4', '0', 'Seminar', '2020', '', '1', '1', '1', NULL),
(19, '197508092008121003', 'Lektor', 'S1', 'Ganjil', '2020', 'PND5', '0', 'KKN', '2020', '', '1', '1', '1', NULL),
(21, '197508092008121003', 'Lektor', 'S1', 'Ganjil', '2020', 'PND7', '1', 'Ketua Penguji', '2020', '4 lulusan / semester', '1', '1', '0.25', NULL),
(22, '197508092008121003', 'Lektor', 'S1', 'Ganjil', '2020', 'PND8', '0', 'Membina MHS', '2020', '2 kegiatan / semester', '1', '2', '1', NULL),
(23, '197508092008121003', 'Lektor', 'S1', 'Ganjil', '2020', 'PND9', '0', 'Mengembangkan', '2020', '1 mata kuliah / semester', '1', '2', '2', NULL),
(24, '197508092008121003', 'Lektor', 'S1', 'Ganjil', '2020', 'PND10', '1', 'Buku Ajar', '2020', '1 buku/tahun', '1', '20', '20', NULL),
(25, '197508092008121003', 'Lektor', 'S1', 'Ganjil', '2020', 'PND11', '0', 'Orasi', '2020', '2 orasi / semester', '1', '5', '2.5', NULL),
(26, '197508092008121003', 'Lektor', 'S1', 'Ganjil', '2020', 'PND12', '0', 'Ketua Jurusan', '2020', '1 jabatan / semester', '1', '4', '4', NULL),
(27, '197508092008121003', 'Lektor', 'S1', 'Ganjil', '2020', 'PND15', '6', 'Pelatihan', '2020', '', '1', '6', '6', NULL),
(28, '197508092008121003', 'Lektor', 'S1', 'Ganjil', '2020', 'PND6', '2/3', 'Berdasarkan Surat Tugas Dekan FE Nomor 1079/H46.1.12/DT/2011, sebagai Pembimbing II Skripsi a.n. (1) Hendra Dwi Prasetiyo, (2) Musleh, (3) Taufig Eka Putra.', 'Semester Gasal 2011 / 2012', '8 lulusan / semester', '3', '0.5', '0.1875', NULL),
(29, '197508092008121003', 'Lektor', 'S1', 'Ganjil', '2020', 'PND7', '2', 'Anggota Penguji', '2020', '8 lulusan / semester', '1', '0.5', '0.0625', NULL),
(30, '197508092008121003', 'Lektor', 'S1', 'Ganjil', '2020', 'PND7', '1', 'Ketua Penguji', '2020', '4 lulusan / semester', '1', '1', '0.25', NULL),
(31, '197508092008121003', 'Lektor', 'S1', 'Ganjil', '2020', 'PND6', '1/3', 'Bimbing Skripsi', '2020', '8 lulusan / semester', '1', '1', '0.125', NULL),
(32, '197508092008121003', 'Lektor', 'S1', 'Ganjil', '2020', 'PND6', '1/2', 'Bimbing Tesis', '2020', '6 lulusan / semester', '1', '3', '0.5', NULL),
(33, '197508092008121003', 'Lektor', 'S2', 'Genap', '2020', 'PND1', '0', 'S2', '2020', '', '1', '150', '150', NULL),
(34, '197508092008121003', 'Lektor', 'S1', 'Ganjil', '2020', 'PND3', '0', 'Berdasarkan Surat Tugas Mengajar Dekan FE Nomor 129/UN46.1.12/DT/2013 ; Membina/mengajar mata kuliah: Sejarah Pemikiran Ekonomi (9 sks), Perencanaan Strategis  (3 sks).', 'Semester Genap 2012 / 2013', '10 sks Pertama & 2 sks Berikutnya', '14', '1 & 0.5', '12', '20200725Kg.pdf'),
(35, '197508092008121003', 'Lektor', 'S1', 'Ganjil', '2020', 'PND3', '0', 'adfafafa', '2020', '10 sks Pertama & 2 sks Berikutnya', '16', '1 & 0.5', '13', NULL);

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
  `Kegiatan` text DEFAULT NULL,
  `TanggalKegiatan` varchar(70) DEFAULT NULL,
  `Satuan` varchar(50) DEFAULT NULL,
  `Volume` varchar(5) DEFAULT NULL,
  `Kredit` varchar(50) DEFAULT NULL,
  `JumlahKredit` varchar(7) DEFAULT NULL,
  `Bukti` varchar(150) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

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
  `Kegiatan` text DEFAULT NULL,
  `TanggalKegiatan` varchar(70) DEFAULT NULL,
  `Satuan` varchar(50) DEFAULT NULL,
  `Volume` varchar(5) DEFAULT NULL,
  `Kredit` varchar(50) DEFAULT NULL,
  `JumlahKredit` varchar(7) DEFAULT NULL,
  `Bukti` varchar(150) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `RealisasiPengabdian`
--

INSERT INTO `RealisasiPengabdian` (`No`, `NIP`, `Jabatan`, `Jenjang`, `Semester`, `Tahun`, `IdKegiatan`, `Kode`, `Kegiatan`, `TanggalKegiatan`, `Satuan`, `Volume`, `Kredit`, `JumlahKredit`, `Bukti`) VALUES
(1, '197508092008121003', 'Lektor', 'S1', 'Ganjil', '2019', 'PNB3', '3', 'Penanggung Jawab dalam Tim Penyusunan Jurnal Buletin Ekonomi Pembangunan (BEP) Jurnal Ilmu Ekonomi FEB Universitas Trunojoyo Madura sesuai dengan SK dekan FEB nomor: 143/UN46.1.12/2019', '2 Agustus 2019', NULL, '1', '2', '2', '20200806Fi.pdf');

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
  `Kegiatan` text DEFAULT NULL,
  `TanggalKegiatan` varchar(70) DEFAULT NULL,
  `Satuan` varchar(50) DEFAULT NULL,
  `Volume` varchar(5) DEFAULT NULL,
  `Kredit` varchar(50) DEFAULT NULL,
  `JumlahKredit` varchar(7) DEFAULT NULL,
  `Bukti` varchar(150) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

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
  `TotalKredit` varchar(7) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `RencanaPendidikan`
--

INSERT INTO `RencanaPendidikan` (`No`, `NIP`, `Jabatan`, `Jenjang`, `Semester`, `Tahun`, `KodeRencana`, `TotalKredit`) VALUES
(2, '197508092008121003', 'Lektor', 'S1', 'Ganjil', '2020', '0|1|12|1|1|1|1|4|1|9|4|4|4|1|1|1|1|1|0|0|0|0|0|0|0|0|0|1|0|0|1|1|1|1|1|1|1', '95'),
(5, '197508092008121003', 'Profesor', 'S2', 'Genap', '2020', '0|0|12|0|0|0|0|16|0|0|0|0|0|0|0|0|0|0|0|0|0|0|0|0|0|0|0|0|0|0|2|0|0|0|0|0|0', '43'),
(6, '197508092008121003', 'Lektor', 'S1', 'Genap', '2019', '0|0|14|0|0|0|0|4|0|0|8|0|0|0|0|1|0|1|0|0|0|0|0|0|0|0|0|0|0|0|2|0|3|0|0|0|0', '83.5');

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
  `TotalKredit` varchar(7) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `RencanaPenelitian`
--

INSERT INTO `RencanaPenelitian` (`No`, `NIP`, `Jabatan`, `Jenjang`, `Semester`, `Tahun`, `KodeRencana`, `TotalKredit`) VALUES
(4, '197508092008121003', 'Lektor', 'S1', 'Ganjil', '2020', '0|0|0|0|0|0|0|0|0|0|0|0|0|0|0|0|0|0|0|0|0|0|0|0|0|0|0|0|0|0|0|0|0|0|0|1|1', '35');

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
  `TotalKredit` varchar(7) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `RencanaPengabdian`
--

INSERT INTO `RencanaPengabdian` (`No`, `NIP`, `Jabatan`, `Jenjang`, `Semester`, `Tahun`, `KodeRencana`, `TotalKredit`) VALUES
(1, '197508092008121003', 'Lektor', 'S1', 'Ganjil', '2020', '1|0|1|0|1|0|1|0|1|1|0|1|0|1|0|1', '22');

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
  `TotalKredit` varchar(7) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `RencanaPenunjang`
--

INSERT INTO `RencanaPenunjang` (`No`, `NIP`, `Jabatan`, `Jenjang`, `Semester`, `Tahun`, `KodeRencana`, `TotalKredit`) VALUES
(1, '197508092008121003', 'Lektor', 'S1', 'Ganjil', '2020', '1|1|1|1|1|1|1|1|1|1|1|1|1|1|1|1|1|1|1|1|1|1|1|1|1|1|1|1|1|1|1|1', '73');

--
-- Indexes for dumped tables
--

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
-- AUTO_INCREMENT for table `RealisasiPendidikan`
--
ALTER TABLE `RealisasiPendidikan`
  MODIFY `No` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=36;

--
-- AUTO_INCREMENT for table `RealisasiPenelitian`
--
ALTER TABLE `RealisasiPenelitian`
  MODIFY `No` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `RealisasiPengabdian`
--
ALTER TABLE `RealisasiPengabdian`
  MODIFY `No` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `RealisasiPenunjang`
--
ALTER TABLE `RealisasiPenunjang`
  MODIFY `No` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `RencanaPendidikan`
--
ALTER TABLE `RencanaPendidikan`
  MODIFY `No` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `RencanaPenelitian`
--
ALTER TABLE `RencanaPenelitian`
  MODIFY `No` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `RencanaPengabdian`
--
ALTER TABLE `RencanaPengabdian`
  MODIFY `No` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `RencanaPenunjang`
--
ALTER TABLE `RencanaPenunjang`
  MODIFY `No` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

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
