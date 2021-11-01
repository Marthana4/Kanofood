-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Aug 27, 2021 at 07:43 AM
-- Server version: 10.4.13-MariaDB
-- PHP Version: 7.4.8

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `kanofood`
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
-- Table structure for table `menu_foods`
--

CREATE TABLE `menu_foods` (
  `id_menu` int(20) NOT NULL,
  `name_food` varchar(255) NOT NULL,
  `image` varchar(100) NOT NULL,
  `price` int(255) NOT NULL,
  `deskripsif` text NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `id_store` int(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `menu_foods`
--

INSERT INTO `menu_foods` (`id_menu`, `name_food`, `image`, `price`, `deskripsif`, `created_at`, `updated_at`, `id_store`) VALUES
(1, 'nasi goreng', 'Indonesian Fried Rice.jpg', 10000, 'nasi goreng pedas enak', NULL, '2021-08-26 06:52:23', 1),
(3, 'capjay', 'capjay.jpg', 15000, 'capjayy enakk', '2021-08-26 02:47:51', '2021-08-26 02:47:51', 12);

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
(3, '2019_08_19_000000_create_failed_jobs_table', 1);

-- --------------------------------------------------------

--
-- Table structure for table `order_details`
--

CREATE TABLE `order_details` (
  `id_detail` int(20) NOT NULL,
  `id_order` int(20) NOT NULL,
  `id_menu` int(20) NOT NULL,
  `quantity` int(100) NOT NULL,
  `total` int(100) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `order_menus`
--

CREATE TABLE `order_menus` (
  `id_order` int(20) NOT NULL,
  `reason` varchar(100) NOT NULL,
  `message` text NOT NULL,
  `order_date` datetime NOT NULL,
  `order_status` enum('cancel by seller','cancel by agent','process by agent','process by seller','done') NOT NULL,
  `total_order` int(100) NOT NULL,
  `user_cost` int(100) NOT NULL,
  `user_cost_remaining` int(100) NOT NULL,
  `is_read` enum('by customer','by agent','by seller') NOT NULL,
  `payment_status` enum('paid','unpaid') NOT NULL,
  `payment_date` datetime NOT NULL,
  `payment_type` varchar(20) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `id` bigint(20) UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

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
-- Table structure for table `payments`
--

CREATE TABLE `payments` (
  `id_pay` int(20) NOT NULL,
  `id_order` int(20) NOT NULL,
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(30) NOT NULL,
  `level` varchar(10) NOT NULL,
  `total_order` int(100) NOT NULL,
  `order_status` varchar(100) NOT NULL,
  `user_cost` int(100) NOT NULL,
  `user_cost_remaining` int(100) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `stores`
--

CREATE TABLE `stores` (
  `id_store` int(20) NOT NULL,
  `name_store` varchar(255) NOT NULL,
  `jam_buka` time DEFAULT NULL,
  `jam_tutup` time DEFAULT NULL,
  `alamat` varchar(100) NOT NULL,
  `deskripsi` text NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `id` bigint(20) UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `stores`
--

INSERT INTO `stores` (`id_store`, `name_store`, `jam_buka`, `jam_tutup`, `alamat`, `deskripsi`, `created_at`, `updated_at`, `id`) VALUES
(1, 'Warung Buk Diyahhhhhhhhhhhh', '09:00:00', '14:00:00', 'Jl danau kerinci', 'Warung pecel enak', NULL, '2021-08-19 07:17:03', 25),
(11, 'padang muragh', '04:26:00', '16:26:00', 'Jl danau kerinci', 'aaaa', '2021-08-16 02:26:40', '2021-08-16 02:36:12', 24),
(12, 'warung pak agung', '16:34:00', '04:34:00', 'jl sambas', 'aaaaaaaaaaaaa', '2021-08-16 02:34:39', '2021-08-17 22:43:39', 27);

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `no_hp` int(100) NOT NULL,
  `gender` enum('L','P') COLLATE utf8mb4_unicode_ci NOT NULL,
  `tanggal_lahir` date DEFAULT NULL,
  `level` enum('customer','agent','seller','admin') COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `no_hp`, `gender`, `tanggal_lahir`, `level`, `email`, `email_verified_at`, `password`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 'Andiek Suncahyo', 0, 'L', NULL, 'admin', 'andiek123@gmail.com', NULL, '$2y$10$bZp1Fw0bHR3fLAegzDXuZejL.txQ7AEX7LyK9tc.Jte5sq/QG.2Ae', 'nNPbDmkqTgVZyywHUiFPwzJ8feG5VELXavRp7cLVd8DuByezd9FFZlH0H0pm', '2021-07-18 21:59:51', '2021-07-18 21:59:51'),
(21, 'mastri', 8333090, 'L', '2021-07-04', 'agent', 'mastri@gmail.com', NULL, '$2y$10$FkdyECLH0QD/7C5MBa1fdOFJiMjrkLcgsHaHtZMh7YNDUdxHUEJn2', NULL, '2021-07-28 00:32:36', '2021-07-28 00:32:36'),
(24, 'dayangg', 1111110, 'P', '2021-08-01', 'seller', 'dayangg@gmail.com', NULL, '$2y$10$p4VjE6zZTqYowXyokwuX.uhyorjLJl3XQKUtg1BVJoVtA0y1eZPCe', NULL, '2021-08-01 21:20:06', '2021-08-01 21:20:06'),
(25, 'buk diah', 899999, 'P', '2021-08-09', 'seller', 'bukdiah@gmail.com', NULL, 'RZhOssDK6zbXkKFHiClzErKfPA1bMM+Mz8NWZNzNPB0=', NULL, NULL, NULL),
(26, 'diva', 135689, 'P', '2021-08-01', 'customer', 'diva@gmail.com', NULL, '$2y$10$hq72q3kJP7bknFkb7AbRzuMlhFtmgf1nqN2nJv65XwGvR2XMRniHm', NULL, '2021-08-04 06:45:37', '2021-08-04 06:45:37'),
(27, 'pak yoyok', 13567, 'L', '2021-08-05', 'seller', 'yoyokluv@gmail.com', NULL, '11111', NULL, '2021-08-17 22:19:13', '2021-08-17 22:19:13'),
(28, 'pak agung', 238264723, 'L', '2021-08-04', 'seller', 'agungluvv@gmail.com', NULL, '12345', NULL, '2021-08-17 22:26:08', '2021-08-22 20:35:32');

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
-- Indexes for table `menu_foods`
--
ALTER TABLE `menu_foods`
  ADD PRIMARY KEY (`id_menu`),
  ADD KEY `id_store` (`id_store`);

--
-- Indexes for table `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `order_details`
--
ALTER TABLE `order_details`
  ADD PRIMARY KEY (`id_detail`),
  ADD KEY `id_order` (`id_order`,`id_menu`),
  ADD KEY `id_menu` (`id_menu`);

--
-- Indexes for table `order_menus`
--
ALTER TABLE `order_menus`
  ADD PRIMARY KEY (`id_order`),
  ADD KEY `id_user` (`id`);

--
-- Indexes for table `password_resets`
--
ALTER TABLE `password_resets`
  ADD KEY `password_resets_email_index` (`email`);

--
-- Indexes for table `payments`
--
ALTER TABLE `payments`
  ADD PRIMARY KEY (`id_pay`),
  ADD KEY `id_user` (`id`),
  ADD KEY `id_user_2` (`id`),
  ADD KEY `id_order` (`id_order`);

--
-- Indexes for table `stores`
--
ALTER TABLE `stores`
  ADD PRIMARY KEY (`id_store`),
  ADD KEY `id_user` (`id`);

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
-- AUTO_INCREMENT for table `menu_foods`
--
ALTER TABLE `menu_foods`
  MODIFY `id_menu` int(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `order_details`
--
ALTER TABLE `order_details`
  MODIFY `id_detail` int(20) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `order_menus`
--
ALTER TABLE `order_menus`
  MODIFY `id_order` int(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `stores`
--
ALTER TABLE `stores`
  MODIFY `id_store` int(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=29;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `menu_foods`
--
ALTER TABLE `menu_foods`
  ADD CONSTRAINT `menu_foods_ibfk_1` FOREIGN KEY (`id_store`) REFERENCES `stores` (`id_store`);

--
-- Constraints for table `order_details`
--
ALTER TABLE `order_details`
  ADD CONSTRAINT `order_details_ibfk_1` FOREIGN KEY (`id_order`) REFERENCES `order_menus` (`id_order`),
  ADD CONSTRAINT `order_details_ibfk_2` FOREIGN KEY (`id_menu`) REFERENCES `menu_foods` (`id_menu`);

--
-- Constraints for table `order_menus`
--
ALTER TABLE `order_menus`
  ADD CONSTRAINT `order_menus_ibfk_3` FOREIGN KEY (`id`) REFERENCES `users` (`id`);

--
-- Constraints for table `payments`
--
ALTER TABLE `payments`
  ADD CONSTRAINT `payments_ibfk_1` FOREIGN KEY (`id`) REFERENCES `users` (`id`),
  ADD CONSTRAINT `payments_ibfk_2` FOREIGN KEY (`id_order`) REFERENCES `order_menus` (`id_order`);

--
-- Constraints for table `stores`
--
ALTER TABLE `stores`
  ADD CONSTRAINT `stores_ibfk_1` FOREIGN KEY (`id`) REFERENCES `users` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
