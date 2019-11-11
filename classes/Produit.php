<?php


class Produit
{
private $id;
private $nom;
private $dexcription;
private $imagepath;



    /**
     * @return mixed
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * @param mixed $id
     */
    public function setId($id)
    {
        $this->id = $id;
    }

    /**
     * @return mixed
     */
    public function getNom()
    {
        return $this->nom;
    }

    /**
     * @param mixed $nom
     */
    public function setNom($nom)
    {
        $this->nom = $nom;
    }

    /**
     * @return mixed
     */
    public function getDexcription()
    {
        return $this->dexcription;
    }

    /**
     * @param mixed $dexcription
     */
    public function setDexcription($dexcription)
    {
        $this->dexcription = $dexcription;
    }

    /**
     * @return mixed
     */
    public function getImagepath()
    {
        return $this->imagepath;
    }

    /**
     * @param mixed $imagepath
     */
    public function setImagepath($imagepath)
    {
        $this->imagepath = $imagepath;
    }


}