<?php
require_once 'Voiture.php';
   if ( isset( $_POST["immatriculation"]) ) {

     $plaque = $_POST['immatriculation']; 


     echo "<h3>Votre plaque d'immatriculation est : </h3>"; 
     echo $plaque."<br>" ; 
    
  }
  if ( isset( $_POST["marque"]) ) {

    $marque = $_POST['marque']; 


    echo "<h3>Votre voiture est de la marque : </h3>"; 
    echo $marque."<br>" ; 
   
 }
 if ( isset( $_POST["couleur"]) ) {

    $couleur = $_POST['couleur']; 


    echo "<h3>Votre voiture est de couleur : </h3>"; 
    echo $couleur."<br>" ; 
   
 }
?>