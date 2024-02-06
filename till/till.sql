-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jan 18, 2024 at 12:27 PM
-- Server version: 10.4.32-MariaDB
-- PHP Version: 8.2.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `till`
--

-- --------------------------------------------------------

--
-- Table structure for table `orders`
--

CREATE TABLE `orders` (
  `ID` int(5) NOT NULL,
  `Items_ordered` varchar(255) NOT NULL,
  `Price` decimal(65,0) NOT NULL,
  `Time_ordered` datetime NOT NULL DEFAULT current_timestamp(),
  `Restaurant_code` int(4) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `orders`
--

INSERT INTO `orders` (`ID`, `Items_ordered`, `Price`, `Time_ordered`, `Restaurant_code`) VALUES
(2, 'N/A', 0, '2024-01-18 11:10:47', 1),
(3, 'N/A 1', 0, '2024-01-18 11:22:32', 1),
(4, 'N/A 2', 0, '2024-01-18 11:22:32', 1),
(5, 'N/A 3', 0, '2024-01-18 11:22:32', 1),
(6, 'N/A 4', 0, '2024-01-18 11:22:32', 1),
(7, 'N/A 5', 0, '2024-01-18 11:22:32', 1),
(8, 'N/A 1', 0, '2024-01-18 11:22:39', 1),
(9, 'N/A 2', 0, '2024-01-18 11:22:39', 1),
(10, 'N/A 3', 0, '2024-01-18 11:22:39', 1),
(11, 'N/A 4', 0, '2024-01-18 11:22:39', 1),
(12, 'N/A 5', 0, '2024-01-18 11:22:39', 1);

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `ID` int(5) NOT NULL,
  `Name` varchar(255) NOT NULL,
  `DOB` date NOT NULL,
  `Employee_number` int(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`ID`, `Name`, `DOB`, `Employee_number`) VALUES
(2, 'Alfie', '2005-10-01', 1),
(3, 'Scott', '2000-01-01', 2);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `orders`
--
ALTER TABLE `orders`
  ADD PRIMARY KEY (`ID`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`ID`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `orders`
--
ALTER TABLE `orders`
  MODIFY `ID` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `ID` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
