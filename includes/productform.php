

<?php include_once ('includes/header.html') ;





?>


    <div class="bloc_form">
<form action="traitement.php" method="post" enctype="multipart/form-data">
    <label for="nom">Nom de l'article</label>

    <input type="text" name="nom" placeholder="nom"/>
    <input type="text" name="description" placeholder="description" />
    <input type="file" name="image"/>

    <input type="submit" value="envoyer" name="submit">
</form>
   </div>

