-- phpMyAdmin SQL Dump
-- version 4.8.5
-- https://www.phpmyadmin.net/
--
-- Hôte : 127.0.0.1:3306
-- Généré le :  mer. 27 avr. 2022 à 22:43
-- Version du serveur :  5.7.26
-- Version de PHP :  7.2.18

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données :  `rapport`
--

--
-- Déchargement des données de la table `contacts`
--

INSERT INTO `contacts` (`id`, `users_name`, `contact_refus`, `sans_reponse`, `contact_reussi`, `contact_pris`, `date_contact`) VALUES
(84, 'Camd0101', 1, 1, 1, 3, '2022-04-21 16:36:25'),
(85, 'Camd0101', 2, 2, 2, 6, '2022-04-21 16:50:32'),
(86, 'Camd0101', 1, 1, 1, 3, '2022-04-23 15:41:31'),
(87, 'Camd0101', 1, 1, 1, 3, '2022-04-23 15:47:33'),
(88, 'Camd0101', 1, 1, 1, 3, '2022-04-28 00:23:00'),
(89, 'Camd0101', 2, 1, 1, 4, '2022-04-28 00:28:58');

--
-- Déchargement des données de la table `interview`
--

INSERT INTO `interview` (`id`, `users_name`, `nom_interlocuteur`, `age_interlocuteur`, `sex_interlocuteur`, `lieux_interlocuteur`, `numero_interlocuteur`, `mail_interlocuteur`, `date_interview`) VALUES
(127, 'Bapteme25012014', 'Camd0101', '23', 'Femme', '104, CAMP KABILA, KINGABWA, LIMETE', '+243822641044', 'benjaminbks10@gmail.com', '2022-04-21 16:41:33'),
(128, 'Benjamin Bukasa', 'Camd0101', '23', 'homme', 'BENJI', '+243822641044', 'benjibukasa@outlook.com', '2022-04-21 16:50:38'),
(129, 'Benjamin Bukasa', 'Camd0101', '23', 'homme', 'BENJI', '+243822641044', 'benjibukasa@outlook.com', '2022-04-21 16:50:47'),
(130, 'Benjamin Bukasa', 'Camd0101', '23', 'homme', 'BENJI', '+243822641044', 'benjibukasa@outlook.com', '2022-04-23 15:47:39'),
(131, 'Benjamin Bukasa', 'Camd0101', '23', 'Femme', 'BENJI', '+243822641044', 'benjibukasa@outlook.com', '2022-04-28 00:23:10'),
(132, 'Benjamin Bukasa', 'Camd0101', '23', 'F', 'BENJI', '+243822641044', 'benjibukasa@outlook.com', '2022-04-28 00:30:44');

--
-- Déchargement des données de la table `projet`
--

INSERT INTO `projet` (`id`, `users_name`, `ville`, `projet`, `date_projet`) VALUES
(16, 'Camd0101', 'Kinshasa', 'Fleuve', '2022-04-23 15:47:28'),
(15, 'Camd0101', 'Boma', 'Retail', '2022-04-23 15:47:23'),
(14, 'Camd0101', 'Boma', 'Retail', '2022-04-23 15:41:17'),
(13, 'Camd0101', 'Lubumbashi', 'Retail', '2022-04-23 15:37:51'),
(12, 'Camd0101', 'Boma', 'Retail', '2022-04-21 16:50:08'),
(11, 'Camd0101', 'Lubumbashi', 'Mystering-shoping', '2022-04-21 15:48:56'),
(17, 'Camd0101', 'Lubumbashi', 'Retail', '2022-04-28 00:22:53'),
(18, 'Camd0101', 'Boma', 'Retail', '2022-04-28 00:28:50');

--
-- Déchargement des données de la table `users`
--

INSERT INTO `users` (`id`, `UserName`, `Code`) VALUES
(1, 'Camd0101', '0101');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
