<?php
spl_autoload_register(function ($class) {

    require 'classes/' . $class . '.php';
});

if (isset($_POST['submit'])) {

        $produit= new  Produit();
        if (isset($_FILES['image'])) {

            ini_set('memory_limit', 512000000);
            $dossier = 'assets/images/';
            $photo = basename($_FILES['image']['name']);


            $extensions = array('.png', '.gif', '.jpg', '.jpeg');
            $extension = strrchr($_FILES['image']['name'], '.');

            if (in_array($extension, $extensions)) {

                if (move_uploaded_file($_FILES['image']['tmp_name'], $dossier . $photo)) //Si la fonction renvoie TRUE, c'est que ça a fonctionné...
                {

                    $im = new ImgManager();
                    $im->formatImage($dossier . $photo);
                    $produit->setImagepath($photo);

                } else //Sinon (la fonction renvoie FALSE).
                {
                    echo 'Echec de l\'upload !';
                }
                if (isset($_POST['description'])) {
                    $produit->setDexcription($_POST['description']);
                    echo ' il y a une description c\'est bien';


                }
                if (isset($_POST['nom'])) {
                    $produit->setNom($_POST['nom']);
                }

                $pm = new ProduitManager();

                $pm->add($produit);

                header('Location: index.php');

            }
        }
    }




    /*
    $pm= new  ProduitManager();
    $p= new Produit();
    $p->setNom($_POST['nom']);
    $p->setDexcription($_POST['nom']);

    $p->setImagepath('herbe.jpg');
    $pm->add($p);






    header('location: index.php');
    }

    */


?>