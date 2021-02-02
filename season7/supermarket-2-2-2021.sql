-- phpMyAdmin SQL Dump
-- version 4.9.3
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: Feb 02, 2021 at 02:23 PM
-- Server version: 10.3.27-MariaDB-0+deb10u1
-- PHP Version: 7.3.19-1~deb10u1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `supermarket`
--

-- --------------------------------------------------------

--
-- Table structure for table `account`
--

CREATE TABLE `account` (
  `tableid` int(50) NOT NULL,
  `accountname` varchar(50) NOT NULL,
  `amount` double(50,2) NOT NULL,
  `cashflow` varchar(50) NOT NULL,
  `accountdate` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `account`
--

INSERT INTO `account` (`tableid`, `accountname`, `amount`, `cashflow`, `accountdate`) VALUES
(11, 'book price', 106.00, 'out', '2021-01-28'),
(12, 'tetryb', 1230.00, 'in', '2023-01-29');

-- --------------------------------------------------------

--
-- Table structure for table `item`
--

CREATE TABLE `item` (
  `tableid` int(50) NOT NULL,
  `name` varchar(50) NOT NULL,
  `price` double(50,2) NOT NULL,
  `quan` int(50) NOT NULL,
  `exp-date` date NOT NULL,
  `barcode` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `item`
--

INSERT INTO `item` (`tableid`, `name`, `price`, `quan`, `exp-date`, `barcode`) VALUES
(5, 'pen', 12.00, 100, '2010-01-01', '978904245888'),
(6, 'perf', 13.00, 1000, '2022-12-10', '90');

-- --------------------------------------------------------

--
-- Table structure for table `itemprice`
--

CREATE TABLE `itemprice` (
  `tableid` int(50) NOT NULL,
  `productname` varchar(50) NOT NULL,
  `s-price` double(50,2) NOT NULL,
  `b-pirce` double(50,2) NOT NULL,
  `active` int(50) NOT NULL,
  `pricedate` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `itemprice`
--

INSERT INTO `itemprice` (`tableid`, `productname`, `s-price`, `b-pirce`, `active`, `pricedate`) VALUES
(8, 'pen', 50.00, 10.00, 1, '2021-01-31'),
(9, 'pencile', 50.00, 10.00, 1, '2021-01-31'),
(10, 'book', 20.00, 5.00, 1, '2021-01-31'),
(11, 'labtop', 2000.00, 900.00, 1, '2021-02-02'),
(12, 'pen', 40.00, 20.00, 1, '2021-02-02'),
(13, 'perf', 10000.00, 9000.00, 1, '2021-02-02');

-- --------------------------------------------------------

--
-- Table structure for table `itemsells`
--

CREATE TABLE `itemsells` (
  `tableid` int(50) NOT NULL,
  `barcode` varchar(50) NOT NULL,
  `quan` int(50) NOT NULL,
  `priceid` double(50,2) NOT NULL,
  `datasold` date NOT NULL,
  `orderno` int(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `itemsells`
--

INSERT INTO `itemsells` (`tableid`, `barcode`, `quan`, `priceid`, `datasold`, `orderno`) VALUES
(1, '978904245888', 1, 8.00, '2021-02-02', 1),
(2, '978904245888', 1, 8.00, '2021-02-02', 1),
(3, '978904245888', 1, 8.00, '2021-02-02', 1),
(4, '90', 20, 13.00, '2021-02-02', 1),
(5, '90', 20, 13.00, '2021-02-02', 1),
(6, '90', 20, 13.00, '2021-02-02', 1),
(7, '90', 20, 13.00, '2021-02-02', 1),
(8, '90', 20, 13.00, '2021-02-02', 1),
(9, '978904245888', 2, 8.00, '2021-02-02', 2);

-- --------------------------------------------------------

--
-- Table structure for table `itemsellstemp`
--

CREATE TABLE `itemsellstemp` (
  `tableid` int(50) NOT NULL,
  `barcode` varchar(50) NOT NULL,
  `quan` int(50) NOT NULL,
  `priceid` double(50,2) NOT NULL,
  `datasold` date NOT NULL,
  `orderno` int(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `itemsellstemp`
--

INSERT INTO `itemsellstemp` (`tableid`, `barcode`, `quan`, `priceid`, `datasold`, `orderno`) VALUES
(24, '978904245888', 2, 8.00, '2021-02-02', 2),
(25, '978904245888', 50, 8.00, '2021-02-02', 2),
(26, '978904245888', 100, 8.00, '2021-02-02', 2);

-- --------------------------------------------------------

--
-- Table structure for table `stuff`
--

CREATE TABLE `stuff` (
  `tableid` int(50) NOT NULL,
  `stuffname` varchar(25) NOT NULL,
  `stuffphone` varchar(15) NOT NULL,
  `stuffgender` int(1) NOT NULL,
  `stuffaddress` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `stuff`
--

INSERT INTO `stuff` (`tableid`, `stuffname`, `stuffphone`, `stuffgender`, `stuffaddress`) VALUES
(1, 'sam', '09123', 1, 'omdurman althwara alhara 8'),
(2, 'sam', '091239', 0, 'home'),
(3, 'li', '12323', 1, 'bahir'),
(4, 'razan', '890123123', 1, 'alhagosif'),
(5, 'name2', '123123', 1, 'home'),
(6, '', '', 1, ''),
(7, '', '', 1, ''),
(8, 'sam', '', 1, ''),
(9, 'sam', '0912390338', 1, ''),
(10, 'sam', '0912390338', 1, 'home'),
(11, 'uo', '890', 0, 'place'),
(12, 'sam', '0978', 0, 'asdasd'),
(13, 'examplename', '912313', 0, 'kala'),
(14, 'examplename', '912313', 0, 'kala'),
(15, 'loaction', '123123123', 1, 'omdur');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `account`
--
ALTER TABLE `account`
  ADD PRIMARY KEY (`tableid`);

--
-- Indexes for table `item`
--
ALTER TABLE `item`
  ADD PRIMARY KEY (`tableid`);

--
-- Indexes for table `itemprice`
--
ALTER TABLE `itemprice`
  ADD PRIMARY KEY (`tableid`);

--
-- Indexes for table `itemsells`
--
ALTER TABLE `itemsells`
  ADD PRIMARY KEY (`tableid`);

--
-- Indexes for table `itemsellstemp`
--
ALTER TABLE `itemsellstemp`
  ADD PRIMARY KEY (`tableid`);

--
-- Indexes for table `stuff`
--
ALTER TABLE `stuff`
  ADD PRIMARY KEY (`tableid`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `account`
--
ALTER TABLE `account`
  MODIFY `tableid` int(50) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT for table `item`
--
ALTER TABLE `item`
  MODIFY `tableid` int(50) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `itemprice`
--
ALTER TABLE `itemprice`
  MODIFY `tableid` int(50) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT for table `itemsells`
--
ALTER TABLE `itemsells`
  MODIFY `tableid` int(50) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `itemsellstemp`
--
ALTER TABLE `itemsellstemp`
  MODIFY `tableid` int(50) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=27;

--
-- AUTO_INCREMENT for table `stuff`
--
ALTER TABLE `stuff`
  MODIFY `tableid` int(50) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
