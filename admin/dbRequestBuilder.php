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
// ) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

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
//   `picture` varchar(255) NOT NULL,
//   PRIMARY KEY (`id`)
// ) ENGINE=MyISAM AUTO_INCREMENT=6 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

// --
// -- Déchargement des données de la table `rubrics`
// --

// INSERT INTO `rubrics` (`id`, `title`, `fulldescription`, `infobulb`, `legend`, `picture_url`) VALUES
// (1, 'Accueil', 'Description de la rubrique Accueil', 'Info bulb pour la rubrique Accueil', 'Légende', 'chemin/vers/image-accueil.png'),
// (2, 'A propos', 'Description de la rubrique A propos', 'Info bulb pour la rubrique A propos', 'Légende', 'chemin/vers/image-apropos.png'),
// (3, 'Valeurs', 'Description de la rubrique Valeurs', 'Info bulb pour la rubrique Valeurs', 'Légende', 'chemin/vers/image-valeurs.png'),
// (4, 'Créations', 'Description de la rubrique Créations', 'Info bulb pour la rubrique Créations', 'Légende', 'chemin/vers/image-creations.png'),
// (5, 'Contacts', 'Description de la rubrique Contacts', 'Info bulb pour la rubrique Contacts', 'Légende', 'chemin/vers/image-contacts.png');

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
// ) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

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

// INSERT INTO `site` (`id`, `title`, `owner`, `creation`, `admin`, `admin_mail`, `meta_viewport`, `meta_description`, `meta_keywords`, `meta_author`, `icon`, `address1`, `address2`, `postal`, `city`) VALUES
// (1, 'La Petite Ébénisterie en Herbe', 'Floriane TARDY', '2023-06-02 09:40:56', 'Frédéric DANIAU', 'ilric6666', 'width=device-width, initial-scale=1.0', 'Description du site', 'ébénisterie, menuiserie, décoration, bijoux, création, fabrication, design, fait-main, local, artisanat, écologie, nature, naturels, éthique, éco-responsable, qualité, biodégradable, recyclable, éco-friendly, durable, respect, respectueux, équitable', 'Frédéric DANIAU', 'chemin/vers/icone.png', '27, chemin qui chemine', NULL, '42589', 'TinTam-sur-Lot');

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
// COMMIT;

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