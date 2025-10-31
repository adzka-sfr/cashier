-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Oct 31, 2025 at 04:12 AM
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
-- Database: `cashier`
--

-- --------------------------------------------------------

--
-- Table structure for table `t_auth`
--

CREATE TABLE `t_auth` (
  `id` int(11) NOT NULL,
  `c_username` varchar(50) NOT NULL,
  `c_password` varchar(100) NOT NULL COMMENT 'pakai hash',
  `c_name` varchar(100) DEFAULT NULL COMMENT 'nama orang',
  `c_datetime` datetime DEFAULT NULL COMMENT 'tanggal register',
  `c_timeout` int(11) DEFAULT NULL COMMENT 'satuan menit',
  `c_pin` varchar(10) DEFAULT NULL COMMENT 'pakai hash'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `t_auth`
--

INSERT INTO `t_auth` (`id`, `c_username`, `c_password`, `c_name`, `c_datetime`, `c_timeout`, `c_pin`) VALUES
(3, 'adzka', '$2y$10$8h8Vrr/MmYkZ6akcyyUx6e3gjpNN.DvDId6rWuO.gG5v/Huxukh6e', 'adzka', '2025-08-29 08:52:50', 1200, NULL);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `t_auth`
--
ALTER TABLE `t_auth`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `t_auth`
--
ALTER TABLE `t_auth`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
