<?php

// Classe représentant un produit
class Utilisateur {
	// Attributs
	private $nomUtilisateur;
	private $prenomUtilisateur;
	private $email;
	private $genre;
	private $infolettre;
	private $administrateur;
	private $motPasse;
	

	// Constructor
	public function __construct($nomUtilisateur, $prenomUtilisateur, $motPasse, $email,$genre,$infolettre=false,$administrateur= false){
		$this->nomUtilisateur=$nomUtilisateur;
		$this->prenomUtilisateur=$prenomUtilisateur;
		$this->email=$email;
		$this->genre=$genre;
		$this->infolettre=$infolettre;
		$this->administrateur=$administrateur;
		$this->motPasse=$motPasse;
	}
	
	// Getters setters
	public function getNom() {return $this->nomUtilisateur;}
	public function getPrenom() {return $this->prenomUtilisateur;}
	public function getEmail() {return $this->email;}
	public function getGenre() {return $this->genre;}
	public function getInfolettre() {return $this->infolettre;}
	public function getAdmin() {return $this->administrateur;}
	public function getMotPasse() {return $this->motPasse;}

	//  methodes
	public function checkPassword($motAVerifier) { return $this->motPasse == $motAVerifier; }
	
	// display
	public function __toString(){
		$message=$this->nomUtilisateur;
		return $message;
	}
}
?>






