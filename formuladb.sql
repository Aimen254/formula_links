-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Nov 11, 2022 at 09:34 AM
-- Server version: 10.4.24-MariaDB
-- PHP Version: 7.4.29

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `formuladb`
--

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
-- Table structure for table `formulas`
--

CREATE TABLE `formulas` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `size` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `type` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `formulas`
--

INSERT INTO `formulas` (`id`, `name`, `size`, `type`, `created_at`, `updated_at`) VALUES
(1, 'Outer frame 80MM 88MM 98MM', '80MM 88MM 98MM', 'Outer frame 80MM 88MM 98MM', '2022-11-07 02:25:39', '2022-11-07 02:25:39'),
(2, 'sliding sash 55', '55', 'sliding sash 55', '2022-11-07 02:25:59', '2022-11-07 02:25:59'),
(3, 'sliding sash 66', '66', 'sliding sash 66', '2022-11-07 02:26:11', '2022-11-07 02:26:11'),
(4, 'sliding sash 73', '73', 'sliding sash 73', '2022-11-07 02:26:27', '2022-11-07 02:26:27');

-- --------------------------------------------------------

--
-- Table structure for table `imageformulas`
--

CREATE TABLE `imageformulas` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `image_id` bigint(20) UNSIGNED NOT NULL,
  `formula_id` bigint(20) UNSIGNED NOT NULL,
  `formula_type` varchar(250) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `imageformulas`
--

INSERT INTO `imageformulas` (`id`, `image_id`, `formula_id`, `formula_type`, `created_at`, `updated_at`) VALUES
(16, 1, 1, 'Outer frame 80MM 88MM 98MM', NULL, NULL),
(17, 2, 1, 'Outer frame 80MM 88MM 98MM', NULL, NULL),
(18, 2, 2, 'sliding sash 55', NULL, NULL),
(19, 3, 2, 'sliding sash 55', NULL, NULL),
(20, 3, 3, 'sliding sash 66', NULL, NULL),
(21, 1, 3, 'sliding sash 73', NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `images`
--

CREATE TABLE `images` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `image` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `url` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `images`
--

INSERT INTO `images` (`id`, `name`, `image`, `url`, `created_at`, `updated_at`) VALUES
(1, 'Outer frame 80MM 88MM 98MM', '1667805798.png', 'images/1667805798.png', '2022-11-07 02:23:18', '2022-11-07 02:23:18'),
(2, 'Sliding Sash', '1667805854.png', 'images/1667805854.png', '2022-11-07 02:24:14', '2022-11-07 02:24:14'),
(3, 'Sliding SAsh Fix', '1667805899.png', 'images/1667805899.png', '2022-11-07 02:24:59', '2022-11-07 02:24:59');

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
(13, '2014_10_12_000000_create_users_table', 1),
(14, '2014_10_12_100000_create_password_resets_table', 1),
(15, '2019_08_19_000000_create_failed_jobs_table', 1),
(16, '2019_12_14_000001_create_personal_access_tokens_table', 1),
(17, '2022_11_05_071744_create_images_table', 1),
(18, '2022_11_05_072138_create_formulas_table', 1),
(19, '2022_11_05_124828_create_imageformulas_table', 1),
(20, '2022_11_07_124626_create_userformulas_table', 2);

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
-- Table structure for table `userformulas`
--

CREATE TABLE `userformulas` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `formula_type` varchar(250) COLLATE utf8mb4_unicode_ci NOT NULL,
  `image_id` int(11) NOT NULL,
  `fixheight` int(11) DEFAULT NULL,
  `fixwidth` int(11) DEFAULT NULL,
  `outerheight` int(11) DEFAULT NULL,
  `outerwidth` int(11) DEFAULT NULL,
  `innerheight` int(11) DEFAULT NULL,
  `innerwidth` int(11) DEFAULT NULL,
  `size` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `userformulas`
--

INSERT INTO `userformulas` (`id`, `formula_type`, `image_id`, `fixheight`, `fixwidth`, `outerheight`, `outerwidth`, `innerheight`, `innerwidth`, `size`, `created_at`, `updated_at`) VALUES
(2, 'Outer frame 80MM 88MM 98MM', 1, NULL, NULL, 9, 9, NULL, NULL, NULL, '2022-11-10 03:56:35', '2022-11-10 03:56:35'),
(3, 'Outer frame 80MM 88MM 98MM', 2, NULL, NULL, 9, 9, NULL, NULL, NULL, '2022-11-10 03:57:02', '2022-11-10 03:57:02');

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
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `failed_jobs_uuid_unique` (`uuid`);

--
-- Indexes for table `formulas`
--
ALTER TABLE `formulas`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `imageformulas`
--
ALTER TABLE `imageformulas`
  ADD PRIMARY KEY (`id`),
  ADD KEY `imageformulas_image_id_foreign` (`image_id`),
  ADD KEY `imageformulas_formula_id_foreign` (`formula_id`);

--
-- Indexes for table `images`
--
ALTER TABLE `images`
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
-- Indexes for table `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `personal_access_tokens_token_unique` (`token`),
  ADD KEY `personal_access_tokens_tokenable_type_tokenable_id_index` (`tokenable_type`,`tokenable_id`);

--
-- Indexes for table `userformulas`
--
ALTER TABLE `userformulas`
  ADD PRIMARY KEY (`id`);

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
-- AUTO_INCREMENT for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `formulas`
--
ALTER TABLE `formulas`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `imageformulas`
--
ALTER TABLE `imageformulas`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=22;

--
-- AUTO_INCREMENT for table `images`
--
ALTER TABLE `images`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;

--
-- AUTO_INCREMENT for table `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `userformulas`
--
ALTER TABLE `userformulas`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `imageformulas`
--
ALTER TABLE `imageformulas`
  ADD CONSTRAINT `imageformulas_formula_id_foreign` FOREIGN KEY (`formula_id`) REFERENCES `formulas` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `imageformulas_image_id_foreign` FOREIGN KEY (`image_id`) REFERENCES `images` (`id`) ON DELETE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
