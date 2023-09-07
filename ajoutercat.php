<?php
include_once '../../config.php';
include_once '../../controller/categorieC.php';
include_once '../../model/categorie.php';
 if(!isset($_POST['id_categ'])||!isset($_POST['nom_cat']))
{
	echo "erreur de ";
}
$cate=new categorie($_POST['id_categ'],$_POST['nom_cat']);

$cat=new categorieC();
$cat->Ajoutercateg($cate);
header('location:table-categorie.php');
?>