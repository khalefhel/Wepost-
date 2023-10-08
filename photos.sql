-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Hôte : 127.0.0.1:3306
-- Généré le : dim. 26 fév. 2023 à 20:57
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
-- Base de données : `photos`
--

-- --------------------------------------------------------

--
-- Structure de la table `uploadedphotos`
--

DROP TABLE IF EXISTS `uploadedphotos`;
CREATE TABLE IF NOT EXISTS `uploadedphotos` (
  `id` int NOT NULL AUTO_INCREMENT,
  `pseudo` varchar(255) NOT NULL,
  `titre` varchar(255) NOT NULL,
  `endroit` varchar(255) NOT NULL,
  `file_name` text NOT NULL,
  `datedecreation` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `extension` varchar(10) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=82 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Déchargement des données de la table `uploadedphotos`
--

INSERT INTO `uploadedphotos` (`id`, `pseudo`, `titre`, `endroit`, `file_name`, `datedecreation`, `extension`) VALUES
(15, 'khalef', 'photos', 'paris', '20230124_224757.jpg', '2023-02-24 16:14:21', ''),
(16, 'yanis', 'musé', 'paris', 'WIN_20230119_16_36_36_Pro.jpg', '2023-02-24 16:17:12', ''),
(17, 'khalef', 'la france est belle', 'france', 'la-france-est-belle.jpg', '2023-02-24 18:16:30', ''),
(18, 'khalef', 'neige', 'nature', 'belle-la-vue-montagne-en-hiver-neige-soleil-couchant.jpg', '2023-02-24 18:17:26', ''),
(19, 'khalef', 'une fille dans la nature', 'nature', 'images.jpg', '2023-02-24 18:18:21', ''),
(20, 'khalef', 'coché de soleil', 'algerie', 'thumb_Coucher_de_soleil-Cotes-d-Armor.jpg', '2023-02-24 18:19:08', ''),
(21, 'khalef', 'image de la kabylie', 'kabylie', 'f184261025eaf8b584e8d1a75a4dbcbc.jpg', '2023-02-24 18:21:30', ''),
(22, 'khalef', 'belle image prise a la kabylie', 'tizi ouzou', 'images (1).jpg', '2023-02-24 18:22:52', ''),
(23, 'bahia', 'bahia hel', 'tizi ouzou', 'b.jpg', '2023-02-24 21:01:12', ''),
(34, 'hjv', 'jbj', 'jbjb', 'b.jpg', '2023-02-26 16:50:57', ''),
(33, 'j', 'n', 'jjj', 'WIN_20230119_16_36_36_Pro.jpg', '2023-02-26 16:50:13', ''),
(35, 'KHALEF', 'n', 'jjj', 'images.jpg', '2023-02-26 16:53:04', ''),
(36, 'khalef', 'dkd', 'dcdc', 'b.jpg', '2023-02-26 16:59:19', ''),
(37, 'khalef', 'dkd', 'dcdc', 'b.jpg', '2023-02-26 17:00:25', ''),
(38, 'khalef', 'dkd', 'dcdc', 'b.jpg', '2023-02-26 17:00:44', ''),
(39, 'khalef', 'dkd', 'dcdc', 'b.jpg', '2023-02-26 17:01:07', ''),
(40, 'khalef', 'dkd', 'dcdc', 'b.jpg', '2023-02-26 17:01:18', ''),
(41, 'coucou', 'sdjsd', 'qefef', 'belle-la-vue-montagne-en-hiver-neige-soleil-couchant.jpg', '2023-02-26 17:01:48', ''),
(42, 'khalef', 'dkd', 'dcdc', 'b.jpg', '2023-02-26 17:03:05', ''),
(43, 'yanis', 'yanisimage', 'tiziouzou', 'la-france-est-belle.jpg', '2023-02-26 17:07:09', ''),
(44, 'coucou', 'sdjsd', 'qefef', 'belle-la-vue-montagne-en-hiver-neige-soleil-couchant.jpg', '2023-02-26 17:10:43', ''),
(45, 'coucou', 'sdjsd', 'qefef', 'belle-la-vue-montagne-en-hiver-neige-soleil-couchant.jpg', '2023-02-26 17:11:20', ''),
(46, 'khalef', 'image de moi', 'ma chamre', 'b.jpg', '2023-02-26 17:18:14', ''),
(47, '', '', '', 'logo.jpg', '2023-02-26 17:46:57', ''),
(48, 'anis', 'sdv', 'azdazd', 'b.jpg', '2023-02-26 20:19:15', ''),
(49, 'anis', 'couché de soleil', 'azefoun', 'thumb_Coucher_de_soleil-Cotes-d-Armor.jpg', '2023-02-26 20:22:38', ''),
(50, 'anis', 'verdure', 'natuere', 'images.jpg', '2023-02-26 20:23:58', ''),
(51, '', '', '', 'watkins-glen-gorge-rainbow-bridge-new-york-730x1024.jpg', '2023-02-26 20:24:56', ''),
(52, '', '', '', 'la-france-est-belle.jpg', '2023-02-26 20:25:44', ''),
(53, '', '', '', 'watkins-glen-gorge-rainbow-bridge-new-york-730x1024.jpg', '2023-02-26 20:26:01', ''),
(54, '', '', '', 'images.jpg', '2023-02-26 20:26:47', ''),
(55, 'khalef', 'scsc', 'scscs', 'images.jpg', '2023-02-26 20:29:00', ''),
(56, '', '', '', 'la-france-est-belle.jpg', '2023-02-26 20:31:43', ''),
(57, '', '', '', 'f184261025eaf8b584e8d1a75a4dbcbc.jpg', '2023-02-26 20:32:00', ''),
(58, '', '', '', 'images (1).jpg', '2023-02-26 20:32:50', ''),
(59, '', '', '', 'images.jpg', '2023-02-26 20:34:06', ''),
(60, '', '', '', 'téléchargement (1).jpg', '2023-02-26 20:36:19', ''),
(61, '', '', '', 'b.jpg', '2023-02-26 20:38:30', ''),
(62, '', '', '', 'téléchargement (1).jpg', '2023-02-26 20:38:48', ''),
(63, '', '', '', 'images (1).jpg', '2023-02-26 20:39:05', ''),
(64, '', '', '', 'watkins-glen-gorge-rainbow-bridge-new-york-730x1024.jpg', '2023-02-26 20:40:18', ''),
(65, '', '', '', 'b.jpg', '2023-02-26 20:40:35', ''),
(66, 'khalef', 'verdure', 'nature', 'b.jpg', '2023-02-26 20:43:33', ''),
(67, 'khalef', 'verdure', 'nature', 'b.jpg', '2023-02-26 20:43:59', ''),
(68, '', '', '', 'b.jpg', '2023-02-26 20:45:09', ''),
(69, '', '', '', 'b.jpg', '2023-02-26 20:50:40', ''),
(70, '', '', '', 'la-france-est-belle.jpg', '2023-02-26 20:50:57', ''),
(71, 'khalef', 'titre', 'tizi', 'la-france-est-belle.jpg', '2023-02-26 21:05:44', ''),
(72, 'khalef', 'coucouc', 'tizi', 'b.jpg', '2023-02-26 21:22:54', 'jpg'),
(73, 'khalef', 'belleimagr', 'nature', 'images.jpg', '2023-02-26 21:27:10', 'jpg'),
(74, 'neymar', 'messi', 'cristiano', 'b.jpg', '2023-02-26 21:29:07', 'jpg'),
(75, 'khalef', 'coche de soleil', 'nature', 'thumb_Coucher_de_soleil-Cotes-d-Armor.jpg', '2023-02-26 21:34:46', 'jpg'),
(76, 'anis', 'neige ', 'kabylie', 'belle-la-vue-montagne-en-hiver-neige-soleil-couchant.jpg', '2023-02-26 21:36:40', 'jpg'),
(77, 'khalef', 'réviere', 'Orleans', 'réviére.jpg', '2023-02-26 21:38:27', 'jpg'),
(78, 'khalef', 'family', 'nature', 'gettyimages-1270104024-612x612.jpg', '2023-02-26 21:40:22', 'jpg'),
(79, 'alex', 'cpché de soleil', 'nature', 'thumb_Coucher_de_soleil-Cotes-d-Armor.jpg', '2023-02-26 21:41:22', 'jpg'),
(80, 'omar', 'nuit', 'réviere', 'nuit.jpg', '2023-02-26 21:42:40', 'jpg'),
(81, 'stevane', 'verdure', 'paris', 'b.jpg', '2023-02-26 21:43:38', 'jpg');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
