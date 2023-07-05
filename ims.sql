-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: May 27, 2023 at 07:27 AM
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
-- Database: `ims`
--

-- --------------------------------------------------------

--
-- Table structure for table `category`
--

CREATE TABLE `category` (
  `category_id` int(11) NOT NULL,
  `category_name` varchar(30) NOT NULL,
  `category_entry_date` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `category`
--

INSERT INTO `category` (`category_id`, `category_name`, `category_entry_date`) VALUES
(1, 'Fruit', '2023-05-11'),
(2, 'Car brand', '2023-05-15'),
(3, 'Variables', '2023-05-19'),
(4, 'e', '2023-05-05'),
(5, 'Computer', '2023-05-27');

-- --------------------------------------------------------

--
-- Table structure for table `product`
--

CREATE TABLE `product` (
  `product_id` int(11) NOT NULL,
  `product_name` varchar(50) NOT NULL,
  `product_category` int(100) NOT NULL,
  `product_code` varchar(10) NOT NULL,
  `product_entry_date` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `product`
--

INSERT INTO `product` (`product_id`, `product_name`, `product_category`, `product_code`, `product_entry_date`) VALUES
(1, 'Orange', 1, 'fruit_1', '2023-05-25'),
(2, 'Local ', 3, 'varibale_o', '2023-05-31'),
(4, 'check', 3, 'X', '2023-05-17'),
(5, 'Or', 4, 'X', '2023-05-26'),
(6, 'new', 2, 'X', '2023-05-17'),
(7, 'new 1', 2, 'new two', '2023-05-16'),
(8, 'Desktop', 5, 'one', '2023-05-27');

-- --------------------------------------------------------

--
-- Table structure for table `spend_product`
--

CREATE TABLE `spend_product` (
  `spend_product_id` int(11) NOT NULL,
  `product_id` int(11) NOT NULL,
  `product_name` varchar(255) NOT NULL,
  `spend_product_quantity` int(11) NOT NULL,
  `spend_product_entry_date` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `spend_product`
--

INSERT INTO `spend_product` (`spend_product_id`, `product_id`, `product_name`, `spend_product_quantity`, `spend_product_entry_date`) VALUES
(1, 2, 'Local ', 7, '2023-05-23'),
(2, 1, 'Orange', 86, '2023-05-27'),
(3, 4, 'check', 786868, '2023-05-13'),
(4, 5, 'Or', 9, '2023-05-29'),
(5, 4, 'check', 7, '2023-05-05'),
(6, 2, 'Local ', 60000, '2023-05-18'),
(7, 8, 'Desktop', 23, '2023-05-27');

-- --------------------------------------------------------

--
-- Table structure for table `store_product`
--

CREATE TABLE `store_product` (
  `store_product_id` int(11) NOT NULL,
  `product_id` int(11) NOT NULL,
  `product_name` varchar(255) NOT NULL,
  `store_product_quantity` int(11) NOT NULL,
  `store_product_entry_date` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `store_product`
--

INSERT INTO `store_product` (`store_product_id`, `product_id`, `product_name`, `store_product_quantity`, `store_product_entry_date`) VALUES
(1, 1, 'Orange', 14, '2023-05-19'),
(2, 2, 'Local ', 111, '2023-05-27'),
(3, 4, 'check', 6, '2023-05-17'),
(4, 5, 'Or', 100, '2023-06-07'),
(5, 2, 'Local ', 5000, '2023-05-23'),
(6, 4, 'check', 400, '2023-05-24'),
(7, 8, 'Desktop', 43, '2023-05-27');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `SI_number` int(11) NOT NULL,
  `Email` varchar(30) NOT NULL,
  `User_Password` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`SI_number`, `Email`, `User_Password`) VALUES
(1, 'mahfuzgo51@gmail.com', '123'),
(2, 'mamunsub70@gmail.com', '202cb962ac59075b964b07152d234b70'),
(3, 'atikhoseen1999@gmail.com', '202cb962ac59075b964b07152d234b70'),
(4, 'newuser@gmail.com', '202cb962ac59075b964b07152d234b70'),
(5, 'shakib@gmail.com', '202cb962ac59075b964b07152d234b70'),
(6, 'tariqul@gmail.com', '202cb962ac59075b964b07152d234b70');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `category`
--
ALTER TABLE `category`
  ADD PRIMARY KEY (`category_id`);

--
-- Indexes for table `product`
--
ALTER TABLE `product`
  ADD PRIMARY KEY (`product_id`);

--
-- Indexes for table `spend_product`
--
ALTER TABLE `spend_product`
  ADD PRIMARY KEY (`spend_product_id`);

--
-- Indexes for table `store_product`
--
ALTER TABLE `store_product`
  ADD PRIMARY KEY (`store_product_id`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`SI_number`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `category`
--
ALTER TABLE `category`
  MODIFY `category_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `product`
--
ALTER TABLE `product`
  MODIFY `product_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `spend_product`
--
ALTER TABLE `spend_product`
  MODIFY `spend_product_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `store_product`
--
ALTER TABLE `store_product`
  MODIFY `store_product_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `SI_number` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
