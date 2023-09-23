-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Sep 23, 2023 at 10:18 AM
-- Server version: 10.4.25-MariaDB
-- PHP Version: 8.1.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `electro`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `a_id` int(11) NOT NULL,
  `email` varchar(200) NOT NULL,
  `password` varchar(500) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`a_id`, `email`, `password`) VALUES
(1, 'anjali13@gmail.com', 'a@123'),
(2, 'jp25122002@gmail.com', 'j@123');

-- --------------------------------------------------------

--
-- Table structure for table `cart`
--

CREATE TABLE `cart` (
  `cart_id` int(2) NOT NULL,
  `r_id` int(5) NOT NULL,
  `mobile` varchar(255) DEFAULT NULL,
  `qty` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `cart`
--

INSERT INTO `cart` (`cart_id`, `r_id`, `mobile`, `qty`) VALUES
(21, 24, '[\"23\"]', '[1]'),
(22, 32, '[\"24\"]', '[2]'),
(23, 31, '[\"22\"]', '[1]'),
(26, 28, '[\"23\",\"22\",\"32\",\"33\"]', '[2,2,2,1]'),
(27, 33, '[\"23\"]', '[1]');

-- --------------------------------------------------------

--
-- Table structure for table `category`
--

CREATE TABLE `category` (
  `c_id` int(2) NOT NULL,
  `p_id` int(2) NOT NULL,
  `l_id` int(2) NOT NULL,
  `lp_id` int(2) NOT NULL,
  `cname` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `contant`
--

CREATE TABLE `contant` (
  `con_id` int(2) NOT NULL,
  `r_id` int(2) NOT NULL,
  `name` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `message` varchar(100) NOT NULL,
  `contact` decimal(12,0) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `contant`
--

INSERT INTO `contant` (`con_id`, `r_id`, `name`, `email`, `message`, `contact`) VALUES
(1, 28, 'anjali', 'anjali13@gmail.com', 'jay patel ', '7016156182'),
(2, 28, 'anjali', 'anjali13@gmail.com', 'jay patel ', '7016156182'),
(3, 33, 'anjali', 'jay23@gmail.com', 'aaaa', '1233'),
(4, 33, 'anjali', 'jay23@gmail.com', 'aaaa', '1233');

-- --------------------------------------------------------

--
-- Table structure for table `laptop`
--

CREATE TABLE `laptop` (
  `lp_id` int(2) NOT NULL,
  `name` varchar(30) NOT NULL,
  `model` varchar(30) NOT NULL,
  `price` int(6) NOT NULL,
  `des` varchar(100) NOT NULL,
  `img` varchar(500) NOT NULL,
  `img1` varchar(100) NOT NULL,
  `img2` varchar(100) NOT NULL,
  `img3` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `laptop`
--

INSERT INTO `laptop` (`lp_id`, `name`, `model`, `price`, `des`, `img`, `img1`, `img2`, `img3`) VALUES
(1, 'hp', 'hp 15', 50000, 'good and lighweight laptop.', '', '', '', ''),
(2, 'dell', '23', 2435, '            lurdgflds,', 'images/h.jpg', '', '', ''),
(3, 'hp', '34', 89000, '            lasjhsfdvfkjhugsdfdladj', 'images/hp_15.jpg', '', '', ''),
(4, 'dell', 'Sony Bravia 108 cm (43 inches)', 333, '', 'images/acer_1.jpg', '', '', ''),
(5, 'dhvani', 'Sony Bravia 108 cm (43 inches)', 45256, 'fdvbfd', 'images/le_4.jpg', 'images/led.jpg', 'images/oneplus.jpg', 'images/le_3.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `led`
--

CREATE TABLE `led` (
  `l_id` int(2) NOT NULL,
  `name` varchar(50) NOT NULL,
  `model` varchar(50) NOT NULL,
  `price` int(10) NOT NULL,
  `des` varchar(1000) NOT NULL,
  `img` varchar(500) NOT NULL,
  `img1` varchar(100) NOT NULL,
  `img2` varchar(100) NOT NULL,
  `img3` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `led`
--

INSERT INTO `led` (`l_id`, `name`, `model`, `price`, `des`, `img`, `img1`, `img2`, `img3`) VALUES
(1, 'lg', 'LG 121 cm (48 inches) 4K Ultra HD Smart OLED TV 48', 75990, '  Dolby Vision IQ & Dolby Atmos | Built-in Amazon Alexa & Google Assistant | Apple Airplay & Homekit | WebOS 22 with User Profiles | AI Sound Pro (virtual 5.1.2 surround sound) | Game Dashboard & Optimizer, HGiG, ALLM, 0.1 ms Response Time | Eye Comfort Display: Low-Blue Light, Flicker-Free, Discomfort Glare-free', 'images/lg__.jpg', '', '', ''),
(2, 'sony', 'Sony Bravia 139 cm (55 inches) XR series 4K Ultra ', 124990, '            Built-In Speaker, Smart TV, Voice Assistant.. Browser1 LED TV, 1 Warranty Card, 1 AC Power Cord, 1 Remote Control, 1 Table-Top Stand, 1 User Manual, 2 AAA Batteries1 LED TV, 1 Warranty Card, 1 AC Power Cord, 1 Remote Control, 1 Table-Top Stand, 1 User Manual, 2 AAA Batteries', 'images/sony_oled.jpg', '', '', ''),
(3, 'LED', 'Samsung 108 cm (43 inches) 4K Ultra HD Smart LED T', 555, '', 'images/le_4.jpg', '', '', '');

-- --------------------------------------------------------

--
-- Table structure for table `phone`
--

CREATE TABLE `phone` (
  `p_id` int(2) NOT NULL,
  `name` varchar(30) NOT NULL,
  `model` varchar(100) NOT NULL,
  `price` int(6) NOT NULL,
  `des` varchar(500) NOT NULL,
  `img` varchar(500) NOT NULL,
  `img1` varchar(100) NOT NULL,
  `img2` varchar(100) NOT NULL,
  `img3` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `phone`
--

INSERT INTO `phone` (`p_id`, `name`, `model`, `price`, `des`, `img`, `img1`, `img2`, `img3`) VALUES
(22, 'Apple', 'Apple iPhone 14 Pro Max (256 G', 143990, ' A16 Bionic chip,6-core CPU with 2 performance cores and 4 efficiency cores, 5-core GPU, 16-core Neural Engine.\r\nPro 48MP camera system (Ultra Wide, Wide, and Telephoto)\r\n6.7-inch Super Retina XDR display with ProMotion', 'images/p1_1_1.jpg', 'images/p1_1_3.jpg', 'images/p1_1_2.jpg', 'images/p1_1_4.jpg'),
(23, 'Samsung', 'Samsung Galaxy S23 Ultra 5G (Green, 12GB, 256GB Storage)', 124999, 'Screen : 6.8” Dynamic AMOLED 2X Infinity-O QHD+ Edge Screen. 120Hz Adaptive Refresh Rate. Storage : 12GB Memory | 256GB / 512GB / 1TB Storage. Main Camera : 200MP Wide. Front Camera: 12MP.\r\n\r\n', 'images/p2_1.jpg', 'images/p2_2.jpg', 'images/p2_3.jpg', 'images/p2_4.jpg'),
(24, 'Oneplus', 'OnePlus 11 5G (Titan Black, 16GB RAM, 256GB Storage)', 61999, 'Camera : 50MP Main Camera with Sony IMX890 (OIS supported), 48MP Ultrawide Camera with Sony IMX581 (FOV: 115 degree) and 32MP Telephoto lens with Sony IMX709 (2X Optical Zoom); 16MP Front (Selfie) Camera with EIS support.  Operating System : OxygenOS based on Android 13.  Processor : Snapdragon 8 Gen 2 Mobile Platform. 16GB LPDDR5X RAM, 256 GB UFS4.0 Storage', 'images/p3_1.jpg', 'images/p3_2.jpg', 'images/p3_3.jpg', 'images/p3_4.jpg'),
(25, 'Vivo', 'vivo X80 Pro Cosmic Black (256 GB | 12 GB RAM) ', 86999, 'Os : ‎FunTouch OS 12.   RAM : 12 GB.  Special features : ‎Front Camera, Camera, Fast Charging.  \r\nDisplay technology : AMOLED.\r\n  Other display features : Wireless               ', 'images/p4_3.jpg', 'images/p4_2.jpg', 'images/p4_1.jpg', 'images/p4_4.jpg'),
(29, 'OnePlus', 'OnePlus Nord 3 5G ', 37999, '  Camera: 50MP Main Camera with Sony IMX890 (OIS supported), 8MP Ultrawide Camera with Sony IMX355 (FOV: 112 degree) and 2MP Macro lens f/2.4 and a FOV 89°; 16MP Front (Selfie) Camera with EIS supported \r\nOperating System: OxygenOS based on Android 13.1\r\nProcessor: MediaTek Dimensity 9000 Chipset (Based 4nm Architecture)\r\nStorage: 8 GB + 128 GB | 16 GB + 256 GB; LPDDR5X RAM, UFS 3.1\r\n\r\n', 'images/indexone.jpg', 'images/p5_3.jpg', 'images/p5_2.jpg', 'images/p5_4.jpg'),
(32, 'Samsung', 'Samsung Galaxy Fold5 5G', 164999, 'Stands out. Stands up. Unfolds. The Galaxy Z Fold5 does a lot in one hand with its 15.73 cm(6.2-inch) Cover Screen. Unfolded, the 19.21 cm(7.6-inch) Main Screen lets you really get into the zone. Pushed-back bezels and the Under Display Camera means there\'s more screen and no black dot getting between you and the breathtaking Infinity Flex Display.', 'images/p6_1.jpg', 'images/p6_2.jpg', 'images/p6_3.jpg', 'images/p6_4.jpg'),
(33, 'Xiomi', 'Xiaomi 13 Pro', 79999, 'Screen Size:\r\n6.73 inches  Rear Camera: 50 MP GN5 OIS Camera + 8 MP Ultra Wide Angle + 13 MP Telephoto/ Portrait | Front Camera: 16 MP\r\nSnapdragon®️ 8 Gen 2 Mobile Platform\r\n', 'images/p7_1.jpg', 'images/p7_2.jpg', 'images/p7_3.jpg', 'images/p7_4.jpg'),
(34, 'Samsung', 'Samsung Galaxy Z Flip5 5G', 109999, 'Screen Type:\r\nIndicates the kind of technology used by the display to light-up the screenRAM determines how smooth is the switching between apps & the overall speed of operation. Higher the better.Operating System\r\nMain software that runs the phone. Defines the features offered by the phone\r\n', 'images/p8_1.jpg', 'images/p8_2.jpg', 'images/p8_3.jpg', 'images/p8_4.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `registration`
--

CREATE TABLE `registration` (
  `r_id` int(2) NOT NULL,
  `name` varchar(50) NOT NULL,
  `email` varchar(50) NOT NULL,
  `mobileno` decimal(12,0) NOT NULL,
  `address` varchar(200) NOT NULL,
  `password` varchar(15) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `registration`
--

INSERT INTO `registration` (`r_id`, `name`, `email`, `mobileno`, `address`, `password`) VALUES
(28, 'anjali', 'anjali13@gmail.com', '2147483647', 'Naroda', '12345678'),
(33, 'Anjali', 'anjalizala13@gmail.com', '2147483647', 'c-403,sheemleela,bhadaj', '12345678'),
(34, 'jay', 'jp25122002@gmail.com', '7016156182', 'c-403,sheemleela,bhadaj', 'jay@1234');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`a_id`);

--
-- Indexes for table `cart`
--
ALTER TABLE `cart`
  ADD PRIMARY KEY (`cart_id`);

--
-- Indexes for table `category`
--
ALTER TABLE `category`
  ADD PRIMARY KEY (`c_id`);

--
-- Indexes for table `contant`
--
ALTER TABLE `contant`
  ADD PRIMARY KEY (`con_id`),
  ADD KEY `r_id` (`r_id`);

--
-- Indexes for table `laptop`
--
ALTER TABLE `laptop`
  ADD PRIMARY KEY (`lp_id`);

--
-- Indexes for table `led`
--
ALTER TABLE `led`
  ADD PRIMARY KEY (`l_id`);

--
-- Indexes for table `phone`
--
ALTER TABLE `phone`
  ADD PRIMARY KEY (`p_id`);

--
-- Indexes for table `registration`
--
ALTER TABLE `registration`
  ADD PRIMARY KEY (`r_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
  MODIFY `a_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `cart`
--
ALTER TABLE `cart`
  MODIFY `cart_id` int(2) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=28;

--
-- AUTO_INCREMENT for table `category`
--
ALTER TABLE `category`
  MODIFY `c_id` int(2) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `contant`
--
ALTER TABLE `contant`
  MODIFY `con_id` int(2) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `laptop`
--
ALTER TABLE `laptop`
  MODIFY `lp_id` int(2) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `led`
--
ALTER TABLE `led`
  MODIFY `l_id` int(2) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `phone`
--
ALTER TABLE `phone`
  MODIFY `p_id` int(2) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=35;

--
-- AUTO_INCREMENT for table `registration`
--
ALTER TABLE `registration`
  MODIFY `r_id` int(2) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=35;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `contant`
--
ALTER TABLE `contant`
  ADD CONSTRAINT `contant_ibfk_1` FOREIGN KEY (`r_id`) REFERENCES `registration` (`r_id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
