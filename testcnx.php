<?php 
  ob_start();
include_once '../../config.php';
include_once '../../controller/utilisateurC.php';
session_start();




$hotelc=new utilisateurc();

$prod=$hotelc->afficherutilisateurback();

foreach($prod as $pro){
  print($pro['role']);
	  if (
            $pro['adresse'] ===$_POST['mail'] &&
            $pro['mdp'] ===$_POST['mdp']
        )
	  {
	  	 $loggedUser = [
                'email' => $pro['adresse'],
            ];
              $_SESSION['LOGGED_USER'] = $loggedUser['email'];
                $_SESSION['role'] =$pro['role'];
                  header('location:http://localhost/syrine/view/back/index.php');
	  }
	  else {
	  	include_once('connexion.php');
        
        }

	


}






 ob_end_flush();

?>
