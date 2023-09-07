<!DOCTYPE html>
<html>

<?php 

class utilisateurc{


function connexionusers($mail, $md)
   {
        $sql="SELECT * FROM utilisateur where 	(adresse like '$mail' and mdp like '$md') ";

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
	function afficherutilisateur($numse){
		$sql="SELECT * FROM utilisateur WHERE `role`= $numse ";
		$db=config::getConnexion();
		try{
			$liste=$db->query($sql);
			return $liste;
		}
		catch(Exception $e){
			die("erreur:".$e->getMessage());
		}
	} 
	function afficherutilisateurback(){
		$sql="SELECT * FROM utilisateur WHERE `role` not like 0";
		$db=config::getConnexion();
		try{
			$liste=$db->query($sql);
			return $liste;
		}
		catch(Exception $e){
			die("erreur:".$e->getMessage());
		}
	}
	   function supprimerutilisateur($numse){
 $sql="DELETE  FROM utilisateur WHERE `id_utilisateur`= $numse ";
		$db=config::getConnexion();
		try{
			$liste=$db->query($sql);

        }catch(Exception $e){
		die("erreur:".$e->getMessage());
     
        }
  
}
function Modifierutilisateur($ser)
{
$sqlc= "UPDATE `utilisateur` SET nom=:nome,prenom=:pre,adresse=:adrs WHERE id_utilisateur=:id  ";
$db=config::getConnexion();
try{ $recipesStatement = $db->prepare($sqlc);
	$recipesStatement->execute(['nome' =>$ser->getnom(),
		             'pre'=>$ser->getprenom(),
		               'adrs'=>$ser->getadresse(),
	  'id'=>$ser->getid_utilisateur(),
		         ]);
}
 catch(Exception $e){ 
 	
			 die("erreur:".$e->getMessage());
}

} 

function Ajouterutilisateur($ser){
$sql = "INSERT INTO `utilisateur` (`nom`, `prenom`, `adresse`, `mdp`, `role`) VALUES (:nom, :prenom, :adrs, :mdp, :rol)";

$db=config::getConnexion();
try{ $recipesStatement = $db->prepare($sql);
	$recipesStatement->execute([  

		'nom' =>$ser->getnom(),
		'prenom' =>$ser->getprenom(),
		'adrs' =>$ser->getadresse(),
		'mdp' =>$ser->getmdp(),

'rol' =>$ser->getrole(),


	]);
 }
 catch(Exception $e){ 
 	
			 die("erreur:".$e->getMessage());

}

}

function recherche($search_value)
    {
        $sql="SELECT * FROM utilisateur where ( nom  like '%$search_value%' or prenom  like '%$search_value%' or role  like '%$search_value%' )";

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


}
?>
</html>
