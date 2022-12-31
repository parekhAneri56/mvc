-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Dec 31, 2022 at 12:04 PM
-- Server version: 10.4.27-MariaDB
-- PHP Version: 8.1.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `crudproduct`
--

-- --------------------------------------------------------

--
-- Table structure for table `create_product`
--

CREATE TABLE `create_product` (
  `Product_id` int(11) NOT NULL,
  `Product_Name` varchar(255) NOT NULL,
  `Product_Price` bigint(20) NOT NULL,
  `Product_category` varchar(255) NOT NULL,
  `added_date_time` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `create_product`
--

INSERT INTO `create_product` (`Product_id`, `Product_Name`, `Product_Price`, `Product_category`, `added_date_time`) VALUES
(1, 'winter war men ', 1000, 'fashion', '30/12/2022 17:19:00 pm'),
(2, 'winter war women', 1000, 'fashion', '30/12/2022 17:22:22 pm'),
(3, 'footwear', 1000, 'fashion', '31/12/2022 16:24:46 pm'),
(4, 'hair oil', 500, 'oil', '31/12/2022 16:33:35 pm');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `create_product`
--
ALTER TABLE `create_product`
  ADD PRIMARY KEY (`Product_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `create_product`
--
ALTER TABLE `create_product`
  MODIFY `Product_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
