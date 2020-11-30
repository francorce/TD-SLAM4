<?php
class Voiture {
 
 private $marque;
 private $couleur;
 private $immatriculation;

 // un getter
 public function getcouleur() {
 return $this->couleur;
 }

 public function getMarque() {
 return $this->marque;
 }
 
 public function getimmatriculation() {
 return $this->immatriculation;
 }

 // un setter
 public function setcouleur($couleur) {
    
 $this->couleur = $couleur;
        
 }

 public function setMarque($marque) {
 $this->marque = $marque;
 }

 public function setimmatriculation($immatriculation) {
    if(strlen($immatriculation) < 8) {
        $this->immatriculation = substr($immatriculation,0,8);
    }
    else{
        $this->immatriculation = $immatriculation;
        }
 }
 // un constructeur
 public function __construct($m, $c, $i) {
 $this->marque = $m;
 $this->couleur = $c;
 $this->immatriculation = $i;
 }

 // une methode d'affichage.
 public function afficher() {
    
    echo $this->marque."<br>";
    echo $this->couleur."<br>";
    echo $this->immatriculation."<br>";

 // À compléter dans le prochain exercice
 }
}
?>
