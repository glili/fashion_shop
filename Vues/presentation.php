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
          <li class="nav-item"><a href="compte.php" class="nav-link">Produits</a></li>
          <li class="nav-item"><a href="#" class="nav-link active">Presentation</a></li>
          <li class="nav-item"><a href="local.php" class="nav-link">Local</a></li>
          <li class="nav-item"><a href="contact.php" class="nav-link">Contact</a></li>
          <li class="nav-item"><a href="compte.php" class="nav-link">Compte</a></li>
        </ul>
      </div>
    </div>
  </nav>
  <figure>
    <div class="fixed-wrap">
      <div id="fixed">

      </div>
    </div>
  </figure>
  <div class="container-fluid">
    <div class="row text-center alert">
      <div class="col-12">
        <h1 class="display-4">Leaders de la mode</h1>
      </div>
      <div class="col-12">
        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Sequi maiores itaque veritatis et.
          Asperiores facere optio, in numquam ipsam maiores aperiam qui facilis exercitationem! Beatae rem
          voluptates eos quibusdam fugiat labore distinctio minus enim nihil error accusamus sit et,
          repudiandae tempore nemo magni sed quod rerum? Explicabo a saepe consectetur id, ducimus qui nobis
          dicta nostrum, at tenetur, repellat dolorum.</p>
        <div class="offset-8 col-3 text-right">
          <button class="btn btn-lg" type="button">Suite...</button>
        </div>
      </div>
      <hr>
    </div>
  </div>
  <div class="col-12 text-center">
    <h1 class="display-4">Notre equipe IT</h1>
  </div>
  <div class="container-fluid">
    <div class="row jumbotron">
      <div class="col-12">
        <h2 class="display-4">Derek Legault</h2>
      </div>
      <div class="col-xs-12 col-sm-12 col-md-9 col-lg-9 col-xl-10">
        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Doloribus suscipit accusantium omnis iste?
          Cum similique autem consequatur quisquam ut tempore voluptas? Omnis, laudantium magni dolorem ab
          ducimus eius corporis sed!Lorem30 </p>
      </div>
      <div class="col-xs-12 col-sm-12 col-md-3 col-lg-3 col-xl-2">
        <button class="btn btn-lg" type="button">Suite...</button>
      </div>
    </div>
  </div>
  <div class="container-fluid">
    <div class="row jumbotron">
      <div class="col-12">
        <h2 class="display-4">Lilia Grecova</h2>
      </div>
      <div class="col-xs-12 col-sm-12 col-md-9 col-lg-9 col-xl-10">
        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Doloribus suscipit accusantium omnis iste?
          Cum similique autem consequatur quisquam ut tempore voluptas? Omnis, laudantium magni dolorem ab
          ducimus eius corporis sed!Lorem30 </p>
      </div>
      <div class="col-xs-12 col-sm-12 col-md-3 col-lg-3 col-xl-2">
        <button class="btn btn-lg" type="button">Suite...</button>
      </div>
    </div>
  </div>
  <div class="container-fluid">
    <div class="row jumbotron">
      <div class="col-12">
        <h2 class="display-4">Mykhailo Niemtsev</h2>
      </div>
      <div class="col-xs-12 col-sm-12 col-md-9 col-lg-9 col-xl-10">
        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Doloribus suscipit accusantium omnis iste?
          Cum similique autem consequatur quisquam ut tempore voluptas? Omnis, laudantium magni dolorem ab
          ducimus eius corporis sed!Lorem30 </p>
      </div>
      <div class="col-xs-12 col-sm-12 col-md-3 col-lg-3 col-xl-2">
        <button class="btn btn-lg" type="button">Suite...</button>
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
              <li><a href="compte.php">Produits</a></li>
              <li><a class="active" href="#">Presentation</a></li>
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