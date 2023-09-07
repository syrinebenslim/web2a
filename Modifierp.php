<?php 
include_once '../../config.php';
include_once '../../model/produit.php';
include_once'../../Controller/produitC.php';
if(!isset($_POST['id_produit'])||!isset($_POST['prix'])||!isset($_POST['quantite'])||!isset($_POST['description']))
{
	echo "erreur de ";
}


$produiit=new produit($_POST['id_produit'],"","ii",$_POST['prix'],$_POST['quantite'],"",$_POST['description']);

$produitc=new produitC();
$produitc->Modifierpro($produiit);
header('location:table-produit.php');





?>