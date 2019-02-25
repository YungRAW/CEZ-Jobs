-- phpMyAdmin SQL Dump
-- version 4.8.3
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Feb 25, 2019 at 11:34 AM
-- Server version: 10.1.37-MariaDB
-- PHP Version: 7.2.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `jobs.cez.local`
--

-- --------------------------------------------------------

--
-- Table structure for table `jobs`
--

CREATE TABLE `jobs` (
  `ID` int(255) NOT NULL,
  `Companie` varchar(30) NOT NULL,
  `Directia` varchar(50) NOT NULL,
  `Departament` varchar(50) NOT NULL,
  `DenumirePost` varchar(20) NOT NULL,
  `FirmaPost` varchar(30) NOT NULL,
  `TipPost` tinyint(1) NOT NULL,
  `PerioadaPost` varchar(255) NOT NULL,
  `Locatie` varchar(255) NOT NULL,
  `InformatiiPost` varchar(255) NOT NULL,
  `Cerinte` varchar(255) NOT NULL,
  `Responsabilitati` varchar(255) NOT NULL,
  `ValabilitateStart` date NOT NULL,
  `ValabilitateEnd` date NOT NULL,
  `Ocupat` tinyint(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `jobs`
--

INSERT INTO `jobs` (`ID`, `Companie`, `Directia`, `Departament`, `DenumirePost`, `FirmaPost`, `TipPost`, `PerioadaPost`, `Locatie`, `InformatiiPost`, `Cerinte`, `Responsabilitati`, `ValabilitateStart`, `ValabilitateEnd`, `Ocupat`) VALUES
(1, 'CEZ Romania', 'Dtes', 'Sisteme Software', 'Programator', 'Cez Romania SA', 1, '0000-00-00', 'Craiova', 'este un post pentru ceva', 'sa fie adaptabil, sa cunoasca platforma c++', 'sa aibe permis si sa vina la servici', '0000-00-00', '0000-00-00', 0);

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `ID` int(255) NOT NULL,
  `Username` varchar(255) NOT NULL,
  `Password` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`ID`, `Username`, `Password`) VALUES
(1, 'admin', 'admin'),
(2, 'cez.local', 'qwerty'),
(3, 'adminP', 'qwert');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `jobs`
--
ALTER TABLE `jobs`
  ADD PRIMARY KEY (`ID`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`ID`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `jobs`
--
ALTER TABLE `jobs`
  MODIFY `ID` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `ID` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
