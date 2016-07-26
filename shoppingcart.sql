-- phpMyAdmin SQL Dump
-- version 3.5.2.2
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Jul 26, 2016 at 02:00 PM
-- Server version: 5.5.27
-- PHP Version: 5.4.7

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `shoppingcart`
--

-- --------------------------------------------------------

--
-- Table structure for table `carts`
--

CREATE TABLE IF NOT EXISTS `carts` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `created_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  `updated_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  `title` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `image` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `amount` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `price` varchar(30) COLLATE utf8_unicode_ci NOT NULL,
  `totalprice` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=156 ;

--
-- Dumping data for table `carts`
--

INSERT INTO `carts` (`id`, `created_at`, `updated_at`, `title`, `image`, `amount`, `price`, `totalprice`) VALUES
(7, '2016-06-18 17:25:55', '2016-06-18 17:25:55', 'Female_Shoe', '11749582.jpg', '3', '90', '270'),
(137, '2016-06-22 05:46:07', '2016-06-22 05:46:07', 'Female_Shoe', '16008851.jpg', '4', '1234', '4936'),
(138, '2016-06-22 05:46:17', '2016-06-22 05:46:17', 'Shoe', 'download (1).jpg', '3', '1200', '3600'),
(139, '2016-06-22 05:46:35', '2016-06-22 05:46:35', 'Jeans', 'images (6).jpg', '3', '5789', '17367'),
(140, '2016-06-22 05:46:43', '2016-06-22 05:46:43', 'T_Shirt', 'images.jpg', '3', '240', '720'),
(141, '2016-06-22 05:46:52', '2016-06-22 05:46:52', 'Mobile', 'download (4).jpg', '4', '12345', '49380'),
(142, '2016-06-22 05:47:00', '2016-06-22 05:47:00', 'HeadPhone', 'stock-photo-headphones-with-tablet-on-wooden-table-close-up-313965362.jpg', '2', '230', '460'),
(143, '2016-06-22 13:38:37', '2016-06-22 13:38:37', 'HeadPhone', 'stock-photo-headphones-with-tablet-on-wooden-table-close-up-313965362.jpg', '3', '230', '690'),
(144, '2016-06-22 13:38:45', '2016-06-22 13:38:45', 'Mobile', 'download (4).jpg', '3', '12345', '37035'),
(145, '2016-06-22 13:38:55', '2016-06-22 13:38:55', 'T_Shirt', 'images.jpg', '4', '240', '960'),
(146, '2016-06-22 13:39:04', '2016-06-22 13:39:04', 'Jeans', 'images (6).jpg', '3', '5789', '17367'),
(147, '2016-06-22 14:03:16', '2016-06-22 14:03:16', 'Female_Shoe', '59257036.jpg', '4', '8000', '32000'),
(148, '2016-06-23 13:25:19', '2016-06-23 13:25:19', 'Mobile', 'download (5).jpg', '3', '60000', '180000'),
(149, '2016-06-25 02:32:32', '2016-06-25 02:32:32', 'T_Shirt', 'images.jpg', '2', '240', '480'),
(150, '2016-07-24 15:11:19', '2016-07-24 15:11:19', 'T_Shirt', 'images.jpg', '3', '240', '720'),
(151, '2016-07-25 11:11:48', '2016-07-25 11:11:48', 'HeadPhone', 'stock-photo-headphones-with-tablet-on-wooden-table-close-up-313965362.jpg', '3', '230', '690'),
(152, '2016-07-25 11:28:51', '2016-07-25 11:28:51', 'Mobile', 'download (5).jpg', '2', '60000', '120000'),
(153, '2016-07-25 14:04:30', '2016-07-25 14:04:30', 'Mobile', 'download (4).jpg', '3', '12345', '37035'),
(154, '2016-07-25 15:53:38', '2016-07-25 15:53:38', 'HeadPhone', 'stock-photo-headphones-with-tablet-on-wooden-table-close-up-313965362.jpg', '1', '230', '230'),
(155, '2016-07-26 05:57:31', '2016-07-26 05:57:31', 'HeadPhone', 'stock-photo-headphones-with-tablet-on-wooden-table-close-up-313965362.jpg', '1', '230', '230');

-- --------------------------------------------------------

--
-- Table structure for table `electronic_devices`
--

CREATE TABLE IF NOT EXISTS `electronic_devices` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `imagePath` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `title` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `description` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `price` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `created_at` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `updated_at` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=9 ;

--
-- Dumping data for table `electronic_devices`
--

INSERT INTO `electronic_devices` (`id`, `imagePath`, `title`, `description`, `price`, `created_at`, `updated_at`) VALUES
(1, 'stock-photo-headphones-with-tablet-on-wooden-table-close-up-313965362.jpg', 'HeadPhone', '          Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry''s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book', '230', '2016-06-17 00:54:51', '2016-06-17 00:54:51'),
(7, 'stock-vector-game-controller-icon-vector-illustration-342307478.jpg', 'EDevice', '          Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry''s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book.', '1234', '2016-06-22 19:50:46', '2016-06-22 19:50:46'),
(8, 'stock-photo-the-charger-for-the-phone-isolated-on-white-383681926.jpg', 'EDevice', '          Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry''s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book.', '700', '2016-06-22 19:51:08', '2016-06-22 19:51:08');

-- --------------------------------------------------------

--
-- Table structure for table `jeans`
--

CREATE TABLE IF NOT EXISTS `jeans` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `created_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  `updated_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  `imagePath` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `title` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `description` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `price` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=11 ;

--
-- Dumping data for table `jeans`
--

INSERT INTO `jeans` (`id`, `created_at`, `updated_at`, `imagePath`, `title`, `description`, `price`) VALUES
(6, '2016-06-22 03:27:34', '2016-06-22 03:27:34', 'download.jpg', 'Jeans', '          Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry''s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book.', '2345'),
(7, '2016-06-22 03:27:57', '2016-06-22 03:27:57', 'images (6).jpg', 'Jeans', '          Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry''s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book.', '5789'),
(8, '2016-06-22 13:33:54', '2016-06-22 13:33:54', 'images (1).jpg', 'T_Shirt', '          Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry''s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book.', '1224'),
(9, '2016-06-22 13:44:01', '2016-06-22 13:44:01', 'images (1).jpg', 'Jeans', '          Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry''s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book.', '5000'),
(10, '2016-06-22 13:44:17', '2016-06-22 13:44:17', 'download (1).jpg', 'Jeans', '          Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry''s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book.', '700');

-- --------------------------------------------------------

--
-- Table structure for table `migrations`
--

CREATE TABLE IF NOT EXISTS `migrations` (
  `migration` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `migrations`
--

INSERT INTO `migrations` (`migration`, `batch`) VALUES
('2014_10_12_000000_create_users_table', 1),
('2014_10_12_100000_create_password_resets_table', 1),
('2016_06_11_120712_create_products_table', 1),
('2016_06_11_120757_CreateProduct', 1),
('2016_06_15_182939_create_user_table', 2),
('2016_06_16_103048_create_files_table', 3),
('2016_06_16_103137_imageFile', 3),
('2016_06_17_002519_ElectronicDevice', 4),
('2016_06_17_002642_create_electronic_devices_table', 4),
('2016_06_17_010831_mobileDevice', 5),
('2016_06_17_010855_create_mobile_devices_table', 5),
('2016_06_17_101934_Clothes', 6),
('2016_06_17_102000_create_clothes_table', 6),
('2016_06_17_104739_shirt', 7),
('2016_06_17_104801_create_shirts_table', 7),
('2016_06_17_113153_jeans', 8),
('2016_06_17_113208_create_jeans_table', 8),
('2016_06_17_184652_shoe_male', 9),
('2016_06_17_184730_create_shoe_males_table', 9),
('2016_06_17_190713_female_shoes', 10),
('2016_06_17_190729_create_female_shoes_table', 10),
('2016_06_17_193148_shoe_female', 11),
('2016_06_17_193212_create_shoe_females_table', 11),
('2016_06_18_220217_Cart', 12),
('2016_06_18_220233_create_carts_table', 12),
('2016_06_25_123618_OrderTable', 13),
('2016_06_25_123653_create_order_tables_table', 13);

-- --------------------------------------------------------

--
-- Table structure for table `mobile_devices`
--

CREATE TABLE IF NOT EXISTS `mobile_devices` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `created_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  `updated_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  `imagePath` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `title` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `description` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `price` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=12 ;

--
-- Dumping data for table `mobile_devices`
--

INSERT INTO `mobile_devices` (`id`, `created_at`, `updated_at`, `imagePath`, `title`, `description`, `price`) VALUES
(1, '2016-06-16 19:26:55', '2016-06-16 19:26:55', 'download (4).jpg', 'Mobile', '          Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry''s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book', '12345'),
(9, '2016-06-22 13:51:50', '2016-06-22 13:51:50', 'download (5).jpg', 'Mobile', '          Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry''s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book.', '60000'),
(10, '2016-06-22 13:52:10', '2016-06-22 13:52:10', 'download (2).jpg', 'Mobile', '          Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry''s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book.', '4566'),
(11, '2016-06-22 13:52:24', '2016-06-22 13:52:24', 'download.jpg', 'Mobile', '          Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry''s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book.', '8000');

-- --------------------------------------------------------

--
-- Table structure for table `order_tables`
--

CREATE TABLE IF NOT EXISTS `order_tables` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `order_id` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `book_id` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `amount` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `price` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `total` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  `updated_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `password_resets`
--

CREATE TABLE IF NOT EXISTS `password_resets` (
  `email` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `token` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  KEY `password_resets_email_index` (`email`),
  KEY `password_resets_token_index` (`token`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `shirts`
--

CREATE TABLE IF NOT EXISTS `shirts` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `created_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  `updated_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  `imagePath` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `title` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `description` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `price` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=9 ;

--
-- Dumping data for table `shirts`
--

INSERT INTO `shirts` (`id`, `created_at`, `updated_at`, `imagePath`, `title`, `description`, `price`) VALUES
(6, '2016-06-22 03:26:42', '2016-06-22 03:26:42', 'images (3).jpg', 'T_Shirt', ' Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry''s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. ', '536'),
(7, '2016-06-22 03:26:58', '2016-06-22 03:26:58', 'images.jpg', 'T_Shirt', '          Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry''s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book.', '240'),
(8, '2016-06-22 13:41:50', '2016-06-22 13:41:50', 'images (2).jpg', 'T_Shirt', '          Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry''s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book.', '233');

-- --------------------------------------------------------

--
-- Table structure for table `shoe_females`
--

CREATE TABLE IF NOT EXISTS `shoe_females` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `created_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  `updated_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  `imagePath` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `title` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `description` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `price` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=11 ;

--
-- Dumping data for table `shoe_females`
--

INSERT INTO `shoe_females` (`id`, `created_at`, `updated_at`, `imagePath`, `title`, `description`, `price`) VALUES
(1, '2016-06-17 13:34:17', '2016-06-17 13:34:17', '16008851.jpg', 'Female_Shoe', '          Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry''s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book.', '1234'),
(9, '2016-06-22 13:48:23', '2016-06-22 13:48:23', '59257036.jpg', 'Female_Shoe', '          Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry''s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book.', '8000'),
(10, '2016-06-22 13:48:41', '2016-06-22 13:48:41', '22838501.jpg', 'Female_Shoe', '          Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry''s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book.', '2333');

-- --------------------------------------------------------

--
-- Table structure for table `shoe_males`
--

CREATE TABLE IF NOT EXISTS `shoe_males` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `created_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  `updated_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  `imagePath` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `title` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `description` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `price` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=9 ;

--
-- Dumping data for table `shoe_males`
--

INSERT INTO `shoe_males` (`id`, `created_at`, `updated_at`, `imagePath`, `title`, `description`, `price`) VALUES
(1, '2016-06-17 13:01:51', '2016-06-17 13:01:51', 'download (1).jpg', 'Shoe', '       Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry''s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book.   ', '1200'),
(6, '2016-06-22 13:46:31', '2016-06-22 13:46:31', 'download (4).jpg', 'Male_Shoe', '          Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry''s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book.', '3456'),
(7, '2016-06-22 13:46:49', '2016-06-22 13:46:49', 'download (2).jpg', 'Male_Shoe', '          Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry''s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book.', '2345'),
(8, '2016-06-22 14:02:35', '2016-06-22 14:02:35', 'download (4).jpg', 'Male_Shoe', '          Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry''s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book.', '567');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE IF NOT EXISTS `users` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `created_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  `updated_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  `email` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `password` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `user_email_unique` (`email`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=9 ;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `created_at`, `updated_at`, `email`, `password`) VALUES
(1, '2016-06-15 14:14:23', '2016-06-15 14:14:23', 'abulkalamcse30@gmail.com', '$2y$10$nkWhCSqHL.etL2DcVoC//uM4YwxcbXEb91I6VQeosMeDjcrbr7EjO'),
(2, '2016-06-15 14:19:37', '2016-06-15 14:19:37', 'abulkalam129@gmail.com', '$2y$10$YOeyJSPxYJIRLNnpjHznK.DBS2fdyJPpmRS9Z0lhVEeozXWTd0zqO'),
(3, '2016-07-24 18:20:54', '2016-07-24 18:20:54', 'proceed@gmail.com', '$2y$10$x5hS65aJdN7TXAkpWEBhcuIClCf6Pm6qwNAiz1jwNMW33jHtrcb9a'),
(5, '2016-07-24 19:38:56', '2016-07-24 19:38:56', 'dfg@gmail.com', '$2y$10$VrY3qK/Uz/7H7lBUjBOGe.Na89CSC7CZLB7HSlhrjyVbL9j4QXo/S'),
(6, '2016-07-24 19:56:19', '2016-07-24 19:56:19', 'azad@gmail.com', '$2y$10$aixheXM.gHolz4yHHF3GOe5PZtsrfHw.32qaux/SwBy8hW0Jum62O'),
(7, '2016-07-25 05:19:00', '2016-07-25 05:19:00', 'asdf@gmail.com', '$2y$10$waVkTJDTqXLTYCTjLkpMculGAT9BLQEKaFPr9F5PAwZV3lKFwRKti'),
(8, '2016-07-25 14:05:25', '2016-07-25 14:05:25', 'jony@gmail.com', '$2y$10$cRwSjBO7HN901x2JH0YrW.SWgEavSvFUAqVVtv1u55Fpd6.msXgxq');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
