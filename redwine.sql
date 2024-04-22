-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Gegenereerd op: 11 apr 2024 om 09:32
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
-- Tabelstructuur voor tabel `redwine`
--

CREATE TABLE `redwine` (
  `titel` varchar(100) NOT NULL,
  `beschrijving` text NOT NULL,
  `prijs` float NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Gegevens worden geëxporteerd voor tabel `redwine`
--

INSERT INTO `redwine` (`titel`, `beschrijving`, `prijs`) VALUES
('Château Grandeur 2018', 'Een verfijnde blend van zorgvuldig geselecteerde druiven, gekenmerkt door diepe tonen van zwarte kersen en subtiele hints van eikenhout.', 129),
('Domaine Prestige 2016', 'Een elegante rode wijn met fluweelzachte tannines, weelderige aroma\'s van rijpe pruimen en een vleugje kruidigheid.', 149),
('Riserva Aurelia 2015', 'Deze bekroonde Toscaanse wijn onthult een boeket van zongerijpte bramen en vanille, verweven met subtiele nuances van tabak en cacao.', 179),
('Barolo Riserva 2013', 'Een prachtige Barolo Riserva met complexe aroma\'s van rijpe kersen, gedroogde kruiden en tabak, ondersteund door stevige tannines en een lange, zijdezachte afdronk.', 199),
('Napa Valley Cabernet Sauvignon 2016', 'Een weelderige Napa Valley Cabernet Sauvignon met weelderige aroma\'s van zwarte bessen, cacao en vanille, gebalanceerd door stevige tannines en een verrukkelijk lange afdronk.', 179);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
