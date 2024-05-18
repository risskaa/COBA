-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: May 16, 2024 at 11:48 AM
-- Server version: 10.4.32-MariaDB
-- PHP Version: 8.2.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `DB_ALIYA`
--

-- --------------------------------------------------------

--
-- Table structure for table `items`
--

CREATE TABLE `items` (
  `ItemID` int(11) NOT NULL,
  `Name` varchar(64) NOT NULL,
  `Brand` varchar(64) NOT NULL,
  `Description` varchar(512) NOT NULL,
  `Category` int(11) NOT NULL,
  `SellingPrice` float NOT NULL,
  `QuantityInStock` int(11) NOT NULL,
  `Image` varchar(512) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `items`
--

INSERT INTO `items` (`ItemID`, `Name`, `Brand`, `Description`, `Category`, `SellingPrice`, `QuantityInStock`, `Image`) VALUES
(3, 'Madu Mongso Ketan Hitam Mika B', 'ALIYA', '                                                                           READY STOK \" Madu Mongso Ketan Hitam\"\r\nHarga : Rp.40.000\r\nBerat : 400gr\r\nKemasan : Mika  B                                                                                                          ', 1, 40000, 9, 'bes7.jpg'),
(4, 'Jenang Kudus Durian', 'ALIYA', '                                                                          READY STOK \" Jenang Kudus Varian Durian\"\r\nHarga : Rp. 40.000\r\nBerat :1 Kg\r\nKemasan : Plastik                                                                                                               ', 0, 40000, 10, 'bes5.jpg'),
(5, 'Jenang Kudus  Kombinasi', 'ALIYA', '                                      READY STOK \" Jenang Kudus Varian Kombinasi \"\r\nPilihan Rasa :\r\n- Ori\r\n- Wijen\r\n- Durian\r\n- Nangka\r\n- Pandan\r\n\r\nHarga : Rp. 40.000\r\nBerat :1 Kg\r\nKemasan : Plastik                                                           ', 0, 40000, 10, 'bes3.jpg'),
(6, 'Keciput Original K', 'ALIYA', '                                                                                                               READY STOK \"Keciput Original K \"\r\nHarga : 23.000\r\nKemasan : Plastik        \r\n                                                                                        ', 2, 23000, 10, 'kategori2.jpg'),
(10, 'Keciput Original B', 'ALIYA', '                                                                                       READY STOK \"Keciput Original \"\r\nHarga : 46.000\r\nKemasan : Plastik                                                                 ', 2, 46000, 10, 'kategori2.jpg'),
(11, 'Jenang Kudus Wijen', 'ALIYA', '                   READY STOK \" Jenang Kudus Varian Wijen \"\r\nHarga : Rp. 42.000\r\nBerat :1 Kg\r\nKemasan : Plastik                                                ', 0, 42000, 10, 'bes2.jpg'),
(15, 'Jenang Kudus Pandan', 'ALIYA', '                                                                                                       READY STOK \" Jenang Kudus Varian Pandan \"\r\nHarga : Rp. 42.000\r\nBerat :1 Kg\r\nKemasan : Plastik                                                                                              ', 0, 40000, 10, 'bes6.jpg'),
(32, 'Jenang Kudus Nangka', 'ALIYA', '                                                                        READY STOK \" Jenang Kudus Varian Nangka \"\r\nHarga : Rp. 40.000\r\nBerat :1 Kg\r\nKemasan : Plastik                                                                            ', 0, 40000, 10, 'bes4.jpg'),
(35, 'Madu Mongso Ori Mika B', 'ALIYA', '                                    READY STOK \"Madu Mongso Ori Mika B\"\r\nHarga : Rp.36.000 \r\nKemasan : Mika B                     ', 1, 36000, 10, 'bes8.jpg'),
(66, 'Jenang Kudus Original', 'ALIYA', 'READY STOK \" Jenang Kudus Varian Original\"\nHarga : Rp. 40.000\n\nBerat : 1kg\nKemasan : Plastik\n', 0, 40000, 10, 'bes1.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `members`
--

CREATE TABLE `members` (
  `MemberID` int(11) NOT NULL,
  `Username` varchar(64) NOT NULL,
  `Password` varchar(512) NOT NULL,
  `Email` varchar(64) NOT NULL,
  `PrivilegeLevel` int(11) NOT NULL DEFAULT 0,
  `Attempt` int(1) DEFAULT NULL,
  `RegisteredDate` date DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `members`
--

INSERT INTO `members` (`MemberID`, `Username`, `Password`, `Email`, `PrivilegeLevel`, `Attempt`, `RegisteredDate`) VALUES
(2, 'admin', '$2y$10$wq746a0dn0wmcPzHXfEMhe80xZQc9/1PBJID9Ri4AHbfmwT9xn9Xi', 'admin@gmail.com', 1, 3, '2022-03-27'),
(5, 'test1', '$2y$10$GlhvBkMPi19b3tGoGUzEzOu3GDazDogOzd.eoAvNc0ID8PB9n7E7K', 'test@gmail.com', 0, 3, '2022-03-27'),
(6, 'test2', '$2y$10$Q.624Ef8zdpsWryToDFJZONz7XopgMQZwQeLXwzFUBa07/DNdFfUO', 'test123@gmail.com', 0, 3, '2022-03-27'),
(7, 'test3', '$2y$10$YZJ3hA4zgVjaKdMJHR5EWuUk8ujPDlqXP7IzEd.kD9.lLcUAbH5Su', 'test3@gmail.com', 0, 3, '2022-03-27'),
(8, 'test4', '$2y$10$07FJA8uhFxA0aAnMBoP59uAs4CNhyQ/yHqIT69UgrH6l2nsZGa5Y.', 'test4@gmail.com', 0, 3, '2022-03-27'),
(9, 'test5', '$2y$10$CYsI.DmaPc5EXpjRRfQTIeYkbC0ngtucxVHRHgV5SJ0z1/2cwB4mu', 'test5@gmail.com', 0, 3, '2022-03-25'),
(10, 'test6', '$2y$10$ieSbXKrOc4tmF.kSUtTCyO69Xp13lNCs.Fl.agTLYm3N0FAKdRWkC', 'test6@gmail.com', 0, 3, '2022-03-24'),
(15, 'test7', '$2y$10$wYZtt0RY/443JBq5UO0iGuDbUia/lIEWI0/iSGrDJ4Yrv3WpD5J1.', 'test7@gmail.com', 0, 3, '2022-03-25'),
(16, 'test8', '$2y$10$qYaWx7z6VHxgBtQxLm7leuo2sKv76Cg28UhmJaKZiF0eHXiMMcKCa', 'test8@gmail.com', 0, 3, '2022-03-27'),
(19, 'test9', '$2y$10$VDEN6GE/49oMJ6GIwCL/2Op6K6iTeuZbbf7QFn8Oj7WTPzTG3E2Nq', 'test9@gmail.com', 0, 3, '2022-03-26'),
(22, 'admin2', '$2y$10$4DtSUM142G/dEiZOfO2xS.1VptEJ0rzRh1AFM6EH/Wf.1MediuCUm', 'admin@mail.com', 1, 3, '2022-03-27'),
(23, 'riska12', '$2y$10$f5kOEVBEq51tvDjIQx9kSup0cfO3ewgApqHNM3elJl8eExpgNwJIa', 'riska@gmail.com', 0, 2, '2024-05-11'),
(24, 'dwimln12', '$2y$10$9EVW1a6vg9GOVInpban1FesFxwNz1QVkpMKeV8CgkAkyGUrxkZDRi', 'riskadwi@gmail.com', 0, 3, '2024-05-16');

-- --------------------------------------------------------

--
-- Table structure for table `orderitems`
--

CREATE TABLE `orderitems` (
  `OrderItemID` int(11) NOT NULL,
  `OrderID` int(11) NOT NULL,
  `ItemID` int(11) NOT NULL,
  `Price` float NOT NULL,
  `Quantity` int(11) NOT NULL,
  `AddedDatetime` datetime NOT NULL,
  `Feedback` varchar(512) DEFAULT NULL,
  `Rating` int(11) DEFAULT NULL,
  `RatingDateTime` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `orderitems`
--

INSERT INTO `orderitems` (`OrderItemID`, `OrderID`, `ItemID`, `Price`, `Quantity`, `AddedDatetime`, `Feedback`, `Rating`, `RatingDateTime`) VALUES
(37, 24, 3, 6950, 1, '2022-03-13 00:43:58', 'Madu mongso enak original!!!', 5, '2024-05-16 19:36:36'),
(56, 28, 3, 6950, 1, '2022-03-13 23:49:08', 'Original wangi enak ', 5, '2024-05-16 00:35:25'),
(70, 37, 3, 40000, 1, '2024-05-16 16:27:17', NULL, NULL, '0000-00-00 00:00:00');

-- --------------------------------------------------------

--
-- Table structure for table `orders`
--

CREATE TABLE `orders` (
  `OrderID` int(11) NOT NULL,
  `MemberID` int(11) NOT NULL,
  `CartFlag` bit(1) NOT NULL DEFAULT b'1'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `orders`
--

INSERT INTO `orders` (`OrderID`, `MemberID`, `CartFlag`) VALUES
(6, 6, b'1'),
(7, 7, b'1'),
(8, 8, b'1'),
(9, 9, b'1'),
(10, 10, b'1'),
(15, 15, b'1'),
(16, 16, b'1'),
(20, 19, b'1'),
(24, 5, b'0'),
(27, 2, b'1'),
(28, 5, b'0'),
(29, 5, b'0'),
(30, 5, b'1'),
(31, 22, b'1'),
(32, 23, b'0'),
(33, 23, b'0'),
(34, 23, b'0'),
(35, 23, b'0'),
(36, 23, b'1'),
(37, 24, b'0'),
(38, 24, b'1');

-- --------------------------------------------------------

--
-- Table structure for table `payment`
--

CREATE TABLE `payment` (
  `PaymentID` int(11) NOT NULL,
  `OrderID` int(11) NOT NULL,
  `PaymentDate` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `payment`
--

INSERT INTO `payment` (`PaymentID`, `OrderID`, `PaymentDate`) VALUES
(6, 24, '2022-03-13'),
(7, 28, '2022-03-14'),
(8, 29, '2022-03-14'),
(9, 32, '2024-05-16'),
(10, 33, '2024-05-16'),
(11, 34, '2024-05-16'),
(12, 35, '2024-05-16'),
(13, 37, '2024-05-16');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `items`
--
ALTER TABLE `items`
  ADD PRIMARY KEY (`ItemID`);

--
-- Indexes for table `members`
--
ALTER TABLE `members`
  ADD PRIMARY KEY (`MemberID`);

--
-- Indexes for table `orderitems`
--
ALTER TABLE `orderitems`
  ADD PRIMARY KEY (`OrderItemID`),
  ADD KEY `OrderID` (`OrderID`),
  ADD KEY `ItemID` (`ItemID`);

--
-- Indexes for table `orders`
--
ALTER TABLE `orders`
  ADD PRIMARY KEY (`OrderID`),
  ADD KEY `MemberID` (`MemberID`);

--
-- Indexes for table `payment`
--
ALTER TABLE `payment`
  ADD PRIMARY KEY (`PaymentID`),
  ADD KEY `OrderID` (`OrderID`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `items`
--
ALTER TABLE `items`
  MODIFY `ItemID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=67;

--
-- AUTO_INCREMENT for table `members`
--
ALTER TABLE `members`
  MODIFY `MemberID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=25;

--
-- AUTO_INCREMENT for table `orderitems`
--
ALTER TABLE `orderitems`
  MODIFY `OrderItemID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=71;

--
-- AUTO_INCREMENT for table `orders`
--
ALTER TABLE `orders`
  MODIFY `OrderID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=39;

--
-- AUTO_INCREMENT for table `payment`
--
ALTER TABLE `payment`
  MODIFY `PaymentID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `orderitems`
--
ALTER TABLE `orderitems`
  ADD CONSTRAINT `orderitems_ibfk_1` FOREIGN KEY (`OrderID`) REFERENCES `orders` (`OrderID`),
  ADD CONSTRAINT `orderitems_ibfk_2` FOREIGN KEY (`ItemID`) REFERENCES `items` (`ItemID`);

--
-- Constraints for table `orders`
--
ALTER TABLE `orders`
  ADD CONSTRAINT `orders_ibfk_1` FOREIGN KEY (`MemberID`) REFERENCES `members` (`MemberID`);

--
-- Constraints for table `payment`
--
ALTER TABLE `payment`
  ADD CONSTRAINT `payment_ibfk_1` FOREIGN KEY (`OrderID`) REFERENCES `orders` (`OrderID`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
