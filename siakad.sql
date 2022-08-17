-- phpMyAdmin SQL Dump
-- version 5.1.3
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jul 26, 2022 at 06:09 PM
-- Server version: 10.4.14-MariaDB
-- PHP Version: 7.4.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `siakad`
--

-- --------------------------------------------------------

--
-- Table structure for table `guru`
--

CREATE TABLE `guru` (
  `id_guru` int(11) NOT NULL,
  `nuptk` varchar(255) NOT NULL,
  `nama_guru` varchar(255) NOT NULL,
  `tempat_lahir` varchar(255) NOT NULL,
  `tgl_lahir` date NOT NULL,
  `gender` enum('Laki-Laki','Perempuan') NOT NULL,
  `agama` varchar(10) NOT NULL,
  `jabatan` varchar(255) NOT NULL,
  `status_pegawai` enum('PNS','CPNS','GTT') NOT NULL,
  `status_sertifikasi` enum('Sudah','Belum') NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `guru`
--

INSERT INTO `guru` (`id_guru`, `nuptk`, `nama_guru`, `tempat_lahir`, `tgl_lahir`, `gender`, `agama`, `jabatan`, `status_pegawai`, `status_sertifikasi`) VALUES
(5, '196301061986081002', 'Sutarwanto, S.Pd.SD', 'Kudus', '1963-01-06', 'Laki-Laki', 'Islam', 'Kepala Sekolah', 'PNS', 'Sudah'),
(6, '196204151983042004', 'Sutrisniati, S.Pd.SD', 'Kudus', '1962-04-15', 'Perempuan', 'Islam', 'Guru Madya', 'PNS', 'Sudah'),
(7, '196708131992112001', 'Herlina Rustianti, S.Pd.SD', 'Kudus', '1967-08-13', 'Perempuan', 'Islam', 'Guru Madya', 'PNS', 'Sudah'),
(8, '196510012006041006', 'Suyono, S.Pd', 'Kudus', '1965-10-01', 'Laki-Laki', 'Islam', 'Guru Pertama', 'PNS', 'Sudah'),
(9, '196904062007012012', 'Nandiroh, S.Pd.I', 'Kudus', '1969-04-06', 'Perempuan', 'Islam', 'Guru Pertama', 'PNS', 'Sudah'),
(10, '196603162008012005', 'Musripah, S.Pd', 'Kudus', '1966-03-16', 'Perempuan', 'Islam', 'Guru Pertama', 'PNS', 'Sudah'),
(11, '199005182019032014', 'Eko Nur Sulistiyaningsih, S.Pd', 'Kudus', '1990-05-18', 'Perempuan', 'Islam', 'Guru Pertama', 'PNS', 'Sudah'),
(12, '199010262020122005', 'Ana Khoirunnisa, S.Pd', 'Kudus', '1990-10-26', 'Perempuan', 'Islam', 'Ahli Pertama', 'CPNS', 'Sudah'),
(13, '198804292020121002', 'Epriyan Santiko, S.Pd', 'Kudus', '1988-04-29', 'Laki-Laki', 'Islam', 'Ahli Pertama', 'CPNS', 'Belum'),
(14, '0439758660300093', 'Umi Chamidah, S.Pd.I', 'Kudus', '1980-07-11', 'Perempuan', 'Islam', '-', 'GTT', 'Belum'),
(15, '20317411188001', 'Nur S. Amalia, S.Pd', 'Kudus', '1988-07-10', 'Perempuan', 'Islam', '-', 'GTT', 'Belum'),
(16, '-', 'Ulyani Choirina Hidayah, S.Pd', 'Kudus', '1994-12-12', 'Perempuan', 'Islam', '-', 'GTT', 'Belum');

-- --------------------------------------------------------

--
-- Table structure for table `info_sekolah`
--

CREATE TABLE `info_sekolah` (
  `id_sekolah` int(11) NOT NULL,
  `nama_sekolah` varchar(255) NOT NULL,
  `alamat_sekolah` varchar(255) NOT NULL,
  `email` varchar(50) NOT NULL,
  `telepon` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `info_sekolah`
--

INSERT INTO `info_sekolah` (`id_sekolah`, `nama_sekolah`, `alamat_sekolah`, `email`, `telepon`) VALUES
(1, 'SD NEGERI 2 KARANGBENER KUDUS', 'JL. RAYA KARANGBENER, KARANGBENER, BAE, KUDUS', 'sd02karangbener@gmail.com', '085878210098');

-- --------------------------------------------------------

--
-- Table structure for table `jadwal`
--

CREATE TABLE `jadwal` (
  `id_jadwal` int(11) NOT NULL,
  `tahun_akademik_id` int(11) DEFAULT NULL,
  `guru_id` int(11) DEFAULT NULL,
  `rombel_id` int(11) DEFAULT NULL,
  `mapel_id` int(11) DEFAULT NULL,
  `hari` varchar(100) NOT NULL,
  `jam_awal` varchar(100) NOT NULL,
  `jam_akhir` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `jadwal`
--

INSERT INTO `jadwal` (`id_jadwal`, `tahun_akademik_id`, `guru_id`, `rombel_id`, `mapel_id`, `hari`, `jam_awal`, `jam_akhir`) VALUES
(1, 1, 10, 1, 1, 'Senin', '08:35', '09:15'),
(2, 1, 10, 1, 6, 'Senin', '09:30', '10:40'),
(3, 1, 10, 1, 5, 'Senin', '10:55', '12:05'),
(4, 1, 10, 1, 4, 'Selasa', '09:30', '10:40'),
(5, 1, 13, 1, 8, 'Selasa', '07:30', '09:15'),
(6, 1, 9, 1, 3, 'Selasa', '10:55', '12:05'),
(7, 1, 10, 1, 2, 'Rabu', '07:30', '09:15'),
(8, 1, 10, 1, 7, 'Rabu', '09:30', '10:40'),
(9, 1, 15, 1, 10, 'Rabu', '10:55', '12:05'),
(10, 1, 9, 1, 3, 'Kamis', '07:30', '09:15'),
(11, 1, 10, 1, 5, 'Kamis', '09:30', '10:40'),
(12, 1, 10, 1, 6, 'Kamis', '10:55', '12:05'),
(13, 1, 10, 1, 4, 'Jum\'at', '07:30', '09:15'),
(14, 1, 10, 1, 1, 'Jum\'at', '09:30', '10:40'),
(15, 1, 15, 1, 10, 'Sabtu', '07:30', '09:15'),
(16, 1, 10, 1, 2, 'Sabtu', '09:30', '10:40'),
(17, 1, 6, 2, 6, 'Senin', '08:35', '09:15'),
(18, 1, 6, 2, 5, 'Senin', '09:30', '10:40'),
(19, 1, 6, 2, 1, 'Senin', '10:55', '12:05'),
(20, 1, 6, 2, 4, 'Selasa', '07:30', '09:15'),
(21, 1, 9, 2, 3, 'Selasa', '09:30', '10:40'),
(22, 1, 13, 2, 8, 'Selasa', '10:55', '12:05'),
(23, 1, 6, 2, 7, 'Rabu', '07:30', '09:15'),
(24, 1, 15, 2, 10, 'Rabu', '09:30', '10:40'),
(25, 1, 6, 2, 2, 'Rabu', '10:55', '12:05'),
(26, 1, 6, 2, 5, 'Kamis', '07:30', '09:15'),
(27, 1, 6, 2, 6, 'Kamis', '09:30', '10:40'),
(28, 1, 9, 2, 3, 'Kamis', '10:55', '12:05'),
(29, 1, 6, 2, 1, 'Jum\'at', '07:30', '09:15'),
(30, 1, 6, 2, 4, 'Jum\'at', '09:30', '10:40'),
(31, 1, 6, 2, 2, 'Sabtu', '07:30', '09:15'),
(32, 1, 15, 2, 10, 'Sabtu', '09:30', '10:40'),
(33, 1, 8, 3, 5, 'Senin', '08:35', '09:15'),
(34, 1, 8, 3, 1, 'Senin', '09:30', '10:40'),
(35, 1, 8, 3, 6, 'Senin', '10:55', '12:05'),
(36, 1, 9, 3, 3, 'Selasa', '07:30', '09:15'),
(37, 1, 13, 3, 8, 'Selasa', '09:30', '10:40'),
(38, 1, 8, 3, 4, 'Selasa', '10:55', '12:05'),
(39, 1, 15, 3, 10, 'Rabu', '07:30', '09:15'),
(40, 1, 8, 3, 2, 'Rabu', '09:30', '10:40'),
(41, 1, 8, 3, 7, 'Rabu', '10:55', '12:05'),
(42, 1, 8, 3, 6, 'Kamis', '07:30', '09:15'),
(43, 1, 9, 3, 3, 'Kamis', '09:30', '10:40'),
(44, 1, 8, 3, 5, 'Kamis', '10:55', '12:05'),
(45, 1, 8, 3, 4, 'Jum\'at', '07:30', '09:15'),
(46, 1, 8, 3, 1, 'Jum\'at', '09:30', '10:40'),
(47, 1, 15, 3, 10, 'Sabtu', '07:30', '09:15'),
(48, 1, 16, 3, 11, 'Sabtu', '09:30', '10:40'),
(49, 1, 7, 4, 1, 'Senin', '08:35', '09:15'),
(50, 1, 7, 4, 6, 'Senin', '09:30', '10:40'),
(51, 1, 14, 4, 9, 'Senin', '10:55', '12:05'),
(52, 1, 13, 4, 8, 'Selasa', '07:30', '09:15'),
(53, 1, 7, 4, 4, 'Selasa', '09:30', '10:40'),
(54, 1, 9, 4, 3, 'Selasa', '10:55', '12:05'),
(55, 1, 7, 4, 2, 'Rabu', '07:30', '09:15'),
(56, 1, 7, 4, 7, 'Rabu', '09:30', '10:40'),
(57, 1, 15, 4, 10, 'Rabu', '10:55', '12:05'),
(58, 1, 9, 4, 3, 'Kamis', '07:30', '09:15'),
(59, 1, 7, 4, 5, 'Kamis', '09:30', '10:40'),
(60, 1, 7, 4, 6, 'Kamis', '10:55', '12:05'),
(61, 1, 7, 4, 4, 'Jum\'at', '07:30', '09:15'),
(62, 1, 7, 4, 1, 'Jum\'at', '09:30', '10:40'),
(63, 1, 15, 4, 10, 'Sabtu', '07:30', '09:15'),
(64, 1, 16, 4, 11, 'Sabtu', '09:30', '10:40'),
(65, 1, 11, 5, 6, 'Senin', '08:35', '09:15'),
(66, 1, 14, 5, 9, 'Senin', '09:30', '10:40'),
(67, 1, 11, 5, 1, 'Senin', '10:55', '12:05'),
(68, 1, 11, 5, 4, 'Selasa', '07:30', '09:15'),
(69, 1, 9, 5, 3, 'Selasa', '09:30', '10:40'),
(70, 1, 13, 5, 8, 'Selasa', '10:55', '12:05'),
(71, 1, 11, 5, 7, 'Rabu', '07:30', '09:15'),
(72, 1, 15, 5, 10, 'Rabu', '09:30', '10:40'),
(73, 1, 11, 5, 2, 'Rabu', '10:55', '12:05'),
(74, 1, 11, 5, 5, 'Kamis', '07:30', '09:15'),
(75, 1, 11, 5, 6, 'Kamis', '09:30', '10:40'),
(76, 1, 9, 5, 3, 'Kamis', '10:55', '12:05'),
(77, 1, 11, 5, 1, 'Jum\'at', '07:30', '09:15'),
(78, 1, 11, 5, 4, 'Jum\'at', '09:30', '10:40'),
(79, 1, 16, 5, 11, 'Sabtu', '07:30', '09:15'),
(80, 1, 15, 5, 10, 'Sabtu', '09:30', '10:40'),
(81, 1, 14, 6, 9, 'Senin', '08:35', '09:15'),
(82, 1, 12, 6, 1, 'Senin', '09:30', '10:40'),
(83, 1, 12, 6, 6, 'Senin', '10:55', '12:05'),
(84, 1, 9, 6, 3, 'Selasa', '07:30', '09:15'),
(85, 1, 13, 6, 8, 'Selasa', '09:30', '10:40'),
(86, 1, 15, 6, 10, 'Rabu', '07:30', '09:15'),
(87, 1, 12, 6, 2, 'Rabu', '09:30', '10:40'),
(88, 1, 12, 6, 7, 'Rabu', '10:55', '12:05'),
(89, 1, 12, 6, 6, 'Kamis', '07:30', '09:15'),
(90, 1, 9, 6, 3, 'Kamis', '09:30', '10:40'),
(91, 1, 12, 6, 5, 'Kamis', '10:55', '12:05'),
(92, 1, 12, 6, 4, 'Jum\'at', '07:30', '09:15'),
(93, 1, 12, 6, 1, 'Jum\'at', '09:30', '10:40'),
(94, 1, 15, 6, 10, 'Sabtu', '07:30', '09:15'),
(95, 1, 16, 6, 11, 'Sabtu', '09:30', '10:40'),
(96, 1, 12, 6, 4, 'Selasa', '10:55', '12:05'),
(97, 5, 10, 1, 1, 'Senin', '08:35', '09:15'),
(98, 5, 10, 1, 6, 'Senin', '09:30', '10:40'),
(99, 5, 10, 1, 5, 'Senin', '10:55', '12:05'),
(100, 5, 13, 1, 8, 'Selasa', '07:30', '09:15'),
(101, 5, 10, 1, 4, 'Selasa', '09:30', '10:40'),
(102, 5, 9, 1, 3, 'Selasa', '10:55', '12:05'),
(103, 5, 10, 1, 2, 'Rabu', '07:30', '09:15'),
(104, 5, 10, 1, 7, 'Rabu', '09:30', '10:40'),
(105, 5, 15, 1, 10, 'Rabu', '10:55', '12:05'),
(106, 5, 9, 1, 3, 'Kamis', '07:30', '09:15'),
(107, 5, 10, 1, 5, 'Kamis', '09:30', '10:40'),
(108, 5, 10, 1, 6, 'Kamis', '10:55', '12:05'),
(109, 5, 10, 1, 4, 'Jum\'at', '07:30', '09:15'),
(110, 5, 10, 1, 1, 'Jum\'at', '09:30', '10:40'),
(111, 5, 15, 1, 10, 'Sabtu', '07:30', '09:15'),
(112, 5, 10, 1, 2, 'Sabtu', '09:30', '10:40'),
(113, 5, 6, 2, 6, 'Senin', '08:35', '09:15'),
(114, 5, 6, 2, 5, 'Senin', '09:30', '10:40'),
(115, 5, 6, 2, 1, 'Senin', '10:55', '12:05'),
(116, 5, 6, 2, 4, 'Selasa', '07:30', '09:15'),
(117, 5, 9, 2, 3, 'Selasa', '09:30', '10:40'),
(118, 5, 13, 2, 8, 'Selasa', '10:55', '12:05'),
(119, 5, 6, 2, 7, 'Rabu', '07:30', '09:15'),
(120, 5, 15, 2, 10, 'Rabu', '09:30', '10:40'),
(121, 5, 6, 2, 2, 'Rabu', '10:55', '12:05'),
(122, 5, 6, 2, 5, 'Kamis', '07:30', '09:15'),
(123, 5, 6, 2, 6, 'Kamis', '09:30', '10:40'),
(124, 5, 9, 2, 3, 'Kamis', '10:55', '12:05'),
(125, 5, 6, 2, 1, 'Jum\'at', '07:30', '09:15'),
(126, 5, 6, 2, 4, 'Jum\'at', '09:30', '10:40'),
(127, 5, 6, 2, 2, 'Sabtu', '07:30', '09:15'),
(128, 5, 15, 2, 10, 'Sabtu', '09:30', '10:40'),
(129, 5, 8, 3, 5, 'Senin', '08:35', '09:15'),
(130, 5, 8, 3, 1, 'Senin', '09:30', '10:40'),
(131, 5, 8, 3, 6, 'Senin', '10:55', '12:05'),
(132, 5, 9, 3, 3, 'Selasa', '07:30', '09:15'),
(133, 5, 13, 3, 8, 'Selasa', '09:30', '10:40'),
(134, 5, 8, 3, 4, 'Selasa', '10:55', '12:05'),
(135, 5, 15, 3, 10, 'Rabu', '07:30', '09:15'),
(136, 5, 8, 3, 2, 'Rabu', '09:30', '10:40'),
(137, 5, 8, 3, 7, 'Rabu', '10:55', '12:05'),
(138, 5, 8, 3, 6, 'Kamis', '07:30', '09:15'),
(139, 5, 9, 3, 3, 'Kamis', '09:30', '10:40'),
(140, 5, 8, 3, 5, 'Kamis', '10:55', '12:05'),
(141, 5, 8, 3, 4, 'Jum\'at', '07:30', '09:15'),
(142, 5, 8, 3, 1, 'Jum\'at', '09:30', '10:40'),
(143, 5, 15, 3, 10, 'Sabtu', '07:30', '09:15'),
(144, 5, 16, 3, 11, 'Sabtu', '09:30', '10:40'),
(145, 5, 7, 4, 1, 'Senin', '08:35', '09:15'),
(146, 5, 7, 4, 6, 'Senin', '09:30', '10:40'),
(147, 5, 14, 4, 9, 'Senin', '10:55', '12:05'),
(148, 5, 13, 4, 8, 'Selasa', '07:30', '09:15'),
(149, 5, 7, 4, 4, 'Selasa', '09:30', '10:40'),
(150, 5, 9, 4, 3, 'Selasa', '10:55', '12:05'),
(151, 5, 7, 4, 2, 'Rabu', '07:30', '09:15'),
(152, 5, 7, 4, 7, 'Rabu', '09:30', '10:40'),
(153, 5, 15, 4, 10, 'Rabu', '10:55', '12:05'),
(154, 5, 9, 4, 3, 'Kamis', '07:30', '09:15'),
(155, 5, 7, 4, 5, 'Kamis', '09:30', '10:40'),
(156, 5, 7, 4, 6, 'Kamis', '10:55', '12:05'),
(157, 5, 7, 4, 1, 'Jum\'at', '07:30', '09:15'),
(158, 5, 7, 4, 4, 'Jum\'at', '09:30', '10:40'),
(159, 5, 16, 4, 11, 'Sabtu', '07:30', '09:15'),
(160, 5, 15, 4, 10, 'Sabtu', '09:30', '10:40'),
(161, 5, 11, 5, 6, 'Senin', '08:35', '09:15'),
(162, 5, 14, 5, 9, 'Senin', '09:30', '10:40'),
(163, 5, 11, 5, 1, 'Senin', '10:55', '12:05'),
(164, 5, 11, 5, 4, 'Selasa', '07:30', '09:15'),
(165, 5, 9, 5, 3, 'Selasa', '09:30', '10:40'),
(166, 5, 13, 5, 8, 'Selasa', '10:55', '12:05'),
(167, 5, 11, 5, 7, 'Rabu', '07:30', '09:15'),
(168, 5, 15, 5, 10, 'Rabu', '09:30', '10:40'),
(169, 5, 11, 5, 2, 'Rabu', '10:55', '12:05'),
(170, 5, 11, 5, 5, 'Kamis', '07:30', '09:15'),
(171, 5, 11, 5, 6, 'Kamis', '09:30', '10:40'),
(172, 5, 9, 5, 3, 'Kamis', '10:55', '12:05'),
(173, 5, 11, 5, 4, 'Jum\'at', '07:30', '09:15'),
(174, 5, 11, 5, 1, 'Jum\'at', '09:30', '10:40'),
(175, 5, 15, 5, 10, 'Sabtu', '07:30', '09:15'),
(176, 5, 16, 5, 11, 'Sabtu', '09:30', '10:40'),
(177, 5, 14, 6, 9, 'Senin', '08:35', '09:15'),
(178, 5, 12, 6, 1, 'Senin', '09:30', '10:40'),
(179, 5, 12, 6, 6, 'Senin', '10:55', '12:05'),
(180, 5, 9, 6, 3, 'Selasa', '07:30', '09:15'),
(181, 5, 13, 6, 8, 'Selasa', '09:30', '10:40'),
(182, 5, 12, 6, 4, 'Selasa', '10:55', '12:05'),
(183, 5, 15, 6, 10, 'Rabu', '07:30', '09:15'),
(184, 5, 12, 6, 2, 'Rabu', '09:30', '10:40'),
(185, 5, 12, 6, 7, 'Rabu', '10:55', '12:05'),
(186, 5, 12, 6, 6, 'Kamis', '07:30', '09:15'),
(187, 5, 9, 6, 3, 'Kamis', '09:30', '10:40'),
(188, 5, 12, 6, 3, 'Kamis', '10:55', '12:05'),
(189, 5, 12, 6, 1, 'Jum\'at', '07:30', '09:15'),
(191, 5, 12, 6, 4, 'Jum\'at', '09:30', '10:40'),
(192, 5, 16, 6, 11, 'Sabtu', '07:30', '09:15'),
(193, 5, 15, 6, 10, 'Sabtu', '09:30', '10:40');

-- --------------------------------------------------------

--
-- Table structure for table `mapel`
--

CREATE TABLE `mapel` (
  `id_mapel` int(11) NOT NULL,
  `kd_mapel` varchar(11) NOT NULL,
  `nama_mapel` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `mapel`
--

INSERT INTO `mapel` (`id_mapel`, `kd_mapel`, `nama_mapel`) VALUES
(1, 'IPA', 'Ilmu Pengetahuan Alam'),
(2, 'IPS', 'Ilmu Pengetahuan Sosial'),
(3, 'PAI', 'Pendidika Agama Islam'),
(4, 'B.Indo', 'Bahasa Indonesia'),
(5, 'PPKn', 'Pendidikan Kewarganegaraan'),
(6, 'MTK', 'Matematika'),
(7, 'SBdP', 'Seni Budaya dan Prakarya'),
(8, 'PJOK', 'Pendidikan Jasmani dan Olahraga'),
(9, 'B.Arab', 'Bahasa Arab'),
(10, 'B.Ing', 'Bahasa Inggris'),
(11, 'B.Jawa', 'Bahasa Jawa');

-- --------------------------------------------------------

--
-- Table structure for table `nilai`
--

CREATE TABLE `nilai` (
  `id_nilai` int(11) NOT NULL,
  `siswa_id` int(11) DEFAULT NULL,
  `rombel_id` int(11) DEFAULT NULL,
  `mapel_id` int(11) DEFAULT NULL,
  `tahun_akademik_id` int(11) DEFAULT NULL,
  `nilai_tugas` int(11) NOT NULL,
  `nilai_uts` int(11) NOT NULL,
  `nilai_uas` int(11) NOT NULL,
  `nilai_akhir` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `nilai`
--

INSERT INTO `nilai` (`id_nilai`, `siswa_id`, `rombel_id`, `mapel_id`, `tahun_akademik_id`, `nilai_tugas`, `nilai_uts`, `nilai_uas`, `nilai_akhir`) VALUES
(1, 46, 1, 1, 1, 78, 79, 75, 77),
(2, 46, 1, 2, 1, 70, 80, 90, 80),
(3, 46, 1, 3, 1, 70, 75, 80, 75),
(4, 46, 1, 4, 1, 75, 83, 80, 79),
(5, 46, 1, 5, 1, 77, 78, 85, 80),
(6, 46, 1, 6, 1, 88, 80, 70, 78),
(7, 46, 1, 7, 1, 90, 85, 85, 86),
(8, 46, 1, 8, 1, 80, 80, 75, 78),
(10, 46, 1, 10, 1, 80, 80, 80, 80),
(12, 1, 1, 1, 1, 90, 88, 85, 87),
(13, 1, 1, 2, 1, 88, 85, 85, 85),
(14, 1, 1, 3, 1, 85, 85, 87, 85),
(15, 1, 1, 4, 1, 88, 89, 80, 85),
(16, 1, 1, 5, 1, 77, 78, 90, 81),
(17, 1, 1, 6, 1, 87, 78, 75, 79),
(18, 1, 1, 7, 1, 90, 85, 80, 84),
(19, 1, 1, 8, 1, 78, 79, 90, 82),
(21, 1, 1, 10, 1, 80, 85, 80, 81),
(23, 11, 2, 1, 1, 80, 80, 86, 82),
(24, 11, 2, 2, 1, 88, 85, 80, 84),
(25, 11, 2, 3, 1, 80, 78, 78, 78),
(26, 11, 2, 4, 1, 78, 85, 87, 83),
(27, 11, 2, 5, 1, 88, 85, 80, 84),
(28, 11, 2, 6, 1, 78, 75, 77, 76),
(29, 11, 2, 7, 1, 90, 88, 85, 87),
(30, 11, 2, 8, 1, 90, 90, 88, 89),
(32, 11, 2, 10, 1, 79, 79, 78, 78),
(34, 28, 2, 1, 1, 88, 85, 84, 85),
(35, 28, 2, 2, 1, 85, 86, 81, 83),
(36, 28, 2, 3, 1, 86, 84, 85, 84),
(37, 28, 2, 4, 1, 80, 80, 78, 79),
(38, 28, 2, 5, 1, 80, 78, 76, 77),
(39, 28, 2, 6, 1, 78, 79, 78, 78),
(40, 28, 2, 7, 1, 90, 85, 85, 86),
(41, 28, 2, 8, 1, 90, 80, 80, 83),
(43, 28, 2, 10, 1, 76, 79, 75, 76),
(45, 29, 2, 1, 1, 84, 85, 80, 82),
(46, 29, 2, 2, 1, 80, 75, 78, 77),
(47, 29, 2, 3, 1, 85, 78, 79, 80),
(48, 29, 2, 4, 1, 88, 85, 80, 84),
(49, 29, 2, 5, 1, 80, 75, 75, 76),
(50, 29, 2, 6, 1, 78, 78, 79, 78),
(51, 29, 2, 7, 1, 86, 87, 80, 84),
(52, 29, 2, 8, 1, 80, 80, 80, 80),
(54, 29, 2, 10, 1, 79, 79, 80, 79),
(56, 40, 3, 1, 1, 85, 80, 75, 79),
(57, 40, 3, 2, 1, 80, 79, 80, 79),
(58, 40, 3, 3, 1, 78, 80, 80, 79),
(59, 40, 3, 4, 1, 85, 80, 80, 81),
(60, 40, 3, 5, 1, 78, 79, 75, 77),
(61, 40, 3, 6, 1, 77, 75, 75, 75),
(62, 40, 3, 7, 1, 90, 80, 80, 83),
(63, 40, 3, 8, 1, 90, 80, 80, 83),
(65, 40, 3, 10, 1, 77, 79, 78, 78),
(66, 40, 3, 11, 1, 80, 80, 78, 79),
(67, 3, 3, 1, 1, 80, 85, 80, 81),
(68, 3, 3, 2, 1, 78, 80, 80, 79),
(69, 3, 3, 3, 1, 85, 80, 80, 81),
(70, 3, 3, 4, 1, 80, 80, 75, 78),
(71, 3, 3, 5, 1, 78, 79, 78, 78),
(72, 3, 3, 7, 1, 80, 80, 80, 80),
(73, 3, 3, 8, 1, 88, 85, 80, 84),
(74, 3, 3, 10, 1, 80, 75, 78, 77),
(75, 3, 3, 11, 1, 88, 80, 80, 82),
(76, 41, 4, 1, 1, 80, 80, 75, 78),
(77, 41, 4, 2, 1, 80, 85, 75, 80),
(78, 41, 4, 3, 1, 80, 80, 85, 81),
(79, 41, 4, 4, 1, 88, 80, 80, 82),
(80, 41, 4, 5, 1, 80, 75, 78, 77),
(81, 41, 4, 6, 1, 78, 75, 75, 75),
(82, 41, 4, 7, 1, 90, 80, 85, 84),
(83, 41, 4, 8, 1, 90, 88, 80, 85),
(84, 41, 4, 9, 1, 80, 75, 78, 77),
(85, 41, 4, 10, 1, 80, 85, 80, 81),
(86, 41, 4, 11, 1, 80, 75, 78, 77),
(87, 2, 4, 1, 1, 80, 80, 80, 80),
(88, 2, 4, 2, 1, 80, 78, 78, 78),
(89, 2, 4, 3, 1, 85, 79, 78, 80),
(90, 2, 4, 4, 1, 85, 78, 78, 80),
(91, 2, 4, 5, 1, 78, 79, 75, 77),
(92, 2, 4, 6, 1, 80, 80, 78, 79),
(93, 2, 4, 7, 1, 90, 80, 85, 84),
(94, 2, 4, 8, 1, 90, 85, 80, 84),
(95, 2, 4, 9, 1, 80, 85, 80, 81),
(96, 2, 4, 10, 1, 80, 85, 80, 81),
(97, 2, 4, 11, 1, 77, 80, 78, 78),
(98, 39, 5, 1, 1, 80, 85, 80, 81),
(99, 39, 5, 2, 1, 90, 85, 78, 84),
(100, 39, 5, 3, 1, 80, 80, 78, 79),
(101, 39, 5, 4, 1, 80, 85, 85, 83),
(102, 39, 5, 5, 1, 85, 80, 80, 81),
(103, 39, 5, 6, 1, 80, 80, 85, 81),
(104, 39, 5, 7, 1, 80, 85, 80, 81),
(105, 39, 5, 8, 1, 85, 85, 78, 82),
(106, 39, 5, 9, 1, 80, 75, 78, 77),
(107, 39, 5, 10, 1, 78, 79, 78, 78),
(108, 39, 5, 11, 1, 80, 80, 80, 80),
(109, 4, 5, 1, 1, 80, 85, 85, 83),
(110, 4, 5, 2, 1, 78, 79, 78, 78),
(111, 4, 5, 3, 1, 90, 79, 78, 81),
(112, 4, 5, 4, 1, 80, 85, 80, 81),
(113, 4, 5, 5, 1, 78, 79, 78, 78),
(114, 4, 5, 6, 1, 80, 80, 75, 78),
(115, 4, 5, 7, 1, 80, 85, 80, 81),
(116, 4, 5, 8, 1, 80, 85, 80, 81),
(117, 4, 5, 9, 1, 80, 80, 78, 79),
(118, 4, 5, 10, 1, 88, 80, 80, 82),
(119, 4, 5, 11, 1, 80, 75, 75, 76),
(120, 38, 6, 1, 1, 80, 85, 78, 81),
(121, 38, 6, 2, 1, 80, 79, 78, 78),
(122, 38, 6, 3, 1, 78, 79, 75, 77),
(123, 38, 6, 4, 1, 88, 80, 78, 81),
(124, 38, 6, 5, 1, 80, 79, 80, 79),
(125, 38, 6, 6, 1, 80, 85, 80, 81),
(126, 38, 6, 7, 1, 78, 79, 80, 79),
(127, 38, 6, 8, 1, 80, 85, 85, 83),
(128, 38, 6, 9, 1, 80, 80, 78, 79),
(129, 38, 6, 10, 1, 80, 88, 85, 84),
(130, 38, 6, 11, 1, 80, 80, 75, 78),
(131, 42, 6, 1, 1, 90, 75, 78, 80),
(132, 42, 6, 2, 1, 80, 80, 78, 79),
(133, 42, 6, 3, 1, 90, 80, 78, 82),
(134, 42, 6, 4, 1, 85, 80, 78, 80),
(135, 42, 6, 5, 1, 78, 80, 80, 79),
(136, 42, 6, 6, 1, 80, 80, 75, 78),
(137, 42, 6, 7, 1, 90, 88, 80, 85),
(138, 42, 6, 8, 1, 90, 80, 85, 84),
(139, 42, 6, 9, 1, 78, 79, 80, 79),
(140, 42, 6, 10, 1, 80, 75, 78, 77),
(141, 42, 6, 11, 1, 78, 75, 78, 76),
(142, 46, 1, 1, 5, 80, 85, 80, 81),
(143, 46, 1, 2, 5, 80, 85, 75, 80),
(144, 46, 1, 3, 5, 80, 85, 75, 80),
(145, 46, 1, 4, 5, 78, 79, 80, 79),
(146, 46, 1, 5, 5, 80, 85, 80, 81),
(147, 46, 1, 6, 5, 80, 79, 75, 77),
(148, 46, 1, 7, 5, 80, 80, 78, 79),
(149, 46, 1, 8, 5, 90, 80, 78, 82),
(150, 46, 1, 10, 5, 80, 80, 78, 79),
(151, 1, 1, 1, 5, 80, 80, 90, 83),
(152, 1, 1, 2, 5, 80, 85, 80, 81),
(153, 1, 1, 3, 5, 85, 78, 78, 80),
(154, 1, 1, 4, 5, 78, 85, 80, 81),
(155, 1, 1, 5, 5, 80, 80, 75, 78),
(156, 1, 1, 6, 5, 80, 85, 85, 83),
(157, 1, 1, 7, 5, 90, 85, 80, 84),
(158, 1, 1, 8, 5, 90, 85, 85, 86),
(159, 1, 1, 10, 5, 78, 79, 78, 78),
(160, 11, 2, 1, 5, 80, 80, 80, 80),
(161, 11, 2, 2, 5, 78, 80, 79, 79),
(162, 11, 2, 3, 5, 90, 80, 80, 83),
(163, 11, 2, 4, 5, 85, 80, 85, 83),
(164, 11, 2, 5, 5, 80, 80, 85, 81),
(165, 11, 2, 6, 5, 80, 75, 75, 76),
(166, 11, 2, 7, 5, 90, 85, 88, 87),
(167, 11, 2, 8, 5, 88, 80, 85, 84),
(168, 11, 2, 10, 5, 78, 79, 78, 78),
(169, 28, 2, 1, 5, 80, 80, 75, 78),
(170, 28, 2, 2, 5, 80, 78, 85, 81),
(171, 28, 2, 3, 5, 85, 79, 78, 80),
(172, 28, 2, 4, 5, 80, 80, 75, 78),
(173, 28, 2, 5, 5, 80, 79, 78, 78),
(174, 28, 2, 6, 5, 77, 75, 78, 76),
(175, 28, 2, 7, 5, 90, 85, 85, 86),
(176, 28, 2, 8, 5, 90, 80, 80, 83),
(177, 28, 2, 10, 5, 80, 79, 78, 78),
(178, 40, 3, 1, 5, 80, 85, 80, 81),
(179, 40, 3, 2, 5, 78, 80, 85, 81),
(180, 40, 3, 3, 5, 88, 85, 78, 83),
(181, 40, 3, 4, 5, 90, 79, 78, 81),
(182, 40, 3, 5, 5, 80, 75, 78, 77),
(183, 40, 3, 6, 5, 78, 80, 80, 79),
(184, 40, 3, 7, 5, 90, 85, 80, 84),
(185, 40, 3, 8, 5, 90, 80, 80, 83),
(186, 40, 3, 10, 5, 80, 85, 75, 80),
(187, 40, 3, 11, 5, 80, 79, 78, 78),
(188, 3, 3, 1, 5, 80, 80, 90, 83),
(189, 3, 3, 2, 5, 85, 80, 78, 80),
(190, 3, 3, 3, 5, 80, 85, 80, 81),
(191, 3, 3, 4, 5, 78, 85, 85, 82),
(192, 3, 3, 5, 5, 78, 80, 78, 78),
(193, 3, 3, 6, 5, 77, 85, 80, 80),
(194, 3, 3, 7, 5, 88, 88, 80, 85),
(195, 3, 3, 8, 5, 90, 79, 78, 81),
(196, 3, 3, 10, 5, 80, 75, 80, 78),
(197, 3, 3, 11, 5, 88, 80, 80, 82),
(198, 41, 4, 1, 5, 80, 85, 78, 81),
(199, 41, 4, 2, 5, 78, 80, 80, 79),
(200, 41, 4, 3, 5, 80, 80, 80, 80),
(201, 41, 4, 4, 5, 80, 85, 75, 80),
(202, 41, 4, 5, 5, 85, 85, 80, 83),
(203, 41, 4, 6, 5, 80, 85, 75, 80),
(204, 41, 4, 7, 5, 90, 85, 85, 86),
(205, 41, 4, 8, 5, 90, 88, 85, 87),
(206, 41, 4, 9, 5, 80, 85, 80, 81),
(207, 41, 4, 10, 5, 80, 79, 78, 78),
(208, 41, 4, 11, 5, 80, 80, 75, 78),
(209, 2, 4, 1, 5, 80, 85, 85, 83),
(210, 2, 4, 2, 5, 90, 85, 80, 84),
(211, 2, 4, 3, 5, 78, 85, 80, 81),
(212, 2, 4, 4, 5, 78, 80, 80, 79),
(213, 2, 4, 5, 5, 85, 85, 80, 83),
(214, 2, 4, 6, 5, 80, 80, 80, 80),
(215, 2, 4, 7, 5, 90, 88, 90, 89),
(216, 2, 4, 8, 5, 90, 88, 85, 87),
(217, 2, 4, 9, 5, 80, 85, 78, 81),
(218, 2, 4, 10, 5, 90, 79, 78, 81),
(219, 2, 4, 11, 5, 85, 80, 80, 81),
(220, 39, 5, 1, 5, 80, 85, 78, 81),
(221, 39, 5, 2, 5, 80, 80, 80, 80),
(222, 39, 5, 3, 5, 90, 80, 80, 83),
(223, 39, 5, 4, 5, 85, 80, 78, 80),
(224, 39, 5, 5, 5, 80, 85, 85, 83),
(225, 39, 5, 6, 5, 85, 79, 78, 80),
(226, 39, 5, 7, 5, 88, 88, 85, 86),
(227, 39, 5, 8, 5, 90, 88, 80, 85),
(228, 39, 5, 9, 5, 80, 80, 75, 78),
(229, 39, 5, 10, 5, 85, 79, 78, 80),
(230, 39, 5, 11, 5, 80, 88, 85, 84),
(231, 4, 5, 1, 5, 90, 85, 90, 88),
(232, 4, 5, 2, 5, 85, 80, 78, 80),
(233, 4, 5, 3, 5, 85, 79, 78, 80),
(234, 4, 5, 4, 5, 80, 75, 78, 77),
(235, 4, 5, 5, 5, 80, 79, 75, 77),
(236, 4, 5, 6, 5, 80, 75, 75, 76),
(237, 4, 5, 7, 5, 90, 88, 85, 87),
(238, 4, 5, 8, 5, 90, 88, 90, 89),
(239, 4, 5, 9, 5, 80, 80, 80, 80),
(240, 4, 5, 10, 5, 80, 79, 78, 78),
(241, 4, 5, 11, 5, 80, 75, 78, 77),
(242, 38, 6, 1, 5, 80, 80, 80, 80),
(243, 38, 6, 2, 5, 78, 80, 78, 78),
(244, 38, 6, 3, 5, 80, 80, 75, 78),
(245, 38, 6, 4, 5, 85, 85, 80, 83),
(246, 38, 6, 5, 5, 80, 75, 78, 77),
(247, 38, 6, 6, 5, 80, 75, 75, 76),
(248, 38, 6, 7, 5, 90, 80, 80, 83),
(249, 38, 6, 8, 5, 90, 90, 90, 90),
(250, 38, 6, 9, 5, 78, 88, 85, 83),
(251, 38, 6, 10, 5, 85, 79, 78, 80),
(252, 38, 6, 11, 5, 90, 78, 78, 81),
(253, 42, 6, 1, 5, 90, 85, 85, 86),
(254, 42, 6, 2, 5, 85, 80, 78, 80),
(255, 42, 6, 3, 5, 77, 79, 78, 78),
(256, 42, 6, 4, 5, 85, 80, 78, 80),
(257, 42, 6, 5, 5, 85, 80, 78, 80),
(258, 42, 6, 6, 5, 88, 79, 75, 80),
(259, 42, 6, 7, 5, 90, 88, 90, 89),
(260, 42, 6, 8, 5, 90, 88, 85, 87),
(261, 42, 6, 9, 5, 85, 80, 78, 80),
(262, 42, 6, 10, 5, 77, 85, 85, 82),
(263, 42, 6, 11, 5, 80, 79, 80, 79);

-- --------------------------------------------------------

--
-- Table structure for table `rombel`
--

CREATE TABLE `rombel` (
  `id_rombel` int(11) NOT NULL,
  `nama_rombel` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `rombel`
--

INSERT INTO `rombel` (`id_rombel`, `nama_rombel`) VALUES
(1, 'Kelas 1'),
(2, 'Kelas 2'),
(3, 'Kelas 3'),
(4, 'Kelas 4'),
(5, 'Kelas 5'),
(6, 'Kelas 6');

-- --------------------------------------------------------

--
-- Table structure for table `siswa`
--

CREATE TABLE `siswa` (
  `id_siswa` int(11) NOT NULL,
  `nis` varchar(255) NOT NULL,
  `nisn` varchar(255) NOT NULL,
  `nama_siswa` varchar(255) NOT NULL,
  `tempat_lahir` varchar(255) NOT NULL,
  `tgl_lahir` date NOT NULL,
  `gender` enum('Laki-Laki','Perempuan') NOT NULL,
  `agama` varchar(10) NOT NULL,
  `rombel_id` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `siswa`
--

INSERT INTO `siswa` (`id_siswa`, `nis`, `nisn`, `nama_siswa`, `tempat_lahir`, `tgl_lahir`, `gender`, `agama`, `rombel_id`) VALUES
(1, '1485', '0146488980', 'Adellia Kusuma Rahmawati', 'Kudus', '2014-06-21', 'Perempuan', 'Islam', 1),
(2, '1445', '0126670296', 'Agustya Putri Ramandhani', 'Kudus', '2012-09-04', 'Perempuan', 'Islam', 4),
(3, '1461', '0133508209', 'Aira Zahwa Ramadhani', 'Kudus', '2013-07-15', 'Perempuan', 'Islam', 3),
(4, '1420', '0128101459', 'Alan Fajri Nuary', 'Kudus', '2012-01-17', 'Laki-Laki', 'Islam', 5),
(5, '1421', '0115765673', 'Alief Rizqi Muhammad Fadzila', 'Kudus', '2011-05-17', 'Laki-Laki', 'Islam', 5),
(6, '1484', '0129512119', 'Alvaro Davin Junior', 'Kudus', '2012-06-09', 'Laki-Laki', 'Islam', 4),
(7, '1486', '0154297020', 'Alvin Dwi Saputra', 'Kudus', '2015-11-11', 'Laki-Laki', 'Islam', 1),
(8, '1487', '3152362443', 'Angga Dwi Saputra', 'Kudus', '2015-11-26', 'Laki-Laki', 'Islam', 1),
(9, '1446', '0127420960', 'Anggun Savana', 'Kudus', '2012-07-09', 'Perempuan', 'Islam', 4),
(10, '1488', '0146603630', 'Apsari Tisya Nurmala', 'Kudus', '2014-11-18', 'Perempuan', 'Islam', 1),
(11, '1467', '3142375512', 'Aqila Ramadhani', 'Kudus', '2014-07-27', 'Perempuan', 'Islam', 2),
(12, '1489', '0141648542', 'Aqila Shafiya Jasmine', 'Kudus', '2014-12-13', 'Perempuan', 'Islam', 1),
(13, '-', '-', 'Ardy\'an Fiky Romadhon', 'Sukoharjo', '2013-07-15', 'Laki-Laki', 'Islam', 1),
(14, '1490', '0156166763', 'Arjuna Surya Saputra', 'Kudus', '2015-02-10', 'Laki-Laki', 'Islam', 1),
(15, '1491', '3153379773', 'Arman Rengga Hermawan', 'Kudus', '2015-01-09', 'Laki-Laki', 'Islam', 1),
(16, '1492', '3156596571', 'Atik Rahmawati', 'Kudus', '2015-04-16', 'Perempuan', 'Islam', 1),
(17, '1418', '0114661435', 'Aulia Ahsanul Khuluq', 'Kudus', '2011-02-16', 'Laki-Laki', 'Islam', 6),
(18, '1447', '0128484238', 'Aya Putri', 'Kudus', '2012-12-16', 'Perempuan', 'Islam', 4),
(19, '1493', '0159230044', 'Bella Anggraeni', 'Kudus', '2015-02-08', 'Perempuan', 'Islam', 1),
(20, '1448', '0118758664', 'Berlian Alicia Friska Azzahra', 'Kudus', '2011-04-23', 'Perempuan', 'Islam', 4),
(21, '1494', '0144912519', 'Bilqis Ufhaira Sari', 'Kudus', '2014-11-22', 'Perempuan', 'Islam', 1),
(22, '1495', '3157511404', 'Cahya Dwi Ananda', 'Kudus', '2015-09-03', 'Laki-Laki', 'Islam', 1),
(23, '1468', '0142717731', 'Clara Chelsea Ayunda', 'Kudus', '2014-07-15', 'Perempuan', 'Khatolik', 2),
(24, '1496', '0151278549', 'Depika al Zahwa', 'Kudus', '2015-04-15', 'Perempuan', 'Islam', 1),
(25, '1462', '0131610823', 'Devano Ardiansyah', 'Kudus', '2013-11-29', 'Laki-Laki', 'Islam', 3),
(26, '1409', '0116590862', 'Dinda Nurul Lathif Hidayah', 'Kudus', '2011-01-07', 'Perempuan', 'Islam', 6),
(27, '1410', '0114595338', 'Edo Dwi Prastiyo', 'Kudus', '2011-10-10', 'Laki-Laki', 'Islam', 6),
(28, '1469', '0145493834', 'Elsa Selfiana', 'Kudus', '2014-06-21', 'Perempuan', 'Islam', 2),
(29, '1470', '0143772630', 'Farra Agnia Rafifa', 'Kudus', '2014-08-02', 'Perempuan', 'Islam', 2),
(30, '1449', '0115135662', 'Fharelconcessa', 'Kudus', '2011-12-22', 'Laki-Laki', 'Islam', 4),
(31, '1411', '0104302567', 'Garyn Wildan Saputra', 'Kudus', '2010-06-20', 'Laki-Laki', 'Islam', 6),
(32, '1471', '3140252496', 'Gilang Arya Ramadhan', 'Kudus', '2014-07-05', 'Laki-Laki', 'Islam', 2),
(33, '1433', '0115386845', 'Habib Ahmeda Khoiri', 'Kudus', '2011-06-28', 'Laki-Laki', 'Islam', 5),
(34, '1472', '3143995391', 'Hafizhah Bilqis Salsabilla', 'Kudus', '2014-05-17', 'Perempuan', 'Islam', 2),
(35, '1436', '0126149672', 'Haikal Rayyan', 'Kudus', '2012-01-08', 'Laki-Laki', 'Islam', 5),
(36, '1439', '0123329109', 'Hisyam Arrozaq Fabiyanto', 'Kudus', '2011-06-21', 'Laki-Laki', 'Islam', 5),
(37, '1412', '0102639829', 'Indri Kurniananda Ikke Pratiwi', 'Kudus', '2010-05-03', 'Perempuan', 'Islam', 6),
(38, '1390', '0098491999', 'Intan Fitriana', 'Kudus', '2009-12-10', 'Perempuan', 'Islam', 6),
(39, '1413', '0112085852', 'Jenicca Nayla Khafita Marwa', 'Kudus', '2011-10-02', 'Perempuan', 'Islam', 5),
(40, '1450', '3133830193', 'Khoirun Nisa', 'Kudus', '2013-04-20', 'Perempuan', 'Islam', 3),
(41, '1440', '0121083099', 'Kurniawan Aji Saputra', 'Kudus', '2012-05-18', 'Laki-Laki', 'Islam', 4),
(42, '1391', '0106616524', 'Laila Wahyu Ramadhani', 'Kudus', '2010-09-09', 'Perempuan', 'Islam', 6),
(43, '1422', '0111270018', 'Lathisa Chyntia Ramadhani', 'Kudus', '2011-08-11', 'Perempuan', 'Islam', 5),
(44, '1437', '0122300542', 'Marita Wahyuni Putri', 'Kudus', '2012-03-01', 'Perempuan', 'Islam', 5),
(45, '1392', '0107495204', 'Meisya Nur Sofiana', 'Kudus', '2010-05-08', 'Perempuan', 'Islam', 6),
(46, '1473', '3140779209', 'Muhammad Arjuna Dwi Saputra', 'Kudus', '2014-12-21', 'Laki-Laki', 'Islam', 1),
(47, '1451', '0129745044', 'Muhammad Arya Firnanda', 'Kudus', '2012-07-13', 'Laki-Laki', 'Islam', 4),
(48, '1474', '0142450886', 'Muhammad Bagas Saputra', 'Kudus', '2014-01-21', 'Laki-Laki', 'Islam', 2),
(49, '1423', '0126523910', 'Muhammad Baskoro Wicaksono', 'Kudus', '2012-01-22', 'Laki-Laki', 'Islam', 5),
(50, '1424', '0118437666', 'Muhammad Bayu Ardiansyah', 'Kudus', '2011-12-29', 'Laki-Laki', 'Islam', 5),
(51, '1459', '0116878476', 'Muhammad Dafit Ariyanto', 'Kudus', '2011-10-21', 'Laki-Laki', 'Islam', 5),
(52, '1434', '0104689019', 'Muhammad Farel Hidayat', 'Kudus', '2010-11-23', 'Laki-Laki', 'Islam', 5),
(53, '1425', '0112507016', 'Muhammad Habibur Rohman', 'Kudus', '2011-04-12', 'Laki-Laki', 'Islam', 5),
(54, '1460', '0111676575', 'Muhammad Heriyanto', 'Kudus', '2011-05-25', 'Laki-Laki', 'Islam', 6),
(55, '1453', '0124261063', 'Muhammad Iqbal Ferdiansyah', 'Kudus', '2012-01-08', 'Laki-Laki', 'Islam', 4),
(56, '1475', '3142295665', 'Muhammad Iqbal Maulana', 'Kudus', '2014-05-09', 'Laki-Laki', 'Islam', 2),
(57, '1397', '0107582550', 'Muhammad Jauharul Maknun', 'Kudus', '2010-08-15', 'Laki-Laki', 'Islam', 6),
(58, '1426', '0112069174', 'Muhammad Kelvin Rifsiano', 'Kudus', '2011-10-04', 'Laki-Laki', 'Islam', 4),
(59, '1497', '0158597303', 'Muhammad Lutfi Ardianto', 'Kudus', '2015-02-03', 'Laki-Laki', 'Islam', 1),
(60, '1454', '0114007397', 'Muhammad Lutful Mazzidul Haris', 'Kudus', '2011-10-12', 'Laki-Laki', 'Islam', 4),
(61, '1414', '0109792658', 'Muhammad Maulana Farizqo', 'Kudus', '2010-07-14', 'Laki-Laki', 'Islam', 6),
(62, '1435', '0111818034', 'Muhammad Naufal Faris', 'Kudus', '2011-12-21', 'Laki-Laki', 'Islam', 4),
(63, '1476', '0147682969', 'Muhammad Putra Pratama Rizky Maghfiroh', 'Kudus', '2014-08-19', 'Laki-Laki', 'Islam', 2),
(64, '1463', '0121787273', 'Muhammad Rizky Nugroho', 'Kudus', '2012-11-10', 'Laki-Laki', 'Islam', 3),
(65, '1427', '0103336578', 'Muhammad Sirril Wafa', 'Kudus', '2010-12-09', 'Laki-Laki', 'Islam', 5),
(66, '1477', '0141526984', 'Muhammad Vino Bastian', 'Kudus', '2014-05-10', 'Laki-Laki', 'Islam', 2),
(67, '1478', '0142639096', 'Muhammad Zacky Al Haqim', 'Kudus', '2014-10-08', 'Laki-Laki', 'Islam', 2),
(68, '1955', '0114542957', 'Muklas Indra Adi Saputra', 'Kudus', '2011-10-05', 'Laki-Laki', 'Islam', 4),
(69, '1399', '0092361931', 'Nabila Irmalasari', 'Kudus', '2009-08-11', 'Perempuan', 'Islam', 6),
(70, '1479', '0141233684', 'Nafisa Anindita Putri', 'Kudus', '2014-02-20', 'Perempuan', 'Islam', 2),
(71, '1456', '3133418727', 'Noor Khazanah', 'Kudus', '2013-08-25', 'Perempuan', 'Islam', 3),
(72, '1480', '3147334090', 'Putri Salsabilla Rahma Zahra', 'Kudus', '2014-10-20', 'Perempuan', 'Islam', 2),
(73, '1441', '0114440736', 'Rahmatuzzahra Al Maghfira', 'Kudus', '2011-06-08', 'Perempuan', 'Islam', 5),
(74, '1428', '0102472336', 'Regina Khansa Balqis', 'Kudus', '2010-12-09', 'Perempuan', 'Islam', 5),
(75, '1438', '0125038433', 'Revano Andhika Wisnu Utama', 'Kudus', '2012-09-24', 'Laki-Laki', 'Islam', 4),
(76, '1429', '0119626592', 'Rian Dwi Ramadhan', 'Kudus', '2011-08-30', 'Laki-Laki', 'Islam', 5),
(77, '1415', '0102274743', 'Ridho Ardeansyah', 'Kudus', '2010-10-22', 'Laki-Laki', 'Islam', 6),
(78, '1498', '3156309146', 'Ridwan Maulana Akbar', 'Kudus', '2015-04-01', 'Laki-Laki', 'Islam', 1),
(79, '1430', '0105995773', 'Rizki Amellia', 'Kudus', '2011-02-05', 'Perempuan', 'Islam', 4),
(80, '1431', '0112160696', 'Rohmatul Tasnia', 'Kudus', '2011-06-22', 'Perempuan', 'Islam', 5),
(81, '1481', '3146250228', 'Sabrina Rahmadani', 'Pati', '2014-02-27', 'Perempuan', 'Islam', 2),
(82, '1482', '3136180066', 'Salwa Aqeela Khumairoh', 'Kudus', '2013-03-26', 'Perempuan', 'Islam', 2),
(83, '1444', '0124939065', 'Setyo Aji Pamungkas', 'Kudus', '2012-06-17', 'Laki-Laki', 'Islam', 4),
(84, '1483', '0145400055', 'Sheila Aurelia Ramdhani', 'Kudus', '2014-07-24', 'Perempuan', 'Islam', 2),
(85, '1457', '3131295681', 'Shelvy Amelia Damayanti', 'Kudus', '2013-09-26', 'Perempuan', 'Islam', 3),
(86, '1464', '0137544427', 'Sherli Octaviana Putri', 'Kudus', '2013-10-03', 'Perempuan', 'Islam', 3),
(87, '1499', '3150677976', 'Siti Fatimah', 'Kudus', '2015-02-16', 'Perempuan', 'Islam', 1),
(88, '1432', '0117915582', 'Syerlina Dewi Salsabila', 'Kudus', '2011-10-24', 'Perempuan', 'Islam', 5),
(89, '1465', '0138800245', 'Thomas Muhammad Jibril', 'Kudus', '2013-11-26', 'Laki-Laki', 'Islam', 3),
(90, '1500', '0134763891', 'Vania Kejora Saraswati', 'Jember', '2015-12-02', 'Perempuan', 'Islam', 1),
(91, '1458', '0122833036', 'Zahra Ainun Nizma', 'Kudus', '2012-05-09', 'Perempuan', 'Islam', 4),
(92, '1416', '0115798081', 'Zaki Noval Firmansyah', 'Kudus', '2011-09-27', 'Laki-Laki', 'Islam', 6),
(93, '1466', '3135817953', 'Zufar Assahban', 'Kudus', '2013-10-15', 'Laki-Laki', 'Islam', 3);

-- --------------------------------------------------------

--
-- Table structure for table `tahun_akademik`
--

CREATE TABLE `tahun_akademik` (
  `id` int(11) NOT NULL,
  `tahun_akademik` varchar(20) NOT NULL,
  `semester` varchar(20) NOT NULL,
  `status` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tahun_akademik`
--

INSERT INTO `tahun_akademik` (`id`, `tahun_akademik`, `semester`, `status`) VALUES
(1, '2021/2022', 'Ganjil', 'Aktif'),
(5, '2021/2022', 'Genap', 'Aktif');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `id` int(11) NOT NULL,
  `username` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `name` varchar(255) NOT NULL,
  `role_id` int(11) NOT NULL,
  `is_active` int(1) NOT NULL,
  `date_created` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`id`, `username`, `password`, `name`, `role_id`, `is_active`, `date_created`) VALUES
(1, 'admin', '$2y$10$spmPOX8iOiEhng9nppwWmegnUY/sc1PVqOZg5ODBzwUssr4Nxv0Dy', 'ADMIN', 1, 1, 1656171952),
(2, 'hilal', '$2y$10$7HdvbQmgjXuqODVaaZpBOu0v8soPARIP099CxoPe7MGIrgGGZ.7Jq', 'Hilal Rafi', 2, 1, 1656171781),
(3, 'rafi', '$2y$10$DAHqn2o6hZOfFCOzvIBR9unaCoPO1KpMxe6MjFkU56im2nXZVe8mu', 'Rafi Iqbal', 2, 1, 1656423562),
(4, 'iqbal', '$2y$10$DqG0JPfvq5/GNnYwUyWZ5Oz/Y9cJnUoAqRIF0fsrJ4F1X5RSWeYFm', 'iqbal iqbal', 2, 1, 1658481454);

-- --------------------------------------------------------

--
-- Table structure for table `user_access_menu`
--

CREATE TABLE `user_access_menu` (
  `id` int(11) NOT NULL,
  `role_id` int(11) NOT NULL,
  `menu_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `user_access_menu`
--

INSERT INTO `user_access_menu` (`id`, `role_id`, `menu_id`) VALUES
(1, 1, 1),
(2, 1, 2),
(3, 1, 3),
(4, 1, 4),
(5, 2, 1),
(6, 1, 5),
(7, 1, 6),
(8, 1, 7),
(9, 1, 8),
(10, 1, 9),
(11, 1, 10),
(12, 1, 11),
(13, 1, 12),
(14, 1, 13),
(15, 1, 14),
(16, 2, 5),
(17, 2, 11),
(18, 2, 12),
(20, 2, 7);

-- --------------------------------------------------------

--
-- Table structure for table `user_menu`
--

CREATE TABLE `user_menu` (
  `id` int(11) NOT NULL,
  `menu` varchar(128) NOT NULL,
  `url` varchar(128) NOT NULL,
  `icon` varchar(128) NOT NULL,
  `is_active` int(1) NOT NULL,
  `parent` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `user_menu`
--

INSERT INTO `user_menu` (`id`, `menu`, `url`, `icon`, `is_active`, `parent`) VALUES
(1, 'Dashboard', 'dashboard', 'fas fa-fw fa-tachometer-alt', 1, 0),
(2, 'Data Pengguna', '#', 'fas fa-fw fa-user', 1, 0),
(3, 'Data Siswa', 'siswa', 'fas fa-fw fa-user', 1, 2),
(4, 'Data Guru', 'guru', 'fas fa-fw fa-user', 1, 2),
(5, 'Data Akademik', '#', 'fas fa-fw fa-book', 1, 0),
(6, 'Mata Pelajaran', 'mapel', 'fas fa-fw fa-clipboard', 1, 5),
(7, 'Jadwal Pelajaran', 'jadwal', 'fas fa-fw fa-calendar-week', 1, 5),
(8, 'Rombongan Belajar', 'rombel', 'fas fa-fw fa-door-open', 1, 5),
(9, 'Tahun Akademik', 'tahun_akademik', 'fas fa-fw fa-calendar-alt', 1, 5),
(10, 'Info Sekolah', 'sekolah', 'fas fa-fw fa-school', 1, 0),
(11, 'Laporan Nilai', 'nilai', 'fas fa-fw fa-file-alt', 1, 0),
(12, 'Cetak Raport', 'raport', 'fas fa-fw fa-print', 1, 0),
(13, 'Pengaturan', '#', 'fas fa-fw fa-wrench', 1, 0),
(14, 'User', 'users', 'fas fa-fw fa-user', 1, 13);

-- --------------------------------------------------------

--
-- Table structure for table `user_role`
--

CREATE TABLE `user_role` (
  `id` int(11) NOT NULL,
  `role` varchar(128) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `user_role`
--

INSERT INTO `user_role` (`id`, `role`) VALUES
(1, 'admin'),
(2, 'guru');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `guru`
--
ALTER TABLE `guru`
  ADD PRIMARY KEY (`id_guru`);

--
-- Indexes for table `info_sekolah`
--
ALTER TABLE `info_sekolah`
  ADD PRIMARY KEY (`id_sekolah`);

--
-- Indexes for table `jadwal`
--
ALTER TABLE `jadwal`
  ADD PRIMARY KEY (`id_jadwal`),
  ADD KEY `tahun_akademik_id` (`tahun_akademik_id`),
  ADD KEY `guru_id` (`guru_id`),
  ADD KEY `mapel_id` (`mapel_id`),
  ADD KEY `rombel_id_jadwal` (`rombel_id`);

--
-- Indexes for table `mapel`
--
ALTER TABLE `mapel`
  ADD PRIMARY KEY (`id_mapel`);

--
-- Indexes for table `nilai`
--
ALTER TABLE `nilai`
  ADD PRIMARY KEY (`id_nilai`),
  ADD KEY `siswa_id` (`siswa_id`),
  ADD KEY `rombel_id_nilai` (`rombel_id`),
  ADD KEY `mapel_id_nilai` (`mapel_id`),
  ADD KEY `tahun_akademik_id_nilai` (`tahun_akademik_id`);

--
-- Indexes for table `rombel`
--
ALTER TABLE `rombel`
  ADD PRIMARY KEY (`id_rombel`);

--
-- Indexes for table `siswa`
--
ALTER TABLE `siswa`
  ADD PRIMARY KEY (`id_siswa`),
  ADD KEY `rombel_id` (`rombel_id`);

--
-- Indexes for table `tahun_akademik`
--
ALTER TABLE `tahun_akademik`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `user_access_menu`
--
ALTER TABLE `user_access_menu`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `user_menu`
--
ALTER TABLE `user_menu`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `user_role`
--
ALTER TABLE `user_role`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `guru`
--
ALTER TABLE `guru`
  MODIFY `id_guru` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;

--
-- AUTO_INCREMENT for table `info_sekolah`
--
ALTER TABLE `info_sekolah`
  MODIFY `id_sekolah` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `jadwal`
--
ALTER TABLE `jadwal`
  MODIFY `id_jadwal` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=194;

--
-- AUTO_INCREMENT for table `mapel`
--
ALTER TABLE `mapel`
  MODIFY `id_mapel` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT for table `nilai`
--
ALTER TABLE `nilai`
  MODIFY `id_nilai` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=264;

--
-- AUTO_INCREMENT for table `rombel`
--
ALTER TABLE `rombel`
  MODIFY `id_rombel` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `siswa`
--
ALTER TABLE `siswa`
  MODIFY `id_siswa` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=94;

--
-- AUTO_INCREMENT for table `tahun_akademik`
--
ALTER TABLE `tahun_akademik`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `user_access_menu`
--
ALTER TABLE `user_access_menu`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=22;

--
-- AUTO_INCREMENT for table `user_menu`
--
ALTER TABLE `user_menu`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT for table `user_role`
--
ALTER TABLE `user_role`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `jadwal`
--
ALTER TABLE `jadwal`
  ADD CONSTRAINT `guru_id` FOREIGN KEY (`guru_id`) REFERENCES `guru` (`id_guru`) ON DELETE SET NULL ON UPDATE CASCADE,
  ADD CONSTRAINT `mapel_id` FOREIGN KEY (`mapel_id`) REFERENCES `mapel` (`id_mapel`) ON DELETE SET NULL ON UPDATE CASCADE,
  ADD CONSTRAINT `rombel_id_jadwal` FOREIGN KEY (`rombel_id`) REFERENCES `rombel` (`id_rombel`) ON DELETE SET NULL ON UPDATE CASCADE,
  ADD CONSTRAINT `tahun_akademik_id` FOREIGN KEY (`tahun_akademik_id`) REFERENCES `tahun_akademik` (`id`) ON DELETE SET NULL ON UPDATE CASCADE;

--
-- Constraints for table `nilai`
--
ALTER TABLE `nilai`
  ADD CONSTRAINT `mapel_id_nilai` FOREIGN KEY (`mapel_id`) REFERENCES `mapel` (`id_mapel`) ON DELETE SET NULL ON UPDATE CASCADE,
  ADD CONSTRAINT `rombel_id_nilai` FOREIGN KEY (`rombel_id`) REFERENCES `rombel` (`id_rombel`) ON DELETE SET NULL ON UPDATE CASCADE,
  ADD CONSTRAINT `siswa_id` FOREIGN KEY (`siswa_id`) REFERENCES `siswa` (`id_siswa`) ON DELETE SET NULL ON UPDATE CASCADE,
  ADD CONSTRAINT `tahun_akademik_id_nilai` FOREIGN KEY (`tahun_akademik_id`) REFERENCES `tahun_akademik` (`id`) ON DELETE SET NULL ON UPDATE CASCADE;

--
-- Constraints for table `siswa`
--
ALTER TABLE `siswa`
  ADD CONSTRAINT `rombel_id` FOREIGN KEY (`rombel_id`) REFERENCES `rombel` (`id_rombel`) ON DELETE SET NULL ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
