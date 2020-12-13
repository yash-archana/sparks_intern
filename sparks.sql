-- phpMyAdmin SQL Dump
-- version 5.0.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Dec 13, 2020 at 03:28 PM
-- Server version: 10.4.16-MariaDB
-- PHP Version: 7.4.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `sparks`
--

-- --------------------------------------------------------

--
-- Table structure for table `naam`
--

CREATE TABLE `naam` (
  `id` int(11) NOT NULL,
  `first` varchar(100) NOT NULL,
  `email_id` varchar(100) NOT NULL,
  `balance` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `naam`
--

INSERT INTO `naam` (`id`, `first`, `email_id`, `balance`) VALUES
(1, 'Yash', 'Yash1108.yg@gmail.com', 12000),
(2, 'Vinayaka', 'vinayaka.18bit093@abes.ac.in', 9686),
(3, 'Robin', 'Robin@111gmai.com', 2500),
(4, 'Rawat', 'Rawat999@gmail.com', 1800),
(5, 'paati', 'paatikunfu@gmail.com', 1700),
(6, 'John', 'Johnchaalu@gmail.com', 100),
(7, 'sarthak', 'sarthak@gmail.com', 1000),
(8, 'vishal', 'Vishal@gmail.com', 8000),
(9, 'priyanshu', 'Priyanshu222@gmail.com', 500),
(10, 'AAruto', 'AAruto@gmail.com', 100);

-- --------------------------------------------------------

--
-- Table structure for table `transaction`
--

CREATE TABLE `transaction` (
  `id` int(11) NOT NULL,
  `sender` varchar(100) NOT NULL,
  `receiver` varchar(100) NOT NULL,
  `amount` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `transaction`
--

INSERT INTO `transaction` (`id`, `sender`, `receiver`, `amount`) VALUES
(1, 'Yash', 'Vinayaka', 10),
(2, 'Yash', 'Vinayaka', 20),
(3, 'Robin', 'Vinayaka', 1000);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `naam`
--
ALTER TABLE `naam`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `transaction`
--
ALTER TABLE `transaction`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `naam`
--
ALTER TABLE `naam`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `transaction`
--
ALTER TABLE `transaction`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
