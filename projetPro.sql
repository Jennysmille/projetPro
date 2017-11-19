-- phpMyAdmin SQL Dump
-- version 4.2.12deb2+deb8u2
-- http://www.phpmyadmin.net
--
-- Client :  localhost
-- Généré le :  Mer 01 Novembre 2017 à 15:42
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
-- Structure de la table `admins`
--

CREATE TABLE IF NOT EXISTS `admins` (
`id` int(11) NOT NULL,
  `pseudo` varchar(225) NOT NULL,
  `mail` varchar(225) NOT NULL,
  `motdepasse` text NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=10 DEFAULT CHARSET=latin1;

--
-- Contenu de la table `admins`
--

INSERT INTO `admins` (`id`, `pseudo`, `mail`, `motdepasse`) VALUES
(1, 'sallysmiile', 'jny66000@gmail.com', '7110eda4d09e062aa5e4a390b0a572ac0d2c0220'),
(2, 'florent', 'flo@gmail.com', '8cb2237d0679ca88db6464eac60da96345513964'),
(3, 'theo', 'theo@gmail.com', 'b2029ba5ea1042d78c96d3888897571eea8c27fa'),
(4, 'hysis', 'jjj@hotmail.fr', '8cb2237d0679ca88db6464eac60da96345513964'),
(5, 'Jenny', 'ice.tea.mangue@hotmail.fr', 'aaf4c61ddcc5e8a2dabede0f3b482cd9aea9434d'),
(6, 'apple', 'apple@gmail.com', 'd0be2dc421be4fcd0172e5afceea3970e2f3d940'),
(7, 'jean', 'jean@gmail.com', '51f8b1fa9b424745378826727452997ee2a7c3d7'),
(8, 'vacances', 'v@gmail.com', 'd3f74ce43a0935266cf9f729e9bf0036a2169810'),
(9, 'pauline', 'popo@gmail.com', 'e4b4cd4210ee87c60da653c1b6a77d529c1a079d');

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
) ENGINE=InnoDB AUTO_INCREMENT=32 DEFAULT CHARSET=latin1;

--
-- Contenu de la table `commandes`
--

INSERT INTO `commandes` (`id`, `nom`, `prenom`, `email`, `tel`, `message`) VALUES
(1, 'Smille', 'sally', 'jny66000@gmail.com', 78769799, 'hello'),
(2, 'Delseny', 'Florent', 'flo@gmail.com', 78769799, 'Bonjour à vous !'),
(3, 'Smille', 'sally', 'jny66000@gmail.com', 78769799, 'hello'),
(4, 'smille', 'sally', 'jny66000@gmail.com', 78769799, 'bonjour !'),
(5, 'jenny', 'az', 'jny66000@gmail.com', 78769799, 'hello'),
(6, 'théo', 'Smille', 'jny66000@gmail.com', 78769799, 'Ola qué tal ?'),
(7, 'théo', 'Smille', 'jny66000@gmail.com', 78769799, 'Ola qué tal ?'),
(8, 'théo', 'Smille', 'LA@gmail.com', 78769799, ',,,,,,,,,,,'),
(9, 'théo', 'Smille', 'LA@gmail.com', 78769799, ',,,,,,,,,,,'),
(10, 'florent', 'del', 'flo@gmail.com', 78769799, 'ôla !!!'),
(11, 'florent', 'del', 'flo@gmail.com', 78769799, 'ôla !!!'),
(12, 'florent', 'del', 'flo@gmail.com', 78769799, 'ôla !!!'),
(13, 'florent', 'del', 'flo@gmail.com', 78769799, 'ôla !!!'),
(14, 'florent', 'del', 'flo@gmail.com', 78769799, 'ôla !!!'),
(15, 'théo', 'Smille', 'miami@gmail.com', 78769799, 'kkkkkkkkkkkkkkkkk'),
(16, 'théo', 'Smille', 'jny66000@gmail.com', 78769799, 'kkkkkkkkkkkkkkkkkk'),
(17, 'théo', 'Smille', 'jny66000@gmail.com', 78769799, 'jjjjjjjjjjjjjj'),
(18, 'théo', 'Smille', 'jny66000@gmail.com', 78769799, 'jjjjjjjjjjjjjjjjjjjjjjjjjjjjjllllllllllllll'),
(19, 'théo', 'Smille', 'jny66000@gmail.com', 78769799, 'jjjjjjjjjjjjjjjjjjjjjjjjjjjjjllllllllllllll'),
(20, 'théo', 'Smille', 'jny66000@gmail.com', 78769799, 'jjjjjjjjjjjjjjjjjjjjjjjjjjjjjllllllllllllll'),
(21, 'théo', 'az', 'flo@gmail.com', 78769799, 'allo'),
(22, 'théo', 'az', 'flo@gmail.com', 78769799, 'allo'),
(23, 'théo', 'az', 'flo@gmail.com', 78769799, 'allo'),
(24, 'théo', 'az', 'flo@gmail.com', 78769799, 'allo'),
(25, 'théo', 'az', 'flo@gmail.com', 78769799, 'allo'),
(26, 'théo', 'az', 'flo@gmail.com', 78769799, 'lldldkjsqnkfjdskjf'),
(27, 'théo', 'az', 'flo@gmail.com', 78769799, 'lldldkjsqnkfjdskjf'),
(28, 'théo', 'az', 'flo@gmail.com', 78769799, 'lldldkjsqnkfjdskjf'),
(29, 'théo', 'az', 'jny66000@gmail.com', 78769799, 'lldldkjsqnkfjdskjf'),
(30, 'théo', 'az', 'jny66000@gmail.com', 78769799, 'lldldkjsqnkfjdskjf'),
(31, 'hola', 'hola', 'jny66000@gmail.com', 78769799, 'holala\r\n');

-- --------------------------------------------------------

--
-- Structure de la table `jointure_produits`
--

CREATE TABLE IF NOT EXISTS `jointure_produits` (
`id` int(11) NOT NULL,
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
) ENGINE=InnoDB AUTO_INCREMENT=47 DEFAULT CHARSET=latin1;

--
-- Contenu de la table `produits`
--

INSERT INTO `produits` (`id`, `nom`, `prix`, `image`) VALUES
(32, 'Foie gras frais', 10, '1-demiCanard.jpg'),
(33, 'Cuisses doie', 35, 'foieGras_80g.png'),
(34, 'Foie gras frais', 10, 'foie gras 120g.png'),
(35, 'Foie gras frais', 10, 'foie gras 120g.png'),
(36, 'Foie gras frais', 12.5, 'foieGras_80g.png'),
(38, 'Foie gras frais', 12.5, 'foieGras_80g.png'),
(39, 'Foie gras frais', 12.5, 'foieGras_80g.png'),
(40, 'Magrets de canards', 6, '4manchons_750g.jpg'),
(41, 'Foie gras frais', 30, '1-demiCanard.jpg'),
(42, 'paté de canard au poivre vert', 2.4, 'PâtéDeCanardAuPoivreVert_80g.png'),
(43, 'Foie gras frais', 30, '1-demiCanard.jpg'),
(44, 'Foie gras frais', 30, '1-demiCanard.jpg'),
(45, 'Foie gras frais', 30, '1-demiCanard.jpg'),
(46, 'Foie gras frais', 150, '1-demiCanard.jpg');

--
-- Index pour les tables exportées
--

--
-- Index pour la table `admins`
--
ALTER TABLE `admins`
 ADD PRIMARY KEY (`id`);

--
-- Index pour la table `commandes`
--
ALTER TABLE `commandes`
 ADD PRIMARY KEY (`id`);

--
-- Index pour la table `jointure_produits`
--
ALTER TABLE `jointure_produits`
 ADD PRIMARY KEY (`id`), ADD KEY `id_commandes` (`id_commandes`), ADD KEY `id_produits` (`id_produits`);

--
-- Index pour la table `produits`
--
ALTER TABLE `produits`
 ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT pour les tables exportées
--

--
-- AUTO_INCREMENT pour la table `admins`
--
ALTER TABLE `admins`
MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=10;
--
-- AUTO_INCREMENT pour la table `commandes`
--
ALTER TABLE `commandes`
MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=32;
--
-- AUTO_INCREMENT pour la table `jointure_produits`
--
ALTER TABLE `jointure_produits`
MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT pour la table `produits`
--
ALTER TABLE `produits`
MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=47;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
