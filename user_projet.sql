-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Hôte : 127.0.0.1:3306
-- Généré le : lun. 04 sep. 2023 à 09:18
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

-- --------------------------------------------------------

--
-- Structure de la table `annonce`
--

DROP TABLE IF EXISTS `annonce`;
CREATE TABLE IF NOT EXISTS `annonce` (
  `id_animal` int NOT NULL AUTO_INCREMENT,
  `nom_animal` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `puce_animal` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `img_animal` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `espece_animal` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `race_animal` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `naissance_animal` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `sexe_animal` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `lieu_animal` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `compatible_animal` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `description_animal` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  PRIMARY KEY (`id_animal`)
) ENGINE=MyISAM AUTO_INCREMENT=10 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Déchargement des données de la table `annonce`
--

INSERT INTO `annonce` (`id_animal`, `nom_animal`, `puce_animal`, `img_animal`, `espece_animal`, `race_animal`, `naissance_animal`, `sexe_animal`, `lieu_animal`, `compatible_animal`, `description_animal`) VALUES
(8, 'Pamplemousse', '098765432156475', 'miaous', '', 'Europeen', '4', 'male', '0', '', 'fait des betises'),
(9, 'Uranus', '324234', 'hfghf', '', 'siamois', '6', 'male', '0', '', 'dbdb');

-- --------------------------------------------------------

--
-- Structure de la table `apparences`
--

DROP TABLE IF EXISTS `apparences`;
CREATE TABLE IF NOT EXISTS `apparences` (
  `id` int NOT NULL AUTO_INCREMENT,
  `apparences` varchar(100) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `value` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=10 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Déchargement des données de la table `apparences`
--

INSERT INTO `apparences` (`id`, `apparences`, `value`) VALUES
(1, 'Beige', 'beige'),
(2, 'Blanc', 'blanc'),
(3, 'Chocolat', 'chocolat'),
(4, 'Crème', 'creme'),
(5, 'Gris', 'gris'),
(6, 'Noir', 'noir'),
(7, 'Roux', 'roux'),
(8, 'Tigré', 'tigre'),
(9, 'Tricolore', 'tricolore');

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
) ENGINE=MyISAM AUTO_INCREMENT=118 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Déchargement des données de la table `famille`
--

INSERT INTO `famille` (`id`, `nom_user`, `prenom_user`, `age_user`, `email_user`, `adresse_user`, `ville_user`, `codepostal_user`, `tel_user`, `type_logement`, `exterieur_user`, `type_exterieur`, `situation_foyer`, `activite_famille`, `activite_conjoint`, `enfants_foyer`, `nbr_enfants`, `temps_activite`, `raison_famille`, `animaux_famille`, `nbr_animaux`, `chiens_radio`, `chats_radio`, `oiseaux_radio`, `autres_radio`, `others_animaux`, `details_animaux_vie`, `age_animaux_vie`, `disponible_veto`) VALUES
(114, 'iuhiu', 'oiugj', '25-35ans', 'hlkijhjh@hhjhkj.com', 'hiuhk', 'hkjhbkj', '87654', '0987675567', 'maison', 'oui', 'terrasse', 'seul', 'sans-emploi', '', 'oui', '1', '1h-3h', 'j', 'oui', 'oui', '2', '2', '2', '2', 'kj', 'khjk', 'junior', 'oui'),
(115, 'iuhiu', 'oiugj', '50-75ans', 'hjh@gfhhkj.com', 'hiuhk', 'hkjhbkj', '87654', '0987675567', 'maison', 'oui', 'terrasse', 'seul', 'sans-emploi', '', 'oui', '1', '1h-3h', 'ji', 'oui', 'oui', '1', '1', '1', '1', 'lkn', 'lkn', 'junior', 'non'),
(116, 'iuhiu', 'oiugj', '35-50ans', 'hjh@hhkj.com', 'hiuhk', 'hkjhbkj', '87654', '0987675567', 'maison', 'oui', 'terrasse', 'seul', 'sans-emploi', '', 'oui', '1', '1h-3h', 'j', 'oui', 'oui', '1', '1', '1', '1', 'k', 'kn', 'junior', 'oui'),
(117, 'iuhiu', 'oiugj', '35-50ans', 'hjh@hhjhkj.com', 'hiuhk', 'hkjhbkj', '87654', '0987675567', 'maison', 'oui', 'terrasse', 'seul', 'sans-emploi', '', 'oui', '1', '1h-3h', 'f', 'oui', 'oui', '1', '1', '1', '1', 'poisson,souris,hamster', 'fe', 'junior', 'oui');

-- --------------------------------------------------------

--
-- Structure de la table `maladies`
--

DROP TABLE IF EXISTS `maladies`;
CREATE TABLE IF NOT EXISTS `maladies` (
  `id` int NOT NULL AUTO_INCREMENT,
  `maladies` varchar(100) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `value` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=99 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Déchargement des données de la table `maladies`
--

INSERT INTO `maladies` (`id`, `maladies`, `value`) VALUES
(1, 'Allergies', 'allergies'),
(2, 'Alopécie', 'alopecie'),
(3, 'Asthme félin', 'asthme felin'),
(4, 'Calculs urinaires', 'calculs urinaires'),
(5, 'Chlamydiose', 'chlamydiose'),
(6, 'Conjonctivite', 'conjonctivite'),
(7, 'Coryza', 'coryza'),
(8, 'Cystite', 'cystite'),
(9, 'Dermatite', 'dermatite'),
(10, 'Diabète', 'diabete'),
(11, 'Herpès', 'herpes'),
(12, 'Hyperthyroïdie', 'hyperthyroidie'),
(13, 'Immunodéficience féline', 'immunodeficience feline'),
(14, 'Insuffisance cardiaque', 'insuffisance cardiaque'),
(15, 'Insuffisance rénale', 'insuffisance renale'),
(16, 'Leucémie féline', 'leucemie feline'),
(17, 'Leucose féline', 'leucose feline'),
(18, 'Maladies dentaires', 'maladies dentaires'),
(19, 'Maladies des gencives', 'maladies des gencives'),
(20, 'Maladies respiratoires', 'maladies respiratoires'),
(21, 'Otite', 'otite'),
(22, 'Parasites intestinaux', 'parasites intestinaux'),
(23, 'Rhinotrachéite Virale Féline (RVF)', 'rvf'),
(24, 'Rhinite féline', 'rhinite feline'),
(25, 'FIV', 'fiv'),
(26, 'Tumeurs', ''),
(27, 'Typhus', '');

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
) ENGINE=MyISAM AUTO_INCREMENT=27 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Déchargement des données de la table `users`
--

INSERT INTO `users` (`id`, `pseudo`, `nom`, `prenom`, `email`, `mdp`, `recup_mdp`) VALUES
(11, 'Marie', '', '', 'mswietrich1507@gmail.com', 'e10adc3949ba59abbe56e057f20f883e', '7a1118708aa702d9edb5f999bff4286da2c7c83736459388e6d189c547e4'),
(25, 'Marlon', '', '', 'bastien.lecour2025@gmail.com', '25f9e794323b453885f5181f1b624d0b', NULL);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
