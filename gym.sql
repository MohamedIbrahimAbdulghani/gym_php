-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Apr 10, 2023 at 08:33 PM
-- Server version: 10.4.27-MariaDB
-- PHP Version: 8.2.0

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `hpas`
--

-- --------------------------------------------------------

--
-- Table structure for table `customers`
--

CREATE TABLE `customers` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `phone` varchar(11) NOT NULL,
  `body_fat_mass` int(11) NOT NULL,
  `muscle_mass` int(11) NOT NULL,
  `total_body_water` int(11) NOT NULL,
  `height` float NOT NULL,
  `weight` float NOT NULL,
  `age` int(11) NOT NULL,
  `traineer_id` int(11) NOT NULL,
  `Email` varchar(50) NOT NULL,
  `Gender` varchar(50) NOT NULL,
  `password` varchar(50) NOT NULL,
  `Chronic_disease` varchar(225) NOT NULL,
  `id_tracking` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

--
-- Dumping data for table `customers`
--

INSERT INTO `customers` (`id`, `name`, `phone`, `body_fat_mass`, `muscle_mass`, `total_body_water`, `height`, `weight`, `age`, `traineer_id`, `Email`, `Gender`, `password`, `Chronic_disease`, `id_tracking`) VALUES
(1, 'Sohila Sameh', '01013145900', 6, 6, 20, 170, 68.8, 21, 1, '', '', '', '', 0),
(2, 'Amira Ramadan', '01015084521', 5, 5, 20, 170, 55, 21, 2, '', '', '', '', 0),
(3, 'Shereen Wagdy', '01029594387', 6, 5, 21, 170, 60, 21, 1, '', '', '', '', 0),
(4, 'Esraa Moustafa', '01019020582', 5, 6, 24, 176, 70, 22, 1, '', '', '', '', 0),
(5, 'Shimaa Omara', '01018454983', 4, 5, 26, 175, 65, 22, 1, '', '', '', '', 0),
(6, 'Aml Ahmed', '01030121623', 6, 5, 24, 156, 70, 21, 2, '', '', '', '', 0),
(7, 'Alaa Abdelaziz', '01019220616', 5, 3, 25, 160, 69, 21, 2, '', '', '', '', 0),
(8, 'Eman Abdelrahman', '01098157449', 6, 6, 26, 166, 71, 21, 2, '', '', '', '', 0),
(9, 'Abdelrahman Sabri', '01003063753', 6, 6, 21, 170, 65, 21, 1, '', '', '', '', 0),
(10, 'Ebrahim Elhusseiny', '01287058251', 4, 6, 30, 170, 65, 21, 1, '', '', '', '', 0),
(15, 'amira', '01012345678', 30, 20, 10, 170, 70, 22, 1, 'amira@gmail.com', 'female', '1234567', '', 0),
(16, 'aya', '0101236566', 40, 50, 15, 160, 70, 22, 1, 'aya@gmil.com', 'female', '123', '', 0),
(17, 'aya', '0101236566', 40, 50, 15, 160, 70, 22, 1, 'aya@gmil.com', 'female', '123', 'sd', 0),
(18, 'mahmoud', '01004789', 40, 17, 15, 189, 80, 22, 1, 'mahmoud@gmail.com', 'male', '147', 'mmm', 0);

-- --------------------------------------------------------

--
-- Table structure for table `sections`
--

CREATE TABLE `sections` (
  `id_section` int(11) NOT NULL,
  `name_sec` varchar(255) NOT NULL,
  `code_nutrition` int(11) NOT NULL,
  `code_body building` int(11) NOT NULL,
  `traineer_id` int(11) NOT NULL,
  `customer_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

--
-- Dumping data for table `sections`
--

INSERT INTO `sections` (`id_section`, `name_sec`, `code_nutrition`, `code_body building`, `traineer_id`, `customer_id`) VALUES
(1, 'Nutrition', 201, 101, 1, 1),
(2, 'Nutrition', 201, 101, 2, 2),
(3, 'Nutrition', 201, 101, 1, 3),
(4, 'Nutrition', 201, 101, 1, 4),
(5, 'Nutrition', 201, 101, 1, 5),
(6, 'Nutrition', 201, 101, 2, 6),
(7, 'Nutrition', 201, 101, 2, 7),
(8, 'Nutrition', 201, 101, 2, 8),
(9, 'Body Building', 201, 101, 1, 9),
(10, 'Body Building', 201, 101, 1, 10);

-- --------------------------------------------------------

--
-- Table structure for table `services`
--

CREATE TABLE `services` (
  `id` int(11) NOT NULL,
  `code_video` varchar(100) NOT NULL,
  `communicate` varchar(255) NOT NULL,
  `tracking followed` varchar(255) NOT NULL,
  `customer_id` int(11) NOT NULL,
  `traineer_id` int(11) NOT NULL,
  `section_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

--
-- Dumping data for table `services`
--

INSERT INTO `services` (`id`, `code_video`, `communicate`, `tracking followed`, `customer_id`, `traineer_id`, `section_id`) VALUES
(1, 'Video 1 (Nutrition)', 'Facebook', 'Nutrition and Diet', 1, 1, 1),
(2, 'Video 1 & 2 (Nutrition)', 'Whatsapp', 'Nutrition and Diet', 2, 2, 2),
(3, 'Video 3 (Nutrition)', 'Whatsapp', 'Nutrition and Diet', 3, 1, 3),
(4, 'Video 1&3 (Nutrition)', 'Instagram', 'Nutrition and Diet', 4, 1, 4),
(5, 'Video 5 (Nutrition)', 'Phone', 'Nutrition & Diet', 5, 1, 5),
(6, 'Video 5 (Nutrition)', 'Facebook', 'Nutrition & Diet', 6, 2, 6),
(7, 'NO needed', 'Private', 'Nutrition & Diet', 7, 2, 7),
(8, 'No Needed', 'Private', 'Nutrition & Diet', 8, 2, 8),
(9, 'Video 1 & 2 ( Body Building)', 'Facebook', 'Body Building & Fat followed', 9, 1, 9),
(10, 'No Needed', 'Private', 'Body Building ,Fat followed & Live Videos', 10, 1, 10);

-- --------------------------------------------------------

--
-- Table structure for table `tracking followed`
--

CREATE TABLE `tracking followed` (
  `Id tracking` int(11) NOT NULL,
  `Report` varchar(225) NOT NULL,
  `id_customer` int(11) NOT NULL,
  `id_traineer` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `traineers`
--

CREATE TABLE `traineers` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `phone` varchar(11) NOT NULL,
  `Id tracking` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

--
-- Dumping data for table `traineers`
--

INSERT INTO `traineers` (`id`, `name`, `phone`, `Id tracking`) VALUES
(1, 'Khaled Elnaggar', '96650701177', 0),
(2, 'Ibrahim Elhusseiny', '01287058251', 0);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `customers`
--
ALTER TABLE `customers`
  ADD PRIMARY KEY (`id`),
  ADD KEY `customers_ibfk_1` (`traineer_id`),
  ADD KEY `id_tracking` (`id_tracking`);

--
-- Indexes for table `sections`
--
ALTER TABLE `sections`
  ADD PRIMARY KEY (`id_section`),
  ADD KEY `traineer_id` (`traineer_id`),
  ADD KEY `customer_id` (`customer_id`);

--
-- Indexes for table `services`
--
ALTER TABLE `services`
  ADD PRIMARY KEY (`id`),
  ADD KEY `customer_id` (`customer_id`),
  ADD KEY `traineer_id` (`traineer_id`),
  ADD KEY `section_id` (`section_id`);

--
-- Indexes for table `tracking followed`
--
ALTER TABLE `tracking followed`
  ADD PRIMARY KEY (`Id tracking`),
  ADD KEY `id_customer` (`id_customer`),
  ADD KEY `id traineer` (`id_traineer`),
  ADD KEY `id_traineer` (`id_traineer`);

--
-- Indexes for table `traineers`
--
ALTER TABLE `traineers`
  ADD PRIMARY KEY (`id`),
  ADD KEY `Id tracking` (`Id tracking`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `customers`
--
ALTER TABLE `customers`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;

--
-- AUTO_INCREMENT for table `sections`
--
ALTER TABLE `sections`
  MODIFY `id_section` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `services`
--
ALTER TABLE `services`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `tracking followed`
--
ALTER TABLE `tracking followed`
  MODIFY `Id tracking` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `traineers`
--
ALTER TABLE `traineers`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=22014;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `customers`
--
ALTER TABLE `customers`
  ADD CONSTRAINT `customers_ibfk_1` FOREIGN KEY (`traineer_id`) REFERENCES `traineers` (`id`);

--
-- Constraints for table `sections`
--
ALTER TABLE `sections`
  ADD CONSTRAINT `sections_ibfk_1` FOREIGN KEY (`traineer_id`) REFERENCES `traineers` (`id`),
  ADD CONSTRAINT `sections_ibfk_2` FOREIGN KEY (`customer_id`) REFERENCES `customers` (`id`);

--
-- Constraints for table `services`
--
ALTER TABLE `services`
  ADD CONSTRAINT `services_ibfk_1` FOREIGN KEY (`traineer_id`) REFERENCES `traineers` (`id`),
  ADD CONSTRAINT `services_ibfk_2` FOREIGN KEY (`customer_id`) REFERENCES `customers` (`id`),
  ADD CONSTRAINT `services_ibfk_3` FOREIGN KEY (`section_id`) REFERENCES `sections` (`id_section`);

--
-- Constraints for table `tracking followed`
--
ALTER TABLE `tracking followed`
  ADD CONSTRAINT `tracking followed_ibfk_1` FOREIGN KEY (`id_customer`) REFERENCES `customers` (`id`),
  ADD CONSTRAINT `tracking followed_ibfk_2` FOREIGN KEY (`id_traineer`) REFERENCES `traineers` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
