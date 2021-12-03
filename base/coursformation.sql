-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Hôte : 127.0.0.1:3306
-- Généré le : ven. 03 déc. 2021 à 09:40
-- Version du serveur :  5.7.31
-- Version de PHP : 7.3.21

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données : `coursformation`
--

-- --------------------------------------------------------

--
-- Structure de la table `cours`
--

DROP TABLE IF EXISTS `cours`;
CREATE TABLE IF NOT EXISTS `cours` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `Titre` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `Contenu` longtext COLLATE utf8_unicode_ci NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=3 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Déchargement des données de la table `cours`
--

INSERT INTO `cours` (`id`, `Titre`, `Contenu`) VALUES
(1, 'jjjj', 'hhhhh');

-- --------------------------------------------------------

--
-- Structure de la table `formation`
--

DROP TABLE IF EXISTS `formation`;
CREATE TABLE IF NOT EXISTS `formation` (
  `id` int(20) NOT NULL,
  `Sujet` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `Formateur` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `Date_formation` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `Temps_formation` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `Contenu` longtext COLLATE utf8_unicode_ci NOT NULL,
  PRIMARY KEY (`id`) USING BTREE
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Déchargement des données de la table `formation`
--

INSERT INTO `formation` (`id`, `Sujet`, `Formateur`, `Date_formation`, `Temps_formation`, `Contenu`) VALUES
(2, 'calcul mental', 'mohamed', '12/11/2021', '12:30', 'llllllllll5');

-- --------------------------------------------------------

--
-- Structure de la table `users`
--

DROP TABLE IF EXISTS `users`;
CREATE TABLE IF NOT EXISTS `users` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `user_name` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `userpass` varchar(100) NOT NULL,
  `photo` varchar(500) NOT NULL,
  `role` varchar(100) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=36 DEFAULT CHARSET=latin1;

--
-- Déchargement des données de la table `users`
--

INSERT INTO `users` (`id`, `user_name`, `email`, `userpass`, `photo`, `role`) VALUES
(30, 'hana', 'hana@gmail.com', '$2y$10$WqCrs7dAlthJ.v65ppcK4.u0UtN43dhF9vbQEMjOLUGrZnOYrP5DK', '', 'admin'),
(31, 'ran', 'ran@gmail.com', '$2y$10$fWZgm31SLuuvaT4jnJ2c/e7HcQCKyGAeg5phAoZW7TuXr0Y3LREu.', '', 'user'),
(32, 'khaoula', 'khaoulajri@gmail.com', '$2y$10$aQkE8gcvmSOWyKT/eJn.S.4Xb6QyW/1PZcsHwiVJsZ4vcywkkHTRO', '', 'admin'),
(33, 'eya', 'eya@gmail.com', '$2y$10$bHMIHgxx3cT4xaX82EbAiObw5/X4pS46apnj9nsKI1elh3HzSuiF.', '', 'user'),
(34, 'rgvbtfehb', 'khaoula@gmail.com', '$2y$10$xu/FYa3EZf13mlKT8soQeeYrxfRg/WJxfNF0veNSEwKUK/QBO0XRy', '', 'user'),
(35, 'taha', 'taha@gmail.com', '$2y$10$DOOxEXBuwk5jp1XuzG5Y1eD2qy3HAkvI/FFDh9rw7l9kF9gYn0tZ2', '', 'user');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
