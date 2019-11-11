<?php

spl_autoload_register(function ($class) {  // chargement des classe à la volée

    require 'classes/' . $class . '.php';
});

class ProduitManager


{
    private $db;


    public function __construct()
    {
// $this->db = new \PDO('mysql//:visitespxksamuel:Samuel56@visitespxksamuel.mysql.db/visitespxksamuel');
        $this->db = new \PDO('mysql:host=localhost;dbname=remi', 'root', 'root');;
    }

    public function add(Produit $produit) // ajouter un produit à la base

    {


        $nom = $produit->getNom();
        $description = $produit->getDexcription();
        $imagepath = $produit->getImagepath();
        $query = $this->db->prepare("insert into produits (nom,description,imagepath) values (:nom,:description,:imagepath)");
        $query->bindValue(':nom', $nom, PDO::PARAM_STR);
        echo 'oko';
        $query->bindValue(':description', $description, PDO::PARAM_STR);
        $query->bindValue(':imagepath', $imagepath, PDO::PARAM_STR);
        $query->execute();

        echo 'ok';

    }

    public function get($id) //recuperer un article par id

    {
        $query = $this->db->prepare("select * from produits where id = (:id) ");
        $query->bindValue(':id', $id, PDO::PARAM_INT);

        $query->execute();
        $res = $query->fetch();

        $prod = new Produit();
        $prod->setId($res['id']);
        $prod->setNom($res['nom']);
        $prod->setDexcription($res['description']);
        $prod->setImagepath($res['imagepath']);

        return $prod;


    }

    public function getall() // obtenir la liste de tous les articles

    {
        $query = $this->db->prepare("select * from produits ");
        $tab[] = null;
        $query->execute();
        while ($row = $query->fetch()) {


            $tab[] = $row;
        }
        return $tab;
        /*  $prod= new Produit();
          $prod->setId($res['id']);
          $prod->setNom($res['nom']);
          $prod->setDexcription($res['description']);
          $prod->setImagepath($res['imagepath']);

          return $prod;
  */

    }

    public function remove($id)
    {
        try {

            $query = $this->db->exec('delete from produits where id =' . $id . '');
            return true;
        } catch (Exception $e) {

            $e->getMessage();
        }

    }
    public function update(Produit $produit)
    {
        try {

            $query = $this->db->prepare('update  produits (nom, description, imagepath) set (:nom,:description,:imagepath ) where id= :id');
            $query->bindValue(':id',$produit->getId());

            $query->bindValue(':nom',$produit->getNom());
            $query->bindValue(':description',$produit->getDexcription());
            $query->bindValue(':imagepath',$produit->getImagepath());
            $query->execute();





            return true;
        } catch (Exception $e) {

            $e->getMessage();
        }

    }

}