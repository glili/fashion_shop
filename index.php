<?php

if (defined("mainFolder") == false) {
	define("mainFolder", $_SERVER['DOCUMENT_ROOT']."/fashion_shop/");
}
// Importe l'interface DAO et la classe Produit

include_once(mainFolder."modele/produits.class.php");
include_once(mainFolder."modele/DAO/ProduitDAO.class.php");

// include_once 'Vues/header.php';
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
  <link rel="stylesheet" href="css/style_projet.css">
</head>

<body>
<!-- navigation -->
<nav class="navbar navbar-expand-md navbar-light" id="nav">
    <div class="container-fluid">
        <a href="#" class="navbar-brand"><img src="image/logo.webp" alt="Logo LaMode fashion store" onmouseover="imageHovered();"></a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarResponsive">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarResponsive">
            <ul class="navbar-nav ml-auto">
                <li class="nav-item"><a href="#" class="nav-link active">Accueil</a></li>
                <li class="nav-item"><a href="Vues/compte.php" class="nav-link">Produits</a></li>
                <li class="nav-item"><a href="Vues/presentation.php" class="nav-link">Presentation</a></li>
                <li class="nav-item"><a href="Vues/local.php" class="nav-link">Local</a></li>
                <li class="nav-item"><a href="Vues/contact.php" class="nav-link">Contact</a></li>
                <li class="nav-item"><a href="Vues/compte.php" class="nav-link">Compte</a></li>
            </ul>
        </div>
    </div>
</nav>


<!-- Carousel wrapper -->
<!-- <div id="carouselResponsive" class="carousel slide " data-ride="carousel"> -->
<!-- Slides -->
<!-- <div class="carousel-inner mb-5 shadow-sm rounded">
      <div class="carousel-item active">
        <img src="image/11slide.webp" class="d-block w-100" alt="img1">
      </div>
      <div class="carousel-item">
        <img src="image/12slide.webp" class="d-block w-100" alt="img2">
      </div>
      <div class="carousel-item">
        <img src="image/13slide.webp" class="d-block w-100" alt="img">
      </div>
    </div> -->
<!-- Slides -->

<!-- Controls -->
<!-- <a class="carousel-control-prev" href="#carouselResponsive" role="button" data-slide="prev">
      <span class="carousel-control-prev-icon" aria-hidden="true"></span>
    </a>
    <a class="carousel-control-next" href="#carouselResponsive" role="button" data-slide="next">
      <span class="carousel-control-next-icon" aria-hidden="true"></span>
    </a> -->
<!-- Controls -->

<!-- Thumbnails -->
<!-- <ol class="carousel-indicators list-inline">
      <li class="list-inline-item active">
        <a id="carousel-selector-0" class="selected" data-slide-to="0" data-target="#carouselResponsive">
          <img class="d-block w-100 shadow-sm rounded img-fluid" src="image/11_sm.webp" alt="img1">
        </a>
      </li>

      <li class="list-inline-item">
        <a id="carousel-selector-1" data-slide-to="1" data-target="#carouselResponsive">
          <img class="d-block w-100 shadow-sm rounded img-fluid" src="image/12_sm.webp" alt="img2">
        </a>
      </li>

      <li class="list-inline-item">
        <a id="carousel-selector-2" data-slide-to="2" data-target="#carouselResponsive">
          <img class="d-block w-100 shadow-sm rounded img-fluid" src="image/13_sm.webp" alt="img3">
        </a>
      </li>
    </ol> -->
<!-- Thumbnails -->
<!-- </div> -->

<!-- slider container JS-->
<section aria-label="Carousel photos">
    <div id="slider" class="carousel">
        <button id="previous" class="carousel-button prev">&#8656;</button>
        <button id="next" class="carousel-button next">&#8658;</button>
        <ul data-slides>
            <li class="slide"><img src="image/11slide.webp" alt="Slide img1"></li>
            <li class="slide"><img src="image/12slide.webp" alt="Slide img2"></li>
            <li class="slide"><img src="image/13slide.webp" alt="Slide img3"></li>
        </ul>
    </div>
</section>


<!-- cards produit -->
<div class="galery">
    <div class="container padded cart">
        <h1 class=" col-12 text-center news">Nouveaute</h1>
        <div class="row text-center ">
            <div class="col-sm-6 col-md-3">
                <div class="card">
                    <img src="image/red_dress.webp" alt="Robe rouge de cocleil femme">
                    <div class="card-body">
                        <h3 class="text-center">Robe femme<br>Zarra</h3>
                        <p class="text-center">Lorem ipsum dolor sit amet.</p>
                        <h2 class="text-right">150$</h2>
                    </div>
                </div>
            </div>
            <div class="col-sm-6 col-md-3">
                <div class="card">
                    <img src="image/orange_blouse.webp" alt="Blouse orange femme">
                    <div class="card-body">
                        <h3 class="text-center">Blouse femme <br>Zalando</h3>
                        <p class="text-center">Lorem ipsum dolor sit amet.</p>
                        <h2 class="text-right">60$</h2>
                    </div>
                </div>
            </div>
            <div class="col-sm-6 col-md-3">
                <div class="card">
                    <img src="image/white_blouse.webp" alt="Blouse blanche femme">
                    <div class="card-body">
                        <h3 class="text-center">Blouse femme<br>Cartier</h3>
                        <p class="text-center">Lorem ipsum dolor sit amet.</p>
                        <h2 class="text-right">60$</h2>
                    </div>
                </div>
            </div>
            <div class="col-sm-6 col-md-3">
                <div class="card">
                    <img src="image/shirt.webp" alt="Chemise homme">
                    <div class="card-body">
                        <h3 class="text-center">Chemise homme<br>Zarra</h3>
                        <p class="text-center">Lorem ipsum dolor sit amet.</p>
                        <h2 class="text-right">70$</h2>
                    </div>
                </div>
            </div>
            <div class="col-sm-6 col-md-3">
                <div class="card">
                    <img src="image/jeans_men.webp" alt="Jeans homme">
                    <div class="card-body">
                        <h3 class="text-center">Jeans homme<br>Cartier</h3>
                        <p class="text-center">Lorem ipsum dolor sit amet.</p>
                        <h2 class="text-right">100$</h2>
                    </div>
                </div>
            </div>
            <div class="col-sm-6 col-md-3">
                <div class="card">
                    <img src="image/jeans.webp" alt="Jeans femme">
                    <div class="card-body">
                        <h3 class="text-center">Jeans femme<br>Zalando</h3>
                        <p class="text-center">Lorem ipsum dolor sit amet.</p>
                        <h2 class="text-right">100$</h2>
                    </div>
                </div>
            </div>
            <div class="col-sm-6 col-md-3">
                <div class="card">
                    <img src="image/red_blouse.webp" alt="Blouse rouge femme">
                    <div class="card-body">
                        <h3 class="text-center">Blouse femme<br>Zarra</h3>
                        <p class="text-center">Lorem ipsum dolor sit amet.</p>
                        <h2 class="text-right">50$</h2>
                    </div>
                </div>
            </div>
            <div class="col-sm-6 col-md-3">
                <div class="card">
                    <img src="image/manteau.webp" alt="Veste homme">
                    <div class="card-body">
                        <h3 class="text-center">Veste homme<br>Zarra</h3>
                        <p class="text-center">Lorem ipsum dolor sit amet.</p>
                        <h2 class="text-right">50$</h2>
                    </div>
                </div>
            </div>
            <div class="col-sm-6 col-md-3">
                <div class="card">
                    <img src="image/scarf.webp" alt="Foulard">
                    <div class="card-body">
                        <h3 class="text-center">Foulard<br>Zarra</h3>
                        <p class="text-center">Lorem ipsum dolor sit amet.</p>
                        <h2 class="text-right">50$</h2>
                    </div>
                </div>
            </div>
            <div class="col-sm-6 col-md-3">
                <div class="card">
                    <img src="image/cap.webp" alt="Chapeau">
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
<!-- other cards -->
<div class="container" id="rabais-cards">
    <div class="row">
        <div class="col-md-6 py-3 py-md-0">
            <div class="card">
                <img src="image/orange_blouse.webp" alt="Vetements d'automn femme">
                <div class="card-img-overlay">
                    <h3>Femme</h3>
                    <p>Up to 50$ Off</p>
                </div>
            </div>
        </div>
        <div class="col-md-6 py-3 py-md-0">
            <div class="card">
                <img src="image/manteau.webp" alt="Vetments d'automn homme">
                <div class="card-img-overlay">
                    <h3>Homme</h3>
                    <p>Up to 50$ Off</p>
                </div>
            </div>
        </div>
    </div>
    <div class="achats col-md-12 py-3 py-md-0">
        <button href="compte.html" type="button" value="submit" onclick="window.location.href = 'Vues/compte.php';" id="achat">Acheter maintenant</button>
    </div>
</div>
<!-- other cards -->

<!-- footer -->
<footer class="footer" id="foot">
    <div class="footer-top">
        <div class="container">
            <div class="row">
                <div class="footer-links col-lg-3 col-md-6 ">
                    <h2>La Mode</h2>
                    <ul>
                        <li><a class="active" href="#">Accueil</a></li>
                        <li><a href="Vues/compte.php">Produits</a></li>
                        <li><a href="Vues/presentation.php">Presentation</a></li>
                        <li><a href="Vues/local.php">Local</a></li>
                        <li><a href="Vues/contact.php">Contact</a></li>
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
                    <form class="input" action="index.php" method="post" name="form-footer" onsubmit="return validationInfo('form-footer');">
                        <input type="email" id="emailf" placeholder="Entrez votre Email..">
                        <button type="submit" name="submit" value="submit" class="btn btn-primary" id="info-register">INSCRIPTION</button>
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


<script src="script/script_projet.js"></script>
<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.14.7/dist/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
</body>

</html>