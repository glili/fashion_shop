<?php
if (defined("mainFolder") == false) {
	define("mainFolder", $_SERVER['DOCUMENT_ROOT']."/fashion_shop/");
}

$mainFolder = $_SERVER['DOCUMENT_ROOT']."/fashion_shop/";

include_once($mainFolder."modele/utilisateur.class.php");
include_once($mainFolder."modele/DAO/UtilisateurDAO.class.php");




session_start();

?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>LaMode</title>
  <link rel="icon" href="image/favicon.ico" type="image/x-icon">
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.3/font/bootstrap-icons.css">
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/css/bootstrap.min.css"
    integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
  <link rel="stylesheet" href="../css/style_projet.css">
</head>

<body>
<nav class="navbar navbar-expand-md navbar-light">
    <div class="container-fluid">
        <ul class="navbar-nav ml-auto">
          <li class="nav-item "><a href="../index.php" class="nav-link">Accueil</a></li>
          <li class="nav-item"><a href="#" class="nav-link">Connection</a></li>
</ul>
    </div>
  </nav>
	<h1 class=text-center>Connexion</h1>

  <!-- login form -->
  <div class="container ml-auto">
    <div class="row">
      <div class="col-lg-3"></div>
      <div class="col-lg-6">
        <div id="form-inscription">
          <h1 class="text-center">Acceder votre compte:</h1>
          <form class="form-group" action="gestionProduit.php" method="post" name="form-compte"
            onsubmit="return(validationInfo('form-compte'));">
            <div class="row">
              <div class="col-lg-6">
                <label for="email">Email</label>
                <input type="email" name="email" id="email" class="form-control" placeholder="Enntrez votre email">
              </div>
              <div class="col-lg-6">
                <label for="password">Mot de passe</label>
                <input type="password" name="password" id="password" class="form-control"
                  placeholder="Entrez un mot de passe">
              </div>
            </div>
            <button type="submit" name="submit" value="submit" class="btn btn-primary">Se connecter</button>
          </form>
        </div>
      </div>
      <div class="col-lg-3"></div>
    </div>
  </div>

	<?php 
	
	if (isset($_POST['email']) and isset($_POST['password'])) {
		

		$key = $_POST['email'];
		$password = $_POST['password'];
		  $user = UserDAO::display($_POST['$key']);
		  // check user and password
		  if ($user != null) {
			  if ($user->checkPassword($_POST['password'])) {
				  // on créer la variable de session userConnected
				  $_SESSION['userConnected'] = $_POST['email'];
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

</body>

</html>