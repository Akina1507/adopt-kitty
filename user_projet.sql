-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Hôte : 127.0.0.1:3306
-- Généré le : lun. 11 sep. 2023 à 09:59
-- Version du serveur : 8.0.31
-- Version de PHP : 8.0.26

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données : `user_projet`
--
CREATE DATABASE IF NOT EXISTS `user_projet` DEFAULT CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci;
USE `user_projet`;

-- --------------------------------------------------------

--
-- Structure de la table `adoption`
--

DROP TABLE IF EXISTS `adoption`;
CREATE TABLE IF NOT EXISTS `adoption` (
  `id` int NOT NULL AUTO_INCREMENT,
  `civile_user` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `nom_user` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `prenom_user` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `age_user` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `adresse_user` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `codepostal_user` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `ville_user` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email_user` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `tel_user` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `raison_adopt` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `accueil_animaux` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `chiens_radio` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `chats_radio` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `oiseaux_radio` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `autres_radio` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `others_animaux` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `age_animaux` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `animaux_foyer` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `animaux_domestiques` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `exp_animaux` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `type_logement` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `exterieur_user` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `type_exterieur` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `situation_foyer` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `activite_famille` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `activite_conjoint` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `enfants_foyer` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `nbr_enfants` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `raison_famille` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `temps_activite` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Structure de la table `annonce`
--

DROP TABLE IF EXISTS `annonce`;
CREATE TABLE IF NOT EXISTS `annonce` (
  `id` int NOT NULL AUTO_INCREMENT,
  `nom_animal` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `puce_animal` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `image_chat` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `espece_animal` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `race_animal` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `naissance_animal` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `sexe_animal` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `lieu_animal` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `chiens_radio` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'non',
  `chats_radio` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'non',
  `enfants_radio` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'non',
  `non_radio` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'oui',
  `description_animal` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=11 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Déchargement des données de la table `annonce`
--

INSERT INTO `annonce` (`id`, `nom_animal`, `puce_animal`, `image_chat`, `espece_animal`, `race_animal`, `naissance_animal`, `sexe_animal`, `lieu_animal`, `chiens_radio`, `chats_radio`, `enfants_radio`, `non_radio`, `description_animal`) VALUES
(10, 'oiugj iuhiu', '3553', 'f3b525b0c6cfd1730e4df7292c12fb11ab74180e.jpg', 'chat', 'norvegien', '2023-08-30', 'male', 'miaou', 'non', 'non', 'enfants', 'oui', 'fdbvd');

-- --------------------------------------------------------

--
-- Structure de la table `associations`
--

DROP TABLE IF EXISTS `associations`;
CREATE TABLE IF NOT EXISTS `associations` (
  `id` int NOT NULL,
  `nom_assos` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email_assos` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `mdp_assos` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Structure de la table `famille`
--

DROP TABLE IF EXISTS `famille`;
CREATE TABLE IF NOT EXISTS `famille` (
  `id` int NOT NULL AUTO_INCREMENT,
  `nom_user` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
  `prenom_user` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
  `age_user` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `email_user` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
  `adresse_user` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
  `ville_user` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
  `codepostal_user` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
  `tel_user` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
  `type_logement` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
  `exterieur_user` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
  `type_exterieur` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `situation_foyer` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
  `activite_famille` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `activite_conjoint` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `enfants_foyer` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `nbr_enfants` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `temps_activite` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `raison_famille` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `animaux_famille` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `nbr_animaux` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `chiens_radio` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `chats_radio` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `oiseaux_radio` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `autres_radio` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `others_animaux` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `details_animaux_vie` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `age_animaux_vie` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `disponible_veto` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=119 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Déchargement des données de la table `famille`
--

INSERT INTO `famille` (`id`, `nom_user`, `prenom_user`, `age_user`, `email_user`, `adresse_user`, `ville_user`, `codepostal_user`, `tel_user`, `type_logement`, `exterieur_user`, `type_exterieur`, `situation_foyer`, `activite_famille`, `activite_conjoint`, `enfants_foyer`, `nbr_enfants`, `temps_activite`, `raison_famille`, `animaux_famille`, `nbr_animaux`, `chiens_radio`, `chats_radio`, `oiseaux_radio`, `autres_radio`, `others_animaux`, `details_animaux_vie`, `age_animaux_vie`, `disponible_veto`) VALUES
(114, 'iuhiu', 'oiugj', '25-35ans', 'hlkijhjh@hhjhkj.com', 'hiuhk', 'hkjhbkj', '87654', '0987675567', 'maison', 'oui', 'terrasse', 'seul', 'sans-emploi', '', 'oui', '1', '1h-3h', 'j', 'oui', 'oui', '2', '2', '2', '2', 'kj', 'khjk', 'junior', 'oui'),
(115, 'iuhiu', 'oiugj', '50-75ans', 'hjh@gfhhkj.com', 'hiuhk', 'hkjhbkj', '87654', '0987675567', 'maison', 'oui', 'terrasse', 'seul', 'sans-emploi', '', 'oui', '1', '1h-3h', 'ji', 'oui', 'oui', '1', '1', '1', '1', 'lkn', 'lkn', 'junior', 'non'),
(116, 'iuhiu', 'oiugj', '35-50ans', 'hjh@hhkj.com', 'hiuhk', 'hkjhbkj', '87654', '0987675567', 'maison', 'oui', 'terrasse', 'seul', 'sans-emploi', '', 'oui', '1', '1h-3h', 'j', 'oui', 'oui', '1', '1', '1', '1', 'k', 'kn', 'junior', 'oui'),
(117, 'iuhiu', 'oiugj', '35-50ans', 'hjh@hhjhkj.com', 'hiuhk', 'hkjhbkj', '87654', '0987675567', 'maison', 'oui', 'terrasse', 'seul', 'sans-emploi', '', 'oui', '1', '1h-3h', 'f', 'oui', 'oui', '1', '1', '1', '1', 'poisson,souris,hamster', 'fe', 'junior', 'oui'),
(118, 'iuhiu', 'oiugj', '18-25ans', 'hkgjh@uihuigfhhkj.com', 'hiuhk', 'hkjhbkj', '87654', '0987675567', 'maison', 'oui', 'terrasse', 'seul', 'sans-emploi', '', 'oui', '1', '1h-3h', 'c', 'oui', 'oui', '1', '1', '1', '1', 'd', 'd', 'junior', 'oui');

-- --------------------------------------------------------

--
-- Structure de la table `races`
--

DROP TABLE IF EXISTS `races`;
CREATE TABLE IF NOT EXISTS `races` (
  `id` int NOT NULL AUTO_INCREMENT,
  `races` varchar(100) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `value` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=113 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Déchargement des données de la table `races`
--

INSERT INTO `races` (`id`, `races`, `value`) VALUES
(1, 'Angora', 'angora'),
(2, 'Bengal', 'bengal'),
(3, 'Bleu russe', 'bleu-russe'),
(4, 'Bobtail japonais', 'bobtail-japonais'),
(5, 'Croisé', 'croise'),
(6, 'Europeen', 'europeen'),
(7, 'Charteux', 'chartreux'),
(8, 'Maine coon', 'maine-coon'),
(9, 'Norvégien', 'norvegien'),
(10, 'Persan', 'persan'),
(11, 'Sacré de birmanie', 'sacre-de-birmanie'),
(12, 'Scottish', 'scottish'),
(13, 'Siamois', 'siamois'),
(14, 'Sibérien', 'siberien'),
(15, 'Somali', 'somali'),
(16, 'Sphynx', 'sphynx');

-- --------------------------------------------------------

--
-- Structure de la table `users`
--

DROP TABLE IF EXISTS `users`;
CREATE TABLE IF NOT EXISTS `users` (
  `id` int NOT NULL AUTO_INCREMENT,
  `pseudo` varchar(50) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `nom` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `prenom` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `mdp` varchar(50) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `recup_mdp` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=29 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Déchargement des données de la table `users`
--

INSERT INTO `users` (`id`, `pseudo`, `nom`, `prenom`, `email`, `mdp`, `recup_mdp`) VALUES
(11, 'Marie', 'Wietrich', 'Marie-Sarah', 'mswietrich1507@gmail.com', 'e10adc3949ba59abbe56e057f20f883e', '2fc98dbfb799366ad1fc1fe53626683ab5f7f5aa3c8a48c04e27a33bf7ca'),
(28, 'miaou', 'Chouchou', 'Ronron', 'chouchou.loulou@gmail.com', '25f9e794323b453885f5181f1b624d0b', '2fc98dbfb799366ad1fc1fe53626683ab5f7f5aa3c8a48c04e27a33bf7ca');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
