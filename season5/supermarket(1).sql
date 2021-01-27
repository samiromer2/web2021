-- phpMyAdmin SQL Dump
-- version 4.9.3
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: Jan 25, 2021 at 02:59 PM
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
(1, 'tea', 20.00, 'out', '2021-01-12'),
(2, 'tea', 20.00, 'out', '2021-01-12'),
(4, 'testcash', 1000.00, 'in', '2021-11-26'),
(5, 'testcash', 1000.00, 'in', '2021-11-26'),
(6, 'testwhynot3', 90.00, 'out', '2021-01-28');

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
(11, 'uo', '890', 0, 'place');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `account`
--
ALTER TABLE `account`
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
  MODIFY `tableid` int(50) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `stuff`
--
ALTER TABLE `stuff`
  MODIFY `tableid` int(50) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
