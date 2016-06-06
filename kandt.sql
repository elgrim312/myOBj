-- phpMyAdmin SQL Dump
-- version 4.4.10
-- http://www.phpmyadmin.net
--
-- Client :  localhost:8889
-- Généré le :  Lun 06 Juin 2016 à 11:22
-- Version du serveur :  5.5.42
-- Version de PHP :  5.6.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";

--
-- Base de données :  `kandt`
--

-- --------------------------------------------------------

--
-- Structure de la table `page`
--

CREATE TABLE `page` (
  `id` int(11) NOT NULL,
  `slug` varchar(25) COLLATE utf8mb4_unicode_ci NOT NULL,
  `h1` varchar(25) COLLATE utf8mb4_unicode_ci NOT NULL,
  `body` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `title` varchar(25) COLLATE utf8mb4_unicode_ci NOT NULL,
  `img` varchar(55) COLLATE utf8mb4_unicode_ci NOT NULL,
  `span_text` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `span_class` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=12 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Contenu de la table `page`
--

INSERT INTO `page` (`id`, `slug`, `h1`, `body`, `title`, `img`, `span_text`, `span_class`) VALUES
(7, 'kitten', 'chat', 'chaton oui <3', 'kitten', 'img/three_kittens.jpg', 'azrt', 'label-default'),
(9, 'aezzedtcjawad', 'azeaz', 'azeaz', 'zeaze', 'img/lama.jpg', 'azeaz', 'label-warning'),
(10, 'test', 'tet', 'test', 'test', 'img/snorkies.jpg', 'etsat', 'label-info');

--
-- Index pour les tables exportées
--

--
-- Index pour la table `page`
--
ALTER TABLE `page`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `slug` (`slug`);

--
-- AUTO_INCREMENT pour les tables exportées
--

--
-- AUTO_INCREMENT pour la table `page`
--
ALTER TABLE `page`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=12;