-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jun 18, 2024 at 10:28 AM
-- Server version: 10.4.32-MariaDB
-- PHP Version: 8.0.30

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `lms`
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

--
-- Dumping data for table `courses`
--

INSERT INTO `courses` (`id`, `name`, `description`, `tid`, `tname`, `duration`, `price`, `totallectures`, `enrolledstudents`, `level`) VALUES
(1, 'java', 'Java is a versatile and widely-used programming language known for its platform independence, robustness, and developer-friendly features. Originally developed by Sun Microsystems (now owned by Oracle', 123456, 'saidivya', '300 hrs', 8000, 40, 5, 'entry level');

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
  `duration` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `lectures`
--

INSERT INTO `lectures` (`id`, `cid`, `cname`, `tid`, `tname`, `description`, `url`, `exercise`, `notes`, `duration`) VALUES
(1, 1, 'java', '1234556', 'saidivya', 'introduction to java', '', 'exercise-5', 'bascis, loops, oops, modules.', 30),
(2, 1, 'Java', '1234556', 'saidivya', 'data types in java', '', 'exercise-3', 'Python is a high-level programming language known for its simplicity and readability, making it accessible for beginners and powerful for experienced developers alike. It emphasizes code readability a', 35);

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

--
-- Dumping data for table `library`
--

INSERT INTO `library` (`id`, `name`, `description`, `author`, `uploadedon`, `file`, `status`) VALUES
(1, 'python', 'Python is a high-level programming language known for its simplicity and readability, making it accessible for beginners and powerful for experienced developers alike. It emphasizes code readability a', 'guido van russum', '2024-5-15', '', 'active'),
(2, 'java', 'Java is a versatile and widely-used programming language known for its platform independence, robustness, and developer-friendly features. Originally developed by Sun Microsystems (now owned by Oracle', 'james gosling', '2024-5-20', '', 'active');

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
  `id` int(11) NOT NULL,
  `userid` varchar(50) NOT NULL,
  `name` varchar(50) NOT NULL,
  `contact` int(11) NOT NULL,
  `college` varchar(100) NOT NULL,
  `education` varchar(30) NOT NULL,
  `image` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `profile`
--

INSERT INTO `profile` (`id`, `userid`, `name`, `contact`, `college`, `education`, `image`) VALUES
(1, '123455', 'chandram', 678912363, 'gitam college of engineering', 'mca', ''),
(2, '123456', 'vamshi', 527729928, 'geetanjali college of engineering', 'b tech', '');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `name` varchar(50) NOT NULL,
  `email` varchar(50) NOT NULL,
  `password` varchar(30) NOT NULL,
  `mobile` double NOT NULL,
  `status` varchar(11) NOT NULL,
  `role` varchar(50) NOT NULL DEFAULT 'student',
  `doj` varchar(30) NOT NULL,
  `location` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `password`, `mobile`, `status`, `role`, `doj`, `location`) VALUES
(123455, 'vamshi', 'vamshi@email.com', '123', 5537257373, 'active', 'student', '2024-07-25', 'hyderabad'),
(123456, 'saidivya', 'saidivya@gmail.com', '123', 6468468837, 'active', 'tutor', '2023-08-23', 'hyderabad');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `courses`
--
ALTER TABLE `courses`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `lectures`
--
ALTER TABLE `lectures`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `library`
--
ALTER TABLE `library`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `profile`
--
ALTER TABLE `profile`
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
-- AUTO_INCREMENT for table `courses`
--
ALTER TABLE `courses`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `lectures`
--
ALTER TABLE `lectures`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `library`
--
ALTER TABLE `library`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `profile`
--
ALTER TABLE `profile`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=123458;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
