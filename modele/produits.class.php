<?php

// Classe représentant un produit pour vente dans un commerce
class Produit {
        // Attributs
        private $code;
        private $title;
        private $description;
        private $marque;
        private $url_photo;
        private $prix;
        private $quantite;

        // Constructor
        public function constr($title,$description,$marque,$prix,$quantite,$url_photo){
                $this->title=$title;
                $this->description=$description;
                $this->marque=$marque;
                $this->url_photo=$url_photo;
                $this->prix=$prix;
                $this->quantite=$quantite;
        }

        public function __construct($code, $title,$description,$marque,$prix,$quantite,$url_photo){
                $this->code=$code;
                $this->title=$title;
                $this->description=$description;
                $this->marque=$marque;
                $this->url_photo=$url_photo;
                $this->prix=$prix;
                $this->quantite=$quantite;
        }

        

        // Getters setters
        public function getCode() {return $this->code;}
        public function getTitle() {return $this->title;}
        public function getDescription() {return $this->description;}
        public function getMarque() {return $this->marque;}
        public function getUrlPhoto() {return $this->url_photo;}
        public function getPrix() {return $this->prix;}
        public function getQuantite() {return $this->quantite;}
        public function setCode($valeur) {$this->code=$valeur;}
        public function setTitle($valeur) {$this->title=$valeur;}
        public function setDescription($valeur) {$this->description=$valeur;}
        public function setMarque($valeur) {$this->marque=$valeur;}
        public function setQuantite($valeur) {$this->quantite=$valeur;}
        public function setUrlPhoto($valeur) {$this->url_photo=$valeur;}
        public function setPrix($valeur) {$this->prix=$valeur;}

        // methodes
        public function addstock($quantiteAjoutee) {
                $this->quantite+=$quantiteAjoutee;
        }
        public function deleteStock($quantiteEnlevee) {
                $this->quantite-=$quantiteEnlevee;
        }
        public function change_price($pourcentage) {
                $changement=$pourcentage/100.0*$this->prix;
                $this->prix+=$changement;
        }

        // Display
        public function __toString(){
                $message="[#".$this->code."] ".$this->title. ", ".$this->description." - ".$this->marque;
                $message.=" @".round($this->prix,2)."$ (".$this->quantite." en stock)";
                return $message;
        }
}
?>
