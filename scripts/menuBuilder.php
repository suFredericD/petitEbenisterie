<?php
// =====================================================================================================
// Project      : La Petite Ébénisterie en Herbe
// Context      : showcase website of a starting business in Ardèche, France,
//                specializing in the design & manufacturing of wooden furnitures & objects
// File         : menuBuilder.php
// Role         : menu builder script
// Author       : Frédéric DANIAU
// Creation     : 2021-06-03
// Last update  : 2021-06-03
// =====================================================================================================

// Fonction    : fct_BuildMenu
// Description : build the menu
// Arguments   :
//               $strScriptName : script name
function fct_BuildMenu($strScriptName){
    $tabPages = fct_SelectAllPages();
    if($strScriptName == "index.php"){
        $strPath = "pages/";
    } else {
        $strPath = "../pages/";
    }
?>
    <nav id="menubar" role="navigation">
<?php
    for($i = 0; $i < count($tabPages); $i++){
        if($i == 0) {
            $strClasse = "menu-item-first";
        } elseif($i == count($tabPages) - 1) {
            $strClasse = "menu-item_last";
        } else {
            $strClasse = "menu-item-middles";
        }
        if($i == 0){
            if($strScriptName == "index.php"){ ?>
        <a class="menu-item <?php echo $strClasse;?>" href="<?php echo $tabPages[$i]['Filename'] ?>"><?php echo "Accueil";?></a>
<?php
            } else { ?>
        <a class="menu-item <?php echo $strClasse;?>" href="<?php echo "../" . $tabPages[$i]['Filename'] ?>"><?php echo "Accueil";?></a>
        <?php
            }
        } else { ?>
        <a class="menu-item <?php echo $strClasse;?>" href="<?php echo $strPath . $tabPages[$i]['Filename'] ?>"><?php echo $tabPages[$i]['Title'];?></a>
<?php
        }
    } ?>
    </nav>

<?php
}