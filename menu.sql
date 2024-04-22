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
-- Tabelstructuur voor tabel `menu`
--

CREATE TABLE `menu` (
  `naam` varchar(100) NOT NULL,
  `beschrijving` text NOT NULL,
  `prijs` decimal(10,0) NOT NULL,
  `foto` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Gegevens worden geëxporteerd voor tabel `menu`
--

INSERT INTO `menu` (`naam`, `beschrijving`, `prijs`, `foto`) VALUES
('Truffelrisotto met Coquilles Saint-Jacques', 'Romige truffelrisotto met arborio-rijst, verfijnde truffelolie en Parmezaanse kaas, geserveerd met perfect gegrilde Coquilles Saint-Jacques voor een sublieme smaaksensatie.', 39, 0),
('Gegrilde Kreeft met Saffraanrisotto', 'Geniet van een luxueuze combinatie van sappige gegrilde kreeft, geserveerd met zijdezachte saffraanrisotto. De kreeft is perfect gegaard en afgewerkt met een botersausje verrijkt met verse kruiden. De saffraanrisotto is bereid met de fijnste arborio-rijst en biedt een delicate smaak die perfect samengaat met de rijke aroma\'s van de kreeft.', 49, 0),
('Tournedos Rossini met Truffelsaus', 'Een klassiek Frans gerecht van malse tournedos, perfect gebakken tot in de perfectie, geserveerd met een decadente truffelsaus. Deze verfijnde delicatesse wordt bekroond met een plakje ganzenlever en truffelschilfers, waardoor elke hap een gastronomisch feest wordt voor de zintuigen.', 53, 0),
('Zeebaarsfilet met Citroenbotersaus', 'Een verrukkelijke zeebaarsfilet, zorgvuldig gegrild en geserveerd met een verfijnde citroenbotersaus. De zachte, sappige vis wordt aangevuld met de heldere smaak van verse citroen en de romige textuur van de botersaus. Een smaakvolle en elegante keuze voor fijnproevers die op zoek zijn naar een heerlijke viservaring.', 45, 0),
('Biefstuk Rossini met Portsaus', 'Een vorstelijke biefstuk, sappig gegrild tot in perfectie, bekroond met een plakje ganzenlever en geserveerd met een weelderige portsau met een vleugje truffel. De biefstuk smelt op de tong terwijl de fluweelzachte ganzenlever en de rijke saus elke hap verrijken met een hemelse smaaksensatie.', 54, 0),
('Gegrilde Kreeft met Dragonbotersaus', ' Een verrukkelijke delicatesse van gegrilde kreeft, perfect gegaard en geserveerd met een verleidelijke dragonbotersaus. De sappige kreeftvlees wordt subtiel geaccentueerd door de romige, boterachtige saus met een vleugje dragon, wat resulteert in een harmonie van smaken die de zintuigen betovert.', 64, 0),
('Zalmfilet met Champagnesaus', 'Een exquise gerecht van zalmfilet, delicaat gegrild en geserveerd met een weelderige champagnesaus. De zalmfilet smelt bij elke hap op de tong, terwijl de verfijnde smaak van de champagnesaus een feestelijk tintje toevoegt aan deze culinaire ervaring. Een elegante keuze voor liefhebbers van zeevruchten en verfijnde smaken.', 49, 0),
('Kalfsoester met Morieljesaus', 'Een vorstelijke traktatie van malse kalfsoester, perfect gebakken en geserveerd met een rijke morieljesaus. Elke hap van deze delicatesse is een culinaire reis, waarbij de zachte textuur van het kalfsvlees wordt gecombineerd met de intense smaak van de morieljesaus. Een onvergetelijke ervaring voor fijnproevers die op zoek zijn naar verfijnde smaken.', 69, 0),
('Gegrilde Krokodillenfilet met Mangochutney', 'Een onvergetelijke delicatesse van mals gegrilde krokodillenfilet, geserveerd met een verfrissende mangochutney. De krokodillenfilet, met zijn zachte en sappige textuur, wordt perfect gegrild en harmonieert prachtig met de zoete en pittige smaak van de mangochutney. Een unieke en exotische culinaire ervaring die de smaakpapillen prikkelt.', 79, 0),
('Runderlende met Truffeljus en Krokante Groenten', 'Een luxueus gerecht van sappige runderlende, perfect gegaard en geserveerd met een verfijnde truffeljus. De rijke smaak van het rundvlees wordt subliem aangevuld door de aardse tonen van de truffeljus. Het gerecht wordt vergezeld door knapperige, seizoensgebonden groenten, licht gekarameliseerd voor een perfecte textuur en smaakbalans.', 57, 0),
('Gegrilde Struisvogelsteak met Rode Wijnsaus', ' Een sensationele delicatesse van malse gegrilde struisvogelsteak, geserveerd met een weelderige rode wijnsaus. De struisvogelsteak, met zijn unieke en sappige textuur, wordt perfect gegrild en gepresenteerd met een saus die doordrenkt is met de rijke smaken van rode wijn, kruiden en specerijen. Een verrukkelijke combinatie die de zintuigen betovert en een onvergetelijke culinaire ervaring biedt.', 42, 0),
('Gegrilde Eendenborst met Vijgencompote', 'Een weelderig gerecht van gegrilde eendenborst, perfect bereid en geserveerd met een heerlijke vijgencompote. De eendenborst, met zijn sappige en malse textuur, wordt verrijkt met de zoete en licht gekruide smaken van de vijgencompote. Elk stukje vlees wordt geaccentueerd door de complexe smaakcombinaties, waardoor elke hap een culinaire ontdekking wordt.', 69, 0),
('Gegrilde Lamsrack met Muntpesto', 'Een verrukkelijk gerecht van sappige gegrilde lamsrack, perfect gegaard en geserveerd met een verfrissende muntpesto. De lamsrack, met zijn malse en sappige vlees, wordt subtiel geaccentueerd door de aromatische smaak van de muntpesto. Elke hap biedt een harmonieuze combinatie van smaken die de zintuigen betovert en een onvergetelijke culinaire ervaring creëert.', 74, 0),
('Gegrilde Kalfskotelet met Rode Wijnsaus', 'Een voortreffelijk gerecht van mals gegrilde kalfskotelet, perfect bereid en geserveerd met een rijke rode wijnsaus. De kotelet, met zijn sappige en malse vlees, wordt verrijkt met de diepe smaken van de rode wijnsaus, die een heerlijke en elegante toevoeging vormt. Een gastronomisch hoogstandje dat elke fijnproever zal bekoren en verleiden.', 82, 0),
('Teriyaki Zalm met Gember en Zoete Sojasaus', 'Een smaakvol gerecht van sappige teriyaki zalm, subtiel gemarineerd en gegrild tot in perfectie, geserveerd met een verfijnde gember en zoete sojasaus. De zalm, met zijn delicate textuur en rijke smaak, wordt verder versterkt door de zoete en hartige tonen van de teriyaki marinade en de pittige kick van verse gember. Een verrukkelijke fusion van smaken die uw smaakpapillen zal betoveren.', 63, 0),
('Aziatische Style Biefstuk met Szechuan Peper', 'Een smaakvol gerecht van malse biefstuk, gemarineerd in een aromatische mix van Aziatische kruiden en gegrild tot in perfectie, geserveerd met een pittige Szechuan peper saus. De biefstuk, met zijn sappige en malse textuur, wordt verder verrijkt door de complexe smaken van de saus, met een perfecte balans tussen pittigheid en kruidigheid. Een verrukkelijke culinaire ervaring die de zintuigen prikkelt.', 69, 0),
('Koreaanse BBQ Short Ribs met Kimchi', 'Een onweerstaanbaar gerecht van malse Koreaanse BBQ short ribs, gemarineerd in een smaakvolle mix van sojasaus, sesamolie en knoflook, gegrild tot in perfectie en geserveerd met gefermenteerde kimchi. De ribs zijn boterzacht en sappig, doordrenkt met de rijke smaken van de marinade, terwijl de kimchi een pittige en knapperige tegenhanger biedt. Een explosie van smaken rechtstreeks uit de Koreaanse keuken.', 75, 0),
('Afrikaanse Gestoofde Lamsschenkel met Couscous en Harissa', 'Malse gestoofde lamsschenkel, doordrenkt met Afrikaanse kruiden, geserveerd op een bedje van couscous en verrijkt met pittige harissa voor een onvergetelijke smaaksensatie.', 89, 0),
('Afrikaanse Gegrilde Kreeftstaart met Romige Bobotie Risotto', 'Een decadent gerecht van gegrilde kreeftstaart, geserveerd met romige bobotie risotto, verrijkt met exotische specerijen en tropisch fruit. De kreeftstaart, sappig en vol van smaak, wordt geaccentueerd door de rijke en romige risotto, waardoor elke hap een ware smaakexplosie is. Een weelderige culinaire ervaring geïnspireerd op de Afrikaanse keuken.', 129, 0),
('Gegrilde Duif met Truffeljus en Aardappelgratin', 'Een exclusief gerecht van sappige gegrilde duif, subtiel gemarineerd en geserveerd met een verrukkelijke truffeljus. De delicate smaken van de duif worden perfect aangevuld door de diepe, aardse tonen van de truffeljus, terwijl de romige aardappelgratin een luxueuze textuur toevoegt aan dit culinaire meesterwerk. Een onvergetelijke Europese smaakbeleving die de zintuigen betovert.', 109, 0),
('Coq au Vin met Truffelaardappelpuree', 'Een weelderig gerecht van malse kip gestoofd in rode wijn, vergezeld van een zijdezachte truffelaardappelpuree. De kip is doordrenkt met de diepe smaken van rode wijn, samen met uien, champignons en knoflook, wat resulteert in een hartige en rijke stoofpot. De truffelaardappelpuree voegt een verfijnde touch toe aan dit traditionele Franse gerecht, waardoor elke hap een smaakvolle ervaring wordt.', 99, 0),
('Bouillabaisse met Rouille en Croutons', 'Een weelderige visstoofpot van verse zeevruchten, zoals garnalen, mosselen en zalm, gekookt in een rijke bouillon van tomaten, knoflook, saffraan en venkel. Geserveerd met smaakvolle rouille (een pittige knoflookmayonaise) en knapperige croutons. Elk hartverwarmend lepel van deze traditionele Provençaalse klassieker is een ware viering van de smaken van de Middellandse Zee.', 129, 0),
('Kreeftenbisque met Kaviaar en Truffelroom', 'Een verrukkelijke kreeftenbisque, bereid met de fijnste ingrediënten, verfraaid met delicate kaviaar en verrijkt met een subtiele truffelroom. Elk hartverwarmend lepeltje biedt een ongeëvenaarde luxe smaakervaring, waarbij de diepe, rijke smaken van de zee en de aardse tonen van truffel samensmelten tot een onvergetelijke culinaire belevenis.', 199, 0),
('Gegrilde Langoustine met Champagneboter en Beluga Kaviaar', 'Een meesterwerk van zeevruchten: gegrilde langoustine, delicaat geborsteld met een weelderige champagneboter en rijkelijk bedekt met zeldzame Beluga kaviaar. De langoustine is perfect gegaard, met een sappige textuur die samensmelt met de romige champagneboter en de verrukkelijke zilte smaak van de kaviaar. Een culinaire symfonie van luxe, perfectie en verfijning.', 299, 0),
('Fugu Sashimi met Ponzu-saus', 'Een gedurfde delicatesse van fugu sashimi, nauwkeurig bereid door een ervaren chef, geserveerd met een verfrissende ponzu-saus. De fugu, bekend om zijn delicaat vlees en subtiele smaak, wordt zorgvuldig bereid om ervoor te zorgen dat alle giftige delen zijn verwijderd, waardoor een unieke culinaire ervaring ontstaat. De ponzu-saus, met zijn evenwichtige smaken van sojasaus, citrus en mirin, voegt een heerlijke kick toe aan elke hap. Een avontuurlijke keuze voor fijnproevers die op zoek zijn naar een onvergetelijke smaakervaring.', 335, 0),
('Churrasco van Wagyu-rund met Chimichurri', 'Mals Wagyu-rund, perfect gegrild en geserveerd met pittige chimichurri-saus, een viering van Zuid-Amerikaanse smaken en luxe', 349, 0),
('Picanha Steak met Gegrilde Ananas en Caipirinha-salsa', 'Een weelderige Picanha steak, sappig gegrild en geserveerd met smaakvolle gegrilde ananas en een verfrissende Caipirinha-salsa. De Picanha steak, bekend om zijn sappige textuur en rijke smaak, wordt perfect bereid op de grill, waardoor elke hap een culinair genot wordt. De gegrilde ananas voegt een zoete en exotische smaak toe, terwijl de Caipirinha-salsa een vleugje Braziliaanse flair biedt. Een luxueuze traktatie geïnspireerd op de smaken van Zuid-Amerika.', 299, 0),
('Gegrilde Argentijnse Entrecote met Chimichurri', 'en vorstelijke entrecote van Argentijns rundvlees, perfect gegrild en geserveerd met een verkwikkende chimichurri-saus. De entrecote, met zijn sappige en malse textuur, is doordrenkt met de heerlijke smaken van de grill en wordt versterkt door de pittige chimichurri-saus. Elke hap biedt een explosie van smaak en luxe, waardoor dit gerecht een onmisbare keuze is voor fijnproevers die op zoek zijn naar een betaalbare gastronomische ervaring.', 89, 0),
('Zeebaarsfilet met Mojo Verde en Geroosterde Groenten', 'Een verfijnd gerecht van sappige zeebaarsfilet, perfect gebakken en geserveerd met een smaakvolle Mojo Verde-saus en geroosterde seizoensgroenten. De zeebaars, met zijn delicate smaak en boterachtige textuur, wordt subtiel versterkt door de kruidige en krachtige smaken van de Mojo Verde-saus. De geroosterde groenten voegen een knapperige textuur en een diepe smaak toe aan dit heerlijke gerecht. Een betaalbare luxe die de smaakpapillen streelt en een genot is voor zowel het oog als de smaak.', 79, 0),
('Gegrilde Argentijnse Bife de Lomo met Malbec-saus', 'Een weelderige bife de lomo van het hoogste kwaliteitsniveau, perfect gegrild en geserveerd met een decadente Malbec-saus. De bife de lomo, afkomstig van het meest malse deel van het rund, smelt bij elke hap op de tong, terwijl de rijke smaak van de Malbec-saus een diepe complexiteit toevoegt aan dit culinaire meesterwerk. Elk sappig stukje vlees is een symfonie van smaken, een viering van Argentijnse gastronomie die de zintuigen betovert en de geest verheft.', 119, 0),
('Zeebaarsfilet met Romesco-saus en Saffraanrisotto', 'Een weelderig gerecht van sappige zeebaarsfilet, perfect gebakken en geserveerd met een verrukkelijke Romesco-saus en zijdezachte saffraanrisotto. De zeebaars, met zijn delicate textuur en verfijnde smaak, wordt subtiel versterkt door de smaken van de Romesco-saus, terwijl de saffraanrisotto een luxueuze toevoeging vormt die perfect past bij de zeevruchten. Een culinair meesterwerk dat een symfonie van smaken biedt en de gasten verwent met een onvergetelijke ervaring.', 89, 0),
('Gegrilde Ribeye met Chimichurri en Geroosterde Groenten', 'Een vorstelijke ribeye steak, perfect gegrild en geserveerd met een smaakvolle chimichurri-saus en geroosterde seizoensgroenten. De ribeye, met zijn rijke marmering en sappige textuur, smelt op de tong bij elke hap, terwijl de pittige chimichurri-saus een verrukkelijke smaakexplosie toevoegt. De geroosterde groenten bieden een perfecte aanvulling op dit luxueuze gerecht. Een culinair meesterwerk dat de smaken van Zuid-Amerika tot leven brengt en elke gast verwent met een onvergetelijke smaakervaring.', 109, 0),
('Gegrilde Argentijnse Runderribben met Malbec Glazuur', 'Een weelderig gerecht van sappige Argentijnse runderribben, perfect gegrild en bedekt met een verrukkelijk Malbec glazuur. De runderribben, met hun rijke smaak en sappige vlees, worden zorgvuldig gegrild tot in perfectie, waardoor elke hap een ware smaakexplosie is. Het Malbec glazuur voegt een diepe en robuuste smaak toe, geaccentueerd door de fruitige tonen van de wijn. Een culinair meesterwerk dat de smaken van Argentinië tot leven brengt en elke fijnproever zal bekoren.', 87, 0);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
