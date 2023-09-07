<?php 

include_once '../../config.php';
include_once '../../controller/produitC.php';


$hotelc=new produitC();

$prod=$hotelc->supprimerproduit($_POST['id_produit']);

header('location:http://localhost/syrine/view/back/table-produit.php');

?>


