-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: Aug 01, 2023 at 07:34 AM
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
  `Password` varchar(500) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `STUDENT`
--

INSERT INTO `STUDENT` (`Id`, `fname`, `lname`, `email`, `address`, `city`, `zip`, `Password`) VALUES
(3, 'Jagnoor', 'kaur', 'JagnoorKaur@yahoo.com', '62 Forest Manor', 'North York', 'M2J 0B6', 'd84dfda65d717a4d081885626bcf2a8283d55cb9cf6e800e341af447b18ecb3ae0e7bcb065e67e80aa13f5111e46d95d6c99d5cbc831d46bf64be96520077f38'),
(4, 'Mubarak', 'Olasode', 'olasodem2@yahoo.com', '62 Forest Manor', 'North York', 'M2J 0B6', '168be3470e7b016e9acc87db2aa311abe57c55cd3380cc5a8e7258f7e445198fe46ad79765645f5f5a25ddf7abc73a8a2c00dc269ea641aa0346d4944928429b'),
(5, 'Adeyinka', 'AbdulMalik', 'mubarakolasode@yahoo.com', '70 Parkway Manor', 'North York', 'M2J 0B6', '559abe5e105f55a91ff0a14c1ac40e38d7d239ffda698c2b2d3773569d2fdbf3e73785d673d305a13de41acead367606a4eb292587441485a5b49f8c35a96e1e');

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
  MODIFY `Id` int(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
