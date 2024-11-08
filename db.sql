-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Dec 30, 2022 at 02:14 AM
-- Server version: 10.4.24-MariaDB
-- PHP Version: 8.1.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `cutodi`
--

-- --------------------------------------------------------

--
-- Table structure for table `activities`
--

CREATE TABLE `activities` (
  `id_activities` int(11) NOT NULL,
  `id_dokumen` varchar(255) NOT NULL,
  `log` varchar(255) NOT NULL,
  `activity_code` int(1) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `activities`
--

INSERT INTO `activities` (`id_activities`, `id_dokumen`, `log`, `activity_code`, `created_at`) VALUES
(1, 'DOC/CUS-1', 'Anton telah mengunggah Dokumen ini', 2, '2022-11-25 06:52:38'),
(2, 'DOC/CUS-1', 'Budi telah mengapprove Dokumen ini', 1, '2022-11-25 06:55:06'),
(3, 'DOC/CUS-2', 'Anton telah mengunggah Dokumen ini', 2, '2022-11-25 07:55:03'),
(4, 'DOC/CUS-2', 'Budi telah mereject Dokumen ini', 0, '2022-11-25 07:57:05'),
(5, 'DOC/CUS-2', 'Anton telah memperbarui Dokumen ini', 3, '2022-11-25 07:59:01'),
(6, 'DOC/CUS-1', 'Anton telah memperbarui Dokumen ini', 3, '2022-11-25 08:08:46'),
(7, 'DOC/CUS-2', 'Budi telah mengapprove Dokumen ini', 1, '2022-11-25 08:10:54'),
(8, 'DOC/CUS-1', 'Budi telah mengapprove Dokumen ini', 1, '2022-11-25 08:11:00'),
(9, 'DOC/CUS-2', 'Anton telah memperbarui Dokumen ini', 3, '2022-11-25 08:14:31'),
(10, 'DOC/CUS-1', 'Anton telah memperbarui Dokumen ini', 3, '2022-11-25 08:14:55'),
(11, 'DOC/CUS-2', 'Budi telah mengapprove Dokumen ini', 1, '2022-11-29 01:00:40'),
(12, 'DOC/CUS-1', 'Budi telah mengapprove Dokumen ini', 1, '2022-11-29 01:00:47'),
(13, 'DOC/CUS-3', 'Anton telah mengunggah Dokumen ini', 2, '2022-12-01 10:09:10'),
(14, 'DOC/CUS-4', 'Anton telah mengunggah Dokumen ini', 2, '2022-12-01 10:10:23'),
(15, 'DOC/CUS-5', 'Anton telah mengunggah Dokumen ini', 2, '2022-12-01 10:11:58'),
(16, 'DOC/CUS-6', 'Anton telah mengunggah Dokumen ini', 2, '2022-12-01 10:13:26'),
(17, 'DOC/CUS-6', 'Budi telah mengapprove Dokumen ini', 1, '2022-12-01 10:13:42'),
(18, 'DOC/CUS-3', 'Budi telah mengapprove Dokumen ini', 1, '2022-12-01 10:13:48'),
(19, 'DOC/CUS-4', 'Budi telah mengapprove Dokumen ini', 1, '2022-12-01 10:13:52'),
(20, 'DOC/CUS-5', 'Budi telah mengapprove Dokumen ini', 1, '2022-12-01 10:13:57'),
(21, 'DOC/CUS-7', 'Anton telah mengunggah Dokumen ini', 2, '2022-12-01 10:17:27'),
(22, 'DOC/CUS-8', 'Anton telah mengunggah Dokumen ini', 2, '2022-12-01 10:21:14'),
(23, 'DOC/CUS-7', 'Budi telah mengapprove Dokumen ini', 1, '2022-12-01 10:21:49'),
(24, 'DOC/CUS-6', 'Anton telah memperbarui Dokumen ini', 3, '2022-12-02 00:27:13'),
(25, 'DOC/CUS-6', 'Budi telah mengapprove Dokumen ini', 1, '2022-12-02 00:27:56'),
(26, 'DOC/CUS-9', 'Anton telah mengunggah Dokumen ini', 2, '2022-12-02 00:55:57'),
(27, 'DOC/CUS-9', 'Budi telah mengapprove Dokumen ini', 1, '2022-12-02 00:56:48'),
(28, 'DOC/CUS-8', 'Budi telah mereject Dokumen ini', 0, '2022-12-02 00:57:14'),
(29, 'DOC/CUS-10', 'Anton telah mengunggah Dokumen ini', 2, '2022-12-20 09:07:47');

-- --------------------------------------------------------

--
-- Table structure for table `comments`
--

CREATE TABLE `comments` (
  `id_comment` int(11) NOT NULL,
  `id_user` int(11) NOT NULL,
  `id_dokumen` varchar(255) NOT NULL,
  `comment` text NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `comments`
--

INSERT INTO `comments` (`id_comment`, `id_user`, `id_dokumen`, `comment`, `created_at`) VALUES
(1, 3, 'DOC/CUS-1', 'Boleh di cek bu', '2022-11-25 06:53:23'),
(2, 4, 'DOC/CUS-1', 'Mantap', '2022-11-25 06:55:18'),
(3, 5, 'DOC/CUS-1', 'OKE', '2022-11-25 07:29:02'),
(4, 4, 'DOC/CUS-2', 'Ini revisi ya', '2022-11-25 07:55:48'),
(5, 3, 'DOC/CUS-2', 'syapp', '2022-11-25 08:01:57');

-- --------------------------------------------------------

--
-- Table structure for table `docs`
--

CREATE TABLE `docs` (
  `id_dokumen` varchar(255) NOT NULL,
  `nama_dokumen` varchar(255) NOT NULL,
  `dokumen` varchar(255) NOT NULL,
  `nasabah` varchar(255) NOT NULL,
  `jenis_perjanjian` varchar(255) NOT NULL,
  `nomor_perjanjian` varchar(255) NOT NULL,
  `nomor_perjanjian_terkait` varchar(255) DEFAULT NULL,
  `tanggal_perjanjian` varchar(255) NOT NULL,
  `tanggal_berakhir` varchar(255) NOT NULL,
  `batas_review` varchar(255) NOT NULL,
  `status` varchar(255) NOT NULL,
  `approver` int(11) NOT NULL,
  `is_approved` int(11) NOT NULL DEFAULT 0,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `updated_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `docs`
--

INSERT INTO `docs` (`id_dokumen`, `nama_dokumen`, `dokumen`, `nasabah`, `jenis_perjanjian`, `nomor_perjanjian`, `nomor_perjanjian_terkait`, `tanggal_perjanjian`, `tanggal_berakhir`, `batas_review`, `status`, `approver`, `is_approved`, `created_at`, `updated_at`) VALUES
('DOC/CUS-1', 'Perjanjian Kerja Waktu Tertentu', '1669364095_Bab_3_algo_1.pdf', 'Penggadaian', 'EBA (Efek Beragun Aset)', 'B.345-DIS/CUS/05/2012', '-', '2022-11-01', '2024-11-01', '2024-10-01', 'Berlaku', 4, 1, '2022-11-25 06:52:38', '2022-11-29 01:00:47'),
('DOC/CUS-10', 'Perjanjian 000', '1671527267_LAPORAN AKHIR (cad).pdf', 'sda', 'KPD (Kontrak Pengelolaan Dana)', 'sa', 'sda', '2021-07-14', '2022-12-16', '2022-11-16', 'Tidak Berlaku', 4, 0, '2022-12-20 09:07:47', '2022-12-20 09:07:47'),
('DOC/CUS-2', 'Perjanjian Antara Nasabah', '1669363142_1669362903_Summary (1).pdf', 'Kita', 'Selling Agent', 'B.345-DIS/CUS/05/2012', '006/LGL/AJRI-PKS/II/2016', '2020-11-25', '2022-12-03', '2022-11-03', 'Tidak Berlaku', 4, 1, '2022-11-25 07:55:03', '2022-11-29 01:00:40'),
('DOC/CUS-3', 'Perjanjian 12', '1669889350_Pert2_Act1_HansEvan_12119740.pdf', 'Algino', 'Reksadana', 'B.125-DIS/CUS/05/2016', '001/LGL/AJRI-PKS/II/2022', '2022-07-14', '2024-06-01', '2024-05-01', 'Berlaku', 4, 1, '2022-12-01 10:09:10', '2022-12-01 10:13:48'),
('DOC/CUS-4', 'Perjanjian 6', '1669889423_Ujian_HansEvanTatipata_12119740.pdf', 'Nick Tower', 'KPD (Kontrak Pengelolaan Dana)', 'B.762-CIS/CUS/05/2021', '-', '2022-07-21', '2024-06-01', '2024-05-01', 'Berlaku', 4, 1, '2022-12-01 10:10:22', '2022-12-01 10:13:52'),
('DOC/CUS-5', 'Perjanjian 91', '1669889518_Ujian_Muhammad Dava Hatami_14118529_3KA08.pdf', '-', 'SLA (Service Level Agreement)', '-', '', '2022-11-16', '2024-09-17', '2024-08-17', 'Berlaku', 4, 1, '2022-12-01 10:11:58', '2022-12-01 10:13:56'),
('DOC/CUS-6', 'Perjanjian 00', '1669940833_Pert_3.pdf', '-', 'Safekeeping', '-', '-', '2019-06-01', '2021-06-15', '2021-05-15', 'Tidak Berlaku', 4, 1, '2022-12-01 10:13:26', '2022-12-02 00:27:56'),
('DOC/CUS-7', 'Perjanjian 111', '1669889848_Account Management.pdf', 'Tango', 'Selling Agent', 'T312', '-', '2022-03-10', '2024-06-07', '2024-05-07', 'Berlaku', 4, 1, '2022-12-01 10:17:27', '2022-12-01 10:21:49'),
('DOC/CUS-8', 'Perjanjian 999', '1669890074_Summary.pdf', 'Cardo inc.', 'Ops Memo', 'B.345-DIS/CUS/05/2012', '006/LGL/AJRI-PKS/II/2016', '2022-12-31', '2024-12-31', '2024-12-01', 'Tidak Berlaku', 4, 2, '2022-12-01 10:21:14', '2022-12-02 00:57:14'),
('DOC/CUS-9', 'Perjanian 01', '1669942558_Hans Evan Tatipata-resume (2).pdf', '-', 'Safekeeping', 'B.345-DIS/CUS/05/2012', '', '2022-12-02', '2024-12-02', '2024-11-02', 'Berlaku', 4, 1, '2022-12-02 00:55:57', '2022-12-02 00:56:48');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `username` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `role` varchar(255) NOT NULL,
  `reset_pass` int(1) NOT NULL DEFAULT 1,
  `status` int(1) NOT NULL DEFAULT 1,
  `login_time` int(3) NOT NULL DEFAULT 0,
  `is_approved` int(1) NOT NULL DEFAULT 0,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `updated_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `oldrole` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `username`, `password`, `role`, `reset_pass`, `status`, `login_time`, `is_approved`, `created_at`, `updated_at`, `oldrole`) VALUES
(1, 'Super Admin', 'superadmin', '$2y$10$Ziq7Yga2IyNa6WpyZmf/2.qd.Xtk0h1bYDNw01nTC3QNv5E/n3pbe', 'superadmin', 0, 1, 0, 1, '2022-11-25 04:11:19', '2022-11-25 04:11:19', 'superadmin'),
(2, 'Admin', 'admin', '$2y$10$tgeJE8LL06MsfUh1slS6V.BVukksLTef8cCkRaeAnWHzheayVR1xm', 'admin', 0, 1, 0, 1, '2022-11-25 04:11:45', '2022-11-25 04:11:45', 'admin'),
(3, 'Anton', 'anton', '$2y$10$qogaqMDpzsQ.tkna7CaWieGXA4mk36G932MnkCdt6gESujqv1wJ/y', 'Maker', 0, 1, 0, 1, '2022-11-25 06:45:13', '2022-11-25 06:47:15', 'Maker'),
(4, 'Budi', 'budi', '$2y$10$kkhOAH00YOsrM94yiuL2DObVKu7w6ieprUSdJekjgBI.nkFJGTbv2', 'Approver', 0, 1, 0, 1, '2022-11-25 06:45:41', '2022-11-25 06:47:18', 'Approver'),
(5, 'Charlie', 'charlie', '$2y$10$kWkDPfnR2v3OjP1E9/wDmOPACGzKdrWQhnq1YC.6O/C7Iyhg8IWeu', 'Compliance', 1, 1, 0, 1, '2022-11-25 06:46:02', '2022-11-25 06:47:20', 'Compliance'),
(6, 'Delta', 'delta', '$2y$10$ZMdRq/dxEUB7MP0/WUcGUOzQqE/RQ2GzgFEuHKvrZCLyhQGgTpD9G', 'Operation', 1, 1, 0, 1, '2022-11-25 06:46:15', '2022-11-25 06:47:22', 'Operation'),
(7, 'Eko', 'eko', '$2y$10$VIUQGo58gbxWxUeNqRlchuaSDk8VZhlq02xr1RMOlRfvp1J3TMhXC', 'Approver', 1, 2, 3, 1, '2022-11-25 06:55:51', '2022-12-01 09:05:53', 'Approver'),
(8, 'Foxfrot', 'foxftrot', '$2y$10$Zr9GhQoFZyMbndT4EQP7DOXV9BIiVrNcapd4pxqpuMjZEcelsgSAK', 'Operation', 1, 1, 0, 0, '2022-12-01 08:57:11', '2022-12-01 08:57:11', 'Operation');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `activities`
--
ALTER TABLE `activities`
  ADD PRIMARY KEY (`id_activities`);

--
-- Indexes for table `comments`
--
ALTER TABLE `comments`
  ADD PRIMARY KEY (`id_comment`);

--
-- Indexes for table `docs`
--
ALTER TABLE `docs`
  ADD PRIMARY KEY (`id_dokumen`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `username` (`username`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `activities`
--
ALTER TABLE `activities`
  MODIFY `id_activities` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=30;

--
-- AUTO_INCREMENT for table `comments`
--
ALTER TABLE `comments`
  MODIFY `id_comment` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
