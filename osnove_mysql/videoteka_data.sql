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

-- Dumping data for table videoteka.cjenik: ~3 rows (approximately)
DELETE FROM `cjenik`;
INSERT INTO `cjenik` (`id`, `hit`, `cijena`) VALUES
	(1, 'Nije hit', 5),
	(2, 'Hit', 10),
	(3, 'Stari Film', 2);

-- Dumping data for table videoteka.filmovi: ~3 rows (approximately)
DELETE FROM `filmovi`;
INSERT INTO `filmovi` (`id`, `naslov`, `zanrovi_id`, `cjenik_id`) VALUES
	(1, 'bla bla', 4, 'Hit'),
	(2, 'plesmuljak', 5, 'Stari Film'),
	(4, 'rambon18', NULL, 'Hit');

-- Dumping data for table videoteka.filmovi_detalji: ~2 rows (approximately)
DELETE FROM `filmovi_detalji`;
INSERT INTO `filmovi_detalji` (`id`, `medij`) VALUES
	(1, 'DVD'),
	(2, 'Stream');

-- Dumping data for table videoteka.izdavanja: ~3 rows (approximately)
DELETE FROM `izdavanja`;
INSERT INTO `izdavanja` (`id`, `datum_izdavanja`, `datum_povrata`, `filmovi_id`, `osobe_id`) VALUES
	(3, '2024-01-25 22:10:11', '2024-01-28 22:09:53', 1, 2),
	(6, '2024-01-25 22:10:43', '2024-02-14 22:10:24', 2, 1),
	(8, '2024-01-25 22:27:56', '2024-01-28 22:27:58', 4, 2);

-- Dumping data for table videoteka.osobe: ~2 rows (approximately)
DELETE FROM `osobe`;
INSERT INTO `osobe` (`id`, `ime`, `prezime`) VALUES
	(1, 'Marica', NULL),
	(2, 'John', 'Doe');

-- Dumping data for table videoteka.report: ~4 rows (approximately)
DELETE FROM `report`;
INSERT INTO `report` (`ime`, `naslov`, `hit`, `cijena`, `datum_izdavanja`, `datum_povrata`, `dani`, `ukupno`) VALUES
	('John DOe', 'bla bla', 'Hit', 10, '2024-01-25 22:10:11', '2024-01-28 22:09:53', 3, 30),
	('Marica', 'plesmuljak', 'Stari Film', 2, '2024-01-25 22:10:43', '2024-02-14 22:10:24', 20, 40),
	('John DOe', 'rambon18', 'Hit', 10, '2024-01-25 22:27:56', '2024-01-28 22:27:58', 3, 30),
	('Đon doe', 'rambo 18', 'Hit', 10, '2024-01-29 19:15:17', '2024-02-15 19:15:18', 16, 160);

-- Dumping data for table videoteka.zanrovi: ~5 rows (approximately)
DELETE FROM `zanrovi`;
INSERT INTO `zanrovi` (`id`, `tip`) VALUES
	(1, 'komedija'),
	(2, 'drama'),
	(3, 'sportski'),
	(4, 'horror'),
	(5, 'musical');

/*!40103 SET TIME_ZONE=IFNULL(@OLD_TIME_ZONE, 'system') */;
/*!40101 SET SQL_MODE=IFNULL(@OLD_SQL_MODE, '') */;
/*!40014 SET FOREIGN_KEY_CHECKS=IFNULL(@OLD_FOREIGN_KEY_CHECKS, 1) */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40111 SET SQL_NOTES=IFNULL(@OLD_SQL_NOTES, 1) */;
