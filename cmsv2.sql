-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jun 08, 2024 at 12:49 PM
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
-- Database: `cmsv2`
--

-- --------------------------------------------------------

--
-- Table structure for table `applications`
--

CREATE TABLE `applications` (
  `id` int(11) NOT NULL,
  `email` varchar(50) NOT NULL,
  `counsler` varchar(50) DEFAULT NULL,
  `college` varchar(100) NOT NULL,
  `collegeId` int(11) NOT NULL,
  `fees` int(11) NOT NULL,
  `status` varchar(20) NOT NULL DEFAULT 'pending',
  `date` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `applications`
--

INSERT INTO `applications` (`id`, `email`, `counsler`, `college`, `collegeId`, `fees`, `status`, `date`) VALUES
(1, 'inas@gmail.com', NULL, 'Stanford University', 0, 20000, 'pending', '2024-05-01'),
(2, 'inas@gmail.com', 'inas@gmail.com', 'MIT', 0, 22000, 'approved', '2024-05-02'),
(3, 'inas@gmail.com', NULL, 'Harvard University', 0, 21000, 'rejected', '2024-05-03'),
(4, 'dave.wilson@example.com', 'inas@gmail.com', 'UC Berkeley', 0, 18000, 'pending', '2024-05-04'),
(5, 'eve.brown@example.com', NULL, 'Princeton University', 0, 23000, 'approved', '2024-05-05'),
(6, 'frank.miller@example.com', NULL, 'Yale University', 0, 19000, 'pending', '2024-05-06'),
(7, 'grace.moore@example.com', NULL, 'Columbia University', 0, 19500, 'approved', '2024-05-07'),
(8, 'hank.taylor@example.com', 'inas@gmail.com', 'University of Chicago', 0, 20500, 'rejected', '2024-05-08'),
(9, 'ivy.anderson@example.com', NULL, 'University of Pennsylvania', 0, 21500, 'pending', '2024-05-09'),
(10, 'jack.thomas@example.com', 'inas@gmail.com', 'Caltech', 0, 22500, 'rejected', '2024-05-10'),
(12, 'balu@gmail.com', 'inas@gmail.com', 'Yale University', 10, 100, 'pending', '2024-06-03'),
(13, 'balu@gmail.com', 'inas@gmail.com', 'Harvard University', 1, 500, 'pending', '2024-06-03'),
(14, 'balu@gmail.com', 'inas@gmail.com', 'Princeton University', 9, 0, 'pending', '2024-06-03'),
(15, 'adarsh@gmail.com', 'inas@gmail.com', 'Harvard University', 1, 500, 'pending', '2024-06-04'),
(16, 'balu@gmail.com', 'inas@gmail.com', '', 0, 0, 'pending', '2024-06-08'),
(17, 'balu@gmail.com', 'inas@gmail.com', '', 0, 0, 'pending', '2024-06-08');

-- --------------------------------------------------------

--
-- Table structure for table `colleges`
--

CREATE TABLE `colleges` (
  `id` int(10) NOT NULL,
  `name` varchar(50) NOT NULL,
  `location` varchar(50) NOT NULL,
  `description` varchar(500) NOT NULL,
  `eligibleScore` int(10) NOT NULL DEFAULT 0,
  `applied` int(10) NOT NULL DEFAULT 0,
  `totalSeats` int(20) NOT NULL DEFAULT 0,
  `fee` int(11) NOT NULL DEFAULT 500
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `colleges`
--

INSERT INTO `colleges` (`id`, `name`, `location`, `description`, `eligibleScore`, `applied`, `totalSeats`, `fee`) VALUES
(1, 'Harvard University', 'Cambridge, MA', 'Satisfied conveying a dependent contented he gentleman agreeable do be. Warrant private blushes removed an in equally totally if. Delivered dejection necessary objection do Mr prevailed. Mr feeling does chiefly cordial in do.', 90, 10000, 2000, 500),
(2, 'Stanford University', 'Stanford, CA', 'Satisfied conveying a dependent contented he gentleman agreeable do be. Warrant private blushes removed an in equally totally if. Delivered dejection necessary objection do Mr prevailed. Mr feeling does chiefly cordial in do.', 85, 9000, 1800, 600),
(3, 'MIT', 'Cambridge, MA', 'Satisfied conveying a dependent contented he gentleman agreeable do be. Warrant private blushes removed an in equally totally if. Delivered dejection necessary objection do Mr prevailed. Mr feeling does chiefly cordial in do.', 95, 8000, 1500, 800),
(4, 'University of California, Berkeley', 'Berkeley, CA', 'Satisfied conveying a dependent contented he gentleman agreeable do be. Warrant private blushes removed an in equally totally if. Delivered dejection necessary objection do Mr prevailed. Mr feeling does chiefly cordial in do.', 80, 12000, 3000, 1800),
(5, 'University of Oxford', 'Oxford, England', 'Satisfied conveying a dependent contented he gentleman agreeable do be. Warrant private blushes removed an in equally totally if. Delivered dejection necessary objection do Mr prevailed. Mr feeling does chiefly cordial in do.', 92, 7000, 2500, 2000),
(6, 'University of Cambridge', 'Cambridge, England', 'Satisfied conveying a dependent contented he gentleman agreeable do be. Warrant private blushes removed an in equally totally if. Delivered dejection necessary objection do Mr prevailed. Mr feeling does chiefly cordial in do.', 91, 6000, 2400, 1200),
(7, 'California Institute of Technology', 'Pasadena, CA', 'Satisfied conveying a dependent contented he gentleman agreeable do be. Warrant private blushes removed an in equally totally if. Delivered dejection necessary objection do Mr prevailed. Mr feeling does chiefly cordial in do.', 94, 5000, 1000, 0),
(8, 'University of Chicago', 'Chicago, IL', 'Satisfied conveying a dependent contented he gentleman agreeable do be. Warrant private blushes removed an in equally totally if. Delivered dejection necessary objection do Mr prevailed. Mr feeling does chiefly cordial in do.', 88, 8500, 2000, 0),
(9, 'Princeton University', 'Princeton, NJ', 'Satisfied conveying a dependent contented he gentleman agreeable do be. Warrant private blushes removed an in equally totally if. Delivered dejection necessary objection do Mr prevailed. Mr feeling does chiefly cordial in do.', 89, 9500, 1800, 0),
(10, 'Yale University', 'New Haven, CT', 'Satisfied conveying a dependent contented he gentleman agreeable do be. Warrant private blushes removed an in equally totally if. Delivered dejection necessary objection do Mr prevailed. Mr feeling does chiefly cordial in do.', 87, 9000, 1900, 100);

-- --------------------------------------------------------

--
-- Table structure for table `courses`
--

CREATE TABLE `courses` (
  `id` int(11) NOT NULL,
  `name` varchar(50) NOT NULL,
  `description` varchar(100) DEFAULT NULL,
  `duration` varchar(50) NOT NULL,
  `url` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `courses`
--

INSERT INTO `courses` (`id`, `name`, `description`, `duration`, `url`) VALUES
(1, 'Introduction to Programming', 'Rooms oh fully taken by worse do Points afraid but may end Rooms', '4 weeks', 'http://example.com/intro-to-programming'),
(2, 'Advanced Web Development', NULL, '8 weeks', 'http://example.com/advanced-web-dev'),
(3, 'Data Science with Python', NULL, '10 weeks', 'http://example.com/data-science-python'),
(4, 'Machine Learning Basics', NULL, '6 weeks', 'http://example.com/machine-learning-basics'),
(5, 'Database Management Systems', NULL, '5 weeks', 'http://example.com/dbms');

-- --------------------------------------------------------

--
-- Table structure for table `documents`
--

CREATE TABLE `documents` (
  `id` int(11) NOT NULL,
  `email` varchar(30) NOT NULL,
  `type` varchar(30) NOT NULL,
  `name` varchar(30) NOT NULL,
  `document` mediumblob NOT NULL,
  `date` varchar(20) NOT NULL,
  `status` varchar(30) NOT NULL DEFAULT 'pending'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `payments`
--

CREATE TABLE `payments` (
  `id` int(10) NOT NULL,
  `amount` int(10) NOT NULL,
  `status` varchar(50) NOT NULL DEFAULT 'pending',
  `type` varchar(50) NOT NULL DEFAULT 'application',
  `applicationId` int(10) NOT NULL,
  `email` varchar(50) NOT NULL,
  `date` varchar(20) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `payments`
--

INSERT INTO `payments` (`id`, `amount`, `status`, `type`, `applicationId`, `email`, `date`) VALUES
(1, 500, 'completed', 'credit_card', 1001, 'inas@gmail.com', '2024-05-30 12:32'),
(2, 750, 'pending', 'debit_card', 1002, 'inas@gmail.com', '2024-05-30 12:30'),
(3, 300, 'failed', 'paypal', 1003, 'user3@example.com', NULL),
(4, 1200, 'completed', 'credit_card', 1004, 'user4@example.com', NULL),
(5, 450, 'pending', 'bank_transfer', 1005, 'user5@example.com', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `profile`
--

CREATE TABLE `profile` (
  `email` varchar(50) NOT NULL,
  `college` varchar(40) NOT NULL,
  `passingYear` int(11) NOT NULL,
  `cgpa` varchar(10) NOT NULL,
  `dob` varchar(50) NOT NULL,
  `address` varchar(100) NOT NULL,
  `gtype` varchar(50) NOT NULL,
  `gboard` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `profile`
--

INSERT INTO `profile` (`email`, `college`, `passingYear`, `cgpa`, `dob`, `address`, `gtype`, `gboard`) VALUES
('balu@gmail.com', 'Govt Degree College- Gajwel', 2023, '9', '2002-08-21', 'M.Thurkapally', 'BSC-Chemistry', 'OU-HYD'),
('phani@gmail.com', 'Govt Degree College-', 2023, '76', '2024-01-02', 'tkp', '', '');

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
-- Indexes for table `applications`
--
ALTER TABLE `applications`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `colleges`
--
ALTER TABLE `colleges`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `courses`
--
ALTER TABLE `courses`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `documents`
--
ALTER TABLE `documents`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `payments`
--
ALTER TABLE `payments`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `profile`
--
ALTER TABLE `profile`
  ADD PRIMARY KEY (`email`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `applications`
--
ALTER TABLE `applications`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;

--
-- AUTO_INCREMENT for table `colleges`
--
ALTER TABLE `colleges`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `courses`
--
ALTER TABLE `courses`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `documents`
--
ALTER TABLE `documents`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `payments`
--
ALTER TABLE `payments`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
