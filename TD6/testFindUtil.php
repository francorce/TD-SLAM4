<?php
require_once "Trajet.php";

$id = $_POST["trajet_id"];

         try {
            echo "Pour le trajet ".$id." les passagers sont les suivants : <br><br>";
            Trajet::findpassager($id);
        } catch (Exception $ex) {
            echo 'Erreur : ' .$ex;
        }