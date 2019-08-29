-- phpMyAdmin SQL Dump
-- version 4.8.5
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Aug 29, 2019 at 02:50 PM
-- Server version: 10.1.38-MariaDB
-- PHP Version: 7.3.2

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `teknonomi`
--

-- --------------------------------------------------------

--
-- Table structure for table `posisiuser`
--

CREATE TABLE `posisiuser` (
  `posisiuser_id` int(11) NOT NULL,
  `posisiuser_nama` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `posisiuser`
--

INSERT INTO `posisiuser` (`posisiuser_id`, `posisiuser_nama`) VALUES
(1, 'Pengembang TI'),
(4, 'Pembina'),
(5, 'Pimpinan Umum'),
(6, 'Redaksi'),
(7, 'Foto dan Videografer'),
(8, 'Marketing'),
(9, 'Desain Grafis');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `posisiuser`
--
ALTER TABLE `posisiuser`
  ADD PRIMARY KEY (`posisiuser_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `posisiuser`
--
ALTER TABLE `posisiuser`
  MODIFY `posisiuser_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
