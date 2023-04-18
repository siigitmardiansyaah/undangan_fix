-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Mar 16, 2023 at 08:17 AM
-- Server version: 10.4.24-MariaDB
-- PHP Version: 7.4.29

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `undangan`
--

-- --------------------------------------------------------

--
-- Table structure for table `ucapan`
--

CREATE TABLE `ucapan` (
  `id_ucapan` int(11) NOT NULL,
  `nama` varchar(255) NOT NULL,
  `hadir` varchar(20) NOT NULL,
  `ucapan` text NOT NULL,
  `jam` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `ucapan`
--

INSERT INTO `ucapan` (`id_ucapan`, `nama`, `hadir`, `ucapan`, `jam`) VALUES
(1, 'Kania', 'Tidak Hadir', 'GA ADA PASANGAN JADI GA HADIR', '2023-03-16 06:07:25'),
(2, 'dadada', '', 'adasdasds', '2023-03-16 06:54:28'),
(3, 'SIGIT', '', 'TEST', '2023-03-16 07:06:23');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `ucapan`
--
ALTER TABLE `ucapan`
  ADD PRIMARY KEY (`id_ucapan`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `ucapan`
--
ALTER TABLE `ucapan`
  MODIFY `id_ucapan` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
