<?php
spl_autoload_register(function ($class) {  // chargement des classe à la volée

    require 'classes/' . $class . '.php';
});
$pm = new ProduitManager();
$nom="";
if (isset($_GET['action'])) {

$produitaEditer=$pm->get($_GET['identifiant']);

$nom=$produitaEditer->getNom();
$idprod=$produitaEditer->getId();

$description=$produitaEditer->getDexcription();
}


if (isset($_GET['idd'])){




    $pm->remove($_GET['idd']);

}



$listeProduits=$pm->getall();
if ($listeProduits!=null) {
    foreach ($listeProduits as $prod => $value) {
        if ($value[0] != null) {
            print '<div class="ligne_index"><p  style="color:white;text-align: center;"> ID : ' . $value[0] . '-----   Nom :   ' . $value[1] . ' ----- Desc:   ' . $value[2] . '</p>';
            print '<img  class="img_index" src="assets/images/' . $value[3] . '"/>';
            print' <form style="display: inline-block;" class="btn btn-danger formdelete" method="get" action="test2.php" onsubmit="return confirm(\'hello\');">';
            print' <input type="hidden" name="idd" value="' . $value[0] . '">';
            print  '<input  value="supprimer" type="submit" class="btn btn-danger">

</form>

            <a type="submit"  class="btn btn-success" href="test2.php?action=edit&identifiant='.$value[0].'">Editer</a>


</div>';


        }
    }
}


?>