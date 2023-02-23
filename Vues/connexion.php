<?php

if (defined("mainFolder") == false) {
	define("mainFolder", $_SERVER['DOCUMENT_ROOT']."/fashion_shop/");
}
include_once (mainFolder. 'modele/DAO/connexionDB.class.php');
include_once (mainFolder .'modele/DAO/UtilisateurDAO.class.php');


session_start();


if (isset($_POST['user_name']) and isset($_POST['password'])) {

	$user = UserDAO::display($_POST['$key']);
	// check user and password
	if ($user != null) {
		if ($user->checkPassword($_POST['password'])) {
			// on créer la variable de session userConnected
			$_SESSION['userConnected'] = $_POST['user_name'];
			// On redirige vers la page gestionProduit apres connection
			header("Location: gestionProduit.php");
		}
	}
}
// Sinon, si la session est active, on redirige aussi vers la page privée
elseif (isset($_SESSION['userConnected'])) {
	header("Location: gestionProduit.php");
}

// autrement, on reste sur la page de connexion

?>
<!DOCTYPE html>
<html lang="en">

<head>
	<title>Fashion shop</title>
	<meta charset="utf-8" />
	<link rel="stylesheet" type="text/css" href="css/style_projet.css" />
</head>

<body>
	<h1>Connexion</h1>
	<form action="gestionProduit.php" method="post">
		<label for="emai">User name:</label>
		<input type="email" id="user_name" name="user_name" placeholder="Mettez votre email" />
		<label for="password">Mot de passe :</label>
		<input type="password" id="password" name="password" />
		<button type="submit" value="Se connecter">Se connecter</button>
	</form>
	<h3><a href="../index.php">Accueil</a></h3>
</body>

</html>