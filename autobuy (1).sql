-- phpMyAdmin SQL Dump
-- version 4.1.14
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Jul 01, 2016 at 08:34 PM
-- Server version: 5.6.17
-- PHP Version: 5.5.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `autobuy`
--

-- --------------------------------------------------------

--
-- Table structure for table `access`
--

CREATE TABLE IF NOT EXISTS `access` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `accessUnits` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `postID` int(11) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=4 ;

--
-- Dumping data for table `access`
--

INSERT INTO `access` (`id`, `accessUnits`, `postID`, `created_at`, `updated_at`) VALUES
(1, '1 2 3 4 5 6 7 8 9 10', 1, NULL, NULL),
(2, '1 2 3 4 5 6 7', 11, NULL, NULL),
(3, '1 3 6', 12, NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `carbrandlookups`
--

CREATE TABLE IF NOT EXISTS `carbrandlookups` (
  `brandNo` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `brand` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  PRIMARY KEY (`brandNo`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=3 ;

--
-- Dumping data for table `carbrandlookups`
--

INSERT INTO `carbrandlookups` (`brandNo`, `brand`) VALUES
(1, 'Lifan'),
(2, 'Jac');

-- --------------------------------------------------------

--
-- Table structure for table `carnamelookups`
--

CREATE TABLE IF NOT EXISTS `carnamelookups` (
  `nameNo` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  PRIMARY KEY (`nameNo`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=11 ;

--
-- Dumping data for table `carnamelookups`
--

INSERT INTO `carnamelookups` (`nameNo`, `name`) VALUES
(1, 'Lifan 820'),
(2, 'jac S5'),
(3, 'Jac S5 2.0 Turbo AT'),
(4, 'Jac S5 2.0 Turbo'),
(5, 'Jac J5 AT'),
(6, 'Jac J5 AT'),
(7, 'Lifan 620 1600cc'),
(8, 'Lifan X50 AT'),
(9, 'Jac J5 AT'),
(10, 'Lifan 820 2400cc');

-- --------------------------------------------------------

--
-- Table structure for table `carpurchases`
--

CREATE TABLE IF NOT EXISTS `carpurchases` (
  `purchaseCode` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `cars_carNo` int(10) unsigned NOT NULL,
  `count` int(11) NOT NULL,
  `dateOfReceive` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`purchaseCode`),
  KEY `carpurchases_cars_carno_foreign` (`cars_carNo`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `cars`
--

CREATE TABLE IF NOT EXISTS `cars` (
  `carNo` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `carStock` int(11) NOT NULL,
  `carModel` int(11) NOT NULL,
  `carBrandLookups_brandNo` int(10) unsigned NOT NULL,
  `carNameLookups_nameNo` int(10) unsigned NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`carNo`),
  KEY `cars_carbrandlookups_brandno_foreign` (`carBrandLookups_brandNo`),
  KEY `cars_carnamelookups_nameno_foreign` (`carNameLookups_nameNo`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=9 ;

--
-- Dumping data for table `cars`
--

INSERT INTO `cars` (`carNo`, `carStock`, `carModel`, `carBrandLookups_brandNo`, `carNameLookups_nameNo`, `created_at`, `updated_at`) VALUES
(3, 10, 2015, 2, 3, NULL, NULL),
(7, 10, 2015, 2, 9, '2016-06-30 07:38:37', '2016-06-30 07:38:37'),
(8, 40, 2016, 1, 10, '2016-07-01 11:15:15', '2016-07-01 11:15:15');

-- --------------------------------------------------------

--
-- Table structure for table `customers`
--

CREATE TABLE IF NOT EXISTS `customers` (
  `nationalCode` int(11) NOT NULL,
  `id` int(11) NOT NULL,
  `name` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `family` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `address` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `city` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `phoneNo` int(11) NOT NULL,
  `mobileNo` int(11) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `customerCode` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `sale_id` int(10) unsigned NOT NULL,
  PRIMARY KEY (`customerCode`),
  KEY `customers_sale_id_foreign` (`sale_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=6 ;

--
-- Dumping data for table `customers`
--

INSERT INTO `customers` (`nationalCode`, `id`, `name`, `family`, `address`, `city`, `phoneNo`, `mobileNo`, `created_at`, `updated_at`, `customerCode`, `sale_id`) VALUES
(978, 9100, 'شیوا ', 'قنبری', 'ستارخان', 'تهران', 6556, 6555, '2016-07-01 09:43:16', '2016-07-01 09:43:16', 2, 3),
(56789, 54, 'شیوا ', 'نمدتنلد', 'jkjkbjkj  jn injknkj', 'Tehran', 897687, 56789, '2016-07-01 09:46:13', '2016-07-01 09:46:13', 3, 4),
(555, 512, 'شیوا ', 'jckjhd', 'bjknlm;,', 'cjdch', 5454, 5554, '2016-07-01 10:12:07', '2016-07-01 10:12:07', 4, 5),
(2147483647, 987786, 'jb`', 'jhbkjb', 'ghvhgvhjb', '87968787', 687678, 876876, '2016-07-01 10:16:48', '2016-07-01 10:16:48', 5, 6);

-- --------------------------------------------------------

--
-- Table structure for table `extraoptions`
--

CREATE TABLE IF NOT EXISTS `extraoptions` (
  `optionNo` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `cars_carNo` int(10) unsigned NOT NULL,
  `cost` int(11) NOT NULL,
  `optionName` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`optionNo`),
  KEY `extraoptions_cars_carno_foreign` (`cars_carNo`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=1 ;

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
('2013_06_27_135837_create_postLookups_table', 1),
('2014_10_12_000000_create_users_table', 1),
('2014_10_12_100000_create_password_resets_table', 1),
('2016_06_20_102959_create_statusLookup_table', 1),
('2016_06_20_103047_create_saleTypeLookup_table', 1),
('2016_06_20_103120_create_carBrandLookup_table', 1),
('2016_06_20_104005_create_carNameLookup_table', 1),
('2016_06_21_072741_create_car_table', 1),
('2016_06_21_075504_create_termOfSale_table', 1),
('2016_06_21_082726_create_carPurchase_table', 1),
('2016_06_21_082750_create_sale_table', 1),
('2016_06_21_082754_create_customer_table', 1),
('2016_06_21_093141_create_extraOption_table', 1),
('2016_06_21_093421_create_survey_table', 1),
('2016_06_21_093451_create_surveyRespond_table', 1),
('2016_06_21_100451_create_payment_table', 1),
('2016_06_28_104400_creat_access_table', 2),
('2016_06_28_105534_create_table_units', 3),
('2016_06_28_194957_drop_status_lookup_sales_table', 4),
('2016_06_28_195939_add_isConfirmed_column_table', 5),
('2016_06_28_200402_drop_statusLookups_table', 6),
('2016_06_29_104030_add_saleTypeLookups_table', 7),
('2016_07_01_120601_add-saleID_sales_table', 8),
('2016_07_01_120809_add-customerCode_customers_table', 9),
('2016_07_01_122002_drop-saleTrackingCode_customers_table', 10),
('2016_07_01_124532_drop-saleCode_customers_table', 11),
('2016_07_01_124606_drop-_saleCode_table', 11),
('2016_07_01_124650_add-id_sales_table', 12),
('2016_07_01_124738_add-sale_id_customers_table', 12);

-- --------------------------------------------------------

--
-- Table structure for table `password_resets`
--

CREATE TABLE IF NOT EXISTS `password_resets` (
  `email` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `token` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `created_at` timestamp NOT NULL,
  KEY `password_resets_email_index` (`email`),
  KEY `password_resets_token_index` (`token`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `payments`
--

CREATE TABLE IF NOT EXISTS `payments` (
  `paymentDate` timestamp NOT NULL,
  `sale_saleTrackingCode` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `amount` bigint(20) NOT NULL,
  `digitalReceipt` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `paymentGateway` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `transactionNo` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `success` tinyint(1) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`transactionNo`),
  KEY `payments_sale_saletrackingcode_foreign` (`sale_saleTrackingCode`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `postlookups`
--

CREATE TABLE IF NOT EXISTS `postlookups` (
  `postID` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `post` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`postID`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=13 ;

--
-- Dumping data for table `postlookups`
--

INSERT INTO `postlookups` (`postID`, `post`, `created_at`, `updated_at`) VALUES
(1, 'مدیر سیستم', NULL, NULL),
(11, 'مدیر فروش', NULL, NULL),
(12, 'کارشناس فروش', NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `sales`
--

CREATE TABLE IF NOT EXISTS `sales` (
  `saleTrackingCode` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `date` date NOT NULL,
  `termOfSale_termOfSaleNo` int(10) unsigned NOT NULL,
  `cars_carNo` int(10) unsigned NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `isConfirmed` tinyint(1) NOT NULL,
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  PRIMARY KEY (`id`),
  UNIQUE KEY `saleTrackingCode` (`saleTrackingCode`),
  KEY `sales_termofsale_termofsaleno_foreign` (`termOfSale_termOfSaleNo`),
  KEY `sales_cars_carno_foreign` (`cars_carNo`),
  KEY `sales_saletrackingcode_index` (`saleTrackingCode`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=7 ;

--
-- Dumping data for table `sales`
--

INSERT INTO `sales` (`saleTrackingCode`, `date`, `termOfSale_termOfSaleNo`, `cars_carNo`, `created_at`, `updated_at`, `isConfirmed`, `id`) VALUES
('5611572', '2016-07-01', 4, 3, '2016-07-01 09:43:16', '2016-07-01 09:43:16', 0, 3),
('6550293', '2016-07-01', 4, 3, '2016-07-01 09:46:13', '2016-07-01 09:46:13', 0, 4),
('5245850', '2016-07-01', 4, 3, '2016-07-01 10:12:07', '2016-07-01 10:12:07', 0, 5),
('7936524', '2016-07-01', 5, 3, '2016-07-01 10:16:48', '2016-07-01 10:16:48', 0, 6);

-- --------------------------------------------------------

--
-- Table structure for table `saletypelookups`
--

CREATE TABLE IF NOT EXISTS `saletypelookups` (
  `saleTypeNo` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `saleType` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  PRIMARY KEY (`saleTypeNo`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=4 ;

--
-- Dumping data for table `saletypelookups`
--

INSERT INTO `saletypelookups` (`saleTypeNo`, `saleType`) VALUES
(1, 'فروش قطعی'),
(2, 'پیش فروش'),
(3, 'فروش نقدی');

-- --------------------------------------------------------

--
-- Table structure for table `surveyresponds`
--

CREATE TABLE IF NOT EXISTS `surveyresponds` (
  `surveyRespondCode` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `surveys_surveyCode` int(10) unsigned NOT NULL,
  `respond` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `surveySubmitTime` timestamp NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`surveyRespondCode`),
  KEY `surveyresponds_surveys_surveycode_foreign` (`surveys_surveyCode`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `surveys`
--

CREATE TABLE IF NOT EXISTS `surveys` (
  `surveyCode` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `title` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`surveyCode`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `termofsales`
--

CREATE TABLE IF NOT EXISTS `termofsales` (
  `termOfSaleNo` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `description` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `car_carNo` int(10) unsigned NOT NULL,
  `cost` int(11) NOT NULL,
  `initialPrice` int(11) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `saleTypeLookups_saleTypeNo` int(10) unsigned NOT NULL,
  PRIMARY KEY (`termOfSaleNo`),
  KEY `termofsales_car_carno_foreign` (`car_carNo`),
  KEY `termofsales_saletypelookups_saletypeno_foreign` (`saleTypeLookups_saleTypeNo`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=9 ;

--
-- Dumping data for table `termofsales`
--

INSERT INTO `termofsales` (`termOfSaleNo`, `description`, `car_carNo`, `cost`, `initialPrice`, `created_at`, `updated_at`, `saleTypeLookups_saleTypeNo`) VALUES
(4, 'xfklgfdskldfkl', 3, 56789, 56789, '2016-06-30 07:49:56', '2016-06-30 07:49:56', 1),
(5, 'dsfds', 3, 2147483647, 435435, '2016-06-30 07:53:02', '2016-06-30 07:53:02', 1),
(8, 'xcgbhjknlm;cyvhbjknlm', 7, 456789, 4567890, '2016-06-30 09:11:12', '2016-06-30 09:11:12', 2);

-- --------------------------------------------------------

--
-- Table structure for table `units`
--

CREATE TABLE IF NOT EXISTS `units` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `unitName` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=10 ;

--
-- Dumping data for table `units`
--

INSERT INTO `units` (`id`, `unitName`, `created_at`, `updated_at`) VALUES
(1, 'گذارش فروش', NULL, NULL),
(2, 'خلاصه گذارش فروش', NULL, NULL),
(3, 'مدار مشتریان', NULL, NULL),
(4, 'نظر سنجی', NULL, NULL),
(5, 'فروش های در انتظار تایید', NULL, NULL),
(6, 'موجودی پارکینگ', NULL, NULL),
(7, 'تراکنش های اینترنتی', NULL, NULL),
(8, 'مدیریت کاربران', NULL, NULL),
(9, 'مدیریت شرایط فروش', NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE IF NOT EXISTS `users` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `personalCode` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `postLookups_postID` int(10) unsigned NOT NULL,
  `email` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `password` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `isAdmin` tinyint(1) NOT NULL,
  `remember_token` varchar(100) COLLATE utf8_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `users_personalcode_unique` (`personalCode`),
  UNIQUE KEY `users_email_unique` (`email`),
  KEY `users_postlookups_postid_foreign` (`postLookups_postID`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=6 ;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `personalCode`, `postLookups_postID`, `email`, `password`, `isAdmin`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 'معین ایرانشاهی', '651623', 1, 'm.iranshahi@km1731.com', '$2y$10$jd0yEWIrYCwg7OBcYzqohO7ao25mciCae03Ox8zn3CpDgT9rY6oe2', 1, 'Y3r7tGfdubhGkuQnHm4RzQsZmRjWOf6wkBxNgI0cEfG3ZQsQE3xft4BQFk53', NULL, '2016-07-01 09:41:56'),
(5, 'شیوا قنبری', '651624', 1, 'sh.ghanbari@km1725.com', '$2y$10$ekaV7tjqlyqIr7sI2e.IxuKr.0rL3HN4P2TyhZs8VbfXDFLUdlGze', 0, '1eP6TrgAWBn8OGfg21Zzh147lq83MjDofRFTZYVEXUhJR2NIl92ekeNtEtXA', '2016-06-30 00:40:46', '2016-06-30 03:06:00');

--
-- Constraints for dumped tables
--

--
-- Constraints for table `carpurchases`
--
ALTER TABLE `carpurchases`
  ADD CONSTRAINT `carpurchases_cars_carno_foreign` FOREIGN KEY (`cars_carNo`) REFERENCES `cars` (`carNo`);

--
-- Constraints for table `cars`
--
ALTER TABLE `cars`
  ADD CONSTRAINT `cars_carbrandlookups_brandno_foreign` FOREIGN KEY (`carBrandLookups_brandNo`) REFERENCES `carbrandlookups` (`brandNo`) ON DELETE CASCADE,
  ADD CONSTRAINT `cars_carnamelookups_nameno_foreign` FOREIGN KEY (`carNameLookups_nameNo`) REFERENCES `carnamelookups` (`nameNo`) ON DELETE CASCADE;

--
-- Constraints for table `customers`
--
ALTER TABLE `customers`
  ADD CONSTRAINT `customers_sale_id_foreign` FOREIGN KEY (`sale_id`) REFERENCES `sales` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `extraoptions`
--
ALTER TABLE `extraoptions`
  ADD CONSTRAINT `extraoptions_cars_carno_foreign` FOREIGN KEY (`cars_carNo`) REFERENCES `cars` (`carNo`);

--
-- Constraints for table `payments`
--
ALTER TABLE `payments`
  ADD CONSTRAINT `payments_sale_saletrackingcode_foreign` FOREIGN KEY (`sale_saleTrackingCode`) REFERENCES `sales` (`saleTrackingCode`);

--
-- Constraints for table `sales`
--
ALTER TABLE `sales`
  ADD CONSTRAINT `sales_cars_carno_foreign` FOREIGN KEY (`cars_carNo`) REFERENCES `cars` (`carNo`),
  ADD CONSTRAINT `sales_termofsale_termofsaleno_foreign` FOREIGN KEY (`termOfSale_termOfSaleNo`) REFERENCES `termofsales` (`termOfSaleNo`);

--
-- Constraints for table `surveyresponds`
--
ALTER TABLE `surveyresponds`
  ADD CONSTRAINT `surveyresponds_surveys_surveycode_foreign` FOREIGN KEY (`surveys_surveyCode`) REFERENCES `surveys` (`surveyCode`);

--
-- Constraints for table `termofsales`
--
ALTER TABLE `termofsales`
  ADD CONSTRAINT `termofsales_car_carno_foreign` FOREIGN KEY (`car_carNo`) REFERENCES `cars` (`carNo`) ON DELETE CASCADE,
  ADD CONSTRAINT `termofsales_saletypelookups_saletypeno_foreign` FOREIGN KEY (`saleTypeLookups_saleTypeNo`) REFERENCES `saletypelookups` (`saleTypeNo`);

--
-- Constraints for table `users`
--
ALTER TABLE `users`
  ADD CONSTRAINT `users_postlookups_postid_foreign` FOREIGN KEY (`postLookups_postID`) REFERENCES `postlookups` (`postID`);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
