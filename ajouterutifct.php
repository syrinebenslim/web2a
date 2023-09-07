<?php 
include_once '../../config.php';
include_once '../../controller/utilisateurC.php';
include_once '../../model/utilisatuer.php';

if(!isset($_POST['id_utilisateur'])||!isset($_POST['nom'])||!isset($_POST['prenom'])||!isset($_POST['mail'])||!isset($_POST['mdp'])||!isset($_POST['role']))
{
	echo "erreur de ";
}

$ser=new utilisateur($_POST['id_utilisateur'],$_POST['nom'],$_POST['prenom'],$_POST['mail'],$_POST['mdp'],$_POST['role']);



$hotelc=new utilisateurc();

$prod=$hotelc->Ajouterutilisateur($ser);

header('location:http://localhost/syrine/view/back/table-utilisateur.php');




?>
