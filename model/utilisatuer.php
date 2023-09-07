<?php
class utilisateur{
	
private $id_utilisateur;
private $nom;
private $prenom;
private $adresse;
private $mdp;
private $role;


public  function __construct($id_utilisateur,$nom,$prenom,$adresse,$mdp,$role)
{
	$this->id_utilisateur=$id_utilisateur;
    $this->nom=$nom;
    $this->prenom=$prenom;
    
    $this->adresse=$adresse;
    $this->mdp=$mdp;
        $this->role=$role;
    

 


}





public  function getid_utilisateur()
{
	return $this->id_utilisateur;
}
public function getnom()
{
	return $this->nom;
}
public function getprenom()
{
	return $this->prenom;
}

public function getadresse()
{
	return $this->adresse;
}
public  function getmdp()
{
   return $this->mdp;
}
public function getrole()
{
   return $this->role;
}




}




?>