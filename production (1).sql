-- phpMyAdmin SQL Dump
-- version 4.7.9
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Apr 08, 2019 at 08:53 PM
-- Server version: 10.1.31-MariaDB
-- PHP Version: 7.2.3

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `production`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `id` int(11) NOT NULL,
  `user_name` varchar(50) NOT NULL,
  `password` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`id`, `user_name`, `password`) VALUES
(1, 'shajnin', '12345');

-- --------------------------------------------------------

--
-- Table structure for table `batch_info`
--

CREATE TABLE `batch_info` (
  `id` int(11) NOT NULL,
  `batch_no` varchar(50) NOT NULL,
  `gsm` varchar(50) NOT NULL,
  `size` varchar(50) NOT NULL,
  `color` varchar(50) NOT NULL,
  `collar` varchar(50) NOT NULL,
  `curf` varchar(50) NOT NULL,
  `merch_taken_date` varchar(50) NOT NULL,
  `deadline_date` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `batch_info`
--

INSERT INTO `batch_info` (`id`, `batch_no`, `gsm`, `size`, `color`, `collar`, `curf`, `merch_taken_date`, `deadline_date`) VALUES
(4, 'B300', 'Thin', 'S', 'Green', 'yes', 'yes', '2019-04-05', '2019-11-13');

-- --------------------------------------------------------

--
-- Table structure for table `fabric_info`
--

CREATE TABLE `fabric_info` (
  `id` int(11) NOT NULL,
  `batch_no` varchar(50) NOT NULL,
  `prepared_date` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `fabric_info`
--

INSERT INTO `fabric_info` (`id`, `batch_no`, `prepared_date`) VALUES
(13, 'B300', '27.03.2019'),
(14, 'B777', '27.03.2019'),
(15, 'B300', '27.03.2019');

-- --------------------------------------------------------

--
-- Table structure for table `garments_info`
--

CREATE TABLE `garments_info` (
  `id` int(11) NOT NULL,
  `batch_no` varchar(50) NOT NULL,
  `taken_date_fabric` varchar(50) NOT NULL,
  `prepared_Date` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `garments_info`
--

INSERT INTO `garments_info` (`id`, `batch_no`, `taken_date_fabric`, `prepared_Date`) VALUES
(4, 'B333', '5.2.2019', '4.5.2020'),
(6, 'B777', '5.2.2019', '4.5.2019');

-- --------------------------------------------------------

--
-- Table structure for table `user_feedback`
--

CREATE TABLE `user_feedback` (
  `id` int(11) NOT NULL,
  `batch_no` varchar(50) NOT NULL,
  `sending_date` varchar(50) NOT NULL,
  `feedback_date` varchar(50) NOT NULL,
  `rating` decimal(10,0) NOT NULL,
  `message` varchar(500) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `user_feedback`
--

INSERT INTO `user_feedback` (`id`, `batch_no`, `sending_date`, `feedback_date`, `rating`, `message`) VALUES
(11, 'B223', '2.3.2019', '4.3.2019', '6', 'Great');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `batch_info`
--
ALTER TABLE `batch_info`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `fabric_info`
--
ALTER TABLE `fabric_info`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `garments_info`
--
ALTER TABLE `garments_info`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `user_feedback`
--
ALTER TABLE `user_feedback`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `batch_info`
--
ALTER TABLE `batch_info`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `fabric_info`
--
ALTER TABLE `fabric_info`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- AUTO_INCREMENT for table `garments_info`
--
ALTER TABLE `garments_info`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `user_feedback`
--
ALTER TABLE `user_feedback`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
