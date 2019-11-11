<div  class="container_produit">
<div class="extratitre"><p>Des machines répondant à vos besoins</p></div>



    <?php

spl_autoload_register(function ($class){

        require 'classes/'.$class.'.php';
    });
    $tabProduits[]=null;
    $pm= new ProduitManager();

    $tabProduits=$pm->getAll();

    if ($tabProduits!=null){
        foreach($tabProduits as $tab){

            if ($tab!=null){

                ?>
                <div class="produitsExtra" style="background-image: url('assets/images/<?= $tab[3]?>')"><h3><?=$tab[1] ?></h3></div>

                <?php
            }
        };
    }
    ?>





<h2>Scarificateur, Tondeuse Mulching, Taille-haie</h2>
<span>Découvrez les produits de qualité sélectionnés
			pour un entretien optimal de votre jardin</span><br> <a href="#" class="button">Nos Produits</a>
</div>