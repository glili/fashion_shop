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
		$query = $connexion->prepare("SELECT * FROM produits WHERE code=?");

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
			$query = $connexion->prepare("SELECT * FROM produits ");
	
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
		$query = $connexion->prepare("SELECT * FROM produits " . $filtre);

		$query->execute();

		foreach ($query as $tab) {
			$leProduit = new Produit($tab['code'], $tab['title'], $tab['description'], $tab['marque'], $tab['url_photo'], $tab['prix'], $tab['quantite']);
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

		$commandeSQL = "INSERT INTO produits (code, title, description,marque, url_photo, prix, quantite)";
		$commandeSQL .= "VALUES(?,?,?,?,?,?,?)";
		$tab = array($unProduit->get_code(), $unProduit->get_description(), $unProduit->get_url_photo(), $unProduit->get_prix(), $unProduit->get_quantite());
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
		$commandeSQL = "UPDATE produits (code, title, description,marque, url_photo, prix, quantite)";
		$query = $connexion->prepare($commandeSQL);
		$tab = array($unProduit->get_code(), $unProduit->get_description(), $unProduit->get_url_photo(), $unProduit->get_prix(), $unProduit->get_quantite());
		return	$query->execute($tab);
	}

	static public function delete($unProduit)
	{
		try {
			$connexion = ConnexionDB::getInstance();
		} catch (Exception $e) {
			throw new Exception("Impossible d’obtenir la connexion à la BD.");
		}
		$commandeSQL = "DELETE FROM produits WHERE code=?";
		$query = $connexion->prepare($commandeSQL);
		return	$query->execute([$unProduit->getCode()]);
	}
}
