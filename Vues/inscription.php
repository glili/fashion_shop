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
          <li class="nav-item"><a href="../index.php" class="nav-link">Accueil</a></li>
          <li class="nav-item"><a href="compte.php" class="nav-link">Produits</a></li>
          <li class="nav-item"><a href="presentation.php" class="nav-link">Presentation</a></li>
          <li class="nav-item"><a href="local.php" class="nav-link">Local</a></li>
          <li class="nav-item"><a href="contact.php" class="nav-link">Contact</a></li>
          <li class="nav-item"><a href="compte.php" class="nav-link active">Compte</a></li>
        </ul>
      </div>
    </div>
  </nav>

  <!-- registration form -->
  <div class="container ml-auto">
    <div class="row">
      <div class="col-lg-3"></div>
      <div class="col-lg-6">
        <div id="form-inscription">
          <h1 class="text-center">Creer votre compte:</h1>
          <form class="form-group" action="inscription.php" method="post" name="form-inscription"
            onsubmit="return validationInfo('form-inscription');">
            <div class="row">
              <div class="col-lg-6">
                <label for="fname">Prenom</label>
                <input type="text" name="fname" id="fname" class="form-control" placeholder="Entrez votre prenom">
              </div>
              <div class="col-lg-6">
                <label for="lname">Nom</label>
                <input type="text" name="lname" id="lname" class="form-control" placeholder="Entrez votre nom">
              </div>
              <label for="email">Email</label>
              <input type="email" name="email" id="email" class="form-control" placeholder="Enntrez votre email">
              <div class="row">
                <div class="col-lg-6">
                  <label for="password">Mot de passe</label>
                  <input type="password" name="password" id="password" class="form-control"
                    placeholder="Entrez un mot de passe">
                </div>
                <div class="col-lg-6">
                  <label for="cpassword">Confirmer mot de passe</label>
                  <input type="password" name="cpassword" id="cpassword" class="form-control"
                    placeholder="Retappez le mot de passe">
                </div>
              </div>
              <label class="block-help">Choisisez le sexe</label>
              <select name="gender" id="gender" class="form-control">
                <option value="male">Male</option>
                <option value="female">Female</option>
                <option value="others">Others</option>
              </select>
              <div class="checkbox col-lg-8">
                <label><input name ="checkbox" type="checkbox"> Voulais vous inscrire a notre infolettre</label>
              </div>

              <button type="submit" name="submit" value="submit" class="btn btn-primary">Creer compte</button>
              
              <div class="col-lg-6">
                <p class="login">Vous avez deja compte? <a href="compte.php"> Connexion</a></p>
              </div>
            </div>
          </form>
        </div>
      </div>
      <div class="col-lg-3"></div>
    </div>
  </div>
<?php


if(isset ($_POST['fname']) && isset ($_POST['lname']) && isset($_POST['email']) && isset ($_POST['password']) && isset ($_POST['gender']) && isset ($_POST['checkbox']) ){
  $fname = $_POST['fname'];
  $lname = $_POST['lname'];
  $email = $_POST['email'];
  $password = $_POST['password'];
  $genre = $_POST['gender'];
  if( $_POST['gender']=== "male"){
    $genre = "M";
  }else if( $_POST['gender']=== "female"){
    $genre= "F";
  }else{
    $genre="O";
  }

  $checkbox = 0;
  if ($_POST['checkbox'] == "on"){
    $checkbox = 1;
  }

  $admin=0;

  $personne = new UserDAO();
  $user = new Utilisateur($lname, $fname, $email, $password, $genre, $checkbox, $admin);
  $personne->insert($user);
  
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
              <li><a href="compte.php">Produits</a></li>
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