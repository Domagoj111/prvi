INSERT INTO `clanovi` (`clanskiBroj`, `ime`, `prezime`, `datumUclanjenja`) VALUES
(1, 'Pero', 'Peric', '2019-10-13'),
(2, 'Ana', 'Anic', '2019-10-11'),
(3, 'Marko', 'Markić', '2019-10-12');

INSERT INTO `zanr` (`sifraZanra`, `naziv`) VALUES
(1, 'Drama'),
(2, 'Komedija'),
(3, 'Triler');

--

UPDATE clanovi 
SET 
    datumUclanjenja = NOW()
WHERE
    clanskiBroj = 2;

--

DELETE FROM clanovi 
WHERE
    clanskiBroj = 3;

DELETE FROM zanr 
WHERE
    sifraZanra = 3;
