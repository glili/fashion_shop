<?php
session_start();
 include "header.php";
?>

<nav class="navbar navbar-expand-md navbar-light">
    <div class="container-fluid">
        <ul class="navbar-nav ml-auto">
          <li class="nav-item"><a href="../index.php" class="nav-link">Accueil</a></li>
          <li class="nav-item"><a href="gestionProduit.php" class="nav-link">gestion Produit</a></li>
          <li class="nav-item"><a href="Ajouter_produit.php" class="nav-link">Ajouter un produit</a></li>
          <li class="nav-item"><a href="Afficher_produits.php" class="nav-link">Afficher tout</a></li>
          <li class="nav-item"><a href="Chercher_produit.php" class="nav-link">Cherrcher produit</a></li>
          <li class="nav-item"><a href="Chercher_produits.php" class="nav-link">Chercher tout</a></li>
		  <li class="nav-item active"><a href="#" class="nav-link">Supprimer un produit</a></li>
		  <li class="nav-item"><a href="deconnexion.php" class="nav-link">Deconnexion</a></li>
        </ul>
    </div>
  </nav>