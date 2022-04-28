-- phpMyAdmin SQL Dump
-- version 5.1.1deb4
-- https://www.phpmyadmin.net/
--
-- Hôte : localhost:3306
-- Généré le : sam. 06 nov. 2021 à 12:07
-- Version du serveur : 8.0.27
-- Version de PHP : 7.4.21

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données : `Clients`
--

-- --------------------------------------------------------

--
-- Structure de la table `information`
--
use Clients ;
CREATE TABLE `information` (
  `persID` int NOT NULL,
  `prenom` varchar(102) DEFAULT NULL,
  `nom` varchar(47) DEFAULT NULL,
  `age` int DEFAULT NULL,
  `ville` varchar(58) DEFAULT NULL,
  `departement` varchar(4) DEFAULT NULL,
  `email` varchar(254) DEFAULT NULL,
  `continent` varchar(20) DEFAULT NULL,
  `sexe` varchar(12) DEFAULT NULL,
  `identifiant` varchar(255) DEFAULT NULL,
  `mot_de_passe` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Index pour les tables déchargées
--

--
-- Index pour la table `information`
--
ALTER TABLE `information`
  ADD PRIMARY KEY (`persID`);

--
-- AUTO_INCREMENT pour les tables déchargées
--

--
-- AUTO_INCREMENT pour la table `information`
--
ALTER TABLE `information`
  MODIFY `persID` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=99;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
