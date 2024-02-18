-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Feb 18, 2024 at 02:14 PM
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
-- Database: `webtech`
--

-- --------------------------------------------------------

--
-- Table structure for table `lab4`
--

CREATE TABLE `lab4` (
  `s_id` varchar(10) NOT NULL,
  `s_name` varchar(20) NOT NULL,
  `s_email` varchar(20) NOT NULL,
  `s_gender` varchar(10) NOT NULL,
  `s_age` int(4) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `lab4`
--

INSERT INTO `lab4` (`s_id`, `s_name`, `s_email`, `s_gender`, `s_age`) VALUES
('22-46521-1', 'Naimur', 'nr@gmail.com', 'male', 50),
('22-46532-1', 'Shariar', 'shariar@gmail.com', 'male', 40);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `lab4`
--
ALTER TABLE `lab4`
  ADD PRIMARY KEY (`s_id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
