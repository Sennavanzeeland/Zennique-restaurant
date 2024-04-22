-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Gegenereerd op: 11 apr 2024 om 09:33
-- Serverversie: 10.4.28-MariaDB
-- PHP-versie: 8.2.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `restaurant`
--

-- --------------------------------------------------------

--
-- Tabelstructuur voor tabel `whitewine`
--

CREATE TABLE `whitewine` (
  `titel` varchar(100) NOT NULL,
  `beschrijving` text NOT NULL,
  `prijs` float NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Gegevens worden geëxporteerd voor tabel `whitewine`
--

INSERT INTO `whitewine` (`titel`, `beschrijving`, `prijs`) VALUES
('Château Blanc 2020', 'Een verfijnde witte wijn met levendige aroma\'s van perzik en citrus, harmonieus verweven met subtiele tonen van vanille en honing.', 99),
('Domaine Lumière 2019', 'Een weelderige Chardonnay met een rijke textuur en tonen van tropisch fruit, ondersteund door een delicate toets van geroosterde hazelnoten.', 119),
('Riserva Bianca 2017', 'Een prachtige blend van inheemse Italiaanse druiven met een expressieve neus van witte bloemen en verse peren, gevolgd door een verfijnde mineraliteit en een zijdezachte afdronk.', 139),
('Grand Cru Chablis 2018', ' Een uitmuntende Chablis met levendige aroma\'s van groene appels en kalksteenmineraliteit, verweven met verfrissende citrustonen en een elegante afdronk.', 159),
('Sancerre Excellence 2019', 'Een verfijnde Sancerre met delicate aroma\'s van bloesems en exotisch fruit, in balans gebracht met levendige zuren en een minerale ondertoon.', 129);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
