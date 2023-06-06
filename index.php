<?php
// =====================================================================================================
// Project      : La Petite Ébénisterie en Herbe
// Context      : showcase website of a starting business in Ardèche, France,
//                specializing in the design & manufacturing of wooden furnitures & objects
// File         : index.php
// Role         : home page of the website
// Author       : Frédéric DANIAU
// Creation     : 2023-06-02
// Last update  : 2021-06-03
// =====================================================================================================
// Include the database configuration file
require('admin\dbConfig.php');
// Include the database request builder file
require('admin\dbRequestBuilder.php');
// Include the display elements builder file
require('scripts\menuBuilder.php');


// String   : script name
$strScriptName = basename($_SERVER['PHP_SELF']);
// Table    : site informations
$tabSiteInfos = fct_SelectSite();
// Table    : page informations
$tabPageInfos = fct_SelectPage($strScriptName);
// Table    : pages informations
$tabPages = fct_SelectAllPages();
// Table    : rubrics informations
$tabRubricsInfos = fct_SelectAllRubrics();
?>
<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <title><?php echo $tabSiteInfos['Title'];?></title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="<?php echo $tabSiteInfos['MetaDescription'];?>">
    <meta name="keywords" content="<?php echo $tabSiteInfos['MetaKeywords'];?>">
    <meta name="author" content="<?php echo $tabSiteInfos['MetaAuthor'];?>">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="robots" content="index,follow">
    <meta property="og:title" content="<?php echo $tabSiteInfos['Title'];?>">
    <meta property="og:description" content="<?php echo $tabSiteInfos['MetaDescription'];?>">
    <meta property="og:url" content="<?php echo $tabSiteInfos['MetaDescription'];?>">
    <meta property="og:image" content="<?php echo $tabSiteInfos['Url'];?>">

    <favicon href="media/logos/logo2.png" />
    <!-- Google fonts -->
    <link href="https://fonts.googleapis.com/css?family=Alexandria|Beth+Ellen|Bevan|Crafty+Girls|Finger+Paint|Ubuntu" rel="stylesheet">
    <!-- Attached CSS file -->
    <link rel="stylesheet" href="config/css/<?php echo $tabPageInfos['Css'];?>" media="all">
</head>
<!-- -- -- -- -- -- -- -- PAGE CONTENT -- -- -- -- -- -- -- -- -->
<body>
    <div class="container">
        <div id="header">
            <img src="media/logos/logo2.png" alt="logo" id="logo" aria-label="logo">
            <div class="header-content">
                <h1>La Petite Ébénisterie<br>en Herbe<h1>
                <p>Création & Fabrication</p>
                <p>Mobilier - Bijoux - Décoration</p>
            </div>
        </div>
<!-- -- -- -- -- -- -- -- NAVIGATION -- -- -- -- -- -- -- -- -->
<?php fct_BuildMenu($strScriptName); ?>
<!-- -- -- -- -- -- -- -- CONTENT -- -- -- -- -- -- -- -- -->
    <div class="index-rubrics">
        <div id="home-header">
            <span class="fa-regular fa-hand-point-down"></span>
            <h1>Visitez la Petite Ébénisterie en Herbe</h1>
            <span class="fa-regular fa-hand-point-down"></span>
        </div>
<?php
    for($i=1; $i<=count($tabRubricsInfos)-1; $i++){
        $strPicture = "media/pictures/rubrics/" . $tabRubricsInfos[$i]['Picture'];
        $strRplace = $tabRubricsInfos[$i]['Title'] . " rubric illustrating picture";
        $strUrl = "pages/" . $tabPages[$i]['Filename'];
        $strTitleUrl = "Consulter la page '" . $tabPages[$i]['Title'] ."'...";
?>
        <div class="rubrics-item">
            <a class="home-rubric-title" href="<?php echo $strUrl;?>" title="<?php echo $strTitleUrl;?>">
                <h2><?php echo $tabRubricsInfos[$i]['Title'];?></h2>
            </a>
            <div class="rubrics-item-container">
                <div class="rubric-img-container">
                    <a class="home-rubric-img-link" href="<?php echo $strUrl;?>" title="<?php echo $strTitleUrl;?>">
                        <img class="rubrics-img-main" src="<?php echo $strPicture;?>" alt="<?php echo $strRplace;?>" aria-label="<?php echo $strRplace;?>"></a>
                    <?php echo $tabRubricsInfos[$i]['Legend'];?>
                </div>
                <div class="index-rubric-description">
                    <p><?php echo $tabRubricsInfos[$i]['FullDescription'];?></p>
                </div>
            </div>

        </div>
<?php
    }

?>
    </div>
    </div>
<!-- -- -- -- -- -- -- -- JAVASCRIPT -- -- -- -- -- -- -- -- -->
    <script src="scripts/js/main.js"></script>
    <script src="https://kit.fontawesome.com/91b2ef136e.js" crossorigin="anonymous"></script>
</body>
</html>
```