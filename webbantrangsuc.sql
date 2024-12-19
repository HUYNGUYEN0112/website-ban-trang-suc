-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Máy chủ: 127.0.0.1:3306
-- Thời gian đã tạo: Th12 22, 2022 lúc 05:38 AM
-- Phiên bản máy phục vụ: 5.7.36
-- Phiên bản PHP: 7.4.26

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Cơ sở dữ liệu: `web_ban_dt`
--

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `bills`
--

DROP TABLE IF EXISTS `bills`;
CREATE TABLE IF NOT EXISTS `bills` (
  `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT,
  `id_customer` int(10) UNSIGNED DEFAULT NULL,
  `date_order` date NOT NULL,
  `total` int(10) UNSIGNED NOT NULL,
  `payment` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `note` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=7 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `bills`
--

INSERT INTO `bills` (`id`, `id_customer`, `date_order`, `total`, `payment`, `note`, `created_at`, `updated_at`) VALUES
(6, 6, '2020-12-11', 6000000, 'COD', 'Ok', '2020-12-11 08:00:21', '2020-12-11 08:00:21');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `bill_detail`
--

DROP TABLE IF EXISTS `bill_detail`;
CREATE TABLE IF NOT EXISTS `bill_detail` (
  `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT,
  `id_bill` int(10) UNSIGNED DEFAULT NULL,
  `id_products` int(10) UNSIGNED DEFAULT NULL,
  `quantity` int(11) NOT NULL,
  `image` varchar(200) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `price` double NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `bill_detail`
--

INSERT INTO `bill_detail` (`id`, `id_bill`, `id_products`, `quantity`, `image`, `price`, `created_at`, `updated_at`) VALUES
(3, 6, 7, 1, NULL, 6000000, '2020-12-11 08:00:21', '2020-12-11 08:00:21');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `category`
--

DROP TABLE IF EXISTS `category`;
CREATE TABLE IF NOT EXISTS `category` (
  `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `image` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `description` varchar(1000) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `content` text COLLATE utf8mb4_unicode_ci,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=21 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `category`
--

INSERT INTO `category` (`id`, `name`, `image`, `description`, `content`, `created_at`, `updated_at`) VALUES
(14, 'Iphone', '1608304497.jpeg', 'Đặc điểm nổi bật của iPhone 12 Pro 128GB  iPhone 12 Pro - \"Siêu phẩm công nghệ\" với nhiều nâng cấp mạnh mẽ về thiết kế, cấu hình và hiệu năng, khẳng định đẳng cấp thời thượng trên thị trường smartphone cao cấp.', '<p>Iphone</p>', '2020-12-18 08:14:57', '2020-12-18 08:14:57'),
(15, 'Sam Sung', '1608304562.jpeg', 'Samsung lại tiếp tục cho ra mắt chiếc smartphone mới thuộc thế hệ Galaxy M với tên gọi là Samsung Galaxy M51. Thiết kế mới này tuy nằm trong phân khúc tầm trung nhưng được Samsung nâng cấp và cải tiến với camera góc siêu rộng, dung lượng pin siêu khủng cùng vẻ ngoài sang trọng và thời thượng.', '<h2><a href=\"https://www.thegioididong.com/dtdd-samsung\" target=\"_blank\">Samsung</a>&nbsp;lại tiếp tục cho ra mắt chiếc smartphone mới thuộc thế hệ&nbsp;<a href=\"https://www.thegioididong.com/dtdd-samsung-galaxy-m\" target=\"_blank\">Galaxy M</a>&nbsp;với t&ecirc;n gọi l&agrave;&nbsp;<a href=\"https://www.thegioididong.com/dtdd/samsung-galaxy-m51\">Samsung&nbsp;Galaxy M51</a>. Thiết kế mới n&agrave;y tuy nằm trong ph&acirc;n kh&uacute;c tầm trung nhưng được Samsung n&acirc;ng cấp v&agrave; cải tiến với camera g&oacute;c si&ecirc;u rộng, dung lượng pin si&ecirc;u khủng c&ugrave;ng vẻ ngo&agrave;i sang trọng v&agrave; thời thượng.</h2>', '2020-12-18 08:16:02', '2020-12-18 08:16:02'),
(16, 'Oppo', '1608304597.jpeg', 'Samsung lại tiếp tục cho ra mắt chiếc smartphone mới thuộc thế hệ Galaxy M với tên gọi là Samsung Galaxy M51. Thiết kế mới này tuy nằm trong phân khúc tầm trung nhưng được Samsung nâng cấp và cải tiến với camera góc siêu rộng, dung lượng pin siêu khủng cùng vẻ ngoài sang trọng và thời thượng.', '<h2>Oppo lại tiếp tục cho ra mắt chiếc smartphone mới thuộc thế hệ&nbsp;<a href=\"https://www.thegioididong.com/dtdd-samsung-galaxy-m\" target=\"_blank\">Galaxy M</a>&nbsp;với t&ecirc;n gọi l&agrave;&nbsp;<a href=\"https://www.thegioididong.com/dtdd/samsung-galaxy-m51\">Samsung&nbsp;Galaxy M51</a>. Thiết kế mới n&agrave;y tuy nằm trong ph&acirc;n kh&uacute;c tầm trung nhưng được Samsung n&acirc;ng cấp v&agrave; cải tiến với camera g&oacute;c si&ecirc;u rộng, dung lượng pin si&ecirc;u khủng c&ugrave;ng vẻ ngo&agrave;i sang trọng v&agrave; thời thượng.</h2>', '2020-12-18 08:16:37', '2020-12-18 08:16:37'),
(17, 'XiaoMi', '1608304655.jpeg', 'Samsung lại tiếp tục cho ra mắt chiếc smartphone mới thuộc thế hệ Galaxy M với tên gọi là Samsung Galaxy M51. Thiết kế mới này tuy nằm trong phân khúc tầm trung nhưng được Samsung nâng cấp và cải tiến với camera góc siêu rộng, dung lượng pin siêu khủng cùng vẻ ngoài sang trọng và thời thượng.', '<h2>XiaoMi&nbsp;lại tiếp tục cho ra mắt chiếc smartphone mới thuộc thế hệ&nbsp;<a href=\"https://www.thegioididong.com/dtdd-samsung-galaxy-m\" target=\"_blank\">Galaxy M</a>&nbsp;với t&ecirc;n gọi l&agrave;&nbsp;<a href=\"https://www.thegioididong.com/dtdd/samsung-galaxy-m51\">Samsung&nbsp;Galaxy M51</a>. Thiết kế mới n&agrave;y tuy nằm trong ph&acirc;n kh&uacute;c tầm trung nhưng được Samsung n&acirc;ng cấp v&agrave; cải tiến với camera g&oacute;c si&ecirc;u rộng, dung lượng pin si&ecirc;u khủng c&ugrave;ng vẻ ngo&agrave;i sang trọng v&agrave; thời thượng.</h2>', '2020-12-18 08:17:35', '2020-12-18 08:17:35'),
(18, 'APPLE WATCH', '1608304706.jpeg', 'Samsung lại tiếp tục cho ra mắt chiếc smartphone mới thuộc thế hệ Galaxy M với tên gọi là Samsung Galaxy M51. Thiết kế mới này tuy nằm trong phân khúc tầm trung nhưng được Samsung nâng cấp và cải tiến với camera góc siêu rộng, dung lượng pin siêu khủng cùng vẻ ngoài sang trọng và thời thượng.', '<h2>Apple Watch lại tiếp tục cho ra mắt chiếc smartphone mới thuộc thế hệ&nbsp;<a href=\"https://www.thegioididong.com/dtdd-samsung-galaxy-m\" target=\"_blank\">Galaxy M</a>&nbsp;với t&ecirc;n gọi l&agrave;&nbsp;<a href=\"https://www.thegioididong.com/dtdd/samsung-galaxy-m51\">Samsung&nbsp;Galaxy M51</a>. Thiết kế mới n&agrave;y tuy nằm trong ph&acirc;n kh&uacute;c tầm trung nhưng được Samsung n&acirc;ng cấp v&agrave; cải tiến với camera g&oacute;c si&ecirc;u rộng, dung lượng pin si&ecirc;u khủng c&ugrave;ng vẻ ngo&agrave;i sang trọng v&agrave; thời thượng.</h2>', '2020-12-18 08:18:26', '2020-12-18 08:18:26'),
(19, 'SONY', '1608304757.jpeg', 'Sony', '<p>Sony</p>', '2020-12-18 08:19:17', '2020-12-18 08:19:17'),
(20, 'LAPTOP', '1608304788.png', 'LapTop', '<p>Laptop</p>', '2020-12-18 08:19:48', '2020-12-18 08:19:48');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `comment`
--

DROP TABLE IF EXISTS `comment`;
CREATE TABLE IF NOT EXISTS `comment` (
  `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `content` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `id_com` int(10) UNSIGNED DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `comment_id_com_foreign` (`id_com`)
) ENGINE=InnoDB AUTO_INCREMENT=8 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `comment`
--

INSERT INTO `comment` (`id`, `name`, `email`, `content`, `id_com`, `created_at`, `updated_at`) VALUES
(5, 'Sam Sung', 'admin@gmail.com', 'Mắc Quá', 36, '2020-12-23 04:13:09', '2020-12-23 04:13:09'),
(6, 'Khanh1', 'kq909981@gmail.com', 'Mua 10 Cái Lun Quá Rẻ', 36, '2020-12-23 04:13:35', '2020-12-23 04:13:35'),
(7, 'Sam Sung Note 20', 'admin@example.com', 'Gà', 36, '2020-12-23 04:13:46', '2020-12-23 04:13:46');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `customer`
--

DROP TABLE IF EXISTS `customer`;
CREATE TABLE IF NOT EXISTS `customer` (
  `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `gender` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `address` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `phone_number` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `note` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=7 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `customer`
--

INSERT INTO `customer` (`id`, `name`, `gender`, `email`, `address`, `phone_number`, `note`, `created_at`, `updated_at`) VALUES
(6, 'Nguyến Khánh', 'nam', 'admin@gmail.com', '65 Huỳnh Thúc KHáng', '0343754517', 'Ok', '2020-12-11 08:00:21', '2020-12-11 08:00:21');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `failed_jobs`
--

DROP TABLE IF EXISTS `failed_jobs`;
CREATE TABLE IF NOT EXISTS `failed_jobs` (
  `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT,
  `uuid` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `connection` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `queue` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `payload` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `exception` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `failed_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`),
  UNIQUE KEY `failed_jobs_uuid_unique` (`uuid`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `migrations`
--

DROP TABLE IF EXISTS `migrations`;
CREATE TABLE IF NOT EXISTS `migrations` (
  `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT,
  `migration` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=13 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(1, '2014_08_12_0003651_create_news_table', 1),
(2, '2014_10_12_000000_create_users_table', 1),
(3, '2014_10_12_100000_create_password_resets_table', 1),
(4, '2019_08_19_000000_create_failed_jobs_table', 1),
(5, '2020_10_01_021229_add_level_status_to_users_table', 1),
(6, '2020_10_27_112720_create_category_table', 1),
(7, '2020_10_27_112722_create_products_table', 1),
(8, '2020_11_27_065826_comment_table', 1),
(9, '2020_11_28_124331_slider_table', 1),
(10, '2020_11_28_124450_customer_table', 1),
(11, '2020_11_28_124531_bill_table', 1),
(12, '2020_11_28_124601_bill_detail_table', 1);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `news`
--

DROP TABLE IF EXISTS `news`;
CREATE TABLE IF NOT EXISTS `news` (
  `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `metakeyword` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `metadescription` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `content` text COLLATE utf8mb4_unicode_ci,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `nguoidung`
--

DROP TABLE IF EXISTS `nguoidung`;
CREATE TABLE IF NOT EXISTS `nguoidung` (
  `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `level` tinyint(4) NOT NULL DEFAULT '0',
  `status` tinyint(200) DEFAULT NULL,
  `diachi` varchar(200) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `dienthoai` varchar(200) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=3 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `nguoidung`
--

INSERT INTO `nguoidung` (`id`, `name`, `email`, `email_verified_at`, `password`, `level`, `status`, `diachi`, `dienthoai`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 'Sam Sung', '1234@gmail.com', NULL, '$2y$10$j1mf.J630g6bzsOzVSu1QeYH34WKbJOax9M/hfsN34OeG3whlpyDS', 0, 1, '65 Huỳnh Thúc Kháng', '09543577', NULL, '2020-12-10 21:32:47', '2020-12-10 21:32:47'),
(2, 'aaa', '12345@gmail.com', NULL, '$2y$10$olXvyZuMMv5j3LazNIpNHuYHLrwpQaeQpdzCnlO4OviXudMKp.6G2', 0, NULL, '65 Huỳnh Thúc Kháng', '2222222222222222', NULL, '2020-12-10 21:51:28', '2020-12-10 21:51:28');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `password_resets`
--

DROP TABLE IF EXISTS `password_resets`;
CREATE TABLE IF NOT EXISTS `password_resets` (
  `email` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  KEY `password_resets_email_index` (`email`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `product`
--

DROP TABLE IF EXISTS `product`;
CREATE TABLE IF NOT EXISTS `product` (
  `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `image` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `price` int(11) NOT NULL,
  `discount` int(11) DEFAULT NULL,
  `description` varchar(1000) COLLATE utf8mb4_unicode_ci NOT NULL,
  `baohanh` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `new` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `trangthai` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `content` text COLLATE utf8mb4_unicode_ci,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `idcat` int(10) UNSIGNED DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `product_idcat_foreign` (`idcat`)
) ENGINE=InnoDB AUTO_INCREMENT=53 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `product`
--

INSERT INTO `product` (`id`, `name`, `image`, `price`, `discount`, `description`, `baohanh`, `new`, `trangthai`, `content`, `created_at`, `updated_at`, `idcat`) VALUES
(35, 'Iphone Pro Max', '1608558424.png', 22000000, 0, '<p>Iphone H&atilde;ng H&agrave;ng đầu việt nam</p>', '24 Tháng', '1', 'Còn Hàng', '<p>Ram 6GB</p>\r\n\r\n<p>Dung Lượng 128gB</p>\r\n\r\n<p>IOS 14</p>', '2020-12-21 06:47:04', '2020-12-21 06:47:04', 14),
(36, 'Iphone 7 Plus', '1608558569.jpeg', 12000000, 11800000, '<p>Iphone Mạnh Mẽ</p>', '12 Tháng', '1', 'Còn Hàng', '<p>Ram 3GB</p>\r\n\r\n<p>Dung Lượng 64GB</p>', '2020-12-21 06:49:29', '2020-12-21 06:49:29', 14),
(37, 'Iphone 6Plus', '1608558746.jpeg', 7000000, 0, '<p>Sam Sung Mạnh Mẽ</p>', '12 Tháng', '1', 'Còn Hàng', '<p>Ram 2GB</p>', '2020-12-21 06:52:26', '2020-12-21 06:52:26', 14),
(38, 'Sam Sung J7 Pro', '1608558807.jpeg', 7500000, 0, '<p>Sam Sung H&agrave;ng đầu việt nam</p>', '12 Tháng', '0', 'Còn Hàng', '<p>Ram 3GB</p>', '2020-12-21 06:53:27', '2020-12-21 06:53:27', 15),
(39, 'Sam sung J7 Prime', '1608558866.jpeg', 7200000, 7000000, '<p>Sam Sung H&agrave;ng đầu việt nam</p>', '12 Tháng', '1', 'Còn Hàng', '<p>Ram 4GB</p>', '2020-12-21 06:54:26', '2020-12-21 06:54:26', 15),
(40, 'OPPO A12', '1608558936.jpeg', 10000000, 97000000, '<p>Oppo Lướt &ecirc;m mượt m&agrave;&nbsp;</p>', '12 Tháng', '1', 'Còn Hàng', '<p>Ram 8GB</p>\r\n\r\n<p>DL 64GB</p>', '2020-12-21 06:55:36', '2020-12-21 06:55:36', 16),
(41, 'OPPO A5', '1608559001.jpeg', 8000000, 0, '<p>Oppo lướt &ecirc;m mượt m&agrave;</p>', '24 Tháng', '1', 'Còn Hàng', '<p>Ram 4GB</p>', '2020-12-21 06:56:41', '2020-12-21 06:56:41', 16),
(42, 'APPLE WATCH 005X', '1608559095.jpeg', 23000000, 22900000, '<p>Phong c&aacute;ch thời thượng</p>', '12 Tháng', '1', 'Còn Hàng', '<p>M&agrave;n H&igrave;nh 2In</p>', '2020-12-21 06:58:15', '2020-12-21 06:58:15', 18),
(43, 'SONY XA', '1608559237.jpeg', 5500000, 0, '<p>SONY cổ xưa vẫn giữ được sức mạnh</p>', '12 Tháng', '0', 'Còn Hàng', '<p>Ram 2GB</p>', '2020-12-21 07:00:37', '2020-12-21 07:00:37', 19),
(44, 'Dell 007X', '1608559290.png', 18000000, 0, '<p>Laptop&nbsp;</p>', '12 Tháng', '1', 'Còn Hàng', '<p>Ram 8GB</p>\r\n\r\n<p>SSD 240</p>', '2020-12-21 07:01:30', '2020-12-21 07:01:30', 20),
(45, 'XiaoMi', '1608559359.png', 8200000, 0, '<p>XiaoMi Pin Tr&acirc;u</p>', '12 Tháng', '0', 'Còn Hàng', '<p>Ram 2GB</p>', '2020-12-21 07:02:39', '2020-12-21 07:02:39', 17),
(46, 'Sam Sung A50', '1608649876.jpeg', 7300000, 0, '<p>Sam SUng Pin Tr&acirc;u</p>', '24 Tháng', '1', 'Còn Hàng', '<p>Ram 4GB</p>\r\n\r\n<p>&nbsp;</p>', '2020-12-22 08:11:16', '2020-12-22 08:11:16', 15),
(47, 'Iphone 5S', '1608724763.jpeg', 2000000, 0, '<p>Iphone</p>', '24 Tháng', '1', 'Còn Hàng', '<p>Ram 1GB</p>', '2020-12-23 04:59:23', '2020-12-23 04:59:23', 14),
(48, 'Sam SUng J7 PRIME', '1608724915.jpeg', 6000000, 0, '<p>Sam&nbsp; Sung</p>', '12 Tháng', '1', 'Còn Hàng', '<p>Ram 3GB</p>\r\n\r\n<p>Dung lượng 64GB</p>', '2020-12-23 05:01:55', '2020-12-23 05:01:55', 15),
(49, 'Sony 5', '1608725170.jpeg', 4500000, 0, '<p>Sony</p>', '12 Tháng', '1', 'Còn Hàng', '<p>Ram 4GB</p>\r\n\r\n<p>Dung Lượng 32GB</p>', '2020-12-23 05:06:10', '2020-12-23 05:06:10', 19),
(50, 'OPPO A37', '1608725301.jpeg', 40000000, 0, '<p>Opo</p>', '12 Tháng', '0', 'Hết Hàng', '<p>Ram 2GB</p>\r\n\r\n<p>Dung Lượng 8GB</p>', '2020-12-23 05:08:21', '2020-12-23 05:08:21', 16),
(51, 'MapBook PRO', '1608725621.png', 35000000, 34000000, '<p>Laptop</p>', '24 Tháng', '0', 'Còn Hàng', '<p>Ram 16GB</p>\r\n\r\n<p>&nbsp;</p>', '2020-12-23 05:13:41', '2020-12-23 05:13:41', 20),
(52, 'HP 009X', '1608725682.png', 23000000, 22000000, '<p>LapTop</p>', '24 Tháng', '0', 'Còn Hàng', '<p>Ram 8GB</p>\r\n\r\n<p>SSD 240GB</p>\r\n\r\n<p>Core i7</p>', '2020-12-23 05:14:42', '2020-12-23 05:14:42', 20);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `slide`
--

DROP TABLE IF EXISTS `slide`;
CREATE TABLE IF NOT EXISTS `slide` (
  `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT,
  `link` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `image` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=15 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `slide`
--

INSERT INTO `slide` (`id`, `link`, `image`, `created_at`, `updated_at`) VALUES
(1, '', 'Banner1.png\r\n\r\n\r\n\r\n', NULL, NULL),
(11, '', 'slider_5.png', NULL, NULL),
(10, '', 'banner3.png', NULL, NULL),
(9, '', 'slider_3.jpg\r\n', NULL, NULL),
(8, '', 'slider_2.jpg\r\n', NULL, NULL),
(12, '', 'slider_6.png', NULL, NULL),
(13, '', 'slider_7.png', NULL, NULL),
(14, '', 'Banner1.png', NULL, NULL);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `users`
--

DROP TABLE IF EXISTS `users`;
CREATE TABLE IF NOT EXISTS `users` (
  `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `level` tinyint(4) NOT NULL DEFAULT '0',
  `trangthai` varchar(20) COLLATE utf8mb4_unicode_ci DEFAULT '0',
  `loaitaikhoan` varchar(200) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `diachi` varchar(200) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `dienthoai` varchar(200) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `users_email_unique` (`email`)
) ENGINE=MyISAM AUTO_INCREMENT=5 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `email_verified_at`, `password`, `level`, `trangthai`, `loaitaikhoan`, `diachi`, `dienthoai`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 'admin', 'admin@gmail.com', NULL, '$2y$10$5l4qUUPTFgj0TdCl9WReJ.6igptAbI6pD.lTDedlBN.FdHGYYgunO', 0, 'active', 'user', 'Q7', '0852925296', NULL, NULL, NULL);

--
-- Các ràng buộc cho các bảng đã đổ
--

--
-- Các ràng buộc cho bảng `comment`
--
ALTER TABLE `comment`
  ADD CONSTRAINT `comment_id_com_foreign` FOREIGN KEY (`id_com`) REFERENCES `product` (`id`) ON DELETE CASCADE;

--
-- Các ràng buộc cho bảng `product`
--
ALTER TABLE `product`
  ADD CONSTRAINT `product_idcat_foreign` FOREIGN KEY (`idcat`) REFERENCES `category` (`id`) ON DELETE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
