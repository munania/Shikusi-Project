-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: Jan 11, 2023 at 09:33 AM
-- Server version: 10.4.24-MariaDB
-- PHP Version: 7.4.29

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `shikusi`
--

-- --------------------------------------------------------

--
-- Table structure for table `patientRecords`
--

CREATE TABLE `patientRecords` (
  `id` int(255) NOT NULL,
  `uniqueIdentifier` varchar(255) NOT NULL,
  `fullName` varchar(255) NOT NULL,
  `age` int(100) NOT NULL,
  `weight` int(11) NOT NULL,
  `height` int(11) NOT NULL,
  `bloodPressure` int(11) NOT NULL,
  `temperature` int(11) NOT NULL,
  `phoneNumber` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `patientRecords`
--

INSERT INTO `patientRecords` (`id`, `uniqueIdentifier`, `fullName`, `age`, `weight`, `height`, `bloodPressure`, `temperature`, `phoneNumber`) VALUES
(1, '63be5b666a82e', 'John Omondi', 25, 78, 159, 59, 31, '07896954825'),
(2, '63be622ec953c', 'Dennis Kamau', 56, 85, 154, 69, 32, '0769325412'),
(3, '63be624fba2f2', 'Alfred Mutiok', 36, 75, 189, 54, 31, '0752314896'),
(4, '63be6276e247f', 'Ernest Wafula', 18, 65, 172, 55, 30, '0789665489'),
(5, '63be62a31756b', 'James Bond', 68, 95, 195, 56, 33, '0791652489'),
(6, '63be62cbf3a2a', 'Jane Doe', 41, 68, 145, 52, 29, '0791489724');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `patientRecords`
--
ALTER TABLE `patientRecords`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `patientRecords`
--
ALTER TABLE `patientRecords`
  MODIFY `id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
