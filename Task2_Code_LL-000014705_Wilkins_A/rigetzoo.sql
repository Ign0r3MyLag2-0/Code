-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Apr 17, 2024 at 03:56 PM
-- Server version: 10.4.28-MariaDB
-- PHP Version: 8.2.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `rigetzoo`
--

-- --------------------------------------------------------

--
-- Table structure for table `hotel_booking`
--

CREATE TABLE `hotel_booking` (
  `ID` int(5) NOT NULL,
  `Booking_number` int(5) NOT NULL,
  `Date_booked` date NOT NULL,
  `Hotel_stay` varchar(255) NOT NULL,
  `People_attending` int(1) NOT NULL,
  `Nights_booked` int(2) NOT NULL,
  `Room_required` varchar(15) NOT NULL,
  `Ticket_required` varchar(15) NOT NULL,
  `Paid` varchar(5) NOT NULL,
  `Owe` varchar(5) NOT NULL,
  `Username` varchar(255) NOT NULL,
  `Email` varchar(255) NOT NULL,
  `Password` varchar(255) NOT NULL,
  `Name` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `hotel_booking`
--

INSERT INTO `hotel_booking` (`ID`, `Booking_number`, `Date_booked`, `Hotel_stay`, `People_attending`, `Nights_booked`, `Room_required`, `Ticket_required`, `Paid`, `Owe`, `Username`, `Email`, `Password`, `Name`) VALUES
(60, 1, '2024-04-20', 'NO', 1, 0, '', '1S', '10', '', 'Ign0r3MyLag', 'alfie@ign0r3.com', '7970160412a8ae79ae379734ef1e709b', 'Alfie Wilkins');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `hotel_booking`
--
ALTER TABLE `hotel_booking`
  ADD PRIMARY KEY (`ID`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `hotel_booking`
--
ALTER TABLE `hotel_booking`
  MODIFY `ID` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=61;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
