-- phpMyAdmin SQL Dump
-- version 4.9.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Feb 09, 2020 at 11:39 PM
-- Server version: 10.4.11-MariaDB
-- PHP Version: 7.4.1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `id`
--

-- --------------------------------------------------------

--
-- Table structure for table `kurset`
--

CREATE TABLE `kurset` (
  `id_kursi` int(11) NOT NULL,
  `imazhi` varchar(100) NOT NULL,
  `emer_kursi` varchar(100) NOT NULL,
  `cmimi` double(11,2) NOT NULL,
  `njesi` int(15) NOT NULL,
  `emer_kateg` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `kurset`
--

INSERT INTO `kurset` (`id_kursi`, `imazhi`, `emer_kursi`, `cmimi`, `njesi`, `emer_kateg`) VALUES
(1, 'welcome1.jpg', 'Welcome1', 100.00, 10, 'kids'),
(2, 'welcome2.jpg', 'Welcome2', 100.00, 10, 'kids'),
(3, 'welcome3.jpg', 'Welcome3', 100.00, 10, 'kids'),
(4, 'UpstreamA1.jpg', 'UpstreamA1', 120.00, 10, 'adult'),
(5, 'UpstreamA2.jpg', 'UpstreamA2', 120.00, 10, 'adult'),
(6, 'UpstreamB1.jpg', 'UpstreamB1', 120.00, 10, 'adult'),
(7, 'UpstreamB2.jpg', 'UpstreamB2', 120.00, 10, 'adult'),
(8, 'UpstreamB2+.jpg', 'UpstreamB2+', 120.00, 10, 'adult'),
(9, 'UpstreamC1.jpg', 'UpstreamC1', 150.00, 10, 'adult'),
(11, 'UpstreamC2.jpg', 'UpstreamC2', 150.00, 10, 'adult');

-- --------------------------------------------------------

--
-- Table structure for table `mesazh`
--

CREATE TABLE `mesazh` (
  `id` int(5) NOT NULL,
  `mesazhi` longtext NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `mesazh`
--

INSERT INTO `mesazh` (`id`, `mesazhi`) VALUES
(1, 'Per me shume informacion mbi kurset, oraret, pedagoget perkates ju mirepresim ne ambjentet e qendres tone.\r\n'),
(2, 'Per nje paraqitje me te detajuar te te gjitha sherbimeve tona ju urojme lundrim te kendshem ne kete faqe te qendres sone.'),
(3, 'Per informacion me te detajuar mbi qendren, ju lutem na kontaktoni si mesiper.');

-- --------------------------------------------------------

--
-- Table structure for table `porosi`
--

CREATE TABLE `porosi` (
  `id_porosi` int(11) NOT NULL,
  `totali_porosi` double(11,2) NOT NULL,
  `klienti` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `id` int(11) NOT NULL,
  `username` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `password` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`id`, `username`, `email`, `password`) VALUES
(1, 'sindi vrapi', 'vrapisindi@gmail.com', 'sindi1'),
(2, 'sindi kliente', 'sindivrapi@yahoo.com', 'sindi'),
(3, 'sindi 123', 'sindivrapi@yahoo.com', 'sindi'),
(5, 'sindi 1234', 'sindivrapi@fti.edu.al', '1234');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `kurset`
--
ALTER TABLE `kurset`
  ADD PRIMARY KEY (`id_kursi`);

--
-- Indexes for table `mesazh`
--
ALTER TABLE `mesazh`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `porosi`
--
ALTER TABLE `porosi`
  ADD PRIMARY KEY (`id_porosi`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `kurset`
--
ALTER TABLE `kurset`
  MODIFY `id_kursi` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT for table `mesazh`
--
ALTER TABLE `mesazh`
  MODIFY `id` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `porosi`
--
ALTER TABLE `porosi`
  MODIFY `id_porosi` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
