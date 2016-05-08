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
-- Suppression de l'ensemble des données
--

SET FOREIGN_KEY_CHECKS = 0; -- disable a foreign keys check
SET AUTOCOMMIT = 0; -- disable autocommit
START TRANSACTION; -- begin transaction

TRUNCATE `admin`;
TRUNCATE `booking`;
TRUNCATE `client`;
TRUNCATE `contact`;
TRUNCATE `payment`;
TRUNCATE `room`;

SET FOREIGN_KEY_CHECKS = 1; -- enable a foreign keys check
