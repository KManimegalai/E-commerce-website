-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Mar 29, 2017 at 09:49 PM
-- Server version: 10.1.13-MariaDB
-- PHP Version: 7.0.8

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `e_commerce`
--

-- --------------------------------------------------------

--
-- Table structure for table `in_cart`
--

CREATE TABLE `in_cart` (
  `id` int(255) NOT NULL,
  `user_id` int(255) NOT NULL,
  `product_name` varchar(255) NOT NULL,
  `product_quantity` varchar(255) NOT NULL,
  `total_price` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `in_cart`
--

INSERT INTO `in_cart` (`id`, `user_id`, `product_name`, `product_quantity`, `total_price`) VALUES
(21, 2, 'test6', '1', '800'),
(22, 2, 'test5', '1', '700'),
(23, 2, 'test4', '1', '600'),
(24, 2, 'test2', '1', '400'),
(25, 2, 'test4', '1', '600'),
(26, 2, 'test5', '1', '700');

-- --------------------------------------------------------

--
-- Table structure for table `location`
--

CREATE TABLE `location` (
  `s.no` int(255) NOT NULL,
  `location` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `location`
--

INSERT INTO `location` (`s.no`, `location`) VALUES
(1, 'kpm'),
(2, 'tcode\r\n'),
(3, 'namakkal'),
(4, 'salem'),
(5, 'erode');

-- --------------------------------------------------------

--
-- Table structure for table `product_details`
--

CREATE TABLE `product_details` (
  `id` int(255) NOT NULL,
  `product_name` varchar(255) NOT NULL,
  `product_price` varchar(255) NOT NULL,
  `files` varchar(255) NOT NULL,
  `file_path` varchar(255) NOT NULL,
  `catagory` varchar(255) NOT NULL,
  `location` varchar(255) NOT NULL,
  `product_description` longtext NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `product_details`
--

INSERT INTO `product_details` (`id`, `product_name`, `product_price`, `files`, `file_path`, `catagory`, `location`, `product_description`) VALUES
(1, 'test6', '800', 'img6.png', '../../images/red/img6.png', 'red', 'kpm', 'Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod\r\ntempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam'),
(2, 'test5', '700', 'img5.jpg', '../../images/red/img5.jpg', 'red', 'all_area', 'Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod\r\ntempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam'),
(3, 'test4', '600', 'img4.jpg', '../../images/red/img4.jpg', 'red', 'tcode', 'Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod\r\ntempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam'),
(4, 'test3', '500', 'img3.jpg', '../../images/red/img3.jpg', 'red', 'namakkal', 'Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod\r\ntempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam'),
(5, 'test2', '400', 'img2.jpg', '../../images/red/img2.jpg', 'red', 'salem', 'Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod\r\ntempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam'),
(6, 'test1', '244', 'img1.jpg', '../../images/red/img1.jpg', 'red', 'kpm', 'Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod\r\ntempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam');

-- --------------------------------------------------------

--
-- Table structure for table `purchase_details`
--

CREATE TABLE `purchase_details` (
  `id` int(255) NOT NULL,
  `user_id` varchar(255) DEFAULT NULL,
  `user_name` varchar(255) DEFAULT NULL,
  `phone_no` varchar(255) DEFAULT NULL,
  `product_quantity` varchar(255) NOT NULL,
  `total_price` varchar(255) NOT NULL,
  `product_name` varchar(255) NOT NULL,
  `page_type` varchar(255) DEFAULT NULL,
  `location` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `purchase_details`
--

INSERT INTO `purchase_details` (`id`, `user_id`, `user_name`, `phone_no`, `product_quantity`, `total_price`, `product_name`, `page_type`, `location`) VALUES
(1, '2', 'test', '97545154', '3', '2400', 'test6', NULL, NULL),
(2, '2', 'test', '97545154', '1', '700', 'test5', NULL, NULL),
(3, '2', 'test', '97545154', '1', '600', 'test4', NULL, NULL),
(4, '2', 'test', '97545154', '1', '800', 'test6', NULL, NULL),
(5, '2', 'test', '97545154', '1', '700', 'test5', NULL, NULL),
(6, '2', 'test', '97545154', '1', '800', 'test6', NULL, NULL),
(7, '2', 'test', '97545154', '1', '700', 'test5', NULL, NULL),
(8, '2', 'test', '97545154', '1', '600', 'test4', NULL, NULL),
(9, '2', 'test', '97545154', '1', '800', 'test6', NULL, NULL),
(10, '2', 'test', '97545154', '1', '700', 'test5', NULL, NULL),
(11, '2', 'test', '97545154', '1', '600', 'test4', NULL, NULL),
(12, '2', 'test', '97545154', '1', '800', 'test6', NULL, NULL),
(13, '2', 'test', '97545154', '1', '700', 'test5', NULL, NULL),
(14, '2', 'test', '97545154', '1', '600', 'test4', NULL, NULL),
(15, '2', 'test', '97545154', '1', '700', 'test5', NULL, NULL),
(16, '2', 'test', '97545154', '1', '600', 'test4', NULL, NULL),
(17, '2', 'test', '97545154', '1', '800', 'test6', NULL, NULL),
(18, '2', 'test', '97545154', '1', '244', 'test1', NULL, NULL),
(19, '2', 'test', '97545154', '1', '400', 'test2', NULL, NULL),
(20, '2', 'test', '97545154', '1', '500', 'test3', NULL, NULL),
(21, '2', 'test', '97545154', '1', '800', 'test6', NULL, NULL),
(22, '2', 'test', '97545154', '1', '700', 'test5', NULL, NULL),
(23, '2', 'test', '97545154', '1', '600', 'test4', NULL, NULL),
(24, '2', 'test', '97545154', '1', '400', 'test2', NULL, NULL),
(25, '2', 'test', '97545154', '1', '600', 'test4', NULL, NULL),
(26, '2', 'test', '97545154', '1', '700', 'test5', NULL, NULL),
(38, '2', NULL, NULL, '1', '600', 'test4', NULL, NULL),
(39, '2', NULL, NULL, '1', '244', 'test1', NULL, NULL),
(40, '2', NULL, NULL, '1', '400', 'test2', NULL, NULL),
(41, '2', NULL, NULL, '1', '500', 'test3', NULL, NULL),
(43, '2', NULL, NULL, '1', '700', 'test5', NULL, NULL),
(44, '2', NULL, NULL, '1', '700', 'test5', NULL, NULL),
(45, '2', NULL, NULL, '1', '600', 'test4', NULL, NULL),
(46, '2', NULL, NULL, '1', '800', 'test6', NULL, NULL),
(47, '2', NULL, NULL, '1', '700', 'test5', NULL, NULL),
(48, '2', NULL, NULL, '1', '600', 'test4', NULL, NULL),
(49, '2', '', '97545154', '1', '800', 'test6', NULL, NULL),
(50, '2', '', '97545154', '1', '700', 'test5', NULL, NULL),
(51, '2', '', '97545154', '1', '600', 'test4', NULL, NULL),
(52, '2', 'test', '97545154', '1', '700', 'test5', NULL, NULL),
(53, '2', 'test', '97545154', '1', '600', 'test4', NULL, NULL),
(59, '2', 'test', '97545154', '1', '600', 'test4', NULL, NULL),
(60, NULL, 'test', '8508806647', '1', '800', 'test6', 'show_product', 'nil'),
(61, NULL, 'karuna', '8508806647', '1', '700', 'test5', 'show_product', 'kpm'),
(62, NULL, 'karuna', '326549875', '1', '800', 'test6', 'show_product', 'platform'),
(63, NULL, '006', '3216549875', '1', '800', 'test6', 'show_product', 'dbj'),
(64, NULL, 'karuna', '8508806647', '1', '800', 'test6', 'show_product', 'kpm'),
(65, NULL, 'test', '97545154', '1', '800', 'test6', 'show_product', 'fhcft'),
(66, NULL, 'test', '97545154', '1', '800', 'test6', 'show_product', 'jbvghfg');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(255) NOT NULL,
  `username` varchar(255) DEFAULT NULL,
  `phone_no` varchar(255) DEFAULT NULL,
  `email_id` varchar(255) DEFAULT NULL,
  `password` varchar(255) DEFAULT NULL,
  `user_type` enum('user','admin') DEFAULT NULL,
  `location` longtext
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `username`, `phone_no`, `email_id`, `password`, `user_type`, `location`) VALUES
(1, 'admin', '9715804476', 'admin@greefi.com', '12345', 'admin', ''),
(2, 'test', '97545154', 'user@greefi.com', '12345', 'user', ''),
(4, 'sudhakar', '9842972047', 'asudhakar@live.in', '123456', 'user', NULL),
(6, 'arun@greefi.com', '9715804476', 'afm447@gmail.com', '12345', 'user', 'rasipuram namakkal');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `in_cart`
--
ALTER TABLE `in_cart`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `location`
--
ALTER TABLE `location`
  ADD PRIMARY KEY (`s.no`);

--
-- Indexes for table `product_details`
--
ALTER TABLE `product_details`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `purchase_details`
--
ALTER TABLE `purchase_details`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `email` (`email_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `in_cart`
--
ALTER TABLE `in_cart`
  MODIFY `id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=27;
--
-- AUTO_INCREMENT for table `location`
--
ALTER TABLE `location`
  MODIFY `s.no` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
--
-- AUTO_INCREMENT for table `product_details`
--
ALTER TABLE `product_details`
  MODIFY `id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
--
-- AUTO_INCREMENT for table `purchase_details`
--
ALTER TABLE `purchase_details`
  MODIFY `id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=67;
--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
