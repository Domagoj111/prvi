CREATE DATABASE IF NOT EXISTS `videoteka`;

CREATE TABLE `cjenik` (
  `sifraCjenika` int(10) UNSIGNED NOT NULL,
  `kategorija` varchar(255) NOT NULL,
  `cijena` double(4,2) NOT NULL
) ENGINE=InnoDB;

-- --------------------------------------------------------

CREATE TABLE `clanovi` (
  `clanskiBroj` int(10) UNSIGNED NOT NULL,
  `ime` varchar(255) NOT NULL,
  `prezime` varchar(255) NOT NULL,
  `datumUclanjenja` date NOT NULL
) ENGINE=InnoDB;

-- --------------------------------------------------------

CREATE TABLE `filmovi` (
  `sifraFilma` int(10) UNSIGNED NOT NULL,
  `naziv` varchar(255) NOT NULL,
  `godinaIzdanja` int(4) NOT NULL,
  `kolicinaDVD` tinyint(3) UNSIGNED NOT NULL,
  `kolicinaBR` tinyint(3) UNSIGNED NOT NULL,
  `sifraZanra` int(10) UNSIGNED NOT NULL
) ENGINE=InnoDB;

-- --------------------------------------------------------

CREATE TABLE `posudba` (
  `sifraPosudbe` int(10) UNSIGNED NOT NULL,
  `clanskiBroj` int(10) UNSIGNED NOT NULL,
  `sifraFilma` int(10) UNSIGNED NOT NULL,
  `datumPosudbe` date NOT NULL,
  `datumPovratka` date NULL,
  `sifraCjenika` int(10) UNSIGNED NOT NULL
) ENGINE=InnoDB;

--

CREATE TABLE `zanr` (
  `sifraZanra` int(10) UNSIGNED NOT NULL,
  `naziv` varchar(255) NOT NULL
) ENGINE=InnoDB;