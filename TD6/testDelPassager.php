<?php
    require_once 'Trajet.php';
    $data=array(
       "trajet_id" => $_POST["trajet_id"],
       "utilisateur_login" => $_POST["utilisateur_login"],
   );
            
                try {
            Trajet::deletePassager($data);
            echo "<br> <br> Bien supprimé";
        } catch (Exception $ex) {
            echo 'Erreur : ' .$ex;
        }
?>