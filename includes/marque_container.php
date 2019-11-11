<?php
$dirMarques = scandir('assets/images/marques');
$longueur = count($dirMarques);
unset($dirMarques[0]);
unset($dirMarques[1]);


?>

<div class="container_main">



<?php include('slide.html'); ?>
<div class="container_marques">
    <h2>Réparation toutes Marques</h2>


    <?php


    foreach ($dirMarques as $file) {

        print '<a href="#" class="images_marques"><img  alt="image_logo_'.$file.'" title="image_'.$file.'" src="assets/images/marques/' . $file . '" class="img_container_marques"></a>';
    }


    ?>


</div>

<img src="assets/images/sep.png" class="sep" />

</div>