-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Gép: 127.0.0.1
-- Létrehozás ideje: 2022. Feb 22. 08:18
-- Kiszolgáló verziója: 10.4.21-MariaDB
-- PHP verzió: 7.3.30

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Adatbázis: `oop_mvc_db`
--

-- --------------------------------------------------------

--
-- Tábla szerkezet ehhez a táblához `vehicle`
--

CREATE TABLE `vehicle` (
  `id` bigint(11) UNSIGNED NOT NULL,
  `type` varchar(20) COLLATE utf8_bin DEFAULT NULL,
  `lpn` varchar(6) COLLATE utf8_bin DEFAULT NULL,
  `year` year(4) DEFAULT NULL,
  `active` int(1) UNSIGNED DEFAULT 1,
  `lang_id` int(2) UNSIGNED NOT NULL DEFAULT 0,
  `insert_user_id` bigint(20) UNSIGNED DEFAULT NULL,
  `insert_when` datetime DEFAULT NULL,
  `modify_user_id` bigint(20) UNSIGNED DEFAULT NULL,
  `modify_when` datetime DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

--
-- A tábla adatainak kiíratása `vehicle`
--

INSERT INTO `vehicle` (`id`, `type`, `lpn`, `year`, `active`, `lang_id`, `insert_user_id`, `insert_when`, `modify_user_id`, `modify_when`) VALUES
(1, 'szemÃ©lyautÃ³', 'hhs356', 2000, 1, 0, NULL, NULL, NULL, NULL),
(2, 'KisteherautÃ³', 'pkt645', 2006, 1, 0, NULL, NULL, NULL, NULL),
(3, 'NagyteherautÃ³', 'kkt802', 2008, 1, 0, NULL, NULL, NULL, NULL);

--
-- Indexek a kiírt táblákhoz
--

--
-- A tábla indexei `vehicle`
--
ALTER TABLE `vehicle`
  ADD PRIMARY KEY (`id`);

--
-- A kiírt táblák AUTO_INCREMENT értéke
--

--
-- AUTO_INCREMENT a táblához `vehicle`
--
ALTER TABLE `vehicle`
  MODIFY `id` bigint(11) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
