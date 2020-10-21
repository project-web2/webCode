-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Generation Time: Oct 20, 2020 at 10:36 AM
-- Server version: 5.7.28
-- PHP Version: 7.2.30

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `cpuber`
--

-- --------------------------------------------------------

--
-- Table structure for table `customer`
--

DROP TABLE IF EXISTS `customer`;
CREATE TABLE IF NOT EXISTS `customer` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `username` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `address` varchar(255) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=10 DEFAULT CHARSET=utf8;

--
-- Dumping data for table `customer`
--

INSERT INTO `customer` (`id`, `username`, `password`, `name`, `email`, `address`) VALUES
(6, 'admin', '20a830e2f7558d54d6d7dafd9429e40937061e8d', 'ww', 'walid.azouzi@aa.edu.sa', 'Jarir street abi dar el roumi'),
(7, 'admin', '91aecd6468fce74c11e0db6335814f451ade2053', 'ww', 'walid.azouzi@aa.edu.sa', 'Jarir street abi dar el roumi'),
(8, 'customer1', '$2y$12$5HLozV6XVwOQ.QIessC6h.4GwED3i2C7BWuq2sPU9WwyZg11hZ3AG', 'ww', 'walid.azouzi@aa.edu.sa', 'aaa@aa.aa'),
(9, 'customer12', '$2y$12$BIHAqiYzPvDheuvbhJ63VOz5uLz0coa/WCV2ZIEDt8TTtRULcLNSq', 'customer12', 'admin@admin.com', 'Jarir street abi dar el roumi');

-- --------------------------------------------------------

--
-- Table structure for table `request`
--

DROP TABLE IF EXISTS `request`;
CREATE TABLE IF NOT EXISTS `request` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `time` timestamp NOT NULL,
  `device_type` varchar(255) NOT NULL,
  `description` varchar(255) NOT NULL,
  `price` varchar(255) NOT NULL,
  `rating` varchar(255) NOT NULL,
  `customer_id` int(11) NOT NULL,
  `technician_id` int(11) NOT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `customer_id` (`customer_id`) USING BTREE,
  KEY `technician_request` (`technician_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `technician`
--

DROP TABLE IF EXISTS `technician`;
CREATE TABLE IF NOT EXISTS `technician` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `username` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `address` varchar(255) NOT NULL,
  `speciality` varchar(255) NOT NULL,
  `phone` varchar(255) NOT NULL,
  `quantity` int(11) NOT NULL,
  `bio` varchar(255) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=utf8;

--
-- Dumping data for table `technician`
--

INSERT INTO `technician` (`id`, `username`, `password`, `name`, `email`, `address`, `speciality`, `phone`, `quantity`, `bio`) VALUES
(3, 'admin', '$2y$12$5tIjZq7ZhnuNdBvoeKg19eT55LbVWDhy1S/v9SlkU8nyP5xsvg8Uy', 'aaa', 'walid.azouzi@aa.edu.sa', 'Jarir street abi dar el roumi', 'MacOS', '0508085456', 12, 'Bio'),
(4, 'tech01', '$2y$12$wvzaQogeRpSiwyaa3CPOS.nkoyqcFmF4AB9X6IGFLMP06.6g3r212', 'ww', 'aa@qq.22', 'Jarir street abi dar el roumi', 'MacOS', '0508085456', 12, 'Bio');

--
-- Constraints for dumped tables
--

--
-- Constraints for table `request`
--
ALTER TABLE `request`
  ADD CONSTRAINT `customer_request` FOREIGN KEY (`customer_id`) REFERENCES `customer` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `technician_request` FOREIGN KEY (`technician_id`) REFERENCES `technician` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
