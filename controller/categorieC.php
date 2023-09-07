<!DOCTYPE html>
<html>

<?php 

class categorieC{
	function affichercategorie(){
		$sql="SELECT * FROM categories ";
		$db=config::getConnexion();
		try{
			$liste=$db->query($sql);
			return $liste;
		}
		catch(Exception $e){
			die("erreur:".$e->getMessage());
		}
	} 
		function affichercategorieseule($numse){
		$sql="SELECT * FROM categories  WHERE `id_categ`= $numse ";
		$db=config::getConnexion();
		try{
			$liste=$db->query($sql);
			return $liste;
		}
		catch(Exception $e){
			die("erreur:".$e->getMessage());
		}
	} 
	   function supprimercategorie($numse){
 $sql="DELETE  FROM categories WHERE `id_categ`= $numse ";
		$db=config::getConnexion();
		try{
			$liste=$db->query($sql);

        }catch(Exception $e){
				die("erreur:".$e->getMessage());
   }

}
function Modifiercateg($ser)
{
$sqlc= "UPDATE `categories` SET nom_cat=:nom WHERE id_categ=:id  ";
$db=config::getConnexion();
try{ $recipesStatement = $db->prepare($sqlc);
	$recipesStatement->execute(['nom' =>$ser->getnom_cate(),
		            
		              
	  'id'=>$ser->getid_cat(),
		         ]);
}
 catch(Exception $e){ 
 	
			 die("erreur:".$e->getMessage());
}

} 

function Ajoutercateg($ser){
$sql = "INSERT INTO `categories` (`nom_cat`) VALUES (:nom)";
$db=config::getConnexion();
try{ $recipesStatement = $db->prepare($sql);
	$recipesStatement->execute([   

		'nom' =>$ser->getnom_cate(),
		



	]);
 }
 catch(Exception $e){ 
 	
			 die("erreur:".$e->getMessage());

}

}
	function tricategorie(){
		$sql="SELECT * FROM categories order by nom_cat ";
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
