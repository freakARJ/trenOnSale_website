-- phpMyAdmin SQL Dump
-- version 5.1.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Apr 06, 2021 at 05:01 AM
-- Server version: 10.4.18-MariaDB
-- PHP Version: 7.3.27

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `tos`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `ID` int(11) NOT NULL,
  `admin_username` varchar(200) DEFAULT NULL,
  `admin_password` varchar(200) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`ID`, `admin_username`, `admin_password`) VALUES
(1, 'admin', '1234');

-- --------------------------------------------------------

--
-- Table structure for table `customqr`
--

CREATE TABLE `customqr` (
  `id` int(255) NOT NULL,
  `user` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `mobile` varchar(255) NOT NULL,
  `comment` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `customqr`
--

INSERT INTO `customqr` (`id`, `user`, `email`, `mobile`, `comment`) VALUES
(1, 'jawad', 'jawad@gmail.com', '0178888', 'heloo'),
(2, 'jawad', 'jawad@gmail.com', '0178888', 'heloo'),
(3, 'jawad', 'jawad@gmail.com', '0178888', 'heloo'),
(4, 'jawad', 'jawad@gmail.com', '0178888', 'heloo'),
(5, '', '', '', '');

-- --------------------------------------------------------

--
-- Table structure for table `product`
--

CREATE TABLE `product` (
  `pcode` int(20) NOT NULL,
  `pname` varchar(50) NOT NULL,
  `pimg` varchar(20) NOT NULL,
  `pprice` decimal(10,0) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `product`
--

INSERT INTO `product` (`pcode`, `pname`, `pimg`, `pprice`) VALUES
(1, 'Good Things', 'p1.jpg', '30'),
(2, 'Street Racer', 'p2.png', '40'),
(3, 'Second Pace', 'p3.jpg', '40'),
(4, 'Drift', 'p4.jpg', '40'),
(5, 'Pocket Rocket', 'p5.jpg', '35'),
(6, 'The Journey', 'p6.jpg', '30'),
(7, 'Travel', 'p7.jpg', '25'),
(8, 'Tron', 'p8.jpg', '35'),
(9, 'Twist', 'p9.jpg', '25'),
(10, 'Injury', 'p10.jpg', '30');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `user_id` int(11) NOT NULL,
  `user_firstName` varchar(200) NOT NULL,
  `user_lastName` varchar(200) NOT NULL,
  `user_sex` varchar(200) NOT NULL,
  `user_email` varchar(200) NOT NULL,
  `user_phone` varchar(200) NOT NULL,
  `user_address` varchar(200) NOT NULL,
  `user_username` varchar(200) NOT NULL,
  `user_pass` varchar(200) NOT NULL,
  `joiningTimeAndDate` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`user_id`, `user_firstName`, `user_lastName`, `user_sex`, `user_email`, `user_phone`, `user_address`, `user_username`, `user_pass`, `joiningTimeAndDate`) VALUES
(1, 'Jawad', 'jawad', 'male', 'jawad@gmail.com', 'jawad', 'jawad', 'jawad', 'b4da655a32a0316c91fe1fd755e5f0e2', '2021-04-05 13:06:19'),
(2, 'Jawad', 'jawad', 'male', 'jawad@gmail.com', 'jawad', 'jawad', 'jawad', 'b4da655a32a0316c91fe1fd755e5f0e2', '2021-04-05 13:08:59'),
(4, 'Jawad', 'jawad', 'male', 'jawad@gmail.com', 'jawad', 'jawad', 'jawad', '149815eb972b3c370dee3b89d645ae14', '2021-04-05 13:52:01'),
(8, 'qwer', 'tyu', 'male', 'qwert@gmil.com', '01783031152', 'cxb', 'qwer', '962012d09b8170d912f0669f6d7d9d07', '2021-04-06 02:30:08');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`ID`);

--
-- Indexes for table `customqr`
--
ALTER TABLE `customqr`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`user_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `customqr`
--
ALTER TABLE `customqr`
  MODIFY `id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `user_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
