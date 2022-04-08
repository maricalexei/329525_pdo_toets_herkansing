-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Gegenereerd op: 08 apr 2022 om 08:32
-- Serverversie: 5.7.36
-- PHP-versie: 7.4.26

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `pdo_toets_herkansing`
--

-- --------------------------------------------------------

--
-- Tabelstructuur voor tabel `burrito`
--

DROP TABLE IF EXISTS `burrito`;
CREATE TABLE IF NOT EXISTS `burrito` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `formaat` varchar(4) NOT NULL,
  `saus` varchar(15) NOT NULL,
  `bonen` varchar(15) NOT NULL,
  `rijst` varchar(15) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8;

--
-- Gegevens worden geëxporteerd voor tabel `burrito`
--

INSERT INTO `burrito` (`id`, `formaat`, `saus`, `bonen`, `rijst`) VALUES
(1, '20cm', 'Salsa crudo', 'zwarte_bonen', 'bruine_rijst'),
(2, '25cm', 'Salsa roja', 'witte bonen', 'bruine rijst');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
