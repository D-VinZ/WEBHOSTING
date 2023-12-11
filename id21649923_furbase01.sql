-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: Dec 11, 2023 at 03:59 AM
-- Server version: 10.5.20-MariaDB
-- PHP Version: 7.3.33

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `id21649923_furbase01`
--

-- --------------------------------------------------------

--
-- Table structure for table `contact_form`
--

CREATE TABLE `contact_form` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `number` varchar(255) NOT NULL,
  `date` datetime(6) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `payment_form`
--

CREATE TABLE `payment_form` (
  `id` int(255) NOT NULL,
  `name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `number` varchar(255) NOT NULL,
  `address` varchar(255) NOT NULL,
  `province` varchar(255) NOT NULL,
  `street` varchar(255) NOT NULL,
  `municipal` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `tbl_product1`
--

CREATE TABLE `tbl_product1` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `image` varchar(255) NOT NULL,
  `price` double(10,2) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data for table `tbl_product1`
--

INSERT INTO `tbl_product1` (`id`, `name`, `image`, `price`) VALUES
(1, 'Maxwell Premium Real Tuna Canned Cat Food 400g', 'product-1.jpg', 70.00),
(2, 'Bingo Adult Dog Food \r\n20kg', 'product-2.jpg', 1420.00),
(3, 'Royal Canin Shitzu', 'product-3.jpg', 800.00);

-- --------------------------------------------------------

--
-- Table structure for table `tbl_product2`
--

CREATE TABLE `tbl_product2` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `image` varchar(255) NOT NULL,
  `price` double(10,2) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data for table `tbl_product2`
--

INSERT INTO `tbl_product2` (`id`, `name`, `image`, `price`) VALUES
(1, 'Adult Golden Retriever', 'pet-1.png', 30000.00),
(2, 'Somali Cat', 'pet-2.png', 14000.00),
(3, 'Dwarf Hamster', 'pet-3.png', 850.00);

-- --------------------------------------------------------

--
-- Table structure for table `tbl_product3`
--

CREATE TABLE `tbl_product3` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `image` varchar(255) NOT NULL,
  `price` double(10,2) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data for table `tbl_product3`
--

INSERT INTO `tbl_product3` (`id`, `name`, `image`, `price`) VALUES
(1, 'Elizabeth Collar: Circularcone-shaped E-collar for pets. Prevents chewing post-surgery', 'product-4.jpg', 130.00),
(2, 'Multifuncitonal  2 in 1 Pet Bowl Dog Bowl Cat Bowl Pet Feeder (NO BOTTLE) Pet Accessories', 'product-5.jpg', 199.00),
(3, 'Dog Bed Mat Waterproof. Dog Crate Mat Chew Resistant Anti-Slip. Dog Mattress for Outdoor', 'product-6.jpg', 160.00);

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(255) NOT NULL,
  `username` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `username`, `email`, `password`) VALUES
(8, 'Mcllennan', 'mcllennan@gmail.com', '98bb1740a24c38c651f9ec7d5d27d677'),
(9, 'Dvinz', 'dvinz@gmail.com', '202cb962ac59075b964b07152d234b70'),
(10, 'aj', 'aj@gmail.com', '202cb962ac59075b964b07152d234b70'),
(11, 'aj', 'avinz@gmail.com', '202cb962ac59075b964b07152d234b70'),
(12, 'aj123', 'aj@gmail.com1', '202cb962ac59075b964b07152d234b70'),
(13, 'al01', 'al01@gmail.com', '202cb962ac59075b964b07152d234b70'),
(14, 'alj01', 'alj01@gmail.com', '202cb962ac59075b964b07152d234b70');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `contact_form`
--
ALTER TABLE `contact_form`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `payment_form`
--
ALTER TABLE `payment_form`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tbl_product1`
--
ALTER TABLE `tbl_product1`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tbl_product2`
--
ALTER TABLE `tbl_product2`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tbl_product3`
--
ALTER TABLE `tbl_product3`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `contact_form`
--
ALTER TABLE `contact_form`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `payment_form`
--
ALTER TABLE `payment_form`
  MODIFY `id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `tbl_product1`
--
ALTER TABLE `tbl_product1`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `tbl_product2`
--
ALTER TABLE `tbl_product2`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `tbl_product3`
--
ALTER TABLE `tbl_product3`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
