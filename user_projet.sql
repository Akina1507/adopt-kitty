-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Hôte : 127.0.0.1:3306
-- Généré le : ven. 15 sep. 2023 à 14:32
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
  `temps_activite` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=9 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Déchargement des données de la table `adoption`
--

INSERT INTO `adoption` (`id`, `civile_user`, `nom_user`, `prenom_user`, `age_user`, `adresse_user`, `codepostal_user`, `ville_user`, `email_user`, `tel_user`, `raison_adopt`, `accueil_animaux`, `chiens_radio`, `chats_radio`, `oiseaux_radio`, `autres_radio`, `others_animaux`, `age_animaux`, `animaux_foyer`, `animaux_domestiques`, `exp_animaux`, `type_logement`, `exterieur_user`, `type_exterieur`, `situation_foyer`, `activite_famille`, `activite_conjoint`, `enfants_foyer`, `nbr_enfants`, `temps_activite`) VALUES
(1, 'madame', 'Colman', 'Mylène', '25-35ans', '1 chemin du Mont', '55000', 'Bar-le-duc', 'mylene_colman8751@outlook.fr', '0678453629', 'En tant que famille avec deux jeunes enfants âgés de 5 et 2 ans, nous aspirons à adopter un chat pour lui offrir un foyer aimant et chaleureux. Nous croyons que chaque chat mérite d\'être entouré d\'amour, de jeux et de soins. En adoptant un chat, nous souh', 'chat', '0', '0', '0', '1', '-', 'adulte', 'non', 'non', 'Je n\'aime pas les chiens, mais je n\'ai jamais eu d\'animaux jusque la.', 'maison', 'oui', 'jardin', 'couple', 'salarie', 'salarie', 'oui', '2', '7h-ou-plus'),
(2, 'monsieur', 'Bernard', 'Sébastien', '35-50ans', '45 rue Vesle', '51100', 'Reims', 'bernd_seb@gmail.com', '0678453609', 'Je souhaite à adopter un chat pour lui offrir une vie heureuse et épanouissante. Je crois que chaque chat mérite un foyer aimant et attentionné, où il pourra s\'épanouir, jouer et être choyé. En adoptant un chat, je m\'engage à lui offrir un environnement r', 'chat', '0', '0', '0', '1', 'poissons', 'adulte', 'oui', 'chiens', 'Berger allemand, très joueur et gentil mais décédé a cause de son age', 'maison', 'oui', 'jardin', 'seul', 'salarie', '', 'oui', '1', '5h-7h'),
(3, 'madame', 'Blanc', 'Christine', '50-75ans', '24 rue Gambetta', '52100', 'Saint-Dizier', 'christine.blanc@laposte.net', '0987458872', 'Vivant seule dans un appartement en ville, j\'aspire à adopter un chat pour trouver une précieuse compagnie et partager mon espace avec un être affectueux. Toutefois, mon désir d\'adoption va au-delà de ma propre solitude. En offrant un foyer à un chat, je ', 'chat', '0', '0', '0', '2', 'hamsters', 'adulte', 'non', 'autres', 'J\'ai eu 3 hamsters auparavent et il m\'en reste 2 actuellement de 2 ans, affectueux et gentil', 'appartement', 'non', '', 'seul', 'salarie', '', 'non', '', '3h-5h'),
(4, 'monsieur', 'Dubois', 'Gérard', '75-99ans', '2 rue de la Renaissance', '51400', 'Moumelont-le-petit', 'dubois-gerard698@orange.fr', '0354789420', 'À l\'âge de 80 ans, vivant à la campagne, j\'envisage d\'adopter un chat pour trouver de la compagnie et une source de réconfort au quotidien. La vie à la campagne peut être paisible, mais parfois, elle peut aussi être solitaire. En offrant un foyer à un cha', 'chat', '0', '0', '0', '2', 'lapin', 'senior', 'non', 'oiseaux', 'J\'aime eu des perruches et un lapin nain étant plus jeune', 'maison', 'oui', 'jardin', 'seul', 'retraite', '', 'non', '', '1h-3h');

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
) ENGINE=MyISAM AUTO_INCREMENT=20 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Déchargement des données de la table `annonce`
--

INSERT INTO `annonce` (`id`, `nom_animal`, `puce_animal`, `image_chat`, `espece_animal`, `race_animal`, `naissance_animal`, `sexe_animal`, `lieu_animal`, `chiens_radio`, `chats_radio`, `enfants_radio`, `non_radio`, `description_animal`) VALUES
(1, 'Tango', '9980467', 'da8b88b008f4c693cfd53f0a70155dd7435c4a9c.jpg', 'chat', 'europeen', '2021-11-25', 'male', 'Refuge Spa de Laon', 'chiens', 'non', 'non', 'oui', 'Tango est un chat craintif, qui aura besoin de temps et de patience pour le mettre en confiance\r\nNon compatible avec les chiens'),
(2, 'Frimousse', '095678', 'd5aaa50532a735b5970ca7e8be29648fb4232344.jpg', 'chat', 'europeen', '2020-03-03', 'male', 'Snpa Rouen', 'chiens', 'non', 'non', 'oui', 'C\'est un minou affectueux, calme et joueur. Nous aimerions qu\'il puisse enfin trouver sa famille, pour la vie.\r\nNon compatible avec les chiens.'),
(3, 'Bamboo', '22567', '333ed0aabeb94292d195e071bc4dc8b0a65a7eb9.jpg', 'chat', 'europeen', '2017-06-20', 'male', 'Snpa Rouen', 'non', 'non', 'non', 'oui', 'Bamboo est un très gentil matou qui se montre très câlins et toujours en demande d\'attention. Il est d\'un tempérament calme et aime passer son temps à observer son environnement.\r\nRéglisse pourra vivre avec tous types d\'animaux et les jeunes enfants'),
(4, 'Capucine', '674802', '6da300c06ec6045c8e55373484cb9cb6fa8a7c6c.jpg', 'chat', 'sacre-de-birmanie', '2019-06-02', 'femelle', 'Ronron Association', 'non', 'non', 'enfants', 'oui', 'Capucine est une chatte très caline et joueuse, elle est très pipelette\r\nElle est impatiente de trouver sa famille pour la vie\r\nIncompatible avec les jeunes enfants'),
(5, 'Mikado', '895649', '9259a7522c8b49d78cd61e7108e66f1f0f5fb88a.jpg', 'chat', 'siamois', '2022-07-07', 'male', 'Ronron Association', 'non', 'non', 'non', 'oui', 'Mikado est très joueur et sociable, il adore les plumes et les souris\nIl est compatible avec tous types d\'animaux et les jeunes enfants\nMikado sera très heureux de trouver une famille pour toujours.'),
(6, 'Spirou', '9864899', '731ddaa6dcc25c44faef8b28cc34aa8ea8a7e7d6.jpg', 'chat', 'croise', '2021-04-01', 'male', 'Ronron Association', 'chiens', 'non', 'non', 'oui', 'Spirou est un chat très câlin et plutôt calme et joueur. Luffy devra vivre en appartement ou en maison avec un extérieur de préférence.\r\nIncompatible avec les chiens');

-- --------------------------------------------------------

--
-- Structure de la table `associations`
--

DROP TABLE IF EXISTS `associations`;
CREATE TABLE IF NOT EXISTS `associations` (
  `id_assos` int NOT NULL AUTO_INCREMENT,
  `nom_assos` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `adresse_assos` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `ville_assos` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `codepostal_assos` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email_assos` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `tel_assos` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `mdp_assos` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `recup_mdp_assos` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  PRIMARY KEY (`id_assos`)
) ENGINE=MyISAM AUTO_INCREMENT=8 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Déchargement des données de la table `associations`
--

INSERT INTO `associations` (`id_assos`, `nom_assos`, `adresse_assos`, `ville_assos`, `codepostal_assos`, `email_assos`, `tel_assos`, `mdp_assos`, `recup_mdp_assos`) VALUES
(1, 'Ronron Association', '122 bis rue du Barbâtre', 'Reims', '51100', 'ronronassociation@gmail.com', '0789546734', 'd7d6c0ef4c0eee70a4d4b910d8366bc7', ''),
(2, 'Refuge SPA de Laon', 'Chemin de la Croix de Chivy', 'Laon', '02000', 'refuge.spa-laon@free.fr', '0323204254', '558a4bb107bed9c54e4edd25fbf36e14', ''),
(3, 'SNPA Rouen', '7 bis Avenue Jacques Chastellain Île Lacroix', 'Rouen', '76000', 'snpa2@orange.fr', '0235702036', '142b1c0a181ada4fd4d7e0e7a6e210d9', '');

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
) ENGINE=MyISAM AUTO_INCREMENT=126 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Déchargement des données de la table `famille`
--

INSERT INTO `famille` (`id`, `nom_user`, `prenom_user`, `age_user`, `email_user`, `adresse_user`, `ville_user`, `codepostal_user`, `tel_user`, `type_logement`, `exterieur_user`, `type_exterieur`, `situation_foyer`, `activite_famille`, `activite_conjoint`, `enfants_foyer`, `nbr_enfants`, `temps_activite`, `raison_famille`, `animaux_famille`, `nbr_animaux`, `chiens_radio`, `chats_radio`, `oiseaux_radio`, `autres_radio`, `others_animaux`, `details_animaux_vie`, `age_animaux_vie`, `disponible_veto`) VALUES
(3, 'Lefevre', 'Lucie', '18-25ans', 'lefevre.lucie0509@gmail.com', '12 rue Diderot', 'Troyes', '10000', '0967546732', 'appartement', 'non', '', 'couple', 'etudiant', 'etudiant', 'non', '', '5h-7h', 'En devenant famille d\'accueil pour un chat, nous cherchons à enrichir notre vie quotidienne en partageant notre espace et notre amour avec un animal de compagnie. Nous croyons que l\'ajout d\'un chat à notre foyer nous permettra de créer des souvenirs spéci', 'oui', 'non', '0', '0', '0', '0', '', '', '', 'oui'),
(2, 'Durant', 'Nicole', '50-75ans', 'durant.ncl1963@hotmail.com', '56 rue de l\'Arquebuse', 'Chalons-en-Champagne', '51000', '0754672345', 'maison', 'oui', 'jardin', 'seul', 'retraite', '', 'non', '', '1h-3h', 'En devenant famille d\'accueil pour un chat, je désire offrir de la compagnie et de l\'amour à un animal de compagnie tout en profitant de sa présence pour combler ma solitude. J\'ai beaucoup d\'affection à donner et je souhaite partager mon temps et mon espa', 'oui', 'oui', '1', '0', '0', '0', '', 'petite chienne de 9 ans, très calme, cavalier king charles', 'senior', 'oui'),
(1, 'Millier', 'Adrien', '18-25ans', 'adrien.millier9867@gmail.com', '36 des tulipes', 'Laon', '02000', '0678905567', 'appartement', 'oui', 'balcon', 'couple', 'salarie', 'salarie', 'non', '', '3h-5h', 'Je suis profondément passionné(e) par les chats et j\'aimerais partager mon amour et mon engagement envers ces animaux en leur offrant un environnement aimant et sécurisé en tant que famille d\'accueil. Mon désir est de contribuer au bien-être des chats qui', 'oui', 'oui', '1', '0', '0', '0', '', 'chien très joueur, affectueux, compatible avec les chats, berger suisse, 4 ans', 'adulte', 'oui'),
(4, 'Chevalier', 'Maxime', '35-50ans', 'chvlier-maxime@orange.fr', '46 rue Jean Mermoz', 'Witry-les-reims', '51420', '0654782309', 'maison', 'oui', 'terrasse', 'couple', 'salarie', 'salarie', 'oui', '2', '5h-7h', 'En devenant famille d\'accueil pour un chat, nous souhaitons enseigner à nos deux enfants des valeurs importantes telles que l\'empathie, la responsabilité et le respect envers les animaux. Nous croyons que l\'expérience de prendre soin d\'un chat ensemble re', 'oui', 'oui', '1', '1', '0', '1', 'cochon d\'inde', 'chien malinois 3 ans et chatte sacré de birmanie 2 ans\r\ncalme, très joueurs et curieux', 'adulte', 'oui'),
(5, 'Dupont', 'Pierre', '25-35ans', 'pierre-dupont@gmail.com', '20 rue des augustins', 'Reims', '51100', '0678904456', 'maison', 'oui', 'terrasse', 'couple', 'etudiant', 'salarie', 'oui', '1', '1h-3h', 'je voudrais devenir famille d\'accueil car....', 'oui', 'oui', '1', '2', '3', '1', 'cochon d\'inde', 'tri-color, pas de maladie', 'adulte', 'oui');

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
) ENGINE=MyISAM AUTO_INCREMENT=33 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Déchargement des données de la table `users`
--

INSERT INTO `users` (`id`, `pseudo`, `nom`, `prenom`, `email`, `mdp`, `recup_mdp`) VALUES
(1, 'Marie', 'Wietrich', 'Marie-Sarah', 'mswietrich1507@gmail.com', 'e10adc3949ba59abbe56e057f20f883e', NULL),
(2, 'Lucie Lefevre', 'lefevre', 'Lucie', 'lefevre.lucie0509@outlook.com', 'f3349e834612f39a29db3711368d5adb', NULL),
(3, 'aMillier', 'Millier', 'Adrien', 'adrien.millier9867@gmail.com', '31624c3cd83c63243d74c03bb005d4ad', NULL),
(4, 'cmaxime', 'Chevalier', 'Maxiem', 'chvlier-maxime@orange.fr', 'c403bcce7a1faedcb8cc45ad8478d73c', NULL),
(5, 'Nicole Durant', 'Durant', 'Nicole', 'durant.ncl1963@hotmail.com', 'a496beeb32d76e58b8155bd962417d25', NULL);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
