-- phpMyAdmin SQL Dump
-- version 4.9.1
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: Nov 29, 2019 at 09:13 PM
-- Server version: 10.4.8-MariaDB
-- PHP Version: 7.3.11

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `Online`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `ID` int(10) UNSIGNED NOT NULL,
  `username` varchar(30) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `password` varchar(15) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`ID`, `username`, `password`) VALUES
(1, 'Jyoti', 'jyoti123'),
(2, 'Pratiksha', 'pratik123');

-- --------------------------------------------------------

--
-- Table structure for table `Cart`
--

CREATE TABLE `Cart` (
  `productID` varchar(20) NOT NULL,
  `cartStatus` enum('Added to Cart','Ordered') CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `Qty` int(10) UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `Customers`
--

CREATE TABLE `Customers` (
  `customerID` int(11) NOT NULL,
  `cName` varchar(30) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `street` varchar(40) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `city` varchar(20) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `state` varchar(20) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `zip` varchar(10) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `country` varchar(15) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `phone` varchar(15) CHARACTER SET ucs2 COLLATE ucs2_unicode_ci NOT NULL,
  `email` varchar(50) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `password` varchar(20) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `Customers`
--

INSERT INTO `Customers` (`customerID`, `cName`, `street`, `city`, `state`, `zip`, `country`, `phone`, `email`, `password`) VALUES
(4, 'remnbkt', '839B W WALNUT ST, Unit B', 'KALAMAZOO', 'Michigan', '49007', 'ertrt', '682rer', 'jyoti.shrestha@wmich.edu', 'jehkiue'),
(5, 'Aashray Shrestha', '839B W WALNUT ST, Unit B', 'KALAMAZOO', 'Michigan', '49007', 'United States', '5715258277', 'aashray.138@gmail.com', 'dlhigd'),
(6, 'js', 'hj', 'gjjggj', 'jh', 'hh', 'jh', 'jgjjg', 'js@gma8il.com', 'jkhugjh'),
(7, '', '', '', '', '', '', '', '', ''),
(8, 'kamana', 'w', 'walnut', 'st', '49006', 'nepal', '249565435', 'kamana@gmail.com', '123456'),
(9, 'Priyanka Shrestha', '839B W WALNUT ST, Unit B', 'KALAMAZOO', 'Michigan', '49007', 'United States', '5715258277', 'khadkasagar00@gmail.com', 'khadka123'),
(10, 'Rojin Khadka', '529 Florida ave, Apt 103', 'Herndond', 'Virginia', '20170', 'United States', '45657688', 'rojin@gmail.com', '123456');

-- --------------------------------------------------------

--
-- Table structure for table `Orders`
--

CREATE TABLE `Orders` (
  `orderID` int(10) UNSIGNED NOT NULL,
  `customerID` int(11) NOT NULL,
  `shipName` varchar(50) CHARACTER SET utf8 COLLATE utf8_unicode_ci DEFAULT NULL,
  `orderDate` datetime NOT NULL,
  `shippingAddress` varchar(300) CHARACTER SET utf8 COLLATE utf8_unicode_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `Orders`
--

INSERT INTO `Orders` (`orderID`, `customerID`, `shipName`, `orderDate`, `shippingAddress`) VALUES
(13, 5, 'Aashray Shrestha', '2019-11-24 04:10:06', '839B W WALNUT ST, Unit B, KALAMAZOO, Michigan, 49007, United States'),
(17, 8, 'Kamana Khadka', '2019-11-24 04:31:12', '529 Florida ave, Apt 103, Herndond, Virginia, 20170, United States'),
(19, 10, 'Rojin Khadka', '2019-11-24 04:38:53', '529 Florida ave, Apt 103, Herndond, Virginia, 20170, United States'),
(27, 9, 'Priyanka Shrestha', '2019-11-25 01:42:04', '839B W WALNUT ST, Unit B, KALAMAZOO, Michigan, 49007, United States');

-- --------------------------------------------------------

--
-- Table structure for table `Products`
--

CREATE TABLE `Products` (
  `productID` varchar(20) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `pName` varchar(20) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `unitPrice` float NOT NULL,
  `description` varchar(500) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `image` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `Products`
--

INSERT INTO `Products` (`productID`, `pName`, `unitPrice`, `description`, `image`) VALUES
('F1', 'Ab Rocket Twister', 600, 'Strengthen your core by rocking back and forth for easier crunches. Innovative seat design.', 'Ab Rocket Twister.jpg'),
('F2', 'Six Pack Care', 500, 'Strengthen your core by rocking back and forth for easier crunches. Innovative seat design.', 'six-pack-care.jpg'),
('F3', 'Body Shaper', 200, 'Fitness for everyday wear. Designed with Neotex smart fabric technology. Maximizes fitness routine.', 'body-shaper.jpg'),
('F4', 'Body Buildo', 109.99, 'Packed with minerals and vitamins. Supports a healthy body. 15gm of high quality protein and great taste.', 'Body-buldio.jpg'),
('F5', 'Treadmill', 1599.99, 'Digital treadmill. Smart, compact digital Fitness treadmill with bluetooth app-sync.', 'trademill.jpg'),
('F6', 'Massaging mat', 99.99, 'Body massaging mat. Memory foam massaging mat with heat. Six therapy heating pad.', 'mat.jpg'),
('H1', 'Magic Sofa Bed', 65.45, '5 in 1 magic sofa bed. Comfortable sofa bed to relax and have fun with your children.', 'sofa.jpeg'),
('H2', 'Mini Vacuum', 79.99, 'Portable vacuum. Easy to clean and carry anywhere. It will leave every corner of your house spotless. ', 'mini_vacuum.jpg'),
('H3', 'Washer', 120.99, 'High pressure washer. Clean your muddy vehicles, floor and the walls. Leave everything spotless and crystal clear.', 'washer.jpg'),
('H4', 'Water Proof Shoes', 29.99, 'Make your feet happy with 100% water proof shoes. Extremely comfortable and very light weight.', 'shoes.jpg'),
('H5', 'Floral Bed-Sheet', 49.99, 'Make your bedroom look beautiful with our pink floral bed covers. Supremely soft, light-weight and breathable.', 'cover1.jpg'),
('H6', 'Floral Bed-Sheet', 49.99, 'Make your bedroom look beautiful with our floral bed covers. Supremely soft, light-weight and breathable.', 'cover2.jpg'),
('H7', 'Floral Bed-Sheet', 49.99, 'Make your bedroom look beautiful with our floral bed covers. Supremely soft, light-weight and breathable.', 'cover3.jpg'),
('K1', 'Magic Blender', 59.99, 'Blends everything smoothly. Easy to clean. Safety lock. Perfectly for making juice and smoothies.', 'blender.jpg'),
('K2', 'Salad Chef', 39.99, 'Excellent build quality with stainless steel. Perfect for chopping onions, tomatoes, etc. Easy to clean.', 'salaldchef.jpg'),
('K3', 'Rice Cooker', 69.99, 'Non-sticky stainless steel. Easy to cook and clean. Makes your kitchen life easier and happier.', 'rice-cooker.jpg'),
('K4', 'Hot Lunch Box', 49.99, 'Electric lunch box. Keeps for your food warm for more than 8 hours. ', 'hot-lunch.jpg'),
('K5', 'Roti Maker', 59.99, 'Make flat bread instantly with our roti maker. Non-stick coating, easy to carry and cook. 1-year warranty.', 'rotimaker.jpg');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`ID`);

--
-- Indexes for table `Customers`
--
ALTER TABLE `Customers`
  ADD PRIMARY KEY (`customerID`);

--
-- Indexes for table `Orders`
--
ALTER TABLE `Orders`
  ADD PRIMARY KEY (`orderID`),
  ADD UNIQUE KEY `customerID` (`customerID`);

--
-- Indexes for table `Products`
--
ALTER TABLE `Products`
  ADD PRIMARY KEY (`productID`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
  MODIFY `ID` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `Customers`
--
ALTER TABLE `Customers`
  MODIFY `customerID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `Orders`
--
ALTER TABLE `Orders`
  MODIFY `orderID` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=31;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
