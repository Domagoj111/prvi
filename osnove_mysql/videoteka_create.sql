-- --------------------------------------------------------
-- Host:                         127.0.0.1
-- Server version:               10.4.32-MariaDB - mariadb.org binary distribution
-- Server OS:                    Win64
-- HeidiSQL Version:             12.6.0.6765
-- --------------------------------------------------------

/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET NAMES utf8 */;
/*!50503 SET NAMES utf8mb4 */;
/*!40103 SET @OLD_TIME_ZONE=@@TIME_ZONE */;
/*!40103 SET TIME_ZONE='+00:00' */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;


-- Dumping database structure for videoteka
CREATE DATABASE IF NOT EXISTS `videoteka` /*!40100 DEFAULT CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci */;
USE `videoteka`;

-- Dumping structure for table videoteka.cjenik
CREATE TABLE IF NOT EXISTS `cjenik` (
  `id` smallint(6) NOT NULL AUTO_INCREMENT,
  `hit` enum('Hit','Nije hit','Stari Film') NOT NULL DEFAULT 'Nije hit',
  `cijena` int(11) NOT NULL DEFAULT 0,
  PRIMARY KEY (`id`),
  UNIQUE KEY `hit` (`hit`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- Data exporting was unselected.

-- Dumping structure for table videoteka.filmovi
CREATE TABLE IF NOT EXISTS `filmovi` (
  `id` smallint(6) NOT NULL AUTO_INCREMENT,
  `naslov` varchar(100) NOT NULL,
  `zanrovi_id` smallint(6) DEFAULT NULL,
  `cjenik_id` enum('Hit','Nije hit','Stari Film') NOT NULL DEFAULT 'Nije hit',
  PRIMARY KEY (`id`),
  KEY `FK_filmovi_zanrovi` (`zanrovi_id`),
  KEY `FK_filmovi_cjenik` (`cjenik_id`),
  CONSTRAINT `FK_filmovi_cjenik` FOREIGN KEY (`cjenik_id`) REFERENCES `cjenik` (`hit`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  CONSTRAINT `FK_filmovi_zanrovi` FOREIGN KEY (`zanrovi_id`) REFERENCES `zanrovi` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci COMMENT='ovo je tablica filmova';

-- Data exporting was unselected.

-- Dumping structure for table videoteka.filmovi_detalji
CREATE TABLE IF NOT EXISTS `filmovi_detalji` (
  `id` smallint(6) NOT NULL,
  `medij` enum('DVD','Bluray','Stream') DEFAULT NULL,
  PRIMARY KEY (`id`),
  CONSTRAINT `FK_filmovi_detalji_filmovi` FOREIGN KEY (`id`) REFERENCES `filmovi` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- Data exporting was unselected.

-- Dumping structure for table videoteka.izdavanja
CREATE TABLE IF NOT EXISTS `izdavanja` (
  `id` smallint(6) NOT NULL AUTO_INCREMENT,
  `datum_izdavanja` datetime NOT NULL DEFAULT curdate(),
  `datum_povrata` datetime DEFAULT curdate(),
  `filmovi_id` smallint(6) NOT NULL,
  `osobe_id` smallint(6) NOT NULL,
  PRIMARY KEY (`id`),
  KEY `FK_izdavanja_filmovi` (`filmovi_id`),
  KEY `FK_izdavanja_osobe` (`osobe_id`),
  CONSTRAINT `FK_izdavanja_filmovi` FOREIGN KEY (`filmovi_id`) REFERENCES `filmovi` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  CONSTRAINT `FK_izdavanja_osobe` FOREIGN KEY (`osobe_id`) REFERENCES `osobe` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION
) ENGINE=InnoDB AUTO_INCREMENT=9 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- Data exporting was unselected.

-- Dumping structure for table videoteka.osobe
CREATE TABLE IF NOT EXISTS `osobe` (
  `id` smallint(6) NOT NULL AUTO_INCREMENT,
  `ime` varchar(50) NOT NULL DEFAULT 'John DOe',
  `prezime` varchar(50) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- Data exporting was unselected.

-- Dumping structure for table videoteka.report
CREATE TABLE IF NOT EXISTS `report` (
  `ime` varchar(50) DEFAULT NULL,
  `naslov` varchar(100),
  `hit` enum('Hit','Nije hit','Stari Film') DEFAULT NULL,
  `cijena` int(11) DEFAULT NULL,
  `datum_izdavanja` datetime NOT NULL,
  `datum_povrata` datetime DEFAULT NULL,
  `dani` int(7) DEFAULT NULL,
  `ukupno` bigint(17) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- Data exporting was unselected.

-- Dumping structure for table videoteka.zanrovi
CREATE TABLE IF NOT EXISTS `zanrovi` (
  `id` smallint(6) NOT NULL AUTO_INCREMENT,
  `tip` varchar(100) DEFAULT 'komedija',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- Data exporting was unselected.

-- Dumping structure for view videoteka.zakasnina
-- Creating temporary table to overcome VIEW dependency errors
CREATE TABLE `zakasnina` (
	`ime` VARCHAR(50) NULL COLLATE 'utf8mb4_general_ci',
	`naslov` VARCHAR(100) NULL COLLATE 'utf8mb4_general_ci',
	`hit` ENUM('Hit','Nije hit','Stari Film') NULL COLLATE 'utf8mb4_general_ci',
	`cijena` INT(11) NULL,
	`datum_izdavanja` DATETIME NOT NULL,
	`datum_povrata` DATETIME NULL,
	`dani` INT(7) NULL,
	`ukupno` BIGINT(17) NULL
) ENGINE=MyISAM;

-- Removing temporary table and create final VIEW structure
DROP TABLE IF EXISTS `zakasnina`;
CREATE ALGORITHM=UNDEFINED SQL SECURITY DEFINER VIEW `zakasnina` AS SELECT osobe.ime
, filmovi.naslov
, cjenik.hit
, cjenik.cijena
, izdavanja.datum_izdavanja
, izdavanja.datum_povrata
, DATEDIFF(izdavanja.datum_povrata,izdavanja.datum_izdavanja) AS 'dani'
, DATEDIFF(izdavanja.datum_povrata,izdavanja.datum_izdavanja)*cjenik.cijena AS 'ukupno' 
FROM videoteka.izdavanja
LEFT JOIN videoteka.osobe ON izdavanja.osobe_id=osobe.id
LEFT JOIN filmovi ON filmovi.id=izdavanja.filmovi_id
LEFT JOIN cjenik ON filmovi.cjenik_id=cjenik.hit ;

/*!40103 SET TIME_ZONE=IFNULL(@OLD_TIME_ZONE, 'system') */;
/*!40101 SET SQL_MODE=IFNULL(@OLD_SQL_MODE, '') */;
/*!40014 SET FOREIGN_KEY_CHECKS=IFNULL(@OLD_FOREIGN_KEY_CHECKS, 1) */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40111 SET SQL_NOTES=IFNULL(@OLD_SQL_NOTES, 1) */;
