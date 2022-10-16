-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Generation Time: Oct 16, 2022 at 06:59 PM
-- Server version: 8.0.27
-- PHP Version: 7.4.26

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `e_panel`
--

-- --------------------------------------------------------

--
-- Table structure for table `products`
--

DROP TABLE IF EXISTS `products`;
CREATE TABLE IF NOT EXISTS `products` (
  `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `description` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `features` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `image` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=9 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `products`
--

INSERT INTO `products` (`id`, `name`, `description`, `features`, `image`, `created_at`, `updated_at`) VALUES
(6, 'Xiaomi', 'when an unknown printer took a galley of type', 'It has survived not only five centuries', 'resource/assets/images/products/1665946092.watch2.jpg', '2022-10-16 13:18:12', '2022-10-16 13:24:06'),
(5, 'Apple', 'Lorem Ipsum is simply dummy text', 'the industry\'s standard dummy text', 'resource/assets/images/products/1665946027.watch1.jpg', '2022-10-16 13:17:07', '2022-10-16 13:18:37'),
(8, 'Rolex', 'more recently with desktop publishing', 'software like Aldus PageMaker', 'resource/assets/images/products/1665946511.watch4.jpg', '2022-10-16 13:25:11', '2022-10-16 13:25:11'),
(7, 'Samsung', 'It was popularised in the 1960s with the', 'Letraset sheets containing Lorem Ipsum', 'resource/assets/images/products/1665946192.watch3.jpg', '2022-10-16 13:19:52', '2022-10-16 13:19:52');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
