<!DOCTYPE html>
<html>

<?php 

class produitC{
	function afficherproduit(){
		$sql="SELECT * FROM produit ";
		$db=config::getConnexion();
		try{
			$liste=$db->query($sql);
			return $liste;
		}
		catch(Exception $e){
			die("erreur:".$e->getMessage());
		}
	} 
		
	function afficherproduitseul($numse){
		$sql="SELECT * FROM produit WHERE `id_produit`= $numse";
		$db=config::getConnexion();
		try{
			$liste=$db->query($sql);
			return $liste;
		}
		catch(Exception $e){
			die("erreur:".$e->getMessage());
		}
	} 
		function afficherpanier_produit($numse){
		$sql = "SELECT * FROM produit as p INNER JOIN panier as pa ON p.id_produit = $numse";
		$db=config::getConnexion();
		try{
			$liste=$db->query($sql);
			return $liste;
		}
		catch(Exception $e){
			die("erreur:".$e->getMessage());
		}
	} 
	   function supprimerproduit($numse){
 $sql="DELETE  FROM produit WHERE `id_produit`= $numse ";
		$db=config::getConnexion();
		try{
			$liste=$db->query($sql);

        }catch(Exception $e){
			die("erreur:".$e->getMessage());
   }
}


function Ajouter($produiit){
$sql = "INSERT INTO `produit` (`id_cat`, `Nom_produit`, `prix`, `Quantite`, `image`, `descreption`) VALUES (:id_cat, :nom, :prix, :quantite, :image, :desce)";

$db=config::getConnexion();
try{ $recipesStatement = $db->prepare($sql);
	$recipesStatement->execute([ 
		            'id_cat' =>$produiit->getid_cat(),
		            'nom'=>$produiit->getNom_produit(),
		            'prix'=>$produiit->getprix(),
		            'quantite'=>$produiit->getQuantite(),
		            'image'=>$produiit->getimage(),
		            'desce'=>$produiit->getdescreption(),
		                


	]);
 }
 catch(Exception $e){ 
 	
			 die("erreur:".$e->getMessage());

}


}
function Modifierpro($prod)
{
$sqlc= "UPDATE `produit` SET prix=:prix,Quantite=:quant,descreption=:descs WHERE id_produit=:id  ";
$db=config::getConnexion();
try{ $recipesStatement = $db->prepare($sqlc);
	$recipesStatement->execute([ 'prix'=>$prod->getprix(),
		            'quant' =>$prod->getQuantite(),
		            'descs' =>$prod->getdescreption(),
		            'id'    =>$prod->getid_produit(),
		         ]);
}
 catch(Exception $e){ 
 	
			 die("erreur:".$e->getMessage());
}

}
function recherche($search_value)
    {
        $sql="SELECT * FROM produit where ( Nom_produit  like '%$search_value%' or prix  like '%$search_value%' )";

        //global $db;
        $db =Config::getConnexion();

        try{
            $result=$db->query($sql);

            return $result;

        }
        catch (Exception $e){
            die('Erreur: '.$e->getMessage());
        }
    }
	function triproduit(){
		$sql="SELECT * FROM produit order by prix";
		$db=config::getConnexion();
		try{
			$liste=$db->query($sql);
			return $liste;
		}
		catch(Exception $e){
			die("erreur:".$e->getMessage());
		}
	}

}
?>
</html>
