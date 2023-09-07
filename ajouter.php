<?php 
include_once '../../config.php';
include_once '../../model/produit.php';
include_once'../../Controller/produitC.php';

if(!isset($_POST['id_produit'])||!isset($_POST['id_cat'])||!isset($_POST['nom_produit'])||!isset($_POST['prix'])||!isset($_POST['quantite'])||!isset($_POST['description']))
{
        echo "erreur de ";
}
if (isset($_FILES['image']) && $_FILES['image']['error'] == 0)
{
        // Testons si le fichier n'est pas trop gros
        if ($_FILES['image']['size'] <= 1000000)
        {
                // Testons si l'extension est autorisée
                $fileInfo = pathinfo($_FILES['image']['name']);
                $extension = $fileInfo['extension'];
                $allowedExtensions = ['jpg', 'jpeg', 'gif', 'png','jfif'];
                if (in_array($extension, $allowedExtensions))
                {
                        // On peut valider le fichier et le stocker définitivement
                        move_uploaded_file($_FILES['image']['tmp_name'], 'uploads/' . basename($_FILES['image']['name']));
                        echo "L'envoi a bien été effectué !.<br>"; 
                      //  echo  'uploads/' . basename($_FILES['screenshot']['name']);
                }
        }
} 



$produiit=new produit($_POST['id_produit'],$_POST['id_cat'],$_POST['nom_produit'],$_POST['prix'],$_POST['quantite'],$_FILES['image']['name'],$_POST['description']);


$produitc=new produitC();
$produitc->Ajouter($produiit);
header('location:table-produit.php');
?>