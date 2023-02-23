<?php
if (defined("mainFolder") == false) {
	define("mainFolder", $_SERVER['DOCUMENT_ROOT']."/fashion_shop/");
}
	
	include_once (mainFolder.'modele/DAO/connexionDB.class.php');

	interface DAO {	
		
		static public function display($key); 

		static public function displayAll(); 
		
		static public function displaySorted($filtre); 

		static public function insert($object); 
	
		static public function modify($unObjet); 
		
		static public function delete($unObjet); 
	}
?>