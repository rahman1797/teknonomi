-- phpMyAdmin SQL Dump
-- version 4.8.5
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Aug 29, 2019 at 02:49 PM
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
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `user_id` int(11) NOT NULL,
  `user_nama` varchar(225) NOT NULL,
  `user_username` varchar(100) NOT NULL,
  `user_password` varchar(100) NOT NULL,
  `user_posisi` int(11) NOT NULL,
  `user_jeniskelamin` varchar(100) NOT NULL,
  `user_role` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`user_id`, `user_nama`, `user_username`, `user_password`, `user_posisi`, `user_jeniskelamin`, `user_role`) VALUES
(1, 'Khairul Rizal', '', '', 4, 'Laki-laki', ''),
(2, 'Abdul Gafar', '', '', 4, 'Laki-laki', ''),
(3, 'Ifnaldi Sikumbang', '', '', 5, 'Laki-laki', ''),
(4, 'Adi Wicaksono', 'adi.wicax@teknonomi.com', '123', 6, 'Laki-laki', 'admin\r\n'),
(5, 'Devi R Ayu', '', '', 6, 'Perempuan', ''),
(8, 'Meidella Syahni', '', '', 6, 'Perempuan', ''),
(9, 'Ihsan Deny Kurnia', '', '', 7, 'Laki-laki', ''),
(10, 'Siti Marfuah', '', '', 8, 'Perempuan', ''),
(11, 'Husnul Tambunan', '', '', 8, 'Laki-laki', ''),
(12, 'Arlin', '', '', 8, 'Perempuan', ''),
(15, 'Saulia Karina', '', '123', 1, 'Perempuan', 'admin'),
(16, 'Maulana Rahman Nur', 'mrahman', '123', 1, 'Laki-laki', 'admin'),
(17, 'Denie Kristyono', '', '', 9, 'Laki-laki', '');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`user_id`),
  ADD KEY `getPosisi` (`user_posisi`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `user_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `user`
--
ALTER TABLE `user`
  ADD CONSTRAINT `getPosisi` FOREIGN KEY (`user_posisi`) REFERENCES `posisiuser` (`posisiuser_id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
