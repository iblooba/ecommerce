-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Jan 23, 2017 at 07:22 AM
-- Server version: 10.1.19-MariaDB
-- PHP Version: 5.6.28

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `shoppingmall`
--

-- --------------------------------------------------------

--
-- Table structure for table `migrations`
--

CREATE TABLE `migrations` (
  `id` int(10) UNSIGNED NOT NULL,
  `migration` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(1, '2014_10_12_000000_create_users_table', 1),
(2, '2014_10_12_100000_create_password_resets_table', 1),
(3, '2017_01_22_122536_create_sessions_table', 2);

-- --------------------------------------------------------

--
-- Table structure for table `password_resets`
--

CREATE TABLE `password_resets` (
  `email` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `token` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `product`
--

CREATE TABLE `product` (
  `ProductID` int(4) NOT NULL,
  `ProductName` varchar(100) NOT NULL,
  `Price` double NOT NULL,
  `Picture` varchar(100) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

--
-- Dumping data for table `product`
--

INSERT INTO `product` (`ProductID`, `ProductName`, `Price`, `Picture`) VALUES
(1, 'Product 1', 100, '1.gif'),
(2, 'Product 2', 200, '2.gif'),
(3, 'Product 3', 300, '3.gif'),
(4, 'Product 4', 400, '4.gif');

-- --------------------------------------------------------

--
-- Table structure for table `products`
--

CREATE TABLE `products` (
  `id` int(11) NOT NULL COMMENT 'รหัส',
  `name` varchar(100) COLLATE utf8_unicode_ci NOT NULL COMMENT 'ชื่อสินค้า',
  `price` decimal(8,2) NOT NULL DEFAULT '0.00' COMMENT 'ราคาสินค้า',
  `brandname` varchar(100) COLLATE utf8_unicode_ci DEFAULT NULL COMMENT 'ยี่ห้อสินค้า',
  `detail` text COLLATE utf8_unicode_ci COMMENT 'รายละเอียดสินค้า',
  `image` varchar(100) COLLATE utf8_unicode_ci DEFAULT 'ecimage.jpg' COMMENT 'รูปภาพหลักสินค้า',
  `option_name` varchar(25) COLLATE utf8_unicode_ci DEFAULT NULL,
  `option_values` varchar(25) COLLATE utf8_unicode_ci DEFAULT NULL,
  `created` datetime DEFAULT NULL COMMENT 'วันที่สร้าง',
  `product_categorie_id` int(11) NOT NULL COMMENT 'รหัสประเภทสินค้า'
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `products`
--

INSERT INTO `products` (`id`, `name`, `price`, `brandname`, `detail`, `image`, `option_name`, `option_values`, `created`, `product_categorie_id`) VALUES
(5, 'iPhone 5S 16GB Space Gray', '24500.00', 'APPLE', '<div>\n<table cellpadding="5" cellspacing="1">\n	<tbody>\n		<tr>\n			<td><strong>OS</strong></td>\n			<td>iOS 7, upgradable to iOS 7.1.2, planned upgrade to iOS 8</td>\n		</tr>\n		<tr>\n			<td><strong>Processor</strong></td>\n			<td>Dual-core 1.3 GHz Cyclone (ARM v8-based)</td>\n		</tr>\n		<tr>\n			<td><strong>Display</strong></td>\n			<td>4&quot; LED-backlit IPS LCD, capacitive touchscreen, 16M colors</td>\n		</tr>\n		<tr>\n			<td><strong>Internal , ram</strong></td>\n			<td>16 GB. , 1 GB. RAM DDR3</td>\n		</tr>\n		<tr>\n			<td><strong>Network</strong></td>\n			<td>2G Network : GSM 850 / 900 / 1800 / 1900<br />\n			3G Network : HSDPA 850 / 900 / 1700 / 1900 / 2100<br />\n			4G Network : LTE</td>\n		</tr>\n		<tr>\n			<td><strong>Camera</strong></td>\n			<td>Back Camera : 8 MP, 3264 x 2448 pixels, autofocus, dual-LED (dual tone) flash<br />\n			Front Camera : .2 MP, 720p@30fps</td>\n		</tr>\n		<tr>\n			<td><strong>Chipset</strong></td>\n			<td>Apple A7</td>\n		</tr>\n		<tr>\n			<td><strong>GPU</strong></td>\n			<td>PowerVR G6430 (quad-core graphics)</td>\n		</tr>\n		<tr>\n			<td><strong>SIM</strong></td>\n			<td>Nano-SIM</td>\n		</tr>\n		<tr>\n			<td><strong>Card slot</strong></td>\n			<td>No</td>\n		</tr>\n		<tr>\n			<td><strong>Battery</strong></td>\n			<td>Non-removable Li-Po 1560 mAh battery (5.92 Wh)</td>\n		</tr>\n		<tr>\n			<td><strong>Dimension</strong></td>\n			<td>123.8 x 58.6 x 7.6 mm</td>\n		</tr>\n		<tr>\n			<td><strong>Warranty</strong></td>\n			<td>1</td>\n		</tr>\n	</tbody>\n</table>\n</div>', '201411171732320.jpg', NULL, NULL, '2014-11-17 17:27:31', 30),
(6, 'iPhone 5S 16GB Space Silver', '24500.00', 'APPLE', '<div>\r\n<table cellpadding="5" cellspacing="1">\r\n	<tbody>\r\n		<tr>\r\n			<td><strong>OS</strong></td>\r\n			<td>iOS 7, upgradable to iOS 7.1.2, planned upgrade to iOS 8</td>\r\n		</tr>\r\n		<tr>\r\n			<td><strong>Processor</strong></td>\r\n			<td>Dual-core 1.3 GHz Cyclone (ARM v8-based)</td>\r\n		</tr>\r\n		<tr>\r\n			<td><strong>Display</strong></td>\r\n			<td>4&quot; LED-backlit IPS LCD, capacitive touchscreen, 16M colors</td>\r\n		</tr>\r\n		<tr>\r\n			<td><strong>Internal , ram</strong></td>\r\n			<td>16 GB. , 1 GB. RAM DDR3</td>\r\n		</tr>\r\n		<tr>\r\n			<td><strong>Network</strong></td>\r\n			<td>2G Network : GSM 850 / 900 / 1800 / 1900<br />\r\n			3G Network : HSDPA 850 / 900 / 1700 / 1900 / 2100<br />\r\n			4G Network : LTE</td>\r\n		</tr>\r\n		<tr>\r\n			<td><strong>Camera</strong></td>\r\n			<td>Back Camera : 8 MP, 3264 x 2448 pixels, autofocus, dual-LED (dual tone) flash<br />\r\n			Front Camera : .2 MP, 720p@30fps</td>\r\n		</tr>\r\n		<tr>\r\n			<td><strong>Chipset</strong></td>\r\n			<td>Apple A7</td>\r\n		</tr>\r\n		<tr>\r\n			<td><strong>GPU</strong></td>\r\n			<td>PowerVR G6430 (quad-core graphics)</td>\r\n		</tr>\r\n		<tr>\r\n			<td><strong>SIM</strong></td>\r\n			<td>Nano-SIM</td>\r\n		</tr>\r\n		<tr>\r\n			<td><strong>Card slot</strong></td>\r\n			<td>No</td>\r\n		</tr>\r\n		<tr>\r\n			<td><strong>Battery</strong></td>\r\n			<td>Non-removable Li-Po 1560 mAh battery (5.92 Wh)</td>\r\n		</tr>\r\n		<tr>\r\n			<td><strong>Dimension</strong></td>\r\n			<td>123.8 x 58.6 x 7.6 mm</td>\r\n		</tr>\r\n		<tr>\r\n			<td><strong>Warranty</strong></td>\r\n			<td>1</td>\r\n		</tr>\r\n	</tbody>\r\n</table>\r\n</div>', '201411171730103.jpg', NULL, NULL, '2014-11-17 17:30:10', 30),
(7, 'iPhone 6 16GB Space Gray', '24900.00', 'APPLE', '<div>\r\n<table cellpadding="5" cellspacing="1">\r\n	<tbody>\r\n		<tr>\r\n			<td>OS</td>\r\n			<td>iOS 8, upgradable to iOS 8.1</td>\r\n		</tr>\r\n		<tr>\r\n			<td>Processor</td>\r\n			<td>Apple A8 Dual Core 2014 1.4 GHz</td>\r\n		</tr>\r\n		<tr>\r\n			<td>Display</td>\r\n			<td>4.7&quot; Retina Display 1334 x 750 Pixel</td>\r\n		</tr>\r\n		<tr>\r\n			<td>Internal , ram</td>\r\n			<td>16 GB. , 1 GB.</td>\r\n		</tr>\r\n		<tr>\r\n			<td>Network</td>\r\n			<td>2G : 850/900/1800/1900<br />\r\n			3G : 850 /900/2100<br />\r\n			4G : LTE</td>\r\n		</tr>\r\n		<tr>\r\n			<td>Camera</td>\r\n			<td>Back Camara : 8 MP<br />\r\n			Front Camara : 1.2 MP</td>\r\n		</tr>\r\n		<tr>\r\n			<td>Chipset</td>\r\n			<td>Apple A8</td>\r\n		</tr>\r\n		<tr>\r\n			<td>GPU</td>\r\n			<td>PowerVR GX6450 (quad-core graphics)</td>\r\n		</tr>\r\n		<tr>\r\n			<td>SIM</td>\r\n			<td>Nano-SIM</td>\r\n		</tr>\r\n		<tr>\r\n			<td>Card slot</td>\r\n			<td>No</td>\r\n		</tr>\r\n		<tr>\r\n			<td>Battery</td>\r\n			<td>Non-removable Li-Po 1810 mAh battery (6.9 Wh)</td>\r\n		</tr>\r\n		<tr>\r\n			<td>Dimension</td>\r\n			<td>138.1 x 67 x 6.9 mm</td>\r\n		</tr>\r\n		<tr>\r\n			<td>Warranty</td>\r\n			<td>1</td>\r\n		</tr>\r\n	</tbody>\r\n</table>\r\n</div>', '201411171732320.jpg', NULL, NULL, '2014-11-17 17:32:32', 30),
(8, 'iPhone 6 Plus 16GB Space Gray', '28900.00', 'APPLE', '<div>\r\n<table cellpadding="5" cellspacing="1">\r\n	<tbody>\r\n		<tr>\r\n			<td>OS</td>\r\n			<td>iOS 8</td>\r\n		</tr>\r\n		<tr>\r\n			<td>Processor</td>\r\n			<td>Dual Core 2014 1.4 GHz</td>\r\n		</tr>\r\n		<tr>\r\n			<td>Display</td>\r\n			<td>5.5&quot; Retina Display</td>\r\n		</tr>\r\n		<tr>\r\n			<td>Internal , ram</td>\r\n			<td>16 GB. / 1 GB.</td>\r\n		</tr>\r\n		<tr>\r\n			<td>Network</td>\r\n			<td>2G : 850/900/1800/1900<br />\r\n			3G : 850 /900/2100<br />\r\n			4G : LTE</td>\r\n		</tr>\r\n		<tr>\r\n			<td>Camera</td>\r\n			<td>Back Camara : 8 MP<br />\r\n			Front Camara : 1.2 MP</td>\r\n		</tr>\r\n		<tr>\r\n			<td>Chipset</td>\r\n			<td>Apple A8</td>\r\n		</tr>\r\n		<tr>\r\n			<td>GPU</td>\r\n			<td>PowerVR GX6450 (quad-core graphics)</td>\r\n		</tr>\r\n		<tr>\r\n			<td>SIM</td>\r\n			<td>Nano-SIM</td>\r\n		</tr>\r\n		<tr>\r\n			<td>Card slot</td>\r\n			<td>No</td>\r\n		</tr>\r\n		<tr>\r\n			<td>Battery</td>\r\n			<td>Li - Polymer 2915 mAh</td>\r\n		</tr>\r\n		<tr>\r\n			<td>Dimension</td>\r\n			<td>158.10 x 77.80 mm.</td>\r\n		</tr>\r\n		<tr>\r\n			<td>Warranty</td>\r\n			<td>1</td>\r\n		</tr>\r\n	</tbody>\r\n</table>\r\n</div>', '201411171733516.jpg', 'Color', 'ขาว,เทา,ดำ', '2014-11-17 17:33:51', 30),
(9, 'Aspire e5-411', '10990.00', 'Acer', '<div>\r\n<table cellpadding="5" cellspacing="1">\r\n	<tbody>\r\n		<tr>\r\n			<td>CPU</td>\r\n			<td>Intel Celeron N2830</td>\r\n		</tr>\r\n		<tr>\r\n			<td>Display</td>\r\n			<td>14&quot;</td>\r\n		</tr>\r\n		<tr>\r\n			<td>Main Memory</td>\r\n			<td>4 GB</td>\r\n		</tr>\r\n		<tr>\r\n			<td>Storage</td>\r\n			<td>500 GB</td>\r\n		</tr>\r\n		<tr>\r\n			<td>Optical Media Drive</td>\r\n			<td>DVD Super Multi</td>\r\n		</tr>\r\n		<tr>\r\n			<td>Graphics</td>\r\n			<td>UMA</td>\r\n		</tr>\r\n		<tr>\r\n			<td>Web Camera</td>\r\n			<td>Yes</td>\r\n		</tr>\r\n		<tr>\r\n			<td>USB</td>\r\n			<td>Yes</td>\r\n		</tr>\r\n		<tr>\r\n			<td>D-Sub/VGA</td>\r\n			<td>&nbsp;</td>\r\n		</tr>\r\n		<tr>\r\n			<td>e-SATA</td>\r\n			<td>&nbsp;</td>\r\n		</tr>\r\n		<tr>\r\n			<td>HDMI</td>\r\n			<td>&nbsp;</td>\r\n		</tr>\r\n		<tr>\r\n			<td>Card Reader</td>\r\n			<td>&nbsp;</td>\r\n		</tr>\r\n		<tr>\r\n			<td>Express Slot</td>\r\n			<td>&nbsp;</td>\r\n		</tr>\r\n		<tr>\r\n			<td>Finger Print</td>\r\n			<td>&nbsp;</td>\r\n		</tr>\r\n		<tr>\r\n			<td>Connection</td>\r\n			<td>WLAN<br />\r\n			Bluetooth 4.0</td>\r\n		</tr>\r\n		<tr>\r\n			<td>Battery</td>\r\n			<td>Yes</td>\r\n		</tr>\r\n		<tr>\r\n			<td>Operating System</td>\r\n			<td>Dos</td>\r\n		</tr>\r\n		<tr>\r\n			<td>Weight</td>\r\n			<td>&nbsp;</td>\r\n		</tr>\r\n		<tr>\r\n			<td>Warranty</td>\r\n			<td>1</td>\r\n		</tr>\r\n	</tbody>\r\n</table>\r\n</div>', '201411171737166.jpg', 'Color', 'Green,Red,Blue', '2014-11-17 17:37:16', 31),
(11, 'MS-WINDOWS 8.1 PRO 64 BIT', '6990.00', 'Microsoft', '<div>Operating System Windows 8.1 64-bit Eng</div>', '201411171743588.jpg', NULL, NULL, '2014-11-17 17:43:58', 32),
(12, 'KASPERSKY INTERNET SECURITY 2015', '890.00', 'KASPERSKY', '<div>Features Anti-virus<br />\r\nAnti-spyware<br />\r\nAnti-phishing<br />\r\nAnti-spam<br />\r\nAnti-rootkit<br />\r\nAnti-banner<br />\r\nSafe Money<br />\r\nAutomatic exploit prevention<br />\r\nTwo-way firewall</div>', '201411211736326.jpg', NULL, NULL, '2014-11-17 17:45:16', 32);

-- --------------------------------------------------------

--
-- Table structure for table `product_categories`
--

CREATE TABLE `product_categories` (
  `id` int(11) NOT NULL COMMENT 'รหัส',
  `codename` varchar(50) COLLATE utf8_unicode_ci DEFAULT NULL COMMENT 'รหัสประเภทสินค้า',
  `name` varchar(100) COLLATE utf8_unicode_ci NOT NULL COMMENT 'ประเภทสินค้า',
  `created` datetime NOT NULL COMMENT 'วันที่สร้าง'
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `product_categories`
--

INSERT INTO `product_categories` (`id`, `codename`, `name`, `created`) VALUES
(30, 'P001', 'Smartphone', '2014-11-17 17:17:41'),
(31, 'P002', 'Notebook', '2014-11-17 17:18:06'),
(32, 'P003', 'Software', '2014-11-17 17:18:40'),
(33, 'P004', 'รองเท้า', '2015-05-17 16:07:02'),
(34, 'P005', 'กระเป๋า', '2015-05-17 16:49:19');

-- --------------------------------------------------------

--
-- Table structure for table `sessions`
--

CREATE TABLE `sessions` (
  `id` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `user_id` int(11) DEFAULT NULL,
  `ip_address` varchar(45) COLLATE utf8_unicode_ci DEFAULT NULL,
  `user_agent` text COLLATE utf8_unicode_ci,
  `payload` text COLLATE utf8_unicode_ci NOT NULL,
  `last_activity` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `password` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `password`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 'wilawan onnom', 'bloo.chi.chi@gmail.com', '$2y$10$YMdMOOZ10E1c0h6Bzwj59eCJjgnYf2ThpRhFD.Vl9rJwMVp0OIK/S', NULL, '2017-01-17 22:22:03', '2017-01-17 22:22:03');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `password_resets`
--
ALTER TABLE `password_resets`
  ADD KEY `password_resets_email_index` (`email`),
  ADD KEY `password_resets_token_index` (`token`);

--
-- Indexes for table `product`
--
ALTER TABLE `product`
  ADD PRIMARY KEY (`ProductID`);

--
-- Indexes for table `products`
--
ALTER TABLE `products`
  ADD PRIMARY KEY (`id`),
  ADD KEY `product_categorie_id` (`product_categorie_id`);

--
-- Indexes for table `product_categories`
--
ALTER TABLE `product_categories`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `sessions`
--
ALTER TABLE `sessions`
  ADD UNIQUE KEY `sessions_id_unique` (`id`);

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
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT for table `product`
--
ALTER TABLE `product`
  MODIFY `ProductID` int(4) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
--
-- AUTO_INCREMENT for table `products`
--
ALTER TABLE `products`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT COMMENT 'รหัส', AUTO_INCREMENT=13;
--
-- AUTO_INCREMENT for table `product_categories`
--
ALTER TABLE `product_categories`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT COMMENT 'รหัส', AUTO_INCREMENT=35;
--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
