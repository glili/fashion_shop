<?php
 include "header.php";
 
	// on récupère la session, ou on en crée un nouvelle
	session_start();
	// Si l'ulisateurConnecte n'exsite pas, alors on redirige vers la page de connexion
	if(!ISSET($_SESSION['userConnected'])){
		header ("Location: connexion.php");
	} 

    // On récupère le nom pour l'affichage
	$nomUtilisateur = $_SESSION['userConnected'];
	
?>

	<h1>Bienvenu <?php  echo $nomUtilisateur;?> </h1>
	<h3><a href="deconnexion.php">Déconnexion</a></h3>

</body>
</html>