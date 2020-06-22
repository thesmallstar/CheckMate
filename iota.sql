-- phpMyAdmin SQL Dump
-- version 4.8.3
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jun 22, 2020 at 05:05 AM
-- Server version: 10.1.35-MariaDB
-- PHP Version: 7.2.9

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `iota`
--

-- --------------------------------------------------------

--
-- Table structure for table `ambus`
--

CREATE TABLE `ambus` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `des` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `Tid` int(11) NOT NULL,
  `status` int(11) NOT NULL,
  `phone` int(11) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `user_id` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `ambus`
--

INSERT INTO `ambus` (`id`, `name`, `des`, `Tid`, `status`, `phone`, `created_at`, `updated_at`, `user_id`) VALUES
(1, 'n', 'kn', 2, 0, 8, '2019-03-28 14:00:23', '2019-03-30 00:06:57', 5),
(2, 'jn', 'j', 2, 0, 9, '2019-03-28 14:01:06', '2019-03-30 00:05:26', 5),
(3, 'mkl', 'mk', 3, 0, 2, '2019-03-28 14:19:37', '2019-03-28 14:19:37', NULL),
(4, 'mk', 'mk', 4, 0, 8908, '2019-03-28 15:23:33', '2019-03-28 15:23:33', NULL),
(5, 'nk', 'jn', 4, 0, 887, '2019-03-28 15:23:43', '2019-03-28 15:23:43', NULL),
(6, 'bkBJKbkj', 'bkjb', 4, 1, 33, '2019-03-28 15:27:38', '2019-03-28 15:27:51', 5),
(7, 'Ambulance', 'mm', 2, 0, 3, '2019-03-28 16:33:17', '2019-03-28 16:33:17', NULL),
(8, 'demo', 'man', 2, 1, 12212, '2019-03-30 03:02:00', '2019-03-30 03:21:03', 1);

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
(100, '2014_10_12_000000_create_users_table', 1),
(101, '2014_10_12_100000_create_password_resets_table', 1);

-- --------------------------------------------------------

--
-- Table structure for table `p`
--

CREATE TABLE `p` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `des` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `Tid` int(11) NOT NULL,
  `status` int(11) NOT NULL,
  `phone` int(11) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

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
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `type` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `phone` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `email_verified_at`, `password`, `type`, `phone`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 'Manthan Surkar', 'user@gmail.com', NULL, '$2a$10$B8XS8XoJyMd4IEDkqj/6AO.7NIgaG4HjmJZQbiB5kr.RuK0FEIYK6', '0', '88', 'WWAE18pw0KvM1ux81Q3rNKnFwx78l0gYWL1oB2fEKM3SpoMFIBEJMlOeGpgN', '2019-03-28 14:16:25', '2019-03-28 14:16:25'),
(2, 'Manthan Surkar', 'moderator@gmail.com', NULL, '$2a$10$2l0sbt//4HVkkHHFivX/feW7hUVSnXl1zK.QRPeovspAUAYl.Cyee', '1', '898', 'fHwn93I92GYsz6kIVs4lw1n9CJrF4i9kYZ73yzTfKxsTxd7V2mNqvFlT24Zt', '2019-03-28 14:16:54', '2019-03-28 14:16:54'),
(3, 'Manthan Surkar', 'ssjlddddddks@jk.com', NULL, '$2y$10$KhBHcXd8PNocZvhIii/NZO92HlXpb2x3w.YV0PVwG1TPn6H/ViOrG', '1', '22', 'wj76HVDsIioXQu3nsSOhE0JCa02q2gYZdplYDRdoWfApS5Xn7fmb3gJV8gbO', '2019-03-28 14:18:23', '2019-03-28 14:18:23'),
(4, 'Manthan Surkar', 'jlddks@jk.com', NULL, '$2y$10$9V7DkLMj2QoaJazDQfTY7upngd4wteXR4mw9Cj4et.hZ/1xA4RuV6', '1', '9999', 'X6vWgNbN9o1UNoj3jswJL9wkJPdQXSJuT3TA7hQNcgyS1WQYGRTId3zhEsKP', '2019-03-28 14:35:02', '2019-03-28 14:35:02'),
(5, 'Manthan Surkar', 'mmm@mmm.com', NULL, '$2y$10$Y4W6e29K6E.NTXRNRNT.QeSmGiqtyKwUUUehasXsYnz.zATdzi57G', '0', '222', NULL, '2019-03-28 14:38:32', '2019-03-28 14:38:32');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `ambus`
--
ALTER TABLE `ambus`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `p`
--
ALTER TABLE `p`
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
-- AUTO_INCREMENT for table `ambus`
--
ALTER TABLE `ambus`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=102;

--
-- AUTO_INCREMENT for table `p`
--
ALTER TABLE `p`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
