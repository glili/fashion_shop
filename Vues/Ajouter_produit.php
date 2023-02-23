<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Document</title>
</head>
<body>
<form action="ajouter_produit.php" method="post">
  <label for="code">Code:</label>
  <input type="text" id="code" name="code"><br><br>
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
</body>
</html>