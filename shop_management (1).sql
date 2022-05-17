-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: May 07, 2022 at 03:33 PM
-- Server version: 10.4.22-MariaDB
-- PHP Version: 7.4.27

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `shop_management`
--

-- --------------------------------------------------------

--
-- Table structure for table `items`
--

CREATE TABLE `items` (
  `id` int(11) NOT NULL,
  `name` varchar(20) NOT NULL,
  `cp` decimal(10,2) DEFAULT NULL,
  `sp` decimal(10,2) DEFAULT NULL,
  `quantity` int(11) DEFAULT NULL,
  `user_id` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `items`
--

INSERT INTO `items` (`id`, `name`, `cp`, `sp`, `quantity`, `user_id`) VALUES
(1, 'dal', '102.50', '110.00', 40, 4),
(3, 'chamal', '40.00', '50.00', 730, 1),
(4, 'coffee', '500.00', '550.00', 93, 2),
(6, 'dal', '100.00', '105.00', 485, 1);

-- --------------------------------------------------------

--
-- Table structure for table `pl`
--

CREATE TABLE `pl` (
  `datee` date DEFAULT NULL,
  `name` varchar(20) DEFAULT NULL,
  `quantity` int(11) DEFAULT NULL,
  `pl` decimal(10,2) DEFAULT NULL,
  `user_id` int(11) DEFAULT NULL,
  `salesAmt` decimal(10,2) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `pl`
--

INSERT INTO `pl` (`datee`, `name`, `quantity`, `pl`, `user_id`, `salesAmt`) VALUES
('2022-03-18', 'coffee', 2, '100.00', 2, '5000.00'),
('2022-03-22', 'dal', 50, '375.00', 1, '5000.00'),
('2022-03-20', 'coffee', 5, '250.00', 1, '5000.00'),
('2022-03-20', 'coffee', 10, '0.00', 1, '5000.00'),
('2022-03-20', 'coffee', 10, '0.00', 1, '5000.00'),
('2022-03-20', 'coffee', 10, '0.00', 1, '5000.00'),
('2022-03-21', 'chamal', 10, '100.00', 1, '5000.00'),
('2022-03-22', 'dal', 5, '25.00', 1, '5000.00'),
('2022-03-22', 'dal', 10, '50.00', 1, '5000.00'),
('2022-03-19', 'chamal', 20, '200.00', 1, '5000.00'),
('2022-04-07', 'chamal', 10, '100.00', 1, '500.00');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `id` int(11) NOT NULL,
  `name` varchar(15) DEFAULT NULL,
  `company` varchar(20) DEFAULT NULL,
  `password` varchar(100) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`id`, `name`, `company`, `password`) VALUES
(1, 'rejens', 'rejens', '$2y$10$ysTRaHoHnlh5XQYULgZ9/eIAb2FUn9Lw4/j1EygR8OqenXnO917.q'),
(2, 'achyut', 'achyut', '$2y$10$n1yC4jJvyHFlWuwilTidyudEY/zh19DE2Bms1/sDKxhY7JvSkvMgO'),
(3, 'dipesh', 'dipesh', '$2y$10$b4WqNK9E6LBAhzFbSslFi.RsuARagP9Fj2yP4TQl5JM6AJ6/1jHwe'),
(4, 'baba', 'baba', '$2y$10$U8MNHGc/wtYnU8aSEth7peX1GkSLC4iXp85vZvfHPBKAQMfzrV5Ua'),
(6, 'ram', 'ram', '$2y$10$uLuJhuUghXYXEaZC7w6sWeEhAAPA7/cdFqURXtwoZUR3U9uteXc.y'),
(11, 'rojal', 'rojal', '$2y$10$YL.iLyda7Z6it2GBzrPMo.uEMLL3NZqPB8tFkvrcigHZHT3CY4M7O'),
(12, 'sanam', 'sanam', '$2y$10$Y0EKUXa33YmF4.BdnmXQj.HOlwJXzAAD/fYYz0nXBwDoe2Jm4TPOK'),
(13, 'sanam', 'sanam', '$2y$10$V1eNt927i24wFMy8GKRsuOMLfPq5FU236QGrV910BAGYKPgMApnDe');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `items`
--
ALTER TABLE `items`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `items`
--
ALTER TABLE `items`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=20;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
