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
          <li class="nav-item"><a href="Afficher_produits.php" class="nav-link">Afficher tout</a></li>
          <li class="nav-item active"><a href="#" class="nav-link">Cherrcher produit</a></li>
          <li class="nav-item"><a href="Chercher_produits.php" class="nav-link">Chercher tout</a></li>
		  <li class="nav-item"><a href="Supprimer_produit.php" class="nav-link">Supprimer un produit</a></li>
		  <li class="nav-item"><a href="deconnexion.php" class="nav-link">Deconnexion</a></li>
        </ul>
    </div>
  </nav>
<form method="POST" action="Chercher_produit.php">
  <label for="code">Code:</label>
  <input type="text" id="code" name="code">

  <!-- <label for="description">Description:</label>
  <input type="text" id="description" name="description"> -->

  <button type="submit" value="Chercher">Chercher</button>
  <a href="Chercher_produit.php"><input type="button" value="Reset"/><a>
</form>


<table>
  <thead>
  <tr>
    <th>Code</th>
    <th>Titre</th>
    <th>Description</th>
    <th>Marque</th>
    <th>URL Photo</th>
    <th>Prix</th>
    <th>Quantité</th>
  </tr>
  </thead>
  <tbody>
  <?php
 
   if ($_SERVER['REQUEST_METHOD'] === 'POST') {

  if(isset($_POST['code'])){
    $prod= new ProduitDAO();
    $key= $_POST['code'];
    $prod=ProduitDAO::display($key);
    echo "<tr>";  
    echo "<td>".$prod->getCode() ."</td>";
    echo "<td>".$prod->getTitle() ."</td>";
    echo "<td>".$prod->getDescription() ."</td>";
    echo "<td>".$prod->getMarque() ."</td>";
    echo "<td>".$prod->getUrlPhoto() ."</td>";
    echo "<td>".$prod->getPrix() ."</td>";
    echo "<td>".$prod->getQuantite() ."</td>";
  
    echo "</tr>";
  // }else if (isset($_POST['description'])){
  //   $prodv= new ProduitDAO();
  //   $value = $_POST['description'];
  //   $filtre= 'where description Like "$value%"';
  //   $prodv=ProduitDAO::displaySorted($filtre);
  //   foreach($prodv as $value){
  //   echo "<tr>";  
  //   echo "<td>".$value->getCode() ."</td>";
  //   echo "<td>".$value->getTitle() ."</td>";
  //   echo "<td>".$value->getDescription() ."</td>";
  //   echo "<td>".$value->getMarque() ."</td>";
  //   echo "<td>".$value->getUrlPhoto() ."</td>";
  //   echo "<td>".$value->getPrix() ."</td>";
  //   echo "<td>".$value->getQuantite() ."</td>";
  //   echo "</tr>";
  //   }
  // }
  

  }
     
}  
     ?>
  </tbody>
</table>
</body>
</html>