<?php
class panier{
	
private $id_panier;
private $id_produit;
private $id_utilisateur;
private $nom;
private $image;
private $prix;



public  function __construct($id_panier,$id_produit,$id_utilisateur,$nom,$image,$prix)
{
	$this->id_panier=$id_panier;
    $this->id_produit=$id_produit;
    $this->id_utilisateur=$id_utilisateur;
    	$this->nom=$nom;
    $this->image=$image;
    $this->prix=$prix;

 


}





public  function getid_panier()
{
	return $this->id_panier;
}
public function getid_produit()
{
	return $this->id_produit;
}
public function getid_utilisateur()
{
	return $this->id_utilisateur;
}
public  function getnom()
{
	return $this->nom;
}
public function getimage()
{
	return $this->image;
}
public function getprix()
{
	return $this->prix;
}






}




?>