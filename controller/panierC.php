<!DOCTYPE html>
<html>

<?php 

class panierC{

		 function afficherpanier($numse){
		$sql="SELECT * FROM panier  WHERE `id_utilisateur`= $numse ";
		$db=config::getConnexion();
		try{
			$liste=$db->query($sql);
		
			return $liste;
			
		

		}
		catch(Exception $e){
			die("erreur:".$e->getMessage());
		}
	}
	   function supprimerpanier($numse){
 $sql="DELETE  FROM panier WHERE `id_panier`= $numse ";
		$db=config::getConnexion();
		try{
			$liste=$db->query($sql);

        }catch(Exception $e){
        	
			die("erreur:".$e->getMessage());
   }
}


function Ajouterpanier($ser){
$sql = "INSERT INTO `panier` (`id_produit`, `id_utilisateur`, `nom`, `image`, `prix`) VALUES (:id_prod, :id_utilisa, :nom, :image, :prix)";

$db=config::getConnexion();
try{ $recipesStatement = $db->prepare($sql);
	$recipesStatement->execute([ 
		            'id_prod' =>$ser->getid_produit(),
		            'id_utilisa'=>$ser->getid_utilisateur(),
		             'nom'=>$ser->getnom(),
		              'image'=>$ser->getimage(),
		               'prix'=>$ser->getprix(),
		           
		         
		



	]);
 }
 catch(Exception $e){ 
 	
			 die("erreur:".$e->getMessage());

}

}


}
?>
</html>
