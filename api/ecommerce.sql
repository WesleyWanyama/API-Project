-- phpMyAdmin SQL Dump
-- version 5.0.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jan 09, 2022 at 04:11 PM
-- Server version: 10.4.17-MariaDB
-- PHP Version: 8.0.0

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `ecommerce`
--

-- --------------------------------------------------------

--
-- Table structure for table `apiproductpaths`
--

CREATE TABLE `apiproductpaths` (
  `apiproductpath_id` int(11) NOT NULL,
  `path` enum('userdetails','products','transactions') NOT NULL,
  `added_by` int(11) NOT NULL,
  `created_at` datetime NOT NULL,
  `updated_at` datetime NOT NULL,
  `is_deleted` int(11) NOT NULL DEFAULT 0
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `apiproducts`
--

CREATE TABLE `apiproducts` (
  `apiproduct_id` int(11) NOT NULL,
  `productname` enum('userdetails','products','transactions') NOT NULL,
  `added_by` int(11) NOT NULL,
  `created_at` datetime NOT NULL,
  `updated_on` datetime NOT NULL,
  `is_deleted` int(11) NOT NULL DEFAULT 0
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `apitokens`
--

CREATE TABLE `apitokens` (
  `apitoken_id` int(11) NOT NULL,
  `api_userid` int(11) NOT NULL,
  `api_productid` int(11) NOT NULL,
  `api_token` varchar(40) NOT NULL,
  `created_at` datetime NOT NULL,
  `expires_on` datetime NOT NULL,
  `is_deleted` int(11) NOT NULL DEFAULT 0
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `apiusers`
--

CREATE TABLE `apiusers` (
  `apiuser_id` int(11) NOT NULL,
  `username` varchar(40) NOT NULL,
  `key` varchar(60) NOT NULL,
  `created_at` datetime NOT NULL,
  `updated_on` datetime NOT NULL,
  `added_by` int(11) NOT NULL,
  `is_deleted` int(11) NOT NULL DEFAULT 0
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `apiusers`
--

INSERT INTO `apiusers` (`apiuser_id`, `username`, `key`, `created_at`, `updated_on`, `added_by`, `is_deleted`) VALUES
(4, 'Adolph', '23', '2022-01-07 21:04:00', '2022-01-07 21:04:00', 0, 0),
(5, 'Wisywes', '5', '2022-01-07 21:26:00', '2022-01-07 21:26:00', 0, 0),
(6, 'Wisywes', '5', '2022-01-07 21:26:00', '2022-01-07 21:26:00', 0, 0),
(7, 'adolph', '23', '2022-01-09 18:00:00', '2022-01-09 18:00:00', 0, 0),
(8, 'Wesley', '3', '2022-01-09 18:00:00', '2022-01-09 18:00:00', 0, 0);

-- --------------------------------------------------------

--
-- Table structure for table `categories`
--

CREATE TABLE `categories` (
  `category_id` int(11) NOT NULL,
  `category_name` varchar(25) NOT NULL,
  `is_deleted` int(11) NOT NULL DEFAULT 0
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `categories`
--

INSERT INTO `categories` (`category_id`, `category_name`, `is_deleted`) VALUES
(1, 'Men', 0),
(2, 'Women', 0),
(3, 'Children', 0),
(4, 'Pets', 0),
(6, 'Man', 0),
(7, 'Universal clothes', 0);

-- --------------------------------------------------------

--
-- Table structure for table `order`
--

CREATE TABLE `order` (
  `order_id` int(11) NOT NULL,
  `customer_id` int(11) NOT NULL,
  `order_amount` double NOT NULL,
  `order_status` enum('pending','pending payment','paid') NOT NULL,
  `created_at` datetime NOT NULL,
  `payment_type` int(11) NOT NULL,
  `updated_at` datetime NOT NULL,
  `is_deleted` int(11) NOT NULL DEFAULT 0
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `orderdetails`
--

CREATE TABLE `orderdetails` (
  `orderdetails_id` int(11) NOT NULL,
  `product_id` int(11) NOT NULL,
  `product_price` double NOT NULL,
  `order_quantity` int(11) NOT NULL,
  `orderdetails_total` double NOT NULL,
  `created_at` datetime NOT NULL,
  `updated_at` datetime NOT NULL,
  `is_deleted` int(11) NOT NULL DEFAULT 0
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `paymenttypes`
--

CREATE TABLE `paymenttypes` (
  `paymenttype_id` int(11) NOT NULL,
  `paymenttype_name` varchar(20) NOT NULL,
  `description` varchar(40) NOT NULL,
  `is_deleted` int(11) NOT NULL DEFAULT 0
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `product`
--

CREATE TABLE `product` (
  `product_id` int(11) NOT NULL,
  `product_name` varchar(25) NOT NULL,
  `product_description` text NOT NULL,
  `product_image` varchar(40) NOT NULL,
  `product_price` double NOT NULL,
  `available_quantity` int(11) NOT NULL,
  `subcategory_id` int(11) NOT NULL,
  `created_at` datetime NOT NULL,
  `updated_at` datetime NOT NULL,
  `added_by` int(11) NOT NULL,
  `is_deleted` int(11) NOT NULL DEFAULT 0
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `product`
--

INSERT INTO `product` (`product_id`, `product_name`, `product_description`, `product_image`, `product_price`, `available_quantity`, `subcategory_id`, `created_at`, `updated_at`, `added_by`, `is_deleted`) VALUES
(3, 'Puffer Jacket', 'Black Leather', 'nike_puffer', 120, 45, 0, '2022-01-09 16:03:00', '2022-01-09 16:03:00', 1, 0),
(4, 'Evening_wear', 'Black Leather', 'evening', 120, 2, 0, '2022-01-09 17:53:00', '2022-01-09 17:53:00', 1, 0);

-- --------------------------------------------------------

--
-- Table structure for table `productimages`
--

CREATE TABLE `productimages` (
  `productimages_id` int(11) NOT NULL,
  `product_image` varchar(40) NOT NULL,
  `product_id` int(11) NOT NULL,
  `created_at` datetime NOT NULL,
  `updated_at` datetime NOT NULL,
  `added_by` int(11) NOT NULL,
  `is_deleted` int(11) NOT NULL DEFAULT 0
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `purchases`
--

CREATE TABLE `purchases` (
  `purchase_id` int(11) NOT NULL,
  `product_name` varchar(25) NOT NULL,
  `product_price` double NOT NULL,
  `purchased_on` datetime NOT NULL,
  `category_id` int(11) NOT NULL,
  `subcategory_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `roles`
--

CREATE TABLE `roles` (
  `role_id` int(11) NOT NULL,
  `role_name` varchar(15) NOT NULL,
  `is_deleted` int(11) NOT NULL DEFAULT 0
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `roles`
--

INSERT INTO `roles` (`role_id`, `role_name`, `is_deleted`) VALUES
(1, 'user', 0),
(2, 'admin', 0);

-- --------------------------------------------------------

--
-- Table structure for table `subcategories`
--

CREATE TABLE `subcategories` (
  `subcategory_id` int(11) NOT NULL,
  `subcategory_name` varchar(25) NOT NULL,
  `category` int(11) NOT NULL,
  `is_deleted` int(11) NOT NULL DEFAULT 0
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `subcategories`
--

INSERT INTO `subcategories` (`subcategory_id`, `subcategory_name`, `category`, `is_deleted`) VALUES
(1, 'Cows', 1, 0),
(2, 'Cows', 1, 0),
(3, 'Cows', 1, 0),
(4, 'Cows', 2, 0),
(5, 'Cows', 2, 0),
(6, 'Cows', 2, 0),
(7, 'Cows', 3, 0),
(8, 'Cows', 3, 0),
(9, 'Cows', 3, 0),
(10, 'Cows', 4, 0),
(11, 'Cows', 4, 0);

-- --------------------------------------------------------

--
-- Table structure for table `userlogins`
--

CREATE TABLE `userlogins` (
  `userlogin_id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `user_ip` varchar(25) NOT NULL,
  `login_time` datetime NOT NULL,
  `logout_time` datetime NOT NULL,
  `is_deleted` int(11) NOT NULL DEFAULT 0
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `user_id` int(11) NOT NULL,
  `first_name` varchar(25) NOT NULL,
  `last_name` varchar(25) NOT NULL,
  `email` varchar(60) NOT NULL,
  `password` varchar(60) NOT NULL,
  `gender` enum('male','female') NOT NULL,
  `role` int(11) NOT NULL,
  `is_deleted` int(11) NOT NULL DEFAULT 0
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`user_id`, `first_name`, `last_name`, `email`, `password`, `gender`, `role`, `is_deleted`) VALUES
(5, 'Wesley', 'Wanyama', 'weswanyama@gmail.com', '$2y$10$N7PY6YEbXqd7GvhAsl/LHevyNb/FB/RPAt3w1eANT9ER/bHJfeQey', 'male', 0, 0),
(6, 'Wesley', 'Doe', 'branajay@gmail.com', '$2y$10$5eKrybcjNz7da.0o56ok/uaMaw5.WMwNe1sju/1fOSLBDiwbQaZia', 'male', 0, 0),
(7, 'Buyer1', 'Doe', 'buyer1@gmail.com', '$2y$10$.XS3iVRfrWY75zxFpLTx7.rQXgLHpxCV3pPA4yEnrNnWh8re9nKSS', 'male', 0, 0);

-- --------------------------------------------------------

--
-- Table structure for table `wallet`
--

CREATE TABLE `wallet` (
  `wallet_id` int(11) NOT NULL,
  `customer_id` int(11) NOT NULL,
  `amount_available` double NOT NULL,
  `created_at` datetime NOT NULL,
  `updated_at` datetime NOT NULL,
  `is_deleted` int(11) NOT NULL DEFAULT 0
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `apiproductpaths`
--
ALTER TABLE `apiproductpaths`
  ADD PRIMARY KEY (`apiproductpath_id`),
  ADD KEY `added_by` (`added_by`);

--
-- Indexes for table `apiproducts`
--
ALTER TABLE `apiproducts`
  ADD PRIMARY KEY (`apiproduct_id`),
  ADD KEY `added_by` (`added_by`);

--
-- Indexes for table `apitokens`
--
ALTER TABLE `apitokens`
  ADD PRIMARY KEY (`apitoken_id`),
  ADD KEY `api_userid` (`api_userid`),
  ADD KEY `api_productid` (`api_productid`);

--
-- Indexes for table `apiusers`
--
ALTER TABLE `apiusers`
  ADD PRIMARY KEY (`apiuser_id`),
  ADD KEY `apiusers_ibfk_1` (`added_by`);

--
-- Indexes for table `categories`
--
ALTER TABLE `categories`
  ADD PRIMARY KEY (`category_id`);

--
-- Indexes for table `order`
--
ALTER TABLE `order`
  ADD PRIMARY KEY (`order_id`),
  ADD KEY `customer_id` (`customer_id`),
  ADD KEY `payment_type` (`payment_type`);

--
-- Indexes for table `orderdetails`
--
ALTER TABLE `orderdetails`
  ADD PRIMARY KEY (`orderdetails_id`),
  ADD KEY `product_id` (`product_id`);

--
-- Indexes for table `paymenttypes`
--
ALTER TABLE `paymenttypes`
  ADD PRIMARY KEY (`paymenttype_id`);

--
-- Indexes for table `product`
--
ALTER TABLE `product`
  ADD PRIMARY KEY (`product_id`),
  ADD KEY `subcategory_id` (`subcategory_id`),
  ADD KEY `added_by` (`added_by`);

--
-- Indexes for table `productimages`
--
ALTER TABLE `productimages`
  ADD PRIMARY KEY (`productimages_id`),
  ADD KEY `product_id` (`product_id`),
  ADD KEY `added_by` (`added_by`);

--
-- Indexes for table `purchases`
--
ALTER TABLE `purchases`
  ADD PRIMARY KEY (`purchase_id`),
  ADD KEY `category_id` (`category_id`),
  ADD KEY `subcategory_id` (`subcategory_id`);

--
-- Indexes for table `roles`
--
ALTER TABLE `roles`
  ADD PRIMARY KEY (`role_id`);

--
-- Indexes for table `subcategories`
--
ALTER TABLE `subcategories`
  ADD PRIMARY KEY (`subcategory_id`),
  ADD KEY `category` (`category`);

--
-- Indexes for table `userlogins`
--
ALTER TABLE `userlogins`
  ADD PRIMARY KEY (`userlogin_id`),
  ADD KEY `userlogins_ibfk_1` (`user_id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`user_id`),
  ADD UNIQUE KEY `email` (`email`),
  ADD KEY `role` (`role`);

--
-- Indexes for table `wallet`
--
ALTER TABLE `wallet`
  ADD PRIMARY KEY (`wallet_id`),
  ADD KEY `customer_id` (`customer_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `apiproductpaths`
--
ALTER TABLE `apiproductpaths`
  MODIFY `apiproductpath_id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `apiproducts`
--
ALTER TABLE `apiproducts`
  MODIFY `apiproduct_id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `apitokens`
--
ALTER TABLE `apitokens`
  MODIFY `apitoken_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `apiusers`
--
ALTER TABLE `apiusers`
  MODIFY `apiuser_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `categories`
--
ALTER TABLE `categories`
  MODIFY `category_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `order`
--
ALTER TABLE `order`
  MODIFY `order_id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `orderdetails`
--
ALTER TABLE `orderdetails`
  MODIFY `orderdetails_id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `paymenttypes`
--
ALTER TABLE `paymenttypes`
  MODIFY `paymenttype_id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `product`
--
ALTER TABLE `product`
  MODIFY `product_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `productimages`
--
ALTER TABLE `productimages`
  MODIFY `productimages_id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `purchases`
--
ALTER TABLE `purchases`
  MODIFY `purchase_id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `roles`
--
ALTER TABLE `roles`
  MODIFY `role_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `subcategories`
--
ALTER TABLE `subcategories`
  MODIFY `subcategory_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT for table `userlogins`
--
ALTER TABLE `userlogins`
  MODIFY `userlogin_id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `user_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `wallet`
--
ALTER TABLE `wallet`
  MODIFY `wallet_id` int(11) NOT NULL AUTO_INCREMENT;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `apiproductpaths`
--
ALTER TABLE `apiproductpaths`
  ADD CONSTRAINT `apiproductpaths_ibfk_1` FOREIGN KEY (`added_by`) REFERENCES `users` (`user_id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `apiproducts`
--
ALTER TABLE `apiproducts`
  ADD CONSTRAINT `apiproducts_ibfk_1` FOREIGN KEY (`added_by`) REFERENCES `users` (`user_id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `apitokens`
--
ALTER TABLE `apitokens`
  ADD CONSTRAINT `apitokens_ibfk_1` FOREIGN KEY (`api_userid`) REFERENCES `apiusers` (`apiuser_id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `apitokens_ibfk_2` FOREIGN KEY (`api_productid`) REFERENCES `apiproducts` (`apiproduct_id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `order`
--
ALTER TABLE `order`
  ADD CONSTRAINT `order_ibfk_1` FOREIGN KEY (`customer_id`) REFERENCES `users` (`user_id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `order_ibfk_2` FOREIGN KEY (`payment_type`) REFERENCES `paymenttypes` (`paymenttype_id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `orderdetails`
--
ALTER TABLE `orderdetails`
  ADD CONSTRAINT `orderdetails_ibfk_1` FOREIGN KEY (`product_id`) REFERENCES `users` (`user_id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `productimages`
--
ALTER TABLE `productimages`
  ADD CONSTRAINT `productimages_ibfk_1` FOREIGN KEY (`product_id`) REFERENCES `product` (`product_id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `productimages_ibfk_2` FOREIGN KEY (`added_by`) REFERENCES `users` (`user_id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `purchases`
--
ALTER TABLE `purchases`
  ADD CONSTRAINT `purchases_ibfk_1` FOREIGN KEY (`category_id`) REFERENCES `categories` (`category_id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `purchases_ibfk_2` FOREIGN KEY (`subcategory_id`) REFERENCES `subcategories` (`subcategory_id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `subcategories`
--
ALTER TABLE `subcategories`
  ADD CONSTRAINT `subcategories_ibfk_1` FOREIGN KEY (`category`) REFERENCES `categories` (`category_id`);

--
-- Constraints for table `userlogins`
--
ALTER TABLE `userlogins`
  ADD CONSTRAINT `userlogins_ibfk_1` FOREIGN KEY (`user_id`) REFERENCES `users` (`user_id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `wallet`
--
ALTER TABLE `wallet`
  ADD CONSTRAINT `wallet_ibfk_1` FOREIGN KEY (`customer_id`) REFERENCES `users` (`user_id`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
