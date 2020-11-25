-- phpMyAdmin SQL Dump
-- version 5.0.3
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Nov 25, 2020 at 11:34 AM
-- Server version: 10.4.14-MariaDB
-- PHP Version: 7.4.11

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
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
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `No` int(11) NOT NULL,
  `Username` char(15) NOT NULL,
  `Password` char(60) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`No`, `Username`, `Password`) VALUES
(1, 'admin', '$2y$10$kOiSPvXxelOMUO2OQDGB8O4HlR4AcWQ3oXRfzc2h4qiiecjrohrCi');

-- --------------------------------------------------------

--
-- Table structure for table `akun`
--

CREATE TABLE `akun` (
  `NIP` varchar(18) NOT NULL,
  `Password` varchar(60) NOT NULL,
  `JenisAkun` char(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `akun`
--

INSERT INTO `akun` (`NIP`, `Password`, `JenisAkun`) VALUES
('197508092008121003', '$2y$10$osq00nnilO4OIF9SyEaGS.nTWgqWYLVFFAZFTxyJWTZeEQ0N4jKXy', '2');

-- --------------------------------------------------------

--
-- Table structure for table `dosen`
--

CREATE TABLE `dosen` (
  `NIP` char(18) NOT NULL,
  `NIDN` char(10) NOT NULL,
  `Nama` char(100) NOT NULL,
  `Jabatan` char(25) NOT NULL,
  `Pangkat` char(25) NOT NULL,
  `Golongan` char(5) NOT NULL,
  `KreditLama` char(15) NOT NULL,
  `Tahun` char(4) NOT NULL,
  `Foto` char(15) DEFAULT NULL,
  `WA` char(15) NOT NULL,
  `S2` char(150) NOT NULL,
  `S3` char(150) NOT NULL,
  `BidangKeahlian` char(150) NOT NULL,
  `KesesuaianKompetensi` char(1) NOT NULL,
  `KesesuaianBidang` char(1) NOT NULL,
  `SertifikatPendidik` char(150) NOT NULL,
  `SertifikatKompetensi` char(150) NOT NULL,
  `MengajarPS` text NOT NULL,
  `MengajarPSLain` char(255) NOT NULL,
  `BuktiPendidik` char(150) NOT NULL,
  `BuktiKompetensi` char(150) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `dosen`
--

INSERT INTO `dosen` (`NIP`, `NIDN`, `Nama`, `Jabatan`, `Pangkat`, `Golongan`, `KreditLama`, `Tahun`, `Foto`, `WA`, `S2`, `S3`, `BidangKeahlian`, `KesesuaianKompetensi`, `KesesuaianBidang`, `SertifikatPendidik`, `SertifikatKompetensi`, `MengajarPS`, `MengajarPSLain`, `BuktiPendidik`, `BuktiKompetensi`) VALUES
('197508092008121003', '1234554321', 'Dr. Sutikno, SE., ME.', 'Lektor', 'Penata', 'IIIc', '150', '2014', '20200725NE3.png', '085230584573', 'UTM', 'UTM', 'Perencanaan Pembangunan', '1', '1', 'Sertifikat Pendidik', 'Sertifikat Kompetensi', 'Pendidikan Agama|Pengantar Akuntansi|Mentalitas & Kreatifitas|PTE Mikro|Bahasa Indonesia|Pengantar Bisnis & Manajemen|SPE|TE Mikro I|TE Makro II|Koperasi & Kewirausahaan|ESDA & Lingkungan|TE Mikro II|Masalah Kebijakan Pembangunan|Ekonomi Moneter|SDM & Ketenagakerjaan|Perekonomian Indonesia|Bank Lembaga Keuangan|Metodologi Penelitian|Ekonomi Regional|Keuangan Daerah|Ekonomi Perkotaan & Transportasi|Ekonometrika|Ekonomi Perbankan|Manajemen Keuangan Daerah|Penganggaran Sektor Publik|Seminar Ekonomi Moneter & Perbankan|Ekonomi Moneter Internasional|Islam & Ekonomi', 'Ekonomi Syariah', 'Sertifikat Pendidik Dr. Sutikno, SE., ME..pdf', 'Sertifikat Kompetensi Dr. Sutikno, SE., ME..pdf');

-- --------------------------------------------------------

--
-- Table structure for table `dosenkontrak`
--

CREATE TABLE `dosenkontrak` (
  `Homebase` char(2) NOT NULL,
  `NIDN` char(10) NOT NULL,
  `Nama` char(255) NOT NULL,
  `S2` text NOT NULL,
  `BidangKeahlian` varchar(535) NOT NULL,
  `JabatanAkademik` char(255) NOT NULL,
  `SertifikatPendidik` varchar(535) NOT NULL,
  `SertifikatKompetensi` varchar(535) NOT NULL,
  `MengajarPS` text NOT NULL,
  `KesesuaianBidang` char(15) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `dosenkontrak`
--

INSERT INTO `dosenkontrak` (`Homebase`, `NIDN`, `Nama`, `S2`, `BidangKeahlian`, `JabatanAkademik`, `SertifikatPendidik`, `SertifikatKompetensi`, `MengajarPS`, `KesesuaianBidang`) VALUES
('S1', '1507199615', 'Faisol', 'UTM', 'Web', 'Dosen', '15', '96', 'Pendidikan Agama|BLK Syariah', 'Tidak Sesuai'),
('S2', '1507199696', 'Econk', 'UTM', 'Android', 'Dosen', '96', '15', 'Bahasa Inggris|Bahasa Indonesia', 'Tidak Sesuai');

-- --------------------------------------------------------

--
-- Table structure for table `ipklulusan`
--

CREATE TABLE `ipklulusan` (
  `Homebase` char(2) NOT NULL,
  `Tahun` char(4) NOT NULL,
  `JumlahLulusan` char(4) NOT NULL,
  `Min` char(7) NOT NULL,
  `Average` char(7) NOT NULL,
  `Max` char(7) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `ipklulusan`
--

INSERT INTO `ipklulusan` (`Homebase`, `Tahun`, `JumlahLulusan`, `Min`, `Average`, `Max`) VALUES
('S1', '2015', '150', '2.75', '3.5', '3.9'),
('S2', '2015', '96', '3.25', '3.75', '3.95');

-- --------------------------------------------------------

--
-- Table structure for table `kepuasanmahasiswa`
--

CREATE TABLE `kepuasanmahasiswa` (
  `NIM` char(12) NOT NULL,
  `Poin` char(9) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `kepuasanmahasiswa`
--

INSERT INTO `kepuasanmahasiswa` (`NIM`, `Poin`) VALUES
('150411100041', '1|2|3|4|3');

-- --------------------------------------------------------

--
-- Table structure for table `kerjasama`
--

CREATE TABLE `kerjasama` (
  `Id` int(11) NOT NULL,
  `Mitra` char(255) NOT NULL,
  `Tingkat` char(15) NOT NULL,
  `Judul` varchar(500) NOT NULL,
  `Manfaat` varchar(500) NOT NULL,
  `Waktu` char(70) NOT NULL,
  `KerjaSama` varchar(500) NOT NULL,
  `Bukti` char(20) NOT NULL,
  `Tahun` char(4) NOT NULL,
  `Bidang` char(15) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `kerjasama`
--

INSERT INTO `kerjasama` (`Id`, `Mitra`, `Tingkat`, `Judul`, `Manfaat`, `Waktu`, `KerjaSama`, `Bukti`, `Tahun`, `Bidang`) VALUES
(3, 'UTM', 'Internasional', 'Studi Banding', 'Memperluas Wawasan', '5 Tahun', 'SPK No 15', '20200922yPFhTYb.pdf', '2015', 'Pendidikan'),
(4, 'ITS', 'Nasional', 'Studi Banding', 'Memperluas Wawasan', '5 Tahun', 'SPK No 15', '202009225uQoAl9.pdf', '2016', 'Penelitian'),
(5, 'ITB', 'Lokal', 'Studi Banding', 'Memperluas Wawasan', '5 Tahun', 'SPK No 15', '20200922NLhCLHV.pdf', '2017', 'Pengabdian');

-- --------------------------------------------------------

--
-- Table structure for table `mahasiswaasing`
--

CREATE TABLE `mahasiswaasing` (
  `Homebase` char(70) NOT NULL,
  `Tahun` char(4) NOT NULL,
  `MhsAktif` char(7) NOT NULL,
  `MhsFull` char(7) NOT NULL,
  `MhsPart` char(7) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `mahasiswaasing`
--

INSERT INTO `mahasiswaasing` (`Homebase`, `Tahun`, `MhsAktif`, `MhsFull`, `MhsPart`) VALUES
('S1 Ekonomi Pembangunan', '2015', '15', '15', '15'),
('S2 Ilmu Ekonomi', '2015', '7', '7', '7');

-- --------------------------------------------------------

--
-- Table structure for table `mahasiswabaru`
--

CREATE TABLE `mahasiswabaru` (
  `Homebase` char(2) NOT NULL,
  `Tahun` char(4) NOT NULL,
  `DayaTampung` char(7) NOT NULL,
  `MhsPendaftar` char(7) NOT NULL,
  `MhsLulus` char(7) NOT NULL,
  `MhsBaruReguler` char(7) NOT NULL,
  `MhsBaruTransfer` char(7) NOT NULL,
  `MhsAktifReguler` char(7) NOT NULL,
  `MhsAktifTransfer` char(7) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `mahasiswabaru`
--

INSERT INTO `mahasiswabaru` (`Homebase`, `Tahun`, `DayaTampung`, `MhsPendaftar`, `MhsLulus`, `MhsBaruReguler`, `MhsBaruTransfer`, `MhsAktifReguler`, `MhsAktifTransfer`) VALUES
('S1', '2015', '15', '4', '4', '4', '4', '4', '4'),
('S1', '2016', '15', '7', '7', '7', '7', '7', '7'),
('S1', '2017', '15', '15', '15', '15', '15', '15', '15'),
('S2', '2015', '15', '7', '7', '7', '7', '7', '9');

-- --------------------------------------------------------

--
-- Table structure for table `penggunaandana`
--

CREATE TABLE `penggunaandana` (
  `Homebase` char(2) NOT NULL,
  `Tahun` char(4) NOT NULL,
  `Dosen` char(15) NOT NULL,
  `TenagaKependidikan` char(15) NOT NULL,
  `OperasionalPembelajaran` char(15) NOT NULL,
  `OperasionalTidakLangsung` char(15) NOT NULL,
  `OperasionalKemahasiswaan` char(15) NOT NULL,
  `Penelitian` char(15) NOT NULL,
  `PkM` char(15) NOT NULL,
  `SDM` char(15) NOT NULL,
  `Sarana` char(15) NOT NULL,
  `Prasarana` char(15) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `penggunaandana`
--

INSERT INTO `penggunaandana` (`Homebase`, `Tahun`, `Dosen`, `TenagaKependidikan`, `OperasionalPembelajaran`, `OperasionalTidakLangsung`, `OperasionalKemahasiswaan`, `Penelitian`, `PkM`, `SDM`, `Sarana`, `Prasarana`) VALUES
('S1', '2015', '7', '7', '7', '7', '7', '7', '7', '7', '7', '7'),
('S2', '2015', '9', '9', '9', '9', '9', '9', '9', '9', '9', '9');

-- --------------------------------------------------------

--
-- Table structure for table `prestasimahasiswa`
--

CREATE TABLE `prestasimahasiswa` (
  `NIM` char(12) NOT NULL,
  `JenisPrestasi` char(1) NOT NULL,
  `NamaPrestasi` text NOT NULL,
  `TingkatPrestasi` char(1) NOT NULL,
  `CapaianPrestasi` text NOT NULL,
  `TahunPrestasi` char(4) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `prestasimahasiswa`
--

INSERT INTO `prestasimahasiswa` (`NIM`, `JenisPrestasi`, `NamaPrestasi`, `TingkatPrestasi`, `CapaianPrestasi`, `TahunPrestasi`) VALUES
('150411100041', '1', 'Lomba', '3', 'Juara', '2015');

-- --------------------------------------------------------

--
-- Table structure for table `realisasipendidikan`
--

CREATE TABLE `realisasipendidikan` (
  `No` int(11) NOT NULL,
  `NIP` varchar(18) NOT NULL,
  `Jabatan` varchar(15) NOT NULL,
  `Jenjang` varchar(2) DEFAULT NULL,
  `Semester` varchar(7) DEFAULT NULL,
  `Tahun` varchar(4) DEFAULT NULL,
  `IdKegiatan` varchar(5) NOT NULL,
  `Kode` varchar(5) NOT NULL,
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
-- Dumping data for table `realisasipendidikan`
--

INSERT INTO `realisasipendidikan` (`No`, `NIP`, `Jabatan`, `Jenjang`, `Semester`, `Tahun`, `IdKegiatan`, `Kode`, `SK`, `Kegiatan`, `TanggalKegiatan`, `Satuan`, `Volume`, `Kredit`, `KreditBkd`, `JumlahKredit`, `Bukti`) VALUES
(72, '197508092008121003', 'Lektor', 'S1', 'Ganjil', '2015', 'PND2', '0', 'SK', 'Diklat', '2015', '', '1', '3', '', '3', '20200821zq6NfFF.pdf'),
(76, '197508092008121003', 'Lektor', 'S1', 'Ganjil', '2015', 'PND1', '1', 'SK 1', 'S2', '2015', '1/periode penilaian', '1', '150', '', '150', '20200821u4rGdPb.pdf'),
(77, '197508092008121003', 'Lektor', 'S1', 'Ganjil', '2015', 'PND3', '0', 'Surat Tugas Nomor 3640/UN.1.12/DK/2015', 'Mengajar Matakuliah Ekonomi Regional S1 Sebanyak 3 Kelas 2 Dosen', '2015', '10 sks Pertama', '4.5', '1', '2.25', '4.5', '20200821EFFL3UU.pdf'),
(79, '197508092008121003', 'Lektor', 'S1', 'Ganjil', '2015', 'PND4', '0', 'SK ', 'keg', '2015', '', '1', '1', '1', '1', '20200821O1et5mk.pdf'),
(82, '197508092008121003', 'Lektor', 'S1', 'Ganjil', '2015', 'PND5', '0', 'SK KKN 1', 'KKN 1', '2015', '', '1', '1', '0.75', '1', '20200824j2yJwGF.pdf'),
(83, '197508092008121003', 'Lektor', 'S1', 'Ganjil', '2015', 'PND6', '1/2/2', 'SK Tesis 1', 'Tesis 1', '2015', '6 lulusan / semester', '6', '3', '2', '3', '20200824lcVUMRr.pdf'),
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
(96, '197508092008121003', 'Lektor', 'S1', 'Genap', '2015', 'PND3', '0', 'Surat Tugas Nomor 3640/UN.1.12/DK/2015', 'Mengajar Matakuliah Ekonomi Regional S1 Sebanyak 3 Kelas 2 Dosen', '2015', '10 sks Pertama', '7.5', '1', '3.75', '7.5', '20200824mRL7LR9.pdf'),
(97, '197508092008121003', 'Lektor', 'S1', 'Ganjil', '2015', 'PND17', '0', 'SK Koordinator', 'Akademik', '2015', '', '1', '', '0.5', '', '20200901JIuDqIh.pdf'),
(98, '197508092008121003', 'Lektor', 'S1', 'Ganjil', '2015', 'PND19', '0', 'SK Menilai', 'Portofolio', '2015', '', '2', '', '0.4', '', '20200901SV3uQNM.pdf'),
(99, '197508092008121003', 'Lektor', 'S1', 'Ganjil', '2015', 'PND18', '0', 'SK Bimbingan', 'Penulisan', '2015', '', '3', '', '0.6', '', '20200901Ha5Iaqm.pdf'),
(101, '197508092008121003', 'Lektor', 'S1', 'Ganjil', '2015', 'PND6', '1/3/1', 'SK', 'Pembimbing Utama', '2015', '8 lulusan / semester', '1', '1', '0.17', '0.125', '202009164ip8XE8.pdf');

-- --------------------------------------------------------

--
-- Table structure for table `realisasipenelitian`
--

CREATE TABLE `realisasipenelitian` (
  `No` int(11) NOT NULL,
  `NIP` varchar(18) NOT NULL,
  `Jabatan` varchar(15) NOT NULL,
  `Jenjang` varchar(2) DEFAULT NULL,
  `Semester` varchar(7) DEFAULT NULL,
  `Tahun` varchar(4) DEFAULT NULL,
  `IdKegiatan` varchar(5) NOT NULL,
  `Kode` varchar(4) NOT NULL,
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
-- Dumping data for table `realisasipenelitian`
--

INSERT INTO `realisasipenelitian` (`No`, `NIP`, `Jabatan`, `Jenjang`, `Semester`, `Tahun`, `IdKegiatan`, `Kode`, `SK`, `Kegiatan`, `TanggalKegiatan`, `Satuan`, `Volume`, `Kredit`, `KreditBkd`, `JumlahKredit`, `Bukti`) VALUES
(22, '197508092008121003', 'Lektor', 'S1', 'Ganjil', '2015', 'PNL1', '2/3', 'SK', 'Monograf', '2015', NULL, '1', '20', '', '20', '20200917FUSv7q9.pdf'),
(23, '197508092008121003', 'Lektor', 'S1', 'Ganjil', '2015', 'PNL2', '8/2', 'SK', 'Desiminasi', '2015', NULL, '1', '3', '', '3', '20200917TRgIaER.pdf'),
(24, '197508092008121003', 'Lektor', 'S1', 'Ganjil', '2015', 'PNL3', '0/1', 'SK', 'Kerjasama Industri', '2015', NULL, '1', '2', '', '2', '20200917qIIETKW.pdf'),
(25, '197508092008121003', 'Lektor', 'S1', 'Ganjil', '2015', 'PNL4', '0/0', 'SK', 'Menerjemahkan Buku', '2015', NULL, '1', '15', '2', '15', '20200917QR2Kr1E.pdf'),
(26, '197508092008121003', 'Lektor', 'S1', 'Ganjil', '2015', 'PNL5', '0/0', 'SK', 'Menyunting karya Ilmiah', '2015', NULL, '1', '10', '2', '10', '20200917A898zOb.pdf'),
(27, '197508092008121003', 'Lektor', 'S1', 'Ganjil', '2015', 'PNL6', '4/2', 'SK', 'Karya Teknologi', '2015', NULL, '1', '30', '', '30', '20200917Upy9fgR.pdf'),
(28, '197508092008121003', 'Lektor', 'S1', 'Ganjil', '2015', 'PNL7', '2/3', 'SK', 'Rancangan Teknologi', '2015', NULL, '1', '15', '', '15', '20200917WkfTynw.pdf'),
(30, '197508092008121003', 'Lektor', 'S1', 'Ganjil', '2015', 'PNL8', '15/1', 'SK', 'Cerpen', '2015', NULL, '1', '10', '', '10', '20200917nvVhzWI.pdf'),
(31, '197508092008121003', 'Lektor', 'S1', 'Ganjil', '2015', 'PNL9', '0/3', 'SK', 'Keterlibatan Penelitian', '2015', NULL, '1', '', '2', '', '20200917JqFtD9W.pdf'),
(32, '197508092008121003', 'Lektor', 'S1', 'Ganjil', '2015', 'PNL10', '0/1', 'SK', 'Ketua Pelaksana', '2015', NULL, '1', '', '0.8', '', '20200917ZHcR8gw.pdf'),
(33, '197508092008121003', 'Lektor', 'S1', 'Ganjil', '2015', 'PNL11', '0/3', 'SK', 'Menulis Buku', '2015', NULL, '1', '', '1.53', '', '20200917lBTGCGv.pdf'),
(34, '197508092008121003', 'Lektor', 'S1', 'Ganjil', '2015', 'PNL12', '0/1', '2015', 'Menulis Buku', '2015', NULL, '1', '', '1.2', '', '20200917frR51gC.pdf'),
(35, '197508092008121003', 'Lektor', 'S1', 'Ganjil', '2015', 'PNL13', '0/0', 'SK', 'Asesor bkd', '2015', NULL, '1', '', '1', '', '20200917DSztyHC.pdf'),
(37, '197508092008121003', 'Lektor', 'S1', 'Ganjil', '2015', 'PNL15', '0/1', 'SK', 'Artikel Ilmiah', '2015', NULL, '1', '', '1', '', '20200917XIiEtQT.pdf'),
(38, '197508092008121003', 'Lektor', 'S1', 'Ganjil', '2015', 'PNL16', '0/1', 'SK', 'Naskah Monografi', '2015', NULL, '1', '', '1.5', '', '20200917PCkYAuF.pdf'),
(39, '197508092008121003', 'Lektor', 'S1', 'Ganjil', '2015', 'PNL17', '0/2', 'SK', 'Hak Paten', '2015', NULL, '1', '', '1.2', '', '20200917KxDEhTf.pdf'),
(40, '197508092008121003', 'Lektor', 'S1', 'Ganjil', '2015', 'PNL18', '0/0', 'SK', 'Tugas Belajar', '2015', NULL, '1', '', '6', '', '20200917vJH8xKw.pdf'),
(41, '197508092008121003', 'Lektor', 'S1', 'Ganjil', '2015', 'PNL19', '0/0', 'SK', 'Pekerti Tatap Muka', '2015', NULL, '1', '', '4', '', '20200917kFUAKlG.pdf'),
(42, '197508092008121003', 'Lektor', 'S1', 'Ganjil', '2015', 'PNL20', '0/0', 'SK', 'Magang Dosen Muda', '2015', NULL, '1', '', '3', '', '20200917tXw9toY.pdf'),
(43, '197508092008121003', 'Lektor', 'S1', 'Ganjil', '2015', 'PNL21', '0/0', 'SK', 'AA Tatap Muka', '2015', NULL, '1', '', '5', '', '202009176v3wbeJ.pdf'),
(44, '197508092008121003', 'Lektor', 'S1', 'Ganjil', '2015', 'PNL22', '0/0', 'SK', 'Karya Teknologi', '2015', NULL, '1', '', '3', '', '20200924n1I5LXg.pdf'),
(47, '197508092008121003', 'Lektor', 'S1', 'Ganjil', '2015', 'PNL14', '5/2', 'SK', 'Menulis Jurnal Ilmiah', '2015', NULL, '1', '', '4.5', '', '20201001RxOwPAi.pdf'),
(48, '197508092008121003', 'Lektor', 'S1', 'Ganjil', '2015', 'PNL14', '8/3', 'SK', 'Jurnal Ilmiah Internasional', '2015', NULL, '1', '', '3.2', '', '202010012CsHxZn.pdf'),
(49, '197508092008121003', 'Lektor', 'S1', 'Ganjil', '2015', 'PNL14', '3/2', 'SK', 'Menulis Proseding', '2015', NULL, '1', '', '3', '', '202010019DNudyk.pdf'),
(50, '197508092008121003', 'Lektor', 'S1', 'Ganjil', '2015', 'PNL1', '5/2', 'SK', 'Jurnal Internasional Bereputasi', '2015', NULL, '1', '40', '', '40', '20201001oF6MVoE.pdf'),
(51, '197508092008121003', 'Lektor', 'S1', 'Ganjil', '2016', 'PNL1', '6/3', 'SK', 'Jurnal Internasional Terindeks Bereputasi', '2016', NULL, '1', '30', '', '30', '202010015YDfWjF.pdf'),
(52, '197508092008121003', 'Lektor', 'S1', 'Ganjil', '2016', 'PNL15', '1/2', 'SK', 'Seminar Lokal', '2016', NULL, '1', '', '2', '', '20201001xFrqFAE.pdf'),
(53, '197508092008121003', 'Lektor', 'S1', 'Ganjil', '2015', 'PNL15', '2/3', 'SK', 'Seminar Nasional', '2015', NULL, '1', '', '3', '', '202010013EiAWFF.pdf'),
(54, '197508092008121003', 'Lektor', 'S1', 'Ganjil', '2017', 'PNL15', '3/3', 'SK', 'Seminar Internasional', '2017', NULL, '1', '', '6', '', '20201001SsHGjqJ.pdf'),
(58, '197508092008121003', 'Lektor', 'S1', 'Ganjil', '2016', 'PNL2', '11/1', 'SK', 'Publikasi Media Massa Wilayah', '2016', NULL, '1', '1', '', '1', '20201002uiFIEFJ.pdf'),
(60, '197508092008121003', 'Lektor', 'S1', 'Ganjil', '2015', 'PNL2', '12/2', 'SK', 'Publikasi Media Massa Nasional', '2015', NULL, '1', '1', '', '1', '202010023IgLLRw.pdf'),
(61, '197508092008121003', 'Lektor', 'S1', 'Ganjil', '2017', 'PNL2', '13/3', 'SK', 'Publikasi Media Massa Internasional', '2017', NULL, '1', '1', '', '1', '20201002v8UcL5c.pdf'),
(62, '197508092008121003', 'Lektor', 'S1', 'Ganjil', '2016', 'PNL1', '8/2', 'SK', 'Publikasi Jurnal Nasional', '2016', NULL, '1', '25', '', '25', '20201005qHFxwLY.pdf');

-- --------------------------------------------------------

--
-- Table structure for table `realisasipengabdian`
--

CREATE TABLE `realisasipengabdian` (
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
-- Dumping data for table `realisasipengabdian`
--

INSERT INTO `realisasipengabdian` (`No`, `NIP`, `Jabatan`, `Jenjang`, `Semester`, `Tahun`, `IdKegiatan`, `Kode`, `SK`, `Kegiatan`, `TanggalKegiatan`, `Satuan`, `Volume`, `Kredit`, `KreditBkd`, `JumlahKredit`, `Bukti`) VALUES
(15, '197508092008121003', 'Lektor', 'S1', 'Ganjil', '2015', 'PNB1', '0/0', 'SK', 'Menduduki Jabatan', '2015', NULL, '1', '5.5', '', '5.5', '20200923XzycPoj.pdf'),
(16, '197508092008121003', 'Lektor', 'S1', 'Ganjil', '2015', 'PNB2', '0/2', 'SK', 'Melaksanakan Pengembangan', '2015', NULL, '1', '3', '', '3', '20200923YTBnEyM.pdf'),
(17, '197508092008121003', 'Lektor', 'S1', 'Ganjil', '2015', 'PNB3', '3/3', 'SK', 'Memberi Penyuluhan', '2015', NULL, '1', '2', '0.2', '2', '20200923RGBFFFs.pdf'),
(18, '197508092008121003', 'Lektor', 'S1', 'Ganjil', '2015', 'PNB4', '3/1', 'SK', 'Memberi Pelayanan', '2015', NULL, '1', '0.5', '0.2', '0.5', '202009234qjYL2t.pdf'),
(19, '197508092008121003', 'Lektor', 'S1', 'Ganjil', '2015', 'PNB5', '0/2', 'SK', 'Menulis Karya', '2015', NULL, '1', '3', '3', '3', '202009233jN0ERF.pdf'),
(20, '197508092008121003', 'Lektor', 'S1', 'Ganjil', '2015', 'PNB6', '0/3', 'SK', 'Publikasi Jurnal', '2015', NULL, '1', '5', '', '5', '20200923PK8877N.pdf'),
(21, '197508092008121003', 'Lektor', 'S1', 'Ganjil', '2015', 'PNB7', '2/1', 'SK', 'Pengelolaan Jurnal', '2015', NULL, '1', '0.5', '', '0.5', '20200923FfW0yKw.pdf'),
(22, '197508092008121003', 'Lektor', 'S1', 'Ganjil', '2015', 'PNB8', '0/2', 'SK', 'Kegiatan Setara 50 Jam', '2015', NULL, '1', '', '0.7', '', '20200923T7zhxuH.pdf'),
(23, '197508092008121003', 'Lektor', 'S1', 'Ganjil', '2015', 'PNB9', '0/2', 'SK', 'Reviwer Residental', '2015', NULL, '1', '', '0.2', '', '202009233CWuL7z.pdf'),
(24, '197508092008121003', 'Lektor', 'S1', 'Ganjil', '2015', 'PNB10', '0/3', 'SK', 'Reviewer Terstruktur', '2015', NULL, '1', '', '1', '', '20200923o8yJ259.pdf');

-- --------------------------------------------------------

--
-- Table structure for table `realisasipenunjang`
--

CREATE TABLE `realisasipenunjang` (
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
-- Dumping data for table `realisasipenunjang`
--

INSERT INTO `realisasipenunjang` (`No`, `NIP`, `Jabatan`, `Jenjang`, `Semester`, `Tahun`, `IdKegiatan`, `Kode`, `SK`, `Kegiatan`, `TanggalKegiatan`, `Satuan`, `Volume`, `Kredit`, `KreditBkd`, `JumlahKredit`, `Bukti`) VALUES
(1, '197508092008121003', 'Lektor', 'S1', 'Ganjil', '2015', 'PNJ1', '2', 'SK Anggota', 'Panitia', '2015', NULL, '1', '2', '', '2', '20200825qtB4aZz.pdf'),
(2, '197508092008121003', 'Lektor', 'S1', 'Ganjil', '2015', 'PNJ2', '3', 'SK Panitia', 'Lembaga', '2015', NULL, '1', '2', '', '2', '20200825sTaQ7FT.pdf'),
(3, '197508092008121003', 'Lektor', 'S1', 'Ganjil', '2015', 'PNJ3', '4', 'SK Anggota', 'Profesi', '2015', NULL, '1', '1.5', '', '1.5', '20200825pal8CZw.pdf'),
(4, '197508092008121003', 'Lektor', 'S1', 'Ganjil', '2015', 'PNJ4', '0', 'SK Mewakili', 'Universitas', '2015', NULL, '1', '1', '', '1', '202008255FF5Gb3.pdf'),
(5, '197508092008121003', 'Lektor', 'S1', 'Ganjil', '2015', 'PNJ5', '2', 'SK Anggota', 'Delegasi', '2015', NULL, '1', '2', '', '2', '20200825icdSzGA.pdf'),
(7, '197508092008121003', 'Lektor', 'S1', 'Ganjil', '2015', 'PNJ7', '6', 'SK Mendapat', 'Penghargaan', '2015', NULL, '1', '1', '', '1', '20200825hRfGOvQ.pdf'),
(8, '197508092008121003', 'Lektor', 'S1', 'Ganjil', '2015', 'PNJ8', '3', 'SK Menulis', 'Buku', '2015', NULL, '1', '5', '', '5', '20200825DCTIbv7.pdf'),
(9, '197508092008121003', 'Lektor', 'S1', 'Ganjil', '2015', 'PNJ9', '3', 'SK Prestasi', 'Olahraga', '2015', NULL, '1', '1', '', '1', '20200825EQCfuDw.pdf'),
(10, '197508092008121003', 'Lektor', 'S1', 'Ganjil', '2015', 'PNJ10', '0', 'SK Tim', 'Penilai', '2015', NULL, '1', '0.5', '', '0.5', '20200825jFw9S7n.pdf'),
(11, '197508092008121003', 'Lektor', 'S1', 'Ganjil', '2015', 'PNJ11', '0', 'SK Bimbingan', 'Perwalian', '2015', NULL, '87', '', '7.25', '', '20200825kwQS4Qf.pdf'),
(12, '197508092008121003', 'Lektor', 'S1', 'Ganjil', '2015', 'PNJ12', '0', 'SK Ketua Program', 'Studi Ekonomi', '2015', NULL, '1', '', '4', '', '20200825fpIFexo.pdf'),
(13, '197508092008121003', 'Lektor', 'S1', 'Ganjil', '2015', 'PNJ6', '4', 'SK ', 'Pertemuan Ilmiah', '2015', NULL, '1', '2', '', '2', '20200930nPT9QCt.pdf'),
(14, '197508092008121003', 'Lektor', 'S1', 'Ganjil', '2015', 'PNJ6', '2', 'SK', 'Pertemuan Ilmiah', '2015', NULL, '1', '3', '', '3', '20200930E6yMhdf.pdf');

-- --------------------------------------------------------

--
-- Table structure for table `rencanapendidikan`
--

CREATE TABLE `rencanapendidikan` (
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
-- Dumping data for table `rencanapendidikan`
--

INSERT INTO `rencanapendidikan` (`No`, `NIP`, `Jabatan`, `Jenjang`, `Semester`, `Tahun`, `KodeRencana`, `TotalKredit`, `TargetKajur`) VALUES
(9, '197508092008121003', 'Lektor', 'S1', 'Ganjil', '2015', '2|1|0|0|0|0|0|0|0|0|0|0|0|0|0|0|0|0|0|0|0|0|0|1|0|0|0|0|0|0|0|0|0|0|0|0|0', '158', '150');

-- --------------------------------------------------------

--
-- Table structure for table `rencanapenelitian`
--

CREATE TABLE `rencanapenelitian` (
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
-- Dumping data for table `rencanapenelitian`
--

INSERT INTO `rencanapenelitian` (`No`, `NIP`, `Jabatan`, `Jenjang`, `Semester`, `Tahun`, `KodeRencana`, `TotalKredit`, `TargetKajur`) VALUES
(5, '197508092008121003', 'Lektor', 'S1', 'Ganjil', '2015', '0|0|0|0|0|0|0|0|0|0|0|0|0|0|0|0|0|0|0|0|0|0|0|0|0|0|0|0|0|0|0|0|0|0|0|0|0', '0', '70');

-- --------------------------------------------------------

--
-- Table structure for table `rencanapengabdian`
--

CREATE TABLE `rencanapengabdian` (
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
-- Dumping data for table `rencanapengabdian`
--

INSERT INTO `rencanapengabdian` (`No`, `NIP`, `Jabatan`, `Jenjang`, `Semester`, `Tahun`, `KodeRencana`, `TotalKredit`, `TargetKajur`) VALUES
(4, '197508092008121003', 'Lektor', 'S1', 'Ganjil', '2015', '0|0|0|0|0|0|0|0|0|0|0|0|0|0|0|0', '0', '95');

-- --------------------------------------------------------

--
-- Table structure for table `rencanapenunjang`
--

CREATE TABLE `rencanapenunjang` (
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
-- Dumping data for table `rencanapenunjang`
--

INSERT INTO `rencanapenunjang` (`No`, `NIP`, `Jabatan`, `Jenjang`, `Semester`, `Tahun`, `KodeRencana`, `TotalKredit`, `TargetKajur`) VALUES
(4, '197508092008121003', 'Lektor', 'S1', 'Ganjil', '2015', '0|0|0|0|0|0|0|0|0|0|0|0|0|0|0|0|0|0|0|0|0|0|0|0|0|0|0|0|0|0|0|0', '0', '96');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`No`);

--
-- Indexes for table `akun`
--
ALTER TABLE `akun`
  ADD KEY `NIP` (`NIP`);

--
-- Indexes for table `dosen`
--
ALTER TABLE `dosen`
  ADD PRIMARY KEY (`NIP`);

--
-- Indexes for table `dosenkontrak`
--
ALTER TABLE `dosenkontrak`
  ADD PRIMARY KEY (`NIDN`);

--
-- Indexes for table `ipklulusan`
--
ALTER TABLE `ipklulusan`
  ADD PRIMARY KEY (`Homebase`,`Tahun`);

--
-- Indexes for table `kepuasanmahasiswa`
--
ALTER TABLE `kepuasanmahasiswa`
  ADD PRIMARY KEY (`NIM`);

--
-- Indexes for table `kerjasama`
--
ALTER TABLE `kerjasama`
  ADD PRIMARY KEY (`Id`);

--
-- Indexes for table `mahasiswaasing`
--
ALTER TABLE `mahasiswaasing`
  ADD PRIMARY KEY (`Homebase`,`Tahun`);

--
-- Indexes for table `mahasiswabaru`
--
ALTER TABLE `mahasiswabaru`
  ADD PRIMARY KEY (`Homebase`,`Tahun`);

--
-- Indexes for table `penggunaandana`
--
ALTER TABLE `penggunaandana`
  ADD PRIMARY KEY (`Homebase`,`Tahun`);

--
-- Indexes for table `realisasipendidikan`
--
ALTER TABLE `realisasipendidikan`
  ADD PRIMARY KEY (`No`),
  ADD KEY `NIP` (`NIP`);

--
-- Indexes for table `realisasipenelitian`
--
ALTER TABLE `realisasipenelitian`
  ADD PRIMARY KEY (`No`),
  ADD KEY `NIP` (`NIP`);

--
-- Indexes for table `realisasipengabdian`
--
ALTER TABLE `realisasipengabdian`
  ADD PRIMARY KEY (`No`),
  ADD KEY `NIP` (`NIP`);

--
-- Indexes for table `realisasipenunjang`
--
ALTER TABLE `realisasipenunjang`
  ADD PRIMARY KEY (`No`),
  ADD KEY `NIP` (`NIP`);

--
-- Indexes for table `rencanapendidikan`
--
ALTER TABLE `rencanapendidikan`
  ADD PRIMARY KEY (`No`),
  ADD KEY `NIP` (`NIP`);

--
-- Indexes for table `rencanapenelitian`
--
ALTER TABLE `rencanapenelitian`
  ADD PRIMARY KEY (`No`),
  ADD KEY `NIP` (`NIP`);

--
-- Indexes for table `rencanapengabdian`
--
ALTER TABLE `rencanapengabdian`
  ADD PRIMARY KEY (`No`),
  ADD KEY `NIP` (`NIP`);

--
-- Indexes for table `rencanapenunjang`
--
ALTER TABLE `rencanapenunjang`
  ADD PRIMARY KEY (`No`),
  ADD KEY `NIP` (`NIP`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
  MODIFY `No` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `kerjasama`
--
ALTER TABLE `kerjasama`
  MODIFY `Id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `realisasipendidikan`
--
ALTER TABLE `realisasipendidikan`
  MODIFY `No` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=103;

--
-- AUTO_INCREMENT for table `realisasipenelitian`
--
ALTER TABLE `realisasipenelitian`
  MODIFY `No` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=63;

--
-- AUTO_INCREMENT for table `realisasipengabdian`
--
ALTER TABLE `realisasipengabdian`
  MODIFY `No` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=25;

--
-- AUTO_INCREMENT for table `realisasipenunjang`
--
ALTER TABLE `realisasipenunjang`
  MODIFY `No` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT for table `rencanapendidikan`
--
ALTER TABLE `rencanapendidikan`
  MODIFY `No` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `rencanapenelitian`
--
ALTER TABLE `rencanapenelitian`
  MODIFY `No` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `rencanapengabdian`
--
ALTER TABLE `rencanapengabdian`
  MODIFY `No` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `rencanapenunjang`
--
ALTER TABLE `rencanapenunjang`
  MODIFY `No` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `akun`
--
ALTER TABLE `akun`
  ADD CONSTRAINT `Akun_ibfk_1` FOREIGN KEY (`NIP`) REFERENCES `dosen` (`NIP`) ON UPDATE CASCADE;

--
-- Constraints for table `realisasipendidikan`
--
ALTER TABLE `realisasipendidikan`
  ADD CONSTRAINT `RealisasiPendidikan_ibfk_1` FOREIGN KEY (`NIP`) REFERENCES `dosen` (`NIP`) ON UPDATE CASCADE;

--
-- Constraints for table `realisasipenelitian`
--
ALTER TABLE `realisasipenelitian`
  ADD CONSTRAINT `RealisasiPenelitian_ibfk_1` FOREIGN KEY (`NIP`) REFERENCES `dosen` (`NIP`) ON UPDATE CASCADE;

--
-- Constraints for table `realisasipengabdian`
--
ALTER TABLE `realisasipengabdian`
  ADD CONSTRAINT `RealisasiPengabdian_ibfk_1` FOREIGN KEY (`NIP`) REFERENCES `dosen` (`NIP`) ON UPDATE CASCADE;

--
-- Constraints for table `realisasipenunjang`
--
ALTER TABLE `realisasipenunjang`
  ADD CONSTRAINT `RealisasiPenunjang_ibfk_1` FOREIGN KEY (`NIP`) REFERENCES `dosen` (`NIP`) ON UPDATE CASCADE;

--
-- Constraints for table `rencanapendidikan`
--
ALTER TABLE `rencanapendidikan`
  ADD CONSTRAINT `RencanaPendidikan_ibfk_1` FOREIGN KEY (`NIP`) REFERENCES `dosen` (`NIP`) ON UPDATE CASCADE;

--
-- Constraints for table `rencanapenelitian`
--
ALTER TABLE `rencanapenelitian`
  ADD CONSTRAINT `RencanaPenelitian_ibfk_1` FOREIGN KEY (`NIP`) REFERENCES `dosen` (`NIP`) ON UPDATE CASCADE;

--
-- Constraints for table `rencanapengabdian`
--
ALTER TABLE `rencanapengabdian`
  ADD CONSTRAINT `RencanaPengabdian_ibfk_1` FOREIGN KEY (`NIP`) REFERENCES `dosen` (`NIP`) ON UPDATE CASCADE;

--
-- Constraints for table `rencanapenunjang`
--
ALTER TABLE `rencanapenunjang`
  ADD CONSTRAINT `RencanaPenunjang_ibfk_1` FOREIGN KEY (`NIP`) REFERENCES `dosen` (`NIP`) ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;