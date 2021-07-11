-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: Jul 11, 2021 at 09:22 AM
-- Server version: 10.4.19-MariaDB
-- PHP Version: 7.4.20

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `siprakerin`
--

-- --------------------------------------------------------

--
-- Table structure for table `absensis`
--

CREATE TABLE `absensis` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `tanggal_absensi` date NOT NULL,
  `status` enum('masuk','tidak masuk','belum disetujui') COLLATE utf8mb4_unicode_ci NOT NULL,
  `user_id` bigint(20) UNSIGNED NOT NULL,
  `dudi_id` bigint(20) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `admins`
--

CREATE TABLE `admins` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `nama_lengkap` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `title` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `jabatan` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `user_id` bigint(20) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `admins`
--

INSERT INTO `admins` (`id`, `nama_lengkap`, `title`, `jabatan`, `user_id`, `created_at`, `updated_at`) VALUES
(1, 'Irfan Mas\'ud', 'S2', 'Kepala Sekolah', 8, '2021-07-10 22:34:14', '2021-07-10 22:34:14');

-- --------------------------------------------------------

--
-- Table structure for table `documents`
--

CREATE TABLE `documents` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `nama_dokumen` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `file` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `diskripsi` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `documents`
--

INSERT INTO `documents` (`id`, `nama_dokumen`, `file`, `diskripsi`, `created_at`, `updated_at`) VALUES
(1, 'Keterangan Sakit', 'document//tmp/phpRZT7u8', '<p>Cek ketarngan</p>', '2021-07-10 22:03:28', '2021-07-10 22:03:28'),
(2, 'Keterangan Sehat 2', 'document/keterangan-sehat-2.pdf', '<p>Test saja update</p>', '2021-07-10 22:04:29', '2021-07-10 22:14:56'),
(3, 'Test Kehamilan', 'document/test-kehamilan.pdf', '<p>Test Upload</p>', '2021-07-10 22:06:54', '2021-07-10 22:14:32'),
(4, 'Test Ketrangan sakit', 'document/test-ketrangan-sakit.pdf', '<p><span style=\"font-family: \'Open Sans\', Arial, sans-serif; font-size: 14px; text-align: justify; background-color: #ffffff;\">It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout. The point of using Lorem Ipsum is that it has a more-or-less normal distribution of letters, as opposed to using \'Content here, content here\', making it look like readable English. Many desktop publishing packages and web page editors now use Lorem Ipsum as their default model text, and a search for \'lorem ipsum\' will uncover many web sites still in their infancy. Various versions have evolved over the years, sometimes by accident, sometimes on purpose (injected humour and the like).</span></p>', '2021-07-10 22:07:55', '2021-07-10 22:16:25'),
(5, 'Contoh document surat keterangan sehat', 'document/contoh-document-surat-keterangan-sehat.pdf', '<p>Ini diskripsinya dari surat keterangan sehat</p>', '2021-07-10 22:30:35', '2021-07-10 22:30:35');

-- --------------------------------------------------------

--
-- Table structure for table `dudis`
--

CREATE TABLE `dudis` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `nama_perusahaan` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `nama_direktur` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `telepon` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `alamat` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `user_id` bigint(20) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `dudis`
--

INSERT INTO `dudis` (`id`, `nama_perusahaan`, `nama_direktur`, `telepon`, `alamat`, `user_id`, `created_at`, `updated_at`) VALUES
(1, 'Harvasoft', 'Abd. Asis', '081', 'Bangkalan, Tanah Merah', 5, '2021-07-01 22:39:19', '2021-07-01 22:39:19'),
(2, 'Tanah Merah Jaya', 'Abd. Asis', '081', 'Tanah Merah, Bangkalan', 6, '2021-07-08 00:35:04', '2021-07-08 00:35:04');

-- --------------------------------------------------------

--
-- Table structure for table `dudi_siswa`
--

CREATE TABLE `dudi_siswa` (
  `siswa_id` bigint(20) UNSIGNED NOT NULL,
  `dudi_id` bigint(20) UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `dudi_siswa`
--

INSERT INTO `dudi_siswa` (`siswa_id`, `dudi_id`) VALUES
(2, 1),
(3, 2);

-- --------------------------------------------------------

--
-- Table structure for table `failed_jobs`
--

CREATE TABLE `failed_jobs` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `uuid` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `connection` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `queue` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `payload` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `exception` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `failed_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `jurusans`
--

CREATE TABLE `jurusans` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `kode_jurusan` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `nama_jurusan` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `dibuat_oleh` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `diupdate_oleh` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `jurusans`
--

INSERT INTO `jurusans` (`id`, `kode_jurusan`, `nama_jurusan`, `dibuat_oleh`, `diupdate_oleh`, `created_at`, `updated_at`) VALUES
(1, 'AK', 'Akutansi', 'Abd. Asis', 'Abd. Asis', '2021-07-01 22:08:26', '2021-07-01 22:08:26'),
(2, 'TSM', 'Teknik Sepeda Motor', 'Abd. Asis', 'Abd. Asis', '2021-07-01 22:08:32', '2021-07-01 22:08:32');

-- --------------------------------------------------------

--
-- Table structure for table `laporans`
--

CREATE TABLE `laporans` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `siswa_id` bigint(20) UNSIGNED NOT NULL,
  `file_laporan` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `ukuran_file` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `laporans`
--

INSERT INTO `laporans` (`id`, `siswa_id`, `file_laporan`, `ukuran_file`, `created_at`, `updated_at`) VALUES
(2, 3, 'laporan/nur-hasanah.pdf', '95877', '2021-07-10 23:35:41', '2021-07-10 23:35:41');

-- --------------------------------------------------------

--
-- Table structure for table `migrations`
--

CREATE TABLE `migrations` (
  `id` int(10) UNSIGNED NOT NULL,
  `migration` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(1, '2014_10_12_000000_create_users_table', 1),
(2, '2014_10_12_100000_create_password_resets_table', 1),
(3, '2014_10_12_200000_add_two_factor_columns_to_users_table', 1),
(4, '2019_08_19_000000_create_failed_jobs_table', 1),
(5, '2019_12_14_000001_create_personal_access_tokens_table', 1),
(6, '2021_06_07_005523_create_admins_table', 1),
(7, '2021_06_07_005816_create_sessions_table', 1),
(8, '2021_06_07_223532_create_siswas_table', 1),
(9, '2021_06_13_030944_create_dudis_table', 1),
(10, '2021_06_13_141423_create_table_dudi_siswa', 1),
(11, '2021_07_02_040533_create_jurusans_table', 1),
(12, '2021_07_02_050235_create_absensis_table', 1),
(13, '2021_07_08_010221_create_nilais_table', 2),
(15, '2021_07_11_041645_create_documents_table', 3),
(16, '2021_07_11_054226_create_surat_keterangans_table', 4),
(17, '2021_07_11_061401_create_laporans_table', 5);

-- --------------------------------------------------------

--
-- Table structure for table `nilais`
--

CREATE TABLE `nilais` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `siswa_id` bigint(20) UNSIGNED NOT NULL,
  `perilaku` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `sikap` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `kerajinan` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `keterampilan` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `nilais`
--

INSERT INTO `nilais` (`id`, `siswa_id`, `perilaku`, `sikap`, `kerajinan`, `keterampilan`, `created_at`, `updated_at`) VALUES
(1, 3, '80', '90', '101', '90', '2021-07-08 01:00:03', '2021-07-10 20:56:58'),
(2, 2, '100', '89', '100', '74', '2021-07-10 20:50:28', '2021-07-10 20:56:52');

-- --------------------------------------------------------

--
-- Table structure for table `password_resets`
--

CREATE TABLE `password_resets` (
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `personal_access_tokens`
--

CREATE TABLE `personal_access_tokens` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `tokenable_type` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `tokenable_id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(64) COLLATE utf8mb4_unicode_ci NOT NULL,
  `abilities` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `last_used_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `sessions`
--

CREATE TABLE `sessions` (
  `id` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `user_id` bigint(20) UNSIGNED DEFAULT NULL,
  `ip_address` varchar(45) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `user_agent` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `payload` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `last_activity` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `sessions`
--

INSERT INTO `sessions` (`id`, `user_id`, `ip_address`, `user_agent`, `payload`, `last_activity`) VALUES
('vjRlmoeQYujviAYHmo0gw2r2RFeXTs0YGbptxjbp', NULL, '127.0.0.1', 'Mozilla/5.0 (X11; Linux x86_64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/91.0.4472.114 Safari/537.36', 'YTo0OntzOjM6InVybCI7YToxOntzOjg6ImludGVuZGVkIjtzOjMxOiJodHRwOi8vMTI3LjAuMC4xOjgwMDAvZGFzaGJvYXJkIjt9czo5OiJfcHJldmlvdXMiO2E6MTp7czozOiJ1cmwiO3M6Mjc6Imh0dHA6Ly8xMjcuMC4wLjE6ODAwMC9sb2dpbiI7fXM6NjoiX2ZsYXNoIjthOjI6e3M6Mzoib2xkIjthOjA6e31zOjM6Im5ldyI7YTowOnt9fXM6NjoiX3Rva2VuIjtzOjQwOiJPY3dCYWJkcWR6MUNSV2E4ZU9RNGFWSE5YZmpxdW5lUmp6bldxOFhMIjt9', 1625988138);

-- --------------------------------------------------------

--
-- Table structure for table `siswas`
--

CREATE TABLE `siswas` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `nama_lengkap` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `nis` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `jenis_kelamin` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `tempat_lahir` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `tanggal_lahir` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `alamat` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `jurusan` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `photo` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `user_id` bigint(20) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `siswas`
--

INSERT INTO `siswas` (`id`, `nama_lengkap`, `nis`, `jenis_kelamin`, `tempat_lahir`, `tanggal_lahir`, `alamat`, `jurusan`, `photo`, `user_id`, `created_at`, `updated_at`) VALUES
(2, 'Muhammad Rois', '37493759379574', 'Laki-laki', 'Bangkalan', '1998-12-19', 'Rongdurin, tanah Merah', 'Akutansi', 'default.png', 4, '2021-07-01 22:36:28', '2021-07-01 22:36:28'),
(3, 'Nur Hasanah', '3274937593759', 'Perempuan', 'Bangkalan', '1998-12-11', 'Bangkalan, Tanah Merah', 'Akutansi', 'default.png', 7, '2021-07-08 00:59:11', '2021-07-08 00:59:11');

-- --------------------------------------------------------

--
-- Table structure for table `surat_keterangans`
--

CREATE TABLE `surat_keterangans` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `siswa_id` bigint(20) UNSIGNED NOT NULL,
  `nama_surat` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `file` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `surat_keterangans`
--

INSERT INTO `surat_keterangans` (`id`, `siswa_id`, `nama_surat`, `file`, `created_at`, `updated_at`) VALUES
(1, 3, '/tmp/phpMenRjb', 'keterangan/hasil-antigen-230620210312-abdul-aziz.pdf', '2021-07-10 22:55:42', '2021-07-10 22:55:42'),
(2, 3, '/tmp/phpCIEnt7', 'keterangan/hasil-pcr-test-230620210659-yasirpdfpdf', '2021-07-10 23:08:38', '2021-07-10 23:08:38'),
(3, 3, '/tmp/phpgUTHY8', 'keterangan/nur-hasanah-surat-keterangan.pdf', '2021-07-10 23:10:29', '2021-07-10 23:10:29');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `two_factor_secret` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `two_factor_recovery_codes` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `current_team_id` bigint(20) UNSIGNED DEFAULT NULL,
  `profile_photo_path` varchar(2048) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `roles` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'admin',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `email_verified_at`, `password`, `two_factor_secret`, `two_factor_recovery_codes`, `remember_token`, `current_team_id`, `profile_photo_path`, `roles`, `created_at`, `updated_at`) VALUES
(1, 'Abd. Asis', 'id.abdasis@gmail.com', NULL, '$2y$10$x4Upq82Hzho8fStnwYbDeOncae1.Y.yXOxHpNzh2z2QJFHnp3Sm1S', NULL, NULL, NULL, NULL, NULL, 'admin', '2021-07-01 22:06:24', '2021-07-01 22:06:24'),
(4, 'Muhammad Rois', 'id.rois@gmail.com', NULL, '$2y$10$t1AflR7/u7IQ5GAw.5JXZ.LptD2LsA7EflG8YE0.wtUq.wCQwHpI.', NULL, NULL, NULL, NULL, NULL, 'siswa', '2021-07-01 22:36:28', '2021-07-01 22:36:28'),
(5, 'Harvasoft', 'harvasoft@gmail.com', NULL, '$2y$10$6QjUP7Z1oEImJy4uBYzbcO4Dg5xKxZTgwO5bKp.rgHPbD57iyCeo6', NULL, NULL, NULL, NULL, NULL, 'dudi', '2021-07-01 22:39:19', '2021-07-01 22:39:19'),
(6, 'Tanah Merah Jaya', 'tanahmerah@gmail.co', NULL, '$2y$10$wCRkzYFJBLyCI1yvU6y1Dueg75bLgH7B4uKpw9Ar..Z2qbhqAHrPy', NULL, NULL, NULL, NULL, NULL, 'dudi', '2021-07-08 00:35:03', '2021-07-08 00:35:03'),
(7, 'Nur Hasanah', 'nurhasanah@gmail.com', NULL, '$2y$10$0RCtMjIyHYwL3vH3PNPo4OrmlOQCgS0cIM8cZWuoCtZwuEJdoCYsm', NULL, NULL, NULL, NULL, NULL, 'siswa', '2021-07-08 00:59:11', '2021-07-08 00:59:11'),
(8, 'Irfan Mas\'ud', 'irfan@gmail.com', NULL, '$2y$10$uspiI1qIGRdoxoXyJZE6duPEytuQKUf9hGHW5L/3CZoEwBbVYVOXq', NULL, NULL, NULL, NULL, NULL, 'admin', '2021-07-10 22:34:14', '2021-07-10 22:34:14'),
(9, 'Admin', 'admin@gmail.com', NULL, '$2y$10$Ncz2RQ6y3InDB1p/lkAemOqwJj5666FJkIfW0YHGRLh8NLCyytVUC', NULL, NULL, NULL, NULL, NULL, 'admin', '2021-07-11 00:22:18', '2021-07-11 00:22:18');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `absensis`
--
ALTER TABLE `absensis`
  ADD PRIMARY KEY (`id`),
  ADD KEY `absensis_user_id_foreign` (`user_id`),
  ADD KEY `absensis_dudi_id_foreign` (`dudi_id`);

--
-- Indexes for table `admins`
--
ALTER TABLE `admins`
  ADD PRIMARY KEY (`id`),
  ADD KEY `admins_user_id_foreign` (`user_id`);

--
-- Indexes for table `documents`
--
ALTER TABLE `documents`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `dudis`
--
ALTER TABLE `dudis`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `dudi_siswa`
--
ALTER TABLE `dudi_siswa`
  ADD KEY `dudi_siswa_siswa_id_foreign` (`siswa_id`),
  ADD KEY `dudi_siswa_dudi_id_foreign` (`dudi_id`);

--
-- Indexes for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `failed_jobs_uuid_unique` (`uuid`);

--
-- Indexes for table `jurusans`
--
ALTER TABLE `jurusans`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `laporans`
--
ALTER TABLE `laporans`
  ADD PRIMARY KEY (`id`),
  ADD KEY `laporans_siswa_id_foreign` (`siswa_id`);

--
-- Indexes for table `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `nilais`
--
ALTER TABLE `nilais`
  ADD PRIMARY KEY (`id`),
  ADD KEY `nilais_siswa_id_foreign` (`siswa_id`);

--
-- Indexes for table `password_resets`
--
ALTER TABLE `password_resets`
  ADD KEY `password_resets_email_index` (`email`);

--
-- Indexes for table `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `personal_access_tokens_token_unique` (`token`),
  ADD KEY `personal_access_tokens_tokenable_type_tokenable_id_index` (`tokenable_type`,`tokenable_id`);

--
-- Indexes for table `sessions`
--
ALTER TABLE `sessions`
  ADD PRIMARY KEY (`id`),
  ADD KEY `sessions_user_id_index` (`user_id`),
  ADD KEY `sessions_last_activity_index` (`last_activity`);

--
-- Indexes for table `siswas`
--
ALTER TABLE `siswas`
  ADD PRIMARY KEY (`id`),
  ADD KEY `siswas_user_id_foreign` (`user_id`);

--
-- Indexes for table `surat_keterangans`
--
ALTER TABLE `surat_keterangans`
  ADD PRIMARY KEY (`id`),
  ADD KEY `surat_keterangans_siswa_id_foreign` (`siswa_id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `users_email_unique` (`email`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `absensis`
--
ALTER TABLE `absensis`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `admins`
--
ALTER TABLE `admins`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `documents`
--
ALTER TABLE `documents`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `dudis`
--
ALTER TABLE `dudis`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `jurusans`
--
ALTER TABLE `jurusans`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `laporans`
--
ALTER TABLE `laporans`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;

--
-- AUTO_INCREMENT for table `nilais`
--
ALTER TABLE `nilais`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `siswas`
--
ALTER TABLE `siswas`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `surat_keterangans`
--
ALTER TABLE `surat_keterangans`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `absensis`
--
ALTER TABLE `absensis`
  ADD CONSTRAINT `absensis_dudi_id_foreign` FOREIGN KEY (`dudi_id`) REFERENCES `dudis` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `absensis_user_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `admins`
--
ALTER TABLE `admins`
  ADD CONSTRAINT `admins_user_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `dudi_siswa`
--
ALTER TABLE `dudi_siswa`
  ADD CONSTRAINT `dudi_siswa_dudi_id_foreign` FOREIGN KEY (`dudi_id`) REFERENCES `dudis` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `dudi_siswa_siswa_id_foreign` FOREIGN KEY (`siswa_id`) REFERENCES `siswas` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `laporans`
--
ALTER TABLE `laporans`
  ADD CONSTRAINT `laporans_siswa_id_foreign` FOREIGN KEY (`siswa_id`) REFERENCES `siswas` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `nilais`
--
ALTER TABLE `nilais`
  ADD CONSTRAINT `nilais_siswa_id_foreign` FOREIGN KEY (`siswa_id`) REFERENCES `siswas` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `siswas`
--
ALTER TABLE `siswas`
  ADD CONSTRAINT `siswas_user_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `surat_keterangans`
--
ALTER TABLE `surat_keterangans`
  ADD CONSTRAINT `surat_keterangans_siswa_id_foreign` FOREIGN KEY (`siswa_id`) REFERENCES `siswas` (`id`) ON DELETE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
