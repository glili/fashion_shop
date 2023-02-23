<?php
 include "header.php";

	// On démarre la session, ou on la récupère
	session_start();
    // nom par défaut
	$nomUtilisateur = "";

	// Si l'utilisateur n'était pas connecté, on le redirige versla page de connexion
	if(!ISSET($_SESSION['userConnected'])){
		header ("Location: connexion.php");
	} 
	
	// Sinon, on récupère le nom d'utilisateur et on supprime le variable de 
	// session qui indique que l'utilisateur est connecté
	$nomUtilisateur = $_SESSION['userConnected'];
	unset($_SESSION['userConnected']);

?>
