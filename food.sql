-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Sep 24, 2022 at 11:32 AM
-- Server version: 10.4.24-MariaDB
-- PHP Version: 8.1.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `food`
--

-- --------------------------------------------------------

--
-- Table structure for table `admins`
--

CREATE TABLE `admins` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `role_id` int(10) UNSIGNED NOT NULL DEFAULT 3,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `mobile` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `first_name` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `last_name` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `dob` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `address` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `city` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `zip_code` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `country` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `photo` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'avatar.png',
  `access_token` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `status` tinyint(1) NOT NULL DEFAULT 1,
  `trash` tinyint(1) NOT NULL DEFAULT 0,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `admins`
--

INSERT INTO `admins` (`id`, `role_id`, `name`, `email`, `mobile`, `password`, `first_name`, `last_name`, `dob`, `address`, `city`, `zip_code`, `country`, `photo`, `access_token`, `status`, `trash`, `created_at`, `updated_at`) VALUES
(1, 3, 'Sharif', 'sharif@gmail.com', '01889045088', '$2y$10$82/jt3xXnuBOZdzx9E99J.KlEHh4zGshZP3IFkmYj8gOBJkl58ejO', NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'avatar.png', NULL, 1, 0, '2022-09-24 07:12:29', '2022-09-24 07:12:29');

-- --------------------------------------------------------

--
-- Table structure for table `allfoods`
--

CREATE TABLE `allfoods` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `photo` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `foodtypes` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `price` int(10) UNSIGNED DEFAULT NULL,
  `status` tinyint(1) NOT NULL DEFAULT 1,
  `trash` tinyint(1) NOT NULL DEFAULT 0,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `allfoods`
--

INSERT INTO `allfoods` (`id`, `photo`, `name`, `foodtypes`, `price`, `status`, `trash`, `created_at`, `updated_at`) VALUES
(1, '7cd3ed77bfa78fa5bed33238397fc452.jpg', 'Elish fish with rice', '[\"Elish Fish\"]', 1500, 1, 0, '2022-09-24 10:07:05', '2022-09-24 10:07:05'),
(2, 'edac72d26ff718e310fe758025c42df8.jpg', 'Meat with Rice', '[\"Meat\"]', 1000, 1, 0, '2022-09-24 10:07:28', '2022-09-24 10:07:28'),
(3, '593719273dba1a66e2edc607f3ac74b1.jpg', 'Cold Drink', '[\"Cold Drink\"]', 750, 1, 0, '2022-09-24 10:07:54', '2022-09-24 10:07:54'),
(5, '3a29a2ec84c540d335124dbd02829c4a.jpg', 'Only Meat', '[\"Meat\"]', 1200, 1, 0, '2022-09-24 10:12:39', '2022-09-24 10:12:39'),
(6, '0d130ea80c9e97987c91365aea93d3aa.jpg', 'Cold-drink-2', '[\"Cold Drink\"]', 350, 1, 0, '2022-09-24 10:13:16', '2022-09-24 10:13:16'),
(7, '1d59b60dadac61e227075b59bd06f92e.jpg', 'Elish fish with rice-2', '[\"Elish Fish\"]', 1800, 1, 0, '2022-09-24 10:14:10', '2022-09-24 10:14:10');

-- --------------------------------------------------------

--
-- Table structure for table `foodcategories`
--

CREATE TABLE `foodcategories` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `slug` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `status` tinyint(1) NOT NULL DEFAULT 1,
  `trash` tinyint(1) NOT NULL DEFAULT 0,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `foodcategories`
--

INSERT INTO `foodcategories` (`id`, `name`, `slug`, `status`, `trash`, `created_at`, `updated_at`) VALUES
(1, 'Pasta', 'pasta', 1, 0, '2022-09-24 10:05:22', '2022-09-24 10:05:22'),
(2, 'Meat', 'meat', 1, 0, '2022-09-24 10:05:28', '2022-09-24 10:05:28'),
(3, 'Cold Drink', 'cold-drink', 1, 0, '2022-09-24 10:05:39', '2022-09-24 10:05:39'),
(4, 'Fast Food', 'fast-food', 1, 0, '2022-09-24 10:05:49', '2022-09-24 10:05:49'),
(5, 'Elish Fish', 'elish-fish', 1, 0, '2022-09-24 10:06:15', '2022-09-24 10:06:15');

-- --------------------------------------------------------

--
-- Table structure for table `foodmenus`
--

CREATE TABLE `foodmenus` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `photo` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `title` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `slug` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `desc` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `status` tinyint(1) NOT NULL DEFAULT 1,
  `trash` tinyint(1) NOT NULL DEFAULT 0,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `foodmenus`
--

INSERT INTO `foodmenus` (`id`, `photo`, `title`, `slug`, `desc`, `status`, `trash`, `created_at`, `updated_at`) VALUES
(1, '14b1517bd41e6482d7918a0b8272267f.jpg', 'Menu Card', 'menu-card', '<p>The sliding menucard will surely impress your customers! Set up several pages and display them side by side, just as on a paper menucard!</p>', 1, 0, '2022-09-24 10:03:22', '2022-09-24 10:03:22'),
(2, '9f36b43f8e67e884eca721ad7d1e8e76.jpg', 'Fast Food', 'fast-food', '<p>The sliding menucard will surely impress your customers! Set up several pages and display them side by side, just as on a paper menucard!</p>', 1, 0, '2022-09-24 10:03:44', '2022-09-24 10:03:44'),
(3, 'aa27ab12b116b47744b79b8cdc3e64db.jpg', 'Reservation', 'reservation', '<p>The sliding menucard will surely impress your customers! Set up several pages and display them side by side, just as on a paper menucard!</p>', 1, 0, '2022-09-24 10:04:05', '2022-09-24 10:04:05');

-- --------------------------------------------------------

--
-- Table structure for table `locations`
--

CREATE TABLE `locations` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `address` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `cell` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `link` longtext COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `status` tinyint(1) NOT NULL DEFAULT 1,
  `trash` tinyint(1) NOT NULL DEFAULT 0,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `locations`
--

INSERT INTO `locations` (`id`, `address`, `email`, `cell`, `link`, `status`, `trash`, `created_at`, `updated_at`) VALUES
(1, '111/1/A Distillery Road, Gandaria, Dhaka', 'sharif971@gmail.com', '8801889045088', 'https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d7306.00450505743!2d90.43405115!3d23.7116136!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3755b9cc7d566d03%3A0x2472a49ac0504cd2!2sJatra%20Bari%2C%20Dhaka!5e0!3m2!1sen!2sbd!4v1663978161901!5m2!1sen!2sbd', 1, 0, '2022-09-24 07:12:59', '2022-09-24 07:12:59');

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
(6, '2022_09_23_030736_create_food_menus_table', 3),
(8, '2022_09_23_041503_create_allfoods_table', 5),
(56, '2019_12_14_000001_create_personal_access_tokens_table', 6),
(57, '2022_08_04_033940_create_admins_table', 6),
(58, '2022_08_04_063348_create_permissions_table', 6),
(59, '2022_08_04_124053_create_roles_table', 6),
(60, '2022_09_23_012212_create_sliders_table', 6),
(61, '2022_09_23_031405_create_foodmenus_table', 6),
(62, '2022_09_23_052321_create_allfoods_table', 6),
(63, '2022_09_23_201618_create_foodcategories_table', 6),
(64, '2022_09_23_233824_create_locations_table', 6),
(65, '2022_09_24_035505_create_reservations_table', 7);

-- --------------------------------------------------------

--
-- Table structure for table `permissions`
--

CREATE TABLE `permissions` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `slug` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `status` tinyint(1) NOT NULL DEFAULT 1,
  `trash` tinyint(1) NOT NULL DEFAULT 0,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
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
  `expires_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `reservations`
--

CREATE TABLE `reservations` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `subject` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `date` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `time` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `message` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `status` tinyint(1) NOT NULL DEFAULT 1,
  `trash` tinyint(1) NOT NULL DEFAULT 0,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `reservations`
--

INSERT INTO `reservations` (`id`, `name`, `email`, `subject`, `date`, `time`, `message`, `status`, `trash`, `created_at`, `updated_at`) VALUES
(32, 'sharif islam', 'shariful971@gmail.com', 'Reserved', '2022-09-20', '07:29', 'Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard', 1, 0, '2022-09-24 16:24:30', '2022-09-24 16:24:30'),
(33, 'sharif islam', 'shariful971@gmail.com', 'Reserved', '2022-09-28', '02:27', 'Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard', 1, 0, '2022-09-24 16:27:40', '2022-09-24 16:27:40');

-- --------------------------------------------------------

--
-- Table structure for table `roles`
--

CREATE TABLE `roles` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `slug` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `permissions` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `status` tinyint(1) NOT NULL DEFAULT 1,
  `trash` tinyint(1) NOT NULL DEFAULT 0,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `sliders`
--

CREATE TABLE `sliders` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `photo` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `title` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `desc` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `slogan` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `status` tinyint(1) NOT NULL DEFAULT 1,
  `trash` tinyint(1) NOT NULL DEFAULT 0,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `sliders`
--

INSERT INTO `sliders` (`id`, `photo`, `title`, `desc`, `slogan`, `status`, `trash`, `created_at`, `updated_at`) VALUES
(1, '8ac9a94ee046d1980aadc51e8e8091d2.jpg', 'For the love of delicious food.', '<p>There are many variations of passages of Lorem Ipsum available, but the majority have suffered</p>', NULL, 1, 0, '2022-09-24 10:01:15', '2022-09-24 10:01:15'),
(2, '3c797bf30a8106b380941e33277a44d6.jpg', 'Low cost. High quality.', '<p>All the Lorem Ipsum generators on the Internet tend to repeat predefined chunks as necessary, making this the first true generator on the Internet.</p>', NULL, 1, 0, '2022-09-24 10:01:58', '2022-09-24 10:01:58'),
(3, '946f8745a9a0443e19efb8f45832d589.jpg', 'We are always here to serve you.', '<p>Many desktop publishing packages and web page editors now use Lorem Ipsum as their default model text, and a search for&nbsp; lorem.</p>', NULL, 1, 0, '2022-09-24 10:02:46', '2022-09-24 10:02:46');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admins`
--
ALTER TABLE `admins`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `admins_email_unique` (`email`),
  ADD UNIQUE KEY `admins_mobile_unique` (`mobile`);

--
-- Indexes for table `allfoods`
--
ALTER TABLE `allfoods`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `allfoods_name_unique` (`name`);

--
-- Indexes for table `foodcategories`
--
ALTER TABLE `foodcategories`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `foodcategories_name_unique` (`name`);

--
-- Indexes for table `foodmenus`
--
ALTER TABLE `foodmenus`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `foodmenus_title_unique` (`title`),
  ADD UNIQUE KEY `foodmenus_slug_unique` (`slug`);

--
-- Indexes for table `locations`
--
ALTER TABLE `locations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `permissions`
--
ALTER TABLE `permissions`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `permissions_name_unique` (`name`),
  ADD UNIQUE KEY `permissions_slug_unique` (`slug`);

--
-- Indexes for table `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `personal_access_tokens_token_unique` (`token`),
  ADD KEY `personal_access_tokens_tokenable_type_tokenable_id_index` (`tokenable_type`,`tokenable_id`);

--
-- Indexes for table `reservations`
--
ALTER TABLE `reservations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `roles`
--
ALTER TABLE `roles`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `roles_name_unique` (`name`),
  ADD UNIQUE KEY `roles_slug_unique` (`slug`);

--
-- Indexes for table `sliders`
--
ALTER TABLE `sliders`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `sliders_title_unique` (`title`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admins`
--
ALTER TABLE `admins`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `allfoods`
--
ALTER TABLE `allfoods`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `foodcategories`
--
ALTER TABLE `foodcategories`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `foodmenus`
--
ALTER TABLE `foodmenus`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `locations`
--
ALTER TABLE `locations`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=66;

--
-- AUTO_INCREMENT for table `permissions`
--
ALTER TABLE `permissions`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `reservations`
--
ALTER TABLE `reservations`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=34;

--
-- AUTO_INCREMENT for table `roles`
--
ALTER TABLE `roles`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `sliders`
--
ALTER TABLE `sliders`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
