-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Nov 06, 2022 at 08:15 PM
-- Server version: 10.4.24-MariaDB
-- PHP Version: 7.4.29

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `student_management_system`
--

-- --------------------------------------------------------

--
-- Table structure for table `adminlogin`
--

CREATE TABLE `adminlogin` (
  `id` int(11) NOT NULL,
  `admin_name` varchar(30) NOT NULL,
  `username` varchar(20) NOT NULL,
  `password` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `adminlogin`
--

INSERT INTO `adminlogin` (`id`, `admin_name`, `username`, `password`) VALUES
(1, 'naveen', 'naveen123', '123'),
(2, 'hasi', 'hasi456', '456');

-- --------------------------------------------------------

--
-- Table structure for table `student`
--

CREATE TABLE `student` (
  `student_id` int(100) NOT NULL,
  `gender` varchar(10) NOT NULL,
  `first_name` varchar(50) NOT NULL,
  `last_name` varchar(50) NOT NULL,
  `address` varchar(100) NOT NULL,
  `city` varchar(40) NOT NULL,
  `birthday` date NOT NULL,
  `grade` int(2) NOT NULL,
  `guardian` varchar(60) NOT NULL,
  `relation` varchar(20) NOT NULL,
  `telephone_num` int(15) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `student`
--

INSERT INTO `student` (`student_id`, `gender`, `first_name`, `last_name`, `address`, `city`, `birthday`, `grade`, `guardian`, `relation`, `telephone_num`) VALUES
(1, 'Male', 'Nadun', 'Kaushalya', 'No:48/10,Mahanaviya Road', 'Weligama', '2000-11-18', 12, 'U.H.Siriwardhana', 'Father', 775016927),
(2, 'Female', 'Tharaka', 'Diddugoda', '659, Malwatte Road', 'Kandy', '2001-02-01', 11, 'Samarasinghe', 'Father', 712563219),
(3, 'Male', 'Janith', 'Ravindu', 'No:325, Station Road', 'Matara', '2008-12-13', 7, 'Sarath', 'Mother', 752589631),
(4, 'Male', 'Damika', 'Denuwantha', 'B21,Dambulla', 'Mathale', '2005-05-06', 8, 'Alwis', 'Father', 772421623),
(5, 'Female', 'Disimini', 'Baddegama', '490/8 Havelock Road', 'Colombo 06', '2002-01-16', 10, 'Rupani De Silva', 'Mother', 752588862),
(6, 'Male', 'Sabdun', 'Srimal', 'NO. 39- 1/25, Chathem Street', 'Colombo', '2004-05-16', 9, 'Pushpani Dasanayake', 'Mother', 722580879),
(7, 'Female', 'Suvini', 'Rasaputhra', '148 Panchikawatte Road', 'Colombo 06', '2009-07-29', 6, 'Deshapriya Rasaputhra', 'Guardian', 722584639);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `adminlogin`
--
ALTER TABLE `adminlogin`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `student`
--
ALTER TABLE `student`
  ADD PRIMARY KEY (`student_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `adminlogin`
--
ALTER TABLE `adminlogin`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
