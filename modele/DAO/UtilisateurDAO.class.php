<?php
	if (defined("mainFolder") == false) {
		define("mainFolder", $_SERVER['DOCUMENT_ROOT']."/fashion_shop/");
	}
	// Importe l'interface DAO et la classe Utilisateur
	include_once(mainFolder . "modele/DAO/connexionDB.class.php");
	include_once(mainFolder."modele/DAO/DAO.interface.php");
	include_once(mainFolder."modele/utilisateur.class.php");

	class UserDAO implements DAO {	
		// Cette méthode doit retourner l'objet dont la clé primaire a été reçu en paramètre
		// 1) null si non-trouvé, 
		//  2) Si la clé primaire est composée, alors le paramètre est un tableau assiociatif
		
		
		public static function display($key) { 
			try {
				$connexion=ConnexionDB::getInstance();
			} catch (Exception $e) {
				throw new Exception(" connexion à la BD refusee."); 
			}
			
			$leUtilisateur=null; 
			
			// PDOStatement avec des paramètres SQL	
			$query= $connexion->prepare("SELECT * FROM Utilisateurs WHERE nom=:leNom");
			// Attacher des variables PHP au paramètres SQL avec le code du Utilisateur 
			// reçu du paramètre $cles
			$query->bindParam(":leNom",$key);  
		  

			$query->execute();			
			
	
			if ($query->rowCount() > 0) {
				$row=$query->fetch();
				$leUtilisateur=new Utilisateur($row['id'],$row['nom'], $row['prenom'],$row['mot_passe'], $row['email'], $row['genre'],$row['infolettre'], $row['administrateur']);
			}
			// fermer le curseur de la requête et la connexion à la BD
			$query-> closeCursor();
			ConnexionDB::close();	
		  
			return $leUtilisateur;	 
		} 
		
		// Cette méthode doit retourner une liste de tous les objets reliés à la table de la BD
		static public function displayAll() { 
			return self::displaySorted("");
		} 
		
		// applicant le filtre (clause WHERE ...)
		static public function displaySorted($filtre){ 
			try {
				$connexion=ConnexionDB::getInstance();
			} catch (Exception $e) {
				throw new Exception("la connexion à la BD n'est pas installe."); 
			}
			// initialisation du tableau vide
			$liste = array(); 
				
			// Préparer une requête de type PDOStatement avec des paramètres SQL	
			$query= $connexion->prepare("SELECT * FROM Utilisateurs ".$filtre);

			// Exécuter la requête
			$query-> execute();			

			// Analyser les enristrements s'il y en a 
			foreach ($query as $row) {
				$leUtilisateur=new Utilisateur($row['id'], $row['nom'], $row['prenom'],$row['mot_passe'], $row['email'], $row['genre'],$row['infolettre'], $row['administrateur']);
				array_push($liste, $leUtilisateur);
			}
			// fermer le curseur de la requête et la connexion à la BD
			$query-> closeCursor();
			ConnexionDB::close();	
			
			return $liste;	 
		} 
		
		static function insert($user){ 
			// on essaie d’établiur la connexion
			try {
				$connexion=ConnexionDB::getInstance();
			} catch (Exception $e) {
				throw new Exception("Impossible d’obtenir la connexion à la BD."); 
			}
			//  prepare insert
			$commandeSQL  = "INSERT INTO Utilisateurs (nom,prenom,mot_passe,email,genre,infolettre,administrateur)";  
			$commandeSQL .=  "VALUES (?,?,?,?,?,?,?)";
			
			$query = $connexion->prepare($commandeSQL);

			$tab = [$user->getNom(),$user->getPrenom(), $user->getMotPasse(), $user->getEmail(), $user->getGenre(), $user->getInfolettre(), $user->getAdmin()];
			return	$query-> execute($tab);
		}

		// Cette méthode modifie tous les champs (non-clé primaire) de l'objet reçu en paramètre dans la table
		
		static public function modify($user) {
			try {
				$connexion=ConnexionDB::getInstance();
			} catch (Exception $e) {
				throw new Exception("Impossible d’obtenir la connexion à la BD."); 
			}
			$commandeSQL = "UPDATE Utilisateurs SET nom=?, mot_passe=?";
			$query = $connexion->prepare($commandeSQL);
			$tab = [$user->getNom(),$user->getPrenom(), $user->getMotPasse(), $user->getEmail(), $user->getGenre(), $user->getInfolettre(), $user->getAdmin()];
			return	$query-> execute($tab);
		}
		// Cette méthode supprime l'objet reçu en paramètre de la table
		
		static public function delete($user){
			try {
				$connexion=ConnexionDB::getInstance();
			} catch (Exception $e) {
				throw new Exception("Impossible d’obtenir la connexion à la BD."); 
			}
			$commandeSQL = "DELETE FROM Utilisateurs WHERE nom=?";
			$query = $connexion->prepare($commandeSQL);
			return	$query-> execute([$user->getNom()]);
		} 
		
		
		
	}
	
?>