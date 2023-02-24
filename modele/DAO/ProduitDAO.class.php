<?php
/* Description : DAO pour la classe produit*/
if (defined("mainFolder") == false) {
	define("mainFolder", $_SERVER['DOCUMENT_ROOT']."/fashion_shop/");
}
// Importe l'interface DAO et la classe Produit
include_once(mainFolder . "modele/DAO/connexionDB.class.php");
include_once(mainFolder . "modele/DAO/DAO.interface.php");
include_once(mainFolder . "modele/produits.class.php");


// ****** CLASSE *******
class ProduitDAO implements DAO
{

	/// Cette méthode doit retourner l'objet dont la clé primaire a été reçu en paramètre
	// 1) null si non-trouvé, 
	//  2) Si la clé primaire est composée, alors le paramètre est un tableau assiociatif

	public static function display($key)
	{
		// obtenir la connexion
		try {
			$connexion = ConnexionDB::getInstance();
		} catch (Exception $e) {
			throw new Exception("pas de connexion a la BD.");
		}

		$leProduit = null;
		//PDOStatement avec des paramètres SQL	
		$query = $connexion->prepare("SELECT * FROM Produits WHERE code=?");

		$query->execute(array($key));
		// créer l’instance du Produit
		if ($query->rowCount() > 0) {
			$tab = $query->fetch();
			$leProduit = new Produit($tab['code'], $tab['title'], $tab['description'], $tab['marque'], $tab['url_photo'], $tab['prix'], $tab['quantite']);
		}

		$query->CloseCursor();
		ConnexionDB::close();
		// retourner le produit
		return $leProduit;
	}


	static public function displayAll()
	{
			// obtenir la connexion
			try {
				$connexion = ConnexionDB::getInstance();
			} catch (Exception $e) {
				throw new Exception("Impossible d’obtenir la connexion à la BD.");
			}
	
			$liste = array();
			// PDOStatement avec des paramètres SQL	
			$query = $connexion->prepare("SELECT * FROM Produits ");
	
			$query->execute();
	
			foreach ($query as $tab) {
				$leProduit = new Produit($tab['code'], $tab['title'], $tab['description'], $tab['marque'], $tab['url_photo'], $tab['prix'], $tab['quantite']);
				array_push($liste, $leProduit);
			}
			$query->closeCursor();
			ConnexionDB::close();
	
			return $liste;
		}

	// applicant le filtre (clause WHERE ...) reçue en param.
	static public function displaySorted($filtre)
	{
		// obtenir la connexion
		try {
			$connexion = ConnexionDB::getInstance();
		} catch (Exception $e) {
			throw new Exception("Impossible d’obtenir la connexion à la BD.");
		}

		$liste = array();
		// PDOStatement avec des paramètres SQL	
		$query = $connexion->prepare("SELECT * FROM Produits " . $filtre);

		$query->execute();

		foreach ($query as $tab) {
			$leProduit = new Produit($tab['code'], $tab['title'], $tab['description'], $tab['marque'], $tab['prix'], $tab['quantite'], $tab['url_photo']);
			array_push($liste, $leProduit);
		}
		$query->closeCursor();
		ConnexionDB::close();

		return $liste;
	}

	static function insert($unProduit)
	{

		try {
			$connexion = ConnexionDB::getInstance();
		} catch (Exception $e) {
			throw new Exception("Impossible d’obtenir la connexion à la BD.");
		}

		$commandeSQL = "INSERT INTO Produits (code,title,description,marque,prix,quantite,url_photo)";
		$commandeSQL .= "VALUES(?,?,?,?,?,?,?)";
		$tab = array($unProduit->getCode(),$unProduit->getTitle(), $unProduit->getDescription(),$unProduit->getMarque(),$unProduit->getPrix(), $unProduit->getQuantite(),$unProduit->getUrlPhoto());
		$requete = $connexion->prepare($commandeSQL);

		return $requete->execute($tab);
	}


	static public function modify($unProduit)
	{
		try {
			$connexion = ConnexionDB::getInstance();
		} catch (Exception $e) {
			throw new Exception("Impossible d’obtenir la connexion à la BD.");
		}
		$commandeSQL = "UPDATE Produits (codetitle,description,marque,prix,quantite,urlPhoto)";
		$query = $connexion->prepare($commandeSQL);
		$tab = array($unProduit->getCode(),$unProduit->getTitle(), $unProduit->getDescription(),$unProduit->getMarque(),$unProduit->getPrix(), $unProduit->getQuantite(),$unProduit->getUrlPhoto());
		return	$query->execute($tab);
	}

	static public function delete($unProduit)
	{
		try {
			$connexion = ConnexionDB::getInstance();
		} catch (Exception $e) {
			throw new Exception("Impossible d’obtenir la connexion à la BD.");
		}
		$commandeSQL = "DELETE FROM Produits WHERE code=?";
		$query = $connexion->prepare($commandeSQL);
		return	$query->execute([$unProduit->getCode()]);
	}
}
