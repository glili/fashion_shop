<?php

if (defined("mainFolder") == false) {
	define("mainFolder", $_SERVER['DOCUMENT_ROOT']."/fashion_shop/");
}
// Importe l'interface DAO et la classe Produit
include_once(mainFolder . "modele/DAO/connexionDB.class.php");
include_once(mainFolder . "modele/DAO/DAO.interface.php");
include_once(mainFolder . "modele/DAO/ProduitDAO.class.php");
include_once(mainFolder . "modele/produits.class.php");

 include "header.php";
?>
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
     $prod = new ProduitDAO();
     $prod->display(1);
     echo $prod; 
     
     ?>
    </tbody>
  </table>
</body>

</html>