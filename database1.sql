-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Apr 06, 2024 at 12:37 AM
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
-- Database: `database1`
--

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `ID` int(11) NOT NULL,
  `fullName` varchar(50) NOT NULL,
  `userName` varchar(50) NOT NULL,
  `phone` int(11) NOT NULL,
  `address` varchar(60) NOT NULL,
  `password` varchar(30) NOT NULL,
  `userImg` varchar(50) NOT NULL,
  `email` varchar(30) NOT NULL,
  `dateSignin` date NOT NULL DEFAULT current_timestamp(),
  `birthdate` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`ID`, `fullName`, `userName`, `phone`, `address`, `password`, `userImg`, `email`, `dateSignin`, `birthdate`) VALUES
(1, 'minasobhy', 'mina32', 1220421445, 'sdfi', 'sdfisdf', 'sfdisdfi', 'sfjafiadsf', '2024-04-04', '2003-11-02'),
(4, 'minasobhy', 'mina31', 1220421445, 'sdfi', 'sdfisdf', 'sfdisdfi', 'sfjafiadsf', '2024-04-04', '2003-11-02'),
(5, 'minasobhy', 'mina3l', 123124124, '1dsda', 'adad', 'adads', 'sfasd', '2024-04-04', '2003-11-02'),
(6, 'mina', 'lol', 12303, 'asdasd', '123132', 'asdasd', 'asdasd', '2024-04-05', '0000-00-00'),
(7, 'mina', 'lol1', 12303, 'asdasd', '123132', 'asdasd', 'asdasd', '2024-04-05', '0000-00-00'),
(8, 'mina sobhy', 'msa', 1220421445, 'St. Abn alam', '898080', 'Screenshot 2022-01-13 005335.png', 'mina@gmail.com', '2024-04-05', '2024-04-05');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`ID`),
  ADD UNIQUE KEY `userName` (`userName`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
