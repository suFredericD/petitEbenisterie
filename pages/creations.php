<?php
// =====================================================================================================
// Project      : La Petite Ébénisterie en Herbe
// Context      : showcase website of a starting business in Ardèche, France,
//                specializing in the design & manufacturing of wooden furnitures & objects
// File         : creations.php
// Role         : creations presentation page of the website
// Author       : Frédéric DANIAU
// Creation     : 2023-06-03
// Last update  : 2021-06-06
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
// Table    : creations types
$tabCreationsTypes = fct_SelectAllTypesCreation();
// Table    : sort of creations
$tabCreationsSorts = fct_SelectAllSortsCreation();
// Table    : creations
$tabCreations = fct_SelectAllCreationsOrderByTypeAndSort();
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
    <link rel="stylesheet" href="../config/css/creations.css" media="all">
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
<!-- -- -- -- -- -- -- -- MININAV -- -- -- -- -- -- -- -- -->
    <nav id="creationstypes-mini-nav">
<?php   $strClassBase = 'creationstype-mini-nav-item';
        for($i = 0; $i < count($tabCreationsTypes); $i++) {
                if($i == 0) {
                    $strClass = $strClassBase . ' ' . "menu-item-first";
                } elseif ($i == count($tabCreationsTypes) - 1) {
                    $strClass = $strClassBase . ' ' . "menu-item-last";
                } else {
                    $strClass = $strClassBase . ' ' . "menu-item-middles";
                }  ?>
            <div class="<?php echo $strClass;?>">
                <a href="creations.php#<?php echo $tabCreationsTypes[$i]['Ticker'];?>">
                    <span class="<?php echo $tabCreationsTypes[$i]['Icon'];?>"></span><?php echo $tabCreationsTypes[$i]['Name'];?></a>
            </div>
<?php   } ?>
    </nav>
<!-- -- -- -- -- -- -- -- CONTENT -- -- -- -- -- -- -- -- -->
    <div id="creations-main">
<?php   foreach($tabCreationsTypes as $tabCreationType) { ?>
        <div class="creations-type" id="<?php echo $tabCreationType['Ticker'];?>">
            <h2><span class="<?php echo $tabCreationType['Icon'];?>"></span><?php echo $tabCreationType['Name'];?></h2>
            <div class="creations-type-content">
<?php       foreach($tabCreations as $tabCreation) {
                if($tabCreation['TypeCreation'] == $tabCreationType['Id']){ ?>
                <div class="creation-item">
                    <figure><img src="../media/pictures/<?php echo $tabCreation['MainPicture'];?>" alt="<?php echo $tabCreation['Name'];?>" aria-label="Picture of <?php echo $tabCreation['Name'];?>">
                        <figcaption><?php echo $tabCreation['Name'];?></figcaption>
                    </figure>
                    <div class="creation-description">
                        <?php echo $tabCreation['Name'];?>
                    </div>
                </div>
<?php           }
            } ?>
            </div>
        </div>
<?php   } ?>
    </div>
<!-- -- -- -- -- -- -- -- JAVASCRIPT -- -- -- -- -- -- -- -- -->
    <script src="../scripts/js/main.js"></script>
    <script src="https://kit.fontawesome.com/91b2ef136e.js" crossorigin="anonymous"></script>
    <script src="../scripts/js/main.js"></script>
</body>
</html>
```