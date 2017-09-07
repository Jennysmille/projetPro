-- phpMyAdmin SQL Dump
-- version 4.2.12deb2+deb8u2
-- http://www.phpmyadmin.net
--
-- Client :  localhost
-- Généré le :  Mar 29 Août 2017 à 15:11
-- Version du serveur :  5.5.55-0+deb8u1
-- Version de PHP :  5.6.30-0+deb8u1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Base de données :  `projetPro`
--

-- --------------------------------------------------------

--
-- Structure de la table `commandes`
--

CREATE TABLE IF NOT EXISTS `commandes` (
`id` int(11) NOT NULL,
  `nom` varchar(225) NOT NULL,
  `prenom` varchar(225) NOT NULL,
  `email` varchar(255) NOT NULL,
  `tel` int(10) NOT NULL,
  `message` varchar(225) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=latin1;

--
-- Contenu de la table `commandes`
--

INSERT INTO `commandes` (`id`, `nom`, `prenom`, `email`, `tel`, `message`) VALUES
(1, 'Smille', 'sally', 'jny66000@gmail.com', 78769799, 'hello'),
(2, 'Delseny', 'Florent', 'flo@gmail.com', 78769799, 'Bonjour à vous !'),
(3, 'Smille', 'sally', 'jny66000@gmail.com', 78769799, 'hello'),
(4, 'smille', 'sally', 'jny66000@gmail.com', 78769799, 'bonjour !');

-- --------------------------------------------------------

--
-- Structure de la table `jointure_produits`
--

CREATE TABLE IF NOT EXISTS `jointure_produits` (
  `id_commandes` int(11) NOT NULL,
  `id_produits` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Structure de la table `produits`
--

CREATE TABLE IF NOT EXISTS `produits` (
`id` int(11) NOT NULL,
  `nom` varchar(255) NOT NULL,
  `prix` float NOT NULL,
  `image` varchar(225) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=21 DEFAULT CHARSET=latin1;

--
-- Contenu de la table `produits`
--

INSERT INTO `produits` (`id`, `nom`, `prix`, `image`) VALUES
(17, 'Foie gras frais', 10.99, 'foie gras 50g.jpg'),
(18, 'Ailes de canard', 12.99, 'ailes de canard 400g.jpg'),
(19, 'Cuisses d''oie', 15.99, 'cuisse oie 600g.jpg'),
(20, 'Cuisses de canard', 22, 'cuisses de canard 400g.jpg');

--
-- Index pour les tables exportées
--

--
-- Index pour la table `commandes`
--
ALTER TABLE `commandes`
 ADD PRIMARY KEY (`id`);

--
-- Index pour la table `produits`
--
ALTER TABLE `produits`
 ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT pour les tables exportées
--

--
-- AUTO_INCREMENT pour la table `commandes`
--
ALTER TABLE `commandes`
MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=5;
--
-- AUTO_INCREMENT pour la table `produits`
--
ALTER TABLE `produits`
MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=21;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
