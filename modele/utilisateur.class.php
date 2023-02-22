<?php

// Classe représentant un produit pour vente dans un commerce
class Utilisateur {
	// Attributs
	private $nomUtilisateur;
	private $prenomUtilisateur;
	private $email;
	private $genre;
	private $infolettre;
	private $administrateur;
	private $motPasse;
	

	// Constructeur
	public function __construct($nomUtilisateur, $prenomUtilisateur, $email,$genre,$infolettre,$administrateur,$motPasse){
		$this->nomUtilisateur=$nomUtilisateur;
		$this->prenomUtilisateur=$prenomUtilisateur;
		$this->email=$email;
		$this->genre=$genre;
		$this->infolettre=$infolettre;
		$this->administrateur=$administrateur;
		$this->motPasse=$motPasse;
	}
	
	// Accesseurs et mutateurs
	public function getNomUtilisateur() {return $this->nomUtilisateur;}
	public function getPrenomUtilisateur() {return $this->prenomUtilisateur;}
	public function getEmai() {return $this->email;}
	public function getGenre() {return $this->genre;}
	public function getInfolettre() {return $this->infolettre;}
	public function getAdmin() {return $this->administrateur;}
	public function getMotPasse() {return $this->motPasse;}

	// Autres méthodes
	public function verifierMotPasse($motAVerifier) { return $this->motPasse == $motAVerifier; }
	
	// Affichage
	public function __toString(){
		$message=$this->nomUtilisateur;
		return $message;
	}
}
?>






