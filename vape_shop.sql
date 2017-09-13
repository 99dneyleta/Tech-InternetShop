-- phpMyAdmin SQL Dump
-- version 4.5.4.1deb2ubuntu2
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Sep 13, 2017 at 03:03 PM
-- Server version: 5.7.19-0ubuntu0.16.04.1
-- PHP Version: 7.0.22-0ubuntu0.16.04.1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `vape_shop`
--

-- --------------------------------------------------------

--
-- Table structure for table `atomizer`
--

CREATE TABLE `atomizer` (
  `id` int(10) NOT NULL,
  `brand_id` int(10) NOT NULL,
  `model` text NOT NULL,
  `type_id` int(10) NOT NULL,
  `country_id` int(10) NOT NULL,
  `color_id` int(10) NOT NULL,
  `material` text NOT NULL,
  `sizes` text NOT NULL,
  `connector` text NOT NULL,
  `description` text NOT NULL,
  `price` float NOT NULL,
  `photos` text NOT NULL,
  `count` int(3) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `atomizer_type`
--

CREATE TABLE `atomizer_type` (
  `id` int(10) NOT NULL,
  `type` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `atomizer_type`
--

INSERT INTO `atomizer_type` (`id`, `type`) VALUES
(1, 'RTA'),
(2, 'RDA'),
(3, 'RDTA');

-- --------------------------------------------------------

--
-- Table structure for table `brand`
--

CREATE TABLE `brand` (
  `id` int(10) NOT NULL,
  `brand` text NOT NULL,
  `country_id` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `color`
--

CREATE TABLE `color` (
  `id` int(10) NOT NULL,
  `color` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `color`
--

INSERT INTO `color` (`id`, `color`) VALUES
(1, 'black'),
(2, 'white'),
(3, 'red'),
(4, 'orange'),
(5, 'yellow'),
(6, 'green'),
(7, 'light green'),
(8, 'dark green'),
(9, 'blue'),
(10, 'light blue'),
(11, 'dark blue'),
(12, 'violet'),
(13, 'gray'),
(14, 'multicolored'),
(15, 'without painting'),
(16, 'light gray'),
(17, 'dark gray'),
(18, 'pink'),
(19, 'brown');

-- --------------------------------------------------------

--
-- Table structure for table `country`
--

CREATE TABLE `country` (
  `id` int(10) NOT NULL,
  `country` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `country`
--

INSERT INTO `country` (`id`, `country`) VALUES
(1, 'USA'),
(2, 'Ukraine'),
(3, 'Russia'),
(4, 'China'),
(5, 'France'),
(6, 'Germany'),
(7, 'Canada'),
(8, 'Japan');

-- --------------------------------------------------------

--
-- Table structure for table `e_liquid`
--

CREATE TABLE `e_liquid` (
  `id` int(10) NOT NULL,
  `brand_id` text NOT NULL,
  `name` text NOT NULL,
  `type_id` int(10) NOT NULL,
  `country_id` int(10) NOT NULL,
  `taste` text NOT NULL,
  `volume` int(4) NOT NULL,
  `vg` int(2) NOT NULL,
  `pg` int(2) NOT NULL,
  `nicotine` int(2) NOT NULL,
  `description` text NOT NULL,
  `price` float NOT NULL,
  `photos` text NOT NULL,
  `count` int(3) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `e_liquid_type`
--

CREATE TABLE `e_liquid_type` (
  `id` int(10) NOT NULL,
  `type` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `e_liquid_type`
--

INSERT INTO `e_liquid_type` (`id`, `type`) VALUES
(1, 'premium'),
(2, 'normal'),
(3, 'pat');

-- --------------------------------------------------------

--
-- Table structure for table `mod`
--

CREATE TABLE `mod` (
  `id` int(10) NOT NULL,
  `brand_id` int(10) NOT NULL,
  `model` text NOT NULL,
  `type_id` int(11) NOT NULL,
  `country_id` int(10) NOT NULL,
  `color_id` int(10) NOT NULL,
  `material` text NOT NULL,
  `power` int(4) NOT NULL,
  `capacity` int(5) NOT NULL,
  `sizes` text NOT NULL,
  `connector` text NOT NULL,
  `description` text NOT NULL,
  `price` float NOT NULL,
  `photos` text NOT NULL,
  `count` int(3) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `mod_type`
--

CREATE TABLE `mod_type` (
  `id` int(10) NOT NULL,
  `type` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `mod_type`
--

INSERT INTO `mod_type` (`id`, `type`) VALUES
(1, 'box'),
(2, 'mech');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `atomizer`
--
ALTER TABLE `atomizer`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `atomizer_type`
--
ALTER TABLE `atomizer_type`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `brand`
--
ALTER TABLE `brand`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `color`
--
ALTER TABLE `color`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `country`
--
ALTER TABLE `country`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `e_liquid`
--
ALTER TABLE `e_liquid`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `e_liquid_type`
--
ALTER TABLE `e_liquid_type`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `mod`
--
ALTER TABLE `mod`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `mod_type`
--
ALTER TABLE `mod_type`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `atomizer`
--
ALTER TABLE `atomizer`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `atomizer_type`
--
ALTER TABLE `atomizer_type`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT for table `brand`
--
ALTER TABLE `brand`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `color`
--
ALTER TABLE `color`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=20;
--
-- AUTO_INCREMENT for table `country`
--
ALTER TABLE `country`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;
--
-- AUTO_INCREMENT for table `e_liquid`
--
ALTER TABLE `e_liquid`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `e_liquid_type`
--
ALTER TABLE `e_liquid_type`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT for table `mod`
--
ALTER TABLE `mod`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `mod_type`
--
ALTER TABLE `mod_type`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
