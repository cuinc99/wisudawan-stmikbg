-- phpMyAdmin SQL Dump
-- version 4.7.7
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: Feb 07, 2018 at 07:31 AM
-- Server version: 10.1.30-MariaDB
-- PHP Version: 7.1.13

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `wisu`
--

-- --------------------------------------------------------

--
-- Table structure for table `admins`
--

CREATE TABLE `admins` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `password` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `admins`
--

INSERT INTO `admins` (`id`, `name`, `email`, `password`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 'Dian', 'dian@gmail.com', '$2y$10$QczbHP3TStfAUUNvye2k0OB0VswJqs4RSwtpxl6Z3X1P85IBBrKuG', 'nNS4avYGmHJR8CoG0Bmnp3GcTCcRpJtIQlKT4xpm0vtsHQFosicyup9j5JgO', '2018-02-05 21:50:16', '2018-02-05 21:50:16'),
(2, 'Wildan', 'wildans.ims@gmail.com', '$2y$10$urnkegZAlKHWtuQ0faEHzu4dXFQnUWlX73ZyBhpW9ETUHyniOOtPm', 'JpHV9hEq9Wr6XarBTI638dYWiTV6EQEMqhCnqPzx5XnxsvBJ99VfmTP8hmyf', '2018-02-05 22:00:23', '2018-02-05 22:00:23');

-- --------------------------------------------------------

--
-- Table structure for table `admin_password_resets`
--

CREATE TABLE `admin_password_resets` (
  `email` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `angkatans`
--

CREATE TABLE `angkatans` (
  `id` int(10) UNSIGNED NOT NULL,
  `tahun` int(11) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `dosens`
--

CREATE TABLE `dosens` (
  `id` int(10) UNSIGNED NOT NULL,
  `nik` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `nama` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `migrations`
--

CREATE TABLE `migrations` (
  `id` int(10) UNSIGNED NOT NULL,
  `migration` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(17, '2017_11_24_052735_create_admins_table', 1),
(18, '2017_11_24_052736_create_admin_password_resets_table', 1),
(19, '2017_11_24_053035_create_wisudawans_table', 1),
(20, '2017_11_24_053036_create_wisudawan_password_resets_table', 1),
(21, '2017_11_27_015923_create_prodis_table', 1),
(22, '2017_11_27_070641_create_dosens_table', 1),
(23, '2017_11_27_080828_create_angkatans_table', 1),
(24, '2018_01_17_084938_create_settings_table', 1);

-- --------------------------------------------------------

--
-- Table structure for table `prodis`
--

CREATE TABLE `prodis` (
  `id` int(10) UNSIGNED NOT NULL,
  `alias` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `nama` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `gelar` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `kampus` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `color` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `settings`
--

CREATE TABLE `settings` (
  `id` int(10) UNSIGNED NOT NULL,
  `template_for` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `home_judul` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `home_deskripsi` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `home_tanggal` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `intro_judul` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `intro_deskripsi` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `terbaik_judul` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `berprestasi_judul` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `stmik_judul` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `stmik_deskripsi` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `stiba_judul` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `stiba_deskripsi` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `settings`
--

INSERT INTO `settings` (`id`, `template_for`, `home_judul`, `home_deskripsi`, `home_tanggal`, `intro_judul`, `intro_deskripsi`, `terbaik_judul`, `berprestasi_judul`, `stmik_judul`, `stmik_deskripsi`, `stiba_judul`, `stiba_deskripsi`, `created_at`, `updated_at`) VALUES
(1, 'stmikstiba', 'RAPAT SENAT TERBUKA', 'DALAM RANGKA WISUDA KE-XXVII DAN DIES NATALIS KE-XXX STMIK BUMIGORA MATARAM WISUDA KE-VI DAN DIES NATALIS KE-VI STIBA BUMIGORA MATARAM', 'MATARAM, 12 OKTOBER 2017', 'WISUDA & DIES NATALIS', '- STMIK BUMIGORA MATARAM & STIBA BUMIGORA MATARAM -', 'WISUDAWAN TERBAIK', 'WISUDAWAN BERPRESTASI', 'STMIK BUMIGORA MATARAM', 'WISUDA KE-XXVII & DIES NATALIS KE-XXX', 'STIBA BUMIGORA MATARAM', 'WISUDA KE-IV & DIES NATALIS KE-IV', '2018-02-05 21:48:29', '2018-02-05 21:48:29');

-- --------------------------------------------------------

--
-- Table structure for table `wisudawans`
--

CREATE TABLE `wisudawans` (
  `id` int(10) UNSIGNED NOT NULL,
  `nim` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `password` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `p` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `nama` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `tempat_lahir` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `tanggal_lahir` date NOT NULL,
  `alamat` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `hp` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `ipk` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `judul` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `prodi_id` int(11) NOT NULL,
  `angkatan_id` int(11) NOT NULL,
  `dosen_id` int(11) NOT NULL,
  `photo` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `terbaik` tinyint(1) NOT NULL DEFAULT '0',
  `berprestasi` tinyint(1) NOT NULL DEFAULT '0',
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `wisudawan_password_resets`
--

CREATE TABLE `wisudawan_password_resets` (
  `email` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admins`
--
ALTER TABLE `admins`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `admins_email_unique` (`email`);

--
-- Indexes for table `admin_password_resets`
--
ALTER TABLE `admin_password_resets`
  ADD KEY `admin_password_resets_email_index` (`email`),
  ADD KEY `admin_password_resets_token_index` (`token`);

--
-- Indexes for table `angkatans`
--
ALTER TABLE `angkatans`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `dosens`
--
ALTER TABLE `dosens`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `prodis`
--
ALTER TABLE `prodis`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `settings`
--
ALTER TABLE `settings`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `wisudawans`
--
ALTER TABLE `wisudawans`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `wisudawans_nim_unique` (`nim`);

--
-- Indexes for table `wisudawan_password_resets`
--
ALTER TABLE `wisudawan_password_resets`
  ADD KEY `wisudawan_password_resets_email_index` (`email`),
  ADD KEY `wisudawan_password_resets_token_index` (`token`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admins`
--
ALTER TABLE `admins`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `angkatans`
--
ALTER TABLE `angkatans`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `dosens`
--
ALTER TABLE `dosens`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=25;

--
-- AUTO_INCREMENT for table `prodis`
--
ALTER TABLE `prodis`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `settings`
--
ALTER TABLE `settings`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `wisudawans`
--
ALTER TABLE `wisudawans`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
