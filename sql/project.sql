-- phpMyAdmin SQL Dump
-- version 4.6.5.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Mar 30, 2017 at 03:47 PM
-- Server version: 10.1.21-MariaDB
-- PHP Version: 7.1.1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `project`
--

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `name` varchar(200) NOT NULL,
  `info` text NOT NULL,
  `date_of_birth` date NOT NULL,
  `place_of_birth` varchar(20) NOT NULL,
  `date_of_reg` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `email` varchar(200) NOT NULL,
  `password` varchar(32) NOT NULL,
  `nationality` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `info`, `date_of_birth`, `place_of_birth`, `date_of_reg`, `email`, `password`, `nationality`) VALUES
(31, 'nikola', 'ko3a', '2016-02-04', 'kishinev', '2016-05-12 15:43:00', 'nikola@mail.bg', 'e10adc3949ba59abbe56e057f20f883e', 'moldova'),
(32, 'jivko', 'kokoko', '2016-05-20', 'neide si', '2016-05-12 16:10:21', 'jivko@mail.bg', '123456', 'neide si'),
(33, 'hristo', 'kitin', '2000-02-22', 'kitin', '2017-01-05 13:27:09', 'ico@mail.bg', 'e10adc3949ba59abbe56e057f20f883e', 'kitin'),
(34, 'kiril', 's', '2001-01-04', 's', '2017-01-05 13:28:16', 'kiril@mail.bg', 'e10adc3949ba59abbe56e057f20f883e', 's'),
(35, 'lazar', 'kozel', '1234-12-12', 'kozel', '2017-01-05 13:38:29', 'lazar@mail.bg', '123456', 'kozel');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `email` (`email`),
  ADD UNIQUE KEY `name` (`name`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=36;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
