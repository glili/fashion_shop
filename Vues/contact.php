<?php
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
          <li class="nav-item"><a href="#" class="nav-link active">Contact</a></li>
          <li class="nav-item"><a href="compte.php" class="nav-link">Compte</a></li>
        </ul>
      </div>
    </div>
  </nav>

  <!-- contact form -->
  <div class="container ml-auto">
    <div class="row">
      <div class="col-lg-3"></div>
      <div class="col-lg-6">
        <div id="form-inscription">
          <h1 class="text-center">Pour nous joindre:</h1>
          <form class="form-group" action="index.php" method="post" name="form-contact"
            onsubmit="return(validationInfo('form-contact'));">
            <div class="row">
              <label for="email">Email</label>
              <input type="email" name="email" id="email" class="form-control" placeholder="Enntrez votre email">
              <label for="motif">Motif du contact</label>
              <input type="text" class="form-control" id="motif" placeholder="Entez le motif du contact">

              <textarea name="message" cols="52" rows="5" onclick="this.value=''">Message</textarea>

              <div class="checkbox col-lg-8">
                <label for="checkbox"><input type="checkbox" id="checkbox"> Voulais vous inscrire a notre
                  infolettre</label>
              </div>

              <button type="submit" name="submit" value="submit" class="btn btn-primary">Envoyer</button>
            </div>
          </form>
        </div>
      </div>
      <div class="col-lg-3"></div>
    </div>
  </div>
  
  <!-- footer -->
  <footer class="footer">
    <div class="footer-top">
      <div class="container">
        <div class="row">
          <div class="footer-links col-lg-3 col-md-6 ">
            <h2>La Mode</h2>
            <ul>
              <li><a href="../index.php">Accueil</a></li>
              <li><a href="compte.html">Produits</a></li>
              <li><a href="presentation.php">Presentation</a></li>
              <li><a href="local.php">Local</a></li>
              <li><a class="active" href="#">Contact</a></li>
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