-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Mar 21, 2023 at 07:15 AM
-- Server version: 10.4.24-MariaDB
-- PHP Version: 8.1.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `coffee`
--

-- --------------------------------------------------------

--
-- Table structure for table `cart`
--

CREATE TABLE `cart` (
  `id` int(11) NOT NULL,
  `pname` varchar(30) NOT NULL,
  `price` int(5) NOT NULL,
  `address` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `cart`
--

INSERT INTO `cart` (`id`, `pname`, `price`, `address`) VALUES
(2, 'ESPRESSO', 500, 'chennai'),
(3, 'ESPRESSO', 500, 'omu');

-- --------------------------------------------------------

--
-- Table structure for table `contact`
--

CREATE TABLE `contact` (
  `id` int(11) NOT NULL,
  `name` text NOT NULL,
  `email` varchar(30) NOT NULL,
  `message` varchar(500) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `contact`
--

INSERT INTO `contact` (`id`, `name`, `email`, `message`) VALUES
(1, 'Aaron', 'b4u.aaron@gmail.com', 'jgcfhfgxzgdfxfdkxychjfgvy'),
(2, 'vimal', 'vimal@gmail.com', 'gdshdfhfgjgjgfj'),
(3, 'vimal', 'vimal@gmail.com', 'gdshdfhfgjgjgfj');

-- --------------------------------------------------------

--
-- Table structure for table `product`
--

CREATE TABLE `product` (
  `id` int(5) NOT NULL,
  `pname` varchar(30) NOT NULL,
  `price` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `product`
--

INSERT INTO `product` (`id`, `pname`, `price`) VALUES
(1, 'ESPRESSO', '500'),
(2, 'DOPPIO', '1000'),
(3, 'CORTADO', '500'),
(4, 'RED EYE', '1000'),
(5, 'AMERICANO', '2000'),
(6, 'GALAO', '1500'),
(7, 'LUNGO', '1809'),
(8, 'MACCHIATO', '1400'),
(9, 'ARABIC BEANS', '5000'),
(10, 'ROBUSTA', '2000'),
(11, 'LIBERICA', '1600'),
(12, 'EXCELSA', '1200'),
(13, 'ATTIKAN ESTATE', '2000'),
(14, 'COUNTRY BEAN', '1400'),
(15, 'RANGE COFFEE', '3000'),
(16, 'BEVZILLA INSTANT COFFEE', '6000');

-- --------------------------------------------------------

--
-- Table structure for table `register`
--

CREATE TABLE `register` (
  `id` int(11) NOT NULL,
  `name` varchar(20) NOT NULL,
  `email` varchar(25) NOT NULL,
  `password` varchar(70) NOT NULL,
  `phone` int(10) NOT NULL,
  `teacher` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `register`
--

INSERT INTO `register` (`id`, `name`, `email`, `password`, `phone`, `teacher`) VALUES
(1, 'Aaron', 'b4u.aaron@gmail.com', 'c1165f606ddf7820561110e8c9ac3d0e', 2147483647, 'vimal'),
(2, 'mai', 'bala420@gmail.com', '28aa3e6d23803ab662a53cd635a73728', 2147483647, 'john'),
(3, 'mai', 'gum@gmail.com', '69bec8bfbec2b535dd39444f2b82774d', 2147483647, 'sfffff'),
(4, 'sas', 'sas@gmail.com', 'cde15d3be7a0275d3ffdafd2781dfb24', 1234567891, 'ddddd'),
(5, 'ggg', 'ggg@gamil.com', '84ae9922af012732ba7fc59d96e98d5b', 1234567891, 'sfffff');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `cart`
--
ALTER TABLE `cart`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `contact`
--
ALTER TABLE `contact`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `product`
--
ALTER TABLE `product`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `register`
--
ALTER TABLE `register`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `cart`
--
ALTER TABLE `cart`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `contact`
--
ALTER TABLE `contact`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `product`
--
ALTER TABLE `product`
  MODIFY `id` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;

--
-- AUTO_INCREMENT for table `register`
--
ALTER TABLE `register`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
