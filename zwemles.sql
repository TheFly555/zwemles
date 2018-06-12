-- phpMyAdmin SQL Dump
-- version 4.8.0.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Gegenereerd op: 08 jun 2018 om 07:23
-- Serverversie: 10.1.32-MariaDB
-- PHP-versie: 7.2.5

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `zwemles`
--

-- --------------------------------------------------------

--
-- Tabelstructuur voor tabel `deelname`
--

CREATE TABLE `deelname` (
  `lescode` int(8) NOT NULL,
  `leerlingnr` int(4) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Gegevens worden geëxporteerd voor tabel `deelname`
--

INSERT INTO `deelname` (`lescode`, `leerlingnr`) VALUES
(1, 2);

-- --------------------------------------------------------

--
-- Tabelstructuur voor tabel `instructeur`
--

CREATE TABLE `instructeur` (
  `instructeur_code` int(4) NOT NULL,
  `instructeur` varchar(64) NOT NULL,
  `telnr_instr` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Gegevens worden geëxporteerd voor tabel `instructeur`
--

INSERT INTO `instructeur` (`instructeur_code`, `instructeur`, `telnr_instr`) VALUES
(1, 'Jens van de Ende', 612345678),
(2, 'Nasim A Addink', 612345678);

-- --------------------------------------------------------

--
-- Tabelstructuur voor tabel `leerling`
--

CREATE TABLE `leerling` (
  `leerlingnr` int(4) NOT NULL,
  `geboortedatum` date NOT NULL,
  `leerling_naam` varchar(55) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Gegevens worden geëxporteerd voor tabel `leerling`
--

INSERT INTO `leerling` (`leerlingnr`, `geboortedatum`, `leerling_naam`) VALUES
(2, '2018-06-05', 'Raimond L Coomans');

-- --------------------------------------------------------

--
-- Tabelstructuur voor tabel `zwembad`
--

CREATE TABLE `zwembad` (
  `zwembad_id` int(1) NOT NULL,
  `adres` varchar(64) NOT NULL,
  `plaats` varchar(64) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Gegevens worden geëxporteerd voor tabel `zwembad`
--

INSERT INTO `zwembad` (`zwembad_id`, `adres`, `plaats`) VALUES
(1, 't\'Zuden 113', 'Leek'),
(2, 'Verhulstlaan 16', 'Bilthoven');

-- --------------------------------------------------------

--
-- Tabelstructuur voor tabel `zwemles`
--

CREATE TABLE `zwemles` (
  `lescode` int(8) NOT NULL,
  `instructeur_code` int(4) NOT NULL,
  `zwembad_id` int(2) NOT NULL,
  `diploma` varchar(1) NOT NULL,
  `datumtijd` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Gegevens worden geëxporteerd voor tabel `zwemles`
--

INSERT INTO `zwemles` (`lescode`, `instructeur_code`, `zwembad_id`, `diploma`, `datumtijd`) VALUES
(1, 1, 1, 'A', '2018-05-29 00:00:00');

--
-- Indexen voor geëxporteerde tabellen
--

--
-- Indexen voor tabel `instructeur`
--
ALTER TABLE `instructeur`
  ADD PRIMARY KEY (`instructeur_code`);

--
-- Indexen voor tabel `leerling`
--
ALTER TABLE `leerling`
  ADD PRIMARY KEY (`leerlingnr`);

--
-- Indexen voor tabel `zwembad`
--
ALTER TABLE `zwembad`
  ADD PRIMARY KEY (`zwembad_id`);

--
-- Indexen voor tabel `zwemles`
--
ALTER TABLE `zwemles`
  ADD PRIMARY KEY (`lescode`);

--
-- AUTO_INCREMENT voor geëxporteerde tabellen
--

--
-- AUTO_INCREMENT voor een tabel `instructeur`
--
ALTER TABLE `instructeur`
  MODIFY `instructeur_code` int(4) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT voor een tabel `leerling`
--
ALTER TABLE `leerling`
  MODIFY `leerlingnr` int(4) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT voor een tabel `zwembad`
--
ALTER TABLE `zwembad`
  MODIFY `zwembad_id` int(1) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT voor een tabel `zwemles`
--
ALTER TABLE `zwemles`
  MODIFY `lescode` int(8) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
