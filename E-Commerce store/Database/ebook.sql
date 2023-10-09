-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: May 26, 2023 at 08:57 AM
-- Server version: 10.4.27-MariaDB
-- PHP Version: 8.2.0

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `ebook`
--

-- --------------------------------------------------------

--
-- Table structure for table `catogery`
--

CREATE TABLE `catogery` (
  `id` int(11) NOT NULL,
  `Name` varchar(20) DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data for table `catogery`
--

INSERT INTO `catogery` (`id`, `Name`) VALUES
(11, 'Skin Care'),
(10, 'Lipsstick'),
(12, 'Nail Polish'),
(13, 'Fragrances'),
(14, 'Hair Care'),
(15, 'Eye Liner'),
(16, 'Eye Shadow'),
(17, 'Mascara'),
(18, 'MakeUp Kit'),
(19, 'Creams'),
(20, 'Lotions'),
(21, 'Skin Polish'),
(22, 'Face Powder'),
(23, 'Facial sprays  '),
(24, 'Kajal'),
(25, 'Lips Items');

-- --------------------------------------------------------

--
-- Table structure for table `invoice`
--

CREATE TABLE `invoice` (
  `invoice` int(11) NOT NULL,
  `customer` int(11) DEFAULT NULL,
  `t_amount` int(11) DEFAULT NULL,
  `order_type` varchar(20) DEFAULT NULL,
  `o_Date` date DEFAULT NULL,
  `o_status` varchar(20) DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

-- --------------------------------------------------------

--
-- Table structure for table `order_details`
--

CREATE TABLE `order_details` (
  `order_id` int(11) NOT NULL,
  `product` int(11) DEFAULT NULL,
  `qty` int(11) DEFAULT NULL,
  `price` int(11) DEFAULT NULL,
  `t_amount` int(11) DEFAULT NULL,
  `invoice` int(11) DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

-- --------------------------------------------------------

--
-- Table structure for table `product`
--

CREATE TABLE `product` (
  `p_id` int(11) NOT NULL,
  `P_Name` varchar(20) DEFAULT NULL,
  `price` int(11) DEFAULT NULL,
  `catogery` int(11) DEFAULT NULL,
  `description` varchar(100) DEFAULT NULL,
  `image` varchar(256) DEFAULT NULL,
  `Featuredproduct` int(11) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data for table `product`
--

INSERT INTO `product` (`p_id`, `P_Name`, `price`, `catogery`, `description`, `image`, `Featuredproduct`) VALUES
(39, 'Black Lipsstick', 350, 10, '', '../../Contnt/images/s2595007-main-zoom5.webp', 0),
(38, 'Face Serums', 1000, 11, '', '../../Contnt/images/s2512788-main-zoom4.avif', 0),
(34, 'Face Wash', 300, 11, '', '../../Contnt/images/925868166s.jpg', 0),
(35, 'Face Oil', 800, 11, '', '../../Contnt/images/s2031417-main-zoom.webp', 0),
(36, 'Face Mask', 200, 11, '', '../../Contnt/images/s2640654-main-zoom2.webp', 0),
(37, 'Face Makeup Remover', 500, 11, '', '../../Contnt/images/s48074-main-zoom3.webp', 0),
(33, 'Face Cream', 600, 11, '', '../../Contnt/images/s1899103-main-zoom.avif', 0),
(57, 'Purple Nail Polish', 400, 12, '', '../../Contnt/images/SHILOW_1.webp', 0),
(43, 'Purple Lipsstick', 350, 10, '', '../../Contnt/images/VelvetLipstickBarbiePink2.webp', 0),
(44, 'Brown Lipsstick', 200, 10, '', '../../Contnt/images/VelvetLipstickFusion3.webp', 0),
(45, 'Luxury Rose Lipsstic', 300, 10, '', '../../Contnt/images/LuxuryRoseLips005SEDUCE_d2af72a9-31e6-43c2-b5cd-e7de04b43a364.webp', 1),
(53, 'Dark Spot', 600, 11, '', '../../Contnt/images/10_224d5755-20c9-44cd-aea2-572a389bf91f_540x.webp', 0),
(47, 'Maymelline Lipsstick', 200, 10, '', '../../Contnt/images/maybelline---color-sensational-creamy-matte-lipstick---660-touch-of-spice.webp', 0),
(48, 'Color Lipsstick', 250, 10, '', '../../Contnt/images/maybelline---color-sensational-ultimatte-slim-lipstick---more-almond.webp', 0),
(49, 'Mat Moist Lipsstick', 350, 10, '', '../../Contnt/images/st-london---matt-moist-lipstick---135-matte-meriot.webp', 0),
(50, 'Candy Pink Lipsstick', 400, 10, '', '../../Contnt/images/MatteMoistLipstickCandyPink126.webp', 0),
(51, 'Pencil Lipsstick', 150, 10, '', '../../Contnt/images/exotic_77b3d9c7-6cf1-4e08-ae68-be7d3c672c95.webp', 0),
(52, 'Facial Scrub', 400, 11, '', '../../Contnt/images/EvelineFacialScrub_540x.webp', 0),
(54, 'Sanitizer', 350, 11, '', '../../Contnt/images/80ml_523x.webp', 0),
(56, 'Brown Nail Polish', 500, 12, '', '../../Contnt/images/OYSTERPINK_1.webp', 0),
(58, 'Blue Nail Polish', 600, 12, '', '../../Contnt/images/BAYBREEZE_1.webp', 0),
(60, 'Dark Red Nail Polish', 150, 12, '', '../../Contnt/images/Orfando_1.webp', 0),
(63, 'Multi Color Nail Pol', 350, 12, '', '../../Contnt/images/nail.webp', 1),
(64, 'Spicy Color Nail Pol', 550, 12, '', '../../Contnt/images/SUGARNSPICE_1.webp', 0),
(65, 'Red Nail Polish', 450, 12, '', '../../Contnt/images/000000CMN013_1.webp', 0);

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `user_id` int(11) NOT NULL,
  `name` varchar(20) DEFAULT NULL,
  `email` varchar(60) DEFAULT NULL,
  `pwd` varchar(20) DEFAULT NULL,
  `contact` varchar(12) DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`user_id`, `name`, `email`, `pwd`, `contact`) VALUES
(1, 'Ali', 'ali@gmail.com', 'ali123', '03152545444'),
(3, 'Ahmed', 'AHMED@GMAIL.COM', '02313', 'ahmed'),
(4, '', '', '', '');

-- --------------------------------------------------------

--
-- Table structure for table `user_role`
--

CREATE TABLE `user_role` (
  `role_id` int(11) NOT NULL,
  `Role_Name` varchar(20) DEFAULT NULL,
  `user_id` int(11) DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `catogery`
--
ALTER TABLE `catogery`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `invoice`
--
ALTER TABLE `invoice`
  ADD PRIMARY KEY (`invoice`),
  ADD KEY `customer` (`customer`);

--
-- Indexes for table `order_details`
--
ALTER TABLE `order_details`
  ADD PRIMARY KEY (`order_id`),
  ADD KEY `product` (`product`),
  ADD KEY `invoice` (`invoice`);

--
-- Indexes for table `product`
--
ALTER TABLE `product`
  ADD PRIMARY KEY (`p_id`),
  ADD KEY `catogery` (`catogery`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`user_id`);

--
-- Indexes for table `user_role`
--
ALTER TABLE `user_role`
  ADD PRIMARY KEY (`role_id`),
  ADD KEY `user_id` (`user_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `catogery`
--
ALTER TABLE `catogery`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=26;

--
-- AUTO_INCREMENT for table `invoice`
--
ALTER TABLE `invoice`
  MODIFY `invoice` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `order_details`
--
ALTER TABLE `order_details`
  MODIFY `order_id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `product`
--
ALTER TABLE `product`
  MODIFY `p_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=66;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `user_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `user_role`
--
ALTER TABLE `user_role`
  MODIFY `role_id` int(11) NOT NULL AUTO_INCREMENT;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
