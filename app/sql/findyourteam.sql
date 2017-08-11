-- phpMyAdmin SQL Dump
-- version 4.7.0
-- https://www.phpmyadmin.net/
--
-- Hôte : 127.0.0.1
-- Généré le :  lun. 07 août 2017 à 17:43
-- Version du serveur :  10.1.25-MariaDB
-- Version de PHP :  7.1.7

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données :  `findyourteam`
--

-- --------------------------------------------------------

--
-- Structure de la table `games`
--

CREATE TABLE `games` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `description` varchar(255) NOT NULL,
  `picture` varchar(255) NOT NULL,
  `nb_player` int(11) NOT NULL,
  `nb_team` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Déchargement des données de la table `games`
--

INSERT INTO `games` (`id`, `name`, `description`, `picture`, `nb_player`, `nb_team`) VALUES
(1, 'League Of Legend', 'Description Lol', 'lol.jpg', 0, 0),
(2, 'Battlefield 4', 'Description Battlefield 4', 'battlefield4.png', 0, 0),
(3, 'Call Of Duty ', 'Descrption COD ', 'callof.jpg', 0, 0),
(4, 'CSGO', 'Description CSGO', 'cs.jpg', 0, 0),
(5, 'Diablo 3', 'Description Diablo 3', 'diablo3.jpg', 0, 0),
(6, 'Dota 2', 'Description Dota 2', 'dota2.jpg', 0, 0),
(7, 'Fifa 17', 'Description Fifa 17', 'fifa17.jpg', 0, 0),
(8, 'Heroes Of The Storm', 'Description heroes of the storm', 'heroesofthestorm.png', 0, 0),
(9, 'Overwatch', 'Description overwatch', 'overwatch.jpg', 0, 0),
(10, 'World Of Warcraft', 'Description World of warcraft', 'worldofwarcraft.jpg', 0, 0);

-- --------------------------------------------------------

--
-- Structure de la table `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `username` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `role` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Déchargement des données de la table `users`
--

INSERT INTO `users` (`id`, `username`, `email`, `password`, `role`) VALUES
(1, 'kwonos', 'amaurybourel@laposte.net', '0', 'user'),
(2, 'Kwonos01', 'amaury@laposte.net', '0', 'user'),
(3, 'kwonos02', 'amaurybourel@laposte.nett', '$2y$10$pZwKPKac4Aw11U6ENrDLwurlG4NTF2LCCKnqDp.55bhE.eJ2yuFni', 'user');

--
-- Index pour les tables déchargées
--

--
-- Index pour la table `games`
--
ALTER TABLE `games`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT pour les tables déchargées
--

--
-- AUTO_INCREMENT pour la table `games`
--
ALTER TABLE `games`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;
--
-- AUTO_INCREMENT pour la table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
