-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Oct 14, 2017 at 12:12 PM
-- Server version: 10.1.13-MariaDB
-- PHP Version: 7.0.5

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `dw_00159132`
--

-- --------------------------------------------------------

--
-- Table structure for table `manage_booking`
--

CREATE TABLE `manage_booking` (
  `id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `package_id` int(11) NOT NULL,
  `booking_time` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `manage_booking`
--

INSERT INTO `manage_booking` (`id`, `user_id`, `package_id`, `booking_time`) VALUES
(1, 1, 2, '2017-10-14 11:55:19am'),
(2, 1, 2, '2017-10-14 11:55:19am'),
(3, 1, 2, '2017-10-14 11:57:49am'),
(4, 1, 2, '2017-10-14 11:57:49am'),
(5, 1, 2, '2017-10-14 12:00:46pm'),
(6, 1, 1, '2017-10-14 12:03:01pm');

-- --------------------------------------------------------

--
-- Table structure for table `packages`
--

CREATE TABLE `packages` (
  `id` int(11) NOT NULL,
  `cabin_type` varchar(20) NOT NULL,
  `num_of_adult` int(5) NOT NULL,
  `num_of_children` int(11) NOT NULL,
  `start_date` varchar(20) NOT NULL,
  `end_date` varchar(20) NOT NULL,
  `package_period` varchar(20) NOT NULL,
  `package_price` float(12,2) NOT NULL,
  `package_description` text NOT NULL,
  `image` varchar(200) NOT NULL,
  `home_page_item` tinyint(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `packages`
--

INSERT INTO `packages` (`id`, `cabin_type`, `num_of_adult`, `num_of_children`, `start_date`, `end_date`, `package_period`, `package_price`, `package_description`, `image`, `home_page_item`) VALUES
(1, 'Luxury', 2, 2, '11/11/11', '12/12/12', '4 Days', 10000.00, 'ami nai to.its done after 2 hour', '../Asset/Images/Afa thamen.jpg', 0),
(2, 'Contemporary', 3, 4, '10/12/2017', '14/12/2017', '4 Days', 12000.00, 'its really dificult', '../Asset/Images/Capture.jpg', 1),
(3, 'Original', 2, 3, '13/10/2017', '17/10/2017', '4 Days', 5000.00, 'it is a great refreshment', '../Asset/Images/avon-4m-x-3m-lincoln-log-cabin-485.jpg', 1),
(4, 'Luxury', 4, 4, '25/12/2017', '30/12/2017', '5 Days', 1000.00, 'its a super luxuray cottage of 4 day and 8 members packk', '../Asset/Images/log-cabin-designs15.jpg', 1),
(5, 'Contemporary', 2, 2, '12/12/12', '13/13/13', '4 Days', 300.00, 'it is demo', '../Asset/Images/IMG-20170120-WA0015.jpg', 1),
(6, 'Luxury', 2, 2, '11/11/11', '12/12/12', '4 Days', 10000.00, 'amar sonar bangla', '../Asset/Images/download.jpg', 1),
(7, 'Luxury', 2, 2, '11/11/11', '12/12/12', '4 Days', 10000.00, 'ami nai', '../Asset/Images/Affa serum sundor.jpg', 1);

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `name` varchar(70) NOT NULL,
  `email` varchar(70) NOT NULL,
  `number` varchar(14) NOT NULL,
  `address` text NOT NULL,
  `pass` varchar(100) NOT NULL,
  `gender` varchar(10) NOT NULL,
  `role` tinyint(1) NOT NULL DEFAULT '1'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `number`, `address`, `pass`, `gender`, `role`) VALUES
(1, 'hawa', 'hawa9002@gmail.com', '01868448900', 'chandpur', '123', 'female', 1),
(2, 'mim', 'mim@gmail.com', '01672931632', 'america', '123', 'male', 0),
(3, 'liyal', 'liyal@gmail.com', '123456', 'quait', '123', 'female', 1);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `manage_booking`
--
ALTER TABLE `manage_booking`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `packages`
--
ALTER TABLE `packages`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `manage_booking`
--
ALTER TABLE `manage_booking`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
--
-- AUTO_INCREMENT for table `packages`
--
ALTER TABLE `packages`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;
--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
