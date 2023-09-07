<?php
class produit{
   
private $id_produit;
private $id_cat;
private $Nom_produit;
private $prix;
private $Quantite;
private $image;
private $descreption;


public  function __construct($id_produit,$id_cat,$Nom_produit,$prix,$Quantite,$image,$descreption)
{
   $this->id_produit=$id_produit;
    $this->id_cat=$id_cat;
    $this->Nom_produit=$Nom_produit;
    $this->prix=$prix;
    $this->Quantite=$Quantite;
    $this->image=$image;
    $this->descreption=$descreption;
       
}

public  function getid_produit()
{
   return $this->id_produit;
}
public function getid_cat()
{
   return $this->id_cat;
}
public function getNom_produit()
{
   return $this->Nom_produit;
}
public function getprix()
{
   return $this->prix;
}
public function getQuantite()
{
   return $this->Quantite;
}
public function getimage()
{
   return $this->image;
}
public  function getdescreption()
{
   return $this->descreption;
}


}

?>