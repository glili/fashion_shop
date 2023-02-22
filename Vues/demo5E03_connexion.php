<?php
	define("root_folder", "fashion_shop/");
	include_once("modele/DAO/UtilisateurDAO.class.php");
	

	session_start();
	
	if(ISSET($_POST['user']) AND ISSET($_POST['password'])) {
		
		$user=UtilisateurDAO::chercher($_POST['user']);
		// check user and password
		if ($user != null) {
			if ($user->verifierMotPasse($_POST['password'])){
				// on créer la variable de session utilisateurConnecte
				$_SESSION['userConnected']=$_POST['user'];
				// On redirige vers la page privee, puisqu'on est maintenant connecté
				header ("Location: gestionProduit.php");
			}
		}
	}
	// Sinon, si la session est active, on redirige aussi vers la page privée
	elseif(ISSET($_SESSION['utilisateurConnecte'])){
		header ("Location: gestionProduit.php");
	} 
	
	// Sinon, on reste sur la page de connexion
	
?>
<!DOCTYPE html>
<html lang="fr">
<head>
<title>Démos 5E</title>
<meta charset="utf-8" />
<link rel="stylesheet" type="text/css" href="css/styleFormulaire.css" />
<link rel="stylesheet" type="text/css" href="css/styleLiens.css" />
</head>
<body >
	<h1>Connexion</h1>
	<form action="" method="post">
		<label for="nom_utilisateur">Nom utilisateur:</label>
		<input type="text" id="nom_utilisateur" name="nom_utilisateur" />
		<label for="mot_passe">Mot de passe :</label>
		<input type="text" id="mot_passe" name="mot_passe" />
		<input type="submit" value="Se connecter" />
	</form>
	<h3><a href="index.php">Maison</a></h3>
</body>
</html>