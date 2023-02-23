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
<!DOCTYPE html>
<html lang="fr">
<head>
<title>Démos 5E</title>
<meta charset="utf-8" />
<link rel="stylesheet" type="text/css" href="../css/style_projet.css" />

</head>
<body >
	<h1> <?php  echo $nomUtilisateur;?> : Vous êtes maintenant déconnecté</h1>
	<h3><a href="connexion.php">Se connecter</a></h3>
</body>
</html>