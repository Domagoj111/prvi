-- phpMyAdmin SQL Dump
-- version 4.7.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Nov 01, 2019 at 10:54 AM
-- Server version: 10.1.30-MariaDB
-- PHP Version: 7.2.1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `videoteka`
--
CREATE DATABASE IF NOT EXISTS `videoteka` DEFAULT CHARACTER SET latin1 COLLATE latin1_swedish_ci;
USE `videoteka`;

-- --------------------------------------------------------

--
-- Table structure for table `cjenik`
--

CREATE TABLE `cjenik` (
  `sifraCjenika` int(10) UNSIGNED NOT NULL,
  `kategorija` varchar(255) NOT NULL,
  `cijena` double(4,2) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `cjenik`
--

INSERT INTO `cjenik` (`sifraCjenika`, `kategorija`, `cijena`) VALUES
(1, 'Hit', 15.00),
(2, 'Novi', 12.00);

-- --------------------------------------------------------

--
-- Table structure for table `clanovi`
--

CREATE TABLE `clanovi` (
  `clanskiBroj` int(10) UNSIGNED NOT NULL,
  `ime` varchar(255) NOT NULL,
  `prezime` varchar(255) NOT NULL,
  `datumUclanjenja` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `clanovi`
--

INSERT INTO `clanovi` (`clanskiBroj`, `ime`, `prezime`, `datumUclanjenja`) VALUES
(1, 'Pero', 'Peric', '2019-10-13'),
(2, 'Ana', 'Anic', '2019-10-11');

-- --------------------------------------------------------

--
-- Table structure for table `filmovi`
--

CREATE TABLE `filmovi` (
  `sifraFilma` int(10) UNSIGNED NOT NULL,
  `naziv` varchar(255) NOT NULL,
  `godinaIzdanja` int(4) NOT NULL,
  `kolicinaDVD` tinyint(3) UNSIGNED NOT NULL,
  `kolicinaBR` tinyint(3) UNSIGNED NOT NULL,
  `sifraZanra` int(10) UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `filmovi`
--

INSERT INTO `filmovi` (`sifraFilma`, `naziv`, `godinaIzdanja`, `kolicinaDVD`, `kolicinaBR`, `sifraZanra`) VALUES
(1, 'Pakleni šund', 1994, 2, 1, 1),
(2, 'Strah i prezir u Las Vegasu', 1998, 3, 1, 1);

-- --------------------------------------------------------

--
-- Table structure for table `posudba`
--

CREATE TABLE `posudba` (
  `sifraPosudbe` int(10) UNSIGNED NOT NULL,
  `clanskiBroj` int(10) UNSIGNED NOT NULL,
  `sifraFilma` int(10) UNSIGNED NOT NULL,
  `datumPosudbe` date NOT NULL,
  `datumPovratka` date DEFAULT NULL,
  `sifraCjenika` int(10) UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `posudba`
--

INSERT INTO `posudba` (`sifraPosudbe`, `clanskiBroj`, `sifraFilma`, `datumPosudbe`, `datumPovratka`, `sifraCjenika`) VALUES
(1, 1, 1, '2019-10-06', NULL, 1),
(2, 2, 2, '2019-10-07', NULL, 1);

-- --------------------------------------------------------

--
-- Table structure for table `zanr`
--

CREATE TABLE `zanr` (
  `sifraZanra` int(10) UNSIGNED NOT NULL,
  `naziv` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `zanr`
--

INSERT INTO `zanr` (`sifraZanra`, `naziv`) VALUES
(1, 'Drama'),
(2, 'Komedija');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `cjenik`
--
ALTER TABLE `cjenik`
  ADD PRIMARY KEY (`sifraCjenika`);

--
-- Indexes for table `clanovi`
--
ALTER TABLE `clanovi`
  ADD PRIMARY KEY (`clanskiBroj`);

--
-- Indexes for table `filmovi`
--
ALTER TABLE `filmovi`
  ADD PRIMARY KEY (`sifraFilma`),
  ADD KEY `fk_zanr` (`sifraZanra`);

--
-- Indexes for table `posudba`
--
ALTER TABLE `posudba`
  ADD PRIMARY KEY (`sifraPosudbe`),
  ADD KEY `sifraCjenika` (`sifraCjenika`),
  ADD KEY `clanskiBroj` (`clanskiBroj`),
  ADD KEY `sifraFilma` (`sifraFilma`);

--
-- Indexes for table `zanr`
--
ALTER TABLE `zanr`
  ADD PRIMARY KEY (`sifraZanra`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `cjenik`
--
ALTER TABLE `cjenik`
  MODIFY `sifraCjenika` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `clanovi`
--
ALTER TABLE `clanovi`
  MODIFY `clanskiBroj` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `filmovi`
--
ALTER TABLE `filmovi`
  MODIFY `sifraFilma` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `posudba`
--
ALTER TABLE `posudba`
  MODIFY `sifraPosudbe` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `zanr`
--
ALTER TABLE `zanr`
  MODIFY `sifraZanra` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `filmovi`
--
ALTER TABLE `filmovi`
  ADD CONSTRAINT `fk_zanr` FOREIGN KEY (`sifraZanra`) REFERENCES `zanr` (`sifraZanra`);

--
-- Constraints for table `posudba`
--
ALTER TABLE `posudba`
  ADD CONSTRAINT `fk_cijena` FOREIGN KEY (`sifraCjenika`) REFERENCES `cjenik` (`sifraCjenika`),
  ADD CONSTRAINT `fk_clan` FOREIGN KEY (`clanskiBroj`) REFERENCES `clanovi` (`clanskiBroj`),
  ADD CONSTRAINT `fk_film` FOREIGN KEY (`sifraFilma`) REFERENCES `filmovi` (`sifraFilma`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
