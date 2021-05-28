-- phpMyAdmin SQL Dump
-- version 5.1.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: May 28, 2021 at 04:43 AM
-- Server version: 10.4.18-MariaDB
-- PHP Version: 8.0.3

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `tryo`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `id_admin` int(6) NOT NULL,
  `username` varchar(20) NOT NULL,
  `password` varchar(20) NOT NULL,
  `email` varchar(20) NOT NULL,
  `nama_admin` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`id_admin`, `username`, `password`, `email`, `nama_admin`) VALUES
(1, 'hafizh', '12345', 'hafizh69@gmail.com', 'hafizhkuy');

-- --------------------------------------------------------

--
-- Table structure for table `guru`
--

CREATE TABLE `guru` (
  `id_guru` int(6) NOT NULL,
  `username` varchar(20) NOT NULL,
  `password` varchar(20) NOT NULL,
  `email` varchar(20) NOT NULL,
  `NIP` varchar(20) NOT NULL,
  `nama_guru` varchar(20) NOT NULL,
  `status_login` varchar(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `guru`
--

INSERT INTO `guru` (`id_guru`, `username`, `password`, `email`, `NIP`, `nama_guru`, `status_login`) VALUES
(2, 'agus123', 'pw123', 'Agus@gmail.com', '19450819', 'Agus petarunk subank', '0'),
(6, 'bobi123', 'register2', 'bobi@gmail.com', '19450811', 'bobi', '0'),
(9, 'jondr1yespapa', 'register12', 'jon@gmail.com', '19450812', 'jon', '0');

-- --------------------------------------------------------

--
-- Table structure for table `jawaban_siswa`
--

CREATE TABLE `jawaban_siswa` (
  `id_jawaban_siswa` int(6) NOT NULL,
  `id_tryout` int(6) NOT NULL,
  `jawaban_siswa` text NOT NULL,
  `id_soal` int(6) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `mata_pelajaran`
--

CREATE TABLE `mata_pelajaran` (
  `id_mata_pelajaran` int(11) NOT NULL,
  `nama_mata_pelajaran` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `mata_pelajaran`
--

INSERT INTO `mata_pelajaran` (`id_mata_pelajaran`, `nama_mata_pelajaran`) VALUES
(1, 'IPA'),
(2, 'Bahasa Indonesia'),
(4, 'Bahasa Jepang');

-- --------------------------------------------------------

--
-- Table structure for table `nilai`
--

CREATE TABLE `nilai` (
  `id_nilai` int(6) NOT NULL,
  `id_siswa` int(6) NOT NULL,
  `nilai` int(3) NOT NULL,
  `tanggal_pengerjaan` varchar(15) NOT NULL,
  `mata_pelajaran` int(20) NOT NULL,
  `id_tryout` int(6) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `paket`
--

CREATE TABLE `paket` (
  `id_paket` int(6) NOT NULL,
  `nama_paket` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `paket`
--

INSERT INTO `paket` (`id_paket`, `nama_paket`) VALUES
(1, 'Paket A'),
(2, 'Paket B');

-- --------------------------------------------------------

--
-- Table structure for table `siswa`
--

CREATE TABLE `siswa` (
  `id_siswa` int(6) NOT NULL,
  `username` varchar(20) NOT NULL,
  `password` varchar(20) NOT NULL,
  `NISN` varchar(20) NOT NULL,
  `email` varchar(20) NOT NULL,
  `nama_siswa` varchar(30) NOT NULL,
  `TTL` varchar(20) NOT NULL,
  `jenis_kelamin` varchar(20) NOT NULL,
  `kelas` varchar(10) NOT NULL,
  `status_login` varchar(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `siswa`
--

INSERT INTO `siswa` (`id_siswa`, `username`, `password`, `NISN`, `email`, `nama_siswa`, `TTL`, `jenis_kelamin`, `kelas`, `status_login`) VALUES
(3, 'bobi123111', 'register11', '122', 'bobi222@gmail.com', 'bobi gehu pedas', '26 mei 200', 'laki-laki', '6C', '0'),
(4, 'amakisaly', 'iamsally', '12232', 'salyprohedshot@gmail', 'saly', '16 mei 2000', 'perempuan', '6A', '0');

-- --------------------------------------------------------

--
-- Table structure for table `soal`
--

CREATE TABLE `soal` (
  `id_soal` int(6) NOT NULL,
  `id_mata_pelajaran` int(6) NOT NULL,
  `id_paket` int(5) NOT NULL,
  `nama_paket` varchar(50) NOT NULL,
  `nama_mata_pelajaran` varchar(50) NOT NULL,
  `gambar` text NOT NULL,
  `isi_soal` text NOT NULL,
  `opsi_a` text NOT NULL,
  `opsi_b` text NOT NULL,
  `opsi_c` text NOT NULL,
  `kunci_jawaban` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `soal`
--

INSERT INTO `soal` (`id_soal`, `id_mata_pelajaran`, `id_paket`, `nama_paket`, `nama_mata_pelajaran`, `gambar`, `isi_soal`, `opsi_a`, `opsi_b`, `opsi_c`, `kunci_jawaban`) VALUES
(1, 1, 1, 'Paket A', 'IPA', '', 'Di bawah ini manakah yang termasuk energi yang bisa diperbaharui?', 'Bio Fuel', 'Minyak Tanah', 'Solar', 'A'),
(3, 0, 0, 'Paket A', 'IPA', '', 'Penyebab longsor?', 'Penebangan liar', 'Konflik Agus vs Sayid', 'Kurangnya Pemasukan Kas Negara', 'A'),
(5, 0, 0, 'Paket A', 'Bahasa Jepang', '', 'Hai', 'kebon', 'Api', 'air', 'B'),
(6, 0, 0, 'Paket A', 'Bahasa Jepang', '', 'siapa dia?\r\n', 'yuhu', 'ramdan', 'dr ramdan?', 'C');

-- --------------------------------------------------------

--
-- Table structure for table `tryout`
--

CREATE TABLE `tryout` (
  `id_tryout` int(6) NOT NULL,
  `id_siswa` int(6) NOT NULL,
  `tgl_pengerjaan` varchar(20) NOT NULL,
  `durasi` varchar(5) NOT NULL,
  `id_mata_pelajaran` int(6) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`id_admin`);

--
-- Indexes for table `guru`
--
ALTER TABLE `guru`
  ADD PRIMARY KEY (`id_guru`);

--
-- Indexes for table `jawaban_siswa`
--
ALTER TABLE `jawaban_siswa`
  ADD PRIMARY KEY (`id_jawaban_siswa`),
  ADD KEY `fk_jawabansiswa_tryout` (`id_tryout`),
  ADD KEY `fk_jawabansiswa_soal` (`id_soal`);

--
-- Indexes for table `mata_pelajaran`
--
ALTER TABLE `mata_pelajaran`
  ADD PRIMARY KEY (`id_mata_pelajaran`);

--
-- Indexes for table `nilai`
--
ALTER TABLE `nilai`
  ADD PRIMARY KEY (`id_nilai`),
  ADD KEY `fk_nilai_siswa` (`id_siswa`),
  ADD KEY `fk_nilai_tryout` (`id_tryout`);

--
-- Indexes for table `paket`
--
ALTER TABLE `paket`
  ADD PRIMARY KEY (`id_paket`);

--
-- Indexes for table `siswa`
--
ALTER TABLE `siswa`
  ADD PRIMARY KEY (`id_siswa`);

--
-- Indexes for table `soal`
--
ALTER TABLE `soal`
  ADD PRIMARY KEY (`id_soal`);

--
-- Indexes for table `tryout`
--
ALTER TABLE `tryout`
  ADD PRIMARY KEY (`id_tryout`),
  ADD KEY `fk_tryout_siswa` (`id_siswa`),
  ADD KEY `fk_tryout_matapelajaran` (`id_mata_pelajaran`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
  MODIFY `id_admin` int(6) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `guru`
--
ALTER TABLE `guru`
  MODIFY `id_guru` int(6) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT for table `jawaban_siswa`
--
ALTER TABLE `jawaban_siswa`
  MODIFY `id_jawaban_siswa` int(6) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `mata_pelajaran`
--
ALTER TABLE `mata_pelajaran`
  MODIFY `id_mata_pelajaran` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `nilai`
--
ALTER TABLE `nilai`
  MODIFY `id_nilai` int(6) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `paket`
--
ALTER TABLE `paket`
  MODIFY `id_paket` int(6) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `siswa`
--
ALTER TABLE `siswa`
  MODIFY `id_siswa` int(6) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `soal`
--
ALTER TABLE `soal`
  MODIFY `id_soal` int(6) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `tryout`
--
ALTER TABLE `tryout`
  MODIFY `id_tryout` int(6) NOT NULL AUTO_INCREMENT;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `jawaban_siswa`
--
ALTER TABLE `jawaban_siswa`
  ADD CONSTRAINT `fk_jawabansiswa_soal` FOREIGN KEY (`id_soal`) REFERENCES `soal` (`id_soal`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `fk_jawabansiswa_tryout` FOREIGN KEY (`id_tryout`) REFERENCES `tryout` (`id_tryout`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `nilai`
--
ALTER TABLE `nilai`
  ADD CONSTRAINT `fk_nilai_siswa` FOREIGN KEY (`id_siswa`) REFERENCES `siswa` (`id_siswa`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `fk_nilai_tryout` FOREIGN KEY (`id_tryout`) REFERENCES `tryout` (`id_tryout`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `tryout`
--
ALTER TABLE `tryout`
  ADD CONSTRAINT `fk_tryout_matapelajaran` FOREIGN KEY (`id_mata_pelajaran`) REFERENCES `mata_pelajaran` (`id_mata_pelajaran`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `fk_tryout_siswa` FOREIGN KEY (`id_siswa`) REFERENCES `siswa` (`id_siswa`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
