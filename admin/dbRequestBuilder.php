<?php
// =====================================================================================================
// Project      : La Petite Ébénisterie en Herbe
// Context      : showcase website of a starting business in Ardèche, France,
//                specializing in the design & manufacturing of wooden furnitures & objects
// File         : dbRequestBuilder.php
// Role         : database request builder
// Author       : Frédéric DANIAU
// Creation     : 2021-06-03
// Last update  : 2021-06-03
// =====================================================================================================
// MySQL database creation script
// -- phpMyAdmin SQL Dump
// -- version 5.1.1
// -- https://www.phpmyadmin.net/
// --
// -- Hôte : 127.0.0.1:3306
// -- Généré le : dim. 04 juin 2023 à 10:39
// -- Version du serveur : 8.0.27
// -- Version de PHP : 7.4.26

// SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
// START TRANSACTION;
// SET time_zone = "+00:00";


// /*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
// /*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
// /*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
// /*!40101 SET NAMES utf8mb4 */;

// --
// -- Base de données : `petiteben`
// --

// -- --------------------------------------------------------

// --
// -- Structure de la table `articles`
// --

// DROP TABLE IF EXISTS `articles`;
// CREATE TABLE IF NOT EXISTS `articles` (
//   `id` int NOT NULL AUTO_INCREMENT,
//   `section_id` int NOT NULL,
//   `title` varchar(100) NOT NULL,
//   `background` int DEFAULT NULL,
//   `introduction` varchar(150) NOT NULL,
//   `content` text NOT NULL,
//   `content2` text,
//   `content3` text,
//   `content4` text,
//   `content5` text,
//   PRIMARY KEY (`id`)
// ) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

// -- --------------------------------------------------------

// --
// -- Structure de la table `creations`
// --

// DROP TABLE IF EXISTS `creations`;
// CREATE TABLE IF NOT EXISTS `creations` (
//   `id` int NOT NULL AUTO_INCREMENT,
//   `Name` varchar(100) NOT NULL,
//   `display_order` int DEFAULT NULL,
//   `type_creation` int NOT NULL,
//   `sortof` int NOT NULL,
//   `main_picture` varchar(255) DEFAULT NULL,
//   `diaporama` int DEFAULT NULL,
//   PRIMARY KEY (`id`)
// ) ENGINE=MyISAM AUTO_INCREMENT=2 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

// --
// -- Déchargement des données de la table `creations`
// --

// INSERT INTO `creations` (`id`, `Name`, `display_order`, `type_creation`, `sortof`, `main_picture`, `diaporama`) VALUES
// (1, 'Chaise Alpha', 1, 1, 1, 'furnitures/chaise_alpha/Chaise_Alpha_0011.jpg', NULL);

// -- --------------------------------------------------------

// --
// -- Structure de la table `pages`
// --

// DROP TABLE IF EXISTS `pages`;
// CREATE TABLE IF NOT EXISTS `pages` (
//   `id` int NOT NULL AUTO_INCREMENT,
//   `filename` varchar(60) NOT NULL,
//   `url` varchar(255) NOT NULL,
//   `css` varchar(255) NOT NULL,
//   `background` int DEFAULT NULL,
//   `rubric_id` int NOT NULL,
//   `rubric_order` int NOT NULL,
//   `title` varchar(100) NOT NULL,
//   `introduction` varchar(100) NOT NULL,
//   `content1` text NOT NULL,
//   `content2` text,
//   `content3` text,
//   `content4` text,
//   `content5` text,
//   PRIMARY KEY (`id`)
// ) ENGINE=MyISAM AUTO_INCREMENT=7 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

// --
// -- Déchargement des données de la table `pages`
// --

// INSERT INTO `pages` (`id`, `filename`, `url`, `css`, `background`, `rubric_id`, `rubric_order`, `title`, `introduction`, `content1`, `content2`, `content3`, `content4`, `content5`) VALUES
// (1, 'index.php', 'http://petitebenistery/', 'main.css', NULL, 1, 1, 'La Petite Ébénisterie en Herbe', '', '', NULL, NULL, NULL, NULL),
// (2, 'contacts.php', 'http://petitebenistery/pages/', 'main.css', NULL, 5, 5, 'Contacts', '', '', NULL, NULL, NULL, NULL),
// (3, 'apropos.php', 'http://petitebenistery/pages/', 'main.css', NULL, 2, 2, 'À propos', '', 'L\'environnement\r\nC\'est en milieu naturel que la Petite Ébénisterie en Herbe est installée. L\'atelier où je travaille le bois, mitoyen de la maison d\'habitation, est entouré d\'une zone dédiée au jardin et de forêts. Il bénéficie d\'une superbe vue sur la Vallée de la Fontaulière. Le site est calme, reposant, idéal.  Il favorise le processus de réflexion et de création.', 'L\'Estampille\r\nLa première création de la Petite Ébénisterie en Herbe c’est son Estampille ou Logo. Elle constitue la combinaison de plusieurs symboles :\r\nla vague centrale représentant la fusion des initiales F et D,\r\nle cercle représentant la pleine lune, symbole de l\'apogée, de la maturité et de la consécration. La lune est un symbole de féminité et l\'un des trois astres (avec la terre et le soleil) qui rythment la Vie et l’ordre de la Nature,\r\nles pyramides enfin, symboles d\'éternité et de protection.\r\nL\'Estampille est mise en perspective afin de donner relief et mouvement.', NULL, NULL, NULL),
// (4, 'valeurs.php', 'http://petitebenistery/pages/', 'main.css', NULL, 3, 3, 'Nos Valeurs', '', '', NULL, NULL, NULL, NULL),
// (5, 'creations.php', 'http://petitebenistery/pages/', 'main.css', NULL, 4, 4, 'Nos Créations', '', 'Le parti pris « Démontable »\r\nNos mobiliers sont conçus pour faciliter leur déplacement, pour suivre, pour durer. Le parti pris du démontable répond à ces critères tout comme à celui de la modulation. Les clavettes, les clefs de serrage permettent leur démontage, sont totalement intégrées aux réalisations et sont constitutifs de leur décoration.', NULL, NULL, NULL, NULL);

// -- --------------------------------------------------------

// --
// -- Structure de la table `pictures`
// --

// DROP TABLE IF EXISTS `pictures`;
// CREATE TABLE IF NOT EXISTS `pictures` (
//   `id` int NOT NULL AUTO_INCREMENT,
//   `rurbric_id` int DEFAULT NULL,
//   `article_id` int DEFAULT NULL,
//   `url` varchar(255) NOT NULL,
//   `title` varchar(60) DEFAULT NULL,
//   `description` text,
//   `aria_label` varchar(100) NOT NULL,
//   PRIMARY KEY (`id`)
// ) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

// -- --------------------------------------------------------

// --
// -- Structure de la table `rubrics`
// --

// DROP TABLE IF EXISTS `rubrics`;
// CREATE TABLE IF NOT EXISTS `rubrics` (
//   `id` int NOT NULL AUTO_INCREMENT,
//   `title` varchar(100) NOT NULL,
//   `fulldescription` text NOT NULL,
//   `infobulb` varchar(255) NOT NULL,
//   `legend` varchar(150) NOT NULL,
//   `picture` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci NOT NULL,
//   PRIMARY KEY (`id`)
// ) ENGINE=MyISAM AUTO_INCREMENT=6 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

// --
// -- Déchargement des données de la table `rubrics`
// --

// INSERT INTO `rubrics` (`id`, `title`, `fulldescription`, `infobulb`, `legend`, `picture`) VALUES
// (1, 'Accueil', 'Description de la rubrique Accueil', 'Info bulb pour la rubrique Accueil', 'Légende', 'chemin/vers/image-accueil.png'),
// (2, 'À propos', 'La Petite Ébénisterie en Herbe naît en Ardèche en 2021 dans le petit village de Chirols. Elle crée et fabrique pour vous un mobilier contemporain respectueux de l’environnement. Sa raison d’être, la passion du bois, laquelle fait sa noblesse. Elle se nourrit du patrimoine technique de l’ébénisterie traditionnelle comme du génie de ses acteurs. Ses créations se veulent pratiques, fonctionnelles, ergonomiques, confortables, modulables et bien évidemment belles, harmonieuses et esthétiques. La Petite Ébénisterie en Herbe crée et fabrique des séries limitées et des pièces uniques. Elle crée également des objets de décoration intérieure (lampes, tableaux,...) ainsi que des bijoux (pendentifs, boucles d\'oreilles,...).', 'Info bulb pour la rubrique A propos', 'Rencontres en Ardèche...', 'chirols001.jpg'),
// (3, 'Nos Valeurs', 'La fabrication est locale et s’effectue au sein de l’atelier de Chirols. Les matériaux sont tous issus d’Ardèche et plus largement de la région Auvergne-Rhône-Alpes, tout comme les contributeurs fournisseurs et collaborateurs. La préservation de l’environnement constitue la pierre angulaire de l’activité de la Petite Ébénisterie en Herbe qui ne recourt qu’à des colles, vernis et résines à faible impact environnemental, tant en matière d’utilisation que de fabrication. Les mobiliers et les objets créés sont pérennes, de haute qualité, élaborés pour être durables et intemporels. Les pertes de matériaux, chutes, copeaux et sciures sont recyclées selon une logique de développement durable ou affectées à d\'autres projets. Les circuits courts sont privilégiés tant en matière d’achats que de ventes.', 'Info bulb pour la rubrique Valeurs', 'Nature et Harmonie...', 'valeurs01.jpg'),
// (4, 'Nos Créations', 'La Petite Ébénisterie en Herbe crée et fabrique des séries limitées et des pièces uniques. Elle crée également des objets de décoration intérieure (lampes, tableaux,...) ainsi que des bijoux (pendentifs, boucles d\'oreilles,...).<br>\r\nLes mobiliers et les objets créés sont pérennes, de haute qualité, élaborés pour être durables et intemporels.', 'Info bulb pour la rubrique Créations', 'Découvrez nos Créations originales et réalisées à la main...', 'Boite_feuille_0021.jpg'),
// (5, 'Nous Contacter', 'À la Petite Ébénisterie en Herbe, nous croyons fermement en la création de pièces uniques et durables, fabriquées avec passion et respect de l\'environnement. Si vous partagez notre passion pour les meubles artisanaux de qualité et l\'engagement envers la préservation de notre planète, nous sommes ravis de vous accueillir et de vous offrir toutes les informations nécessaires pour entrer en contact avec notre entreprise de menuiserie artisanale écoresponsable...', 'Info bulb pour la rubrique Contacts', 'Pour prendre contact...', 'contact_main.jpg');

// -- --------------------------------------------------------

// --
// -- Structure de la table `sections`
// --

// DROP TABLE IF EXISTS `sections`;
// CREATE TABLE IF NOT EXISTS `sections` (
//   `id` int NOT NULL AUTO_INCREMENT,
//   `rubric_id` int NOT NULL,
//   `title` varchar(100) NOT NULL,
//   `content` text NOT NULL,
//   `background` int DEFAULT NULL,
//   PRIMARY KEY (`id`)
// ) ENGINE=MyISAM AUTO_INCREMENT=3 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

// --
// -- Déchargement des données de la table `sections`
// --

// INSERT INTO `sections` (`id`, `rubric_id`, `title`, `content`, `background`) VALUES
// (1, 2, 'À propos de la Petite Ébénisterie en Herbe', 'La Petite Ébénisterie en Herbe naît en Ardèche en 2021 dans le petit village de Chirols. Elle crée et fabrique pour vous un mobilier contemporain respectueux de l’environnement.<br>Sa raison d’être : la passion du bois, laquelle fait sa noblesse. Elle se nourrit du patrimoine technique de l’ébénisterie traditionnelle comme du génie de ses acteurs.<br>Ses créations se veulent pratiques, fonctionnelles, ergonomiques, confortables, modulables et bien évidemment belles, harmonieuses et esthétiques.<br>La Petite Ébénisterie en Herbe crée et fabrique des séries limitées et des pièces uniques. Elle crée également des objets de décoration intérieure (lampes, tableaux...) ainsi que des bijoux (pendentifs, boucles d\'oreilles...).', NULL),
// (2, 3, 'Les Valeurs de la Petite Ébénisterie en Herbe', 'La fabrication est locale et s’effectue au sein de l’atelier de Chirols. Les matériaux sont tous issus d’Ardèche et plus largement de la région Auvergne-Rhône-Alpes, tout comme les contributeurs fournisseurs et collaborateurs.<br>\r\nLa préservation de l’environnement constitue la pierre angulaire de l’activité de la Petite Ébénisterie en Herbe qui ne recourt qu’à des colles, vernis et résines à faible impact environnemental, tant en matière d’utilisation que de fabrication.<br>\r\nLes pertes de matériaux, chutes, copeaux et sciures sont recyclées selon une logique de développement durable ou affectées à d\'autres projets. Les circuits courts sont privilégiés tant en matière d’achats que de ventes.<br>\r\nLes mobiliers et les objets créés sont pérennes, de haute qualité, élaborés pour être durables et intemporels.', NULL);

// -- --------------------------------------------------------

// --
// -- Structure de la table `site`
// --

// DROP TABLE IF EXISTS `site`;
// CREATE TABLE IF NOT EXISTS `site` (
//   `id` int NOT NULL AUTO_INCREMENT,
//   `title` varchar(100) NOT NULL,
//   `owner` varchar(50) NOT NULL,
//   `creation` timestamp NULL DEFAULT CURRENT_TIMESTAMP,
//   `admin` varchar(50) NOT NULL,
//   `admin_mail` varchar(100) NOT NULL,
//   `meta_viewport` varchar(50) DEFAULT NULL,
//   `meta_description` varchar(150) DEFAULT NULL,
//   `meta_keywords` varchar(255) DEFAULT NULL,
//   `meta_author` varchar(100) DEFAULT NULL,
//   `icon` varchar(255) DEFAULT NULL,
//   `address1` varchar(100) NOT NULL,
//   `address2` varchar(100) DEFAULT NULL,
//   `postal` varchar(5) NOT NULL,
//   `city` varchar(50) NOT NULL,
//   `url` varchar(255) NOT NULL,
//   `picture` varchar(255) NOT NULL,
//   PRIMARY KEY (`id`)
// ) ENGINE=MyISAM AUTO_INCREMENT=2 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

// --
// -- Déchargement des données de la table `site`
// --

// INSERT INTO `site` (`id`, `title`, `owner`, `creation`, `admin`, `admin_mail`, `meta_viewport`, `meta_description`, `meta_keywords`, `meta_author`, `icon`, `address1`, `address2`, `postal`, `city`, `url`, `picture`) VALUES
// (1, 'La Petite Ébénisterie en Herbe', 'Floriane TARDY', '2023-06-02 09:40:56', 'Frédéric DANIAU', 'ilric6666', 'width=device-width, initial-scale=1.0', 'PME basée en Ardèche, spécialisée dans la conception et la fabrication artisanale d\'objets en bois', 'ébénisterie, menuiserie, décoration, bijoux, création, fabrication, design, fait-main, local, artisanat, écologie, nature, naturels, éthique, éco-responsable, qualité, biodégradable, recyclable, éco-friendly, durable, respect, respectueux, équitable', 'Frédéric DANIAU', 'chemin/vers/icone.png', '27, chemin qui chemine', NULL, '42589', 'TinTam-sur-Lot', '', '');

// -- --------------------------------------------------------

// --
// -- Structure de la table `socials`
// --

// DROP TABLE IF EXISTS `socials`;
// CREATE TABLE IF NOT EXISTS `socials` (
//   `id` int NOT NULL AUTO_INCREMENT,
//   `username` varchar(80) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci DEFAULT NULL,
//   `network` varchar(50) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci NOT NULL,
//   `url` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci DEFAULT NULL,
//   `icon` varchar(50) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci NOT NULL,
//   `social_order` int DEFAULT NULL,
//   PRIMARY KEY (`id`)
// ) ENGINE=MyISAM AUTO_INCREMENT=8 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

// --
// -- Déchargement des données de la table `socials`
// --

// INSERT INTO `socials` (`id`, `username`, `network`, `url`, `icon`, `social_order`) VALUES
// (1, NULL, 'Téléphone', '06.06.06.06.06', 'fa-solid fa-phone', 1),
// (2, NULL, 'Email', 'gnagnagnipouf@gmail.com', 'fa-solid fa-envelope', 2),
// (3, 'gnagnagnipouf', 'Facebook', 'https://www.facebook.com/gnagnagnipouf', 'fa-brands fa-facebook', 3),
// (4, 'gnagnagnipouf', 'LinkedIn', 'https://www.linkedin.com/gnagnagnipouf', 'fa-brands fa-linkedin', 4),
// (5, 'gnagnagnipouf', 'Instagram', 'https://www.instagram.com/gnagnagnipouf', 'fa-brands fa-instagram', 5),
// (6, 'gnagnagnipouf', 'Twitter', 'https://www.twitter.com/gnagnagnipouf', 'fa-brands fa-twitter', 6),
// (7, 'gnagnagnipouf', 'YouTube', 'https://www.youtube.com/gnagnagnipouf', 'fa-brands fa-youtube', 7);

// -- --------------------------------------------------------

// --
// -- Structure de la table `sort_of_creation`
// --

// DROP TABLE IF EXISTS `sort_of_creation`;
// CREATE TABLE IF NOT EXISTS `sort_of_creation` (
//   `id` int NOT NULL AUTO_INCREMENT,
//   `name` varchar(255) NOT NULL,
//   `typecreation` int NOT NULL,
//   `ticker` varchar(20) NOT NULL,
//   PRIMARY KEY (`id`)
// ) ENGINE=MyISAM AUTO_INCREMENT=6 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

// --
// -- Déchargement des données de la table `sort_of_creation`
// --

// INSERT INTO `sort_of_creation` (`id`, `name`, `typecreation`, `ticker`) VALUES
// (1, 'Chaise', 1, 'chair'),
// (2, 'Table', 1, 'table'),
// (3, 'Étagère', 1, 'stage'),
// (4, 'Boîte', 3, 'box'),
// (5, 'Boucle d\'oreilles', 2, 'earpend');

// -- --------------------------------------------------------

// --
// -- Structure de la table `typecreation`
// --

// DROP TABLE IF EXISTS `typecreation`;
// CREATE TABLE IF NOT EXISTS `typecreation` (
//   `tp_id` int NOT NULL AUTO_INCREMENT,
//   `tp_name` varchar(50) NOT NULL,
//   `tp_picture` varchar(255) DEFAULT NULL,
//   `tp_legend` varchar(150) DEFAULT NULL,
//   `tp_description` text,
//   `tp_ticker` varchar(20) NOT NULL,
//   PRIMARY KEY (`tp_id`)
// ) ENGINE=MyISAM AUTO_INCREMENT=4 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

// --
// -- Déchargement des données de la table `typecreation`
// --

// INSERT INTO `typecreation` (`tp_id`, `tp_name`, `tp_picture`, `tp_legend`, `tp_description`, `tp_ticker`) VALUES
// (1, 'Mobilier', NULL, NULL, NULL, 'mobilier'),
// (2, 'Bijoux', NULL, NULL, NULL, 'bijoux'),
// (3, 'Décoration', NULL, NULL, NULL, 'deco');
// COMMIT;

// /*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
// /*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
// /*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;



/*** *** *** *** *** *** *** FONCTIONS *** *** *** *** *** *** ***/
// Function to execute a request
//  Parameters  :
//      strRequest      : request to execute
//  Return value    : link object
function fct_RequestExec($strRequest){
    $mysqli = new mysqli(DB_SERVER, DB_USERNAME, DB_PASSWORD, DB_NAME);
    if ($mysqli->connect_errno){
        echo "Echec lors de la connexion à MySQL : (" . $mysqli->connect_errno . ") " . $mysqli->connect_error;
    }else{
        $mysqli->query("SET NAMES 'utf8'");
        $resLink = $mysqli->query($strRequest);
        return $resLink;
    }
}
// Function to select all records from the 'site' table
//  Parameters  : none
//  Return value    : array
function fct_SelectSite(){
    $strRequest = "SELECT * FROM `site`;";
    $resLink = fct_RequestExec($strRequest);
    $resLink->data_seek(0);
    $row = $resLink->fetch_row();
    $arrReturn['Id'] = $row['0'];
    $arrReturn['Title'] = $row['1'];
    $arrReturn['Owner'] = $row['2'];
    $arrReturn['Creation'] = $row['3'];
    $arrReturn['Admin'] = $row['4'];
    $arrReturn['AdminMail'] = $row['5'];
    $arrReturn['MetaViewport'] = $row['6'];
    $arrReturn['MetaDescription'] = $row['7'];
    $arrReturn['MetaKeywords'] = $row['8'];
    $arrReturn['MetaAuthor'] = $row['9'];
    $arrReturn['Icon'] = $row['10'];
    $arrReturn['Address1'] = $row['11'];
    $arrReturn['Address2'] = $row['12'];
    $arrReturn['Postal'] = $row['13'];
    $arrReturn['City'] = $row['14'];
    $arrReturn['Url'] = $row['15'];
    $arrReturn['Picture'] = $row['16'];
    return $arrReturn;
}

// Function to select one page from the 'pages' table
//  Parameters  :
//      strFilename     : filename of the page to select
//  Return value    : array
function fct_SelectPage($strFileName){
    $strRequest = "SELECT * FROM `pages` WHERE `filename` = '" . $strFileName . "';";
    $resLink = fct_RequestExec($strRequest);
    $resLink->data_seek(0);
    $row = $resLink->fetch_row();
    $arrReturn['Id'] = $row['0'];
    $arrReturn['Filename'] = $row['1'];
    $arrReturn['Url'] = $row['2'];
    $arrReturn['Css'] = $row['3'];
    $arrReturn['Background'] = $row['4'];
    $arrReturn['RubricId'] = $row['5'];
    $arrReturn['RubricOrder'] = $row['6'];
    $arrReturn['Title'] = $row['7'];
    $arrReturn['Introduction'] = $row['8'];
    $arrReturn['Content1'] = $row['9'];
    $arrReturn['Content2'] = $row['10'];
    $arrReturn['Content3'] = $row['11'];
    $arrReturn['Content4'] = $row['12'];
    $arrReturn['Content5'] = $row['13'];
    return $arrReturn;
}

// Function to select all pages from the 'pages' table
//  Parameters  : none
//  Return value    : array
function fct_SelectAllPages(){
    $strRequest = "SELECT * FROM `pages` ORDER BY `rubric_order`;";
    $resLink = fct_RequestExec($strRequest);
    $arrReturn = array();
    $intIndex = 0;
    while ($row = $resLink->fetch_row()){
        $arrReturn[$intIndex]['Id'] = $row['0'];
        $arrReturn[$intIndex]['Filename'] = $row['1'];
        $arrReturn[$intIndex]['Url'] = $row['2'];
        $arrReturn[$intIndex]['Css'] = $row['3'];
        $arrReturn[$intIndex]['Background'] = $row['4'];
        $arrReturn[$intIndex]['RubricId'] = $row['5'];
        $arrReturn[$intIndex]['RubricOrder'] = $row['6'];
        $arrReturn[$intIndex]['Title'] = $row['7'];
        $arrReturn[$intIndex]['Introduction'] = $row['8'];
        $arrReturn[$intIndex]['Content1'] = $row['9'];
        $arrReturn[$intIndex]['Content2'] = $row['10'];
        $arrReturn[$intIndex]['Content3'] = $row['11'];
        $arrReturn[$intIndex]['Content4'] = $row['12'];
        $arrReturn[$intIndex]['Content5'] = $row['13'];
        $intIndex++;
    }
    return $arrReturn;
}
// Function to select all rubrics from the 'rubrics' table
//  Parameters  : none
//  Return value    : array
function fct_SelectAllRubrics(){
    $strRequest = "SELECT * FROM `rubrics`;";
    $resLink = fct_RequestExec($strRequest);
    $arrReturn = array();
    $intIndex = 0;
    while ($row = $resLink->fetch_row()){
        $arrReturn[$intIndex]['Id'] = $row['0'];
        $arrReturn[$intIndex]['Title'] = $row['1'];
        $arrReturn[$intIndex]['FullDescription'] = $row['2'];
        $arrReturn[$intIndex]['InfoBulb'] = $row['3'];
        $arrReturn[$intIndex]['Legend'] = $row['4'];
        $arrReturn[$intIndex]['Picture'] = $row['5'];
        $intIndex++;
    }
    return $arrReturn;
}
// Function to select one rubric from the 'rubrics' table by rubric_id
//  Parameters  :
//      intRubricId     : rubric_id of the rubric to select
//  Return value        : array
function fct_SelectRubricById($intRubricId){
    $strRequest = "SELECT * FROM `rubrics` WHERE `id` = " . $intRubricId . ";";
    $resLink = fct_RequestExec($strRequest);
    $resLink->data_seek(0);
    $row = $resLink->fetch_row();
    $arrReturn['Id'] = $row['0'];
    $arrReturn['Title'] = $row['1'];
    $arrReturn['FullDescription'] = $row['2'];
    $arrReturn['InfoBulb'] = $row['3'];
    $arrReturn['Legend'] = $row['4'];
    $arrReturn['Picture'] = $row['5'];
    return $arrReturn;
}
// Function to select all sections from the 'sections' table by rubric_id
//  Parameters  :
//      intRubricId     : rubric_id of the sections to select
//  Return value        : array
function fct_SelectSectionsByRubricId($intRubricId){
    $strRequest = "SELECT * FROM `sections` WHERE `rubric_id` = " . $intRubricId . ";";
    $resLink = fct_RequestExec($strRequest);
    $arrReturn = array();
    $intIndex = 0;
    while ($row = $resLink->fetch_row()){
        $arrReturn[$intIndex]['Id'] = $row['0'];
        $arrReturn[$intIndex]['RubricId'] = $row['1'];
        $arrReturn[$intIndex]['Title'] = $row['2'];
        $arrReturn[$intIndex]['Content'] = $row['3'];
        $arrReturn[$intIndex]['Background'] = $row['4'];
        $intIndex++;
    }
    return $arrReturn;
}
// Function to select all contacts from the 'socials' table ordered by social_order
//  Parameters  : none
//  Return value    : array
function fct_SelectContacts(){
    $strRequest = "SELECT * FROM `socials` ORDER BY `social_order`;";
    $resLink = fct_RequestExec($strRequest);
    $resLink->data_seek(0);
    $intIndex = 0;
    while ($row = $resLink->fetch_row()){
        $arrReturn[$intIndex]['Id'] = $row['0'];
        $arrReturn[$intIndex]['Username'] = $row['1'];
        $arrReturn[$intIndex]['Network'] = $row['2'];
        $arrReturn[$intIndex]['Url'] = $row['3'];
        $arrReturn[$intIndex]['Icon'] = $row['4'];
        $arrReturn[$intIndex]['SocialOrder'] = $row['5'];
        $intIndex++;
    }
    return $arrReturn;
}
// Function to select all types of creation from the 'typecreation' table
//  Parameters  : none
//  Return value    : array
function fct_SelectAllTypesCreation(){
    $strRequest = "SELECT * FROM `typecreation`;";
    $resLink = fct_RequestExec($strRequest);
    $arrReturn = array();
    $intIndex = 0;
    while ($row = $resLink->fetch_row()){
        $arrReturn[$intIndex]['Id'] = $row['0'];
        $arrReturn[$intIndex]['Name'] = $row['1'];
        $arrReturn[$intIndex]['Picture'] = $row['2'];
        $arrReturn[$intIndex]['Legend'] = $row['3'];
        $arrReturn[$intIndex]['Description'] = $row['4'];
        $arrReturn[$intIndex]['Ticker'] = $row['5'];
        $arrReturn[$intIndex]['Icon'] = $row['6'];
        $intIndex++;
    }
    return $arrReturn;
}
// Function to select all sorts of creation from the 'sort_of_creation' table
//  Parameters  : none
//  Return value    : array
function fct_SelectAllSortsCreation(){
    $strRequest = "SELECT * FROM `sort_of_creation` ORDER BY `typecreation`;";
    $resLink = fct_RequestExec($strRequest);
    $arrReturn = array();
    $intIndex = 0;
    while ($row = $resLink->fetch_row()){
        $arrReturn[$intIndex]['Id'] = $row['0'];
        $arrReturn[$intIndex]['Name'] = $row['1'];
        $arrReturn[$intIndex]['TypeCreation'] = $row['2'];
        $arrReturn[$intIndex]['Ticker'] = $row['3'];
        $intIndex++;
    }
    return $arrReturn;
}
// Function to select all creations from the 'creations' table ordered by type_creation, sortof and display_order
function fct_SelectAllCreationsOrderByTypeAndSort(){
    $strRequest = "SELECT * FROM `creations` ORDER BY `type_creation`, `sortof`, `display_order`;";
    $resLink = fct_RequestExec($strRequest);
    $arrReturn = array();
    $intIndex = 0;
    while ($row = $resLink->fetch_row()){
        $arrReturn[$intIndex]['Id'] = $row['0'];
        $arrReturn[$intIndex]['Name'] = $row['1'];
        $arrReturn[$intIndex]['DisplayOrder'] = $row['2'];
        $arrReturn[$intIndex]['TypeCreation'] = $row['3'];
        $arrReturn[$intIndex]['SortOf'] = $row['4'];
        $arrReturn[$intIndex]['MainPicture'] = $row['5'];
        $arrReturn[$intIndex]['Diaporama'] = $row['6'];
        $intIndex++;
    }
    return $arrReturn;
}