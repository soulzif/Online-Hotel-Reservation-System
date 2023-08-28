-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Apr 21, 2023 at 04:33 PM
-- Server version: 10.4.21-MariaDB
-- PHP Version: 8.0.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `myhotel`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `id` int(11) NOT NULL,
  `username` varchar(30) DEFAULT NULL,
  `password` varchar(30) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`id`, `username`, `password`) VALUES
(124, 'Admin', '1234'),
(125, 'Adminfeo', '12345'),
(126, 'dummy', 'dummy1'),
(127, 'meow', 'meoww');

-- --------------------------------------------------------

--
-- Table structure for table `roombook`
--

CREATE TABLE `roombook` (
  `id` int(11) NOT NULL,
  `userfullname` varchar(50) DEFAULT NULL,
  `address` varchar(50) DEFAULT NULL,
  `dob` date DEFAULT NULL,
  `email` varchar(50) DEFAULT NULL,
  `phone` varchar(50) DEFAULT NULL,
  `gender` varchar(50) DEFAULT NULL,
  `Country` varchar(30) DEFAULT NULL,
  `TRoom` varchar(30) DEFAULT NULL,
  `cin` date DEFAULT NULL,
  `cout` date DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `roombook`
--

INSERT INTO `roombook` (`id`, `userfullname`, `address`, `dob`, `email`, `phone`, `gender`, `Country`, `TRoom`, `cin`, `cout`) VALUES
(1, 'sample112', '639,c Orabi pasha Road Sainthamaruthu-2', '2023-04-20', 'zifan4466@gmail.com', '085436', 'male', 'Bangladesh', 'Standard Room', '0000-00-00', '0000-00-00'),
(2, 'sample112', '639,c Orabi pasha Road Sainthamaruthu-2', '2023-04-20', 'zifan4466@gmail.com', '085436', 'male', 'Bangladesh', 'Standard Room', '2023-04-19', '2023-04-21'),
(3, 'sample112', '639,c Orabi pasha Road Sainthamaruthu-2', '2023-04-20', 'zifan4466@gmail.com', '085436', 'male', 'Bangladesh', 'Standard Room', '2023-04-19', '2023-04-21'),
(4, 'Mohamed ', 'sdfds', '2023-04-21', 'zifan6644@gmail.com', '3465476', 'male', 'Austria', 'Superior Room', '2023-04-22', '2023-04-24');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `roombook`
--
ALTER TABLE `roombook`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=128;

--
-- AUTO_INCREMENT for table `roombook`
--
ALTER TABLE `roombook`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
