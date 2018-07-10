-- phpMyAdmin SQL Dump
-- version 4.8.0.1
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: May 24, 2018 at 10:08 AM
-- Server version: 10.1.32-MariaDB
-- PHP Version: 7.2.5

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `mainshop`
--

-- --------------------------------------------------------

--
-- Table structure for table `shopmain`
--

CREATE TABLE `shopmain` (
  `Shop` varchar(20) NOT NULL,
  `ShopPassword` varchar(15) NOT NULL,
  `Access` tinyint(1) NOT NULL DEFAULT '1',
  `ShopEmail` varchar(20) NOT NULL,
  `ShopPhone` int(10) NOT NULL,
  `ShopAddress` varchar(100) DEFAULT NULL,
  `ShopRenewDate` date DEFAULT NULL,
  `PlanID` varchar(15) DEFAULT NULL,
  `ShopID` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `shopmain`
--

INSERT INTO `shopmain` (`Shop`, `ShopPassword`, `Access`, `ShopEmail`, `ShopPhone`, `ShopAddress`, `ShopRenewDate`, `PlanID`, `ShopID`) VALUES
('1', '1', 0, '1@gmai.com', 123, 'asd', NULL, NULL, 1),
('1', '1', 0, '1@gmail.com', 123, '', NULL, NULL, 2),
('2', '2', 0, '2@gmail.com', 999, '', NULL, NULL, 3),
('3', '3', 1, '3@gmail.com', 333, '', NULL, NULL, 4),
('4', '4', 1, '4@gmail.com', 444, '', NULL, NULL, 5),
('16', 'a', 1, '6@gmail.com', 6, '', NULL, NULL, 6),
('1', '5', 1, '3@gmail.com4', 2, '', NULL, NULL, 7),
('11', '1', 1, '1@gmail.com', 12, '', NULL, NULL, 8),
('1', '1', 1, '1@gmail.com', 12, '', NULL, NULL, 9),
('1', '1', 1, '1@gmail.com', 12, '', NULL, NULL, 10),
('1', '1', 1, '1@gmail.com', 12, '', NULL, NULL, 11),
('1', '1', 1, '1@gmail.com', 12, '', NULL, NULL, 12),
('12 3', '123', 1, '231@21.213', 123, '213', NULL, NULL, 13),
('12 3', '123', 1, '231@21.213', 123, '213', NULL, NULL, 14),
('1', '123', 1, '1@gmail.com', 12, '123', NULL, NULL, 15),
('1', '1', 1, '1@gmail.com', 12, '123', NULL, NULL, 16),
('abu', 'caskjcbn', 1, 'asbd@gmail.com', 0, 'askdjh', NULL, NULL, 17);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `shopmain`
--
ALTER TABLE `shopmain`
  ADD PRIMARY KEY (`ShopID`),
  ADD KEY `Shop` (`ShopID`) USING BTREE,
  ADD KEY `Shop_2` (`ShopID`) USING BTREE;
ALTER TABLE `shopmain` ADD FULLTEXT KEY `ShopAddress` (`ShopAddress`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `shopmain`
--
ALTER TABLE `shopmain`
  MODIFY `ShopID` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
