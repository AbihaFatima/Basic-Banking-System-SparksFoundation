-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jun 20, 2021 at 11:43 AM
-- Server version: 10.4.19-MariaDB
-- PHP Version: 8.0.7

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `banking_system`
--

-- --------------------------------------------------------

--
-- Table structure for table `transfer`
--

CREATE TABLE `transfer` (
  `sid` int(11) NOT NULL,
  `sender` varchar(12) NOT NULL,
  `receiver` varchar(12) NOT NULL,
  `amount` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `transfer`
--

INSERT INTO `transfer` (`sid`, `sender`, `receiver`, `amount`) VALUES
(1, 'Yasmeen', 'Shoeib', 200),
(2, 'Huda', 'Hrithik', 100),
(3, 'Rimsha', 'Soha', 150),
(4, 'Hrithik', 'Innama', 50),
(0, 'Aneeqa', 'Noora', 100),
(0, 'Aneeqa', 'Yasmeen', 900),
(0, 'Shoeib', 'Hrithik', 950);

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `name` varchar(25) NOT NULL,
  `email` varchar(25) NOT NULL,
  `balance` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `balance`) VALUES
(1, 'Rimsha', 'rimsha@gmail.com', 10000),
(2, 'Aneeqa', 'aneeqa@gmail.com', 14000),
(3, 'Innama', 'innama@gmail.com', 9000),
(4, 'Yasmeen', 'yasmeen@gmail.com', 8900),
(5, 'Huda', 'huda@gmail.com', 14000),
(6, 'Noora', 'noora@gmail.com', 17000),
(7, 'Hrithik', 'hrithik@gmail.com', 6950),
(8, 'Prateek', 'prateek@gmail.com', 8600),
(9, 'Soha', 'soha@gmail.com', 12000),
(10, 'Shoeib', 'shoeib@gmail.com', 9000);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
