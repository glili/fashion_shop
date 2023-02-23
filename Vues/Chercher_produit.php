<?php
 include "header.php";
?>
<form method="POST" action="chercher_produit.php">
  <label for="code">Code:</label>
  <input type="text" id="code" name="code">

  <label for="description">Description:</label>
  <input type="text" id="description" name="description">

  <input type="submit" value="Chercher">
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
  <!-- Display the products that match the search term -->
  </tbody>
</table>
</body>
</html>