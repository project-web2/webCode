-- phpMyAdmin SQL Dump
-- version 4.9.3
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: Oct 27, 2020 at 06:20 PM
-- Server version: 5.7.26
-- PHP Version: 7.4.2

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `CPUBER`
--

-- --------------------------------------------------------

--
-- Table structure for table `customer`
--

CREATE TABLE `customer` (
  `Cid` int(11) NOT NULL,
  `username` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `address` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `customer`
--

INSERT INTO `customer` (`Cid`, `username`, `password`, `name`, `email`, `address`) VALUES
(12, 'saraA', '$2y$12$i3UIEB1RckRFzCIAUFLnyuRucCxDadgRJuXkvHE6Cr1cwl5xwBwoq', 'sara', 'sara@test.com', 'ibn arslan'),
(19, 'lama', '$2y$12$yBAXKUczF1CU9aDSQcHs4.XPPkaeVoLih0a04h6z/Q7GFJRzjmmte', 'lama', 'lama@test.com', 'ibn arslan');

-- --------------------------------------------------------

--
-- Table structure for table `Rate`
--

CREATE TABLE `Rate` (
  `Rate_id` int(11) NOT NULL,
  `Professional` int(11) NOT NULL,
  `fixed` int(11) NOT NULL,
  `Satisfi` int(11) NOT NULL,
  `Tech_ID` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `request`
--

CREATE TABLE `request` (
  `Rid` int(11) NOT NULL,
  `time` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `device_type` varchar(255) NOT NULL,
  `description` varchar(255) NOT NULL,
  `price` varchar(255) NOT NULL,
  `customer_id` int(11) NOT NULL,
  `technician_id` int(11) DEFAULT NULL,
  `Rate_id` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `request`
--

INSERT INTO `request` (`Rid`, `time`, `device_type`, `description`, `price`, `customer_id`, `technician_id`, `Rate_id`) VALUES
(1, '2020-10-25 14:14:33', 'ios', 'sssssss', '122', 12, NULL, NULL),
(2, '2020-10-25 15:41:50', 'ios', 'dddd', '111', 19, 1, NULL),
(3, '2020-10-25 17:14:07', 'ioss', 'ddddddddddd', '100', 12, 1, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `technician`
--

CREATE TABLE `technician` (
  `Tid` int(11) NOT NULL,
  `username` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `address` varchar(255) NOT NULL,
  `speciality` varchar(255) NOT NULL,
  `phone` varchar(255) NOT NULL,
  `YOE` int(11) NOT NULL,
  `bio` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `technician`
--

INSERT INTO `technician` (`Tid`, `username`, `password`, `name`, `email`, `address`, `speciality`, `phone`, `YOE`, `bio`) VALUES
(1, 'hind', '$2y$12$Ri43iNhzbY/83BX8gbnT8O4XorjjlVsb23o.zTNRRhGoD4eNo8Jsu', 'hind', 'hind@test.com', 'alhamra', 'iOS', '0500342556', 2, 'Bio'),
(2, 'rahaf', '$2y$12$syHEp4yF6TE.x3ivUNOlN.FWwA.6gGVPPquwkKwqZ68tV6THSEvmC', 'hind', 'test@gmail.com', 'ibn arslan', 'Windows 10', '0582136994', 1, 'Bio rrrrrr'),
(3, 'saraAE', '$2y$12$49H5fFrSZ/XuKRA1/PBnJuF7v6SFbtGXAGhEXfnqYvpimQm.QA58S', 'hind', 'test@gmail.com', 'ibn arslan', 'MacOS', '0582136994', 5, 'Bio'),
(4, 'sssara', '$2y$12$z4gnUOKl.KtCGm8YNNbYy.7SMxmR2XwTiMxLSUb6tS08kUUARhUk.', 'hind', 'nouf@test.com', 'ibn arslan', 'Android', '0582136994', 4, 'Bio'),
(5, 'reema', '$2y$12$4UEmhOPcrC6UBDv7fafZtu19BVXRllTs2nZwaVNt9cGqIOGo6ZKyK', 'reema', 'reema@test.com', 'ibn arslan', 'Windows 10', '0582136994', 4, 'Bio no bio'),
(6, 'sara3', '$2y$12$sWjo/4K4On.OfnQ5Xgc7oOWiy/x8DUDrlDEzSg9A9MGM4lLNj2Vk2', 'sara', 'sara@gmail.com', 'ibn arslan', 'Android', '0582136994', 3, 'Bio sara3'),
(7, 'ghada', '$2y$12$CECkme4xllinX9dyOtOf8Opa1rG8KwNXOBygjwTljpPCJEojggyfi', 'ghada', 'ghada@test.com', 'ibn arslan', 'ipadOS', '0500846572', 5, 'nothing'),
(8, 'rama', '$2y$12$xBnhDKc7002f/B2c9iTZROOjB0T03cmA10/VmKUM6dzsUhAIjI4GS', 'rama', 'rama@test', 'ibn arslan', 'Windows 10', '0594832715', 1, 'nothing'),
(9, 'tt', '$2y$12$8QJsqF2/.jROBsT/bjl.reQSGe59Qj6IS0uc8IbusTOkKO.exh1AO', 'tt', 'tt@tt.com', 'ibn arslan', 'MacOS', '0582136994', 1, 'Bio'),
(10, 'moh', '$2y$12$Io/Cmql8mncvi6Lq4btIsepaXQ4Zh4Px9XBaS5fP2eXD7/WdBb3n6', 'moh', 'moh@test.com', 'ibn arslan', 'Android', '0582136994', 9, 'Bio...'),
(11, 'tech', '$2y$12$LE2KbU8QM2fdqftVvCV5.evfwwMlAo6T678rs8tM.0WZWdlgis0a.', 'tech', 'tech@gmail.com', 'ibn arslan', 'ipadOS', '0582136994', 11, 'Bio'),
(12, 'ee', '$2y$12$NCGyDkM76h5MHkQOCrSmReQpAVVJFXxt/AoSeS3z2iT2m7WQbprcq', 'ee', 'tech@gmail.com', 'ibn arslan', 'MacOS', '0582136994', 2, 'Bio');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `customer`
--
ALTER TABLE `customer`
  ADD PRIMARY KEY (`Cid`) USING BTREE;

--
-- Indexes for table `Rate`
--
ALTER TABLE `Rate`
  ADD PRIMARY KEY (`Rate_id`),
  ADD KEY `Tech_ID` (`Tech_ID`) USING BTREE;

--
-- Indexes for table `request`
--
ALTER TABLE `request`
  ADD PRIMARY KEY (`Rid`) USING BTREE,
  ADD KEY `Rate_id` (`Rate_id`),
  ADD KEY `technician_id` (`technician_id`) USING BTREE,
  ADD KEY `customer_id` (`customer_id`) USING BTREE;

--
-- Indexes for table `technician`
--
ALTER TABLE `technician`
  ADD PRIMARY KEY (`Tid`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `customer`
--
ALTER TABLE `customer`
  MODIFY `Cid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=31;

--
-- AUTO_INCREMENT for table `request`
--
ALTER TABLE `request`
  MODIFY `Rid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `technician`
--
ALTER TABLE `technician`
  MODIFY `Tid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `Rate`
--
ALTER TABLE `Rate`
  ADD CONSTRAINT `rate_ibfk_1` FOREIGN KEY (`Tech_ID`) REFERENCES `technician` (`Tid`);

--
-- Constraints for table `request`
--
ALTER TABLE `request`
  ADD CONSTRAINT `customer_request` FOREIGN KEY (`customer_id`) REFERENCES `customer` (`Cid`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `request_ibfk_1` FOREIGN KEY (`Rate_id`) REFERENCES `Rate` (`Rate_id`),
  ADD CONSTRAINT `technician_request` FOREIGN KEY (`technician_id`) REFERENCES `technician` (`Tid`);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
