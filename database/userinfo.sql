-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jun 28, 2023 at 07:34 PM
-- Server version: 10.4.27-MariaDB
-- PHP Version: 8.0.25

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `userinfo`
--

-- --------------------------------------------------------

--
-- Table structure for table `faculty`
--

CREATE TABLE `faculty` (
  `id` int(10) NOT NULL,
  `name` varchar(20) NOT NULL,
  `subject` varchar(20) NOT NULL,
  `email` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `faculty`
--

INSERT INTO `faculty` (`id`, `name`, `subject`, `email`) VALUES
(1, 'Raj Shukla', 'Web Design', 'rajshukla@gmail.com'),
(2, 'Kishan Thakor', 'Development', 'kishanthakor@gmail.com'),
(3, 'Krishna Parmar', 'C & C++', 'krishnaparmar@gmail.com'),
(4, 'Jay Shah', 'Java Language', 'jayshah@gmail.com'),
(5, 'Devang Jain', 'Python', 'devangjain@gmail.com'),
(6, 'Shilpa Dave', 'Account', 'shilpadave@gmail.com'),
(7, 'Parth Joshi', 'Management', 'parthjoshi@gmail.com'),
(8, 'Dev Patel', 'Maths', 'devpatel@gmail.com');

-- --------------------------------------------------------

--
-- Table structure for table `query`
--

CREATE TABLE `query` (
  `id` int(3) NOT NULL,
  `name` varchar(20) NOT NULL,
  `subject` varchar(50) NOT NULL,
  `message` varchar(5000) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `query`
--

INSERT INTO `query` (`id`, `name`, `subject`, `message`) VALUES
(1, 'jigar', 'python', 'all'),
(2, 'abc', 'java', 'this is abc class etc...');

-- --------------------------------------------------------

--
-- Table structure for table `subject`
--

CREATE TABLE `subject` (
  `id` int(11) NOT NULL,
  `course` varchar(50) NOT NULL,
  `link` varchar(10000) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `subject`
--

INSERT INTO `subject` (`id`, `course`, `link`) VALUES
(1, 'it/w', 'https://www.youtube.com/embed/MkcfB7S4fq0'),
(2, 'it/g', 'https://www.youtube.com/embed/Mo3pTNv8YDc'),
(3, 'it/p', 'https://www.youtube.com/embed/iJblwyN0c0M'),
(4, 'it/j', 'https://www.youtube.com/embed/UmnCZ7-9yDY'),
(5, 'c/t', 'https://www.youtube.com/embed/gOmL4-sUJ2g'),
(6, 'c/s', 'https://www.youtube.com/embed/kyjlxsLW1Is'),
(7, 'c/m', 'https://www.youtube.com/embed/ZRaZVLRXctU'),
(8, 'c/o', 'https://www.youtube.com/embed/bixR-KIJKYM');

-- --------------------------------------------------------

--
-- Table structure for table `userdata`
--

CREATE TABLE `userdata` (
  `id` int(50) NOT NULL,
  `email` varchar(50) NOT NULL,
  `username` varchar(50) NOT NULL,
  `password` varchar(50) NOT NULL,
  `au` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `userdata`
--

INSERT INTO `userdata` (`id`, `email`, `username`, `password`, `au`) VALUES
(1, 'admin@gmail.com', 'admin', 'admin', 'a'),
(2, 'user@gmail.com', 'user', 'user', 'u'),
(3, 'abc@gmail.com', 'abc', 'abc', 'u'),
(4, 'jigar@gmail.com', 'jigar', 'jigar', 'u'),
(5, 'jigar1@gmail.com', 'jigar1', 'jigar', 'u');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `faculty`
--
ALTER TABLE `faculty`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `query`
--
ALTER TABLE `query`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `subject`
--
ALTER TABLE `subject`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `link` (`link`) USING HASH;

--
-- Indexes for table `userdata`
--
ALTER TABLE `userdata`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `username` (`username`),
  ADD UNIQUE KEY `email` (`email`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `faculty`
--
ALTER TABLE `faculty`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `query`
--
ALTER TABLE `query`
  MODIFY `id` int(3) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `subject`
--
ALTER TABLE `subject`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `userdata`
--
ALTER TABLE `userdata`
  MODIFY `id` int(50) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
