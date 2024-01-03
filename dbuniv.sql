-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jan 03, 2024 at 03:25 AM
-- Server version: 10.4.28-MariaDB
-- PHP Version: 8.2.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `dbuniv`
--

-- --------------------------------------------------------

--
-- Table structure for table `fakultas`
--

CREATE TABLE `fakultas` (
  `id_fakultas` int(11) NOT NULL,
  `kode_fakultas` varchar(200) NOT NULL,
  `nama_fakultas` varchar(50) DEFAULT NULL,
  `id_dosen` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `fakultas`
--

INSERT INTO `fakultas` (`id_fakultas`, `kode_fakultas`, `nama_fakultas`, `id_dosen`) VALUES
(13, '22040', 'Ilmu Komputer', 19),
(14, '20221', 'Ilmu Komunikasi', 20),
(15, '82938', 'Hukum', 21),
(16, '28392', 'Teknik', 26),
(17, '73829', 'Pertanian', 28),
(18, '20328', 'Kedokteran', 29),
(19, '264233', 'Kehutanan', 23);

-- --------------------------------------------------------

--
-- Table structure for table `hari`
--

CREATE TABLE `hari` (
  `id_hari` int(11) NOT NULL,
  `nama_hari` varchar(20) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `jenjang`
--

CREATE TABLE `jenjang` (
  `id_jenjang` int(11) NOT NULL,
  `nama_jenjang` varchar(50) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `jenjang`
--

INSERT INTO `jenjang` (`id_jenjang`, `nama_jenjang`) VALUES
(1, 'S1'),
(2, 'S2'),
(3, 'S3'),
(4, 'D1'),
(5, 'D2'),
(6, 'D3'),
(7, 'D4');

-- --------------------------------------------------------

--
-- Table structure for table `kelas`
--

CREATE TABLE `kelas` (
  `id_kelas` int(11) NOT NULL,
  `kode_kelas` int(11) DEFAULT NULL,
  `nama_kelas` varchar(50) DEFAULT NULL,
  `id_tahun_akademik` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `kelas`
--

INSERT INTO `kelas` (`id_kelas`, `kode_kelas`, `nama_kelas`, `id_tahun_akademik`) VALUES
(1, 20231, 'A1', 3),
(2, 20231, 'A2', 3),
(3, 20231, 'A3', 3),
(4, 20241, 'A1', 5),
(5, 20251, 'A4', 9);

-- --------------------------------------------------------

--
-- Table structure for table `prodi`
--

CREATE TABLE `prodi` (
  `id_prodi` int(11) NOT NULL,
  `kode_prodi` int(11) DEFAULT NULL,
  `nama_prodi` varchar(50) DEFAULT NULL,
  `id_jenjang` int(11) DEFAULT NULL,
  `id_fakultas` int(11) DEFAULT NULL,
  `tglsk` date DEFAULT NULL,
  `akreditasi` varchar(10) DEFAULT NULL,
  `id_dosen` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `prodi`
--

INSERT INTO `prodi` (`id_prodi`, `kode_prodi`, `nama_prodi`, `id_jenjang`, `id_fakultas`, `tglsk`, `akreditasi`, `id_dosen`) VALUES
(8, 220312, 'Sistem Informasi', 1, 13, '2023-12-10', 'A', 22),
(9, 223102, 'Hubungan Internasional', 1, 14, '2023-12-07', 'A', 20),
(10, 29382, 'Ilmu Hukum', 1, 15, '2023-12-22', 'A', 24),
(11, 83928, 'Teknik Nuklir', 1, 16, '2024-05-23', 'B', 25),
(12, 72384, 'Agro Teknologi', 1, 17, '2023-12-20', 'A', 27),
(13, 87428, 'Keperawatan', 1, 18, '2023-12-28', 'A', 30);

-- --------------------------------------------------------

--
-- Table structure for table `ruang`
--

CREATE TABLE `ruang` (
  `id_ruang` int(11) NOT NULL,
  `kode_ruang` int(11) DEFAULT NULL,
  `nama_ruang` varchar(50) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `ruang`
--

INSERT INTO `ruang` (`id_ruang`, `kode_ruang`, `nama_ruang`) VALUES
(2, 703, 'GR'),
(3, 701, 'GR'),
(4, 702, 'GR'),
(5, 704, 'GR'),
(6, 706, 'GR');

-- --------------------------------------------------------

--
-- Table structure for table `tahun_akademik`
--

CREATE TABLE `tahun_akademik` (
  `id_tahun_akademik` int(11) NOT NULL,
  `kode_tahun_akademik` int(11) DEFAULT NULL,
  `nama_tahun_akademik` varchar(50) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `tahun_akademik`
--

INSERT INTO `tahun_akademik` (`id_tahun_akademik`, `kode_tahun_akademik`, `nama_tahun_akademik`) VALUES
(3, 20231, 'Ganjil'),
(4, 20232, 'Genap'),
(5, 20241, 'Ganjil'),
(6, 20242, 'Genap'),
(9, 20251, 'Ganjil');

-- --------------------------------------------------------

--
-- Table structure for table `tbldosen`
--

CREATE TABLE `tbldosen` (
  `id_dosen` int(50) NOT NULL,
  `nid` varchar(23) DEFAULT NULL,
  `nama_dosen` varchar(1222) DEFAULT NULL,
  `jenis_kelamin` varchar(100) DEFAULT NULL,
  `alamat` varchar(1222) DEFAULT NULL,
  `nohp` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `tbldosen`
--

INSERT INTO `tbldosen` (`id_dosen`, `nid`, `nama_dosen`, `jenis_kelamin`, `alamat`, `nohp`) VALUES
(19, '21131', 'Alvi Alvarizy S.Kom., MMSI', 'laki-laki', 'Jl. Cemara Tretes', '08238794213'),
(20, '412421', 'Samsul Arif S.I.Kom., M.I.Kom', 'laki-laki', 'Jl. Tarikat', '089530412223'),
(21, '2203242', 'Dwi Ningrat S.H., M.H', 'laki-laki', 'Jl. Todak', '08781029302'),
(22, '2304920', 'Alfredo Yamazaki S.Kom., MMSI', 'laki-laki', 'Jl. Jati No.56', '083180677767'),
(23, '837282', 'Rahman Zulhadi S.I.Kom., M.I.Kom', 'laki-laki', 'Jl. Sepakat', '082389945927'),
(24, '928391', 'Indira Nabila S.H., M.H', 'perempuan', 'Jl. Sudirman', '087837482912'),
(25, '182932', 'Fakhri Barokah S.T., M.T', 'laki-laki', 'Jl. Sudrajat No.77', '082398649201'),
(26, '938291', 'Siska Wulandari S.T., M.T', 'perempuan', 'Jl. Pegangsaan Timur No.99', '089573829102'),
(27, '28392', 'Joko Suparman S.P., M.P', 'laki-laki', 'Jl. Sukaramai No.20', '089534948293'),
(28, '76853', 'Suhardi Harnadi S.P., M.P', 'laki-laki', 'Jl. Jawa No.20', '082273849129'),
(29, '84728', 'Sahira Rahma S.Ked., M.Ked', 'perempuan', 'Jl. Ubi Jalar No.33', '087636472323'),
(30, '72647', 'Rizky Rihadanta S.Ked., M.Ked', 'laki-laki', 'Jl. Adi Sucipto No.78', '087636472832');

-- --------------------------------------------------------

--
-- Table structure for table `tblmhs`
--

CREATE TABLE `tblmhs` (
  `id` int(11) NOT NULL,
  `nim` varchar(50) NOT NULL,
  `nama` varchar(300) NOT NULL,
  `jenis_kelamin` varchar(200) NOT NULL,
  `alamat` varchar(200) NOT NULL,
  `nohp` varchar(100) NOT NULL,
  `id_dosen` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `tblmhs`
--

INSERT INTO `tblmhs` (`id`, `nim`, `nama`, `jenis_kelamin`, `alamat`, `nohp`, `id_dosen`) VALUES
(17, '220402072', 'Alfakih Anggi Subekti', 'laki-laki', 'Jl. Cemara Tretes No.15', '082387942123', 20),
(18, '220402048', 'Abdel Haris Aragati', 'laki-laki', 'Jl. Diponegoro No.2', '089540829312', 22),
(19, '220402050', 'Alfath Raffandi', 'laki-laki', 'Jl. Sumahilang No.34', '082387392023', 25),
(20, '220402054', 'Rizky Hermawan', 'laki-laki', 'Jl. Satir No.98', '082736482932', 26),
(21, '220402032', 'Nia Puspita Sari', 'laki-laki', 'Jl. Senja No.22', '089547283291', 20),
(22, '220382732', 'Zahra Zakiya', 'perempuan', 'Jl. Rimuru No.03', '0837327462', 22);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `fakultas`
--
ALTER TABLE `fakultas`
  ADD PRIMARY KEY (`id_fakultas`),
  ADD KEY `id_dosen` (`id_dosen`);

--
-- Indexes for table `hari`
--
ALTER TABLE `hari`
  ADD PRIMARY KEY (`id_hari`);

--
-- Indexes for table `jenjang`
--
ALTER TABLE `jenjang`
  ADD PRIMARY KEY (`id_jenjang`);

--
-- Indexes for table `kelas`
--
ALTER TABLE `kelas`
  ADD PRIMARY KEY (`id_kelas`),
  ADD KEY `id_tahun_akademik` (`id_tahun_akademik`);

--
-- Indexes for table `prodi`
--
ALTER TABLE `prodi`
  ADD PRIMARY KEY (`id_prodi`),
  ADD KEY `id_jenjang` (`id_jenjang`),
  ADD KEY `id_kaprodi` (`id_dosen`),
  ADD KEY `id_fakultas` (`id_fakultas`);

--
-- Indexes for table `ruang`
--
ALTER TABLE `ruang`
  ADD PRIMARY KEY (`id_ruang`);

--
-- Indexes for table `tahun_akademik`
--
ALTER TABLE `tahun_akademik`
  ADD PRIMARY KEY (`id_tahun_akademik`);

--
-- Indexes for table `tbldosen`
--
ALTER TABLE `tbldosen`
  ADD PRIMARY KEY (`id_dosen`);

--
-- Indexes for table `tblmhs`
--
ALTER TABLE `tblmhs`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `nim` (`nim`),
  ADD KEY `id_dosenpa` (`id_dosen`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `fakultas`
--
ALTER TABLE `fakultas`
  MODIFY `id_fakultas` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=20;

--
-- AUTO_INCREMENT for table `hari`
--
ALTER TABLE `hari`
  MODIFY `id_hari` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `jenjang`
--
ALTER TABLE `jenjang`
  MODIFY `id_jenjang` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `kelas`
--
ALTER TABLE `kelas`
  MODIFY `id_kelas` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `prodi`
--
ALTER TABLE `prodi`
  MODIFY `id_prodi` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT for table `ruang`
--
ALTER TABLE `ruang`
  MODIFY `id_ruang` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `tahun_akademik`
--
ALTER TABLE `tahun_akademik`
  MODIFY `id_tahun_akademik` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `tbldosen`
--
ALTER TABLE `tbldosen`
  MODIFY `id_dosen` int(50) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=31;

--
-- AUTO_INCREMENT for table `tblmhs`
--
ALTER TABLE `tblmhs`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=23;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `fakultas`
--
ALTER TABLE `fakultas`
  ADD CONSTRAINT `fakultas_ibfk_1` FOREIGN KEY (`id_dosen`) REFERENCES `tbldosen` (`id_dosen`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `kelas`
--
ALTER TABLE `kelas`
  ADD CONSTRAINT `kelas_ibfk_1` FOREIGN KEY (`id_tahun_akademik`) REFERENCES `tahun_akademik` (`id_tahun_akademik`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `prodi`
--
ALTER TABLE `prodi`
  ADD CONSTRAINT `prodi_ibfk_1` FOREIGN KEY (`id_fakultas`) REFERENCES `fakultas` (`id_fakultas`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `prodi_ibfk_2` FOREIGN KEY (`id_jenjang`) REFERENCES `jenjang` (`id_jenjang`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `prodi_ibfk_3` FOREIGN KEY (`id_dosen`) REFERENCES `tbldosen` (`id_dosen`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `tblmhs`
--
ALTER TABLE `tblmhs`
  ADD CONSTRAINT `tblmhs_ibfk_1` FOREIGN KEY (`id_dosen`) REFERENCES `tbldosen` (`id_dosen`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
