<?php
require_once ('../model/ModelVoiture.php'); // chargement du modèle
class ControllerVoiture {
 public static function readAll() {
 $tab_v = ModelVoiture::getAllVoitures(); //appel au modèle pour gerer la BD
 require ('../view/voiture/list.php'); //"redirige" vers la vue
 }

public static function read() {
    if (isset($_GET['immat'])){
        $immat=$_GET['immat'];
    $v = ModelVoiture::getVoitureByImmat($immat); //appel au modèle pour gerer la BD
    require ('../view/voiture/detail.php'); //"redirige" vers la vue
        } else {
            echo "Aucune immat a été donné !";
        }
    }



    public static function create() {
    require('../view/voiture/create.php');
}

public static function created() {
    $immatriculation=$_POST['immatriculation'];
    $couleur=$_POST['couleur'];
    $marque=$_POST['marque'];

    $v = new ModelVoiture($marque,$couleur,$immatriculation);
    $v->save($marque,$couleur,$immatriculation);
}

}
?>