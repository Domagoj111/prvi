ALTER TABLE `filmovi`
ADD KEY `fk_zanr` (`sifraZanra`),
  ADD CONSTRAINT `fk_zanr` FOREIGN KEY (`sifraZanra`) REFERENCES `zanr` (`sifraZanra`) ON UPDATE CASCADE;


ALTER TABLE `posudba`
  ADD KEY `sifraCjenika` (`sifraCjenika`),
  ADD KEY `clanskiBroj` (`clanskiBroj`),
  ADD KEY `sifraFilma` (`sifraFilma`),
  ADD CONSTRAINT `fk_cijena` FOREIGN KEY (`sifraCjenika`) REFERENCES `cjenik` (`sifraCjenika`) ON UPDATE CASCADE,
  ADD CONSTRAINT `fk_clan` FOREIGN KEY (`clanskiBroj`) REFERENCES `clanovi` (`clanskiBroj`) ON UPDATE CASCADE,
  ADD CONSTRAINT `fk_film` FOREIGN KEY (`sifraFilma`) REFERENCES `filmovi` (`sifraFilma`) ON UPDATE CASCADE;
