-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Apr 10, 2025 at 05:01 PM
-- Server version: 10.4.32-MariaDB
-- PHP Version: 8.0.30

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `customizedgift`
--

-- --------------------------------------------------------

--
-- Table structure for table `categories`
--

CREATE TABLE `categories` (
  `id` int(11) NOT NULL,
  `name` varchar(100) NOT NULL,
  `description` text DEFAULT NULL,
  `image` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `categories`
--

INSERT INTO `categories` (`id`, `name`, `description`, `image`) VALUES
(1, 'Jewelry', 'Custom name pendants, engraved rings, and personalized bracelets', 'https://images.unsplash.com/photo-1611591437281-460bfbe1220a?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&w=400&h=300&q=80'),
(2, 'Stationery', 'Personalized notebooks, pens, and other stationery items', 'https://images.unsplash.com/photo-1512820790803-83ca734da794?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&w=400&h=300&q=80'),
(3, 'Accessories', 'Custom keychains and other accessories', 'https://images.unsplash.com/photo-1614094082869-cd4e4b2905c7?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&w=400&h=300&q=80'),
(4, 'Drinkware', 'Personalized mugs, bottles, and other drinkware', 'https://images.unsplash.com/photo-1577937927133-66ef06acdf18?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&w=400&h=300&q=80'),
(5, 'Home Decor', 'Custom wall art, cushions, and other home decor items', 'https://images.unsplash.com/photo-1513519245088-0e12902e5a38?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&w=400&h=300&q=80'),
(6, 'Clothing', 'Personalized t-shirts and other clothing items', 'https://images.unsplash.com/photo-1521572163474-6864f9cf17ab?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&w=400&h=300&q=80');

-- --------------------------------------------------------

--
-- Table structure for table `contacts`
--

CREATE TABLE `contacts` (
  `id` int(11) NOT NULL,
  `name` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `subject` varchar(100) NOT NULL,
  `message` text NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `status` enum('new','read','replied') DEFAULT 'new'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `contacts`
--

INSERT INTO `contacts` (`id`, `name`, `email`, `subject`, `message`, `created_at`, `status`) VALUES
(1, 'hgg', 'r@gmail.com', 'order', 'gawrg', '2025-04-10 05:13:50', 'new'),
(2, 'hbfuv g', 'jsdnviud@gmail.com', 'order', 'jdnciicsd', '2025-04-10 05:17:42', 'new'),
(3, 'shre', 'shre@gmail.com', 'Product Question', 'jhgsdygyddsuysvjscuisydgfy', '2025-04-10 14:44:25', 'new');

-- --------------------------------------------------------

--
-- Table structure for table `customizations`
--

CREATE TABLE `customizations` (
  `id` int(11) NOT NULL,
  `user_id` int(11) DEFAULT NULL,
  `product_id` int(11) NOT NULL,
  `customizations` text NOT NULL,
  `total_price` decimal(10,2) NOT NULL,
  `created_at` datetime NOT NULL,
  `updated_at` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `customizations`
--

INSERT INTO `customizations` (`id`, `user_id`, `product_id`, `customizations`, `total_price`, `created_at`, `updated_at`) VALUES
(1, 1, 8, '\"{\\\"text\\\":\\\"asdfghjkl\\\"}\"', 24.99, '2025-04-10 10:37:50', '2025-04-10 05:07:50'),
(2, 1, 4, '\"{\\\"text\\\":\\\"feea\\\",\\\"material\\\":\\\"Silver\\\",\\\"style\\\":\\\"Classic\\\"}\"', 37.99, '2025-04-10 10:39:26', '2025-04-10 05:09:26'),
(3, 1, 4, '\"{}\"', 29.99, '2025-04-10 10:41:39', '2025-04-10 05:11:39'),
(4, 1, 1, '\"{\\\"text\\\":\\\"urfytefi\\\"}\"', 9.99, '2025-04-10 10:50:07', '2025-04-10 05:20:07'),
(5, 1, 5, '\"{}\"', 12.99, '2025-04-10 10:50:51', '2025-04-10 05:20:51'),
(6, 0, 5, '\"{\\\"text\\\":\\\"fdsf\\\",\\\"cover\\\":\\\"Leather\\\"}\"', 16.49, '2025-04-10 19:14:46', '2025-04-10 13:44:46'),
(7, 2, 12, '\"{\\\"text\\\":\\\"fef\\\",\\\"material\\\":\\\"Silicone\\\",\\\"style\\\":\\\"Pattern\\\"}\"', 18.49, '2025-04-10 19:16:17', '2025-04-10 13:46:17'),
(8, 3, 5, '\"{\\\"text\\\":\\\"sh\\\",\\\"cover\\\":\\\"Leather\\\"}\"', 16.49, '2025-04-10 20:13:41', '2025-04-10 14:43:41');

-- --------------------------------------------------------

--
-- Table structure for table `products`
--

CREATE TABLE `products` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `description` text DEFAULT NULL,
  `base_price` decimal(10,2) NOT NULL,
  `image` varchar(255) NOT NULL,
  `created_at` datetime NOT NULL DEFAULT current_timestamp(),
  `updated_at` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `products`
--

INSERT INTO `products` (`id`, `name`, `description`, `base_price`, `image`, `created_at`, `updated_at`) VALUES
(1, 'Personalized Keychain', 'Custom keychain with engraved text', 9.99, 'https://images.unsplash.com/photo-1614094082869-cd4e4b2905c7?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&w=400&h=300&q=80', '2025-04-10 10:35:35', '2025-04-10 05:05:35'),
(2, 'Customized Mug', 'Personalized mug with custom design', 14.99, 'https://images.unsplash.com/photo-1577937927133-66ef06acdf18?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&w=400&h=300&q=80', '2025-04-10 10:35:35', '2025-04-10 05:05:35'),
(3, 'Personalized Cushion', 'Custom cushion with printed design', 24.99, 'https://images.unsplash.com/photo-1567225557594-88d73e55f2cb?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&w=400&h=300&q=80', '2025-04-10 10:35:35', '2025-04-10 05:05:35'),
(4, 'Personalized Jewelry', 'Custom jewelry with engraved text', 29.99, 'https://images.unsplash.com/photo-1611591437281-460bfbe1220a?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&w=400&h=300&q=80', '2025-04-10 10:35:35', '2025-04-10 05:05:35'),
(5, 'Custom Notebooks', 'Personalized notebooks with custom design', 12.99, 'https://images.unsplash.com/photo-1512820790803-83ca734da794?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&w=400&h=300&q=80', '2025-04-10 10:35:35', '2025-04-10 05:05:35'),
(6, 'Engraved Pens', 'Custom engraved pens', 19.99, 'https://images.unsplash.com/photo-1583485088034-697b5bc54ccd?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&w=400&h=300&q=80', '2025-04-10 10:35:35', '2025-04-10 05:05:35'),
(7, 'Personalized Wall Art', 'Custom wall art with your design', 39.99, 'https://images.unsplash.com/photo-1513519245088-0e12902e5a38?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&w=400&h=300&q=80', '2025-04-10 10:35:35', '2025-04-10 05:05:35'),
(8, 'Customized T-Shirts', 'Personalized t-shirts with custom design', 24.99, 'https://images.unsplash.com/photo-1521572163474-6864f9cf17ab?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&w=400&h=300&q=80', '2025-04-10 10:35:35', '2025-04-10 05:05:35'),
(9, 'Engraved Watches', 'Custom engraved watches', 49.99, 'https://images.unsplash.com/photo-1524805444758-089113d48a6d?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&w=400&h=300&q=80', '2025-04-10 10:35:35', '2025-04-10 05:05:35'),
(10, 'Customized Bottles', 'Personalized water bottles', 19.99, 'https://images.unsplash.com/photo-1581783342308-f792dbdd27c5?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&w=400&h=300&q=80', '2025-04-10 10:35:35', '2025-04-10 05:05:35'),
(11, 'Personalized Bags', 'Custom bags with your design', 34.99, 'https://images.unsplash.com/photo-1590874103328-eac38a683ce7?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&w=400&h=300&q=80', '2025-04-10 10:35:35', '2025-04-10 05:05:35'),
(12, 'Customized Phone Cases', 'Personalized phone cases', 14.99, 'https://images.unsplash.com/photo-1511707171634-5f897ff02aa9?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&w=400&h=300&q=80', '2025-04-10 10:35:35', '2025-04-10 05:05:35');

-- --------------------------------------------------------

--
-- Table structure for table `purchased`
--

CREATE TABLE `purchased` (
  `id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `product_id` int(11) NOT NULL,
  `customization_id` int(11) NOT NULL,
  `total_price` decimal(10,2) NOT NULL,
  `purchase_date` timestamp NOT NULL DEFAULT current_timestamp(),
  `status` enum('success','completed','cancelled') DEFAULT 'success'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `purchased`
--

INSERT INTO `purchased` (`id`, `user_id`, `product_id`, `customization_id`, `total_price`, `purchase_date`, `status`) VALUES
(1, 1, 8, 1, 24.99, '2025-04-10 05:07:50', 'success'),
(2, 1, 4, 2, 37.99, '2025-04-10 05:09:26', 'success'),
(3, 1, 4, 3, 29.99, '2025-04-10 05:11:39', 'success'),
(4, 1, 1, 4, 9.99, '2025-04-10 05:20:07', 'success'),
(5, 1, 5, 5, 12.99, '2025-04-10 05:20:51', 'success'),
(7, 2, 12, 7, 18.49, '2025-04-10 13:46:17', 'success'),
(8, 3, 5, 8, 16.49, '2025-04-10 14:43:41', 'success');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `name` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `password` varchar(255) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `password`, `created_at`) VALUES
(1, 'r', 'r@gmail.com', '$2y$10$RYnIM5y4hs6uHUa2A8I11O7ZJVmAWqY.a0S5SxwU5cO61ErD6qw.O', '2025-04-10 05:06:28'),
(2, 's', 's@gmail.com', '$2y$10$XwUfBDdR8HBDocq8Ex1sE.x2H7W9R/lTiCvAEzqUDEB0Qg1YTaTdy', '2025-04-10 13:45:27'),
(3, 'm', 'm@gmail.com', '$2y$10$0fWPPX3ifY5HD4s.rTjPz.951xCfWuN/giAOmMxtFbwBUtlugHXPu', '2025-04-10 14:41:03');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `categories`
--
ALTER TABLE `categories`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `contacts`
--
ALTER TABLE `contacts`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `customizations`
--
ALTER TABLE `customizations`
  ADD PRIMARY KEY (`id`),
  ADD KEY `user_id` (`user_id`),
  ADD KEY `product_id` (`product_id`);

--
-- Indexes for table `products`
--
ALTER TABLE `products`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `purchased`
--
ALTER TABLE `purchased`
  ADD PRIMARY KEY (`id`),
  ADD KEY `user_id` (`user_id`),
  ADD KEY `product_id` (`product_id`),
  ADD KEY `customization_id` (`customization_id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `email` (`email`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `categories`
--
ALTER TABLE `categories`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `contacts`
--
ALTER TABLE `contacts`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `customizations`
--
ALTER TABLE `customizations`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `products`
--
ALTER TABLE `products`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT for table `purchased`
--
ALTER TABLE `purchased`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `purchased`
--
ALTER TABLE `purchased`
  ADD CONSTRAINT `purchased_ibfk_1` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`),
  ADD CONSTRAINT `purchased_ibfk_2` FOREIGN KEY (`product_id`) REFERENCES `products` (`id`),
  ADD CONSTRAINT `purchased_ibfk_3` FOREIGN KEY (`customization_id`) REFERENCES `customizations` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
