<?php
class categorie{
   private $id_categ;
private $nom_cate;
public  function __construct($id_categ,$nom_cate)
{
   $this->id_categ=$id_categ;
    $this->nom_cate=$nom_cate;
}
public  function getid_cat()
{
   return $this->id_categ;
}
public function getnom_cate()
{
   return $this->nom_cate;
}

}





?>