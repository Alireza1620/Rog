-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: Dec 14, 2022 at 05:29 PM
-- Server version: 10.4.27-MariaDB
-- PHP Version: 8.1.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `21159504`
--

-- --------------------------------------------------------

--
-- Table structure for table `admino`
--

CREATE TABLE `admino` (
  `UID` int(11) NOT NULL,
  `FNAME` text NOT NULL,
  `LNAME` text NOT NULL,
  `UNAME` text NOT NULL,
  `EMAIL` text NOT NULL,
  `PASSWD` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `admino`
--

INSERT INTO `admino` (`UID`, `FNAME`, `LNAME`, `UNAME`, `EMAIL`, `PASSWD`) VALUES
(1, 'ALI', 'REZA', 'ALIREZA', 'ALIREZA1620@ADMIN.COM', '123456');

-- --------------------------------------------------------

--
-- Table structure for table `devices`
--

CREATE TABLE `devices` (
  `MODEL` text NOT NULL,
  `BRAND` text NOT NULL,
  `CPU` text NOT NULL,
  `GPU` text NOT NULL,
  `DPRICE` float NOT NULL,
  `DID` int(11) NOT NULL,
  `IMG` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `devices`
--

INSERT INTO `devices` (`MODEL`, `BRAND`, `CPU`, `GPU`, `DPRICE`, `DID`, `IMG`) VALUES
('ROG FLOW X 13', 'FLOW', 'ADM RYZEN 9', 'RTX 3050 Ti', 1249.99, 1111, './img/blog/11.jpeg'),
('ROG FLOW X 16', 'FLOW', 'AMD RYZEN 9', 'RTX 3070 Ti', 0, 1122, './img/blog/12.png'),
('ROG FLOW Z 13', 'FLOW', 'INTEL CORE I9', 'RTX 3050 Ti', 2399.99, 1133, './img/blog/13.png'),
('ROG ZEPHYRUS DUO 16', 'ZEPHYRUS', 'AMD RYZEN 9', 'RTX 3080 Ti', 3899.99, 2211, './img/blog/21.jpeg'),
('ROG ZEPHYRUS M16', 'ZEPHYRUS', 'INTEL CORE I9', 'RTX 3080 Ti', 3099.99, 2222, './img/blog/22.jpeg'),
('ROG ZEPHYRUS G14', 'ZEPHYRUS', 'AMD RYZEN 9', 'AMD RADEON RX 6800S', 1899.99, 2233, './img/blog/23.png'),
('ROG STRIX SCAR 17 SE', 'STRIX', 'INTEL CORE I9', 'RTX 3080 Ti', 0, 3311, './img/blog/31.png'),
('ROG STRIX G15', 'STRIX', 'AMD RYZEN 9', 'AMD RADEON RX 6800M', 1699.99, 3322, './img/blog/32.jpeg'),
('ROG STRIX SCAR 15', 'STRIX', 'INTEL CORE I9', 'RTX 3070 Ti', 1999.99, 3333, './img/blog/33.jpeg'),
('fgndbv', 'ghfndb', 'hngbfdv', 'hmfgnbdv', 43346, 356354, '');

-- --------------------------------------------------------

--
-- Table structure for table `order`
--

CREATE TABLE `order` (
  `UID` int(11) NOT NULL,
  `PTIME` time NOT NULL,
  `PDATE` date NOT NULL,
  `OTIME` time NOT NULL,
  `ODATE` date NOT NULL,
  `PROG` text NOT NULL,
  `DVCID` int(11) NOT NULL,
  `OID` int(11) NOT NULL,
  `PRICE` float NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `order`
--

INSERT INTO `order` (`UID`, `PTIME`, `PDATE`, `OTIME`, `ODATE`, `PROG`, `DVCID`, `OID`, `PRICE`) VALUES
(2, '15:45:15', '2022-12-13', '13:52:00', '2022-12-13', 'Purchased', 1111, 1, 12000),
(1, '16:58:45', '2022-12-14', '16:56:38', '2022-12-14', 'Purchased', 2211, 2, 3899.99),
(1, '16:58:45', '2022-12-14', '16:57:52', '2022-12-14', 'Purchased', 2211, 3, 3899.99),
(1, '17:07:03', '2022-12-14', '17:06:56', '2022-12-14', 'Purchased', 1133, 4, 2399.99),
(1, '17:28:57', '2022-12-14', '17:28:43', '2022-12-14', 'Purchased', 3322, 5, 1699.99);

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `UID` int(11) NOT NULL,
  `PNUM` text NOT NULL,
  `LNAME` text NOT NULL,
  `FNAME` text NOT NULL,
  `ADDRESS` text NOT NULL,
  `EMAIL` text NOT NULL,
  `UNAME` text NOT NULL,
  `PASSWD` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`UID`, `PNUM`, `LNAME`, `FNAME`, `ADDRESS`, `EMAIL`, `UNAME`, `PASSWD`) VALUES
(1, '079835434567', 'EBY', 'MAHDI', 'NO. 3 PARKLIFE,\r\nLondon Street,\r\nLondon,\r\nEngland', 'MEBY2030@YAHOO.COM', 'EBY PANDA', 'MAHDIEBY@!'),
(2, '078623455454', 'ZOGHY', 'AHMAD', 'NO. 12 F. 6,\r\nNew Street,\r\nBirmingham,\r\nEngland', 'AHMADZO@GMAIL.COM', 'ZOGHY PRO', 'AHMAD1234'),
(3, '078567652331', 'ADAMS', 'JOHNNY', 'F. 3 ROCKMOCK,\r\nMoor Street,\r\nManchester,\r\nEngland', 'ADJON32@YAHOO.COM', 'J DEPP', 'JOHADAM1234');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admino`
--
ALTER TABLE `admino`
  ADD PRIMARY KEY (`UID`);

--
-- Indexes for table `order`
--
ALTER TABLE `order`
  ADD PRIMARY KEY (`OID`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`UID`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admino`
--
ALTER TABLE `admino`
  MODIFY `UID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `order`
--
ALTER TABLE `order`
  MODIFY `OID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `UID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=708097;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
