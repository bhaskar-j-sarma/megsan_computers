-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jun 23, 2020 at 08:43 PM
-- Server version: 10.4.11-MariaDB
-- PHP Version: 7.4.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `pc_store`
--

-- --------------------------------------------------------

--
-- Table structure for table `blogs`
--

CREATE TABLE `blogs` (
  `id` int(11) NOT NULL,
  `title` varchar(255) NOT NULL,
  `url` varchar(500) NOT NULL,
  `description` text NOT NULL,
  `image` varchar(500) NOT NULL,
  `status` tinyint(4) NOT NULL DEFAULT 1,
  `approvel` varchar(10) DEFAULT NULL,
  `created` datetime NOT NULL DEFAULT current_timestamp(),
  `updated` datetime NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `blogs`
--

INSERT INTO `blogs` (`id`, `title`, `url`, `description`, `image`, `status`, `approvel`, `created`, `updated`) VALUES
(135, 'Desktop Computer', 'desktop-computer', '<p>We provide several brand desktop computer as per your requirements.</p>\n', 'BlogImage159141602720200606.png', 1, '1', '2020-06-06 00:00:28', '2020-06-20 15:08:31'),
(136, 'Laptop', 'laptop', '<p>We provided different branded laptop at very low cost</p>\n', 'BlogImage159141627620200606.jpg', 1, '1', '2020-06-06 00:04:36', '2020-06-20 15:08:26'),
(137, 'Wireless Mouse', 'wireless-mouse', '<p>wireless mouse</p>\n', 'BlogImage159183607420200611.jpg', 1, '1', '2020-06-10 20:41:14', '2020-06-20 15:08:21'),
(138, 'Keyboard', 'keyboard', '<p>keyboard</p>\n', 'BlogImage159258800420200619.jpg', 1, '1', '2020-06-19 13:33:24', '2020-06-20 15:08:36'),
(139, 'CCTV Camera', 'cctv-camera', '<p>CCTV Camera</p>\n', 'BlogImage159258806120200619.jpg', 1, '1', '2020-06-19 13:34:21', '2020-06-20 15:08:41');

-- --------------------------------------------------------

--
-- Table structure for table `image`
--

CREATE TABLE `image` (
  `id` int(11) NOT NULL,
  `product_id` varchar(2000) NOT NULL,
  `image` varchar(2000) NOT NULL,
  `created_at` datetime NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `image`
--

INSERT INTO `image` (`id`, `product_id`, `image`, `created_at`) VALUES
(55, '7', 'BlogImage159209025420200614.jpg', '2020-06-13 19:17:34'),
(56, '7', 'BlogImage159209026020200614.jpg', '2020-06-13 19:17:40'),
(57, '8', 'BlogImage159268406220200620.jpg', '2020-06-20 16:14:22'),
(58, '8', 'BlogImage159268406820200620.jpg', '2020-06-20 16:14:28');

-- --------------------------------------------------------

--
-- Table structure for table `products`
--

CREATE TABLE `products` (
  `id` int(11) NOT NULL,
  `product_name` varchar(255) NOT NULL,
  `url` varchar(1000) NOT NULL,
  `category_name` varchar(255) NOT NULL,
  `brand_name` varchar(255) NOT NULL,
  `price` varchar(255) NOT NULL,
  `approvel` varchar(11) NOT NULL,
  `status` tinyint(4) NOT NULL DEFAULT 1,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `tbumb_image` varchar(255) NOT NULL,
  `updated_at` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `description` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `products`
--

INSERT INTO `products` (`id`, `product_name`, `url`, `category_name`, `brand_name`, `price`, `approvel`, `status`, `created_at`, `tbumb_image`, `updated_at`, `description`) VALUES
(7, 'HP Z3700 Wireless Mouse', 'hp-z3700-wireless-mouse', 'Wireless Mouse', 'HP', '999', '1', 1, '2020-06-11 04:29:43', 'BlogImage159184978320200611.jpg', '2020-06-22 19:35:01', '<p>The HP Z3700 Mouse provides the perfect balance of portability and comfort. The sleek, contemporary, low-profile design makes it the must- have companion to every thin and light notebook or tablet. Experience unexpected comfort with a wireless ultra-mouse that not only looks good but feels good too!<br />\n<br />\n<strong>Designed with Flair</strong><br />\nThe sleek design complements your favorite HP devices, and fits comfortably anywhere.<br />\n<br />\n<strong>Wireless Convenience</strong><br />\nThe 2.4GHz wireless connection reliably keeps you hooked up.<br />\n<br />\n<strong>Battery Life that Lasts</strong><br />\nWith up to 16 months of life on a single AA battery, this mouse was designed to push the limits.</p>\n'),
(8, 'Acer Nitro 5', 'acer-nitro-5', 'Laptop', 'ACER', '55990', '1', 1, '2020-06-20 20:03:46', 'BlogImage159268342620200620.jpg', '2020-06-22 19:35:33', '<h1>Acer Nitro 5 AN515-52 15.6-inch Laptop (8th Gen Intel Core i5-8300H/8GB/1TB/Windows 10 Home 64-bit/4GB NVIDIA GeForce GTX 1050 Graphics)</h1>\n\n<ul>\n	<li>Processor: Intel Core i5-8300H processor, 2.3 Ghz turbo up to 4.0 Ghz</li>\n	<li>Display: 15.6&quot; display with IPS (In-Plane Switching) technology, Full HD 1920 x 1080, Acer ComfyView LED-backlit TFT LCD</li>\n	<li>Graphics: NVIDIA GeForce GTX 1050 with 4 GB of dedicated GDDR5 VRAM</li>\n	<li>Memory: 8 GB of DDR4 system memory, upgradable to 32 GB using two soDIMM modules</li>\n	<li>Storage: 1TB 5400 RPM</li>\n	<li>Battery Life: Up to 7 hours</li>\n	<li>Warranty: One-year International Travelers Warranty (ITW)</li>\n</ul>\n'),
(9, 'Amkette Xcite Pro USB Keyboard (Black)', 'amkette-xcite-pro-usb-keyboard-black-', 'Keyboard', 'Amkette', '390', '1', 1, '2020-06-20 20:33:58', 'BlogImage159268523820200620.jpg', '2020-06-22 20:45:14', '<h1>Amkette Xcite Pro USB Keyboard (Black)</h1>\n\n<ul>\n	<li>Spill Resistant Keyboard design</li>\n	<li>Instant One Touch Multimedia and Internet keys access</li>\n	<li>Noiseless and smooth keystroke for supreme and quiet typing experience</li>\n	<li>UV coated keys to prevent key letters from fading away</li>\n	<li>1 Year Amkette Waranty</li>\n</ul>\n');

-- --------------------------------------------------------

--
-- Table structure for table `review`
--

CREATE TABLE `review` (
  `id` int(11) NOT NULL,
  `person_name` varchar(255) NOT NULL,
  `description` text NOT NULL,
  `status` tinyint(11) NOT NULL DEFAULT 1,
  `approvel` varchar(11) NOT NULL,
  `image` varchar(500) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `review`
--

INSERT INTO `review` (`id`, `person_name`, `description`, `status`, `approvel`, `image`, `created_at`) VALUES
(2, 'Jitumani Bhagabati', '<p>Very nice product love it</p>\n', 1, '', 'BlogImage159287538920200623.png', '2020-06-23 01:23:09'),
(3, 'Bhaskar Sarma', '<p>Moi ata randy</p>\n', 1, '', 'BlogImage159287542820200623.png', '2020-06-23 01:23:48'),
(4, 'Debabrata Sarma', '<p>Nice collections of products</p>\n', 1, '', 'BlogImage159292152720200623.jpg', '2020-06-23 14:12:07'),
(5, 'Janarddan Sarkar', '<p>Good customer Support</p>\n', 1, '', 'BlogImage159292167120200623.png', '2020-06-23 14:14:31');

-- --------------------------------------------------------

--
-- Table structure for table `slider`
--

CREATE TABLE `slider` (
  `id` int(11) NOT NULL,
  `title` varchar(255) NOT NULL,
  `image` varchar(500) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `slider`
--

INSERT INTO `slider` (`id`, `title`, `image`, `created_at`) VALUES
(1, 'GET 50% OFF', 'BlogImage159217088820200614.jpg', '2020-06-14 21:41:28'),
(2, 'BUY ONE GET ONE FREE', 'BlogImage159217093520200614.jpg', '2020-06-14 21:42:15');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `id` int(11) NOT NULL,
  `username` varchar(250) DEFAULT NULL,
  `password` varchar(250) DEFAULT NULL,
  `role` int(11) DEFAULT NULL,
  `status` int(11) DEFAULT NULL,
  `created` datetime NOT NULL,
  `updated` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`id`, `username`, `password`, `role`, `status`, `created`, `updated`) VALUES
(1, 'admin', '123', 1, 1, '2016-08-03 00:00:00', '2017-08-09 11:05:41');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `blogs`
--
ALTER TABLE `blogs`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `image`
--
ALTER TABLE `image`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `products`
--
ALTER TABLE `products`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `review`
--
ALTER TABLE `review`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `slider`
--
ALTER TABLE `slider`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `blogs`
--
ALTER TABLE `blogs`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=140;

--
-- AUTO_INCREMENT for table `image`
--
ALTER TABLE `image`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=59;

--
-- AUTO_INCREMENT for table `products`
--
ALTER TABLE `products`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `review`
--
ALTER TABLE `review`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `slider`
--
ALTER TABLE `slider`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
