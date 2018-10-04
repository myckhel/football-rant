-- phpMyAdmin SQL Dump
-- version 4.8.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Oct 03, 2018 at 07:02 PM
-- Server version: 10.1.34-MariaDB
-- PHP Version: 7.2.7

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `football`
--

-- --------------------------------------------------------

--
-- Table structure for table `clubs`
--

CREATE TABLE `clubs` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `badge` varchar(60) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'logo-soccer-default-129x129.png',
  `current` tinyint(1) NOT NULL DEFAULT '0',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `clubs`
--

INSERT INTO `clubs` (`id`, `name`, `badge`, `current`, `created_at`, `updated_at`) VALUES
(1, 'Atletico', 'logo-soccer-default-129x129.png', 0, NULL, NULL),
(2, 'Manchester United', 'manu.png', 1, '2018-10-03 11:25:34', '2018-10-03 17:30:27');

-- --------------------------------------------------------

--
-- Table structure for table `discussions`
--

CREATE TABLE `discussions` (
  `id` int(10) UNSIGNED NOT NULL,
  `msg` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `groups` int(10) UNSIGNED NOT NULL,
  `club` int(10) UNSIGNED NOT NULL,
  `user` int(10) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `fans`
--

CREATE TABLE `fans` (
  `id` int(10) UNSIGNED NOT NULL,
  `club` int(10) UNSIGNED NOT NULL,
  `user` int(10) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `fans`
--

INSERT INTO `fans` (`id`, `club`, `user`, `created_at`, `updated_at`) VALUES
(5, 1, 1, '2018-10-02 15:47:29', '2018-10-02 15:47:29'),
(11, 2, 3, '2018-10-03 09:27:33', '2018-10-03 09:27:33'),
(13, 2, 2, '2018-10-03 14:37:23', '2018-10-03 14:37:23'),
(15, 2, 10, '2018-10-03 15:45:09', '2018-10-03 15:45:09');

-- --------------------------------------------------------

--
-- Table structure for table `groups`
--

CREATE TABLE `groups` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `creator` int(10) UNSIGNED NOT NULL,
  `club` int(10) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `groups`
--

INSERT INTO `groups` (`id`, `name`, `creator`, `club`, `created_at`, `updated_at`) VALUES
(1, 'group1', 1, 1, '2018-09-28 16:40:11', '2018-09-28 16:40:11'),
(2, 'group2', 1, 1, '2018-09-29 11:37:19', '2018-09-29 11:37:19'),
(4, 'Elite Masters', 1, 1, '2018-09-29 22:05:12', '2018-09-29 22:05:12'),
(6, 'Ace', 2, 1, '2018-09-29 23:12:58', '2018-09-29 23:12:58'),
(7, 'mygroup', 3, 1, '2018-10-02 15:51:19', '2018-10-02 15:51:19'),
(11, 'Red Devils', 2, 2, '2018-10-03 14:57:35', '2018-10-03 14:57:35'),
(12, 'newgroup', 10, 2, '2018-10-03 15:45:50', '2018-10-03 15:45:50');

-- --------------------------------------------------------

--
-- Table structure for table `members`
--

CREATE TABLE `members` (
  `id` int(10) UNSIGNED NOT NULL,
  `groups` int(10) UNSIGNED NOT NULL,
  `club` int(10) UNSIGNED NOT NULL,
  `user` int(10) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `members`
--

INSERT INTO `members` (`id`, `groups`, `club`, `user`, `created_at`, `updated_at`) VALUES
(1, 1, 1, 1, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(2, 2, 1, 1, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(5, 6, 1, 2, '2018-09-29 23:12:58', '2018-09-29 23:12:58'),
(6, 4, 1, 2, '2018-09-30 10:53:06', '2018-09-30 10:53:06'),
(7, 2, 1, 2, '2018-09-30 10:57:41', '2018-09-30 10:57:41'),
(8, 1, 1, 2, '2018-09-30 10:59:28', '2018-09-30 10:59:28'),
(9, 4, 1, 1, '2018-10-02 15:35:42', '2018-10-02 15:35:42'),
(10, 7, 1, 3, '2018-10-02 15:51:20', '2018-10-02 15:51:20'),
(11, 4, 1, 3, '2018-10-02 15:53:30', '2018-10-02 15:53:30'),
(15, 11, 2, 2, '2018-10-03 14:57:36', '2018-10-03 14:57:36'),
(16, 12, 2, 10, '2018-10-03 15:45:50', '2018-10-03 15:45:50');

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
(3, '2018_09_28_160028_create_groups_table', 2),
(4, '2018_09_28_160850_create_clubs_table', 3),
(5, '2018_09_29_202338_create_members_table', 4),
(6, '2018_09_30_123659_create_discussions_table', 5),
(7, '2018_10_02_105733_create_fans_table', 6);

-- --------------------------------------------------------

--
-- Table structure for table `password_resets`
--

CREATE TABLE `password_resets` (
  `email` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(30) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL,
  `avatar` varchar(70) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'user-1-63x63.jpg',
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `avatar`, `password`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 'Michael', 'myckhel1@hotmail.com', 'user-1-63x63.jpg', '$2y$10$SFI1I.hA0lJ3Qa2UHwmKM.zTPyge6.F5kxrFMCERCInoW4qdk4Crq', 'eyI2OV69a1YPAWWrRP7tCTGfoA5qSRmVRswRN0xokhYrMNg5aFAUK27BXR1H', '2018-09-28 15:34:15', '2018-09-28 15:34:15'),
(2, 'Myckhel', 'myckhel1@gmail.com', 'user-1-63x63.jpg', '$2y$10$HywjQAg4O.EByqOi6BRrl.hOp371bjO41wU9h.7iX/UnENrxKe752', 'CGhcTjEgsmME53ixkbHb50Siq2IUuyNRRbcRaKhK9a7fTmKg75PgXq8VlsyC', '2018-09-29 23:10:42', '2018-09-29 23:10:42'),
(3, 'johnny', 'myckhel123@gmail.com', 'user-1-63x63.jpg', '$2y$10$EbfByjwP2NgtoQ7FXFCv.OcbVujZAyPR2.zRf3r7B3QdOpWijdxrS', 'liAMXknz1KgmU60FRz7A7XusfPrj9tPmnQJoNjyraFi0esix3UpQsondP4XJ', '2018-10-02 15:49:26', '2018-10-02 15:49:26'),
(10, 'johnny2', 'john@gmail.com', 'user-1-63x63.jpg', '$2y$10$mDXAPdBTuSkEkHK0uS4g9e1sCZr65ipCqLFPNPcuLhOC793WGX9Je', NULL, '2018-10-03 15:44:45', '2018-10-03 15:44:45');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `clubs`
--
ALTER TABLE `clubs`
  ADD PRIMARY KEY (`id`),
  ADD KEY `name` (`name`(191));

--
-- Indexes for table `discussions`
--
ALTER TABLE `discussions`
  ADD PRIMARY KEY (`id`),
  ADD KEY `club` (`club`),
  ADD KEY `groups` (`groups`),
  ADD KEY `user` (`user`);

--
-- Indexes for table `fans`
--
ALTER TABLE `fans`
  ADD PRIMARY KEY (`id`),
  ADD KEY `user` (`user`),
  ADD KEY `club` (`club`);

--
-- Indexes for table `groups`
--
ALTER TABLE `groups`
  ADD PRIMARY KEY (`id`),
  ADD KEY `creator` (`creator`),
  ADD KEY `club` (`club`);

--
-- Indexes for table `members`
--
ALTER TABLE `members`
  ADD PRIMARY KEY (`id`),
  ADD KEY `club` (`club`),
  ADD KEY `groups` (`groups`),
  ADD KEY `user` (`user`);

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
  ADD UNIQUE KEY `users_email_unique` (`email`),
  ADD UNIQUE KEY `name` (`name`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `clubs`
--
ALTER TABLE `clubs`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `discussions`
--
ALTER TABLE `discussions`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `fans`
--
ALTER TABLE `fans`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- AUTO_INCREMENT for table `groups`
--
ALTER TABLE `groups`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT for table `members`
--
ALTER TABLE `members`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `discussions`
--
ALTER TABLE `discussions`
  ADD CONSTRAINT `discussions_ibfk_1` FOREIGN KEY (`club`) REFERENCES `clubs` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `discussions_ibfk_2` FOREIGN KEY (`groups`) REFERENCES `groups` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `discussions_ibfk_3` FOREIGN KEY (`user`) REFERENCES `users` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `fans`
--
ALTER TABLE `fans`
  ADD CONSTRAINT `fans_ibfk_1` FOREIGN KEY (`user`) REFERENCES `users` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `fans_ibfk_2` FOREIGN KEY (`club`) REFERENCES `clubs` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `groups`
--
ALTER TABLE `groups`
  ADD CONSTRAINT `groups_ibfk_1` FOREIGN KEY (`creator`) REFERENCES `users` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `groups_ibfk_2` FOREIGN KEY (`club`) REFERENCES `clubs` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `members`
--
ALTER TABLE `members`
  ADD CONSTRAINT `members_ibfk_1` FOREIGN KEY (`club`) REFERENCES `clubs` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `members_ibfk_2` FOREIGN KEY (`groups`) REFERENCES `groups` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `members_ibfk_3` FOREIGN KEY (`user`) REFERENCES `users` (`id`) ON DELETE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
