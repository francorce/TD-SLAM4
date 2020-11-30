<?php
require_once "Utilisateur.php";

$login = $_POST["login"];
         try {
             echo "Pour l'utilisateur ".$login." les trajets auxquelles il participe sont les suivants : <br><br>";
             Utilisateur::findTrajet($login);
             
        } catch (Exception $ex) {
            echo 'Erreur : ' .$ex;
        }