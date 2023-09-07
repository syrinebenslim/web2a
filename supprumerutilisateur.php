<?php 

include_once '../../config.php';
include_once '../../controller/utilisateurC.php';


$hotelc=new utilisateurc();

$prod=$hotelc->supprimerutilisateur($_POST['id_utilisateur']);


header('location:http://localhost/syrine/view/back/table-utilisateur.php');

?>


