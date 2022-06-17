-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jun 17, 2022 at 04:19 PM
-- Server version: 10.4.21-MariaDB
-- PHP Version: 8.0.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `psbo`
--

-- --------------------------------------------------------

--
-- Table structure for table `ternak`
--

CREATE TABLE `ternak` (
  `id` int(11) NOT NULL,
  `jenis` enum('sapiperah','sapipotong','kambingperah','kambingpotong') NOT NULL,
  `jk` enum('jantan','betina','','') NOT NULL,
  `umur` varchar(100) NOT NULL,
  `keadaan` enum('ya','tidak','','') NOT NULL,
  `masuk` varchar(100) NOT NULL,
  `daging` float NOT NULL,
  `susu` float NOT NULL,
  `rambut` float NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `ternak`
--

INSERT INTO `ternak` (`id`, `jenis`, `jk`, `umur`, `keadaan`, `masuk`, `daging`, `susu`, `rambut`) VALUES
(19, 'sapiperah', 'betina', '7', 'ya', '2022-05-11', 700, 90, 0),
(20, 'sapipotong', 'jantan', '7', 'tidak', '2025-10-22', 777, 0, 0),
(21, 'sapipotong', 'betina', '2', 'tidak', '2020-07-23', 569, 0, 0),
(22, 'sapiperah', 'betina', '6', 'ya', '2022-06-13', 366, 5, 0),
(23, 'kambingpotong', 'jantan', '4', 'ya', '2022-03-09', 578, 0, 3),
(24, 'kambingpotong', 'betina', '5', 'tidak', '2022-08-24', 670, 0, 2),
(25, 'kambingperah', 'betina', '3', 'tidak', '2022-06-15', 950, 53, 3),
(26, 'kambingperah', 'betina', '13', 'tidak', '2016-02-09', 2167, 33, 1);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `ternak`
--
ALTER TABLE `ternak`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `ternak`
--
ALTER TABLE `ternak`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=27;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
