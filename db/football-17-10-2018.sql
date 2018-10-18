-- phpMyAdmin SQL Dump
-- version 4.8.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Oct 17, 2018 at 07:41 PM
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
  `group_id` int(10) UNSIGNED NOT NULL,
  `club_id` int(10) UNSIGNED NOT NULL,
  `user_id` int(10) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `discussions`
--

INSERT INTO `discussions` (`id`, `msg`, `group_id`, `club_id`, `user_id`, `created_at`, `updated_at`) VALUES
(1, 'hi', 4, 1, 1, '2018-10-15 23:00:00', '2018-10-15 23:00:00'),
(2, 'xup', 4, 1, 2, '2018-10-15 23:00:00', '2018-10-15 23:00:00'),
(3, 'saveIt', 4, 1, 2, '2018-10-17 08:27:57', '2018-10-17 08:27:57'),
(4, 'saveIt', 4, 1, 2, '2018-10-17 08:31:54', '2018-10-17 08:31:54'),
(5, 'hio', 4, 1, 2, '2018-10-17 08:56:26', '2018-10-17 08:56:26'),
(6, 'two', 4, 1, 2, '2018-10-17 09:00:50', '2018-10-17 09:00:50'),
(7, 'trhee', 4, 1, 2, '2018-10-17 09:02:17', '2018-10-17 09:02:17'),
(8, 'four', 4, 1, 2, '2018-10-17 09:03:13', '2018-10-17 09:03:13'),
(9, 'fice', 4, 1, 2, '2018-10-17 09:08:29', '2018-10-17 09:08:29'),
(10, 'trice', 4, 1, 2, '2018-10-17 09:09:04', '2018-10-17 09:09:04'),
(11, 'f', 4, 1, 2, '2018-10-17 09:09:56', '2018-10-17 09:09:56'),
(12, 'new stuff', 4, 1, 2, '2018-10-17 10:48:37', '2018-10-17 10:48:37'),
(13, 'another stuff', 4, 1, 2, '2018-10-17 10:49:02', '2018-10-17 10:49:02'),
(14, 'new broadcast', 4, 1, 2, '2018-10-17 11:57:59', '2018-10-17 11:57:59'),
(15, 'new broad', 4, 1, 2, '2018-10-17 11:59:59', '2018-10-17 11:59:59'),
(16, 'new broads', 4, 1, 2, '2018-10-17 12:00:55', '2018-10-17 12:00:55'),
(17, 'new broad', 4, 1, 2, '2018-10-17 12:02:36', '2018-10-17 12:02:36'),
(18, 'new broadcast', 4, 1, 2, '2018-10-17 12:52:38', '2018-10-17 12:52:38'),
(19, 'oga', 4, 1, 2, '2018-10-17 12:58:19', '2018-10-17 12:58:19'),
(20, 'send', 4, 1, 2, '2018-10-17 13:01:44', '2018-10-17 13:01:44'),
(21, 'nawa o', 4, 1, 1, '2018-10-17 13:05:31', '2018-10-17 13:05:31'),
(22, 'me', 4, 1, 2, '2018-10-17 13:12:48', '2018-10-17 13:12:48'),
(23, 'cool here', 4, 1, 1, '2018-10-17 13:15:31', '2018-10-17 13:15:31'),
(24, 'anotyher', 4, 1, 1, '2018-10-17 13:18:54', '2018-10-17 13:18:54'),
(25, 'noode', 4, 1, 2, '2018-10-17 13:19:26', '2018-10-17 13:19:26'),
(26, 'jet', 4, 1, 2, '2018-10-17 13:20:05', '2018-10-17 13:20:05'),
(27, 'me now', 4, 1, 1, '2018-10-17 13:20:29', '2018-10-17 13:20:29'),
(28, 'pop', 4, 1, 1, '2018-10-17 13:20:42', '2018-10-17 13:20:42'),
(29, 'weew', 4, 1, 1, '2018-10-17 13:33:38', '2018-10-17 13:33:38'),
(30, 'so', 4, 1, 1, '2018-10-17 13:34:09', '2018-10-17 13:34:09'),
(31, 'ke', 4, 1, 2, '2018-10-17 13:34:33', '2018-10-17 13:34:33'),
(32, 's', 4, 1, 1, '2018-10-17 13:34:54', '2018-10-17 13:34:54'),
(33, 'hey', 4, 1, 1, '2018-10-17 13:40:01', '2018-10-17 13:40:01'),
(34, 'again', 4, 1, 2, '2018-10-17 13:40:18', '2018-10-17 13:40:18'),
(35, 'and', 4, 1, 2, '2018-10-17 13:40:22', '2018-10-17 13:40:22'),
(36, 'same', 4, 1, 1, '2018-10-17 13:40:41', '2018-10-17 13:40:41'),
(37, 'we should try', 4, 1, 2, '2018-10-17 13:42:29', '2018-10-17 13:42:29'),
(38, 'checking', 4, 1, 2, '2018-10-17 13:44:15', '2018-10-17 13:44:15'),
(39, 'limiting', 4, 1, 1, '2018-10-17 13:44:39', '2018-10-17 13:44:39'),
(40, 'oh!', 4, 1, 2, '2018-10-17 13:44:52', '2018-10-17 13:44:52'),
(41, 'keep on', 4, 1, 1, '2018-10-17 13:56:23', '2018-10-17 13:56:23'),
(42, 'new', 4, 1, 2, '2018-10-17 13:58:10', '2018-10-17 13:58:10'),
(43, 'dd', 4, 1, 1, '2018-10-17 14:10:26', '2018-10-17 14:10:26'),
(44, 'hello', 4, 1, 2, '2018-10-17 16:13:07', '2018-10-17 16:13:07'),
(45, 'hi', 4, 1, 2, '2018-10-17 16:13:19', '2018-10-17 16:13:19'),
(46, 'working?', 4, 1, 1, '2018-10-17 16:13:50', '2018-10-17 16:13:50'),
(47, 'try again', 4, 1, 2, '2018-10-17 16:17:19', '2018-10-17 16:17:19'),
(48, 'hmmm', 4, 1, 1, '2018-10-17 16:18:00', '2018-10-17 16:18:00');

-- --------------------------------------------------------

--
-- Table structure for table `fans`
--

CREATE TABLE `fans` (
  `id` int(10) UNSIGNED NOT NULL,
  `club_id` int(10) UNSIGNED NOT NULL,
  `user_id` int(10) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `fans`
--

INSERT INTO `fans` (`id`, `club_id`, `user_id`, `created_at`, `updated_at`) VALUES
(5, 1, 1, '2018-10-02 15:47:29', '2018-10-02 15:47:29'),
(11, 2, 3, '2018-10-03 09:27:33', '2018-10-03 09:27:33'),
(15, 2, 10, '2018-10-03 15:45:09', '2018-10-03 15:45:09'),
(17, 1, 2, '2018-10-15 09:23:49', '2018-10-15 09:23:49');

-- --------------------------------------------------------

--
-- Table structure for table `groups`
--

CREATE TABLE `groups` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `user_id` int(10) UNSIGNED NOT NULL,
  `club_id` int(10) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `groups`
--

INSERT INTO `groups` (`id`, `name`, `user_id`, `club_id`, `created_at`, `updated_at`) VALUES
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
  `group_id` int(10) UNSIGNED NOT NULL,
  `club_id` int(10) UNSIGNED NOT NULL,
  `user_id` int(10) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `members`
--

INSERT INTO `members` (`id`, `group_id`, `club_id`, `user_id`, `created_at`, `updated_at`) VALUES
(1, 1, 1, 1, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
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
(1, 'Michael', 'myckhel1@hotmail.com', 'user-2-63x63.jpg', '$2y$10$SFI1I.hA0lJ3Qa2UHwmKM.zTPyge6.F5kxrFMCERCInoW4qdk4Crq', 'eyI2OV69a1YPAWWrRP7tCTGfoA5qSRmVRswRN0xokhYrMNg5aFAUK27BXR1H', '2018-09-28 15:34:15', '2018-09-28 15:34:15'),
(2, 'Myckhel', 'myckhel1@gmail.com', 'user-1-63x63.jpg', '$2y$10$HywjQAg4O.EByqOi6BRrl.hOp371bjO41wU9h.7iX/UnENrxKe752', 'BB5fiEr42j4AILTVPxpbn5eVSl11GWWtL2ipZGCN5MVq2ec3etw0XKzgplnc', '2018-09-29 23:10:42', '2018-09-29 23:10:42'),
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
  ADD KEY `club` (`club_id`),
  ADD KEY `groups` (`group_id`),
  ADD KEY `user` (`user_id`);

--
-- Indexes for table `fans`
--
ALTER TABLE `fans`
  ADD PRIMARY KEY (`id`),
  ADD KEY `user` (`user_id`),
  ADD KEY `club` (`club_id`);

--
-- Indexes for table `groups`
--
ALTER TABLE `groups`
  ADD PRIMARY KEY (`id`),
  ADD KEY `creator` (`user_id`),
  ADD KEY `club` (`club_id`);

--
-- Indexes for table `members`
--
ALTER TABLE `members`
  ADD PRIMARY KEY (`id`),
  ADD KEY `club` (`club_id`),
  ADD KEY `groups` (`group_id`),
  ADD KEY `user` (`user_id`);

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
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=49;

--
-- AUTO_INCREMENT for table `fans`
--
ALTER TABLE `fans`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;

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
  ADD CONSTRAINT `discussions_ibfk_1` FOREIGN KEY (`club_id`) REFERENCES `clubs` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `discussions_ibfk_2` FOREIGN KEY (`group_id`) REFERENCES `groups` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `discussions_ibfk_3` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `fans`
--
ALTER TABLE `fans`
  ADD CONSTRAINT `fans_ibfk_1` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `fans_ibfk_2` FOREIGN KEY (`club_id`) REFERENCES `clubs` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `groups`
--
ALTER TABLE `groups`
  ADD CONSTRAINT `groups_ibfk_1` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `groups_ibfk_2` FOREIGN KEY (`club_id`) REFERENCES `clubs` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `members`
--
ALTER TABLE `members`
  ADD CONSTRAINT `members_ibfk_1` FOREIGN KEY (`club_id`) REFERENCES `clubs` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `members_ibfk_2` FOREIGN KEY (`group_id`) REFERENCES `groups` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `members_ibfk_3` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`) ON DELETE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
