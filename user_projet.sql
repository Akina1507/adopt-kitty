-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Hôte : 127.0.0.1:3306
-- Généré le : lun. 03 juil. 2023 à 15:42
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
  `id_chat` int NOT NULL AUTO_INCREMENT,
  `nom_chat` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `img_chat` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `age_chat` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `sexe_chat` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `race_chat` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `apparence` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `precision_apparence` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `activite` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `maladie` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `liste_maladie` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `puce_chat` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `disponible` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'disponible',
  `description` text CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci,
  `id` int NOT NULL,
  PRIMARY KEY (`id_chat`)
) ENGINE=MyISAM AUTO_INCREMENT=10 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Déchargement des données de la table `annonce`
--

INSERT INTO `annonce` (`id_chat`, `nom_chat`, `img_chat`, `age_chat`, `sexe_chat`, `race_chat`, `apparence`, `precision_apparence`, `activite`, `maladie`, `liste_maladie`, `puce_chat`, `disponible`, `description`, `id`) VALUES
(8, 'Pamplemousse', 'miaous', '4', 'male', 'Europeen', '', '0', 'jouer a la balle, aller dans le jardin', 'oui', '', '098765432156475', 'disponible', 'fait des betises', 0),
(9, 'Uranus', 'hfghf', '6', 'male', 'siamois', '', '0', 'cbvbd', 'oui', '', '324234', 'disponible', 'dbdb', 0);

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
  `age_user` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `adresse_user` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
  `ville_user` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
  `codepostal_user` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
  `email_user` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
  `tel_user` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
  `type_logement` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
  `exterieur_user` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
  `type_exterieur` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `situation_foyer` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
  `enfants_foyer` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `nbr_enfants` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `age_enfants` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `raison_famille` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `activite_famille` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `temps_activite` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `animaux_famille` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `nbr_animaux` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `animaux_vie` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `details_animaux_vie` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `age_animaux_vie` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `disponible_veto` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `qst_steril` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `qst-mld` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=7 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Déchargement des données de la table `famille`
--

INSERT INTO `famille` (`id`, `nom_user`, `prenom_user`, `age_user`, `adresse_user`, `ville_user`, `codepostal_user`, `email_user`, `tel_user`, `type_logement`, `exterieur_user`, `type_exterieur`, `situation_foyer`, `enfants_foyer`, `nbr_enfants`, `age_enfants`, `raison_famille`, `activite_famille`, `temps_activite`, `animaux_famille`, `nbr_animaux`, `animaux_vie`, `details_animaux_vie`, `age_animaux_vie`, `disponible_veto`, `qst_steril`, `qst-mld`) VALUES
(1, 'wilson', 'alice', '', '20 rue des chats', 'Reims', '3242', 'chat@gmail.com', '2323', 'maison', 'balcon', '', 'aucun', '0', '', '', '', '', '', '', '', '', '', '', '', '', ''),
(2, 'Cross', 'marlon', '', '20 place des cubes', 'Los angeles', '23456', 'marlon.cross@gmail.com', '555098765', 'maison', 'jardin', '', 'seul', '0', '', '', '', '', '', '', '', '', '', '', '', '', ''),
(3, 'timousse', 'miaou', '', '20 rue des chatons', 'Reims', '476', 'chayt@gmail.com', '742904', 'maison', 'terrasse', '', 'seul', '0', '', '', '', '', '', '', '', '', '', '', '', '', ''),
(4, 'sbdfbdf', 'dbdfbd', '', '20 rue des chiens', 'rouen', '24234', 'edbdef@dbdfibdof.com', '252525', 'maison', 'jardin', '', 'seul', '0', '', '', '', '', '', '', '', '', '', '', '', '', ''),
(5, 'montagnier', 'marlene', '', '98 place des hamsters', 'Amsterdam', '23456', 'marlene.martagnier@mail.com', '0976527348', 'maison', 'jardin', '', 'couple', 'oui', '3', '', '', '', '', '', '', '', '', '', '', '', ''),
(6, 'montagnier', 'marlene', '', '98 place des hamsters', 'Amsterdam', '23456', 'marlene.martagner@mail.com', '0976527348', 'maison', 'jardin', '', 'couple', 'oui', '3', '', '', '', '', '', '', '', '', '', '', '', '');

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
) ENGINE=MyISAM AUTO_INCREMENT=103 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Déchargement des données de la table `races`
--

INSERT INTO `races` (`id`, `races`, `value`) VALUES
(1, 'Angora', 'angora'),
(2, 'Bengal', 'bengal'),
(3, 'Bleu russe', 'bleu-russe'),
(4, 'Bobtail japonais', 'bobtail-japonais'),
(5, 'Croisé', 'croise'),
(6, 'Chartreux', 'charteux'),
(7, 'Maine coon', 'maine-coon'),
(8, 'Norvégien', 'norvegien'),
(9, 'Persan', 'persan'),
(10, 'Sacré de birmanie', 'sacre-de-birmanie'),
(11, 'Scottish', 'scottish'),
(12, 'Siamois', 'siamois'),
(13, 'Sibérien', 'siberien'),
(14, 'Somali', 'somali'),
(15, 'Sphynx', 'sphynx');

-- --------------------------------------------------------

--
-- Structure de la table `users`
--

DROP TABLE IF EXISTS `users`;
CREATE TABLE IF NOT EXISTS `users` (
  `id` int NOT NULL AUTO_INCREMENT,
  `pseudo` varchar(50) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `email` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `mdp` varchar(50) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `recup_mdp` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=26 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Déchargement des données de la table `users`
--

INSERT INTO `users` (`id`, `pseudo`, `email`, `mdp`, `recup_mdp`) VALUES
(11, 'Marie', 'mswietrich1507@gmail.com', 'e10adc3949ba59abbe56e057f20f883e', '7a1118708aa702d9edb5f999bff4286da2c7c83736459388e6d189c547e4'),
(24, 'hhfdfchkh', 'fnfgfnf@fdfgnfgkgg.fr', '250cf8b51c773f3f8dc8b4be867a9a02', '7a1118708aa702d9edb5f999bff4286da2c7c83736459388e6d189c547e4'),
(23, 'hhfchkh', 'fnfgfnf@fgnfgkgg.fr', '202cb962ac59075b964b07152d234b70', '7a1118708aa702d9edb5f999bff4286da2c7c83736459388e6d189c547e4'),
(22, 'hhfch', 'fnfgfnf@fgnfg.fr', '81dc9bdb52d04dc20036dbd8313ed055', '7a1118708aa702d9edb5f999bff4286da2c7c83736459388e6d189c547e4'),
(25, 'Marlon', 'bastien.lecour2025@gmail.com', '25f9e794323b453885f5181f1b624d0b', NULL);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
