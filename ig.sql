-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Hôte : 127.0.0.1:3306
-- Généré le : ven. 28 oct. 2022 à 21:03
-- Version du serveur : 5.7.36
-- Version de PHP : 8.0.13

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données : `ig`
--

-- --------------------------------------------------------

--
-- Structure de la table `article`
--

DROP TABLE IF EXISTS `article`;
CREATE TABLE IF NOT EXISTS `article` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `titre` varchar(255) NOT NULL,
  `dateEcrit` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `img_url` varchar(255) NOT NULL,
  `idAuteur` int(11) NOT NULL,
  `tags` varchar(255) DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `id` (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=19 DEFAULT CHARSET=latin1;

--
-- Déchargement des données de la table `article`
--

INSERT INTO `article` (`id`, `titre`, `dateEcrit`, `img_url`, `idAuteur`, `tags`) VALUES
(1, 'Bonnes vacances à tous. Profitez !', '2022-08-26 02:18:32', '/upload/test/1_test1.jpg', 1, '#iut #vacances #repos #soleil #sun'),
(2, 'Toutes nos féliciations aux nouveaux diplomés...', '2022-08-26 02:18:32', '/upload/test/1_test2.jpg', 1, '#but #iut #formation #enseignement #diplome #etude #reussite #formation'),
(3, 'MMI : une formation qui a de l\'avenir', '2022-08-26 02:18:32', '/upload/test/1_test3.jpg', 1, '#but #iut #mmi #internet #formation #web #av #com'),
(4, 'Des nouvelles formations à l\'IUT de Lens', '2022-08-26 02:18:32', '/upload/test/1_test4.jpg', 1, '#but #iut #formation #etude #enseignement #mmi #gea #informatique #tc'),
(5, 'Après ce début d\'année difficile, des vacances s\'imposent. Bravo pour les SAE !', '2022-08-26 02:18:32', '/upload/test/1_test5.jpg', 1, '#sae #vacances #mmi #but #iut #repos'),
(6, 'Félicitations à nos étudiants fraichement diplomés. Bonne continuation.', '2022-08-26 02:18:32', '/upload/test/2_test1.jpg', 2, '#licence #iut #formation #enseignement #diplome #reussite'),
(7, 'C\'est les vacances, enjoy ;-)', '2022-08-26 02:18:32', '/upload/test/2_test2.jpg', 2, '#vacances #holidays'),
(8, 'Encore une nouvelle rentrée qui se profile. Bienvenue aux nouveaux étudiants.', '2022-08-26 02:18:33', '/upload/test/2_test3.jpg', 2, '#but #iut #rentree2022 #ecole #scolarite'),
(9, 'La JPO c\'est pour bientôt. L\'iut de Lens vous ouvre ses portes !', '2022-08-26 02:18:33', '/upload/test/3_test1.jpg', 3, '#but #iut #jpo #formation #enseignement #universite'),
(10, 'Pour la rentrée, venez découvrir nos possibilités de logement étudiant', '2022-08-26 02:18:33', '/upload/test/3_test2.jpg', 3, '#rentree #logement #univeriste #crous #etudiant'),
(11, 'Logements, restauration, aides ? le CROUS de Lille vous accompagne dans vos études', '2022-08-26 02:18:33', '/upload/test/3_test3.jpg', 3, '#crous #logement #ru #universite #etudiant'),
(12, 'Bienvenue à l\'Université d\'Artois', '2022-08-26 02:18:33', '/upload/test/3_test4.jpg', 3, '#universite #artois #superieur #enseignement'),
(13, 'L\'Université d\'Artois souhaite à ses étudiants une bonne rentrée 2022.', '2022-08-26 02:18:33', '/upload/test/3_test5.jpg', 3, '#artois #rentree #universite #2022');

-- --------------------------------------------------------

--
-- Structure de la table `friend`
--

DROP TABLE IF EXISTS `friend`;
CREATE TABLE IF NOT EXISTS `friend` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `dateAbonnement` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `idAbonne` int(11) NOT NULL,
  `idAmi` int(11) NOT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `id` (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=9 DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Structure de la table `user`
--

DROP TABLE IF EXISTS `user`;
CREATE TABLE IF NOT EXISTS `user` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `login` varchar(100) NOT NULL,
  `mdp` varchar(255) NOT NULL,
  `email` varchar(255) DEFAULT NULL,
  `remember` varchar(255) DEFAULT NULL,
  `avatar` varchar(255) DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `login` (`login`)
) ENGINE=MyISAM AUTO_INCREMENT=8 DEFAULT CHARSET=latin1;

--
-- Déchargement des données de la table `user`
--

INSERT INTO `user` (`id`, `login`, `mdp`, `email`, `remember`, `avatar`) VALUES
(1, 'dpt MMI Lens', '7110eda4d09e062aa5e4a390b0a572ac0d2c0220', 'mmi@univ-artois.fr', NULL, NULL),
(2, 'IUT Lens', '40bd001563085fc35165329ea1ff5c5ecbdbbeef', 'iut@univ-artois.fr', NULL, NULL),
(3, 'Communication Artois', '40bd001563085fc35165329ea1ff5c5ecbdbbeef', 'com@univ-artois.fr', NULL, NULL);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
