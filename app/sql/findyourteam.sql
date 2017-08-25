-- phpMyAdmin SQL Dump
-- version 4.6.5.2
-- https://www.phpmyadmin.net/
--
-- Client :  127.0.0.1
-- Généré le :  Ven 25 Août 2017 à 13:57
-- Version du serveur :  10.1.21-MariaDB
-- Version de PHP :  5.6.30

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
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
  `picture` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Contenu de la table `games`
--

INSERT INTO `games` (`id`, `name`, `description`, `picture`) VALUES
(1, 'League Of Legend', 'League of Legends est un jeu compétitif en ligne bourré d\'action, qui mélange l\'intensité trépidante des jeux de stratégie en temps réel avec des éléments de jeu de rôle.', 'lol.jpg'),
(2, 'Battlefield 4', 'Plongez dans la guerre multijoueur totale de Battlefield 4. Avec la prise en charge de 64 joueurs et 7 modes de jeu uniques utilisables sur 10 cartes de grande taille, l\'échelle et la portée de Battlefield 4 sont incomparables.', 'battlefield4.png'),
(3, 'Call Of Duty ', 'Call of Duty retourne à ses origines avec Call of Duty: WWII, une expérience à couper le souffle qui servira de référence à la nouvelle génération de joueurs.', 'callof.jpg'),
(4, 'CSGO', 'Counter-Strike : Global Offensive est un FPS multijoueurs en ligne sur PC. Les anti-terroristes et les terroristes s\'affrontent dans différents modes de jeu avec une trentaine d\'armes différentes, sans compter les grenades.', 'cs.jpg'),
(5, 'Diablo 3', 'Diablo 3 est un hack\'n slash (jeu de rôle orienté action) qui se déroule dans un univers dark fantasy 20 ans après les événements narrés dans Diablo 2.', 'diablo3.jpg'),
(6, 'Dota 2', 'DOTA 2, pionner d\'un genre de jeux à part entière dans le domaine de la stratégie, le MOBA. Le principe est de se frayer un chemin jusqu\'à la forteresse ennemie afin de la détruire, le tout en choisissant parmi différents personnages.', 'dota2.jpg'),
(7, 'Fifa 17', 'FIFA 17 est un jeu de simulation de football édité par Electronic Arts.', 'fifa17.jpg'),
(8, 'Heroes Of The Storm', 'Heroes of the Storm est un jeu vidéo de type arène de bataille en ligne multijoueur développé par Blizzard Entertainment. Le jeu se déroule dans un univers fictif dans lequel s’affrontent des héros issus de Warcraft, Diablo, StarCraft et Overwatch.', 'heroesofthestorm.png'),
(9, 'Overwatch', 'Jeu d\'action en vue à la première personne, Overwatch prend place dans un futur proche, en 2074 pour être exact. Dans des parties en 6 contre 6, le joueur incarne un héros parmi la palette proposée.', 'overwatch.jpg'),
(10, 'World Of Warcraft', 'World of Warcraft est un jeu de rôle massivement multijoueurs. Au sein du royaume d\'Azeroth, rejoignez les forces de la Horde ou de l\'Alliance. ', 'worldofwarcraft.jpg');

-- --------------------------------------------------------

--
-- Structure de la table `messagerie`
--

CREATE TABLE `messagerie` (
  `id` int(11) NOT NULL,
  `expediteur` varchar(255) NOT NULL,
  `destinataire` varchar(255) NOT NULL,
  `titre` varchar(100) CHARACTER SET latin1 COLLATE latin1_general_ci NOT NULL,
  `text` text CHARACTER SET latin1 COLLATE latin1_general_ci NOT NULL,
  `time` datetime NOT NULL,
  `lu` enum('0','1') CHARACTER SET latin1 COLLATE latin1_general_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 ROW_FORMAT=COMPACT;

--
-- Contenu de la table `messagerie`
--

INSERT INTO `messagerie` (`id`, `expediteur`, `destinataire`, `titre`, `text`, `time`, `lu`) VALUES
(1, '0', '0', '', 'ok', '0000-00-00 00:00:00', '0'),
(2, '0', '0', '', 'ok', '0000-00-00 00:00:00', '0'),
(3, '0', '0', '', 'ok', '0000-00-00 00:00:00', '0'),
(4, '0', '0', 'yo', 'uyuyyu', '0000-00-00 00:00:00', '0'),
(5, 'goldlion', 'marineheim', 'oiu', 'lygkufg', '2017-08-22 14:24:14', '0'),
(6, 'goldlion', 'webforce', 'yo', 'erzgtreztz', '2017-08-22 14:25:36', '0'),
(7, 'goldlion', 'amaury60650', '', '', '2017-08-22 14:39:16', '0'),
(0, 'poupou9', 'poupou9', 'vjhghvgh', 'cghgvhgvhvgh', '2017-08-24 17:29:28', '0'),
(0, 'poupou9', 'amaury60650', 'njgvhnvb', 'nvgbnvbnb', '2017-08-24 17:30:01', '0');

-- --------------------------------------------------------

--
-- Structure de la table `play`
--

CREATE TABLE `play` (
  `id` int(11) NOT NULL,
  `id_joueur` int(11) NOT NULL,
  `id_game` int(11) NOT NULL,
  `plateforme` varchar(255) NOT NULL,
  `niveau` varchar(255) NOT NULL,
  `pseudo` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Contenu de la table `play`
--

INSERT INTO `play` (`id`, `id_joueur`, `id_game`, `plateforme`, `niveau`, `pseudo`) VALUES
(25, 7, 1, '---', '---', ''),
(26, 7, 1, 'PC', 'Débutant', 'araraer'),
(27, 7, 1, 'PC', 'Débutant', 'araraer'),
(28, 7, 3, 'PC', 'Intermédiaire', 'Amaury60');

-- --------------------------------------------------------

--
-- Structure de la table `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `username` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `avatar` text NOT NULL,
  `description` text NOT NULL,
  `signup_date` date NOT NULL,
  `role` varchar(255) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

--
-- Contenu de la table `users`
--

INSERT INTO `users` (`id`, `username`, `password`, `email`, `avatar`, `description`, `signup_date`, `role`) VALUES
(1, 'amaury60650', '$2y$10$Ep.qNspasejfsJvwuoZoR.E.Kz.Pwgzfdg5oIwsidgZs.0fCxM7/2', 'amaurybourel@laposte.net', '', '', '0000-00-00', 'user'),
(2, 'webforce', '$2y$10$HwN.K6tqUpsxSIoG7b7pve77IOEc2D3W6Jusx.BCL16d5Dwh0U69a', 'ama@ama.fr', '', '', '0000-00-00', 'user'),
(3, 'marineheim', '$2y$10$fBJ45hzKwbsCNAWRd9qdqeF.tdNf6RU/b/VFDhr92tkVaR5sJlx6i', 'marine.heim@yahoo.fr', '', '', '0000-00-00', 'user'),
(4, 'coucoulesloulous', '$2y$10$K0nERVmQq.NPxZ6Rw3jQ2Opi7ayVm2rN3S7JBb7cdak8YTlZAEqHS', 'coucoulesloulous@hotmail.fr', '', '', '0000-00-00', 'user'),
(5, 'poupou', '$2y$10$NJsUkPHAO/02G7ZW5uXmZuOFsaxVzPN1ARLEyLS2HDbxh./psgVJ2', 'poupou@gmail.com', '', '', '0000-00-00', 'user'),
(6, 'poupou8', '$2y$10$WVWG3HXRAM/GiAxvccFCx.x1tLidPaDY3Sy4cyXHSF9e/0haiqyUO', 'poupou8@gmail.com', 'salade-2.jpg', 'gdfgdfgfd', '0000-00-00', 'user'),
(7, 'poupou9', '$2y$10$gcl38AOtaQ5WvjbynhGQX.H.39NIqP1cxnRUIiB2SO.CQJuuMa7I6', 'poupou9@gmail.com', 'salade-2.jpg', '', '0000-00-00', 'user');

--
-- Index pour les tables exportées
--

--
-- Index pour la table `games`
--
ALTER TABLE `games`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `play`
--
ALTER TABLE `play`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT pour les tables exportées
--

--
-- AUTO_INCREMENT pour la table `games`
--
ALTER TABLE `games`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;
--
-- AUTO_INCREMENT pour la table `play`
--
ALTER TABLE `play`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=29;
--
-- AUTO_INCREMENT pour la table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
