-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Hôte : 127.0.0.1
-- Généré le : jeu. 27 oct. 2022 à 01:08
-- Version du serveur : 10.4.25-MariaDB
-- Version de PHP : 7.4.30

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données : `msf`
--

-- --------------------------------------------------------

--
-- Structure de la table `blocked_ip`
--

CREATE TABLE `blocked_ip` (
  `id` int(11) NOT NULL,
  `ip` varchar(16) NOT NULL,
  `datetime` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=ascii;

-- --------------------------------------------------------

--
-- Structure de la table `token`
--

CREATE TABLE `token` (
  `id` int(11) NOT NULL,
  `token` varchar(32) NOT NULL,
  `user_id` int(11) NOT NULL,
  `code` varchar(6) DEFAULT NULL,
  `datetime` timestamp NOT NULL DEFAULT current_timestamp(),
  `validity` int(11) NOT NULL DEFAULT 60,
  `clicked` int(11) NOT NULL DEFAULT -1
) ENGINE=InnoDB DEFAULT CHARSET=ascii;

-- --------------------------------------------------------

--
-- Structure de la table `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `user_id` varchar(255) NOT NULL,
  `username` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `fullname` varchar(255) NOT NULL,
  `phone` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `address` text NOT NULL,
  `description` text NOT NULL,
  `role` varchar(255) NOT NULL DEFAULT 'coach',
  `connected` int(11) NOT NULL DEFAULT 1,
  `active` int(11) NOT NULL DEFAULT -1,
  `last_connexion` timestamp NOT NULL DEFAULT current_timestamp(),
  `created` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=ascii;

--
-- Déchargement des données de la table `users`
--

INSERT INTO `users` (`id`, `user_id`, `username`, `password`, `fullname`, `phone`, `email`, `address`, `description`, `role`, `connected`, `active`, `last_connexion`, `created`) VALUES
(2, 'u63599e015621b', 'admin', '53f473e18ac61bfb5076cfe3ea570a8a', 'Hatem Ben Ammar', '21789535', 'bettercallfreelancer@gmail.com', '', 'LOOOL', 'admin', 1, 1, '2022-10-26 23:06:37', '2022-10-26 20:52:17'),
(6, 'u6359b97d2d38a', 'Grover.Daugherty', 'aaaaaaaa', 'tttttttt', '485-258-6176', 'your.email+fakedata57619@gmail.com', '', '', 'coach', 1, 1, '2022-10-26 22:49:33', '2022-10-26 22:49:33');

--
-- Index pour les tables déchargées
--

--
-- Index pour la table `blocked_ip`
--
ALTER TABLE `blocked_ip`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `token`
--
ALTER TABLE `token`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `user_id` (`user_id`),
  ADD UNIQUE KEY `username` (`username`);

--
-- AUTO_INCREMENT pour les tables déchargées
--

--
-- AUTO_INCREMENT pour la table `blocked_ip`
--
ALTER TABLE `blocked_ip`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT pour la table `token`
--
ALTER TABLE `token`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT pour la table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
