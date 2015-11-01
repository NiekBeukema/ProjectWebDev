-- phpMyAdmin SQL Dump
-- version 4.5.0.2
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Gegenereerd op: 01 nov 2015 om 14:40
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
-- Tabelstructuur voor tabel `bestaat_uit`
--

CREATE TABLE `bestaat_uit` (
  `order_order_id` int(11) NOT NULL,
  `product_product_code` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Tabelstructuur voor tabel `gebruiker`
--

CREATE TABLE `gebruiker` (
  `gebruiker id` int(8) NOT NULL,
  `user_role` varchar(10) NOT NULL,
  `voornaam` varchar(15) NOT NULL,
  `achternaam` varchar(15) NOT NULL,
  `inlognaam` varchar(15) NOT NULL,
  `wachtwoord` text NOT NULL,
  `plaats` varchar(15) DEFAULT NULL,
  `straatnaam` varchar(15) DEFAULT NULL,
  `postcode` text NOT NULL,
  `telefoonnummer` int(10) NOT NULL,
  `e_mail` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Gegevens worden geëxporteerd voor tabel `gebruiker`
--

INSERT INTO `gebruiker` (`gebruiker id`, `user_role`, `voornaam`, `achternaam`, `inlognaam`, `wachtwoord`, `plaats`, `straatnaam`, `postcode`, `telefoonnummer`, `e_mail`) VALUES
(1, 'customer', 'henk', 'henkinson', 'henk', 'henk', 'henkstad', 'kampakkers', '9531HV', 599236503, 'henkinson@hotmail.com');

-- --------------------------------------------------------

--
-- Tabelstructuur voor tabel `levert_een`
--

CREATE TABLE `levert_een` (
  `software_deliverer_deliver_id` int(10) NOT NULL,
  `product_product_code` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Tabelstructuur voor tabel `order`
--

CREATE TABLE `order` (
  `order_id` int(10) NOT NULL,
  `order_datum` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Tabelstructuur voor tabel `product`
--

CREATE TABLE `product` (
  `product code` int(10) NOT NULL,
  `product_naam` varchar(20) NOT NULL,
  `boolean` int(1) NOT NULL,
  `beschrijving` varchar(150) NOT NULL,
  `prijs` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Tabelstructuur voor tabel `software deliverer`
--

CREATE TABLE `software deliverer` (
  `deliverer id` int(10) NOT NULL,
  `naam` varchar(20) NOT NULL,
  `plaats` varchar(20) NOT NULL,
  `adres` text NOT NULL,
  `postcode` text NOT NULL,
  `telefoonnummer` int(10) NOT NULL,
  `e-mail` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Indexen voor geëxporteerde tabellen
--

--
-- Indexen voor tabel `bestaat_uit`
--
ALTER TABLE `bestaat_uit`
  ADD PRIMARY KEY (`order_order_id`,`product_product_code`);

--
-- Indexen voor tabel `gebruiker`
--
ALTER TABLE `gebruiker`
  ADD PRIMARY KEY (`gebruiker id`);

--
-- Indexen voor tabel `levert_een`
--
ALTER TABLE `levert_een`
  ADD PRIMARY KEY (`software_deliverer_deliver_id`,`product_product_code`),
  ADD UNIQUE KEY `software_deliverer_deliver_id` (`software_deliverer_deliver_id`);

--
-- Indexen voor tabel `order`
--
ALTER TABLE `order`
  ADD PRIMARY KEY (`order_id`);

--
-- Indexen voor tabel `product`
--
ALTER TABLE `product`
  ADD PRIMARY KEY (`product code`);

--
-- Indexen voor tabel `software deliverer`
--
ALTER TABLE `software deliverer`
  ADD PRIMARY KEY (`deliverer id`);

--
-- AUTO_INCREMENT voor geëxporteerde tabellen
--

--
-- AUTO_INCREMENT voor een tabel `gebruiker`
--
ALTER TABLE `gebruiker`
  MODIFY `gebruiker id` int(8) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT voor een tabel `order`
--
ALTER TABLE `order`
  MODIFY `order_id` int(10) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT voor een tabel `product`
--
ALTER TABLE `product`
  MODIFY `product code` int(10) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT voor een tabel `software deliverer`
--
ALTER TABLE `software deliverer`
  MODIFY `deliverer id` int(10) NOT NULL AUTO_INCREMENT;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
