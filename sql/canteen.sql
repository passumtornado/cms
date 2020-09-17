-- phpMyAdmin SQL Dump
-- version 4.2.11
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Apr 23, 2018 at 09:40 PM
-- Server version: 5.6.21
-- PHP Version: 5.6.3

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `canteen`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE IF NOT EXISTS `admin` (
`AdminID` int(10) NOT NULL,
  `username` varchar(50) NOT NULL,
  `email` varchar(150) NOT NULL,
  `password` varchar(150) NOT NULL,
  `image` text NOT NULL,
  `reg_date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`AdminID`, `username`, `email`, `password`, `image`, `reg_date`) VALUES
(1, 'passumtornado', 'passumtornado@gmail.com', 'passum3677', '', '2018-02-15 07:00:00'),
(2, 'mujsanell', 'mujasnell60@gmail.com', '12345', '', '2018-02-15 07:00:00');

-- --------------------------------------------------------

--
-- Table structure for table `breakfast`
--

CREATE TABLE IF NOT EXISTS `breakfast` (
`bID` int(10) NOT NULL,
  `foodName` varchar(50) NOT NULL,
  `categories` varchar(25) NOT NULL,
  `quantity` varchar(25) NOT NULL,
  `amount` float NOT NULL,
  `description` varchar(250) NOT NULL,
  `foodtags` varchar(200) NOT NULL,
  `image` text NOT NULL,
  `date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB AUTO_INCREMENT=16 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `breakfast`
--

INSERT INTO `breakfast` (`bID`, `foodName`, `categories`, `quantity`, `amount`, `description`, `foodtags`, `image`, `date`) VALUES
(11, 'sausage and bread', ' breakfast', '5', 25, ' my best food', 'sausage', 'IMG-20180320-WA0023.jpg', '2018-03-20 15:09:23'),
(12, 'rice and stew', ' breakfast', '1', 20, ' vgdegyhdwbjfhkjhf,mnfj', 'rice', 'IMG-20180320-WA0040.jpg', '2018-04-11 14:24:04'),
(13, 'koko and groundnut', ' breakfast', '0', 5, ' local koko made with millet', 'koko,groundnut', 'kokogrnd.jpg', '2018-04-17 02:13:42'),
(14, 'bread,egg and lipton', ' breakfast', '0', 10, ' ', 'egg,bread', 'breadegg.jpg', '2018-04-17 02:15:26'),
(15, 'spine roll,grapes and milo', ' breakfast', '2', 20, ' my favourite meal', 'spine roll', 'IMG-20180402-WA0012.jpg', '2018-04-17 02:16:58');

-- --------------------------------------------------------

--
-- Table structure for table `cart`
--

CREATE TABLE IF NOT EXISTS `cart` (
`cartID` int(10) NOT NULL,
  `bID` int(10) NOT NULL,
  `lID` int(10) NOT NULL,
  `sID` int(10) NOT NULL,
  `C_Id` int(10) NOT NULL,
  `foodname` varchar(50) NOT NULL,
  `image` text NOT NULL,
  `quantity` int(10) NOT NULL,
  `price` int(10) NOT NULL,
  `total_amt` int(10) NOT NULL,
  `date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB AUTO_INCREMENT=23 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `cart`
--

INSERT INTO `cart` (`cartID`, `bID`, `lID`, `sID`, `C_Id`, `foodname`, `image`, `quantity`, `price`, `total_amt`, `date`) VALUES
(9, 11, 0, 0, 16, ' sausage and bread', 'IMG-20180320-WA0023.jpg', 5, 25, 25, '2018-04-16 21:41:11'),
(10, 12, 0, 0, 16, ' rice and stew', 'IMG-20180320-WA0040.jpg', 1, 20, 20, '2018-04-16 21:41:24'),
(13, 16, 0, 0, 16, ' koko and bofrot', 'kokobofrot.jpg', 11, 5, 5, '2018-04-17 16:07:23'),
(17, 15, 0, 0, 15, ' spine roll,grapes and milo', 'IMG-20180402-WA0012.jpg', 2, 20, 20, '2018-04-17 17:30:14'),
(19, 13, 0, 0, 15, ' koko and groundnut', 'kokogrnd.jpg', 0, 5, 5, '2018-04-17 22:11:06'),
(20, 16, 0, 0, 15, ' koko and bofrot', 'kokobofrot.jpg', 11, 5, 5, '2018-04-17 22:11:30'),
(21, 11, 0, 0, 15, ' sausage and bread', 'IMG-20180320-WA0023.jpg', 5, 25, 25, '2018-04-17 22:24:18'),
(22, 14, 0, 0, 15, ' bread,egg and lipton', 'breadegg.jpg', 0, 10, 10, '2018-04-18 23:22:27');

-- --------------------------------------------------------

--
-- Table structure for table `categories`
--

CREATE TABLE IF NOT EXISTS `categories` (
`CID` int(10) NOT NULL,
  `categoryName` varchar(25) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `categories`
--

INSERT INTO `categories` (`CID`, `categoryName`) VALUES
(1, 'breakfast'),
(2, 'lunch'),
(3, 'supper'),
(4, 'combo'),
(5, 'event');

-- --------------------------------------------------------

--
-- Table structure for table `combo`
--

CREATE TABLE IF NOT EXISTS `combo` (
`comboiD` int(10) NOT NULL,
  `ComboName` varchar(50) NOT NULL,
  `description` text NOT NULL,
  `categories` varchar(25) NOT NULL,
  `price` float NOT NULL,
  `tags` varchar(200) NOT NULL,
  `image` text NOT NULL,
  `date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `combo`
--

INSERT INTO `combo` (`comboiD`, `ComboName`, `description`, `categories`, `price`, `tags`, `image`, `date`) VALUES
(3, 'combo2', 'xdfghsdgdhbijfwugwhbgwygwhbwhhwwhvgvwhwywhbgw', 'combo', 40, '', ' s-l225.jpg', '2018-03-17 05:25:47');

-- --------------------------------------------------------

--
-- Table structure for table `cook`
--

CREATE TABLE IF NOT EXISTS `cook` (
`cookID` int(10) NOT NULL,
  `firstname` varchar(50) NOT NULL,
  `lastname` varchar(50) NOT NULL,
  `username` varchar(50) NOT NULL,
  `email` varchar(150) NOT NULL,
  `password` varchar(150) NOT NULL,
  `dob` date NOT NULL,
  `gender` varchar(6) NOT NULL,
  `mobile` int(15) NOT NULL,
  `image` text NOT NULL,
  `role` varchar(10) NOT NULL,
  `reg_date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `waiterID` int(10) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=12 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `cook`
--

INSERT INTO `cook` (`cookID`, `firstname`, `lastname`, `username`, `email`, `password`, `dob`, `gender`, `mobile`, `image`, `role`, `reg_date`, `waiterID`) VALUES
(10, ' mujeeb', 'Alhassan', 'mujasnell', 'mmmt@ht.com', '827ccb0eea8a706c4c34a16891f84e7b', '2018-02-05', 'm', 123456789, 'IMG_20170926_074452.jpg', 'cook', '2018-02-22 18:41:49', 1),
(11, ' Bene', 'Alordeh', 'perfectwife', 'benen@gm.com', 'b952f32f2e106168715d1f0af7404d8c', '2018-02-01', 'f', 1234567890, '11491556227009-INVICTUS-Men-Blue--White-Checked-Slim-Fit-Pleated-Formal-Trousers-4321491556226717-2.jpg', 'cook', '2018-02-22 18:50:25', 1);

-- --------------------------------------------------------

--
-- Table structure for table `customer`
--

CREATE TABLE IF NOT EXISTS `customer` (
`customerID` int(10) NOT NULL,
  `username` varchar(50) NOT NULL,
  `email` varchar(150) NOT NULL,
  `password` varchar(150) NOT NULL,
  `mobile` varchar(15) NOT NULL,
  `address1` varchar(100) NOT NULL,
  `address2` varchar(100) NOT NULL,
  `Date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB AUTO_INCREMENT=17 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `customer`
--

INSERT INTO `customer` (`customerID`, `username`, `email`, `password`, `mobile`, `address1`, `address2`, `Date`) VALUES
(2, 'passum', 'passumtornado10@gmail.com', 'b952f32f2e106168715d1f0af7404d8c', '0241333114', 'fiapre', 'sunyani', '2018-04-10 23:41:28'),
(3, 'mujasnell', 'benen@gm.com', 'e10adc3949ba59abbe56e057f20f883e', '0241333114', 'fiapre', 'sunyani', '2018-04-10 23:46:50'),
(6, 'passumtornado2', 'ttt@ht.com', '827ccb0eea8a706c4c34a16891f84e7b', '1234567893', 'fiapre', 'sunyani', '2018-04-11 00:05:14'),
(7, 'Bene', 'alordeh06@gmail.com', '3c17b15cba3dfa39b02004198e67ab0e', '0241333114', 'Takorade', 'sunyani', '2018-04-13 08:36:09'),
(8, 'perfectwife', 'part@ht.com', '71d7232b9fed020ca23729017873089e', '0241333114', 'Tano', 'Berekum', '2018-04-13 08:38:10'),
(14, 'passumtornado', 'passum45@gmail.com', '3c17b15cba3dfa39b02004198e67ab0e', '024-133-3114', 'fiapre', 'ksi', '2018-04-15 01:56:42'),
(15, 'customer', 'customer@h.com', 'd8578edf8458ce06fbc5bb76a58c5ca4', '024-133-3114', 'Accra', 'tema', '2018-04-15 15:44:28'),
(16, 'customer1', 'passum191@h.com', '3c17b15cba3dfa39b02004198e67ab0e', '024-333-1114', 'ghana', 'togo', '2018-04-16 20:04:28');

-- --------------------------------------------------------

--
-- Table structure for table `event`
--

CREATE TABLE IF NOT EXISTS `event` (
`evenID` int(10) NOT NULL,
  `eventName` varchar(100) NOT NULL,
  `foodItems` varchar(250) NOT NULL,
  `quantity` float NOT NULL,
  `deliveryDate` varchar(100) NOT NULL,
  `time` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `lunch`
--

CREATE TABLE IF NOT EXISTS `lunch` (
`LID` int(10) NOT NULL,
  `foodName` varchar(50) NOT NULL,
  `categories` varchar(25) NOT NULL,
  `quantity` varchar(25) NOT NULL,
  `amount` float NOT NULL,
  `description` varchar(250) NOT NULL,
  `foodtags` varchar(200) NOT NULL,
  `image` text NOT NULL,
  `date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `menu`
--

CREATE TABLE IF NOT EXISTS `menu` (
`m_ID` int(10) NOT NULL,
  `foodName` varchar(100) NOT NULL,
  `category_ID` int(10) NOT NULL,
  `quantity` varchar(50) NOT NULL,
  `amount` float NOT NULL,
  `description` varchar(300) NOT NULL,
  `foodtags` varchar(50) NOT NULL,
  `image` text NOT NULL,
  `date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB AUTO_INCREMENT=30 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `menu`
--

INSERT INTO `menu` (`m_ID`, `foodName`, `category_ID`, `quantity`, `amount`, `description`, `foodtags`, `image`, `date`) VALUES
(2, 'Tea with Toasted bread and fried eggs', 1, '1', 5, ' Milo/Coffee/Lipton, Sugar/Honey, Milk, Bread, Egg', 'Tea', 'tea with toasted bread and eggs.jpg', '2018-04-23 09:33:06'),
(3, 'Hausa Kooko with koose', 1, '1', 3, ' Millet, Local spices, Sugar, Milk, Groundnut, Bread,', 'kooko', 'hausa kooko with kose.jpg', '2018-04-23 09:35:36'),
(4, 'Rice porridge with Dry crunchy', 1, '1', 3, ' Rice, Sugar, Milk. crunchy ( flour, sugar, dried yeast, salt)', 'Ricewater', 'ricewater.jpg', '2018-04-23 09:40:43'),
(5, 'Oats with bread', 1, '1', 4, ' Oat, Sugar, Milk ', 'Oats', 'oats meal.jpg', '2018-04-23 09:42:31'),
(6, 'Tom Brown with bread and fried eggs', 1, '1', 5, ' Milled roasted corn, Milled groundnut, sugar, Milk, Bread, Egg', 'Tom Brown', 'tom brown with bread 2.jpg', '2018-04-23 09:47:27'),
(7, 'Banku with Tilapia and hot pepper', 2, '1', 30, ' Whole tilapia, Fresh tomatoes, Kpakpo shito, Onions, Spices, Salt, Corn dough, Cassava dough', 'banku, Tilapia', 'banku with tilapia and hot pepper.jpg', '2018-04-23 10:13:02'),
(8, 'Banku with okro stew', 2, '1', 20, ' Cassava dough, Corn dough, Salt, Okro, Garden eggs, Palm oil, Momoni, Smoked salmon, Crabs, Onions, Tomatoes, Pepper, Garlic, Ginger', 'banku', 'okro-stew.jpg', '2018-04-23 10:14:33'),
(9, 'Ampesie with Palava sauce', 2, '1', 15, ' Boiled yam/ Plantain, Spinch, Palm oil, Smoked fish, Onion, Pepper, Tomatoes, Salt', 'Ampesie, palava sauce', 'ampesie with palava sauce.jpg', '2018-04-23 10:15:46'),
(10, 'Fufu with palm nut soup', 2, '1', 25, ' Palmnut, Onions, Tomatoes, Fish /meat, Pepper, Salt, Ginger, Garlic, Cassava, Plantian', 'fufu', 'XGltYWdlc1xjb250ZW50XDExMjYyMDE3MjIxMjhfYWJlbmt3YW4ucG5nfDEwMjR8NzI4.jpg', '2018-04-23 10:17:15'),
(11, 'Fufu with palm nut soup', 3, '1', 25, ' Palmnut, Onions, Tomatoes, Fish /meat, Pepper, Salt, Ginger, Garlic, Cassava, Plantian', 'fufu', 'XGltYWdlc1xjb250ZW50XDExMjYyMDE3MjIxMjhfYWJlbmt3YW4ucG5nfDEwMjR8NzI4.jpg', '2018-04-23 10:18:04'),
(12, 'Fufu and light soup', 2, '1', 25, ' Onions, Tomatoes, Pepper, Salt, Fish /Meat, Ginger, Garlic, Cassava, Plantain', 'fufu', 'fufu with light soup.jpg', '2018-04-23 10:19:02'),
(13, 'Fufu and light soup', 3, '1', 25, ' Onions, Tomatoes, Pepper, Salt, Fish /Meat, Ginger, Garlic, Cassava, Plantain', 'fufu', 'fufu with light soup1.jpg', '2018-04-23 10:19:38'),
(14, 'Fufu with groundnut soup', 2, '1', 25, ' Tomatoes, Onions, Pepper, Salt, Groundnut paste, Fish / Meat, Cassava, Plantain', 'fufu', 'fufu with nkatenkwan.jpg', '2018-04-23 10:24:19'),
(15, 'omutuo with groundnut soup', 2, '1', 20, ' Tomatoes, Fish / Meat, Pepper, Salt, Onions, Groundnut paste, Rice', 'omutuo', 'omutuo with nkatenkwan.jpg', '2018-04-23 10:26:03'),
(16, 'omutuo with groundnut soup', 3, '1', 20, ' Tomatoes, Fish / Meat, Pepper, Salt, Onions, Groundnut paste, Rice', 'omutuo', 'omutuo with nkatenkwan.jpg', '2018-04-23 10:26:40'),
(17, 'Fried rice and chicken', 2, '1', 20, ' Rice, Chicken, Salt, spices, Onions, Carrots, Greenpeppr, Spring onions, Dark soy sauce Garlic, Ginger, Oil, Eggs', 'fried rice , chicken', 'fried riceand chicken.jpg', '2018-04-23 10:27:48'),
(18, 'Fried rice and chicken', 3, '1', 20, ' Rice, Chicken, Salt, spices, Onions, Carrots, Greenpeppr, Spring onions, Dark soy sauce Garlic, Ginger, Oil, Eggs', 'fried rice , chicken', 'fried riceand chicken.jpg', '2018-04-23 10:28:21'),
(19, 'Jollof and chicken', 2, '1', 20, ' Rice, Chicken, Salt, Tomatoes, Pepper, Onions, Ginger, Garlic, Oil', 'jollof', 'IMG-20180222-WA0094.jpg', '2018-04-23 10:29:34'),
(20, 'Jollof and chicken', 3, '1', 20, ' Rice, Chicken, Salt, Tomatoes, Pepper, Onions, Ginger, Garlic, Oil', 'jollof', 'IMG-20180222-WA0094.jpg', '2018-04-23 10:30:27'),
(21, 'jollof and Tilapia', 3, '1', 25, ' Rice, Chicken, Salt, Tomatoes, Pepper, tilapia, Onions, Ginger, Garlic, Oil', 'jollof, tilapia', 'jollof with tilapia.jpg', '2018-04-23 10:32:32'),
(22, 'jollof and Tilapia', 2, '1', 25, ' Rice, Chicken, Salt, Tomatoes, Pepper, tilapia, Onions, Ginger, Garlic, Oil', 'jollof, tilapia', 'jollof with tilapia.jpg', '2018-04-23 10:33:14'),
(23, 'Plain rice with stew', 2, '1', 20, ' Rice, Tomatoes, Pepper, Onions, Oil, Salt, Ginger, Garlic, Meat / Chicken / Fish, Spices', 'plain rice', 'plain rice with stew.jpg', '2018-04-23 10:36:40'),
(24, 'Plain rice with stew', 3, '1', 20, ' Rice, Tomatoes, Pepper, Onions, Oil, Salt, Ginger, Garlic, Meat / Chicken / Fish, Spices', 'plain rice', 'plain rice with stew.jpg', '2018-04-23 10:37:24'),
(25, 'Fried potatoes with tilapia', 2, '1', 25, ' potatoes, oil, salt, full tilapia and pepper', 'fried potatoes', 'IMG-20180222-WA0086.jpg', '2018-04-23 10:39:45'),
(26, 'Spaghetti with chicken', 3, '1', 25, ' spahetti, chicken, oil, salt', 'spaghetti', 'IMG-20180222-WA0090.jpg', '2018-04-23 10:41:07'),
(27, 'Fried shrimps with cucumber and tomatoes', 3, '1', 15, ' shrimps, oil, salt cucumber, tomatoes', 'shrimps', 'IMG-20180222-WA0088.jpg', '2018-04-23 10:43:07'),
(28, 'fried plantain with pear and red fish', 2, '1', 20, ' red fish, plantain, pear, egg', 'red fish', 'IMG-20180222-WA0079.jpg', '2018-04-23 10:45:00'),
(29, 'Gari and beans', 2, '1', 10, ' beans, salt, palm oil, plantain, gari', 'gobe', 'beansssssssssss.jpg', '2018-04-23 10:49:45');

-- --------------------------------------------------------

--
-- Table structure for table `stock`
--

CREATE TABLE IF NOT EXISTS `stock` (
`stockID` int(11) NOT NULL,
  `StockName` varchar(50) NOT NULL,
  `StockCat` varchar(20) NOT NULL,
  `StockQuantity` varchar(50) NOT NULL,
  `image` text NOT NULL,
  `Description` text NOT NULL,
  `Date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `supper`
--

CREATE TABLE IF NOT EXISTS `supper` (
`sID` int(10) NOT NULL,
  `foodName` varchar(50) NOT NULL,
  `categories` varchar(25) NOT NULL,
  `quantity` varchar(25) NOT NULL,
  `amount` float NOT NULL,
  `description` varchar(250) NOT NULL,
  `foodtags` varchar(200) NOT NULL,
  `image` text NOT NULL,
  `date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `waiter`
--

CREATE TABLE IF NOT EXISTS `waiter` (
`waiterID` int(10) NOT NULL,
  `firstname` varchar(50) NOT NULL,
  `lastname` varchar(50) NOT NULL,
  `username` varchar(50) NOT NULL,
  `email` varchar(150) NOT NULL,
  `password` varchar(150) NOT NULL,
  `dob` date NOT NULL,
  `gender` varchar(6) NOT NULL,
  `mobile` int(15) NOT NULL,
  `role` varchar(10) NOT NULL,
  `image` text NOT NULL,
  `reg_date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `waiter`
--

INSERT INTO `waiter` (`waiterID`, `firstname`, `lastname`, `username`, `email`, `password`, `dob`, `gender`, `mobile`, `role`, `image`, `reg_date`) VALUES
(1, ' mujasnell', 'Alhassan', 'mujasnell', 'mmmt@ht.com', '25f9e794323b453885f5181f1b624d0b', '2018-02-05', 'm', 1234567890, 'waiter', '11491556227009-INVICTUS-Men-Blue--White-Checked-Slim-Fit-Pleated-Formal-Trousers-4321491556226717-2.jpg', '2018-02-19 14:20:33'),
(2, ' Bene', 'Alordeh', 'benealordey', 'benen@gm.com', 'e10adc3949ba59abbe56e057f20f883e', '2018-03-06', 'f', 123456789, 'waiter', 'muslimcourse02.jpg', '2018-03-11 19:23:34');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
 ADD PRIMARY KEY (`AdminID`);

--
-- Indexes for table `breakfast`
--
ALTER TABLE `breakfast`
 ADD PRIMARY KEY (`bID`);

--
-- Indexes for table `cart`
--
ALTER TABLE `cart`
 ADD PRIMARY KEY (`cartID`);

--
-- Indexes for table `categories`
--
ALTER TABLE `categories`
 ADD PRIMARY KEY (`CID`);

--
-- Indexes for table `combo`
--
ALTER TABLE `combo`
 ADD PRIMARY KEY (`comboiD`);

--
-- Indexes for table `cook`
--
ALTER TABLE `cook`
 ADD PRIMARY KEY (`cookID`), ADD KEY `waiterID` (`waiterID`);

--
-- Indexes for table `customer`
--
ALTER TABLE `customer`
 ADD PRIMARY KEY (`customerID`);

--
-- Indexes for table `event`
--
ALTER TABLE `event`
 ADD PRIMARY KEY (`evenID`);

--
-- Indexes for table `lunch`
--
ALTER TABLE `lunch`
 ADD PRIMARY KEY (`LID`);

--
-- Indexes for table `menu`
--
ALTER TABLE `menu`
 ADD PRIMARY KEY (`m_ID`);

--
-- Indexes for table `stock`
--
ALTER TABLE `stock`
 ADD PRIMARY KEY (`stockID`);

--
-- Indexes for table `supper`
--
ALTER TABLE `supper`
 ADD PRIMARY KEY (`sID`);

--
-- Indexes for table `waiter`
--
ALTER TABLE `waiter`
 ADD PRIMARY KEY (`waiterID`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
MODIFY `AdminID` int(10) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT for table `breakfast`
--
ALTER TABLE `breakfast`
MODIFY `bID` int(10) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=16;
--
-- AUTO_INCREMENT for table `cart`
--
ALTER TABLE `cart`
MODIFY `cartID` int(10) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=23;
--
-- AUTO_INCREMENT for table `categories`
--
ALTER TABLE `categories`
MODIFY `CID` int(10) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=6;
--
-- AUTO_INCREMENT for table `combo`
--
ALTER TABLE `combo`
MODIFY `comboiD` int(10) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT for table `cook`
--
ALTER TABLE `cook`
MODIFY `cookID` int(10) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=12;
--
-- AUTO_INCREMENT for table `customer`
--
ALTER TABLE `customer`
MODIFY `customerID` int(10) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=17;
--
-- AUTO_INCREMENT for table `event`
--
ALTER TABLE `event`
MODIFY `evenID` int(10) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `lunch`
--
ALTER TABLE `lunch`
MODIFY `LID` int(10) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=5;
--
-- AUTO_INCREMENT for table `menu`
--
ALTER TABLE `menu`
MODIFY `m_ID` int(10) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=30;
--
-- AUTO_INCREMENT for table `stock`
--
ALTER TABLE `stock`
MODIFY `stockID` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `supper`
--
ALTER TABLE `supper`
MODIFY `sID` int(10) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT for table `waiter`
--
ALTER TABLE `waiter`
MODIFY `waiterID` int(10) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=3;
--
-- Constraints for dumped tables
--

--
-- Constraints for table `cook`
--
ALTER TABLE `cook`
ADD CONSTRAINT `cook_fk` FOREIGN KEY (`waiterID`) REFERENCES `waiter` (`waiterID`) ON UPDATE CASCADE;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
