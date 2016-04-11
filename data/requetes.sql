-- phpMyAdmin SQL Dump
-- version 4.1.14
-- http://www.phpmyadmin.net
--
-- Client :  127.0.0.1
-- Généré le :  Jeu 07 Avril 2016 à 15:37
-- Version du serveur :  5.6.17
-- Version de PHP :  5.5.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Base de données :  `lesziagsdb`
--

-- --------------------------------------------------------

--
-- 1) Quels sont les clients ayant annulé leurs réservations sur le premier trimestre 2016 ?
--

SELECT
  c.`client_lastname`  AS nom,
  c.`client_firstname` AS prenom
FROM `booking` b, `client` c
WHERE b.`booking_idclient` = c.`client_idclient`
  AND b.`booking_canceled` = 1
  AND (b.`booking_datestart` BETWEEN '2016-01-01' AND'2016-03-31');

--
-- 2) Quel est le client ayant réservé le plus de nuitées en 2015 ?
--

SELECT
  c.`client_lastname`  AS nom,
  c.`client_firstname` AS prenom
FROM `booking` b, `client` c
WHERE b.`booking_idclient` = c.`client_idclient`
  AND(b.`booking_datestart` BETWEEN '2015-01-01' AND '2015-12-31'
  OR b.`booking_dateend` BETWEEN '2015-01-01' AND '2015-12-31')
Group by b.`booking_nbnights`
ORDER BY SUM(b.`booking_nbnights`) DESC
LIMIT 1;

--
-- 3) Quels sont les clients ayant réservé plus de 3 nuits (en une ou plusieurs fois) en 2015 ?
--

Select c.`client_lastname` AS nom, c.`client_firstname` as prenom
FROM `booking` b, `client` c
WHERE b.`booking_idclient` = c.`client_idclient`
  AND(b.`booking_datestart` BETWEEN '2015-01-01' AND '2015-12-31'
  OR b.`booking_dateend` BETWEEN '2015-01-01' AND '2015-12-31')
Group by b.`booking_nbnights` HAVING SUM(b.`booking_nbnights`) > 3;

--
-- 4) Quelle est la capacité totale de lhôtel à ce jour ?
--

SELECT SUM(r.`room_capacity`) AS capacité
FROM `room` r;

--
-- 5) Quel est le chiffre daffaire réalisé en janvier 2016 ?
--

SELECT SUM(b.`booking_price`) AS CAdeJanvier
FROM `booking` b
WHERE (b.`booking_datestart` BETWEEN '2016-01-01' AND '2016-01-31');

--
-- 6) Quel est le taux doccupation moyen du mois de janvier 2016 ?
--

SELECT SUM(b.`booking_nbnights`)/(12*31) AS txOccupation
FROM `booking` b, `client` c
WHERE b.`booking_idclient` = c.`client_idclient`
  AND (b.`booking_datestart` BETWEEN '2016-01-01' AND '2016-01-31');


