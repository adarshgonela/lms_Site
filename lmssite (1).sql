-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jun 18, 2024 at 07:13 AM
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
-- Database: `lmssite`
--

-- --------------------------------------------------------

--
-- Table structure for table `courses`
--

CREATE TABLE `courses` (
  `id` int(11) NOT NULL,
  `name` varchar(50) NOT NULL,
  `description` varchar(200) NOT NULL,
  `tid` int(11) NOT NULL,
  `tname` varchar(50) NOT NULL,
  `duration` varchar(20) NOT NULL,
  `price` int(11) NOT NULL,
  `totallectures` int(11) NOT NULL,
  `enrolledstudents` int(250) NOT NULL,
  `level` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `lectures`
--

CREATE TABLE `lectures` (
  `id` int(11) NOT NULL,
  `cid` int(11) NOT NULL,
  `cname` varchar(50) NOT NULL,
  `tid` varchar(50) NOT NULL,
  `tname` varchar(50) NOT NULL,
  `description` varchar(200) NOT NULL,
  `url` varchar(200) NOT NULL,
  `exercise` varchar(50) NOT NULL,
  `notes` varchar(200) NOT NULL,
  `duration` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `library`
--

CREATE TABLE `library` (
  `id` int(11) NOT NULL,
  `name` varchar(30) NOT NULL,
  `description` varchar(200) NOT NULL,
  `author` varchar(50) NOT NULL,
  `uploadedon` varchar(50) NOT NULL,
  `file` mediumblob NOT NULL,
  `status` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `paymentstable`
--

CREATE TABLE `paymentstable` (
  `id` int(11) NOT NULL,
  `cid` int(11) NOT NULL,
  `cname` varchar(50) NOT NULL,
  `pmethod` varchar(20) NOT NULL,
  `amount` int(11) NOT NULL,
  `status` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `profile`
--

CREATE TABLE `profile` (
  `name` varchar(50) NOT NULL,
  `contact` int(11) NOT NULL,
  `college` varchar(100) NOT NULL,
  `education` varchar(30) NOT NULL,
  `image` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `email` varchar(255) NOT NULL,
  `counsler` varchar(50) DEFAULT NULL,
  `password` varchar(255) NOT NULL,
  `mobile` varchar(255) NOT NULL,
  `role` varchar(30) NOT NULL DEFAULT 'Student',
  `status` text NOT NULL DEFAULT 'notverified',
  `code` mediumint(9) NOT NULL,
  `name` varchar(255) DEFAULT NULL,
  `date` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `email`, `counsler`, `password`, `mobile`, `role`, `status`, `code`, `name`, `date`) VALUES
(1, 'test@gmail.com', NULL, '202cb962ac59075b964b07152d234b70', '9999999999', 'admin', 'verified', 0, NULL, ''),
(2, 'test1@gmail.com', NULL, '202cb962ac59075b964b07152d234b70', '9999999999', 'student', 'verified', 1, NULL, ''),
(5, 'test4@gmail.com', NULL, '$2y$10$JgAqxHLyUxM43aNz55xaSOueGpRoOmKj2iOq/ryWiW1', '123454', 'Employee', 'notverified', 786378, 'test4', ''),
(6, 'test2@gmail.com', NULL, '$2y$10$lR./A5OtJ5kfxzx2LuqmBOuel0EMhiXDMB4pTjdiUc/', '99999999', 'Student', 'notverified', 233556, 'test2', ''),
(7, 'hi@gmail.com', 'inas@gmail.com', '', '24342343', 'Employee', 'notverified', 826833, 'hi', ''),
(8, 'adarsh@gmail.com', 'inas@gmail.com', '$2y$10$0OlI1EPZ.Bdapq0JAQNr2OqvaCn.R6uXRM6lUIAuE.i', '34234324234', 'Admin', 'notverified', 542015, 'adarsh', '2024-05-25'),
(10, 'inas@gmail.com', NULL, '$2y$10$UegQoqS4lpSfFO6r8/D.v.1rrUM9V9FxaH2SxBHy64yPs9h6t8h6W', '24342343', 'Student', 'notverified', 590890, 'uday', ''),
(11, 'asd@gmail.com', 'inas@gmail.com', '$2y$10$DjREMSLOwE34pI9jzRG5OO2DebV0ZqEujyqsjyws0XBeud4s4/7NG', '24342343', 'Admin', 'notverified', 151444, 'admin', ''),
(12, 'add2@gmail.com', 'bhaskar@gmail.com', '$2y$10$ZpHWVGsnHdolTJGqnCNm1eKMIWhdltC0cuH3L4CWRKheaU.WCvVNW', '24342343', 'Employee', 'notverified', 292828, 'add2', ''),
(13, 'jaankaruttamrao1444@gmail.com', 'inas@gmail.com', '$2y$10$3ThXLDi/ank0OdRaIlNFXOFa.m0Ll4yFOmuBpgDjRI3J2i/Ite9..', '8179815457', 'Admin', 'notverified', 387803, 'vishnu', ''),
(14, 'balu@gmail.com', 'inas@gmail.com', '$2y$10$UegQoqS4lpSfFO6r8/D.v.1rrUM9V9FxaH2SxBHy64yPs9h6t8h6W', '9032774582', 'Student', 'verified', 0, 'Narsimhulu Somalla', ''),
(15, 'phani@gmail.com', 'inas@gmail.com', '1234', '9032774582', 'Student', 'verified', 0, 'phani boreddy', '2024-06-03');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
