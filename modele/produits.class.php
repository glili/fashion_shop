<?php

// Classe représentant un produit pour vente dans un commerce
class Produit {
        // Attributs
        private $code;
        private $title;
        private $description;
        private $marque;
        private $urlPhoto;
        private $prix;
        private $quantite;

        // Constructor
        public function __construct($code, $title,$desc,$marque,$url,$prix,$qte){
                $this->code=$code;
                $this->title=$title;
                $this->description=$desc;
                $this->marque=$marque;
                $this->urlPhoto=$url;
                $this->prix=$prix;
                $this->quantite=$qte;
        }

        // Getters setters
        public function getCode() {return $this->code;}
        public function getTitle() {return $this->title;}
        public function getDescription() {return $this->description;}
        public function getMarque() {return $this->marque;}
        public function getUrlPhoto() {return $this->urlPhoto;}
        public function getPrix() {return $this->prix;}
        public function getQuantite() {return $this->quantite;}
        public function setCode($valeur) {$this->code=$valeur;}
        public function setTitle($valeur) {$this->title=$valeur;}
        public function setDescription($valeur) {$this->description=$valeur;}
        public function setMarque($valeur) {$this->marque=$valeur;}
        public function setQuantite($valeur) {$this->quantite=$valeur;}
        public function setUrlPhoto($valeur) {$this->urlPhoto=$valeur;}
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
