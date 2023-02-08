-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Feb 07, 2023 at 09:56 AM
-- Server version: 10.4.22-MariaDB
-- PHP Version: 8.1.1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `cinema_g6`
--

-- --------------------------------------------------------

--
-- Table structure for table `booking`
--

CREATE TABLE `booking` (
  `booking_id` int(11) NOT NULL,
  `number_seat` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `show_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `cinema`
--

CREATE TABLE `cinema` (
  `cinema_id` int(11) NOT NULL,
  `cinema_name` varchar(100) NOT NULL,
  `total_hall` int(11) NOT NULL,
  `address` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `halls`
--

CREATE TABLE `halls` (
  `hall_id` int(11) NOT NULL,
  `hall_name` varchar(100) NOT NULL,
  `total_seat` int(11) NOT NULL,
  `cinema_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `movies`
--

CREATE TABLE `movies` (
  `movie_id` int(11) NOT NULL,
  `title` varchar(100) NOT NULL,
  `description` varchar(200) NOT NULL,
  `language` varchar(50) NOT NULL,
  `releast_date` varchar(100) NOT NULL,
  `duration` time NOT NULL,
  `picture` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `movies`
--

INSERT INTO `movies` (`movie_id`, `title`, `description`, `language`, `releast_date`, `duration`, `picture`) VALUES
(1, 'COCO', 'In Disney•Pixar’s vibrant tale of family, fun and adventure, an aspiring young musician named Miguel (voice of newcomer Anthony Gonzalez) embarks on an extraordinary journey to the magical land of his', 'English', '03 February 2023', '03:17:02', 'https://lumiere-a.akamaihd.net/v1/images/p_coco_19736_fd5fa537.jpeg'),
(2, 'Lu Ca', '644 / 5,000\r\nTranslation results\r\nTranslation result\r\nSet in a beautiful coastal town on the Italian Riviera, Disney and Pixar\'s feature film \"Luca\" tells the story of a young boy who experiences an u', 'English', '04 February 2023', '02:17:02', 'https://lumiere-a.akamaihd.net/v1/images/image_2ff75a5c.jpeg?region=0%2C0%2C540%2C810'),
(3, 'Elementaire', 'Dans la ville d’Element City, le feu, l’eau, la terre et l’air vivent dans la plus parfaite harmonie. C’est ici que résident Flam, une jeune femme intrépide et vive d’esprit, au caractère bien trempé,', 'English', '04 March 2023', '02:30:30', 'https://lumiere-a.akamaihd.net/v1/images/image_968ab1e0.jpeg?region=0,0,540,810'),
(4, 'Avalonia', 'Avalonia, The Strange Journey, the action-packed comedy-adventure from Walt Disney Animation Studios, takes us on a journey through three generations of the legendary Clade family as they try to unite', 'English', '05 March 2023', '03:30:30', 'https://lumiere-a.akamaihd.net/v1/images/image_539d613c.jpeg?region=0%2C0%2C540%2C810');

-- --------------------------------------------------------

--
-- Table structure for table `payments`
--

CREATE TABLE `payments` (
  `payment_id` int(11) NOT NULL,
  `amount` varchar(100) NOT NULL,
  `name_on_card` varchar(100) NOT NULL,
  `booking` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `shows`
--

CREATE TABLE `shows` (
  `show_id` int(11) NOT NULL,
  `start_date` varchar(100) NOT NULL,
  `end_date` varchar(100) NOT NULL,
  `format` varchar(20) NOT NULL,
  `subtitle` varchar(100) NOT NULL,
  `movie_id` int(11) NOT NULL,
  `cinema_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `shows`
--

INSERT INTO `shows` (`show_id`, `start_date`, `end_date`, `format`, `subtitle`, `movie_id`, `cinema_id`) VALUES
(1, '02 February 2023 08:44:24', '02 February 2023 08:44:24', '2D', 'English', 1, 1),
(2, '03 February 2023 08:44:24', '03 February 2023 2023-02-07 08:44:24', '2D', 'English', 2, 2),
(3, '05 February 2023  08:45:39', '05 February 2023 08:45:39', 'Sreen x', 'English', 3, 3),
(4, '05 February 2023  08:45:39', '05 February 2023  08:45:39', '3D', 'English', 4, 4);

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `user_id` int(11) NOT NULL,
  `first_name` varchar(20) NOT NULL,
  `last_name` varchar(20) NOT NULL,
  `email` varchar(100) NOT NULL,
  `password` varchar(255) NOT NULL,
  `user_type` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`user_id`, `first_name`, `last_name`, `email`, `password`, `user_type`) VALUES
(1, 'my', 'admin', 'sreypokd@gmail.com', 'helloword@123', 'admin');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `booking`
--
ALTER TABLE `booking`
  ADD PRIMARY KEY (`booking_id`),
  ADD KEY `show_id` (`show_id`),
  ADD KEY `user_id` (`user_id`);

--
-- Indexes for table `cinema`
--
ALTER TABLE `cinema`
  ADD PRIMARY KEY (`cinema_id`);

--
-- Indexes for table `halls`
--
ALTER TABLE `halls`
  ADD PRIMARY KEY (`hall_id`),
  ADD KEY `cinema_id` (`cinema_id`);

--
-- Indexes for table `movies`
--
ALTER TABLE `movies`
  ADD PRIMARY KEY (`movie_id`);

--
-- Indexes for table `payments`
--
ALTER TABLE `payments`
  ADD PRIMARY KEY (`payment_id`),
  ADD KEY `booking` (`booking`);

--
-- Indexes for table `shows`
--
ALTER TABLE `shows`
  ADD PRIMARY KEY (`show_id`),
  ADD KEY `cinema_id` (`cinema_id`),
  ADD KEY `movie_id` (`movie_id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`user_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `booking`
--
ALTER TABLE `booking`
  MODIFY `booking_id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `cinema`
--
ALTER TABLE `cinema`
  MODIFY `cinema_id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `halls`
--
ALTER TABLE `halls`
  MODIFY `hall_id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `movies`
--
ALTER TABLE `movies`
  MODIFY `movie_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `payments`
--
ALTER TABLE `payments`
  MODIFY `payment_id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `shows`
--
ALTER TABLE `shows`
  MODIFY `show_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `user_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `booking`
--
ALTER TABLE `booking`
  ADD CONSTRAINT `booking_ibfk_1` FOREIGN KEY (`show_id`) REFERENCES `booking` (`booking_id`),
  ADD CONSTRAINT `booking_ibfk_2` FOREIGN KEY (`user_id`) REFERENCES `booking` (`booking_id`);

--
-- Constraints for table `halls`
--
ALTER TABLE `halls`
  ADD CONSTRAINT `halls_ibfk_1` FOREIGN KEY (`cinema_id`) REFERENCES `halls` (`hall_id`);

--
-- Constraints for table `payments`
--
ALTER TABLE `payments`
  ADD CONSTRAINT `payments_ibfk_1` FOREIGN KEY (`booking`) REFERENCES `payments` (`payment_id`);

--
-- Constraints for table `shows`
--
ALTER TABLE `shows`
  ADD CONSTRAINT `shows_ibfk_1` FOREIGN KEY (`cinema_id`) REFERENCES `shows` (`show_id`),
  ADD CONSTRAINT `shows_ibfk_2` FOREIGN KEY (`movie_id`) REFERENCES `shows` (`show_id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
