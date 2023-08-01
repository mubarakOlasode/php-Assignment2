-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: Aug 01, 2023 at 11:14 PM
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
-- Database: `mydb`
--

-- --------------------------------------------------------

--
-- Table structure for table `STUDENT`
--

CREATE TABLE `STUDENT` (
  `Id` int(20) NOT NULL,
  `fname` varchar(20) NOT NULL,
  `lname` varchar(20) NOT NULL,
  `email` varchar(40) NOT NULL,
  `address` varchar(20) NOT NULL,
  `city` varchar(20) NOT NULL,
  `zip` varchar(10) NOT NULL,
  `Password` varchar(500) NOT NULL,
  `image` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `STUDENT`
--

INSERT INTO `STUDENT` (`Id`, `fname`, `lname`, `email`, `address`, `city`, `zip`, `Password`, `image`) VALUES
(18, 'Mubarak', 'Olasode', 'olasodem2@yahoo.com', '62 Forest Manor', 'scarborough', 'M2J 0B6', '168be3470e7b016e9acc87db2aa311abe57c55cd3380cc5a8e7258f7e445198fe46ad79765645f5f5a25ddf7abc73a8a2c00dc269ea641aa0346d4944928429b', 'img/irene-kredenets-dwKiHoqqxk8-unsplash.jpg'),
(19, 'Rodiyyah', 'Alimi', 'olasodem2@yahoo.com', '62 Forest parkway', 'North York', 'M2J 0B6', 'c758b6405fa7049f3a300b8b5aedd612a6ec17d4088d505fca384de2136ff08d465976b4c977043475a8f9e79c52df2014637ddc47d472358712395e1e29772f', 'img/usama-akram-kP6knT7tjn4-unsplash.jpg'),
(20, 'AbdulMalik', 'Olasode', 'olasodemubaraka@gmail.com', '72 Donald Manor', 'North York', 'M2J 0B6', 'e3eb5ce7351512f4d94b0308e713c427df30bda62af925bfcf0b16ffd2c3caff8c77c23236b01e4ba45dc805bd57fddadb092ba267949d8d622078f3791e4322', 'img/sebastien-chiron-1LFXMyrFRNw-unsplash.jpg');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `STUDENT`
--
ALTER TABLE `STUDENT`
  ADD PRIMARY KEY (`Id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `STUDENT`
--
ALTER TABLE `STUDENT`
  MODIFY `Id` int(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
