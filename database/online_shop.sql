-- phpMyAdmin SQL Dump
-- version 5.1.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jul 01, 2021 at 08:58 AM
-- Server version: 10.4.18-MariaDB
-- PHP Version: 8.0.3

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `online_shop`
--

-- --------------------------------------------------------

--
-- Table structure for table `items`
--

CREATE TABLE `items` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `price` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `items`
--

INSERT INTO `items` (`id`, `name`, `price`) VALUES
(1, 'TITAN model-501', 6000),
(2, 'TITAN favreleuba', 4000),
(3, 'TITAN golden-black', 7000),
(4, 'TITAN black open heart', 8000),
(5, 'TITAN Model-301', 13000),
(6, 'TITAN Model-252', 4500),
(7, 'TITAN brown analog', 8000),
(8, 'TITAN skeleton', 18000),
(9, 'TITAN modal-403', 5500),
(10, 'TITAN modal-550', 3500),
(11, 'TITAN modal-613', 9000),
(12, 'TITAN modal-736', 7500),
(13, 'FASTRACK modal-501', 5500),
(14, 'FASTRACK modal-502', 6500),
(15, 'FASTRACK modal-503', 4000),
(16, 'FASTRACK modal-504', 3000),
(17, 'FASTRACK modal-505', 5000),
(18, 'FASTRACK modal-506', 2500),
(19, 'FASTRACK modal-507', 7500),
(20, 'FASTRACK modal-508', 8600),
(21, 'FASTRACK modal-509', 2900),
(22, 'FASTRACK modal-510', 5300),
(23, 'FASTRACK modal-511', 5600),
(24, 'FASTRACK modal-512', 7000),
(25, 'ROLEX modal-100', 75000),
(26, 'ROLEX modal-101', 25000),
(27, 'ROLEX modal-102', 125000),
(28, 'ROLEX modal-103', 55000),
(29, 'ROLEX modal-104', 60000),
(30, 'ROLEX modal-105', 100000),
(31, 'ROLEX modal-106', 230000),
(32, 'ROLEX modal-107', 150000),
(33, 'ROLEX modal-108', 350000),
(34, 'ROLEX modal-109', 250000),
(35, 'ROLEX modal-110', 200000),
(36, 'ROLEX modal-111', 225000);

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `contact` varchar(255) NOT NULL,
  `city` varchar(255) NOT NULL,
  `address` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `password`, `contact`, `city`, `address`) VALUES
(4, 'UMANG', 'umangvarotariya@gmail.com', 'umang1352', '1234567890', 'surat', 'surat,gujrat'),
(5, 'UMANG', 'umangvarotariya02@gmail.com', '14e1b600b1fd579f47433b88e8d85291', '1234567890', 'surat', 'surat,gujrat,india');

-- --------------------------------------------------------

--
-- Table structure for table `users_items`
--

CREATE TABLE `users_items` (
  `id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `item_id` int(11) NOT NULL,
  `status` enum('Added to cart','Confirmed') NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `users_items`
--

INSERT INTO `users_items` (`id`, `user_id`, `item_id`, `status`) VALUES
(7, 3, 3, 'Added to cart'),
(8, 3, 4, 'Added to cart'),
(9, 3, 5, 'Added to cart'),
(10, 3, 11, 'Added to cart'),
(11, 1, 9, 'Added to cart'),
(12, 1, 2, 'Added to cart'),
(13, 1, 8, 'Added to cart'),
(18, 5, 11, 'Added to cart'),
(20, 5, 5, 'Added to cart'),
(23, 4, 1, 'Added to cart'),
(24, 4, 2, 'Added to cart'),
(25, 4, 3, 'Added to cart'),
(26, 4, 4, 'Added to cart'),
(40, 6, 1, 'Confirmed'),
(41, 6, 2, 'Confirmed'),
(42, 6, 13, 'Confirmed'),
(43, 6, 14, 'Confirmed'),
(44, 6, 25, 'Confirmed'),
(45, 6, 27, 'Confirmed'),
(46, 6, 28, 'Confirmed');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `items`
--
ALTER TABLE `items`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users_items`
--
ALTER TABLE `users_items`
  ADD PRIMARY KEY (`id`),
  ADD KEY `user_id` (`user_id`,`item_id`),
  ADD KEY `item_id` (`item_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `items`
--
ALTER TABLE `items`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=37;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `users_items`
--
ALTER TABLE `users_items`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=47;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
