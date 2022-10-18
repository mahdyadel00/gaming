-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Oct 11, 2022 at 02:05 PM
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
-- Database: `gamming`
--

-- --------------------------------------------------------

--
-- Table structure for table `abouts`
--

CREATE TABLE `abouts` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `title_en` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `title_ar` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `description_en` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `description_ar` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `image` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `activat_user` int(11) NOT NULL,
  `employ_work` int(11) NOT NULL,
  `year_industry` int(11) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `ads`
--

CREATE TABLE `ads` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `title_en` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `title_ar` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `description_en` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `description_ar` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `image` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `auths`
--

CREATE TABLE `auths` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `login_image` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `register_image` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `auths`
--

INSERT INTO `auths` (`id`, `login_image`, `register_image`, `created_at`, `updated_at`) VALUES
(1, 'fdgdfg', 'fdfdg', '2022-08-03 11:15:57', '2022-08-16 12:00:51');

-- --------------------------------------------------------

--
-- Table structure for table `banners`
--

CREATE TABLE `banners` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `title_en` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `title_ar` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `description_en` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `description_ar` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `image` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `categories`
--

CREATE TABLE `categories` (
  `id` int(10) UNSIGNED NOT NULL,
  `title_en` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `title_ar` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `description_en` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `description_ar` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `image` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `parent_id` int(11) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `categories`
--

INSERT INTO `categories` (`id`, `title_en`, `title_ar`, `description_en`, `description_ar`, `image`, `parent_id`, `created_at`, `updated_at`) VALUES
(1, 'test', 'test', 'test', 'gfhfh', '/uploads/products/16622716091.png', NULL, '2022-08-03 11:15:57', '2022-09-04 04:06:49'),
(2, 'title', 'title', 'title', 'title', '/uploads/products/1662271616ed88e32ef339900ffbc45805dd79eea9.jpg', 1, '2022-08-03 11:15:57', '2022-09-04 04:06:56');

-- --------------------------------------------------------

--
-- Table structure for table `ch_favorites`
--

CREATE TABLE `ch_favorites` (
  `id` bigint(20) NOT NULL,
  `user_id` bigint(20) NOT NULL,
  `favorite_id` bigint(20) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `ch_messages`
--

CREATE TABLE `ch_messages` (
  `id` bigint(20) NOT NULL,
  `type` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `from_id` bigint(20) NOT NULL,
  `to_id` bigint(20) NOT NULL,
  `body` varchar(5000) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `attachment` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `seen` tinyint(1) NOT NULL DEFAULT 0,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `contacts`
--

CREATE TABLE `contacts` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `first_name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `last_name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `phone` int(11) NOT NULL,
  `message` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `published` tinyint(1) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `contacts`
--

INSERT INTO `contacts` (`id`, `first_name`, `last_name`, `email`, `phone`, `message`, `published`, `created_at`, `updated_at`) VALUES
(1, 'mahdy', 'adel', 'mahdy@email.com', 1122907742, 'this is the contact', 1, '2022-08-24 05:22:42', '2022-08-24 05:22:42'),
(2, 'mahdy', 'adel', 'hoor@email.com', 1324799879, 'dadssdasdas', 1, '2022-08-24 05:24:57', '2022-08-24 05:24:57'),
(3, 'mahdy', 'adel', 'master@master.com', 112255888, 'fdfdgfdg', 1, '2022-08-24 05:29:03', '2022-08-24 05:29:03'),
(4, 'mahdy', 'adel', 'hoor@email.com', 1122735544, 'ytuutyuyt', 1, '2022-08-24 05:31:13', '2022-08-24 05:31:13'),
(5, 'mahdy', 'adel', 'hoor@email.com', 1122554477, 'tetretret', 1, '2022-08-24 05:32:03', '2022-08-24 05:32:03'),
(6, 'mahdy', 'adel', 'master@master.com', 1122445588, 'dsdasdsada', 1, '2022-08-24 05:34:51', '2022-08-24 05:34:51');

-- --------------------------------------------------------

--
-- Table structure for table `countries`
--

CREATE TABLE `countries` (
  `id` int(10) UNSIGNED NOT NULL,
  `name_ar` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `name_en` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `code` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `description_ar` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `description_en` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `image` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `email_subscriptions`
--

CREATE TABLE `email_subscriptions` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

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
-- Table structure for table `favourite_products`
--

CREATE TABLE `favourite_products` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `user_id` int(10) UNSIGNED DEFAULT NULL,
  `product_id` int(10) UNSIGNED DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `image_products`
--

CREATE TABLE `image_products` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `image` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `product_id` int(10) UNSIGNED DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `image_products`
--

INSERT INTO `image_products` (`id`, `image`, `product_id`, `created_at`, `updated_at`) VALUES
(8, 'uploads\\products\\2\\min-1661952324.png', 2, '2022-09-27 11:17:50', '2022-09-27 11:17:50'),
(9, 'uploads\\products\\2\\min-1661782858.jpg', 2, '2022-09-27 11:25:16', '2022-09-27 11:25:16'),
(10, 'uploads\\products\\2\\min-1661863894.jpg', 2, '2022-09-27 11:25:17', '2022-09-27 11:25:17'),
(11, 'uploads\\products\\2\\min-1661952324.png', 2, '2022-09-27 11:25:18', '2022-09-27 11:25:18'),
(12, 'uploads\\products\\2\\min-1661955659.jpg', 2, '2022-09-27 11:25:18', '2022-09-27 11:25:18'),
(13, 'uploads\\products\\2\\1.png', 2, '2022-09-27 11:25:57', '2022-09-27 11:25:57'),
(14, 'uploads\\products\\2\\2.jpg', 2, '2022-09-27 11:25:58', '2022-09-27 11:25:58'),
(15, 'uploads\\products\\2\\3.jpg', 2, '2022-09-27 11:25:58', '2022-09-27 11:25:58'),
(16, 'uploads\\products\\2\\4.jpg', 2, '2022-09-27 11:25:59', '2022-09-27 11:25:59'),
(17, 'uploads\\products\\2\\1659535016 (1).jpg', 2, '2022-09-27 11:25:59', '2022-09-27 11:25:59'),
(18, 'uploads\\products\\2\\1659535016.jpg', 2, '2022-09-27 11:26:00', '2022-09-27 11:26:00'),
(19, 'uploads\\products\\2\\download.jpg', 2, '2022-09-27 11:26:00', '2022-09-27 11:26:00'),
(20, 'uploads\\products\\2\\ed88e32ef339900ffbc45805dd79eea9.jpg', 2, '2022-09-27 11:26:01', '2022-09-27 11:26:01'),
(21, 'uploads\\products\\2\\images.jpg', 2, '2022-09-27 11:26:01', '2022-09-27 11:26:01'),
(22, 'uploads\\products\\2\\IMG_0237.jpg', 2, '2022-09-27 11:26:02', '2022-09-27 11:26:02'),
(23, 'uploads\\products\\2\\min-1661435130.jpg', 2, '2022-09-27 11:26:02', '2022-09-27 11:26:02'),
(24, 'uploads\\products\\2\\min-1661782858.jpg', 2, '2022-09-27 11:26:03', '2022-09-27 11:26:03'),
(25, 'uploads\\products\\2\\min-1661863894.jpg', 2, '2022-09-27 11:26:03', '2022-09-27 11:26:03'),
(26, 'uploads\\products\\2\\min-1661952324.png', 2, '2022-09-27 11:26:04', '2022-09-27 11:26:04'),
(27, 'uploads\\products\\2\\min-1661955659.jpg', 2, '2022-09-27 11:26:04', '2022-09-27 11:26:04'),
(28, 'uploads\\products\\2\\min-1661955948.jpg', 2, '2022-09-27 11:26:05', '2022-09-27 11:26:05'),
(29, 'uploads\\products\\2\\min-1661956287.jpg', 2, '2022-09-27 11:26:05', '2022-09-27 11:26:05'),
(30, 'uploads\\products\\2\\min-1662026522.jpg', 2, '2022-09-27 11:26:06', '2022-09-27 11:26:06'),
(31, 'uploads\\products\\2\\min-1662380559.jpg', 2, '2022-09-27 11:26:06', '2022-09-27 11:26:06'),
(32, 'uploads\\products\\5\\1.png', 5, '2022-09-27 11:26:17', '2022-09-27 11:26:17'),
(33, 'uploads\\products\\5\\2.jpg', 5, '2022-09-27 11:26:18', '2022-09-27 11:26:18'),
(34, 'uploads\\products\\5\\3.jpg', 5, '2022-09-27 11:26:18', '2022-09-27 11:26:18'),
(35, 'uploads\\products\\5\\4.jpg', 5, '2022-09-27 11:26:19', '2022-09-27 11:26:19'),
(36, 'uploads\\products\\5\\1659535016 (1).jpg', 5, '2022-09-27 11:26:19', '2022-09-27 11:26:19'),
(37, 'uploads\\products\\5\\1659535016.jpg', 5, '2022-09-27 11:26:20', '2022-09-27 11:26:20'),
(38, 'uploads\\products\\5\\download.jpg', 5, '2022-09-27 11:26:20', '2022-09-27 11:26:20'),
(39, 'uploads\\products\\5\\ed88e32ef339900ffbc45805dd79eea9.jpg', 5, '2022-09-27 11:26:21', '2022-09-27 11:26:21'),
(40, 'uploads\\products\\5\\images.jpg', 5, '2022-09-27 11:26:21', '2022-09-27 11:26:21'),
(41, 'uploads\\products\\5\\IMG_0237.jpg', 5, '2022-09-27 11:26:22', '2022-09-27 11:26:22'),
(42, 'uploads\\products\\5\\min-1661435130.jpg', 5, '2022-09-27 11:26:23', '2022-09-27 11:26:23'),
(43, 'uploads\\products\\5\\min-1661782858.jpg', 5, '2022-09-27 11:26:23', '2022-09-27 11:26:23'),
(44, 'uploads\\products\\5\\min-1661863894.jpg', 5, '2022-09-27 11:26:24', '2022-09-27 11:26:24'),
(45, 'uploads\\products\\5\\min-1661952324.png', 5, '2022-09-27 11:26:24', '2022-09-27 11:26:24'),
(46, 'uploads\\products\\5\\min-1661955659.jpg', 5, '2022-09-27 11:26:24', '2022-09-27 11:26:24'),
(47, 'uploads\\products\\5\\min-1661955948.jpg', 5, '2022-09-27 11:26:25', '2022-09-27 11:26:25'),
(48, 'uploads\\products\\5\\min-1661956287.jpg', 5, '2022-09-27 11:26:25', '2022-09-27 11:26:25'),
(49, 'uploads\\products\\5\\min-1662026522.jpg', 5, '2022-09-27 11:26:26', '2022-09-27 11:26:26'),
(50, 'uploads\\products\\5\\min-1662380559.jpg', 5, '2022-09-27 11:26:26', '2022-09-27 11:26:26'),
(51, 'uploads\\products\\40\\min-1661782858.jpg', 40, '2022-09-27 11:27:54', '2022-09-27 11:27:54'),
(52, 'uploads\\products\\40\\min-1661863894.jpg', 40, '2022-09-27 11:27:54', '2022-09-27 11:27:54'),
(53, 'uploads\\products\\40\\min-1661952324.png', 40, '2022-09-27 11:27:55', '2022-09-27 11:27:55'),
(54, 'uploads\\products\\40\\min-1661955659.jpg', 40, '2022-09-27 11:27:55', '2022-09-27 11:27:55');

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
(3, '2019_08_19_000000_create_failed_jobs_table', 1),
(4, '2019_12_14_000001_create_personal_access_tokens_table', 1),
(5, '2022_08_18_133428_create_ads_table', 1),
(6, '2022_08_18_133539_create_categories_table', 1),
(7, '2022_08_18_133636_create_abouts_table', 1),
(8, '2022_08_18_133838_create_contacts_table', 1),
(9, '2022_08_18_134010_create_countries_table', 1),
(10, '2022_08_18_134109_create_products_table', 1),
(11, '2022_08_18_134407_create_favourite_products_table', 1),
(12, '2022_08_29_100920_create_sliders_table', 2),
(13, '2022_08_29_101029_create_banners_table', 2),
(14, '2022_08_29_101325_create_email_subscriptions_table', 3),
(15, '2022_08_30_102031_create_settings_table', 4),
(16, '2022_09_02_174907_create_permission_tables', 5),
(17, '2022_09_07_999999_add_active_status_to_users', 5),
(18, '2022_09_07_999999_add_avatar_to_users', 5),
(19, '2022_09_07_999999_add_dark_mode_to_users', 5),
(20, '2022_09_07_999999_add_messenger_color_to_users', 5),
(21, '2022_09_07_999999_create_favorites_table', 5),
(22, '2022_09_07_999999_create_messages_table', 5),
(23, '2022_09_10_999999_add_active_status_to_users', 6),
(24, '2022_09_10_999999_add_avatar_to_users', 6),
(25, '2022_09_10_999999_add_dark_mode_to_users', 6),
(26, '2022_09_10_999999_add_messenger_color_to_users', 6),
(27, '2022_09_10_999999_create_favorites_table', 7),
(28, '2022_09_10_999999_create_messages_table', 7),
(29, '2022_09_14_060020_create_image_products_table', 7),
(30, '2022_09_16_073321_create_auths_table', 8);

-- --------------------------------------------------------

--
-- Table structure for table `model_has_permissions`
--

CREATE TABLE `model_has_permissions` (
  `permission_id` bigint(20) UNSIGNED NOT NULL,
  `model_type` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `model_id` bigint(20) UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `model_has_roles`
--

CREATE TABLE `model_has_roles` (
  `role_id` bigint(20) UNSIGNED NOT NULL,
  `model_type` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `model_id` bigint(20) UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

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
-- Table structure for table `permissions`
--

CREATE TABLE `permissions` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `guard_name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
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
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `products`
--

CREATE TABLE `products` (
  `id` int(10) UNSIGNED NOT NULL,
  `title_en` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `title_ar` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `description_en` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `description_ar` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `view` int(11) NOT NULL,
  `image` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `price` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `condition` tinyint(1) NOT NULL,
  `authanticate` tinyint(1) NOT NULL,
  `nigotiable` tinyint(1) NOT NULL,
  `user_id` int(10) UNSIGNED DEFAULT NULL,
  `category_id` int(10) UNSIGNED DEFAULT NULL,
  `country_id` int(10) UNSIGNED DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `products`
--

INSERT INTO `products` (`id`, `title_en`, `title_ar`, `description_en`, `description_ar`, `view`, `image`, `price`, `condition`, `authanticate`, `nigotiable`, `user_id`, `category_id`, `country_id`, `created_at`, `updated_at`) VALUES
(1, 'titel en', 'title ar', 'hgjhgj', 'hgjhgj', 0, '/uploads/products/16622720324.jpg', '56', 1, 0, 1, 1, 2, NULL, '2022-09-04 04:13:52', '2022-09-26 05:57:53'),
(2, 'titel en', 'title ar', 'dfgf', 'dfgd', 49, '/uploads/products/16622720522.jpg', '5454', 1, 0, 0, 1, 1, NULL, '2022-09-04 04:14:13', '2022-09-27 11:25:11'),
(3, 'titel en', 'title ar', 'gdfgd', 'dfgfdg', 0, '/uploads/products/1662272067IMG_0237.jpg', '54', 0, 0, 0, 1, 1, NULL, '2022-09-04 04:14:27', '2022-09-04 04:14:27'),
(4, 'titel en', 'title ar', 'fghgfh', 'fghgfh', 0, '/uploads/products/1662273301product2.jpg', '45', 0, 1, 0, 3, 2, NULL, '2022-09-04 04:35:01', '2022-09-04 04:35:01'),
(5, 'titel en', 'title ar', 'dfgfdg', 'dfgdfg', 4, '/uploads/products/1662273333paymethods.png', '554', 1, 0, 0, 3, 2, NULL, '2022-09-04 04:35:33', '2022-09-27 11:33:44'),
(6, 'titel en', 'title ar', 'gfhfgh', 'gfhgfh', 0, '/uploads/products/1663139048min-1661863894.jpg', '45334', 1, 0, 0, 1, 1, NULL, '2022-09-14 05:04:08', '2022-09-14 05:04:08'),
(7, 'titel en', 'title ar', 'gfhfgh', 'gfhgfh', 0, '/uploads/products/1663139106min-1661863894.jpg', '45334', 1, 0, 0, 1, 1, NULL, '2022-09-14 05:05:06', '2022-09-14 05:05:06'),
(8, 'titel en', 'title ar', 'gfhfgh', 'gfhgfh', 0, '/uploads/products/1663139174min-1661863894.jpg', '45334', 1, 0, 0, 1, 1, NULL, '2022-09-14 05:06:14', '2022-09-14 05:06:14'),
(9, 'titel en', 'title ar', 'tyutyu', 'tyuytu', 0, '/uploads/products/1663139206min-1661952324.png', '87686', 1, 0, 0, 1, 1, NULL, '2022-09-14 05:06:46', '2022-09-14 05:06:46'),
(10, 'titel en', 'title ar', 'tyutyu', 'tyuytu', 0, '/uploads/products/1663139651min-1661952324.png', '87686', 1, 0, 0, 1, 1, NULL, '2022-09-14 05:14:11', '2022-09-14 05:14:11'),
(11, 'titel en', 'title ar', 'tyutyu', 'tyuytu', 0, '/uploads/products/1663139655min-1661952324.png', '87686', 1, 0, 0, 1, 1, NULL, '2022-09-14 05:14:15', '2022-09-14 05:14:15'),
(12, 'titel en', 'title ar', 'tyutyu', 'tyuytu', 0, '/uploads/products/1663139800min-1661952324.png', '87686', 1, 0, 0, 1, 1, NULL, '2022-09-14 05:16:40', '2022-09-14 05:16:40'),
(13, 'hgjgh', 'title ar', 'hgjhgjg', 'hgjgh', 0, '/uploads/products/1663740272min-1661782858.jpg', '565665', 1, 1, 0, 1, 2, NULL, '2022-09-21 04:04:32', '2022-09-21 04:04:32'),
(14, 'dsfdsf', 'sdfsdf', 'dsfsdf', 'fdgdfg', 0, '/uploads/products/1664172308min-1661863894.jpg', '34', 0, 1, 0, 1, 2, NULL, '2022-09-26 04:05:08', '2022-09-26 04:05:08'),
(15, 'titel en', 'title ar', 'fdgdf', 'dfgdfg', 0, '/uploads/products/1664174115min-1661863894.jpg', '344', 1, 0, 0, 1, 2, NULL, '2022-09-26 04:35:15', '2022-09-26 04:35:15'),
(16, 'titel en', 'title ar', 'fdgdf', 'dfgdfg', 0, '/uploads/products/1664174152min-1661863894.jpg', '344', 1, 0, 0, 1, 2, NULL, '2022-09-26 04:35:52', '2022-09-26 04:35:52'),
(17, 'titel en', 'title ar', 'fdgdf', 'dfgdfg', 0, '/uploads/products/1664174216min-1661863894.jpg', '344', 1, 0, 0, 1, 2, NULL, '2022-09-26 04:36:56', '2022-09-26 04:36:56'),
(18, 'titel en', 'title ar', 'fdgdf', 'dfgdfg', 0, '/uploads/products/1664174274min-1661863894.jpg', '344', 1, 0, 0, 1, 2, NULL, '2022-09-26 04:37:54', '2022-09-26 04:37:54'),
(19, 'titel en', 'title ar', 'fdgdf', 'dfgdfg', 0, '/uploads/products/1664174373min-1661863894.jpg', '344', 1, 0, 0, 1, 2, NULL, '2022-09-26 04:39:33', '2022-09-26 04:39:33'),
(20, 'titel en', 'title ar', 'adassad', 'fdgdfgdf', 0, '/uploads/products/1664174606min-1661863894.jpg', '4334', 1, 0, 0, 1, 2, NULL, '2022-09-26 04:43:26', '2022-09-26 04:43:26'),
(21, 'titel en', 'title ar', 'adassad', 'fdgdfgdf', 0, '/uploads/products/1664174624min-1661863894.jpg', '4334', 1, 0, 0, 1, 2, NULL, '2022-09-26 04:43:44', '2022-09-26 04:43:44'),
(22, 'titel en', 'title ar', 'adassad', 'fdgdfgdf', 0, '/uploads/products/1664174636min-1661863894.jpg', '4334', 1, 0, 0, 1, 2, NULL, '2022-09-26 04:43:56', '2022-09-26 04:43:56'),
(23, 'titel en', 'title ar', 'sqdasd', 'sdfdsfs', 0, '/uploads/products/1664174692min-1661952324.png', '3443', 1, 1, 0, 1, 2, NULL, '2022-09-26 04:44:52', '2022-09-26 04:44:52'),
(24, 'titel en', 'title ar', 'sqdasd', 'sdfdsfs', 0, '/uploads/products/1664174781min-1661952324.png', '3443', 1, 1, 0, 1, 2, NULL, '2022-09-26 04:46:21', '2022-09-26 04:46:21'),
(25, 'titel en', 'title ar', 'sqdasd', 'sdfdsfs', 0, '/uploads/products/1664174813min-1661952324.png', '3443', 1, 1, 0, 1, 2, NULL, '2022-09-26 04:46:53', '2022-09-26 04:46:53'),
(26, 'titel en', 'title ar', 'sqdasd', 'sdfdsfs', 0, '/uploads/products/1664174867min-1661952324.png', '3443', 1, 1, 0, 1, 2, NULL, '2022-09-26 04:47:47', '2022-09-26 04:47:47'),
(27, 'titel en', 'title ar', 'fgfdgf', 'dfgfdg', 0, '/uploads/products/1664174915min-1661952324.png', '54', 1, 1, 0, 1, 2, NULL, '2022-09-26 04:48:35', '2022-09-26 04:48:35'),
(28, 'titel en', 'title ar', 'fgfdgf', 'dfgfdg', 0, '/uploads/products/1664174947min-1661952324.png', '54', 1, 1, 0, 1, 2, NULL, '2022-09-26 04:49:07', '2022-09-26 04:49:07'),
(29, 'fggfhgf', 'fghgfh', 'fghfg', 'gfhgfh', 0, '/uploads/products/1664175136min-1661863894.jpg', '44554', 1, 1, 0, 1, 2, NULL, '2022-09-26 04:52:16', '2022-09-26 04:52:16'),
(30, 'fggfhgf', 'fghgfh', 'fghfg', 'gfhgfh', 0, '/uploads/products/1664175346min-1661863894.jpg', '44554', 1, 1, 0, 1, 2, NULL, '2022-09-26 04:55:46', '2022-09-26 04:55:46'),
(31, 'fggfhgf', 'fghgfh', 'fghfg', 'gfhgfh', 0, '/uploads/products/1664175479min-1661863894.jpg', '44554', 1, 1, 0, 1, 2, NULL, '2022-09-26 04:57:59', '2022-09-26 04:57:59'),
(32, 'fggfhgf', 'fghgfh', 'fghfg', 'gfhgfh', 0, '/uploads/products/1664175494min-1661863894.jpg', '44554', 1, 1, 0, 1, 2, NULL, '2022-09-26 04:58:14', '2022-09-26 04:58:14'),
(33, 'fggfhgf', 'fghgfh', 'fghfg', 'gfhgfh', 0, '/uploads/products/1664175526min-1661863894.jpg', '44554', 1, 1, 0, 1, 2, NULL, '2022-09-26 04:58:46', '2022-09-26 04:58:46'),
(34, 'fggfhgf', 'fghgfh', 'fghfg', 'gfhgfh', 0, '/uploads/products/1664175561min-1661863894.jpg', '44554', 1, 1, 0, 1, 2, NULL, '2022-09-26 04:59:21', '2022-09-26 04:59:21'),
(35, 'fggfhgf', 'fghgfh', 'fghfg', 'gfhgfh', 0, '/uploads/products/1664176353min-1661863894.jpg', '44554', 1, 1, 0, 1, 2, NULL, '2022-09-26 05:12:33', '2022-09-26 05:12:33'),
(36, 'hgjgh', 'sdfsdf', 'ertert', 'ertret', 0, '/uploads/products/1664176379min-1661952324.png', '5455', 1, 1, 0, 1, 1, NULL, '2022-09-26 05:12:59', '2022-09-26 05:12:59'),
(37, 'hgjgh', 'sdfsdf', 'ertert', 'ertret', 0, '/uploads/products/1664176411min-1661952324.png', '5455', 1, 1, 0, 1, 1, NULL, '2022-09-26 05:13:31', '2022-09-26 05:13:31'),
(38, 'hgjgh', 'sdfsdf', 'ertert', 'ertret', 0, '/uploads/products/1664176421min-1661952324.png', '5455', 1, 1, 0, 1, 1, NULL, '2022-09-26 05:13:41', '2022-09-26 05:13:41'),
(39, 'titel en', 'title ar', 'asdsad', 'sadsad', 0, '/uploads/products/1664178892min-1661952324.png', '3232', 1, 1, 0, 1, 2, NULL, '2022-09-26 05:54:52', '2022-09-26 05:54:52'),
(40, 'titel en', 'title ar', 'sdfdsf', 'dsfsdf', 2, '/uploads/products/1664285243min-1661952324.png', '43', 0, 1, 0, 1, 2, NULL, '2022-09-27 11:27:23', '2022-09-27 11:31:13');

-- --------------------------------------------------------

--
-- Table structure for table `roles`
--

CREATE TABLE `roles` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `guard_name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `role_has_permissions`
--

CREATE TABLE `role_has_permissions` (
  `permission_id` bigint(20) UNSIGNED NOT NULL,
  `role_id` bigint(20) UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `settings`
--

CREATE TABLE `settings` (
  `id` int(10) UNSIGNED NOT NULL,
  `title_en` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `title_ar` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `logo` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `facebook_link` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `twitter_link` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `linkedin_link` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `youtube_link` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `start_from` time NOT NULL,
  `end_at` time NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `address` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `phone` int(11) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `settings`
--

INSERT INTO `settings` (`id`, `title_en`, `title_ar`, `logo`, `facebook_link`, `twitter_link`, `linkedin_link`, `youtube_link`, `start_from`, `end_at`, `email`, `address`, `phone`, `created_at`, `updated_at`) VALUES
(1, 'gamming EN', 'Gamming AR', '/uploads/settings/16620190821606745659.jpg', 'http://localhost/phpmyadmin/index.php?route=/sql&db=gamming&table=settings&pos=0', 'http://localhost/phpmyadmin/index.php?route=/sql&db=gamming&table=settings&pos=0', 'http://localhost/phpmyadmin/index.php?route=/sql&db=gamming&table=settings&pos=0', 'http://localhost/phpmyadmin/index.php?route=/sql&db=gamming&table=settings&pos=0', '08:52:00', '00:35:04', 'gamming@email.com', 'Al Mansoura', 1122907742, '2022-08-09 12:00:51', '2022-09-01 05:58:02');

-- --------------------------------------------------------

--
-- Table structure for table `sliders`
--

CREATE TABLE `sliders` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `title_en` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `title_ar` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `description_en` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `description_ar` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `image` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `sliders`
--

INSERT INTO `sliders` (`id`, `title_en`, `title_ar`, `description_en`, `description_ar`, `image`, `created_at`, `updated_at`) VALUES
(1, 'rtter', 'fgfdg', 'fdgfd', 'dfgdfg', '/uploads/sliders/16622723851.png', '2022-09-04 04:19:45', '2022-09-04 04:19:45');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(10) UNSIGNED NOT NULL,
  `first_name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `last_name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `country` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `phone` int(11) NOT NULL,
  `status` tinyint(1) NOT NULL,
  `image` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `active_status` tinyint(1) NOT NULL DEFAULT 0,
  `avatar` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'avatar.png',
  `dark_mode` tinyint(1) NOT NULL DEFAULT 0,
  `messenger_color` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT '#2180f3'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `first_name`, `last_name`, `email`, `country`, `phone`, `status`, `image`, `email_verified_at`, `password`, `remember_token`, `created_at`, `updated_at`, `active_status`, `avatar`, `dark_mode`, `messenger_color`) VALUES
(1, 'Super', 'Admin', 'admin@email.com', '', 0, 0, '', NULL, '$2y$10$afl4UslJFo45Gk81ScytyuiJ22tbdFNMrCFoyl23sqBOrf4Ry7kpC', NULL, '2022-08-03 11:15:57', '2022-09-07 04:19:28', 0, 'b0ea3f07-a44e-4d93-bcc4-e03f79143b34.png', 0, '#4CAF50'),
(2, 'mahdy', 'adel', 'mahdi@email.com', '', 0, 0, '', NULL, '$2y$10$BvcFNKKirIcic1pKMVyWgOWHmm1N66S1rhXJ5xg8IXEqiCv0a0Z2a', NULL, '2022-08-24 07:14:26', '2022-08-24 07:14:26', 0, 'avatar.png', 0, '#2180f3'),
(3, 'mahdy', 'adel', 'mahdy@email.com', '', 1122907742, 0, '/uploads/users/1662272741user-avatar.png', NULL, '$2y$10$YF9MCrH/yVNbegH9mOZXvOFj9to0cx8rlsjoMbnjF5aigJk88Bzki', NULL, '2022-09-04 04:25:41', '2022-09-07 04:20:40', 0, 'cc9d937f-4b83-4196-99af-cc38ce9d2bb9.jpg', 1, '#2180f3'),
(4, 'ahmed', 'mohamed', 'ahmed@email.com', '', 1065839463, 0, '/uploads/users/16625318281.png', NULL, '$2y$10$EEioRpcVF7F.EdSdPhOTbOGtcuJAT1RblQtr3OT4OoO4fyxsGMlea', NULL, '2022-09-07 04:23:48', '2022-09-07 04:23:48', 0, 'avatar.png', 0, '#2180f3'),
(5, 'ahmed', 'mohamed', 'gg@email.com', '', 1122754422, 0, '/uploads/users/1662554915Month_Boy.png', NULL, '$2y$10$4.dGpNnRZcVW2540mrtscuYZhN0LQfRIKOdiO2UgyPZilduc0NOva', NULL, '2022-09-07 10:48:35', '2022-09-07 10:48:35', 0, 'avatar.png', 0, '#2180f3'),
(6, 'errytr', 'rtytryt', 'ahhmed@email.com', '', 225588669, 0, '/uploads/users/1662554988Month_Boy.png', NULL, '$2y$10$OybMRClJiK8MYZnZ9yBJ2OgIaAMeDrisPuANOBDh2wbBnzrrLf70.', NULL, '2022-09-07 10:49:48', '2022-09-07 10:49:48', 0, 'avatar.png', 0, '#2180f3'),
(8, 'errytr', 'rtytryt', 'ahhmhhed@email.com', 'United States', 1122554477, 0, '/uploads/users/1662555090S29.png', NULL, '$2y$10$JY5s.yxIkZJlDoWenqv3cOvymhT2Q6lHKVCQ8siBUTGmQl9JrFcoq', NULL, '2022-09-07 10:51:30', '2022-09-07 10:51:30', 0, 'avatar.png', 0, '#2180f3'),
(10, 'mahdy', 'adel', 'adhmin@email.com', 'Egypt', 1122554499, 0, '/uploads/users/1662973601min-1661955659.jpg', NULL, '$2y$10$a7hEqhqDa5AhzqLnR5vbTurCnjZT7tFlv1p70yYzucf7SGzixeE.u', NULL, '2022-09-12 07:06:41', '2022-09-12 07:06:41', 0, 'avatar.png', 0, '#2180f3');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `abouts`
--
ALTER TABLE `abouts`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `ads`
--
ALTER TABLE `ads`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `auths`
--
ALTER TABLE `auths`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `banners`
--
ALTER TABLE `banners`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `categories`
--
ALTER TABLE `categories`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `ch_favorites`
--
ALTER TABLE `ch_favorites`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `ch_messages`
--
ALTER TABLE `ch_messages`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `contacts`
--
ALTER TABLE `contacts`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `countries`
--
ALTER TABLE `countries`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `email_subscriptions`
--
ALTER TABLE `email_subscriptions`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `failed_jobs_uuid_unique` (`uuid`);

--
-- Indexes for table `favourite_products`
--
ALTER TABLE `favourite_products`
  ADD PRIMARY KEY (`id`),
  ADD KEY `favourite_products_user_id_foreign` (`user_id`),
  ADD KEY `favourite_products_product_id_foreign` (`product_id`);

--
-- Indexes for table `image_products`
--
ALTER TABLE `image_products`
  ADD PRIMARY KEY (`id`),
  ADD KEY `image_products_product_id_foreign` (`product_id`);

--
-- Indexes for table `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `model_has_permissions`
--
ALTER TABLE `model_has_permissions`
  ADD PRIMARY KEY (`permission_id`,`model_id`,`model_type`),
  ADD KEY `model_has_permissions_model_id_model_type_index` (`model_id`,`model_type`);

--
-- Indexes for table `model_has_roles`
--
ALTER TABLE `model_has_roles`
  ADD PRIMARY KEY (`role_id`,`model_id`,`model_type`),
  ADD KEY `model_has_roles_model_id_model_type_index` (`model_id`,`model_type`);

--
-- Indexes for table `password_resets`
--
ALTER TABLE `password_resets`
  ADD KEY `password_resets_email_index` (`email`);

--
-- Indexes for table `permissions`
--
ALTER TABLE `permissions`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `permissions_name_guard_name_unique` (`name`,`guard_name`);

--
-- Indexes for table `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `personal_access_tokens_token_unique` (`token`),
  ADD KEY `personal_access_tokens_tokenable_type_tokenable_id_index` (`tokenable_type`,`tokenable_id`);

--
-- Indexes for table `products`
--
ALTER TABLE `products`
  ADD PRIMARY KEY (`id`),
  ADD KEY `products_user_id_foreign` (`user_id`),
  ADD KEY `products_category_id_foreign` (`category_id`),
  ADD KEY `products_country_id_foreign` (`country_id`);

--
-- Indexes for table `roles`
--
ALTER TABLE `roles`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `roles_name_guard_name_unique` (`name`,`guard_name`);

--
-- Indexes for table `role_has_permissions`
--
ALTER TABLE `role_has_permissions`
  ADD PRIMARY KEY (`permission_id`,`role_id`),
  ADD KEY `role_has_permissions_role_id_foreign` (`role_id`);

--
-- Indexes for table `settings`
--
ALTER TABLE `settings`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `sliders`
--
ALTER TABLE `sliders`
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
-- AUTO_INCREMENT for table `abouts`
--
ALTER TABLE `abouts`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `ads`
--
ALTER TABLE `ads`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `auths`
--
ALTER TABLE `auths`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `banners`
--
ALTER TABLE `banners`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `categories`
--
ALTER TABLE `categories`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `contacts`
--
ALTER TABLE `contacts`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `countries`
--
ALTER TABLE `countries`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `email_subscriptions`
--
ALTER TABLE `email_subscriptions`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `favourite_products`
--
ALTER TABLE `favourite_products`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `image_products`
--
ALTER TABLE `image_products`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=55;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=31;

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
-- AUTO_INCREMENT for table `products`
--
ALTER TABLE `products`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=41;

--
-- AUTO_INCREMENT for table `roles`
--
ALTER TABLE `roles`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `settings`
--
ALTER TABLE `settings`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `sliders`
--
ALTER TABLE `sliders`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `favourite_products`
--
ALTER TABLE `favourite_products`
  ADD CONSTRAINT `favourite_products_product_id_foreign` FOREIGN KEY (`product_id`) REFERENCES `products` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `favourite_products_user_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `image_products`
--
ALTER TABLE `image_products`
  ADD CONSTRAINT `image_products_product_id_foreign` FOREIGN KEY (`product_id`) REFERENCES `products` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `model_has_permissions`
--
ALTER TABLE `model_has_permissions`
  ADD CONSTRAINT `model_has_permissions_permission_id_foreign` FOREIGN KEY (`permission_id`) REFERENCES `permissions` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `model_has_roles`
--
ALTER TABLE `model_has_roles`
  ADD CONSTRAINT `model_has_roles_role_id_foreign` FOREIGN KEY (`role_id`) REFERENCES `roles` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `products`
--
ALTER TABLE `products`
  ADD CONSTRAINT `products_category_id_foreign` FOREIGN KEY (`category_id`) REFERENCES `categories` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `products_country_id_foreign` FOREIGN KEY (`country_id`) REFERENCES `countries` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `products_user_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `role_has_permissions`
--
ALTER TABLE `role_has_permissions`
  ADD CONSTRAINT `role_has_permissions_permission_id_foreign` FOREIGN KEY (`permission_id`) REFERENCES `permissions` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `role_has_permissions_role_id_foreign` FOREIGN KEY (`role_id`) REFERENCES `roles` (`id`) ON DELETE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
