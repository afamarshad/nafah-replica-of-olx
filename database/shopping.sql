-- phpMyAdmin SQL Dump
-- version 4.8.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Aug 29, 2018 at 09:35 AM
-- Server version: 10.1.31-MariaDB
-- PHP Version: 7.2.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `shopping`
--

-- --------------------------------------------------------

--
-- Table structure for table `category`
--

CREATE TABLE `category` (
  `cat_id` int(11) NOT NULL,
  `cat_name` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `category`
--

INSERT INTO `category` (`cat_id`, `cat_name`) VALUES
(1, 'dress'),
(2, 'jewellery'),
(3, 'watch'),
(4, 'mobile'),
(5, 'laptop'),
(6, 'home appliances');

-- --------------------------------------------------------

--
-- Table structure for table `customer`
--

CREATE TABLE `customer` (
  `cust_id` int(11) NOT NULL,
  `cust_name` varchar(30) NOT NULL,
  `cust_email` varchar(75) NOT NULL,
  `cust_password` varchar(50) NOT NULL,
  `cust_contact` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `customer`
--

INSERT INTO `customer` (`cust_id`, `cust_name`, `cust_email`, `cust_password`, `cust_contact`) VALUES
(1, 'afsahz', 'afsahz.97@gmail.com', '1234', '123'),
(2, 'nida', 'nida14@gmail.com', '123', '03143748197'),
(4, 'bia', 'bia@gmail.com', '123', '1212');

-- --------------------------------------------------------

--
-- Table structure for table `feedback`
--

CREATE TABLE `feedback` (
  `Userid` int(11) NOT NULL,
  `Prodimage` varchar(50) NOT NULL,
  `UserName` varchar(30) NOT NULL,
  `UserLoc` varchar(30) NOT NULL,
  `UserMail` varchar(50) NOT NULL,
  `UserPhone` int(11) NOT NULL,
  `UserCompany` varchar(50) NOT NULL,
  `UserMessage` varchar(500) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `feedback`
--

INSERT INTO `feedback` (`Userid`, `Prodimage`, `UserName`, `UserLoc`, `UserMail`, `UserPhone`, `UserCompany`, `UserMessage`) VALUES
(4, 'car.jpg', 'Afsah', 'karachi', 'afsaharshad.34@gmail.com', 2147483647, '-', 'Excellent way sale and purchase on NAFAH. Very nice my 1st experience. I am much satisfied using NAFAH. Very hurry you can get jenuine seller and buyer. I sold my car on actual price. Otherwise dealers did not give actual price. NAFAH is the best way to sale and purchase. ...'),
(5, 'laptop.jpg', 'Amna', 'karachi', 'amna@gmail.com', 984746738, '-', 'NAFAH is the best website ever for sale purchaise of laptops and i am will satisfied from it i would like to pay regards to NAFAH team...'),
(6, 'iphone.jpg', 'Muzna', 'lahore', 'muzna@gmail.com', 986362738, '-', 'Very good plateform to sell your used thing. It has make very easy to sell things online in good price. ...'),
(10, 'necklace.jpeg', 'Bia', 'lahore', 'bia@gmail.com', 987766544, '-', 'Lovely plateform for selling and purchasing. great experience with NAFAH I am very happy to sold items in good price...'),
(11, 'iphone.jpg', 'jia', 'karachi', 'jia@gmail.com', 983716373, '-', 'Nafah is a best platform for selling stuff. you have to submit one easy add and your product sold. my smart phone sold in a day thanks nafah .........');

-- --------------------------------------------------------

--
-- Table structure for table `products`
--

CREATE TABLE `products` (
  `prod_id` int(11) NOT NULL,
  `prod_name` varchar(40) NOT NULL,
  `prod_desc` varchar(50) NOT NULL,
  `prod_price` double NOT NULL,
  `prod_image` varchar(40) NOT NULL,
  `prod_quantity` int(11) NOT NULL,
  `cat_id` int(11) NOT NULL,
  `prod_location` varchar(20) NOT NULL,
  `cust_id` int(11) NOT NULL,
  `prod_views` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `products`
--

INSERT INTO `products` (`prod_id`, `prod_name`, `prod_desc`, `prod_price`, `prod_image`, `prod_quantity`, `cat_id`, `prod_location`, `cust_id`, `prod_views`) VALUES
(13, 'washing machine', 'Brand New', 1000, 'washing machine.jpg', 1, 6, 'Karachi', 1, 0),
(14, 'juicer machine', 'Brand New', 1000, 'juicer machine.jpg', 1, 6, 'Karachi', 1, 0),
(15, 'samsung', 'Brand New', 3000, 'samsung.png', 1, 4, 'Karachi', 1, 0),
(16, 'juicer', 'Brand New', 2000, 'juicer machine.jpg', 1, 6, 'Karachi', 1, 0),
(17, 'frock', 'Brand New', 1000, 'frock1.jpg', 1, 1, 'Karachi', 1, 1),
(18, 'jacket', 'Brand New', 2000, 'jacket.jpg', 1, 1, 'Karach', 1, 4),
(19, 'hp laptop', 'Brand New', 5000, 'hp laptop.jpg', 1, 5, 'Karachi', 1, 14),
(20, 'frock', 'Brand New', 500, 'frock2.jpg', 1, 1, 'Karachi', 1, 0),
(21, 'macbook air', 'Brand New', 400000, 'macbook air.jpg', 1, 5, 'Karachi', 1, 2),
(22, 'iphone', 'Brand New', 5000000, 'iphone.jpg', 1, 4, 'Karachi', 1, 2),
(23, 'earings', 'Brand New', 500, 'earing1.jpg', 1, 2, 'Karachi', 1, 2),
(24, 'necklace', 'Brand New', 1000, 'necklace1.jpg', 1, 2, 'Karachi', 1, 0),
(25, 'earings', 'Brand New', 1000, 'earing2.jpg', 1, 2, 'Karachi', 1, 1),
(26, 'necklace', 'Brand New', 1000, 'necklace2.jpg', 1, 2, 'Karachi', 1, 0),
(27, 'ladies watch', 'Brand New', 250, 'watch.jpg', 1, 3, 'Karachi', 1, 5),
(28, 'ladies watch', 'Brand New', 1050, 'watch1.jpg', 1, 3, 'Karachi', 1, 33),
(29, 'oppo-f7', 'Brand New', 20000, 'oppo-f7.jpg', 1, 4, 'Karachi', 1, 2),
(30, 'macbook pro', 'Brand New', 50000, 'macbook.jpg', 1, 5, 'Karachi', 2, 1);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `category`
--
ALTER TABLE `category`
  ADD PRIMARY KEY (`cat_id`);

--
-- Indexes for table `customer`
--
ALTER TABLE `customer`
  ADD PRIMARY KEY (`cust_id`);

--
-- Indexes for table `feedback`
--
ALTER TABLE `feedback`
  ADD PRIMARY KEY (`Userid`);

--
-- Indexes for table `products`
--
ALTER TABLE `products`
  ADD PRIMARY KEY (`prod_id`),
  ADD KEY `products_constraint` (`cat_id`),
  ADD KEY `customer_constraint` (`cust_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `category`
--
ALTER TABLE `category`
  MODIFY `cat_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `customer`
--
ALTER TABLE `customer`
  MODIFY `cust_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `feedback`
--
ALTER TABLE `feedback`
  MODIFY `Userid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT for table `products`
--
ALTER TABLE `products`
  MODIFY `prod_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=31;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `products`
--
ALTER TABLE `products`
  ADD CONSTRAINT `customer_constraint` FOREIGN KEY (`cust_id`) REFERENCES `customer` (`cust_id`) ON UPDATE CASCADE,
  ADD CONSTRAINT `products_constraint` FOREIGN KEY (`cat_id`) REFERENCES `category` (`cat_id`) ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
