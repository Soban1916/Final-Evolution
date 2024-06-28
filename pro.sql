-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Mar 06, 2024 at 12:47 PM
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
-- Database: `last`
--

-- --------------------------------------------------------

--
-- Table structure for table `pro`
--

CREATE TABLE `pro` (
  `id` int(11) NOT NULL,
  `firstname` varchar(50) NOT NULL,
  `lastname` varchar(50) NOT NULL,
  `email` varchar(50) NOT NULL,
  `address` varchar(100) NOT NULL,
  `number` varchar(50) NOT NULL,
  `title` varchar(50) NOT NULL,
  `position` varchar(100) NOT NULL,
  `company` varchar(100) NOT NULL,
  `bussinessarena` varchar(100) NOT NULL,
  `employee` varchar(100) NOT NULL,
  `addinfo` varchar(100) NOT NULL,
  `zipcode` varchar(100) NOT NULL,
  `place` varchar(100) NOT NULL,
  `country` varchar(100) NOT NULL,
  `code` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `pro`
--

INSERT INTO `pro` (`id`, `firstname`, `lastname`, `email`, `address`, `number`, `title`, `position`, `company`, `bussinessarena`, `employee`, `addinfo`, `zipcode`, `place`, `country`, `code`) VALUES
(1, '', '', '', '', '', '', '', '', '', '', '', '', '', '', ''),
(2, 'Malik', 'Soban', 'malik@gmail.com', 'Jinnah Colony', '31352768888', 'Web Dev', '', '', '', '', '', '', '', '', ''),
(3, 'Soban', 'Ahmed', 'malik123@gmail.com', 'Ghulam Muhammadabad', '3245678909', 'Web Development', 'Junior', 'AA Computer College', 'Nope', '15', 'Street No.8', '36000', 'Faisalabad', 'Pakistan', '92');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `pro`
--
ALTER TABLE `pro`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `pro`
--
ALTER TABLE `pro`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
