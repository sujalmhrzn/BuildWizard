-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Oct 04, 2023 at 03:35 PM
-- Server version: 10.4.28-MariaDB
-- PHP Version: 8.0.28

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `buildwizard`
--

-- --------------------------------------------------------

--
-- Table structure for table `favourites`
--

CREATE TABLE `favourites` (
  `fid` int(11) NOT NULL,
  `pid` int(11) DEFAULT NULL,
  `uid` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `product`
--

CREATE TABLE `product` (
  `pid` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `description` text DEFAULT NULL,
  `max` decimal(10,2) DEFAULT NULL,
  `min` decimal(10,2) DEFAULT NULL,
  `category` varchar(20) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `product`
--

INSERT INTO `product` (`pid`, `name`, `description`, `max`, `min`, `category`) VALUES
(1, 'AMD Ryzen 9 7950X', 'AMD Ryzen 9 7950X CPU / 16 Cores / 32 Threads / 4.5GHz base / 5.7GHz boost / 170W TDP', 110000.00, 100000.00, 'cpu'),
(3, 'MSI GeForce GTX 1050 Ti Gaming X 4GB GDDR5', 'MSI GeForce GTX 1050 Ti Gaming X 4GB GDDR5', 26000.00, 20000.00, 'gpu'),
(4, 'Gigabyte GeForce GTX 1660 SUPER OC 6GB GDDR6', 'Gigabyte GeForce GTX 1660 SUPER OC 6GB GDDR6', 36000.00, 28000.00, 'gpu'),
(5, 'MSI GeForce GTX 1650 Gaming X 4GB GDDR5', 'MSI GeForce GTX 1650 Gaming X 4GB GDDR5', 40000.00, 30000.00, 'gpu'),
(6, 'MSI GeForce RTX 3050 Ventus 2X 8G OC 8GB GDDR6 128-bit Gaming Graphic Card', 'MSI GeForce RTX 3050 Ventus 2X 8G OC 8GB GDDR6 128-bit Gaming Graphic Card', 45000.00, 40000.00, 'gpu'),
(8, 'Intel Core I9-13900KF', 'Intel Core I9-13900KF', 95000.00, 85000.00, 'cpu'),
(9, 'AMD Ryzen 3 3300X', 'AMD Ryzen 3 3300X', 25000.00, 23000.00, 'cpu'),
(10, 'AMD RYZEN 5 3600', 'AMD RYZEN 5 3600', 28000.00, 25000.00, 'cpu'),
(11, 'AMD RYZEN 5 5600G', 'AMD RYZEN 5 5600G', 38000.00, 34000.00, 'cpu'),
(12, 'AMD RYZEN 5 3600X', 'AMD RYZEN 5 3600X', 32000.00, 27000.00, 'cpu'),
(13, 'AMD Ryzen 7 7700X', 'AMD Ryzen 7 7700X', 58000.00, 50000.00, 'cpu'),
(14, 'Intel 10th Gen i5', 'Intel 10th Gen i5', 30000.00, 24000.00, 'cpu'),
(15, 'CORSAIR DOMINATOR PLATINUM RGB DDR5 RAM', 'CORSAIR DOMINATOR PLATINUM RGB DDR5 RAM 32GB (2x16GB) 6400MHz\r\n', 28000.00, 24000.00, 'ram'),
(18, 'Corsair Vengeance DDR5 6000MHz 32GB (2x16GB)', 'Corsair Vengeance DDR5 6000MHz 32GB (2x16GB)', 40000.00, 35000.00, 'ram'),
(19, 'G.Skill RipJaws S5 32 GB', 'G.Skill RipJaws S5 32 GB (2 x 16 GB) DDR5 6000 MHz Black', 26000.00, 22000.00, 'ram'),
(20, 'G.SKILL Ripjaws V Series', 'G.SKILL Ripjaws V Series 16GB 8GBx2 3000Mhz', 16000.00, 13500.00, 'ram'),
(21, 'G.SKILL Trident Z Neo', 'G.SKILL Trident Z Neo 16GB 8GBX2 3000Mhz', 16000.00, 11000.00, 'ram'),
(22, 'G.SKILL Ripjaws V Series', 'G.SKILL Ripjaws V Series 8GB 4GBX2 DDR4 2800Mhz', 10000.00, 8000.00, 'ram'),
(23, 'ASRock B365M Phantom', 'ASRock B365M Phantom Gaming Micro ATX Motherboard', 17000.00, 15000.00, 'motherboard'),
(24, 'ASRock B450 Steel Legend', 'ASRock B450 Steel Legend', 20000.00, 17000.00, 'motherboard'),
(26, 'Asrock B550 Phantom', 'Asrock B550 Phantom', 22000.00, 18000.00, 'motherboard'),
(27, 'ASRock MB TRX40 Taichi ', 'ASRock MB TRX40 Taichi ', 98000.00, 90000.00, 'motherboard'),
(28, 'ASRock Intel Z690M', 'ASRock Z690M Phantom Gaming 4 DDR4 12th Gen Intel Micro-ATX Motherboard', 35000.00, 30000.00, 'motherboard'),
(29, 'ASRock B460M-ITX', 'ASRock B460M-ITX/ac Intel Socket 1200 Motherboard With Wi-Fi', 23500.00, 20000.00, 'motherboard'),
(32, 'CRYORIG H7 CPU Air Cooler', 'CRYORIG H7 CPU Air Cooler, Compatibility 1150, 1151, 1155, 1156 FM1, FM2/+, AM2/+, AM3/+, AM4\r\n', 7000.00, 6000.00, 'cooler'),
(33, 'DeepCool AK400 ', 'DeepCool AK400 CPU cooler', 4500.00, 3500.00, 'cooler'),
(34, 'CRYORIG M9I CPU Air Cooler', 'CRYORIG M9I CPU Air Cooler', 4200.00, 3500.00, 'cooler'),
(35, 'Deepcool AK500 ZERO DARK', 'Deepcool AK500 ZERO DARK', 12000.00, 9000.00, 'cooler'),
(36, 'CRYORIG A40 Ultimate Hybrid Liquid Cooler', 'CRYORIG A40 Ultimate Hybrid Liquid Cooler 240mm x 38mm Thick Radiator with Additional Airflow Fan', 20000.00, 17000.00, 'cooler'),
(37, 'SAMSUNG 990 PRO M.2 2280 2TB Gen 4 NVMe V-NAND SSD', 'The flagship 990 PRO and 990 PRO with heatsink is a premium NVMe Gen 4 internal SSD providing the best gaming experience with ultimate power efficiency and thermal control solutions.', 44000.00, 38000.00, 'storage'),
(38, 'OCPC High Performance 512 GB SSD M.2 NVMe', 'Upgrade your Laptop/Desktop system storage with Black Label M.2 NVMe SSD, a small M.2 form factor SSD.  This is the ideal solution to speed up your data and loading time for everyday gaming and work on your notebooks, miniPCs, or desktop systems.', 11000.00, 7000.00, 'storage'),
(39, 'OCPC High Performance 256GB SSD M.2 PCIe NVMe', 'OCPC High Performance 256GB SSD M.2 PCIe NVMe Gen3x4 HP With HEATSINK', 5500.00, 4500.00, 'storage'),
(40, 'OCPC XTREME 512GB SSD 2.5″ SATA III', 'OCPC XTREME 512GB SSD 2.5″ SATA III\r\n\r\nModule Type:2.5″ Internal SSD\r\nModule Size :512GB\r\nController: SM2258XT\r\nFlash Type:3D-TLC\r\nRead Speed: Max up to 500MB/s\r\nWrite Speed :Max up to 450MB/s', 7500.00, 6000.00, 'storage'),
(41, 'MSI MPG A750GF 750 W ATX 80 PLUS GOLD Certified Full Modular Power Supply', 'MSI MPG A750GF Gaming Power Supply – Full Modular – 80 PLUS Gold Certified 750W – 100% Japanese 105°C Capacitors – Compact Size – ATX PSU', 18000.00, 16500.00, 'psu'),
(42, 'NZXT C650 Bronze 650 Watt PSU 80 Plus Bronze Certified Semi Modular ATX', 'NZXT C650 Bronze – PA-6B1BB-US – 650 Watt PSU – 80 Plus Bronze Certified – DC-DC technology – Semi Modular Design – Sleeved Cables – ATX Gaming Power Supply', 14000.00, 12800.00, 'psu'),
(43, 'SilverStone Tek 750W 80 Plus Gold Quiet Fan Cable Power Supply ET750-G', 'SilverStone Tek 750W 80 Plus Gold Fixed Cable Power Supply with Flat Black Cables and Quiet Fan Curve SST-ET750-G\r\n\r\n750 Watt Max. DC Output. High efficiency with 80 PLUS Gold certification\r\n24/7 continuous power output with 40℃ operating temperature', 22000.00, 17000.00, 'psu'),
(44, 'Cooler Master MWE GOLD 1050 – V2 1050 Watt Full Modular 80 PLUS GOLD Power Supply', 'Cooler Master MWE Gold 1050 V2 Fully Modular, 1050W, 80+ Gold Efficiency, Quiet 140mm FDB Fan, 2 EPS Connectors, High Temperature Resilience Power Supply\r\n\r\n80 PLUS Gold Efficiency', 40000.00, 35000.00, 'psu'),
(45, 'Aigo darkFlash J3 ATX Case With N380 Power Supply (Black)', 'Aigo darkFlash J3 ATX Case With N380 Power Supply \r\n\r\nSupport ATX, m-ATX, ITX Mobo', 4000.00, 3800.00, 'case'),
(46, 'darkFlash DLM21 Mesh MATX PC Case White', 'darkFlash DLM21 Mesh MATX PC Case White\r\n\r\n● Hinge-connected side panel for easy excess.\r\n● Hard disk bay and power supply located at the bottom for better airflow.', 9000.00, 8000.00, 'case'),
(47, 'darkFlash DLM21 Mesh MATX PC Case Black', 'darkFlash DLM21 Mesh MATX PC Case Black\r\n\r\n● Hinge-connected side panel for easy excess.\r\n● Hard disk bay and power supply located at the bottom for better airflow.', 9000.00, 7500.00, 'case'),
(48, 'darkFlash DK151 ATX PC Case Black', 'darkFlash DK151 ATX PC Case Black\r\n\r\n● Changeable LED lighting on the front panel\r\n● Tempered glass side panel fastened with thumbscrews', 8000.00, 7000.00, 'case');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `u_name` varchar(50) DEFAULT NULL,
  `u_password` varchar(255) DEFAULT NULL,
  `u_email` varchar(50) DEFAULT NULL,
  `uid` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`u_name`, `u_password`, `u_email`, `uid`) VALUES
('amit', 'amit1234', 'amit@gmail.com', 1);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `favourites`
--
ALTER TABLE `favourites`
  ADD PRIMARY KEY (`fid`);

--
-- Indexes for table `product`
--
ALTER TABLE `product`
  ADD PRIMARY KEY (`pid`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`uid`),
  ADD UNIQUE KEY `u_email` (`u_email`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `favourites`
--
ALTER TABLE `favourites`
  MODIFY `fid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `product`
--
ALTER TABLE `product`
  MODIFY `pid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=49;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `uid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;