-- phpMyAdmin SQL Dump
-- version 4.7.9
-- https://www.phpmyadmin.net/
--
-- Anamakine: 127.0.0.1
-- Üretim Zamanı: 16 Kas 2019, 13:42:52
-- Sunucu sürümü: 10.1.31-MariaDB
-- PHP Sürümü: 7.2.3

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Veritabanı: `election`
--

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `candidates`
--

CREATE TABLE `candidates` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `file_id` int(11) NOT NULL DEFAULT '0',
  `user_id` int(11) NOT NULL,
  `election_id` int(11) NOT NULL,
  `description` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT '---',
  `picture` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT 'none_picture.jpg',
  `votes` int(11) NOT NULL DEFAULT '0',
  `confirm` int(11) NOT NULL DEFAULT '0',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Tablo döküm verisi `candidates`
--

INSERT INTO `candidates` (`id`, `file_id`, `user_id`, `election_id`, `description`, `picture`, `votes`, `confirm`, `created_at`, `updated_at`) VALUES
(2, 2, 5, 3, 'Some description', '1573811473.46180020_338063310140210_3531790043623685703_n.jpg', 0, 1, '2019-10-27 10:04:36', '2019-11-15 08:51:13'),
(3, 3, 6, 3, '---', 'none_picture.jpg', 0, 1, '2019-10-27 10:12:17', '2019-11-09 20:14:18'),
(5, 5, 7, 1, 'descriptions..', '1573485222.9bea4dba39.jpg', 0, 1, '2019-10-28 20:05:43', '2019-11-11 14:13:42'),
(6, 6, 4, 3, 'descriptions..dsada', 'none_picture.jpg', 0, 1, '2019-11-09 19:04:00', '2019-11-10 22:01:16'),
(7, 7, 8, 3, '---', '1573398092.11081822_886926724707044_1240365914_n.jpg', 0, 1, '2019-11-09 19:12:25', '2019-11-10 14:01:32'),
(8, 9, 6, 1, '---', 'none_picture.jpg', 0, 2, NULL, '2019-11-11 14:14:37'),
(9, 8, 7, 3, 'descriptions..', '1573485385.9bea4dba39.jpg', 0, 1, '2019-11-11 14:14:06', '2019-11-11 14:16:25'),
(10, 10, 4, 2, 'descriptions..', 'none_picture.jpg', 0, 1, '2019-11-11 22:52:27', '2019-11-11 22:52:36'),
(11, 11, 8, 4, 'descriptions..', 'none_picture.jpg', 0, 1, '2019-11-12 09:15:57', '2019-11-12 09:16:36'),
(12, 12, 5, 4, 'descriptions..', 'none_picture.jpg', 0, 0, '2019-11-15 08:52:06', '2019-11-15 08:52:06');

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `elections`
--

CREATE TABLE `elections` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `deadline` date NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Tablo döküm verisi `elections`
--

INSERT INTO `elections` (`id`, `name`, `deadline`, `created_at`, `updated_at`) VALUES
(1, 'First Election', '2019-10-17', '2019-10-13 19:02:21', '2019-10-13 19:02:21'),
(2, 'Second Election', '2019-11-22', '2019-10-14 11:23:18', '2019-10-14 11:23:18'),
(3, 'Third Election', '2019-11-14', '2019-10-14 11:24:57', '2019-10-14 11:24:57'),
(4, 'New Election', '2019-11-28', '2019-11-09 18:59:15', '2019-11-09 18:59:15');

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `failed_jobs`
--

CREATE TABLE `failed_jobs` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `connection` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `queue` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `payload` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `exception` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `failed_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `files`
--

CREATE TABLE `files` (
  `id` int(11) NOT NULL,
  `profile_file_id` int(11) NOT NULL,
  `file_name` varchar(255) COLLATE utf8mb4_turkish_ci NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `updated_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_turkish_ci;

--
-- Tablo döküm verisi `files`
--

INSERT INTO `files` (`id`, `profile_file_id`, `file_name`, `created_at`, `updated_at`) VALUES
(7, 7, '1573397635.ileri-programlama-teknikleri-java.zip - Google Drive.pdf', '2019-11-10 13:53:55', '2019-11-10 13:53:55'),
(8, 7, '1573397648.BIL346-DN01.pdf', '2019-11-10 13:54:08', '2019-11-10 13:54:08'),
(9, 7, '1573397661.WhatsApp Image 2018-03-21 at 16.21.19.jpeg', '2019-11-10 13:54:21', '2019-11-10 13:54:21'),
(10, 6, '1573399005.watermelon.png', '2019-11-10 14:16:45', '2019-11-10 14:16:45'),
(11, 5, '1573485222.a.html', '2019-11-11 14:13:42', '2019-11-11 14:13:42'),
(12, 9, '1573485407.a.html', '2019-11-11 14:16:47', '2019-11-11 14:16:47'),
(13, 9, '1573485646.acarindex-1423871739.pdf', '2019-11-11 14:20:46', '2019-11-11 14:20:46'),
(14, 2, '1573486201..gitignore', '2019-11-11 14:30:01', '2019-11-11 14:30:01'),
(15, 2, '1573811493.watermelon.png', '2019-11-15 08:51:33', '2019-11-15 08:51:33');

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `migrations`
--

CREATE TABLE `migrations` (
  `id` int(10) UNSIGNED NOT NULL,
  `migration` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Tablo döküm verisi `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(5, '2014_10_12_000000_create_users_table', 1),
(6, '2014_10_12_100000_create_password_resets_table', 1),
(7, '2019_08_19_000000_create_failed_jobs_table', 1),
(8, '2019_10_07_163207_create_roles', 1),
(9, '2019_10_13_203940_create_elections', 2),
(10, '2019_10_13_205848_create_elections', 3),
(11, '2019_10_14_154147_create_candidates', 4),
(13, '2019_10_14_155918_create_candidates', 5),
(14, '2019_10_27_111743_create_files', 6),
(15, '2019_10_27_131722_create_votes', 7),
(16, '2019_10_27_160217_create_votes', 8);

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `password_resets`
--

CREATE TABLE `password_resets` (
  `email` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `roles`
--

CREATE TABLE `roles` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `users`
--

CREATE TABLE `users` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `role` int(11) NOT NULL DEFAULT '0',
  `email` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Tablo döküm verisi `users`
--

INSERT INTO `users` (`id`, `name`, `role`, `email`, `email_verified_at`, `password`, `remember_token`, `created_at`, `updated_at`) VALUES
(3, 'Recep Gümüş', 1, 'recepgumusyasin@gmail.com', NULL, '$2y$10$1YEY1yCPiOeRWLGigZ3Ncu.AXzyduAmvLieZQ1IQ/ZXj7pazyG2pG', NULL, '2019-10-10 18:58:20', '2019-10-10 18:58:20'),
(4, 'voter5', 0, 'voter5@voter5.com', NULL, '$2y$10$hUl/OMODgCjwSzEhFclGpeG7DwLJymgMxVt9ZCC4E6tLPlWwVetle', NULL, '2019-10-22 16:10:59', '2019-10-22 16:10:59'),
(5, 'Voter1', 0, 'voter1@voter1.com', NULL, '$2y$10$i.gZ6yMbGtKIhAoy5ov8LOGWg/n9Mnh2jjOlEfRxQZp2IqUGOlWxi', NULL, '2019-10-22 16:09:33', '2019-10-22 16:09:33'),
(6, 'voter2', 0, 'voter2@voter2.com', NULL, '$2y$10$n4oPRL7g3hVVyFqaaVA2kuMFz0NYUaNDtQ6qxZWg1sDE60HMAzhfm', NULL, '2019-10-22 16:09:54', '2019-10-22 16:09:54'),
(7, 'voter3', 0, 'voter3@voter3.com', NULL, '$2y$10$31Gbjy7M47swGxTvAJ5xZeKZ3Q2pvDvfGt68NHSNNvMW3S6jarkSy', 'DWODIOs7AXfwcbwpySNQoVCiXhxG8lEXwDQXojjC3DInJQozkENnJ9hLdGzt', '2019-10-22 16:10:15', '2019-10-22 16:10:15'),
(8, 'voter4', 0, 'voter4@voter4.com', NULL, '$2y$10$H5x7eN1YEpU/i.erj4BobO2kdDBUHC5/gVxJC42G0rYYRC5FTHC9C', NULL, '2019-10-22 16:10:33', '2019-10-22 16:10:33');

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `votes`
--

CREATE TABLE `votes` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `voter_id` int(11) NOT NULL,
  `election_id` int(11) NOT NULL,
  `candidate_id` int(11) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Tablo döküm verisi `votes`
--

INSERT INTO `votes` (`id`, `voter_id`, `election_id`, `candidate_id`, `created_at`, `updated_at`) VALUES
(1, 3, 1, 5, '2019-10-27 15:13:10', '2019-10-27 15:13:10'),
(2, 4, 1, 5, '2019-10-27 15:21:54', '2019-10-27 15:21:54'),
(3, 5, 1, 5, '2019-10-28 14:52:35', '2019-10-28 14:52:35'),
(4, 6, 1, 8, '2019-11-10 23:00:00', '2019-11-10 23:00:00'),
(5, 7, 1, 8, '2019-11-11 23:00:00', '2019-11-10 23:00:00'),
(7, 7, 3, 2, '2019-11-11 14:48:09', '2019-11-11 14:48:09'),
(8, 6, 3, 7, '2019-11-11 20:50:06', '2019-11-11 20:50:06'),
(9, 4, 3, 7, '2019-11-11 22:57:03', '2019-11-11 22:57:03'),
(10, 5, 3, 7, '2019-11-12 19:36:04', '2019-11-12 19:36:04'),
(12, 3, 3, 7, '2019-11-15 08:49:34', '2019-11-15 08:49:34'),
(13, 4, 2, 10, '2019-11-15 08:53:04', '2019-11-15 08:53:04');

--
-- Dökümü yapılmış tablolar için indeksler
--

--
-- Tablo için indeksler `candidates`
--
ALTER TABLE `candidates`
  ADD PRIMARY KEY (`id`);

--
-- Tablo için indeksler `elections`
--
ALTER TABLE `elections`
  ADD PRIMARY KEY (`id`);

--
-- Tablo için indeksler `failed_jobs`
--
ALTER TABLE `failed_jobs`
  ADD PRIMARY KEY (`id`);

--
-- Tablo için indeksler `files`
--
ALTER TABLE `files`
  ADD PRIMARY KEY (`id`);

--
-- Tablo için indeksler `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Tablo için indeksler `password_resets`
--
ALTER TABLE `password_resets`
  ADD KEY `password_resets_email_index` (`email`);

--
-- Tablo için indeksler `roles`
--
ALTER TABLE `roles`
  ADD PRIMARY KEY (`id`);

--
-- Tablo için indeksler `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `users_email_unique` (`email`);

--
-- Tablo için indeksler `votes`
--
ALTER TABLE `votes`
  ADD PRIMARY KEY (`id`);

--
-- Dökümü yapılmış tablolar için AUTO_INCREMENT değeri
--

--
-- Tablo için AUTO_INCREMENT değeri `candidates`
--
ALTER TABLE `candidates`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- Tablo için AUTO_INCREMENT değeri `elections`
--
ALTER TABLE `elections`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- Tablo için AUTO_INCREMENT değeri `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- Tablo için AUTO_INCREMENT değeri `files`
--
ALTER TABLE `files`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- Tablo için AUTO_INCREMENT değeri `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;

--
-- Tablo için AUTO_INCREMENT değeri `roles`
--
ALTER TABLE `roles`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- Tablo için AUTO_INCREMENT değeri `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- Tablo için AUTO_INCREMENT değeri `votes`
--
ALTER TABLE `votes`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
