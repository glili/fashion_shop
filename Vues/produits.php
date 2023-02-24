<?php
session_start();

if(isset ($_SESSION['userConnected'])){
  header("Location: compte.pp");
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

<body>
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
          <li class="nav-item"><a href="#" class="nav-link active">Produits</a></li>
          <li class="nav-item"><a href="presentation.php" class="nav-link">Presentation</a></li>
          <li class="nav-item"><a href="local.php" class="nav-link">Local</a></li>
          <li class="nav-item"><a href="contact.php" class="nav-link">Contact</a></li>
          <li class="nav-item"><a href="compte.php" class="nav-link">Compte</a></li>
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
      <div class=" offset-lg-2 col-lg-4">
        <img src="../image/clothes-shopping.gif" alt="main banner">
      </div>

    </div>
  </div>

  <!-- cards produit -->
  <div class="galery">
    <div class="container padded cart">
      <h1 class=" col-12 text-center news">Gallerie</h1>
      <div class="row text-center">
        <div class="col-sm-6 col-md-3">
          <div class="card">
            <img src="../image/red_dress.webp" alt="Robe rouge de cocleil femme">
            <div class="card-body">
              <h3 class="text-center">Robe femme<br>Zarra</h3>
              <p class="text-center">Lorem ipsum dolor sit amet.</p>
              <h2 class="text-right">150$</h2>
            </div>
          </div>
        </div>
        <div class="col-sm-6 col-md-3">
          <div class="card">
            <img src="../image/orange_blouse.webp" alt="Blouse orange femme">
            <div class="card-body">
              <h3 class="text-center">Blouse femme <br>Zalando</h3>
              <p class="text-center">Lorem ipsum dolor sit amet.</p>
              <h2 class="text-right">60$</h2>
            </div>
          </div>
        </div>
        <div class="col-sm-6 col-md-3">
          <div class="card">
            <img src="../image/white_blouse.webp" alt="Blouse blanche femme">
            <div class="card-body">
              <h3 class="text-center">Blouse femme<br>Cartier</h3>
              <p class="text-center">Lorem ipsum dolor sit amet.</p>
              <h2 class="text-right">60$</h2>
            </div>
          </div>
        </div>
        <div class="col-sm-6 col-md-3">
          <div class="card">
            <img src="../image/shirt.webp" alt="Chemise homme">
            <div class="card-body">
              <h3 class="text-center">Chemise homme<br>Zarra</h3>
              <p class="text-center">Lorem ipsum dolor sit amet.</p>
              <h2 class="text-right">70$</h2>
            </div>
          </div>
        </div>
        <div class="col-sm-6 col-md-3">
          <div class="card">
            <img src="../image/jeans_men.webp" alt="Jeans homme">
            <div class="card-body">
              <h3 class="text-center">Jeans homme<br>Cartier</h3>
              <p class="text-center">Lorem ipsum dolor sit amet.</p>
              <h2 class="text-right">100$</h2>
            </div>
          </div>
        </div>
        <div class="col-sm-6 col-md-3">
          <div class="card">
            <img src="../image/jeans.webp" alt="Jeans femme">
            <div class="card-body">
              <h3 class="text-center">Jeans femme<br>Zalando</h3>
              <p class="text-center">Lorem ipsum dolor sit amet.</p>
              <h2 class="text-right">100$</h2>
            </div>
          </div>
        </div>
        <div class="col-sm-6 col-md-3">
          <div class="card">
            <img src="../image/red_blouse.webp" alt="Blouse rouge femme">
            <div class="card-body">
              <h3 class="text-center">Blouse femme<br>Zarra</h3>
              <p class="text-center">Lorem ipsum dolor sit amet.</p>
              <h2 class="text-right">50$</h2>
            </div>
          </div>
        </div>
        <div class="col-sm-6 col-md-3">
          <div class="card">
            <img src="../image/manteau.webp" alt="Veste homme">
            <div class="card-body">
              <h3 class="text-center">Veste homme<br>Zarra</h3>
              <p class="text-center">Lorem ipsum dolor sit amet.</p>
              <h2 class="text-right">50$</h2>
            </div>
          </div>
        </div>
        <div class="col-sm-6 col-md-3">
          <div class="card">
            <img src="../image/scarf.webp" alt="Foulard">
            <div class="card-body">
              <h3 class="text-center">Foulard<br>Zarra</h3>
              <p class="text-center">Lorem ipsum dolor sit amet.</p>
              <h2 class="text-right">50$</h2>
            </div>
          </div>
        </div>
        <div class="col-sm-6 col-md-3">
          <div class="card">
            <img src="../image/cap.webp" alt="Chapeau">
            <div class="card-body">
              <h3 class="text-center">Chapeau<br>Zarra</h3>
              <p class="text-center">Lorem ipsum dolor sit amet.</p>
              <h2 class="text-right">50$</h2>
            </div>
          </div>
        </div>
      </div>
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
              <li><a class="active" href="#">Produits</a></li>
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