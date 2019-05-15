-- phpMyAdmin SQL Dump
-- version 4.7.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: May 15, 2019 at 04:30 AM
-- Server version: 10.1.26-MariaDB
-- PHP Version: 7.1.9

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `petarung`
--

-- --------------------------------------------------------

--
-- Table structure for table `cardpemdas`
--

CREATE TABLE `cardpemdas` (
  `id` int(10) UNSIGNED NOT NULL,
  `desa` varchar(391) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `kec` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `nosertf` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `hak` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `luas` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `penggunaan` varchar(391) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `latlong` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `alamat` varchar(391) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `maprtrw` varchar(391) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `image` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `cardpemdas`
--

INSERT INTO `cardpemdas` (`id`, `desa`, `kec`, `nosertf`, `hak`, `luas`, `penggunaan`, `latlong`, `alamat`, `maprtrw`, `image`, `created_at`, `updated_at`) VALUES
(3, 'Baleharjo', 'Wonosari', '00070', 'Hak Pakai', '1403', '-', '-', '-', '-', '1557812381.pdf', '2019-05-13 19:38:21', '2019-05-13 22:39:41'),
(4, 'Wonosari', 'Wonosari', '00042', 'Hak Pakai', '658', '-', '-', '-', '-', '1557812716.pdf', '2019-05-13 19:40:35', '2019-05-13 22:45:16'),
(5, 'Kepek', 'Wonosari', '00023', 'Hak Pakai', '600', 'Dinas Kesehatan', '-7.96397 110.603485', 'Jl.Kolonel Sugiyono No.17,Purbosari,Wonosari', 'Permukiman', '1557812759.pdf', '2019-05-13 19:45:16', '2019-05-13 22:45:59'),
(6, 'Siraman', 'Wonosari', '00002', 'Hak Pakai', '507', 'Rumah Dinas Peternakan', '-', '-', '-', NULL, '2019-05-13 19:52:08', '2019-05-13 19:52:08'),
(7, 'Kepek', 'Wonosari', '00024', 'Hak Pakai', '927', 'Pom Bensin', '-', '-', '-', '1557812826.pdf', '2019-05-13 19:53:23', '2019-05-13 22:47:06'),
(8, 'Karangtengah', 'Wonosari', '00002', 'Hak Pakai', '479', '-', '-', '-', '-', '1557812871.pdf', '2019-05-13 19:55:01', '2019-05-13 22:47:51'),
(9, 'Wonosari', 'Wonosari', '00041', 'Hak Pakai', '11726', 'Pasar argosari', '-', '-', '-', '1557813066.pdf', '2019-05-13 20:01:17', '2019-05-13 22:51:07'),
(10, 'Kepek', 'Wonosari', '00026', 'Hak Pakai', '1356', '-', '-', '-', '-', '1557813115.pdf', '2019-05-13 20:12:19', '2019-05-13 22:51:55'),
(11, 'Wonosari', 'Wonosari', '00044', 'Hak Pakai', '2000', '-', '-', '-', '-', '1557813334.pdf', '2019-05-13 20:14:43', '2019-05-13 22:55:34'),
(12, 'Baleharjo', 'Wonosari', '00005', 'Hak Pakai', '1748', '-', '-', '-', '-', '1557813472.pdf', '2019-05-13 20:16:08', '2019-05-13 22:57:52'),
(13, 'Wonosari', 'Wonosari', '00046', 'Hak Pakai', '2748', '-', '-', '-', '-', '1557813503.pdf', '2019-05-13 20:17:17', '2019-05-13 22:58:23'),
(14, 'Wonosari', 'Wonosari', '00047', 'Hak Pakai', '10524', '-', '-', '-', '-', '1557814123.pdf', '2019-05-13 20:20:42', '2019-05-13 23:08:43'),
(15, 'Siraman', 'Wonosari', '00008', 'Hak Pakai', '385', 'Ex Rumah Dinas Pariwisata', '-', '-', '-', NULL, '2019-05-13 20:22:40', '2019-05-13 20:22:40'),
(16, 'Kepek', 'Wonosari', '00046', 'Hak Pakai', '34480', 'Taman Kuliner keselatan', '-', '-', '-', '1557814228.pdf', '2019-05-13 20:27:57', '2019-05-13 23:10:28'),
(17, 'Selang', 'Wonosari', '00065', 'Hak Pakai', '199', '-', '-', '-', '-', '1557814288.pdf', '2019-05-13 20:29:08', '2019-05-13 23:11:28'),
(18, 'Kepek', 'Wonosari', '00008', 'Hak Pakai', '1062', '-', '-', '-', '-', '1557814369.pdf', '2019-05-13 20:32:33', '2019-05-13 23:12:49'),
(19, 'Wonosari', 'Wonosari', '00039', 'Hak Pakai', '1000', 'RPH Tawarsari', '-', '-', '-', '1557814394.pdf', '2019-05-13 20:34:01', '2019-05-13 23:13:14'),
(20, 'Baleharjo', 'Wonosari', '00005', 'Hak Pakai', '1748', '-', '-', '-', '-', '1557814436.pdf', '2019-05-13 20:35:16', '2019-05-13 23:13:56');

-- --------------------------------------------------------

--
-- Table structure for table `kategoris`
--

CREATE TABLE `kategoris` (
  `id` int(10) UNSIGNED NOT NULL,
  `nama` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `add` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `kategoris`
--

INSERT INTO `kategoris` (`id`, `nama`, `add`, `created_at`, `updated_at`) VALUES
(1, 'dony', 'yogykarta', '2019-05-06 18:57:48', '2019-05-06 18:57:48'),
(2, 'dony', 'yogykarta', '2019-05-06 18:59:28', '2019-05-06 18:59:28');

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
(1, '2014_10_12_000000_create_users_table', 1),
(2, '2014_10_12_100000_create_password_resets_table', 1),
(3, '2019_05_02_020921_create_cardpemdas_table', 1),
(4, '2019_05_02_072655_create_kategoris_table', 2);

-- --------------------------------------------------------

--
-- Table structure for table `password_resets`
--

CREATE TABLE `password_resets` (
  `email` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `password` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `password`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 'Dony Prasetyo', 'donnipr@dev.io', '$2y$10$2s0nszy6RG3ARNvQhHqdJusNxrGjbdH9Jkixku7ywxF2S3jAfHxXy', 'cnyXYSxgKkbI1zJ4uqSDnue439LWxdyhNesFErGrZ9dohIZy08S3rRiIaZ0u', '2019-05-01 19:44:45', '2019-05-01 19:44:45'),
(2, 'Admin', 'admin@sipetarung.gk', '$2y$10$nP4k3.GRH1zVMkR6HxNljOABLkUAsVjMDXnkVmfGDgz8ci1vGbV/C', NULL, '2019-05-14 19:15:23', '2019-05-14 19:15:23');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `cardpemdas`
--
ALTER TABLE `cardpemdas`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `kategoris`
--
ALTER TABLE `kategoris`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `password_resets`
--
ALTER TABLE `password_resets`
  ADD KEY `password_resets_email_index` (`email`);

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
-- AUTO_INCREMENT for table `cardpemdas`
--
ALTER TABLE `cardpemdas`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=28;

--
-- AUTO_INCREMENT for table `kategoris`
--
ALTER TABLE `kategoris`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
