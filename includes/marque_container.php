
<?php
$dirMarques= scandir('assets/images/marques');
$longueur= count($dirMarques);
unset($dirMarques[0]);
unset($dirMarques[1]);


?>






<div class="container_marques" >
<h2>Réparation toutes Marques</h2>


<?php


foreach ($dirMarques as $file){

    print '<a href="#" class="images_marques"><img src="assets/images/marques/'.$file.'" class="img_container_marques"></a>';
}


?>





</div>
