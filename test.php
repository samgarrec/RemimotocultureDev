<?php
spl_autoload_register(function ($class) {  // chargement des classe à la volée

    require 'classes/' . $class . '.php';
});
$pm= new ProduitManager();

$produit1= new Produit();

try{



$produit1->setNom('Tracteur tondeuse MaxiKing');
$produit1->setDexcription('Pour les grands espaces');
$produit1->setImagepath('../images/tondeuse.jpg');
}catch (Exception $e){
    echo'erreur dans l\'hydratation';
    $e->getMessage();
}
try {


    $pm->add($produit1);

}catch (PDOException $e){


    $e->getMessage();
}



