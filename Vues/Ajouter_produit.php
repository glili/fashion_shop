<?php

if (defined("mainFolder") == false) {
	define("mainFolder", $_SERVER['DOCUMENT_ROOT']."/fashion_shop/");
}
// Importe l'interface DAO et la classe Produit
include_once(mainFolder . "modele/DAO/connexionDB.class.php");
include_once(mainFolder . "modele/DAO/DAO.interface.php");
include_once(mainFolder . "modele/DAO/ProduitDAO.class.php");
include_once(mainFolder . "modele/produits.class.php");

session_start();
 include "header.php";
?>

<nav class="navbar navbar-expand-md navbar-light">
    <div class="container-fluid">
        <ul class="navbar-nav ml-auto">
          <li class="nav-item"><a href="../index.php" class="nav-link">Accueil</a></li>
          <li class="nav-item"><a href="gestionProduit.php" class="nav-link">gestion Produit</a></li>
          <li class="nav-item active"><a href="#" class="nav-link">Ajouter un produit</a></li>
          <li class="nav-item"><a href="Afficher_produits.php" class="nav-link">Afficher tout</a></li>
          <li class="nav-item"><a href="Chercher_produit.php" class="nav-link">Cherrcher produit</a></li>
          <li class="nav-item"><a href="Chercher_produits.php" class="nav-link">Chercher tout</a></li>
		  <li class="nav-item"><a href="Supprimer_produit.php" class="nav-link">Supprimer un produit</a></li>
		  <li class="nav-item"><a href="deconnexion.php" class="nav-link">Deconnexion</a></li>
        </ul>
    </div>
  </nav>
<form action="Ajouter_produit.php" method="post">
  <label for="title">Titre:</label>
  <input type="text" id="title" name="title"><br><br>
  <label for="description">Description:</label>
  <input type="text" id="description" name="description"><br><br>
  <label for="marque">Marque:</label>
  <input type="text" id="marque" name="marque"><br><br>
  <label for="urlphoto">URL de la photo:</label>
  <input type="text" id="urlphoto" name="urlphoto"><br><br>
  <label for="prix">Prix:</label>
  <input type="number" id="prix" name="prix"><br><br>
  <label for="quantite">Quantité:</label>
  <input type="number" id="quantite" name="quantite"><br><br>
  <input type="submit" value="Ajouter">
</form>
<?php
if(isset ($_POST['title']) && isset($_POST['description']) && isset ($_POST['marque']) && isset ($_POST['urlPhoto']) && isset ($_POST['quantite']) ){
  $code = $_POST['code'];
  $title = $_POST['title'];
  $description = $_POST['description'];
  $marque = $_POST['marque'];
  $urlPhoto = $_POST['urlPhoto'];
  $prix = $_POST['prix'];
  $quantite = $_POST['quantite'];
 

  $produit = new ProduitDAO();
  $prod = new Produit($code,$title,$desc,$marque,$url,$prix,$qte);
  $produit->insert($prod);
  
}
?>
</body>
</html>