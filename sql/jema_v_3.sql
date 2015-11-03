-- phpMyAdmin SQL Dump
-- version 4.5.0.2
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Gegenereerd op: 03 nov 2015 om 09:23
-- Serverversie: 10.0.17-MariaDB
-- PHP-versie: 5.5.30

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `jema`
--

-- --------------------------------------------------------

--
-- Tabelstructuur voor tabel `product`
--

CREATE TABLE `product` (
  `product_code` int(10) NOT NULL,
  `product_naam` varchar(20) NOT NULL,
  `boolean` int(1) NOT NULL,
  `beschrijving` text NOT NULL,
  `prijs` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Gegevens worden geëxporteerd voor tabel `product`
--

INSERT INTO `product` (`product_code`, `product_naam`, `boolean`, `beschrijving`, `prijs`) VALUES
(1, 'office_2016', 0, 'Microsoft Word, of meestal alleen Word, is een van de meest gebruikte tekstverwerkers ter wereld. Het is gemaakt door Microsoft.\r\n\r\nMicrosoft Word werkt op Windows en OS X. Met behulp van Wine werken versies pre-2013 ook op Linux. Er zijn verschillende commerciële, gratis en vrije alternatieven beschikbaar, zoals LibreOffice, OpenOffice.org en AbiWord. Tot in het begin van de jaren jaren 90 was WordPerfect de meest gebruikte tekstverwerker, maar toen voor de pc het DOS-besturingssysteem door Windows werd vervangen, werd Word de algemeen gebruikte tekstverwerker. Word is in veel talen beschikbaar.', 420),
(2, 'Acrobat Standard DC', 1, 'Acrobat DC is de volledig nieuwe ontworpen desktop versie van de beste PDF-oplossing. Het omvat een mobiele app zodat je PDFjes kunt invullen, ondertekenen, en delen op elk apparaat. En met Document Cloud-services kun je vanaf elke locatie PDFjes maken,exporteren,bewerken en volgen, en op al je apparaten verbonden blivjen met je recente bestanden', 5),
(3, '3DS Max', 1, '3DS Max is een computerprogramma voor het vaardigen van 3D ruimtelijke modellen met behulp van vectoren en coördinaten. De gemaakte oppervlaktes kunnen worden bekleed met textures, de  geconstrueerde objecten kunnen bij elkaar in dezelfde virtuele ruimte worden geplaatst Daarnaast kan een virtuele camera met instelbare virtuele lenzen door deze scène worden gestuurd volgens een aan te geven route.', 50),
(4, 'lynda.com', 0, 'Our teachers are effective, passionate educators, who are also respected authorities in software, creative, and business fields. They are here to share their expertise in dozens of topics with you, with courses organized into these eight subject areas.', 10),
(5, 'Signavio', 0, 'Signavio combines the right business process management strategy with the ideal tool. The Signavio Process Editor offers a full range of functions and serves as an operative platform to include all process participants in business process management. Thanks to QuickModel’s user-friendly tabular process representation, even process participants with no experience in the BPM field can actively contribute to the documentation and optimization of processes. Collaborative BPM is the strategy for your success!', 75),
(6, 'McAfee', 1, 'McAfee, onderdeel van Intel Security, is het grootste bedrijf ter wereld dat zich specifiek toelegt op security-technologie. McAfee levert proactieve en beproefde oplossingen en services om systemen en netwerken over de hele wereld te beveiligen. Het beschermt consumenten en bedrijven van klein tot groot tegen de nieuwste malware en opkomende onlinebedreigingen. Onze oplossingen zijn speciaal ontworpen om met elkaar samen te werken: ze combineren antimalware-, antispyware- en antivirussoftware met functies voor security-beheer. Deze zorgen niet alleen voor een ongeëvenaard realtime inzicht en analyses, maar verlagen ook het risico, zorgen voor compliance, verbeteren de internet-security en helpen bedrijven efficiënter te werken.', 15),
(7, 'Photoshop CC', 1, 'Maak verbluffende afbeeldingen met s werelds beste software voor digitale beeldbewerking. Nu ook met gereedschappen voor 3D-bewerking en beeldanalyse. Gebruik altijd de nieuwste functies — alleen in Adobe Creative Cloud.', 5),
(8, 'Adobe Photoshop Elem', 1, 'Van middelmatige snapshot naar lievelingsfoto. Breng snel bewerkingen aan, voeg als een professional artistieke elementen toe of transformeer je foto s om je vrienden en familie te imponeren. In Photoshop Elements kun je stapsgewijze instructies volgen of kun je het voor je laten doen.Al je herinneringen binnen handbereik. Orden, label, vind en bekijk je foto’s op jouw manier.Toon je creatieve kant. Maak plakboekpagina’s, kaarten en kalenders om blijvende herinneringen te delen.Deel je herinneringen met de mensen die belangrijk voor je zijn, op de manier zoals jij dat wilt – Facebook, YouTube, Vimeo, Twitter en meer.*', 35),
(9, 'Adobe Flash Builder ', 1, 'Adobe® Flash® Builder® 4.7 software is a development environment for building games and applications using the ActionScript® language and the open source Flex framework. Flash Builder Premium includes professional testing tools such as profilers, network monitoring, and unit testing support.', 20);

--
-- Indexen voor geëxporteerde tabellen
--

--
-- Indexen voor tabel `product`
--
ALTER TABLE `product`
  ADD PRIMARY KEY (`product_code`);

--
-- AUTO_INCREMENT voor geëxporteerde tabellen
--

--
-- AUTO_INCREMENT voor een tabel `product`
--
ALTER TABLE `product`
  MODIFY `product_code` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
