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
          <li class="nav-item"><a href="Ajouter_produit.php" class="nav-link">Ajouter un produit</a></li>
          <li class="nav-item active"><a href="#" class="nav-link">Afficher tout</a></li>
          <li class="nav-item"><a href="Chercher_produit.php" class="nav-link">Cherrcher produit</a></li>
          <li class="nav-item"><a href="Chercher_produits.php" class="nav-link">Chercher tout</a></li>
		  <li class="nav-item"><a href="Supprimer_produit.php" class="nav-link">Supprimer un produit</a></li>
		  <li class="nav-item"><a href="deconnexion.php" class="nav-link">Deconnexion</a></li>
        </ul>
    </div>
  </nav>
  <h1>Liste des produits</h1>
  <table>
    <thead>
      <tr>
        <th>Code</th>
        <th>Titre</th>
        <th>Description</th>
        <th>Marque</th>
        <th>URL de photo</th>
        <th>Prix</th>
        <th>Quantité</th>
      </tr>
    </thead>
    <tbody>
     <?php
     $prod= new ProduitDAO();
     $prod=ProduitDAO::displayAll();
     echo "<tr>";
     foreach ($prod as $value) {
         
         echo "<td>".$value->getCode() ."</td>";
         echo "<td>".$value->getTitle() ."</td>";
         echo "<td>".$value->getDescription() ."</td>";
         echo "<td>".$value->getMarque() ."</td>";
         echo "<td>".$value->getUrlPhoto() ."</td>";
         echo "<td>".$value->getPrix() ."</td>";
         echo "<td>".$value->getQuantite() ."</td>";
        
         echo "</tr>";
     }
     
     ?>
    </tbody>
  </table>
</body>

</html>