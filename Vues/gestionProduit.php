<?php

if (defined("mainFolder") == false) {
	define("mainFolder", $_SERVER['DOCUMENT_ROOT']."/fashion_shop/");
}
// Importe l'interface DAO et la classe Produit

include_once(mainFolder."modele/produits.class.php");
include_once(mainFolder."modele/DAO/ProduitDAO.class.php");

 include "header.php";

	// on récupère la session, ou on en crée un nouvelle
	session_start();
	// 	// Si l'ulisateurConnecte n'exsite pas, alors on redirige vers la page de connexion
	if(!ISSET($_SESSION['userConnected'])){
			

	// 	// On récupère le nom pour l'affichage
		$nomUtilisateur = $_SESSION['userConnected'];
		}
?>

<nav class="navbar navbar-expand-md navbar-light">
    <div class="container-fluid">
        <ul class="navbar-nav ml-auto">
          <li class="nav-item active"><a href="../index.php" class="nav-link">Accueil</a></li>
          <li class="nav-item"><a href="#" class="nav-link">gestion Produit</a></li>
          <li class="nav-item"><a href="Ajouter_produit.php" class="nav-link">Ajouter un produit</a></li>
          <li class="nav-item"><a href="Afficher_produits.php" class="nav-link">Afficher tout</a></li>
          <li class="nav-item"><a href="Chercher_produit.php" class="nav-link">Cherrcher produit</a></li>
          <li class="nav-item"><a href="Chercher_produits.php" class="nav-link">Chercher tout</a></li>
		  <li class="nav-item"><a href="Supprimer_produit.php" class="nav-link">Supprimer un produit</a></li>
		  <li class="nav-item active"><a href="deconnexion.php" class="nav-link">Deconnexion</a></li>
        </ul>
    </div>
  </nav>
	<h1>Bienvenu <?php  echo $nomUtilisateur;?> </h1>


</body>
</html>