<?php
// =====================================================================================================
// Project      : La Petite Ébénisterie en Herbe
// Context      : showcase website of a starting business in Ardèche, France,
//                specializing in the design & manufacturing of wooden furnitures & objects
// File         : contacts.php
// Role         : contacts page of the website
// Author       : Frédéric DANIAU
// Creation     : 2023-06-03
// Last update  : 2021-06-04
// =====================================================================================================
// Include the database configuration file
require('..\admin\dbConfig.php');
// Include the database request builder file
require('..\admin\dbRequestBuilder.php');
// Include the display elements builder file
require('..\scripts\menuBuilder.php');


// String   : script name
$strScriptName = basename($_SERVER['PHP_SELF']);
// Table    : site informations
$tabSiteInfos = fct_SelectSite();
// Table    : page informations
$tabPageInfos = fct_SelectPage($strScriptName);
// Table    : contacts informations
$tabContactsInfos = fct_SelectContacts();
?>
<!-- --- --- --- --- --- LA PETITE HEBENISTERIE EN HERBE --- --- --- --- -->
<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <title><?php echo $tabSiteInfos['Title'];?></title>
    <meta name="description" content="<?php echo $tabSiteInfos['MetaDescription'];?>">
    <meta name="keywords" content="<?php echo $tabSiteInfos['MetaKeywords'];?>">
    <meta name="author" content="<?php echo $tabSiteInfos['MetaAuthor'];?>">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="robots" content="index,follow">
    <meta property="og:title" content="<?php echo $tabSiteInfos['Title'];?>">
    <meta property="og:description" content="<?php echo $tabSiteInfos['MetaDescription'];?>">
    <meta property="og:url" content="<?php echo $tabSiteInfos['MetaDescription'];?>">
    <meta property="og:image" content="<?php echo $tabSiteInfos['Url'];?>">
    <meta name="viewport" content="<?php echo $tabSiteInfos['MetaViewport'];?>">
    <favicon href="http://petiteben/media/logos/logo2.png" />
    <!-- Google fonts -->
    <link href="https://fonts.googleapis.com/css?family=Alexandria|Beth+Ellen|Bevan|Crafty+Girls|Finger+Paint|Ubuntu" rel="stylesheet">
    <!-- Attached CSS file -->
    <link rel="stylesheet" href="../config/css/main.css" media="all">
    <link rel="stylesheet" href="../config/css/contacts.css" media="all">
</head>
<!-- -- -- -- -- -- -- -- PAGE CONTENT -- -- -- -- -- -- -- -- -->
<body>
    <div class="container">
        <div id="header">
            <img src="../media/logos/logo2.png" alt="logo" id="logo" aria-label="logo">
            <div class="header-content">
                <h1>La Petite Ébénisterie<br>en Herbe<h1>
                <p>Création & Fabrication</p>
                <p>Mobilier - Bijoux - Décoration</p>
            </div>
        </div>
    </div>
<!-- -- -- -- -- -- -- -- NAVIGATION -- -- -- -- -- -- -- -- -->
<?php fct_BuildMenu($strScriptName); ?>
<!-- -- -- -- -- -- -- -- CONTENT -- -- -- -- -- -- -- -- -->
    <div id="contacts-main">
<?php   for($i=0; $i<count($tabContactsInfos); $i++){
            $strIconClasse = $tabContactsInfos[$i]['Icon'];
?>
        <div class="contacts-item">
            <div class="social-icon"><span class="<?php echo $strIconClasse;?>"></span></div>
            <div class="social-name"><?php echo $tabContactsInfos[$i]['Network'];?></div>
<?php       if($tabContactsInfos[$i]['Network'] == 'Téléphone'){
?>
            <div class="social-phone" title="French number, for international calls please dial remplacing the '0' starting the phone number by '+33'."><?php echo $tabContactsInfos[$i]['Url'];?></div>
<?php       } elseif($tabContactsInfos[$i]['Network'] == 'Email'){ ?>
            <div class="social-mail">
                <a href="mailto:<?php echo $tabContactsInfos[$i]['Url'];?>" title="Envoyer un email à la Petite Ébénisterie en Herbe...">petitebenisterie@gmail.com</a>
            </div>
<?php       } else { ?>
            
<?php       } ?>

        </div>
<?php
}?>
<!-- -- -- -- -- -- -- -- JAVASCRIPT -- -- -- -- -- -- -- -- -->
    <script src="../scripts/js/main.js"></script>
    <script src="https://kit.fontawesome.com/91b2ef136e.js" crossorigin="anonymous"></script>
</body>
</html>
```