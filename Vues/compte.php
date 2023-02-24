<?php
if (defined("mainFolder") == false) {
	define("mainFolder", $_SERVER['DOCUMENT_ROOT']."/fashion_shop/");
}

$mainFolder = $_SERVER['DOCUMENT_ROOT']."/fashion_shop/";
include_once($mainFolder."modele/utilisateur.class.php");
include_once($mainFolder."modele/DAO/UtilisateurDAO.class.php");
?>

<?php

if ($_SERVER['REQUEST_METHOD'] === 'POST') {

  if (isset($_POST['email']) and isset($_POST['password'])) {
    $value = $_POST['email'];
    setcookie("email", $value, time() +1800);
    $_SESSION['email']=$value;
  }
  session_start();

  if(isset($_SESSION['email'])){
    header("Location: produits.php");
  }
}
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

<body class="form-body">
  <!-- navigation -->
  <nav class="navbar navbar-expand-md navbar-light">
    <div class="container-fluid">
      <a href="#" class="navbar-brand"><img src="../image/logo.webp" alt="Logo LaMode fashion store"></a>
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarResponsive">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarResponsive">
        <ul class="navbar-nav ml-auto">
          <li class="nav-item "><a href="../index.php" class="nav-link">Accueil</a></li>
          <li class="nav-item"><a href="#" class="nav-link">Produits</a></li>
          <li class="nav-item"><a href="presentation.php" class="nav-link">Presentation</a></li>
          <li class="nav-item"><a href="local.php" class="nav-link">Local</a></li>
          <li class="nav-item"><a href="contact.php" class="nav-link">Contact</a></li>
          <li class="nav-item"><a href="#" class="nav-link active">Compte</a></li>

        </ul>
      </div>
    </div>
  </nav>

  <!-- banner -->
  <div class="container-fluid banner padded">
    <div class="row">
      <div class="offset-lg-2 col-lg-4 padded">
        <h1>Soyez belles et beaux</h1>
        <p>Vous trouverez ici des articles pour toutes les occasions, ainsi que des accessoires.
          <br>Nous savons comment vous aider à montrer élégant, moderne, intéressant.
          <br>Nous pouvons vous aider à avoir confiance en soi.
        </p>
      </div>
      <div class="banner-img image-fluid offset-lg-2 col-md-2 col-lg-4 padded">
        <img src="../image/clothes-shopping.gif" alt="main banner">
      </div>

    </div>
  </div>

  <!-- login form -->
  <div class="container ml-auto">
    <div class="row">
      <div class="col-lg-3"></div>
      <div class="col-lg-6">
        <div id="form-inscription">
          <h1 class="text-center">Acceder votre compte:</h1>
          <form class="form-group" action="produits.php" method="post" name="form-compte"
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
            <div class="col-lg-6 d-inline">
              <p class="choise">pas de compte? <a href="inscription.php">Creer compte</a></p>
            </div>
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
			header("Location: produits.php");
		}
	}
}
// Sinon, si la session est active, on redirige aussi vers la page privée
elseif (isset($_SESSION['userConnected'])) {
	header("Location: produits.php");
}


?>
  <!-- footer -->
  <footer class="footer">
    <div class="footer-top">
      <div class="container">
        <div class="row">
          <div class="footer-links col-lg-3 col-md-6 ">
            <h2>La Mode</h2>
            <ul>
              <li><a href="../index.php">Accueil</a></li>
              <li><a href="#">Produits</a></li>
              <li><a href="presentation.php">Presentation</a></li>
              <li><a href="local.php">Local</a></li>
              <li><a href="contact.php">Contact</a></li>
            </ul>
          </div>
          <div class="social-links col-lg-3 col-md-6">
            <h2>Suivez nous</h2>
            <div class="socail-links mt-3">
              <a href="https://twitter.com" target="_blank"><i class="bi bi-twitter"></i></a>
              <a href="https://www.facebook.com" target="_blank"><i class="bi bi-facebook"></i></a>
              <a href="https://www.instagram.com" target="_blank"><i class="bi bi-instagram"></i></a>
            </div>
          </div>
          <div class="inscription">
            <h2 class="text-center">Inscrivez vous a notre infolettre.</h2>
            <form class="input" action="index.php" method="post" name="form-footer"
              onsubmit="return validationInfo('form-footer');">
              <input type="email" id="emailf" placeholder="Entrez votre Email..">
              <button type="submit" name="submit" value="submit" class="btn btn-primary"
                id="info-register">INSCRIPTION</button>
            </form>
          </div>
        </div>
      </div>
    </div>
    <hr>
    <div class="footer-bottom">
      &copy; Copyright. All Rights Reserved
    </div>
  </footer>
  <!-- footer -->


  <script src="../script/script_projet.js"></script>
  <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"
    integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo"
    crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/popper.js@1.14.7/dist/umd/popper.min.js"
    integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1"
    crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/js/bootstrap.min.js"
    integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM"
    crossorigin="anonymous"></script>
</body>

</html>