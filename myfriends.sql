-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Nov 07, 2022 at 11:08 PM
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
-- Database: `my_birthday_reminder_app`
--

-- --------------------------------------------------------

--
-- Table structure for table `myfriends`
--

CREATE TABLE `myfriends` (
  `id` int(11) NOT NULL,
  `First_name` varchar(30) DEFAULT NULL,
  `Last_name` varchar(30) DEFAULT NULL,
  `Birthday` date DEFAULT NULL,
  `Congratulate_with` varchar(30) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `myfriends`
--

INSERT INTO `myfriends` (`id`, `First_name`, `Last_name`, `Birthday`, `Congratulate_with`) VALUES
(1, 'Vicky', 'Huang', '1981-08-12', 'card'),
(2, 'Andreea', 'Toma', '1987-03-25', 'flowers'),
(5, 'Maisha', 'Kilumanga', '2018-09-30', ' present'),
(7, 'Amani', 'Kilumanga', '1988-08-04', ' Google calendar'),
(8, 'Lienchu', 'Huang', '1981-08-12', 'flowers'),
(9, 'ShanYu', 'Huang', '2017-04-15', 'present'),
(10, 'Iyu', 'Huang', '2018-09-30', ' present'),
(11, 'Young', 'Huang', '1978-10-06', 'phone call'),
(12, 'Kerry', 'Wang', '1981-02-18', 'phone call');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `myfriends`
--
ALTER TABLE `myfriends`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `myfriends`
--
ALTER TABLE `myfriends`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
