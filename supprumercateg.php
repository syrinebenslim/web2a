<?php 

include_once '../../config.php';
include_once '../../controller/categorieC.php';


$hotelc=new categorieC();

$prod=$hotelc->supprimercategorie($_POST['id_categ']);

header('location:http://localhost/syrine/view/back/table-categorie.php');

?>


