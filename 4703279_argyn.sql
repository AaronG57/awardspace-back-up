-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: fdb1034.awardspace.net
-- Generation Time: Feb 22, 2026 at 11:13 AM
-- Server version: 8.0.32
-- PHP Version: 8.1.34

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `4703279_argyn`
--

-- --------------------------------------------------------

--
-- Table structure for table `devices`
--

CREATE TABLE `devices` (
  `id` int NOT NULL,
  `device_name` varchar(50) NOT NULL,
  `users_count` int NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `devices`
--

INSERT INTO `devices` (`id`, `device_name`, `users_count`) VALUES
(1, 'Desktop', 231),
(2, 'Mobile', 467),
(3, 'Tablet', 180),
(4, 'Smart TV', 105);

-- --------------------------------------------------------

--
-- Table structure for table `MyGuests`
--

CREATE TABLE `MyGuests` (
  `id` int UNSIGNED NOT NULL,
  `firstname` char(50) NOT NULL,
  `lastname` char(50) NOT NULL,
  `city` char(50) NOT NULL,
  `street` char(50) NOT NULL,
  `streetnumber` int UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `MyGuests`
--

INSERT INTO `MyGuests` (`id`, `firstname`, `lastname`, `city`, `street`, `streetnumber`) VALUES
(11, 'John', 'Smith', 'London', 'East Street', 48),
(12, 'Mandy', 'Jones', 'Liverpool', 'Gaston Rd', 256),
(14, 'Hitler', 'Adolf', 'warsaw', 'zamiany', 12);

-- --------------------------------------------------------

--
-- Table structure for table `myguests`
--

CREATE TABLE `myguests` (
  `id` int UNSIGNED NOT NULL,
  `firstname` char(50) NOT NULL,
  `lastname` char(50) NOT NULL,
  `city` char(50) NOT NULL,
  `street` char(50) NOT NULL,
  `streetnumber` int UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `myguests`
--

INSERT INTO `myguests` (`id`, `firstname`, `lastname`, `city`, `street`, `streetnumber`) VALUES
(1, 'Hitler', 'Adolf', 'Berlin', 'East Street', 27),
(2, 'Gengis khan', 'Esuhei', 'Ulaanbaatar', 'Bayan-Zurkh', 41),
(3, 'Napaleon', 'Bonopart', 'Paris', 'West Street', 8),
(4, 'Alexander', 'Flip', 'Liverpool', 'Gaston Rd', 26),
(5, 'Stalin', 'Joseph', 'Moscow', 'Baklava', 7),
(6, 'Khalid', 'ibn Al-Walid', 'Dubai', 'Abdallah rd', 69);

-- --------------------------------------------------------

--
-- Table structure for table `sales`
--

CREATE TABLE `sales` (
  `id` int NOT NULL,
  `month` varchar(20) NOT NULL,
  `total_sales` int NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `sales`
--

INSERT INTO `sales` (`id`, `month`, `total_sales`) VALUES
(1, 'January', 1200),
(2, 'February', 980),
(3, 'March', 1430),
(4, 'April', 1600),
(5, 'May', 1750),
(6, 'June', 1900),
(7, 'July', 2100),
(8, 'August', 1980),
(9, 'September', 1700),
(10, 'October', 1550),
(11, 'November', 1800),
(12, 'December', 2200);

-- --------------------------------------------------------

--
-- Table structure for table `temperature`
--

CREATE TABLE `temperature` (
  `id` int NOT NULL,
  `day` date NOT NULL,
  `avg_temp` decimal(4,1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `temperature`
--

INSERT INTO `temperature` (`id`, `day`, `avg_temp`) VALUES
(1, '2026-01-01', 2.5),
(2, '2026-01-02', 3.0),
(3, '2026-01-03', 1.8),
(4, '2026-01-04', 0.5),
(5, '2026-01-05', -1.0),
(6, '2026-01-06', 0.8),
(7, '2026-01-07', 2.1),
(8, '2026-01-08', 3.3),
(9, '2026-01-09', 4.0),
(10, '2026-01-10', 3.6);

-- --------------------------------------------------------

--
-- Table structure for table `transactions2`
--

CREATE TABLE `transactions2` (
  `id` int NOT NULL,
  `order_id` int NOT NULL,
  `amount` decimal(9,2) NOT NULL,
  `response_code` int NOT NULL,
  `response_desc` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `transactions2`
--

INSERT INTO `transactions2` (`id`, `order_id`, `amount`, `response_code`, `response_desc`) VALUES
(1, 12345, 271000.50, 1, 'Paid'),
(2, 68859, 307.20, 2, 'Not Paid');

-- --------------------------------------------------------

--
-- Table structure for table `transactions3`
--

CREATE TABLE `transactions3` (
  `id` int NOT NULL,
  `product_id` int NOT NULL,
  `name` varchar(50) NOT NULL,
  `price` decimal(9,2) NOT NULL,
  `category` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `transactions3`
--

INSERT INTO `transactions3` (`id`, `product_id`, `name`, `price`, `category`) VALUES
(1, 2001, 'Wireless Mouse', 59.99, 'Electronics');

-- --------------------------------------------------------

--
-- Table structure for table `transactions4`
--

CREATE TABLE `transactions4` (
  `id` int NOT NULL,
  `reservation_id` int NOT NULL,
  `guest_name` varchar(50) NOT NULL,
  `room_number` int NOT NULL,
  `check_in` varchar(50) NOT NULL,
  `check_out` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `transactions4`
--

INSERT INTO `transactions4` (`id`, `reservation_id`, `guest_name`, `room_number`, `check_in`, `check_out`) VALUES
(1, 3001, 'Anna Kowalska', 105, '2025-11-05', '2025-11-07');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int NOT NULL,
  `country` varchar(50) NOT NULL,
  `user_count` int NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `country`, `user_count`) VALUES
(1, 'USA', 520),
(2, 'Germany', 310),
(3, 'Poland', 260),
(4, 'UK', 190),
(5, 'France', 170);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `devices`
--
ALTER TABLE `devices`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `MyGuests`
--
ALTER TABLE `MyGuests`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `myguests`
--
ALTER TABLE `myguests`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `sales`
--
ALTER TABLE `sales`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `temperature`
--
ALTER TABLE `temperature`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `transactions2`
--
ALTER TABLE `transactions2`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `order_id` (`order_id`);

--
-- Indexes for table `transactions3`
--
ALTER TABLE `transactions3`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `product_id` (`product_id`);

--
-- Indexes for table `transactions4`
--
ALTER TABLE `transactions4`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `reservation_id` (`reservation_id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `devices`
--
ALTER TABLE `devices`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `MyGuests`
--
ALTER TABLE `MyGuests`
  MODIFY `id` int UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT for table `myguests`
--
ALTER TABLE `myguests`
  MODIFY `id` int UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `sales`
--
ALTER TABLE `sales`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT for table `temperature`
--
ALTER TABLE `temperature`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `transactions2`
--
ALTER TABLE `transactions2`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `transactions3`
--
ALTER TABLE `transactions3`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `transactions4`
--
ALTER TABLE `transactions4`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
