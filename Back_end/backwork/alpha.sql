-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jan 08, 2024 at 04:32 AM
-- Server version: 10.4.28-MariaDB
-- PHP Version: 8.0.28

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `alpha`
--

-- --------------------------------------------------------

--
-- Table structure for table `notifications`
--

CREATE TABLE `notifications` (
  `id` int(11) NOT NULL,
  `notif` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `notifications`
--

INSERT INTO `notifications` (`id`, `notif`) VALUES
(2, 'imad added khawla'),
(3, 'useradded user ibouderoua63@gmail.com'),
(4, 'useradded user ibouderoua63@gmail.com'),
(5, 'useradded user ibouderoua63@gmail.com'),
(6, 'useradded user ib@gmail.com'),
(7, 'useradded user ib@gmail.com'),
(8, 'useradded user ib,mkn@gmail.com'),
(9, 'useradded user ib,mkn@gmail.com'),
(10, 'useradded user ib@gmail.com'),
(11, 'useradded user ib,mkn@gmail.com'),
(12, 'useradded user ib,mkn@gmail.com'),
(13, 'aha@gmail.comadded user j@gmail.com');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `password` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `password`) VALUES
(3, 'imad', 'ibouderoua63@gmail.com', '2'),
(5, 'imad', 'ibouderua63@gmail.com', '$2y$10$hNFeJ1iDYDAYQtITUBHXlOzDwYTXUTdzlODfZ6kX.vALHMJ7n2lk2'),
(7, 'khawla', 'khawla@gmail.com', '$2y$10$LMGwOOWxzkCG/GNKOw./QOEWf3m1PgaAsrtoukoNubZtSIH4mWbJe'),
(9, 'imad', 'khawlaz@gmail.com', '$2y$10$kBZFvDCd2H0QjOKxORCXiew3s4R4hdBcqVLs8yhStsMGvkTAwnX8C'),
(11, 'imad', 'khawlao@gmail.com', '$2y$10$x1iYUDH956I0imvSTKhgNuupjRztiby7mCBKtyrAfSUBekCK.BnUO'),
(12, 'imad', 'khawla5@gmail.com', '$2y$10$.Q7PO3lFvQ8jiHPiFqrpjOMG34t.Q1/aOVqS7mbACtWFxpDfT6vbe'),
(13, 'imad', 'aha@gmail.com', '$2y$10$jYY8ov32zduvyp.4Kzv1w.UeZ8zJiQxRuimcY17uf0l1trbdho14q');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `notifications`
--
ALTER TABLE `notifications`
  ADD PRIMARY KEY (`id`);

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
-- AUTO_INCREMENT for table `notifications`
--
ALTER TABLE `notifications`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
