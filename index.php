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

// Table : site informations
$tabSiteInfos = fct_SelectSite();
?>
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
    <meta name="viewport" content="<?php echo $tabSiteInfos['Picture'];?>">
    
    <link rel="stylesheet" href="config/css/main.css" media="all">

</head>
<body>
    <div class="container">
        <div class="row">
            <div class="col-12">
                <h1><?php echo $tabSiteInfos['Title'];?></h1>
                
            </div>
        </div>
    </div>
    
    <script src="scripts/js/main.js"></script>
</body>
</html>
```
