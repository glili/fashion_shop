<?php

if (defined("mainFolder") == false) {
	define("mainFolder", $_SERVER['DOCUMENT_ROOT']."/fashion_shop/");
}

// $mainFolder = $_SERVER['DOCUMENT_ROOT'].root_folder;

include_once (mainFolder . 'modele/DAO/configs/configDB.interface.php');


class ConnexionDB
{

	private static $instance = null;

	// Constructeur de ConnexionDB inutilisable de l’extérieur
	private function __construct()
	{
	}

	// Fonction statique qui gère la création de l’instance PDO et la retourne.

	public static function getInstance()
	{

		if (self::$instance == null) {
			$configuration = "mysql:host=" . ConfigDB::BD_HOTE . ";dbname=" . ConfigDB::BD_NOM;
			self::$instance = new PDO(
				$configuration,
				ConfigDB::BD_UTILISATEUR,
				ConfigDB::BD_MOT_PASSE
			);
			self::$instance->exec("SET character_set_results = 'utf8'");
			self::$instance->exec("SET character_set_client = 'utf8'");
			self::$instance->exec("SET character_set_connection = 'utf8'");
		}

		return self::$instance;
	}


	public static function close()
	{
		self::$instance = null;
	}
}
