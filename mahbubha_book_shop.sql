-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: Mar 08, 2024 at 11:51 PM
-- Server version: 10.6.17-MariaDB
-- PHP Version: 7.4.33

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `mahbubha_book_shop`
--

-- --------------------------------------------------------

--
-- Table structure for table `cart`
--

CREATE TABLE `cart` (
  `id` int(100) NOT NULL,
  `user_id` int(100) NOT NULL,
  `name` varchar(100) NOT NULL,
  `price` int(100) NOT NULL,
  `quantity` int(100) NOT NULL,
  `image` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `message`
--

CREATE TABLE `message` (
  `id` int(100) NOT NULL,
  `user_id` int(100) NOT NULL,
  `name` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `number` varchar(12) NOT NULL,
  `message` varchar(500) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `orders`
--

CREATE TABLE `orders` (
  `id` int(100) NOT NULL,
  `user_id` int(100) NOT NULL,
  `name` varchar(100) NOT NULL,
  `number` varchar(12) NOT NULL,
  `email` varchar(100) NOT NULL,
  `method` varchar(50) NOT NULL,
  `address` varchar(500) NOT NULL,
  `total_products` varchar(1000) NOT NULL,
  `total_price` int(100) NOT NULL,
  `placed_on` varchar(50) NOT NULL,
  `payment_status` varchar(20) NOT NULL DEFAULT 'pending'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `orders`
--

INSERT INTO `orders` (`id`, `user_id`, `name`, `number`, `email`, `method`, `address`, `total_products`, `total_price`, `placed_on`, `payment_status`) VALUES
(10, 4, 'ASHFIKUR RAHMAN ', '22', 'ashfikurrahman341@gmail.com', 'cash on delivery', 'flat no. 555, Ytg, Vgh, Hhhs - 55551', ', নিবিড় গণিত (1) , অঙ্ক ভাইয়া (1) , ভাল্লাগে না (33) ', 5986, '24-Jan-2024', 'pending'),
(11, 6, 'Nidhgiih', '04543487', 'udjdhd@hfjfjfjj', 'cash on delivery', 'flat no. 64, jfi, hdisodj, bdjdjd - 642557', ', অঙ্ক ভাইয়া (1) ', 176, '24-Jan-2024', 'pending'),
(13, 7, 'Mahbub Hasan Abid', '2222222', 'a@gmail.com', 'cash on delivery', 'flat no. 11111, Rajbari,Dhaka, dhaka, Bangladesh - 1203', ', Bash And LUCY (1) , BE WELL BEE (4) ', 609, '25-Jan-2024', 'pending'),
(14, 8, 'AR Dhrubo', '23423423', '23423423@gdff.com', 'cash on delivery', 'flat no. 34234, 10/a,Muktijoddhas tower-1, College Gate, Mohammadpur(Dhaka), Bangladesh - 1209', ', 5 (1) , অঙ্ক ভাইয়া (5) ', 885, '27-Jan-2024', 'pending'),
(15, 7, 'Mahbub Hasan Abid', '12', 'm@gmail.com', 'credit card', 'flat no. 44, Rajbari,Dhaka, dhaka, Bangladesh - 1203', ', 5 (1) ', 5, '11-Feb-2024', 'pending'),
(16, 7, 'Mahbub Hasan Abid', '44', 'm@gmail.com', 'cash on delivery', 'flat no. 55, Rajbari,Dhaka, dhaka, Bangladesh - 1203', ', নিবিড় গণিত (1) ', 200, '11-Feb-2024', 'pending'),
(17, 7, 'Mahbub Hasan Abid', '-5', 'm@gmail.com', 'bkash', 'flat no. 2, Rajbari,Dhaka, dhaka, Bangladesh - 1203', ', অঙ্ক ভাইয়া (111) ', 19536, '23-Feb-2024', 'pending');

-- --------------------------------------------------------

--
-- Table structure for table `products`
--

CREATE TABLE `products` (
  `id` int(100) NOT NULL,
  `name` varchar(100) NOT NULL,
  `price` int(100) NOT NULL,
  `image` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `products`
--

INSERT INTO `products` (`id`, `name`, `price`, `image`) VALUES
(1, 'নিবিড় গণিত', 200, 'book_1.jpg'),
(2, 'অঙ্ক ভাইয়া', 176, 'book_2.jpg'),
(3, 'ভাল্লাগে না', 170, 'book_3.jpg'),
(4, 'আমার এক নদীর জীবন', 229, 'book_4.jpg'),
(12, '5', 5, 'red_queen.jpg'),
(17, 'Bash And LUCY', 200, 'bash_and_lucy-2.jpg'),
(18, 'BE WELL BEE', 80, 'be_well_bee.jpg'),
(19, 'Red Queen', 700, 'red_queen.jpg'),
(20, 'The Word Of Abstract Art', 300, 'the_world.jpg'),
(21, 'Happy Lemon', 33, 'the_happy_lemon.jpg'),
(22, 'The Girl Of INK & Stars', 300, 'the_girl_of_ink_and_stars.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(100) NOT NULL,
  `name` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `password` varchar(100) NOT NULL,
  `user_type` varchar(20) NOT NULL DEFAULT 'user'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `password`, `user_type`) VALUES
(1, 'Mahbub Hasan Abid', 'a@gmail.com', '0cc175b9c0f1b6a831c399e269772661', 'admin'),
(2, 'sgdhuarei', 'iamfahimfaisal39@gmail.com', '25d55ad283aa400af464c76d713c07ad', 'user'),
(3, 'mmm', 'roman@gmail.com', 'b179a9ec0777eae19382c14319872e1b', 'user'),
(4, 'ASHFIKUR RAHMAN ', 'ashfikur18@cse.pstu.ac.bd', '5985894a23c7253f93a76ab4d9eab0d6', 'user'),
(5, 'shij', 'ueudh@undjdk.co', '1bbd886460827015e5d605ed44252251', 'user'),
(6, 'dhjdjj', 'nn@j.com', '1bbd886460827015e5d605ed44252251', 'user'),
(7, 'm', 'm@gmail.com', '6f8f57715090da2632453988d9a1501b', 'user'),
(8, 'bie kor', 'biekorbo@gmail.com', '84e7aaaea8061674652429ca65c536a0', 'user'),
(9, 'Al fahad', 'muhammadalfahad557@gmail.com', '81dc9bdb52d04dc20036dbd8313ed055', 'user');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `cart`
--
ALTER TABLE `cart`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `message`
--
ALTER TABLE `message`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `orders`
--
ALTER TABLE `orders`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `products`
--
ALTER TABLE `products`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `cart`
--
ALTER TABLE `cart`
  MODIFY `id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=73;

--
-- AUTO_INCREMENT for table `message`
--
ALTER TABLE `message`
  MODIFY `id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `orders`
--
ALTER TABLE `orders`
  MODIFY `id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;

--
-- AUTO_INCREMENT for table `products`
--
ALTER TABLE `products`
  MODIFY `id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=23;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
