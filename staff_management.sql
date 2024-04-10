-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: Feb 08, 2024 at 07:07 PM
-- Server version: 10.4.28-MariaDB
-- PHP Version: 8.2.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `staff_management`
--

-- --------------------------------------------------------

--
-- Table structure for table `staff_members`
--

CREATE TABLE `staff_members` (
  `id` int(11) NOT NULL,
  `name` varchar(255) DEFAULT NULL,
  `email` varchar(255) DEFAULT NULL,
  `position` varchar(50) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `staff_members`
--

INSERT INTO `staff_members` (`id`, `name`, `email`, `position`) VALUES
(1, 'Steve Harrington', 'steve.harrington@keele.ac.uk', 'Professor'),
(2, 'Mike Wheeler', 'mike.wheeler@keele.ac.uk', 'Senior Lecturer'),
(3, 'Dustin Henderson', 'dustin.henderson@keele.ac.uk', 'Lecturer'),
(4, 'Will Byers', 'will.byers@keele.ac.uk', 'Reader'),
(5, 'Lucas Sinclair', 'lucas.sinclair@keele.ac.uk', 'Professor'),
(6, 'Max Mayfield', 'max.mayfield@keele.ac.uk', 'Senior Lecturer'),
(7, 'Martin Brenner', 'martin.brenner@keele.ac.uk', 'Lecturer'),
(8, 'Jonathan Byers', 'jonathan.byers@keele.ac.uk', 'Reader'),
(9, 'Steve Harrington', 'steve.harrington@keele.ac.uk', 'Professor'),
(10, 'Robin Buckley', 'robin.buckley@keele.ac.uk', 'Senior Lecturer'),
(11, 'Jim Hopper', 'jim.hopper@keele.ac.uk', 'Lecturer'),
(12, 'Eddie Munson', 'eddie.munson@keele.ac.uk', 'Reader'),
(13, 'Billy Hargrove', 'billy.hargrove@keele.ac.uk', 'Professor'),
(14, 'Bob Newby', 'bob.newby@keele.ac.uk', 'Senior Lecturer'),
(15, 'Sam Owens', 'sam.owens@keele.ac.uk', 'Lecturer'),
(16, 'Murray Bauman', 'murray.bauman@keele.ac.uk', 'Reader');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `staff_members`
--
ALTER TABLE `staff_members`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `staff_members`
--
ALTER TABLE `staff_members`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
