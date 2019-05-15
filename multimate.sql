-- phpMyAdmin SQL Dump
-- version 4.6.6deb5
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: May 15, 2019 at 10:32 PM
-- Server version: 5.7.26-0ubuntu0.18.04.1
-- PHP Version: 7.2.17-1+ubuntu18.04.1+deb.sury.org+3

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `multimate`
--

-- --------------------------------------------------------

--
-- Table structure for table `category`
--

CREATE TABLE `category` (
  `category_id` int(11) NOT NULL,
  `category_name` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `category`
--

INSERT INTO `category` (`category_id`, `category_name`) VALUES
(1, 'Light'),
(2, 'Grips'),
(3, 'Camera'),
(4, 'Screens');

-- --------------------------------------------------------

--
-- Table structure for table `login_data`
--

CREATE TABLE `login_data` (
  `login_id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `username` varchar(25) NOT NULL,
  `password` varchar(64) NOT NULL,
  `user_type` varchar(15) NOT NULL DEFAULT 'USER'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `login_data`
--

INSERT INTO `login_data` (`login_id`, `user_id`, `username`, `password`, `user_type`) VALUES
(1, 1, 'admin', '$2y$10$5ezaHmawMpw5XQKm8i8QtObFh.oeYr7WmBpY27K/efnYPoUHAZXg.', 'ADMIN');

-- --------------------------------------------------------

--
-- Table structure for table `picture_table`
--

CREATE TABLE `picture_table` (
  `image_id` int(100) NOT NULL,
  `pid` int(100) NOT NULL,
  `i_name` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `product_0117`
--

CREATE TABLE `product_0117` (
  `pid` int(100) NOT NULL,
  `pname` varchar(100) NOT NULL,
  `p_type` int(11) NOT NULL,
  `discription` longtext NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `product_0117`
--

INSERT INTO `product_0117` (`pid`, `pname`, `p_type`, `discription`) VALUES
(1, 'digital cameras', 2, 'this is digital camera'),
(5, 'red light', 1, 'this light glow red'),
(7, 'sofa', 1, 'out of context product');

-- --------------------------------------------------------

--
-- Table structure for table `product_image`
--

CREATE TABLE `product_image` (
  `image_id` int(11) NOT NULL,
  `pid` int(11) NOT NULL,
  `image_name` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `product_image`
--

INSERT INTO `product_image` (`image_id`, `pid`, `image_name`) VALUES
(1, 7, 'proxy.duckduckgo.com.jpeg'),
(2, 7, 'existing-network.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `user_117`
--

CREATE TABLE `user_117` (
  `cid` int(100) NOT NULL,
  `fname` varchar(30) NOT NULL,
  `lname` varchar(30) NOT NULL,
  `ph` varchar(100) NOT NULL,
  `gender` varchar(5) NOT NULL,
  `dob` varchar(30) NOT NULL,
  `address` varchar(100) NOT NULL,
  `pp_name` varchar(100) NOT NULL,
  `frequency` int(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `user_117`
--

INSERT INTO `user_117` (`cid`, `fname`, `lname`, `ph`, `gender`, `dob`, `address`, `pp_name`, `frequency`) VALUES
(1, 'admin', 'admin', 'admin', 'admin', 'admin', 'admin', 'admin', 0);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `category`
--
ALTER TABLE `category`
  ADD PRIMARY KEY (`category_id`);

--
-- Indexes for table `login_data`
--
ALTER TABLE `login_data`
  ADD PRIMARY KEY (`login_id`),
  ADD KEY `user_id` (`user_id`);

--
-- Indexes for table `picture_table`
--
ALTER TABLE `picture_table`
  ADD PRIMARY KEY (`image_id`);

--
-- Indexes for table `product_0117`
--
ALTER TABLE `product_0117`
  ADD PRIMARY KEY (`pid`),
  ADD KEY `p_type` (`p_type`);

--
-- Indexes for table `product_image`
--
ALTER TABLE `product_image`
  ADD PRIMARY KEY (`image_id`),
  ADD KEY `pid` (`pid`);

--
-- Indexes for table `user_117`
--
ALTER TABLE `user_117`
  ADD PRIMARY KEY (`cid`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `category`
--
ALTER TABLE `category`
  MODIFY `category_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
--
-- AUTO_INCREMENT for table `login_data`
--
ALTER TABLE `login_data`
  MODIFY `login_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `picture_table`
--
ALTER TABLE `picture_table`
  MODIFY `image_id` int(100) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `product_0117`
--
ALTER TABLE `product_0117`
  MODIFY `pid` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;
--
-- AUTO_INCREMENT for table `product_image`
--
ALTER TABLE `product_image`
  MODIFY `image_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT for table `user_117`
--
ALTER TABLE `user_117`
  MODIFY `cid` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- Constraints for dumped tables
--

--
-- Constraints for table `login_data`
--
ALTER TABLE `login_data`
  ADD CONSTRAINT `login_data_ibfk_1` FOREIGN KEY (`user_id`) REFERENCES `user_117` (`cid`);

--
-- Constraints for table `product_0117`
--
ALTER TABLE `product_0117`
  ADD CONSTRAINT `product_0117_ibfk_1` FOREIGN KEY (`p_type`) REFERENCES `category` (`category_id`);

--
-- Constraints for table `product_image`
--
ALTER TABLE `product_image`
  ADD CONSTRAINT `product_image_ibfk_1` FOREIGN KEY (`pid`) REFERENCES `product_0117` (`pid`);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
