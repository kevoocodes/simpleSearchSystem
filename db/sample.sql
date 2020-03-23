-- phpMyAdmin SQL Dump
-- version 4.9.0.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Mar 23, 2020 at 01:01 AM
-- Server version: 10.4.6-MariaDB
-- PHP Version: 7.1.32

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `sample`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `id` int(11) NOT NULL,
  `username` varchar(20) NOT NULL,
  `password` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`id`, `username`, `password`) VALUES
(1, 'admin', 'admin');

-- --------------------------------------------------------

--
-- Table structure for table `article`
--

CREATE TABLE `article` (
  `id` int(11) NOT NULL,
  `title` varchar(256) NOT NULL,
  `text` text NOT NULL,
  `authors` varchar(256) NOT NULL,
  `date` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `article`
--

INSERT INTO `article` (`id`, `title`, `text`, `authors`, `date`) VALUES
(1, '60 great summer recipes', 'There are many recipes you can create  for the summer which involve grilling,boiling, frying,and tosting ', 'Admin', '2017-11-25 12:23:11'),
(2, 'A series of computer software', 'In  this article,you learn about some of the software used on the computer.This involve basic software and more advanced software used by the developer.', 'Kelvin Aron', '2017-11-25 12:23:11'),
(3, 'Frontend and Backend Developer', 'Lorem, ipsum dolor sit amet consectetur adipisicing elit. Odio quia exercitationem, est dolore aperiam dolor maxime consequuntur expedita suscipit architecto blanditiis eius distinctio! Deserunt voluptate similique incidunt dolores vel ipsum sunt itaque neque nisi quo. Nihil sit aliquid eveniet, vero fuga laudantium minima cumque nobis aperiam animi expedita, doloribus error.', 'Kelvin Aron', '2020-02-29 23:24:32'),
(4, 'Corona virus in china', 'On this website you can find information and guidance from WHO regarding the current outbreak of coronavirus disease (COVID-19) that was first reported from Wuhan, China, on 31 December 2019. Please visit this page for daily updates', 'Kelvin Msindai', '2020-03-02 15:23:07');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `article`
--
ALTER TABLE `article`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `article`
--
ALTER TABLE `article`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
