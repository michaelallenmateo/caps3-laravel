-- phpMyAdmin SQL Dump
-- version 4.7.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jun 21, 2018 at 05:12 AM
-- Server version: 10.1.30-MariaDB
-- PHP Version: 7.2.1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `beautytalk`
--

-- --------------------------------------------------------

--
-- Table structure for table `categories`
--

CREATE TABLE `categories` (
  `id` int(10) UNSIGNED NOT NULL,
  `title` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `categories`
--

INSERT INTO `categories` (`id`, `title`, `created_at`, `updated_at`) VALUES
(1, 'MAKEUP', '2018-06-05 18:42:34', '2018-06-05 18:42:34'),
(2, 'SKIN CARE', '2018-06-05 18:43:21', '2018-06-05 18:43:21'),
(3, 'HAIR', '2018-06-05 18:44:03', '2018-06-05 18:44:03'),
(4, 'TOOLS AND KIT', '2018-06-05 18:44:31', '2018-06-05 18:44:31'),
(5, 'BODY CARE', '2018-06-05 18:44:56', '2018-06-05 18:44:56');

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
(23, '2013_06_05_025545_create_roles_table', 1),
(24, '2014_10_12_000000_create_users_table', 1),
(25, '2014_10_12_100000_create_password_resets_table', 1),
(26, '2018_06_04_011205_products_categories_table', 1),
(27, '2018_06_05_011502_products_table', 1),
(28, '2018_06_06_011733_product_reviews_table', 1);

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
-- Table structure for table `products`
--

CREATE TABLE `products` (
  `id` int(10) UNSIGNED NOT NULL,
  `product_category_id` int(10) UNSIGNED NOT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `brand` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `price` double(12,2) NOT NULL,
  `description` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `image` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `products`
--

INSERT INTO `products` (`id`, `product_category_id`, `name`, `brand`, `price`, `description`, `image`, `created_at`, `updated_at`) VALUES
(1, 1, 'Pro Filt\'r Soft Mattle Longwear Foundation ', 'Fenty Beauty', 1300.00, 'A soft matte, longwear foundation with buildable medium-to-full coverage, in a range of 40 shades.', 'makeup_fenty_foundation.jpg', '2018-06-05 21:04:20', '2018-06-05 21:04:20'),
(2, 1, 'Dew Drops Coconut Gel Highlighter Foundation', 'Marc Jacobs Beauty', 1300.00, 'An innovative foundation that delivers instant full coverage in a single dot—for less foundation for more coverage that lasts up to 24 hours.', 'marc_jacobs_foundation.jpg', '2018-06-05 21:09:54', '2018-06-05 21:09:54'),
(3, 1, 'Highliner Matte Gel Eye Crayon Eye liner', 'Marc Jacobs Beauty', 1300.00, 'A waterproof, gel eye crayon for a bold, matte finish.', 'marc_jacobs_eyeliner.jpg', '2018-06-05 21:13:37', '2018-06-05 21:13:37'),
(4, 2, 'VineActiv 3-in-1 Moisturizer', 'Caudalie', 2165.00, 'A daily moisturiser that instantly restores a youthful-looking glow, smooths the look of wrinkles, and protects the skin from damaging pollutant particles.', 'cuadalie_skincare_moisturizer.jpg', '2018-06-05 22:23:57', '2018-06-05 22:23:57'),
(5, 3, 'O&M Original Detox™ Shampoo', 'O&M', 1600.00, 'O&M is specially formulated for hairdressers by hairdressers to be safe and gentle while giving salon quality and performance. This product is cruelty-free, PETA approved, and formulated without gluten, triclosan, MIT, and propylene glycol. It comes in 100 percent recyclable packaging. \r\n\r\nOriginal Detox Shampoo is like a make-up remover for your hair. It will leave your hair feeling squeaky clean.\"—Jose Bryce Smith, Founder of Original & Mineral.', '1529477995.jpg', '2018-06-19 22:56:32', '2018-06-19 22:59:55');

-- --------------------------------------------------------

--
-- Table structure for table `reviews`
--

CREATE TABLE `reviews` (
  `id` int(10) UNSIGNED NOT NULL,
  `product_id` int(10) UNSIGNED NOT NULL,
  `user_id` int(10) UNSIGNED NOT NULL,
  `rating` int(11) NOT NULL DEFAULT '0',
  `title` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `content` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `approved` tinyint(1) NOT NULL DEFAULT '0',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `reviews`
--

INSERT INTO `reviews` (`id`, `product_id`, `user_id`, `rating`, `title`, `content`, `approved`, `created_at`, `updated_at`) VALUES
(3, 2, 1, 3, 'Nice product man', 'Cheap', 1, '2018-06-07 16:28:12', '2018-06-16 23:35:27'),
(4, 1, 1, 3, 'nice3', 'cheap3', 1, '2018-06-07 16:28:41', '2018-06-16 23:38:35'),
(7, 3, 1, 3, 'update this', 'update this', 1, '2018-06-07 16:56:12', '2018-06-17 04:00:25'),
(21, 3, 2, 4, 'My review here pls read', 'My review here pls read', 1, '2018-06-19 18:09:13', '2018-06-19 18:09:56'),
(23, 4, 3, 2, 'please read', 'please read', 1, '2018-06-20 16:23:23', '2018-06-20 16:23:38'),
(24, 4, 2, 5, 'trial multiple approval if working', 'trial multiple approval if working', 1, '2018-06-20 16:31:43', '2018-06-20 16:32:52');

-- --------------------------------------------------------

--
-- Table structure for table `roles`
--

CREATE TABLE `roles` (
  `id` int(10) UNSIGNED NOT NULL,
  `title` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `roles`
--

INSERT INTO `roles` (`id`, `title`, `created_at`, `updated_at`) VALUES
(1, 'user', NULL, NULL),
(2, 'admin', NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(10) UNSIGNED NOT NULL,
  `roles_id` int(10) UNSIGNED NOT NULL,
  `firstname` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `lastname` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `username` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `password` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `mobile` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `address` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `profile_image` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'user.png',
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `roles_id`, `firstname`, `lastname`, `username`, `password`, `email`, `mobile`, `address`, `profile_image`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 2, 'Mike', 'Mateo', 'mikemateo', '$2y$10$u9cqpgWREch9pvbVtRy4yuyRxQSFgPuWSvz07N1FAQmUyyi6qENHa', 'mike@email.com', '987654321', 'Phils', '1528879366.jpg', 'xGrbgpOWZdJEOZmQe44HqPo6ZVOlHLYnDKzxsCWror7TtD9i9bFcUK25jLOv', '2018-06-04 21:33:06', '2018-06-19 22:43:12'),
(2, 1, 'user1', 'user1', 'user1', '$2y$10$V4gw9lz8/dF8ANsvo9/sSOCpsTm6UkaD4c07Yn70rYJGh3rSxrRMK', 'user@email.com', '123456789', 'Phils', 'user.png', 'F5lB2zNN403RmInr6rzTPJY2qiLHUgTihOjFd0HPAaalai8L1fsFzxHQAe26', '2018-06-04 21:37:12', '2018-06-19 20:42:43'),
(3, 1, 'user2', 'user2', 'user2', '$2y$10$.bMru1ewYHuav2ZSOQ3Fbem4mq0iGgueybi5T6KZYqze6bKlzHskq', 'user2@email.com', '987654321', 'Phils', '1528894865.png', 'yjre657XWuK9hpuNx0DxX09UQ6Qla5fbGhcY3WnWt1jxmZwlk3TtV2fmlISI', '2018-06-04 21:38:19', '2018-06-13 05:01:05'),
(4, 1, 'user3', 'user3', 'user3', '$2y$10$ZaXteRgtekJ/URqCXUD5JOXwbnL9xfUQeY.0mke4rrp3Wey3BMdYK', 'user3@email.com', '654123789', 'Phils', 'user.png', NULL, '2018-06-04 21:40:41', '2018-06-17 21:42:58'),
(8, 1, 'Bam', 'Mateo', 'van', '$2y$10$ssRtAZDLb9Hft6qSEuPEvuO6IcGk6LGur/o/3ICHuovZQXAndav1m', 'bam@email.com', '12345678998', 'Makati', '1528894732.jpg', 'f2JpTpLXZMZO6n6bhZuQNUDJnO2DI5zCrmH6nz9lj8CYWpgzgvr8BJ3ikUSQ', '2018-06-08 17:59:23', '2018-06-13 04:59:09'),
(10, 2, 'admin', 'admin', 'admin', '$2y$10$N87bOYcVxa9h.92rTlKW2.2WLnGIDIKbekrMeR.vCE3vk6lvn8gDW', 'admin@email.com', '12345678', 'Phils', 'user.png', 'brTi9WbZoqTGLS2FzzDfgbyrQYsKHKpiN0DhLH250Ss3G4c0UmJx9QeUfFnv', '2018-06-19 17:41:34', '2018-06-19 17:41:55');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `categories`
--
ALTER TABLE `categories`
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
-- Indexes for table `products`
--
ALTER TABLE `products`
  ADD PRIMARY KEY (`id`),
  ADD KEY `products_product_category_id_foreign` (`product_category_id`);

--
-- Indexes for table `reviews`
--
ALTER TABLE `reviews`
  ADD PRIMARY KEY (`id`),
  ADD KEY `reviews_product_id_foreign` (`product_id`),
  ADD KEY `reviews_user_id_foreign` (`user_id`);

--
-- Indexes for table `roles`
--
ALTER TABLE `roles`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `users_username_unique` (`username`),
  ADD UNIQUE KEY `users_email_unique` (`email`),
  ADD KEY `users_roles_id_foreign` (`roles_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `categories`
--
ALTER TABLE `categories`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=29;

--
-- AUTO_INCREMENT for table `products`
--
ALTER TABLE `products`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `reviews`
--
ALTER TABLE `reviews`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=25;

--
-- AUTO_INCREMENT for table `roles`
--
ALTER TABLE `roles`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `products`
--
ALTER TABLE `products`
  ADD CONSTRAINT `products_product_category_id_foreign` FOREIGN KEY (`product_category_id`) REFERENCES `categories` (`id`) ON UPDATE CASCADE;

--
-- Constraints for table `reviews`
--
ALTER TABLE `reviews`
  ADD CONSTRAINT `reviews_product_id_foreign` FOREIGN KEY (`product_id`) REFERENCES `products` (`id`) ON UPDATE CASCADE,
  ADD CONSTRAINT `reviews_user_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `users`
--
ALTER TABLE `users`
  ADD CONSTRAINT `users_roles_id_foreign` FOREIGN KEY (`roles_id`) REFERENCES `roles` (`id`) ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
